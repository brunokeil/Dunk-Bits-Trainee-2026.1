<?php

namespace App\Controllers;

use App\Core\App;
use Exception;

class LandingPageController
{
    function getUltimosJogosNBA(int $quantidade)
    {
        $url = "https://stats.nba.com/stats/leaguegamefinder?LeagueID=00&PlayerOrTeam=T&Direction=DESC&Sorter=DATE";

        $ch = curl_init();
        $headers = [
            "Host: stats.nba.com",
            "User-Agent: Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/120.0.0.0 Safari/537.36",
            "Accept: application/json, text/plain, */*",
            "Accept-Language: pt-BR,pt;q=0.9,en-US;q=0.8,en;q=0.7",
            "Accept-Encoding: gzip, deflate, br",
            "Connection: keep-alive",
            "Origin: https://www.nba.com",
            "Referer: https://www.nba.com/",
            "Sec-Fetch-Dest: empty",
            "Sec-Fetch-Mode: cors",
            "Sec-Fetch-Site: same-site"
        ];

        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
        curl_setopt($ch, CURLOPT_TIMEOUT, 15);
        curl_setopt($ch, CURLOPT_ENCODING, "");

        $resposta = curl_exec($ch);
        curl_close($ch);

        $jogosFormatados = [];

        if ($resposta) {
            $dados = json_decode($resposta, true);

            $linhas = $dados['resultSets'][0]['rowSet'] ?? [];

            foreach ($linhas as $l) {
                if (count($jogosFormatados) >= $quantidade) {
                    $ultimoJogo = end($jogosFormatados);

                    if ($ultimoJogo && !empty($ultimoJogo['casa']) && !empty($ultimoJogo['visitante'])) {
                        break;
                    }
                }

                $teamId    = $l[1] ?? null;
                $sigla     = $l[2] ?? 'SR';
                $nome      = $l[3] ?? 'Time';
                $gameId    = $l[4] ?? null;
                $dataJogo  = $l[5] ?? date('Y-m-d');
                $confronto = $l[6] ?? '';
                $pontos    = $l[9] ?? 0;

                if (!$gameId) {
                    continue;
                }

                if (!isset($jogosFormatados[$gameId])) {
                    $jogosFormatados[$gameId] = [
                        'data'      => $dataJogo,
                        'casa'      => [],
                        'visitante' => []
                    ];
                }

                $dadosTime = [
                    'id'         => $teamId,
                    'nome'       => $nome,
                    'abreviacao' => $sigla,
                    'pontos'     => $pontos,
                    'logo'       => "https://cdn.nba.com/logos/nba/{$teamId}/global/L/logo.svg"
                ];

                if (str_contains($confronto, 'vs.')) {
                    $jogosFormatados[$gameId]['casa'] = $dadosTime;
                } else {
                    $jogosFormatados[$gameId]['visitante'] = $dadosTime;
                }
            }
        }

        return $jogosFormatados;
    }

    public function existPhotoPost($imageName)
    {
        $imagemPadrao = "/public/assets/post_featured_pics/padrao.png";

        if (empty($imageName)) {
            return $imagemPadrao;
        }

        $caminhoFisico = $imageName;

        if (file_exists($caminhoFisico)) {
            return $caminhoFisico;
        }

        return $imagemPadrao;
    }

    public function index()
    {
        $database = App::get("database");

        $jogosFormatados = $this->getUltimosJogosNBA(10);


        $posts = $database->paginate('posts', 10, 0, null, null, null);

        foreach ($posts as $p) {

            $p->authorData = $database->selectOne('users', $p->author);

            $p->imagem_exibicao = $this->existPhotoPost($p->cover_image);
        }

        return view('site/landing-page', [
            'posts' => $posts,
            'jogosFormatados' => $jogosFormatados
        ]);
    }
}

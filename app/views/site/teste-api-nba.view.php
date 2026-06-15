<!DOCTYPE html>
<html lang="pt-BR">

<head>
  <meta charset="UTF-8">
  <title>Teste Cru NBA</title>
</head>

<body>

  <h1>Confrontos NBA</h1>

  <table>
    <thead>
      <tr>
        <th>Data</th>
        <th>Logo Visitante</th>
        <th>Visitante (Sigla)</th>
        <th>Placar</th>
        <th>Casa (Sigla)</th>
        <th>Logo Casa</th>
      </tr>
    </thead>
    <tbody>
      <?php foreach ($jogosFormatados as $gameId => $jogo): ?>
        <tr>
          <td><?= substr($jogo['data'] ?? '', 0, 10) ?></td>

          <td><img src="<?= $jogo['visitante']['logo'] ?? '' ?>" width="30"></td>
          <td><?= $jogo['visitante']['nome'] ?? 'Não encontrado' ?> (<?= $jogo['visitante']['abreviacao'] ?? '---' ?>)</td>

          <td align="center">
            <b><?= $jogo['visitante']['pontos'] ?? 0 ?></b> x <b><?= $jogo['casa']['pontos'] ?? 0 ?></b>
          </td>

          <td><?= $jogo['casa']['nome'] ?? 'Não encontrado' ?> (<?= $jogo['casa']['abreviacao'] ?? '---' ?>)</td>
          <td><img src="<?= $jogo['casa']['logo'] ?? '' ?>" width="30"></td>
        </tr>
      <?php endforeach; ?>
    </tbody>
  </table>

</body>

</html>
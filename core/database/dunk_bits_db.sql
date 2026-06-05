-- phpMyAdmin SQL Dump
-- version 5.2.3
-- https://www.phpmyadmin.net/
--
-- Host: db
-- Tempo de geração: 28/05/2026 às 23:21
-- Versão do servidor: 8.0.45
-- Versão do PHP: 8.3.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `dunk_bits_db`
--

-- --------------------------------------------------------

--
-- Estrutura para tabela `comments`
--

CREATE TABLE `comments` (
  `id` int NOT NULL,
  `content` text NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `author` int NOT NULL,
  `post_id` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Despejando dados para a tabela `comments`
--

INSERT INTO `comments` (`id`, `content`, `created_at`, `author`, `post_id`) VALUES
(1, 'Esse jogo dos Lakers foi absurdo.', '2026-05-25 13:32:51', 2, 1),
(2, 'Finalmente entendi como funciona o Draft.', '2026-05-25 13:32:51', 1, 2),
(3, 'A enterrada do Ja Morant tinha que estar em primeiro.', '2026-05-25 13:32:51', 4, 3),
(4, 'O basquete brasileiro merece mais reconhecimento.', '2026-05-25 13:32:51', 5, 4),
(5, 'Curry mudou o esporte pra sempre.', '2026-05-25 13:32:51', 3, 5),
(6, 'Esse time do Celtics tá muito entrosado, não tem quem segure.', '2026-05-25 14:15:00', 12, 6),
(7, 'Jokic é gênio, basquete fácil demais pra ele.', '2026-05-25 14:20:00', 3, 7),
(8, 'Boas dicas! Vou tentar mudar meu cotovelo no arremesso hoje.', '2026-05-25 14:25:00', 21, 8),
(9, 'Franca é gigante, que orgulho da capital do basquete!', '2026-05-25 14:30:00', 44, 9),
(10, 'A facilidade do Luka impressiona, faz o jogo parecer em câmera lenta.', '2026-05-25 14:35:00', 31, 10),
(11, 'Tô precisando de um tênis novo, esse artigo caiu na hora certa.', '2026-05-25 14:40:00', 9, 11),
(12, 'Que atropelo do Giannis, coitado do pivô adversário kkk', '2026-05-25 14:45:00', 18, 12),
(13, 'Mengão no topo! Rumo ao título das Américas!', '2026-05-25 14:50:00', 50, 13),
(14, 'Wemby é um alien. A envergadura dele é surreal.', '2026-05-25 14:55:00', 27, 14),
(15, 'Sempre achei que isso fosse andada, bom saber!', '2026-05-25 15:00:00', 5, 15),
(16, 'Infelizmente a dinastia do GSW chegou ao fim. É hora de renovar.', '2026-05-25 15:05:00', 14, 16),
(17, 'Meu deus, essa eu vi ao vivo! Poster do ano com certeza.', '2026-05-25 15:10:00', 39, 17),
(18, 'Minas está jogando muito, baita trabalho da comissão técnica.', '2026-05-25 15:15:00', 42, 18),
(19, 'O armador hoje tem que ser um pontuador também, não tem jeito.', '2026-05-25 15:20:00', 16, 19),
(20, 'KD faz ponto como quem bebe água, um dos maiores da história.', '2026-05-25 15:25:00', 22, 20),
(21, 'Sempre tive dúvida sobre a luxury tax, valeu pela explicação!', '2026-05-25 15:30:00', 1, 21),
(22, 'Quebrou os tornozelos real! Kyrie tem o melhor controle de bola da liga.', '2026-05-25 15:35:00', 48, 22),
(23, 'Belo reforço do SPFC, agora o garrafão fica pesado.', '2026-05-25 15:40:00', 33, 23),
(24, 'Saudades daquele time dos Spurs de 2014, melhor basquete coletivo.', '2026-05-25 15:45:00', 10, 24),
(25, 'Comecei a fazer os exercícios com duas bolas e já notei evolução.', '2026-05-25 15:50:00', 41, 25),
(26, 'O aro deve chorar cada vez que o Zion pula.', '2026-05-25 15:55:00', 17, 26),
(27, 'Bauru nunca desiste! Esse buzzer beater foi histórico.', '2026-05-25 16:00:00', 29, 27),
(28, 'Pick and roll bem executado é impossível de marcar, fato.', '2026-05-25 16:05:00', 4, 28),
(29, 'Nunca duvidem do Miami Heat nos playoffs.', '2026-05-25 16:10:00', 38, 29),
(30, 'Passe absurdo! Nem eu na TV entendi pra onde a bola foi.', '2026-05-25 16:15:00', 8, 30),
(31, 'Muito importante criar um draft pro NBB e valorizar a base.', '2026-05-25 16:20:00', 47, 31),
(32, 'Devin Booker com a mão quente é um espetáculo.', '2026-05-25 16:25:00', 15, 32),
(33, 'Vou adicionar a pliometria no meu treino de pernas amanhã.', '2026-05-25 16:30:00', 24, 33),
(34, 'SGA merece o MVP esse ano, consistência pura.', '2026-05-25 16:35:00', 11, 34),
(35, 'Vamos Brasil! Precisamos voltar pras Olimpíadas.', '2026-05-25 16:40:00', 36, 35),
(36, 'Aquele duelo do LaVine com o Gordon em 2016 foi o melhor de todos.', '2026-05-25 16:45:00', 20, 36),
(37, 'Zona 2-3 é a salvação quando o time adversário não chuta bem de três.', '2026-05-25 16:50:00', 32, 37),
(38, 'A torcida dos Knicks faz falta nos playoffs, clima de MSG é diferente.', '2026-05-25 16:55:00', 7, 38),
(39, 'Toco monstruoso! Fez a leitura perfeita do ataque.', '2026-05-25 17:00:00', 45, 39),
(40, 'Pinheiros sempre revelando bons jogadores, parabéns à base.', '2026-05-25 17:05:00', 26, 40),
(41, 'Basquete 3x3 é muito dinâmico, gosto mais de assistir que o tradicional as vezes.', '2026-05-25 17:10:00', 2, 41),
(42, 'Rodman e Russell, lendas absolutas nos rebotes.', '2026-05-25 17:15:00', 35, 42),
(43, 'Sempre arremesso do meio da quadra na pelada e erro todas kkkk', '2026-05-25 17:20:00', 19, 43),
(44, 'Corinthians precisa ajustar a defesa no garrafão urgente.', '2026-05-25 17:25:00', 49, 44),
(45, 'Excelente artigo. Pra mim, a gestão de grupo do técnico é o mais importante.', '2026-05-25 17:30:00', 13, 45),
(46, 'Não esperava aquela troca de jeito nenhum, mudou o panorama da liga.', '2026-05-25 17:35:00', 23, 46),
(47, 'Ponte aérea no contra-ataque levanta qualquer torcida.', '2026-05-25 17:40:00', 46, 47),
(48, 'Boa notícia para o Vasco, o NBB precisa de times de camisa fortes.', '2026-05-25 17:45:00', 6, 48),
(49, 'Sempre achei a bola da FIBA melhor para chutar de fora.', '2026-05-25 17:50:00', 30, 49),
(50, 'Eurostep do Ginóbili era arte pura, o cara ensinou a liga inteira a fazer.', '2026-05-25 17:55:00', 40, 50);

-- --------------------------------------------------------

--
-- Estrutura para tabela `posts`
--

CREATE TABLE `posts` (
  `id` int NOT NULL,
  `title` varchar(255) NOT NULL,
  `content` text NOT NULL,
  `cover_image` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `author` int NOT NULL,
  `type` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Despejando dados para a tabela `posts`
--

INSERT INTO `posts` (`id`, `title`, `content`, `cover_image`, `created_at`, `author`, `type`) VALUES
(1, 'Lakers vencem clássico em jogo emocionante', 'O Los Angeles Lakers conquistou uma vitória importante após uma grande atuação no último quarto.', 'lakers.jpg', '2026-05-25 13:32:51', 1, 'nba'),
(2, 'Como funciona o Draft da NBA?', 'Entenda como as franquias escolhem novos jogadores universitários no Draft.', 'draft.jpg', '2026-05-25 13:32:51', 2, 'basketball'),
(3, 'Top 5 enterradas da temporada', 'Selecionamos as enterradas mais impressionantes da atual temporada da NBA.', 'dunks.jpg', '2026-05-25 13:32:51', 3, 'highlights'),
(4, 'A evolução do basquete brasileiro', 'O cenário do basquete nacional vem crescendo com novos talentos e investimentos.', 'brasil-basket.jpg', '2026-05-25 13:32:51', 4, 'national'),
(5, 'Stephen Curry revoluciona o jogo de 3 pontos', 'A influência de Curry mudou completamente a forma como o basquete moderno é jogado.', 'curry.jpg', '2026-05-25 13:32:51', 5, 'nba'),
(6, 'Boston Celtics domina os playoffs', 'Com uma defesa impecável, o Celtics mostra favoritismo ao título deste ano.', 'celtics.jpg', '2026-05-25 14:00:00', 6, 'nba'),
(7, 'Nikola Jokic anota mais um triplo-duplo', 'O pivô sérvio continua quebrando recordes na história da liga.', 'jokic.jpg', '2026-05-25 14:05:00', 7, 'nba'),
(8, 'Como melhorar seu arremesso em 3 passos', 'Dicas fundamentais de mecânica de arremesso para aplicar nas quadras.', 'arremesso.jpg', '2026-05-25 14:10:00', 8, 'basketball'),
(9, 'Sesi Franca conquista mais um título', 'Time paulista levanta a taça após uma série final eletrizante.', 'franca_campeao.jpg', '2026-05-25 14:15:00', 9, 'national'),
(10, 'A magia de Luka Doncic', 'A visão de quadra do esloveno está mudando a dinâmica ofensiva em Dallas.', 'doncic.jpg', '2026-05-25 14:20:00', 10, 'nba'),
(11, 'Os melhores tênis de basquete de 2026', 'Fizemos um review completo dos melhores calçados para performance em quadra.', 'sneakers.jpg', '2026-05-25 14:25:00', 11, 'basketball'),
(12, 'Giannis imparável no garrafão', 'O Greek Freak teve uma performance dominante de 40 pontos na última noite.', 'giannis.jpg', '2026-05-25 14:30:00', 12, 'highlights'),
(13, 'Flamengo avança na BCLA', 'Equipe rubro-negra garante vaga no Final Four da Champions League das Américas.', 'flamengo_bcla.jpg', '2026-05-25 14:35:00', 13, 'national'),
(14, 'O impacto de Wembanyama na defesa', 'Como o novato francês está liderando a liga em tocos com facilidade.', 'wemby.jpg', '2026-05-25 14:40:00', 14, 'nba'),
(15, 'Regras de basquete que você não conhecia', 'Algumas infrações obscuras que até mesmo jogadores profissionais esquecem.', 'regras.jpg', '2026-05-25 14:45:00', 15, 'basketball'),
(16, 'Warriors buscam reestruturação', 'Após temporada difícil, Golden State foca em escolhas do draft e trocas.', 'warriors.jpg', '2026-05-25 14:50:00', 16, 'nba'),
(17, 'Jogada da noite: Anthony Edwards', 'O ala-armador voou para o pôster do ano no jogo contra os Suns.', 'edwards_poster.jpg', '2026-05-25 14:55:00', 17, 'highlights'),
(18, 'Minas Tênis Clube faz campanha histórica', 'A equipe mineira quebra o recorde de vitórias consecutivas no NBB.', 'minas_nbb.jpg', '2026-05-25 15:00:00', 18, 'national'),
(19, 'O papel do armador no basquete moderno', 'A evolução da posição 1 e a necessidade de pontuar além de passar.', 'point_guard.jpg', '2026-05-25 15:05:00', 19, 'basketball'),
(20, 'Kevin Durant chega à marca histórica', 'KD ultrapassa lendas e sobe no ranking de maiores pontuadores da NBA.', 'kd_history.jpg', '2026-05-25 15:10:00', 20, 'nba'),
(21, 'Como funciona o teto salarial da NBA', 'Uma explicação simples sobre salary cap, luxury tax e contratos garantidos.', 'salary_cap.jpg', '2026-05-25 15:15:00', 21, 'basketball'),
(22, 'Crossover espetacular de Kyrie Irving', 'Irving quebra os tornozelos do defensor com um drible desconcertante.', 'kyrie_handles.jpg', '2026-05-25 15:20:00', 22, 'highlights'),
(23, 'São Paulo contrata reforço de peso', 'Tricolor paulista anuncia ex-jogador da NBA para o garrafão.', 'spfc_basquete.jpg', '2026-05-25 15:25:00', 23, 'national'),
(24, 'A dinastia dos Spurs: uma retrospectiva', 'Relembrando como Popovich e Duncan dominaram o basquete nos anos 2000.', 'spurs.jpg', '2026-05-25 15:30:00', 24, 'nba'),
(25, 'Dicas para melhorar seu controle de bola', 'Exercícios de drible para fazer sozinho na quadra do seu bairro.', 'dribble_drills.jpg', '2026-05-25 15:35:00', 25, 'basketball'),
(26, 'Zion Williamson amassa o aro', 'Mais um highlight insano do ala-pivô de Nova Orleans após ponte aérea.', 'zion_dunk.jpg', '2026-05-25 15:40:00', 26, 'highlights'),
(27, 'Bauru Basket vira no último segundo', 'Buzzer beater do meio da rua garante vitória na prorrogação no NBB.', 'bauru_buzzer.jpg', '2026-05-25 15:45:00', 27, 'national'),
(28, 'Por que o pick and roll é tão mortal?', 'Entenda a tática ofensiva mais utilizada em todos os níveis de basquete.', 'pick_and_roll.jpg', '2026-05-25 15:50:00', 28, 'basketball'),
(29, 'Heat supera expectativas nos playoffs de novo', 'A cultura de Miami prova seu valor derrotando os favoritos da conferência.', 'heat_culture.jpg', '2026-05-25 15:55:00', 29, 'nba'),
(30, 'Passe mágico no All-Star Game', 'Haliburton distribui assistências sem olhar no jogo das estrelas.', 'haliburton.jpg', '2026-05-25 16:00:00', 30, 'highlights'),
(31, 'Draft do NBB ganha força', 'Liga brasileira estuda novas formas de recrutar jovens da base.', 'nbb_draft.jpg', '2026-05-25 16:05:00', 31, 'national'),
(32, 'Devin Booker chuta para 60 pontos', 'Noite inspirada do ala-armador de Phoenix garante vitória fora de casa.', 'booker.jpg', '2026-05-25 16:10:00', 32, 'nba'),
(33, 'Treino de pernas para saltar mais alto', 'Os melhores exercícios de pliometria para melhorar sua impulsão vertical.', 'jump_higher.jpg', '2026-05-25 16:15:00', 33, 'basketball'),
(34, 'Shai Gilgeous-Alexander entra na corrida para MVP', 'O craque de OKC mostra por que é um dos melhores finalizadores da liga.', 'sga.jpg', '2026-05-25 16:20:00', 34, 'nba'),
(35, 'Brasil briga por vaga nas Olimpíadas', 'Seleção brasileira se prepara para o torneio pré-olímpico com elenco completo.', 'selecao_br.jpg', '2026-05-25 16:25:00', 35, 'national'),
(36, 'As enterradas de concurso do Zach LaVine', 'Revisitamos os saltos que mudaram a história do Slam Dunk Contest.', 'lavine.jpg', '2026-05-25 16:30:00', 36, 'highlights'),
(37, 'A importância da defesa em zona', 'Quando utilizar a marcação 2-3 e como ela pode quebrar o ritmo do adversário.', 'zone_defense.jpg', '2026-05-25 16:35:00', 37, 'basketball'),
(38, 'Knicks de volta à glória no Madison Square Garden', 'A torcida de Nova York finalmente tem motivos para sonhar com título.', 'knicks.jpg', '2026-05-25 16:40:00', 38, 'nba'),
(39, 'Toco monumental salva a partida', 'Defesa no aro no último segundo garante classificação de time universitário.', 'block_win.jpg', '2026-05-25 16:45:00', 39, 'highlights'),
(40, 'Pinheiros foca nas categorias de base', 'Clube paulista revela mais três prospectos promissores para o NBB.', 'pinheiros_base.jpg', '2026-05-25 16:50:00', 40, 'national'),
(41, 'Basquete 3x3 cresce no mundo', 'A modalidade de meia quadra vem conquistando adeptos e patrocínios.', '3x3_basketball.jpg', '2026-05-25 16:55:00', 41, 'basketball'),
(42, 'Os 10 maiores reboteiros da história', 'Quem são os reis do garrafão que dominaram as tábuas ao longo dos anos.', 'reboteiros.jpg', '2026-05-25 17:00:00', 42, 'nba'),
(43, 'Cesta do meio da quadra', 'Jogador acerta arremesso milagroso no estouro do cronômetro antes do intervalo.', 'half_court_shot.jpg', '2026-05-25 17:05:00', 43, 'highlights'),
(44, 'Corinthians Basquete busca reabilitação', 'Time paulista foca em defesa sólida para sair de momento difícil na liga.', 'corinthians_basquete.jpg', '2026-05-25 17:10:00', 44, 'national'),
(45, 'O que faz um bom técnico?', 'Liderança, leitura de jogo ou tática? Analisamos o que cria treinadores lendários.', 'coach_tips.jpg', '2026-05-25 17:15:00', 45, 'basketball'),
(46, 'Trade Deadline: As maiores surpresas', 'Resumo das trocas de última hora que movimentaram o mercado da NBA.', 'trade_deadline.jpg', '2026-05-25 17:20:00', 46, 'nba'),
(47, 'Alley-oop no contra-ataque', 'Conexão perfeita entre armador e pivô levanta a torcida na arena.', 'alley_oop.jpg', '2026-05-25 17:25:00', 47, 'highlights'),
(48, 'Vasco da Gama anuncia novo patrocinador', 'Equipe carioca ganha fôlego financeiro para investir em reforços.', 'vasco_basquete.jpg', '2026-05-25 17:30:00', 48, 'national'),
(49, 'Diferenças entre bola FIBA e NBA', 'Você sabia que o material, tamanho e peso possuem variações?', 'bolas_fiba_nba.jpg', '2026-05-25 17:35:00', 49, 'basketball'),
(50, 'A evolução do Eurostep', 'De Marčiulionis a Ginóbili, até Giannis: como a passada europeia mudou o jogo.', 'eurostep.jpg', '2026-05-25 17:40:00', 50, 'nba');

-- --------------------------------------------------------

--
-- Estrutura para tabela `users`
--

CREATE TABLE `users` (
  `id` int NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(150) NOT NULL,
  `password` varchar(100) NOT NULL,
  `is_admin` tinyint(1) NOT NULL,
  `profile_image` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Despejando dados para a tabela `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `is_admin`, `profile_image`) VALUES
(1, 'João Silva', 'joao@gmail.com', '123456', 1, NULL),
(2, 'Maria Souza', 'maria@gmail.com', '123456', 0, NULL),
(3, 'Carlos Lima', 'carlos@gmail.com', '123456', 0, NULL),
(4, 'Ana Costa', 'ana@gmail.com', '123456', 0, NULL),
(5, 'Pedro Rocha', 'pedro@gmail.com', '123456', 0, NULL),
(6, 'Lucas Almeida', 'lucas.almeida@gmail.com', '123456', 0, NULL),
(7, 'Marina Silva', 'marina.silva@gmail.com', '123456', 0, NULL),
(8, 'Felipe Santos', 'felipe.santos@gmail.com', '123456', 0, NULL),
(9, 'Juliana Oliveira', 'juliana.oliveira@gmail.com', '123456', 0, NULL),
(10, 'Bruno Costa', 'bruno.costa@gmail.com', '123456', 0, NULL),
(11, 'Camila Rocha', 'camila.rocha@gmail.com', '123456', 0, NULL),
(12, 'Diego Martins', 'diego.martins@gmail.com', '123456', 0, NULL),
(13, 'Amanda Lima', 'amanda.lima@gmail.com', '123456', 0, NULL),
(14, 'Tiago Pereira', 'tiago.pereira@gmail.com', '123456', 0, NULL),
(15, 'Letícia Gomes', 'leticia.gomes@gmail.com', '123456', 0, NULL),
(16, 'Rodrigo Carvalho', 'rodrigo.carvalho@gmail.com', '123456', 0, NULL),
(17, 'Patrícia Mendes', 'patricia.mendes@gmail.com', '123456', 0, NULL),
(18, 'Marcelo Ribeiro', 'marcelo.ribeiro@gmail.com', '123456', 0, NULL),
(19, 'Natália Dias', 'natalia.dias@gmail.com', '123456', 0, NULL),
(20, 'Gustavo Alves', 'gustavo.alves@gmail.com', '123456', 0, NULL),
(21, 'Carolina Barbosa', 'carolina.barbosa@gmail.com', '123456', 0, NULL),
(22, 'Ricardo Castro', 'ricardo.castro@gmail.com', '123456', 0, NULL),
(23, 'Beatriz Nunes', 'beatriz.nunes@gmail.com', '123456', 0, NULL),
(24, 'Eduardo Pinto', 'eduardo.pinto@gmail.com', '123456', 0, NULL),
(25, 'Jéssica Monteiro', 'jessica.monteiro@gmail.com', '123456', 0, NULL),
(26, 'Leandro Cardoso', 'leandro.cardoso@gmail.com', '123456', 0, NULL),
(27, 'Aline Teixeira', 'aline.teixeira@gmail.com', '123456', 0, NULL),
(28, 'Henrique Cavalcanti', 'henrique.cavalcanti@gmail.com', '123456', 0, NULL),
(29, 'Bruna Moraes', 'bruna.moraes@gmail.com', '123456', 0, NULL),
(30, 'Marcos Correia', 'marcos.correia@gmail.com', '123456', 0, NULL),
(31, 'Paula Batista', 'paula.batista@gmail.com', '123456', 0, NULL),
(32, 'Vinícius Farias', 'vinicius.farias@gmail.com', '123456', 0, NULL),
(33, 'Tatiana Marques', 'tatiana.marques@gmail.com', '123456', 0, NULL),
(34, 'Fernando Aragão', 'fernando.aragao@gmail.com', '123456', 0, NULL),
(35, 'Renata Vieira', 'renata.vieira@gmail.com', '123456', 0, NULL),
(36, 'Gabriel Viana', 'gabriel.viana@gmail.com', '123456', 0, NULL),
(37, 'Priscila Freitas', 'priscila.freitas@gmail.com', '123456', 0, NULL),
(38, 'Rafael Borges', 'rafael.borges@gmail.com', '123456', 0, NULL),
(39, 'Vanessa Machado', 'vanessa.machado@gmail.com', '123456', 0, NULL),
(40, 'Caio Nogueira', 'caio.nogueira@gmail.com', '123456', 0, NULL),
(41, 'Daniela Ramos', 'daniela.ramos@gmail.com', '123456', 0, NULL),
(42, 'Vitor Pires', 'vitor.pires@gmail.com', '123456', 0, NULL),
(43, 'Bianca Azevedo', 'bianca.azevedo@gmail.com', '123456', 0, NULL),
(44, 'Thiago Novaes', 'thiago.novaes@gmail.com', '123456', 0, NULL),
(45, 'Mariana Diniz', 'mariana.diniz@gmail.com', '123456', 0, NULL),
(46, 'Alex Peixoto', 'alex.peixoto@gmail.com', '123456', 0, NULL),
(47, 'Luana Barros', 'luana.barros@gmail.com', '123456', 0, NULL),
(48, 'Igor Lemos', 'igor.lemos@gmail.com', '123456', 0, NULL),
(49, 'Laura Campos', 'laura.campos@gmail.com', '123456', 0, NULL),
(50, 'André Mourão', 'andre.mourao@gmail.com', '123456', 0, NULL);

--
-- Índices para tabelas despejadas
--

--
-- Índices de tabela `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`id`),
  ADD KEY `comments_ibfk_1` (`author`),
  ADD KEY `post_id` (`post_id`);

--
-- Índices de tabela `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`id`),
  ADD KEY `author` (`author`);

--
-- Índices de tabela `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT para tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `comments`
--
ALTER TABLE `comments`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=51;

--
-- AUTO_INCREMENT de tabela `posts`
--
ALTER TABLE `posts`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=51;

--
-- AUTO_INCREMENT de tabela `users`
--
ALTER TABLE `users`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=51;

--
-- Restrições para tabelas despejadas
--

--
-- Restrições para tabelas `comments`
--
ALTER TABLE `comments`
  ADD CONSTRAINT `comments_ibfk_1` FOREIGN KEY (`author`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE RESTRICT,
  ADD CONSTRAINT `comments_ibfk_2` FOREIGN KEY (`post_id`) REFERENCES `posts` (`id`) ON DELETE CASCADE ON UPDATE RESTRICT;

--
-- Restrições para tabelas `posts`
--
ALTER TABLE `posts`
  ADD CONSTRAINT `posts_ibfk_1` FOREIGN KEY (`author`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE RESTRICT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

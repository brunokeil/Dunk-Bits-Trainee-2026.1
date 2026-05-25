-- phpMyAdmin SQL Dump
-- version 5.2.3
-- https://www.phpmyadmin.net/
--
-- Host: db
-- Tempo de geração: 25/05/2026 às 13:34
-- Versão do servidor: 8.0.46
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
(5, 'Curry mudou o esporte pra sempre.', '2026-05-25 13:32:51', 3, 5);

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
(5, 'Stephen Curry revoluciona o jogo de 3 pontos', 'A influência de Curry mudou completamente a forma como o basquete moderno é jogado.', 'curry.jpg', '2026-05-25 13:32:51', 5, 'nba');

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
(5, 'Pedro Rocha', 'pedro@gmail.com', '123456', 0, NULL);

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
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de tabela `posts`
--
ALTER TABLE `posts`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de tabela `users`
--
ALTER TABLE `users`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

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

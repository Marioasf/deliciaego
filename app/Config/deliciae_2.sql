-- phpMyAdmin SQL Dump
-- version 4.0.10deb1
-- http://www.phpmyadmin.net
--
-- Máquina: localhost
-- Data de Criação: 22-Jan-2015 às 10:01
-- Versão do servidor: 5.5.40-0ubuntu0.14.04.1
-- versão do PHP: 5.5.9-1ubuntu4.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de Dados: `deliciae_2`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `activities`
--

CREATE TABLE IF NOT EXISTS `activities` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `activity_id` int(11) NOT NULL DEFAULT '0',
  `type` enum('post','item','comment','like','add','request','item_comment') NOT NULL,
  `username` varchar(255) NOT NULL,
  `friend_username` varchar(255) NOT NULL,
  `datemade` datetime NOT NULL,
  `checked` smallint(6) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=9 ;

--
-- Extraindo dados da tabela `activities`
--

INSERT INTO `activities` (`id`, `activity_id`, `type`, `username`, `friend_username`, `datemade`, `checked`) VALUES
(1, 1, 'request', 'luis', 'msilva', '2015-01-22 00:00:30', 1),
(2, 1, 'add', 'msilva', 'luis', '2015-01-22 00:03:26', 1),
(3, 1, 'item', 'luis', '', '2015-01-22 02:24:09', 0),
(4, 2, 'request', 'am', 'luis', '2015-01-22 02:47:31', 1),
(5, 2, 'add', 'luis', 'am', '2015-01-22 02:47:45', 1),
(6, 1, 'item_comment', 'luis', 'mario', '2015-01-22 04:10:05', 0),
(7, 2, 'item_comment', 'msilva', 'mario', '2015-01-22 06:42:25', 0),
(8, 4, 'comment', 'am', 'luis', '2015-01-22 06:44:48', 1);

-- --------------------------------------------------------

--
-- Estrutura da tabela `blockedusers`
--

CREATE TABLE IF NOT EXISTS `blockedusers` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `blocker` varchar(16) NOT NULL,
  `blockee` varchar(16) NOT NULL,
  `blockdate` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estrutura da tabela `chat`
--

CREATE TABLE IF NOT EXISTS `chat` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user1` varchar(16) NOT NULL,
  `user2` varchar(16) NOT NULL,
  `text` varchar(255) NOT NULL,
  `datemade` datetime NOT NULL,
  `checked` smallint(6) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=4 ;

--
-- Extraindo dados da tabela `chat`
--

INSERT INTO `chat` (`id`, `user1`, `user2`, `text`, `datemade`, `checked`) VALUES
(1, 'luis', 'msilva', 'hey', '2015-01-22 04:39:31', 1),
(2, 'mario', 'msilva', 'hey', '2015-01-22 04:39:31', 1),
(3, 'msilva', 'luis', 'olá', '2015-01-22 04:39:31', 1);

-- --------------------------------------------------------

--
-- Estrutura da tabela `comments`
--

CREATE TABLE IF NOT EXISTS `comments` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `post` int(11) NOT NULL DEFAULT '0',
  `product` int(11) NOT NULL DEFAULT '0',
  `user` varchar(16) NOT NULL,
  `datemade` datetime NOT NULL,
  `content` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=4 ;

--
-- Extraindo dados da tabela `comments`
--

INSERT INTO `comments` (`id`, `post`, `product`, `user`, `datemade`, `content`) VALUES
(2, 0, 1, 'msilva', '0000-00-00 00:00:00', 'Bem bom para beber no Inverno!'),
(3, 4, 0, 'am', '2015-01-22 06:44:48', 'Bem-vindo Luís! :D');

-- --------------------------------------------------------

--
-- Estrutura da tabela `companies`
--

CREATE TABLE IF NOT EXISTS `companies` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `location` varchar(255) NOT NULL,
  `ifn` int(9) NOT NULL,
  `category` varchar(255) NOT NULL,
  `user` varchar(16) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `website` varchar(255) NOT NULL,
  `about` varchar(255) NOT NULL,
  `picture` varchar(255) NOT NULL,
  `twitter` varchar(255) NOT NULL,
  `facebook` varchar(255) NOT NULL,
  `google` varchar(255) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `name` (`name`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

--
-- Extraindo dados da tabela `companies`
--

INSERT INTO `companies` (`id`, `name`, `address`, `location`, `ifn`, `category`, `user`, `phone`, `email`, `website`, `about`, `picture`, `twitter`, `facebook`, `google`) VALUES
(1, 'Carlos Francisco', 'Rua da Lapa, nº829 Vila do Conde', '', 113323964, 'Venda a retalho', 'mario', '252645823', 'carlosacfrancisco@gmail.com', '', 'Bebidas e outros', 'http://s23.postimg.org/49nwdeasr/logo_1370102_web.jpg', '', '', '');

-- --------------------------------------------------------

--
-- Estrutura da tabela `followers`
--

CREATE TABLE IF NOT EXISTS `followers` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user` varchar(255) NOT NULL,
  `company` varchar(255) NOT NULL,
  `datemade` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

--
-- Extraindo dados da tabela `followers`
--

INSERT INTO `followers` (`id`, `user`, `company`, `datemade`) VALUES
(1, 'luis', 'Carlos Francisco', '2015-01-21 11:06:30');

-- --------------------------------------------------------

--
-- Estrutura da tabela `friends`
--

CREATE TABLE IF NOT EXISTS `friends` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user1` varchar(16) NOT NULL,
  `user2` varchar(16) NOT NULL,
  `datemade` datetime NOT NULL,
  `accepted` int(11) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`),
  UNIQUE KEY `id` (`id`),
  KEY `id_2` (`id`),
  KEY `id_3` (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=3 ;

--
-- Extraindo dados da tabela `friends`
--

INSERT INTO `friends` (`id`, `user1`, `user2`, `datemade`, `accepted`) VALUES
(1, 'luis', 'msilva', '2015-01-22 12:03:21', 1),
(2, 'am', 'luis', '2015-01-22 02:47:43', 1);

-- --------------------------------------------------------

--
-- Estrutura da tabela `groups`
--

CREATE TABLE IF NOT EXISTS `groups` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) NOT NULL,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=3 ;

--
-- Extraindo dados da tabela `groups`
--

INSERT INTO `groups` (`id`, `name`, `created`, `modified`) VALUES
(1, 'admin', NULL, NULL),
(2, 'user', NULL, NULL);

-- --------------------------------------------------------

--
-- Estrutura da tabela `items`
--

CREATE TABLE IF NOT EXISTS `items` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL,
  `picture` varchar(255) NOT NULL,
  `user` varchar(16) NOT NULL,
  `price` float NOT NULL,
  `category` varchar(255) NOT NULL,
  `alias` varchar(255) NOT NULL,
  `datemade` datetime NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `name` (`name`),
  UNIQUE KEY `alias` (`alias`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

--
-- Extraindo dados da tabela `items`
--

INSERT INTO `items` (`id`, `name`, `description`, `picture`, `user`, `price`, `category`, `alias`, `datemade`) VALUES
(1, 'Licor Beirão', 'Licor', 'http://onossocasamento.pt/sites/onossocasamento.pt/files/licor_beirao_001_1.jpg', 'mario', 10, 'Licor', 'licorbeirao', '2015-01-22 00:00:44');

-- --------------------------------------------------------

--
-- Estrutura da tabela `likes`
--

CREATE TABLE IF NOT EXISTS `likes` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `post_id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estrutura da tabela `photos`
--

CREATE TABLE IF NOT EXISTS `photos` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user` varchar(16) NOT NULL,
  `gallery` varchar(16) NOT NULL,
  `filename` varchar(255) NOT NULL,
  `description` varchar(255) DEFAULT NULL,
  `uploaddate` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estrutura da tabela `posts`
--

CREATE TABLE IF NOT EXISTS `posts` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user` varchar(16) NOT NULL,
  `datemade` datetime NOT NULL,
  `content` varchar(255) NOT NULL,
  `picture` varchar(255) NOT NULL,
  `video` varchar(255) NOT NULL,
  `location` varchar(255) NOT NULL,
  `tagged` varchar(255) NOT NULL,
  `title` varchar(25) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=5 ;

--
-- Extraindo dados da tabela `posts`
--

INSERT INTO `posts` (`id`, `user`, `datemade`, `content`, `picture`, `video`, `location`, `tagged`, `title`) VALUES
(1, 'mario', '2015-01-21 23:52:35', 'Distribuição de bebidos e géneros alimentícios na zona de Vila do Conde/Póvoa de Varzim. Não hesite em contactar-nos! ', 'http://s23.postimg.org/49nwdeasr/logo_1370102_web.jpg', '', '', '', 'Empresa Carlos Francisco'),
(2, 'msilva', '2015-01-22 00:00:54', 'Olá a todos!', '', '', '', '', 'Olá'),
(3, 'mario', '2015-01-21 23:52:35', 'Distribuição de bebidos e géneros alimentícios na zona de Vila do Conde/Póvoa de Varzim. Não hesite em contactar-nos! ', 'http://s23.postimg.org/49nwdeasr/logo_1370102_web.jpg', '', '', '', 'Empresa Carlos Francisco'),
(4, 'luis', '2015-01-22 06:44:20', 'Boa tarde,\r\n\r\nChamo-me Luís e queria aproveitar para me apresentar nesta página.', '', '', '', '', 'Apresentação');

-- --------------------------------------------------------

--
-- Estrutura da tabela `useroptions`
--

CREATE TABLE IF NOT EXISTS `useroptions` (
  `id` int(11) NOT NULL,
  `username` varchar(16) NOT NULL,
  `question` varchar(255) DEFAULT NULL,
  `answer` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `username` (`username`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estrutura da tabela `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(16) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `first_name` varchar(255) NOT NULL,
  `last_name` varchar(255) NOT NULL,
  `country` varchar(255) DEFAULT NULL,
  `group_id` int(11) NOT NULL,
  `about` varchar(255) DEFAULT NULL,
  `title` varchar(255) DEFAULT NULL,
  `company` varchar(255) DEFAULT NULL,
  `phone` varchar(255) DEFAULT NULL,
  `picture` varchar(255) DEFAULT NULL,
  `website` varchar(255) DEFAULT NULL,
  `facebook` varchar(255) DEFAULT NULL,
  `google` varchar(255) DEFAULT NULL,
  `twitter` varchar(255) DEFAULT NULL,
  `ip` varchar(255) NOT NULL,
  `signup` datetime NOT NULL,
  `lastlogin` datetime NOT NULL,
  `activated` smallint(6) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `username` (`username`,`email`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=28 ;

--
-- Extraindo dados da tabela `users`
--

INSERT INTO `users` (`id`, `username`, `email`, `password`, `first_name`, `last_name`, `country`, `group_id`, `about`, `title`, `company`, `phone`, `picture`, `website`, `facebook`, `google`, `twitter`, `ip`, `signup`, `lastlogin`, `activated`) VALUES
(20, 'mario', 'marioasfrancisco@gmail.com', '$2a$10$b4OkuDr0whHeNQpXY6eSsOSDI1y4sJfbHSxycWEg7U2cqvnf0M4si', 'Mário', 'Francisco', NULL, 2, NULL, NULL, NULL, NULL, 'http://upload.wikimedia.org/wikipedia/commons/0/06/Pac_Man.svg', NULL, NULL, NULL, NULL, '127.0.0.1', '2015-01-21 05:54:25', '2015-01-22 08:05:37', 1),
(21, 'luis', 'calpis.nomu@gmail.com', '$2a$10$GPFM43r8fJylWme0aiyvfucyFMZplWDJj7FBIKDd.bBv57vTU3hqS', 'Luís', 'Francisco', NULL, 2, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '127.0.0.1', '2015-01-21 22:45:39', '2015-01-22 06:44:57', 1),
(22, 'msilva', 'msilva@fakemail.com', '$2a$10$G0/uAiL8SuLH1NOCDitwjeXu4rwD/9bTul8tZ7azxMfnEbrxpbU1K', 'Manuel', 'Silva', NULL, 2, NULL, NULL, NULL, NULL, 'http://joerussophoto.net/wp-content/uploads/2013/11/Baboon_suit_11_17_13_Napa_STM.jpg', NULL, NULL, NULL, NULL, '127.0.0.1', '2015-01-21 23:39:59', '2015-01-22 06:42:06', 1),
(23, 'am', 'am@fakemail.com', '$2a$10$zkhSLNqE1PHO4veiUYvR.uVPtweeRviSAviUqo2G4ZX3Yr9QfKMvm', 'António', 'Martins', NULL, 2, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '127.0.0.1', '2015-01-22 02:46:00', '2015-01-22 06:44:38', 1);

-- --------------------------------------------------------

--
-- Estrutura da tabela `wishlists`
--

CREATE TABLE IF NOT EXISTS `wishlists` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `product_id` int(11) NOT NULL,
  `user` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

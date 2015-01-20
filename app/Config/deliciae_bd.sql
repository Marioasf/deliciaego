-- phpMyAdmin SQL Dump
-- version 4.0.10deb1
-- http://www.phpmyadmin.net
--
-- Máquina: localhost
-- Data de Criação: 20-Jan-2015 às 17:39
-- Versão do servidor: 5.5.40-0ubuntu0.14.04.1
-- versão do PHP: 5.5.9-1ubuntu4.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de Dados: `deliciaego_bd`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `acos`
--

CREATE TABLE IF NOT EXISTS `acos` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `parent_id` int(10) DEFAULT NULL,
  `model` varchar(255) DEFAULT NULL,
  `foreign_key` int(10) DEFAULT NULL,
  `alias` varchar(255) DEFAULT NULL,
  `lft` int(10) DEFAULT NULL,
  `rght` int(10) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `idx_acos_lft_rght` (`lft`,`rght`),
  KEY `idx_acos_alias` (`alias`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=352 ;

--
-- Extraindo dados da tabela `acos`
--

INSERT INTO `acos` (`id`, `parent_id`, `model`, `foreign_key`, `alias`, `lft`, `rght`) VALUES
(264, NULL, NULL, NULL, 'controllers', 1, 176),
(265, 264, NULL, NULL, 'Activities', 2, 23),
(266, 265, NULL, NULL, 'index', 3, 4),
(267, 265, NULL, NULL, 'view', 5, 6),
(268, 265, NULL, NULL, 'add', 7, 8),
(269, 265, NULL, NULL, 'edit', 9, 10),
(270, 265, NULL, NULL, 'delete', 11, 12),
(271, 265, NULL, NULL, 'admin_index', 13, 14),
(272, 265, NULL, NULL, 'admin_view', 15, 16),
(273, 265, NULL, NULL, 'admin_add', 17, 18),
(274, 265, NULL, NULL, 'admin_edit', 19, 20),
(275, 265, NULL, NULL, 'admin_delete', 21, 22),
(276, 264, NULL, NULL, 'Chats', 24, 43),
(277, 276, NULL, NULL, 'index', 25, 26),
(278, 276, NULL, NULL, 'view', 27, 28),
(279, 276, NULL, NULL, 'add', 29, 30),
(280, 276, NULL, NULL, 'delete', 31, 32),
(281, 276, NULL, NULL, 'admin_index', 33, 34),
(282, 276, NULL, NULL, 'admin_view', 35, 36),
(283, 276, NULL, NULL, 'admin_add', 37, 38),
(284, 276, NULL, NULL, 'admin_edit', 39, 40),
(285, 276, NULL, NULL, 'admin_delete', 41, 42),
(286, 264, NULL, NULL, 'Comments', 44, 65),
(287, 286, NULL, NULL, 'index', 45, 46),
(288, 286, NULL, NULL, 'view', 47, 48),
(289, 286, NULL, NULL, 'add', 49, 50),
(290, 286, NULL, NULL, 'edit', 51, 52),
(291, 286, NULL, NULL, 'delete', 53, 54),
(292, 286, NULL, NULL, 'admin_index', 55, 56),
(293, 286, NULL, NULL, 'admin_view', 57, 58),
(294, 286, NULL, NULL, 'admin_add', 59, 60),
(295, 286, NULL, NULL, 'admin_edit', 61, 62),
(296, 286, NULL, NULL, 'admin_delete', 63, 64),
(297, 264, NULL, NULL, 'Companies', 66, 77),
(298, 297, NULL, NULL, 'index', 67, 68),
(299, 297, NULL, NULL, 'view', 69, 70),
(300, 297, NULL, NULL, 'add', 71, 72),
(301, 297, NULL, NULL, 'edit', 73, 74),
(302, 297, NULL, NULL, 'delete', 75, 76),
(303, 264, NULL, NULL, 'Followers', 78, 79),
(304, 264, NULL, NULL, 'Friends', 80, 89),
(305, 304, NULL, NULL, 'index', 81, 82),
(306, 304, NULL, NULL, 'accept', 83, 84),
(307, 304, NULL, NULL, 'delete', 85, 86),
(308, 304, NULL, NULL, 'acceptFriend', 87, 88),
(309, 264, NULL, NULL, 'Groups', 90, 101),
(310, 309, NULL, NULL, 'index', 91, 92),
(311, 309, NULL, NULL, 'view', 93, 94),
(312, 309, NULL, NULL, 'add', 95, 96),
(313, 309, NULL, NULL, 'edit', 97, 98),
(314, 309, NULL, NULL, 'delete', 99, 100),
(315, 264, NULL, NULL, 'Items', 102, 115),
(316, 315, NULL, NULL, 'index', 103, 104),
(317, 315, NULL, NULL, 'view', 105, 106),
(318, 315, NULL, NULL, 'deleteComment', 107, 108),
(319, 315, NULL, NULL, 'add', 109, 110),
(320, 315, NULL, NULL, 'edit', 111, 112),
(321, 315, NULL, NULL, 'deleteWish', 113, 114),
(322, 264, NULL, NULL, 'Pages', 116, 119),
(323, 322, NULL, NULL, 'display', 117, 118),
(324, 264, NULL, NULL, 'Posts', 120, 137),
(325, 324, NULL, NULL, 'index', 121, 122),
(326, 324, NULL, NULL, 'myposts', 123, 124),
(327, 324, NULL, NULL, 'view', 125, 126),
(328, 324, NULL, NULL, 'delete', 127, 128),
(329, 324, NULL, NULL, 'deleteComment', 129, 130),
(330, 324, NULL, NULL, 'deleteCommentInPost', 131, 132),
(331, 324, NULL, NULL, 'deleteLike', 133, 134),
(332, 324, NULL, NULL, 'add', 135, 136),
(333, 264, NULL, NULL, 'Users', 138, 163),
(334, 333, NULL, NULL, 'initDB', 139, 140),
(335, 333, NULL, NULL, 'add', 141, 142),
(336, 333, NULL, NULL, 'confirm_account', 143, 144),
(337, 333, NULL, NULL, 'login', 145, 146),
(338, 333, NULL, NULL, 'logout', 147, 148),
(339, 333, NULL, NULL, 'lock', 149, 150),
(340, 333, NULL, NULL, 'signup', 151, 152),
(341, 333, NULL, NULL, 'addFriend', 153, 154),
(342, 333, NULL, NULL, 'index', 155, 156),
(343, 333, NULL, NULL, 'view', 157, 158),
(344, 333, NULL, NULL, 'profile', 159, 160),
(345, 333, NULL, NULL, 'edit', 161, 162),
(346, 264, NULL, NULL, 'AclExtras', 164, 165),
(347, 264, NULL, NULL, 'BoostCake', 166, 175),
(348, 347, NULL, NULL, 'BoostCake', 167, 174),
(349, 348, NULL, NULL, 'index', 168, 169),
(350, 348, NULL, NULL, 'bootstrap2', 170, 171),
(351, 348, NULL, NULL, 'bootstrap3', 172, 173);

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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=64 ;

--
-- Extraindo dados da tabela `activities`
--

INSERT INTO `activities` (`id`, `activity_id`, `type`, `username`, `friend_username`, `datemade`, `checked`) VALUES
(1, 0, 'add', 'lfrancisco', 'mario', '0000-00-00 00:00:00', 0),
(2, 0, 'add', 'mario', 'jmane', '0000-00-00 00:00:00', 0),
(3, 0, 'add', 'mario', 'lfrancisco', '0000-00-00 00:00:00', 0),
(17, 2, 'comment', 'mario', 'lfrancisco', '0000-00-00 00:00:00', 0),
(18, 2, 'comment', 'mario', 'lfrancisco', '0000-00-00 00:00:00', 0),
(19, 12, 'like', 'mario', 'lfrancisco', '0000-00-00 00:00:00', 0),
(20, 13, 'like', 'mario', 'lfrancisco', '0000-00-00 00:00:00', 0),
(21, 14, 'like', 'mario', 'lfrancisco', '0000-00-00 00:00:00', 0),
(23, 12, 'request', 'mario', 'jmane', '2015-01-17 07:31:17', 0),
(24, 13, 'request', 'mario', 'jmane', '2015-01-17 07:31:20', 0),
(25, 14, 'request', 'jmane', 'mario', '2015-01-17 07:36:44', 0),
(26, 14, 'add', 'mario', 'jmane', '2015-01-17 07:53:21', 0),
(27, 5, 'item', 'mario', 'mario', '2015-01-17 08:03:01', 0),
(28, 6, 'item', 'asilva', 'asilva', '2015-01-17 08:08:34', 0),
(29, 52, 'item_comment', 'mario', 'asilva', '2015-01-17 08:31:31', 0),
(30, 53, 'item_comment', 'asilva', 'asilva', '2015-01-17 08:44:41', 0),
(31, 9, 'add', 'asilva', 'mario', '2015-01-17 08:58:45', 0),
(32, 1, 'like', 'mario', 'mario', '2015-01-17 17:42:52', 0),
(33, 1, 'like', 'mario', 'mario', '2015-01-17 17:43:12', 0),
(34, 1, 'like', 'mario', 'mario', '2015-01-17 17:46:47', 0),
(35, 1, 'like', 'mario', 'mario', '2015-01-17 17:47:04', 0),
(36, 1, 'like', 'mario', 'mario', '2015-01-17 17:53:36', 0),
(37, 1, 'like', 'mario', 'mario', '2015-01-17 17:57:19', 0),
(38, 1, 'like', 'mario', 'mario', '2015-01-17 17:59:31', 0),
(39, 2, 'like', 'mario', 'lfrancisco', '2015-01-17 18:09:52', 0),
(40, 1, 'like', 'mario', 'mario', '2015-01-17 18:38:35', 0),
(41, 1, 'like', 'mario', 'mario', '2015-01-17 18:38:45', 0),
(42, 1, 'like', 'mario', 'mario', '2015-01-17 18:39:17', 0),
(43, 1, 'like', 'mario', 'mario', '2015-01-17 18:41:22', 0),
(44, 2, 'like', 'mario', 'lfrancisco', '2015-01-17 18:58:29', 0),
(45, 1, 'like', 'mario', 'mario', '2015-01-17 19:01:09', 0),
(46, 1, 'like', 'mario', 'mario', '2015-01-17 19:02:29', 0),
(47, 1, 'like', 'mario', 'mario', '2015-01-17 19:04:01', 0),
(48, 1, 'like', 'mario', 'mario', '2015-01-17 19:07:29', 0),
(49, 1, 'like', 'mario', 'mario', '2015-01-17 19:07:58', 0),
(50, 1, 'like', 'mario', 'mario', '2015-01-17 19:09:02', 0),
(51, 1, 'like', 'mario', 'mario', '2015-01-17 19:09:30', 0),
(52, 1, 'like', 'mario', 'mario', '2015-01-17 19:10:12', 0),
(53, 2, 'like', 'mario', 'lfrancisco', '2015-01-17 19:13:12', 0),
(54, 2, 'like', 'mario', 'lfrancisco', '2015-01-17 19:14:16', 0),
(55, 2, 'like', 'mario', 'lfrancisco', '2015-01-17 19:17:09', 0),
(56, 2, 'like', 'mario', 'lfrancisco', '2015-01-17 19:18:20', 0),
(57, 40, 'like', 'mario', 'lfrancisco', '2015-01-18 00:24:19', 0),
(58, 41, 'like', 'mario', 'lfrancisco', '2015-01-18 00:25:18', 0),
(59, 42, 'like', 'mario', 'lfrancisco', '2015-01-18 00:52:36', 0),
(60, 2, 'comment', 'mario', 'lfrancisco', '2015-01-20 03:21:54', 0),
(61, 43, 'like', 'mario', 'lfrancisco', '2015-01-20 06:53:59', 0),
(62, 44, 'like', 'mario', 'lfrancisco', '2015-01-20 06:54:13', 0),
(63, 45, 'like', 'mario', 'lfrancisco', '2015-01-20 06:54:20', 0);

-- --------------------------------------------------------

--
-- Estrutura da tabela `aros`
--

CREATE TABLE IF NOT EXISTS `aros` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `parent_id` int(10) DEFAULT NULL,
  `model` varchar(255) DEFAULT NULL,
  `foreign_key` int(10) DEFAULT NULL,
  `alias` varchar(255) DEFAULT NULL,
  `lft` int(10) DEFAULT NULL,
  `rght` int(10) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `idx_aros_lft_rght` (`lft`,`rght`),
  KEY `idx_aros_alias` (`alias`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=10 ;

--
-- Extraindo dados da tabela `aros`
--

INSERT INTO `aros` (`id`, `parent_id`, `model`, `foreign_key`, `alias`, `lft`, `rght`) VALUES
(1, NULL, 'Group', 1, NULL, 1, 6),
(2, NULL, 'Group', 2, NULL, 7, 12),
(3, 1, 'User', 11, NULL, 2, 3),
(4, 1, 'User', 12, NULL, 4, 5),
(5, 2, 'User', 13, NULL, 8, 9),
(6, 2, 'User', 14, NULL, 10, 11),
(7, NULL, 'User', 19, NULL, 13, 14),
(8, NULL, 'User', 20, NULL, 15, 16),
(9, NULL, 'User', 21, NULL, 17, 18);

-- --------------------------------------------------------

--
-- Estrutura da tabela `aros_acos`
--

CREATE TABLE IF NOT EXISTS `aros_acos` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `aro_id` int(10) NOT NULL,
  `aco_id` int(10) NOT NULL,
  `_create` varchar(2) NOT NULL DEFAULT '0',
  `_read` varchar(2) NOT NULL DEFAULT '0',
  `_update` varchar(2) NOT NULL DEFAULT '0',
  `_delete` varchar(2) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`),
  UNIQUE KEY `ARO_ACO_KEY` (`aro_id`,`aco_id`),
  KEY `idx_aco_id` (`aco_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=27 ;

--
-- Extraindo dados da tabela `aros_acos`
--

INSERT INTO `aros_acos` (`id`, `aro_id`, `aco_id`, `_create`, `_read`, `_update`, `_delete`) VALUES
(8, 1, 264, '1', '1', '1', '1'),
(9, 2, 264, '-1', '-1', '-1', '-1'),
(10, 2, 266, '1', '1', '1', '1'),
(11, 2, 267, '1', '1', '1', '1'),
(12, 2, 269, '1', '1', '1', '1'),
(13, 2, 277, '1', '1', '1', '1'),
(14, 2, 278, '1', '1', '1', '1'),
(15, 2, 300, '1', '1', '1', '1'),
(16, 2, 305, '1', '1', '1', '1'),
(17, 2, 306, '1', '1', '1', '1'),
(18, 2, 319, '1', '1', '1', '1'),
(19, 2, 332, '1', '1', '1', '1'),
(20, 2, 327, '1', '1', '1', '1'),
(21, 2, 326, '1', '1', '1', '1'),
(22, 2, 342, '1', '1', '1', '1'),
(23, 2, 343, '1', '1', '1', '1'),
(24, 2, 344, '1', '1', '1', '1'),
(25, 2, 345, '1', '1', '1', '1'),
(26, 2, 338, '1', '1', '1', '1');

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
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

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
  `checked` bit(1) NOT NULL DEFAULT b'0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=55 ;

--
-- Extraindo dados da tabela `comments`
--

INSERT INTO `comments` (`id`, `post`, `product`, `user`, `datemade`, `content`) VALUES
(7, 1, 0, 'lfrancisco', '2015-01-16 21:44:56', 'Olá'),
(9, 3, 0, 'mario', '2015-01-17 01:43:27', 'Tangerinas fazem bem à saúde!'),
(48, 0, 6, 'mario', '0000-00-00 00:00:00', 'Yummi'),
(54, 2, 0, 'mario', '2015-01-20 03:21:54', 'Belas férias!');

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
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

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
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=15 ;

--
-- Extraindo dados da tabela `friends`
--

INSERT INTO `friends` (`id`, `user1`, `user2`, `datemade`, `accepted`) VALUES
(1, 'lfrancisco', 'mario', '2015-01-16 07:41:17', 1),
(9, 'mario', 'asilva', '2015-01-17 08:58:44', 1),
(14, 'jmane', 'mario', '2015-01-17 07:53:17', 0);

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
(1, 'administrators', '2015-01-19 19:28:01', '2015-01-19 19:28:01'),
(2, 'users', '2015-01-19 19:28:07', '2015-01-19 19:28:07');

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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Extraindo dados da tabela `items`
--

INSERT INTO `items` (`id`, `name`, `description`, `picture`, `user`, `price`, `category`, `alias`, `datemade`) VALUES
(6, 'Banana da Madeira', 'banana', 'http://imagens3.publico.pt/imagens.aspx/800753?tp=UH&db=IMAGENS', 'asilva', 1, 'fruta', 'banana', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Estrutura da tabela `likes`
--

CREATE TABLE IF NOT EXISTS `likes` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `post_id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=46 ;

--
-- Extraindo dados da tabela `likes`
--

INSERT INTO `likes` (`id`, `post_id`, `username`) VALUES
(42, 2, 'mario'),
(43, 5, 'mario'),
(44, 4, 'mario'),
(45, 6, 'mario');

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
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=10 ;

--
-- Extraindo dados da tabela `posts`
--

INSERT INTO `posts` (`id`, `user`, `datemade`, `content`, `picture`, `video`, `location`, `tagged`, `title`) VALUES
(1, 'mario', '0000-00-00 00:00:00', 'Olá pessoal!', 'http://upload.wikimedia.org/wikipedia/en/6/65/Hello_logo_sm.gif', '', '', '', 'Olá'),
(2, 'lfrancisco', '2015-01-16 20:36:28', 'As melhores férias!', 'http://pacotes-viagens.com/wp-content/uploads/2013/05/ferias-julho.jpg', '', '', '', 'Férias'),
(3, 'mario', '2015-01-17 01:43:05', 'Olá', 'http://meucantinho.org/medicina/tangerinas-e-gomos-336.jpg', '', '', '', 'Olá'),
(4, 'lfrancisco', '2015-01-16 20:36:28', 'EVE ONLINE MMO', '', 'https://www.youtube.com/watch?v=5x-0gNCGeGU', '', '', 'Gaming'),
(5, 'lfrancisco', '2015-01-16 20:36:28', 'Grande jogo', 'http://cdn1.eveonline.com/www/newssystem/media/64025/1/Retribution_Thumbnail.jpg', '', '', '', 'Gaming'),
(6, 'lfrancisco', '2015-01-16 20:36:28', 'EVE Online is a massively multiplayer online game set 23,000 years in the future. As an elite spaceship pilot, you will explore, build, and dominate across a universe of over 7,000 star systems. Sandbox gameplay and advanced skill-based progression provid', '', '', '', '', 'Gaming'),
(7, 'lfrancisco', '2015-01-16 20:36:28', 'MMO espacial', 'http://cdn1.eveonline.com/www/newssystem/media/64025/1/Retribution_Thumbnail.jpg', 'https://www.youtube.com/watch?v=5x-0gNCGeGU', '', '', 'Gaming'),
(9, 'jmane', '2015-01-16 20:36:28', 'Em termos botânicos, o fruto é uma estrutura presente em todas as angiospermas onde as sementes são protegidas enquanto amadurecem.', 'https://www.saibamaismg.com.br/wp-content/uploads/2014/09/2090289868.jpg', 'https://www.youtube.com/watch?v=6I1Ikfk149Y', '', '', 'Fruta');

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
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=15 ;

--
-- Extraindo dados da tabela `users`
--

INSERT INTO `users` (`id`, `username`, `email`, `password`, `first_name`, `last_name`, `country`, `group_id`, `about`, `title`, `company`, `phone`, `picture`, `website`, `facebook`, `google`, `twitter`, `ip`, `signup`, `lastlogin`, `activated`) VALUES
(11, 'lfrancisco', 'calpis.nomu@gmail.com', '$2a$10$gV7OfpbXMttNb8ickFwWzuyaR8UxjsVMladD8mr9HiqoGKvP/6k.6', 'Luís', 'Francisco', 'Portugal', 1, 'Administrator', 'Mr.', '', '', 'http://imgs.abduzeedo.com/files/articles/adorable-zoo-portraits-yago-partal/tumblr_mk21holX7N1s7aky5o2_r1_500.jpg', '', '', '', '', '', '2015-01-19 19:46:00', '2015-01-19 19:46:00', 1),
(12, 'mario', 'marioasfrancisco@gmail.com', '$2a$10$KbjQapbS3Jy8igTZJ8Ua1.VI2Xa5BgZLLkUgQ4xbFVOuXR6QbU/Gm', 'Mário', 'Francisco', 'Portugal', 1, 'Administrator', 'Mr.', 'Francisco Company', '', 'http://stylesaveus.com/wp-content/uploads/2013/03/style-save-us-bear-in-suit.jpg', '', '', '', '', '127.0.0.1', '2015-01-19 19:46:00', '2015-01-20 07:37:02', 1),
(13, 'asilva', 'asilva@fakemail.com', '$2a$10$hPKZXQYU58a9y4fDX74TC.ZuU2MYKdyba7xaVo3NhcH/OIFNV.cCy', 'António', 'Silva', 'Portugal', 2, 'Olá sou o António Silva', 'Mr.', '', '', 'https://animalsinsuits.files.wordpress.com/2008/01/proffesordog2.jpg', '', '', '', '', '', '2015-01-19 19:46:00', '2015-01-19 19:46:00', 1),
(14, 'jmane', 'jmane@fakemail.com', '$2a$10$x/UX4LexPPqPGOW5CkKSWOEDulVMPgj5fBmjv5J/8rX4zWHtHbci.', 'José', 'Manuel', 'Portugal', 2, 'Olá sou o José Manuel', 'Mr.', '', '', 'http://berbicemarket.com/wp-content/uploads/2013/04/wpid-zhrCjYG.jpg', '', '', '', '', '', '2015-01-19 19:46:00', '2015-01-19 19:46:00', 1);

-- --------------------------------------------------------

--
-- Estrutura da tabela `wishlists`
--

CREATE TABLE IF NOT EXISTS `wishlists` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `product_id` int(11) NOT NULL,
  `user` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

-- phpMyAdmin SQL Dump
-- version 4.0.10deb1
-- http://www.phpmyadmin.net
--
-- Máquina: localhost
-- Data de Criação: 01-Out-2014 às 23:44
-- Versão do servidor: 5.5.38-0ubuntu0.14.04.1
-- versão do PHP: 5.5.9-1ubuntu4.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de Dados: `deliciae_bd`
--

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
  `datemade` datetime NOT NULL,
  `text` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estrutura da tabela `comments`
--

CREATE TABLE IF NOT EXISTS `comments` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `post` int(11) NOT NULL,
  `user` varchar(16) NOT NULL,
  `datemade` datetime NOT NULL,
  `content` varchar(255) NOT NULL,
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
  `accepted` enum('0','1') NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Extraindo dados da tabela `friends`
--

INSERT INTO `friends` (`id`, `user1`, `user2`, `datemade`, `accepted`) VALUES
(1, 'mario', 'admin', '2014-09-17 00:00:00', '1'),
(2, 'mario', 'SidSepulveda', '2014-09-10 00:00:00', '1'),
(3, 'admin', 'mario', '2014-09-23 00:00:00', '1'),
(4, 'SidSepulveda', 'mario', '2014-09-23 00:00:00', '1');

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
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Extraindo dados da tabela `items`
--

INSERT INTO `items` (`id`, `name`, `description`, `picture`, `user`, `price`, `category`) VALUES
(1, 'Azeite Gallo', 'O melhor azeite de Portugal', 'http://3.bp.blogspot.com/-aV7K62ENM_8/URGle_IuWMI/AAAAAAAADBw/_jyd2eCpVHs/s1600/GRD_2764_Azeite+Gallo+Extra+Virgem+Vidro.jpg', 'admin', 7.5, 'Shopping'),
(2, 'Super Bock', 'A cerveja de eleição do norte de Portugal', 'http://revipackonline.files.wordpress.com/2012/11/image.png', 'mario', 5.75, 'Shopping'),
(3, 'Ajax Limpa-Vidro', 'O melhor limpa-vidros do planeta', 'http://www.colgate.pt/PDP/Ajax/PT/images/hero_details_gls_clnr_crystal.png', 'mario', 6.75, 'Shopping'),
(4, 'Viagem ao Egipto', 'Visite as famosas pirâmides.', 'http://www.cheapholidays.com/style/ch/img/destinations/egypt1.jpg', 'admin', 1500, 'Viagens'),
(5, 'Viagem às Bahamas', 'Descanso perfeito para qualquer pessoa', 'http://foundtheworld.com/wp-content/uploads/2014/06/bahamas-4.jpg', 'SidSepulveda', 3000, 'Viagens'),
(6, 'Francesinha do Mestre', 'O melhor restaurante de francesinhas da zona de Vila do Conde', 'http://www.francesinhas.pt/wp-content/uploads/2012/11/omestre1-533x400.jpg', 'mario', 10, 'Restaurantes');

-- --------------------------------------------------------

--
-- Estrutura da tabela `notifications`
--

CREATE TABLE IF NOT EXISTS `notifications` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(16) NOT NULL,
  `initiator` varchar(16) NOT NULL,
  `app` varchar(255) NOT NULL,
  `note` varchar(255) NOT NULL,
  `did_read` enum('0','1') NOT NULL DEFAULT '0',
  `date_time` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

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
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Extraindo dados da tabela `posts`
--

INSERT INTO `posts` (`id`, `user`, `datemade`, `content`, `picture`, `video`, `location`, `tagged`) VALUES
(1, 'admin', '2014-09-24 00:00:00', 'PHP is a server-side scripting language designed for web development but also used as a general-purpose programming language.', '', '', '', ''),
(2, 'mario', '2014-09-25 00:00:00', '', 'http://local.brookings.k12.sd.us/krscience/zoology/webpage%20projects/sp11webprojects/baboon/olivebaboon2.jpg', '', '', ''),
(3, 'SidSepulveda', '2014-09-23 00:00:00', '', '', 'https://www.youtube.com/watch?v=NK3-Cy33pKs', '', ''),
(4, 'admin', '2014-09-25 00:00:00', '', 'http://www.hdwallpapers.in/walls/african_lion_king-wide.jpg', '', '', '');

-- --------------------------------------------------------

--
-- Estrutura da tabela `status`
--

CREATE TABLE IF NOT EXISTS `status` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `osid` int(11) NOT NULL,
  `account_name` varchar(16) NOT NULL,
  `author` varchar(16) NOT NULL,
  `type` enum('a','b','c') NOT NULL,
  `data` text NOT NULL,
  `postdate` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

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
  `userlevel` enum('a','b','c','d') NOT NULL DEFAULT 'a',
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
  `notescheck` datetime NOT NULL,
  `activated` enum('0','1') NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`),
  UNIQUE KEY `username` (`username`,`email`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=9 ;

--
-- Extraindo dados da tabela `users`
--

INSERT INTO `users` (`id`, `username`, `email`, `password`, `first_name`, `last_name`, `country`, `userlevel`, `about`, `title`, `company`, `phone`, `picture`, `website`, `facebook`, `google`, `twitter`, `ip`, `signup`, `lastlogin`, `notescheck`, `activated`) VALUES
(1, 'admin', 'calpis.nomu@gmail.com', '12345', 'Luís', 'Francisco', 'Portugal', 'd', 'Um gajo 5 estrelas', 'Sr.', 'The amazing company!', '222333444', 'http://images.nationalgeographic.com/wpf/media-live/photos/000/004/cache/amazon-horned-frog_443_600x450.jpg', 'www.deliciaego.com', 'https://www.facebook.com/', 'https://plus.google.com/getstarted?fww=1', 'twitter.com', '192.168.1.2', '2014-09-14 00:00:00', '2014-09-14 00:00:00', '2014-09-14 00:00:00', '1'),
(2, 'mario', 'marioasfrancisco@gmail.com', '$2a$10$10tq9DoFq5lHxZcDEZq3Xuxr6SrznnkGXPK.LkMqQgYWHF3empoCm', 'MÃ¡rio', 'Francisco', 'Portugal', 'a', 'HI', 'Mr.', 'Nespithe', '123456', 'http://upload.wikimedia.org/wikipedia/commons/3/31/Great_white_shark_south_africa.jpg', 'www.example.com', 'www.facebook.com/marioasfrancisco', 'www.google.com/marioasfrancisco', 'www.twitter.com/marioasfrancisco', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', ''),
(3, 'SidSepulveda', 'jawnfkajwf@gmail.com', '$2a$10$PFTyDTW3Ij/q4tz5VoRAYeqpSxhc2HrbpV4LC1PyKAlGVo9jplqkS', 'Armando', 'Oliveira', 'Portugal', 'a', 'Macacos, gorilas, babuÃ­nos e companhia!', 'Sra.', 'Baboon', '911234356', 'http://irritableblonde.com/wp-content/uploads/2014/03/baboon.jpg', 'www.google.com', 'www.facebook.com/baboon', 'www.google.com/baboongoogle', 'www.twitter.com/baboontwitter', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0'),
(4, 'zemanel', 'zemanel@gmail.com', '$2a$10$3jC66EpraL.zdYcj4Ev3LueFOEQHx71E1WeFqfz4TrRMwnrLQW3Te', 'JosÃ©', 'Manuel', 'Portugal', 'a', 'Gosto de passear, comer e beber bem!', 'Sr.', 'Tasca do ZÃ© Manel', '911237654', 'http://faltadar.files.wordpress.com/2011/05/tasca_rasca2006_021.jpg', '', 'www.facebook.com/zemanel', 'www.google.com/zemanel', 'www.twitter.com/zemanel', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', ''),
(5, 'maria_albertina', 'marialbertina@gmail.com', '$2a$10$b6siKn0EB7iVcbc.Tj1v4uPyVefya2HBl9SyP9rAHEBLNbPPYWMQ2', 'Maria', 'Albertina', 'Portugal', 'a', 'Cozinheira profissional', 'Dona', 'Tasca do ZÃ© Manel', '938765678', 'http://tv.i.uol.com.br/televisao/2011/11/25/ana-maria-braga-durante-gravacao-do-tema-de-fim-de-ano-da-globo-271111-1322220956296_200x285.jpg', '', 'www.facebook.com/maria_albertina', 'www.google.com/maria_albertina', 'www.twitter.com/maria_albertina', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', ''),
(6, 'trafulha', 'trafulha@gmail.com', '$2a$10$yKdjZv96bOofoUxJ6p1PbewziU/WxaojIVaKSXIrMmYCMDrxmwf5O', 'AntÃ³nio', 'Madureira', 'Portugal', 'a', 'Investidor de alto risco', 'Sr.', 'Loja do Trafulha', '252765478', 'http://5ones.com/wp-content/uploads/2008/11/greencard-300x299.jpg', '', 'www.facebook.com/trafulha', 'www.google.com/trafulha', 'www.twitter.com/trafulha', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', ''),
(7, 'alexandracontas', 'alexandracontas@gmail.com', '$2a$10$bUC3EmVHjsdHbPmpyPEPVu1PtaR3qsPsvtwUjcvDDXNTg56FcY7KG', 'Alexandra', 'Ribeiro', 'Portugal', 'a', 'A melhor contabilista de Portugal.', 'Dra.', 'Loja do Trafulha', '967483956', 'http://educationcareerarticles.com/wp-content/uploads/2013/08/accountant.jpg', '', 'www.facebook.com/alexandra', 'www.google.com/alexandra', 'www.twitter.com/alexandra', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', ''),
(8, 'jpeter', 'jpeter@gmail.com', '$2a$10$gGb7i1MgHhxvrJP237duP.K0/7G/w.Dv.GG439TsIYtKffbJvOrCa', 'John', 'Peter', 'USA', 'a', 'Circus performer', 'Sr.', 'The Amazing Circus', '914235858', 'http://eastbrooklyn.com/wp-content/uploads/2014/08/bald-clown-cap-64403.jpg', '', 'www.facebook.com/jpeter', 'www.google.com/jpeter', 'www.twitter.com/jpeter', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
-- phpMyAdmin SQL Dump
-- version 4.0.10deb1
-- http://www.phpmyadmin.net
--
-- Máquina: localhost
-- Data de Criação: 08-Jan-2015 às 06:48
-- Versão do servidor: 5.5.40-0ubuntu0.14.04.1
-- versão do PHP: 5.5.9-1ubuntu4.5

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
-- Estrutura da tabela `activities`
--

CREATE TABLE IF NOT EXISTS `activities` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `activity_id` int(11) NOT NULL DEFAULT '0',
  `type` enum('post','item','comment','like','add') NOT NULL,
  `username` varchar(255) NOT NULL,
  `friend_username` varchar(255) NOT NULL,
  `datemade` datetime NOT NULL,
  `checked` bit(1) NOT NULL DEFAULT b'0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=11 ;

--
-- Extraindo dados da tabela `activities`
--

INSERT INTO `activities` (`id`, `activity_id`, `type`, `username`, `friend_username`, `datemade`, `checked`) VALUES
(1, 0, 'add', 'jpeter', 'mario', '2014-12-01 00:00:00', b'1'),
(7, 0, 'add', 'mario', 'jpeter', '0000-00-00 00:00:00', b'0'),
(9, 0, 'add', 'trafulha', 'mario', '2014-12-01 00:00:00', b'0'),
(10, 0, 'add', 'mario', 'jpeter', '0000-00-00 00:00:00', b'1');

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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Extraindo dados da tabela `chat`
--

INSERT INTO `chat` (`id`, `user1`, `user2`, `text`, `datemade`, `checked`) VALUES
(1, 'SidSepulveda', 'mario', 'Hey, tudo bem?', '2015-01-01 00:00:00', b'0'),
(2, 'SidSepulveda', 'mario', 'Que tens feito?', '2015-01-01 00:00:00', b'0');

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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=67 ;

--
-- Extraindo dados da tabela `comments`
--

INSERT INTO `comments` (`id`, `post`, `product`, `user`, `datemade`, `content`) VALUES
(1, 1, 0, 'mario', '2014-12-08 18:15:00', 'This is a great language!'),
(11, 12, 0, 'mario', '0000-00-00 00:00:00', 'olá'),
(20, 1, 0, 'mario', '0000-00-00 00:00:00', 'teste'),
(21, 3, 0, 'mario', '0000-00-00 00:00:00', 'Que fome! :D~'),
(39, 1, 0, 'mario', '0000-00-00 00:00:00', 'hello'),
(64, 4, 0, 'mario', '0000-00-00 00:00:00', 'as');

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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Extraindo dados da tabela `companies`
--

INSERT INTO `companies` (`id`, `name`, `address`, `location`, `ifn`, `category`, `user`, `phone`, `email`, `website`, `about`, `picture`, `twitter`, `facebook`, `google`) VALUES
(1, 'A Grande Empresa', '111 Rua das Empresas,4490-898  Porto', 'Portugal', 1234567890, 'Exportadora de grandes produtos', 'mario', '252818818', 'grande_empresa@gmail.com', '', 'Esta grande empresa foi fundada pelo empreendedor Mário Francisco!', 'http://gobigusa.com/yahoo_site_admin/assets/images/GB-logo-HiRes_WEB.13804938.jpg', '', '', ''),
(2, 'Sid', '111 Rua das Empresas,4490-898  Porto', 'Portugal', 1234567890, 'Exportadora de grandes produtos', 'SidSepulveda', '252818818', 'grande_empresa@gmail.com', '', 'Esta grande empresa foi fundada pelo empreendedor Mário Francisco!', 'http://gobigusa.com/yahoo_site_admin/assets/images/GB-logo-HiRes_WEB.13804938.jpg', '', '', '');

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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Extraindo dados da tabela `followers`
--

INSERT INTO `followers` (`id`, `user`, `company`, `datemade`) VALUES
(1, 'mario', 'A Grande Empresa', '2014-12-01 04:42:44'),
(2, 'mario', 'BLABLABLA', '2014-12-02 05:18:37'),
(3, 'mario', 'Sid', '2015-01-08 03:02:06');

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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=14 ;

--
-- Extraindo dados da tabela `friends`
--

INSERT INTO `friends` (`id`, `user1`, `user2`, `datemade`, `accepted`) VALUES
(2, 'mario', 'SidSepulveda', '2014-09-10 00:00:00', 1),
(3, 'admin', 'mario', '2014-09-23 00:00:00', 1),
(9, 'mario', 'alexandracontas', '2014-11-19 08:46:53', 0),
(11, 'jpeter', 'mario', '2014-12-01 00:00:00', 0),
(12, 'trafulha', 'mario', '2015-01-08 04:08:59', 1);

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
  PRIMARY KEY (`id`),
  UNIQUE KEY `name` (`name`),
  UNIQUE KEY `alias` (`alias`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=9 ;

--
-- Extraindo dados da tabela `items`
--

INSERT INTO `items` (`id`, `name`, `description`, `picture`, `user`, `price`, `category`, `alias`) VALUES
(1, 'Azeite Gallo', 'O melhor azeite de Portugal', 'http://3.bp.blogspot.com/-aV7K62ENM_8/URGle_IuWMI/AAAAAAAADBw/_jyd2eCpVHs/s1600/GRD_2764_Azeite+Gallo+Extra+Virgem+Vidro.jpg', 'admin', 7.5, 'Shopping', 'azeitegallo'),
(2, 'Super Bock', 'Cerveja gostosa!', 'http://revipackonline.files.wordpress.com/2012/11/image.png', 'mario', 5.75, 'Shopping', 'superbock'),
(5, 'Viagem às Bahamas', 'Descanso perfeito para qualquer pessoa', 'http://foundtheworld.com/wp-content/uploads/2014/06/bahamas-4.jpg', 'SidSepulveda', 3000, 'Viagens', 'viagemasbahamas'),
(6, 'Francesinha do Mestre', 'O melhor restaurante de francesinhas da zona de Vila do Conde', 'http://s27.postimg.org/rmt2dxqb7/omestre1_533x400.jpg', 'mario', 10, 'Restaurantes', 'francesinhadomestre');

-- --------------------------------------------------------

--
-- Estrutura da tabela `likes`
--

CREATE TABLE IF NOT EXISTS `likes` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `post_id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=16 ;

--
-- Extraindo dados da tabela `likes`
--

INSERT INTO `likes` (`id`, `post_id`, `username`) VALUES
(13, 1, 'mario'),
(15, 4, 'mario');

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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=27 ;

--
-- Extraindo dados da tabela `posts`
--

INSERT INTO `posts` (`id`, `user`, `datemade`, `content`, `picture`, `video`, `location`, `tagged`, `title`) VALUES
(1, 'admin', '2014-09-24 00:00:00', 'PHP is a server-side scripting language designed for web development but also used as a general-purpose programming language.', 'http://www.pawprint.net/images/news/1-4fac83467069c.png', '', '', '', 'Linguagem PHP'),
(2, 'mario', '2014-09-25 00:00:00', '', 'http://local.brookings.k12.sd.us/krscience/zoology/webpage%20projects/sp11webprojects/baboon/olivebaboon2.jpg', '', '', '', NULL),
(3, 'SidSepulveda', '2014-09-23 00:00:00', '', '', 'http://www.youtube.com/watch?v=NK3-Cy33pKs', '', '', 'A politica da comida'),
(4, 'admin', '2014-09-25 00:00:00', '', 'http://www.hdwallpapers.in/walls/african_lion_king-wide.jpg', '', '', '', NULL),
(5, 'mario', '2014-10-28 12:32:07', '\nWhy use CakePHP\nBuild Quickly\n\nUse code generation and scaffolding features to rapidly build prototypes.\nNo Configuration\n\nNo complicated XML or YAML files. Just setup your database and you''re ready to bake.\nFriendly License\n\nCakePHP is license', '', '', '', '', 'cakephp'),
(6, 'mario', '2014-10-08 13:12:37', '', '', 'https://www.youtube.com/watch?v=3JluqTojuME', '', '', 'Web programming'),
(7, 'mario', '0000-00-00 00:00:00', 'Hello world!', '', '', '', '', 'OlÃ¡'),
(8, 'mario', '0000-00-00 00:00:00', 'Este post é um teste', '', '', '', '', 'Teste'),
(10, 'mario', '0000-00-00 00:00:00', 'jabsfpasfoafjaf', '', '', '', '', 'teste'),
(11, 'mario', '0000-00-00 00:00:00', 'Olá', '', '', '', '', 'Hello'),
(12, 'mario', '0000-00-00 00:00:00', 'agagwgwe', '', '', '', '', 'sdasfa'),
(13, 'mario', '0000-00-00 00:00:00', 'Mané', '', '', '', '', 'ZÃ©'),
(14, 'mario', '0000-00-00 00:00:00', 'TROLOLOLOLOL', '', '', '', '', 'HAHAHAHAHA'),
(15, 'mario', '0000-00-00 00:00:00', 'Olá', '', '', '', '', 'OlÃ¡'),
(16, 'mario', '0000-00-00 00:00:00', 'Olá de teste', '', '', '', '', 'OlÃ¡ a todos'),
(17, 'mario', '0000-00-00 00:00:00', 'asda asd ', '', '', '', '', 'asdasd asd'),
(18, 'mario', '0000-00-00 00:00:00', 'aas asd asdas dsdas', '', '', '', '', 'asd'),
(19, 'mario', '0000-00-00 00:00:00', '11111111111', '', '', '', '', '1111111111'),
(20, 'mario', '0000-00-00 00:00:00', '1122222', '', '', '', '', '1111111'),
(21, 'mario', '0000-00-00 00:00:00', 'Teste final', '', '', '', '', 'Teste final'),
(22, 'mario', '0000-00-00 00:00:00', 'is anybody out there?', '', '', '', '', 'oi'),
(23, 'mario', '0000-00-00 00:00:00', 'Ok', '', '', '', '', 'Hello?'),
(24, 'mario', '0000-00-00 00:00:00', 'Post blablabla', '', '', '', '', 'Post1'),
(25, 'mario', '0000-00-00 00:00:00', 'OlÃ¡', '', '', '', '', 'OlÃ¡'),
(26, 'mario', '0000-00-00 00:00:00', 'OlÃ¡ mundo', '', '', '', '', 'OlÃ¡');

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
(1, 'admin', 'calpis.nomu@gmail.com', '$2a$10$10tq9DoFq5lHxZcDEZq3Xuxr6SrznnkGXPK.LkMqQgYWHF3empoCm', 'Luís', 'Francisco', 'Portugal', 'd', 'Um gajo 5 estrelas', 'Sr.', 'The amazing company!', '222333444', 'http://images.nationalgeographic.com/wpf/media-live/photos/000/004/cache/amazon-horned-frog_443_600x450.jpg', 'www.deliciaego.com', 'https://www.facebook.com/', 'https://plus.google.com/getstarted?fww=1', 'twitter.com', '192.168.1.2', '2014-09-14 00:00:00', '2014-09-14 00:00:00', '2014-09-14 00:00:00', '1'),
(2, 'mario', 'marioasfrancisco@gmail.com', '$2a$10$10tq9DoFq5lHxZcDEZq3Xuxr6SrznnkGXPK.LkMqQgYWHF3empoCm', '', 'Francisco', 'Portugal', 'a', 'HI', 'Mr.', 'Nespithe', '123456', 'http://upload.wikimedia.org/wikipedia/commons/6/60/User.svg', 'www.mariowebpage.com', 'www.facebook.com/marioasfrancisco', 'www.google.com/marioasfrancisco', 'www.twitter.com/marioasfrancisco', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', ''),
(3, 'SidSepulveda', 'jawnfkajwf@gmail.com', '$2a$10$PFTyDTW3Ij/q4tz5VoRAYeqpSxhc2HrbpV4LC1PyKAlGVo9jplqkS', 'Armando', 'Oliveira', 'Portugal', 'a', 'Macacos, gorilas, babuÃ­nos e companhia!', 'Sra.', 'Baboon', '911234356', 'http://irritableblonde.com/wp-content/uploads/2014/03/baboon.jpg', 'www.google.com', 'www.facebook.com/baboon', 'www.google.com/baboongoogle', 'www.twitter.com/baboontwitter', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0'),
(4, 'zemanel', 'zemanel@gmail.com', '$2a$10$3jC66EpraL.zdYcj4Ev3LueFOEQHx71E1WeFqfz4TrRMwnrLQW3Te', 'José', 'Manuel', 'Portugal', 'a', 'Gosto de passear, comer e beber bem!', 'Sr.', 'Tasca do Zé Manel', '911237654', 'http://faltadar.files.wordpress.com/2011/05/tasca_rasca2006_021.jpg', '', 'www.facebook.com/zemanel', 'www.google.com/zemanel', 'www.twitter.com/zemanel', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', ''),
(5, 'maria_albertina', 'marialbertina@gmail.com', '$2a$10$b6siKn0EB7iVcbc.Tj1v4uPyVefya2HBl9SyP9rAHEBLNbPPYWMQ2', 'Maria', 'Albertina', 'Portugal', 'a', 'Cozinheira profissional', 'Dona', 'Tasca do Zé Manel', '938765678', 'http://tv.i.uol.com.br/televisao/2011/11/25/ana-maria-braga-durante-gravacao-do-tema-de-fim-de-ano-da-globo-271111-1322220956296_200x285.jpg', '', 'www.facebook.com/maria_albertina', 'www.google.com/maria_albertina', 'www.twitter.com/maria_albertina', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', ''),
(6, 'trafulha', 'trafulha@gmail.com', '$2a$10$yKdjZv96bOofoUxJ6p1PbewziU/WxaojIVaKSXIrMmYCMDrxmwf5O', 'António', 'Madureira', 'Portugal', 'a', 'Investidor de alto risco', 'Sr.', 'Loja do Trafulha', '252765478', 'http://5ones.com/wp-content/uploads/2008/11/greencard-300x299.jpg', '', 'www.facebook.com/trafulha', 'www.google.com/trafulha', 'www.twitter.com/trafulha', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', ''),
(7, 'alexandracontas', 'alexandracontas@gmail.com', '$2a$10$bUC3EmVHjsdHbPmpyPEPVu1PtaR3qsPsvtwUjcvDDXNTg56FcY7KG', 'Alexandra', 'Ribeiro', 'Portugal', 'a', 'A melhor contabilista de Portugal.', 'Dra.', 'Loja do Trafulha', '967483956', 'http://educationcareerarticles.com/wp-content/uploads/2013/08/accountant.jpg', '', 'www.facebook.com/alexandra', 'www.google.com/alexandra', 'www.twitter.com/alexandra', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', ''),
(8, 'jpeter', 'jpeter@gmail.com', '$2a$10$gGb7i1MgHhxvrJP237duP.K0/7G/w.Dv.GG439TsIYtKffbJvOrCa', 'John', 'Peter', 'USA', 'a', 'Circus performer', 'Sr.', 'The Amazing Circus', '914235858', 'http://eastbrooklyn.com/wp-content/uploads/2014/08/bald-clown-cap-64403.jpg', '', 'www.facebook.com/jpeter', 'www.google.com/jpeter', 'www.twitter.com/jpeter', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '');

-- --------------------------------------------------------

--
-- Estrutura da tabela `wishlists`
--

CREATE TABLE IF NOT EXISTS `wishlists` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `product_id` int(11) NOT NULL,
  `user` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Extraindo dados da tabela `wishlists`
--

INSERT INTO `wishlists` (`id`, `product_id`, `user`) VALUES
(1, 1, 'mario');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

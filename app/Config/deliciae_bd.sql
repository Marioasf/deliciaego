-- phpMyAdmin SQL Dump
-- version 4.0.10deb1
-- http://www.phpmyadmin.net
--
-- Máquina: localhost
-- Data de Criação: 11-Nov-2014 às 16:54
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
  `id` int(11) NOT NULL,
  `type` enum('post','item','comment','like') NOT NULL,
  `activity_id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `friend_username` varchar(255) NOT NULL,
  `datemade` datetime NOT NULL,
  `checked` bit(1) NOT NULL DEFAULT b'0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `activities`
--

INSERT INTO `activities` (`id`, `type`, `activity_id`, `username`, `friend_username`, `datemade`, `checked`) VALUES
(1, 'post', 1, 'admin', 'mario', '2014-09-24 00:00:00', b'0');

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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Extraindo dados da tabela `friends`
--

INSERT INTO `friends` (`id`, `user1`, `user2`, `datemade`, `accepted`) VALUES
(1, 'mario', 'admin', '2014-09-17 00:00:00', '1'),
(2, 'mario', 'SidSepulveda', '2014-09-10 00:00:00', '1'),
(3, 'admin', 'mario', '2014-09-23 00:00:00', '1'),
(4, 'SidSepulveda', 'mario', '2014-09-23 00:00:00', '1'),
(5, 'mario', 'zemanel', '2014-10-17 20:33:00', ''),
(6, 'zemanel', 'mario', '2014-10-17 20:33:00', '');

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
-- Estrutura da tabela `messages`
--

CREATE TABLE IF NOT EXISTS `messages` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user1` varchar(16) NOT NULL,
  `user2` varchar(16) NOT NULL,
  `datemade` datetime NOT NULL,
  `text` varchar(255) NOT NULL,
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
  `title` varchar(25) DEFAULT NULL,
  `user` varchar(16) NOT NULL,
  `datemade` datetime NOT NULL,
  `content` varchar(255) NOT NULL,
  `picture` varchar(255) NOT NULL,
  `video` varchar(255) NOT NULL,
  `location` varchar(255) NOT NULL,
  `tagged` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Extraindo dados da tabela `posts`
--

INSERT INTO `posts` (`id`, `title`, `user`, `datemade`, `content`, `picture`, `video`, `location`, `tagged`) VALUES
(1, NULL, 'admin', '2014-09-24 00:00:00', 'PHP is a server-side scripting language designed for web development but also used as a general-purpose programming language.', 'http://blog.ronnyristau.de/wp-content/uploads/2008/12/php.jpg', '', '', ''),
(2, NULL, 'mario', '2014-09-25 00:00:00', '', 'http://local.brookings.k12.sd.us/krscience/zoology/webpage%20projects/sp11webprojects/baboon/olivebaboon2.jpg', '', '', ''),
(3, NULL, 'SidSepulveda', '2014-09-23 00:00:00', '', '', 'https://www.youtube.com/watch?v=NK3-Cy33pKs', '', ''),
(4, NULL, 'admin', '2014-09-25 00:00:00', '', 'http://www.hdwallpapers.in/walls/african_lion_king-wide.jpg', '', '', ''),
(5, NULL, 'admin', '2014-10-06 00:00:00', 'Port wine (also known as Vinho do Porto, Portuguese pronunciation: [?vi?udu?po?tu], Porto, and usually simply port) is a Portuguese fortified wine produced exclusively in the Douro Valley in the northern provinces of Portugal.[1] It is typically a sweet, ', '', '', 'Porto', '');

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
  `userlevel` enum('1','2','3') NOT NULL DEFAULT '2',
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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=10 ;

--
-- Extraindo dados da tabela `users`
--

INSERT INTO `users` (`id`, `username`, `email`, `password`, `first_name`, `last_name`, `country`, `userlevel`, `about`, `title`, `company`, `phone`, `picture`, `website`, `facebook`, `google`, `twitter`, `ip`, `signup`, `lastlogin`, `notescheck`, `activated`) VALUES
(1, 'admin', 'calpis.nomu@gmail.com', '$2a$10$PFTyDTW3Ij/q4tz5VoRAYeqpSxhc2HrbpV4LC1PyKAlGVo9jplqkS', 'Luís', 'Francisco', 'Portugal', '1', 'Um gajo 5 estrelas', 'Sr.', 'The amazing company!', '222333444', 'http://images.nationalgeographic.com/wpf/media-live/photos/000/004/cache/amazon-horned-frog_443_600x450.jpg', 'www.deliciaego.com', 'https://www.facebook.com/', 'https://plus.google.com/getstarted?fww=1', 'twitter.com', '192.168.1.2', '2014-09-14 00:00:00', '2014-09-14 00:00:00', '2014-09-14 00:00:00', '1'),
(2, 'mario', 'marioasfrancisco@gmail.com', '$2a$10$PFTyDTW3Ij/q4tz5VoRAYeqpSxhc2HrbpV4LC1PyKAlGVo9jplqkS', 'MÃ¡rio', 'Francisco', 'Portugal', '1', 'HI', 'Mr.', 'Nespithe', '911234567', 'http://upload.wikimedia.org/wikipedia/commons/3/31/Great_white_shark_south_africa.jpg', 'www.example.com', 'www.facebook.com/marioasfrancisco', 'www.google.com/marioasfrancisco', 'www.twitter.com/marioasfrancisco', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', ''),
(3, 'SidSepulveda', 'jawnfkajwf@gmail.com', '$2a$10$PFTyDTW3Ij/q4tz5VoRAYeqpSxhc2HrbpV4LC1PyKAlGVo9jplqkS', 'Armando', 'Oliveira', 'Portugal', '2', 'Macacos, gorilas, babuÃ­nos e companhia!', 'Sra.', 'Baboon', '911234356', 'http://irritableblonde.com/wp-content/uploads/2014/03/baboon.jpg', 'www.google.com', 'www.facebook.com/baboon', 'www.google.com/baboongoogle', 'www.twitter.com/baboontwitter', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0'),
(4, 'zemanel', 'zemanel@gmail.com', '$2a$10$3jC66EpraL.zdYcj4Ev3LueFOEQHx71E1WeFqfz4TrRMwnrLQW3Te', 'JosÃ©', 'Manuel', 'Portugal', '2', 'Gosto de passear, comer e beber bem!', 'Sr.', 'Tasca do ZÃ© Manel', '911237654', 'http://faltadar.files.wordpress.com/2011/05/tasca_rasca2006_021.jpg', '', 'www.facebook.com/zemanel', 'www.google.com/zemanel', 'www.twitter.com/zemanel', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', ''),
(5, 'maria_albertina', 'marialbertina@gmail.com', '$2a$10$b6siKn0EB7iVcbc.Tj1v4uPyVefya2HBl9SyP9rAHEBLNbPPYWMQ2', 'Maria', 'Albertina', 'Portugal', '2', 'Cozinheira profissional', 'Dona', 'Tasca do ZÃ© Manel', '938765678', 'http://tv.i.uol.com.br/televisao/2011/11/25/ana-maria-braga-durante-gravacao-do-tema-de-fim-de-ano-da-globo-271111-1322220956296_200x285.jpg', '', 'www.facebook.com/maria_albertina', 'www.google.com/maria_albertina', 'www.twitter.com/maria_albertina', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', ''),
(6, 'trafulha', 'trafulha@gmail.com', '$2a$10$yKdjZv96bOofoUxJ6p1PbewziU/WxaojIVaKSXIrMmYCMDrxmwf5O', 'AntÃ³nio', 'Madureira', 'Portugal', '2', 'Investidor de alto risco', 'Sr.', 'Loja do Trafulha', '252765478', 'http://5ones.com/wp-content/uploads/2008/11/greencard-300x299.jpg', '', 'www.facebook.com/trafulha', 'www.google.com/trafulha', 'www.twitter.com/trafulha', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', ''),
(7, 'alexandracontas', 'alexandracontas@gmail.com', '$2a$10$bUC3EmVHjsdHbPmpyPEPVu1PtaR3qsPsvtwUjcvDDXNTg56FcY7KG', 'Alexandra', 'Ribeiro', 'Portugal', '2', 'A melhor contabilista de Portugal.', 'Dra.', 'Loja do Trafulha', '967483956', 'http://educationcareerarticles.com/wp-content/uploads/2013/08/accountant.jpg', '', 'www.facebook.com/alexandra', 'www.google.com/alexandra', 'www.twitter.com/alexandra', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', ''),
(8, 'jpeter', 'jpeter@gmail.com', '$2a$10$gGb7i1MgHhxvrJP237duP.K0/7G/w.Dv.GG439TsIYtKffbJvOrCa', 'John', 'Peter', 'USA', '2', 'Circus performer', 'Sr.', 'The Amazing Circus', '914235858', 'http://eastbrooklyn.com/wp-content/uploads/2014/08/bald-clown-cap-64403.jpg', '', 'www.facebook.com/jpeter', 'www.google.com/jpeter', 'www.twitter.com/jpeter', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', ''),
(9, 'zeninguem', 'zeninguem@mail.com', '$2a$10$AmKjAr2kHbV46mE3RaJHp./hJCRRF/92RH6iBlffgrr83BjnPRRuy', 'JosÃ©', '', 'Portugal', '2', 'Nada', 'Sr.', '', '', '', '', '', '', '', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '');
--
-- Base de Dados: `phpmyadmin`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `pma_bookmark`
--

CREATE TABLE IF NOT EXISTS `pma_bookmark` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `dbase` varchar(255) COLLATE utf8_bin NOT NULL DEFAULT '',
  `user` varchar(255) COLLATE utf8_bin NOT NULL DEFAULT '',
  `label` varchar(255) CHARACTER SET utf8 NOT NULL DEFAULT '',
  `query` text COLLATE utf8_bin NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Bookmarks' AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estrutura da tabela `pma_column_info`
--

CREATE TABLE IF NOT EXISTS `pma_column_info` (
  `id` int(5) unsigned NOT NULL AUTO_INCREMENT,
  `db_name` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `table_name` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `column_name` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `comment` varchar(255) CHARACTER SET utf8 NOT NULL DEFAULT '',
  `mimetype` varchar(255) CHARACTER SET utf8 NOT NULL DEFAULT '',
  `transformation` varchar(255) COLLATE utf8_bin NOT NULL DEFAULT '',
  `transformation_options` varchar(255) COLLATE utf8_bin NOT NULL DEFAULT '',
  PRIMARY KEY (`id`),
  UNIQUE KEY `db_name` (`db_name`,`table_name`,`column_name`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Column information for phpMyAdmin' AUTO_INCREMENT=11 ;

--
-- Extraindo dados da tabela `pma_column_info`
--

INSERT INTO `pma_column_info` (`id`, `db_name`, `table_name`, `column_name`, `comment`, `mimetype`, `transformation`, `transformation_options`) VALUES
(1, 'deliciae_bd', 'posts', 'title', '', '', '_', ''),
(2, 'deliciae_bd', 'activities', 'id', '', '', '_', ''),
(3, 'deliciae_bd', 'activities', 'type', '', '', '_', ''),
(4, 'deliciae_bd', 'activities', 'activity_id', '', '', '_', ''),
(5, 'deliciae_bd', 'users', 'userlevel', '', '', '_', ''),
(6, 'deliciae_bd', 'activities', 'username', '', '', '_', ''),
(7, 'deliciae_bd', 'activities', 'friend_username', '', '', '_', ''),
(8, 'deliciae_bd', 'activities', 'datemade', '', '', '_', ''),
(9, 'deliciae_bd', 'activities', 'checked', '', '', '_', ''),
(10, 'deliciae_bd', 'activities', 'notification_id', '', '', '_', '');

-- --------------------------------------------------------

--
-- Estrutura da tabela `pma_designer_coords`
--

CREATE TABLE IF NOT EXISTS `pma_designer_coords` (
  `db_name` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `table_name` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `x` int(11) DEFAULT NULL,
  `y` int(11) DEFAULT NULL,
  `v` tinyint(4) DEFAULT NULL,
  `h` tinyint(4) DEFAULT NULL,
  PRIMARY KEY (`db_name`,`table_name`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Table coordinates for Designer';

-- --------------------------------------------------------

--
-- Estrutura da tabela `pma_history`
--

CREATE TABLE IF NOT EXISTS `pma_history` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `username` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `db` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `table` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `timevalue` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `sqlquery` text COLLATE utf8_bin NOT NULL,
  PRIMARY KEY (`id`),
  KEY `username` (`username`,`db`,`table`,`timevalue`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='SQL history for phpMyAdmin' AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estrutura da tabela `pma_pdf_pages`
--

CREATE TABLE IF NOT EXISTS `pma_pdf_pages` (
  `db_name` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `page_nr` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `page_descr` varchar(50) CHARACTER SET utf8 NOT NULL DEFAULT '',
  PRIMARY KEY (`page_nr`),
  KEY `db_name` (`db_name`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='PDF relation pages for phpMyAdmin' AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estrutura da tabela `pma_recent`
--

CREATE TABLE IF NOT EXISTS `pma_recent` (
  `username` varchar(64) COLLATE utf8_bin NOT NULL,
  `tables` text COLLATE utf8_bin NOT NULL,
  PRIMARY KEY (`username`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Recently accessed tables';

--
-- Extraindo dados da tabela `pma_recent`
--

INSERT INTO `pma_recent` (`username`, `tables`) VALUES
('root', '[{"db":"deliciae_bd","table":"messages"},{"db":"deliciae_bd","table":"chat"},{"db":"deliciae_bd","table":"activities"},{"db":"deliciae_bd","table":"posts"},{"db":"deliciae_bd","table":"users"},{"db":"deliciae_bd","table":"photos"},{"db":"deliciae_bd","table":"status"},{"db":"deliciae_bd","table":"comments"},{"db":"deliciae_bd","table":"notifications"},{"db":"deliciae_bd","table":"friends"}]');

-- --------------------------------------------------------

--
-- Estrutura da tabela `pma_relation`
--

CREATE TABLE IF NOT EXISTS `pma_relation` (
  `master_db` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `master_table` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `master_field` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `foreign_db` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `foreign_table` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `foreign_field` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  PRIMARY KEY (`master_db`,`master_table`,`master_field`),
  KEY `foreign_field` (`foreign_db`,`foreign_table`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Relation table';

-- --------------------------------------------------------

--
-- Estrutura da tabela `pma_table_coords`
--

CREATE TABLE IF NOT EXISTS `pma_table_coords` (
  `db_name` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `table_name` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `pdf_page_number` int(11) NOT NULL DEFAULT '0',
  `x` float unsigned NOT NULL DEFAULT '0',
  `y` float unsigned NOT NULL DEFAULT '0',
  PRIMARY KEY (`db_name`,`table_name`,`pdf_page_number`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Table coordinates for phpMyAdmin PDF output';

-- --------------------------------------------------------

--
-- Estrutura da tabela `pma_table_info`
--

CREATE TABLE IF NOT EXISTS `pma_table_info` (
  `db_name` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `table_name` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `display_field` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  PRIMARY KEY (`db_name`,`table_name`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Table information for phpMyAdmin';

-- --------------------------------------------------------

--
-- Estrutura da tabela `pma_table_uiprefs`
--

CREATE TABLE IF NOT EXISTS `pma_table_uiprefs` (
  `username` varchar(64) COLLATE utf8_bin NOT NULL,
  `db_name` varchar(64) COLLATE utf8_bin NOT NULL,
  `table_name` varchar(64) COLLATE utf8_bin NOT NULL,
  `prefs` text COLLATE utf8_bin NOT NULL,
  `last_update` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`username`,`db_name`,`table_name`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Tables'' UI preferences';

-- --------------------------------------------------------

--
-- Estrutura da tabela `pma_tracking`
--

CREATE TABLE IF NOT EXISTS `pma_tracking` (
  `db_name` varchar(64) COLLATE utf8_bin NOT NULL,
  `table_name` varchar(64) COLLATE utf8_bin NOT NULL,
  `version` int(10) unsigned NOT NULL,
  `date_created` datetime NOT NULL,
  `date_updated` datetime NOT NULL,
  `schema_snapshot` text COLLATE utf8_bin NOT NULL,
  `schema_sql` text COLLATE utf8_bin,
  `data_sql` longtext COLLATE utf8_bin,
  `tracking` set('UPDATE','REPLACE','INSERT','DELETE','TRUNCATE','CREATE DATABASE','ALTER DATABASE','DROP DATABASE','CREATE TABLE','ALTER TABLE','RENAME TABLE','DROP TABLE','CREATE INDEX','DROP INDEX','CREATE VIEW','ALTER VIEW','DROP VIEW') COLLATE utf8_bin DEFAULT NULL,
  `tracking_active` int(1) unsigned NOT NULL DEFAULT '1',
  PRIMARY KEY (`db_name`,`table_name`,`version`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_bin ROW_FORMAT=COMPACT COMMENT='Database changes tracking for phpMyAdmin';

-- --------------------------------------------------------

--
-- Estrutura da tabela `pma_userconfig`
--

CREATE TABLE IF NOT EXISTS `pma_userconfig` (
  `username` varchar(64) COLLATE utf8_bin NOT NULL,
  `timevalue` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `config_data` text COLLATE utf8_bin NOT NULL,
  PRIMARY KEY (`username`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='User preferences storage for phpMyAdmin';

--
-- Extraindo dados da tabela `pma_userconfig`
--

INSERT INTO `pma_userconfig` (`username`, `timevalue`, `config_data`) VALUES
('root', '2014-10-02 16:56:40', '{"lang":"pt"}');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

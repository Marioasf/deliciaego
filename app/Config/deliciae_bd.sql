-- phpMyAdmin SQL Dump
-- version 4.0.10deb1
-- http://www.phpmyadmin.net
--
-- Máquina: localhost
-- Data de Criação: 25-Nov-2014 às 16:53
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
  PRIMARY KEY (`id`),
  UNIQUE KEY `name` (`name`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Extraindo dados da tabela `companies`
--

INSERT INTO `companies` (`id`, `name`, `address`, `location`, `ifn`, `category`, `user`, `phone`, `email`, `website`, `about`, `picture`) VALUES
(1, 'A Grande Empresa', '111 Rua das Empresas,4490-898  Porto', 'Portugal', 1234567890, 'Exportadora de grandes produtos', 'mario', '252818818', 'grande_empresa@gmail.com', '', 'Esta grande empresa foi fundada pelo empreendedor Mário Francisco!', 'http://gobigusa.com/yahoo_site_admin/assets/images/GB-logo-HiRes_WEB.13804938.jpg'),
(2, 'A Pequena Empresa', 'Rua das Empresas, 829 Vila do Conde', 'Portugal', 2147483647, 'Artigos pequenos', 'SidSepulveda', '252768908', 'pequenaempresa@gmail.com', '', 'Vende artigos de pequena dimensão', 'http://www.click-finders.com/blog/wp-content/uploads/2013/01/small-business.bmp');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

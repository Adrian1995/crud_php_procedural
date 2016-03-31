-- phpMyAdmin SQL Dump
-- version 4.0.4
-- http://www.phpmyadmin.net
--
-- Máquina: localhost
-- Data de Criação: 31-Mar-2016 às 22:53
-- Versão do servidor: 5.6.12-log
-- versão do PHP: 5.4.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de Dados: `crud`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `filmes`
--

CREATE TABLE IF NOT EXISTS `filmes` (
  `filme_id` int(11) NOT NULL AUTO_INCREMENT,
  `filme_nome` varchar(100) NOT NULL,
  `filme_data` date NOT NULL,
  `filme_valor` float NOT NULL,
  `filme_diretor` varchar(100) NOT NULL,
  PRIMARY KEY (`filme_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Extraindo dados da tabela `filmes`
--

INSERT INTO `filmes` (`filme_id`, `filme_nome`, `filme_data`, `filme_valor`, `filme_diretor`) VALUES
(1, 'A ultima lenda', '2001-01-01', 3.99, 'William Almeida'),
(2, 'Harry Potter', '2016-03-02', 5.99, 'Adrian Medeiros');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 09-Fev-2020 às 03:21
-- Versão do servidor: 5.6.17
-- PHP Version: 5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `new_crud`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `cadastro_pacientes`
--

CREATE TABLE IF NOT EXISTS `cadastro_pacientes` (
  `id_paciente` int(5) NOT NULL AUTO_INCREMENT,
  `nome_paciente` varchar(70) NOT NULL,
  `tel_paciente` varchar(11) NOT NULL,
  `email_paciente` varchar(90) NOT NULL,
  `rg` varchar(8) NOT NULL,
  `cpf` varchar(11) NOT NULL,
  `senha` varchar(10) NOT NULL,
  `data_cadas` varchar(10) NOT NULL,
  `hora_cadas` varchar(5) NOT NULL,
  `data_nasci` varchar(10) NOT NULL,
  `valor_mensal` float NOT NULL,
  `situ_ativi` varchar(7) NOT NULL,
  PRIMARY KEY (`id_paciente`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Extraindo dados da tabela `cadastro_pacientes`
--

INSERT INTO `cadastro_pacientes` (`id_paciente`, `nome_paciente`, `tel_paciente`, `email_paciente`, `rg`, `cpf`, `senha`, `data_cadas`, `hora_cadas`, `data_nasci`, `valor_mensal`, `situ_ativi`) VALUES
(2, 'judah', '79991543366', 'judah.aragao@gmail.com', '00000001', '00000000000', 'judah123', '08/02/2020', '10:50', '05/11/2001', 4000, 'ativo'),
(3, 'judah freire', '79991643364', 'jonas.arruda@gmail.com', '00000001', '00000000000', 'judah789', '08/02/2020', '10:48', '05/11/2000', 356.98, 'ativo'),
(4, 'judah aragao', '79991643364', 'judah.aragao@gmail.com', '00000000', '00000000000', 'jujuba', '08/02/2020', '10:48', '05/11/2000', 356.98, 'ativo'),
(5, 'judah', '79991543366', 'judah.aragao@gmail.com', '00000000', '00000000000', 'asdasfas', '08/02/2020', '10:48', '05/11/2000', 356.98, 'ativo');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Tempo de geração: 25-Mar-2021 às 05:12
-- Versão do servidor: 8.0.21
-- versão do PHP: 7.3.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `tabela_tcc`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `alimentos`
--

DROP TABLE IF EXISTS `alimentos`;
CREATE TABLE IF NOT EXISTS `alimentos` (
  `Id_Alimento` int NOT NULL AUTO_INCREMENT,
  `Nome_Alimento` varchar(150) NOT NULL,
  `Quant_Ali` int NOT NULL,
  `fk_Instituicao_ID_Inst` int NOT NULL,
  PRIMARY KEY (`Id_Alimento`)
) ENGINE=InnoDB AUTO_INCREMENT=50 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Extraindo dados da tabela `alimentos`
--

INSERT INTO `alimentos` (`Id_Alimento`, `Nome_Alimento`, `Quant_Ali`, `fk_Instituicao_ID_Inst`) VALUES
(30, 'Arroz', 50, 5),
(31, 'Feijão', 50, 5),
(32, 'Alface', 50, 5),
(33, 'Tomate', 50, 5),
(34, 'Patinho Moído', 50, 5),
(35, 'Calabresa', 50, 5),
(36, 'Batata', 50, 5),
(37, 'File de Frango', 50, 5),
(38, 'Cotelinha de Porco', 50, 5),
(39, 'Arroz', 40, 2),
(40, 'Feijão', 40, 2),
(41, 'Rucula', 40, 2),
(42, 'Pepino', 35, 2),
(43, 'Grão de Bico', 40, 2),
(44, 'Coxa De Frango', 100, 2),
(45, 'Arroz', 50, 4),
(46, 'Feijão', 50, 4),
(47, 'Beterraba', 50, 4),
(48, 'Tomate', 50, 4),
(49, 'Filé de Tilápia', 50, 4);

-- --------------------------------------------------------

--
-- Estrutura da tabela `cardapio`
--

DROP TABLE IF EXISTS `cardapio`;
CREATE TABLE IF NOT EXISTS `cardapio` (
  `Id_Cardapio` int NOT NULL AUTO_INCREMENT,
  `DataCardapio` date NOT NULL,
  `Hora_de_Abertura_Cardapio` time NOT NULL,
  `Hora_De_Fechamento_Cardapio` time NOT NULL,
  `Descricao` text NOT NULL,
  `Quantidade_Disponivel` int NOT NULL,
  `fk_Instituicao_ID_Inst` int NOT NULL,
  PRIMARY KEY (`Id_Cardapio`)
) ENGINE=InnoDB AUTO_INCREMENT=76 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Extraindo dados da tabela `cardapio`
--

INSERT INTO `cardapio` (`Id_Cardapio`, `DataCardapio`, `Hora_de_Abertura_Cardapio`, `Hora_De_Fechamento_Cardapio`, `Descricao`, `Quantidade_Disponivel`, `fk_Instituicao_ID_Inst`) VALUES
(70, '2021-03-25', '11:30:00', '13:30:00', 'Arroz, Feijão, Salada de Pepino e Coxa de frango Frita', 15, 2),
(71, '2021-03-25', '11:30:00', '13:30:00', 'Arroz, Feijão, Salada de Grão de Bico e Coxa de frango Frita', 15, 2),
(72, '2021-03-25', '00:00:00', '14:00:00', 'Arroz, Feijão, Salada de Alface e Tomate e Filé de Frango com Batata', 20, 5),
(74, '2021-03-25', '00:00:00', '14:00:00', 'Arroz, Feijão, Salada de Alface e Tomate e Costelinha de Porco com Batata', 20, 5),
(75, '2021-03-25', '11:00:00', '14:00:00', 'Arroz, Feijão, Salada de Beterraba com Tomate e Filé de Tilápia', 18, 4);

-- --------------------------------------------------------

--
-- Estrutura da tabela `depen_usuario`
--

DROP TABLE IF EXISTS `depen_usuario`;
CREATE TABLE IF NOT EXISTS `depen_usuario` (
  `Id_Depen` int NOT NULL AUTO_INCREMENT,
  `Nome` varchar(150) NOT NULL,
  `Nascimento` date NOT NULL,
  `Idade` int NOT NULL,
  `ID_Responsavel` int NOT NULL,
  `fk_Usuario_ID_Usu` int NOT NULL,
  PRIMARY KEY (`Id_Depen`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Estrutura da tabela `instituicao`
--

DROP TABLE IF EXISTS `instituicao`;
CREATE TABLE IF NOT EXISTS `instituicao` (
  `ID_Inst` int NOT NULL AUTO_INCREMENT,
  `nome` varchar(150) NOT NULL,
  `ResponsavelPelaInstituição` varchar(150) NOT NULL,
  `email` varchar(150) NOT NULL,
  `senha` varchar(150) NOT NULL,
  `Rua` varchar(150) NOT NULL,
  `Num_Inst` varchar(150) NOT NULL,
  `Bairro` varchar(150) NOT NULL,
  `CEP` varchar(12) NOT NULL,
  `Telefone` varchar(150) NOT NULL,
  `CNPJ` varchar(150) NOT NULL,
  PRIMARY KEY (`ID_Inst`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Extraindo dados da tabela `instituicao`
--

INSERT INTO `instituicao` (`ID_Inst`, `nome`, `ResponsavelPelaInstituição`, `email`, `senha`, `Rua`, `Num_Inst`, `Bairro`, `CEP`, `Telefone`, `CNPJ`) VALUES
(2, 'Fome Jamais', '', 'fomejamais@gmail.com', '123', '123456', '123123', '123456', '123456', '123456', '123456'),
(4, 'Aqui Não Tem Barriga Vazia', '', '123@gmail.com', '123', '', '', '', '0', '', ''),
(5, 'Japapou', 'Xing Xong Lang', 'japa@gmail.com', '123', 'Teste Rua', '25', 'Teste Bairro ', '  00000000  ', '00 000000000', '000000000000000000000000');

-- --------------------------------------------------------

--
-- Estrutura da tabela `itens_cardapio`
--

DROP TABLE IF EXISTS `itens_cardapio`;
CREATE TABLE IF NOT EXISTS `itens_cardapio` (
  `Id_Card` int NOT NULL AUTO_INCREMENT,
  `fk_Cardapio_Id_Cardapio` int NOT NULL,
  `fk_Alimentos_Id_Alimento` int NOT NULL,
  PRIMARY KEY (`Id_Card`)
) ENGINE=InnoDB AUTO_INCREMENT=258 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Extraindo dados da tabela `itens_cardapio`
--

INSERT INTO `itens_cardapio` (`Id_Card`, `fk_Cardapio_Id_Cardapio`, `fk_Alimentos_Id_Alimento`) VALUES
(104, 36, 1),
(105, 36, 2),
(106, 36, 12),
(107, 36, 15),
(108, 37, 6),
(109, 37, 7),
(110, 37, 17),
(111, 43, 9),
(112, 43, 10),
(113, 43, 11),
(114, 44, 1),
(115, 44, 2),
(116, 44, 13),
(117, 44, 1),
(118, 44, 2),
(119, 44, 5),
(120, 44, 1),
(121, 44, 2),
(122, 44, 5),
(123, 44, 1),
(124, 44, 2),
(125, 44, 5),
(126, 44, 1),
(127, 44, 2),
(128, 44, 5),
(129, 45, 1),
(130, 45, 2),
(131, 45, 5),
(132, 46, 1),
(133, 46, 2),
(134, 46, 5),
(135, 47, 1),
(136, 47, 2),
(137, 47, 5),
(138, 48, 1),
(139, 48, 2),
(140, 48, 5),
(141, 48, 6),
(142, 49, 1),
(143, 49, 2),
(144, 49, 5),
(145, 49, 6),
(146, 50, 1),
(147, 50, 2),
(148, 50, 5),
(149, 50, 6),
(150, 51, 1),
(151, 51, 2),
(152, 51, 5),
(153, 51, 6),
(154, 52, 1),
(155, 52, 2),
(156, 52, 5),
(157, 52, 6),
(158, 53, 1),
(159, 53, 2),
(160, 53, 5),
(161, 53, 6),
(162, 54, 1),
(163, 54, 2),
(164, 54, 5),
(165, 54, 6),
(166, 55, 1),
(167, 55, 2),
(168, 55, 5),
(169, 55, 6),
(170, 56, 1),
(171, 56, 2),
(172, 56, 5),
(173, 56, 6),
(174, 57, 1),
(175, 57, 2),
(176, 57, 5),
(177, 57, 6),
(178, 58, 1),
(179, 58, 2),
(180, 58, 5),
(181, 58, 6),
(182, 59, 1),
(183, 59, 2),
(184, 59, 5),
(185, 59, 6),
(186, 44, 21),
(187, 44, 23),
(188, 44, 24),
(189, 44, 21),
(190, 44, 23),
(191, 44, 24),
(192, 44, 21),
(193, 44, 23),
(194, 44, 24),
(195, 44, 21),
(196, 44, 23),
(197, 44, 24),
(198, 44, 21),
(199, 44, 23),
(200, 44, 24),
(201, 60, 21),
(202, 60, 23),
(203, 60, 24),
(204, 61, 21),
(205, 61, 23),
(206, 61, 24),
(207, 62, 21),
(208, 62, 23),
(209, 62, 24),
(210, 63, 21),
(211, 63, 23),
(212, 63, 24),
(213, 64, 21),
(214, 64, 23),
(215, 64, 24),
(216, 65, 21),
(217, 65, 23),
(218, 65, 24),
(219, 66, 1),
(220, 66, 2),
(221, 66, 5),
(222, 66, 6),
(223, 67, 1),
(224, 67, 2),
(225, 67, 5),
(226, 67, 6),
(227, 68, 1),
(228, 68, 2),
(229, 68, 5),
(230, 68, 6),
(231, 69, 6),
(232, 69, 17),
(233, 70, 39),
(234, 70, 40),
(235, 70, 42),
(236, 70, 44),
(237, 71, 39),
(238, 71, 40),
(239, 71, 43),
(240, 71, 44),
(241, 72, 30),
(242, 72, 31),
(243, 72, 32),
(244, 72, 33),
(245, 72, 36),
(246, 72, 37),
(247, 74, 30),
(248, 74, 31),
(249, 74, 32),
(250, 74, 33),
(251, 74, 36),
(252, 74, 38),
(253, 75, 45),
(254, 75, 46),
(255, 75, 47),
(256, 75, 48),
(257, 75, 49);

-- --------------------------------------------------------

--
-- Estrutura da tabela `passe`
--

DROP TABLE IF EXISTS `passe`;
CREATE TABLE IF NOT EXISTS `passe` (
  `Id_passe` int NOT NULL AUTO_INCREMENT,
  `Utilizado` varchar(3) NOT NULL,
  `Quantidade_Pedida` int NOT NULL,
  `fk_Cardapio_Id_Cardapio` int NOT NULL,
  `fk_id_usuario` int NOT NULL,
  PRIMARY KEY (`Id_passe`)
) ENGINE=InnoDB AUTO_INCREMENT=88 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Extraindo dados da tabela `passe`
--

INSERT INTO `passe` (`Id_passe`, `Utilizado`, `Quantidade_Pedida`, `fk_Cardapio_Id_Cardapio`, `fk_id_usuario`) VALUES
(73, '', 5, 70, 7),
(74, '', 5, 71, 7),
(75, '', 5, 72, 7),
(76, '', 5, 74, 7),
(77, '', 5, 75, 7),
(78, '', 5, 70, 5),
(79, '', 5, 71, 5),
(80, '', 5, 72, 5),
(81, '', 5, 74, 5),
(82, '', 5, 75, 5),
(83, '', 5, 70, 6),
(84, '', 5, 71, 6),
(85, '', 5, 72, 6),
(86, '', 5, 74, 6),
(87, '', 5, 75, 6);

-- --------------------------------------------------------

--
-- Estrutura da tabela `retirar`
--

DROP TABLE IF EXISTS `retirar`;
CREATE TABLE IF NOT EXISTS `retirar` (
  `fk_Usuario_ID_Usu` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Estrutura da tabela `usuario`
--

DROP TABLE IF EXISTS `usuario`;
CREATE TABLE IF NOT EXISTS `usuario` (
  `ID_Usu` int NOT NULL AUTO_INCREMENT,
  `nome` varchar(150) NOT NULL,
  `email` varchar(150) NOT NULL,
  `senha` varchar(150) NOT NULL,
  `sexo` varchar(1) NOT NULL,
  `CEP` int NOT NULL,
  `Nascimento` date NOT NULL,
  `Quant_Depen` int NOT NULL,
  `Telefone` varchar(150) NOT NULL,
  `CPF` int NOT NULL,
  PRIMARY KEY (`ID_Usu`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Extraindo dados da tabela `usuario`
--

INSERT INTO `usuario` (`ID_Usu`, `nome`, `email`, `senha`, `sexo`, `CEP`, `Nascimento`, `Quant_Depen`, `Telefone`, `CPF`) VALUES
(5, 'Fulano Da Silva', 'fulano@gmail.com', '123', 'm', 0, '2018-07-17', 5, '00 000000000', 2147483647),
(6, 'Ciclano Da Silva', 'ciclano@gmail.com', '123', 'm', 0, '2018-07-17', 5, '00 000000000', 2147483647),
(7, 'Beutrano da Silva', 'beutrano@gmail.com', '123', 'm', 0, '1999-06-23', 2, '00 000000000', 2147483647);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

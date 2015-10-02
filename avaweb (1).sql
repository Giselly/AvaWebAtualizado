-- phpMyAdmin SQL Dump
-- version 3.5.3
-- http://www.phpmyadmin.net
--
-- Servidor: localhost
-- Tempo de Geração: 
-- Versão do Servidor: 5.5.28
-- Versão do PHP: 5.3.18

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Banco de Dados: `avaweb`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `capitulos`
--

CREATE TABLE IF NOT EXISTS `capitulos` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `ordem` int(11) DEFAULT NULL,
  `titulo` varchar(100) DEFAULT NULL,
  `subtitulo` varchar(255) DEFAULT NULL,
  `conteudo` mediumtext,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=6 ;

--
-- Extraindo dados da tabela `capitulos`
--

INSERT INTO `capitulos` (`id`, `ordem`, `titulo`, `subtitulo`, `conteudo`) VALUES
(1, 1, 'Capitulo 1', 'Subtitulo do capitulo 1', 'Conteudo do capitulo 1'),
(2, 2, 'Capitulo 2', 'Subtitulo do capitulo 2', 'Conteudo do capitulo 2'),
(3, 3, 'Capitulo 3', 'Subtitulo do capitulo 3', 'Conteudo do capitulo 3'),
(4, 4, 'Capitulo 4', 'Subtitulo do capitulo 4', 'Conteudo do capitulo 4'),
(5, 5, 'Capitulo 5', 'Subtitulo do capitulo 5', 'Conteudo do capitulo 5');

-- --------------------------------------------------------

--
-- Estrutura da tabela `exerciciosconcluidos`
--

CREATE TABLE IF NOT EXISTS `exerciciosconcluidos` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `idCapitulo` int(11) DEFAULT NULL,
  `idUsuario` int(11) DEFAULT NULL,
  `nota` float DEFAULT NULL,
  `data` datetime DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_exerc_capitulo_idx` (`idCapitulo`),
  KEY `fk_exerc_usuarios_idx` (`idUsuario`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=17 ;

--
-- Extraindo dados da tabela `exerciciosconcluidos`
--

INSERT INTO `exerciciosconcluidos` (`id`, `idCapitulo`, `idUsuario`, `nota`, `data`) VALUES
(8, 1, 10, 3.33333, NULL),
(11, 1, 11, 10, NULL),
(12, 1, 10, 3.33333, NULL),
(13, 1, 10, 3.33333, NULL),
(14, 1, 10, 6.66667, NULL),
(15, 1, 10, 3.33333, NULL),
(16, 2, 11, 10, '2015-09-08 14:26:12');

-- --------------------------------------------------------

--
-- Estrutura da tabela `itens`
--

CREATE TABLE IF NOT EXISTS `itens` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `idQuestoes` int(11) DEFAULT NULL,
  `item` mediumtext,
  `valor` tinyint(1) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_itens_questoes_idx` (`idQuestoes`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=31 ;

--
-- Extraindo dados da tabela `itens`
--

INSERT INTO `itens` (`id`, `idQuestoes`, `item`, `valor`) VALUES
(1, 1, 'Item 1', 0),
(2, 1, 'Item 2', 0),
(3, 1, 'Item 3', 1),
(4, 1, 'Item 4', 0),
(5, 1, 'Item 5', 0),
(6, 2, 'Item 1', 0),
(7, 2, 'Item 2', 1),
(8, 2, 'Item 3', 0),
(9, 2, 'Item 4', 0),
(10, 2, 'Item 5', 0),
(11, 3, 'Item 1', 0),
(12, 3, 'Item 2', 0),
(13, 3, 'Item 3', 0),
(14, 3, 'Item 4', 0),
(15, 3, 'Item 5', 1),
(16, 4, 'Item 1', 0),
(17, 4, 'Item 2', 0),
(18, 4, 'Item 3', 0),
(19, 4, 'Item 4', 1),
(20, 4, 'Item 5', 0),
(21, 5, 'Item 1', 1),
(22, 5, 'Item 2', 0),
(23, 5, 'Item 3', 0),
(24, 5, 'Item 4', 0),
(25, 5, 'Item 5', 0),
(26, 6, 'Item 1', 0),
(27, 6, 'Item 2', 1),
(28, 6, 'Item 3', 0),
(29, 6, 'Item 4', 0),
(30, 6, 'Item 5', 0);

-- --------------------------------------------------------

--
-- Estrutura da tabela `questoes`
--

CREATE TABLE IF NOT EXISTS `questoes` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `idCapitulo` int(11) DEFAULT NULL,
  `questao` mediumtext,
  PRIMARY KEY (`id`),
  KEY `fk_questoes_capitulos_idx` (`idCapitulo`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=7 ;

--
-- Extraindo dados da tabela `questoes`
--

INSERT INTO `questoes` (`id`, `idCapitulo`, `questao`) VALUES
(1, 1, 'Lorem 1  ipsum dolor sit amet, an autem possim posidonium sit, soluta salutatus gubergren ut mei, sit et bonorum phaedrum. Ludus numquam scripserit cu est. Ei inani omnes necessitatibus his, electram repudiare cotidieque ad vel. Nam ex dicunt minimum fierent. Regione volumus sensibus in eam, cu usu habeo euripidis. Te dolor congue sea: '),
(2, 1, 'Lorem 2  ipsum dolor sit amet, an autem possim posidonium sit, soluta salutatus gubergren ut mei, sit et bonorum phaedrum. Ludus numquam scripserit cu est. Ei inani omnes necessitatibus his, electram repudiare cotidieque ad vel. Nam ex dicunt minimum fierent. Regione volumus sensibus in eam, cu usu habeo euripidis. Te dolor congue sea: '),
(3, 1, 'Lorem 3 ipsum dolor sit amet, an autem possim posidonium sit, soluta salutatus gubergren ut mei, sit et bonorum phaedrum. Ludus numquam scripserit cu est. Ei inani omnes necessitatibus his, electram repudiare cotidieque ad vel. Nam ex dicunt minimum fierent. Regione volumus sensibus in eam, cu usu habeo euripidis. Te dolor congue sea: '),
(4, 1, 'Lorem 4  ipsum dolor sit amet, an autem possim posidonium sit, soluta salutatus gubergren ut mei, sit et bonorum phaedrum. Ludus numquam scripserit cu est. Ei inani omnes necessitatibus his, electram repudiare cotidieque ad vel. Nam ex dicunt minimum fierent. Regione volumus sensibus in eam, cu usu habeo euripidis. Te dolor congue sea: '),
(5, 1, 'Lorem 5  ipsum dolor sit amet, an autem possim posidonium sit, soluta salutatus gubergren ut mei, sit et bonorum phaedrum. Ludus numquam scripserit cu est. Ei inani omnes necessitatibus his, electram repudiare cotidieque ad vel. Nam ex dicunt minimum fierent. Regione volumus sensibus in eam, cu usu habeo euripidis. Te dolor congue sea: '),
(6, 1, 'Lorem 6  ipsum dolor sit amet, an autem possim posidonium sit, soluta salutatus gubergren ut mei, sit et bonorum phaedrum. Ludus numquam scripserit cu est. Ei inani omnes necessitatibus his, electram repudiare cotidieque ad vel. Nam ex dicunt minimum fierent. Regione volumus sensibus in eam, cu usu habeo euripidis. Te dolor congue sea: ');

-- --------------------------------------------------------

--
-- Estrutura da tabela `resumo`
--

CREATE TABLE IF NOT EXISTS `resumo` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `idUsuario` int(11) NOT NULL,
  `capitulo` int(11) NOT NULL,
  `resumo` longtext NOT NULL,
  `enviado` tinyint(4) NOT NULL,
  `aprovacao` tinyint(2) NOT NULL DEFAULT '0',
  `assunto` longtext NOT NULL,
  `dataAtual` date NOT NULL,
  `notificacao` longtext,
  `dataNotificacao` date DEFAULT NULL,
  `excluidoNotificacao` tinyint(1) NOT NULL DEFAULT '0',
  `excluidoResumo` tinyint(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`),
  KEY `idUsuario` (`idUsuario`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=20 ;

--
-- Extraindo dados da tabela `resumo`
--

INSERT INTO `resumo` (`id`, `idUsuario`, `capitulo`, `resumo`, `enviado`, `aprovacao`, `assunto`, `dataAtual`, `notificacao`, `dataNotificacao`, `excluidoNotificacao`, `excluidoResumo`) VALUES
(8, 11, 1, '<p>fkjlnvgps&ccedil;kzokjs&ccedil;fod</p>', 0, 1, '', '2015-08-26', NULL, NULL, 0, 0),
(12, 11, 2, '<p>Teste de resum... capitulo 2</p>\r\n<p>&nbsp;</p>', 0, 2, '', '2015-09-04', NULL, NULL, 0, 0),
(13, 11, 2, '<p>Reenvio d eresumo pq fui reprovado</p>', 0, 1, '', '2015-09-04', '<p>Agora sim hein</p>', '2015-09-04', 0, 0),
(17, 11, 3, '<p>Teste capitulo 03-Nivoals</p>', 0, 1, '', '2015-09-08', '', NULL, 0, 1),
(19, 10, 2, 'fdgsfdgsfdgsdfgsd', 0, 0, 'Teste Notificacao', '2015-09-08', '<p>Notificacaoooo</p>\r\n<p>&nbsp;</p>', '2015-09-09', 0, 0);

-- --------------------------------------------------------

--
-- Estrutura da tabela `usuarios`
--

CREATE TABLE IF NOT EXISTS `usuarios` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(100) DEFAULT NULL,
  `apelido` varchar(45) DEFAULT NULL,
  `login` varchar(50) DEFAULT NULL,
  `senha` varchar(100) DEFAULT NULL,
  `cpf` varchar(20) DEFAULT NULL,
  `rg` varchar(20) DEFAULT NULL,
  `sexo` tinyint(1) DEFAULT NULL,
  `nomeMae` varchar(70) DEFAULT NULL,
  `nomePai` varchar(70) DEFAULT NULL,
  `estadoCivil` varchar(25) DEFAULT NULL,
  `foto` varchar(100) DEFAULT 'default.jpg',
  `dataNascimento` datetime DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `telefone` varchar(20) DEFAULT NULL,
  `status` tinyint(1) DEFAULT '1',
  `cep` varchar(10) DEFAULT NULL,
  `endereco` varchar(50) DEFAULT NULL,
  `bairro` varchar(50) DEFAULT NULL,
  `capituloAtual` int(11) DEFAULT '0',
  `professor` tinyint(1) DEFAULT '0',
  PRIMARY KEY (`id`),
  UNIQUE KEY `login_UNIQUE` (`login`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=12 ;

--
-- Extraindo dados da tabela `usuarios`
--

INSERT INTO `usuarios` (`id`, `nome`, `apelido`, `login`, `senha`, `cpf`, `rg`, `sexo`, `nomeMae`, `nomePai`, `estadoCivil`, `foto`, `dataNascimento`, `email`, `telefone`, `status`, `cep`, `endereco`, `bairro`, `capituloAtual`, `professor`) VALUES
(10, 'Administrador do sistema', 'Administrador do sistema', 'admin', '*23AE809DDACAF96AF0FD78ED04B6A265E05AA257', NULL, NULL, NULL, NULL, NULL, NULL, 'default.jpg', NULL, NULL, NULL, 1, NULL, NULL, NULL, 3, 1),
(11, 'Nicolas', 'Nicolas', 'nicolas', '*23AE809DDACAF96AF0FD78ED04B6A265E05AA257', NULL, NULL, NULL, NULL, NULL, NULL, 'default.jpg', NULL, NULL, NULL, 1, NULL, NULL, NULL, 4, 0);

--
-- Restrições para as tabelas dumpadas
--

--
-- Restrições para a tabela `exerciciosconcluidos`
--
ALTER TABLE `exerciciosconcluidos`
  ADD CONSTRAINT `fk_exerc_capitulo` FOREIGN KEY (`idCapitulo`) REFERENCES `capitulos` (`id`) ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_exerc_usuarios` FOREIGN KEY (`idUsuario`) REFERENCES `usuarios` (`id`) ON UPDATE NO ACTION;

--
-- Restrições para a tabela `itens`
--
ALTER TABLE `itens`
  ADD CONSTRAINT `fk_itens_questoes` FOREIGN KEY (`idQuestoes`) REFERENCES `questoes` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Restrições para a tabela `resumo`
--
ALTER TABLE `resumo`
  ADD CONSTRAINT `resumo_ibfk_1` FOREIGN KEY (`idUsuario`) REFERENCES `usuarios` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

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
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=19 ;

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
(16, 2, 11, 10, '2015-09-08 14:26:12'),
(17, 1, 10, 10, '2015-09-11 15:24:52'),
(18, 1, 10, 6, '2015-09-24 15:21:37');

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
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=81 ;

--
-- Extraindo dados da tabela `itens`
--

INSERT INTO `itens` (`id`, `idQuestoes`, `item`, `valor`) VALUES
(1, 1, 'Briefing', 1),
(2, 1, 'Brainstorm', 0),
(3, 1, 'Power Point', 0),
(4, 1, 'Rascunho', 0),
(5, 2, 'Cartas', 0),
(6, 2, 'Fax', 0),
(7, 2, 'Flip Chart', 0),
(8, 2, 'Telefone, e-mail ou por meio de agentes', 1),
(9, 3, 'Google', 0),
(10, 3, 'Diagrama', 0),
(11, 3, 'Dicionário de sinônimos', 1),
(12, 3, 'Quadrinhos', 0),
(13, 4, 'Painéis de inspiração, folhas de ideias, conexões, metáforas', 1),
(14, 4, 'SWOT, PMBOK, PMO, estratégias defensivas', 0),
(15, 4, 'PMO, estratégias defensivas, conexões, SWOT', 0),
(16, 4, 'Estratégias defensivas, SWOT, PMBOK, conexões', 0),
(17, 5, 'A não compreensão do público alvo', 1),
(18, 5, 'O aumento das vendas', 0),
(19, 5, 'A total compreensão do público alvo', 0),
(20, 5, 'Nenhuma das alternativas', 0),
(21, 6, 'Disquetes antigos', 0),
(22, 6, 'Coleções (imagens, objetos organizados em pastas, gavetas e/ou caixas)', 1),
(23, 6, 'A ida incansável a bibliotecas', 0),
(24, 6, 'Nenhuma das alternativas', 0),
(25, 7, 'É a ação de reunir toda a pesquisa, anotações e rabiscos para criar uma série de ideias e caminhos ', 1),
(26, 7, 'É a ação de pesquisar e separar imagens e colocá-las em caixas de papelão', 0),
(27, 7, 'Reunião com a empresa contratante', 0),
(28, 7, 'Nome dado a determinado público', 0),
(29, 8, 'Simples', 0),
(30, 8, 'Emocional', 0),
(31, 8, 'Diagramática', 0),
(32, 8, 'Todas as alternativas estão corretas', 1),
(33, 9, 'Briefing', 0),
(34, 9, 'Brainstorm', 0),
(35, 9, 'Linha visual ou rafe', 1),
(36, 9, 'Aquarela', 0),
(37, 10, 'A rapidez em fazer alterações', 1),
(38, 10, 'Aos novos papeis utilizados pelos ilustradores', 0),
(39, 10, 'A lentidão dos computadores', 0),
(40, 10, 'A falta de criatividade dos artistas', 0),
(41, 11, 'A nomeação é a chave para controlar', 1),
(42, 11, 'A nomeação nos tira do controle', 0),
(43, 11, 'A nomeação é a chave para identificarmos árvores ', 0),
(44, 11, 'Nenhuma das alternativas', 0),
(45, 12, 'Repetição, Contraste, Power Point e Word', 0),
(46, 12, 'Contraste, Repetição, Alinhamento e Proximidade', 1),
(47, 12, 'Repetição, Alinhamento, Contraste e Power Point', 0),
(48, 12, 'Repetição, Power Point e Contraste', 0),
(49, 13, 'Evitar elementos meramente similares em uma página.', 1),
(50, 13, 'Repetir os elementos visuais do design no material.', 0),
(51, 13, 'Criar uma aparência bagunçada na página.', 0),
(52, 13, 'Agrupar itens.', 0),
(53, 14, 'Devemos repetir em todo o material algum elemento visual do design, como cor, forma, textura, fontes etc.', 1),
(54, 14, 'Criar uma aparência bagunçada na página.', 0),
(55, 14, 'Adicionar elementos aleatórios para apenas preencher espaços vazios.', 0),
(56, 14, 'Desorganizar e enfraquecer a página. ', 0),
(57, 15, 'Repetição', 0),
(58, 15, 'Contraste', 0),
(59, 15, 'Proximidade', 0),
(60, 15, 'Alinhamento', 1),
(61, 16, 'Repetição', 0),
(62, 16, 'Contraste', 0),
(63, 16, 'Proximidade', 1),
(64, 16, 'Alinhamento', 0),
(65, 17, 'Ajuda a organizar as informações, reduz a desordem e oferece ao leitor uma estrutura clara.', 1),
(66, 17, 'Confusão no material', 0),
(67, 17, 'Aumenta a desordem das informações', 0),
(68, 17, 'Nenhuma das alternativas', 0),
(69, 18, 'Contraste', 1),
(70, 18, 'Repetição', 0),
(71, 18, 'Alinhamento', 0),
(72, 18, 'Proximidade', 0),
(73, 19, 'Contraste', 0),
(74, 19, 'Repetição', 0),
(75, 19, 'Alinhamento', 1),
(76, 19, 'Proximidade', 0),
(77, 20, 'Contraste', 0),
(78, 20, 'Repetição', 0),
(79, 20, 'Alinhamento', 0),
(80, 20, 'Proximidade', 1);

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
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=21 ;

--
-- Extraindo dados da tabela `questoes`
--

INSERT INTO `questoes` (`id`, `idCapitulo`, `questao`) VALUES
(1, 1, 'É o momento em que as informações básicas sobre o projeto devem ser reunidas. É onde conhecemos e entendemos o projeto, é onde podemos obter todas as informações relevantes necessárias. Qual o nome desse processo?'),
(2, 1, '“...Sempre que possível, é recomendável encontrar-se pessoalmente com o cliente para receber o briefing do projeto, embora nem sempre isso seja realista. ” Hoje em dia quais as maneiras que se tem para receber um briefing de um projeto?\n'),
(3, 1, '“Palavras e jogos de palavras podem oferecer pontos de partida e até soluções para ilustradores que querem criar uma linha visual fundamentada na linguagem...O simples ato de passar algum tempo investigando as palavras e seus significados pode levar a resultados interessantes e desafiadores. ” Qual metodologia o autor está se referindo?'),
(4, 1, 'Assinale a alternativa onde podemos encontrar metodologias para projetos gráficos.'),
(5, 1, 'Qual o maior empecilho ao utilizar metáfora nos projetos?'),
(6, 1, 'Segundo pesquisas qual é o método mais utilizado para busca de inspiração?'),
(7, 1, 'Brainstorming é uma palavra que tem significados distintos para diferentes pessoas. Mas de maneira simplificada ele é?'),
(8, 1, 'Qual das opções se encaixa na classificação de uma imagem?'),
(9, 1, 'Como é conhecido o processo que demonstra de maneira bem abrangente os elementos que aparecerão no trabalho, mesmo que nada tenha sido finalizado ou detalhado ainda?'),
(10, 1, 'Com a utilização da tecnologia nos processos gráficos e de ilustração, está se criando uma nova cultura pelos clientes, qual o motivo dessa concepção?'),
(11, 2, 'Segundo a autora qual a importância que podemos ter ao nomear as coisas?'),
(12, 2, 'Quais os quatro princípios básicos de design?\r\n'),
(13, 2, 'Qual o objetivo do CONTRASTE?'),
(14, 2, 'Para atingirmos o princípio da REPETIÇÃO o que devemos fazer?'),
(15, 2, '“Nada deve ser colocado arbitrariamente em uma página”. Essa afirmação é referente a qual conceito de design?'),
(16, 2, '“Itens relacionados entre si deveriam ser agrupados”. Essa afirmação é referente a qual conceito de design?'),
(17, 2, 'Aplicando o princípio da Proximidade em um material o que podemos ganhar com ele?'),
(18, 2, '“Se os elementos (tipo, cor, tamanho, espessura da linha, forma, espaço etc.) não forem os mesmos, diferencie-os completamente. ” Essa afirmação refere-se a qual princípio? '),
(19, 2, '“...com cada elemento conectado se cria uma aparência limpa, sofisticada e suave. ” Tal afirmação refere-se a qual princípio de design?'),
(20, 2, 'Quando vários itens estão próximos, tornam-se uma unidade visual integrada, e não várias unidades individualizadas. Essa afirmação é referente ao qual princípio?');

-- --------------------------------------------------------

--
-- Estrutura da tabela `resumo`
--

CREATE TABLE IF NOT EXISTS `resumo` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `idUsuario` int(11) NOT NULL,
  `capitulo` int(11) NOT NULL,
  `resumo` longtext NOT NULL,
  `resumoVisualizado` tinyint(1) NOT NULL DEFAULT '0',
  `aprovacao` tinyint(2) NOT NULL DEFAULT '0',
  `assunto` longtext NOT NULL,
  `dataAtual` date NOT NULL,
  `notificacao` longtext,
  `dataNotificacao` date DEFAULT NULL,
  `excluidoNotificacao` tinyint(1) NOT NULL DEFAULT '0',
  `excluidoResumo` tinyint(1) NOT NULL DEFAULT '0',
  `notificacaoVisualizada` tinyint(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`),
  KEY `idUsuario` (`idUsuario`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=4 ;

--
-- Extraindo dados da tabela `resumo`
--

INSERT INTO `resumo` (`id`, `idUsuario`, `capitulo`, `resumo`, `resumoVisualizado`, `aprovacao`, `assunto`, `dataAtual`, `notificacao`, `dataNotificacao`, `excluidoNotificacao`, `excluidoResumo`, `notificacaoVisualizada`) VALUES
(1, 11, 1, '<p>Resumo teste</p>', 0, 1, 'Deu certo', '2015-09-11', '<p>Vc foi aprovado</p>', '2015-09-11', 0, 0, 0),
(2, 11, 1, '<p>Resumo teste</p>', 0, 0, '', '2015-09-11', NULL, NULL, 0, 0, 0),
(3, 11, 2, '<p>tyhsgdfhgdfghdfg</p>', 0, 1, '', '2015-09-11', '<p>ghdsfgjhhjfghjfdghertyrtyertytrreyt</p>', '2015-09-11', 0, 0, 0);

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
  `primeiroLogin` tinyint(1) DEFAULT '0',
  PRIMARY KEY (`id`),
  UNIQUE KEY `login_UNIQUE` (`login`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=44 ;

--
-- Extraindo dados da tabela `usuarios`
--

INSERT INTO `usuarios` (`id`, `nome`, `apelido`, `login`, `senha`, `cpf`, `rg`, `sexo`, `nomeMae`, `nomePai`, `estadoCivil`, `foto`, `dataNascimento`, `email`, `telefone`, `status`, `cep`, `endereco`, `bairro`, `capituloAtual`, `professor`, `primeiroLogin`) VALUES
(10, 'Administrador do sistema - Giselly', 'Administrador do sistema', 'admin', '*23AE809DDACAF96AF0FD78ED04B6A265E05AA257', '06539236352', NULL, NULL, NULL, NULL, NULL, '15214be518448677349e3263dc694285.jpg', NULL, 'gisellyazevedo@hotmail.com', '(85) 98546-1027', 1, NULL, NULL, NULL, 3, 1, 1),
(11, 'Nicolas', 'Nicolas', 'nicolas', '*23AE809DDACAF96AF0FD78ED04B6A265E05AA257', '06539236353', NULL, NULL, NULL, NULL, NULL, '067e13b26dd6f7fb0d0194b094c4abd3.jpg', NULL, NULL, NULL, 1, NULL, NULL, NULL, 0, 0, 1),
(16, 'Giselly Rebouças', NULL, 'gi', '827ccb0eea8a706c4c34a16891f84e7b', NULL, NULL, NULL, NULL, NULL, NULL, 'default.jpg', NULL, 'gisetal@hotmail.xom', NULL, 1, NULL, NULL, NULL, 0, 0, 0),
(18, 'Giselly Rebouças', NULL, 'maria', '202cb962ac59075b964b07152d234b70', NULL, NULL, NULL, NULL, NULL, NULL, 'default.jpg', NULL, 'gisetal@hotmail.xom', NULL, 1, NULL, NULL, NULL, 0, 0, 0),
(19, 'Giselly Rebouças', NULL, 'mdg', 'MTIz', NULL, NULL, NULL, NULL, NULL, NULL, 'default.jpg', NULL, 'fsgldpf@hotmail', NULL, 1, NULL, NULL, NULL, 0, 0, 0),
(21, 'Fulano de tal e tal', NULL, 'fulaninho', '773359240eb9a1d9', NULL, NULL, NULL, NULL, NULL, NULL, 'default.jpg', NULL, 'fulano@email.com', NULL, 1, NULL, NULL, NULL, 0, 0, 1),
(22, 'Giselly Rebouças', NULL, 'giih', '*A4B6157319038724E3560894F7F932C8886EBFCF', NULL, NULL, NULL, NULL, NULL, NULL, 'default.jpg', NULL, 'gi@email.com', NULL, 1, NULL, NULL, NULL, 0, 0, 0),
(24, 'Giselly Rebouças', NULL, 'giihselly', '*A4B6157319038724E3560894F7F932C8886EBFCF', NULL, NULL, NULL, NULL, NULL, NULL, 'default.jpg', NULL, 'gi@email.com', NULL, 1, NULL, NULL, NULL, 0, 0, 1),
(25, 'Jozerlan da Silva', 'Jozerlan Baptista', 'zerlan', '*00A51F3F48415C7D4E8908980D443C29C69B60C9', NULL, NULL, NULL, NULL, NULL, NULL, '16e83d3a9f5176a0cfa2ba34908aa301.jpg', NULL, 'zerlan@email.com', NULL, 1, NULL, NULL, NULL, 0, 0, 1),
(27, 'Maria Giselly Rebouças Azevedo', 'Giselly Rebouças', 'gireboucas', '*6BB4837EB74329105EE4568DDA7DC67ED2CA2AD9', NULL, NULL, NULL, NULL, NULL, NULL, 'default.jpg', NULL, 'gisellyazevedo@hotmail.com', NULL, 1, NULL, NULL, NULL, 0, 0, 1),
(28, 'Maurício', 'Maurício Porfírio', 'mauricio', '*23AE809DDACAF96AF0FD78ED04B6A265E05AA257', '', '', 1, '', '', NULL, '97051f389f8ec4e72a3c1c46a3bda62a.jpg', NULL, 'mauricio@hotmail.com', '', 1, '', '', '', 0, 0, 0),
(29, 'Nicolas Matos', 'Nicolau', 'nicolau', '*23AE809DDACAF96AF0FD78ED04B6A265E05AA257', NULL, NULL, NULL, NULL, NULL, NULL, '0d6b598731d67ad84179a153ae254462.jpg', NULL, 'nicolau@hotmail.com', NULL, 1, NULL, NULL, NULL, 0, 0, 1),
(30, 'Joserlan Naldo da Silva', 'Zerlan Matos Silva', 'jozernaldo', '*23AE809DDACAF96AF0FD78ED04B6A265E05AA257', NULL, NULL, NULL, NULL, NULL, NULL, 'default.jpg', NULL, 'zerlan@jmail.com', NULL, 1, NULL, NULL, NULL, 0, 0, 0),
(32, 'Nicolas matos10', 'Nicolau MAtos10', 'matos10', '*069034EC4F613585D1DAC2E7A497777D572B8EFD', NULL, NULL, NULL, NULL, NULL, NULL, 'default.jpg', NULL, 'matos1@email.com', NULL, 1, NULL, NULL, NULL, 0, 0, 1),
(36, 'Nicolas matos10', 'Nicolau MAtos10', 'matos1010', '*15B4A9F089BEC4C84A24C5148B14A80C14651492', NULL, NULL, NULL, NULL, NULL, NULL, 'default.jpg', NULL, 'matos1@email.com', NULL, 1, NULL, NULL, NULL, 0, 0, 1),
(37, 'Josinaldo da Silva Btista', 'Josinaldo da Silva Batista', 'josinaldo', '*23AE809DDACAF96AF0FD78ED04B6A265E05AA257', NULL, NULL, NULL, NULL, NULL, NULL, 'default.jpg', NULL, 'josinaldo@gmail.com', NULL, 1, NULL, NULL, NULL, 0, 0, 1),
(38, 'Josinaldo da Silva Btista', 'Josinaldo da Silva Batista', 'joserlanaldo', '*23AE809DDACAF96AF0FD78ED04B6A265E05AA257', NULL, NULL, NULL, NULL, NULL, NULL, 'default.jpg', NULL, 'josinaldo@gmail.com', NULL, 1, NULL, NULL, NULL, 0, 0, 1),
(39, 'gerlyel', 'wertyuiop', 'leleo', '*23AE809DDACAF96AF0FD78ED04B6A265E05AA257', NULL, NULL, NULL, NULL, NULL, NULL, 'default.jpg', NULL, 'gerlyel@email', NULL, 1, NULL, NULL, NULL, 0, 0, 0),
(40, 'Maria DB', 'mariadb', 'mariaChata', '*23AE809DDACAF96AF0FD78ED04B6A265E05AA257', NULL, NULL, NULL, NULL, NULL, NULL, 'default.jpg', NULL, 'mariadb@foca.com', NULL, 1, NULL, NULL, NULL, 0, 0, 0),
(41, 'qwegrtyhryu', 'tryerytetrye', 'rtt', '*BC23E64C74AAC6B855ED13C3B329BAEC003E92A2', NULL, NULL, NULL, NULL, NULL, NULL, 'default.jpg', NULL, 'gisellyazevedo@hotmail.com', NULL, 1, NULL, NULL, NULL, 0, 0, 0),
(43, 'qwegrtyhryu', 'tryerytetrye', 'hgddf', '*8FB72276FA10B3C11620BEA882D64670561C7AE9', NULL, NULL, NULL, NULL, NULL, NULL, 'default.jpg', NULL, 'gisellyazevedo@hotmail.com', NULL, 1, NULL, NULL, NULL, 0, 0, 0);

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

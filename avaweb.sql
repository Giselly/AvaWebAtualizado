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
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=20 ;

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
(18, 1, 10, 6, '2015-09-24 15:21:37'),
(19, 1, 58, 8, '2015-10-20 09:28:14');

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
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=163 ;

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
(80, 20, 'Proximidade', 1),
(81, 21, 'Que indica movimento.', 0),
(82, 21, 'Que indica uma ordem de leitura.', 0),
(83, 21, 'Que indica desorganização.', 1),
(84, 21, 'Que indica uma aproximação.', 0),
(85, 22, 'Que há uma organização na página e nas informações.', 0),
(86, 22, 'Que há uma desordem de informações.', 0),
(87, 22, 'Que há uma repetição entre as informações.', 0),
(88, 22, 'Que itens relacionados entre si estão próximos.', 0),
(89, 22, 'Apenas as alternativas a e d estão corretas.', 1),
(90, 23, 'Evitar elementos meramente similares em uma página.', 0),
(91, 23, 'Alinhar os elementos em uma determinada direção.', 0),
(92, 23, 'Criar uma aparência desorganizada e bagunçada.', 0),
(93, 23, 'Organizar as informações, reduzir ou eliminar a desordem e oferecer uma estrutura de leitura mais clara.', 1),
(94, 24, 'Tamanho, peso, posicionamento de texto ou de figuras.', 1),
(95, 24, 'O peso e altura das demais informações devem ser iguais a do título.', 0),
(96, 24, 'Esquecer o princípio de contraste.', 0),
(97, 24, 'Desorganizar e enfraquecer a página. ', 0),
(98, 25, 'Sempre', 0),
(99, 25, 'Logicamente', 1),
(100, 25, 'Nunca', 0),
(101, 25, 'Nenhuma das alternativas', 0),
(102, 26, 'Organizar', 1),
(103, 26, 'Desorganizar', 0),
(104, 26, 'Repetir', 0),
(105, 26, 'Desorganizar', 0),
(106, 27, 'Verdes', 0),
(107, 27, 'Amarelos', 0),
(108, 27, 'Brancos', 1),
(109, 27, 'Limpos', 0),
(110, 28, 'Mais de 3 - 5', 0),
(111, 28, 'Menos de 3 ', 0),
(112, 28, 'Mais de 5', 0),
(113, 28, 'As alternativas A e B estão corretas', 1),
(114, 29, 'Organização', 1),
(115, 29, 'Desordem', 0),
(116, 29, 'Bagunça', 0),
(117, 29, 'Nenhuma das alternativas', 0),
(118, 30, 'Evitar muitos elementos', 0),
(119, 30, 'Não colocar os elementos somente nos cantos e no meio da página. ', 0),
(120, 30, 'Não relacionar elementos que não devam estar agrupados! Se eles não estiverem relacionados, separe-os.', 0),
(121, 30, 'Todas as alternativas estão corretas.', 1),
(122, 31, 'Cada item deve ter uma conexão visual com algo na página. ', 1),
(123, 31, 'Qualquer elemento pode ser colocado arbitrariamente numa página.', 0),
(124, 31, 'Os elementos podem simplesmente ir ocupando espaços vazios na página. ', 0),
(125, 31, 'Nenhuma das alternativas é verdadeira. ', 0),
(126, 32, 'A esquerda.', 0),
(127, 32, 'A direita.', 0),
(128, 32, 'Canto inferior esquerdo.', 0),
(129, 32, 'Centralizado.', 1),
(130, 32, 'Canto superior direito.', 0),
(131, 33, 'Utilizar apenas um alinhamento de texto por página. ', 1),
(132, 33, 'Utilizar sempre os textos centralizados.', 0),
(133, 33, 'Utilizar mais de um alinhamento numa página.', 0),
(134, 33, 'Utilizar sem medo o justificado.', 0),
(135, 34, 'Passa a sensação de tensão e medo.', 0),
(136, 34, 'Cria a sensação de calma e segurança.', 1),
(137, 34, 'Bagunça e desorganização.', 0),
(138, 34, 'A ordem não nos agrada. ', 0),
(139, 35, 'Um eme “M”', 1),
(140, 35, 'Oito espaços', 0),
(141, 35, 'Um “H”', 0),
(142, 35, 'Nenhuma das alternativas', 0),
(143, 36, 'Cores', 0),
(144, 36, 'Pregnancia', 0),
(145, 36, 'Unidade', 1),
(146, 36, 'Formas', 0),
(147, 37, 'Unificar e organizar', 1),
(148, 37, 'Desorganizar', 0),
(149, 37, 'Centralizar', 0),
(150, 37, 'Nenhuma das alternativas', 0),
(151, 38, 'Fraca em qualquer material ', 0),
(152, 38, 'Arcaica', 0),
(153, 38, 'Sofisticada formal, engraçada ou séria dependendo do assunto', 1),
(154, 38, 'Nenhuma das alternativas', 0),
(155, 39, 'Separados', 1),
(156, 39, 'Agrupados', 0),
(157, 39, 'Sobrepostos', 0),
(158, 39, 'Nenhuma das alternativas', 0),
(159, 40, 'Alinhamento centralizado', 1),
(160, 40, 'Alinhamento a esquerda', 0),
(161, 40, 'Alinhamento à direita', 0),
(162, 40, 'Todas as alternativas estão corretas.', 0);

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
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=41 ;

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
(20, 2, 'Quando vários itens estão próximos, tornam-se uma unidade visual integrada, e não várias unidades individualizadas. Essa afirmação é referente ao qual princípio?'),
(21, 3, 'Quando as partes que compõem uma página são espalhadas, essa página assume uma aparência:'),
(22, 3, 'Um dos princípios básicos do design é a proximidade. Quando usada podemos notar que?'),
(23, 3, 'Qual o objetivo da PROXIMIDADE?'),
(24, 3, '“Ao agrupar itens relacionados, torna-se necessário fazer algumas alterações...” Quais alterações abaixo são citadas no livro?'),
(25, 3, 'O conceito da proximidade não significa que tudo precise estar próximo; significa que os elementos devem estar _______________ conectados. Qual item abaixo preenche de forma correta a lacuna?'),
(26, 3, 'Qual o proposito básico da Proximidade?'),
(27, 3, 'Com tudo organizado se cria espaços vazios, porem atrativos, segundo a autora qual é o nome dado para esses espaços?'),
(28, 3, '“Pisque os olhos e conte o número de elementos visuais da página pelo número de paradas dos seus olhos. ” Segundo a autora com qual quantidade se dever ter cuidado para que o material não fique bagunçado?'),
(29, 3, 'Com o simples agrupamento dos elementos em proximidade, automaticamente criamos?'),
(30, 3, 'Segundo a autora o que podemos evitar para que nosso material comece a ser mais correto?'),
(31, 4, 'Segundo o princípio do alinhamento, qual a alternativa correta.'),
(32, 4, 'Qual o alinhamento mais utilizado pelos iniciantes, ao diagramar uma página? '),
(33, 4, 'Ao trabalhar com textos devemos nos atentar ao alinhamento, segundo a autora qual regra devemos sempre ter em mente?'),
(34, 4, '“Nossos olhos gostam de ver tudo em ordem”. Tal afirmação se justifica, por quê?'),
(35, 4, '...Em uma máquina de escrever a endentação comum é de cinco espaços. No caso das letras proporcionais utilizadas no computador, a endentação tipográfica padrão é?'),
(36, 4, 'Para que todos os elementos da página tenham uma estética unificada, conectada e inter-relacionada, é preciso que haja “amarras” visuais entre os elementos separados. Este é um conceito importante no design, qual o nome dele?'),
(37, 4, 'O proposito básico do alinhamento é?'),
(38, 4, 'Normalmente ao se combinar um alinhamento marcante e uma fonte apropriada, criamos uma estética?'),
(39, 4, 'Para atingir o alinhamento numa pagina devemos fazer o uso consciente do posicionamento dos elementos, mesmo que os elementos estejam_________.'),
(40, 4, 'Segundo a autora o que devemos evitar em nossos materiais?');

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
(1, 11, 1, '<p>Resumo teste</p>', 1, 1, 'Deu certo', '2015-09-11', '<p>Vc foi aprovado</p>', '2015-09-11', 0, 0, 1),
(2, 11, 1, '<p>Resumo teste</p>', 0, 2, 'Mara', '2015-09-11', '<p>Amarsfda</p>', '2015-10-16', 0, 0, 0),
(3, 11, 2, '<p>tyhsgdfhgdfghdfg</p>', 0, 1, '', '2015-09-11', '<p>ghdsfgjhhjfghjfdghertyrtyertytrreyt</p>', '2015-09-11', 0, 0, 1);

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
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=64 ;

--
-- Extraindo dados da tabela `usuarios`
--

INSERT INTO `usuarios` (`id`, `nome`, `apelido`, `login`, `senha`, `cpf`, `rg`, `sexo`, `nomeMae`, `nomePai`, `estadoCivil`, `foto`, `dataNascimento`, `email`, `telefone`, `status`, `cep`, `endereco`, `bairro`, `capituloAtual`, `professor`, `primeiroLogin`) VALUES
(10, 'Administradora Giselly', 'Administrador do sistema', 'admin', '*23AE809DDACAF96AF0FD78ED04B6A265E05AA257', '', '', 0, 'mae', 'pai', '', '50c8386e4ef64554332eb33dcd14bec3.jpg', '2015-10-14 00:00:00', 'gisellyazevedo@hotmail.com', '(85) 9.8546-1027', 1, '', '', '', 3, 1, 1),
(11, 'Nicolas Matos', 'Nicolas', 'nicolas', '*23AE809DDACAF96AF0FD78ED04B6A265E05AA257', '', '', NULL, '', '', '', 'default.jpg', NULL, 'nicolau@email.com', '', 1, NULL, NULL, NULL, 0, 0, 1),
(47, 'Maria Giselly Rebouças Azevedo', 'Giselly', 'giselly', '*23AE809DDACAF96AF0FD78ED04B6A265E05AA257', NULL, NULL, NULL, NULL, NULL, NULL, 'default.jpg', NULL, 'gisellyazevedo@hotmail.com', NULL, 1, NULL, NULL, NULL, 0, 0, 1),
(49, 'Giselly Azevedo', 'Giselly', 'giselly123', '*A4B6157319038724E3560894F7F932C8886EBFCF', NULL, NULL, NULL, NULL, NULL, NULL, 'default.jpg', NULL, 'gisellyazevedo@hotmail.com', NULL, 1, NULL, NULL, NULL, 0, 0, 1),
(50, 'Josinaldo Batista', 'josinaldo', 'josi', '*23AE809DDACAF96AF0FD78ED04B6A265E05AA257', NULL, NULL, NULL, NULL, NULL, NULL, 'default.jpg', NULL, 'gisellyazevedo@hotmail.com', NULL, 1, NULL, NULL, NULL, 0, 0, 1),
(51, 'Josinaldo Batista da Silva', 'Josinaldo Batista', 'zerlan', '*23AE809DDACAF96AF0FD78ED04B6A265E05AA257', '123.456.888-88', '156464649879', 0, 'mae', 'pai', NULL, 'default.jpg', '1997-06-09 00:00:00', 'gisellyazevedo@hotmail.com', '(98) 9.8989-8989', 1, '65.656-556', 'hgkgjhgjhgjh', 'iuhiuhjjh', 0, 0, 1),
(52, 'Isadora Freitas', 'Isadora Freitas', 'isadora', '*00A51F3F48415C7D4E8908980D443C29C69B60C9', NULL, NULL, NULL, NULL, NULL, NULL, 'default.jpg', NULL, 'gisellyazevedo@hotmail.com', NULL, 1, NULL, NULL, NULL, 0, 0, 1),
(53, 'Israel Oliveira da Silva', 'Israel', 'israel ', '*23AE809DDACAF96AF0FD78ED04B6A265E05AA257', '', '', NULL, '', '', '', 'default.jpg', NULL, 'giselly.reboucas@iteva.org.br', '', 1, NULL, NULL, NULL, 0, 0, 1),
(55, 'Josinaldo Nicolas', 'JoseNicolas', 'jn', '*23AE809DDACAF96AF0FD78ED04B6A265E05AA257', NULL, NULL, NULL, NULL, NULL, NULL, 'default.jpg', NULL, 'gisellyazevedo@hotmail.com', NULL, 1, NULL, NULL, NULL, 0, 0, 1),
(56, 'Ruan Nicolas Matos', 'Ruan Nicolas', 'ruan', '*23AE809DDACAF96AF0FD78ED04B6A265E05AA257', NULL, NULL, NULL, NULL, NULL, NULL, 'default.jpg', NULL, 'gisellyazevedo@hotmail.com', NULL, 1, NULL, NULL, NULL, 0, 0, 1),
(57, 'Lucas Que Loucura', 'Lucas', 'lucas', '*23AE809DDACAF96AF0FD78ED04B6A265E05AA257', NULL, NULL, NULL, NULL, NULL, NULL, 'default.jpg', NULL, 'gisellyazevedo@hotmail.com', NULL, 1, NULL, NULL, NULL, 0, 0, 1),
(58, 'Lucca Ribeiro', 'Lucca', 'lucca', '*23AE809DDACAF96AF0FD78ED04B6A265E05AA257', NULL, NULL, NULL, NULL, NULL, NULL, 'default.jpg', NULL, 'gisellyazevedo@hotmail.com', NULL, 1, NULL, NULL, NULL, 0, 0, 1),
(59, 'Dimas Silva', 'Dimas Silva', 'dimas', '*23AE809DDACAF96AF0FD78ED04B6A265E05AA257', NULL, NULL, NULL, NULL, NULL, NULL, 'default.jpg', NULL, 'gisellyazevedo@hotmail.com', NULL, 1, NULL, NULL, NULL, 0, 0, 0),
(60, 'Reginaldo Maranhão', 'Reginaldo Maranhão', 'naldo', '*23AE809DDACAF96AF0FD78ED04B6A265E05AA257', NULL, NULL, NULL, NULL, NULL, NULL, 'default.jpg', NULL, 'gisellyazevedo@hotmail.com', NULL, 1, NULL, NULL, NULL, 0, 0, 0),
(62, 'Reginaldo Maranhão', 'Reginaldo Maranhão', 'regi', '*531E182E2F72080AB0740FE2F2D689DBE0146E04', NULL, NULL, NULL, NULL, NULL, NULL, 'default.jpg', NULL, 'gisellyazevedo@hotmail.com', NULL, 1, NULL, NULL, NULL, 0, 0, 0),
(63, 'Gi Rebouças', 'giselly', 'gi', '*846AEC788124A4D732D51692E35E9DE488607F86', NULL, NULL, NULL, NULL, NULL, NULL, 'default.jpg', NULL, 'gisellyazevedo@hotmail.com', NULL, 1, NULL, NULL, NULL, 0, 0, 0);

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

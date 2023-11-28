-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 28/11/2023 às 12:17
-- Versão do servidor: 10.4.28-MariaDB
-- Versão do PHP: 8.0.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `dbvivabem`
--

-- --------------------------------------------------------

--
-- Estrutura para tabela `tblalunos`
--

CREATE TABLE `tblalunos` (
  `idAluno` int(11) NOT NULL,
  `nomeAluno` varchar(50) NOT NULL,
  `dataNascAluno` date NOT NULL,
  `emailAluno` varchar(80) NOT NULL,
  `dataCadAluno` date NOT NULL DEFAULT curdate(),
  `senhaAluno` varchar(20) NOT NULL,
  `statusAluno` varchar(10) NOT NULL,
  `fotoAluno` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `tblalunos`
--

INSERT INTO `tblalunos` (`idAluno`, `nomeAluno`, `dataNascAluno`, `emailAluno`, `dataCadAluno`, `senhaAluno`, `statusAluno`, `fotoAluno`) VALUES
(1, 'JOÃO DA SILVA', '1990-01-15', 'joao@email.com', '2023-11-08', 'senha123', 'ATIVO', 'aluno/joaosilva1.png'),
(2, 'MARIA SANTOS', '1995-05-20', 'maria@email.com', '2023-11-08', 'senha456', 'ATIVO', 'aluno/mariasantos2.png'),
(3, 'CARLOS FERREIRA', '1988-08-10', 'carlos@email.com', '2023-11-08', 'senha789', 'INATIVO', 'aluno/carlosferreira3.png'),
(4, 'ANA OLIVEIRA', '1992-04-30', 'ana@email.com', '2023-11-08', 'senhaabc', 'ATIVO', 'aluno/anaoliveira4.png'),
(5, 'PEDRO RIBEIRO', '1985-11-27', 'pedro@email.com', '2023-11-08', 'senhaxyz', 'ATIVO', 'aluno/pedroribeiro5.png'),
(6, '\".$this->nomeAluno.\"', '0000-00-00', '\".$this->emailAluno.\"', '2023-11-08', '', '\".$this->s', '\".$this->fotoAluno.\"'),
(10, 'Vanica Almeida de Jesus', '1980-05-15', 'vanica@gmail.com', '2023-11-08', '', 'ATIVO', 'aluno/vanica.webp'),
(11, 'Paula Almeida', '1970-05-15', 'paulaalmeida@yahoo.com.br', '2023-11-08', '', 'ATIVO', 'aluno/aluna-com-livros-e-papelaria_1258-48204.avif');

-- --------------------------------------------------------

--
-- Estrutura para tabela `tblbanner`
--

CREATE TABLE `tblbanner` (
  `idBanner` int(11) NOT NULL,
  `nomeBanner` varchar(50) NOT NULL,
  `altBanner` varchar(50) NOT NULL,
  `fotoBanner` varchar(100) NOT NULL,
  `statusBanner` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `tblbanner`
--

INSERT INTO `tblbanner` (`idBanner`, `nomeBanner`, `altBanner`, `fotoBanner`, `statusBanner`) VALUES
(1, 'BANNER 1', 'Imagem Banner 1', 'banner/banner1.png', 'ATIVO'),
(2, 'BANNER 2', 'Imagem Banner 2', 'banner/banner2.png', 'ATIVO'),
(3, 'BANNER 3', 'Imagem Banner 3', 'banner/banner3.png', 'ATIVO');

-- --------------------------------------------------------

--
-- Estrutura para tabela `tblcontato`
--

CREATE TABLE `tblcontato` (
  `idContato` int(11) NOT NULL,
  `nomeContato` varchar(50) NOT NULL,
  `emailContato` varchar(80) NOT NULL,
  `telefoneContato` varchar(14) NOT NULL,
  `mensagemContato` text NOT NULL,
  `dataContato` date NOT NULL DEFAULT curdate(),
  `statusContato` varchar(10) NOT NULL DEFAULT 'ATIVO',
  `horaContato` time NOT NULL DEFAULT curtime()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `tblcontato`
--

INSERT INTO `tblcontato` (`idContato`, `nomeContato`, `emailContato`, `telefoneContato`, `mensagemContato`, `dataContato`, `statusContato`, `horaContato`) VALUES
(2, 'Dimas Aparecido Rabelo de souza', 'imediato.2022@gmail.com.br', '', 'teste mensagem', '2023-10-24', 'ATIVO', '08:56:20'),
(3, 'Matheus', 'imediato.2022@gmail.com.br', '', 'teste email', '2023-10-24', 'ATIVO', '08:56:20'),
(4, 'Sandra', 'sandramarques@gmail.com', '', 'teste ', '2023-10-24', 'ATIVO', '08:56:20'),
(5, 'Dimas Aparecido Rabelo de souza', 'imediato.2022@gmail.com.br', '', 'Dimas', '2023-10-24', 'ATIVO', '08:56:20'),
(6, 'Dimas Aparecido Rabelo de souza', 'imediato.2022@gmail.com.br', '', 'Vai Corinthiansss ', '2023-10-24', 'ATIVO', '08:57:28'),
(7, 'Dimas Aparecido Rabelo de souza', 'imediato.2022@gmail.com.br', '', 'Vitor Bundão', '2023-10-24', 'ATIVO', '09:08:01'),
(8, 'Dimas Aparecido Rabelo de souza', 'dimas_ap_souza@yahoo.com.br', '11972495017', 'Lucas Viado', '2023-10-24', 'ATIVO', '09:09:42'),
(9, 'Dimas Aparecido Rabelo de souza', 'imediato.2022@gmail.com.br', '11972495017', 'Vitor Melhorado', '2023-10-24', 'ATIVO', '09:15:50'),
(10, 'Dimas Aparecido Rabelo de souza', 'van.cfh@gmail.com', '', 'Qual Salgado voce quer?\r\n', '2023-10-25', 'ATIVO', '11:10:39'),
(11, 'Dimas Aparecido Rabelo de souza', 'imediato.2022@gmail.com.br', '11972495017', 'oi', '2023-10-25', 'ATIVO', '11:29:36');

-- --------------------------------------------------------

--
-- Estrutura para tabela `tbldestaque`
--

CREATE TABLE `tbldestaque` (
  `idDestaque` int(11) NOT NULL,
  `nomeDestaque` varchar(50) NOT NULL,
  `altDestaque` varchar(50) NOT NULL,
  `fotoDestaque` varchar(100) NOT NULL,
  `linkDestaque` varchar(150) NOT NULL,
  `statusDestaque` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estrutura para tabela `tblexercicios`
--

CREATE TABLE `tblexercicios` (
  `idExercicio` int(11) NOT NULL,
  `nomeExercicio` varchar(50) NOT NULL,
  `altExercicio` varchar(50) NOT NULL,
  `descricaoExercicio` varchar(30) NOT NULL,
  `grupoMuscularExercicio` varchar(30) NOT NULL,
  `statusExercicio` varchar(10) NOT NULL,
  `fotoExercicio` varchar(100) NOT NULL,
  `linkExercicio` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `tblexercicios`
--

INSERT INTO `tblexercicios` (`idExercicio`, `nomeExercicio`, `altExercicio`, `descricaoExercicio`, `grupoMuscularExercicio`, `statusExercicio`, `fotoExercicio`, `linkExercicio`) VALUES
(1, 'Supino ', 'foto exercicio supino', 'Peitoral', 'Peito', 'ATIVO', 'exercicio/supino.png', 'supino.com'),
(2, 'Agachamento ', 'foto exercicio agachamento', 'Agachamento Pernas', 'Pernas', 'DESATIVADO', 'exercicio/agachamento.png', 'agachamento.com'),
(3, 'RoscaDireta ', 'foto exercicio roscadireta', 'Rosca', 'Biceps', 'ATIVO', 'exercicio/roscadireta.png', 'roscadireta.com'),
(4, 'Prancha Abdominal ', 'foto exercicio pranchaabdominal', 'Abdominal', 'Abdômen', 'INATIVO', 'exercicio/pranchaabdominal.png', 'pranchaabdominal.com'),
(5, 'Corrida', 'foto exercicio Corrida', 'corrida', 'cardio', 'ATIVO', 'exercicio/corrida.png', 'corrida.com'),
(6, '\".$this->nomeExercicio.\"', '\".$this->altExercicio.\"', '\".$this->descricaoExercicio.\"', '\".$this->grupoMuscularExercici', '\".$this->s', '\".$this->fotoExercicio.\"', '\".$this->linkExercicio.\"'),
(11, 'Costas', 'Costas', 'costas', 'Bracos', 'ATIVO', 'exercicio/costas.jpg', ''),
(12, 'biceps', 'biceps', 'biceps', 'Peito', 'ATIVO', 'exercicio/biceps.jpg', ''),
(13, 'Costas', 'Costas', 'costas', 'Bracos', 'ATIVO', 'exercicio/academia.jpg', '');

-- --------------------------------------------------------

--
-- Estrutura para tabela `tblfuncionarios`
--

CREATE TABLE `tblfuncionarios` (
  `idFuncionarios` int(11) NOT NULL,
  `nomeFuncionario` varchar(50) NOT NULL,
  `altFuncionario` varchar(50) NOT NULL,
  `dataNascFuncionario` date NOT NULL,
  `cargoFuncionario` varchar(20) NOT NULL,
  `especialidadeFuncionario` varchar(20) NOT NULL,
  `emailFuncionario` varchar(80) DEFAULT NULL,
  `senhaFuncionario` varchar(20) NOT NULL,
  `nivelFuncionario` varchar(15) NOT NULL,
  `telefoneFuncionario` varchar(14) NOT NULL,
  `dataAdmissaoFuncionario` date NOT NULL,
  `statusFuncionario` varchar(10) NOT NULL,
  `fotoFuncionario` varchar(100) DEFAULT NULL,
  `linkFaceFuncionario` varchar(150) NOT NULL,
  `linkInstaFuncionario` varchar(150) NOT NULL,
  `linklinkedinFuncionario` varchar(150) NOT NULL,
  `linkWhatsFuncionario` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `tblfuncionarios`
--

INSERT INTO `tblfuncionarios` (`idFuncionarios`, `nomeFuncionario`, `altFuncionario`, `dataNascFuncionario`, `cargoFuncionario`, `especialidadeFuncionario`, `emailFuncionario`, `senhaFuncionario`, `nivelFuncionario`, `telefoneFuncionario`, `dataAdmissaoFuncionario`, `statusFuncionario`, `fotoFuncionario`, `linkFaceFuncionario`, `linkInstaFuncionario`, `linklinkedinFuncionario`, `linkWhatsFuncionario`) VALUES
(1, 'Fernanda Souza', 'Foto funcionario instrutor', '1995-10-10', 'Instrutor', 'Musculação', 'fernanda@gmail.com', 'senha123', 'administrador', '11132456789', '2023-10-01', 'Ativo', 'funcionario/fernandasouza1.png', 'facebook.com/eufernandasouza', '@fernadasouza', 'linkedin.com/in/fernandasouzam/', 'wa.me/5511132456789'),
(2, 'Ricardo Santos', 'Foto funcionario Nutricionista', '1990-05-05', 'Nutricionista', 'Nutrição Esportiva', 'ricardo@gmail.com', 'senha456', 'outros', '22987654313', '2023-09-15', 'Ativo', 'funcionario/ricardosantos2.png', 'facebook.com/euricardosantos', '@ricardosantos', 'linkedin.com/in/ricardosantos/', 'wa.me/5522987654313'),
(3, 'Mariana Silva', 'Foto funcionario Recepcionista', '1970-07-07', 'Recepcionista', 'Atendimento', 'mariana@gmail.com', 'senha789', 'administrador', '33555554555', '2023-08-03', 'Ativo', 'funcionario/mariana3.png', 'facebook.com/mariana', '@marina', 'linkedin.com/mariana/', 'wa.me/33555554555'),
(4, 'Paulo Oliveira', 'Foto funcionario instrutor', '1996-04-10', 'instrutor', 'Cardio', 'paulo@gmail.com', 'senhaabc', 'outros', '4498999999', '2023-07-20', 'Ativo', 'funcionario/paulooliveira4.png', 'facebook.com/paulooliveira', '@paulooliveira', 'linkedin.com/paulooliveira/', 'wa.me/5544989999999'),
(5, 'Luisa Mendes', 'Foto funcionario fisioterapeuta Esportiva', '1999-09-09', 'fisioterapeuta', 'fisioterapeuta Espor', 'luisa@gmail.com', 'senhaxyz', 'outros', '55887888888', '2023-06-10', 'Ativo', 'funcionario/luisamendes5.png', 'facebook.com/luisa', '@luisamendes', 'linkedin.com/luisamendes/', 'wa.me/5555887888888'),
(6, '\" . $this->nomeFuncionario . \"', '\" . $this->altFuncionario . \"', '0000-00-00', '\" . $this->cargoFunc', '\" . $this->especiali', '\" . $this->emailFuncionario . \"', '\" . $this->senhaFunc', '\" . $this->nive', '\" . $this->tel', '0000-00-00', '\" . $this-', '\" . $this->fotoFuncionario . \"', '', '', '', '');

-- --------------------------------------------------------

--
-- Estrutura para tabela `tblgaleria`
--

CREATE TABLE `tblgaleria` (
  `idGaleria` int(11) NOT NULL,
  `nomeGaleria` varchar(50) NOT NULL,
  `altGaleria` varchar(50) NOT NULL,
  `fotoGaleria` varchar(100) NOT NULL,
  `statusGaleria` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `tblgaleria`
--

INSERT INTO `tblgaleria` (`idGaleria`, `nomeGaleria`, `altGaleria`, `fotoGaleria`, `statusGaleria`) VALUES
(1, 'GALERIA1', 'Imagem galeria1', 'galeria/galeria1', 'ATIVO'),
(2, 'GALERIA2', 'Imagem galeria2', 'galeria/galeria2', 'ATIVO'),
(3, 'GALERIA3', 'Imagem galeria3', 'galeria/galeria3', 'ATIVO'),
(4, 'GALERIA4', 'Imagem galeria4', 'galeria/galeria4', 'ATIVO'),
(5, 'GALERIA5', 'Imagem galeria5', 'galeria/galeria5', 'ATIVO'),
(6, 'GALERIA6', 'Imagem galeria6', 'galeria/galeria6', 'ATIVO'),
(7, 'GALERIA7', 'Imagem galeria7', 'galeria/galeria7', 'ATIVO');

-- --------------------------------------------------------

--
-- Estrutura para tabela `tblmatriculas`
--

CREATE TABLE `tblmatriculas` (
  `idMatricula` int(11) NOT NULL,
  `dataInicioMatricula` date NOT NULL,
  `dataFimMatricula` date NOT NULL,
  `statusMatricula` varchar(10) NOT NULL,
  `idAluno` int(11) NOT NULL,
  `idPlano` int(11) NOT NULL,
  `valorPago` double(10,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `tblmatriculas`
--

INSERT INTO `tblmatriculas` (`idMatricula`, `dataInicioMatricula`, `dataFimMatricula`, `statusMatricula`, `idAluno`, `idPlano`, `valorPago`) VALUES
(1, '2023-10-01', '2023-10-31', 'Ativo', 1, 1, 10.00),
(2, '2023-09-15', '2023-09-30', 'Ativo', 2, 2, 10.00),
(3, '2023-08-03', '2023-08-31', 'Ativo', 3, 3, 10.00),
(4, '2023-07-20', '2023-07-31', 'Ativo', 4, 4, 10.00),
(5, '2023-06-10', '2023-06-30', 'Ativo', 5, 5, 10.00),
(6, '2023-10-26', '2024-10-25', 'Ativo', 4, 5, 250.00);

-- --------------------------------------------------------

--
-- Estrutura para tabela `tblplanos`
--

CREATE TABLE `tblplanos` (
  `idPlano` int(11) NOT NULL,
  `nomePlano` varchar(20) NOT NULL,
  `descricaoPlano` varchar(150) NOT NULL,
  `valorPlano` double(10,2) NOT NULL,
  `statusPlano` varchar(10) NOT NULL,
  `fotoPlano` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `tblplanos`
--

INSERT INTO `tblplanos` (`idPlano`, `nomePlano`, `descricaoPlano`, `valorPlano`, `statusPlano`, `fotoPlano`) VALUES
(1, 'Plano Básico', 'Plano de Treinamento básico', 50.00, 'Ativo', 'plano/planobasico.jpg'),
(2, 'Plano Premium', 'Plano de Treinamento premium', 100.00, 'Ativo', 'plano/planopremium.jpg'),
(3, 'Plano Gold', 'Plano de Treinamento gold', 150.00, 'Ativo', 'plano/planogold.jpg'),
(4, 'Plano Vip', 'Plano de Treinamento VIP', 200.00, 'Ativo', 'plano/planovip.jpg'),
(5, 'Plano Personalizado', 'Plano de Treinamento personalizado', 250.00, 'Ativo', 'plano/planopersonalizado.jpg');

-- --------------------------------------------------------

--
-- Estrutura para tabela `tblregistrotreinos`
--

CREATE TABLE `tblregistrotreinos` (
  `idRegistroTreino` int(11) NOT NULL,
  `cargaRegistroTreino` double(10,3) NOT NULL,
  `serieRegistroTreino` int(11) NOT NULL,
  `repeticaoRegistroTreino` int(11) NOT NULL,
  `statusRegistroTreino` varchar(10) NOT NULL,
  `idTreino` int(11) NOT NULL,
  `idExercicio` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `tblregistrotreinos`
--

INSERT INTO `tblregistrotreinos` (`idRegistroTreino`, `cargaRegistroTreino`, `serieRegistroTreino`, `repeticaoRegistroTreino`, `statusRegistroTreino`, `idTreino`, `idExercicio`) VALUES
(1, 50.000, 3, 12, 'Ativo', 1, 1),
(2, 80.000, 4, 10, 'Ativo', 1, 2),
(3, 20.000, 3, 15, 'Ativo', 2, 1),
(4, 100.000, 4, 12, 'Ativo', 2, 2),
(5, 30.000, 3, 12, 'Ativo', 3, 3);

-- --------------------------------------------------------

--
-- Estrutura para tabela `tblsobre`
--

CREATE TABLE `tblsobre` (
  `idsobre` int(11) NOT NULL,
  `descricaoSobre` text NOT NULL,
  `altsobre` varchar(50) NOT NULL,
  `fotoSobre` varchar(100) NOT NULL,
  `linkSobre` varchar(150) NOT NULL,
  `statusSobre` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estrutura para tabela `tbltelefonealunos`
--

CREATE TABLE `tbltelefonealunos` (
  `idTelefoneAluno` int(11) NOT NULL,
  `numeroTelefone` varchar(14) NOT NULL,
  `operadorTelefone` varchar(10) NOT NULL,
  `tipoTelefone` varchar(15) NOT NULL,
  `idAluno` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `tbltelefonealunos`
--

INSERT INTO `tbltelefonealunos` (`idTelefoneAluno`, `numeroTelefone`, `operadorTelefone`, `tipoTelefone`, `idAluno`) VALUES
(1, '(11)1234-56789', 'VIVO', 'CELULAR', 1),
(2, '(22)9876-54321', 'CLARO', 'RESIDENCIAL', 2),
(3, '(33)5555-55555', 'TIM', 'CELULAR', 3),
(4, '(44)9999-99999', 'OI', 'CELULAR', 4),
(5, '(55)8888-88888', 'VIVO', 'COMERCIAL', 5);

-- --------------------------------------------------------

--
-- Estrutura para tabela `tbltreinos`
--

CREATE TABLE `tbltreinos` (
  `idTreino` int(11) NOT NULL,
  `dataInicioTreino` date NOT NULL,
  `dataFimTreino` date NOT NULL,
  `statusTreino` varchar(10) NOT NULL,
  `idAluno` int(11) NOT NULL,
  `idFuncionario` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `tbltreinos`
--

INSERT INTO `tbltreinos` (`idTreino`, `dataInicioTreino`, `dataFimTreino`, `statusTreino`, `idAluno`, `idFuncionario`) VALUES
(1, '2023-10-01', '2023-10-31', 'ATIVO', 1, 1),
(2, '2023-09-15', '2023-09-30', 'INATIVO', 2, 1),
(3, '2023-08-03', '2023-08-31', 'ATIVO', 3, 2),
(4, '2023-07-20', '2023-07-31', 'ATIVO', 4, 3),
(5, '2023-06-10', '2023-06-30', 'ATIVO', 5, 4);

-- --------------------------------------------------------

--
-- Estrutura stand-in para view `vnumalunosativos`
-- (Veja abaixo para a visão atual)
--
CREATE TABLE `vnumalunosativos` (
`qtdeAlunos` bigint(21)
);

-- --------------------------------------------------------

--
-- Estrutura stand-in para view `vnumfuncespecativo`
-- (Veja abaixo para a visão atual)
--
CREATE TABLE `vnumfuncespecativo` (
`especialidadeFuncionario` varchar(20)
,`qtdeFuncionario` bigint(21)
);

-- --------------------------------------------------------

--
-- Estrutura stand-in para view `vnumgrupoexercativo`
-- (Veja abaixo para a visão atual)
--
CREATE TABLE `vnumgrupoexercativo` (
`grupoMuscularExercicio` varchar(30)
,`COUNT(idExercicio)` bigint(21)
);

-- --------------------------------------------------------

--
-- Estrutura stand-in para view `vnummatriculaativa`
-- (Veja abaixo para a visão atual)
--
CREATE TABLE `vnummatriculaativa` (
`COUNT(idMatricula)` bigint(21)
);

-- --------------------------------------------------------

--
-- Estrutura stand-in para view `vnumplanoativo`
-- (Veja abaixo para a visão atual)
--
CREATE TABLE `vnumplanoativo` (
`COUNT(idPlano)` bigint(21)
);

-- --------------------------------------------------------

--
-- Estrutura stand-in para view `vnumtreinoativo`
-- (Veja abaixo para a visão atual)
--
CREATE TABLE `vnumtreinoativo` (
`COUNT(idTreino)` bigint(21)
);

-- --------------------------------------------------------

--
-- Estrutura stand-in para view `vsomavalores`
-- (Veja abaixo para a visão atual)
--
CREATE TABLE `vsomavalores` (
`somaMatriculas` double(19,2)
);

-- --------------------------------------------------------

--
-- Estrutura stand-in para view `vsomavaloresporplanos`
-- (Veja abaixo para a visão atual)
--
CREATE TABLE `vsomavaloresporplanos` (
`nomePlano` varchar(20)
,`somaMatriculas` double(19,2)
);

-- --------------------------------------------------------

--
-- Estrutura para view `vnumalunosativos`
--
DROP TABLE IF EXISTS `vnumalunosativos`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `vnumalunosativos`  AS SELECT count(`tblalunos`.`idAluno`) AS `qtdeAlunos` FROM `tblalunos` WHERE `tblalunos`.`statusAluno` = 'ATIVO' ;

-- --------------------------------------------------------

--
-- Estrutura para view `vnumfuncespecativo`
--
DROP TABLE IF EXISTS `vnumfuncespecativo`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `vnumfuncespecativo`  AS SELECT `tblfuncionarios`.`especialidadeFuncionario` AS `especialidadeFuncionario`, count(`tblfuncionarios`.`idFuncionarios`) AS `qtdeFuncionario` FROM `tblfuncionarios` WHERE `tblfuncionarios`.`cargoFuncionario` <> 'RECEPCIONISTA' AND `tblfuncionarios`.`statusFuncionario` = 'ATIVO' GROUP BY `tblfuncionarios`.`especialidadeFuncionario` ;

-- --------------------------------------------------------

--
-- Estrutura para view `vnumgrupoexercativo`
--
DROP TABLE IF EXISTS `vnumgrupoexercativo`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `vnumgrupoexercativo`  AS SELECT `tblexercicios`.`grupoMuscularExercicio` AS `grupoMuscularExercicio`, count(`tblexercicios`.`idExercicio`) AS `COUNT(idExercicio)` FROM `tblexercicios` WHERE `tblexercicios`.`statusExercicio` = 'ATIVO' GROUP BY `tblexercicios`.`grupoMuscularExercicio` ;

-- --------------------------------------------------------

--
-- Estrutura para view `vnummatriculaativa`
--
DROP TABLE IF EXISTS `vnummatriculaativa`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `vnummatriculaativa`  AS SELECT count(`tblmatriculas`.`idMatricula`) AS `COUNT(idMatricula)` FROM `tblmatriculas` WHERE `tblmatriculas`.`statusMatricula` = 'ATIVO' ;

-- --------------------------------------------------------

--
-- Estrutura para view `vnumplanoativo`
--
DROP TABLE IF EXISTS `vnumplanoativo`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `vnumplanoativo`  AS SELECT count(`tblplanos`.`idPlano`) AS `COUNT(idPlano)` FROM `tblplanos` WHERE `tblplanos`.`statusPlano` = 'ATIVO' ;

-- --------------------------------------------------------

--
-- Estrutura para view `vnumtreinoativo`
--
DROP TABLE IF EXISTS `vnumtreinoativo`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `vnumtreinoativo`  AS SELECT count(`tbltreinos`.`idTreino`) AS `COUNT(idTreino)` FROM `tbltreinos` WHERE `tbltreinos`.`statusTreino` = 'ATIVO' ;

-- --------------------------------------------------------

--
-- Estrutura para view `vsomavalores`
--
DROP TABLE IF EXISTS `vsomavalores`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `vsomavalores`  AS SELECT sum(`tblplanos`.`valorPlano`) AS `somaMatriculas` FROM (`tblplanos` join `tblmatriculas` on(`tblplanos`.`idPlano` = `tblmatriculas`.`idPlano`)) ;

-- --------------------------------------------------------

--
-- Estrutura para view `vsomavaloresporplanos`
--
DROP TABLE IF EXISTS `vsomavaloresporplanos`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `vsomavaloresporplanos`  AS SELECT `tblplanos`.`nomePlano` AS `nomePlano`, sum(`tblplanos`.`valorPlano`) AS `somaMatriculas` FROM (`tblplanos` join `tblmatriculas` on(`tblplanos`.`idPlano` = `tblmatriculas`.`idPlano`)) GROUP BY `tblplanos`.`nomePlano` ;

--
-- Índices para tabelas despejadas
--

--
-- Índices de tabela `tblalunos`
--
ALTER TABLE `tblalunos`
  ADD PRIMARY KEY (`idAluno`);

--
-- Índices de tabela `tblbanner`
--
ALTER TABLE `tblbanner`
  ADD PRIMARY KEY (`idBanner`);

--
-- Índices de tabela `tblcontato`
--
ALTER TABLE `tblcontato`
  ADD PRIMARY KEY (`idContato`);

--
-- Índices de tabela `tbldestaque`
--
ALTER TABLE `tbldestaque`
  ADD PRIMARY KEY (`idDestaque`);

--
-- Índices de tabela `tblexercicios`
--
ALTER TABLE `tblexercicios`
  ADD PRIMARY KEY (`idExercicio`);

--
-- Índices de tabela `tblfuncionarios`
--
ALTER TABLE `tblfuncionarios`
  ADD PRIMARY KEY (`idFuncionarios`);

--
-- Índices de tabela `tblgaleria`
--
ALTER TABLE `tblgaleria`
  ADD PRIMARY KEY (`idGaleria`);

--
-- Índices de tabela `tblmatriculas`
--
ALTER TABLE `tblmatriculas`
  ADD PRIMARY KEY (`idMatricula`),
  ADD KEY `matriculaAluno` (`idAluno`),
  ADD KEY `matriculaPlano` (`idPlano`);

--
-- Índices de tabela `tblplanos`
--
ALTER TABLE `tblplanos`
  ADD PRIMARY KEY (`idPlano`);

--
-- Índices de tabela `tblregistrotreinos`
--
ALTER TABLE `tblregistrotreinos`
  ADD PRIMARY KEY (`idRegistroTreino`),
  ADD KEY `registroTreino` (`idTreino`),
  ADD KEY `resgistroExercicio` (`idExercicio`);

--
-- Índices de tabela `tblsobre`
--
ALTER TABLE `tblsobre`
  ADD PRIMARY KEY (`idsobre`);

--
-- Índices de tabela `tbltelefonealunos`
--
ALTER TABLE `tbltelefonealunos`
  ADD PRIMARY KEY (`idTelefoneAluno`),
  ADD KEY `telefoneAluno` (`idAluno`);

--
-- Índices de tabela `tbltreinos`
--
ALTER TABLE `tbltreinos`
  ADD PRIMARY KEY (`idTreino`),
  ADD KEY `treinoAluno` (`idAluno`),
  ADD KEY `treinoFuncionario` (`idFuncionario`);

--
-- AUTO_INCREMENT para tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `tblalunos`
--
ALTER TABLE `tblalunos`
  MODIFY `idAluno` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT de tabela `tblbanner`
--
ALTER TABLE `tblbanner`
  MODIFY `idBanner` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de tabela `tblcontato`
--
ALTER TABLE `tblcontato`
  MODIFY `idContato` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT de tabela `tbldestaque`
--
ALTER TABLE `tbldestaque`
  MODIFY `idDestaque` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `tblexercicios`
--
ALTER TABLE `tblexercicios`
  MODIFY `idExercicio` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT de tabela `tblfuncionarios`
--
ALTER TABLE `tblfuncionarios`
  MODIFY `idFuncionarios` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT de tabela `tblgaleria`
--
ALTER TABLE `tblgaleria`
  MODIFY `idGaleria` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT de tabela `tblmatriculas`
--
ALTER TABLE `tblmatriculas`
  MODIFY `idMatricula` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT de tabela `tblplanos`
--
ALTER TABLE `tblplanos`
  MODIFY `idPlano` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT de tabela `tblregistrotreinos`
--
ALTER TABLE `tblregistrotreinos`
  MODIFY `idRegistroTreino` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de tabela `tblsobre`
--
ALTER TABLE `tblsobre`
  MODIFY `idsobre` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `tbltelefonealunos`
--
ALTER TABLE `tbltelefonealunos`
  MODIFY `idTelefoneAluno` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de tabela `tbltreinos`
--
ALTER TABLE `tbltreinos`
  MODIFY `idTreino` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- Restrições para tabelas despejadas
--

--
-- Restrições para tabelas `tblmatriculas`
--
ALTER TABLE `tblmatriculas`
  ADD CONSTRAINT `matriculaAluno` FOREIGN KEY (`idAluno`) REFERENCES `tblalunos` (`idAluno`),
  ADD CONSTRAINT `matriculaPlano` FOREIGN KEY (`idPlano`) REFERENCES `tblplanos` (`idPlano`);

--
-- Restrições para tabelas `tblregistrotreinos`
--
ALTER TABLE `tblregistrotreinos`
  ADD CONSTRAINT `registroTreino` FOREIGN KEY (`idTreino`) REFERENCES `tbltreinos` (`idTreino`),
  ADD CONSTRAINT `resgistroExercicio` FOREIGN KEY (`idExercicio`) REFERENCES `tblexercicios` (`idExercicio`);

--
-- Restrições para tabelas `tbltelefonealunos`
--
ALTER TABLE `tbltelefonealunos`
  ADD CONSTRAINT `telefoneAluno` FOREIGN KEY (`idAluno`) REFERENCES `tblalunos` (`idAluno`);

--
-- Restrições para tabelas `tbltreinos`
--
ALTER TABLE `tbltreinos`
  ADD CONSTRAINT `treinoAluno` FOREIGN KEY (`idAluno`) REFERENCES `tblalunos` (`idAluno`),
  ADD CONSTRAINT `treinoFuncionario` FOREIGN KEY (`idFuncionario`) REFERENCES `tblfuncionarios` (`idFuncionarios`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

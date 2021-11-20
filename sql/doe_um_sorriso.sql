-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Tempo de geração: 20-Nov-2021 às 21:41
-- Versão do servidor: 5.7.31
-- versão do PHP: 7.1.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `doe_um_sorriso`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `admin`
--

DROP TABLE IF EXISTS `admin`;
CREATE TABLE IF NOT EXISTS `admin` (
  `email_admin` varchar(50) NOT NULL,
  `fk_user` varchar(30) DEFAULT NULL,
  PRIMARY KEY (`email_admin`),
  KEY `admin_ibfk_1` (`fk_user`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estrutura da tabela `cadastra`
--

DROP TABLE IF EXISTS `cadastra`;
CREATE TABLE IF NOT EXISTS `cadastra` (
  `fk_rg_crianca` varchar(12) DEFAULT NULL,
  `fk_id_cadastro` int(11) DEFAULT NULL,
  KEY `fk_rg_crianca` (`fk_rg_crianca`),
  KEY `fk_id_cadastro` (`fk_id_cadastro`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `cadastra`
--

INSERT INTO `cadastra` (`fk_rg_crianca`, `fk_id_cadastro`) VALUES
('12.568.963-5', 98),
('12.568.963-5', 98);

-- --------------------------------------------------------

--
-- Estrutura da tabela `colaborador`
--

DROP TABLE IF EXISTS `colaborador`;
CREATE TABLE IF NOT EXISTS `colaborador` (
  `id_colaborador` int(11) NOT NULL AUTO_INCREMENT,
  `funcao` enum('Gerente','Analista de Cadastro','Recebedor','Entregador') DEFAULT NULL,
  `fk_id_cadastro` int(11) DEFAULT NULL,
  PRIMARY KEY (`id_colaborador`),
  KEY `fk_id_cadastro` (`fk_id_cadastro`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `colaborador`
--

INSERT INTO `colaborador` (`id_colaborador`, `funcao`, `fk_id_cadastro`) VALUES
(1, 'Gerente', 99);

-- --------------------------------------------------------

--
-- Estrutura da tabela `dados_crianca`
--

DROP TABLE IF EXISTS `dados_crianca`;
CREATE TABLE IF NOT EXISTS `dados_crianca` (
  `rg_crianca` varchar(12) NOT NULL,
  `nome_crianca` varchar(80) DEFAULT NULL,
  `sexo` enum('M','F') DEFAULT NULL,
  `nasc_crianca` date DEFAULT NULL,
  `tamanho_camiseta` enum('RN','1','2','4','6','8','10','12','14','16','P','M','G') DEFAULT NULL,
  `tamanho_sapato` enum('14','15','16','17.5','18.5','19','20','20.5','21','21.5','22','22.5','23','23.5','24','24.5','25','25.5','26','26.5','27','28','29','30','31','32','33','34','35','36','37','38','39','40','41','42','43','44','45') DEFAULT NULL,
  `tamanho_calca` enum('1','2','4','6','8','10','12','14','16','P','M','G') DEFAULT NULL,
  `brinquedo` varchar(140) DEFAULT NULL,
  `term_arq` varchar(150) DEFAULT NULL,
  `observacao` varchar(140) DEFAULT NULL,
  PRIMARY KEY (`rg_crianca`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `dados_crianca`
--

INSERT INTO `dados_crianca` (`rg_crianca`, `nome_crianca`, `sexo`, `nasc_crianca`, `tamanho_camiseta`, `tamanho_sapato`, `tamanho_calca`, `brinquedo`, `term_arq`, `observacao`) VALUES
('12.568.963-5', 'Maria Ferreira da Silva', 'F', '2019-02-15', 'M', '14', 'M', 'Boneca', '410328c2034e7abf8a8ee8f60355c426.jpeg', 'Boneca Barbie');

-- --------------------------------------------------------

--
-- Estrutura da tabela `dados_pf`
--

DROP TABLE IF EXISTS `dados_pf`;
CREATE TABLE IF NOT EXISTS `dados_pf` (
  `cpf` varchar(15) NOT NULL,
  `rg` varchar(12) DEFAULT NULL,
  `fk_id_cadastro` int(11) DEFAULT NULL,
  PRIMARY KEY (`cpf`),
  KEY `fk_id_cadastro` (`fk_id_cadastro`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `dados_pf`
--

INSERT INTO `dados_pf` (`cpf`, `rg`, `fk_id_cadastro`) VALUES
('123.456.789-69', '0000000000', 103),
('154.258.963-05', '0000000000', 101),
('258.369.741-98', '0000000000', 99);

-- --------------------------------------------------------

--
-- Estrutura da tabela `dados_pj`
--

DROP TABLE IF EXISTS `dados_pj`;
CREATE TABLE IF NOT EXISTS `dados_pj` (
  `cnpj` varchar(18) NOT NULL,
  `nome_fantasia` varchar(80) DEFAULT NULL,
  `site` varchar(50) DEFAULT NULL,
  `tipo_pj` varchar(50) DEFAULT NULL,
  `inf_recebimento` time DEFAULT NULL,
  `fk_id_cadastro` int(11) DEFAULT NULL,
  PRIMARY KEY (`cnpj`),
  KEY `fk_id_cadastro` (`fk_id_cadastro`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `dados_pj`
--

INSERT INTO `dados_pj` (`cnpj`, `nome_fantasia`, `site`, `tipo_pj`, `inf_recebimento`, `fk_id_cadastro`) VALUES
('97.352.645/0001-25', 'Casa da CrianÃ§a Peniel', 'www.casadacriancapeniel.org', 'OUTROS', '20:43:11', 98);

-- --------------------------------------------------------

--
-- Estrutura da tabela `dados_responsavel`
--

DROP TABLE IF EXISTS `dados_responsavel`;
CREATE TABLE IF NOT EXISTS `dados_responsavel` (
  `id_familia` int(11) NOT NULL AUTO_INCREMENT,
  `cpf_resp` varchar(15) DEFAULT NULL,
  `nome_resp` varchar(80) DEFAULT NULL,
  `fk_id_cadastro` int(11) DEFAULT NULL,
  PRIMARY KEY (`id_familia`),
  KEY `fk_id_cadastro` (`fk_id_cadastro`)
) ENGINE=InnoDB AUTO_INCREMENT=55 DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `dados_responsavel`
--

INSERT INTO `dados_responsavel` (`id_familia`, `cpf_resp`, `nome_resp`, `fk_id_cadastro`) VALUES
(54, '258.963.147-98', 'jeferson Ferreira da Silva', 103);

-- --------------------------------------------------------

--
-- Estrutura da tabela `doacao`
--

DROP TABLE IF EXISTS `doacao`;
CREATE TABLE IF NOT EXISTS `doacao` (
  `id_doacao` int(11) NOT NULL AUTO_INCREMENT,
  `status_doacao` varchar(10) DEFAULT NULL,
  `data_hora_entrega` datetime DEFAULT NULL,
  `data_hora_selecao` datetime DEFAULT NULL,
  `data_hora_recebimento` datetime DEFAULT NULL,
  `tipo_presente` varchar(45) DEFAULT NULL,
  `fk_rg_crianca` varchar(12) DEFAULT NULL,
  `doc_confirmacao` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id_doacao`),
  KEY `fk_rg_crianca` (`fk_rg_crianca`)
) ENGINE=InnoDB AUTO_INCREMENT=41 DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estrutura da tabela `doa_exibe`
--

DROP TABLE IF EXISTS `doa_exibe`;
CREATE TABLE IF NOT EXISTS `doa_exibe` (
  `fk_id_doacao` int(11) DEFAULT NULL,
  `fk_id_mensagem` int(11) DEFAULT NULL,
  KEY `fk_id_doacao` (`fk_id_doacao`),
  KEY `fk_id_mensagem` (`fk_id_mensagem`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estrutura da tabela `fale_conosco`
--

DROP TABLE IF EXISTS `fale_conosco`;
CREATE TABLE IF NOT EXISTS `fale_conosco` (
  `id_fale_conosco` int(10) NOT NULL,
  `e_mail_fale_conosco` varchar(50) NOT NULL,
  `nome` varchar(30) DEFAULT NULL,
  `telefone` varchar(15) DEFAULT NULL,
  `mensagem` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`id_fale_conosco`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estrutura da tabela `gerencia`
--

DROP TABLE IF EXISTS `gerencia`;
CREATE TABLE IF NOT EXISTS `gerencia` (
  `fk_id_doacao` int(11) DEFAULT NULL,
  `fk_id_cadastro` int(11) DEFAULT NULL,
  KEY `fk_id_doacao` (`fk_id_doacao`),
  KEY `fk_id_cadastro` (`fk_id_cadastro`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estrutura da tabela `mensagem_sistema`
--

DROP TABLE IF EXISTS `mensagem_sistema`;
CREATE TABLE IF NOT EXISTS `mensagem_sistema` (
  `id_mensagem` int(11) NOT NULL AUTO_INCREMENT,
  `status_sistema` varchar(10) DEFAULT NULL,
  `mensagem` varchar(20) DEFAULT NULL,
  PRIMARY KEY (`id_mensagem`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estrutura da tabela `newsletter`
--

DROP TABLE IF EXISTS `newsletter`;
CREATE TABLE IF NOT EXISTS `newsletter` (
  `e_mail_newsletter` varchar(50) NOT NULL,
  PRIMARY KEY (`e_mail_newsletter`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estrutura da tabela `perfil`
--

DROP TABLE IF EXISTS `perfil`;
CREATE TABLE IF NOT EXISTS `perfil` (
  `id_cadastro` int(11) NOT NULL AUTO_INCREMENT,
  `tipo_cadastro` varchar(45) DEFAULT NULL,
  `nivel_acesso` int(1) DEFAULT NULL,
  `status_cadastro` varchar(10) DEFAULT NULL,
  `nome` varchar(80) DEFAULT NULL,
  `telefone` varchar(15) DEFAULT NULL,
  `rede_social` varchar(100) DEFAULT NULL,
  `e_mail` varchar(50) DEFAULT NULL,
  `numendereco` varchar(5) DEFAULT NULL,
  `logradouro` varchar(30) DEFAULT NULL,
  `cidade` varchar(30) DEFAULT NULL,
  `estado` enum('AC','AL','AM','BA','CE','DF','ES','GO','MA','MT','MS','MG','PA','PB','PR','PE','PI','RR','RO','RJ','RN','RS','SC','SP','SE','TO') DEFAULT NULL,
  `cep` varchar(10) DEFAULT NULL,
  `bairro` varchar(30) DEFAULT NULL,
  `complemento` varchar(30) DEFAULT NULL,
  `fk_user` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id_cadastro`),
  KEY `perfil_ibfk_1` (`fk_user`)
) ENGINE=InnoDB AUTO_INCREMENT=104 DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `perfil`
--

INSERT INTO `perfil` (`id_cadastro`, `tipo_cadastro`, `nivel_acesso`, `status_cadastro`, `nome`, `telefone`, `rede_social`, `e_mail`, `numendereco`, `logradouro`, `cidade`, `estado`, `cep`, `bairro`, `complemento`, `fk_user`) VALUES
(98, 'organizacao', 0, 'EA', 'Abrigo Casa da CrianÃ§a Peniel', '(11) 3341-0572', 'facebook.com/Peniel', 'peniel@peniel.com.br', '1684', 'Rua Caiova', 'CuiabÃ¡', 'MT', '79003-150', 'SÃ£o Lourenso', 'Lado B', 'peniel@peniel.com.br'),
(99, 'colaborador', 0, 'OK', 'Fernando Pessoa Da SIlva', '(12) 4545-1452', '', 'fernando@terra.com.br', '84', '84', 'CuiabÃ¡', 'MT', '79000-000', 'Jardim', 'Casa 2', 'fernando@terra.com.br'),
(101, 'doador_pf', 0, 'OK', 'JosÃ© Ribeiro Da Silva', '(12) 1478-1252', 'facebook.com/JosÃ©', 'jose@gmail.com', '04', 'Rua Fernandes', 'CuiabÃ¡', 'MT', '79250-000', 'Serraria', 'Casa 1', 'jose@gmail.com'),
(103, 'familia', 0, 'OK', 'Fabiana da Silva Souza', '(12) 8998-12121', '', 'fabiana@hotmail.com', '112', 'Av. Fernando Correa', 'CuiabÃ¡', 'MT', '74004-002', 'Centro', 'Casa 2', 'familia@familia.com');

-- --------------------------------------------------------

--
-- Estrutura da tabela `perfil_exibe`
--

DROP TABLE IF EXISTS `perfil_exibe`;
CREATE TABLE IF NOT EXISTS `perfil_exibe` (
  `fk_id_mensagem` int(11) DEFAULT NULL,
  `fk_id_cadastro` int(11) DEFAULT NULL,
  KEY `fk_id_mensagem` (`fk_id_mensagem`),
  KEY `fk_id_cadastro` (`fk_id_cadastro`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estrutura da tabela `possui_colab`
--

DROP TABLE IF EXISTS `possui_colab`;
CREATE TABLE IF NOT EXISTS `possui_colab` (
  `fk_cpf` varchar(15) DEFAULT NULL,
  `fk_cnpj` varchar(18) DEFAULT NULL,
  `fk_id_colaborador` int(11) DEFAULT NULL,
  KEY `fk_cpf` (`fk_cpf`),
  KEY `fk_cnpj` (`fk_cnpj`),
  KEY `fk_id_colaborador` (`fk_id_colaborador`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `possui_colab`
--

INSERT INTO `possui_colab` (`fk_cpf`, `fk_cnpj`, `fk_id_colaborador`) VALUES
('258.369.741-98', '97.352.645/0001-25', 99);

-- --------------------------------------------------------

--
-- Estrutura da tabela `possui_cri`
--

DROP TABLE IF EXISTS `possui_cri`;
CREATE TABLE IF NOT EXISTS `possui_cri` (
  `fk_rg_crianca` varchar(12) DEFAULT NULL,
  `fk_id_familia` int(11) DEFAULT NULL,
  KEY `fk_rg_crianca` (`fk_rg_crianca`),
  KEY `fk_id_familia` (`fk_id_familia`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `possui_cri`
--

INSERT INTO `possui_cri` (`fk_rg_crianca`, `fk_id_familia`) VALUES
('12.568.963-5', 54);

-- --------------------------------------------------------

--
-- Estrutura da tabela `realiza`
--

DROP TABLE IF EXISTS `realiza`;
CREATE TABLE IF NOT EXISTS `realiza` (
  `fk_id_doacao` int(11) DEFAULT NULL,
  `fk_id_cadastro` int(11) DEFAULT NULL,
  KEY `fk_id_doacao` (`fk_id_doacao`),
  KEY `fk_id_cadastro` (`fk_id_cadastro`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estrutura da tabela `usuario`
--

DROP TABLE IF EXISTS `usuario`;
CREATE TABLE IF NOT EXISTS `usuario` (
  `user` varchar(50) NOT NULL,
  `senha` varchar(10) DEFAULT NULL,
  PRIMARY KEY (`user`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `usuario`
--

INSERT INTO `usuario` (`user`, `senha`) VALUES
('familia@familia.com', '%fjfjg'),
('fernando@terra.com.br', '123456'),
('jose@gmail.com', '123456'),
('peniel@peniel.com.br', '123456');

--
-- Restrições para despejos de tabelas
--

--
-- Limitadores para a tabela `colaborador`
--
ALTER TABLE `colaborador`
  ADD CONSTRAINT `colaborador_ibfk_1` FOREIGN KEY (`fk_id_cadastro`) REFERENCES `perfil` (`id_cadastro`);

--
-- Limitadores para a tabela `dados_pf`
--
ALTER TABLE `dados_pf`
  ADD CONSTRAINT `dados_pf_ibfk_1` FOREIGN KEY (`fk_id_cadastro`) REFERENCES `perfil` (`id_cadastro`);

--
-- Limitadores para a tabela `dados_pj`
--
ALTER TABLE `dados_pj`
  ADD CONSTRAINT `dados_pj_ibfk_1` FOREIGN KEY (`fk_id_cadastro`) REFERENCES `perfil` (`id_cadastro`);

--
-- Limitadores para a tabela `dados_responsavel`
--
ALTER TABLE `dados_responsavel`
  ADD CONSTRAINT `dados_responsavel_ibfk_1` FOREIGN KEY (`fk_id_cadastro`) REFERENCES `perfil` (`id_cadastro`);

--
-- Limitadores para a tabela `doacao`
--
ALTER TABLE `doacao`
  ADD CONSTRAINT `doacao_ibfk_1` FOREIGN KEY (`fk_rg_crianca`) REFERENCES `dados_crianca` (`rg_crianca`);

--
-- Limitadores para a tabela `perfil`
--
ALTER TABLE `perfil`
  ADD CONSTRAINT `perfil_ibfk_1` FOREIGN KEY (`fk_user`) REFERENCES `usuario` (`user`);

--
-- Limitadores para a tabela `possui_cri`
--
ALTER TABLE `possui_cri`
  ADD CONSTRAINT `possui_cri_ibfk_1` FOREIGN KEY (`fk_rg_crianca`) REFERENCES `dados_crianca` (`rg_crianca`),
  ADD CONSTRAINT `possui_cri_ibfk_2` FOREIGN KEY (`fk_id_familia`) REFERENCES `dados_responsavel` (`id_familia`);

--
-- Limitadores para a tabela `realiza`
--
ALTER TABLE `realiza`
  ADD CONSTRAINT `realiza_ibfk_1` FOREIGN KEY (`fk_id_doacao`) REFERENCES `doacao` (`id_doacao`),
  ADD CONSTRAINT `realiza_ibfk_2` FOREIGN KEY (`fk_id_cadastro`) REFERENCES `perfil` (`id_cadastro`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

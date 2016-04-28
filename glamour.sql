--
-- Database: `glamour`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `agendamento`
--

CREATE TABLE `agendamento` (
  `idAgendamento` int(11) NOT NULL,
  `dia` varchar(255) NOT NULL,
  `mes` varchar(255) NOT NULL,
  `ano` varchar(255) NOT NULL,
  `data` date NOT NULL,
  `hora` time NOT NULL,
  `cliente_idCliente` int(11) NOT NULL,
  `servico_idServico` int(11) NOT NULL,
  `salao_idSalao` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estrutura da tabela `cliente`
--

CREATE TABLE `cliente` (
  `idCliente` int(11) NOT NULL,
  `nome_cliente` varchar(45) CHARACTER SET utf32 NOT NULL,
  `cidade` varchar(45) CHARACTER SET utf32 NOT NULL,
  `cpf` varchar(255) NOT NULL,
  `telefone` varchar(16) CHARACTER SET utf32 NOT NULL,
  `email` varchar(45) CHARACTER SET utf32 NOT NULL,
  `senha` varchar(255) CHARACTER SET utf32 NOT NULL,
  `sexo` varchar(1) CHARACTER SET utf32 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `cliente`
--

INSERT INTO `cliente` (`idCliente`, `nome_cliente`, `cidade`, `cpf`, `telefone`, `email`, `senha`, `sexo`) VALUES
(37, 'André Gouveia', '', '0', '(83) 89898-8888', 'andre.gouveia@live.com', 'e10adc3949ba59abbe56e057f20f883e', ''),
(39, 'Maria das neves', 'Campina Grande', '09009009009', '(83) 89898-8888', 'teste@testesalao.com', 'e10adc3949ba59abbe56e057f20f883e', 'F');

-- --------------------------------------------------------

--
-- Estrutura da tabela `funcionario`
--

CREATE TABLE `funcionario` (
  `idFuncionario` int(11) NOT NULL,
  `nome_fun` varchar(45) CHARACTER SET latin1 NOT NULL,
  `sexo` varchar(2) CHARACTER SET latin1 NOT NULL,
  `salao_idSalao` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estrutura da tabela `salao`
--

CREATE TABLE `salao` (
  `idSalao` int(11) NOT NULL,
  `nome_salao` varchar(45) CHARACTER SET latin1 NOT NULL,
  `endereco` varchar(45) CHARACTER SET latin1 NOT NULL,
  `cidade` varchar(45) CHARACTER SET latin1 NOT NULL,
  `uf` varchar(2) CHARACTER SET latin1 NOT NULL,
  `cnpj_cpf` varchar(255) NOT NULL,
  `email_salao` varchar(45) NOT NULL,
  `login_salao` varchar(255) NOT NULL,
  `senha_salao` varchar(255) NOT NULL,
  `bairro` varchar(45) CHARACTER SET latin1 NOT NULL,
  `cep` int(8) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `salao`
--

INSERT INTO `salao` (`idSalao`, `nome_salao`, `endereco`, `cidade`, `uf`, `cnpj_cpf`, `email_salao`, `login_salao`, `senha_salao`, `bairro`, `cep`) VALUES
(15, 'Beleza Host', 'Rua Essa mesmo', 'jampa', 'PB', '12345678910111', 'teste@glamoursalao.com', 'belezahost', '123456', 'Centro', 58000000);

-- --------------------------------------------------------

--
-- Estrutura da tabela `servico`
--

CREATE TABLE `servico` (
  `idServico` int(11) NOT NULL,
  `nome_servico` varchar(100) CHARACTER SET latin1 NOT NULL,
  `descricao` text CHARACTER SET latin1 NOT NULL,
  `valor` double(10,2) NOT NULL,
  `Salao_idSalao` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `agendamento`
--
ALTER TABLE `agendamento`
  ADD PRIMARY KEY (`idAgendamento`);

--
-- Indexes for table `cliente`
--
ALTER TABLE `cliente`
  ADD PRIMARY KEY (`idCliente`);

--
-- Indexes for table `funcionario`
--
ALTER TABLE `funcionario`
  ADD PRIMARY KEY (`idFuncionario`);

--
-- Indexes for table `salao`
--
ALTER TABLE `salao`
  ADD PRIMARY KEY (`idSalao`);

--
-- Indexes for table `servico`
--
ALTER TABLE `servico`
  ADD PRIMARY KEY (`idServico`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `agendamento`
--
ALTER TABLE `agendamento`
  MODIFY `idAgendamento` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `cliente`
--
ALTER TABLE `cliente`
  MODIFY `idCliente` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=40;
--
-- AUTO_INCREMENT for table `funcionario`
--
ALTER TABLE `funcionario`
  MODIFY `idFuncionario` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `salao`
--
ALTER TABLE `salao`
  MODIFY `idSalao` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
--
-- AUTO_INCREMENT for table `servico`
--
ALTER TABLE `servico`
  MODIFY `idServico` int(11) NOT NULL AUTO_INCREMENT;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

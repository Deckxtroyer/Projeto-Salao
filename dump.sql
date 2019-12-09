CREATE DATABASE cadastro;
USE cadastro;

CREATE TABLE `cadastro`.`tb_usuario` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `nome` VARCHAR (20) NOT NULL,
  `senha` VARCHAR (10) NOT NULL,
  `endereco` VARCHAR (30) NOT NULL,
  `fone` VARCHAR (10) NOT NULL,
  `idade` INT (10) NOT NULL,
  `rg` VARCHAR (11) NOT NULL,
  `cpf` VARCHAR (11) NOT NULL,
  `sexo` VARCHAR (10) NOT NULL,
  `email` VARCHAR (30) NOT NULL,
  PRIMARY KEY (`id`));

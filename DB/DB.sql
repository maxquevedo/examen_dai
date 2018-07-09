DROP DATABASE IF EXISTS `EXAMEN`;
CREATE DATABASE EXAMEN DEFAULT CHARACTER SET utf8 COLLATE utf8_spanish_ci;

USE  EXAMEN;

DROP TABLE IF EXISTS `EMPRESA`;
CREATE TABLE EMPRESA(
  `codigoEmpresa` int PRIMARY KEY NOT NULL AUTO_INCREMENT,
  `nombreEmpresa` VARCHAR(45) NOT NULL,
  `rutEmpresa` VARCHAR(30) NOT NULL UNIQUE,
  `passwordEmpresa`VARCHAR(15) NOT NULL,
  `direccionEmpresa` VARCHAR(45) NOT NULL,
  `estadoEmpresa` VARCHAR(15) NOT NULL DEFAULT 'Habilitado'


);

DROP TABLE IF EXISTS `CONTACTO`;
CREATE TABLE CONTACTO(
	`rutContacto` VARCHAR(10) PRIMARY KEY NOT NULL,
  `nombreContacto` VARCHAR(30) NOT NULL,
  `emailContacto` VARCHAR(45) NOT NULL,
  `telefonoContacto` VARCHAR(15) ,
  `Empresa_codigo` VARCHAR(10) NOT NULL

);

DROP TABLE IF EXISTS `PARTICULAR`;
CREATE TABLE PARTICULAR(
  `codigoParticular` int PRIMARY KEY NOT NULL AUTO_INCREMENT,
  `rutParticular` VARCHAR(45) NOT NULL UNIQUE,
  `passwordParticular`VARCHAR(15) NOT NULL,
  `nombreParticular` VARCHAR(45) NOT NULL,
  `direccionParticular` VARCHAR(45) NOT NULL,
  `emailParticular` VARCHAR(100) NOT NULL UNIQUE,
  `telefonoParticular` VARCHAR(20) NOT NULL,
  `estadoParticular` VARCHAR(15) NOT NULL DEFAULT 'Habilitado'

);

DROP TABLE IF EXISTS `EMPLEADO`;
CREATE TABLE EMPLEADO(
  `codigoEmpleado` int PRIMARY KEY NOT NULL AUTO_INCREMENT,
  `rutEmpleado` VARCHAR(45) NOT NULL UNIQUE,
  `nombreEmpleado` VARCHAR(45) NOT NULL,
  `passwordEmpleado` VARCHAR(15) NOT NULL,
  `emailEmpleado` VARCHAR(100) NOT NULL UNIQUE,
  `categoriaEmpleado` VARCHAR(15) NOT NULL,
  `estadoEmpleado` VARCHAR(15) NOT NULL DEFAULT 'Habilitado'

);

DROP TABLE IF EXISTS `ANALISISMUESTRAS`;
CREATE TABLE ANALISISMUESTRAS(
	`idAnalisisMuestras` INT PRIMARY KEY NOT NULL AUTO_INCREMENT,
  `tipoAnalisis` VARCHAR(20) NULL,
  `tipoMedida` VARCHAR(20) NULL,
  `fechaRecepcion` VARCHAR(20) NOT NULL,
  `cantidadMuestra` INT NULL,
  `codigoRamdonCliente` VARCHAR(10) NOT NULL,
  `rutEmpleado` VARCHAR(10)  NULL,
  `rutCliente` VARCHAR(10) NOT NULL
);

DROP TABLE IF EXISTS `ANALISISMUESTRASRECIBIDA`;
CREATE TABLE ANALISISMUESTRASRECIBIDA(
	`idAnalisisMuestrasRecibidad` INT PRIMARY KEY NOT NULL AUTO_INCREMENT,
  `codigoIdentificacion` VARCHAR(10) NOT NULL,
  `estadoAnalisis` VARCHAR(20) NOT NULL DEFAULT 'Pendiente',
  `fechaTermino` VARCHAR(20) NULL,
  `ppm` INT NULL,
  `rutEmpleado` VARCHAR(10)  NULL

);

INSERT INTO `empleado` (`codigoEmpleado`, `rutEmpleado`, `nombreEmpleado`, `passwordEmpleado`, `emailEmpleado`, `categoriaEmpleado`, `estadoEmpleado`) VALUES
  (0, '111', 'Administrador1', '111', 'Administrador1@gmail.com', 'A', 'Habilitado');
  

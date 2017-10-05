-- MySQL Administrator dump 1.4
--
-- ------------------------------------------------------
-- Server version	5.6.21-log


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;


--
-- Create schema produtos
--

CREATE DATABASE IF NOT EXISTS produtos;
USE produtos;

--
-- Temporary table structure for view `visualização1`
--
DROP TABLE IF EXISTS `visualização1`;
DROP VIEW IF EXISTS `visualização1`;
CREATE TABLE `visualização1` (
  `CodProd` int(11),
  `NomeProd` varchar(40),
  `DescProd` varchar(100),
  `Valor` double,
  `CodFor` int(11)
);

--
-- Definition of table `tabfor`
--

DROP TABLE IF EXISTS `tabfor`;
CREATE TABLE `tabfor` (
  `CodFor` int(11) NOT NULL,
  `NomeFor` varchar(15) DEFAULT NULL,
  `EndFor` varchar(25) DEFAULT NULL,
  `CidadeFor` varchar(20) DEFAULT NULL,
  `EstadoFor` varchar(2) DEFAULT NULL,
  `FoneFor` varchar(13) DEFAULT NULL,
  PRIMARY KEY (`CodFor`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tabfor`
--

/*!40000 ALTER TABLE `tabfor` DISABLE KEYS */;
INSERT INTO `tabfor` (`CodFor`,`NomeFor`,`EndFor`,`CidadeFor`,`EstadoFor`,`FoneFor`) VALUES 
 (1,'Material S/A','Rua bonifácio Junior, 45','São Paulo','SP','(11)7564-4323'),
 (2,'Expresso Ltda','Rua angra, 245','São Paulo','SP','(11)7234-5523'),
 (3,'Futuro Escola','Rua dezembro, 245','São Paulo','SP','(11)8834-5514'),
 (4,'Acedêmicos Ltda','Rua hangar 18, 245','São Paulo','SP','(11)8898-6614');
/*!40000 ALTER TABLE `tabfor` ENABLE KEYS */;


--
-- Definition of table `tabprod`
--

DROP TABLE IF EXISTS `tabprod`;
CREATE TABLE `tabprod` (
  `CodProd` int(11) NOT NULL AUTO_INCREMENT,
  `NomeProd` varchar(40) NOT NULL,
  `DescProd` varchar(100) NOT NULL,
  `Valor` double NOT NULL,
  `CodFor` int(11) NOT NULL,
  PRIMARY KEY (`CodProd`)
) ENGINE=InnoDB AUTO_INCREMENT=24 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tabprod`
--

/*!40000 ALTER TABLE `tabprod` DISABLE KEYS */;
INSERT INTO `tabprod` (`CodProd`,`NomeProd`,`DescProd`,`Valor`,`CodFor`) VALUES 
 (1,'Caneta Azul','Caneta Bic ponta grossa',1.5,1),
 (2,'Caneta Vermelha','Caneta Bic ponta grossa',1.5,1),
 (3,'Caneta Preta','Caneta Bic ponta grossa',1.5,1),
 (4,'Caneta Verde','Caneta Bic ponta grossa',1.5,1),
 (5,'Borracha - Brindex','Borracha Branca',2.5,2),
 (6,'Borracha - Lusithania','Borracha - verde',2.5,2),
 (7,'Régua','Régua 30 cm',3.55,2),
 (8,'Sulfite','Pacote Sulfite A4',15.56,2),
 (9,'Corretivo','Corretivo adesivo',3.5,3),
 (10,'Corretivo','Corretivo Líquido',2.5,3),
 (11,'Pincel Pilot preto','Pincel Pilot para quadro branco',4.5,3),
 (12,'Pincel Pilot vermelho','Pincel Pilot para quadro branco',4.5,3),
 (13,'Pincel Pilot azul','Pincel Pilot para quadro branco',4.5,4),
 (14,'Pincel Pilot verde','Pincel Pilot para quadro branco',4.5,4),
 (15,'Fichario','Bloco fichario com 50 folhas',5,4),
 (16,'Fichario','Bloco fichario com 50 folhas em pacote c/10 unidades',50,4),
 (17,'Marcador de Texto','Marcador de texto verde',2.8,5),
 (18,'Marcador de Texto','Marcador de texto rosa',2.8,5),
 (19,'Cartolina','Diversas cores',1.8,5),
 (20,'Papel Almaço','Bloco com 10 folhas de almaço',11.8,5),
 (21,'Pasta','Pasta',3.55,5),
 (22,'FICHÁRIO','FICHÁRIO SIMPLES \r\nNA COR PRETO',23.49,2),
 (23,'Tinta guache','Várias cores',7.55,4);
/*!40000 ALTER TABLE `tabprod` ENABLE KEYS */;


--
-- Definition of view `visualização1`
--

DROP TABLE IF EXISTS `visualização1`;
DROP VIEW IF EXISTS `visualização1`;
CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `visualização1` AS select `tabprod`.`CodProd` AS `CodProd`,`tabprod`.`NomeProd` AS `NomeProd`,`tabprod`.`DescProd` AS `DescProd`,`tabprod`.`Valor` AS `Valor`,`tabprod`.`CodFor` AS `CodFor` from `tabprod`;



/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;

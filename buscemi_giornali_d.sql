-- MySQL dump 10.19  Distrib 10.3.28-MariaDB, for Linux (x86_64)
--
-- Host: localhost    Database: buscemi_giornale
-- ------------------------------------------------------
-- Server version	10.3.28-MariaDB

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `Abbonamenti`
--

DROP TABLE IF EXISTS `Abbonamenti`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `Abbonamenti` (
  `Id_Abbonamento` int(11) NOT NULL AUTO_INCREMENT,
  `Id_Utente` int(11) DEFAULT NULL,
  `data_abbonamento` date DEFAULT NULL,
  `Periodicita` enum('Trimestrale','Semestrale','Annuale') NOT NULL,
  PRIMARY KEY (`Id_Abbonamento`),
  KEY `Id_Utente` (`Id_Utente`),
  CONSTRAINT `Abbonamenti_ibfk_1` FOREIGN KEY (`Id_Utente`) REFERENCES `Utenti` (`Id_utente`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `Abbonamenti`
--

LOCK TABLES `Abbonamenti` WRITE;
/*!40000 ALTER TABLE `Abbonamenti` DISABLE KEYS */;
/*!40000 ALTER TABLE `Abbonamenti` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `Abbonamenti_Pubblicazioni`
--

DROP TABLE IF EXISTS `Abbonamenti_Pubblicazioni`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `Abbonamenti_Pubblicazioni` (
  `Id_Abbonamento` int(11) DEFAULT NULL,
  `Id_Pubblicazione` int(11) DEFAULT NULL,
  KEY `Id_Abbonamento` (`Id_Abbonamento`),
  KEY `Id_Pubblicazione` (`Id_Pubblicazione`),
  CONSTRAINT `Abbonamenti_Pubblicazioni_ibfk_1` FOREIGN KEY (`Id_Abbonamento`) REFERENCES `Abbonamenti` (`Id_Abbonamento`),
  CONSTRAINT `Abbonamenti_Pubblicazioni_ibfk_2` FOREIGN KEY (`Id_Pubblicazione`) REFERENCES `Pubblicazioni` (`Id_Pubblicazione`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `Abbonamenti_Pubblicazioni`
--

LOCK TABLES `Abbonamenti_Pubblicazioni` WRITE;
/*!40000 ALTER TABLE `Abbonamenti_Pubblicazioni` DISABLE KEYS */;
/*!40000 ALTER TABLE `Abbonamenti_Pubblicazioni` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `Articolo`
--

DROP TABLE IF EXISTS `Articolo`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `Articolo` (
  `Id_Articolo` int(11) NOT NULL AUTO_INCREMENT,
  `titoloArticolo` varchar(30) NOT NULL,
  `testoArticolo` varchar(255) NOT NULL,
  PRIMARY KEY (`Id_Articolo`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `Articolo`
--

LOCK TABLES `Articolo` WRITE;
/*!40000 ALTER TABLE `Articolo` DISABLE KEYS */;
/*!40000 ALTER TABLE `Articolo` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `Pubblicazioni`
--

DROP TABLE IF EXISTS `Pubblicazioni`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `Pubblicazioni` (
  `Id_Pubblicazione` int(11) NOT NULL AUTO_INCREMENT,
  `titolo` varchar(20) NOT NULL,
  `PeriodicitaPubb` varchar(10) DEFAULT NULL,
  `ArgomentoPubblicazione` varchar(30) DEFAULT NULL,
  PRIMARY KEY (`Id_Pubblicazione`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `Pubblicazioni`
--

LOCK TABLES `Pubblicazioni` WRITE;
/*!40000 ALTER TABLE `Pubblicazioni` DISABLE KEYS */;
/*!40000 ALTER TABLE `Pubblicazioni` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `Utenti`
--

DROP TABLE IF EXISTS `Utenti`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `Utenti` (
  `Id_utente` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL,
  PRIMARY KEY (`Id_utente`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `Utenti`
--

LOCK TABLES `Utenti` WRITE;
/*!40000 ALTER TABLE `Utenti` DISABLE KEYS */;
/*!40000 ALTER TABLE `Utenti` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2024-02-22  9:52:55

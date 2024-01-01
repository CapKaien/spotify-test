-- MySQL dump 10.13  Distrib 8.0.33, for Win64 (x86_64)
--
-- Host: localhost    Database: spotifydb
-- ------------------------------------------------------
-- Server version	8.0.33

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!50503 SET NAMES utf8 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `artiststable`
--

DROP TABLE IF EXISTS `artiststable`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `artiststable` (
  `artistID` varchar(255) NOT NULL,
  `artistName` varchar(255) DEFAULT NULL,
  `artistIMG` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`artistID`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `artiststable`
--

LOCK TABLES `artiststable` WRITE;
/*!40000 ALTER TABLE `artiststable` DISABLE KEYS */;
INSERT INTO `artiststable` VALUES ('03jMNKZ7bfBuHdZUqeJyv7','VXON','https://i.scdn.co/image/ab6761610000e5eb32436f76f0a26831d449f09d'),('0a4r2EnsevvHCukoJ1xFwJ','juan karlos','https://i.scdn.co/image/ab6761610000e5eb742c6debaddcf5e94cced1d1'),('0fAEWMlRd4yiJBT2usaqqc','Softwilly','https://i.scdn.co/image/ab6761610000e5eb56ef18c5c7d1e94b5bc36de0'),('0QRp7CyL31iErUn6cX0YU3','do not resurrect','https://i.scdn.co/image/ab6761610000e5eb35985caa55f99e2465d13678'),('14uo609t1MvRGZcskySt9R','SXMPRA','https://i.scdn.co/image/ab6761610000e5eb17a6afcb1f8b49db2fbef91c'),('1FM51jrhnvagSuGSUv3kS2','Yumi','https://i.scdn.co/image/ab6761610000e5ebbe1f94c7a3dcfd1578fcca5a'),('1KCSPY1glIKqW2TotWuXOR','P!nk','https://i.scdn.co/image/ab6761610000e5eb7bbad89a61061304ec842588'),('1l7ZsJRRS8wlW3WfJfPfNS','Christina Aguilera','https://i.scdn.co/image/ab6761610000e5eb371cba21c6962a457c550b81'),('1vfezMIyCr4XUdYRaKIKi3','Keyshia Cole','https://i.scdn.co/image/ab6761610000e5eb1ab13fdacbb8017ec4087ca9'),('26JloX1vHxGGrGUVeMItFJ','iamjakehill','https://i.scdn.co/image/ab6761610000e5ebb539c9260c552be52511e15b'),('2EMAnMvWE2eb56ToJVfCWs','Bryson Tiller','https://i.scdn.co/image/ab6761610000e5eb078fdd734b7f0aa782328428'),('2iGQPw6XUqFdGqAqcXihfT','Chills','https://i.scdn.co/image/ab6761610000e5ebf9c998ef878ead2fb029a3ef'),('2Q2uIXpaRSH3Or0oT5nFXR','DENȲ','https://i.scdn.co/image/ab6761610000e5eb42fc4e63b4eaa366312171a9'),('3L1qgTsUqavkiygkIKfWJD','Denise Julia','https://i.scdn.co/image/ab6761610000e5eb5938046f7147526b49adafd1'),('3LFFf4EpKn2krneZ9vozyz','JO YURI','https://i.scdn.co/image/ab6761610000e5eb1605bb0e3881cfc8f63c2c6a'),('3ZHU5AKrUmIPnCFfr82QER','1nonly','https://i.scdn.co/image/ab6761610000e5eb58b374eff43fbac00bc35984'),('4TEK9tIkcoxib4GxT3O4ky','KISS OF LIFE','https://i.scdn.co/image/ab6761610000e5ebdbf1d8edc13c0102ec7aead5'),('4UT0p3ljEiD472lZp44KLH','Sadfriendd','https://i.scdn.co/image/ab6761610000e5eb1b223b5dcc07d1fb6154e160'),('4wjgqUtfS9TNfMHhjEqAb7','PLAYERTWO','https://i.scdn.co/image/ab6761610000e5eb62909ecd69c5bb809417d2ce'),('5tth2a3v0sWwV1C7bApBdX','Lil\' Kim','https://i.scdn.co/image/ab6761610000e5eb44f424402a1933b745019107'),('639kduoUmDR7ISY0QF6WlX','Martti Franca','https://i.scdn.co/image/ab6761610000e5eb3f58c0b03b8d901677db1223'),('63XBtGSEZINSyXylZxEUbv','Victoria Monét','https://i.scdn.co/image/ab6761610000e5eb149ebd20c454545fc4fb7487'),('6fc4La0O0xzu4tZIE0tSsQ','Ysanygo','https://i.scdn.co/image/ab6761610000e5eb762ed8fea1b1b2c0f6d22b18'),('6ghscS2VYz6krpZcxSOYEJ','Isaacwhy','https://i.scdn.co/image/ab6761610000e5ebc06a042f01a0d5e06fdb3b64'),('6HvZYsbFfjnjFrWF950C9d','NewJeans','https://i.scdn.co/image/ab6761610000e5eb5da361915b1fa48895d4f23f'),('6lHL3ubAMgSasKjNqKb8HF','Mýa','https://i.scdn.co/image/ab6761610000e5ebae4ef104746d1362a7c1df32'),('6U3ybJ9UHNKEdsH7ktGBZ7','JID','https://i.scdn.co/image/ab6761610000e5eb8f0270ec23a53f3c1fe91849'),('6YVMFz59CuY7ngCxTxjpxE','aespa','https://i.scdn.co/image/ab6761610000e5eb61e9c9fd0ff840cfbeb09714'),('70jd0dao2RzNwUOhWGP0EN','Larrrycroft',''),('7aerdWadzubpu06Oxysg6R','Paolo Sandejas','https://i.scdn.co/image/ab6761610000e5ebebcf38cfceca34ebf396f598'),('7B9Gg9epjQzfNGdxijFczG','MUPP','https://i.scdn.co/image/ab6761610000e5ebb65b15a21d7469c612623abb'),('7j8MiVdcaaVpUvhkXWwYDT','Yung Kage','https://i.scdn.co/image/ab6761610000e5ebff1ec21a9b371fbed436783b'),('7tNO3vJC9zlHy2IJOx34ga','BINI','https://i.scdn.co/image/ab6761610000e5eb7338971f002997ca9e351f2b');
/*!40000 ALTER TABLE `artiststable` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `genrestable`
--

DROP TABLE IF EXISTS `genrestable`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `genrestable` (
  `artistID` varchar(255) DEFAULT NULL,
  `genres` varchar(255) DEFAULT NULL,
  KEY `artistID` (`artistID`),
  CONSTRAINT `genrestable_ibfk_2` FOREIGN KEY (`artistID`) REFERENCES `artiststable` (`artistID`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `genrestable`
--

LOCK TABLES `genrestable` WRITE;
/*!40000 ALTER TABLE `genrestable` DISABLE KEYS */;
INSERT INTO `genrestable` VALUES ('63XBtGSEZINSyXylZxEUbv','alternative r&b'),('2EMAnMvWE2eb56ToJVfCWs','kentucky hip hop'),('2EMAnMvWE2eb56ToJVfCWs','r&b'),('2EMAnMvWE2eb56ToJVfCWs','rap'),('1l7ZsJRRS8wlW3WfJfPfNS','dance pop'),('1l7ZsJRRS8wlW3WfJfPfNS','pop'),('5tth2a3v0sWwV1C7bApBdX','dance pop'),('5tth2a3v0sWwV1C7bApBdX','east coast hip hop'),('5tth2a3v0sWwV1C7bApBdX','hip hop'),('5tth2a3v0sWwV1C7bApBdX','hip pop'),('5tth2a3v0sWwV1C7bApBdX','pop rap'),('5tth2a3v0sWwV1C7bApBdX','r&b'),('5tth2a3v0sWwV1C7bApBdX','rap'),('5tth2a3v0sWwV1C7bApBdX','southern hip hop'),('5tth2a3v0sWwV1C7bApBdX','trap queen'),('5tth2a3v0sWwV1C7bApBdX','urban contemporary'),('6lHL3ubAMgSasKjNqKb8HF','contemporary r&b'),('6lHL3ubAMgSasKjNqKb8HF','hip pop'),('6lHL3ubAMgSasKjNqKb8HF','r&b'),('6lHL3ubAMgSasKjNqKb8HF','urban contemporary'),('1KCSPY1glIKqW2TotWuXOR','dance pop'),('1KCSPY1glIKqW2TotWuXOR','pop'),('7B9Gg9epjQzfNGdxijFczG','drift phonk'),('7B9Gg9epjQzfNGdxijFczG','hyperpop'),('4UT0p3ljEiD472lZp44KLH','aesthetic rap'),('4UT0p3ljEiD472lZp44KLH','gym phonk'),('4UT0p3ljEiD472lZp44KLH','hyperpop'),('3ZHU5AKrUmIPnCFfr82QER','aesthetic rap'),('14uo609t1MvRGZcskySt9R','drift phonk'),('26JloX1vHxGGrGUVeMItFJ','sad rap'),('6HvZYsbFfjnjFrWF950C9d','k-pop'),('6HvZYsbFfjnjFrWF950C9d','k-pop girl group'),('4TEK9tIkcoxib4GxT3O4ky','k-pop girl group'),('3LFFf4EpKn2krneZ9vozyz','korean ost'),('1vfezMIyCr4XUdYRaKIKi3','hip pop'),('1vfezMIyCr4XUdYRaKIKi3','r&b'),('1vfezMIyCr4XUdYRaKIKi3','urban contemporary'),('6U3ybJ9UHNKEdsH7ktGBZ7','hip hop'),('6U3ybJ9UHNKEdsH7ktGBZ7','pop rap'),('6U3ybJ9UHNKEdsH7ktGBZ7','rap'),('6U3ybJ9UHNKEdsH7ktGBZ7','underground hip hop'),('6YVMFz59CuY7ngCxTxjpxE','k-pop'),('6YVMFz59CuY7ngCxTxjpxE','k-pop girl group'),('0a4r2EnsevvHCukoJ1xFwJ','opm'),('7aerdWadzubpu06Oxysg6R','opm'),('7aerdWadzubpu06Oxysg6R','pinoy indie'),('6fc4La0O0xzu4tZIE0tSsQ','pinoy indie'),('6fc4La0O0xzu4tZIE0tSsQ','pinoy r&b'),('2Q2uIXpaRSH3Or0oT5nFXR','pinoy hip hop'),('2Q2uIXpaRSH3Or0oT5nFXR','tagalog rap'),('7tNO3vJC9zlHy2IJOx34ga','p-pop'),('7tNO3vJC9zlHy2IJOx34ga','pinoy idol pop'),('03jMNKZ7bfBuHdZUqeJyv7','p-pop'),('639kduoUmDR7ISY0QF6WlX','pinoy indie');
/*!40000 ALTER TABLE `genrestable` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `historytable`
--

DROP TABLE IF EXISTS `historytable`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `historytable` (
  `userID` varchar(255) DEFAULT NULL,
  `trackID` varchar(255) DEFAULT NULL,
  `datePlayed` datetime DEFAULT NULL,
  KEY `userID` (`userID`),
  KEY `trackID` (`trackID`),
  CONSTRAINT `historytable_ibfk_1` FOREIGN KEY (`userID`) REFERENCES `userstable` (`userID`),
  CONSTRAINT `historytable_ibfk_2` FOREIGN KEY (`trackID`) REFERENCES `trackstable` (`trackID`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `historytable`
--

LOCK TABLES `historytable` WRITE;
/*!40000 ALTER TABLE `historytable` DISABLE KEYS */;
INSERT INTO `historytable` VALUES ('rk2did1tsjrdf22yfgpnk70oq','7ArVzlFsFsQXNseVXmdOyk','2023-10-16 16:12:23'),('rk2did1tsjrdf22yfgpnk70oq','0wOtc2nY3NOohp4xSwOyTN','2023-10-16 16:00:10'),('rk2did1tsjrdf22yfgpnk70oq','7GbqE3MlkKosIaCvf50JRK','2023-10-16 15:58:15'),('rk2did1tsjrdf22yfgpnk70oq','2Hv7FIRDnm8xfNFGyMhODY','2023-10-16 15:46:16'),('rk2did1tsjrdf22yfgpnk70oq','2javoaOqkMZ9yRa5JyBzuN','2023-10-16 15:42:27'),('rk2did1tsjrdf22yfgpnk70oq','627w7BXna5zClpuugSuhfr','2023-10-16 15:36:56'),('rk2did1tsjrdf22yfgpnk70oq','2s14ypvd880AiEfZssEjaY','2023-10-16 15:27:33'),('rk2did1tsjrdf22yfgpnk70oq','5Sk39LuvdwuvL84jD01Dum','2023-10-16 15:25:09'),('rk2did1tsjrdf22yfgpnk70oq','6jdwbcH788txYS6Doy1F1j','2023-10-16 15:23:00'),('rk2did1tsjrdf22yfgpnk70oq','3HsFSrIsbO54TFDfG66pZm','2023-10-16 15:19:28'),('rk2did1tsjrdf22yfgpnk70oq','5sdQOyqq2IDhvmx2lHOpwd','2023-10-16 15:16:28'),('rk2did1tsjrdf22yfgpnk70oq','0NoeYUnwpb9R26mpylHcR9','2023-10-16 15:13:56'),('rk2did1tsjrdf22yfgpnk70oq','0NoeYUnwpb9R26mpylHcR9','2023-10-16 15:10:56'),('rk2did1tsjrdf22yfgpnk70oq','1h7S5xFqtKsh4Lqy2UInH9','2023-10-16 15:07:56'),('rk2did1tsjrdf22yfgpnk70oq','0NoeYUnwpb9R26mpylHcR9','2023-10-16 15:06:36'),('rk2did1tsjrdf22yfgpnk70oq','0W4NhJhcqKCqEP2GIpDCDq','2023-10-13 14:52:47'),('rk2did1tsjrdf22yfgpnk70oq','12Yy0hZrUebGnr3IrppPnW','2023-10-10 07:32:02'),('rk2did1tsjrdf22yfgpnk70oq','0NoeYUnwpb9R26mpylHcR9','2023-10-10 07:31:22'),('rk2did1tsjrdf22yfgpnk70oq','285Bh5EkbxGGE76ge8JDbH','2023-10-10 07:27:57'),('rk2did1tsjrdf22yfgpnk70oq','0NoeYUnwpb9R26mpylHcR9','2023-10-10 07:24:27'),('rk2did1tsjrdf22yfgpnk70oq','2BLdelIp46CHvKkyWeqZHL','2023-10-10 07:11:35'),('rk2did1tsjrdf22yfgpnk70oq','0Wbz830pfbFJOURtzRJrs0','2023-10-10 07:06:50'),('rk2did1tsjrdf22yfgpnk70oq','0SuQMjb2TleiKg1ebQSDnX','2023-10-10 07:02:14'),('rk2did1tsjrdf22yfgpnk70oq','4C9bX6MwR0JBYDGK4JXhbB','2023-10-10 06:43:04'),('rk2did1tsjrdf22yfgpnk70oq','5Chs3vlCnKO8fJjhSak1q7','2023-10-10 06:38:55'),('rk2did1tsjrdf22yfgpnk70oq','6AchAK5rBD4KTzJ14wOvSI','2023-10-10 06:35:43'),('rk2did1tsjrdf22yfgpnk70oq','6xfsvHFXr8GgRzaFAkmjAY','2023-10-10 06:33:03'),('rk2did1tsjrdf22yfgpnk70oq','5LkJokf6VTL6eQBNskJM6W','2023-10-10 06:28:34'),('rk2did1tsjrdf22yfgpnk70oq','3pLBPNR3ikdcDW5CP67gHY','2023-10-09 15:17:36'),('rk2did1tsjrdf22yfgpnk70oq','4C9bX6MwR0JBYDGK4JXhbB','2023-10-09 15:14:05');
/*!40000 ALTER TABLE `historytable` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `trackinfo`
--

DROP TABLE IF EXISTS `trackinfo`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `trackinfo` (
  `trackID` varchar(255) DEFAULT NULL,
  `artistID` varchar(255) DEFAULT NULL,
  KEY `trackID` (`trackID`),
  KEY `artistID` (`artistID`),
  CONSTRAINT `trackinfo_ibfk_1` FOREIGN KEY (`trackID`) REFERENCES `trackstable` (`trackID`),
  CONSTRAINT `trackinfo_ibfk_2` FOREIGN KEY (`artistID`) REFERENCES `artiststable` (`artistID`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `trackinfo`
--

LOCK TABLES `trackinfo` WRITE;
/*!40000 ALTER TABLE `trackinfo` DISABLE KEYS */;
INSERT INTO `trackinfo` VALUES ('7ArVzlFsFsQXNseVXmdOyk','3L1qgTsUqavkiygkIKfWJD'),('0wOtc2nY3NOohp4xSwOyTN','63XBtGSEZINSyXylZxEUbv'),('0wOtc2nY3NOohp4xSwOyTN','2EMAnMvWE2eb56ToJVfCWs'),('7GbqE3MlkKosIaCvf50JRK','1l7ZsJRRS8wlW3WfJfPfNS'),('7GbqE3MlkKosIaCvf50JRK','5tth2a3v0sWwV1C7bApBdX'),('7GbqE3MlkKosIaCvf50JRK','6lHL3ubAMgSasKjNqKb8HF'),('7GbqE3MlkKosIaCvf50JRK','1KCSPY1glIKqW2TotWuXOR'),('2Hv7FIRDnm8xfNFGyMhODY','0fAEWMlRd4yiJBT2usaqqc'),('2Hv7FIRDnm8xfNFGyMhODY','0QRp7CyL31iErUn6cX0YU3'),('2Hv7FIRDnm8xfNFGyMhODY','2iGQPw6XUqFdGqAqcXihfT'),('2Hv7FIRDnm8xfNFGyMhODY','6ghscS2VYz6krpZcxSOYEJ'),('2javoaOqkMZ9yRa5JyBzuN','0fAEWMlRd4yiJBT2usaqqc'),('2javoaOqkMZ9yRa5JyBzuN','0QRp7CyL31iErUn6cX0YU3'),('2javoaOqkMZ9yRa5JyBzuN','2iGQPw6XUqFdGqAqcXihfT'),('2javoaOqkMZ9yRa5JyBzuN','6ghscS2VYz6krpZcxSOYEJ'),('627w7BXna5zClpuugSuhfr','7j8MiVdcaaVpUvhkXWwYDT'),('627w7BXna5zClpuugSuhfr','1FM51jrhnvagSuGSUv3kS2'),('627w7BXna5zClpuugSuhfr','0fAEWMlRd4yiJBT2usaqqc'),('627w7BXna5zClpuugSuhfr','70jd0dao2RzNwUOhWGP0EN'),('2s14ypvd880AiEfZssEjaY','0fAEWMlRd4yiJBT2usaqqc'),('2s14ypvd880AiEfZssEjaY','7j8MiVdcaaVpUvhkXWwYDT'),('5Sk39LuvdwuvL84jD01Dum','7B9Gg9epjQzfNGdxijFczG'),('5Sk39LuvdwuvL84jD01Dum','4UT0p3ljEiD472lZp44KLH'),('6jdwbcH788txYS6Doy1F1j','3ZHU5AKrUmIPnCFfr82QER'),('6jdwbcH788txYS6Doy1F1j','14uo609t1MvRGZcskySt9R'),('3HsFSrIsbO54TFDfG66pZm','26JloX1vHxGGrGUVeMItFJ'),('5sdQOyqq2IDhvmx2lHOpwd','6HvZYsbFfjnjFrWF950C9d'),('0NoeYUnwpb9R26mpylHcR9','4TEK9tIkcoxib4GxT3O4ky'),('1h7S5xFqtKsh4Lqy2UInH9','3LFFf4EpKn2krneZ9vozyz'),('0W4NhJhcqKCqEP2GIpDCDq','1vfezMIyCr4XUdYRaKIKi3'),('12Yy0hZrUebGnr3IrppPnW','6HvZYsbFfjnjFrWF950C9d'),('12Yy0hZrUebGnr3IrppPnW','6U3ybJ9UHNKEdsH7ktGBZ7'),('285Bh5EkbxGGE76ge8JDbH','6YVMFz59CuY7ngCxTxjpxE'),('2BLdelIp46CHvKkyWeqZHL','0a4r2EnsevvHCukoJ1xFwJ'),('0Wbz830pfbFJOURtzRJrs0','0a4r2EnsevvHCukoJ1xFwJ'),('0SuQMjb2TleiKg1ebQSDnX','0a4r2EnsevvHCukoJ1xFwJ'),('4C9bX6MwR0JBYDGK4JXhbB','7aerdWadzubpu06Oxysg6R'),('4C9bX6MwR0JBYDGK4JXhbB','6fc4La0O0xzu4tZIE0tSsQ'),('5Chs3vlCnKO8fJjhSak1q7','4wjgqUtfS9TNfMHhjEqAb7'),('6AchAK5rBD4KTzJ14wOvSI','2Q2uIXpaRSH3Or0oT5nFXR'),('6xfsvHFXr8GgRzaFAkmjAY','7tNO3vJC9zlHy2IJOx34ga'),('5LkJokf6VTL6eQBNskJM6W','03jMNKZ7bfBuHdZUqeJyv7'),('3pLBPNR3ikdcDW5CP67gHY','7aerdWadzubpu06Oxysg6R'),('3pLBPNR3ikdcDW5CP67gHY','639kduoUmDR7ISY0QF6WlX');
/*!40000 ALTER TABLE `trackinfo` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `trackstable`
--

DROP TABLE IF EXISTS `trackstable`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `trackstable` (
  `trackID` varchar(255) NOT NULL,
  `trackName` varchar(255) DEFAULT NULL,
  `trackIMG` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`trackID`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `trackstable`
--

LOCK TABLES `trackstable` WRITE;
/*!40000 ALTER TABLE `trackstable` DISABLE KEYS */;
INSERT INTO `trackstable` VALUES ('0NoeYUnwpb9R26mpylHcR9','Sugarcoat (NATTY Solo)','https://i.scdn.co/image/ab67616d0000b2732ff7c76b0790cd3ad63cfc0c'),('0SuQMjb2TleiKg1ebQSDnX','ERE','https://i.scdn.co/image/ab67616d0000b273efb0e42ba1da26bc1fc7b8e7'),('0W4NhJhcqKCqEP2GIpDCDq','Love','https://i.scdn.co/image/ab67616d0000b2732cc2323c681b3f84cdc8379a'),('0Wbz830pfbFJOURtzRJrs0','Sad Songs and Bullshit','https://i.scdn.co/image/ab67616d0000b27356b484a13efc1f2242a4dce8'),('0wOtc2nY3NOohp4xSwOyTN','We Might Even Be Falling In Love (Duet) - Spotify Singles','https://i.scdn.co/image/ab67616d0000b27385587a1f2248d1d080681a30'),('12Yy0hZrUebGnr3IrppPnW','Zero (J.I.D Remix)','https://i.scdn.co/image/ab67616d0000b27366daf96fd3f1a920cd2053e6'),('1h7S5xFqtKsh4Lqy2UInH9','Round and Around','https://i.scdn.co/image/ab67616d0000b273e24e844f2650c498fa703c91'),('285Bh5EkbxGGE76ge8JDbH','Lucid Dream','https://i.scdn.co/image/ab67616d0000b273d8cc2281fcd4519ca020926b'),('2BLdelIp46CHvKkyWeqZHL','ERE','https://i.scdn.co/image/ab67616d0000b27356b484a13efc1f2242a4dce8'),('2Hv7FIRDnm8xfNFGyMhODY','KILLA','https://i.scdn.co/image/ab67616d0000b273a360ce9d60a1c42416820482'),('2javoaOqkMZ9yRa5JyBzuN','KAIJU','https://i.scdn.co/image/ab67616d0000b273a360ce9d60a1c42416820482'),('2s14ypvd880AiEfZssEjaY','OLIVIA','https://i.scdn.co/image/ab67616d0000b2736a4aebcfc198afe3e22cc8f0'),('3HsFSrIsbO54TFDfG66pZm','By the Sword','https://i.scdn.co/image/ab67616d0000b273eb56c0084b9afa9432ba87eb'),('3pLBPNR3ikdcDW5CP67gHY','Someone New','https://i.scdn.co/image/ab67616d0000b273f6eef61a27fdde747988a08d'),('4C9bX6MwR0JBYDGK4JXhbB','Sunday Morning','https://i.scdn.co/image/ab67616d0000b273d23f566cfd7491f50e58329b'),('5Chs3vlCnKO8fJjhSak1q7','SHOWER MUSIC','https://i.scdn.co/image/ab67616d0000b2735b3585dbada97e83bd8f1f17'),('5LkJokf6VTL6eQBNskJM6W','Sandal','https://i.scdn.co/image/ab67616d0000b2731607742e655372d8b879e490'),('5sdQOyqq2IDhvmx2lHOpwd','Super Shy','https://i.scdn.co/image/ab67616d0000b2733d98a0ae7c78a3a9babaf8af'),('5Sk39LuvdwuvL84jD01Dum','vendetta!','https://i.scdn.co/image/ab67616d0000b27345de6f708fe45e7db8d091db'),('627w7BXna5zClpuugSuhfr','Bloody Daisies','https://i.scdn.co/image/ab67616d0000b2736d41cde2fd7bc52b08daec59'),('6AchAK5rBD4KTzJ14wOvSI','Say My Name','https://i.scdn.co/image/ab67616d0000b273ef3b20372e5734a6a6842402'),('6jdwbcH788txYS6Doy1F1j','Step Back!','https://i.scdn.co/image/ab67616d0000b273da044bcfd7538fda65e3a7fc'),('6xfsvHFXr8GgRzaFAkmjAY','Karera','https://i.scdn.co/image/ab67616d0000b2733c8cf1ec61e1b3ab4ab3daeb'),('7ArVzlFsFsQXNseVXmdOyk','NVMD','https://i.scdn.co/image/ab67616d0000b273b4b782affb2fea1c794e5ccb'),('7GbqE3MlkKosIaCvf50JRK','Lady Marmalade - From \"Moulin Rouge\" Soundtrack','https://i.scdn.co/image/ab67616d0000b273e6e0891de00a924b0f186d0c');
/*!40000 ALTER TABLE `trackstable` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `userstable`
--

DROP TABLE IF EXISTS `userstable`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `userstable` (
  `userID` varchar(255) NOT NULL,
  `userName` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`userID`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `userstable`
--

LOCK TABLES `userstable` WRITE;
/*!40000 ALTER TABLE `userstable` DISABLE KEYS */;
INSERT INTO `userstable` VALUES ('rk2did1tsjrdf22yfgpnk70oq','Shenpie');
/*!40000 ALTER TABLE `userstable` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2023-10-18 21:09:53

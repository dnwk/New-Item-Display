-- --------------------------------------------------------
-- Host:                         localhost
-- Server version:               10.4.21-MariaDB-log - Source distribution
-- Server OS:                    Linux
-- HeidiSQL Version:             11.3.0.6295
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

CREATE TABLE IF NOT EXISTS `NewBib` (
  `ReceivingDate` date NOT NULL,
  `CallNo` varchar(220) NOT NULL,
  `LocationName` varchar(220) NOT NULL,
  `ISBN` varchar(100) NOT NULL,
  `MMSid` varchar(100) NOT NULL,
  `Title` varchar(250) NOT NULL,
  `Author` varchar(250) NOT NULL,
  `Publisher` varchar(250) NOT NULL,
  `PublicationDate` varchar(250) NOT NULL,
  `PublicationPlace` varchar(250) NOT NULL,
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `UpdateTime` datetime DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  PRIMARY KEY (`ID`),
  UNIQUE KEY `MMSid_3` (`MMSid`),
  KEY `MMSid` (`MMSid`),
  KEY `MMSid_2` (`MMSid`)
) ENGINE=InnoDB AUTO_INCREMENT=198 DEFAULT CHARSET=utf8;


/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IFNULL(@OLD_FOREIGN_KEY_CHECKS, 1) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40111 SET SQL_NOTES=IFNULL(@OLD_SQL_NOTES, 1) */;

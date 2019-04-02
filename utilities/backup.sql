-- Adminer 4.7.1 MySQL dump

SET NAMES utf8;
SET time_zone = '+00:00';
SET foreign_key_checks = 0;
SET sql_mode = 'NO_AUTO_VALUE_ON_ZERO';

DROP TABLE IF EXISTS `account_data`;
CREATE TABLE `account_data` (
  `chassisNumber` int(11) NOT NULL,
  `registrationNumber` int(11) NOT NULL,
  `modelCategory` int(11) NOT NULL,
  `drivingLicenceNumber` int(11) NOT NULL,
  `password` int(11) NOT NULL,
  `mobileNumber` int(11) NOT NULL,
  `emergencyNumber` int(11) NOT NULL,
  `bloodGroup` int(11) NOT NULL,
  `address` int(11) NOT NULL,
  `engineType` int(11) NOT NULL,
  `subscriptionDate` int(11) NOT NULL,
  `subRenewalDate` int(11) NOT NULL,
  `duePayment` int(11) NOT NULL,
  `status` text NOT NULL,
  PRIMARY KEY (`registrationNumber`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;


-- 2019-03-28 04:03:34







-- Generation time: Tue, 15 Jan 2019 06:21:58 +0530
-- Host: 127.0.0.1
-- DB name: final_year_project
/*!40030 SET NAMES UTF8 */;
/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

DROP TABLE IF EXISTS `poll_data`;
CREATE TABLE `poll_data` (
  `serial` int(11) NOT NULL AUTO_INCREMENT,
  `username` text NOT NULL,
  `vid` int(11) NOT NULL,
  `carbon` int(11) NOT NULL,
  `sulphur` int(11) NOT NULL,
  PRIMARY KEY (`serial`)
) ENGINE=InnoDB AUTO_INCREMENT=16 DEFAULT CHARSET=latin1;

INSERT INTO `poll_data` VALUES ('10','John','89','55','67'),
('15','new username','25','45','69'); 




/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;


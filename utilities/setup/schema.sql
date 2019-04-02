-- Adminer 4.7.1 MySQL dump

SET NAMES utf8;
SET time_zone = '+00:00';
SET foreign_key_checks = 0;
SET sql_mode = 'NO_AUTO_VALUE_ON_ZERO';

DROP TABLE IF EXISTS `account_data`;
CREATE TABLE `account_data` (
  `chassisNumber` int(11) NOT NULL,
  `registrationNumber` int(11) NOT NULL,
  `modelCategory` text NOT NULL,
  `drivingLicenceNumber` varchar(30) NOT NULL,
  `password` text NOT NULL,
  `mobileNumber` int(11) NOT NULL,
  `emergencyNumber` int(11) NOT NULL,
  `email` text NOT NULL,
  `bloodGroup` text NOT NULL,
  `address` text NOT NULL,
  `engineType` text NOT NULL,
  `subscriptionDate` int(11) NOT NULL,
  `subRenewalDate` int(11) NOT NULL,
  `duePayment` int(11) NOT NULL,
  `status` text NOT NULL,
  PRIMARY KEY (`drivingLicenceNumber`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;


-- 2019-03-28 04:03:34





DROP TABLE IF EXISTS `poll_data`;
CREATE TABLE `poll_data` (
  `chassisNumber` int(11) NOT NULL,
  `drivingLicenceNumber` varchar(30) NOT NULL,
  `timeAndDate` int(11) NOT NULL,
  `co` int(11) NOT NULL,
  `co2` int(11) NOT NULL,
  `hydro-carbons` int(11) NOT NULL,
  `fine-charges` int(11) NOT NULL,
  `due-payment-date` int(11) NOT NULL,
  `total-amount` int(11) NOT NULL,
  `ticket` text NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=16 DEFAULT CHARSET=latin1;




-- Adminer 4.7.1 MySQL dump

SET NAMES utf8;
SET time_zone = '+00:00';
SET foreign_key_checks = 0;
SET sql_mode = 'NO_AUTO_VALUE_ON_ZERO';

DROP TABLE IF EXISTS `payment_data`;
CREATE TABLE `payment_data` (
  `drivingLicenceNumber` varchar(30) NOT NULL,
  `timeAndDate` int(11) NOT NULL,
  `totalAmount` int(11) NOT NULL,
  `paymentMethod` text NOT NULL,
  `paymentReferenceNo` text NOT NULL,
  `dueBalance` int(11) NOT NULL,
  `ticketId` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;


-- 2019-04-01 12:32:19




-- Adminer 4.7.1 MySQL dump

SET NAMES utf8;
SET time_zone = '+00:00';
SET foreign_key_checks = 0;
SET sql_mode = 'NO_AUTO_VALUE_ON_ZERO';

DROP TABLE IF EXISTS `message_data`;
CREATE TABLE `message_data` (
  `ticketId` varchar(50) NOT NULL,
  `registrationNumber` varchar(50) NOT NULL,
  `timeAndDate` int(11) NOT NULL,
  `customerName` varchar(250) NOT NULL,
  `dueAmount` int(11) NOT NULL,
  `pollutionStatus` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;


-- 2019-04-01 13:29:14
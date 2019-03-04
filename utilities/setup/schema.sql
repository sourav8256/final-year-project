DROP TABLE IF EXISTS `account_data`;
CREATE TABLE `account_data` (
  `chassisNumber` int(11) NOT NULL,
  `modelCategory` int(11) NOT NULL,
  `registrationNumber` int(11) NOT NULL,
  `subscriptionDate` int(11) NOT NULL,
  `subRenewalDate` int(11) NOT NULL,
  `duePayment` int(11) NOT NULL,
  `status` text NOT NULL,
  PRIMARY KEY (`chassisNumber`)
) ENGINE=InnoDB AUTO_INCREMENT=16 DEFAULT CHARSET=latin1;





DROP TABLE IF EXISTS `poll_data`;
CREATE TABLE `poll_data` (
  `chassisNumber` int(11) NOT NULL,
  `time` text NOT NULL,
  `date` text NOT NULL,
  `co` int(11) NOT NULL,
  `co2` int(11) NOT NULL,
  `hydro-carbons` int(11) NOT NULL,
  `fine-charges` int(11) NOT NULL,
  `due-payment-date` int(11) NOT NULL,
  `total-amount` int(11) NOT NULL,
  `ticket` text NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=16 DEFAULT CHARSET=latin1;

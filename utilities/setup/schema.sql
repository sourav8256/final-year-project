DROP TABLE IF EXISTS `poll_data`;
CREATE TABLE `poll_data` (
  `chassisNumber` int(11) NOT NULL,
  `modelCategory` int(11) NOT NULL,
  `registrationNumber` int(11) NOT NULL,
  `subscriptionDate` int(11) NOT NULL,
  `subRenewalDate` int(11) NOT NULL,
  `duePayment` int(11) NOT NULL,
  `status` text NOT NULL,
  PRIMARY KEY (`chassisNumber`)
) ENGINE=InnoDB AUTO_INCREMENT=16 DEFAULT CHARSET=latin1;

-- Adminer 4.2.4 MySQL dump

SET NAMES utf8;
SET time_zone = '+00:00';
SET foreign_key_checks = 0;
SET sql_mode = 'NO_AUTO_VALUE_ON_ZERO';

DROP TABLE IF EXISTS `blogview`;
CREATE TABLE `blogview` (
  `blogitemID` int(11) NOT NULL AUTO_INCREMENT,
  `entryTitle` varchar(100) NOT NULL,
  `entrySummary` varchar(500) NOT NULL,
  `category` varchar(100) NOT NULL,
  `submitter` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`blogitemID`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

INSERT INTO `blogview` (`blogitemID`, `entryTitle`, `entrySummary`, `category`, `submitter`) VALUES
(1,	'Today at work',	'Today I went to work and did lots of very complicated coding things. I was very pleased that I managed to finish them all',	'Work',	'Adam'),
(11,	'University Lecturer',	'This week in university I had an amazing lecture. I can\'t remember the name of the lecturer but he was realy really good.',	'University',	'Brian'),
(21,	'Dads new television',	'Today dad bought a new television. He likes to watch the F1 on it a lot.',	'Family',	'Charlie');

-- 2016-05-04 10:04:11

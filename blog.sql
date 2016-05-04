-- Adminer 4.2.4 MySQL dump

SET NAMES utf8;
SET time_zone = '+00:00';
SET foreign_key_checks = 0;
SET sql_mode = 'NO_AUTO_VALUE_ON_ZERO';

DROP TABLE IF EXISTS `blogview`;
CREATE TABLE `blogview` (
  `blogitemID` int(11) NOT NULL AUTO_INCREMENT,
  `entryTitle` varchar(50) NOT NULL,
  `entrySummary` varchar(5000) NOT NULL,
  `category` varchar(20) NOT NULL,
  `submitter` varchar(20) NOT NULL,
  PRIMARY KEY (`blogitemID`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

INSERT INTO `blogview` (`blogitemID`, `entryTitle`, `entrySummary`, `category`, `submitter`) VALUES
(1,	'Today at work',	'Todday i went to work and did lots of very complicated coding things. i was very pleased that i managed to finish them all',	'Work',	'Adam Sandler'),
(11,	'Univeristy Lecturer',	'This week in university i had an amazing lecture. I cant remember the name of the lecturer but he was really really good.',	'University',	'Brian '),
(21,	'Dads new television',	'Today dad bought a new television. He likes to watch the F1 on it alot.',	'Family',	'Charlie');

-- 2016-05-04 10:37:57
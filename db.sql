-- Adminer 4.7.6 MySQL dump

SET NAMES utf8;
SET time_zone = '+00:00';
SET foreign_key_checks = 0;
SET sql_mode = 'NO_AUTO_VALUE_ON_ZERO';

CREATE DATABASE `db` /*!40100 DEFAULT CHARACTER SET utf8 COLLATE utf8_bin */ /*!80016 DEFAULT ENCRYPTION='N' */;
USE `db`;

CREATE TABLE `forgetpassword` (
  `id` int NOT NULL AUTO_INCREMENT,
  `userid` int NOT NULL,
  `hash` varchar(256) COLLATE utf8_bin NOT NULL,
  `key` int NOT NULL,
  `update-time` int NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=80 DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

INSERT INTO `forgetpassword` (`id`, `userid`, `hash`, `key`, `update-time`) VALUES
(79,	2,	'e73c5a532e35669cadf868ae0c87398f',	4737,	1581930846);

CREATE TABLE `users` (
  `id` int NOT NULL AUTO_INCREMENT,
  `name` varchar(42) COLLATE utf8_bin NOT NULL,
  `surname` varchar(42) COLLATE utf8_bin NOT NULL,
  `e-mail` varchar(64) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `password` varchar(64) COLLATE utf8_bin NOT NULL,
  `status` tinyint NOT NULL,
  `create-time` int NOT NULL,
  `update-time` int NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=34 DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

INSERT INTO `users` (`id`, `name`, `surname`, `e-mail`, `password`, `status`, `create-time`, `update-time`) VALUES
(1,	'Tolunay',	'Arslan',	'tolunayarslan040@gmail.com',	'123457890',	0,	1581713327,	1581923102),
(2,	'KadirAlp',	'Akbaba',	'alpakbaba8@gmail.com',	'123456789',	2,	1581441186,	1581924890),
(3,	'Meltem',	'Akyol',	'akyolmeltem@gmail.com',	'12345',	0,	1581448151,	1581923035);

-- 2020-02-17 09:26:45

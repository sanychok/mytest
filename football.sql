-- --------------------------------------------------------
-- Сервер:                       127.0.0.1
-- Версія сервера:               5.5.50 - MySQL Community Server (GPL)
-- ОС сервера:                   Win32
-- HeidiSQL Версія:              9.3.0.4984
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;

-- Dumping database structure for football
CREATE DATABASE IF NOT EXISTS `football` /*!40100 DEFAULT CHARACTER SET utf8 */;
USE `football`;


-- Dumping structure for таблиця football.sector1
CREATE TABLE IF NOT EXISTS `sector1` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `ряд` int(11) DEFAULT NULL,
  `місце` int(11) DEFAULT NULL,
  `active` int(11) NOT NULL DEFAULT '0',
  `user_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=37 DEFAULT CHARSET=utf8;

-- Dumping data for table football.sector1: ~31 rows (приблизно)
/*!40000 ALTER TABLE `sector1` DISABLE KEYS */;
INSERT INTO `sector1` (`id`, `ряд`, `місце`, `active`, `user_id`) VALUES
	(1, 1, 1, 2, 1),
	(2, 1, 2, 2, 5),
	(3, 1, 3, 1, 5),
	(4, 1, 4, 2, 5),
	(5, 1, 5, 0, NULL),
	(6, 1, 6, 0, NULL),
	(7, 1, 7, 0, NULL),
	(8, 1, 8, 0, NULL),
	(9, 2, 1, 0, NULL),
	(10, 2, 2, 0, NULL),
	(11, 2, 3, 2, 5),
	(12, 2, 4, 2, 5),
	(13, 2, 5, 2, 5),
	(14, 2, 6, 0, NULL),
	(15, 2, 7, 0, NULL),
	(16, 2, 8, 1, 1),
	(17, 3, 1, 0, NULL),
	(18, 3, 2, 0, NULL),
	(19, 3, 4, 2, 5),
	(20, 3, 5, 2, 5),
	(21, 3, 6, 0, NULL),
	(22, 3, 7, 0, NULL),
	(23, 3, 8, 0, NULL),
	(24, 4, 1, 0, NULL),
	(25, 4, 2, 0, NULL),
	(26, 4, 3, 0, NULL),
	(27, 4, 4, 0, NULL),
	(28, 4, 5, 0, NULL),
	(29, 4, 6, 2, 5),
	(30, 4, 7, 0, NULL),
	(31, 4, 8, 0, NULL);
/*!40000 ALTER TABLE `sector1` ENABLE KEYS */;


-- Dumping structure for таблиця football.sector2
CREATE TABLE IF NOT EXISTS `sector2` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `ряд` int(11) NOT NULL DEFAULT '0',
  `місце` int(11) NOT NULL DEFAULT '0',
  `active` int(11) NOT NULL DEFAULT '0',
  `user_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=32 DEFAULT CHARSET=utf8;

-- Dumping data for table football.sector2: ~31 rows (приблизно)
/*!40000 ALTER TABLE `sector2` DISABLE KEYS */;
INSERT INTO `sector2` (`id`, `ряд`, `місце`, `active`, `user_id`) VALUES
	(1, 1, 1, 2, 5),
	(2, 1, 2, 1, 5),
	(3, 1, 3, 0, NULL),
	(4, 1, 4, 0, NULL),
	(5, 1, 5, 2, 5),
	(6, 1, 6, 0, NULL),
	(7, 1, 7, 0, NULL),
	(8, 1, 8, 0, NULL),
	(9, 2, 1, 0, NULL),
	(10, 2, 2, 0, NULL),
	(11, 2, 3, 0, NULL),
	(12, 2, 4, 0, NULL),
	(13, 2, 5, 0, NULL),
	(14, 2, 6, 0, NULL),
	(15, 2, 7, 0, NULL),
	(16, 2, 8, 0, NULL),
	(17, 3, 1, 0, NULL),
	(18, 3, 2, 0, NULL),
	(19, 3, 4, 0, NULL),
	(20, 3, 5, 0, NULL),
	(21, 3, 6, 0, NULL),
	(22, 3, 7, 0, NULL),
	(23, 3, 8, 0, NULL),
	(24, 4, 1, 0, NULL),
	(25, 4, 2, 0, NULL),
	(26, 4, 3, 0, NULL),
	(27, 4, 5, 0, NULL),
	(28, 4, 6, 0, NULL),
	(29, 4, 7, 0, NULL),
	(30, 4, 8, 0, NULL),
	(31, 4, 4, 0, NULL);
/*!40000 ALTER TABLE `sector2` ENABLE KEYS */;


-- Dumping structure for таблиця football.user
CREATE TABLE IF NOT EXISTS `user` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `auth_key` varchar(255) DEFAULT NULL,
  `email1` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8;

-- Dumping data for table football.user: ~2 rows (приблизно)
/*!40000 ALTER TABLE `user` DISABLE KEYS */;
INSERT INTO `user` (`id`, `username`, `password`, `auth_key`, `email1`) VALUES
	(1, 'sasha', '123', 'ju2467B-2YU3ZqCHv-1uV1s6rtwkyR79', 'ole-cherevko@yandex.ru'),
	(5, 'sasha123', '123', NULL, 'sashacherevk2o@yandex.ru');
/*!40000 ALTER TABLE `user` ENABLE KEYS */;
/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;

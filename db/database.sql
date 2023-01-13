CREATE DATABASE IF NOT EXISTS `php-pdo-crud-toets`;
USE `php-pdo-crud-toets`;

DROP TABLE IF EXISTS `DureAuto`;
CREATE TABLE IF NOT EXISTS `DureAuto` (
  `Id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT,
  `Merk` varchar(200),
  `Model` varchar(200),
  `Topsnelheid` smallint(4),
  `Prijs` varchar(200),
  PRIMARY KEY = `id`, ENGINE=InnoDB;

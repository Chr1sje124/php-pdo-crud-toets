CREATE DATABASE IF NOT EXISTS `php-pdo-crud-toets`DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `php-pdo-crud-toets`;

DROP TABLE IF EXISTS `DureAuto`;
CREATE TABLE IF NOT EXISTS `DureAuto` (
  `Id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT,
  `Merk` varchar(200),
  `Model` varchar(200),
  `Topsnelheid` smallint(4),
  `Prijs` varchar(200),
 PRIMARY KEY (`Id`)
) ENGINE=InnoDB;

insert into DureAuto(`Merk`,`Model`,`Topsnelheid`,`Prijs`) values 
    ('Bugatti','La voiture noire',420,'16500000'),
    ('Rolls-Royce','Swaptail',250,'10960000'),
    ('Bugatti','EB110',390,'7500000'),
    ('Mercedes-Benz','Maybach Exelero',350,'6700000'),
    ('Koenigsegg','CCXR Trevita',401,'4000000')
SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


DROP TABLE IF EXISTS `kapitan`;
CREATE TABLE IF NOT EXISTS `kapitan` (
  `id` int(100) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `price` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=34 DEFAULT CHARSET=latin1;


INSERT INTO `kapitan` (`id`, `name`, `price`, `image`) VALUES
(1, 'Chicken Briyani Claypot', '11.50', 'ChickenBriyani.jpg'),
(2, 'Ayam Tandoori Briyani Claypot', '13.50', 'TandooriBriyani.jpg'),
(3, 'Mutton Briyani Claypot', '12.50', 'MuttonBriyani.jpg'),
(4, 'Duck Briyani Claypot', '16.50', 'DuckBriyani.jpg');
COMMIT;


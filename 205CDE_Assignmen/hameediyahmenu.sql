SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


DROP TABLE IF EXISTS `hameediyah`;
CREATE TABLE IF NOT EXISTS `hameediyah` (
  `id` int(100) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `price` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=34 DEFAULT CHARSET=latin1;


INSERT INTO `hameediyah` (`id`, `name`, `price`, `image`) VALUES
(31, 'Biryani Ayam Goreng Rempah', '14.00', 'AyamTelurMasinBriyani.jpg'),
(29, 'Biryani Udang', '18.00', 'UdangBriyani.jpg'),
(30, 'Biryani Ayam Bawang', '16.50', 'AyamBawangBriyani.jpg'),
(28, 'Biryani Ayam', '12.50', 'AyamBriyani.jpg'),
(27, 'Biryani Telur Ikan', '17.90', 'TelurIkanBriyani.jpg'),
(26, 'Biryani Kari Kepala Ikan', '27.90', 'KariKepalaIkan.jpg');
COMMIT;


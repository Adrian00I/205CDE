SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


DROP TABLE IF EXISTS `tajuddin`;
CREATE TABLE IF NOT EXISTS `tajuddin` (
  `id` int(100) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `price` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=34 DEFAULT CHARSET=latin1;


INSERT INTO `hameediyah` (`id`, `name`, `price`, `image`) VALUES
(99, 'Biryani Ayam Ros', '14.00', 'BriyaniAyamRos.jpg'),
(98, 'Biryani Ayam Goreng', '18.00', 'BriyaniAyamGoreng.jpg'),
(97, 'Biryani Ayam Ayam', '16.50', 'AyamBawangBriyani.jpg'),
(96, 'Biryani Burung Puyuh', '12.50', 'BriyaniBurungPuyuh.jpg'),
(95, 'Biryani Sotong', '17.90', 'BriyaniSotong.jpg'),
(94, 'Biryani Teh Tarik', '27.90', 'BriyaniTehTarik.jpg');
COMMIT;


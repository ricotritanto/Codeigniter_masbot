-- phpMyAdmin SQL Dump
-- version 3.2.4
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Oct 03, 2018 at 01:25 
-- Server version: 5.1.41
-- PHP Version: 5.3.1

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `robotic`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_about`
--

CREATE TABLE IF NOT EXISTS `tbl_about` (
  `id_about` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(100) NOT NULL,
  `deskripsi` text NOT NULL,
  PRIMARY KEY (`id_about`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `tbl_about`
--

INSERT INTO `tbl_about` (`id_about`, `title`, `deskripsi`) VALUES
(1, 'About Us', '<!DOCTYPE html>\r\n<html>\r\n<head>\r\n</head>\r\n<body>\r\n<h1 style="color: #ff0000;"><strong>VISI</strong>:</h1>\r\n<p style="padding-left: 30px;"><span style="font-family: terminal, monaco, monospace;"><strong>A simpler and connected world for everyone, everyday</strong></span></p>\r\n<h1 style="color: #ff0000;"><strong> MISSION: </strong></h1>\r\n<ol>\r\n<li><span style="font-family: terminal, monaco, monospace; font-size: 8pt;"><strong>To drive progressive technology development globally by embracing collaborative strategy, innovative solutions, and learning. </strong></span></li>\r\n<li><span style="font-family: terminal, monaco, monospace; font-size: 8pt;"><strong>To serve as a suitable platform for talented individuals to catalyze the evolution of our digital ecosystem.</strong></span></li>\r\n</ol>\r\n</body>\r\n</html>');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_contact`
--

CREATE TABLE IF NOT EXISTS `tbl_contact` (
  `id_contact` int(11) NOT NULL AUTO_INCREMENT,
  `alamat` text NOT NULL,
  `phone1` varchar(14) NOT NULL,
  `phone2` varchar(14) NOT NULL,
  `phone3` varchar(14) NOT NULL,
  `email` varchar(50) NOT NULL,
  `fax` varchar(14) NOT NULL,
  PRIMARY KEY (`id_contact`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `tbl_contact`
--

INSERT INTO `tbl_contact` (`id_contact`, `alamat`, `phone1`, `phone2`, `phone3`, `email`, `fax`) VALUES
(1, '<!DOCTYPE html>\r\n<html>\r\n<head>\r\n</head>\r\n<body>\r\n<p><strong>Gedung Panin Bank</strong></p>\r\n<p><span style="font-family: ''comic sans ms'', sans-serif;">Jl.Pandanaran No 6 - 8</span></p>\r\n<p><span style="font-family: ''comic sans ms'', sans-serif;">Semarang, Jawa Tengah</span></p>\r\n</body>\r\n</html>', '+62899097678', '+62813256789', '+62-', 'masbot@gmail.com', '+62217654567');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_project`
--

CREATE TABLE IF NOT EXISTS `tbl_project` (
  `id_project` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(50) NOT NULL,
  `company` varchar(50) NOT NULL,
  `link` varchar(100) NOT NULL,
  `tahun` year(4) NOT NULL,
  `deskripsi` text NOT NULL,
  `gambar` varchar(100) NOT NULL,
  PRIMARY KEY (`id_project`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Dumping data for table `tbl_project`
--


-- --------------------------------------------------------

--
-- Table structure for table `tbl_work`
--

CREATE TABLE IF NOT EXISTS `tbl_work` (
  `id_work` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(50) NOT NULL,
  `deskripsi` text NOT NULL,
  `gambar` varchar(255) NOT NULL,
  PRIMARY KEY (`id_work`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=12 ;

--
-- Dumping data for table `tbl_work`
--

INSERT INTO `tbl_work` (`id_work`, `title`, `deskripsi`, `gambar`) VALUES
(10, 'DEVELOP.', '<!DOCTYPE html>\r\n<html>\r\n<head>\r\n</head>\r\n<body>\r\n<p><span style="background-color: #ffff99;">Incorporate technical components with implementation within a highly functional system, ready to review.</span></p>\r\n</body>\r\n</html>', '619399efabcdafe36cc9824a0523cb5e.png'),
(11, 'REPEAT.', '<!DOCTYPE html>\r\n<html>\r\n<head>\r\n</head>\r\n<body>\r\n<p><span style="background-color: #ffff99;">Review, refine, re-test, and prepare the final product for delivery. Launch and continue to improve over time.</span></p>\r\n</body>\r\n</html>', 'dcf96ab24f686c053dadd1fd663f63ac.png'),
(9, 'CRAFT.', '<!DOCTYPE html>\r\n<html>\r\n<head>\r\n</head>\r\n<body>\r\n<p><span style="background-color: #ccffcc;">Design a well-integrated digital strategy to support the business/ marketing/ creative/ digital objectives, which will have a role as the guidance for the entire project.</span></p>\r\n</body>\r\n</html>', '56c8066762aa190b90a9abded0ec648a.png'),
(8, 'DISCOVER.', '<!DOCTYPE html>\r\n<html>\r\n<head>\r\n</head>\r\n<body>\r\n<p><span style="background-color: #ccffff;">Go deep into what&rsquo;s the project is all about, the audience, the business/ marketing/ creative/ digital objectives, to formulate a well-integrated digital strategy.</span></p>\r\n</body>\r\n</html>', 'f8e8c90543bf88844d3301552d0e20e1.png');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

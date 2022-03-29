-- phpMyAdmin SQL Dump
-- version 4.8.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Sep 22, 2019 at 08:21 AM
-- Server version: 5.7.23
-- PHP Version: 7.1.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `barangmainan`
--

-- --------------------------------------------------------

--
-- Table structure for table `jadualmainan`
--

CREATE TABLE `jadualmainan` (
  `kod_produk` varchar(5) NOT NULL,
  `nama_produk` varchar(100) NOT NULL,
  `harga` decimal(8,0) NOT NULL,
  `kuantiti` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `jadualmainan`
--

INSERT INTO `jadualmainan` (`kod_produk`, `nama_produk`, `harga`, `kuantiti`) VALUES
('P02', 'trolley', '50', 1),
('P01', 'lori', '25', 1),
('P03', 'LEGO', '2', 100);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

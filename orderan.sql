-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 29, 2024 at 03:27 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `orderan`
--

-- --------------------------------------------------------

--
-- Table structure for table `customers`
--

CREATE TABLE `customers` (
  `id` int(11) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `alamat` varchar(50) NOT NULL,
  `no_telp` varchar(13) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `customers`
--

INSERT INTO `customers` (`id`, `nama`, `alamat`, `no_telp`) VALUES
(1, 'Devan', 'Bali', '123456789102'),
(3, 'anna', 'jawa timur', '3872947284928'),
(4, 'adi', 'jawa tengah', '9832872074212'),
(8, 'titi', 'jawa barat', '9830174892019'),
(10, 'mama', 'papua', '4988208402'),
(11, 'dadang', 'Jawa timur', '9748919871'),
(12, 'amer', 'jawa tengah', '88720402425'),
(13, 'made', 'bali', '7871049108-14'),
(14, 'mamat', 'papua', '1097491848793'),
(15, 'agus', 'jawa tengah', '9801482525835'),
(16, 'asep', 'jawa barat', '7903479883533'),
(17, 'tiya', 'jawa barat', '792490841089');

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` int(11) NOT NULL,
  `tgl_order` date NOT NULL,
  `jumlah_pesanan` int(11) NOT NULL,
  `total_pesanan` int(11) NOT NULL,
  `id_customers` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`id`, `tgl_order`, `jumlah_pesanan`, `total_pesanan`, `id_customers`) VALUES
(1, '2024-02-27', 5, 50000, 1),
(2, '2024-02-27', 2, 20000, 3),
(3, '2024-02-27', 10, 100000, 4),
(4, '2024-02-28', 3, 15000, 8),
(5, '2024-02-28', 3, 15000, 8),
(6, '2024-02-29', 5, 50000, 10),
(7, '2024-02-29', 10, 100000, 11),
(8, '2024-02-29', 7, 140000, 12),
(9, '2024-03-01', 4, 80000, 13),
(10, '2024-03-02', 9, 180000, 14),
(11, '2024-03-02', 1, 15000, 15),
(12, '2024-03-03', 11, 121000, 16),
(13, '2024-03-04', 17, 321000, 17);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `customers`
--
ALTER TABLE `customers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_customers` (`id_customers`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `customers`
--
ALTER TABLE `customers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `orders`
--
ALTER TABLE `orders`
  ADD CONSTRAINT `orders_ibfk_1` FOREIGN KEY (`id_customers`) REFERENCES `customers` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

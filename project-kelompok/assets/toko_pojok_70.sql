-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 28, 2019 at 05:23 AM
-- Server version: 10.4.8-MariaDB
-- PHP Version: 7.3.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `toko_pojok_70`
--

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `id_category` varchar(20) NOT NULL,
  `category_name` varchar(45) NOT NULL,
  `gender` varchar(1) NOT NULL,
  `id_parent` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`id_category`, `category_name`, `gender`, `id_parent`) VALUES
('DS01', 'Dress Lengan Pendek', 'F', NULL),
('DS02', 'Dress Lengan Panjang', 'F', NULL),
('KL01', 'Kaos Lengan Panjang Cewek', 'F', NULL),
('KS01', 'Kaos Cewek', 'F', NULL),
('KS02', 'Kaos Cowok', 'M', NULL),
('SP01', 'Sepatu Cewek', 'F', NULL),
('SP02', 'Sepatu Sandal Cewek', 'F', NULL),
('SP03', 'Sepatu Cowok', 'M', NULL),
('SP04', 'Sepatu Sandal Cowok', 'M', NULL),
('ST01', 'Setelan Pendek Cewek', 'F', NULL),
('ST02', 'Setelan Panjang Cewek', 'F', NULL),
('ST03', 'Setelan Pendek Cowok', 'M', NULL),
('ST04', 'Setelan Panjang Cowok', 'M', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `password` varchar(100) NOT NULL,
  `jenis_kelamin` varchar(20) DEFAULT NULL,
  `fullname` varchar(100) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `telepon` varchar(30) DEFAULT NULL,
  `provinsi` varchar(100) DEFAULT NULL,
  `kab_kota` varchar(100) DEFAULT NULL,
  `kecamatan` varchar(100) DEFAULT NULL,
  `kelurahan` varchar(100) DEFAULT NULL,
  `kode_pos` varchar(50) DEFAULT NULL,
  `alamat` text DEFAULT NULL,
  `username` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`password`, `jenis_kelamin`, `fullname`, `email`, `telepon`, `provinsi`, `kab_kota`, `kecamatan`, `kelurahan`, `kode_pos`, `alamat`, `username`) VALUES
('7110eda4d09e062aa5e4a390b0a572ac0d2c0220', 'female', 'Priscilla', 'r.tanamal@ciputra.ac.id', '089787687', 'jawa-timur', 'surabaya', 'tenggilis-mejoyo', 'prapen', '12345', 'sndckjabshdbfasc', 'pvannyamelia');

-- --------------------------------------------------------

--
-- Table structure for table `delivery`
--

CREATE TABLE `delivery` (
  `id_delivery` varchar(20) NOT NULL,
  `delivery_status` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `delivery`
--

INSERT INTO `delivery` (`id_delivery`, `delivery_status`) VALUES
('0', 'Undelivered'),
('1', 'Delivered'),
('2', 'On Delivery'),
('3', 'Received');

-- --------------------------------------------------------

--
-- Table structure for table `delivery_details`
--

CREATE TABLE `delivery_details` (
  `transaction_id` varchar(20) NOT NULL,
  `id_delivery` varchar(20) NOT NULL,
  `alamat` text NOT NULL,
  `kode_pos` varchar(50) NOT NULL,
  `kelurahan` varchar(100) NOT NULL,
  `kecamatan` varchar(100) NOT NULL,
  `kab_kota` varchar(100) NOT NULL,
  `provinsi` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `delivery_details`
--

INSERT INTO `delivery_details` (`transaction_id`, `id_delivery`, `alamat`, `kode_pos`, `kelurahan`, `kecamatan`, `kab_kota`, `provinsi`) VALUES
('201911201', '0', 'aaaaaaaaaaaaa', '80976', 'bbbbb', 'ccccccc', 'ddddd', 'eeeee');

-- --------------------------------------------------------

--
-- Table structure for table `ekspedisi`
--

CREATE TABLE `ekspedisi` (
  `Id_ekspedisi` varchar(20) NOT NULL,
  `Nama_ekspedisi` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `payment_method`
--

CREATE TABLE `payment_method` (
  `id_payment_method` varchar(20) NOT NULL,
  `payment_method` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `payment_method`
--

INSERT INTO `payment_method` (`id_payment_method`, `payment_method`) VALUES
('BABC', 'Bank ABC'),
('BCBA', 'Bank CBA'),
('CSH', 'Cash'),
('EMOVO', 'OVO');

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `id_product` varchar(20) NOT NULL,
  `id_category` varchar(20) NOT NULL,
  `bundling` tinyint(1) UNSIGNED NOT NULL DEFAULT 0,
  `Product_name` varchar(45) NOT NULL,
  `Product_desc` longtext NOT NULL,
  `min_stock` tinyint(2) UNSIGNED NOT NULL DEFAULT 0,
  `Price` bigint(20) UNSIGNED NOT NULL,
  `jumlah_foto` int(11) NOT NULL,
  `Discount_price` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`id_product`, `id_category`, `bundling`, `Product_name`, `Product_desc`, `min_stock`, `Price`, `jumlah_foto`, `Discount_price`) VALUES
('D4851', 'ST01', 0, 'Sailor', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.', 0, 120000, 4, NULL),
('D4852', 'ST01', 0, 'Love Birds', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.', 0, 120000, 3, NULL),
('D6302', 'SP02', 0, 'Floral', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.', 0, 100000, 1, NULL),
('D6304', 'SP02', 0, 'Beads & Flower', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.', 0, 220000, 1, NULL),
('D6305', 'SP02', 0, 'Bunny', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.', 0, 200000, 2, NULL),
('D6508', 'SP03', 0, '2 Colors', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.', 0, 230000, 3, NULL),
('D6601', 'SP04', 0, 'Suprelo', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.', 0, 230000, 2, NULL),
('D6602', 'SP03', 0, 'Thunder', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.', 0, 250000, 1, NULL),
('D6603', 'SP03', 0, 'LED', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.', 0, 280000, 3, NULL),
('D6604', 'SP01', 0, 'Adidas', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.', 0, 340000, 0, NULL),
('D6605', 'SP01', 0, 'Girl Camo', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.', 0, 200000, 1, NULL),
('D6606', 'SP03', 0, 'Boy Camo', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.', 0, 200000, 1, NULL),
('D8605', 'ST03', 0, 'XSB', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.', 0, 120000, 2, NULL),
('D8606', 'ST03', 0, 'Trees', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.', 0, 100000, 2, NULL),
('R4804', 'DS01', 0, 'Ribbon', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.', 0, 180000, 3, NULL),
('R4805', 'DS02', 0, 'Kittens', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.', 0, 200000, 2, NULL),
('R4806', 'DS01', 0, 'Tutu', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.', 0, 190000, 4, NULL),
('R4807', 'DS01', 0, 'Floral Dress', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.', 0, 200000, 2, NULL),
('R6204', 'SP01', 0, 'Mushroom', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.', 0, 200000, 2, NULL),
('R8601', 'ST04', 0, 'Royal Clothes', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.', 0, 130000, 2, NULL),
('R8602', 'ST04', 0, 'Setelan Panjang Cowok Elephant', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.', 0, 100000, 5, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `product_detail`
--

CREATE TABLE `product_detail` (
  `id_product_detail` varchar(20) NOT NULL,
  `id_product` varchar(20) NOT NULL,
  `ukuran` varchar(45) DEFAULT NULL,
  `warna` varchar(45) DEFAULT NULL,
  `Jumlah` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `product_detail`
--

INSERT INTO `product_detail` (`id_product_detail`, `id_product`, `ukuran`, `warna`, `Jumlah`) VALUES
('PDD48511', 'D4851', 'S', 'Putih - Biru', 3),
('PDD48512', 'D4851', 'M', 'Putih - Biru', 2),
('PDD48513', 'D4851', 'L', 'Putih - Biru', 1),
('PDD48514', 'D4851', 'XL', 'Putih - Biru', 4),
('PDD48521', 'D4852', 'S', 'Biru', 3),
('PDD48522', 'D4852', 'M', 'Biru', 2),
('PDD48523', 'D4852', 'L', 'Kuning', 5),
('PDD48524', 'D4852', 'XL', 'Kuning', 3),
('PDD63021', 'D6302', '25', 'Pink', 2),
('PDD63022', 'D6302', '26', 'Pink', 3),
('PDD63023', 'D6302', '27', 'Pink', 2),
('PDD63024', 'D6302', '28', 'Pink', 3),
('PDD63025', 'D6302', '29', 'Pink', 1),
('PDD63041', 'D6304', '25', 'Putih', 3),
('PDD63042', 'D6304', '26', 'Putih', 2),
('PDD63043', 'D6304', '27', 'Putih', 1),
('PDD63044', 'D6304', '28', 'Putih', 4),
('PDD63045', 'D6304', '28', 'Putih', 3),
('PDD63051', 'D6305', '24', 'Hitam', 2),
('PDD63052', 'D6305', '25', 'Hitam', 3),
('PDD63053', 'D6305', '26', 'Hitam', 4),
('PDD63054', 'D6305', '27', 'Hitam', 4),
('PDD63055', 'D6305', '28', 'Putih', 1),
('PDD63056', 'D6305', '29', 'Putih', 2),
('PDD63057', 'D6305', '30', 'Putih', 3),
('PDD63058', 'D6305', '31', 'Putih', 2),
('PDD65081', 'D6508', '21', 'Merah - Biru', 3),
('PDD65082', 'D6508', '22', 'Merah - Biru', 1),
('PDD65083', 'D6508', '23', 'Merah - Biru', 2),
('PDD65084', 'D6508', '24', 'Merah - Biru', 3),
('PDD65085', 'D6508', '25', 'Merah - Biru', 2),
('PDD65086', 'D6508', '26', 'Merah - Biru', 4),
('PDD65087', 'D6508', '27', 'Merah - Biru', 1),
('PDD66011', 'D6601', '23', 'Biru', 3),
('PDD66012', 'D6601', '24', 'Biru', 2),
('PDD66013', 'D6601', '25', 'Biru', 1),
('PDD66014', 'D6601', '26', 'Biru', 4),
('PDD66015', 'D6601', '27', 'Biru', 2),
('PDD66021', 'D6602', '23', 'Hitam', 3),
('PDD66022', 'D6602', '24', 'Hitam', 2),
('PDD66023', 'D6602', '25', 'Hitam', 1),
('PDD66024', 'D6602', '26', 'Hitam', 4),
('PDD66025', 'D6602', '27', 'Hitam', 2),
('PDD66031', 'D6603', '23', 'Abu - Abu', 3),
('PDD66032', 'D6603', '24', 'Abu - Abu', 2),
('PDD66033', 'D6603', '25', 'Abu - Abu', 1),
('PDD66034', 'D6603', '26', 'Abu - Abu', 4),
('PDD66035', 'D6603', '27', 'Abu - Abu', 2),
('PDD66041', 'D6604', '23', 'Pink', 3),
('PDD66042', 'D6604', '24', 'Pink', 2),
('PDD66043', 'D6604', '25', 'Pink', 1),
('PDD66044', 'D6604', '26', 'Pink', 4),
('PDD66045', 'D6604', '27', 'Pink', 2),
('PDD66051', 'D6605', '23', 'Pink', 3),
('PDD66052', 'D6605', '24', 'Pink', 2),
('PDD66053', 'D6605', '25', 'Pink', 1),
('PDD66054', 'D6605', '26', 'Pink', 4),
('PDD66055', 'D6605', '27', 'Pink', 2),
('PDD66061', 'D6606', '23', 'Hitam', 3),
('PDD66062', 'D6606', '24', 'Hitam', 2),
('PDD66063', 'D6606', '25', 'Hitam', 1),
('PDD66064', 'D6606', '26', 'Hitam', 4),
('PDD66065', 'D6606', '27', 'Hitam', 2),
('PDD86051', 'D8605', 'S', 'Biru', 3),
('PDD86052', 'D8605', 'M', 'Biru', 2),
('PDD86053', 'D8605', 'L', 'Biru', 1),
('PDD86054', 'D8605', 'XL', 'Biru', 4),
('PDD86061', 'D8606', 'S', 'Abu - Abu', 3),
('PDD86062', 'D8606', 'M', 'Abu - Abu', 2),
('PDD86063', 'D8606', 'L', 'Abu - Abu', 1),
('PDD86064', 'D8606', 'XL', 'Abu - Abu', 4),
('PDR48041', 'R4804', 'S', 'Hijau', 3),
('PDR48042', 'R4804', 'M', 'Hijau', 2),
('PDR48043', 'R4804', 'L', 'Abu - Abu', 1),
('PDR48044', 'R4804', 'XL', 'Merah', 4),
('PDR48051', 'R4805', 'S', 'Hijau', 3),
('PDR48052', 'R4805', 'M', 'Hijau', 2),
('PDR48053', 'R4805', 'L', 'Abu  - Abu', 1),
('PDR48054', 'R4805', 'XL', 'Merah', 4),
('PDR48061', 'R4806', 'S', 'Pink', 3),
('PDR48062', 'R4806', 'M', 'Pink', 2),
('PDR48063', 'R4806', 'L', 'Pink', 1),
('PDR48064', 'R4806', 'XL', 'Pink', 4),
('PDR48071', 'R4807', 'S', 'Pink - Putih', 3),
('PDR48072', 'R4807', 'M', 'Pink - Putih', 2),
('PDR48073', 'R4807', 'L', 'Pink - Putih', 1),
('PDR48074', 'R4807', 'XL', 'Pink - Putih', 4),
('PDR62041', 'R6204', '21', 'Pink', 3),
('PDR620410', 'R6204', '25', 'Putih', 4),
('PDR62042', 'R6204', '22', 'Pink', 2),
('PDR62043', 'R6204', '23', 'Pink', 1),
('PDR62044', 'R6204', '24', 'Pink', 4),
('PDR62045', 'R6204', '25', 'Pink', 4),
('PDR62046', 'R6204', '21', 'Putih', 3),
('PDR62047', 'R6204', '22', 'Putih', 2),
('PDR62048', 'R6204', '23', 'Putih', 1),
('PDR62049', 'R6204', '24', 'Putih', 4),
('PDR86011', 'R8601', 'XL', 'Biru', 2),
('PDR86012', 'R8601', 'L', 'Kuning', 4),
('PDR86021', 'R8602', 'XL', 'Biru', 2),
('PDR86022', 'R8602', 'L', 'Kuning', 4),
('PDR86023', 'R8602', 'M', 'Putih', 1),
('PDR86024', 'R8602', 'S', 'Orange', 1);

-- --------------------------------------------------------

--
-- Table structure for table `review`
--

CREATE TABLE `review` (
  `Id_transaction` varchar(20) NOT NULL,
  `id_product_detail` varchar(20) NOT NULL,
  `Star_rating` double NOT NULL,
  `Review` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `transaction`
--

CREATE TABLE `transaction` (
  `transaction_id` varchar(20) NOT NULL,
  `session_id` varchar(500) DEFAULT NULL,
  `date` date DEFAULT NULL,
  `total_transaction` double DEFAULT NULL,
  `username` varchar(20) DEFAULT NULL,
  `total_discount` double DEFAULT NULL,
  `id_payment_method` varchar(20) DEFAULT NULL,
  `payment_status` tinyint(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `transaction`
--

INSERT INTO `transaction` (`transaction_id`, `session_id`, `date`, `total_transaction`, `username`, `total_discount`, `id_payment_method`, `payment_status`) VALUES
('201911201', 'a', '2019-11-20', 375000, 'pvannyamelia', 0, 'CSH', 0),
('201911271', 'b', '2019-11-27', 500000, 'pvannyamelia', 0, 'BABC', 1);

-- --------------------------------------------------------

--
-- Table structure for table `transaction_detail`
--

CREATE TABLE `transaction_detail` (
  `transaction_detail_id` varchar(20) NOT NULL,
  `transaction_id` varchar(20) DEFAULT NULL,
  `id_product_detail` varchar(20) DEFAULT NULL,
  `harga_jual_satuan` double DEFAULT NULL,
  `jumlah_product` tinyint(3) DEFAULT NULL,
  `total_harga` double DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `transaction_detail`
--

INSERT INTO `transaction_detail` (`transaction_detail_id`, `transaction_id`, `id_product_detail`, `harga_jual_satuan`, `jumlah_product`, `total_harga`) VALUES
('201911201-1', '201911201', 'PDD48511', 125000, 3, 375000),
('201911271-1', '201911271', 'PDD66022', 250000, 1, 250000),
('201911271-2', '201911271', 'PDR86011', 130000, 1, 130000),
('201911271-3', '201911271', 'PDD86053', 120000, 1, 120000);

-- --------------------------------------------------------

--
-- Table structure for table `user_voucher`
--

CREATE TABLE `user_voucher` (
  `username` varchar(20) NOT NULL,
  `Id_voucher` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `voucher`
--

CREATE TABLE `voucher` (
  `id_voucher` varchar(20) NOT NULL,
  `id_voucher_type` varchar(20) NOT NULL,
  `Voucher_name` varchar(45) NOT NULL,
  `Voucher_desc` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `voucher_type`
--

CREATE TABLE `voucher_type` (
  `Id_Voucher_type` varchar(20) NOT NULL,
  `Voucher_type_name` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `voucher_used`
--

CREATE TABLE `voucher_used` (
  `id_voucher` varchar(20) NOT NULL,
  `id_transaction` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `wishlist`
--

CREATE TABLE `wishlist` (
  `username` varchar(20) NOT NULL,
  `Id_product_detail` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`id_category`);

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`username`) USING BTREE;

--
-- Indexes for table `delivery`
--
ALTER TABLE `delivery`
  ADD PRIMARY KEY (`id_delivery`);

--
-- Indexes for table `delivery_details`
--
ALTER TABLE `delivery_details`
  ADD KEY `transaction_id` (`transaction_id`),
  ADD KEY `id_delivery` (`id_delivery`);

--
-- Indexes for table `ekspedisi`
--
ALTER TABLE `ekspedisi`
  ADD PRIMARY KEY (`Id_ekspedisi`) USING BTREE;

--
-- Indexes for table `payment_method`
--
ALTER TABLE `payment_method`
  ADD PRIMARY KEY (`id_payment_method`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`id_product`),
  ADD KEY `FK_product_1` (`id_category`);

--
-- Indexes for table `product_detail`
--
ALTER TABLE `product_detail`
  ADD PRIMARY KEY (`id_product_detail`),
  ADD KEY `Id_product_detail` (`id_product`);

--
-- Indexes for table `review`
--
ALTER TABLE `review`
  ADD KEY `FK_Review_1` (`Id_transaction`),
  ADD KEY `FK_Review_2` (`id_product_detail`);

--
-- Indexes for table `transaction`
--
ALTER TABLE `transaction`
  ADD PRIMARY KEY (`transaction_id`),
  ADD KEY `username` (`username`),
  ADD KEY `id_payment_method` (`id_payment_method`);

--
-- Indexes for table `transaction_detail`
--
ALTER TABLE `transaction_detail`
  ADD PRIMARY KEY (`transaction_detail_id`),
  ADD KEY `transaction_id` (`transaction_id`),
  ADD KEY `id_product_detail` (`id_product_detail`);

--
-- Indexes for table `user_voucher`
--
ALTER TABLE `user_voucher`
  ADD KEY `Id_customer` (`username`),
  ADD KEY `Id_voucher` (`Id_voucher`);

--
-- Indexes for table `voucher`
--
ALTER TABLE `voucher`
  ADD PRIMARY KEY (`id_voucher`) USING BTREE;

--
-- Indexes for table `voucher_type`
--
ALTER TABLE `voucher_type`
  ADD PRIMARY KEY (`Id_Voucher_type`) USING BTREE;

--
-- Indexes for table `voucher_used`
--
ALTER TABLE `voucher_used`
  ADD KEY `Voucher_id` (`id_voucher`),
  ADD KEY `transaction_id` (`id_transaction`);

--
-- Indexes for table `wishlist`
--
ALTER TABLE `wishlist`
  ADD KEY `FK_wishlist_1` (`username`),
  ADD KEY `FK_wishlist_2` (`Id_product_detail`);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `delivery_details`
--
ALTER TABLE `delivery_details`
  ADD CONSTRAINT `delivery_details_ibfk_1` FOREIGN KEY (`transaction_id`) REFERENCES `transaction` (`transaction_id`),
  ADD CONSTRAINT `delivery_details_ibfk_2` FOREIGN KEY (`id_delivery`) REFERENCES `delivery` (`id_delivery`);

--
-- Constraints for table `product`
--
ALTER TABLE `product`
  ADD CONSTRAINT `FK_product_1` FOREIGN KEY (`id_category`) REFERENCES `category` (`id_category`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `product_detail`
--
ALTER TABLE `product_detail`
  ADD CONSTRAINT `Id_product_detail` FOREIGN KEY (`id_product`) REFERENCES `product` (`id_product`);

--
-- Constraints for table `transaction`
--
ALTER TABLE `transaction`
  ADD CONSTRAINT `transaction_ibfk_1` FOREIGN KEY (`username`) REFERENCES `customer` (`username`),
  ADD CONSTRAINT `transaction_ibfk_2` FOREIGN KEY (`id_payment_method`) REFERENCES `payment_method` (`id_payment_method`);

--
-- Constraints for table `transaction_detail`
--
ALTER TABLE `transaction_detail`
  ADD CONSTRAINT `transaction_detail_ibfk_1` FOREIGN KEY (`transaction_id`) REFERENCES `transaction` (`transaction_id`),
  ADD CONSTRAINT `transaction_detail_ibfk_2` FOREIGN KEY (`id_product_detail`) REFERENCES `product_detail` (`id_product_detail`);

--
-- Constraints for table `user_voucher`
--
ALTER TABLE `user_voucher`
  ADD CONSTRAINT `Id_customer` FOREIGN KEY (`username`) REFERENCES `customer` (`username`),
  ADD CONSTRAINT `Id_voucher` FOREIGN KEY (`Id_voucher`) REFERENCES `voucher` (`id_voucher`);

--
-- Constraints for table `wishlist`
--
ALTER TABLE `wishlist`
  ADD CONSTRAINT `FK_wishlist_1` FOREIGN KEY (`username`) REFERENCES `customer` (`username`),
  ADD CONSTRAINT `FK_wishlist_2` FOREIGN KEY (`Id_product_detail`) REFERENCES `product_detail` (`id_product_detail`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

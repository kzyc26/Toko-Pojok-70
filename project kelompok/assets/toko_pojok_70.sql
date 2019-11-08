-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 08, 2019 at 04:05 AM
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
  `category_name` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`id_category`, `category_name`) VALUES
('DS01', 'Dress Lengan Pendek'),
('DS02', 'Dress Lengan Panjang'),
('KL01', 'Kaos Lengan Panjang Cewek'),
('KS01', 'Kaos Cewek'),
('KS02', 'Kaos Cowok'),
('SP01', 'Sepatu Cewek'),
('SP02', 'Sepatu Sandal Cewek'),
('SP03', 'Sepatu Cowok'),
('SP04', 'Sepatu Sandal Cowok'),
('ST01', 'Setelan Pendek Cewek'),
('ST02', 'Setelan Panjang Cewek'),
('ST03', 'Setelan Pendek Cowok'),
('ST04', 'Setelan Panjang Cowok');

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `username` varchar(100) NOT NULL,
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
  `alamat` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

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
('1', 'Delivered');

-- --------------------------------------------------------

--
-- Table structure for table `employee`
--

CREATE TABLE `employee` (
  `id_employee` varchar(20) NOT NULL,
  `employee_name` varchar(45) NOT NULL,
  `telp` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `employee`
--

INSERT INTO `employee` (`id_employee`, `employee_name`, `telp`) VALUES
('A001', 'Ahmad Santoso', '089777654894'),
('A002', 'Andi Syahputra', '081237497096'),
('D001', 'Diana Putri', '081345672899');

-- --------------------------------------------------------

--
-- Table structure for table `gudang`
--

CREATE TABLE `gudang` (
  `id_product_detail` varchar(20) NOT NULL,
  `stock_display` int(10) UNSIGNED DEFAULT NULL,
  `stock_gudang` int(10) UNSIGNED DEFAULT NULL,
  `jumlah_stock_total` int(10) UNSIGNED DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `gudang`
--

INSERT INTO `gudang` (`id_product_detail`, `stock_display`, `stock_gudang`, `jumlah_stock_total`) VALUES
('PDD48511', 1, 1, 2),
('PDD48512', 1, 0, 1),
('PDD63021', 0, 1, 1),
('PDD63022', 0, 0, 1),
('PDD63023', 1, 0, 1),
('PDD63024', 0, 1, 1),
('PDD63025', 0, 1, 1),
('PDD65081', 1, 0, 1),
('PDD65082', 0, 1, 1),
('PDD65083', 1, 0, 1),
('PDD65084', 0, 1, 1),
('PDD65085', 1, 0, 1),
('PDD86051', 0, 1, 1),
('PDD86052', 1, 0, 1),
('PDD86053', 0, 1, 1),
('PDD86054', 1, 0, 1),
('PDD86055', 0, 1, 1),
('PDR48041', 0, 1, 1),
('PDR48042', 0, 1, 1),
('PDR48043', 1, 0, 1),
('PDR48044', 0, 1, 1),
('PDR62041', 1, 0, 1),
('PDR620410', 1, 0, 1),
('PDR62042', 0, 1, 1),
('PDR62043', 0, 1, 1),
('PDR62044', 1, 0, 1),
('PDR62045', 0, 1, 1),
('PDR62046', 0, 1, 1),
('PDR62047', 0, 1, 1),
('PDR62048', 1, 0, 1),
('PDR62049', 1, 0, 1),
('PDR86011', 0, 1, 1),
('PDR86012', 0, 1, 1),
('PDR86013', 0, 1, 1),
('PDR86014', 1, 0, 1);

-- --------------------------------------------------------

--
-- Table structure for table `payment`
--

CREATE TABLE `payment` (
  `id_payment` varchar(20) NOT NULL,
  `id_PO` varchar(20) NOT NULL,
  `jumlah_dibayar` int(10) UNSIGNED NOT NULL,
  `tanggal` date NOT NULL,
  `id_payment_method` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `payment`
--

INSERT INTO `payment` (`id_payment`, `id_PO`, `jumlah_dibayar`, `tanggal`, `id_payment_method`) VALUES
('PMPO11', 'PO1', 10000000, '2019-04-20', 'TRF'),
('PMPO21', 'PO2', 1000000, '2019-05-01', 'TRF'),
('PMPO22', 'PO2', 1000000, '2019-05-08', 'TRF'),
('PMPO23', 'PO2', 1000000, '2019-05-15', 'TRF'),
('PMPO24', 'PO2', 1000000, '2019-05-22', 'TRF'),
('PMPO25', 'PO2', 1000000, '2019-05-29', 'TRF'),
('PMPO26', 'PO2', 1000000, '2019-06-07', 'TRF'),
('PMPO27', 'PO2', 2000000, '2019-06-15', 'TRF'),
('PMPO28', 'PO2', 500000, '2019-06-17', 'TRF'),
('PMPO29', 'PO2', 500000, '2019-06-21', 'TRF');

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
('AGS', 'Angsuran'),
('CCL', 'Cicilan'),
('CSH', 'Cash'),
('DBT', 'Debit'),
('DP', 'Bayar Di Muka'),
('TRF', 'Transfer');

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `id_product` varchar(20) NOT NULL,
  `harga_jual` int(10) UNSIGNED NOT NULL,
  `HPP` int(10) UNSIGNED NOT NULL,
  `id_category` varchar(20) NOT NULL,
  `bundling` tinyint(1) UNSIGNED NOT NULL DEFAULT 0,
  `id_supplier` varchar(20) NOT NULL,
  `discount_price` int(10) UNSIGNED NOT NULL DEFAULT 0,
  `min_stock` int(10) UNSIGNED DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`id_product`, `harga_jual`, `HPP`, `id_category`, `bundling`, `id_supplier`, `discount_price`, `min_stock`) VALUES
('D4851', 185000, 100000, 'ST01', 1, 'A001', 0, 0),
('D6302', 185000, 80000, 'SP02', 0, 'K001', 0, 0),
('D6508', 185000, 90000, 'SP04', 0, 'W001', 0, 0),
('D8605', 225000, 190000, 'ST03', 1, 'Y001', 0, 0),
('R4804', 275000, 210000, 'DS01', 0, 'A001', 0, 0),
('R6204', 225000, 180000, 'SP01', 0, 'G001', 0, 0),
('R8601', 195000, 100000, 'ST04', 1, 'Y001', 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `product_detail`
--

CREATE TABLE `product_detail` (
  `id_product_detail` varchar(20) NOT NULL,
  `id_product` varchar(20) NOT NULL,
  `ukuran` varchar(45) DEFAULT NULL,
  `warna` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `product_detail`
--

INSERT INTO `product_detail` (`id_product_detail`, `id_product`, `ukuran`, `warna`) VALUES
('PDD48511', 'D4851', 'L', 'Kuning'),
('PDD48512', 'D4851', 'XL', 'Biru'),
('PDD63021', 'D6302', '27', NULL),
('PDD63022', 'D6302', '28', NULL),
('PDD63023', 'D6302', '29', NULL),
('PDD63024', 'D6302', '30', NULL),
('PDD63025', 'D6302', '31', NULL),
('PDD65081', 'D6508', '27', NULL),
('PDD65082', 'D6508', '28', NULL),
('PDD65083', 'D6508', '29', NULL),
('PDD65084', 'D6508', '30', NULL),
('PDD65085', 'D6508', '31', NULL),
('PDD86051', 'D8605', '1', NULL),
('PDD86052', 'D8605', '2', NULL),
('PDD86053', 'D8605', '3', NULL),
('PDD86054', 'D8605', '4', NULL),
('PDD86055', 'D8605', '5', NULL),
('PDR48041', 'R4804', '70', NULL),
('PDR48042', 'R4804', '80', NULL),
('PDR48043', 'R4804', '90', NULL),
('PDR48044', 'R4804', '100', NULL),
('PDR62041', 'R6204', '21', 'Putih'),
('PDR620410', 'R6204', '25', 'Pink'),
('PDR62042', 'R6204', '21', 'Pink'),
('PDR62043', 'R6204', '22', 'Putih'),
('PDR62044', 'R6204', '22', 'Pink'),
('PDR62045', 'R6204', '23', 'Putih'),
('PDR62046', 'R6204', '23', 'Pink'),
('PDR62047', 'R6204', '24', 'Putih'),
('PDR62048', 'R6204', '24', 'Pink'),
('PDR62049', 'R6204', '25', 'Putih'),
('PDR86011', 'R8601', 'S', NULL),
('PDR86012', 'R8601', 'M', NULL),
('PDR86013', 'R8601', 'L', NULL),
('PDR86014', 'R8601', 'XL', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `purchasing_order`
--

CREATE TABLE `purchasing_order` (
  `id_PO` varchar(20) NOT NULL,
  `id_supplier` varchar(20) NOT NULL,
  `id_payment_method` varchar(20) NOT NULL,
  `transaction_date` date NOT NULL,
  `total` int(10) UNSIGNED NOT NULL,
  `id_delivery` varchar(20) NOT NULL,
  `purchasing_status` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `purchasing_order`
--

INSERT INTO `purchasing_order` (`id_PO`, `id_supplier`, `id_payment_method`, `transaction_date`, `total`, `id_delivery`, `purchasing_status`) VALUES
('PO1', 'A001', 'TRF', '2019-04-19', 10000000, '0', '1'),
('PO2', 'K001', 'CCL', '2019-04-30', 9000000, '0', '0');

-- --------------------------------------------------------

--
-- Table structure for table `supplier`
--

CREATE TABLE `supplier` (
  `id_supplier` varchar(20) NOT NULL,
  `supplier_name` varchar(45) DEFAULT NULL,
  `telp` varchar(45) DEFAULT NULL,
  `alamat` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `supplier`
--

INSERT INTO `supplier` (`id_supplier`, `supplier_name`, `telp`, `alamat`) VALUES
('A001', 'Ayung', NULL, NULL),
('G001', 'Gudim', NULL, NULL),
('K001', 'Kathy', NULL, NULL),
('W001', 'Wendy', NULL, NULL),
('Y001', 'Yuli', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `transactions`
--

CREATE TABLE `transactions` (
  `id_transaction` varchar(20) NOT NULL,
  `tanggal` date NOT NULL,
  `total_transaction` int(10) UNSIGNED NOT NULL,
  `id_employee` varchar(20) NOT NULL,
  `total_discount` int(10) UNSIGNED NOT NULL,
  `id_payment_method` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `transactions`
--

INSERT INTO `transactions` (`id_transaction`, `tanggal`, `total_transaction`, `id_employee`, `total_discount`, `id_payment_method`) VALUES
('244191', '2019-04-24', 370000, 'A001', 0, 'CSH'),
('244192', '2019-04-24', 500000, 'D001', 0, 'DBT');

-- --------------------------------------------------------

--
-- Table structure for table `transaction_details`
--

CREATE TABLE `transaction_details` (
  `id_transaction` varchar(20) NOT NULL,
  `id_product_detail` varchar(20) NOT NULL,
  `harga_jual_satuan` int(10) UNSIGNED NOT NULL,
  `jumlah_product` int(10) UNSIGNED NOT NULL,
  `total_harga` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `transaction_details`
--

INSERT INTO `transaction_details` (`id_transaction`, `id_product_detail`, `harga_jual_satuan`, `jumlah_product`, `total_harga`) VALUES
('DT2441911', 'PDD48512', 185000, 2, 370000),
('DT2441921', 'PDR48041', 275000, 1, 275000),
('DT2441922', 'PDR86053', 225000, 1, 225000);

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
  ADD PRIMARY KEY (`username`);

--
-- Indexes for table `delivery`
--
ALTER TABLE `delivery`
  ADD PRIMARY KEY (`id_delivery`);

--
-- Indexes for table `employee`
--
ALTER TABLE `employee`
  ADD PRIMARY KEY (`id_employee`);

--
-- Indexes for table `payment`
--
ALTER TABLE `payment`
  ADD PRIMARY KEY (`id_payment`);

--
-- Indexes for table `payment_method`
--
ALTER TABLE `payment_method`
  ADD PRIMARY KEY (`id_payment_method`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`id_product`);

--
-- Indexes for table `product_detail`
--
ALTER TABLE `product_detail`
  ADD PRIMARY KEY (`id_product_detail`);

--
-- Indexes for table `purchasing_order`
--
ALTER TABLE `purchasing_order`
  ADD PRIMARY KEY (`id_PO`);

--
-- Indexes for table `supplier`
--
ALTER TABLE `supplier`
  ADD PRIMARY KEY (`id_supplier`);

--
-- Indexes for table `transactions`
--
ALTER TABLE `transactions`
  ADD PRIMARY KEY (`id_transaction`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

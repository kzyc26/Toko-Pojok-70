-- phpMyAdmin SQL Dump
-- version 4.5.4.1deb2ubuntu2.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Dec 18, 2019 at 11:37 AM
-- Server version: 5.7.28-0ubuntu0.16.04.2
-- PHP Version: 7.0.33-6+ubuntu16.04.1+deb.sury.org+3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `store18_2`
--

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `id_category` varchar(20) NOT NULL,
  `category_name` varchar(45) NOT NULL,
  `gender` varchar(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`id_category`, `category_name`, `gender`) VALUES
('DS01', 'Dress Lengan Pendek', 'F'),
('DS02', 'Dress Lengan Panjang', 'F'),
('KL01', 'Kaos Lengan Panjang Cewek', 'F'),
('SP01', 'Sepatu Cewek', 'F'),
('SP02', 'Sepatu Sandal Cewek', 'F'),
('SP03', 'Sepatu Cowok', 'M'),
('SP04', 'Sepatu Sandal Cowok', 'M'),
('ST01', 'Setelan Pendek Cewek', 'F'),
('ST02', 'Setelan Panjang Cewek', 'F'),
('ST03', 'Setelan Pendek Cowok', 'M'),
('ST04', 'Setelan Panjang Cowok', 'M');

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
  `alamat` text,
  `username` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`password`, `jenis_kelamin`, `fullname`, `email`, `telepon`, `provinsi`, `kab_kota`, `kecamatan`, `kelurahan`, `kode_pos`, `alamat`, `username`) VALUES
('33b1eac210971fb02a3b90afce9dbff758be794d', 'female', 'Aisyah', 'aisyah12@gmail.com', '0226030341', 'jawa-tengah', 'semarang', 'bawen', 'harjosari', '61256', 'Jl. Raya Berbek 46 ', 'aisyah12'),
('33b1eac210971fb02a3b90afce9dbff758be794d', 'male', 'Ammar', 'ammar001@student.ciputra.ac.id', '08291019283', 'jawa-tengah', 'semarang', 'bawen', 'harjosari', '62710', 'Jl  Semanggi Raya  No. 29', 'ammar01'),
('33b1eac210971fb02a3b90afce9dbff758be794d', 'male', 'Bevan', 'bevan01@gmail.com', '0897654323', 'jawa-timur', 'surabaya', 'tenggilis-mejoyo', 'prapen', '65432', 'Jl. Pegunungan Indah no 19', 'bevankevin'),
('33b1eac210971fb02a3b90afce9dbff758be794d', 'female', 'Kezia Yovita', 'kchandra04@gmail.com', '08219283782', 'jawa-timur', 'malang', 'blimbing', 'purwantoro', '60233', 'Jl raya tumpang no 28', 'kzyc26'),
('7110eda4d09e062aa5e4a390b0a572ac0d2c0220', 'female', 'Priscilla', 'r.tanamal@ciputra.ac.id', '089787687', 'jawa-timur', 'surabaya', 'tenggilis-mejoyo', 'prapen', '12345', 'sndckjabshdbfasc', 'pvannyamelia'),
('33b1eac210971fb02a3b90afce9dbff758be794d', 'female', 'Fanny Widjaja', 'fann11@gmail.com', '021 88952246', 'jawa-timur', 'surabaya', 'tenggilis-mejoyo', 'prapen', '629093', 'Jl Rambutan Bl GB-1/12,Kalibaru', 'Thimande'),
('33b1eac210971fb02a3b90afce9dbff758be794d', 'male', 'Iman Handoko', 'Iman29@gmail.om', '021 7237864', 'jawa-timur', 'surabaya', 'tenggilis-mejoyo', 'prapen', '60233', 'Jl RS Fatmawati 39 Ruko Duta Mas Fatmawati Bl A-1/38,Cipete Utara', 'Thrervoich'),
('33b1eac210971fb02a3b90afce9dbff758be794d', 'male', 'Setiawan Bima Widjaja', 'setaiwan112@gmail.com', '+62 361 9230800', 'jawa-timur', 'surabaya', 'tenggilis-mejoyo', 'panjang-jiwo', '80871', 'Jalan Raya Candi Dasa', 'Weare1980'),
('33b1eac210971fb02a3b90afce9dbff758be794d', 'female', 'Indah Bulan', 'werlyj39@gmail.com', '021 8354086', 'jawa-tengah', 'semarang', 'bawen', 'harjosari', '271620', 'Jl HR Rasuna Said Kav 1 Menara Imperium Lt 26 Suite B,Guntur', 'Werly1979'),
('33b1eac210971fb02a3b90afce9dbff758be794d', 'male', 'Susilo Irwan', 'susz29@gmail.com', '021 5264850', 'jawa-tengah', 'semarang', 'susukan', 'tawang', '60912', 'Jl Jend Gatot Subroto Kav 56 Ged Adhi Graha Lt 15 Suite 1501', 'Withery1987');

-- --------------------------------------------------------

--
-- Table structure for table `delivery`
--

CREATE TABLE `delivery` (
  `id_deliverystatus` varchar(20) NOT NULL,
  `delivery_status` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `delivery`
--

INSERT INTO `delivery` (`id_deliverystatus`, `delivery_status`) VALUES
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
  `id_deliverystatus` varchar(20) NOT NULL,
  `alamat` text NOT NULL,
  `kode_pos` varchar(50) NOT NULL,
  `kelurahan` varchar(100) NOT NULL,
  `kecamatan` varchar(100) NOT NULL,
  `kab_kota` varchar(100) NOT NULL,
  `provinsi` varchar(100) NOT NULL,
  `resi` varchar(100) NOT NULL,
  `Receiver` varchar(100) NOT NULL,
  `notelp` varchar(50) NOT NULL,
  `email` varchar(55) DEFAULT NULL,
  `id_ekspedisi` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `delivery_details`
--

INSERT INTO `delivery_details` (`transaction_id`, `id_deliverystatus`, `alamat`, `kode_pos`, `kelurahan`, `kecamatan`, `kab_kota`, `provinsi`, `resi`, `Receiver`, `notelp`, `email`, `id_ekspedisi`) VALUES
('201911201', '2', 'aaaaaaaaaaaaa', '80976', 'bbbbb', 'ccccccc', 'ddddd', 'eeeee', '', '', '0', NULL, ''),
('201912041', '3', 'jl soekarno hatta no 18', '62247', 'penjaringan-sari', 'rungkut', 'surabaya', 'jawa-timur', '-', 'Alvin Haryono', '0818644738', 'alvinhariyono1227@gmail.com', 'jne-eks'),
('201912042', '3', 'jl pekalongansari no 89', '92836', 'jatilawang', 'wonosegoro', 'boyolali', 'jawa-tengah', '-', 'Priscilla Vanny', '085140680955', 'priscilla.vanny@gmail.com', 'jne-eks'),
('201912141', '3', 'Jl Raya Tempura no 29 ', '65112', 'prapen', 'tenggilis-mejoyo', 'surabaya', 'jawa-timur', '-', 'Shanen Pramono', '082304998688', 'sahn90@gmail.com', 'jnt-eks'),
('201912142', '3', 'Jl Raya Hujung Kamar no 20', '64267', 'panjang-jiwo', 'tenggilis-mejoyo', 'surabaya', 'jawa-timur', '-', 'Kezia Y.', '081240580822', 'kchandra04@gmail.com', 'jne-reg'),
('201912143', '3', 'Jl Kemangi No 21', '617261', 'doplang', 'bawen', 'semarang', 'jawa-tengah', '-', 'Lovena Wijaya', '09281019281', 'Lovee21@gmail.com', 'cod'),
('201912162', '0', 'Jl. Sambikerep mo. 90', '49382', 'Lontar', 'Lontar', '65', '4', '-', 'Priscilla Syantiek', '089680557493', 'priscilla.vanny@gmail.com', 'pos'),
('201912181', '0', 'Jl. Sambikerep no. 90', '49382', 'Lontar', 'Lontar', '164', '11', '-', 'Priscilla Syantiek', '089680557493', 'priscilla.vanny@gmail.com', 'pos'),
('201912182', '0', 'Jl. Sambikerep no. 90', '49382', 'Lontar', 'Lontar', '250', '10', '-', 'Priscilla A.', '089680557493', 'pvannyamelia@student.ciputra.ac.id', 'tiki'),
('201912182', '0', 'Jl. Sambikerep no. 90', '49382', 'Lontar', 'Lontar', '250', '10', '-', 'Priscilla A.', '089680557493', 'pvannyamelia@student.ciputra.ac.id', 'tiki');

-- --------------------------------------------------------

--
-- Table structure for table `ekspedisi`
--

CREATE TABLE `ekspedisi` (
  `id_ekspedisi` varchar(20) NOT NULL,
  `Nama_ekspedisi` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `ekspedisi`
--

INSERT INTO `ekspedisi` (`id_ekspedisi`, `Nama_ekspedisi`) VALUES
('cod', 'Cash on Delivery'),
('jne-eks', 'JNE Ekspress'),
('jne-reg', 'JNE Reguler'),
('jnt-eks', 'J&T Ekspres'),
('jnt-reg', 'J&T Reguler');

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
('EMOVO', 'OVO'),
('N', 'Belum Memilih');

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `id_product` varchar(20) NOT NULL,
  `id_category` varchar(20) NOT NULL,
  `bundling` tinyint(1) UNSIGNED NOT NULL DEFAULT '0',
  `Product_name` varchar(45) NOT NULL,
  `Product_desc` longtext NOT NULL,
  `min_stock` tinyint(2) UNSIGNED NOT NULL DEFAULT '0',
  `Price` bigint(20) UNSIGNED NOT NULL,
  `jumlah_foto` int(11) NOT NULL,
  `Discount_price` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`id_product`, `id_category`, `bundling`, `Product_name`, `Product_desc`, `min_stock`, `Price`, `jumlah_foto`, `Discount_price`) VALUES
('D4851', 'ST01', 0, 'Sailor', 'Bahan : 95 % Katun 5 % Spandex', 0, 120000, 4, NULL),
('D4852', 'ST01', 0, 'Love Birds', 'Bahan: Katun', 0, 120000, 3, NULL),
('D6302', 'SP02', 0, 'Floral', 'Bahan: Katun', 0, 100000, 1, NULL),
('D6304', 'SP02', 0, 'Beads & Flower', 'Bahan : Kulit Sintetis', 0, 220000, 1, NULL),
('D6305', 'SP02', 0, 'Bunny', 'Bahan : Kulit Sintetis', 0, 200000, 2, NULL),
('D6508', 'SP03', 0, '2 Colors', 'Bahan : Kulit Sintetis', 0, 230000, 3, NULL),
('D6601', 'SP04', 0, 'Suprelo', 'Bahan : Kulit sintetis', 0, 230000, 2, NULL),
('D6602', 'SP03', 0, 'Thunder', 'Bahan : Kulit Sintetis', 0, 250000, 1, NULL),
('D6603', 'SP03', 0, 'LED', 'Bahan : Kulit Sintetis', 0, 280000, 3, NULL),
('D6604', 'SP01', 0, 'Adidas', 'Bahan : Kulit Sintetis', 0, 340000, 0, NULL),
('D6605', 'SP01', 0, 'Girl Camo', 'Bahan : Kulit Sintetis', 0, 200000, 1, NULL),
('D6606', 'SP03', 0, 'Boy Camo', 'Bahan : Kulit Sintetis', 0, 200000, 1, NULL),
('D8605', 'ST03', 0, 'XSB', 'Bahan: Katun', 0, 120000, 2, NULL),
('D8606', 'ST03', 0, 'Trees', 'Bahan: Katun', 0, 100000, 2, NULL),
('R4804', 'DS01', 0, 'Ribbon', 'Bahan : Kulit Sintetis', 0, 180000, 3, NULL),
('R4805', 'DS02', 0, 'Kittens', 'Bahan: Katun', 0, 200000, 2, NULL),
('R4806', 'DS01', 0, 'Tutu', 'Bahan: Katun', 0, 190000, 4, NULL),
('R4807', 'DS01', 0, 'Floral Dress', 'Bahan: Katun', 0, 200000, 2, NULL),
('R6204', 'SP01', 0, 'Mushroom', 'Bahan : Kulit Sintetis', 0, 200000, 2, NULL),
('R8601', 'ST04', 0, 'Royal Clothes', 'Bahan: Katun', 0, 130000, 2, NULL),
('R8602', 'ST04', 0, 'Setelan Panjang Cowok Elephant', 'Bahan: Katun', 0, 100000, 5, NULL);

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

--
-- Dumping data for table `review`
--

INSERT INTO `review` (`Id_transaction`, `id_product_detail`, `Star_rating`, `Review`) VALUES
('201912042 ', 'PDR48042', 4.5, 'No Comment'),
('201912041 ', 'PDR48062', 4.5, 'No Comment'),
('201912142 ', 'PDR48044', 4, 'No Comment');

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
  `payment_status` tinyint(1) DEFAULT NULL,
  `transaction_status` int(1) NOT NULL DEFAULT '0',
  `ongkir` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `transaction`
--

INSERT INTO `transaction` (`transaction_id`, `session_id`, `date`, `total_transaction`, `username`, `total_discount`, `id_payment_method`, `payment_status`, `transaction_status`, `ongkir`) VALUES
('201912032', 'r5r53sqst1c701of6lsd5u7n63', '2019-12-03', 210000, 'pvannyamelia', 0, 'BABC', 1, 1, 20000),
('201912041', 'abq6e4nmbr2nkbm27dattnag3g', '2019-12-04', 590000, 'pvannyamelia', 0, 'EMOVO', 1, 1, 20000),
('201912042', 't9k967dd3t07n6c8q9u3ihmi52', '2019-12-04', 380000, 'pvannyamelia', 0, 'EMOVO', 1, 1, 20000),
('201912043', 'u6bqr09k5jjfhubioqan0dolhl', '2019-12-04', 210000, 'pvannyamelia', 0, 'EMOVO', 1, 1, 20000),
('201912044', '570qqng61pkqhodqt9t65in3b0', '2019-12-04', 210000, 'pvannyamelia', 0, 'BABC', 1, 1, 20000),
('201912071', 'm6lfp10toqs0su4tq58ojl3b34', '2019-12-07', 210000, 'pvannyamelia', 0, 'EMOVO', 1, 1, 20000),
('201912091', '6cvupio5e7uq4s5mstq5psk3ug', '2019-12-09', 400000, '-', 0, 'EMOVO', 1, 1, 20000),
('201912093', '4udt4tep10jrpbmt9esfmlu8ir', '2019-12-09', 780000, 'pvannyamelia', 0, 'BABC', 1, 1, 20000),
('201912094', 'p3916gbsi6thviu6cfrh1451g3', '2019-12-09', 500000, 'pvannyamelia', 0, 'EMOVO', 1, 1, 20000),
('201912101', 'p8f11c4g8j6oo5tqt8qugbqg7g', '2019-12-10', 120000, 'pvannyamelia', 0, 'EMOVO', 1, 1, 20000),
('201912141', 'qplqb4rf5q53ns2b1dsgbft077', '2019-12-14', 330000, 'Thimande', 0, 'BABC', 1, 1, 20000),
('201912142', 'aopegr805sg98a337o93oar1o2', '2019-12-14', 200000, 'Thimande', 0, 'BABC', 1, 1, 20000),
('201912143', '4povs1cmiea60hhrciubuf9s9o', '2019-12-14', 120000, 'Thimande', 0, 'BABC', 1, 1, 20000),
('201912151', 'gs9bsjqped096itpib0egdvih0', '2019-12-15', 200000, '-', 0, 'N', 0, 0, 20000),
('201912161', '8g5l1n6aqnd7418o4a5flc6shp', '2019-12-16', 190000, '-', 0, 'N', 0, 0, 20000),
('201912162', 's3gel75mq84ggi7rk5b8ggsrhc', '2019-12-16', 241000, '-', 0, 'N', 0, 1, 20000),
('201912181', 'o9ijaag9bokqrb37nrcpuidt4k', '2019-12-18', 192500, '-', 0, 'N', 0, 1, 20000),
('201912182', 'cbd1dnna09jviilfsefb8i9aba', '2019-12-18', 778000, '-', 0, 'N', 0, 1, 18000);

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
('201911271-3', '201911271', 'PDD86053', 120000, 1, 120000),
('201912032-1', '201912032', 'PDR48072', 200000, 4, 800000),
('201912041-1', '201912041', 'PDR48062', 190000, 5, 570000),
('201912042-1', '201912042', 'PDR48042', 180000, 2, 360000),
('201912043-1', '201912043', 'PDR48062', 190000, 5, 570000),
('201912043-2', '201912043', 'PDR48072', 200000, 1, 200000),
('201912043-3', '201912043', 'PDR48061', 190000, 3, 190000),
('201912044-1', '201912044', 'PDR48063', 190000, 2, 380000),
('201912044-2', '201912044', 'PDR48072', 200000, 1, 200000),
('201912071-1', '201912071', 'PDR48072', 200000, 1, 200000),
('201912071-2', '201912071', 'PDR48063', 190000, 1, 190000),
('201912071-3', '201912071', 'PDR48043', 180000, 1, 180000),
('201912071-4', '201912071', 'PDR620410', 200000, 1, 200000),
('201912081-1', '201912081', 'PDD63021', 100000, 1, 100000),
('201912081-2', '201912081', 'PDR48042', 180000, 1, 180000),
('201912082-1', '201912082', 'PDR48061', 190000, 3, 190000),
('201912083-1', '201912083', 'PDR48071', 200000, 1, 200000),
('201912084-1', '201912084', 'PDR48061', 190000, 3, 190000),
('201912091-4', '201912091', 'PDR48044', 180000, 1, 180000),
('201912091-5', '201912091', 'PDR48054', 200000, 1, 200000),
('201912092-1', '201912092', 'PDR48071', 200000, 1, 200000),
('201912092-2', '201912092', 'PDD63023', 100000, 1, 100000),
('201912092-3', '201912092', 'PDR86022', 100000, 3, 300000),
('201912092-4', '201912092', 'PDR86012', 130000, 1, 130000),
('201912092-5', '201912092', 'PDD65084', 230000, 1, 230000),
('201912092-6', '201912092', 'PDR48063', 190000, 1, 190000),
('201912093-2', '201912093', 'PDR48044', 180000, 1, 180000),
('201912093-3', '201912093', 'PDR48052', 200000, 1, 200000),
('201912093-4', '201912093', 'PDR48061', 190000, 4, 380000),
('201912094-1', '201912094', 'PDR48042', 180000, 2, 360000),
('201912094-2', '201912094', 'PDD48511', 120000, 1, 120000),
('201912101-1', '201912101', 'PDD48512', 120000, 1, 120000),
('201912141-1', '201912141', 'PDD48513', 120000, 1, 120000),
('201912141-2', '201912141', 'PDR48062', 190000, 3, 190000),
('201912142-1', '201912142', 'PDR48044', 180000, 1, 180000),
('201912143-1', '201912143', 'PDD48522', 120000, 1, 120000),
('201912151-1', '201912151', 'PDR48073', 200000, 1, 200000),
('201912161-2', '201912161', 'PDR48062', 190000, 3, 190000),
('201912162-2', '201912162', 'PDR48062', 190000, 3, 190000),
('201912181-2', '201912181', 'PDR48042', 180000, 1, 180000),
('201912182-1', '201912182', 'PDR48062', 190000, 4, 380000);

-- --------------------------------------------------------

--
-- Table structure for table `user_voucher`
--

CREATE TABLE `user_voucher` (
  `username` varchar(20) NOT NULL,
  `Id_voucher` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `user_voucher`
--

INSERT INTO `user_voucher` (`username`, `Id_voucher`) VALUES
('pvannyamelia', 'DS1001'),
('pvannyamelia', 'DS1002'),
('pvannyamelia', 'DS1003'),
('pvannyamelia', 'DS3001'),
('pvannyamelia', 'DS3002'),
('pvannyamelia', 'DS3003'),
('pvannyamelia', 'GO001003'),
('pvannyamelia', 'GO102001');

-- --------------------------------------------------------

--
-- Table structure for table `voucher`
--

CREATE TABLE `voucher` (
  `id_voucher` varchar(20) NOT NULL,
  `id_voucher_type` varchar(20) NOT NULL,
  `Voucher_name` varchar(100) NOT NULL,
  `Voucher_desc` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `voucher`
--

INSERT INTO `voucher` (`id_voucher`, `id_voucher_type`, `Voucher_name`, `Voucher_desc`) VALUES
('DS1001', 'DS', 'Discount 10% ', 'Discount 10% for Footwears'),
('DS1002', 'DS', 'Discount 10%', 'Discount 10%  for Dresses'),
('DS1003', 'DS', 'Discount 10%', 'Discount 10%  for Girls Item'),
('DS3001', 'DS', 'Discount 30%', 'Discount 30%  for all Items'),
('DS3002', 'DS', 'Discount 30%', 'Discount 30%  for Boys Item'),
('DS3003', 'DS', 'Discount 30%', 'Discount 30%  for Girls Item'),
('GO001003', 'GO', 'Gratis Ongkir hingga 10.000 tanpa minimal pembelian', 'Gratis Ongkir 10k'),
('GO102001', 'GO', 'Gratis Ongkir hingga 20.000 dengan minimal pembelian 100.000', 'Gratis Ongkir 20k');

-- --------------------------------------------------------

--
-- Table structure for table `voucher_type`
--

CREATE TABLE `voucher_type` (
  `Id_Voucher_type` varchar(20) NOT NULL,
  `Voucher_type_name` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `voucher_type`
--

INSERT INTO `voucher_type` (`Id_Voucher_type`, `Voucher_type_name`) VALUES
('DS', 'Discount'),
('GO', 'Gratis Ongkir');

-- --------------------------------------------------------

--
-- Table structure for table `voucher_used`
--

CREATE TABLE `voucher_used` (
  `id_voucher` varchar(20) NOT NULL,
  `id_transaction` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `voucher_used`
--

INSERT INTO `voucher_used` (`id_voucher`, `id_transaction`) VALUES
('GO102001', '201912032'),
('DS1002', '201912041'),
('DS1003', '201912042'),
('DS3001', '201912043'),
('DS3002', '201912044'),
('GO102001', '201912071'),
('GO102001', '201912093'),
('GO102001', '201912094'),
('GO102001', '201912101');

-- --------------------------------------------------------

--
-- Table structure for table `wishlist`
--

CREATE TABLE `wishlist` (
  `username` varchar(20) NOT NULL,
  `Id_product` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `wishlist`
--

INSERT INTO `wishlist` (`username`, `Id_product`) VALUES
('pvannyamelia', 'D4851'),
('pvannyamelia', 'R4807'),
('pvannyamelia', 'D6305'),
('pvannyamelia', 'D6508'),
('pvannyamelia', 'R8602'),
('pvannyamelia', 'R4804'),
('pvannyamelia', 'D6605');

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
  ADD PRIMARY KEY (`id_deliverystatus`);

--
-- Indexes for table `delivery_details`
--
ALTER TABLE `delivery_details`
  ADD KEY `transaction_id` (`transaction_id`),
  ADD KEY `id_deliverystatus` (`id_deliverystatus`),
  ADD KEY `id_ekspedisi` (`id_ekspedisi`);

--
-- Indexes for table `ekspedisi`
--
ALTER TABLE `ekspedisi`
  ADD PRIMARY KEY (`id_ekspedisi`) USING BTREE;

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
  ADD KEY `FK_wishlist_2` (`Id_product`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

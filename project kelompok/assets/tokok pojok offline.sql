-- MySQL Administrator dump 1.4
--
-- ------------------------------------------------------
-- Server version	5.5.5-10.1.37-MariaDB


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;


--
-- Create schema toko_pojok_70
--

CREATE DATABASE IF NOT EXISTS toko_pojok_70;
USE toko_pojok_70;

--
-- Definition of table `category`
--

DROP TABLE IF EXISTS `category`;
CREATE TABLE `category` (
  `id_category` varchar(20) NOT NULL,
  `category_name` varchar(45) NOT NULL,
  PRIMARY KEY (`id_category`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `category`
--

/*!40000 ALTER TABLE `category` DISABLE KEYS */;
INSERT INTO `category` (`id_category`,`category_name`) VALUES 
 ('DS01','Dress Lengan Pendek'),
 ('DS02','Dress Lengan Panjang'),
 ('KL01','Kaos Lengan Panjang Cewek'),
 ('KS01','Kaos Cewek'),
 ('KS02','Kaos Cowok'),
 ('SP01','Sepatu Cewek'),
 ('SP02','Sepatu Sandal Cewek'),
 ('SP03','Sepatu Cowok'),
 ('SP04','Sepatu Sandal Cowok'),
 ('ST01','Setelan Pendek Cewek'),
 ('ST02','Setelan Panjang Cewek'),
 ('ST03','Setelan Pendek Cowok'),
 ('ST04','Setelan Panjang Cowok');
/*!40000 ALTER TABLE `category` ENABLE KEYS */;


--
-- Definition of table `delivery`
--

DROP TABLE IF EXISTS `delivery`;
CREATE TABLE `delivery` (
  `id_delivery` varchar(20) NOT NULL,
  `delivery_status` varchar(45) NOT NULL,
  PRIMARY KEY (`id_delivery`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `delivery`
--

/*!40000 ALTER TABLE `delivery` DISABLE KEYS */;
INSERT INTO `delivery` (`id_delivery`,`delivery_status`) VALUES 
 ('0','Undelivered'),
 ('1','Delivered');
/*!40000 ALTER TABLE `delivery` ENABLE KEYS */;


--
-- Definition of table `employee`
--

DROP TABLE IF EXISTS `employee`;
CREATE TABLE `employee` (
  `id_employee` varchar(20) NOT NULL,
  `employee_name` varchar(45) NOT NULL,
  `telp` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`id_employee`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `employee`
--

/*!40000 ALTER TABLE `employee` DISABLE KEYS */;
INSERT INTO `employee` (`id_employee`,`employee_name`,`telp`) VALUES 
 ('A001','Ahmad Santoso','089777654894'),
 ('A002','Andi Syahputra','081237497096'),
 ('D001','Diana Putri','081345672899');
/*!40000 ALTER TABLE `employee` ENABLE KEYS */;


--
-- Definition of table `gudang`
--

DROP TABLE IF EXISTS `gudang`;
CREATE TABLE `gudang` (
  `id_product_detail` varchar(20) NOT NULL,
  `stock_display` int(10) unsigned DEFAULT NULL,
  `stock_gudang` int(10) unsigned DEFAULT NULL,
  `jumlah_stock_total` int(10) unsigned DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `gudang`
--

/*!40000 ALTER TABLE `gudang` DISABLE KEYS */;
INSERT INTO `gudang` (`id_product_detail`,`stock_display`,`stock_gudang`,`jumlah_stock_total`) VALUES 
 ('PDD48511',1,1,2),
 ('PDD48512',1,0,1),
 ('PDD63021',0,1,1),
 ('PDD63022',0,0,1),
 ('PDD63023',1,0,1),
 ('PDD63024',0,1,1),
 ('PDD63025',0,1,1),
 ('PDD65081',1,0,1),
 ('PDD65082',0,1,1),
 ('PDD65083',1,0,1),
 ('PDD65084',0,1,1),
 ('PDD65085',1,0,1),
 ('PDD86051',0,1,1),
 ('PDD86052',1,0,1),
 ('PDD86053',0,1,1),
 ('PDD86054',1,0,1),
 ('PDD86055',0,1,1),
 ('PDR48041',0,1,1),
 ('PDR48042',0,1,1),
 ('PDR48043',1,0,1),
 ('PDR48044',0,1,1),
 ('PDR62041',1,0,1),
 ('PDR620410',1,0,1),
 ('PDR62042',0,1,1),
 ('PDR62043',0,1,1),
 ('PDR62044',1,0,1),
 ('PDR62045',0,1,1),
 ('PDR62046',0,1,1),
 ('PDR62047',0,1,1),
 ('PDR62048',1,0,1),
 ('PDR62049',1,0,1),
 ('PDR86011',0,1,1),
 ('PDR86012',0,1,1),
 ('PDR86013',0,1,1),
 ('PDR86014',1,0,1);
/*!40000 ALTER TABLE `gudang` ENABLE KEYS */;


--
-- Definition of table `payment`
--

DROP TABLE IF EXISTS `payment`;
CREATE TABLE `payment` (
  `id_payment` varchar(20) NOT NULL,
  `id_PO` varchar(20) NOT NULL,
  `jumlah_dibayar` int(10) unsigned NOT NULL,
  `tanggal` date NOT NULL,
  `id_payment_method` varchar(20) NOT NULL,
  PRIMARY KEY (`id_payment`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `payment`
--

/*!40000 ALTER TABLE `payment` DISABLE KEYS */;
INSERT INTO `payment` (`id_payment`,`id_PO`,`jumlah_dibayar`,`tanggal`,`id_payment_method`) VALUES 
 ('PMPO11','PO1',10000000,'2019-04-20','TRF'),
 ('PMPO21','PO2',1000000,'2019-05-01','TRF'),
 ('PMPO22','PO2',1000000,'2019-05-08','TRF'),
 ('PMPO23','PO2',1000000,'2019-05-15','TRF'),
 ('PMPO24','PO2',1000000,'2019-05-22','TRF'),
 ('PMPO25','PO2',1000000,'2019-05-29','TRF'),
 ('PMPO26','PO2',1000000,'2019-06-07','TRF'),
 ('PMPO27','PO2',2000000,'2019-06-15','TRF'),
 ('PMPO28','PO2',500000,'2019-06-17','TRF'),
 ('PMPO29','PO2',500000,'2019-06-21','TRF');
/*!40000 ALTER TABLE `payment` ENABLE KEYS */;


--
-- Definition of table `payment_method`
--

DROP TABLE IF EXISTS `payment_method`;
CREATE TABLE `payment_method` (
  `id_payment_method` varchar(20) NOT NULL,
  `payment_method` varchar(45) NOT NULL,
  PRIMARY KEY (`id_payment_method`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `payment_method`
--

/*!40000 ALTER TABLE `payment_method` DISABLE KEYS */;
INSERT INTO `payment_method` (`id_payment_method`,`payment_method`) VALUES 
 ('AGS','Angsuran'),
 ('CCL','Cicilan'),
 ('CSH','Cash'),
 ('DBT','Debit'),
 ('DP','Bayar Di Muka'),
 ('TRF','Transfer');
/*!40000 ALTER TABLE `payment_method` ENABLE KEYS */;


--
-- Definition of table `product`
--

DROP TABLE IF EXISTS `product`;
CREATE TABLE `product` (
  `id_product` varchar(20) NOT NULL,
  `harga_jual` int(10) unsigned NOT NULL,
  `HPP` int(10) unsigned NOT NULL,
  `id_category` varchar(20) NOT NULL,
  `bundling` tinyint(1) unsigned NOT NULL DEFAULT '0',
  `id_supplier` varchar(20) NOT NULL,
  `discount_price` int(10) unsigned NOT NULL DEFAULT '0',
  `min_stock` int(10) unsigned DEFAULT NULL,
  PRIMARY KEY (`id_product`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `product`
--

/*!40000 ALTER TABLE `product` DISABLE KEYS */;
INSERT INTO `product` (`id_product`,`harga_jual`,`HPP`,`id_category`,`bundling`,`id_supplier`,`discount_price`,`min_stock`) VALUES 
 ('D4851',185000,100000,'ST01',1,'A001',0,0),
 ('D6302',185000,80000,'SP02',0,'K001',0,0),
 ('D6508',185000,90000,'SP04',0,'W001',0,0),
 ('D8605',225000,190000,'ST03',1,'Y001',0,0),
 ('R4804',275000,210000,'DS01',0,'A001',0,0),
 ('R6204',225000,180000,'SP01',0,'G001',0,0),
 ('R8601',195000,100000,'ST04',1,'Y001',0,0);
/*!40000 ALTER TABLE `product` ENABLE KEYS */;


--
-- Definition of table `product_detail`
--

DROP TABLE IF EXISTS `product_detail`;
CREATE TABLE `product_detail` (
  `id_product_detail` varchar(20) NOT NULL,
  `id_product` varchar(20) NOT NULL,
  `ukuran` varchar(45) DEFAULT NULL,
  `warna` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`id_product_detail`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `product_detail`
--

/*!40000 ALTER TABLE `product_detail` DISABLE KEYS */;
INSERT INTO `product_detail` (`id_product_detail`,`id_product`,`ukuran`,`warna`) VALUES 
 ('PDD48511','D4851','L','Kuning'),
 ('PDD48512','D4851','XL','Biru'),
 ('PDD63021','D6302','27',NULL),
 ('PDD63022','D6302','28',NULL),
 ('PDD63023','D6302','29',NULL),
 ('PDD63024','D6302','30',NULL),
 ('PDD63025','D6302','31',NULL),
 ('PDD65081','D6508','27',NULL),
 ('PDD65082','D6508','28',NULL),
 ('PDD65083','D6508','29',NULL),
 ('PDD65084','D6508','30',NULL),
 ('PDD65085','D6508','31',NULL),
 ('PDD86051','D8605','1',NULL),
 ('PDD86052','D8605','2',NULL),
 ('PDD86053','D8605','3',NULL),
 ('PDD86054','D8605','4',NULL),
 ('PDD86055','D8605','5',NULL),
 ('PDR48041','R4804','70',NULL),
 ('PDR48042','R4804','80',NULL),
 ('PDR48043','R4804','90',NULL),
 ('PDR48044','R4804','100',NULL),
 ('PDR62041','R6204','21','Putih'),
 ('PDR620410','R6204','25','Pink'),
 ('PDR62042','R6204','21','Pink'),
 ('PDR62043','R6204','22','Putih'),
 ('PDR62044','R6204','22','Pink'),
 ('PDR62045','R6204','23','Putih'),
 ('PDR62046','R6204','23','Pink'),
 ('PDR62047','R6204','24','Putih'),
 ('PDR62048','R6204','24','Pink'),
 ('PDR62049','R6204','25','Putih'),
 ('PDR86011','R8601','S',NULL),
 ('PDR86012','R8601','M',NULL),
 ('PDR86013','R8601','L',NULL),
 ('PDR86014','R8601','XL',NULL);
/*!40000 ALTER TABLE `product_detail` ENABLE KEYS */;


--
-- Definition of table `purchasing_order`
--

DROP TABLE IF EXISTS `purchasing_order`;
CREATE TABLE `purchasing_order` (
  `id_PO` varchar(20) NOT NULL,
  `id_supplier` varchar(20) NOT NULL,
  `id_payment_method` varchar(20) NOT NULL,
  `transaction_date` date NOT NULL,
  `total` int(10) unsigned NOT NULL,
  `id_delivery` varchar(20) NOT NULL,
  `purchasing_status` varchar(45) NOT NULL,
  PRIMARY KEY (`id_PO`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `purchasing_order`
--

/*!40000 ALTER TABLE `purchasing_order` DISABLE KEYS */;
INSERT INTO `purchasing_order` (`id_PO`,`id_supplier`,`id_payment_method`,`transaction_date`,`total`,`id_delivery`,`purchasing_status`) VALUES 
 ('PO1','A001','TRF','2019-04-19',10000000,'0','1'),
 ('PO2','K001','CCL','2019-04-30',9000000,'0','0');
/*!40000 ALTER TABLE `purchasing_order` ENABLE KEYS */;


--
-- Definition of table `supplier`
--

DROP TABLE IF EXISTS `supplier`;
CREATE TABLE `supplier` (
  `id_supplier` varchar(20) NOT NULL,
  `supplier_name` varchar(45) DEFAULT NULL,
  `telp` varchar(45) DEFAULT NULL,
  `alamat` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`id_supplier`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `supplier`
--

/*!40000 ALTER TABLE `supplier` DISABLE KEYS */;
INSERT INTO `supplier` (`id_supplier`,`supplier_name`,`telp`,`alamat`) VALUES 
 ('A001','Ayung',NULL,NULL),
 ('G001','Gudim',NULL,NULL),
 ('K001','Kathy',NULL,NULL),
 ('W001','Wendy',NULL,NULL),
 ('Y001','Yuli',NULL,NULL);
/*!40000 ALTER TABLE `supplier` ENABLE KEYS */;


--
-- Definition of table `transaction_details`
--

DROP TABLE IF EXISTS `transaction_details`;
CREATE TABLE `transaction_details` (
  `id_transaction` varchar(20) NOT NULL,
  `id_product_detail` varchar(20) NOT NULL,
  `harga_jual_satuan` int(10) unsigned NOT NULL,
  `jumlah_product` int(10) unsigned NOT NULL,
  `total_harga` int(10) unsigned NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `transaction_details`
--

/*!40000 ALTER TABLE `transaction_details` DISABLE KEYS */;
INSERT INTO `transaction_details` (`id_transaction`,`id_product_detail`,`harga_jual_satuan`,`jumlah_product`,`total_harga`) VALUES 
 ('DT2441911','PDD48512',185000,2,370000),
 ('DT2441921','PDR48041',275000,1,275000),
 ('DT2441922','PDR86053',225000,1,225000);
/*!40000 ALTER TABLE `transaction_details` ENABLE KEYS */;


--
-- Definition of table `transactions`
--

DROP TABLE IF EXISTS `transactions`;
CREATE TABLE `transactions` (
  `id_transaction` varchar(20) NOT NULL,
  `tanggal` date NOT NULL,
  `total_transaction` int(10) unsigned NOT NULL,
  `id_employee` varchar(20) NOT NULL,
  `total_discount` int(10) unsigned NOT NULL,
  `id_payment_method` varchar(20) NOT NULL,
  PRIMARY KEY (`id_transaction`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `transactions`
--

/*!40000 ALTER TABLE `transactions` DISABLE KEYS */;
INSERT INTO `transactions` (`id_transaction`,`tanggal`,`total_transaction`,`id_employee`,`total_discount`,`id_payment_method`) VALUES 
 ('244191','2019-04-24',370000,'A001',0,'CSH'),
 ('244192','2019-04-24',500000,'D001',0,'DBT');
/*!40000 ALTER TABLE `transactions` ENABLE KEYS */;




/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;

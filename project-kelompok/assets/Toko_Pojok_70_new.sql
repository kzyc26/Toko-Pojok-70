-- MySQL Administrator dump 1.4
--
-- ------------------------------------------------------
-- Server version	5.5.5-10.4.6-MariaDB


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
  `gender` varchar(1) NOT NULL,
  PRIMARY KEY (`id_category`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `category`
--

/*!40000 ALTER TABLE `category` DISABLE KEYS */;
INSERT INTO `category` (`id_category`,`category_name`,`gender`) VALUES 
 ('DS01','Dress Lengan Pendek','F'),
 ('DS02','Dress Lengan Panjang','F'),
 ('KL01','Kaos Lengan Panjang Cewek','F'),
 ('KS01','Kaos Cewek','F'),
 ('KS02','Kaos Cowok','M'),
 ('SP01','Sepatu Cewek','F'),
 ('SP02','Sepatu Sandal Cewek','F'),
 ('SP03','Sepatu Cowok','M'),
 ('SP04','Sepatu Sandal Cowok','M'),
 ('ST01','Setelan Pendek Cewek','F'),
 ('ST02','Setelan Panjang Cewek','F'),
 ('ST03','Setelan Pendek Cowok','M'),
 ('ST04','Setelan Panjang Cowok','M');
/*!40000 ALTER TABLE `category` ENABLE KEYS */;


--
-- Definition of table `customer`
--

DROP TABLE IF EXISTS `customer`;
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
  `alamat` text DEFAULT NULL,
  `Id_customer` varchar(20) NOT NULL,
  PRIMARY KEY (`Id_customer`) USING BTREE
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `customer`
--

/*!40000 ALTER TABLE `customer` DISABLE KEYS */;
/*!40000 ALTER TABLE `customer` ENABLE KEYS */;


--
-- Definition of table `delivery`
--

DROP TABLE IF EXISTS `delivery`;
CREATE TABLE `delivery` (
  `id_delivery` varchar(20) NOT NULL,
  `delivery_status` varchar(45) NOT NULL,
  `Id_PO` varchar(20) NOT NULL,
  PRIMARY KEY (`id_delivery`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `delivery`
--

/*!40000 ALTER TABLE `delivery` DISABLE KEYS */;
INSERT INTO `delivery` (`id_delivery`,`delivery_status`,`Id_PO`) VALUES 
 ('0','Undelivered',''),
 ('1','Delivered','');
/*!40000 ALTER TABLE `delivery` ENABLE KEYS */;


--
-- Definition of table `delivery_tracking`
--

DROP TABLE IF EXISTS `delivery_tracking`;
CREATE TABLE `delivery_tracking` (
  `Id_delivery` varchar(20) NOT NULL,
  `date` datetime NOT NULL,
  `Delivery_status` varchar(45) NOT NULL,
  PRIMARY KEY (`Id_delivery`),
  CONSTRAINT `Id_delivery` FOREIGN KEY (`Id_delivery`) REFERENCES `delivery` (`id_delivery`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `delivery_tracking`
--

/*!40000 ALTER TABLE `delivery_tracking` DISABLE KEYS */;
/*!40000 ALTER TABLE `delivery_tracking` ENABLE KEYS */;


--
-- Definition of table `ekspedisi`
--

DROP TABLE IF EXISTS `ekspedisi`;
CREATE TABLE `ekspedisi` (
  `Id_ekspedisi` varchar(20) NOT NULL,
  `Nama_ekspedisi` varchar(45) NOT NULL,
  PRIMARY KEY (`Id_ekspedisi`) USING BTREE
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `ekspedisi`
--

/*!40000 ALTER TABLE `ekspedisi` DISABLE KEYS */;
/*!40000 ALTER TABLE `ekspedisi` ENABLE KEYS */;


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
  `id_category` varchar(20) NOT NULL,
  `bundling` tinyint(1) unsigned NOT NULL DEFAULT 0,
  `Product_name` varchar(45) NOT NULL,
  `Product_desc` longtext NOT NULL,
  `min_stock` tinyint(2) unsigned NOT NULL DEFAULT 0,
  `Price` bigint(20) unsigned NOT NULL,
  PRIMARY KEY (`id_product`),
  KEY `FK_product_1` (`id_category`),
  CONSTRAINT `FK_product_1` FOREIGN KEY (`id_category`) REFERENCES `category` (`id_category`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `product`
--

/*!40000 ALTER TABLE `product` DISABLE KEYS */;
INSERT INTO `product` (`id_product`,`id_category`,`bundling`,`Product_name`,`Product_desc`,`min_stock`,`Price`) VALUES 
 ('D4851','ST01',0,'Sailor','Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.',0,120000),
 ('D4852','ST01',0,'Love Birds','Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.',0,120000),
 ('D6302','SP01',0,'Floral','Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.',0,100000),
 ('D6304','SP01',0,'Beads & Flower','Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.',0,220000),
 ('D6305','SP01',0,'Bunny','Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.',0,200000),
 ('D6508','SP03',0,'2 Colors','Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.',0,230000),
 ('D6601','SP04',0,'Suprelo','Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.',0,230000),
 ('D6602','SP03',0,'Thunder','Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.',0,250000),
 ('D6603','SP03',0,'LED','Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.',0,280000),
 ('D6604','SP01',0,'Adidas','Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.',0,340000),
 ('D6605','SP01',0,'Girl Camo','Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.',0,200000),
 ('D6606','SP03',0,'Boy Camo','Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.',0,200000),
 ('D8605','ST03',0,'XSB','Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.',0,120000),
 ('D8606','ST03',0,'Trees','Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.',0,100000),
 ('R4804','DS01',0,'Ribbon','Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.',0,180000),
 ('R4805','DS02',0,'Kittens','Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.',0,200000),
 ('R4806','DS01',0,'Tutu','Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.',0,190000),
 ('R4807','DS01',0,'Floral Dress','Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.',0,200000),
 ('R6204','SP01',0,'Mushroom','Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.',0,200000),
 ('R8601','ST04',0,'Royal Clothes','Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.',0,130000),
 ('R8602','ST04',0,'Setelan Panjang Cowok Elephant','Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.',0,100000);
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
  PRIMARY KEY (`id_product_detail`),
  KEY `Id_product_detail` (`id_product`),
  CONSTRAINT `Id_product_detail` FOREIGN KEY (`id_product`) REFERENCES `product` (`id_product`)
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
  `id_transaction` varchar(20) NOT NULL,
  `transaction_date` date NOT NULL,
  `total` int(10) unsigned NOT NULL,
  PRIMARY KEY (`id_PO`),
  KEY `id_transaction` (`id_transaction`),
  CONSTRAINT `id_transaction` FOREIGN KEY (`id_transaction`) REFERENCES `transaction` (`id_transaction`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `purchasing_order`
--

/*!40000 ALTER TABLE `purchasing_order` DISABLE KEYS */;
/*!40000 ALTER TABLE `purchasing_order` ENABLE KEYS */;


--
-- Definition of table `transaction`
--

DROP TABLE IF EXISTS `transaction`;
CREATE TABLE `transaction` (
  `id_transaction` varchar(20) NOT NULL,
  `tanggal` date NOT NULL,
  `total_transaction` int(10) unsigned NOT NULL,
  `id_customer` varchar(20) NOT NULL,
  `total_discount` int(10) unsigned NOT NULL,
  `id_payment_method` varchar(20) NOT NULL,
  `payment_status` tinyint(1) unsigned NOT NULL,
  PRIMARY KEY (`id_transaction`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `transaction`
--

/*!40000 ALTER TABLE `transaction` DISABLE KEYS */;
INSERT INTO `transaction` (`id_transaction`,`tanggal`,`total_transaction`,`id_customer`,`total_discount`,`id_payment_method`,`payment_status`) VALUES 
 ('244191','2019-04-24',370000,'A001',0,'CSH',0),
 ('244192','2019-04-24',500000,'D001',0,'DBT',0);
/*!40000 ALTER TABLE `transaction` ENABLE KEYS */;


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
-- Definition of table `user_voucher`
--

DROP TABLE IF EXISTS `user_voucher`;
CREATE TABLE `user_voucher` (
  `id_customer` varchar(20) NOT NULL,
  `Id_voucher` varchar(45) NOT NULL,
  KEY `Id_customer` (`id_customer`),
  KEY `Id_voucher` (`Id_voucher`),
  CONSTRAINT `Id_customer` FOREIGN KEY (`id_customer`) REFERENCES `customer` (`Id_customer`),
  CONSTRAINT `Id_voucher` FOREIGN KEY (`Id_voucher`) REFERENCES `voucher` (`id_voucher`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `user_voucher`
--

/*!40000 ALTER TABLE `user_voucher` DISABLE KEYS */;
/*!40000 ALTER TABLE `user_voucher` ENABLE KEYS */;


--
-- Definition of table `voucher`
--

DROP TABLE IF EXISTS `voucher`;
CREATE TABLE `voucher` (
  `id_voucher` varchar(20) NOT NULL,
  `id_voucher_type` varchar(20) NOT NULL,
  `Voucher_name` varchar(45) NOT NULL,
  `Voucher_desc` longtext NOT NULL,
  PRIMARY KEY (`id_voucher`) USING BTREE
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `voucher`
--

/*!40000 ALTER TABLE `voucher` DISABLE KEYS */;
/*!40000 ALTER TABLE `voucher` ENABLE KEYS */;


--
-- Definition of table `voucher_type`
--

DROP TABLE IF EXISTS `voucher_type`;
CREATE TABLE `voucher_type` (
  `Id_Voucher_type` varchar(20) NOT NULL,
  `Voucher_type_name` varchar(45) NOT NULL,
  PRIMARY KEY (`Id_Voucher_type`) USING BTREE
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `voucher_type`
--

/*!40000 ALTER TABLE `voucher_type` DISABLE KEYS */;
/*!40000 ALTER TABLE `voucher_type` ENABLE KEYS */;


--
-- Definition of table `voucher_used`
--

DROP TABLE IF EXISTS `voucher_used`;
CREATE TABLE `voucher_used` (
  `id_voucher` varchar(20) NOT NULL,
  `id_transaction` varchar(20) NOT NULL,
  KEY `Voucher_id` (`id_voucher`),
  KEY `transaction_id` (`id_transaction`),
  CONSTRAINT `Voucher_id` FOREIGN KEY (`id_voucher`) REFERENCES `voucher` (`id_voucher`),
  CONSTRAINT `transaction_id` FOREIGN KEY (`id_transaction`) REFERENCES `transaction` (`id_transaction`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `voucher_used`
--

/*!40000 ALTER TABLE `voucher_used` DISABLE KEYS */;
/*!40000 ALTER TABLE `voucher_used` ENABLE KEYS */;


--
-- Definition of table `wishlist`
--

DROP TABLE IF EXISTS `wishlist`;
CREATE TABLE `wishlist` (
  `Id_customer` varchar(20) NOT NULL,
  `Id_product_detail` varchar(20) NOT NULL,
  KEY `FK_wishlist_1` (`Id_customer`),
  KEY `FK_wishlist_2` (`Id_product_detail`),
  CONSTRAINT `FK_wishlist_1` FOREIGN KEY (`Id_customer`) REFERENCES `customer` (`Id_customer`),
  CONSTRAINT `FK_wishlist_2` FOREIGN KEY (`Id_product_detail`) REFERENCES `product_detail` (`id_product_detail`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `wishlist`
--

/*!40000 ALTER TABLE `wishlist` DISABLE KEYS */;
/*!40000 ALTER TABLE `wishlist` ENABLE KEYS */;




/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;

/*
Navicat MySQL Data Transfer

Source Server         : SI-Penjualan
Source Server Version : 50614
Source Host           : localhost:3306
Source Database       : toko_db

Target Server Type    : MYSQL
Target Server Version : 50614
File Encoding         : 65001

Date: 2014-06-03 10:12:29
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for tb_barang
-- ----------------------------
DROP TABLE IF EXISTS `tb_barang`;
CREATE TABLE `tb_barang` (
  `id_barang` int(11) NOT NULL AUTO_INCREMENT,
  `nama_barang` varchar(50) DEFAULT NULL,
  `produk` varchar(100) DEFAULT NULL,
  `harga` varchar(12) DEFAULT NULL,
  `stock` int(11) DEFAULT NULL,
  `status` int(1) DEFAULT NULL,
  PRIMARY KEY (`id_barang`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of tb_barang
-- ----------------------------
INSERT INTO `tb_barang` VALUES ('1', 'Jam Tangan Swiss', 'p2.jpg', '1.000.000', '10', '1');
INSERT INTO `tb_barang` VALUES ('2', 'Jam Tangan Casio', 'p1.jpg', '1.500.000', '10', '1');
INSERT INTO `tb_barang` VALUES ('3', 'Jam Tangan G-Shock', null, '1.200.000', '5', null);
INSERT INTO `tb_barang` VALUES ('4', 'Jam Tangan Gucci', null, '3.000.000', '2', null);
INSERT INTO `tb_barang` VALUES ('5', 'Jam Tangan Murah', null, '20.000', '200', null);
INSERT INTO `tb_barang` VALUES ('6', 'Jam Tangan Menyala', null, '50.000', '10', null);
INSERT INTO `tb_barang` VALUES ('7', 'Jam Tangan Hebat', null, '400.000', '20', null);
INSERT INTO `tb_barang` VALUES ('8', 'Jam Tangan Super', null, '5.000.000', '90', null);

-- ----------------------------
-- Table structure for tb_pemesanan
-- ----------------------------
DROP TABLE IF EXISTS `tb_pemesanan`;
CREATE TABLE `tb_pemesanan` (
  `id_pemesanan` int(11) NOT NULL AUTO_INCREMENT,
  `id_barang` int(11) DEFAULT NULL,
  `nama_pemesan` varchar(100) DEFAULT NULL,
  `alamat` text,
  `kota` varchar(50) DEFAULT NULL,
  `telphone` varchar(12) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `tgl_pemesanan` datetime DEFAULT NULL,
  PRIMARY KEY (`id_pemesanan`)
) ENGINE=InnoDB AUTO_INCREMENT=53 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of tb_pemesanan
-- ----------------------------
INSERT INTO `tb_pemesanan` VALUES ('6', '2', 'Ujang Irawan', 'Dramaga', 'bogor', '12234235235', 'ujang.irawan94@gmail.com', '2014-05-24 09:18:48');
INSERT INTO `tb_pemesanan` VALUES ('7', '2', 'Sonaji', 'Pintu Ledeng', 'bogor', '087870608385', 'contact@sonaji.net', '2014-06-01 00:42:52');
INSERT INTO `tb_pemesanan` VALUES ('35', '6', 'Randi Firmansyah', 'Jl. Pintu Ledeng RT.02', 'jakarta', '08989898', 'sdsd@dfdg.com', '2014-06-02 23:47:30');
INSERT INTO `tb_pemesanan` VALUES ('36', '8', 'testing', 'jsadasd', 'bogor', '234234', 'dsads@dsfgsdg.hgj', '2014-06-02 23:52:45');
INSERT INTO `tb_pemesanan` VALUES ('37', '1', 'hese', 'sadasd', 'bogor', '3423', 'contact@sonaji.net', '2014-06-02 23:55:34');
INSERT INTO `tb_pemesanan` VALUES ('38', '2', 'esdfsdf', '435345', 'bandung', '4535', 'contact@sonaji.net', '2014-06-03 00:02:26');
INSERT INTO `tb_pemesanan` VALUES ('39', '2', 'asaSA', 'RTEWRTR', 'jakarta', '45435', 'contact@sonaji.net', '2014-06-03 00:17:57');
INSERT INTO `tb_pemesanan` VALUES ('40', '2', 'Sonaji Yusup', 'sadasd', 'bogor', '324234', 'contact@sonaji.net', '2014-06-03 00:18:53');
INSERT INTO `tb_pemesanan` VALUES ('41', '8', 'bab setan', 'setan anjing', 'bandung', '324234', 'erewrwer', '2014-06-03 00:33:08');
INSERT INTO `tb_pemesanan` VALUES ('42', '1', 'jam tangan tea', 'wdwdawd', 'tangerang', '324234', 'sdasd', '2014-06-03 00:35:20');
INSERT INTO `tb_pemesanan` VALUES ('43', '6', 'miskin', 'ajalah', 'jakarta', '3423', 'contact@sonaji.net', '2014-06-03 00:37:13');
INSERT INTO `tb_pemesanan` VALUES ('44', '2', 'wadad', 'sdasd', 'bandung', '243', 'contact@sonaji.net', '2014-06-03 00:38:22');
INSERT INTO `tb_pemesanan` VALUES ('45', '1', 'cape', 'dsfsdfdf', 'bogor', '324234', 'contact@sonaji.net', '2014-06-03 00:39:30');
INSERT INTO `tb_pemesanan` VALUES ('46', '6', 'aduh', 'dfsdf', 'bandung', 'w3324', 'fsdf', '2014-06-03 00:46:45');
INSERT INTO `tb_pemesanan` VALUES ('47', '5', 'Miskin PIsan', 'gubuk', 'tangerang', '041', '21323@erer.com', '2014-06-03 00:49:36');
INSERT INTO `tb_pemesanan` VALUES ('48', '2', 'asik', 'dsadad', 'jakarta', '3423', 'sdad', '2014-06-03 01:00:09');
INSERT INTO `tb_pemesanan` VALUES ('49', '8', 'Orang Kaya', 'sasaS', 'bandung', 'SasaS', 'contact@sonaji.net', '2014-06-03 01:16:30');
INSERT INTO `tb_pemesanan` VALUES ('50', '2', 'Sonaji Yusup', 'Jl. Pintu Ledeng RT.02/03 No.15 Ciomas', 'bogor', '087870608385', 'sonacore@gmail.com', '2014-06-03 08:31:31');
INSERT INTO `tb_pemesanan` VALUES ('51', '4', 'Ujang Irawan', 'JL. jalan', 'bandung', '234234', 'ujang@Yahoo.com', '2014-06-03 09:34:23');
INSERT INTO `tb_pemesanan` VALUES ('52', '8', 'Sandi Wibisono', 'Rumahnya Orang Kaya', 'jakarta', '234234', 'sandi_orangkaya@yahoo.com', '2014-06-03 10:09:31');

-- ----------------------------
-- Table structure for user
-- ----------------------------
DROP TABLE IF EXISTS `user`;
CREATE TABLE `user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of user
-- ----------------------------
INSERT INTO `user` VALUES ('1', 'admin', '123');

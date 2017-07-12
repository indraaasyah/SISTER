-- Adminer 4.3.1 MySQL dump

SET NAMES utf8;
SET time_zone = '+00:00';
SET foreign_key_checks = 0;
SET sql_mode = 'NO_AUTO_VALUE_ON_ZERO';

DROP TABLE IF EXISTS `pelanggan`;
CREATE TABLE `pelanggan` (
  `id_pelanggan` int(11) NOT NULL AUTO_INCREMENT,
  `nama` varchar(50) NOT NULL,
  `alamat` text NOT NULL,
  `jenis_kelamin` varchar(9) NOT NULL,
  `nama_barang` varchar(50) NOT NULL,
  `keluhan` text NOT NULL,
  `no_telepon` varchar(14) NOT NULL,
  PRIMARY KEY (`id_pelanggan`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

INSERT INTO `pelanggan` (`id_pelanggan`, `nama`, `alamat`, `jenis_kelamin`, `nama_barang`, `keluhan`, `no_telepon`) VALUES
(1,	'Fahmi Syarif',	'Jl. Tanjungpura no. 12',	'Laki-laki',	'Acer 756',	'Layar Pecah, Harddisk Undetected',	'085652046113');

DROP TABLE IF EXISTS `user`;
CREATE TABLE `user` (
  `id_user` int(11) NOT NULL AUTO_INCREMENT,
  `nama_user` varchar(50) NOT NULL,
  `jabatan` varchar(50) NOT NULL,
  `alamat` text NOT NULL,
  `jenis_kelamin` varchar(9) NOT NULL,
  `no_telepon` varchar(14) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  PRIMARY KEY (`id_user`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

INSERT INTO `user` (`id_user`, `nama_user`, `jabatan`, `alamat`, `jenis_kelamin`, `no_telepon`, `username`, `password`) VALUES
(1,	'Alysha Puji Utami',	'Teknisi',	'Jl. Paris 2',	'perempuan',	'085750053342',	'cecek',	'qwert123');

-- 2017-07-12 06:30:33

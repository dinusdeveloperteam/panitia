-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 31, 2022 at 08:20 AM
-- Server version: 10.4.19-MariaDB
-- PHP Version: 8.0.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_lelangikan`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `userid` char(10) NOT NULL,
  `nama` varchar(60) NOT NULL,
  `telp` varchar(20) NOT NULL,
  `username` char(20) NOT NULL,
  `password` char(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `data_jenis`
--

CREATE TABLE `data_jenis` (
  `id_jenis` int(10) NOT NULL,
  `jenis` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `data_jenis`
--

INSERT INTO `data_jenis` (`id_jenis`, `jenis`) VALUES
(1, 'Perorangan'),
(2, 'Pelelang'),
(3, 'Koperasi');

-- --------------------------------------------------------

--
-- Table structure for table `lelang`
--

CREATE TABLE `lelang` (
  `lelang_id` char(20) NOT NULL,
  `pelelang_id` char(20) DEFAULT NULL,
  `produk` varchar(40) DEFAULT NULL,
  `deskripsi_produk` text DEFAULT NULL,
  `image1` varchar(255) DEFAULT NULL,
  `image2` varchar(255) DEFAULT NULL,
  `image3` varchar(255) DEFAULT NULL,
  `image4` varchar(255) DEFAULT NULL,
  `harga_awal` double DEFAULT NULL,
  `harga_minimal_diterima` double DEFAULT NULL,
  `incremental_value` double DEFAULT NULL,
  `tgl_mulai` datetime DEFAULT NULL,
  `tgl_selesai` datetime DEFAULT NULL,
  `harga_beli_sekarang` double DEFAULT NULL,
  `metode_bayar` int(11) DEFAULT NULL,
  `status` int(11) DEFAULT NULL,
  `panitia_id` char(20) DEFAULT NULL,
  `keterangan` varchar(255) DEFAULT NULL,
  `jumlah` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `lelang`
--

INSERT INTO `lelang` (`lelang_id`, `pelelang_id`, `produk`, `deskripsi_produk`, `image1`, `image2`, `image3`, `image4`, `harga_awal`, `harga_minimal_diterima`, `incremental_value`, `tgl_mulai`, `tgl_selesai`, `harga_beli_sekarang`, `metode_bayar`, `status`, `panitia_id`, `keterangan`, `jumlah`) VALUES
('LL-2022-00002', '1', 'Ikan Mas Jumbo', 'Ikan Mas kualitas terbaik sepanjang masa', 'ikanmas1.jpg', '', '', '', 10000, 20000, 1000, '0000-00-00 00:00:00', '2022-08-27 11:46:00', 30000, 0, 0, '', '', NULL),
('LL-2022-00003', '2', 'Ikan Nila Merah', 'Ikan Nila merah paling berkualitas se Indonesia Raya', 'ikannila1.jpg', '', '', '', 50000, 70000, 1000, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 100000, 0, 0, '', '', NULL),
('LL-2022-00004', '3', 'Ikan Lele Dumbo', 'Ikan Lele Dumbo dengan kualitas terbaik sedunia', 'lele.jpg', 'lele.jpg', 'koi.jpg', 'louhan.jpg', 100000, 200000, 2000, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 300000, 0, 0, '', '', NULL),
('LL-2022-00005', '4', 'Ikan Koi', 'Ikan Koi pemenang lomba tingkat dunia?', 'koi.jpg', '', '', '', 10000000, 25000000, 500000, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 40000000, 0, 0, '', '', NULL),
('LL-2022-00006', '5', 'Ikan Cupang', 'Ikan Cupang pemenang lomba antar RT', 'cupang.jpg', '', '', '', 100000, 300000, 1000, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 500000, 0, 0, '', '', NULL),
('LL-2022-00007', '6', 'Ikan Louhan', 'Ikan Louhan termahal di dunia karena pemenang kontes terbesar sedunia', 'louhan.jpg', '', '', '', 1000000000, 3000000000, 1000000, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 5000000000, 0, 0, '', '', NULL),
('LL-2022-00008', '7', 'Ikan Toman', 'Ikan Toman, sang predator nan menawan', 'toman.jpg', '', '', '', 300000, 700000, 1000, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 1100000, 0, 0, '', '', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `lelang_bid`
--

CREATE TABLE `lelang_bid` (
  `bid_id` int(11) NOT NULL,
  `lelang_id` char(20) DEFAULT NULL,
  `peserta_id` char(20) DEFAULT NULL,
  `tgl_bid` datetime DEFAULT NULL,
  `harga_tawar` double DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `lelang_bid`
--

INSERT INTO `lelang_bid` (`bid_id`, `lelang_id`, `peserta_id`, `tgl_bid`, `harga_tawar`) VALUES
(1, '1', '1', '2022-08-23 09:00:00', 11000),
(2, '1', '2', '2022-08-23 09:02:00', 15000),
(3, '1', '3', '2022-08-23 13:24:00', 17000),
(4, 'LL-2022-00002', 'PSY-2022-00002', '2022-08-23 11:04:47', 145000);

-- --------------------------------------------------------

--
-- Table structure for table `lelang_pembayaran`
--

CREATE TABLE `lelang_pembayaran` (
  `lelang_id` char(20) NOT NULL,
  `tgl_pembayaran` date DEFAULT NULL,
  `nominal_dibayarkan` double DEFAULT NULL,
  `bukti_pembayaran` varchar(255) DEFAULT NULL,
  `panitia_id` char(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `lelang_pembayaran`
--

INSERT INTO `lelang_pembayaran` (`lelang_id`, `tgl_pembayaran`, `nominal_dibayarkan`, `bukti_pembayaran`, `panitia_id`) VALUES
('LL-2022-00002', '2022-08-25', 250000, 'image1-18-08-20221660791614.jpeg', 'PL-2022-00001');

-- --------------------------------------------------------

--
-- Table structure for table `lelang_pemenang`
--

CREATE TABLE `lelang_pemenang` (
  `lelang_id` char(20) NOT NULL,
  `peserta_id` char(20) DEFAULT NULL,
  `tgl_diumumkan` datetime DEFAULT NULL,
  `bukti_bayar` varchar(255) DEFAULT NULL,
  `tgl_bayar` date DEFAULT NULL,
  `provinsi_kirim` varchar(30) DEFAULT NULL,
  `kota_kirim` varchar(30) DEFAULT NULL,
  `kecamatan_kirim` varchar(30) DEFAULT NULL,
  `kelurahan_kirim` varchar(30) DEFAULT NULL,
  `alamat_kirim` varchar(50) DEFAULT NULL,
  `status` int(11) DEFAULT NULL,
  `konfirmasi_terimaproduk` int(11) DEFAULT NULL,
  `testimoni_pemenang` text DEFAULT NULL,
  `panitia_id` char(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `lelang_pemenang`
--

INSERT INTO `lelang_pemenang` (`lelang_id`, `peserta_id`, `tgl_diumumkan`, `bukti_bayar`, `tgl_bayar`, `provinsi_kirim`, `kota_kirim`, `kecamatan_kirim`, `kelurahan_kirim`, `alamat_kirim`, `status`, `konfirmasi_terimaproduk`, `testimoni_pemenang`, `panitia_id`) VALUES
('1', '1', '2022-08-29 10:00:00', '', '2022-08-28', 'Jawa Tengah', 'Semarang', 'Semarang Tengah', 'Pendrikan Kidul', 'Jalan Arjuna 26', 0, 0, 'Keren ikannya keliatan sehat dan gemuk banget kayak saya hehe', 'PL-2022-00001'),
('LL-2022-00002', 'PSY-2022-00002', '2022-08-24 10:32:08', 'image1-18-08-20221660791614.jpeg', '2022-08-25', 'Jawa Tengah', 'Pemalang', 'Mulyoharjo', 'Pemalang', 'Jalan Bangkit 1', 1, 2, 'Keren!!!!!', 'PL-2022-00001');

-- --------------------------------------------------------

--
-- Table structure for table `panitia`
--

CREATE TABLE `panitia` (
  `panitia_id` char(20) NOT NULL,
  `nik` varchar(20) NOT NULL,
  `nama` varchar(40) NOT NULL,
  `instansi` varchar(30) NOT NULL,
  `jabatan` varchar(30) NOT NULL,
  `jeniskel` char(1) NOT NULL,
  `foto` varchar(255) NOT NULL,
  `username` char(20) NOT NULL,
  `password` char(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `pelelang`
--

CREATE TABLE `pelelang` (
  `pelelang_id` char(20) NOT NULL,
  `nik` varchar(20) NOT NULL,
  `nama` varchar(40) NOT NULL,
  `jenis` int(11) NOT NULL,
  `provinsi` varchar(30) NOT NULL,
  `kota` varchar(30) NOT NULL,
  `kecamatan` varchar(30) NOT NULL,
  `kelurahan` varchar(30) NOT NULL,
  `alamat` varchar(50) NOT NULL,
  `telp` varchar(20) NOT NULL,
  `email` varchar(30) NOT NULL,
  `npwp` varchar(20) NOT NULL,
  `norekening` varchar(20) NOT NULL,
  `bank` varchar(30) NOT NULL,
  `atasnama` varchar(30) NOT NULL,
  `filektp` varchar(255) NOT NULL,
  `filenpwp` varchar(255) NOT NULL,
  `fileSIUP` varchar(255) NOT NULL,
  `status` int(11) NOT NULL,
  `deskripsi` text NOT NULL,
  `username` char(20) NOT NULL,
  `password` char(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pelelang`
--

INSERT INTO `pelelang` (`pelelang_id`, `nik`, `nama`, `jenis`, `provinsi`, `kota`, `kecamatan`, `kelurahan`, `alamat`, `telp`, `email`, `npwp`, `norekening`, `bank`, `atasnama`, `filektp`, `filenpwp`, `fileSIUP`, `status`, `deskripsi`, `username`, `password`) VALUES
('PL-2022-00001', '2983242', 'abc', 1, 'coba', 'coba', 'coba', 'coba', 'coba', '0912731', 'exam@gmail.com', '111', '12121', 'BRI', 'test', 'image1-19-08-20221660875827.jpeg', 'image2-19-08-20221660875827.jpeg', 'image3-19-08-20221660875827.jpeg', 1, '12131vhvnsdmndmnadaad', '123', '412f0b4b3ff4653b4618df4eecdccc6e');

-- --------------------------------------------------------

--
-- Table structure for table `peserta`
--

CREATE TABLE `peserta` (
  `peserta_id` char(20) NOT NULL,
  `nik` varchar(20) NOT NULL,
  `nama` varchar(40) NOT NULL,
  `jeniskel` char(1) NOT NULL,
  `provinsi` varchar(30) NOT NULL,
  `kota` varchar(30) NOT NULL,
  `kecamatan` varchar(30) NOT NULL,
  `kelurahan` varchar(30) NOT NULL,
  `alamat` varchar(50) NOT NULL,
  `telp` varchar(20) NOT NULL,
  `email` varchar(30) NOT NULL,
  `npwp` varchar(20) NOT NULL,
  `filektp` varchar(255) NOT NULL,
  `filenpwp` varchar(255) NOT NULL,
  `deposit` double NOT NULL,
  `status` int(11) NOT NULL,
  `username` char(20) NOT NULL,
  `password` char(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `peserta`
--

INSERT INTO `peserta` (`peserta_id`, `nik`, `nama`, `jeniskel`, `provinsi`, `kota`, `kecamatan`, `kelurahan`, `alamat`, `telp`, `email`, `npwp`, `filektp`, `filenpwp`, `deposit`, `status`, `username`, `password`) VALUES
('1', '000', 'Agus', 'L', 'Jawa Tengah', 'Semarang', 'Semarang Tengah', 'Pendrikan Kidul', 'Jalan Arjuna', '000', '000@gmail.com', '000', '', '', 500000, 1, 'qq', '412f0b4b3ff4653b4618df4eecdccc6e'),
('2', '222', 'Santo', 'L', 'Jawa Tengah', 'Jepara', 'xxxx', 'xxxx', 'xxxx', '111', '111@gmail.com', '111', '', '', 100000, 1, 'santo', 'ea07ff4e27d0bcf5f786f39e44e031f1'),
('3', '111', 'Susan', 'P', 'Jawa Tengah', 'Wonosobo', 'Watumalang', 'Ndero', 'Ndero Ngisor', '222', '222@gmail.com', '222', '', '', 200000, 0, '', ''),
('PSY-2022-00001', '333333333333', 'Purwa', '', '', '', '', '', 'Jalan Parakan 158', '085713607109', 'purwa@gmail.com', '', '', '', 0, 1, 'purwa', '0a1c5976af7c9d8c51a717f5e5322c7e');

-- --------------------------------------------------------

--
-- Table structure for table `peserta_deposit`
--

CREATE TABLE `peserta_deposit` (
  `deposit_id` int(11) NOT NULL,
  `peserta_id` char(20) NOT NULL,
  `tgl_deposit` date NOT NULL,
  `nominal_deposit` double NOT NULL,
  `bukti_pembayaran` varchar(255) NOT NULL,
  `status` int(11) NOT NULL,
  `panitia_id` char(20) NOT NULL,
  `keterangan` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`userid`);

--
-- Indexes for table `lelang`
--
ALTER TABLE `lelang`
  ADD PRIMARY KEY (`lelang_id`);

--
-- Indexes for table `lelang_bid`
--
ALTER TABLE `lelang_bid`
  ADD PRIMARY KEY (`bid_id`);

--
-- Indexes for table `lelang_pembayaran`
--
ALTER TABLE `lelang_pembayaran`
  ADD PRIMARY KEY (`lelang_id`);

--
-- Indexes for table `lelang_pemenang`
--
ALTER TABLE `lelang_pemenang`
  ADD PRIMARY KEY (`lelang_id`);

--
-- Indexes for table `panitia`
--
ALTER TABLE `panitia`
  ADD PRIMARY KEY (`panitia_id`);

--
-- Indexes for table `pelelang`
--
ALTER TABLE `pelelang`
  ADD PRIMARY KEY (`pelelang_id`);

--
-- Indexes for table `peserta`
--
ALTER TABLE `peserta`
  ADD PRIMARY KEY (`peserta_id`);

--
-- Indexes for table `peserta_deposit`
--
ALTER TABLE `peserta_deposit`
  ADD PRIMARY KEY (`deposit_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `lelang_bid`
--
ALTER TABLE `lelang_bid`
  MODIFY `bid_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `peserta_deposit`
--
ALTER TABLE `peserta_deposit`
  MODIFY `deposit_id` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

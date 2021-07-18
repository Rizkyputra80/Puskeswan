-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 18, 2021 at 06:10 AM
-- Server version: 10.4.18-MariaDB
-- PHP Version: 8.0.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `puskeswan`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id_admin` int(11) NOT NULL,
  `nama_admin` varchar(50) NOT NULL,
  `username` varchar(25) NOT NULL,
  `password` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id_admin`, `nama_admin`, `username`, `password`) VALUES
(1, 'Rizky Putra', 'rizkyputra80', 'rizkyputra80'),
(2, 'Rahima Zulaikha', 'biodiana', 'biodiana');

-- --------------------------------------------------------

--
-- Table structure for table `konten`
--

CREATE TABLE `konten` (
  `id_konten` int(11) NOT NULL,
  `judul_konten` varchar(50) NOT NULL,
  `deskripsi_konten` text NOT NULL,
  `foto_konten` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `konten`
--

INSERT INTO `konten` (`id_konten`, `judul_konten`, `deskripsi_konten`, `foto_konten`) VALUES
(1, 'Informasi Sterilisasi Kucing', 'Syarat Kucing Untuk Disterilisasi : \r\n1. Kucing lokal sehat secara klinis dinyatakan oleh doker hewan Puskeswan. \r\n2. Tidak dalam kondisi hamil atau menyusui. \r\n3. Usia kucing lebih dari 6 bulan dengan berat > 2 kilogram. Sedangkan kucing yang berusia 5 tahun wajib menyertai hasil pemeriksaan darah dan mendapatkan surat layak operasi. \r\n4. Direkomendasikan kucing telah mendapatkan core vaccine (panleu, calici, fhv) serta obat cacing lengkap.', 'kucing.jpg'),
(2, 'Bagaimana cara memandikan Anjing?', 'Sikat Anjing Sebelum Mandi. Rambut kusut bisa menahan air dan membuat anjing mengalami iritasi kulit, Gunakan Air Hangat dan gunakan shampoo khusus Anjing. ...\r\nBilas Sampai Bersih lalu Beri Udara Kering.\r\nAgar anjing senang Berikan dia Hadiah berupa makanan.', 'Anjing.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `pendaftaran`
--

CREATE TABLE `pendaftaran` (
  `id_pendaftaran` varchar(12) NOT NULL,
  `tgl_pendaftaran` date NOT NULL,
  `nama_hewan` varchar(15) NOT NULL,
  `jenis_hewan` varchar(15) NOT NULL,
  `umur_hewan` varchar(15) NOT NULL,
  `jk_hewan` varchar(12) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pendaftaran`
--

INSERT INTO `pendaftaran` (`id_pendaftaran`, `tgl_pendaftaran`, `nama_hewan`, `jenis_hewan`, `umur_hewan`, `jk_hewan`) VALUES
('P202100001', '2015-07-21', 'Yongky', 'Kucing', '5 tahun', 'Laki-Laki'),
('P202100002', '2021-07-15', 'Komeng', 'Kucing', '6 Bulan', 'Laki-Laki'),
('P202100003', '2021-07-16', 'Sophiawan', 'Kucing', '6 Bulan', 'Laki-Laki');

-- --------------------------------------------------------

--
-- Table structure for table `riwayat`
--

CREATE TABLE `riwayat` (
  `id_riwayat` varchar(10) NOT NULL,
  `id_user2` varchar(10) NOT NULL,
  `nama_user2` varchar(50) NOT NULL,
  `alamat_user2` text NOT NULL,
  `telp` varchar(15) NOT NULL,
  `kode_pendaftaran2` varchar(12) NOT NULL,
  `nama_hewan2` varchar(25) NOT NULL,
  `jenis_hewan2` varchar(50) NOT NULL,
  `umur_hewan2` varchar(25) NOT NULL,
  `jenis_kelamin2` varchar(50) NOT NULL,
  `tanggal_pendaftaran2` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `riwayat`
--

INSERT INTO `riwayat` (`id_riwayat`, `id_user2`, `nama_user2`, `alamat_user2`, `telp`, `kode_pendaftaran2`, `nama_hewan2`, `jenis_hewan2`, `umur_hewan2`, `jenis_kelamin2`, `tanggal_pendaftaran2`) VALUES
('R202100001', '1', 'Rizky Putra', 'Taman Fasco blok A1 no 3', '0896123456', 'P202100001', 'Sophiawan', 'Kucing', '6 Bulan', 'Laki-Laki', '2021-07-21'),
('R202100002', '2', 'Sekar Ayu Kusumaningrum', 'Taman Fasco blok A1 no 3', '08961234567', 'P202100002', 'Komeng', 'Kucing', '3 Tahun', 'Laki-Laki', '2021-07-21'),
('R202100003', '2', 'Sekar Ayu Kusumaningrum', 'Taman Fasco blok A1 no 3', '08961234567', 'P202100003', 'Mihawk', 'Elang', '5 tahun', 'Laki-Laki', '2015-07-21'),
('R202100004', '1', 'Rizky Putra', 'Taman Fasco blok A1 no 3', '0896123456', 'P202100001', 'Yongky', 'Kucing', '5 tahun', 'Laki-Laki', '2015-07-21'),
('R202100005', '1', 'Rizky Putra', 'Taman Fasco blok A1 no 3', '0896123456', 'P202100002', 'Komeng', 'Kucing', '6 Bulan', 'Laki-Laki', '2021-07-15'),
('R202100006', '1', 'Rizky Putra', 'Taman Fasco blok A1 no 3', '0896123456', 'P202100003', 'Sophiawan', 'Kucing', '6 Bulan', 'Laki-Laki', '2021-07-16');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id_user` int(10) NOT NULL,
  `nik` varchar(16) NOT NULL,
  `password_user` varchar(25) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `tgl_lahir` date NOT NULL,
  `tmp_lahir` varchar(50) NOT NULL,
  `jk` enum('Laki-Laki','Perempuan','','') NOT NULL,
  `agama` enum('Islam','Kristen','Konghucu','Hindu','Budha','','') NOT NULL,
  `telp` varchar(15) NOT NULL,
  `alamat` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id_user`, `nik`, `password_user`, `nama`, `tgl_lahir`, `tmp_lahir`, `jk`, `agama`, `telp`, `alamat`) VALUES
(1, '3674042311990001', 'rizkyputra', 'Rizky Putra', '1999-11-23', 'Jakarta', 'Laki-Laki', 'Islam', '0896123456', 'Taman Fasco blok A1 no 3'),
(2, '3674042311990002', 'sekar', 'Sekar Ayu Kusumaningrum', '2008-01-02', 'Tangerang Selatan', 'Perempuan', 'Islam', '08961234567', 'Taman Fasco blok A1 no 3');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id_admin`);

--
-- Indexes for table `konten`
--
ALTER TABLE `konten`
  ADD PRIMARY KEY (`id_konten`);

--
-- Indexes for table `pendaftaran`
--
ALTER TABLE `pendaftaran`
  ADD PRIMARY KEY (`id_pendaftaran`);

--
-- Indexes for table `riwayat`
--
ALTER TABLE `riwayat`
  ADD PRIMARY KEY (`id_riwayat`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id_admin` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `konten`
--
ALTER TABLE `konten`
  MODIFY `id_konten` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

-- phpMyAdmin SQL Dump
-- version 4.9.5
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Jun 03, 2021 at 08:43 AM
-- Server version: 10.3.16-MariaDB
-- PHP Version: 7.3.23

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `id15539182_rekam_medis`
--

-- --------------------------------------------------------

--
-- Table structure for table `data_dokter`
--

CREATE TABLE `data_dokter` (
  `id_dokter` varchar(8) NOT NULL,
  `nama_dokter` varchar(40) NOT NULL,
  `jenis_dokter` varchar(40) NOT NULL,
  `hari_praktek` varchar(20) NOT NULL,
  `jam_praktek` varchar(15) NOT NULL,
  `notes` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `data_dokter`
--

INSERT INTO `data_dokter` (`id_dokter`, `nama_dokter`, `jenis_dokter`, `hari_praktek`, `jam_praktek`, `notes`) VALUES
('DR001', 'Aliandra Masayu', 'Dokter Umum', 'Senin-Sabtu', '08.00 - 16.00', '-'),
('DR002', 'Novia Nur Arifah, Sp.JPd', 'Spesialis Jantung dan Pembuluh Darah', 'Senin - Jumat', '08.00 - 12.00', '-'),
('DR003', 'Gautama, Sp.PD', 'Spesialis Penyakit Dalam', 'setiap hari', '08.00 - 10.00', '-');

-- --------------------------------------------------------

--
-- Table structure for table `data_obat`
--

CREATE TABLE `data_obat` (
  `id_obat` varchar(8) NOT NULL,
  `nama_obat` varchar(40) NOT NULL,
  `supplier` varchar(50) NOT NULL,
  `dosis` varchar(25) NOT NULL,
  `konsumsi` varchar(25) NOT NULL,
  `notes` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `data_obat`
--

INSERT INTO `data_obat` (`id_obat`, `nama_obat`, `supplier`, `dosis`, `konsumsi`, `notes`) VALUES
('OB001', 'Panadol', 'PT Obat Nasional', '1x', 'Saat Timbul Gejala', NULL),
('OB002', 'Lansoprazole', 'Kimia Farma', '3x/hr', 'Sebelum Makan', 'Diminum saat timbul nyeri'),
('OB003', 'Vitamin D', 'Phapros', 'bebas', 'setelah makan', '-');

-- --------------------------------------------------------

--
-- Table structure for table `data_pasien`
--

CREATE TABLE `data_pasien` (
  `id_pasien` varchar(8) NOT NULL,
  `nama_pasien` varchar(40) NOT NULL,
  `tanggal_lahir` date NOT NULL,
  `no_telp` varchar(13) NOT NULL,
  `alamat` varchar(40) NOT NULL,
  `notes` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `data_pasien`
--

INSERT INTO `data_pasien` (`id_pasien`, `nama_pasien`, `tanggal_lahir`, `no_telp`, `alamat`, `notes`) VALUES
('PS001', 'Arshaka Abimanyu', '2020-11-04', '081325634201', 'Kaligetas Rt 03 / Rw 04 Jatibarang Mijen', NULL),
('PS002', 'Nurul Hidayah', '2020-11-18', '089415415151', 'Mijen', '-'),
('PS003', 'Do Kyung Soo', '2020-11-05', '08995795199', 'Seoul', '98'),
('PS004', 'Park Hyuhyu', '1999-09-08', '0890896000', 'Jakarta', 'tidak ada');

-- --------------------------------------------------------

--
-- Table structure for table `data_pemeriksaan`
--

CREATE TABLE `data_pemeriksaan` (
  `id_pemeriksaan` varchar(8) NOT NULL,
  `nama_pemeriksaan` varchar(40) NOT NULL,
  `harga` int(10) NOT NULL,
  `notes` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `data_pemeriksaan`
--

INSERT INTO `data_pemeriksaan` (`id_pemeriksaan`, `nama_pemeriksaan`, `harga`, `notes`) VALUES
('PM001', 'Pemeriksaan Fisik', 30000, 'kosong'),
('PM002', 'USG', 200000, 'Abdomen'),
('PM003', 'Treadmill', 800000, 'MST');

-- --------------------------------------------------------

--
-- Table structure for table `data_penyakit`
--

CREATE TABLE `data_penyakit` (
  `id_penyakit` varchar(8) NOT NULL,
  `nama_penyakit` varchar(40) NOT NULL,
  `notes` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `data_penyakit`
--

INSERT INTO `data_penyakit` (`id_penyakit`, `nama_penyakit`, `notes`) VALUES
('PK001', 'Sakit Kepala', '-'),
('PK002', 'Batuk Pilek', 'Flu'),
('PK003', 'RBBB', 'Rujuk Dr Sp. B'),
('PK004', 'Bronchitis', 'Rujuk dr. Spesialis Penyakit Dalam');

-- --------------------------------------------------------

--
-- Table structure for table `rekam_medis`
--

CREATE TABLE `rekam_medis` (
  `id_rm` varchar(8) NOT NULL,
  `id_pasien` varchar(8) NOT NULL,
  `id_pemeriksaan` varchar(8) NOT NULL,
  `id_penyakit` varchar(8) NOT NULL,
  `id_obat` varchar(8) NOT NULL,
  `tinggi_badan` varchar(6) NOT NULL,
  `berat_badan` varchar(6) NOT NULL,
  `tekanan_darah` varchar(15) NOT NULL,
  `hasil_pemeriksaan` varchar(150) NOT NULL,
  `notes` varchar(150) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `rekam_medis`
--

INSERT INTO `rekam_medis` (`id_rm`, `id_pasien`, `id_pemeriksaan`, `id_penyakit`, `id_obat`, `tinggi_badan`, `berat_badan`, `tekanan_darah`, `hasil_pemeriksaan`, `notes`) VALUES
('RM001', 'PS001', 'PM001', 'PK001', 'OB001', '165 cm', '75 kg', '120/80 mmHg', 'Migrain', 'jaga Pola makan , jangan stress'),
('RM002', 'PS001', 'PM001', 'PK001', 'OB001', '150 cm', '60 kg', '120/80 mmHg', 'Normal', 'Normal'),
('RM003', 'PS003', 'PM003', 'PK003', 'OB003', '190 cm', '80 kg', '120/80 mmHg', 'Normal', 'None');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `data_dokter`
--
ALTER TABLE `data_dokter`
  ADD PRIMARY KEY (`id_dokter`);

--
-- Indexes for table `data_obat`
--
ALTER TABLE `data_obat`
  ADD PRIMARY KEY (`id_obat`);

--
-- Indexes for table `data_pasien`
--
ALTER TABLE `data_pasien`
  ADD PRIMARY KEY (`id_pasien`);

--
-- Indexes for table `data_pemeriksaan`
--
ALTER TABLE `data_pemeriksaan`
  ADD PRIMARY KEY (`id_pemeriksaan`);

--
-- Indexes for table `data_penyakit`
--
ALTER TABLE `data_penyakit`
  ADD PRIMARY KEY (`id_penyakit`);

--
-- Indexes for table `rekam_medis`
--
ALTER TABLE `rekam_medis`
  ADD PRIMARY KEY (`id_rm`),
  ADD KEY `id_pasien` (`id_pasien`),
  ADD KEY `id_obat` (`id_obat`),
  ADD KEY `id_pemeriksaan` (`id_pemeriksaan`),
  ADD KEY `id_penyakit` (`id_penyakit`);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `rekam_medis`
--
ALTER TABLE `rekam_medis`
  ADD CONSTRAINT `id_obat` FOREIGN KEY (`id_obat`) REFERENCES `data_obat` (`id_obat`),
  ADD CONSTRAINT `id_pasien` FOREIGN KEY (`id_pasien`) REFERENCES `data_pasien` (`id_pasien`),
  ADD CONSTRAINT `id_pemeriksaan` FOREIGN KEY (`id_pemeriksaan`) REFERENCES `data_pemeriksaan` (`id_pemeriksaan`),
  ADD CONSTRAINT `id_penyakit` FOREIGN KEY (`id_penyakit`) REFERENCES `data_penyakit` (`id_penyakit`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

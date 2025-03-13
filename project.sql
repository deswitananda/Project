-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Mar 13, 2025 at 01:02 PM
-- Server version: 8.0.30
-- PHP Version: 7.4.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `project`
--

-- --------------------------------------------------------

--
-- Table structure for table `akun_user`
--

CREATE TABLE `akun_user` (
  `id` int NOT NULL,
  `email` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `role` varchar(50) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL,
  `deleted_at` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `akun_user`
--

INSERT INTO `akun_user` (`id`, `email`, `username`, `password`, `role`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'admin@gmail.com', 'admin', 'admin1', 'admin', '2025-03-08 14:46:39', '2025-03-08 14:46:39', 0),
(2, 'user@gmail.com', 'user', 'user1', 'user', '2025-03-10 09:37:09', '2025-03-10 09:37:09', 0);

-- --------------------------------------------------------

--
-- Table structure for table `paket_haji`
--

CREATE TABLE `paket_haji` (
  `id` int NOT NULL,
  `nama_paket` varchar(100) NOT NULL,
  `deskripsi` text NOT NULL,
  `harga` varchar(50) NOT NULL,
  `durasi` int NOT NULL,
  `tanggal_berangkat` date NOT NULL,
  `tanggal_pulang` date NOT NULL,
  `fasilitas` varchar(100) NOT NULL,
  `maskapai` varchar(100) NOT NULL,
  `kuota` int NOT NULL,
  `status` enum('tersedia','penuh','tutup','') NOT NULL,
  `created_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `deleted_at` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `paket_haji`
--

INSERT INTO `paket_haji` (`id`, `nama_paket`, `deskripsi`, `harga`, `durasi`, `tanggal_berangkat`, `tanggal_pulang`, `fasilitas`, `maskapai`, `kuota`, `status`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'Haji Reguler', 'haji', 'Rp 80.000.000', 30, '2025-04-01', '2025-05-22', 'Hotel Bintang 5', 'Lion Air', 100, 'tersedia', '2025-03-12 20:35:19', '2025-03-12 20:35:19', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `akun_user`
--
ALTER TABLE `akun_user`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `paket_haji`
--
ALTER TABLE `paket_haji`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `akun_user`
--
ALTER TABLE `akun_user`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `paket_haji`
--
ALTER TABLE `paket_haji`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

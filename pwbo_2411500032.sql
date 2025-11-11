-- phpMyAdmin SQL Dump
-- version 5.2.1deb3
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Nov 11, 2025 at 02:51 AM
-- Server version: 8.0.43-0ubuntu0.24.04.2
-- PHP Version: 8.3.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pwbo_2411500032`
--

-- --------------------------------------------------------

--
-- Table structure for table `mahasiswa`
--

CREATE TABLE `mahasiswa` (
  `id` int NOT NULL,
  `nama` varchar(100) COLLATE utf8mb4_general_ci NOT NULL,
  `nim` varchar(10) COLLATE utf8mb4_general_ci NOT NULL,
  `email` varchar(50) COLLATE utf8mb4_general_ci NOT NULL,
  `jurusan` varchar(50) COLLATE utf8mb4_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `mahasiswa`
--

INSERT INTO `mahasiswa` (`id`, `nama`, `nim`, `email`, `jurusan`) VALUES
(8, 'RIFQI AL GHIFARI', '2411500032', 'rifqi@example.com', 'Informatika'),
(9, 'Julfandi', '2411500008', 'julfandi@example.com', 'Sistem Informasi');

-- --------------------------------------------------------

--
-- Table structure for table `matkul_2411500032`
--

CREATE TABLE `matkul_2411500032` (
  `id` int NOT NULL,
  `kode_mk` varchar(10) NOT NULL,
  `nama_mk` varchar(100) NOT NULL,
  `jns_mk` varchar(100) NOT NULL,
  `sks` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `matkul_2411500032`
--

INSERT INTO `matkul_2411500032` (`id`, `kode_mk`, `nama_mk`, `jns_mk`, `sks`) VALUES
(1, 'KF-001', 'Kalkulus', 'Teori', '3'),
(2, 'PF-002', 'Pemrograman Database', 'Praktikum', '4');

-- --------------------------------------------------------

--
-- Table structure for table `peminjaman_2411500032`
--

CREATE TABLE `peminjaman_2411500032` (
  `Kd_pinjam032` varchar(6) NOT NULL,
  `NimMhs032` varchar(11) NOT NULL,
  `TglPinjam032` date NOT NULL,
  `JmlPinjam032` int NOT NULL,
  `JudulBuku032` varchar(30) NOT NULL,
  `TglKembali032` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `mahasiswa`
--
ALTER TABLE `mahasiswa`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `matkul_2411500032`
--
ALTER TABLE `matkul_2411500032`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `peminjaman_2411500032`
--
ALTER TABLE `peminjaman_2411500032`
  ADD PRIMARY KEY (`Kd_pinjam032`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `mahasiswa`
--
ALTER TABLE `mahasiswa`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `matkul_2411500032`
--
ALTER TABLE `matkul_2411500032`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Dec 07, 2024 at 06:13 PM
-- Server version: 8.0.30
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_rekomendasi_gadget`
--

-- --------------------------------------------------------

--
-- Table structure for table `tb_admin`
--

CREATE TABLE `tb_admin` (
  `id` int NOT NULL,
  `name` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `password` varchar(255) NOT NULL,
  `username` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `tb_admin`
--

INSERT INTO `tb_admin` (`id`, `name`, `password`, `username`) VALUES
(1, 'coba', '$2y$10$4QhZOOjGQdA6xtOR9g3J/uktBcH8mgJIclXfEUs3S7yjcLn5PA5fa', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `tb_categories`
--

CREATE TABLE `tb_categories` (
  `id` int NOT NULL,
  `photo` varchar(50) NOT NULL,
  `categories` varchar(50) NOT NULL,
  `price` int NOT NULL,
  `description` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `tb_categories`
--

INSERT INTO `tb_categories` (`id`, `photo`, `categories`, `price`, `description`) VALUES
(3, '675470229978b.jpg', 'Handphone SS', 5000000, 'ini hape keluaran terbaru ya kak, jadi masih bagus banget deh'),
(4, '67547050c1d1a.jpg', 'Tablet', 8000000, 'ini tab agak kenceng tapi murah sangat'),
(5, '67547081a6776.jpg', 'Laptop M', 7000000, 'laptop ini bisa untuk perjuangan kuliah ataupun ngapain aja'),
(6, '675470b4bbbc7.jpg', 'kamera', 6000000, 'kamera bisa untuk mengambil gambar tanpa blur full HD dan tidak sombong'),
(7, '675470fc9ca5a.jpg', 'smartwatch', 5000000, 'kecil tapi berguna, inilah sebuah smartwatch yang bisa menemani setiap hari');

-- --------------------------------------------------------

--
-- Table structure for table `tb_transaction`
--

CREATE TABLE `tb_transaction` (
  `id` int NOT NULL,
  `nama` varchar(50) NOT NULL,
  `nomorhp` varchar(15) NOT NULL,
  `alamat` text NOT NULL,
  `jenis` varchar(50) NOT NULL,
  `harga` varchar(50) NOT NULL,
  `status` varchar(50) NOT NULL,
  `tanggal` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `tb_transaction`
--

INSERT INTO `tb_transaction` (`id`, `nama`, `nomorhp`, `alamat`, `jenis`, `harga`, `status`, `tanggal`) VALUES
(1, 'siapa saja ', '3456789', 'fghjk', 'Hnadphone', '300000', 'succes', '2024-12-07'),
(2, 'Sri', '1274643', 'dimanapun aku berada', 'kamera', '6000000', 'succes', '2024-12-07');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_admin`
--
ALTER TABLE `tb_admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_categories`
--
ALTER TABLE `tb_categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_transaction`
--
ALTER TABLE `tb_transaction`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tb_admin`
--
ALTER TABLE `tb_admin`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tb_categories`
--
ALTER TABLE `tb_categories`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `tb_transaction`
--
ALTER TABLE `tb_transaction`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

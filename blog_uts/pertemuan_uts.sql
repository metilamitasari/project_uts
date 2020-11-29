-- phpMyAdmin SQL Dump
-- version 4.8.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 29, 2020 at 10:22 PM
-- Server version: 10.1.32-MariaDB
-- PHP Version: 7.2.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pertemuan_uts`
--

-- --------------------------------------------------------

--
-- Table structure for table `artikel`
--

CREATE TABLE `artikel` (
  `id` int(11) NOT NULL,
  `judul` varchar(255) NOT NULL,
  `penulis` varchar(255) NOT NULL,
  `isi` text NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `artikel`
--

INSERT INTO `artikel` (`id`, `judul`, `penulis`, `isi`, `created_at`, `updated_at`) VALUES
(14, 'NASI KUNING lo', 'chef daniel maengkom', 'Manado merupakan salah satu kota di Indonesia yang kaya akan kuliner. Selain Tinutuan, sarapan pagi lainnya adalah nasi kuning khas Manado. Nasi kuning khas Manado tidak hanya dinikmati pada momen-momen tertentu seperti pada beberapa daerah lainnya, misalnya nanti disajikan pada hari ulang tahun atau hari penting lainnya, namun di Manado nasi kuning merupakan menu setiap hari yang umumnya merupakan sarapan pada waktu pagi.', '2020-11-26 22:39:46', '2020-11-29 06:16:14'),
(15, 'DANGKE, KEJU BAKAR DARI ENREKANG', 'chef daniel maengkom', 'Proses pengolahan susu sapi menjadi Dangke terbilang cukup unik. Sebelum memasuki proses fermentasi, susu sapi segar akan dipanaskan dengan suhu kurang lebih 70 derajat celcius. Adalah getah dari pepaya yang dijadikan pemisah susu dari kandungan air dan lemaknya.Getah pepaya ini pulalah yang memadatkan susu sapi menjadi bongkahan-bongkahan keju berwarna putih. Warga Enrekang juga menggunakan nenas untuk membuat rasanya menjadi agak masam dan berefek kekuningan pada bongkahannya. Satu bongkah Dangke kurang lebih setara dengan 2 liter susu segar. Setelah padat dan terfermentasi, bongkahan-bongkahan keju yang masuk dalam kategori ‘Soft Cheese’ (keju lunak) ini kemudian diberi garam dan dicetak dengan tempurung-tempurung kelapa yang sudah dibersihkan sebelumnya untuk kemudian dibungkus dengan daun-daun pisang.', '2020-11-26 22:50:19', '2020-11-26 22:50:19');

-- --------------------------------------------------------

--
-- Table structure for table `komentar`
--

CREATE TABLE `komentar` (
  `id` int(11) NOT NULL,
  `id_artikel` int(11) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `isi` text NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `komentar`
--

INSERT INTO `komentar` (`id`, `id_artikel`, `nama`, `email`, `isi`, `created_at`, `updated_at`) VALUES
(1, 15, 'meti', 'meti@gmail.com', 'bagus', '2020-11-29 13:51:34', '2020-11-29 13:51:34');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `nama` varchar(225) NOT NULL,
  `username` varchar(225) NOT NULL,
  `email` varchar(225) NOT NULL,
  `password` varchar(225) NOT NULL,
  `remember_token` varchar(225) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `nama`, `username`, `email`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Meti Lamitasari', 'sari', 'metilamitasari@gmail.com', '$2y$10$2BKScGVrvk1HzUSac.90du0N/7.nRr1aflxDunNaCWIviTTM2l5eS', NULL, '2020-11-29 13:39:09', '2020-11-29 06:39:09'),
(2, 'test', 'test', 'test@gmail.com', '$2y$10$tmIuSMpUyK5d2hTg178eieTYc3s0k.wDwBwzPlxjs3mjJ1iKNqP3u', NULL, '2020-11-17 02:20:46', '2020-11-17 02:20:46'),
(10, 'meti', 'mita', 'mita@gmail.com', '$2y$10$U19CQo3nxjORnPryFoAyb.2glBwtbRxWqjFmTaAIQenCshP37CnFC', NULL, '2020-11-22 22:37:31', '2020-11-22 22:37:31'),
(12, 'Ada aja', 'meti', 'coba@gmail.com', '$2y$10$H5avfDbC.qzPztqzgdMC5.2h9ZZRwC6FniCE4IYJvBgUqpUMwYZmy', NULL, '2020-11-29 08:05:47', '2020-11-29 08:05:47');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `artikel`
--
ALTER TABLE `artikel`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `komentar`
--
ALTER TABLE `komentar`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `artikel`
--
ALTER TABLE `artikel`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `komentar`
--
ALTER TABLE `komentar`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

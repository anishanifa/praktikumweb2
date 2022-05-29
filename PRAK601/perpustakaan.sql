-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 29, 2022 at 01:27 PM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 8.0.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `perpustakaan`
--

-- --------------------------------------------------------

--
-- Table structure for table `buku`
--

CREATE TABLE `buku` (
  `id_buku` int(11) NOT NULL,
  `judul_buku` varchar(500) NOT NULL,
  `penulis` varchar(500) NOT NULL,
  `penerbit` varchar(250) NOT NULL,
  `tahun_terbit` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `buku`
--

INSERT INTO `buku` (`id_buku`, `judul_buku`, `penulis`, `penerbit`, `tahun_terbit`) VALUES
(1, 'The Corpse in the Mirror', 'Ainsley Davidson', 'Shortstop Media', 2001),
(2, 'Binary Plague', 'Dominique Cole', 'HCI Publications', 2002),
(3, 'Blue-Eyed Girl', 'Jesse Weber', 'Rock Valley Publishing', 2003),
(4, 'Equinox of Arrakis', 'H.Colombo', 'Joy Publications', 2004),
(5, 'The Wall and The Flower', 'Hayden Guzman', 'Donald M. Grant Publisher Inc', 2005),
(6, 'Secret of the Spanish Visitor', 'B. Calzadilla', 'Madden Publishing Inc', 2006),
(7, 'Clue of the Devils Cottage', 'Kelly Walters', 'August House Publishers Inc', 2007),
(8, 'The Song of the Betrayed', 'Whitney Patton', 'Masque Publishing Inc', 2008),
(9, 'Heart Full of Stars', 'Lesley Robson', 'BELLASTARRPUBLISHING', 2009),
(10, 'Queen of Nirvana', 'Sasha Armstrong', 'Future Media', 2010);

-- --------------------------------------------------------

--
-- Table structure for table `member`
--

CREATE TABLE `member` (
  `id_member` int(11) NOT NULL,
  `nama_member` varchar(250) NOT NULL,
  `nomor_member` varchar(15) NOT NULL,
  `password` varchar(250) NOT NULL,
  `alamat` text NOT NULL,
  `tgl_mendaftar` datetime NOT NULL,
  `tgl_terakhir_bayar` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `member`
--

INSERT INTO `member` (`id_member`, `nama_member`, `nomor_member`, `password`, `alamat`, `tgl_mendaftar`, `tgl_terakhir_bayar`) VALUES
(1, 'Emma Woods', '163000000001', 'password', '8570 Arnold Street, Boynton Beach, FL 33435', '2018-04-12 10:00:00', '2022-05-29'),
(2, 'Emily Dyer', '163000000002', 'password', '499 Alderwood Avenue, West Bloomfield, MI 48322', '2018-04-12 11:00:00', '2022-05-29'),
(3, 'Freddy Riley', '163000000003', 'password', '68 Peg Shop St.，Oklahoma City, OK 73112', '2018-04-12 12:00:00', '2022-05-29'),
(4, 'Kreacher Pierson', '163000000004', 'password', '8574 Linden Ave.，Virginia Beach, VA 23451', '2018-04-12 13:00:00', '2022-05-29'),
(5, 'Lucky Guy', '163000000005', 'password', '8909 Hanover St.，Tallahassee, FL 32303', '2018-04-12 14:00:00', '2022-05-29');

-- --------------------------------------------------------

--
-- Table structure for table `peminjaman`
--

CREATE TABLE `peminjaman` (
  `id_peminjaman` int(11) NOT NULL,
  `tgl_pinjam` date NOT NULL,
  `tgl_kembali` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `peminjaman`
--

INSERT INTO `peminjaman` (`id_peminjaman`, `tgl_pinjam`, `tgl_kembali`) VALUES
(1, '2022-05-01', '2022-05-14'),
(2, '2022-05-04', '2022-05-17'),
(3, '2022-05-06', '2022-05-19'),
(4, '2022-05-07', '2022-05-20'),
(5, '2022-05-11', '2022-05-24');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `buku`
--
ALTER TABLE `buku`
  ADD PRIMARY KEY (`id_buku`);

--
-- Indexes for table `member`
--
ALTER TABLE `member`
  ADD PRIMARY KEY (`id_member`);

--
-- Indexes for table `peminjaman`
--
ALTER TABLE `peminjaman`
  ADD PRIMARY KEY (`id_peminjaman`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `buku`
--
ALTER TABLE `buku`
  MODIFY `id_buku` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `member`
--
ALTER TABLE `member`
  MODIFY `id_member` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `peminjaman`
--
ALTER TABLE `peminjaman`
  MODIFY `id_peminjaman` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

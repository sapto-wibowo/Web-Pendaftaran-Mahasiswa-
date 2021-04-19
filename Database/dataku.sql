-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 19 Apr 2021 pada 15.04
-- Versi server: 10.4.6-MariaDB
-- Versi PHP: 7.3.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dataku`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `login`
--

CREATE TABLE `login` (
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `login`
--

INSERT INTO `login` (`username`, `password`) VALUES
('sapto', '6d3df1e1c59fe402539c96d4147880a7'),
('saptokun', 'cc03e747a6afbbcbf8be7668acfebee5');

-- --------------------------------------------------------

--
-- Struktur dari tabel `mahasiswaku`
--

CREATE TABLE `mahasiswaku` (
  `id` varchar(64) NOT NULL,
  `no_daftar` varchar(50) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `nim` varchar(255) NOT NULL,
  `sex` varchar(50) NOT NULL,
  `tempat` varchar(255) NOT NULL,
  `tgl_lahir` date NOT NULL,
  `foto` varchar(255) NOT NULL,
  `alamat` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `telp` varchar(64) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `mahasiswaku`
--

INSERT INTO `mahasiswaku` (`id`, `no_daftar`, `nama`, `nim`, `sex`, `tempat`, `tgl_lahir`, `foto`, `alamat`, `email`, `telp`) VALUES
('5f27ee9150421', '1', 'Sapto Wibowo', '183112706450118', 'L', 'Purwokerto', '2000-03-02', '5f27ee9150421.jpg', 'Jl. Raya Condet, Cililitan No.12', 'saptowibowo9a@gmail.com', '089665311160'),
('5f27f3964c3a9', '3', 'Sugeng Rawuh', '18321980033', 'L', 'Bandung', '2000-06-21', '5f27f3964c3a9.jpg', 'Jl. Pasar Minggu, No.20', 'cobaCI@mail.com', '0219089876'),
('5f27f3e2b8796', '4', 'steve', '18311269542173', 'P', 'Semarang', '2000-07-19', '5f27f3e2b8796.jpg', 'Jl. Raya Bogor, Bulok Rantai No.12', 'steve@gmail.com', '089687786543');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `mahasiswaku`
--
ALTER TABLE `mahasiswaku`
  ADD PRIMARY KEY (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

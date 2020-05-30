-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 16 Mar 2020 pada 04.37
-- Versi server: 10.1.36-MariaDB
-- Versi PHP: 5.6.38

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `survey`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `organisasi`
--

CREATE TABLE `organisasi` (
  `id` int(11) NOT NULL,
  `nama` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `organisasi`
--

INSERT INTO `organisasi` (`id`, `nama`) VALUES
(1, 'PT Kereta Api '),
(2, 'PT Telkom'),
(3, 'PT Temprina'),
(5, 'PT Jaya Wijaya'),
(12, 'PT Indofood'),
(13, 'PT Indocement'),
(14, 'PT Semen Indonesia'),
(15, 'PT Gudang Garam'),
(16, 'PT Unilever'),
(17, 'PT Hanjaya Mandala Sampoerna'),
(18, 'PT Pertamina'),
(19, 'PT Astra Internasional'),
(20, 'PT Hero Supermarket'),
(21, 'PT Mitra Tani Dua Tujuh'),
(22, 'PT Wings Surya');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `organisasi`
--
ALTER TABLE `organisasi`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `organisasi`
--
ALTER TABLE `organisasi`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

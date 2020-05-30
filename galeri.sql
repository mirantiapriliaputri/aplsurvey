-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 16 Mar 2020 pada 09.01
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
-- Struktur dari tabel `galeri`
--

CREATE TABLE `galeri` (
  `id` int(11) NOT NULL,
  `nama` varchar(128) NOT NULL,
  `url` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `galeri`
--

INSERT INTO `galeri` (`id`, `nama`, `url`) VALUES
(2, 'Survey Makanan Yang Ada Di Kantin', 'makanan.jpg'),
(3, 'Survey Kepuasan Penumpang', 'penumpang.jpg\r\n'),
(4, 'Survey Kepuasan Pelanggan', 'with-customer-011.png'),
(5, 'Survey Kesehatan', 'kesehatan.jpg'),
(7, 'Survey Penelitian Pasar', 'pasar.jpg'),
(8, 'Survey Kepuasan Pegawai', 'pegawai.jpg'),
(9, 'Survey Pemasaran', 'pemasaran.png'),
(10, 'Survey Perencanaan Acara', 'acara.png'),
(11, 'Survey Pendidikan', 'pendidikan.jpg'),
(12, 'Survey Kepuasan Pelayanan', 'pelayanan-publik1.jpg'),
(13, 'Survey Kualitas Pelayanan', 'pelayanan-publik1.jpg'),
(14, 'Survey Kinerja Karyawan', 'karyawan.jpg'),
(15, 'Survey Kualitas Produk', 'produk.jpg'),
(16, 'Survey Harga Produk', 'harga.jpg'),
(17, 'Survey kualitas Tenaga Pengajar', 'pengajar.jpg');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `galeri`
--
ALTER TABLE `galeri`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `galeri`
--
ALTER TABLE `galeri`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

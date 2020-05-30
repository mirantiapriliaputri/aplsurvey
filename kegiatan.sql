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
-- Struktur dari tabel `kegiatan`
--

CREATE TABLE `kegiatan` (
  `id` int(11) NOT NULL,
  `nama` varchar(128) NOT NULL,
  `tanggal_awal` date NOT NULL,
  `tanggal_akhir` date NOT NULL,
  `alamat` varchar(256) NOT NULL,
  `galeri` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `kegiatan`
--

INSERT INTO `kegiatan` (`id`, `nama`, `tanggal_awal`, `tanggal_akhir`, `alamat`, `galeri`) VALUES
(1, 'Survey Makanan Yang Ada Di Kantin', '2019-03-17', '2020-03-17', 'Jl.Diponegoro no 10', 'makanan.jpg'),
(2, 'Survey Kepuasan Penumpang', '2020-03-13', '2020-03-12', 'Semboro', 'penumpang.jpg'),
(4, 'Survey Kepuasan Pelanggan', '2020-03-13', '2020-03-12', 'Semboro', 'with-customer-011.png'),
(5, 'Survey Kesehatan', '2020-03-13', '2020-03-12', 'Semboro', 'kesehatan.jpg'),
(6, 'Survey Penelitian Pasar', '2020-03-17', '2020-03-21', 'Semboro', 'pasar.jpg'),
(7, 'Survey Kepuasan Pegawai', '2020-03-12', '2020-03-19', 'Semboro', 'pegawai.jpg'),
(8, 'Survey Pemasaran', '2020-03-26', '2020-03-13', 'Semboro', 'pemasaran.png'),
(9, 'Survey Perencanaan Acara', '2020-03-20', '2020-03-27', 'Semboro', 'acara.png'),
(10, 'Survey Pendidikan', '2020-03-20', '2020-03-13', 'Semboro ', 'pendidikan.jpg'),
(11, 'Survey Kepuasan Pelayanan', '2020-03-20', '2020-03-20', 'Semboro', 'pelayanan-publik1.jpg'),
(12, 'Survey Kualitas Pelayanan', '2020-03-09', '2020-03-13', 'Bangsalsari', 'pelayanan-publik1.jpg'),
(13, 'Survey  Kinerja Karyawan', '2020-03-24', '2020-03-26', 'Tanggul', 'karyawan.jpg'),
(14, 'Survey Kualitas Produk', '2020-03-06', '2020-03-10', 'Jogotrunan', 'produk.jpg'),
(15, 'Survey Harga Produk', '2020-03-18', '2020-03-20', 'Jember', 'harga.jpg'),
(16, 'Survey kualitas Tenaga Pengajar', '2020-03-11', '2020-03-19', 'Patrang', 'pengajar.jpg');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `kegiatan`
--
ALTER TABLE `kegiatan`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `kegiatan`
--
ALTER TABLE `kegiatan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

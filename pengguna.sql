-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 16 Mar 2020 pada 04.36
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
-- Struktur dari tabel `pengguna`
--

CREATE TABLE `pengguna` (
  `id` int(11) NOT NULL,
  `nama` varchar(128) NOT NULL,
  `email` varchar(128) NOT NULL,
  `usia` varchar(128) NOT NULL,
  `jenis_kelamin` varchar(128) NOT NULL,
  `alamat` varchar(256) NOT NULL,
  `pekerjaan` varchar(128) NOT NULL,
  `no_telepon` int(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `pengguna`
--

INSERT INTO `pengguna` (`id`, `nama`, `email`, `usia`, `jenis_kelamin`, `alamat`, `pekerjaan`, `no_telepon`) VALUES
(1, 'Miranti Aprilia', 'mirantiaprilia45@gmail.com', '16 tahun', 'Perempuan', 'Semboro', 'Pelajar', 854361235),
(2, 'Dewi Mamluatul', 'dewimamluatul@gmail.com', '16 tahun', 'Perempuan', 'Bangsalsari', 'Pelajar', 834567892),
(3, 'Irma Imroana', 'irma@gmail.com', '16 tahun', 'Perempuan', 'Semboro', 'Pramugari', 876545678),
(6, 'Fika Nafiatun Nazilah', 'fikanafiatun@gmail.com', '16 tahun', 'Perempuan', 'Semboro ', 'Dokter', 876545678),
(7, 'Lutfi', 'lutfiira@gmail.com', '16 tahun', 'Perempuan', 'Semboro', 'Mahasiswa', 876545678),
(13, 'Anggita Dwi Amelia', 'anggita@gmail.com', '19', 'Perempuan', 'Karang anyar', 'Mahasiswa', 2147483647),
(14, 'Amelia Maharani', 'ameliamaharani@gmail.com', '25', 'Perempuan', 'Banjarsari', 'Guru', 2147483647),
(15, 'Shelia Anggena', 'shelia@gmail.com', '15', 'Perempuan', 'Sukorambi', 'Pelajar', 2147483647),
(16, 'Tiara Eka', 'tiaraeka@gmail.com', '16', 'Perempuan', 'Lumajang', 'Pelajar', 2147483647),
(17, 'Angga Kurniawan', 'anggakurniawan@gmail.com', '20', 'Laki-Laki', 'Banjarmasin', 'Mahasiswa', 2147483647),
(18, 'Arvino Maulana', 'arvinomaulana@gmail.com', '30', 'Laki-Laki', 'Medan', 'Pilot', 2147483647),
(19, 'Inggita Amelia', 'inggitaamelia@gmail.com', '25', 'Perempuan', 'Jakarta selatan', 'Pramugari', 2147483647),
(20, 'Luki Andriansyah', 'luki.andriansyah@gmail.com', '20', 'Laki-Laki', 'Banjarmasin', 'Guru', 2147483647),
(21, 'Anggi Kurniawan', 'anggikurniawan@gmail.com', '25', 'Laki-Laki', 'Rambipuji', 'Tentara', 2147483647),
(22, 'Intan Masfaur', 'intanmasfaur@gmail.com', '20', 'Perempuan', 'Jakarta Utara', 'Dokter', 2147483647);

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `pengguna`
--
ALTER TABLE `pengguna`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `pengguna`
--
ALTER TABLE `pengguna`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

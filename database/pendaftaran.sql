-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 12 Jan 2023 pada 02.32
-- Versi server: 10.4.27-MariaDB
-- Versi PHP: 8.1.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pendaftaran`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `datapasien`
--

CREATE TABLE `datapasien` (
  `id` int(11) NOT NULL,
  `Nama_Pasien` varchar(50) NOT NULL,
  `Tempat_dan_Tanggal_Lahir` varchar(50) NOT NULL,
  `Jenis_Kelamin` varchar(20) NOT NULL,
  `Nomor_Telepon` varchar(50) NOT NULL,
  `Email` varchar(50) NOT NULL,
  `Jenis_Penyakit` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `datapasien`
--

INSERT INTO `datapasien` (`id`, `Nama_Pasien`, `Tempat_dan_Tanggal_Lahir`, `Jenis_Kelamin`, `Nomor_Telepon`, `Email`, `Jenis_Penyakit`) VALUES
(1, 'Aisha Aileen Nathania', 'Bali,03 September 2007', 'Perempuan', '0867-2763-3748', 'aisha04@gmail.com', 'Demam'),
(2, 'Afra Rainey Keysa ', 'Balige,28 Desember 2003', 'Perempuan', '', '', 'Demam'),
(83, 'agus purtowo', 'Jakarta,22 Mei 2001', 'laki laki', '0892-3872-2736', 'agus@gmail.com', 'demam'),
(85, 'Rayfan', 'Bandung,12 april 2001', 'Laki - Laki', '0821-2834-2729', 'rayfan04@gmail.com', 'Sakit Kepala'),
(86, 'Sultan', 'Bandung,22 Mei 2001', 'Laki - Laki', '0826-3826-8372', 'sultan03@gmail.com', 'Meriang');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `datapasien`
--
ALTER TABLE `datapasien`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `datapasien`
--
ALTER TABLE `datapasien`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=87;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 07 Agu 2021 pada 09.05
-- Versi server: 10.4.14-MariaDB
-- Versi PHP: 7.4.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `rsc`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `biodata`
--

CREATE TABLE `biodata` (
  `id` int(11) NOT NULL,
  `name_bio` varchar(128) NOT NULL,
  `ttl` varchar(128) NOT NULL,
  `jk` varchar(128) NOT NULL,
  `alamat` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `biodata`
--

INSERT INTO `biodata` (`id`, `name_bio`, `ttl`, `jk`, `alamat`) VALUES
(1, 'najwan', 'cilegon 2 april 2007', 'Laki-Laki', 'aspol'),
(2, 'irman', 'serang 19 april 1997', 'Laki-Laki', 'Galaxy');

-- --------------------------------------------------------

--
-- Struktur dari tabel `form_soap`
--

CREATE TABLE `form_soap` (
  `id` int(11) NOT NULL,
  `name_pasien` varchar(128) NOT NULL,
  `umur` varchar(128) NOT NULL,
  `jk` varchar(20) NOT NULL,
  `alamat` varchar(128) NOT NULL,
  `bb` int(11) NOT NULL,
  `tb` int(11) NOT NULL,
  `keluhan` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `form_soap`
--

INSERT INTO `form_soap` (`id`, `name_pasien`, `umur`, `jk`, `alamat`, `bb`, `tb`, `keluhan`) VALUES
(1, 'Najwan Maulana', '14', 'Laki-Laki', 'aspol', 66, 158, 'Panas &amp; Flu');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `name` varchar(128) NOT NULL,
  `email` varchar(128) NOT NULL,
  `image` varchar(128) NOT NULL,
  `password` varchar(128) NOT NULL,
  `role_id` int(11) NOT NULL,
  `is_active` int(11) NOT NULL,
  `date` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`id`, `name`, `email`, `image`, `password`, `role_id`, `is_active`, `date`) VALUES
(1, 'irman', 'irmandwiyana@ymail.com', 'default.jpg', '$2y$10$UK2rXmDMtzk07dfI51cWCOHOtNvAz13IMkpug1CU/WeA7d.KL4KIe', 2, 1, 1628176092),
(2, 'naya', 'najwanmaulana@gmail.com', 'default.jpg', '$2y$10$qykfQAuztl9PJKjZ37M6e.YQSGdpI2iEck7bKHW5iCSHXLbEs7JMO', 2, 1, 1628176331),
(3, 'diva', 'divalorenza@gmail.com', 'default.jpg', '$2y$10$fmMDU8gGpOZ5SRUZwsaGbOXSsZZ2zBxdfRt7ca5M3xS6lh1VfMOEW', 1, 1, 1628176417);

-- --------------------------------------------------------

--
-- Struktur dari tabel `user_role`
--

CREATE TABLE `user_role` (
  `id` int(11) NOT NULL,
  `role` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `user_role`
--

INSERT INTO `user_role` (`id`, `role`) VALUES
(1, 'Admin / Dokter'),
(2, 'User / Pasien');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `biodata`
--
ALTER TABLE `biodata`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `form_soap`
--
ALTER TABLE `form_soap`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `user_role`
--
ALTER TABLE `user_role`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `biodata`
--
ALTER TABLE `biodata`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `form_soap`
--
ALTER TABLE `form_soap`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `user_role`
--
ALTER TABLE `user_role`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

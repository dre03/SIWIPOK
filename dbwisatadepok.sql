-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 06 Jul 2022 pada 13.52
-- Versi server: 10.4.21-MariaDB
-- Versi PHP: 8.0.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dbwisatadepok`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `jenis_wisata`
--

CREATE TABLE `jenis_wisata` (
  `id` int(11) NOT NULL,
  `nama` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `jenis_wisata`
--

INSERT INTO `jenis_wisata` (`id`, `nama`) VALUES
(1, 'Kolam Renang'),
(2, 'Taman Kota'),
(3, 'Pemancingan'),
(4, 'Religi'),
(5, 'Cagar Alam');

-- --------------------------------------------------------

--
-- Struktur dari tabel `kecamatan`
--

CREATE TABLE `kecamatan` (
  `id` int(11) NOT NULL,
  `nama` varchar(40) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `kecamatan`
--

INSERT INTO `kecamatan` (`id`, `nama`) VALUES
(1, 'Beji'),
(2, 'Pancoran Mas'),
(3, 'Sawangan'),
(4, 'Bojongsari'),
(5, 'Cipayung'),
(6, 'Sukmajaya'),
(7, 'Cilodong'),
(8, 'Cimanggis'),
(9, 'Tapos'),
(10, 'Limo'),
(11, 'Cinere');

-- --------------------------------------------------------

--
-- Struktur dari tabel `kelompok`
--

CREATE TABLE `kelompok` (
  `id` int(11) NOT NULL,
  `nama` varchar(20) NOT NULL,
  `status` varchar(10) NOT NULL,
  `nim` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `kelompok`
--

INSERT INTO `kelompok` (`id`, `nama`, `status`, `nim`) VALUES
(1, 'Andre Apriyana', 'Student', 110221111);

-- --------------------------------------------------------

--
-- Struktur dari tabel `komentar`
--

CREATE TABLE `komentar` (
  `id` int(11) NOT NULL,
  `tanggal` date DEFAULT NULL,
  `isi` text DEFAULT NULL,
  `users_id` int(11) NOT NULL,
  `wisata_id` int(11) NOT NULL,
  `nilai_rating_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `komentar`
--

INSERT INTO `komentar` (`id`, `tanggal`, `isi`, `users_id`, `wisata_id`, `nilai_rating_id`) VALUES
(1, '2022-06-12', 'kalo berenang di sini anak2 ngak mau pulang', 2, 1, 4),
(3, '2022-05-18', 'bsjdv jds xjcsdj c', 2, 15, 2);

-- --------------------------------------------------------

--
-- Struktur dari tabel `nilai_rating`
--

CREATE TABLE `nilai_rating` (
  `id` int(11) NOT NULL,
  `nama` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `nilai_rating`
--

INSERT INTO `nilai_rating` (`id`, `nama`) VALUES
(1, 'Jelek'),
(2, 'Kurang Bagus'),
(3, 'Biasa Aja'),
(4, 'Bagus'),
(5, 'Sangat Bagus');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tempat_wisata`
--

CREATE TABLE `tempat_wisata` (
  `id` int(11) NOT NULL,
  `nama` varchar(45) DEFAULT NULL,
  `deskripsi` varchar(500) NOT NULL,
  `alamat` varchar(200) DEFAULT NULL,
  `lat` varchar(40) DEFAULT NULL,
  `long` varchar(40) NOT NULL,
  `jenis_id` int(11) NOT NULL,
  `skor_rating` double DEFAULT NULL,
  `harga_tiket` double DEFAULT NULL,
  `foto1` varchar(500) DEFAULT NULL,
  `foto2` varchar(500) DEFAULT NULL,
  `foto3` varchar(500) DEFAULT NULL,
  `kecamatan_id` int(11) NOT NULL,
  `website` varchar(45) DEFAULT NULL,
  `fasilitas` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `tempat_wisata`
--

INSERT INTO `tempat_wisata` (`id`, `nama`, `deskripsi`, `alamat`, `lat`, `long`, `jenis_id`, `skor_rating`, `harga_tiket`, `foto1`, `foto2`, `foto3`, `kecamatan_id`, `website`, `fasilitas`) VALUES
(1, 'Water Park  Ceria', 'Destinasi wisata pilihan yang berlokasi di kota Depok ini memang terkenal akan keindahannya.', 'Jl. K.H.M. Usman No.110, Kukusan, Kecamatan Beji, Kota Depok, Jawa Barat 16425', '-6.364450676519081', '106.81186361356124', 1, 4.2, 40000, 'processor_(1).png', 'processor_(1)1.png', 'processor_(1)2.png', 2, 'www.ceriadepok.com', 'tersedia 2 kolam renang, perosotan, arena futsal taman luas'),
(3, 'AlunAlun Depok', '', 'Jl.Gdc baru', '-6.439153504978133', '106.82693481445312', 2, 4, 100000, '2.png', '21.png', '22.png', 1, 'alun.com', 'Musolah, Lapangan, Tempat Makan'),
(15, 'Taman Jati muri', '', 'jalan loma sari 2', '-6.392412862343618', '106.82350158691406', 2, NULL, 12000, '3.png', '31.png', '32.png', 10, 'taman jati.com', 'Tempat parkir, tempat makan.dll');

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(20) DEFAULT NULL,
  `password` varchar(200) DEFAULT NULL,
  `email` varchar(40) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `last_login` timestamp NULL DEFAULT NULL,
  `status` smallint(6) DEFAULT NULL,
  `role` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `email`, `created_at`, `last_login`, `status`, `role`) VALUES
(1, 'admin', '15c6d98082895abf1c20c0358aff2a67', 'admin@gmail.com', '2022-06-12 00:18:11', '2022-06-12 00:18:11', 1, 'administrator'),
(2, 'aminah', '1f32aa4c9a1d2ea010adcf2348166a04', 'aminah@gmail.com', '2022-06-12 00:18:12', '2022-06-12 00:18:12', 1, 'administrator'),
(11, 'www', '202cb962ac59075b964b07152d234b70', 'dika@gmail.com', '2022-07-04 13:34:42', '2022-07-04 13:34:42', 0, 'public'),
(13, 'urang', '81dc9bdb52d04dc20036dbd8313ed055', 'aldi@gmail.com', '2022-07-04 16:05:14', '2022-07-04 16:05:14', 0, 'administrator');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `jenis_wisata`
--
ALTER TABLE `jenis_wisata`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `kecamatan`
--
ALTER TABLE `kecamatan`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `kelompok`
--
ALTER TABLE `kelompok`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `komentar`
--
ALTER TABLE `komentar`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_pesanan_users1_idx` (`users_id`),
  ADD KEY `fk_pesanan_produk1_idx` (`wisata_id`),
  ADD KEY `fk_komentar_nilai_rating1_idx` (`nilai_rating_id`);

--
-- Indeks untuk tabel `nilai_rating`
--
ALTER TABLE `nilai_rating`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tempat_wisata`
--
ALTER TABLE `tempat_wisata`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_produk_jenis_produk_idx` (`jenis_id`),
  ADD KEY `fk_tempat_wisata_kelurahan1_idx` (`kecamatan_id`);

--
-- Indeks untuk tabel `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username_UNIQUE` (`username`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `jenis_wisata`
--
ALTER TABLE `jenis_wisata`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT untuk tabel `kecamatan`
--
ALTER TABLE `kecamatan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT untuk tabel `kelompok`
--
ALTER TABLE `kelompok`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `komentar`
--
ALTER TABLE `komentar`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `nilai_rating`
--
ALTER TABLE `nilai_rating`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT untuk tabel `tempat_wisata`
--
ALTER TABLE `tempat_wisata`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT untuk tabel `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `komentar`
--
ALTER TABLE `komentar`
  ADD CONSTRAINT `fk_komentar_nilai_rating1` FOREIGN KEY (`nilai_rating_id`) REFERENCES `nilai_rating` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_pesanan_produk1` FOREIGN KEY (`wisata_id`) REFERENCES `tempat_wisata` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_pesanan_users1` FOREIGN KEY (`users_id`) REFERENCES `users` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Ketidakleluasaan untuk tabel `tempat_wisata`
--
ALTER TABLE `tempat_wisata`
  ADD CONSTRAINT `fk_produk_jenis_produk` FOREIGN KEY (`jenis_id`) REFERENCES `jenis_wisata` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_tempat_wisata_kelurahan1` FOREIGN KEY (`kecamatan_id`) REFERENCES `kecamatan` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

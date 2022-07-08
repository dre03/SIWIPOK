-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 08 Jul 2022 pada 07.59
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
(5, 'Cagar Alam'),
(6, 'Wisata Alam'),
(7, 'Maritim atau Bahari'),
(8, 'Rekreasi');

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
  `tanggal` date DEFAULT current_timestamp(),
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
(22, '2022-07-07', 'tempat yang cocok buat liburan', 18, 20, 5),
(23, '2022-07-07', 'ini tempat bagus banget', 11, 20, 4),
(24, '2022-07-07', 'recomedasi banget main kesini', 11, 15, 5),
(27, '2022-07-07', 'Masjidnya sangat bagus sekali, ibdah jadi khusu', 18, 23, 5),
(33, '2022-07-07', 'Basug banget cocok buat bawa keluarga main kesini', 18, 21, 5),
(34, '2022-07-07', 'Masjidnya bagus Suasanya Adem banyak fasilitasnya juga pastinya gratis heheh', 19, 23, 5),
(35, '2022-07-07', 'wiasatanya bagus sangat menarik sekali pokonya recomend  kesini wajib nyoain', 19, 15, 5),
(36, '2022-07-07', 'Tempatnya Lumayan Adem cocok buat mencari udara segar apa lagibareng pacar heheh', 19, 22, 4),
(37, '2022-07-07', 'cocok banget kalo bawa keluarga ke sini fasilitasnya banyak dan haraganya cocok cuma 40.000 ribuan', 19, 21, 4),
(38, '2022-07-07', 'Sangat Bagus cocok buat menghilangkan rasa bosen karena di dalam rumah terus', 11, 27, 5),
(39, '2022-07-07', 'lumayan bagus cocok buat bawa anak\" ataupun orang dewasa kesini', 11, 21, 4),
(40, '2022-07-07', 'Masjidnya megah sekali dan fasilitasnya banyak juga', 13, 23, 5),
(41, '2022-07-07', 'Ahh cocok banget buat Merefresh otak karana pekerjaan mood jadi adem lagi heheh ', 13, 27, 5),
(43, '2022-07-07', 'lumayan bagus untuk liburan', 22, 15, 3),
(44, '2022-07-07', 'cocok banget buat liburan kuliah', 22, 20, 4);

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
(15, 'D’Kandang Amzing Farm', 'D\'Kandang Amazing Farm adalah Wisata berkonsep pertanian dan peternakan yang cocok \r\ndikunjungi bersama keluarga, yang diiringi dengan permainan seru dan menantang.', 'Jalan Penarikan (Perum PGRI), RT 07 RW 02, Kelurahan Pasir Putih', '-6.4158763', '106.7823789', 5, 4.5, 20000, 'res1.png', 'res2.png', 'res3.png', 3, 'https://www.tripadvisor.com', 'wahana hewan peternakan, wahana permainan, serta wahana kreasi, \r\nskuter anak, flying fox, naik delm'),
(20, 'Taman Bunga Wiladatika', 'Deskripsi : Taman Rekreasi Wiladatika merupakan tempat wisata yang berlokasi di Cimanggis, Depok. Disini terdapat Pusat Pendidikan dan Pelatihan Pramuka Nasional (Pusdiklatmas), Balai Pembinaan Pendidikan Pelaksanaan Pedoman Penghayatan dan Pengamalan Pancasila (P4), aula resepsi yang biasa digunakan untuk acara resepsi pernikahan dan halaman hijau yang biasa digunakan para pengunjung untuk piknik bersama keluarga.', 'Jalan Jambore 1 Cibubur, Cimanggis, Depok, Jawa Barat', '-6.3702', '106.8914865', 2, 4.3, 10000, 'tmn_kota1.png', 'tmnkot31.png', 'tmnkota21.png', 8, 'https://travelspromo.com', 'Lahan parkir, toilet, mushola, beragam taman, bangku-bangku untuk istirahat'),
(21, 'Taman Wisata Pasir Putih', 'Wisata pasir putih ini memiliki tiga kolam water park. Arena \r\nseluncuran menjadi wahana yang paling diminati. Terdapat berbagai ukuran \r\nseluncuran. Ada seluncuran spiral yang cukup tinggi untuk remaja dan dewasa. \r\nAda pula menara seluncuran pendek untuk anak-anak. Selain seluncuran, \r\ntentunya ada wahana lain yang patut dijajal pengunjung. Misalnya ember \r\ntumpah dan air pancur.', 'Jalan Raya Pasir Putih, Sawangan, Depok 16519.', '-6.4331772', '106.7850813', 1, 4.3, 40000, 'kol2.png', 'kolam1.png', 'kol3.png', 3, 'https://waterparkpasirputih.com', 'Lapangan futsal, lapangan futsal, kolam pemancingan, Tempat Karaoke, \r\nPenginapan Bungalow'),
(22, 'Situ Cilodong', 'Situ Cilodong merupakan salah satu setu, situ atau danau yang \r\nada di Depok dan dijadikan sebagai tempat wisata gratis. Setu ini dapat \r\nmenjadi pilihan ngadem di tengah panas dan juga padatnya kota \r\npenyangga Ibukota ini\r\n', 'Jalan Abdul Ga ni, Kelurahan Kalibaru', '-6.4413390367094365', '106.83875799179077', 7, 4, 0, 'cil1.png', 'cil2.png', 'cil3.png', 7, 'https://www.idntimes.com', 'Fasilitas : Area parkir kendaraan, Toilet, Mushola, Wahana permainan anak,Warung \r\nmakanan dan minum'),
(23, 'Masjid Kubah Emas', 'Masjid yang disebut sebagai masjid termegah di Asia Tenggara ini selalu ramai dikunjungi, baik untuk ibadah hingga wisata religi. Bukan tanpa alasan Masjid Kubah Emas Depok diklaim sebagai masjid paling megah di ASEAN, pasalnya masjid ini memiliki 5 kubah utama dan 4 kubah kecil yang terbuat dari emas.', 'Jl. Meruyung Raya, Kelurahan Meruyung, Kecamatan Limo, Depok, ', '-6.384096332293091', '106.77196025848389', 4, 4.3, 0, 'mjd1.png', 'mjd3.png', 'mjd2.png', 10, 'https://www.pinhome.id', 'Tempat parkir, Taman, Majalah, Tempat penipian sendal, Tempat \r\nwudhu, Gedung serba guna, Villa 2 da'),
(27, 'Rumah Keramik F Widayanto', 'Buat Anda yang menyukai seni, tak ada salahnya mengunjungi tempat ini.\r\nWisata keramik yang satu ini memiliki banyak pengunjung yang berbeda usia.\r\nBahkan, tak jarang wisatawan luar negeri juga kerap mengunjungi tempat ini.', 'Jalan Curug Agung Nomor 01, Kelurahan Tanah Baru', '-6.369040937015702', '106.80426478385925', 8, 5, 10000, 'rumah1.jpg', 'Rumah2.jpg', 'rmh3.jpg', 1, 'www.RumahKeramik.com', 'Menariknya lagi, Rumah Keramik F Widayanto juga dilengkapi dengan tempat \r\nmakan yang menghadirkan b');

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
(2, 'aminah', '1f32aa4c9a1d2ea010adcf2348166a04', 'aminah@gmail.com', '2022-06-12 00:18:12', '2022-06-12 00:18:12', 1, 'administrator'),
(11, 'DIka', '202cb962ac59075b964b07152d234b70', 'dika@gmail.com', '2022-07-04 13:34:42', '2022-07-04 13:34:42', 1, 'public'),
(13, 'Aldi', '827ccb0eea8a706c4c34a16891f84e7b', 'aldi@gmail.com', '2022-07-04 16:05:14', '2022-07-04 16:05:14', 1, 'public'),
(17, 'Fadel', '81dc9bdb52d04dc20036dbd8313ed055', 'fadel2@gmail.com', '2022-07-07 05:02:07', '2022-07-07 05:02:07', 1, 'administrator'),
(18, 'lastri', '827ccb0eea8a706c4c34a16891f84e7b', 'las@gmail.com', '2022-07-07 05:55:26', '2022-07-07 05:55:26', 1, 'public'),
(19, 'Muzaki', '827ccb0eea8a706c4c34a16891f84e7b', 'muz@gmail.com', '2022-07-07 08:25:42', '2022-07-07 08:25:42', 1, 'public'),
(20, 'admin', '21232f297a57a5a743894a0e4a801fc3', 'admin@gmail.com', '2022-07-07 10:03:56', '2022-07-07 10:03:56', 1, 'administrator'),
(21, 'Rizki', '827ccb0eea8a706c4c34a16891f84e7b', 'rizki@gmail.com', '2022-07-07 13:04:16', '2022-07-07 13:04:16', 0, NULL),
(22, 'Ahmad', '827ccb0eea8a706c4c34a16891f84e7b', 'ahmad@gmail.com', '2022-07-07 13:17:48', '2022-07-07 13:17:48', 0, NULL);

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=47;

--
-- AUTO_INCREMENT untuk tabel `nilai_rating`
--
ALTER TABLE `nilai_rating`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT untuk tabel `tempat_wisata`
--
ALTER TABLE `tempat_wisata`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT untuk tabel `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

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

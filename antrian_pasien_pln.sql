-- phpMyAdmin SQL Dump
-- version 4.8.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 19 Jan 2021 pada 01.40
-- Versi server: 10.1.31-MariaDB
-- Versi PHP: 5.6.37

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `antrian_pasien_pln`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_antrian`
--

CREATE TABLE `tb_antrian` (
  `id_antrian` int(11) NOT NULL,
  `kode_antrian` varchar(100) NOT NULL,
  `nama_pasien` varchar(100) NOT NULL,
  `tanggal_antrian` varchar(100) NOT NULL,
  `jam_antrian` varchar(100) NOT NULL,
  `status` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_antrian`
--

INSERT INTO `tb_antrian` (`id_antrian`, `kode_antrian`, `nama_pasien`, `tanggal_antrian`, `jam_antrian`, `status`) VALUES
(1, '1', 'Pasien', 'Selasa, 29 Desember 2020', '08.00', 'Selesai'),
(2, '1', 'Pasien', 'Rabu, 30 Desember 2020', '08.00', 'Selesai'),
(3, '1', 'hildayanti', 'Rabu, 30 Desember 2020', '11.00', 'Selesai'),
(4, '2', 'Pasien', 'Rabu, 30 Desember 2020', '11.00', 'Selesai'),
(5, '1', 'Pasien', 'Kamis, 14 Januari 2021', '08.00', 'Selesai'),
(6, '1', 'Fajar', 'Jumat, 15 Januari 2021', '08.00', 'Batal'),
(7, '1', 'Pasien', 'Jumat, 15 Januari 2021', '11.00', 'Tunggu'),
(8, '2', 'Fajar', 'Jumat, 15 Januari 2021', '08.00', 'Batal'),
(9, '2', 'Fajar', 'Jumat, 15 Januari 2021', '11.00', 'Selesai');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_dokter`
--

CREATE TABLE `tb_dokter` (
  `id_dokter` int(11) NOT NULL,
  `nama_lengkap` varchar(100) NOT NULL,
  `spesialis` varchar(100) NOT NULL,
  `jam_mulai` varchar(255) NOT NULL,
  `absen` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_dokter`
--

INSERT INTO `tb_dokter` (`id_dokter`, `nama_lengkap`, `spesialis`, `jam_mulai`, `absen`) VALUES
(4, 'Pak Dokter', 'Dokter Umum', '08.00', 'Hadir'),
(6, 'aa', 'Dotker Covid', '11.00', 'Hadir');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_klinik`
--

CREATE TABLE `tb_klinik` (
  `id_klinik` int(11) NOT NULL,
  `nama_klinik` varchar(100) NOT NULL,
  `lokasi_klinik` varchar(1000) NOT NULL,
  `latitude` varchar(255) NOT NULL,
  `longitude` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_klinik`
--

INSERT INTO `tb_klinik` (`id_klinik`, `nama_klinik`, `lokasi_klinik`, `latitude`, `longitude`) VALUES
(5, 'Kimia Farma', 'Jl. Andi Pangeran Pettarani No.2, Gn. Sari, Kec. Rappocini, Kota Makassar, Sulawesi Selatan 90221, Indonesia', '-5.171198518962343', '119.43387843668461'),
(6, 'Apotek Covid-19', 'Jl. Usman Salengke No.83, RT.001/RW.1, Sungguminasa, Kec. Somba Opu, Kabupaten Gowa, Sulawesi Selatan 92111, Indonesia', '-5.206733716497791', '119.45373818278311'),
(7, 'K-2 Pallangga', 'Jl. Poros Pallangga No.32, Tetebatu, Kec. Pallangga, Kabupaten Gowa, Sulawesi Selatan 92111, Indonesia', '-5.220604801284853', '119.44606639444828');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_pasien`
--

CREATE TABLE `tb_pasien` (
  `id_user` int(11) NOT NULL,
  `nama_user` varchar(100) NOT NULL,
  `alamat_user` varchar(100) NOT NULL,
  `telepon_user` varchar(100) NOT NULL,
  `jekel_user` varchar(100) NOT NULL,
  `tanggal_lahir` varchar(255) NOT NULL,
  `username_user` varchar(100) NOT NULL,
  `password_user` varchar(255) NOT NULL,
  `level_user` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_pasien`
--

INSERT INTO `tb_pasien` (`id_user`, `nama_user`, `alamat_user`, `telepon_user`, `jekel_user`, `tanggal_lahir`, `username_user`, `password_user`, `level_user`) VALUES
(8, 'hildayanti', 'enrekang', '08523369', '-', '-', 'hide', '$2y$10$H3wJuCojvugOMLUK7ds5NuyN0Km/om6LJ.HPanJCB2Gb8ieI0zMqq', 'pasien'),
(9, 'Andi Abdillah', 'barru', '08645638723', '-', '-', 'beddu', '$2y$10$0Ze1hMWuXxFjoOcjEOHZyege8OwJxSFatNQJXSXltlTl0faiE14jm', 'pasien'),
(13, 'Admin', '-', '081234567891', '-', '-', 'admin', '$2y$10$yIy3CPqtJmLO1fowaHZJK.ksokW/rnBpAr3TiDm0jU4L9baqpRafS', 'admin'),
(14, 'Pasien', 'Jalan Pasien', '081234567890', '-', '-', 'pasien', '$2y$10$s/KzoP9E6Y2K5oto4/LJlOk20h7FzMCM5z21ekuuU5psLmli05qRK', 'pasien'),
(15, 'Pak Dokter', '-', '08796453125', '-', '-', 'dokter', '$2y$10$I2wHyuEMviNfygjscGQI/.X5qcH22pqocVycv.9w67zF5jGB.FoBy', 'dokter'),
(16, 'aa', '-', '21', '-', '-', 'aa', '$2y$10$spNPJT3AlDT8VFPAuA8gYuu58K1UyhVNVqLR8gnFBeJQuHiijX7ZW', 'dokter'),
(17, 'admintest', '-', '123', '-', '-', 'admin1', '$2y$10$QXWgwIC/KZbavCpac64m6.op6J4Nihx/a5klE.fmUDtT2xD1rNuum', 'admin'),
(20, 'Fajar', 'Jalan Samata permai', '08976543587', 'Laki - laki', 'Kamis, 14 Januari 2021', 'fajar', '$2y$10$p75pPIHdCwl.c/lLpkJBG.vXDptkdovZl.KNKNyepZfOgJATDSg7m', 'pasien'),
(21, 'askur', 'takalar', '08796435427', 'Laki - laki', 'Kamis, 16 Januari 2003', 'askur', '$2y$10$VWEB.zD3iKRH/lcHEBoQjuK3LY7Q19UcQo40X94Dfrn4Pi6nPh4yW', 'pasien');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tes_pass`
--

CREATE TABLE `tes_pass` (
  `id` int(11) NOT NULL,
  `asli` varchar(255) NOT NULL,
  `pass` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tes_pass`
--

INSERT INTO `tes_pass` (`id`, `asli`, `pass`) VALUES
(2, '', '$2y$10$66ppfzrXAowvQiRSfi6ZCOYph/uHWsA6vA/4AgxqWnFasvMHYEJwS'),
(3, '', '$2y$10$jYfZUwRfvZMhVbgMItgxge5pse6EuY7fYJGlkrNa/UToOQsTd5Kt6'),
(5, '', '$2y$10$c5Hz7xp.AhswzHR4kggHSuzmmiGfWaf5x2toCav8Rx5lRfChUdyQG'),
(6, 'askur', '$2y$10$VWEB.zD3iKRH/lcHEBoQjuK3LY7Q19UcQo40X94Dfrn4Pi6nPh4yW'),
(7, 'askur', '$2y$10$MDc6BWXmqLAENckLpl.zGu7zAY2Q4UEx6Cxt/Us9PTh7Po6B8VAWe'),
(8, 'admin1', '$2y$10$QXWgwIC/KZbavCpac64m6.op6J4Nihx/a5klE.fmUDtT2xD1rNuum'),
(9, 'aa', '$2y$10$spNPJT3AlDT8VFPAuA8gYuu58K1UyhVNVqLR8gnFBeJQuHiijX7ZW'),
(10, 'dokter', '$2y$10$I2wHyuEMviNfygjscGQI/.X5qcH22pqocVycv.9w67zF5jGB.FoBy'),
(11, 'pasien', '$2y$10$s/KzoP9E6Y2K5oto4/LJlOk20h7FzMCM5z21ekuuU5psLmli05qRK'),
(12, 'admin', '$2y$10$yIy3CPqtJmLO1fowaHZJK.ksokW/rnBpAr3TiDm0jU4L9baqpRafS'),
(13, 'beddu', '$2y$10$0Ze1hMWuXxFjoOcjEOHZyege8OwJxSFatNQJXSXltlTl0faiE14jm'),
(14, 'hide', '$2y$10$H3wJuCojvugOMLUK7ds5NuyN0Km/om6LJ.HPanJCB2Gb8ieI0zMqq');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `tb_antrian`
--
ALTER TABLE `tb_antrian`
  ADD PRIMARY KEY (`id_antrian`);

--
-- Indeks untuk tabel `tb_dokter`
--
ALTER TABLE `tb_dokter`
  ADD PRIMARY KEY (`id_dokter`);

--
-- Indeks untuk tabel `tb_klinik`
--
ALTER TABLE `tb_klinik`
  ADD PRIMARY KEY (`id_klinik`);

--
-- Indeks untuk tabel `tb_pasien`
--
ALTER TABLE `tb_pasien`
  ADD PRIMARY KEY (`id_user`);

--
-- Indeks untuk tabel `tes_pass`
--
ALTER TABLE `tes_pass`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `tb_antrian`
--
ALTER TABLE `tb_antrian`
  MODIFY `id_antrian` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT untuk tabel `tb_dokter`
--
ALTER TABLE `tb_dokter`
  MODIFY `id_dokter` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT untuk tabel `tb_klinik`
--
ALTER TABLE `tb_klinik`
  MODIFY `id_klinik` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT untuk tabel `tb_pasien`
--
ALTER TABLE `tb_pasien`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT untuk tabel `tes_pass`
--
ALTER TABLE `tes_pass`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

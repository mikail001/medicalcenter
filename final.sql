-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 15 Feb 2023 pada 01.21
-- Versi server: 10.4.24-MariaDB
-- Versi PHP: 7.4.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `final`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `laki`
--

CREATE TABLE `laki` (
  `id` int(100) NOT NULL,
  `Nik` varchar(100) DEFAULT NULL,
  `NamaAnak` varchar(100) DEFAULT NULL,
  `TanggalLahir` date DEFAULT NULL,
  `NamaOrangTua` varchar(100) DEFAULT NULL,
  `NikOrangTua` varchar(100) DEFAULT NULL,
  `NomorTelepon` varchar(100) DEFAULT NULL,
  `Alamat` varchar(200) DEFAULT NULL,
  `TanggalUkur` date DEFAULT NULL,
  `UmurBulan` double DEFAULT NULL,
  `BeratBadan` double DEFAULT NULL,
  `TinggiBadan` double DEFAULT NULL,
  `jeniskelamin` varchar(100) DEFAULT NULL,
  `zsbbu` varchar(100) DEFAULT NULL,
  `StatusGiziBB` varchar(100) DEFAULT NULL,
  `zstbu` varchar(100) DEFAULT NULL,
  `StatusGiziTB` varchar(100) DEFAULT NULL,
  `zsimt` varchar(100) DEFAULT NULL,
  `StatusGiziIMT` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `laki`
--

INSERT INTO `laki` (`id`, `Nik`, `NamaAnak`, `TanggalLahir`, `NamaOrangTua`, `NikOrangTua`, `NomorTelepon`, `Alamat`, `TanggalUkur`, `UmurBulan`, `BeratBadan`, `TinggiBadan`, `jeniskelamin`, `zsbbu`, `StatusGiziBB`, `zstbu`, `StatusGiziTB`, `zsimt`, `StatusGiziIMT`) VALUES
(9, '3273182303170001', 'Zayn Habibi', '2017-03-23', 'Rendi', '3215291611680003', '0', 'RT 3 RW 7 I 26', '2022-02-22', 60, 27, 115, 'Laki', '3.2222222222222228', 'Gizi Lebih', '1.0869565217391317', 'Normal', '5.913043478260862', 'Gemuk'),
(10, '3204080906170003', 'Khaleev M S', '2017-06-09', 'Budi M', '3204082005830007', '0', 'RT 3 RW 7 C23', '2022-02-22', 57, 15.5, 107, 'Laki', '-1.0454545454545452', 'Gizi Baik', '-0.28888888888888825', 'Normal', '-0.5950155763239884', 'Normal'),
(11, '3205130107170003', 'Albizar Sugiantoputra', '2017-07-01', 'Sugianto', '3703170506820003', '0', 'RT 3 RW 7 E', '2022-02-22', 56, 13, 94, NULL, NULL, '-', NULL, '-', '-', '-'),
(12, '3204124607170005', 'Nayara Soffi Risya', '2017-07-06', 'M. Syaikhu', '3309091605810001', '0', 'RT 3 RW 7 B17', '2022-02-22', 56, 15, 103, NULL, NULL, '-', NULL, '-', '-', '-'),
(13, '3204086802170002', 'Maryam Kirana Amanina', '2017-03-28', 'Laksono', '3509213006850001', '0', 'RT 3 RW 7 F42', '2022-02-22', 61, 14.2, 99, NULL, NULL, '-', NULL, '-', '-', '-'),
(14, '3204082907170008', 'Althafano Fakhril Zen', '2017-07-29', 'Ike', '0', '0', 'RT 3 RW 7 C111', '2022-02-22', 56, 17, 0, NULL, NULL, '-', NULL, '-', '-', '-'),
(15, '3273014410170001', 'Aisyah Qonita', '2017-10-04', 'Asril ', '3273242703840001', '0', 'RT 3 RW 7 D78', '2022-02-22', 53, 13.2, 98, NULL, NULL, '-', NULL, '-', '-', '-'),
(16, '3204081601180001', 'Uwais Zavier', '2018-01-06', 'M. Rizal', '3204081007790012', '0', 'RT 3 RW 7 E23', '2022-02-22', 50, 17.1, 105, NULL, NULL, '-', NULL, '-', '-', '-'),
(17, '3273132702180002', 'Fazer Suarga', '2018-02-27', 'Andi', '3273131408860001', '0', 'RT 3 RW 7 I41', '2022-02-22', 49, 14, 0, NULL, NULL, '-', NULL, '-', '-', '-'),
(18, '3273210704180002', 'Kahfi Cahyadi', '2018-04-07', 'Imam C', '3208121003800001', '0', 'RT 3 RW 7 D73', '2022-02-22', 47, 13, 98, NULL, NULL, '-', NULL, '-', '-', '-'),
(19, '3273132505180002', 'Althaf Zavier', '2018-05-25', 'Arqi', '3871071405890001', '0', 'RT 3 RW 7 C52', '2022-02-22', 46, 14, 100, NULL, NULL, '-', NULL, '-', '-', '-'),
(20, '3273292807160002', 'Ziyandru Arga Pratama', '2018-07-28', 'Agassi', '3273203001900001', '0', 'RT 3 RW 7 C17', '2022-02-22', 44, 16.5, 98, NULL, NULL, '-', NULL, '-', '-', '-'),
(21, '3276961608180001', 'Nathan Abinaya Khairi', '2018-08-16', 'Ahmad Zarkasyi', '3276061011790006', '0', 'RT 3 RW 7 C127', '2022-02-22', 43, 19.3, 100, NULL, NULL, '-', NULL, '-', '-', '-'),
(22, '3273181008180001', 'Zafran Albiansyah', '2018-08-18', 'Rendi', '3215291611680003', '0', 'RT 3 RW 7 I 26', '2022-02-22', 43, 14, 97, NULL, NULL, '-', NULL, '-', '-', '-'),
(23, '3204082609180008', 'Ghema Hamizan Benzema', '2018-09-26', 'Iwan', '0', '0', 'RT 3 RW 7 E 61', '2022-02-22', 42, 14, 0, NULL, NULL, '-', NULL, '-', '-', '-'),
(24, '3204121610180008', 'Albyan Basira', '2018-10-16', 'M. Kahfi', '3204082909910005', '0', 'RT 3 RW 7 C 108', '2022-02-22', 41, 13.4, 97, NULL, NULL, '-', NULL, '-', '-', '-'),
(25, '3204086411180008', 'Alma Matsuroh', '2018-11-24', 'Audry', '3273211710180001', '0', 'RT 3 RW 7 G 21', '2022-02-22', 40, 13.5, 94, NULL, NULL, '-', NULL, '-', '-', '-'),
(26, '3204082611180006', 'Albirru Zayd Mahardika', '2018-11-26', 'Aditya', '3204084709810006', '0', 'RT 3 RW 7 C 14', '2022-02-22', 40, 14, 99, NULL, NULL, '-', NULL, '-', '-', '-'),
(27, '3204080112180008', 'Thaqif Arkan Zen', '2018-12-01', 'Ike', '0', '0', 'RT 3 RW 7 C 111', '2022-02-22', 39, 12, 0, NULL, NULL, '-', NULL, '-', '-', '-'),
(28, '3204086112180004', 'Aisyarah Putri Fadia', '2018-12-21', 'Mahendra', '1471031707860021', '0', 'RT 3 RW 7F 11', '2022-02-22', 39, 10.5, 0, NULL, NULL, '-', NULL, '-', '-', '-'),
(30, '1', '1', '0001-01-01', '1', '1', '1', '1', '0001-01-01', 0, 5, 5, 'Laki', '2.833333333333333', 'Gizi Lebih', '-23.63157894736844', 'Sangat Pendek', '61.85714285714284', 'Gemuk');

-- --------------------------------------------------------

--
-- Struktur dari tabel `logindb`
--

CREATE TABLE `logindb` (
  `id` int(11) NOT NULL,
  `username` varchar(40) NOT NULL,
  `password` varchar(100) NOT NULL,
  `nama` varchar(40) NOT NULL,
  `level` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `logindb`
--

INSERT INTO `logindb` (`id`, `username`, `password`, `nama`, `level`) VALUES
(1, 'admin@gmail.com', '7488e331b8b64e5794da3fa4eb10ad5d', 'Administrator', 1),
(2, 'user@gmail.com', '6ad14ba9986e3615423dfca256d04e3f', 'User', 0);

-- --------------------------------------------------------

--
-- Struktur dari tabel `mekar18`
--

CREATE TABLE `mekar18` (
  `id` int(100) NOT NULL,
  `Nik` varchar(100) DEFAULT NULL,
  `NamaAnak` varchar(100) DEFAULT NULL,
  `TanggalLahir` date DEFAULT NULL,
  `NamaOrangTua` varchar(100) DEFAULT NULL,
  `NikOrangTua` varchar(100) DEFAULT NULL,
  `NomorTelepon` varchar(100) DEFAULT NULL,
  `Alamat` varchar(100) DEFAULT NULL,
  `TanggalUkur` date DEFAULT NULL,
  `UmurBulan` double DEFAULT NULL,
  `BeratBadan` double DEFAULT NULL,
  `TinggiBadan` double DEFAULT NULL,
  `jeniskelamin` varchar(100) DEFAULT NULL,
  `zsbbu` varchar(100) DEFAULT NULL,
  `StatusGiziBB` varchar(100) DEFAULT NULL,
  `zstbu` varchar(100) DEFAULT NULL,
  `StatusGiziTB` varchar(100) DEFAULT NULL,
  `zsimt` varchar(100) DEFAULT NULL,
  `StatusGiziIMT` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `mekar18`
--

INSERT INTO `mekar18` (`id`, `Nik`, `NamaAnak`, `TanggalLahir`, `NamaOrangTua`, `NikOrangTua`, `NomorTelepon`, `Alamat`, `TanggalUkur`, `UmurBulan`, `BeratBadan`, `TinggiBadan`, `jeniskelamin`, `zsbbu`, `StatusGiziBB`, `zstbu`, `StatusGiziTB`, `zsimt`, `StatusGiziIMT`) VALUES
(9, '1', 'Bismillah', '2023-02-01', '1', '1', '1', '1', '2023-02-08', 33, 5, 5, 'Laki', '-5.866666666666667', 'Gizi Buruk', '-24.75000000000004', 'Sangat Pendek', '64.84615384615381', 'Gemuk');

-- --------------------------------------------------------

--
-- Struktur dari tabel `mekar20`
--

CREATE TABLE `mekar20` (
  `id` int(100) NOT NULL,
  `Nik` varchar(100) NOT NULL,
  `NamaAnak` varchar(100) NOT NULL,
  `TanggalLahir` date NOT NULL,
  `NamaOrangTua` varchar(100) DEFAULT NULL,
  `NikOrangTua` varchar(100) DEFAULT NULL,
  `NomorTelepon` varchar(100) DEFAULT NULL,
  `Alamat` varchar(100) DEFAULT NULL,
  `TanggalUkur` date NOT NULL,
  `UmurBulan` double NOT NULL,
  `BeratBadan` double NOT NULL,
  `TinggiBadan` double NOT NULL,
  `jeniskelamin` varchar(100) DEFAULT NULL,
  `zsbbu` varchar(100) DEFAULT NULL,
  `StatusGiziBB` varchar(100) DEFAULT NULL,
  `zstbu` varchar(100) DEFAULT NULL,
  `StatusGiziTB` varchar(100) DEFAULT NULL,
  `zsimt` varchar(100) DEFAULT NULL,
  `StatusGiziIMT` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `mekar20`
--

INSERT INTO `mekar20` (`id`, `Nik`, `NamaAnak`, `TanggalLahir`, `NamaOrangTua`, `NikOrangTua`, `NomorTelepon`, `Alamat`, `TanggalUkur`, `UmurBulan`, `BeratBadan`, `TinggiBadan`, `jeniskelamin`, `zsbbu`, `StatusGiziBB`, `zstbu`, `StatusGiziTB`, `zsimt`, `StatusGiziIMT`) VALUES
(1, '3506092806210001', 'Rayhan Zhafar Setiyawan', '2021-06-28', 'Erwin/Gita', '3506091204210002', '0', 'RT 3 RW 7 H 32 ', '2022-02-22', 9, 9.9, 1, 'Laki', '1', 'Gizi Baik', '-30.869565217391344', 'Sangat Pendek', '694.8571428571418', 'Gemuk'),
(7, '1', 'testing', '2023-02-01', '1', '1', '1', '1', '2023-02-07', 55, 1, 1, 'Perempuan', '-7.409090909090906', 'Gizi Buruk', '-23.48888888888889', 'Sangat Pendek', '56.46666666666667', 'Gemuk');

-- --------------------------------------------------------

--
-- Struktur dari tabel `mekar21`
--

CREATE TABLE `mekar21` (
  `id` int(100) NOT NULL,
  `Nik` varchar(100) DEFAULT NULL,
  `NamaAnak` varchar(100) DEFAULT NULL,
  `TanggalLahir` text DEFAULT NULL,
  `NamaOrangTua` varchar(100) DEFAULT NULL,
  `NikOrangTua` varchar(100) DEFAULT NULL,
  `NomorTelepon` varchar(100) DEFAULT NULL,
  `Alamat` varchar(100) DEFAULT NULL,
  `TanggalUkur` date DEFAULT NULL,
  `UmurBulan` double DEFAULT NULL,
  `BeratBadan` double DEFAULT NULL,
  `TinggiBadan` double DEFAULT NULL,
  `jeniskelamin` varchar(100) DEFAULT NULL,
  `zsbbu` varchar(100) DEFAULT NULL,
  `StatusGiziBB` varchar(100) DEFAULT NULL,
  `zstbu` varchar(100) DEFAULT NULL,
  `StatusGiziTB` varchar(100) DEFAULT NULL,
  `zsimt` varchar(100) DEFAULT NULL,
  `StatusGiziIMT` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `mekar21`
--

INSERT INTO `mekar21` (`id`, `Nik`, `NamaAnak`, `TanggalLahir`, `NamaOrangTua`, `NikOrangTua`, `NomorTelepon`, `Alamat`, `TanggalUkur`, `UmurBulan`, `BeratBadan`, `TinggiBadan`, `jeniskelamin`, `zsbbu`, `StatusGiziBB`, `zstbu`, `StatusGiziTB`, `zsimt`, `StatusGiziIMT`) VALUES
(1, '3506092806210002', 'Rayyan Zhafir Setiyawan', '2021-06-29', 'Erwin/Gita', '3506091204210002', '0', 'RT 3 RW 7 H 32', '2022-02-22', 7, 9.4, 0, NULL, NULL, '0', NULL, '0', '0', '0'),
(16, '1', '1', '2023-02-01', '1', '1', '1', '1', '2023-02-08', 60, 50, 50, 'Laki', '11.740740740740744', 'Gizi Lebih', '-12.765957446808503', 'Sangat Pendek', '60.57142857142848', 'Gemuk');

-- --------------------------------------------------------

--
-- Struktur dari tabel `perempuan`
--

CREATE TABLE `perempuan` (
  `id` int(100) NOT NULL,
  `Nik` varchar(100) DEFAULT NULL,
  `NamaAnak` varchar(100) DEFAULT NULL,
  `TanggalLahir` date DEFAULT NULL,
  `NamaOrangTua` varchar(100) DEFAULT NULL,
  `NikOrangTua` varchar(100) DEFAULT NULL,
  `NomorTelepon` varchar(100) DEFAULT NULL,
  `Posyandu` varchar(100) DEFAULT NULL,
  `Alamat` varchar(200) DEFAULT NULL,
  `TanggalUkur` date DEFAULT NULL,
  `BeratBadan` double DEFAULT NULL,
  `TinggiBadan` double DEFAULT NULL,
  `LingkarKepala` double DEFAULT NULL,
  `StatusGiziBB` varchar(100) DEFAULT NULL,
  `StatusGiziTB` varchar(100) DEFAULT NULL,
  `StatusGiziBBTB` varchar(100) DEFAULT NULL,
  `StatusGiziIMT` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `laki`
--
ALTER TABLE `laki`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `logindb`
--
ALTER TABLE `logindb`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `mekar18`
--
ALTER TABLE `mekar18`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `mekar20`
--
ALTER TABLE `mekar20`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `mekar21`
--
ALTER TABLE `mekar21`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `perempuan`
--
ALTER TABLE `perempuan`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `laki`
--
ALTER TABLE `laki`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT untuk tabel `logindb`
--
ALTER TABLE `logindb`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `mekar18`
--
ALTER TABLE `mekar18`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT untuk tabel `mekar20`
--
ALTER TABLE `mekar20`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT untuk tabel `mekar21`
--
ALTER TABLE `mekar21`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT untuk tabel `perempuan`
--
ALTER TABLE `perempuan`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

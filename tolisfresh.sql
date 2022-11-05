-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Waktu pembuatan: 05 Nov 2022 pada 17.56
-- Versi server: 5.7.33
-- Versi PHP: 7.4.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tolisfresh`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `clients`
--

CREATE TABLE `clients` (
  `client_id` int(11) NOT NULL,
  `client_name` varchar(64) NOT NULL,
  `client_address` varchar(255) NOT NULL,
  `client_district` varchar(64) DEFAULT NULL,
  `client_city` varchar(64) NOT NULL,
  `client_province` varchar(64) NOT NULL,
  `client_zipcode` int(11) NOT NULL,
  `client_image` varchar(255) DEFAULT NULL,
  `client_created_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `clients`
--

INSERT INTO `clients` (`client_id`, `client_name`, `client_address`, `client_district`, `client_city`, `client_province`, `client_zipcode`, `client_image`, `client_created_at`) VALUES
(1, 'Ambhara', 'Jl. Iskandarsyah Raya No. 1, RT.5/RW.2, Melawai', 'Kebayoran Baru', 'Jakarta Selatan', 'DKI Jakarta', 12160, 'ambhara.png', '2022-10-28 08:42:54'),
(2, 'Annora', 'Jl. Jend. Sudirman No. 13, RT. 6/ RW. 13', '', 'Tangerang', 'Banten', 15118, 'annora.png', '2022-10-28 08:46:08'),
(3, 'Best Western', 'Jl. Benyamin Suaeb No. 5, RT. 13/ RW. 6', 'Kemayoran', 'Jakarta Pusat', 'DKI Jakarta', 10630, 'western.png', '2022-10-28 08:47:36'),
(4, 'Episode', 'Jl. Gading Serpong Boulevard Barat No. 6-7', 'Serpong', 'Kab. Tangerang', 'Banten', 15810, 'episode.png', '2022-10-28 08:47:36'),
(5, 'GP Mega Kuningan', 'Jl. Mega Kuningan Timur I No. E12, RT. 5/ RW. 2, Kuningan', 'Setiabudi', 'Jakarta Selatan', 'DKI Jakarta', 12950, 'kuningan.png', '2022-10-28 08:49:13'),
(6, 'Golden Tulip', 'Jl. Jend. Sudirman Kav. 9, Cikokol RT. 6/ RW. 13', '', 'Tangerang', 'Banten', 15118, 'golden.png', '2022-10-31 13:47:20'),
(7, 'Grandhika Iskandarsyah', 'Jl. Iskandarsyah Raya No. 65, RW. 2, Melawai', 'Kebayoran Baru', 'Jakarta Selatan', 'DKI Jakarta', 12160, 'grandhika.png', '2022-10-31 13:50:17'),
(8, 'Grand Cempaka', 'Jl. Letjend Suprapto, RT. 1/ RW. 3', 'Cempaka Putih', 'Jakarta Pusat', 'DKI Jakarta', 10510, 'cempaka.png', '2022-10-31 13:52:38'),
(9, 'Halaman Baru', 'Jl. Bina Marga No. 8, RT. 6/ RW. 5', 'Cipayung', 'Jakarta Timur', 'DKI Jakarta', 13840, 'halbar.png', '2022-10-31 14:15:36'),
(10, 'Halaman Pertama', 'Jl. Raya PKP No. 10, RT. 12', 'Ciratas', 'Jakarta Timur', 'DKI Jakarta', 13730, 'halper.png', '2022-10-31 14:16:50'),
(11, 'Mamma Rosy', 'Jl. Kemang Raya No. 58, RT. 8/ RW. 2, Bangka', 'Mampang Prapatan', 'Jakarta Selatan', 'DKI Jakarta', 12730, 'rosy.png', '2022-10-31 14:17:58'),
(27, 'M Bloc Market', 'Jl. Panglima Polim No. 36B, RT. 1/ RW. 1, Melawai', 'Kebayoran Baru', 'Jakarta Selatan', 'DKI Jakarta', 12160, 'bloc.png', '2022-11-05 16:45:01'),
(28, 'Pomelotel', 'Jl. Dukuh Patra Raya No. 28, Kuningan', 'Setiabudi', 'Jakarta Selatan', 'DKI Jakarta', 12870, 'pomelotel.png', '2022-11-05 16:45:52'),
(30, 'RA Premiere', 'Jl. Simatupang, RT. 1/RW. 2, Cilandak Barart', 'Cilandak', 'Jakarta Selatan', 'DKI Jakarta', 12430, 'premiere.png', '2022-11-05 16:47:31'),
(32, 'Radjak Salemba', 'Jl. Salemba Tengah No. 24, RT. 1/ RW .4, Paseban', 'Senen', 'Jakarta Pusat', 'DKI Jakarta', 10440, 'radjak.png', '2022-11-05 16:50:15'),
(33, 'Sarwono', 'Jl. Raya Pasar Minggu No. KM18.2, RT. 12/RW. 1, Pejaten', 'Pasar Minggu', 'Jakarta Selatan', 'DKI Jakarta', 12510, 'sarwono.png', '2022-11-05 16:51:52'),
(35, 'Teraskita', 'Jl. Letjen Mt. Haryono No. Kav.10A Cawang', 'Jatinegara', 'Jakarta Timur', 'DKI Jakarta', 13340, 'teraskita.png', '2022-11-05 16:53:38'),
(36, 'Pondok Indah Golf', 'Jl. Metro Pondok Indah No. 16, RT. 1/ RW. 16, Pondok Pinang', 'Kebayoran Lama', 'Jakarta Selatan', 'DKI Jakarta', 12310, 'golf.png', '2022-11-05 16:59:28'),
(37, 'Eatlah', 'Jl. Bintaro Utama 3A No. 3, Bintaro', 'Pondok Aren', 'Tangerang Selatan', 'Banten', 15412, 'eatlah.png', '2022-11-05 17:04:04'),
(38, 'Patra Hotels', 'Jl. Gatot Subroto No. 3, RT. 6/ RW. 3, Kuningan', 'Setiabudi', 'Jakarta Selatan', 'DKI Jakarta', 12950, 'patra.png', '2022-11-05 17:08:06'),
(39, 'THE 1O1 Jakarta', 'Jl. Darmawangsa 6 No. 14, RT. 5/ RW. 1, Pulo', 'Kebayoran Baru', 'Jakarta Selatan', 'DKI Jakarta', 12160, '101.png', '2022-11-05 17:15:54'),
(40, 'Aston Kartika Grogol', 'Jl. Kyai Tapa No. 101, RT. 4/ RW. 16, Tomang', 'Grogol Petamburan', 'Jakarta Barat', 'DKI Jakarta', 11440, 'aston.png', '2022-11-05 17:20:06'),
(41, 'Blue Sky', 'Jalan Aipda KS. Tubun No. 19, Petamburan', 'Tanah Abang', 'Jakarta Pusat', 'DKI Jakarta', 10260, 'bluesky.png', '2022-11-05 17:39:10');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `clients`
--
ALTER TABLE `clients`
  ADD PRIMARY KEY (`client_id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `clients`
--
ALTER TABLE `clients`
  MODIFY `client_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=42;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

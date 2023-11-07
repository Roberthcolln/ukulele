-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 15 Agu 2023 pada 03.43
-- Versi server: 10.4.28-MariaDB
-- Versi PHP: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ukulele-new`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `abouts`
--

CREATE TABLE `abouts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `about_us`
--

CREATE TABLE `about_us` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `deskripsi` text NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `about_us`
--

INSERT INTO `about_us` (`id`, `deskripsi`, `created_at`, `updated_at`) VALUES
(3, '<p>deskripsi ini diisi dari halaman admin.&nbsp;</p>\r\n\r\n<p>caranya :</p>\r\n\r\n<p>1. Klik Menu Umum</p>\r\n\r\n<p>2. Pilih About Us</p>\r\n\r\n<p>3. isi deskripsi dengan deskripsi Kalian.</p>\r\n\r\n<p><strong>SELESAI...</strong></p>', NULL, NULL);

-- --------------------------------------------------------

--
-- Struktur dari tabel `artis`
--

CREATE TABLE `artis` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `jobdesk` varchar(255) NOT NULL,
  `tlp` varchar(255) NOT NULL,
  `foto` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `artis`
--

INSERT INTO `artis` (`id`, `name`, `jobdesk`, `tlp`, `foto`, `created_at`, `updated_at`) VALUES
(2, 'Nona Ambon', 'Penyanyi', '085244088248', 'foto854458663.jpg', NULL, NULL),
(3, 'singer 2', 'Penyanyi', '085244088248', 'foto2098406224.jpg', NULL, NULL);

-- --------------------------------------------------------

--
-- Struktur dari tabel `atlits`
--

CREATE TABLE `atlits` (
  `id_atlit` bigint(20) UNSIGNED NOT NULL,
  `id_cabang_olahraga_atlit` int(11) NOT NULL,
  `nama_atlit` varchar(255) NOT NULL,
  `deskripsi_atlit` varchar(255) NOT NULL,
  `provinsi_atlit` varchar(255) NOT NULL,
  `kota_atlit` varchar(255) NOT NULL,
  `alamat_atlit` varchar(255) NOT NULL,
  `link_maps_atlit` varchar(255) NOT NULL,
  `website_atlit` varchar(255) NOT NULL,
  `email_atlit` varchar(255) NOT NULL,
  `ig_atlit` varchar(255) NOT NULL,
  `fb_atlit` varchar(255) NOT NULL,
  `youtube_atlit` varchar(255) NOT NULL,
  `telp_atlit` varchar(255) NOT NULL,
  `foto_atlit` varchar(255) NOT NULL,
  `id_badan_olahraga_atlit` varchar(255) NOT NULL,
  `id_komunitas` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `atlits`
--

INSERT INTO `atlits` (`id_atlit`, `id_cabang_olahraga_atlit`, `nama_atlit`, `deskripsi_atlit`, `provinsi_atlit`, `kota_atlit`, `alamat_atlit`, `link_maps_atlit`, `website_atlit`, `email_atlit`, `ig_atlit`, `fb_atlit`, `youtube_atlit`, `telp_atlit`, `foto_atlit`, `id_badan_olahraga_atlit`, `id_komunitas`, `created_at`, `updated_at`) VALUES
(1, 8, 'abdi bahta', 'lorem', 'Maluku', 'Ambon', 'lorem', 'https://goo.gl/maps/uDGhRjXTh6eMCvZn8', 'tidak ada', 'mrabdibahta@gmail.com', 'abdi_bahta', 'abdi bahta', 'tidak ada', '085244088248', 'foto_atlit35867054.jpg', '11', '2', NULL, NULL);

-- --------------------------------------------------------

--
-- Struktur dari tabel `badan_olahraga`
--

CREATE TABLE `badan_olahraga` (
  `id_badan_olahraga` int(10) UNSIGNED NOT NULL,
  `nama_badan_olahraga` varchar(255) NOT NULL,
  `id_cabang_olahraga` varchar(255) NOT NULL,
  `deskripsi_badan_olahraga` text NOT NULL,
  `id_provinsi` varchar(255) NOT NULL,
  `id_kota` varchar(255) NOT NULL,
  `alamat_badan_olahraga` varchar(255) NOT NULL,
  `long_badan_olahraga` double DEFAULT NULL,
  `lat_badan_olahraga` double DEFAULT NULL,
  `website_badan_olahraga` varchar(255) DEFAULT NULL,
  `email_badan_olahraga` varchar(255) DEFAULT NULL,
  `ig_badan_olahraga` varchar(255) DEFAULT NULL,
  `fb_badan_olahraga` varchar(255) DEFAULT NULL,
  `youtube_badan_olahraga` varchar(255) DEFAULT NULL,
  `telpon_badan_olahraga` varchar(255) NOT NULL,
  `logo_badan_olahraga` varchar(255) NOT NULL,
  `daftar_pengurus` varchar(255) NOT NULL,
  `jumlah_anggota_badan_olahraga` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `berita`
--

CREATE TABLE `berita` (
  `id_berita` int(10) UNSIGNED NOT NULL,
  `judul_berita` varchar(255) NOT NULL,
  `isi_berita` text NOT NULL,
  `gambar_berita` varchar(255) NOT NULL,
  `tanggal_berita` date NOT NULL,
  `slug_berita` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `berita`
--

INSERT INTO `berita` (`id_berita`, `judul_berita`, `isi_berita`, `gambar_berita`, `tanggal_berita`, `slug_berita`, `created_at`, `updated_at`) VALUES
(7, 'buaya tete lagi nonton', '<p>seekor buaya tete lagi nonton, disinyalir buaya tersebut berasal dari kebun cengkeh</p>', 'Berita20230712040136.jpg', '2023-07-12', 'buaya-tete-lagi-nonton', '2023-07-12 09:01:36', '2023-07-12 09:01:36'),
(9, 'Test Judul', '<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Veritatis minima esse pariatur quos quia dignissimos sit quas ea. Cumque earum exercitationem dolor quidem explicabo, asperiores similique officiis fugit modi aliquam.Lorem ipsum dolor sit amet consectetur adipisicing elit. Veritatis minima esse pariatur quos quia dignissimos sit quas ea. Cumque earum exercitationem dolor quidem explicabo, asperiores similique officiis fugit modi aliquam.Lorem ipsum dolor sit amet consectetur adipisicing elit. Veritatis minima esse pariatur quos quia dignissimos sit quas ea. Cumque earum exercitationem dolor quidem explicabo, asperiores similique officiis fugit modi aliquam.Lorem ipsum dolor sit amet consectetur adipisicing elit. Veritatis minima esse pariatur quos quia dignissimos sit quas ea. Cumque earum exercitationem dolor quidem explicabo, asperiores similique officiis fugit modi aliquam.Lorem ipsum dolor sit amet consectetur adipisicing elit. Veritatis minima esse pariatur quos quia dignissimos sit quas ea. Cumque earum exercitationem dolor quidem explicabo, asperiores similique officiis fugit modi aliquam.Lorem ipsum dolor sit amet consectetur adipisicing elit. Veritatis minima esse pariatur quos quia dignissimos sit quas ea. Cumque earum exercitationem dolor quidem explicabo, asperiores similique officiis fugit modi aliquam.Lorem ipsum dolor sit amet consectetur adipisicing elit. Veritatis minima esse pariatur quos quia dignissimos sit quas ea. Cumque earum exercitationem dolor quidem explicabo, asperiores similique officiis fugit modi aliquam.Lorem ipsum dolor sit amet consectetur adipisicing elit. Veritatis minima esse pariatur quos quia dignissimos sit quas ea. Cumque earum exercitationem dolor quidem explicabo, asperiores similique officiis fugit modi aliquam.Lorem ipsum dolor sit amet consectetur adipisicing elit. Veritatis minima esse pariatur quos quia dignissimos sit quas ea. Cumque earum exercitationem dolor quidem explicabo, asperiores similique officiis fugit modi aliquam.Lorem ipsum dolor sit amet consectetur adipisicing elit. Veritatis minima esse pariatur quos quia dignissimos sit quas ea. Cumque earum exercitationem dolor quidem explicabo, asperiores similique officiis fugit modi aliquam.Lorem ipsum dolor sit amet consectetur adipisicing elit. Veritatis minima esse pariatur quos quia dignissimos sit quas ea. Cumque earum exercitationem dolor quidem explicabo, asperiores similique officiis fugit modi aliquam.Lorem ipsum dolor sit amet consectetur adipisicing elit. Veritatis minima esse pariatur quos quia dignissimos sit quas ea. Cumque earum exercitationem dolor quidem explicabo, asperiores similique officiis fugit modi aliquam.Lorem ipsum dolor sit amet consectetur adipisicing elit. Veritatis minima esse pariatur quos quia dignissimos sit quas ea. Cumque earum exercitationem dolor quidem explicabo, asperiores similique officiis fugit modi aliquam.Lorem ipsum dolor sit amet consectetur adipisicing elit. Veritatis minima esse pariatur quos quia dignissimos sit quas ea. Cumque earum exercitationem dolor quidem explicabo, asperiores similique officiis fugit modi aliquam.Lorem ipsum dolor sit amet consectetur adipisicing elit. Veritatis minima esse pariatur quos quia dignissimos sit quas ea. Cumque earum exercitationem dolor quidem explicabo, asperiores similique officiis fugit modi aliquam.Lorem ipsum dolor sit amet consectetur adipisicing elit. Veritatis minima esse pariatur quos quia dignissimos sit quas ea. Cumque earum exercitationem dolor quidem explicabo, asperiores similique officiis fugit modi aliquam.Lorem ipsum dolor sit amet consectetur adipisicing elit. Veritatis minima esse pariatur quos quia dignissimos sit quas ea. Cumque earum exercitationem dolor quidem explicabo, asperiores similique officiis fugit modi aliquam.Lorem ipsum dolor sit amet consectetur adipisicing elit. Veritatis minima esse pariatur quos quia dignissimos sit quas ea. Cumque earum exercitationem dolor quidem explicabo, asperiores similique officiis fugit modi aliquam.Lorem ipsum dolor sit amet consectetur adipisicing elit. Veritatis minima esse pariatur quos quia dignissimos sit quas ea. Cumque earum exercitationem dolor quidem explicabo, asperiores similique officiis fugit modi aliquam.Lorem ipsum dolor sit amet consectetur adipisicing elit. Veritatis minima esse pariatur quos quia dignissimos sit quas ea. Cumque earum exercitationem dolor quidem explicabo, asperiores similique officiis fugit modi aliquam.Lorem ipsum dolor sit amet consectetur adipisicing elit. Veritatis minima esse pariatur quos quia dignissimos sit quas ea. Cumque earum exercitationem dolor quidem explicabo, asperiores similique officiis fugit modi aliquam.Lorem ipsum dolor sit amet consectetur adipisicing elit. Veritatis minima esse pariatur quos quia dignissimos sit quas ea. Cumque earum exercitationem dolor quidem explicabo, asperiores similique officiis fugit modi aliquam.Lorem ipsum dolor sit amet consectetur adipisicing elit. Veritatis minima esse pariatur quos quia dignissimos sit quas ea. Cumque earum exercitationem dolor quidem explicabo, asperiores similique officiis fugit modi aliquam.Lorem ipsum dolor sit amet consectetur adipisicing elit. Veritatis minima esse pariatur quos quia dignissimos sit quas ea. Cumque earum exercitationem dolor quidem explicabo, asperiores similique officiis fugit modi aliquam.Lorem ipsum dolor sit amet consectetur adipisicing elit. Veritatis minima esse pariatur quos quia dignissimos sit quas ea. Cumque earum exercitationem dolor quidem explicabo, asperiores similique officiis fugit modi aliquam.Lorem ipsum dolor sit amet consectetur adipisicing elit. Veritatis minima esse pariatur quos quia dignissimos sit quas ea. Cumque earum exercitationem dolor quidem explicabo, asperiores similique officiis fugit modi aliquam.Lorem ipsum dolor sit amet consectetur adipisicing elit. Veritatis minima esse pariatur quos quia dignissimos sit quas ea. Cumque earum exercitationem dolor quidem explicabo, asperiores similique officiis fugit modi aliquam.Lorem ipsum dolor sit amet consectetur adipisicing elit. Veritatis minima esse pariatur quos quia dignissimos sit quas ea. Cumque earum exercitationem dolor quidem explicabo, asperiores similique officiis fugit modi aliquam.Lorem ipsum dolor sit amet consectetur adipisicing elit. Veritatis minima esse pariatur quos quia dignissimos sit quas ea. Cumque earum exercitationem dolor quidem explicabo, asperiores similique officiis fugit modi aliquam.Lorem ipsum dolor sit amet consectetur adipisicing elit. Veritatis minima esse pariatur quos quia dignissimos sit quas ea. Cumque earum exercitationem dolor quidem explicabo, asperiores similique officiis fugit modi aliquam.Lorem ipsum dolor sit amet consectetur adipisicing elit. Veritatis minima esse pariatur quos quia dignissimos sit quas ea. Cumque earum exercitationem dolor quidem explicabo, asperiores similique officiis fugit modi aliquam.Lorem ipsum dolor sit amet consectetur adipisicing elit. Veritatis minima esse pariatur quos quia dignissimos sit quas ea. Cumque earum exercitationem dolor quidem explicabo, asperiores similique officiis fugit modi aliquam.Lorem ipsum dolor sit amet consectetur adipisicing elit. Veritatis minima esse pariatur quos quia dignissimos sit quas ea. Cumque earum exercitationem dolor quidem explicabo, asperiores similique officiis fugit modi aliquam.Lorem ipsum dolor sit amet consectetur adipisicing elit. Veritatis minima esse pariatur quos quia dignissimos sit quas ea. Cumque earum exercitationem dolor quidem explicabo, asperiores similique officiis fugit modi aliquam.Lorem ipsum dolor sit amet consectetur adipisicing elit. Veritatis minima esse pariatur quos quia dignissimos sit quas ea. Cumque earum exercitationem dolor quidem explicabo, asperiores similique officiis fugit modi aliquam.Lorem ipsum dolor sit amet consectetur adipisicing elit. Veritatis minima esse pariatur quos quia dignissimos sit quas ea. Cumque earum exercitationem dolor quidem explicabo, asperiores similique officiis fugit modi aliquam.Lorem ipsum dolor sit amet consectetur adipisicing elit. Veritatis minima esse pariatur quos quia dignissimos sit quas ea. Cumque earum exercitationem dolor quidem explicabo, asperiores similique officiis fugit modi aliquam.Lorem ipsum dolor sit amet consectetur adipisicing elit. Veritatis minima esse pariatur quos quia dignissimos sit quas ea. Cumque earum exercitationem dolor quidem explicabo, asperiores similique officiis fugit modi aliquam.Lorem ipsum dolor sit amet consectetur adipisicing elit. Veritatis minima esse pariatur quos quia dignissimos sit quas ea. Cumque earum exercitationem dolor quidem explicabo, asperiores similique officiis fugit modi aliquam.Lorem ipsum dolor sit amet consectetur adipisicing elit. Veritatis minima esse pariatur quos quia dignissimos sit quas ea. Cumque earum exercitationem dolor quidem explicabo, asperiores similique officiis fugit modi aliquam.Lorem ipsum dolor sit amet consectetur adipisicing elit. Veritatis minima esse pariatur quos quia dignissimos sit quas ea. Cumque earum exercitationem dolor quidem explicabo, asperiores similique officiis fugit modi aliquam.Lorem ipsum dolor sit amet consectetur adipisicing elit. Veritatis minima esse pariatur quos quia dignissimos sit quas ea. Cumque earum exercitationem dolor quidem explicabo, asperiores similique officiis fugit modi aliquam.Lorem ipsum dolor sit amet consectetur adipisicing elit. Veritatis minima esse pariatur quos quia dignissimos sit quas ea. Cumque earum exercitationem dolor quidem explicabo, asperiores similique officiis fugit modi aliquam.Lorem ipsum dolor sit amet consectetur adipisicing elit. Veritatis minima esse pariatur quos quia dignissimos sit quas ea. Cumque earum exercitationem dolor quidem explicabo, asperiores similique officiis fugit modi aliquam.Lorem ipsum dolor sit amet consectetur adipisicing elit. Veritatis minima esse pariatur quos quia dignissimos sit quas ea. Cumque earum exercitationem dolor quidem explicabo, asperiores similique officiis fugit modi aliquam.Lorem ipsum dolor sit amet consectetur adipisicing elit. Veritatis minima esse pariatur quos quia dignissimos sit quas ea. Cumque earum exercitationem dolor quidem explicabo, asperiores similique officiis fugit modi aliquam.Lorem ipsum dolor sit amet consectetur adipisicing elit. Veritatis minima esse pariatur quos quia dignissimos sit quas ea. Cumque earum exercitationem dolor quidem explicabo, asperiores similique officiis fugit modi aliquam.Lorem ipsum dolor sit amet consectetur adipisicing elit. Veritatis minima esse pariatur quos quia dignissimos sit quas ea. Cumque earum exercitationem dolor quidem explicabo, asperiores similique officiis fugit modi aliquam.Lorem ipsum dolor sit amet consectetur adipisicing elit. Veritatis minima esse pariatur quos quia dignissimos sit quas ea. Cumque earum exercitationem dolor quidem explicabo, asperiores similique officiis fugit modi aliquam.Lorem ipsum dolor sit amet consectetur adipisicing elit. Veritatis minima esse pariatur quos quia dignissimos sit quas ea. Cumque earum exercitationem dolor quidem explicabo, asperiores similique officiis fugit modi aliquam.Lorem ipsum dolor sit amet consectetur adipisicing elit. Veritatis minima esse pariatur quos quia dignissimos sit quas ea. Cumque earum exercitationem dolor quidem explicabo, asperiores similique officiis fugit modi aliquam.Lorem ipsum dolor sit amet consectetur adipisicing elit. Veritatis minima esse pariatur quos quia dignissimos sit quas ea. Cumque earum exercitationem dolor quidem explicabo, asperiores similique officiis fugit modi aliquam.Lorem ipsum dolor sit amet consectetur adipisicing elit. Veritatis minima esse pariatur quos quia dignissimos sit quas ea. Cumque earum exercitationem dolor quidem explicabo, asperiores similique officiis fugit modi aliquam.Lorem ipsum dolor sit amet consectetur adipisicing elit. Veritatis minima esse pariatur quos quia dignissimos sit quas ea. Cumque earum exercitationem dolor quidem explicabo, asperiores similique officiis fugit modi aliquam.Lorem ipsum dolor sit amet consectetur adipisicing elit. Veritatis minima esse pariatur quos quia dignissimos sit quas ea. Cumque earum exercitationem dolor quidem explicabo, asperiores similique officiis fugit modi aliquam.Lorem ipsum dolor sit amet consectetur adipisicing elit. Veritatis minima esse pariatur quos quia dignissimos sit quas ea. Cumque earum exercitationem dolor quidem explicabo, asperiores similique officiis fugit modi aliquam.Lorem ipsum dolor sit amet consectetur adipisicing elit. Veritatis minima esse pariatur quos quia dignissimos sit quas ea. Cumque earum exercitationem dolor quidem explicabo, asperiores similique officiis fugit modi aliquam.Lorem ipsum dolor sit amet consectetur adipisicing elit. Veritatis minima esse pariatur quos quia dignissimos sit quas ea. Cumque earum exercitationem dolor quidem explicabo, asperiores similique officiis fugit modi aliquam.Lorem ipsum dolor sit amet consectetur adipisicing elit. Veritatis minima esse pariatur quos quia dignissimos sit quas ea. Cumque earum exercitationem dolor quidem explicabo, asperiores similique officiis fugit modi aliquam.Lorem ipsum dolor sit amet consectetur adipisicing elit. Veritatis minima esse pariatur quos quia dignissimos sit quas ea. Cumque earum exercitationem dolor quidem explicabo, asperiores similique officiis fugit modi aliquam.Lorem ipsum dolor sit amet consectetur adipisicing elit. Veritatis minima esse pariatur quos quia dignissimos sit quas ea. Cumque earum exercitationem dolor quidem explicabo, asperiores similique officiis fugit modi aliquam.Lorem ipsum dolor sit amet consectetur adipisicing elit. Veritatis minima esse pariatur quos quia dignissimos sit quas ea. Cumque earum exercitationem dolor quidem explicabo, asperiores similique officiis fugit modi aliquam.Lorem ipsum dolor sit amet consectetur adipisicing elit. Veritatis minima esse pariatur quos quia dignissimos sit quas ea. Cumque earum exercitationem dolor quidem explicabo, asperiores similique officiis fugit modi aliquam.Lorem ipsum dolor sit amet consectetur adipisicing elit. Veritatis minima esse pariatur quos quia dignissimos sit quas ea. Cumque earum exercitationem dolor quidem explicabo, asperiores similique officiis fugit modi aliquam.Lorem ipsum dolor sit amet consectetur adipisicing elit. Veritatis minima esse pariatur quos quia dignissimos sit quas ea. Cumque earum exercitationem dolor quidem explicabo, asperiores similique officiis fugit modi aliquam.Lorem ipsum dolor sit amet consectetur adipisicing elit. Veritatis minima esse pariatur quos quia dignissimos sit quas ea. Cumque earum exercitationem dolor quidem explicabo, asperiores similique officiis fugit modi aliquam.</p>', 'Berita20230714123644.png', '2023-07-14', 'test-judul', '2023-07-14 05:36:44', '2023-07-14 05:36:44');

-- --------------------------------------------------------

--
-- Struktur dari tabel `berita_selengkapnyas`
--

CREATE TABLE `berita_selengkapnyas` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `cabang_olahraga`
--

CREATE TABLE `cabang_olahraga` (
  `id_cabang_olahraga` int(10) UNSIGNED NOT NULL,
  `nama_cabang_olahraga` varchar(255) NOT NULL,
  `logo_cabang_olahraga` text NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `cabang_olahraga`
--

INSERT INTO `cabang_olahraga` (`id_cabang_olahraga`, `nama_cabang_olahraga`, `logo_cabang_olahraga`, `created_at`, `updated_at`) VALUES
(3, 'FPTI', '254256810.jpg', '2023-06-24 15:17:16', '2023-06-24 15:17:16'),
(4, 'IPSI', 'Cabang Olahraga20230625121803.png', '2023-06-24 15:18:03', '2023-06-24 15:18:03'),
(5, 'Perbasi', 'Cabang Olahraga20230625121848.jpg', '2023-06-24 15:18:48', '2023-06-24 15:18:48'),
(6, 'PBVSI', 'Cabang Olahraga20230625121923.webp', '2023-06-24 15:19:23', '2023-06-24 15:19:23'),
(7, 'PBSI', 'Cabang Olahraga20230625121948.png', '2023-06-24 15:19:48', '2023-06-24 15:19:48'),
(8, 'PSSI', 'Cabang Olahraga20230625122028.jpg', '2023-06-24 15:20:28', '2023-06-24 15:20:28'),
(9, 'Percasi', 'Cabang Olahraga20230625122158.jpg', '2023-06-24 15:21:58', '2023-06-24 15:21:58');

-- --------------------------------------------------------

--
-- Struktur dari tabel `contact_us`
--

CREATE TABLE `contact_us` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `full_name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `organization` varchar(255) NOT NULL,
  `message` text NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `contact_us`
--

INSERT INTO `contact_us` (`id`, `full_name`, `email`, `organization`, `message`, `created_at`, `updated_at`) VALUES
(1, 'abdi', 'mrabdibahta@gmail.com', 'asdad', ',asbdajbdsa', NULL, NULL);

-- --------------------------------------------------------

--
-- Struktur dari tabel `desa`
--

CREATE TABLE `desa` (
  `id_desa` int(11) NOT NULL,
  `id_kabupaten` int(11) NOT NULL,
  `id_kecamatan` int(11) NOT NULL,
  `nama_desa` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `desa`
--

INSERT INTO `desa` (`id_desa`, `id_kabupaten`, `id_kecamatan`, `nama_desa`, `created_at`, `updated_at`) VALUES
(1, 1, 1, 'Siahoni', '2023-07-21 03:19:42', '2023-07-21 03:19:42'),
(2, 1, 1, 'Sanleko', '2023-07-21 03:19:42', '2023-07-21 03:19:42'),
(3, 1, 1, 'Namlea', '2023-07-21 03:20:46', '2023-07-21 03:20:46'),
(4, 1, 1, 'Lala', '2023-07-21 03:20:46', '2023-07-21 03:20:46'),
(5, 1, 1, 'Karang Jaya', '2023-07-21 03:21:18', '2023-07-21 03:21:18'),
(6, 1, 1, 'Jamilu', '2023-07-21 03:21:18', '2023-07-21 03:21:18'),
(7, 1, 1, 'Batu boy', '2023-07-21 03:21:45', '2023-07-21 03:21:45'),
(8, 1, 2, 'Air Buaya', '2023-07-21 03:23:11', '2023-07-21 03:23:11'),
(9, 1, 2, 'Awilinan', '2023-07-21 03:23:11', '2023-07-21 03:23:11'),
(10, 1, 2, 'Bara', '2023-07-21 03:23:40', '2023-07-21 03:23:40'),
(11, 1, 2, 'Batlale', '2023-07-21 03:23:40', '2023-07-21 03:23:40'),
(12, 1, 2, 'Kampung Baru', '2023-07-21 03:24:23', '2023-07-21 03:24:23'),
(13, 1, 2, 'Selwadu', '2023-07-21 03:24:23', '2023-07-21 03:24:23'),
(14, 1, 2, 'Tanjung Karang', '2023-07-21 03:24:52', '2023-07-21 03:24:52'),
(15, 1, 2, 'Waemangit', '2023-07-21 03:24:52', '2023-07-21 03:24:52'),
(16, 1, 2, 'Waepure', '2023-07-21 03:25:20', '2023-07-21 03:25:20'),
(17, 1, 2, 'Wasbaka', '2023-07-21 03:25:20', '2023-07-21 03:25:20');

-- --------------------------------------------------------

--
-- Struktur dari tabel `events`
--

CREATE TABLE `events` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama_event` varchar(255) NOT NULL,
  `deskripsi_event` text NOT NULL,
  `tgl_mulai` date NOT NULL,
  `tgl_selesai` date NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `events`
--

INSERT INTO `events` (`id`, `nama_event`, `deskripsi_event`, `tgl_mulai`, `tgl_selesai`, `created_at`, `updated_at`) VALUES
(2, 'Festival 10.000 Ukulele', '<p>Festival 10.000 Ukulele ini adalah Festival yang akan diadakan serentak di 10 Daerah yang ada di Maluku</p>', '2023-08-16', '2023-08-17', NULL, NULL);

-- --------------------------------------------------------

--
-- Struktur dari tabel `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) NOT NULL,
  `connection` text NOT NULL,
  `queue` text NOT NULL,
  `payload` longtext NOT NULL,
  `exception` longtext NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `inbox`
--

CREATE TABLE `inbox` (
  `id` int(11) NOT NULL,
  `nama_pengirim` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `subjek` varchar(125) NOT NULL,
  `pesan` text NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `jenis_kelamin`
--

CREATE TABLE `jenis_kelamin` (
  `id` int(11) NOT NULL,
  `jenis_kelamin` varchar(25) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `jenis_kelamin`
--

INSERT INTO `jenis_kelamin` (`id`, `jenis_kelamin`, `created_at`, `updated_at`) VALUES
(1, 'Laki - laki', '2023-06-20 16:03:41', '2023-06-20 16:03:41'),
(2, 'Perempuan', '2023-06-20 16:03:41', '2023-06-20 16:03:41');

-- --------------------------------------------------------

--
-- Struktur dari tabel `jenis_komunitas`
--

CREATE TABLE `jenis_komunitas` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `jenis_komunitas` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `jenis_komunitas`
--

INSERT INTO `jenis_komunitas` (`id`, `jenis_komunitas`, `created_at`, `updated_at`) VALUES
(10, 'Olahraga', NULL, NULL),
(11, 'Seni dan Budaya', NULL, NULL),
(13, 'Umum', NULL, NULL),
(14, 'Profesi', NULL, NULL);

-- --------------------------------------------------------

--
-- Struktur dari tabel `jenis_tempat`
--

CREATE TABLE `jenis_tempat` (
  `id_jenis_tempat` int(10) UNSIGNED NOT NULL,
  `nama_jenis_tempat` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `jenis_tempat`
--

INSERT INTO `jenis_tempat` (`id_jenis_tempat`, `nama_jenis_tempat`, `created_at`, `updated_at`) VALUES
(5, 'Lapangan Futsal', '2023-06-25 04:08:21', '2023-06-25 04:08:21');

-- --------------------------------------------------------

--
-- Struktur dari tabel `kabupaten`
--

CREATE TABLE `kabupaten` (
  `id_kabupaten` int(11) NOT NULL,
  `nama_kabupaten` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `kabupaten`
--

INSERT INTO `kabupaten` (`id_kabupaten`, `nama_kabupaten`, `created_at`, `updated_at`) VALUES
(1, 'Buru', '2023-07-21 02:59:16', '2023-07-21 02:59:16'),
(2, 'Buru Selatan', '2023-07-21 02:59:16', '2023-07-21 02:59:16'),
(3, 'Kepulauan Aru', '2023-07-21 02:59:49', '2023-07-21 02:59:49'),
(4, 'Kepulauan Tanimbar', '2023-07-21 02:59:49', '2023-07-21 02:59:49'),
(5, 'Maluku Barat Daya', '2023-07-21 03:00:10', '2023-07-21 03:00:10'),
(6, 'Maluku Tengah', '2023-07-21 03:00:10', '2023-07-21 03:00:10'),
(7, 'Maluku Tenggara Barat', '2023-07-21 03:00:48', '2023-07-21 03:00:48'),
(8, 'Seram Bagian Timur', '2023-07-21 03:00:48', '2023-07-21 03:00:48'),
(9, 'Seram Bagian Barat', '2023-07-21 03:01:12', '2023-07-21 03:01:12'),
(10, 'Kota Ambon', '2023-07-21 03:01:12', '2023-07-21 03:01:12'),
(11, 'Kota Tual', '2023-07-21 03:01:28', '2023-07-21 03:01:28');

-- --------------------------------------------------------

--
-- Struktur dari tabel `kategori_abouts`
--

CREATE TABLE `kategori_abouts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `apa_yang_ada` varchar(255) NOT NULL,
  `deskripsi` text NOT NULL,
  `icon` text NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `kategori_abouts`
--

INSERT INTO `kategori_abouts` (`id`, `apa_yang_ada`, `deskripsi`, `icon`, `created_at`, `updated_at`) VALUES
(10, 'Digitalisasi Data Atlit dan Pengurus di Lingkup Dispora Kota Ambon', 'Dengan adanya DisporaVerse ini seluruh data Atlit, Wasit, Pelatih dan Pengurus dilingkup Dispora Kota Ambon jadi lebih mudah didata dan tertata rapi sehingga memudahkan kami ketika akan diadakan event atau kejuaraan tingkat kota', 'icon_355617251.png', NULL, NULL);

-- --------------------------------------------------------

--
-- Struktur dari tabel `kategori_badan_olahragas`
--

CREATE TABLE `kategori_badan_olahragas` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `caption` varchar(255) NOT NULL,
  `deskripsi` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `kategori_badan_olahragas`
--

INSERT INTO `kategori_badan_olahragas` (`id`, `caption`, `deskripsi`, `created_at`, `updated_at`) VALUES
(2, 'Badan Olahraga yang ada saat ini', 'Daftar seluruh badan olahraga yang ada di Dispora Kota Ambon', NULL, NULL),
(4, 'Komunitas Yang Ada di Lingkup Dispora Kota Ambon', 'akjnasdnasjdnasdnas', NULL, NULL);

-- --------------------------------------------------------

--
-- Struktur dari tabel `kategori_kelompok_ukuleles`
--

CREATE TABLE `kategori_kelompok_ukuleles` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama_kelompok_ukulele` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `kategori_kelompok_ukuleles`
--

INSERT INTO `kategori_kelompok_ukuleles` (`id`, `nama_kelompok_ukulele`, `created_at`, `updated_at`) VALUES
(4, 'ina kaka', NULL, NULL),
(6, 'ina latu', NULL, NULL);

-- --------------------------------------------------------

--
-- Struktur dari tabel `kategori_komunitas`
--

CREATE TABLE `kategori_komunitas` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `caption` varchar(255) NOT NULL,
  `deskripsi` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `kategori_komunitas`
--

INSERT INTO `kategori_komunitas` (`id`, `caption`, `deskripsi`, `created_at`, `updated_at`) VALUES
(1, 'Komunitas Yang Ada di Lingkup Dispora Kota Ambon', 'lorem ipsum dolor sit amet', NULL, NULL);

-- --------------------------------------------------------

--
-- Struktur dari tabel `kecamatan`
--

CREATE TABLE `kecamatan` (
  `id_kecamatan` int(11) NOT NULL,
  `id_kabupaten` int(11) NOT NULL,
  `nama_kecamatan` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `kecamatan`
--

INSERT INTO `kecamatan` (`id_kecamatan`, `id_kabupaten`, `nama_kecamatan`, `created_at`, `updated_at`) VALUES
(1, 1, 'Namlea', '2023-07-21 03:08:16', '2023-07-21 03:08:16'),
(2, 1, 'Air Buaya', '2023-07-21 03:08:16', '2023-07-21 03:08:16'),
(3, 1, 'Waeapo', '2023-07-21 03:08:47', '2023-07-21 03:08:47'),
(4, 1, 'Waplau', '2023-07-21 03:08:47', '2023-07-21 03:08:47'),
(5, 1, 'Batabual', '2023-07-21 03:09:14', '2023-07-21 03:09:14'),
(6, 1, 'Lolong Guba', '2023-07-21 03:09:14', '2023-07-21 03:09:14'),
(7, 1, 'Waelata	', '2023-07-21 03:09:37', '2023-07-21 03:09:37'),
(8, 1, 'Fena Leisela', '2023-07-21 03:09:37', '2023-07-21 03:09:37'),
(9, 1, 'Teluk Kaiely', '2023-07-21 03:10:20', '2023-07-21 03:10:20'),
(10, 1, 'Lilialy', '2023-07-21 03:10:20', '2023-07-21 03:10:20'),
(11, 2, 'Namrole', '2023-07-21 03:12:17', '2023-07-21 03:12:17'),
(12, 2, 'Waesama', '2023-07-21 03:12:17', '2023-07-21 03:12:17'),
(13, 2, 'Ambalau', '2023-07-21 03:12:48', '2023-07-21 03:12:48'),
(14, 2, 'Kepala Madan	', '2023-07-21 03:12:48', '2023-07-21 03:12:48'),
(15, 2, 'Leksula', '2023-07-21 03:13:14', '2023-07-21 03:13:14'),
(16, 2, 'Fena Fafan', '2023-07-21 03:13:14', '2023-07-21 03:13:14'),
(17, 3, 'Pulau-Pulau Aru', '2023-07-21 03:33:15', '2023-07-21 03:33:15'),
(18, 3, 'Aru Selatan', '2023-07-21 03:33:15', '2023-07-21 03:33:15'),
(19, 3, 'Aru Tengah', '2023-07-21 03:33:44', '2023-07-21 03:33:44'),
(20, 3, 'Aru Utara', '2023-07-21 03:33:44', '2023-07-21 03:33:44'),
(21, 3, 'Aru Utara Timur Batuley', '2023-07-21 03:34:42', '2023-07-21 03:34:42'),
(22, 3, 'Sir-Sir', '2023-07-21 03:34:42', '2023-07-21 03:34:42'),
(23, 3, 'Aru Tengah Timur', '2023-07-21 03:35:13', '2023-07-21 03:35:13'),
(24, 3, 'Aru Tengah Selatan	', '2023-07-21 03:35:13', '2023-07-21 03:35:13'),
(25, 3, 'Aru Selatan Timur', '2023-07-21 03:35:35', '2023-07-21 03:35:35'),
(26, 3, 'Aru Selatan Utara', '2023-07-21 03:35:35', '2023-07-21 03:35:35'),
(27, 4, 'Tanimbar Selatan', '2023-07-21 03:36:33', '2023-07-21 03:36:33'),
(28, 4, 'Selaru', '2023-07-21 03:36:33', '2023-07-21 03:36:33'),
(29, 4, 'Wer Tamrian', '2023-07-21 03:37:07', '2023-07-21 03:37:07'),
(30, 4, 'Wer Maktian', '2023-07-21 03:37:07', '2023-07-21 03:37:07'),
(31, 4, 'Tanimbar Utara', '2023-07-21 03:37:28', '2023-07-21 03:37:28'),
(32, 4, 'Yaru', '2023-07-21 03:37:28', '2023-07-21 03:37:28'),
(33, 4, 'Wuar Labobar	', '2023-07-21 03:37:55', '2023-07-21 03:37:55'),
(34, 4, 'Kormomolin', '2023-07-21 03:37:55', '2023-07-21 03:37:55'),
(35, 4, 'Nirunmas', '2023-07-21 03:38:19', '2023-07-21 03:38:19'),
(36, 4, 'Molu Maru', '2023-07-21 03:38:19', '2023-07-21 03:38:19'),
(37, 5, 'Moa Lakor', '2023-07-21 03:40:21', '2023-07-21 03:40:21'),
(38, 5, 'Damer', '2023-07-21 03:40:21', '2023-07-21 03:40:21'),
(39, 5, 'Mndona Hiera	', '2023-07-21 03:40:58', '2023-07-21 03:40:58'),
(40, 5, 'Pulau-Pulau Babar', '2023-07-21 03:40:58', '2023-07-21 03:40:58'),
(41, 5, 'Pulau-Pulau Babar Timur	', '2023-07-21 03:41:19', '2023-07-21 03:41:19'),
(42, 5, 'Wetar', '2023-07-21 03:41:19', '2023-07-21 03:41:19'),
(43, 5, 'Pulau-Pulau Terselatan', '2023-07-21 03:41:47', '2023-07-21 03:41:47'),
(44, 5, 'Pulau Leti', '2023-07-21 03:41:47', '2023-07-21 03:41:47'),
(45, 5, 'Pulau Masela', '2023-07-21 03:42:17', '2023-07-21 03:42:17'),
(46, 5, 'Dawelor Dawera', '2023-07-21 03:42:17', '2023-07-21 03:42:17'),
(47, 5, 'Pulau Wetang', '2023-07-21 03:42:46', '2023-07-21 03:42:46'),
(48, 5, 'Pulau Lakor', '2023-07-21 03:42:46', '2023-07-21 03:42:46'),
(49, 5, 'Wetar Utara', '2023-07-21 03:43:17', '2023-07-21 03:43:17'),
(50, 5, 'Wetar Barat', '2023-07-21 03:43:17', '2023-07-21 03:43:17'),
(51, 5, 'Wetar Timur', '2023-07-21 03:43:43', '2023-07-21 03:43:43'),
(52, 5, 'Kepulauan Romang', '2023-07-21 03:43:43', '2023-07-21 03:43:43'),
(53, 5, 'Kisar Utara', '2023-07-21 03:44:06', '2023-07-21 03:44:06'),
(54, 6, 'Banda', '2023-07-21 03:49:12', '2023-07-21 03:49:12'),
(55, 6, 'Tehoru\r\n', '2023-07-21 03:49:12', '2023-07-21 03:49:12'),
(56, 6, 'Telutih\r\n ', '2023-07-21 03:49:48', '2023-07-21 03:49:48'),
(57, 6, 'Amahai', '2023-07-21 03:49:48', '2023-07-21 03:49:48'),
(58, 6, 'Kota Masohi', '2023-07-21 03:50:13', '2023-07-21 03:50:13'),
(59, 6, 'Teluk Elpaputih', '2023-07-21 03:50:13', '2023-07-21 03:50:13'),
(60, 6, 'Teon Nila Serua', '2023-07-21 03:50:40', '2023-07-21 03:50:40'),
(61, 6, 'Saparua', '2023-07-21 03:50:40', '2023-07-21 03:50:40'),
(62, 6, 'Nusalaut', '2023-07-21 03:51:04', '2023-07-21 03:51:04'),
(63, 6, 'Pulau Haruku', '2023-07-21 03:51:04', '2023-07-21 03:51:04'),
(64, 6, 'Salahutu', '2023-07-21 03:51:26', '2023-07-21 03:51:26'),
(65, 6, 'Leihitu', '2023-07-21 03:51:26', '2023-07-21 03:51:26'),
(66, 6, 'Leihitu Barat', '2023-07-21 03:51:49', '2023-07-21 03:51:49'),
(67, 6, 'Seram Utara', '2023-07-21 03:51:49', '2023-07-21 03:51:49'),
(68, 6, 'Seram Utara Barat', '2023-07-21 03:52:12', '2023-07-21 03:52:12'),
(69, 6, 'Seram Utara Timur Kobi', '2023-07-21 03:52:12', '2023-07-21 03:52:12'),
(70, 6, 'Seram Utara Timur Seti', '2023-07-21 03:52:21', '2023-07-21 03:52:21'),
(71, 7, 'Kei Kecil', '2023-07-21 05:32:27', '2023-07-21 05:32:27'),
(72, 7, 'Kei Besar', '2023-07-21 05:32:27', '2023-07-21 05:32:27'),
(73, 7, 'Kei Besar Selatan', '2023-07-21 05:33:07', '2023-07-21 05:33:07'),
(74, 7, 'Kei Besar Utara Timur', '2023-07-21 05:33:07', '2023-07-21 05:33:07'),
(75, 7, 'Kei Kecil Timur', '2023-07-21 05:33:28', '2023-07-21 05:33:28'),
(76, 7, 'Kei Kecil Barat', '2023-07-21 05:33:28', '2023-07-21 05:33:28'),
(77, 7, 'Manyeuw', '2023-07-21 05:33:54', '2023-07-21 05:33:54'),
(78, 7, 'Hoat Sorbay	', '2023-07-21 05:33:54', '2023-07-21 05:33:54'),
(79, 7, 'Kei Besar Utara Barat', '2023-07-21 05:34:37', '2023-07-21 05:34:37'),
(80, 7, 'Kei Besar Selatan Barat', '2023-07-21 05:34:37', '2023-07-21 05:34:37'),
(81, 7, 'Kei Besar Timur Selatan	', '2023-07-21 05:34:53', '2023-07-21 05:34:53'),
(82, 8, 'Bula', '2023-07-21 06:24:30', '2023-07-21 06:24:30'),
(83, 8, 'Seram Timur	', '2023-07-21 06:24:30', '2023-07-21 06:24:30'),
(84, 8, 'Werinama', '2023-07-21 06:24:57', '2023-07-21 06:24:57'),
(85, 8, 'Pulau Gorom', '2023-07-21 06:24:57', '2023-07-21 06:24:57'),
(86, 8, 'Wakate', '2023-07-21 06:25:19', '2023-07-21 06:25:19'),
(87, 8, 'Tutuk Tolu', '2023-07-21 06:25:19', '2023-07-21 06:25:19'),
(88, 8, 'Siwalalat', '2023-07-21 06:26:10', '2023-07-21 06:26:10'),
(89, 8, 'Kilmury', '2023-07-21 06:26:10', '2023-07-21 06:26:10'),
(90, 8, 'Pulau Panjang', '2023-07-21 06:26:34', '2023-07-21 06:26:34'),
(91, 8, 'Teor', '2023-07-21 06:26:34', '2023-07-21 06:26:34'),
(92, 8, 'Gorom Timur', '2023-07-21 06:27:01', '2023-07-21 06:27:01'),
(93, 8, 'Bula Barat', '2023-07-21 06:27:01', '2023-07-21 06:27:01'),
(94, 8, 'Kian Darat', '2023-07-21 06:27:24', '2023-07-21 06:27:24'),
(95, 8, 'Siritaun Wida Timur', '2023-07-21 06:27:24', '2023-07-21 06:27:24'),
(96, 8, 'Teluk Waru', '2023-07-21 06:27:38', '2023-07-21 06:27:38'),
(97, 9, 'Kairatu', '2023-07-21 06:33:28', '2023-07-21 06:33:28'),
(98, 9, 'Seram Barat', '2023-07-21 06:33:28', '2023-07-21 06:33:28'),
(99, 9, 'Taniwel', '2023-07-21 06:33:50', '2023-07-21 06:33:50'),
(100, 9, 'Huamual Belakang', '2023-07-21 06:33:50', '2023-07-21 06:33:50'),
(101, 9, 'Amalatu', '2023-07-21 06:34:12', '2023-07-21 06:34:12'),
(102, 9, 'Inamosol', '2023-07-21 06:34:12', '2023-07-21 06:34:12'),
(103, 9, 'Kairatu Barat', '2023-07-21 06:34:34', '2023-07-21 06:34:34'),
(104, 9, 'Huamual', '2023-07-21 06:34:34', '2023-07-21 06:34:34'),
(105, 9, 'Kepulauan Manipa', '2023-07-21 06:34:55', '2023-07-21 06:34:55'),
(106, 9, 'Taniwel Timur	', '2023-07-21 06:34:55', '2023-07-21 06:34:55'),
(107, 9, 'Elpaputih', '2023-07-21 06:35:08', '2023-07-21 06:35:08'),
(108, 10, 'Nusaniwe', '2023-07-21 06:36:19', '2023-07-21 06:36:19'),
(109, 10, 'Sirimau', '2023-07-21 06:36:19', '2023-07-21 06:36:19'),
(110, 10, 'Teluk Ambon Baguala', '2023-07-21 06:36:40', '2023-07-21 06:36:40'),
(111, 10, 'Teluk Ambon', '2023-07-21 06:36:40', '2023-07-21 06:36:40'),
(112, 10, 'Leitimur Selatan', '2023-07-21 06:36:54', '2023-07-21 06:36:54'),
(113, 11, 'Pulau Dullah Utara', '2023-07-21 06:39:23', '2023-07-21 06:39:23'),
(114, 11, 'Pulau Dullah Selatan', '2023-07-21 06:39:23', '2023-07-21 06:39:23'),
(115, 11, 'Tayando Tam', '2023-07-21 06:40:17', '2023-07-21 06:40:17'),
(116, 11, 'Pulau-Pulau Kur', '2023-07-21 06:40:17', '2023-07-21 06:40:17'),
(117, 11, 'Kur Selatan', '2023-07-21 06:40:30', '2023-07-21 06:40:30');

-- --------------------------------------------------------

--
-- Struktur dari tabel `kegiatan`
--

CREATE TABLE `kegiatan` (
  `id_kegiatan` int(10) UNSIGNED NOT NULL,
  `nama_kegiatan` varchar(255) NOT NULL,
  `deskripsi_kegiatan` text NOT NULL,
  `gambar_kegiatan` varchar(255) NOT NULL,
  `tanggal_kegiatan` date NOT NULL,
  `jam_kegiatan` time NOT NULL,
  `slug_kegiatan` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `kegiatan`
--

INSERT INTO `kegiatan` (`id_kegiatan`, `nama_kegiatan`, `deskripsi_kegiatan`, `gambar_kegiatan`, `tanggal_kegiatan`, `jam_kegiatan`, `slug_kegiatan`, `created_at`, `updated_at`) VALUES
(13, 'coba', '<p>coba coba sama gue. cantikk tapi seksi</p>', 'Kegiatan20230712013330.png', '2023-08-10', '09:00:00', 'coba', '2023-07-12 06:33:30', '2023-07-12 06:33:30');

-- --------------------------------------------------------

--
-- Struktur dari tabel `komunitas`
--

CREATE TABLE `komunitas` (
  `id_komunitas` bigint(20) UNSIGNED NOT NULL,
  `nama_komunitas` varchar(255) NOT NULL,
  `id_jenis_komunitas` varchar(255) NOT NULL,
  `id_pic_komunitas` varchar(255) NOT NULL,
  `deskripsi_komunitas` varchar(255) NOT NULL,
  `provinsi_komunitas` varchar(255) NOT NULL,
  `kota_komunitas` varchar(255) NOT NULL,
  `alamat_komunitas` varchar(255) NOT NULL,
  `link_maps_komunitas` text NOT NULL,
  `website_komunitas` varchar(255) NOT NULL,
  `email_komunitas` varchar(255) NOT NULL,
  `instagram_komunitas` varchar(255) NOT NULL,
  `facebook_komunitas` varchar(255) NOT NULL,
  `youtube_komunitas` varchar(255) NOT NULL,
  `telepon_komunitas` varchar(255) NOT NULL,
  `daftar_pengurus_komunitas` varchar(255) NOT NULL,
  `logo_komunitas` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `komunitas`
--

INSERT INTO `komunitas` (`id_komunitas`, `nama_komunitas`, `id_jenis_komunitas`, `id_pic_komunitas`, `deskripsi_komunitas`, `provinsi_komunitas`, `kota_komunitas`, `alamat_komunitas`, `link_maps_komunitas`, `website_komunitas`, `email_komunitas`, `instagram_komunitas`, `facebook_komunitas`, `youtube_komunitas`, `telepon_komunitas`, `daftar_pengurus_komunitas`, `logo_komunitas`, `created_at`, `updated_at`) VALUES
(2, 'Tulehu Boxing Club', '10', '5', 'komunitas tinju Negeri tulehu', 'Maluku', 'Ambon', 'universitas darussalam tulehu km 23 ambon', 'https://goo.gl/maps/dr39nsNd6HZMasef6', 'tidak ada', 'mrabdibahta@gmail.com', '@tulehu_boxing_club', '@tulehu_boxing_club', 'tidak ada', '082199034866', 'robert, arik, ani', 'logo_komunitas1011152128.png', NULL, NULL);

-- --------------------------------------------------------

--
-- Struktur dari tabel `kontak`
--

CREATE TABLE `kontak` (
  `id` int(11) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `subjek` varchar(125) NOT NULL,
  `pesan` text NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `kontak`
--

INSERT INTO `kontak` (`id`, `nama`, `email`, `subjek`, `pesan`, `created_at`, `updated_at`) VALUES
(8, 'wrwr', 'test@gmail.com', 'ppdb', 'adadads', '2023-06-08 04:34:41', '2023-06-08 04:34:41');

-- --------------------------------------------------------

--
-- Struktur dari tabel `kota`
--

CREATE TABLE `kota` (
  `id_kota` int(10) UNSIGNED NOT NULL,
  `id_provinsi` int(11) NOT NULL,
  `nama_kota` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `kota`
--

INSERT INTO `kota` (`id_kota`, `id_provinsi`, `nama_kota`, `created_at`, `updated_at`) VALUES
(12, 12, 'Kabupaten Buru', '2023-06-26 01:47:23', '2023-06-26 01:49:08'),
(13, 12, 'Kabupaten Buru Selatan', '2023-06-26 01:48:25', '2023-06-26 01:48:25'),
(14, 12, 'Kabupaten Kepulauan Aru', '2023-06-26 01:49:22', '2023-06-26 01:49:22'),
(15, 12, 'Kabupaten Maluku Barat Daya', '2023-06-26 01:49:35', '2023-06-26 01:49:35'),
(16, 12, 'Kabupaten Maluku Tengah', '2023-06-26 01:49:50', '2023-06-26 01:49:50'),
(17, 12, 'Kabupaten Maluku Tenggara', '2023-06-26 01:50:04', '2023-06-26 01:50:04'),
(18, 12, 'Kabupaten Maluku Tenggara Barat', '2023-06-26 01:50:19', '2023-06-26 01:50:19'),
(19, 12, 'Kabupaten Seram Bagian Barat', '2023-06-26 01:50:34', '2023-06-26 01:50:34'),
(20, 12, 'Kabupaten Seram Bagian Timur', '2023-06-26 01:50:52', '2023-06-26 01:50:52'),
(21, 12, 'Kota Ambon', '2023-06-26 01:51:04', '2023-06-26 01:51:04'),
(22, 12, 'Kota Tual', '2023-06-26 01:51:21', '2023-06-26 01:51:21');

-- --------------------------------------------------------

--
-- Struktur dari tabel `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_reset_tokens_table', 1),
(3, '2014_10_12_200000_add_two_factor_columns_to_users_table', 1),
(4, '2019_08_19_000000_create_failed_jobs_table', 1),
(5, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(6, '2023_04_17_054005_create_sessions_table', 1),
(7, '2023_04_17_060220_create_kontens_table', 2),
(8, '2023_04_18_044938_create_kategori_kegiatans_table', 3),
(9, '2023_04_18_052800_create_sub_kategori_kegiatans_table', 4),
(10, '2023_04_20_125456_create_kategori_produks_table', 5),
(11, '2023_04_20_133937_create_kategori_beritas_table', 6),
(12, '2023_04_20_152819_create_kategori_dokumens_table', 7),
(13, '2023_04_26_003400_create_kategori_simpanans_table', 8),
(14, '2023_04_26_024743_create_dokumens_table', 9),
(15, '2023_04_26_055443_create_produks_table', 10),
(16, '2023_04_26_123052_create_galeris_table', 11),
(17, '2023_04_26_130420_create_beritas_table', 12),
(18, '2023_04_27_111518_create_kategori_users_table', 13),
(19, '2023_04_27_113941_create_provinsis_table', 14),
(20, '2023_04_27_121304_create_kotas_table', 15),
(21, '2023_04_27_153018_create_kategori_admins_table', 16),
(22, '2023_05_02_143732_create_kategori_penguruses_table', 17),
(23, '2023_05_02_164357_create_kategori_anggotas_table', 18),
(24, '2023_05_03_103438_create_videos_table', 19),
(25, '2023_05_03_110129_create_kegiatans_table', 20),
(26, '2023_05_04_105839_create_kategori_unit_bisnis_table', 21),
(27, '2023_05_04_112634_create_kategori_karyawans_table', 22),
(28, '2023_05_04_142940_create_settings_table', 23),
(29, '2023_05_16_031729_create_kategori_garasis_table', 24),
(30, '2023_05_16_042019_create_garasis_table', 24),
(31, '2023_05_16_134625_create_iurans_table', 24),
(32, '2023_05_16_155731_create_pusats_table', 24),
(33, '2023_05_16_160959_create_regions_table', 25),
(34, '2023_05_16_162713_create_chapters_table', 26),
(35, '2023_05_17_101913_create_communities_table', 27),
(36, '2023_06_23_121902_create_jenis_komunitas_table', 28),
(37, '2023_06_23_145534_create_komunitas_table', 29),
(38, '2023_06_23_172433_create_pic_komunitas_table', 30),
(39, '2023_07_03_121219_create_pelatihs_table', 31),
(40, '2023_07_03_140730_create_prestasis_table', 31),
(41, '2023_07_05_124715_create_wasits_table', 32),
(42, '2023_07_05_135804_create_prestasi_wasits_table', 33),
(43, '2023_07_07_171751_create_atlits_table', 34),
(44, '2023_07_07_190303_create_prestasi_atlits_table', 35),
(45, '2023_07_14_112839_create_berita_selengkapnyas_table', 36),
(46, '2023_07_17_165346_create_abouts_table', 36),
(47, '2023_07_17_165643_create_kategori_abouts_table', 36),
(48, '2023_07_18_153723_create_kategori_badan_olahragas_table', 37),
(49, '2023_07_18_170356_create_kategori_komunitas_table', 38),
(50, '2023_07_20_170557_create_kategori_kelompok_ukuleles_table', 39),
(51, '2023_07_20_211033_create_pic_kelompok_ukuleles_table', 40),
(52, '2023_07_21_155524_create_pesertas_table', 41),
(53, '2023_07_26_141332_create_ukuleles_table', 42),
(54, '2023_07_30_204723_create_presensis_table', 43),
(55, '2023_08_03_171046_create_presensi_pesertas_table', 44),
(56, '2023_08_09_221145_create_artis_table', 45),
(57, '2023_08_11_095444_create_presensi_ukuleles_table', 46),
(58, '2023_08_11_152928_create_about_us_table', 47),
(59, '2023_08_11_164125_create_events_table', 48),
(60, '2023_08_12_235620_create_contact_us_table', 49),
(61, '2023_08_14_132048_create_sponsor_ships_table', 50),
(62, '2023_08_14_163118_create_wilayah_participants_table', 51);

-- --------------------------------------------------------

--
-- Struktur dari tabel `password_reset_tokens`
--

CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `password_reset_tokens`
--

INSERT INTO `password_reset_tokens` (`email`, `token`, `created_at`) VALUES
('mrabdibahta@gmail.com', '$2y$10$N8FCpKNLcY5y8LPxPkQeGO/9yffmNqWk5JRyd42nE8DGHeacqAhj6', '2023-06-11 03:42:59');

-- --------------------------------------------------------

--
-- Struktur dari tabel `pelatihs`
--

CREATE TABLE `pelatihs` (
  `id_pelatih` bigint(20) UNSIGNED NOT NULL,
  `id_cabang_olahraga_pelatih` int(11) NOT NULL,
  `nama_pelatih` varchar(255) NOT NULL,
  `deskripsi_pelatih` varchar(255) NOT NULL,
  `provinsi_pelatih` varchar(255) NOT NULL,
  `kota_pelatih` varchar(255) NOT NULL,
  `alamat_pelatih` varchar(255) NOT NULL,
  `link_maps_pelatih` text NOT NULL,
  `website_pelatih` varchar(255) NOT NULL,
  `email_pelatih` varchar(255) NOT NULL,
  `ig_pelatih` varchar(255) NOT NULL,
  `fb_pelatih` varchar(255) NOT NULL,
  `youtube_pelatih` varchar(255) NOT NULL,
  `telp_pelatih` varchar(255) NOT NULL,
  `foto_pelatih` varchar(255) NOT NULL,
  `id_badan_olahraga_pelatih` varchar(255) NOT NULL,
  `id_komunitas` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `pelatihs`
--

INSERT INTO `pelatihs` (`id_pelatih`, `id_cabang_olahraga_pelatih`, `nama_pelatih`, `deskripsi_pelatih`, `provinsi_pelatih`, `kota_pelatih`, `alamat_pelatih`, `link_maps_pelatih`, `website_pelatih`, `email_pelatih`, `ig_pelatih`, `fb_pelatih`, `youtube_pelatih`, `telp_pelatih`, `foto_pelatih`, `id_badan_olahraga_pelatih`, `id_komunitas`, `created_at`, `updated_at`) VALUES
(1, 6, 'robert patikawa oke bos', 'lorem', 'Maluku', 'Ambon', 'skip kota ambon', 'https://goo.gl/maps/mhks2vfuaLQXJ8Vd7', 'tidak ada', 'robert@gmail.com', '@robert', 'robert', 'tidak ada', '085255447898', 'foto_pelatih1806604287.png', '11', 2, NULL, NULL),
(2, 8, 'abdi bahta', 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Obcaecati, soluta. Repellendus veritatis assumenda unde vero minus odit suscipit iure quis cumque nisi, dicta corrupti totam, cum excepturi tenetur doloribus dolores!', 'Maluku', 'Ambon', 'tulehu dusun umekau nomor 76', 'https://goo.gl/maps/uDGhRjXTh6eMCvZn8', 'tidak ada', 'mrabdibahta@gmail.com', 'abdi_bahta', 'abdi bahta', 'tidak ada', '085244088248', 'foto_pelatih271502923.pdf', '11', 2, NULL, NULL);

-- --------------------------------------------------------

--
-- Struktur dari tabel `pemilik_tempats`
--

CREATE TABLE `pemilik_tempats` (
  `id_pemilik_tempat` int(10) UNSIGNED NOT NULL,
  `nama_pemilik_tempat` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `pemilik_tempats`
--

INSERT INTO `pemilik_tempats` (`id_pemilik_tempat`, `nama_pemilik_tempat`, `created_at`, `updated_at`) VALUES
(1, 'Pemerintah', '2023-06-23 10:33:38', '2023-06-23 10:33:38'),
(2, 'Perusahaan', '2023-06-23 10:33:38', '2023-06-23 10:33:38'),
(3, 'Perorangan', '2023-06-23 10:35:55', '2023-06-23 10:35:55');

-- --------------------------------------------------------

--
-- Struktur dari tabel `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `token` varchar(64) NOT NULL,
  `abilities` text DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `pesertas`
--

CREATE TABLE `pesertas` (
  `id_peserta_ukulele` int(11) NOT NULL,
  `id_pic_kelompok` int(11) NOT NULL,
  `nama_peserta` varchar(255) NOT NULL,
  `tlp_peserta` varchar(255) NOT NULL,
  `alamat_peserta` varchar(255) NOT NULL,
  `id_kecamatan_peserta` int(11) NOT NULL,
  `id_kabupaten_peserta` int(11) NOT NULL,
  `provinsi_peserta` varchar(255) NOT NULL,
  `tempat_lahir_peserta` varchar(255) NOT NULL,
  `tanggal_lahir_peserta` varchar(255) NOT NULL,
  `jenis_kelamin_peserta` varchar(255) NOT NULL,
  `nama_kelompok_ukulele_peserta` varchar(255) NOT NULL,
  `foto_peserta` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `pesertas`
--

INSERT INTO `pesertas` (`id_peserta_ukulele`, `id_pic_kelompok`, `nama_peserta`, `tlp_peserta`, `alamat_peserta`, `id_kecamatan_peserta`, `id_kabupaten_peserta`, `provinsi_peserta`, `tempat_lahir_peserta`, `tanggal_lahir_peserta`, `jenis_kelamin_peserta`, `nama_kelompok_ukulele_peserta`, `foto_peserta`, `created_at`, `updated_at`) VALUES
(1, 1, 'wawa rahardian', '085455667788', 'kebun cengkeh lorong buaya', 3, 1, 'Maluku', 'ambon', '1999-12-29', 'Perempuan', 'ina latu', 'foto1775971185.png', NULL, NULL),
(2, 2, 'test', '085344556677', 'test', 109, 10, 'Maluku', 'ambon', '2010-02-28', 'Perempuan', 'ina latu', 'foto1900258523.png', NULL, NULL);

-- --------------------------------------------------------

--
-- Struktur dari tabel `pic_kelompok_ukuleles`
--

CREATE TABLE `pic_kelompok_ukuleles` (
  `id_pic_kelompok` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `tlp` varchar(255) NOT NULL,
  `alamat` varchar(255) NOT NULL,
  `kecamatan` varchar(255) NOT NULL,
  `kabupaten` varchar(255) NOT NULL,
  `provinsi` varchar(255) NOT NULL,
  `tempat_lahir` varchar(255) NOT NULL,
  `tanggal_lahir` varchar(255) NOT NULL,
  `jenis_kelamin` varchar(255) NOT NULL,
  `nama_kelompok_ukulele` varchar(255) NOT NULL,
  `foto` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `pic_kelompok_ukuleles`
--

INSERT INTO `pic_kelompok_ukuleles` (`id_pic_kelompok`, `name`, `email`, `tlp`, `alamat`, `kecamatan`, `kabupaten`, `provinsi`, `tempat_lahir`, `tanggal_lahir`, `jenis_kelamin`, `nama_kelompok_ukulele`, `foto`, `created_at`, `updated_at`) VALUES
(1, 'admin', 'admin@gmail.com', '085244334455', 'tulehu', '64', '6', 'Maluku', 'tulehu', '1995-12-29', 'Laki - laki', 'ina kaka', 'foto76052453.png', NULL, NULL),
(2, 'Abang Robert pattikawa', 'garangsexy@gmail.com', '0821556667788', 'skip', '109', '10', 'Maluku', 'Calivornia', '1999-12-29', 'Laki - laki', 'ina latu', 'foto1197333680.jpg', NULL, NULL),
(3, 'arik tete', 'ariktete@gmail.com', '085455667788', 'kebun cengkeh lorong buaya', '108', '10', 'Maluku', 'yerusalem', '1999-12-29', 'Laki - laki', 'ina latu', 'foto1273054289.png', NULL, NULL);

-- --------------------------------------------------------

--
-- Struktur dari tabel `pic_komunitas`
--

CREATE TABLE `pic_komunitas` (
  `id` int(11) NOT NULL,
  `alamat_pic_komunitas` text NOT NULL,
  `tlp_pic_komunitas` varchar(25) NOT NULL,
  `tempat_lahir_pic_komunitas` varchar(125) NOT NULL,
  `tanggal_lahir_pic_komunitas` date NOT NULL,
  `jenis_kelamin_pic_komunitas` varchar(25) NOT NULL,
  `foto_pic_komunitas` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `pic_komunitas`
--

INSERT INTO `pic_komunitas` (`id`, `alamat_pic_komunitas`, `tlp_pic_komunitas`, `tempat_lahir_pic_komunitas`, `tanggal_lahir_pic_komunitas`, `jenis_kelamin_pic_komunitas`, `foto_pic_komunitas`, `created_at`, `updated_at`) VALUES
(1, 'tulehu dusun umekau nomor 76', '085244088248', 'tulehu', '1995-12-29', 'Perempuan', 'pic_komunitas782726466.png', '2023-06-26 02:26:26', '2023-06-26 02:26:26'),
(5, 'tulehu dusun umekau nomor 76', '085244088248', 'tulehu', '1995-12-29', 'Laki - laki', 'pic_komunitas78638574.png', '2023-06-26 06:43:15', '2023-06-26 06:43:15');

-- --------------------------------------------------------

--
-- Struktur dari tabel `pic_tempats`
--

CREATE TABLE `pic_tempats` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `alamat` varchar(255) NOT NULL,
  `tlp` varchar(255) NOT NULL,
  `tempat_lahir` varchar(255) NOT NULL,
  `tanggal_lahir` varchar(255) NOT NULL,
  `jenis_kelamin` varchar(255) NOT NULL,
  `foto` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `pic_tempats`
--

INSERT INTO `pic_tempats` (`id`, `alamat`, `tlp`, `tempat_lahir`, `tanggal_lahir`, `jenis_kelamin`, `foto`, `created_at`, `updated_at`) VALUES
(1, 'Skip RT 01', '085211223344', 'Calivornia', '1999-12-29', 'Laki - laki', 'pic_tempat489043456.jpg', NULL, '2023-07-25 01:11:27'),
(2, 'Ambon, Maluku', '082124944770', 'tes123', '2023-06-26', 'Laki - laki', 'pic_tempat1186644615.jpg', NULL, NULL);

-- --------------------------------------------------------

--
-- Struktur dari tabel `presensis`
--

CREATE TABLE `presensis` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `id_pic` varchar(255) NOT NULL,
  `status_kehadiran` varchar(255) NOT NULL,
  `waktu_presensi` varchar(50) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `presensis`
--

INSERT INTO `presensis` (`id`, `id_pic`, `status_kehadiran`, `waktu_presensi`, `created_at`, `updated_at`) VALUES
(20, 'P06-00001', 'Hadir', 'Kamis, 10 Agustus 2023 11:17', NULL, NULL),
(21, 'P10-00002', 'Hadir', 'Kamis, 10 Agustus 2023 11:30', NULL, NULL);

-- --------------------------------------------------------

--
-- Struktur dari tabel `presensi_pesertas`
--

CREATE TABLE `presensi_pesertas` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `id_peserta` varchar(255) NOT NULL,
  `status_kehadiran` varchar(255) NOT NULL,
  `waktu_presensi` varchar(50) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `presensi_pesertas`
--

INSERT INTO `presensi_pesertas` (`id`, `id_peserta`, `status_kehadiran`, `waktu_presensi`, `created_at`, `updated_at`) VALUES
(3, 'P06-00001', 'Hadir', 'Jumat, 11 Agustus 2023 12:13', NULL, NULL);

-- --------------------------------------------------------

--
-- Struktur dari tabel `presensi_ukuleles`
--

CREATE TABLE `presensi_ukuleles` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `id_ukulele` varchar(255) NOT NULL,
  `status_kehadiran` varchar(255) NOT NULL,
  `waktu_presensi` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `presensi_ukuleles`
--

INSERT INTO `presensi_ukuleles` (`id`, `id_ukulele`, `status_kehadiran`, `waktu_presensi`, `created_at`, `updated_at`) VALUES
(1, 'P06-00001', 'Hadir', 'Jumat, 11 Agustus 2023 12:16', NULL, NULL);

-- --------------------------------------------------------

--
-- Struktur dari tabel `prestasis`
--

CREATE TABLE `prestasis` (
  `id_prestasi` bigint(20) UNSIGNED NOT NULL,
  `id` int(11) NOT NULL,
  `nama_kejuaraan` varchar(255) NOT NULL,
  `tingkat_kejuaraan` varchar(255) NOT NULL,
  `peringkat_kejuaraan` varchar(255) NOT NULL,
  `foto_sertifikat` varchar(255) NOT NULL,
  `tahun_kejuaraan` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `prestasis`
--

INSERT INTO `prestasis` (`id_prestasi`, `id`, `nama_kejuaraan`, `tingkat_kejuaraan`, `peringkat_kejuaraan`, `foto_sertifikat`, `tahun_kejuaraan`, `created_at`, `updated_at`) VALUES
(3, 1, 'Piala Gubernur Maluku kelas 60 KG', 'Provinsi', '1', 'sertifikat_pelatih678310391.pdf', '2010-12-29', NULL, NULL),
(4, 1, 'Piala Gubernur Maluku Kelas 56 KG', 'test tingkat kejuaraan', 'test peringkat kejuaraan', 'sertifikat_wasit1959223275.pdf', '2010-02-20', NULL, NULL),
(7, 1, 'test nama kejuaraan', 'test tingkat kejuaraan', 'test peringkat kejuaraan', 'sertifikat_pelatih1606463168.pdf', '2010-12-29', NULL, NULL),
(8, 1, 'Uji COba', 'test tingkat kejuaraan', 'test peringkat kejuaraan', 'sertifikat_pelatih1416467827.pdf', '2010-12-29', NULL, NULL);

-- --------------------------------------------------------

--
-- Struktur dari tabel `prestasi_atlits`
--

CREATE TABLE `prestasi_atlits` (
  `id_prestasi_atlit` bigint(20) UNSIGNED NOT NULL,
  `id` int(11) NOT NULL,
  `nama_kejuaraan` varchar(255) NOT NULL,
  `tingkat_kejuaraan` varchar(255) NOT NULL,
  `peringkat_kejuaraan` varchar(255) NOT NULL,
  `sertifikat` varchar(255) NOT NULL,
  `tahun_kejuaraan` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `prestasi_atlits`
--

INSERT INTO `prestasi_atlits` (`id_prestasi_atlit`, `id`, `nama_kejuaraan`, `tingkat_kejuaraan`, `peringkat_kejuaraan`, `sertifikat`, `tahun_kejuaraan`, `created_at`, `updated_at`) VALUES
(1, 1, 'Piala Gubernur Maluku Kelas 50 KG', 'test tingkat kejuaraan', 'test peringkat kejuaraan', 'sertifikat_wasit1120862762.pdf', '2021-02-20', NULL, NULL);

-- --------------------------------------------------------

--
-- Struktur dari tabel `prestasi_wasits`
--

CREATE TABLE `prestasi_wasits` (
  `id_prestasi_wasit` bigint(20) UNSIGNED NOT NULL,
  `id` int(11) NOT NULL,
  `nama_kejuaraan` varchar(255) NOT NULL,
  `tingkat_kejuaraan` varchar(255) NOT NULL,
  `peringkat_kejuaraan` varchar(255) NOT NULL,
  `sertifikat` varchar(255) NOT NULL,
  `tahun_kejuaraan` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `prestasi_wasits`
--

INSERT INTO `prestasi_wasits` (`id_prestasi_wasit`, `id`, `nama_kejuaraan`, `tingkat_kejuaraan`, `peringkat_kejuaraan`, `sertifikat`, `tahun_kejuaraan`, `created_at`, `updated_at`) VALUES
(4, 1, 'Piala Gubernur Maluku Kelas 56 KG', 'test tingkat kejuaraan', 'test peringkat kejuaraan', 'sertifikat_wasit1120862762.pdf', '2021-02-20', NULL, NULL);

-- --------------------------------------------------------

--
-- Struktur dari tabel `provinsi`
--

CREATE TABLE `provinsi` (
  `id_provinsi` int(10) UNSIGNED NOT NULL,
  `nama_provinsi` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `provinsi`
--

INSERT INTO `provinsi` (`id_provinsi`, `nama_provinsi`, `created_at`, `updated_at`) VALUES
(12, 'Maluku', '2023-06-25 04:07:24', '2023-06-25 04:07:24');

-- --------------------------------------------------------

--
-- Struktur dari tabel `sessions`
--

CREATE TABLE `sessions` (
  `id` varchar(255) NOT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `ip_address` varchar(45) DEFAULT NULL,
  `user_agent` text DEFAULT NULL,
  `payload` longtext NOT NULL,
  `last_activity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `sessions`
--

INSERT INTO `sessions` (`id`, `user_id`, `ip_address`, `user_agent`, `payload`, `last_activity`) VALUES
('vpz89YmsU2CO2f4lXhvxwxHM7vwuyqZ0qjPO61u1', NULL, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/115.0.0.0 Safari/537.36', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiZ0kwVjRsTHN5RmJmSDhtOWdUdHVrVVRkVDVXSklMUEVzN1dueHpZMCI7czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MjE6Imh0dHA6Ly9sb2NhbGhvc3Q6ODAwMCI7fX0=', 1692063741);

-- --------------------------------------------------------

--
-- Struktur dari tabel `setting`
--

CREATE TABLE `setting` (
  `id_setting` int(10) UNSIGNED NOT NULL,
  `pimpinan_setting` varchar(255) NOT NULL,
  `logo_setting` varchar(255) NOT NULL,
  `keyword_setting` varchar(255) NOT NULL,
  `deskripsi_setting` varchar(255) NOT NULL,
  `perusahaan_setting` varchar(255) NOT NULL,
  `tentang_setting` text NOT NULL,
  `alamat_setting` varchar(255) NOT NULL,
  `no_hp_setting` varchar(20) NOT NULL,
  `email_setting` varchar(255) NOT NULL,
  `maps_setting` text NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `setting`
--

INSERT INTO `setting` (`id_setting`, `pimpinan_setting`, `logo_setting`, `keyword_setting`, `deskripsi_setting`, `perusahaan_setting`, `tentang_setting`, `alamat_setting`, `no_hp_setting`, `email_setting`, `maps_setting`, `created_at`, `updated_at`) VALUES
(1, 'Admin', 'logo.png', '10K Ukulele', '10K Ukulele', '10K Ukulele', '<p>Telkom Group Motorcycle Community adalah komunitas motor yang berada dibawah naungan telkom group indonesia. Anggota TMCC Indonesia biasanya beranggotakan karyawan telkom seluruh nusantara.</p>\r\n\r\n<p>TMCC Indonesia selalu membuat jambore setiap tahunnya, anggota tidak diwajibkan untuk memiliki motor jenis tertentu, para anggota yang ada di TMCC Indonesia bebas menggunakan motor jenis apapun.&nbsp;</p>', 'Jl. Dr. Sitanala No. 9', '08111111', 'admin@tmcc.org', 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3981.4890930368633!2d128.1712088740831!3d-3.7028746430409685!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2d6ce98997dfca81%3A0x5442714fbb0cb5c3!2sTelkom%20Amboina%20Hall!5e0!3m2!1sid!2sid!4v1684459190521!5m2!1sid!2sid', NULL, '2023-05-17 06:35:44');

-- --------------------------------------------------------

--
-- Struktur dari tabel `sponsor_ships`
--

CREATE TABLE `sponsor_ships` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama_instansi` varchar(255) NOT NULL,
  `situs` varchar(255) NOT NULL,
  `logo` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `sponsor_ships`
--

INSERT INTO `sponsor_ships` (`id`, `nama_instansi`, `situs`, `logo`, `created_at`, `updated_at`) VALUES
(3, 'Instansi satu', 'https://instansisatu.com', 'foto74267404.webp', NULL, NULL),
(4, 'Instansi dua', 'https://instansidua.com', 'foto1220536906.jpeg', NULL, NULL),
(5, 'Instansi tiga', 'https://instansitiga.com', 'foto37944598.png', NULL, NULL);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tempat`
--

CREATE TABLE `tempat` (
  `id_tempat` int(10) UNSIGNED NOT NULL,
  `nama_tempat` varchar(255) NOT NULL,
  `deskripsi_tempat` text NOT NULL,
  `id_jenis_tempat` int(11) NOT NULL,
  `id_pemilik_tempat` int(11) NOT NULL,
  `id` int(11) NOT NULL,
  `alamat_tempat` varchar(255) NOT NULL,
  `long_tempat` double DEFAULT NULL,
  `lat_tempat` double DEFAULT NULL,
  `website_tempat` varchar(255) DEFAULT NULL,
  `email_tempat` varchar(255) DEFAULT NULL,
  `ig_tempat` varchar(255) DEFAULT NULL,
  `fb_tempat` varchar(255) DEFAULT NULL,
  `telpon_tempat` varchar(20) NOT NULL,
  `logo_tempat` text NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `foto_tempat_depan` text NOT NULL,
  `foto_tempat_belakang` text NOT NULL,
  `foto_tempat_dalam` text NOT NULL,
  `foto_tempat_samping` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `tempat`
--

INSERT INTO `tempat` (`id_tempat`, `nama_tempat`, `deskripsi_tempat`, `id_jenis_tempat`, `id_pemilik_tempat`, `id`, `alamat_tempat`, `long_tempat`, `lat_tempat`, `website_tempat`, `email_tempat`, `ig_tempat`, `fb_tempat`, `telpon_tempat`, `logo_tempat`, `created_at`, `updated_at`, `foto_tempat_depan`, `foto_tempat_belakang`, `foto_tempat_dalam`, `foto_tempat_samping`) VALUES
(12, 'Lapangan Futsal', '<p>Biaya Penyewaan Lapangan Futsal Sebesar Rp, 50,000,-/ Jam</p>', 5, 2, 1, 'Telkom', 128.19735306007237, -3.667871060262814, NULL, 'admin@mail.com', NULL, NULL, '0821666666', 'Logo Tempat20230627104541.png', '2023-06-27 13:45:41', '2023-07-06 03:49:26', 'Foto Depan20230627104541.jpg', 'Foto belakang20230627104541.png', 'Foto dalam20230627104541.jpg', 'Foto samping20230627104541.jpg'),
(13, 'Futsal MArdika', '<p>Sewa 50k per jam</p>', 5, 3, 2, 'Mardika, Ambon', 128.18463776075242, -3.690365554107769, NULL, NULL, NULL, NULL, '0812345678', 'Logo Tempat20230711111634.PNG', '2023-07-11 02:16:34', '2023-07-11 02:16:34', 'Foto Depan20230711111634.png', 'Foto belakang20230711111634.png', 'Foto dalam20230711111634.png', 'Foto samping20230711111634.jpg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `ukuleles`
--

CREATE TABLE `ukuleles` (
  `id_peserta_ukulele` bigint(20) NOT NULL,
  `nama_peserta_ukulele` varchar(255) NOT NULL,
  `id_kabupaten_ukulele` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `ukuleles`
--

INSERT INTO `ukuleles` (`id_peserta_ukulele`, `nama_peserta_ukulele`, `id_kabupaten_ukulele`, `created_at`, `updated_at`) VALUES
(1, 'wawa rahardian', 1, NULL, NULL),
(2, 'test', 10, NULL, NULL);

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `created_at`, `updated_at`) VALUES
(1, 'admin', 'admin@gmail.com', '$2y$10$Y/icn6h71VaFiw5DqniSEurfyFikcWN6uVzM3NH.6/l1.oNhW1Q7C', NULL, '2023-08-10 05:27:40'),
(2, 'Abang Robert pattikawa', 'garangsexy@gmail.com', '$2y$10$cv4A.T6b37fSDJIcTJt4deBx.2GnWxiZj2o/z5PuYr71SB6lJgccG', NULL, NULL),
(3, 'arik tete', 'ariktete@gmail.com', '$2y$10$3gZvwTUoKU0vjmhm31ytX.A/mxFqcaXJEBOKRofT2gsSbX0z72/4O', NULL, NULL);

-- --------------------------------------------------------

--
-- Struktur dari tabel `wasits`
--

CREATE TABLE `wasits` (
  `id_wasit` bigint(20) UNSIGNED NOT NULL,
  `id_cabang_olahraga_wasit` int(11) NOT NULL,
  `nama_wasit` varchar(255) NOT NULL,
  `deskripsi_wasit` varchar(255) NOT NULL,
  `provinsi_wasit` varchar(255) NOT NULL,
  `kota_wasit` varchar(255) NOT NULL,
  `alamat_wasit` varchar(255) NOT NULL,
  `link_maps_wasit` varchar(255) NOT NULL,
  `website_wasit` varchar(255) NOT NULL,
  `email_wasit` varchar(255) NOT NULL,
  `ig_wasit` varchar(255) NOT NULL,
  `fb_wasit` varchar(255) NOT NULL,
  `youtube_wasit` varchar(255) NOT NULL,
  `telp_wasit` varchar(255) NOT NULL,
  `foto_wasit` varchar(255) NOT NULL,
  `id_badan_olahraga_wasit` varchar(255) NOT NULL,
  `id_komunitas` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `wasits`
--

INSERT INTO `wasits` (`id_wasit`, `id_cabang_olahraga_wasit`, `nama_wasit`, `deskripsi_wasit`, `provinsi_wasit`, `kota_wasit`, `alamat_wasit`, `link_maps_wasit`, `website_wasit`, `email_wasit`, `ig_wasit`, `fb_wasit`, `youtube_wasit`, `telp_wasit`, `foto_wasit`, `id_badan_olahraga_wasit`, `id_komunitas`, `created_at`, `updated_at`) VALUES
(1, 8, 'robert pattikawa', 'lorem', 'Maluku', 'Ambon', 'skip', 'https://goo.gl/maps/h4DVW98YAG62e5a78', 'tidak ada', 'robertpattikawa@spunix.com', '@robert kaffe kpkk', 'robert kaffe kpkk', 'robert pattikawa', '085244088248', '1767142376.jpg', '11', '2', NULL, NULL);

-- --------------------------------------------------------

--
-- Struktur dari tabel `wilayah_participants`
--

CREATE TABLE `wilayah_participants` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `id_wilayah` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `wilayah_participants`
--

INSERT INTO `wilayah_participants` (`id`, `id_wilayah`, `created_at`, `updated_at`) VALUES
(1, 10, NULL, NULL),
(2, 1, NULL, NULL),
(4, 2, NULL, NULL),
(5, 11, NULL, NULL),
(6, 4, NULL, NULL),
(7, 6, NULL, NULL);

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `abouts`
--
ALTER TABLE `abouts`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `about_us`
--
ALTER TABLE `about_us`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `artis`
--
ALTER TABLE `artis`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `atlits`
--
ALTER TABLE `atlits`
  ADD PRIMARY KEY (`id_atlit`);

--
-- Indeks untuk tabel `badan_olahraga`
--
ALTER TABLE `badan_olahraga`
  ADD PRIMARY KEY (`id_badan_olahraga`);

--
-- Indeks untuk tabel `berita`
--
ALTER TABLE `berita`
  ADD PRIMARY KEY (`id_berita`);

--
-- Indeks untuk tabel `berita_selengkapnyas`
--
ALTER TABLE `berita_selengkapnyas`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `cabang_olahraga`
--
ALTER TABLE `cabang_olahraga`
  ADD PRIMARY KEY (`id_cabang_olahraga`);

--
-- Indeks untuk tabel `contact_us`
--
ALTER TABLE `contact_us`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `desa`
--
ALTER TABLE `desa`
  ADD PRIMARY KEY (`id_desa`);

--
-- Indeks untuk tabel `events`
--
ALTER TABLE `events`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indeks untuk tabel `inbox`
--
ALTER TABLE `inbox`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `jenis_kelamin`
--
ALTER TABLE `jenis_kelamin`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `jenis_komunitas`
--
ALTER TABLE `jenis_komunitas`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `jenis_tempat`
--
ALTER TABLE `jenis_tempat`
  ADD PRIMARY KEY (`id_jenis_tempat`);

--
-- Indeks untuk tabel `kabupaten`
--
ALTER TABLE `kabupaten`
  ADD PRIMARY KEY (`id_kabupaten`);

--
-- Indeks untuk tabel `kategori_abouts`
--
ALTER TABLE `kategori_abouts`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `kategori_badan_olahragas`
--
ALTER TABLE `kategori_badan_olahragas`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `kategori_kelompok_ukuleles`
--
ALTER TABLE `kategori_kelompok_ukuleles`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `kategori_komunitas`
--
ALTER TABLE `kategori_komunitas`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `kecamatan`
--
ALTER TABLE `kecamatan`
  ADD PRIMARY KEY (`id_kecamatan`);

--
-- Indeks untuk tabel `kegiatan`
--
ALTER TABLE `kegiatan`
  ADD PRIMARY KEY (`id_kegiatan`);

--
-- Indeks untuk tabel `komunitas`
--
ALTER TABLE `komunitas`
  ADD PRIMARY KEY (`id_komunitas`);

--
-- Indeks untuk tabel `kontak`
--
ALTER TABLE `kontak`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `kota`
--
ALTER TABLE `kota`
  ADD PRIMARY KEY (`id_kota`);

--
-- Indeks untuk tabel `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `password_reset_tokens`
--
ALTER TABLE `password_reset_tokens`
  ADD PRIMARY KEY (`email`);

--
-- Indeks untuk tabel `pelatihs`
--
ALTER TABLE `pelatihs`
  ADD PRIMARY KEY (`id_pelatih`);

--
-- Indeks untuk tabel `pemilik_tempats`
--
ALTER TABLE `pemilik_tempats`
  ADD PRIMARY KEY (`id_pemilik_tempat`);

--
-- Indeks untuk tabel `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indeks untuk tabel `pesertas`
--
ALTER TABLE `pesertas`
  ADD PRIMARY KEY (`id_peserta_ukulele`);

--
-- Indeks untuk tabel `pic_kelompok_ukuleles`
--
ALTER TABLE `pic_kelompok_ukuleles`
  ADD PRIMARY KEY (`id_pic_kelompok`);

--
-- Indeks untuk tabel `pic_komunitas`
--
ALTER TABLE `pic_komunitas`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `pic_tempats`
--
ALTER TABLE `pic_tempats`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `presensis`
--
ALTER TABLE `presensis`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `presensi_pesertas`
--
ALTER TABLE `presensi_pesertas`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `presensi_ukuleles`
--
ALTER TABLE `presensi_ukuleles`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `prestasis`
--
ALTER TABLE `prestasis`
  ADD PRIMARY KEY (`id_prestasi`);

--
-- Indeks untuk tabel `prestasi_atlits`
--
ALTER TABLE `prestasi_atlits`
  ADD PRIMARY KEY (`id_prestasi_atlit`);

--
-- Indeks untuk tabel `prestasi_wasits`
--
ALTER TABLE `prestasi_wasits`
  ADD PRIMARY KEY (`id_prestasi_wasit`);

--
-- Indeks untuk tabel `provinsi`
--
ALTER TABLE `provinsi`
  ADD PRIMARY KEY (`id_provinsi`);

--
-- Indeks untuk tabel `sessions`
--
ALTER TABLE `sessions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `sessions_user_id_index` (`user_id`),
  ADD KEY `sessions_last_activity_index` (`last_activity`);

--
-- Indeks untuk tabel `setting`
--
ALTER TABLE `setting`
  ADD PRIMARY KEY (`id_setting`);

--
-- Indeks untuk tabel `sponsor_ships`
--
ALTER TABLE `sponsor_ships`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tempat`
--
ALTER TABLE `tempat`
  ADD PRIMARY KEY (`id_tempat`);

--
-- Indeks untuk tabel `ukuleles`
--
ALTER TABLE `ukuleles`
  ADD PRIMARY KEY (`id_peserta_ukulele`);

--
-- Indeks untuk tabel `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Indeks untuk tabel `wasits`
--
ALTER TABLE `wasits`
  ADD PRIMARY KEY (`id_wasit`);

--
-- Indeks untuk tabel `wilayah_participants`
--
ALTER TABLE `wilayah_participants`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `abouts`
--
ALTER TABLE `abouts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `about_us`
--
ALTER TABLE `about_us`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `artis`
--
ALTER TABLE `artis`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `atlits`
--
ALTER TABLE `atlits`
  MODIFY `id_atlit` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `badan_olahraga`
--
ALTER TABLE `badan_olahraga`
  MODIFY `id_badan_olahraga` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT untuk tabel `berita`
--
ALTER TABLE `berita`
  MODIFY `id_berita` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT untuk tabel `berita_selengkapnyas`
--
ALTER TABLE `berita_selengkapnyas`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `cabang_olahraga`
--
ALTER TABLE `cabang_olahraga`
  MODIFY `id_cabang_olahraga` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT untuk tabel `contact_us`
--
ALTER TABLE `contact_us`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `desa`
--
ALTER TABLE `desa`
  MODIFY `id_desa` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT untuk tabel `events`
--
ALTER TABLE `events`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `inbox`
--
ALTER TABLE `inbox`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `jenis_kelamin`
--
ALTER TABLE `jenis_kelamin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `jenis_komunitas`
--
ALTER TABLE `jenis_komunitas`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT untuk tabel `jenis_tempat`
--
ALTER TABLE `jenis_tempat`
  MODIFY `id_jenis_tempat` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT untuk tabel `kabupaten`
--
ALTER TABLE `kabupaten`
  MODIFY `id_kabupaten` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT untuk tabel `kategori_abouts`
--
ALTER TABLE `kategori_abouts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT untuk tabel `kategori_badan_olahragas`
--
ALTER TABLE `kategori_badan_olahragas`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `kategori_kelompok_ukuleles`
--
ALTER TABLE `kategori_kelompok_ukuleles`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT untuk tabel `kategori_komunitas`
--
ALTER TABLE `kategori_komunitas`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `kecamatan`
--
ALTER TABLE `kecamatan`
  MODIFY `id_kecamatan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=118;

--
-- AUTO_INCREMENT untuk tabel `kegiatan`
--
ALTER TABLE `kegiatan`
  MODIFY `id_kegiatan` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT untuk tabel `komunitas`
--
ALTER TABLE `komunitas`
  MODIFY `id_komunitas` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `kontak`
--
ALTER TABLE `kontak`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT untuk tabel `kota`
--
ALTER TABLE `kota`
  MODIFY `id_kota` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT untuk tabel `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=63;

--
-- AUTO_INCREMENT untuk tabel `pelatihs`
--
ALTER TABLE `pelatihs`
  MODIFY `id_pelatih` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `pemilik_tempats`
--
ALTER TABLE `pemilik_tempats`
  MODIFY `id_pemilik_tempat` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `pesertas`
--
ALTER TABLE `pesertas`
  MODIFY `id_peserta_ukulele` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `pic_kelompok_ukuleles`
--
ALTER TABLE `pic_kelompok_ukuleles`
  MODIFY `id_pic_kelompok` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `pic_komunitas`
--
ALTER TABLE `pic_komunitas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT untuk tabel `pic_tempats`
--
ALTER TABLE `pic_tempats`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `presensis`
--
ALTER TABLE `presensis`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT untuk tabel `presensi_pesertas`
--
ALTER TABLE `presensi_pesertas`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `presensi_ukuleles`
--
ALTER TABLE `presensi_ukuleles`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `prestasis`
--
ALTER TABLE `prestasis`
  MODIFY `id_prestasi` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT untuk tabel `prestasi_atlits`
--
ALTER TABLE `prestasi_atlits`
  MODIFY `id_prestasi_atlit` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT untuk tabel `prestasi_wasits`
--
ALTER TABLE `prestasi_wasits`
  MODIFY `id_prestasi_wasit` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `provinsi`
--
ALTER TABLE `provinsi`
  MODIFY `id_provinsi` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT untuk tabel `setting`
--
ALTER TABLE `setting`
  MODIFY `id_setting` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `sponsor_ships`
--
ALTER TABLE `sponsor_ships`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT untuk tabel `tempat`
--
ALTER TABLE `tempat`
  MODIFY `id_tempat` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT untuk tabel `ukuleles`
--
ALTER TABLE `ukuleles`
  MODIFY `id_peserta_ukulele` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `wasits`
--
ALTER TABLE `wasits`
  MODIFY `id_wasit` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `wilayah_participants`
--
ALTER TABLE `wilayah_participants`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

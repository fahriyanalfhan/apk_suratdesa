-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 24 Agu 2024 pada 14.56
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
-- Database: `apk_suratdesa`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `administrator`
--

CREATE TABLE `administrator` (
  `id` int(11) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `jekel` enum('Laki-laki','Perempuan') NOT NULL,
  `role_id` int(2) NOT NULL,
  `password` varchar(225) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `administrator`
--

INSERT INTO `administrator` (`id`, `nama`, `email`, `jekel`, `role_id`, `password`, `created_at`, `updated_at`) VALUES
(1, 'Administrator', 'admin@gmail.com', 'Laki-laki', 1, '$2y$10$VsBeiMGl4uNk8kV.RdaqyuDSivDfj0nkQCNY6FRmuC4mMLHQBUWem', '2022-03-17 13:47:13', '0000-00-00 00:00:00'),
(2, 'Kepala Desa', 'kades@gmail.com', 'Laki-laki', 2, '$2y$10$VsBeiMGl4uNk8kV.RdaqyuDSivDfj0nkQCNY6FRmuC4mMLHQBUWem', '2022-03-17 13:47:51', '2022-03-31 17:56:46');

-- --------------------------------------------------------

--
-- Struktur dari tabel `surat_domisili`
--

CREATE TABLE `surat_domisili` (
  `id` int(11) NOT NULL,
  `id_warga` int(11) NOT NULL,
  `jenis_surat` varchar(50) NOT NULL,
  `nomor_surat` varchar(20) NOT NULL,
  `tanggal_surat` varchar(25) NOT NULL,
  `tanggal_kadaluarsa` varchar(25) NOT NULL,
  `keperluan` text NOT NULL,
  `file_kk` varchar(225) NOT NULL,
  `file_ktp` varchar(225) NOT NULL,
  `status` varchar(20) NOT NULL,
  `komentar` text NOT NULL,
  `notifikasi` int(11) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `surat_kelahiran`
--

CREATE TABLE `surat_kelahiran` (
  `id` int(11) NOT NULL,
  `id_warga` int(11) NOT NULL,
  `jenis_surat` varchar(40) NOT NULL,
  `nomor_surat` varchar(20) NOT NULL,
  `tanggal_surat` varchar(20) NOT NULL,
  `tanggal_kadaluarsa` varchar(20) NOT NULL,
  `ayah` varchar(30) NOT NULL,
  `nik_ayah` varchar(20) NOT NULL,
  `te_lahir_ayah` varchar(20) NOT NULL,
  `ta_lahir_ayah` date DEFAULT NULL,
  `ibu` varchar(30) NOT NULL,
  `nik_ibu` varchar(20) NOT NULL,
  `te_lahir_ibu` varchar(20) NOT NULL,
  `ta_lahir_ibu` date DEFAULT NULL,
  `no_kk` varchar(20) NOT NULL,
  `nama_bayi` varchar(30) NOT NULL,
  `jekel_b` varchar(15) NOT NULL,
  `tempat_lahir_b` varchar(20) NOT NULL,
  `tanggal_lahir_b` date NOT NULL,
  `anak_ke` int(2) NOT NULL,
  `agama_b` varchar(10) NOT NULL,
  `kewarganegaraan_b` varchar(10) NOT NULL,
  `alamat_b` text NOT NULL,
  `nama_s1` varchar(40) NOT NULL,
  `nik_s1` varchar(16) NOT NULL,
  `alamat_s1` text NOT NULL,
  `nama_s2` varchar(40) NOT NULL,
  `nik_s2` varchar(16) NOT NULL,
  `alamat_s2` text NOT NULL,
  `keperluan` text NOT NULL,
  `file_kk` varchar(225) NOT NULL,
  `file_ktp` varchar(225) NOT NULL,
  `file_kel` varchar(225) NOT NULL,
  `file_ktp1` varchar(225) NOT NULL,
  `file_ktp2` varchar(225) NOT NULL,
  `status` varchar(20) NOT NULL,
  `komentar` text DEFAULT NULL,
  `notifikasi` int(2) DEFAULT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `surat_kelahiran`
--

INSERT INTO `surat_kelahiran` (`id`, `id_warga`, `jenis_surat`, `nomor_surat`, `tanggal_surat`, `tanggal_kadaluarsa`, `ayah`, `nik_ayah`, `te_lahir_ayah`, `ta_lahir_ayah`, `ibu`, `nik_ibu`, `te_lahir_ibu`, `ta_lahir_ibu`, `no_kk`, `nama_bayi`, `jekel_b`, `tempat_lahir_b`, `tanggal_lahir_b`, `anak_ke`, `agama_b`, `kewarganegaraan_b`, `alamat_b`, `nama_s1`, `nik_s1`, `alamat_s1`, `nama_s2`, `nik_s2`, `alamat_s2`, `keperluan`, `file_kk`, `file_ktp`, `file_kel`, `file_ktp1`, `file_ktp2`, `status`, `komentar`, `notifikasi`, `created_at`, `updated_at`) VALUES
(1, 1, 'SURAT PENGANTAR AKTE KELAHIRAN', '001/SKPAK/04/2022', '11/04/2022', '11/05/2022', 'Sujono', '', '', NULL, 'Sutiem', '', '', NULL, '2147483647', 'Ahmad Rossyi Al Awwalu', 'Laki - Laki', 'Jepara', '2022-04-11', 2, 'Islam', 'WNI', 'Desa Brantaksekarjati', '', '', '', '', '', '', 'Untuk Membuat Akte Kelahiran Baru', 'spak-id-1-tgl20220411-2214-825.jpeg', 'spak-id-1-tgl20220411-2214-909.jpeg', '', '', '', 'Diterima', NULL, 0, '2022-04-11 06:22:14', '0000-00-00 00:00:00'),
(2, 1, 'SURAT PENGANTAR AKTE KELAHIRAN', '002/SKPAK/06/2022', '28/07/2024', '28/08/2024', 'qwewqe', '', '', NULL, 'qwewq', '', '', NULL, '2147483647', '1asdad', 'Laki - Laki', 'qweqwe', '2022-06-10', 2, 'Kristen', 'WNI', 'test', '', '', '', '', '', '', '2321xasdasdsadsad', 'spak-id-1-tgl20220621-4233-920.jpg', 'spak-id-1-tgl20220621-4233-85.jpg', '', '', '', 'Diterima', '', 0, '2024-07-28 19:07:55', '0000-00-00 00:00:00'),
(3, 3, 'SURAT PENGANTAR AKTE KELAHIRAN', '003/SKPAK/07/2024', '24/08/2024', '24/09/2024', 'Rizki', '10101010000', 'Jakarta', '2000-01-17', 'Maharani', '20202020000', 'Bandung', '2000-11-14', '4932107865249301', 'Reza', 'Laki - Laki', 'Bandung', '2018-09-11', 1, 'Islam', 'WNI', 'Jl. Akasia I', 'Andreas', '10193918128121', 'Akasia II', 'Fathur', '101931998128231', 'Akasia III', 'Pengantar pembuatan akte', 'spak-id-3-tgl20240806-0541-734.jpg', 'spak-id-3-tgl20240711-0936-277.png', 'spak-id-3-tgl20240806-0541-609.jpg', 'spak-id-3-tgl20240806-0541-890.jpg', 'spak-id-3-tgl20240806-0541-926.jpg', 'Diterima', '', 0, '2024-08-24 13:07:58', '0000-00-00 00:00:00'),
(4, 5, 'SURAT PENGANTAR AKTE KELAHIRAN', '004/SKPAK/07/2024', '31/07/2024', '31/08/2024', 'Lorem', '', '', NULL, 'Ipsum', '', '', NULL, '8462394017569823', 'Andika', 'Laki - Laki', 'Bandung', '2024-07-03', 1, 'Islam', 'WNI', 'Jl. Kartika 1', 'Bobil', '6662539216756982', 'Jl. Cemar 11', 'Rokil', '6762539918756983', 'Jl. Cemar 11', 'Membuat akte disduk', 'spak-id-5-tgl20240730-1623-536.jpg', 'spak-id-5-tgl20240730-1623-744.jpg', 'spak-id-5-tgl20240731-5035-100.jpg', '', '', 'Diterima', '', 0, '2024-07-31 05:46:03', '0000-00-00 00:00:00'),
(5, 4, 'SURAT PENGANTAR AKTE KELAHIRAN', '005/SKPAK/08/2024', '24/08/2024', '24/09/2024', 'Test1', '10101019999', 'Bandung', '2000-01-10', 'Test2', '20202029999', 'Bandung', '1999-11-19', '8471927364059182', 'Aji', 'Laki - Laki', 'Bandung', '2024-08-24', 1, 'Islam', 'WNI', 'Jl. Akasia III No.999', 'Andre', '131331312123', 'Jl. Akasia I ', 'Fathurozi', '149761313131', 'Jl. Akasia I ', 'Update KK', 'spak-id-4-tgl20240824-1938-461.jpg', 'spak-id-4-tgl20240824-1938-107.jpg', 'spak-id-4-tgl20240824-1938-778.jpg', 'spak-id-4-tgl20240824-1938-669.jpg', 'spak-id-4-tgl20240824-1938-99.jpg', 'Menunggu Verifikasi', NULL, 0, '2024-08-24 14:19:38', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Struktur dari tabel `surat_kematian`
--

CREATE TABLE `surat_kematian` (
  `id` int(11) NOT NULL,
  `id_warga` int(11) NOT NULL,
  `jenis_surat` varchar(50) NOT NULL,
  `nomor_surat` varchar(20) NOT NULL,
  `tanggal_surat` varchar(25) NOT NULL,
  `tanggal_kadaluarsa` varchar(25) NOT NULL,
  `hubungan` varchar(100) NOT NULL,
  `nama_alm` varchar(50) NOT NULL,
  `bin` varchar(50) NOT NULL,
  `nik_a` varchar(30) NOT NULL,
  `jekel_a` varchar(15) NOT NULL,
  `tempat_lahir_a` varchar(20) NOT NULL,
  `tanggal_lahir_a` varchar(20) NOT NULL,
  `kewarganegaraan_a` varchar(5) NOT NULL,
  `status_perkawinan_a` varchar(10) NOT NULL,
  `pekerjaan_a` varchar(225) NOT NULL,
  `alamat_a` text NOT NULL,
  `file_kk` varchar(225) NOT NULL,
  `file_ktp` varchar(225) NOT NULL,
  `file_kem` varchar(225) NOT NULL,
  `hari` varchar(10) NOT NULL,
  `tanggal_meninggal` varchar(20) NOT NULL,
  `jam_meninggal` varchar(10) NOT NULL,
  `tempat_meninggal` varchar(225) NOT NULL,
  `sebab_meninggal` varchar(225) NOT NULL,
  `tempat_pemakaman` varchar(100) NOT NULL,
  `keperluan` text NOT NULL,
  `status` varchar(20) NOT NULL,
  `komentar` text DEFAULT NULL,
  `notifikasi` int(2) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `surat_kematian`
--

INSERT INTO `surat_kematian` (`id`, `id_warga`, `jenis_surat`, `nomor_surat`, `tanggal_surat`, `tanggal_kadaluarsa`, `hubungan`, `nama_alm`, `bin`, `nik_a`, `jekel_a`, `tempat_lahir_a`, `tanggal_lahir_a`, `kewarganegaraan_a`, `status_perkawinan_a`, `pekerjaan_a`, `alamat_a`, `file_kk`, `file_ktp`, `file_kem`, `hari`, `tanggal_meninggal`, `jam_meninggal`, `tempat_meninggal`, `sebab_meninggal`, `tempat_pemakaman`, `keperluan`, `status`, `komentar`, `notifikasi`, `created_at`, `updated_at`) VALUES
(1, 1, 'SURAT KETERANGAN KEMATIAN', '001/SKK/04/2022', '11/04/2022', '11/05/2022', 'Keponakan', 'mujnah', 'somat', '030302939392923', 'Laki - Laki', 'Jepara', '1998-02-11', 'WNI', 'Janda', 'Mantan TK', 'Jepara Desa Brantaksekarjati', 'skk-id-1-tgl20220411-2410-42.jpeg', 'skk-id-1-tgl20220411-2410-290.jpeg', '', 'Senin', '2022-04-11', '09:00', 'RSUD Kartini Jepara', 'Sakit Keras', 'TPU Desa Setempat', 'Untuk Keterangan', 'Diterima', NULL, 0, '2022-04-11 06:24:10', '0000-00-00 00:00:00'),
(4, 1, 'SURAT KETERANGAN KEMATIAN', '005/SKK/07/2024', '29/07/2024', '29/08/2024', 'asdasdas', 'asda', 'asdasd', '1231', 'Laki - Laki', 'asdas', '2024-07-29', 'WNI', 'Belum Kawi', 'asdasda', 'asdasd', 'skk-id-1-tgl20240729-3836-11.png', 'skk-id-1-tgl20240729-3836-136.png', '', 'Senin', '2024-07-29', '12:12', 'asdasd', 'test', 'asasd', 'asdadads', 'Diterima', '', 0, '2024-07-29 02:38:36', '0000-00-00 00:00:00'),
(8, 3, 'SURAT KETERANGAN KEMATIAN', '009/SKK/07/2024', '30/07/2024', '30/08/2024', 'Kerabat', 'Rani', 'BINTI', '6342181612349678', 'Perempuan', 'Bandung', '1991-01-16', 'WNI', 'Kawin', 'Pegawai', 'Jl. Angsana 2', 'skk-id-3-tgl20240730-1447-786.jpg', 'skk-id-3-tgl20240730-1447-953.jpg', 'skk-id-3-tgl20240730-2202-169.jpg', 'Senin', '2024-07-08', '10:15', 'RS Sadikin', 'Gagal ginjal', 'TPU Margaasih', 'Mengubah kk', 'Diterima', '', 0, '2024-07-30 16:22:02', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Struktur dari tabel `surat_keterangan_pengantar`
--

CREATE TABLE `surat_keterangan_pengantar` (
  `id` int(11) NOT NULL,
  `id_warga` int(11) NOT NULL,
  `jenis_surat` varchar(50) NOT NULL,
  `nomor_surat` varchar(20) NOT NULL,
  `tanggal_surat` varchar(20) NOT NULL,
  `tanggal_kadaluarsa` varchar(20) NOT NULL,
  `keperluan` text NOT NULL,
  `file_kk` varchar(100) NOT NULL,
  `file_ktp` varchar(100) NOT NULL,
  `file_rt` varchar(225) NOT NULL,
  `status` varchar(20) NOT NULL,
  `komentar` text DEFAULT NULL,
  `notifikasi` int(2) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `surat_keterangan_pengantar`
--

INSERT INTO `surat_keterangan_pengantar` (`id`, `id_warga`, `jenis_surat`, `nomor_surat`, `tanggal_surat`, `tanggal_kadaluarsa`, `keperluan`, `file_kk`, `file_ktp`, `file_rt`, `status`, `komentar`, `notifikasi`, `created_at`, `updated_at`) VALUES
(1, 1, 'SURAT KETERANGAN PENGANTAR', '002/SKP/04/2022', '11/04/2022', '11/05/2022', 'Untuk Pengantar Kerja Ke Malaysia', 'skp-id-1-tgl20220411-2037-350.jpeg', 'skp-id-1-tgl20220411-2037-562.jpeg', '', 'Diterima', NULL, 0, '2022-04-11 06:20:37', '0000-00-00 00:00:00'),
(8, 3, 'SURAT KETERANGAN PENGANTAR', '001/SKP/08/2024', '05/08/2024', '05/09/2024', 'Contoh', 'skp-id-3-tgl20240805-1021-962.jpg', 'skp-id-3-tgl20240805-1021-227.jpg', 'skp-id-3-tgl20240806-1637-277.jpg', 'Ditolak', '', 0, '2024-08-06 02:16:37', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Struktur dari tabel `surat_tidak_mampu`
--

CREATE TABLE `surat_tidak_mampu` (
  `id` int(11) NOT NULL,
  `id_warga` int(11) NOT NULL,
  `jenis_surat` varchar(50) NOT NULL,
  `nomor_surat` varchar(50) NOT NULL,
  `tanggal_surat` varchar(25) NOT NULL,
  `tanggal_kadaluarsa` varchar(25) NOT NULL,
  `keperluan` text NOT NULL,
  `tanggungan` varchar(10) NOT NULL,
  `file_kk` varchar(225) NOT NULL,
  `file_ktp` varchar(225) NOT NULL,
  `file_rumah` varchar(225) NOT NULL,
  `file_rt` varchar(225) NOT NULL,
  `status` varchar(20) NOT NULL,
  `notifikasi` int(2) NOT NULL,
  `komentar` text NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `surat_tidak_mampu`
--

INSERT INTO `surat_tidak_mampu` (`id`, `id_warga`, `jenis_surat`, `nomor_surat`, `tanggal_surat`, `tanggal_kadaluarsa`, `keperluan`, `tanggungan`, `file_kk`, `file_ktp`, `file_rumah`, `file_rt`, `status`, `notifikasi`, `komentar`, `created_at`, `updated_at`) VALUES
(2, 1, 'SURAT KETERANGAN TIDAK MAMPU', '002/SKTM/04/2022', '11/04/2022', '11/05/2022', 'Buat mendaftar KIP', '', 'sktm-id-1-tgl20220411-0626-725.jpeg', 'sktm-id-1-tgl20220411-0626-248.png', '', '', 'Diterima', 0, '', '2022-04-11 06:06:26', '0000-00-00 00:00:00'),
(11, 3, 'SURAT KETERANGAN TIDAK MAMPU', '003/SKTM/07/2024', '17/07/2024', '17/08/2024', 'Membeli barang', '3', 'sktm-id-3-tgl20240717-4231-718.jpg', 'sktm-id-3-tgl20240717-4231-659.jpg', 'sktm-id-3-tgl20240717-4231-251.jpg', '', 'Diterima', 0, '', '2024-07-29 20:09:23', '0000-00-00 00:00:00'),
(12, 5, 'SURAT KETERANGAN TIDAK MAMPU', '012/SKTM/07/2024', '23/07/2024', '23/08/2024', 'Bansos ', '2', 'sktm-id-5-tgl20240723-1755-166.jpg', 'sktm-id-5-tgl20240723-1755-816.jpg', 'sktm-id-5-tgl20240723-1755-571.jpg', '', 'Diterima', 0, '', '2024-07-23 05:17:55', '0000-00-00 00:00:00'),
(13, 1, 'SURAT KETERANGAN TIDAK MAMPU', '013/SKTM/07/2024', '28/07/2024', '28/08/2024', 'test edits', '33', 'sktm-id-1-tgl20240728-3843-894.png', 'sktm-id-1-tgl20240728-5222-225.png', 'sktm-id-1-tgl20240728-3843-24.png', '', 'Diterima', 0, '', '2024-07-28 17:52:22', '0000-00-00 00:00:00'),
(14, 1, 'SURAT KETERANGAN TIDAK MAMPU', '014/SKTM/07/2024', '28/07/2024', '28/08/2024', 'asd', '2', 'sktm-id-1-tgl20240728-3051-350.png', 'sktm-id-1-tgl20240728-3051-778.png', 'sktm-id-1-tgl20240728-3051-232.png', '', 'Diterima', 0, '', '2024-07-28 09:30:51', '0000-00-00 00:00:00'),
(15, 1, 'SURAT KETERANGAN TIDAK MAMPU', '015/SKTM/07/2024', '28/07/2024', '28/08/2024', 'baru', '2', 'sktm-id-1-tgl20240728-4200-483.png', 'sktm-id-1-tgl20240728-4200-901.png', 'sktm-id-1-tgl20240728-4200-125.png', '', 'Diterima', 0, '', '2024-07-28 09:42:00', '0000-00-00 00:00:00'),
(16, 1, 'SURAT KETERANGAN TIDAK MAMPU', '016/SKTM/07/2024', '28/07/2024', '28/08/2024', 'sdfsfd', '3', 'sktm-id-1-tgl20240728-5019-712.png', 'sktm-id-1-tgl20240728-5019-169.png', 'sktm-id-1-tgl20240728-5019-144.png', 'sktm-id-1-tgl20240806-2859-5.jpg', 'Menunggu Verifikasi', 0, '', '2024-08-06 02:28:59', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Struktur dari tabel `surat_usaha`
--

CREATE TABLE `surat_usaha` (
  `id` int(11) NOT NULL,
  `id_warga` int(11) NOT NULL,
  `jenis_surat` varchar(50) NOT NULL,
  `nomor_surat` varchar(20) NOT NULL,
  `tanggal_surat` varchar(25) NOT NULL,
  `tanggal_kadaluarsa` varchar(25) NOT NULL,
  `nama_usaha` varchar(225) NOT NULL,
  `tgl_mulai` varchar(20) NOT NULL,
  `alamat_usaha` text NOT NULL,
  `keperluan` text NOT NULL,
  `file_kk` varchar(225) NOT NULL,
  `file_ktp` varchar(225) NOT NULL,
  `status` varchar(20) NOT NULL,
  `komentar` text NOT NULL,
  `notifikasi` varchar(2) DEFAULT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COMMENT='f';

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE `users` (
  `id_users` int(11) NOT NULL,
  `id_warga` int(11) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(225) NOT NULL,
  `role_id` int(2) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`id_users`, `id_warga`, `email`, `password`, `role_id`, `created_at`, `updated_at`) VALUES
(1, 1, 'warga@gmail.com', '$2y$10$VsBeiMGl4uNk8kV.RdaqyuDSivDfj0nkQCNY6FRmuC4mMLHQBUWem', 3, '2022-04-11 05:55:19', '0000-00-00 00:00:00'),
(2, 2, 'warga2@gmail.com', '$2y$10$VsBeiMGl4uNk8kV.RdaqyuDSivDfj0nkQCNY6FRmuC4mMLHQBUWem', 3, '2022-06-19 00:33:35', '0000-00-00 00:00:00'),
(3, 3, 'andena@gmail.com', '$2y$10$gNTCRmgoLrhoVL2Z82HGyOyfnQJoY6Zt8tgwoBNA2OJFdGUZfmLou', 3, '2024-05-28 15:22:17', '2024-07-10 16:44:54'),
(5, 4, 'wargah@gmail.com', '$2y$10$gr8GW0fEiDk.lptB026kAOcgcByYa5A1hfyKyP9YYs7GAdDnc5amy', 3, '2024-07-22 16:11:18', '0000-00-00 00:00:00'),
(6, 5, 'warga3@gmail.com', '$2y$10$z.q3/E/l5tkYO9AuxZR3cOzWrJJfyy27.BVP9peuh9/qcEuHsDYdi', 3, '2024-07-23 05:13:03', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Struktur dari tabel `warga`
--

CREATE TABLE `warga` (
  `id_warga` int(11) NOT NULL,
  `kk` varchar(20) NOT NULL,
  `nik` varchar(50) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `jekel` enum('Laki-laki','Perempuan') NOT NULL,
  `agama` varchar(10) NOT NULL,
  `golongan_darah` varchar(4) NOT NULL,
  `pendidikan` varchar(50) NOT NULL,
  `status_pernikahan` varchar(20) NOT NULL,
  `pekerjaan` varchar(225) NOT NULL,
  `tempat_lahir` varchar(20) NOT NULL,
  `tgl_lahir` date NOT NULL,
  `rt` int(5) NOT NULL,
  `rw` int(5) NOT NULL,
  `alamat` text NOT NULL,
  `nik2` varchar(30) NOT NULL,
  `nama2` varchar(100) NOT NULL,
  `jekel2` varchar(50) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `warga`
--

INSERT INTO `warga` (`id_warga`, `kk`, `nik`, `nama`, `jekel`, `agama`, `golongan_darah`, `pendidikan`, `status_pernikahan`, `pekerjaan`, `tempat_lahir`, `tgl_lahir`, `rt`, `rw`, `alamat`, `nik2`, `nama2`, `jekel2`, `created_at`, `updated_at`) VALUES
(1, '111111', '2112121212', 'Kurniawan', 'Laki-laki', 'Islam', '', 'Tamat SMA/Sederajat', 'Belum Menikah', 'Freelancer', 'Banjar', '2000-02-02', 1, 3, 'Desa Brantaksekarjati, Rt.001/Rw.002 Kecamatan Welahan Kabupaten Jepara', '', '', '', '2022-04-02 00:03:14', '2024-07-29 09:38:25'),
(2, '222222', '12121121', 'Awaliyanto', 'Laki-laki', 'Islam', 'A', 'Tamat SD/Sederajat', 'Menikah', 'Lorme', 'Lorem', '2022-12-31', 1, 2, 'Lorem', '', '', '', '2022-06-19 05:32:50', '2024-07-29 09:38:10'),
(3, '111111', '1234321912123451', 'Andena L ', 'Laki-laki', 'Islam', 'O', 'Tamat SMA/Sederajat', 'Belum Menikah', 'Mahasiswa', 'Bandung', '2000-02-02', 5, 8, 'Jl. Akasia I', '', '', '', '2024-05-28 20:20:56', '2024-07-29 09:38:04'),
(4, '222222', '1234321911123451', 'Hadi R', 'Laki-laki', 'Islam', 'O', 'Tamat SMA/Sederajat', 'Belum Menikah', 'Mahasiswa', 'Bandung', '1993-02-09', 5, 12, 'Akasia II', '', '', '', '2024-07-22 21:04:39', '2024-07-29 09:37:57'),
(5, '5392781012345678', '1234321912421451', 'Teddy', 'Laki-laki', 'Islam', 'O', 'S1', 'Menikah', 'Pegawai Swasta', 'Bandung', '1989-01-09', 5, 12, 'Jl. Damar II 55c', '', '', '', '2024-07-23 10:12:41', '2024-07-30 21:07:36'),
(8, '5392781012345678', '4781239056789012', 'Rima R', 'Perempuan', 'Islam', 'AB', 'S1', 'Menikah', 'IRT', 'Bandung', '1990-07-13', 5, 12, 'Jl. Damar II No.55cs', '', '', '', '2024-07-30 21:06:04', '2024-08-06 23:40:52');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `administrator`
--
ALTER TABLE `administrator`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `surat_domisili`
--
ALTER TABLE `surat_domisili`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_warga` (`id_warga`);

--
-- Indeks untuk tabel `surat_kelahiran`
--
ALTER TABLE `surat_kelahiran`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_warga` (`id_warga`);

--
-- Indeks untuk tabel `surat_kematian`
--
ALTER TABLE `surat_kematian`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_warga` (`id_warga`);

--
-- Indeks untuk tabel `surat_keterangan_pengantar`
--
ALTER TABLE `surat_keterangan_pengantar`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_warga` (`id_warga`);

--
-- Indeks untuk tabel `surat_tidak_mampu`
--
ALTER TABLE `surat_tidak_mampu`
  ADD PRIMARY KEY (`id`),
  ADD KEY `wr` (`id_warga`);

--
-- Indeks untuk tabel `surat_usaha`
--
ALTER TABLE `surat_usaha`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_warga` (`id_warga`);

--
-- Indeks untuk tabel `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id_users`),
  ADD KEY `warga_rel` (`id_warga`);

--
-- Indeks untuk tabel `warga`
--
ALTER TABLE `warga`
  ADD PRIMARY KEY (`id_warga`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `administrator`
--
ALTER TABLE `administrator`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `surat_domisili`
--
ALTER TABLE `surat_domisili`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `surat_kelahiran`
--
ALTER TABLE `surat_kelahiran`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT untuk tabel `surat_kematian`
--
ALTER TABLE `surat_kematian`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT untuk tabel `surat_keterangan_pengantar`
--
ALTER TABLE `surat_keterangan_pengantar`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT untuk tabel `surat_tidak_mampu`
--
ALTER TABLE `surat_tidak_mampu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT untuk tabel `surat_usaha`
--
ALTER TABLE `surat_usaha`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `users`
--
ALTER TABLE `users`
  MODIFY `id_users` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT untuk tabel `warga`
--
ALTER TABLE `warga`
  MODIFY `id_warga` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `surat_domisili`
--
ALTER TABLE `surat_domisili`
  ADD CONSTRAINT `surat_domisili_ibfk_1` FOREIGN KEY (`id_warga`) REFERENCES `warga` (`id_warga`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `surat_kelahiran`
--
ALTER TABLE `surat_kelahiran`
  ADD CONSTRAINT `surat_kelahiran_ibfk_1` FOREIGN KEY (`id_warga`) REFERENCES `warga` (`id_warga`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `surat_kematian`
--
ALTER TABLE `surat_kematian`
  ADD CONSTRAINT `surat_kematian_ibfk_1` FOREIGN KEY (`id_warga`) REFERENCES `warga` (`id_warga`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `surat_keterangan_pengantar`
--
ALTER TABLE `surat_keterangan_pengantar`
  ADD CONSTRAINT `surat_keterangan_pengantar_ibfk_1` FOREIGN KEY (`id_warga`) REFERENCES `warga` (`id_warga`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `surat_tidak_mampu`
--
ALTER TABLE `surat_tidak_mampu`
  ADD CONSTRAINT `wr` FOREIGN KEY (`id_warga`) REFERENCES `warga` (`id_warga`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `surat_usaha`
--
ALTER TABLE `surat_usaha`
  ADD CONSTRAINT `surat_usaha_ibfk_1` FOREIGN KEY (`id_warga`) REFERENCES `warga` (`id_warga`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `users`
--
ALTER TABLE `users`
  ADD CONSTRAINT `warga_rel` FOREIGN KEY (`id_warga`) REFERENCES `warga` (`id_warga`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

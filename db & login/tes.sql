-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Oct 24, 2018 at 10:45 AM
-- Server version: 10.1.28-MariaDB
-- PHP Version: 7.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tes`
--

-- --------------------------------------------------------

--
-- Table structure for table `beritas`
--

CREATE TABLE `beritas` (
  `id` int(10) UNSIGNED NOT NULL,
  `foto` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `judul` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `isi` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `kategori_id` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `beritas`
--

INSERT INTO `beritas` (`id`, `foto`, `judul`, `isi`, `slug`, `kategori_id`, `created_at`, `updated_at`) VALUES
(1, '421f74a7e469ea4e89a323085add6aa6.jpg', 'Jemaah Umrah Diperkirakan Akan Membludak Di 10 Hari Terakhir Ramadan.', '<!DOCTYPE html>\r\n<html>\r\n<head>\r\n</head>\r\n<body>\r\n<p>Sekitar 6 juta jamaah tercatat melakukan ibadah Umroh di bulan Ramadan kali ini, berdasarkan data statistik dari the Information Center Kementrian Haji dan Umrah Arab Saudi, seperti dilaporkan the Saudi Press Agency.</p>\r\n<p style=\"box-sizing: border-box; margin: 0px 0px 20px; line-height: 1.6; font-family: NexaLight; color: #7a7a7a; font-size: 17px;\">Jumlah ini diperkirakan akan terus meningkat dan memuncak pada 10 terakhir Ramadan. Bulan Ramadan memang kerap dimanfaatkan umat Muslim dengan memaksimalkan ibadah, salah satunya adalah melaksanakan ibadah umroh sebelum ibadah haji di musim haji yang datang setelah Ramadan.</p>\r\n<p style=\"box-sizing: border-box; margin: 0px; line-height: 1.6; font-family: NexaLight; color: #7a7a7a; font-size: 17px;\">&ldquo;Jumlah jamaah umrah akan melebihi 6 juta di beberapa hari mendatang. Pihak kementerian juga sudah berkoordinasi dengan agensi agar kegiatan ibadah umrah tetap nyaman dan mudah meski jamaah membludak,&rdquo; ucap juru bicara dalam press statement. Ia juga menambahkan, sejauh ini ada 43.000 layanan disediakan untuk jamaah umrah</p>\r\n</body>\r\n</html>', 'jemaah-umrah-diperkirakan-akan-membludak-di-10-hari-terakhir-ramadan', 1, '2018-10-22 01:22:45', '2018-10-23 23:23:15'),
(2, 'YZkxqr_2.jpg', 'Kedatangan Jamaah Umrah Tahun Depan Diproyeksikan Mencapai 8 Juta Jiwa', '<!DOCTYPE html>\r\n<html>\r\n<head>\r\n</head>\r\n<body>\r\n<p>Ahmad Sheikh Bafaqih, pakar di bidang ekonomi Haji dan Umrah, mengatakan jumlah jamaah umrah terdaftar meningkat dibanding angka tahun lalu.</p>\r\n<p style=\"box-sizing: border-box; margin: 0px 0px 20px; line-height: 1.6; font-family: NexaLight; color: #7a7a7a; font-size: 17px;\">Dia mengharapkan kedatangan 8 juta jamaah umrah tahun depan, setelah sebagian pembangunan di Masjidil Haram dan Masjid Nabawi selesai. Diharapkan jumlah jamaah meningkat 2 juta jamaah umrah dibandingkan dengan 6 juta peziarah tahun ini, diperkirakan meningkat 30 persen.</p>\r\n<p style=\"box-sizing: border-box; margin: 0px 0px 20px; line-height: 1.6; font-family: NexaLight; color: #7a7a7a; font-size: 17px;\">Dia menekankan pada upaya bersama dari Kementerian Dalam Negeri, haji dan umrah, dan otoritas terkait untuk memenuhi kebutuhan dan keinginan sebagian besar peziarah yang melakukan umrah selama Ramadhan terakhir ini di Makkah.</p>\r\n<p style=\"box-sizing: border-box; margin: 0px 0px 20px; line-height: 1.6; font-family: NexaLight; color: #7a7a7a; font-size: 17px;\">Sementara itu, sumber-sumber informasi mengatakan, Kementerian Haji dan Umrah menghentikan penerbitan visa umrah tanpa batas untuk musim tahun ini sejak 16 Ramadhan. Sumber tersebut mengatakan bahwa musim umrah tahun ini menunjukkan peningkatan 6,99 persen dari tahun lalu dengan 6.393.464 visa dikeluarkan, meningkat dari 444.252 visa, sementara jumlah peziarah mencapai 5.949.212 jamaah umrah.</p>\r\n<p style=\"box-sizing: border-box; margin: 0px; line-height: 1.6; font-family: NexaLight; color: #7a7a7a; font-size: 17px;\">Menurut statistik, Mesir datang pertama dengan 1.303.067 visa umrah, naik 17 persen dari musim Umrah lalu; Pakistan dengan 991.337 visa umrah dan Indonesia di posisi ketiga dengan 699.612 visa umrah.</p>\r\n</body>\r\n</html>', 'kedatangan-jamaah-umrah-tahun-depan-diproyeksikan-mencapai-8-juta-jiwa', 1, '2018-10-22 03:09:13', '2018-10-22 03:09:13');

-- --------------------------------------------------------

--
-- Table structure for table `daftarhajis`
--

CREATE TABLE `daftarhajis` (
  `id` int(10) UNSIGNED NOT NULL,
  `foto` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `paket` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `paspor` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nama` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tempatlahir` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tgllahir` date NOT NULL,
  `jk` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `alamat` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `notelp` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `pekerjaan` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `jabatan` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `almkantor` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `notelpkantor` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `keterangan` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `daftars`
--

CREATE TABLE `daftars` (
  `id` int(10) UNSIGNED NOT NULL,
  `foto` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `paket` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `paspor` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nama` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tempatlahir` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tgllahir` date NOT NULL,
  `jk` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `alamat` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `notelp` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `pekerjaan` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `jabatan` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `almkantor` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `notelpkantor` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `keterangan` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `daftars`
--

INSERT INTO `daftars` (`id`, `foto`, `paket`, `paspor`, `nama`, `tempatlahir`, `tgllahir`, `jk`, `alamat`, `notelp`, `status`, `pekerjaan`, `jabatan`, `almkantor`, `notelpkantor`, `email`, `keterangan`, `created_at`, `updated_at`) VALUES
(1, 'a903dea5ac1ac4300e9bf78e6acbb409.jpg', 'umrah reguler', '1241244', 'Dianny', 'bandung', '2018-10-09', 'Perempuan', 'jl.jggq', '86986986', 'Menikah', 'wiraswasta', 'karyawan', 'jl.hfyfye', '7657651', 'dikafadlan7601@gmail.com', 'iyahh', '2018-10-23 20:07:15', '2018-10-23 23:46:05');

-- --------------------------------------------------------

--
-- Table structure for table `daftartabungans`
--

CREATE TABLE `daftartabungans` (
  `id` int(10) UNSIGNED NOT NULL,
  `nama` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tempatlahir` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tgllahir` date NOT NULL,
  `jk` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tanda` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `notanda` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `alamatsesuai` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `alamatsurat` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `rencana` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `pendamping` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `paket` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `jumlahwaktu` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `jumlahsetoran` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `setoran` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `daftartabungans`
--

INSERT INTO `daftartabungans` (`id`, `nama`, `tempatlahir`, `tgllahir`, `jk`, `tanda`, `notanda`, `alamatsesuai`, `alamatsurat`, `email`, `rencana`, `pendamping`, `paket`, `jumlahwaktu`, `jumlahsetoran`, `setoran`, `created_at`, `updated_at`) VALUES
(3, 'Dika', 'bandungd', '2018-10-29', 'Laki-laki', 'KTP', '121324', 'jl.kkkk', 'jl.ooooe', 'dikafadlan7601@gmail.com', 'Anak', 'ada', 'umrah reguler', '2jam', '1000', 'Tunai', '2018-10-24 00:10:44', '2018-10-24 00:33:56');

-- --------------------------------------------------------

--
-- Table structure for table `faqs`
--

CREATE TABLE `faqs` (
  `id` int(10) UNSIGNED NOT NULL,
  `pertanyaan` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `jawaban` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `faqs`
--

INSERT INTO `faqs` (`id`, `pertanyaan`, `jawaban`, `created_at`, `updated_at`) VALUES
(1, 'Apa itu nabatour.com ?', '<!DOCTYPE html>\r\n<html>\r\n<head>\r\n</head>\r\n<body>\r\n<p>Nabatour.com adalah official website dari Nur Assalaam Buana Tour &amp; Travel yang bergerak di bidang biro perjalanan Haji &amp; Umrah dengan fasilitas one stop service</p>\r\n</body>\r\n</html>', '2018-10-22 03:27:53', '2018-10-23 23:23:41'),
(2, 'Apa saja yang tersedia di nabatour.com ?', '<!DOCTYPE html>\r\n<html>\r\n<head>\r\n</head>\r\n<body>\r\n<div class=\"accordion-content\" style=\"display: block;\">\r\n<p>Customer dapat mencari informasi mengenai paket perjalanan, syarat &amp; ketentuan, tips ataupun artikel sampai mengisi formulir untuk Umrah &amp; Haji.</p>\r\n<p>Customer dapat langsung melakukan komunikasi melalui fasilitas live chat kami dengan tim customer service Nabatour.</p>\r\n</div>\r\n</body>\r\n</html>', '2018-10-22 03:28:37', '2018-10-22 03:28:37'),
(3, 'Apa kelebihan Naba Tour ?', '<!DOCTYPE html>\r\n<html>\r\n<head>\r\n</head>\r\n<body>\r\n<div class=\"accordion-content\" style=\"display: block;\">\r\n<p><span style=\"font-weight: bold; font-family: Nexa; font-size: 15px;\">Aman</span></p>\r\n<p style=\"box-sizing: border-box; margin: 0px 0px 10px; line-height: 1.6; font-family: Nexa; color: #ffffff; font-size: 15px;\"><span style=\"color: #000000;\">Bimbingan sebelum , pada saat dan pasca ibadah Haji &amp; Umroh dengan pembimbing yang professional dan mendalami bidang Fiqih Islam</span></p>\r\n<p><strong>Nyaman</strong></p>\r\n<p>&nbsp;</p>\r\n<ul>\r\n<li>Berangkat dan pulang dari Masjid Assalaam</li>\r\n<li>Jadwal jemaah yang terprogram baik</li>\r\n<li>Pesawat Saudi Arabia Airline</li>\r\n<li>Full menu catering (menu Indonesia/Asia)</li>\r\n<li>Hotel min. Bintang 4</li>\r\n<li>Executive Bus</li>\r\n</ul>\r\n<p>&nbsp;</p>\r\n<p><strong>Bersahabat</strong></p>\r\n<p>Alumni Jemaah akan langsung tergabung dalam keluarga besar Assalaam untuk bersama-sama menjalankan kegiatan sosial dan keagamaan</p>\r\n<br />\r\n<p><strong>Extra</strong></p>\r\n<p>Pengenalan Bahasa Arab praktis &amp; extra program : ziarah ke Gua Hiro</p>\r\n</div>\r\n</body>\r\n</html>', '2018-10-22 03:30:09', '2018-10-22 03:30:09');

-- --------------------------------------------------------

--
-- Table structure for table `galerihajis`
--

CREATE TABLE `galerihajis` (
  `id` int(10) UNSIGNED NOT NULL,
  `logo` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `galerihajis`
--

INSERT INTO `galerihajis` (`id`, `logo`, `created_at`, `updated_at`) VALUES
(1, 'GOcg9K_44.jpg', '2018-10-22 03:43:14', '2018-10-22 03:43:14'),
(2, 'TBHPQd_copy_4.jpg', '2018-10-22 03:43:39', '2018-10-22 03:43:39'),
(3, 'bL5O46_haji_1.jpg', '2018-10-22 03:43:55', '2018-10-22 03:43:55'),
(4, 'me6tyI_IMG20160906075307.jpg', '2018-10-22 03:44:15', '2018-10-22 03:44:15');

-- --------------------------------------------------------

--
-- Table structure for table `galerihomes`
--

CREATE TABLE `galerihomes` (
  `id` int(10) UNSIGNED NOT NULL,
  `logo` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `galerihomes`
--

INSERT INTO `galerihomes` (`id`, `logo`, `created_at`, `updated_at`) VALUES
(1, '1Jb50s_MESJID_NABAWI_11.jpg', '2018-10-22 03:01:25', '2018-10-22 03:01:25'),
(2, 'NCbAf3_JABAL_UHUD_3.jpg', '2018-10-22 03:02:28', '2018-10-22 03:02:28'),
(3, 'H4ouMm_JABAL_MAGNET_8.jpg', '2018-10-22 03:02:54', '2018-10-22 03:02:54'),
(4, 'pWPenS_IMG-20161009-WA0032.jpg', '2018-10-22 03:03:08', '2018-10-22 03:03:08');

-- --------------------------------------------------------

--
-- Table structure for table `galeris`
--

CREATE TABLE `galeris` (
  `id` int(10) UNSIGNED NOT NULL,
  `foto` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `kategorig_id` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `galeris`
--

INSERT INTO `galeris` (`id`, `foto`, `kategorig_id`, `created_at`, `updated_at`) VALUES
(2, 'ksN18G_IMG20160906075307.jpg', 2, '2018-10-23 00:15:37', '2018-10-23 00:15:37'),
(4, 'pyPUKS_JABAL_UHUD_3.jpg', 1, '2018-10-24 01:38:05', '2018-10-24 01:38:05'),
(7, 'dftKgC_IMG-20160828-WA0071.jpg', 4, '2018-10-24 01:41:25', '2018-10-24 01:41:25');

-- --------------------------------------------------------

--
-- Table structure for table `galeriwisatas`
--

CREATE TABLE `galeriwisatas` (
  `id` int(10) UNSIGNED NOT NULL,
  `logo` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `galeriwisatas`
--

INSERT INTO `galeriwisatas` (`id`, `logo`, `created_at`, `updated_at`) VALUES
(1, 'UPzWVP_34.jpg', '2018-10-22 03:40:34', '2018-10-22 03:40:34'),
(2, 'SZ0I62_copy_2.jpg', '2018-10-22 03:40:50', '2018-10-22 03:40:50'),
(3, 'FfHmzY_copy_1.jpg', '2018-10-22 03:41:06', '2018-10-22 03:41:06'),
(4, 'DxnEuk_copy_3.jpg', '2018-10-22 03:41:24', '2018-10-22 03:41:24');

-- --------------------------------------------------------

--
-- Table structure for table `galmanhajis`
--

CREATE TABLE `galmanhajis` (
  `id` int(10) UNSIGNED NOT NULL,
  `logo` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `galmanhajis`
--

INSERT INTO `galmanhajis` (`id`, `logo`, `created_at`, `updated_at`) VALUES
(1, 'OZymTe_haji_1.jpg', '2018-10-22 03:33:30', '2018-10-22 03:33:30'),
(2, 'jBRHU2_copy_6.jpg', '2018-10-22 03:33:43', '2018-10-22 03:33:43'),
(5, 'pEgAqR_61.jpg', '2018-10-22 03:34:51', '2018-10-22 03:34:51'),
(6, 'gldiDE_12.jpg', '2018-10-22 03:35:10', '2018-10-22 03:35:10');

-- --------------------------------------------------------

--
-- Table structure for table `galmanumrohs`
--

CREATE TABLE `galmanumrohs` (
  `id` int(10) UNSIGNED NOT NULL,
  `logo` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `galmanumrohs`
--

INSERT INTO `galmanumrohs` (`id`, `logo`, `created_at`, `updated_at`) VALUES
(2, '1MAFru_IMG-20160906-WA0015.jpg', '2018-10-22 03:32:11', '2018-10-22 03:32:11'),
(3, 'HnhWXp_IMG-20160905-WA0012.jpg', '2018-10-22 03:32:26', '2018-10-22 03:32:26'),
(4, 'BKhuUt_IMG-20160828-WA0071.jpg', '2018-10-22 03:32:40', '2018-10-22 03:32:40'),
(5, '9rqFyy_IMG20160906075307.jpg', '2018-10-22 03:33:01', '2018-10-22 03:33:01');

-- --------------------------------------------------------

--
-- Table structure for table `galumpluses`
--

CREATE TABLE `galumpluses` (
  `id` int(10) UNSIGNED NOT NULL,
  `logo` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `galumpluses`
--

INSERT INTO `galumpluses` (`id`, `logo`, `created_at`, `updated_at`) VALUES
(1, '7Bf7cP_27.jpg', '2018-10-22 03:41:57', '2018-10-22 03:41:57'),
(2, 'gVAkMM_IMG-20161009-WA0032.jpg', '2018-10-22 03:42:18', '2018-10-22 03:42:18'),
(3, '8w60aO_IMG-20160828-WA0071.jpg', '2018-10-22 03:42:30', '2018-10-22 03:42:30'),
(4, 'kZ1LYb_19.jpg', '2018-10-22 03:42:46', '2018-10-22 03:42:46');

-- --------------------------------------------------------

--
-- Table structure for table `galumregulers`
--

CREATE TABLE `galumregulers` (
  `id` int(10) UNSIGNED NOT NULL,
  `logo` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `galumregulers`
--

INSERT INTO `galumregulers` (`id`, `logo`, `created_at`, `updated_at`) VALUES
(3, '7ywgRI_26.jpg', '2018-10-22 03:38:38', '2018-10-22 03:38:38'),
(4, 'msIByw_27.jpg', '2018-10-22 03:39:05', '2018-10-22 03:39:05'),
(5, 'idcf3a_34.jpg', '2018-10-22 03:39:23', '2018-10-22 03:39:23'),
(6, 'zKeqTE_19.jpg', '2018-10-22 03:39:51', '2018-10-22 03:39:51');

-- --------------------------------------------------------

--
-- Table structure for table `hajis`
--

CREATE TABLE `hajis` (
  `id` int(10) UNSIGNED NOT NULL,
  `judul` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `isi` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `harga` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `fasilitas` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `batal` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `biayamasuk` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `biayatidak` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `syarat` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `daftar` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `kategoria_id` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `hajis`
--

INSERT INTO `hajis` (`id`, `judul`, `isi`, `harga`, `fasilitas`, `batal`, `biayamasuk`, `biayatidak`, `syarat`, `daftar`, `slug`, `kategoria_id`, `created_at`, `updated_at`) VALUES
(1, 'Haji Reguler', '<!DOCTYPE html>\r\n<html>\r\n<head>\r\n</head>\r\n<body>\r\n<p>Untuk melayani para tamu Allah, NabaTour bekerjasama dengan KBIH ASSALAAM menyelenggarkan Haji reguler dan untuk Administrasi keberangkatan , akomodasi, Transportasi dan atau segala sesuatunya menjadi tanggung jawab pemerintah (DEPAG), pihak Nabatour hanya melaksanakan Bimbingan selama di Tanah air dan di tanah suci, adapun pelaksanaan bimbingan selama di Tanah air dilaksanakan selama 9 Bulan yaitu 36 kali pertemuan (teori dan praktek ) dan Bimbingan di Tanah Suci dari saat keberangkatan, kedatangan dan kepulangan.</p>\r\n</body>\r\n</html>', '<!DOCTYPE html>\r\n<html>\r\n<head>\r\n</head>\r\n<body>\r\n<p><strong>Jadwal Bimbingan :</strong></p>\r\n</body>\r\n</html>', '<!DOCTYPE html>\r\n<html>\r\n<head>\r\n</head>\r\n<body>\r\n<p><strong>Teori</strong></p>\r\n<p>Waktu : Setiap Ahad (Pukul 13.00 &ndash; 16.00 WIB)</p>\r\n<p>Tempat: Gedung NabaTour Assalaam lt 2. Jl Sasakgantung no 16 , Bandung</p>\r\n<p><strong>Praktek</strong></p>\r\n<p>Waktu :Setiap Rabu dan Sabtu (Pukul 06.30 &ndash; 09.00 WIB)</p>\r\n<p>Tempat :Lapangan Batu Nunggal Bandung</p>\r\n</body>\r\n</html>', '<!DOCTYPE html>\r\n<html>\r\n<head>\r\n</head>\r\n<body>\r\n<p><strong>Persyaratan :</strong></p>\r\n</body>\r\n</html>', '<!DOCTYPE html>\r\n<html>\r\n<head>\r\n</head>\r\n<body>\r\n<ol>\r\n<ol>\r\n<li>Pendaftaran Rp 250.000,-</li>\r\n<li>Mengisi formulir pendaftaran bimbingan</li>\r\n<li>FC bukti porsi haji Rp 25.000.000,- dari Bank</li>\r\n<li>FC bukti setoran BPIH lunas dai Bank (bila sudah lunas)</li>\r\n<li>Surat pendaftaran pergi haji (SPPH) dari Kementrian Agama setempat</li>\r\n<li>Surat keterangan kesehatan dari puskesmas 2 lembar</li>\r\n<li>FC KTP sebanyak 15 lembar</li>\r\n<li>Pas foto berwarna,dasar putih, tampak wajah 80% ukuran 3x4 = 25 lbr,4x6=15 lbr</li>\r\n<li>FC Kartu Keluarga 5 lembar</li>\r\n<li>10 Surat keterangan domisili dari kelurahan bermaterai Rp 6.000,- di ketahui oleh Camat setempat = 2 lbr</li>\r\n<li>FC akte kelahiran/ijazah SD/surat nikah 3 lembar</li>\r\n<li>Paspor asli yang berlaku minimal 7 bulan (terhitung dari kepulangan Haji) beserta Fotocopy = 2lbr</li>\r\n</ol>\r\n</ol>\r\n<p><strong><em>**Persyaratan dan ketentuan sewaktu-waktu bisa berubah disesuaikan dengan ketentuan Kementrian Agama</em></strong></p>\r\n</body>\r\n</html>', '<!DOCTYPE html>\r\n<html>\r\n<head>\r\n</head>\r\n<body>\r\n<p><strong>Fasilitas :</strong></p>\r\n<ol>\r\n<li>Pembimbing Ibadah selama di tanah suci</li>\r\n<li>Bimbingan selama &plusmn; 36 kali pertemuan</li>\r\n<li>Praktek manasik haji lapangan</li>\r\n<li>Pemberangkatan dan pemulangan haji</li>\r\n<li>Konsultasi dan koordinasi selama bimbingan</li>\r\n<li>Administrasi dan kesekertariatan</li>\r\n<li>Pengurusan ke Kementrian Agama</li>\r\n<li>Perlengkapan jamaa haji:</li>\r\n</ol>\r\n</body>\r\n</html>', '<!DOCTYPE html>\r\n<html>\r\n<head>\r\n</head>\r\n<body>\r\n<ul>\r\n<li>Jadwal bimbingan</li>\r\n<li>Buku panduan manasik haji</li>\r\n<li>Buku doa dan wirid</li>\r\n<li>Buku agenda</li>\r\n<li>Buku etika haji</li>\r\n<li>Tas serbaguna</li>\r\n<li>Buku kronologi perjalanan</li>\r\n<li>Kantong batu</li>\r\n<li>Tanda rombongan</li>\r\n<li>Stiker</li>\r\n<li>Syal</li>\r\n<li>Piagam Haji</li>\r\n<li>Album Haji</li>\r\n<li>Nametag</li>\r\n<li>Tali/rambang koper</li>\r\n<li>Lembaran doa</li>\r\n</ul>\r\n</body>\r\n</html>', '<!DOCTYPE html>\r\n<html>\r\n<head>\r\n</head>\r\n<body>\r\n<h3 style=\"color: #fff;\">Biaya Tidak Termasuk</h3>\r\n<ol>\r\n<li>Transportasi Bandung &ndash; Jakarta</li>\r\n<li>Seragam batik KEMENAG</li>\r\n<li>Periksa kesehatan/Vaccine</li>\r\n<li>Walimatussafar bersama</li>\r\n<li>Malaya</li>\r\n<li>Mutasi gabungan kloter</li>\r\n<li>Passport</li>\r\n<li>Infaq lainnya yang berkaitan dengan KEMENAG</li>\r\n</ol>\r\n</body>\r\n</html>', 'haji-reguler', 1, '2018-10-22 03:47:37', '2018-10-22 03:47:37'),
(2, 'Haji Plus', '<!DOCTYPE html>\r\n<html>\r\n<head>\r\n</head>\r\n<body>\r\n<p>Pelaksanaan ibadah haji yang sempurna adalah yang sesuai dengan sunnah Rasululah SAW. Dalam menyelenggarakan pelaksanaan haji ini Naba Tour memperhatikan unsur kesempurnaan ibadah dan sekaligus kenyamanan dalam melaksanakanya.</p>\r\n</body>\r\n</html>', '<!DOCTYPE html>\r\n<html>\r\n<head>\r\n</head>\r\n<body>\r\n<p><strong>Harga :</strong></p>\r\n<ul>\r\n<li>USD $ 10.500/ Pax ( Sekamar berempat)</li>\r\n<li>USD $ 11.000/ Pax ( Sekamar bertiga)</li>\r\n<li>USD $ 11.500/ Pax ( Sekamar berdua)</li>\r\n</ul>\r\n</body>\r\n</html>', '<!DOCTYPE html>\r\n<html>\r\n<head>\r\n</head>\r\n<body>\r\n<p><strong>Fasilitas :</strong></p>\r\n<ul>\r\n<li>Mekkah : Al Safwah/Setaraf (*****)</li>\r\n<li>Madinah : Millenium Al Aqeeq/ Setaraf (*****)</li>\r\n<li>Jeddah : Holiday Inn / Setaraf</li>\r\n</ul>\r\n</body>\r\n</html>', '<!DOCTYPE html>\r\n<html>\r\n<head>\r\n</head>\r\n<body>\r\n<p><strong>Pembatalan :</strong></p>\r\n<p>Pembatalan yang dilakukan setelah menyetorkan uang BPIH untuk booking seat tidak dikenakan potongan. Pembatalan yang dilakukan setelah membayar uang pelunasan SISKOHAT dikenakan sesuai peraturan DEPAG Pembatalan yang dilakukan setelah pembayaran akomodasi ke Arab Saudi dikenakan potongan secara proporsional</p>\r\n</body>\r\n</html>', '<!DOCTYPE html>\r\n<html>\r\n<head>\r\n</head>\r\n<body>\r\n<p><strong>Biaya Sudah Termasuk :</strong></p>\r\n<ul>\r\n<li>&nbsp;Setoran ONH/BPIH yang ditetapkan pemerintah</li>\r\n<li>Tiket Pesawat Jakarta - Jeddah (PP)</li>\r\n<li>Bimbingan manasik Haji</li>\r\n<li>Akomodasi Hotel berbintang &amp; Apartemen dekat dengan masjidil Harom dan masjid nabawi</li>\r\n<li>Akomodasi di Mina dekat lokasi lempar jumroh</li>\r\n<li>Konsumsi 3x sehari selama di Arab Saudi</li>\r\n<li>Transportasi Bis AC Konsumsi &amp; Transportasi Bandung-Jakarta-Bandung</li>\r\n<li>Biaya Airport Tax dan Handling Ziarah di Mekkah, Madinah dan Jeddah</li>\r\n<li>&nbsp; Perlengkapan Haji</li>\r\n<li>Air Zam Zam</li>\r\n</ul>\r\n</body>\r\n</html>', '<!DOCTYPE html>\r\n<html>\r\n<head>\r\n</head>\r\n<body>\r\n<p><strong>Biaya Belum Termasuk :</strong></p>\r\n<ul>\r\n<li>Biaya pembuatan Paspor</li>\r\n<li>Biaya pemeriksaan Kesehatan</li>\r\n<li>Kelebihan Bagasi ( Max. 30 Kg)</li>\r\n<li>Dam dan Hadyu</li>\r\n<li>Telp, Fax, Telex</li>\r\n<li>&nbsp;&nbsp; Laundry selama dalam perjalanan serta pengeluaran pribadi lainnya</li>\r\n<li>&nbsp;&nbsp; Biaya Perwatan Jika Jamaah Sakit</li>\r\n<li>&nbsp;&nbsp; Biaya Perawatan Jika Jamaah Meninggal</li>\r\n<li>&nbsp;&nbsp; Transportasi dan Akomodasi diluar Program</li>\r\n<li>&nbsp;&nbsp; Asuransi</li>\r\n</ul>\r\n</body>\r\n</html>', '<!DOCTYPE html>\r\n<html>\r\n<head>\r\n</head>\r\n<body>\r\n<p><strong>Persyaratan :</strong></p>\r\n<ul>\r\n<li>Mengisi Form Pendaftaran</li>\r\n<li>&nbsp;&nbsp;&nbsp; Copy KTP</li>\r\n<li>&nbsp;&nbsp; Copy Kartu Keluarga</li>\r\n<li>&nbsp;&nbsp; Copy Surat Nikah</li>\r\n<li>&nbsp;&nbsp; Copy Paspor / Copy Akte Kelahiran</li>\r\n<li>&nbsp;&nbsp; Photo 4x6 = 6 lbr, 3x4 = 30 Lbr ( Berwarna,Backgroud putih,TampakMuka 80%)</li>\r\n<li>&nbsp;&nbsp; Menyetorkan Uang BPIH untuk Booking Seat USD 4000/Pax</li>\r\n<li>&nbsp;&nbsp; Melunasi biaya paket selambat lambatnya 3 bulan sebelum keberangkatan</li>\r\n</ul>\r\n</body>\r\n</html>', '<!DOCTYPE html>\r\n<html>\r\n<head>\r\n</head>\r\n<body>\r\n<p><strong>Pendaftaran :</strong></p>\r\n<ul>\r\n<li>Jamaah Mengisi Formulir Jamaah</li>\r\n<li>&nbsp; Menyerahkan Persyaratan sesuai dengan ketentuan diatas</li>\r\n<li>Jamaah menunggu sampai Persyaratan tersebut kami proses ke DEPAG setelah proses ke DEPAG selesai dan SPPH (SPPH berlaku 1 minggu) sudah keluar dari DEPAG kami akan infokan ke jamaah tersebut untuk segera melakukan Deposit sebesar USD 4000/Pax</li>\r\n<li>Setelah jamaah Deposit untuk booking seat, kami akan proses SPPH tersebut ke BANK sampai jamaah mendapatkan BPIH.</li>\r\n<li>BPIH tersebut dapat di cek di Web Kemenag Haji dengan cara memasukan No. Porsi dan Pasword ( Supaya jamaah dapat mengetahui Estimasi Keberangkatan).</li>\r\n</ul>\r\n</body>\r\n</html>', 'haji-plus', 2, '2018-10-22 03:49:36', '2018-10-22 03:49:36');

-- --------------------------------------------------------

--
-- Table structure for table `homes`
--

CREATE TABLE `homes` (
  `id` int(10) UNSIGNED NOT NULL,
  `logo` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `jadwalhajis`
--

CREATE TABLE `jadwalhajis` (
  `id` int(10) UNSIGNED NOT NULL,
  `bulan` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `keterangan` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `jadwalhajis`
--

INSERT INTO `jadwalhajis` (`id`, `bulan`, `keterangan`, `created_at`, `updated_at`) VALUES
(6, 'NOVEMBER 2018', '<!DOCTYPE html>\r\n<html>\r\n<head>\r\n</head>\r\n<body>\r\n<p><strong>Jadwal Praktek : -</strong></p>\r\n<p><strong>Jadwal Bimbingan : -</strong></p>\r\n<p><strong>Keberangkatan : -</strong></p>\r\n<p><strong>Kepulangan : -</strong></p>\r\n</body>\r\n</html>', '2018-10-22 02:54:51', '2018-10-23 23:25:22'),
(7, 'DESEMBER 2018', '<!DOCTYPE html>\r\n<html>\r\n<head>\r\n</head>\r\n<body>\r\n<p><strong>Jadwal Praktek : -</strong></p>\r\n<p><strong>Jadwal Bimbingan : -</strong></p>\r\n<p><strong>Keberangkatan : -</strong></p>\r\n<p><strong>Kepulangan : -</strong></p>\r\n</body>\r\n</html>', '2018-10-22 02:55:13', '2018-10-22 02:55:13');

-- --------------------------------------------------------

--
-- Table structure for table `jadwals`
--

CREATE TABLE `jadwals` (
  `id` int(10) UNSIGNED NOT NULL,
  `judul` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `logo` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `jadwalumrohs`
--

CREATE TABLE `jadwalumrohs` (
  `id` int(10) UNSIGNED NOT NULL,
  `bulan` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `keterangan` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `jadwalumrohs`
--

INSERT INTO `jadwalumrohs` (`id`, `bulan`, `keterangan`, `created_at`, `updated_at`) VALUES
(1, 'OKTOBER 2018', '<!DOCTYPE html>\r\n<html>\r\n<head>\r\n</head>\r\n<body>\r\n<p><strong>Jadwal Praktek : -</strong></p>\r\n<p><strong>Jadwal Bimbingan : -</strong></p>\r\n<p><strong>Keberangkatan : -</strong></p>\r\n<p><strong>Kepulangan : -</strong></p>\r\n</body>\r\n</html>', '2018-10-21 22:39:35', '2018-10-23 23:27:22'),
(3, 'NOVEMBER 2018', '<!DOCTYPE html>\r\n<html>\r\n<head>\r\n</head>\r\n<body>\r\n<p><strong>Jadwal Praktek : -</strong></p>\r\n<p><strong>Jadwal Bimbingan : -</strong></p>\r\n<p><strong>Keberangkatan : -</strong></p>\r\n<p><strong>Kepulangan : -</strong></p>\r\n</body>\r\n</html>', '2018-10-22 01:37:37', '2018-10-22 01:37:37');

-- --------------------------------------------------------

--
-- Table structure for table `kategorias`
--

CREATE TABLE `kategorias` (
  `id` int(10) UNSIGNED NOT NULL,
  `nama_kategori` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `kategorias`
--

INSERT INTO `kategorias` (`id`, `nama_kategori`, `slug`, `created_at`, `updated_at`) VALUES
(1, 'Haji Reguler', 'haji-reguler', '2018-10-22 03:44:57', '2018-10-22 03:44:57'),
(2, 'Haji plus', 'haji-plus', '2018-10-22 03:45:08', '2018-10-22 03:45:08');

-- --------------------------------------------------------

--
-- Table structure for table `kategories`
--

CREATE TABLE `kategories` (
  `id` int(10) UNSIGNED NOT NULL,
  `nama_kategori` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `kategories`
--

INSERT INTO `kategories` (`id`, `nama_kategori`, `slug`, `created_at`, `updated_at`) VALUES
(1, 'Umrah reguler', 'umrah-reguler', '2018-10-22 03:15:57', '2018-10-22 03:15:57'),
(2, 'Umrah Plus', 'umrah-plus', '2018-10-22 03:16:10', '2018-10-22 03:16:10'),
(3, 'Umroh By Request', 'umroh-by-request', '2018-10-22 03:16:21', '2018-10-22 03:16:21');

-- --------------------------------------------------------

--
-- Table structure for table `kategorigs`
--

CREATE TABLE `kategorigs` (
  `id` int(10) UNSIGNED NOT NULL,
  `nama` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `kategorigs`
--

INSERT INTO `kategorigs` (`id`, `nama`, `created_at`, `updated_at`) VALUES
(1, 'Galeri Wisata', '2018-10-23 00:14:45', '2018-10-23 00:14:45'),
(2, 'Galeri Haji', '2018-10-23 00:14:57', '2018-10-23 00:14:57'),
(4, 'Galeri Umroh', '2018-10-24 01:38:46', '2018-10-24 01:38:46');

-- --------------------------------------------------------

--
-- Table structure for table `kategoris`
--

CREATE TABLE `kategoris` (
  `id` int(10) UNSIGNED NOT NULL,
  `nama_kategori` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `kategoris`
--

INSERT INTO `kategoris` (`id`, `nama_kategori`, `slug`, `created_at`, `updated_at`) VALUES
(1, 'Umrah', 'umrah', '2018-10-22 01:21:55', '2018-10-22 01:21:55');

-- --------------------------------------------------------

--
-- Table structure for table `kategoriws`
--

CREATE TABLE `kategoriws` (
  `id` int(10) UNSIGNED NOT NULL,
  `nama_kategori` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `kategoriws`
--

INSERT INTO `kategoriws` (`id`, `nama_kategori`, `slug`, `created_at`, `updated_at`) VALUES
(1, 'Wisata Muslim Domestik', 'wisata-muslim-domestik', '2018-10-21 23:51:31', '2018-10-21 23:51:31'),
(2, 'Wisata Muslim Internasional', 'wisata-muslim-internasional', '2018-10-22 03:26:17', '2018-10-22 03:26:17');

-- --------------------------------------------------------

--
-- Table structure for table `kontaks`
--

CREATE TABLE `kontaks` (
  `id` int(10) UNSIGNED NOT NULL,
  `telp` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `alamat` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `jadwal` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `lokasis`
--

CREATE TABLE `lokasis` (
  `id` int(10) UNSIGNED NOT NULL,
  `foto` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nama` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `harga` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `hotel` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `keterangan` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `kategoriw_id` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2018_09_07_085009_laratrust_setup_tables', 1),
(4, '2018_09_07_155126_create_kontaks_table', 1),
(5, '2018_09_17_070831_create_testimonis_table', 1),
(6, '2018_09_17_071441_create_faqs_table', 1),
(7, '2018_09_17_074928_create_jadwals_table', 1),
(8, '2018_09_17_085933_create_homes_table', 1),
(9, '2018_09_17_090220_create_tabungans_table', 1),
(10, '2018_09_20_183546_create_galerihomes_table', 1),
(11, '2018_09_20_183716_create_galmanumrohs_table', 1),
(12, '2018_09_20_183734_create_galmanhajis_table', 1),
(13, '2018_09_20_183752_create_galumregulers_table', 1),
(14, '2018_09_20_183806_create_galumpluses_table', 1),
(15, '2018_09_20_183834_create_galerihajis_table', 1),
(16, '2018_09_20_183842_create_galeriwisatas_table', 1),
(17, '2018_09_27_131511_create_kategoris_table', 1),
(18, '2018_09_27_131515_create_beritas_table', 1),
(19, '2018_09_28_064440_create_profils_table', 1),
(20, '2018_09_28_101330_create_kategories_table', 1),
(21, '2018_09_28_101353_create_umrohs_table', 1),
(22, '2018_09_30_022528_create_kategorias_table', 1),
(23, '2018_09_30_022736_create_hajis_table', 1),
(24, '2018_09_30_052558_create_kategoriws_table', 1),
(25, '2018_09_30_052651_create_wisatas_table', 1),
(26, '2018_10_12_015228_create_daftars_table', 1),
(27, '2018_10_12_172455_create_youtubes_table', 1),
(28, '2018_10_12_182808_create_daftarhajis_table', 1),
(29, '2018_10_12_183113_create_daftartabungans_table', 1),
(30, '2018_10_15_064447_create_lokasis_table', 1),
(31, '2018_10_16_073218_create_jadwalumrohs_table', 1),
(32, '2018_10_16_073233_create_jadwalhajis_table', 1),
(33, '2018_10_16_082919_create_promos_table', 1),
(34, '2018_10_17_123407_create_kategorigs_table', 1),
(35, '2018_10_17_123442_create_galeris_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `permissions`
--

CREATE TABLE `permissions` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `display_name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `permission_role`
--

CREATE TABLE `permission_role` (
  `permission_id` int(10) UNSIGNED NOT NULL,
  `role_id` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `permission_user`
--

CREATE TABLE `permission_user` (
  `permission_id` int(10) UNSIGNED NOT NULL,
  `user_id` int(10) UNSIGNED NOT NULL,
  `user_type` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `profils`
--

CREATE TABLE `profils` (
  `id` int(10) UNSIGNED NOT NULL,
  `judul` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `keterangan` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `tentang` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `profils`
--

INSERT INTO `profils` (`id`, `judul`, `keterangan`, `tentang`, `created_at`, `updated_at`) VALUES
(1, 'NABATOUR', 'NABATOUR', 'NABATOUR', '2018-10-21 08:45:37', '2018-10-21 08:45:37');

-- --------------------------------------------------------

--
-- Table structure for table `promos`
--

CREATE TABLE `promos` (
  `id` int(10) UNSIGNED NOT NULL,
  `foto` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `promos`
--

INSERT INTO `promos` (`id`, `foto`, `created_at`, `updated_at`) VALUES
(1, 'fMFHWu_Banner 1-04.jpg', '2018-10-22 00:35:47', '2018-10-22 00:35:47'),
(2, 'Ytgazj_Banner 1-03.jpg', '2018-10-22 00:36:37', '2018-10-22 00:36:37');

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

CREATE TABLE `roles` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `display_name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `roles`
--

INSERT INTO `roles` (`id`, `name`, `display_name`, `description`, `created_at`, `updated_at`) VALUES
(1, 'admin', 'admin', NULL, '2018-10-21 08:45:37', '2018-10-21 08:45:37');

-- --------------------------------------------------------

--
-- Table structure for table `role_user`
--

CREATE TABLE `role_user` (
  `role_id` int(10) UNSIGNED NOT NULL,
  `user_id` int(10) UNSIGNED NOT NULL,
  `user_type` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `role_user`
--

INSERT INTO `role_user` (`role_id`, `user_id`, `user_type`) VALUES
(1, 1, 'App\\User');

-- --------------------------------------------------------

--
-- Table structure for table `tabungans`
--

CREATE TABLE `tabungans` (
  `id` int(10) UNSIGNED NOT NULL,
  `judul` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `keterangan` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `keunggulan` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `syarat` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `logo` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `note` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tabungans`
--

INSERT INTO `tabungans` (`id`, `judul`, `keterangan`, `keunggulan`, `syarat`, `logo`, `note`, `created_at`, `updated_at`) VALUES
(1, 'Tabungan Umrohh', '<!DOCTYPE html>\r\n<html>\r\n<head>\r\n</head>\r\n<body>\r\n<p><em>\"Bulatkan niat dan mulailah menabung, waktu dan kesempatan biarlah Allah yang menentukan. Semoga kita semua dimampukan oleh Allah untuk berkunjung kerumahNya di Baitullah. Kini kita dapat mempersiapkan umroh dengan lebih terencana. Assalaam memudahkan kita mewujudkannya melalui tabungan Umroh Assalaam.\"</em></p>\r\n</body>\r\n</html>', '<!DOCTYPE html>\r\n<html>\r\n<head>\r\n</head>\r\n<body>\r\n<p><strong>keunggulannya Tabungan Umrah</strong></p>\r\n<p>Bekerjasama dengan Bank</p>\r\n<p>Buku tabungan dipegang oleh Jemaah, setoran dapat dilakukan secara tunai atau transfer bank</p>\r\n<p>Nilai setoran sesuai kemampuan</p>\r\n<p>Bebas biaya administrasi bulanan</p>\r\n<ul>\r\n<li>Aman</li>\r\n<li>Mudah</li>\r\n<li>Fleksibel</li>\r\n<li>Bebas</li>\r\n</ul>\r\n</body>\r\n</html>', '<!DOCTYPE html>\r\n<html>\r\n<head>\r\n</head>\r\n<body>\r\n<p><strong>Persyaratan</strong></p>\r\n<ul>\r\n<li>Mengisi formulir tabungan Umroh</li>\r\n</ul>\r\n<ul>\r\n<li>Menyerahkan fotocopy SIM/KTP yang masih berlaku</li>\r\n<li>Setoran awal minimal Rp 500.000,-</li>\r\n</ul>\r\n</body>\r\n</html>', '34fd50e767c531a60b2e8cd9655c821e.jpeg', '<!DOCTYPE html>\r\n<html>\r\n<head>\r\n</head>\r\n<body>\r\n<p><em><strong>*Harga paket sudah termasuk biaya lokal<br />Total biaya Umrah ini hanya perkiraan. Sebelum tanggal keberangkatan, biaya akan dihitung lagi menyesuaikan harga paket umrah dan nilai tukar dolar yang berlaku pada tahun keberangkatan umrah yang dipilih jamaah.</strong></em></p>\r\n</body>\r\n</html>', '2018-10-22 03:25:03', '2018-10-23 23:28:23');

-- --------------------------------------------------------

--
-- Table structure for table `testimonis`
--

CREATE TABLE `testimonis` (
  `id` int(10) UNSIGNED NOT NULL,
  `logo` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `keterangan` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `nama` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `testimonis`
--

INSERT INTO `testimonis` (`id`, `logo`, `keterangan`, `nama`, `created_at`, `updated_at`) VALUES
(1, '39caaa58c41955f10578736766a9a5af.jpg', '<!DOCTYPE html>\r\n<html>\r\n<head>\r\n</head>\r\n<body>\r\n<p>lhamdulillah, wasyukurillah Tabarakallah beruntung sekali kami bisa bergabung untuk menunaikan ibadah umrah dengan Naba Tours Assalaam. Bahwa dari sejak manasik sampai ke pelaksanaan ibadahnya di sana, kami selalu dibimbing dan diarahkan oleh para pembimbing secara gamblang, jelas dan hati-hati. Sehingga kami semua telah mendapatkan kenikmatan dan kekhusyuan dalam pelaksanaan ibadah umrahnya.</p>\r\n</body>\r\n</html>', 'Rina Yulianitaa', '2018-10-22 03:04:53', '2018-10-23 23:22:08'),
(2, 'IZoser_2.jpg', '<!DOCTYPE html>\r\n<html>\r\n<head>\r\n</head>\r\n<body>\r\n<p>Alhamdulillah, saya puas dengan pelayanan umrah Nur Assalaam. Semoga Allah mengabulkan doa saya bisa berumrah lagi/berhaji dengan Nur Assalaam. Jazakallohu khoiron katsiran.</p>\r\n</body>\r\n</html>', 'Melly', '2018-10-22 03:05:34', '2018-10-22 03:05:34'),
(3, 'PGwZWP_3.jpg', '<!DOCTYPE html>\r\n<html>\r\n<head>\r\n</head>\r\n<body>\r\n<p>Umrahnya sangat berkesan sekali. Sampai-sampai Ibu ingin kembali ke sana. Insya Allah kalau ada rizki ibu mau ikut lagi. Apalagi pemandunya Ust. Romdon sangat baik sekali</p>\r\n</body>\r\n</html>', 'Dianny', '2018-10-22 03:06:04', '2018-10-22 03:06:04');

-- --------------------------------------------------------

--
-- Table structure for table `umrohs`
--

CREATE TABLE `umrohs` (
  `id` int(10) UNSIGNED NOT NULL,
  `judul` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `isi` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `kategorie_id` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `umrohs`
--

INSERT INTO `umrohs` (`id`, `judul`, `isi`, `slug`, `kategorie_id`, `created_at`, `updated_at`) VALUES
(1, 'Umrah Reguler', '<!DOCTYPE html>\r\n<html>\r\n<head>\r\n</head>\r\n<body>\r\n<div class=\"container\">\r\n<p style=\"margin-left: 21.3pt;\">Umrah reguler adalah umroh dengan Program Perjalanan ke tiga kota yaitu Makkah, Madinah, dan Jeddah.</p>\r\n<p style=\"margin-left: 21.3pt;\">Lama perjalanan umroh reguler ini adalah 9 hari.</p>\r\n<p style=\"margin-left: 21.3pt;\">Jamaah akan mendapatkan fasilitas pelaksanaan ibadah umroh sebanyak 3 kali (optional) dengan bimbingan penuh dari pembimbing Umroh berpengalaman.</p>\r\n<p style=\"margin-left: 21.3pt;\">Selain melaksanakan ibadah umroh, Jamaah juga akan mendapatkan fasilitas city tour kota Mekah, Madinah dan Jedah, mengunjungi berbagai tempat bersejarah Islam.</p>\r\n<p style=\"margin-left: 21.3pt;\">Nabatour juga memberikan fasilitas plus berupa extra program yaitu ziarah ke Gua Hiro tempat Nabi Muhammad saw pertama kali menerima wahyu.</p>\r\n<p style=\"margin-left: 21.3pt;\">Umroh Reguler Nabatour menggunakan pesawat Saudi Arabia Airline, dengan direct flight ke Jeddah atau Madinah tanpa transit sehingga Jamaah lebih nyaman selama perjalanan.</p>\r\n<p style=\"margin-left: 21.3pt;\">Kami memiliki 3 jenis paket Umroh Reguler yang perbedaannya adalah pada tipe hotel yang digunakan dan jarak&nbsp; hotel ke masjidil haram.</p>\r\n</div>\r\n</body>\r\n</html>', 'umrah-reguler', 1, '2018-10-22 03:17:07', '2018-10-22 03:17:07'),
(2, 'Umrah Pluss', '<!DOCTYPE html>\r\n<html>\r\n<head>\r\n</head>\r\n<body>\r\n<p>Umrah Plus adalah umroh reguler yang dilanjutkan berziarah ke negara-negara lain sesuai keinginan jamaah, antara lain negara-negara seperti : Istanbul Turki, Mesir, Aqso, Yordania, Eropa Barat, Spanyol, Dubai dll.</p>\r\n</body>\r\n</html>', 'umrah-pluss', 2, '2018-10-22 03:17:39', '2018-10-23 23:26:29'),
(3, 'Umrah By Request', '<!DOCTYPE html>\r\n<html>\r\n<head>\r\n</head>\r\n<body>\r\n<p>Ingin berangkat umroh bersama keluarga Anda?</p>\r\n<p>Pilih <strong>Paket Umroh By Request</strong> ini dan Anda dapat berangkat umroh dengan lebih privasi bersama keluarga Anda.</p>\r\n<p>Dengan paket ini Anda dapat menentukan jadwal keberangkatan, lama perjalanan, pilihan penerbangan, dan akomodasi yang diinginkan.</p>\r\n<p>Apakah keunggulannya ?</p>\r\n<ol>\r\n<li>Jadwal keberangkatan fleksible sesuai keinginan.</li>\r\nAnda dapat menentukan waktu perjalanan umroh anda sendiri, baik tanggal keberangkatan maupun lama perjalanan umroh dan tanggal kepulangan.\r\n<li>Pasti Berangkat. Tidak adanya minimum kuota di Paket Umroh By Request ini, membuat keberangkatan anda tidak menunggu terpenuhinya kuota jamaah Umroh. Bahkan 2 orang pun Umroh dapat terlaksana, Insya Allah.</li>\r\n<li>Akomodasi sesuai keinginan. Dengan memilih paket Umroh By Request ini, Hotel Makkah dan Madinah dapat anda sesuaikan</li>\r\n<li>Berangkat sendiri. Ingin berangkat tanpa Tour Leader, karena anda sudah terbiasa? Dengan memilih paket Umroh By Request ini, tanpa pendamping dapat langsung berangkat Umroh</li>\r\n<li>Direkomendasikan bagi Anda yang akan bersama keluarga atau Perusahaan</li>\r\n</ol>\r\n</body>\r\n</html>', 'umrah-by-request', 3, '2018-10-22 03:18:23', '2018-10-22 03:18:23');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'admin', 'nabatour@gmail.com', '$2y$10$oKlK1gKy0xtLy/OOt/kNGe2oClSWur2yFieBphIe1hchnAXpASJjW', 'zlx2dmnkx8XQ1bmQbPwcePkpks08jl3v2uY1sLONDYjdb6AvRgyxhB7Jeesk', '2018-10-21 08:45:37', '2018-10-21 08:45:37');

-- --------------------------------------------------------

--
-- Table structure for table `wisatas`
--

CREATE TABLE `wisatas` (
  `id` int(10) UNSIGNED NOT NULL,
  `judul` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `isi` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `kategoriw_id` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `wisatas`
--

INSERT INTO `wisatas` (`id`, `judul`, `isi`, `slug`, `kategoriw_id`, `created_at`, `updated_at`) VALUES
(1, 'Wisata Muslim Domestikk', '<!DOCTYPE html>\r\n<html>\r\n<head>\r\n</head>\r\n<body>\r\n<p>Nabatour melayani perjalanan wisata muslim baik domestik maupun internasional. Untuk anda yang ingin mengetahui perkembangan Islam di Indonesia, dapat memilih wisata muslim domestik yang akan mengantarkan Anda berziarah ke berbagai tempat bersejarah Islam di Indonesiaa</p>\r\n</body>\r\n</html>', 'wisata-muslim-domestikk', 1, '2018-10-21 23:52:33', '2018-10-24 01:26:42'),
(2, 'Wisata Muslim Internasional', '<!DOCTYPE html>\r\n<html>\r\n<head>\r\n</head>\r\n<body>\r\n<p>Bagi anda yang ingin perkembangan Islam di Mancanegara, dapat memilih paket wisata muslim Internasional dan memilih negara destinasi wisata sesuai keinginan anda, seperti Mesir, Turki, China, Malaysia dan negara-negara berpenduduk Muslim lainnya. Kami akan memfasilitasi anda dengan akomodasi yang nyaman, makanan halal dan tempat beribadah selama perjalanan</p>\r\n</body>\r\n</html>', 'wisata-muslim-internasional', 2, '2018-10-22 03:26:45', '2018-10-22 03:26:45');

-- --------------------------------------------------------

--
-- Table structure for table `youtubes`
--

CREATE TABLE `youtubes` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `url` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `youtubes`
--

INSERT INTO `youtubes` (`id`, `title`, `url`, `created_at`, `updated_at`) VALUES
(1, 'Umroh', 'AphLxSGuOwQ', '2018-10-22 03:51:26', '2018-10-22 03:51:26'),
(2, 'nabatour', 'TdjmxWJgOyI', '2018-10-22 03:51:51', '2018-10-22 03:51:51');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `beritas`
--
ALTER TABLE `beritas`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `daftarhajis`
--
ALTER TABLE `daftarhajis`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `daftars`
--
ALTER TABLE `daftars`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `daftartabungans`
--
ALTER TABLE `daftartabungans`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `faqs`
--
ALTER TABLE `faqs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `galerihajis`
--
ALTER TABLE `galerihajis`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `galerihomes`
--
ALTER TABLE `galerihomes`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `galeris`
--
ALTER TABLE `galeris`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `galeriwisatas`
--
ALTER TABLE `galeriwisatas`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `galmanhajis`
--
ALTER TABLE `galmanhajis`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `galmanumrohs`
--
ALTER TABLE `galmanumrohs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `galumpluses`
--
ALTER TABLE `galumpluses`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `galumregulers`
--
ALTER TABLE `galumregulers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `hajis`
--
ALTER TABLE `hajis`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `homes`
--
ALTER TABLE `homes`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `jadwalhajis`
--
ALTER TABLE `jadwalhajis`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `jadwals`
--
ALTER TABLE `jadwals`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `jadwalumrohs`
--
ALTER TABLE `jadwalumrohs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `kategorias`
--
ALTER TABLE `kategorias`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `kategories`
--
ALTER TABLE `kategories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `kategorigs`
--
ALTER TABLE `kategorigs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `kategoris`
--
ALTER TABLE `kategoris`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `kategoriws`
--
ALTER TABLE `kategoriws`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `kontaks`
--
ALTER TABLE `kontaks`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `lokasis`
--
ALTER TABLE `lokasis`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `permissions`
--
ALTER TABLE `permissions`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `permissions_name_unique` (`name`);

--
-- Indexes for table `permission_role`
--
ALTER TABLE `permission_role`
  ADD PRIMARY KEY (`permission_id`,`role_id`),
  ADD KEY `permission_role_role_id_foreign` (`role_id`);

--
-- Indexes for table `permission_user`
--
ALTER TABLE `permission_user`
  ADD PRIMARY KEY (`user_id`,`permission_id`,`user_type`),
  ADD KEY `permission_user_permission_id_foreign` (`permission_id`);

--
-- Indexes for table `profils`
--
ALTER TABLE `profils`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `promos`
--
ALTER TABLE `promos`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `roles_name_unique` (`name`);

--
-- Indexes for table `role_user`
--
ALTER TABLE `role_user`
  ADD PRIMARY KEY (`user_id`,`role_id`,`user_type`),
  ADD KEY `role_user_role_id_foreign` (`role_id`);

--
-- Indexes for table `tabungans`
--
ALTER TABLE `tabungans`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `testimonis`
--
ALTER TABLE `testimonis`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `umrohs`
--
ALTER TABLE `umrohs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Indexes for table `wisatas`
--
ALTER TABLE `wisatas`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `youtubes`
--
ALTER TABLE `youtubes`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `beritas`
--
ALTER TABLE `beritas`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `daftarhajis`
--
ALTER TABLE `daftarhajis`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `daftars`
--
ALTER TABLE `daftars`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `daftartabungans`
--
ALTER TABLE `daftartabungans`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `faqs`
--
ALTER TABLE `faqs`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `galerihajis`
--
ALTER TABLE `galerihajis`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `galerihomes`
--
ALTER TABLE `galerihomes`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `galeris`
--
ALTER TABLE `galeris`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `galeriwisatas`
--
ALTER TABLE `galeriwisatas`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `galmanhajis`
--
ALTER TABLE `galmanhajis`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `galmanumrohs`
--
ALTER TABLE `galmanumrohs`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `galumpluses`
--
ALTER TABLE `galumpluses`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `galumregulers`
--
ALTER TABLE `galumregulers`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `hajis`
--
ALTER TABLE `hajis`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `homes`
--
ALTER TABLE `homes`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `jadwalhajis`
--
ALTER TABLE `jadwalhajis`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `jadwals`
--
ALTER TABLE `jadwals`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `jadwalumrohs`
--
ALTER TABLE `jadwalumrohs`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `kategorias`
--
ALTER TABLE `kategorias`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `kategories`
--
ALTER TABLE `kategories`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `kategorigs`
--
ALTER TABLE `kategorigs`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `kategoris`
--
ALTER TABLE `kategoris`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `kategoriws`
--
ALTER TABLE `kategoriws`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `kontaks`
--
ALTER TABLE `kontaks`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `lokasis`
--
ALTER TABLE `lokasis`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;

--
-- AUTO_INCREMENT for table `permissions`
--
ALTER TABLE `permissions`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `profils`
--
ALTER TABLE `profils`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `promos`
--
ALTER TABLE `promos`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tabungans`
--
ALTER TABLE `tabungans`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `testimonis`
--
ALTER TABLE `testimonis`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `umrohs`
--
ALTER TABLE `umrohs`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `wisatas`
--
ALTER TABLE `wisatas`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `youtubes`
--
ALTER TABLE `youtubes`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `permission_role`
--
ALTER TABLE `permission_role`
  ADD CONSTRAINT `permission_role_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `permission_role_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `permission_user`
--
ALTER TABLE `permission_user`
  ADD CONSTRAINT `permission_user_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `role_user`
--
ALTER TABLE `role_user`
  ADD CONSTRAINT `role_user_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

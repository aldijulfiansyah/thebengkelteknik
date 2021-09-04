-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 04, 2021 at 08:18 AM
-- Server version: 10.4.20-MariaDB
-- PHP Version: 8.0.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `crudmurni`
--

-- --------------------------------------------------------

--
-- Table structure for table `barang`
--

CREATE TABLE `barang` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama_barang` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `jumlah` bigint(20) NOT NULL,
  `client_pt` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nama_client` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `barang_keluar` bigint(20) NOT NULL,
  `sisakeluar` bigint(20) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `barang`
--

INSERT INTO `barang` (`id`, `nama_barang`, `jumlah`, `client_pt`, `nama_client`, `barang_keluar`, `sisakeluar`, `created_at`, `updated_at`) VALUES
(1, 'eos', 540, 'PT Jailani Wibowo (Persero) Tbk', 'Ibrani', 0, 0, '2021-09-03 02:50:47', '2021-09-03 02:50:47'),
(2, 'doloribus', 436, 'Perum Wastuti Prastuti', 'Rudi', 0, 0, '2021-09-03 02:50:47', '2021-09-03 02:50:47'),
(3, 'et', 561, 'Perum Manullang', 'Cakrawala', 0, 0, '2021-09-03 02:50:47', '2021-09-03 02:50:47'),
(4, 'amet', 860, 'PT Utama Sihombing (Persero) Tbk', 'Kawaca', 0, 0, '2021-09-03 02:50:47', '2021-09-03 02:50:47'),
(5, 'aut', 63, 'CV Tarihoran Halimah Tbk', 'Candra', 0, 0, '2021-09-03 02:50:47', '2021-09-03 02:50:47'),
(6, 'aut', 89, 'CV Simanjuntak', 'Daniswara', 0, 0, '2021-09-03 02:50:47', '2021-09-03 02:50:47'),
(7, 'dolorem', 737, 'UD Pangestu Tbk', 'Dirja', 0, 0, '2021-09-03 02:50:47', '2021-09-03 02:50:47'),
(8, 'explicabo', 532, 'CV Suryatmi Maryati', 'Koko', 0, 0, '2021-09-03 02:50:47', '2021-09-03 02:50:47'),
(9, 'et', 331, 'PT Nugroho', 'Wawan', 0, 0, '2021-09-03 02:50:48', '2021-09-03 02:50:48'),
(10, 'saepe', 883, 'Perum Siregar Tbk', 'Kenzie', 0, 0, '2021-09-03 02:50:48', '2021-09-03 02:50:48'),
(11, 'quaerat', 588, 'PT Hakim', 'Cahya', 0, 0, '2021-09-03 02:50:48', '2021-09-03 02:50:48'),
(12, 'minima', 197, 'PD Sihombing Nasyidah', 'Caket', 0, 0, '2021-09-03 02:50:48', '2021-09-03 02:50:48'),
(13, 'consequuntur', 78, 'Perum Simbolon Irawan', 'Wardi', 0, 0, '2021-09-03 02:50:48', '2021-09-03 02:50:48'),
(14, 'velit', 890, 'UD Rajasa Kuswandari Tbk', 'Rahmat', 0, 0, '2021-09-03 02:50:48', '2021-09-03 02:50:48'),
(15, 'aut', 641, 'PT Nashiruddin Hutasoit Tbk', 'Lukman', 0, 0, '2021-09-03 02:50:48', '2021-09-03 02:50:48'),
(16, 'molestiae', 693, 'UD Hidayat Wijayanti (Persero) Tbk', 'Prayitna', 0, 0, '2021-09-03 02:50:48', '2021-09-03 02:50:48'),
(17, 'rem', 872, 'PT Nasyiah Tbk', 'Heru', 0, 0, '2021-09-03 02:50:48', '2021-09-03 02:50:48'),
(18, 'et', 310, 'PT Anggriawan', 'Ivan', 0, 0, '2021-09-03 02:50:48', '2021-09-03 02:50:48'),
(19, 'sint', 997, 'UD Budiyanto Tbk', 'Gilang', 0, 0, '2021-09-03 02:50:48', '2021-09-03 02:50:48'),
(20, 'veniam', 59, 'UD Hassanah (Persero) Tbk', 'Adikara', 0, 0, '2021-09-03 02:50:48', '2021-09-03 02:50:48'),
(21, 'est', 485, 'Perum Haryanti Tbk', 'Kunthara', 0, 0, '2021-09-03 02:50:48', '2021-09-03 02:50:48'),
(22, 'labore', 600, 'Perum Nashiruddin', 'Gaman', 0, 0, '2021-09-03 02:50:48', '2021-09-03 02:50:48'),
(23, 'in', 209, 'CV Kuswandari', 'Umay', 0, 0, '2021-09-03 02:50:48', '2021-09-03 02:50:48'),
(24, 'qui', 866, 'PT Rahmawati', 'Akarsana', 0, 0, '2021-09-03 02:50:48', '2021-09-03 02:50:48'),
(25, 'voluptatem', 96, 'UD Mansur', 'Margana', 0, 0, '2021-09-03 02:50:48', '2021-09-03 02:50:48'),
(26, 'quia', 965, 'UD Purnawati Tbk', 'Slamet', 0, 0, '2021-09-03 02:50:48', '2021-09-03 02:50:48'),
(27, 'voluptas', 143, 'CV Latupono', 'Malik', 0, 0, '2021-09-03 02:50:48', '2021-09-03 02:50:48'),
(28, 'eos', 689, 'PD Wijayanti Haryanti', 'Balapati', 0, 0, '2021-09-03 02:50:48', '2021-09-03 02:50:48'),
(29, 'harum', 893, 'PD Astuti (Persero) Tbk', 'Mumpuni', 0, 0, '2021-09-03 02:50:48', '2021-09-03 02:50:48'),
(30, 'et', 334, 'PD Pertiwi (Persero) Tbk', 'Taswir', 0, 0, '2021-09-03 02:50:48', '2021-09-03 02:50:48'),
(31, 'in', 473, 'CV Laksmiwati Dongoran (Persero) Tbk', 'Luis', 0, 0, '2021-09-03 02:50:48', '2021-09-03 02:50:48'),
(32, 'quo', 270, 'PT Habibi', 'Nyana', 0, 0, '2021-09-03 02:50:48', '2021-09-03 02:50:48'),
(33, 'quas', 971, 'PD Fujiati (Persero) Tbk', 'Warta', 0, 0, '2021-09-03 02:50:48', '2021-09-03 02:50:48'),
(34, 'molestiae', 523, 'CV Nugroho', 'Hasta', 0, 0, '2021-09-03 02:50:48', '2021-09-03 02:50:48'),
(35, 'quo', 139, 'PT Suryono', 'Johan', 0, 0, '2021-09-03 02:50:48', '2021-09-03 02:50:48'),
(36, 'consequatur', 662, 'PT Mandasari Nashiruddin', 'Eko', 0, 0, '2021-09-03 02:50:48', '2021-09-03 02:50:48'),
(37, 'beatae', 566, 'UD Hakim Wijayanti (Persero) Tbk', 'Elvin', 0, 0, '2021-09-03 02:50:48', '2021-09-03 02:50:48'),
(38, 'fuga', 58, 'PD Halimah Yolanda', 'Karna', 0, 0, '2021-09-03 02:50:48', '2021-09-03 02:50:48'),
(39, 'est', 18, 'PD Wibisono Simanjuntak', 'Yusuf', 0, 0, '2021-09-03 02:50:48', '2021-09-03 02:50:48'),
(40, 'atque', 731, 'CV Hardiansyah Wahyudin (Persero) Tbk', 'Bakijan', 0, 0, '2021-09-03 02:50:48', '2021-09-03 02:50:48'),
(41, 'quae', 986, 'CV Suryatmi', 'Tirta', 0, 0, '2021-09-03 02:50:48', '2021-09-03 02:50:48'),
(42, 'nisi', 581, 'PD Palastri Handayani', 'Cakrawala', 0, 0, '2021-09-03 02:50:48', '2021-09-03 02:50:48'),
(43, 'incidunt', 392, 'Perum Utama (Persero) Tbk', 'Raditya', 0, 0, '2021-09-03 02:50:48', '2021-09-03 02:50:48'),
(44, 'vero', 783, 'CV Latupono', 'Cagak', 0, 0, '2021-09-03 02:50:48', '2021-09-03 02:50:48'),
(45, 'sit', 112, 'CV Setiawan Uyainah', 'Darmanto', 0, 0, '2021-09-03 02:50:49', '2021-09-03 02:50:49'),
(46, 'non', 173, 'PT Maryati (Persero) Tbk', 'Oman', 0, 0, '2021-09-03 02:50:49', '2021-09-03 02:50:49'),
(47, 'sunt', 840, 'PD Saragih Suryono (Persero) Tbk', 'Rendy', 0, 0, '2021-09-03 02:50:49', '2021-09-03 02:50:49'),
(48, 'veritatis', 902, 'CV Waskita (Persero) Tbk', 'Taufan', 0, 0, '2021-09-03 02:50:49', '2021-09-03 02:50:49'),
(49, 'est', 714, 'PD Latupono Usada (Persero) Tbk', 'Bakiono', 0, 0, '2021-09-03 02:50:49', '2021-09-03 02:50:49'),
(50, 'et', 771, 'CV Wasita Mayasari Tbk', 'Virman', 0, 0, '2021-09-03 02:50:49', '2021-09-03 02:50:49'),
(51, 'numquam', 547, 'CV Irawan Habibi', 'Kasim', 0, 0, '2021-09-03 02:50:49', '2021-09-03 02:50:49'),
(52, 'ut', 81, 'PT Safitri Puspita', 'Teddy', 0, 0, '2021-09-03 02:50:49', '2021-09-03 02:50:49'),
(53, 'est', 289, 'Perum Rajata Wibowo Tbk', 'Carub', 0, 0, '2021-09-03 02:50:49', '2021-09-03 02:50:49'),
(54, 'fugiat', 69, 'PT Saputra Yuliarti', 'Unggul', 0, 0, '2021-09-03 02:50:49', '2021-09-03 02:50:49'),
(55, 'repellat', 420, 'PD Dabukke Hariyah (Persero) Tbk', 'Utama', 0, 0, '2021-09-03 02:50:49', '2021-09-03 02:50:49'),
(56, 'quibusdam', 328, 'UD Budiyanto Tbk', 'Rama', 0, 0, '2021-09-03 02:50:49', '2021-09-03 02:50:49'),
(57, 'eos', 384, 'CV Hardiansyah Usamah', 'Paiman', 0, 0, '2021-09-03 02:50:49', '2021-09-03 02:50:49'),
(58, 'reiciendis', 240, 'PD Purnawati Tbk', 'Alambana', 0, 0, '2021-09-03 02:50:49', '2021-09-03 02:50:49'),
(59, 'et', 330, 'Perum Wijayanti Pratama', 'Leo', 0, 0, '2021-09-03 02:50:49', '2021-09-03 02:50:49'),
(60, 'suscipit', 903, 'PT Lailasari', 'Marsito', 0, 0, '2021-09-03 02:50:49', '2021-09-03 02:50:49'),
(61, 'qui', 284, 'PT Yulianti Gunarto Tbk', 'Maryadi', 0, 0, '2021-09-03 02:50:49', '2021-09-03 02:50:49'),
(62, 'dolores', 229, 'CV Mardhiyah Gunarto Tbk', 'Aditya', 0, 0, '2021-09-03 02:50:49', '2021-09-03 02:50:49'),
(63, 'omnis', 718, 'PD Mandasari Hariyah', 'Mahmud', 0, 0, '2021-09-03 02:50:49', '2021-09-03 02:50:49'),
(64, 'commodi', 108, 'Perum Mandasari Tbk', 'Radit', 0, 0, '2021-09-03 02:50:49', '2021-09-03 02:50:49'),
(65, 'ut', 821, 'Perum Haryanto Sihombing', 'Cakrajiya', 0, 0, '2021-09-03 02:50:50', '2021-09-03 02:50:50'),
(66, 'voluptatem', 331, 'PT Wasita Nugroho (Persero) Tbk', 'Lasmanto', 0, 0, '2021-09-03 02:50:50', '2021-09-03 02:50:50'),
(67, 'enim', 202, 'CV Latupono Prasasta', 'Dirja', 0, 0, '2021-09-03 02:50:50', '2021-09-03 02:50:50'),
(68, 'quidem', 12, 'CV Novitasari Hutasoit Tbk', 'Galang', 0, 0, '2021-09-03 02:50:50', '2021-09-03 02:50:50'),
(69, 'dignissimos', 148, 'PD Saptono Halim', 'Dwi', 0, 0, '2021-09-03 02:50:50', '2021-09-03 02:50:50'),
(70, 'autem', 799, 'CV Mansur (Persero) Tbk', 'Kunthara', 0, 0, '2021-09-03 02:50:50', '2021-09-03 02:50:50'),
(71, 'maiores', 323, 'UD Utama', 'Nyana', 0, 0, '2021-09-03 02:50:50', '2021-09-03 02:50:50'),
(72, 'blanditiis', 289, 'PT Mardhiyah Natsir Tbk', 'Jono', 0, 0, '2021-09-03 02:50:50', '2021-09-03 02:50:50'),
(73, 'id', 184, 'CV Mustofa (Persero) Tbk', 'Cakrajiya', 0, 0, '2021-09-03 02:50:50', '2021-09-03 02:50:50'),
(74, 'vel', 695, 'PD Zulkarnain Dongoran', 'Pandu', 0, 0, '2021-09-03 02:50:50', '2021-09-03 02:50:50'),
(75, 'eveniet', 656, 'CV Saptono Tbk', 'Wahyu', 0, 0, '2021-09-03 02:50:50', '2021-09-03 02:50:50'),
(76, 'ut', 604, 'CV Adriansyah Suryatmi', 'Ajimin', 0, 0, '2021-09-03 02:50:50', '2021-09-03 02:50:50'),
(77, 'quo', 986, 'CV Hidayat Andriani', 'Balangga', 0, 0, '2021-09-03 02:50:50', '2021-09-03 02:50:50'),
(79, 'ducimus', 790, 'CV Riyanti (Persero) Tbk', 'Sabri', 0, 0, '2021-09-03 02:50:50', '2021-09-03 02:50:50'),
(80, 'qui', 852, 'CV Oktaviani Hassanah Tbk', 'Harimurti', 0, 0, '2021-09-03 02:50:50', '2021-09-03 02:50:50'),
(81, 'quod', 884, 'UD Anggraini (Persero) Tbk', 'Eja', 0, 0, '2021-09-03 02:50:50', '2021-09-03 02:50:50'),
(82, 'enim', 276, 'UD Adriansyah', 'Raden', 0, 0, '2021-09-03 02:50:50', '2021-09-03 02:50:50'),
(83, 'nobis', 387, 'PD Situmorang', 'Harjasa', 0, 0, '2021-09-03 02:50:50', '2021-09-03 02:50:50'),
(84, 'rerum', 193, 'PD Handayani', 'Anggabaya', 0, 0, '2021-09-03 02:50:50', '2021-09-03 02:50:50'),
(85, 'aut', 452, 'UD Jailani (Persero) Tbk', 'Darimin', 0, 0, '2021-09-03 02:50:50', '2021-09-03 02:50:50'),
(86, 'tempore', 422, 'PT Nugroho Gunawan', 'Bakiman', 0, 0, '2021-09-03 02:50:50', '2021-09-03 02:50:50'),
(87, 'mollitia', 1, 'PD Nainggolan Usamah', 'Kambali', 0, 0, '2021-09-03 02:50:50', '2021-09-03 02:50:50'),
(88, 'odit', 958, 'PT Widiastuti Usamah Tbk', 'Purwa', 0, 0, '2021-09-03 02:50:50', '2021-09-03 02:50:50'),
(89, 'fugit', 144, 'UD Andriani Wibisono Tbk', 'Legawa', 0, 0, '2021-09-03 02:50:50', '2021-09-03 02:50:50'),
(90, 'hic', 943, 'CV Novitasari Tbk', 'Candra', 0, 0, '2021-09-03 02:50:50', '2021-09-03 02:50:50'),
(91, 'illo', 632, 'PT Sihotang (Persero) Tbk', 'Upik', 0, 0, '2021-09-03 02:50:50', '2021-09-03 02:50:50'),
(92, 'consequatur', 947, 'CV Puspasari', 'Lukman', 0, 0, '2021-09-03 02:50:50', '2021-09-03 02:50:50'),
(93, 'in', 926, 'CV Thamrin Hartati Tbk', 'Limar', 0, 0, '2021-09-03 02:50:50', '2021-09-03 02:50:50'),
(94, 'non', 69, 'CV Hakim (Persero) Tbk', 'Digdaya', 0, 0, '2021-09-03 02:50:50', '2021-09-03 02:50:50'),
(95, 'qui', 314, 'CV Thamrin Waluyo Tbk', 'Emas', 0, 0, '2021-09-03 02:50:50', '2021-09-03 02:50:50'),
(96, 'sunt', 958, 'CV Waluyo', 'Luwes', 0, 0, '2021-09-03 02:50:50', '2021-09-03 02:50:50'),
(97, 'libero', 596, 'CV Yulianti Narpati Tbk', 'Pandu', 0, 0, '2021-09-03 02:50:50', '2021-09-03 02:50:50'),
(98, 'amet', 503, 'PT Simbolon', 'Lasmanto', 0, 0, '2021-09-03 02:50:50', '2021-09-03 02:50:50'),
(99, 'nam', 75, 'PT Sinaga', 'Marsito', 0, 0, '2021-09-03 02:50:50', '2021-09-03 02:50:50'),
(100, 'aut', 9, 'CV Maryadi (Persero) Tbk', 'Mumpuni', 0, 0, '2021-09-03 02:50:50', '2021-09-03 02:50:50'),
(101, 'mollitia', 4, 'PT Halimah', 'Tirtayasa', 0, 0, '2021-09-03 02:50:51', '2021-09-03 02:50:51'),
(102, 'placeat', 800, 'PD Dabukke Oktaviani', 'Gading', 0, 0, '2021-09-03 02:50:51', '2021-09-03 02:50:51'),
(103, 'quis', 845, 'CV Farida Irawan Tbk', 'Vega', 0, 0, '2021-09-03 02:50:51', '2021-09-03 02:50:51'),
(104, 'aut', 307, 'CV Mangunsong Sudiati', 'Aslijan', 0, 0, '2021-09-03 02:50:51', '2021-09-03 02:50:51'),
(105, 'quasi', 466, 'Perum Simbolon Megantara Tbk', 'Galih', 0, 0, '2021-09-03 02:50:51', '2021-09-03 02:50:51'),
(106, 'ut', 784, 'PD Pudjiastuti Tbk', 'Rafi', 0, 0, '2021-09-03 02:50:51', '2021-09-03 02:50:51'),
(107, 'eos', 615, 'PT Laksita', 'Cakrawangsa', 0, 0, '2021-09-03 02:50:51', '2021-09-03 02:50:51'),
(108, 'eos', 70, 'PD Rahmawati', 'Warsita', 0, 0, '2021-09-03 02:50:51', '2021-09-03 02:50:51'),
(109, 'autem', 155, 'PD Wahyudin Tbk', 'Eluh', 0, 0, '2021-09-03 02:50:51', '2021-09-03 02:50:51'),
(110, 'dolores', 824, 'UD Nashiruddin Lailasari Tbk', 'Jatmiko', 0, 0, '2021-09-03 02:50:51', '2021-09-03 02:50:51'),
(111, 'aspernatur', 250, 'PT Maryadi (Persero) Tbk', 'Darsirah', 0, 0, '2021-09-03 02:50:51', '2021-09-03 02:50:51'),
(112, 'quasi', 756, 'Perum Lailasari', 'Xanana', 0, 0, '2021-09-03 02:50:51', '2021-09-03 02:50:51'),
(113, 'quia', 815, 'CV Haryanti (Persero) Tbk', 'Darman', 0, 0, '2021-09-03 02:50:51', '2021-09-03 02:50:51'),
(114, 'in', 287, 'PT Maulana', 'Hendri', 0, 0, '2021-09-03 02:50:51', '2021-09-03 02:50:51'),
(115, 'et', 770, 'PT Mustofa Pertiwi (Persero) Tbk', 'Saadat', 0, 0, '2021-09-03 02:50:51', '2021-09-03 02:50:51'),
(116, 'quia', 850, 'Perum Damanik Hutagalung', 'Hasan', 0, 0, '2021-09-03 02:50:51', '2021-09-03 02:50:51'),
(117, 'culpa', 602, 'CV Nasyiah', 'Lanjar', 0, 0, '2021-09-03 02:50:51', '2021-09-03 02:50:51'),
(118, 'numquam', 736, 'PT Astuti Budiman', 'Soleh', 0, 0, '2021-09-03 02:50:51', '2021-09-03 02:50:51'),
(119, 'quo', 924, 'PD Pradana Utami Tbk', 'Niyaga', 0, 0, '2021-09-03 02:50:51', '2021-09-03 02:50:51'),
(120, 'quos', 280, 'Perum Iswahyudi Hutagalung (Persero) Tbk', 'Marwata', 0, 0, '2021-09-03 02:50:51', '2021-09-03 02:50:51'),
(121, 'perspiciatis', 413, 'CV Zulaika Rahmawati Tbk', 'Irsad', 0, 0, '2021-09-03 02:50:51', '2021-09-03 02:50:51'),
(122, 'sit', 555, 'PT Aryani Nasyidah', 'Umar', 0, 0, '2021-09-03 02:50:51', '2021-09-03 02:50:51'),
(123, 'et', 808, 'PD Safitri Pradana', 'Dacin', 0, 0, '2021-09-03 02:50:51', '2021-09-03 02:50:51'),
(124, 'sit', 87, 'PT Saragih', 'Dirja', 0, 0, '2021-09-03 02:50:51', '2021-09-03 02:50:51'),
(125, 'consequatur', 121, 'Perum Hardiansyah Simanjuntak', 'Emin', 0, 0, '2021-09-03 02:50:51', '2021-09-03 02:50:51'),
(126, 'perspiciatis', 422, 'CV Dabukke Puspasari', 'Cakrabuana', 0, 0, '2021-09-03 02:50:51', '2021-09-03 02:50:51'),
(127, 'dignissimos', 831, 'UD Yuniar', 'Bagus', 0, 0, '2021-09-03 02:50:51', '2021-09-03 02:50:51'),
(128, 'qui', 944, 'UD Pratama Tbk', 'Mustika', 0, 0, '2021-09-03 02:50:51', '2021-09-03 02:50:51'),
(129, 'tempore', 873, 'PT Padmasari Firgantoro', 'Ade', 0, 0, '2021-09-03 02:50:51', '2021-09-03 02:50:51'),
(130, 'facere', 991, 'UD Utama', 'Nyana', 0, 0, '2021-09-03 02:50:51', '2021-09-03 02:50:51'),
(131, 'unde', 309, 'Perum Jailani Pudjiastuti', 'Eko', 0, 0, '2021-09-03 02:50:51', '2021-09-03 02:50:51'),
(132, 'cumque', 680, 'CV Rajasa (Persero) Tbk', 'Praba', 0, 0, '2021-09-03 02:50:51', '2021-09-03 02:50:51'),
(133, 'culpa', 952, 'PT Usada', 'Adika', 0, 0, '2021-09-03 02:50:51', '2021-09-03 02:50:51'),
(134, 'est', 504, 'UD Aryani Rahmawati (Persero) Tbk', 'Ajiono', 0, 0, '2021-09-03 02:50:51', '2021-09-03 02:50:51'),
(135, 'aperiam', 700, 'UD Haryanto Tbk', 'Kenes', 0, 0, '2021-09-03 02:50:51', '2021-09-03 02:50:51'),
(136, 'ea', 850, 'CV Pertiwi', 'Lanang', 0, 0, '2021-09-03 02:50:51', '2021-09-03 02:50:51'),
(137, 'in', 578, 'CV Pranowo (Persero) Tbk', 'Martana', 0, 0, '2021-09-03 02:50:51', '2021-09-03 02:50:51'),
(139, 'cupiditate', 241, 'CV Pudjiastuti Uwais', 'Danuja', 0, 0, '2021-09-03 02:50:51', '2021-09-03 02:50:51'),
(140, 'omnis', 269, 'UD Dabukke', 'Wawan', 0, 0, '2021-09-03 02:50:52', '2021-09-03 02:50:52'),
(141, 'eveniet', 962, 'PD Usamah (Persero) Tbk', 'Kayun', 0, 0, '2021-09-03 02:50:52', '2021-09-03 02:50:52'),
(142, 'iure', 614, 'PD Widodo Maulana (Persero) Tbk', 'Taswir', 0, 0, '2021-09-03 02:50:52', '2021-09-03 02:50:52'),
(143, 'quod', 226, 'Perum Aryani Saefullah (Persero) Tbk', 'Wakiman', 0, 0, '2021-09-03 02:50:52', '2021-09-03 02:50:52'),
(144, 'quis', 909, 'PT Zulaika Suartini', 'Galar', 0, 0, '2021-09-03 02:50:52', '2021-09-03 02:50:52'),
(145, 'distinctio', 105, 'CV Firmansyah', 'Tirta', 0, 0, '2021-09-03 02:50:52', '2021-09-03 02:50:52'),
(146, 'beatae', 140, 'UD Suryatmi', 'Irsad', 0, 0, '2021-09-03 02:50:52', '2021-09-03 02:50:52'),
(147, 'est', 220, 'UD Wahyuni Sitompul Tbk', 'Darijan', 0, 0, '2021-09-03 02:50:52', '2021-09-03 02:50:52'),
(148, 'non', 444, 'PT Marpaung Tbk', 'Tugiman', 0, 0, '2021-09-03 02:50:52', '2021-09-03 02:50:52'),
(149, 'voluptatem', 256, 'CV Pudjiastuti Usada', 'Cemani', 0, 0, '2021-09-03 02:50:52', '2021-09-03 02:50:52'),
(150, 'sint', 149, 'CV Manullang Wulandari (Persero) Tbk', 'Kardi', 0, 0, '2021-09-03 02:50:52', '2021-09-03 02:50:52'),
(151, 'cumque', 308, 'PT Suartini', 'Asman', 0, 0, '2021-09-03 02:50:52', '2021-09-03 02:50:52'),
(152, 'et', 969, 'CV Haryanto Kurniawan', 'Adinata', 0, 0, '2021-09-03 02:50:52', '2021-09-03 02:50:52'),
(153, 'voluptatem', 798, 'UD Marpaung', 'Candrakanta', 0, 0, '2021-09-03 02:50:52', '2021-09-03 02:50:52'),
(154, 'deleniti', 40, 'PD Mayasari Samosir Tbk', 'Pangeran', 0, 0, '2021-09-03 02:50:52', '2021-09-03 02:50:52'),
(155, 'omnis', 713, 'Perum Waluyo (Persero) Tbk', 'Dacin', 0, 0, '2021-09-03 02:50:52', '2021-09-03 02:50:52'),
(156, 'natus', 632, 'PT Sihombing', 'Johan', 0, 0, '2021-09-03 02:50:52', '2021-09-03 02:50:52'),
(157, 'et', 696, 'Perum Mulyani Tbk', 'Omar', 0, 0, '2021-09-03 02:50:52', '2021-09-03 02:50:52'),
(158, 'similique', 632, 'UD Laksmiwati', 'Kuncara', 0, 0, '2021-09-03 02:50:52', '2021-09-03 02:50:52'),
(159, 'tempore', 954, 'Perum Wacana', 'Asman', 0, 0, '2021-09-03 02:50:52', '2021-09-03 02:50:52'),
(160, 'minus', 371, 'Perum Nashiruddin Purwanti Tbk', 'Candra', 0, 0, '2021-09-03 02:50:52', '2021-09-03 02:50:52'),
(161, 'et', 167, 'Perum Pangestu (Persero) Tbk', 'Darmana', 0, 0, '2021-09-03 02:50:52', '2021-09-03 02:50:52'),
(162, 'adipisci', 607, 'PT Adriansyah', 'Warsita', 0, 0, '2021-09-03 02:50:52', '2021-09-03 02:50:52'),
(163, 'quisquam', 274, 'CV Widiastuti', 'Carub', 0, 0, '2021-09-03 02:50:52', '2021-09-03 02:50:52'),
(164, 'non', 691, 'CV Palastri Halim', 'Yosef', 0, 0, '2021-09-03 02:50:52', '2021-09-03 02:50:52'),
(165, 'voluptatibus', 363, 'PT Tampubolon Napitupulu', 'Damar', 0, 0, '2021-09-03 02:50:52', '2021-09-03 02:50:52'),
(166, 'consectetur', 773, 'Perum Budiman Wastuti (Persero) Tbk', 'Banara', 0, 0, '2021-09-03 02:50:52', '2021-09-03 02:50:52'),
(167, 'repellat', 428, 'PT Wahyuni', 'Karma', 0, 0, '2021-09-03 02:50:52', '2021-09-03 02:50:52'),
(168, 'consectetur', 613, 'PD Pertiwi Megantara', 'Chandra', 0, 0, '2021-09-03 02:50:52', '2021-09-03 02:50:52'),
(169, 'consequatur', 447, 'UD Mayasari Tbk', 'Lanang', 0, 0, '2021-09-03 02:50:52', '2021-09-03 02:50:52'),
(170, 'et', 869, 'PD Palastri Jailani (Persero) Tbk', 'Jarwi', 0, 0, '2021-09-03 02:50:52', '2021-09-03 02:50:52'),
(171, 'voluptas', 335, 'PT Rahmawati', 'Warta', 0, 0, '2021-09-03 02:50:52', '2021-09-03 02:50:52'),
(172, 'ut', 931, 'CV Oktaviani Purwanti (Persero) Tbk', 'Bahuwarna', 0, 0, '2021-09-03 02:50:53', '2021-09-03 02:50:53'),
(173, 'ad', 867, 'PD Sirait (Persero) Tbk', 'Gara', 0, 0, '2021-09-03 02:50:53', '2021-09-03 02:50:53'),
(174, 'sint', 163, 'CV Fujiati', 'Hairyanto', 0, 0, '2021-09-03 02:50:53', '2021-09-03 02:50:53'),
(175, 'deserunt', 901, 'UD Purnawati Wahyudin', 'Ikhsan', 0, 0, '2021-09-03 02:50:53', '2021-09-03 02:50:53'),
(176, 'molestiae', 716, 'CV Pranowo Tbk', 'Akarsana', 0, 0, '2021-09-03 02:50:53', '2021-09-03 02:50:53'),
(177, 'quod', 840, 'PD Andriani', 'Jumari', 0, 0, '2021-09-03 02:50:53', '2021-09-03 02:50:53'),
(178, 'ducimus', 193, 'PT Usada Budiyanto Tbk', 'Drajat', 0, 0, '2021-09-03 02:50:53', '2021-09-03 02:50:53'),
(179, 'id', 79, 'PT Agustina Yuniar (Persero) Tbk', 'Purwanto', 0, 0, '2021-09-03 02:50:53', '2021-09-03 02:50:53'),
(180, 'nisi', 998, 'PD Mayasari Sinaga', 'Aslijan', 0, 0, '2021-09-03 02:50:53', '2021-09-03 02:50:53'),
(181, 'nam', 785, 'PT Farida', 'Kanda', 0, 0, '2021-09-03 02:50:53', '2021-09-03 02:50:53'),
(182, 'eaque', 266, 'PD Wasita', 'Gaman', 0, 0, '2021-09-03 02:50:53', '2021-09-03 02:50:53'),
(183, 'quia', 270, 'Perum Haryanto Melani', 'Panca', 0, 0, '2021-09-03 02:50:53', '2021-09-03 02:50:53'),
(184, 'at', 951, 'PD Gunarto Lestari Tbk', 'Jaswadi', 0, 0, '2021-09-03 02:50:53', '2021-09-03 02:50:53'),
(185, 'est', 588, 'Perum Zulkarnain Tampubolon', 'Galar', 0, 0, '2021-09-03 02:50:53', '2021-09-03 02:50:53'),
(186, 'molestiae', 805, 'PT Purnawati Tbk', 'Kardi', 0, 0, '2021-09-03 02:50:53', '2021-09-03 02:50:53'),
(187, 'necessitatibus', 917, 'PD Usada Maryadi', 'Niyaga', 0, 0, '2021-09-03 02:50:53', '2021-09-03 02:50:53'),
(188, 'possimus', 411, 'CV Usada Tbk', 'Bakiono', 0, 0, '2021-09-03 02:50:53', '2021-09-03 02:50:53'),
(189, 'illo', 486, 'Perum Wijayanti Januar (Persero) Tbk', 'Gandi', 0, 0, '2021-09-03 02:50:53', '2021-09-03 02:50:53'),
(190, 'harum', 282, 'CV Samosir Tbk', 'Gangsar', 0, 0, '2021-09-03 02:50:53', '2021-09-03 02:50:53'),
(191, 'rerum', 590, 'Perum Padmasari Oktaviani Tbk', 'Olga', 0, 0, '2021-09-03 02:50:53', '2021-09-03 02:50:53'),
(192, 'quae', 462, 'Perum Lailasari Laksita', 'Ajiman', 0, 0, '2021-09-03 02:50:53', '2021-09-03 02:50:53'),
(193, 'ducimus', 383, 'PT Uyainah Lailasari (Persero) Tbk', 'Dacin', 0, 0, '2021-09-03 02:50:53', '2021-09-03 02:50:53'),
(194, 'nihil', 436, 'CV Winarno', 'Karta', 0, 0, '2021-09-03 02:50:53', '2021-09-03 02:50:53'),
(195, 'maxime', 427, 'CV Prabowo Palastri', 'Lanjar', 0, 0, '2021-09-03 02:50:53', '2021-09-03 02:50:53'),
(196, 'consectetur', 880, 'Perum Hardiansyah', 'Utama', 0, 0, '2021-09-03 02:50:53', '2021-09-03 02:50:53'),
(197, 'est', 278, 'CV Wacana Saefullah (Persero) Tbk', 'Hari', 0, 0, '2021-09-03 02:50:53', '2021-09-03 02:50:53'),
(198, 'laboriosam', 409, 'PT Jailani', 'Cakrajiya', 0, 0, '2021-09-03 02:50:53', '2021-09-03 02:50:53'),
(199, 'quisquam', 81, 'Perum Usada (Persero) Tbk', 'Jaka', 0, 0, '2021-09-03 02:50:53', '2021-09-03 02:50:53'),
(200, 'est', 505, 'Perum Utami', 'Heryanto', 0, 0, '2021-09-03 02:50:53', '2021-09-03 02:50:53'),
(201, 'doloribus', 539, 'Perum Rajasa Astuti', 'Kanda', 0, 0, '2021-09-03 02:50:53', '2021-09-03 02:50:53'),
(202, 'illo', 745, 'UD Nasyiah Nasyidah (Persero) Tbk', 'Tomi', 0, 0, '2021-09-03 02:50:53', '2021-09-03 02:50:53'),
(203, 'vero', 269, 'Perum Yuliarti Haryanto', 'Tedi', 0, 0, '2021-09-03 02:50:53', '2021-09-03 02:50:53'),
(204, 'qui', 754, 'Perum Hidayat Padmasari', 'Maras', 0, 0, '2021-09-03 02:50:53', '2021-09-03 02:50:53'),
(205, 'magni', 488, 'PT Saefullah Pudjiastuti Tbk', 'Laswi', 0, 0, '2021-09-03 02:50:53', '2021-09-03 02:50:53'),
(206, 'natus', 946, 'PD Sitompul', 'Bagya', 0, 0, '2021-09-03 02:50:53', '2021-09-03 02:50:53'),
(207, 'saepe', 822, 'UD Halim Mulyani Tbk', 'Prabowo', 0, 0, '2021-09-03 02:50:53', '2021-09-03 02:50:53'),
(208, 'perferendis', 752, 'Perum Mustofa Habibi', 'Ibrani', 0, 0, '2021-09-03 02:50:54', '2021-09-03 02:50:54'),
(209, 'voluptatem', 598, 'PT Prastuti Irawan', 'Ibrani', 0, 0, '2021-09-03 02:50:54', '2021-09-03 02:50:54'),
(210, 'nesciunt', 816, 'PT Simanjuntak Nurdiyanti Tbk', 'Purwadi', 0, 0, '2021-09-03 02:50:54', '2021-09-03 02:50:54'),
(211, 'et', 307, 'PT Santoso Tbk', 'Jaiman', 0, 0, '2021-09-03 02:50:54', '2021-09-03 02:50:54'),
(212, 'et', 815, 'Perum Kuswandari Maryati', 'Ian', 0, 0, '2021-09-03 02:50:54', '2021-09-03 02:50:54'),
(213, 'sunt', 927, 'PT Manullang', 'Kalim', 0, 0, '2021-09-03 02:50:54', '2021-09-03 02:50:54'),
(214, 'deserunt', 160, 'PT Purnawati', 'Simon', 0, 0, '2021-09-03 02:50:54', '2021-09-03 02:50:54'),
(215, 'autem', 473, 'Perum Waskita Hartati', 'Dadi', 0, 0, '2021-09-03 02:50:54', '2021-09-03 02:50:54'),
(216, 'nihil', 508, 'Perum Purwanti Mandasari Tbk', 'Galih', 0, 0, '2021-09-03 02:50:54', '2021-09-03 02:50:54'),
(217, 'exercitationem', 293, 'PD Nuraini Hassanah', 'Dwi', 0, 0, '2021-09-03 02:50:54', '2021-09-03 02:50:54'),
(218, 'amet', 261, 'UD Saefullah Widodo', 'Makara', 0, 0, '2021-09-03 02:50:54', '2021-09-03 02:50:54'),
(219, 'veniam', 407, 'Perum Prasasta Zulaika', 'Darmanto', 0, 0, '2021-09-03 02:50:54', '2021-09-03 02:50:54'),
(220, 'qui', 536, 'Perum Padmasari Pudjiastuti (Persero) Tbk', 'Gatot', 0, 0, '2021-09-03 02:50:54', '2021-09-03 02:50:54'),
(221, 'asperiores', 62, 'UD Puspasari Sihombing (Persero) Tbk', 'Garan', 0, 0, '2021-09-03 02:50:54', '2021-09-03 02:50:54'),
(222, 'porro', 734, 'CV Wijayanti Wasita Tbk', 'Jasmani', 0, 0, '2021-09-03 02:50:54', '2021-09-03 02:50:54'),
(223, 'veritatis', 227, 'CV Lestari', 'Raharja', 0, 0, '2021-09-03 02:50:54', '2021-09-03 02:50:54'),
(224, 'quis', 843, 'CV Manullang Tamba (Persero) Tbk', 'Irnanto', 0, 0, '2021-09-03 02:50:54', '2021-09-03 02:50:54'),
(225, 'voluptatem', 954, 'PD Marpaung', 'Kacung', 0, 0, '2021-09-03 02:50:54', '2021-09-03 02:50:54'),
(226, 'omnis', 137, 'UD Adriansyah Pranowo Tbk', 'Gamblang', 0, 0, '2021-09-03 02:50:54', '2021-09-03 02:50:54'),
(227, 'neque', 645, 'PD Nurdiyanti Suartini Tbk', 'Jamal', 0, 0, '2021-09-03 02:50:54', '2021-09-03 02:50:54'),
(228, 'sed', 796, 'PT Siregar Pertiwi Tbk', 'Erik', 0, 0, '2021-09-03 02:50:54', '2021-09-03 02:50:54'),
(229, 'perspiciatis', 673, 'UD Astuti Usamah', 'Hasta', 0, 0, '2021-09-03 02:50:54', '2021-09-03 02:50:54'),
(230, 'consequatur', 584, 'PT Rajasa Zulaika', 'Manah', 0, 0, '2021-09-03 02:50:54', '2021-09-03 02:50:54'),
(231, 'harum', 266, 'UD Astuti Susanti Tbk', 'Caket', 0, 0, '2021-09-03 02:50:54', '2021-09-03 02:50:54'),
(232, 'similique', 898, 'Perum Hakim Laksmiwati', 'Darmanto', 0, 0, '2021-09-03 02:50:54', '2021-09-03 02:50:54'),
(233, 'dicta', 901, 'CV Aryani Tbk', 'Garda', 0, 0, '2021-09-03 02:50:54', '2021-09-03 02:50:54'),
(234, 'consequatur', 217, 'PD Mayasari Utami', 'Drajat', 0, 0, '2021-09-03 02:50:54', '2021-09-03 02:50:54'),
(235, 'assumenda', 124, 'PD Firgantoro Sihombing', 'Kemba', 0, 0, '2021-09-03 02:50:54', '2021-09-03 02:50:54'),
(236, 'enim', 916, 'UD Fujiati Winarsih', 'Harja', 0, 0, '2021-09-03 02:50:54', '2021-09-03 02:50:54'),
(237, 'sed', 548, 'PD Kuswandari', 'Hendra', 0, 0, '2021-09-03 02:50:54', '2021-09-03 02:50:54'),
(238, 'culpa', 118, 'PT Prastuti Waluyo Tbk', 'Nrima', 0, 0, '2021-09-03 02:50:54', '2021-09-03 02:50:54'),
(239, 'at', 626, 'PT Maheswara Widiastuti Tbk', 'Daryani', 0, 0, '2021-09-03 02:50:54', '2021-09-03 02:50:54'),
(240, 'laborum', 128, 'Perum Winarno (Persero) Tbk', 'Karja', 0, 0, '2021-09-03 02:50:54', '2021-09-03 02:50:54'),
(241, 'facere', 60, 'Perum Maryadi Marbun', 'Mujur', 0, 0, '2021-09-03 02:50:54', '2021-09-03 02:50:54'),
(242, 'maxime', 177, 'PT Mulyani Gunarto Tbk', 'Wardaya', 0, 0, '2021-09-03 02:50:54', '2021-09-03 02:50:54'),
(243, 'et', 614, 'UD Farida (Persero) Tbk', 'Adika', 0, 0, '2021-09-03 02:50:54', '2021-09-03 02:50:54'),
(244, 'qui', 439, 'CV Purwanti (Persero) Tbk', 'Catur', 0, 0, '2021-09-03 02:50:54', '2021-09-03 02:50:54'),
(245, 'ut', 772, 'UD Lailasari Farida Tbk', 'Lasmanto', 0, 0, '2021-09-03 02:50:54', '2021-09-03 02:50:54'),
(246, 'numquam', 665, 'CV Pratiwi Oktaviani (Persero) Tbk', 'Vero', 0, 0, '2021-09-03 02:50:54', '2021-09-03 02:50:54'),
(247, 'quidem', 145, 'Perum Saragih', 'Jagaraga', 0, 0, '2021-09-03 02:50:55', '2021-09-03 02:50:55'),
(248, 'aspernatur', 402, 'UD Haryanti Maryadi (Persero) Tbk', 'Jaiman', 0, 0, '2021-09-03 02:50:55', '2021-09-03 02:50:55'),
(249, 'voluptas', 809, 'PD Zulaika Lailasari Tbk', 'Luwes', 0, 0, '2021-09-03 02:50:55', '2021-09-03 02:50:55'),
(250, 'et', 694, 'PT Pratama Tbk', 'Naradi', 0, 0, '2021-09-03 02:50:55', '2021-09-03 02:50:55'),
(251, 'baja', 123, 'Pindad', 'Jajang', 0, 0, '2021-09-03 04:22:53', '2021-09-03 04:22:53');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2021_09_02_070816_create_barang_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `barang`
--
ALTER TABLE `barang`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

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
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `barang`
--
ALTER TABLE `barang`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=252;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

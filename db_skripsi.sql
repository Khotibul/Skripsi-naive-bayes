-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 05, 2021 at 01:44 AM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 8.0.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_skripsi`
--

-- --------------------------------------------------------

--
-- Table structure for table `data_santri`
--

CREATE TABLE `data_santri` (
  `id_santri` int(11) NOT NULL,
  `nama_santri` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `data_santri`
--

INSERT INTO `data_santri` (`id_santri`, `nama_santri`) VALUES
(3, 'Abdul Wafi'),
(4, 'Khotibul Umam'),
(5, 'Haris Maulana'),
(6, 'Abdul Basir'),
(7, 'Abu Surri'),
(8, 'Sholahuddin'),
(9, 'Baharuddin Yusuf Habibi'),
(10, 'Badrus Sholeh'),
(11, 'Ahmad  Khaikal'),
(12, 'Saiful Ghozi'),
(13, 'Thoriqul Aziz'),
(14, 'Ahmad Masduki'),
(15, 'Amir Ma\'la Ahmadi'),
(16, 'Ahmad Maimun'),
(17, 'Muhammad Muhdoer'),
(18, 'Muhammad Hamdan'),
(19, 'Muatok Bil Kafi'),
(20, 'Habiburrohaman'),
(21, 'Haqqin Nazili'),
(22, 'Hasanuddin'),
(23, 'Ahmad Baihaqi'),
(24, 'Ahmad Baiquni'),
(25, 'Abdul Aziz Rosyid'),
(26, 'Andik Firmansyah'),
(27, 'Subhan Hanif'),
(28, 'Agus Roye'),
(29, 'Yogi Pramata'),
(30, 'Ahmad Nurul Mustofa'),
(31, 'Iqbal Fatoni'),
(32, 'Adnan Adhima'),
(33, 'Lutfi Hakim'),
(34, 'Jalaluddin Arumi'),
(35, 'Jawadul Halim'),
(36, 'Abdul Ghoni'),
(37, 'Ahmad Sairozi'),
(38, 'Ahmad Holili'),
(39, 'Ahmad Zuhdi Zaini'),
(40, 'Husain'),
(41, 'Husni Mubarok'),
(42, 'Alpan Fauzil'),
(43, 'Abdillah'),
(44, 'Ahmad Fariq'),
(45, 'Ahmad Hambali'),
(46, 'Imam Syafi\'i'),
(47, 'Nurul Qomar'),
(48, 'Ihya\' Ulumuddin'),
(49, 'Ahmad Kamil'),
(50, 'Juairiyah'),
(51, 'Ahmad Khulqi Khoir'),
(52, 'Maimun Najib'),
(53, 'Zaina Abidin'),
(54, 'Abdul Jamal'),
(55, 'Ahmaluddin'),
(56, 'Adang Ilyas'),
(57, 'Luffi Habibi'),
(58, 'Mahbub Maulana'),
(59, 'Wahyu Ramadhan'),
(60, 'Muhyidin'),
(61, 'Masruril'),
(62, 'Ahmad Jusman Karomin'),
(63, 'Tomi Kurniawan'),
(64, 'Abdul Khumaidi'),
(65, 'Ali Wafa'),
(66, 'Harun Ismail'),
(67, 'Imam Hanafi'),
(68, 'Alfan Falani'),
(69, 'Tsabit Azmi'),
(70, 'Iqbal Maulana'),
(71, 'Abdul Muis'),
(72, 'Abdussomad'),
(73, 'Ahmad Fikri'),
(74, 'Zidni Karomin'),
(75, 'Ahmad Fatoni'),
(76, 'Muhammad Husain'),
(77, 'Miftahuddin'),
(78, 'Miftahul Huda'),
(79, 'Ahmad Bukhori'),
(80, 'Affandi Maulana'),
(81, 'Abdul Wasil'),
(82, 'Adam Gio Amaliano'),
(83, 'Sholehuddin Al Ayubi'),
(84, 'Saiful Bahri'),
(85, 'Samsuddin'),
(86, 'Mahmuddin'),
(87, 'Deni Firmansyah'),
(88, 'Ahmad Dani'),
(89, 'Lukman Hakim'),
(90, 'Ahmad Fawaid'),
(91, 'Maulana Mu\'tashom'),
(92, 'Muhammad Hakam'),
(93, 'Muhammad Gufron'),
(94, 'Deni Wijaya'),
(95, 'Karim Wijaya'),
(96, 'Subhan Abidin'),
(97, 'Ahmad Zainuddin'),
(98, 'Slamet Riyadi'),
(99, 'Abdul Mufid'),
(100, 'Sukron Najib'),
(101, 'Ahmad Maimun Nidhomi'),
(102, 'Ahmad Riko Santoso'),
(103, 'Khoirur Rozikin'),
(104, 'Ahmad Mashudi'),
(105, 'Ahmad Ruhaini Ustman'),
(106, 'Abdus Salam'),
(107, 'Zainal Abidin'),
(108, 'Hamdan Wafa'),
(109, 'Ahmad Hilmy'),
(110, 'Bahrul Candra'),
(111, 'Ahmad Hadi Rojani'),
(112, 'Abdul Malik'),
(113, 'Misbahul Munir'),
(114, 'Musa Assamiri'),
(115, 'Hendi Pratama'),
(116, 'Khoirul Anam'),
(117, 'Ikhlas kan saja'),
(118, 'Ahmad Nazril'),
(119, 'Anggi Afnani'),
(120, 'Ahmad Syahroni'),
(121, 'Wildan Haqiqi'),
(122, 'Sofyan Sauri'),
(123, 'Saiful Jamil'),
(124, 'Khoirul Anwar'),
(125, 'Ahmad Saddad'),
(126, 'Agus Riyadi'),
(127, 'Sugiyanto'),
(128, 'Wahyu Pratama'),
(129, 'Saifuddin'),
(130, 'Tabi\'in'),
(131, 'Fathur Rozi'),
(132, 'Ahmad Fahri'),
(133, 'Ubaidillah'),
(134, 'Ahmad Mustaqim'),
(135, 'Abdul Kholid'),
(136, 'Arif Hidayah'),
(137, 'Sumali'),
(138, 'Ilham Efendi'),
(139, 'Rendi Damanhuri'),
(140, 'Doni Setiawan'),
(141, 'Khusairi'),
(142, 'Imam Ghozali'),
(143, 'Ahmad Suyuti'),
(144, 'Abdul Khohar'),
(145, 'Abdul Qodir'),
(146, 'Ahmad Junaidi'),
(147, 'Imam Rofi\'i'),
(148, 'Mustofa Lutfi'),
(149, 'Ahmad Kholili'),
(150, 'Mustofa Bisri'),
(151, 'Thoiruddin'),
(152, 'Ferry Irawan'),
(153, 'Rifqi Affandi'),
(154, 'Adi Darmono'),
(155, 'Reza Akbar'),
(156, 'Ahmad Albar'),
(157, 'Wildan Salafy'),
(158, 'Ahmad Muzakki'),
(159, 'Ahmad Mukhlis'),
(160, 'Abdul Hamid'),
(161, 'Abdul Walid'),
(162, 'Saiful Bukhori'),
(163, 'Muhammad Zaki Abdullah'),
(164, 'Muhammad Fahmi Afnani'),
(165, 'Ahmad Taisirul Kholaq'),
(166, 'Muhammad Ismail'),
(167, 'Ibrahim Al-Khoas'),
(168, 'Yazid Bustomi'),
(169, 'Abdul Manaf'),
(170, 'Mudrikun Ni\'am'),
(171, 'Ahmad Bustomi'),
(172, 'Saiful Komari'),
(173, 'Kamaluddin'),
(174, 'Saprol'),
(175, 'Fiqi Fadani'),
(176, 'Ahkamul Ulum'),
(177, 'Misbahul Ulum'),
(178, 'Munawwir'),
(179, 'Samsul Huda'),
(180, 'Imam Muzammil'),
(181, 'Thoriq Al Katiri'),
(182, 'Danar Pratama'),
(183, 'Bahauddin Nur Salim'),
(184, 'Ali Maulana Ramadhan'),
(185, 'Yusron Affandi'),
(186, 'Zainul Fariqon'),
(187, 'Umaryuto'),
(188, 'Abdul Sahal'),
(189, 'Syaikhoni'),
(190, 'Amrur Rizal Hamdani'),
(191, 'Abu Asyari'),
(192, 'Abdul Munif'),
(193, 'Slamet Pujiono'),
(194, 'Subroto'),
(195, 'Ahmad Subairi'),
(196, 'Ahmad Farhan'),
(197, 'Khaisa Ghilban'),
(198, 'Abdur Rosyid'),
(199, 'Budi Susanto'),
(200, 'Haidar Rizki'),
(201, 'Amar Julianto'),
(202, 'Ahmad Hasyim');

-- --------------------------------------------------------

--
-- Table structure for table `data_set`
--

CREATE TABLE `data_set` (
  `id_data_set` int(8) NOT NULL,
  `jenis_izin` varchar(25) NOT NULL,
  `jarak_izin` varchar(25) NOT NULL,
  `durasi_izin` varchar(25) NOT NULL,
  `pelanggaran` varchar(25) NOT NULL,
  `prediksi` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `data_set`
--

INSERT INTO `data_set` (`id_data_set`, `jenis_izin`, `jarak_izin`, `durasi_izin`, `pelanggaran`, `prediksi`) VALUES
(0, 'Sakit', 'Sangat Dekat', 'Singkat', 'Pernah', 'Terlambat'),
(1, 'Keperluan', 'Sangat Dekat', 'Singkat', 'Belum Pernah', 'Tidak Terlambat'),
(2, 'Bepergian', 'Sedang', 'Singkat', 'Pernah', 'Terlambat'),
(3, 'Pulang Biasa', 'Jauh', 'Jauh', 'Pernah', 'Terlambat'),
(4, 'Keluar', 'Sangat Dekat', 'Singkat', 'Belum Pernah', 'Tidak Terlambat'),
(5, 'Sakit', 'Sangat Dekat', 'Singkat', 'Belum Pernah', 'Tidak Terlambat'),
(6, 'Bepergian', 'Sedang', 'Sedang', 'Belum Pernah', 'Tidak Terlambat'),
(7, 'Bepergian', 'Dekat', 'Sedang', 'Pernah', 'Tidak Terlambat'),
(8, 'Pulang Biasa', 'Sedang', 'Sedang', 'Belum Pernah', 'Tidak Terlambat'),
(9, 'Bepergian', 'Jauh', 'Jauh', 'Pernah', 'Terlambat'),
(10, 'Bepergian', 'Sedang', 'Jauh', 'Belum Pernah', 'Tidak Terlambat'),
(11, 'Sakit', 'Sangat Dekat', 'Singkat', 'Belum Pernah', 'Tidak Terlambat'),
(12, 'Pulang Biasa', 'Sangat Dekat', 'Jauh', 'Pernah', 'Terlambat'),
(13, 'Bepergian', 'Sangat Jauh', 'Jauh', 'Belum Pernah', 'Terlambat'),
(14, 'Bepergian', 'Jauh', 'Sedang', 'Pernah', 'Terlambat'),
(15, 'Keluar', 'Jauh', 'Singkat', 'Belum Pernah', 'Tidak Terlambat'),
(16, 'Bepergian', 'Sangat Dekat', 'Sedang', 'Belum Pernah', 'Tidak Terlambat'),
(17, 'Sakit', 'Sangat Dekat', 'Singkat', 'Pernah', 'Terlambat'),
(18, 'Pulang Biasa', 'Sangat Dekat', 'Singkat', 'Pernah', 'Terlambat'),
(19, 'Sakit', 'Jauh', 'Jauh', 'Belum Pernah', 'Tidak Terlambat'),
(20, 'Bepergian', 'Jauh', 'Jauh', 'Belum Pernah', 'Terlambat'),
(21, 'Keperluan', 'Sedang', 'Jauh', 'Belum Pernah', 'Tidak Terlambat'),
(22, 'Keluar', 'Jauh', 'Sedang', 'Belum Pernah', 'Tidak Terlambat'),
(23, 'Sakit', 'Sangat Dekat', 'Singkat', 'Pernah', 'Terlambat'),
(24, 'Sakit', 'Sangat Dekat', 'Singkat', 'Belum Pernah', 'Tidak Terlambat'),
(25, 'Sakit', 'Sedang', 'Jauh', 'Pernah', 'Terlambat'),
(26, 'Keluar', 'Sangat Dekat', 'Sedang', 'Belum Pernah', 'Tidak Terlambat'),
(27, 'Bepergian', 'Jauh', 'Singkat', 'Pernah', 'Terlambat'),
(28, 'Bepergian', 'Sedang', 'Sedang', 'Belum Pernah', 'Tidak Terlambat'),
(29, 'Pulang Biasa', 'Sangat Jauh', 'Jauh', 'Pernah', 'Terlambat'),
(30, 'Pulang Biasa;', 'Sangat Dekat', 'Sedang', 'Belum Pernah', 'Tidak Terlambat'),
(31, 'Bepergian', 'Sedang', 'Singkat', 'Pernah', 'Terlambat'),
(32, 'Sakit', 'Sangat Dekat', 'Singkat', 'Pernah', 'Terlambat'),
(33, 'Pulang Biasa;', 'Sangat Dekat', 'Singkat', 'Belum Pernah', 'Tidak Terlambat'),
(34, 'Bepergian', 'Jauh', 'Jauh', 'Belum Pernah', 'Tidak Terlambat'),
(35, 'Keperluan', 'Sedang', 'Sedang', 'Pernah', 'Terlambat'),
(36, 'Bepergian', 'Sedang', 'Singkat', 'Belum Pernah', 'Tidak Terlambat'),
(37, 'Bepergian', 'Sangat Dekat', 'Sedang', 'Pernah', 'Terlambat'),
(38, 'Sakit', 'Sangat Dekat', 'Sedang', 'Belum Pernah', 'Tidak Terlambat'),
(39, 'Keluar', 'Jauh', 'Singkat', 'Pernah', 'Terlambat'),
(40, 'Pulang Biasa', 'Sedang', 'Singkat', 'Belum Pernah', 'Tidak Terlambat'),
(41, 'Sakit', 'Sangat Dekat', 'Singkat', 'Pernah', 'Terlambat'),
(42, 'Pulang Biasa', 'Dekat', 'Singkat', 'Pernah', 'Terlambat'),
(43, 'Sakit', 'Sedang', 'Singkat', 'Pernah', 'Tidak Terlambat'),
(44, 'Pulang Biasa', 'Jauh', 'Jauh', 'Belum Pernah', 'Tidak Terlambat'),
(45, 'Pulang Biasa', 'Sangat Jauh', 'Sedang', 'Belum Pernah', 'Terlambat'),
(46, 'Pulang Biasa', 'Sangat Jauh', 'Singkat', 'Pernah', 'Terlambat'),
(47, 'Keluar', 'Sangat Dekat', 'Singkat', 'Pernah', 'Terlambat'),
(48, 'Pulang Biasa', 'Sangat Dekat', 'Jauh', 'Belum Pernah', 'Terlambat'),
(49, 'Bepergian', 'Jauh', 'Singkat', 'Pernah', 'Terlambat'),
(50, 'Keperluan', 'Jauh', 'Jauh', 'Belum Pernah', 'Tidak Terlambat'),
(51, 'Sakit', 'Sangat Dekat', 'Singkat', 'Pernah', 'Terlambat'),
(52, 'Sakit', 'Sangat Jauh', 'Jauh', 'Belum Pernah', 'Terlambat'),
(53, 'Keluar', 'Sedang', 'Jauh', 'Belum Pernah', 'Tidak Terlambat'),
(54, 'Bepergian', 'Sangat Dekat', 'Jauh', 'Pernah', 'Terlambat'),
(55, 'Keluar', 'Sangat Dekat', 'Singkat', 'Pernah', 'Terlambat'),
(56, 'Bepergian', 'Dekat', 'Singkat', 'Belum Pernah', 'Tidak Terlambat'),
(57, 'Sakit', 'Sedang', 'Sedang', 'Belum Pernah', 'Tidak Terlambat'),
(58, 'Keperluan', 'Sedang', 'Singkat', 'Belum Pernah', 'Tidak Terlambat'),
(59, 'Bepergian', 'Sedang', 'Jauh', 'Belum Pernah', 'Tidak Terlambat'),
(60, 'Keluar', 'Sangat Jauh', 'Jauh', 'Belum Pernah', 'Terlambat'),
(61, 'Bepergian', 'Sedang', 'Jauh', 'Pernah', 'Terlambat'),
(62, 'Bepergian', 'Jauh', 'Jauh', 'Belum Pernah', 'Tidak Terlambat'),
(63, 'Sakit', 'Sangat Dekat', 'Singkat', 'Pernah', 'Terlambat'),
(64, 'Sakit', 'Sangat Dekat', 'Jauh', 'Belum Pernah', 'Tidak Terlambat'),
(65, 'Keperluan', 'Dekat', 'Jauh', 'Pernah', 'Terlambat'),
(66, 'Keperluan', 'Sedang', 'Sedang', 'Belum Pernah', 'Tidak Terlambat'),
(67, 'Bepergian', 'Sedang', 'Jauh', 'Pernah', 'Terlambat'),
(68, 'Pulang Biasa', 'Sedang', 'Sedang', 'Belum Pernah', 'Tidak Terlambat'),
(69, 'Bepergian', 'Sangat Dekat', 'Jauh', 'Belum Pernah', 'Tidak Terlambat'),
(70, 'Sakit', 'Sangat Dekat', 'Singkat', 'Belum Pernah', 'Tidak Terlambat'),
(71, 'Bepergian', 'Jauh', 'Jauh', 'Belum Pernah', 'Tidak Terlambat'),
(72, 'Bepergian', 'Jauh', 'Singkat', 'Pernah', 'Terlambat'),
(73, 'Bepergian', 'Sedang', 'Jauh', 'Belum Pernah', 'Tidak Terlambat'),
(74, 'Pulang Biasa;', 'Sangat Jauh', 'Jauh', 'Belum Pernah', 'Terlambat'),
(75, 'Pulang Biasa', 'Sedang', 'Jauh', 'Belum Pernah', 'Tidak Terlambat'),
(76, 'Bepergian', 'Sedang', 'Singkat', 'Pernah', 'Terlambat'),
(77, 'Bepergian', 'Dekat', 'Singkat', 'Pernah', 'Tidak Terlambat'),
(78, 'Sakit', 'Sedang', 'Singkat', 'Belum Pernah', 'Terlambat'),
(79, 'Keperluan', 'Sedang', 'Singkat', 'Pernah', 'Terlambat'),
(80, 'Pulang Biasa', 'Sangat Dekat', 'Jauh', 'Belum Pernah', 'Terlambat'),
(81, 'Keluar', 'Dekat', 'Sedang', 'Belum Pernah', 'Tidak Terlambat'),
(82, 'Bepergian', 'Jauh', 'Jauh', 'Pernah', 'Terlambat'),
(83, 'Keperluan', 'Sangat Dekat', 'Sedang', 'Belum Pernah', 'Tidak Terlambat'),
(84, 'Sakit', 'Dekat', 'Sedang', 'Belum Pernah', 'Tidak Terlambat'),
(85, 'Kepentingan Keluarga', 'Dekat', 'Sedang', 'Pernah', 'Terlambat'),
(86, 'Keluar', 'Dekat', 'Singkat', 'Belum Pernah', 'Tidak Terlambat'),
(87, 'Bepergian', 'Jauh', 'Lama', 'Pernah', 'Terlambat'),
(88, 'Pulang Biasa', 'Jauh', 'Sedang', 'Belum Pernah', 'Tidak Terlambat'),
(89, 'Sakit', 'Sedang', 'Sedang', 'Pernah', 'Terlambat'),
(90, 'Bepergian', 'Dekat', 'Sedang', 'Pernah', 'Terlambat'),
(91, 'Pulang Biasa', 'Sangat Jauh', 'Sedang', 'Pernah', 'Terlambat'),
(92, 'Pulang Biasa', 'Jauh', 'Singkat', 'Belum Pernah', 'Tidak Terlambat'),
(93, 'Sakit', 'Sangat Jauh', 'Lama', 'Pernah', 'Terlambat'),
(95, 'Kepentingan Keluarga', 'Dekat', 'Sedang', 'Tidak Pernah', 'Terlambat'),
(96, 'Keluar', 'Dekat', 'Singkat', 'Pernah', 'Terlambat'),
(97, 'Bepergian', 'Jauh', 'Sedang', 'Belum Pernah', 'Tidak Terlambat'),
(98, 'Sakit', 'Sedang', 'Singkat', 'Belum Pernah', 'Tidak Terlambat'),
(99, 'Keluar', 'Dekat', 'Lama', 'Pernah', 'Terlambat'),
(100, 'Kepentingan Keluarga', 'Sedang', 'Lama', 'Pernah', 'Terlambat'),
(101, 'Sakit', 'Jauh', 'Sedang', 'Pernah', 'Terlambat'),
(102, 'Bepergian', 'Jauh', 'Lama', 'Tidak Pernah', 'Tidak Terlambat'),
(103, 'Keluar', 'Jauh', 'Singkat', 'Pernah', 'Terlambat'),
(104, 'Sakit', 'Sangat Jauh', 'Lama', 'Tidak Pernah', 'Tidak Terlambat'),
(105, 'Keluar', 'Sangat Dekat', 'Singkat', 'Tidak Pernah', 'Tidak Terlambat'),
(106, 'Sakit', 'Dekat', 'Lama', 'Pernah', 'Terlambat'),
(107, 'Pulang Biasa', 'Jauh', 'Sedang', 'Tidak Pernah', 'Tidak Terlambat'),
(108, 'Kepentingan Keluarga', 'Sedang', 'Singkat', 'Belum Pernah', 'Tidak Terlambat'),
(109, 'Bepergian', 'Sangat Jauh', 'Lama', 'Pernah', 'Terlambat'),
(110, 'Bepergian', 'Dekat', 'Lama', 'Pernah', 'Terlambat'),
(111, 'Sakit', 'Sedang', 'Lama', 'Belum Pernah', 'Tidak Terlambat'),
(112, 'Keluar', 'Sangat Dekat', 'Singkat', 'Belum Pernah', 'Tidak Terlambat'),
(113, 'Bepergian', 'Sangat Jauh', 'Lama', 'Pernah', 'Tidak Terlambat'),
(114, 'Bepergian', 'Dekat', 'Singkat', 'Pernah', 'Terlambat'),
(115, 'Sakit', 'Sangat Dekat', 'Sedang', 'Pernah', 'Terlambat');

-- --------------------------------------------------------

--
-- Table structure for table `data_tes`
--

CREATE TABLE `data_tes` (
  `id_data_tes` int(11) NOT NULL,
  `id_santri` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `tanggal` date NOT NULL,
  `tanggal_kembali` date NOT NULL,
  `jenis_izin` varchar(25) NOT NULL,
  `jarak_izin` varchar(25) NOT NULL,
  `durasi_izin` varchar(25) NOT NULL,
  `pelanggaran` varchar(25) NOT NULL,
  `prediksi` varchar(25) NOT NULL,
  `kenyataan` varchar(25) NOT NULL,
  `akurasi` varchar(15) NOT NULL,
  `konfirmasi` varchar(25) NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 0,
  `id_santri_detail` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `data_tes`
--

INSERT INTO `data_tes` (`id_data_tes`, `id_santri`, `id_user`, `tanggal`, `tanggal_kembali`, `jenis_izin`, `jarak_izin`, `durasi_izin`, `pelanggaran`, `prediksi`, `kenyataan`, `akurasi`, `konfirmasi`, `status`, `id_santri_detail`) VALUES
(3, 3, 3, '2021-02-08', '2021-02-10', 'Sakit', 'Dekat', 'Lama', 'Pernah', 'Terlambat', 'Tidak Terlambat', 'Benar', 'Izin diterima', 0, 3),
(4, 4, 4, '2021-02-08', '2021-02-09', 'Kepentingan Keluarga', 'Dekat', 'Lama', 'Belum Pernah', 'Tidak Terlambat', 'Tidak Terlambat', 'Benar', 'Izin diterima', 0, 4),
(5, 5, 5, '2021-02-08', '0000-00-00', 'Pulang Biasa', 'Sedang', 'Sedang', 'Pernah', 'Tidak Terlambat', 'Tidak Terlambat', 'Benar', 'Izin diterima', 0, 5),
(6, 6, 6, '2021-02-08', '0000-00-00', 'Pulang Biasa', 'Sedang', 'Sedang', 'Pernah', 'Tidak Terlambat', 'Terlambat', 'Benar', 'Izin ditolak', 0, 6),
(7, 7, 7, '2021-02-08', '2021-02-12', 'Pulang Biasa', 'Jauh', 'Lama', 'Pernah', 'Terlambat', 'Tidak Terlambat', 'Benar', 'Izin diterima', 0, 7),
(8, 8, 8, '2021-02-08', '2021-02-10', 'Sakit', 'Dekat', 'Sedang', 'Belum Pernah', 'Tidak Terlambat', 'Terlambat', 'Benar', 'Izin diterima', 0, 8),
(9, 9, 9, '2021-02-08', '2021-02-11', 'Pulang Biasa', 'Sedang', 'Lama', 'Belum Pernah', 'Tidak Terlambat', 'Terlambat', 'Benar', 'Izin ditolak', 0, 9),
(10, 10, 10, '2021-02-10', '2021-02-11', 'Bepergian', 'Jauh', 'Lama', 'Pernah', 'Terlambat', 'Tidak Terlambat', 'Benar', 'Izin ditolak', 0, 10),
(11, 11, 11, '2021-02-09', '2021-02-17', 'Sakit', 'Jauh', 'Sedang', 'Belum Pernah', 'Terlambat', 'Tidak Terlambat', 'Benar', 'Izin diterima', 0, 11),
(12, 12, 12, '2021-02-09', '2021-02-10', 'Pulang Biasa', 'Dekat', 'Lama', 'Pernah', 'Terlambat', 'Tidak Terlambat', 'Benar', 'Izin ditolak', 0, 12),
(13, 13, 13, '2021-02-09', '2021-02-11', 'Pulang Biasa', 'Jauh', 'Singkat', 'Belum Pernah', 'Tidak Terlambat', 'Terlambat', 'Benar', 'Izin diterima', 0, 13),
(14, 14, 14, '2021-02-09', '2021-02-10', 'Keluar', 'Dekat', 'Singkat', 'Belum Pernah', 'Tidak Terlambat', 'Terlambat', 'Benar', 'Izin diterima', 0, 14),
(15, 15, 15, '2021-02-08', '2021-02-10', 'Sakit', 'Dekat', 'Singkat', 'Belum Pernah', 'Tidak Terlambat', 'Tidak Terlambat', 'Benar', 'Izin diterima', 0, 15),
(16, 16, 16, '2021-02-08', '0000-00-00', 'Bepergian', 'Jauh', 'Sedang', 'Pernah', 'Terlambat', 'Terlambat', 'Benar', 'Izin ditolak', 0, 16),
(17, 17, 17, '2021-02-09', '2021-02-11', 'Sakit', 'Dekat', 'Lama', 'Pernah', 'Terlambat', 'Tidak Terlambat', '', 'Izin diterima', 0, 17),
(18, 18, 18, '2021-02-09', '0000-00-00', 'Sakit', 'Dekat', 'Sedang', 'Pernah', 'Terlambat', 'Terlambat', 'Benar', 'Izin ditolak', 0, 18),
(19, 19, 19, '2021-02-09', '2021-02-13', 'Sakit', 'Jauh', 'Lama', 'Belum Pernah', 'Terlambat', 'Tidak Terlambat', 'Benar', 'Izin diterima', 0, 19),
(20, 20, 20, '2021-02-09', '2021-02-13', 'Pulang Biasa', 'Sedang', 'Lama', 'Pernah', 'Tidak Terlambat', 'Terlambat', 'Tidak Benar', 'Izin ditolak', 0, 20),
(21, 21, 21, '2021-02-09', '0000-00-00', 'Kepentingan Keluarga', 'Jauh', 'Lama', 'Pernah', 'Tidak Terlambat', 'Terlambat', 'Tidak Benar', 'Izin diterima', 0, 21),
(22, 22, 22, '2021-02-09', '2021-02-20', 'Bepergian', 'Jauh', 'Lama', 'Belum Pernah', 'Terlambat', 'Tidak Terlambat', 'Benar', 'Izin diterima', 0, 22),
(23, 23, 23, '2021-02-09', '2021-02-21', 'Keluar', 'Dekat', 'Singkat', 'Pernah', 'Tidak Terlambat', 'Terlambat', 'Benar', 'Izin diterima', 0, 24),
(24, 24, 24, '2021-02-09', '0000-00-00', 'Kepentingan Keluarga', 'Jauh', 'Singkat', 'Belum Pernah', 'Tidak Terlambat', '', '', '', 0, 0),
(25, 25, 25, '2021-02-19', '2021-02-22', 'Sakit', 'Dekat', 'Lama', 'Tidak Pernah', 'Tidak Terlambat', 'Tidak Terlambat', 'Benar', 'Izin diterima', 0, 25),
(26, 26, 26, '2021-02-19', '2021-02-23', 'Keluar', 'Sangat Dekat', 'Singkat', 'Pernah', 'Terlambat', 'Terlambat', 'Benar', 'Izin ditolak', 0, 26),
(27, 27, 27, '2021-02-19', '2021-02-22', 'Pulang Biasa', 'Sedang', 'Lama', 'Pernah', 'Terlambat', 'Terlambat', 'Benar', 'Izin ditolak', 0, 27),
(28, 28, 28, '2021-02-19', '2021-02-22', 'Sakit', 'Dekat', 'Lama', 'Pernah', 'Tidak Terlambat', 'Tidak Terlambat', 'Benar', 'Izin diterima', 0, 28),
(29, 29, 29, '2021-02-21', '2021-02-23', 'Pulang Biasa', 'Dekat', 'Lama', 'Pernah', 'Terlambat', 'Terlambat', 'Benar', 'Izin ditolak', 0, 29),
(30, 30, 30, '2021-02-21', '2021-02-24', 'Pulang Biasa', 'Sedang', 'Singkat', 'Pernah', 'Terlambat', 'Terlambat', 'Benar', 'Izin ditolak', 0, 30),
(31, 31, 31, '2021-02-22', '2021-02-24', 'Bepergian', 'Dekat', 'Singkat', 'Pernah', 'Terlambat', 'Terlambat', 'Benar', 'Izin ditolak', 0, 31),
(32, 32, 32, '2021-02-22', '2021-02-24', 'Kepentingan Keluarga', 'Dekat', 'Lama', 'Pernah', 'Terlambat', 'Terlambat', 'Benar', 'Izin ditolak', 0, 32),
(33, 33, 33, '2021-02-22', '2021-02-25', 'Pulang Biasa', 'Dekat', 'Sedang', 'Tidak Pernah', 'Tidak Terlambat', 'Tidak Terlambat', 'Benar', 'Izin diterima', 0, 33),
(34, 34, 34, '2021-02-22', '2021-02-25', 'Sakit', 'Sangat Jauh', 'Sedang', 'Tidak Pernah', 'Tidak Terlambat', 'Tidak Terlambat', 'Benar', 'Izin diterima', 0, 34),
(35, 35, 35, '2021-02-22', '2021-02-24', 'Keluar', 'Jauh', 'Singkat', 'Pernah', 'Terlambat', 'Terlambat', 'Benar', 'Izin ditolak', 0, 35),
(36, 36, 36, '2021-02-22', '2021-02-24', 'Bepergian', 'Sedang', 'Sedang', 'Pernah', 'Terlambat', 'Tidak Terlambat', 'Tidak Benar', 'Izin diterima', 0, 36),
(37, 37, 37, '2021-02-22', '2021-02-25', 'Sakit', 'Dekat', 'Lama', 'Tidak Pernah', 'Tidak Terlambat', 'Tidak Terlambat', 'Benar', 'Izin ditolak', 0, 37),
(38, 38, 38, '2021-02-22', '2021-02-24', 'Kepentingan Keluarga', 'Dekat', 'Singkat', 'Pernah', 'Terlambat', 'Terlambat', 'Benar', 'Izin ditolak', 0, 38),
(39, 39, 39, '2021-02-22', '2021-02-25', 'Sakit', 'Jauh', 'Sedang', 'Tidak Pernah', 'Tidak Terlambat', 'Tidak Terlambat', 'Benar', 'Izin diterima', 0, 39),
(40, 40, 40, '2021-02-22', '2021-02-25', 'Keluar', 'Dekat', 'Lama', 'Pernah', 'Terlambat', 'Terlambat', 'Benar', 'Izin diterima', 0, 40),
(41, 41, 41, '2021-02-22', '2021-02-24', 'Pulang Biasa', 'Dekat', 'Singkat', 'Pernah', 'Terlambat', 'Terlambat', 'Benar', 'Izin ditolak', 0, 41);

-- --------------------------------------------------------

--
-- Table structure for table `detail_santri`
--

CREATE TABLE `detail_santri` (
  `id_santri_detail` int(11) NOT NULL,
  `id_santri` int(11) NOT NULL,
  `wali` varchar(25) NOT NULL,
  `alamat` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `detail_santri`
--

INSERT INTO `detail_santri` (`id_santri_detail`, `id_santri`, `wali`, `alamat`) VALUES
(3, 3, 'Abdullah', 'Jenggawah'),
(4, 4, 'Abdul Wahid', 'Glagasan'),
(5, 5, 'Abdul Hamid', 'Banyuwangi'),
(6, 6, 'Hison', 'Klatakan'),
(7, 7, 'Bogel', 'Bangsalsari');

-- --------------------------------------------------------

--
-- Table structure for table `groups`
--

CREATE TABLE `groups` (
  `id` mediumint(8) UNSIGNED NOT NULL,
  `name` varchar(20) NOT NULL,
  `description` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `groups`
--

INSERT INTO `groups` (`id`, `name`, `description`) VALUES
(1, 'admin', 'Akses Administrator'),
(2, 'user', 'Akses General User');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) UNSIGNED NOT NULL,
  `nama` varchar(50) DEFAULT NULL,
  `email` varchar(100) NOT NULL,
  `username` varchar(100) DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `phone` varchar(20) DEFAULT NULL,
  `alamat` varchar(256) NOT NULL,
  `user_img` varchar(100) NOT NULL,
  `ip_address` varchar(45) NOT NULL,
  `last_login` int(11) UNSIGNED DEFAULT NULL,
  `salt` varchar(255) DEFAULT NULL,
  `activation_code` varchar(40) DEFAULT NULL,
  `forgotten_password_code` varchar(40) DEFAULT NULL,
  `forgotten_password_time` int(11) UNSIGNED DEFAULT NULL,
  `remember_code` varchar(40) DEFAULT NULL,
  `active` tinyint(1) UNSIGNED DEFAULT NULL,
  `created_on` int(11) UNSIGNED NOT NULL,
  `id_santri` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `nama`, `email`, `username`, `password`, `phone`, `alamat`, `user_img`, `ip_address`, `last_login`, `salt`, `activation_code`, `forgotten_password_code`, `forgotten_password_time`, `remember_code`, `active`, `created_on`, `id_santri`) VALUES
(1, 'Adminn', 'admin@admin.com', 'admin', '$2y$10$SyJB1OpAWvQ2iPh8GPWr2.hKENf6tQisaE4k1Ry/obuxeXJRv/xbi', '082333817317', 'Jln Cempaka No 38 Jember', 'usr_img_e9352a4.jpg', '127.0.0.1', 1614904059, '', NULL, NULL, NULL, '3cRRZg5wplD.qpXmoRoOje', 1, 1268889823, 0),
(3, 'Abdul wafi', 'wafi@mail.com', 'wafi', '$2y$10$SyJB1OpAWvQ2iPh8GPWr2.hKENf6tQisaE4k1Ry/obuxeXJRv/xbi', '0838579090071', 'jember', 'usr_img_f5c1223.png', '::1', 1612780097, NULL, NULL, NULL, NULL, 'ISE1k0YZaKgDopcnGXxp0u', 1, 1483685458, 7),
(4, 'Khotibul Umam', 'umam@bla.com', 'umam', '$2y$10$SyJB1OpAWvQ2iPh8GPWr2.hKENf6tQisaE4k1Ry/obuxeXJRv/xbi', '089897878', 'jl.bangsalsari', 'usr_img_9fd2409.png', '127.0.0.1', 1613784736, NULL, NULL, NULL, NULL, 'mBRp2HprbVFIeP8wQUzSf.', 1, 1487264440, 1),
(5, 'Haris Maulana', 'mandar@coba.com', 'haris', '$2y$10$SyJB1OpAWvQ2iPh8GPWr2.hKENf6tQisaE4k1Ry/obuxeXJRv/xbi', '082173182719', 'madura', 'usr_img_e2463e1.png', '::1', 1489453591, NULL, NULL, NULL, NULL, NULL, 1, 1487338092, 2),
(6, 'Abdul Baser', 'baser@gmail.com', 'baser', '$2y$10$SyJB1OpAWvQ2iPh8GPWr2.hKENf6tQisaE4k1Ry/obuxeXJRv/xbi', '086765554444', 'Klatakan', 'usr_img_20f85a7.png', '127.0.0.1', NULL, NULL, NULL, NULL, NULL, NULL, 1, 1612758604, 0),
(7, 'Abu Surri', 'AbuSurri@xmail.com', 'surri', '$2y$08$P3eQzaVRKClbswFMD17ttOoOlEsaVw.lVB4KrPi6XwU4Arahdt/s6', '08978767565645', 'Langkap', 'usr_img_912861d.png', '127.0.0.1', NULL, NULL, NULL, NULL, NULL, NULL, 1, 1613621152, 0),
(8, 'Sholahuddin', 'sholehuddin@gmail.com', 'sholehuddin', '$2y$08$YmI3rWbYM4/xJatFBONuw.QkpClaJNQdTpuAEQWhPsCXmk1IgRN.6', '0899896455545', 'Gumukmas', 'usr_img_63e306b.JPG', '127.0.0.1', NULL, NULL, NULL, NULL, NULL, NULL, 1, 1613621294, 0),
(9, 'Baharuddin Yusuf Habibi', 'Yusuf@xgmail.com', 'yusuflayangan', '$2y$08$Z21VqIKzvwptwUpIFqZPC.9CMh.puS6H0ND7sMV/47t1yZ8.xuXj.', '085755332222', 'Semboro', 'usr_img_be7b490.JPG', '127.0.0.1', NULL, NULL, NULL, NULL, NULL, NULL, 1, 1613621404, 0),
(10, 'Badrus Sholeh', 'Badrus@xmail.com', 'badrus', '$2y$08$MJrkxBfr3CGJr4/15yp1quf5TqMxvVcgoajoSb4hItbHZpiMa65HW', '081234555678', 'Gumukbago-Balung', 'usr_img_70c4577.JPG', '127.0.0.1', NULL, NULL, NULL, NULL, NULL, NULL, 1, 1613621497, 0),
(11, 'Ahmad Khaikal', 'Haikal@xmail.com', 'haikal', '$2y$08$004qdKXCO3nWB73x34yLoOTxUnjhw6zJzi6J82yJfHh2Y4B6.56eu', '0832356776554', 'Malang', 'usr_img_fcc1863.JPG', '127.0.0.1', NULL, NULL, NULL, NULL, NULL, NULL, 1, 1613621576, 0),
(12, 'Saiful Ghozi', 'Ghozi@xmail.com', 'ghozi', '$2y$08$pZhREXUsuvuWcpZBR0xQ3uUL5ZR9lifLhqcToAumyn8tYZHKa0kBi', '081264324566', 'Bali', 'usr_img_cc2e629.JPG', '127.0.0.1', NULL, NULL, NULL, NULL, NULL, NULL, 1, 1613621666, 0),
(13, 'Thoriqul Aziz', 'Thoriqul@xmail.com', 'aziz', '$2y$08$0Q/ArM0k6kR.E5MxGe4oyO24fdt.06ry1lX5HvFk7mMBQP30K/wWO', '0865555546456', 'Rowotamtu - Rambipuji', 'usr_img_44fd20f.JPG', '127.0.0.1', NULL, NULL, NULL, NULL, NULL, NULL, 1, 1613621759, 0),
(14, 'Ahmad Masduki', 'Masduki@gmail.com', 'duki', '$2y$08$EwOguaRCHIqfaExv1HWrGOjfB7Aaf70s/sUAVOoj6YrlwOq9RmXfC', '087444675454', 'Bali - Klatakan', 'usr_img_37eaef1.JPG', '127.0.0.1', NULL, NULL, NULL, NULL, NULL, NULL, 1, 1613621840, 0),
(15, 'Amir Ma\'la Ahmadi', 'amir@gmail.com', 'amir', '$2y$08$MPjKpgGrgstXGMMFivW3M.A2SwxLS3mUqfcuFzxO4lsajwwzKCFNi', '081233456776', 'Petung - Bangsalsari', 'usr_img_b4f4a85.JPG', '127.0.0.1', NULL, NULL, NULL, NULL, NULL, NULL, 1, 1613622021, 0),
(16, 'Ahmad Maimun', 'Maimun124@xmail.com', 'maimun', '$2y$08$BIQYi8sfDcFag9//rcDU0OiRoyNiI3FDREg1qKhJ5GHz5L7S9wCWq', '08343333234', 'Langkap - Bangsalsari', 'usr_img_bcebc05.JPG', '127.0.0.1', NULL, NULL, NULL, NULL, NULL, NULL, 1, 1613622109, 0),
(17, 'Muhammad Muhdoer', 'Muhdor@xmail.com', 'muhdor', '$2y$08$x2gJ4NyRh2gUY5rxeO85ouUgCSzmeCoiP3XBp7mRdaiYWWVV8LF6i', '081246667855', 'Panti', 'usr_img_c4be583.JPG', '127.0.0.1', NULL, NULL, NULL, NULL, NULL, NULL, 1, 1613622204, 0),
(18, 'Muhammad Hamdan', 'hamdani@xmail.com', 'hamdani', '$2y$08$n0e22qwFpLv4ELHZl5TbDe1zB5Xnf.KhI9YFx02kiiLq/8zpeL0rG', '085434455567', 'Semboro', 'usr_img_cdc032b.JPG', '127.0.0.1', NULL, NULL, NULL, NULL, NULL, NULL, 1, 1613622329, 0),
(19, 'Muatok Bil Kafi', 'mukto@xmail.com', 'mutok', '$2y$08$tzilw2rRlRvpFX7.DPP8E.M6PY7T0djchEBE1ZFC/QOWKxb44WEd.', '0812336677675', 'Paleran - Umbulsari', 'usr_img_5e28b9c.JPG', '127.0.0.1', NULL, NULL, NULL, NULL, NULL, NULL, 1, 1613622394, 0),
(20, 'Habiburrohaman', 'Habib@xmail.com', 'habibj', '$2y$08$PfQKkgl4HF8wsebGPlgSAeQ4pKXlmv4fylq7XxRWBeBa2ZinBWOky', '08665544444', 'Paleran - Umbulsari', 'usr_img_1be0925.JPG', '127.0.0.1', NULL, NULL, NULL, NULL, NULL, NULL, 1, 1613623139, 0),
(21, 'Haqqin Nazili', 'nazili@gmail.com', 'nazil', '$2y$08$VmM.7BVEaDmVa5dXT3iGq.JviRaVmEIjAy2Uh2G6BGROS2oaNl.SG', '082332445666', 'Rowotamtu - Rambipuji', 'usr_img_98229a7.JPG', '127.0.0.1', NULL, NULL, NULL, NULL, NULL, NULL, 1, 1613623227, 0),
(22, 'Hasanuddin', 'Hasanuddin@xamil.com', 'hasan', '$2y$08$bX3l3Jh4K2CwRYRsBQTV3ej5ITjSduNjKuCEWCjaq2BxPS3cOcsFS', '083222345567', 'Rowotamtu - Rambipuji', 'usr_img_cf40d6d.JPG', '127.0.0.1', NULL, NULL, NULL, NULL, NULL, NULL, 1, 1613623282, 0);

-- --------------------------------------------------------

--
-- Table structure for table `users_groups`
--

CREATE TABLE `users_groups` (
  `id` int(11) UNSIGNED NOT NULL,
  `user_id` int(11) UNSIGNED NOT NULL,
  `group_id` mediumint(8) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `users_groups`
--

INSERT INTO `users_groups` (`id`, `user_id`, `group_id`) VALUES
(1, 1, 1),
(4, 3, 2),
(5, 4, 2),
(6, 5, 2),
(7, 6, 2),
(8, 7, 2),
(9, 8, 2),
(10, 9, 2),
(11, 10, 2),
(12, 11, 2),
(13, 12, 2),
(14, 13, 2),
(15, 14, 2),
(16, 15, 2),
(17, 16, 2),
(18, 17, 2),
(19, 18, 2),
(20, 19, 2),
(21, 20, 2),
(22, 21, 2),
(23, 22, 2);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `data_santri`
--
ALTER TABLE `data_santri`
  ADD PRIMARY KEY (`id_santri`);

--
-- Indexes for table `data_set`
--
ALTER TABLE `data_set`
  ADD PRIMARY KEY (`id_data_set`);

--
-- Indexes for table `data_tes`
--
ALTER TABLE `data_tes`
  ADD PRIMARY KEY (`id_data_tes`);

--
-- Indexes for table `detail_santri`
--
ALTER TABLE `detail_santri`
  ADD PRIMARY KEY (`id_santri_detail`),
  ADD UNIQUE KEY `id_santri` (`id_santri`);

--
-- Indexes for table `groups`
--
ALTER TABLE `groups`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users_groups`
--
ALTER TABLE `users_groups`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `uc_users_groups` (`user_id`,`group_id`),
  ADD KEY `fk_users_groups_users1_idx` (`user_id`),
  ADD KEY `fk_users_groups_groups1_idx` (`group_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `data_santri`
--
ALTER TABLE `data_santri`
  MODIFY `id_santri` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=203;

--
-- AUTO_INCREMENT for table `data_tes`
--
ALTER TABLE `data_tes`
  MODIFY `id_data_tes` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=42;

--
-- AUTO_INCREMENT for table `detail_santri`
--
ALTER TABLE `detail_santri`
  MODIFY `id_santri_detail` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `groups`
--
ALTER TABLE `groups`
  MODIFY `id` mediumint(8) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `users_groups`
--
ALTER TABLE `users_groups`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `detail_santri`
--
ALTER TABLE `detail_santri`
  ADD CONSTRAINT `detail_santri_ibfk_1` FOREIGN KEY (`id_santri`) REFERENCES `data_santri` (`id_santri`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `users_groups`
--
ALTER TABLE `users_groups`
  ADD CONSTRAINT `fk_users_groups_groups1` FOREIGN KEY (`group_id`) REFERENCES `groups` (`id`) ON DELETE CASCADE ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_users_groups_users1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

-- phpMyAdmin SQL Dump
-- version 4.1.12
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 09 Mar 2019 pada 15.42
-- Versi Server: 5.5.36
-- PHP Version: 5.4.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `db_finansial`
--
CREATE DATABASE IF NOT EXISTS `db_finansial` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `db_finansial`;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_hari`
--

DROP TABLE IF EXISTS `tb_hari`;
CREATE TABLE IF NOT EXISTS `tb_hari` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `hari` varchar(50) NOT NULL,
  `waktu` varchar(20) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data untuk tabel `tb_hari`
--

INSERT INTO `tb_hari` (`id`, `hari`, `waktu`) VALUES
(1, 'Jumat - Sabtu', '16.00 - 18.00'),
(2, 'Jumat - Sabtu', '19.00 - 21.00'),
(3, 'Sabtu - Minggu', '08.00 - 10.00'),
(4, 'Sabtu - Minggu', '14.00 - 16.00'),
(5, 'Sabtu - Minggu', '16.00 - 18.00');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_jadwal`
--

DROP TABLE IF EXISTS `tb_jadwal`;
CREATE TABLE IF NOT EXISTS `tb_jadwal` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nama_pengajar` varchar(50) NOT NULL,
  `nomor_ruangan` varchar(50) NOT NULL,
  `hari_waktu` varchar(50) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `pengajar` (`nama_pengajar`),
  KEY `ruangan` (`nomor_ruangan`),
  KEY `hari` (`hari_waktu`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=21 ;

--
-- Dumping data untuk tabel `tb_jadwal`
--

INSERT INTO `tb_jadwal` (`id`, `nama_pengajar`, `nomor_ruangan`, `hari_waktu`) VALUES
(5, 'Thariq Hazim', '1A (Desain Grafis)', 'Sabtu-Minggu (08.00-10.00)'),
(7, 'Rangga Aditya', '2B (Web Design)', 'Jumat-Sabtu (19.00-21.00)'),
(8, 'Alesha Zahra', '3C (Pemrograman)', 'Sabtu-Minggu (14.00-16.00)'),
(9, 'Gian Ardhani', '3C (Pemrograman)', 'Sabtu-Minggu (16.00-18.00)'),
(10, 'Rangga Aditya', '3C (Pemrograman)', 'Jumat-Sabtu (19.00-21.00)'),
(11, 'Alesha Zahra', '3C (Pemrograman)', 'Sabtu-Minggu (08.00-10.00)'),
(12, 'Thariq Hazim', '3C (Pemrograman)', 'Sabtu-Minggu (16.00-18.00)'),
(13, 'Adelia Adora', '1A (Desain Grafis)', 'Jumat-Sabtu (16.00-18.00)'),
(14, 'Rangga Aditya', '1A (Desain Grafis)', 'Jumat-Sabtu (19.00-21.00)'),
(15, 'Gian Ardhani', '1A (Desain Grafis)', 'Sabtu-Minggu (14.00-16.00)'),
(16, 'Alesha Zahra', '1A (Desain Grafis)', 'Sabtu-Minggu (16.00-18.00)'),
(17, 'Adelia Adora', '2B (Web Design)', 'Jumat-Sabtu (16.00-18.00)'),
(18, 'Thariq Hazim', '2B (Web Design)', 'Sabtu-Minggu (08.00-10.00)'),
(19, 'Gian Ardhani', '2B (Web Design)', 'Sabtu-Minggu (14.00-16.00)'),
(20, 'Alesha Zahra', '2B (Web Design)', 'Sabtu-Minggu (16.00-18.00)');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_laporan`
--

DROP TABLE IF EXISTS `tb_laporan`;
CREATE TABLE IF NOT EXISTS `tb_laporan` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nama_peserta` varchar(50) NOT NULL,
  `nama_pengajar` varchar(50) NOT NULL,
  `nomor_ruangan` varchar(20) NOT NULL,
  `hari` varchar(50) NOT NULL,
  `jenis_kursus` varchar(50) NOT NULL,
  `biaya` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_login`
--

DROP TABLE IF EXISTS `tb_login`;
CREATE TABLE IF NOT EXISTS `tb_login` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(50) NOT NULL,
  `password` varchar(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data untuk tabel `tb_login`
--

INSERT INTO `tb_login` (`id`, `username`, `password`) VALUES
(1, 'admin', 'admin123');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_pengajar`
--

DROP TABLE IF EXISTS `tb_pengajar`;
CREATE TABLE IF NOT EXISTS `tb_pengajar` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nama_pengajar` varchar(50) NOT NULL,
  `hp_pengajar` varchar(20) NOT NULL,
  `alamat_pengajar` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data untuk tabel `tb_pengajar`
--

INSERT INTO `tb_pengajar` (`id`, `nama_pengajar`, `hp_pengajar`, `alamat_pengajar`) VALUES
(1, 'Adelia Adora', '081377558695', 'Jalan Limau Bali no.13'),
(2, 'Rangga Aditya', '081254566784', 'Jalan Jend. Sudirman no.16'),
(3, 'Thariq Hazim', '081345748867', 'Jalan Jhoni Anwar no.15'),
(4, 'Gian Ardhani', '081278569075', 'Jalan Khatib Sulaiman'),
(5, 'Alesha Zahra', '081256998877', 'Jalan Adinegoro');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_registrasi`
--

DROP TABLE IF EXISTS `tb_registrasi`;
CREATE TABLE IF NOT EXISTS `tb_registrasi` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nama` varchar(50) NOT NULL,
  `jk` varchar(20) NOT NULL,
  `ttl` date NOT NULL,
  `alamat` varchar(100) NOT NULL,
  `nohp` varchar(20) NOT NULL,
  `email` varchar(50) NOT NULL,
  `jenis_kursus` varchar(50) NOT NULL,
  `hari` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=11 ;

--
-- Dumping data untuk tabel `tb_registrasi`
--

INSERT INTO `tb_registrasi` (`id`, `nama`, `jk`, `ttl`, `alamat`, `nohp`, `email`, `jenis_kursus`, `hari`) VALUES
(1, 'Luthfi Madani', 'laki-laki', '2000-01-09', 'Jalan Tan Malaka', '081345566788', 'madaniluthfi@gmail.com', 'Pemrograman', 'Sabtu-Minggu (16.00-18.00)'),
(2, 'Xavier Harun', 'laki-laki', '1999-04-12', 'Jalan Sawahan no.23', '081254566779', 'xavier12@gmail.com', 'Desain Grafis', 'Sabtu-Minggu (08.00-10.00)'),
(3, 'Alika Putri', 'perempuan', '2000-07-03', 'Jalan Alai Timur', '081345748976', 'putrialika@gmail.com', 'Web Design', 'Jumat-Sabtu (19.00-21.00)'),
(4, 'Farid Siddiq', 'laki-laki', '1999-05-22', 'Jalan Adinegoro', '081271027813', 'faird22@yahoo.com', 'Pemrograman', 'Jumat-Sabtu (16.00-18.00)'),
(7, 'Nedia Putri', 'perempuan', '2000-01-10', 'Jalan Limau Manih', '081271027888', 'nediaputri@gmail.com', 'Pemrograman', 'Jumat-Sabtu (16.00-18.00)'),
(9, 'Firsta Fadillah', 'perempuan', '2000-07-03', 'Alai', '081377645587', 'fadillah03@gmail.com', 'Pemrograman', 'Sabtu-Minggu (14.00-16.00)'),
(10, 'hamdi', 'laki-laki', '1999-06-08', 'Jl.Mawar', '0864326656', 'hamdi@gmail.com', 'Desain Grafis', 'Sabtu-Minggu (08.00-10.00)');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_ruangan`
--

DROP TABLE IF EXISTS `tb_ruangan`;
CREATE TABLE IF NOT EXISTS `tb_ruangan` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nomor_ruangan` varchar(20) NOT NULL,
  `jenis_kursus` varchar(20) NOT NULL,
  `biaya` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data untuk tabel `tb_ruangan`
--

INSERT INTO `tb_ruangan` (`id`, `nomor_ruangan`, `jenis_kursus`, `biaya`) VALUES
(1, '3C', 'Pemrograman', '1.500.000'),
(2, '1A', 'Desain Grafis', '1.600.000'),
(3, '2B', 'Web Design', '1.300.000');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

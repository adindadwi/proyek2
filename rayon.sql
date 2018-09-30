-- phpMyAdmin SQL Dump
-- version 4.2.7.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 02 Agu 2017 pada 16.02
-- Versi Server: 5.6.20
-- PHP Version: 5.5.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `rayon`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `captcha`
--

CREATE TABLE IF NOT EXISTS `captcha` (
`id` int(11) NOT NULL,
  `time` time NOT NULL,
  `ip_address` int(10) unsigned NOT NULL,
  `word` varchar(20) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=63 ;

--
-- Dumping data untuk tabel `captcha`
--

INSERT INTO `captcha` (`id`, `time`, `ip_address`, `word`) VALUES
(22, '838:59:59', 0, '398405'),
(23, '838:59:59', 0, '371001'),
(24, '838:59:59', 0, '071761'),
(25, '838:59:59', 0, '345654'),
(26, '838:59:59', 0, '687630'),
(27, '838:59:59', 0, '814494'),
(28, '838:59:59', 0, '827157'),
(29, '838:59:59', 0, '664772'),
(30, '838:59:59', 0, '744233'),
(31, '838:59:59', 0, '229389'),
(32, '838:59:59', 0, '017905'),
(33, '838:59:59', 0, '178072'),
(34, '838:59:59', 0, '755035'),
(35, '838:59:59', 0, '724291'),
(36, '838:59:59', 0, '011975'),
(37, '838:59:59', 0, '913922'),
(38, '838:59:59', 0, '764714'),
(39, '838:59:59', 0, '647292'),
(40, '838:59:59', 0, '491070'),
(41, '838:59:59', 0, '462536'),
(42, '838:59:59', 0, '701943'),
(43, '838:59:59', 0, '624404'),
(44, '838:59:59', 0, '223382'),
(45, '838:59:59', 0, '712348'),
(46, '838:59:59', 0, '634444'),
(47, '838:59:59', 0, '890470'),
(48, '838:59:59', 0, '450758'),
(49, '838:59:59', 0, '670276'),
(50, '838:59:59', 0, '710885'),
(51, '838:59:59', 0, '157533'),
(52, '838:59:59', 0, '746295'),
(53, '838:59:59', 0, '118547'),
(54, '838:59:59', 0, '485897'),
(55, '838:59:59', 0, '612064'),
(56, '838:59:59', 0, '617490'),
(57, '838:59:59', 0, '613359'),
(58, '838:59:59', 0, '284515'),
(59, '838:59:59', 0, '919830'),
(60, '838:59:59', 0, '192704'),
(61, '838:59:59', 0, '988933'),
(62, '838:59:59', 0, '699969');

-- --------------------------------------------------------

--
-- Struktur dari tabel `comment`
--

CREATE TABLE IF NOT EXISTS `comment` (
`id` int(11) NOT NULL,
  `nama` varchar(25) NOT NULL,
  `rayon` varchar(20) NOT NULL,
  `isi` text NOT NULL,
  `time` datetime NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data untuk tabel `comment`
--

INSERT INTO `comment` (`id`, `nama`, `rayon`, `isi`, `time`) VALUES
(1, 'fa', 'Batu', 'akjhda', '2015-03-12 00:00:00'),
(2, 'haidar zaenani', 'Batu', 'hay', '2015-03-16 11:39:39'),
(3, 'Dela Ariful Haruta', 'Dinoyo', 'the comment', '2015-04-11 11:25:13');

-- --------------------------------------------------------

--
-- Struktur dari tabel `lok_pemasangan_gsw`
--

CREATE TABLE IF NOT EXISTS `lok_pemasangan_gsw` (
`id` int(11) NOT NULL,
  `no_gambar` varchar(20) DEFAULT NULL,
  `no_gambar2` varchar(20) DEFAULT NULL,
  `lokasi` varchar(50) DEFAULT NULL,
  `rayon` varchar(20) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data untuk tabel `lok_pemasangan_gsw`
--

INSERT INTO `lok_pemasangan_gsw` (`id`, `no_gambar`, `no_gambar2`, `lokasi`, `rayon`) VALUES
(2, 'Mlg.2015.02.28.001', '', 'Merjosari', 'Dinoyo');

-- --------------------------------------------------------

--
-- Struktur dari tabel `lok_peng_materialtua`
--

CREATE TABLE IF NOT EXISTS `lok_peng_materialtua` (
`id` int(11) NOT NULL,
  `lokasi` varchar(30) NOT NULL,
  `exsist` varchar(10) NOT NULL,
  `penyulang` varchar(10) NOT NULL,
  `rayon` varchar(20) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data untuk tabel `lok_peng_materialtua`
--

INSERT INTO `lok_peng_materialtua` (`id`, `lokasi`, `exsist`, `penyulang`, `rayon`) VALUES
(1, 'yeeututust', 'sdas', 'asd', 'Semua'),
(2, 'Mertojoyo', 'T.144655.S', '12', 'Dinoyo');

-- --------------------------------------------------------

--
-- Struktur dari tabel `lok_penyubar`
--

CREATE TABLE IF NOT EXISTS `lok_penyubar` (
`id` int(11) NOT NULL,
  `no_gmb1` varchar(30) NOT NULL,
  `no_gmb2` varchar(30) NOT NULL,
  `lokasi` varchar(30) NOT NULL,
  `exsist` varchar(10) NOT NULL,
  `penyulang` varchar(10) NOT NULL,
  `jumlah_ganggu` varchar(10) NOT NULL,
  `rayon` varchar(20) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data untuk tabel `lok_penyubar`
--

INSERT INTO `lok_penyubar` (`id`, `no_gmb1`, `no_gmb2`, `lokasi`, `exsist`, `penyulang`, `jumlah_ganggu`, `rayon`) VALUES
(1, '12sdwff', '', '', '', '', '', 'Batu'),
(2, 'MLG.2015.2.26.001', 'MLG.2015.2.26.002', 'Tlogoagung', 'T.1555446', '', '17', 'Dinoyo');

-- --------------------------------------------------------

--
-- Struktur dari tabel `lok_penyubar_gi`
--

CREATE TABLE IF NOT EXISTS `lok_penyubar_gi` (
`id` int(11) NOT NULL,
  `no_gmb1` varchar(30) NOT NULL,
  `no_gmb2` varchar(30) NOT NULL,
  `lokasi` varchar(30) NOT NULL,
  `exsist` varchar(10) NOT NULL,
  `penyulang` varchar(10) NOT NULL,
  `jumlah_ganggu` varchar(10) NOT NULL,
  `rayon` varchar(20) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data untuk tabel `lok_penyubar_gi`
--

INSERT INTO `lok_penyubar_gi` (`id`, `no_gmb1`, `no_gmb2`, `lokasi`, `exsist`, `penyulang`, `jumlah_ganggu`, `rayon`) VALUES
(1, 'MLG.2015.2.26.001', '', 'Mertojoyo', 'T.334555', '', '11', 'Dinoyo');

-- --------------------------------------------------------

--
-- Struktur dari tabel `lok_rehab_jar_tm1`
--

CREATE TABLE IF NOT EXISTS `lok_rehab_jar_tm1` (
`id` int(11) NOT NULL,
  `id_lokmm2` varchar(20) NOT NULL,
  `no_gambar` varchar(30) NOT NULL,
  `lokasi` varchar(30) NOT NULL,
  `exsist` varchar(10) NOT NULL,
  `jumlah_X` varchar(10) NOT NULL,
  `rayon` varchar(20) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data untuk tabel `lok_rehab_jar_tm1`
--

INSERT INTO `lok_rehab_jar_tm1` (`id`, `id_lokmm2`, `no_gambar`, `lokasi`, `exsist`, `jumlah_X`, `rayon`) VALUES
(3, '', 'Mlg.2015.02.28.001', 'Mertojoyo', '10', '15', 'Dinoyo');

-- --------------------------------------------------------

--
-- Struktur dari tabel `lok_rehab_jar_tm2`
--

CREATE TABLE IF NOT EXISTS `lok_rehab_jar_tm2` (
`id` int(11) NOT NULL,
  `id_lokmm3` varchar(20) NOT NULL,
  `no_gambar` varchar(30) NOT NULL,
  `lokasi` varchar(30) NOT NULL,
  `exsist` varchar(10) NOT NULL,
  `jumlah_X` varchar(10) NOT NULL,
  `rayon` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Struktur dari tabel `lok_rehab_jtr`
--

CREATE TABLE IF NOT EXISTS `lok_rehab_jtr` (
`id` int(11) NOT NULL,
  `no_gmb1` varchar(30) NOT NULL,
  `no_gmb2` varchar(30) NOT NULL,
  `lokasi` varchar(30) NOT NULL,
  `exsist` varchar(10) NOT NULL,
  `jumlah_XX` varchar(10) NOT NULL,
  `rayon` varchar(20) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data untuk tabel `lok_rehab_jtr`
--

INSERT INTO `lok_rehab_jtr` (`id`, `no_gmb1`, `no_gmb2`, `lokasi`, `exsist`, `jumlah_XX`, `rayon`) VALUES
(1, 'MLG.2015.2.26.003', 'MLG.2015.2.26.006', 'Tlogomas', 'T.144655.S', '15', 'Dinoyo');

-- --------------------------------------------------------

--
-- Struktur dari tabel `lok_rekjtm`
--

CREATE TABLE IF NOT EXISTS `lok_rekjtm` (
`id` int(11) NOT NULL,
  `no_gmb1` varchar(20) NOT NULL,
  `no_gmb2` varchar(20) NOT NULL,
  `lokasi` varchar(20) NOT NULL,
  `exsist` varchar(10) NOT NULL,
  `penyulang` varchar(10) NOT NULL,
  `jumlah_ganggu` varchar(10) NOT NULL,
  `rayon` varchar(20) NOT NULL,
  `sutm` varchar(10) NOT NULL,
  `mvtic` varchar(10) NOT NULL,
  `ugc` varchar(10) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data untuk tabel `lok_rekjtm`
--

INSERT INTO `lok_rekjtm` (`id`, `no_gmb1`, `no_gmb2`, `lokasi`, `exsist`, `penyulang`, `jumlah_ganggu`, `rayon`, `sutm`, `mvtic`, `ugc`) VALUES
(1, 'MLG.2015.2.26.001', 'MLG.2015.2.26.002', 'Merjosari', 'T.144655.S', '', '10', 'Dinoyo', '1', '1', '1'),
(2, 'MLG.2015.2.26.003', 'MLG.2015.2.26.004', 'Mertojoyo', 'T.1555446', '', '20', 'Dinoyo', '0', '0', '0'),
(3, 'MLG.2015.2.26.001', 'MLG.2015.2.26.006', 'Bululawang', 'T.1555446', '', '15', 'Bululawang', '1', '1', '1'),
(4, '8837773', '', 'ngatang', '65', '', '10', 'Ngantang', '1', '0', '0');

-- --------------------------------------------------------

--
-- Struktur dari tabel `lok_rekjtr`
--

CREATE TABLE IF NOT EXISTS `lok_rekjtr` (
`id` int(11) NOT NULL,
  `no_gmb1` varchar(20) NOT NULL,
  `no_gmb2` varchar(20) NOT NULL,
  `lokasi` varchar(20) NOT NULL,
  `exsist` varchar(10) NOT NULL,
  `penyulang` varchar(10) NOT NULL,
  `rayon` varchar(20) NOT NULL,
  `status` varchar(10) DEFAULT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data untuk tabel `lok_rekjtr`
--

INSERT INTO `lok_rekjtr` (`id`, `no_gmb1`, `no_gmb2`, `lokasi`, `exsist`, `penyulang`, `rayon`, `status`) VALUES
(1, '123', '123', 'Batu', '3', '', 'Batu', '0');

-- --------------------------------------------------------

--
-- Struktur dari tabel `lok_sectionaliser`
--

CREATE TABLE IF NOT EXISTS `lok_sectionaliser` (
`id` int(11) NOT NULL,
  `no_gambar` varchar(30) NOT NULL,
  `no_gambar2` varchar(30) NOT NULL,
  `lokasi` varchar(30) NOT NULL,
  `exsist` varchar(10) NOT NULL,
  `penyulang` varchar(10) NOT NULL,
  `rayon` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Struktur dari tabel `lok_srr`
--

CREATE TABLE IF NOT EXISTS `lok_srr` (
`id` int(11) NOT NULL,
  `id_loksrr` varchar(20) NOT NULL,
  `no_gambar1` varchar(30) NOT NULL,
  `no_gambar2` varchar(30) NOT NULL,
  `lokasi` varchar(30) NOT NULL,
  `exsist` varchar(10) NOT NULL,
  `penyulang` varchar(10) NOT NULL,
  `rayon` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Struktur dari tabel `lok_tsj`
--

CREATE TABLE IF NOT EXISTS `lok_tsj` (
`id` int(11) NOT NULL,
  `id_loktsj` varchar(20) NOT NULL,
  `no_gambar1` varchar(30) NOT NULL,
  `no_gambar2` varchar(30) NOT NULL,
  `lokasi` varchar(30) NOT NULL,
  `exsist` varchar(10) NOT NULL,
  `penyulang` varchar(10) NOT NULL,
  `jumlah_X` varchar(10) NOT NULL,
  `rayon` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Struktur dari tabel `lok_ttuacadang`
--

CREATE TABLE IF NOT EXISTS `lok_ttuacadang` (
`id` int(11) NOT NULL,
  `lokasi` varchar(30) NOT NULL,
  `exsist` varchar(10) NOT NULL,
  `penyulang` varchar(10) NOT NULL,
  `rayon` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Struktur dari tabel `lok_uprtm_mmdua`
--

CREATE TABLE IF NOT EXISTS `lok_uprtm_mmdua` (
`id` int(11) NOT NULL,
  `id_lokmm2` varchar(20) NOT NULL,
  `no_gambar` varchar(30) NOT NULL,
  `lokasi` varchar(30) NOT NULL,
  `exsist` varchar(10) NOT NULL,
  `jumlah_X` varchar(10) NOT NULL,
  `rayon` varchar(20) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data untuk tabel `lok_uprtm_mmdua`
--

INSERT INTO `lok_uprtm_mmdua` (`id`, `id_lokmm2`, `no_gambar`, `lokasi`, `exsist`, `jumlah_X`, `rayon`) VALUES
(1, '', 'Mlg.2015.02.28.001', 'dinoyo', '3', '14', 'Dinoyo');

-- --------------------------------------------------------

--
-- Struktur dari tabel `lok_uprtm_mmtiga`
--

CREATE TABLE IF NOT EXISTS `lok_uprtm_mmtiga` (
`id` int(11) NOT NULL,
  `id_lokmm3` varchar(20) NOT NULL,
  `no_gambar` varchar(30) NOT NULL,
  `lokasi` varchar(30) NOT NULL,
  `exsist` varchar(10) NOT NULL,
  `jumlah_X` varchar(10) NOT NULL,
  `rayon` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Struktur dari tabel `lok_uprtr`
--

CREATE TABLE IF NOT EXISTS `lok_uprtr` (
`id` int(11) NOT NULL,
  `id_lokrtr` varchar(20) NOT NULL,
  `no_gambar` varchar(30) NOT NULL,
  `lokasi` varchar(30) NOT NULL,
  `exsist` varchar(10) NOT NULL,
  `jumlah_X` varchar(10) NOT NULL,
  `rayon` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Struktur dari tabel `pemasangan_gsw`
--

CREATE TABLE IF NOT EXISTS `pemasangan_gsw` (
`id` int(11) NOT NULL,
  `id_pemgsw` varchar(10) DEFAULT NULL,
  `penyulang` varchar(10) DEFAULT NULL,
  `satu` varchar(10) DEFAULT NULL,
  `dua` varchar(10) DEFAULT NULL,
  `tiga` varchar(10) DEFAULT NULL,
  `pjg_gsw` varchar(10) DEFAULT NULL,
  `est_jarak` varchar(10) DEFAULT NULL,
  `light_arr_ground` varchar(10) DEFAULT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data untuk tabel `pemasangan_gsw`
--

INSERT INTO `pemasangan_gsw` (`id`, `id_pemgsw`, `penyulang`, `satu`, `dua`, `tiga`, `pjg_gsw`, `est_jarak`, `light_arr_ground`) VALUES
(1, '', '1', '1', '1', '1', '1', '1', '');

-- --------------------------------------------------------

--
-- Struktur dari tabel `peng_materialtua`
--

CREATE TABLE IF NOT EXISTS `peng_materialtua` (
`id` int(11) NOT NULL,
  `id_pengmattua` varchar(20) NOT NULL,
  `light_arreeas_um` varchar(10) DEFAULT NULL,
  `cut_off_switch_um` varchar(10) DEFAULT NULL,
  `pin_isulator_um` varchar(10) DEFAULT NULL,
  `sr_insulator_um` varchar(10) DEFAULT NULL,
  `lvco_um` varchar(10) DEFAULT NULL,
  `lvpanel12_um` varchar(10) DEFAULT NULL,
  `lvpanel14_um` varchar(10) DEFAULT NULL,
  `light_arreeas_ub` varchar(10) DEFAULT NULL,
  `cut_off_switch_ub` varchar(10) DEFAULT NULL,
  `pin_isulator_ub` varchar(10) DEFAULT NULL,
  `sr_insulator_ub` varchar(10) DEFAULT NULL,
  `lvco_ub` varchar(10) DEFAULT NULL,
  `lvpanel12_ub` varchar(10) DEFAULT NULL,
  `lvpanel14_ub` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Struktur dari tabel `penyubar_gi_mvtic`
--

CREATE TABLE IF NOT EXISTS `penyubar_gi_mvtic` (
`id` int(11) NOT NULL,
  `id_lok` varchar(20) NOT NULL,
  `MVTIC1M` varchar(10) DEFAULT NULL,
  `MVTIC2M` varchar(10) DEFAULT NULL,
  `MVTIC4M` varchar(10) DEFAULT NULL,
  `MVTIC4AM` varchar(10) DEFAULT NULL,
  `MVTIC5M` varchar(10) DEFAULT NULL,
  `MVTIC5AM` varchar(10) DEFAULT NULL,
  `MVTIC` varchar(10) DEFAULT NULL,
  `EST_JARAK1` varchar(10) DEFAULT NULL,
  `GWM1` varchar(10) DEFAULT NULL,
  `HGWM1` varchar(10) DEFAULT NULL,
  `SPM1` varchar(10) DEFAULT NULL,
  `MVTIC1UB` varchar(10) DEFAULT NULL,
  `MVTIC2UB` varchar(10) DEFAULT NULL,
  `MVTIC4UB` varchar(10) DEFAULT NULL,
  `MVTIC4AUB` varchar(10) DEFAULT NULL,
  `MVTIC5UB` varchar(10) DEFAULT NULL,
  `MVTIC5AUB` varchar(10) DEFAULT NULL,
  `GWUB1` varchar(10) DEFAULT NULL,
  `HGWUB1` varchar(10) DEFAULT NULL,
  `SPUB1` varchar(10) DEFAULT NULL,
  `UTAMA1` varchar(10) DEFAULT NULL,
  `PENYANGGA1` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Struktur dari tabel `penyubar_gi_sutm`
--

CREATE TABLE IF NOT EXISTS `penyubar_gi_sutm` (
`id` int(11) NOT NULL,
  `id_lok` varchar(20) NOT NULL,
  `TM1M` varchar(10) DEFAULT NULL,
  `TM2M` varchar(10) DEFAULT NULL,
  `TM4M` varchar(10) DEFAULT NULL,
  `TM4XM` varchar(10) DEFAULT NULL,
  `TM5M` varchar(10) DEFAULT NULL,
  `TM8M` varchar(10) DEFAULT NULL,
  `TM8XM` varchar(10) DEFAULT NULL,
  `TM8XCM` varchar(10) DEFAULT NULL,
  `TM10M` varchar(10) DEFAULT NULL,
  `TM10XM` varchar(10) DEFAULT NULL,
  `TM11M` varchar(10) DEFAULT NULL,
  `AACS` varchar(10) DEFAULT NULL,
  `EST_JARAK` varchar(10) DEFAULT NULL,
  `GWM` varchar(10) DEFAULT NULL,
  `HGWM` varchar(10) DEFAULT NULL,
  `SPM` varchar(10) DEFAULT NULL,
  `TM1UB` varchar(10) DEFAULT NULL,
  `TM2UB` varchar(10) DEFAULT NULL,
  `TM4UB` varchar(10) DEFAULT NULL,
  `TM4XUB` varchar(10) DEFAULT NULL,
  `TM5UB` varchar(10) DEFAULT NULL,
  `TM8UB` varchar(10) DEFAULT NULL,
  `TM8XUB` varchar(10) DEFAULT NULL,
  `TM8XCUB` varchar(10) DEFAULT NULL,
  `TM10UB` varchar(10) DEFAULT NULL,
  `TM10XUB` varchar(10) DEFAULT NULL,
  `TM11UB` varchar(10) DEFAULT NULL,
  `GWUB` varchar(10) DEFAULT NULL,
  `HGWUB` varchar(10) DEFAULT NULL,
  `SPUB` varchar(10) DEFAULT NULL,
  `UTAMA` varchar(10) DEFAULT NULL,
  `PENYANGGA` varchar(10) DEFAULT NULL,
  `FERLENG_STUCK` varchar(10) DEFAULT NULL,
  `GROUND_DALAM` varchar(10) DEFAULT NULL,
  `GROUND_LUAR` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Struktur dari tabel `penyubar_gi_ugc`
--

CREATE TABLE IF NOT EXISTS `penyubar_gi_ugc` (
`id` int(11) NOT NULL,
  `id_lok` varchar(20) NOT NULL,
  `SKTM_UGC` varchar(10) DEFAULT NULL,
  `DITANAM` varchar(10) DEFAULT NULL,
  `CROSSING_JLN` varchar(10) DEFAULT NULL,
  `OUTDOOR` varchar(10) DEFAULT NULL,
  `INDOOR` varchar(10) DEFAULT NULL,
  `JOINT` varchar(10) DEFAULT NULL,
  `SKTM_UGC1` varchar(10) DEFAULT NULL,
  `DITANAM1` varchar(10) DEFAULT NULL,
  `CROSSING_JLN1` varchar(10) DEFAULT NULL,
  `OUTDOOR1` varchar(10) DEFAULT NULL,
  `INDOOR1` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Struktur dari tabel `penyubar_mvtic`
--

CREATE TABLE IF NOT EXISTS `penyubar_mvtic` (
`id` int(11) NOT NULL,
  `id_lok` varchar(20) NOT NULL,
  `MVTIC1M` varchar(10) DEFAULT NULL,
  `MVTIC2M` varchar(10) DEFAULT NULL,
  `MVTIC4M` varchar(10) DEFAULT NULL,
  `MVTIC4AM` varchar(10) DEFAULT NULL,
  `MVTIC5M` varchar(10) DEFAULT NULL,
  `MVTIC5AM` varchar(10) DEFAULT NULL,
  `MVTIC` varchar(10) DEFAULT NULL,
  `EST_JARAK1` varchar(10) DEFAULT NULL,
  `GWM1` varchar(10) DEFAULT NULL,
  `HGWM1` varchar(10) DEFAULT NULL,
  `SPM1` varchar(10) DEFAULT NULL,
  `MVTIC1UB` varchar(10) DEFAULT NULL,
  `MVTIC2UB` varchar(10) DEFAULT NULL,
  `MVTIC4UB` varchar(10) DEFAULT NULL,
  `MVTIC4AUB` varchar(10) DEFAULT NULL,
  `MVTIC5UB` varchar(10) DEFAULT NULL,
  `MVTIC5AUB` varchar(10) DEFAULT NULL,
  `GWUB1` varchar(10) DEFAULT NULL,
  `HGWUB1` varchar(10) DEFAULT NULL,
  `SPUB1` varchar(10) DEFAULT NULL,
  `UTAMA1` varchar(10) DEFAULT NULL,
  `PENYANGGA1` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Struktur dari tabel `penyubar_sutm`
--

CREATE TABLE IF NOT EXISTS `penyubar_sutm` (
`id` int(11) NOT NULL,
  `id_lok` varchar(20) NOT NULL,
  `TM1M` varchar(10) DEFAULT NULL,
  `TM2M` varchar(10) DEFAULT NULL,
  `TM4M` varchar(10) DEFAULT NULL,
  `TM4XM` varchar(10) DEFAULT NULL,
  `TM5M` varchar(10) DEFAULT NULL,
  `TM8M` varchar(10) DEFAULT NULL,
  `TM8XM` varchar(10) DEFAULT NULL,
  `TM8XCM` varchar(10) DEFAULT NULL,
  `TM10M` varchar(10) DEFAULT NULL,
  `TM10XM` varchar(10) DEFAULT NULL,
  `TM11M` varchar(10) DEFAULT NULL,
  `CONDUCTOR` varchar(10) DEFAULT NULL,
  `EST_JARAK` varchar(10) DEFAULT NULL,
  `GWM` varchar(10) DEFAULT NULL,
  `HGWM` varchar(10) DEFAULT NULL,
  `SPM` varchar(10) DEFAULT NULL,
  `TM1UB` varchar(10) DEFAULT NULL,
  `TM2UB` varchar(10) DEFAULT NULL,
  `TM4UB` varchar(10) DEFAULT NULL,
  `TM4XUB` varchar(10) DEFAULT NULL,
  `TM5UB` varchar(10) DEFAULT NULL,
  `TM8UB` varchar(10) DEFAULT NULL,
  `TM8XUB` varchar(10) DEFAULT NULL,
  `TM8XCUB` varchar(10) DEFAULT NULL,
  `TM10UB` varchar(10) DEFAULT NULL,
  `TM10XUB` varchar(10) DEFAULT NULL,
  `TM11UB` varchar(10) DEFAULT NULL,
  `GWUB` varchar(10) DEFAULT NULL,
  `HGWUB` varchar(10) DEFAULT NULL,
  `SPUB` varchar(10) DEFAULT NULL,
  `UTAMA` varchar(10) DEFAULT NULL,
  `PENYANGGA` varchar(10) DEFAULT NULL,
  `FERLENG_STUCK` varchar(10) DEFAULT NULL,
  `GROUND_DALAM` varchar(10) DEFAULT NULL,
  `GROUND_LUAR` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Struktur dari tabel `penyubar_ugc`
--

CREATE TABLE IF NOT EXISTS `penyubar_ugc` (
`id` int(11) NOT NULL,
  `id_lok` varchar(20) NOT NULL,
  `SKTM_UGC` varchar(10) DEFAULT NULL,
  `DITANAM` varchar(10) DEFAULT NULL,
  `CROSSING_JLN` varchar(10) DEFAULT NULL,
  `OUTDOOR` varchar(10) DEFAULT NULL,
  `INDOOR` varchar(10) DEFAULT NULL,
  `JOINT` varchar(10) DEFAULT NULL,
  `SKTM_UGC1` varchar(10) DEFAULT NULL,
  `DITANAM1` varchar(10) DEFAULT NULL,
  `CROSSING_JLN1` varchar(10) DEFAULT NULL,
  `OUTDOOR1` varchar(10) DEFAULT NULL,
  `INDOOR1` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Struktur dari tabel `rehab_jtm_aaacs`
--

CREATE TABLE IF NOT EXISTS `rehab_jtm_aaacs` (
`id_mm2` int(11) NOT NULL,
  `id_lokmm2` varchar(20) NOT NULL,
  `pasangan` varchar(10) DEFAULT NULL,
  `pasangan1` varchar(10) DEFAULT NULL,
  `TM1` varchar(10) DEFAULT NULL,
  `TM2` varchar(10) DEFAULT NULL,
  `TM4` varchar(10) DEFAULT NULL,
  `TM4X` varchar(10) DEFAULT NULL,
  `TM5` varchar(10) DEFAULT NULL,
  `TM8` varchar(10) DEFAULT NULL,
  `TM8X` varchar(10) DEFAULT NULL,
  `TM8XC` varchar(10) DEFAULT NULL,
  `TM10` varchar(10) DEFAULT NULL,
  `TM10X` varchar(10) DEFAULT NULL,
  `TM11` varchar(10) DEFAULT NULL,
  `GTT` varchar(10) DEFAULT NULL,
  `AVS` varchar(10) DEFAULT NULL,
  `AAACS` varchar(10) DEFAULT NULL,
  `ESTIMASI_JARAK` varchar(10) DEFAULT NULL,
  `COND_LAMA` varchar(10) DEFAULT NULL,
  `GW` varchar(10) DEFAULT NULL,
  `GWN` varchar(10) DEFAULT NULL,
  `HGW` varchar(10) DEFAULT NULL,
  `SP` varchar(10) DEFAULT NULL,
  `T_UTAMA` varchar(10) DEFAULT NULL,
  `T_PENYANGGA` varchar(10) DEFAULT NULL,
  `PIN_INS` varchar(10) DEFAULT NULL,
  `STRAIN_INS` varchar(10) DEFAULT NULL,
  `MAT_LAIN` varchar(10) DEFAULT NULL,
  `TM12` varchar(10) DEFAULT NULL,
  `TM22` varchar(10) DEFAULT NULL,
  `TM42` varchar(10) DEFAULT NULL,
  `TM4X2` varchar(10) DEFAULT NULL,
  `TM52` varchar(10) DEFAULT NULL,
  `TM82` varchar(10) DEFAULT NULL,
  `TM8X2` varchar(10) DEFAULT NULL,
  `TM8XC2` varchar(10) DEFAULT NULL,
  `TM102` varchar(10) DEFAULT NULL,
  `TM10X2` varchar(10) DEFAULT NULL,
  `TM112` varchar(10) DEFAULT NULL,
  `GTT2` varchar(10) DEFAULT NULL,
  `AVS2` varchar(10) DEFAULT NULL,
  `AAACS2` varchar(10) DEFAULT NULL,
  `COND_LAMA2` varchar(10) DEFAULT NULL,
  `GW2` varchar(10) DEFAULT NULL,
  `GWN2` varchar(10) DEFAULT NULL,
  `HGW2` varchar(10) DEFAULT NULL,
  `SP2` varchar(10) DEFAULT NULL,
  `T_UTAMA2` varchar(10) DEFAULT NULL,
  `T_PENYANGGA2` varchar(10) DEFAULT NULL,
  `PIN_INS2` varchar(10) DEFAULT NULL,
  `STRAIN_INS2` varchar(10) DEFAULT NULL,
  `MAT_LAIN2` varchar(10) DEFAULT NULL,
  `KETERANGAN` varchar(1000) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Struktur dari tabel `rehab_jtm_mvtic`
--

CREATE TABLE IF NOT EXISTS `rehab_jtm_mvtic` (
`id_mm3` int(11) NOT NULL,
  `id_lokmm3` varchar(20) NOT NULL,
  `pasangan` varchar(10) DEFAULT NULL,
  `pasangan1` varchar(10) DEFAULT NULL,
  `TM1` varchar(10) DEFAULT NULL,
  `TM2` varchar(10) DEFAULT NULL,
  `TM4` varchar(10) DEFAULT NULL,
  `TM4X` varchar(10) DEFAULT NULL,
  `TM5` varchar(10) DEFAULT NULL,
  `TM8` varchar(10) DEFAULT NULL,
  `TM8X` varchar(10) DEFAULT NULL,
  `TM8XC` varchar(10) DEFAULT NULL,
  `TM10` varchar(10) DEFAULT NULL,
  `TM10X` varchar(10) DEFAULT NULL,
  `TM11` varchar(10) DEFAULT NULL,
  `GTT` varchar(10) DEFAULT NULL,
  `AVS` varchar(10) DEFAULT NULL,
  `AAACS` varchar(10) DEFAULT NULL,
  `ESTIMASI_JARAK` varchar(10) DEFAULT NULL,
  `COND_LAMA` varchar(10) DEFAULT NULL,
  `GW` varchar(10) DEFAULT NULL,
  `GWN` varchar(10) DEFAULT NULL,
  `HGW` varchar(10) DEFAULT NULL,
  `SP` varchar(10) DEFAULT NULL,
  `T_UTAMA` varchar(10) DEFAULT NULL,
  `T_PENYANGGA` varchar(10) DEFAULT NULL,
  `PIN_INS` varchar(10) DEFAULT NULL,
  `STRAIN_INS` varchar(10) DEFAULT NULL,
  `MAT_LAIN` varchar(10) DEFAULT NULL,
  `TM12` varchar(10) DEFAULT NULL,
  `TM22` varchar(10) DEFAULT NULL,
  `TM42` varchar(10) DEFAULT NULL,
  `TM4X2` varchar(10) DEFAULT NULL,
  `TM52` varchar(10) DEFAULT NULL,
  `TM82` varchar(10) DEFAULT NULL,
  `TM8X2` varchar(10) DEFAULT NULL,
  `TM8XC2` varchar(10) DEFAULT NULL,
  `TM102` varchar(10) DEFAULT NULL,
  `TM10X2` varchar(10) DEFAULT NULL,
  `TM112` varchar(10) DEFAULT NULL,
  `GTT2` varchar(10) DEFAULT NULL,
  `AVS2` varchar(10) DEFAULT NULL,
  `AAACS2` varchar(10) DEFAULT NULL,
  `COND_LAMA2` varchar(10) DEFAULT NULL,
  `GW2` varchar(10) DEFAULT NULL,
  `GWN2` varchar(10) DEFAULT NULL,
  `HGW2` varchar(10) DEFAULT NULL,
  `SP2` varchar(10) DEFAULT NULL,
  `T_UTAMA2` varchar(10) DEFAULT NULL,
  `T_PENYANGGA2` varchar(10) DEFAULT NULL,
  `PIN_INS2` varchar(10) DEFAULT NULL,
  `STRAIN_INS2` varchar(10) DEFAULT NULL,
  `MAT_LAIN2` varchar(10) DEFAULT NULL,
  `KETERANGAN` varchar(1000) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Struktur dari tabel `rehab_jtr`
--

CREATE TABLE IF NOT EXISTS `rehab_jtr` (
`id` int(11) NOT NULL,
  `id_lok` varchar(20) NOT NULL,
  `PASANGAN` varchar(20) DEFAULT NULL,
  `PASANGAN1` varchar(20) DEFAULT NULL,
  `TR1` varchar(10) DEFAULT NULL,
  `TR2` varchar(10) DEFAULT NULL,
  `TR3` varchar(10) DEFAULT NULL,
  `TR3A` varchar(10) DEFAULT NULL,
  `TR4` varchar(10) DEFAULT NULL,
  `TR4A` varchar(20) DEFAULT NULL,
  `TR5` varchar(10) DEFAULT NULL,
  `TR6` varchar(10) DEFAULT NULL,
  `TR6A` varchar(10) DEFAULT NULL,
  `TR7` varchar(10) DEFAULT NULL,
  `CONDUCTOR` varchar(10) DEFAULT NULL,
  `ESTIMASI_JARAK` varchar(10) DEFAULT NULL,
  `INS` varchar(10) DEFAULT NULL,
  `NON_INS` varchar(10) DEFAULT NULL,
  `GW` varchar(10) DEFAULT NULL,
  `GWN` varchar(10) DEFAULT NULL,
  `HGW` varchar(10) DEFAULT NULL,
  `HGWN` varchar(10) DEFAULT NULL,
  `SP` varchar(10) DEFAULT NULL,
  `UTAMA` varchar(10) DEFAULT NULL,
  `NON_UTAMA` varchar(10) DEFAULT NULL,
  `SR_UTAMA` varchar(10) DEFAULT NULL,
  `GROUND_LUAR` varchar(10) DEFAULT NULL,
  `TR12` varchar(10) DEFAULT NULL,
  `TR22` varchar(10) DEFAULT NULL,
  `TR32` varchar(10) DEFAULT NULL,
  `TR3A2` varchar(10) DEFAULT NULL,
  `TR42` varchar(10) DEFAULT NULL,
  `TR4A2` varchar(10) DEFAULT NULL,
  `TR52` varchar(10) DEFAULT NULL,
  `TR62` varchar(10) DEFAULT NULL,
  `TR6A2` varchar(10) DEFAULT NULL,
  `TR72` varchar(10) DEFAULT NULL,
  `CONDUCTOR2` varchar(10) DEFAULT NULL,
  `ESTIMASI_JARAK2` varchar(10) DEFAULT NULL,
  `INS2` varchar(10) DEFAULT NULL,
  `NON_INS2` varchar(10) DEFAULT NULL,
  `GW2` varchar(10) DEFAULT NULL,
  `GWN2` varchar(10) DEFAULT NULL,
  `HGW2` varchar(10) DEFAULT NULL,
  `HGWN2` varchar(10) DEFAULT NULL,
  `SP2` varchar(10) DEFAULT NULL,
  `UTAMA2` varchar(10) DEFAULT NULL,
  `NON_UTAMA2` varchar(10) DEFAULT NULL,
  `SR_UTAMA2` varchar(10) DEFAULT NULL,
  `GROUND_LUAR2` varchar(10) DEFAULT NULL,
  `KETERANGAN` varchar(1000) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Struktur dari tabel `rekjtm_mvtic`
--

CREATE TABLE IF NOT EXISTS `rekjtm_mvtic` (
`id` int(11) NOT NULL,
  `id_lok` varchar(20) NOT NULL,
  `MVTIC1M` varchar(10) DEFAULT NULL,
  `MVTIC2M` varchar(10) DEFAULT NULL,
  `MVTIC4M` varchar(10) DEFAULT NULL,
  `MVTIC4AM` varchar(10) DEFAULT NULL,
  `MVTIC5M` varchar(10) DEFAULT NULL,
  `MVTIC5AM` varchar(10) DEFAULT NULL,
  `MVTIC` varchar(10) DEFAULT NULL,
  `EST_JARAK1` varchar(10) DEFAULT NULL,
  `GWM1` varchar(10) DEFAULT NULL,
  `HGWM1` varchar(10) DEFAULT NULL,
  `SPM1` varchar(10) DEFAULT NULL,
  `MVTIC1UB` varchar(10) DEFAULT NULL,
  `MVTIC2UB` varchar(10) DEFAULT NULL,
  `MVTIC4UB` varchar(10) DEFAULT NULL,
  `MVTIC4AUB` varchar(10) DEFAULT NULL,
  `MVTIC5UB` varchar(10) DEFAULT NULL,
  `MVTIC5AUB` varchar(10) DEFAULT NULL,
  `GWUB1` varchar(10) DEFAULT NULL,
  `HGWUB1` varchar(10) DEFAULT NULL,
  `SPUB1` varchar(10) DEFAULT NULL,
  `UTAMA1` varchar(10) DEFAULT NULL,
  `PENYANGGA1` varchar(10) DEFAULT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data untuk tabel `rekjtm_mvtic`
--

INSERT INTO `rekjtm_mvtic` (`id`, `id_lok`, `MVTIC1M`, `MVTIC2M`, `MVTIC4M`, `MVTIC4AM`, `MVTIC5M`, `MVTIC5AM`, `MVTIC`, `EST_JARAK1`, `GWM1`, `HGWM1`, `SPM1`, `MVTIC1UB`, `MVTIC2UB`, `MVTIC4UB`, `MVTIC4AUB`, `MVTIC5UB`, `MVTIC5AUB`, `GWUB1`, `HGWUB1`, `SPUB1`, `UTAMA1`, `PENYANGGA1`) VALUES
(1, '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1'),
(2, '3', '2', '4', '5', '6', '5', '6', '4', '6', '', '', '', '', '', '', '', '', '', '', '', '', '', '');

-- --------------------------------------------------------

--
-- Struktur dari tabel `rekjtm_sutm`
--

CREATE TABLE IF NOT EXISTS `rekjtm_sutm` (
`id` int(11) NOT NULL,
  `id_lok` varchar(20) NOT NULL,
  `TM1M` varchar(10) DEFAULT NULL,
  `TM2M` varchar(10) DEFAULT NULL,
  `TM4M` varchar(10) DEFAULT NULL,
  `TM4XM` varchar(10) DEFAULT NULL,
  `TM5M` varchar(10) DEFAULT NULL,
  `TM8M` varchar(10) DEFAULT NULL,
  `TM8XM` varchar(10) DEFAULT NULL,
  `TM8XCM` varchar(10) DEFAULT NULL,
  `TM10M` varchar(10) DEFAULT NULL,
  `TM10XM` varchar(10) DEFAULT NULL,
  `TM11M` varchar(10) DEFAULT NULL,
  `CONDUCTOR` varchar(10) DEFAULT NULL,
  `EST_JARAK` varchar(10) DEFAULT NULL,
  `GWM` varchar(10) DEFAULT NULL,
  `HGWM` varchar(10) DEFAULT NULL,
  `SPM` varchar(10) DEFAULT NULL,
  `TM1UB` varchar(10) DEFAULT NULL,
  `TM2UB` varchar(10) DEFAULT NULL,
  `TM4UB` varchar(10) DEFAULT NULL,
  `TM4XUB` varchar(10) DEFAULT NULL,
  `TM5UB` varchar(10) DEFAULT NULL,
  `TM8UB` varchar(10) DEFAULT NULL,
  `TM8XUB` varchar(10) DEFAULT NULL,
  `TM8XCUB` varchar(10) DEFAULT NULL,
  `TM10UB` varchar(10) DEFAULT NULL,
  `TM10XUB` varchar(10) DEFAULT NULL,
  `TM11UB` varchar(10) DEFAULT NULL,
  `GWUB` varchar(10) DEFAULT NULL,
  `HGWUB` varchar(10) DEFAULT NULL,
  `SPUB` varchar(10) DEFAULT NULL,
  `UTAMA` varchar(10) DEFAULT NULL,
  `PENYANGGA` varchar(10) DEFAULT NULL,
  `FERLENG_STUCK` varchar(10) DEFAULT NULL,
  `GROUND_DALAM` varchar(10) DEFAULT NULL,
  `GROUND_LUAR` varchar(10) DEFAULT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data untuk tabel `rekjtm_sutm`
--

INSERT INTO `rekjtm_sutm` (`id`, `id_lok`, `TM1M`, `TM2M`, `TM4M`, `TM4XM`, `TM5M`, `TM8M`, `TM8XM`, `TM8XCM`, `TM10M`, `TM10XM`, `TM11M`, `CONDUCTOR`, `EST_JARAK`, `GWM`, `HGWM`, `SPM`, `TM1UB`, `TM2UB`, `TM4UB`, `TM4XUB`, `TM5UB`, `TM8UB`, `TM8XUB`, `TM8XCUB`, `TM10UB`, `TM10XUB`, `TM11UB`, `GWUB`, `HGWUB`, `SPUB`, `UTAMA`, `PENYANGGA`, `FERLENG_STUCK`, `GROUND_DALAM`, `GROUND_LUAR`) VALUES
(1, '1', '1', '2', '3', '4', '5', '6', '7', '8', '9', '0', '1', '2', '3', '6', '', '6', '3', '5', '', '5', '4', '5', '6', '4', '5', '6', '5', '6', '7', '', '4', '2', '5', '3', '5'),
(2, '3', '1', '3', '4', '', '6', '2', '5', '', '5', '56', '7', '77', '7', '5', '5', '4', '6', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '3', '', '5', '6'),
(3, '4', '2', '3', '4', '6', '79', '6', '7', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '');

-- --------------------------------------------------------

--
-- Struktur dari tabel `rekjtm_ugc`
--

CREATE TABLE IF NOT EXISTS `rekjtm_ugc` (
`id` int(11) NOT NULL,
  `id_lok` varchar(20) NOT NULL,
  `SKTM_UGC` varchar(10) DEFAULT NULL,
  `DITANAM` varchar(10) DEFAULT NULL,
  `CROSSING_JLN` varchar(10) DEFAULT NULL,
  `OUTDOOR` varchar(10) DEFAULT NULL,
  `INDOOR` varchar(10) DEFAULT NULL,
  `JOINT` varchar(10) DEFAULT NULL,
  `SKTM_UGC1` varchar(10) DEFAULT NULL,
  `DITANAM1` varchar(10) DEFAULT NULL,
  `CROSSING_JLN1` varchar(10) DEFAULT NULL,
  `OUTDOOR1` varchar(10) DEFAULT NULL,
  `INDOOR1` varchar(10) DEFAULT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data untuk tabel `rekjtm_ugc`
--

INSERT INTO `rekjtm_ugc` (`id`, `id_lok`, `SKTM_UGC`, `DITANAM`, `CROSSING_JLN`, `OUTDOOR`, `INDOOR`, `JOINT`, `SKTM_UGC1`, `DITANAM1`, `CROSSING_JLN1`, `OUTDOOR1`, `INDOOR1`) VALUES
(1, '1', '2', '2', '2', '2', '2', '2', '2', '2', '2', '2', '2'),
(2, '3', '4', '45', '6', '5', '', '2', '3', '3', '', '', '');

-- --------------------------------------------------------

--
-- Struktur dari tabel `rekjtr_input`
--

CREATE TABLE IF NOT EXISTS `rekjtr_input` (
`id` int(11) NOT NULL,
  `id_lok` varchar(20) NOT NULL,
  `TR1M` varchar(10) DEFAULT NULL,
  `TR2M` varchar(10) DEFAULT NULL,
  `TR3M` varchar(10) DEFAULT NULL,
  `TR3AM` varchar(10) DEFAULT NULL,
  `TR4M` varchar(10) DEFAULT NULL,
  `TR4AM` varchar(10) DEFAULT NULL,
  `TR5M` varchar(10) DEFAULT NULL,
  `TR6M` varchar(10) DEFAULT NULL,
  `TR6AM` varchar(10) DEFAULT NULL,
  `TR7M` varchar(10) DEFAULT NULL,
  `CONDUCTOR` varchar(10) DEFAULT NULL,
  `EST_JARAK` varchar(10) DEFAULT NULL,
  `GWM` varchar(10) DEFAULT NULL,
  `GWNM` varchar(10) DEFAULT NULL,
  `HGWM` varchar(10) DEFAULT NULL,
  `TR1UB` varchar(10) DEFAULT NULL,
  `TR2UB` varchar(10) DEFAULT NULL,
  `TR3UB` varchar(10) DEFAULT NULL,
  `TR3AUB` varchar(10) DEFAULT NULL,
  `TR4UB` varchar(10) DEFAULT NULL,
  `TR4AUB` varchar(10) DEFAULT NULL,
  `TR5UB` varchar(10) DEFAULT NULL,
  `TR6UB` varchar(10) DEFAULT NULL,
  `TR6AUB` varchar(10) DEFAULT NULL,
  `TR7UB` varchar(10) DEFAULT NULL,
  `GWUB` varchar(10) DEFAULT NULL,
  `GWNUB` varchar(10) DEFAULT NULL,
  `HGWUB` varchar(10) DEFAULT NULL,
  `SP` varchar(10) DEFAULT NULL,
  `PONDASI` varchar(10) DEFAULT NULL,
  `UTAMA` varchar(10) DEFAULT NULL,
  `UTAMA_E` varchar(10) DEFAULT NULL,
  `NON_UTAMA` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Struktur dari tabel `sectionaliser`
--

CREATE TABLE IF NOT EXISTS `sectionaliser` (
`id` int(11) NOT NULL,
  `id_section` varchar(20) NOT NULL,
  `SECTION_KE` varchar(10) DEFAULT NULL,
  `TM1` varchar(10) DEFAULT NULL,
  `TM2` varchar(10) DEFAULT NULL,
  `TM5` varchar(10) DEFAULT NULL,
  `AVS` varchar(10) DEFAULT NULL,
  `RECLOZER` varchar(10) DEFAULT NULL,
  `LBS_MPRTU` varchar(10) DEFAULT NULL,
  `LBS_MNRTU` varchar(10) DEFAULT NULL,
  `RECLOZER2` varchar(10) DEFAULT NULL,
  `LBS_MPRTU2` varchar(10) DEFAULT NULL,
  `LBS_MNRTU2` varchar(10) DEFAULT NULL,
  `PONDASI` varchar(10) DEFAULT NULL,
  `LAINNYA` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Struktur dari tabel `srr`
--

CREATE TABLE IF NOT EXISTS `srr` (
`id_ssr` int(11) NOT NULL,
  `id_loksrr` varchar(20) DEFAULT NULL,
  `PASANGAN` varchar(10) DEFAULT NULL,
  `PASANGAN1` varchar(10) DEFAULT NULL,
  `TR1` varchar(10) DEFAULT NULL,
  `TR2` varchar(10) DEFAULT NULL,
  `TR3` varchar(10) DEFAULT NULL,
  `TR3A` varchar(10) DEFAULT NULL,
  `TR4` varchar(10) DEFAULT NULL,
  `TR4A` varchar(10) DEFAULT NULL,
  `TR5` varchar(10) DEFAULT NULL,
  `TR6` varchar(10) DEFAULT NULL,
  `TR6A` varchar(10) DEFAULT NULL,
  `TR7` varchar(10) DEFAULT NULL,
  `COND` varchar(10) DEFAULT NULL,
  `ESTIMASI_JARAK` varchar(10) DEFAULT NULL,
  `GW` varchar(10) DEFAULT NULL,
  `GWN` varchar(10) DEFAULT NULL,
  `HGW` varchar(10) DEFAULT NULL,
  `SP` varchar(10) DEFAULT NULL,
  `PONDASI_TIANG` varchar(10) DEFAULT NULL,
  `UTAMA` varchar(10) DEFAULT NULL,
  `UTAMA_E` varchar(10) DEFAULT NULL,
  `NON_UTAMA` varchar(10) DEFAULT NULL,
  `SDES1` varchar(10) DEFAULT NULL,
  `SDES2` varchar(10) DEFAULT NULL,
  `LAIN` varchar(10) DEFAULT NULL,
  `TR12` varchar(10) DEFAULT NULL,
  `TR22` varchar(10) DEFAULT NULL,
  `TR32` varchar(10) DEFAULT NULL,
  `TR3A2` varchar(10) DEFAULT NULL,
  `TR42` varchar(10) DEFAULT NULL,
  `TR4A2` varchar(10) DEFAULT NULL,
  `TR52` varchar(10) DEFAULT NULL,
  `TR62` varchar(10) DEFAULT NULL,
  `TR6A2` varchar(10) DEFAULT NULL,
  `TR72` varchar(10) DEFAULT NULL,
  `COND2` varchar(10) DEFAULT NULL,
  `ESTIMASI_JARAK2` varchar(10) DEFAULT NULL,
  `GW2` varchar(10) DEFAULT NULL,
  `GWN2` varchar(10) DEFAULT NULL,
  `HGW2` varchar(10) DEFAULT NULL,
  `SP2` varchar(10) DEFAULT NULL,
  `PONDASI_TIANG2` varchar(10) DEFAULT NULL,
  `UTAMA2` varchar(10) DEFAULT NULL,
  `UTAMA_E2` varchar(10) DEFAULT NULL,
  `NON_UTAMA2` varchar(10) DEFAULT NULL,
  `SDES12` varchar(10) DEFAULT NULL,
  `SDES22` varchar(10) DEFAULT NULL,
  `LAIN2` varchar(10) DEFAULT NULL,
  `KETERANGAN` varchar(1000) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_gambarrtmdua`
--

CREATE TABLE IF NOT EXISTS `tb_gambarrtmdua` (
`id` int(11) NOT NULL,
  `id_lokasi` varchar(10) NOT NULL,
  `gambar` mediumblob NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_gambarrtmtiga`
--

CREATE TABLE IF NOT EXISTS `tb_gambarrtmtiga` (
`id` int(11) NOT NULL,
  `id_lokasi` varchar(10) NOT NULL,
  `gambar` mediumblob NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_gambarrtr`
--

CREATE TABLE IF NOT EXISTS `tb_gambarrtr` (
`id` int(11) NOT NULL,
  `id_lokasi` varchar(10) NOT NULL,
  `gambar` mediumblob NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_gambarssr`
--

CREATE TABLE IF NOT EXISTS `tb_gambarssr` (
`id` int(11) NOT NULL,
  `id_lokasi` varchar(10) NOT NULL,
  `gambar` mediumblob NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_gambartsj`
--

CREATE TABLE IF NOT EXISTS `tb_gambartsj` (
`id` int(11) NOT NULL,
  `id_lokasi` varchar(10) NOT NULL,
  `gambar` mediumblob NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_gambar_jtm1`
--

CREATE TABLE IF NOT EXISTS `tb_gambar_jtm1` (
`id` int(11) NOT NULL,
  `id_lokasi` varchar(20) NOT NULL,
  `gambar` mediumblob NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_gambar_jtm2`
--

CREATE TABLE IF NOT EXISTS `tb_gambar_jtm2` (
  `id` int(11) NOT NULL,
  `id_lokasi` varchar(20) NOT NULL,
  `gambar` mediumblob NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_gambar_jtr`
--

CREATE TABLE IF NOT EXISTS `tb_gambar_jtr` (
`id` int(11) NOT NULL,
  `id_lokasi` varchar(10) NOT NULL,
  `gambar` mediumblob NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_gambar_penyubar`
--

CREATE TABLE IF NOT EXISTS `tb_gambar_penyubar` (
  `id` int(11) NOT NULL,
  `id_lokasi` varchar(20) NOT NULL,
  `gambar` mediumblob NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_gambar_penyubar`
--

INSERT INTO `tb_gambar_penyubar` (`id`, `id_lokasi`, `gambar`) VALUES
(0, '2', 0x31643638336663653233393036393963316539336538303236663966376534635f742e6a7067);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_gambar_penyubar_gi`
--

CREATE TABLE IF NOT EXISTS `tb_gambar_penyubar_gi` (
  `id` int(11) NOT NULL,
  `id_lokasi` varchar(20) NOT NULL,
  `gambar` mediumblob NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_gmbgsw`
--

CREATE TABLE IF NOT EXISTS `tb_gmbgsw` (
`id` int(11) NOT NULL,
  `id_lokasi` varchar(10) NOT NULL,
  `gambar` mediumblob NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data untuk tabel `tb_gmbgsw`
--

INSERT INTO `tb_gmbgsw` (`id`, `id_lokasi`, `gambar`) VALUES
(1, '1', 0x31643638336663653233393036393963316539336538303236663966376534635f742e6a7067),
(2, '2', 0x31643638336663653233393036393963316539336538303236663966376534635f742e6a7067);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_gmbmattua`
--

CREATE TABLE IF NOT EXISTS `tb_gmbmattua` (
`id` int(11) NOT NULL,
  `id_lokasi` varchar(10) NOT NULL,
  `gambar` mediumblob NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_gmbsect`
--

CREATE TABLE IF NOT EXISTS `tb_gmbsect` (
`id` int(11) NOT NULL,
  `id_lokasi` varchar(10) NOT NULL,
  `gambar` mediumblob NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_gmbtrafo`
--

CREATE TABLE IF NOT EXISTS `tb_gmbtrafo` (
`id` int(11) NOT NULL,
  `id_lokasi` varchar(10) NOT NULL,
  `gambar` mediumblob NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_gmb_rejtm`
--

CREATE TABLE IF NOT EXISTS `tb_gmb_rejtm` (
`id` int(11) NOT NULL,
  `id_lokasi` varchar(20) NOT NULL,
  `gambar` varchar(50) NOT NULL,
  `rayon` varchar(20) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data untuk tabel `tb_gmb_rejtm`
--

INSERT INTO `tb_gmb_rejtm` (`id`, `id_lokasi`, `gambar`, `rayon`) VALUES
(1, '2', '1d683fce2390699c1e93e8026f9f7e4c_t.jpg', 'Lawang'),
(2, '2', '1d683fce2390699c1e93e8026f9f7e4c_t1.jpg', 'Lawang'),
(3, '2', '1d683fce2390699c1e93e8026f9f7e4c_t2.jpg', 'Lawang'),
(4, '1', '1d683fce2390699c1e93e8026f9f7e4c_t.jpg', 'Batu'),
(5, '3', '1d683fce2390699c1e93e8026f9f7e4c_t.jpg', 'Bululawang');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_gmb_rejtr`
--

CREATE TABLE IF NOT EXISTS `tb_gmb_rejtr` (
`id` int(11) NOT NULL,
  `id_lokasi` varchar(20) NOT NULL,
  `gambar` varchar(50) NOT NULL,
  `rayon` varchar(20) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data untuk tabel `tb_gmb_rejtr`
--

INSERT INTO `tb_gmb_rejtr` (`id`, `id_lokasi`, `gambar`, `rayon`) VALUES
(1, '1', '1d683fce2390699c1e93e8026f9f7e4c_t.jpg', 'Batu');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tsj`
--

CREATE TABLE IF NOT EXISTS `tsj` (
  `id_tsj` varchar(20) NOT NULL,
  `id_loktsj` varchar(20) NOT NULL,
  `PASANGAN` varchar(10) NOT NULL,
  `PASANGAN1` varchar(10) NOT NULL,
  `TM1` varchar(10) NOT NULL,
  `TM2` varchar(10) NOT NULL,
  `TM4` varchar(10) NOT NULL,
  `TM4X` varchar(10) NOT NULL,
  `TM5` varchar(10) NOT NULL,
  `TM8` varchar(10) NOT NULL,
  `TM8X` varchar(10) NOT NULL,
  `TM8XC` varchar(10) NOT NULL,
  `TM10` varchar(10) NOT NULL,
  `TM10X` varchar(10) NOT NULL,
  `TM10XC` varchar(10) NOT NULL,
  `AAACS` varchar(10) NOT NULL,
  `ESTIMASI_JARAK` varchar(10) NOT NULL,
  `FERLENG_STUCK` varchar(10) NOT NULL,
  `GUY_WIRE` varchar(10) NOT NULL,
  `HGW` varchar(10) NOT NULL,
  `SP` varchar(10) NOT NULL,
  `UTAMA` varchar(10) NOT NULL,
  `PENYANGGA` varchar(10) NOT NULL,
  `KONS` varchar(10) NOT NULL,
  `50KVA` varchar(10) NOT NULL,
  `100KVA` varchar(10) NOT NULL,
  `160KVA` varchar(10) NOT NULL,
  `200KVA` varchar(10) NOT NULL,
  `250KVA` varchar(10) NOT NULL,
  `13MTR` varchar(10) NOT NULL,
  `13MTRPLUS` varchar(10) NOT NULL,
  `DEA` varchar(10) NOT NULL,
  `BEA` varchar(10) NOT NULL,
  `JUMLAH_TARIKAN` varchar(10) NOT NULL,
  `TYPE_A` varchar(10) NOT NULL,
  `TYPE_C` varchar(10) NOT NULL,
  `PASANGAN2` varchar(10) NOT NULL,
  `PASANGAN3` varchar(10) NOT NULL,
  `TR1` varchar(10) NOT NULL,
  `TR2` varchar(10) NOT NULL,
  `TR3` varchar(10) NOT NULL,
  `TR3A` varchar(10) NOT NULL,
  `TR4` varchar(10) NOT NULL,
  `TR4A` varchar(10) NOT NULL,
  `TR5` varchar(10) NOT NULL,
  `TR6` varchar(10) NOT NULL,
  `TR6A` varchar(10) NOT NULL,
  `TR7` varchar(10) NOT NULL,
  `CONDUCTOR` varchar(10) NOT NULL,
  `ESTIMASI_JARAK2` varchar(10) NOT NULL,
  `GW` varchar(10) NOT NULL,
  `GWN` varchar(10) NOT NULL,
  `HGW2` varchar(10) NOT NULL,
  `SP2` varchar(10) NOT NULL,
  `PONDASI_TIANG` varchar(10) NOT NULL,
  `UTAMA2` varchar(10) NOT NULL,
  `UTAMA_E` varchar(10) NOT NULL,
  `PENYANGGA4` varchar(10) NOT NULL,
  `TM12` varchar(10) NOT NULL,
  `TM22` varchar(10) NOT NULL,
  `TM42` varchar(10) NOT NULL,
  `TM4X2` varchar(10) NOT NULL,
  `TM52` varchar(10) NOT NULL,
  `TM82` varchar(10) NOT NULL,
  `TM8X2` varchar(10) NOT NULL,
  `TM8XC2` varchar(10) NOT NULL,
  `TM102` varchar(10) NOT NULL,
  `TM10X2` varchar(10) NOT NULL,
  `TM10XC2` varchar(10) NOT NULL,
  `AAACS2` varchar(10) NOT NULL,
  `FERLENG_STUCK2` varchar(10) NOT NULL,
  `GUY_WIRE2` varchar(10) NOT NULL,
  `HGW3` varchar(10) NOT NULL,
  `SP3` varchar(10) NOT NULL,
  `UTAMA3` varchar(10) NOT NULL,
  `PENYANGGA2` varchar(10) NOT NULL,
  `KONS2` varchar(10) NOT NULL,
  `50KVA2` varchar(10) NOT NULL,
  `100KVA2` varchar(10) NOT NULL,
  `160KVA2` varchar(10) NOT NULL,
  `200KVA2` varchar(10) NOT NULL,
  `250KVA2` varchar(10) NOT NULL,
  `13MTR2` varchar(10) NOT NULL,
  `13MTRPLUS2` varchar(10) NOT NULL,
  `DEA2` varchar(10) NOT NULL,
  `BEA2` varchar(10) NOT NULL,
  `JUMLAH_TARIKAN2` varchar(10) NOT NULL,
  `TYPE_A2` varchar(10) NOT NULL,
  `TYPE_C2` varchar(10) NOT NULL,
  `PASANGAN22` varchar(10) NOT NULL,
  `PASANGAN32` varchar(10) NOT NULL,
  `TR12` varchar(10) NOT NULL,
  `TR22` varchar(10) NOT NULL,
  `TR32` varchar(10) NOT NULL,
  `TR3A2` varchar(10) NOT NULL,
  `TR42` varchar(10) NOT NULL,
  `TR4A2` varchar(10) NOT NULL,
  `TR52` varchar(10) NOT NULL,
  `TR62` varchar(10) NOT NULL,
  `TR6A2` varchar(10) NOT NULL,
  `TR72` varchar(10) NOT NULL,
  `CONDUCTOR2` varchar(10) NOT NULL,
  `GW2` varchar(10) NOT NULL,
  `GWN3` varchar(10) NOT NULL,
  `HGW4` varchar(10) NOT NULL,
  `SP4` varchar(10) NOT NULL,
  `PONDASI_TIANG2` varchar(10) NOT NULL,
  `UTAMA4` varchar(10) NOT NULL,
  `UTAMA_E2` varchar(10) NOT NULL,
  `PENYANGGA3` varchar(10) NOT NULL,
  `KETERANGAN` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `uprtm_mmdua`
--

CREATE TABLE IF NOT EXISTS `uprtm_mmdua` (
`id_mm2` int(11) NOT NULL,
  `id_lokmm2` varchar(20) DEFAULT NULL,
  `pasangan` varchar(10) DEFAULT NULL,
  `pasangan1` varchar(10) DEFAULT NULL,
  `TM1` varchar(10) DEFAULT NULL,
  `TM2` varchar(10) DEFAULT NULL,
  `TM4` varchar(10) DEFAULT NULL,
  `TM4X` varchar(10) DEFAULT NULL,
  `TM5` varchar(10) DEFAULT NULL,
  `TM8` varchar(10) DEFAULT NULL,
  `TM8X` varchar(10) DEFAULT NULL,
  `TM8XC` varchar(10) DEFAULT NULL,
  `TM10` varchar(10) DEFAULT NULL,
  `TM10X` varchar(10) DEFAULT NULL,
  `TM11` varchar(10) DEFAULT NULL,
  `GTT` varchar(10) DEFAULT NULL,
  `AVS` varchar(10) DEFAULT NULL,
  `AAACS` varchar(10) DEFAULT NULL,
  `ESTIMASI_JARAK` varchar(10) DEFAULT NULL,
  `COND_LAMA` varchar(10) DEFAULT NULL,
  `GW` varchar(10) DEFAULT NULL,
  `GWN` varchar(10) DEFAULT NULL,
  `HGW` varchar(10) DEFAULT NULL,
  `SP` varchar(10) DEFAULT NULL,
  `T_UTAMA` varchar(10) DEFAULT NULL,
  `T_PENYANGGA` varchar(10) DEFAULT NULL,
  `PIN_INS` varchar(10) DEFAULT NULL,
  `STRAIN_INS` varchar(10) DEFAULT NULL,
  `MAT_LAIN` varchar(10) DEFAULT NULL,
  `TM12` varchar(10) DEFAULT NULL,
  `TM22` varchar(10) DEFAULT NULL,
  `TM42` varchar(10) DEFAULT NULL,
  `TM4X2` varchar(10) DEFAULT NULL,
  `TM52` varchar(10) DEFAULT NULL,
  `TM82` varchar(10) DEFAULT NULL,
  `TM8X2` varchar(10) DEFAULT NULL,
  `TM8XC2` varchar(10) DEFAULT NULL,
  `TM102` varchar(10) DEFAULT NULL,
  `TM10X2` varchar(10) DEFAULT NULL,
  `TM112` varchar(10) DEFAULT NULL,
  `GTT2` varchar(10) DEFAULT NULL,
  `AVS2` varchar(10) DEFAULT NULL,
  `AAACS2` varchar(10) DEFAULT NULL,
  `COND_LAMA2` varchar(10) DEFAULT NULL,
  `GW2` varchar(10) DEFAULT NULL,
  `GWN2` varchar(10) DEFAULT NULL,
  `HGW2` varchar(10) DEFAULT NULL,
  `SP2` varchar(10) DEFAULT NULL,
  `T_UTAMA2` varchar(10) DEFAULT NULL,
  `T_PENYANGGA2` varchar(10) DEFAULT NULL,
  `PIN_INS2` varchar(10) DEFAULT NULL,
  `STRAIN_INS2` varchar(10) DEFAULT NULL,
  `MAT_LAIN2` varchar(10) DEFAULT NULL,
  `KETERANGAN` varchar(1000) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Struktur dari tabel `uprtm_mmtiga`
--

CREATE TABLE IF NOT EXISTS `uprtm_mmtiga` (
`id_mm3` int(11) NOT NULL,
  `id_lokmm3` varchar(20) DEFAULT NULL,
  `pasangan` varchar(10) DEFAULT NULL,
  `pasangan1` varchar(10) DEFAULT NULL,
  `TM1` varchar(10) DEFAULT NULL,
  `TM2` varchar(10) DEFAULT NULL,
  `TM4` varchar(10) DEFAULT NULL,
  `TM4X` varchar(10) DEFAULT NULL,
  `TM5` varchar(10) DEFAULT NULL,
  `TM8` varchar(10) DEFAULT NULL,
  `TM8X` varchar(10) DEFAULT NULL,
  `TM8XC` varchar(10) DEFAULT NULL,
  `TM10` varchar(10) DEFAULT NULL,
  `TM10X` varchar(10) DEFAULT NULL,
  `TM11` varchar(10) DEFAULT NULL,
  `GTT` varchar(10) DEFAULT NULL,
  `AVS` varchar(10) DEFAULT NULL,
  `AAACS` varchar(10) DEFAULT NULL,
  `ESTIMASI_JARAK` varchar(10) DEFAULT NULL,
  `COND_LAMA` varchar(10) DEFAULT NULL,
  `GW` varchar(10) DEFAULT NULL,
  `GWN` varchar(10) DEFAULT NULL,
  `HGW` varchar(10) DEFAULT NULL,
  `SP` varchar(10) DEFAULT NULL,
  `T_UTAMA` varchar(10) DEFAULT NULL,
  `T_PENYANGGA` varchar(10) DEFAULT NULL,
  `PIN_INS` varchar(10) DEFAULT NULL,
  `STRAIN_INS` varchar(10) DEFAULT NULL,
  `MAT_LAIN` varchar(10) DEFAULT NULL,
  `TM12` varchar(10) DEFAULT NULL,
  `TM22` varchar(10) DEFAULT NULL,
  `TM42` varchar(10) DEFAULT NULL,
  `TM4X2` varchar(10) DEFAULT NULL,
  `TM52` varchar(10) DEFAULT NULL,
  `TM82` varchar(10) DEFAULT NULL,
  `TM8X2` varchar(10) DEFAULT NULL,
  `TM8XC2` varchar(10) DEFAULT NULL,
  `TM102` varchar(10) DEFAULT NULL,
  `TM10X2` varchar(10) DEFAULT NULL,
  `TM112` varchar(10) DEFAULT NULL,
  `GTT2` varchar(10) DEFAULT NULL,
  `AVS2` varchar(10) DEFAULT NULL,
  `AAACS2` varchar(10) DEFAULT NULL,
  `COND_LAMA2` varchar(10) DEFAULT NULL,
  `GW2` varchar(10) DEFAULT NULL,
  `GWN2` varchar(10) DEFAULT NULL,
  `HGW2` varchar(10) DEFAULT NULL,
  `SP2` varchar(10) DEFAULT NULL,
  `T_UTAMA2` varchar(10) DEFAULT NULL,
  `T_PENYANGGA2` varchar(10) DEFAULT NULL,
  `PIN_INS2` varchar(10) DEFAULT NULL,
  `STRAIN_INS2` varchar(10) DEFAULT NULL,
  `MAT_LAIN2` varchar(10) DEFAULT NULL,
  `KETERANGAN` varchar(1000) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Struktur dari tabel `uprtr`
--

CREATE TABLE IF NOT EXISTS `uprtr` (
`id_rtr` int(11) NOT NULL,
  `id_lokrtr` varchar(20) DEFAULT NULL,
  `pasangan` varchar(10) DEFAULT NULL,
  `pasangan1` varchar(10) DEFAULT NULL,
  `TR1` varchar(10) DEFAULT NULL,
  `TR2` varchar(10) DEFAULT NULL,
  `TR3` varchar(10) DEFAULT NULL,
  `TR3A` varchar(10) DEFAULT NULL,
  `TR4` varchar(10) DEFAULT NULL,
  `TR4A` varchar(10) DEFAULT NULL,
  `TR5` varchar(10) DEFAULT NULL,
  `TR6` varchar(10) DEFAULT NULL,
  `TR6A` varchar(10) DEFAULT NULL,
  `TR7` varchar(10) DEFAULT NULL,
  `CONDUCTOR` varchar(10) DEFAULT NULL,
  `INS` varchar(10) DEFAULT NULL,
  `NON_INS` varchar(10) DEFAULT NULL,
  `GW` varchar(10) DEFAULT NULL,
  `GWN` varchar(10) DEFAULT NULL,
  `HGW` varchar(10) DEFAULT NULL,
  `HGWN` varchar(10) DEFAULT NULL,
  `SP` varchar(10) DEFAULT NULL,
  `UTAMA` varchar(10) DEFAULT NULL,
  `NON_UTAMA` varchar(10) DEFAULT NULL,
  `SR_UTAMA` varchar(10) DEFAULT NULL,
  `GROUND_LUAR` varchar(10) DEFAULT NULL,
  `TR12` varchar(10) DEFAULT NULL,
  `TR22` varchar(10) DEFAULT NULL,
  `TR32` varchar(10) DEFAULT NULL,
  `TR3A2` varchar(10) DEFAULT NULL,
  `TR42` varchar(10) DEFAULT NULL,
  `TR4A2` varchar(10) DEFAULT NULL,
  `TR52` varchar(10) DEFAULT NULL,
  `TR62` varchar(10) DEFAULT NULL,
  `TR6A2` varchar(10) DEFAULT NULL,
  `TR72` varchar(10) DEFAULT NULL,
  `CONDUCTOR2` varchar(10) DEFAULT NULL,
  `INS2` varchar(10) DEFAULT NULL,
  `NON_INS2` varchar(10) DEFAULT NULL,
  `GW2` varchar(10) DEFAULT NULL,
  `GWN2` varchar(10) DEFAULT NULL,
  `HGW2` varchar(10) DEFAULT NULL,
  `HGWN2` varchar(10) DEFAULT NULL,
  `SP2` varchar(10) DEFAULT NULL,
  `UTAMA2` varchar(10) DEFAULT NULL,
  `NON_UTAMA2` varchar(10) DEFAULT NULL,
  `SR_UTAMA2` varchar(10) DEFAULT NULL,
  `GROUND_LUAR2` varchar(10) DEFAULT NULL,
  `KETERANGAN` varchar(1000) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE IF NOT EXISTS `user` (
`id_user` int(11) NOT NULL,
  `nama` varchar(30) NOT NULL,
  `username` varchar(25) NOT NULL,
  `password` varchar(255) NOT NULL,
  `foto` mediumblob NOT NULL,
  `rayon` varchar(20) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=15 ;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`id_user`, `nama`, `username`, `password`, `foto`, `rayon`) VALUES
(10, 'haidar zaenani', 'gonduk', 'ab009e3a96ca6d2a3aa70fbc6ba7c6d0', 0x333130383834342e6a7067, 'Semua'),
(11, 'Dela Ariful Haruta', 'dela', '4e4a3b45c22f1be8f65067b617722ad6', 0x4453435f303139352e6a7067, 'Dinoyo'),
(12, 'administartor', 'admin', '21232f297a57a5a743894a0e4a801fc3', '', 'Semua'),
(13, 'bob', 'bob', '81dc9bdb52d04dc20036dbd8313ed055', '', 'Bululawang'),
(14, 'apip', 'apip', '5afc731a4d5274f52c9bf71be129b609', 0x4d616e636865737465725f556e697465645f5265645f446576696c735f57686974655f53686972742831292e6a7067, 'Ngantang');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `captcha`
--
ALTER TABLE `captcha`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `comment`
--
ALTER TABLE `comment`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `lok_pemasangan_gsw`
--
ALTER TABLE `lok_pemasangan_gsw`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `lok_peng_materialtua`
--
ALTER TABLE `lok_peng_materialtua`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `lok_penyubar`
--
ALTER TABLE `lok_penyubar`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `lok_penyubar_gi`
--
ALTER TABLE `lok_penyubar_gi`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `lok_rehab_jar_tm1`
--
ALTER TABLE `lok_rehab_jar_tm1`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `lok_rehab_jar_tm2`
--
ALTER TABLE `lok_rehab_jar_tm2`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `lok_rehab_jtr`
--
ALTER TABLE `lok_rehab_jtr`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `lok_rekjtm`
--
ALTER TABLE `lok_rekjtm`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `lok_rekjtr`
--
ALTER TABLE `lok_rekjtr`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `lok_sectionaliser`
--
ALTER TABLE `lok_sectionaliser`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `lok_srr`
--
ALTER TABLE `lok_srr`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `lok_tsj`
--
ALTER TABLE `lok_tsj`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `lok_ttuacadang`
--
ALTER TABLE `lok_ttuacadang`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `lok_uprtm_mmdua`
--
ALTER TABLE `lok_uprtm_mmdua`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `lok_uprtm_mmtiga`
--
ALTER TABLE `lok_uprtm_mmtiga`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `lok_uprtr`
--
ALTER TABLE `lok_uprtr`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pemasangan_gsw`
--
ALTER TABLE `pemasangan_gsw`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `peng_materialtua`
--
ALTER TABLE `peng_materialtua`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `penyubar_gi_mvtic`
--
ALTER TABLE `penyubar_gi_mvtic`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `penyubar_gi_sutm`
--
ALTER TABLE `penyubar_gi_sutm`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `penyubar_gi_ugc`
--
ALTER TABLE `penyubar_gi_ugc`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `penyubar_mvtic`
--
ALTER TABLE `penyubar_mvtic`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `penyubar_sutm`
--
ALTER TABLE `penyubar_sutm`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `penyubar_ugc`
--
ALTER TABLE `penyubar_ugc`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `rehab_jtm_aaacs`
--
ALTER TABLE `rehab_jtm_aaacs`
 ADD PRIMARY KEY (`id_mm2`);

--
-- Indexes for table `rehab_jtm_mvtic`
--
ALTER TABLE `rehab_jtm_mvtic`
 ADD PRIMARY KEY (`id_mm3`);

--
-- Indexes for table `rehab_jtr`
--
ALTER TABLE `rehab_jtr`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `rekjtm_mvtic`
--
ALTER TABLE `rekjtm_mvtic`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `rekjtm_sutm`
--
ALTER TABLE `rekjtm_sutm`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `rekjtm_ugc`
--
ALTER TABLE `rekjtm_ugc`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `rekjtr_input`
--
ALTER TABLE `rekjtr_input`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sectionaliser`
--
ALTER TABLE `sectionaliser`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `srr`
--
ALTER TABLE `srr`
 ADD PRIMARY KEY (`id_ssr`);

--
-- Indexes for table `tb_gambarrtmdua`
--
ALTER TABLE `tb_gambarrtmdua`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_gambarrtmtiga`
--
ALTER TABLE `tb_gambarrtmtiga`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_gambarrtr`
--
ALTER TABLE `tb_gambarrtr`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_gambarssr`
--
ALTER TABLE `tb_gambarssr`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_gambartsj`
--
ALTER TABLE `tb_gambartsj`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_gambar_jtm1`
--
ALTER TABLE `tb_gambar_jtm1`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_gambar_jtr`
--
ALTER TABLE `tb_gambar_jtr`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_gmbgsw`
--
ALTER TABLE `tb_gmbgsw`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_gmbmattua`
--
ALTER TABLE `tb_gmbmattua`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_gmbsect`
--
ALTER TABLE `tb_gmbsect`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_gmbtrafo`
--
ALTER TABLE `tb_gmbtrafo`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_gmb_rejtm`
--
ALTER TABLE `tb_gmb_rejtm`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_gmb_rejtr`
--
ALTER TABLE `tb_gmb_rejtr`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `uprtm_mmdua`
--
ALTER TABLE `uprtm_mmdua`
 ADD PRIMARY KEY (`id_mm2`);

--
-- Indexes for table `uprtm_mmtiga`
--
ALTER TABLE `uprtm_mmtiga`
 ADD PRIMARY KEY (`id_mm3`);

--
-- Indexes for table `uprtr`
--
ALTER TABLE `uprtr`
 ADD PRIMARY KEY (`id_rtr`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
 ADD PRIMARY KEY (`id_user`), ADD UNIQUE KEY `nama` (`nama`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `captcha`
--
ALTER TABLE `captcha`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=63;
--
-- AUTO_INCREMENT for table `comment`
--
ALTER TABLE `comment`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `lok_pemasangan_gsw`
--
ALTER TABLE `lok_pemasangan_gsw`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `lok_peng_materialtua`
--
ALTER TABLE `lok_peng_materialtua`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `lok_penyubar`
--
ALTER TABLE `lok_penyubar`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `lok_penyubar_gi`
--
ALTER TABLE `lok_penyubar_gi`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `lok_rehab_jar_tm1`
--
ALTER TABLE `lok_rehab_jar_tm1`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `lok_rehab_jar_tm2`
--
ALTER TABLE `lok_rehab_jar_tm2`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `lok_rehab_jtr`
--
ALTER TABLE `lok_rehab_jtr`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `lok_rekjtm`
--
ALTER TABLE `lok_rekjtm`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `lok_rekjtr`
--
ALTER TABLE `lok_rekjtr`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `lok_sectionaliser`
--
ALTER TABLE `lok_sectionaliser`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `lok_srr`
--
ALTER TABLE `lok_srr`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `lok_tsj`
--
ALTER TABLE `lok_tsj`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `lok_ttuacadang`
--
ALTER TABLE `lok_ttuacadang`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `lok_uprtm_mmdua`
--
ALTER TABLE `lok_uprtm_mmdua`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `lok_uprtm_mmtiga`
--
ALTER TABLE `lok_uprtm_mmtiga`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `lok_uprtr`
--
ALTER TABLE `lok_uprtr`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `pemasangan_gsw`
--
ALTER TABLE `pemasangan_gsw`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `peng_materialtua`
--
ALTER TABLE `peng_materialtua`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `penyubar_gi_mvtic`
--
ALTER TABLE `penyubar_gi_mvtic`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `penyubar_gi_sutm`
--
ALTER TABLE `penyubar_gi_sutm`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `penyubar_gi_ugc`
--
ALTER TABLE `penyubar_gi_ugc`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `penyubar_mvtic`
--
ALTER TABLE `penyubar_mvtic`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `penyubar_sutm`
--
ALTER TABLE `penyubar_sutm`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `penyubar_ugc`
--
ALTER TABLE `penyubar_ugc`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `rehab_jtm_aaacs`
--
ALTER TABLE `rehab_jtm_aaacs`
MODIFY `id_mm2` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `rehab_jtm_mvtic`
--
ALTER TABLE `rehab_jtm_mvtic`
MODIFY `id_mm3` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `rehab_jtr`
--
ALTER TABLE `rehab_jtr`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `rekjtm_mvtic`
--
ALTER TABLE `rekjtm_mvtic`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `rekjtm_sutm`
--
ALTER TABLE `rekjtm_sutm`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `rekjtm_ugc`
--
ALTER TABLE `rekjtm_ugc`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `rekjtr_input`
--
ALTER TABLE `rekjtr_input`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `sectionaliser`
--
ALTER TABLE `sectionaliser`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `srr`
--
ALTER TABLE `srr`
MODIFY `id_ssr` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `tb_gambarrtmdua`
--
ALTER TABLE `tb_gambarrtmdua`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `tb_gambarrtmtiga`
--
ALTER TABLE `tb_gambarrtmtiga`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `tb_gambarrtr`
--
ALTER TABLE `tb_gambarrtr`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `tb_gambarssr`
--
ALTER TABLE `tb_gambarssr`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `tb_gambartsj`
--
ALTER TABLE `tb_gambartsj`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `tb_gambar_jtm1`
--
ALTER TABLE `tb_gambar_jtm1`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `tb_gambar_jtr`
--
ALTER TABLE `tb_gambar_jtr`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `tb_gmbgsw`
--
ALTER TABLE `tb_gmbgsw`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `tb_gmbmattua`
--
ALTER TABLE `tb_gmbmattua`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `tb_gmbsect`
--
ALTER TABLE `tb_gmbsect`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `tb_gmbtrafo`
--
ALTER TABLE `tb_gmbtrafo`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `tb_gmb_rejtm`
--
ALTER TABLE `tb_gmb_rejtm`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `tb_gmb_rejtr`
--
ALTER TABLE `tb_gmb_rejtr`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `uprtm_mmdua`
--
ALTER TABLE `uprtm_mmdua`
MODIFY `id_mm2` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `uprtm_mmtiga`
--
ALTER TABLE `uprtm_mmtiga`
MODIFY `id_mm3` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `uprtr`
--
ALTER TABLE `uprtr`
MODIFY `id_rtr` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=15;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

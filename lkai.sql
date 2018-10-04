-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 04 Okt 2018 pada 13.29
-- Versi Server: 10.1.26-MariaDB
-- PHP Version: 7.1.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `lkai`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `aacs_jtm_rehab`
--

CREATE TABLE `aacs_jtm_rehab` (
  `mm2_id` int(11) NOT NULL,
  `lokmm2_id` varchar(20) NOT NULL,
  `pasangan1` varchar(10) DEFAULT NULL,
  `pasangan2` varchar(10) DEFAULT NULL,
  `MT1` varchar(10) DEFAULT NULL,
  `MT2` varchar(10) DEFAULT NULL,
  `MT4` varchar(10) DEFAULT NULL,
  `MT5` varchar(10) DEFAULT NULL,
  `MT8` varchar(10) DEFAULT NULL,
  `MT8X` varchar(10) DEFAULT NULL,
  `MT8XC` varchar(10) DEFAULT NULL,
  `MT10` varchar(10) DEFAULT NULL,
  `MT10X` varchar(10) DEFAULT NULL,
  `MT11` varchar(10) DEFAULT NULL,
  `TTG` varchar(10) DEFAULT NULL,
  `SVA` varchar(10) DEFAULT NULL,
  `CSAAA` varchar(10) DEFAULT NULL,
  `JARAK_ESTIMA` varchar(10) DEFAULT NULL,
  `LAM_COND` varchar(10) DEFAULT NULL,
  `WG` varchar(10) DEFAULT NULL,
  `NWG` varchar(10) DEFAULT NULL,
  `WGH` varchar(10) DEFAULT NULL,
  `PS` varchar(10) DEFAULT NULL,
  `UTAM_T` varchar(10) DEFAULT NULL,
  `PEYANG_T` varchar(10) DEFAULT NULL,
  `INS_PIN` varchar(10) DEFAULT NULL,
  `INS_STRIN` varchar(10) DEFAULT NULL,
  `LAIN_MAT` varchar(10) DEFAULT NULL,
  `MT12` varchar(10) DEFAULT NULL,
  `MT22` varchar(10) DEFAULT NULL,
  `MT4X` varchar(10) DEFAULT NULL,
  `MT42` varchar(10) DEFAULT NULL,
  `MT4X2` varchar(10) DEFAULT NULL,
  `MT52` varchar(10) DEFAULT NULL,
  `MT82` varchar(10) DEFAULT NULL,
  `MT8X2` varchar(10) DEFAULT NULL,
  `MT8C2` varchar(10) DEFAULT NULL,
  `MT102` varchar(10) DEFAULT NULL,
  `MT10X2` varchar(10) DEFAULT NULL,
  `MT112` varchar(10) DEFAULT NULL,
  `TTG2` text,
  `SVA2` varchar(10) DEFAULT NULL,
  `CSAAA2` varchar(10) DEFAULT NULL,
  `LAMA2_CONS` varchar(10) DEFAULT NULL,
  `WG2` int(10) DEFAULT NULL,
  `NWG2` int(10) DEFAULT NULL,
  `WGH2` int(10) DEFAULT NULL,
  `PS2` int(10) DEFAULT NULL,
  `UTAMA2_T` int(10) DEFAULT NULL,
  `PEYANG2_T` int(10) DEFAULT NULL,
  `INS2_PIN` int(10) DEFAULT NULL,
  `INS2_STRAIN` int(10) DEFAULT NULL,
  `LAIN2_MAT` int(10) DEFAULT NULL,
  `KET` varchar(1000) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `kol_jtmrek`
--

CREATE TABLE `kol_jtmrek` (
  `id` int(11) NOT NULL,
  `bgr_no` varchar(20) NOT NULL,
  `gbr2_no` varchar(20) NOT NULL,
  `lks` varchar(20) NOT NULL,
  `ex_sist` varchar(10) NOT NULL,
  `penylang` varchar(10) NOT NULL,
  `jlm_ganggu` varchar(10) NOT NULL,
  `ryn` varchar(20) NOT NULL,
  `mtsu` varchar(20) NOT NULL,
  `ctivm` varchar(10) NOT NULL,
  `cgu` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `kol_mrtpu_duamm`
--

CREATE TABLE `kol_mrtpu_duamm` (
  `id` int(11) NOT NULL,
  `id_mm2lok` varchar(30) NOT NULL,
  `no_gbr` varchar(30) NOT NULL,
  `lks` varchar(30) NOT NULL,
  `ex_sist` varchar(10) NOT NULL,
  `jlm_x` varchar(10) NOT NULL,
  `ryn` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `kol_mrtpu_tigamm`
--

CREATE TABLE `kol_mrtpu_tigamm` (
  `id` int(11) NOT NULL,
  `id_mm3lok` varchar(20) NOT NULL,
  `no_gbr` varchar(30) NOT NULL,
  `lks` varchar(30) NOT NULL,
  `ex_sist` varchar(10) NOT NULL,
  `jlm_x` varchar(10) NOT NULL,
  `ryn` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `kol_pnybar`
--

CREATE TABLE `kol_pnybar` (
  `id` int(11) NOT NULL,
  `n_gbr1` varchar(30) NOT NULL,
  `n_gbr2` varchar(30) NOT NULL,
  `lks` varchar(30) NOT NULL,
  `ex_sist` varchar(10) NOT NULL,
  `penylang` varchar(10) NOT NULL,
  `jlm_gangguan` varchar(10) NOT NULL,
  `ryn` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `kol_pnybar_gi`
--

CREATE TABLE `kol_pnybar_gi` (
  `id` int(11) NOT NULL,
  `n_gbr1` varchar(30) DEFAULT NULL,
  `n_gbr2` varchar(30) NOT NULL,
  `lks` varchar(30) NOT NULL,
  `ex_sist` varchar(10) NOT NULL,
  `penylang` varchar(10) NOT NULL,
  `jlm_gangguan` varchar(10) NOT NULL,
  `ryn` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `kol_rhab_jar_tm2`
--

CREATE TABLE `kol_rhab_jar_tm2` (
  `id` int(11) NOT NULL,
  `id_2lomm` varchar(20) NOT NULL,
  `gmr_no` varchar(30) NOT NULL,
  `lks` varchar(30) NOT NULL,
  `ex_sist` varchar(10) NOT NULL,
  `jlm_x` varchar(10) NOT NULL,
  `ryn` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `kol_ttuacadang`
--

CREATE TABLE `kol_ttuacadang` (
  `id` int(11) NOT NULL,
  `lks` varchar(30) NOT NULL,
  `ex_sist` varchar(10) NOT NULL,
  `penylang` varchar(10) NOT NULL,
  `ryn` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `lok_pemasangan_gswire`
--

CREATE TABLE `lok_pemasangan_gswire` (
  `id_` int(11) NOT NULL,
  `gambar_no` varchar(20) DEFAULT NULL,
  `gambar_no2` varchar(20) DEFAULT NULL,
  `lok_pemgswire` varchar(50) DEFAULT NULL,
  `wilayah` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `lok_pemasangan_gswire`
--

INSERT INTO `lok_pemasangan_gswire` (`id_`, `gambar_no`, `gambar_no2`, `lok_pemgswire`, `wilayah`) VALUES
(2, 'Mlg.2015.02.28.001', '', 'Merjosari', 'Dinoyo');

-- --------------------------------------------------------

--
-- Struktur dari tabel `lok_rehab_jar_tm1`
--

CREATE TABLE `lok_rehab_jar_tm1` (
  `id` int(11) NOT NULL,
  `id_2lomm` varchar(20) NOT NULL,
  `gmr_no` varchar(30) NOT NULL,
  `lks` varchar(30) NOT NULL,
  `ex_sist` varchar(10) NOT NULL,
  `jlm_x` varchar(10) NOT NULL,
  `ryn` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `lok_sectionalizer`
--

CREATE TABLE `lok_sectionalizer` (
  `id_` int(11) NOT NULL,
  `gambar_no` varchar(30) NOT NULL,
  `gambar_no2` varchar(30) NOT NULL,
  `lok_sect` varchar(30) NOT NULL,
  `exsisting` varchar(10) NOT NULL,
  `penyalur` varchar(10) NOT NULL,
  `wilayah` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `lok_tsjar`
--

CREATE TABLE `lok_tsjar` (
  `id_` int(11) NOT NULL,
  `Id_loktsjar` varchar(20) NOT NULL,
  `gambar1` varchar(30) NOT NULL,
  `gambar2` varchar(30) NOT NULL,
  `lokasi_tsjar` varchar(30) NOT NULL,
  `exsisting` varchar(10) NOT NULL,
  `penyalur` varchar(10) NOT NULL,
  `jum_X` varchar(10) NOT NULL,
  `wilayah` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `mtrpu_mmdua`
--

CREATE TABLE `mtrpu_mmdua` (
  `id_mm1` int(11) NOT NULL,
  `id_lokmm2` varchar(20) DEFAULT NULL,
  `pasangan1` varchar(10) DEFAULT NULL,
  `pasangan2` varchar(10) DEFAULT NULL,
  `MT1` varchar(10) DEFAULT NULL,
  `MT2` varchar(10) DEFAULT NULL,
  `MT4` varchar(10) DEFAULT NULL,
  `MT4X` varchar(10) DEFAULT NULL,
  `MT5` varchar(10) DEFAULT NULL,
  `MT8` varchar(10) DEFAULT NULL,
  `MT8X` varchar(10) DEFAULT NULL,
  `MT8CX` varchar(10) DEFAULT NULL,
  `MT10` varchar(10) DEFAULT NULL,
  `MT10X` varchar(10) DEFAULT NULL,
  `MT11` varchar(10) DEFAULT NULL,
  `TTG` varchar(10) DEFAULT NULL,
  `SVA` varchar(10) DEFAULT NULL,
  `SCAAA` varchar(10) DEFAULT NULL,
  `JRAK_ESTI` varchar(10) DEFAULT NULL,
  `LM_COND` varchar(10) DEFAULT NULL,
  `WG` varchar(10) DEFAULT NULL,
  `NWG` varchar(10) DEFAULT NULL,
  `WGH` varchar(10) DEFAULT NULL,
  `PS` varchar(10) DEFAULT NULL,
  `UTAMA_T` varchar(10) DEFAULT NULL,
  `PENYANGGA_T` varchar(10) DEFAULT NULL,
  `INS_PIN` varchar(10) DEFAULT NULL,
  `INS_STRAIN` varchar(10) DEFAULT NULL,
  `LAIN_MAT` varchar(10) DEFAULT NULL,
  `MT12` varchar(10) DEFAULT NULL,
  `MT22` varchar(10) DEFAULT NULL,
  `MT42` varchar(10) DEFAULT NULL,
  `MT4X2` varchar(10) DEFAULT NULL,
  `MT52` varchar(10) DEFAULT NULL,
  `MT82` varchar(10) DEFAULT NULL,
  `MT8X2` varchar(10) DEFAULT NULL,
  `MT8CX2` varchar(10) DEFAULT NULL,
  `MT102` varchar(10) DEFAULT NULL,
  `MT10X2` varchar(10) DEFAULT NULL,
  `MT112` varchar(10) DEFAULT NULL,
  `TTG2` varchar(10) DEFAULT NULL,
  `SVA2` varchar(10) DEFAULT NULL,
  `CSAAA2` varchar(10) DEFAULT NULL,
  `LAMA2_CORD` varchar(10) DEFAULT NULL,
  `WG2` varchar(10) DEFAULT NULL,
  `NWG2` varchar(10) DEFAULT NULL,
  `WGH2` varchar(10) DEFAULT NULL,
  `PS2` varchar(10) DEFAULT NULL,
  `UTAMA2_T` varchar(10) DEFAULT NULL,
  `PENYANGGA_T2` varchar(10) DEFAULT NULL,
  `INS2_PIN` varchar(10) DEFAULT NULL,
  `INS2_STRAIN` varchar(10) DEFAULT NULL,
  `LAIN2_MAT` varchar(10) DEFAULT NULL,
  `KET` varchar(1000) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `mtrpu_tigamm`
--

CREATE TABLE `mtrpu_tigamm` (
  `id_mm2` int(11) NOT NULL,
  `id_kolmm2` varchar(20) DEFAULT NULL,
  `pasang1` varchar(10) DEFAULT NULL,
  `pasang2` varchar(10) DEFAULT NULL,
  `MT1` varchar(10) DEFAULT NULL,
  `MT2` varchar(10) DEFAULT NULL,
  `MT4` varchar(10) DEFAULT NULL,
  `MT4X` varchar(10) DEFAULT NULL,
  `MT5` varchar(10) DEFAULT NULL,
  `MT8` varchar(10) DEFAULT NULL,
  `MT8X` varchar(10) DEFAULT NULL,
  `MT8CX` varchar(10) DEFAULT NULL,
  `MT10` varchar(10) DEFAULT NULL,
  `MT10X` varchar(10) DEFAULT NULL,
  `MT11` varchar(10) DEFAULT NULL,
  `TTG` varchar(10) DEFAULT NULL,
  `SVA` varchar(10) DEFAULT NULL,
  `SCAAA` varchar(10) DEFAULT NULL,
  `JRAK_ESTI` varchar(10) DEFAULT NULL,
  `LM_COND` varchar(10) DEFAULT NULL,
  `WG` varchar(10) DEFAULT NULL,
  `NWG` varchar(10) DEFAULT NULL,
  `WGH` varchar(10) DEFAULT NULL,
  `SP` varchar(10) DEFAULT NULL,
  `UTAMA_T` varchar(10) DEFAULT NULL,
  `PENYANGGA_T` varchar(10) DEFAULT NULL,
  `INS_PIN` varchar(10) DEFAULT NULL,
  `INS_STRAIN` varchar(10) DEFAULT NULL,
  `LAIN_MAT` varchar(10) DEFAULT NULL,
  `MT12` varchar(10) DEFAULT NULL,
  `MT22` varchar(10) DEFAULT NULL,
  `MT42` varchar(10) DEFAULT NULL,
  `MT4X2` varchar(10) DEFAULT NULL,
  `MT52` varchar(10) DEFAULT NULL,
  `MT82` varchar(10) DEFAULT NULL,
  `MT8X2` varchar(10) DEFAULT NULL,
  `MT8CX2` varchar(10) DEFAULT NULL,
  `TM_102` varchar(10) DEFAULT NULL,
  `MT10X2` varchar(10) DEFAULT NULL,
  `MT112` varchar(10) DEFAULT NULL,
  `TTG2` varchar(10) DEFAULT NULL,
  `SVA2` varchar(10) DEFAULT NULL,
  `CSAAA2` varchar(10) DEFAULT NULL,
  `LAMA2_CORD` varchar(10) DEFAULT NULL,
  `WG2` varchar(10) DEFAULT NULL,
  `NWG2` varchar(10) DEFAULT NULL,
  `WGH2` varchar(10) DEFAULT NULL,
  `PS2` varchar(10) DEFAULT NULL,
  `UTAMA2_T` varchar(10) DEFAULT NULL,
  `PENYANGGA2_T` varchar(10) DEFAULT NULL,
  `LAIN2_MAT_T` varchar(10) DEFAULT NULL,
  `INS2_PIN` varchar(10) DEFAULT NULL,
  `LAIN_MRAGAS2` varchar(10) DEFAULT NULL,
  `KET` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `mvtic_jtm_reha`
--

CREATE TABLE `mvtic_jtm_reha` (
  `mm3_id` int(11) NOT NULL,
  `lokmm3_id` varchar(20) NOT NULL,
  `pasangan1` varchar(10) DEFAULT NULL,
  `pasangan2` varchar(10) DEFAULT NULL,
  `MT1` varchar(10) DEFAULT NULL,
  `MT2` varchar(10) DEFAULT NULL,
  `MT4` varchar(10) DEFAULT NULL,
  `MT4X` varchar(10) DEFAULT NULL,
  `MT5` varchar(10) DEFAULT NULL,
  `MT8` varchar(10) DEFAULT NULL,
  `MT8X` varchar(10) DEFAULT NULL,
  `MT10` varchar(10) DEFAULT NULL,
  `MT10X` varchar(10) DEFAULT NULL,
  `MT11` varchar(10) DEFAULT NULL,
  `TTG` varchar(10) DEFAULT NULL,
  `SVA` varchar(10) DEFAULT NULL,
  `CSAAA` varchar(10) DEFAULT NULL,
  `JARAK_ESTIMA` varchar(10) DEFAULT NULL,
  `LAM_COND` varchar(10) DEFAULT NULL,
  `WG` varchar(10) DEFAULT NULL,
  `MT8XC` varchar(10) DEFAULT NULL,
  `NWG` varchar(10) DEFAULT NULL,
  `WGH` varchar(10) DEFAULT NULL,
  `PS` varchar(10) DEFAULT NULL,
  `UTAM_T` varchar(10) DEFAULT NULL,
  `PEYANG_T` varchar(10) DEFAULT NULL,
  `INS_PIN` varchar(10) DEFAULT NULL,
  `INS_STRIN` int(10) DEFAULT NULL,
  `LAIN_MAT` int(10) DEFAULT NULL,
  `MT12` int(10) DEFAULT NULL,
  `MT22` int(10) DEFAULT NULL,
  `MT42` varchar(10) DEFAULT NULL,
  `MT4X2` varchar(10) DEFAULT NULL,
  `MT52` varchar(10) DEFAULT NULL,
  `MT82` varchar(10) DEFAULT NULL,
  `MT8X2` varchar(10) DEFAULT NULL,
  `MT8C2` varchar(10) DEFAULT NULL,
  `MT102` varchar(10) DEFAULT NULL,
  `MT10X2` varchar(10) DEFAULT NULL,
  `MT112` varchar(10) DEFAULT NULL,
  `TTG2` varchar(10) DEFAULT NULL,
  `SVA2` varchar(10) DEFAULT NULL,
  `CSAAA2` varchar(10) DEFAULT NULL,
  `LAMA2_CONS` varchar(10) DEFAULT NULL,
  `WG2` varchar(10) DEFAULT NULL,
  `NWG2` varchar(10) DEFAULT NULL,
  `WGH2` varchar(10) DEFAULT NULL,
  `PS2` varchar(10) DEFAULT NULL,
  `UTAMA2_T` varchar(10) DEFAULT NULL,
  `PEYANG2_T` varchar(10) DEFAULT NULL,
  `INS2_PIN` varchar(10) DEFAULT NULL,
  `INS2_STRAIN` varchar(10) DEFAULT NULL,
  `LAIN2_MAT` varchar(10) DEFAULT NULL,
  `KET` varchar(1000) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `pemasangan_gswire`
--

CREATE TABLE `pemasangan_gswire` (
  `id_` int(11) NOT NULL,
  `id_pemsgwire` varchar(10) DEFAULT NULL,
  `penyalur` varchar(10) DEFAULT NULL,
  `1` varchar(10) DEFAULT NULL,
  `2` varchar(10) DEFAULT NULL,
  `3` varchar(10) DEFAULT NULL,
  `panjang_gsw` varchar(10) DEFAULT NULL,
  `per_jarak` varchar(10) DEFAULT NULL,
  `light_ag` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `pemasangan_gswire`
--

INSERT INTO `pemasangan_gswire` (`id_`, `id_pemsgwire`, `penyalur`, `1`, `2`, `3`, `panjang_gsw`, `per_jarak`, `light_ag`) VALUES
(1, '', '1', '1', '1', '1', '1', '1', '');

-- --------------------------------------------------------

--
-- Struktur dari tabel `penyabar_gi_ugc`
--

CREATE TABLE `penyabar_gi_ugc` (
  `id_` int(11) NOT NULL,
  `id_lokasi` varchar(20) NOT NULL,
  `sktm_ugc1` varchar(10) DEFAULT NULL,
  `ditanam1` varchar(10) DEFAULT NULL,
  `crossing_jln1` varchar(10) DEFAULT NULL,
  `outdoor1` varchar(10) DEFAULT NULL,
  `indoor1` varchar(10) DEFAULT NULL,
  `jointing` varchar(10) DEFAULT NULL,
  `sktm_ugc2` varchar(10) DEFAULT NULL,
  `ditanam2` varchar(10) DEFAULT NULL,
  `crossing_jln2` varchar(10) DEFAULT NULL,
  `outdoor2` varchar(10) DEFAULT NULL,
  `indoor2` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `penyer_gi_mvtc`
--

CREATE TABLE `penyer_gi_mvtc` (
  `id` int(11) NOT NULL,
  `id_lok1` varchar(20) NOT NULL,
  `CITVM1M` varchar(10) DEFAULT NULL,
  `CITVM2M` varchar(10) DEFAULT NULL,
  `CITVM4M` varchar(10) DEFAULT NULL,
  `CITVM4MA` varchar(10) DEFAULT NULL,
  `CITVM5M` varchar(10) DEFAULT NULL,
  `CITVM5MA` varchar(10) DEFAULT NULL,
  `CITVM` varchar(10) DEFAULT NULL,
  `EST_JRK1` varchar(10) DEFAULT NULL,
  `MWG1` varchar(10) DEFAULT NULL,
  `MWGH1` varchar(10) DEFAULT NULL,
  `MPS1` varchar(10) DEFAULT NULL,
  `CITVM1UB` varchar(10) DEFAULT NULL,
  `CITVM2UB` varchar(10) DEFAULT NULL,
  `CITVM4UB` varchar(10) DEFAULT NULL,
  `CITVM4AUB` varchar(10) DEFAULT NULL,
  `CITVM5UB` varchar(10) DEFAULT NULL,
  `CITVM5AUB` varchar(10) DEFAULT NULL,
  `BUWG1` varchar(10) DEFAULT NULL,
  `UBWGH` varchar(10) DEFAULT NULL,
  `UBPS1` varchar(10) DEFAULT NULL,
  `UTAM1` varchar(10) DEFAULT NULL,
  `PEYANG1` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `penyer_gi_sutm`
--

CREATE TABLE `penyer_gi_sutm` (
  `id` int(11) NOT NULL,
  `id_lok1` varchar(20) NOT NULL,
  `MT1M` varchar(10) DEFAULT NULL,
  `MT2M` varchar(10) DEFAULT NULL,
  `MT4M` varchar(10) DEFAULT NULL,
  `MT4XM` varchar(10) DEFAULT NULL,
  `MT5M` varchar(10) DEFAULT NULL,
  `MT8M` varchar(10) DEFAULT NULL,
  `MT8XM` varchar(10) DEFAULT NULL,
  `MT8MCX` varchar(10) DEFAULT NULL,
  `MT10M` varchar(10) DEFAULT NULL,
  `MT10MX` varchar(10) DEFAULT NULL,
  `MT11M` varchar(10) DEFAULT NULL,
  `CSAA` varchar(10) DEFAULT NULL,
  `JRAK_EST` varchar(10) DEFAULT NULL,
  `MWG` varchar(10) DEFAULT NULL,
  `MGWM` varchar(10) DEFAULT NULL,
  `MPS` varchar(10) DEFAULT NULL,
  `MT1UB` varchar(10) DEFAULT NULL,
  `MT2UB` varchar(10) DEFAULT NULL,
  `MT4UB` varchar(10) DEFAULT NULL,
  `MT4XUB` varchar(10) DEFAULT NULL,
  `MT5UB` varchar(10) DEFAULT NULL,
  `MT8UB` varchar(10) DEFAULT NULL,
  `MT8XUB` varchar(10) DEFAULT NULL,
  `MT8XCUB` varchar(10) DEFAULT NULL,
  `MT10UB` varchar(10) DEFAULT NULL,
  `MT10XUB` varchar(10) DEFAULT NULL,
  `MT11UB` varchar(10) DEFAULT NULL,
  `WGUB` varchar(10) DEFAULT NULL,
  `UBGW` varchar(10) DEFAULT NULL,
  `BUSP` varchar(10) DEFAULT NULL,
  `UTAM` varchar(10) DEFAULT NULL,
  `PEYANG` varchar(10) DEFAULT NULL,
  `STUCK_FERLNG` varchar(10) DEFAULT NULL,
  `DLM_GROUN` varchar(10) DEFAULT NULL,
  `LAR_GROUN` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `penyer_mvtc`
--

CREATE TABLE `penyer_mvtc` (
  `id` int(11) NOT NULL,
  `id_lok1` varchar(20) NOT NULL,
  `CITVM1M` varchar(10) DEFAULT NULL,
  `CITVM2M` varchar(10) DEFAULT NULL,
  `CITVM4M` varchar(10) DEFAULT NULL,
  `CITVM4MA` varchar(10) DEFAULT NULL,
  `CITVM5M` varchar(10) DEFAULT NULL,
  `CITVM5MA` varchar(10) DEFAULT NULL,
  `CITVM` varchar(10) DEFAULT NULL,
  `EST_JRK1` varchar(10) DEFAULT NULL,
  `MWG1` varchar(10) DEFAULT NULL,
  `MWGH1` varchar(10) DEFAULT NULL,
  `MPS1` varchar(10) DEFAULT NULL,
  `CITVM1UB` varchar(10) DEFAULT NULL,
  `CITVM2UB` varchar(10) DEFAULT NULL,
  `CITVM4UB` varchar(10) DEFAULT NULL,
  `CITVM4AUB` varchar(10) DEFAULT NULL,
  `CITVM5UB` varchar(10) DEFAULT NULL,
  `CITVM5AUB` varchar(10) DEFAULT NULL,
  `BUWG1` varchar(10) DEFAULT NULL,
  `UBWGH` varchar(10) NOT NULL,
  `UBPS1` varchar(10) NOT NULL,
  `UTAM1` varchar(10) DEFAULT NULL,
  `PEYANG1` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `penyer_sutm`
--

CREATE TABLE `penyer_sutm` (
  `id` int(11) NOT NULL,
  `id_lok1` varchar(20) NOT NULL,
  `MT1M` varchar(10) DEFAULT NULL,
  `MT2M` varchar(10) DEFAULT NULL,
  `MT4M` varchar(10) DEFAULT NULL,
  `MT4XM` varchar(10) DEFAULT NULL,
  `MT5M` varchar(10) DEFAULT NULL,
  `MT8M` varchar(10) DEFAULT NULL,
  `MT8XM` varchar(10) DEFAULT NULL,
  `MT8MCX` varchar(10) DEFAULT NULL,
  `MT10M` varchar(10) DEFAULT NULL,
  `MT10MX` varchar(10) DEFAULT NULL,
  `MT11M` varchar(10) DEFAULT NULL,
  `CSAA` varchar(10) DEFAULT NULL,
  `JRAK_EST` varchar(10) DEFAULT NULL,
  `MWG` varchar(10) DEFAULT NULL,
  `MGWM` varchar(10) DEFAULT NULL,
  `MPS` varchar(10) DEFAULT NULL,
  `MT1UB` varchar(10) DEFAULT NULL,
  `MT2UB` varchar(10) DEFAULT NULL,
  `MT4UB` varchar(10) DEFAULT NULL,
  `MT4XUB` varchar(10) DEFAULT NULL,
  `MT5UB` varchar(10) DEFAULT NULL,
  `MT8UB` varchar(10) DEFAULT NULL,
  `MT8XUB` varchar(10) DEFAULT NULL,
  `MT8XCUB` varchar(10) DEFAULT NULL,
  `MT10UB` varchar(10) DEFAULT NULL,
  `MT10XUB` varchar(10) DEFAULT NULL,
  `MT11UB` varchar(10) DEFAULT NULL,
  `WGUB` varchar(10) DEFAULT NULL,
  `UBGW` varchar(10) DEFAULT NULL,
  `BUSP` varchar(10) DEFAULT NULL,
  `UTAM` varchar(10) DEFAULT NULL,
  `PEYANG` varchar(10) DEFAULT NULL,
  `STUCK_FERLNG` varchar(10) DEFAULT NULL,
  `DLM_GROUN` varchar(10) DEFAULT NULL,
  `LAR_GROUN` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `penyer_ugc`
--

CREATE TABLE `penyer_ugc` (
  `id` int(11) NOT NULL,
  `id_lok` varchar(20) NOT NULL,
  `CGU_MTKS` varchar(10) NOT NULL,
  `DTANAM` varchar(10) NOT NULL,
  `JLN_CROSSING` varchar(10) NOT NULL,
  `OUT_DOOR` varchar(10) NOT NULL,
  `IN_DOOR` varchar(10) NOT NULL,
  `JO_INT` varchar(10) NOT NULL,
  `1UGC_SKTM` varchar(10) NOT NULL,
  `DTANAM1` varchar(10) NOT NULL,
  `JLN1_CROSSING` varchar(10) NOT NULL,
  `OUT_DOOR1` varchar(10) NOT NULL,
  `IN_DOOR1` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `rekjtm_sut`
--

CREATE TABLE `rekjtm_sut` (
  `id` int(11) NOT NULL,
  `id_lok1` varchar(20) NOT NULL,
  `MT1M` varchar(10) DEFAULT NULL,
  `MT2M` varchar(10) DEFAULT NULL,
  `MT4M` varchar(10) DEFAULT NULL,
  `MT4XM` varchar(10) DEFAULT NULL,
  `MT5M` varchar(10) DEFAULT NULL,
  `MT8M` varchar(10) DEFAULT NULL,
  `MT8XM` varchar(10) DEFAULT NULL,
  `MT8MCX` varchar(10) NOT NULL,
  `MT10M` varchar(10) DEFAULT NULL,
  `MT10MX` varchar(10) DEFAULT NULL,
  `MT11M` varchar(10) DEFAULT NULL,
  `CONDUC` varchar(10) DEFAULT NULL,
  `JRA_EST` varchar(10) DEFAULT NULL,
  `MWG` varchar(10) DEFAULT NULL,
  `HGWM` varchar(10) DEFAULT NULL,
  `MPS` varchar(10) DEFAULT NULL,
  `MT1UB` varchar(10) DEFAULT NULL,
  `MT2UB` varchar(10) DEFAULT NULL,
  `MT4UB` varchar(10) DEFAULT NULL,
  `MT4XUB` varchar(10) DEFAULT NULL,
  `MT5UB` varchar(10) DEFAULT NULL,
  `MT8UB` varchar(10) DEFAULT NULL,
  `MT8XUB` varchar(10) DEFAULT NULL,
  `MT8XCUB` varchar(10) DEFAULT NULL,
  `MT10UB` varchar(10) DEFAULT NULL,
  `MT10XUB` varchar(10) DEFAULT NULL,
  `MT11UB` varchar(10) DEFAULT NULL,
  `UBGW` varchar(10) DEFAULT NULL,
  `UBWGH` varchar(10) DEFAULT NULL,
  `BUPS` varchar(10) DEFAULT NULL,
  `UTAM1` varchar(10) DEFAULT NULL,
  `PEYANG` varchar(10) DEFAULT NULL,
  `FERLE_STRUCK` varchar(10) DEFAULT NULL,
  `GROUN_DLM` varchar(10) DEFAULT NULL,
  `GROUN_LAR` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `rekjtm_ticmv`
--

CREATE TABLE `rekjtm_ticmv` (
  `id` int(11) NOT NULL,
  `id_lok1` varchar(20) NOT NULL,
  `CITVM1M` varchar(10) DEFAULT NULL,
  `CITVM2M` varchar(10) DEFAULT NULL,
  `CITVM4M` varchar(10) DEFAULT NULL,
  `CITVM4MA` varchar(10) DEFAULT NULL,
  `CITVM5M` varchar(10) DEFAULT NULL,
  `CITVM5MA` varchar(10) DEFAULT NULL,
  `CITVM` varchar(10) DEFAULT NULL,
  `EST_JRK1` varchar(10) DEFAULT NULL,
  `MWG1` varchar(10) DEFAULT NULL,
  `MWGH1` varchar(10) DEFAULT NULL,
  `MPS1` varchar(10) DEFAULT NULL,
  `CITVM1UB` varchar(10) DEFAULT NULL,
  `CITVM2UB` varchar(10) DEFAULT NULL,
  `CITVM4UB` varchar(10) DEFAULT NULL,
  `CITVM4AUB` varchar(10) DEFAULT NULL,
  `CITVM5UB` varchar(10) DEFAULT NULL,
  `CITVM5AUB` varchar(10) DEFAULT NULL,
  `BUWG1` varchar(10) DEFAULT NULL,
  `UBWGH` varchar(10) DEFAULT NULL,
  `UBPS1` varchar(10) DEFAULT NULL,
  `UTAM1` varchar(10) DEFAULT NULL,
  `PEYANG1` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `rekjtm_ugcable`
--

CREATE TABLE `rekjtm_ugcable` (
  `id_` int(11) NOT NULL,
  `id_lokasi` varchar(20) NOT NULL,
  `sktm_ugc1` varchar(10) DEFAULT NULL,
  `ditanam1` varchar(10) DEFAULT NULL,
  `crossing_jln1` varchar(10) DEFAULT NULL,
  `outdoor1` varchar(10) DEFAULT NULL,
  `indoor1` varchar(10) DEFAULT NULL,
  `jointing` varchar(10) DEFAULT NULL,
  `sktm_ugc2` varchar(10) DEFAULT NULL,
  `ditanam2` varchar(10) DEFAULT NULL,
  `crossing_jln2` varchar(10) DEFAULT NULL,
  `outdoor2` varchar(10) DEFAULT NULL,
  `indoor2` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `rekjtm_ugcable`
--

INSERT INTO `rekjtm_ugcable` (`id_`, `id_lokasi`, `sktm_ugc1`, `ditanam1`, `crossing_jln1`, `outdoor1`, `indoor1`, `jointing`, `sktm_ugc2`, `ditanam2`, `crossing_jln2`, `outdoor2`, `indoor2`) VALUES
(1, '1', '2', '2', '2', '2', '2', '2', '2', '2', '2', '2', '2'),
(2, '3', '4', '45', '6', '5', '', '2', '3', '3', '', '', '');

-- --------------------------------------------------------

--
-- Struktur dari tabel `sectionalizer`
--

CREATE TABLE `sectionalizer` (
  `id_` int(11) NOT NULL,
  `id_sect` varchar(20) NOT NULL,
  `sect_ke` varchar(10) DEFAULT NULL,
  `teme1` varchar(10) DEFAULT NULL,
  `teme2` varchar(10) DEFAULT NULL,
  `teme5` varchar(10) DEFAULT NULL,
  `avswitch` varchar(10) DEFAULT NULL,
  `recloser` varchar(10) DEFAULT NULL,
  `lbswitch_mprtu` varchar(10) DEFAULT NULL,
  `lbswitch_mnrtu` varchar(10) DEFAULT NULL,
  `recloser2` varchar(10) DEFAULT NULL,
  `lbswitch_mprtu2` varchar(10) DEFAULT NULL,
  `lbswitch_mnrtu2` varchar(10) DEFAULT NULL,
  `landasan` varchar(10) DEFAULT NULL,
  `other` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_captcha`
--

CREATE TABLE `tb_captcha` (
  `id` int(11) NOT NULL,
  `time2` time NOT NULL,
  `ip_address2` int(10) UNSIGNED NOT NULL,
  `word2` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_gmbgsw`
--

CREATE TABLE `tb_gmbgsw` (
  `id` int(11) NOT NULL,
  `lokasi_id` varchar(20) NOT NULL,
  `gambar2` mediumblob NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_gmbjtm1`
--

CREATE TABLE `tb_gmbjtm1` (
  `id` int(11) NOT NULL,
  `lokasi_id` varchar(20) NOT NULL,
  `gambar2` mediumblob NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_gmbjtm2`
--

CREATE TABLE `tb_gmbjtm2` (
  `id` int(11) NOT NULL,
  `lokasi_id` varchar(20) NOT NULL,
  `gambar2` mediumblob NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_gmbjtr`
--

CREATE TABLE `tb_gmbjtr` (
  `id` int(11) NOT NULL,
  `lokasi_id` varchar(10) NOT NULL,
  `gambar2` mediumblob NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_gmbmattua`
--

CREATE TABLE `tb_gmbmattua` (
  `id` int(11) NOT NULL,
  `lokasi_id` varchar(20) NOT NULL,
  `gambar2` mediumblob NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_gmbpenyubar`
--

CREATE TABLE `tb_gmbpenyubar` (
  `id` int(11) NOT NULL,
  `lokasi_id` varchar(20) NOT NULL,
  `gambar2` mediumblob NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_gmbpenyubargi`
--

CREATE TABLE `tb_gmbpenyubargi` (
  `id` int(11) NOT NULL,
  `lokasi_id` varchar(20) NOT NULL,
  `gambar2` mediumblob NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_gmbrejtm`
--

CREATE TABLE `tb_gmbrejtm` (
  `id` int(11) NOT NULL,
  `lokasi_id` varchar(20) NOT NULL,
  `gambar2` varchar(50) NOT NULL,
  `rayon2` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_gmbrejtr`
--

CREATE TABLE `tb_gmbrejtr` (
  `id` int(11) NOT NULL,
  `lokasi_id` varchar(20) NOT NULL,
  `gambar2` varchar(50) NOT NULL,
  `rayon2` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_gmbrtm2`
--

CREATE TABLE `tb_gmbrtm2` (
  `id` int(11) NOT NULL,
  `lokasi_id` varchar(20) NOT NULL,
  `gambar2` mediumblob NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_gmbrtm3`
--

CREATE TABLE `tb_gmbrtm3` (
  `id` int(11) NOT NULL,
  `lokasi_id` varchar(20) NOT NULL,
  `gambar2` mediumblob NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_gmbrtr`
--

CREATE TABLE `tb_gmbrtr` (
  `id` int(11) NOT NULL,
  `lokasi_id` varchar(20) NOT NULL,
  `gambar2` mediumblob NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_gmbsect`
--

CREATE TABLE `tb_gmbsect` (
  `id` int(11) NOT NULL,
  `lokasi_id` varchar(20) NOT NULL,
  `gambar2` mediumblob NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_gmbsrr`
--

CREATE TABLE `tb_gmbsrr` (
  `id` int(11) NOT NULL,
  `lokasi_id` varchar(20) NOT NULL,
  `gambar2` mediumblob NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_gmbtrafo`
--

CREATE TABLE `tb_gmbtrafo` (
  `id` int(11) NOT NULL,
  `lokasi_id` varchar(20) NOT NULL,
  `gambar2` mediumblob NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_inputrekjtr`
--

CREATE TABLE `tb_inputrekjtr` (
  `id` int(11) NOT NULL,
  `id_lok` varchar(20) NOT NULL,
  `input_TR1M` varchar(10) DEFAULT NULL,
  `input_TR2M` varchar(10) DEFAULT NULL,
  `input_TR3M` varchar(10) DEFAULT NULL,
  `input_TR3AM` varchar(10) DEFAULT NULL,
  `input_TR4M` varchar(10) DEFAULT NULL,
  `input_TR4AM` varchar(10) DEFAULT NULL,
  `input_TR5M` varchar(10) DEFAULT NULL,
  `input_TR6M` varchar(10) DEFAULT NULL,
  `input_TR6Am` varchar(10) DEFAULT NULL,
  `input_TR7M` varchar(10) DEFAULT NULL,
  `konduktor` varchar(10) DEFAULT NULL,
  `est_jarak` varchar(10) DEFAULT NULL,
  `input_gwm` varchar(10) DEFAULT NULL,
  `input_gwnm` varchar(10) DEFAULT NULL,
  `input_hgwm` varchar(10) DEFAULT NULL,
  `input_TR1UB` varchar(10) DEFAULT NULL,
  `input_TR2UB` varchar(10) DEFAULT NULL,
  `input_TR3UB` varchar(10) DEFAULT NULL,
  `input_TR3AUB` varchar(10) DEFAULT NULL,
  `input_TR4UB` varchar(10) DEFAULT NULL,
  `input_TR4AUB` varchar(10) DEFAULT NULL,
  `input_TR5UB` varchar(10) DEFAULT NULL,
  `input_TR6UB` varchar(10) DEFAULT NULL,
  `input_TR6AUB` varchar(10) DEFAULT NULL,
  `input_TR7UB` varchar(10) DEFAULT NULL,
  `input_gwub` varchar(10) DEFAULT NULL,
  `input_gwnub` varchar(10) DEFAULT NULL,
  `input_hgwub` varchar(10) DEFAULT NULL,
  `input_sp` varchar(10) DEFAULT NULL,
  `input_pondasi` varchar(10) DEFAULT NULL,
  `input_utama` varchar(10) DEFAULT NULL,
  `input_utamae` varchar(10) DEFAULT NULL,
  `input_nonutama` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_komen`
--

CREATE TABLE `tb_komen` (
  `id` int(11) NOT NULL,
  `nama` varchar(25) NOT NULL,
  `rayon2` varchar(20) NOT NULL,
  `isi` text NOT NULL,
  `time` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_lokpemgsw`
--

CREATE TABLE `tb_lokpemgsw` (
  `id` int(11) NOT NULL,
  `gmb12` varchar(20) NOT NULL,
  `gmb22` varchar(20) NOT NULL,
  `lokasi` varchar(50) NOT NULL,
  `rayon2` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_lokpengmattua`
--

CREATE TABLE `tb_lokpengmattua` (
  `id` int(11) NOT NULL,
  `lokasi` varchar(30) NOT NULL,
  `eksis` varchar(10) NOT NULL,
  `penyulang` varchar(10) NOT NULL,
  `rayon2` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_lokrehjtr`
--

CREATE TABLE `tb_lokrehjtr` (
  `id` int(11) NOT NULL,
  `gmb12` varchar(30) NOT NULL,
  `gmb22` varchar(30) NOT NULL,
  `lokasi` varchar(30) NOT NULL,
  `eksis` varchar(10) NOT NULL,
  `jumlahXX` varchar(10) NOT NULL,
  `rayon2` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_lokrekjtr`
--

CREATE TABLE `tb_lokrekjtr` (
  `id` int(11) NOT NULL,
  `gmb12` varchar(20) NOT NULL,
  `gmb22` varchar(20) NOT NULL,
  `lokasi` varchar(20) NOT NULL,
  `eksis` varchar(10) NOT NULL,
  `penyulang2` varchar(10) NOT NULL,
  `rayon2` varchar(20) NOT NULL,
  `status` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_loksrr`
--

CREATE TABLE `tb_loksrr` (
  `id` int(11) NOT NULL,
  `loksrr_id` varchar(20) NOT NULL,
  `gmb12` varchar(30) NOT NULL,
  `gmb22` varchar(30) NOT NULL,
  `lokasi` varchar(30) NOT NULL,
  `eksis` varchar(10) NOT NULL,
  `penyulang2` varchar(10) NOT NULL,
  `rayon2` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_lokuprtr`
--

CREATE TABLE `tb_lokuprtr` (
  `id` int(11) NOT NULL,
  `lokrtr_id` varchar(20) NOT NULL,
  `gmb12` varchar(30) NOT NULL,
  `lokasi` varchar(30) NOT NULL,
  `eksis` varchar(10) NOT NULL,
  `jumX` varchar(10) NOT NULL,
  `rayon` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_pengmattua`
--

CREATE TABLE `tb_pengmattua` (
  `id` int(11) NOT NULL,
  `id_pengmattua` varchar(20) NOT NULL,
  `light_arreeas_um` varchar(10) DEFAULT NULL,
  `cut_off_switch_um` varchar(10) DEFAULT NULL,
  `pin_isulator_um` varchar(10) DEFAULT NULL,
  `sr_insulator_um` varchar(10) DEFAULT NULL,
  `lvco_um` varchar(10) DEFAULT NULL,
  `lvpanel12_um` varchar(10) DEFAULT NULL,
  `lvpanel14_um` varchar(10) DEFAULT NULL,
  `lightarreeas_ub` varchar(10) DEFAULT NULL,
  `cutoff_switch_ub` varchar(10) DEFAULT NULL,
  `pininsulator_ub` varchar(10) DEFAULT NULL,
  `srinsulator_ub` varchar(10) DEFAULT NULL,
  `lvco_ub` varchar(10) DEFAULT NULL,
  `lvpanel12_ub` varchar(10) DEFAULT NULL,
  `lvpanel14_ub` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_rehabjtr`
--

CREATE TABLE `tb_rehabjtr` (
  `id` int(11) NOT NULL,
  `id_lokJTR` varchar(20) NOT NULL,
  `psgJTR` varchar(20) NOT NULL,
  `psg1JTR` varchar(20) NOT NULL,
  `rhb_TR1` varchar(10) NOT NULL,
  `rhb_TR2` varchar(10) NOT NULL,
  `ket` varchar(200) NOT NULL,
  `rhb_TR3` varchar(10) NOT NULL,
  `rhb_TR3A` varchar(10) NOT NULL,
  `rhb_TR4` varchar(10) NOT NULL,
  `rhb_TR4A` varchar(10) NOT NULL,
  `rhb_TR5` varchar(10) NOT NULL,
  `rhb_TR6` varchar(10) NOT NULL,
  `rhb_TR6A` varchar(10) NOT NULL,
  `rhb_TR7` varchar(10) NOT NULL,
  `konduktor` varchar(10) NOT NULL,
  `est_jarak` varchar(10) NOT NULL,
  `rhb_ins` varchar(10) NOT NULL,
  `rhb_nonins` varchar(10) NOT NULL,
  `rhb_gw` varchar(10) NOT NULL,
  `rhb_gwn` varchar(10) NOT NULL,
  `rhb_hgw` varchar(10) NOT NULL,
  `rhb_hgwn` varchar(10) NOT NULL,
  `rhb_sp` varchar(10) NOT NULL,
  `rhb_utama` varchar(10) NOT NULL,
  `rhb_nonutama` varchar(10) NOT NULL,
  `rhb_srutama` varchar(10) NOT NULL,
  `rhb_groundluar` varchar(10) NOT NULL,
  `rhb_TR12` varchar(10) NOT NULL,
  `rhb_TR22` varchar(10) NOT NULL,
  `rhb_TR32` varchar(10) NOT NULL,
  `rhb_3A2` varchar(10) NOT NULL,
  `rhb_42` varchar(10) NOT NULL,
  `rhb_4A2` varchar(10) NOT NULL,
  `rhb_TR52` varchar(10) NOT NULL,
  `rhb_TR62` varchar(10) NOT NULL,
  `rhb_TR6A2` varchar(10) NOT NULL,
  `rhb_TR72` varchar(10) NOT NULL,
  `konduktor2` varchar(10) NOT NULL,
  `est_jarak2` varchar(10) NOT NULL,
  `rhb_ins2` varchar(10) NOT NULL,
  `rhb_nonins2` varchar(10) NOT NULL,
  `rhb_gw2` varchar(10) NOT NULL,
  `rhb_gwn2` varchar(10) NOT NULL,
  `rhb_hgw2` varchar(10) NOT NULL,
  `rhb_hgwn2` varchar(10) NOT NULL,
  `rhb_sp2` varchar(10) NOT NULL,
  `rhb_utama2` varchar(10) NOT NULL,
  `rhb_nonutama2` varchar(10) NOT NULL,
  `rhb_srutama2` varchar(10) NOT NULL,
  `rhb_groundluar2` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_rekjtm_ugc`
--

CREATE TABLE `tb_rekjtm_ugc` (
  `id` int(11) NOT NULL,
  `lok_id` varchar(20) NOT NULL,
  `sktmUGC` varchar(10) DEFAULT NULL,
  `ditanam` varchar(10) DEFAULT NULL,
  `crossingJLN` varchar(10) DEFAULT NULL,
  `outdoor` varchar(10) DEFAULT NULL,
  `indoor` varchar(10) DEFAULT NULL,
  `joint` varchar(10) DEFAULT NULL,
  `sktmUGC1` varchar(10) DEFAULT NULL,
  `ditanam1` varchar(10) DEFAULT NULL,
  `crossingJLN1` varchar(10) DEFAULT NULL,
  `outdoor1` varchar(10) DEFAULT NULL,
  `indoor1` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_srr`
--

CREATE TABLE `tb_srr` (
  `srr_id` int(11) NOT NULL,
  `loksrr_id` varchar(20) DEFAULT NULL,
  `psgSRR` varchar(10) DEFAULT NULL,
  `psg1SRR` varchar(10) DEFAULT NULL,
  `srr_TR1` varchar(10) DEFAULT NULL,
  `srr_TR2` varchar(10) DEFAULT NULL,
  `srr_TR3` varchar(10) DEFAULT NULL,
  `srr_TR3A` varchar(10) DEFAULT NULL,
  `srr_TR4` varchar(10) DEFAULT NULL,
  `srr_TR4A` varchar(10) DEFAULT NULL,
  `srr_TR5` varchar(10) DEFAULT NULL,
  `srr_TR6` varchar(10) DEFAULT NULL,
  `srr_TR6A` varchar(10) DEFAULT NULL,
  `srr_TR7` varchar(10) DEFAULT NULL,
  `kond` varchar(10) DEFAULT NULL,
  `est_jarak` varchar(10) DEFAULT NULL,
  `srr_gw` varchar(10) DEFAULT NULL,
  `srr_gwn` varchar(10) DEFAULT NULL,
  `srr_hgw` varchar(10) DEFAULT NULL,
  `srr_sp` varchar(10) DEFAULT NULL,
  `tiang_pondasi` varchar(10) DEFAULT NULL,
  `srr_utama` varchar(10) DEFAULT NULL,
  `srr_utamae` varchar(10) DEFAULT NULL,
  `srr_nonutama` varchar(10) DEFAULT NULL,
  `srr_sdes1` varchar(10) DEFAULT NULL,
  `srr_sdes2` varchar(10) DEFAULT NULL,
  `srr_lain` varchar(10) DEFAULT NULL,
  `srr_TR12` varchar(10) DEFAULT NULL,
  `srr_TR22` varchar(10) DEFAULT NULL,
  `srr_TR32` varchar(10) DEFAULT NULL,
  `srr_TR3A2` varchar(10) DEFAULT NULL,
  `srr_TR42` varchar(10) DEFAULT NULL,
  `srr_TR4A2` varchar(10) DEFAULT NULL,
  `srr_TR52` varchar(10) DEFAULT NULL,
  `srr_TR62` varchar(10) DEFAULT NULL,
  `srr_TR6A2` varchar(10) DEFAULT NULL,
  `srr_TR72` varchar(10) DEFAULT NULL,
  `kond2` varchar(10) DEFAULT NULL,
  `est_jarak2` varchar(10) DEFAULT NULL,
  `srr_gw2` varchar(10) DEFAULT NULL,
  `srr_gwn2` varchar(10) DEFAULT NULL,
  `srr_hgw2` varchar(10) DEFAULT NULL,
  `srr_sp2` varchar(10) DEFAULT NULL,
  `tiang_pondasi2` varchar(10) DEFAULT NULL,
  `srr_utama2` varchar(10) DEFAULT NULL,
  `srr_utamae2` varchar(10) DEFAULT NULL,
  `srr_nonutama2` varchar(10) DEFAULT NULL,
  `srr_SDES12` varchar(10) DEFAULT NULL,
  `srr_SDES22` varchar(10) DEFAULT NULL,
  `srr_lain2` varchar(10) DEFAULT NULL,
  `ket` varchar(1000) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_user`
--

CREATE TABLE `tb_user` (
  `id_user` int(11) NOT NULL,
  `nama` varchar(30) NOT NULL,
  `username` varchar(25) NOT NULL,
  `password` varchar(255) NOT NULL,
  `foto` mediumblob NOT NULL,
  `rayon` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_user`
--

INSERT INTO `tb_user` (`id_user`, `nama`, `username`, `password`, `foto`, `rayon`) VALUES
(10, 'haidar zaenani', 'gonduk', 'ab009e3a96ca6d2a3aa70fbc6ba7c6d0', 0x333130383834342e6a7067, 'Semua'),
(11, 'Dela Ariful Haruta', 'dela', '4e4a3b45c22f1be8f65067b617722ad6', 0x4453435f303139352e6a7067, 'Dinoyo'),
(12, 'administartor', 'admin', '21232f297a57a5a743894a0e4a801fc3', '', 'Semua'),
(13, 'bob', 'bob', '81dc9bdb52d04dc20036dbd8313ed055', '', 'Bululawang'),
(14, 'apip', 'apip', '5afc731a4d5274f52c9bf71be129b609', 0x4d616e636865737465725f556e697465645f5265645f446576696c735f57686974655f53686972742831292e6a7067, 'Ngantang'),
(18, 'ida', 'ida', '25f9e794323b453885f5181f1b624d0b', 0x7370616e332e6a7067, 'Malang Kota');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tsjar`
--

CREATE TABLE `tsjar` (
  `id_tsjar` varchar(20) NOT NULL,
  `Id_loktsjar` varchar(20) NOT NULL,
  `penyambung` varchar(10) NOT NULL,
  `penyambung1` varchar(10) NOT NULL,
  `teme1` varchar(10) NOT NULL,
  `teme2` varchar(10) NOT NULL,
  `teme4` varchar(10) NOT NULL,
  `teme4X` varchar(10) NOT NULL,
  `teme5` varchar(10) NOT NULL,
  `teme8` varchar(10) NOT NULL,
  `teme8x` varchar(10) NOT NULL,
  `teme8xc` varchar(10) NOT NULL,
  `teme10` varchar(10) NOT NULL,
  `teme10x` varchar(10) NOT NULL,
  `teme10xc` varchar(10) NOT NULL,
  `kabel_aaacs` varchar(10) NOT NULL,
  `perhitungan_jarak` varchar(10) NOT NULL,
  `ferlenk_stuck` varchar(10) NOT NULL,
  `guy_wire_band` varchar(10) NOT NULL,
  `horizontal_guy_wire` varchar(10) NOT NULL,
  `standar_perusahaan` varchar(10) NOT NULL,
  `utama1` varchar(10) NOT NULL,
  `tiang_penyangga` varchar(10) NOT NULL,
  `konstruksi` varchar(10) NOT NULL,
  `50kilova` varchar(10) NOT NULL,
  `100kilova` varchar(10) NOT NULL,
  `160kilova` varchar(10) NOT NULL,
  `200kilova` varchar(10) NOT NULL,
  `250kilova` varchar(10) NOT NULL,
  `13meter` varchar(10) NOT NULL,
  `13meterplus` varchar(10) NOT NULL,
  `dea` varchar(10) NOT NULL,
  `bea` varchar(10) NOT NULL,
  `jum_tarikan` varchar(10) NOT NULL,
  `tipe_a` varchar(10) NOT NULL,
  `tipe_c` varchar(10) NOT NULL,
  `penyambung2` varchar(10) NOT NULL,
  `penyambung3` varchar(10) NOT NULL,
  `tere1` varchar(10) NOT NULL,
  `tere2` varchar(10) NOT NULL,
  `tere3` varchar(10) NOT NULL,
  `tere3a` varchar(10) NOT NULL,
  `tere4` varchar(10) NOT NULL,
  `tere4a` varchar(10) NOT NULL,
  `tere5` varchar(10) NOT NULL,
  `tere6` varchar(10) NOT NULL,
  `tere6a` varchar(10) NOT NULL,
  `tere7` varchar(10) NOT NULL,
  `konduktor` varchar(10) NOT NULL,
  `perhitungan_jarak2` varchar(10) NOT NULL,
  `guy_wire` varchar(10) NOT NULL,
  `gwn_clamp` varchar(10) NOT NULL,
  `horizontal_guy_wire2` varchar(10) NOT NULL,
  `standar_perusahaan2` varchar(10) NOT NULL,
  `landasan_tiang` varchar(10) NOT NULL,
  `utama2` varchar(10) NOT NULL,
  `utama_e` varchar(10) NOT NULL,
  `tiang_penyangga4` varchar(10) NOT NULL,
  `teme12` varchar(10) NOT NULL,
  `teme22` varchar(10) NOT NULL,
  `teme42` varchar(10) NOT NULL,
  `teme4x2` varchar(10) NOT NULL,
  `teme52` varchar(10) NOT NULL,
  `teme82` varchar(10) NOT NULL,
  `teme8x2` varchar(10) NOT NULL,
  `teme8xc2` varchar(10) NOT NULL,
  `teme102` varchar(10) NOT NULL,
  `teme10x2` varchar(10) NOT NULL,
  `teme10xc2` varchar(10) NOT NULL,
  `kabel_aaacs2` varchar(10) NOT NULL,
  `ferlenk_stuck2` varchar(10) NOT NULL,
  `guy_wire_band2` varchar(10) NOT NULL,
  `horizontal_guy_wirel3` varchar(10) NOT NULL,
  `standar_perusahaan3` varchar(10) NOT NULL,
  `utama3` varchar(10) NOT NULL,
  `tiang_penyangga2` varchar(10) NOT NULL,
  `konstruksi2` varchar(10) NOT NULL,
  `50kilova2` varchar(10) NOT NULL,
  `100kilova2` varchar(10) NOT NULL,
  `160kilova2` varchar(10) NOT NULL,
  `200kilova2` varchar(10) NOT NULL,
  `250kilova2` varchar(10) NOT NULL,
  `13meter2` varchar(10) NOT NULL,
  `13meterplus2` varchar(10) NOT NULL,
  `dea_metode2` varchar(10) NOT NULL,
  `biaya2` varchar(10) NOT NULL,
  `jum_tarikan2` varchar(10) NOT NULL,
  `tipe_a2` varchar(10) NOT NULL,
  `tipe_c2` varchar(10) NOT NULL,
  `penyambung22` varchar(10) NOT NULL,
  `penyambung32` varchar(10) NOT NULL,
  `tere12` varchar(10) NOT NULL,
  `tere22` varchar(10) NOT NULL,
  `tere32` varchar(10) NOT NULL,
  `tere3a2` varchar(10) NOT NULL,
  `tere42` varchar(10) NOT NULL,
  `tere4a2` varchar(10) NOT NULL,
  `tere52` varchar(10) NOT NULL,
  `tere62` varchar(10) NOT NULL,
  `tere6a2` varchar(10) NOT NULL,
  `tere72` varchar(10) NOT NULL,
  `konduktor2` varchar(10) NOT NULL,
  `gigawatt2` varchar(10) NOT NULL,
  `gwn_clamp3` varchar(10) NOT NULL,
  `horizontal_guy_wire4` varchar(10) NOT NULL,
  `standar_perusahaan4` varchar(10) NOT NULL,
  `landasan_tiang2` varchar(10) NOT NULL,
  `utama4` varchar(10) NOT NULL,
  `utama_e2` varchar(10) NOT NULL,
  `tiang_penyangga3` varchar(10) NOT NULL,
  `penjelasan` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `up_rtr`
--

CREATE TABLE `up_rtr` (
  `id_rtr` int(11) NOT NULL,
  `lokrtr_id` varchar(10) DEFAULT NULL,
  `pasangan1` varchar(10) DEFAULT NULL,
  `pasangan2` varchar(10) DEFAULT NULL,
  `RT1` varchar(10) DEFAULT NULL,
  `RT2` varchar(10) DEFAULT NULL,
  `RT3` varchar(10) DEFAULT NULL,
  `RT3A` varchar(10) DEFAULT NULL,
  `RT4` varchar(10) DEFAULT NULL,
  `RT4A` varchar(10) DEFAULT NULL,
  `RT5` varchar(10) DEFAULT NULL,
  `RT6` varchar(10) DEFAULT NULL,
  `RT6A` varchar(10) DEFAULT NULL,
  `RT7` varchar(10) DEFAULT NULL,
  `CONDUC` varchar(10) DEFAULT NULL,
  `SNI` varchar(10) DEFAULT NULL,
  `INS_NON` varchar(10) DEFAULT NULL,
  `WG` varchar(10) DEFAULT NULL,
  `NWG` varchar(10) DEFAULT NULL,
  `WGH` varchar(10) DEFAULT NULL,
  `NWGH` varchar(10) DEFAULT NULL,
  `PS` varchar(10) DEFAULT NULL,
  `UTAM` varchar(10) DEFAULT NULL,
  `UTAM_NON` varchar(10) DEFAULT NULL,
  `UTAM_SR` varchar(10) DEFAULT NULL,
  `LUAR_GROU` varchar(10) DEFAULT NULL,
  `RT12` varchar(10) DEFAULT NULL,
  `RT22` varchar(10) DEFAULT NULL,
  `RT32` varchar(10) DEFAULT NULL,
  `RT3A2` varchar(10) DEFAULT NULL,
  `RT42` varchar(10) DEFAULT NULL,
  `RT4A2` varchar(10) DEFAULT NULL,
  `RT52` varchar(10) DEFAULT NULL,
  `RT62` varchar(10) DEFAULT NULL,
  `RT62A` varchar(10) DEFAULT NULL,
  `TR72` varchar(10) DEFAULT NULL,
  `CONDUC2` varchar(10) DEFAULT NULL,
  `SNI2` varchar(10) DEFAULT NULL,
  `SNI2_NON` varchar(10) DEFAULT NULL,
  `WG2` varchar(10) DEFAULT NULL,
  `NWN2` varchar(10) DEFAULT NULL,
  `WGH2` varchar(10) DEFAULT NULL,
  `NGWN2` varchar(10) DEFAULT NULL,
  `PS2` varchar(10) DEFAULT NULL,
  `UTAM2` varchar(10) DEFAULT NULL,
  `UTAM2_NON` varchar(10) DEFAULT NULL,
  `UTAM2_SR` varchar(10) DEFAULT NULL,
  `GROU_LUAR2` varchar(10) DEFAULT NULL,
  `KET` varchar(1000) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `aacs_jtm_rehab`
--
ALTER TABLE `aacs_jtm_rehab`
  ADD PRIMARY KEY (`mm2_id`);

--
-- Indexes for table `kol_jtmrek`
--
ALTER TABLE `kol_jtmrek`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `kol_mrtpu_duamm`
--
ALTER TABLE `kol_mrtpu_duamm`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `kol_mrtpu_tigamm`
--
ALTER TABLE `kol_mrtpu_tigamm`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `kol_pnybar`
--
ALTER TABLE `kol_pnybar`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `kol_pnybar_gi`
--
ALTER TABLE `kol_pnybar_gi`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `kol_rhab_jar_tm2`
--
ALTER TABLE `kol_rhab_jar_tm2`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `kol_ttuacadang`
--
ALTER TABLE `kol_ttuacadang`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `lok_pemasangan_gswire`
--
ALTER TABLE `lok_pemasangan_gswire`
  ADD PRIMARY KEY (`id_`);

--
-- Indexes for table `lok_rehab_jar_tm1`
--
ALTER TABLE `lok_rehab_jar_tm1`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `lok_sectionalizer`
--
ALTER TABLE `lok_sectionalizer`
  ADD PRIMARY KEY (`id_`);

--
-- Indexes for table `lok_tsjar`
--
ALTER TABLE `lok_tsjar`
  ADD PRIMARY KEY (`id_`);

--
-- Indexes for table `mtrpu_mmdua`
--
ALTER TABLE `mtrpu_mmdua`
  ADD PRIMARY KEY (`id_mm1`);

--
-- Indexes for table `mtrpu_tigamm`
--
ALTER TABLE `mtrpu_tigamm`
  ADD PRIMARY KEY (`id_mm2`);

--
-- Indexes for table `mvtic_jtm_reha`
--
ALTER TABLE `mvtic_jtm_reha`
  ADD PRIMARY KEY (`mm3_id`);

--
-- Indexes for table `pemasangan_gswire`
--
ALTER TABLE `pemasangan_gswire`
  ADD PRIMARY KEY (`id_`);

--
-- Indexes for table `penyabar_gi_ugc`
--
ALTER TABLE `penyabar_gi_ugc`
  ADD PRIMARY KEY (`id_`);

--
-- Indexes for table `penyer_gi_mvtc`
--
ALTER TABLE `penyer_gi_mvtc`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `penyer_gi_sutm`
--
ALTER TABLE `penyer_gi_sutm`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `penyer_mvtc`
--
ALTER TABLE `penyer_mvtc`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `penyer_sutm`
--
ALTER TABLE `penyer_sutm`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `penyer_ugc`
--
ALTER TABLE `penyer_ugc`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `rekjtm_sut`
--
ALTER TABLE `rekjtm_sut`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `rekjtm_ticmv`
--
ALTER TABLE `rekjtm_ticmv`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `rekjtm_ugcable`
--
ALTER TABLE `rekjtm_ugcable`
  ADD PRIMARY KEY (`id_`);

--
-- Indexes for table `sectionalizer`
--
ALTER TABLE `sectionalizer`
  ADD PRIMARY KEY (`id_`);

--
-- Indexes for table `tb_captcha`
--
ALTER TABLE `tb_captcha`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_gmbjtm1`
--
ALTER TABLE `tb_gmbjtm1`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_gmbjtr`
--
ALTER TABLE `tb_gmbjtr`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_gmbpenyubar`
--
ALTER TABLE `tb_gmbpenyubar`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_gmbpenyubargi`
--
ALTER TABLE `tb_gmbpenyubargi`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_gmbrtm2`
--
ALTER TABLE `tb_gmbrtm2`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_gmbrtm3`
--
ALTER TABLE `tb_gmbrtm3`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_gmbrtr`
--
ALTER TABLE `tb_gmbrtr`
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
-- Indexes for table `tb_komen`
--
ALTER TABLE `tb_komen`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_lokpemgsw`
--
ALTER TABLE `tb_lokpemgsw`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_lokpengmattua`
--
ALTER TABLE `tb_lokpengmattua`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_rekjtm_ugc`
--
ALTER TABLE `tb_rekjtm_ugc`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_user`
--
ALTER TABLE `tb_user`
  ADD PRIMARY KEY (`id_user`),
  ADD UNIQUE KEY `nama` (`nama`);

--
-- Indexes for table `up_rtr`
--
ALTER TABLE `up_rtr`
  ADD PRIMARY KEY (`id_rtr`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `aacs_jtm_rehab`
--
ALTER TABLE `aacs_jtm_rehab`
  MODIFY `mm2_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `kol_jtmrek`
--
ALTER TABLE `kol_jtmrek`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `kol_mrtpu_duamm`
--
ALTER TABLE `kol_mrtpu_duamm`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `kol_mrtpu_tigamm`
--
ALTER TABLE `kol_mrtpu_tigamm`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `kol_pnybar`
--
ALTER TABLE `kol_pnybar`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `kol_pnybar_gi`
--
ALTER TABLE `kol_pnybar_gi`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `kol_rhab_jar_tm2`
--
ALTER TABLE `kol_rhab_jar_tm2`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `kol_ttuacadang`
--
ALTER TABLE `kol_ttuacadang`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `lok_pemasangan_gswire`
--
ALTER TABLE `lok_pemasangan_gswire`
  MODIFY `id_` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `lok_sectionalizer`
--
ALTER TABLE `lok_sectionalizer`
  MODIFY `id_` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `lok_tsjar`
--
ALTER TABLE `lok_tsjar`
  MODIFY `id_` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `mtrpu_mmdua`
--
ALTER TABLE `mtrpu_mmdua`
  MODIFY `id_mm1` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `mvtic_jtm_reha`
--
ALTER TABLE `mvtic_jtm_reha`
  MODIFY `mm3_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `pemasangan_gswire`
--
ALTER TABLE `pemasangan_gswire`
  MODIFY `id_` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `penyabar_gi_ugc`
--
ALTER TABLE `penyabar_gi_ugc`
  MODIFY `id_` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `penyer_gi_mvtc`
--
ALTER TABLE `penyer_gi_mvtc`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `penyer_gi_sutm`
--
ALTER TABLE `penyer_gi_sutm`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `penyer_mvtc`
--
ALTER TABLE `penyer_mvtc`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `penyer_sutm`
--
ALTER TABLE `penyer_sutm`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `penyer_ugc`
--
ALTER TABLE `penyer_ugc`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `rekjtm_sut`
--
ALTER TABLE `rekjtm_sut`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `rekjtm_ticmv`
--
ALTER TABLE `rekjtm_ticmv`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `rekjtm_ugcable`
--
ALTER TABLE `rekjtm_ugcable`
  MODIFY `id_` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `sectionalizer`
--
ALTER TABLE `sectionalizer`
  MODIFY `id_` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tb_user`
--
ALTER TABLE `tb_user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `up_rtr`
--
ALTER TABLE `up_rtr`
  MODIFY `id_rtr` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

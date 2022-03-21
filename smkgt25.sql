-- phpMyAdmin SQL Dump
-- version 4.2.7.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 11 Apr 2020 pada 14.43
-- Versi Server: 5.6.20
-- PHP Version: 5.5.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `smkgt25`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_berkasguru`
--

CREATE TABLE IF NOT EXISTS `tbl_berkasguru` (
`kd_berkasguru` int(10) NOT NULL,
  `nama_guru` varchar(200) NOT NULL,
  `surat_lamaran` varchar(20) NOT NULL,
  `daftar_riwayat_hidup` varchar(20) NOT NULL,
  `pas_foto` varchar(20) NOT NULL,
  `fc_ijazah_sd` varchar(20) NOT NULL,
  `fc_ijazah_smp` varchar(20) NOT NULL,
  `fc_ijazah_smk` varchar(20) NOT NULL,
  `fc_ijazah_s1` varchar(20) NOT NULL,
  `fc_ijazah_s2` varchar(20) NOT NULL,
  `fc_transkip_nilai` varchar(20) NOT NULL,
  `fc_akta_iv` varchar(20) NOT NULL,
  `fc_ktp` varchar(20) NOT NULL,
  `fc_sertifikat` varchar(20) NOT NULL,
  `fc_skck` varchar(20) NOT NULL,
  `keterangan` int(10) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data untuk tabel `tbl_berkasguru`
--

INSERT INTO `tbl_berkasguru` (`kd_berkasguru`, `nama_guru`, `surat_lamaran`, `daftar_riwayat_hidup`, `pas_foto`, `fc_ijazah_sd`, `fc_ijazah_smp`, `fc_ijazah_smk`, `fc_ijazah_s1`, `fc_ijazah_s2`, `fc_transkip_nilai`, `fc_akta_iv`, `fc_ktp`, `fc_sertifikat`, `fc_skck`, `keterangan`) VALUES
(1, 'HENDHAR S,s', '1', '1', '0', '1', '0', '1', '0', '0', '0', '0', '0', '0', '0', 0),
(2, 'DIDIN SYAMSUDIN,S.Kom', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', 1),
(3, 'FERNANO,S.Kom', '1', '1', '1', '0', '1', '0', '0', '0', '0', '0', '0', '0', '0', 0),
(4, '', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', 1),
(5, 'ASEP', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_berkassiswa`
--

CREATE TABLE IF NOT EXISTS `tbl_berkassiswa` (
`kd_berkassiswa` int(10) NOT NULL,
  `kd_siswa` int(10) NOT NULL,
  `kk` varchar(200) NOT NULL,
  `ktp_ortu` varchar(200) NOT NULL,
  `ijazah` varchar(200) NOT NULL,
  `skhun` varchar(200) NOT NULL,
  `akte_kelahiran` varchar(200) NOT NULL,
  `status_berkassiswa` int(10) NOT NULL,
  `nama_siswa` varchar(50) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data untuk tabel `tbl_berkassiswa`
--

INSERT INTO `tbl_berkassiswa` (`kd_berkassiswa`, `kd_siswa`, `kk`, `ktp_ortu`, `ijazah`, `skhun`, `akte_kelahiran`, `status_berkassiswa`, `nama_siswa`) VALUES
(1, 1, '1', '1', '1', '1', '1', 0, 'Abdul Mukhlis');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_guru`
--

CREATE TABLE IF NOT EXISTS `tbl_guru` (
`kd_guru` int(10) NOT NULL,
  `kategori` varchar(50) NOT NULL,
  `no_pendaftaran` varchar(16) NOT NULL,
  `nama_guru` varchar(100) NOT NULL,
  `tempat_lahir` varchar(200) NOT NULL,
  `tanggal_lahir` date NOT NULL,
  `jenis_kelamin` varchar(20) NOT NULL,
  `pendidikan_terakhir` varchar(50) NOT NULL,
  `alamat` text NOT NULL,
  `agama` varchar(50) NOT NULL,
  `email` varchar(150) NOT NULL,
  `no_telp` varchar(50) NOT NULL,
  `data_pendidikan_sd` varchar(200) NOT NULL,
  `data_pendidikan_smp` varchar(200) NOT NULL,
  `data_pendidikan_smk` varchar(200) NOT NULL,
  `data_pendidikan_s1` varchar(200) NOT NULL,
  `data_pendidikan_s2` varchar(200) NOT NULL,
  `pengalaman` varchar(10000) NOT NULL,
  `foto_guru` varchar(200) NOT NULL,
  `keterangan` int(10) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=17 ;

--
-- Dumping data untuk tabel `tbl_guru`
--

INSERT INTO `tbl_guru` (`kd_guru`, `kategori`, `no_pendaftaran`, `nama_guru`, `tempat_lahir`, `tanggal_lahir`, `jenis_kelamin`, `pendidikan_terakhir`, `alamat`, `agama`, `email`, `no_telp`, `data_pendidikan_sd`, `data_pendidikan_smp`, `data_pendidikan_smk`, `data_pendidikan_s1`, `data_pendidikan_s2`, `pengalaman`, `foto_guru`, `keterangan`) VALUES
(1, 'GURU NASIONAL', '202045010001', 'IWAN SANUSI,SE', 'BOGOR', '2020-03-19', 'LAKI LAKI', 'S1 EKONOMI', 'KP. PADANGENYANG RT.03 RW.03 DESA. CIPELANG KECAMATAN. CIJERUK KABUPATEN. BOGOR', 'ISLAM', 'iwansanusi479@gmail.com', '021 33445564', 'SDN CIBADAK 01', 'SMP AL AMIN', 'SMK AL AMIN', 'UNIV. PANCASILA', '', '', '', 1),
(4, 'GURU PRODUKTIF', '202045010003', 'Prof. Dr. Ing Baharudin Jusuf Habibie, MT', 'PARE - PARE', '2020-03-13', 'LAKI LAKI', 'S2 TEKNIK MESIN', 'Patra Kuningan No.48 Jakarta Pusat ', 'ISLAM', 'HabibieMrCrack@gmail.com', '08123453213222', 'SDN PARE PARE 01', 'SMPN SULAWESI 34', 'SMA BANDUNG 01', 'INSTITUT TEKNOLOGY BANDUNG', 'INSTITUT TEKNOLOGY BANDUNG', 'MERAKIT PESAWAT, KAPAL SELAM, KERETA API, DAN KAPAL TANKER', 'WhatsApp-Image-2019-09-11-at-20_47_38-1.jpeg', 1),
(12, 'GURU PRODUKTIF', '202045010004', 'HENDHAR S,s', 'Bogor', '2020-03-19', 'LAKI LAKI', 'S1 SENI', 'KP. PADANGENYANG RT.03 RW.03 DESA.CIPELANG KECAMATAN.CIJERUK KABUPATEN.BOGOR', 'ISLAM', 'HabibieMrCrack@gmail.com', '08123453213222', 'SDN BADUY 01', 'SMPN BOGOR 34', 'SMA BOGOR 01', 'STIKOM BINANIAGA BOGOR', 'INSTITUT TEKNOLOGY BANDUNG', 'TEATHER DAN SENI JALANAN', '', 1),
(13, 'GURU NASIONAL', '202045010005', 'DIDIN SYAMSUDIN,S.Kom', 'Bogor', '2020-03-28', 'LAKI LAKI', 'S1 TEKNIK INFORMATIKA', 'KP. PADANGENYANG RT.03 RW.03 DESA.CIPELANG KECAMATAN.CIJERUK KABUPATEN.BOGOR', 'ISLAM', 'dheafitriawan1718@gmail.com', '08123453213222', 'SDN PARE PARE 01', 'SMPN BOGOR 34', 'SMA BOGOR 01', 'INSTITUT TEKNOLOGY BANDUNG', '', 'OPRATOR TRI HARMA 2 BOGOR', '', 1),
(14, 'GURU KEWILAYAHAN', '202045010006', 'FERNANO,S.Kom', 'jakarta', '2020-03-18', 'LAKI LAKI', 'S1 TEKNIK INFORMATIKA', 'GALUNGGUNG NO.98 JAKARTA UTARA', 'KRISTEN KATOLIQ', 'dheafitriawan1718@gmail.com', '08123453213222', 'SDN BADUY 01', 'SMPN SULAWESI 34', 'SMA BANDUNG 01', 'STIKOM BINANIAGA BOGOR', '', 'OPRATOR TRI HARMA 4 BOGOR', '', 1),
(16, 'GURU PRODUKTIF', '5324465465', 'ASEP', 'BOGOR', '2020-04-28', 'LAKI LAKI', 'S1', 'RHKGFJ', 'HINDU', 'FGSFERUIBYUIERYTIEURY', '43564376574', 'ERUEWRUEHJFHDHFJK', 'EWREGERHGFERHGFEG', 'FSUERGFESRHFREG', 'RERIUGFEERHUISHRUI', '', 'FHGJHRUHGUERHWIUGHRU', 'Backup_of_kiw.jpg', 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_login`
--

CREATE TABLE IF NOT EXISTS `tbl_login` (
`kd_login` int(10) NOT NULL,
  `username` varchar(200) NOT NULL,
  `password` varchar(5000) NOT NULL,
  `status` int(10) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data untuk tabel `tbl_login`
--

INSERT INTO `tbl_login` (`kd_login`, `username`, `password`, `status`) VALUES
(1, '1', '11', 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_master_administrasi`
--

CREATE TABLE IF NOT EXISTS `tbl_master_administrasi` (
`no_administrasi` int(10) NOT NULL,
  `tahun_ajaran` varchar(30) NOT NULL,
  `uang_bangunan` int(30) NOT NULL,
  `uang_kaos_olahraga` int(30) NOT NULL,
  `uang_batik` int(30) NOT NULL,
  `uang_almamater` int(30) NOT NULL,
  `uang_atribut` int(30) NOT NULL,
  `uang_paket_ujian_kelas_3` int(30) NOT NULL,
  `uang_uts_semester1` int(30) NOT NULL,
  `uang_uts_semester3` int(30) NOT NULL,
  `uang_uts_semester5` int(30) NOT NULL,
  `uang_uas_semester2` int(30) NOT NULL,
  `uang_uas_semester4` int(30) NOT NULL,
  `uang_daftar_ulang_1` int(30) NOT NULL,
  `uang_daftar_ulang_2` int(30) NOT NULL,
  `uang_prakerin` int(30) NOT NULL,
  `keterangan` int(10) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data untuk tabel `tbl_master_administrasi`
--

INSERT INTO `tbl_master_administrasi` (`no_administrasi`, `tahun_ajaran`, `uang_bangunan`, `uang_kaos_olahraga`, `uang_batik`, `uang_almamater`, `uang_atribut`, `uang_paket_ujian_kelas_3`, `uang_uts_semester1`, `uang_uts_semester3`, `uang_uts_semester5`, `uang_uas_semester2`, `uang_uas_semester4`, `uang_daftar_ulang_1`, `uang_daftar_ulang_2`, `uang_prakerin`, `keterangan`) VALUES
(1, '2016/2017', 1500000, 100000, 130000, 120000, 30000, 2500000, 50000, 50000, 50000, 75000, 75000, 150000, 150000, 700000, 1),
(2, '2018/2019', 3000000, 3000000, 3000000, 3000000, 3000000, 3000000, 3000000, 3000000, 3000000, 3000000, 3000000, 3000000, 3000000, 3000000, 1),
(3, '2019/2020', 1500000, 1500000, 1500000, 1500000, 1500000, 1500000, 1500000, 1500000, 1500000, 1500000, 1500000, 1500000, 1500000, 1500000, 1),
(4, '2021/2022', 40000000, 40000000, 40000000, 40000000, 40000000, 40000000, 40000000, 40000000, 40000000, 40000000, 40000000, 40000000, 40000000, 40000000, 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_siswa`
--

CREATE TABLE IF NOT EXISTS `tbl_siswa` (
`kd_siswa` int(10) NOT NULL,
  `no_administrasi` int(10) NOT NULL,
  `no_uangbangunan` int(5) NOT NULL,
  `nis` int(10) NOT NULL,
  `nisn` int(10) NOT NULL,
  `nama_siswa` varchar(100) NOT NULL,
  `jenis_kelamin` varchar(10) NOT NULL,
  `tempat_lahir` varchar(100) NOT NULL,
  `tanggal_lahir` date NOT NULL,
  `keterangan` int(10) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data untuk tabel `tbl_siswa`
--

INSERT INTO `tbl_siswa` (`kd_siswa`, `no_administrasi`, `no_uangbangunan`, `nis`, `nisn`, `nama_siswa`, `jenis_kelamin`, `tempat_lahir`, `tanggal_lahir`, `keterangan`) VALUES
(1, 1, 1, 2020010001, 214435345, 'Abdul Mukhlis', 'LAKI LAKI', 'Bogor', '2020-03-18', 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_uang_bangunan`
--

CREATE TABLE IF NOT EXISTS `tbl_uang_bangunan` (
  `no_uangbangunan` int(10) NOT NULL,
  `no_administrasi` int(10) NOT NULL,
  `sisa_pembayaran` varchar(200) NOT NULL,
  `jml_pembayaran` int(100) NOT NULL,
  `keterangan` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tbl_uang_bangunan`
--

INSERT INTO `tbl_uang_bangunan` (`no_uangbangunan`, `no_administrasi`, `sisa_pembayaran`, `jml_pembayaran`, `keterangan`) VALUES
(1, 1, '900000', 600000, 0);

--
-- Trigger `tbl_uang_bangunan`
--
DELIMITER //
CREATE TRIGGER `transaksi_uang_bangunan` AFTER INSERT ON `tbl_uang_bangunan`
 FOR EACH ROW BEGIN
	UPDATE tbl_uang_bangunan SET sisa_pembayaran = sisa_pembayaran-NEW.JML_PEMBAYARAN WHERE no_uangbangunan = NEW.NO_UANGBANGUNAN;
END
//
DELIMITER ;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_berkasguru`
--
ALTER TABLE `tbl_berkasguru`
 ADD PRIMARY KEY (`kd_berkasguru`);

--
-- Indexes for table `tbl_berkassiswa`
--
ALTER TABLE `tbl_berkassiswa`
 ADD PRIMARY KEY (`kd_berkassiswa`);

--
-- Indexes for table `tbl_guru`
--
ALTER TABLE `tbl_guru`
 ADD PRIMARY KEY (`kd_guru`);

--
-- Indexes for table `tbl_login`
--
ALTER TABLE `tbl_login`
 ADD PRIMARY KEY (`kd_login`);

--
-- Indexes for table `tbl_master_administrasi`
--
ALTER TABLE `tbl_master_administrasi`
 ADD PRIMARY KEY (`no_administrasi`);

--
-- Indexes for table `tbl_siswa`
--
ALTER TABLE `tbl_siswa`
 ADD PRIMARY KEY (`kd_siswa`);

--
-- Indexes for table `tbl_uang_bangunan`
--
ALTER TABLE `tbl_uang_bangunan`
 ADD PRIMARY KEY (`no_uangbangunan`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_berkasguru`
--
ALTER TABLE `tbl_berkasguru`
MODIFY `kd_berkasguru` int(10) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `tbl_berkassiswa`
--
ALTER TABLE `tbl_berkassiswa`
MODIFY `kd_berkassiswa` int(10) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `tbl_guru`
--
ALTER TABLE `tbl_guru`
MODIFY `kd_guru` int(10) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=17;
--
-- AUTO_INCREMENT for table `tbl_login`
--
ALTER TABLE `tbl_login`
MODIFY `kd_login` int(10) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `tbl_master_administrasi`
--
ALTER TABLE `tbl_master_administrasi`
MODIFY `no_administrasi` int(10) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `tbl_siswa`
--
ALTER TABLE `tbl_siswa`
MODIFY `kd_siswa` int(10) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

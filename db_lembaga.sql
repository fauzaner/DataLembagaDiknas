-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 06, 2022 at 09:31 AM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_lembaga`
--

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
-- Table structure for table `guru`
--

CREATE TABLE `guru` (
  `no` int(20) NOT NULL,
  `nama_gr` varchar(255) NOT NULL,
  `nuptk` varchar(50) DEFAULT NULL,
  `jk` enum('L','P','Laki-Laki','Perempuan') DEFAULT NULL,
  `tmpt_lhr` varchar(50) DEFAULT NULL,
  `tgl_lhr` date DEFAULT NULL,
  `nip` varchar(20) DEFAULT NULL,
  `status_kep` varchar(100) DEFAULT NULL,
  `jenis_ptk` varchar(100) DEFAULT NULL,
  `agama` varchar(100) DEFAULT NULL,
  `almt_jln` varchar(255) DEFAULT NULL,
  `rt` int(10) DEFAULT NULL,
  `rw` int(10) DEFAULT NULL,
  `nm_dusun` varchar(100) DEFAULT NULL,
  `desa_kelurahan` varchar(255) DEFAULT NULL,
  `kecamatan` varchar(255) DEFAULT NULL,
  `kd_pos` varchar(100) DEFAULT NULL,
  `telp` varchar(100) DEFAULT NULL,
  `hp` varchar(100) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `tgs_tambahan` varchar(100) DEFAULT NULL,
  `sk_cpns` varchar(100) DEFAULT NULL,
  `sk_pengangkatan` varchar(100) DEFAULT NULL,
  `tmt_pengangkatan` date DEFAULT NULL,
  `lmbg_pengangkatan` varchar(100) DEFAULT NULL,
  `pangkat_gol` varchar(100) DEFAULT NULL,
  `sumber_gaji` varchar(100) DEFAULT NULL,
  `nm_ibu` varchar(255) DEFAULT NULL,
  `status_perkawinan` varchar(100) DEFAULT NULL,
  `nm_suami_istri` varchar(255) DEFAULT NULL,
  `nip_suami_istri` varchar(100) DEFAULT NULL,
  `pekerjaan_suami_istri` varchar(100) DEFAULT NULL,
  `tmt_pns` date DEFAULT NULL,
  `lisensi` enum('iya','tidak') DEFAULT NULL,
  `dikat_kep` enum('iya','tidak') DEFAULT NULL,
  `keahlian_braille` enum('iya','tidak') DEFAULT NULL,
  `keahlian_bhs_isyarat` enum('iya','tidak') DEFAULT NULL,
  `npwp` varchar(100) DEFAULT NULL,
  `nm_wjb_pajak` varchar(255) DEFAULT NULL,
  `kewarganegaraan` varchar(100) DEFAULT NULL,
  `bank` varchar(100) DEFAULT NULL,
  `nmr_rek_bank` varchar(100) DEFAULT NULL,
  `rek_nama` varchar(255) DEFAULT NULL,
  `nik_gr` varchar(100) NOT NULL,
  `no_kk` varchar(100) DEFAULT NULL,
  `karpeg` varchar(100) DEFAULT NULL,
  `karis_karsu` varchar(100) DEFAULT NULL,
  `lintang` varchar(100) DEFAULT NULL,
  `bujur` varchar(100) DEFAULT NULL,
  `nuks` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COMMENT='guru';

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
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1);

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
-- Table structure for table `peserta_didik`
--

CREATE TABLE `peserta_didik` (
  `no` int(20) NOT NULL,
  `nama_pd` varchar(255) NOT NULL,
  `nipd` varchar(20) DEFAULT NULL,
  `jenis_kelamin` enum('Laki-laki','Perempuan','L','P') DEFAULT NULL,
  `nisn` varchar(50) DEFAULT NULL,
  `tmp_lhr` varchar(50) DEFAULT NULL,
  `tgl_lhr` date DEFAULT NULL,
  `nik_pd` varchar(40) NOT NULL,
  `agama` varchar(30) DEFAULT NULL,
  `alamat` varchar(255) DEFAULT NULL,
  `rt` varchar(10) DEFAULT NULL,
  `rw` varchar(10) DEFAULT NULL,
  `dusun` varchar(50) DEFAULT NULL,
  `kelurahan` varchar(50) DEFAULT NULL,
  `kecamatan` varchar(50) DEFAULT NULL,
  `kode_pos` varchar(10) DEFAULT NULL,
  `jenis_tinggal` varchar(50) DEFAULT NULL,
  `transportasi` varchar(50) DEFAULT NULL,
  `no_telp` varchar(20) DEFAULT NULL,
  `no_hp` varchar(20) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `skhun` varchar(100) DEFAULT NULL,
  `penerima_kps` varchar(255) DEFAULT NULL,
  `no_kps` varchar(30) DEFAULT NULL,
  `nama_ayah` varchar(255) DEFAULT NULL,
  `thn_lhr_ayah` varchar(10) DEFAULT NULL,
  `pend_ayah` varchar(100) DEFAULT NULL,
  `pekerjaan_ayah` varchar(100) DEFAULT NULL,
  `penghasilan_ayah` varchar(100) DEFAULT NULL,
  `nik_ayah` varchar(20) DEFAULT NULL,
  `nama_ibu` varchar(255) DEFAULT NULL,
  `thn_lhr_ibu` varchar(10) DEFAULT NULL,
  `pend_ibu` varchar(100) DEFAULT NULL,
  `pekerjaan_ibu` varchar(100) DEFAULT NULL,
  `penghasilan_ibu` varchar(100) DEFAULT NULL,
  `nik_ibu` varchar(20) DEFAULT NULL,
  `nama_wali` varchar(255) DEFAULT NULL,
  `thn_lhr_wali` varchar(10) DEFAULT NULL,
  `pend_wali` varchar(20) DEFAULT NULL,
  `pekerjaan_wali` varchar(100) DEFAULT NULL,
  `penghasilan_wali` varchar(100) DEFAULT NULL,
  `nik_wali` varchar(20) DEFAULT NULL,
  `tingkat_rombel` varchar(50) DEFAULT NULL,
  `no_peserta_un` varchar(50) DEFAULT NULL,
  `no_seri_ijazah` varchar(50) DEFAULT NULL,
  `penerima_kip` enum('Tidak','Ya') DEFAULT NULL,
  `nomor_kip` varchar(20) DEFAULT NULL,
  `nama_kip` varchar(255) DEFAULT NULL,
  `no_kks` varchar(50) DEFAULT NULL,
  `no_regis_akta` varchar(50) DEFAULT NULL,
  `bank` varchar(50) DEFAULT NULL,
  `no_rek_bank` varchar(50) DEFAULT NULL,
  `rekening_atas_nama` varchar(255) DEFAULT NULL,
  `layak_pip` varchar(255) DEFAULT NULL,
  `alasan_pip` varchar(255) DEFAULT NULL,
  `keb_khusus` varchar(255) DEFAULT NULL,
  `sekolah_asal` varchar(100) DEFAULT NULL,
  `anak_ke` varchar(10) DEFAULT NULL,
  `lintang` varchar(100) DEFAULT NULL,
  `bujur` varchar(100) DEFAULT NULL,
  `no_kk` varchar(100) DEFAULT NULL,
  `berat_badan` varchar(50) DEFAULT NULL,
  `tinggi_badan` varchar(50) DEFAULT NULL,
  `lingkar_kepala` varchar(50) DEFAULT NULL,
  `jml_saudara` varchar(50) DEFAULT NULL,
  `jarak_ke_sekolah` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `peserta_didik`
--

INSERT INTO `peserta_didik` (`no`, `nama`, `nipd`, `jenis_kelamin`, `nisn`, `tmp_lhr`, `tgl_lhr`, `nik`, `agama`, `alamat`, `rt`, `rw`, `dusun`, `kelurahan`, `kecamatan`, `kode_pos`, `jenis_tinggal`, `transportasi`, `no_telp`, `no_hp`, `email`, `skhun`, `penerima_kps`, `no_kps`, `nama_ayah`, `thn_lhr_ayah`, `pend_ayah`, `pekerjaan_ayah`, `penghasilan_ayah`, `nik_ayah`, `nama_ibu`, `thn_lhr_ibu`, `pend_ibu`, `pekerjaan_ibu`, `penghasilan_ibu`, `nik_ibu`, `nama_wali`, `thn_lhr_wali`, `pend_wali`, `pekerjaan_wali`, `penghasilan_wali`, `nik_wali`, `tingkat_rombel`, `no_peserta_un`, `no_seri_ijazah`, `penerima_kip`, `nomor_kip`, `nama_kip`, `no_kks`, `no_regis_akta`, `bank`, `no_rek_bank`, `rekening_atas_nama`, `layak_pip`, `alasan_pip`, `keb_khusus`, `sekolah_asal`, `anak_ke`, `lintang`, `bujur`, `no_kk`, `berat_badan`, `tinggi_badan`, `lingkar_kepala`, `jml_saudara`, `jarak_ke_sekolah`) VALUES
(3, 'AFNAN BENTAR SULAIMAN', '2020227', 'L', '3167276723', 'MALANG', '2016-03-21', '0', 'Islam', 'JALAN REJOSO', '1', '2', 'BETEK', 'REJOSO', 'Kec. Binangun', '66193', 'Bersama orang tua', 'Sepeda motor', '', '085746505308', '', '', 'Tidak', '', 'RULY HARTONO', '1968', 'SMA / sederajat', 'Karyawan Swasta', 'Rp. 500,000 - Rp. 999,999', '', 'FITRIYA IRAWATI', '1981', 'SMA / sederajat', 'Lainnya', 'Tidak Berpenghasilan', '', '', '', 'Tidak sekolah', '', '', '', 'TK A', '', '', 'Tidak', '', '0', '', '', '', '', '', 'Tidak', '', 'Tidak ada', '', '3', '0', '0', '', '', '', '', '', ''),
(51, 'ZAHIRA AFIKA LUTHFI', '2020215', 'P', '3157003000', 'BLITAR', '2015-09-28', '1', 'Islam', 'dsn. Ngadri', '0', '0', 'Ngadri', 'Ngadri', 'Kec. Binangun', '66193', 'Bersama orang tua', 'Sepeda', '', '081333918761', '', '', 'Tidak', '', 'DIDIT LUTHFI ASYHARIE', '1981', 'Tidak sekolah', 'Wirausaha', 'Rp. 2,000,000 - Rp. 4,999,999', '', 'NURUL LAILA', '1984', 'S3', 'Lainnya', 'Rp. 500,000 - Rp. 999,999', '', '', '', 'Tidak sekolah', '', '', '', 'TK B', '', '', 'Tidak', '', '0', '', '', '', '', '', 'Tidak', '', 'Tidak ada', '', '4', '0', '0', '', '13', '100', '0', '5', '1'),
(20, 'FANIA TIARA CANTIKA SELFI', '2019196', 'P', '0156067071', 'BLITAR ', '2015-06-15', '3', 'Islam', 'DSN.NGADRI', '1', '6', 'NGADRI', 'NGADRI', 'Kec. Binangun', '66193', 'Bersama orang tua', 'Sepeda motor', '', '081233506697', '', '', 'Tidak', ' ', 'REDI SUTRISNO', '0', 'SMA / sederajat', 'Wiraswasta', 'Rp. 1,000,000 - Rp. 1,999,999', '', 'DWI ANDAYANI', '0', 'SMA / sederajat', 'Wiraswasta', 'Rp. 2,000,000 - Rp. 4,999,999', '', '', '', '(tidak diisi)', '', '', '', 'TK B', '', '', 'Tidak', '', '0', '', '', '', '', '', 'Tidak', '', 'Tidak ada', '', '2', '0', '0', '', '16', '100', '', '0', '1'),
(38, 'NAIYIRA ZHAFARUNA RIZKY FEELOKA', '2021265', 'P', '3172448850', 'PATI', '2017-01-11', '3318195101170006', 'Islam', 'DSN. SUMBERPANDAN', '0', '0', 'SUMBERPANDAN', 'NGEMBUL', 'Kec. Binangun', '66193', 'Bersama orang tua', 'Sepeda motor', '628128299', '081392059557', '', '', 'Tidak', '', '', '1983', 'Profesi', 'Karyawan Swasta', 'Rp. 2,000,000 - Rp. 4,999,999', '', 'ATIKA YULIANTI', '1987', 'SMA / sederajat', 'Tidak bekerja', 'Tidak Berpenghasilan', '', '', '', 'Tidak sekolah', '', '', '', 'TK A', '', '', 'Tidak', '', '0', '', '', '', '', '', 'Tidak', '', 'Tidak ada', '', '1', '0', '0', '', '14', '98', '0', '1', '3'),
(36, 'MUHAMMAD TSAQIB RIZA AL GHOZALI', '2021267', 'L', '3171394018', 'BLITAR', '2017-06-02', '3503120206170001', 'Islam', 'DSN. PALDOYONG', '3', '2', 'PALDOYONG', 'SAMBIGEDE', 'Kec. Binangun', '66189', 'Wali', 'Sepeda motor', '', '082232417258', '', '', 'Tidak', '', '', '0', 'D4', 'Karyawan Swasta', 'Rp. 2,000,000 - Rp. 4,999,999', '', 'RUSMINI', '0', 'SMP / sederajat', 'Tidak bekerja', 'Tidak Berpenghasilan', '', '', '', 'Tidak sekolah', '', '', '', 'PLAYGROUP', '', '', 'Tidak', '', '0', '', '', '', '', '', 'Tidak', '', 'Tidak ada', '', '1', '0', '0', '', '13', '100', '0', '1', '4'),
(6, 'ARSYANA AZIAN RAFFASYA', '2021241', 'L', '3182195226', 'TULUNGAGUNG', '2018-05-11', '3504045105180001', 'Islam', 'DSN. PAKEL', '3', '1', 'PAKEL', 'PAKEL', 'Kec. Ngantru', '66247', 'Bersama orang tua', 'Sepeda motor', '', '082331310266', '', '', 'Tidak', '', '', '1979', 'S1', 'Wiraswasta', 'Rp. 2,000,000 - Rp. 4,999,999', '', 'EVA ALFIANI', '1979', 'S1', 'Karyawan Swasta', 'Rp. 500,000 - Rp. 999,999', '', '', '', 'Tidak sekolah', '', '', '', 'PLAYGROUP', '', '', 'Tidak', '', '0', '', '', '', '', '', 'Tidak', '', 'Tidak ada', '', '2', '0', '0', '3504041301170002', '10', '77', '0', '0', '1'),
(14, 'BRAMASTYA GIBRAN SANTOSO', '2021235', 'L', '3173063101', 'MALANG', '2017-01-07', '3505160107170007', 'Islam', 'DSN. SUKOMULYO', '1', '1', 'SUKOMULYO', 'SUKORAME', 'Kec. Binangun', '66193', 'Bersama orang tua', 'Mobil pribadi', '', '081252450744', '', '', 'Tidak', '', '', '1984', 'SMA / sederajat', 'Pedagang Besar', 'Rp. 5,000,000 - Rp. 20,000,000', '', 'YULI HANDAYANI', '1984', 'SMA / sederajat', 'Tidak bekerja', 'Tidak Berpenghasilan', '', '', '', 'Tidak sekolah', '', '', '', 'PLAYGROUP', '', '', 'Tidak', '', '0', '', '', '', '', '', 'Tidak', '', 'Tidak ada', '', '1', '-6.2254649', '106.8020575', '3505162710100002', '15', '90', '0', '1', '5'),
(31, 'MUHAMMAD ADRIAN PRATAMA', '2021240', 'L', '3163094129', 'BLITAR', '2016-08-01', '3505160108160001', 'Islam', 'DSN. BLUMBANG', '2', '3', 'BLUMBANG', 'NGEMBUL', 'Kec. Binangun', '66189', 'Bersama orang tua', 'Sepeda motor', '', '081336685096', '', '', 'Tidak', '', '', '1986', 'SMP / sederajat', 'Karyawan Swasta', 'Rp. 1,000,000 - Rp. 1,999,999', '', 'FITRI LAELATUL NIKMAH', '1995', 'SMA / sederajat', 'Karyawan Swasta', 'Rp. 500,000 - Rp. 999,999', '', '', '', 'Tidak sekolah', '', '', '', 'TK A', '', '', 'Tidak', '', '0', '', '', '', '', '', 'Tidak', '', 'Tidak ada', '', '1', '0', '0', '3505162308160002', '15', '100', '0', '0', '4'),
(48, 'SAYID SATRIA ALFARUQ', '2021253', 'L', '3163502448', 'BLITAR', '2016-04-02', '3505160204160002', 'Islam', 'DSN. BLUMBANG', '1', '2', 'BLUMBANG', 'NGEMBUL', 'Kec. Binangun', '66193', 'Bersama orang tua', 'Sepeda motor', '', '085931031528', '', '', 'Tidak', '', '', '1988', 'SMP / sederajat', 'Wiraswasta', 'Rp. 2,000,000 - Rp. 4,999,999', '', 'WIDI SUSILOWATI', '1984', 'SMA / sederajat', 'Tidak bekerja', 'Tidak Berpenghasilan', '', '', '', 'Tidak sekolah', '', '', '', 'TK A', '', '', 'Tidak', '', '0', '', '', '', '', '', 'Tidak', '', 'Tidak ada', '', '2', '0', '0', '3505160402190003', '18', '101', '0', '1', '4'),
(18, 'DYLAN ALVARENDRA ARSYIL', '2020225', 'L', '3167413343', 'BLITAR', '2016-04-04', '3505160404160002', 'Islam', 'SUMBERPANDAN', '2', '1', 'SUMBERPANDAN', 'NGEMBUL', 'Kec. Binangun', '66193', 'Bersama orang tua', 'Sepeda motor', '', '082257104114', '', '', 'Tidak', '', 'FANDI WAHYU WIDYANTO', '1987', 'S1', 'Karyawan Swasta', 'Rp. 2,000,000 - Rp. 4,999,999', '3505161912870004', 'NUR ARAFAH', '1988', 'S1', 'Lainnya', 'Tidak Berpenghasilan', '3573016707880002', '', '', 'Tidak sekolah', '', '', '', 'TK B', '', '', 'Tidak', '', '0', '', '3505-LT-21052018-0001', '', '', '', 'Tidak', '', 'Tidak ada', '', '2', '0', '0', '3505160909140002', '14', '100', '0', '1', '3'),
(43, 'RAFAZZA RIFQI ALVIAN', '2020222', 'L', '3160515938', 'BLITAR', '2016-07-11', '3505161107160002', 'Islam', 'JALAN REJOSO', '1', '2', 'REJOSO', 'REJOSO', 'Kec. Binangun', '66193', 'Bersama orang tua', 'Sepeda motor', '', '085731109570', '', '', 'Tidak', '', 'DEDE SULISTIONO', '1988', 'SMA / sederajat', 'Karyawan Swasta', 'Rp. 1,000,000 - Rp. 1,999,999', '3505162103880002', 'BINTI ANISAIROH', '1988', 'SMA / sederajat', 'Lainnya', 'Tidak Berpenghasilan', '3502094909880002', '', '', 'Tidak sekolah', '', '', '', 'TK A', '', '', 'Tidak', '', '0', '', '3505-LT-24082017-0053', '', '', '', 'Tidak', '', 'Tidak ada', '', '1', '0', '0', '3505160501170001', '16', '95', '0', '0', '5'),
(25, 'KAESANG UMAR FARUQ', '2021249', 'L', '3169551031', 'MALANG', '2016-05-12', '3505161205160001', 'Islam', 'DSN. UMBULDAMAR', '1', '1', 'UMBULDAMAR', 'UMBULDAMAR', 'Kec. Binangun', '66190', 'Bersama orang tua', 'Sepeda motor', '', '082301683446', '', '', 'Tidak', '', '', '1983', 'S1', 'Lainnya', 'Rp. 1,000,000 - Rp. 1,999,999', '', 'DWI WULAN RAHMASARI', '1988', 'S1', 'PNS/TNI/Polri', 'Rp. 2,000,000 - Rp. 4,999,999', '', '', '', 'Tidak sekolah', '', '', '', 'TK A', '', '', 'Tidak', '', '0', '', '', '', '', '', 'Tidak', '', 'Tidak ada', '', '2', '0', '0', '3505160803120004', '30', '115', '0', '2', '2'),
(52, 'ZICO AHMAD MAULANA', '2021234', 'L', '3179861565', 'BLITAR', '2017-04-13', '3505161304170001', 'Islam', 'DUSUN BETEK', '1', '2', 'BETEK', 'REJOSO', 'Kec. Binangun', '66193', 'Bersama orang tua', 'Sepeda motor', '', '085792739809', 'windaretno42@gmail.com', '', 'Tidak', '', '', '1982', 'SMP / sederajat', 'Peternak', 'Rp. 2,000,000 - Rp. 4,999,999', '', 'WINDA RETNO WATI', '1995', 'SMA / sederajat', 'Lainnya', 'Rp. 500,000 - Rp. 999,999', '', '', '', 'Tidak sekolah', '', '', '', 'PLAYGROUP', '', '', 'Tidak', '', '0', '', '', '', '', '', 'Tidak', '', 'Tidak ada', '', '1', '-6.2254649', '106.8020575', '3505162804200002', '25', '104', '0', '0', '5'),
(42, 'RADITYA ROWI SAHPUTRA', '2021250', 'L', '3165574787', 'BLITAR', '2016-05-14', '3505161405160002', 'Islam', 'DSN. NGADRI', '4', '1', 'NGADRI', 'NGADRI', 'Kec. Binangun', '66193', 'Bersama orang tua', 'Jalan kaki', '', '0895395181870', '', '', 'Tidak', '', '', '1981', 'SD / sederajat', 'Karyawan Swasta', 'Rp. 500,000 - Rp. 999,999', '', 'WINARSIH', '1990', 'SD / sederajat', 'Pedagang Kecil', 'Rp. 500,000 - Rp. 999,999', '', '', '', 'Tidak sekolah', '', '', '', 'TK A', '', '', 'Tidak', '', '0', '', '', '', '', '', 'Tidak', '', 'Tidak ada', '', '1', '0', '0', '3505160906170001', '16', '108', '0', '0', '1'),
(17, 'DEVANO HAIDAR PRATAMA', '2020233', 'L', '3179421201', 'BLITAR', '2017-05-16', '3505161605170001', 'Islam', 'JALAN NGADRI', '2', '3', 'NGADRI', 'NGADRI', 'Kec. Binangun', '66193', 'Bersama orang tua', 'Sepeda motor', '', '085785203225', '', '', 'Tidak', '', 'JOKO MULYONO', '1989', 'SMA / sederajat', 'Wiraswasta', 'Rp. 1,000,000 - Rp. 1,999,999', '', 'ANASTASIA NURANITA', '1990', 'S1', 'Karyawan Swasta', 'Rp. 1,000,000 - Rp. 1,999,999', '3505166205900001', '', '', 'Tidak sekolah', '', '', '', 'PLAYGROUP', '', '', 'Tidak', '', '0', '', '3505-LT-16082018-0010', '', '', '', 'Tidak', '', 'Tidak ada', '', '1', '0', '0', '3505162306061921', '16', '105', '0', '0', '1'),
(33, 'MUHAMMAD RAFASYA ADIYASTHA', '2020230', 'L', '3158266226', 'BLITAR', '2015-11-16', '3505161611150001', 'Islam', 'JALAN KALIJINGGO', '2', '7', 'KALIJINGGO', 'BIROWO', 'Kec. Binangun', '66193', 'Bersama orang tua', 'Sepeda motor', '', '085335561824', '', '', 'Tidak', '', 'ALI BADIYO', '1982', 'SMP / sederajat', 'Karyawan Swasta', 'Rp. 1,000,000 - Rp. 1,999,999', '3507041304820008', 'YUNIK MISTIANI', '1982', 'SMP / sederajat', 'Karyawan Swasta', 'Rp. 1,000,000 - Rp. 1,999,999', '3505205607820001', '', '', 'Tidak sekolah', '', '', '', 'TK A', '', '', 'Tidak', '', '0', '', '', '', '', '', 'Tidak', '', 'Tidak ada', '', '1', '0', '0', '', '', '', '', '', ''),
(39, 'NANDRA ALFAREZA', '2021242', 'L', '3175436482', 'BLITAR', '2017-04-17', '3505161704170002', 'Islam', 'DSN. BETEK', '1', '2', 'BETEK', 'REJOSO', 'Kec. Binangun', '66193', 'Bersama orang tua', 'Sepeda motor', '', '085735911988', '', '', 'Tidak', '', '', '1984', 'SMA / sederajat', 'Karyawan Swasta', 'Rp. 2,000,000 - Rp. 4,999,999', '', 'DWI ANDARWATI', '1992', 'SMP / sederajat', 'Wiraswasta', 'Tidak Berpenghasilan', '', '', '', 'Tidak sekolah', '', '', '', 'PLAYGROUP', '', '', 'Tidak', '', '0', '', '', '', '', '', 'Tidak', '', 'Tidak ada', '', '1', '-8.20142619', '112.3316874', '3505160305170008', '13', '95', '0', '1', '5'),
(32, 'MUHAMMAD FAHMI SA\'DULLAH', '2020221', 'L', '3166705740', 'BLITAR', '2016-04-23', '3505162304160002', 'Islam', 'JALAN NGADRI', '4', '2', 'NGADRI', 'NGADRI', 'Kec. Binangun', '66193', 'Bersama orang tua', 'Lainnya', '', '089523847191', '', '', 'Tidak', '', 'MUHAMAD BUDI HIDAYAT', '1976', 'SMA / sederajat', 'Pedagang Kecil', 'Rp. 1,000,000 - Rp. 1,999,999', '3505161508760003', 'MAFTUHA', '1985', 'SMA / sederajat', 'Pedagang Kecil', 'Rp. 1,000,000 - Rp. 1,999,999', '3505165307850001', '', '', 'Tidak sekolah', '', '', '', 'TK A', '', '', 'Tidak', '', '0', '', '', '', '', '', 'Tidak', '', 'Tidak ada', '', '2', '0', '0', '3505160905061543', '16', '98', '0', '1', '1'),
(4, 'AKHTAR HAIDAR AL GHIFARI', '2021248', 'L', '3170677979', 'BLITAR', '2017-10-28', '3505162810170002', 'Islam', 'DSN. UNGGAHAN', '4', '1', 'UNGGAHAN', 'TAWANGREJO', 'Kec. Binangun', '66190', 'Bersama orang tua', 'Sepeda motor', '', '082301288876', '', '', 'Tidak', '', '', '0', 'S1', 'Lainnya', 'Rp. 1,000,000 - Rp. 1,999,999', '', 'EVY NURLAILI', '0', 'S1', 'Lainnya', 'Rp. 1,000,000 - Rp. 1,999,999', '', '', '', 'Tidak sekolah', '', '', '', 'PLAYGROUP', '', '', 'Tidak', '', '0', '', '', '', '', '', 'Tidak', '', 'Tidak ada', '', '2', '0', '0', '', '20', '107', '0', '1', '3'),
(24, 'ILHAM AHMAD FACHRUDIN', '2021244', 'L', '3168028330', 'BLITAR', '2016-04-30', '3505163004160001', 'Islam', 'DSN. KEDUNGJADI', '5', '1', 'KEDUNGJATI', 'REJOSO', 'Kec. Binangun', '', 'Bersama orang tua', 'Sepeda motor', '', '085607688268', '', '', 'Ya', '', '', '1984', 'SMA / sederajat', 'Petani', 'Rp. 500,000 - Rp. 999,999', '', 'LILIK', '1979', 'SD / sederajat', 'Petani', 'Rp. 500,000 - Rp. 999,999', '', '', '', 'Tidak sekolah', '', '', '', 'TK A', '', '', 'Tidak', '', '0', '', '', '', '', '', 'Tidak', '', 'Tidak ada', '', '1', '0', '0', '3505162306060952', '27', '112', '0', '2', '5'),
(27, 'KENZO ORLANDO DINATA', '2021256', 'L', '3165452169', 'MALANG', '2016-11-30', '3505163011160001', 'Islam', 'SAMBIGEDE', '4', '2', 'PALDOYONG', 'SAMBIGEDE', 'Kec. Binangun', '66193', 'Bersama orang tua', 'Sepeda motor', '', '085233391123', 'inaramadhani693@mail.com', '', 'Tidak', '', '', '1994', 'SMA / sederajat', 'Karyawan Swasta', 'Rp. 1,000,000 - Rp. 1,999,999', '', 'INA ROMADLON RAHMAN SARI', '1995', 'SMA / sederajat', 'Karyawan Swasta', 'Rp. 500,000 - Rp. 999,999', '', '', '', 'Tidak sekolah', '', '', '', 'PLAYGROUP', '', '', 'Tidak', '', '0', '', '', '', '', '', 'Tidak', '', 'Tidak ada', '', '1', '0', '0', '3505161904170001', '13', '100', '0', '1', '3'),
(8, 'ATHIFUN WAFI ARSENIO', '2020216', 'L', '3166906127', 'BLITAR', '2016-08-31', '3505163108160001', 'Islam', 'JALAN PALDOYONG', '4', '1', 'PALDOYONG', 'SAMBIGEDE', 'Kec. Binangun', '66193', 'Bersama orang tua', 'Sepeda motor', '', '085736400325', '', '', 'Tidak', '', 'SISWANTO', '1982', 'S1', 'Lainnya', 'Rp. 1,000,000 - Rp. 1,999,999', '3505162901820001', 'NOVI TAURUSITA', '1986', 'S1', 'Lainnya', 'Rp. 1,000,000 - Rp. 1,999,999', '3505164304860001', '', '', 'Tidak sekolah', '', '', '', 'TK A', '', '', 'Tidak', '', '0', '', '3505-LU-27092016-0006', '', '', '', 'Tidak', '', 'Tidak ada', '', '1', '0', '0', '3505160610120002', '15', '100', '0', '0', '5'),
(21, 'GAZALA RENOA SYAQUILA', '', 'P', '3190802983', 'BLITAR', '2019-09-04', '3505164409190001', 'Islam', 'DSN UNGGAHAN', '1', '2', 'UNGGAHAN', 'TAWANGREJO', 'Kec. Binangun', '66193', 'Bersama orang tua', 'Sepeda motor', '', '', '', '', 'Tidak', '', 'BAYU FAJAR KURNIAWAN', '1996', 'SMP / sederajat', 'Karyawan Swasta', 'Rp. 2,000,000 - Rp. 4,999,999', '3505161102960001', 'PUTRI ASMARA DANTI', '1993', 'SMA / sederajat', 'Karyawan Swasta', 'Rp. 1,000,000 - Rp. 1,999,999', '3505165111930004', '', '', 'Tidak sekolah', '', '', '', 'PLAYGROUP', '', '', 'Tidak', '', '0', '', '', '', '', '', 'Tidak', '', 'Tidak ada', '', '1', '0', '0', '', '13', '85', '0', '0', '3'),
(12, 'AZZAHRA AULYA EFENDI', '2020224', 'P', '3175755748', 'JEMBER', '2017-02-11', '3505165102170001', 'Islam', 'JALAN BETEK', '4', '2', 'BETEK', 'REJOSO', 'Kec. Binangun', '66193', 'Bersama orang tua', 'Sepeda motor', '', '081553064473', '', '', 'Tidak', '', 'DWI MOHEFENDI', '1991', 'SMA / sederajat', 'Karyawan Swasta', 'Rp. 500,000 - Rp. 999,999', '3505161510910000', 'OKTAFIA KUSUMA DEWI', '1992', 'SD / sederajat', 'Lainnya', 'Tidak Berpenghasilan', '3509184110920004', '', '', 'Tidak sekolah', '', '', '', 'TK A', '', '', 'Tidak', '', '0', '', '', '', '', '', 'Tidak', '', 'Tidak ada', '', '1', '0', '0', '3505162901200003', '12', '98', '0', '0', '5'),
(15, 'CEISYA NAZHEEVA ARADYA', '2021266', 'P', '3179846701', 'BLITAR', '2017-01-14', '3505165401170001', 'Islam', 'DSN REJOSO', '3', '1', 'REJOSO', 'REJOSO', 'Kec. Binangun', '66193', 'Bersama orang tua', 'Sepeda motor', '', '081335697910', '', '', 'Tidak', '', '', '1997', 'SMA / sederajat', 'Wiraswasta', 'Rp. 2,000,000 - Rp. 4,999,999', '', 'KIKI ANINDYA PUTRI', '1998', 'SMA / sederajat', 'Tidak bekerja', 'Tidak Berpenghasilan', '', '', '', 'SMA / sederajat', 'Wiraswasta', 'Rp. 500,000 - Rp. 999,999', '', 'TK A', '', '', 'Tidak', '', '1', '', '', '', '', '', 'Tidak', '', 'Tidak ada', '', '1', '0', '0', '3505162510160002', '17', '100', '0', '0', '5'),
(23, 'HILYATUN NAFISAH', '2021245', 'P', '3162172942', 'BLITAR', '2016-12-14', '3505165412160001', 'Islam', 'DSN. SUKOMULYO', '4', '1', 'SUKOMULYO', 'SUKORAME', 'Kec. Binangun', '66193', 'Bersama orang tua', 'Sepeda motor', '', '082313295255', '', '', 'Ya', '', '', '1991', 'Tidak sekolah', 'Wiraswasta', 'Rp. 500,000 - Rp. 999,999', '', 'LAILATUL AMIN', '1993', 'SMA / sederajat', 'Karyawan Swasta', 'Rp. 500,000 - Rp. 999,999', '', '', '', 'SMA / sederajat', 'Wiraswasta', 'Rp. 1,000,000 - Rp. 1,999,999', '', 'TK A', '', '', 'Tidak', '', '1', '', '', '', '', '', 'Tidak', '', 'Tidak ada', '', '1', '0', '0', '3505163001180004', '14', '93', '0', '0', '5'),
(37, 'NADIRA ZAHRAH', '2021243', 'P', '3176284016', 'BLITAR', '2017-04-17', '3505165704170001', 'Islam', 'DSN. BETEK', '1', '2', 'BETEK', 'REJOSO', 'Kec. Binangun', '66189', 'Bersama orang tua', 'Sepeda motor', '', '085735911988', '', '', 'Tidak', '', '', '1982', 'SMA / sederajat', 'Karyawan Swasta', 'Rp. 2,000,000 - Rp. 4,999,999', '', 'DWI ANDARWATI', '1992', 'SMP / sederajat', 'Wiraswasta', 'Tidak Berpenghasilan', '', '', '', 'Tidak sekolah', '', '', '', 'PLAYGROUP', '', '', 'Tidak', '', '0', '', '', '', '', '', 'Tidak', '', 'Tidak ada', '', '2', '0', '0', '3505160305170008', '18', '102', '0', '1', '7'),
(16, 'CLAIRINE NATASYA PRASTYO', '2021237', 'P', '3171944464', 'BLITAR', '2017-01-19', '3505165901170002', 'Islam', 'DSN. BETEK', '4', '1', 'BETEK', 'REJOSO', 'Kec. Binangun', '66193', 'Bersama orang tua', 'Sepeda motor', '', '085606804414', '', '', 'Tidak', '', '', '0', 'Tidak sekolah', '', '', '', 'CHRISTINE NATASYA PRASTYO', '1998', 'SMA / sederajat', 'Tidak bekerja', 'Tidak Berpenghasilan', '', '', '', 'SMA / sederajat', 'Wiraswasta', 'Rp. 1,000,000 - Rp. 1,999,999', '', 'TK A', '', '', 'Tidak', '', '1', '', '', '', '', '', 'Tidak', '', 'Tidak ada', '', '1', '0', '0', '3505162306060769', '18', '105', '0', '0', '4'),
(28, 'KHAILA RAHMA NAVISHAPUTRI', '2020223', 'P', '3161117065', 'BLITAR', '2016-03-19', '3505165903160001', 'Islam', 'JALAN NGADRI', '5', '5', 'NGADRI', 'NGADRI', 'Kec. Binangun', '66193', 'Bersama orang tua', 'Sepeda motor', '', '081359714316', '', '', 'Tidak', '', 'SUBUR', '1979', 'SD / sederajat', 'Wiraswasta', 'Rp. 2,000,000 - Rp. 4,999,999', '3402100906790005', 'KIKI SUNARTI', '1989', 'SD / sederajat', 'Lainnya', 'Tidak Berpenghasilan', '3505164609890001', '', '', 'Tidak sekolah', '', '', '', 'TK A', '', '', 'Tidak', '', '0', '', '3505-LT-11102016-0047', '', '', '', 'Tidak', '', 'Tidak ada', '', '1', '0', '0', '3505161804160005', '15', '98', '0', '0', '1'),
(47, 'SALIMA NAZIHA SANTOSO', '2021261', 'P', '3170050704', 'BLITAR', '2017-07-19', '3505165907170001', 'Islam', 'DSN. NGADRI', '3', '1', 'NGADRI', 'NGADRI', 'Kec. Binangun', '66189', 'Bersama orang tua', 'Sepeda motor', '', '08129726928', '', '', 'Tidak', '', '', '1977', 'SMA / sederajat', 'Wiraswasta', 'Rp. 500,000 - Rp. 999,999', '', 'ISTIQOMAH', '1981', 'SMA / sederajat', 'Karyawan Swasta', 'Rp. 500,000 - Rp. 999,999', '', '', '', 'Tidak sekolah', '', '', '', 'PLAYGROUP', '', '', 'Tidak', '', '0', '', '', '', '', '', 'Tidak', '', 'Tidak ada', '', '1', '0', '0', '3505160110120001', '95', '13', '0', '1', '1'),
(44, 'RAISYA AZZAHRA NURUN NIKMAH', '2021262', 'P', '3160636139', 'BLTAR', '2016-04-20', '3505166004160001', 'Islam', 'DSN, UMBULDAMAR', '3', '1', 'UMBULDAMAR', 'UMBULDAMAR', 'Kec. Binangun', '66188', 'Bersama orang tua', 'Sepeda motor', '', '082333761504', '', '', 'Tidak', '', '', '1987', 'SMA / sederajat', 'Wiraswasta', 'Rp. 2,000,000 - Rp. 4,999,999', '', 'NOVITASARI IMROATUL KHASANAH', '1987', 'S1', 'Karyawan Swasta', 'Tidak Berpenghasilan', '', '', '', 'Tidak sekolah', '', '', '', 'TK A', '', '', 'Tidak', '', '0', '', '', '', '', '', 'Tidak', '', 'Tidak ada', '', '1', '0', '0', '3505160811100003', '15', '112', '0', '1', '3'),
(49, 'SYARIFAH ALFATHIYA', '2020219', 'P', '3154097217', 'BLITAR', '2015-07-20', '3505166007150001', 'Islam', 'JALAN BLUMBANG', '2', '3', 'BLUMBANG', 'NGEMBUL', 'Kec. Binangun', '66193', 'Bersama orang tua', 'Sepeda motor', '', '081555311727', '', '', 'Tidak', '', 'ABDUL FATAH', '1990', 'SMP / sederajat', 'Wiraswasta', 'Rp. 1,000,000 - Rp. 1,999,999', '3505160910900002', 'MADHETIAN SUGESTI', '1993', 'SMP / sederajat', 'Tidak bekerja', 'Tidak Berpenghasilan', '3505166007150001', '', '', 'Tidak sekolah', '', '', '', 'TK B', '', '', 'Tidak', '', '0', '', '3505-LT-28092018-0057', '', '', '', 'Tidak', '', 'Tidak ada', '', '1', '0', '0', '3505161801180003', '21', '102', '0', '0', '5'),
(13, 'BINTANG MUAZARA SANTOSO', '2020217', 'P', '3168128189', 'BLITAR', '2016-12-21', '3505166112160002', 'Islam', 'JALAN NGADRI', '5', '4', 'NGADRI', 'NGADRI', 'Kec. Binangun', '66193', 'Bersama orang tua', 'Sepeda motor', '', '081315977450', '', '', 'Tidak', '', 'SUSIYO BUDI SANTOSO', '0', 'SMP / sederajat', 'Karyawan Swasta', 'Rp. 1,000,000 - Rp. 1,999,999', '', 'TITIK EKA RUSTIANSYAH', '1985', 'SMP / sederajat', 'Karyawan Swasta', 'Rp. 1,000,000 - Rp. 1,999,999', '3505164703850001', '', '', 'Tidak sekolah', '', '', '', 'TK A', '', '', 'Tidak', '', '0', '', '3505-LT-03052017-0009', '', '', '', 'Tidak', '', 'Tidak ada', '', '1', '1', '0', '3505160404170002', '15', '100', '0', '0', '1'),
(2, 'ADEVA FAYOLA AFSHEN MYESHA', '2019208', 'P', '0165712561', 'BLITAR', '2016-05-23', '3505166305160001', 'Islam', 'JALAN NGADRI', '3', '3', 'NGADRI', 'NGADRI', 'Kec. Binangun', '66193', 'Bersama orang tua', 'Sepeda motor', '', '082234600410', '', '', 'Tidak', '', 'YONED DANANG ARGAWANTO', '1988', 'SMP / sederajat', 'Karyawan Swasta', 'Rp. 500,000 - Rp. 999,999', '3505162111880003', 'WINTA DEWI KURNIAWAN', '1990', 'SMA / sederajat', 'Tidak bekerja', 'Tidak Berpenghasilan', '3505165312900001', '', '', 'Tidak sekolah', '', '', '', 'TK B', '', '', 'Tidak', '', '0', '', '3505-LT-19072019-0073', '', '', '', 'Tidak', '', 'Tidak ada', '', '2', '2', '0', '3505162403100001', '15', '100', '0', '2', '1'),
(41, 'OSHINARA NAUKA ADABI', '2021257', 'P', '3194602245', 'BLITAR', '2019-01-25', '3505166501190001', 'Islam', 'DSN. SAMBIGEDE', '2', '1', 'SAMBIGEDE', 'SAMBIGEDE', 'Kec. Binangun', '66193', 'Bersama orang tua', 'Mobil pribadi', '', '085815708837', '', '', 'Tidak', '', '', '0', 'SMA / sederajat', 'Wiraswasta', 'Rp. 2,000,000 - Rp. 4,999,999', '', 'EMY RINTIANA, S.Pd', '0', 'S1', 'PNS/TNI/Polri', 'Rp. 2,000,000 - Rp. 4,999,999', '', '', '', 'Tidak sekolah', '', '', '', 'PLAYGROUP', '', '', 'Tidak', '', '0', '', '', '', '', '', 'Tidak', '', 'F - Tuna wicara', '', '2', '0', '0', '', '12', '95', '0', '2', '4'),
(40, 'OHRINARA NAUKA ADABI', '2021258', 'P', '3199001666', 'BLITAR', '2019-01-25', '3505166501190002', 'Islam', 'DSN. SAMBIGEDE', '2', '1', 'SAMBIGEDE', 'SAMBIGEDE', 'Kec. Binangun', '66193', 'Bersama orang tua', 'Sepeda motor', '', '085815708837', '', '', 'Tidak', '', '', '0', 'SMA / sederajat', 'Wiraswasta', 'Rp. 2,000,000 - Rp. 4,999,999', '', 'EMY RINTIANA S.Pd', '0', 'S1', 'PNS/TNI/Polri', 'Rp. 2,000,000 - Rp. 4,999,999', '', '', '', 'Tidak sekolah', '', '', '', 'PLAYGROUP', '', '', 'Tidak', '', '0', '', '', '', '', '', 'Tidak', '', 'F - Tuna wicara', '', '3', '0', '0', '', '12', '96', '0', '2', '4'),
(5, 'ALMAHYRA ARSYA RIANTI', '2021247', 'P', '3180039944', 'MALANG', '2018-04-25', '3505166504180001', 'Islam', 'DSN. TAMBAKREJO', '2', '1', 'TAMBAKREJO', 'NGADRI', 'Kec. Binangun', '66193', 'Bersama orang tua', 'Sepeda motor', '', '081554250232', '', '', 'Tidak', '', '', '1973', 'SD / sederajat', 'Petani', 'Rp. 1,000,000 - Rp. 1,999,999', '', 'SRI MURYATI', '1982', 'S2', 'Lainnya', 'Rp. 1,000,000 - Rp. 1,999,999', '', '', '', 'Tidak sekolah', '', '', '', 'PLAYGROUP', '', '', 'Tidak', '', '0', '', '', '', '', '', 'Tidak', '', 'Tidak ada', '', '2', '0', '0', '', '15', '85', '0', '1', '3'),
(7, 'ARSYLA FEBRINA ATHAYA', '2021251', 'P', '3181565604', 'BLITAR', '2018-02-26', '3505166602180001', 'Islam', 'SUMBERPANDAN', '1', '2', 'SUMBERPANDAN', 'NGEMBUL', 'Kec. Binangun', '66193', 'Bersama orang tua', 'Sepeda motor', '', '082139543363', '', '', 'Tidak', '', '', '1977', 'S1', 'Wiraswasta', 'Rp. 2,000,000 - Rp. 4,999,999', '', 'ANIK DWI ASTUTIK', '1986', 'S1', 'Wiraswasta', 'Kurang dari Rp. 500,000', '', '', '', 'Tidak sekolah', '', '', '', 'PLAYGROUP', '', '', 'Tidak', '', '0', '', '', '', '', '', 'Tidak', '', 'Tidak ada', '', '2', '0', '0', '3505163101170001', '13', '96', '0', '1', '4'),
(10, 'AZKAYRA HANIFA RAHMADHANI', '2021238', 'P', '3163679485', 'BLITAR', '2016-06-29', '3505166906160002', 'Islam', 'DSN. BLUMBANG', '2', '4', 'BLUMBANG', 'NGEMBUL', 'Kec. Binangun', '66190', 'Bersama orang tua', 'Sepeda motor', '', '085748544619', '', '', 'Ya', '', 'ASNAPUN', '1978', 'SMP / sederajat', 'Karyawan Swasta', 'Rp. 2,000,000 - Rp. 4,999,999', '', 'SUSI SUSANTI', '1991', 'SMP / sederajat', 'Karyawan Swasta', 'Rp. 1,000,000 - Rp. 1,999,999', '', '', '', 'Tidak sekolah', '', '', '', 'TK A', '', '', 'Tidak', '', '0', '', '', '', '', '', 'Tidak', '', 'Tidak ada', '', '2', '0', '0', '3505161908061337', '12', '100', '0', '1', '4'),
(50, 'TRISMA YUFIKA FEBRIANTI', '2021260', 'P', '', 'BLITAR', '2015-02-12', '3505167002120002', 'Islam', 'BIROWO', '4', '6', 'BIROWO', 'BIROWO', 'Kec. Binangun', '66193', 'Bersama orang tua', 'Sepeda motor', '', '085748925865', '', '', 'Tidak', '', '', '0', 'SMA / sederajat', 'Petani', 'Rp. 500,000 - Rp. 999,999', '', 'PUJI RAHAYU', '0', 'SMA / sederajat', 'Petani', 'Rp. 500,000 - Rp. 999,999', '', '', '', 'Tidak sekolah', '', '', '', 'TK A', '', '', 'Tidak', '', '0', '', '', '', '', '', 'Tidak', '', 'Tidak ada', '', '3', '0', '0', '', '15', '100', '0', '2', '5'),
(29, 'LUQMAN SULTHAN SYARIFUDDIN', '2021246', 'L', '3161714272', 'BLITAR', '2016-04-04', '3505190404160001', 'Islam', 'DSN. KESAMBEN', '1', '7', 'KESAMBEN', 'KESAMBEN', 'Kec. Kesamben', '66191', 'Bersama orang tua', 'Sepeda motor', '', '085855732641', '', '', 'Tidak', '', '', '1971', 'SMA / sederajat', 'Karyawan Swasta', 'Rp. 2,000,000 - Rp. 4,999,999', '', 'NGALIYAH', '1988', 'SMP / sederajat', 'Tidak bekerja', 'Tidak Berpenghasilan', '', '', '', 'Tidak sekolah', '', '', '', 'TK A', '', '', 'Tidak', '', '0', '', '', '', '', '', 'Tidak', '', 'Tidak ada', '', '1', '0', '0', '3505190511090001', '13', '100', '0', '1', '4'),
(30, 'MOCHAMMAD AKBAR HIBATULLOH', '2020228', 'L', '3150213733', 'BLITAR', '2015-11-17', '3505191711150001', 'Islam', 'PLAMPANGAN', '4', '1', 'PLAMPANGAN', 'JUGO', 'Kec. Kesamben', '66191', 'Bersama orang tua', 'Sepeda motor', '', '082132424275', '', '', 'Tidak', '', 'HABIBURROHMAN', '1979', 'SMP / sederajat', 'Wiraswasta', 'Rp. 1,000,000 - Rp. 1,999,999', '3505191611790003', 'INDRIANA', '1981', 'SMA / sederajat', 'Lainnya', 'Tidak Berpenghasilan', '3505195412610002', '', '', 'Tidak sekolah', '', '', '', 'TK B', '', '', 'Tidak', '', '0', '', '3505-LU-25112015-0029', '', '', '', 'Tidak', '', 'Tidak ada', '', '2', '0', '0', '3505192310080001', '15', '100', '0', '1', '5'),
(9, 'AXEL AZKA AYDIN', '2019204', 'L', '0158277001', 'BLITAR', '2015-08-18', '3505191808150003', 'Islam', 'DS. SEBENG', '2', '1', 'SEBENG', 'PAGER GUNUNG', 'Kec. Binangun', '66191', 'Bersama orang tua', 'Sepeda motor', '', '085855707701', '', '', 'Tidak', ' ', 'STEFANUS ARIFIN', '0', 'Tidak sekolah', 'Wiraswasta', 'Rp. 1,000,000 - Rp. 1,999,999', '', 'LILIK PUJIASTUTI', '1989', 'SMA / sederajat', 'Lainnya', 'Rp. 500,000 - Rp. 999,999', '3505194711890001', '', '', '(tidak diisi)', '', '', '', 'TK B', '', '', 'Tidak', '', '0', '', '', '', '', '', 'Tidak', '', 'Tidak ada', '', '1', '0', '0', '', '14', '99', '', '0', '4'),
(35, 'MUHAMMAD REZA RAMADHAN', '2021268', 'L', '3167896897', 'BLITAR', '2016-06-19', '3505191906160001', 'Islam', 'DSN. SANGGRAHAN', '1', '1', 'SANGGRAHAN', 'JUGO', 'Kec. Binangun', '66191', 'Bersama orang tua', 'Sepeda motor', '', '081217843346', '', '', 'Tidak', '', '', '1974', 'SMA / sederajat', 'Petani', 'Rp. 1,000,000 - Rp. 1,999,999', '', 'TUMILAH', '1970', 'SMA / sederajat', 'Karyawan Swasta', 'Rp. 500,000 - Rp. 999,999', '', '', '', 'Tidak sekolah', '', '', '', 'PLAYGROUP', '', '', 'Tidak', '', '0', '', '', '', '', '', 'Tidak', '', 'Tidak ada', '', '1', '0', '0', '3505190208100002', '12', '99', '0', '0', '3'),
(19, 'FAKHRIA FEBIAN RATNA AZZAHRA', '2021263', 'P', '3173765938', 'BLITAR', '2017-07-01', '3505194107170017', 'Islam', 'DSN REMBANG2', '2', '3', 'REMBANG', 'TEPAS', 'Kec. Kesamben', '66191', 'Wali', 'Sepeda motor', '', '089697650822', '', '', 'Tidak', '', '', '1991', 'SMP / sederajat', 'Wiraswasta', 'Rp. 1,000,000 - Rp. 1,999,999', '', 'FAKHRUNNISA WEGA FATMAWATI', '1996', 'SMA / sederajat', 'Wiraswasta', 'Rp. 2,000,000 - Rp. 4,999,999', '', '', '', 'SMA / sederajat', 'Tidak bekerja', '', '', 'PLAYGROUP', '', '', 'Tidak', '', '1', '', '', '', '', '', 'Tidak', '', 'Tidak ada', '', '1', '0', '0', '3505190905170001', '15', '103', '0', '0', '8'),
(26, 'KAILA ALMADINA', '2021259', 'P', '3167171234', 'BLITAR', '2016-09-01', '3505194109160002', 'Islam', 'DSN. PLAMPANGAN', '3', '3', 'PLAMPANGAN', 'JUGO', 'Kec. Kesamben', '66185', 'Bersama orang tua', 'Sepeda motor', '', '087748186588', '', '', 'Tidak', '', '', '1997', 'SMA / sederajat', 'Buruh', 'Rp. 500,000 - Rp. 999,999', '', 'LELI YANA DWI MAHARENI', '1998', 'SD / sederajat', 'Wiraswasta', 'Tidak Berpenghasilan', '', '', '', 'Tidak sekolah', '', '', '', 'TK A', '', '', 'Tidak', '', '0', '', '', '', '', '', 'Tidak', '', 'Tidak ada', '', '1', '0', '0', '3505192409200007', '17', '100', '0', '0', '5'),
(22, 'HEALTHY AZARIA BELLYSA', '2020226', 'P', '3166656342', 'BLITAR', '2016-01-23', '3505196301160001', 'Islam', 'JALAN DAWUNG', '52', '13', 'DAWUNG', 'PAGERWOJO', 'Kec. Kesamben', '66191', 'Bersama orang tua', 'Sepeda motor', '', '085230450257', '', '', 'Tidak', '', 'ANAS PRAMINTO', '1981', 'SMA / sederajat', 'Buruh', 'Rp. 500,000 - Rp. 999,999', '3505192608810001', 'ENDANG SUSILANINGSIH', '1980', 'SMA / sederajat', 'Pedagang Kecil', 'Rp. 500,000 - Rp. 999,999', '3505165201800003', '', '', 'Tidak sekolah', '', '', '', 'TK B', '', '', 'Tidak', '', '0', '', '3505-LT-20022019-0052', '', '', '', 'Tidak', '', 'Tidak ada', '', '2', '0', '0', '3505191309060972', '16', '100', '0', '1', '11'),
(1, 'ABID RAJENDRA PRANAJA', '2021239', 'L', '3165434419', 'BLITAR', '2016-08-30', '3505263008160001', 'Islam', 'DSN KEDUNGJATI', '5', '1', 'KEDUNGJATI', 'REJOSO', 'Kec. Binangun', '66193', 'Bersama orang tua', 'Sepeda motor', '', '085646757383', '', '', 'Tidak', '', '', '0', 'S1', 'Lainnya', 'Rp. 2,000,000 - Rp. 4,999,999', '', 'DIANA NITASARI', '1995', 'SMA / sederajat', 'Tidak bekerja', 'Tidak Berpenghasilan', '', '', '', 'Tidak sekolah', '', '', '', 'TK A', '', '', 'Tidak', '', '0', '', '', '', '', '', 'Tidak', '', 'Tidak ada', '', '1', '0', '0', '3505162306060247', '14', '99', '0', '0', '5'),
(34, 'MUHAMMAD RASYA ATHAYA PUTRA', '2021264', 'L', '3173916286', 'PASURUAN', '2017-03-26', '3514152603170001', 'Islam', 'DSN NGADRI', '4', '4', 'NGADRI', 'NGADRI', 'Kec. Binangun', '66193', 'Bersama orang tua', 'Sepeda motor', '', '082230803440', '', '', 'Tidak', '', '', '1983', 'SMA / sederajat', 'Karyawan Swasta', 'Rp. 2,000,000 - Rp. 4,999,999', '', 'AINUN NISA\'', '1995', 'SMP / sederajat', 'Tidak bekerja', 'Tidak Berpenghasilan', '', '', '', 'Tidak sekolah', '', '', '', 'TK A', '', '', 'Tidak', '', '0', '', '', '', '', '', 'Tidak', '', 'Tidak ada', '', '1', '0', '0', '3505163003200001', '16', '100', '0', '1', '1'),
(46, 'RAYHAN ALVIZAIN', '2021236', 'L', '3179724543', 'NGAWI', '2017-12-11', '3521121112170002', 'Islam', 'WONOKERTO', '4', '4', 'WONOKERTO', 'KARANGBANYU', 'Kec. Widodaren', '63222', 'Bersama orang tua', 'Sepeda motor', '', '081240798838', '', '', 'Tidak', '', '', '1986', 'SMA / sederajat', 'Karyawan Swasta', 'Rp. 500,000 - Rp. 999,999', '', 'ETIK KUSRINA', '1985', 'SMA / sederajat', 'Karyawan Swasta', 'Kurang dari Rp. 500,000', '', '', '', 'Tidak sekolah', '', '', '', 'PLAYGROUP', '', '', 'Tidak', '', '0', '', '', '', '', '', 'Ya', 'Siswa Miskin/Rentan Miskin', 'Tidak ada', '', '1', '0', '0', '3521122806160006', '16', '90', '0', '0', '8'),
(45, 'RASYIDAN ATLANTIC KHARISMA', '2021252', 'L', '3175651131', 'BLITAR', '2017-03-11', '3578211103170001', 'Islam', 'DSN. KEDAWUNG', '4', '2', 'KEDAWUNG', 'UMBULDAMAR', 'Kec. Binangun', '66190', 'Wali', 'Sepeda motor', '', '081217125051', '', '', 'Tidak', '', '', '0', 'SMA / sederajat', 'Wiraswasta', 'Rp. 1,000,000 - Rp. 1,999,999', '', 'DEVITA INDAH SETIAJI', '0', 'SMA / sederajat', 'Tidak bekerja', 'Tidak Berpenghasilan', '', '', '', 'SMA / sederajat', 'Wiraswasta', 'Rp. 1,000,000 - Rp. 1,999,999', '', 'PLAYGROUP', '', '', 'Tidak', '', '1', '', '', '', '', '', 'Tidak', '', 'Tidak ada', '', '2', '0', '0', '', '15', '100', '0', '1', '3'),
(11, 'AZQIARA ADREENA MAULIDYA PUTRI', '2021255', 'P', '3161054844', 'BLITAR', '2016-12-04', '5202124412160001', 'Islam', 'DSN. JUGO', '3', '1', 'JUGO', 'JUGO', 'Kec. Kesamben', '66191', 'Bersama orang tua', 'Sepeda motor', '', '081233711052', '', '', 'Tidak', '', '', '1983', 'SMA / sederajat', 'Wiraswasta', 'Rp. 5,000,000 - Rp. 20,000,000', '', 'RINI FITRIA HANDAYANI', '1986', 'SMA / sederajat', 'Tidak bekerja', 'Tidak Berpenghasilan', '', '', '', 'SMA / sederajat', 'Wiraswasta', 'Rp. 1,000,000 - Rp. 1,999,999', '', 'TK A', '', '', 'Tidak', '', '1', '', '', '', '', '', 'Tidak', '', 'Tidak ada', '', '1', '0', '0', '', '16', '105', '0', '0', '1');

-- --------------------------------------------------------

--
-- Table structure for table `tendik`
--

CREATE TABLE `tendik` (
  `no` int(20) NOT NULL,
  `nama_tendik` varchar(255) NOT NULL,
  `nuptk` varchar(50) DEFAULT NULL,
  `jk` enum('L','P','Laki-Laki','Perempuan') DEFAULT NULL,
  `tmpt_lhr` varchar(50) DEFAULT NULL,
  `tgl_lhr` date DEFAULT NULL,
  `nip` varchar(20) DEFAULT NULL,
  `status_kep` varchar(100) DEFAULT NULL,
  `jenis_ptk` varchar(100) DEFAULT NULL,
  `agama` varchar(100) DEFAULT NULL,
  `almt_jln` varchar(255) DEFAULT NULL,
  `rt` int(10) DEFAULT NULL,
  `rw` int(10) DEFAULT NULL,
  `nm_dusun` varchar(100) DEFAULT NULL,
  `desa_kelurahan` varchar(255) DEFAULT NULL,
  `kecamatan` varchar(255) DEFAULT NULL,
  `kd_pos` varchar(100) DEFAULT NULL,
  `telp` varchar(100) DEFAULT NULL,
  `hp` varchar(100) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `tgs_tambahan` varchar(100) DEFAULT NULL,
  `sk_cpns` varchar(100) DEFAULT NULL,
  `sk_pengangkatan` varchar(100) DEFAULT NULL,
  `tmt_pengangkatan` date DEFAULT NULL,
  `lmbg_pengangkatan` varchar(100) DEFAULT NULL,
  `pangkat_gol` varchar(100) DEFAULT NULL,
  `sumber_gaji` varchar(100) DEFAULT NULL,
  `nm_ibu` varchar(255) DEFAULT NULL,
  `status_perkawinan` varchar(100) DEFAULT NULL,
  `nm_suami_istri` varchar(255) DEFAULT NULL,
  `nip_suami_istri` varchar(100) DEFAULT NULL,
  `pekerjaan_suami_istri` varchar(100) DEFAULT NULL,
  `tmt_pns` date DEFAULT NULL,
  `lisensi` enum('iya','tidak') DEFAULT NULL,
  `dikat_kep` enum('iya','tidak') DEFAULT NULL,
  `keahlian_braille` enum('iya','tidak') DEFAULT NULL,
  `keahlian_bhs_isyarat` enum('iya','tidak') DEFAULT NULL,
  `npwp` varchar(100) DEFAULT NULL,
  `nm_wjb_pajak` varchar(255) DEFAULT NULL,
  `kewarganegaraan` varchar(100) DEFAULT NULL,
  `bank` varchar(100) DEFAULT NULL,
  `nmr_rek_bank` varchar(100) DEFAULT NULL,
  `rek_nama` varchar(255) DEFAULT NULL,
  `nik_tendik` varchar(100) NOT NULL,
  `no_kk` varchar(100) DEFAULT NULL,
  `karpeg` varchar(100) DEFAULT NULL,
  `karis_karsu` varchar(100) DEFAULT NULL,
  `lintang` varchar(100) DEFAULT NULL,
  `bujur` varchar(100) DEFAULT NULL,
  `nuks` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COMMENT='guru';

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
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `guru`
--
ALTER TABLE `guru`
  ADD PRIMARY KEY (`nik_gr`);

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
-- Indexes for table `peserta_didik`
--
ALTER TABLE `peserta_didik`
  ADD PRIMARY KEY (`nik_pd`);

--
-- Indexes for table `tendik`
--
ALTER TABLE `tendik`
  ADD PRIMARY KEY (`nik_tendik`);

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
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

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

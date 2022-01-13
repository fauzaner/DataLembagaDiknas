-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 11, 2022 at 05:36 AM
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
  `nama` varchar(255) NOT NULL,
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
  `nik` varchar(100) NOT NULL,
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
(13, '2022_01_07_055800_create_peserta_didiks_table', 1),
(118, '2014_10_12_000000_create_users_table', 2),
(119, '2014_10_12_100000_create_password_resets_table', 2),
(120, '2019_08_19_000000_create_failed_jobs_table', 2),
(121, '2019_12_14_000001_create_personal_access_tokens_table', 2),
(122, '2022_01_07_055800_create_peserta_didik_table', 2);

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
  `nama_pd` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `nipd` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `jenis_kelamin` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `nisn` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tmp_lhr` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tgl_lhr` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `nik_pd` varchar(40) COLLATE utf8mb4_unicode_ci NOT NULL,
  `agama` varchar(30) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `alamat` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `rt` varchar(10) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `rw` varchar(10) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `dusun` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `kelurahan` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `kecamatan` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `kode_pos` varchar(10) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `jenis_tinggal` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `transportasi` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `no_telp` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `no_hp` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `skhun` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `penerima_kps` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `no_kps` varchar(30) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `nama_ayah` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `thn_lhr_ayah` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `pend_ayah` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `pekerjaan_ayah` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `penghasilan_ayah` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `nik_ayah` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `nama_ibu` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `thn_lhr_ibu` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `pend_ibu` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `pekerjaan_ibu` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `penghasilan_ibu` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `nik_ibu` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `nama_wali` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `thn_lhr_wali` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `pend_wali` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `pekerjaan_wali` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `penghasilan_wali` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `nik_wali` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tingkat_rombel` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `no_peserta_un` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `no_seri_ijazah` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `penerima_kip` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `nomor_kip` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `nama_kip` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `no_kks` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `no_regis_akta` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `bank` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `no_rek_bank` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `rekening_atas_nama` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `layak_pip` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `alasan_pip` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `keb_khusus` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sekolah_asal` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `anak_ke` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `lintang` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `bujur` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `no_kk` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `berat_badan` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tinggi_badan` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `lingkar_kepala` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `jml_saudara` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `jarak_ke_sekolah` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `peserta_didik`
--

INSERT INTO `peserta_didik` (`nama_pd`, `nipd`, `jenis_kelamin`, `nisn`, `tmp_lhr`, `tgl_lhr`, `nik_pd`, `agama`, `alamat`, `rt`, `rw`, `dusun`, `kelurahan`, `kecamatan`, `kode_pos`, `jenis_tinggal`, `transportasi`, `no_telp`, `no_hp`, `email`, `skhun`, `penerima_kps`, `no_kps`, `nama_ayah`, `thn_lhr_ayah`, `pend_ayah`, `pekerjaan_ayah`, `penghasilan_ayah`, `nik_ayah`, `nama_ibu`, `thn_lhr_ibu`, `pend_ibu`, `pekerjaan_ibu`, `penghasilan_ibu`, `nik_ibu`, `nama_wali`, `thn_lhr_wali`, `pend_wali`, `pekerjaan_wali`, `penghasilan_wali`, `nik_wali`, `tingkat_rombel`, `no_peserta_un`, `no_seri_ijazah`, `penerima_kip`, `nomor_kip`, `nama_kip`, `no_kks`, `no_regis_akta`, `bank`, `no_rek_bank`, `rekening_atas_nama`, `layak_pip`, `alasan_pip`, `keb_khusus`, `sekolah_asal`, `anak_ke`, `lintang`, `bujur`, `no_kk`, `berat_badan`, `tinggi_badan`, `lingkar_kepala`, `jml_saudara`, `jarak_ke_sekolah`) VALUES
('KRISTIAN FIRMAN SAMUDRA', NULL, 'L', '3193849677', 'BLITAR', '2019-06-07', '1', 'Islam', 'DSN BAOS', '1', '2', 'BAOS', 'BUTUN', 'Kec. Gandusari', '66187', 'Bersama orang tua', 'Sepeda motor', NULL, '085257508869', NULL, NULL, 'Tidak', NULL, NULL, '0', 'Tidak sekolah', NULL, NULL, NULL, 'TRI WULANDARI', '1999', 'SMA / sederajat', 'Karyawan Swasta', 'Rp. 500,000 - Rp. 999,999', NULL, NULL, NULL, 'Tidak sekolah', NULL, NULL, NULL, 'PELANGI', NULL, NULL, 'Tidak', NULL, '0', NULL, NULL, NULL, NULL, NULL, 'Tidak', NULL, 'Tidak ada', NULL, '1', '0', '0', NULL, '10', '90', '45', '1', '1'),
('ZHAFIR RIDHO AL-FATIH', NULL, 'L', NULL, 'BLITAR', '2018-04-18', '11', 'Islam', 'DSN BAOS', '2', '1', 'BAOS', 'BUTUN', 'Kec. Gandusari', '66187', 'Bersama orang tua', 'Sepeda motor', NULL, '085749919132', NULL, NULL, 'Tidak', NULL, NULL, '0', 'Tidak sekolah', NULL, NULL, NULL, 'YAYUK INDRA NISWARI', '1991', 'SMP / sederajat', 'Tidak bekerja', 'Tidak Berpenghasilan', '3505154609910003', NULL, NULL, 'Tidak sekolah', NULL, NULL, NULL, 'PELANGI', NULL, NULL, 'Tidak', NULL, '0', NULL, NULL, NULL, NULL, NULL, 'Tidak', NULL, 'Tidak ada', NULL, '1', '0', '0', NULL, '45', '98', '0', '1', '1'),
('MUHAMMAD AFNAN NUR AKMAL', NULL, 'L', '3187334827', 'BLITAR', '2018-11-01', '3505150111180002', 'Islam', 'DSN BAOS', '1', '2', 'BAOS', 'BUTUN', 'Kec. Gandusari', '66187', 'Bersama orang tua', 'Sepeda motor', NULL, '085334958171', NULL, NULL, 'Tidak', NULL, NULL, '1993', 'SMP / sederajat', 'Petani', 'Rp. 1,000,000 - Rp. 1,999,999', NULL, 'DESI RATNASARI', '1996', 'Tidak sekolah', 'Tidak bekerja', 'Tidak Berpenghasilan', NULL, NULL, NULL, 'Tidak sekolah', NULL, NULL, NULL, 'PELANGI', NULL, NULL, 'Tidak', NULL, '0', NULL, NULL, NULL, NULL, NULL, 'Tidak', NULL, 'Tidak ada', NULL, '1', '0', '0', '3505151610180006', '12', '92', '47', '1', '1'),
('AZZAM DAMAR RAMADHAN', NULL, 'L', '3178723580', 'BLITAR', '2017-06-15', '3505151506170001', 'Islam', 'DSN BALONG', '2', '2', 'BALONG', 'BUTUN', 'Kec. Gandusari', '66187', 'Bersama orang tua', 'Sepeda motor', NULL, NULL, NULL, NULL, 'Tidak', NULL, NULL, '1987', 'SMA / sederajat', 'Karyawan Swasta', 'Rp. 1,000,000 - Rp. 1,999,999', NULL, 'FITRI NOVITA SARI', '1994', 'SMA / sederajat', 'Tidak bekerja', 'Tidak Berpenghasilan', NULL, NULL, NULL, 'Tidak sekolah', NULL, NULL, NULL, 'PELANGI', NULL, NULL, 'Tidak', NULL, '0', NULL, '3505-LT-09032020-0065', NULL, NULL, NULL, 'Tidak', NULL, 'Tidak ada', NULL, '1', NULL, NULL, '3505152003140003', NULL, NULL, NULL, NULL, NULL),
('KEVINO MEKKA ADIWANGSA', NULL, 'L', '3183937376', 'BLITAR', '2018-08-26', '3505152608180002', 'Islam', 'Jln Dsn Baos', '3', '2', 'BAOS', 'BUTUN', 'Kec. Gandusari', '66187', 'Bersama orang tua', 'Sepeda motor', NULL, '081217208893', NULL, NULL, 'Tidak', NULL, NULL, '1985', 'SMP / sederajat', 'Karyawan Swasta', 'Rp. 1,000,000 - Rp. 1,999,999', NULL, 'KHARISMA YOGI NOVIA', '1998', 'SMP / sederajat', 'Tidak bekerja', 'Tidak Berpenghasilan', NULL, NULL, NULL, 'Tidak sekolah', NULL, NULL, NULL, 'PELANGI', NULL, NULL, 'Tidak', NULL, '0', NULL, '3505-LT-02012020-0002', NULL, NULL, NULL, 'Tidak', NULL, 'Tidak ada', NULL, '1', '0', '0', '3505150711180002', '13', '95', '47', '1', '1'),
('MUHAMMAD VINZHA AGAM AL WAFI', NULL, 'L', '3174244382', 'BLITAR', '2017-08-28', '3505152808170001', 'Islam', 'DSN BALONG', '2', '1', 'BALONG', 'BUTUN', 'Kec. Gandusari', NULL, 'Bersama orang tua', 'Sepeda motor', NULL, NULL, NULL, NULL, 'Tidak', NULL, NULL, '1993', 'SMP / sederajat', 'Wiraswasta', 'Rp. 1,000,000 - Rp. 1,999,999', NULL, 'SUSI LAWATI', '1994', 'TK / sederajat', 'Nelayan', 'Tidak Berpenghasilan', NULL, NULL, NULL, 'Tidak sekolah', 'Tidak bekerja', NULL, NULL, 'PELANGI', NULL, NULL, 'Tidak', NULL, '0', NULL, NULL, NULL, NULL, NULL, 'Tidak', NULL, 'Tidak ada', NULL, '2', NULL, NULL, '3505152602180002', NULL, NULL, NULL, NULL, NULL),
('HASLINATUL ADZLIN', NULL, 'P', '3184723151', 'BLITAR', '2018-03-06', '3505154603180002', 'Islam', 'DSN BAOS', '2', '1', 'BAOS', 'BUTUN', 'Kec. Gandusari', '66187', 'Bersama orang tua', 'Sepeda motor', NULL, '085655517179', NULL, NULL, 'Tidak', NULL, NULL, '0', 'Tidak sekolah', NULL, NULL, NULL, 'ZULITA NINGTYAS', '1986', 'SMA / sederajat', 'Tidak bekerja', 'Tidak Berpenghasilan', NULL, NULL, NULL, 'Tidak sekolah', NULL, NULL, NULL, 'PELANGI', NULL, NULL, 'Tidak', NULL, '0', NULL, NULL, NULL, NULL, NULL, 'Tidak', NULL, 'Tidak ada', NULL, '2', '0', '0', '3505150504180004', '11', '95', '44', '2', '1'),
('AVIKA GEBY NINA RAHMAN', NULL, 'P', '3174250974', 'BLITAR', '2017-03-09', '3505154903170001', 'Islam', 'DSN BAOS', '2', '1', 'BAOS', 'BUTUN', 'Kec. Gandusari', '66187', 'Bersama orang tua', 'Sepeda motor', NULL, NULL, NULL, NULL, 'Tidak', NULL, NULL, '1985', 'SMA / sederajat', 'Karyawan Swasta', 'Rp. 1,000,000 - Rp. 1,999,999', NULL, 'MEI RINA WAHYUNI', '1987', 'SMA / sederajat', 'Karyawan Swasta', 'Rp. 500,000 - Rp. 999,999', NULL, NULL, NULL, 'Tidak sekolah', 'Tidak bekerja', NULL, NULL, 'PELANGI', NULL, NULL, 'Tidak', NULL, '0', NULL, NULL, NULL, NULL, NULL, 'Tidak', NULL, 'Tidak ada', NULL, '2', NULL, NULL, '3505151710110002', NULL, NULL, NULL, NULL, NULL),
('ALECIA ALFINA GANES', NULL, 'P', '3176842908', 'BLITAR', '2017-09-10', '3505155009170001', 'Islam', 'DSN BAOS', '4', '1', 'BAOS', 'BUTUN', 'Kec. Gandusari', '66187', 'Bersama orang tua', 'Sepeda motor', NULL, NULL, NULL, NULL, 'Tidak', NULL, NULL, '1996', 'SMP / sederajat', 'Lainnya', 'Rp. 1,000,000 - Rp. 1,999,999', NULL, 'DESI NOFITASARI', '1994', 'Tidak sekolah', 'Tidak bekerja', 'Tidak Berpenghasilan', NULL, NULL, '1996', 'SMP / sederajat', 'Lainnya', 'Rp. 1,000,000 - Rp. 1,999,999', NULL, 'PELANGI', NULL, NULL, 'Tidak', NULL, '0', NULL, NULL, NULL, NULL, NULL, 'Tidak', NULL, 'Tidak ada', NULL, '1', NULL, NULL, '3505151207170003', '11', '89', '48', '1', '1'),
('AFRATUL WAIZHAH', NULL, 'P', '3180221911', 'BLITAR', '2018-02-12', '3505155202180001', 'Islam', 'DSN BAOS', '3', '1', 'BAOS', 'BUTUN', 'Kec. Gandusari', '66187', 'Bersama orang tua', 'Sepeda motor', NULL, '083830632775', NULL, NULL, 'Tidak', NULL, NULL, '1973', 'SMP / sederajat', 'Petani', 'Rp. 1,000,000 - Rp. 1,999,999', NULL, 'NGAMILATUS SHOLIANA', '1988', 'SMP / sederajat', 'Tidak bekerja', 'Tidak Berpenghasilan', NULL, NULL, NULL, 'Tidak sekolah', NULL, NULL, NULL, 'PELANGI', NULL, NULL, 'Tidak', NULL, '0', NULL, NULL, NULL, NULL, NULL, 'Tidak', NULL, 'Tidak ada', NULL, '2', '0', '0', '3505151906061879', '12', '95', '45', '2', '1'),
('AMARA KEYLA PUTRI', NULL, 'P', NULL, 'BLITAR', '2018-08-14', '3505155408180001', 'Islam', 'DSN BAOS', '1', '1', 'BAOS', 'BUTUN', 'Kec. Gandusari', '66187', 'Bersama orang tua', 'Sepeda motor', NULL, NULL, NULL, NULL, 'Tidak', NULL, 'AGUS PRIYONO', '1982', 'SMP / sederajat', 'Karyawan Swasta', 'Rp. 1,000,000 - Rp. 1,999,999', '3505151908820001', 'SUSI HARIATI', '1983', 'SMP / sederajat', 'Tidak bekerja', 'Tidak Berpenghasilan', '3505154506830003', NULL, NULL, 'Tidak sekolah', NULL, NULL, NULL, 'PELANGI', NULL, NULL, 'Tidak', NULL, '0', NULL, NULL, NULL, NULL, NULL, 'Tidak', NULL, 'Tidak ada', NULL, '2', '0', '0', '3505152504120001', '12', '90', '45', '2', '1'),
('CALYA PURI NAVISHA WINDARKO', NULL, 'P', '3178278596', 'BLITAR', '2017-11-10', '357825011170002 ', 'Islam', 'DSN DONOWATI', '5', '1', 'DONOWATI', 'SUKOMANUNGGAL', 'Kec. Sukomanunggal', '60188', 'Bersama orang tua', 'Sepeda motor', NULL, NULL, NULL, NULL, 'Tidak', NULL, NULL, '1978', 'SMA / sederajat', 'Karyawan Swasta', 'Rp. 1,000,000 - Rp. 1,999,999', NULL, 'LINDA WIYANTI', '1983', 'SMA / sederajat', 'Karyawan Swasta', 'Rp. 500,000 - Rp. 999,999', NULL, NULL, NULL, 'Tidak sekolah', 'Tidak bekerja', NULL, NULL, 'PELANGI', NULL, NULL, 'Tidak', NULL, '0', NULL, '3578-LU-19122017-0179', NULL, NULL, NULL, 'Tidak', NULL, 'Tidak ada', NULL, '1', NULL, NULL, '3578270101085112', NULL, NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `tendik`
--

CREATE TABLE `tendik` (
  `no` int(20) NOT NULL,
  `nama` varchar(255) NOT NULL,
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
  `nik` varchar(100) NOT NULL,
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
  ADD PRIMARY KEY (`nik`);

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
  ADD PRIMARY KEY (`nik`);

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
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=123;

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

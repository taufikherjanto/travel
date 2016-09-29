-- phpMyAdmin SQL Dump
-- version 4.5.2
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Sep 29, 2016 at 10:20 
-- Server version: 10.1.16-MariaDB
-- PHP Version: 7.0.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `travel`
--

-- --------------------------------------------------------

--
-- Table structure for table `anak`
--

CREATE TABLE `anak` (
  `id` int(11) NOT NULL,
  `user_id` varchar(255) NOT NULL DEFAULT '',
  `id_event` int(11) NOT NULL DEFAULT '0',
  `nama` varchar(255) DEFAULT NULL,
  `title_slug` varchar(255) NOT NULL,
  `umur` varchar(255) NOT NULL DEFAULT '',
  `sekolah` varchar(255) NOT NULL DEFAULT '',
  `kelas` varchar(255) NOT NULL DEFAULT '',
  `alamat` varchar(255) NOT NULL DEFAULT '',
  `tgl_lahir` date NOT NULL DEFAULT '0000-00-00',
  `goal` varchar(255) NOT NULL DEFAULT '',
  `description` text,
  `price` varchar(255) DEFAULT NULL,
  `qty` varchar(255) DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL,
  `tanggal_post` varchar(255) DEFAULT NULL,
  `status` int(11) NOT NULL DEFAULT '0',
  `username` varchar(255) NOT NULL DEFAULT '',
  `password` varchar(255) NOT NULL DEFAULT '',
  `role` int(11) NOT NULL DEFAULT '0',
  `view` int(11) NOT NULL,
  `time` varchar(255) NOT NULL DEFAULT '',
  `continue` int(11) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `anak`
--

INSERT INTO `anak` (`id`, `user_id`, `id_event`, `nama`, `title_slug`, `umur`, `sekolah`, `kelas`, `alamat`, `tgl_lahir`, `goal`, `description`, `price`, `qty`, `image`, `tanggal_post`, `status`, `username`, `password`, `role`, `view`, `time`, `continue`) VALUES
(15, 'arya', 1, 'Salwa Kirani', 'salwa-kirani', '9', 'Mi Al Anwariyah', '2', 'Kp pasir Angin rt 01/04, Bogor', '2007-09-21', 'Menjadi guru', 'Kebutuhan biaya perbulan untuk ongkos sekolah	: Rp. 500.000 .\r\nKebutuhan untuk perlengkapan sekolah awal tahun Ajaran : \r\nSepatu baru : 150.000\r\nTaS  : 50.000\r\nBuku tulis dan atk : 250.000\r\nBuku LKS  : 250.000\r\n          Total kebutuhan ajaran baru :    \r\n           745.000\r\n\r\n', '1195000', '1', '1.jpg', '2016-06-08', 0, 'salwa', 'salwa123', 3, 3, '', 0),
(16, 'arya', 1, 'Rafi Hifayar', 'rafi-hifayar', '11', 'MI Al Anwariyah', '5', 'Kp pasir Angin rt 01/04, Bogor', '2005-03-02', 'Menjadi guru', 'Kebutuhan biaya perbulan untuk ongkos sekolah	: Rp. 500.000 .\r\nKebutuhan untuk perlengkapan sekolah awal tahun Ajaran : \r\nSepatu baru : 150.000\r\nTaS  : 50.000\r\nBuku tulis dan atk : 250.000\r\nBuku LKS  : 250.000\r\n          Total kebutuhan ajaran baru :    \r\n           745.000\r\n\r\n', '1245000', '1', '2.jpg', '2016-06-08', 0, 'rafi', 'b2f0d9e408eccecc0edb74d654d36a72', 3, 16, '2016-08-04 18:23:31', 0),
(17, 'arya', 1, 'M.Fauzy Ridwan', 'm.fauzy-ridwan', '10', 'Mi Al Anwariyah', '2', 'Kp pasir Angin rt 03/04, Bogor', '2006-06-11', 'Ingin menjadi Kiyai', 'Kebutuhan biaya perbulan untuk ongkos sekolah	: Rp. 500.000 Kebutuhan untuk perlengkapan sekolah awal tahun Ajaran : Sepatu baru : 150.000 TaS : 50.000 Buku tulis dan atk : 250.000 Buku LKS : 240.000 Total kebutuhan ajaran baru : 745.000', '1195000', '1', '3.jpg', '2016-06-08', 1, 'fauzy', 'fauzy123', 3, 3, '2016-08-05 02:51:18', 1),
(18, 'arya', 2, 'Sallahudin hafidz', 'sallahudin-hafidz', '14', 'Mi Al Anwariyah', '5', 'Kp pasir Angin rt 03/03, Bogor', '2002-08-18', 'Atlet nasional', 'allhamdulilah', '900000000', '1', '4.jpg', '2016-06-08', 0, 'sallahudin', 'sallahudin123', 3, 4, '2016:08:05 15:41:40', 1),
(19, 'arya', 1, 'Reski agni novelia', 'reski-agni-novelia', '8', 'Mi Al Anwariyah', '2', 'Kp pasir Angin rt 03/04, Bogor', '2008-04-11', 'Menjadi dokter', 'Kebutuhan biaya perbulan untuk ongkos sekolah	: Rp. 500.000 \r\nKebutuhan untuk perlengkapan sekolah awal tahun Ajaran : \r\nSepatu baru : 150.000\r\nTaS  : 50.000\r\nBuku tulis dan atk : 250.000\r\nBuku LKS  : 240.000\r\n          Total kebutuhan ajaran baru :    \r\n           745.000\r\n', '1195000', '1', '5.jpg', '2016-06-08', 0, 'reski', 'reski123', 3, 14, '2016:08:04 23:30:26', 0),
(20, 'arya', 1, 'Siti Nurandini', 'siti-nurandini', '7', 'Mi Al Anwariyah', '1', 'Kp pasir Angin rt 04/03, Bogor', '2009-12-21', 'Menjadi dokter', 'Kebutuhan biaya perbulan untuk ongkos sekolah	: Rp. 500.000 \r\nKebutuhan untuk perlengkapan sekolah awal tahun Ajaran : \r\nSepatu baru : 150.000\r\nTaS  : 50.000\r\nBuku tulis dan atk : 250.000\r\nBuku LKS  : 240.000\r\n          Total kebutuhan ajaran baru :    \r\n           745.000\r\n', '300000', '1', '6.jpg', '2016-06-08', 5, 'siti', '5c2e4a2563f9f4427955422fe1402762', 3, 7, '2016:08:16 17:40:19', 1),
(21, 'arya', 2, 'Maya Karlina', 'maya-karlina', '10', 'MI Al Anwariyah', '3', 'Kp pasir Angin rt 04/03, Bogor', '2006-08-13', 'Menjadi guru', 'Kebutuhan biaya perbulan untuk ongkos sekolah	: Rp. 500.000 \r\nKebutuhan untuk perlengkapan sekolah awal tahun Ajaran : \r\nSepatu baru : 150.000\r\nTaS  : 50.000\r\nBuku tulis dan atk : 250.000\r\nBuku LKS  : 240.000\r\n          Total kebutuhan ajaran baru :    \r\n           745.000\r\n', '1195000', '1', '7.jpg', '2016-06-08', 1, 'maya', 'f4a637ba636f4a3b258273c5605d4266', 3, 6, '2016-08-25 12:56:42', 0),
(22, 'arya', 2, 'Ayu Lestari', 'ayu-lestari', '11', 'MI Al Anwariyah', '4', 'Kp pasir Angin rt 04/03, Bogor', '2005-08-18', 'Menjadi dokter', 'Kebutuhan biaya perbulan untuk ongkos sekolah	: Rp. 500.000 \r\nKebutuhan untuk perlengkapan sekolah awal tahun Ajaran : \r\nSepatu baru : 150.000\r\nTaS  : 50.000\r\nBuku tulis dan atk : 250.000\r\nBuku LKS  : 240.000\r\n          Total kebutuhan ajaran baru :    \r\n           745.000\r\n', '1245000', '1', '8.jpg', '2016-06-08', 0, 'ayulestari', 'ayulestari123', 3, 6, '2016:08:04 18:16:47', 0),
(23, 'arya', 1, 'Awaluddin Ichwarniasnyah', 'awaluddin', '13', 'SMP AL Hidayah', '1', 'Kp pasir Angin rt 03/03, Bogor', '2003-09-01', 'Menjadi Tentara, untuk mempertahankan NKRI serta melindungi masyarakat Indonesia', 'Kebutuhan biaya perbulan untuk ongkos sekolah	: Rp. 700.000\r\nKebutuhan untuk perlengkapan sekolah awal tahun Ajaran : \r\nSepatu baru : 150.000\r\nTaS  : 50.000\r\nBuku tulis dan atk : 250.000\r\nBuku LKS  : 250.000\r\n          Total kebutuhan ajaran baru :    \r\n           745.000\r\n', '1445000', '1', '9.jpg', '2016-06-08', 1, 'awaluddin', 'awaluddin123', 3, 45, '2016-08-16 16:11:01', 0),
(24, 'arya', 1, 'Fiqry Bayu Erlangga', 'fiqry-bayu-erlangga', '12', 'MI Al Anwariyah', '4', 'Kp pasir Angin rt 01/04, Bogor', '2005-05-23', 'Jadi ustadh', 'Kebutuhan biaya perbulan untuk ongkos sekolah	: Rp. 500.000 \r\nKebutuhan untuk perlengkapan sekolah awal tahun Ajaran : \r\nSepatu baru : 150.000\r\nTaS  : 50.000\r\nBuku tulis dan atk : 250.000\r\nBuku LKS  : 250.000\r\n          Total kebutuhan ajaran baru :    \r\n           745.000\r\n', '1245000', '1', '10.jpg', '2016-06-08', 0, 'fiqry', 'fiqry123', 3, 14, '2016:08:04 19:12:44', 0);

-- --------------------------------------------------------

--
-- Table structure for table `article`
--

CREATE TABLE `article` (
  `id` int(11) NOT NULL,
  `judul` varchar(255) NOT NULL DEFAULT '',
  `title_slug` varchar(255) NOT NULL DEFAULT '',
  `gambar` varchar(255) NOT NULL DEFAULT '',
  `deskripsi` varchar(255) NOT NULL DEFAULT '',
  `keterangan_panjang` text NOT NULL,
  `tanggal` date NOT NULL DEFAULT '0000-00-00',
  `video` varchar(255) DEFAULT '',
  `view` int(11) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1 ROW_FORMAT=COMPACT;

--
-- Dumping data for table `article`
--

INSERT INTO `article` (`id`, `judul`, `title_slug`, `gambar`, `deskripsi`, `keterangan_panjang`, `tanggal`, `video`, `view`) VALUES
(16, 'io', 'io', '_S__21103217.jpg', 'At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident, similique sunt in culpa qui officia deserunt molliti', 'kkkkkLorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry''s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.', '2016-07-28', 'umRRCkspaQU', 7),
(17, 'kjhjkhjk hjkh jk hkj', 'kjhjkhjk-hjkh-jk-hkj', 'WhatsApp-Image-20160624 (1).jpeg', 'At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident, similique sunt in culpa qui officia deserunt molliti', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry''s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.', '2016-07-30', 'umRRCkspaQU', 33);

-- --------------------------------------------------------

--
-- Table structure for table `artikel_gallery`
--

CREATE TABLE `artikel_gallery` (
  `id` int(11) NOT NULL,
  `gambar` varchar(255) NOT NULL DEFAULT '',
  `gambar_id` int(11) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `business`
--

CREATE TABLE `business` (
  `id` int(11) NOT NULL,
  `id_kategori` int(11) DEFAULT NULL,
  `judul` varchar(255) NOT NULL DEFAULT '',
  `title_slug` varchar(255) NOT NULL DEFAULT '',
  `desc` text NOT NULL,
  `id_pendamping` int(11) NOT NULL,
  `jumlah_hari` varchar(255) NOT NULL DEFAULT '',
  `id_penerbangan` int(11) NOT NULL,
  `tanggal` date NOT NULL DEFAULT '0000-00-00',
  `harga` varchar(255) NOT NULL DEFAULT '',
  `quota` int(11) NOT NULL DEFAULT '0',
  `quota_active` int(11) NOT NULL,
  `gambar` varchar(255) NOT NULL DEFAULT '',
  `tanggal_post` varchar(255) NOT NULL DEFAULT '',
  `status_publish` int(11) NOT NULL DEFAULT '0',
  `viewer` varchar(255) NOT NULL DEFAULT ''
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `business`
--

INSERT INTO `business` (`id`, `id_kategori`, `judul`, `title_slug`, `desc`, `id_pendamping`, `jumlah_hari`, `id_penerbangan`, `tanggal`, `harga`, `quota`, `quota_active`, `gambar`, `tanggal_post`, `status_publish`, `viewer`) VALUES
(1, 3, 'Perjalanan Bisnis 1', 'perjalanan-bisnis-1', 'Deskripsi Perjalanan Bisnis 1', 5, '5', 1, '2016-10-01', '30000', 25, 0, 'business.jpg', '2016-09-30', 1, '2'),
(2, 3, 'Perjalanan Bisnis 2', 'perjalanan-bisnis-2', 'Deskripsi Perjalanan Bisnis 2', 5, '4', 4, '2016-09-30', '3000000', 10, 0, 'business2.jpg', '2016-10-01', 1, '1'),
(5, 3, 'Perjalanan Bisnis 3', '', 'Deskripsi Perjalanan Bisnis 3', 6, '3', 3, '2016-09-22', '2000000', 4, 0, 'business3.jpg', '2016-09-29', 1, '0'),
(6, 3, 'Perjalanan Business 4', 'perjalanan-business-4', 'Deskripsi Perjalanan Bisnis 4', 6, '2', 1, '0000-00-00', '2000000', 5, 5, 'business4.jpg', '2016-09-29', 1, '0'),
(7, 3, 'Perjalanan Bisnis 5', 'perjalanan-bisnis-5', 'Deskripsi Perjalanan Bisnis 5', 6, '2', 4, '2016-10-10', '400000', 6, 6, 'jalan-bisnis.jpg', '2016-09-30', 1, '0');

-- --------------------------------------------------------

--
-- Table structure for table `business_gallery`
--

CREATE TABLE `business_gallery` (
  `id` int(11) NOT NULL,
  `gambar` varchar(255) DEFAULT NULL,
  `gambar_id` int(11) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `business_gallery`
--

INSERT INTO `business_gallery` (`id`, `gambar`, `gambar_id`) VALUES
(3, 'businessmobil.jpg', 5),
(6, 'business4b.jpg', 6),
(7, 'jalan-bisnis-gallery.jpg', 7);

-- --------------------------------------------------------

--
-- Table structure for table `dauroh`
--

CREATE TABLE `dauroh` (
  `id` int(11) NOT NULL,
  `id_kategori` int(11) NOT NULL DEFAULT '0',
  `judul` varchar(255) NOT NULL DEFAULT '',
  `title_slug` varchar(255) NOT NULL DEFAULT '',
  `desc` text NOT NULL,
  `lokasi` int(11) NOT NULL DEFAULT '0',
  `tanggal_berangkat` date NOT NULL DEFAULT '0000-00-00',
  `id_pendamping` int(11) NOT NULL DEFAULT '0',
  `harga` varchar(255) NOT NULL DEFAULT '',
  `quota` int(11) NOT NULL DEFAULT '0',
  `quota_active` int(11) NOT NULL DEFAULT '0',
  `gambar` varchar(255) NOT NULL DEFAULT '',
  `tanggal_post` varchar(255) NOT NULL DEFAULT '',
  `status_publish` int(11) NOT NULL DEFAULT '0',
  `viewer` varchar(255) NOT NULL DEFAULT ''
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `dauroh`
--

INSERT INTO `dauroh` (`id`, `id_kategori`, `judul`, `title_slug`, `desc`, `lokasi`, `tanggal_berangkat`, `id_pendamping`, `harga`, `quota`, `quota_active`, `gambar`, `tanggal_post`, `status_publish`, `viewer`) VALUES
(1, 2, 'Daurah A', 'daurah-a', 'Deskripsi Dauroh C', 1, '2016-10-10', 3, '100000', 5, 5, 'dauroh_a.png', '2016-09-30', 1, '0'),
(2, 2, 'Dauroh B', 'dauroh-b', 'Deskripsi Dauroh B', 2, '2016-10-17', 4, '150000', 10, 10, 'dauroh_b.png', '2016-09-30', 1, '0'),
(3, 2, 'Dauroh C', 'dauroh-c', 'Deskripsi Dauroh C', 3, '2016-10-20', 3, '200000', 14, 14, 'dauroh_c.jpg', '2016-09-30', 1, '0');

-- --------------------------------------------------------

--
-- Table structure for table `dauroh_gallery`
--

CREATE TABLE `dauroh_gallery` (
  `id` int(11) NOT NULL,
  `gambar` varchar(255) DEFAULT NULL,
  `gambar_id` int(11) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `dauroh_gallery`
--

INSERT INTO `dauroh_gallery` (`id`, `gambar`, `gambar_id`) VALUES
(3, 'dauroh_a_gallery.png', 1),
(4, 'dauroh_b_gallery.jpg', 2),
(5, 'dauroh_c_gallery.png', 3);

-- --------------------------------------------------------

--
-- Table structure for table `event_list`
--

CREATE TABLE `event_list` (
  `id` int(11) NOT NULL,
  `nama_event` varchar(255) NOT NULL DEFAULT '',
  `deskripsi` text NOT NULL,
  `status` int(11) NOT NULL DEFAULT '0',
  `title_slug` varchar(255) NOT NULL DEFAULT ''
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `event_list`
--

INSERT INTO `event_list` (`id`, `nama_event`, `deskripsi`, `status`, `title_slug`) VALUES
(1, 'Yatim Piatu', 'ini untuk anak yang tidak memiliki ibu, bapak,atau keduanya', 1, 'yatim-piatu'),
(2, 'Duafa', 'Duafa ditujukan untuk latar belakang orang tidak mampu dan membutuhkan', 1, 'duafa'),
(3, 'orang sakit', 'sakit', 0, 'orang-sakit'),
(4, 'Pelatihan', 'Pelatihan ditujukan untuk orang yang mempunyai keinginan besar untuk belajar sesuatu namun mereka yang tidak cukup untuk biaya pendidikan', 1, 'pelatihan');

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE `feedback` (
  `id` int(11) NOT NULL,
  `id_user` int(11) NOT NULL DEFAULT '0',
  `id_anak` int(11) NOT NULL DEFAULT '0',
  `pesan_anak` text NOT NULL,
  `pesan_donatur` text NOT NULL,
  `pesan_bantusesama` text NOT NULL,
  `st` int(11) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `feedback`
--

INSERT INTO `feedback` (`id`, `id_user`, `id_anak`, `pesan_anak`, `pesan_donatur`, `pesan_bantusesama`, `st`) VALUES
(16, 78, 24, ' akasdkandkjandkjandjanjnka nkadn and naksd nkadn asnd kajd najksd kasnd ajksnd akjsn ajsd nasjkd naksj naskj dnasjk naskjd naskjd naksd nkasd', 'asdadadsd', 'asdasd', 1),
(17, 78, 24, 'aadasdadadadasd', '', '', 1),
(18, 78, 24, 'ualala', 'asadaasd', 'asdasdasdasdads', 1),
(19, 78, 24, ' jjkkj', 'asdasdsa', 'asdasd', 1),
(20, 98, 22, 'terimakaish kaka', 'Thanks yya udah mau berkontribusi hehhehe', 'Gak ada semoka ilmunya barokahh', 1),
(21, 97, 19, 'makasih kaaka', '', '', 1),
(22, 78, 24, ' ... ', '', '', 0),
(23, 99, 19, 'terimakasih kepada ibu rachma yang telah membiayai saya untuk sekolah yang lebih baik, saya janji semester depan saya akan jauh lebih baik lagi dari hari ini', '', '', 1),
(24, 99, 17, ' ... ', 'bagus', 'bagus', 0),
(25, 78, 18, 'terimakasih ya kaka untuk bantuannya', 'maraming salamat po', 'maraming salamt po', 1),
(26, 100, 20, ' ... ', '', '', 0),
(27, 100, 20, ' ... jgjhj', '', '', 1);

-- --------------------------------------------------------

--
-- Table structure for table `gallery`
--

CREATE TABLE `gallery` (
  `id` int(11) NOT NULL,
  `gambar` varchar(255) NOT NULL DEFAULT '',
  `produk_id` varchar(255) NOT NULL DEFAULT ''
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `gallery`
--

INSERT INTO `gallery` (`id`, `gambar`, `produk_id`) VALUES
(1, 'depan.jpg', '23'),
(2, '1.jpg', '23'),
(3, '2.jpg', '23');

-- --------------------------------------------------------

--
-- Table structure for table `gallery_anak`
--

CREATE TABLE `gallery_anak` (
  `id` int(11) NOT NULL,
  `gambar` varchar(255) NOT NULL DEFAULT '',
  `product_id` int(11) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `gallery_progres`
--

CREATE TABLE `gallery_progres` (
  `id` int(11) NOT NULL,
  `gambar` varchar(255) NOT NULL DEFAULT '',
  `anak_id` int(11) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `kelamin`
--

CREATE TABLE `kelamin` (
  `id` int(11) NOT NULL,
  `jenis` varchar(255) NOT NULL DEFAULT ''
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kelamin`
--

INSERT INTO `kelamin` (`id`, `jenis`) VALUES
(1, 'Pria'),
(2, 'Wanita');

-- --------------------------------------------------------

--
-- Table structure for table `komentar`
--

CREATE TABLE `komentar` (
  `id` int(11) NOT NULL,
  `product_id` varchar(255) NOT NULL DEFAULT '0',
  `user_id` varchar(100) NOT NULL DEFAULT '0',
  `date` date NOT NULL DEFAULT '0000-00-00',
  `komen` text NOT NULL,
  `st` int(11) DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `komentar`
--

INSERT INTO `komentar` (`id`, `product_id`, `user_id`, `date`, `komen`, `st`) VALUES
(103, '93', '24', '2016-08-04', 'tes1', 2),
(104, '78', '24', '2016-08-04', 'tes2', 1),
(105, '78', '24', '2016-08-04', 'tes2.2', 2),
(106, '93', '24', '2016-08-04', 'io', 2),
(107, '93', '24', '2016-08-04', 'uiu', 1),
(108, '98', '22', '2016-08-04', 'hai ayu gmana perkembangannya ?', 1),
(109, '97', '19', '2016-08-04', 'hello reski,. gimana perkembanganya ?', 1),
(110, '98', '22', '2016-08-04', 'iya kaka baik kok, kaka hitam sekali', 2),
(111, '97', '19', '2016-08-04', 'halo kaka koko arisando yang ganteng katanya', 2),
(112, '98', '22', '2016-08-04', 'eh kampret , gw nanya baik baik yaaa', 1),
(113, '98', '22', '2016-08-04', 'YANG SOPAN YA SAMA YG LEBIH TUA', 1),
(114, '98', '16', '2016-08-04', 'hjkfhiuwiu789789498hniuqwe78fy9433254fwe', 1),
(115, '98', '16', '2016-08-04', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam libero eros, faucibus sed eros faucibus, suscipit imperdiet arcu. Nulla interdum lobortis mollis. Donec aliquam dictum elit, at fringilla nibh elementum quis. Vestibulum at diam scelerisque, pellentesque efficitur. Suspendisse id scelerisque nunc, ut condimentum enim. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Sed velit turpis, pellentesque sed accumsan eget, laoreet suscipit velit. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Aenean eu nisi at risus mattis posuere.', 1),
(116, '98', '16', '2016-08-04', '887847892738nnfenviuneuinvuienuineuirigh8787498738758974389h87458934798jnkjneveuirhiu', 1),
(117, '99', '19', '2016-08-04', 'haloooo adik', 1),
(118, '99', '17', '2016-08-06', 'hai bu, salam kenal. terimakasih sudah mendonasikan saya', 2),
(119, '99', '17', '2016-08-06', 'iya sama sama ya dek fauzy', 1),
(120, '100', '23', '2016-08-20', 'halo', 2);

-- --------------------------------------------------------

--
-- Table structure for table `negara`
--

CREATE TABLE `negara` (
  `id` int(11) NOT NULL,
  `nama_negara` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `negara`
--

INSERT INTO `negara` (`id`, `nama_negara`) VALUES
(1, 'Indonesia'),
(2, 'Arab Saudi'),
(3, 'Jepang');

-- --------------------------------------------------------

--
-- Table structure for table `order_detail`
--

CREATE TABLE `order_detail` (
  `id` int(11) NOT NULL,
  `order_id` varchar(11) DEFAULT NULL,
  `product_id` int(11) DEFAULT NULL,
  `nama_produk` varchar(255) DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL,
  `qty` varchar(11) DEFAULT NULL,
  `price` varchar(11) NOT NULL DEFAULT '0',
  `total` int(11) NOT NULL DEFAULT '0',
  `verifikasi` int(10) NOT NULL DEFAULT '0',
  `user_id` int(11) DEFAULT '0',
  `uploaded_verifikasi` varchar(255) NOT NULL DEFAULT '0',
  `updated` date NOT NULL DEFAULT '0000-00-00',
  `tipe` int(11) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `order_detail`
--

INSERT INTO `order_detail` (`id`, `order_id`, `product_id`, `nama_produk`, `image`, `qty`, `price`, `total`, `verifikasi`, `user_id`, `uploaded_verifikasi`, `updated`, `tipe`) VALUES
(166, '141', 24, 'Fiqry Bayu Erlangga', '10.jpg', '1', '1245000', 1245000, 0, 99, '1', '2016-08-04', 0),
(167, '142', 19, 'Reski agni novelia', '5.jpg', '1', '1195000', 1195000, 0, 99, '1', '2016-08-04', 0),
(168, '143', 17, 'M.Fauzy Ridwan', '3.jpg', '1', '1195000', 1195000, 0, 99, '1', '2016-08-05', 0),
(170, '145', 17, 'M.Fauzy Ridwan', '3.jpg', '1', '1195000', 1195000, 1, 99, '1', '0000-00-00', 0),
(171, '146', 25, 'jumaidi al saleh', 'hoga.jpg', '1', '3000000', 3000000, 0, 99, '0', '0000-00-00', 0),
(172, '147', 17, '...', '...', '1', '0', 0, 0, 99, '0', '0000-00-00', 0),
(173, '148', 18, 'Sallahudin hafidz', '4.jpg', '1', '900000000', 900000000, 0, 78, '1', '2016-08-05', 0),
(174, '149', 20, 'Siti Nurandini', '6.jpg', '1', '1195000', 1195000, 0, 100, '1', '2016-08-16', 0),
(175, '150', 20, 'Siti Nurandini', '6.jpg', '1', '300000', 300000, 0, 100, '1', '2016-08-16', 0),
(176, '151', 23, 'Awaluddin Ichwarniasnyah', '9.jpg', '1', '1445000', 1445000, 1, 100, '1', '0000-00-00', 0),
(177, '152', 20, 'Siti Nurandini', '6.jpg', '1', '300000', 300000, 0, 100, '0', '0000-00-00', 0),
(178, '153', 19, 'Reski agni novelia', '5.jpg', '2', '1195000', 2390000, 0, 100, '0', '0000-00-00', 0),
(179, '154', 21, 'Maya Karlina', '7.jpg', '1', '1195000', 1195000, 1, 100, '1', '0000-00-00', 0);

-- --------------------------------------------------------

--
-- Table structure for table `order_master`
--

CREATE TABLE `order_master` (
  `id` int(11) NOT NULL,
  `user_id` varchar(30) NOT NULL DEFAULT '0',
  `anak_id` int(11) NOT NULL DEFAULT '0',
  `total_item` varchar(255) NOT NULL,
  `total_qty` varchar(255) NOT NULL,
  `total_payment` varchar(255) NOT NULL,
  `total_real` int(30) NOT NULL,
  `unique` int(10) NOT NULL,
  `status_order` varchar(1) NOT NULL DEFAULT '0',
  `created` varchar(255) NOT NULL,
  `updated` varchar(255) NOT NULL,
  `verifikasi` varchar(10) NOT NULL DEFAULT '',
  `bukti` varchar(255) NOT NULL DEFAULT '',
  `st` int(11) NOT NULL,
  `tipe` int(11) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `order_master`
--

INSERT INTO `order_master` (`id`, `user_id`, `anak_id`, `total_item`, `total_qty`, `total_payment`, `total_real`, `unique`, `status_order`, `created`, `updated`, `verifikasi`, `bukti`, `st`, `tipe`) VALUES
(141, '99', 0, '1', '1', '1245952', 1245000, 952, '2', '2016-08-04 19:06:58', '2016-08-04 19:08:44', 'qxyhHHZU1E', '1', 1, 0),
(142, '99', 0, '1', '1', '1195344', 1195000, 344, '2', '2016-08-04 22:53:45', '2016-08-04 22:55:01', '6T~PJOnaCe', '1', 1, 0),
(143, '99', 0, '1', '1', '1195284', 1195000, 284, '2', '2016-08-04 23:02:26', '2016-08-04 23:56:26', 'lrjgWPskzP', '1', 1, 0),
(145, '99', 17, '1', '1', '1195133', 1195000, 133, '2', '2016:08:05 02:48:26', '2016-08-05 02:51:19', 'hkKGVwnNGN', '1', 1, 1),
(146, '99', 25, '1', '1', '3000903', 3000000, 903, '0', '2016-08-05 00:58:18', '0000-00-00 00:00:00', 'o_b5UQpHsg', 'belum verifikasi', 0, 0),
(147, '99', 17, '1', '1', '0', 0, 0, '0', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0', 'baru', 0, 1),
(148, '78', 18, '1', '1', '900000616', 900000000, 616, '2', '2016:08:05 16:41:29', '2016-08-05 15:39:33', 'oFkMxwrs0H', 'belum verifikasi', 1, 0),
(149, '100', 20, '1', '1', '1195962', 1195000, 962, '2', '2016-08-12 21:32:27', '2016-08-12 21:33:12', 'TIKF6bcgL~', '1', 1, 0),
(150, '100', 20, '1', '1', '300684', 300000, 684, '2', '2016:08:16 15:42:35', '2016-08-16 15:58:26', 'c0hG~5LHCI', '1', 1, 1),
(151, '100', 23, '1', '1', '1445758', 1445000, 758, '2', '2016-08-16 16:09:45', '2016-08-16 16:11:01', 'upOjk1xRNv', '1', 1, 0),
(152, '100', 20, '1', '1', '300519', 300000, 519, '0', '2016:08:16 17:42:06', '0000-00-00 00:00:00', '6r98K~uWB_', 'belum verifikasi', 0, 1),
(153, '100', 19, '1', '2', '2390953', 2390000, 953, '0', '2016-08-20 19:19:15', '0000-00-00 00:00:00', 'I7tqi5UpOf', 'belum verifikasi', 0, 0),
(154, '100', 21, '1', '1', '1195481', 1195000, 481, '2', '2016-08-25 12:55:37', '2016-08-25 12:56:42', '4oER1mVN9T', '1', 1, 0);

-- --------------------------------------------------------

--
-- Table structure for table `pendamping`
--

CREATE TABLE `pendamping` (
  `id` int(11) NOT NULL,
  `nama_pendamping` varchar(255) NOT NULL DEFAULT '',
  `desc` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pendamping`
--

INSERT INTO `pendamping` (`id`, `nama_pendamping`, `desc`) VALUES
(1, 'Pendamping Umroh 1', 'Pendamping Umroh 1'),
(2, 'Pendamping Umroh 2', 'Pendamping Umroh 2\r\n'),
(3, 'Pendamping Dauroh 1', 'Pendamping Dauroh 1\r\n'),
(4, 'Pendamping Dauroh 2', 'Pendamping Dauroh 2'),
(5, 'Pendamping Bisnis 1', 'Pendamping Bisnis 1'),
(6, 'Pendamping Bisnis 2', 'Pendamping Bisnis 2\r\n');

-- --------------------------------------------------------

--
-- Table structure for table `penerbangan`
--

CREATE TABLE `penerbangan` (
  `id` int(11) NOT NULL,
  `nama_penerbangan` varchar(255) NOT NULL DEFAULT ''
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `penerbangan`
--

INSERT INTO `penerbangan` (`id`, `nama_penerbangan`) VALUES
(1, 'Lion air'),
(2, 'Garuda Indonesia'),
(3, 'Citilink'),
(4, 'AirAsia');

-- --------------------------------------------------------

--
-- Table structure for table `progres`
--

CREATE TABLE `progres` (
  `id` int(11) NOT NULL,
  `id_donatur` int(11) NOT NULL DEFAULT '0',
  `id_anak` int(11) NOT NULL DEFAULT '0',
  `progres` varchar(255) NOT NULL DEFAULT '',
  `post_date` date NOT NULL DEFAULT '0000-00-00',
  `pesan` text NOT NULL,
  `gambar` varchar(255) NOT NULL DEFAULT ''
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `progres`
--

INSERT INTO `progres` (`id`, `id_donatur`, `id_anak`, `progres`, `post_date`, `pesan`, `gambar`) VALUES
(15, 93, 24, 'tes', '2016-08-04', 'tes', '13254145_1216929904992835_8355500182086761417_n.jpg'),
(16, 78, 24, 'asd', '2016-08-04', 'asd', '13428370_1000363696748754_1583665125076394159_n.jpg'),
(17, 97, 19, 'asasd', '2016-08-04', 'asdasdasd kjasndkanksdas', '_S__21103217.jpg'),
(18, 97, 19, 'asdjka dkjas', '2016-08-04', 'jklnxbhj as', '13892163_1047344225314633_7524210480949860707_n.jpg'),
(19, 98, 22, 'ando1', '2016-08-04', 'kka jelek', 'bantu.jpg'),
(20, 98, 22, 'ando jelek', '2016-08-04', 'ansdbakjd ', '_S__21103217.jpg'),
(21, 99, 19, 'mengaji dan membaca', '2016-08-04', 'saya pada hari ini telah melakukan mengaji sebanyak ayat yang sudh saya isikan', '_S__21103217.jpg'),
(22, 99, 19, 'mnegenali ayat', '2016-08-04', 'pada hari ini bberapa hari saya mengenali ayat quran dan beberapa diantaranya sudah bisa . progresss kedepan aku berharap bisa lebih baik lagi ya ka. doakan ya hehe', 'transition angular.jpg'),
(23, 99, 17, 'sedang mendalami pelajaran', '2016-08-06', 'pelajaran ini bersifat agama', 'WhatsApp-Image-20160623.jpeg');

-- --------------------------------------------------------

--
-- Table structure for table `region`
--

CREATE TABLE `region` (
  `id` int(11) NOT NULL,
  `nama_region` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `region`
--

INSERT INTO `region` (`id`, `nama_region`) VALUES
(1, 'Kalimantan Timur'),
(2, 'Jawa Timur'),
(3, 'Bali'),
(4, 'Yogyakarta'),
(5, 'Osaka');

-- --------------------------------------------------------

--
-- Table structure for table `rekomendasi`
--

CREATE TABLE `rekomendasi` (
  `id` int(11) NOT NULL,
  `nama_rekomen` varchar(255) NOT NULL DEFAULT '',
  `email_rekomen` varchar(255) NOT NULL DEFAULT '',
  `telp_rekomen` varchar(255) NOT NULL DEFAULT '',
  `alamat_rekomen` varchar(255) NOT NULL DEFAULT '',
  `asal_kota_rekomen` varchar(255) NOT NULL DEFAULT '',
  `nama_anak` varchar(255) NOT NULL DEFAULT '',
  `usia_anak` varchar(255) NOT NULL DEFAULT '',
  `sekolah_anak` varchar(255) NOT NULL DEFAULT '',
  `alamat_anak` varchar(255) NOT NULL DEFAULT '',
  `deskripsi_anak` text NOT NULL,
  `gambar` varchar(255) NOT NULL DEFAULT '',
  `video` varchar(255) NOT NULL DEFAULT '',
  `date` varchar(255) NOT NULL DEFAULT '',
  `st` int(11) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `rekomendasi`
--

INSERT INTO `rekomendasi` (`id`, `nama_rekomen`, `email_rekomen`, `telp_rekomen`, `alamat_rekomen`, `asal_kota_rekomen`, `nama_anak`, `usia_anak`, `sekolah_anak`, `alamat_anak`, `deskripsi_anak`, `gambar`, `video`, `date`, `st`) VALUES
(1, 'asda', 'asdad', 'asd', 'asd', 'asd', 'asd', 'asd', 'asd', 'asd', 'asd', '13-2e3zup1.jpg', 'asd', '2016-08-17 17:24:39', 0),
(2, 'asda', 'asdad', 'asd', 'asd', 'asd', 'asd', 'asd', 'asd', 'asd', 'asd', '13-2e3zup1.jpg', 'asd', '2016-08-17 17:27:06', 0),
(3, 'muhammad yusuf muttaqien', 'muhammadyusuf250@gmail.com', '085780690696', 'komplek dn 2 no b1 pondok labu cilandak jakarta selatan rt01/05 DKI Jakarta', 'DKI Jakarta', 'Aryani hiniangsih', '10', 'SMP 96 Negeri', 'Komplek timah pangklalan jati jalan margasatmwa raya, DKI jakarta', 'It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using ''Content here, content here'', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for ''lorem ipsum'' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).', 'hoga.jpg', 'https://www.youtube.com/watch?v=fMQYUfZ34Ts', '2016-08-24 19:43:47', 0);

-- --------------------------------------------------------

--
-- Table structure for table `rekomendasi_gallery`
--

CREATE TABLE `rekomendasi_gallery` (
  `id` int(11) NOT NULL,
  `id_rekomendasi` int(11) NOT NULL DEFAULT '0',
  `gambar` varchar(255) NOT NULL DEFAULT ''
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `rekomendasi_gallery`
--

INSERT INTO `rekomendasi_gallery` (`id`, `id_rekomendasi`, `gambar`) VALUES
(1, 2, '911Smallville1128.jpg'),
(2, 2, '439672.jpg'),
(3, 3, 'WIN_20160413_234252.JPG'),
(4, 3, 'WIN_20160319_201146.JPG');

-- --------------------------------------------------------

--
-- Table structure for table `request_saldo`
--

CREATE TABLE `request_saldo` (
  `id` int(11) NOT NULL,
  `id_user` int(11) NOT NULL DEFAULT '0',
  `nama_rekening` varchar(255) NOT NULL DEFAULT '',
  `nama_bank` varchar(255) NOT NULL DEFAULT '',
  `no_rek` int(3) NOT NULL DEFAULT '0',
  `st` int(11) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `status_order`
--

CREATE TABLE `status_order` (
  `id` int(11) NOT NULL,
  `status` varchar(20) NOT NULL DEFAULT '',
  `nilai` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `status_order`
--

INSERT INTO `status_order` (`id`, `status`, `nilai`) VALUES
(1, 'belum bayar', 0),
(2, 'sudah bayar', 2);

-- --------------------------------------------------------

--
-- Table structure for table `status_progres`
--

CREATE TABLE `status_progres` (
  `id` int(11) NOT NULL,
  `nama` varchar(255) NOT NULL DEFAULT '',
  `status` int(11) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `status_progres`
--

INSERT INTO `status_progres` (`id`, `nama`, `status`) VALUES
(1, 'Baru mulai', 1),
(2, 'Sedang menjalani proses belajar', 2),
(3, 'Pembelajaran hampir selesai', 3),
(4, 'Selesai', 4);

-- --------------------------------------------------------

--
-- Table structure for table `testimoni`
--

CREATE TABLE `testimoni` (
  `id` int(11) NOT NULL,
  `gambar` varchar(255) NOT NULL DEFAULT '',
  `nama` varchar(255) NOT NULL DEFAULT '',
  `testimoni` varchar(255) NOT NULL DEFAULT '',
  `tanggal` date NOT NULL DEFAULT '0000-00-00',
  `st` int(11) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tipe_pembayaran`
--

CREATE TABLE `tipe_pembayaran` (
  `id` int(11) NOT NULL,
  `nama` varchar(255) NOT NULL DEFAULT ''
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tipe_pembayaran`
--

INSERT INTO `tipe_pembayaran` (`id`, `nama`) VALUES
(1, 'sekali pembiayaan'),
(2, 'hingga lulus sekolah');

-- --------------------------------------------------------

--
-- Table structure for table `transaksi`
--

CREATE TABLE `transaksi` (
  `id` int(11) NOT NULL,
  `id_om` varchar(255) NOT NULL DEFAULT '',
  `gambar` varchar(255) NOT NULL DEFAULT '',
  `updated` date NOT NULL DEFAULT '0000-00-00'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `transaksi`
--

INSERT INTO `transaksi` (`id`, `id_om`, `gambar`, `updated`) VALUES
(56, '129', 'bantu.jpg', '2016-08-04'),
(57, '130', '13892163_1047344225314633_7524210480949860707_n.jpg', '2016-08-04'),
(58, '131', 'bantu.jpg', '2016-08-04'),
(59, '132', 'bantu.jpg', '2016-08-04'),
(60, '133', '_S__21103217.jpg', '2016-08-04'),
(61, '134', '13707774_1352746598086182_1446769216611008422_n.jpg', '2016-08-04'),
(62, '135', 'muse_1.jpg', '2016-08-04'),
(63, '136', '2.jpg', '2016-08-04'),
(64, '137', '6.jpg', '2016-08-04'),
(65, '140', '', '2016-08-04'),
(66, '140', '', '2016-08-04'),
(67, '140', '3431580-22751_one_piece_luffy__one_piece.jpg', '2016-08-04'),
(68, '139', '', '2016-08-04'),
(69, '139', '10-Ways-to-Learn-Java-in-Just-a-Couple-of-Weeks.jpg', '2016-08-04'),
(70, '141', 'bantu.jpg', '2016-08-04'),
(71, '142', 'bantu.jpg', '2016-08-04'),
(72, '143', 'bantu.jpg', '2016-08-04'),
(73, '145', 'bantu.jpg', '2016-08-05'),
(74, '148', 'bantu.jpg', '2016-08-05'),
(75, '149', '13707774_1352746598086182_1446769216611008422_n.jpg', '2016-08-12'),
(76, '150', '20160321085408.jpg', '2016-08-16'),
(77, '151', '20160321085406.jpg', '2016-08-16'),
(78, '154', 'e13a98fb6e1d11c776da1091d62cd5b7.jpg', '2016-08-25');

-- --------------------------------------------------------

--
-- Table structure for table `travel`
--

CREATE TABLE `travel` (
  `id` int(11) NOT NULL,
  `id_kategori` int(11) NOT NULL,
  `id_travel_organizer` int(11) NOT NULL,
  `judul` varchar(100) NOT NULL,
  `title_slug` varchar(255) NOT NULL,
  `id_region` int(11) NOT NULL,
  `id_negara` int(11) NOT NULL,
  `tema` varchar(255) NOT NULL,
  `desc` text NOT NULL,
  `tanggal_event` date NOT NULL,
  `harga` int(11) NOT NULL,
  `quota` int(11) NOT NULL,
  `gambar` varchar(255) NOT NULL,
  `tanggal_post` date NOT NULL,
  `status_publish` int(11) NOT NULL,
  `viewer` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `travel`
--

INSERT INTO `travel` (`id`, `id_kategori`, `id_travel_organizer`, `judul`, `title_slug`, `id_region`, `id_negara`, `tema`, `desc`, `tanggal_event`, `harga`, `quota`, `gambar`, `tanggal_post`, `status_publish`, `viewer`) VALUES
(1, 4, 2, 'Paket Travel Pantai Kuta', 'paket-umroh-dan-ziarah-ke-palestina', 3, 1, 'Tema Travel  A', 'Paket Travel Pantai Kuta sangat direkomendasikan', '2015-12-03', 35435453, 21, 'palestina.jpg', '2015-12-23', 1, 1),
(5, 4, 1, 'Candi Prambanan', 'umroh-8-hari', 4, 1, 'Tema  Travel C', 'Candi Prambanan menawan', '2015-04-09', 5000, 12, 'candi_prambanan.jpg', '2016-09-07', 1, 0),
(6, 4, 2, 'Osaka Castle', 'summer-vacation', 5, 3, 'Tema Travel A', 'Jalan-jalan ke tempat bersejarah di kastil Osaka, Jepang', '2016-09-20', 60000, 10, 'osaka-sakura1.jpg', '2016-09-07', 1, 0),
(7, 4, 2, 'Trip Gunung Bromo', 'trip-gunung-bromo', 2, 1, 'Tema Travel B', 'Jalan jalan ke bromo', '2016-10-12', 400000, 10, 'gunungbromo.jpg', '2016-09-08', 1, 0),
(8, 4, 3, 'Derawan', 'weekend-ke-singapura-bro', 1, 1, 'Tema Travel B', 'Menikmati panorama laut di Derawan', '2016-11-03', 2000000, 20, 'derawan.jpg', '2016-09-08', 1, 0),
(9, 4, 3, 'Pura Tanah Lot', 'jalan-jalan-ke-thailand-dong', 3, 1, 'Tema Travel C', 'Pura Tanah Lot adalah salah satu tempat wisata di Bali yang terkenal dengan keindahannya, terutama pada saat matahari terbenam. ', '2016-11-03', 2000000, 20, 'Pura-Tanah-Lot-300x224.jpg', '2016-09-08', 1, 0);

-- --------------------------------------------------------

--
-- Table structure for table `travel_gallery`
--

CREATE TABLE `travel_gallery` (
  `id` int(11) NOT NULL,
  `id_travel` int(11) NOT NULL,
  `gambar` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `travel_gallery`
--

INSERT INTO `travel_gallery` (`id`, `id_travel`, `gambar`) VALUES
(1, 5, 'rename_mass.png'),
(2, 6, 'Screenshot_2016-08-29_09-33-41.png'),
(3, 7, 'mbuntu-14.png'),
(4, 8, 'mbuntu-12.jpg'),
(5, 9, 'mbuntu-12.jpg'),
(6, 9, 'mbuntu-14.png'),
(7, 9, 'mbuntu-9.jpg'),
(8, 9, 'Screenshot_2016-08-28_15-38-38.png'),
(9, 9, 'rename_mass.png');

-- --------------------------------------------------------

--
-- Table structure for table `travel_kategori`
--

CREATE TABLE `travel_kategori` (
  `id` int(11) NOT NULL,
  `jenis_travel` varchar(255) NOT NULL,
  `status_publish` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `travel_kategori`
--

INSERT INTO `travel_kategori` (`id`, `jenis_travel`, `status_publish`) VALUES
(1, 'Umroh', 1),
(2, 'Dauroh', 1),
(3, 'Business', 1),
(4, 'Travel', 1);

-- --------------------------------------------------------

--
-- Table structure for table `travel_organizer`
--

CREATE TABLE `travel_organizer` (
  `id` int(11) NOT NULL,
  `nama_travel_organizer` varchar(255) NOT NULL,
  `pemilik` varchar(255) NOT NULL,
  `no_telp` varchar(20) NOT NULL,
  `email` varchar(255) NOT NULL,
  `alamat` text NOT NULL,
  `deskripsi_perusahaan` text NOT NULL,
  `status_perusahaan` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `travel_organizer`
--

INSERT INTO `travel_organizer` (`id`, `nama_travel_organizer`, `pemilik`, `no_telp`, `email`, `alamat`, `deskripsi_perusahaan`, `status_perusahaan`) VALUES
(1, 'Jalan Halal', 'H. Jalan Halal', '0213456789', 'mail@jalanhalal.com', 'Depok', 'Perusahaan bla bla bla', 1),
(2, 'Mayday Developer', 'Yusuf', '021234567', 'yusuf@mail.com', 'Depok', 'Professional Developer', 1),
(3, 'Happy Vacation', 'happy', '0217655766', 'happy@mail.com', 'sfjdkja jlkj ', 'jklf jlkj', 1);

-- --------------------------------------------------------

--
-- Table structure for table `umroh`
--

CREATE TABLE `umroh` (
  `id` int(11) NOT NULL,
  `id_kategori` int(11) DEFAULT NULL,
  `judul` varchar(255) NOT NULL DEFAULT '',
  `title_slug` varchar(255) NOT NULL DEFAULT '',
  `desc` text NOT NULL,
  `id_pendamping` varchar(255) NOT NULL DEFAULT '',
  `id_penerbangan` int(11) NOT NULL,
  `jumlah_hari` varchar(255) NOT NULL DEFAULT '',
  `tanggal` date NOT NULL DEFAULT '0000-00-00',
  `harga` varchar(255) NOT NULL DEFAULT '',
  `quota` int(11) NOT NULL DEFAULT '0',
  `quota_active` int(11) NOT NULL DEFAULT '0',
  `gambar` varchar(255) NOT NULL DEFAULT '',
  `tanggal_post` varchar(255) NOT NULL DEFAULT '',
  `status_publish` int(11) NOT NULL DEFAULT '0',
  `viewer` varchar(255) NOT NULL DEFAULT ''
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `umroh`
--

INSERT INTO `umroh` (`id`, `id_kategori`, `judul`, `title_slug`, `desc`, `id_pendamping`, `id_penerbangan`, `jumlah_hari`, `tanggal`, `harga`, `quota`, `quota_active`, `gambar`, `tanggal_post`, `status_publish`, `viewer`) VALUES
(1, 1, 'Umroh Satu', 'umroh-satu', 'Deskripsi Umroh Satu', '1', 1, '7', '2016-10-01', '30000', 25, 0, 'umroh1.jpg', '2016-09-30', 1, '4'),
(2, 1, 'Umroh Kedua', 'umroh-kedua', 'Deskripsi Umroh Kedua', '2', 2, '10', '2016-09-30', '30000', 10, 10, 'umroh2.jpg', '2016-10-01', 1, '1'),
(3, 1, 'Umroh ketiga', 'umroh-ketiga', 'Deskripsi Umroh Ketiga', '1', 3, '7', '2016-10-21', '50000', 10, 10, 'umroh3.jpg', '2016-09-30', 1, '0'),
(4, 1, 'Umroh Keempat', 'umroh-keempat', 'Deskripsi Umroh Keempat', '1', 4, '8', '2016-10-27', '55000', 12, 12, 'umroh4.jpg', '2016-09-30', 1, '0');

-- --------------------------------------------------------

--
-- Table structure for table `umroh_gallery`
--

CREATE TABLE `umroh_gallery` (
  `id` int(11) NOT NULL,
  `gambar` varchar(255) DEFAULT NULL,
  `gambar_id` int(11) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `umroh_gallery`
--

INSERT INTO `umroh_gallery` (`id`, `gambar`, `gambar_id`) VALUES
(1, 'umroh1gallery.jpg', 1),
(3, 'umroh2gallery.jpg', 2),
(4, 'umroh3gallery.jpg', 3),
(5, 'umroh4gallery.jpg', 4);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) UNSIGNED NOT NULL,
  `username` varchar(255) DEFAULT NULL,
  `nama_lengkap` varchar(255) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `role` int(1) DEFAULT '0',
  `telephone` varchar(255) DEFAULT NULL,
  `image` varchar(255) DEFAULT '',
  `saldo` int(11) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `username`, `nama_lengkap`, `password`, `email`, `role`, `telephone`, `image`, `saldo`) VALUES
(1, 'arya', 'keren namaku', '81dc9bdb52d04dc20036dbd8313ed055', 'aryafebiyan.dumet@gmail.com', 1, '085780690696', '', 0),
(21, 'yusufadmin', NULL, 'c1304618dac98b5044c969824063cdbb', 'muhammadyusuf2250@gmail.com', 1, '08567852455', '', 0),
(22, 'yusufmuttaqien', NULL, '7815696ecbf1c96e6894b779456d330e', 'a@o.com', 1, '08122386676', '', 0),
(64, 'yusufmuttaqien', 'muhammad yusuf muttaqien', '827ccb0eea8a706c4c34a16891f84e7b', 'muhammadyusuf250@gmail.com', 1, '085780690696', '', 0),
(67, 'jajan', 'jajan', '63240d4e87cb867db989e226a89f88e4', 'jajan@gmail.com', 2, '10201801', 'gue.png', 0),
(68, 'annisa', 'annisa fajariah', 'c9d2cce909ea37234be8af1a1f958805', 'anisa@gmail.com', 2, '085789797', 'AvlMouK6kSG7IC6pibqjdMvsUFCqUIAaS3CAXFlrwA53.jpg', 0),
(69, 'petrollhead', 'petrollhead', '202cb962ac59075b964b07152d234b70', 'agf@mai.com', 2, '08578653', '1435759958443.jpg', 0),
(70, 'zahra', 'zahra izaaz', '01e50c681c0b05ff22686b3e0f7290d3', 'sa@gmail.com', 2, '09877665433', 'C360_2015-05-31-10-41-13-082.jpg', 0),
(71, 'ucupz', 'muhammad yusuf muttaqien', '3b5cdc54e9e361a53ffc0d8c2b946da3', 'muhammadyusuf220@gmail.com', 2, '085780690696', '1690323_10202813365237035_4049246618881795412_n.jpg', 0),
(72, 'Nanda', 'Nanda Rizkiyani Anugrah', 'c6c3b54d0d234f276d44e35a3bc6b5bf', 'ndhaaae@gmail.com', 2, '089652879089', 'nanda cantik.jpg', 0),
(73, 'calistabertha', 'Calista Bertha', '81dc9bdb52d04dc20036dbd8313ed055', 'calistabertha@gmail.com', 2, '000000', 'IMG_20150630_191901.jpg', 0),
(74, 'Nicolauses', 'Nicolaus Ernest', 'a27fd208db7a9f4248e999b29120349f', 'Neztmamonto@gmail.com', 2, '081286980698', 'soe-hok-gie.jpg', 0),
(75, 'Available', 'arisetiaji', '6926632aa00c99633f788dd399219781', 'ari.setiaji3@gmail.com', 2, '085776450340', '3QKCFGw.jpg', 0),
(76, 'fernando', 'fernando Jeremia Fredrik', 'ec6a6536ca304edf844d1d248a4f08dc', 'fernandositumeang94@gmail.com', 2, '085697152211', '20150629221210.jpg', 0),
(77, 'six', 'six', '81dc9bdb52d04dc20036dbd8313ed055', 'six@gmail.com', 2, '098766', '10606194_511812248976234_8081407404962487100_n.jpg', 0),
(78, 'meong ', 'merciana ikiki', '9221c972b5ed87e90ffdb7ded514970e', 'ecikmercia@gmail.com', 2, '123123123', '', 3630),
(79, 'dahlan', 'Pradahlan', '4dd39f49f898c062283963c187532af8', 'dahlanarisando@gmail.com', 2, '085695000040', 'lpdp.jpg', 0),
(80, 'aero', 'Aero Tech', '9575f05d5454113cd5f349e0e1da503c', 'aero@nation.com', 2, '0899450309434', '11900060_10153529544951182_969434216841827940_n.jpg', 0),
(81, 'rudi', 'rudi', '1755e8df56655122206c7c1d16b1c7e3', 'rudi@gmail.com', 2, '09876543', 'FDFD.png', 0),
(82, 'fuad', 'fuad', 'e46e5319f9fb6093fda308b48dc02d31', 'fuad@gmail.com', 3, '0987909', '13254145_1216929904992835_8355500182086761417_n.jpg', 0),
(83, 'nanana', 'nanana', 'bb9ec852de3e8f7609d3676ede4444fa', 'na@n.com', 2, '', 'dampak 1.jpg', 0),
(84, 'jalun marsyid', 'jalun', 'e69e10c90302e16ab2ae6e71a171054d', 'j@dnau.com', 2, '828282', 'buah-belimbing.jpg', 0),
(85, 'mekel', 'mekel', '6cb3b4ca0c2580d660218e80eeea424f', 'muhamadyusuf250@gmail.com', 2, '09666555', 'WIN_20160413_234252.JPG', 0),
(86, 'yusuf', 'yusuf', 'add3deb05fc6625aae939041e4131624', 'ysuuf@gmail.com', 2, '09090800', 'stig2.jpg', 0),
(88, 'mamatz', 'mamatz', 'd53520f8686cca1ef2d70f0e9728db55', 'mamatz@gmail.com', 0, '08712345', '', 0),
(89, 'kakatomi', 'Tommy Herdiansyah', '64ad3fb166ddb41a2ca24f1803b8b722', 'tommy.herdiansyah@gmail.com', 0, '085695300053', '', 0),
(90, 'eko', 'eko', 'd751c57f94fa68c6e8be19003a1fb1f2', 'muji2022@gmail.com', 2, '08561915500', '', 0),
(91, 'ekoganteng', 'ekoganteng', '8e1a070e9b0340da2b0ea4f193c172f0', 'eko@gmail.com', 2, '09876678', '', 0),
(92, 'muji', 'muji', 'd751c57f94fa68c6e8be19003a1fb1f2', 'muji20@gmail.com', 2, '0989890', '', 0),
(93, 'afrizal', 'afrizal amayudin alhail', '2b474387a481cd9de9fd34910b7e72a6', 'afrizal@gmail.com', 2, '12912092093', '', 3213),
(94, 'bantuadmin', 'bantuadmin', '80ed43e5e17e05328b4687de3e1b62a6', 'muhammadyusuf250@gmail.com', 1, '085780690696', '', 0),
(95, 'ucup', 'muhammad yusuf muttaqien', '0d30e6ec5d3a4d60fb72b6487a8da1a0', 'muhamadyusuf50@gmail.com', 2, '085780690696', '', 0),
(96, 'petrolhead', NULL, NULL, 'muhammadyusuf20@gmail.com', 1, NULL, '', 0),
(97, 'dahlanganteng', 'Pradahlan', '231f748bbdc9066a212170b7d0d43518', 'sindu@gmail.com', 2, '087690000', '', 1098),
(98, 'andoganteng', 'fernando situmeang', 'a5d8f829b66c93159c2487ef43a2ec0b', 'situmeang94@gmail.com', 2, '098098080', '', 1153),
(99, 'rahmawati', 'rahmawati', 'dc0271053c027f3ac28884a17ac1f939', 'rachma90@yahoo.com', 2, '08128991074', '', 1713),
(100, 'dadang', 'dadang', '0037bb978d51e84d1ad5478e85430f26', 'dadang@gamil.com', 2, '12313123', '', 2885);

-- --------------------------------------------------------

--
-- Table structure for table `user_detail`
--

CREATE TABLE `user_detail` (
  `id` int(11) NOT NULL,
  `id_user` int(11) NOT NULL DEFAULT '0',
  `gambar` varchar(255) NOT NULL DEFAULT '',
  `biodata` text NOT NULL,
  `pekerjaan` varchar(255) NOT NULL DEFAULT '',
  `tanggal_lahir` date NOT NULL DEFAULT '0000-00-00',
  `kelamin` varchar(255) NOT NULL DEFAULT ''
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_detail`
--

INSERT INTO `user_detail` (`id`, `id_user`, `gambar`, `biodata`, `pekerjaan`, `tanggal_lahir`, `kelamin`) VALUES
(3, 100, '13707774_1352746598086182_1446769216611008422_n.jpg', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry''s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets co', 'pegawai superman', '1993-07-18', 'Pria'),
(4, 78, '62817815459.jpg', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry''s standard dummy text ever since the 1500s, when', 'konsultan', '1993-12-14', 'Wanita');

-- --------------------------------------------------------

--
-- Table structure for table `ustad`
--

CREATE TABLE `ustad` (
  `id` int(11) NOT NULL,
  `nama_ustad` varchar(255) NOT NULL,
  `deskripsi_ustad` text NOT NULL,
  `foto` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ustad`
--

INSERT INTO `ustad` (`id`, `nama_ustad`, `deskripsi_ustad`, `foto`, `email`) VALUES
(1, 'Yusuf Mansur', 'Ustad yang terkenal dengan materi sedekah', 'yusuf-mansur.jpg', 'yusufmansur@mail.com'),
(2, 'Ustad Maulana', 'Ustad yang terkenal dengan gaya "jamaah oh jamaah, alhamdulillah"', '552907756ea8344b188b4567.png', 'maulana@mail.com');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `anak`
--
ALTER TABLE `anak`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `article`
--
ALTER TABLE `article`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `artikel_gallery`
--
ALTER TABLE `artikel_gallery`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `business`
--
ALTER TABLE `business`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `business_gallery`
--
ALTER TABLE `business_gallery`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `dauroh`
--
ALTER TABLE `dauroh`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `dauroh_gallery`
--
ALTER TABLE `dauroh_gallery`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `event_list`
--
ALTER TABLE `event_list`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `feedback`
--
ALTER TABLE `feedback`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `gallery`
--
ALTER TABLE `gallery`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `gallery_anak`
--
ALTER TABLE `gallery_anak`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `gallery_progres`
--
ALTER TABLE `gallery_progres`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `kelamin`
--
ALTER TABLE `kelamin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `komentar`
--
ALTER TABLE `komentar`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `negara`
--
ALTER TABLE `negara`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `order_detail`
--
ALTER TABLE `order_detail`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `order_master`
--
ALTER TABLE `order_master`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pendamping`
--
ALTER TABLE `pendamping`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `penerbangan`
--
ALTER TABLE `penerbangan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `progres`
--
ALTER TABLE `progres`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `region`
--
ALTER TABLE `region`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `rekomendasi`
--
ALTER TABLE `rekomendasi`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `rekomendasi_gallery`
--
ALTER TABLE `rekomendasi_gallery`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `request_saldo`
--
ALTER TABLE `request_saldo`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `status_order`
--
ALTER TABLE `status_order`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `status_progres`
--
ALTER TABLE `status_progres`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `testimoni`
--
ALTER TABLE `testimoni`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tipe_pembayaran`
--
ALTER TABLE `tipe_pembayaran`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `transaksi`
--
ALTER TABLE `transaksi`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `travel`
--
ALTER TABLE `travel`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `slug` (`title_slug`);

--
-- Indexes for table `travel_gallery`
--
ALTER TABLE `travel_gallery`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `travel_kategori`
--
ALTER TABLE `travel_kategori`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `travel_organizer`
--
ALTER TABLE `travel_organizer`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `umroh`
--
ALTER TABLE `umroh`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `umroh_gallery`
--
ALTER TABLE `umroh_gallery`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_detail`
--
ALTER TABLE `user_detail`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ustad`
--
ALTER TABLE `ustad`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `anak`
--
ALTER TABLE `anak`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;
--
-- AUTO_INCREMENT for table `article`
--
ALTER TABLE `article`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
--
-- AUTO_INCREMENT for table `artikel_gallery`
--
ALTER TABLE `artikel_gallery`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `business`
--
ALTER TABLE `business`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `business_gallery`
--
ALTER TABLE `business_gallery`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `dauroh`
--
ALTER TABLE `dauroh`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `dauroh_gallery`
--
ALTER TABLE `dauroh_gallery`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `event_list`
--
ALTER TABLE `event_list`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `feedback`
--
ALTER TABLE `feedback`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;
--
-- AUTO_INCREMENT for table `gallery`
--
ALTER TABLE `gallery`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `gallery_anak`
--
ALTER TABLE `gallery_anak`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `gallery_progres`
--
ALTER TABLE `gallery_progres`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `kelamin`
--
ALTER TABLE `kelamin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `komentar`
--
ALTER TABLE `komentar`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=121;
--
-- AUTO_INCREMENT for table `negara`
--
ALTER TABLE `negara`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `order_detail`
--
ALTER TABLE `order_detail`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=180;
--
-- AUTO_INCREMENT for table `order_master`
--
ALTER TABLE `order_master`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=155;
--
-- AUTO_INCREMENT for table `pendamping`
--
ALTER TABLE `pendamping`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `penerbangan`
--
ALTER TABLE `penerbangan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `progres`
--
ALTER TABLE `progres`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;
--
-- AUTO_INCREMENT for table `region`
--
ALTER TABLE `region`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `rekomendasi`
--
ALTER TABLE `rekomendasi`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `rekomendasi_gallery`
--
ALTER TABLE `rekomendasi_gallery`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `request_saldo`
--
ALTER TABLE `request_saldo`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `status_order`
--
ALTER TABLE `status_order`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `status_progres`
--
ALTER TABLE `status_progres`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `testimoni`
--
ALTER TABLE `testimoni`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `tipe_pembayaran`
--
ALTER TABLE `tipe_pembayaran`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `transaksi`
--
ALTER TABLE `transaksi`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=79;
--
-- AUTO_INCREMENT for table `travel`
--
ALTER TABLE `travel`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `travel_gallery`
--
ALTER TABLE `travel_gallery`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `travel_kategori`
--
ALTER TABLE `travel_kategori`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `travel_organizer`
--
ALTER TABLE `travel_organizer`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `umroh`
--
ALTER TABLE `umroh`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `umroh_gallery`
--
ALTER TABLE `umroh_gallery`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=101;
--
-- AUTO_INCREMENT for table `user_detail`
--
ALTER TABLE `user_detail`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `ustad`
--
ALTER TABLE `ustad`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

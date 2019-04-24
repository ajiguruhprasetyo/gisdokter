-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 30, 2017 at 03:05 AM
-- Server version: 10.1.21-MariaDB
-- PHP Version: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `gis_dokter`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id_admin` int(11) NOT NULL,
  `nama` varchar(30) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(8) NOT NULL,
  `alamat` text NOT NULL,
  `id_berita` int(4) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id_admin`, `nama`, `username`, `password`, `alamat`, `id_berita`) VALUES
(10008, 'arni', 'arn', 'arn', 'Sragen, Jawa Tengah, Indonesia', NULL),
(10010, 'bejo', 'secret', 'secret', 'surakarta, jawa tengah indonesia', NULL),
(10011, 'bejo', 'lontong', 'secret', 'surakarta, jawa tengah, indonesia', NULL),
(10012, 'bejo', 'sate', 'secret', 'surakarta, jawa tengah, indonesia', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `berita`
--

CREATE TABLE `berita` (
  `id_berita` int(4) NOT NULL,
  `judul` varchar(40) DEFAULT NULL,
  `kategori` varchar(30) DEFAULT NULL,
  `deskripsi` text,
  `tanggal` date NOT NULL,
  `gambar` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `berita`
--

INSERT INTO `berita` (`id_berita`, `judul`, `kategori`, `deskripsi`, `tanggal`, `gambar`) VALUES
(1, 'cara mengkonsumsi air untuk ibu hamil', 'makanan', 'Berikut manfaat-manfaat air putih bagi ibu hamil, antara lain :\r\n\r\n1. Mencegah Dehidrasi\r\n\r\nKetika seorang wanita sedang hamil biasanya akan mengalami beberapa gejala, seperti sakit punggung, sakit kepala, bahkan masalah ginjal. Hal-hal tersebut bisa saja terjadi disebabkan karena wanita tersebut sedang mengalami dehidrasi. Sedemikian sehingga mengkonsumsi air putih bagi ibu hamil merupakan salah satu cara untuk mencegah terjadinya dehidrasi pada tubuh, apalagi bila dikonsumsi secara rutin dan teratur setiap harinya.\r\n\r\n2. Menghilangkan Racun\r\n\r\nKandungan racun yang bisa saja terdapat pada makanan dan minuman yang dikonsumsi tentu sangatlah tidak baik bagi tubuh, terutama bagi ibu hamil yang juga membawa janin (bayi) di dalam perutnya. Sedemikian sehingga mengkonsumsi air putih sangatlah dianjurkan bagi ibu hamil. Hal ini dikarenakan air putih akan mampu membantu pembilasan racun yang masuk ke tubuh. Di samping itu, air putih juga dapat membantu mengoptimalkan kinerja hati dan ginjal yang berfungsi untuk menetralkan serta mengeluarkan racun dari dalam tubuh. Dengan demikian, keamanan dirinya beserta bayinya terhadap racun akan terjaga dengan baik.\r\n\r\n3. Menyerap Nutrisi Makanan\r\n\r\nNutrisi ibu hamil dari makanan yang ia makan sangatlah penting untuk dipenuhi setiap harinya. Tak hanya untuk dirinya namun juga untuk janin (bayi) yang sedang dikandungnya. Dengan demikian nutrisi makanan yang masuk harus benar-benar terserap dengan baik oleh sistem percernaan di dalam tubuh. Oleh karena itu, dengan mengkonsumsi air putih yang cukup akan bisa membantu proses tersebut. Dimana air putih akan membantu proses penyerapan nutrisi makanan di dalam tubuh, terutama penyerapan glukosa untuk meningkatkan energi. Di samping itu, air juga berfungsi untuk membawa nutrisi penting yang dibutuhkan dalam perkembangan janin melalui darah.\r\n\r\n4. Energi\r\n\r\nSebagaimana telah dijelaskan pada poin 3 bahwa mengkonsumsi air putih dapat mempercepat penyerapan glukosa untuk meningkatkan energi. Selain itu, air putih juga sebagai asupan cairan yang dibutuhkan oleh setiap organ yang ada di dalam tubuh agar dapat bekerja secara optimal. Dengan demikian, apabila asupan cairan dengan cara mengkonsumsi air putih terpenuhi sehingga organ-organ di dalam tubuh bekerja secara optimal, maka dampak yang ditimbulkan tentunya ialah tubuh yang terasa lebih segar dan bernergi. Demikian pula bagi ibu hamil yang mengkonsumsi air putih secara cukup.\r\n\r\n5. Menjaga Kestabilan Tekanan Darah dan Memperlancar Peredarannya\r\n\r\nMengkonsumsi air putih yang cukup pada ibu hamil juga akan menjaga kestabilan tekanan darah. Yang mana, pada trimester ketiga volume darah akan meningkat sekitar dua kali lipat. Sedemikian sehingga air sangatlah dibutuhkan untuk menjaga tekanannya supaya tetap dalam kondisi normal. Hal ini dikarenakan darah yang terlalu kental dapat menyebabkan hipertensi dan masalah kardiovaskular lainnya pada ibu hamil.\r\n\r\nSelain itu, tekanan darah yang dalam kondisi normal juga mengindikasikan bahwa aliran peredarannya lancar karena air telah terserap masuk dengan baik ke dalam sel-sel tubuh, termasuk sel darah.', '2017-05-24', 'image/ibuhamil.jpg'),
(2, 'minyak zaitun untuk ibu hamil', 'makanan', 'Berikut manfaat-manfaat air putih bagi ibu hamil, antara lain :\r\n\r\n1. Mencegah Dehidrasi\r\n\r\nKetika seorang wanita sedang hamil biasanya akan mengalami beberapa gejala, seperti sakit punggung, sakit kepala, bahkan masalah ginjal. Hal-hal tersebut bisa saja terjadi disebabkan karena wanita tersebut sedang mengalami dehidrasi. Sedemikian sehingga mengkonsumsi air putih bagi ibu hamil merupakan salah satu cara untuk mencegah terjadinya dehidrasi pada tubuh, apalagi bila dikonsumsi secara rutin dan teratur setiap harinya.\r\n\r\n2. Menghilangkan Racun\r\n\r\nKandungan racun yang bisa saja terdapat pada makanan dan minuman yang dikonsumsi tentu sangatlah tidak baik bagi tubuh, terutama bagi ibu hamil yang juga membawa janin (bayi) di dalam perutnya. Sedemikian sehingga mengkonsumsi air putih sangatlah dianjurkan bagi ibu hamil. Hal ini dikarenakan air putih akan mampu membantu pembilasan racun yang masuk ke tubuh. Di samping itu, air putih juga dapat membantu mengoptimalkan kinerja hati dan ginjal yang berfungsi untuk menetralkan serta mengeluarkan racun dari dalam tubuh. Dengan demikian, keamanan dirinya beserta bayinya terhadap racun akan terjaga dengan baik.\r\n\r\n3. Menyerap Nutrisi Makanan\r\n\r\nNutrisi ibu hamil dari makanan yang ia makan sangatlah penting untuk dipenuhi setiap harinya. Tak hanya untuk dirinya namun juga untuk janin (bayi) yang sedang dikandungnya. Dengan demikian nutrisi makanan yang masuk harus benar-benar terserap dengan baik oleh sistem percernaan di dalam tubuh. Oleh karena itu, dengan mengkonsumsi air putih yang cukup akan bisa membantu proses tersebut. Dimana air putih akan membantu proses penyerapan nutrisi makanan di dalam tubuh, terutama penyerapan glukosa untuk meningkatkan energi. Di samping itu, air juga berfungsi untuk membawa nutrisi penting yang dibutuhkan dalam perkembangan janin melalui darah.\r\n\r\n4. Energi\r\n\r\nSebagaimana telah dijelaskan pada poin 3 bahwa mengkonsumsi air putih dapat mempercepat penyerapan glukosa untuk meningkatkan energi. Selain itu, air putih juga sebagai asupan cairan yang dibutuhkan oleh setiap organ yang ada di dalam tubuh agar dapat bekerja secara optimal. Dengan demikian, apabila asupan cairan dengan cara mengkonsumsi air putih terpenuhi sehingga organ-organ di dalam tubuh bekerja secara optimal, maka dampak yang ditimbulkan tentunya ialah tubuh yang terasa lebih segar dan bernergi. Demikian pula bagi ibu hamil yang mengkonsumsi air putih secara cukup.\r\n\r\n5. Menjaga Kestabilan Tekanan Darah dan Memperlancar Peredarannya\r\n\r\nMengkonsumsi air putih yang cukup pada ibu hamil juga akan menjaga kestabilan tekanan darah. Yang mana, pada trimester ketiga volume darah akan meningkat sekitar dua kali lipat. Sedemikian sehingga air sangatlah dibutuhkan untuk menjaga tekanannya supaya tetap dalam kondisi normal. Hal ini dikarenakan darah yang terlalu kental dapat menyebabkan hipertensi dan masalah kardiovaskular lainnya pada ibu hamil.\r\n\r\nSelain itu, tekanan darah yang dalam kondisi normal juga mengindikasikan bahwa aliran peredarannya lancar karena air telah terserap masuk dengan baik ke dalam sel-sel tubuh, termasuk sel darah.', '2017-05-04', 'image/manfaat-minyak-zaitun-untuk-wajah-dan-kulit-tubuh-alodokter.jpg'),
(3, 'cara menyusui yang benar', 'menyusui', 'Air susu ibu (ASI) mengandung 400 nutrisi yang sempurna untuk memenuhi kebutuhan bayi. Seiring dengan pertumbuhan bayi, kandungan nutrisi di dalamnya akan menyesuaikan dengan kebutuhan bayi. Manfaat memberikan ASI eksklusif hingga 6 bulan akan menekan risiko sakit infeksi telinga, radang paru-paru (pneumonia), radang pencernaan (gastroenteritis), sekaligus meningkatkan kecerdasan.', '2017-05-28', 'image/cara-menyusui-yang-benar-dan-praktis-alodokter.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `data_dokter`
--

CREATE TABLE `data_dokter` (
  `nik` int(11) NOT NULL,
  `nama` varchar(40) NOT NULL,
  `gender` enum('Laki-Laki','Perempuan') NOT NULL,
  `tempat_praktek` text NOT NULL,
  `lang_dok` decimal(10,8) NOT NULL,
  `long_dok` decimal(11,8) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `data_dokter`
--

INSERT INTO `data_dokter` (`nik`, `nama`, `gender`, `tempat_praktek`, `lang_dok`, `long_dok`) VALUES
(1003, 'dr. TEGUH PRAKOSA, Sp. OG', 'Laki-Laki', 'RS PKU Muhammadiyah', '-7.56653800', '110.81940300'),
(1015, 'JKVDSB', 'Perempuan', 'Ngawi', '0.00000000', '0.00000000');

-- --------------------------------------------------------

--
-- Table structure for table `dokter`
--

CREATE TABLE `dokter` (
  `nik` int(11) NOT NULL,
  `nama` varchar(40) DEFAULT NULL,
  `gender` varchar(15) NOT NULL,
  `tempat_praktek` varchar(40) NOT NULL,
  `id_peta` int(5) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `dokter`
--

INSERT INTO `dokter` (`nik`, `nama`, `gender`, `tempat_praktek`, `id_peta`) VALUES
(5001, 'dr. DARTO, Sp. OG(K)', 'Lakiaki-Laki', 'Jogya', 50001);

-- --------------------------------------------------------

--
-- Table structure for table `menu`
--

CREATE TABLE `menu` (
  `id_menu` int(11) NOT NULL,
  `menu` varchar(20) NOT NULL,
  `link_menu` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `menu`
--

INSERT INTO `menu` (`id_menu`, `menu`, `link_menu`) VALUES
(1, 'Home', 'home.php'),
(2, 'Data Pasien', 'pasien.php'),
(3, 'Peta GIS', 'peta.php'),
(4, 'Data Dokter', 'dokter.php'),
(5, 'Contact Us', 'contact.php');

-- --------------------------------------------------------

--
-- Table structure for table `menu_user`
--

CREATE TABLE `menu_user` (
  `id_menu` int(11) NOT NULL,
  `menu` varchar(20) NOT NULL,
  `link_menu` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `menu_user`
--

INSERT INTO `menu_user` (`id_menu`, `menu`, `link_menu`) VALUES
(1, 'Home', 'home.php'),
(2, 'Data Pasien', 'input_pasien.php'),
(3, 'Peta GIS', 'peta.php'),
(4, 'Contact Us', 'contact.php');

-- --------------------------------------------------------

--
-- Table structure for table `pasien`
--

CREATE TABLE `pasien` (
  `id_pasien` int(4) NOT NULL,
  `nama_pasien` varchar(40) NOT NULL,
  `umur` int(2) NOT NULL,
  `alamat` varchar(60) NOT NULL,
  `lat` decimal(10,8) NOT NULL,
  `lng` decimal(11,8) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pasien`
--

INSERT INTO `pasien` (`id_pasien`, `nama_pasien`, `umur`, `alamat`, `lat`, `lng`) VALUES
(1, 'Fauziah Mudawamah', 30, 'Nglundu rt:03/01, Denggungan, Banyudono, Boyolali', '-7.52103800', '110.71182050'),
(2, ' Titik Setyaning Rejeki', 27, 'Dalatan rt: 04/5, Gawanan, Colomadu, Karanganyar', '-7.52926690', '110.76541810'),
(3, 'Diana Ayu hapsari', 24, 'Cinderejo Kidul rt:6/8, Gilingan, Banjarsari, Solo', '-7.55601960', '110.81826730'),
(4, 'Siti', 21, 'Krajan, rt:01/03, Cokroyasan, Ngombol, Purworejo', '-7.80444150', '109.92240210');

-- --------------------------------------------------------

--
-- Table structure for table `peta`
--

CREATE TABLE `peta` (
  `id_peta` int(5) NOT NULL,
  `lokasi` varchar(30) NOT NULL,
  `lat` decimal(10,8) NOT NULL,
  `lng` decimal(11,8) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `peta`
--

INSERT INTO `peta` (`id_peta`, `lokasi`, `lat`, `lng`) VALUES
(50001, 'RSUD dr. Muwardi', '-7.55848100', '110.77899400');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id_admin`),
  ADD KEY `fk_berita` (`id_berita`);

--
-- Indexes for table `berita`
--
ALTER TABLE `berita`
  ADD PRIMARY KEY (`id_berita`);

--
-- Indexes for table `data_dokter`
--
ALTER TABLE `data_dokter`
  ADD PRIMARY KEY (`nik`);

--
-- Indexes for table `dokter`
--
ALTER TABLE `dokter`
  ADD PRIMARY KEY (`nik`),
  ADD KEY `fk_peta` (`id_peta`);

--
-- Indexes for table `menu`
--
ALTER TABLE `menu`
  ADD PRIMARY KEY (`id_menu`);

--
-- Indexes for table `menu_user`
--
ALTER TABLE `menu_user`
  ADD PRIMARY KEY (`id_menu`);

--
-- Indexes for table `pasien`
--
ALTER TABLE `pasien`
  ADD PRIMARY KEY (`id_pasien`);

--
-- Indexes for table `peta`
--
ALTER TABLE `peta`
  ADD PRIMARY KEY (`id_peta`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id_admin` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10013;
--
-- AUTO_INCREMENT for table `berita`
--
ALTER TABLE `berita`
  MODIFY `id_berita` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `data_dokter`
--
ALTER TABLE `data_dokter`
  MODIFY `nik` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1016;
--
-- AUTO_INCREMENT for table `menu`
--
ALTER TABLE `menu`
  MODIFY `id_menu` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `menu_user`
--
ALTER TABLE `menu_user`
  MODIFY `id_menu` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `admin`
--
ALTER TABLE `admin`
  ADD CONSTRAINT `fk_berita` FOREIGN KEY (`id_berita`) REFERENCES `berita` (`id_berita`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `dokter`
--
ALTER TABLE `dokter`
  ADD CONSTRAINT `fk_peta` FOREIGN KEY (`id_peta`) REFERENCES `peta` (`id_peta`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

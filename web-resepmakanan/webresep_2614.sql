-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 01, 2023 at 08:12 AM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.1.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `webresep_2614`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id_admin` int(11) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id_admin`, `username`, `password`) VALUES
(1, 'admin', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `katalog_resep`
--

CREATE TABLE `katalog_resep` (
  `resep_id` int(11) NOT NULL,
  `resep_gambar` varchar(200) NOT NULL,
  `resep_judul` varchar(50) NOT NULL,
  `resep_deskripsi` varchar(200) NOT NULL,
  `resep_bahan` text NOT NULL,
  `resep_langkah` text NOT NULL,
  `resep_tanggal` date NOT NULL,
  `resep_waktu` varchar(15) NOT NULL,
  `kategori_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `katalog_resep`
--

INSERT INTO `katalog_resep` (`resep_id`, `resep_gambar`, `resep_judul`, `resep_deskripsi`, `resep_bahan`, `resep_langkah`, `resep_tanggal`, `resep_waktu`, `kategori_id`) VALUES
(18, 'hero-header.png', 'Ramen Khas Jepang', 'Berikut adalah resep dasar untuk membuat ramen Jepang. Kamu dapat menyesuaikan bahan dan topping sesuai dengan preferensi kamu.', '200 gram mie ramen) 4 cangkir kaldu ayam atau kaldu dashi 2 sendok makan minyak wijen 2 sendok makan kecap asin 1 sendok makan kecap manis', '- Rebus mie ramen - Panaskan minyak wijen - Tuangkan kaldu ke dalam panci dan biarkan mendidih - Tambahkan kecap asin, kecap manis, garam, dan merica - Tuangkan kaldu panas ke dalam mangkuk dengan mie ramen', '2023-11-10', '< 60 Menit', 1),
(19, 'toffes-cake.png', 'Toffes Cake', 'Toffees Cake adalah kue yang menggabungkan rasa manis dari toffees (permen caramel) dengan kelezatan kue yang lembut dan moist. Kue ini memiliki dua komponen utama: bagian kue itu sendiri dan toping.', '200 gram tepung terigu, 200 gram gula pasir, 200 gram mentega, 4 butir telur, 2 sendok makan bubuk kakao, 1 sendok teh baking powder, 1 sendok teh vanili, 3 sendok makan susu cair, 50 gram toffees (permen caramel), cincang kasar,', '- Panaskan oven hingga 180°C (tergantung pada oven masing-masing). - Campur tepung terigu, bubuk kakao, dan baking powder. Saring campuran ini agar halus. - Kocok mentega dan gula pasir hingga lembut dan berwarna terang. -Tambahkan telur satu per satu sambil terus dikocok. - Masukkan campuran tepung terigu sedikit demi sedikit sambil terus diaduk hingga merata. - Tambahkan vanili dan susu cair, aduk kembali. - Terakhir, masukkan toffees yang sudah dicincang kasar ke dalam adonan. - Tuang adonan ke dalam loyang yang telah diolesi mentega dan dialasi kertas roti. - Panggang dalam oven yang telah dipanaskan selama sekitar 30-40 menit atau hingga kue matang.', '2023-11-02', '> 60 Menit', 2),
(20, 'taco-bell.png', 'Tacos ala Taco Bell', 'Tacos adalah hidangan yang terdiri dari kulit tortilla yang diisi dengan berbagai macam bahan, seperti daging cincang, ayam, ikan, sayuran, keju, saus, dan berbagai bumbu dan rempah-rempah.', '500 gram daging sapi cincang, 1 bungkus bumbu Tacos (Taco seasoning mix), 1/2 cangkir air1 cangkir keju cheddar parut, 1 cangkir selada keriting, cincang halus, 1/2 cangkir tomat, cincang, 1/4 cangkir bawang merah, cincang halus, 1/4 cangkir saus tomat, 1/4 cangkir saus asam manis (sour cream),', '- Panaskan wajan besar dan tumis daging sapi cincang hingga berwarna cokelat dan matang. Pastikan untuk memecahnya menjadi bagian-bagian kecil saat memasak. - Setelah daging matang, tambahkan bumbu Tacos ke dalam wajan. Campurkan bumbu dengan daging dan aduk rata. - Tuangkan air ke dalam wajan dan biarkan daging meresap bumbu dengan baik. Masak selama beberapa menit hingga daging menjadi beraroma dan bumbu meresap. - Panaskan kulit tortilla dalam microwave atau oven sesuai petunjuk kemasan hingga hangat. - Letakkan daging sapi cincang yang telah dibumbui di tengah-tengah kulit tortilla. - Tambahkan keju cheddar parut, selada keriting cincang, tomat, dan bawang merah di atas', '2023-11-03', '> 60 Menit', 1),
(21, 'thai-soup.png', 'Sup Tom Yum khas Thai', 'Sup Tom Yum adalah sup pedas dan asam yang khas dari Thailand. Hidangan ini terkenal karena kombinasi unik rasa pedas, asam, manis, dan gurih. Sup Tom Yum biasanya disiapkan dengan kaldu ayam.        ', '4 cangkir kaldu ayam atau sayuran, 200 gram udang, dikupas dan dibersihkan, 200 gram daging ayam atau tahu, potong dadu, 200 gram jamur shiitake, iris tipis, 2 batang serai, memarkan, 3 lembar daun jeruk, sobek-sobek, 3 siung bawang putih, cincang halus', 'Panaskan minyak dalam panci besar. Tumis bawang putih, jahe, dan cabai merah hingga harum. Tambahkan pasta Tom Yum ke dalam minyak dan aduk rata. Pasta ini memberikan rasa khas sup Tom Yum. Tuangkan kaldu ayam atau sayuran ke dalam panci. Biarkan mendidih. Masukkan daging ayam atau tahu, udang, jamur shiitake, serai, dan daun jeruk. Rebus hingga daging ayam matang dan udang berubah warna menjadi merah muda. Tambahkan kecap ikan, gula merah, dan susu kelapa (jika digunakan). Aduk rata.', '2023-11-23', '< 60 Menit', 1);

-- --------------------------------------------------------

--
-- Table structure for table `kategori_resep`
--

CREATE TABLE `kategori_resep` (
  `kategori_id` int(11) NOT NULL,
  `kategori_nama` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `kategori_resep`
--

INSERT INTO `kategori_resep` (`kategori_id`, `kategori_nama`) VALUES
(1, 'Main Dishes'),
(2, 'Desserts'),
(3, 'Snacks'),
(4, 'Fast Food'),
(5, 'Healthy Food'),
(6, 'Drink');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id_admin`);

--
-- Indexes for table `katalog_resep`
--
ALTER TABLE `katalog_resep`
  ADD PRIMARY KEY (`resep_id`),
  ADD KEY `fk_kategori_id` (`kategori_id`);

--
-- Indexes for table `kategori_resep`
--
ALTER TABLE `kategori_resep`
  ADD PRIMARY KEY (`kategori_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id_admin` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `katalog_resep`
--
ALTER TABLE `katalog_resep`
  MODIFY `resep_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `katalog_resep`
--
ALTER TABLE `katalog_resep`
  ADD CONSTRAINT `fk_kategori_id` FOREIGN KEY (`kategori_id`) REFERENCES `kategori_resep` (`kategori_id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

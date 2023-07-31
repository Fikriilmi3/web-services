-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 20, 2023 at 11:07 AM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.0.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `web-services`
--

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `id` varchar(50) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `level` varchar(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`id`, `nama`, `username`, `password`, `level`) VALUES
('A003', 'Admin', 'admin', '1234', 'Super Admin'),
('A004', 'Admin', 'admin2', '1234', 'Admin');

-- --------------------------------------------------------

--
-- Table structure for table `tb_hasil`
--

CREATE TABLE `tb_hasil` (
  `id` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `id_kategori` int(11) NOT NULL,
  `id_umur` int(11) NOT NULL,
  `jumlah_ya` varchar(50) NOT NULL,
  `jumlah_tidak` varchar(50) NOT NULL,
  `hasil` varchar(100) NOT NULL,
  `saran` varchar(500) NOT NULL,
  `tgl_tes` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tb_hasil`
--

INSERT INTO `tb_hasil` (`id`, `id_user`, `id_kategori`, `id_umur`, `jumlah_ya`, `jumlah_tidak`, `hasil`, `saran`, `tgl_tes`) VALUES
(27, 9, 1, 5, '8', '1', 'Perkembangan anak meragukan (M)', 'Lakukan stimulasi perkembangan pada anak lebih sering lagi, setiap saat dan sesering mungkin. Lakukan pemeriksaan kesehatan untuk mencari kemungkinan adanya penyakit yang menyebabkan penyimpangan.', '2023-06-07'),
(28, 9, 6, 11, '18', '0', 'Normal, tidak ada masalah GPPH (S)', 'Pertahankan pola asuh anak sesuai dengan tahap perkembangan anak, beri stimulasi perkembangan anak setiap saat, sesering mungkin, sesuai dengan umur dan kesiapan anak.', '2023-06-07'),
(29, 9, 2, 8, '2', '0', 'Daya dengar anak meragukan (M)', 'Lakukan stimulasi perkembangan pada anak lebih sering lagi, setiap saat dan sesering mungkin. Lakukan pemeriksaan kesehatan untuk mencari kemungkinan adanya penyakit yang menyebabkan penyimpangan.', '2023-06-08'),
(32, 9, 5, 9, '9', '0', 'Ada kemungkinan gangguan perkembangan lain (M)', 'Lakukan konseling kepada orang tua, evaluasi setelah 3 bulan, bila tidak ada perubahan rujuk ke Rumah Sakit yang memberi pelayanan rujukan tumbuh kembang/memiliki fasilitas pelayanan kesehatan jiwa.', '2023-06-08'),
(40, 26, 1, 4, '8', '1', 'Perkembangan anak meragukan (M)', 'Lakukan stimulasi perkembangan pada anak lebih sering lagi, setiap saat dan sesering mungkin. Lakukan pemeriksaan kesehatan untuk mencari kemungkinan adanya penyakit yang menyebabkan penyimpangan.', '2023-06-13'),
(41, 27, 2, 8, '2', '0', 'Daya dengar anak meragukan (M)', 'Lakukan stimulasi perkembangan pada anak lebih sering lagi, setiap saat dan sesering mungkin. Lakukan pemeriksaan kesehatan untuk mencari kemungkinan adanya penyakit yang menyebabkan penyimpangan.', '2023-06-13'),
(42, 28, 1, 5, '9', '0', 'Perkembangan anak meragukan (M)', 'Lakukan stimulasi perkembangan pada anak lebih sering lagi, setiap saat dan sesering mungkin. Lakukan pemeriksaan kesehatan untuk mencari kemungkinan adanya penyakit yang menyebabkan penyimpangan.', '2023-06-13'),
(45, 9, 1, 1, '9', '1', 'Perkembangan anak meragukan (M)', 'Lakukan stimulasi perkembangan pada anak lebih sering lagi, setiap saat dan sesering mungkin. Lakukan pemeriksaan kesehatan untuk mencari kemungkinan adanya penyakit yang menyebabkan penyimpangan.', '2023-06-16'),
(46, 9, 5, 9, '14', '0', 'Normal (S)', 'Pertahankan pola asuh anak sesuai dengan tahap perkembangan anak, beri stimulasi perkembangan anak setiap saat, sesering mungkin, sesuai dengan umur dan kesiapan anak.', '2023-06-16'),
(47, 40, 6, 11, '21', '0', 'Normal, tidak ada masalah GPPH (S)', 'Pertahankan pola asuh anak sesuai dengan tahap perkembangan anak, beri stimulasi perkembangan anak setiap saat, sesering mungkin, sesuai dengan umur dan kesiapan anak.', '2023-06-13'),
(48, 38, 5, 9, '14', '0', 'Normal (S)', 'Pertahankan pola asuh anak sesuai dengan tahap perkembangan anak, beri stimulasi perkembangan anak setiap saat, sesering mungkin, sesuai dengan umur dan kesiapan anak.', '2023-06-16');

-- --------------------------------------------------------

--
-- Table structure for table `tb_kategori_soal`
--

CREATE TABLE `tb_kategori_soal` (
  `id` int(11) NOT NULL,
  `id_modul` int(11) NOT NULL,
  `nama_kategori` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tb_kategori_soal`
--

INSERT INTO `tb_kategori_soal` (`id`, `id_modul`, `nama_kategori`) VALUES
(1, 1, 'KPSP'),
(2, 1, 'TDD'),
(3, 1, 'TDL'),
(4, 2, 'KMME'),
(5, 2, 'CHAT'),
(6, 2, 'GPPH');

-- --------------------------------------------------------

--
-- Table structure for table `tb_modul`
--

CREATE TABLE `tb_modul` (
  `id` int(11) NOT NULL,
  `nama_modul` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tb_modul`
--

INSERT INTO `tb_modul` (`id`, `nama_modul`) VALUES
(1, 'Perkembangan'),
(2, 'Mental Emosional');

-- --------------------------------------------------------

--
-- Table structure for table `tb_soal`
--

CREATE TABLE `tb_soal` (
  `id` int(11) NOT NULL,
  `id_kategori` int(11) NOT NULL,
  `id_umur` int(11) NOT NULL,
  `no_pertanyaan` int(11) NOT NULL,
  `pertanyaan` varchar(500) NOT NULL,
  `gambar` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tb_soal`
--

INSERT INTO `tb_soal` (`id`, `id_kategori`, `id_umur`, `no_pertanyaan`, `pertanyaan`, `gambar`) VALUES
(1, 1, 1, 1, 'Jika anda sedang melakukan pekerjaan rumah tangga, apakah anak meniru apa yang anda lakukan?', ''),
(2, 1, 1, 2, 'Apakah anak dapat meletakkan 1 buah kubus di atas kubus yang lain tanpa menjatuhkan kubus itu? Kubus yang digunakan ukuran 2.5 - 5 cm.', ''),
(3, 1, 1, 3, 'Apakah anak dapat mengucapkan paling sedikit 3 kata yang mempunyai arti selain \"papa\" dan \"mama\"?', ''),
(4, 1, 1, 4, 'Apakah anak dapat berjalan mundur 5 langkah atau lebih tanpa kehilangan keseimbangan? (Anda mungkin dapat melihatnya ketika anak menarik mainannya).', ''),
(5, 1, 1, 5, 'Dapatkah anak melepas pakaiannya seperti : baju, rok, atau celananya? (topi dan kaos kaki tidak ikut dinilai).', ''),
(6, 1, 1, 6, 'Dapatkah anak berjalan naik tangga sendiri? Jawab YA jika ia naik tangga dengan posisi tegak atau berpegangan pada dinding atau pegangan tangga. Jawab TIDAK jika ia naik tangga dengan merangkak tau anda tidak membolehkan anak naik tangga atau anak harus berpegangan pada seseorang.', ''),
(7, 1, 1, 7, 'Tanpa bimbingan, petunjuk atau bantuan anda, dapatkah anak menunjuk dengan benar paling sedikit satu bagian badannya (rambut, mata, hidung, mulut, atau bagian badan yang lain)?', ''),
(8, 1, 1, 8, 'Dapatkah anak makan nasi sendiri tanpa banyak tumpah?', ''),
(9, 1, 1, 9, 'Dapatkah anak membantu memungut mainannya sendiri atau membantu mengangkat piring jika diminta?', ''),
(10, 1, 1, 10, 'Dapatkah anak menendang bola kecil (sebesar bola tenis) ke depan tanpa berpegangan pada apapun? Mendorong tidak ikut dinilai', ''),
(11, 1, 2, 1, 'Dapatkah anak melepas pakaiannya seperti: baju, rok, atau celananya? (topi dan kaos kaki tidak ikut dinilai)', ''),
(12, 1, 2, 2, 'Dapatkah anak berjalan naik tangga sendiri? Jawab YA jika ia naik tangga dengan posisi tegak atau berpegangan pada dinding atau pegangan tangga. Jawab TIDAK jika ia naik tangga dengan merangkak atau anda tidak membolehkan anak naik tangga atau anak harus berpegangan pada seseorang.', ''),
(13, 1, 2, 3, 'Tanpa bimbingan, petunjuk atau bantuan anda, dapatkah anak menunjuk dengan benar paling sedikit satu bagian badannya (rambut, mata, hidung, mulut, atau bagian badan yang lain)?', ''),
(14, 1, 2, 4, 'Dapatkah anak makan nasi sendiri tanpa banyak tumpah?', ''),
(15, 1, 2, 5, 'Dapatkah anak membantu memungut mainannya sendiri atau membantu mengangkat piring jika diminta?', ''),
(16, 1, 2, 6, 'Dapatkah anak menendang bola kecil (sebesar bola tenis) ke depan tanpa berpegangan pada apapun? Mendorong tidak ikut dinilai', ''),
(17, 1, 2, 7, 'Bila diberi pensil, apakah anak mencoret-coret kertas tanpa bantuan/petunjuk?', ''),
(18, 1, 2, 8, 'Dapatkah anak meletakkan 4 buah kubus satu persatu di atas kubus yang lain tanpa menjatuhkan kubus itu? Kubus yang digunakan ukuran 2.5 – 5 cm', ''),
(19, 1, 2, 9, 'Dapatkah anak menggunakan 2 kata pada saat berbicara seperti “minta minum”, “mau tidur”?\r\n“Terimakasih” dan “Dadag” tidak ikut dinilai\r\n', ''),
(20, 1, 2, 10, 'Apakah anak dapat menyebut 2 diantara gambar-gambar ini tanpa bantuan? (Menyebut dengan suara binatang tidak ikut dinilai).', 'http://192.168.0.2/web-services/assets/gambar/1.png'),
(21, 1, 3, 1, 'Bila diberi pensil, apakah anak mencoret-coret kertas tanpa bantuan/petunjuk?', ''),
(22, 1, 3, 2, 'Dapatkah anak meletakkan 4 buah kubus satu persatu di atas kubus yang lain tanpa menjatuhkan kubus itu? Kubus yang digunakan ukuran 2.5 - 5 cm.', ''),
(23, 1, 3, 3, 'Dapatkah anak menggunakan 2 kata pada saat berbicara seperti \"minta minum\", \"mau tidur\"? \"Terimakasih\" dan \"Dadag\" tidak ikut dinilai.\r\n', ''),
(24, 1, 3, 4, 'Apakah anak dapat menyebut 2 diantara gambar-gambar ini tanpa bantuan? \r\n \r\n(Menyebut dengan suara binatang tidak ikut dinilai).\r\n', 'http://192.168.0.2/web-services/assets/gambar/1.png'),
(25, 1, 3, 5, 'Dapatkah anak melempar bola lurus ke arah perut atau dada anda dari jarak 1,5 meter?\r\n', ''),
(26, 1, 3, 6, 'Ikuti perintah ini dengan seksama. Jangan memberi isyarat dengan telunjuk atau mata pada saat memberikan perintah berikut ini : \r\n\"Letakkan kertas ini di lantai\", \r\n\"Letakkan kertas ini di kursi\", \r\n\"Berikan kertas ini kepada ibu\". \r\nDapatkah anak melaksanakan ketiga perintah tadi?\r\n', ''),
(27, 1, 3, 7, 'Buat garis lurus ke bawah sepanjang sekurang-kurangnya 2,5 cm. Suruh anak menggambar garis lain di samping garis ini.  \r\n', 'http://192.168.0.2/web-services/assets/gambar/6.png'),
(28, 1, 3, 8, 'Letakkan selembar kertas seukuran buku ini di lantai. Apakah anak dapat melompati bagian lebar kertas dengan mengangkat kedua kakinya secara bersamaan tanpa didahului lari?', ''),
(29, 1, 3, 9, 'Dapatkah anak mengenakan sepatunya sendiri?', ''),
(30, 1, 3, 10, 'Dapatkah anak mengayuh sepeda roda tiga sejauh sedikitnya 3 meter?', ''),
(31, 1, 4, 1, 'Dapatkah anak mengenakan sepatunya sendiri?', ''),
(32, 1, 4, 2, 'Dapatkah anak mengayuh sepeda roda tiga sejauh sedikitnya 3 meter?', ''),
(33, 1, 4, 3, 'Setelah makan, apakah anak mencuci dan mengeringkan tangannya dengan baik sehingga anda tidak perlu mengulanginya?', ''),
(34, 1, 4, 4, 'Suruh anak berdiri satu kaki tanpa berpegangan. Jika perlu tunjukkan caranya dan beri anak anda kesempatan melakukannya 3 kali. Dapatkah ia mempertahankan keseimbangan dalam waktu 2 detik atau lebih?', ''),
(35, 1, 4, 5, 'Letakkan selembar kertas seukuran buku ini di lantai. Apakah anak dapat melompati Panjang kertas ini dengan mengangkat kedua kakinya secara bersamaan tanpa didahului lari?', ''),
(36, 1, 4, 6, 'Jangan membantu anak dan jangan menyebut lingkaran. Suruh anak menggambar seperti contoh ini di kertas yang tersedia. Dapatkah anak menggambar lingkaran?\r\n \r\nJawab : YA\r\n \r\nJawab : TIDAK\r\n', ''),
(37, 1, 4, 7, 'Dapatkah anak meletakkan 8 buah kubus satu persatu di atas yang lain tanpa menjatuhkan kubus tersebut? Kubus yang digunakan ukuran 2.5 – 5 cm.', ''),
(38, 1, 4, 8, 'Apakah anak dapat bermain petak umpet, ular naga atau permainan lain dimana ia ikut bermain dan mengikuti aturan bermain?', ''),
(39, 1, 4, 9, 'Dapatkah anak mengenakan celana Panjang, kemeja, baju, atau kaos kaki tanpa dibantu? (Tidak termasuk memasang kancing, gesper atau ikat pinggang)', ''),
(40, 1, 5, 1, 'Dapatkah anak mengayuh sepeda roda tiga sejauh sedikitnya 3 meter?', ''),
(41, 1, 5, 2, 'Setelah makan, apakah anak mencuci dan mengeringkan tangannya dengan baik sehingga anda tidak perlu mengulanginya?', ''),
(42, 1, 5, 3, 'Suruh anak berdiri satu kaki tanpa berpegangan. Jika perlu tunjukkan caranya dan beri anak anda kesempatan melakukannya 3 kali. Dapatkah ia mempertahankan keseimbangan dalam waktu 2 detik atau lebih?', ''),
(43, 1, 5, 4, 'Letakkan selembar kertas seukuran buku ini di lantai. Apakah anak dapat melompati panjang kertas ini dengan mengangkat kedua kakinya secara bersamaan tanpa didahului lari?', ''),
(44, 1, 5, 5, 'Jangan membantu anak dan jangan menyebut lingkaran. Suruh anak menggambar seperti contoh ini di kertas kosong yang tersedia. Apakah anak dapat menggambar lingkaran? \r\n \r\nJawab : YA\r\n \r\n Jawab : TIDAK\r\n', ''),
(45, 1, 5, 6, 'Dapatkah anak meletakkan 8 buah kubus satu persatu di atas yang lain tanpa menjatuhkan kubus tersebut? Kubus yang digunakan ukuran 2,5 - 5 cm.', ''),
(46, 1, 5, 7, 'Apakah anak dapat bermain petak umpet, ular naga atau permainan lain dimana ia ikut bermain dan mengikuti aturan bermain?', ''),
(47, 1, 5, 8, 'Dapatkah anak mengenakan celana panjang, kemeja, baju atau kaos kaki tanpa dibantu? (Tidak termasuk memasang kancing, gesper atau ikat pinggang)', ''),
(48, 1, 5, 9, 'Dapatkah anak menyebutkan nama lengkapnya tanpa dibantu? Jawab TIDAK jika ia hanya menyebut sebagian namanya atau ucapannya sulit dimengerti.', ''),
(49, 2, 6, 1, 'Pada waktu anak tidur kemudian anda berbicara atau membuat kegaduhan, apakah anak akan bergerak atau terbangun dari tidurnya ?', ''),
(50, 2, 6, 2, 'Pada waktu anak tidur telentang dan anda duduk di dekat kepala anak pada posisi yang tidak terlihat oleh anak, kemudian anda bertepuk tangan dengan keras, apakah anak terkejut atau mengedipkan matanya atau menegangkan tubuh sambil mengangkat kaki tangannya ke atas ?', ''),
(51, 2, 6, 3, 'Apabila ada suara nyaring (missal suara batuk, suara anjing, piring jatuh ke lantai dan lain-lainnya), apakah anak terkejut atau terlompat ?', ''),
(52, 2, 6, 4, 'Tanpa terlihat oleh anak buat suara yang menarik perhatian anak, apakah anak langsung mengetahui posisi anda sebagai sumber suara yang berpindah-pindah ?', ''),
(53, 2, 6, 5, 'Ucapkan kata-kata yang mudah dan sederhana, dapatkan anak menirukan anda ?', ''),
(54, 2, 7, 1, 'Tutup mulut anda dengan buku/kertas, tanpa melihat gerakan bibir anda, tanyakan pada anak: “Pegang matamu”, “Pegang kakimu”. Apakah anak memegang mata dan kakinya dengan benar ?', ''),
(55, 2, 7, 2, 'Pilih gambar dari majalah/buku bergambar. Tutup mulut anda dengan buku/kertas, tanpa melihat Gerakan bibir anda, tanyakan pada anak: “Tunjukkan gambar kucing (atau anjing, kuda, mobil, orang rumah, bunga dan sebagainya)?” Dapatkah anak menunjukkan gambar yang dimaksud dengan benar ?', ''),
(56, 2, 7, 3, 'Tutup mulut anda dengan buku/kertas, tanpa melihat gerakan bibir anda, perintahkan anak untuk mengerjakan sesuatu seperti: “Berikan boneka itu kepada saya”, “Taruh kubus-kubus ini di atas meja/kursi”, dan sebagainya. Apakah anak dapat mengerjakan perintah tersebut dengan benar ?', ''),
(57, 2, 8, 1, 'Perlihatkan benda-benda yang ada di sekeliling anak seperti sendok, cangkir, bola, bunga dan sebagainya. Suruh anak menyebutkan nama benda-benda tersebut. Apakah anak dapat menyebutkan nama benda-benda tersebut dengan benar ?', ''),
(58, 2, 8, 2, 'Suruh anak duduk, anda duduk dalam jarak 3 meter di depan anak. Suruh anak mengulangi angka-angka yang telah anda ucapkan: “Empat”, “Satu”, “Delapan” atau menirukan dengan menggunakan jari tangannya. Kemudian tutup mulut anda dengan buku/kertas, ucapkan 4 angka yang berlainan. Apakah anak dapat mengulangi atau menirukan ucapan anda dengan menggunakan jari tangannya ? (Anda dapat mengulanginya dengan suara yang lebih keras)', ''),
(59, 3, 10, 1, 'Buatlah poster huruf “E” menghadap ke atas, ke bawah, kiri dan kanan dengan ukuran huruf sebesar kertas A5 pada baris pertama, dan pada baris ke 2 buatlah huruf “E” yang lebih kecil dari baris pertama, sampai dengan baris ke 4 dengan ukuran huruf terkecil.', ''),
(60, 3, 10, 2, 'Gantung poster “E” yang telah dibuat setinggi mata anak pada posisi duduk.', ''),
(61, 3, 10, 3, 'Letakkan sebuah kursi sejauh 3meter dari poster “E” menghadap ke poster “E”.', ''),
(62, 3, 10, 4, 'Pemeriksa memberi kartu “E” pada anak, latih anak dalam mengarahkan kartu “E” yang dipegangnya menghadap atas, bawah, kanan dan kiri sesuai yang ditunjuk oleh pemeriksa di poster “E” yang digantung tadi. Beri pujian setiap anak mau melakukan.', ''),
(63, 3, 10, 5, 'Lakukan soal ke 4 sampai anak dapat mengarahkan kartu “E” dengan benar.', ''),
(64, 3, 10, 6, 'Selanjutnya anak diminta menutup sebelah matanya dengan buku atau kertas.', ''),
(65, 3, 10, 7, 'Dengan alat penunjuk, tunjuk huruf “E” pada poster satu persatu, mulai dari baris pertama sampai baris ke 4 atau baris “E” terkecil yang masih dapat dilihat.', ''),
(66, 3, 10, 8, 'Puji anak setiap kali dapat mencocokkan posisi kartu “E” yang dipegangnya dengan huruf “E” pada poster.', ''),
(67, 3, 10, 9, 'Ulangi pemeriksaan tersebut pada mata satunya dengan cara yang sama.', ''),
(68, 4, 11, 1, 'Apakah anak anda seringkali terlihat marah tanpa sebab yang jelas ? (seperti banyak menangis, mudah tersinggung atau bereaksi berlebihan terhadap hal-hal yang sudah biasa dihadapinya)', ''),
(69, 4, 11, 2, 'Apakah anak anda tampak menghindar dari teman-teman atau anggota keluarganya ? (seperti ingin merasa sendirian, menyendiri atau merasa sedih sepanjang waktu, kehilangan minat terhadap hal-hal yang biasa sangat dinikmati)', ''),
(70, 4, 11, 3, 'Apakah anak anda terlihat berperilaku merusak dan menentang terhadap lingkungan di sekitarnya? (seperti melanggar peraturan yang ada, mencuri, seringkali melakukan perbuatan yang berbahaya bagi dirinya, atau menyiksa binatang atau anak-anak lainnya) dan tampak tidak peduli dengan nasihat-nasihat yang sudah diberikan kepadanya?', ''),
(71, 4, 11, 4, 'Apakah anak anda memperlihatkan adanya perasaan ketakutan atau kecemasan berlebihan yang tidak dapat dijelaskan asalnya dan tidak sebanding dengan anak lain seusianya?', ''),
(72, 4, 11, 5, 'Apakah anak anda mengalami keterbatasan oleh karena adanya konsentrasi yang buruk atau mudah teralih perhatiannya, sehingga mengalami penurunan dalam aktivitas sehari-hari atau prestasi belajarnya?', ''),
(73, 4, 11, 6, 'Apakah anak anda menunjukkan perilaku kebingungan sehingga mengalami kesulitan dalam berkomunikasi dan membuat keputusan?', ''),
(74, 4, 11, 7, 'Apakah anak anda menunjukkan adanya perubahan pola tidur? (seperti sulit tidur sepanjang waktu, terjaga sepanjang hari, sering terbangun di waktu tidur malam oleh karena mimpi buruk, mengigau)', ''),
(75, 4, 11, 8, 'Apakah anak anda mengalami perubahan pola makan? (seperti kehilangan nafsu makan, makan berlebihan atau tidak mau makan sama sekali)', ''),
(76, 4, 11, 9, 'Apakah anak anda seringkali mengeluh sakit kepala, sakit perut atau keluhan-keluhan fisik lainnya?', ''),
(77, 4, 11, 10, 'Apakah anak anda seringkali mengeluh putus asa atau berkeinginan untuk mengakhiri hidupnya?', ''),
(78, 4, 11, 11, 'Apakah anak anda menunjukkan adanya kemunduran perilaku atau kemampuan yang sudah dimilikinya? (seperti mengompol kembali, menghisap jempol, atau tidak mau berpisah dengan orangtua/pengasuhnya)', ''),
(79, 4, 11, 12, 'Apakah anak anda melakukan perbuatan yang berulang-ulang tanpa alasan yang jelas?', ''),
(80, 5, 12, 1, 'Apakah anak senang diayun-ayun atau diguncang-guncang naik turun (bounched) di paha anda?', ''),
(91, 5, 12, 2, 'Apakah anak tertarik (memperhatikan) anak lain?', ''),
(92, 5, 12, 3, 'Apakah anak suka memanjat-manjat, seperti memanjat tangga?', ''),
(93, 5, 12, 4, 'Apakah anak suka bermain “ciluk ba”, “petak umpet”?', ''),
(94, 5, 12, 5, 'Apakah anak pernah bermain seolah-olah membuat secangkir the menggunakan mainan berbentuk cangkir dan teko, atau permainan lain?', ''),
(95, 5, 12, 6, 'Apakah anak pernah menunjukkan atau meminta sesuatu dengan menunjukkan jari?', ''),
(96, 5, 12, 7, 'Apakah anak pernah menggunakan jari untuk menunjukkan ke sesuatu agar anda melihat ke sana?', ''),
(97, 5, 12, 8, 'Apakah anak dapat bermain dengan mainan yang kecil (mobil atau kubus)?', ''),
(98, 5, 12, 9, 'Apakah anak pernah memberikan suatu benda untuk menunjukkan sesuatu?', ''),
(99, 5, 12, 10, 'Selama pemeriksaan apakah anak menatap (kontak mata) dengan pemeriksaan?', ''),
(100, 5, 12, 11, 'Usahakan menarik perhatian anak, kemudian pemeriksa menunjuk sesuatu di ruangan pemeriksaan sambil mengatakan: “Lihat itu ada bola (atau mainan lain)”!\r\nPerhatikan mata anak, apakah ia melihat ke benda yang ditunjuk, buak melihat tangan pemeriksa?\r\n', ''),
(101, 5, 12, 12, 'Usahakan menarik perhatian anak, berikan mainan gelas/cangkir dan teko, Katakan pada anak: “Buatkan secangkir susu buat mama”!', ''),
(102, 5, 12, 13, 'Tanyakan pada anak: “Tunjukan mana gelas”! (gelas dapat diganti dengan nama benda lain yang dikenal anak dan ada di sekitar kita). Apakah anak menunjukkan benda tersebut dengan jarinya? Atau sambil menatap wajah anda ketika menunjuk ke suatu benda?', ''),
(103, 5, 12, 14, 'Apakah anak dapat menumpuk beberapa kubus/balok menjadi suatu menara?', ''),
(104, 6, 11, 1, 'Tidak kenal lelah, atau aktivitas yang berlebihan', ''),
(105, 6, 11, 2, 'Mudah menjadi gembira, implusive', ''),
(106, 6, 11, 3, 'Mengganggu anak-anak lain', ''),
(107, 6, 11, 4, 'Gagal menyelesaikan kegiatan yang telah dimulai, rentang perhatian pendek', ''),
(108, 6, 11, 5, 'Menggerak-gerakkan anggota badan atau kepala secara terus menerus', ''),
(109, 6, 11, 6, 'Kurang perhatian, mudah teralihkan', ''),
(110, 6, 11, 7, 'Permintaannya harus segera dipenuhi, mudah menjadi frustasi', ''),
(111, 6, 11, 8, 'Sering dan mudah menangis', ''),
(112, 6, 11, 9, 'Suasana hatinya mudah berubah dengan cepat dan drastis', ''),
(113, 6, 11, 10, 'Ledakkan kekesalan, tingkah laku eksplosif dan tak terduga', '');

-- --------------------------------------------------------

--
-- Table structure for table `tb_status`
--

CREATE TABLE `tb_status` (
  `id_status` int(11) NOT NULL,
  `id_kategori` int(11) NOT NULL,
  `kode_status` varchar(2) NOT NULL,
  `status` varchar(255) NOT NULL,
  `saran` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tb_status`
--

INSERT INTO `tb_status` (`id_status`, `id_kategori`, `kode_status`, `status`, `saran`) VALUES
(1, 1, 'S', 'Perkembangan anak sesuai dengan tahap perkembangan (S)', 'Pertahankan pola asuh anak sesuai dengan tahap perkembangan anak, beri stimulasi perkembangan anak setiap saat, sesering mungkin, sesuai dengan umur dan kesiapan anak.'),
(2, 1, 'M', 'Perkembangan anak meragukan (M)', 'Lakukan stimulasi perkembangan pada anak lebih sering lagi, setiap saat dan sesering mungkin. Lakukan pemeriksaan kesehatan untuk mencari kemungkinan adanya penyakit yang menyebabkan penyimpangan.'),
(3, 1, 'P', 'Kemungkinan anak penyimpangan (P)', 'Perkembangan anak masuk kategori menyimpang, silahkan kunjungi pelayanan kesehatan dan lakukan stimulasi berikut ini sesering mungkin, lakukan penilaian ulang setiap 2 minggu sekali.'),
(4, 2, 'S', 'Daya dengar anak sesuai (S)', 'Pertahankan pola asuh anak sesuai dengan tahap perkembangan anak, beri stimulasi perkembangan anak setiap saat, sesering mungkin, sesuai dengan umur dan kesiapan anak.'),
(5, 2, 'M', 'Daya dengar anak meragukan (M)', 'Lakukan stimulasi perkembangan pada anak lebih sering lagi, setiap saat dan sesering mungkin. Lakukan pemeriksaan kesehatan untuk mencari kemungkinan adanya penyakit yang menyebabkan penyimpangan.'),
(6, 2, 'P', 'Kemungkinan anak penyimpangan (P)', 'Daya dengar anak masuk kategori menyimpang, silahkan kunjungi pelayanan kesehatan dan lakukan stimulasi berikut ini sesering mungkin, lakukan penilaian ulang setiap 2 minggu sekali.'),
(7, 3, 'S', 'Daya lihat anak sesuai (S)', 'Pertahankan pola asuh anak sesuai dengan tahap perkembangan anak, beri makanan sehat kaya akan vitamin A.'),
(8, 3, 'M', 'Daya lihat anak meragukan (M)', 'Lakukan pemeriksaan ulang pada anak lebih sering lagi.'),
(9, 3, 'P', 'Kemungkinan daya lihat anak penyimpangan (P)', 'Daya lihat anak masuk kategori menyimpang, silahkan rujuk ke rumah sakit dengan menuliskan mata yang mengalami gangguan.'),
(10, 4, 'S', 'Mental emosional normal (S)', 'Pertahankan pola asuh anak sesuai dengan tahap perkembangan anak, beri stimulasi perkembangan anak setiap saat, sesering mungkin, sesuai dengan umur dan kesiapan anak.'),
(11, 4, 'M', 'Ada kemungkinan gangguan masalah mental emosional (M)', 'Lakukan konseling kepada orang tua, evaluasi setelah 3 bulan, bila tidak ada perubahan rujuk ke Rumah Sakit yang memberi pelayanan rujukan tumbuh kembang/memiliki fasilitas pelayanan kesehatan jiwa.'),
(12, 4, 'P', 'Ada gangguan masalah mental emosional (P)', 'Mental Emosional anak masuk kategori menyimpang, rujuk ke Rumah Sakit yang memberi pelayanan rujukan tumbuh kembang / memiliki fasilitas pelayanan kesehatan jiwa dengan disertai masalah mental emosional yang ditemukan.'),
(13, 5, 'S', 'Normal (S)', 'Pertahankan pola asuh anak sesuai dengan tahap perkembangan anak, beri stimulasi perkembangan anak setiap saat, sesering mungkin, sesuai dengan umur dan kesiapan anak.'),
(14, 5, 'M', 'Ada kemungkinan gangguan perkembangan lain (M)', 'Lakukan konseling kepada orang tua, evaluasi setelah 3 bulan, bila tidak ada perubahan rujuk ke Rumah Sakit yang memberi pelayanan rujukan tumbuh kembang/memiliki fasilitas pelayanan kesehatan jiwa.'),
(15, 5, 'P', 'Beresiko tinggi menderita autis (P)', 'Anak memiliki risiko tinggi autism, rujuk ke Rumah Sakit yang memberi pelayanan rujukan tumbuh kembang anak.'),
(16, 6, 'S', 'Normal, tidak ada masalah GPPH (S)', 'Pertahankan pola asuh anak sesuai dengan tahap perkembangan anak, beri stimulasi perkembangan anak setiap saat, sesering mungkin, sesuai dengan umur dan kesiapan anak.'),
(17, 6, 'M', 'Ada kemungkinan masalah GPPH (M)', 'Lakukan pemeriksaan ulang 1 bulan kemudian. Ajukan pertanyaan kepada orang-orang terdekat dengan anak (orang tua, pengasuh, nenek, dsb)'),
(18, 6, 'P', 'Ada masalah GPPH (P)', 'Lakukan rujukan ke Rumah Sakit yang memberi pelayanan rujukan tumbuh kembang / memiliki fasilitas pelayanan kesehatan untuk konsultasi dan lebih lanjut.');

-- --------------------------------------------------------

--
-- Table structure for table `tb_umur`
--

CREATE TABLE `tb_umur` (
  `id` int(11) NOT NULL,
  `umur` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tb_umur`
--

INSERT INTO `tb_umur` (`id`, `umur`) VALUES
(1, '24 bulan'),
(2, '30 bulan'),
(3, '36 bulan'),
(4, '42 bulan'),
(5, '48 bulan'),
(6, '12 - 24 bulan'),
(7, '2-3 tahun'),
(8, '3 tahun'),
(9, '18-36 bulan'),
(10, '36-72 bulan'),
(11, '18-72 bulan'),
(12, 'Alo anamnesis'),
(13, 'Pengamatan');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `username` varchar(50) DEFAULT NULL,
  `nama_anak` varchar(50) NOT NULL,
  `jenis_kelamin` varchar(50) NOT NULL,
  `tempat_lahir` varchar(50) NOT NULL,
  `tgl_lahir` varchar(50) NOT NULL,
  `nama_ibu` varchar(50) NOT NULL,
  `telepone` varchar(50) NOT NULL,
  `password` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `username`, `nama_anak`, `jenis_kelamin`, `tempat_lahir`, `tgl_lahir`, `nama_ibu`, `telepone`, `password`) VALUES
(9, 'Alin', 'Aisya Syifa Alina Rahman', 'Perempuan', 'Yogyakarta', '2019-01-14', 'Khusnul Khotima', '082234055684', '8df03bca3f48d310f74fe6092af08c95'),
(17, 'Aila', 'Aila Sa’adatul Khoiro', 'Perempuan', 'Lumajang', '2019-08-01', 'Siti Khotijah', '081222333444', '124c8d12d4804eeb61359d06ff6b174f'),
(18, 'Aprilia', 'Aprilia Putri Sakinah', 'Perempuan', 'Lumajang', '2019-04-04', 'Viona Wulandari', '081222333444', 'ef9638c9b59e2e2e0ef3f830ef885f81'),
(19, 'Arsya', 'Arsya Malik Hamdani', 'Laki-laki', 'Lumajang', '2019-01-18', 'Ponima', '081222333444', '6582c680591052c3bed506891a0560be'),
(20, 'Athallah', 'Athallah Bahtiar Surendra', 'Laki-laki', 'Lumajang', '2019-10-01', 'Yulianti', '081222333444', '87609bba68062a90bf47467b643ec9a4'),
(21, 'Atika', 'Atika Niswatun Sholihan', 'Perempuan', 'Lumajang', '2019-03-18', 'Safati', '081222333444', '2d962ee2a8fa12f439d9bd544acb604b'),
(22, 'Canda', 'Canda Ajeng Berliana Karla', 'Perempuan', 'Lumajang', '2019-01-07', 'Siti Aliya', '081222333444', 'c62c44ac6e2cbbfcdefe1b59458ca7b8'),
(23, 'Charissa', 'Charisa Shaqueena Kimora', 'Perempuan', 'Lumajang', '2019-05-09', 'Anita Karulina', '081222333444', 'ec6a6536ca304edf844d1d248a4f08dc'),
(26, 'Firda', 'Firdatul Qurotul Akyun', 'Perempuan', 'Lumajang', '2023-5-13', 'Siti Fatima', '081259044563', '5ed291923179b73cbc6ef968b35361ff'),
(27, 'Vera', 'Vera Assyifa Putri', 'Perempuan', 'Lumajang', '2018-8-30', 'Sutri', '082338825881', '4341dfaa7259082022147afd371b69c3'),
(28, 'Fahreza', 'Muhammad Fahreza Pramono', 'Laki-laki', 'Lumajang', '2019-2-16', 'Ika', '082142980791', 'ea478b8608aeab5a906ce00867a5cea1'),
(35, 'Indira', 'Indira Izzul Mukarromah', 'Perempuan', 'Lumajang', '2019-09-01', 'Mery Vika Wahyuni', '081222333444', '2fd1c63f744f8b08b5dbb42eb3180a64'),
(36, 'Mikhayla', 'Mikhayla Ainun Ma’arif', 'Perempuan', 'Lumajang', '2019-01-02', 'Eva Yulistiani', '081222333444', '3c900692b306d979ddbc71a9822641cc'),
(37, 'Arfan', 'Moch Arfan Zakaria', 'Laki-laki', 'Lumajang', '2019-08-09', 'Ma’rufah Maulidiah', '081222333444', 'd9d0fec758f684f5f9bd7b1f4335d6e6'),
(38, 'Arsy', 'Muhammad Arsy Taamir Alfariski', 'Perempuan', 'Lumajang', '2019-10-30', 'Novita Alfianti', '081222333444', '8b45936d8766cde57601606424c8190e'),
(39, 'Dilan', 'Muhammad Dilan Alfarizqi', 'Laki-laki', 'Lumajang', '2019-08-01', 'Khoirin Nikmah', '081222333444', 'e72743f1af53fdbd840f1fdd3fd8ef10'),
(40, 'Iksal ', 'Muhammad Iksal Al Khalif', 'Laki-laki', 'Lumajang', '2019-03-08', 'Anik Widiawati', '081222333444', '3610f4abace08917e19a86edacf5da75'),
(41, 'Bima', 'Rahmatullah Bima Atmojo', 'Laki-laki', 'Lumajang', '2019-06-02', 'Uswatun Hasanah', '081222333444', '7fcba392d4dcca33791a44cd892b2112'),
(42, 'Ratna', 'Ratna Dwi Azzahra', 'Perempuan', 'Lumajang', '2019-06-25', 'Ulil Sulis Siyowati', '081222333444', '38753adc9fa129fd3626592006c4e8ce'),
(43, 'Sherlina', 'Sherlina Dwi Anggraini', 'Perempuan', 'Lumajang', '2018-12-06', 'Kholilah', '081222333444', '53f699811a81183940fa3c3a9238b38c');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_hasil`
--
ALTER TABLE `tb_hasil`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_user` (`id_user`),
  ADD KEY `id_kategori` (`id_kategori`),
  ADD KEY `id_umur` (`id_umur`);

--
-- Indexes for table `tb_kategori_soal`
--
ALTER TABLE `tb_kategori_soal`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_modul` (`id_modul`);

--
-- Indexes for table `tb_modul`
--
ALTER TABLE `tb_modul`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_soal`
--
ALTER TABLE `tb_soal`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_kategori` (`id_kategori`),
  ADD KEY `id_umur` (`id_umur`);

--
-- Indexes for table `tb_status`
--
ALTER TABLE `tb_status`
  ADD PRIMARY KEY (`id_status`),
  ADD KEY `id_kategori` (`id_kategori`);

--
-- Indexes for table `tb_umur`
--
ALTER TABLE `tb_umur`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tb_hasil`
--
ALTER TABLE `tb_hasil`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=49;

--
-- AUTO_INCREMENT for table `tb_kategori_soal`
--
ALTER TABLE `tb_kategori_soal`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `tb_modul`
--
ALTER TABLE `tb_modul`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tb_soal`
--
ALTER TABLE `tb_soal`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=114;

--
-- AUTO_INCREMENT for table `tb_status`
--
ALTER TABLE `tb_status`
  MODIFY `id_status` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `tb_umur`
--
ALTER TABLE `tb_umur`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=44;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `tb_hasil`
--
ALTER TABLE `tb_hasil`
  ADD CONSTRAINT `tb_hasil_ibfk_1` FOREIGN KEY (`id_user`) REFERENCES `user` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `tb_hasil_ibfk_2` FOREIGN KEY (`id_kategori`) REFERENCES `tb_kategori_soal` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `tb_hasil_ibfk_3` FOREIGN KEY (`id_umur`) REFERENCES `tb_umur` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `tb_kategori_soal`
--
ALTER TABLE `tb_kategori_soal`
  ADD CONSTRAINT `tb_kategori_soal_ibfk_1` FOREIGN KEY (`id_modul`) REFERENCES `tb_modul` (`id`);

--
-- Constraints for table `tb_soal`
--
ALTER TABLE `tb_soal`
  ADD CONSTRAINT `tb_soal_ibfk_1` FOREIGN KEY (`id_umur`) REFERENCES `tb_umur` (`id`),
  ADD CONSTRAINT `tb_soal_ibfk_2` FOREIGN KEY (`id_kategori`) REFERENCES `tb_kategori_soal` (`id`);

--
-- Constraints for table `tb_status`
--
ALTER TABLE `tb_status`
  ADD CONSTRAINT `tb_status_ibfk_1` FOREIGN KEY (`id_kategori`) REFERENCES `tb_kategori_soal` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 27, 2022 at 12:03 AM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 7.4.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dgtrac`
--

-- --------------------------------------------------------

--
-- Table structure for table `banner`
--

CREATE TABLE `banner` (
  `id` int(11) NOT NULL,
  `name` varchar(30) NOT NULL,
  `description` text NOT NULL,
  `id_mitra` int(11) NOT NULL,
  `harga` int(11) NOT NULL,
  `satuan` varchar(15) NOT NULL,
  `status` varchar(10) NOT NULL,
  `type` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `banner`
--

INSERT INTO `banner` (`id`, `name`, `description`, `id_mitra`, `harga`, `satuan`, `status`, `type`) VALUES
(1, 'Gulo Puan', 'Konon, di zaman kesultanan, gulo puan merupakan kegemaran para bangsawan Palembang. Diolah dari susu kerbau rawa di pedesaan di kawasan rawa-rawa Sumatera Selatan, makanan pelengkap ini merupakan kekayaan rasa yang hadir dari kekayaan alam Sumatera Selatan. Keberadaannya saat ini terbilang langka. Puan berarti \"susu\" dalam bahasa daerah Sumatera Selatan (Sumsel). Gulo puan bisa diartikan \'gula susu\' sesuai bahan dasarnya, yaitu gula dan susu yang dibuat menjadi sejenis karamel. Teksturnya lembut sedikit berpasir dengan warna coklat. Gulo puan yang rasanya mirip keju manis itu sangat sedap untuk campuran minum kopi atau olesan roti dan pisang goreng. Tak mudah memperolehnya. Penganan yang diolah secara tradisional ini hanya dijual oleh beberapa pedagang kaki lima di waktu tertentu saja, yaitu sekitar waktu shalat Jumat di Masjid Agung Kota Palembang.', 6, 35000, '200gr', 'show', 'carousel'),
(2, 'Jando Beraes', 'Kue ini sendiri mirip kue keranjang dengan permukaan yang berbintil kasar, tekstur lunak,kenyal dan lembut. Karena permukaan atasnya yang berwarna sangat mencolok seperti merah dan hijau, masyarakat Palembang sering menyebutnya dengan Jando Beraes. Sayang kue tradisional ini sudha mulai jarang terlehat orang yang menjualnya, bahkan sudah banyak orang yang tidak pernah makan dan mengenal kue dengan pengaruh budaya cina ini.', 9, 3000, 'pcs', 'show', 'carousel'),
(3, 'Gandus', 'Kue Gandus\' adalah salah satu jajanan tradisional khas Indonesia yang berasal dari Sumatera Selatan. Kue ini di perkirakan berumur lebih dari 500 tahun. Konon katanya keberadaan kue ini banyak dipengaruhi oleh budaya Tionghoa, dan Eropa. Dimana pada jamannya dulu kue ini di buat untuk menyambut perayaan hari-hari besar seperti saat Ramadhan dan Lebaran, sehingga Sajian ini cocok untuk menjadi cemilan berbuka puasa. Ciri khas kue ini adalah bertekstur lentur dan lengket yang menggambarkan kekentalan dalam hubungan kekerabatan antar manusia. Rasanya yang gurih dan manis legit menggambarkan perpaduan sejarah kehidupan manusia di muka bumi. Pada jaman dahulu, kue ini tidak memiliki banyak varian seperti saat ini.', 8, 1500, 'pcs', 'show', 'carousel'),
(4, 'Bolu Kojo', 'Bolu kojo merupakan kue berbahan tepung terigu yang dibikin manis. Kue ini biasanya berwarna hijau cerah dari daun pandan. Nama \"kojo\" berarti kemojo atau kamboja. Kue bolu kojo ini diambil karena pada awalnya bentuk kuenya mirip kembang kamboja. Bentuk bunga ini sangat menarik dan ingin mencicipnya. Namun saat ini, bentuk dan ukurannya tak melulu kemojo. Selain di Sumsel, kue khas Melayu ini juga dapat ditemukan di Jambi, Riau, dan Bengkulu. Bolu kojo termasuk penganan ketika acara-acara adat atau juga ketika hari raya.', 5, 120000, 'Loyang', 'show', 'carousel'),
(5, 'Maksubah', 'kue khas Palembang bercitarasa legit ini merupakan hidangan wajib saat sanjo atau silaturahmi di hari lebaran sejak jaman dahulu. Kue ini hampir mirip dengan kojo, kue tradisional Palembang lainnya, hanya bedanya maksuba mengandung susu kental manis dan warnanya tidak hijau.', 1, 320000, 'loyang', 'show', 'carousel'),
(6, 'Gunjing', 'Kue Gunjing Sumatera Selatan adalah kue basah tradisional jajanan pasar, yang terbuat dari tepung beras dan tepung ketan, kelapa parut, tape ( bisa tape dari ubi kayu atau tape dari beras ketan/beras yang diberi ragi ) yang dimasak dengan cara dipanggang di cetakan khusus yang bernama cetakan gunjing. gunjing atau kue gonjing memiliki dua rasa istimewa ada yang gurih yaitu gunjing putih dan manis yang berwarna merah ( gunjing merah ), dimana gunjing merah dalam adonannya di tambahkan gula merah, kue gunjing sepintas mirip dengan resep kue pukis namun perbedaan nya sangat jelas yaitu pada cetakan dan rasanya, gunjing terasa lebih padat dan bentuknya terlihat tebal dan berisi tapi teksturnya tetap lembut dan empuk.', 12, 2000, 'pcs', 'show', 'front_page'),
(7, 'Kue Pare', 'Kue Pare khas Palembang merupakan jananan tradisional. Disebut pare karena bentuknya memang menyerupai sayur pare/paria. Memang masih kurang populer dibanding empek empek. Mungkin karena cara bikinnya yang relatif rumit. Di Palembang sendiripun yang lebih populer adalah kue pare versi manis. Kalau yang asin isinya ayam mirip mirip isian lemper, sedangkan versi manisnya isinya enten kelapa.', 10, 3000, 'pcs', 'show', 'front_page'),
(8, 'Srikaya Bakar', 'Kue berwarna hijau beraroma daun pandan dengan tekstur sangat lembut dan legit. Tentunya, belum banyak yang mengetahui makanan lezat ini, Biasanya orang Palembang, makan kue ini dengan dicocol dengan ketan. Bisa juga dengan roti tawar untuk mengurangi rasa legitnya. Tapi, siapa menduga, ada juga yang langsung melahapnya bulat-bulat.', 13, 6000, 'pcs', 'show', 'front_page'),
(9, 'Naam', 'Na\'am tergolong jajanan pasar yang terbuat dari bahan-bahan ubi jalar yang telah dikukus dan dihaluskan, tepung terigu, tepung tapioka, gula pasir dan garam dan dibentuk bulat berisi gula merah cair', 2, 30000, 'Porsi', 'show', 'normal'),
(10, 'Bugis', 'Kue Bugis adalah kue yang terbuat dari tepung ketan yang diadonin dengan santan. Setelah itu diisi dengan centi (ampas kelapa yang disiram . dengan air gula), lalu dibungkus dengan daun pisang, dan dikukus. Kue tersebut mirip dengan lambang sari', 2, 30000, 'Porsi', 'show', 'normal'),
(11, 'Wajik', 'Makanan ini terbuat dari santan kental, daun pandah, gula merah, dan ketan putih. Pada Dasarnya wajik adalah nasi ketan putih yang diolah dengan gula merah sehingga memiliki rasa manis dan berwarna coklat tua. Tekstur dari makanan ini sedikit lengket dan lembut. Rasa dari wajik sendiri, Manis dan Gemuk.', 3, 150000, 'Loyang', 'show', 'normal'),
(12, 'Lapis Puan', 'Lapis Puan terbuat dari adonan telur, vanili, susu kental manis, gula pasir yang dihaluskan dan mentega cair yang diletakkan dalam loyang lalu dipanggang selama 3 jam', 11, 320000, 'Loyang', 'show', 'normal'),
(13, 'Bikang Balek', '-', 4, 25000, '10pcs', 'show', 'normal'),
(14, 'Lupis', 'Lupis terbuat dari beras ketan yang dibungkus dengan daun pisang dengan bentuk segitiga kemudian di rebus. Memakannya dengan kelapa parut yang telah ditaburi garam halus secukupnya lalu disiram dengan air gula merah yang telah dikentalkan', 4, 150000, '10pcs', 'show', 'normal'),
(15, 'Engkak Ketan Duren', 'Engkak ketan merupakan kue khas Palembang dan daerah sekitarnya. Kue ini dibuat dari tepung ketan dan santan yang kental sehingga teksturnya lebih kenyal dan rasanya sangat gurih. Biasanya hidangan ini disajikan saat acara-acara besar seperti pernikahan, hari raya, dan acara keluarga.', 1, 20000, 'Loyang', 'show', 'normal'),
(16, 'Engkak Ketan Ori', 'Engkak ketan merupakan kue khas Palembang. Kue ini dibuat dari tepung ketan dan santan yang kental sehingga teksturnya lebih kenyal dan rasanya sangat gurih. Biasanya hidangan ini disajikan saat acara-acara besar seperti pernikahan, hari raya, dan acara keluarga.', 1, 20000, 'Porsi', 'show', 'normal'),
(17, 'Lapis Keju', 'Makanan ini mirip dengan lapis legit, namun di setiap tingkatnya terdapat adonan dengan sensasi rasa keju yang cukup kuat. Makanan yang terbuat dari terigu, telur, gula, garam, susu, mentega  dan keju yang dipanggang (oven).', 1, 20000, 'Porsi', 'show', 'normal'),
(18, 'Lapis Prunes', 'Lapis prunes pada dasarnya hampir sama dengan pembuatan lapis legit biasa. Hanya ditambahkan buah prunes setiap tiga lapis.', 1, 20000, 'Porsi', 'show', 'normal'),
(19, 'Lemper Ayam', 'Lemper jamak ditemui dalam acara perkumpulan, seperti arisan, syukuran, ataupun kudapan saat acara pernikahan. Namun kini untuk menemuukan makanan ini amatlah mudah, dari toko roti hingga pedagang di pasar pun ada, Bahan utama dari Lemper ini ialah beras ketan yang berasal dari buah kelapa, serta ayam cincang atau srundeng sebagai isi dalamnya, dan daun pisang sebagai pembungkusnya. Jika dimakan, rasa gurih dan sedikit asin begitu terasa. Memamng makanan ini amat  cocok untuk menjadi jajanan atau camilan  ringan.\r\n', 8, 3000, 'pcs', 'show', 'normal'),
(20, 'Jando Berendem', 'Beras ketan di adon dengan air sampai kalis lalu dibentuk bulatan-bulatan kecil warna warni yang berisi unti/ enten-enten (kelapa parut yang telah diaduk dengan gula merah cair). Kemudian dikukus dengan merendam setengah bulatan sampai matang.', 9, 20000, 'Porsi', 'show', 'normal'),
(21, 'Putu Ayu', 'Putu Ayu tergolong jajanan pasar yang terbuat dari bahan-bahan tepung terigu, gula pasir, santan, telur ayam, kelapa muda, dan pewarna makanan dengan proses memasaknya yang dikukus.', 5, 1500, 'pcs', 'show', 'normal'),
(22, 'Shanghai', 'Di Sumatra Selatan, Palembang, terdapat jajanan pasar yang bernama martabak Shanghai (Kue Shanghai). Adonannya mirip bakwan, tetapi adonannya dicetak. Cetakan martabak Shanghai berbahan aluminium. Berbentuk bulat memanjang (oval). Di sekeliling cetakan bergerigi dan cetakan diberi pegangan berupa gagang yang cukup panjang agar tidak panas ketika proses penggorengan. Di Palembang, martabak Shanghai disajikan dengan kuah cuka.', 6, 2000, 'pcs', 'show', 'normal'),
(23, 'Cake Marmer', 'Cake marmer merupakan kue dengan tampilan goresan atau belang-belang seperti marmer yang dihasilkan dari memadukan adonan terang dan gelap dengan tipis. Bolu marmer bisa memiliki berbagai variasi rasa seperti cokelat, vanila, pandan, kopi, dan lain-lainnya.', 14, 35, 'Loyang', 'show', 'normal'),
(24, 'Lapis Kojo', 'Kue berwarna hijau bertekstur lembut ini menawarkan sensasi berbeda jika dibandingkan kue basah lain, Ciri khasnya terletak pada adanya bau wangi yang berasal dari daun pandan dan daun suji.', 14, 160000, 'Loyang', 'show', 'normal'),
(25, 'Maksubah Kojo', '-', 11, 320000, 'Loyang', 'show', 'normal'),
(26, 'Maksubah', 'kue khas Palembang bercitarasa legit ini merupakan hidangan wajib saat sanjo atau silaturahmi di hari lebaran sejak jaman dahulu. Kue ini hampir mirip dengan kojo, kue tradisional Palembang lainnya, hanya bedanya maksuba mengandung susu kental manis dan warnanya tidak hijau.', 11, 320000, 'Loyang', 'show', 'normal'),
(27, 'Blunder', 'Kue bluder ini berbentuk bulat yang terbuat dari bahan-bahan seperti tepung gandum, susu, santan, gula dan umak roti (ragi),Kue ini merupakan serapan dari bolu atau kue dari negara Belanda yang sejenis dengan kue muffin.\r\n\r\n', 12, 2000, 'pcs', 'show', 'normal'),
(28, 'Kue Kamer', 'Kue ini berbentuk bundar, pipih berwarna coklat dan hampir menyerupai kue apem atau serabi tetapi sedikit lebih besar dan bantet. Kue ini terbuat dari adonan terigu, mentega, dan telur.', 12, 3000, 'pcs', 'show', 'normal'),
(29, 'Onde-Onde', 'Onde-onde terbuat dari tepung terigu ataupun tepung ketan yang digoreng atau direbus dan permukaannya ditaburi/dibalur dengan biji wijen. Terdapat bermacam-macam variasi, yang paling dikenal adalah onde-onde yang terbuat dari tepung ketan dan di dalamnya diisi bubuk kacang hijau.', 13, 2000, 'pcs', 'show', 'normal'),
(30, 'Engkak Mini', 'Sepintas kue ini mirip dengan kue lapis legit. Warnanya cokelat berlapis kuning cantik. Tapi siapa sangka kalau bahan dasar kue ini ternyata berbeda dengan kue lapis biasa. Seperti apa sih kuenya Wong Kito ini?', 10, 3000, 'pcs', 'show', 'normal'),
(31, 'Manan Sahmin', 'Manan sahmin adalah salah satu kue bolu khas Palembang yang berbahan dasar ubi selo (ubi jalar) kuning dan berstuktur lembut serta diberi kismis di tengahnya. Aroma harumnya berasal dari campuran susu dan air perasan daun pandan. Manan sahmin merupakan \'kembaran kue kojo\' yang juga memiliki versi loyang berukuran besar dan versi mini.', 10, 3000, 'pcs', 'show', 'normal'),
(32, 'Gelenak', 'Gelenak merupakan penganan yang berasal dari kota Palembang. Kue yang satu ini mirip seperti wajik atau dodol khas Jawa Barat, berbentuk pipih, bulat dan berwarna coklat kehitaman.', 7, 1500, 'pcs', 'show', 'normal'),
(33, 'Ketan Glondo', '-', 7, 1500, 'pcs', 'show', 'normal'),
(34, 'Ketan Kuning Sambelengkung', '-', 7, 1500, 'pcs', 'show', 'normal'),
(35, 'Putu Ayu Gula Merah', 'putu ayu gula merah pada dasarnya bahan-bahannya pun sama dengan putu ayu biasa hanya saja di tambah dengan gula merah didalamnya.', 3, 60000, 'Loyang', 'show', 'normal');

-- --------------------------------------------------------

--
-- Table structure for table `catatan`
--

CREATE TABLE `catatan` (
  `id` int(11) NOT NULL,
  `catatan` varchar(256) NOT NULL,
  `id_mitra` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `catatan`
--

INSERT INTO `catatan` (`id`, `catatan`, `id_mitra`) VALUES
(3, 'Hari Buka : Senin - Sabtu', 2),
(4, 'Jam Buka : 09.00 - 15.00 WIB', 2),
(5, 'Pemesanan dilakukan 2 hari sebelumnya', 2),
(6, 'Pemesanan dilakukan 2 hari sebelumnya', 3),
(7, 'Bisa diambil jam 10 pagi', 4),
(8, 'Pemesanan dilakukan 2 hari sebelumnya', 4),
(9, 'Untuk hari raya, pemesanan dilakukan maksimal H-3', 5),
(10, 'Pemesanan hari biasa dilakukan maksimal H-1', 5),
(11, 'Jam Order : 08.00 - 21.00 WIB', 5),
(12, 'Pemesanan dilakukan H-1', 6),
(13, 'Pemesanan dilakukan H-1', 8),
(14, 'Pemesanan dilakukan H-1', 9),
(17, 'Hari Buka : Senin - Sabtu', 10),
(18, 'Jam Buka : 10.00 - 16.00 WIB', 10),
(19, 'Pemesanan dilakukan 2 hari sebelumnya', 10),
(20, 'Jam Buka : 08.00 - 17.00 WIB', 11),
(21, 'Pemesanan dilakukan 2-3 hari sebelumnya', 11),
(22, 'Pemesanan dilakukan 1 hari sebelumnya', 12),
(23, 'Pemesanan dilakukan 1 hari sebelumnya', 13),
(24, 'Jam Buka : 10.00 - 19.00 WIB', 14),
(25, 'Pemesanan setiap hari', 14),
(26, 'Pemesanan dilakukan H-1', 7),
(27, 'Pemesanan dilakukan H-1', 1);

-- --------------------------------------------------------

--
-- Table structure for table `foto`
--

CREATE TABLE `foto` (
  `id` int(11) NOT NULL,
  `image` varchar(40) NOT NULL,
  `id_banner` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `foto`
--

INSERT INTO `foto` (`id`, `image`, `id_banner`) VALUES
(1, '1.jpg', 1),
(2, '2.jpg', 2),
(3, '3.jpg', 4),
(4, '4.jpg', 3),
(5, '5.jpg', 5),
(6, '6.jpg', 6),
(7, '7.jpg', 7),
(8, '8.jpg', 8),
(13, '9.jpg', 9),
(16, '10.jpg', 9),
(17, '11.jpg', 10),
(18, '12.jpg', 10),
(19, '13.jpg', 11),
(20, '14.jpg', 11),
(21, '15.jpg', 12),
(22, '16.jpg', 12),
(23, '17.jpg', 1),
(24, '18.jpg', 2),
(25, '19.jpg', 3),
(26, '20.jpg', 4),
(27, '21.jpg', 26),
(28, '21.jpg', 5),
(29, '5.jpg', 26),
(30, '22.jpg', 6),
(31, '23.jpg', 7),
(32, '24.jpg', 8),
(33, '25.jpg', 13),
(34, '26.jpg', 13),
(35, '27.jpg', 14),
(36, '28.jpg', 14),
(37, '29.jpg', 15),
(38, '30.jpg', 16),
(39, '31.jpg', 16),
(40, '32.jpg', 30),
(41, '33.jpg', 30),
(42, '34.jpg', 17),
(43, '35.jpg', 17),
(44, '37.jpg', 18),
(45, '36.jpg', 18),
(46, '38.jpg', 24),
(47, '39.jpg', 24),
(48, '40.jpg', 19),
(49, '41.jpg', 19),
(50, '42.jpg', 20),
(51, '43.jpg', 20),
(52, '44.jpg', 21),
(53, '45.jpg', 21),
(54, '46.jpg', 22),
(55, '46.jpg', 22),
(56, '48.jpg', 23),
(57, '49.jpg', 23),
(58, '50.jpg', 25),
(59, '51.jpg', 25),
(60, '52.jpg', 27),
(61, '53.jpg', 27),
(62, '54.jpg', 28),
(63, '55.jpg', 28),
(64, '56.jpg', 29),
(65, '57.jpg', 29),
(66, '58.jpg', 31),
(67, '59.jpg', 31),
(68, '60.jpg', 32),
(69, '61.jpg', 32),
(70, '62.jpg', 33),
(71, '63.jpg', 33),
(72, '64.jpg', 34),
(73, '65.jpg', 34),
(74, '66.jpg', 35),
(75, '67.jpg', 35);

-- --------------------------------------------------------

--
-- Table structure for table `mitra`
--

CREATE TABLE `mitra` (
  `id` int(11) NOT NULL,
  `nama` varchar(40) NOT NULL,
  `logo` varchar(20) NOT NULL,
  `alamat` varchar(256) NOT NULL,
  `kontak` varchar(256) NOT NULL,
  `lokasi` varchar(256) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `mitra`
--

INSERT INTO `mitra` (`id`, `nama`, `logo`, `alamat`, `kontak`, `lokasi`) VALUES
(1, 'Dapur Azka Qanita', 'qanita.jpg', 'Komplek TOP 100 Blok A7 No. 27, Jakabaring', 'https://wa.me/+628117874458', 'https://goo.gl/maps/8QMrUhU6NSGmZbLm6'),
(2, 'Dapur Ayuk', 'ayuk.jpg', 'Jl. Lintas Sumatera No.079, Desa Talang Balai Baru II, Kec. Tanjung Raja, Kab. Ogan Ilir, SUM-SEL, Talang Balai Baru II, Kec. Tj. Raja, Kabupaten Ogan Ilir, Sumatera Selatan 30661', 'https://wa.me/+6281281370528', 'https://goo.gl/maps/7hwYNzaRs6x1496HA'),
(3, 'Yu2n Cake', 'yu2n.jpg', 'Jl. Masjid Perum Angkasa Permai Blok E No. 5 RT. 25 RW. 04 Kel. Talang Jambe, Kec. Sukarami', 'https://wa.me/+6282373042932', 'https://goo.gl/maps/XgPU1WatunHq5HPN7'),
(4, 'Aneka Kue Bingen', 'bingen.jpg', 'Perumahan TOP Blok B10 No. 5 RT. 097 RW. 08, Jakabaring', 'https://wa.me/+6282371939999', 'https://goo.gl/maps/eor4RHp78w9ToKmS6'),
(5, 'Jihan Cake', 'jihan.jpg', 'Jl. Politeknik Lr. Selapan No. 2 RT. 71 Bukit Lama', 'https://wa.me/+6282180242351', 'https://goo.gl/maps/uT2KPEG28VApdC7L7'),
(6, 'Makanan Bingen Kak Cek Adi', 'adi.jpg', 'Jl. K. H. Azhari Lr. Karya No. 1196 RT. 16 Kelurahan 3-4 Ulu, Kec. Seberang Ulu 1', 'https://wa.me/+6285103340054', 'https://goo.gl/maps/CnZoktRGNLr2yjFq5'),
(7, 'Pempek dan Makanan Khas Sera-Sera', 'sera.jpg', 'Jl. K. H. Azhari No. 2000 RT. 54 Simp. Tiga Pasar Kunik, 7 Ulu, Kec. Seberang Ulu 2', 'https://wa.me/+628127878689', 'https://goo.gl/maps/oLHGNdUeAjZTsThD8'),
(8, 'Dapur Bu Uya', 'uya.jpg', 'Jl. D.I. Panjaitan Lr. Nusa Eka No. 1658 RT. 32 RW. 10 Kel. 16 Ulu', 'https://wa.me/+6287897370844', 'https://goo.gl/maps/HkEeJo6eoFUQrHew8'),
(9, 'Catering & Snack Faras', 'faras.jpg', 'Jl. radial Rusun blok. 38 nmr 5 RT. 28 RW. 10. 24 ilir', 'https://wa.me/+6281261487946', 'https://goo.gl/maps/aZrLDPkr6Y2e1FLu6'),
(10, 'Razas Cake', 'razas.jpg', 'Jl. Mega Mendung Lr. Keluarga RT. 27 RW. 07 No. 1238 Kel. Sentosa, Kec. Seberang Ulu 2', 'https://wa.me/+6285380549535', 'https://goo.gl/maps/qzTjFaV2SGmRtusM6'),
(11, 'Nanina Cake & Cookies', 'nanina.jpg', 'Jl. Tembesu Raya Blok N No. 30 RT. 45 RW. 14 OPI 6, Jakabaring', 'https://wa.me/+6281271495561', 'https://goo.gl/maps/pbs9pk6THgAPRYcm8'),
(12, 'Palugada Kitchen', 'palugada.jpg', 'Jl. K.H. Azhari Lr. Pedatuan Darat RT. 09 Kel. 12 Ulu, Kec. Seberang Ulu 2', 'https://wa.me/+6285380747792', 'https://goo.gl/maps/3epzcwnJpFUMvJmQA'),
(13, 'Pempek Pipin', 'pipin.jpg', 'OPI Regency 3', 'https://wa.me/+6285267014924', 'https://goo.gl/maps/BvCRAhpvE6ekyQz4A'),
(14, 'Manda Cake', 'manda.jpg', 'Jl. Letnan Murod Lr. Flamboyan No. 2044', 'https://wa.me/+6281532404826', 'https://goo.gl/maps/fEZwn12njjAjiZhH6');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `username` varchar(40) NOT NULL,
  `password` varchar(40) NOT NULL,
  `foto` varchar(40) NOT NULL,
  `tentang` varchar(256) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `nama`, `username`, `password`, `foto`, `tentang`) VALUES
(1, 'Dhea Radika Putri', 'admin', 'admin', 'dhea.png', 'Mahasiswa Politeknik Negeri Sriwijaya Jurusan Administrasi Bisnis Program Studi D4 Usaha Perjalanan Wisata');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `banner`
--
ALTER TABLE `banner`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_mitra` (`id_mitra`);

--
-- Indexes for table `catatan`
--
ALTER TABLE `catatan`
  ADD PRIMARY KEY (`id`),
  ADD KEY `mitra` (`id_mitra`);

--
-- Indexes for table `foto`
--
ALTER TABLE `foto`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_banner` (`id_banner`);

--
-- Indexes for table `mitra`
--
ALTER TABLE `mitra`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `banner`
--
ALTER TABLE `banner`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;

--
-- AUTO_INCREMENT for table `catatan`
--
ALTER TABLE `catatan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT for table `foto`
--
ALTER TABLE `foto`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=76;

--
-- AUTO_INCREMENT for table `mitra`
--
ALTER TABLE `mitra`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `banner`
--
ALTER TABLE `banner`
  ADD CONSTRAINT `banner_ibfk_1` FOREIGN KEY (`id_mitra`) REFERENCES `mitra` (`id`);

--
-- Constraints for table `catatan`
--
ALTER TABLE `catatan`
  ADD CONSTRAINT `catatan_ibfk_1` FOREIGN KEY (`id_mitra`) REFERENCES `mitra` (`id`);

--
-- Constraints for table `foto`
--
ALTER TABLE `foto`
  ADD CONSTRAINT `foto_ibfk_1` FOREIGN KEY (`id_banner`) REFERENCES `banner` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

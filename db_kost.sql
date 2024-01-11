-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 11, 2024 at 07:07 AM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 7.3.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_kost`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `admin_id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `full_name` varchar(255) DEFAULT NULL,
  `role` enum('admin') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`admin_id`, `username`, `email`, `password`, `full_name`, `role`) VALUES
(1, 'admin', 'admin@gmail.com', '12345', 'Admin Aja', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `kos`
--

CREATE TABLE `kos` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `nama_kos` varchar(255) NOT NULL,
  `kategori` varchar(50) NOT NULL,
  `fasilitas_kamar` text NOT NULL,
  `fasilitas_kamar_mandi` text NOT NULL,
  `jumlah_kamar` int(11) NOT NULL,
  `harga` int(11) NOT NULL,
  `peraturan` text DEFAULT NULL,
  `deskripsi` text DEFAULT NULL,
  `alamat_kos` varchar(255) NOT NULL,
  `nomor_rekening` varchar(50) DEFAULT NULL,
  `bank` varchar(50) DEFAULT NULL,
  `foto_kos_1` varchar(255) DEFAULT NULL,
  `foto_kos_2` varchar(255) DEFAULT NULL,
  `foto_kos_3` varchar(255) DEFAULT NULL,
  `foto_kos_4` varchar(255) DEFAULT NULL,
  `foto_kos_5` varchar(255) DEFAULT NULL,
  `tanggal_buka` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `kos`
--

INSERT INTO `kos` (`id`, `user_id`, `nama_kos`, `kategori`, `fasilitas_kamar`, `fasilitas_kamar_mandi`, `jumlah_kamar`, `harga`, `peraturan`, `deskripsi`, `alamat_kos`, `nomor_rekening`, `bank`, `foto_kos_1`, `foto_kos_2`, `foto_kos_3`, `foto_kos_4`, `foto_kos_5`, `tanggal_buka`) VALUES
(2, 1, 'Prima abadi ', 'Pria', 'AC, Meja Belajar, Kasur, TV, Dispenser, Lemari Baju', 'K. Mandi Dalam, Shower, Kloset Duduk', 2, 500000, '1. Setiap penghuni diharapkan menjaga ketertiban dan keamanan di dalam kosan.\r\n2. Penghuni diharapkan tidak membawa tamu tanpa izin ke dalam area kosan.\r\n3. Setiap penghuni bertanggung jawab untuk menjaga kebersihan dan kesehatan lingkungan kosan.\r\n4. Pintu gerbang akan ditutup pada jam tertentu. Penghuni diharapkan untuk pulang sebelum pintu gerbang ditutup.\r\n5. Kegiatan pesta atau keramaian yang mengganggu ketenangan penghuni lain tidak diperbolehkan', 'Kost Pria dengan harga terjangkau dan fasilitas yang memadai serta di daerah yang strategis, memberikan kenyamanan dan aksesibilitas yang optimal bagi para penghuninya. Dengan desain interior yang modern dan penuh perhatian terhadap detail, kos ini menyajikan lingkungan yang menyenangkan untuk tinggal, menjadikannya pilihan ideal bagi mereka yang mencari tempat tinggal yang nyaman dan terjangkau di pusat kota.', ' Jl. Jatiwaringin RT 5 RW 03', '1234567890', 'BCA', '1.png', '2.png', '3.png', '4.png', '5.png', '2023-12-16 02:42:00'),
(3, 2, 'Kos Abadi', 'Pria', 'Meja Belajar, Kasur, TV, Dispenser, Lemari Baju', 'K. Mandi Dalam, Shower, Kloset Duduk', 7, 500000, '- Tidak boleh membawa cewek ke kamar\r\n- Pulang 1x24 jam pintu pagar sudah di kunci dan harus buka sendiri', 'Kost Pria dengan harga terjangkau dan fasilitas yang memadai serta di daerah yang strategis ', 'Jl. Jatiwaringin Raya Perumahan Jati Asri, RT 10 / RW 08', '2345678901', 'BRI', '11.png', '21.png', '31.png', '41.png', '51.png', '2023-12-20 07:02:05'),
(4, 2, 'Kos Kekal', 'Pria', 'AC, Meja Belajar, Kasur, TV, Dispenser, Lemari Baju', 'K. Mandi Dalam, Shower, Kloset Duduk, Air Panas', 0, 500000, '1. Tidak boleh membawa cewek ke dalam kost an\r\n2. Pulang lewat 1x24 jam pintu pagar buka sendiri', 'Kost ini menawarkan konsep kekekalan dan kemapanan. Terdiri dari dua lantai, setiap lantainya menyediakan tipe kamar Kekal dengan fasilitas yang memadai. Suasana kos yang damai dan layanan kebersihan berkala menjadikan tempat ini pilihan yang ideal untuk penghuni yang menghargai ketenangan.\r\n\r\nFasilitas:\r\nDaya Listrik: 1300 VA (Token)\r\nSumber Air: Sumur\r\nWifi: Kecepatan hingga 30 Mbps\r\nParkir: Tersedia fasilitas parkir untuk 15 motor, 15 mobil, dan 15 sepeda.', 'Jl. Jatiwaringin Raya Perumahan Jati Asri, RT 03 / RW 08', '2345678901', 'BRI', '1.jpeg', '21.jpeg', '31.jpeg', '41.jpeg', '51.jpeg', '2023-12-22 09:18:13'),
(5, 3, 'Kos Sari', 'Wanita', 'AC, Meja Belajar, Meja Rias, Kasur', 'K. Mandi Dalam, Shower, Kloset Duduk, Kloset Jongkok', 8, 800000, '1. Jam malam pukul 22:00. Setelah itu, pintu gerbang akan dikunci.\r\n2. Tamu diperbolehkan sampai pukul 21:00.\r\n3. Dilarang membawa hewan peliharaan.\r\n4. Dilarang merokok di dalam kamar.\r\n5. Harap menjaga kebersihan dan kerapihan kamar serta fasilitas umum.', 'Kost ini menawarkan kenyamanan dan suasana yang penuh semangat. Terdiri dari dua lantai dengan tipe kamar Jaya yang tersedia di setiap lantainya. Fasilitas yang memadai dan perawatan berkala menciptakan lingkungan yang mendukung produktivitas dan kesejahteraan penghuni.', 'Jl. Pondok Gede Raya Perumahan Pondok Indah, RT 05 / RW 07', '3213', 'BCA', 'bayu.jpg', 'bayu1.jpg', 'bayu2.jpg', 'bayu3.jpg', 'bayu4.jpg', '2023-11-19 14:50:34'),
(7, 3, 'Kos Mawar', 'Wanita', 'AC, Meja Rias, Kasur, Dispenser, Lemari Baju', 'K. Mandi Dalam, Shower, Kloset Duduk, Bak Mandi, Air Panas', 8, 850000, '1. Jam malam pukul 23:00. Setelah itu, pintu gerbang akan dikunci.\r\n2. Tamu diperbolehkan sampai pukul 22:00.\r\n3. Dilarang membawa hewan peliharaan.\r\n4. Dilarang merokok di dalam kamar.\r\n5. Harap menjaga kebersihan dan kerapihan kamar serta fasilitas umum.', 'Kost ini menghadirkan konsep kesejahteraan dan ketentraman. Terdiri dari dua lantai dengan tipe kamar Sejahtera yang tersedia di setiap lantainya. Fasilitas lengkap dan perawatan rutin menciptakan suasana yang mendukung kehidupan harmonis bagi penghuni.', 'Jl. Pondok Gede Raya Perumahan Pondok Indah, RT 05 / RW 07', '3456789012', 'BCA', '16.jpeg', '26.jpeg', '36.jpeg', '46.jpeg', '56.jpeg', '2023-11-20 06:11:52'),
(10, 5, 'Kos Sentosa', 'Wanita', 'AC, Meja Belajar, Kasur', 'K. Mandi Dalam, Shower, Kloset Duduk, Ember Mandi', 10, 1000000, '1. Dilarang membuat kebisingan setelah pukul 21:00.\r\n2. Tamu harus melakukan check-in di resepsionis dan diperbolehkan sampai pukul 20:00.\r\n3. Dilarang memelihara hewan di dalam kos.\r\n4. Area kos adalah zona bebas rokok.\r\n5. Harap merawat barang dan fasilitas kos dengan baik.', 'Kost ini menawarkan kenyamanan dan suasana yang penuh semangat. Terdiri dari dua lantai dengan tipe kamar Jaya yang tersedia di setiap lantainya. Fasilitas yang memadai dan perawatan berkala menciptakan lingkungan yang mendukung produktivitas dan kesejahteraan penghuni.\r\n\r\nFasilitas\r\nDaya Listrik: 1300 VA (Token)\r\nSumber Air: Sumur\r\nWifi: Kecepatan hingga 30 Mbps\r\nParkir: Tersedia fasilitas parkir untuk 15 motor, 15 mobil, dan 15 sepeda.', ' Jl. Jati Karya Perumahan Jati Karya, RT 05 / RW 10', '5678901234', 'BCA', '17.jpeg', '27.jpeg', '37.jpeg', '48.jpeg', '57.jpeg', '2023-11-20 08:53:17'),
(11, 5, 'Kos Mutiara', 'Wanita', 'AC, Meja Belajar, Kasur', 'K. Mandi Dalam, Kloset Duduk', 7, 1300000, '1. Jam malam pukul 22:00. Setelah itu, pintu gerbang akan dikunci.\r\n2. Tamu diperbolehkan sampai pukul 21:00.\r\n3. Dilarang membawa hewan peliharaan.\r\n4. Dilarang merokok di dalam kamar.\r\n5. Harap menjaga kebersihan dan kerapihan kamar serta fasilitas umum.', 'Kost ini menawarkan keindahan dan kemewahan, menciptakan suasana yang mutiara di antara keseharian. Terdiri dari dua lantai, setiap lantainya menawarkan tipe kamar Mutiara yang memberikan kenyamanan dan keanggunan. Fasilitas yang lengkap dan perawatan berkala menciptakan tempat yang nyaman untuk menjalani hidup dengan gemilang.', ' Jl. Jati Karya Perumahan Jati Karya, RT 09 / RW 10', '5678901234', 'BCA', '18.jpeg', '23.png', '33.png', '49.jpeg', '58.jpeg', '2023-11-20 08:58:31'),
(19, 12, 'Kos Damai', 'Pria', 'AC, Meja Belajar, Meja Rias, Kasur, Jendela', 'Shower, Kloset Duduk, Wastafel, K. Mandi Luar', 8, 950000, '1. Jam malam pukul 22:00. Setelah itu, pintu gerbang akan dikunci.\r\n2. Tamu diperbolehkan sampai pukul 21:00.\r\n3. Dilarang membawa hewan peliharaan.\r\n4. Dilarang merokok di dalam kamar.\r\n5. Harap menjaga kebersihan dan kerapihan kamar serta fasilitas umum. ', 'Kost ini, dengan keindahan dan keanggunannya, menawarkan suasana damai bagi penghuninya. Terdiri dari dua lantai, setiap lantainya menyediakan tipe kamar Damai yang memberikan kenyamanan dan ketenangan. Fasilitas yang lengkap dan layanan kebersihan berkala menciptakan tempat yang cocok untuk hidup dengan harmoni.\r\nalamat : Jl. Raya Hankam Perumahan Jati Waringin Indah, RT 04 / RW 09\r\n', ' Jl. Raya Hankam Perumahan Jati Waringin Indah, RT 04 / RW 09 ', '4567890123', 'BCA', '1-BPBEkCTA8-transformed.jpeg', '2-P-1AP0GmL-transformed.jpeg', '3-MwbD6C-Oe-transformed.jpeg', '4-A5P3zQtJN-transformed.jpeg', '5-ZsfRSIJUo-transformed.jpeg', '2023-12-20 07:38:00'),
(20, 2, 'Kos Damai', 'Pria', 'AC, Meja Belajar, Meja Rias, Kasur', 'K. Mandi Dalam, Shower, Kloset Duduk, Kloset Jongkok', 8, 850000, '1. Jam malam pukul 22:00. Setelah itu, pintu gerbang akan dikunci.\r\n2. Tamu diperbolehkan sampai pukul 21:00.\r\n3. Dilarang membawa hewan peliharaan.\r\n4. Dilarang merokok di dalam kamar.\r\n5. Harap menjaga kebersihan dan kerapihan kamar serta fasilitas umum. ', 'Kost ini, dengan keindahan dan keanggunannya, menawarkan suasana damai bagi penghuninya. Terdiri dari dua lantai, setiap lantainya menyediakan tipe kamar Damai yang memberikan kenyamanan dan ketenangan. Fasilitas yang lengkap dan layanan kebersihan berkala menciptakan tempat yang cocok untuk hidup dengan harmoni.\r\n', 'Jl. Semeru Raya', '19210485', 'BCA', '1-BPBEkCTA8-transformed1.jpeg', '2-P-1AP0GmL-transformed1.jpeg', '3-MwbD6C-Oe-transformed1.jpeg', '4-A5P3zQtJN-transformed1.jpeg', NULL, '2023-12-22 09:30:21');

-- --------------------------------------------------------

--
-- Table structure for table `message`
--

CREATE TABLE `message` (
  `id` int(11) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `subjek` varchar(255) NOT NULL,
  `isi_pesan` text NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `message`
--

INSERT INTO `message` (`id`, `nama`, `email`, `subjek`, `isi_pesan`, `created_at`) VALUES
(11, 'Rina', 'rina@yahoo.com', 'Saran untuk KOS.ID.', 'Saran untuk Website, Pesan: Menurut saya, akan lebih baik jika website menyediakan fitur pencarian yang lebih detail, seperti mencari kos berdasarkan lokasi atau harga.', '2023-11-18 02:17:43'),
(12, 'Michel', 'michel@hotmail.com', 'Kritik dan Saran untuk Kos Sari', 'Saya menemukan bahwa fasilitas di Kos X kurang memadai, terutama internet yang sering putus. Harap ditingkatkan', '2023-11-18 02:18:25');

-- --------------------------------------------------------

--
-- Table structure for table `pemesanan`
--

CREATE TABLE `pemesanan` (
  `pemesanan_id` int(11) NOT NULL,
  `penyewa_id` int(11) DEFAULT NULL,
  `kos_id` int(11) DEFAULT NULL,
  `pemilik_id` int(11) DEFAULT NULL,
  `jumlah_kamar` int(11) NOT NULL,
  `tanggal_pemesanan` date DEFAULT NULL,
  `tanggal_checkin` date DEFAULT NULL,
  `tanggal_checkout` date DEFAULT NULL,
  `status` enum('pending','dalam proses','aktif','selesai','expired') DEFAULT NULL,
  `durasi_sewa` int(11) DEFAULT NULL,
  `nomor_rekening_penyewa` varchar(255) DEFAULT NULL,
  `bank_penyewa` varchar(50) NOT NULL,
  `bukti_pembayaran` text DEFAULT NULL,
  `biaya_layanan` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pemesanan`
--

INSERT INTO `pemesanan` (`pemesanan_id`, `penyewa_id`, `kos_id`, `pemilik_id`, `jumlah_kamar`, `tanggal_pemesanan`, `tanggal_checkin`, `tanggal_checkout`, `status`, `durasi_sewa`, `nomor_rekening_penyewa`, `bank_penyewa`, `bukti_pembayaran`, `biaya_layanan`) VALUES
(1, 12, 4, 2, 1, '2023-12-20', '2023-11-01', '2023-12-01', 'aktif', 30, '19210483', 'BCA', 'bukti_bayar1.jpg', 15000),
(2, 13, 4, 2, 8, '2023-12-22', '2023-11-01', '2024-01-30', 'aktif', 90, '19210483', 'BCA', 'bukti_bayar2.jpg', 15000);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `nomor_ktp` varchar(20) NOT NULL,
  `nama_lengkap` varchar(255) NOT NULL,
  `jenis_kelamin` varchar(10) DEFAULT NULL,
  `no_telpon` varchar(15) DEFAULT NULL,
  `alamat_lengkap` text DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL,
  `role` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `nomor_ktp`, `nama_lengkap`, `jenis_kelamin`, `no_telpon`, `alamat_lengkap`, `email`, `username`, `password`, `role`) VALUES
(1, '3602041211870001', 'Naufal ulwan ismail', 'Pria', '0895332870517', 'Jakarta Industrial Estate Pulogadung,Jl. Pulo Lentut Kav. II-E/4, Pulogadung,Jakarta Timur Indonesia', 'noval@gmail.com', 'noval', '123456', 'user'),
(2, '2345678901234567', 'Fadly Satrio Utomo', 'Pria', '085692062823', 'Jl. S. Wiryopranoto No. 37, Sawah Besar,Jakarta Barat Indonesia', 'fadlysatrio1@gmail.com', 'fadly', '123456', 'user'),
(3, '3456789012345678', 'M. Ainur Bayu Prasetyo', 'Pria', '081381725328', 'Jl. Pemuda No. 296,Jakarta Timur Indonesia', 'ainurbayu27@gmail.com', 'bayu', '654321', 'user');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`admin_id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- Indexes for table `kos`
--
ALTER TABLE `kos`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `message`
--
ALTER TABLE `message`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pemesanan`
--
ALTER TABLE `pemesanan`
  ADD PRIMARY KEY (`pemesanan_id`),
  ADD KEY `penyewa_id` (`penyewa_id`),
  ADD KEY `kos_id` (`kos_id`),
  ADD KEY `pemilik_id` (`pemilik_id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `admin_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `kos`
--
ALTER TABLE `kos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `message`
--
ALTER TABLE `message`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `pemesanan`
--
ALTER TABLE `pemesanan`
  MODIFY `pemesanan_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `pemesanan`
--
ALTER TABLE `pemesanan`
  ADD CONSTRAINT `pemesanan_ibfk_1` FOREIGN KEY (`pemilik_id`) REFERENCES `user` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

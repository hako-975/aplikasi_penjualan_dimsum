-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 01 Okt 2020 pada 16.54
-- Versi server: 10.4.13-MariaDB
-- Versi PHP: 7.4.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dimsum_kasir`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_log`
--

CREATE TABLE `tb_log` (
  `id_log` int(11) NOT NULL,
  `isi_log` text NOT NULL,
  `tanggal_log` int(11) NOT NULL,
  `id_user` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tb_log`
--

INSERT INTO `tb_log` (`id_log`, `isi_log`, `tanggal_log`, `id_user`) VALUES
(1, 'Print profile', 1601498313, 1),
(2, 'Print profile', 1601498354, 1),
(3, 'Menu baru dengan nama menu <b>Dimsum Ayam</b> berhasil ditambahkan', 1601498405, 1),
(4, 'Menu baru dengan nama menu <b>Dimsum Sayur</b> berhasil ditambahkan', 1601498410, 1),
(5, 'Menu baru dengan nama menu <b>Dimsum Sapi</b> berhasil ditambahkan', 1601498417, 1),
(6, 'Menu baru dengan nama menu <b>Dimsum Keju</b> berhasil ditambahkan', 1601498428, 1),
(7, 'Transaksi baru dengan kode invoice <b>01102020001001T0001</b> berhasil ditambahkan', 1601498456, 1),
(8, 'Pembayaran baru dengan kode invoice <b>01102020001001T0001</b> berhasil ditambahkan', 1601498469, 1),
(9, 'Print Pembayaran - 01102020001001T0001', 1601501584, 1),
(10, 'Transaksi baru dengan kode invoice <b>01102020001001T0002</b> berhasil ditambahkan', 1601504384, 1),
(11, 'Pembayaran baru dengan kode invoice <b>01102020001001T0002</b> berhasil ditambahkan', 1601504724, 1),
(12, 'Print Pembayaran - 01102020001001T0002', 1601504726, 1),
(13, 'Print Pembayaran - <b>01102020001001T0002</b>', 1601504792, 1),
(14, 'Transaksi baru dengan kode invoice <b>01102020001001T0003</b> berhasil ditambahkan', 1601529168, 1),
(15, 'Print Laporan dengan tanggal11', 1601530118, 1),
(16, 'Print Laporan dengan tanggal11', 1601530135, 1),
(17, 'Print Laporan dengan tanggal2020-10-012020-10-01', 1601530217, 1),
(18, 'Print Laporan dari tanggal2020-10-01 sampai 2020-10-01, status bayar : semua', 1601530441, 1),
(19, 'Print Laporan dari tanggal2020-10-01 sampai 2020-10-01, status bayar : semua', 1601530460, 1),
(20, 'Print Laporan dari tanggal2020-10-01 sampai 2020-10-01, status bayar : semua', 1601530473, 1),
(21, 'Print Laporan dari tanggal2020-10-01 sampai 2020-10-01, status bayar : semua', 1601530521, 1),
(22, 'Print Laporan dari tanggal2020-10-01 sampai 2020-10-01, status bayar : semua', 1601530569, 1),
(23, 'Print Laporan dari tanggal2020-10-01 sampai 2020-10-01, status bayar : semua', 1601530587, 1),
(24, 'Print Laporan dari tanggal2020-10-01 sampai 2020-10-01, status bayar : semua', 1601530632, 1),
(25, 'Print Laporan dari tanggal2020-10-01 sampai 2020-10-01, status bayar : semua', 1601530636, 1),
(26, 'Print Laporan dari tanggal2020-10-01 sampai 2020-10-01, status bayar : semua', 1601530642, 1),
(27, 'Print Laporan dari tanggal2020-10-01 sampai 2020-10-01, status bayar : semua', 1601530671, 1),
(28, 'Print Laporan dari tanggal2020-10-01 sampai 2020-10-01, status bayar : semua', 1601530716, 1),
(29, 'Print Laporan dari tanggal2020-10-01 sampai 2020-10-01, status bayar : semua', 1601530741, 1),
(30, 'Print Laporan dari tanggal2020-10-01 sampai 2020-10-01, status bayar : semua', 1601530751, 1),
(31, 'Print Laporan dari tanggal2020-10-01 sampai 2020-10-01, status bayar : semua', 1601530761, 1),
(32, 'Print Laporan dari tanggal2020-10-01 sampai 2020-10-01, status bayar : semua', 1601530794, 1),
(33, 'Print Laporan dari tanggal2020-10-01 sampai 2020-10-01, status bayar : semua', 1601530804, 1),
(34, 'Print Laporan dari tanggal2020-10-01 sampai 2020-10-01, status bayar : semua', 1601530833, 1),
(35, 'Print Laporan dari tanggal2020-10-01 sampai 2020-10-01, status bayar : semua', 1601530880, 1),
(36, 'Print Laporan dari tanggal2020-10-01 sampai 2020-10-01, status bayar : semua', 1601530889, 1),
(37, 'Print Laporan dari tanggal2020-10-01 sampai 2020-10-01, status bayar : semua', 1601530894, 1),
(38, 'Print Laporan dari tanggal2020-10-01 sampai 2020-10-01, status bayar : semua', 1601530911, 1),
(39, 'Print Laporan dari tanggal2020-10-01 sampai 2020-10-01, status bayar : semua', 1601530920, 1),
(40, 'Print Laporan dari tanggal2020-10-01 sampai 2020-10-01, status bayar : semua', 1601530937, 1),
(41, 'Print Laporan dari tanggal2020-10-01 sampai 2020-10-01, status bayar : semua', 1601530943, 1),
(42, 'Print Laporan dari tanggal2020-10-01 sampai 2020-10-01, status bayar : semua', 1601530964, 1),
(43, 'Print Laporan dari tanggal2020-10-01 sampai 2020-10-01, status bayar : semua', 1601530973, 1),
(44, 'Print Laporan dari tanggal2020-10-01 sampai 2020-10-01, status bayar : belum_dibayar', 1601531127, 1),
(45, 'Print Laporan dari tanggal2020-10-01 sampai 2020-10-01, status bayar : belum_dibayar', 1601531244, 1),
(46, 'Print Laporan dari tanggal2020-10-01 sampai 2020-10-01, status bayar : belum_dibayar', 1601531263, 1),
(47, 'Print Laporan dari tanggal2020-10-01 sampai 2020-10-01, status bayar : semua', 1601531296, 1),
(48, 'Print Laporan dari tanggal2020-10-01 sampai 2020-10-01, status bayar : semua', 1601531350, 1),
(49, 'Print Laporan dari tanggal2020-10-01 sampai 2020-10-01, status bayar : semua', 1601531353, 1),
(50, 'Print Laporan dari tanggal2020-10-01 sampai 2020-10-01, status bayar : semua', 1601531357, 1),
(51, 'Print Laporan dari tanggal2020-10-01 sampai 2020-10-01, status bayar : semua', 1601531420, 1),
(52, 'Print Laporan dari tanggal2020-10-01 sampai 2020-10-01, status bayar : semua', 1601531426, 1),
(53, 'Print Laporan dari tanggal2020-10-01 sampai 2020-10-01, status bayar : semua', 1601531480, 1),
(54, 'Print Laporan dari tanggal2020-10-01 sampai 2020-10-01, status bayar : semua', 1601531492, 1),
(55, 'Print Laporan dari tanggal2020-10-01 sampai 2020-10-01, status bayar : semua', 1601531497, 1),
(56, 'Print Laporan dari tanggal2020-10-01 sampai 2020-10-01, status bayar : sudah_dibayar', 1601531539, 1),
(57, 'Print Laporan dari tanggal2020-10-01 sampai 2020-10-01, status bayar : semua', 1601531549, 1),
(58, 'Print Laporan dari tanggal2020-10-01 sampai 2020-10-01, status bayar : semua', 1601531613, 1),
(59, 'Print Laporan dari tanggal2020-10-01 sampai 2020-10-01, status bayar : sudah_dibayar', 1601531830, 1),
(60, 'Print Laporan dari tanggal2020-10-01 sampai 2020-10-01, status bayar : sudah_dibayar', 1601531893, 1),
(61, 'Print Laporan dari tanggal2020-10-01 sampai 2020-10-01, status bayar : sudah_dibayar', 1601531905, 1),
(62, 'Print Laporan dari tanggal2020-10-01 sampai 2020-10-01, status bayar : sudah_dibayar', 1601531933, 1),
(63, 'Print Laporan dari tanggal2020-10-01 sampai 2020-10-01, status bayar : sudah_dibayar', 1601531942, 1),
(64, 'Print Laporan dari tanggal2020-10-01 sampai 2020-10-01, status bayar : sudah_dibayar', 1601531987, 1),
(65, 'Pembayaran baru dengan kode invoice <b>01102020001001T0003</b> berhasil ditambahkan', 1601531997, 1),
(66, 'Print Pembayaran dengan kode invoice <b>01102020001001T0003</b>', 1601531999, 1),
(67, 'Print Laporan dari tanggal2020-10-01 sampai 2020-10-01, status bayar : sudah_dibayar', 1601532012, 1),
(68, 'Print Laporan dari tanggal2020-10-01 sampai 2020-10-01, status bayar : sudah_dibayar', 1601532029, 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_menu`
--

CREATE TABLE `tb_menu` (
  `id_menu` int(11) NOT NULL,
  `nama_menu` varchar(100) NOT NULL,
  `harga_menu` int(11) NOT NULL,
  `id_outlet` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tb_menu`
--

INSERT INTO `tb_menu` (`id_menu`, `nama_menu`, `harga_menu`, `id_outlet`) VALUES
(1, 'Dimsum Ayam', 2500, 1),
(2, 'Dimsum Sayur', 2000, 1),
(3, 'Dimsum Sapi', 3000, 1),
(4, 'Dimsum Keju', 3000, 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_outlet`
--

CREATE TABLE `tb_outlet` (
  `id_outlet` int(11) NOT NULL,
  `nama_outlet` varchar(100) NOT NULL,
  `no_telepon_outlet` varchar(20) NOT NULL,
  `alamat_outlet` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tb_outlet`
--

INSERT INTO `tb_outlet` (`id_outlet`, `nama_outlet`, `no_telepon_outlet`, `alamat_outlet`) VALUES
(1, 'At Dymsum Pocis', '087808675313', 'Jl. AMD Babakan Pocis'),
(2, 'At Dymsum Pamulang', '087808675314', 'Jl. Pattimura');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_pembayaran`
--

CREATE TABLE `tb_pembayaran` (
  `id_pembayaran` int(11) NOT NULL,
  `total_pembayaran` int(11) NOT NULL,
  `jml_uang_dibayar` int(11) NOT NULL,
  `kembalian` int(11) NOT NULL,
  `tgl_pembayaran` int(11) NOT NULL,
  `kode_invoice` varchar(100) NOT NULL,
  `id_user` int(11) NOT NULL,
  `id_outlet` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tb_pembayaran`
--

INSERT INTO `tb_pembayaran` (`id_pembayaran`, `total_pembayaran`, `jml_uang_dibayar`, `kembalian`, `tgl_pembayaran`, `kode_invoice`, `id_user`, `id_outlet`) VALUES
(1, 18000, 20000, 2000, 1601498469, '01102020001001T0001', 1, 1),
(2, 9000, 10000, 1000, 1601504724, '01102020001001T0002', 1, 1),
(3, 2000, 5000, 3000, 1601531997, '01102020001001T0003', 1, 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_transaksi`
--

CREATE TABLE `tb_transaksi` (
  `id_transaksi` int(11) NOT NULL,
  `kode_invoice` varchar(100) NOT NULL,
  `kuantitas` int(11) NOT NULL,
  `status_bayar` enum('belum_dibayar','sudah_dibayar') NOT NULL,
  `tgl_transaksi` int(11) NOT NULL,
  `keterangan` text NOT NULL,
  `id_menu` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `id_outlet` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tb_transaksi`
--

INSERT INTO `tb_transaksi` (`id_transaksi`, `kode_invoice`, `kuantitas`, `status_bayar`, `tgl_transaksi`, `keterangan`, `id_menu`, `id_user`, `id_outlet`) VALUES
(1, '01102020001001T0001', 2, 'sudah_dibayar', 1601498456, '', 2, 1, 1),
(2, '01102020001001T0001', 2, 'sudah_dibayar', 1601498456, '', 1, 1, 1),
(3, '01102020001001T0001', 3, 'sudah_dibayar', 1601498456, '', 3, 1, 1),
(4, '01102020001001T0002', 3, 'sudah_dibayar', 1601504384, 'Pedas poll', 3, 1, 1),
(5, '01102020001001T0003', 1, 'sudah_dibayar', 1601529168, 'jangan pakai saus\r\n', 2, 1, 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_user`
--

CREATE TABLE `tb_user` (
  `id_user` int(11) NOT NULL,
  `nama_user` varchar(100) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(255) NOT NULL,
  `jabatan` enum('administrator','kasir') NOT NULL,
  `id_outlet` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tb_user`
--

INSERT INTO `tb_user` (`id_user`, `nama_user`, `username`, `password`, `jabatan`, `id_outlet`) VALUES
(1, 'Dimas Ramadhan', 'dimas123', '$2y$10$b4VVR0au7fQTJH8C/FKGL.WmpSja8TCTuWunQaQN0vYCu8WfHfxcO', 'administrator', 1),
(2, 'Haus Coding Dev', 'hako-975', '$2y$10$b4VVR0au7fQTJH8C/FKGL.WmpSja8TCTuWunQaQN0vYCu8WfHfxcO', 'administrator', 2);

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `tb_log`
--
ALTER TABLE `tb_log`
  ADD PRIMARY KEY (`id_log`),
  ADD KEY `id_user` (`id_user`);

--
-- Indeks untuk tabel `tb_menu`
--
ALTER TABLE `tb_menu`
  ADD PRIMARY KEY (`id_menu`),
  ADD KEY `id_outlet` (`id_outlet`);

--
-- Indeks untuk tabel `tb_outlet`
--
ALTER TABLE `tb_outlet`
  ADD PRIMARY KEY (`id_outlet`);

--
-- Indeks untuk tabel `tb_pembayaran`
--
ALTER TABLE `tb_pembayaran`
  ADD PRIMARY KEY (`id_pembayaran`),
  ADD KEY `id_transaksi` (`kode_invoice`),
  ADD KEY `id_user` (`id_user`),
  ADD KEY `id_outlet` (`id_outlet`);

--
-- Indeks untuk tabel `tb_transaksi`
--
ALTER TABLE `tb_transaksi`
  ADD PRIMARY KEY (`id_transaksi`),
  ADD KEY `id_menu` (`id_menu`),
  ADD KEY `id_user` (`id_user`),
  ADD KEY `id_outlet` (`id_outlet`);

--
-- Indeks untuk tabel `tb_user`
--
ALTER TABLE `tb_user`
  ADD PRIMARY KEY (`id_user`),
  ADD KEY `id_outlet` (`id_outlet`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `tb_log`
--
ALTER TABLE `tb_log`
  MODIFY `id_log` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=69;

--
-- AUTO_INCREMENT untuk tabel `tb_menu`
--
ALTER TABLE `tb_menu`
  MODIFY `id_menu` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `tb_outlet`
--
ALTER TABLE `tb_outlet`
  MODIFY `id_outlet` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `tb_pembayaran`
--
ALTER TABLE `tb_pembayaran`
  MODIFY `id_pembayaran` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `tb_transaksi`
--
ALTER TABLE `tb_transaksi`
  MODIFY `id_transaksi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT untuk tabel `tb_user`
--
ALTER TABLE `tb_user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

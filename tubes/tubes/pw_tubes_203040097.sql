-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 26 Bulan Mei 2021 pada 16.02
-- Versi server: 10.4.16-MariaDB
-- Versi PHP: 7.4.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pw_tubes_203040097`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `barang`
--

CREATE TABLE `barang` (
  `id` int(10) NOT NULL,
  `nama` varchar(256) NOT NULL,
  `gambar` varchar(256) NOT NULL,
  `deskripsi` varchar(256) NOT NULL,
  `harga` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `barang`
--

INSERT INTO `barang` (`id`, `nama`, `gambar`, `deskripsi`, `harga`) VALUES
(1, 'BoreUp Kit NMAX/Aerox BRT ', 'brt.jpg', 'Paket Bore Up NMAX/Aerox 202cc Full', 'Rp. 7.250.000'),
(2, 'BoreUp Kit Vario 150/PCX 150 BRT', 'brt2.jpeg', 'Paket Bore Up Vario 150/PCX 150 180cc', 'Rp. 3.665.000'),
(3, 'BoreUp Kit CRF 150/Verza BRT', 'brt3.jfif', 'Paket Bore Up CRF 150/Verza 202/212/225/238cc Full', 'Rp. 9.120.000'),
(18, 'BoreUp Kit 62mm BRT Yamaha Jupiter MX R15 Vixion Xabre', 'brt4.jpg', 'Include : 1 Blok BRT 62mm 1 set Piston set BRT 62mm 1 Master Cam BRT type T', 'Rp. 1.150.000'),
(19, 'BoreUp Kit Mio Sporty/Mio Soul/Nouvo BRT ', 'brt5.png', 'Include : 1 Super Cast Iron Boring 58mm, 1 Forged Piston 58mm, Gasket, Super Master Cam Choose type : S,T,R', 'Rp. 1.400.000'),
(20, 'BoreUp Kit KLX DTRACKER BRT', 'brt6.jpg', 'Paket Bore Up KLX Full 188cc', 'Rp. 7.150.000'),
(21, 'BoreUp Kit Sonic GTR CBR150 BRT', 'brt7.png', 'Paket Bore Up Sonic Supra GTR CBR 150 BRT Full 180cc', 'Rp. 3.250.000'),
(22, 'BoreUp Kit C100 SUPRAFIT LEGENDA ASTREA BRT', 'brt8.jpg', 'Include : SUPER CAST IRON 53.40 MM PISTON GASKET SUPER MASTERCAM SERI ', 'Rp. 1.350.000'),
(23, 'BoreUp Kit Vega ZR Jupiter Z BRT', 'brt9.png', 'Paket Bore Up Vega ZR/Jupiter Z 130cc', 'Rp. 1.500.000'),
(24, 'BoreUp Kit BeAT/Vario/Scoopy/Spacy BRT', 'brt10.jpg', 'Paket Bore Up Sonic Supra GTR CBR 150 BRT Full 130cc', 'Rp. 2.300.000');

-- --------------------------------------------------------

--
-- Struktur dari tabel `mahasiswa`
--

CREATE TABLE `mahasiswa` (
  `id` int(11) NOT NULL,
  `img` varchar(100) NOT NULL,
  `nrp` varchar(10) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `jurusan` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `mahasiswa`
--

INSERT INTO `mahasiswa` (`id`, `img`, `nrp`, `nama`, `email`, `jurusan`) VALUES
(1, 'vin.jpg', '203040097', 'Hervin Fakhrul', 'hervinfakhrulm@gmail.com', 'Teknik Informatika'),
(2, 'wawa.jpg', '203040500', 'Nazwa Cecillia', 'nzwccll@gmail.com', 'Fakultas Kedokteran Gigi'),
(3, 'agoy.jpg', '203040112', 'Yoga Bagja Ramadhan', 'yogaarmdhn@gmail.com', 'Teknik Informatika'),
(4, 'man.jpg', '203040029', 'Hilman Sulaeman', 'hilmansulaeman@gmail.com', 'Teknik Informatika'),
(5, 'izal.jpg', '203040075', 'Muhammad Afrizal Fadillah', 'afrizalfadillah@gmail.com', 'Teknik Informatika'),
(6, 'bule.jpg', '203040043', 'Muhammad Rizky', 'muhammadrizky@gmail.com', 'Teknik Informatika'),
(7, 'mahen.jpg', '203040094', 'Rizki Mahendra', 'rzkymhnn@gmail.com', 'Teknik Informatika'),
(8, 'agam.jpg', '203040098', 'Agam Ramdhan Kamil Atmaja', 'agamramdhan@gmail.com', 'Teknik Informatika'),
(9, 'vale.jpg', '203040086', 'Abizar Valentino Fachri', 'abivale@gmail.com', 'Teknik Informatika'),
(10, 'butong.jpg', '203040117', 'Fikri Ardiansyah', 'fkryadr@gmail.com', 'Teknik Informatika');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `username` varchar(64) NOT NULL,
  `password` varchar(256) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`id`, `username`, `password`) VALUES
(1, 'queenagella', '$2y$10$PWZlslJUUIXf18dB7.b47O5/EwIc/43YtYrXqm0sdrS.CkbbzYbfq'),
(2, 'admin', '$2y$10$CuMp56TMhYQLq7yd6Pda/OkUU4eeXesUQlM2dGaTKExy3QdrPhi52');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `barang`
--
ALTER TABLE `barang`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `mahasiswa`
--
ALTER TABLE `mahasiswa`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `barang`
--
ALTER TABLE `barang`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT untuk tabel `mahasiswa`
--
ALTER TABLE `mahasiswa`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT untuk tabel `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

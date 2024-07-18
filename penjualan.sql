-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 03 Jul 2023 pada 03.19
-- Versi server: 10.4.22-MariaDB
-- Versi PHP: 7.4.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `penjualan`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `adminn`
--

CREATE TABLE `adminn` (
  `username` varchar(50) NOT NULL,
  `password` varchar(100) NOT NULL,
  `nama_lengkap` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `adminn`
--

INSERT INTO `adminn` (`username`, `password`, `nama_lengkap`, `email`) VALUES
('Azis', '$2y$10$vZKKmz7G3EnR1oGMhtoTcuHMUA2Q0tMOWTYLs56lwlOGh5qpyZLUO', 'Muhammad Azis', 'muhammadazis0771@gmail.com'),
('ilham', '$2y$10$J/xk9tJ3CwL7xQp8XB.jOeoJqmXo/AYbUkCbmmt.mO2wcEMbuJaN.', 'Muhammad Nur Ilham Nurdin', 'ilham@gmail.com');

-- --------------------------------------------------------

--
-- Struktur dari tabel `konsumen`
--

CREATE TABLE `konsumen` (
  `id_konsumen` int(5) NOT NULL,
  `nama_konsumen` varchar(500) NOT NULL,
  `no_hp` varchar(150) NOT NULL,
  `alamat` varchar(500) NOT NULL,
  `id_produk` varchar(500) NOT NULL,
  `qty` int(255) NOT NULL,
  `id_transaksi` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `konsumen`
--

INSERT INTO `konsumen` (`id_konsumen`, `nama_konsumen`, `no_hp`, `alamat`, `id_produk`, `qty`, `id_transaksi`) VALUES
(2002, 'Fadillah', '0763456981208', 'klaten jl.bayam no.53 rt/rw 01/02 rumah nomor 5 ', '1001', 53, '1');

-- --------------------------------------------------------

--
-- Struktur dari tabel `produk`
--

CREATE TABLE `produk` (
  `id_produk` int(5) NOT NULL,
  `nama_produk` varchar(30) NOT NULL,
  `gambar` varchar(500) NOT NULL,
  `harga_produk` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `produk`
--

INSERT INTO `produk` (`id_produk`, `nama_produk`, `gambar`, `harga_produk`) VALUES
(1001, 'Rok Lilit Batik - M1', 'model1.jpg', 165000),
(1002, 'Rok Lilit Batik - M2', 'model2.jpg', 250000),
(1003, 'Rok Lilit Batik - M3', 'model3.jpg', 235000),
(2001, 'Tas Batik - M1', 'tas1.jpg', 1000000),
(2002, 'Tas Batik - M2', 'tas2.jpg', 1100000),
(2003, 'Tas Batik - M3', 'tas3.jpg', 1200000),
(3001, 'Batik Couple - M1', 'baju1.jpeg', 450000),
(3002, 'Batik Couple - M2', 'baju2.jpg', 455000),
(3003, 'Batik Couple - M3', 'baju3.jpg', 500000);

-- --------------------------------------------------------

--
-- Struktur dari tabel `transaksi`
--

CREATE TABLE `transaksi` (
  `id_transaksi` int(5) NOT NULL,
  `jenis_transaksi` varchar(35) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `transaksi`
--

INSERT INTO `transaksi` (`id_transaksi`, `jenis_transaksi`) VALUES
(1, 'Cash or Duel'),
(2, 'BatraPay'),
(3, 'Transfer');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `adminn`
--
ALTER TABLE `adminn`
  ADD PRIMARY KEY (`username`);

--
-- Indeks untuk tabel `konsumen`
--
ALTER TABLE `konsumen`
  ADD PRIMARY KEY (`id_konsumen`);

--
-- Indeks untuk tabel `produk`
--
ALTER TABLE `produk`
  ADD PRIMARY KEY (`id_produk`);

--
-- Indeks untuk tabel `transaksi`
--
ALTER TABLE `transaksi`
  ADD PRIMARY KEY (`id_transaksi`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

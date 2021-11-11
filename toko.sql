-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 11 Nov 2021 pada 13.11
-- Versi server: 10.4.18-MariaDB
-- Versi PHP: 7.3.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `toko`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `email` varchar(50) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `barang`
--

CREATE TABLE `barang` (
  `id_barang` varchar(20) NOT NULL,
  `nama_barang` varchar(30) NOT NULL,
  `harga` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `barang`
--

INSERT INTO `barang` (`id_barang`, `nama_barang`, `harga`) VALUES
('ID001', 'Celana kulot', 45000),
('ID002', 'Kemeja', 60000),
('ID003', 'Sepatu', 120000),
('ID004', 'Topi', 45500),
('ID005', 'Hijab', 35000),
('ID006', 'Celana Jeans', 90000),
('ID007', 'Kaca Mata', 40000),
('ID008', 'Sandal Jelly', 50500),
('ID009', 'Ikat Pinggang', 25000),
('ID010', 'Kaos Kaki', 14500);

-- --------------------------------------------------------

--
-- Struktur dari tabel `faktur`
--

CREATE TABLE `faktur` (
  `id_faktur` varchar(10) NOT NULL,
  `id_pelanggan` varchar(20) NOT NULL,
  `tanggal` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `faktur`
--

INSERT INTO `faktur` (`id_faktur`, `id_pelanggan`, `tanggal`) VALUES
('F1001', '20210106', '2021-10-01'),
('F1002', '20210108', '2021-10-19'),
('F1003', '20210104', '2021-10-03'),
('F1004', '20210104', '2021-10-04'),
('F1005', '20210104', '2021-10-13'),
('F1006', '20210104', '2021-10-06'),
('F1007', '20210106', '2021-10-23'),
('F1008', '20210108', '2021-10-08'),
('F1009', '20210109', '2021-10-09'),
('F1010', '20210106', '2021-10-03');

-- --------------------------------------------------------

--
-- Struktur dari tabel `faktur_barang`
--

CREATE TABLE `faktur_barang` (
  `id_barang` varchar(20) NOT NULL,
  `id_faktur` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `faktur_barang`
--

INSERT INTO `faktur_barang` (`id_barang`, `id_faktur`) VALUES
('ID001', 'F1001'),
('ID002', 'F1002'),
('ID003', 'F1003'),
('ID004', 'F1004'),
('ID005', 'F1005'),
('ID006', 'F1006'),
('ID007', 'F1007'),
('ID008', 'F1008'),
('ID009', 'F1009'),
('ID010', 'F1010');

-- --------------------------------------------------------

--
-- Struktur dari tabel `pelanggan`
--

CREATE TABLE `pelanggan` (
  `id_pelanggan` varchar(20) NOT NULL,
  `nama_pelanggan` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `pelanggan`
--

INSERT INTO `pelanggan` (`id_pelanggan`, `nama_pelanggan`) VALUES
('20210101', 'Denis'),
('20210102', 'Anisa'),
('20210103', 'Kiano'),
('20210104', 'Elisa'),
('20210105', 'Rafi'),
('20210106', 'Tama'),
('20210107', 'Arinda'),
('20210108', 'Candra'),
('20210109', 'Martin'),
('20210110', 'Iqbaal');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `barang`
--
ALTER TABLE `barang`
  ADD PRIMARY KEY (`id_barang`);

--
-- Indeks untuk tabel `faktur`
--
ALTER TABLE `faktur`
  ADD PRIMARY KEY (`id_faktur`),
  ADD KEY `id_pelanggan` (`id_pelanggan`);

--
-- Indeks untuk tabel `faktur_barang`
--
ALTER TABLE `faktur_barang`
  ADD KEY `id_barang` (`id_barang`),
  ADD KEY `id_faktur` (`id_faktur`);

--
-- Indeks untuk tabel `pelanggan`
--
ALTER TABLE `pelanggan`
  ADD PRIMARY KEY (`id_pelanggan`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `faktur`
--
ALTER TABLE `faktur`
  ADD CONSTRAINT `id_pelanggan` FOREIGN KEY (`id_pelanggan`) REFERENCES `pelanggan` (`id_pelanggan`);

--
-- Ketidakleluasaan untuk tabel `faktur_barang`
--
ALTER TABLE `faktur_barang`
  ADD CONSTRAINT `id_barang` FOREIGN KEY (`id_barang`) REFERENCES `barang` (`id_barang`),
  ADD CONSTRAINT `id_faktur` FOREIGN KEY (`id_faktur`) REFERENCES `faktur` (`id_faktur`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

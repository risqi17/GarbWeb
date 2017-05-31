-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 30 Mei 2017 pada 06.19
-- Versi Server: 10.1.16-MariaDB
-- PHP Version: 7.0.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `garbdb`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `administrator`
--

CREATE TABLE `administrator` (
  `username` varchar(10) NOT NULL,
  `nama_admin` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL,
  `foto` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `administrator`
--

INSERT INTO `administrator` (`username`, `nama_admin`, `email`, `password`, `foto`) VALUES
('dj', 'dyah ayu', 'dyah@gmail.com', '93beee69e352ce6bb46be958036950a6', 'file_1496037392.png'),
('jap', 'jap', 'japar@gmail.com', 'bcb8734b988f8310fca260fbf6f734e8', 'file_1496037784.jpg'),
('ris', 'ris', 'risqi@gmail', '9211fb19eab15e79b6967b9e37afefff', ''),
('risqi', 'risqi', 'risqi@gmail.com', '1cef7ac56702c7e78e683adf09170eec', '');

-- --------------------------------------------------------

--
-- Struktur dari tabel `model`
--

CREATE TABLE `model` (
  `id_model` varchar(10) NOT NULL,
  `nama_model` varchar(50) NOT NULL,
  `ukuran` varchar(5) NOT NULL,
  `warna` varchar(20) NOT NULL,
  `harga` int(11) NOT NULL,
  `foto` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `model`
--

INSERT INTO `model` (`id_model`, `nama_model`, `ukuran`, `warna`, `harga`, `foto`) VALUES
('112', 'celana', '34', 'hitam', 10000, 'file_1496038116.jpg'),
('22', 'jaket', 'M', 'briu', 300000, 'file_1496038227.jpg'),
('3', 'kemeja', 'm', 'merah', 20000, 'file_1496038148.jpg'),
('55', 'gg', '89', 'ungu', 300, 'file_1496038193.jpg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `pembayaran`
--

CREATE TABLE `pembayaran` (
  `id_pembayaran` varchar(10) NOT NULL,
  `id_pemesanan` varchar(10) NOT NULL,
  `jenis_bayar` varchar(30) NOT NULL,
  `jumlah_bayar` int(11) NOT NULL,
  `status` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `pembayaran`
--

INSERT INTO `pembayaran` (`id_pembayaran`, `id_pemesanan`, `jenis_bayar`, `jumlah_bayar`, `status`) VALUES
('P01', 'PM01', 'Langsung', 20000, 'Lunas');

-- --------------------------------------------------------

--
-- Struktur dari tabel `pemesanan`
--

CREATE TABLE `pemesanan` (
  `id_pemesanan` varchar(10) NOT NULL,
  `id_user` varchar(10) NOT NULL,
  `id_pjh` varchar(10) NOT NULL,
  `id_model` varchar(10) NOT NULL,
  `ukuran` varchar(5) NOT NULL,
  `warna` varchar(50) NOT NULL,
  `jenis` varchar(50) NOT NULL,
  `keterangan` varchar(100) NOT NULL,
  `jumlah` int(3) NOT NULL,
  `estimasi_waktu` varchar(10) NOT NULL,
  `total_harga` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `pemesanan`
--

INSERT INTO `pemesanan` (`id_pemesanan`, `id_user`, `id_pjh`, `id_model`, `ukuran`, `warna`, `jenis`, `keterangan`, `jumlah`, `estimasi_waktu`, `total_harga`) VALUES
('PM00000001', 'risqi', 'q', 'Kemeja', 'M', 'Hitam', 'Pendek', 'blehh', 5, '', 0),
('PM00000002', 'risqi', 'q', 'Kemeja', '32', 'Biru', 'Panjang', 'hahhaa', 2, '', 0),
('PM00000003', 'risqi', 'q', 'Celana', '32', 'Biru', 'Pendek', 'hahahhakkkk', 6, '', 0);

-- --------------------------------------------------------

--
-- Struktur dari tabel `penjahit`
--

CREATE TABLE `penjahit` (
  `id_pjh` varchar(10) NOT NULL,
  `nama_pjh` varchar(100) NOT NULL,
  `email_pjh` varchar(50) NOT NULL,
  `telepon_pjh` varchar(15) NOT NULL,
  `alamat_pjh` varchar(100) NOT NULL,
  `jk_pjh` varchar(2) NOT NULL,
  `foto_pjh` varchar(255) NOT NULL,
  `password_pjh` varchar(12) NOT NULL,
  `ver_code` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `penjahit`
--

INSERT INTO `penjahit` (`id_pjh`, `nama_pjh`, `email_pjh`, `telepon_pjh`, `alamat_pjh`, `jk_pjh`, `foto_pjh`, `password_pjh`, `ver_code`) VALUES
('dimas12', 'dimas bayu', 'dimas@gmail.com', '', '', 'L', '', 'a6ooP7d', ''),
('q', 'q', 'q', '', '', 'L', '', 'q', '');

-- --------------------------------------------------------

--
-- Struktur dari tabel `photo`
--

CREATE TABLE `photo` (
  `id` int(11) NOT NULL,
  `nama_foto` varchar(250) NOT NULL,
  `photo` varchar(250) NOT NULL,
  `id_pjh` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `saran`
--

CREATE TABLE `saran` (
  `id` int(11) NOT NULL,
  `pemberi` varchar(10) NOT NULL,
  `isi` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `saran`
--

INSERT INTO `saran` (`id`, `pemberi`, `isi`) VALUES
(2, 'risqi', 'iyaa begitulah'),
(3, 'risqi', 'siang');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `id_user` varchar(10) NOT NULL,
  `nama_user` varchar(100) NOT NULL,
  `email_user` varchar(50) NOT NULL,
  `telepon_user` varchar(15) NOT NULL,
  `jk_user` varchar(2) NOT NULL,
  `foto_user` varchar(255) NOT NULL,
  `alamat_user` varchar(100) NOT NULL,
  `password_user` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`id_user`, `nama_user`, `email_user`, `telepon_user`, `jk_user`, `foto_user`, `alamat_user`, `password_user`) VALUES
('dd', 'dd', 'dd', '', 'L', '', '', 'dd'),
('risa', 'risa', 'risa@', '', 'P', '', '', 'xP7LGNx'),
('risqi', 'risqi ahmad', 'risqi@gmail.com', '', 'L', '', '', 'risqi');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `administrator`
--
ALTER TABLE `administrator`
  ADD PRIMARY KEY (`username`);

--
-- Indexes for table `model`
--
ALTER TABLE `model`
  ADD PRIMARY KEY (`id_model`);

--
-- Indexes for table `pembayaran`
--
ALTER TABLE `pembayaran`
  ADD PRIMARY KEY (`id_pembayaran`);

--
-- Indexes for table `pemesanan`
--
ALTER TABLE `pemesanan`
  ADD PRIMARY KEY (`id_pemesanan`);

--
-- Indexes for table `penjahit`
--
ALTER TABLE `penjahit`
  ADD PRIMARY KEY (`id_pjh`);

--
-- Indexes for table `photo`
--
ALTER TABLE `photo`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `saran`
--
ALTER TABLE `saran`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `photo`
--
ALTER TABLE `photo`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `saran`
--
ALTER TABLE `saran`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

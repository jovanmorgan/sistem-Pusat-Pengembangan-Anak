-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 07 Jun 2024 pada 08.33
-- Versi server: 10.4.32-MariaDB
-- Versi PHP: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ppa`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `admin`
--

CREATE TABLE `admin` (
  `id_admin` int(25) NOT NULL,
  `nama` varchar(200) NOT NULL,
  `username` varchar(150) NOT NULL,
  `password` varchar(150) NOT NULL,
  `fp` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `admin`
--

INSERT INTO `admin` (`id_admin`, `nama`, `username`, `password`, `fp`) VALUES
(1, 'admin', 'admin', '1', '665588cfd995c.png');

-- --------------------------------------------------------

--
-- Struktur dari tabel `anak`
--

CREATE TABLE `anak` (
  `id_anak` int(25) NOT NULL,
  `id_kelas` int(25) NOT NULL,
  `nama` varchar(150) NOT NULL,
  `tempat_lahir` varchar(70) NOT NULL,
  `tanggal_lahir` varchar(70) NOT NULL,
  `jk` varchar(10) NOT NULL,
  `hoby` text NOT NULL,
  `jenjang_umur` varchar(12) NOT NULL,
  `alamat` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `anak`
--

INSERT INTO `anak` (`id_anak`, `id_kelas`, `nama`, `tempat_lahir`, `tanggal_lahir`, `jk`, `hoby`, `jenjang_umur`, `alamat`) VALUES
(2, 3, 'rifal', 'rote', '09-May-2024', 'Laki-laki', 'game', '23', 'rote'),
(3, 1, 'van', 'naikoten', '15-May-2024', 'Laki-laki', 'game', '22', 'matani'),
(4, 1, 'wiwin', 'penfui', '22-May-2024', 'Perempuan', 'menyanyi', '14', 'penfui');

-- --------------------------------------------------------

--
-- Struktur dari tabel `bantuan`
--

CREATE TABLE `bantuan` (
  `id_bantuan` int(25) NOT NULL,
  `id_anak` int(25) NOT NULL,
  `nama_bantuan` varchar(150) NOT NULL,
  `id_sponsor` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `bantuan`
--

INSERT INTO `bantuan` (`id_bantuan`, `id_anak`, `nama_bantuan`, `id_sponsor`) VALUES
(2, 2, 'bantuan uang', 2),
(3, 3, 'bantuan kendaraan', 1),
(4, 4, 'bantuan uang', 3),
(5, 3, 'bantuan uang', 1),
(6, 4, 'sa', 2),
(7, 4, 'asx', 1),
(8, 2, 'asx', 3);

-- --------------------------------------------------------

--
-- Struktur dari tabel `jadwal`
--

CREATE TABLE `jadwal` (
  `id_jadwal` int(25) NOT NULL,
  `id_kegiatan` int(25) NOT NULL,
  `id_kelas` int(25) NOT NULL,
  `waktu` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `jadwal`
--

INSERT INTO `jadwal` (`id_jadwal`, `id_kegiatan`, `id_kelas`, `waktu`) VALUES
(5, 5, 1, '21-Jun-2024 18:37'),
(6, 5, 1, '21-Jun-2024 18:37'),
(7, 5, 2, '03-Jun-2024 15:38');

-- --------------------------------------------------------

--
-- Struktur dari tabel `kegiatan`
--

CREATE TABLE `kegiatan` (
  `id_kegiatan` int(25) NOT NULL,
  `nama_kegiatan` varchar(200) NOT NULL,
  `lokasi` text NOT NULL,
  `waktu` varchar(70) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `kegiatan`
--

INSERT INTO `kegiatan` (`id_kegiatan`, `nama_kegiatan`, `lokasi`, `waktu`) VALUES
(7, 'main bolah', 'main bolah', '03-Jun-2024 15:43'),
(8, 'game', 'game', '03-Jun-2024 15:43'),
(9, 'renang', 'renang', '03-Jun-2024 01:44');

-- --------------------------------------------------------

--
-- Struktur dari tabel `kelas`
--

CREATE TABLE `kelas` (
  `id_kelas` int(25) NOT NULL,
  `id_mentor` int(25) NOT NULL,
  `tahun_ajaran` varchar(150) NOT NULL,
  `nama_kelas` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `kelas`
--

INSERT INTO `kelas` (`id_kelas`, `id_mentor`, `tahun_ajaran`, `nama_kelas`) VALUES
(1, 2, '31-May-2024', 'kelas C'),
(2, 3, '24-May-2024', 'kelas B'),
(3, 7, '31-May-2024', 'kelas A'),
(4, 7, '21-Jun-2024', 'qwwq');

-- --------------------------------------------------------

--
-- Struktur dari tabel `mentor`
--

CREATE TABLE `mentor` (
  `id_mentor` int(25) NOT NULL,
  `nama` varchar(200) NOT NULL,
  `tempat_lahir` varchar(200) NOT NULL,
  `tanggal_lahir` varchar(70) NOT NULL,
  `jk` varchar(10) NOT NULL,
  `nomor_hp` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `mentor`
--

INSERT INTO `mentor` (`id_mentor`, `nama`, `tempat_lahir`, `tanggal_lahir`, `jk`, `nomor_hp`) VALUES
(7, 'sdsa', 'qeq3', '27-Jun-2024', 'Laki-laki', '6281237321412');

-- --------------------------------------------------------

--
-- Struktur dari tabel `orang_tua`
--

CREATE TABLE `orang_tua` (
  `id_orang_tua` int(25) NOT NULL,
  `id_anak` int(25) NOT NULL,
  `nama` varchar(200) NOT NULL,
  `username` varchar(150) NOT NULL,
  `password` varchar(150) NOT NULL,
  `fp` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `orang_tua`
--

INSERT INTO `orang_tua` (`id_orang_tua`, `id_anak`, `nama`, `username`, `password`, `fp`) VALUES
(1, 3, 'caca', 'orang tua', '1', '665572a492c39.png');

-- --------------------------------------------------------

--
-- Struktur dari tabel `perkembangan`
--

CREATE TABLE `perkembangan` (
  `id_perkembangan` int(25) NOT NULL,
  `id_anak` int(25) NOT NULL,
  `id_kegiatan` int(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `perkembangan`
--

INSERT INTO `perkembangan` (`id_perkembangan`, `id_anak`, `id_kegiatan`) VALUES
(2, 2, 9),
(4, 2, 8),
(5, 3, 7),
(6, 3, 7),
(7, 4, 8),
(8, 2, 7);

-- --------------------------------------------------------

--
-- Struktur dari tabel `pimpinan`
--

CREATE TABLE `pimpinan` (
  `id_pimpinan` int(25) NOT NULL,
  `nama` varchar(200) NOT NULL,
  `tempat_lahir` varchar(200) NOT NULL,
  `tanggal_lahir` varchar(50) NOT NULL,
  `jk` varchar(10) NOT NULL,
  `jabatan` varchar(50) NOT NULL,
  `pendidikan_terakhir` varchar(50) NOT NULL,
  `nomor_hp` varchar(20) NOT NULL,
  `alamat` text NOT NULL,
  `username` varchar(25) NOT NULL,
  `password` varchar(25) NOT NULL,
  `foto` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `pimpinan`
--

INSERT INTO `pimpinan` (`id_pimpinan`, `nama`, `tempat_lahir`, `tanggal_lahir`, `jk`, `jabatan`, `pendidikan_terakhir`, `nomor_hp`, `alamat`, `username`, `password`, `foto`) VALUES
(15, 'asx', 'asx', '17-Jun-2024', 'Laki-laki', 'asx', 'S2', '12312', '123', 'asx', 'asx', '../gambar/12345.png');

-- --------------------------------------------------------

--
-- Struktur dari tabel `ppa`
--

CREATE TABLE `ppa` (
  `id_ppa` int(11) NOT NULL,
  `gambar_ppa` text NOT NULL,
  `deskripsi_ppa` text NOT NULL,
  `visi` text NOT NULL,
  `misi` text NOT NULL,
  `gambar_struktur` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `ppa`
--

INSERT INTO `ppa` (`id_ppa`, `gambar_ppa`, `deskripsi_ppa`, `visi`, `misi`, `gambar_struktur`) VALUES
(1, '../../../assets/img/profile/4-bg-sekolah.jpg', 'Pusat Pengembangan Anak (PPA) merupakan suatu lembaga nirbala yang didirikan dalam rangka memberikan pelayanan kepada masyarakat secara umum. Pusat Pengembangan Anak adalah bentuk utama kemitraan Yayasan Compassion Indonesia (YCI) dengan gereja mitra. Melalui Pusat Pengembangan Anak (PPA), gereja mitra menjangkau dan melayani anak yang membutuhkan. Anak-anak dilayani dalam Pusat Pengembangan Anak (PPA) mulai dari usia tiga tahun sampai dua puluh tahun. Dengan pelayanan dalam jangka waktu yang panjang, Pusa\n\nPusat Pengembangan Anak adalah sebuah organisasi yang men di Afrika, Eropa, Amerika, dan Asia. Di Asia, compassion tea trhun sampai dua puluh\n\nPusat Pengembangan Anak (PPA) merupakan suatu lembaga pengembangan bagi anak-anak dari keluarga tidak mampu yang bekerja sama dengan suatu lembaga Pelayanan Pengembangan Anak yaitu Yayasan Compassion yang bertempat di Sulawesi Utara (Manado).', 'Terwujudnya pusat pengembangan anak secara holistic yang memiliki karakter seperti Yesus Kristus.', 'Sebagai tanggapan atas Anugerah Tuhan maka kami sepakat untuk melayani dan membina anak-anak PPA IO0496 secara holistic untuk menjadi pemimpin masa depan yang takut akan Tuhan.', '../../../assets/img/profile/struktur.jpg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `sponsor`
--

CREATE TABLE `sponsor` (
  `id_sponsor` int(25) NOT NULL,
  `nama` varchar(200) NOT NULL,
  `username` varchar(150) NOT NULL,
  `password` varchar(150) NOT NULL,
  `jk` varchar(150) NOT NULL,
  `usia` varchar(150) NOT NULL,
  `asal_negara` varchar(200) NOT NULL,
  `fp` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `sponsor`
--

INSERT INTO `sponsor` (`id_sponsor`, `nama`, `username`, `password`, `jk`, `usia`, `asal_negara`, `fp`) VALUES
(1, 'sponsor3', 'sponsor3', 'sponsor3', 'Laki-laki', '12', '32', '665572c18d9e4.png'),
(2, 'sponsor2', 'sponsor2', 'sponsor2', 'Laki-laki', '21', '22', ''),
(3, 'sponsor1', 'sponsor1', 'sponsor1', 'Perempuan', '213', '12', '');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id_admin`);

--
-- Indeks untuk tabel `anak`
--
ALTER TABLE `anak`
  ADD PRIMARY KEY (`id_anak`);

--
-- Indeks untuk tabel `bantuan`
--
ALTER TABLE `bantuan`
  ADD PRIMARY KEY (`id_bantuan`);

--
-- Indeks untuk tabel `jadwal`
--
ALTER TABLE `jadwal`
  ADD PRIMARY KEY (`id_jadwal`);

--
-- Indeks untuk tabel `kegiatan`
--
ALTER TABLE `kegiatan`
  ADD PRIMARY KEY (`id_kegiatan`);

--
-- Indeks untuk tabel `kelas`
--
ALTER TABLE `kelas`
  ADD PRIMARY KEY (`id_kelas`);

--
-- Indeks untuk tabel `mentor`
--
ALTER TABLE `mentor`
  ADD PRIMARY KEY (`id_mentor`);

--
-- Indeks untuk tabel `orang_tua`
--
ALTER TABLE `orang_tua`
  ADD PRIMARY KEY (`id_orang_tua`);

--
-- Indeks untuk tabel `perkembangan`
--
ALTER TABLE `perkembangan`
  ADD PRIMARY KEY (`id_perkembangan`);

--
-- Indeks untuk tabel `pimpinan`
--
ALTER TABLE `pimpinan`
  ADD PRIMARY KEY (`id_pimpinan`);

--
-- Indeks untuk tabel `ppa`
--
ALTER TABLE `ppa`
  ADD PRIMARY KEY (`id_ppa`);

--
-- Indeks untuk tabel `sponsor`
--
ALTER TABLE `sponsor`
  ADD PRIMARY KEY (`id_sponsor`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `admin`
--
ALTER TABLE `admin`
  MODIFY `id_admin` int(25) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `anak`
--
ALTER TABLE `anak`
  MODIFY `id_anak` int(25) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `bantuan`
--
ALTER TABLE `bantuan`
  MODIFY `id_bantuan` int(25) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT untuk tabel `jadwal`
--
ALTER TABLE `jadwal`
  MODIFY `id_jadwal` int(25) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT untuk tabel `kegiatan`
--
ALTER TABLE `kegiatan`
  MODIFY `id_kegiatan` int(25) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT untuk tabel `kelas`
--
ALTER TABLE `kelas`
  MODIFY `id_kelas` int(25) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `mentor`
--
ALTER TABLE `mentor`
  MODIFY `id_mentor` int(25) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT untuk tabel `orang_tua`
--
ALTER TABLE `orang_tua`
  MODIFY `id_orang_tua` int(25) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `perkembangan`
--
ALTER TABLE `perkembangan`
  MODIFY `id_perkembangan` int(25) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT untuk tabel `pimpinan`
--
ALTER TABLE `pimpinan`
  MODIFY `id_pimpinan` int(25) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT untuk tabel `ppa`
--
ALTER TABLE `ppa`
  MODIFY `id_ppa` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `sponsor`
--
ALTER TABLE `sponsor`
  MODIFY `id_sponsor` int(25) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

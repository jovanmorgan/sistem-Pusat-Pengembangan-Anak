-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 28 Bulan Mei 2024 pada 09.54
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
  `asal_bantuan` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `bantuan`
--

INSERT INTO `bantuan` (`id_bantuan`, `id_anak`, `nama_bantuan`, `asal_bantuan`) VALUES
(2, 2, 'bantuan uang', 'dinas pendidikan'),
(3, 3, 'bantuan kendaraan', 'dinas kominfo'),
(4, 4, 'bantuan uang', 'dari dinas di amerika'),
(5, 3, 'bantuan uang', 'dari amerika');

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
(2, 5, 2, '23-May-2024');

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
(5, 'membuat web', 'matani', '16-May-2024'),
(6, 'membuat baju', 'naikoten', '27-May-2024');

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
(3, 4, '31-May-2024', 'kelas A');

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
  `nomor_hp` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `mentor`
--

INSERT INTO `mentor` (`id_mentor`, `nama`, `tempat_lahir`, `tanggal_lahir`, `jk`, `nomor_hp`) VALUES
(2, 'ajhari', 'lasiana', '29-May-2024', 'Laki-laki', 123),
(3, 'ronal', 'cina', '17-May-2024', 'Laki-laki', 2142123),
(4, 'jovan', 'naikoten', '12-Jun-2002', 'Laki-laki', 2147483647),
(5, 'kevin', 'sumba', '22-May-2024', 'Laki-laki', 24523);

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
  `id_kegiatan` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `perkembangan`
--

INSERT INTO `perkembangan` (`id_perkembangan`, `id_anak`, `id_kegiatan`) VALUES
(2, 2, '11ww'),
(3, 3, 'yuguyg');

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
  `fp` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `pimpinan`
--

INSERT INTO `pimpinan` (`id_pimpinan`, `nama`, `tempat_lahir`, `tanggal_lahir`, `jk`, `jabatan`, `pendidikan_terakhir`, `nomor_hp`, `alamat`, `username`, `password`, `fp`) VALUES
(12, 'pimpinan', 'naikoten', '08-May-2024', 'Laki-laki', 'kordinator ppa', 'S1', '322132', '123', 'pimpinan', '1', '665573d20cfd7.png'),
(13, 'asd', 'as', '16-May-2024', 'Laki-laki', 'sad', 'S1', '213', 'asd', 'asd', 'asd', ''),
(14, 'asd', 'asd', '23-May-2024', 'Perempuan', 'asd', 'S1', '123', '123', 'asd', 'asd', '');

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
  `id_bantuan` int(25) NOT NULL,
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

INSERT INTO `sponsor` (`id_sponsor`, `id_bantuan`, `nama`, `username`, `password`, `jk`, `usia`, `asal_negara`, `fp`) VALUES
(1, 2, 'van', 'sponsor', '1', 'Laki-laki', '12', 'xzcsd', '665572c18d9e4.png'),
(2, 3, 'wawaan', 'sponsor2', '1', 'Laki-laki', '21', '22', '');

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
  MODIFY `id_bantuan` int(25) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT untuk tabel `jadwal`
--
ALTER TABLE `jadwal`
  MODIFY `id_jadwal` int(25) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `kegiatan`
--
ALTER TABLE `kegiatan`
  MODIFY `id_kegiatan` int(25) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT untuk tabel `kelas`
--
ALTER TABLE `kelas`
  MODIFY `id_kelas` int(25) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `mentor`
--
ALTER TABLE `mentor`
  MODIFY `id_mentor` int(25) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT untuk tabel `orang_tua`
--
ALTER TABLE `orang_tua`
  MODIFY `id_orang_tua` int(25) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `perkembangan`
--
ALTER TABLE `perkembangan`
  MODIFY `id_perkembangan` int(25) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `pimpinan`
--
ALTER TABLE `pimpinan`
  MODIFY `id_pimpinan` int(25) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT untuk tabel `ppa`
--
ALTER TABLE `ppa`
  MODIFY `id_ppa` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `sponsor`
--
ALTER TABLE `sponsor`
  MODIFY `id_sponsor` int(25) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

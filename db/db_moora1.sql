SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_moora`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `admin`
--

CREATE TABLE `admin` (
  `id_admin` int(11) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `admin`
--

INSERT INTO `admin` (`id_admin`, `username`, `password`) VALUES
(1, 'epan', 'epan'),
(2, 'kepsek', 'kepsek'),
(3, 'admin', 'admin');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tabel_hasil`
--

CREATE TABLE `tabel_hasil` (
  `id_hasil` int(5) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `nilai` double NOT NULL,
  `tanggal` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `status` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tabel_hasil`
--

INSERT INTO `tabel_hasil` (`id_hasil`, `nama`, `nilai`, `tanggal`, `status`) VALUES
(83, 'steven hawking', 5.103080861509, '2020-02-22 18:35:16', 'rekomendasi'),
(84, 'wisanggeni', 4.0125320968364, '2020-02-22 18:35:16', 'rekomendasi'),
(85, 'ervan', 1.5764681484445, '2020-02-22 18:35:16', 'rekomendasi'),
(86, 'Sita', -0.014938134845319, '2020-02-22 18:35:16', 'rekomendasi'),
(91, 'steven hawking', 5.103080861509, '2020-02-22 18:43:06', 'rekomendasi'),
(92, 'wisanggeni', 4.0125320968364, '2020-02-22 18:43:06', 'tidak rekomendasi'),
(93, 'ervan', 1.5764681484445, '2020-02-22 18:43:06', 'tidak rekomendasi'),
(94, 'Sita', -0.014938134845319, '2020-02-22 18:43:06', 'tidak rekomendasi');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tabel_kriteria`
--

CREATE TABLE `tabel_kriteria` (
  `id_kriteria` int(10) NOT NULL,
  `kriteria` text NOT NULL,
  `type` varchar(10) NOT NULL,
  `bobot` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tabel_kriteria`
--

INSERT INTO `tabel_kriteria` (`id_kriteria`, `kriteria`, `type`, `bobot`) VALUES
(1, 'KPS/KKS/KIP', 'benefit', 2.5),
(2, 'PKH', 'benefit', 2.2),
(3, 'Status', 'benefit', 2.1),
(4, 'Penghasilan', 'cost', 1.5),
(5, 'Kesulitan Ekonomi', 'benefit', 2);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tabel_nilai`
--

CREATE TABLE `tabel_nilai` (
  `id_nilai` int(11) NOT NULL,
  `id_kriteria` int(10) NOT NULL,
  `id_siswa` int(100) NOT NULL,
  `nilai` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tabel_nilai`
--

INSERT INTO `tabel_nilai` (`id_nilai`, `id_kriteria`, `id_siswa`, `nilai`) VALUES
(1, 1, 1, 1),
(2, 2, 1, 0),
(3, 3, 1, 1),
(4, 4, 1, 90000000),
(5, 5, 1, 25),
(6, 1, 2, 0),
(7, 2, 2, 0),
(8, 3, 2, 0),
(9, 4, 2, 10000000),
(10, 5, 2, 0),
(11, 1, 3, 1),
(12, 2, 3, 1),
(13, 3, 3, 1),
(14, 4, 3, 1000000000),
(15, 5, 3, 50),
(16, 1, 4, 0),
(17, 2, 4, 1),
(18, 3, 4, 0),
(19, 4, 4, 10000000),
(20, 5, 4, 1),
(21, 1, 5, 0),
(22, 2, 5, 0),
(23, 3, 5, 0),
(24, 4, 5, 5000),
(25, 5, 5, 50),
(26, 0, 3, 5),
(27, 0, 1, 4),
(28, 0, 4, 2),
(29, 0, 5, 1),
(30, 0, 2, 0),
(37, 1, 6, 1),
(38, 2, 6, 1),
(39, 3, 6, 1),
(40, 4, 6, 500000),
(41, 5, 6, 25),
(42, 1, 7, 1),
(43, 2, 7, 1),
(44, 3, 7, 1),
(45, 4, 7, 2147483647),
(46, 5, 7, 25);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tabel_siswa`
--

CREATE TABLE `tabel_siswa` (
  `id_siswa` int(100) NOT NULL,
  `nama` text NOT NULL,
  `jenis_kelamin` text NOT NULL,
  `alamat` text NOT NULL,
  `KPS` varchar(5) NOT NULL,
  `PKH` varchar(5) NOT NULL,
  `status` varchar(5) NOT NULL,
  `penghasilan` bigint(20) NOT NULL,
  `ekonomi` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tabel_siswa`
--

INSERT INTO `tabel_siswa` (`id_siswa`, `nama`, `jenis_kelamin`, `alamat`, `KPS`, `PKH`, `status`, `penghasilan`, `ekonomi`) VALUES
(1, 'wisanggeni', 'L', 'gumuk mas', 'ya', 'tidak', 'ya', 90000000, 'fisik'),
(2, 'Sita', 'P', 'Auah gelap', 'tidak', 'tidak', 'tidak', 10000000, 'tidak'),
(3, 'steven hawking', 'L', 'cupuwatu', 'ya', 'ya', 'ya', 1000000000, 'tidak'),
(4, 'ervan', 'L', 'Yogya', 'tidak', 'ya', 'tidak', 10000000, 'ya');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id_admin`);

--
-- Indeks untuk tabel `tabel_hasil`
--
ALTER TABLE `tabel_hasil`
  ADD PRIMARY KEY (`id_hasil`);

--
-- Indeks untuk tabel `tabel_kriteria`
--
ALTER TABLE `tabel_kriteria`
  ADD PRIMARY KEY (`id_kriteria`);

--
-- Indeks untuk tabel `tabel_nilai`
--
ALTER TABLE `tabel_nilai`
  ADD PRIMARY KEY (`id_nilai`),
  ADD KEY `id_kriteria` (`id_kriteria`),
  ADD KEY `id_siswa` (`id_siswa`);

--
-- Indeks untuk tabel `tabel_siswa`
--
ALTER TABLE `tabel_siswa`
  ADD PRIMARY KEY (`id_siswa`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `admin`
--
ALTER TABLE `admin`
  MODIFY `id_admin` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `tabel_hasil`
--
ALTER TABLE `tabel_hasil`
  MODIFY `id_hasil` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=95;

--
-- AUTO_INCREMENT untuk tabel `tabel_kriteria`
--
ALTER TABLE `tabel_kriteria`
  MODIFY `id_kriteria` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT untuk tabel `tabel_nilai`
--
ALTER TABLE `tabel_nilai`
  MODIFY `id_nilai` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=47;

--
-- AUTO_INCREMENT untuk tabel `tabel_siswa`
--
ALTER TABLE `tabel_siswa`
  MODIFY `id_siswa` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;
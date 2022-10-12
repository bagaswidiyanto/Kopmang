-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Waktu pembuatan: 12 Okt 2022 pada 06.40
-- Versi server: 10.3.36-MariaDB-log-cll-lve
-- Versi PHP: 7.0.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `kopmang_db`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_chat_wa`
--

CREATE TABLE `tbl_chat_wa` (
  `id` int(11) NOT NULL,
  `nama` varchar(150) NOT NULL,
  `phone` varchar(20) NOT NULL,
  `image` varchar(200) NOT NULL,
  `startOnline` time NOT NULL,
  `endOnline` time NOT NULL,
  `createDate` timestamp NOT NULL DEFAULT current_timestamp(),
  `createUserId` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tbl_chat_wa`
--

INSERT INTO `tbl_chat_wa` (`id`, `nama`, `phone`, `image`, `startOnline`, `endOnline`, `createDate`, `createUserId`) VALUES
(1, 'Admin', '081256155624', 'Admin_2022-08-15 19:06:08.png', '13:00:43', '22:00:00', '2022-08-15 12:06:08', 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_fitur`
--

CREATE TABLE `tbl_fitur` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tbl_fitur`
--

INSERT INTO `tbl_fitur` (`id`, `title`, `image`) VALUES
(6, 'Rasa Juara', 'emoji.png'),
(7, 'Menu Mahal Harga Kawan', 'dollar.png'),
(8, 'Free Wifi', 'wifi.png');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_gallery`
--

CREATE TABLE `tbl_gallery` (
  `id` int(11) NOT NULL,
  `name` varchar(125) NOT NULL,
  `image` varchar(125) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 ROW_FORMAT=COMPACT;

--
-- Dumping data untuk tabel `tbl_gallery`
--

INSERT INTO `tbl_gallery` (`id`, `name`, `image`) VALUES
(1, 'Foto1', 'galeri1.png'),
(2, 'Foto2', '630983fdb145e.png'),
(3, 'Foto3', 'galeri3.png'),
(4, 'Foto4', 'galeri4.png'),
(5, 'Foto5', 'Kopmang 3.png'),
(6, 'Foto6', 'Kopmang 7.png'),
(7, 'Foto7', 'Kopmang 8.png'),
(8, 'Foto8', 'Kopmang 2.png'),
(9, 'Foto9', 'Kopmang 5.png');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_homeweb`
--

CREATE TABLE `tbl_homeweb` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `deskripsi` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tbl_homeweb`
--

INSERT INTO `tbl_homeweb` (`id`, `title`, `deskripsi`) VALUES
(1, 'RASAKAN AROMA KOPI TERBAIK', 'Cuma segelas kopi yang dapat bercerita kepadaku bahwa yang hitam tak selalu kotor dan yang pahit tak selalu menyedihkan');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_menu`
--

CREATE TABLE `tbl_menu` (
  `id` int(11) NOT NULL,
  `image` varchar(255) NOT NULL,
  `title` varchar(255) NOT NULL,
  `price` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tbl_menu`
--

INSERT INTO `tbl_menu` (`id`, `image`, `title`, `price`) VALUES
(9, '63440205d7aef.jpg', 'Kopi Tubruk', 13000),
(10, '634401e119473.jpg', 'Expresso', 15000),
(11, '634401c51a8e6.jpg', 'Caffelate', 15000),
(12, '63440238c1b86.jpg', 'V60', 15000),
(13, '634402b01d817.jpg', 'Japaness Coffe', 15000),
(14, '634402d691a62.jpg', 'Turkish Coffe', 13000);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_menu_populer`
--

CREATE TABLE `tbl_menu_populer` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `image` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tbl_menu_populer`
--

INSERT INTO `tbl_menu_populer` (`id`, `title`, `image`) VALUES
(1, 'Cappuchino', 'populer1.png'),
(2, 'Espresso Double Shoot', 'populer2.png'),
(3, 'Croissant', 'populer3.png'),
(4, 'Ice Coffee', 'populer4.png');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_sosmed`
--

CREATE TABLE `tbl_sosmed` (
  `id` int(11) NOT NULL,
  `name` varchar(125) NOT NULL,
  `link` varchar(125) NOT NULL,
  `icon` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tbl_sosmed`
--

INSERT INTO `tbl_sosmed` (`id`, `name`, `link`, `icon`) VALUES
(1, 'Instagram', 'https://www.instagram.com/kopmang_/', 'fa-instagram');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_testimoni`
--

CREATE TABLE `tbl_testimoni` (
  `id` int(11) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `testi` text NOT NULL,
  `image` varchar(200) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tbl_testimoni`
--

INSERT INTO `tbl_testimoni` (`id`, `nama`, `testi`, `image`) VALUES
(9, 'Claudia', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pharetra ac enim malesuada ultrices neque vitae sociis eget posuere. Cursus ullamcorper semper amet, tincidunt sit tellus, auctor. Phasellus eu suspendisse malesuada netus.', 'img-testi.png');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_website`
--

CREATE TABLE `tbl_website` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `address` text NOT NULL,
  `phone` varchar(20) NOT NULL,
  `fax` varchar(20) NOT NULL,
  `email` varchar(50) NOT NULL,
  `image` varchar(200) NOT NULL,
  `description` text NOT NULL,
  `metaTitle` varchar(80) NOT NULL,
  `metaKeywords` text NOT NULL,
  `metaDescription` text NOT NULL,
  `working_hours` varchar(50) NOT NULL,
  `map` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tbl_website`
--

INSERT INTO `tbl_website` (`id`, `name`, `address`, `phone`, `fax`, `email`, `image`, `description`, `metaTitle`, `metaKeywords`, `metaDescription`, `working_hours`, `map`) VALUES
(2, 'KOPMANG', '<p>Panglima Utar, Kel. Candi, Kec. Kumai, Kabupaten Kotawaringin Barat, Kalimantan Tengah</p>\r\n', '0812056155624', '', '', 'logo-kopmang.png', '<p>Tidak selamanya hati dapat diajak kompromi. Jika resah ada, dan segala yang melingkupi terasa hampa, ngopi bersama di kopmang coffe adalah sebuah alternatif yang &nbsp;tepat. Suasana santai dan tenang menjadi ngopi semakin nikmat.</p>\r\n', 'KOPMANG', '', '', '13.00 - 22.00', '<iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d15941.12126985066!2d111.70832516977538!3d-2.732968499999991!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e08fb69f19908af%3A0x18a3d4dc479bf40a!2sKOPMANG!5e0!3m2!1sid!2sid!4v1660099369343!5m2!1sid!2sid\" width=\"100%\" height=\"100%\" style=\"border:0;border-radius: 10px;\" allowfullscreen=\"\" loading=\"lazy\" referrerpolicy=\"no-referrer-when-downgrade\"></iframe>');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `tbl_chat_wa`
--
ALTER TABLE `tbl_chat_wa`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tbl_fitur`
--
ALTER TABLE `tbl_fitur`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tbl_gallery`
--
ALTER TABLE `tbl_gallery`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tbl_homeweb`
--
ALTER TABLE `tbl_homeweb`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tbl_menu`
--
ALTER TABLE `tbl_menu`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tbl_menu_populer`
--
ALTER TABLE `tbl_menu_populer`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tbl_sosmed`
--
ALTER TABLE `tbl_sosmed`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tbl_testimoni`
--
ALTER TABLE `tbl_testimoni`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tbl_website`
--
ALTER TABLE `tbl_website`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `tbl_chat_wa`
--
ALTER TABLE `tbl_chat_wa`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `tbl_fitur`
--
ALTER TABLE `tbl_fitur`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT untuk tabel `tbl_gallery`
--
ALTER TABLE `tbl_gallery`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT untuk tabel `tbl_homeweb`
--
ALTER TABLE `tbl_homeweb`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `tbl_menu`
--
ALTER TABLE `tbl_menu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT untuk tabel `tbl_menu_populer`
--
ALTER TABLE `tbl_menu_populer`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `tbl_sosmed`
--
ALTER TABLE `tbl_sosmed`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `tbl_testimoni`
--
ALTER TABLE `tbl_testimoni`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT untuk tabel `tbl_website`
--
ALTER TABLE `tbl_website`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

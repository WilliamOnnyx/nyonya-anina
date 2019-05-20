-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 01 Jul 2015 pada 14.54
-- Versi Server: 5.6.21
-- PHP Version: 5.6.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `nyonya`
--
CREATE DATABASE IF NOT EXISTS `nyonya` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `nyonya`;

-- --------------------------------------------------------

--
-- Struktur dari tabel `gallery`
--

CREATE TABLE IF NOT EXISTS `gallery` (
`id` int(11) NOT NULL,
  `foto` varchar(50) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `gallery`
--

INSERT INTO `gallery` (`id`, `foto`) VALUES
(1, 'kursi.jpg'),
(2, 'logo.jpg'),
(3, 'resto.jpg'),
(4, 'menu.jpg'),
(5, 'menu2.jpg'),
(6, 'menu3.jpg'),
(7, '1435394129.jpg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `identitas`
--

CREATE TABLE IF NOT EXISTS `identitas` (
`id` int(11) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `alamat` varchar(100) NOT NULL,
  `telepon` varchar(15) NOT NULL,
  `about` text NOT NULL,
  `logo` varchar(50) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `identitas`
--

INSERT INTO `identitas` (`id`, `nama`, `username`, `password`, `alamat`, `telepon`, `about`, `logo`) VALUES
(1, 'Poenya Nyonya Anina', 'admin', 'admin1234', 'G Walk Taman Gapura D 18, Surabaya', ' 082244554425', 'Poenya Nyonya Anina means "Mrs. Anina''s" in English, which obviously, the owner name is Mrs. Anina. We just opened earlier this year, and the idea of this food stall is to bring Sundanese foods to Surabaya, because, Mrs. Anina herself is a Sundanese. We wanted it not just a usual food stall, but a place where everyone can actually enjoy the cuisine as well. For the Location, it''s in the G-Walk, Citraland, if you know Porong Wei, Poenya Nyonya Anina is placed right after the stage next to Porong Wei. :)', 'logo.png');

-- --------------------------------------------------------

--
-- Struktur dari tabel `kategori`
--

CREATE TABLE IF NOT EXISTS `kategori` (
`id` int(11) NOT NULL,
  `nama` varchar(50) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `kategori`
--

INSERT INTO `kategori` (`id`, `nama`) VALUES
(1, 'Appetizer and Snacks'),
(2, 'Main Course'),
(3, 'Desserts');

-- --------------------------------------------------------

--
-- Struktur dari tabel `menu`
--

CREATE TABLE IF NOT EXISTS `menu` (
`id` int(11) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `deskripsi` text NOT NULL,
  `harga` int(11) NOT NULL,
  `foto` varchar(50) NOT NULL,
  `idKategori` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=15 DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `menu`
--

INSERT INTO `menu` (`id`, `nama`, `deskripsi`, `harga`, `foto`, `idKategori`) VALUES
(6, 'Asinan Bogor', 'This is a mixed fruits and vegetables that marinated with Pasundan''s vinegar, sugar, salt, and red chili served with fried peanut and separated chili. Me personally prefer the fruits, but you can choose all you want! And I bet you will wonder what''s the orange thingy inside the bowl, you don''t know what it is, but it tastes really good! I tell you now, it''s YAM! haha.. And I love it!', 15000, 'asinan.jpg', 1),
(7, 'Rujak Uleg', 'Fresh fruits mixed with a muddler palm sugar and fried peanut. What makes me like this dish is actually the mixture of palm sugar and the fried peanut. I usually asked for it to be separated from the fruits, because I love to scoop out the sauce in a big amount, haha.. Trust me, you''d want some more too!', 13000, 'rujak.jpg', 1),
(8, 'Soto Betawi', 'This is a coconut milk soup flavored by traditional herbs, served with sliced beef meat, potato, tomato, slices of leek, and crackers, finished by lime and chili sauce. And this is one of my favorite menu in here, why? Because I never find Soto Betawi in Surabaya as good as this one! You really should try! And it''s so affordable as well compared to the other restaurant that sells Soto Betawi.', 20000, 'sotobetawi.jpg', 2),
(9, 'Es Cincau', 'Not just a jelly cincau. It''s specially made by Nyonya Anina, from Cincau Leaves, served with coconut milk and palm sugar. Really, you can compared to any stalls that serves green "Cincau", you''ll know then which one is the original one.', 8000, 'cincau.jpg', 3),
(10, 'Soto Mie', 'If you''re looking for something fulfilling for your tummy, then Soto Mie is definitely a great choice! It has two kinds of noodle in one bowl of yellow soup! They also got sliced beef, vegetables such as tomato, potato, radish, cabbage, celery, then finished with crackers and Pasundan''s taste of Risol. Me likey!', 20000, 'soto.jpg', 2),
(11, 'Ketoprak', 'This is a steamed vegetables (carrot & cucumber) with rice noodle, potato, bean curd, sprout, and boiled egg mixed with special peanut sauce & garlic served with crackers. My favorite part about this dish is the Peanut Sauce! I guess they''re very serious when they said, "special" peanut sauce, because I tell you what? It really is! ', 17500, 'ketoprak.jpg', 2),
(12, 'Nasi Uduk Empal', 'Woohoo! I super love this one!! It''s a steamed rice flavored by coconut milk served with special peanut chili sauce, slice of flat omelette, crackers & condiments. Topped with sliced beef flavored by Nyonya Anina''s Special Recipe. I remember this is one of the first dish that came out, but one of the last that I ate, but it still tasted so good! The steamed rice, the sambal, the sliced beef, eat them all together with the flat omelette and the crackers, I think you''ll agree with me in no time! ', 25000, 'nasiuduk.jpg', 2),
(13, 'Es Manado', 'Last but not least, Es Manado. This is one of the best seller dessert in Poenya Nyonya Anina. It''s a bowl of ice made from fresh sour soup extract, topped with coconut, honeydew jelly, red bean, avocado, bubble and nata de coco. They said, people keep coming back for more of this. Now you want it too right?', 14000, 'manado.jpg', 3),
(14, 'Es Doger', 'Ice crush with sugar and coconut milk served with "Black Tapai", "Yellow Tapai", coconut, grape jelly, chocolate pudding, avocado, bubble and nata de coco topped with milk and syrup. This is my favorite dessert! Kind of reminds me of my childhood, though it was different back then, but the taste of coconut water and milk just makes me miss those moment so much! ', 14000, 'Doger.jpg', 3);

-- --------------------------------------------------------

--
-- Struktur dari tabel `promo`
--

CREATE TABLE IF NOT EXISTS `promo` (
`id` int(11) NOT NULL,
  `title` varchar(100) NOT NULL,
  `isi` varchar(100) NOT NULL,
  `foto` varchar(50) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `promo`
--

INSERT INTO `promo` (`id`, `title`, `isi`, `foto`) VALUES
(1, 'DISCOUNT 30 %', 'All Dessert for Student in Friday', 'manado.jpg'),
(2, 'Its FAMILY TIME', 'Every Saturday get the free appetizer terms condition', 'menu.jpg'),
(3, 'Selfie Surprise', 'Upload your photo in Nyonya Anina and get the unique souvenir ', 'resto.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `gallery`
--
ALTER TABLE `gallery`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `identitas`
--
ALTER TABLE `identitas`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `kategori`
--
ALTER TABLE `kategori`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `menu`
--
ALTER TABLE `menu`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `promo`
--
ALTER TABLE `promo`
 ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `gallery`
--
ALTER TABLE `gallery`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `identitas`
--
ALTER TABLE `identitas`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `kategori`
--
ALTER TABLE `kategori`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `menu`
--
ALTER TABLE `menu`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=15;
--
-- AUTO_INCREMENT for table `promo`
--
ALTER TABLE `promo`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3325
-- Generation Time: Aug 24, 2020 at 07:16 AM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.2.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `audiolib`
--

-- --------------------------------------------------------

--
-- Table structure for table `audios`
--

CREATE TABLE `audios` (
  `id` int(255) NOT NULL,
  `filename` varchar(50) NOT NULL,
  `picname` varchar(500) NOT NULL,
  `song` varchar(50) NOT NULL,
  `album` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `audios`
--

INSERT INTO `audios` (`id`, `filename`, `picname`, `song`, `album`) VALUES
(31, 'uploads/Filhall.mp3', 'photos/filhaal.png', 'Filhaal', 'B Praak'),
(32, 'uploads/GendaPhool.mp3', 'photos/gendafool.jpg', 'Genda Fool', 'Badshah'),
(33, 'uploads/GoaBeach.mp3', 'photos/goabeech.jpg', 'Goa Beech', 'Tony Kakkar and Neha Kakkar'),
(34, 'uploads/IllegalWeapon.mp3', 'photos/illegalweapon.jpg', 'Illegal Weapon', 'Jasmine Sandlas and Garry Sandhu'),
(36, 'uploads/Lamberghini.mp3', 'photos/lamborghini.jpg', 'Lamborghini', 'The Doorbeen'),
(37, 'uploads/Loca.mp3', 'photos/ludo.jpg', 'Loca', 'Yo Yo Honey Singh'),
(38, 'uploads/Malang.mp3', 'photos/malang.jpg', 'Malang', 'Ved Sharma'),
(39, 'uploads/MeriAashiqui.mp3', 'photos/meriaashiqui.jpg', 'Meri Aashiqui', 'Jubin Nautiyal'),
(40, 'uploads/Shayad.mp3', 'photos/shayad.jpg', 'Shayad', 'Arjit Singh and Pritam Chakraborty'),
(41, 'uploads/TereBina.mp3', 'photos/terebina.jpg', 'Tere Bina', 'Zaeden'),
(42, 'uploads/TumHiAana.mp3', 'photos/tumhiaana.jpg', 'Tum Hi Aana', 'Jubin Nautiyal'),
(43, 'uploads/yalgaar.mp3', 'photos/yalgaar.jpg', 'Yalgaar', 'CarryMinati X Wily Frenzy'),
(44, 'uploads/Bandook - Nirvair Pannu.mp3', 'photos/bNDOOK.jpg', 'Bandook', 'Nirvair Pannu'),
(45, 'uploads/Gallan Goriyan - Dhvani Bhanushali.mp3', 'photos/gallan-goriyan.jpg', 'Gallan Goriyan', 'Dhvani Bhanushali and Taz'),
(46, 'uploads/Haaye Oye - Qaran - PagalSongs.com.mp3', 'photos/Haaye.jpg', 'Haaye Oye', 'QARAN ft. Ash King'),
(47, 'uploads/Ik Tera - Maninder Buttar.mp3', 'photos/iktera.jpg', 'Ik Tera', 'Maninder Buttar'),
(48, 'uploads/Kalla Sohna Nai - Neha Kakkar.mp3', 'photos/kalla.jpg', 'Kalla Sohna Nai', 'Neha Kakkar'),
(49, 'uploads/Kehndi Haan Kehndi Naa - Sukriti Kakar.mp3', 'photos/kehndi .jpg', 'Kehndi Haan kehndi Naah', 'Sukriti and Prakriti Kakar'),
(50, 'uploads/Mere Angne Mein - Neha Kakkar.mp3', 'photos/Mereangne m.jpg', 'Mere Angne Mein', 'Neha Kakkar and Raja Hasan'),
(51, 'uploads/Nira Ishq - Guri.mp3', 'photos/nira.jpg', 'Nira Ishq', 'Guri'),
(52, 'uploads/Relation - Nikk.mp3', 'photos/Relation.jpg', 'Relation', 'Nikk'),
(53, 'uploads/Sakhiyaan - Maninder Buttar.mp3', 'photos/sakhiyan.jpg', 'Sakhiyaan', 'Maninder Buttar'),
(54, 'uploads/Sorry Song - Neha Kakkar.mp3', 'photos/sorry.jpg', 'Sorry', 'Neha Kakkar and Maninder Buttar'),
(55, 'uploads/Yaari - Nikk.mp3', 'photos/Yaari.jpg', 'Yaari', 'Nikk'),
(56, 'uploads/Believer.mp3', 'photos/believer.jpg', 'Believer', 'Imagine Dragons'),
(57, 'uploads/Dharia .mp3', 'photos/dharia.jpg', 'Sugar and Brownies', 'Dharia'),
(58, 'uploads/Falling.mp3', 'photos/falling.jpg', 'Falling', 'Trevor Daniel'),
(59, 'uploads/Freedom (Video).mp3', 'photos/FreedomSong.jpg', 'Freedom', 'George Michael'),
(60, 'uploads/Heartbreaker .mp3', 'photos/heartbreaker.jpg', 'HeartBreaker', 'Justin Bieber'),
(61, 'uploads/Memories.mp3', 'photos/memories.jpg', 'Memories', 'Maroon 5'),
(62, 'uploads/Old Town Road .mp3', 'photos/oldtown.jpg', 'Old Town Road', 'Lil Nas X'),
(63, 'uploads/On My Way.mp3', 'photos/on my way.jpg', 'On My Way', 'Alan Walker, Sabrina Carpenter and Farruko'),
(64, 'uploads/Rain On Me.mp3', 'photos/rain.jpg', 'Rain On Me', 'Lady Gaga and Ariana Grande'),
(65, 'uploads/Señorita.mp3', 'photos/senorita.jpg', 'Senorita', 'Camila Cabello and Shawn Mendes'),
(66, 'uploads/Sour Candy.mp3', 'photos/sour candy.jpg', 'Sour Candy', 'Lady Gaga and Blackpink'),
(67, 'uploads/Tell Me You Love Me.mp3', 'photos/tell me.jpg', 'Tell Me You Love Me', 'Demi Lovato'),
(68, 'uploads/Bekhayali.mp3', 'photos/bekhayali.jpg', 'Bekhayali', 'Sachin Tandon'),
(69, 'uploads/Firse Machayenge Remix .mp3', 'photos/Firse Machayenge Remix.jpg', 'Firse Machaenge Remix', 'Emiway Bantai'),
(70, 'uploads/Kaam 25.mp3', 'photos/kaam25.jpg', 'Kaam 25', 'Divine'),
(71, 'uploads/Kaise Hua.mp3', 'photos/kaise hua.jpg', 'Kaise Hua', 'Vishal Mishra'),
(72, 'uploads/Naagin .mp3', 'photos/naagin.jpg', 'Naagin', 'Aastha Gill and Akasa Singh'),
(73, 'uploads/Paagal.mp3', 'photos/pagal.jpg', 'Paagal', 'Badshah'),
(74, 'uploads/Saara India.mp3', 'photos/saaraindia.jpg', 'Saara India', 'Aastha Gill'),
(75, 'uploads/Tujhe Kitna Chahne Lage.mp3', 'photos/kitnachahne.jpg', 'Tujhe Kitna Chahne Lage', 'Arjit Singh'),
(76, 'uploads/Bhula Dunga.mp3', 'photos/Bhula-Dunga.jpg', 'Bhula Dunga', 'Darshan Raval'),
(77, 'uploads/Chal Ghar Chalen.mp3', 'photos/chal-ghar.jpg', 'Chal Ghar Chalen', 'Arjit Singh'),
(78, 'uploads/Haan Main Galat .mp3', 'photos/Haan-Main-Galat.jpg', 'Haan Main Galat', 'Arjit Singh and Shashwat Singh'),
(79, 'uploads/Humraah.mp3', 'photos/humraah.jpg', 'Humraah', 'Sachet Tandon'),
(80, 'uploads/Masakali 2.mp3', 'photos/masakali-2.0.jpg', 'Masakali 2.0', 'Tulsi Kumar and Sachet Tandon'),
(81, 'uploads/Mere Liye Tum Kaafi Ho.mp3', 'photos/mereliye.jpg', 'Mere Liye Tum Kaafi Ho', 'Ayushman Khurrana'),
(82, 'uploads/Mummy Nu Pasand.mp3', 'photos/mummy-nu-pasand.jpg', 'Mummy Nu Pasand', 'Sunanda Sharma'),
(83, 'uploads/Naiyyo.mp3', 'photos/Naiyyo.jpg', 'Naiyyo', 'AKASA and Raftaar'),
(84, 'uploads/Teri Yaari.mp3', 'photos/Teri Yaari.jpg', 'Teri Yaari', 'Millind Gaba'),
(85, 'uploads/Tu Bhi Royega.mp3', 'photos/tu bhi royega.jpg', 'Tu Bhi Royega', 'Jyotica Tangri'),
(86, 'uploads/amastu-amastu-golkeri-parthiv-gohil-malhar', 'photos/amastu.jpg', 'Amastu Amastu', 'Parthiv Gohil'),
(87, 'uploads/chaand-ne-kaho-sachin-jigar-jigardan-yash-', 'photos/chand ne kaho.jpg', 'Chaand Ne Kaho', 'Sachin Sanghvi and Tanishka Sanghvi'),
(88, 'uploads/dhun-laagi-full-audio-song-love-ni-bhavai-', 'photos/dhun-laagi.jpg', 'Dhun Laagi', 'Siddharth Amit Bhasar'),
(89, 'uploads/Ghanu Jeevo Sachin Jigar Bhoomi Trivedi Aa', 'photos/ghanu jeevo.jpg', 'Ghanu Jeevo', 'Bhoomi Trivedi and Keerthi Sagathia'),
(90, 'uploads/Kehvu Ghanu Ghanu Che Chello Divas Love So', 'photos/kehvu.jpg', 'Kehvu Gehnu Gehnu', 'Parthiv Gohil'),
(91, 'uploads/Mann Melo Sharato Lagu Full Song Gujarati ', 'photos/mann.jpg', 'Mann Melo ', 'Jasleen Royal and Siddharth Bhavsar'),
(92, 'uploads/Nayan Ne Bandh Rakhine Darshan Raval.mp3', 'photos/nayan.jpg', 'Nayan', 'Darshan Raval'),
(93, 'uploads/pa-pa-pagli-sachin-jigar-sonu-nigam-siddha', 'photos/papa.jpg', 'Pa Pa Pagli', 'Sonu Nigam'),
(94, 'uploads/pehla-varsad-by-darshan-raval-gujarat-song', 'photos/pehla.jpg', 'Pehla Varsad', 'Darshan Raval'),
(95, 'uploads/radha-ne-shyam-mali-jashe-sachin-jigar-sac', 'photos/radhashyam.jpg', 'Radha Ne Shyam Mali Jashe', 'Sachin and Jigar '),
(96, 'uploads/Soni Gujarat Ni _ Golkeri _ Mika Singh _ P', 'photos/soni.jpg', 'Soni Gujarat Ni', 'Parthiv Gohil and Mika Singh'),
(97, 'uploads/Vhalam Aavo Ne Full Audio Song Love Ni Bha', 'photos/vhalam.jpg', 'Vhalam Aavo Ne', 'Jigardhan Gadhavi');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `audios`
--
ALTER TABLE `audios`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `audios`
--
ALTER TABLE `audios`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=103;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

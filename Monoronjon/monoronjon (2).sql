-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 01, 2019 at 08:17 PM
-- Server version: 10.4.8-MariaDB
-- PHP Version: 7.3.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `monoronjon`
--

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

CREATE TABLE `comments` (
  `c_id` int(10) NOT NULL,
  `u_id` int(20) NOT NULL,
  `m_id` int(10) NOT NULL,
  `time` varchar(60) NOT NULL,
  `comment` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `comments`
--

INSERT INTO `comments` (`c_id`, `u_id`, `m_id`, `time`, `comment`) VALUES
(2, 9, 17, '2019-11-28 03:08:32', 'he was , is and always will be'),
(3, 9, 17, '2019-11-28 04:04:05', 'he was , is and always will be'),
(4, 9, 15, '2019-11-28 04:24:41', 'haha'),
(5, 9, 17, '2019-11-28 04:26:38', 'sad'),
(7, 7, 16, '2019-11-28 05:10:43', 'lol'),
(8, 7, 17, '2019-11-28 05:12:27', 'haahahahaa'),
(9, 7, 17, '2019-11-28 05:12:50', 'khub kostho tai na'),
(10, 7, 21, '2019-11-28 05:40:57', 'sad life'),
(15, 7, 14, '2019-11-28 15:36:20', 'modern problem requires modern solution'),
(16, 7, 14, '2019-11-28 18:21:19', 'modern problem requires modern solution'),
(17, 7, 14, '2019-11-28 18:21:54', 'modern problem requires modern solution'),
(18, 7, 14, '2019-11-28 18:22:29', 'modern problem requires modern solution'),
(19, 7, 21, '2019-11-28 18:29:37', 'asd'),
(22, 7, 21, '2019-11-28 18:44:46', 'ded'),
(23, 7, 18, '2019-11-28 18:46:56', 'khub funny'),
(24, 7, 16, '2019-11-28 18:48:29', 'wgat'),
(25, 7, 20, '2019-11-28 18:49:33', 'who?'),
(26, 7, 21, '2019-11-28 19:04:53', 'asd'),
(27, 17, 22, '2019-11-28 19:20:39', 'hahaahhaha so relatable'),
(28, 17, 21, '2019-11-28 19:29:15', 'sad life'),
(29, 17, 22, '2019-11-28 19:36:24', 'noooo'),
(30, 17, 21, '2019-11-28 20:00:08', 'wow'),
(31, 19, 22, '2019-11-28 20:06:36', 'Where do you find this cool memes?'),
(36, 19, 20, '2019-11-28 20:39:17', 'wwww'),
(38, 19, 14, '2019-11-28 20:55:46', 'modern problem requires modern solution'),
(48, 19, 22, '2019-11-28 21:30:14', 'saddsa'),
(49, 19, 22, '2019-11-28 21:31:52', 'saddsa'),
(50, 19, 22, '2019-11-28 21:36:59', ''),
(51, 19, 18, '2019-11-28 21:41:02', ''),
(53, 19, 22, '2019-11-28 22:03:32', 'bro we are so dead . What are we gonna do now?'),
(54, 19, 22, '2019-11-28 22:06:02', ''),
(55, 19, 23, '2019-11-28 22:17:07', 'and php too :3'),
(56, 19, 23, '2019-11-28 22:23:57', 'lol'),
(57, 19, 21, '2019-11-28 22:24:42', 'khub funny'),
(58, 17, 19, '2019-11-28 23:32:55', 'Mama osthir pic '),
(59, 19, 19, '2019-11-28 23:36:27', 'kothin laagtase mama'),
(60, 19, 19, '2019-11-28 23:38:30', '@ashik tui bolish ei bepare'),
(61, 17, 19, '2019-11-28 23:39:18', '@ninad kois na ar mama korra pic'),
(62, 20, 19, '2019-11-28 23:40:43', 'kire madarchodera ki shuru korsos bal'),
(63, 9, 19, '2019-11-28 23:42:38', 'mama pura kapakapi ekdom biye ta korei fel'),
(64, 20, 19, '2019-11-28 23:42:58', 'dost emon korish na bal lojja laage'),
(65, 9, 19, '2019-11-28 23:47:07', 'lol'),
(66, 9, 19, '2019-11-28 23:49:33', 'shundor'),
(67, 20, 19, '2019-11-29 00:08:56', 'mama ar moja lois na bal'),
(68, 9, 19, '2019-11-29 00:09:32', 'lol ok Day1'),
(69, 9, 25, '2019-11-29 20:22:34', 'true'),
(70, 9, 26, '2019-11-29 20:25:26', 'maam xD xD xD xD'),
(71, 9, 27, '2019-11-30 14:18:17', 'nice'),
(72, 17, 28, '2019-12-01 03:53:30', 'lol'),
(73, 17, 19, '2019-12-01 04:16:34', 'lololololol'),
(74, 22, 31, '2019-12-01 04:39:18', 'lol'),
(75, 22, 19, '2019-12-01 04:45:34', 'heated com box :3'),
(76, 9, 31, '2019-12-01 06:11:19', 'wow'),
(77, 9, 31, '2019-12-01 06:11:32', 'wow');

-- --------------------------------------------------------

--
-- Table structure for table `likes`
--

CREATE TABLE `likes` (
  `l_id` int(10) NOT NULL,
  `u_id` int(20) NOT NULL,
  `m_id` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `likes`
--

INSERT INTO `likes` (`l_id`, `u_id`, `m_id`) VALUES
(4, 19, 23),
(5, 19, 22),
(6, 19, 21),
(9, 19, 18),
(10, 19, 17),
(11, 19, 20),
(12, 19, 19),
(15, 19, 16),
(18, 19, 15),
(22, 19, 27),
(28, 9, 22),
(52, 9, 21),
(64, 9, 28),
(66, 9, 27),
(67, 9, 18),
(68, 9, 17),
(75, 17, 28),
(76, 17, 29),
(79, 21, 29),
(80, 21, 30),
(81, 21, 27),
(82, 21, 26),
(83, 22, 31),
(84, 9, 31),
(85, 9, 30),
(86, 9, 29),
(87, 19, 14),
(88, 9, 26),
(91, 19, 24);

-- --------------------------------------------------------

--
-- Table structure for table `meme`
--

CREATE TABLE `meme` (
  `m_id` int(10) NOT NULL,
  `u_id` int(20) NOT NULL,
  `imageLocation` varchar(255) NOT NULL,
  `caption` varchar(255) NOT NULL,
  `likes` int(10) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `meme`
--

INSERT INTO `meme` (`m_id`, `u_id`, `imageLocation`, `caption`, `likes`) VALUES
(14, 9, 'Roll-Safe-1485964928-compressed.jpg', 'lol', 2),
(15, 9, '4e505d7c1c3a4f64917a70d40ee1385c.jpeg', 'bhodai', 1),
(16, 8, 'Boyfriend-Memes-1-793x1024.jpg', 'you dont love me anymore', 2),
(17, 8, 'That-Jealous-GirlfriendUnfaithful-Guy-Meme-Has-a-Hilarious-Backstory-and-Here-It-Is_6.jpg', 'cheater ', 2),
(18, 8, '4-Boyfriend-and-Girlfriend-Memes.jpg', 'ninad is a liar', 2),
(19, 9, 'IMG_20190411_085259.jpg', 'dada', 1),
(20, 7, '3.jpg', ':3', 2),
(21, 7, 'when-your-kid-becomes-a-meme-1024x576-1497986561.jpg', 'ded xD', 1),
(22, 9, 'b85f9841e30fa1bfafe1626efd41d3cc.jpg', ':3', 2),
(23, 19, 'Hc8MUNG1ltJzCkqG00Wpn58UpFrdAT_5IoiGE4YKtlk.jpg', 'give him some java script xD', 2),
(24, 17, '5d51217c2e8cb.jpeg', 'Wow ', 1),
(25, 17, 'main-qimg-faf302fd19fc8340d1a1e3f4bad3ab27.jpg', 'Indeed', 1),
(26, 20, '5d51217c2e8cb.jpeg', 'hhaaha', 5),
(27, 9, '67060760_648759712265203_7000538023779631104_n.jpg', 'bangi', 4),
(28, 9, 'ECzKwcMXYAAL_Rc.jpg', 'ded', 3),
(29, 17, '78254294_2579327478782781_4464632394116235264_n.jpg', 'legit xD', 3),
(30, 21, '78265068_743607522805407_695392760416436224_n.png', 'sheraaaa xD', 2),
(31, 22, '76619877_2563404997074153_3360787603900071936_n.jpg', 'cod mw :/', 3);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(20) NOT NULL,
  `email` varchar(30) NOT NULL,
  `fName` varchar(50) NOT NULL,
  `lName` varchar(50) NOT NULL,
  `follower` int(20) NOT NULL,
  `password` varchar(255) NOT NULL,
  `image` varchar(100) NOT NULL,
  `bio` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `email`, `fName`, `lName`, `follower`, `password`, `image`, `bio`) VALUES
(2, 'ashikurrahman020995@gmail.com', 'Ashikur', 'Rahman', 0, '$5$rounds=5000$kjkszpjforsalt$FcXNz8mhWjsE/hVWtyr7Kb4zo9yU25KeCtf9WnA2Eo7', 'user_male_1-512.png', 'Gamer'),
(3, 'dewanmahdi@gmail.com', 'Dewan', 'Mahdi', 0, '$5$rounds=5000$kjkszpjforsalt$TwT3jAQdNO.sLPnxRGZKewAbfe31obPwZRRNuhJqKz2', 'user_male_1-512.png', 'Gamer'),
(4, 'dewanmahdi@gmail.com', 'Dewan', 'Mahdi', 0, '$5$rounds=5000$kjkszpjforsalt$TwT3jAQdNO.sLPnxRGZKewAbfe31obPwZRRNuhJqKz2', 'user_male_1-512.png', 'Gamer'),
(5, 'dewanmahdi@jg', 'Dewan', 'bangi', 0, '$5$rounds=5000$kjkszpjforsalt$TwT3jAQdNO.sLPnxRGZKewAbfe31obPwZRRNuhJqKz2', 'user_male_1-512.png', 'Gamer'),
(6, 'dewanmahdi@adas', 'Bangi', 'Dewan', 0, '$5$rounds=5000$kjkszpjforsalt$P2S4jFgkP818dGovYEsoqVwHSvNrX7YVTwUYvbgz7/D', 'user_male_1-512.png', 'Gamer'),
(7, 'rozaafrinjamil@gmail.com', 'Roza', 'Afrin Jamil', 0, '$5$rounds=5000$kjkszpjforsalt$1mbU9JhjsKN6jvlgGWGQG3XNIIGYR6/QpD/WzAtL/t/', 'user_male_1-512.png', 'Gamer'),
(8, 'surovihossain@gmail.com', 'Surovi', 'Hossain', 0, '$5$rounds=5000$kjkszpjforsalt$FcXNz8mhWjsE/hVWtyr7Kb4zo9yU25KeCtf9WnA2Eo7', 'user_male_1-512.png', 'Gamer'),
(9, 'ragibibnehossain@gmail.com', 'Ragib Ibne', 'Hossain', 0, '$5$rounds=5000$kjkszpjforsalt$FcXNz8mhWjsE/hVWtyr7Kb4zo9yU25KeCtf9WnA2Eo7', '62223390_2319423928147613_2050995541248049152_o.jpg', 'one of a kind'),
(11, 'ragib.hossain007@gmail.com', 'Ragib ', 'Hossain', 0, '$5$rounds=5000$kjkszpjforsalt$FcXNz8mhWjsE/hVWtyr7Kb4zo9yU25KeCtf9WnA2Eo7', 'user_male_1-512.png', 'Gamer'),
(12, 'abdulmotalebpiyas@gmail.com', 'Saif', 'Zohan Piyash', 0, '$5$rounds=5000$kjkszpjforsalt$FcXNz8mhWjsE/hVWtyr7Kb4zo9yU25KeCtf9WnA2Eo7', 'user_male_1-512.png', 'Gamer'),
(13, 'rhossain@gmail.com', 'Ragib', 'Pranto', 0, '$5$rounds=5000$kjkszpjforsalt$TwT3jAQdNO.sLPnxRGZKewAbfe31obPwZRRNuhJqKz2', 'user_male_1-512.png', 'Gamer'),
(14, 'umoon46@gmail.com', 'Umar', 'Faiaz Moon', 0, '$5$rounds=5000$kjkszpjforsalt$FcXNz8mhWjsE/hVWtyr7Kb4zo9yU25KeCtf9WnA2Eo7', 'user_male_1-512.png', 'Gamer'),
(15, 'u@gmail.com', 'Asif ', 'Ahammok', 0, '$5$rounds=5000$kjkszpjforsalt$FcXNz8mhWjsE/hVWtyr7Kb4zo9yU25KeCtf9WnA2Eo7', 'user_male_1-512.png', 'Gamer'),
(16, 'habibfarhan701@gmail.com', 'Farhan', 'Habib', 0, '$5$rounds=5000$kjkszpjforsalt$FcXNz8mhWjsE/hVWtyr7Kb4zo9yU25KeCtf9WnA2Eo7', 'user_male_1-512.png', 'Gamer'),
(17, 'ar@gmail.com', 'Ashikur', 'Rahman', 0, '$5$rounds=5000$kjkszpjforsalt$FcXNz8mhWjsE/hVWtyr7Kb4zo9yU25KeCtf9WnA2Eo7', 'user_male_1-512.png', 'Gamer'),
(18, 'na_nina08@gmail.com', 'Nabiul', 'Ninad', 0, '$5$rounds=5000$kjkszpjforsalt$FcXNz8mhWjsE/hVWtyr7Kb4zo9yU25KeCtf9WnA2Eo7', 'user_male_1-512.png', 'Gamer'),
(19, 'ninad@gmail.com', 'Ninad', 'bokolom', 0, '$5$rounds=5000$kjkszpjforsalt$FcXNz8mhWjsE/hVWtyr7Kb4zo9yU25KeCtf9WnA2Eo7', '30728874_2117623154920488_6361100419418030080_o.jpg', 'chodu'),
(20, 'dewan@gmail.com', 'Bangi', 'Dewan', 0, '$5$rounds=5000$kjkszpjforsalt$FcXNz8mhWjsE/hVWtyr7Kb4zo9yU25KeCtf9WnA2Eo7', 'user_male_1-512.png', 'Gamer'),
(21, 'raa@gmail.com', 'Ragib', 'Absar Arnab', 0, '$5$rounds=5000$kjkszpjforsalt$FcXNz8mhWjsE/hVWtyr7Kb4zo9yU25KeCtf9WnA2Eo7', 'user_male_1-512.png', 'Gamer'),
(22, 'aa@gmail.com', 'Asif ', 'Ahmed', 0, '$5$rounds=5000$kjkszpjforsalt$FcXNz8mhWjsE/hVWtyr7Kb4zo9yU25KeCtf9WnA2Eo7', '32582020_890964567776825_5131771128787763200_n.jpg', 'gamer');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`c_id`),
  ADD KEY `m_id` (`m_id`),
  ADD KEY `u_id` (`u_id`);

--
-- Indexes for table `likes`
--
ALTER TABLE `likes`
  ADD PRIMARY KEY (`l_id`),
  ADD KEY `m_id` (`m_id`),
  ADD KEY `u_id` (`u_id`);

--
-- Indexes for table `meme`
--
ALTER TABLE `meme`
  ADD PRIMARY KEY (`m_id`),
  ADD KEY `u_id` (`u_id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `comments`
--
ALTER TABLE `comments`
  MODIFY `c_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=78;

--
-- AUTO_INCREMENT for table `likes`
--
ALTER TABLE `likes`
  MODIFY `l_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=94;

--
-- AUTO_INCREMENT for table `meme`
--
ALTER TABLE `meme`
  MODIFY `m_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `comments`
--
ALTER TABLE `comments`
  ADD CONSTRAINT `comments_ibfk_1` FOREIGN KEY (`m_id`) REFERENCES `meme` (`m_id`),
  ADD CONSTRAINT `comments_ibfk_2` FOREIGN KEY (`u_id`) REFERENCES `user` (`id`);

--
-- Constraints for table `likes`
--
ALTER TABLE `likes`
  ADD CONSTRAINT `likes_ibfk_1` FOREIGN KEY (`m_id`) REFERENCES `meme` (`m_id`),
  ADD CONSTRAINT `likes_ibfk_2` FOREIGN KEY (`u_id`) REFERENCES `user` (`id`);

--
-- Constraints for table `meme`
--
ALTER TABLE `meme`
  ADD CONSTRAINT `meme_ibfk_1` FOREIGN KEY (`u_id`) REFERENCES `user` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

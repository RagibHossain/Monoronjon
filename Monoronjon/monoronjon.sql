-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 30, 2019 at 11:53 AM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 7.3.3

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
(71, 9, 27, '2019-11-30 14:18:17', 'nice');

-- --------------------------------------------------------

--
-- Table structure for table `meme`
--

CREATE TABLE `meme` (
  `m_id` int(10) NOT NULL,
  `u_id` int(20) NOT NULL,
  `imageLocation` varchar(255) NOT NULL,
  `caption` varchar(255) NOT NULL,
  `likes` int(10) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `meme`
--

INSERT INTO `meme` (`m_id`, `u_id`, `imageLocation`, `caption`, `likes`) VALUES
(14, 9, 'Roll-Safe-1485964928-compressed.jpg', 'lol', 0),
(15, 9, '4e505d7c1c3a4f64917a70d40ee1385c.jpeg', 'bhodai', 0),
(16, 8, 'Boyfriend-Memes-1-793x1024.jpg', 'you dont love me anymore', 0),
(17, 8, 'That-Jealous-GirlfriendUnfaithful-Guy-Meme-Has-a-Hilarious-Backstory-and-Here-It-Is_6.jpg', 'cheater ', 0),
(18, 8, '4-Boyfriend-and-Girlfriend-Memes.jpg', 'ninad is a liar', 0),
(19, 9, 'IMG_20190411_085259.jpg', 'dada', 0),
(20, 7, '3.jpg', ':3', 0),
(21, 7, 'when-your-kid-becomes-a-meme-1024x576-1497986561.jpg', 'ded xD', -1),
(22, 9, 'b85f9841e30fa1bfafe1626efd41d3cc.jpg', ':3', 1),
(23, 19, 'Hc8MUNG1ltJzCkqG00Wpn58UpFrdAT_5IoiGE4YKtlk.jpg', 'give him some java script xD', 1),
(24, 17, '5d51217c2e8cb.jpeg', 'Wow ', 1),
(25, 17, 'main-qimg-faf302fd19fc8340d1a1e3f4bad3ab27.jpg', 'Indeed', 1),
(26, 20, '5d51217c2e8cb.jpeg', 'hhaaha', 1),
(27, 9, '67060760_648759712265203_7000538023779631104_n.jpg', 'bangi', 1);

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
  `image` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `email`, `fName`, `lName`, `follower`, `password`, `image`) VALUES
(2, 'ashikurrahman020995@gmail.com', 'Ashikur', 'Rahman', 0, '$5$rounds=5000$kjkszpjforsalt$FcXNz8mhWjsE/hVWtyr7Kb4zo9yU25KeCtf9WnA2Eo7', ''),
(3, 'dewanmahdi@gmail.com', 'Ashikur', 'Rahman', 0, '$5$rounds=5000$kjkszpjforsalt$TwT3jAQdNO.sLPnxRGZKewAbfe31obPwZRRNuhJqKz2', ''),
(4, 'dewanmahdi@gmail.com', 'da', '2e1', 0, '$5$rounds=5000$kjkszpjforsalt$TwT3jAQdNO.sLPnxRGZKewAbfe31obPwZRRNuhJqKz2', ''),
(5, 'dewanmahdi@jg', 'Ashikur', '2e1', 0, '$5$rounds=5000$kjkszpjforsalt$TwT3jAQdNO.sLPnxRGZKewAbfe31obPwZRRNuhJqKz2', ''),
(6, 'dewanmahdi@adas', 'asdasddasasd', 'asd', 0, '$5$rounds=5000$kjkszpjforsalt$P2S4jFgkP818dGovYEsoqVwHSvNrX7YVTwUYvbgz7/D', ''),
(7, 'rozaafrinjamil@gmail.com', 'roza', 'afrin jamil', 0, '$5$rounds=5000$kjkszpjforsalt$1mbU9JhjsKN6jvlgGWGQG3XNIIGYR6/QpD/WzAtL/t/', ''),
(8, 'surovihossain@gmail.com', 'Surovi', 'Hossain', 0, '$5$rounds=5000$kjkszpjforsalt$FcXNz8mhWjsE/hVWtyr7Kb4zo9yU25KeCtf9WnA2Eo7', ''),
(9, 'ragibibnehossain@gmail.com', 'Ragib', 'Ibne Hossain', 0, '$5$rounds=5000$kjkszpjforsalt$FcXNz8mhWjsE/hVWtyr7Kb4zo9yU25KeCtf9WnA2Eo7', ''),
(11, 'ragib.hossain007@gmail.com', 'Ragib', 'Hossain', 0, '$5$rounds=5000$kjkszpjforsalt$FcXNz8mhWjsE/hVWtyr7Kb4zo9yU25KeCtf9WnA2Eo7', ''),
(12, 'abdulmotalebpiyas@gmail.com', 'Saif', 'Zohan Piyas', 0, '$5$rounds=5000$kjkszpjforsalt$FcXNz8mhWjsE/hVWtyr7Kb4zo9yU25KeCtf9WnA2Eo7', ''),
(13, 'rhossain@gmail.com', 'Ragib', 'Ibne Hossain', 0, '$5$rounds=5000$kjkszpjforsalt$TwT3jAQdNO.sLPnxRGZKewAbfe31obPwZRRNuhJqKz2', ''),
(14, 'umoon46@gmail.com', 'Umar', 'Faiaz Moon', 0, '$5$rounds=5000$kjkszpjforsalt$FcXNz8mhWjsE/hVWtyr7Kb4zo9yU25KeCtf9WnA2Eo7', ''),
(15, 'u@gmail.com', 'Umar', 'Zohan Piyas', 0, '$5$rounds=5000$kjkszpjforsalt$FcXNz8mhWjsE/hVWtyr7Kb4zo9yU25KeCtf9WnA2Eo7', ''),
(16, 'habibfarhan701@gmail.com', 'Farhan ', 'Habib', 0, '$5$rounds=5000$kjkszpjforsalt$FcXNz8mhWjsE/hVWtyr7Kb4zo9yU25KeCtf9WnA2Eo7', ''),
(17, 'ar@gmail.com', 'Ashikur', 'Rahman', 0, '$5$rounds=5000$kjkszpjforsalt$FcXNz8mhWjsE/hVWtyr7Kb4zo9yU25KeCtf9WnA2Eo7', ''),
(18, 'na_nina08@gmail.com', 'khandaker ', 'Nabiul', 0, '$5$rounds=5000$kjkszpjforsalt$FcXNz8mhWjsE/hVWtyr7Kb4zo9yU25KeCtf9WnA2Eo7', ''),
(19, 'ninad@gmail.com', 'khandaker ', 'Nabiul', 0, '$5$rounds=5000$kjkszpjforsalt$FcXNz8mhWjsE/hVWtyr7Kb4zo9yU25KeCtf9WnA2Eo7', ''),
(20, 'dewan@gmail.com', 'Dewan', 'mahdi', 0, '$5$rounds=5000$kjkszpjforsalt$FcXNz8mhWjsE/hVWtyr7Kb4zo9yU25KeCtf9WnA2Eo7', '');

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
  MODIFY `c_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=72;

--
-- AUTO_INCREMENT for table `meme`
--
ALTER TABLE `meme`
  MODIFY `m_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

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
-- Constraints for table `meme`
--
ALTER TABLE `meme`
  ADD CONSTRAINT `meme_ibfk_1` FOREIGN KEY (`u_id`) REFERENCES `user` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

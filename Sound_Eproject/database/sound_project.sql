-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 27, 2023 at 02:32 AM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sound_project`
--

-- --------------------------------------------------------

--
-- Table structure for table `albums`
--

CREATE TABLE `albums` (
  `albums_id` int(11) NOT NULL,
  `albums_name` varchar(55) DEFAULT NULL,
  `albums_image` varchar(300) DEFAULT NULL,
  `albums_des` text DEFAULT NULL,
  `albums_artist_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `albums`
--

INSERT INTO `albums` (`albums_id`, `albums_name`, `albums_image`, `albums_des`, `albums_artist_id`) VALUES
(76, 'Rockstar', 'album-7.jpg', ' Soundtrack album by A. R. Rahman', 13),
(77, 'Open Letter', 'talh.jpg', ' Album by Talha Anjum		', 11),
(78, 'The Eminem Show', 'eminem.jpg', 'Studio album by Eminem\r\n', 6),
(79, 'Two Hearts Never Break The Same', 'ap.jpg', 'Album by AP Dhillon', 2),
(80, 'Mercury – Acts 1 & 2', 'drag.jpg', 'Studio album by Imagine Dragons		', 18),
(81, 'After Hours', 'disco-4.jpg', 'Studio album by The Weeknd', 17);

-- --------------------------------------------------------

--
-- Table structure for table `artist`
--

CREATE TABLE `artist` (
  `artist_id` int(11) NOT NULL,
  `artist_name` varchar(55) DEFAULT NULL,
  `artist_image` varchar(255) DEFAULT NULL,
  `artist_genre_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `artist`
--

INSERT INTO `artist` (`artist_id`, `artist_name`, `artist_image`, `artist_genre_id`) VALUES
(2, 'AP Dhillon', 'app.jpg', 9),
(5, 'Shubh', 'shubh-r.jpg', 9),
(6, 'Eminem', 'eminem.jpg', 8),
(7, 'Atif Aslam', 'atif_aslam.jpg', 6),
(8, 'Taylor Swift', 'featured-artist2.jpg', 8),
(11, 'Talha Anjum', 'talha1.jpg', 10),
(12, 'Talha Yonus', 'yonus1.jpg', 10),
(13, 'AR Rehman', 'arr.jpg', 11),
(14, 'Selena Gomez', 'selenaa.jpg', 8),
(15, 'Dua Lipa', 'lipa.jpg', 8),
(16, 'Shreya Ghoshal', 'goshal.jpg', 6),
(17, 'The Weeknd', 'weekend.jpg', 8),
(18, 'Imagine Dragons', 'dragon.jpg', 8);

-- --------------------------------------------------------

--
-- Table structure for table `audio`
--

CREATE TABLE `audio` (
  `audio_id` int(11) NOT NULL,
  `audio_name` varchar(155) DEFAULT NULL,
  `audio_image` varchar(255) DEFAULT NULL,
  `audio_genre_id` int(11) DEFAULT NULL,
  `audio_artist_id` int(11) DEFAULT NULL,
  `audio_albums_id` int(11) DEFAULT NULL,
  `audio_file` varchar(355) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `audio`
--

INSERT INTO `audio` (`audio_id`, `audio_name`, `audio_image`, `audio_genre_id`, `audio_artist_id`, `audio_albums_id`, `audio_file`) VALUES
(18, 'NADAAN PARINDE', 'nadan parinde.jpg', 11, 13, 76, 'r1.mp3'),
(19, 'Aur Ho', 'aur ho.jpg', 11, 13, 76, 'r2.mp3'),
(20, 'Haawa Haawa', 'hawa hawa.jpg', 11, 13, 76, 'r3.mp3'),
(21, 'Tum Ho', 'tm ho.jpg', 11, 13, 76, 'r4.mp3'),
(22, 'Sadda Haq', 'saada haq.jpg', 11, 13, 76, 'r5.mp3'),
(23, 'Downers At Dusk', 'open.jpg', 10, 11, 77, 't1.mp3'),
(24, 'Secrets', 'talh.jpg', 10, 13, 77, 't2.mp3'),
(25, 'Superman', 'em.jpg', 8, 6, 78, 'e1.mp3'),
(26, 'Lose Yourself', 'em.jpg', 8, 6, 78, 'e2.mp3'),
(27, 'Mockingbird', 'em.jpg', 8, 6, 78, 'e3.mp3'),
(28, 'The Real Slim Shady', 'em.jpg', 8, 6, 78, 'e4.mp3'),
(29, 'Excuses', 'ap.jpg', 9, 2, 79, 'ap1.mp3'),
(30, 'Brown Munde', 'ap.jpg', 9, 2, 79, 'ap2.mp3'),
(31, 'Insane', 'ap.jpg', 9, 2, 79, 'ap3.mp3'),
(32, 'Bones', 'drag.jpg', 8, 18, 80, 'dra1.mp3'),
(33, 'Thunder', 'drag.jpg', 8, 18, 80, 'dra2.mp3'),
(34, 'Imagine Dragons x J.I.D - Enemy', 'drag.jpg', 8, 18, 80, 'dra3.mp3'),
(35, 'After Hours', 'album-6.jpg', 8, 17, 81, 'w3.mp3'),
(36, 'I Was Never There', 'weekend.jpg', 8, 17, 81, 'w2.mp3'),
(37, 'Starboy', 'weekend.jpg', 8, 17, 81, 'w1.mp3');

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE `feedback` (
  `feedback_id` int(11) NOT NULL,
  `feedback_name` varchar(105) NOT NULL,
  `feedback_email` varchar(255) NOT NULL,
  `feedback_message` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `feedback`
--

INSERT INTO `feedback` (`feedback_id`, `feedback_name`, `feedback_email`, `feedback_message`) VALUES
(21, 'mr harry', 'harry@gmail.com', 'good web design and php code  best'),
(22, 'shahbaz sharif', 'salman@gmail.com', 'best of luck '),
(23, 'asad', 'asadluka@gmail.com', 'best website'),
(24, 'ali ahmed', 'salmanAli@gmail.com', 'GOOD WORK ');

-- --------------------------------------------------------

--
-- Table structure for table `genre`
--

CREATE TABLE `genre` (
  `genre_id` int(11) NOT NULL,
  `genre_name` varchar(55) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `genre`
--

INSERT INTO `genre` (`genre_id`, `genre_name`) VALUES
(2, 'hiphop 2310'),
(4, 'Pop Sounds'),
(6, 'love beat'),
(8, 'English Music'),
(9, 'Panjabi Song'),
(10, 'Urdu Rap Songs'),
(11, 'Hindi Beats');

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

CREATE TABLE `roles` (
  `role_id` int(11) NOT NULL,
  `role_name` varchar(55) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `roles`
--

INSERT INTO `roles` (`role_id`, `role_name`) VALUES
(1, 'admin'),
(4, 'user');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `users_id` int(11) NOT NULL,
  `users_name` varchar(55) DEFAULT NULL,
  `users_email` varchar(255) DEFAULT NULL,
  `users_password` varchar(42) DEFAULT NULL,
  `user_image` varchar(255) NOT NULL,
  `users_role_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`users_id`, `users_name`, `users_email`, `users_password`, `user_image`, `users_role_id`) VALUES
(4, 'Shehriyar ', 'sherryop121@gmail.com', 'aptech', 'captain.jpg', 1),
(9, 'Asad ', 'asad@gmail.com', 'aptech', 'as.jpg', 1),
(10, 'Wasay', 'wasay@gmail.com', 'aptech', 'aw.jpg', 1),
(22, 'Ghausiyah', 'Ghausiyah@gmail.com', 'aptech', 'g.jpg', 1),
(23, 'Surema', 'surema@gmail.com', 'aptech', 'sq.jpg', 1),
(24, 'ali', 'ali@gmail.com', 'asd', '', 4);

-- --------------------------------------------------------

--
-- Table structure for table `video`
--

CREATE TABLE `video` (
  `video_id` int(11) NOT NULL,
  `video_title` varchar(55) DEFAULT NULL,
  `video_thumbnail` varchar(255) DEFAULT NULL,
  `video_genre_id` int(11) DEFAULT NULL,
  `video_artist_id` int(11) DEFAULT NULL,
  `video_albums_id` int(11) DEFAULT NULL,
  `video_file` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `video`
--

INSERT INTO `video` (`video_id`, `video_title`, `video_thumbnail`, `video_genre_id`, `video_artist_id`, `video_albums_id`, `video_file`) VALUES
(27, 'Downers At Dusk ', 'tthh.jpg', 10, 11, 77, 'talha.mp4'),
(28, 'With_You', 'with_u1.jpg', 9, 2, 79, 'apdillion.mp4'),
(29, 'Excuses', 'excuse.webp', 9, 2, 79, 'Excuses (Official Video) _ AP Dhillon _ Gurinder Gill _ Intense(480P).mp4'),
(30, 'Calm Down', 'come_down.jpg', 8, 14, 80, 'calmdown.mp4'),
(31, 'Enemy', 'enemy.jpg', 8, 18, 80, 'enemy.mp4'),
(32, 'Startboy', 'star_boy.jpg', 8, 17, 81, 'weekend.mp4'),
(33, 'Cheques', 'cheque.jpg', 9, 5, 79, 'Shubh - Cheques (Official Music Video)(360P).mp4'),
(34, 'Rollins', 'rollins.jpg', 9, 2, 79, 'shubh-rollin.mp4'),
(35, 'Elevated', 'elevated.webp', 9, 2, 79, 'shubhelav.mp4');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `albums`
--
ALTER TABLE `albums`
  ADD PRIMARY KEY (`albums_id`),
  ADD KEY `albums_artist_id` (`albums_artist_id`);

--
-- Indexes for table `artist`
--
ALTER TABLE `artist`
  ADD PRIMARY KEY (`artist_id`),
  ADD KEY `artist_genre_id` (`artist_genre_id`);

--
-- Indexes for table `audio`
--
ALTER TABLE `audio`
  ADD PRIMARY KEY (`audio_id`),
  ADD KEY `audio_genre_id` (`audio_genre_id`),
  ADD KEY `audio_artist_id` (`audio_artist_id`),
  ADD KEY `audio_albums_id` (`audio_albums_id`);

--
-- Indexes for table `feedback`
--
ALTER TABLE `feedback`
  ADD PRIMARY KEY (`feedback_id`),
  ADD UNIQUE KEY `feedback_id` (`feedback_id`,`feedback_email`);

--
-- Indexes for table `genre`
--
ALTER TABLE `genre`
  ADD PRIMARY KEY (`genre_id`);

--
-- Indexes for table `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`role_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`users_id`),
  ADD UNIQUE KEY `users_email` (`users_email`),
  ADD KEY `users_role_id` (`users_role_id`);

--
-- Indexes for table `video`
--
ALTER TABLE `video`
  ADD PRIMARY KEY (`video_id`),
  ADD KEY `video_genre_id` (`video_genre_id`),
  ADD KEY `video_artist_id` (`video_artist_id`),
  ADD KEY `video_albums_id` (`video_albums_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `albums`
--
ALTER TABLE `albums`
  MODIFY `albums_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=82;

--
-- AUTO_INCREMENT for table `artist`
--
ALTER TABLE `artist`
  MODIFY `artist_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `audio`
--
ALTER TABLE `audio`
  MODIFY `audio_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;

--
-- AUTO_INCREMENT for table `feedback`
--
ALTER TABLE `feedback`
  MODIFY `feedback_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `genre`
--
ALTER TABLE `genre`
  MODIFY `genre_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
  MODIFY `role_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `users_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `video`
--
ALTER TABLE `video`
  MODIFY `video_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `albums`
--
ALTER TABLE `albums`
  ADD CONSTRAINT `albums_ibfk_1` FOREIGN KEY (`albums_artist_id`) REFERENCES `artist` (`artist_id`);

--
-- Constraints for table `artist`
--
ALTER TABLE `artist`
  ADD CONSTRAINT `artist_ibfk_1` FOREIGN KEY (`artist_genre_id`) REFERENCES `genre` (`genre_id`);

--
-- Constraints for table `audio`
--
ALTER TABLE `audio`
  ADD CONSTRAINT `audio_ibfk_1` FOREIGN KEY (`audio_genre_id`) REFERENCES `genre` (`genre_id`),
  ADD CONSTRAINT `audio_ibfk_2` FOREIGN KEY (`audio_artist_id`) REFERENCES `artist` (`artist_id`),
  ADD CONSTRAINT `audio_ibfk_3` FOREIGN KEY (`audio_albums_id`) REFERENCES `albums` (`albums_id`);

--
-- Constraints for table `users`
--
ALTER TABLE `users`
  ADD CONSTRAINT `users_ibfk_1` FOREIGN KEY (`users_role_id`) REFERENCES `roles` (`role_id`);

--
-- Constraints for table `video`
--
ALTER TABLE `video`
  ADD CONSTRAINT `video_ibfk_1` FOREIGN KEY (`video_genre_id`) REFERENCES `genre` (`genre_id`),
  ADD CONSTRAINT `video_ibfk_2` FOREIGN KEY (`video_artist_id`) REFERENCES `artist` (`artist_id`),
  ADD CONSTRAINT `video_ibfk_3` FOREIGN KEY (`video_albums_id`) REFERENCES `albums` (`albums_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

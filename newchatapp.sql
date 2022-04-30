-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 30, 2022 at 02:16 PM
-- Server version: 10.4.13-MariaDB
-- PHP Version: 7.4.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `newchatapp`
--

-- --------------------------------------------------------

--
-- Table structure for table `friends`
--

CREATE TABLE `friends` (
  `id_friends` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `id_friend` int(11) NOT NULL,
  `status` int(2) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `friends`
--

INSERT INTO `friends` (`id_friends`, `id_user`, `id_friend`, `status`, `created_at`, `updated_at`) VALUES
(1, 2, 1, 2, '2022-04-28 22:55:49', '2022-04-28 22:55:49');

-- --------------------------------------------------------

--
-- Table structure for table `friend_status`
--

CREATE TABLE `friend_status` (
  `id_frind_status` int(11) NOT NULL,
  `status` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `friend_status`
--

INSERT INTO `friend_status` (`id_frind_status`, `status`) VALUES
(0, 'request'),
(1, 'reject'),
(2, 'accept');

-- --------------------------------------------------------

--
-- Table structure for table `group`
--

CREATE TABLE `group` (
  `id_group` int(11) NOT NULL,
  `name` varchar(15) DEFAULT NULL,
  `description` varchar(20) DEFAULT NULL,
  `created_at` time DEFAULT NULL,
  `update_at` time DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `message`
--

CREATE TABLE `message` (
  `id_message` int(11) NOT NULL,
  `group_id` int(11) DEFAULT NULL,
  `send_id` int(11) DEFAULT NULL,
  `receive_id` int(11) DEFAULT NULL,
  `message_body` text DEFAULT NULL,
  `message_subject` varchar(20) DEFAULT NULL,
  `grup_id` int(11) DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `message`
--

INSERT INTO `message` (`id_message`, `group_id`, `send_id`, `receive_id`, `message_body`, `message_subject`, `grup_id`, `created_at`, `updated_at`) VALUES
(1, NULL, 1, 2, 'hallo apa kabar?', 'hallo apa kabar?', 0, '2022-04-28 23:34:39', '2022-04-28 23:34:39'),
(2, NULL, 2, 1, 'saya baik baik saja', 'saya baik baik saja', 0, '2022-04-30 11:07:19', '2022-04-30 11:07:19');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id_user` int(11) UNSIGNED NOT NULL,
  `uniq_id` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(225) NOT NULL,
  `username` varchar(50) DEFAULT NULL,
  `about` varchar(20) DEFAULT NULL,
  `profile` varchar(100) DEFAULT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id_user`, `uniq_id`, `email`, `password`, `username`, `about`, `profile`, `created_at`, `updated_at`) VALUES
(1, '8c113c2b4cb22a1d0889b6112ea0184b', 'narnowin00@gmail.com', '202cb962ac59075b964b07152d234b70', 'winarno', 'sibuk', 'men.svg', '2022-04-29 05:13:23', '2022-04-29 05:13:23'),
(2, 'e932b71259751670cbceefcbb0a83e5c', 'dika@gmail.com', '202cb962ac59075b964b07152d234b70', 'dika', 'about me', 'men.svg', '2022-04-29 05:17:27', '2022-04-29 05:17:27');

-- --------------------------------------------------------

--
-- Table structure for table `user_group`
--

CREATE TABLE `user_group` (
  `id_user_group` int(11) NOT NULL,
  `group_id` int(11) DEFAULT NULL,
  `user_id` int(11) DEFAULT NULL,
  `join_at` time DEFAULT NULL,
  `left_at` time DEFAULT NULL,
  `status` int(1) DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `friends`
--
ALTER TABLE `friends`
  ADD PRIMARY KEY (`id_friends`);

--
-- Indexes for table `friend_status`
--
ALTER TABLE `friend_status`
  ADD PRIMARY KEY (`id_frind_status`);

--
-- Indexes for table `group`
--
ALTER TABLE `group`
  ADD PRIMARY KEY (`id_group`);

--
-- Indexes for table `message`
--
ALTER TABLE `message`
  ADD PRIMARY KEY (`id_message`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id_user`);

--
-- Indexes for table `user_group`
--
ALTER TABLE `user_group`
  ADD PRIMARY KEY (`id_user_group`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `friends`
--
ALTER TABLE `friends`
  MODIFY `id_friends` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `group`
--
ALTER TABLE `group`
  MODIFY `id_group` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `message`
--
ALTER TABLE `message`
  MODIFY `id_message` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id_user` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `user_group`
--
ALTER TABLE `user_group`
  MODIFY `id_user_group` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

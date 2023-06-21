-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 15, 2021 at 12:41 PM
-- Server version: 10.4.20-MariaDB
-- PHP Version: 8.0.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `account_system`
--

-- --------------------------------------------------------

--
-- Table structure for table `badges`
--

CREATE TABLE `badges` (
  `id` int(11) NOT NULL,
  `registered_user` tinyint(1) NOT NULL DEFAULT 1,
  `perfect_q1` tinyint(1) NOT NULL DEFAULT 0,
  `perfect_q2` tinyint(1) NOT NULL DEFAULT 0,
  `perfect_q3` tinyint(1) NOT NULL DEFAULT 0,
  `perfect_q4` tinyint(1) NOT NULL DEFAULT 0,
  `perfect_q5` tinyint(1) NOT NULL DEFAULT 0,
  `perfect_q6` tinyint(1) NOT NULL DEFAULT 0,
  `perfect_q7` tinyint(1) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `badges`
--

INSERT INTO `badges` (`id`, `registered_user`, `perfect_q1`, `perfect_q2`, `perfect_q3`, `perfect_q4`, `perfect_q5`, `perfect_q6`, `perfect_q7`) VALUES
(35, 1, 1, 0, 0, 0, 0, 0, 1),
(41, 1, 0, 1, 0, 0, 0, 0, 0),
(42, 1, 1, 0, 1, 0, 0, 0, 0),
(43, 1, 0, 0, 0, 0, 0, 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `quiz_1`
--

CREATE TABLE `quiz_1` (
  `id` int(11) NOT NULL,
  `user` varchar(40) NOT NULL,
  `score` smallint(2) NOT NULL,
  `max` tinyint(2) NOT NULL DEFAULT 20
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `quiz_1`
--

INSERT INTO `quiz_1` (`id`, `user`, `score`, `max`) VALUES
(3, 'Lisa', 19, 20),
(5, 'hmmm', 20, 20),
(6, 'Bart', 1, 20),
(35, 'USERNAME', 20, 20),
(36, 'NewUser', 13, 20),
(41, 'Xander Ford', 2, 20),
(42, 'Renmar Balana', 20, 20);

-- --------------------------------------------------------

--
-- Table structure for table `quiz_2`
--

CREATE TABLE `quiz_2` (
  `id` int(11) NOT NULL,
  `user` varchar(40) NOT NULL,
  `score` smallint(2) NOT NULL,
  `max` tinyint(2) NOT NULL DEFAULT 20
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `quiz_2`
--

INSERT INTO `quiz_2` (`id`, `user`, `score`, `max`) VALUES
(3, 'Lisa', 19, 20),
(5, 'hmmm', 20, 20),
(6, 'Bart', 1, 20),
(8, 'NED', 16, 20),
(11, 'Marge', 11, 20),
(35, 'USERNAME', 20, 20),
(36, 'NewUser', 2, 20),
(41, 'Xander Ford', 20, 20);

-- --------------------------------------------------------

--
-- Table structure for table `quiz_3`
--

CREATE TABLE `quiz_3` (
  `id` int(11) NOT NULL,
  `user` varchar(40) NOT NULL,
  `score` smallint(2) NOT NULL,
  `max` tinyint(2) NOT NULL DEFAULT 20
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `quiz_3`
--

INSERT INTO `quiz_3` (`id`, `user`, `score`, `max`) VALUES
(3, 'Lisa', 19, 20),
(5, 'hmmm', 20, 20),
(6, 'Bart', 1, 20),
(8, 'NED', 16, 20),
(11, 'Marge', 11, 20),
(35, 'USERNAME', 5, 20),
(42, 'Renmar Balana', 20, 20);

-- --------------------------------------------------------

--
-- Table structure for table `quiz_4`
--

CREATE TABLE `quiz_4` (
  `id` int(11) NOT NULL,
  `user` varchar(40) NOT NULL,
  `score` smallint(2) NOT NULL,
  `max` tinyint(2) NOT NULL DEFAULT 20
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `quiz_4`
--

INSERT INTO `quiz_4` (`id`, `user`, `score`, `max`) VALUES
(3, 'Lisa', 19, 20),
(5, 'hmmm', 20, 20),
(6, 'Bart', 1, 20),
(8, 'NED', 16, 20),
(11, 'Marge', 11, 20),
(35, 'USERNAME', 5, 20);

-- --------------------------------------------------------

--
-- Table structure for table `quiz_5`
--

CREATE TABLE `quiz_5` (
  `id` int(11) NOT NULL,
  `user` varchar(40) NOT NULL,
  `score` smallint(2) NOT NULL,
  `max` tinyint(2) NOT NULL DEFAULT 20
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `quiz_5`
--

INSERT INTO `quiz_5` (`id`, `user`, `score`, `max`) VALUES
(3, 'Lisa', 19, 20),
(5, 'hmmm', 20, 20),
(6, 'Bart', 1, 20),
(8, 'NED', 16, 20),
(11, 'Marge', 11, 20),
(35, 'USERNAME', 5, 20);

-- --------------------------------------------------------

--
-- Table structure for table `quiz_6`
--

CREATE TABLE `quiz_6` (
  `id` int(11) NOT NULL,
  `user` varchar(40) NOT NULL,
  `score` smallint(2) NOT NULL,
  `max` tinyint(2) NOT NULL DEFAULT 20
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `quiz_6`
--

INSERT INTO `quiz_6` (`id`, `user`, `score`, `max`) VALUES
(3, 'Lisa', 19, 20),
(5, 'hmmm', 20, 20),
(6, 'Bart', 1, 20),
(8, 'NED', 16, 20),
(11, 'Marge', 11, 20),
(35, 'USERNAME', 5, 20);

-- --------------------------------------------------------

--
-- Table structure for table `quiz_7`
--

CREATE TABLE `quiz_7` (
  `id` int(11) NOT NULL,
  `user` varchar(40) NOT NULL,
  `score` smallint(2) NOT NULL,
  `max` tinyint(2) NOT NULL DEFAULT 20
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `quiz_7`
--

INSERT INTO `quiz_7` (`id`, `user`, `score`, `max`) VALUES
(2, 'Maggie', 15, 20),
(3, 'Lisa', 19, 20),
(5, 'hmmm', 20, 20),
(6, 'Bart', 1, 20),
(8, 'NED', 16, 20),
(11, 'Marge', 11, 20),
(20, 'Burns', 17, 20),
(35, 'USERNAME', 15, 20);

-- --------------------------------------------------------

--
-- Table structure for table `sign_up`
--

CREATE TABLE `sign_up` (
  `id` int(11) NOT NULL,
  `username` varchar(20) NOT NULL,
  `email` varchar(40) NOT NULL,
  `password` varchar(40) NOT NULL,
  `online` tinyint(1) DEFAULT 0,
  `profile_pic` int(11) NOT NULL DEFAULT 1,
  `address` varchar(70) NOT NULL DEFAULT '-address-',
  `number` varchar(14) NOT NULL DEFAULT '0000-000-0000',
  `gender` varchar(10) DEFAULT 'not set',
  `birthdate` date NOT NULL DEFAULT '2002-05-18',
  `fb_contact` varchar(20) NOT NULL DEFAULT '@contact'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `sign_up`
--

INSERT INTO `sign_up` (`id`, `username`, `email`, `password`, `online`, `profile_pic`, `address`, `number`, `gender`, `birthdate`, `fb_contact`) VALUES
(29, 'TEST', 'a@gmail.com', 'e2fc714c4727ee9395f324cd2e7f331f', 0, 1, '-empty-', '639544655', NULL, '2002-05-18', '@contact'),
(30, 'a', 'b@gmail.com', '4a8a08f09d37b73795649038408b5f33', 0, 1, '-empty-', '0', NULL, '2002-05-18', '@contact'),
(31, 'adfsad', 'asdas@mail.com', 'a8f5f167f44f4964e6c998dee827110c', 0, 1, '-empty-', '0', NULL, '2002-05-18', '@contact'),
(32, 'TEST', 'tickles@a.com', '202cb962ac59075b964b07152d234b70', 0, 1, '-empty-', '0', NULL, '2002-05-18', '@contact'),
(33, 'asdasd', 'sdasd@gmail.com', 'cb345b2d9601accb34d7666878d5b18d', 0, 1, '-empty-', '0', NULL, '2002-05-18', '@contact'),
(35, 'USERNAME', 'sample@mail.com', '819b0643d6b89dc9b579fdfc9094f28e', 0, 5, 'Libod, Boracay, Bacacay, Albay.   Philippines', '9277-413-965', 'Female', '2002-09-01', '@user.69'),
(37, 'c-coding-hub', 'cicevo6375@suggerin.com', '87b28f0766bed89a1953b9a9a8e1f73f', 0, 1, 'dT. :EWIS\r\n', '0', 'Male', '2002-05-18', '@contact'),
(41, 'Xander Ford', 'x@z.com', '5f4dcc3b5aa765d61d8327deb882cf99', 1, 5, '-address-', '0', 'not set', '2002-05-18', '@contact'),
(42, 'Renmar Balana', 'renmarfrancia.balana@bicol-u.edu.ph', '5f4dcc3b5aa765d61d8327deb882cf99', 1, 4, 'Libod, Brgy. 9, Bacacay, Albay', '9277-413-964', 'Male', '2002-05-18', '@renmar.f-18'),
(43, 'Benedict Test', 'mail@email.com', '7c6a180b36896a0a8c02787eeafb0e4c', 0, 4, 'Bacacay Albay', '0000-000-0000', 'Male', '2002-05-18', '@contact');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `badges`
--
ALTER TABLE `badges`
  ADD UNIQUE KEY `id` (`id`);

--
-- Indexes for table `quiz_1`
--
ALTER TABLE `quiz_1`
  ADD UNIQUE KEY `id` (`id`);

--
-- Indexes for table `quiz_2`
--
ALTER TABLE `quiz_2`
  ADD UNIQUE KEY `id` (`id`);

--
-- Indexes for table `quiz_3`
--
ALTER TABLE `quiz_3`
  ADD UNIQUE KEY `id` (`id`);

--
-- Indexes for table `quiz_4`
--
ALTER TABLE `quiz_4`
  ADD UNIQUE KEY `id` (`id`);

--
-- Indexes for table `quiz_5`
--
ALTER TABLE `quiz_5`
  ADD UNIQUE KEY `id` (`id`);

--
-- Indexes for table `quiz_6`
--
ALTER TABLE `quiz_6`
  ADD UNIQUE KEY `id` (`id`);

--
-- Indexes for table `quiz_7`
--
ALTER TABLE `quiz_7`
  ADD UNIQUE KEY `id` (`id`);

--
-- Indexes for table `sign_up`
--
ALTER TABLE `sign_up`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `sign_up`
--
ALTER TABLE `sign_up`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=44;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

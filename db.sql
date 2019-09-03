-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 02, 2019 at 10:04 AM
-- Server version: 10.1.35-MariaDB
-- PHP Version: 7.2.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db`
--

-- --------------------------------------------------------

--
-- Table structure for table `evaluation`
--

CREATE TABLE `evaluation` (
  `eval_id` int(11) NOT NULL,
  `stu_id` int(11) NOT NULL,
  `tech_id` int(11) NOT NULL,
  `sub_id` int(11) NOT NULL,
  `eval_ans` varchar(30) NOT NULL,
  `question` varchar(255) NOT NULL,
  `comments` varchar(255) NOT NULL,
  `question2` varchar(150) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `evaluation`
--

INSERT INTO `evaluation` (`eval_id`, `stu_id`, `tech_id`, `sub_id`, `eval_ans`, `question`, `comments`, `question2`) VALUES
(241, 0, 0, 0, '', '1', '', NULL),
(242, 0, 0, 0, '', '2', '', NULL),
(243, 0, 0, 0, '', '3', '', NULL),
(244, 0, 0, 0, '', '4', '', NULL),
(245, 0, 0, 0, '', '5', '', NULL),
(246, 0, 0, 0, '', '6', '', NULL),
(247, 0, 0, 0, '', '7', '', NULL),
(248, 0, 0, 0, '', '', '', '1'),
(249, 0, 0, 0, '', '', '', '2'),
(250, 0, 0, 0, '', '', '', '3'),
(251, 0, 0, 0, '', '', '', '4'),
(252, 0, 0, 0, '', '', '', '5'),
(253, 0, 0, 0, '', '', '', '6'),
(254, 0, 0, 0, '', '', '', '7'),
(255, 0, 0, 0, '', '1', '', NULL),
(256, 0, 0, 0, '', '2', '', NULL),
(257, 0, 0, 0, '', '3', '', NULL),
(258, 0, 0, 0, '', '4', '', NULL),
(259, 0, 0, 0, '', '5', '', NULL),
(260, 0, 0, 0, '', '6', '', NULL),
(261, 0, 0, 0, '', '7', '', NULL),
(262, 0, 0, 0, '', '', '', '1'),
(263, 0, 0, 0, '', '', '', '2'),
(264, 0, 0, 0, '', '', '', '3'),
(265, 0, 0, 0, '', '', '', '4'),
(266, 0, 0, 0, '', '', '', '5'),
(267, 0, 0, 0, '', '', '', '6'),
(268, 0, 0, 0, '', '', '', '7');

-- --------------------------------------------------------

--
-- Table structure for table `question`
--

CREATE TABLE `question` (
  `questionid` int(15) NOT NULL,
  `questiontxt` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `question`
--

INSERT INTO `question` (`questionid`, `questiontxt`) VALUES
(1, 'Does s/he start his class on time?'),
(2, 'Does s/he carry himself well? Is s/he well groomed and properly attired?'),
(3, 'Does s/he have clear and audible voice?'),
(4, 'Does s/he have clear and audible voice?'),
(5, 'Does s/he attend classes regularly?'),
(6, 'Does s/he move around to assist each student during activities / laboratory?'),
(7, 'Does s/he accommodate participant\'s questions patiently?');

-- --------------------------------------------------------

--
-- Table structure for table `question2`
--

CREATE TABLE `question2` (
  `question2id` int(4) NOT NULL,
  `question2txt` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `question2`
--

INSERT INTO `question2` (`question2id`, `question2txt`) VALUES
(1, 'Are the materials and equipment available before s/he starts the class?'),
(2, 'Are the materials and equipment available before s/he starts the class?'),
(3, 'Are the printed learning materials clear, up-to-date, and well organized?'),
(4, 'Do you feel adequately prepared to complete the exercises based on the lecture?'),
(5, 'Do you have enough time to complete each activity without feeling rushed?'),
(6, 'Do the exercises help you to illustrate the lecture topics?'),
(7, 'Are you satisfied with the training?');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(4) NOT NULL,
  `student_id` varchar(15) NOT NULL,
  `firstname` varchar(255) NOT NULL,
  `lastname` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `course` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `student_id`, `firstname`, `lastname`, `username`, `password`, `email`, `created_at`, `course`) VALUES
(5, 'RPL135864290', 'val', 'dolorzo', 'val123', 'password', 'dolorzv@gmail.com', '2019-09-01 05:32:39', NULL),
(10, 'BYV813794506', 'val', 'val', 'lav', 'val', 'val', '2019-09-01 17:16:42', NULL),
(11, 'ANE087651932', 'teddy', 'bear', 'rocksteddy', 'leslie', 'akala@gmal.com', '2019-09-01 18:30:28', NULL),
(12, 'LTU109378456', 'la', 'ba', 'hermes', 'pass', 'da', '2019-09-02 07:44:27', 'WEB DEVELOPMENT'),
(13, 'SIV934210587', 'masa', 'masa', 'mass', 'masa', 'masa', '2019-09-02 07:47:29', 'CREATIVE WEB DESIGN');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `evaluation`
--
ALTER TABLE `evaluation`
  ADD PRIMARY KEY (`eval_id`);

--
-- Indexes for table `question`
--
ALTER TABLE `question`
  ADD PRIMARY KEY (`questionid`);

--
-- Indexes for table `question2`
--
ALTER TABLE `question2`
  ADD PRIMARY KEY (`question2id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `evaluation`
--
ALTER TABLE `evaluation`
  MODIFY `eval_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=269;

--
-- AUTO_INCREMENT for table `question`
--
ALTER TABLE `question`
  MODIFY `questionid` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `question2`
--
ALTER TABLE `question2`
  MODIFY `question2id` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

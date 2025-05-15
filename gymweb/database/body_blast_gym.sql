-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 15, 2024 at 04:36 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `body_blast_gym`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(100) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `username`, `password`) VALUES
(1, 'alpesh', '1234'),
(3, 'admin', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `massege` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`id`, `name`, `email`, `massege`) VALUES
(3, 'ankit parmar', 'ankit2123466', 'fhncdkjbiuejndjbdoi'),
(4, 'ahul jogadiya', 'jogadiya@123466', 'nsjcmdsjhcldckelj'),
(7, 'ajay solanki', 'ajay@solanki', 'jnriohbcdcyuvebcjevhij');

-- --------------------------------------------------------

--
-- Table structure for table `job1`
--

CREATE TABLE `job1` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `address` varchar(300) NOT NULL,
  `dob` date NOT NULL,
  `mobile` varchar(10) NOT NULL,
  `email` varchar(100) NOT NULL,
  `qualification` varchar(100) NOT NULL,
  `experience` varchar(300) NOT NULL,
  `skill` varchar(300) NOT NULL,
  `time` varchar(100) NOT NULL,
  `status` varchar(100) NOT NULL,
  `date` varchar(100) NOT NULL,
  `joining_date` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `job1`
--

INSERT INTO `job1` (`id`, `name`, `address`, `dob`, `mobile`, `email`, `qualification`, `experience`, `skill`, `time`, `status`, `date`, `joining_date`) VALUES
(3, 'vivek solanki', 'bhavnagar', '1997-02-12', '4566478525', 'vivek@gmail.com', 'i.t master', '10 year', 'dewloper', 'full-time', '', '', ''),
(4, 'raju bhai', 'bhavnagar', '1111-11-21', '6656591640', 'ankit@123456', 'aaaaa', 'xyz', 'aaazzzz', 'full-time', '', '', ''),
(7, 'vivek baraiya', 'bhavnage', '0345-05-31', '5416513566', 'asdne@kjbuvxxjvw', 'knibuvuuyv', 'gvjbuvuybjhb', 'ibbuvuybxusbuy', 'contract', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `job2`
--

CREATE TABLE `job2` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `address` varchar(200) NOT NULL,
  `dob` date NOT NULL,
  `mobile` varchar(20) NOT NULL,
  `email` varchar(100) NOT NULL,
  `qualification` varchar(200) NOT NULL,
  `experience` varchar(300) NOT NULL,
  `skill` varchar(300) NOT NULL,
  `time` varchar(300) NOT NULL,
  `status` varchar(100) NOT NULL,
  `date` varchar(100) NOT NULL,
  `joining_date` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `job2`
--

INSERT INTO `job2` (`id`, `name`, `address`, `dob`, `mobile`, `email`, `qualification`, `experience`, `skill`, `time`, `status`, `date`, `joining_date`) VALUES
(3, 'ankit solanki', 'bhavnagar', '1065-12-31', '654164946', 'ankit@123456', 'kevneruicml dkjk', 'bbcjkjdlmcjkeb', 'kjdewkjcudhvl', 'full-time', '', '', ''),
(4, 'ankit solanki', 'bhavnagar', '1212-02-21', '4566478525', 'vivek@gmail.com', 'xyz', 'xyz', 'xyx', 'full-time', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(100) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `name`, `email`, `password`) VALUES
(3, 'vivek solanki', 'alpesh@554533', '546558665187'),
(4, 'ankit parmar ', 'ankit@2003', '16561846'),
(6, 'alpesh', 'alpesh@gmail.com', '1234'),
(7, 'rahul', 'rahul@gmail.com', '1'),
(8, 'piyush', 'piyush@gmail.com', 'piyush');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `job1`
--
ALTER TABLE `job1`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `job2`
--
ALTER TABLE `job2`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `job1`
--
ALTER TABLE `job1`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `job2`
--
ALTER TABLE `job2`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

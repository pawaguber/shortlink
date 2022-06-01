-- phpMyAdmin SQL Dump
-- version 4.6.6deb5ubuntu0.5
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Jun 01, 2022 at 09:13 PM
-- Server version: 5.7.38-0ubuntu0.18.04.1
-- PHP Version: 7.2.24-0ubuntu0.18.04.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `link`
--

-- --------------------------------------------------------

--
-- Table structure for table `links`
--

CREATE TABLE `links` (
  `id` int(11) NOT NULL,
  `full_link` text NOT NULL,
  `short_link` text NOT NULL,
  `date` datetime NOT NULL,
  `transitions` int(11) NOT NULL,
  `unique_transitions` int(11) NOT NULL,
  `id_owner` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `links`
--

INSERT INTO `links` (`id`, `full_link`, `short_link`, `date`, `transitions`, `unique_transitions`, `id_owner`) VALUES
(308, 'https://minecraftrating.ru/servera-pe/', '123123123123', '2022-06-22 00:00:00', 0, 0, 0),
(309, 'https://cdnjs.com/libraries/jquery', '62974fabd5098', '2022-06-01 14:38:19', 0, 0, 0),
(310, 'https://www.php.net/manual/ru/language.variables.external.php', '629750df1eb7d', '2022-06-01 14:43:27', 0, 0, 0),
(311, 'https://cdnjs.com/libraries/jquery', '6297515bb314c', '2022-06-01 14:45:31', 0, 0, 0),
(312, 'https://www.php.net/manual/ru/language.variables.external.php', '629751956c562', '2022-06-01 14:46:29', 0, 0, 0),
(313, 'http://twpe.ru/', '629751d9de373', '2022-06-01 14:47:37', 0, 0, 0),
(314, 'https://lzone.de/examples/PHP%20strpos', '629751f2d475e', '2022-06-01 14:48:02', 14, 3, 0),
(315, 'https://minecraftrating.ru/servera-pe/', '629777001efba', '2022-06-01 17:26:08', 0, 0, 0),
(316, 'https://minecraftrating.ru/servera-pe/', '629777185ec73', '2022-06-01 17:26:32', 3, 1, 9),
(317, 'https://minecraftrating.ru/servera-pe/', '62977931ee277', '2022-06-01 17:35:29', 0, 0, 0),
(318, 'https://minecraftrating.ru/servera-pe/', '62977937b530e', '2022-06-01 17:35:35', 1, 1, 9),
(319, 'https://minecraftrating.ru/servera-pe/', '62977c8ccd991', '2022-06-01 17:49:48', 1, 1, 9),
(320, 'https://www.youtube.com/watch?v=BsHR0jVcBVg', '6297870d371ea', '2022-06-01 18:34:37', 1, 1, 0),
(321, 'https://www.google.com/', '62978760e80a0', '2022-06-01 18:36:00', 1, 1, 0);

-- --------------------------------------------------------

--
-- Table structure for table `profile`
--

CREATE TABLE `profile` (
  `id` int(11) NOT NULL,
  `login` varchar(255) CHARACTER SET latin1 NOT NULL,
  `password` varchar(255) CHARACTER SET latin1 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `profile`
--

INSERT INTO `profile` (`id`, `login`, `password`) VALUES
(1, '', ''),
(2, '', ''),
(3, '', ''),
(4, '', ''),
(5, '', ''),
(6, '', ''),
(7, '', ''),
(8, '', ''),
(9, '123', '123'),
(10, '321', '321'),
(11, '', ''),
(12, '', ''),
(13, '3211', '3211'),
(14, '432', '432'),
(15, '421', '421');

-- --------------------------------------------------------

--
-- Table structure for table `q`
--

CREATE TABLE `q` (
  `1` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `transitions`
--

CREATE TABLE `transitions` (
  `id` int(11) NOT NULL,
  `link_id` text NOT NULL,
  `ip` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `transitions`
--

INSERT INTO `transitions` (`id`, `link_id`, `ip`) VALUES
(1, '1', '1'),
(2, '1', '1'),
(3, '629751f2d475e', '104.28.205.21'),
(4, '629777185ec73', '104.28.237.21'),
(5, '62977937b530e', '104.28.237.21'),
(6, '62977c8ccd991', '149.154.161.11'),
(7, '6297870d371ea', '104.28.205.21'),
(8, '62978760e80a0', '149.154.161.3');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `links`
--
ALTER TABLE `links`
  ADD UNIQUE KEY `id` (`id`);

--
-- Indexes for table `profile`
--
ALTER TABLE `profile`
  ADD UNIQUE KEY `id` (`id`);

--
-- Indexes for table `transitions`
--
ALTER TABLE `transitions`
  ADD UNIQUE KEY `id` (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `links`
--
ALTER TABLE `links`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=322;
--
-- AUTO_INCREMENT for table `profile`
--
ALTER TABLE `profile`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
--
-- AUTO_INCREMENT for table `transitions`
--
ALTER TABLE `transitions`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

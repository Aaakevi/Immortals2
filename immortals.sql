-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 09, 2024 at 02:42 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.0.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `immortals`
--

-- --------------------------------------------------------

--
-- Table structure for table `subscriptions`
--

CREATE TABLE `subscriptions` (
  `ID` int(11) NOT NULL,
  `firstname` varchar(100) NOT NULL,
  `secondname` varchar(100) NOT NULL,
  `telephone` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `gender` varchar(100) NOT NULL,
  `bestteam` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `subscriptions`
--

INSERT INTO `subscriptions` (`ID`, `firstname`, `secondname`, `telephone`, `email`, `gender`, `bestteam`) VALUES
(1, 'john', 'South', '0772456789', 'jsouth869@gmail.com', 'male', 'Fc Barcelona'),
(2, 'tania', 'ayebare', '0589578574', 'hgsdvgywhfh@gmail.com', 'Female', 'Liverpool'),
(3, 'agaba', 'evelyn', '0589578574', 'bfwgaiffgwafagd@gmail.com', 'Female', 'Chelsea'),
(4, 'isaac', 'rukundo', '86958578584', 'jgrihoekghgherw@gmail.com', 'male', 'Paris Saint German'),
(5, 'phillip', 'ashton', '0772456789', 'arthjur.mpeirwe@gmail.com', 'male', 'Manchester City'),
(6, 'charles', 'bwesigye', '0772456789', 'hgsdvgywhfh@gmail.com', 'male', 'Tottenham Spurs'),
(7, 'oswald', 'tumuyesi', '0778674845', 'jgrihoekghgherw@gmail.com', 'male', 'Real Madrid'),
(8, 'edward', 'nagiri', '', '', 'male', 'Fc Barcelona'),
(9, 'joninah', 'Myagiri', '0778695759', 'bvfhibdsyusbewiveih@gmail.com', 'Female', 'Arsenal'),
(10, 'musa', 'jonathan', '0786968958', 'jonathanmusa@gmail.com', 'male', 'Real Madrid');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `subscriptions`
--
ALTER TABLE `subscriptions`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `subscriptions`
--
ALTER TABLE `subscriptions`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

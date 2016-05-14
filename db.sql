-- phpMyAdmin SQL Dump
-- version 4.4.10
-- http://www.phpmyadmin.net
--
-- Host: localhost:3306
-- Generation Time: May 14, 2016 at 11:44 AM
-- Server version: 5.5.42
-- PHP Version: 5.6.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `akhilarimbra`
--

-- --------------------------------------------------------

--
-- Table structure for table `event`
--

CREATE TABLE `event` (
  `id` varchar(99) NOT NULL,
  `name` varchar(99) NOT NULL,
  `image` varchar(99) NOT NULL,
  `short` varchar(99) NOT NULL,
  `date` varchar(99) NOT NULL,
  `year` date NOT NULL,
  `report` varchar(9999) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `image`
--

CREATE TABLE `image` (
  `name` varchar(27) NOT NULL,
  `type` varchar(27) NOT NULL,
  `title` varchar(27) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `scroll`
--

CREATE TABLE `scroll` (
  `scroll` varchar(999) NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `scroll`
--

INSERT INTO `scroll` (`scroll`, `date`) VALUES
('IEEE IAS SBC of MEA Engineering College Won Third Price at IEEE IAS International Chapter Webcontest 2015 conducted by IEEE IAS.', '2016-05-14'),
('Three students from MEA IEEE IAS SBC attended 2015 IEEE IAS Annual General Meeting at Dallas, Texas, United States of America', '2016-05-14'),
('Milen`15 â€“ MEA IEEE Student branch camp is the first prestigious two day camp conducted in the history of student branch level in Kerala', '2016-05-14'),
('Mr.Shafeeq, Mr.Shahari, Mr.Minhaj won first second and third prizes respectively on IEEE PEZ Competition', '2016-05-14');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `username` varchar(19) NOT NULL,
  `password` varchar(19) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`username`, `password`) VALUES
('akhilarimbra', 'arimbra143#'),
('meaieee', 'meaieee143#');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `event`
--
ALTER TABLE `event`
  ADD UNIQUE KEY `id` (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD UNIQUE KEY `username` (`username`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

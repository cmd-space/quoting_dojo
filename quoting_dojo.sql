-- phpMyAdmin SQL Dump
-- version 4.2.10
-- http://www.phpmyadmin.net
--
-- Host: localhost:8889
-- Generation Time: Apr 03, 2015 at 03:29 AM
-- Server version: 5.5.38
-- PHP Version: 5.6.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

--
-- Database: `quoting_dojo`
--

-- --------------------------------------------------------

--
-- Table structure for table `quotes`
--

CREATE TABLE `quotes` (
`id` int(11) NOT NULL,
  `name` varchar(45) DEFAULT NULL,
  `quote` mediumtext,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `quotes`
--

INSERT INTO `quotes` (`id`, `name`, `quote`, `created_at`, `updated_at`) VALUES
(1, 'mason', 'test', '2015-04-02 19:03:00', '2015-04-02 19:03:00'),
(2, 'mason', 'test', '2015-04-02 19:03:00', '2015-04-02 19:03:00'),
(3, 'hola', 'hola', '2015-04-02 19:16:09', '2015-04-02 19:16:09'),
(4, 'hola', 'hola', '2015-04-02 19:16:09', '2015-04-02 19:16:09');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `quotes`
--
ALTER TABLE `quotes`
 ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `quotes`
--
ALTER TABLE `quotes`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
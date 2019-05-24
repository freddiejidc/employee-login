-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 04, 2019 at 05:10 AM
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
-- Database: `jidclog`
--

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `idUsers` int(11) NOT NULL,
  `uidUsers` tinytext NOT NULL,
  `emailUsers` tinytext NOT NULL,
  `pwdUsers` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`idUsers`, `uidUsers`, `emailUsers`, `pwdUsers`) VALUES
(1, 'test85', 'teamjidc@gmail.com', '$2y$10$QAiO0OCyU/3KyUNL9b475ODBtfUx40Ux68U03/urf5RHt7dyi4vyC'),
(2, 'teamjidc', 'teamjidc@gmail.com', '$2y$10$MDO4zB3Fuu.nTgWfzCsV5O7CcRZBYSKMU3SnrWHtHgKdiZJrArK0m'),
(3, 'teamjidc', 'teamjidc@gmail.com', '$2y$10$kaRW6O5XNit.9.ryzTJWRuVBSoC44837Czn0YzYIn1vd5BNc4qffa'),
(4, 'jidc', 'jidc@gmail.com', '$2y$10$zhxcJVmjcssnlX6u0Fcyz.c81mjhBNptuEGHNwg7NIGivagh66am.'),
(5, 'Vamp', 'tru@gmail.com', '$2y$10$ByrzHt.E2jkAGFAqhfWcmuD7yUTa0wU8B4Hp0WeRRKkJksl4t4lqu'),
(6, 'joe', 'tread@gmail.com', '$2y$10$1NKAwHzRl.PyHOzlTrjpqOKxr1Q38ZnB6dYuucOqGrgR3xf/uKQLu'),
(7, 'coolman', 'ask@gmail.com', '$2y$10$lQZL2E6ycIU1qZHNmBEkgOvZ/FDfCkiBLj0Ii9jE/Fl3H4rJ16yX.'),
(8, 'jonny', 'fam@gmail.com', '$2y$10$u8/56/iqe69En1BXOCpgzuHfhWbV9lb1WnSoPVjwPw6zfi5R2pXku'),
(9, 'Wool', 'wool@gmail.com', '$2y$10$/iNdY4KCKNiBWtzI4AdORuLa/Kq7ygPx.U6FXVcc7k7oselr1sK4y'),
(10, 'coolboy', 'cool@gmail.com', '$2y$10$dIxa8KDoBiO.rdruAI6kBeeGsRLQC/RcotocWqywBe/Q05SYvQnKm');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`idUsers`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `idUsers` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

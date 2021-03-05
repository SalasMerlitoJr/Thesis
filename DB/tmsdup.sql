-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 17, 2021 at 03:36 PM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 7.4.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tmsdup`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_users`
--

CREATE TABLE `tbl_users` (
  `id` int(11) NOT NULL,
  `name` varchar(250) NOT NULL,
  `login` varchar(250) NOT NULL,
  `password` varchar(250) NOT NULL,
  `gender` text NOT NULL,
  `phone` int(25) NOT NULL,
  `role` int(11) DEFAULT NULL,
  `section` text DEFAULT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_users`
--

INSERT INTO `tbl_users` (`id`, `name`, `login`, `password`, `gender`, `phone`, `role`, `section`, `status`) VALUES
(1, 'Admin', 'admin@admin.com', '202cb962ac59075b964b07152d234b70', 'male', 2147483647, 1, '', 0),
(2, 'Student', 'user@user.com', '202cb962ac59075b964b07152d234b70', 'male', 2147483647, 0, '', 0),
(3, 'Faculty', 'faculty@faculty.com', '202cb962ac59075b964b07152d234b70', 'male', 2147483647, 2, '', 0),
(4, 'Secretary', 'secretary@secretary.com', '202cb962ac59075b964b07152d234b70', 'male', 2147483647, 3, '', 0),
(5, ' Faculty One ', 'f1@gg.com', '827ccb0eea8a706c4c34a16891f84e7b', 'male', 505984589, 2, NULL, 0),
(6, 'Faculty Two', 'f2@gg.com', '827ccb0eea8a706c4c34a16891f84e7b', 'female', 8458375, 2, NULL, 0),
(7, 'Faculty Three', 'f3@gg.com', '827ccb0eea8a706c4c34a16891f84e7b', 'male', 456294857, 2, NULL, 0),
(8, 'Faculty Four', 'f4@gg.com', '827ccb0eea8a706c4c34a16891f84e7b', 'female', 47526459, 2, NULL, 0),
(9, 'Faculty Five', 'f5@gg.com', '827ccb0eea8a706c4c34a16891f84e7b', 'male', 9468094, 2, NULL, 0),
(10, 'Faculty Six', 'f6@gg.com', '827ccb0eea8a706c4c34a16891f84e7b', 'female', 92345783, 2, NULL, 0),
(11, 'Faculty Seven', 'f7@gg.com', '827ccb0eea8a706c4c34a16891f84e7b', 'male', 3787245, 2, NULL, 0),
(12, 'Faculty Eight', 'f8@gg.com', '827ccb0eea8a706c4c34a16891f84e7b', 'female', 456247592, 2, NULL, 0),
(13, 'Gedeon B.  Lumbayan ', 'gedeon@gg.com', '827ccb0eea8a706c4c34a16891f84e7b', '', 0, 0, 'R3', 0),
(14, 'James Joshua Balbon ', 'jebjeb@gg.com', '827ccb0eea8a706c4c34a16891f84e7b', '', 0, 0, 'R3', 0),
(15, 'Merlito Salas', 'paps@gg.com', '827ccb0eea8a706c4c34a16891f84e7b', '', 0, 0, 'R3', 0),
(16, 'Roderick Agol', 'kiking@gg.com', '827ccb0eea8a706c4c34a16891f84e7b', '', 0, 0, 'R3', 0),
(17, 'Bryan Sabejon', 'brybry@gg.com', '827ccb0eea8a706c4c34a16891f84e7b', '', 0, 0, 'R4', 0),
(18, 'Hanz Valmoria', 'hanz@gg.com', '827ccb0eea8a706c4c34a16891f84e7b', '', 0, 0, 'R4', 0),
(19, 'Justin Libres', 'jus@gg.com', '827ccb0eea8a706c4c34a16891f84e7b', '', 0, 0, 'R4', 0),
(20, 'Diamond Unos', 'diamond@gg.com', '827ccb0eea8a706c4c34a16891f84e7b', '', 0, 0, 'R4', 0);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `name` varchar(250) NOT NULL,
  `login` varchar(250) NOT NULL,
  `password` varchar(250) NOT NULL,
  `role` int(11) DEFAULT NULL,
  `section` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `login`, `password`, `role`, `section`) VALUES
(1, 'Admin', 'admin@admin.com', '202cb962ac59075b964b07152d234b70', 1, ''),
(2, 'Student', 'user@user.com', '202cb962ac59075b964b07152d234b70', 0, ''),
(3, 'Faculty', 'faculty@faculty.com', '202cb962ac59075b964b07152d234b70', 2, ''),
(4, 'Secretary', 'secretary@secretary.com', '202cb962ac59075b964b07152d234b70', 3, ''),
(5, 'Miguel ', 'gg@gg.com', '827ccb0eea8a706c4c34a16891f84e7b', 0, 'R3'),
(6, 'Sasha ', 'gg@gg.com', '827ccb0eea8a706c4c34a16891f84e7b', 0, 'R4'),
(7, 'Chris', 'gg@gg.com', '827ccb0eea8a706c4c34a16891f84e7b', 0, 'R5'),
(8, 'Rapido', 'gg@gg.com', '827ccb0eea8a706c4c34a16891f84e7b', 0, 'R2'),
(9, 'Miguel c1 ', 'gg1@gg.com', '827ccb0eea8a706c4c34a16891f84e7b', 0, 'R3'),
(10, 'Sasha c2 ', 'gg2@gg.com', '827ccb0eea8a706c4c34a16891f84e7b', 0, 'R4'),
(11, 'Chris c3', 'gg3@gg.com', '827ccb0eea8a706c4c34a16891f84e7b', 0, 'R5'),
(12, 'Rapido c4', 'gg4@gg.com', '827ccb0eea8a706c4c34a16891f84e7b', 0, 'R2'),
(13, 'Dulce c5', 'gg5@gg.com', '827ccb0eea8a706c4c34a16891f84e7b', 0, 'R3'),
(14, 'ako c6', 'gg6@gg.com', '827ccb0eea8a706c4c34a16891f84e7b', 0, 'R5'),
(15, 'ikaw c7', 'gg7@gg.com', '827ccb0eea8a706c4c34a16891f84e7b', 0, 'R2'),
(16, 'siya c8', 'gg8@gg.com', '827ccb0eea8a706c4c34a16891f84e7b', 0, 'R3'),
(95, 'Gedeon B.  Lumbayan ', 'gedeon@gg.com', '827ccb0eea8a706c4c34a16891f84e7b', 0, 'R3'),
(96, 'James Joshua Balbon ', 'jebjeb@gg.com', '827ccb0eea8a706c4c34a16891f84e7b', 0, 'R3'),
(97, 'Merlito Salas', 'paps@gg.com', '827ccb0eea8a706c4c34a16891f84e7b', 0, 'R3'),
(98, 'Roderick Agol', 'kiking@gg.com', '827ccb0eea8a706c4c34a16891f84e7b', 0, 'R3'),
(99, 'Bryan Sabejon', 'brybry@gg.com', '827ccb0eea8a706c4c34a16891f84e7b', 0, 'R4'),
(100, 'Hanz Valmoria', 'hanz@gg.com', '827ccb0eea8a706c4c34a16891f84e7b', 0, 'R4'),
(101, 'Justin Libres', 'jus@gg.com', '827ccb0eea8a706c4c34a16891f84e7b', 0, 'R4'),
(102, 'Diamond Unos', 'diamond@gg.com', '827ccb0eea8a706c4c34a16891f84e7b', 0, 'R4'),
(103, 'Gedeon B.  Lumbayan ', 'gedeon@gg.com', '827ccb0eea8a706c4c34a16891f84e7b', 0, 'R3'),
(104, 'James Joshua Balbon ', 'jebjeb@gg.com', '827ccb0eea8a706c4c34a16891f84e7b', 0, 'R3'),
(105, 'Merlito Salas', 'paps@gg.com', '827ccb0eea8a706c4c34a16891f84e7b', 0, 'R3'),
(106, 'Roderick Agol', 'kiking@gg.com', '827ccb0eea8a706c4c34a16891f84e7b', 0, 'R3'),
(107, 'Bryan Sabejon', 'brybry@gg.com', '827ccb0eea8a706c4c34a16891f84e7b', 0, 'R4'),
(108, 'Hanz Valmoria', 'hanz@gg.com', '827ccb0eea8a706c4c34a16891f84e7b', 0, 'R4'),
(109, 'Justin Libres', 'jus@gg.com', '827ccb0eea8a706c4c34a16891f84e7b', 0, 'R4'),
(110, 'Diamond Unos', 'diamond@gg.com', '827ccb0eea8a706c4c34a16891f84e7b', 0, 'R4');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_users`
--
ALTER TABLE `tbl_users`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_users`
--
ALTER TABLE `tbl_users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=111;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

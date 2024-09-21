sql to run in database   with sample data, feel free to delete it  Made with ❤ by Peter Mutitu

-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 21, 2024 at 08:06 AM
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
-- Database: `portal1`
--

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `firstName` varchar(50) NOT NULL,
  `middleName` varchar(50) NOT NULL,
  `lastName` varchar(50) NOT NULL,
  `age` int(11) NOT NULL,
  `form` varchar(20) NOT NULL,
  `indexno` varchar(20) NOT NULL,
  `password` varchar(255) NOT NULL,
  `MathMarks` int(11) DEFAULT NULL,
  `MathGrade` varchar(10) DEFAULT NULL,
  `EnglishMarks` int(11) DEFAULT NULL,
  `EnglishGrade` varchar(10) DEFAULT NULL,
  `ScienceMarks` int(11) DEFAULT NULL,
  `ScienceGrade` varchar(10) DEFAULT NULL,
  `HistoryMarks` int(11) DEFAULT NULL,
  `HistoryGrade` varchar(10) DEFAULT NULL,
  `GeographyMarks` int(11) DEFAULT NULL,
  `GeographyGrade` varchar(10) DEFAULT NULL,
  `PhysicsMarks` int(11) DEFAULT NULL,
  `PhysicsGrade` varchar(10) DEFAULT NULL,
  `ChemistryMarks` int(11) DEFAULT NULL,
  `ChemistryGrade` varchar(10) DEFAULT NULL,
  `BiologyMarks` int(11) DEFAULT NULL,
  `BiologyGrade` varchar(10) DEFAULT NULL,
  `ComputerMarks` int(11) DEFAULT NULL,
  `ComputerGrade` varchar(10) DEFAULT NULL,
  `PEMarks` int(11) DEFAULT NULL,
  `PEGrade` varchar(10) DEFAULT NULL,
  `TotalMarks` int(11) DEFAULT NULL,
  `OverallGrade` varchar(10) DEFAULT NULL,
  `totalFees` int(11) NOT NULL,
  `feesPaid` int(11) NOT NULL,
  `feesBalance` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`firstName`, `middleName`, `lastName`, `age`, `form`, `indexno`, `password`, `MathMarks`, `MathGrade`, `EnglishMarks`, `EnglishGrade`, `ScienceMarks`, `ScienceGrade`, `HistoryMarks`, `HistoryGrade`, `GeographyMarks`, `GeographyGrade`, `PhysicsMarks`, `PhysicsGrade`, `ChemistryMarks`, `ChemistryGrade`, `BiologyMarks`, `BiologyGrade`, `ComputerMarks`, `ComputerGrade`, `PEMarks`, `PEGrade`, `TotalMarks`, `OverallGrade`, `totalFees`, `feesPaid`, `feesBalance`) VALUES
('Bernard', 'Ptoo', 'Ben', 23, '1', '1232', 'bernard', 98, 'A', 54, 'C', 67, 'B', 34, 'D', 65, 'A', 55, 'C', 80, 'A', 78, 'A-', 98, 'A-', 87, 'A', 478, 'C+', 5000, 3000, 2000),
('Shadrack', 'Waweru', 'Maina', 43, '3', '2343', 'shadrack', 78, 'B', 67, 'B-', 98, 'A', 54, 'C', 76, 'A', 66, 'C', 70, 'B', 90, 'A', 76, 'A', 43, 'D', 600, 'B-', 5000, 1500, 3500),
('Danson', 'Wahome', 'Mwangi', 21, '1', '2344', 'danson', 23, 'E', 56, 'C+', 67, 'B', 55, 'C', 32, 'C-', 56, 'C', 89, 'A', 78, 'A-', 76, 'A-', 34, 'C+', 700, 'A-', 5000, 3000, 2000),
('William', 'Abuya', 'Kapelo', 20, '2', '2543', 'william', 45, 'C', 43, 'C', 65, 'C+', 76, 'A-', 87, 'A', 33, 'D', 67, 'B', 78, 'A-', 90, 'A', 54, 'C+', 589, 'B-', 5000, 1200, 3800),
('Peter', 'Wanguya', 'Mutitu', 19, '4', '2765', 'peter', 34, 'A', 43, 'C', 45, 'C', 78, 'A-', 90, 'A', 67, 'B', 56, 'C', 67, 'C', 35, 'D', 65, 'B', 456, 'B-', 5000, 3500, 1500),
('Peter', 'Wanguya', 'Mutitu', 23, '4W', '2770', 'peter', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, 0),
('Vincent', 'Limo', 'Vin', 19, '2', '3212', 'vincent', 76, 'A', 67, 'B-', 45, 'C', 34, 'D', 54, 'C-', 67, 'A-', 90, 'A', 56, 'C', 87, 'A', 76, 'A', 566, 'C+', 5000, 4000, 1000),
('Eliud', 'Muemi', 'Mutemi', 20, '3', '3432', 'looted', 54, 'C', 45, 'C', 23, 'D', 24, 'D', 45, 'C-', 45, 'C', 78, 'A-', 45, 'C', 56, 'B+', 56, 'B', 455, 'C+', 5000, 1000, 4000),
('Samuel', 'Muturi', 'Muhuri', 23, '4', '4323', 'samuel', 56, 'C', 89, 'A', 54, 'C', 34, 'D', 65, 'C-', 76, 'A-', 60, 'C', 9, 'E', 67, 'C+', 54, 'C+', 1100, 'A', 5000, 4500, 500),
('James', 'Mwangi', 'Muturi', 20, '3', '4544', 'james', 56, 'C', 34, 'D', 56, 'C', 78, 'A-', 23, 'E', 23, 'E', 45, 'C', 76, 'A-', 67, 'B+', 46, 'C+', 356, 'C+', 5000, 4500, 500),
('Kenneth', 'Kihara', 'Mwangi', 23, '3', '5432', 'kenneth', 67, 'B', 65, 'B-', 34, 'D', 56, 'A', 76, 'A-', 54, 'C', 50, 'C', 87, 'A', 56, 'C+', 43, 'B', 234, 'D', 5000, 1500, 3500),
('ME', 'MINE', 'SELF', 21, '2', '9999', 'ME', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD UNIQUE KEY `indexno` (`indexno`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

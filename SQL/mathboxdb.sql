-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 03, 2020 at 06:39 AM
-- Server version: 10.4.8-MariaDB
-- PHP Version: 7.1.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mathboxdb`
--

-- --------------------------------------------------------

--
-- Table structure for table `blogentry`
--

CREATE TABLE `blogentry` (
  `Id` int(11) NOT NULL,
  `Title` varchar(200) NOT NULL,
  `Category` varchar(100) NOT NULL,
  `BlogText` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `blogentry`
--

INSERT INTO `blogentry` (`Id`, `Title`, `Category`, `BlogText`) VALUES
(3, 'ডাটা স্ট্রাকচার কি জিনিশ ?', 'General', 'ধরি , মাহমুদ নামের একটি ছেলের কাছে অনেক গুলো বই আছে, এখন সেই সব বই ছড়ায়ে, ছিটিয়ে রেখেছে। এখন তার মা , তাকে বই গুলো সুন্দর ভাবে সাজায়ে রাখতে বলল। মাহমুদ খুবি চিন্তায় পরল, কারন এখন বই গুলা কে কিভাবে সাজালে তার জন্য সুবিধা হবে। সে অনেক গুলা বুদ্ধি বের করলো। একটি হচ্ছে, সেই সব গুলো বই একটার উপর আরেকটা রাখবে। আর তা না হলে, বই গুলো লাইব্রেরি তে যেভাবে থাকে মানে দাঁড় করিএ রাখবে। এখন মাহমুদ কিছু বই প্রথম ভাবে, কিছু বই দ্বিতীয় পদ্ধতিতে রাখল। এতে মাহমুদ অ খুশি, তার মা ও খুশি। কারন বই গুলো সুন্দর ভাবে সাজানো আছে, আবার মাহমুদ এর যখন যেই বই দরকার সে তখন সেই বইটি খুজে বের করে নিতে পারবে।\r\n\r\nএখন তুমি যদি অই বই গুলো কে ডাটা ( অনেক তথ্য ) হিসেবে চিন্তা করো। তো বই যেভাবে সাজানো লাগছে, ডাটা ও সাজানো দরকার যাতে আমরা আমাদের সুবিধা মতো খুজে পেতে পারি। তো ডাটা সাজিয়ে সুন্দর ভাবে উপস্থাপন এর নাম ই ডাটা স্ট্রাকচার।\r\n\r\nডাটা স্ট্রাকচার অনেক অ্যালগোরিদম কে সুন্দর ভাবে এবং আরও দক্ষ ভাবে প্রকাশ করতে সাহায্য করে।'),
(4, 'Pi', 'General', 'Being an irrational number, π cannot be expressed as a common fraction (equivalently, its decimal representation never ends and never settles into a permanently repeating pattern). Still, fractions such as 22/7 and other rational numbers are commonly used to approximate π. The digits appear to be randomly distributed. In particular, the digit sequence of π is conjectured to satisfy a specific kind of statistical randomness, but to date, no proof of this has been discovered. Also, π is a transcendental number; that is, it is not the root of any polynomial having rational coefficients. This transcendence of π implies that it is impossible to solve the ancient challenge of squaring the circle with a compass and straightedge.'),
(5, 'Integration', 'Calculus', 'Integration is the act of bringing together smaller components into a single system that functions as one. In an IT context, integration refers to the end result of a process that aims to stitch together different, often disparate, subsystems so that the data contained in each becomes part of a larger, more comprehensive system that, ideally, quickly and easily shares data when needed. This often requires that companies build a customized architecture or structure of applications to combine new or existing hardware, software and other communications.\r\n\r\nIntegration is harder to achieve the greater the number of systems that are involved and companies often choose to have external contractors manage some or all phases of the development of the new system. Specific activities having to do with IT system integration include project planning, project management, design and implementation of application programming interfaces, Web services and any process that accounts for the free flow of data or information delivery.\r\n\r\nChallenges to achieving integration mostly have to do with the inherent difficulties in linking a series of diverse existing systems that could be produced by multiple different manufacturers. Other integration challenges have to do with the lack of a coherent or unifying data structure linking all of the different systems, an unwieldy framework of multiple different applications and support systems, the sheer age of the different systems and the actual delivery of the information to key business units that need it. These integration challenges hinder overall process efficiency because poor data exchange between systems prevents quick communication among business units.\r\n\r\nBecause integration is difficult to achieve all at once, a common practice is to employ a strategy of short-term, ad-hoc objectives that slowly builds towards full integration by linking various subsystems where necessary. These links usually are established between the components of the process and control layer of each system to promote the free flow of data across systems. As more systems are linked, more business management and control layers can be connected until all systems are sharing data between each other.');

-- --------------------------------------------------------

--
-- Table structure for table `equations`
--

CREATE TABLE `equations` (
  `Id` int(11) NOT NULL,
  `Name` varchar(100) DEFAULT NULL,
  `Class` varchar(100) NOT NULL,
  `Description` text NOT NULL,
  `Equation` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `equations`
--

INSERT INTO `equations` (`Id`, `Name`, `Class`, `Description`, `Equation`) VALUES
(1, 'Mass-Energy Conversion', 'General', 'Revolutionary', 'E=mc^2'),
(5, 'Square of subtraction of two numbers', 'Algebra', 'School Level', '(a-b)^2=(a+b)(a-b)'),
(11, 'Sin Cosec Relation', 'Geometry', 'Basic Geometry', 'Sin(A) = 1/Cosec(A)');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `blogentry`
--
ALTER TABLE `blogentry`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `equations`
--
ALTER TABLE `equations`
  ADD PRIMARY KEY (`Id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `blogentry`
--
ALTER TABLE `blogentry`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `equations`
--
ALTER TABLE `equations`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

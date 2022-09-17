-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 21, 2022 at 03:40 AM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.3.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `lmsdb`
--

-- --------------------------------------------------------

--
-- Table structure for table `announcements`
--

CREATE TABLE `announcements` (
  `entry` int(11) NOT NULL,
  `id` int(5) NOT NULL,
  `username` varchar(15) NOT NULL,
  `content` varchar(350) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `announcements`
--

INSERT INTO `announcements` (`entry`, `id`, `username`, `content`) VALUES
(11, 25, 'ahsan123', 'MEMORANDUM \r\n\r\nIt is to notify to all concerned that the library services would remain closed on Thursday, April 14, 2022, due to National Holiday, Bengali New Year (Pohela Boishakh), 1429.   '),
(14, 25, 'ahsan123', 'test'),
(16, 25, 'ahsan123', 'hello world'),
(17, 25, 'ahsan123', 'Please return borrowed books within 15 working days. Else you will be pennalized 50 taka per day afterwards.');

-- --------------------------------------------------------

--
-- Table structure for table `book`
--

CREATE TABLE `book` (
  `bookID` int(5) NOT NULL,
  `bookname` varchar(100) NOT NULL,
  `category` varchar(15) NOT NULL,
  `author` varchar(30) NOT NULL,
  `published` date NOT NULL,
  `filename` varchar(100) NOT NULL,
  `price` int(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `book`
--

INSERT INTO `book` (`bookID`, `bookname`, `category`, `author`, `published`, `filename`, `price`) VALUES
(123, 'Learn Python the hard way', 'academic_book', 'Zed A. Shaw', '2004-09-01', 'Learn Python the hard way.png', 700),
(1234, 'Head First Java', 'academic_book', 'Kathy Sierra, Bert Bates', '2007-01-01', 'Head First Java.png', 250),
(12312, 'The Alchemist', 'story_book', 'Paulo Coelho', '2009-01-01', 'The Alchemist.png', 600),
(123412, '4 Hour Work Week', 'self_help', 'Timothy Ferris', '2009-09-01', '4 Hour Work Week.png', 800),
(124521, 'Eleven Minutes', 'story_book', 'Paulo Coelho', '1991-01-01', 'Eleven Minutes.png', 300),
(213123, 'Word Power Made Easy', 'academic_book', 'Norman Lewis', '1984-01-01', 'Word Power Made Easy.png', 1000);

-- --------------------------------------------------------

--
-- Table structure for table `issuedstatus`
--

CREATE TABLE `issuedstatus` (
  `issueID` int(5) NOT NULL,
  `username` varchar(30) NOT NULL,
  `bookname` varchar(100) NOT NULL,
  `issuedDate` date NOT NULL,
  `returnedDate` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `issuedstatus`
--

INSERT INTO `issuedstatus` (`issueID`, `username`, `bookname`, `issuedDate`, `returnedDate`) VALUES
(12313, 'sakib', 'The Alchemist', '2022-04-11', '2022-04-19'),
(43214, 'asif123', 'Learn Python the hard way', '2022-02-02', '2022-02-20'),
(123121, 'faruk', 'Head First Java', '2022-01-15', '2022-01-25'),
(123410, 'zaheed', '4 Hour Work Week', '2022-02-10', '2022-02-20'),
(21131211, 'ahsan123', 'Word Power Made Easy', '2022-01-01', '2022-02-02');

-- --------------------------------------------------------

--
-- Table structure for table `penalty`
--

CREATE TABLE `penalty` (
  `issueID` int(5) NOT NULL,
  `username` varchar(30) NOT NULL,
  `bookname` varchar(100) NOT NULL,
  `issuedDate` date NOT NULL,
  `returnedDate` date NOT NULL,
  `amount` int(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `penalty`
--

INSERT INTO `penalty` (`issueID`, `username`, `bookname`, `issuedDate`, `returnedDate`, `amount`) VALUES
(12313, 'sakib', 'The Alchemist', '2022-04-11', '2022-04-19', 50),
(123121, 'faruk', 'Head First Java', '2022-01-15', '2022-01-25', 200),
(123410, 'zaheed', '4 Hour Work Week', '2022-02-10', '2022-02-20', 250);

-- --------------------------------------------------------

--
-- Table structure for table `registered_users`
--

CREATE TABLE `registered_users` (
  `id` int(5) NOT NULL,
  `username` varchar(15) NOT NULL,
  `password` varchar(20) NOT NULL,
  `fullname` varchar(30) NOT NULL,
  `gender` varchar(8) NOT NULL,
  `email` varchar(30) NOT NULL,
  `dob` date NOT NULL,
  `type` varchar(12) NOT NULL,
  `filename` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `registered_users`
--

INSERT INTO `registered_users` (`id`, `username`, `password`, `fullname`, `gender`, `email`, `dob`, `type`, `filename`) VALUES
(13, 'admin', '#ppppppp', 'ahsan', 'male', 'ahsan@outlook.com', '1999-02-12', 'admin', 'admin.jpg'),
(19, 'zaheed', '#lllllll', 'zaheed', 'male', 'zaheed@gmail.com', '2001-01-01', 'admin', 'zaheed.png'),
(25, 'ahsan123', '@1234567', 'ahsanul haque', 'male', 'ah@a.org', '2009-09-11', 'admin', 'ahsan123.png'),
(26, 'faruk', '#ppppppp', 'faruk hossain', 'male', 'sj@a.org', '2004-01-22', 'coordinator', 'faruk.png'),
(28, 'sakib', '#ppppppp', 'sakib al hasan', 'male', 'skj@a.org', '1999-11-01', 'admin', 'sakib.png'),
(29, 'asif123', '#lllllll', 'asif khan', 'male', 'asif@f.com', '1999-11-11', 'regular_user', 'asif123.png'),
(30, 'sumon', '#lllllll', 'sumon hossain', 'male', 's@g.com', '1991-01-01', 'coordinator', 'sumon.png'),
(31, 'hasan', '#ppppppp', 'hasan mahmud', 'male', 'h@g.com', '1999-09-11', 'regular_user', 'hasan.png'),
(32, 'hasib', '#ppppppp', 'hasibul haque', 'male', 'h@f.com', '2007-01-01', 'coordinator', 'hasib.png');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `announcements`
--
ALTER TABLE `announcements`
  ADD PRIMARY KEY (`entry`),
  ADD KEY `id` (`id`);

--
-- Indexes for table `book`
--
ALTER TABLE `book`
  ADD PRIMARY KEY (`bookID`);

--
-- Indexes for table `issuedstatus`
--
ALTER TABLE `issuedstatus`
  ADD PRIMARY KEY (`issueID`);

--
-- Indexes for table `penalty`
--
ALTER TABLE `penalty`
  ADD PRIMARY KEY (`issueID`);

--
-- Indexes for table `registered_users`
--
ALTER TABLE `registered_users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `announcements`
--
ALTER TABLE `announcements`
  MODIFY `entry` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `registered_users`
--
ALTER TABLE `registered_users`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `announcements`
--
ALTER TABLE `announcements`
  ADD CONSTRAINT `announcements_ibfk_1` FOREIGN KEY (`id`) REFERENCES `registered_users` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

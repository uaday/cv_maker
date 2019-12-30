-- phpMyAdmin SQL Dump
-- version 4.8.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 25, 2019 at 07:44 PM
-- Server version: 10.1.34-MariaDB
-- PHP Version: 7.2.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `cv_maker`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_basic`
--

CREATE TABLE `tbl_basic` (
  `user_id` int(4) NOT NULL,
  `login_id` int(4) NOT NULL,
  `career_object` text NOT NULL,
  `first_name` varchar(200) NOT NULL,
  `last_name` varchar(200) NOT NULL,
  `email` varchar(200) NOT NULL,
  `phone` varchar(200) NOT NULL,
  `web` varchar(200) NOT NULL,
  `gender` varchar(200) NOT NULL,
  `dob` date NOT NULL,
  `address` text NOT NULL,
  `photo` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_basic`
--

INSERT INTO `tbl_basic` (`user_id`, `login_id`, `career_object`, `first_name`, `last_name`, `email`, `phone`, `web`, `gender`, `dob`, `address`, `photo`) VALUES
(15, 23, 'Highly motivated individual and a certified digital marketer with strong SEO and SEM skills, attention to detail, and a solid online marketing background looking to obtain a position of SEO Specialist with XYZ company.', 'Sudipta', 'Ghosh', 'uadayghosh@gmail.com', '01830697059', 'uadayghosh.pixub.com', 'male', '1995-06-24', 'Green Road Dhaka-1205', 'asset/front_end/image/17201143_1247043068745890_6053309860395554894_n.jpg'),
(16, 24, '', 'Riffat Bin', 'Feroz Akash', 'riffatakash@gmail.com', '01625419734', 'zx', 'male', '1994-11-25', '272/14-B,Mirpur-1,Dhaka-1218', 'asset/front_end/image/gears_of_war_skull-1366x768.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_contact`
--

CREATE TABLE `tbl_contact` (
  `contact_id` int(11) NOT NULL,
  `address` varchar(200) NOT NULL,
  `phone` varchar(100) NOT NULL,
  `email` varchar(200) NOT NULL,
  `map_link` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_contact`
--

INSERT INTO `tbl_contact` (`contact_id`, `address`, `phone`, `email`, `map_link`) VALUES
(1, 'Savar Union 1342', '01681390574', '', 'https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d14592.94034857675!2d90.2674411!3d23.8812811!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x2debf98e950c72ca!2sJahangirnagar%20University!5e0!3m2!1sen!2sbd!4v1574706262928!5m2!1sen!2sbd');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_contact_request`
--

CREATE TABLE `tbl_contact_request` (
  `request_id` int(3) NOT NULL,
  `name` varchar(200) NOT NULL,
  `email` varchar(200) NOT NULL,
  `phone` varchar(200) NOT NULL,
  `message` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_education`
--

CREATE TABLE `tbl_education` (
  `edu_id` int(3) NOT NULL,
  `name_of_degree` varchar(300) NOT NULL,
  `major` varchar(300) NOT NULL,
  `instituation` varchar(300) NOT NULL,
  `passing_year` varchar(300) NOT NULL,
  `cgpa` varchar(300) NOT NULL,
  `achievement` varchar(300) NOT NULL,
  `login_id` int(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_education`
--

INSERT INTO `tbl_education` (`edu_id`, `name_of_degree`, `major`, `instituation`, `passing_year`, `cgpa`, `achievement`, `login_id`) VALUES
(27, 'Bsc', 'Software Engineering', 'AIUB', '2016', '3.9', 'N/A', 23),
(28, 'CSE', 'Php', 'AIUB', '2018', '3.66', 'Best Project Award', 24);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_experience`
--

CREATE TABLE `tbl_experience` (
  `exp_id` int(3) NOT NULL,
  `job_title` varchar(300) NOT NULL,
  `desig` varchar(300) NOT NULL,
  `org` varchar(300) NOT NULL,
  `sdate` date NOT NULL,
  `edate` date NOT NULL,
  `job_des` varchar(300) NOT NULL,
  `login_id` int(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_experience`
--

INSERT INTO `tbl_experience` (`exp_id`, `job_title`, `desig`, `org`, `sdate`, `edate`, `job_des`, `login_id`) VALUES
(20, 'Software Developer', 'Software Engineer', 'XYZ', '2016-01-01', '2016-09-01', 'N/A', 23),
(21, 'aa', 'sadsda', 'sadsad', '2016-09-15', '2016-09-29', 'dadsa', 24);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_login`
--

CREATE TABLE `tbl_login` (
  `login_id` int(5) NOT NULL,
  `first_name` varchar(100) NOT NULL,
  `last_name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_login`
--

INSERT INTO `tbl_login` (`login_id`, `first_name`, `last_name`, `email`, `password`) VALUES
(23, 'Sudipta.', 'Ghosh', 'uadayghosh@gmail.com', '123456'),
(24, 'Riffat Bin', 'Feroz Akash', 'riffatakash@gmail', '123456'),
(25, 'abc', 'fdsfh', 'abc@gmail.com', '123456');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_qualification`
--

CREATE TABLE `tbl_qualification` (
  `qua_id` int(3) NOT NULL,
  `qualification` varchar(200) NOT NULL,
  `login_id` int(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_qualification`
--

INSERT INTO `tbl_qualification` (`qua_id`, `qualification`, `login_id`) VALUES
(18, 'N/A', 23),
(19, 'N/A', 24);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_reference`
--

CREATE TABLE `tbl_reference` (
  `ref_id` int(3) NOT NULL,
  `namee` varchar(200) NOT NULL,
  `org` varchar(200) NOT NULL,
  `desig` varchar(200) NOT NULL,
  `email` varchar(200) NOT NULL,
  `phone` varchar(200) NOT NULL,
  `login_id` int(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_reference`
--

INSERT INTO `tbl_reference` (`ref_id`, `namee`, `org`, `desig`, `email`, `phone`, `login_id`) VALUES
(9, 'Kalpama', 'AIUB', 'Faculty', 'kalpama@aiub.edu', '01555568799', 23),
(10, 'Rezawan Ahamed', 'AIUB', 'Faculty', 'rahamed@gmail.com', 'N/A', 23),
(11, 'Ezazul Islam', 'AIUB', 'Faculty', 'ezazulisalam@gmail.com', '01555568799', 24),
(12, 'shuvro das', 'AIUB', 'Faculty', 'shouvodas@gmail.com', '01625419734', 24);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_slogin`
--

CREATE TABLE `tbl_slogin` (
  `login_id` int(3) NOT NULL,
  `user_name` varchar(200) NOT NULL,
  `email` varchar(300) NOT NULL,
  `password` varchar(200) NOT NULL,
  `type` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_slogin`
--

INSERT INTO `tbl_slogin` (`login_id`, `user_name`, `email`, `password`, `type`) VALUES
(2, 'Uaday', 'uadayghosh@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', 'A');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_basic`
--
ALTER TABLE `tbl_basic`
  ADD PRIMARY KEY (`user_id`);

--
-- Indexes for table `tbl_contact`
--
ALTER TABLE `tbl_contact`
  ADD PRIMARY KEY (`contact_id`);

--
-- Indexes for table `tbl_contact_request`
--
ALTER TABLE `tbl_contact_request`
  ADD PRIMARY KEY (`request_id`);

--
-- Indexes for table `tbl_education`
--
ALTER TABLE `tbl_education`
  ADD PRIMARY KEY (`edu_id`);

--
-- Indexes for table `tbl_experience`
--
ALTER TABLE `tbl_experience`
  ADD PRIMARY KEY (`exp_id`);

--
-- Indexes for table `tbl_login`
--
ALTER TABLE `tbl_login`
  ADD PRIMARY KEY (`login_id`);

--
-- Indexes for table `tbl_qualification`
--
ALTER TABLE `tbl_qualification`
  ADD PRIMARY KEY (`qua_id`);

--
-- Indexes for table `tbl_reference`
--
ALTER TABLE `tbl_reference`
  ADD PRIMARY KEY (`ref_id`);

--
-- Indexes for table `tbl_slogin`
--
ALTER TABLE `tbl_slogin`
  ADD PRIMARY KEY (`login_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_basic`
--
ALTER TABLE `tbl_basic`
  MODIFY `user_id` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `tbl_contact`
--
ALTER TABLE `tbl_contact`
  MODIFY `contact_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tbl_contact_request`
--
ALTER TABLE `tbl_contact_request`
  MODIFY `request_id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `tbl_education`
--
ALTER TABLE `tbl_education`
  MODIFY `edu_id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT for table `tbl_experience`
--
ALTER TABLE `tbl_experience`
  MODIFY `exp_id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `tbl_login`
--
ALTER TABLE `tbl_login`
  MODIFY `login_id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `tbl_qualification`
--
ALTER TABLE `tbl_qualification`
  MODIFY `qua_id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `tbl_reference`
--
ALTER TABLE `tbl_reference`
  MODIFY `ref_id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `tbl_slogin`
--
ALTER TABLE `tbl_slogin`
  MODIFY `login_id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

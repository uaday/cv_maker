-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Jan 05, 2020 at 09:43 PM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.1

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
(16, 24, '', 'Riffat Bin', 'Feroz Akash', 'riffatakash@gmail.com', '01625419734', 'zx', 'male', '1994-11-25', '272/14-B,Mirpur-1,Dhaka-1218', 'asset/front_end/image/gears_of_war_skull-1366x768.jpg'),
(17, 26, 'To secure a position where I can efficiently contribute my skills and abilities for the growth of the organization and build my professional career.', 'Israt ', 'Jahan', 'isratjahan169@gmail.com', '01681390574', 'www.github.com', 'male', '1995-07-24', '1/20/5 east basaboo,kadamtala', 'asset/front_end/image/300.jpg');

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
(28, 'CSE', 'Php', 'AIUB', '2018', '3.66', 'Best Project Award', 24),
(29, 'Masters', 'IT', 'JU', '2019', '3.4', 'good score', 26);

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
(21, 'aa', 'sadsda', 'sadsad', '2016-09-15', '2016-09-29', 'dadsa', 24),
(22, 'Full time', 'Wed developer', 'Abc company', '2018-01-01', '2019-01-01', 'Web develop', 26);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_job_circular`
--

CREATE TABLE `tbl_job_circular` (
  `id` bigint(20) NOT NULL,
  `job_name` varchar(200) NOT NULL,
  `tbl_organization_id` bigint(20) NOT NULL,
  `created_date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `last_applied_date` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `job_description` text NOT NULL,
  `skill_tag` text NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_job_circular`
--

INSERT INTO `tbl_job_circular` (`id`, `job_name`, `tbl_organization_id`, `created_date`, `last_applied_date`, `job_description`, `skill_tag`, `status`) VALUES
(1, 'Software Engineer', 5, '2020-01-05 20:22:58', '0000-00-00 00:00:00', '', '', 1),
(2, 'Software Engineer', 5, '2020-01-05 20:33:48', '0000-00-00 00:00:00', '<p style=\"font-size: 13px;\">NewsCred, the world’s leading enterprise content marketing company, is on a mission to create software that transforms how marketing teams work.</p><p style=\"font-size: 13px;\"><strong>&nbsp;</strong></p><p style=\"font-size: 13px;\">NewsCred is a two-time Gartner-leader and a regular Great Place to Work. Every day, across our Colorado, New York, London, and Dhaka offices, 200+ brilliant NewsCred employees commit their passion, time, and energy to shaping the future of an industry.</p><p style=\"font-size: 13px;\"><strong>&nbsp;</strong></p><p style=\"font-size: 13px;\">Our bread and butter is enterprise content marketing, and we are the best in the world at it, with exceptional retention rates over our 10+ year history. Our teams combine strategic expertise, award-winning licensed and original content, and comprehensive-but-intuitive software to help the world’s biggest multinational brands publish content that people actually want in this world filled with ad noise.&nbsp;</p><p style=\"font-size: 13px;\"><strong>&nbsp;</strong></p><p style=\"font-size: 13px;\">But we are not resting on our success. We believe that modern marketing organizations will have their own operating system, just as Engineering has Jira and Sales has Salesforce. This Marketing OS will centralize where campaigns get planned and marketing teams work together. There are many big companies competing to be the winner, but we think we have the lead because of our expertise in content and the robustness of our software.</p><p style=\"font-size: 13px;\"><strong><br><br>&nbsp;</strong><strong><span style=\"text-decoration-line: underline;\">Position Overview</span></strong></p><p style=\"font-size: 13px;\">We are looking for a hands-on Senior Software Engineer to make a lasting impact on our software stack. This role will be responsible for technical design, new feature development, working with UX designers, researching and evaluating new technology, and maintaining and improving a well-tested and high quality codebase.</p><p style=\"font-size: 13px;\">You will be responsible for not only building key product features but also question the status quo and help evolve our software stack. You will also be expected to mentor and lead engineers on your squad by leading the team towards their goals and will be accountable for the team\'s outcomes.</p><p style=\"font-size: 13px;\">&nbsp;</p><p style=\"font-size: 13px;\"><span style=\"text-decoration-line: underline;\"><strong>The Stack</strong></span></p><p style=\"font-size: 13px;\">We are open to evolving our platform with newer technologies and here are some of our current tools:</p><ul style=\"font-size: 13px;\"><li>Python, Scala, JavaScript</li><li>ElasticSearch &amp; Solr</li><li>AngularJS and React</li><li>Node and Flask</li><li>MongoDB, MySQL, Redshift &amp;&nbsp;Redis</li><li>Kinesis, RabbitMQ, SQS</li><li>Ansible</li><li>AWS</li></ul><p style=\"font-size: 13px;\">&nbsp;</p><p style=\"font-size: 13px;\"><strong><u>Who You\'ll&nbsp;Work With</u></strong></p><p style=\"font-size: 13px;\">The Engineering team at NewsCred consists of some of the most considerate, compassionate and fun-loving people you’ll ever meet. We seek people who can contribute and share in the success and happiness of our team. We do this by organizing ourselves into small, autonomous teams that are self-sufficient and fully empowered to deliver a complete product. We believe in continuous deployment, which enables us to deliver incremental value to our clients on an ongoing basis.</p><p style=\"font-size: 13px;\">&nbsp;</p><p style=\"font-size: 13px;\"><span style=\"text-decoration-line: underline;\"><strong>&nbsp;What You\'ll Do</strong></span></p><ul style=\"font-size: 13px;\"><li>Lead teams towards goals and be accountable for outcomes.</li><li>Mentor junior members of the team</li><li>Work closely with product owners, designers, agile coaches and developers in a dynamic, agile environment innovating on new products and features.</li><li>Architect new systems that interface with our existing architecture.</li><li>Evangelize software development practices across teams.</li><li>Design and develop software collaboratively in a pair-programming environment.</li><li>Work in multiple stacks and have a propensity to learn new technologies.</li></ul><p style=\"font-size: 13px;\">&nbsp;</p><p style=\"font-size: 13px;\"><span style=\"text-decoration-line: underline;\"><strong>What You\'ll Need</strong></span></p><ul style=\"font-size: 13px;\"><li>4+ years of software development experience.</li><li>Eager for opportunities to mentor and teach.</li><li>Thrive in an autonomous, high energy environment.</li><li>Enjoy pairing with team members to produce innovative solutions.</li><li>Care about efficient code, beautiful algorithms, opportunistic refactoring, and iterative development.</li><li>Comfortable working with cloud architectures, tools, and processes.</li></ul><p style=\"font-size: 13px;\">&nbsp;</p><p style=\"font-size: 13px;\"><strong>Why You’ll Love Working Here</strong></p><ul style=\"font-size: 13px;\"><li>Our culture is the most important thing we offer: a place to do your best work, and a chance for your voice to be heard in a democratic environment as we shape a high-growth space</li><li>All-hands Demo Days on Wednesdays; catered lunches on Fridays</li><li>Full suite of benefits, including medical, vision, dental, 401k match, and generous parental leave</li><li>Best-in-class compensation plans, as well as company equity – everyone has a stake in our growth</li><li>An agile performance review process, to encourage ongoing transparency between managers and direct reports</li><li>Unlimited vacation days and flexible working hours</li><li>Student loan repayment program, enabling you to potentially save thousands in interest<br></li><li></li></ul>', '', 1);

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
(23, 'Sudipta', 'Ghosh', 'uadayghosh@gmail.com', '123456'),
(24, 'Riffat Bin', 'Feroz Akash', 'riffatakash@gmail', '123456'),
(25, 'abc', 'fdsfh', 'abc@gmail.com', '123456'),
(26, 'Israt', 'jahan', 'isratjahan169@gmail.com', '123456'),
(27, 'abc', 'xyz', 'abcd@gmail.com', '123456');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_organization`
--

CREATE TABLE `tbl_organization` (
  `id` bigint(20) NOT NULL,
  `name` varchar(200) NOT NULL,
  `created_date` date NOT NULL,
  `organization_type` varchar(200) NOT NULL,
  `status` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_organization`
--

INSERT INTO `tbl_organization` (`id`, `name`, `created_date`, `organization_type`, `status`) VALUES
(5, 'Jahangirnagar University', '2020-01-01', 'Education', 1);

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
(19, 'N/A', 24),
(20, 'N/A', 26);

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
(12, 'shuvro das', 'AIUB', 'Faculty', 'shouvodas@gmail.com', '01625419734', 24),
(13, 'Imran al hasan', 'aiub', 'Professor', 'imran@gmail.com', '01668888888', 26),
(14, 'hasanor karim', 'Bdbl', 'Gm', 'hasan@gmail.com', '01912222222', 26);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_slogin`
--

CREATE TABLE `tbl_slogin` (
  `login_id` int(3) NOT NULL,
  `user_name` varchar(200) NOT NULL,
  `email` varchar(300) NOT NULL,
  `password` varchar(200) NOT NULL,
  `tbl_organization_id` bigint(20) NOT NULL,
  `type` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_slogin`
--

INSERT INTO `tbl_slogin` (`login_id`, `user_name`, `email`, `password`, `tbl_organization_id`, `type`) VALUES
(2, 'Uaday', 'uadayghosh@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', 0, 'A'),
(3, 'Israt Jahan', 'israt@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', 5, 'O');

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
-- Indexes for table `tbl_job_circular`
--
ALTER TABLE `tbl_job_circular`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_login`
--
ALTER TABLE `tbl_login`
  ADD PRIMARY KEY (`login_id`);

--
-- Indexes for table `tbl_organization`
--
ALTER TABLE `tbl_organization`
  ADD PRIMARY KEY (`id`);

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
  MODIFY `user_id` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

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
  MODIFY `edu_id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT for table `tbl_experience`
--
ALTER TABLE `tbl_experience`
  MODIFY `exp_id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `tbl_job_circular`
--
ALTER TABLE `tbl_job_circular`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tbl_login`
--
ALTER TABLE `tbl_login`
  MODIFY `login_id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT for table `tbl_organization`
--
ALTER TABLE `tbl_organization`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `tbl_qualification`
--
ALTER TABLE `tbl_qualification`
  MODIFY `qua_id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `tbl_reference`
--
ALTER TABLE `tbl_reference`
  MODIFY `ref_id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `tbl_slogin`
--
ALTER TABLE `tbl_slogin`
  MODIFY `login_id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

-- phpMyAdmin SQL Dump
-- version 4.3.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jun 13, 2020 at 01:47 PM
-- Server version: 5.6.24
-- PHP Version: 5.6.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `disease`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE IF NOT EXISTS `admin` (
  `a_id` int(11) NOT NULL,
  `a_uname` text NOT NULL,
  `a_upwd` varchar(15) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`a_id`, `a_uname`, `a_upwd`) VALUES
(1, 'admin', 'password');

-- --------------------------------------------------------

--
-- Table structure for table `appointment`
--

CREATE TABLE IF NOT EXISTS `appointment` (
  `app_id` int(11) NOT NULL,
  `cl_id` int(20) NOT NULL,
  `d_id` int(20) NOT NULL,
  `date` date NOT NULL,
  `time` time(6) NOT NULL,
  `description` text NOT NULL,
  `Status` varchar(30) NOT NULL DEFAULT 'Pending'
) ENGINE=InnoDB AUTO_INCREMENT=20 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `appointment`
--

INSERT INTO `appointment` (`app_id`, `cl_id`, `d_id`, `date`, `time`, `description`, `Status`) VALUES
(1, 1, 1, '2020-03-07', '05:00:00.000000', 'To check that why the pain still exist', 'Confirmed'),
(2, 2, 1, '2020-03-15', '12:00:00.000000', 'I have a back pain', 'Cancelled'),
(3, 1, 1, '2020-03-13', '05:00:00.000000', 'tttttttttttt', 'Cancelled'),
(9, 2, 2, '2020-06-15', '10:36:00.000000', 'asasasassss', 'Confirmed'),
(11, 1, 2, '2020-06-21', '10:42:00.000000', 'aswertyui', 'Cancelled'),
(12, 3, 3, '2020-06-23', '10:30:00.000000', 'as we rews', 'Confirmed'),
(13, 3, 2, '2020-06-21', '11:12:00.000000', 'sadssd', 'Cancelled'),
(19, 2, 3, '2020-06-14', '11:45:00.000000', 'ddtgh', 'Pending');

-- --------------------------------------------------------

--
-- Table structure for table `chat`
--

CREATE TABLE IF NOT EXISTS `chat` (
  `box_id` int(15) NOT NULL,
  `c_id` int(15) NOT NULL,
  `d_id` int(15) NOT NULL,
  `smsg` text NOT NULL,
  `rmsg` text NOT NULL,
  `img` varchar(250) NOT NULL,
  `date` date NOT NULL,
  `status` text NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `chat`
--

INSERT INTO `chat` (`box_id`, `c_id`, `d_id`, `smsg`, `rmsg`, `img`, `date`, `status`) VALUES
(1, 3, 2, 'hi pls tell me the fewer tablet', 'take', '1196-diabeties.jpg', '2020-06-13', 'Replyed'),
(2, 3, 2, 'cold tablet', 'ok', '27022-weight-gain.jpeg', '2020-06-13', 'Replyed'),
(3, 3, 2, 'hwu', 'yes', '4695-blood-cnncr.jpg', '2020-06-13', 'Replied');

-- --------------------------------------------------------

--
-- Table structure for table `client`
--

CREATE TABLE IF NOT EXISTS `client` (
  `cl_id` int(20) NOT NULL,
  `name` text NOT NULL,
  `gender` varchar(150) NOT NULL,
  `adds` text NOT NULL,
  `ph_no` bigint(10) NOT NULL,
  `email` varchar(20) NOT NULL,
  `sqsn` varchar(250) NOT NULL,
  `sans` varchar(200) NOT NULL,
  `pwd` varchar(20) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `client`
--

INSERT INTO `client` (`cl_id`, `name`, `gender`, `adds`, `ph_no`, `email`, `sqsn`, `sans`, `pwd`) VALUES
(1, 'abi', 'Male', 'manglore', 8547963210, 'abi@gmail.com', '3', '1', 'Abhi1234'),
(2, 'mani', 'Male', 'manglore', 9856321470, 'mani@gmail.com', '1', 'mani', 'Mani1234'),
(3, 'farasha ahmed', 'Female', 'kankanadi manglore', 7458961230, 'farasha@gmail.com', '1', 'fara', 'farasha1');

-- --------------------------------------------------------

--
-- Table structure for table `disease`
--

CREATE TABLE IF NOT EXISTS `disease` (
  `dis_id` int(20) NOT NULL,
  `dis_name` text NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `disease`
--

INSERT INTO `disease` (`dis_id`, `dis_name`) VALUES
(1, 'Fever'),
(4, 'Corona'),
(5, 'Cancer');

-- --------------------------------------------------------

--
-- Table structure for table `doctors`
--

CREATE TABLE IF NOT EXISTS `doctors` (
  `d_id` int(11) NOT NULL,
  `d_name` text NOT NULL,
  `d_adds` text NOT NULL,
  `d_qualfn` varchar(50) NOT NULL,
  `d_splist` text NOT NULL,
  `image` varchar(100) NOT NULL,
  `d_phno` bigint(20) NOT NULL,
  `d_clnc` text NOT NULL,
  `d_clncloc` varchar(200) NOT NULL,
  `d_mail` varchar(20) NOT NULL,
  `d_pwd` varchar(15) NOT NULL,
  `sqsn` varchar(30) NOT NULL,
  `sans` text NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `doctors`
--

INSERT INTO `doctors` (`d_id`, `d_name`, `d_adds`, `d_qualfn`, `d_splist`, `image`, `d_phno`, `d_clnc`, `d_clncloc`, `d_mail`, `d_pwd`, `sqsn`, `sans`) VALUES
(1, 'Akash', 'Bcroad', 'MBBS', 'Brain Surgery', 'img_bg_6 (1).jpg', 9008930585, 'Mukundha', 'Mangalore', 'ash@gmail.com', '123', '1', 'ashu'),
(2, 'medha', 'manglore', 'mbbs', 'heart specialist', 'person3.jpg', 8574693210, 'ganesh', 'nantoor', 'medha@gmail.com', 'Medha123', '2', 'medha'),
(3, 'deeksha', 'bantwal', 'mbbs', 'kidney-specialist', '22037-20170419_204545-1.jpg', 7896541239, 'disha clinic', 'bcroad', 'deeksha@gmail.com', 'abcd1234', '1', 'deesha');

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE IF NOT EXISTS `feedback` (
  `feed_id` int(20) NOT NULL,
  `cl_id` int(20) NOT NULL,
  `d_id` int(11) NOT NULL,
  `description` text NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `feedback`
--

INSERT INTO `feedback` (`feed_id`, `cl_id`, `d_id`, `description`, `date`) VALUES
(1, 1, 1, 'Good doctor', '2020-03-12'),
(2, 1, 0, 'good doc', '2020-03-12'),
(4, 0, 2, 'appp', '2020-06-13');

-- --------------------------------------------------------

--
-- Table structure for table `medicine`
--

CREATE TABLE IF NOT EXISTS `medicine` (
  `med_id` int(20) NOT NULL,
  `name` text NOT NULL,
  `dis_id` int(20) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `medicine`
--

INSERT INTO `medicine` (`med_id`, `name`, `dis_id`) VALUES
(1, 'paracetamol-650', 1),
(4, 'Currently no Medicine available', 4);

-- --------------------------------------------------------

--
-- Table structure for table `notification`
--

CREATE TABLE IF NOT EXISTS `notification` (
  `nid` int(11) NOT NULL,
  `d_id` int(11) NOT NULL,
  `cl_id` int(11) NOT NULL,
  `notes` varchar(150) NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `notification`
--

INSERT INTO `notification` (`nid`, `d_id`, `cl_id`, `notes`, `date`) VALUES
(1, 1, 2, 'aaa', '2020-03-12'),
(2, 1, 1, 'i am not available \r\nso you can on 12-0-900 @2pm', '2020-03-12'),
(3, 2, 0, 'sorry i am no available', '2020-06-13'),
(4, 2, 1, 'sorry', '2020-06-13'),
(5, 2, 1, 'sorry', '2020-06-13'),
(6, 2, 3, 'sorry', '2020-06-13');

-- --------------------------------------------------------

--
-- Table structure for table `symptom`
--

CREATE TABLE IF NOT EXISTS `symptom` (
  `s_id` int(20) NOT NULL,
  `dis_id` int(20) NOT NULL,
  `symptoms` text NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `symptom`
--

INSERT INTO `symptom` (`s_id`, `dis_id`, `symptoms`) VALUES
(4, 1, 'Cough, High body temperature'),
(5, 4, 'Cough, Sneezing, Fever, Headache etc');

-- --------------------------------------------------------

--
-- Table structure for table `timing`
--

CREATE TABLE IF NOT EXISTS `timing` (
  `time_id` int(20) NOT NULL,
  `d_id` int(11) NOT NULL,
  `from1` varchar(12) NOT NULL,
  `to1` varchar(12) NOT NULL,
  `status` text NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `timing`
--

INSERT INTO `timing` (`time_id`, `d_id`, `from1`, `to1`, `status`) VALUES
(1, 1, '10:00', '07:00', ''),
(2, 2, '10:30', '12:30', ''),
(3, 3, '09:30', '04:30', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`a_id`);

--
-- Indexes for table `appointment`
--
ALTER TABLE `appointment`
  ADD PRIMARY KEY (`app_id`);

--
-- Indexes for table `chat`
--
ALTER TABLE `chat`
  ADD PRIMARY KEY (`box_id`);

--
-- Indexes for table `client`
--
ALTER TABLE `client`
  ADD PRIMARY KEY (`cl_id`);

--
-- Indexes for table `disease`
--
ALTER TABLE `disease`
  ADD PRIMARY KEY (`dis_id`);

--
-- Indexes for table `doctors`
--
ALTER TABLE `doctors`
  ADD PRIMARY KEY (`d_id`);

--
-- Indexes for table `feedback`
--
ALTER TABLE `feedback`
  ADD PRIMARY KEY (`feed_id`);

--
-- Indexes for table `medicine`
--
ALTER TABLE `medicine`
  ADD PRIMARY KEY (`med_id`);

--
-- Indexes for table `notification`
--
ALTER TABLE `notification`
  ADD PRIMARY KEY (`nid`);

--
-- Indexes for table `symptom`
--
ALTER TABLE `symptom`
  ADD PRIMARY KEY (`s_id`);

--
-- Indexes for table `timing`
--
ALTER TABLE `timing`
  ADD PRIMARY KEY (`time_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `a_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `appointment`
--
ALTER TABLE `appointment`
  MODIFY `app_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=20;
--
-- AUTO_INCREMENT for table `chat`
--
ALTER TABLE `chat`
  MODIFY `box_id` int(15) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `client`
--
ALTER TABLE `client`
  MODIFY `cl_id` int(20) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `disease`
--
ALTER TABLE `disease`
  MODIFY `dis_id` int(20) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `doctors`
--
ALTER TABLE `doctors`
  MODIFY `d_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `feedback`
--
ALTER TABLE `feedback`
  MODIFY `feed_id` int(20) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `medicine`
--
ALTER TABLE `medicine`
  MODIFY `med_id` int(20) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `notification`
--
ALTER TABLE `notification`
  MODIFY `nid` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `symptom`
--
ALTER TABLE `symptom`
  MODIFY `s_id` int(20) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `timing`
--
ALTER TABLE `timing`
  MODIFY `time_id` int(20) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

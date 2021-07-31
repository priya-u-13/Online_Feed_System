-- phpMyAdmin SQL Dump
-- version 4.1.4
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Apr 06, 2019 at 02:57 PM
-- Server version: 5.6.15-log
-- PHP Version: 5.4.24

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `result_ays`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE IF NOT EXISTS `admin` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user` varchar(50) NOT NULL,
  `pass` varchar(50) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `mob` varchar(15) NOT NULL,
  `experience` varchar(100) NOT NULL,
  `address` text NOT NULL,
  `gender` varchar(20) NOT NULL,
  `status` varchar(20) NOT NULL,
  `ques` varchar(100) NOT NULL,
  `ans` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `user`, `pass`, `name`, `email`, `mob`, `experience`, `address`, `gender`, `status`, `ques`, `ans`) VALUES
(1, 'gpcb2019', '1234', 'GPCB BALAGHAT', 'octalitservices@gmail.com', '8269640048', '', '', '', 'confirm', '1', 'khusi');

-- --------------------------------------------------------

--
-- Table structure for table `assign`
--

CREATE TABLE IF NOT EXISTS `assign` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `yr` varchar(50) NOT NULL,
  `sem` varchar(50) NOT NULL,
  `ady` varchar(50) NOT NULL,
  `subid` varchar(50) NOT NULL,
  `sid` varchar(50) NOT NULL,
  `enroll` varchar(50) NOT NULL,
  `mark` varchar(20) NOT NULL,
  `att` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `assign`
--

INSERT INTO `assign` (`id`, `yr`, `sem`, `ady`, `subid`, `sid`, `enroll`, `mark`, `att`) VALUES
(1, '1', '1', '2018-2019', '104', '1', '01SC18MCH1002', '12', ''),
(2, '1', '1', '2018-2019', '104', '3', '01AG18BAS1319', '12', '');

-- --------------------------------------------------------

--
-- Table structure for table `lw`
--

CREATE TABLE IF NOT EXISTS `lw` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `yr` varchar(50) NOT NULL,
  `sem` varchar(50) NOT NULL,
  `ady` varchar(50) NOT NULL,
  `subid` varchar(50) NOT NULL,
  `sid` varchar(50) NOT NULL,
  `enroll` varchar(50) NOT NULL,
  `mark` varchar(20) NOT NULL,
  `att` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `ms1`
--

CREATE TABLE IF NOT EXISTS `ms1` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `yr` varchar(50) NOT NULL,
  `sem` varchar(50) NOT NULL,
  `ady` varchar(50) NOT NULL,
  `subid` varchar(50) NOT NULL,
  `sid` varchar(50) NOT NULL,
  `enroll` varchar(50) NOT NULL,
  `mark` varchar(20) NOT NULL,
  `att` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `ms1`
--

INSERT INTO `ms1` (`id`, `yr`, `sem`, `ady`, `subid`, `sid`, `enroll`, `mark`, `att`) VALUES
(4, '1', '1', '2018-2019', '101', '3', '01AG18BAS1319', '11', 'yes'),
(3, '1', '1', '2018-2019', '101', '1', '01SC18MCH1002', '12', ''),
(5, '1', '1', '2018-2019', '104', '1', '01SC18MCH1002', '5', 'yes'),
(6, '1', '1', '2018-2019', '104', '3', '01AG18BAS1319', '7', 'yes');

-- --------------------------------------------------------

--
-- Table structure for table `ms2`
--

CREATE TABLE IF NOT EXISTS `ms2` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `yr` varchar(50) NOT NULL,
  `sem` varchar(50) NOT NULL,
  `ady` varchar(50) NOT NULL,
  `subid` varchar(50) NOT NULL,
  `sid` varchar(50) NOT NULL,
  `enroll` varchar(50) NOT NULL,
  `mark` varchar(20) NOT NULL,
  `att` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `ms2`
--

INSERT INTO `ms2` (`id`, `yr`, `sem`, `ady`, `subid`, `sid`, `enroll`, `mark`, `att`) VALUES
(1, '1', '1', '2018-2019', '103', '1', '01SC18MCH1002', '12', ''),
(2, '1', '1', '2018-2019', '103', '3', '01AG18BAS1319', '', 'yes');

-- --------------------------------------------------------

--
-- Table structure for table `sem`
--

CREATE TABLE IF NOT EXISTS `sem` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `yr` int(11) NOT NULL,
  `sem` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `sem`
--

INSERT INTO `sem` (`id`, `yr`, `sem`) VALUES
(1, 1, 1),
(2, 1, 2),
(3, 2, 3),
(4, 2, 4),
(5, 3, 5),
(6, 3, 6);

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE IF NOT EXISTS `student` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) NOT NULL,
  `user` varchar(50) NOT NULL,
  `pass` varchar(50) NOT NULL,
  `email` varchar(100) NOT NULL,
  `mno` varchar(15) NOT NULL,
  `gender` varchar(20) NOT NULL,
  `dob` date NOT NULL,
  `cat` varchar(20) NOT NULL,
  `father` varchar(100) NOT NULL,
  `fmob` varchar(15) NOT NULL,
  `mother` varchar(100) NOT NULL,
  `stype` varchar(20) NOT NULL,
  `yr` varchar(20) NOT NULL,
  `sem` varchar(20) NOT NULL,
  `ady` varchar(20) NOT NULL,
  `addr` text NOT NULL,
  `apply` date NOT NULL,
  `status` varchar(20) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`id`, `name`, `user`, `pass`, `email`, `mno`, `gender`, `dob`, `cat`, `father`, `fmob`, `mother`, `stype`, `yr`, `sem`, `ady`, `addr`, `apply`, `status`) VALUES
(1, 'TRISHNA1', '01SC18MCH1002', '1234', 'info@dtmpower.in1', '7089770071', 'female', '2019-03-11', 'Genral', 'deep1', '9575674170', 'nima1', 'Ex', '1', '1', '2018-2019', 'bgt1', '2019-03-14', 'pending'),
(2, 'AJAY', '16012C04004', '123456789', 'AJAYBU97@GMAIL.COM', '8224048617', 'male', '0000-00-00', 'OBC', 'VIRENDRA', '', '', 'Regular', '1', '1', '2018-2019', 'RAJEGAON', '2019-03-26', 'pending'),
(3, 'AYUSH', '01AG18BAS1319', '123', 'dsgdh@gmail.com', '4567878', 'male', '2019-03-30', 'OBC', 'motilal ukey', '9575674170', 'REBHARANI', 'Regular', '1', '1', '2018-2019', 'dfghjk', '2019-03-30', 'pending');

-- --------------------------------------------------------

--
-- Table structure for table `subject`
--

CREATE TABLE IF NOT EXISTS `subject` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `sname` varchar(100) NOT NULL,
  `scode` varchar(50) NOT NULL,
  `yr` varchar(10) NOT NULL,
  `sem` varchar(10) NOT NULL,
  `stype` varchar(20) NOT NULL,
  `apply` date NOT NULL,
  `status` varchar(20) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=11 ;

--
-- Dumping data for table `subject`
--

INSERT INTO `subject` (`id`, `sname`, `scode`, `yr`, `sem`, `stype`, `apply`, `status`) VALUES
(2, 'communication skill', '101', '1', '1', 'theory', '2019-03-08', 'pending'),
(4, 'physics', '102', '1', '1', 'theory', '2019-03-08', 'pending'),
(6, 'Mathematics', '103', '1', '1', 'theory', '2019-03-08', 'pending'),
(7, 'computer fundamental & its application', '104', '1', '1', 'theory', '2019-03-08', 'pending'),
(8, 'physics', '102', '1', '1', 'practical', '2019-03-08', 'pending'),
(9, 'computer fundamental & its application', '104', '1', '1', 'practical', '2019-03-08', 'pending'),
(10, 'proffesional activities(P.A)', '105', '1', '1', 'practical', '2019-03-08', 'pending');

-- --------------------------------------------------------

--
-- Table structure for table `teacher`
--

CREATE TABLE IF NOT EXISTS `teacher` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) NOT NULL,
  `user` varchar(50) NOT NULL,
  `pass` varchar(50) NOT NULL,
  `email` varchar(100) NOT NULL,
  `mno` varchar(15) NOT NULL,
  `gender` varchar(20) NOT NULL,
  `dob` date NOT NULL,
  `cat` varchar(11) NOT NULL,
  `jdate` date NOT NULL,
  `quali` varchar(200) NOT NULL,
  `exp` varchar(20) NOT NULL,
  `addr` text NOT NULL,
  `apply` date NOT NULL,
  `status` varchar(20) NOT NULL,
  `s1` varchar(50) NOT NULL,
  `s2` varchar(50) NOT NULL,
  `s3` varchar(50) NOT NULL,
  `s4` varchar(50) NOT NULL,
  `s5` varchar(50) NOT NULL,
  `photo` varchar(200) NOT NULL,
  `s6` varchar(50) NOT NULL,
  `s7` varchar(50) NOT NULL,
  `s8` varchar(50) NOT NULL,
  `dpt` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `teacher`
--

INSERT INTO `teacher` (`id`, `name`, `user`, `pass`, `email`, `mno`, `gender`, `dob`, `cat`, `jdate`, `quali`, `exp`, `addr`, `apply`, `status`, `s1`, `s2`, `s3`, `s4`, `s5`, `photo`, `s6`, `s7`, `s8`, `dpt`) VALUES
(2, 'RAKESH PATLE', 'RP137', '123456', 'rakeshpatle1998@gmail.com', '7089770072', 'Male', '1998-03-13', 'OBC', '2016-03-06', 'poly', '1', 'BGT', '2019-03-06', 'pending', '101', '102', '103', '104', '102', '', '104', '105', '', ''),
(3, 'SARAD DAHATE', 'T05', '1234', 'info@dtmpower.in', '7089770072', 'Male', '2019-03-07', 'OBC', '2019-03-07', 'poly', '2', 'bgt', '2019-03-31', 'pending', '', '', '', '', '', 'T05prakhar sir passport photos.jpg', '', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `tw`
--

CREATE TABLE IF NOT EXISTS `tw` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `yr` varchar(50) NOT NULL,
  `sem` varchar(50) NOT NULL,
  `ady` varchar(50) NOT NULL,
  `subid` varchar(50) NOT NULL,
  `sid` varchar(50) NOT NULL,
  `enroll` varchar(50) NOT NULL,
  `mark` varchar(20) NOT NULL,
  `att` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `yr`
--

CREATE TABLE IF NOT EXISTS `yr` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `yr` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `yr`
--

INSERT INTO `yr` (`id`, `yr`) VALUES
(1, 1),
(2, 2),
(3, 3);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

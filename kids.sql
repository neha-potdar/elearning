-- phpMyAdmin SQL Dump
-- version 4.7.9
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Oct 04, 2021 at 05:36 AM
-- Server version: 5.7.21
-- PHP Version: 5.6.35

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `kids`
--

-- --------------------------------------------------------

--
-- Table structure for table `all_test`
--

DROP TABLE IF EXISTS `all_test`;
CREATE TABLE IF NOT EXISTS `all_test` (
  `num_id` int(10) NOT NULL AUTO_INCREMENT,
  `al_id` int(10) NOT NULL AUTO_INCREMENT,
  `ani_id` int(10) NOT NULL AUTO_INCREMENT,
  `col_id` int(10) NOT NULL AUTO_INCREMENT ,
  `sha_id` int(10) NOT NULL AUTO_INCREMENT,
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `all_test`
--

INSERT INTO `all_test` (`num_id`, `al_id`, `ani_id`, `col_id`, `sha_id`) VALUES
(1, 1, 1, 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `alpha_test`
--

DROP TABLE IF EXISTS `alpha_test`;
CREATE TABLE IF NOT EXISTS `alpha_test` (
  `al_id` int(10) NOT NULL AUTO_INCREMENT,
  `name` varchar(20) NOT NULL,
  `marks` int(20) NOT NULL,
  PRIMARY KEY (`al_id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `alpha_test`
--

INSERT INTO `alpha_test` (`al_id`, `name`, `marks`) VALUES
(1, 'swapnil', 18),
(2, 'vishal', 12);

-- --------------------------------------------------------

--
-- Table structure for table `ani_test`
--

DROP TABLE IF EXISTS `ani_test`;
CREATE TABLE IF NOT EXISTS `ani_test` (
  `ani_id` int(10) NOT NULL AUTO_INCREMENT,
  `name` varchar(20) NOT NULL,
  `marks` int(10) NOT NULL,
  PRIMARY KEY (`ani_id`)
) ENGINE=InnoDB AUTO_INCREMENT=102 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ani_test`
--

INSERT INTO `ani_test` (`ani_id`, `name`, `marks`) VALUES
(1, 'swapnil', 20),
(2, 'vishal', 16),
(101, 'aishwarya', 20);

-- --------------------------------------------------------

--
-- Table structure for table `assign1`
--

DROP TABLE IF EXISTS `assign1`;
CREATE TABLE IF NOT EXISTS `assign1` (
  `as_id` int(10) NOT NULL AUTO_INCREMENT,
  `name` varchar(20) NOT NULL,
  `question1` text NOT NULL,
  `question2` text NOT NULL,
  `question3` text NOT NULL,
  `question4` text NOT NULL,
  `question5` text NOT NULL,
  PRIMARY KEY (`as_id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `assign1`
--

INSERT INTO `assign1` (`as_id`, `name`, `question1`, `question2`, `question3`, `question4`, `question5`) VALUES
(1, 'swapnil', 'one\r\ntwo \r\nthree\r\nfour\r\nfive\r\nsix\r\nseven\r\neight\r\nnine\r\nten', 'one \r\ntwo\r\nthree\r\nfour\r\nfive', 'Eight', '2 4 6 10', '1\r\n2\r\n3\r\n4\r\n5\r\n6\r\n7\r\n8\r\n9\r\n10\r\n'),
(2, 'zahid', 'one\r\ntwo', 'one\r\ntwo\r\nthree', 'Eight', '2 4 6 10', '1\r\n2\r\n3\r\n4\r\n5\r\n6\r\n7\r\n8\r\n9\r\n70'),
(3, 'zahid', 'one', 'one\r\ntwo\r\nthree\r\nfour\r\nfive', 'Eight', '2 4 6 10', '1\r\n2\r\n3\r\n4\r\n5\r\n6\r\n7\r\n8\r\n9\r\n10'),
(4, 'vishal', 'one\r\ntwo\r\nthree\r\nfour\r\nfive\r\nsix\r\nseven\r\neight\r\nnine\r\nten', 'one\r\ntwo\r\nthree\r\nfour\r\nfive', 'Eight', '2 4 6 10', '1\r\n2\r\n3\r\n4\r\n5\r\n6\r\n7\r\n8\r\n9\r\n10'),
(5, 'amruta', 'one\r\ntwo', 'one \r\ntwo', 'Eight', '2 4 6 10', '1'),
(6, '', '', '', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `assign2`
--

DROP TABLE IF EXISTS `assign2`;
CREATE TABLE IF NOT EXISTS `assign2` (
  `as_id` int(10) NOT NULL AUTO_INCREMENT,
  `name` varchar(20) NOT NULL,
  `question1` text NOT NULL,
  `question2` text NOT NULL,
  `question3` text NOT NULL,
  `question4` text NOT NULL,
  `question5` text NOT NULL,
  PRIMARY KEY (`as_id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `assign2`
--

INSERT INTO `assign2` (`as_id`, `name`, `question1`, `question2`, `question3`, `question4`, `question5`) VALUES
(1, 'swapnil', 'CAT DOG', 'lion\r\ntiger\r\nelephant\r\nfox\r\n', 'lion lion lion', '', ''),
(2, 'vishal', 'cow dog', 'tiger\r\nlion\r\nyaak', 'lion lion', 'GOAT', 'cow\r\ncat\r\ndog');

-- --------------------------------------------------------

--
-- Table structure for table `assign3`
--

DROP TABLE IF EXISTS `assign3`;
CREATE TABLE IF NOT EXISTS `assign3` (
  `as_id` int(10) NOT NULL AUTO_INCREMENT,
  `name` varchar(20) NOT NULL,
  `question1` text NOT NULL,
  `question2` text NOT NULL,
  `question3` text NOT NULL,
  `question4` text NOT NULL,
  `question5` text NOT NULL,
  PRIMARY KEY (`as_id`)
) ENGINE=MyISAM AUTO_INCREMENT=13 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `assign3`
--

INSERT INTO `assign3` (`as_id`, `name`, `question1`, `question2`, `question3`, `question4`, `question5`) VALUES
(12, 'vishal', 'a b c d  e f', 'a', 'c', 'n', 'a\r\nb\r\nc\r\nd\r\ne\r\nf'),
(11, 'swapnil', 'A B C D E F', 'a', 'c', 'n', 'a b c d \r\ne f g h\r\nI j k l\r\nm n o p\r\nq r s t\r\nu v w x\r\ny z');

-- --------------------------------------------------------

--
-- Table structure for table `assign4`
--

DROP TABLE IF EXISTS `assign4`;
CREATE TABLE IF NOT EXISTS `assign4` (
  `as_id` int(10) NOT NULL AUTO_INCREMENT,
  `name` varchar(20) NOT NULL,
  `question1` text NOT NULL,
  `question2` text NOT NULL,
  `question3` text NOT NULL,
  `question4` text NOT NULL,
  `question5` text NOT NULL,
  PRIMARY KEY (`as_id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `assign4`
--

INSERT INTO `assign4` (`as_id`, `name`, `question1`, `question2`, `question3`, `question4`, `question5`) VALUES
(1, 'swapnil', '0', '', '', '', ''),
(2, 'vishal', '0', 'triangle\r\ncircle\r\nsquare', 'hexagoan', 'rectangle', 'SQAURE');

-- --------------------------------------------------------

--
-- Table structure for table `assign5`
--

DROP TABLE IF EXISTS `assign5`;
CREATE TABLE IF NOT EXISTS `assign5` (
  `as_id` int(10) NOT NULL AUTO_INCREMENT,
  `name` varchar(20) NOT NULL,
  `question1` text NOT NULL,
  `question2` text NOT NULL,
  `question3` text NOT NULL,
  `question4` text NOT NULL,
  `question5` text NOT NULL,
  PRIMARY KEY (`as_id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `assign5`
--

INSERT INTO `assign5` (`as_id`, `name`, `question1`, `question2`, `question3`, `question4`, `question5`) VALUES
(1, 'swapnil', 'RED', 'blue\r\ngreen\r\nred\r\nyellow\r\nblack', 'GREEN', 'WHITE', '7\r\nred\r\npurple\r\norange\r\ngreen\r\n white\r\nblue\r\nyellow'),
(2, 'vishal', 'red', 'blue\r\nred\r\nyellow\r\ngreen', 'GREEN', 'WHITE', '7');

-- --------------------------------------------------------

--
-- Table structure for table `assignment`
--

DROP TABLE IF EXISTS `assignment`;
CREATE TABLE IF NOT EXISTS `assignment` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `user` varchar(500) NOT NULL,
  `assignment1` int(25) NOT NULL,
  `assignment2` int(25) NOT NULL,
  `assignment3` int(25) NOT NULL,
  `assignment4` int(25) NOT NULL,
  `assignment5` int(25) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=29 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `assignment`
--

INSERT INTO `assignment` (`id`, `user`, `assignment1`, `assignment2`, `assignment3`, `assignment4`, `assignment5`) VALUES
(21, 'neha', 4, 7, 8, 7, 4),
(22, 'Madhav Goriwale', 8, 9, 8, 9, 9),
(23, 'swapnil', 8, 0, 0, 0, 0),
(24, 'swapnil', 9, 7, 8, 2, 9),
(25, 'swapnil', 5, 5, 3, 8, 4),
(26, 'vishal', 9, 8, 4, 7, 9),
(27, 'vishal', 5, 7, 6, 8, 8),
(28, 'amruta', 8, 2, 1, 3, 2);

-- --------------------------------------------------------

--
-- Table structure for table `col_test`
--

DROP TABLE IF EXISTS `col_test`;
CREATE TABLE IF NOT EXISTS `col_test` (
  `col_id` int(10) NOT NULL AUTO_INCREMENT,
  `name` varchar(20) NOT NULL,
  `marks` int(10) NOT NULL,
  PRIMARY KEY (`col_id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `col_test`
--

INSERT INTO `col_test` (`col_id`, `name`, `marks`) VALUES
(1, 'swapnil', 20),
(2, 'vishal', 16),
(3, 'as', 12),
(4, 'as', 12);

-- --------------------------------------------------------

--
-- Table structure for table `num_test`
--

DROP TABLE IF EXISTS `num_test`;
CREATE TABLE IF NOT EXISTS `num_test` (
  `num_id` int(10) NOT NULL AUTO_INCREMENT,
  `name` varchar(20) NOT NULL,
  `marks` int(30) NOT NULL,
  PRIMARY KEY (`num_id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `num_test`
--

INSERT INTO `num_test` (`num_id`, `name`, `marks`) VALUES
(1, 'swapnil', 20),
(2, 'zahid', 16),
(3, 'vishal', 14),
(4, 'amruta', 18);

-- --------------------------------------------------------

--
-- Table structure for table `reg`
--

DROP TABLE IF EXISTS `reg`;
CREATE TABLE IF NOT EXISTS `reg` (
  `ID` int(10) NOT NULL AUTO_INCREMENT,
  `First_name` varchar(20) NOT NULL,
  `Middle_name` varchar(20) NOT NULL,
  `Last_name` varchar(20) NOT NULL,
  `Address` varchar(50) NOT NULL,
  `Email` varchar(30) NOT NULL,
  `Mobile_no` int(10) NOT NULL,
  `DOB` date NOT NULL,
  `Gender` varchar(20) NOT NULL,
  `Username` varchar(20) NOT NULL,
  `Password` varchar(20) NOT NULL,
  `Confirm_Password` varchar(20) NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=MyISAM AUTO_INCREMENT=10 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `reg`
--

INSERT INTO `reg` (`ID`, `First_name`, `Middle_name`, `Last_name`, `Address`, `Email`, `Mobile_no`, `DOB`, `Gender`, `Username`, `Password`, `Confirm_Password`) VALUES
(1, 'Aman', 'Ganesh', 'Shinde', 'Aundh', 'aman21@gmail.com', 741852963, '2020-09-21', 'male', 'aman21', 'aman1999', 'aman1999'),
(3, 'Aishwarya', 'Madhav', 'Goriwale', 'Pune', 'aish27@gmail.com', 741852963, '1999-09-27', 'Female', 'aish27', 'aishu1999', 'aishu1999'),
(2, 'Komal', 'sagar', 'more', 'chinchawad', 'komal23@gmail.com', 14758263, '1997-03-25', 'Female', 'komal25', 'komal21', 'komal21');

-- --------------------------------------------------------

--
-- Table structure for table `sha_test`
--

DROP TABLE IF EXISTS `sha_test`;
CREATE TABLE IF NOT EXISTS `sha_test` (
  `sha_id` int(10) NOT NULL AUTO_INCREMENT,
  `name` varchar(20) NOT NULL,
  `marks` int(10) NOT NULL,
  PRIMARY KEY (`sha_id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sha_test`
--

INSERT INTO `sha_test` (`sha_id`, `name`, `marks`) VALUES
(1, 'swapnil', 18),
(2, 'vishal', 14);

-- --------------------------------------------------------

--
-- Table structure for table `user_info`
--

DROP TABLE IF EXISTS `user_info`;
CREATE TABLE IF NOT EXISTS `user_info` (
  `ID` int(10) NOT NULL AUTO_INCREMENT,
  `Name` varchar(50) NOT NULL,
  `Address` varchar(30) NOT NULL,
  `E-mail` varchar(30) NOT NULL,
  `Mobile_no` int(10) NOT NULL,
  `DOB` date NOT NULL,
  `Gender` varchar(10) NOT NULL,
  `Username` varchar(10) NOT NULL,
  `Password` varchar(10) NOT NULL,
  `C_password` varchar(10) NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB AUTO_INCREMENT=20 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_info`
--

INSERT INTO `user_info` (`ID`, `Name`, `Address`, `E-mail`, `Mobile_no`, `DOB`, `Gender`, `Username`, `Password`, `C_password`) VALUES
(1, 'Aman Shinde', 'pune', 'aman21@gmail.com', 985632152, '1997-03-25', 'Male', 'aman21', 'aman1999', 'aman1999'),
(2, 'aa', 'aa', 'aish@gmail.com', 956133271, '1999-09-27', 'Female', 'aaa', 'aaa', 'aaa'),
(3, 'Swapnil', 'pune', 'swap123@gmail.com', 85201452, '1996-02-27', 'Male', 'swap12', 'swap27', 'swap27'),
(4, 'Simran Singh', 'Dehu', 'simran01@gmail.com', 965874123, '1997-03-25', 'Female', 'simran12', 'simran12', 'simran12'),
(5, 'Sahil Dange', 'Sangvi', 'sahile123@gmail.com', 852074635, '1998-07-17', 'Male', 'sahil123', 'sahil', 'sahil'),
(6, 'Asha Yadav', 'chinchawad', 'asha123@gmail.com', 985632152, '2020-09-21', 'Female', 'asha12', 'asha12', 'asha12'),
(7, 'qqq', 'qqq', 'qqq@gmail.com', 985019261, '1998-01-11', 'Female', 'qqq', 'qqq', 'qqq'),
(8, 'qqq', 'qqq', 'qqq@gmail.com', 985019261, '1998-01-11', 'Female', 'qqq', 'qqq', 'qqq'),
(9, 'Akhil', 'aundh', 'akhil@gmail.com', 984512456, '1998-01-11', 'Male', 'akhil', 'akhil', 'akhil'),
(10, 'Kavita', 'Hingoli', 'kavita@gmail.com', 965874123, '1997-03-25', 'Female', 'kavita12', 'kavita', 'kavita'),
(11, 'aa', 'sss', 'aaaaaaaaaaaa@gmail.com', 1245851515, '1965-03-25', 'Female', 'asa', 'asa', 'asa'),
(12, 'SS', 'SS', 'ss@gmail.com', 11531224, '1999-02-11', 'Female', 'assa', 'assa', 'assa'),
(13, 'qq', 'qq', 'qqq@gmail.com', 1452365, '2000-02-12', 'Male', 'qq', 'qqq', 'qqq'),
(14, 'Zahid', 'Kothrud', 'zahid34@gmail.com', 741258963, '1996-06-29', 'Male', 'zahid123', 'zahid123', 'zahid123'),
(15, 'Vishal', 'Pune', 'vishal123@gmail.com', 95876232, '1996-02-27', 'Male', 'vishal123', 'vishal123', 'vishal123'),
(16, 'kishor', 'baner', 'kishor123@gmail.com', 985476210, '1997-09-24', 'Male', 'kishor123', 'kishor123', 'kishor123'),
(17, 'Amruta Pawar', 'pune', 'amruta22@gmail.com', 702004578, '1996-04-15', 'Female', 'amruta123', 'amruta123', 'amruta123'),
(18, 'Ganesh', 'pune', 'ganesh123@gmail.com', 741258963, '1998-01-11', 'Male', 'ganesh123', 'ganesh123', 'ganesh123'),
(19, 'Mariya Desuza', 'Goa', 'mariya@gmail.com', 785412365, '1998-03-26', 'Female', 'mariya123', 'mariya123', 'mariya123');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

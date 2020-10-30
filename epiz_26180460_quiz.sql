-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: sql202.epizy.com
-- Generation Time: Aug 27, 2020 at 11:21 PM
-- Server version: 5.6.48-88.0
-- PHP Version: 7.2.22

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `epiz_26180460_quiz`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(100) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(500) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `username`, `password`) VALUES
(1, 'youaremine', 'youaremine@123');

-- --------------------------------------------------------

--
-- Table structure for table `answer`
--

CREATE TABLE `answer` (
  `id` int(100) NOT NULL,
  `qid` text NOT NULL,
  `ansid` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `answer`
--

INSERT INTO `answer` (`id`, `qid`, `ansid`) VALUES
(1, '5f25692ecab6c', '5f25692ecb175'),
(2, '5f25692ecb757', '5f25692ecb92b'),
(3, '5f25692ecbea3', '5f25692ecc06b'),
(4, '5f25692ecc481', '5f25692ecc54c'),
(5, '5f25692ecc95e', '5f25692eccb3e'),
(6, '5f25692ecd032', '5f25692ecd151'),
(7, '5f25692ecd4f3', '5f25692ecd5f7'),
(8, '5f25692ecdb63', '5f25692ecdc4b'),
(9, '5f25692ece46a', '5f25692ece53a'),
(10, '5f25692ecf6ca', '5f25692ecf7b4'),
(11, '5f25836ac09c6', '5f25836ac0d27'),
(12, '5f25ad022f97f', '5f25ad023016b'),
(13, '5f25ad0230893', '5f25ad0230980'),
(14, '5f25ad0230d20', '5f25ad0230df9'),
(15, '5f25ad023119d', '5f25ad0231261'),
(16, '5f25ad0231671', '5f25ad023173c'),
(17, '5f25ad0231af7', '5f25ad0231bd0'),
(18, '5f25ad0231f8d', '5f25ad023207b'),
(19, '5f25ad023243b', '5f25ad0232547'),
(20, '5f25ad0232920', '5f25ad02329f3'),
(21, '5f25ad0232dd2', '5f25ad0232ea8');

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE `feedback` (
  `id` text NOT NULL,
  `name` varchar(50) NOT NULL,
  `username` varchar(50) NOT NULL,
  `subject` varchar(500) NOT NULL,
  `feedback` varchar(500) NOT NULL,
  `date` date NOT NULL,
  `time` varchar(50) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `history`
--

CREATE TABLE `history` (
  `id` int(100) NOT NULL,
  `username` varchar(50) NOT NULL,
  `eid` text NOT NULL,
  `score` int(11) NOT NULL,
  `level` int(11) NOT NULL,
  `correct` int(11) NOT NULL,
  `wrong` int(11) NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `timestamp` bigint(50) NOT NULL,
  `status` varchar(40) NOT NULL,
  `score_updated` varchar(10) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `history`
--

INSERT INTO `history` (`id`, `username`, `eid`, `score`, `level`, `correct`, `wrong`, `date`, `timestamp`, `status`, `score_updated`) VALUES
(80, 'lotusbiswas', '5f2566928a81c', 3, 2, 3, 0, '2020-08-01 13:12:32', 1596287314, 'finished', 'true');

-- --------------------------------------------------------

--
-- Table structure for table `options`
--

CREATE TABLE `options` (
  `id` int(100) NOT NULL,
  `qid` varchar(50) NOT NULL,
  `option` varchar(5000) NOT NULL,
  `optionid` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `options`
--

INSERT INTO `options` (`id`, `qid`, `option`, `optionid`) VALUES
(73, '5f25692ecab6c', '-128 to 127', '5f25692ecb173'),
(74, '5f25692ecab6c', '-32768 to 32767', '5f25692ecb175'),
(75, '5f25692ecab6c', ' -2147483648 to 2147483647', '5f25692ecb176'),
(76, '5f25692ecab6c', 'None of the mentioned', '5f25692ecb177'),
(77, '5f25692ecb757', ' 1 and 2', '5f25692ecb928'),
(78, '5f25692ecb757', '2 and 3', '5f25692ecb929'),
(79, '5f25692ecb757', '3 and 4', '5f25692ecb92a'),
(80, '5f25692ecb757', 'All statements are correct', '5f25692ecb92b'),
(81, '5f25692ecbea3', '-128 to 127', '5f25692ecc06b'),
(82, '5f25692ecbea3', '-32768 to 32767', '5f25692ecc06c'),
(83, '5f25692ecbea3', ' -2147483648 to 2147483647', '5f25692ecc06d'),
(84, '5f25692ecbea3', 'None of the mentioned', '5f25692ecc06e'),
(85, '5f25692ecc481', 'int', '5f25692ecc54c'),
(86, '5f25692ecc481', 'long', '5f25692ecc54f'),
(87, '5f25692ecc481', 'byte', '5f25692ecc550'),
(88, '5f25692ecc481', 'float', '5f25692ecc551'),
(89, '5f25692ecc95e', '-1.7e + 308', '5f25692eccb3c'),
(90, '5f25692ecc95e', '-3.4e + 038', '5f25692eccb3e'),
(91, '5f25692ecc95e', '+1.7e + 308', '5f25692eccb3f'),
(92, '5f25692ecc95e', '-3.4e + 050', '5f25692eccb40'),
(93, '5f25692ecd032', 'int', '5f25692ecd14e'),
(94, '5f25692ecd032', 'float', '5f25692ecd150'),
(95, '5f25692ecd032', 'double', '5f25692ecd151'),
(96, '5f25692ecd032', 'long', '5f25692ecd152'),
(97, '5f25692ecd4f3', '16.34', '5f25692ecd5f5'),
(98, '5f25692ecd4f3', '16.566666644', '5f25692ecd5f6'),
(99, '5f25692ecd4f3', '16.46666666666667', '5f25692ecd5f7'),
(100, '5f25692ecd4f3', '16.46666666666666', '5f25692ecd5f8'),
(101, '5f25692ecdb63', 'Infinity', '5f25692ecdc47'),
(102, '5f25692ecdb63', '0.0', '5f25692ecdc49'),
(103, '5f25692ecdb63', 'NaN', '5f25692ecdc4a'),
(104, '5f25692ecdb63', 'all of the mentioned', '5f25692ecdc4b'),
(105, '5f25692ece46a', '25', '5f25692ece537'),
(106, '5f25692ece46a', '24', '5f25692ece539'),
(107, '5f25692ece46a', '32', '5f25692ece53a'),
(108, '5f25692ece46a', '33', '5f25692ece53b'),
(109, '5f25692ecf6ca', '301.5656', '5f25692ecf7b4'),
(110, '5f25692ecf6ca', '301', '5f25692ecf7b5'),
(111, '5f25692ecf6ca', '301.56', '5f25692ecf7b6'),
(112, '5f25692ecf6ca', '301.56560000', '5f25692ecf7b7'),
(113, '5f25836ac09c6', 'Lotus Biswas', '5f25836ac0d27'),
(114, '5f25836ac09c6', 'Sarat Biswas', '5f25836ac0d29'),
(115, '5f25836ac09c6', 'Lovely Biswas', '5f25836ac0d2a'),
(116, '5f25836ac09c6', 'Shuily Biswas', '5f25836ac0d2b'),
(117, '5f25ad022f97f', '0x99fffL', '5f25ad023016b'),
(118, '5f25ad022f97f', 'ABCDEFG', '5f25ad023016e'),
(119, '5f25ad022f97f', '0x99fffa', '5f25ad023016f'),
(120, '5f25ad022f97f', '99671246', '5f25ad0230170'),
(121, '5f25ad0230893', 'Integer', '5f25ad023097b'),
(122, '5f25ad0230893', 'Boolean', '5f25ad023097e'),
(123, '5f25ad0230893', 'Character', '5f25ad023097f'),
(124, '5f25ad0230893', ' Integer or Boolean', '5f25ad0230980'),
(125, '5f25ad0230d20', 'L', '5f25ad0230df5'),
(126, '5f25ad0230d20', 'I', '5f25ad0230df7'),
(127, '5f25ad0230d20', 'D', '5f25ad0230df8'),
(128, '5f25ad0230d20', 'L and I', '5f25ad0230df9'),
(129, '5f25ad023119d', 'integer', '5f25ad023125e'),
(130, '5f25ad023119d', 'float', '5f25ad023125f'),
(131, '5f25ad023119d', 'boolean', '5f25ad0231260'),
(132, '5f25ad023119d', 'all of the mentioned', '5f25ad0231261'),
(133, '5f25ad0231671', 'identifier', '5f25ad023173a'),
(134, '5f25ad0231671', 'keyword', '5f25ad023173c'),
(135, '5f25ad0231671', 'identifier & keyword', '5f25ad023173d'),
(136, '5f25ad0231671', 'none of the mentioned', '5f25ad023173e'),
(137, '5f25ad0231af7', '38', '5f25ad0231bce'),
(138, '5f25ad0231af7', '39', '5f25ad0231bcf'),
(139, '5f25ad0231af7', '40', '5f25ad0231bd0'),
(140, '5f25ad0231af7', '41', '5f25ad0231bd1'),
(141, '5f25ad0231f8d', '0 2 4 6 8', '5f25ad0232078'),
(142, '5f25ad0231f8d', '1 2 3 4 5', '5f25ad023207b'),
(143, '5f25ad0231f8d', '0 1 2 3 4 5 6 7 8 9', '5f25ad023207c'),
(144, '5f25ad0231f8d', '1 2 3 4 5 6 7 8 9 10', '5f25ad023207d'),
(145, '5f25ad023243b', '5 6 5 6', '5f25ad0232543'),
(146, '5f25ad023243b', '5 6 5', '5f25ad0232545'),
(147, '5f25ad023243b', 'Runtime error', '5f25ad0232546'),
(148, '5f25ad023243b', 'Compilation error', '5f25ad0232547'),
(149, '5f25ad0232920', 'â€œHello Worldâ€', '5f25ad02329ef'),
(150, '5f25ad0232920', 'â€œHello\\nWorldâ€', '5f25ad02329f1'),
(151, '5f25ad0232920', 'â€œ\\â€Hello World\\â€â€', '5f25ad02329f2'),
(152, '5f25ad0232920', '\' Topper Skills \' ', '5f25ad02329f3'),
(153, '5f25ad0232dd2', '5.0', '5f25ad0232ea8'),
(154, '5f25ad0232dd2', '25.0', '5f25ad0232ea9'),
(155, '5f25ad0232dd2', '7.0', '5f25ad0232eaa'),
(156, '5f25ad0232dd2', ' Compilation Error', '5f25ad0232eab');

-- --------------------------------------------------------

--
-- Table structure for table `questions`
--

CREATE TABLE `questions` (
  `id` int(100) NOT NULL,
  `eid` text NOT NULL,
  `qid` text NOT NULL,
  `qns` text NOT NULL,
  `choice` int(10) NOT NULL,
  `sn` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `questions`
--

INSERT INTO `questions` (`id`, `eid`, `qid`, `qns`, `choice`, `sn`) VALUES
(19, '5f2566928a81c', '5f25692ecab6c', 'What is the range of short data type in Java?', 4, 1),
(20, '5f2566928a81c', '5f25692ecb757', 'Which of the following are legal lines of Java code?\r\n\r\n1. int w = (int)888.8;\r\n2. byte x = (byte)100L;\r\n3. long y = (byte)100;\r\n4. byte z = (byte)100L;', 4, 2),
(21, '5f2566928a81c', '5f25692ecbea3', 'What is the range of byte data type in Java?', 4, 3),
(22, '5f2566928a81c', '5f25692ecc481', 'An expression involving byte, int, and literal numbers is promoted to which of these?', 4, 4),
(23, '5f2566928a81c', '5f25692ecc95e', 'Which of these literals can be contained in float data type variable?', 4, 5),
(24, '5f2566928a81c', '5f25692ecd032', 'Which data type value is returned by all transcendental math functions?', 4, 6),
(25, '5f2566928a81c', '5f25692ecd4f3', 'What will be the output of the following Java code?\r\n\r\n    class average {\r\n        public static void main(String args[])\r\n        {\r\n            double num[] = {5.5, 10.1, 11, 12.8, 56.9, 2.5};\r\n            double result;\r\n            result = 0;\r\n            for (int i = 0; i < 6; ++i) \r\n                result = result + num[i];\r\n	    System.out.print(result/6);\r\n \r\n        } \r\n    }', 4, 7),
(26, '5f2566928a81c', '5f25692ecdb63', 'What will be the output of the following Java statement?\r\n\r\nclass output {\r\n        public static void main(String args[]) \r\n        {\r\n            double a, b,c;\r\n            a = 3.0/0;\r\n            b = 0/4.0;\r\n            c=0/0.0;\r\n \r\n	    System.out.println(a);\r\n            System.out.println(b);\r\n            System.out.println(c);\r\n        } \r\n    }', 4, 8),
(27, '5f2566928a81c', '5f25692ece46a', 'What will be the output of the following Java code?\r\n\r\n    class increment {\r\n        public static void main(String args[]) \r\n        {        \r\n             int g = 3;\r\n             System.out.print(++g * 8);\r\n        } \r\n    }', 4, 9),
(28, '5f2566928a81c', '5f25692ecf6ca', 'What will be the output of the following Java code?\r\n\r\n    class area {\r\n        public static void main(String args[]) \r\n        {    \r\n             double r, pi, a;\r\n             r = 9.8;\r\n             pi = 3.14;\r\n             a = pi * r * r;\r\n             System.out.println(a);\r\n        } \r\n    }', 4, 10),
(29, '5f258358dc6c1', '5f25836ac09c6', 'What is your name ?', 4, 1),
(30, '5f25a9242c4f7', '5f25ad022f97f', 'Which of these is long data type literal?', 4, 1),
(31, '5f25a9242c4f7', '5f25ad0230893', 'Which of these can be returned by the operator &?', 4, 2),
(32, '5f25a9242c4f7', '5f25ad0230d20', 'Literals in java must be appended by which of these?', 4, 3),
(33, '5f25a9242c4f7', '5f25ad023119d', 'Literal can be of which of these data types?', 4, 4),
(34, '5f25a9242c4f7', '5f25ad0231671', 'Which of these can not be used for a variable name in Java?', 4, 5),
(35, '5f25a9242c4f7', '5f25ad0231af7', 'What will be the output of the following Java program?\r\n\r\n    class evaluate \r\n    {\r\n        public static void main(String args[]) \r\n        {\r\n            int a[] = {1,2,3,4,5};\r\n	    int d[] = a;\r\n	    int sum = 0;\r\n	    for (int j = 0; j < 3; ++j)\r\n                sum += (a[ j ] * d[ j + 1 ]) + (a[ j + 1 ] * d[ j ]);\r\n	    System.out.println(sum);\r\n        } \r\n    }', 4, 6),
(36, '5f25a9242c4f7', '5f25ad0231f8d', 'What will be the output of the following Java program?\r\n\r\n    class array_output \r\n    {\r\n        public static void main(String args[]) \r\n        {\r\n       	    int array_variable [] = new int[10];\r\n	    for (int i = 0; i < 10; ++i) {\r\n                array_variable[ i ] = i/2;\r\n                array_variable[ i ]++;\r\n                System.out.print(array_variable[ i ] + \" \");\r\n                i++;\r\n            }\r\n \r\n        } \r\n    }', 4, 7),
(37, '5f25a9242c4f7', '5f25ad023243b', 'What will be the output of the following Java program?\r\n\r\n    class variable_scope \r\n    {\r\n        public static void main(String args[]) \r\n        {\r\n            int x;\r\n            x = 5;\r\n            {\r\n	        int y = 6;\r\n	        System.out.print(x + \" \" + y);\r\n            }\r\n            System.out.println(x + \" \" + y);\r\n        } \r\n    }', 4, 8),
(38, '5f25a9242c4f7', '5f25ad0232920', 'Which of these is an incorrect string literal?\r\n\r\n', 4, 9),
(39, '5f25a9242c4f7', '5f25ad0232dd2', 'What will be the output of the following Java program?\r\n\r\n    class dynamic_initialization \r\n    {\r\n        public static void main(String args[]) \r\n        {\r\n            double a, b;\r\n            a = 3.0;\r\n            b = 4.0;\r\n	    double c = Math.sqrt(a * a + b * b);\r\n	    System.out.println(c);\r\n        } \r\n    }', 4, 10);

-- --------------------------------------------------------

--
-- Table structure for table `quiz`
--

CREATE TABLE `quiz` (
  `id` int(100) NOT NULL,
  `eid` text NOT NULL,
  `title` varchar(100) NOT NULL,
  `practice_op` int(5) NOT NULL,
  `correct` int(11) NOT NULL,
  `wrong` int(11) NOT NULL,
  `total` int(11) NOT NULL,
  `time` bigint(20) NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `status` varchar(10) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `quiz`
--

INSERT INTO `quiz` (`id`, `eid`, `title`, `practice_op`, `correct`, `wrong`, `total`, `time`, `date`, `status`) VALUES
(1, '5f2566928a81c', 'Java â€“ Integer And Floating Data Types', 1, 1, 0, 10, 3, '2020-08-01 13:09:00', 'enabled'),
(3, '5f25a9242c4f7', 'Java â€“ Literals & Variables', 1, 1, 0, 10, 3, '2020-08-01 17:58:43', 'enabled');

-- --------------------------------------------------------

--
-- Table structure for table `quiz_challenge_comp`
--

CREATE TABLE `quiz_challenge_comp` (
  `id` int(200) NOT NULL,
  `name` varchar(200) NOT NULL,
  `image_link` varchar(8000) NOT NULL,
  `quiz_desc` varchar(8000) NOT NULL,
  `date_comp` varchar(200) NOT NULL,
  `time_quiz` varchar(200) NOT NULL,
  `difficulty` varchar(200) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `quiz_challenge_comp`
--

INSERT INTO `quiz_challenge_comp` (`id`, `name`, `image_link`, `quiz_desc`, `date_comp`, `time_quiz`, `difficulty`) VALUES
(2, 'CORE JAVA Master', 'https://images.unsplash.com/photo-1461749280684-dccba630e2f6?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=1050&q=80', 'In this quiz, you will be tested on Core Java basics and OOPS concepts. There are some code snippets too to test your basic Java coding skills. The test, it\'s just a nice way to see how much you know, or don\'t know, about Java.Give it a try and share it with others if you like it.', '3rd August, 2020', '12:30 AM', 'Medium - Hard');

-- --------------------------------------------------------

--
-- Table structure for table `rank`
--

CREATE TABLE `rank` (
  `id` int(100) NOT NULL,
  `username` varchar(50) NOT NULL,
  `score` int(11) NOT NULL,
  `time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `quiz_eid` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `rank`
--

INSERT INTO `rank` (`id`, `username`, `score`, `time`, `quiz_eid`) VALUES
(40, 'lotusbiswas', 1, '2020-08-01 15:34:52', '5f2566928a81c');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(100) NOT NULL,
  `name` varchar(50) NOT NULL,
  `rollno` varchar(20) NOT NULL,
  `branch` varchar(20) NOT NULL,
  `gender` varchar(5) NOT NULL,
  `username` varchar(50) NOT NULL,
  `phno` bigint(20) NOT NULL,
  `password` varchar(50) NOT NULL,
  `status` varchar(10) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `name`, `rollno`, `branch`, `gender`, `username`, `phno`, `password`, `status`) VALUES
(1, 'Lotus Biswas', '4', 'BSC IT', 'Male', 'lotusbiswas', 8250366763, '827ccb0eea8a706c4c34a16891f84e7b', 'on'),
(2, 'Ekta Bisht', '5', 'BSC IT', 'Femal', 'ebisht', 8171145713, 'df057295c607d851ef75f246d0dac627', 'on');

-- --------------------------------------------------------

--
-- Table structure for table `user_answer`
--

CREATE TABLE `user_answer` (
  `id` int(100) NOT NULL,
  `qid` varchar(50) NOT NULL,
  `ans` varchar(50) NOT NULL,
  `correctans` varchar(50) NOT NULL,
  `eid` varchar(50) NOT NULL,
  `username` varchar(50) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_answer`
--

INSERT INTO `user_answer` (`id`, `qid`, `ans`, `correctans`, `eid`, `username`) VALUES
(1, '5f25692ecf6ca', '5f25692ecf7b4', '5f25692ecf7b4', '5f2566928a81c', 'lotusbiswas'),
(2, '5f25692ecab6c', '5f25692ecb175', '5f25692ecb175', '5f2566928a81c', 'lotusbiswas'),
(3, '5f25692ecb757', '5f25692ecb92b', '5f25692ecb92b', '5f2566928a81c', 'lotusbiswas');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `answer`
--
ALTER TABLE `answer`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `history`
--
ALTER TABLE `history`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `options`
--
ALTER TABLE `options`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `questions`
--
ALTER TABLE `questions`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `quiz`
--
ALTER TABLE `quiz`
  ADD UNIQUE KEY `id` (`id`);

--
-- Indexes for table `quiz_challenge_comp`
--
ALTER TABLE `quiz_challenge_comp`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `rank`
--
ALTER TABLE `rank`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`username`),
  ADD UNIQUE KEY `username` (`username`),
  ADD UNIQUE KEY `id` (`id`);

--
-- Indexes for table `user_answer`
--
ALTER TABLE `user_answer`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `answer`
--
ALTER TABLE `answer`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `history`
--
ALTER TABLE `history`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=81;

--
-- AUTO_INCREMENT for table `options`
--
ALTER TABLE `options`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=157;

--
-- AUTO_INCREMENT for table `questions`
--
ALTER TABLE `questions`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=40;

--
-- AUTO_INCREMENT for table `quiz`
--
ALTER TABLE `quiz`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `quiz_challenge_comp`
--
ALTER TABLE `quiz_challenge_comp`
  MODIFY `id` int(200) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `rank`
--
ALTER TABLE `rank`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `user_answer`
--
ALTER TABLE `user_answer`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

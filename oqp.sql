-- phpMyAdmin SQL Dump
-- version 4.4.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Oct 24, 2015 at 12:00 PM
-- Server version: 5.6.26
-- PHP Version: 5.5.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `oqp`
--

-- --------------------------------------------------------

--
-- Table structure for table `answers_company`
--

CREATE TABLE IF NOT EXISTS `answers_company` (
  `QuestionId` int(11) NOT NULL,
  `Options` text NOT NULL,
  `CheckAns` int(11) NOT NULL DEFAULT '0',
  `OptionId` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=83 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `answers_company`
--

INSERT INTO `answers_company` (`QuestionId`, `Options`, `CheckAns`, `OptionId`) VALUES
(1, '<js>', 0, 1),
(1, '<javascript>', 0, 2),
(1, '<scripting>', 0, 3),
(1, '<script>', 1, 4),
(2, 'document.getElementById("demo").innerHTML = "Hello World!";', 1, 5),
(2, '#demo.innerHTML = "Hello World!";', 0, 6),
(2, 'document.getElement("p").innerHTML = "Hello World!";', 0, 7),
(2, 'document.getElementByName("p").innerHTML = "Hello World!";', 0, 8),
(3, 'Both the <head> section and the <body> section are correct', 1, 9),
(3, 'The <head> section', 0, 10),
(3, 'The <body> section', 0, 11),
(4, '<script src="xxx.js">', 1, 12),
(4, '<script name="xxx.js">', 0, 13),
(4, '<script href="xxx.js">', 0, 14),
(5, 'True', 0, 15),
(5, 'False', 1, 16),
(6, 'msgBox("Hello World");', 0, 17),
(6, 'alert("Hello World");', 1, 18),
(6, 'alertBox("Hello World");', 0, 19),
(6, 'msg("Hello World");', 0, 20),
(7, 'function myFunction()', 1, 21),
(7, 'function:myFunction()', 0, 22),
(7, 'function = myFunction()', 0, 23),
(8, 'myFunction()', 1, 24),
(8, 'call myFunction()', 0, 25),
(8, 'call function myFunction()', 0, 26),
(9, 'if (i == 5)', 1, 27),
(9, 'if i == 5 then', 0, 28),
(9, 'if i = 5', 0, 29),
(9, 'if i = 5 then', 0, 30),
(10, 'if (i <> 5)', 0, 31),
(10, 'if i <> 5', 0, 32),
(10, 'if i =! 5 then', 0, 33),
(10, 'if (i != 5)', 1, 34),
(11, 'while i = 1 to 10', 0, 35),
(11, 'while (i <= 10; i++)', 0, 36),
(11, 'while (i <= 10)', 1, 37),
(12, 'for i = 1 to 5', 0, 38),
(12, 'for (i = 0; i <= 5; i++)', 1, 39),
(12, 'for (i = 0; i <= 5)', 0, 40),
(12, 'for (i <= 5; i++)', 0, 41),
(13, '//This is a comment', 1, 42),
(13, '<!--This is a comment-->', 0, 43),
(13, '''This is a comment', 0, 44),
(14, '/*This comment has\r\nmore than one line*/', 1, 45),
(14, '//This comment has\r\nmore than one line//', 0, 46),
(14, '<!--This comment has\r\nmore than one line-->', 0, 47),
(15, 'var colors = "red", "green", "blue"', 0, 48),
(15, 'var colors = 1 = ("red"), 2 = ("green"), 3 = ("blue")', 0, 49),
(15, 'var colors = ["red", "green", "blue"]', 1, 50),
(15, 'var colors = (1:"red", 2:"green", 3:"blue")', 0, 51),
(16, 'rnd(7.25)', 0, 52),
(16, 'round(7.25)', 0, 53),
(16, 'Math.rnd(7.25)', 0, 54),
(16, 'Math.round(7.25)', 1, 55),
(17, 'ceil(x, y)', 0, 56),
(17, 'top(x, y)', 0, 57),
(17, 'Math.max(x, y)', 1, 58),
(17, 'Math.ceil(x, y)', 0, 59),
(18, 'w2 = window.open("http://www.w3schools.com");', 1, 60),
(18, 'w2 = window.new("http://www.w3schools.com");', 0, 61),
(19, 'False', 1, 62),
(19, 'True', 0, 63),
(20, 'browser.name', 0, 64),
(20, 'client.navName', 1, 65),
(20, 'navigator.appName', 0, 66),
(21, 'onmouseover', 0, 67),
(21, 'onchange', 0, 68),
(21, 'onmouseclick', 0, 69),
(21, 'onclick', 1, 70),
(22, 'variable carName;', 0, 71),
(22, 'var carName;', 1, 72),
(22, 'v carName;', 0, 73),
(23, '-', 0, 74),
(23, '+', 0, 75),
(23, '=', 1, 76),
(23, '*', 0, 77),
(24, 'false', 0, 78),
(24, 'NaN', 0, 79),
(24, 'true', 1, 80),
(25, 'No', 0, 81),
(25, 'Yes', 1, 82);

-- --------------------------------------------------------

--
-- Table structure for table `answers_practice`
--

CREATE TABLE IF NOT EXISTS `answers_practice` (
  `QuestionId` int(11) NOT NULL,
  `Options` text NOT NULL,
  `CheckAns` int(11) NOT NULL DEFAULT '0',
  `OptionId` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=183 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `answers_practice`
--

INSERT INTO `answers_practice` (`QuestionId`, `Options`, `CheckAns`, `OptionId`) VALUES
(1001, '<js>', 0, 101),
(1001, '<javascript>', 0, 102),
(1001, '<scripting>', 0, 103),
(1001, '<script>', 1, 104),
(1002, 'document.getElementById("demo").innerHTML = "Hello World!";', 1, 105),
(1002, '#demo.innerHTML = "Hello World!";', 0, 106),
(1002, 'document.getElement("p").innerHTML = "Hello World!";', 0, 107),
(1002, 'document.getElementByName("p").innerHTML = "Hello World!";', 0, 108),
(1003, 'Both the <head> section and the <body> section are correct', 1, 109),
(1003, 'The <head> section', 0, 110),
(1003, 'The <body> section', 0, 111),
(1004, '<script src="xxx.js">', 1, 112),
(1004, '<script name="xxx.js">', 0, 113),
(1004, '<script href="xxx.js">', 0, 114),
(1005, 'True', 0, 115),
(1005, 'False', 1, 116),
(1006, 'msgBox("Hello World");', 0, 117),
(1006, 'alert("Hello World");', 1, 118),
(1006, 'alertBox("Hello World");', 0, 119),
(1006, 'msg("Hello World");', 0, 120),
(1007, 'function myFunction()', 1, 121),
(1007, 'function:myFunction()', 0, 122),
(1007, 'function = myFunction()', 0, 123),
(1008, 'myFunction()', 1, 124),
(1008, 'call myFunction()', 0, 125),
(1008, 'call function myFunction()', 0, 126),
(1009, 'if (i == 5)', 1, 127),
(1009, 'if i == 5 then', 0, 128),
(1009, 'if i = 5', 0, 129),
(1009, 'if i = 5 then', 0, 130),
(1010, 'if (i <> 5)', 0, 131),
(1010, 'if i <> 5', 0, 132),
(1010, 'if i =! 5 then', 0, 133),
(1010, 'if (i != 5)', 1, 134),
(1011, 'while i = 1 to 10', 0, 135),
(1011, 'while (i <= 10; i++)', 0, 136),
(1011, 'while (i <= 10)', 1, 137),
(1012, 'for i = 1 to 5', 0, 138),
(1012, 'for (i = 0; i <= 5; i++)', 1, 139),
(1012, 'for (i = 0; i <= 5)', 0, 140),
(1012, 'for (i <= 5; i++)', 0, 141),
(1013, '//This is a comment', 1, 142),
(1013, '<!--This is a comment-->', 0, 143),
(1013, '''This is a comment', 0, 144),
(1014, '/*This comment has\r\nmore than one line*/', 1, 145),
(1014, '//This comment has\r\nmore than one line//', 0, 146),
(1014, '<!--This comment has\r\nmore than one line-->', 0, 147),
(1015, 'var colors = "red", "green", "blue"', 0, 148),
(1015, 'var colors = 1 = ("red"), 2 = ("green"), 3 = ("blue")', 0, 149),
(1015, 'var colors = ["red", "green", "blue"]', 1, 150),
(1015, 'var colors = (1:"red", 2:"green", 3:"blue")', 0, 151),
(1016, 'rnd(7.25)', 0, 152),
(1016, 'round(7.25)', 0, 153),
(1016, 'Math.rnd(7.25)', 0, 154),
(1016, 'Math.round(7.25)', 1, 155),
(1017, 'ceil(x, y)', 0, 156),
(1017, 'top(x, y)', 0, 157),
(1017, 'Math.max(x, y)', 1, 158),
(1017, 'Math.ceil(x, y)', 0, 159),
(1018, 'w2 = window.open("http://www.w3schools.com");', 1, 160),
(1018, 'w2 = window.new("http://www.w3schools.com");', 0, 161),
(1019, 'False', 1, 162),
(1019, 'True', 0, 163),
(1020, 'browser.name', 0, 164),
(1020, 'client.navName', 1, 165),
(1020, 'navigator.appName', 0, 166),
(1021, 'onmouseover', 0, 167),
(1021, 'onchange', 0, 168),
(1021, 'onmouseclick', 0, 169),
(1021, 'onclick', 1, 170),
(1022, 'variable carName;', 0, 171),
(1022, 'var carName;', 1, 172),
(1022, 'v carName;', 0, 173),
(1023, '-', 0, 174),
(1023, '+', 0, 175),
(1023, '=', 1, 176),
(1023, '*', 0, 177),
(1024, 'false', 0, 178),
(1024, 'NaN', 0, 179),
(1024, 'true', 1, 180),
(1025, 'No', 0, 181),
(1025, 'Yes', 1, 182);

-- --------------------------------------------------------

--
-- Table structure for table `company_exams`
--

CREATE TABLE IF NOT EXISTS `company_exams` (
  `CompanyId` int(11) NOT NULL,
  `ExamId` int(11) NOT NULL,
  `Time` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `company_exams`
--

INSERT INTO `company_exams` (`CompanyId`, `ExamId`, `Time`) VALUES
(5, 1, 10),
(5, 2, 5),
(5, 3, 10),
(3, 4, 10),
(4, 5, 7),
(1, 6, 5);

-- --------------------------------------------------------

--
-- Table structure for table `company_info`
--

CREATE TABLE IF NOT EXISTS `company_info` (
  `CompanyId` int(11) NOT NULL,
  `Name` varchar(255) NOT NULL,
  `Username` varchar(255) NOT NULL,
  `Email` varchar(255) NOT NULL,
  `Password` varchar(255) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `company_info`
--

INSERT INTO `company_info` (`CompanyId`, `Name`, `Username`, `Email`, `Password`) VALUES
(1, 'SRS', 'srs', 'dagasatvik@gmail.com', '91deb626b692ecdf5926d4d7cb1c16fa'),
(2, 'h', 'h', 'h@gmail.com', '8fee646aae6f8e5bf07243dd9b54d289'),
(3, 'sat', 'sat', 'sat@gmail.com', '68e2be3ce9d2ed2810ca906a74e16b11'),
(4, 'sd', 'sd', 'sd@g.com', '4c66b16bd8aa6672eedf0a7107e49681'),
(5, 'HCL', 'hcl', 'hcl@gmail.com', 'e81c3498aba0e190103e317d8388a022'),
(6, 'Snapdeal', 'snap', 'snap@gmail.com', 'e3b22c681d15f62f69d257979c3f6f28'),
(7, 'AKGEC', 'akg', 'akg@gmail.com', 'a560b2128ca7331cdb29a0918e4f83e5'),
(8, 'Flipkart', 'flip', 'flip@gmail.com', 'b169efd5b12cf922d8935fbb146da7bf');

-- --------------------------------------------------------

--
-- Table structure for table `exam_type_linked`
--

CREATE TABLE IF NOT EXISTS `exam_type_linked` (
  `typeid` int(11) NOT NULL,
  `examid` int(11) NOT NULL,
  `pmarks` int(11) NOT NULL,
  `nmarks` int(11) NOT NULL,
  `noofquestions` int(11) NOT NULL,
  `id` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `exam_type_linked`
--

INSERT INTO `exam_type_linked` (`typeid`, `examid`, `pmarks`, `nmarks`, `noofquestions`, `id`) VALUES
(1, 1, 3, 1, 10, 1),
(2, 1, 4, 0, 5, 2),
(1, 6, 4, 1, 25, 3);

-- --------------------------------------------------------

--
-- Table structure for table `questionbank_company`
--

CREATE TABLE IF NOT EXISTS `questionbank_company` (
  `ExamId` int(11) NOT NULL,
  `QuestionId` int(11) NOT NULL,
  `Questions` text NOT NULL,
  `typeid` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=26 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `questionbank_company`
--

INSERT INTO `questionbank_company` (`ExamId`, `QuestionId`, `Questions`, `typeid`) VALUES
(6, 1, 'Inside which HTML element do we put the JavaScript?', 1),
(6, 2, 'What is the correct JavaScript syntax to change the content of the HTML element given ?\n<p id=''demo''>This is a demonstration.</p>', 1),
(6, 3, 'Where is the correct place to insert a JavaScript?', 1),
(6, 4, 'What is the correct syntax for referring to an external script called "xxx.js"?', 1),
(6, 5, 'The external JavaScript file must contain the <script> tag.', 1),
(6, 6, 'How do you write "Hello World" in an alert box?', 1),
(6, 7, 'How do you create a function in JavaScript?', 1),
(6, 8, 'How do you call a function named "myFunction"?', 1),
(6, 9, 'How to write an IF statement in JavaScript?', 1),
(6, 10, 'How to write an IF statement for executing some code if "i" is NOT equal to 5?', 1),
(6, 11, 'How does a WHILE loop start?', 1),
(6, 12, 'How does a FOR loop start?', 1),
(6, 13, 'How can you add a comment in a JavaScript?', 1),
(6, 14, 'How to insert a comment that has more than one line?', 1),
(6, 15, 'What is the correct way to write a JavaScript array?', 1),
(6, 16, 'How do you round the number 7.25, to the nearest integer?', 1),
(6, 17, 'How do you find the number with the highest value of x and y?', 1),
(6, 18, 'What is the correct JavaScript syntax for opening a new window called "w2" ?', 1),
(6, 19, 'JavaScript is the same as Java.', 1),
(6, 20, 'How can you detect the client''s browser name?', 1),
(6, 21, 'Which event occurs when the user clicks on an HTML element?', 1),
(6, 22, 'How do you declare a JavaScript variable?', 1),
(6, 23, 'Which operator is used to assign a value to a variable?', 1),
(6, 24, 'What will the following code return: Boolean(10 > 9)', 1),
(6, 25, 'Is JavaScript case-sensitive?', 1);

-- --------------------------------------------------------

--
-- Table structure for table `questionbank_practice`
--

CREATE TABLE IF NOT EXISTS `questionbank_practice` (
  `QuestionType` varchar(255) NOT NULL,
  `QuestionId` int(11) NOT NULL,
  `Question` text NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=1026 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `questionbank_practice`
--

INSERT INTO `questionbank_practice` (`QuestionType`, `QuestionId`, `Question`) VALUES
('Javascript', 1001, 'Inside which HTML element do we put the JavaScript?'),
('Javascript', 1002, 'What is the correct JavaScript syntax to change the content of the HTML element given ?\n<p id=''demo''>This is a demonstration.</p>'),
('Javascript', 1003, 'Where is the correct place to insert a JavaScript?'),
('Javascript', 1004, 'What is the correct syntax for referring to an external script called "xxx.js"?'),
('Javascript', 1005, 'The external JavaScript file must contain the <script> tag.'),
('Javascript', 1006, 'How do you write "Hello World" in an alert box?'),
('Javascript', 1007, 'How do you create a function in JavaScript?'),
('Javascript', 1008, 'How do you call a function named "myFunction"?'),
('Javascript', 1009, 'How to write an IF statement in JavaScript?'),
('Javascript', 1010, 'How to write an IF statement for executing some code if "i" is NOT equal to 5?'),
('Javascript', 1011, 'How does a WHILE loop start?'),
('Javascript', 1012, 'How does a FOR loop start?'),
('Javascript', 1013, 'How can you add a comment in a JavaScript?'),
('Javascript', 1014, 'How to insert a comment that has more than one line?'),
('Javascript', 1015, 'What is the correct way to write a JavaScript array?'),
('Javascript', 1016, 'How do you round the number 7.25, to the nearest integer?'),
('Javascript', 1017, 'How do you find the number with the highest value of x and y?'),
('Javascript', 1018, 'What is the correct JavaScript syntax for opening a new window called "w2" ?'),
('Javascript', 1019, 'JavaScript is the same as Java.'),
('Javascript', 1020, 'How can you detect the client''s browser name?'),
('Javascript', 1021, 'Which event occurs when the user clicks on an HTML element?'),
('Javascript', 1022, 'How do you declare a JavaScript variable?'),
('Javascript', 1023, 'Which operator is used to assign a value to a variable?'),
('Javascript', 1024, 'What will the following code return: Boolean(10 > 9)'),
('Javascript', 1025, 'Is JavaScript case-sensitive?');

-- --------------------------------------------------------

--
-- Table structure for table `records`
--

CREATE TABLE IF NOT EXISTS `records` (
  `StudentNumber` int(11) NOT NULL,
  `ExamId` int(11) NOT NULL,
  `Score` int(11) DEFAULT NULL,
  `Id` int(11) NOT NULL,
  `ExamGiven` int(11) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `student_info`
--

CREATE TABLE IF NOT EXISTS `student_info` (
  `StudentNumber` int(11) NOT NULL,
  `Name` varchar(255) NOT NULL,
  `BTechYear` int(11) NOT NULL,
  `Email` varchar(255) NOT NULL,
  `Password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `student_info`
--

INSERT INTO `student_info` (`StudentNumber`, `Name`, `BTechYear`, `Email`, `Password`) VALUES
(1210024, 'Ranchi', 3, 'r@gmail.com', '757fb66ad042d0f68825d46aacc782f3'),
(1210025, 'Sanchi Daga', 2, 'sanchi.daga@gmail.com', '433e05d8dcdadabbc86b52a538760ae1'),
(1410025, 'Satvik Daga', 2, 'dagasatvik@gmail.com', '1f7bf1f636e8528d6135109159dcbcac'),
(1410053, 'Sagarika Vishnoi', 2, 'sagarikavishnoi7@gmail.com', '58762b1c17fabdf89c04b75936a74519'),
(1410172, 'Rupanshu Verma', 2, 'vermarupanshu733@gmail.com', 'eb16f458fb2e8470dd394eb66eb8ecc1'),
(1510025, 'Ayushi Chauhan', 1, 'sona@gmail.com', 'd27ef34297cc73d1b62059becd68e82f');

-- --------------------------------------------------------

--
-- Table structure for table `temp_table`
--

CREATE TABLE IF NOT EXISTS `temp_table` (
  `checkans` int(11) NOT NULL DEFAULT '0',
  `id` int(11) NOT NULL,
  `questionid` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=44 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `temp_table`
--

INSERT INTO `temp_table` (`checkans`, `id`, `questionid`) VALUES
(-1, 1, 1),
(0, 2, 2),
(0, 3, 3),
(0, 4, 4),
(0, 5, 5),
(0, 6, 6),
(0, 7, 7),
(0, 8, 8),
(0, 9, 9),
(0, 10, 10),
(0, 11, 11),
(0, 12, 12),
(0, 13, 13),
(0, 14, 14),
(0, 15, 15),
(0, 16, 16),
(0, 17, 17),
(0, 18, 18),
(0, 19, 19),
(0, 20, 20),
(0, 21, 21),
(0, 22, 22),
(0, 23, 23),
(0, 24, 24),
(0, 25, 25);

-- --------------------------------------------------------

--
-- Table structure for table `typeofquestions`
--

CREATE TABLE IF NOT EXISTS `typeofquestions` (
  `typeid` int(11) NOT NULL,
  `type` varchar(255) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `typeofquestions`
--

INSERT INTO `typeofquestions` (`typeid`, `type`) VALUES
(1, 'SingleCorrect'),
(2, 'MultiCorrect'),
(3, 'FillUps'),
(4, 'MatchTheFollowing');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `answers_company`
--
ALTER TABLE `answers_company`
  ADD PRIMARY KEY (`OptionId`);

--
-- Indexes for table `answers_practice`
--
ALTER TABLE `answers_practice`
  ADD PRIMARY KEY (`OptionId`);

--
-- Indexes for table `company_exams`
--
ALTER TABLE `company_exams`
  ADD PRIMARY KEY (`ExamId`);

--
-- Indexes for table `company_info`
--
ALTER TABLE `company_info`
  ADD PRIMARY KEY (`CompanyId`),
  ADD UNIQUE KEY `Username` (`Username`,`Email`),
  ADD UNIQUE KEY `Username_2` (`Username`,`Email`);

--
-- Indexes for table `exam_type_linked`
--
ALTER TABLE `exam_type_linked`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `questionbank_company`
--
ALTER TABLE `questionbank_company`
  ADD PRIMARY KEY (`QuestionId`);

--
-- Indexes for table `questionbank_practice`
--
ALTER TABLE `questionbank_practice`
  ADD PRIMARY KEY (`QuestionId`);

--
-- Indexes for table `records`
--
ALTER TABLE `records`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `student_info`
--
ALTER TABLE `student_info`
  ADD PRIMARY KEY (`StudentNumber`),
  ADD UNIQUE KEY `Email` (`Email`);

--
-- Indexes for table `temp_table`
--
ALTER TABLE `temp_table`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `questionid` (`questionid`);

--
-- Indexes for table `typeofquestions`
--
ALTER TABLE `typeofquestions`
  ADD PRIMARY KEY (`typeid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `answers_company`
--
ALTER TABLE `answers_company`
  MODIFY `OptionId` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=83;
--
-- AUTO_INCREMENT for table `answers_practice`
--
ALTER TABLE `answers_practice`
  MODIFY `OptionId` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=183;
--
-- AUTO_INCREMENT for table `company_exams`
--
ALTER TABLE `company_exams`
  MODIFY `ExamId` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `company_info`
--
ALTER TABLE `company_info`
  MODIFY `CompanyId` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `exam_type_linked`
--
ALTER TABLE `exam_type_linked`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `questionbank_company`
--
ALTER TABLE `questionbank_company`
  MODIFY `QuestionId` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=26;
--
-- AUTO_INCREMENT for table `questionbank_practice`
--
ALTER TABLE `questionbank_practice`
  MODIFY `QuestionId` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=1026;
--
-- AUTO_INCREMENT for table `records`
--
ALTER TABLE `records`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `temp_table`
--
ALTER TABLE `temp_table`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=44;
--
-- AUTO_INCREMENT for table `typeofquestions`
--
ALTER TABLE `typeofquestions`
  MODIFY `typeid` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

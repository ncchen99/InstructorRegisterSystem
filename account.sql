-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: db
-- Generation Time: Sep 05, 2020 at 04:45 PM
-- Server version: 5.7.29
-- PHP Version: 7.4.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `account`
--

-- --------------------------------------------------------

--
-- Table structure for table `answers`
--

CREATE TABLE `answers` (
  `id` int(11) NOT NULL,
  `realname` varchar(200) NOT NULL,
  `datetime` varchar(1000) NOT NULL,
  `ans` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `answers`
--

INSERT INTO `answers` (`id`, `realname`, `datetime`, `ans`) VALUES
(1, '文華電研', '2020-04-28 00:58:31', ' 5  , 念成 , 否 ,  特別（星期一～五） ,   有些問題  , '),
(2, '文華電研', '2020-04-28 01:14:34', ' 5  , 嘻嘻 , 是 ,  校務（假日值勤） ,   有些問題  , '),
(3, '文華電研', '2020-04-28 12:32:54', ' 2  , test , 否 ,  校務（假日值勤） ,  請假  , '),
(5, '文華電研', '2020-04-28 19:41:28', ' 3  , test5 , 否 ,  校務（假日值勤） ,  未到  , '),
(6, '文華電研', '2020-04-28 22:38:11', ' 1  , 余信陞 , 是 ,  特別（星期一～五） ,  一切正常  , '),
(7, '文華電研', '2020-04-28 22:55:31', ' 1  , chen Vincent , 否 ,  校務（假日值勤） ,  一切正常  , '),
(8, '文華電研', '2020-04-28 22:59:09', ' 1  , 哈哈 , 是 ,  校務（假日值勤） ,  一切正常  , '),
(9, '文華電研', '2020-04-28 22:59:59', ' 1  , chen Vincent , 否 ,  特別（星期一～五） ,  未到  , '),
(10, '文華電研', '2020-04-28 23:00:14', ' 1  , chen Vincent , 否 , 常務（正常執勤） ,  一切正常  , '),
(11, '文華電研', '2020-04-28 23:12:19', ' 1  , chen Vincent , 是 , 常務（正常執勤） ,  未到  , '),
(12, '文華電研', '2020-04-28 23:12:19', ' 1  , chen Vincent , 是 , 常務（正常執勤） ,  未到  , '),
(13, '文華電研', '2020-04-28 23:12:50', ' 1  , chen Vincent , 是 , 常務（正常執勤） ,  未到  , '),
(14, '文華電研', '2020-04-28 23:13:41', ' 1  , chen Vincent , 是 , 常務（正常執勤） ,  未到  , '),
(15, '文華電研', '2020-04-28 23:15:49', ' 1  , chen Vincent , 是 , 常務（正常執勤） ,  未到  , '),
(16, '文華電研', '2020-04-28 23:17:02', ' 1  , chen Vincent , 是 , 常務（正常執勤） ,  未到  , '),
(17, '文華電研', '2020-04-28 23:18:03', ' 1  , chen Vincent , 是 , 常務（正常執勤） ,  未到  , '),
(18, '文華電研', '2020-04-28 23:19:13', ' 1  , chen Vincent , 是 , 常務（正常執勤） ,  未到  , '),
(19, '文華電研', '2020-04-28 23:20:51', ' 1  , chen Vincent , 是 , 常務（正常執勤） ,  未到  , '),
(20, '文華電研', '2020-04-28 23:30:50', ' 1  , chen Vincent , 是 , 常務（正常執勤） ,  未到  , '),
(21, '文華電研', '2020-04-28 23:52:11', ' 1  , chen Vincent , 是 , 常務（正常執勤） ,  一切正常  , '),
(23, '文華電研', '2020-04-29 00:05:47', '8  , 喝哈西ㄒ一 , 否 ,  特別（星期一～五） ,   有些問題  , '),
(24, '文華電研', '2020-04-29 00:06:27', ' 1  , chen Vincent , 是 , 常務（正常執勤） ,   有些問題  , '),
(25, '文華電研', '2020-04-29 00:31:40', ' 4  , sudo am i , 是 ,  校務（假日值勤） ,   有些問題  , '),
(26, '文華電研', '2020-04-29 00:36:20', ' 1  , Hihi , 是 , 常務（正常執勤） ,  一切正常  , '),
(27, '文華電研', '2020-04-29 00:43:33', ' 5  , 朔割草數 , 是 ,  校務（假日值勤） ,  請假  , '),
(28, '文華電研', '2020-04-29 00:51:00', ' 5  , gG , 是 ,  校務（假日值勤） ,   有些問題  , '),
(29, '文華電研', '2020-04-29 09:21:29', ' 5  , 想不到8 , 否 ,  校務（假日值勤） ,  一切正常  , '),
(30, '文華電研', '2020-04-29 13:10:01', ' 5  , 笨 , 是 ,  校務（假日值勤） ,   有些問題  , '),
(31, '文華電研', '2020-04-29 14:08:41', ' 5  , 朔割草數 , 是 ,  校務（假日值勤） ,  一切正常  , '),
(32, '哈哈是我喇', '2020-04-29 14:09:49', ' 6  , Hihi , 是 ,  特別（星期一～五） ,   有些問題  , '),
(33, '文華電研', '2020-04-29 17:25:35', ' 5  , vue.js , 否 ,  校務（假日值勤） ,   有些問題  , '),
(34, '文華電研', '2020-04-29 23:13:59', ' 7  , ccd , 否 ,  校務（假日值勤） ,   有些問題  , '),
(35, '文華電研', '2020-04-30 08:25:46', ' 1  , KJ legend defecter , 是 , 常務（正常執勤） ,  一切正常  , '),
(36, '文華電研', '2020-04-30 12:39:24', ' 1  , e4gy , 是 ,  校務（假日值勤） ,  一切正常  , '),
(37, '文華電研', '2020-04-30 12:39:42', ' 5  , gbsdf , 是 ,  校務（假日值勤） ,  一切正常  , '),
(38, '文華電研', '2020-05-01 00:28:23', ' 5  , tstar , 否 ,  校務（假日值勤） ,   有些問題  , '),
(39, '文華電研', '2020-05-01 00:40:48', ' 5  , sudo is me , 是 ,  校務（假日值勤） ,   有些問題  , '),
(40, '文華電研', '2020-05-01 12:38:12', ' 4  , sea , 是 ,  校務（假日值勤） ,   有些問題  , '),
(41, '文華電研', '2020-05-01 18:24:19', ' 3  , csy , 否 ,  校務（假日值勤） ,   有些問題  , '),
(42, '文華電研', '2020-05-01 18:36:26', ' 4  , wefwe , 是 ,  特別（星期一～五） ,  一切正常  , '),
(43, '我大思羽依舊電', '2020-05-02 01:34:58', '8  , csy , 否 ,  校務（假日值勤） ,  一切正常  , '),
(44, 'Brain', '2020-05-02 01:39:20', ' 1  , chen Vincent , 是 , 常務（正常執勤） ,   有些問題  , '),
(45, '電神電爽爽', '2020-05-04 22:54:34', ' 1  , wd , 否 ,  校務（假日值勤） ,  一切正常  , '),
(46, '電神電爽爽', '2020-05-04 23:00:07', ' 4  , honor教我 , 是 , 常務（正常執勤） ,  一切正常  , '),
(47, '電神電爽爽', '2020-05-04 23:11:08', ' 1  , chen Vincent , 否 ,  校務（假日值勤） ,   有些問題  , '),
(48, '電神電爽爽', '2020-05-04 23:29:56', ' 5  , wdwd , 否 ,  特別（星期一～五） ,   有些問題  , '),
(49, '電神電爽爽', '2020-05-04 23:30:03', ' 1  , chen Vincent , 是 , 常務（正常執勤） ,  一切正常  , '),
(51, 'Brain呆', '2020-05-05 07:52:03', ' 6  , 嘻嘻 , 否 ,  校務（假日值勤） ,  未到  , '),
(52, '電神電爽爽', '2020-05-05 23:31:45', ' 4  , chen Vincent , 否 ,  特別（星期一～五） ,   有些問題  , '),
(54, '電神電爽爽', '2020-05-06 16:02:31', ' 6  , 阿王 , 是 , 常務（正常執勤） ,  一切正常  , '),
(55, '電神電爽爽', '2020-05-07 00:02:47', ' 4  , elite , 否 ,  校務（假日值勤） ,   有些問題  , '),
(56, '小瓜呆', '2020-05-07 12:49:55', ' 4  , dsjmkcv , 是 ,  特別（星期一～五） ,   有些問題  , '),
(57, '小瓜呆', '2020-05-11 12:42:33', ' 2  , drer , 是 , 常務（正常執勤） ,   有些問題  , '),
(58, '小瓜呆', '2020-05-24 15:11:19', ' 5  , 小呆呆 , 否 ,  校務（假日值勤） ,   有些問題  , '),
(59, '電神電爽爽', '2020-06-07 19:34:47', ' 1  , jgbhjgj , 否 ,  校務（假日值勤） ,   有些問題  , '),
(60, '電神電爽爽', '2020-09-06 00:44:56', ' 3  , ncc , 是 , 常務（正常執勤） ,  一切正常  , ');

-- --------------------------------------------------------

--
-- Table structure for table `questions`
--

CREATE TABLE `questions` (
  `id` int(11) NOT NULL,
  `question` varchar(200) NOT NULL,
  `genre` varchar(200) NOT NULL,
  `options` varchar(1000) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `questions`
--

INSERT INTO `questions` (`id`, `question`, `genre`, `options`) VALUES
(1, '第幾隊？', 'dropDownMenu', ' 1 , 2 , 3 , 4 , 5 , 6 , 7 ,8 '),
(2, '姓名', 'shortAnswerQuestions', ''),
(3, '補登?', 'yesNoQuestions', ''),
(4, '執勤類型?', 'dropDownMenu', '常務（正常執勤）, 校務（假日值勤）, 特別（星期一～五）'),
(5, '是否正常?', 'dropDownMenu', ' 一切正常 ,  有些問題 , 未到 , 請假');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(200) NOT NULL,
  `passw` varchar(200) NOT NULL,
  `realname` varchar(200) NOT NULL,
  `authority` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `passw`, `realname`, `authority`) VALUES
(1, 'whcsc', 'whcsc', '電神電爽爽', 'student'),
(2, 'teacher', 'teacher', '我大思羽依舊電', 'teacher'),
(4, 'ncc', 'ncc', '小瓜呆', 'admin'),
(7, 'Fuck', 'sudoIt', 'Brain呆', 'student'),
(8, 'admin', 'admin', '超級使用者', 'admin'),
(22, 'whsh', 'whsh', '文華電力支柱', 'student'),
(24, 'honor', 'honor', 'honor', 'admin');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `answers`
--
ALTER TABLE `answers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `questions`
--
ALTER TABLE `questions`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `answers`
--
ALTER TABLE `answers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=61;

--
-- AUTO_INCREMENT for table `questions`
--
ALTER TABLE `questions`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

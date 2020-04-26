-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- 主機： db
-- 產生時間： 2020 年 04 月 26 日 17:21
-- 伺服器版本： 5.7.29
-- PHP 版本： 7.4.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- 資料庫： `account`
--

-- --------------------------------------------------------

--
-- 資料表結構 `answers`
--

CREATE TABLE `answers` (
  `id` int(11) NOT NULL,
  `realname` varchar(200) CHARACTER SET utf8 NOT NULL,
  `datetime` varchar(1000) CHARACTER SET utf8 NOT NULL,
  `ans` varchar(1000) CHARACTER SET utf8 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- 傾印資料表的資料 `answers`
--

INSERT INTO `answers` (`id`, `realname`, `datetime`, `ans`) VALUES
(1, '文華電研', '2020-04-27 01:15:34', ' 1  , chen Vincent , 是 , 常務（正常執勤） ,  一切正常  , '),
(2, '文華電研', '2020-04-27 01:16:52', ' 3  , wdwd , 否 ,  校務（假日值勤） ,  未到  , ');

-- --------------------------------------------------------

--
-- 資料表結構 `questions`
--

CREATE TABLE `questions` (
  `id` int(11) NOT NULL,
  `question` varchar(200) CHARACTER SET utf8 NOT NULL,
  `genre` varchar(200) NOT NULL,
  `options` varchar(1000) CHARACTER SET utf8 DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- 傾印資料表的資料 `questions`
--

INSERT INTO `questions` (`id`, `question`, `genre`, `options`) VALUES
(1, '第幾隊？', 'dropDownMenu', ' 1 , 2 , 3 , 4 , 5 , 6 , 7 ,8 '),
(2, '姓名', 'shortAnswerQuestions', ''),
(3, '補登?', 'yesNoQuestions', ''),
(4, '執勤類型?', 'dropDownMenu', '常務（正常執勤）, 校務（假日值勤）, 特別（星期一～五'),
(5, '是否正常?', 'dropDownMenu', ' 一切正常 ,  有些問題 , 未到 , 請假 ');

-- --------------------------------------------------------

--
-- 資料表結構 `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(200) NOT NULL,
  `passw` varchar(200) NOT NULL,
  `realname` varchar(200) CHARACTER SET utf8 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- 傾印資料表的資料 `users`
--

INSERT INTO `users` (`id`, `username`, `passw`, `realname`) VALUES
(1, 'whcsc', 'whcsc', '文華電研');

--
-- 已傾印資料表的索引
--

--
-- 資料表索引 `answers`
--
ALTER TABLE `answers`
  ADD PRIMARY KEY (`id`);

--
-- 資料表索引 `questions`
--
ALTER TABLE `questions`
  ADD PRIMARY KEY (`id`);

--
-- 資料表索引 `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- 在傾印的資料表使用自動遞增(AUTO_INCREMENT)
--

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `answers`
--
ALTER TABLE `answers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `questions`
--
ALTER TABLE `questions`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

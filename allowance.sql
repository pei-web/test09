-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- 主機： localhost
-- 產生時間： 2020 年 11 月 21 日 15:04
-- 伺服器版本： 10.4.6-MariaDB
-- PHP 版本： 7.3.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- 資料庫： `test`
--

-- --------------------------------------------------------

--
-- 資料表結構 `allowance`
--

CREATE TABLE `allowance` (
  `sID` int(20) NOT NULL,
  `name` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `family` text COLLATE utf8_unicode_ci NOT NULL,
  `class` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `teacher` int(10) NOT NULL DEFAULT 0,
  `teacherOpinion` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `secretary` int(10) NOT NULL DEFAULT 0,
  `result` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `secretaryOpinion` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `principal` int(10) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- 傾印資料表的資料 `allowance`
--

INSERT INTO `allowance` (`sID`, `name`, `family`, `class`, `teacher`, `teacherOpinion`, `secretary`, `result`, `secretaryOpinion`, `principal`) VALUES
(106213004, 'betty', '', '低收入戶', 0, '', 0, '', '', 0),
(106213010, '陳阿蓁', '陳寶\r\n吳小姐', '低收入戶', 1, '非常需要，家境很可憐', 1, '1000', '', 0),
(106213039, '酥酥', '', '家庭突發因素', 1, '弟弟突然有小孩很可憐', 0, '', '', 0),
(106213050, '朱小丞', '', '中低收入戶', 1, '騙錢吧，天天喝星巴克還申請', 1, '0', '非常可惡', 1),
(107213003, 'student', '哈哈', '中低收入戶', 0, '', 0, '', '', 0),
(107213004, 'student2', '章章章', '低收入戶', 0, '', 0, '', '', 0);

--
-- 已傾印資料表的索引
--

--
-- 資料表索引 `allowance`
--
ALTER TABLE `allowance`
  ADD PRIMARY KEY (`sID`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

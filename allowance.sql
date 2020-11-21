-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- 主機： localhost
-- 產生時間： 2020 年 11 月 21 日 19:31
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
(106213004, 'student3', 'Jason', '低收入戶', 0, '', 0, '', '', 0),
(106213010, 'student6', '陳寶\r\n吳小姐', '低收入戶', 1, '非常需要，家境很可憐', 1, '2000', '太窮了，快送他錢', 1),
(106213039, 'student5', '', '家庭突發因素', 1, '父母雙亡，急需補助', 1, '10000', '可憐的孩子', 0),
(106213050, 'student4', '', '中低收入戶', 1, '騙錢吧，天天喝星巴克還申請', 0, '', '', 0),
(107213003, 'student1', '林科左', '中低收入戶', 0, '', 0, '', '', 0),
(107213004, 'student2', '郭子瑋', '中低收入戶', 0, '', 0, '', '', 0),
(107213006, 'Jason', 'J-father', '低收入戶', 1, '很窮很窮', 1, '20000', '好可憐ㄛ', 1);

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

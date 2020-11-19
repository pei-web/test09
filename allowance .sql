-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- 主機: 127.0.0.1
-- 產生時間： 
-- 伺服器版本: 10.1.37-MariaDB
-- PHP 版本： 7.2.12

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
  `id` int(20) NOT NULL,
  `sID` int(20) NOT NULL,
  `name` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `family` text COLLATE utf8_unicode_ci NOT NULL,
  `class` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `teacher` int(10) NOT NULL DEFAULT '0',
  `teacher opinion` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `secretary` int(10) NOT NULL DEFAULT '0',
  `result` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `secretary opinion` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `principal` int(10) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- 資料表的匯出資料 `allowance`
--

INSERT INTO `allowance` (`id`, `sID`, `name`, `family`, `class`, `teacher`, `teacher opinion`, `secretary`, `result`, `secretary opinion`, `principal`) VALUES
(0, 106213004, 'betty', '', '低收入戶', 0, '', 0, '', '', 0),
(1, 106213010, '陳阿蓁', '陳寶\r\n吳小姐', '低收入戶', 1, '非常需要，家境很可憐', 1, '1000', '', 0),
(2, 106213039, '酥酥', '', '家庭突發因素', 1, '弟弟突然有小孩很可憐', 0, '', '', 0),
(3, 106213050, '朱小丞', '', '中低收入戶', 1, '騙錢吧，天天喝星巴克還申請', 1, '0', '非常可惡', 1);

--
-- 已匯出資料表的索引
--

--
-- 資料表索引 `allowance`
--
ALTER TABLE `allowance`
  ADD PRIMARY KEY (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

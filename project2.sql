-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- 主機： localhost
-- 產生時間： 2021-01-02 19:24:09
-- 伺服器版本： 8.0.22
-- PHP 版本： 7.4.12
SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- 資料庫： `project2`
--
CREATE DATABASE IF NOT EXISTS `project2` DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci;
USE `project2`;

-- --------------------------------------------------------

--
-- 資料表結構 `account`
--

CREATE TABLE `account` (
  `cID` int(10) NOT NULL,
  `account` varchar(20) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(20) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `cName` varchar(10) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `cPhone` char(10) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `cAddress` varchar(100) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(40) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `sex` varchar(20) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `birthday` varchar(20) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- 傾印資料表的資料 `account`
--

INSERT INTO `account` (`cID`, `account`, `password`, `cName`, `cPhone`, `cAddress`, `email`, `sex`, `birthday`) VALUES
(1, 'chiu', '123', 'chiu', '0912345678', '桃園市中壢區遠東路135號', 'chiu@gmail.com', 'female', '1996-03-28'),
(2, 'yy', '1234', 'yuyu', '0923564875', '台北市中山區中山路25號3樓', 'yy@gmail.com', 'female', '1997-07-02'),
(14, 'ooi', '12345', 'ooo', '0911111111', '新竹市竹北', 'ooi@gmail.com', 'male', '1998-11-15');

-- --------------------------------------------------------

--
-- 資料表結構 `list`
--

CREATE TABLE `list` (
  `cID` int(10) NOT NULL,
  `pName` varchar(50) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `pPrice` int NOT NULL,
  `pNum` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- 傾印資料表的資料 `list`
--

INSERT INTO `list` (`cID`, `pName`, `pPrice`, `pNum`) VALUES
(1, 'bamford玫瑰', 2800, 3),
(1, 'diptyque茉莉', 2100, 1),
(1, 'byredo旋轉木馬', 2600, 1),
(1, 'kerzon盧森堡公園', 1600, 2),
(1, 'fornasetti雞尾酒', 6400, 1),
(2, 'miller harris巴黎菸草', 2100, 1),
(2, 'miller harris虹瑩瓣雨', 2800, 1);

-- --------------------------------------------------------

--
-- 資料表結構 `message`
--

CREATE TABLE `message` (
  `mID` int NOT NULL,
  `cName` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `subject` varchar(50) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `message` varchar(500) COLLATE utf8_unicode_ci NOT NULL,
  `time` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- 傾印資料表的資料 `message`
--

INSERT INTO `message` (`mID`, `cName`, `subject`, `message`, `time`) VALUES
(1, 'yy', 'hi', '服務很好 出貨快速', '2020-10-26 21:03:02');

-- --------------------------------------------------------

--
-- 資料表結構 `product`
--

CREATE TABLE `product` (
  `pID` int(10) NOT NULL,
  `pName` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `pPrice` int(10) NOT NULL,
  `pImage` varchar(20) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- 傾印資料表的資料 `product`
--

INSERT INTO `product` (`pID`, `pName`, `pPrice`, `pImage`) VALUES
(1, 'bamford玫瑰', 2800, 'images\\p1.jpg'),
(2, 'diptyque茉莉', 2100, 'images\\p2.jpg'),
(3, 'byredo旋轉木馬', 2600, 'images\\p3.jpg'),
(4, 'kerzon盧森堡公園', 1600, 'images\\p4.jpg'),
(5, 'fornasetti雞尾酒', 6400, 'images\\p5.jpg'),
(6, 'miller harris巴黎菸草', 2100, 'images\\p6.jpg'),
(7, 'fornasetti紅唇女伶之吻', 6400, 'images\\p7.jpg'),
(8, 'floraiku薰香木', 2900, 'images\\p8.jpg'),
(9, 'malin+goetz大麻草', 2150, 'images\\p9.jpg'),
(10, 'miller harris虹瑩瓣雨', 2800, 'images\\p10.jpg');

--
-- 已傾印資料表的索引
--

--
-- 資料表索引 `account`
--
ALTER TABLE `account`
  ADD PRIMARY KEY (`cID`);

--
-- 資料表索引 `list`
--
ALTER TABLE `list`
  ADD KEY `cID` (`cID`);

--
-- 資料表索引 `message`
--
ALTER TABLE `message`
  ADD PRIMARY KEY (`mID`);

--
-- 資料表索引 `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`pID`);
  
  
-- 在傾印的資料表使用自動遞增(AUTO_INCREMENT)
--

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `account`
--
ALTER TABLE `account`
  MODIFY `cID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `message`
--
ALTER TABLE `message`
  MODIFY `mID` int(200) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `product`
--
ALTER TABLE `product`
  MODIFY `pID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- 已傾印資料表的限制式
--

--
-- 資料表的限制式 `cart`
--
ALTER TABLE `list`
  ADD CONSTRAINT `list_ibfk_1` FOREIGN KEY (`cID`) REFERENCES `account` (`cID`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;


/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

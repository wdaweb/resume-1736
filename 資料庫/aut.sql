-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- 主機： 127.0.0.1
-- 產生時間： 
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
-- 資料庫： `resume`
--

-- --------------------------------------------------------

--
-- 資料表結構 `aut`
--

CREATE TABLE `aut` (
  `id` int(5) UNSIGNED NOT NULL,
  `kind` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `aut` varchar(500) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sh` int(5) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- 傾印資料表的資料 `aut`
--

INSERT INTO `aut` (`id`, `kind`, `aut`, `sh`) VALUES
(6, '網頁設計', '從事平面設計相關的工作四年的歷練，從書籍內頁、封面的排版設計、電商Banner、Beauty廣告海報到目前的網頁、名片設計等等案例，對於網頁與動態設計有高度興趣。\r\n\r\n\r\n主要的設計風格以可愛、簡約、色系和諧為出發點，希望觀賞者能夠獲得舒適的色彩體驗。', 1),
(24, 'dsds', 'dsdasda', 0);

--
-- 已傾印資料表的索引
--

--
-- 資料表索引 `aut`
--
ALTER TABLE `aut`
  ADD PRIMARY KEY (`id`);

--
-- 在傾印的資料表使用自動遞增(AUTO_INCREMENT)
--

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `aut`
--
ALTER TABLE `aut`
  MODIFY `id` int(5) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

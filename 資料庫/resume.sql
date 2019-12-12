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

-- --------------------------------------------------------

--
-- 資料表結構 `data`
--

CREATE TABLE `data` (
  `id` int(5) UNSIGNED NOT NULL,
  `name` varchar(5) COLLATE utf8mb4_unicode_ci NOT NULL,
  `gender` varchar(5) COLLATE utf8mb4_unicode_ci NOT NULL,
  `birth` date NOT NULL,
  `email` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tel` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `addr` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `edu` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- 傾印資料表的資料 `data`
--

INSERT INTO `data` (`id`, `name`, `gender`, `birth`, `email`, `tel`, `addr`, `edu`) VALUES
(1, '李菀云', '女', '1993-09-15', 'wendy0970566@gmail.com', '0970431566', '新北市蘆洲區復興路63巷', '屏東科技大學');

-- --------------------------------------------------------

--
-- 資料表結構 `exp`
--

CREATE TABLE `exp` (
  `id` int(5) UNSIGNED NOT NULL,
  `company` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `title` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `job_on` date NOT NULL,
  `job_out` date NOT NULL,
  `exp` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sh` int(5) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- 傾印資料表的資料 `exp`
--

INSERT INTO `exp` (`id`, `company`, `title`, `job_on`, `job_out`, `exp`, `sh`) VALUES
(1, '景騰多媒體 ', '網頁設計師', '2017-01-15', '2019-11-06', '旅遊平台、民宿網站規', 1);

-- --------------------------------------------------------

--
-- 資料表結構 `file`
--

CREATE TABLE `file` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(128) COLLATE utf8mb4_unicode_ci NOT NULL,
  `type` varchar(60) COLLATE utf8mb4_unicode_ci NOT NULL,
  `path` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `note` varchar(150) COLLATE utf8mb4_unicode_ci NOT NULL,
  `create_time` timestamp NOT NULL DEFAULT current_timestamp(),
  `update_time` timestamp NOT NULL DEFAULT current_timestamp(),
  `sh` int(2) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- 資料表結構 `image`
--

CREATE TABLE `image` (
  `id` int(5) UNSIGNED NOT NULL,
  `image` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `note` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sh` int(4) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- 資料表結構 `job`
--

CREATE TABLE `job` (
  `id` int(5) UNSIGNED NOT NULL,
  `pos` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `indu` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `working` date NOT NULL,
  `money1` int(10) NOT NULL,
  `money2` int(10) NOT NULL,
  `loca` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- 傾印資料表的資料 `job`
--

INSERT INTO `job` (`id`, `pos`, `indu`, `working`, `money1`, `money2`, `loca`) VALUES
(1, '前端網頁工程師', '軟體工程', '2019-12-20', 32000, 35000, '蘆洲區');

-- --------------------------------------------------------

--
-- 資料表結構 `photo`
--

CREATE TABLE `photo` (
  `id` int(10) UNSIGNED NOT NULL,
  `photo` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sh` int(5) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- 傾印資料表的資料 `photo`
--

INSERT INTO `photo` (`id`, `photo`, `sh`) VALUES
(4, './photo/S__14688258.jpg', 1);

-- --------------------------------------------------------

--
-- 資料表結構 `skill`
--

CREATE TABLE `skill` (
  `id` int(5) UNSIGNED NOT NULL,
  `sort` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `depict` varchar(150) COLLATE utf8mb4_unicode_ci NOT NULL,
  `skill` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sh` int(5) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- 傾印資料表的資料 `skill`
--

INSERT INTO `skill` (`id`, `sort`, `depict`, `skill`, `sh`) VALUES
(4, 'erervtertbetbertbert', 'retertertafsrer', 'ertertertert', 1);

-- --------------------------------------------------------

--
-- 資料表結構 `skills`
--

CREATE TABLE `skills` (
  `id` int(5) UNSIGNED NOT NULL,
  `skill` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `kind` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- 傾印資料表的資料 `skills`
--

INSERT INTO `skills` (`id`, `skill`, `kind`) VALUES
(1, '- Adobe Photoshop ', 1),
(2, '- Adobe Illustrator ', 1),
(3, '- HTML ', 2),
(4, '- Javascript / jQuery', 2),
(5, '-CSS', 2),
(6, '-php', 3),
(7, '-AJAX', 2),
(8, '-BootStrap', 2),
(9, '-SQL', 3);

-- --------------------------------------------------------

--
-- 資料表結構 `user`
--

CREATE TABLE `user` (
  `id` int(3) UNSIGNED NOT NULL,
  `acc` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `pw` varchar(15) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- 傾印資料表的資料 `user`
--

INSERT INTO `user` (`id`, `acc`, `pw`) VALUES
(1, 'wendy', '123');

--
-- 已傾印資料表的索引
--

--
-- 資料表索引 `aut`
--
ALTER TABLE `aut`
  ADD PRIMARY KEY (`id`);

--
-- 資料表索引 `data`
--
ALTER TABLE `data`
  ADD PRIMARY KEY (`id`);

--
-- 資料表索引 `exp`
--
ALTER TABLE `exp`
  ADD PRIMARY KEY (`id`);

--
-- 資料表索引 `file`
--
ALTER TABLE `file`
  ADD PRIMARY KEY (`id`);

--
-- 資料表索引 `image`
--
ALTER TABLE `image`
  ADD PRIMARY KEY (`id`);

--
-- 資料表索引 `job`
--
ALTER TABLE `job`
  ADD PRIMARY KEY (`id`);

--
-- 資料表索引 `photo`
--
ALTER TABLE `photo`
  ADD PRIMARY KEY (`id`);

--
-- 資料表索引 `skill`
--
ALTER TABLE `skill`
  ADD PRIMARY KEY (`id`);

--
-- 資料表索引 `skills`
--
ALTER TABLE `skills`
  ADD PRIMARY KEY (`id`);

--
-- 資料表索引 `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- 在傾印的資料表使用自動遞增(AUTO_INCREMENT)
--

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `aut`
--
ALTER TABLE `aut`
  MODIFY `id` int(5) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `data`
--
ALTER TABLE `data`
  MODIFY `id` int(5) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `exp`
--
ALTER TABLE `exp`
  MODIFY `id` int(5) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `file`
--
ALTER TABLE `file`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `image`
--
ALTER TABLE `image`
  MODIFY `id` int(5) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `job`
--
ALTER TABLE `job`
  MODIFY `id` int(5) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `photo`
--
ALTER TABLE `photo`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `skill`
--
ALTER TABLE `skill`
  MODIFY `id` int(5) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `skills`
--
ALTER TABLE `skills`
  MODIFY `id` int(5) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `user`
--
ALTER TABLE `user`
  MODIFY `id` int(3) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

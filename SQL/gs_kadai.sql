-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- ホスト: 127.0.0.1
-- 生成日時: 2023-08-05 04:14:46
-- サーバのバージョン： 10.4.28-MariaDB
-- PHP のバージョン: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- データベース: `gs_kadai`
--

-- --------------------------------------------------------

--
-- テーブルの構造 `gs_kadai_an_table`
--

CREATE TABLE `gs_kadai_an_table` (
  `id` int(11) NOT NULL,
  `name` varchar(24) NOT NULL,
  `category` varchar(12) NOT NULL,
  `sns` varchar(128) NOT NULL,
  `email` varchar(128) NOT NULL,
  `place` varchar(128) NOT NULL,
  `description` text NOT NULL,
  `pass` varchar(64) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- テーブルのデータのダンプ `gs_kadai_an_table`
--

INSERT INTO `gs_kadai_an_table` (`id`, `name`, `category`, `sns`, `email`, `place`, `description`, `pass`) VALUES
(13, 'xxx', '絵画', 'https://xxx', 'xxx@gmail.com', 'Tokyo', '', ''),
(30, 'なしこ', '絵画', 'https://xxx', 'xxx@gmail.com', 'Tokyo', '', ''),
(32, 'wk', '絵画', '', '', '', '', ''),
(33, '1111', '立体', 'https://xxx', 'xxx@gmail.com', '', '', ''),
(34, 'なしこ', '絵画', 'yyy', 'xxx@gmail.com', 'Osaka', '', ''),
(35, '', '絵画', '', '', '', '', ''),
(36, '', '絵画', '', '', '', '', '');

-- --------------------------------------------------------

--
-- テーブルの構造 `gs_kadai_user_table`
--

CREATE TABLE `gs_kadai_user_table` (
  `id` int(12) NOT NULL,
  `name` varchar(64) NOT NULL,
  `lid` varchar(128) NOT NULL,
  `lpw` varchar(64) NOT NULL,
  `kanri_flg` int(1) NOT NULL,
  `life_flg` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- テーブルのデータのダンプ `gs_kadai_user_table`
--

INSERT INTO `gs_kadai_user_table` (`id`, `name`, `lid`, `lpw`, `kanri_flg`, `life_flg`) VALUES
(1, '管理者', 'abc', 'abc', 1, 0),
(2, '一般', '123', '123', 0, 0);

--
-- ダンプしたテーブルのインデックス
--

--
-- テーブルのインデックス `gs_kadai_an_table`
--
ALTER TABLE `gs_kadai_an_table`
  ADD PRIMARY KEY (`id`);

--
-- テーブルのインデックス `gs_kadai_user_table`
--
ALTER TABLE `gs_kadai_user_table`
  ADD PRIMARY KEY (`id`);

--
-- ダンプしたテーブルの AUTO_INCREMENT
--

--
-- テーブルの AUTO_INCREMENT `gs_kadai_an_table`
--
ALTER TABLE `gs_kadai_an_table`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;

--
-- テーブルの AUTO_INCREMENT `gs_kadai_user_table`
--
ALTER TABLE `gs_kadai_user_table`
  MODIFY `id` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

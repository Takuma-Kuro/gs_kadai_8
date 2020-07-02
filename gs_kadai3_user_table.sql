-- phpMyAdmin SQL Dump
-- version 4.9.3
-- https://www.phpmyadmin.net/
--
-- ホスト: localhost:8889
-- 生成日時: 2020 年 7 月 02 日 14:29
-- サーバのバージョン： 5.7.26
-- PHP のバージョン: 7.4.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
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
-- テーブルの構造 `gs_kadai3_user_table`
--

CREATE TABLE `gs_kadai3_user_table` (
  `id` int(12) NOT NULL,
  `name` varchar(500) NOT NULL,
  `email` varchar(500) NOT NULL,
  `lid` varchar(500) NOT NULL,
  `lpw` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- テーブルのデータのダンプ `gs_kadai3_user_table`
--

INSERT INTO `gs_kadai3_user_table` (`id`, `name`, `email`, `lid`, `lpw`) VALUES
(1, '黒川卓真', 'skijump120@gmail.com', 'test1', 'test1'),
(2, '黒川卓真', 'skijump120@gmail.com', 'test2', '$2y$10$f6V9ncx.PtnUI1O0d8CBb.LNiIVSyD8P85U2nCjmytYLTcafm/6uW');

--
-- ダンプしたテーブルのインデックス
--

--
-- テーブルのインデックス `gs_kadai3_user_table`
--
ALTER TABLE `gs_kadai3_user_table`
  ADD PRIMARY KEY (`id`);

--
-- ダンプしたテーブルのAUTO_INCREMENT
--

--
-- テーブルのAUTO_INCREMENT `gs_kadai3_user_table`
--
ALTER TABLE `gs_kadai3_user_table`
  MODIFY `id` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

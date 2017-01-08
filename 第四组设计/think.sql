-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 2017-01-08 16:17:18
-- 服务器版本： 5.7.14
-- PHP Version: 5.6.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `think`
--

-- --------------------------------------------------------

--
-- 表的结构 `article`
--

CREATE TABLE `article` (
  `id` int(11) NOT NULL,
  `article_title` varchar(100) NOT NULL,
  `article_content` text NOT NULL,
  `article_img` varchar(250) NOT NULL,
  `publish_time` int(11) NOT NULL,
  `article_user` int(11) NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT '1'
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- 转存表中的数据 `article`
--

INSERT INTO `article` (`id`, `article_title`, `article_content`, `article_img`, `publish_time`, `article_user`, `status`) VALUES
(1, '你猜猜', '我是谁谁谁', 'http://localhost/AS_Education/Public/images/test.jpg', 276456098, 1, 1),
(2, '我是第四组', '第四组的任务已经今本完成了，还需要添加其他功能', 'http://localhost/AS_Education/Public/images/test.jpg', 234124123, 2, 1);

-- --------------------------------------------------------

--
-- 表的结构 `hd_wish`
--

CREATE TABLE `hd_wish` (
  `id` int(10) UNSIGNED NOT NULL,
  `username` varchar(20) NOT NULL DEFAULT '',
  `content` varchar(255) NOT NULL DEFAULT '',
  `time` int(10) NOT NULL DEFAULT '0'
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- 转存表中的数据 `hd_wish`
--

INSERT INTO `hd_wish` (`id`, `username`, `content`, `time`) VALUES
(1, 'sd', 'sd', 1483451440);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `article`
--
ALTER TABLE `article`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `hd_wish`
--
ALTER TABLE `hd_wish`
  ADD PRIMARY KEY (`id`);

--
-- 在导出的表使用AUTO_INCREMENT
--

--
-- 使用表AUTO_INCREMENT `article`
--
ALTER TABLE `article`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- 使用表AUTO_INCREMENT `hd_wish`
--
ALTER TABLE `hd_wish`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

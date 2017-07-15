-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 2017-07-14 11:06:26
-- 服务器版本： 5.6.17
-- PHP Version: 5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `xiyou`
--

-- --------------------------------------------------------

--
-- 表的结构 `admin`
--

CREATE TABLE IF NOT EXISTS `admin` (
  `aid` int(11) NOT NULL AUTO_INCREMENT,
  `aname` varchar(50) NOT NULL,
  `apass` varchar(50) NOT NULL,
  PRIMARY KEY (`aid`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=3 ;

--
-- 转存表中的数据 `admin`
--

INSERT INTO `admin` (`aid`, `aname`, `apass`) VALUES
(1, 'admin', '21232f297a57a5a743894a0e4a801fc3'),
(2, 'aaa', '47bce5c74f589f4867dbd57e9ca9f808');

-- --------------------------------------------------------

--
-- 表的结构 `category`
--

CREATE TABLE IF NOT EXISTS `category` (
  `id` int(20) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) NOT NULL,
  `pid` int(20) NOT NULL,
  `Ename` varchar(100) NOT NULL,
  `xingji` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=7 ;

--
-- 转存表中的数据 `category`
--

INSERT INTO `category` (`id`, `name`, `pid`, `Ename`, `xingji`) VALUES
(1, '周边游', 0, 'ZHOUBIAN', 5),
(2, '私人订制', 0, 'SIREN', 4),
(3, '自驾游', 1, 'ZIJIAYOU', 0),
(4, '跟团游', 1, 'GENTUAN', 0),
(5, '个人定制', 2, '', 0),
(6, '团体定制', 2, '', 0);

-- --------------------------------------------------------

--
-- 表的结构 `lists`
--

CREATE TABLE IF NOT EXISTS `lists` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `title` varchar(100) NOT NULL,
  `cid` int(20) NOT NULL,
  `posid` char(250) NOT NULL DEFAULT '0',
  `keyword` varchar(50) NOT NULL,
  `alltime` varchar(100) NOT NULL,
  `discount` varchar(100) NOT NULL,
  `price` int(50) NOT NULL,
  `start` varchar(100) NOT NULL,
  `end` varchar(100) NOT NULL,
  `starttime` varchar(100) NOT NULL,
  `traffic` varchar(100) NOT NULL,
  `routedetail` text NOT NULL,
  `imgurl` varchar(100) NOT NULL,
  `xingji` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=3 ;

--
-- 转存表中的数据 `lists`
--

INSERT INTO `lists` (`id`, `title`, `cid`, `posid`, `keyword`, `alltime`, `discount`, `price`, `start`, `end`, `starttime`, `traffic`, `routedetail`, `imgurl`, `xingji`) VALUES
(1, '海南网定制往返实惠出行', 3, '0', '海南', '4night,3days', '90%', 2400, '太原', '海南', '7月10日', '飞机去、飞机回', '阿萨德卡萨李开复你说的立刻给你发的两个年级开发给你健康 ', '', 4),
(2, '太原到大同三日游', 3, '0', '大同', '3days,2night', '80%', 1000, '太原', '大同 云冈石窟', '7月31日', '高铁去高铁回', '<div class="summary-content ellipsis" id="J-summary-content">\r\n<p>\r\n云冈石窟位于中国北部山西省大同市西郊17公里处的武周山南麓，石窟依山开凿，东西绵延1公里。存有主要洞窟45个，大小窟龛252个，石雕造像51000余躯，为中国规模最大的古代石窟群之一，与敦煌莫高窟、洛阳龙门石窟和天水麦积山石窟并称为中国四大石窟艺术宝库。\r\n<p>\r\n1961年被国务院公布为全国首批重点文物保护单位，2001年12月14日被联合国教科文组织列入世界遗产名录，2007年5月8日被国家旅游局评为首批国家5A级旅游景区。</p>\r\n</div>', '', 4);

-- --------------------------------------------------------

--
-- 表的结构 `message`
--

CREATE TABLE IF NOT EXISTS `message` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `mname` varchar(20) NOT NULL,
  `email` varchar(20) NOT NULL,
  `message` text NOT NULL,
  `uid` int(10) NOT NULL,
  `mtime` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `lid` int(10) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=22 ;

--
-- 转存表中的数据 `message`
--

INSERT INTO `message` (`id`, `mname`, `email`, `message`, `uid`, `mtime`, `lid`) VALUES
(1, 'sdasdsad', 'dsadasd', 'sdasfsfdsfdsfsdf', 3, '2017-07-10 02:41:49', 1),
(2, '', '', '百度', 4, '2017-07-11 01:45:44', 2),
(3, '', '', 'fdsfd', 3, '2017-07-11 01:52:24', 2),
(4, '', '', '小傻瓜', 1, '2017-07-11 01:53:11', 2),
(7, '', '', '小傻瓜', 3, '2017-07-11 02:32:57', 2),
(9, '', '', '发红包', 4, '2017-07-11 02:33:24', 2),
(11, '', '', '不开心', 1, '2017-07-11 03:54:14', 1),
(15, '', '', '。。。', 1, '2017-07-11 06:16:09', 1),
(18, '', '', '换个号', 0, '2017-07-11 06:16:43', 1),
(19, '', '', '本宝宝不开心', 0, '2017-07-11 06:18:48', 1),
(21, '', '', '引渡条约', 1, '2017-07-12 01:10:29', 1);

-- --------------------------------------------------------

--
-- 表的结构 `position`
--

CREATE TABLE IF NOT EXISTS `position` (
  `posid` int(20) NOT NULL AUTO_INCREMENT,
  `posname` varchar(100) NOT NULL,
  PRIMARY KEY (`posid`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=5 ;

--
-- 转存表中的数据 `position`
--

INSERT INTO `position` (`posid`, `posname`) VALUES
(1, '轮播图'),
(2, '推荐'),
(4, '推荐文章');

-- --------------------------------------------------------

--
-- 表的结构 `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `uid` int(10) NOT NULL AUTO_INCREMENT,
  `uphonenum` varchar(255) DEFAULT NULL COMMENT '手机号码',
  `unickname` varchar(15) DEFAULT NULL,
  `upass` varchar(255) DEFAULT NULL,
  `uschool` varchar(30) DEFAULT NULL,
  `uname` varchar(10) DEFAULT NULL,
  `ubirthday` date DEFAULT NULL,
  `uhome` varchar(30) DEFAULT NULL,
  `upicture` varchar(255) DEFAULT NULL,
  `usex` varchar(5) NOT NULL,
  `umess` varchar(255) NOT NULL,
  PRIMARY KEY (`uid`),
  UNIQUE KEY `uphonenum` (`uphonenum`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=46 ;

--
-- 转存表中的数据 `user`
--

INSERT INTO `user` (`uid`, `uphonenum`, `unickname`, `upass`, `uschool`, `uname`, `ubirthday`, `uhome`, `upicture`, `usex`, `umess`) VALUES
(1, '18735108906', 'herman', '25d55ad283aa400af464c76d713c07ad', '山大', '王dada', '1992-11-19', '运城', 'upload/17-07-12/6392bf06211220909c73d394fcd7a5a52fafb76e41fe0d21605e89a41c8ec3bd.jpg', '女', '蒹葭苍苍 白露为霜'),
(2, '18735108907', 'jiek', '25d55ad283aa400af464c76d713c07ad', '山大', '张三', '1992-11-14', '临汾', 'http://localhost/git/app/uploadfile/1.jpg', '男', ''),
(3, '18735108908', 'ccc', '25d55ad283aa400af464c76d713c07ad', '山大', '李四', '1991-11-11', '临汾', 'http://localhost/git/app/uploadfile/1496050523.42.jpg', 'man', ''),
(4, '18735108909', 'xiaoming', '25d55ad283aa400af464c76d713c07ad', '北京大学', '李四', '2000-06-28', '山东', 'http://localhost/git/app/uploadfile/1496628903.44.jpg', '男', ''),
(5, '18735108988', 'ccccc', '25d55ad283aa400af464c76d713c07ad', NULL, NULL, NULL, NULL, NULL, '', ''),
(41, '15735166768', '的是否第三个', 'e10adc3949ba59abbe56e057f20f883e', '山大', '小宝宝', '1996-11-06', '运城', 'upload/17-07-12/c5177723b8c433a28e24fbaac14d5a376b014e7bf73d4991449fb15eb9c332f8.jpg', '女', '啥'),
(42, '18834842949', NULL, '003a861d6e54a5319bc9df969fbd23dc', NULL, '小聪子', NULL, NULL, NULL, '', ''),
(43, '13732393333', NULL, 'ce1e92e4e9d4df81b626eb51cdaad1bd', NULL, '大宝宝', NULL, NULL, NULL, '', ''),
(44, '13825672678', NULL, '729071818a426f0cbfc3ef4a6bb8de1a', NULL, '开心', NULL, NULL, NULL, '', ''),
(45, '13465784567', NULL, '96e79218965eb72c92a549dd5a330112', NULL, '湿哒哒所', NULL, NULL, NULL, '', '');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

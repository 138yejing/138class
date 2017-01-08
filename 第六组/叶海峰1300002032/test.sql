-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 2017-01-06 11:36:51
-- 服务器版本： 10.1.13-MariaDB
-- PHP Version: 5.6.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `test`
--

-- --------------------------------------------------------

--
-- 表的结构 `article`
--

CREATE TABLE `article` (
  `id` int(11) NOT NULL,
  `title` varchar(255) CHARACTER SET utf8 NOT NULL,
  `thumb` varchar(255) CHARACTER SET utf8 NOT NULL,
  `create_time` datetime NOT NULL,
  `content` varchar(255) CHARACTER SET utf8 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- 转存表中的数据 `article`
--

INSERT INTO `article` (`id`, `title`, `thumb`, `create_time`, `content`) VALUES
(20, '啦啦啦', 'upload/up_thumb/586712adeae5f.png', '2016-12-31 00:00:00', '&lt;p&gt;手动阀手动阀手动阀&lt;img src=&quot;/ueditor/php/upload/image/20161231/1483149991100939.png&quot; title=&quot;1483149991100939.png&quot; alt=&quot;4.png&quot;/&gt;&lt;/p&gt;'),
(22, '哈哈', 'upload/up_thumb/5867145c03a34.png', '2016-12-31 00:00:00', '&lt;p&gt;山大发送&lt;/p&gt;'),
(23, '元旦', 'upload/up_thumb/586a42c692c4e.png', '2017-01-02 00:00:00', '&lt;p&gt;终于等到你&lt;/p&gt;'),
(24, '怎么没添加车工', 'upload/up_thumb/586a4408bc4ba.png', '2017-01-02 00:00:00', '&lt;p&gt;阿斯顿发射点发生&lt;/p&gt;'),
(25, '苏华胜', 'upload/up_thumb/586a479b5c723.png', '2017-01-02 20:29:15', '&lt;p&gt;啦啦啦啦啦啦&lt;/p&gt;'),
(26, '叶海峰', 'upload/up_thumb/586a47d865fc8.png', '2017-01-02 20:30:16', '&lt;p&gt;sdfljasdfjas分 说法沙发沙发上&lt;/p&gt;'),
(27, '分页', 'upload/up_thumb/586a4804bda4b.png', '2017-01-02 20:31:00', '&lt;p&gt;开始分页咯&lt;/p&gt;&lt;p&gt;&lt;br/&gt;&lt;/p&gt;'),
(28, '茵茵', 'upload/up_thumb/586a4858401d2.png', '2017-01-02 20:32:24', '&lt;p&gt;阿斯顿发射点发生&lt;/p&gt;'),
(43, '啦啦啦', 'upload/up_thumb/586b52863fcfa.png', '2017-01-03 15:28:06', '&lt;p&gt;啦啦啦啦拉拉阿拉蕾&lt;img src=&quot;/ueditor/php/upload/image/20170103/1483428481535487.png&quot; title=&quot;1483428481535487.png&quot; alt=&quot;9.png&quot;/&gt;&lt;/p&gt;');

-- --------------------------------------------------------

--
-- 表的结构 `course`
--

CREATE TABLE `course` (
  `id` int(11) NOT NULL,
  `Cour` varchar(255) CHARACTER SET utf8 NOT NULL,
  `CourName` varchar(255) CHARACTER SET utf8 NOT NULL,
  `Creator` varchar(255) CHARACTER SET utf8 NOT NULL,
  `CourThumb` varchar(255) CHARACTER SET utf8 NOT NULL,
  `Brief` text CHARACTER SET utf8 NOT NULL,
  `StuNum` int(11) NOT NULL,
  `CliRate` int(11) NOT NULL,
  `Status` int(11) NOT NULL,
  `VideoSrc` varchar(255) CHARACTER SET utf8 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- 转存表中的数据 `course`
--

INSERT INTO `course` (`id`, `Cour`, `CourName`, `Creator`, `CourThumb`, `Brief`, `StuNum`, `CliRate`, `Status`, `VideoSrc`) VALUES
(1, '计算机语言', 'C语言', '蒲龙', '', 'C语言是一门通用计算机编程语言，应用广泛。C语言的设计目标是提供一种能以简易的方式编译、处理低级存储器、产生少量的机器码以及不需要任何运行环境支持便能运行的编程语言。', 0, 0, 0, 'http://www.tudou.com/programs/view/ZhfLoR0WjmU/'),
(2, '计算机语言', 'PHP', '普龙', '', 'PHP（外文名:PHP: Hypertext Preprocessor，中文名：“超文本预处理器”）是一种通用开源脚本语言。语法吸收了C语言、Java和Perl的特点，利于学习，使用广泛，主要适用于Web开发领域。PHP 独特的语法混合了C、Java、Perl以及PHP自创的语法。它可以比CGI或者Perl更快速地执行动态网页。用PHP做出的动态页面与其他的编程语言相比，PHP是将程序嵌入到HTML（标准通用标记语言下的一个应用）文档中去执行，执行效率比完全生成HTML标记的CGI要高许多；PHP还可以执行编译后代码，编译可以达到加密和优化代码运行，使代码运行更快。', 0, 0, 0, 'http://www.tudou.com/programs/view/ZhfLoR0WjmU/'),
(3, '计算机语言', 'java', '水镜', '', 'Java是一门面向对象编程语言，不仅吸收了C++语言的各种优点，还摒弃了C++里难以理解的多继承、指针等概念，因此Java语言具有功能强大和简单易用两个特征。Java语言作为静态面向对象编程语言的代表，极好地实现了面向对象理论，允许程序员以优雅的思维方式进行复杂的编程[1]  。', 0, 0, 0, '第8讲：http://www.tudou.com/programs/view/ZhfLoR0WjmU/'),
(4, '计算机语言', 'android', '水镜', '', 'Android是一种基于Linux的自由及开放源代码的操作系统，主要使用于移动设备，如智能手机和平板电脑，由Google公司和开放手机联盟领导及开发。尚未有统一中文名称，中国大陆地区较多人使用“安卓”或“安致”。Android操作系统最初由Andy Rubin开发，主要支持手机。2005年8月由Google收购注资。2007年11月，Google与84家硬件制造商、软件开发商及电信营运商组建开放手机联盟共同研发改良Android系统。随后Google以Apache开源许可证的授权方式，发布了Android的源代码。第一部Android智能手机发布于2008年10月。Android逐渐扩展到平板电脑及其他领域上，如电视、数码相机、游戏机等。2011年第一季度，Android在全球的市场份额首次超过塞班系统，跃居全球第一。 2013年的第四季度，Android平台手机的全球市场份额已经达到78.1%。[1]  2013年09月24日谷歌开发的操作系统Android在迎来了5岁生日，全世界采用这款系统的设备数量已经达到10亿台。', 0, 0, 0, '第8讲：http://www.tudou.com/programs/view/ZhfLoR0WjmU/'),
(5, '计算机语言', 'ios', '乔布斯', '', 'iOS是由苹果公司开发的移动操作系统[1]  。苹果公司最早于2007年1月9日的Macworld大会上公布这个系统，最初是设计给iPhone使用的，后来陆续套用到iPod touch、iPad以及Apple TV等产品上。iOS与苹果的Mac OS X操作系统一样，属于类Unix的商业操作系统。原本这个系统名为iPhone OS，因为iPad，iPhone，iPod touch都使用iPhone OS，所以2010WWDC大会上宣布改名为iOS（iOS为美国Cisco公司网络设备操作系统注册商标，苹果改名已获得Cisco公司授权）。', 0, 0, 0, 'http://www.tudou.com/programs/view/ZhfLoR0WjmU/'),
(6, '计算机语言', 'javascript', '哈哈', '', 'JavaScript一种直译式脚本语言，是一种动态类型、弱类型、基于原型的语言，内置支持类型。它的解释器被称为JavaScript引擎，为浏览器的一部分，广泛用于客户端的脚本语言，最早是在HTML（标准通用标记语言下的一个应用）网页上使用，用来给HTML网页增加动态功能。', 0, 0, 0, 'http://www.tudou.com/programs/view/ZhfLoR0WjmU/'),
(7, '计算机语言', 'C++', '普龙', '', 'C++是C语言的继承，它既可以进行C语言的过程化程序设计，又可以进行以抽象数据类型为特点的基于对象的程序设计，还可以进行以继承和多态为特点的面向对象的程序设计。C++擅长面向对象程序设计的同时，还可以进行基于过程的程序设计，因而C++就适应的问题规模而论，大小由之。', 0, 0, 0, 'http://www.tudou.com/programs/view/ZhfLoR0WjmU/'),
(8, '计算机语言', 'C#', '普龙3', '', 'C#是微软公司发布的一种面向对象的、运行于.NET Framework之上的高级程序设计语言。并定于在微软职业开发者论坛(PDC)上登台亮相。C#是微软公司研究员Anders Hejlsberg的最新成果。C#看起来与Java有着惊人的相似；它包括了诸如单一继承、接口、与Java几乎同样的语法和编译成中间代码再运行的过程。但是C#与Java有着明显的不同，它借鉴了Delphi的一个特点，与COM（组件对象模型）是直接集成的，而且它是微软公司 .NET windows网络框架的主角。', 0, 0, 0, 'http://www.tudou.com/programs/view/ZhfLoR0WjmU/'),
(9, '计算机语言', 'python', '普龙2', '', 'Python[1]  （英国发音：/ˈpaɪθən/ 美国发音：/ˈpaɪθɑːn/）, 是一种面向对象的解释型计算机程序设计语言，由荷兰人Guido van Rossum于1989年发明，第一个公开发行版发行于1991年。', 0, 0, 0, 'http://www.tudou.com/programs/view/ZhfLoR0WjmU/'),
(10, '计算机语言', 'html', '墨迹', '', '超文本标记语言，标准通用标记语言下的一个应用。', 0, 0, 0, 'http://www.tudou.com/programs/view/ZhfLoR0WjmU/'),
(11, '计算机语言', 'jquery', '啦啦啦', '', 'jQuery是一个快速、简洁的JavaScript框架，是继Prototype之后又一个优秀的JavaScript代码库（或JavaScript框架）。jQuery设计的宗旨是“write Less，Do More”，即倡导写更少的代码，做更多的事情。它封装JavaScript常用的功能代码，提供一种简便的JavaScript设计模式，优化HTML文档操作、事件处理、动画设计和Ajax交互。', 0, 0, 0, 'http://www.tudou.com/programs/view/ZhfLoR0WjmU/'),
(12, '计算机语言', 'go', '', '', 'Go是Google开发的一种编译型，可并行化，并具有垃圾回收功能的编程语言。', 0, 0, 0, 'http://www.tudou.com/programs/view/ZhfLoR0WjmU/'),
(13, '金融', '微观经济学', '张三', '', '微观经济学（Microeconomics）(“微观”是希腊文“ μικρο ”的意译，原意是“小")又称个体经济学，小经济学，是现代经济学的一个分支，主要以单个经济单位（单个生产者、单个消费者、单个市场经济活动）作为研究对象分析的一门学科。 微观经济学是研究社会中单个经济单位的经济行为，以及相应的经济变量的单项数值如何决定的经济学说。亦称市场经济学或价格理论。', 0, 0, 0, 'http://www.tudou.com/programs/view/ZhfLoR0WjmU/'),
(14, '金融', '宏观经济学', '张三', '', '宏观经济学，英文名称Macroeconomics，是使用国民收入、经济整体的投资和消费等总体性的统计概念来分析经济运行规律的一个经济学领域。宏观经济学是相对于微观经济学而言的。宏观经济学是约翰·梅纳德·凯恩斯的《就业、利息和货币通论》发表以来快速发展起来的一个经济学分支。', 0, 0, 0, 'http://www.tudou.com/programs/view/ZhfLoR0WjmU/'),
(15, '金融', '货币银行学', '李四', '', '本书突出对金融学基本知识、基本理论的介绍和基本管理技能的传授，力求规范化、准确化、简洁化。在系统介绍成熟的金融理论过程中，紧密结合我国金融体制改革的进程，理论联系实际，及时总结了我国金融改革中的经验教训。本书条理清晰、结构分明、由浅人深、层层推进，介绍了国内外金融理论和实践的最新动态。', 0, 0, 0, 'http://www.tudou.com/programs/view/ZhfLoR0WjmU/'),
(16, '金融', '金融学', '李四', '', '金融学是研究价值判断和价值规律的学科。主要包括传统金融学理论和演化金融学理论两大领域，是现代经济社会的产物。', 0, 0, 0, 'http://www.tudou.com/programs/view/ZhfLoR0WjmU/'),
(17, '管理', '社会管理', '王五', '', '社会管理，外文名称public administration，主要是政府和社会组织为促进社会系统协调运转，对社会系统的组成部分、社会生活的不同领域以及社会发展的各个环节进行组织、协调、指导、规范、监督和纠正社会失灵的过程。社会管理在广义上，是由社会成员组成专门机构对社会的经济、政治和文化事务进行的统筹管理；在狭义上仅指在特定条件下，由权力部门授权对不能划归已有经济、政治和文化部门管理的公共事务进行的专门管理。', 0, 0, 0, 'http://www.tudou.com/programs/view/ZhfLoR0WjmU/'),
(18, '管理', '企业管理', '王五', '', '企业管理（Business Management），是对企业的生产经营活动进行计划、组织、指挥、协调和控制等一系列职能的总称。财务管理是企业管理的最主要内容之一。', 0, 0, 0, 'http://www.tudou.com/programs/view/ZhfLoR0WjmU/');

-- --------------------------------------------------------

--
-- 表的结构 `user_info`
--

CREATE TABLE `user_info` (
  `ID` int(11) NOT NULL,
  `username` varchar(32) NOT NULL,
  `password` varchar(32) NOT NULL,
  `create_time` date NOT NULL,
  `course` text NOT NULL,
  `article` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- 转存表中的数据 `user_info`
--

INSERT INTO `user_info` (`ID`, `username`, `password`, `create_time`, `course`, `article`) VALUES
(91, '', '', '0000-00-00', '社会管理', ''),
(90, '4', '444', '2016-12-29', '社会管理', ''),
(89, 'yinyin', '123', '2016-12-29', '社会管理', ''),
(88, '3', '333', '2016-12-29', '社会管理', ''),
(87, '2', '222', '2016-12-29', '', ''),
(86, '1', '111', '2016-12-29', '社会管理', ''),
(85, '12', '123', '2016-12-29', '社会管理', ''),
(84, '小', '123', '2016-12-29', '社会管理', ''),
(83, '小样', '123', '2016-12-29', '社会管理', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `article`
--
ALTER TABLE `article`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `course`
--
ALTER TABLE `course`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_info`
--
ALTER TABLE `user_info`
  ADD PRIMARY KEY (`ID`);

--
-- 在导出的表使用AUTO_INCREMENT
--

--
-- 使用表AUTO_INCREMENT `article`
--
ALTER TABLE `article`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=45;
--
-- 使用表AUTO_INCREMENT `course`
--
ALTER TABLE `course`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;
--
-- 使用表AUTO_INCREMENT `user_info`
--
ALTER TABLE `user_info`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=92;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

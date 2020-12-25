-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- 主機： 127.0.0.1
-- 產生時間： 2020-11-20 08:47:25
-- 伺服器版本： 10.4.13-MariaDB
-- PHP 版本： 7.4.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- 資料庫： `mydb`
--
CREATE DATABASE IF NOT EXISTS `mydb` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `mydb`;

-- --------------------------------------------------------

--
-- 資料表結構 `bulletin`
--

DROP TABLE IF EXISTS `bulletin`;
CREATE TABLE `bulletin` (
  `bid` int(11) NOT NULL,
  `type` int(11) NOT NULL COMMENT '1.系上公告2.招生訊息\r\n3.企業徵才',
  `title` varchar(200) NOT NULL,
  `content` varchar(2000) NOT NULL,
  `time` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- 傾印資料表的資料 `bulletin`
--

INSERT INTO `bulletin` (`bid`, `type`, `title`, `content`, `time`) VALUES
(1, 1, '109-1明新科大TOEIC校園考試報名至11/18截止', '109-1 TOEIC校園考試通知\r\n作者 吳紘安 \r\n109-1 明新科大 TOEIC校園考試 考試資訊\r\n報名時間：109/11/11~109/11/20\r\n考試日期：109/12/16 13:30', '2020-10-23'),
(2, 2, '109學年度第二學期轉學生招生入學', '一、招生網頁：http://webs.must.edu.tw/ocmust104/index.php\r\n二、簡章下載：http://webs.must.edu.tw/ocmust104/index.php/2018-03-04-15-19-32\r\n三、報名時間：109/12/09(三) 09:00 - 110/01/15(五) 12:00止。', '2020-11-13'),
(3, 3, '緯創軟體股份有限公司--招募短期助理工程師', '職務說明如下\r\n\r\n工作地點：新竹科學園區\r\n需求人數：8人，負責 Wins系統升級\r\n相關科系：需資工或資管科系，熟悉電腦重灌流程者尤佳\r\n實習期間：2020/11/2-2020/12/31，週一至週五09:00-18:00\r\n', '2020-10-28'),
(4, 1, '109-2日間部、進修部、進專院-預選開放時間', ' 109-2 各學制課程預選時間公告\r\n【日間部】109/10/30(五) 13:10開始，109/11/13(五) 17:00:00結束\r\n【進修部】109/10/30(五) 18:30開始，109/11/13(五) 18:30:00結束\r\n【進專院】109/10/30(五) 08:30開始，109/11/13(五) 17:30:00結束', '2020-10-23'),
(5, 2, '109學年度境外臺生因應疫情返臺就學銜接專案計畫(第二梯次)單獨招生', '一、招生網站：http://webs.must.edu.tw/ocmust119/\r\n二、報名日期：109年11月25日（星期三）上午9：00起至109年12月9日（星期三）下午16：00止。\r\n三、報名方式：採電子郵件報名(email: iris2005@must.edu.tw)。', '2020-11-04');

-- --------------------------------------------------------

--
-- 資料表結構 `user`
--

DROP TABLE IF EXISTS `user`;
CREATE TABLE `user` (
  `id` varchar(40) NOT NULL,
  `pwd` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- 傾印資料表的資料 `user`
--

INSERT INTO `user` (`id`, `pwd`) VALUES
('john', 'john1234'),
('mary', 'mary1234');

--
-- 已傾印資料表的索引
--

--
-- 資料表索引 `bulletin`
--
ALTER TABLE `bulletin`
  ADD PRIMARY KEY (`bid`);

--
-- 在傾印的資料表使用自動遞增(AUTO_INCREMENT)
--

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `bulletin`
--
ALTER TABLE `bulletin`
  MODIFY `bid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

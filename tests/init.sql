SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
  SET time*t` (
  `id` int(11) NOT NULL,
  `name` text NOT NULL COMMENT '单位名称',
  `create_time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `update_time` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

INSERT INTO `department` (`id`, `name`, `create_time`, `update_time`) VALUES
(1, '彭康1123', '2017-04-06 15:26:26', NULL),
(2, '励志456', '2017-04-06 15:26:26', NULL),
(3, '南洋', '2017-04-06 15:26:26', NULL),
(4, '仲英', '2017-04-06 15:26:26', NULL),
(5, '文治', '2017-04-06 15:26:26', NULL),
(6, '崇实', '2017-04-06 15:26:26', NULL),
(7, '宗濂', '2017-04-06 15:26:26', NULL),
(8, '启德', '2017-04-06 15:26:26', NULL),
(9, '继续教育', '2017-04-06 15:26:26', NULL),
(10, '国际学院', '2017-04-06 15:26:26', NULL),
(11, '人居学院', '2017-04-06 15:26:26', NULL),
(12, '数学学院', '2017-04-06 15:26:26', NULL),
(13, '化工学院', '2017-04-06 15:26:26', NULL),
(14, '电气学院', '2017-04-06 15:26:26', NULL),
(15, '人文学院', '2017-04-06 15:26:26', NULL),
(16, '管理学院', '2017-04-06 15:26:26', NULL),
(17, '能动学院', '2017-04-06 15:26:26', NULL),
(18, '经金学院', '2017-04-06 15:26:26', NULL),
(19, '材料学院', '2017-04-06 15:26:26', NULL),
(20, '生命学院', '2017-04-06 15:26:26', NULL),
(21, '电信学院', '2017-04-06 15:26:26', NULL),
(22, '软件学院', '2017-04-06 15:26:26', NULL),
(23, '机械学院', '2017-04-06 15:26:26', NULL),
(24, '航天学院', '2017-04-06 15:26:26', NULL),
(25, '外语学院', '2017-04-06 15:26:26', NULL);

CREATE TABLE `game` (
  `id` int(11) NOT NULL,
  `name` text NOT NULL COMMENT '比赛名称',
  `begin_time` datetime NOT NULL COMMENT '开始时间',
  `create_time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `update_time` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

INSERT INTO `game` (`id`, `name`, `begin_time`, `create_time`, `update_time`) VALUES
(1, '校级领导60m拍篮球跑', '2017-04-15 10:00:00', '2017-04-06 15:33:28', NULL),
(2, '研究生女子组100米栏', '2017-04-15 10:10:00', '2017-04-06 15:33:28', NULL),
(3, '本科生女子组100米栏', '2017-04-15 10:20:00', '2017-04-06 15:33:28', NULL),
(4, '教工男子组趣味6*60m抱篮球接力', '2017-04-15 10:30:00', '2017-04-06 15:33:28', NULL),
(5, '本科生女子组100m预赛', '2017-04-15 10:35:00', '2017-04-06 15:33:28', NULL),
(6, '研究生女子组100m预赛', '2017-04-15 10:50:00', '2017-04-06 15:33:28', NULL),
(7, '教工女子趣味拍篮球60m', '2017-04-15 10:55:00', '2017-04-06 15:33:28', NULL),
(8, '研究生男子组100m预赛', '2017-04-15 11:00:00', '2017-04-06 15:33:28', NULL),
(9, '本科生男子组100m预赛', '2017-04-15 11:15:00', '2017-04-06 15:33:28', NULL),
(10, '研究生女子组400m', '2017-04-15 11:30:00', '2017-04-06 15:33:28', NULL),
(11, '研究生男子组400m', '2017-04-15 11:50:00', '2017-04-06 15:33:28', NULL),
(12, '本科生男子组400m', '2017-04-15 12:00:00', '2017-04-06 15:33:28', NULL);


ALTER TABLE `department`
  ADD PRIMARY KEY (`id`);

ALTER TABLE `game`
  ADD PRIMARY KEY (`id`);


ALTER TABLE `department`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;
ALTER TABLE `game`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
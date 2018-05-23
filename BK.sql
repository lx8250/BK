/*
Navicat MySQL Data Transfer

Source Server         : 本地
Source Server Version : 50553
Source Host           : localhost:3306
Source Database       : bk

Target Server Type    : MYSQL
Target Server Version : 50553
File Encoding         : 65001

Date: 2018-05-23 17:36:23
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for `bk_about_blog`
-- ----------------------------
DROP TABLE IF EXISTS `bk_about_blog`;
CREATE TABLE `bk_about_blog` (
  `blog_id` mediumint(8) NOT NULL COMMENT '用户ID',
  `blog_keyword` varchar(255) NOT NULL COMMENT '博客关键字',
  `blog_description` varchar(255) NOT NULL COMMENT '博客描述',
  `blog_name` varchar(36) NOT NULL COMMENT '博客名称',
  `blog_title` varchar(128) NOT NULL COMMENT '博客标题',
  PRIMARY KEY (`blog_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of bk_about_blog
-- ----------------------------

-- ----------------------------
-- Table structure for `bk_ad`
-- ----------------------------
DROP TABLE IF EXISTS `bk_ad`;
CREATE TABLE `bk_ad` (
  `ad_id` smallint(5) NOT NULL AUTO_INCREMENT COMMENT '自增ID',
  `position_id` smallint(5) NOT NULL COMMENT '0,站外广告;从1开始代表的是该广告所处的广告位,同表ad_postition中的字段position_id的值',
  `media_type` tinyint(3) NOT NULL DEFAULT '0' COMMENT '广告类型,0图片;1flash;2代码3文字',
  `ad_name` varchar(60) NOT NULL COMMENT '该条广告记录的广告名称',
  `ad_link` varchar(255) NOT NULL COMMENT '广告链接地址',
  `ad_code` text NOT NULL COMMENT '广告链接的表现,文字广告就是文字或图片和flash就是它们的地址',
  `start_time` int(13) NOT NULL DEFAULT '0' COMMENT '广告开始时间',
  `end_time` int(13) NOT NULL DEFAULT '0' COMMENT '广告结束时间',
  `link_man` varchar(60) NOT NULL COMMENT '广告联系人',
  `link_email` varchar(60) NOT NULL COMMENT '广告联系人的邮箱',
  `link_phone` varchar(60) NOT NULL COMMENT '广告联系人得电话',
  `click_count` mediumint(8) NOT NULL DEFAULT '0' COMMENT '广告点击次数',
  `enabled` tinyint(3) NOT NULL DEFAULT '1' COMMENT '该广告是否关闭;1开启; 0关闭; 关闭后广告将不再有效',
  PRIMARY KEY (`ad_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of bk_ad
-- ----------------------------

-- ----------------------------
-- Table structure for `bk_admin`
-- ----------------------------
DROP TABLE IF EXISTS `bk_admin`;
CREATE TABLE `bk_admin` (
  `user_id` mediumint(8) NOT NULL AUTO_INCREMENT COMMENT '用户ID',
  `user_name` varchar(32) NOT NULL COMMENT '用户名',
  `user_pwd` varchar(32) NOT NULL COMMENT '用户密码',
  `user_email` varchar(64) NOT NULL COMMENT '用户EMAIL地址',
  PRIMARY KEY (`user_id`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of bk_admin
-- ----------------------------
INSERT INTO `bk_admin` VALUES ('3', 'admin', 'e10adc3949ba59abbe56e057f20f883e', '123456@123.com');

-- ----------------------------
-- Table structure for `bk_article`
-- ----------------------------
DROP TABLE IF EXISTS `bk_article`;
CREATE TABLE `bk_article` (
  `article_id` smallint(5) NOT NULL AUTO_INCREMENT COMMENT '日志自增ID号',
  `article_name` varchar(128) NOT NULL COMMENT '文章名称',
  `article_time` int(13) NOT NULL COMMENT '发布时间',
  `article_ip` varchar(15) NOT NULL COMMENT '发布IP',
  `article_click` int(10) NOT NULL COMMENT '查看人数',
  `sort_article_id` mediumint(8) NOT NULL COMMENT '所属分类',
  `user_id` mediumint(8) NOT NULL COMMENT '所属用户ID',
  `type_id` tinyint(3) NOT NULL DEFAULT '1' COMMENT '栏目ID',
  `article_type` int(13) NOT NULL DEFAULT '1' COMMENT '文章的模式:0为私有，1为公开，2为仅好友查看',
  `article_content` text NOT NULL COMMENT '文章内容',
  `article_up` tinyint(3) NOT NULL DEFAULT '0' COMMENT '是否置顶:0为否，1为是',
  `article_support` tinyint(3) NOT NULL DEFAULT '0' COMMENT '是否博主推荐:0为否，1为是',
  PRIMARY KEY (`article_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of bk_article
-- ----------------------------

-- ----------------------------
-- Table structure for `bk_article_sort`
-- ----------------------------
DROP TABLE IF EXISTS `bk_article_sort`;
CREATE TABLE `bk_article_sort` (
  `sort_article_id` mediumint(8) NOT NULL AUTO_INCREMENT COMMENT '文章自增ID',
  `user_id` mediumint(8) NOT NULL COMMENT '该分类所属用户',
  `sort_article_name` varchar(60) NOT NULL COMMENT '分类名称',
  PRIMARY KEY (`sort_article_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of bk_article_sort
-- ----------------------------

-- ----------------------------
-- Table structure for `bk_friend`
-- ----------------------------
DROP TABLE IF EXISTS `bk_friend`;
CREATE TABLE `bk_friend` (
  `f_id` smallint(5) NOT NULL AUTO_INCREMENT COMMENT '自增ID',
  `user_id` mediumint(8) NOT NULL COMMENT '用户ID',
  `friend_id` mediumint(8) NOT NULL COMMENT '好友ID',
  PRIMARY KEY (`f_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of bk_friend
-- ----------------------------

-- ----------------------------
-- Table structure for `bk_friendly_link`
-- ----------------------------
DROP TABLE IF EXISTS `bk_friendly_link`;
CREATE TABLE `bk_friendly_link` (
  `link_id` smallint(5) NOT NULL AUTO_INCREMENT COMMENT '友情链接自增ID',
  `link_name` varchar(60) NOT NULL COMMENT '友情链接名称',
  `link_url` varchar(255) NOT NULL COMMENT '链接地址',
  `link_logo` varchar(255) NOT NULL COMMENT 'LOGO图片',
  `show_order` tinyint(3) NOT NULL COMMENT '在页面显示的顺序',
  PRIMARY KEY (`link_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of bk_friendly_link
-- ----------------------------

-- ----------------------------
-- Table structure for `bk_message`
-- ----------------------------
DROP TABLE IF EXISTS `bk_message`;
CREATE TABLE `bk_message` (
  `stay_id` smallint(5) NOT NULL AUTO_INCREMENT COMMENT '留言表自增ID',
  `user_name` varchar(255) NOT NULL COMMENT '用户名',
  `message_content` varchar(255) NOT NULL COMMENT '留言内容',
  `message_stay_time` datetime NOT NULL COMMENT '留言时间',
  `check` smallint(2) NOT NULL DEFAULT '0' COMMENT '留言审核 0：不成功，1：成功，2：精选留言',
  PRIMARY KEY (`stay_id`)
) ENGINE=MyISAM AUTO_INCREMENT=17 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of bk_message
-- ----------------------------
INSERT INTO `bk_message` VALUES ('3', 'admin', '你好世界', '0000-00-00 00:00:00', '0');
INSERT INTO `bk_message` VALUES ('4', 'admin', '你好世界', '0000-00-00 00:00:00', '0');
INSERT INTO `bk_message` VALUES ('5', 'admin', '哈哈哈哈', '0000-00-00 00:00:00', '0');
INSERT INTO `bk_message` VALUES ('6', 'admin', '哈哈哈哈', '0000-00-00 00:00:00', '0');
INSERT INTO `bk_message` VALUES ('7', 'admin', '你好世界', '0000-00-00 00:00:00', '0');
INSERT INTO `bk_message` VALUES ('8', 'admin', '最后一次了', '0000-00-00 00:00:00', '0');
INSERT INTO `bk_message` VALUES ('9', 'admin', 'nihaoshijie', '0000-00-00 00:00:00', '0');
INSERT INTO `bk_message` VALUES ('10', 'admin', 'dsada', '0000-00-00 00:00:00', '0');
INSERT INTO `bk_message` VALUES ('11', 'admin', 'dsadadsad', '0000-00-00 00:00:00', '0');
INSERT INTO `bk_message` VALUES ('12', 'admin', 'dsada', '0000-00-00 00:00:00', '0');
INSERT INTO `bk_message` VALUES ('13', 'admin', 'sdada', '2018-05-22 00:00:00', '0');
INSERT INTO `bk_message` VALUES ('14', 'admin', 'dsadadsa', '2018-05-22 00:00:00', '0');
INSERT INTO `bk_message` VALUES ('15', 'admin', 'sadsadsa', '2018-05-22 16:44:07', '0');
INSERT INTO `bk_message` VALUES ('16', 'admin', 'nihao', '2018-05-23 17:14:12', '0');

-- ----------------------------
-- Table structure for `bk_phone_message`
-- ----------------------------
DROP TABLE IF EXISTS `bk_phone_message`;
CREATE TABLE `bk_phone_message` (
  `phone_id` mediumint(8) NOT NULL AUTO_INCREMENT COMMENT '自增ID号',
  `phone_num` varchar(12) NOT NULL COMMENT '用户手机号码',
  `contents` varchar(255) NOT NULL COMMENT '发送内容',
  `send_time` int(13) NOT NULL COMMENT '发送时间',
  `user_id` mediumint(8) NOT NULL COMMENT '用户ID',
  PRIMARY KEY (`phone_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of bk_phone_message
-- ----------------------------

-- ----------------------------
-- Table structure for `bk_photos`
-- ----------------------------
DROP TABLE IF EXISTS `bk_photos`;
CREATE TABLE `bk_photos` (
  `photo_id` mediumint(8) NOT NULL AUTO_INCREMENT COMMENT '相片ID',
  `photo_name` varchar(255) NOT NULL COMMENT '相片名称',
  `photo_src` varchar(255) NOT NULL COMMENT '图片路径',
  `photo_description` varchar(255) NOT NULL COMMENT '图片描述',
  `user_id` mediumint(8) NOT NULL COMMENT '所属用户ID',
  `sort_id` mediumint(8) NOT NULL COMMENT '所属相册ID',
  `upload_time` int(13) NOT NULL COMMENT '图片上传时间',
  `upload_ip` varchar(15) NOT NULL COMMENT '图片操作上传IP地址',
  PRIMARY KEY (`photo_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of bk_photos
-- ----------------------------

-- ----------------------------
-- Table structure for `bk_photo_sort`
-- ----------------------------
DROP TABLE IF EXISTS `bk_photo_sort`;
CREATE TABLE `bk_photo_sort` (
  `sort_img_id` mediumint(8) NOT NULL AUTO_INCREMENT COMMENT '相册ID',
  `sort_img_name` varchar(20) NOT NULL COMMENT '相册名',
  `sort_img_type` varchar(20) NOT NULL COMMENT '展示方式 0->仅主人可见,1->输入密码即可查看,2->仅好友能查看,3->回答问题即可查看',
  `img_password` varchar(32) NOT NULL COMMENT '查看密码',
  `user_id` mediumint(8) NOT NULL COMMENT '所属用户ID',
  `img_sort_question` varchar(255) NOT NULL COMMENT '访问问题',
  `img_sort_answer` varchar(128) NOT NULL COMMENT '访问问题的答案',
  `type_id` int(3) NOT NULL DEFAULT '1' COMMENT '默认1表示相册板块',
  `top_pic_src` mediumint(8) NOT NULL COMMENT '封面图片的路径',
  PRIMARY KEY (`sort_img_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of bk_photo_sort
-- ----------------------------

-- ----------------------------
-- Table structure for `bk_power_list`
-- ----------------------------
DROP TABLE IF EXISTS `bk_power_list`;
CREATE TABLE `bk_power_list` (
  `p_id` int(10) NOT NULL AUTO_INCREMENT COMMENT '自增ID',
  `power_id` int(10) NOT NULL COMMENT '权限ID',
  `power_name` varchar(36) NOT NULL COMMENT '权限描述',
  PRIMARY KEY (`p_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of bk_power_list
-- ----------------------------

-- ----------------------------
-- Table structure for `bk_secret_message`
-- ----------------------------
DROP TABLE IF EXISTS `bk_secret_message`;
CREATE TABLE `bk_secret_message` (
  `secret_id` mediumint(8) NOT NULL AUTO_INCREMENT COMMENT '自增私信ID',
  `send_id` mediumint(8) NOT NULL COMMENT '发信者ID',
  `receive_id` mediumint(8) NOT NULL COMMENT '收信者ID',
  `message_topic` varchar(64) NOT NULL COMMENT '私信标题',
  `message_content` varchar(255) NOT NULL COMMENT '私信内容',
  PRIMARY KEY (`secret_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of bk_secret_message
-- ----------------------------

-- ----------------------------
-- Table structure for `bk_shuoshuo`
-- ----------------------------
DROP TABLE IF EXISTS `bk_shuoshuo`;
CREATE TABLE `bk_shuoshuo` (
  `shuo_id` mediumint(8) NOT NULL AUTO_INCREMENT COMMENT '说说记录ID',
  `user_id` mediumint(8) NOT NULL COMMENT '用户ID',
  `shuo_time` int(13) NOT NULL DEFAULT '0' COMMENT '发布时间',
  `shuo_ip` varchar(15) NOT NULL COMMENT '说说发布时的IP地址',
  `shuoshuo` varchar(255) NOT NULL COMMENT '说说内容',
  `type_id` tinyint(3) NOT NULL DEFAULT '3' COMMENT '栏目ID,默认为3',
  PRIMARY KEY (`shuo_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of bk_shuoshuo
-- ----------------------------

-- ----------------------------
-- Table structure for `bk_system_message`
-- ----------------------------
DROP TABLE IF EXISTS `bk_system_message`;
CREATE TABLE `bk_system_message` (
  `system_id` mediumint(8) NOT NULL AUTO_INCREMENT COMMENT '系统通知ID',
  `send_id` mediumint(8) NOT NULL COMMENT '接受者ID',
  `group_id` tinyint(3) NOT NULL COMMENT '用户组ID',
  `send_default` mediumint(8) NOT NULL COMMENT '1时发送所有用户，0时则不采用',
  `system_topic` varchar(60) NOT NULL COMMENT '通知内容',
  `system_content` varchar(255) NOT NULL COMMENT '通知内容',
  PRIMARY KEY (`system_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of bk_system_message
-- ----------------------------

-- ----------------------------
-- Table structure for `bk_user`
-- ----------------------------
DROP TABLE IF EXISTS `bk_user`;
CREATE TABLE `bk_user` (
  `user_id` int(11) NOT NULL AUTO_INCREMENT COMMENT '用户表ID',
  `user_name` varchar(255) NOT NULL COMMENT '用户名',
  `user_pwd` varchar(255) NOT NULL COMMENT '用户密码',
  `user_email` varchar(255) NOT NULL COMMENT '用户邮箱',
  `date_time` datetime NOT NULL COMMENT '用户注册时间',
  PRIMARY KEY (`user_id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of bk_user
-- ----------------------------
INSERT INTO `bk_user` VALUES ('1', 'admin', 'e10adc3949ba59abbe56e057f20f883e', '123456@123.com', '2018-05-23 12:01:55');
INSERT INTO `bk_user` VALUES ('2', 'admin', 'e10adc3949ba59abbe56e057f20f883e', '123@123', '2018-05-16 12:02:00');

-- ----------------------------
-- Table structure for `bk_user_attention`
-- ----------------------------
DROP TABLE IF EXISTS `bk_user_attention`;
CREATE TABLE `bk_user_attention` (
  `a_id` smallint(5) NOT NULL AUTO_INCREMENT COMMENT '自增ID',
  `user_id` mediumint(8) NOT NULL COMMENT '用户ID',
  `attention_id` mediumint(8) NOT NULL COMMENT '关注ID',
  PRIMARY KEY (`a_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of bk_user_attention
-- ----------------------------

-- ----------------------------
-- Table structure for `bk_user_comment`
-- ----------------------------
DROP TABLE IF EXISTS `bk_user_comment`;
CREATE TABLE `bk_user_comment` (
  `c_id` mediumint(8) NOT NULL AUTO_INCREMENT COMMENT '评论自增ID号',
  `user_id` mediumint(8) NOT NULL COMMENT '收到评论的用户ID',
  `type_id` tinyint(3) NOT NULL COMMENT '评论栏目ID',
  `commit_id` mediumint(8) NOT NULL COMMENT '评论内容的ID',
  `commit_content` varchar(255) NOT NULL COMMENT '评论内容',
  `commit_user_id` mediumint(8) NOT NULL COMMENT '评论者ID',
  `commit_time` int(13) NOT NULL COMMENT '评论时间',
  `commit_ip` varchar(15) NOT NULL COMMENT '评论时的IP地址',
  PRIMARY KEY (`c_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of bk_user_comment
-- ----------------------------

-- ----------------------------
-- Table structure for `bk_user_group`
-- ----------------------------
DROP TABLE IF EXISTS `bk_user_group`;
CREATE TABLE `bk_user_group` (
  `g_id` tinyint(3) NOT NULL AUTO_INCREMENT COMMENT '自增ID号',
  `group_id` tinyint(3) NOT NULL COMMENT '用户组ID',
  `group_name` varchar(20) NOT NULL COMMENT '用户组名',
  `group_power` varchar(20) NOT NULL COMMENT '用户权限',
  PRIMARY KEY (`g_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of bk_user_group
-- ----------------------------

-- ----------------------------
-- Table structure for `bk_user_loginip`
-- ----------------------------
DROP TABLE IF EXISTS `bk_user_loginip`;
CREATE TABLE `bk_user_loginip` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` varchar(255) NOT NULL COMMENT '用户id',
  `user_ip` varchar(255) DEFAULT NULL COMMENT '用户登录的IP地址',
  `address` varchar(255) DEFAULT NULL COMMENT '登录地点',
  `addtime` datetime NOT NULL COMMENT '登陆时间',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of bk_user_loginip
-- ----------------------------
INSERT INTO `bk_user_loginip` VALUES ('1', '0', '::1', '', '2018-05-22 16:00:51');
INSERT INTO `bk_user_loginip` VALUES ('2', '0', '::1', '', '2018-05-22 16:37:28');
INSERT INTO `bk_user_loginip` VALUES ('3', '1', '::1', '', '2018-05-23 17:14:03');

-- ----------------------------
-- Table structure for `bk_user_rank`
-- ----------------------------
DROP TABLE IF EXISTS `bk_user_rank`;
CREATE TABLE `bk_user_rank` (
  `rank_id` mediumint(5) NOT NULL AUTO_INCREMENT COMMENT '自增ID',
  `user_rank_id` smallint(5) NOT NULL COMMENT '等级ID',
  `rank_mark` mediumint(6) NOT NULL COMMENT '等级积分',
  `rank_name` varchar(32) NOT NULL COMMENT '等级名称',
  PRIMARY KEY (`rank_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of bk_user_rank
-- ----------------------------

-- ----------------------------
-- Table structure for `bk_user_visit`
-- ----------------------------
DROP TABLE IF EXISTS `bk_user_visit`;
CREATE TABLE `bk_user_visit` (
  `id` int(11) NOT NULL AUTO_INCREMENT COMMENT '访客表id',
  `visit_time` datetime NOT NULL COMMENT '访问时间',
  `visit_ip` varchar(255) NOT NULL COMMENT '访问者ip',
  `visit_address` varchar(255) DEFAULT NULL COMMENT '访问者地址',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=9 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of bk_user_visit
-- ----------------------------
INSERT INTO `bk_user_visit` VALUES ('1', '2018-05-23 15:58:34', '::1', '');
INSERT INTO `bk_user_visit` VALUES ('2', '2018-05-23 17:13:29', '::1', '');
INSERT INTO `bk_user_visit` VALUES ('3', '2018-05-23 17:13:37', '::1', '');
INSERT INTO `bk_user_visit` VALUES ('4', '2018-05-23 17:13:41', '::1', '');
INSERT INTO `bk_user_visit` VALUES ('5', '2018-05-23 17:14:06', '::1', '');
INSERT INTO `bk_user_visit` VALUES ('6', '2018-05-23 17:18:53', '::1', '');
INSERT INTO `bk_user_visit` VALUES ('7', '2018-05-23 17:18:57', '::1', '');
INSERT INTO `bk_user_visit` VALUES ('8', '2018-05-23 17:19:02', '::1', '');

-- ----------------------------
-- Table structure for `bk_visitor`
-- ----------------------------
DROP TABLE IF EXISTS `bk_visitor`;
CREATE TABLE `bk_visitor` (
  `v_id` mediumint(8) NOT NULL AUTO_INCREMENT COMMENT '访客记录ID',
  `visitor_id` mediumint(8) NOT NULL COMMENT '访客ID',
  `visitor_time` int(13) NOT NULL COMMENT '来访时间',
  `user_id` mediumint(8) NOT NULL COMMENT '被访用户ID',
  `visitor_ip` varchar(15) NOT NULL COMMENT '访客IP地址',
  `type_id` int(3) NOT NULL COMMENT '访问板块ID',
  `where_id` mediumint(8) NOT NULL COMMENT '查看某板块的某个子项目，如查看相册板块的第3个相册，该ID对应该相册的ID号',
  PRIMARY KEY (`v_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of bk_visitor
-- ----------------------------

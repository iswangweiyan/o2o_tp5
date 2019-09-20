/*
Navicat MySQL Data Transfer

Source Server         : localhost_wangyu
Source Server Version : 50714
Source Host           : localhost:3306
Source Database       : imooc_o2o

Target Server Type    : MYSQL
Target Server Version : 50714
File Encoding         : 65001

Date: 2017-05-11 19:32:13
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for o2o_category
-- ----------------------------
DROP TABLE IF EXISTS `o2o_category`;
CREATE TABLE `o2o_category` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(50) NOT NULL DEFAULT '',
  `parent_id` int(10) unsigned NOT NULL DEFAULT '0',
  `listorder` int(8) unsigned NOT NULL DEFAULT '0',
  `status` tinyint(1) NOT NULL DEFAULT '0',
  `create_time` int(11) unsigned NOT NULL DEFAULT '0',
  `update_time` int(11) unsigned NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`),
  KEY `parent_id` (`parent_id`)
) ENGINE=InnoDB AUTO_INCREMENT=21 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of o2o_category
-- ----------------------------
INSERT INTO `o2o_category` VALUES ('1', '美食', '0', '10', '1', '1491992020', '1492652898');
INSERT INTO `o2o_category` VALUES ('2', '旅游', '0', '12', '1', '1491992054', '1492652975');
INSERT INTO `o2o_category` VALUES ('3', '飞机', '2', '0', '1', '1491992107', '0');
INSERT INTO `o2o_category` VALUES ('5', '阅读', '0', '23', '-1', '1491992493', '1492072867');
INSERT INTO `o2o_category` VALUES ('6', '麻辣烫', '1', '0', '1', '1491995365', '1491995365');
INSERT INTO `o2o_category` VALUES ('8', '拉面', '1', '0', '1', '1491995777', '1491995777');
INSERT INTO `o2o_category` VALUES ('9', '电影', '0', '11', '1', '1492060639', '1492652917');
INSERT INTO `o2o_category` VALUES ('10', '文艺电影', '9', '6', '1', '1492060659', '1492071287');
INSERT INTO `o2o_category` VALUES ('11', '汽车', '0', '9', '-1', '1492075333', '1493117146');
INSERT INTO `o2o_category` VALUES ('12', '宝马', '11', '0', '1', '1492075357', '1492075357');
INSERT INTO `o2o_category` VALUES ('13', '文学名著', '5', '0', '1', '1492078888', '1492078888');
INSERT INTO `o2o_category` VALUES ('14', '哈利波特', '9', '0', '1', '1492079999', '1492079999');
INSERT INTO `o2o_category` VALUES ('15', '休闲', '0', '0', '1', '1492777548', '1492777548');
INSERT INTO `o2o_category` VALUES ('16', '娱乐', '0', '0', '1', '1492777558', '1492777558');
INSERT INTO `o2o_category` VALUES ('17', '酒店', '0', '5', '1', '1492777621', '1492777633');
INSERT INTO `o2o_category` VALUES ('18', '西餐', '1', '0', '1', '1492961252', '1492961252');
INSERT INTO `o2o_category` VALUES ('19', '自助烤肉', '1', '0', '1', '1492961810', '1492961810');
INSERT INTO `o2o_category` VALUES ('20', '火锅', '1', '0', '1', '1492962070', '1492962070');

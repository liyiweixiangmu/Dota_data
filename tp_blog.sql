/*
Navicat MySQL Data Transfer

Source Server         : localhost_3306
Source Server Version : 50553
Source Host           : localhost:3306
Source Database       : tp_blog

Target Server Type    : MYSQL
Target Server Version : 50553
File Encoding         : 65001

Date: 2018-04-28 15:18:31
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for `hero`
-- ----------------------------
DROP TABLE IF EXISTS `hero`;
CREATE TABLE `hero` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `hero_id` int(11) NOT NULL,
  `hero_name` varchar(10) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=248 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of hero
-- ----------------------------
INSERT INTO `hero` VALUES ('133', '14', '帕吉');
INSERT INTO `hero` VALUES ('134', '74', '祈求者');
INSERT INTO `hero` VALUES ('135', '88', '司夜刺客');
INSERT INTO `hero` VALUES ('136', '100', '巨牙海民');
INSERT INTO `hero` VALUES ('137', '19', '小小');
INSERT INTO `hero` VALUES ('138', '86', '拉比克');
INSERT INTO `hero` VALUES ('139', '69', '末日使者');
INSERT INTO `hero` VALUES ('140', '97', '马格纳斯');
INSERT INTO `hero` VALUES ('141', '62', '赏金猎人');
INSERT INTO `hero` VALUES ('142', '11', '影魔');
INSERT INTO `hero` VALUES ('143', '7', '撼地者');
INSERT INTO `hero` VALUES ('144', '23', '昆卡');
INSERT INTO `hero` VALUES ('145', '35', '狙击手');
INSERT INTO `hero` VALUES ('146', '108', '孽主');
INSERT INTO `hero` VALUES ('147', '111', '神谕者');
INSERT INTO `hero` VALUES ('148', '50', '戴泽');
INSERT INTO `hero` VALUES ('149', '64', '杰奇洛');
INSERT INTO `hero` VALUES ('150', '79', '暗影恶魔');
INSERT INTO `hero` VALUES ('151', '104', '军团指挥官');
INSERT INTO `hero` VALUES ('152', '20', '复仇之魂');
INSERT INTO `hero` VALUES ('153', '103', '上古巨神');
INSERT INTO `hero` VALUES ('154', '39', '痛苦女王');
INSERT INTO `hero` VALUES ('155', '25', '莉娜');
INSERT INTO `hero` VALUES ('156', '22', '宙斯');
INSERT INTO `hero` VALUES ('157', '26', '莱恩');
INSERT INTO `hero` VALUES ('158', '28', '斯拉达');
INSERT INTO `hero` VALUES ('159', '3', '祸乱之源');
INSERT INTO `hero` VALUES ('160', '30', '巫医');
INSERT INTO `hero` VALUES ('161', '32', '力丸');
INSERT INTO `hero` VALUES ('162', '21', '风行者');
INSERT INTO `hero` VALUES ('163', '15', '剃刀');
INSERT INTO `hero` VALUES ('164', '41', '虚空假面');
INSERT INTO `hero` VALUES ('165', '42', '冥魂大帝');
INSERT INTO `hero` VALUES ('166', '44', '幻影刺客');
INSERT INTO `hero` VALUES ('167', '48', '露娜');
INSERT INTO `hero` VALUES ('168', '49', '龙骑士');
INSERT INTO `hero` VALUES ('169', '120', '石鳞剑士');
INSERT INTO `hero` VALUES ('170', '52', '拉席克');
INSERT INTO `hero` VALUES ('171', '59', '哈斯卡');
INSERT INTO `hero` VALUES ('172', '12', '幻影长矛手');
INSERT INTO `hero` VALUES ('173', '119', '邪影芳灵');
INSERT INTO `hero` VALUES ('174', '67', '幽鬼');
INSERT INTO `hero` VALUES ('175', '114', '齐天大圣');
INSERT INTO `hero` VALUES ('176', '110', '凤凰');
INSERT INTO `hero` VALUES ('177', '71', '裂魂人');
INSERT INTO `hero` VALUES ('178', '72', '矮人直升机');
INSERT INTO `hero` VALUES ('179', '73', '炼金术师');
INSERT INTO `hero` VALUES ('180', '109', '恐怖利刃');
INSERT INTO `hero` VALUES ('181', '76', '殁境神蚀者');
INSERT INTO `hero` VALUES ('182', '78', '酒仙');
INSERT INTO `hero` VALUES ('183', '107', '大地之灵');
INSERT INTO `hero` VALUES ('184', '8', '主宰');
INSERT INTO `hero` VALUES ('185', '80', '德鲁伊');
INSERT INTO `hero` VALUES ('186', '101', '天怒法师');
INSERT INTO `hero` VALUES ('187', '87', '干扰者');
INSERT INTO `hero` VALUES ('188', '10', '变体精灵');
INSERT INTO `hero` VALUES ('189', '89', '娜迦海妖');
INSERT INTO `hero` VALUES ('190', '9', '米拉娜');
INSERT INTO `hero` VALUES ('191', '90', '光之守卫');
INSERT INTO `hero` VALUES ('192', '96', '半人马行者');
INSERT INTO `hero` VALUES ('193', '1', '敌法师');
INSERT INTO `hero` VALUES ('194', '54', '噬魂鬼');
INSERT INTO `hero` VALUES ('195', '63', '编织者');
INSERT INTO `hero` VALUES ('196', '17', '风暴之灵');
INSERT INTO `hero` VALUES ('197', '18', '斯温');
INSERT INTO `hero` VALUES ('198', '93', '斯拉克');
INSERT INTO `hero` VALUES ('199', '77', '狼人');
INSERT INTO `hero` VALUES ('200', '46', '圣堂刺客');
INSERT INTO `hero` VALUES ('201', '106', '灰烬之灵');
INSERT INTO `hero` VALUES ('202', '43', '死亡先知');
INSERT INTO `hero` VALUES ('203', '34', '修补匠');
INSERT INTO `hero` VALUES ('204', '98', '伐木机');
INSERT INTO `hero` VALUES ('205', '40', '剧毒术士');
INSERT INTO `hero` VALUES ('206', '6', '卓尔游侠');
INSERT INTO `hero` VALUES ('207', '81', '混沌骑士');
INSERT INTO `hero` VALUES ('208', '13', '帕克');
INSERT INTO `hero` VALUES ('209', '95', '巨魔战将');
INSERT INTO `hero` VALUES ('210', '36', '瘟疫法师');
INSERT INTO `hero` VALUES ('211', '16', '沙王');
INSERT INTO `hero` VALUES ('212', '47', '冥界亚龙');
INSERT INTO `hero` VALUES ('213', '4', '嗜血狂魔');
INSERT INTO `hero` VALUES ('214', '92', '维萨吉');
INSERT INTO `hero` VALUES ('215', '82', '米波');
INSERT INTO `hero` VALUES ('216', '29', '潮汐猎人');
INSERT INTO `hero` VALUES ('217', '45', '帕格纳');
INSERT INTO `hero` VALUES ('218', '94', '美杜莎');
INSERT INTO `hero` VALUES ('219', '113', '天穹守望者');
INSERT INTO `hero` VALUES ('220', '99', '钢背兽');
INSERT INTO `hero` VALUES ('221', '51', '发条技师');
INSERT INTO `hero` VALUES ('222', '53', '先知');
INSERT INTO `hero` VALUES ('223', '56', '克林克兹');
INSERT INTO `hero` VALUES ('224', '2', '斧王');
INSERT INTO `hero` VALUES ('225', '58', '魅惑魔女');
INSERT INTO `hero` VALUES ('226', '105', '工程师');
INSERT INTO `hero` VALUES ('227', '60', '暗夜魔王');
INSERT INTO `hero` VALUES ('228', '61', '育母蜘蛛');
INSERT INTO `hero` VALUES ('229', '65', '蝙蝠骑士');
INSERT INTO `hero` VALUES ('230', '5', '水晶室女');
INSERT INTO `hero` VALUES ('231', '27', '暗影萨满');
INSERT INTO `hero` VALUES ('232', '70', '熊战士');
INSERT INTO `hero` VALUES ('233', '68', '远古冰魂');
INSERT INTO `hero` VALUES ('234', '75', '沉默术士');
INSERT INTO `hero` VALUES ('235', '31', '巫妖');
INSERT INTO `hero` VALUES ('236', '112', '寒冬飞龙');
INSERT INTO `hero` VALUES ('237', '66', '陈');
INSERT INTO `hero` VALUES ('238', '83', '树精卫士');
INSERT INTO `hero` VALUES ('239', '85', '不朽尸王');
INSERT INTO `hero` VALUES ('240', '91', '艾欧');
INSERT INTO `hero` VALUES ('241', '33', '谜团');
INSERT INTO `hero` VALUES ('242', '57', '全能骑士');
INSERT INTO `hero` VALUES ('243', '102', '亚巴顿');
INSERT INTO `hero` VALUES ('244', '37', '术士');
INSERT INTO `hero` VALUES ('245', '38', '兽王');
INSERT INTO `hero` VALUES ('246', '55', '黑暗贤者');
INSERT INTO `hero` VALUES ('247', '84', '食人魔法师');

-- ----------------------------
-- Table structure for `user`
-- ----------------------------
DROP TABLE IF EXISTS `user`;
CREATE TABLE `user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `phone` char(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=89 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of user
-- ----------------------------
INSERT INTO `user` VALUES ('1', 'admin', '123@qq.com', '13816911007');
INSERT INTO `user` VALUES ('85', '3333', '123@qq.com', '123');
INSERT INTO `user` VALUES ('86', '43343', '123133@qq', '434334');
INSERT INTO `user` VALUES ('87', '啊啊啊', '1321231232@qqq.com', '12312312315');
INSERT INTO `user` VALUES ('88', 'xxadasd', 'admin@qq.com', '11111111111');
INSERT INTO `user` VALUES ('83', '555', '123133@qq.com', '12332112323');
INSERT INTO `user` VALUES ('84', '32133', '13123123@qq.com', '123123');
INSERT INTO `user` VALUES ('41', '22', '123@qq.com', '12312312312');
INSERT INTO `user` VALUES ('39', '22', '123@qq.com', '12312312312');
INSERT INTO `user` VALUES ('38', '22', '123@qq.com', '12312312312');
INSERT INTO `user` VALUES ('37', '22', '123@qq.com', '12312312312');
INSERT INTO `user` VALUES ('36', '22', '123@qq.com', '12312312312');
INSERT INTO `user` VALUES ('35', '22', '123@qq.com', '12312312312');
INSERT INTO `user` VALUES ('34', '22', '123@qq.com', '12312312312');
INSERT INTO `user` VALUES ('33', '22', '123@qq.com', '12312312312');
INSERT INTO `user` VALUES ('48', '22', '123@qq.com', '12312312312');
INSERT INTO `user` VALUES ('49', '22', '123@qq.com', '12312312312');
INSERT INTO `user` VALUES ('50', '22', '123@qq.com', '12312312312');
INSERT INTO `user` VALUES ('51', '22', '123@qq.com', '12312312312');
INSERT INTO `user` VALUES ('52', '22', '123@qq.com', '12312312312');
INSERT INTO `user` VALUES ('53', '22', '123@qq.com', '12312312312');
INSERT INTO `user` VALUES ('54', '22', '123@qq.com', '12312312312');
INSERT INTO `user` VALUES ('55', '22', '123@qq.com', '12312312312');
INSERT INTO `user` VALUES ('56', '22', '123@qq.com', '12312312312');
INSERT INTO `user` VALUES ('57', '22', '123@qq.com', '12312312312');
INSERT INTO `user` VALUES ('58', '22', '123@qq.com', '12312312312');
INSERT INTO `user` VALUES ('59', '22', '123@qq.com', '12312312312');
INSERT INTO `user` VALUES ('60', '22', '123@qq.com', '12312312312');
INSERT INTO `user` VALUES ('61', '22', '123@qq.com', '12312312312');
INSERT INTO `user` VALUES ('62', '22', '123@qq.com', '12312312312');
INSERT INTO `user` VALUES ('63', '22', '123@qq.com', '12312312312');
INSERT INTO `user` VALUES ('64', '22', '123@qq.com', '12312312312');
INSERT INTO `user` VALUES ('65', '22', '123@qq.com', '12312312312');
INSERT INTO `user` VALUES ('66', '22', '123@qq.com', '12312312312');
INSERT INTO `user` VALUES ('67', '22', '123@qq.com', '12312312312');
INSERT INTO `user` VALUES ('68', '22', '123@qq.com', '12312312312');
INSERT INTO `user` VALUES ('69', '22', '123@qq.com', '12312312312');
INSERT INTO `user` VALUES ('70', '22', '123@qq.com', '12312312312');
INSERT INTO `user` VALUES ('71', '22', '123@qq.com', '12312312312');
INSERT INTO `user` VALUES ('72', '22', '123@qq.com', '12312312312');
INSERT INTO `user` VALUES ('73', '22', '123@qq.com', '12312312312');
INSERT INTO `user` VALUES ('74', '22', '123@qq.com', '12312312312');
INSERT INTO `user` VALUES ('75', '22', '123@qq.com', '12312312312');
INSERT INTO `user` VALUES ('76', '22', '123@qq.com', '12312312312');
INSERT INTO `user` VALUES ('77', '22', '123@qq.com', '12312312312');
INSERT INTO `user` VALUES ('78', '22', '123@qq.com', '12312312312');
INSERT INTO `user` VALUES ('79', '22', '123@qq.com', '12312312312');
INSERT INTO `user` VALUES ('80', '22', '123@qq.com', '12312312312');
INSERT INTO `user` VALUES ('81', '22', '123@qq.com', '12312312312');
INSERT INTO `user` VALUES ('82', '22', '123@qq.com', '12312312312');

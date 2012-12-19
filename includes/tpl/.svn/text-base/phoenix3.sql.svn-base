/*
Navicat MySQL Data Transfer

Source Server         : Local
Source Server Version : 50141
Source Host           : localhost:3306
Source Database       : phoenix3

Target Server Type    : MYSQL
Target Server Version : 50141
File Encoding         : 65001

Date: 2011-01-22 22:00:52
*/

SET FOREIGN_KEY_CHECKS=0;
-- ----------------------------
-- Table structure for `achievements`
-- ----------------------------
DROP TABLE IF EXISTS `achievements`;
CREATE TABLE `achievements` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `levels` int(11) NOT NULL DEFAULT '1',
  `dynamic_badgelevel` enum('0','1') NOT NULL DEFAULT '1',
  `badge` varchar(100) NOT NULL,
  `pixels_base` int(11) NOT NULL DEFAULT '50',
  `pixels_multiplier` double NOT NULL DEFAULT '1.25',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=32 DEFAULT CHARSET=cp1251;

-- ----------------------------
-- Records of achievements
-- ----------------------------
INSERT INTO achievements VALUES ('1', '1', '1', 'ACH_AvatarLooks', '50', '0');
INSERT INTO achievements VALUES ('5', '1', '1', 'ACH_Motto', '50', '0');
INSERT INTO achievements VALUES ('6', '1', '1', 'ACH_Student', '50', '0');
INSERT INTO achievements VALUES ('7', '1', '1', 'ACH_AvatarTags', '50', '0');
INSERT INTO achievements VALUES ('13', '10', '1', 'ACH_RoomEntry', '5', '0');
INSERT INTO achievements VALUES ('10', '10', '1', 'ACH_RegistrationDuration', '50', '0');
INSERT INTO achievements VALUES ('28', '10', '1', 'ACH_BattleBallTilesLocked', '50', '0');
INSERT INTO achievements VALUES ('29', '10', '1', 'ACH_GamePlayerExperience', '50', '0');
INSERT INTO achievements VALUES ('30', '10', '1', 'ACH_GameAuthorExperience', '50', '0');
INSERT INTO achievements VALUES ('2', '1', '1', 'ACH_EmailVerification', '50', '0');
INSERT INTO achievements VALUES ('3', '1', '1', 'ACH_Graduate', '50', '0');
INSERT INTO achievements VALUES ('4', '1', '1', 'ACH_HappyHour', '50', '0');
INSERT INTO achievements VALUES ('8', '1', '1', 'ACH_RespectGiven', '50', '0');
INSERT INTO achievements VALUES ('9', '1', '1', 'ACH_Name', '50', '0');
INSERT INTO achievements VALUES ('11', '10', '1', 'ACH_Login', '50', '0');
INSERT INTO achievements VALUES ('12', '10', '1', 'ACH_GamePlayed', '50', '0');
INSERT INTO achievements VALUES ('14', '10', '1', 'ACH_RespectEarned', '50', '0');
INSERT INTO achievements VALUES ('15', '10', '1', 'ACH_MGM', '50', '0');
INSERT INTO achievements VALUES ('16', '10', '1', 'ACH_AllTimeHotelPresense', '50', '0');
INSERT INTO achievements VALUES ('17', '10', '1', 'ACH_TraderPass', '50', '0');
INSERT INTO achievements VALUES ('18', '10', '1', 'ACH_AlPerformanceVote', '50', '0');
INSERT INTO achievements VALUES ('19', '10', '1', 'ACH_PetFeeding', '50', '0');
INSERT INTO achievements VALUES ('20', '10', '1', 'ACH_PetLevelUp', '50', '0');
INSERT INTO achievements VALUES ('21', '10', '1', 'ACH_PetLover', '50', '0');
INSERT INTO achievements VALUES ('22', '10', '1', 'ACH_PetRespectGiver', '50', '0');
INSERT INTO achievements VALUES ('23', '10', '1', 'ACH_PetRespectReceiver', '50', '0');
INSERT INTO achievements VALUES ('24', '10', '1', 'ACH_GiftGiver', '50', '0');
INSERT INTO achievements VALUES ('25', '10', '1', 'ACH_GiftReceiver', '50', '0');
INSERT INTO achievements VALUES ('26', '5', '1', 'ACH_BasicClub', '50', '0');
INSERT INTO achievements VALUES ('27', '5', '1', 'ACH_VipClub', '50', '0');
INSERT INTO achievements VALUES ('31', '1', '0', 'Z64', '50', '0');

-- ----------------------------
-- Table structure for `achievements_owed`
-- ----------------------------
DROP TABLE IF EXISTS `achievements_owed`;
CREATE TABLE `achievements_owed` (
  `user` int(6) unsigned NOT NULL,
  `achievement` int(3) unsigned NOT NULL,
  `achlevel` int(3) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of achievements_owed
-- ----------------------------

-- ----------------------------
-- Table structure for `bans`
-- ----------------------------
DROP TABLE IF EXISTS `bans`;
CREATE TABLE `bans` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `bantype` enum('user','ip') NOT NULL DEFAULT 'user',
  `value` varchar(50) NOT NULL,
  `reason` text NOT NULL,
  `expire` double NOT NULL DEFAULT '0',
  `added_by` varchar(50) NOT NULL,
  `added_date` varchar(50) NOT NULL,
  `appeal_state` enum('0','1','2') NOT NULL DEFAULT '1',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of bans
-- ----------------------------

-- ----------------------------
-- Table structure for `bots`
-- ----------------------------
DROP TABLE IF EXISTS `bots`;
CREATE TABLE `bots` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `room_id` int(10) unsigned NOT NULL DEFAULT '0',
  `ai_type` enum('generic','guide','pet') NOT NULL DEFAULT 'generic',
  `name` varchar(100) NOT NULL,
  `motto` varchar(120) NOT NULL,
  `look` text NOT NULL,
  `x` int(11) NOT NULL DEFAULT '0',
  `y` int(11) NOT NULL DEFAULT '0',
  `z` int(11) NOT NULL DEFAULT '0',
  `rotation` int(11) NOT NULL DEFAULT '0',
  `walk_mode` enum('stand','freeroam','specified_range') NOT NULL DEFAULT 'stand',
  `min_x` int(11) NOT NULL DEFAULT '0',
  `min_y` int(11) NOT NULL DEFAULT '0',
  `max_x` int(11) NOT NULL DEFAULT '0',
  `max_y` int(11) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`),
  KEY `room_id` (`room_id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of bots
-- ----------------------------
INSERT INTO bots VALUES ('1', '1', 'generic', 'Harry', 'Welcome to Habboon!', 'hd-180-7.sh-290-110.lg-270-91.ch-809-62.hr-828-45', '9', '19', '0', '2', 'stand', '8', '16', '9', '24');
INSERT INTO bots VALUES ('2', '0', 'guide', 'Guide Bot', 'Here to help you out!', 'hr-828-45.lg-285-64.ch-215-110.hd-180-2.sh-290-62.he-1607-', '0', '0', '0', '0', 'freeroam', '0', '0', '0', '0');

-- ----------------------------
-- Table structure for `bots_responses`
-- ----------------------------
DROP TABLE IF EXISTS `bots_responses`;
CREATE TABLE `bots_responses` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `bot_id` int(10) unsigned NOT NULL,
  `keywords` text NOT NULL,
  `response_text` varchar(200) NOT NULL,
  `mode` enum('say','shout','whisper') NOT NULL DEFAULT 'say',
  `serve_id` int(11) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`),
  KEY `bot_id` (`bot_id`)
) ENGINE=MyISAM AUTO_INCREMENT=16 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of bots_responses
-- ----------------------------
INSERT INTO bots_responses VALUES ('1', '1', 'hey;hello;hallo;hai;hoi;howdy;hi', 'Hello!', 'say', '0');
INSERT INTO bots_responses VALUES ('2', '1', 'drink;cola;food;order;buy;ice', 'You can\'t order anything here. Does this look like a bar to you?', 'say', '0');
INSERT INTO bots_responses VALUES ('3', '1', 'harry', 'That\'s me!', 'say', '0');
INSERT INTO bots_responses VALUES ('5', '1', 'love', 'Love is a strange thing..', 'say', '0');
INSERT INTO bots_responses VALUES ('6', '1', 'dust;dusty;dirty;filthy;disgusting;eww', 'Are you calling my lobby dirty!??!', 'shout', '0');
INSERT INTO bots_responses VALUES ('7', '1', 'whisper to me harry', 'Do you like being whispered to...?', 'whisper', '0');
INSERT INTO bots_responses VALUES ('8', '1', 'yes;yep;definitely;yeah;uh-huh;no;nope;never;nay', 'Oh, well, if you say so...', 'say', '0');
INSERT INTO bots_responses VALUES ('9', '2', 'dutch;italian;sweedish;french;spanish;polish;portugese;brazillian;inglaise;anglais;hola;bonjour;nederlands;engels;swedish;language;german;deutsch', 'This is an English hotel! Please speak English or face punishment!', 'shout', '0');
INSERT INTO bots_responses VALUES ('10', '2', 'help;halp', 'I\'m here to help! If theres anything I can\'t answer, use the help tool to the left!', 'say', '0');
INSERT INTO bots_responses VALUES ('11', '2', 'job;badge;plz;please;pls', 'Please do not beg staff members! It\'ll only annoy them and decrease your chances!', 'say', '0');
INSERT INTO bots_responses VALUES ('12', '2', 'cred;credz;creds;credits;coins', 'Credits are given out at random intervals. Check the site for more details.', 'say', '0');
INSERT INTO bots_responses VALUES ('13', '2', 'mod;admin;staff', 'Our dedicated staff are here to improve your retro experience!', 'say', '0');
INSERT INTO bots_responses VALUES ('14', '2', 'furni;decorate;walls;floor;windows;sofa;chair;table', 'If you want to decorate, buy some items from the catalogue and place them in your room!', 'say', '0');
INSERT INTO bots_responses VALUES ('15', '2', 'pixels', 'You get pixels for being online and getting achievements, you can then spend them in the catalogue!', 'say', '0');

-- ----------------------------
-- Table structure for `bots_speech`
-- ----------------------------
DROP TABLE IF EXISTS `bots_speech`;
CREATE TABLE `bots_speech` (
  `bot_id` int(10) unsigned NOT NULL,
  `text` varchar(200) NOT NULL,
  `shout` enum('0','1') NOT NULL DEFAULT '0',
  KEY `bot_id` (`bot_id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of bots_speech
-- ----------------------------
INSERT INTO bots_speech VALUES ('1', '*sneeze*', '1');
INSERT INTO bots_speech VALUES ('1', 'When\'s my break? I\'ve been standing here for ages..', '0');
INSERT INTO bots_speech VALUES ('1', 'My feet hurt.. :(', '0');
INSERT INTO bots_speech VALUES ('1', '*yawn*', '0');
INSERT INTO bots_speech VALUES ('1', 'Why is it always so quiet here? I feel so lonely..', '0');
INSERT INTO bots_speech VALUES ('1', 'Don\'t even think about asking me for a drink .. this is not a bar.', '0');
INSERT INTO bots_speech VALUES ('2', ' Credits are topped up on a regular basis :)', '0');
INSERT INTO bots_speech VALUES ('2', 'There are always competitions going on to earn more credits and rares!', '0');
INSERT INTO bots_speech VALUES ('2', 'It\'s always good to trade your rares! Share the wealth.', '0');
INSERT INTO bots_speech VALUES ('2', 'Have you checked out the marketplace in the catalogue yet?', '0');
INSERT INTO bots_speech VALUES ('2', 'Looking for somewere quiet? Go find a nice, relaxing public room in the navigator :)', '0');
INSERT INTO bots_speech VALUES ('2', 'Our staff are here to help you!', '0');
INSERT INTO bots_speech VALUES ('2', 'Rares are give out in competitons and events, as well as some in the catalogue for all users.', '0');
INSERT INTO bots_speech VALUES ('2', 'Found a bug? Got a suggestion? Send us a call for help!', '0');

-- ----------------------------
-- Table structure for `catalog_items`
-- ----------------------------
DROP TABLE IF EXISTS `catalog_items`;
CREATE TABLE `catalog_items` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `page_id` int(11) NOT NULL,
  `item_ids` varchar(120) NOT NULL,
  `catalog_name` varchar(100) NOT NULL,
  `cost_credits` int(11) NOT NULL,
  `cost_pixels` int(11) NOT NULL,
  `cost_snow` int(11) NOT NULL DEFAULT '0',
  `amount` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=4294967296 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of catalog_items
-- ----------------------------
INSERT INTO catalog_items VALUES ('1', '134', '19942', 'byesw_hand', '25', '0', '0', '1');
INSERT INTO catalog_items VALUES ('2', '134', '19943', 'byesw_hotel', '25', '0', '0', '1');
INSERT INTO catalog_items VALUES ('41', '15', '19896', 'wallpaper 19', '3', '0', '0', '1');
INSERT INTO catalog_items VALUES ('40', '15', '19896', 'wallpaper 18', '3', '0', '0', '1');
INSERT INTO catalog_items VALUES ('39', '15', '19896', 'wallpaper 17', '3', '0', '0', '1');
INSERT INTO catalog_items VALUES ('38', '15', '19896', 'wallpaper 16', '3', '0', '0', '1');
INSERT INTO catalog_items VALUES ('37', '15', '19896', 'wallpaper 15', '3', '0', '0', '1');
INSERT INTO catalog_items VALUES ('36', '15', '19896', 'wallpaper 14', '3', '0', '0', '1');
INSERT INTO catalog_items VALUES ('35', '15', '19896', 'wallpaper 13', '3', '0', '0', '1');
INSERT INTO catalog_items VALUES ('34', '15', '19896', 'wallpaper 12', '3', '0', '0', '1');
INSERT INTO catalog_items VALUES ('33', '15', '19896', 'wallpaper 11', '3', '0', '0', '1');
INSERT INTO catalog_items VALUES ('32', '15', '19896', 'wallpaper 10', '3', '0', '0', '1');
INSERT INTO catalog_items VALUES ('31', '15', '19896', 'wallpaper 9', '3', '0', '0', '1');
INSERT INTO catalog_items VALUES ('30', '15', '19896', 'wallpaper 8', '3', '0', '0', '1');
INSERT INTO catalog_items VALUES ('29', '15', '19896', 'wallpaper 7', '3', '0', '0', '1');
INSERT INTO catalog_items VALUES ('28', '15', '19896', 'wallpaper 6', '3', '0', '0', '1');
INSERT INTO catalog_items VALUES ('27', '15', '19896', 'wallpaper 5', '3', '0', '0', '1');
INSERT INTO catalog_items VALUES ('26', '15', '19896', 'wallpaper 4', '3', '0', '0', '1');
INSERT INTO catalog_items VALUES ('25', '15', '19896', 'wallpaper 3', '3', '0', '0', '1');
INSERT INTO catalog_items VALUES ('24', '15', '19896', 'wallpaper 2', '3', '0', '0', '1');
INSERT INTO catalog_items VALUES ('23', '15', '19896', 'wallpaper 1', '3', '0', '0', '1');
INSERT INTO catalog_items VALUES ('42', '15', '19896', 'wallpaper 20', '3', '0', '0', '1');
INSERT INTO catalog_items VALUES ('43', '15', '19896', 'wallpaper 21', '3', '0', '0', '1');
INSERT INTO catalog_items VALUES ('44', '15', '19896', 'wallpaper 22', '3', '0', '0', '1');
INSERT INTO catalog_items VALUES ('45', '15', '19896', 'wallpaper 23', '3', '0', '0', '1');
INSERT INTO catalog_items VALUES ('46', '15', '19896', 'wallpaper 24', '3', '0', '0', '1');
INSERT INTO catalog_items VALUES ('47', '15', '19896', 'wallpaper 25', '3', '0', '0', '1');
INSERT INTO catalog_items VALUES ('48', '15', '19896', 'wallpaper 26', '3', '0', '0', '1');
INSERT INTO catalog_items VALUES ('49', '15', '19896', 'wallpaper 27', '3', '0', '0', '1');
INSERT INTO catalog_items VALUES ('50', '15', '19896', 'wallpaper 28', '3', '0', '0', '1');
INSERT INTO catalog_items VALUES ('51', '15', '19896', 'wallpaper 29', '3', '0', '0', '1');
INSERT INTO catalog_items VALUES ('52', '15', '19896', 'wallpaper 30', '3', '0', '0', '1');
INSERT INTO catalog_items VALUES ('53', '15', '19896', 'wallpaper 31', '3', '0', '0', '1');
INSERT INTO catalog_items VALUES ('54', '15', '19894', 'a2 l', '3', '0', '0', '1');
INSERT INTO catalog_items VALUES ('55', '15', '19895', 'a2 t', '3', '0', '0', '1');
INSERT INTO catalog_items VALUES ('56', '15', '19926', 'landscape 1', '3', '0', '0', '1');
INSERT INTO catalog_items VALUES ('57', '15', '19926', 'landscape 2', '3', '0', '0', '1');
INSERT INTO catalog_items VALUES ('58', '15', '19926', 'landscape 3', '3', '0', '0', '1');
INSERT INTO catalog_items VALUES ('59', '15', '19926', 'landscape 4', '3', '0', '0', '1');
INSERT INTO catalog_items VALUES ('60', '15', '19926', 'landscape 5', '3', '0', '0', '1');
INSERT INTO catalog_items VALUES ('61', '15', '19926', 'landscape 6', '3', '0', '0', '1');
INSERT INTO catalog_items VALUES ('62', '15', '19926', 'landscape 7', '3', '0', '0', '1');
INSERT INTO catalog_items VALUES ('63', '15', '19926', 'landscape 8', '3', '0', '0', '1');
INSERT INTO catalog_items VALUES ('64', '15', '19926', 'landscape 9', '3', '0', '0', '1');
INSERT INTO catalog_items VALUES ('65', '15', '19926', 'landscape 10', '3', '0', '0', '1');
INSERT INTO catalog_items VALUES ('66', '15', '19926', 'landscape 11', '3', '0', '0', '1');
INSERT INTO catalog_items VALUES ('67', '15', '19926', 'landscape 12', '3', '0', '0', '1');
INSERT INTO catalog_items VALUES ('72', '55', '1', 'shelves_norja', '3', '0', '0', '1');
INSERT INTO catalog_items VALUES ('71', '55', '6', 'table_norja_med', '4', '0', '0', '1');
INSERT INTO catalog_items VALUES ('73', '55', '14', 'couch_norja', '4', '0', '0', '1');
INSERT INTO catalog_items VALUES ('74', '55', '15', 'chair_norja', '3', '0', '0', '1');
INSERT INTO catalog_items VALUES ('75', '55', '173', 'soft_sofachair_norja', '3', '0', '0', '1');
INSERT INTO catalog_items VALUES ('76', '55', '174', 'soft_sofa_norja', '4', '0', '0', '1');
INSERT INTO catalog_items VALUES ('101', '55', '501', 'shelves_norja*9', '3', '0', '0', '1');
INSERT INTO catalog_items VALUES ('78', '55', '479', 'table_norja_med*2', '3', '0', '0', '1');
INSERT INTO catalog_items VALUES ('79', '55', '480', 'table_norja_med*3', '3', '0', '0', '1');
INSERT INTO catalog_items VALUES ('80', '55', '481', 'table_norja_med*4', '3', '0', '0', '1');
INSERT INTO catalog_items VALUES ('81', '55', '482', 'table_norja_med*5', '3', '0', '0', '1');
INSERT INTO catalog_items VALUES ('82', '55', '483', 'table_norja_med*6', '3', '0', '0', '1');
INSERT INTO catalog_items VALUES ('83', '55', '484', 'table_norja_med*7', '3', '0', '0', '1');
INSERT INTO catalog_items VALUES ('85', '55', '485', 'table_norja_med*8', '3', '0', '0', '1');
INSERT INTO catalog_items VALUES ('86', '55', '486', 'table_norja_med*9', '3', '0', '0', '1');
INSERT INTO catalog_items VALUES ('87', '55', '487', 'couch_norja*2', '4', '0', '0', '1');
INSERT INTO catalog_items VALUES ('88', '55', '488', 'couch_norja*3', '4', '0', '0', '1');
INSERT INTO catalog_items VALUES ('89', '55', '489', 'couch_norja*4', '4', '0', '0', '1');
INSERT INTO catalog_items VALUES ('90', '1', '490', 'couch_norja*5', '4', '0', '0', '1');
INSERT INTO catalog_items VALUES ('91', '55', '491', 'couch_norja*6', '4', '0', '0', '1');
INSERT INTO catalog_items VALUES ('92', '55', '492', 'couch_norja*7', '4', '0', '0', '1');
INSERT INTO catalog_items VALUES ('93', '55', '493', 'couch_norja*8', '4', '0', '0', '1');
INSERT INTO catalog_items VALUES ('94', '55', '494', 'couch_norja*9', '4', '0', '0', '1');
INSERT INTO catalog_items VALUES ('95', '55', '495', 'shelves_norja*2', '3', '0', '0', '1');
INSERT INTO catalog_items VALUES ('96', '55', '496', 'shelves_norja*3', '3', '0', '0', '1');
INSERT INTO catalog_items VALUES ('97', '55', '497', 'shelves_norja*5', '3', '0', '0', '1');
INSERT INTO catalog_items VALUES ('98', '55', '498', 'shelves_norja*6', '3', '0', '0', '1');
INSERT INTO catalog_items VALUES ('99', '55', '499', 'shelves_norja*7', '3', '0', '0', '1');
INSERT INTO catalog_items VALUES ('100', '55', '500', 'shelves_norja*8', '3', '0', '0', '1');
INSERT INTO catalog_items VALUES ('140', '30', '2', 'shelves_polyfon', '3', '0', '0', '1');
INSERT INTO catalog_items VALUES ('103', '55', '502', 'chair_norja*2', '3', '0', '0', '1');
INSERT INTO catalog_items VALUES ('104', '55', '503', 'chair_norja*3', '3', '0', '0', '1');
INSERT INTO catalog_items VALUES ('105', '55', '504', 'chair_norja*4', '3', '0', '0', '1');
INSERT INTO catalog_items VALUES ('106', '55', '505', 'chair_norja*5', '3', '0', '0', '1');
INSERT INTO catalog_items VALUES ('107', '55', '506', 'chair_norja*6', '3', '0', '0', '1');
INSERT INTO catalog_items VALUES ('108', '55', '507', 'chair_norja*7', '3', '0', '0', '1');
INSERT INTO catalog_items VALUES ('109', '55', '508', 'chair_norja*8', '3', '0', '0', '1');
INSERT INTO catalog_items VALUES ('110', '55', '509', 'chair_norja*9', '3', '0', '0', '1');
INSERT INTO catalog_items VALUES ('111', '55', '518', 'soft_sofa_norja*2', '4', '0', '0', '1');
INSERT INTO catalog_items VALUES ('112', '55', '519', 'soft_sofa_norja*3', '4', '0', '0', '1');
INSERT INTO catalog_items VALUES ('113', '55', '520', 'soft_sofa_norja*4', '3', '0', '0', '1');
INSERT INTO catalog_items VALUES ('114', '55', '521', 'soft_sofa_norja*5', '4', '0', '0', '1');
INSERT INTO catalog_items VALUES ('115', '55', '522', 'soft_sofa_norja*6', '4', '0', '0', '1');
INSERT INTO catalog_items VALUES ('116', '55', '523', 'soft_sofa_norja*7', '4', '0', '0', '1');
INSERT INTO catalog_items VALUES ('391', '28', '1375', 'xmas08_icerug', '5', '0', '0', '1');
INSERT INTO catalog_items VALUES ('118', '55', '524', 'soft_sofa_norja*8', '4', '0', '0', '1');
INSERT INTO catalog_items VALUES ('387', '28', '1366', 'xmas08_trph1', '6', '0', '0', '1');
INSERT INTO catalog_items VALUES ('386', '28', '1364', 'xmas08_snowpl', '3', '0', '0', '1');
INSERT INTO catalog_items VALUES ('121', '55', '525', 'soft_sofa_norja*9', '4', '0', '0', '1');
INSERT INTO catalog_items VALUES ('123', '55', '526', 'soft_sofachair_norja*2', '3', '0', '0', '1');
INSERT INTO catalog_items VALUES ('124', '55', '527', 'soft_sofachair_norja*3', '3', '0', '0', '1');
INSERT INTO catalog_items VALUES ('125', '55', '528', 'soft_sofachair_norja*3', '3', '0', '0', '1');
INSERT INTO catalog_items VALUES ('126', '55', '530', 'soft_sofachair_norja*6', '3', '0', '0', '1');
INSERT INTO catalog_items VALUES ('127', '55', '531', 'soft_sofachair_norja*7', '3', '0', '0', '1');
INSERT INTO catalog_items VALUES ('128', '55', '529', 'soft_sofachair_norja*5', '3', '0', '0', '1');
INSERT INTO catalog_items VALUES ('129', '55', '532', 'soft_sofachair_norja*8', '3', '0', '0', '1');
INSERT INTO catalog_items VALUES ('130', '55', '533', 'soft_sofachair_norja*9', '3', '0', '0', '1');
INSERT INTO catalog_items VALUES ('131', '55', '658', 'solarium_norja', '3', '0', '0', '1');
INSERT INTO catalog_items VALUES ('132', '55', '659', 'solarium_norja*1', '3', '0', '0', '1');
INSERT INTO catalog_items VALUES ('133', '55', '660', 'solarium_norja*2', '3', '0', '0', '1');
INSERT INTO catalog_items VALUES ('134', '55', '661', 'solarium_norja*3', '3', '0', '0', '1');
INSERT INTO catalog_items VALUES ('135', '55', '662', 'solarium_norja*5', '3', '0', '0', '1');
INSERT INTO catalog_items VALUES ('136', '55', '663', 'solarium_norja*6', '3', '0', '0', '1');
INSERT INTO catalog_items VALUES ('137', '55', '664', 'solarium_norja*7', '3', '0', '0', '1');
INSERT INTO catalog_items VALUES ('138', '55', '665', 'solarium_norja*8', '3', '0', '0', '1');
INSERT INTO catalog_items VALUES ('139', '55', '666', 'solarium_norja*9', '3', '0', '0', '1');
INSERT INTO catalog_items VALUES ('141', '30', '4', 'table_polyfon_small', '2', '0', '0', '1');
INSERT INTO catalog_items VALUES ('142', '30', '5', 'chair_polyfon', '3', '0', '0', '1');
INSERT INTO catalog_items VALUES ('143', '30', '11', 'stand_polyfon_z', '1', '0', '0', '1');
INSERT INTO catalog_items VALUES ('144', '30', '16', 'table_polyfon_med', '3', '0', '0', '1');
INSERT INTO catalog_items VALUES ('145', '30', '19', 'sofachair_polyfon', '3', '0', '0', '1');
INSERT INTO catalog_items VALUES ('146', '30', '20', 'sofa_polyfon', '4', '0', '0', '1');
INSERT INTO catalog_items VALUES ('147', '30', '25', 'bed_polyfon', '4', '0', '0', '1');
INSERT INTO catalog_items VALUES ('148', '30', '26', 'bed_polyfon_one', '3', '0', '0', '1');
INSERT INTO catalog_items VALUES ('149', '30', '109', 'bar_polyfon', '3', '0', '0', '1');
INSERT INTO catalog_items VALUES ('150', '30', '46', 'fireplace_polyfon', '5', '0', '0', '1');
INSERT INTO catalog_items VALUES ('152', '30', '112', 'bardesk_polyfon', '3', '0', '0', '1');
INSERT INTO catalog_items VALUES ('153', '30', '113', 'bardeskcorner_polyfon', '3', '0', '0', '1');
INSERT INTO catalog_items VALUES ('154', '30', '133', 'table_polyfon', '4', '0', '0', '1');
INSERT INTO catalog_items VALUES ('155', '30', '134', 'smooth_table_polyfon', '4', '0', '0', '1');
INSERT INTO catalog_items VALUES ('156', '31', '135', 'sofachair_polyfon_girl', '3', '0', '0', '1');
INSERT INTO catalog_items VALUES ('157', '31', '136', 'bed_polyfon_girl_one', '3', '0', '0', '1');
INSERT INTO catalog_items VALUES ('158', '31', '137', 'bed_polyfon_girl', '4', '0', '0', '1');
INSERT INTO catalog_items VALUES ('159', '31', '138', 'sofa_polyfon_girl', '4', '0', '0', '1');
INSERT INTO catalog_items VALUES ('160', '31', '620', 'bardeskcorner_polyfon*5', '3', '0', '0', '1');
INSERT INTO catalog_items VALUES ('161', '31', '612', 'bardesk_polyfon*5', '3', '0', '0', '1');
INSERT INTO catalog_items VALUES ('162', '31', '628', 'divider_poly3*5', '6', '0', '0', '1');
INSERT INTO catalog_items VALUES ('163', '30', '216', 'divider_poly3', '6', '0', '0', '1');
INSERT INTO catalog_items VALUES ('260', '26', '1804', 'dimmer_fuse2', '6', '0', '0', '1');
INSERT INTO catalog_items VALUES ('259', '26', '1803', 'dimmer_swtch', '3', '0', '0', '1');
INSERT INTO catalog_items VALUES ('166', '30', '582', 'sofachair_polyfon*2', '3', '0', '0', '1');
INSERT INTO catalog_items VALUES ('258', '26', '1802', 'dimmer_fuse6', '6', '0', '0', '1');
INSERT INTO catalog_items VALUES ('168', '30', '583', 'sofachair_polyfon*3', '3', '0', '0', '1');
INSERT INTO catalog_items VALUES ('383', '178', '1798', 'ktchn_wall', '20', '0', '0', '5');
INSERT INTO catalog_items VALUES ('170', '30', '584', 'sofachair_polyfon*4', '3', '0', '0', '1');
INSERT INTO catalog_items VALUES ('171', '30', '585', 'sofachair_polyfon*6', '3', '0', '0', '1');
INSERT INTO catalog_items VALUES ('172', '30', '586', 'sofachair_polyfon*7', '3', '0', '0', '1');
INSERT INTO catalog_items VALUES ('173', '30', '587', 'sofachair_polyfon*8', '3', '0', '0', '1');
INSERT INTO catalog_items VALUES ('174', '30', '588', 'sofachair_polyfon*9', '3', '0', '0', '1');
INSERT INTO catalog_items VALUES ('175', '30', '589', 'sofa_polyfon*2', '4', '0', '0', '1');
INSERT INTO catalog_items VALUES ('176', '30', '590', 'sofa_polyfon*3', '4', '0', '0', '1');
INSERT INTO catalog_items VALUES ('177', '30', '591', 'sofa_polyfon*3', '4', '0', '0', '1');
INSERT INTO catalog_items VALUES ('178', '30', '592', 'sofa_polyfon*6', '3', '0', '0', '1');
INSERT INTO catalog_items VALUES ('179', '30', '593', 'sofa_polyfon*7', '3', '0', '0', '1');
INSERT INTO catalog_items VALUES ('180', '30', '594', 'sofa_polyfon*8', '4', '0', '0', '1');
INSERT INTO catalog_items VALUES ('181', '30', '595', 'sofa_polyfon*9', '4', '0', '0', '1');
INSERT INTO catalog_items VALUES ('182', '30', '596', 'bed_polyfon*3', '4', '0', '0', '1');
INSERT INTO catalog_items VALUES ('183', '30', '597', 'bed_polyfon*4', '4', '0', '0', '1');
INSERT INTO catalog_items VALUES ('184', '30', '598', 'bed_polyfon*6', '4', '0', '0', '1');
INSERT INTO catalog_items VALUES ('185', '30', '599', 'bed_polyfon*7', '4', '0', '0', '1');
INSERT INTO catalog_items VALUES ('186', '30', '600', 'bed_polyfon*8', '4', '0', '0', '1');
INSERT INTO catalog_items VALUES ('187', '30', '601', 'bed_polyfon*9', '4', '0', '0', '1');
INSERT INTO catalog_items VALUES ('188', '30', '602', 'bed_polyfon_one*2', '3', '0', '0', '1');
INSERT INTO catalog_items VALUES ('189', '30', '603', 'bed_polyfon_one*3', '3', '0', '0', '1');
INSERT INTO catalog_items VALUES ('190', '30', '604', 'bed_polyfon_one*4', '3', '0', '0', '1');
INSERT INTO catalog_items VALUES ('191', '30', '605', 'bed_polyfon_one*6', '3', '0', '0', '1');
INSERT INTO catalog_items VALUES ('192', '30', '606', 'bed_polyfon_one*7', '3', '0', '0', '1');
INSERT INTO catalog_items VALUES ('193', '30', '607', 'bed_polyfon_one*8', '3', '0', '0', '1');
INSERT INTO catalog_items VALUES ('194', '30', '608', 'bed_polyfon_one*9', '3', '0', '0', '1');
INSERT INTO catalog_items VALUES ('195', '30', '609', 'bardesk_polyfon*2', '3', '0', '0', '1');
INSERT INTO catalog_items VALUES ('196', '30', '610', 'bardesk_polyfon*3', '3', '0', '0', '1');
INSERT INTO catalog_items VALUES ('197', '30', '611', 'bardesk_polyfon*4', '3', '0', '0', '1');
INSERT INTO catalog_items VALUES ('198', '30', '604', 'bed_polyfon_one*4', '3', '0', '0', '1');
INSERT INTO catalog_items VALUES ('199', '30', '613', 'bardesk_polyfon*6', '3', '0', '0', '1');
INSERT INTO catalog_items VALUES ('200', '30', '614', 'bardesk_polyfon*7', '3', '0', '0', '1');
INSERT INTO catalog_items VALUES ('201', '615', '615', 'bardesk_polyfon*8', '3', '0', '0', '1');
INSERT INTO catalog_items VALUES ('202', '30', '616', 'bardesk_polyfon*9', '3', '0', '0', '1');
INSERT INTO catalog_items VALUES ('203', '30', '616', 'bardesk_polyfon*9', '3', '0', '0', '1');
INSERT INTO catalog_items VALUES ('204', '30', '617', 'bardeskcorner_polyfon*2', '3', '0', '0', '1');
INSERT INTO catalog_items VALUES ('205', '30', '618', 'bardeskcorner_polyfon*3', '3', '0', '0', '1');
INSERT INTO catalog_items VALUES ('206', '30', '619', 'bardeskcorner_polyfon*4', '3', '0', '0', '1');
INSERT INTO catalog_items VALUES ('207', '30', '621', 'bardeskcorner_polyfon*6', '3', '0', '0', '1');
INSERT INTO catalog_items VALUES ('208', '30', '622', 'bardeskcorner_polyfon*7', '3', '0', '0', '1');
INSERT INTO catalog_items VALUES ('209', '30', '623', 'bardeskcorner_polyfon*8', '3', '0', '0', '1');
INSERT INTO catalog_items VALUES ('210', '30', '624', 'bardeskcorner_polyfon*9', '3', '0', '0', '1');
INSERT INTO catalog_items VALUES ('222', '35', '32', 'bed_armas_two', '4', '0', '0', '1');
INSERT INTO catalog_items VALUES ('212', '30', '625', 'divider_poly3*2', '6', '0', '0', '1');
INSERT INTO catalog_items VALUES ('213', '30', '626', 'divider_poly3*3', '6', '0', '0', '1');
INSERT INTO catalog_items VALUES ('214', '30', '627', 'divider_poly3*4', '6', '0', '0', '1');
INSERT INTO catalog_items VALUES ('215', '30', '629', 'divider_poly3*6', '6', '0', '0', '1');
INSERT INTO catalog_items VALUES ('2138', '142', '329', 'toy1*3', '3', '0', '0', '1');
INSERT INTO catalog_items VALUES ('2335', '129', '1502', 'bump_road', '0', '1250', '0', '20');
INSERT INTO catalog_items VALUES ('218', '30', '632', 'divider_poly3*9', '6', '0', '0', '1');
INSERT INTO catalog_items VALUES ('2118', '7', '20060', 'DEAL_HC_1', '100', '0', '0', '1');
INSERT INTO catalog_items VALUES ('390', '28', '1373', 'xmas08_icetree', '4', '0', '0', '1');
INSERT INTO catalog_items VALUES ('224', '35', '36', 'bench_armas', '3', '0', '0', '1');
INSERT INTO catalog_items VALUES ('225', '35', '37', 'table_armas', '4', '0', '0', '1');
INSERT INTO catalog_items VALUES ('226', '35', '38', 'small_table_armas', '3', '0', '0', '1');
INSERT INTO catalog_items VALUES ('227', '35', '39', 'small_chair_armas', '1', '0', '0', '1');
INSERT INTO catalog_items VALUES ('228', '35', '40', 'fireplace_armas', '5', '0', '0', '1');
INSERT INTO catalog_items VALUES ('229', '35', '41', 'lamp_armas', '3', '0', '0', '1');
INSERT INTO catalog_items VALUES ('230', '35', '42', 'bed_armas_one', '3', '0', '0', '1');
INSERT INTO catalog_items VALUES ('231', '35', '44', 'carpet_armas', '3', '0', '0', '1');
INSERT INTO catalog_items VALUES ('232', '35', '115', 'bar_armas', '4', '0', '0', '1');
INSERT INTO catalog_items VALUES ('233', '35', '116', 'bartable_armas', '4', '0', '0', '1');
INSERT INTO catalog_items VALUES ('234', '35', '117', 'bar_chair_armas', '1', '0', '0', '1');
INSERT INTO catalog_items VALUES ('235', '35', '176', 'lamp2_armas', '3', '0', '0', '1');
INSERT INTO catalog_items VALUES ('237', '24', '1693', 'window_single_default', '3', '0', '0', '1');
INSERT INTO catalog_items VALUES ('238', '24', '1694', 'window_double_default', '4', '0', '0', '1');
INSERT INTO catalog_items VALUES ('239', '24', '1695', 'noob_window_double', '4', '0', '0', '1');
INSERT INTO catalog_items VALUES ('240', '24', '1696', 'window_triple', '5', '0', '0', '1');
INSERT INTO catalog_items VALUES ('241', '24', '1697', 'window_square', '1', '0', '0', '1');
INSERT INTO catalog_items VALUES ('242', '24', '1698', 'window_romantic_wide', '4', '0', '0', '1');
INSERT INTO catalog_items VALUES ('243', '24', '1699', 'window_romantic_narrow', '3', '0', '0', '1');
INSERT INTO catalog_items VALUES ('244', '24', '1700', 'window_grunge', '2', '0', '0', '1');
INSERT INTO catalog_items VALUES ('245', '24', '1701', 'window_golden', '4', '0', '0', '1');
INSERT INTO catalog_items VALUES ('246', '24', '1702', 'window_chinese_wide', '6', '0', '0', '1');
INSERT INTO catalog_items VALUES ('264', '29', '178', 'door', '5', '0', '0', '1');
INSERT INTO catalog_items VALUES ('248', '24', '1703', 'window_chinese_narrow', '5', '0', '0', '1');
INSERT INTO catalog_items VALUES ('249', '24', '1704', 'window_basic', '3', '0', '0', '1');
INSERT INTO catalog_items VALUES ('250', '24', '1705', 'window_70s_wide', '5', '0', '0', '1');
INSERT INTO catalog_items VALUES ('251', '24', '1706', 'window_70s_narrow', '4', '0', '0', '1');
INSERT INTO catalog_items VALUES ('261', '26', '1805', 'dimmer_buttn', '3', '0', '0', '1');
INSERT INTO catalog_items VALUES ('257', '26', '1683', 'roomdimmer', '6', '0', '0', '1');
INSERT INTO catalog_items VALUES ('254', '24', '1712', 'window_hole', '2', '0', '0', '1');
INSERT INTO catalog_items VALUES ('255', '24', '1717', 'window_skyscraper', '18', '0', '0', '5');
INSERT INTO catalog_items VALUES ('389', '28', '1369', 'xmas08_hottub', '5', '0', '0', '1');
INSERT INTO catalog_items VALUES ('265', '29', '1100', 'teleport_door', '6', '0', '0', '1');
INSERT INTO catalog_items VALUES ('757', '73', '1787', 'sf_window', '7', '0', '0', '1');
INSERT INTO catalog_items VALUES ('756', '73', '1614', 'sf_roller', '7', '0', '0', '1');
INSERT INTO catalog_items VALUES ('268', '29', '1613', 'sf_tele', '5', '0', '0', '1');
INSERT INTO catalog_items VALUES ('269', '29', '1452', 'lostc_teleport', '5', '0', '0', '1');
INSERT INTO catalog_items VALUES ('271', '33', '3', 'shelves_silo', '3', '0', '0', '1');
INSERT INTO catalog_items VALUES ('272', '33', '7', 'table_silo_med', '3', '0', '0', '1');
INSERT INTO catalog_items VALUES ('273', '33', '12', 'chair_silo', '3', '0', '0', '1');
INSERT INTO catalog_items VALUES ('274', '33', '13', 'sofa_silo', '3', '0', '0', '1');
INSERT INTO catalog_items VALUES ('275', '33', '21', 'sofachair_silo', '3', '0', '0', '1');
INSERT INTO catalog_items VALUES ('276', '33', '29', 'bed_silo_one', '3', '0', '0', '1');
INSERT INTO catalog_items VALUES ('277', '33', '30', 'bed_silo_two', '4', '0', '0', '1');
INSERT INTO catalog_items VALUES ('278', '33', '31', 'table_silo_small', '2', '0', '0', '1');
INSERT INTO catalog_items VALUES ('279', '33', '221', 'divider_silo1', '3', '0', '0', '1');
INSERT INTO catalog_items VALUES ('280', '33', '223', 'divider_silo2', '3', '0', '0', '1');
INSERT INTO catalog_items VALUES ('281', '33', '225', 'divider_silo3', '6', '0', '0', '1');
INSERT INTO catalog_items VALUES ('282', '33', '461', 'barchair_silo', '3', '0', '0', '1');
INSERT INTO catalog_items VALUES ('283', '33', '534', 'sofachair_silo*2', '3', '0', '0', '1');
INSERT INTO catalog_items VALUES ('284', '33', '535', 'sofachair_silo*3', '3', '0', '0', '1');
INSERT INTO catalog_items VALUES ('285', '33', '536', 'sofachair_silo*4', '3', '0', '0', '1');
INSERT INTO catalog_items VALUES ('286', '33', '537', 'sofachair_silo*5', '3', '0', '0', '1');
INSERT INTO catalog_items VALUES ('287', '33', '538', 'sofachair_silo*6', '3', '0', '0', '1');
INSERT INTO catalog_items VALUES ('288', '33', '539', 'sofachair_silo*7', '3', '0', '0', '1');
INSERT INTO catalog_items VALUES ('289', '33', '540', 'sofachair_silo*8', '3', '0', '0', '1');
INSERT INTO catalog_items VALUES ('290', '33', '541', 'sofachair_silo*9', '3', '0', '0', '1');
INSERT INTO catalog_items VALUES ('291', '33', '542', 'table_silo_small*2', '2', '0', '0', '1');
INSERT INTO catalog_items VALUES ('292', '33', '543', 'table_silo_small*3', '2', '0', '0', '1');
INSERT INTO catalog_items VALUES ('293', '33', '544', 'table_silo_small*4', '2', '0', '0', '1');
INSERT INTO catalog_items VALUES ('294', '33', '545', 'table_silo_small*5', '2', '0', '0', '1');
INSERT INTO catalog_items VALUES ('295', '33', '546', 'table_silo_small*6', '2', '0', '0', '1');
INSERT INTO catalog_items VALUES ('296', '33', '547', 'table_silo_small*7', '2', '0', '0', '1');
INSERT INTO catalog_items VALUES ('297', '33', '548', 'table_silo_small*8', '2', '0', '0', '1');
INSERT INTO catalog_items VALUES ('298', '33', '549', 'table_silo_small*9', '3', '0', '0', '1');
INSERT INTO catalog_items VALUES ('299', '33', '550', 'divider_silo1*2', '3', '0', '0', '1');
INSERT INTO catalog_items VALUES ('300', '33', '551', 'divider_silo1*3', '3', '0', '0', '1');
INSERT INTO catalog_items VALUES ('301', '33', '552', 'divider_silo1*4', '3', '0', '0', '1');
INSERT INTO catalog_items VALUES ('302', '33', '553', 'divider_silo1*5', '3', '0', '0', '1');
INSERT INTO catalog_items VALUES ('303', '33', '554', 'divider_silo1*6', '3', '0', '0', '1');
INSERT INTO catalog_items VALUES ('304', '33', '555', 'divider_silo1*7', '3', '0', '0', '1');
INSERT INTO catalog_items VALUES ('305', '33', '556', 'divider_silo1*8', '3', '0', '0', '1');
INSERT INTO catalog_items VALUES ('306', '33', '557', 'divider_silo1*9', '3', '0', '0', '1');
INSERT INTO catalog_items VALUES ('307', '33', '558', 'divider_silo3*2', '6', '0', '0', '1');
INSERT INTO catalog_items VALUES ('308', '33', '559', 'divider_silo3*3', '6', '0', '0', '1');
INSERT INTO catalog_items VALUES ('309', '33', '560', 'divider_silo3*4', '6', '0', '0', '1');
INSERT INTO catalog_items VALUES ('310', '33', '561', 'divider_silo3*5', '6', '0', '0', '1');
INSERT INTO catalog_items VALUES ('311', '33', '562', 'divider_silo3*6', '6', '0', '0', '1');
INSERT INTO catalog_items VALUES ('312', '33', '563', 'divider_silo3*7', '6', '0', '0', '1');
INSERT INTO catalog_items VALUES ('313', '33', '564', 'divider_silo3*8', '6', '0', '0', '1');
INSERT INTO catalog_items VALUES ('314', '33', '565', 'divider_silo3*9', '6', '0', '0', '1');
INSERT INTO catalog_items VALUES ('315', '33', '566', 'table_silo_med*2', '3', '0', '0', '1');
INSERT INTO catalog_items VALUES ('316', '33', '567', 'table_silo_med*3', '3', '0', '0', '1');
INSERT INTO catalog_items VALUES ('317', '33', '568', 'table_silo_med*4', '3', '0', '0', '1');
INSERT INTO catalog_items VALUES ('318', '33', '569', 'table_silo_med*5', '3', '0', '0', '1');
INSERT INTO catalog_items VALUES ('319', '33', '570', 'table_silo_med*6', '3', '0', '0', '1');
INSERT INTO catalog_items VALUES ('320', '33', '571', 'table_silo_med*7', '3', '0', '0', '1');
INSERT INTO catalog_items VALUES ('321', '33', '572', 'table_silo_med*8', '3', '0', '0', '1');
INSERT INTO catalog_items VALUES ('322', '33', '573', 'table_silo_med*9', '3', '0', '0', '1');
INSERT INTO catalog_items VALUES ('323', '33', '574', 'sofa_silo*2', '4', '0', '0', '1');
INSERT INTO catalog_items VALUES ('324', '33', '575', 'sofa_silo*3', '4', '0', '0', '1');
INSERT INTO catalog_items VALUES ('325', '33', '576', 'sofa_silo*4', '4', '0', '0', '1');
INSERT INTO catalog_items VALUES ('326', '33', '577', 'sofa_silo*5', '4', '0', '0', '1');
INSERT INTO catalog_items VALUES ('327', '33', '578', 'sofa_silo*6', '4', '0', '0', '1');
INSERT INTO catalog_items VALUES ('328', '33', '579', 'sofa_silo*7', '4', '0', '0', '1');
INSERT INTO catalog_items VALUES ('329', '33', '580', 'sofa_silo*8', '4', '0', '0', '1');
INSERT INTO catalog_items VALUES ('330', '33', '581', 'sofa_silo*9', '4', '0', '0', '1');
INSERT INTO catalog_items VALUES ('331', '33', '633', 'chair_silo*2', '3', '0', '0', '1');
INSERT INTO catalog_items VALUES ('332', '33', '634', 'chair_silo*3', '3', '0', '0', '1');
INSERT INTO catalog_items VALUES ('333', '33', '635', 'chair_silo*4', '3', '0', '0', '1');
INSERT INTO catalog_items VALUES ('334', '33', '636', 'chair_silo*5', '3', '0', '0', '1');
INSERT INTO catalog_items VALUES ('335', '33', '637', 'chair_silo*5', '3', '0', '0', '1');
INSERT INTO catalog_items VALUES ('336', '33', '638', 'chair_silo*7', '3', '0', '0', '1');
INSERT INTO catalog_items VALUES ('337', '33', '639', 'chair_silo*8', '3', '0', '0', '1');
INSERT INTO catalog_items VALUES ('338', '33', '640', 'chair_silo*9', '3', '0', '0', '1');
INSERT INTO catalog_items VALUES ('339', '33', '657', 'silo_studydesk', '10', '0', '0', '1');
INSERT INTO catalog_items VALUES ('340', '33', '657', 'silo_studydesk', '10', '0', '0', '1');
INSERT INTO catalog_items VALUES ('341', '33', '675', 'safe_silo', '3', '0', '0', '1');
INSERT INTO catalog_items VALUES ('342', '33', '702', 'barchair_silo*2', '3', '0', '0', '1');
INSERT INTO catalog_items VALUES ('343', '33', '703', 'barchair_silo*3', '3', '0', '0', '1');
INSERT INTO catalog_items VALUES ('344', '33', '704', 'barchair_silo*4', '3', '0', '0', '1');
INSERT INTO catalog_items VALUES ('345', '33', '705', 'barchair_silo*5', '3', '0', '0', '1');
INSERT INTO catalog_items VALUES ('346', '33', '706', 'barchair_silo*6', '3', '0', '0', '1');
INSERT INTO catalog_items VALUES ('347', '33', '707', 'barchair_silo*6', '3', '0', '0', '1');
INSERT INTO catalog_items VALUES ('348', '33', '707', 'barchair_silo*7', '3', '0', '0', '1');
INSERT INTO catalog_items VALUES ('349', '33', '708', 'barchair_silo*8', '3', '0', '0', '1');
INSERT INTO catalog_items VALUES ('350', '33', '709', 'barchair_silo*9', '3', '0', '0', '1');
INSERT INTO catalog_items VALUES ('351', '33', '710', 'safe_silo*2', '3', '0', '0', '1');
INSERT INTO catalog_items VALUES ('352', '33', '711', 'safe_silo*3', '3', '0', '0', '1');
INSERT INTO catalog_items VALUES ('353', '33', '712', 'safe_silo*4', '3', '0', '0', '1');
INSERT INTO catalog_items VALUES ('354', '33', '713', 'safe_silo*5', '3', '0', '0', '1');
INSERT INTO catalog_items VALUES ('355', '33', '714', 'safe_silo*6', '3', '0', '0', '1');
INSERT INTO catalog_items VALUES ('356', '33', '715', 'safe_silo*7', '3', '0', '0', '1');
INSERT INTO catalog_items VALUES ('358', '33', '716', 'safe_silo*8', '3', '0', '0', '1');
INSERT INTO catalog_items VALUES ('359', '33', '717', 'safe_silo*9', '3', '0', '0', '1');
INSERT INTO catalog_items VALUES ('360', '33', '1043', 'safe_silo_pb', '5', '0', '0', '1');
INSERT INTO catalog_items VALUES ('364', '178', '1640', 'ktchn_light', '3', '0', '0', '1');
INSERT INTO catalog_items VALUES ('363', '178', '1639', 'ktchn_stove', '4', '0', '0', '1');
INSERT INTO catalog_items VALUES ('365', '178', '1641', 'ktchn_plates', '3', '0', '0', '1');
INSERT INTO catalog_items VALUES ('366', '178', '1642', 'ktchn_countr_1', '3', '0', '0', '1');
INSERT INTO catalog_items VALUES ('367', '178', '1643', 'ktchn_pots', '5', '0', '0', '1');
INSERT INTO catalog_items VALUES ('368', '178', '1644', 'ktchn_cornr', '3', '0', '0', '1');
INSERT INTO catalog_items VALUES ('369', '178', '1645', 'ktchn_desk', '3', '0', '0', '1');
INSERT INTO catalog_items VALUES ('370', '178', '1646', 'ktchn_trash', '3', '0', '0', '1');
INSERT INTO catalog_items VALUES ('371', '178', '1647', 'ktchn_countr_2', '4', '0', '0', '1');
INSERT INTO catalog_items VALUES ('372', '178', '1648', 'ktchn_bBlock', '5', '0', '0', '1');
INSERT INTO catalog_items VALUES ('373', '178', '1649', 'ktchn_dvdr', '3', '0', '0', '1');
INSERT INTO catalog_items VALUES ('374', '178', '1650', 'ktchn_inspctr', '5', '0', '0', '1');
INSERT INTO catalog_items VALUES ('375', '178', '1651', 'ktchn_fridge', '4', '0', '0', '1');
INSERT INTO catalog_items VALUES ('376', '178', '1653', 'ktchn_sink', '4', '0', '0', '1');
INSERT INTO catalog_items VALUES ('388', '28', '1368', 'xmas08_table', '3', '0', '0', '1');
INSERT INTO catalog_items VALUES ('378', '178', '1654', 'ktchn_gate', '6', '0', '0', '1');
INSERT INTO catalog_items VALUES ('379', '178', '1798', 'ktchn_wall', '8', '0', '0', '1');
INSERT INTO catalog_items VALUES ('380', '178', '1800', 'ktchn_oven', '3', '0', '0', '1');
INSERT INTO catalog_items VALUES ('381', '178', '1801', 'ktchn_knives', '3', '0', '0', '1');
INSERT INTO catalog_items VALUES ('392', '28', '1387', 'xmas08_geysir', '4', '0', '0', '1');
INSERT INTO catalog_items VALUES ('393', '28', '1391', 'xmas08_lantern', '3', '0', '0', '1');
INSERT INTO catalog_items VALUES ('394', '28', '1392', 'xmas08_chair', '3', '0', '0', '1');
INSERT INTO catalog_items VALUES ('395', '29', '1394', 'xmas08_telep', '6', '0', '0', '1');
INSERT INTO catalog_items VALUES ('396', '28', '1395', 'xmas08_cubetree', '3', '0', '0', '1');
INSERT INTO catalog_items VALUES ('397', '28', '1397', 'xmas08_dvdr1', '3', '0', '0', '1');
INSERT INTO catalog_items VALUES ('398', '28', '1398', 'xmas08_hole', '2', '0', '0', '1');
INSERT INTO catalog_items VALUES ('399', '28', '1401', 'xmas08_dvdr2', '3', '0', '0', '1');
INSERT INTO catalog_items VALUES ('400', '28', '1413', 'xmas08_trph2', '6', '0', '0', '1');
INSERT INTO catalog_items VALUES ('401', '28', '1738', 'xmas08_wallpaper', '3', '0', '0', '1');
INSERT INTO catalog_items VALUES ('402', '28', '1739', 'xmas08_icewall', '3', '0', '0', '1');
INSERT INTO catalog_items VALUES ('404', '39', '141', 'plant_pineapple', '3', '0', '0', '1');
INSERT INTO catalog_items VALUES ('405', '39', '142', 'plant_fruittree', '3', '0', '0', '1');
INSERT INTO catalog_items VALUES ('406', '39', '143', 'plant_small_cactus', '1', '0', '0', '1');
INSERT INTO catalog_items VALUES ('407', '39', '144', 'plant_bonsai', '2', '0', '0', '1');
INSERT INTO catalog_items VALUES ('408', '39', '145', 'plant_big_cactus', '3', '0', '0', '1');
INSERT INTO catalog_items VALUES ('409', '39', '146', 'plant_yukka', '3', '0', '0', '1');
INSERT INTO catalog_items VALUES ('410', '39', '152', 'plant_sunflower', '3', '0', '0', '1');
INSERT INTO catalog_items VALUES ('411', '39', '153', 'plant_rose', '3', '0', '0', '1');
INSERT INTO catalog_items VALUES ('412', '39', '816', 'plant_mazegate', '5', '0', '0', '1');
INSERT INTO catalog_items VALUES ('413', '39', '817', 'plant_maze', '5', '0', '0', '1');
INSERT INTO catalog_items VALUES ('414', '39', '818', 'plant_bulrush', '3', '0', '0', '1');
INSERT INTO catalog_items VALUES ('417', '38', '155', 'bath', '6', '0', '0', '1');
INSERT INTO catalog_items VALUES ('418', '38', '156', 'sink', '3', '0', '0', '1');
INSERT INTO catalog_items VALUES ('419', '38', '159', 'tile', '3', '0', '0', '1');
INSERT INTO catalog_items VALUES ('420', '38', '162', 'tile_red', '3', '0', '0', '1');
INSERT INTO catalog_items VALUES ('421', '38', '163', 'tile_yell', '3', '0', '0', '1');
INSERT INTO catalog_items VALUES ('422', '38', '157', 'toilet', '4', '0', '0', '1');
INSERT INTO catalog_items VALUES ('423', '38', '160', 'toilet_red', '4', '0', '0', '1');
INSERT INTO catalog_items VALUES ('424', '38', '161', 'toilet_yell', '4', '0', '0', '1');
INSERT INTO catalog_items VALUES ('425', '38', '158', 'duck', '1', '0', '0', '1');
INSERT INTO catalog_items VALUES ('426', '34', '1536', 'country_rain', '3', '0', '0', '1');
INSERT INTO catalog_items VALUES ('427', '34', '1537', 'country_scarecrow', '3', '0', '0', '1');
INSERT INTO catalog_items VALUES ('428', '34', '1539', 'country_soil', '5', '0', '0', '1');
INSERT INTO catalog_items VALUES ('429', '34', '1540', 'country_grass', '5', '0', '0', '1');
INSERT INTO catalog_items VALUES ('430', '34', '1543', 'country_trctr', '4', '0', '0', '1');
INSERT INTO catalog_items VALUES ('431', '34', '1544', 'country_fnc2', '3', '0', '0', '1');
INSERT INTO catalog_items VALUES ('432', '34', '1545', 'country_fnc1', '2', '0', '0', '1');
INSERT INTO catalog_items VALUES ('433', '34', '1546', 'country_well', '3', '0', '0', '1');
INSERT INTO catalog_items VALUES ('434', '34', '1548', 'country_rbw', '3', '0', '0', '1');
INSERT INTO catalog_items VALUES ('435', '34', '1549', 'country_wheat', '5', '0', '0', '1');
INSERT INTO catalog_items VALUES ('436', '34', '1550', 'country_gate', '6', '0', '0', '1');
INSERT INTO catalog_items VALUES ('437', '34', '1552', 'country_stage', '4', '0', '0', '1');
INSERT INTO catalog_items VALUES ('438', '34', '1557', 'country_log', '3', '0', '0', '1');
INSERT INTO catalog_items VALUES ('439', '34', '1558', 'country_fnc3', '3', '0', '0', '1');
INSERT INTO catalog_items VALUES ('440', '34', '1559', 'country_patio', '1', '0', '0', '1');
INSERT INTO catalog_items VALUES ('441', '34', '1560', 'country_corner', '3', '0', '0', '1');
INSERT INTO catalog_items VALUES ('442', '34', '1561', 'country_ditch', '3', '0', '0', '1');
INSERT INTO catalog_items VALUES ('443', '34', '1777', 'country_forestwall', '4', '0', '0', '1');
INSERT INTO catalog_items VALUES ('444', '34', '1778', 'country_fp', '4', '0', '0', '1');
INSERT INTO catalog_items VALUES ('445', '34', '1779', 'country_wall', '3', '0', '0', '1');
INSERT INTO catalog_items VALUES ('446', '34', '1780', 'country_lantern', '3', '0', '0', '1');
INSERT INTO catalog_items VALUES ('448', '34', '1779', 'country_wall', '15', '0', '0', '5');
INSERT INTO catalog_items VALUES ('449', '40', '43', 'carpet_standard', '3', '0', '0', '1');
INSERT INTO catalog_items VALUES ('450', '40', '45', 'carpet_polar', '3', '0', '0', '1');
INSERT INTO catalog_items VALUES ('451', '40', '52', 'carpet_standard*1', '3', '0', '0', '1');
INSERT INTO catalog_items VALUES ('452', '40', '60', 'carpet_standard*2', '3', '0', '0', '1');
INSERT INTO catalog_items VALUES ('453', '40', '66', 'carpet_standard*3', '3', '0', '0', '1');
INSERT INTO catalog_items VALUES ('454', '40', '66', 'carpet_standard*3', '3', '0', '0', '1');
INSERT INTO catalog_items VALUES ('455', '40', '73', 'carpet_standard*4', '3', '0', '0', '1');
INSERT INTO catalog_items VALUES ('456', '40', '77', 'carpet_standard*5', '3', '0', '0', '1');
INSERT INTO catalog_items VALUES ('457', '40', '102', 'carpet_standard*6', '3', '0', '0', '1');
INSERT INTO catalog_items VALUES ('458', '40', '118', 'carpet_soft', '3', '0', '0', '1');
INSERT INTO catalog_items VALUES ('459', '40', '119', 'carpet_soft*1', '3', '0', '0', '1');
INSERT INTO catalog_items VALUES ('460', '40', '120', 'carpet_soft*2', '3', '0', '0', '1');
INSERT INTO catalog_items VALUES ('461', '40', '121', 'carpet_soft*3', '3', '0', '0', '1');
INSERT INTO catalog_items VALUES ('462', '40', '122', 'carpet_soft*4', '3', '0', '0', '1');
INSERT INTO catalog_items VALUES ('463', '40', '123', 'carpet_soft*5', '3', '0', '0', '1');
INSERT INTO catalog_items VALUES ('464', '40', '124', 'carpet_soft*6', '3', '0', '0', '1');
INSERT INTO catalog_items VALUES ('465', '40', '127', 'carpet_polar*1', '3', '0', '0', '1');
INSERT INTO catalog_items VALUES ('466', '40', '129', 'carpet_polar*2', '3', '0', '0', '1');
INSERT INTO catalog_items VALUES ('467', '40', '130', 'carpet_polar*3', '3', '0', '0', '1');
INSERT INTO catalog_items VALUES ('468', '40', '131', 'carpet_polar*4', '3', '0', '0', '1');
INSERT INTO catalog_items VALUES ('469', '40', '147', 'carpet_standard*7', '3', '0', '0', '1');
INSERT INTO catalog_items VALUES ('470', '40', '148', 'carpet_standard*8', '3', '0', '0', '1');
INSERT INTO catalog_items VALUES ('471', '40', '149', 'carpet_standard*9', '3', '0', '0', '1');
INSERT INTO catalog_items VALUES ('472', '40', '150', 'carpet_standard*10', '3', '0', '0', '1');
INSERT INTO catalog_items VALUES ('473', '40', '151', 'carpet_standard*11', '3', '0', '0', '1');
INSERT INTO catalog_items VALUES ('475', '41', '1781', 'flag_norway', '3', '0', '0', '1');
INSERT INTO catalog_items VALUES ('476', '41', '1795', 'flag_belgium', '3', '0', '0', '1');
INSERT INTO catalog_items VALUES ('477', '41', '1796', 'flag_portugal', '3', '0', '0', '1');
INSERT INTO catalog_items VALUES ('481', '27', '190', 'xmasduck', '1', '0', '0', '1');
INSERT INTO catalog_items VALUES ('482', '27', '263', 'rare_xmas_screen', '6', '0', '0', '1');
INSERT INTO catalog_items VALUES ('483', '28', '1035', 'xmas_icelamp', '3', '0', '0', '1');
INSERT INTO catalog_items VALUES ('485', '27', '1036', 'xmas_cstl_wall', '5', '0', '0', '1');
INSERT INTO catalog_items VALUES ('486', '27', '1037', 'xmas_cstl_twr', '5', '0', '0', '1');
INSERT INTO catalog_items VALUES ('487', '27', '1038', 'xmas_cstl_gate', '5', '0', '0', '1');
INSERT INTO catalog_items VALUES ('488', '27', '1378', 'xmas_snow', '3', '0', '0', '1');
INSERT INTO catalog_items VALUES ('489', '27', '1378', 'xmas_snow', '20', '0', '0', '10');
INSERT INTO catalog_items VALUES ('490', '27', '1676', 'xmas_light', '3', '0', '0', '1');
INSERT INTO catalog_items VALUES ('513', '27', '193', 'tree3', '3', '0', '0', '1');
INSERT INTO catalog_items VALUES ('496', '27', '19973', 'xm09_table', '5', '0', '0', '1');
INSERT INTO catalog_items VALUES ('493', '27', '19971', 'xm09_man_b', '3', '0', '0', '1');
INSERT INTO catalog_items VALUES ('833', '57', '669', 'chair_china', '3', '0', '0', '1');
INSERT INTO catalog_items VALUES ('495', '27', '19972', 'xm09_man_c', '3', '0', '0', '1');
INSERT INTO catalog_items VALUES ('497', '27', '19974', 'xm09_bench', '5', '0', '0', '1');
INSERT INTO catalog_items VALUES ('2120', '7', '20060', 'DEAL_HC_2', '250', '0', '0', '3');
INSERT INTO catalog_items VALUES ('499', '27', '19977', 'xm09_forestwall', '3', '0', '0', '1');
INSERT INTO catalog_items VALUES ('500', '27', '19978', 'xm09_lodgewall', '3', '0', '0', '1');
INSERT INTO catalog_items VALUES ('501', '27', '19979', 'xm09_bauble_25', '3', '0', '0', '1');
INSERT INTO catalog_items VALUES ('502', '27', '19976', 'xm09_firwall', '3', '0', '0', '1');
INSERT INTO catalog_items VALUES ('503', '27', '19980', 'xm09_bauble_26', '3', '0', '0', '1');
INSERT INTO catalog_items VALUES ('512', '27', '187', 'pudding', '3', '0', '0', '1');
INSERT INTO catalog_items VALUES ('505', '27', '19982', 'xm09_bauble_27', '3', '0', '0', '1');
INSERT INTO catalog_items VALUES ('506', '27', '19983', 'xm09_bauble_23', '3', '0', '0', '1');
INSERT INTO catalog_items VALUES ('507', '27', '19984', 'xm09_bauble_24', '3', '0', '0', '1');
INSERT INTO catalog_items VALUES ('508', '27', '19985', 'xm09_candyCane', '3', '0', '0', '1');
INSERT INTO catalog_items VALUES ('509', '27', '19986', 'xm09_stocking', '3', '0', '0', '1');
INSERT INTO catalog_items VALUES ('514', '27', '194', 'tree4', '3', '0', '0', '1');
INSERT INTO catalog_items VALUES ('515', '27', '195', 'tree5', '3', '0', '0', '1');
INSERT INTO catalog_items VALUES ('516', '27', '1039', 'tree7', '3', '0', '0', '1');
INSERT INTO catalog_items VALUES ('517', '27', '1040', 'tree6', '3', '0', '0', '1');
INSERT INTO catalog_items VALUES ('518', '27', '1046', 'christmas_sleigh', '6', '0', '0', '1');
INSERT INTO catalog_items VALUES ('519', '27', '1047', 'christmas_reindeer', '5', '0', '0', '1');
INSERT INTO catalog_items VALUES ('520', '27', '1048', 'christmas_poop', '1', '0', '0', '1');
INSERT INTO catalog_items VALUES ('522', '27', '192', 'triplecandle', '3', '0', '0', '1');
INSERT INTO catalog_items VALUES ('523', '27', '198', 'rcandleset', '3', '0', '0', '1');
INSERT INTO catalog_items VALUES ('524', '27', '270', 'rcandle', '2', '0', '0', '1');
INSERT INTO catalog_items VALUES ('555', '77', '1305', 'greek_corner', '3', '0', '0', '1');
INSERT INTO catalog_items VALUES ('528', '27', '19989', 'xm09_man_a', '3', '0', '0', '1');
INSERT INTO catalog_items VALUES ('1117', '43', '125', 'red_tv', '3', '0', '0', '1');
INSERT INTO catalog_items VALUES ('531', '27', '19981', 'xm09_bauble_27', '3', '0', '0', '1');
INSERT INTO catalog_items VALUES ('532', '28', '1374', 'campfire', '4', '0', '0', '1');
INSERT INTO catalog_items VALUES ('533', '76', '200', 'valeduck', '1', '0', '0', '1');
INSERT INTO catalog_items VALUES ('534', '76', '245', 'valentinescreen', '5', '0', '0', '1');
INSERT INTO catalog_items VALUES ('556', '77', '1306', 'greek_gate', '6', '0', '0', '1');
INSERT INTO catalog_items VALUES ('536', '76', '811', 'plant_valentinerose*3', '3', '0', '0', '1');
INSERT INTO catalog_items VALUES ('537', '76', '812', 'plant_valentinerose*5', '3', '0', '0', '1');
INSERT INTO catalog_items VALUES ('538', '76', '813', 'plant_valentinerose*2', '3', '0', '0', '1');
INSERT INTO catalog_items VALUES ('539', '76', '814', 'plant_valentinerose*4', '3', '0', '0', '1');
INSERT INTO catalog_items VALUES ('540', '76', '815', 'plant_valentinerose*1', '3', '0', '0', '1');
INSERT INTO catalog_items VALUES ('541', '76', '820', 'carpet_valentine', '6', '0', '0', '1');
INSERT INTO catalog_items VALUES ('542', '76', '1092', 'val_teddy*1', '3', '0', '0', '1');
INSERT INTO catalog_items VALUES ('543', '76', '1093', 'val_teddy*2', '3', '0', '0', '1');
INSERT INTO catalog_items VALUES ('544', '76', '1094', 'val_teddy*3', '3', '0', '0', '1');
INSERT INTO catalog_items VALUES ('545', '76', '1095', 'val_teddy*4', '3', '0', '0', '1');
INSERT INTO catalog_items VALUES ('546', '76', '1096', 'val_teddy*4', '3', '0', '0', '1');
INSERT INTO catalog_items VALUES ('547', '76', '1097', 'val_teddy*6', '3', '0', '0', '1');
INSERT INTO catalog_items VALUES ('548', '76', '1098', 'val_randomizer', '8', '0', '0', '1');
INSERT INTO catalog_items VALUES ('549', '76', '1099', 'val_choco', '3', '0', '0', '1');
INSERT INTO catalog_items VALUES ('550', '76', '1669', 'val_heart', '3', '0', '0', '1');
INSERT INTO catalog_items VALUES ('551', '76', '1656', 'post.it.vd', '3', '0', '0', '30');
INSERT INTO catalog_items VALUES ('552', '76', '199', 'statue', '4', '0', '0', '1');
INSERT INTO catalog_items VALUES ('553', '76', '201', 'heartsofa', '3', '0', '0', '1');
INSERT INTO catalog_items VALUES ('557', '77', '1307', 'greek_pillars', '3', '0', '0', '1');
INSERT INTO catalog_items VALUES ('558', '77', '1308', 'greek_seat', '2', '0', '0', '1');
INSERT INTO catalog_items VALUES ('564', '71', '1623', 'rela_candle1', '3', '0', '0', '1');
INSERT INTO catalog_items VALUES ('99003', '500', '99003', 'qt_xm10_icetiger', '10', '0', '0', '1');
INSERT INTO catalog_items VALUES ('99002', '500', '99002', 'qt_xm10_stone', '10', '0', '0', '1');
INSERT INTO catalog_items VALUES ('562', '77', '1312', 'greek_block', '4', '0', '0', '1');
INSERT INTO catalog_items VALUES ('99001', '500', '99001', 'qt_xm10_icedragon', '10', '0', '0', '1');
INSERT INTO catalog_items VALUES ('2108', '91', '20051', 'ads_twi_trophy', '10', '0', '0', '1');
INSERT INTO catalog_items VALUES ('566', '71', '1625', 'rela_candles2', '3', '0', '0', '1');
INSERT INTO catalog_items VALUES ('766', '72', '796', 'romantique_pianochair*5', '2', '0', '0', '1');
INSERT INTO catalog_items VALUES ('568', '71', '1627', 'rela_hchair', '5', '0', '0', '1');
INSERT INTO catalog_items VALUES ('569', '71', '1628', 'rela_candle2', '3', '0', '0', '1');
INSERT INTO catalog_items VALUES ('570', '71', '1632', 'rela_candle3', '3', '0', '0', '1');
INSERT INTO catalog_items VALUES ('571', '71', '1634', 'rela_plant', '4', '0', '0', '1');
INSERT INTO catalog_items VALUES ('572', '71', '1635', 'rela_candles1', '3', '0', '0', '1');
INSERT INTO catalog_items VALUES ('573', '71', '1636', 'rela_candles3', '3', '0', '0', '1');
INSERT INTO catalog_items VALUES ('574', '71', '1637', 'rela_orchid', '5', '0', '0', '1');
INSERT INTO catalog_items VALUES ('575', '71', '1638', 'rela_rock', '4', '0', '0', '1');
INSERT INTO catalog_items VALUES ('576', '71', '1794', 'rela_wall', '4', '0', '0', '1');
INSERT INTO catalog_items VALUES ('578', '59', '209', 'basket', '3', '0', '0', '1');
INSERT INTO catalog_items VALUES ('579', '59', '208', 'bunny', '3', '0', '0', '1');
INSERT INTO catalog_items VALUES ('580', '59', '207', 'easterduck', '1', '0', '0', '1');
INSERT INTO catalog_items VALUES ('581', '59', '210', 'birdie', '4', '0', '0', '1');
INSERT INTO catalog_items VALUES ('584', '56', '1124', 'arabian_teamk', '4', '0', '0', '1');
INSERT INTO catalog_items VALUES ('585', '56', '1125', 'arabian_snake', '3', '0', '0', '1');
INSERT INTO catalog_items VALUES ('586', '56', '1126', 'arabian_rug', '6', '0', '0', '1');
INSERT INTO catalog_items VALUES ('587', '56', '1127', 'arabian_pllw', '3', '0', '0', '1');
INSERT INTO catalog_items VALUES ('588', '56', '1128', 'arabian_divdr', '3', '0', '0', '1');
INSERT INTO catalog_items VALUES ('589', '56', '1129', 'arabian_chair', '3', '0', '0', '1');
INSERT INTO catalog_items VALUES ('590', '56', '1130', 'arabian_bigtb', '6', '0', '0', '1');
INSERT INTO catalog_items VALUES ('591', '56', '1131', 'arabian_tetbl', '3', '0', '0', '1');
INSERT INTO catalog_items VALUES ('592', '56', '1132', 'arabian_tray1', '3', '0', '0', '1');
INSERT INTO catalog_items VALUES ('600', '63', '451', 'sporttrack1*1', '3', '0', '0', '1');
INSERT INTO catalog_items VALUES ('594', '56', '1134', 'arabian_tray3', '3', '0', '0', '1');
INSERT INTO catalog_items VALUES ('595', '56', '1135', 'arabian_tray4', '3', '0', '0', '1');
INSERT INTO catalog_items VALUES ('596', '56', '1688', 'arabian_swords', '4', '0', '0', '1');
INSERT INTO catalog_items VALUES ('597', '56', '1689', 'arabian_wndw', '2', '0', '0', '1');
INSERT INTO catalog_items VALUES ('598', '56', '1133', 'arabian_tray2', '3', '0', '0', '1');
INSERT INTO catalog_items VALUES ('601', '63', '452', 'sporttrack1*3', '3', '0', '0', '1');
INSERT INTO catalog_items VALUES ('602', '63', '453', 'sporttrack1*2', '3', '0', '0', '1');
INSERT INTO catalog_items VALUES ('603', '63', '454', 'sporttrack2*1', '3', '0', '0', '1');
INSERT INTO catalog_items VALUES ('604', '63', '455', 'sporttrack2*2', '3', '0', '0', '1');
INSERT INTO catalog_items VALUES ('605', '63', '456', 'sporttrack2*3', '3', '0', '0', '1');
INSERT INTO catalog_items VALUES ('606', '63', '457', 'sporttrack3*1', '3', '0', '0', '1');
INSERT INTO catalog_items VALUES ('607', '63', '458', 'sporttrack3*2', '3', '0', '0', '1');
INSERT INTO catalog_items VALUES ('608', '63', '459', 'sporttrack3*3', '3', '0', '0', '1');
INSERT INTO catalog_items VALUES ('609', '63', '293', 'hockey_light', '4', '0', '0', '1');
INSERT INTO catalog_items VALUES ('610', '63', '292', 'hockey_score', '5', '0', '0', '1');
INSERT INTO catalog_items VALUES ('611', '63', '243', 'bench_lego', '3', '0', '0', '1');
INSERT INTO catalog_items VALUES ('612', '63', '242', 'carpet_legocourt', '4', '0', '0', '1');
INSERT INTO catalog_items VALUES ('613', '63', '244', 'legotrophy', '3', '0', '0', '1');
INSERT INTO catalog_items VALUES ('615', '63', '460', 'footylamp', '3', '0', '0', '1');
INSERT INTO catalog_items VALUES ('617', '64', '1017', 'grunge_chair', '3', '0', '0', '1');
INSERT INTO catalog_items VALUES ('618', '64', '1018', 'grunge_mattress', '4', '0', '0', '1');
INSERT INTO catalog_items VALUES ('619', '64', '1019', 'grunge_radiator', '3', '0', '0', '1');
INSERT INTO catalog_items VALUES ('620', '64', '1020', 'grunge_shelf', '4', '0', '0', '1');
INSERT INTO catalog_items VALUES ('621', '64', '1022', 'grunge_table', '4', '0', '0', '1');
INSERT INTO catalog_items VALUES ('622', '64', '1021', 'grunge_sign', '3', '0', '0', '1');
INSERT INTO catalog_items VALUES ('623', '64', '1110', 'grunge_candle', '2', '0', '0', '1');
INSERT INTO catalog_items VALUES ('624', '64', '1111', 'grunge_bench', '4', '0', '0', '1');
INSERT INTO catalog_items VALUES ('625', '64', '1112', 'grunge_barrel', '3', '0', '0', '1');
INSERT INTO catalog_items VALUES ('626', '64', '1700', 'window_grunge', '2', '0', '0', '1');
INSERT INTO catalog_items VALUES ('628', '67', '844', 'jp_tatami2', '4', '0', '0', '1');
INSERT INTO catalog_items VALUES ('629', '67', '845', 'jp_tatami', '3', '0', '0', '1');
INSERT INTO catalog_items VALUES ('630', '67', '847', 'jp_bamboo', '5', '0', '0', '1');
INSERT INTO catalog_items VALUES ('631', '67', '848', 'jp_irori', '5', '0', '0', '1');
INSERT INTO catalog_items VALUES ('632', '67', '849', 'jp_pillow', '2', '0', '0', '1');
INSERT INTO catalog_items VALUES ('633', '67', '937', 'jp_lantern', '3', '0', '0', '1');
INSERT INTO catalog_items VALUES ('634', '67', '965', 'jp_drawer', '3', '0', '0', '1');
INSERT INTO catalog_items VALUES ('635', '67', '1118', 'jp_tray6', '3', '0', '0', '1');
INSERT INTO catalog_items VALUES ('636', '67', '1119', 'jp_tray5', '3', '0', '0', '1');
INSERT INTO catalog_items VALUES ('637', '67', '1120', 'jp_tray4', '3', '0', '0', '1');
INSERT INTO catalog_items VALUES ('638', '67', '1121', 'jp_tray3', '3', '0', '0', '1');
INSERT INTO catalog_items VALUES ('639', '67', '1122', 'jp_tray2', '3', '0', '0', '1');
INSERT INTO catalog_items VALUES ('640', '67', '1123', 'jp_tray1', '3', '0', '0', '1');
INSERT INTO catalog_items VALUES ('641', '67', '1150', 'jp_table', '5', '0', '0', '1');
INSERT INTO catalog_items VALUES ('642', '67', '1151', 'jp_rare', '6', '0', '0', '1');
INSERT INTO catalog_items VALUES ('643', '67', '1152', 'jp_katana3', '3', '0', '0', '1');
INSERT INTO catalog_items VALUES ('644', '67', '1153', 'jp_katana2', '3', '0', '0', '1');
INSERT INTO catalog_items VALUES ('645', '67', '1154', 'jp_katana1', '3', '0', '0', '1');
INSERT INTO catalog_items VALUES ('646', '67', '1197', 'jp_teamaker', '4', '0', '0', '1');
INSERT INTO catalog_items VALUES ('647', '67', '1671', 'jp_ninjastars', '4', '0', '0', '1');
INSERT INTO catalog_items VALUES ('648', '67', '1685', 'jp_sheet3', '3', '0', '0', '1');
INSERT INTO catalog_items VALUES ('649', '67', '1686', 'jp_sheet2', '3', '0', '0', '1');
INSERT INTO catalog_items VALUES ('650', '67', '1687', 'jp_sheet1', '3', '0', '0', '1');
INSERT INTO catalog_items VALUES ('651', '75', '969', 'summer_grill*1', '3', '0', '0', '1');
INSERT INTO catalog_items VALUES ('652', '75', '970', 'summer_grill*2', '3', '0', '0', '1');
INSERT INTO catalog_items VALUES ('653', '75', '971', 'summer_grill*3', '3', '0', '0', '1');
INSERT INTO catalog_items VALUES ('654', '75', '972', 'summer_grill*4', '3', '0', '0', '1');
INSERT INTO catalog_items VALUES ('655', '75', '973', 'summer_chair*1', '3', '0', '0', '1');
INSERT INTO catalog_items VALUES ('656', '75', '974', 'summer_chair*2', '3', '0', '0', '1');
INSERT INTO catalog_items VALUES ('657', '75', '975', 'summer_chair*3', '3', '0', '0', '1');
INSERT INTO catalog_items VALUES ('658', '75', '976', 'summer_chair*4', '3', '0', '0', '1');
INSERT INTO catalog_items VALUES ('659', '75', '977', 'summer_chair*5', '3', '0', '0', '1');
INSERT INTO catalog_items VALUES ('660', '75', '978', 'summer_chair*6', '3', '0', '0', '1');
INSERT INTO catalog_items VALUES ('661', '75', '979', 'summer_chair*7', '3', '0', '0', '1');
INSERT INTO catalog_items VALUES ('662', '75', '980', 'summer_chair*8', '3', '0', '0', '1');
INSERT INTO catalog_items VALUES ('663', '75', '981', 'summer_chair*9', '3', '0', '0', '1');
INSERT INTO catalog_items VALUES ('664', '75', '1003', 'summer_pool*1', '5', '0', '0', '1');
INSERT INTO catalog_items VALUES ('665', '75', '1004', 'summer_pool*2', '5', '0', '0', '1');
INSERT INTO catalog_items VALUES ('666', '75', '1005', 'summer_pool*3', '5', '0', '0', '1');
INSERT INTO catalog_items VALUES ('667', '75', '1006', 'summer_pool*4', '5', '0', '0', '1');
INSERT INTO catalog_items VALUES ('668', '75', '1616', 'summer_raft1', '4', '0', '0', '1');
INSERT INTO catalog_items VALUES ('669', '75', '1618', 'summer_raft2', '4', '0', '0', '1');
INSERT INTO catalog_items VALUES ('670', '75', '1620', 'summer_icebox', '3', '0', '0', '1');
INSERT INTO catalog_items VALUES ('671', '66', '19938', 'hween09_floor', '3', '0', '0', '1');
INSERT INTO catalog_items VALUES ('672', '66', '19938', 'hween09_floor', '25', '0', '0', '10');
INSERT INTO catalog_items VALUES ('673', '66', '19939', 'hween09_jar', '3', '0', '0', '1');
INSERT INTO catalog_items VALUES ('674', '66', '19941', 'hween09_organ', '5', '0', '0', '1');
INSERT INTO catalog_items VALUES ('675', '66', '19944', 'hween09_table', '6', '0', '0', '1');
INSERT INTO catalog_items VALUES ('676', '66', '19945', 'hween09_chair', '3', '0', '0', '1');
INSERT INTO catalog_items VALUES ('677', '66', '19946', 'hween09_mirror', '4', '0', '0', '1');
INSERT INTO catalog_items VALUES ('678', '66', '19947', 'hween09_hatch', '6', '0', '0', '1');
INSERT INTO catalog_items VALUES ('679', '66', '19948', 'hween09_ghost', '3', '0', '0', '1');
INSERT INTO catalog_items VALUES ('680', '66', '19949', 'hween09_tv', '3', '0', '0', '1');
INSERT INTO catalog_items VALUES ('681', '66', '19950', 'hween09_chandelier', '5', '0', '0', '1');
INSERT INTO catalog_items VALUES ('682', '66', '19951', 'hween09_crnr1', '3', '0', '0', '1');
INSERT INTO catalog_items VALUES ('683', '66', '19952', 'hween09_paint', '3', '0', '0', '1');
INSERT INTO catalog_items VALUES ('684', '66', '19953', 'hween09_treewall', '3', '0', '0', '1');
INSERT INTO catalog_items VALUES ('685', '66', '19954', 'hween09_wall1', '3', '0', '0', '1');
INSERT INTO catalog_items VALUES ('686', '66', '19955', 'hween09_stonewall', '3', '0', '0', '1');
INSERT INTO catalog_items VALUES ('687', '66', '19956', 'hween09_win', '4', '0', '0', '1');
INSERT INTO catalog_items VALUES ('688', '66', '181', 'pumpkin', '3', '0', '0', '1');
INSERT INTO catalog_items VALUES ('694', '66', '185', 'deadduck3', '1', '0', '0', '1');
INSERT INTO catalog_items VALUES ('690', '66', '182', 'skullcandle', '3', '0', '0', '1');
INSERT INTO catalog_items VALUES ('693', '66', '184', 'deadduck2', '1', '0', '0', '1');
INSERT INTO catalog_items VALUES ('695', '66', '183', 'deadduck', '1', '0', '0', '1');
INSERT INTO catalog_items VALUES ('697', '88', '1334', 'hween08_sink', '3', '0', '0', '1');
INSERT INTO catalog_items VALUES ('698', '88', '1335', 'hween08_curtain', '5', '0', '0', '1');
INSERT INTO catalog_items VALUES ('699', '88', '1336', 'hween08_bath', '6', '0', '0', '1');
INSERT INTO catalog_items VALUES ('700', '88', '1337', 'hween08_defibs', '3', '0', '0', '1');
INSERT INTO catalog_items VALUES ('701', '88', '1338', 'hween08_bbag', '5', '0', '0', '1');
INSERT INTO catalog_items VALUES ('702', '88', '1339', 'hween08_curtain2', '5', '0', '0', '1');
INSERT INTO catalog_items VALUES ('703', '88', '1340', 'hween08_defibs2', '3', '0', '0', '1');
INSERT INTO catalog_items VALUES ('704', '88', '1341', 'hween08_bed', '4', '0', '0', '1');
INSERT INTO catalog_items VALUES ('705', '88', '1342', 'hween08_sink2', '3', '0', '0', '1');
INSERT INTO catalog_items VALUES ('706', '88', '1343', 'hween08_bed2', '4', '0', '0', '1');
INSERT INTO catalog_items VALUES ('707', '88', '1344', 'hween08_bath2', '4', '0', '0', '1');
INSERT INTO catalog_items VALUES ('708', '88', '1345', 'hween08_manhole', '3', '0', '0', '1');
INSERT INTO catalog_items VALUES ('709', '88', '1346', 'hween08_trll', '3', '0', '0', '1');
INSERT INTO catalog_items VALUES ('710', '88', '1721', 'hween08_rad', '3', '0', '0', '1');
INSERT INTO catalog_items VALUES ('711', '88', '1722', 'hween08_wndwb', '3', '0', '0', '1');
INSERT INTO catalog_items VALUES ('712', '88', '1723', 'hween08_wndw', '4', '0', '0', '1');
INSERT INTO catalog_items VALUES ('713', '88', '1724', 'hween08_bio', '3', '0', '0', '1');
INSERT INTO catalog_items VALUES ('714', '74', '1419', 'bolly_lotus_pool', '4', '0', '0', '1');
INSERT INTO catalog_items VALUES ('715', '74', '1422', 'bolly_petals', '3', '0', '0', '1');
INSERT INTO catalog_items VALUES ('716', '74', '1423', 'bolly_tree', '3', '0', '0', '1');
INSERT INTO catalog_items VALUES ('717', '74', '1424', 'bolly_swing', '4', '0', '0', '1');
INSERT INTO catalog_items VALUES ('718', '74', '1425', 'bolly_pillow', '3', '0', '0', '1');
INSERT INTO catalog_items VALUES ('719', '74', '1426', 'bolly_corner', '3', '0', '0', '1');
INSERT INTO catalog_items VALUES ('720', '74', '1427', 'bolly_phant', '5', '0', '0', '1');
INSERT INTO catalog_items VALUES ('721', '74', '1428', 'bolly_monkey_lamp', '4', '0', '0', '1');
INSERT INTO catalog_items VALUES ('722', '74', '1429', 'bolly_drapeb', '4', '0', '0', '1');
INSERT INTO catalog_items VALUES ('723', '74', '1431', 'bolly_lamp', '3', '0', '0', '1');
INSERT INTO catalog_items VALUES ('724', '74', '1432', 'bolly_desk', '3', '0', '0', '1');
INSERT INTO catalog_items VALUES ('725', '74', '1433', 'bolly_vase', '3', '0', '0', '1');
INSERT INTO catalog_items VALUES ('726', '74', '1434', 'bolly_tile2', '3', '0', '0', '1');
INSERT INTO catalog_items VALUES ('727', '74', '1435', 'bolly_table', '4', '0', '0', '1');
INSERT INTO catalog_items VALUES ('728', '74', '1436', 'bolly_drapec', '4', '0', '0', '1');
INSERT INTO catalog_items VALUES ('729', '74', '1437', 'bolly_fountain', '5', '0', '0', '1');
INSERT INTO catalog_items VALUES ('735', '73', '1593', 'SF_reactor', '5', '0', '0', '1');
INSERT INTO catalog_items VALUES ('731', '74', '1439', 'bolly_tile1', '3', '0', '0', '1');
INSERT INTO catalog_items VALUES ('732', '74', '1440', 'bolly_drapea', '4', '0', '0', '1');
INSERT INTO catalog_items VALUES ('733', '74', '1749', 'bolly_wdw_wd', '4', '0', '0', '1');
INSERT INTO catalog_items VALUES ('736', '73', '1594', 'SF_crate_2', '3', '0', '0', '1');
INSERT INTO catalog_items VALUES ('737', '73', '1595', 'SF_chair_blue', '3', '0', '0', '1');
INSERT INTO catalog_items VALUES ('738', '73', '1596', 'sf_pod', '4', '0', '0', '1');
INSERT INTO catalog_items VALUES ('739', '73', '1597', 'SF_panel1', '3', '0', '0', '1');
INSERT INTO catalog_items VALUES ('740', '73', '1598', 'SF_table', '3', '0', '0', '1');
INSERT INTO catalog_items VALUES ('741', '73', '1602', 'SF_panel2', '3', '0', '0', '1');
INSERT INTO catalog_items VALUES ('742', '73', '1603', 'sf_gate', '6', '0', '0', '1');
INSERT INTO catalog_items VALUES ('743', '73', '1599', 'SF_chair_green', '3', '0', '0', '1');
INSERT INTO catalog_items VALUES ('744', '73', '1600', 'SF_crate_1', '2', '0', '0', '1');
INSERT INTO catalog_items VALUES ('745', '73', '1601', 'SF_alien', '4', '0', '0', '1');
INSERT INTO catalog_items VALUES ('746', '73', '1605', 'SF_floor_2', '3', '0', '0', '1');
INSERT INTO catalog_items VALUES ('747', '73', '1604', 'SF_panel3', '5', '0', '0', '1');
INSERT INTO catalog_items VALUES ('748', '73', '1606', 'SF_lamp', '3', '0', '0', '1');
INSERT INTO catalog_items VALUES ('749', '73', '1607', 'SF_chair_red', '3', '0', '0', '1');
INSERT INTO catalog_items VALUES ('750', '73', '1608', 'sf_floor', '3', '0', '0', '1');
INSERT INTO catalog_items VALUES ('751', '73', '1609', 'sf_roof', '5', '0', '0', '1');
INSERT INTO catalog_items VALUES ('752', '73', '1610', 'sf_stick', '3', '0', '0', '1');
INSERT INTO catalog_items VALUES ('753', '73', '1611', 'SF_floor_1', '3', '0', '0', '1');
INSERT INTO catalog_items VALUES ('759', '73', '1791', 'sf_wall3', '6', '0', '0', '1');
INSERT INTO catalog_items VALUES ('758', '73', '1788', 'sf_wall2', '6', '0', '0', '1');
INSERT INTO catalog_items VALUES ('765', '72', '795', 'romantique_pianochair*3', '2', '0', '0', '1');
INSERT INTO catalog_items VALUES ('767', '72', '797', 'romantique_pianochair*2', '2', '0', '0', '1');
INSERT INTO catalog_items VALUES ('768', '72', '798', 'romantique_pianochair*4', '2', '0', '0', '1');
INSERT INTO catalog_items VALUES ('769', '72', '799', 'romantique_pianochair*1', '2', '0', '0', '1');
INSERT INTO catalog_items VALUES ('770', '72', '800', 'romantique_divan*3', '4', '0', '0', '1');
INSERT INTO catalog_items VALUES ('771', '72', '801', 'romantique_divan*5', '4', '0', '0', '1');
INSERT INTO catalog_items VALUES ('772', '72', '802', 'romantique_divan*2', '4', '0', '0', '1');
INSERT INTO catalog_items VALUES ('773', '72', '803', 'romantique_divan*4', '4', '0', '0', '1');
INSERT INTO catalog_items VALUES ('774', '72', '804', 'romantique_divan*1', '4', '0', '0', '1');
INSERT INTO catalog_items VALUES ('775', '72', '805', 'romantique_chair*3', '3', '0', '0', '1');
INSERT INTO catalog_items VALUES ('776', '72', '806', 'romantique_chair*5', '3', '0', '0', '1');
INSERT INTO catalog_items VALUES ('777', '72', '807', 'romantique_chair*2', '3', '0', '0', '1');
INSERT INTO catalog_items VALUES ('778', '72', '808', 'romantique_chair*4', '3', '0', '0', '1');
INSERT INTO catalog_items VALUES ('779', '72', '809', 'romantique_chair*1', '3', '0', '0', '1');
INSERT INTO catalog_items VALUES ('780', '72', '832', 'romantique_tray2', '3', '0', '0', '1');
INSERT INTO catalog_items VALUES ('781', '72', '833', 'romantique_tray1', '3', '0', '0', '1');
INSERT INTO catalog_items VALUES ('782', '72', '834', 'romantique_smalltabl*3', '2', '0', '0', '1');
INSERT INTO catalog_items VALUES ('783', '72', '835', 'romantique_smalltabl*5', '2', '0', '0', '1');
INSERT INTO catalog_items VALUES ('784', '72', '836', 'romantique_smalltabl*2', '2', '0', '0', '1');
INSERT INTO catalog_items VALUES ('785', '72', '837', 'romantique_smalltabl*4', '2', '0', '0', '1');
INSERT INTO catalog_items VALUES ('786', '72', '838', 'romantique_smalltabl*1', '2', '0', '0', '1');
INSERT INTO catalog_items VALUES ('787', '72', '839', 'romantique_mirrortabl', '3', '0', '0', '1');
INSERT INTO catalog_items VALUES ('788', '72', '840', 'romantique_divider*3', '3', '0', '0', '1');
INSERT INTO catalog_items VALUES ('789', '72', '841', 'romantique_divider*2', '3', '0', '0', '1');
INSERT INTO catalog_items VALUES ('790', '72', '842', 'romantique_divider*4', '3', '0', '0', '1');
INSERT INTO catalog_items VALUES ('791', '72', '843', 'romantique_divider*1', '3', '0', '0', '1');
INSERT INTO catalog_items VALUES ('792', '72', '891', 'romantique_clock', '5', '0', '0', '1');
INSERT INTO catalog_items VALUES ('793', '69', '1347', 'party_table', '3', '0', '0', '1');
INSERT INTO catalog_items VALUES ('794', '69', '1348', 'party_discol', '5', '0', '0', '1');
INSERT INTO catalog_items VALUES ('795', '69', '1349', 'party_block2', '4', '0', '0', '1');
INSERT INTO catalog_items VALUES ('796', '69', '1350', 'party_barcorn', '3', '0', '0', '1');
INSERT INTO catalog_items VALUES ('797', '69', '1351', 'party_chair', '3', '0', '0', '1');
INSERT INTO catalog_items VALUES ('798', '69', '1352', 'party_block', '2', '0', '0', '1');
INSERT INTO catalog_items VALUES ('799', '69', '1353', 'party_ravel', '5', '0', '0', '1');
INSERT INTO catalog_items VALUES ('800', '69', '1354', 'party_tube_lava', '4', '0', '0', '1');
INSERT INTO catalog_items VALUES ('801', '69', '1355', 'party_tray', '3', '0', '0', '1');
INSERT INTO catalog_items VALUES ('802', '69', '1356', 'party_djtable', '4', '0', '0', '1');
INSERT INTO catalog_items VALUES ('803', '69', '1357', 'party_floor', '3', '0', '0', '1');
INSERT INTO catalog_items VALUES ('804', '69', '1358', 'party_ball', '3', '0', '0', '1');
INSERT INTO catalog_items VALUES ('805', '69', '1359', 'party_tube_bubble', '4', '0', '0', '1');
INSERT INTO catalog_items VALUES ('806', '69', '1360', 'party_mic', '3', '0', '0', '1');
INSERT INTO catalog_items VALUES ('807', '69', '1361', 'party_beamer', '5', '0', '0', '1');
INSERT INTO catalog_items VALUES ('808', '69', '1362', 'party_bardesk', '3', '0', '0', '1');
INSERT INTO catalog_items VALUES ('809', '69', '1363', 'party_seat', '3', '0', '0', '1');
INSERT INTO catalog_items VALUES ('810', '69', '1729', 'party_wc_boy', '3', '0', '0', '1');
INSERT INTO catalog_items VALUES ('811', '69', '1730', 'party_led', '4', '0', '0', '1');
INSERT INTO catalog_items VALUES ('812', '69', '1731', 'party_neon5', '3', '0', '0', '1');
INSERT INTO catalog_items VALUES ('813', '69', '1732', 'party_neon1', '3', '0', '0', '1');
INSERT INTO catalog_items VALUES ('814', '69', '1733', 'party_neon2', '3', '0', '0', '1');
INSERT INTO catalog_items VALUES ('815', '69', '1734', 'party_wc_girl', '3', '0', '0', '1');
INSERT INTO catalog_items VALUES ('816', '69', '1735', 'party_neon3', '3', '0', '0', '1');
INSERT INTO catalog_items VALUES ('817', '69', '1736', 'party_shelf', '4', '0', '0', '1');
INSERT INTO catalog_items VALUES ('818', '69', '1737', 'party_neon4', '3', '0', '0', '1');
INSERT INTO catalog_items VALUES ('822', '29', '179', 'doorB', '3', '0', '0', '1');
INSERT INTO catalog_items VALUES ('821', '29', '180', 'doorC', '4', '0', '0', '1');
INSERT INTO catalog_items VALUES ('824', '94', '227', 'spyro', '10', '0', '0', '1');
INSERT INTO catalog_items VALUES ('825', '94', '202', 'throne', '500', '500', '0', '1');
INSERT INTO catalog_items VALUES ('826', '94', '203', 'samovar', '200', '200', '0', '1');
INSERT INTO catalog_items VALUES ('827', '94', '110', 'plant_cruddy', '10', '0', '0', '1');
INSERT INTO catalog_items VALUES ('1118', '43', '126', 'wood_tv', '4', '0', '0', '1');
INSERT INTO catalog_items VALUES ('830', '94', '273', 'djesko_turntable', '10', '0', '0', '1');
INSERT INTO catalog_items VALUES ('834', '57', '670', 'china_table', '3', '0', '0', '1');
INSERT INTO catalog_items VALUES ('835', '57', '682', 'china_shelve', '4', '0', '0', '1');
INSERT INTO catalog_items VALUES ('836', '57', '700', 'wall_china', '4', '0', '0', '1');
INSERT INTO catalog_items VALUES ('837', '57', '701', 'corner_china', '4', '0', '0', '1');
INSERT INTO catalog_items VALUES ('838', '57', '1418', 'china_moongt', '5', '0', '0', '1');
INSERT INTO catalog_items VALUES ('839', '57', '1420', 'china_ox', '3', '0', '0', '1');
INSERT INTO catalog_items VALUES ('840', '57', '1746', 'china_pstr2', '3', '0', '0', '1');
INSERT INTO catalog_items VALUES ('846', '60', '1000', 'exe_rug', '20', '0', '0', '6');
INSERT INTO catalog_items VALUES ('842', '57', '1747', 'china_light', '3', '0', '0', '1');
INSERT INTO catalog_items VALUES ('843', '57', '1748', 'china_pstr1', '3', '0', '0', '1');
INSERT INTO catalog_items VALUES ('845', '60', '1000', 'exe_rug', '4', '0', '0', '1');
INSERT INTO catalog_items VALUES ('847', '60', '1001', 'exe_s_table', '4', '0', '0', '1');
INSERT INTO catalog_items VALUES ('848', '60', '1049', 'exe_bardesk', '2', '0', '0', '1');
INSERT INTO catalog_items VALUES ('849', '60', '1050', 'exe_chair', '3', '0', '0', '1');
INSERT INTO catalog_items VALUES ('850', '60', '1051', 'exe_chair2', '3', '0', '0', '1');
INSERT INTO catalog_items VALUES ('851', '60', '1052', 'exe_corner', '2', '0', '0', '1');
INSERT INTO catalog_items VALUES ('852', '60', '1053', 'exe_drinks', '3', '0', '0', '1');
INSERT INTO catalog_items VALUES ('853', '60', '1054', 'exe_sofa', '3', '0', '0', '1');
INSERT INTO catalog_items VALUES ('1758', '123', '1061', 'noob_table*1', '0', '20', '0', '1');
INSERT INTO catalog_items VALUES ('855', '60', '1055', 'exe_table', '6', '0', '0', '1');
INSERT INTO catalog_items VALUES ('856', '60', '1091', 'exe_plant', '3', '0', '0', '1');
INSERT INTO catalog_items VALUES ('857', '60', '1510', 'exe_light', '3', '0', '0', '1');
INSERT INTO catalog_items VALUES ('858', '60', '1517', 'exe_gate', '6', '0', '0', '1');
INSERT INTO catalog_items VALUES ('859', '60', '1521', 'exe_cubelight', '3', '0', '0', '1');
INSERT INTO catalog_items VALUES ('860', '60', '1523', 'exe_artlamp', '3', '0', '0', '1');
INSERT INTO catalog_items VALUES ('861', '60', '1771', 'exe_map', '5', '0', '0', '1');
INSERT INTO catalog_items VALUES ('862', '60', '1772', 'exe_wfall', '4', '0', '0', '1');
INSERT INTO catalog_items VALUES ('863', '58', '1449', 'lc_tile1', '3', '0', '0', '1');
INSERT INTO catalog_items VALUES ('865', '58', '1451', 'lc_crab2', '3', '0', '0', '1');
INSERT INTO catalog_items VALUES ('866', '58', '1454', 'lc_coral_divider_hi', '4', '0', '0', '1');
INSERT INTO catalog_items VALUES ('867', '58', '1456', 'lc_tubes_corners', '3', '0', '0', '1');
INSERT INTO catalog_items VALUES ('868', '58', '1457', 'lc_table', '4', '0', '0', '1');
INSERT INTO catalog_items VALUES ('869', '58', '1458', 'lc_tile2', '3', '0', '0', '1');
INSERT INTO catalog_items VALUES ('870', '58', '1459', 'lc_anemone', '4', '0', '0', '1');
INSERT INTO catalog_items VALUES ('871', '58', '1461', 'lc_glass_floor', '4', '0', '0', '1');
INSERT INTO catalog_items VALUES ('872', '58', '1460', 'lc_coral_divider_low', '3', '0', '0', '1');
INSERT INTO catalog_items VALUES ('874', '58', '1462', 'lc_medusa1', '4', '0', '0', '1');
INSERT INTO catalog_items VALUES ('875', '58', '1463', 'lc_crab1', '4', '0', '0', '1');
INSERT INTO catalog_items VALUES ('876', '58', '1466', 'lc_tubes_straight', '3', '0', '0', '1');
INSERT INTO catalog_items VALUES ('877', '58', '1470', 'lc_corner', '3', '0', '0', '1');
INSERT INTO catalog_items VALUES ('878', '58', '1471', 'lc_stool', '3', '0', '0', '1');
INSERT INTO catalog_items VALUES ('879', '58', '1472', 'lc_chair', '3', '0', '0', '1');
INSERT INTO catalog_items VALUES ('880', '58', '1473', 'lc_desk', '3', '0', '0', '1');
INSERT INTO catalog_items VALUES ('881', '58', '1755', 'lc_wall1', '5', '0', '0', '1');
INSERT INTO catalog_items VALUES ('882', '58', '1756', 'lc_window2', '5', '0', '0', '1');
INSERT INTO catalog_items VALUES ('883', '58', '1757', 'lc_window1', '3', '0', '0', '1');
INSERT INTO catalog_items VALUES ('884', '58', '1759', 'lc_wall2', '5', '0', '0', '1');
INSERT INTO catalog_items VALUES ('890', '42', '296', 'a0 prizetrophy3_b', '10', '0', '0', '1');
INSERT INTO catalog_items VALUES ('889', '42', '295', 'a0 prizetrophy2_b', '10', '0', '0', '1');
INSERT INTO catalog_items VALUES ('891', '42', '297', 'a0 prizetrophy4_b', '10', '0', '0', '1');
INSERT INTO catalog_items VALUES ('892', '42', '298', 'a0 prizetrophy5_b', '10', '0', '0', '1');
INSERT INTO catalog_items VALUES ('893', '42', '299', 'a0 prizetrophy1_g', '10', '0', '0', '1');
INSERT INTO catalog_items VALUES ('894', '42', '300', 'a0 prizetrophy2_g', '10', '0', '0', '1');
INSERT INTO catalog_items VALUES ('895', '42', '301', 'a0 prizetrophy3_g', '10', '0', '0', '1');
INSERT INTO catalog_items VALUES ('896', '42', '302', 'a0 prizetrophy4_g', '10', '0', '0', '1');
INSERT INTO catalog_items VALUES ('897', '42', '303', 'a0 prizetrophy4_g', '10', '0', '0', '1');
INSERT INTO catalog_items VALUES ('898', '42', '304', 'a0 prizetrophy6_g', '10', '0', '0', '1');
INSERT INTO catalog_items VALUES ('899', '42', '305', 'a0 prizetrophy1_s', '10', '0', '0', '1');
INSERT INTO catalog_items VALUES ('900', '93', '306', 'a0 prizetrophy2_s', '10', '0', '0', '1');
INSERT INTO catalog_items VALUES ('901', '42', '307', 'a0 prizetrophy3_s', '10', '0', '0', '1');
INSERT INTO catalog_items VALUES ('902', '42', '308', 'a0 prizetrophy4_s', '10', '0', '0', '1');
INSERT INTO catalog_items VALUES ('903', '42', '309', 'a0 prizetrophy5_s', '10', '0', '0', '1');
INSERT INTO catalog_items VALUES ('904', '42', '310', 'a0 prizetrophy6_s', '10', '0', '0', '1');
INSERT INTO catalog_items VALUES ('905', '42', '311', 'a0 prizetrophy1_b', '10', '0', '0', '1');
INSERT INTO catalog_items VALUES ('906', '93', '335', 'a0 prizetrophy7_b', '10', '0', '0', '1');
INSERT INTO catalog_items VALUES ('1386', '8', '1313', 'hcc_table', '4', '0', '0', '1');
INSERT INTO catalog_items VALUES ('908', '93', '336', 'a0 prizetrophy7_g', '10', '0', '0', '1');
INSERT INTO catalog_items VALUES ('909', '93', '337', 'a0 prizetrophy7_s', '10', '0', '0', '1');
INSERT INTO catalog_items VALUES ('911', '94', '1615', 'prizetrophy_hot', '10', '0', '0', '1');
INSERT INTO catalog_items VALUES ('912', '94', '1617', 'prizetrophy_cool', '10', '0', '0', '1');
INSERT INTO catalog_items VALUES ('913', '32', '171', 'bar_basic', '4', '0', '0', '1');
INSERT INTO catalog_items VALUES ('914', '32', '172', 'shelves_basic', '3', '0', '0', '1');
INSERT INTO catalog_items VALUES ('915', '32', '175', 'lamp_basic', '3', '0', '0', '1');
INSERT INTO catalog_items VALUES ('916', '32', '177', 'fridge', '6', '0', '0', '1');
INSERT INTO catalog_items VALUES ('987', '65', '890', 'rope_divider', '5', '0', '0', '1');
INSERT INTO catalog_items VALUES ('918', '32', '893', 'pura_mdl5*2', '3', '0', '0', '1');
INSERT INTO catalog_items VALUES ('919', '32', '894', 'pura_mdl5*3', '3', '0', '0', '1');
INSERT INTO catalog_items VALUES ('920', '32', '895', 'pura_mdl5*4', '3', '0', '0', '1');
INSERT INTO catalog_items VALUES ('921', '32', '896', 'pura_mdl5*5', '3', '0', '0', '1');
INSERT INTO catalog_items VALUES ('922', '32', '897', 'pura_mdl5*6', '3', '0', '0', '1');
INSERT INTO catalog_items VALUES ('923', '32', '898', 'pura_mdl5*7', '3', '0', '0', '1');
INSERT INTO catalog_items VALUES ('924', '32', '899', 'pura_mdl5*8', '3', '0', '0', '1');
INSERT INTO catalog_items VALUES ('925', '32', '900', 'pura_mdl5*9', '3', '0', '0', '1');
INSERT INTO catalog_items VALUES ('926', '32', '901', 'pura_mdl4*1', '3', '0', '0', '1');
INSERT INTO catalog_items VALUES ('927', '32', '902', 'pura_mdl4*2', '3', '0', '0', '1');
INSERT INTO catalog_items VALUES ('928', '32', '903', 'pura_mdl4*3', '3', '0', '0', '1');
INSERT INTO catalog_items VALUES ('929', '32', '904', 'pura_mdl4*4', '3', '0', '0', '1');
INSERT INTO catalog_items VALUES ('930', '32', '905', 'pura_mdl4*5', '3', '0', '0', '1');
INSERT INTO catalog_items VALUES ('931', '32', '906', 'pura_mdl4*6', '3', '0', '0', '1');
INSERT INTO catalog_items VALUES ('932', '32', '907', 'pura_mdl4*7', '3', '0', '0', '1');
INSERT INTO catalog_items VALUES ('933', '32', '908', 'pura_mdl4*8', '3', '0', '0', '1');
INSERT INTO catalog_items VALUES ('934', '32', '909', 'pura_mdl4*9', '3', '0', '0', '1');
INSERT INTO catalog_items VALUES ('935', '32', '910', 'pura_mdl3*1', '3', '0', '0', '1');
INSERT INTO catalog_items VALUES ('936', '32', '911', 'pura_mdl3*2', '3', '0', '0', '1');
INSERT INTO catalog_items VALUES ('937', '32', '912', 'pura_mdl3*3', '3', '0', '0', '1');
INSERT INTO catalog_items VALUES ('938', '32', '913', 'pura_mdl3*4', '3', '0', '0', '1');
INSERT INTO catalog_items VALUES ('939', '32', '914', 'pura_mdl3*5', '3', '0', '0', '1');
INSERT INTO catalog_items VALUES ('940', '32', '915', 'pura_mdl3*6', '3', '0', '0', '1');
INSERT INTO catalog_items VALUES ('941', '32', '916', 'pura_mdl3*7', '3', '0', '0', '1');
INSERT INTO catalog_items VALUES ('942', '32', '917', 'pura_mdl3*8', '3', '0', '0', '1');
INSERT INTO catalog_items VALUES ('943', '32', '918', 'pura_mdl3*9', '3', '0', '0', '1');
INSERT INTO catalog_items VALUES ('944', '32', '919', 'pura_mdl2*1', '3', '0', '0', '1');
INSERT INTO catalog_items VALUES ('945', '32', '920', 'pura_mdl2*2', '3', '0', '0', '1');
INSERT INTO catalog_items VALUES ('947', '32', '921', 'pura_mdl2*3', '3', '0', '0', '1');
INSERT INTO catalog_items VALUES ('948', '32', '922', 'pura_mdl2*4', '3', '0', '0', '1');
INSERT INTO catalog_items VALUES ('949', '32', '923', 'pura_mdl2*5', '3', '0', '0', '1');
INSERT INTO catalog_items VALUES ('950', '32', '924', 'pura_mdl2*6', '3', '0', '0', '1');
INSERT INTO catalog_items VALUES ('951', '32', '925', 'pura_mdl2*7', '3', '0', '0', '1');
INSERT INTO catalog_items VALUES ('952', '32', '926', 'pura_mdl2*8', '3', '0', '0', '1');
INSERT INTO catalog_items VALUES ('953', '32', '927', 'pura_mdl2*9', '3', '0', '0', '1');
INSERT INTO catalog_items VALUES ('954', '32', '928', 'pura_mdl1*1', '3', '0', '0', '1');
INSERT INTO catalog_items VALUES ('955', '32', '929', 'pura_mdl1*2', '3', '0', '0', '1');
INSERT INTO catalog_items VALUES ('956', '32', '930', 'pura_mdl1*3', '3', '0', '0', '1');
INSERT INTO catalog_items VALUES ('957', '32', '931', 'pura_mdl1*4', '3', '0', '0', '1');
INSERT INTO catalog_items VALUES ('958', '32', '932', 'pura_mdl1*5', '3', '0', '0', '1');
INSERT INTO catalog_items VALUES ('959', '32', '933', 'pura_mdl1*6', '3', '0', '0', '1');
INSERT INTO catalog_items VALUES ('960', '32', '934', 'pura_mdl1*7', '3', '0', '0', '1');
INSERT INTO catalog_items VALUES ('961', '32', '935', 'pura_mdl1*8', '3', '0', '0', '1');
INSERT INTO catalog_items VALUES ('962', '32', '936', 'pura_mdl1*9', '3', '0', '0', '1');
INSERT INTO catalog_items VALUES ('963', '32', '939', 'chair_basic*2', '4', '0', '0', '1');
INSERT INTO catalog_items VALUES ('964', '32', '940', 'chair_basic*3', '4', '0', '0', '1');
INSERT INTO catalog_items VALUES ('965', '32', '941', 'chair_basic*4', '4', '0', '0', '1');
INSERT INTO catalog_items VALUES ('966', '32', '942', 'chair_basic*5', '4', '0', '0', '1');
INSERT INTO catalog_items VALUES ('967', '32', '943', 'chair_basic*6', '4', '0', '0', '1');
INSERT INTO catalog_items VALUES ('968', '32', '944', 'chair_basic*7', '4', '0', '0', '1');
INSERT INTO catalog_items VALUES ('969', '32', '946', 'chair_basic*9', '4', '0', '0', '1');
INSERT INTO catalog_items VALUES ('970', '32', '948', 'bed_budget*2', '4', '0', '0', '1');
INSERT INTO catalog_items VALUES ('971', '32', '949', 'bed_budget*3', '4', '0', '0', '1');
INSERT INTO catalog_items VALUES ('972', '32', '950', 'bed_budget*4', '4', '0', '0', '1');
INSERT INTO catalog_items VALUES ('973', '32', '951', 'bed_budget*5', '4', '0', '0', '1');
INSERT INTO catalog_items VALUES ('974', '32', '952', 'bed_budget*6', '4', '0', '0', '1');
INSERT INTO catalog_items VALUES ('975', '32', '953', 'bed_budget*7', '4', '0', '0', '1');
INSERT INTO catalog_items VALUES ('976', '32', '954', 'bed_budget*8', '4', '0', '0', '1');
INSERT INTO catalog_items VALUES ('977', '32', '955', 'bed_budget*9', '4', '0', '0', '1');
INSERT INTO catalog_items VALUES ('978', '32', '957', 'bed_budget_one*2', '3', '0', '0', '1');
INSERT INTO catalog_items VALUES ('979', '32', '958', 'bed_budget_one*3', '3', '0', '0', '1');
INSERT INTO catalog_items VALUES ('980', '32', '959', 'bed_budget_one*4', '3', '0', '0', '1');
INSERT INTO catalog_items VALUES ('981', '32', '960', 'bed_budget_one*5', '3', '0', '0', '1');
INSERT INTO catalog_items VALUES ('982', '32', '961', 'bed_budget_one*6', '3', '0', '0', '1');
INSERT INTO catalog_items VALUES ('983', '32', '962', 'bed_budget_one*7', '3', '0', '0', '1');
INSERT INTO catalog_items VALUES ('984', '32', '963', 'bed_budget_one*8', '3', '0', '0', '1');
INSERT INTO catalog_items VALUES ('985', '32', '964', 'bed_budget_one*9', '3', '0', '0', '1');
INSERT INTO catalog_items VALUES ('988', '65', '846', 'habbowood_chair', '3', '0', '0', '1');
INSERT INTO catalog_items VALUES ('989', '65', '860', 'spotlight', '5', '0', '0', '1');
INSERT INTO catalog_items VALUES ('990', '65', '1672', 'habw_mirror', '3', '0', '0', '1');
INSERT INTO catalog_items VALUES ('991', '65', '967', 'tile_marble', '1', '0', '0', '1');
INSERT INTO catalog_items VALUES ('992', '65', '967', 'tile_marble', '40', '0', '0', '50');
INSERT INTO catalog_items VALUES ('993', '65', '968', 'tile_brown', '1', '0', '0', '1');
INSERT INTO catalog_items VALUES ('994', '65', '968', 'tile_brown', '40', '0', '0', '50');
INSERT INTO catalog_items VALUES ('995', '65', '966', 'tile_stella', '2', '0', '0', '1');
INSERT INTO catalog_items VALUES ('996', '65', '966', 'tile_stella', '30', '0', '0', '50');
INSERT INTO catalog_items VALUES ('998', '102', '437', 'queue_tile1*3', '7', '0', '0', '1');
INSERT INTO catalog_items VALUES ('999', '102', '437', 'queue_tile1*3', '18', '0', '0', '3');
INSERT INTO catalog_items VALUES ('1000', '102', '437', 'queue_tile1*3', '30', '0', '0', '5');
INSERT INTO catalog_items VALUES ('1001', '102', '438', 'queue_tile1*6', '7', '0', '0', '1');
INSERT INTO catalog_items VALUES ('1002', '102', '438', 'queue_tile1*6', '18', '0', '0', '3');
INSERT INTO catalog_items VALUES ('1003', '102', '438', 'queue_tile1*6', '30', '0', '0', '5');
INSERT INTO catalog_items VALUES ('1004', '102', '439', 'queue_tile1*4', '7', '0', '0', '1');
INSERT INTO catalog_items VALUES ('1005', '102', '439', 'queue_tile1*4', '18', '0', '0', '3');
INSERT INTO catalog_items VALUES ('1006', '102', '439', 'queue_tile1*4', '30', '0', '0', '5');
INSERT INTO catalog_items VALUES ('1007', '102', '440', 'queue_tile1*9', '7', '0', '0', '1');
INSERT INTO catalog_items VALUES ('1008', '102', '440', 'queue_tile1*9', '18', '0', '0', '3');
INSERT INTO catalog_items VALUES ('1009', '102', '440', 'queue_tile1*9', '30', '0', '0', '5');
INSERT INTO catalog_items VALUES ('1010', '102', '441', 'queue_tile1*8', '7', '0', '0', '1');
INSERT INTO catalog_items VALUES ('1011', '102', '441', 'queue_tile1*8', '18', '0', '0', '3');
INSERT INTO catalog_items VALUES ('1012', '102', '441', 'queue_tile1*8', '30', '0', '0', '5');
INSERT INTO catalog_items VALUES ('1013', '102', '442', 'queue_tile1*5', '7', '0', '0', '1');
INSERT INTO catalog_items VALUES ('1014', '102', '442', 'queue_tile1*5', '18', '0', '0', '3');
INSERT INTO catalog_items VALUES ('1015', '102', '442', 'queue_tile1*5', '30', '0', '0', '5');
INSERT INTO catalog_items VALUES ('1016', '102', '443', 'queue_tile1*7', '7', '0', '0', '1');
INSERT INTO catalog_items VALUES ('1017', '102', '443', 'queue_tile1*7', '18', '0', '0', '3');
INSERT INTO catalog_items VALUES ('1018', '102', '443', 'queue_tile1*7', '30', '0', '0', '5');
INSERT INTO catalog_items VALUES ('1019', '102', '444', 'queue_tile1*2', '7', '0', '0', '1');
INSERT INTO catalog_items VALUES ('1020', '102', '444', 'queue_tile1*2', '18', '0', '0', '3');
INSERT INTO catalog_items VALUES ('1021', '102', '444', 'queue_tile1*2', '30', '0', '0', '5');
INSERT INTO catalog_items VALUES ('1022', '102', '445', 'queue_tile1*1', '7', '0', '0', '1');
INSERT INTO catalog_items VALUES ('1023', '102', '445', 'queue_tile1*1', '18', '0', '0', '3');
INSERT INTO catalog_items VALUES ('1024', '102', '445', 'queue_tile1*1', '30', '0', '0', '5');
INSERT INTO catalog_items VALUES ('1025', '102', '446', 'queue_tile1*0', '7', '0', '0', '1');
INSERT INTO catalog_items VALUES ('1026', '102', '446', 'queue_tile1*0', '18', '0', '0', '3');
INSERT INTO catalog_items VALUES ('1027', '102', '446', 'queue_tile1*0', '30', '0', '0', '5');
INSERT INTO catalog_items VALUES ('1030', '68', '1568', 'lt_stage2', '4', '0', '0', '1');
INSERT INTO catalog_items VALUES ('1029', '68', '1567', 'LT_skull', '3', '0', '0', '1');
INSERT INTO catalog_items VALUES ('1031', '68', '1569', 'lt_lavac', '3', '0', '0', '1');
INSERT INTO catalog_items VALUES ('1032', '68', '1570', 'lt_gate', '6', '0', '0', '1');
INSERT INTO catalog_items VALUES ('1033', '68', '1573', 'lt_statue', '3', '0', '0', '1');
INSERT INTO catalog_items VALUES ('1034', '68', '1574', 'lt_spider', '3', '0', '0', '1');
INSERT INTO catalog_items VALUES ('1035', '68', '1575', 'lt_stone2', '4', '0', '0', '1');
INSERT INTO catalog_items VALUES ('1036', '68', '1576', 'LT_throne', '4', '0', '0', '1');
INSERT INTO catalog_items VALUES ('1037', '68', '1578', 'lt_patch', '3', '0', '0', '1');
INSERT INTO catalog_items VALUES ('1038', '68', '1579', 'lt_lava', '3', '0', '0', '1');
INSERT INTO catalog_items VALUES ('1039', '68', '1580', 'LT_pillar2', '3', '0', '0', '1');
INSERT INTO catalog_items VALUES ('1040', '68', '1581', 'lt_bughill', '5', '0', '0', '1');
INSERT INTO catalog_items VALUES ('1041', '68', '1584', 'LT_pillar', '4', '0', '0', '1');
INSERT INTO catalog_items VALUES ('1042', '68', '1588', 'lt_stone1', '4', '0', '0', '1');
INSERT INTO catalog_items VALUES ('1043', '68', '1585', 'lt_stage1', '3', '0', '0', '1');
INSERT INTO catalog_items VALUES ('1044', '68', '1785', 'lt_wall', '3', '0', '0', '1');
INSERT INTO catalog_items VALUES ('1045', '68', '1783', 'lt_jngl_wall', '3', '0', '0', '1');
INSERT INTO catalog_items VALUES ('1119', '43', '154', 'tv_luxus', '5', '0', '0', '1');
INSERT INTO catalog_items VALUES ('1050', '61', '718', 'glass_shelf', '4', '0', '0', '1');
INSERT INTO catalog_items VALUES ('1051', '61', '719', 'glass_chair', '3', '0', '0', '1');
INSERT INTO catalog_items VALUES ('1052', '61', '720', 'glass_stool', '2', '0', '0', '1');
INSERT INTO catalog_items VALUES ('1053', '61', '721', 'glass_sofa', '4', '0', '0', '1');
INSERT INTO catalog_items VALUES ('1054', '61', '723', 'glass_table*2', '3', '0', '0', '1');
INSERT INTO catalog_items VALUES ('2102', '29', '20046', 'exe_elevator', '5', '0', '0', '1');
INSERT INTO catalog_items VALUES ('1056', '61', '724', 'glass_table*3', '3', '0', '0', '1');
INSERT INTO catalog_items VALUES ('1057', '61', '722', 'glass_table', '3', '0', '0', '1');
INSERT INTO catalog_items VALUES ('1058', '61', '725', 'glass_table*4', '3', '0', '0', '1');
INSERT INTO catalog_items VALUES ('1059', '61', '726', 'glass_table*5', '3', '0', '0', '1');
INSERT INTO catalog_items VALUES ('1060', '61', '727', 'glass_table*6', '3', '0', '0', '1');
INSERT INTO catalog_items VALUES ('1061', '61', '728', 'glass_table*7', '3', '0', '0', '1');
INSERT INTO catalog_items VALUES ('1062', '61', '729', 'glass_table*8', '3', '0', '0', '1');
INSERT INTO catalog_items VALUES ('1063', '61', '730', 'glass_table*9', '3', '0', '0', '1');
INSERT INTO catalog_items VALUES ('1064', '61', '731', 'glass_chair*2', '3', '0', '0', '1');
INSERT INTO catalog_items VALUES ('1065', '61', '732', 'glass_chair*3', '3', '0', '0', '1');
INSERT INTO catalog_items VALUES ('1066', '61', '733', 'glass_chair*4', '3', '0', '0', '1');
INSERT INTO catalog_items VALUES ('1067', '61', '734', 'glass_chair*5', '3', '0', '0', '1');
INSERT INTO catalog_items VALUES ('1068', '61', '735', 'glass_chair*6', '3', '0', '0', '1');
INSERT INTO catalog_items VALUES ('1069', '61', '736', 'glass_chair*7', '3', '0', '0', '1');
INSERT INTO catalog_items VALUES ('1070', '61', '737', 'glass_chair*8', '3', '0', '0', '1');
INSERT INTO catalog_items VALUES ('1071', '61', '738', 'glass_chair*9', '3', '0', '0', '1');
INSERT INTO catalog_items VALUES ('1072', '61', '739', 'glass_sofa*2', '4', '0', '0', '1');
INSERT INTO catalog_items VALUES ('1073', '61', '740', 'glass_sofa*3', '4', '0', '0', '1');
INSERT INTO catalog_items VALUES ('1074', '61', '741', 'glass_sofa*4', '4', '0', '0', '1');
INSERT INTO catalog_items VALUES ('1075', '61', '742', 'glass_sofa*5', '4', '0', '0', '1');
INSERT INTO catalog_items VALUES ('1076', '61', '743', 'glass_sofa*6', '4', '0', '0', '1');
INSERT INTO catalog_items VALUES ('1077', '61', '744', 'glass_sofa*7', '4', '0', '0', '1');
INSERT INTO catalog_items VALUES ('1078', '61', '745', 'glass_sofa*8', '4', '0', '0', '1');
INSERT INTO catalog_items VALUES ('1079', '61', '746', 'glass_sofa*9', '4', '0', '0', '1');
INSERT INTO catalog_items VALUES ('1080', '61', '747', 'glass_stool*2', '2', '0', '0', '1');
INSERT INTO catalog_items VALUES ('1081', '61', '748', 'glass_stool*4', '2', '0', '0', '1');
INSERT INTO catalog_items VALUES ('1082', '61', '749', 'glass_stool*5', '2', '0', '0', '1');
INSERT INTO catalog_items VALUES ('1083', '61', '750', 'glass_stool*6', '2', '0', '0', '1');
INSERT INTO catalog_items VALUES ('1084', '61', '751', 'glass_stool*7', '2', '0', '0', '1');
INSERT INTO catalog_items VALUES ('1085', '61', '752', 'glass_stool*8', '2', '0', '0', '1');
INSERT INTO catalog_items VALUES ('1086', '61', '753', 'glass_stool*3', '2', '0', '0', '1');
INSERT INTO catalog_items VALUES ('1087', '61', '754', 'glass_stool*9', '2', '0', '0', '1');
INSERT INTO catalog_items VALUES ('1088', '72', '829', 'grand_piano*4', '5', '0', '0', '1');
INSERT INTO catalog_items VALUES ('1089', '72', '826', 'grand_piano*3', '5', '0', '0', '1');
INSERT INTO catalog_items VALUES ('1090', '72', '827', 'grand_piano*5', '5', '0', '0', '1');
INSERT INTO catalog_items VALUES ('1091', '72', '828', 'grand_piano*2', '5', '0', '0', '1');
INSERT INTO catalog_items VALUES ('1092', '72', '830', 'grand_piano*1', '5', '0', '0', '1');
INSERT INTO catalog_items VALUES ('1093', '94', '248', 'rare_beehive_bulb', '10', '0', '0', '1');
INSERT INTO catalog_items VALUES ('1094', '94', '261', 'rare_beehive_bulb*1', '10', '0', '0', '1');
INSERT INTO catalog_items VALUES ('1095', '94', '262', 'rare_beehive_bulb*2', '10', '0', '0', '1');
INSERT INTO catalog_items VALUES ('1096', '94', '206', 'hologram', '10', '0', '0', '1');
INSERT INTO catalog_items VALUES ('1097', '94', '228', 'redhologram', '10', '0', '0', '1');
INSERT INTO catalog_items VALUES ('1098', '94', '255', 'rare_hammock', '10', '0', '0', '1');
INSERT INTO catalog_items VALUES ('1099', '94', '251', 'rare_elephant_statue', '150', '150', '0', '1');
INSERT INTO catalog_items VALUES ('1100', '94', '252', 'rare_fountain', '10', '0', '0', '1');
INSERT INTO catalog_items VALUES ('1101', '94', '253', 'rare_stand', '10', '0', '0', '1');
INSERT INTO catalog_items VALUES ('1102', '27', '254', 'rare_globe', '5', '0', '0', '1');
INSERT INTO catalog_items VALUES ('1103', '94', '256', 'rare_elephant_statue*1', '150', '150', '0', '1');
INSERT INTO catalog_items VALUES ('1104', '94', '257', 'rare_elephant_statue*2', '150', '150', '0', '1');
INSERT INTO catalog_items VALUES ('1105', '94', '258', 'rare_fountain*1', '10', '0', '0', '1');
INSERT INTO catalog_items VALUES ('1106', '94', '259', 'rare_fountain*2', '10', '0', '0', '1');
INSERT INTO catalog_items VALUES ('1107', '94', '260', 'rare_fountain*3', '10', '0', '0', '1');
INSERT INTO catalog_items VALUES ('1108', '94', '264', 'rare_parasol*1', '10', '0', '0', '1');
INSERT INTO catalog_items VALUES ('1109', '94', '265', 'rare_parasol*2', '10', '0', '0', '1');
INSERT INTO catalog_items VALUES ('1110', '94', '266', 'rare_parasol*3', '10', '0', '0', '1');
INSERT INTO catalog_items VALUES ('1111', '94', '312', 'rare_parasol*0', '10', '0', '0', '1');
INSERT INTO catalog_items VALUES ('1113', '94', '448', 'rare_snowrug', '100', '100', '0', '1');
INSERT INTO catalog_items VALUES ('1114', '94', '668', 'rare_moonrug', '10', '0', '0', '1');
INSERT INTO catalog_items VALUES ('1326', '105', '339', 'scifiport*9', '10', '0', '0', '1');
INSERT INTO catalog_items VALUES ('1120', '43', '1655', 'post.it', '3', '0', '0', '30');
INSERT INTO catalog_items VALUES ('1121', '41', '1677', 'hrella_poster_3', '3', '0', '0', '1');
INSERT INTO catalog_items VALUES ('1122', '41', '1678', 'hrella_poster_2', '3', '0', '0', '1');
INSERT INTO catalog_items VALUES ('1123', '41', '1679', 'hrella_poster_1', '3', '0', '0', '1');
INSERT INTO catalog_items VALUES ('1124', '43', '104', 'pizza', '3', '0', '0', '1');
INSERT INTO catalog_items VALUES ('1125', '43', '105', 'drinks', '3', '0', '0', '1');
INSERT INTO catalog_items VALUES ('1133', '112', '19995', 'ads_twi_dvdr2', '3', '0', '0', '1');
INSERT INTO catalog_items VALUES ('1127', '43', '111', 'bottle', '3', '0', '0', '1');
INSERT INTO catalog_items VALUES ('1128', '43', '211', 'edice', '6', '0', '0', '1');
INSERT INTO catalog_items VALUES ('1132', '112', '19994', 'ads_twi_fountn', '5', '0', '0', '1');
INSERT INTO catalog_items VALUES ('1134', '112', '19996', 'ads_twi_roses', '4', '0', '0', '1');
INSERT INTO catalog_items VALUES ('1135', '112', '19997', 'ads_twi_table', '4', '0', '0', '1');
INSERT INTO catalog_items VALUES ('1136', '112', '19998', 'ads_twi_chair', '3', '0', '0', '1');
INSERT INTO catalog_items VALUES ('1137', '112', '19999', 'ads_twi_dvdr1', '3', '0', '0', '1');
INSERT INTO catalog_items VALUES ('1138', '112', '20000', 'ads_twi_piano', '4', '0', '0', '1');
INSERT INTO catalog_items VALUES ('1139', '112', '20001', 'ads_twi_tower', '4', '0', '0', '1');
INSERT INTO catalog_items VALUES ('1140', '112', '20002', 'ads_twi_toolbx', '3', '0', '0', '1');
INSERT INTO catalog_items VALUES ('1141', '112', '20003', 'ads_twi_mist', '3', '0', '0', '1');
INSERT INTO catalog_items VALUES ('1159', '62', '763', 'gothiccandelabra', '4', '0', '0', '1');
INSERT INTO catalog_items VALUES ('1154', '62', '764', 'gothrailing', '3', '0', '0', '1');
INSERT INTO catalog_items VALUES ('1152', '62', '777', 'gothic_sofa*1', '4', '0', '0', '1');
INSERT INTO catalog_items VALUES ('1156', '62', '778', 'gothic_stool*1', '2', '0', '0', '1');
INSERT INTO catalog_items VALUES ('1157', '62', '780', 'gothic_sofa*2', '4', '0', '0', '1');
INSERT INTO catalog_items VALUES ('1173', '62', '790', 'gothic_stool*5', '2', '0', '0', '1');
INSERT INTO catalog_items VALUES ('1160', '62', '762', 'gothgate', '6', '0', '0', '1');
INSERT INTO catalog_items VALUES ('1161', '62', '765', 'goth_table', '5', '0', '0', '1');
INSERT INTO catalog_items VALUES ('1162', '62', '776', 'gothic_chair*1', '3', '0', '0', '1');
INSERT INTO catalog_items VALUES ('1163', '62', '779', 'gothic_chair*2', '3', '0', '0', '1');
INSERT INTO catalog_items VALUES ('1164', '62', '781', 'gothic_stool*2', '2', '0', '0', '1');
INSERT INTO catalog_items VALUES ('1165', '62', '782', 'gothic_chair*3', '3', '0', '0', '1');
INSERT INTO catalog_items VALUES ('1166', '62', '783', 'gothic_sofa*3', '4', '0', '0', '1');
INSERT INTO catalog_items VALUES ('1167', '62', '784', 'gothic_stool*3', '2', '0', '0', '1');
INSERT INTO catalog_items VALUES ('1168', '62', '785', 'gothic_chair*4', '3', '0', '0', '1');
INSERT INTO catalog_items VALUES ('1169', '62', '786', 'gothic_sofa*4', '4', '0', '0', '1');
INSERT INTO catalog_items VALUES ('1170', '62', '787', 'gothic_stool*4', '2', '0', '0', '1');
INSERT INTO catalog_items VALUES ('1171', '62', '788', 'gothic_chair*5', '4', '0', '0', '1');
INSERT INTO catalog_items VALUES ('1172', '62', '789', 'gothic_sofa*5', '4', '0', '0', '1');
INSERT INTO catalog_items VALUES ('1174', '62', '791', 'gothic_chair*6', '3', '0', '0', '1');
INSERT INTO catalog_items VALUES ('1175', '62', '792', 'gothic_sofa*6', '4', '0', '0', '1');
INSERT INTO catalog_items VALUES ('1176', '62', '793', 'gothic_stool*6', '2', '0', '0', '1');
INSERT INTO catalog_items VALUES ('1177', '62', '821', 'gothic_carpet', '5', '0', '0', '1');
INSERT INTO catalog_items VALUES ('1178', '62', '822', 'gothic_carpet2', '6', '0', '0', '1');
INSERT INTO catalog_items VALUES ('1179', '62', '823', 'gothic_chair', '3', '0', '0', '1');
INSERT INTO catalog_items VALUES ('1180', '62', '824', 'gothic_sofa', '4', '0', '0', '1');
INSERT INTO catalog_items VALUES ('1181', '62', '825', 'gothic_stool', '2', '0', '0', '1');
INSERT INTO catalog_items VALUES ('1182', '62', '1665', 'gothicfountain', '3', '0', '0', '1');
INSERT INTO catalog_items VALUES ('1183', '62', '1668', 'torch', '3', '0', '0', '1');
INSERT INTO catalog_items VALUES ('1184', '62', '1726', 'gothicfountain2', '3', '0', '0', '1');
INSERT INTO catalog_items VALUES ('1186', '103', '1204', 'diner_tray_6', '3', '0', '0', '1');
INSERT INTO catalog_items VALUES ('1187', '103', '1205', 'diner_tray_5', '3', '0', '0', '1');
INSERT INTO catalog_items VALUES ('1188', '103', '1206', 'diner_tray_4', '3', '0', '0', '1');
INSERT INTO catalog_items VALUES ('1191', '103', '1208', 'diner_tray_2', '3', '0', '0', '1');
INSERT INTO catalog_items VALUES ('1294', '105', '398', 'pillar*1', '10', '0', '0', '1');
INSERT INTO catalog_items VALUES ('1190', '103', '1207', 'diner_tray_3', '3', '0', '0', '1');
INSERT INTO catalog_items VALUES ('1192', '103', '1209', 'diner_tray_1', '3', '0', '0', '1');
INSERT INTO catalog_items VALUES ('1193', '103', '1203', 'diner_tray_7', '3', '0', '0', '1');
INSERT INTO catalog_items VALUES ('1194', '103', '1210', 'diner_tray_0', '3', '0', '0', '1');
INSERT INTO catalog_items VALUES ('1195', '103', '1211', 'diner_sofa_2*1', '4', '0', '0', '1');
INSERT INTO catalog_items VALUES ('1196', '103', '1212', 'diner_sofa_2*2', '4', '0', '0', '1');
INSERT INTO catalog_items VALUES ('1197', '103', '1213', 'diner_sofa_2*3', '4', '0', '0', '1');
INSERT INTO catalog_items VALUES ('1198', '103', '1214', 'diner_sofa_2*4', '4', '0', '0', '1');
INSERT INTO catalog_items VALUES ('1199', '103', '1215', 'diner_sofa_2*5', '4', '0', '0', '1');
INSERT INTO catalog_items VALUES ('1200', '103', '1216', 'diner_sofa_2*6', '4', '0', '0', '1');
INSERT INTO catalog_items VALUES ('1201', '103', '1217', 'diner_sofa_2*7', '4', '0', '0', '1');
INSERT INTO catalog_items VALUES ('1202', '103', '1218', 'diner_sofa_2*8', '4', '0', '0', '1');
INSERT INTO catalog_items VALUES ('1203', '103', '1219', 'diner_sofa_2*9', '4', '0', '0', '1');
INSERT INTO catalog_items VALUES ('1204', '103', '1220', 'diner_shaker', '5', '0', '0', '1');
INSERT INTO catalog_items VALUES ('1205', '103', '1221', 'diner_rug', '3', '0', '0', '1');
INSERT INTO catalog_items VALUES ('1206', '103', '1221', 'diner_rug', '25', '0', '0', '10');
INSERT INTO catalog_items VALUES ('1207', '103', '1222', 'diner_gumvendor*1', '3', '0', '0', '1');
INSERT INTO catalog_items VALUES ('1208', '103', '1223', 'diner_gumvendor*2', '3', '0', '0', '1');
INSERT INTO catalog_items VALUES ('1209', '103', '1224', 'diner_gumvendor*3', '3', '0', '0', '1');
INSERT INTO catalog_items VALUES ('1210', '103', '1225', 'diner_gumvendor*4', '3', '0', '0', '1');
INSERT INTO catalog_items VALUES ('1211', '103', '1226', 'diner_gumvendor*5', '3', '0', '0', '1');
INSERT INTO catalog_items VALUES ('1212', '103', '1227', 'diner_gumvendor*6', '3', '0', '0', '1');
INSERT INTO catalog_items VALUES ('1213', '103', '1228', 'diner_gumvendor*7', '3', '0', '0', '1');
INSERT INTO catalog_items VALUES ('1214', '103', '1229', 'diner_gumvendor*8', '3', '0', '0', '1');
INSERT INTO catalog_items VALUES ('1215', '103', '1230', 'diner_gumvendor*9', '3', '0', '0', '1');
INSERT INTO catalog_items VALUES ('1216', '103', '1231', 'diner_cashreg*1', '3', '0', '0', '1');
INSERT INTO catalog_items VALUES ('1217', '103', '1234', 'diner_cashreg*4', '3', '0', '0', '1');
INSERT INTO catalog_items VALUES ('1218', '103', '1232', 'diner_cashreg*2', '3', '0', '0', '1');
INSERT INTO catalog_items VALUES ('1219', '103', '1233', 'diner_cashreg*3', '3', '0', '0', '1');
INSERT INTO catalog_items VALUES ('1220', '103', '1235', 'diner_cashreg*5', '3', '0', '0', '1');
INSERT INTO catalog_items VALUES ('1221', '103', '1236', 'diner_cashreg*6', '3', '0', '0', '1');
INSERT INTO catalog_items VALUES ('1222', '103', '1237', 'diner_cashreg*7', '3', '0', '0', '1');
INSERT INTO catalog_items VALUES ('1223', '103', '1238', 'diner_cashreg*8', '3', '0', '0', '1');
INSERT INTO catalog_items VALUES ('1224', '103', '1239', 'diner_cashreg*9', '3', '0', '0', '1');
INSERT INTO catalog_items VALUES ('1225', '103', '1240', 'diner_table_2*1', '5', '0', '0', '1');
INSERT INTO catalog_items VALUES ('1226', '103', '1241', 'diner_table_2*2', '5', '0', '0', '1');
INSERT INTO catalog_items VALUES ('1227', '103', '1242', 'diner_table_2*3', '5', '0', '0', '1');
INSERT INTO catalog_items VALUES ('1228', '103', '1243', 'diner_table_2*4', '5', '0', '0', '1');
INSERT INTO catalog_items VALUES ('1229', '103', '1244', 'diner_table_2*5', '5', '0', '0', '1');
INSERT INTO catalog_items VALUES ('1230', '103', '1245', 'diner_table_2*6', '5', '0', '0', '1');
INSERT INTO catalog_items VALUES ('1231', '103', '1246', 'diner_table_2*7', '5', '0', '0', '1');
INSERT INTO catalog_items VALUES ('1232', '103', '1247', 'diner_table_2*8', '5', '0', '0', '1');
INSERT INTO catalog_items VALUES ('1233', '103', '1248', 'diner_table_2*9', '5', '0', '0', '1');
INSERT INTO catalog_items VALUES ('1234', '103', '1249', 'diner_table_1*1', '3', '0', '0', '1');
INSERT INTO catalog_items VALUES ('1235', '103', '1250', 'diner_table_1*2', '3', '0', '0', '1');
INSERT INTO catalog_items VALUES ('1236', '103', '1251', 'diner_table_1*3', '3', '0', '0', '1');
INSERT INTO catalog_items VALUES ('1237', '103', '1252', 'diner_table_1*4', '3', '0', '0', '1');
INSERT INTO catalog_items VALUES ('1238', '103', '1253', 'diner_table_1*5', '3', '0', '0', '1');
INSERT INTO catalog_items VALUES ('1239', '103', '1254', 'diner_table_1*6', '3', '0', '0', '1');
INSERT INTO catalog_items VALUES ('1240', '103', '1255', 'diner_table_1*7', '3', '0', '0', '1');
INSERT INTO catalog_items VALUES ('1241', '103', '1256', 'diner_table_1*8', '3', '0', '0', '1');
INSERT INTO catalog_items VALUES ('1242', '103', '1257', 'diner_table_1*9', '3', '0', '0', '1');
INSERT INTO catalog_items VALUES ('1243', '103', '1258', 'diner_sofa_1*1', '4', '0', '0', '1');
INSERT INTO catalog_items VALUES ('1244', '103', '1259', 'diner_sofa_1*2', '4', '0', '0', '1');
INSERT INTO catalog_items VALUES ('1245', '103', '1260', 'diner_sofa_1*3', '4', '0', '0', '1');
INSERT INTO catalog_items VALUES ('1246', '103', '1261', 'diner_sofa_1*4', '4', '0', '0', '1');
INSERT INTO catalog_items VALUES ('1247', '103', '1262', 'diner_sofa_1*5', '4', '0', '0', '1');
INSERT INTO catalog_items VALUES ('1248', '103', '1263', 'diner_sofa_1*6', '4', '0', '0', '1');
INSERT INTO catalog_items VALUES ('1251', '103', '1265', 'diner_sofa_1*8', '4', '0', '0', '1');
INSERT INTO catalog_items VALUES ('1250', '103', '1264', 'diner_sofa_1*7', '4', '0', '0', '1');
INSERT INTO catalog_items VALUES ('1252', '103', '1266', 'diner_sofa_1*9', '4', '0', '0', '1');
INSERT INTO catalog_items VALUES ('1253', '103', '1267', 'diner_chair*1', '3', '0', '0', '1');
INSERT INTO catalog_items VALUES ('1254', '103', '1268', 'diner_chair*2', '3', '0', '0', '1');
INSERT INTO catalog_items VALUES ('1255', '103', '1269', 'diner_chair*3', '3', '0', '0', '1');
INSERT INTO catalog_items VALUES ('1256', '103', '1270', 'diner_chair*4', '3', '0', '0', '1');
INSERT INTO catalog_items VALUES ('1257', '103', '1271', 'diner_chair*5', '3', '0', '0', '1');
INSERT INTO catalog_items VALUES ('1258', '103', '1272', 'diner_chair*6', '3', '0', '0', '1');
INSERT INTO catalog_items VALUES ('1259', '103', '1273', 'diner_chair*7', '3', '0', '0', '1');
INSERT INTO catalog_items VALUES ('1260', '103', '1274', 'diner_chair*8', '3', '0', '0', '1');
INSERT INTO catalog_items VALUES ('1261', '103', '1275', 'diner_chair*9', '3', '0', '0', '1');
INSERT INTO catalog_items VALUES ('1262', '103', '1276', 'diner_bardesk_gate*1', '6', '0', '0', '1');
INSERT INTO catalog_items VALUES ('1263', '103', '1277', 'diner_bardesk_gate*2', '6', '0', '0', '1');
INSERT INTO catalog_items VALUES ('1264', '103', '1278', 'diner_bardesk_gate*3', '6', '0', '0', '1');
INSERT INTO catalog_items VALUES ('1265', '103', '1279', 'diner_bardesk_gate*4', '6', '0', '0', '1');
INSERT INTO catalog_items VALUES ('1266', '103', '1280', 'diner_bardesk_gate*5', '6', '0', '0', '1');
INSERT INTO catalog_items VALUES ('1267', '103', '1281', 'diner_bardesk_gate*6', '6', '0', '0', '1');
INSERT INTO catalog_items VALUES ('2119', '7', '20060', 'DEAL_HC_3', '500', '0', '0', '6');
INSERT INTO catalog_items VALUES ('1269', '103', '1282', 'diner_bardesk_gate*7', '6', '0', '0', '1');
INSERT INTO catalog_items VALUES ('1270', '103', '1283', 'diner_bardesk_gate*8', '6', '0', '0', '1');
INSERT INTO catalog_items VALUES ('1271', '103', '1284', 'diner_bardesk_gate*9', '6', '0', '0', '1');
INSERT INTO catalog_items VALUES ('1272', '103', '1285', 'diner_bardesk_corner*1', '3', '0', '0', '1');
INSERT INTO catalog_items VALUES ('1273', '103', '1286', 'diner_bardesk_corner*2', '3', '0', '0', '1');
INSERT INTO catalog_items VALUES ('1274', '103', '1287', 'diner_bardesk_corner*3', '3', '0', '0', '1');
INSERT INTO catalog_items VALUES ('1275', '103', '1288', 'diner_bardesk_corner*4', '3', '0', '0', '1');
INSERT INTO catalog_items VALUES ('1276', '103', '1289', 'diner_bardesk_corner*6', '3', '0', '0', '1');
INSERT INTO catalog_items VALUES ('1277', '103', '1290', 'diner_bardesk_corner*7', '3', '0', '0', '1');
INSERT INTO catalog_items VALUES ('1278', '103', '1291', 'diner_bardesk_corner*8', '3', '0', '0', '1');
INSERT INTO catalog_items VALUES ('1279', '103', '1292', 'diner_bardesk_corner*9', '3', '0', '0', '1');
INSERT INTO catalog_items VALUES ('1280', '103', '1293', 'diner_bardesk*1', '3', '0', '0', '1');
INSERT INTO catalog_items VALUES ('1281', '103', '1294', 'diner_bardesk*2', '3', '0', '0', '1');
INSERT INTO catalog_items VALUES ('1282', '103', '1295', 'diner_bardesk*3', '3', '0', '0', '1');
INSERT INTO catalog_items VALUES ('1283', '103', '1296', 'diner_bardesk*4', '3', '0', '0', '1');
INSERT INTO catalog_items VALUES ('1284', '103', '1297', 'diner_bardesk*5', '3', '0', '0', '1');
INSERT INTO catalog_items VALUES ('1285', '103', '1298', 'diner_bardesk*6', '3', '0', '0', '1');
INSERT INTO catalog_items VALUES ('1286', '103', '1299', 'diner_bardesk*7', '3', '0', '0', '1');
INSERT INTO catalog_items VALUES ('1287', '103', '1300', 'diner_bardesk*8', '3', '0', '0', '1');
INSERT INTO catalog_items VALUES ('1288', '103', '1301', 'diner_bardesk*9', '3', '0', '0', '1');
INSERT INTO catalog_items VALUES ('1289', '103', '1708', 'window_diner2', '3', '0', '0', '1');
INSERT INTO catalog_items VALUES ('1290', '103', '1709', 'window_diner', '4', '0', '0', '1');
INSERT INTO catalog_items VALUES ('1291', '103', '1710', 'diner_walltable', '2', '0', '0', '1');
INSERT INTO catalog_items VALUES ('1292', '103', '1782', 'diner_poster', '3', '0', '0', '1');
INSERT INTO catalog_items VALUES ('1295', '105', '399', 'pillar*9', '10', '0', '0', '1');
INSERT INTO catalog_items VALUES ('1296', '105', '400', 'pillar*0', '10', '0', '0', '1');
INSERT INTO catalog_items VALUES ('1297', '105', '401', 'pillar*8', '10', '0', '0', '1');
INSERT INTO catalog_items VALUES ('1298', '105', '402', 'pillar*2', '10', '0', '0', '1');
INSERT INTO catalog_items VALUES ('1299', '105', '403', 'pillar*5', '10', '0', '0', '1');
INSERT INTO catalog_items VALUES ('1300', '105', '404', 'pillar*4', '10', '0', '0', '1');
INSERT INTO catalog_items VALUES ('1301', '105', '405', 'pillar*7', '10', '0', '0', '1');
INSERT INTO catalog_items VALUES ('1302', '105', '406', 'pillar*3', '10', '0', '0', '1');
INSERT INTO catalog_items VALUES ('1303', '105', '388', 'wooden_screen*1', '10', '0', '0', '1');
INSERT INTO catalog_items VALUES ('1304', '105', '389', 'wooden_screen*2', '10', '0', '0', '1');
INSERT INTO catalog_items VALUES ('1305', '105', '390', 'wooden_screen*7', '10', '0', '0', '1');
INSERT INTO catalog_items VALUES ('1306', '105', '391', 'wooden_screen*0', '10', '0', '0', '1');
INSERT INTO catalog_items VALUES ('1307', '105', '392', 'wooden_screen*8', '10', '0', '0', '1');
INSERT INTO catalog_items VALUES ('1308', '105', '393', 'wooden_screen*5', '10', '0', '0', '1');
INSERT INTO catalog_items VALUES ('1309', '105', '394', 'wooden_screen*9', '10', '0', '0', '1');
INSERT INTO catalog_items VALUES ('1310', '105', '395', 'wooden_screen*4', '10', '0', '0', '1');
INSERT INTO catalog_items VALUES ('1311', '105', '396', 'wooden_screen*6', '10', '0', '0', '1');
INSERT INTO catalog_items VALUES ('1312', '105', '397', 'wooden_screen*3', '10', '0', '0', '1');
INSERT INTO catalog_items VALUES ('1313', '105', '417', 'rare_icecream*1', '10', '0', '0', '1');
INSERT INTO catalog_items VALUES ('1314', '105', '418', 'rare_icecream*7', '10', '0', '0', '1');
INSERT INTO catalog_items VALUES ('1315', '105', '419', 'rare_icecream*8', '10', '0', '0', '1');
INSERT INTO catalog_items VALUES ('1316', '105', '420', 'rare_icecream*2', '10', '0', '0', '1');
INSERT INTO catalog_items VALUES ('1317', '105', '421', 'rare_icecream*6', '10', '0', '0', '1');
INSERT INTO catalog_items VALUES ('1318', '105', '422', 'rare_icecream*9', '10', '0', '0', '1');
INSERT INTO catalog_items VALUES ('1319', '105', '423', 'rare_icecream*3', '10', '0', '0', '1');
INSERT INTO catalog_items VALUES ('1320', '105', '424', 'rare_icecream*0', '10', '0', '0', '1');
INSERT INTO catalog_items VALUES ('1321', '105', '425', 'rare_icecream*4', '10', '0', '0', '1');
INSERT INTO catalog_items VALUES ('1322', '105', '426', 'rare_icecream*5', '10', '0', '0', '1');
INSERT INTO catalog_items VALUES ('1323', '95', '892', 'rare_icecream_campaign', '10', '0', '0', '1');
INSERT INTO catalog_items VALUES ('1324', '95', '1140', 'calippo', '10', '0', '0', '1');
INSERT INTO catalog_items VALUES ('1325', '105', '338', 'scifiport*0', '10', '0', '0', '1');
INSERT INTO catalog_items VALUES ('1327', '105', '340', 'scifiport*8', '10', '0', '0', '1');
INSERT INTO catalog_items VALUES ('1328', '105', '341', 'scifiport*7', '10', '0', '0', '1');
INSERT INTO catalog_items VALUES ('1329', '105', '342', 'scifiport*6', '10', '0', '0', '1');
INSERT INTO catalog_items VALUES ('1330', '105', '343', 'scifiport*5', '10', '0', '0', '1');
INSERT INTO catalog_items VALUES ('1331', '105', '344', 'scifiport*4', '10', '0', '0', '1');
INSERT INTO catalog_items VALUES ('1332', '105', '345', 'scifiport*3', '10', '0', '0', '1');
INSERT INTO catalog_items VALUES ('1333', '105', '346', 'scifiport*2', '10', '0', '0', '1');
INSERT INTO catalog_items VALUES ('1334', '105', '347', 'scifiport*1', '10', '0', '0', '1');
INSERT INTO catalog_items VALUES ('1335', '105', '348', 'scifirocket*9', '10', '0', '0', '1');
INSERT INTO catalog_items VALUES ('1336', '105', '349', 'scifirocket*8', '10', '0', '0', '1');
INSERT INTO catalog_items VALUES ('1337', '105', '350', 'scifirocket*7', '10', '0', '0', '1');
INSERT INTO catalog_items VALUES ('1338', '105', '351', 'scifirocket*6', '10', '0', '0', '1');
INSERT INTO catalog_items VALUES ('1339', '105', '352', 'scifirocket*5', '10', '0', '0', '1');
INSERT INTO catalog_items VALUES ('1340', '105', '353', 'scifirocket*4', '10', '0', '0', '1');
INSERT INTO catalog_items VALUES ('1341', '105', '354', 'scifirocket*3', '10', '0', '0', '1');
INSERT INTO catalog_items VALUES ('1342', '105', '355', 'scifirocket*2', '10', '0', '0', '1');
INSERT INTO catalog_items VALUES ('1343', '105', '356', 'scifirocket*1', '10', '0', '0', '1');
INSERT INTO catalog_items VALUES ('1344', '105', '357', 'scifirocket*0', '10', '0', '0', '1');
INSERT INTO catalog_items VALUES ('1345', '105', '358', 'scifidoor*10', '10', '0', '0', '1');
INSERT INTO catalog_items VALUES ('1346', '105', '359', 'scifidoor*9', '10', '0', '0', '1');
INSERT INTO catalog_items VALUES ('1347', '105', '360', 'scifidoor*8', '10', '0', '0', '1');
INSERT INTO catalog_items VALUES ('1348', '105', '361', 'scifidoor*7', '10', '0', '0', '1');
INSERT INTO catalog_items VALUES ('1349', '105', '362', 'scifidoor*6', '10', '0', '0', '1');
INSERT INTO catalog_items VALUES ('1350', '105', '363', 'scifidoor*5', '10', '0', '0', '1');
INSERT INTO catalog_items VALUES ('1351', '105', '364', 'scifidoor*4', '10', '0', '0', '1');
INSERT INTO catalog_items VALUES ('1352', '105', '365', 'scifidoor*3', '10', '0', '0', '1');
INSERT INTO catalog_items VALUES ('1353', '105', '367', 'scifidoor*2', '10', '0', '0', '1');
INSERT INTO catalog_items VALUES ('1354', '105', '366', 'scifidoor*2', '10', '0', '0', '1');
INSERT INTO catalog_items VALUES ('1355', '27', '186', 'menorah', '3', '0', '0', '1');
INSERT INTO catalog_items VALUES ('1356', '43', '188', 'ham', '3', '0', '0', '1');
INSERT INTO catalog_items VALUES ('1357', '27', '189', 'turkey', '3', '0', '0', '1');
INSERT INTO catalog_items VALUES ('1358', '27', '191', 'house', '3', '0', '0', '1');
INSERT INTO catalog_items VALUES ('1359', '43', '196', 'ham2', '2', '0', '0', '1');
INSERT INTO catalog_items VALUES ('1360', '27', '197', 'wcandleset', '3', '0', '0', '1');
INSERT INTO catalog_items VALUES ('1361', '43', '205', 'habbocake', '5', '0', '0', '1');
INSERT INTO catalog_items VALUES ('1362', '39', '204', 'giftflowers', '4', '0', '0', '1');
INSERT INTO catalog_items VALUES ('1365', '8', '239', 'chair_plasto*14', '3', '0', '0', '1');
INSERT INTO catalog_items VALUES ('1364', '8', '212', 'club_sofa', '4', '0', '0', '1');
INSERT INTO catalog_items VALUES ('1366', '8', '240', 'table_plasto_4leg*14', '4', '0', '0', '1');
INSERT INTO catalog_items VALUES ('1367', '8', '246', 'edicehc', '5', '0', '0', '1');
INSERT INTO catalog_items VALUES ('1368', '8', '249', 'hcsohva', '10', '0', '0', '1');
INSERT INTO catalog_items VALUES ('1369', '8', '250', 'hcamme', '6', '0', '0', '1');
INSERT INTO catalog_items VALUES ('1370', '8', '313', 'hc_lmp', '4', '0', '0', '1');
INSERT INTO catalog_items VALUES ('1371', '8', '314', 'hc_tbl', '6', '0', '0', '1');
INSERT INTO catalog_items VALUES ('1372', '8', '315', 'hc_chr', '5', '0', '0', '1');
INSERT INTO catalog_items VALUES ('1373', '8', '316', 'hc_dsk', '5', '0', '0', '1');
INSERT INTO catalog_items VALUES ('1374', '8', '760', 'hc_crpt', '4', '0', '0', '1');
INSERT INTO catalog_items VALUES ('1375', '8', '761', 'hc_tv', '5', '0', '0', '1');
INSERT INTO catalog_items VALUES ('1376', '8', '766', 'hc_bkshlf', '6', '0', '0', '1');
INSERT INTO catalog_items VALUES ('1377', '8', '767', 'hc_btlr', '4', '0', '0', '1');
INSERT INTO catalog_items VALUES ('1378', '8', '768', 'hc_crtn', '4', '0', '0', '1');
INSERT INTO catalog_items VALUES ('1379', '8', '769', 'hc_djset', '5', '0', '0', '1');
INSERT INTO catalog_items VALUES ('1380', '8', '770', 'hc_frplc', '6', '0', '0', '1');
INSERT INTO catalog_items VALUES ('1381', '8', '771', 'hc_lmpst', '3', '0', '0', '1');
INSERT INTO catalog_items VALUES ('1382', '8', '772', 'hc_machine', '5', '0', '0', '1');
INSERT INTO catalog_items VALUES ('1383', '8', '773', 'hc_rllr', '7', '0', '0', '1');
INSERT INTO catalog_items VALUES ('1384', '8', '774', 'hc_rntgn', '3', '0', '0', '1');
INSERT INTO catalog_items VALUES ('1385', '8', '775', 'hc_trll', '3', '0', '0', '1');
INSERT INTO catalog_items VALUES ('1387', '8', '1314', 'hcc_shelf', '3', '0', '0', '1');
INSERT INTO catalog_items VALUES ('1388', '8', '1315', 'hcc_sofa', '3', '0', '0', '1');
INSERT INTO catalog_items VALUES ('1389', '8', '1316', 'hcc_minibar', '5', '0', '0', '1');
INSERT INTO catalog_items VALUES ('1390', '8', '1317', 'hcc_chair', '3', '0', '0', '1');
INSERT INTO catalog_items VALUES ('1391', '8', '1321', 'hcc_stool', '2', '0', '0', '1');
INSERT INTO catalog_items VALUES ('1392', '8', '1322', 'hcc_sofachair', '4', '0', '0', '1');
INSERT INTO catalog_items VALUES ('1393', '8', '1323', 'hcc_crnr', '3', '0', '0', '1');
INSERT INTO catalog_items VALUES ('1394', '8', '1324', 'hcc_dvdr', '3', '0', '0', '1');
INSERT INTO catalog_items VALUES ('1398', '36', '8', 'table_plasto_4leg', '3', '0', '0', '1');
INSERT INTO catalog_items VALUES ('1396', '8', '1666', 'hc_wall_lamp', '3', '0', '0', '1');
INSERT INTO catalog_items VALUES ('1399', '36', '9', 'table_plasto_round', '3', '0', '0', '1');
INSERT INTO catalog_items VALUES ('1400', '36', '10', 'table_plasto_bigsquare', '3', '0', '0', '1');
INSERT INTO catalog_items VALUES ('1401', '36', '22', 'chair_plasty', '3', '0', '0', '1');
INSERT INTO catalog_items VALUES ('1402', '36', '23', 'chair_plasto', '3', '0', '0', '1');
INSERT INTO catalog_items VALUES ('1403', '36', '24', 'table_plasto_square', '3', '0', '0', '1');
INSERT INTO catalog_items VALUES ('1404', '36', '47', 'table_plasto_4leg*1', '3', '0', '0', '1');
INSERT INTO catalog_items VALUES ('1405', '36', '48', 'table_plasto_bigsquare*1', '3', '0', '0', '1');
INSERT INTO catalog_items VALUES ('1406', '36', '49', 'table_plasto_round*1', '3', '0', '0', '1');
INSERT INTO catalog_items VALUES ('1407', '36', '50', 'table_plasto_square*1', '3', '0', '0', '1');
INSERT INTO catalog_items VALUES ('1408', '36', '51', 'chair_plasto*1', '3', '0', '0', '1');
INSERT INTO catalog_items VALUES ('1409', '36', '54', 'table_plasto_4leg*2', '3', '0', '0', '1');
INSERT INTO catalog_items VALUES ('1410', '36', '55', 'table_plasto_bigsquare*2', '3', '0', '0', '1');
INSERT INTO catalog_items VALUES ('1411', '36', '56', 'table_plasto_round*2', '3', '0', '0', '1');
INSERT INTO catalog_items VALUES ('1412', '36', '57', 'table_plasto_square*2', '3', '0', '0', '1');
INSERT INTO catalog_items VALUES ('1413', '36', '58', 'chair_plasto*2', '3', '0', '0', '1');
INSERT INTO catalog_items VALUES ('1414', '36', '61', 'table_plasto_4leg*3', '3', '0', '0', '1');
INSERT INTO catalog_items VALUES ('1415', '36', '62', 'table_plasto_bigsquare*3', '3', '0', '0', '1');
INSERT INTO catalog_items VALUES ('1416', '36', '63', 'table_plasto_round*3', '3', '0', '0', '1');
INSERT INTO catalog_items VALUES ('1417', '36', '64', 'table_plasto_square*3', '3', '0', '0', '1');
INSERT INTO catalog_items VALUES ('1418', '36', '65', 'chair_plasto*3', '3', '0', '0', '1');
INSERT INTO catalog_items VALUES ('1419', '36', '68', 'table_plasto_4leg*4', '3', '0', '0', '1');
INSERT INTO catalog_items VALUES ('1420', '36', '71', 'table_plasto_square*4', '3', '0', '0', '1');
INSERT INTO catalog_items VALUES ('1421', '36', '72', 'chair_plasto*4', '3', '0', '0', '1');
INSERT INTO catalog_items VALUES ('1422', '36', '78', 'table_plasto_4leg*5', '3', '0', '0', '1');
INSERT INTO catalog_items VALUES ('1423', '36', '79', 'table_plasto_bigsquare*5', '3', '0', '0', '1');
INSERT INTO catalog_items VALUES ('1424', '36', '80', 'table_plasto_round*5', '3', '0', '0', '1');
INSERT INTO catalog_items VALUES ('1425', '36', '81', 'table_plasto_square*5', '3', '0', '0', '1');
INSERT INTO catalog_items VALUES ('1426', '36', '82', 'chair_plasto*5', '3', '0', '0', '1');
INSERT INTO catalog_items VALUES ('1427', '36', '83', 'table_plasto_4leg*6', '3', '0', '0', '1');
INSERT INTO catalog_items VALUES ('1428', '36', '84', 'table_plasto_bigsquare*6', '3', '0', '0', '1');
INSERT INTO catalog_items VALUES ('1429', '36', '85', 'table_plasto_round*6', '3', '0', '0', '1');
INSERT INTO catalog_items VALUES ('1430', '36', '86', 'table_plasto_square*6', '3', '0', '0', '1');
INSERT INTO catalog_items VALUES ('1431', '36', '87', 'chair_plasto*6', '3', '0', '0', '1');
INSERT INTO catalog_items VALUES ('1432', '36', '88', 'table_plasto_4leg*7', '3', '0', '0', '1');
INSERT INTO catalog_items VALUES ('1433', '36', '89', 'table_plasto_bigsquare*7', '3', '0', '0', '1');
INSERT INTO catalog_items VALUES ('1434', '36', '90', 'table_plasto_round*7', '3', '0', '0', '1');
INSERT INTO catalog_items VALUES ('1435', '36', '91', 'table_plasto_square*7', '3', '0', '0', '1');
INSERT INTO catalog_items VALUES ('1436', '36', '92', 'chair_plasto*7', '3', '0', '0', '1');
INSERT INTO catalog_items VALUES ('1437', '36', '93', 'table_plasto_4leg*8', '3', '0', '0', '1');
INSERT INTO catalog_items VALUES ('1438', '36', '94', 'table_plasto_bigsquare*8', '3', '0', '0', '1');
INSERT INTO catalog_items VALUES ('1439', '36', '95', 'table_plasto_round*8', '3', '0', '0', '1');
INSERT INTO catalog_items VALUES ('1440', '36', '96', 'table_plasto_square*8', '3', '0', '0', '1');
INSERT INTO catalog_items VALUES ('1441', '36', '97', 'chair_plasto*8', '3', '0', '0', '1');
INSERT INTO catalog_items VALUES ('1442', '36', '98', 'table_plasto_4leg*9', '3', '0', '0', '1');
INSERT INTO catalog_items VALUES ('1443', '36', '99', 'table_plasto_bigsquare*9', '3', '0', '0', '1');
INSERT INTO catalog_items VALUES ('1444', '36', '100', 'table_plasto_round*9', '3', '0', '0', '1');
INSERT INTO catalog_items VALUES ('1445', '36', '101', 'chair_plasto*9', '3', '0', '0', '1');
INSERT INTO catalog_items VALUES ('1446', '36', '233', 'chair_plasto*10', '3', '0', '0', '1');
INSERT INTO catalog_items VALUES ('1447', '36', '234', 'chair_plasto*11', '3', '0', '0', '1');
INSERT INTO catalog_items VALUES ('1448', '36', '237', 'chair_plasto*12', '3', '0', '0', '1');
INSERT INTO catalog_items VALUES ('1449', '36', '238', 'chair_plasto*13', '3', '0', '0', '1');
INSERT INTO catalog_items VALUES ('1450', '36', '276', 'table_plasto_4leg*10', '3', '0', '0', '1');
INSERT INTO catalog_items VALUES ('1451', '36', '277', 'table_plasto_4leg*15', '3', '0', '0', '1');
INSERT INTO catalog_items VALUES ('1452', '36', '278', 'table_plasto_bigsquare*14', '3', '0', '0', '1');
INSERT INTO catalog_items VALUES ('1453', '36', '279', 'table_plasto_bigsquare*15', '3', '0', '0', '1');
INSERT INTO catalog_items VALUES ('1454', '36', '280', 'table_plasto_round*14', '3', '0', '0', '1');
INSERT INTO catalog_items VALUES ('1455', '36', '281', 'table_plasto_round*15', '3', '0', '0', '1');
INSERT INTO catalog_items VALUES ('1456', '36', '282', 'table_plasto_square*14', '3', '0', '0', '1');
INSERT INTO catalog_items VALUES ('1457', '36', '283', 'table_plasto_square*15', '3', '0', '0', '1');
INSERT INTO catalog_items VALUES ('1458', '36', '284', 'chair_plasto*15', '3', '0', '0', '1');
INSERT INTO catalog_items VALUES ('1459', '36', '290', 'chair_plasto*16', '3', '0', '0', '1');
INSERT INTO catalog_items VALUES ('1460', '36', '291', 'table_plasto_4leg*16', '3', '0', '0', '1');
INSERT INTO catalog_items VALUES ('1462', '40', '17', 'doormat_love', '1', '0', '0', '1');
INSERT INTO catalog_items VALUES ('1463', '40', '18', 'doormat_plain', '3', '0', '0', '1');
INSERT INTO catalog_items VALUES ('1464', '40', '53', 'doormat_plain*1', '1', '0', '0', '1');
INSERT INTO catalog_items VALUES ('1465', '40', '59', 'doormat_plain*2', '1', '0', '0', '1');
INSERT INTO catalog_items VALUES ('1466', '40', '67', 'doormat_plain*3', '1', '0', '0', '1');
INSERT INTO catalog_items VALUES ('1467', '40', '74', 'doormat_plain*4', '1', '0', '0', '1');
INSERT INTO catalog_items VALUES ('1468', '40', '75', 'doormat_plain*6', '3', '0', '0', '1');
INSERT INTO catalog_items VALUES ('1469', '40', '76', 'doormat_plain*5', '1', '0', '0', '1');
INSERT INTO catalog_items VALUES ('1471', '95', '27', 'bed_trad_one', '10', '0', '0', '1');
INSERT INTO catalog_items VALUES ('1472', '95', '28', 'bed_trad', '10', '0', '0', '1');
INSERT INTO catalog_items VALUES ('1473', '35', '35', 'shelves_armas', '4', '0', '0', '1');
INSERT INTO catalog_items VALUES ('1474', '32', '33', 'bed_budget_one', '3', '0', '0', '1');
INSERT INTO catalog_items VALUES ('1475', '32', '34', 'bed_budget', '4', '0', '0', '1');
INSERT INTO catalog_items VALUES ('1476', '32', '139', 'bed_budgetb_one', '3', '0', '0', '1');
INSERT INTO catalog_items VALUES ('1477', '32', '140', 'bed_budgetb', '4', '0', '0', '1');
INSERT INTO catalog_items VALUES ('1478', '32', '947', 'bed_budget*1', '4', '0', '0', '1');
INSERT INTO catalog_items VALUES ('1479', '32', '956', 'bed_budget_one*1', '3', '0', '0', '1');
INSERT INTO catalog_items VALUES ('1482', '36', '103', 'chair_plasty*1', '3', '0', '0', '1');
INSERT INTO catalog_items VALUES ('1483', '36', '106', 'chair_plasty*2', '3', '0', '0', '1');
INSERT INTO catalog_items VALUES ('1484', '36', '107', 'chair_plasty*3', '3', '0', '0', '1');
INSERT INTO catalog_items VALUES ('1485', '36', '108', 'chair_plasty*4', '3', '0', '0', '1');
INSERT INTO catalog_items VALUES ('1486', '36', '128', 'chair_plasty*5', '3', '0', '0', '1');
INSERT INTO catalog_items VALUES ('1487', '36', '132', 'chair_plasty*6', '3', '0', '0', '1');
INSERT INTO catalog_items VALUES ('1488', '36', '285', 'chair_plasty*7', '3', '0', '0', '1');
INSERT INTO catalog_items VALUES ('1489', '36', '286', 'chair_plasty*8', '3', '0', '0', '1');
INSERT INTO catalog_items VALUES ('1490', '36', '287', 'chair_plasty*9', '3', '0', '0', '1');
INSERT INTO catalog_items VALUES ('1491', '36', '288', 'chair_plasty*10', '3', '0', '0', '1');
INSERT INTO catalog_items VALUES ('1492', '36', '289', 'chair_plasty*11', '3', '0', '0', '1');
INSERT INTO catalog_items VALUES ('1564', '105', '370', 'pillow*0', '10', '0', '0', '1');
INSERT INTO catalog_items VALUES ('1496', '35', '217', 'divider_arm1', '3', '0', '0', '1');
INSERT INTO catalog_items VALUES ('1497', '35', '218', 'divider_arm2', '3', '0', '0', '1');
INSERT INTO catalog_items VALUES ('1498', '35', '219', 'divider_arm3', '6', '0', '0', '1');
INSERT INTO catalog_items VALUES ('1499', '94', '213', 'prize1', '10', '0', '0', '1');
INSERT INTO catalog_items VALUES ('1500', '94', '214', 'prize2', '10', '0', '0', '1');
INSERT INTO catalog_items VALUES ('1501', '94', '215', 'prize3', '10', '0', '0', '1');
INSERT INTO catalog_items VALUES ('1502', '55', '220', 'divider_nor1', '3', '0', '0', '1');
INSERT INTO catalog_items VALUES ('1503', '55', '222', 'divider_nor2', '3', '0', '0', '1');
INSERT INTO catalog_items VALUES ('2099', '95', '20043', 'party_lights', '10', '0', '0', '1');
INSERT INTO catalog_items VALUES ('1505', '55', '224', 'divider_nor3', '6', '0', '0', '1');
INSERT INTO catalog_items VALUES ('1506', '55', '462', 'divider_nor4*4', '3', '0', '0', '1');
INSERT INTO catalog_items VALUES ('1507', '55', '510', 'divider_nor1*2', '3', '0', '0', '1');
INSERT INTO catalog_items VALUES ('1508', '55', '511', 'divider_nor1*3', '3', '0', '0', '1');
INSERT INTO catalog_items VALUES ('1509', '55', '512', 'divider_nor1*4', '3', '0', '0', '1');
INSERT INTO catalog_items VALUES ('1510', '55', '513', 'divider_nor1*5', '3', '0', '0', '1');
INSERT INTO catalog_items VALUES ('1511', '55', '514', 'divider_nor1*6', '3', '0', '0', '1');
INSERT INTO catalog_items VALUES ('1512', '55', '515', 'divider_nor1*7', '3', '0', '0', '1');
INSERT INTO catalog_items VALUES ('1513', '55', '516', 'divider_nor1*8', '3', '0', '0', '1');
INSERT INTO catalog_items VALUES ('1514', '55', '517', 'divider_nor1*8', '3', '0', '0', '1');
INSERT INTO catalog_items VALUES ('1515', '55', '641', 'divider_nor3*2', '6', '0', '0', '1');
INSERT INTO catalog_items VALUES ('1516', '55', '642', 'divider_nor3*3', '6', '0', '0', '1');
INSERT INTO catalog_items VALUES ('1517', '55', '643', 'divider_nor3*4', '3', '0', '0', '1');
INSERT INTO catalog_items VALUES ('1518', '55', '644', 'divider_nor3*5', '6', '0', '0', '1');
INSERT INTO catalog_items VALUES ('1519', '55', '645', 'divider_nor3*6', '6', '0', '0', '1');
INSERT INTO catalog_items VALUES ('1520', '55', '646', 'divider_nor3*7', '6', '0', '0', '1');
INSERT INTO catalog_items VALUES ('1521', '55', '647', 'divider_nor3*8', '6', '0', '0', '1');
INSERT INTO catalog_items VALUES ('1522', '55', '648', 'divider_nor3*9', '6', '0', '0', '1');
INSERT INTO catalog_items VALUES ('1523', '55', '649', 'divider_nor2*2', '3', '0', '0', '1');
INSERT INTO catalog_items VALUES ('1524', '55', '650', 'divider_nor2*3', '3', '0', '0', '1');
INSERT INTO catalog_items VALUES ('1525', '55', '651', 'divider_nor2*4', '3', '0', '0', '1');
INSERT INTO catalog_items VALUES ('1526', '55', '652', 'divider_nor2*5', '3', '0', '0', '1');
INSERT INTO catalog_items VALUES ('1527', '55', '653', 'divider_nor2*6', '3', '0', '0', '1');
INSERT INTO catalog_items VALUES ('1528', '55', '654', 'divider_nor2*7', '3', '0', '0', '1');
INSERT INTO catalog_items VALUES ('1529', '55', '655', 'divider_nor2*8', '3', '0', '0', '1');
INSERT INTO catalog_items VALUES ('1530', '55', '656', 'divider_nor2*9', '3', '0', '0', '1');
INSERT INTO catalog_items VALUES ('1531', '55', '684', 'divider_nor4*2', '3', '0', '0', '1');
INSERT INTO catalog_items VALUES ('1532', '55', '685', 'divider_nor4*3', '3', '0', '0', '1');
INSERT INTO catalog_items VALUES ('1533', '55', '686', 'divider_nor4*5', '3', '0', '0', '1');
INSERT INTO catalog_items VALUES ('1534', '55', '687', 'divider_nor4*6', '3', '0', '0', '1');
INSERT INTO catalog_items VALUES ('1535', '55', '688', 'divider_nor4*7', '3', '0', '0', '1');
INSERT INTO catalog_items VALUES ('1536', '55', '689', 'divider_nor4*8', '3', '0', '0', '1');
INSERT INTO catalog_items VALUES ('1537', '55', '690', 'divider_nor4*9', '3', '0', '0', '1');
INSERT INTO catalog_items VALUES ('1538', '55', '691', 'divider_nor5*2', '3', '0', '0', '1');
INSERT INTO catalog_items VALUES ('1539', '55', '692', 'divider_nor5*3', '3', '0', '0', '1');
INSERT INTO catalog_items VALUES ('1540', '55', '693', 'divider_nor5*4', '3', '0', '0', '1');
INSERT INTO catalog_items VALUES ('1541', '55', '694', 'divider_nor5*5', '3', '0', '0', '1');
INSERT INTO catalog_items VALUES ('1542', '55', '695', 'divider_nor5*7', '3', '0', '0', '1');
INSERT INTO catalog_items VALUES ('1543', '55', '696', 'divider_nor5*8', '3', '0', '0', '1');
INSERT INTO catalog_items VALUES ('1544', '55', '697', 'divider_nor5*9', '3', '0', '0', '1');
INSERT INTO catalog_items VALUES ('1545', '55', '698', 'divider_nor5', '3', '0', '0', '1');
INSERT INTO catalog_items VALUES ('1546', '55', '699', 'divider_nor4', '3', '0', '0', '1');
INSERT INTO catalog_items VALUES ('1547', '94', '226', 'typingmachine', '10', '0', '0', '1');
INSERT INTO catalog_items VALUES ('1548', '27', '230', 'joulutahti', '10', '0', '0', '1');
INSERT INTO catalog_items VALUES ('1549', '94', '231', 'hyacinth1', '10', '0', '0', '1');
INSERT INTO catalog_items VALUES ('1550', '94', '232', 'hyacinth2', '10', '0', '0', '1');
INSERT INTO catalog_items VALUES ('1551', '30', '235', 'bardeskcorner_polyfon*12', '3', '0', '0', '1');
INSERT INTO catalog_items VALUES ('1552', '20', '236', 'bardeskcorner_polyfon*13', '3', '0', '0', '1');
INSERT INTO catalog_items VALUES ('1553', '8', '241', 'mocchamaster', '5', '0', '0', '1');
INSERT INTO catalog_items VALUES ('1554', '94', '247', 'rare_daffodil_rug', '10', '0', '0', '1');
INSERT INTO catalog_items VALUES ('1555', '27', '267', 'tree1', '3', '0', '0', '1');
INSERT INTO catalog_items VALUES ('2101', '71', '20047', 'rela_stick', '3', '0', '0', '1');
INSERT INTO catalog_items VALUES ('1557', '27', '269', 'wcandle', '3', '0', '0', '1');
INSERT INTO catalog_items VALUES ('1558', '27', '272', 'house2', '3', '0', '0', '1');
INSERT INTO catalog_items VALUES ('1559', '16', '275', 'md_limukaappi', '150', '150', '0', '1');
INSERT INTO catalog_items VALUES ('1587', '105', '378', 'marquee*1', '10', '0', '0', '1');
INSERT INTO catalog_items VALUES ('1561', '8', '294', 'doorD', '6', '0', '0', '1');
INSERT INTO catalog_items VALUES ('1562', '105', '368', 'pillow*5', '10', '0', '0', '1');
INSERT INTO catalog_items VALUES ('1563', '105', '369', 'pillow*8', '10', '0', '0', '1');
INSERT INTO catalog_items VALUES ('1565', '105', '371', 'pillow*1', '10', '0', '0', '1');
INSERT INTO catalog_items VALUES ('1566', '105', '372', 'pillow*2', '10', '0', '0', '1');
INSERT INTO catalog_items VALUES ('1567', '105', '373', 'pillow*7', '10', '0', '0', '1');
INSERT INTO catalog_items VALUES ('1568', '105', '374', 'pillow*9', '10', '0', '0', '1');
INSERT INTO catalog_items VALUES ('1569', '105', '375', 'pillow*4', '10', '0', '0', '1');
INSERT INTO catalog_items VALUES ('1570', '105', '376', 'pillow*6', '10', '0', '0', '1');
INSERT INTO catalog_items VALUES ('1571', '105', '377', 'pillow*3', '10', '0', '0', '1');
INSERT INTO catalog_items VALUES ('1572', '95', '1410', 'ads_ob_pillow', '10', '0', '0', '1');
INSERT INTO catalog_items VALUES ('1573', '105', '379', 'marquee*2', '10', '0', '0', '1');
INSERT INTO catalog_items VALUES ('1574', '105', '407', 'rare_dragonlamp*4', '10', '0', '0', '1');
INSERT INTO catalog_items VALUES ('1575', '105', '408', 'rare_dragonlamp*0', '10', '0', '0', '1');
INSERT INTO catalog_items VALUES ('1576', '105', '409', 'rare_dragonlamp*5', '10', '0', '0', '1');
INSERT INTO catalog_items VALUES ('1577', '105', '410', 'rare_dragonlamp*2', '10', '0', '0', '1');
INSERT INTO catalog_items VALUES ('1578', '105', '411', 'rare_dragonlamp*8', '10', '0', '0', '1');
INSERT INTO catalog_items VALUES ('1579', '105', '412', 'rare_dragonlamp*9', '10', '0', '0', '1');
INSERT INTO catalog_items VALUES ('1580', '105', '413', 'rare_dragonlamp*7', '10', '0', '0', '1');
INSERT INTO catalog_items VALUES ('1581', '105', '414', 'rare_dragonlamp*6', '10', '0', '0', '1');
INSERT INTO catalog_items VALUES ('1582', '105', '415', 'rare_dragonlamp*1', '10', '0', '0', '1');
INSERT INTO catalog_items VALUES ('1583', '105', '416', 'rare_dragonlamp*3', '10', '0', '0', '1');
INSERT INTO catalog_items VALUES ('1584', '105', '430', 'rare_fan*3', '10', '0', '0', '1');
INSERT INTO catalog_items VALUES ('1585', '58', '1411', 'lostc_merdragon', '6', '0', '0', '1');
INSERT INTO catalog_items VALUES ('1588', '105', '380', 'marquee*7', '10', '0', '0', '1');
INSERT INTO catalog_items VALUES ('1589', '105', '382', 'marquee*8', '10', '0', '0', '1');
INSERT INTO catalog_items VALUES ('1590', '105', '383', 'marquee*9', '10', '0', '0', '1');
INSERT INTO catalog_items VALUES ('1591', '105', '384', 'marquee*5', '10', '0', '0', '1');
INSERT INTO catalog_items VALUES ('1592', '105', '385', 'marquee*4', '10', '0', '0', '1');
INSERT INTO catalog_items VALUES ('1593', '105', '386', 'marquee*6', '10', '0', '0', '1');
INSERT INTO catalog_items VALUES ('1594', '105', '387', 'marquee*3', '10', '0', '0', '1');
INSERT INTO catalog_items VALUES ('1595', '105', '381', 'marquee*10', '10', '0', '0', '1');
INSERT INTO catalog_items VALUES ('1596', '105', '427', 'rare_fan*7', '10', '0', '0', '1');
INSERT INTO catalog_items VALUES ('1598', '105', '428', 'rare_fan*6', '10', '0', '0', '1');
INSERT INTO catalog_items VALUES ('1599', '105', '429', 'rare_fan*9', '10', '0', '0', '1');
INSERT INTO catalog_items VALUES ('1600', '105', '430', 'rare_fan*3', '10', '0', '0', '1');
INSERT INTO catalog_items VALUES ('1601', '105', '431', 'rare_fan*0', '10', '0', '0', '1');
INSERT INTO catalog_items VALUES ('1602', '105', '432', 'rare_fan*4', '10', '0', '0', '1');
INSERT INTO catalog_items VALUES ('1603', '105', '433', 'rare_fan*5', '10', '0', '0', '1');
INSERT INTO catalog_items VALUES ('1604', '105', '434', 'rare_fan*1', '10', '0', '0', '1');
INSERT INTO catalog_items VALUES ('1605', '105', '435', 'rare_fan*8', '10', '0', '0', '1');
INSERT INTO catalog_items VALUES ('1606', '105', '436', 'rare_fan*2', '10', '0', '0', '1');
INSERT INTO catalog_items VALUES ('1607', '95', '1589', 'ads_calip_fan', '10', '0', '0', '1');
INSERT INTO catalog_items VALUES ('1608', '62', '1667', 'industrialfan', '4', '0', '0', '1');
INSERT INTO catalog_items VALUES ('1609', '57', '449', 'cn_lamp', '5', '0', '0', '1');
INSERT INTO catalog_items VALUES ('1610', '57', '450', 'cn_sofa', '4', '0', '0', '1');
INSERT INTO catalog_items VALUES ('1611', '95', '1302', 'ads_dave_cns', '10', '0', '0', '1');
INSERT INTO catalog_items VALUES ('1612', '105', '468', 'rubberchair*1', '10', '0', '0', '1');
INSERT INTO catalog_items VALUES ('1613', '105', '469', 'rubberchair*2', '10', '0', '0', '1');
INSERT INTO catalog_items VALUES ('1614', '105', '470', 'rubberchair*3', '10', '0', '0', '1');
INSERT INTO catalog_items VALUES ('1615', '105', '471', 'rubberchair*4', '10', '0', '0', '1');
INSERT INTO catalog_items VALUES ('1616', '105', '472', 'rubberchair*5', '10', '0', '0', '1');
INSERT INTO catalog_items VALUES ('1617', '105', '473', 'rubberchair*6', '10', '0', '0', '1');
INSERT INTO catalog_items VALUES ('1618', '105', '477', 'rubberchair*7', '10', '0', '0', '1');
INSERT INTO catalog_items VALUES ('1619', '105', '478', 'rubberchair*8', '10', '0', '0', '1');
INSERT INTO catalog_items VALUES ('1620', '105', '463', 'traffic_light*1', '10', '0', '0', '1');
INSERT INTO catalog_items VALUES ('1621', '105', '464', 'traffic_light*2', '10', '0', '0', '1');
INSERT INTO catalog_items VALUES ('1622', '105', '465', 'traffic_light*3', '10', '0', '0', '1');
INSERT INTO catalog_items VALUES ('1623', '105', '466', 'traffic_light*4', '10', '0', '0', '1');
INSERT INTO catalog_items VALUES ('1624', '105', '467', 'traffic_light*6', '10', '0', '0', '1');
INSERT INTO catalog_items VALUES ('1625', '105', '683', 'traffic_light*5', '10', '0', '0', '1');
INSERT INTO catalog_items VALUES ('1626', '105', '474', 'barrier*1', '10', '0', '0', '1');
INSERT INTO catalog_items VALUES ('1627', '105', '475', 'barrier*2', '10', '0', '0', '1');
INSERT INTO catalog_items VALUES ('1628', '105', '476', 'barrier*3', '10', '0', '0', '1');
INSERT INTO catalog_items VALUES ('1629', '94', '667', 'sandrug', '10', '0', '0', '1');
INSERT INTO catalog_items VALUES ('1630', '105', '671', 'sleepingbag*1', '10', '0', '0', '1');
INSERT INTO catalog_items VALUES ('1631', '105', '672', 'sleepingbag*2', '10', '0', '0', '1');
INSERT INTO catalog_items VALUES ('1632', '105', '673', 'sleepingbag*3', '10', '0', '0', '1');
INSERT INTO catalog_items VALUES ('1633', '105', '674', 'sleepingbag*4', '10', '0', '0', '1');
INSERT INTO catalog_items VALUES ('1634', '105', '676', 'sleepingbag*7', '10', '0', '0', '1');
INSERT INTO catalog_items VALUES ('1635', '105', '677', 'sleepingbag*9', '10', '0', '0', '1');
INSERT INTO catalog_items VALUES ('1636', '105', '678', 'sleepingbag*5', '10', '0', '0', '1');
INSERT INTO catalog_items VALUES ('1637', '105', '679', 'sleepingbag*10', '10', '0', '0', '1');
INSERT INTO catalog_items VALUES ('1638', '105', '680', 'sleepingbag*6', '10', '0', '0', '1');
INSERT INTO catalog_items VALUES ('1639', '105', '681', 'sleepingbag*8', '10', '0', '0', '1');
INSERT INTO catalog_items VALUES ('1640', '13', '755', 'CF_10_coin_gold', '10', '0', '0', '1');
INSERT INTO catalog_items VALUES ('1641', '13', '756', 'CF_1_coin_bronze', '1', '0', '0', '1');
INSERT INTO catalog_items VALUES ('1642', '13', '757', 'CF_20_moneybag', '20', '0', '0', '1');
INSERT INTO catalog_items VALUES ('1643', '12', '758', 'CF_50_goldbar', '50', '0', '0', '1');
INSERT INTO catalog_items VALUES ('1644', '13', '759', 'CF_5_coin_silver', '5', '0', '0', '1');
INSERT INTO catalog_items VALUES ('1645', '65', '831', 'theatre_seat', '5', '0', '0', '1');
INSERT INTO catalog_items VALUES ('1646', '32', '938', 'chair_basic*1', '3', '0', '0', '1');
INSERT INTO catalog_items VALUES ('1647', '32', '945', 'chair_basic*8', '3', '0', '0', '1');
INSERT INTO catalog_items VALUES ('1648', '40', '1009', 'carpet_soft_tut', '2', '0', '0', '1');
INSERT INTO catalog_items VALUES ('1649', '66', '1025', 'hal_cauldron', '5', '0', '0', '1');
INSERT INTO catalog_items VALUES ('1650', '66', '1026', 'hal_grave', '4', '0', '0', '1');
INSERT INTO catalog_items VALUES ('1651', '66', '1318', 'det_divider', '3', '0', '0', '1');
INSERT INTO catalog_items VALUES ('1652', '66', '1320', 'det_body', '5', '0', '0', '1');
INSERT INTO catalog_items VALUES ('1653', '66', '1719', 'det_bhole', '2', '0', '0', '1');
INSERT INTO catalog_items VALUES ('1654', '5', '1719', 'det_bhole', '5', '0', '0', '3');
INSERT INTO catalog_items VALUES ('1655', '121', '794', 'sound_machine', '5', '0', '0', '1');
INSERT INTO catalog_items VALUES ('1656', '121', '859', 'sound_machine*1', '5', '0', '0', '1');
INSERT INTO catalog_items VALUES ('1657', '121', '861', 'sound_machine*2', '5', '0', '0', '1');
INSERT INTO catalog_items VALUES ('1658', '121', '862', 'sound_machine*3', '5', '0', '0', '1');
INSERT INTO catalog_items VALUES ('1659', '121', '863', 'sound_machine*4', '5', '0', '0', '1');
INSERT INTO catalog_items VALUES ('1660', '121', '864', 'sound_machine*5', '5', '0', '0', '1');
INSERT INTO catalog_items VALUES ('1661', '121', '865', 'sound_machine*6', '5', '0', '0', '1');
INSERT INTO catalog_items VALUES ('1662', '121', '866', 'sound_machine*7', '5', '0', '0', '1');
INSERT INTO catalog_items VALUES ('1663', '121', '990', 'sound_machine_pro', '5', '0', '0', '1');
INSERT INTO catalog_items VALUES ('1664', '122', '850', 'sound_set_1', '3', '0', '0', '1');
INSERT INTO catalog_items VALUES ('1665', '122', '851', 'sound_set_2', '3', '0', '0', '1');
INSERT INTO catalog_items VALUES ('1666', '122', '852', 'sound_set_3', '3', '0', '0', '1');
INSERT INTO catalog_items VALUES ('1667', '122', '853', 'sound_set_4', '3', '0', '0', '1');
INSERT INTO catalog_items VALUES ('1668', '122', '854', 'sound_set_5', '3', '0', '0', '1');
INSERT INTO catalog_items VALUES ('1669', '122', '855', 'sound_set_6', '3', '0', '0', '1');
INSERT INTO catalog_items VALUES ('1670', '122', '856', 'sound_set_7', '3', '0', '0', '1');
INSERT INTO catalog_items VALUES ('1671', '122', '857', 'sound_set_8', '3', '0', '0', '1');
INSERT INTO catalog_items VALUES ('1672', '122', '858', 'sound_set_9', '3', '0', '0', '1');
INSERT INTO catalog_items VALUES ('1673', '122', '872', 'sound_set_27', '3', '0', '0', '1');
INSERT INTO catalog_items VALUES ('1674', '122', '873', 'sound_set_26', '3', '0', '0', '1');
INSERT INTO catalog_items VALUES ('1675', '122', '871', 'sound_set_28', '3', '0', '0', '1');
INSERT INTO catalog_items VALUES ('1676', '122', '874', 'sound_set_25', '3', '0', '0', '1');
INSERT INTO catalog_items VALUES ('1677', '122', '875', 'sound_set_24', '3', '0', '0', '1');
INSERT INTO catalog_items VALUES ('1678', '122', '876', 'sound_set_23', '3', '0', '0', '1');
INSERT INTO catalog_items VALUES ('1679', '122', '878', 'sound_set_22', '3', '0', '0', '1');
INSERT INTO catalog_items VALUES ('1680', '122', '877', 'sound_set_22', '3', '0', '0', '1');
INSERT INTO catalog_items VALUES ('1681', '122', '879', 'sound_set_20', '3', '0', '0', '1');
INSERT INTO catalog_items VALUES ('1682', '122', '880', 'sound_set_19', '3', '0', '0', '1');
INSERT INTO catalog_items VALUES ('1683', '122', '881', 'sound_set_18', '3', '0', '0', '1');
INSERT INTO catalog_items VALUES ('1684', '122', '882', 'sound_set_17', '3', '0', '0', '1');
INSERT INTO catalog_items VALUES ('1685', '122', '883', 'sound_set_16', '3', '0', '0', '1');
INSERT INTO catalog_items VALUES ('1686', '122', '884', 'sound_set_15', '3', '0', '0', '1');
INSERT INTO catalog_items VALUES ('1687', '122', '885', 'sound_set_14', '3', '0', '0', '1');
INSERT INTO catalog_items VALUES ('1688', '122', '886', 'sound_set_13', '3', '0', '0', '1');
INSERT INTO catalog_items VALUES ('1689', '122', '887', 'sound_set_12', '3', '0', '0', '1');
INSERT INTO catalog_items VALUES ('1690', '122', '888', 'sound_set_11', '3', '0', '0', '1');
INSERT INTO catalog_items VALUES ('1691', '122', '889', 'sound_set_10', '3', '0', '0', '1');
INSERT INTO catalog_items VALUES ('1692', '122', '982', 'sound_set_36', '3', '0', '0', '1');
INSERT INTO catalog_items VALUES ('1693', '122', '983', 'sound_set_35', '3', '0', '0', '1');
INSERT INTO catalog_items VALUES ('1694', '122', '984', 'sound_set_34', '3', '0', '0', '1');
INSERT INTO catalog_items VALUES ('1695', '122', '985', 'sound_set_33', '3', '0', '0', '1');
INSERT INTO catalog_items VALUES ('1696', '122', '986', 'sound_set_32', '3', '0', '0', '1');
INSERT INTO catalog_items VALUES ('1697', '122', '987', 'sound_set_31', '3', '0', '0', '1');
INSERT INTO catalog_items VALUES ('1698', '122', '988', 'sound_set_30', '3', '0', '0', '1');
INSERT INTO catalog_items VALUES ('1699', '122', '989', 'sound_set_29', '3', '0', '0', '1');
INSERT INTO catalog_items VALUES ('1700', '122', '1002', 'sound_set_37', '3', '0', '0', '1');
INSERT INTO catalog_items VALUES ('1701', '122', '1010', 'sound_set_44', '3', '0', '0', '1');
INSERT INTO catalog_items VALUES ('1702', '122', '1011', 'sound_set_43', '3', '0', '0', '1');
INSERT INTO catalog_items VALUES ('1703', '122', '1012', 'sound_set_42', '3', '0', '0', '1');
INSERT INTO catalog_items VALUES ('1704', '122', '1013', 'sound_set_41', '3', '0', '0', '1');
INSERT INTO catalog_items VALUES ('1705', '122', '1014', 'sound_set_40', '3', '0', '0', '1');
INSERT INTO catalog_items VALUES ('1706', '122', '1015', 'sound_set_39', '3', '0', '0', '1');
INSERT INTO catalog_items VALUES ('1707', '122', '1016', 'sound_set_38', '3', '0', '0', '1');
INSERT INTO catalog_items VALUES ('1708', '122', '1027', 'sound_set_52', '3', '0', '0', '1');
INSERT INTO catalog_items VALUES ('1709', '122', '1028', 'sound_set_51', '3', '0', '0', '1');
INSERT INTO catalog_items VALUES ('1710', '122', '1029', 'sound_set_50', '3', '0', '0', '1');
INSERT INTO catalog_items VALUES ('1711', '122', '1030', 'sound_set_49', '3', '0', '0', '1');
INSERT INTO catalog_items VALUES ('1712', '122', '1031', 'sound_set_48', '3', '0', '0', '1');
INSERT INTO catalog_items VALUES ('1713', '122', '1032', 'sound_set_47', '3', '0', '0', '1');
INSERT INTO catalog_items VALUES ('1714', '122', '1033', 'sound_set_46', '3', '0', '0', '1');
INSERT INTO catalog_items VALUES ('1715', '122', '1034', 'sound_set_45', '3', '0', '0', '1');
INSERT INTO catalog_items VALUES ('1716', '122', '1041', 'sound_set_54', '3', '0', '0', '1');
INSERT INTO catalog_items VALUES ('1717', '122', '1042', 'sound_set_53', '3', '0', '0', '1');
INSERT INTO catalog_items VALUES ('1718', '122', '1056', 'sound_set_59', '3', '0', '0', '1');
INSERT INTO catalog_items VALUES ('1719', '122', '1057', 'sound_set_58', '3', '0', '0', '1');
INSERT INTO catalog_items VALUES ('1720', '122', '1058', 'sound_set_57', '3', '0', '0', '1');
INSERT INTO catalog_items VALUES ('1721', '122', '1059', 'sound_set_56', '3', '0', '0', '1');
INSERT INTO catalog_items VALUES ('1722', '122', '1060', 'sound_set_55', '3', '0', '0', '1');
INSERT INTO catalog_items VALUES ('1723', '122', '1101', 'sound_set_61', '3', '0', '0', '1');
INSERT INTO catalog_items VALUES ('1724', '122', '1102', 'sound_set_60', '3', '0', '0', '1');
INSERT INTO catalog_items VALUES ('1725', '122', '1136', 'sound_set_64', '3', '0', '0', '1');
INSERT INTO catalog_items VALUES ('1726', '122', '1137', 'sound_set_63', '3', '0', '0', '1');
INSERT INTO catalog_items VALUES ('1727', '122', '1138', 'sound_set_62', '3', '0', '0', '1');
INSERT INTO catalog_items VALUES ('1728', '122', '1173', 'sound_set_70', '3', '0', '0', '1');
INSERT INTO catalog_items VALUES ('1729', '122', '1174', 'sound_set_69', '3', '0', '0', '1');
INSERT INTO catalog_items VALUES ('1730', '122', '1175', 'sound_set_68', '3', '0', '0', '1');
INSERT INTO catalog_items VALUES ('1731', '122', '1176', 'sound_set_67', '3', '0', '0', '1');
INSERT INTO catalog_items VALUES ('1732', '122', '1177', 'sound_set_66', '3', '0', '0', '1');
INSERT INTO catalog_items VALUES ('1733', '122', '1178', 'sound_set_65', '3', '0', '0', '1');
INSERT INTO catalog_items VALUES ('1734', '122', '1382', 'sound_set_71', '3', '0', '0', '1');
INSERT INTO catalog_items VALUES ('1735', '122', '1551', 'sound_set_72', '3', '0', '0', '1');
INSERT INTO catalog_items VALUES ('1736', '95', '868', 'rclr_sofa', '10', '0', '0', '1');
INSERT INTO catalog_items VALUES ('1737', '72', '867', 'rom_lamp', '3', '0', '0', '1');
INSERT INTO catalog_items VALUES ('1738', '95', '869', 'rclr_garden', '10', '0', '0', '1');
INSERT INTO catalog_items VALUES ('1739', '95', '870', 'rclr_chair', '10', '0', '0', '1');
INSERT INTO catalog_items VALUES ('1740', '95', '991', 'rare_mnstr', '10', '0', '0', '1');
INSERT INTO catalog_items VALUES ('1752', '121', '1008', 'jukebox*1', '5', '0', '0', '1');
INSERT INTO catalog_items VALUES ('1742', '105', '993', 'one_way_door*3', '10', '0', '0', '1');
INSERT INTO catalog_items VALUES ('1743', '105', '994', 'one_way_door*4', '10', '0', '0', '1');
INSERT INTO catalog_items VALUES ('1744', '105', '995', 'one_way_door*5', '10', '0', '0', '1');
INSERT INTO catalog_items VALUES ('1745', '105', '996', 'one_way_door*6', '10', '0', '0', '1');
INSERT INTO catalog_items VALUES ('1746', '105', '997', 'one_way_door*7', '10', '0', '0', '1');
INSERT INTO catalog_items VALUES ('1747', '105', '998', 'one_way_door*8', '10', '0', '0', '1');
INSERT INTO catalog_items VALUES ('1748', '105', '999', 'one_way_door*9', '10', '0', '0', '1');
INSERT INTO catalog_items VALUES ('1753', '66', '1023', 'habboween_crypt', '6', '0', '0', '1');
INSERT INTO catalog_items VALUES ('1750', '105', '992', 'one_way_door*2', '10', '0', '0', '1');
INSERT INTO catalog_items VALUES ('1754', '66', '1024', 'habboween_grass', '5', '0', '0', '1');
INSERT INTO catalog_items VALUES ('1755', '39', '1044', 'plant_mazegate_snow', '3', '0', '0', '1');
INSERT INTO catalog_items VALUES ('1756', '39', '1045', 'plant_maze_snow', '3', '0', '0', '1');
INSERT INTO catalog_items VALUES ('1759', '123', '1062', 'noob_table*2', '0', '20', '0', '1');
INSERT INTO catalog_items VALUES ('1760', '123', '1063', 'noob_table*3', '0', '20', '0', '1');
INSERT INTO catalog_items VALUES ('1808', '75', '1107', 'sand_cstl_wall', '5', '0', '0', '1');
INSERT INTO catalog_items VALUES ('1762', '123', '1064', 'noob_table*4', '0', '20', '0', '1');
INSERT INTO catalog_items VALUES ('1763', '123', '1065', 'noob_table*5', '0', '20', '0', '1');
INSERT INTO catalog_items VALUES ('1764', '123', '1066', 'noob_table*6', '0', '20', '0', '1');
INSERT INTO catalog_items VALUES ('1765', '123', '1067', 'noob_stool*1', '0', '20', '0', '1');
INSERT INTO catalog_items VALUES ('1766', '123', '1068', 'noob_stool*2', '0', '20', '0', '1');
INSERT INTO catalog_items VALUES ('1767', '123', '1069', 'noob_stool*3', '0', '20', '0', '1');
INSERT INTO catalog_items VALUES ('1768', '123', '1070', 'noob_stool*4', '0', '20', '0', '1');
INSERT INTO catalog_items VALUES ('1769', '123', '1071', 'noob_stool*5', '0', '20', '0', '1');
INSERT INTO catalog_items VALUES ('1770', '123', '1072', 'noob_stool*6', '0', '20', '0', '1');
INSERT INTO catalog_items VALUES ('1771', '123', '1073', 'noob_rug*1', '0', '20', '0', '1');
INSERT INTO catalog_items VALUES ('1772', '123', '1074', 'noob_rug*2', '0', '20', '0', '1');
INSERT INTO catalog_items VALUES ('1773', '123', '1075', 'noob_rug*3', '0', '20', '0', '1');
INSERT INTO catalog_items VALUES ('1774', '123', '1076', 'noob_rug*4', '0', '20', '0', '1');
INSERT INTO catalog_items VALUES ('1775', '123', '1077', 'noob_rug*5', '0', '20', '0', '1');
INSERT INTO catalog_items VALUES ('1776', '123', '1078', 'noob_rug*6', '0', '20', '0', '1');
INSERT INTO catalog_items VALUES ('1777', '123', '1079', 'noob_lamp*1', '0', '20', '0', '1');
INSERT INTO catalog_items VALUES ('1778', '123', '1080', 'noob_lamp*2', '0', '20', '0', '1');
INSERT INTO catalog_items VALUES ('1779', '123', '1081', 'noob_lamp*3', '0', '20', '0', '1');
INSERT INTO catalog_items VALUES ('1780', '123', '1082', 'noob_lamp*4', '0', '20', '0', '1');
INSERT INTO catalog_items VALUES ('1781', '123', '1083', 'noob_lamp*5', '0', '20', '0', '1');
INSERT INTO catalog_items VALUES ('1782', '123', '1084', 'noob_lamp*6', '0', '20', '0', '1');
INSERT INTO catalog_items VALUES ('1783', '123', '1085', 'noob_chair*1', '0', '20', '0', '1');
INSERT INTO catalog_items VALUES ('1784', '123', '1086', 'noob_chair*2', '0', '20', '0', '1');
INSERT INTO catalog_items VALUES ('1785', '123', '1087', 'noob_chair*3', '0', '20', '0', '1');
INSERT INTO catalog_items VALUES ('1786', '123', '1088', 'noob_chair*4', '0', '20', '0', '1');
INSERT INTO catalog_items VALUES ('1787', '123', '1089', 'noob_chair*5', '0', '20', '0', '1');
INSERT INTO catalog_items VALUES ('1788', '123', '1090', 'noob_chair*6', '0', '20', '0', '1');
INSERT INTO catalog_items VALUES ('1826', '126', '1168', 'tiki_corner', '3', '0', '0', '1');
INSERT INTO catalog_items VALUES ('1825', '126', '1167', 'tiki_junglerug', '45', '0', '0', '10');
INSERT INTO catalog_items VALUES ('1824', '126', '1167', 'tiki_junglerug', '5', '0', '0', '1');
INSERT INTO catalog_items VALUES ('1823', '126', '1166', 'tiki_parasol', '4', '0', '0', '1');
INSERT INTO catalog_items VALUES ('1822', '126', '1165', 'tiki_sand', '45', '0', '0', '10');
INSERT INTO catalog_items VALUES ('1821', '126', '1165', 'tiki_sand', '5', '0', '0', '1');
INSERT INTO catalog_items VALUES ('1795', '123', '1185', 'noob_plant', '0', '20', '0', '1');
INSERT INTO catalog_items VALUES ('1820', '126', '1164', 'tiki_statue', '5', '0', '0', '1');
INSERT INTO catalog_items VALUES ('1819', '126', '1163', 'tiki_torch', '3', '0', '0', '1');
INSERT INTO catalog_items VALUES ('1818', '126', '1162', 'tiki_toucan', '4', '0', '0', '1');
INSERT INTO catalog_items VALUES ('1817', '126', '1161', 'tiki_tray0', '3', '0', '0', '1');
INSERT INTO catalog_items VALUES ('1816', '126', '1159', 'tiki_tray2', '3', '0', '0', '1');
INSERT INTO catalog_items VALUES ('1815', '126', '1160', 'tiki_tray1', '3', '0', '0', '1');
INSERT INTO catalog_items VALUES ('1832', '76', '1103', 'fortune', '5', '0', '0', '1');
INSERT INTO catalog_items VALUES ('1813', '126', '1158', 'tiki_tray3', '3', '0', '0', '1');
INSERT INTO catalog_items VALUES ('1812', '126', '1157', 'tiki_tray4', '3', '0', '0', '1');
INSERT INTO catalog_items VALUES ('1811', '126', '1156', 'tiki_waterfall', '5', '0', '0', '1');
INSERT INTO catalog_items VALUES ('1809', '75', '1108', 'sand_cstl_twr', '5', '0', '0', '1');
INSERT INTO catalog_items VALUES ('1810', '75', '1109', 'sand_cstl_gate', '5', '0', '0', '1');
INSERT INTO catalog_items VALUES ('1827', '126', '1169', 'tiki_bflies', '3', '0', '0', '1');
INSERT INTO catalog_items VALUES ('1828', '126', '1170', 'tiki_bench', '3', '0', '0', '1');
INSERT INTO catalog_items VALUES ('1829', '126', '1171', 'tiki_bardesk', '3', '0', '0', '1');
INSERT INTO catalog_items VALUES ('1830', '126', '1690', 'tiki_wallplnt', '4', '0', '0', '1');
INSERT INTO catalog_items VALUES ('1831', '126', '1691', 'tiki_surfboard', '3', '0', '0', '1');
INSERT INTO catalog_items VALUES ('1833', '95', '1104', 'sw_table', '10', '0', '0', '1');
INSERT INTO catalog_items VALUES ('1834', '95', '1105', 'sw_raven', '10', '0', '0', '1');
INSERT INTO catalog_items VALUES ('1836', '95', '1106', 'sw_chest', '10', '0', '0', '1');
INSERT INTO catalog_items VALUES ('1838', '95', '1113', 'rclr_lamp', '10', '0', '0', '1');
INSERT INTO catalog_items VALUES ('1839', '95', '1117', 'md_rug', '10', '0', '0', '1');
INSERT INTO catalog_items VALUES ('1840', '95', '1116', 'nouvelle_trax', '10', '0', '0', '1');
INSERT INTO catalog_items VALUES ('1841', '95', '1139', 'jukebox_ptv*1', '10', '0', '0', '1');
INSERT INTO catalog_items VALUES ('1842', '121', '1141', 'traxsilver', '5', '0', '0', '1');
INSERT INTO catalog_items VALUES ('1843', '121', '1142', 'traxgold', '5', '0', '0', '1');
INSERT INTO catalog_items VALUES ('1844', '121', '1143', 'traxbronze', '5', '0', '0', '1');
INSERT INTO catalog_items VALUES ('1845', '95', '1144', 'bench_puffet', '10', '0', '0', '1');
INSERT INTO catalog_items VALUES ('1846', '13', '1145', 'CFC_500_goldbar', '500', '0', '0', '1');
INSERT INTO catalog_items VALUES ('1847', '13', '1146', 'CFC_200_moneybag', '200', '0', '0', '1');
INSERT INTO catalog_items VALUES ('1848', '13', '1148', 'CFC_100_coin_gold', '100', '0', '0', '1');
INSERT INTO catalog_items VALUES ('1851', '128', '19940', 'urban_bench_plain', '4', '0', '0', '1');
INSERT INTO catalog_items VALUES ('1850', '13', '1149', 'CFC_50_coin_silver', '50', '0', '0', '1');
INSERT INTO catalog_items VALUES ('1852', '95', '1328', 'ads_igorswitch', '10', '0', '0', '1');
INSERT INTO catalog_items VALUES ('1853', '95', '1329', 'ads_711*1', '10', '0', '0', '1');
INSERT INTO catalog_items VALUES ('1854', '95', '1330', 'ads_711*2', '10', '0', '0', '1');
INSERT INTO catalog_items VALUES ('1855', '95', '1331', 'ads_711*3', '10', '0', '0', '1');
INSERT INTO catalog_items VALUES ('1856', '95', '1332', 'ads_711*4', '10', '0', '0', '1');
INSERT INTO catalog_items VALUES ('1857', '95', '1333', 'ads_igorraygun', '10', '0', '0', '1');
INSERT INTO catalog_items VALUES ('1858', '95', '1412', 'ads_cldesk', '10', '0', '0', '1');
INSERT INTO catalog_items VALUES ('1859', '29', '1414', 'ads_cltele', '10', '0', '0', '1');
INSERT INTO catalog_items VALUES ('1860', '95', '1415', 'ads_clfloor', '10', '0', '0', '1');
INSERT INTO catalog_items VALUES ('1862', '95', '1327', 'ads_igorbrain', '10', '0', '0', '1');
INSERT INTO catalog_items VALUES ('1863', '29', '1417', 'ads_mall_tele', '10', '0', '0', '1');
INSERT INTO catalog_items VALUES ('1864', '95', '1441', 'ads_idol_floor1', '10', '0', '0', '1');
INSERT INTO catalog_items VALUES ('1865', '95', '1442', 'ads_igor_dsk', '10', '0', '0', '1');
INSERT INTO catalog_items VALUES ('1866', '95', '1443', 'ads_idol_desk', '10', '0', '0', '1');
INSERT INTO catalog_items VALUES ('1867', '95', '1444', 'ads_idol_ch', '10', '0', '0', '1');
INSERT INTO catalog_items VALUES ('1868', '95', '1445', 'ads_igor_flask', '10', '0', '0', '1');
INSERT INTO catalog_items VALUES ('1869', '95', '1446', 'ads_idol_drape', '10', '0', '0', '1');
INSERT INTO catalog_items VALUES ('1870', '95', '1447', 'ads_idol_floor2', '10', '0', '0', '1');
INSERT INTO catalog_items VALUES ('1871', '95', '1453', 'ads_idol_piano', '10', '0', '0', '1');
INSERT INTO catalog_items VALUES ('1872', '95', '1455', 'ads_711shelf', '10', '0', '0', '1');
INSERT INTO catalog_items VALUES ('1873', '95', '1464', 'ads_idol_jukebox*1', '10', '0', '0', '1');
INSERT INTO catalog_items VALUES ('1874', '95', '1465', 'ads_idol_pchair', '10', '0', '0', '1');
INSERT INTO catalog_items VALUES ('1875', '95', '1467', 'ads_idol_audChr', '10', '0', '0', '1');
INSERT INTO catalog_items VALUES ('1876', '95', '1468', 'ads_idol_trax', '10', '0', '0', '1');
INSERT INTO catalog_items VALUES ('1877', '29', '1469', 'ads_idol_tele', '10', '0', '0', '1');
INSERT INTO catalog_items VALUES ('1878', '95', '1474', 'ads_idol_mic', '10', '0', '0', '1');
INSERT INTO catalog_items VALUES ('1879', '95', '1475', 'ads_idol_hotspot', '10', '0', '0', '1');
INSERT INTO catalog_items VALUES ('1880', '95', '1476', 'ads_idol_clRack', '10', '0', '0', '1');
INSERT INTO catalog_items VALUES ('1881', '95', '1477', 'ads_idol_voting_ch', '10', '0', '0', '1');
INSERT INTO catalog_items VALUES ('1882', '95', '1491', 'ads_frankb', '10', '0', '0', '1');
INSERT INTO catalog_items VALUES ('1883', '95', '1508', 'ads_grefusa_cactus', '10', '0', '0', '1');
INSERT INTO catalog_items VALUES ('1884', '95', '1509', 'ads_idol_tube', '10', '0', '0', '1');
INSERT INTO catalog_items VALUES ('1885', '95', '1511', 'ads_idol_cork', '10', '0', '0', '1');
INSERT INTO catalog_items VALUES ('1886', '95', '1512', 'ads_cl_jukeb', '10', '0', '0', '1');
INSERT INTO catalog_items VALUES ('1887', '95', '1518', 'ads_idol_newsDsk', '10', '0', '0', '1');
INSERT INTO catalog_items VALUES ('1888', '95', '1524', 'ads_idol_ichair', '10', '0', '0', '1');
INSERT INTO catalog_items VALUES ('1889', '95', '1526', 'ads_reebok_block2', '10', '0', '0', '1');
INSERT INTO catalog_items VALUES ('1890', '95', '1527', 'ads_malaco_rug', '10', '0', '0', '1');
INSERT INTO catalog_items VALUES ('1891', '95', '1530', 'ads_malaco_gu', '10', '0', '0', '1');
INSERT INTO catalog_items VALUES ('1892', '95', '1531', 'ads_clcake', '10', '0', '0', '1');
INSERT INTO catalog_items VALUES ('1893', '95', '1532', 'ads_cl_sofa', '10', '0', '0', '1');
INSERT INTO catalog_items VALUES ('1894', '95', '1533', 'ads_idol_tblCloth', '10', '0', '0', '1');
INSERT INTO catalog_items VALUES ('1895', '95', '1534', 'ads_idol_carpet', '10', '0', '0', '1');
INSERT INTO catalog_items VALUES ('1896', '95', '1535', 'ads_idol_lamp', '10', '0', '0', '1');
INSERT INTO catalog_items VALUES ('1897', '95', '1541', 'ads_goldtabl', '10', '0', '0', '1');
INSERT INTO catalog_items VALUES ('1898', '95', '1553', 'ads_calip_cola*1', '10', '0', '0', '1');
INSERT INTO catalog_items VALUES ('1899', '95', '1554', 'ads_calip_cola*2', '10', '0', '0', '1');
INSERT INTO catalog_items VALUES ('1900', '95', '1555', 'ads_calip_cola*3', '10', '0', '0', '1');
INSERT INTO catalog_items VALUES ('1901', '95', '1630', 'ads_711*6', '10', '0', '0', '1');
INSERT INTO catalog_items VALUES ('1902', '95', '1556', 'ads_calip_cola*4', '10', '0', '0', '1');
INSERT INTO catalog_items VALUES ('1903', '95', '1562', 'ads_calip_chair', '10', '0', '0', '1');
INSERT INTO catalog_items VALUES ('1904', '95', '1563', 'ads_idol_trophy', '10', '0', '0', '1');
INSERT INTO catalog_items VALUES ('1905', '95', '1565', 'ads_calip_pool', '10', '0', '0', '1');
INSERT INTO catalog_items VALUES ('1906', '29', '1572', 'ads_calip_tele', '10', '0', '0', '1');
INSERT INTO catalog_items VALUES ('2106', '94', '247', 'rare_daffodil_rug', '800', '0', '0', '100');
INSERT INTO catalog_items VALUES ('1908', '95', '1587', 'ads_calip_lava', '10', '0', '0', '1');
INSERT INTO catalog_items VALUES ('1909', '95', '1591', 'ads_mall_coffeem', '10', '0', '0', '1');
INSERT INTO catalog_items VALUES ('1910', '95', '1612', 'ads_mall_kiosk', '10', '0', '0', '1');
INSERT INTO catalog_items VALUES ('1911', '95', '1619', 'ads_elisa_gnome', '10', '0', '0', '1');
INSERT INTO catalog_items VALUES ('1912', '95', '1621', 'ads_oc_soda', '10', '0', '0', '1');
INSERT INTO catalog_items VALUES ('1913', '95', '1629', 'ads_711*5', '10', '0', '0', '1');
INSERT INTO catalog_items VALUES ('1914', '95', '1631', 'ads_711*7', '10', '0', '0', '1');
INSERT INTO catalog_items VALUES ('1915', '29', '1652', 'ads_1800tele', '10', '0', '0', '1');
INSERT INTO catalog_items VALUES ('1916', '95', '1707', 'ads_sunnyd', '10', '0', '0', '1');
INSERT INTO catalog_items VALUES ('1917', '95', '1711', 'ads_dave_wall', '10', '0', '0', '1');
INSERT INTO catalog_items VALUES ('1918', '95', '1714', 'ads_nokia_logo', '10', '0', '0', '1');
INSERT INTO catalog_items VALUES ('1919', '95', '1715', 'ads_nokia_phone', '10', '0', '0', '1');
INSERT INTO catalog_items VALUES ('1920', '95', '1720', 'ads_campguitar', '10', '0', '0', '1');
INSERT INTO catalog_items VALUES ('1921', '95', '1728', 'ads_cmusic', '10', '0', '0', '1');
INSERT INTO catalog_items VALUES ('1922', '95', '1741', 'ads_clwall1', '10', '0', '0', '1');
INSERT INTO catalog_items VALUES ('1923', '95', '1742', 'ads_clwall2', '10', '0', '0', '1');
INSERT INTO catalog_items VALUES ('1924', '95', '1743', 'ads_clwall3', '10', '0', '0', '1');
INSERT INTO catalog_items VALUES ('1925', '95', '1744', 'ads_ob_wall', '10', '0', '0', '1');
INSERT INTO catalog_items VALUES ('1926', '95', '1745', 'ads_mall_window', '10', '0', '0', '1');
INSERT INTO catalog_items VALUES ('99000', '500', '99000', 'qt_xm10_nest', '10', '0', '0', '1');
INSERT INTO catalog_items VALUES ('1928', '95', '1750', 'ads_igor_wall', '10', '0', '0', '1');
INSERT INTO catalog_items VALUES ('1929', '95', '1751', 'ads_igorevilb', '10', '0', '0', '1');
INSERT INTO catalog_items VALUES ('1930', '95', '1752', 'ads_idol_wall', '10', '0', '0', '1');
INSERT INTO catalog_items VALUES ('1931', '95', '1753', 'ads_mall_winfur', '10', '0', '0', '1');
INSERT INTO catalog_items VALUES ('1932', '95', '1754', 'ads_mall_winpet', '10', '0', '0', '1');
INSERT INTO catalog_items VALUES ('1933', '95', '1758', 'ads_idol_tv', '10', '0', '0', '1');
INSERT INTO catalog_items VALUES ('1934', '95', '1760', 'ads_idol_mirror', '10', '0', '0', '1');
INSERT INTO catalog_items VALUES ('1935', '95', '1761', 'ads_mall_wincin', '10', '0', '0', '1');
INSERT INTO catalog_items VALUES ('1936', '95', '1762', 'ads_mall_winmus', '10', '0', '0', '1');
INSERT INTO catalog_items VALUES ('1937', '95', '1763', 'ads_mall_winbea', '10', '0', '0', '1');
INSERT INTO catalog_items VALUES ('1938', '95', '1765', 'ads_mall_winchi', '10', '0', '0', '1');
INSERT INTO catalog_items VALUES ('1939', '95', '1768', 'ads_mall_winice', '10', '0', '0', '1');
INSERT INTO catalog_items VALUES ('1940', '95', '1769', 'ads_mall_winspo', '10', '0', '0', '1');
INSERT INTO catalog_items VALUES ('1941', '95', '1770', 'ads_idol_logo', '10', '0', '0', '1');
INSERT INTO catalog_items VALUES ('1942', '95', '1773', 'ads_lin_wh_c', '10', '0', '0', '1');
INSERT INTO catalog_items VALUES ('1943', '95', '1774', 'ads_malaco_tv', '10', '0', '0', '1');
INSERT INTO catalog_items VALUES ('1944', '95', '1775', 'ads_puffet_tv', '10', '0', '0', '1');
INSERT INTO catalog_items VALUES ('1945', '95', '1776', 'ads_reebok_tv', '10', '0', '0', '1');
INSERT INTO catalog_items VALUES ('1946', '95', '1784', 'ads_mirror', '10', '0', '0', '1');
INSERT INTO catalog_items VALUES ('1947', '95', '1789', 'ads_wwe_poster', '10', '0', '0', '1');
INSERT INTO catalog_items VALUES ('1948', '95', '1790', 'ads_mall_wintra', '10', '0', '0', '1');
INSERT INTO catalog_items VALUES ('1949', '95', '1793', 'ads_veet', '10', '0', '0', '1');
INSERT INTO catalog_items VALUES ('1950', '95', '1797', 'ads_mall_wingar', '10', '0', '0', '1');
INSERT INTO catalog_items VALUES ('1951', '95', '1799', 'ads_mall_winclo', '10', '0', '0', '1');
INSERT INTO catalog_items VALUES ('2011', '88', '1725', 'hw_08_xray', '5', '0', '0', '1');
INSERT INTO catalog_items VALUES ('1954', '95', '20037', 'ads_calip_parasol', '10', '0', '0', '1');
INSERT INTO catalog_items VALUES ('1956', '95', '1172', 'tampax_rug', '10', '0', '0', '1');
INSERT INTO catalog_items VALUES ('1957', '95', '1692', 'tampax_wall', '10', '0', '0', '1');
INSERT INTO catalog_items VALUES ('1958', '105', '20025', 'pillar*6', '10', '0', '0', '1');
INSERT INTO catalog_items VALUES ('1959', '55', '20026', 'shelves_norja*4', '3', '0', '0', '1');
INSERT INTO catalog_items VALUES ('1960', '30', '20027', 'bed_polyfon*2', '4', '0', '0', '1');
INSERT INTO catalog_items VALUES ('1961', '55', '20028', 'divider_nor5*6', '3', '0', '0', '1');
INSERT INTO catalog_items VALUES ('1962', '76', '20029', 'val_cauldron', '10', '0', '0', '1');
INSERT INTO catalog_items VALUES ('1963', '32', '20030', 'pura_mdl5*1', '3', '0', '0', '1');
INSERT INTO catalog_items VALUES ('1964', '105', '20031', 'one_way_door*1', '10', '0', '0', '1');
INSERT INTO catalog_items VALUES ('1976', '128', '20006', 'urban_fence_corner', '3', '0', '0', '1');
INSERT INTO catalog_items VALUES ('1966', '60', '20032', 'exe_globe', '5', '0', '0', '1');
INSERT INTO catalog_items VALUES ('2097', '95', '20041', 'year2010', '10', '0', '0', '1');
INSERT INTO catalog_items VALUES ('1968', '45', '20035', 'fx_bubble', '0', '250', '0', '1');
INSERT INTO catalog_items VALUES ('1969', '129', '20036', 'bump_tottero', '0', '50', '0', '1');
INSERT INTO catalog_items VALUES ('1970', '129', '1502', 'bump_road', '0', '75', '0', '1');
INSERT INTO catalog_items VALUES ('1971', '129', '1497', 'bump_lights', '0', '50', '0', '1');
INSERT INTO catalog_items VALUES ('1972', '129', '1496', 'bump_tires', '0', '50', '0', '1');
INSERT INTO catalog_items VALUES ('1973', '129', '1492', 'bump_signs', '0', '50', '0', '1');
INSERT INTO catalog_items VALUES ('1974', '103', '20034', 'diner_bardesk_corner*5', '3', '0', '0', '1');
INSERT INTO catalog_items VALUES ('1977', '128', '20016', 'urban_lamp', '4', '0', '0', '1');
INSERT INTO catalog_items VALUES ('1978', '128', '20018', 'urban_wall', '5', '0', '0', '1');
INSERT INTO catalog_items VALUES ('1979', '128', '20011', 'urban_wpost', '3', '0', '0', '1');
INSERT INTO catalog_items VALUES ('1980', '128', '20010', 'urban_sidewalk', '4', '0', '0', '1');
INSERT INTO catalog_items VALUES ('1981', '128', '20008', 'urban_bench', '3', '0', '0', '1');
INSERT INTO catalog_items VALUES ('1982', '128', '20007', 'urban_carsofa', '4', '0', '0', '1');
INSERT INTO catalog_items VALUES ('1983', '128', '20014', 'urban_blocker', '2', '0', '0', '1');
INSERT INTO catalog_items VALUES ('1984', '128', '20013', 'urban_bin', '3', '0', '0', '1');
INSERT INTO catalog_items VALUES ('1985', '128', '20012', 'urban_fence', '3', '0', '0', '1');
INSERT INTO catalog_items VALUES ('1986', '128', '20015', 'urban_bsktbll', '4', '0', '0', '1');
INSERT INTO catalog_items VALUES ('1987', '125', '19877', 'avatar_effect9', '0', '100', '0', '1');
INSERT INTO catalog_items VALUES ('1988', '125', '19878', 'avatar_effect6', '0', '100', '0', '1');
INSERT INTO catalog_items VALUES ('1989', '125', '19879', 'avatar_effect16', '0', '100', '0', '1');
INSERT INTO catalog_items VALUES ('1990', '125', '19880', 'avatar_effect2', '0', '100', '0', '1');
INSERT INTO catalog_items VALUES ('1991', '125', '19881', 'avatar_effect14', '0', '100', '0', '1');
INSERT INTO catalog_items VALUES ('1992', '125', '19882', 'avatar_effect15', '0', '100', '0', '1');
INSERT INTO catalog_items VALUES ('1993', '125', '19883', 'avatar_effect3', '0', '100', '0', '1');
INSERT INTO catalog_items VALUES ('1994', '125', '19884', 'avatar_effect17', '0', '100', '0', '1');
INSERT INTO catalog_items VALUES ('1995', '125', '19885', 'avatar_effect18', '0', '100', '0', '1');
INSERT INTO catalog_items VALUES ('1996', '125', '19886', 'avatar_effect1', '0', '100', '0', '1');
INSERT INTO catalog_items VALUES ('1997', '125', '19887', 'avatar_effect4', '0', '100', '0', '1');
INSERT INTO catalog_items VALUES ('1998', '125', '19888', 'avatar_effect5', '0', '100', '0', '1');
INSERT INTO catalog_items VALUES ('1999', '125', '19889', 'avatar_effect7', '0', '100', '0', '1');
INSERT INTO catalog_items VALUES ('2000', '125', '19890', 'avatar_effect8', '0', '100', '0', '1');
INSERT INTO catalog_items VALUES ('2001', '125', '19891', 'avatar_effect10', '0', '100', '0', '1');
INSERT INTO catalog_items VALUES ('2002', '125', '19892', 'avatar_effect12', '0', '100', '0', '1');
INSERT INTO catalog_items VALUES ('2003', '125', '19893', 'avatar_effect13', '0', '100', '0', '1');
INSERT INTO catalog_items VALUES ('2004', '129', '19957', 'avatar_effect22', '0', '100', '0', '1');
INSERT INTO catalog_items VALUES ('2005', '129', '19958', 'avatar_effect19', '0', '100', '0', '1');
INSERT INTO catalog_items VALUES ('2006', '129', '19959', 'avatar_effect20', '0', '100', '0', '1');
INSERT INTO catalog_items VALUES ('2007', '129', '19960', 'avatar_effect21', '0', '100', '0', '1');
INSERT INTO catalog_items VALUES ('2016', '95', '1681', 'sw_stone', '10', '0', '0', '1');
INSERT INTO catalog_items VALUES ('2012', '95', '1718', 'netari_poster', '10', '0', '0', '1');
INSERT INTO catalog_items VALUES ('2013', '95', '1713', 'easy_poster', '10', '0', '0', '1');
INSERT INTO catalog_items VALUES ('2014', '95', '1684', 'md_logo_wall', '10', '0', '0', '1');
INSERT INTO catalog_items VALUES ('2015', '95', '1682', 'sw_hole', '10', '0', '0', '1');
INSERT INTO catalog_items VALUES ('2017', '95', '1680', 'sw_swords', '10', '0', '0', '1');
INSERT INTO catalog_items VALUES ('2018', '41', '1675', 'guitar_v', '4', '0', '0', '1');
INSERT INTO catalog_items VALUES ('2019', '41', '1674', 'guitar_skull', '4', '0', '0', '1');
INSERT INTO catalog_items VALUES ('2020', '43', '1673', 'habbowheel', '5', '0', '0', '1');
INSERT INTO catalog_items VALUES ('2021', '72', '1670', 'wallmirror', '3', '0', '0', '1');
INSERT INTO catalog_items VALUES ('2022', '85', '1633', 'pix_asteroid', '0', '2000', '0', '1');
INSERT INTO catalog_items VALUES ('2023', '71', '1626', 'rela_stone', '4', '0', '0', '1');
INSERT INTO catalog_items VALUES ('2024', '94', '1622', 'marsrug', '10', '0', '0', '1');
INSERT INTO catalog_items VALUES ('2025', '85', '1592', 'totem_planet', '0', '2000', '0', '1');
INSERT INTO catalog_items VALUES ('2026', '95', '1590', 'voting_ch', '10', '0', '0', '1');
INSERT INTO catalog_items VALUES ('2027', '73', '1586', 'transparent_floor', '5', '0', '0', '1');
INSERT INTO catalog_items VALUES ('2028', '95', '1583', 'clrack', '10', '0', '0', '1');
INSERT INTO catalog_items VALUES ('2029', '95', '1582', 'noticeboard', '10', '0', '0', '1');
INSERT INTO catalog_items VALUES ('2030', '95', '1577', 'audChr', '10', '0', '0', '1');
INSERT INTO catalog_items VALUES ('2031', '85', '1571', 'saturn', '0', '2000', '0', '1');
INSERT INTO catalog_items VALUES ('2032', '95', '1566', 'laptopdesk', '10', '0', '0', '1');
INSERT INTO catalog_items VALUES ('2033', '85', '1564', 'totem_head', '0', '2000', '0', '1');
INSERT INTO catalog_items VALUES ('2034', '29', '1538', 'env_telep', '5', '0', '0', '1');
INSERT INTO catalog_items VALUES ('2035', '95', '1529', 'tray_glasstower', '6', '0', '0', '1');
INSERT INTO catalog_items VALUES ('2036', '95', '1528', 'tray_champagne', '5', '0', '0', '1');
INSERT INTO catalog_items VALUES ('2037', '95', '1525', 'tray_cake', '4', '0', '0', '1');
INSERT INTO catalog_items VALUES ('2038', '130', '1522', 'env_tree4', '5', '0', '0', '1');
INSERT INTO catalog_items VALUES ('2039', '130', '1520', 'env_tree2', '3', '0', '0', '1');
INSERT INTO catalog_items VALUES ('2040', '130', '1519', 'env_tree1', '3', '0', '0', '1');
INSERT INTO catalog_items VALUES ('2044', '130', '1515', 'env_bushes', '5', '0', '0', '1');
INSERT INTO catalog_items VALUES ('2043', '130', '1516', 'env_bushes_gate', '5', '0', '0', '1');
INSERT INTO catalog_items VALUES ('2045', '130', '1514', 'env_tree3', '3', '0', '0', '1');
INSERT INTO catalog_items VALUES ('2046', '130', '1513', 'env_grass', '5', '0', '0', '1');
INSERT INTO catalog_items VALUES ('2047', '130', '1513', 'env_grass', '15', '0', '0', '4');
INSERT INTO catalog_items VALUES ('2048', '85', '1507', 'totem_leg', '0', '2000', '0', '1');
INSERT INTO catalog_items VALUES ('2110', '112', '20052', 'ads_twi_crest', '6', '0', '0', '1');
INSERT INTO catalog_items VALUES ('2050', '58', '1448', 'lostc_octopus', '6', '0', '0', '1');
INSERT INTO catalog_items VALUES ('2052', '85', '1430', 'planet_of_love', '0', '2000', '0', '1');
INSERT INTO catalog_items VALUES ('2054', '28', '1365', 'penguin_basic', '2', '0', '0', '1');
INSERT INTO catalog_items VALUES ('2055', '28', '1367', 'penguin_musketeer', '2', '0', '0', '1');
INSERT INTO catalog_items VALUES ('2056', '28', '1370', 'penguin_wrestler', '2', '0', '0', '1');
INSERT INTO catalog_items VALUES ('2057', '28', '1372', 'penguin_robot', '2', '0', '0', '1');
INSERT INTO catalog_items VALUES ('2058', '28', '1376', 'penguin_suit', '2', '0', '0', '1');
INSERT INTO catalog_items VALUES ('2059', '28', '1379', 'penguin_icehockey', '2', '0', '0', '1');
INSERT INTO catalog_items VALUES ('2060', '28', '1380', 'penguin_pilot', '2', '0', '0', '1');
INSERT INTO catalog_items VALUES ('2061', '28', '1381', 'penguin_ballet', '2', '0', '0', '1');
INSERT INTO catalog_items VALUES ('2062', '28', '1383', 'penguin_boxer', '2', '0', '0', '1');
INSERT INTO catalog_items VALUES ('2063', '28', '1384', 'penguin_glow', '2', '0', '0', '1');
INSERT INTO catalog_items VALUES ('2064', '28', '1385', 'penguin_swim', '2', '0', '0', '1');
INSERT INTO catalog_items VALUES ('2065', '28', '1386', 'penguin_sumo', '2', '0', '0', '1');
INSERT INTO catalog_items VALUES ('2066', '28', '1388', 'penguin_clown', '2', '0', '0', '1');
INSERT INTO catalog_items VALUES ('2067', '28', '1389', 'penguin_infected', '2', '0', '0', '1');
INSERT INTO catalog_items VALUES ('2068', '28', '1393', 'penguin_super', '2', '0', '0', '1');
INSERT INTO catalog_items VALUES ('2069', '28', '1396', 'penguin_rock', '2', '0', '0', '1');
INSERT INTO catalog_items VALUES ('2070', '28', '1399', 'penguin_ski', '2', '0', '0', '1');
INSERT INTO catalog_items VALUES ('2071', '28', '1400', 'penguin_skater', '2', '0', '0', '1');
INSERT INTO catalog_items VALUES ('2072', '28', '1402', 'penguin_elf', '2', '0', '0', '1');
INSERT INTO catalog_items VALUES ('2073', '28', '1403', 'penguin_bunny', '2', '0', '0', '1');
INSERT INTO catalog_items VALUES ('2074', '28', '1404', 'penguin_ninja', '2', '0', '0', '1');
INSERT INTO catalog_items VALUES ('2075', '28', '1405', 'penguin_magician', '2', '0', '0', '1');
INSERT INTO catalog_items VALUES ('2076', '28', '1406', 'penguin_hunchback', '2', '0', '0', '1');
INSERT INTO catalog_items VALUES ('2077', '28', '1407', 'penguin_cowboy', '2', '0', '0', '1');
INSERT INTO catalog_items VALUES ('2078', '28', '1408', 'penguin_punk', '2', '0', '0', '1');
INSERT INTO catalog_items VALUES ('2079', '28', '1409', 'penguin_pirate', '2', '0', '0', '1');
INSERT INTO catalog_items VALUES ('2080', '45', '1390', 'fx_flare', '0', '250', '0', '1');
INSERT INTO catalog_items VALUES ('2081', '95', '1377', 'svnr_fi', '10', '0', '0', '1');
INSERT INTO catalog_items VALUES ('2082', '45', '1371', 'fx_explosion', '0', '250', '0', '1');
INSERT INTO catalog_items VALUES ('2084', '95', '1202', 'svnr_aus', '10', '0', '0', '1');
INSERT INTO catalog_items VALUES ('2085', '95', '1201', 'svnr_de', '10', '0', '0', '1');
INSERT INTO catalog_items VALUES ('2086', '95', '1200', 'svnr_it', '10', '0', '0', '1');
INSERT INTO catalog_items VALUES ('2087', '95', '1199', 'svnr_nl', '10', '0', '0', '1');
INSERT INTO catalog_items VALUES ('2088', '95', '1198', 'svnr_uk', '10', '0', '0', '1');
INSERT INTO catalog_items VALUES ('2089', '36', '20024', 'table_plasto_square*9', '3', '0', '0', '1');
INSERT INTO catalog_items VALUES ('2090', '76', '20021', 'heart', '5', '0', '0', '1');
INSERT INTO catalog_items VALUES ('2091', '95', '1303', 'easy_carpet', '10', '0', '0', '1');
INSERT INTO catalog_items VALUES ('2092', '95', '1304', 'easy_bowl2', '10', '0', '0', '1');
INSERT INTO catalog_items VALUES ('2093', '95', '1319', 'netari_carpet', '10', '0', '0', '1');
INSERT INTO catalog_items VALUES ('2094', '40', '1325', 'sob_carpet', '3', '0', '0', '1');
INSERT INTO catalog_items VALUES ('2095', '95', '1326', 'igor_seat', '10', '0', '0', '1');
INSERT INTO catalog_items VALUES ('2098', '95', '20042', 'party_lantern', '10', '0', '0', '1');
INSERT INTO catalog_items VALUES ('2103', '56', '20045', 'arabian_tile', '5', '0', '0', '1');
INSERT INTO catalog_items VALUES ('2105', '29', '20048', 'ads_mall_elevator', '10', '0', '0', '1');
INSERT INTO catalog_items VALUES ('2112', '112', '20053', 'ads_twi_paint', '3', '0', '0', '1');
INSERT INTO catalog_items VALUES ('2107', '95', '20050', 'xm09_infotv', '10', '0', '0', '1');
INSERT INTO catalog_items VALUES ('2113', '112', '20054', 'ads_twi_windw', '3', '0', '0', '1');
INSERT INTO catalog_items VALUES ('2114', '112', '20055', 'ads_twi_bwall2', '3', '0', '0', '1');
INSERT INTO catalog_items VALUES ('2115', '112', '20056', 'ads_twi_dreamc', '3', '0', '0', '1');
INSERT INTO catalog_items VALUES ('2116', '112', '20057', 'ads_twi_bwall1', '3', '0', '0', '1');
INSERT INTO catalog_items VALUES ('2121', '56', '20059', 'arabian_wall', '4', '0', '0', '1');
INSERT INTO catalog_items VALUES ('2123', '73', '20064', 'sf_mbar', '5', '0', '0', '1');
INSERT INTO catalog_items VALUES ('2124', '27', '20063', 'xm09_cocoa', '6', '0', '0', '1');
INSERT INTO catalog_items VALUES ('2126', '142', '317', 'nest', '3', '0', '0', '1');
INSERT INTO catalog_items VALUES ('2127', '142', '318', 'petfood1', '3', '0', '0', '1');
INSERT INTO catalog_items VALUES ('2128', '142', '319', 'petfood2', '3', '0', '0', '1');
INSERT INTO catalog_items VALUES ('2129', '142', '320', 'petfood3', '3', '0', '0', '1');
INSERT INTO catalog_items VALUES ('2130', '142', '321', 'waterbowl*4', '3', '0', '0', '1');
INSERT INTO catalog_items VALUES ('2131', '142', '322', 'waterbowl*5', '3', '0', '0', '1');
INSERT INTO catalog_items VALUES ('2132', '142', '326', 'toy1', '3', '0', '0', '1');
INSERT INTO catalog_items VALUES ('2133', '142', '323', 'waterbowl*2', '3', '0', '0', '1');
INSERT INTO catalog_items VALUES ('2134', '142', '324', 'waterbowl*1', '3', '0', '0', '1');
INSERT INTO catalog_items VALUES ('2135', '142', '325', 'waterbowl*3', '3', '0', '0', '1');
INSERT INTO catalog_items VALUES ('2136', '142', '327', 'toy1*1', '3', '0', '0', '1');
INSERT INTO catalog_items VALUES ('2137', '142', '328', 'toy1*2', '3', '0', '0', '1');
INSERT INTO catalog_items VALUES ('2139', '142', '330', 'toy1*4', '3', '0', '0', '1');
INSERT INTO catalog_items VALUES ('2140', '142', '331', 'goodie1', '3', '0', '0', '1');
INSERT INTO catalog_items VALUES ('2141', '142', '332', 'goodie1*1', '3', '0', '0', '1');
INSERT INTO catalog_items VALUES ('2142', '142', '333', 'goodie1*2', '3', '0', '0', '1');
INSERT INTO catalog_items VALUES ('2143', '142', '334', 'goodie2', '3', '0', '0', '1');
INSERT INTO catalog_items VALUES ('2144', '142', '334', 'goodie2', '3', '0', '0', '1');
INSERT INTO catalog_items VALUES ('2145', '134', '1478', 'ecotron_box', '3', '0', '0', '1');
INSERT INTO catalog_items VALUES ('2146', '134', '1479', 'eco_light2', '3', '0', '0', '1');
INSERT INTO catalog_items VALUES ('2147', '134', '1480', 'eco_chair3', '3', '0', '0', '1');
INSERT INTO catalog_items VALUES ('2148', '134', '1481', 'eco_table3', '3', '0', '0', '1');
INSERT INTO catalog_items VALUES ('2149', '134', '1482', 'eco_lamp2', '3', '0', '0', '1');
INSERT INTO catalog_items VALUES ('2150', '134', '1483', 'eco_sofa3', '3', '0', '0', '1');
INSERT INTO catalog_items VALUES ('2151', '134', '1484', 'eco_table2', '3', '0', '0', '1');
INSERT INTO catalog_items VALUES ('2152', '134', '1485', 'eco_fruits2', '3', '0', '0', '1');
INSERT INTO catalog_items VALUES ('2153', '134', '1486', 'eco_sofa1', '3', '0', '0', '1');
INSERT INTO catalog_items VALUES ('2154', '134', '1487', 'eco_fruits3', '3', '0', '0', '1');
INSERT INTO catalog_items VALUES ('2155', '134', '1488', 'eco_light1', '3', '0', '0', '1');
INSERT INTO catalog_items VALUES ('2156', '134', '1489', 'eco_tree1', '3', '0', '0', '1');
INSERT INTO catalog_items VALUES ('2157', '134', '1490', 'eco_cactus2', '3', '0', '0', '1');
INSERT INTO catalog_items VALUES ('2158', '134', '1493', 'eco_cactus1', '3', '0', '0', '1');
INSERT INTO catalog_items VALUES ('2159', '134', '1494', 'eco_chair2', '3', '0', '0', '1');
INSERT INTO catalog_items VALUES ('2160', '134', '1495', 'eco_cactus3', '3', '0', '0', '1');
INSERT INTO catalog_items VALUES ('2161', '134', '1498', 'eco_lamp3', '3', '0', '0', '1');
INSERT INTO catalog_items VALUES ('2164', '30', '631', 'divider_poly3*8', '3', '0', '0', '1');
INSERT INTO catalog_items VALUES ('2163', '142', '819', 'petfood4', '3', '0', '0', '1');
INSERT INTO catalog_items VALUES ('2165', '134', '164', 'present_gen', '3', '0', '0', '1');
INSERT INTO catalog_items VALUES ('2166', '134', '165', 'present_gen1', '3', '0', '0', '1');
INSERT INTO catalog_items VALUES ('2167', '134', '166', 'present_gen2', '3', '0', '0', '1');
INSERT INTO catalog_items VALUES ('2168', '134', '167', 'present_gen3', '3', '0', '0', '1');
INSERT INTO catalog_items VALUES ('2169', '134', '168', 'present_gen4', '3', '0', '0', '1');
INSERT INTO catalog_items VALUES ('2170', '134', '169', 'present_gen5', '3', '0', '0', '1');
INSERT INTO catalog_items VALUES ('2171', '134', '170', 'present_gen6', '3', '0', '0', '1');
INSERT INTO catalog_items VALUES ('2172', '134', '1450', 'lc_medusa2', '3', '0', '0', '1');
INSERT INTO catalog_items VALUES ('2173', '134', '1007', 'song_disk', '3', '0', '0', '1');
INSERT INTO catalog_items VALUES ('2174', '134', '1499', 'eco_table1', '3', '0', '0', '1');
INSERT INTO catalog_items VALUES ('2175', '134', '1500', 'eco_chair1', '3', '0', '0', '1');
INSERT INTO catalog_items VALUES ('2176', '134', '1501', 'eco_sofa2', '3', '0', '0', '1');
INSERT INTO catalog_items VALUES ('2177', '134', '1503', 'eco_fruits1', '3', '0', '0', '1');
INSERT INTO catalog_items VALUES ('2178', '134', '1504', 'eco_lamp1', '3', '0', '0', '1');
INSERT INTO catalog_items VALUES ('2179', '134', '1505', 'eco_light3', '3', '0', '0', '1');
INSERT INTO catalog_items VALUES ('2180', '134', '1506', 'eco_tree2', '3', '0', '0', '1');
INSERT INTO catalog_items VALUES ('2181', '134', '1542', 'eco_mush1', '3', '0', '0', '1');
INSERT INTO catalog_items VALUES ('2182', '134', '1547', 'eco_mush2', '3', '0', '0', '1');
INSERT INTO catalog_items VALUES ('2183', '134', '1764', 'eco_curtains1', '3', '0', '0', '1');
INSERT INTO catalog_items VALUES ('2184', '134', '1766', 'eco_curtains3', '3', '0', '0', '1');
INSERT INTO catalog_items VALUES ('2185', '134', '1767', 'eco_curtains2', '3', '0', '0', '1');
INSERT INTO catalog_items VALUES ('2195', '41', '20156', 'flag_dominicanrepublic', '3', '0', '0', '1');
INSERT INTO catalog_items VALUES ('2194', '41', '20155', 'flag_ecuador', '3', '0', '0', '1');
INSERT INTO catalog_items VALUES ('2193', '41', '20154', 'flag_chile', '3', '0', '0', '1');
INSERT INTO catalog_items VALUES ('2190', '41', '20151', 'flag_singapore', '3', '0', '0', '1');
INSERT INTO catalog_items VALUES ('2191', '41', '20153', 'flag_columbia', '3', '0', '0', '1');
INSERT INTO catalog_items VALUES ('2196', '41', '20157', 'flag_newzealand', '3', '0', '0', '1');
INSERT INTO catalog_items VALUES ('2197', '41', '20158', 'flag_malaysia', '3', '0', '0', '1');
INSERT INTO catalog_items VALUES ('2198', '41', '20160', 'flag_venezl', '3', '0', '0', '1');
INSERT INTO catalog_items VALUES ('2199', '41', '20161', 'flag_algeria', '3', '0', '0', '1');
INSERT INTO catalog_items VALUES ('2200', '41', '20162', 'flag_tunisia', '3', '0', '0', '1');
INSERT INTO catalog_items VALUES ('2201', '41', '20163', 'flag_panama', '3', '0', '0', '1');
INSERT INTO catalog_items VALUES ('2202', '41', '20164', 'flag_mexico', '3', '0', '0', '1');
INSERT INTO catalog_items VALUES ('2203', '41', '20165', 'flag_argentina', '3', '0', '0', '1');
INSERT INTO catalog_items VALUES ('2204', '41', '20166', 'flag_philippines', '3', '0', '0', '1');
INSERT INTO catalog_items VALUES ('2205', '41', '20167', 'flag_greece', '3', '0', '0', '1');
INSERT INTO catalog_items VALUES ('2206', '41', '20168', 'flag_peru', '3', '0', '0', '1');
INSERT INTO catalog_items VALUES ('2207', '41', '20169', 'flag_morocco', '3', '0', '0', '1');
INSERT INTO catalog_items VALUES ('2208', '41', '20170', 'flag_turkey', '3', '0', '0', '1');
INSERT INTO catalog_items VALUES ('2209', '136', '20117', 'bling_fridge', '5', '0', '0', '1');
INSERT INTO catalog_items VALUES ('2210', '136', '20121', 'bling_chair_a', '3', '0', '0', '1');
INSERT INTO catalog_items VALUES ('2211', '136', '20123', 'bling_pool', '3', '0', '0', '1');
INSERT INTO catalog_items VALUES ('2212', '136', '20124', 'bling_toilet', '4', '0', '0', '1');
INSERT INTO catalog_items VALUES ('2213', '136', '20126', 'bling_chair_c', '3', '0', '0', '1');
INSERT INTO catalog_items VALUES ('2214', '136', '20127', 'bling_chair_b', '3', '0', '0', '1');
INSERT INTO catalog_items VALUES ('2215', '136', '20128', 'bling_shwr', '5', '0', '0', '1');
INSERT INTO catalog_items VALUES ('2216', '136', '20129', 'bling_bed', '3', '0', '0', '1');
INSERT INTO catalog_items VALUES ('2217', '136', '20130', 'bling_sofa', '4', '0', '0', '1');
INSERT INTO catalog_items VALUES ('2218', '136', '20144', 'bling_fridge_restricted', '3', '0', '0', '1');
INSERT INTO catalog_items VALUES ('2219', '136', '20200', 'bling_sink', '3', '0', '0', '1');
INSERT INTO catalog_items VALUES ('2220', '136', '20202', 'bling_cabinet', '3', '0', '0', '1');
INSERT INTO catalog_items VALUES ('2223', '137', '20103', 'org_chairpnk', '3', '0', '0', '1');
INSERT INTO catalog_items VALUES ('2224', '137', '20104', 'org_tblpnk', '3', '0', '0', '1');
INSERT INTO catalog_items VALUES ('2225', '137', '20105', 'org_lampblk', '3', '0', '0', '1');
INSERT INTO catalog_items VALUES ('2226', '137', '20106', 'org_lamppnk', '3', '0', '0', '1');
INSERT INTO catalog_items VALUES ('2227', '137', '20107', 'org_table', '3', '0', '0', '1');
INSERT INTO catalog_items VALUES ('2228', '137', '20111', 'org_chairblk', '3', '0', '0', '1');
INSERT INTO catalog_items VALUES ('2229', '137', '20112', 'org_tblblk', '3', '0', '0', '1');
INSERT INTO catalog_items VALUES ('2230', '137', '20113', 'org_chrblk', '3', '0', '0', '1');
INSERT INTO catalog_items VALUES ('2231', '137', '20115', 'org_chrpnk', '3', '0', '0', '1');
INSERT INTO catalog_items VALUES ('2232', '76', '20125', 'val09_floor', '3', '0', '0', '1');
INSERT INTO catalog_items VALUES ('2233', '76', '20131', 'val09_floor2', '3', '0', '0', '1');
INSERT INTO catalog_items VALUES ('2234', '76', '20198', 'val09_wdrobe_b', '5', '0', '0', '1');
INSERT INTO catalog_items VALUES ('2235', '76', '20199', 'val09_wall2', '4', '0', '0', '1');
INSERT INTO catalog_items VALUES ('2236', '76', '20201', 'val09_wall1', '4', '0', '0', '1');
INSERT INTO catalog_items VALUES ('2237', '76', '20204', 'val09_wdrobe_g', '5', '0', '0', '1');
INSERT INTO catalog_items VALUES ('2238', '76', '20134', 'val_hSeat*1', '3', '0', '0', '1');
INSERT INTO catalog_items VALUES ('2239', '76', '20135', 'val_hSeat*2', '3', '0', '0', '1');
INSERT INTO catalog_items VALUES ('2240', '76', '20136', 'val_hSeat*3', '3', '0', '0', '1');
INSERT INTO catalog_items VALUES ('2241', '76', '20137', 'val_hSeat*4', '3', '0', '0', '1');
INSERT INTO catalog_items VALUES ('2242', '76', '20138', 'val_hSeat*5', '3', '0', '0', '1');
INSERT INTO catalog_items VALUES ('2243', '76', '20139', 'val_hSeat*6', '3', '0', '0', '1');
INSERT INTO catalog_items VALUES ('2244', '76', '20140', 'val_hSeat*7', '3', '0', '0', '1');
INSERT INTO catalog_items VALUES ('2245', '76', '20141', 'val_basket', '3', '0', '0', '1');
INSERT INTO catalog_items VALUES ('2246', '76', '20190', 'val_table1', '4', '0', '0', '1');
INSERT INTO catalog_items VALUES ('2248', '27', '20093', 'xm09_lrgBauble', '10', '0', '0', '1');
INSERT INTO catalog_items VALUES ('2250', '93', '20109', 'xm09_trophy', '6', '0', '0', '1');
INSERT INTO catalog_items VALUES ('2251', '27', '20171', 'xm09_bauble_12', '3', '0', '0', '1');
INSERT INTO catalog_items VALUES ('2252', '27', '20172', 'xm09_bauble_16', '3', '0', '0', '1');
INSERT INTO catalog_items VALUES ('2253', '27', '20173', 'xm09_bauble_17', '3', '0', '0', '1');
INSERT INTO catalog_items VALUES ('2254', '27', '20174', 'xm09_bauble_15', '3', '0', '0', '1');
INSERT INTO catalog_items VALUES ('2255', '27', '20175', 'xm09_bauble_10', '3', '0', '0', '1');
INSERT INTO catalog_items VALUES ('2256', '27', '20176', 'xm09_bauble_9', '3', '0', '0', '1');
INSERT INTO catalog_items VALUES ('2257', '27', '20177', 'xm09_bauble_18', '3', '0', '0', '1');
INSERT INTO catalog_items VALUES ('2258', '27', '20178', 'xm09_bauble_13', '3', '0', '0', '1');
INSERT INTO catalog_items VALUES ('2259', '27', '20179', 'xm09_bauble_2', '3', '0', '0', '1');
INSERT INTO catalog_items VALUES ('2260', '27', '20180', 'xm09_bauble_1', '3', '0', '0', '1');
INSERT INTO catalog_items VALUES ('2261', '27', '20181', 'xm09_bauble_22', '3', '0', '0', '1');
INSERT INTO catalog_items VALUES ('2262', '27', '20182', 'xm09_bauble_3', '3', '0', '0', '1');
INSERT INTO catalog_items VALUES ('2263', '27', '20183', 'xm09_bauble_21', '3', '0', '0', '1');
INSERT INTO catalog_items VALUES ('2264', '27', '20184', 'xm09_bauble_8', '3', '0', '0', '1');
INSERT INTO catalog_items VALUES ('2265', '27', '20185', 'xm09_bauble_4', '3', '0', '0', '1');
INSERT INTO catalog_items VALUES ('2266', '27', '20186', 'xm09_bauble_5', '3', '0', '0', '1');
INSERT INTO catalog_items VALUES ('2267', '27', '20187', 'xm09_bauble_11', '3', '0', '0', '1');
INSERT INTO catalog_items VALUES ('2268', '27', '20188', 'xm09_bauble_20', '3', '0', '0', '1');
INSERT INTO catalog_items VALUES ('2269', '27', '20191', 'xm09_bauble_14', '3', '0', '0', '1');
INSERT INTO catalog_items VALUES ('2270', '27', '20192', 'xm09_bauble_7', '3', '0', '0', '1');
INSERT INTO catalog_items VALUES ('2271', '27', '20193', 'xm09_bauble_6', '3', '0', '0', '1');
INSERT INTO catalog_items VALUES ('2272', '27', '20194', 'xm09_bauble_19', '3', '0', '0', '1');
INSERT INTO catalog_items VALUES ('2273', '76', '20132', 'teddy_basic', '4', '0', '0', '1');
INSERT INTO catalog_items VALUES ('2274', '76', '20133', 'teddy_pendergrass', '5', '0', '0', '1');
INSERT INTO catalog_items VALUES ('2275', '76', '20142', 'teddy_bear', '3', '0', '0', '1');
INSERT INTO catalog_items VALUES ('2276', '76', '20143', 'teddy_pink', '4', '0', '0', '1');
INSERT INTO catalog_items VALUES ('2277', '142', '20079', 'nest_plow_reg', '3', '0', '0', '1');
INSERT INTO catalog_items VALUES ('2278', '142', '20080', 'nest_snug_yel', '4', '0', '0', '1');
INSERT INTO catalog_items VALUES ('2279', '142', '20085', 'nest_snug_grn', '4', '0', '0', '1');
INSERT INTO catalog_items VALUES ('2280', '142', '20086', 'nest_snug_red', '4', '0', '0', '1');
INSERT INTO catalog_items VALUES ('2281', '142', '20087', 'nest_snug_grn', '4', '0', '0', '1');
INSERT INTO catalog_items VALUES ('2282', '142', '20088', 'nest_plow_bro', '3', '0', '0', '1');
INSERT INTO catalog_items VALUES ('2283', '142', '20089', 'nest_plow_red', '3', '0', '0', '1');
INSERT INTO catalog_items VALUES ('2284', '142', '20090', 'nest_snug_blu', '4', '0', '0', '1');
INSERT INTO catalog_items VALUES ('2285', '142', '20092', 'nest_plow_blu', '3', '0', '0', '1');
INSERT INTO catalog_items VALUES ('2286', '142', '20094', 'nest_dirt', '2', '0', '0', '1');
INSERT INTO catalog_items VALUES ('2287', '142', '20095', 'nest_snug_prp', '3', '0', '0', '1');
INSERT INTO catalog_items VALUES ('2288', '142', '20096', 'nest_nest', '3', '0', '0', '1');
INSERT INTO catalog_items VALUES ('2289', '142', '20097', 'nest_nails', '2', '0', '0', '1');
INSERT INTO catalog_items VALUES ('2290', '142', '20098', 'nest_basket', '2', '0', '0', '1');
INSERT INTO catalog_items VALUES ('2291', '142', '20099', 'nest_ice', '2', '0', '0', '1');
INSERT INTO catalog_items VALUES ('2292', '142', '20100', 'nest_plow_skl', '3', '0', '0', '1');
INSERT INTO catalog_items VALUES ('2293', '142', '20101', 'nest_snug_bla', '4', '0', '0', '1');
INSERT INTO catalog_items VALUES ('2294', '95', '20071', 'ads_gsArcade_2', '10', '0', '0', '1');
INSERT INTO catalog_items VALUES ('2295', '95', '20073', 'ads_idol_l_carpet', '10', '0', '0', '1');
INSERT INTO catalog_items VALUES ('2296', '134', '20068', 'ads_cllava2', '10', '0', '0', '1');
INSERT INTO catalog_items VALUES ('2297', '95', '20072', 'ads_gsArcade_1', '10', '0', '0', '1');
INSERT INTO catalog_items VALUES ('2298', '95', '20074', 'ads_mtvtrophy_silver', '10', '0', '0', '1');
INSERT INTO catalog_items VALUES ('2299', '105', '20075', 'ads_spang_sleep', '10', '0', '0', '1');
INSERT INTO catalog_items VALUES ('2300', '95', '20076', 'ads_mtvtrophy_gold', '10', '0', '0', '1');
INSERT INTO catalog_items VALUES ('2301', '95', '20102', 'ads_cl_moodi', '10', '0', '0', '1');
INSERT INTO catalog_items VALUES ('2302', '95', '20116', 'ads_chups', '10', '0', '0', '1');
INSERT INTO catalog_items VALUES ('2303', '95', '20119', 'ads_droetker_paula', '10', '0', '0', '1');
INSERT INTO catalog_items VALUES ('2304', '95', '20145', 'ads_percyrock', '10', '0', '0', '1');
INSERT INTO catalog_items VALUES ('2305', '95', '20147', 'ads_idol_l_logo', '10', '0', '0', '1');
INSERT INTO catalog_items VALUES ('2306', '95', '20197', 'ads_percyw', '10', '0', '0', '1');
INSERT INTO catalog_items VALUES ('2307', '95', '20150', 'ads_mtv_tv', '10', '0', '0', '1');
INSERT INTO catalog_items VALUES ('2308', '95', '20196', 'ads_tv_jaapuisto', '10', '0', '0', '1');
INSERT INTO catalog_items VALUES ('2310', '134', '20159', 'byesw_loadscreen', '10', '0', '0', '1');
INSERT INTO catalog_items VALUES ('2312', '95', '20149', 'ads_mtv_bigtv', '10', '0', '0', '1');
INSERT INTO catalog_items VALUES ('2313', '95', '20148', 'ads_idol_l_tv', '10', '0', '0', '1');
INSERT INTO catalog_items VALUES ('2314', '27', '20066', 'tree2', '2', '0', '0', '1');
INSERT INTO catalog_items VALUES ('2317', '30', '20067', 'divider_poly3*7', '6', '0', '0', '1');
INSERT INTO catalog_items VALUES ('2318', '178', '20077', 'ktchn_hlthNut', '5', '0', '0', '1');
INSERT INTO catalog_items VALUES ('2319', '142', '20078', 'petfood8', '10', '0', '0', '1');
INSERT INTO catalog_items VALUES ('2320', '142', '20081', 'petfood9', '10', '0', '0', '1');
INSERT INTO catalog_items VALUES ('2321', '142', '20082', 'petfood10', '10', '0', '0', '1');
INSERT INTO catalog_items VALUES ('2322', '142', '20083', 'petfood7', '10', '0', '0', '1');
INSERT INTO catalog_items VALUES ('2323', '142', '20084', 'petfood6', '10', '0', '0', '1');
INSERT INTO catalog_items VALUES ('2324', '142', '20091', 'petfood5', '10', '0', '0', '1');
INSERT INTO catalog_items VALUES ('2325', '142', '20118', 'petfood12', '10', '0', '0', '1');
INSERT INTO catalog_items VALUES ('2326', '142', '20120', 'petfood11', '10', '0', '0', '1');
INSERT INTO catalog_items VALUES ('2327', '142', '20122', 'petfood13', '10', '0', '0', '1');
INSERT INTO catalog_items VALUES ('2329', '94', '20146', 'md_can', '10', '0', '0', '1');
INSERT INTO catalog_items VALUES ('2330', '66', '20152', 'hween09_curt', '4', '0', '0', '1');
INSERT INTO catalog_items VALUES ('2331', '57', '20108', 'china_tiger', '4', '0', '0', '1');
INSERT INTO catalog_items VALUES ('2332', '57', '20110', 'china_plmTree', '3', '0', '0', '1');
INSERT INTO catalog_items VALUES ('2333', '134', '20114', 'china_tigrSeat', '3', '0', '0', '1');
INSERT INTO catalog_items VALUES ('2334', '57', '20195', 'china_pstr3', '3', '0', '0', '1');
INSERT INTO catalog_items VALUES ('2336', '62', '20207', 'rare_ironmaiden name', '5', '0', '0', '1');
INSERT INTO catalog_items VALUES ('2337', '95', '20208', 'rare_trex name', '10', '0', '0', '1');
INSERT INTO catalog_items VALUES ('2338', '143', '20209', 'beanstalk', '6', '0', '0', '1');
INSERT INTO catalog_items VALUES ('2339', '172', '20210', 'rare_vdoll name', '3', '0', '0', '1');
INSERT INTO catalog_items VALUES ('2340', '172', '20211', 'Sofa Mamut', '20', '20', '0', '1');
INSERT INTO catalog_items VALUES ('2341', '136', '20212', 'crystal_patch', '3', '0', '0', '1');
INSERT INTO catalog_items VALUES ('2342', '95', '20213', 'ads_boost_surfb name', '10', '0', '0', '1');
INSERT INTO catalog_items VALUES ('2343', '95', '20214', 'ads_tlc_wheel name', '10', '0', '0', '1');
INSERT INTO catalog_items VALUES ('2346', '94', '227', 'Dragon Egg', '100', '100', '0', '1');
INSERT INTO catalog_items VALUES ('2348', '134', '180', 'doorC', '10', '0', '0', '100');
INSERT INTO catalog_items VALUES ('2349', '141', '20220', 'a0 pet5', '20', '0', '0', '1');
INSERT INTO catalog_items VALUES ('2350', '143', '20221', 'garden_lupin4', '4', '0', '0', '1');
INSERT INTO catalog_items VALUES ('2351', '143', '20222', 'garden_mursu3', '5', '0', '0', '1');
INSERT INTO catalog_items VALUES ('2352', '143', '20223', 'garden_lupin5', '4', '0', '0', '1');
INSERT INTO catalog_items VALUES ('2353', '143', '20224', 'garden_seed', '3', '0', '0', '1');
INSERT INTO catalog_items VALUES ('2354', '143', '20225', 'garden_flytrap', '6', '0', '0', '1');
INSERT INTO catalog_items VALUES ('2355', '143', '20226', 'garden_flo3', '2', '0', '0', '1');
INSERT INTO catalog_items VALUES ('2359', '143', '20229', 'garden_mursu2', '5', '0', '0', '1');
INSERT INTO catalog_items VALUES ('2357', '143', '20227', 'garden_volcano', '5', '0', '0', '1');
INSERT INTO catalog_items VALUES ('2358', '143', '20228', 'garden_flolamp', '8', '0', '0', '1');
INSERT INTO catalog_items VALUES ('2360', '143', '20230', 'garden_jyrki', '4', '0', '0', '1');
INSERT INTO catalog_items VALUES ('2361', '143', '20231', 'garden_mursu4', '4', '0', '0', '1');
INSERT INTO catalog_items VALUES ('2362', '143', '20232', 'garden_leaves', '3', '0', '0', '1');
INSERT INTO catalog_items VALUES ('2363', '143', '20233', 'garden_lupin2', '4', '0', '0', '1');
INSERT INTO catalog_items VALUES ('2364', '143', '20234', 'garden_lupin3', '4', '0', '0', '1');
INSERT INTO catalog_items VALUES ('2365', '143', '20235', 'garden_mursu', '4', '0', '0', '1');
INSERT INTO catalog_items VALUES ('2366', '143', '20238', 'garden_orchtree', '6', '0', '0', '1');
INSERT INTO catalog_items VALUES ('2367', '143', '20237', 'garden_flo2', '2', '0', '0', '1');
INSERT INTO catalog_items VALUES ('2368', '143', '20239', 'garden_lupin1', '4', '0', '0', '1');
INSERT INTO catalog_items VALUES ('2369', '143', '20240', 'garden_staringbush', '5', '0', '0', '1');
INSERT INTO catalog_items VALUES ('2370', '143', '20242', 'garden_flo1', '2', '0', '0', '1');
INSERT INTO catalog_items VALUES ('2371', '143', '20243', 'garden_jungle', '5', '0', '0', '1');
INSERT INTO catalog_items VALUES ('2372', '143', '20286', 'garden_wall', '4', '0', '0', '1');
INSERT INTO catalog_items VALUES ('2374', '144', '20247', 'runway_display', '5', '0', '0', '1');
INSERT INTO catalog_items VALUES ('2375', '144', '20248', 'runway_bigchr_5', '4', '0', '0', '1');
INSERT INTO catalog_items VALUES ('2376', '144', '20249', 'runway_bigchr_4', '4', '0', '0', '1');
INSERT INTO catalog_items VALUES ('2377', '144', '20253', 'runway_stool', '4', '0', '0', '1');
INSERT INTO catalog_items VALUES ('2378', '144', '20254', 'runway_dvdr', '3', '0', '0', '1');
INSERT INTO catalog_items VALUES ('2379', '144', '20255', 'runway_block_2', '5', '0', '0', '1');
INSERT INTO catalog_items VALUES ('2380', '144', '20256', 'runway_bigchr_1', '5', '0', '0', '1');
INSERT INTO catalog_items VALUES ('2381', '144', '20260', 'runway_block_1', '5', '0', '0', '1');
INSERT INTO catalog_items VALUES ('2382', '144', '20261', 'runway_bench', '4', '0', '0', '1');
INSERT INTO catalog_items VALUES ('2383', '144', '20262', 'runway_chair_2', '3', '0', '0', '1');
INSERT INTO catalog_items VALUES ('2384', '144', '20265', 'runway_bigchr_3', '4', '0', '0', '1');
INSERT INTO catalog_items VALUES ('2385', '144', '20268', 'runway_bigchr_2', '4', '0', '0', '1');
INSERT INTO catalog_items VALUES ('2386', '144', '20270', 'runway_table_2', '4', '0', '0', '1');
INSERT INTO catalog_items VALUES ('2387', '144', '20271', 'runway_table_1', '5', '0', '0', '1');
INSERT INTO catalog_items VALUES ('2388', '144', '20272', 'runway_manqn_1', '4', '0', '0', '1');
INSERT INTO catalog_items VALUES ('2389', '144', '20276', 'runway_head', '4', '0', '0', '1');
INSERT INTO catalog_items VALUES ('2390', '144', '20277', 'runway_manqn_2', '4', '0', '0', '1');
INSERT INTO catalog_items VALUES ('2391', '144', '20285', 'runway_chair_1', '3', '0', '0', '1');
INSERT INTO catalog_items VALUES ('2392', '144', '20289', 'runway_shelf', '3', '0', '0', '1');
INSERT INTO catalog_items VALUES ('2393', '144', '20292', 'runway_fabric', '3', '0', '0', '1');
INSERT INTO catalog_items VALUES ('2394', '8', '20245', 'hc2_frplc', '5', '0', '0', '1');
INSERT INTO catalog_items VALUES ('2395', '8', '20246', 'hc2_barchair', '3', '0', '0', '1');
INSERT INTO catalog_items VALUES ('2396', '8', '20250', 'hc3_dc', '4', '0', '0', '1');
INSERT INTO catalog_items VALUES ('2397', '8', '20252', 'hc2_sofatbl', '4', '0', '0', '1');
INSERT INTO catalog_items VALUES ('2398', '8', '20257', 'hc2_biglamp', '3', '0', '0', '1');
INSERT INTO catalog_items VALUES ('2399', '8', '20258', 'hc2_sofa', '4', '0', '0', '1');
INSERT INTO catalog_items VALUES ('2400', '8', '20259', 'hc2_carpet', '5', '0', '0', '1');
INSERT INTO catalog_items VALUES ('2401', '8', '20264', 'hc3_table', '3', '0', '0', '1');
INSERT INTO catalog_items VALUES ('2402', '8', '20266', 'hc3_stool', '3', '0', '0', '1');
INSERT INTO catalog_items VALUES ('2403', '8', '20267', 'hc3_sofa', '4', '0', '0', '1');
INSERT INTO catalog_items VALUES ('2404', '8', '20269', 'hc2_armchair', '3', '0', '0', '1');
INSERT INTO catalog_items VALUES ('2405', '8', '20273', 'hc2_dvn', '4', '0', '0', '1');
INSERT INTO catalog_items VALUES ('2406', '8', '20274', 'hc3_light', '3', '0', '0', '1');
INSERT INTO catalog_items VALUES ('2407', '8', '20275', 'hc3_shelf', '5', '0', '0', '1');
INSERT INTO catalog_items VALUES ('2408', '8', '20278', 'hc2_divider', '3', '0', '0', '1');
INSERT INTO catalog_items VALUES ('2409', '8', '20279', 'hc2_coffee', '5', '0', '0', '1');
INSERT INTO catalog_items VALUES ('2410', '8', '20280', 'hc2_cart', '3', '0', '0', '1');
INSERT INTO catalog_items VALUES ('2411', '8', '20281', 'hc3_bard', '10', '0', '0', '1');
INSERT INTO catalog_items VALUES ('2412', '8', '20282', 'hc3_hugelamp', '5', '0', '0', '1');
INSERT INTO catalog_items VALUES ('2413', '8', '20283', 'hc3_divider', '3', '0', '0', '1');
INSERT INTO catalog_items VALUES ('2414', '8', '20284', 'hc2_vase', '4', '0', '0', '1');
INSERT INTO catalog_items VALUES ('2415', '8', '20288', 'hc3_walldeco', '10', '0', '0', '1');
INSERT INTO catalog_items VALUES ('2416', '134', '20295', 'camera', '10', '0', '0', '1');
INSERT INTO catalog_items VALUES ('2417', '134', '20045', 'arabian_tile', '10', '0', '0', '100');
INSERT INTO catalog_items VALUES ('2418', '95', '20241', 'ads_grefusa_yum', '10', '0', '0', '1');
INSERT INTO catalog_items VALUES ('2419', '95', '20244', 'merger_chesT', '10', '0', '0', '1');
INSERT INTO catalog_items VALUES ('2420', '95', '20263', 'ads_cheetos name', '10', '0', '0', '1');
INSERT INTO catalog_items VALUES ('2421', '95', '20287', 'ads_tv_yle name', '10', '0', '0', '1');
INSERT INTO catalog_items VALUES ('2422', '95', '20290', 'ads_nokia_x6', '10', '0', '0', '1');
INSERT INTO catalog_items VALUES ('2423', '95', '20291', 'ads_target_wall', '10', '0', '0', '1');
INSERT INTO catalog_items VALUES ('2424', '95', '20293', 'ads_latrobe_flag', '10', '0', '0', '1');
INSERT INTO catalog_items VALUES ('2425', '27', '20296', 'holly', '4', '0', '0', '1');
INSERT INTO catalog_items VALUES ('2427', '145', '20298', 'wed_plant', '15', '0', '0', '1');
INSERT INTO catalog_items VALUES ('2426', '145', '20297', 'wed_arch', '12', '0', '0', '1');
INSERT INTO catalog_items VALUES ('2428', '145', '20299', 'wed_icesculp', '15', '0', '0', '1');
INSERT INTO catalog_items VALUES ('2429', '145', '20300', 'wed_carsofa', '15', '0', '0', '1');
INSERT INTO catalog_items VALUES ('2430', '147', '20301', 'a0 pet3', '20', '0', '0', '1');
INSERT INTO catalog_items VALUES ('2431', '148', '20303', 'a0 pet4', '20', '0', '0', '1');
INSERT INTO catalog_items VALUES ('2432', '149', '20304', 'a0 pet1', '20', '0', '0', '1');
INSERT INTO catalog_items VALUES ('2433', '150', '20305', 'a0 pet0', '20', '0', '0', '1');
INSERT INTO catalog_items VALUES ('2434', '151', '20306', 'a0 pet2', '20', '0', '0', '1');
INSERT INTO catalog_items VALUES ('2488', '157', '20392', 'ads_chocapic', '30', '0', '0', '1');
INSERT INTO catalog_items VALUES ('2489', '157', '20393', 'ads_tv_chocapic_01', '30', '0', '0', '1');
INSERT INTO catalog_items VALUES ('2490', '157', '20394', 'ads_super_pop', '30', '0', '0', '1');
INSERT INTO catalog_items VALUES ('2491', '157', '20395', 'party_crate1_1', '30', '0', '0', '1');
INSERT INTO catalog_items VALUES ('2492', '157', '20396', 'party_crate1_2', '30', '0', '0', '1');
INSERT INTO catalog_items VALUES ('2493', '157', '20397', 'party_crate1_3', '30', '0', '0', '1');
INSERT INTO catalog_items VALUES ('2494', '157', '20398', 'party_crate1_4', '30', '0', '0', '1');
INSERT INTO catalog_items VALUES ('2495', '157', '20399', 'party_crate2_1', '30', '0', '0', '1');
INSERT INTO catalog_items VALUES ('2496', '157', '20400', 'party_crate2_2', '30', '0', '0', '1');
INSERT INTO catalog_items VALUES ('2497', '157', '20401', 'party_crate2_3', '30', '0', '0', '1');
INSERT INTO catalog_items VALUES ('2498', '157', '20402', 'party_crate2_4', '30', '0', '0', '1');
INSERT INTO catalog_items VALUES ('2499', '157', '20403', 'party_djset', '30', '0', '0', '1');
INSERT INTO catalog_items VALUES ('2483', '152', '20354', 'fball_score_y', '1', '0', '0', '1');
INSERT INTO catalog_items VALUES ('2482', '152', '20353', 'fball_score_r', '1', '0', '0', '1');
INSERT INTO catalog_items VALUES ('2481', '152', '20352', 'fball_score_g', '1', '0', '0', '1');
INSERT INTO catalog_items VALUES ('2480', '152', '20351', 'fball_score_b', '1', '0', '0', '1');
INSERT INTO catalog_items VALUES ('2479', '152', '20350', 'fball_ptch8', '1', '0', '0', '1');
INSERT INTO catalog_items VALUES ('2478', '152', '20349', 'fball_ptch7', '1', '0', '0', '1');
INSERT INTO catalog_items VALUES ('2477', '152', '20348', 'fball_ptch6', '1', '0', '0', '1');
INSERT INTO catalog_items VALUES ('2476', '152', '20347', 'fball_ptch5', '1', '0', '0', '1');
INSERT INTO catalog_items VALUES ('2475', '152', '20346', 'fball_ptch4', '1', '0', '0', '1');
INSERT INTO catalog_items VALUES ('2474', '152', '20345', 'fball_ptch3', '1', '0', '0', '1');
INSERT INTO catalog_items VALUES ('2473', '152', '20344', 'fball_ptch2', '1', '0', '0', '1');
INSERT INTO catalog_items VALUES ('2472', '152', '20343', 'fball_ptch1', '1', '0', '0', '1');
INSERT INTO catalog_items VALUES ('2471', '152', '20342', 'fball_ptch0', '1', '0', '0', '1');
INSERT INTO catalog_items VALUES ('2470', '152', '20341', 'fball_counter', '1', '0', '0', '1');
INSERT INTO catalog_items VALUES ('2469', '152', '20340', 'fball_gate', '1', '0', '0', '1');
INSERT INTO catalog_items VALUES ('2468', '152', '20339', 'fball_light', '1', '0', '0', '1');
INSERT INTO catalog_items VALUES ('2467', '152', '20338', 'fball_goal_y', '1', '0', '0', '1');
INSERT INTO catalog_items VALUES ('2466', '152', '20337', 'fball_goal_r', '1', '0', '0', '1');
INSERT INTO catalog_items VALUES ('2465', '152', '20336', 'fball_goal_g', '1', '0', '0', '1');
INSERT INTO catalog_items VALUES ('2464', '152', '20335', 'fball_goal_b', '1', '0', '0', '1');
INSERT INTO catalog_items VALUES ('2463', '152', '20334', 'fball_fnc3', '1', '0', '0', '1');
INSERT INTO catalog_items VALUES ('2462', '152', '20333', 'fball_fnc1', '1', '0', '0', '1');
INSERT INTO catalog_items VALUES ('2461', '152', '20332', 'fball_crnr', '1', '0', '0', '1');
INSERT INTO catalog_items VALUES ('2460', '152', '20331', 'fball_cote', '1', '0', '0', '1');
INSERT INTO catalog_items VALUES ('2459', '152', '20330', 'fball_bench', '1', '0', '0', '1');
INSERT INTO catalog_items VALUES ('2454', '152', '20324', 'fball_audbench', '1', '0', '0', '1');
INSERT INTO catalog_items VALUES ('99005', '500', '99005', 'qt_xm10_palm_tree', '10', '0', '0', '1');
INSERT INTO catalog_items VALUES ('2620', '163', '20428', 'ads_capri_arcade', '5', '0', '0', '1');
INSERT INTO catalog_items VALUES ('2619', '163', '20427', 'ads_capri_tree', '3', '0', '0', '1');
INSERT INTO catalog_items VALUES ('2616', '163', '20426', 'ads_capri_lava', '5', '0', '0', '1');
INSERT INTO catalog_items VALUES ('2615', '163', '20425', 'ads_capri_chair', '3', '0', '0', '1');
INSERT INTO catalog_items VALUES ('99009', '500', '99009', 'qt_xm10_iceduck', '10', '0', '0', '1');
INSERT INTO catalog_items VALUES ('2601', '125', '20415', 'avatar_effect28', '0', '108', '0', '1');
INSERT INTO catalog_items VALUES ('2906', '185', '21298', 'Fuente Pez Morada', '32', '1', '0', '1');
INSERT INTO catalog_items VALUES ('2443', '185', '20313', 'Fuente Pez Sangrienta', '32', '0', '0', '1');
INSERT INTO catalog_items VALUES ('2444', '185', '20314', 'Fuente Pez Oro', '32', '0', '0', '1');
INSERT INTO catalog_items VALUES ('2445', '185', '20315', 'Fuente Pez Verde', '32', '0', '0', '1');
INSERT INTO catalog_items VALUES ('2446', '185', '20316', 'Fuente Pez Roja', '32', '0', '0', '1');
INSERT INTO catalog_items VALUES ('2447', '185', '20317', 'Fuente Pez Gris', '32', '0', '0', '1');
INSERT INTO catalog_items VALUES ('57016', '159', '39916', 'prison_crnr', '4', '0', '0', '1');
INSERT INTO catalog_items VALUES ('57017', '159', '39913', 'prison_dvdr1', '5', '0', '0', '1');
INSERT INTO catalog_items VALUES ('57018', '159', '39912', 'prison_gate', '4', '0', '0', '1');
INSERT INTO catalog_items VALUES ('57019', '159', '39911', 'prison_dvdr2', '5', '0', '0', '1');
INSERT INTO catalog_items VALUES ('57020', '159', '39914', 'prison_stone', '1', '0', '0', '1');
INSERT INTO catalog_items VALUES ('57021', '159', '39915', 'prison_tower', '10', '0', '0', '1');
INSERT INTO catalog_items VALUES ('57022', '159', '39913', 'prison_dvdr1', '20', '0', '0', '10');
INSERT INTO catalog_items VALUES ('57023', '159', '39911', 'prison_dvdr2', '20', '0', '0', '10');
INSERT INTO catalog_items VALUES ('57024', '8', '39917', 'hc3_stereo', '3', '0', '0', '1');
INSERT INTO catalog_items VALUES ('99004', '500', '99004', 'qt_xm10_trex', '10', '0', '0', '1');
INSERT INTO catalog_items VALUES ('97308', '75', '95383', 'bw_pool_a3', '5', '0', '0', '1');
INSERT INTO catalog_items VALUES ('77025', '75', '59939', 'bw_jaws', '5', '0', '0', '1');
INSERT INTO catalog_items VALUES ('41099', '75', '25365', 'bw_chair', '4', '0', '0', '1');
INSERT INTO catalog_items VALUES ('41098', '75', '25354', 'bw_boat', '12', '0', '0', '1');
INSERT INTO catalog_items VALUES ('41097', '75', '25357', 'bw_sofa', '5', '0', '0', '1');
INSERT INTO catalog_items VALUES ('41095', '75', '25372', 'bw_fnc', '3', '0', '0', '1');
INSERT INTO catalog_items VALUES ('41094', '75', '25371', 'bw_fnc_crnr', '4', '0', '0', '1');
INSERT INTO catalog_items VALUES ('41092', '75', '25369', 'bw_van', '25', '0', '0', '1');
INSERT INTO catalog_items VALUES ('41091', '75', '25368', 'bw_mttrss', '6', '0', '0', '1');
INSERT INTO catalog_items VALUES ('41089', '75', '25366', 'bw_table', '4', '0', '0', '1');
INSERT INTO catalog_items VALUES ('41088', '75', '25364', 'bw_sboard', '6', '0', '0', '1');
INSERT INTO catalog_items VALUES ('41087', '75', '25363', 'bw_croc', '7', '0', '0', '1');
INSERT INTO catalog_items VALUES ('41086', '75', '25362', 'bw_water_2', '10', '0', '0', '1');
INSERT INTO catalog_items VALUES ('41085', '75', '25361', 'bw_shower', '6', '0', '0', '1');
INSERT INTO catalog_items VALUES ('41084', '75', '25360', 'bw_ccnuts', '3', '0', '0', '1');
INSERT INTO catalog_items VALUES ('77024', '8', '59918', 'Vase Vip', '5', '0', '0', '1');
INSERT INTO catalog_items VALUES ('41083', '75', '25359', 'bw_fin', '15', '0', '0', '1');
INSERT INTO catalog_items VALUES ('41082', '75', '25355', 'bw_lgchair', '8', '0', '0', '1');
INSERT INTO catalog_items VALUES ('97027', '95', '95371', 'Lava', '5', '0', '0', '1');
INSERT INTO catalog_items VALUES ('129531', '185', '96401', 'Submarino', '5', '0', '0', '1');
INSERT INTO catalog_items VALUES ('129530', '185', '96400', 'Nobox Amarillo', '3', '0', '0', '1');
INSERT INTO catalog_items VALUES ('129529', '185', '96399', 'Nobox Azul', '3', '0', '0', '1');
INSERT INTO catalog_items VALUES ('129528', '185', '96398', 'Nobox Rojo', '3', '0', '0', '1');
INSERT INTO catalog_items VALUES ('97323', '75', '95390', 'bw_table_p', '5', '0', '0', '1');
INSERT INTO catalog_items VALUES ('97322', '75', '95391', 'bw_van_p', '5', '0', '0', '1');
INSERT INTO catalog_items VALUES ('97321', '75', '95392', 'bw_van_g', '5', '0', '0', '1');
INSERT INTO catalog_items VALUES ('97320', '75', '95393', 'bw_sofa_g', '5', '0', '0', '1');
INSERT INTO catalog_items VALUES ('97319', '75', '95394', 'bw_sofa_p', '5', '0', '0', '1');
INSERT INTO catalog_items VALUES ('600000', '75', '25362', 'bw_water_2', '10', '0', '0', '50');
INSERT INTO catalog_items VALUES ('97318', '75', '95395', 'bw_fnc_g', '5', '0', '0', '1');
INSERT INTO catalog_items VALUES ('97315', '75', '95376', 'bw_fnc_crnr_p', '5', '0', '0', '1');
INSERT INTO catalog_items VALUES ('97314', '75', '95377', 'bw_fnc_crnr_g', '5', '0', '0', '1');
INSERT INTO catalog_items VALUES ('97313', '75', '95378', 'bw_sofa_p', '5', '0', '0', '1');
INSERT INTO catalog_items VALUES ('97312', '75', '95379', 'bw_boat_p', '5', '0', '0', '1');
INSERT INTO catalog_items VALUES ('97311', '75', '95380', 'bw_mttrss_g', '5', '0', '0', '1');
INSERT INTO catalog_items VALUES ('97310', '75', '95381', 'bw_pool_b2', '5', '0', '0', '1');
INSERT INTO catalog_items VALUES ('97309', '75', '95382', 'bw_pool_a2', '5', '0', '0', '1');
INSERT INTO catalog_items VALUES ('97324', '75', '95389', 'bw_table_g', '5', '0', '0', '1');
INSERT INTO catalog_items VALUES ('97326', '75', '95387', 'bw_surfb_g', '5', '0', '0', '1');
INSERT INTO catalog_items VALUES ('97327', '75', '95386', 'bw_fnc_crnr_p', '5', '0', '0', '1');
INSERT INTO catalog_items VALUES ('97328', '75', '95385', 'bw_pool_b1', '5', '0', '0', '1');
INSERT INTO catalog_items VALUES ('97329', '75', '95384', 'bw_pool_a1', '5', '0', '0', '1');
INSERT INTO catalog_items VALUES ('97317', '75', '95374', 'ads_grefusa_surfb', '5', '0', '0', '1');
INSERT INTO catalog_items VALUES ('97316', '75', '95375', 'ads_pepsi0', '5', '0', '0', '1');
INSERT INTO catalog_items VALUES ('2449', '125', '21001', 'avatar_effect26', '0', '100', '0', '1');
INSERT INTO catalog_items VALUES ('2450', '125', '21002', 'avatar_effect25', '0', '100', '0', '1');
INSERT INTO catalog_items VALUES ('2451', '125', '21003', 'avatar_effect24', '0', '100', '0', '1');
INSERT INTO catalog_items VALUES ('2452', '125', '21004', 'avatar_effect23', '0', '100', '0', '1');
INSERT INTO catalog_items VALUES ('10289', '497', '10289', 'easel_0', '25', '0', '0', '1');
INSERT INTO catalog_items VALUES ('10290', '497', '10290', 'easel_1', '25', '0', '0', '1');
INSERT INTO catalog_items VALUES ('10291', '497', '10291', 'easel_2', '25', '0', '0', '1');
INSERT INTO catalog_items VALUES ('10292', '497', '10292', 'easel_3', '25', '0', '0', '1');
INSERT INTO catalog_items VALUES ('10293', '497', '10293', 'easel_4', '25', '0', '0', '1');
INSERT INTO catalog_items VALUES ('10294', '497', '10294', 'easel_2', '25', '0', '0', '1');
INSERT INTO catalog_items VALUES ('10278', '496', '10278', 'hosptl_bbag name', '10', '0', '0', '1');
INSERT INTO catalog_items VALUES ('10279', '496', '10279', 'hosptl_bed', '10', '0', '0', '1');
INSERT INTO catalog_items VALUES ('10280', '496', '10280', 'hosptl_cab1', '5', '0', '0', '1');
INSERT INTO catalog_items VALUES ('10281', '496', '10281', 'hosptl_cab2', '3', '0', '0', '1');
INSERT INTO catalog_items VALUES ('10282', '496', '10282', 'hosptl_curtain', '3', '0', '0', '1');
INSERT INTO catalog_items VALUES ('10283', '496', '10283', 'hosptl_defibs', '5', '0', '0', '1');
INSERT INTO catalog_items VALUES ('10284', '496', '10284', 'hosptl_light', '15', '0', '0', '1');
INSERT INTO catalog_items VALUES ('10285', '496', '10285', 'hosptl_seat', '5', '0', '0', '1');
INSERT INTO catalog_items VALUES ('10286', '496', '10286', 'hosptl_skele', '1', '0', '0', '1');
INSERT INTO catalog_items VALUES ('10287', '496', '10287', 'hosptl_xray', '10', '0', '0', '1');
INSERT INTO catalog_items VALUES ('10355', '502', '10355', 'african_tree2', '10', '0', '0', '1');
INSERT INTO catalog_items VALUES ('10354', '502', '10354', 'african_tree1', '10', '0', '0', '1');
INSERT INTO catalog_items VALUES ('10353', '502', '10353', 'african_stage', '5', '0', '0', '1');
INSERT INTO catalog_items VALUES ('10352', '502', '10352', 'african_patch', '10', '0', '0', '1');
INSERT INTO catalog_items VALUES ('10351', '502', '10351', 'african_fence', '5', '0', '0', '1');
INSERT INTO catalog_items VALUES ('10350', '502', '10350', 'african_bones', '3', '0', '0', '1');
INSERT INTO catalog_items VALUES ('97419', '178', '97419', 'ktchn10_block', '5', '0', '0', '1');
INSERT INTO catalog_items VALUES ('97420', '178', '97420', 'ktchn10_cabnt', '5', '0', '0', '1');
INSERT INTO catalog_items VALUES ('97421', '178', '97421', 'ktchn10_pot', '5', '0', '0', '1');
INSERT INTO catalog_items VALUES ('97422', '178', '97422', 'ktchn10_sink', '5', '0', '0', '1');
INSERT INTO catalog_items VALUES ('97423', '178', '97423', 'ktchn10_stove', '5', '0', '0', '1');
INSERT INTO catalog_items VALUES ('97424', '178', '97424', 'ktchn10_tea', '5', '0', '0', '1');
INSERT INTO catalog_items VALUES ('77027', '75', '3530', 'bw_water_1', '5', '0', '0', '1');
INSERT INTO catalog_items VALUES ('600014', '120', '2785090', 'bb_knj1', '3', '0', '0', '1');
INSERT INTO catalog_items VALUES ('600015', '120', '2785091', 'bb_gate_r', '1', '0', '0', '1');
INSERT INTO catalog_items VALUES ('600016', '120', '2785092', 'bb_tddhnd', '3', '0', '0', '1');
INSERT INTO catalog_items VALUES ('600017', '120', '2785093', 'bb_lightdiv', '4', '0', '0', '1');
INSERT INTO catalog_items VALUES ('600018', '120', '2785094', 'bb_tddhead', '4', '0', '0', '1');
INSERT INTO catalog_items VALUES ('600019', '120', '2785095', 'bb_pyramid', '3', '0', '0', '1');
INSERT INTO catalog_items VALUES ('600020', '120', '2785096', 'bb_patch1', '100', '0', '0', '100');
INSERT INTO catalog_items VALUES ('600021', '120', '2785097', 'bb_fnc3', '3', '0', '0', '1');
INSERT INTO catalog_items VALUES ('600022', '120', '2785098', 'bb_gate_y', '2', '0', '0', '1');
INSERT INTO catalog_items VALUES ('600023', '120', '2785099', 'bb_apparatus', '3', '0', '0', '1');
INSERT INTO catalog_items VALUES ('600024', '120', '2785100', 'bb_caterbody', '2', '0', '0', '1');
INSERT INTO catalog_items VALUES ('600026', '120', '2785102', 'bb_fnc1', '3', '0', '0', '1');
INSERT INTO catalog_items VALUES ('600027', '120', '2785103', 'bb_puck', '3', '0', '0', '1');
INSERT INTO catalog_items VALUES ('600028', '120', '2785104', 'bb_rnd_tele', '3', '0', '0', '1');
INSERT INTO catalog_items VALUES ('600029', '120', '2785105', 'bb_gate_b', '3', '0', '0', '1');
INSERT INTO catalog_items VALUES ('600031', '120', '2785107', 'bb_painimies1', '3', '0', '0', '1');
INSERT INTO catalog_items VALUES ('600032', '120', '2785108', 'bb_painimies2', '5', '0', '0', '1');
INSERT INTO catalog_items VALUES ('604003', '120', '2785079', 'bb_robo', '3', '0', '0', '1');
INSERT INTO catalog_items VALUES ('604004', '120', '2785080', 'bb_dragon', '8', '0', '0', '1');
INSERT INTO catalog_items VALUES ('604005', '120', '2785081', 'bb_ducklight', '3', '0', '0', '1');
INSERT INTO catalog_items VALUES ('604006', '120', '2785082', 'bb_caterhead', '3', '0', '0', '1');
INSERT INTO catalog_items VALUES ('604007', '120', '2785083', 'bb_cargobox', '4', '0', '0', '1');
INSERT INTO catalog_items VALUES ('604008', '120', '2785084', 'bb_gate_g', '3', '0', '0', '1');
INSERT INTO catalog_items VALUES ('604009', '120', '2785085', 'bb_crchair3', '4', '0', '0', '1');
INSERT INTO catalog_items VALUES ('604011', '120', '2785087', 'bb_crchair', '3', '0', '0', '1');
INSERT INTO catalog_items VALUES ('604012', '120', '2785088', 'bb_crchair2', '3', '0', '0', '1');
INSERT INTO catalog_items VALUES ('2458', '152', '20329', 'fball_ball5', '1', '0', '0', '1');
INSERT INTO catalog_items VALUES ('2457', '152', '20328', 'fball_ball4', '1', '0', '0', '1');
INSERT INTO catalog_items VALUES ('2456', '152', '20326', 'fball_ball2', '1', '0', '0', '1');
INSERT INTO catalog_items VALUES ('2455', '152', '20325', 'fball_ball', '1', '0', '0', '1');
INSERT INTO catalog_items VALUES ('600041', '170', '2785116', 'hween10_fogwall', '10', '0', '0', '1');
INSERT INTO catalog_items VALUES ('600040', '170', '2785115', 'hween10_zombie', '10', '0', '0', '1');
INSERT INTO catalog_items VALUES ('99008', '500', '99008', 'qt_xm10_xmduck', '10', '0', '0', '1');
INSERT INTO catalog_items VALUES ('99006', '500', '99006', 'qt_xm10_bench', '10', '0', '0', '1');
INSERT INTO catalog_items VALUES ('99007', '500', '99007', 'qt_xm10_icelupin', '10', '0', '0', '1');
INSERT INTO catalog_items VALUES ('5683', '20', '2785096', 'bb_patch1', '5', '0', '0', '100');
INSERT INTO catalog_items VALUES ('3568276', '142', '3568276', 'nest_lion', '3', '0', '0', '1');
INSERT INTO catalog_items VALUES ('3568277', '142', '3568277', 'nest_lion2', '3', '0', '0', '1');
INSERT INTO catalog_items VALUES ('3568278', '142', '3568278', 'nest_rhino', '3', '0', '0', '1');
INSERT INTO catalog_items VALUES ('3568279', '142', '3568279', 'petfood14', '3', '0', '0', '1');
INSERT INTO catalog_items VALUES ('3568280', '142', '3568280', 'petfood15', '3', '0', '0', '1');
INSERT INTO catalog_items VALUES ('5354', '168', '83545', 'a0 pet7', '20', '0', '0', '1');
INSERT INTO catalog_items VALUES ('7457', '167', '84586', 'a0 pet6', '20', '0', '0', '1');
INSERT INTO catalog_items VALUES ('600042', '170', '2785117', 'hween10_bat', '10', '0', '0', '1');
INSERT INTO catalog_items VALUES ('600043', '170', '2785118', 'hween10_card_1', '10', '0', '0', '1');
INSERT INTO catalog_items VALUES ('600044', '170', '2785119', 'hween10_card_2', '10', '0', '0', '1');
INSERT INTO catalog_items VALUES ('600045', '170', '2785120', 'hween10_card_3', '10', '0', '0', '1');
INSERT INTO catalog_items VALUES ('600046', '170', '2785121', 'hween10_card_4', '10', '0', '0', '1');
INSERT INTO catalog_items VALUES ('600047', '170', '2785122', 'hween10_card_5', '10', '0', '0', '1');
INSERT INTO catalog_items VALUES ('600048', '170', '2785123', 'hween10_card_6', '10', '0', '0', '1');
INSERT INTO catalog_items VALUES ('600049', '170', '2785124', 'hween10_chicken', '10', '0', '0', '1');
INSERT INTO catalog_items VALUES ('600050', '170', '2785125', 'hween10_ffly', '10', '0', '0', '1');
INSERT INTO catalog_items VALUES ('600051', '170', '2785126', 'hween10_fog', '10', '0', '0', '1');
INSERT INTO catalog_items VALUES ('600052', '170', '2785127', 'hween10_jar', '10', '0', '0', '1');
INSERT INTO catalog_items VALUES ('600053', '170', '2785128', 'hween10_logs', '10', '0', '0', '1');
INSERT INTO catalog_items VALUES ('600054', '170', '2785129', 'hween10_pond', '10', '0', '0', '1');
INSERT INTO catalog_items VALUES ('600055', '170', '2785130', 'hween10_portch', '10', '0', '0', '1');
INSERT INTO catalog_items VALUES ('600056', '170', '2785131', 'hween10_skullpost', '10', '0', '0', '1');
INSERT INTO catalog_items VALUES ('600057', '170', '2785132', 'hween10_swamp', '10', '0', '0', '1');
INSERT INTO catalog_items VALUES ('600058', '170', '2785133', 'hween10_tarot', '10', '0', '0', '1');
INSERT INTO catalog_items VALUES ('600059', '29', '2785134', 'hween10_tele', '10', '0', '0', '1');
INSERT INTO catalog_items VALUES ('600060', '170', '2785135', 'hween10_throne', '10', '0', '0', '1');
INSERT INTO catalog_items VALUES ('600061', '170', '2785136', 'hween10_tree', '10', '0', '0', '1');
INSERT INTO catalog_items VALUES ('600062', '170', '2785137', 'hween10_voodoo1', '10', '0', '0', '1');
INSERT INTO catalog_items VALUES ('600063', '170', '2785138', 'hween10_voodoo2', '10', '0', '0', '1');
INSERT INTO catalog_items VALUES ('600064', '170', '2785139', 'hween10_voodoo3', '10', '0', '0', '1');
INSERT INTO catalog_items VALUES ('600065', '170', '2785140', 'hween10_wallskull', '10', '0', '0', '1');
INSERT INTO catalog_items VALUES ('3568281', '162', '3568281', 'ads_mtv_tv2', '3', '0', '0', '1');
INSERT INTO catalog_items VALUES ('3568282', '162', '3568282', 'ads_mtv_bigtv2', '3', '0', '0', '1');
INSERT INTO catalog_items VALUES ('604013', '120', '2785096', 'bb_patch1', '2', '0', '0', '1');
INSERT INTO catalog_items VALUES ('604014', '120', '2785106', 'bb_score_r', '3', '0', '0', '1');
INSERT INTO catalog_items VALUES ('604015', '120', '2785078', 'bb_score_b', '3', '0', '0', '1');
INSERT INTO catalog_items VALUES ('604016', '120', '2785086', 'bb_score_g', '3', '0', '0', '1');
INSERT INTO catalog_items VALUES ('604017', '120', '2785089', 'bb_score_y', '3', '0', '0', '1');
INSERT INTO catalog_items VALUES ('600033', '120', '2785109', 'bb_counter', '20', '0', '0', '1');
INSERT INTO catalog_items VALUES ('3568424', '60', '3568405', 'exe_sensor', '3', '0', '0', '1');
INSERT INTO catalog_items VALUES ('3568425', '60', '3568404', 'exe_seccam', '3', '0', '0', '1');
INSERT INTO catalog_items VALUES ('3568426', '60', '3568403', 'exe_wrkdesk', '5', '0', '0', '1');
INSERT INTO catalog_items VALUES ('3568427', '60', '3568402', 'exe_glassdvdr', '5', '0', '0', '1');
INSERT INTO catalog_items VALUES ('3568428', '60', '3568401', 'exe_copier', '5', '0', '0', '1');
INSERT INTO catalog_items VALUES ('99010', '500', '99010', 'qt_xm10_bauble1', '10', '0', '0', '1');
INSERT INTO catalog_items VALUES ('99011', '500', '99011', 'qt_xm10_bauble2', '10', '0', '0', '1');
INSERT INTO catalog_items VALUES ('99012', '500', '99012', 'qt_xm10_bauble3', '10', '0', '0', '1');
INSERT INTO catalog_items VALUES ('99013', '500', '99013', 'qt_xm10_iceplasto', '10', '0', '0', '1');
INSERT INTO catalog_items VALUES ('99014', '500', '99014', 'qt_xm10_ice_fish', '10', '0', '0', '1');
INSERT INTO catalog_items VALUES ('99015', '500', '99015', 'qt_xm10_gnome', '10', '0', '0', '1');
INSERT INTO catalog_items VALUES ('99016', '500', '99016', 'qt_xm10_icesilotable', '10', '0', '0', '1');
INSERT INTO catalog_items VALUES ('99017', '500', '99017', 'qt_xm10_iceteddy', '10', '0', '0', '1');
INSERT INTO catalog_items VALUES ('99018', '500', '99018', 'qt_xm10_elephant', '10', '0', '0', '1');
INSERT INTO catalog_items VALUES ('99019', '500', '99019', 'qt_xm10_iceclubsofa', '10', '0', '0', '1');
INSERT INTO catalog_items VALUES ('99020', '504', '99020', 'es_skating_ice', '10', '0', '0', '1');
INSERT INTO catalog_items VALUES ('99021', '500', '99021', 'es_sidewalk', '10', '0', '0', '1');
INSERT INTO catalog_items VALUES ('99022', '500', '99022', 'es_wpost', '10', '0', '0', '1');
INSERT INTO catalog_items VALUES ('99023', '504', '99023', 'es_tagging', '10', '0', '0', '1');
INSERT INTO catalog_items VALUES ('99024', '500', '99024', 'es_santa', '10', '0', '0', '1');
INSERT INTO catalog_items VALUES ('99025', '500', '99025', 'es_window', '10', '0', '0', '1');
INSERT INTO catalog_items VALUES ('99026', '500', '99026', 'es_bench', '10', '0', '0', '1');
INSERT INTO catalog_items VALUES ('99027', '500', '99027', 'es_fnc_1', '10', '0', '0', '1');
INSERT INTO catalog_items VALUES ('99028', '500', '99028', 'es_fnc_2', '10', '0', '0', '1');
INSERT INTO catalog_items VALUES ('99029', '500', '99029', 'es_fnc_crnr', '10', '0', '0', '1');
INSERT INTO catalog_items VALUES ('99030', '500', '99030', 'es_epictree', '10', '0', '0', '1');
INSERT INTO catalog_items VALUES ('99031', '500', '99031', 'es_icestar_g', '10', '0', '0', '1');
INSERT INTO catalog_items VALUES ('99032', '500', '99032', 'es_icestar_r', '10', '0', '0', '1');
INSERT INTO catalog_items VALUES ('99033', '500', '99033', 'es_icestar_y', '10', '0', '0', '1');
INSERT INTO catalog_items VALUES ('99034', '500', '99034', 'es_icestar', '10', '0', '0', '1');
INSERT INTO catalog_items VALUES ('99035', '504', '99035', 'es_puck', '10', '0', '0', '1');
INSERT INTO catalog_items VALUES ('99036', '500', '99036', 'es_roaster', '10', '0', '0', '1');
INSERT INTO catalog_items VALUES ('99037', '500', '99037', 'es_lmppst', '10', '0', '0', '1');
INSERT INTO catalog_items VALUES ('99038', '500', '99038', 'es_statue', '10', '0', '0', '1');
INSERT INTO catalog_items VALUES ('99904', '501', '99904', 'year2011_waver_b', '25', '0', '0', '1');
INSERT INTO catalog_items VALUES ('99905', '501', '99905', 'year2011_waver_g', '25', '0', '0', '1');
INSERT INTO catalog_items VALUES ('99906', '501', '99906', 'year2011_waver_r', '25', '0', '0', '1');
INSERT INTO catalog_items VALUES ('99907', '501', '99907', 'year2011_waver_y', '25', '0', '0', '1');
INSERT INTO catalog_items VALUES ('99908', '501', '99908', 'prizetrophy_2011_y', '25', '0', '0', '1');
INSERT INTO catalog_items VALUES ('99909', '501', '99909', 'prizetrophy_2011_b', '25', '0', '0', '1');
INSERT INTO catalog_items VALUES ('99910', '501', '99910', 'prizetrophy_2011_r', '25', '0', '0', '1');
INSERT INTO catalog_items VALUES ('99911', '501', '99911', 'prizetrophy_2011_p', '25', '0', '0', '1');
INSERT INTO catalog_items VALUES ('99912', '501', '99912', 'prizetrophy_2011_g', '25', '0', '0', '1');
INSERT INTO catalog_items VALUES ('99913', '501', '99913', 'prizetrophy_2011_w', '25', '0', '0', '1');
INSERT INTO catalog_items VALUES ('99914', '501', '99914', 'year2011', '25', '0', '0', '1');
INSERT INTO catalog_items VALUES ('99039', '504', '99020', 'es_skating_ice', '220', '0', '0', '24');

-- ----------------------------
-- Table structure for `catalog_marketplace_offers`
-- ----------------------------
DROP TABLE IF EXISTS `catalog_marketplace_offers`;
CREATE TABLE `catalog_marketplace_offers` (
  `offer_id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `item_id` int(10) unsigned NOT NULL,
  `user_id` int(10) unsigned NOT NULL,
  `asking_price` int(11) NOT NULL,
  `total_price` int(11) NOT NULL DEFAULT '0',
  `public_name` text NOT NULL,
  `sprite_id` int(11) NOT NULL,
  `item_type` enum('1','2') NOT NULL DEFAULT '1',
  `timestamp` double NOT NULL,
  `state` enum('1','2') NOT NULL DEFAULT '1',
  `extra_data` text NOT NULL,
  PRIMARY KEY (`offer_id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of catalog_marketplace_offers
-- ----------------------------

-- ----------------------------
-- Table structure for `catalog_pages`
-- ----------------------------
DROP TABLE IF EXISTS `catalog_pages`;
CREATE TABLE `catalog_pages` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `parent_id` int(11) NOT NULL DEFAULT '-1',
  `caption` varchar(100) NOT NULL,
  `icon_color` int(11) NOT NULL DEFAULT '1',
  `icon_image` int(11) NOT NULL DEFAULT '1',
  `visible` enum('0','1') NOT NULL DEFAULT '1',
  `enabled` enum('0','1') NOT NULL DEFAULT '1',
  `min_rank` int(10) unsigned NOT NULL DEFAULT '1',
  `club_only` enum('0','1') NOT NULL DEFAULT '0',
  `coming_soon` enum('0','1') NOT NULL DEFAULT '0',
  `order_num` int(11) NOT NULL,
  `page_layout` enum('default_3x3','frontpage','spaces','recycler','recycler_info','recycler_prizes','trophies','plasto','marketplace','marketplace_own_items','pets','pets2','club_buy','club_gifts') NOT NULL DEFAULT 'default_3x3',
  `page_headline` text NOT NULL,
  `page_teaser` text NOT NULL,
  `page_special` text NOT NULL,
  `page_text1` text NOT NULL,
  `page_text2` text NOT NULL,
  `page_text_details` text NOT NULL,
  `page_text_teaser` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=506 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of catalog_pages
-- ----------------------------
INSERT INTO catalog_pages VALUES ('1', '-1', 'Front Page', '1', '1', '1', '1', '1', '0', '0', '1', 'frontpage', 'catalog_frontpage_headline2_en', 'ts_mythbunnies_v1', '', 'We\'re updating the catalogue:)', 'How to get Habboon CreditsThere are lots of ways to earn Habboon Credits, here are just a few ways;\r\nEvery 15 minutes gain 75 credits                             Unlock achievements for credits                               Verify your email for 2500 credits                                 Purchase VIP for double credits!', 'Redeem a voucher code here:', '');
INSERT INTO catalog_pages VALUES ('3', '-1', 'Furni Shop', '3', '2', '1', '0', '1', '0', '0', '4', 'default_3x3', 'catalog_frontpage_headline2_en', '', '', '', '', '', '');
INSERT INTO catalog_pages VALUES ('4', '-1', 'Pixel Shop', '5', '5', '1', '0', '5', '0', '0', '6', 'default_3x3', 'catalog_frontpage_headline2_en', '', '', '', '', '', '');
INSERT INTO catalog_pages VALUES ('5', '-1', 'Buy Habbo Club', '7', '75', '1', '0', '1', '0', '0', '3', 'default_3x3', 'catalog_frontpage_headline2_en', '', '', '', '', '', '');
INSERT INTO catalog_pages VALUES ('7', '5', 'Buy Club', '1', '75', '1', '1', '1', '0', '0', '1', 'default_3x3', 'hc2_clubtitle', 'catalog_vip_teaser', '', 'Habbo club es mas privilejios y ya', '', '', '');
INSERT INTO catalog_pages VALUES ('8', '5', 'Furni', '1', '75', '1', '1', '1', '0', '0', '2', 'default_3x3', 'catalog_club_headline1', 'catalog_hc_teaser', '', 'We\'ve got all that exclusive club furniture available for you right here .. but for an exclusive price.', '', '', '');
INSERT INTO catalog_pages VALUES ('9', '-1', 'Ecotron', '3', '7', '1', '0', '1', '0', '0', '7', 'default_3x3', 'catalog_frontpage_headline2_en', '', '', '', '', '', '');
INSERT INTO catalog_pages VALUES ('10', '9', 'Ecotron', '1', '7', '1', '1', '1', '0', '0', '1', 'recycler', 'catalog_recycler_headline3', 'ctlg_ecotron_image', '', 'Become an Eco-warrior', 'Recycle your worthless stuff and be rewarded with a random prize. Check out the prizes and the instructions for recycling.', 'Drag 5 items to the boxes below and click recycle!', '');
INSERT INTO catalog_pages VALUES ('11', '9', 'Rewards', '1', '26', '1', '1', '1', '0', '0', '3', 'recycler_prizes', 'catalog_recycler_headline3', '', '', 'What are the prizes? Ecotron box may contain one of these:', '', '', '');
INSERT INTO catalog_pages VALUES ('12', '9', 'Instructions', '1', '42', '1', '1', '1', '0', '0', '2', 'recycler_info', 'catalog_recycler_headline3', 'ctlg_ecotron_box', '', 'The Ecotron is a furni recycler. Get rid of old furni... what will you get in return? It\'s a surprise! Become a Habbo eco-warrior. No refunds!', 'How to use the Ecotron?', '1. Just drag 5 items from your hand to the Ecotron. One item / square. Recyclable items are marked in your inventory with an image. When you have 5 items in the boxes, click the \"Recycle\" button. You can now find the Ecotron prize box from your hand.\r\n\r\n2. Click the box to see its tag. Open the box, or trade it unopened. The timer shows you how long you have to wait before you can recycle more items. Check the prizes before you recycle- don\'t be surprised by the surprise!', '');
INSERT INTO catalog_pages VALUES ('13', '-1', 'Exchange', '11', '6', '1', '1', '1', '0', '0', '9', 'default_3x3', 'catalog_bank_headline1', 'catalog_bank_teaser', 'catalog_special_txtbg1', 'You can exchange your Uber credits here for Exchange furniture, which you can use in a trade or simply exchange for actual credits.', '', 'Click on an item to see more details.', 'Gold! Glorious Gold!');
INSERT INTO catalog_pages VALUES ('14', '-1', 'Pets Shop', '2', '8', '1', '0', '1', '0', '0', '8', 'default_3x3', 'catalog_frontpage_headline2_en', '', '', '', '', '', '');
INSERT INTO catalog_pages VALUES ('15', '3', 'Spaces', '1', '55', '1', '1', '1', '0', '0', '2', 'spaces', 'catalog_spaces_headline1', '', '', 'Floors, wallpapers and landscapes - get a groovy combination for your room! Use our sample room below to try before you buy! Select your favourite designs and colours and simply click Buy!', '', '', '');
INSERT INTO catalog_pages VALUES ('16', '-1', 'Limited Edition', '1', '26', '1', '1', '1', '0', '0', '2', 'default_3x3', 'catalog_limited_headline1', 'catalog_limited_teaser', '', 'Here for one week only, it\'s the speakers stand! Grab it while you can!', '', 'Click on an item for more information.', '');
INSERT INTO catalog_pages VALUES ('24', '3', 'Windows', '0', '63', '1', '1', '1', '0', '0', '3', 'default_3x3', 'ctlg_windows_headline1_en', 'ctlg_windows_teaser1_en', 'catalog_special_txtbg2', 'Let some light in! Our windows come in many unique styles to give an exciting look to your room. Buy landscapes to go with your windows from the \'Spaces\' page!', '', 'Click on an item for more information.', 'Ooh, new view!');
INSERT INTO catalog_pages VALUES ('26', '3', 'Moodlights', '0', '40', '1', '1', '1', '0', '0', '4', 'default_3x3', 'catalog_dimmers_header_en', 'dimmers_teaser', '', 'Our range of moodlights allow you to control the atmosphere and transform your room in just a click. What will your room look like? Click the switch and find out now!', '', 'Click on an item for more information.', '');
INSERT INTO catalog_pages VALUES ('27', '3', 'Christmas', '1', '64', '1', '1', '1', '0', '0', '47', 'default_3x3', 'catalog_xmas_headline1', 'xmas2009_catalogue', 'catalog_special_txtbg2', 'Get yourself into the Christmas spirit with our selection of festive furni! From baubles to Reindeer poo, we\'ve got it all!', '', 'Click on an item for more information.', '\'tis the season!');
INSERT INTO catalog_pages VALUES ('28', '3', 'Artic', '0', '13', '1', '1', '1', '0', '0', '35', 'default_3x3', 'catalog_arc_header1_en', 'catalog_arc_teaser1_en', '', 'Stay cool (or warm with out campfire!) with and create your own Winter Wonderland or Humble Homeland for your Penguins.', '', 'Click on an item for more information.', '');
INSERT INTO catalog_pages VALUES ('29', '3', 'Teleporters', '0', '58', '1', '1', '1', '0', '0', '12', 'default_3x3', 'catalog_doors_headline1', 'catalog_door_a', 'catalog_special_txtbg1', 'Take your room to a whole new level with our range of space age teleporters! Just buy a pair, put one in each room and voila! You\'ll have two linked rooms!', '', 'Click on an item for more information.', 'Take your room to the next level!');
INSERT INTO catalog_pages VALUES ('30', '3', 'Mode', '0', '39', '1', '1', '1', '0', '0', '5', 'default_3x3', 'catalog_mode_headline1', 'catalog_mode_teaser1', 'catalog_special_txtbg2', 'Steely, grey industrial standard metal with a sleek design. The perfect range for a streetwise city dweller.', '', 'Click on an item for more information.', 'So shiny and new..');
INSERT INTO catalog_pages VALUES ('31', '3', 'Candy', '0', '19', '1', '1', '1', '0', '0', '6', 'default_3x3', 'catalog_candy_headline1', 'catalog_candy_teaser1', 'catalog_special_txtbg2', 'A bit more feminine than \'Mode\', this will add a bit of glamour and glitz to your rooms. Lacking a few items? Head on over to the \'Mode\' catagory!', '', 'Click on an item for more information.', 'lol I killed a pink bear for this rug!');
INSERT INTO catalog_pages VALUES ('32', '3', 'Pura', '0', '48', '1', '1', '1', '0', '0', '9', 'default_3x3', 'catalog_pura_headline1', 'catalog_pura_teaser1', 'catalog_special_txtbg2', 'The clenest, freshest range. You can almost hear it breath cool and tranquility within your room. Use it to create a haven away from the hetic lifestyle of UberHotel.', '', 'Click on an item for more information.', 'So many colors!');
INSERT INTO catalog_pages VALUES ('33', '3', 'Area', '0', '14', '1', '1', '1', '0', '0', '8', 'default_3x3', 'catalog_area_headline1', 'catalog_area_teaser1', 'catalog_special_txtbg2', 'A chunky and sofisticated line for the down-to-earth, studious Uber. It\'s simplicty is beautful and will add a welcoming charm to every room.', '', 'Click on an item for more information.', 'Beautiful in it\'s simplicity! ');
INSERT INTO catalog_pages VALUES ('34', '3', 'Country', '0', '21', '1', '1', '1', '0', '0', '31', 'default_3x3', 'country_header1_en_001', 'country_teaser1', 'catalog_special_txtbg2', 'Lets leave the busy city streets and head over to the wide abyss of golden whear, emerald fields and home grown, organic vegetables. Everything you need to create a farm!', '', 'Click on an item for more information.', 'Who\'d be a crow, eh?');
INSERT INTO catalog_pages VALUES ('35', '3', 'Lodge', '0', '37', '1', '1', '1', '0', '0', '7', 'default_3x3', 'catalog_lodge_headline1', 'catalog_lodge_teaser1', 'catalog_special_txtbg2', 'For that splendid ski-lodge effect with an open fire and whisky on the sidebar. This range is for those who appreicate the true beauty of solid wood.', '', 'Click on an item for more information.', 'I liek wood!');
INSERT INTO catalog_pages VALUES ('36', '3', 'Plastic', '0', '46', '1', '1', '1', '0', '0', '11', 'plasto', 'catalog_plasto_headline1', '', '', 'Throw on an afro and grab a disco ball! Feel that retro, 1970s vibe? You soon will with this colourful, plastic range! Choose a colour to suit your mood and off you go!', '', 'Click on an item for more information.', '');
INSERT INTO catalog_pages VALUES ('38', '3', 'Bathroom', '0', '17', '1', '1', '1', '0', '0', '14', 'default_3x3', 'catalog_bath_headline1', 'catalog_bath_teaser1', 'catalog_special_txtbg2', 'Lets face it.. you can\'t live without your bathroom. Give yours guests somewhere to freshen up with our cheeful bathroom collection!', '', 'Click on an item for more information.', 'Every Uber needs one!');
INSERT INTO catalog_pages VALUES ('39', '3', 'Plants', '0', '45', '1', '1', '1', '0', '0', '15', 'default_3x3', 'catalog_plants_headline1', 'catalog_plants_teaser1', 'catalog_special_txtbg2', 'Every room needs some greenery, dear! Not only do they enhance the air quality, they cheer up a room to make it simply splendid! And what better gift for a friend than an elegant rose..', '', 'Click on an item for more information.', 'I\'m a tree!');
INSERT INTO catalog_pages VALUES ('40', '3', 'Rugs', '0', '52', '1', '1', '1', '0', '0', '16', 'default_3x3', 'catalog_rugs_headline1', 'catalog_posters_teaser1', 'catalog_special_txtbg2', 'Rugs for all occasions, white for weddings, black for funerals and everything in between! All rugs and non-slip and machine washable. Take your pick!', '', 'Click on an item for more information.', 'This\'ll be perfect in my room!');
INSERT INTO catalog_pages VALUES ('41', '3', 'Gallery', '0', '47', '1', '1', '1', '0', '0', '17', 'default_3x3', 'catalog_gallery_headline1', 'catalog_posters_teaser1', 'catalog_special_txtbg2', 'Adorn your walls with posters, art, plaques and wall hangings. This gallery is bursting with items to suit all tastes, traditional and modern!', '', 'Click on an item for more information.', 'Brighten up your walls!');
INSERT INTO catalog_pages VALUES ('42', '3', 'Trophies', '0', '60', '1', '1', '1', '0', '0', '20', 'trophies', 'catalog_trophies_headline1', '', '', 'Everyones a winner with Habboon trophies! Now you can reward all your friends with our pre-polished array of trohpies. In bronze, silver and gold. \r\nFirst choose your trophy model, then the metal and carefully type your inscription. Don\'t worry, we\'ll engrave it all with your name and the date.', '', 'Click on an item for more information.', '');
INSERT INTO catalog_pages VALUES ('43', '3', 'Accessories', '0', '11', '1', '1', '1', '0', '0', '19', 'default_3x3', 'catalog_extra_headline1', 'catalog_extra_teaser1', 'catalog_special_txtbg2', 'However you like to place your essentials, its the finishing touches that really make a room and express your true personality. Don\'t forget, like anything else, you can move them all about to suit your mood!', '', 'Click on an item for more information.', 'I love my rabbit...');
INSERT INTO catalog_pages VALUES ('45', '4', 'Rentals', '0', '44', '1', '1', '1', '0', '0', '23', 'default_3x3', 'catalog_pixelrent_headline1_en', 'catalog_pxl_teaser3_en', '', 'Hire some cool effects to add an explosive touch to your room. From bubbles to firestarters, you can enhance your room dramatically!', '', 'Click on an item for more information.', '');
INSERT INTO catalog_pages VALUES ('58', '3', 'Lost City', '0', '18', '1', '1', '1', '0', '0', '26', 'default_3x3', 'catalog_lc_headline2_en', '', '', 'Under the seaaaaaaaaa, oh, Under the seaaaaaa! What will your underwater world look like? We have it all here, crabs, HIV and genital warts!', '', 'Click on an item for more information.', '');
INSERT INTO catalog_pages VALUES ('59', '3', 'Easter', '0', '25', '1', '1', '1', '0', '0', '48', 'default_3x3', 'catalog_easter_headline1', '', '', 'Little birdies hatching from their eggs, pretty, dainty flowers blooming and cute rabbits bouncy in Spring meadows.. FUCK IT ALL! LETS BUY FURNI!', '', 'Click on an item for more information.', '');
INSERT INTO catalog_pages VALUES ('60', '3', 'Executive', '0', '27', '1', '1', '1', '0', '0', '38', 'default_3x3', 'catalog_exe_headline1_en', '', '', 'For the ultimate business man, the Executive range with its leather seats and Italian coffee is a dream! How about you try the easy lifestyle?', '', 'Click on an item for more information.', '');
INSERT INTO catalog_pages VALUES ('61', '3', 'Crystal', '0', '29', '1', '1', '1', '0', '0', '40', 'default_3x3', 'catalog_glass_headline1', '', '', 'You can really open up a space with this stylish glass furniture, just don\'t walk into it!', '', 'Click on an item for more information.', '');
INSERT INTO catalog_pages VALUES ('62', '3', 'Gothic', '0', '30', '1', '1', '1', '0', '0', '37', 'default_3x3', 'catalog_gothic_headline1', '', '', 'As the church bells ring out midnight, you walk through your cobbled hall lit by candles, throw yourself into your medieval throne and paint your nails black. This is what we imagined when we ordered this range!', '', 'Click on an item for more information.', '');
INSERT INTO catalog_pages VALUES ('63', '3', 'Sports', '0', '56', '1', '1', '1', '0', '0', '43', 'default_3x3', 'catalog_frontpage_headline2_en', '', '', 'Sport contains all those vital Olympic pieces from running tracks to basketball courts! 3 2 1 GO!', '', 'Click on an item for more information.', '');
INSERT INTO catalog_pages VALUES ('64', '3', 'Grunge', '0', '32', '1', '1', '1', '0', '0', '28', 'default_3x3', 'catalog_grunge_headline1', '', '', 'Sleeping rough? Make the streets a bit more bearable with our collection of homeless furni, Grunge!', '', 'Click on an item for more information.', '');
INSERT INTO catalog_pages VALUES ('56', '3', 'Alhambra', '0', '12', '1', '1', '1', '0', '0', '22', 'default_3x3', 'catalog_alh_headline1_en', '', '', 'For the cold Arabian nights and hot Arabian days, you\'ll need a palace.. and we have just what you need! Green blossom print should cover it just fine!', '', 'Click on an item for more information.', '');
INSERT INTO catalog_pages VALUES ('57', '3', 'Asian', '0', '15', '1', '1', '1', '0', '0', '23', 'default_3x3', 'catalog_asian_headline1', '', '', 'Ting tong! Ching chong? Ting chong ting, ping ping! I mean uh.. with our authentic Chinese furniture, you can make a beautiful oriental room!', '', 'Click on an item for more information.', '');
INSERT INTO catalog_pages VALUES ('55', '3', 'Iced', '0', '13', '1', '1', '1', '0', '0', '10', 'default_3x3', 'catalog_iced_headline1', '', '', 'The Iced range, squishy, soft and most definitely cool. Whatever your needs, this stylish range should  cover it!', '', 'Click on an item for more information.', '');
INSERT INTO catalog_pages VALUES ('65', '3', 'HabboWood', '0', '33', '1', '1', '1', '0', '0', '39', 'default_3x3', 'catalog_frontpage_headline2_en', '', '', 'No flash photography, darling! This range is only for the VIP Hollywood actors!', '', 'Click on an item for more information.', '');
INSERT INTO catalog_pages VALUES ('66', '3', 'Halloween', '0', '34', '1', '1', '1', '0', '0', '50', 'default_3x3', 'catalog_halloween_headline1', '', '', 'WooOOOOoooOOoo! Spooky! Don\'t wanna be left with this range at night.. who knows what would happen!', '', 'Click on an item for more information.', '');
INSERT INTO catalog_pages VALUES ('67', '3', 'Japan', '0', '36', '1', '1', '1', '0', '0', '24', 'default_3x3', 'catalog_jap_headline2_en', '', '', 'We have sushi, tatami and katana\'s! I have no idea what the difference is, but I sure know its Japanese! Fulfil your fantasies and buy some today!', '', 'Click on an item for more information.', '');
INSERT INTO catalog_pages VALUES ('68', '3', 'Lost Tribe', '0', '38', '1', '1', '1', '0', '0', '27', 'default_3x3', 'catalog_frontpage_headline2_en', '', '', 'Start your own tribal village with our ancient furniture, all carved from hard wearing stone. NOTE: Lava is hot, get an adult to help you.', '', 'Click on an item for more information.', '');
INSERT INTO catalog_pages VALUES ('69', '3', 'Neon', '0', '41', '1', '1', '1', '0', '0', '42', 'default_3x3', 'catalog_neon_header1_en', '', '', 'New years eve, birthdays and every other day of the year, there\'s always an exscuse for a party! So, why don\'t you buy some Neon furni!?', '', 'Click on an item for more information.', '');
INSERT INTO catalog_pages VALUES ('71', '3', 'Relax', '0', '49', '1', '1', '1', '0', '0', '41', 'default_3x3', 'rela_header_en', '', '', 'Relax after a busy day in the Welcome Lounge. Light a few candles, and chill out with a good read in a wicker chair. We understand the needs of an Uber with a hectic lifestyle!', '', 'Click on an item for more information.', '');
INSERT INTO catalog_pages VALUES ('72', '3', 'Romantic', '0', '50', '1', '1', '1', '0', '0', '45', 'default_3x3', 'catalog_romantique_headline1', '', '', 'Found in a French barn, this sweet but sexily romantic range caters to every ladies needs. Just going to powder my nose!', '', 'Click on an item for more information.', '');
INSERT INTO catalog_pages VALUES ('73', '3', 'Science Fiction', '0', '53', '1', '1', '1', '0', '0', '28', 'default_3x3', 'sf_header_en', '', '', 'Blipblop blip blip blip.. Oooh.. what\'s this button do?.. You can find out exactly what it does with our new Scifi range, batteries included!', '', 'Click on an item for more information.', '');
INSERT INTO catalog_pages VALUES ('74', '3', 'Shalimar', '0', '54', '1', '1', '1', '0', '0', '44', 'default_3x3', 'catalog_shal_header1_en', '', '', 'Everyone loves Bollywood! Want some free credits? Tell Oscar you successfully read the Shalimar page! Tell no one else you found this Easter egg. Watch out for rose petals!', '', 'Click on an item for more information.', '');
INSERT INTO catalog_pages VALUES ('75', '3', 'Summer', '0', '57', '1', '1', '1', '0', '0', '32', 'default_3x3', 'catalog_frontpage_headline2_en', '', '', 'Phwoar! Start up the barbie! This range has everything you need for the perfect summer garden!', '', 'Click on an item for more information.', '');
INSERT INTO catalog_pages VALUES ('76', '3', 'Love', '0', '62', '1', '1', '1', '0', '0', '46', 'default_3x3', 'catalog_love_headline1', '', '', 'Love is in the air once again! Buy your sweetheart a rose or whisper sweet nothings in their ear on a love sofa. Can you feel it? <3', '', 'Click on an item for more information.', '');
INSERT INTO catalog_pages VALUES ('77', '3', 'Greek', '0', '31', '1', '1', '1', '0', '0', '25', 'default_3x3', 'catalog_frontpage_headline2_en', '', '', 'Be transported back to ancient Greece with a couple of thousand pounds and British Airways. Until then, build your own panthenon with our realist Greek range!', '', 'Click on an item for more information.', '');
INSERT INTO catalog_pages VALUES ('85', '91', 'Collectables', '0', '71', '1', '1', '4', '0', '0', '1', 'default_3x3', 'catalog_pixeldeals_headline1_en', 'catalog_pxl_teaser2_en', '', 'The Pixel Collectables are the ultimate collectors items, requiring a mammoth 2000 pixels and credits to buy! If you collect all the pieces and manage to put them together in certain ways, you\'ll receive a special effect!', '', 'Click on an item for more information.', '');
INSERT INTO catalog_pages VALUES ('88', '3', 'Virus', '0', '42', '1', '1', '1', '0', '0', '36', 'default_3x3', 'catalog_vir_header1_en', '', '', 'All of Uber\'s emergency pandemic supplies are kept here! They need a bit of a clean after the exploding puss disease but.. they\'ll do fine!', '', 'Click on an item for more information.', '');
INSERT INTO catalog_pages VALUES ('91', '-1', 'Staff', '6', '28', '1', '0', '6', '0', '0', '12', 'default_3x3', 'catalog_frontpage_headline2_en', '', '', '', '', '', '');
INSERT INTO catalog_pages VALUES ('93', '91', 'Trophies', '1', '60', '1', '1', '4', '0', '0', '1', 'trophies', 'catalog_trophies_headline1', '', '', 'This page contains special trophies available for staff to give as prizes. STAFF CAUGHT GIVING OUT THESE WITH NO REASON WILL BE DEMOTED.', '', 'Click in this grey box and type your inscription *carefully* - it\'s permanent!', '');
INSERT INTO catalog_pages VALUES ('94', '91', 'Rares', '1', '10', '1', '1', '4', '0', '0', '2', 'default_3x3', 'catalog_rares_headline1', '', '', 'This page contains special rares available for staff. STAFF CAUGHT GIVING OUT THESE WITH NO REASON WILL BE DEMOTED.', '', 'Click on an item for more information.', '');
INSERT INTO catalog_pages VALUES ('95', '91', 'Promo', '1', '11', '1', '1', '6', '0', '0', '3', 'default_3x3', 'catalog_rares_headline1', '', '', 'This page contains special promotional items available for staff. STAFF CAUGHT GIVING OUT THESE WITH NO REASON WILL BE DEMOTED.', '', 'Click on an item for more information.', '');
INSERT INTO catalog_pages VALUES ('105', '91', 'Rares', '0', '69', '1', '1', '4', '0', '0', '57', 'default_3x3', 'catalog_rares_headline1', '', '', 'On this page, we have some lovely rares for you! We\'ve kept a few behind for competition and event prizes!', '', 'Click on an item for more information.', '');
INSERT INTO catalog_pages VALUES ('103', '3', 'Diner', '0', '51', '1', '1', '1', '0', '0', '30', 'default_3x3', 'catalog_frontpage_headline2_en', '', '', 'Originally from the 50\'s this furni has been refurbished and put right into the catalogue! Use this with the Kitchen range for ultimate diner experience!', '', 'Click on an item for more information.', '');
INSERT INTO catalog_pages VALUES ('112', '3', 'New moon', '0', '64', '1', '1', '1', '0', '0', '51', 'default_3x3', 'catalog_frontpage_headline2_en', '', '', 'I\'ve never read the book, all I know is it has vampires playing basket ball and some heart throb called Edward Cullen, but the furni looks good!', '', 'Click on an item for more information.', '');
INSERT INTO catalog_pages VALUES ('123', '4', 'Hello', '0', '35', '1', '1', '1', '0', '0', '24', 'default_3x3', 'catalog_hello_header1_en', 'catalog_hello_teaser1_en', '', 'Hello Furni is available with Pixels and is perfect if you are decorating your room for the very first time. The Furni is yours to keep and therefore cannot be traded.', '', 'Click on an item for more information.', '');
INSERT INTO catalog_pages VALUES ('125', '4', 'Special Effects', '0', '61', '1', '1', '1', '0', '0', '25', 'default_3x3', 'catalog_pixeleffects_headline1_en', 'catalog_pxl_teaser1_en', '', 'Tune your character with cool effects that fit the occasion. Ride the hoverboard and spit on the mic. Effects can be activated from the menu, by clicking on your avatar.', '', 'Click on an item for more information.', '');
INSERT INTO catalog_pages VALUES ('126', '3', 'Tiki', '0', '59', '1', '1', '1', '0', '0', '33', 'default_3x3', 'catalog_tiki_header1_en', '', '', 'Imagine in the scene.. lost on a desert island when you stumble across a small local tribe.. now you can with our Tiki range!', '', 'Click on an item for more information.', '');
INSERT INTO catalog_pages VALUES ('128', '3', 'Urban', '0', '26', '1', '1', '1', '0', '0', '21', 'default_3x3', 'urban_header_en', '', '', 'New York City styled furni range, Urban is perfect for any street, alleyway or road. Rubbish bins, street lights and benches, all the Urban furniture you need!', '', 'Click on an item for more information.', '');
INSERT INTO catalog_pages VALUES ('129', '4', 'Automobile', '0', '16', '1', '1', '1', '0', '0', '26', 'default_3x3', 'catalog_automobile_header1_en', 'catalog_automobile_teaser1_en', '', 'Every Uber needs a car effect! Not only do they bring a bit of the outside inside, they also enhance the air quality! And what better gift for a friend than a beautiful traffic sign or elegant pile of tires...', '', 'Click on an item for more information.', '');
INSERT INTO catalog_pages VALUES ('130', '3', 'Nature', '0', '21', '1', '1', '1', '0', '0', '34', 'default_3x3', '', '', '', 'Go green with our environmentally friendly Environment range! This selection of furni is perfect for a beautiful, relaxing garden.', '', 'Click on an item for more information.', '');
INSERT INTO catalog_pages VALUES ('134', '91', 'System', '0', '1', '1', '1', '7', '0', '0', '4', 'default_3x3', 'catalog_frontpage_headline2_en', '', '', '', '', 'Click on an item for more information.', '');
INSERT INTO catalog_pages VALUES ('137', '3', 'Orgie', '51', '1', '1', '1', '1', '0', '0', '55', 'default_3x3', 'catalog_frontpage_headline2_en', '', '', 'The latest range from Ann Summers, the Orgie line. Made of soft, wipe clean plastic, its perfect for any three, four or fivesome!', '', 'Click on an item for more information.', '');
INSERT INTO catalog_pages VALUES ('136', '3', 'Bling', '0', '42', '1', '1', '1', '0', '0', '52', 'default_3x3', 'catalog_frontpage_headline2_en', '', '', 'Bling, Bling! Flash, Flash! Want to have that real celebrity lifestyle? Well, go somewhere else, all we have here is a tacky range of furni.', '', 'Click on an item for more information.', '');
INSERT INTO catalog_pages VALUES ('139', '14', 'Pets Info', '0', '42', '1', '1', '1', '0', '0', '8', 'pets2', 'catalog_pet_headline1', 'ctlg_pet_note', '', 'Pets are inhabitants of uberHotel too, so each pet owner needs to know a bit about them. Look after your pet by looking through our key points below.', '', '', '- You cannot trade or give away pets. Once you purchase them, they will be yours forever.\r\n- You can own as many as you want, but you can have no more than 5 pets per room.\r\n- You can take pets with you to other rooms, should the room owner allow you to do so.\r\n- Your pet needs to be trained before it\'ll listen to your commands. By training your pets, you can gain some awesome achievements as well.');
INSERT INTO catalog_pages VALUES ('141', '14', 'Pigs', '0', '67', '1', '1', '1', '0', '0', '1', 'pets', 'catalog_pet_headline1', '', '', 'These little scamps were destined for the dining table until we struck a deal with a local farmer to rescue their cute pigtails! Adopt your little piglet today, all you need now is a name.', '', 'Give a name:Pick a color:Pick a race:', '');
INSERT INTO catalog_pages VALUES ('142', '14', 'Pet Accessories', '0', '43', '1', '1', '1', '0', '0', '7', 'default_3x3', 'catalog_pet_headline1', 'ctlg_pet_teaser1', 'catalog_special_txtbg2', 'This page has everything you need to give your pet the happy life it deserves. We\'ve got a huge selection!', '', 'Click on an item for more information.', 'Keep \'em happy!');
INSERT INTO catalog_pages VALUES ('143', '3', 'Flower Power', '0', '73', '1', '1', '1', '0', '0', '53', 'default_3x3', 'flowerpower_header_en', '', '', 'Woah! Far out man... let the petals take control. Lets collaborate on a hippy hideout and plant some seeds! Lucy in the sky with diamonds style eyy?!', '', 'Click on an item for more information.', '');
INSERT INTO catalog_pages VALUES ('144', '3', 'Runway', '0', '74', '1', '1', '1', '0', '0', '54', 'default_3x3', 'runway_header_en', '', '', 'Spice up your salon, hair parlour or boutique with our stylish yet practical range! From sewing machines to comfy seating, we\'ve got the perfect option for you.', '', 'Click on an item for more information.', '');
INSERT INTO catalog_pages VALUES ('145', '3', 'Wedding', '0', '10', '1', '1', '1', '0', '0', '56', 'default_3x3', 'catalog_frontpage_headline2_en', '', '', 'Quien es el afortunado de casarse?', '', 'Click on an item for more information.', '');
INSERT INTO catalog_pages VALUES ('147', '14', 'Terriers', '0', '66', '1', '1', '1', '0', '0', '2', 'pets', 'catalog_pet_headline1', '', '', 'Good things come in small packages and Habbo\'s Terriers are no exception!', '', 'Give a name:Pick a color:Pick a race:', '');
INSERT INTO catalog_pages VALUES ('148', '14', 'Bears', '0', '68', '1', '1', '1', '0', '0', '3', 'pets', 'catalog_pet_headline1', '', '', 'A large, heavy, mammal that walks on the soles of its feet, with thick fur and a very short tail. Fall in love with our adorable range of Bears that include the Grizzly and Polar varieties!', '', 'Give a name:Pick a color:Pick a race:', '');
INSERT INTO catalog_pages VALUES ('149', '14', 'Cats', '0', '20', '1', '1', '1', '0', '0', '4', 'pets', 'catalog_pet_headline1', '', '', 'Fluff, whiskers, meows and purrs! You\'re about to enter the world of Habbo Cats. These cute little critters make great playmates and will keep you company if you look after them well. Find a new friend from our ever-changing selection.', '', 'Give a name:Pick a color:Pick a race:', '');
INSERT INTO catalog_pages VALUES ('150', '14', 'Dogs', '0', '24', '1', '1', '1', '0', '0', '5', 'pets', 'catalog_pet_headline1', '', '', 'Wet noses, paws, yaps and woofs! You\'re about to enter the world of Habbo Dogs. An adorable and faithful servant awaits you with a wagging tail everytime they see you. Find a new friend from our ever-changing selection.', '', 'Give a name:Pick a color:Pick a race:', '');
INSERT INTO catalog_pages VALUES ('151', '14', 'Crocs', '0', '22', '1', '1', '1', '0', '0', '6', 'pets', 'catalog_pet_headline1', '', '', 'Scaly skin, growls and snaps! You\'re about to enter the world of Habbo Crocs. Security for your room or to scare your friends a trustworthy and surprisingly loving companion can be yours. Find a new friend from our ever-changing selection.', '', 'Give a name:Pick a color:Pick a race:', '');
INSERT INTO catalog_pages VALUES ('157', '3', 'Festivals', '1', '4', '1', '1', '1', '0', '0', '1', 'default_3x3', 'catalog_frontpage_headline2_en', 'country_teaser1', '', 'Ne?n era de los viejos, ?por qu? no disfrutar de las fiestas? Fiesta nos trae todo lo que necesitamos :) ', '', '', '');
INSERT INTO catalog_pages VALUES ('152', '503', 'Football', '0', '56', '1', '1', '1', '0', '0', '2', 'default_3x3', 'WorldCup', 'worldcup_teaser', '', 'Football', '', 'Click on an item for more information.', '');
INSERT INTO catalog_pages VALUES ('102', '3', 'Rollers', '0', '16', '1', '1', '1', '0', '0', '13', 'default_3x3', 'catalog_roller_headline1', '', '', 'Zoooooooom, Zooooooooooooooooooooooooooom! Was it a plane? Was it a bird!? No, it was Roy on a roller! You can use rollers in games, events or even just to  move a queue along.', '', 'Click on an item for more information.', '');
INSERT INTO catalog_pages VALUES ('163', '3', 'CapriSun', '1', '64', '1', '1', '1', '0', '0', '9', 'default_3x3', 'caprisun_header', 'caprisun_teaser', '', 'Mira ese jugo, tal persona quiere tomarlo, ?eh? Hay muchas formas de refrescarse ahora en este verano. Y CapriSun es uno de los mejores refrescos de este verano 2010. ?Pruebalo!', '', '', '');
INSERT INTO catalog_pages VALUES ('185', '3', 'Fish Sources', '1', '18', '1', '1', '1', '0', '0', '3', 'default_3x3', 'catalog_rares_headl ine1', '', '', '?Aqu? tienes una larga lista de rares! ?Aprov?chalos!.', '', 'Clickea en un furni para obtener m?s informaci?n.', '');
INSERT INTO catalog_pages VALUES ('159', '3', 'Prison', '2', '14', '1', '1', '1', '0', '0', '0', 'default_3x3', 'catalog_extra_headline1', 'catalog_extra_teaser1', 'catalog_special_txtbg2', '?Nuevos Furnis C?rcel en JavvoHB!', '', 'Wooow, JavvoHB siempre est? a la ultima.', '');
INSERT INTO catalog_pages VALUES ('116', '-1', 'Marketplace', '6', '69', '1', '0', '1', '0', '1', '10', 'default_3x3', 'catalog_frontpage_headline2_es', '', '', '', '', '', '');
INSERT INTO catalog_pages VALUES ('117', '116', 'Offers', '1', '70', '1', '1', '1', '0', '1', '1', 'marketplace', 'catalog_marketplace_header_es', '', '', '', '', '', '');
INSERT INTO catalog_pages VALUES ('118', '116', 'My Sales', '1', '71', '1', '1', '1', '0', '1', '2', 'marketplace_own_items', 'catalog_marketplace_header_es', '', '', '', '', '', '');
INSERT INTO catalog_pages VALUES ('172', '91', 'Special Offers', '0', '3', '1', '1', '4', '0', '0', '6', 'default_3x3', 'catalog_cltbs_header1_en', 'catalog_cltbs_teaser_en', '', 'Los Raros coleccionables son Furni especial que se vende s??lo por un breve espacio de tiempo. Aumentan tu poder de cambio y lucen como ning??n otro objeto en tus Salas.', '', '', '');
INSERT INTO catalog_pages VALUES ('121', '6', 'Trax Machines', '0', '4', '1', '1', '1', '1', '0', '52', 'default_3x3', 'catalog_frontpage_headline2_en', '', '', 'Buy your Trax machines here, ready to load with all your wonderful, musical creations! Check the Sound Sets page for all the discs you could use!', '', 'Click on an item for more information.', '');
INSERT INTO catalog_pages VALUES ('497', '3', 'Stray Pixels', '1', '64', '1', '1', '1', '0', '0', '7', 'default_3x3', 'Stray Pixel', '', '', 'Stray Pixel', '', '', '');
INSERT INTO catalog_pages VALUES ('496', '3', 'Hospital', '10', '1', '1', '1', '1', '0', '0', '5', 'default_3x3', 'The new hospital furniture range is here! Buy it now and create your own Hospital!', '', '', 'The new hospital furniture range is here! Buy it now and create your own Hospital!', '', '', '');
INSERT INTO catalog_pages VALUES ('502', '3', 'Africa', '1', '30', '1', '1', '1', '0', '0', '1', 'default_3x3', 'The new African furniture range is here!', '', '', 'The new African furniture range is here!', '', '', '');
INSERT INTO catalog_pages VALUES ('178', '3', 'Kitchen', '1', '51', '1', '1', '1', '0', '0', '4', 'default_3x3', '', '', '', 'Cocina con los nuevos objetos de HabbliX', '', '', '');
INSERT INTO catalog_pages VALUES ('122', '6', 'Trax Packs', '0', '4', '1', '1', '1', '1', '0', '53', 'default_3x3', 'catalog_frontpage_headline2_en', '', '', 'We have every sound you could ever want right here! From sound effects and ambient tunes to rock and roll and heavy metal!', '', 'Click on an item for more information.', '');
INSERT INTO catalog_pages VALUES ('6', '-1', 'Trax Shop', '4', '4', '1', '0', '6', '0', '0', '11', 'default_3x3', 'catalog_frontpage_headline2_en', '', '', '', '', '', '');
INSERT INTO catalog_pages VALUES ('120', '503', 'Battle Banzai', '5', '78', '1', '1', '1', '0', '0', '1', 'default_3x3', 'Battlebanzai', '', '', 'Prepare for Battle Banzai!', '', '', '');
INSERT INTO catalog_pages VALUES ('170', '3', 'Halloween 2010', '1', '34', '1', '1', '1', '0', '0', '170', 'default_3x3', 'catalog_voodoo_header_en', 'catalog_voodoo_teaser', '', 'Los nuevos furnis de Halloween 2010.', '', 'Click en un item, para m??s informaci??n.', '');
INSERT INTO catalog_pages VALUES ('168', '14', 'Rhino', '1', '1', '1', '1', '1', '0', '0', '6', 'pets', 'catalog_pet_headline1', '', '', '', '', 'Give a name:Pick a color:Pick a race:', '');
INSERT INTO catalog_pages VALUES ('167', '14', 'Lion', '1', '1', '1', '1', '1', '0', '0', '0', 'pets', 'catalog_pet_headline1', '', '', '', '', 'Give a name:Pick a color:Pick a race:', '');
INSERT INTO catalog_pages VALUES ('162', '3', 'MTV', '0', '4', '1', '1', '1', '0', '1', '3', 'default_3x3', 'catalog_rares_headline1', '', '', 'Haste con una publicidad para tu Sala.', '', 'Click en un item, para m??s informaci??n.', '');
INSERT INTO catalog_pages VALUES ('500', '3', 'xmas 2010', '1', '13', '1', '1', '1', '0', '0', '1', 'default_3x3', 'catalog_snowflake_en', 'ctlg_pic_snowflake_pilot', '', 'Its christmas time, grab those xmas goodies while you can!', '', 'Click an item for more info', '');
INSERT INTO catalog_pages VALUES ('501', '3', 'year 2011', '1', '91', '1', '1', '1', '0', '0', '1', 'default_3x3', 'catalog_frontpage_headline2_en', 'catalog_limited_teaser_en', '', 'Hello 2011!', '', 'Click an item for more info!', '');
INSERT INTO catalog_pages VALUES ('503', '-1', 'Games', '1', '60', '1', '0', '1', '0', '0', '5', 'default_3x3', ' ', ' ', ' ', ' ', ' ', ' ', ' ');
INSERT INTO catalog_pages VALUES ('504', '503', 'Ice Tag', '1', '13', '1', '1', '1', '0', '0', '3', 'default_3x3', 'arctic', ' ', ' ', 'Coming Soon', ' ', 'Coming Soon', ' ');
INSERT INTO catalog_pages VALUES ('505', '503', 'Freeze!', '1', '13', '1', '1', '1', '0', '1', '4', 'default_3x3', 'arctic', ' ', ' ', 'Coming Soon', ' ', 'Coming Soon', ' ');

-- ----------------------------
-- Table structure for `chatlogs`
-- ----------------------------
DROP TABLE IF EXISTS `chatlogs`;
CREATE TABLE `chatlogs` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(10) unsigned NOT NULL,
  `room_id` int(10) unsigned NOT NULL,
  `hour` int(11) NOT NULL,
  `minute` int(11) NOT NULL,
  `full_date` varchar(120) NOT NULL,
  `timestamp` double NOT NULL,
  `message` text NOT NULL,
  `user_name` varchar(100) NOT NULL DEFAULT 'Unknown User',
  PRIMARY KEY (`id`),
  KEY `user_id` (`user_id`,`room_id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of chatlogs
-- ----------------------------

-- ----------------------------
-- Table structure for `clothing`
-- ----------------------------
DROP TABLE IF EXISTS `clothing`;
CREATE TABLE `clothing` (
  `id` int(4) NOT NULL AUTO_INCREMENT,
  `pid` int(4) NOT NULL,
  `class` int(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=216 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of clothing
-- ----------------------------
INSERT INTO clothing VALUES ('1', '210', '0');
INSERT INTO clothing VALUES ('2', '215', '0');
INSERT INTO clothing VALUES ('3', '220', '0');
INSERT INTO clothing VALUES ('4', '225', '0');
INSERT INTO clothing VALUES ('5', '230', '0');
INSERT INTO clothing VALUES ('6', '235', '0');
INSERT INTO clothing VALUES ('7', '240', '0');
INSERT INTO clothing VALUES ('8', '245', '0');
INSERT INTO clothing VALUES ('9', '250', '0');
INSERT INTO clothing VALUES ('10', '255', '0');
INSERT INTO clothing VALUES ('11', '260', '0');
INSERT INTO clothing VALUES ('12', '261', '0');
INSERT INTO clothing VALUES ('13', '262', '0');
INSERT INTO clothing VALUES ('14', '266', '0');
INSERT INTO clothing VALUES ('15', '267', '0');
INSERT INTO clothing VALUES ('16', '630', '0');
INSERT INTO clothing VALUES ('17', '635', '0');
INSERT INTO clothing VALUES ('18', '640', '0');
INSERT INTO clothing VALUES ('19', '650', '0');
INSERT INTO clothing VALUES ('20', '665', '0');
INSERT INTO clothing VALUES ('21', '667', '0');
INSERT INTO clothing VALUES ('22', '669', '0');
INSERT INTO clothing VALUES ('23', '675', '0');
INSERT INTO clothing VALUES ('24', '680', '0');
INSERT INTO clothing VALUES ('25', '685', '0');
INSERT INTO clothing VALUES ('26', '690', '0');
INSERT INTO clothing VALUES ('27', '691', '0');
INSERT INTO clothing VALUES ('28', '695', '0');
INSERT INTO clothing VALUES ('29', '696', '0');
INSERT INTO clothing VALUES ('30', '700', '0');
INSERT INTO clothing VALUES ('31', '705', '0');
INSERT INTO clothing VALUES ('32', '710', '0');
INSERT INTO clothing VALUES ('33', '715', '0');
INSERT INTO clothing VALUES ('34', '716', '0');
INSERT INTO clothing VALUES ('35', '717', '0');
INSERT INTO clothing VALUES ('36', '720', '0');
INSERT INTO clothing VALUES ('37', '721', '0');
INSERT INTO clothing VALUES ('38', '722', '0');
INSERT INTO clothing VALUES ('39', '723', '0');
INSERT INTO clothing VALUES ('40', '724', '0');
INSERT INTO clothing VALUES ('41', '725', '0');
INSERT INTO clothing VALUES ('42', '730', '0');
INSERT INTO clothing VALUES ('43', '735', '0');
INSERT INTO clothing VALUES ('44', '740', '0');
INSERT INTO clothing VALUES ('45', '803', '0');
INSERT INTO clothing VALUES ('46', '804', '0');
INSERT INTO clothing VALUES ('47', '805', '0');
INSERT INTO clothing VALUES ('48', '806', '0');
INSERT INTO clothing VALUES ('49', '807', '0');
INSERT INTO clothing VALUES ('50', '808', '0');
INSERT INTO clothing VALUES ('51', '809', '0');
INSERT INTO clothing VALUES ('52', '812', '0');
INSERT INTO clothing VALUES ('53', '813', '0');
INSERT INTO clothing VALUES ('54', '814', '0');
INSERT INTO clothing VALUES ('55', '815', '0');
INSERT INTO clothing VALUES ('56', '816', '0');
INSERT INTO clothing VALUES ('57', '817', '0');
INSERT INTO clothing VALUES ('58', '818', '0');
INSERT INTO clothing VALUES ('59', '819', '0');
INSERT INTO clothing VALUES ('60', '820', '0');
INSERT INTO clothing VALUES ('61', '821', '0');
INSERT INTO clothing VALUES ('62', '822', '0');
INSERT INTO clothing VALUES ('63', '823', '0');
INSERT INTO clothing VALUES ('64', '824', '0');
INSERT INTO clothing VALUES ('65', '825', '0');
INSERT INTO clothing VALUES ('66', '826', '0');
INSERT INTO clothing VALUES ('67', '827', '0');
INSERT INTO clothing VALUES ('68', '876', '0');
INSERT INTO clothing VALUES ('69', '877', '0');
INSERT INTO clothing VALUES ('70', '878', '0');
INSERT INTO clothing VALUES ('71', '879', '0');
INSERT INTO clothing VALUES ('72', '880', '0');
INSERT INTO clothing VALUES ('73', '881', '0');
INSERT INTO clothing VALUES ('74', '882', '0');
INSERT INTO clothing VALUES ('75', '883', '0');
INSERT INTO clothing VALUES ('76', '884', '0');
INSERT INTO clothing VALUES ('77', '885', '0');
INSERT INTO clothing VALUES ('78', '886', '0');
INSERT INTO clothing VALUES ('79', '887', '0');
INSERT INTO clothing VALUES ('80', '888', '0');
INSERT INTO clothing VALUES ('81', '905', '0');
INSERT INTO clothing VALUES ('82', '906', '0');
INSERT INTO clothing VALUES ('83', '907', '0');
INSERT INTO clothing VALUES ('84', '908', '0');
INSERT INTO clothing VALUES ('85', '917', '0');
INSERT INTO clothing VALUES ('86', '919', '0');
INSERT INTO clothing VALUES ('87', '921', '0');
INSERT INTO clothing VALUES ('88', '923', '0');
INSERT INTO clothing VALUES ('89', '924', '0');
INSERT INTO clothing VALUES ('90', '925', '0');
INSERT INTO clothing VALUES ('91', '926', '0');
INSERT INTO clothing VALUES ('92', '930', '0');
INSERT INTO clothing VALUES ('93', '932', '0');
INSERT INTO clothing VALUES ('94', '934', '0');
INSERT INTO clothing VALUES ('95', '936', '0');
INSERT INTO clothing VALUES ('96', '940', '0');
INSERT INTO clothing VALUES ('97', '941', '0');
INSERT INTO clothing VALUES ('98', '942', '0');
INSERT INTO clothing VALUES ('99', '943', '0');
INSERT INTO clothing VALUES ('100', '944', '0');
INSERT INTO clothing VALUES ('101', '945', '0');
INSERT INTO clothing VALUES ('102', '946', '0');
INSERT INTO clothing VALUES ('103', '947', '0');
INSERT INTO clothing VALUES ('104', '948', '0');
INSERT INTO clothing VALUES ('105', '949', '0');
INSERT INTO clothing VALUES ('106', '950', '0');
INSERT INTO clothing VALUES ('107', '951', '0');
INSERT INTO clothing VALUES ('108', '952', '0');
INSERT INTO clothing VALUES ('109', '953', '0');
INSERT INTO clothing VALUES ('110', '954', '0');
INSERT INTO clothing VALUES ('111', '1001', '0');
INSERT INTO clothing VALUES ('112', '1002', '0');
INSERT INTO clothing VALUES ('113', '1003', '0');
INSERT INTO clothing VALUES ('114', '1004', '0');
INSERT INTO clothing VALUES ('115', '1005', '0');
INSERT INTO clothing VALUES ('116', '1006', '0');
INSERT INTO clothing VALUES ('117', '1007', '0');
INSERT INTO clothing VALUES ('118', '1008', '0');
INSERT INTO clothing VALUES ('119', '1009', '0');
INSERT INTO clothing VALUES ('120', '1010', '0');
INSERT INTO clothing VALUES ('121', '1011', '0');
INSERT INTO clothing VALUES ('122', '1012', '0');
INSERT INTO clothing VALUES ('123', '1013', '0');
INSERT INTO clothing VALUES ('124', '1014', '0');
INSERT INTO clothing VALUES ('125', '1015', '0');
INSERT INTO clothing VALUES ('126', '1016', '0');
INSERT INTO clothing VALUES ('127', '1017', '0');
INSERT INTO clothing VALUES ('128', '1018', '0');
INSERT INTO clothing VALUES ('129', '1019', '0');
INSERT INTO clothing VALUES ('130', '1020', '0');
INSERT INTO clothing VALUES ('131', '1021', '0');
INSERT INTO clothing VALUES ('132', '1022', '0');
INSERT INTO clothing VALUES ('133', '1023', '0');
INSERT INTO clothing VALUES ('134', '1024', '0');
INSERT INTO clothing VALUES ('135', '1025', '0');
INSERT INTO clothing VALUES ('136', '1026', '0');
INSERT INTO clothing VALUES ('137', '1027', '0');
INSERT INTO clothing VALUES ('138', '1028', '0');
INSERT INTO clothing VALUES ('139', '1029', '0');
INSERT INTO clothing VALUES ('140', '1030', '0');
INSERT INTO clothing VALUES ('141', '1032', '0');
INSERT INTO clothing VALUES ('142', '1033', '0');
INSERT INTO clothing VALUES ('143', '1035', '0');
INSERT INTO clothing VALUES ('144', '1037', '0');
INSERT INTO clothing VALUES ('145', '1038', '0');
INSERT INTO clothing VALUES ('146', '1039', '0');
INSERT INTO clothing VALUES ('147', '1201', '0');
INSERT INTO clothing VALUES ('148', '1202', '0');
INSERT INTO clothing VALUES ('149', '1203', '0');
INSERT INTO clothing VALUES ('150', '1204', '0');
INSERT INTO clothing VALUES ('151', '1205', '0');
INSERT INTO clothing VALUES ('152', '1206', '0');
INSERT INTO clothing VALUES ('153', '1207', '0');
INSERT INTO clothing VALUES ('154', '1208', '0');
INSERT INTO clothing VALUES ('155', '1209', '0');
INSERT INTO clothing VALUES ('156', '1210', '0');
INSERT INTO clothing VALUES ('157', '1211', '0');
INSERT INTO clothing VALUES ('158', '1212', '0');
INSERT INTO clothing VALUES ('159', '1401', '0');
INSERT INTO clothing VALUES ('160', '1402', '0');
INSERT INTO clothing VALUES ('161', '1403', '0');
INSERT INTO clothing VALUES ('162', '1404', '0');
INSERT INTO clothing VALUES ('163', '1405', '0');
INSERT INTO clothing VALUES ('164', '1406', '0');
INSERT INTO clothing VALUES ('165', '1407', '0');
INSERT INTO clothing VALUES ('166', '1408', '0');
INSERT INTO clothing VALUES ('167', '1601', '0');
INSERT INTO clothing VALUES ('168', '1602', '0');
INSERT INTO clothing VALUES ('169', '1603', '0');
INSERT INTO clothing VALUES ('170', '1604', '0');
INSERT INTO clothing VALUES ('171', '1605', '0');
INSERT INTO clothing VALUES ('172', '1606', '0');
INSERT INTO clothing VALUES ('173', '1607', '0');
INSERT INTO clothing VALUES ('174', '1608', '0');
INSERT INTO clothing VALUES ('175', '1609', '0');
INSERT INTO clothing VALUES ('176', '1610', '0');
INSERT INTO clothing VALUES ('177', '1611', '0');
INSERT INTO clothing VALUES ('178', '1612', '0');
INSERT INTO clothing VALUES ('179', '1613', '0');
INSERT INTO clothing VALUES ('180', '1614', '0');
INSERT INTO clothing VALUES ('181', '1801', '0');
INSERT INTO clothing VALUES ('182', '1802', '0');
INSERT INTO clothing VALUES ('183', '1803', '0');
INSERT INTO clothing VALUES ('184', '1804', '0');
INSERT INTO clothing VALUES ('185', '1805', '0');
INSERT INTO clothing VALUES ('186', '1806', '0');
INSERT INTO clothing VALUES ('187', '1807', '0');
INSERT INTO clothing VALUES ('188', '1808', '0');
INSERT INTO clothing VALUES ('189', '1809', '0');
INSERT INTO clothing VALUES ('190', '1810', '0');
INSERT INTO clothing VALUES ('191', '1811', '0');
INSERT INTO clothing VALUES ('192', '1812', '0');
INSERT INTO clothing VALUES ('193', '1813', '0');
INSERT INTO clothing VALUES ('194', '1814', '0');
INSERT INTO clothing VALUES ('195', '1815', '0');
INSERT INTO clothing VALUES ('196', '1816', '0');
INSERT INTO clothing VALUES ('197', '1817', '0');
INSERT INTO clothing VALUES ('198', '1818', '0');
INSERT INTO clothing VALUES ('199', '1819', '0');
INSERT INTO clothing VALUES ('200', '1820', '0');
INSERT INTO clothing VALUES ('201', '1821', '0');
INSERT INTO clothing VALUES ('202', '1822', '0');
INSERT INTO clothing VALUES ('203', '2001', '0');
INSERT INTO clothing VALUES ('204', '2002', '0');
INSERT INTO clothing VALUES ('205', '2003', '0');
INSERT INTO clothing VALUES ('206', '2004', '0');
INSERT INTO clothing VALUES ('207', '2005', '0');
INSERT INTO clothing VALUES ('208', '2006', '0');
INSERT INTO clothing VALUES ('209', '2007', '0');
INSERT INTO clothing VALUES ('210', '2008', '0');
INSERT INTO clothing VALUES ('211', '2009', '0');
INSERT INTO clothing VALUES ('212', '2010', '0');
INSERT INTO clothing VALUES ('213', '2011', '0');
INSERT INTO clothing VALUES ('214', '2012', '0');
INSERT INTO clothing VALUES ('215', '2013', '0');

-- ----------------------------
-- Table structure for `cms_comments`
-- ----------------------------
DROP TABLE IF EXISTS `cms_comments`;
CREATE TABLE `cms_comments` (
  `id` int(6) NOT NULL AUTO_INCREMENT,
  `story` int(6) NOT NULL,
  `comment` text NOT NULL,
  `date` int(10) NOT NULL,
  `author` int(6) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of cms_comments
-- ----------------------------

-- ----------------------------
-- Table structure for `cms_news`
-- ----------------------------
DROP TABLE IF EXISTS `cms_news`;
CREATE TABLE `cms_news` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(255) COLLATE latin1_general_ci DEFAULT NULL,
  `shortstory` text COLLATE latin1_general_ci,
  `longstory` text COLLATE latin1_general_ci,
  `published` int(10) NOT NULL DEFAULT '0',
  `image` varchar(255) COLLATE latin1_general_ci DEFAULT '/Public/Images/news/TS_Web60.png',
  `campaign` int(1) NOT NULL DEFAULT '0',
  `campaignimg` varchar(255) COLLATE latin1_general_ci NOT NULL,
  `author` int(6) NOT NULL DEFAULT '1',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

-- ----------------------------
-- Records of cms_news
-- ----------------------------
INSERT INTO cms_news VALUES ('1', 'Habboon Hotel', 'Welcome to the official test hotel to<br>Phoenix 3.0!<br><br>The hotel is due to open up on<br>Friday, 29th October', 'Well what have we here?', '0', '/Public/Images/news/TS_Web60.png', '0', '', '1');

-- ----------------------------
-- Table structure for `cms_registration_figures`
-- ----------------------------
DROP TABLE IF EXISTS `cms_registration_figures`;
CREATE TABLE `cms_registration_figures` (
  `figure` varchar(70) NOT NULL,
  `gender` varchar(1) NOT NULL,
  PRIMARY KEY (`figure`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of cms_registration_figures
-- ----------------------------
INSERT INTO cms_registration_figures VALUES ('hr-515-45.hd-600-8.ch-884-76.lg-696-76.sh-740-76.ea-1401-76.ca-1815-62', 'f');
INSERT INTO cms_registration_figures VALUES ('hr-545-42.hd-600-28.ch-884-68.lg-700-68.sh-905-71.he-1601.ea-1406.fa-1', 'f');
INSERT INTO cms_registration_figures VALUES ('hd-600-3.ch-630-62.lg-695-62.sh-730-62.ca-1801-62', 'f');
INSERT INTO cms_registration_figures VALUES ('hr-515-48.hd-625-22.ch-660-79.lg-700-64.ea-1406', 'f');
INSERT INTO cms_registration_figures VALUES ('hr-890-42.hd-629-1.ch-685-74.lg-710-74.sh-907-74.he-1608.ca-1815-74.wa', 'f');
INSERT INTO cms_registration_figures VALUES ('hr-125-45.hd-180-4.ch-225-88.lg-285-89.sh-300-64.ha-1023-88', 'm');
INSERT INTO cms_registration_figures VALUES ('hr-115-42.hd-180-3.ch-210-62.lg-285-64.sh-290-62', 'm');
INSERT INTO cms_registration_figures VALUES ('hr-155-39.hd-180-1.ch-267-64.lg-281-64', 'm');
INSERT INTO cms_registration_figures VALUES ('hr-165-40.hd-206-2.ch-255-77.lg-275-76.sh-305-78.ha-1010-65.ea-1404-78', 'm');
INSERT INTO cms_registration_figures VALUES ('hr-110-45.hd-180-30.ch-215-66.lg-270-64.sh-300-64.ea-1404-64.wa-2007.c', 'm');
INSERT INTO cms_registration_figures VALUES ('hr-115-45.hd-180-7.ch-255-82.lg-280-64.sh-290-62', 'm');
INSERT INTO cms_registration_figures VALUES ('hr-115-45.hd-180-1.ch-255-64.lg-285-82.sh-300-62.cp-3121-64', 'm');
INSERT INTO cms_registration_figures VALUES ('hr-165-36.hd-180-1.ch-235-64.lg-285-64.sh-305-64.ea-1404-62.wa-2009-62', 'm');
INSERT INTO cms_registration_figures VALUES ('hr-893-39.hd-180-7.ch-245-64.lg-281-64.sh-906-64.ea-1404-64', 'm');
INSERT INTO cms_registration_figures VALUES ('hr-115-37.hd-180-1.ch-220-64.lg-285-64.sh-300-64', 'm');
INSERT INTO cms_registration_figures VALUES ('hr-165-45.hd-207-9.ch-255-64.lg-275-64.sh-305-64', 'm');
INSERT INTO cms_registration_figures VALUES ('hr-125-45.hd-190-4.ch-215-79.lg-285-73.sh-290-62', 'm');
INSERT INTO cms_registration_figures VALUES ('hr-515-42.hd-600-1.ch-655-83.lg-710-64.sh-730-64', 'f');
INSERT INTO cms_registration_figures VALUES ('hr-545-39.hd-600-8.ch-655-62.lg-710-73.sh-730-62.he-1602-73.ca-1812', 'f');
INSERT INTO cms_registration_figures VALUES ('hr-515-36.hd-605-7.ch-660-71.lg-700-71', 'f');
INSERT INTO cms_registration_figures VALUES ('hr-892-45.hd-600-1.ch-645-83.lg-720-83.sh-907-83.fa-1212.ca-1819', 'f');
INSERT INTO cms_registration_figures VALUES ('hr-545-33.hd-600-1.ch-665-78.lg-715-89.sh-907-62', 'f');
INSERT INTO cms_registration_figures VALUES ('hr-890-31.hd-600-2.ch-660-62.lg-700-79.sh-906-62.he-1602-80.ca-1805-78', 'f');
INSERT INTO cms_registration_figures VALUES ('hr-540-34.hd-600-9.ch-640-62.lg-700-64.sh-907-70.he-1602-62.ca-1804-73', 'f');
INSERT INTO cms_registration_figures VALUES ('hd-620-10.ch-660-64.lg-710-64.sh-906-70.wa-2009-72.hr-890-38', 'f');
INSERT INTO cms_registration_figures VALUES ('hr-890-47.hd-629-1.ch-685-78.lg-715-85.sh-735-72.he-1606-85.ca-1804-84', 'f');
INSERT INTO cms_registration_figures VALUES ('hd-180-8.ch-255-83.lg-270-83.sh-905-83.ha-1020.fa-1202-83', 'm');
INSERT INTO cms_registration_figures VALUES ('hr-165-32.hd-209-17.ch-878-1315-81.lg-3116-72-1315.ea-1401-62.fa-1212.', 'm');
INSERT INTO cms_registration_figures VALUES ('hd-180-10.ch-215-62.lg-270-62', 'm');
INSERT INTO cms_registration_figures VALUES ('hr-145-31.hd-185-10.ch-255-62.lg-270-62.he-1601', 'm');
INSERT INTO cms_registration_figures VALUES ('hr-893-33.hd-209-1.ch-3110-81-76.lg-270-80.fa-1202-80', 'm');
INSERT INTO cms_registration_figures VALUES ('hr-165-45.hd-180-3.ch-215-62.lg-3116-64-73.sh-300-62', 'm');
INSERT INTO cms_registration_figures VALUES ('hr-893-37.hd-180-1.ch-3111-68-67.lg-270-64.sh-906-62', 'm');
INSERT INTO cms_registration_figures VALUES ('hr-115-31.hd-180-7.ch-877-64-62.lg-270-64.sh-305-62.wa-2009-62', 'm');
INSERT INTO cms_registration_figures VALUES ('hr-115-31.hd-190-7.ch-255-73.lg-285-82.sh-300-64.fa-1201', 'm');
INSERT INTO cms_registration_figures VALUES ('hr-145-42.hd-208-2.ch-225-73.lg-285-64.sh-300-64.wa-2001', 'm');
INSERT INTO cms_registration_figures VALUES ('hr-165-42.hd-180-1.ch-255-62.lg-280-64.sh-906-62.ea-1404-62.wa-2011', 'm');

-- ----------------------------
-- Table structure for `cms_settings`
-- ----------------------------
DROP TABLE IF EXISTS `cms_settings`;
CREATE TABLE `cms_settings` (
  `variable` varchar(80) NOT NULL,
  `value` text NOT NULL,
  `description` text,
  `example` text,
  PRIMARY KEY (`variable`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of cms_settings
-- ----------------------------
INSERT INTO cms_settings VALUES ('cms_url', '', 'The url to your websites root directory', 'http://habboon.com');
INSERT INTO cms_settings VALUES ('client_ip', '', 'The IP address to your hotel emulator', '127.0.0.1');
INSERT INTO cms_settings VALUES ('client_port', '', 'The port that your emulator is running on', '30000');
INSERT INTO cms_settings VALUES ('client_mus', '', 'The port that your emulators MUS is running on', '30001');
INSERT INTO cms_settings VALUES ('client_variables', '', 'The url to your external variables', 'http://habboon.com/client/variables.txt');
INSERT INTO cms_settings VALUES ('client_texts', '', 'The url to your external texts', 'http://habboon.com/client/texts.txt');

-- ----------------------------
-- Table structure for `cms_texts`
-- ----------------------------
DROP TABLE IF EXISTS `cms_texts`;
CREATE TABLE `cms_texts` (
  `name` varchar(100) NOT NULL,
  `value` text NOT NULL,
  PRIMARY KEY (`name`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of cms_texts
-- ----------------------------
INSERT INTO cms_texts VALUES ('badge_desc_AC5', 'Successfully Rescued Abitha! - November 2010');
INSERT INTO cms_texts VALUES ('badge_desc_ACH_AIPerformanceVote1', 'Gather %limit% votes.');
INSERT INTO cms_texts VALUES ('badge_desc_ACH_AIPerformanceVote10', 'Gather %limit% votes.');
INSERT INTO cms_texts VALUES ('badge_desc_ACH_AIPerformanceVote2', 'Gather %limit% votes.');
INSERT INTO cms_texts VALUES ('badge_desc_ACH_AIPerformanceVote3', 'Gather %limit% votes.');
INSERT INTO cms_texts VALUES ('badge_desc_ACH_AIPerformanceVote4', 'Gather %limit% votes.');
INSERT INTO cms_texts VALUES ('badge_desc_ACH_AIPerformanceVote5', 'Gather %limit% votes.');
INSERT INTO cms_texts VALUES ('badge_desc_ACH_AIPerformanceVote6', 'Gather %limit% votes.');
INSERT INTO cms_texts VALUES ('badge_desc_ACH_AIPerformanceVote7', 'Gather %limit% votes.');
INSERT INTO cms_texts VALUES ('badge_desc_ACH_AIPerformanceVote8', 'Gather %limit% votes.');
INSERT INTO cms_texts VALUES ('badge_desc_ACH_AIPerformanceVote9', 'Gather %limit% votes.');
INSERT INTO cms_texts VALUES ('badge_desc_ACH_AllTimeHotelPresence1', 'For spending total of %limit% min. in hotel.');
INSERT INTO cms_texts VALUES ('badge_desc_ACH_AllTimeHotelPresence10', 'For spending total of %limit% min. in hotel.');
INSERT INTO cms_texts VALUES ('badge_desc_ACH_AllTimeHotelPresence2', 'For spending total of %limit% min. in hotel.');
INSERT INTO cms_texts VALUES ('badge_desc_ACH_AllTimeHotelPresence3', 'For spending total of %limit% min. in hotel.');
INSERT INTO cms_texts VALUES ('badge_desc_ACH_AllTimeHotelPresence4', 'For spending total of %limit% min. in hotel.');
INSERT INTO cms_texts VALUES ('badge_desc_ACH_AllTimeHotelPresence5', 'For spending total of %limit% min. in hotel.');
INSERT INTO cms_texts VALUES ('badge_desc_ACH_AllTimeHotelPresence6', 'For spending total of %limit% min. in hotel.');
INSERT INTO cms_texts VALUES ('badge_desc_ACH_AllTimeHotelPresence7', 'For spending total of %limit% min. in hotel.');
INSERT INTO cms_texts VALUES ('badge_desc_ACH_AllTimeHotelPresence8', 'For spending total of %limit% min. in hotel.');
INSERT INTO cms_texts VALUES ('badge_desc_ACH_AllTimeHotelPresence9', 'For spending total of %limit% min. in hotel.');
INSERT INTO cms_texts VALUES ('badge_desc_ACH_AvatarLooks1', 'For changing your look for the first time');
INSERT INTO cms_texts VALUES ('badge_desc_ACH_AvatarTags1', 'For tagging yourself with 5 tags');
INSERT INTO cms_texts VALUES ('badge_desc_ACH_BasicClub1', 'For joining the Habbo Club.');
INSERT INTO cms_texts VALUES ('badge_desc_ACH_BasicClub2', 'For %limit% months of Habbo Club membership.');
INSERT INTO cms_texts VALUES ('badge_desc_ACH_BasicClub3', 'For %limit% months of Habbo Club membership.');
INSERT INTO cms_texts VALUES ('badge_desc_ACH_BasicClub4', 'For %limit% months of Habbo Club membership.');
INSERT INTO cms_texts VALUES ('badge_desc_ACH_BasicClub5', 'For %limit% months of Habbo Club membership.');
INSERT INTO cms_texts VALUES ('badge_desc_ACH_BattleBallTilesLocked1', 'Lock %limit% tiles.');
INSERT INTO cms_texts VALUES ('badge_desc_ACH_BattleBallTilesLocked10', 'Lock %limit% tiles.');
INSERT INTO cms_texts VALUES ('badge_desc_ACH_BattleBallTilesLocked11', 'Lock %limit% tiles.');
INSERT INTO cms_texts VALUES ('badge_desc_ACH_BattleBallTilesLocked12', 'Lock %limit% tiles.');
INSERT INTO cms_texts VALUES ('badge_desc_ACH_BattleBallTilesLocked13', 'Lock %limit% tiles.');
INSERT INTO cms_texts VALUES ('badge_desc_ACH_BattleBallTilesLocked14', 'Lock %limit% tiles.');
INSERT INTO cms_texts VALUES ('badge_desc_ACH_BattleBallTilesLocked15', 'Lock %limit% tiles.');
INSERT INTO cms_texts VALUES ('badge_desc_ACH_BattleBallTilesLocked16', 'Lock %limit% tiles.');
INSERT INTO cms_texts VALUES ('badge_desc_ACH_BattleBallTilesLocked17', 'Lock %limit% tiles.');
INSERT INTO cms_texts VALUES ('badge_desc_ACH_BattleBallTilesLocked18', 'Lock %limit% tiles.');
INSERT INTO cms_texts VALUES ('badge_desc_ACH_BattleBallTilesLocked19', 'Lock %limit% tiles.');
INSERT INTO cms_texts VALUES ('badge_desc_ACH_BattleBallTilesLocked2', 'Lock %limit% tiles.');
INSERT INTO cms_texts VALUES ('badge_desc_ACH_BattleBallTilesLocked20', 'Lock %limit% tiles.');
INSERT INTO cms_texts VALUES ('badge_desc_ACH_BattleBallTilesLocked3', 'Lock %limit% tiles.');
INSERT INTO cms_texts VALUES ('badge_desc_ACH_BattleBallTilesLocked4', 'Lock %limit% tiles.');
INSERT INTO cms_texts VALUES ('badge_desc_ACH_BattleBallTilesLocked5', 'Lock %limit% tiles.');
INSERT INTO cms_texts VALUES ('badge_desc_ACH_BattleBallTilesLocked6', 'Lock %limit% tiles.');
INSERT INTO cms_texts VALUES ('badge_desc_ACH_BattleBallTilesLocked7', 'Lock %limit% tiles.');
INSERT INTO cms_texts VALUES ('badge_desc_ACH_BattleBallTilesLocked8', 'Lock %limit% tiles.');
INSERT INTO cms_texts VALUES ('badge_desc_ACH_BattleBallTilesLocked9', 'Lock %limit% tiles.');
INSERT INTO cms_texts VALUES ('badge_desc_ACH_EmailVerification1', 'For activating your email address. Thanks!');
INSERT INTO cms_texts VALUES ('badge_desc_ACH_Forum1', 'Member of the Otaku-Studios.com forums!');
INSERT INTO cms_texts VALUES ('badge_desc_ACH_GameAuthorExperience1', 'Gather %limit% points in your game room.');
INSERT INTO cms_texts VALUES ('badge_desc_ACH_GameAuthorExperience10', 'Gather %limit% points in your game room.');
INSERT INTO cms_texts VALUES ('badge_desc_ACH_GameAuthorExperience11', 'Gather %limit% points in your game room.');
INSERT INTO cms_texts VALUES ('badge_desc_ACH_GameAuthorExperience12', 'Gather %limit% points in your game room.');
INSERT INTO cms_texts VALUES ('badge_desc_ACH_GameAuthorExperience13', 'Gather %limit% points in your game room.');
INSERT INTO cms_texts VALUES ('badge_desc_ACH_GameAuthorExperience14', 'Gather %limit%  points in your game room.');
INSERT INTO cms_texts VALUES ('badge_desc_ACH_GameAuthorExperience15', 'Gather %limit%  points in your game room.');
INSERT INTO cms_texts VALUES ('badge_desc_ACH_GameAuthorExperience16', 'Gather %limit%  points in your game room.');
INSERT INTO cms_texts VALUES ('badge_desc_ACH_GameAuthorExperience17', 'Gather %limit%  points in your game room.');
INSERT INTO cms_texts VALUES ('badge_desc_ACH_GameAuthorExperience18', 'Gather %limit% points in your game room.');
INSERT INTO cms_texts VALUES ('badge_desc_ACH_GameAuthorExperience19', 'Gather %limit% points in your game room.');
INSERT INTO cms_texts VALUES ('badge_desc_ACH_GameAuthorExperience2', 'Gather %limit% points in your game room.');
INSERT INTO cms_texts VALUES ('badge_desc_ACH_GameAuthorExperience20', 'Gather %limit% points in your game room.');
INSERT INTO cms_texts VALUES ('badge_desc_ACH_GameAuthorExperience3', 'Gather %limit% points in your game room.');
INSERT INTO cms_texts VALUES ('badge_desc_ACH_GameAuthorExperience4', 'Gather %limit% points in your game room.');
INSERT INTO cms_texts VALUES ('badge_desc_ACH_GameAuthorExperience5', 'Gather %limit% points in your game room.');
INSERT INTO cms_texts VALUES ('badge_desc_ACH_GameAuthorExperience6', 'Gather %limit% points in your game room.');
INSERT INTO cms_texts VALUES ('badge_desc_ACH_GameAuthorExperience7', 'Gather %limit% points in your game room.');
INSERT INTO cms_texts VALUES ('badge_desc_ACH_GameAuthorExperience8', 'Gather %limit% points in your game room.');
INSERT INTO cms_texts VALUES ('badge_desc_ACH_GameAuthorExperience9', 'Gather %limit% points in your game room.');
INSERT INTO cms_texts VALUES ('badge_desc_ACH_GamePlayerExperience1', 'Gather %limit% victory points.');
INSERT INTO cms_texts VALUES ('badge_desc_ACH_GamePlayerExperience10', 'Gather %limit% victory points.');
INSERT INTO cms_texts VALUES ('badge_desc_ACH_GamePlayerExperience11', 'Gather %limit% victory points.');
INSERT INTO cms_texts VALUES ('badge_desc_ACH_GamePlayerExperience12', 'Gather %limit%  victory points.');
INSERT INTO cms_texts VALUES ('badge_desc_ACH_GamePlayerExperience13', 'Gather %limit%  victory points.');
INSERT INTO cms_texts VALUES ('badge_desc_ACH_GamePlayerExperience14', 'Gather %limit% victory points.');
INSERT INTO cms_texts VALUES ('badge_desc_ACH_GamePlayerExperience15', 'Gather %limit% victory points.');
INSERT INTO cms_texts VALUES ('badge_desc_ACH_GamePlayerExperience16', 'Gather %limit% victory points.');
INSERT INTO cms_texts VALUES ('badge_desc_ACH_GamePlayerExperience17', 'Gather %limit% victory points.');
INSERT INTO cms_texts VALUES ('badge_desc_ACH_GamePlayerExperience18', 'Gather %limit% victory points.');
INSERT INTO cms_texts VALUES ('badge_desc_ACH_GamePlayerExperience19', 'Gather %limit% victory points.');
INSERT INTO cms_texts VALUES ('badge_desc_ACH_GamePlayerExperience2', 'Gather %limit% victory points.');
INSERT INTO cms_texts VALUES ('badge_desc_ACH_GamePlayerExperience20', 'Gather %limit% victory points.');
INSERT INTO cms_texts VALUES ('badge_desc_ACH_GamePlayerExperience3', 'Gather %limit% victory points.');
INSERT INTO cms_texts VALUES ('badge_desc_ACH_GamePlayerExperience4', 'Gather %limit% victory points.');
INSERT INTO cms_texts VALUES ('badge_desc_ACH_GamePlayerExperience5', 'Gather %limit% victory points.');
INSERT INTO cms_texts VALUES ('badge_desc_ACH_GamePlayerExperience6', 'Gather %limit% victory points.');
INSERT INTO cms_texts VALUES ('badge_desc_ACH_GamePlayerExperience7', 'Gather %limit% victory points.');
INSERT INTO cms_texts VALUES ('badge_desc_ACH_GamePlayerExperience8', 'Gather %limit% victory points.');
INSERT INTO cms_texts VALUES ('badge_desc_ACH_GamePlayerExperience9', 'Gather %limit% victory points.');
INSERT INTO cms_texts VALUES ('badge_desc_ACH_GiftGiver1', 'For giving a gift.');
INSERT INTO cms_texts VALUES ('badge_desc_ACH_GiftGiver10', 'For giving %limit% gifts.');
INSERT INTO cms_texts VALUES ('badge_desc_ACH_GiftGiver2', 'For giving %limit% gifts.');
INSERT INTO cms_texts VALUES ('badge_desc_ACH_GiftGiver3', 'For giving %limit%  gifts.');
INSERT INTO cms_texts VALUES ('badge_desc_ACH_GiftGiver4', 'For giving %limit% gifts.');
INSERT INTO cms_texts VALUES ('badge_desc_ACH_GiftGiver5', 'For giving %limit% gifts.');
INSERT INTO cms_texts VALUES ('badge_desc_ACH_GiftGiver6', 'For giving %limit% gifts.');
INSERT INTO cms_texts VALUES ('badge_desc_ACH_GiftGiver7', 'For giving %limit% gifts.');
INSERT INTO cms_texts VALUES ('badge_desc_ACH_GiftGiver8', 'For giving %limit% gifts.');
INSERT INTO cms_texts VALUES ('badge_desc_ACH_GiftGiver9', 'For giving %limit% gifts.');
INSERT INTO cms_texts VALUES ('badge_desc_ACH_GiftReceiver1', 'For receiving a gift.');
INSERT INTO cms_texts VALUES ('badge_desc_ACH_GiftReceiver10', 'For receiving %limit% gifts.');
INSERT INTO cms_texts VALUES ('badge_desc_ACH_GiftReceiver2', 'For receiving %limit% gifts.');
INSERT INTO cms_texts VALUES ('badge_desc_ACH_GiftReceiver3', 'For receiving %limit% gifts.');
INSERT INTO cms_texts VALUES ('badge_desc_ACH_GiftReceiver4', 'For receiving %limit% gifts.');
INSERT INTO cms_texts VALUES ('badge_desc_ACH_GiftReceiver5', 'For receiving %limit% gifts.');
INSERT INTO cms_texts VALUES ('badge_desc_ACH_GiftReceiver6', 'For receiving %limit% gifts.');
INSERT INTO cms_texts VALUES ('badge_desc_ACH_GiftReceiver7', 'For receiving %limit% gifts.');
INSERT INTO cms_texts VALUES ('badge_desc_ACH_GiftReceiver8', 'For receiving %limit% gifts.');
INSERT INTO cms_texts VALUES ('badge_desc_ACH_GiftReceiver9', 'For receiving %limit% gifts.');
INSERT INTO cms_texts VALUES ('badge_desc_ACH_Graduate1', 'For completing your confusing Habbo newbie experience.');
INSERT INTO cms_texts VALUES ('badge_desc_ACH_HappyHour1', 'For spending a Happy moment in Habbo! Log in during Happy Hour to receive this achievement.');
INSERT INTO cms_texts VALUES ('badge_desc_ACH_Login1', 'For logging in %limit% days in a row. Try it if you dare.');
INSERT INTO cms_texts VALUES ('badge_desc_ACH_Login10', 'For logging in %limit% days in a row. Breathtaking.');
INSERT INTO cms_texts VALUES ('badge_desc_ACH_Login2', 'For logging in %limit% days in a row. Wow!');
INSERT INTO cms_texts VALUES ('badge_desc_ACH_Login3', 'For logging in %limit% days in a row. Nice one!');
INSERT INTO cms_texts VALUES ('badge_desc_ACH_Login4', 'For logging in %limit% days in a row. High 5!');
INSERT INTO cms_texts VALUES ('badge_desc_ACH_Login5', 'For logging in %limit% days in a row. Amazing.');
INSERT INTO cms_texts VALUES ('badge_desc_ACH_Login6', 'For logging in %limit% days in a row. Phenomenal.');
INSERT INTO cms_texts VALUES ('badge_desc_ACH_Login7', 'For logging in %limit% days in a row. Awesome.');
INSERT INTO cms_texts VALUES ('badge_desc_ACH_Login8', 'For logging in %limit% days in a row. Sensational.');
INSERT INTO cms_texts VALUES ('badge_desc_ACH_Login9', 'For logging in %limit% days in a row. Extraordinary.');
INSERT INTO cms_texts VALUES ('badge_desc_ACH_MGM1', 'For inviting %limit% real life friend to Habbo.');
INSERT INTO cms_texts VALUES ('badge_desc_ACH_MGM10', 'For inviting %limit% real life friends to Habbo.');
INSERT INTO cms_texts VALUES ('badge_desc_ACH_MGM2', 'For inviting %limit% real life friend to Habbo.');
INSERT INTO cms_texts VALUES ('badge_desc_ACH_MGM3', 'For inviting %limit% real life friend to Habbo.');
INSERT INTO cms_texts VALUES ('badge_desc_ACH_MGM4', 'For inviting %limit% real life friends to Habbo.');
INSERT INTO cms_texts VALUES ('badge_desc_ACH_MGM5', 'For inviting %limit% real life friends to Habbo.');
INSERT INTO cms_texts VALUES ('badge_desc_ACH_MGM6', 'For inviting %limit% real life friends to Habbo.');
INSERT INTO cms_texts VALUES ('badge_desc_ACH_MGM7', 'For inviting %limit%  real life friends to Habbo.');
INSERT INTO cms_texts VALUES ('badge_desc_ACH_MGM8', 'For inviting %limit% real life friends to Habbo.');
INSERT INTO cms_texts VALUES ('badge_desc_ACH_MGM9', 'For inviting %limit% real life friends to Habbo.');
INSERT INTO cms_texts VALUES ('badge_desc_ACH_Motto1', 'For changing your motto for the first time');
INSERT INTO cms_texts VALUES ('badge_desc_ACH_Name1', 'For changing your name');
INSERT INTO cms_texts VALUES ('badge_desc_ACH_PetFeeding1', 'Give your pets at least %limit% points of food to earn this badge.');
INSERT INTO cms_texts VALUES ('badge_desc_ACH_PetFeeding10', 'Give your pets at least %limit%  points of food to earn this badge.');
INSERT INTO cms_texts VALUES ('badge_desc_ACH_PetFeeding10_HHCA', 'Give your pets at least 204600 points of food to earn this badge.');
INSERT INTO cms_texts VALUES ('badge_desc_ACH_PetFeeding2', 'Give your pets at least %limit% points of food to earn this badge.');
INSERT INTO cms_texts VALUES ('badge_desc_ACH_PetFeeding3', 'Give your pets at least %limit% points of food to earn this badge.');
INSERT INTO cms_texts VALUES ('badge_desc_ACH_PetFeeding4', 'Give your pets at least %limit% points of food to earn this badge.');
INSERT INTO cms_texts VALUES ('badge_desc_ACH_PetFeeding5', 'Give your pets at least %limit% points of food to earn this badge.');
INSERT INTO cms_texts VALUES ('badge_desc_ACH_PetFeeding6', 'Give your pets at least %limit% points of food to earn this badge.');
INSERT INTO cms_texts VALUES ('badge_desc_ACH_PetFeeding7', 'Give your pets at least %limit% points of food to earn this badge.');
INSERT INTO cms_texts VALUES ('badge_desc_ACH_PetFeeding8', 'Give your pets at least %limit%  points of food to earn this badge');
INSERT INTO cms_texts VALUES ('badge_desc_ACH_PetFeeding9', 'Give your pets at least %limit% points of food to earn this badge.');
INSERT INTO cms_texts VALUES ('badge_desc_ACH_PetLevelUp1', 'Train your pets up at least %limit% level to earn this badge.');
INSERT INTO cms_texts VALUES ('badge_desc_ACH_PetLevelUp10', 'Train your pets up at least %limit% levels to earn this badge.');
INSERT INTO cms_texts VALUES ('badge_desc_ACH_PetLevelUp2', 'Train your pets up at least %limit% levels to earn this badge.');
INSERT INTO cms_texts VALUES ('badge_desc_ACH_PetLevelUp3', 'Train your pets up at least %limit% levels to earn this badge.');
INSERT INTO cms_texts VALUES ('badge_desc_ACH_PetLevelUp4', 'Train your pets up at least %limit% levels to earn this badge.');
INSERT INTO cms_texts VALUES ('badge_desc_ACH_PetLevelUp5', 'Train your pets up at least %limit% levels to earn this badge.');
INSERT INTO cms_texts VALUES ('badge_desc_ACH_PetLevelUp6', 'Train your pets up at least %limit% levels to earn this badge.');
INSERT INTO cms_texts VALUES ('badge_desc_ACH_PetLevelUp7', 'Train your pets up at least %limit% levels to earn this badge.');
INSERT INTO cms_texts VALUES ('badge_desc_ACH_PetLevelUp8', 'Train your pets up at least %limit% levels to earn this badge.');
INSERT INTO cms_texts VALUES ('badge_desc_ACH_PetLevelUp9', 'Train your pets up at least %limit%  levels to earn this badge.');
INSERT INTO cms_texts VALUES ('badge_desc_ACH_PetLover1', 'Own %limit% pet to earn this badge.');
INSERT INTO cms_texts VALUES ('badge_desc_ACH_PetLover10', 'Own  %limit% pets to earn this badge.');
INSERT INTO cms_texts VALUES ('badge_desc_ACH_PetLover2', 'Own %limit% pets to earn this badge.');
INSERT INTO cms_texts VALUES ('badge_desc_ACH_PetLover3', 'Own  %limit% pets to earn this badge.');
INSERT INTO cms_texts VALUES ('badge_desc_ACH_PetLover4', 'Own %limit%  pets to earn this badge.');
INSERT INTO cms_texts VALUES ('badge_desc_ACH_PetLover5', 'Own %limit%  pets to earn this badge.');
INSERT INTO cms_texts VALUES ('badge_desc_ACH_PetLover6', 'Own %limit%  pets to earn this badge.');
INSERT INTO cms_texts VALUES ('badge_desc_ACH_PetLover7', 'Own %limit% pets to earn this badge.');
INSERT INTO cms_texts VALUES ('badge_desc_ACH_PetLover8', 'Own %limit%  pets to earn this badge.');
INSERT INTO cms_texts VALUES ('badge_desc_ACH_PetLover9', 'Own %limit%  pets to earn this badge.');
INSERT INTO cms_texts VALUES ('badge_desc_ACH_PetRespectGiver1', 'Scratch anyone\'s pet at least %limit% times to earn this badge.');
INSERT INTO cms_texts VALUES ('badge_desc_ACH_PetRespectGiver10', 'Scratch anyone\'s pet at least %limit% times to earn this badge.');
INSERT INTO cms_texts VALUES ('badge_desc_ACH_PetRespectGiver2', 'Scratch anyone\'s pet at least %limit% times to earn this badge.');
INSERT INTO cms_texts VALUES ('badge_desc_ACH_PetRespectGiver3', 'Scratch anyone\'s pet at least %limit% times to earn this badge.');
INSERT INTO cms_texts VALUES ('badge_desc_ACH_PetRespectGiver4', 'Scratch anyone\'s pet at least %limit% times to earn this badge.');
INSERT INTO cms_texts VALUES ('badge_desc_ACH_PetRespectGiver5', 'Scratch anyone\'s pet at least %limit% times to earn this badge.');
INSERT INTO cms_texts VALUES ('badge_desc_ACH_PetRespectGiver6', 'Scratch anyone\'s pet at least %limit% times to earn this badge.');
INSERT INTO cms_texts VALUES ('badge_desc_ACH_PetRespectGiver7', 'Scratch anyone\'s pet at least %limit% times to earn this badge.');
INSERT INTO cms_texts VALUES ('badge_desc_ACH_PetRespectGiver8', 'Scratch anyone\'s pet at least %limit% times to earn this badge.');
INSERT INTO cms_texts VALUES ('badge_desc_ACH_PetRespectGiver9', 'Scratch anyone\'s pet at least %limit% times to earn this badge.');
INSERT INTO cms_texts VALUES ('badge_desc_ACH_PetRespectReceiver1', 'Have someone scratch your pet at least %limit% times to earn this badge.');
INSERT INTO cms_texts VALUES ('badge_desc_ACH_PetRespectReceiver10', 'Have someone scratch your pet at least %limit% times to earn this badge.');
INSERT INTO cms_texts VALUES ('badge_desc_ACH_PetRespectReceiver2', 'Have someone scratch your pet at least %limit% times to earn this badge.');
INSERT INTO cms_texts VALUES ('badge_desc_ACH_PetRespectReceiver3', 'Have someone scratch your pet at least %limit% times to earn this badge.');
INSERT INTO cms_texts VALUES ('badge_desc_ACH_PetRespectReceiver4', 'Have someone scratch your pet at least %limit%  times to earn this badge.');
INSERT INTO cms_texts VALUES ('badge_desc_ACH_PetRespectReceiver5', 'Have someone scratch your pet at least %limit% times to earn this badge.');
INSERT INTO cms_texts VALUES ('badge_desc_ACH_PetRespectReceiver6', 'Have someone scratch your pet at least %limit% times to earn this badge.');
INSERT INTO cms_texts VALUES ('badge_desc_ACH_PetRespectReceiver7', 'Have someone scratch your pet at least %limit% times to earn this badge.');
INSERT INTO cms_texts VALUES ('badge_desc_ACH_PetRespectReceiver8', 'Have someone scratch your pet at least %limit% times to earn this badge.');
INSERT INTO cms_texts VALUES ('badge_desc_ACH_PetRespectReceiver9', 'Have someone scratch your pet at least %limit% times to earn this badge.');
INSERT INTO cms_texts VALUES ('badge_desc_ACH_RegistrationDuration1', 'Be a member of the community for %limit% days.');
INSERT INTO cms_texts VALUES ('badge_desc_ACH_RegistrationDuration10', 'Be a member of the community for %limit% days.');
INSERT INTO cms_texts VALUES ('badge_desc_ACH_RegistrationDuration2', 'Be a member of the community for %limit%  days.');
INSERT INTO cms_texts VALUES ('badge_desc_ACH_RegistrationDuration3', 'Be a member of the community for %limit%  days.');
INSERT INTO cms_texts VALUES ('badge_desc_ACH_RegistrationDuration4', 'Be a member of the community for %limit% days.');
INSERT INTO cms_texts VALUES ('badge_desc_ACH_RegistrationDuration5', 'Be a member of the community for %limit% days');
INSERT INTO cms_texts VALUES ('badge_desc_ACH_RegistrationDuration6', 'Be a member of the community for a %limit% days.');
INSERT INTO cms_texts VALUES ('badge_desc_ACH_RegistrationDuration7', 'Be a member of the community for %limit%  days.');
INSERT INTO cms_texts VALUES ('badge_desc_ACH_RegistrationDuration8', 'Be a member of the community for %limit% days.');
INSERT INTO cms_texts VALUES ('badge_desc_ACH_RegistrationDuration9', 'Be a member of the community for %limit% days.');
INSERT INTO cms_texts VALUES ('badge_desc_ACH_RespectEarned1', 'For earning respect %limit% time.');
INSERT INTO cms_texts VALUES ('badge_desc_ACH_RespectEarned10', 'For earning respect %limit% times.');
INSERT INTO cms_texts VALUES ('badge_desc_ACH_RespectEarned2', 'For earning respect %limit% times.');
INSERT INTO cms_texts VALUES ('badge_desc_ACH_RespectEarned3', 'For earning respect %limit% times.');
INSERT INTO cms_texts VALUES ('badge_desc_ACH_RespectEarned4', 'For earning respect %limit% times.');
INSERT INTO cms_texts VALUES ('badge_desc_ACH_RespectEarned5', 'For earning respect %limit% times.');
INSERT INTO cms_texts VALUES ('badge_desc_ACH_RespectEarned6', 'For earning respect %limit% times.');
INSERT INTO cms_texts VALUES ('badge_desc_ACH_RespectEarned7', 'For earning respect %limit% times.');
INSERT INTO cms_texts VALUES ('badge_desc_ACH_RespectEarned8', 'For earning respect %limit% times.');
INSERT INTO cms_texts VALUES ('badge_desc_ACH_RespectEarned9', 'For earning respect %limit% times.');
INSERT INTO cms_texts VALUES ('badge_desc_ACH_RespectGiven1', 'For giving respect %limit% times.');
INSERT INTO cms_texts VALUES ('badge_desc_ACH_RoomEntry1', 'For hanging out in %limit% guest rooms that you do not own. Tourist.');
INSERT INTO cms_texts VALUES ('badge_desc_ACH_RoomEntry10', 'For hanging out in %limit% guest rooms that you do not own. Time traveler.');
INSERT INTO cms_texts VALUES ('badge_desc_ACH_RoomEntry2', 'For hanging out in %limit% guest rooms that you do not own. Moocher.');
INSERT INTO cms_texts VALUES ('badge_desc_ACH_RoomEntry3', 'For hanging out in %limit% guest rooms that you do not own. Freeloader.');
INSERT INTO cms_texts VALUES ('badge_desc_ACH_RoomEntry4', 'For hanging out in %limit% guest rooms that you do not own. Backpacker.');
INSERT INTO cms_texts VALUES ('badge_desc_ACH_RoomEntry5', 'For hanging out in %limit% guest rooms that you do not own. Globetrotter.');
INSERT INTO cms_texts VALUES ('badge_desc_ACH_RoomEntry6', 'For hanging out in %limit% guest rooms that you do not own. Out of towner.');
INSERT INTO cms_texts VALUES ('badge_desc_ACH_RoomEntry7', 'For hanging out in %limit% guest rooms  that you do not own .Gold digger.');
INSERT INTO cms_texts VALUES ('badge_desc_ACH_RoomEntry8', 'For hanging out in %limit% guest rooms that you do not own. Orion.');
INSERT INTO cms_texts VALUES ('badge_desc_ACH_RoomEntry9', 'For hanging out in %limit% guest rooms that you do not own. Spaceman.');
INSERT INTO cms_texts VALUES ('badge_desc_ACH_Student1', 'For being guided by a Habboon Guide and confused no more');
INSERT INTO cms_texts VALUES ('badge_desc_ACH_TraderPass1', 'Without a trading pass you can\'t trade: you have to have an account that is 3 days old and you have to verify your email.');
INSERT INTO cms_texts VALUES ('badge_desc_ACH_VipClub1', 'For joining the VIP Club.');
INSERT INTO cms_texts VALUES ('badge_desc_ACH_VipClub2', 'For %limit% months of VIP Club membership.');
INSERT INTO cms_texts VALUES ('badge_desc_ACH_VipClub3', 'For %limit% months of VIP Club membership.');
INSERT INTO cms_texts VALUES ('badge_desc_ACH_VipClub4', 'For %limit% months of VIP Club membership.');
INSERT INTO cms_texts VALUES ('badge_desc_ACH_VipClub5', 'For %limit%  months of VIP Club membership.');
INSERT INTO cms_texts VALUES ('badge_desc_ADM', 'Member of the staff team');
INSERT INTO cms_texts VALUES ('badge_desc_BOT', 'Non-player character (this is a bot).');
INSERT INTO cms_texts VALUES ('badge_desc_HBA', 'Member of the moderation team');
INSERT INTO cms_texts VALUES ('badge_desc_HC1', 'Member of Habboon Club');
INSERT INTO cms_texts VALUES ('badge_desc_IT5', 'Successfully won a competition on Radio Otaku!');
INSERT INTO cms_texts VALUES ('badge_desc_NWB', 'Trial member of the moderation team');
INSERT INTO cms_texts VALUES ('badge_desc_RLX01', 'Found Astra - November 2010');
INSERT INTO cms_texts VALUES ('badge_desc_VIP', 'For joining the VIP Club.');
INSERT INTO cms_texts VALUES ('badge_desc_XXX', 'Dedicated member of Habboon');
INSERT INTO cms_texts VALUES ('badge_desc_Z63', 'Submitted an idea or bug petition that was added or fixed during beta');
INSERT INTO cms_texts VALUES ('badge_desc_Z64', 'Participated in the beta testing of Habboon');
INSERT INTO cms_texts VALUES ('badge_name_AC5', 'Quest Master');
INSERT INTO cms_texts VALUES ('badge_name_ACH_AIPerformanceVote1', 'Unknown Star I');
INSERT INTO cms_texts VALUES ('badge_name_ACH_AIPerformanceVote10', 'Notorious X');
INSERT INTO cms_texts VALUES ('badge_name_ACH_AIPerformanceVote2', 'Hidden Talent II');
INSERT INTO cms_texts VALUES ('badge_name_ACH_AIPerformanceVote3', 'Unique III');
INSERT INTO cms_texts VALUES ('badge_name_ACH_AIPerformanceVote4', 'Noteworthy IV');
INSERT INTO cms_texts VALUES ('badge_name_ACH_AIPerformanceVote5', 'Influental V');
INSERT INTO cms_texts VALUES ('badge_name_ACH_AIPerformanceVote6', 'Famous VI');
INSERT INTO cms_texts VALUES ('badge_name_ACH_AIPerformanceVote7', 'Grand VII');
INSERT INTO cms_texts VALUES ('badge_name_ACH_AIPerformanceVote8', 'Well-known VIII');
INSERT INTO cms_texts VALUES ('badge_name_ACH_AIPerformanceVote9', 'Glorious IX');
INSERT INTO cms_texts VALUES ('badge_name_ACH_AllTimeHotelPresence1', 'Online time I-Thunderstorm');
INSERT INTO cms_texts VALUES ('badge_name_ACH_AllTimeHotelPresence10', 'Online time X - F5 Tornado');
INSERT INTO cms_texts VALUES ('badge_name_ACH_AllTimeHotelPresence2', 'Online time II - Drizzle');
INSERT INTO cms_texts VALUES ('badge_name_ACH_AllTimeHotelPresence4', 'Online time IV - Blizzard');
INSERT INTO cms_texts VALUES ('badge_name_ACH_AllTimeHotelPresence5', 'Online time V- Haze');
INSERT INTO cms_texts VALUES ('badge_name_ACH_AllTimeHotelPresence6', 'Online time VI- Jet Stream');
INSERT INTO cms_texts VALUES ('badge_name_ACH_AllTimeHotelPresence7', 'Online time VII-  Cyclone');
INSERT INTO cms_texts VALUES ('badge_name_ACH_AllTimeHotelPresence8', 'Online time VIII- Meso Cyclone');
INSERT INTO cms_texts VALUES ('badge_name_ACH_AllTimeHotelPresence9', 'Online time IX-Tornado');
INSERT INTO cms_texts VALUES ('badge_name_ACH_AvatarLooks1', 'Looks that Kill');
INSERT INTO cms_texts VALUES ('badge_name_ACH_AvatarTags1', '5 Words of Wisdom');
INSERT INTO cms_texts VALUES ('badge_name_ACH_BasicClub1', 'Habbo Club member I');
INSERT INTO cms_texts VALUES ('badge_name_ACH_BasicClub2', 'Habbo Club member  II');
INSERT INTO cms_texts VALUES ('badge_name_ACH_BasicClub3', 'Habbo Club member  III');
INSERT INTO cms_texts VALUES ('badge_name_ACH_BasicClub4', 'Habbo Club member  IV');
INSERT INTO cms_texts VALUES ('badge_name_ACH_BasicClub5', 'Habbo Club member V');
INSERT INTO cms_texts VALUES ('badge_name_ACH_BattleBallTilesLocked1', 'Lord of the tiles I');
INSERT INTO cms_texts VALUES ('badge_name_ACH_BattleBallTilesLocked10', 'Lord of the tiles X');
INSERT INTO cms_texts VALUES ('badge_name_ACH_BattleBallTilesLocked11', 'Lord of the tiles XI');
INSERT INTO cms_texts VALUES ('badge_name_ACH_BattleBallTilesLocked12', 'Lord of the tiles XII');
INSERT INTO cms_texts VALUES ('badge_name_ACH_BattleBallTilesLocked13', 'Lord of the tiles XIII');
INSERT INTO cms_texts VALUES ('badge_name_ACH_BattleBallTilesLocked14', 'Lord of the tiles XIV');
INSERT INTO cms_texts VALUES ('badge_name_ACH_BattleBallTilesLocked15', 'Lord of the tiles XV');
INSERT INTO cms_texts VALUES ('badge_name_ACH_BattleBallTilesLocked16', 'Lord of the tiles XVI');
INSERT INTO cms_texts VALUES ('badge_name_ACH_BattleBallTilesLocked17', 'Lord of the tiles XVII');
INSERT INTO cms_texts VALUES ('badge_name_ACH_BattleBallTilesLocked18', 'Lord of the tiles XVIII');
INSERT INTO cms_texts VALUES ('badge_name_ACH_BattleBallTilesLocked19', 'Lord of the tiles XIX');
INSERT INTO cms_texts VALUES ('badge_name_ACH_BattleBallTilesLocked2', 'Lord of the tiles II');
INSERT INTO cms_texts VALUES ('badge_name_ACH_BattleBallTilesLocked20', 'Lord of the tiles XX');
INSERT INTO cms_texts VALUES ('badge_name_ACH_BattleBallTilesLocked3', 'Lord of the tiles III');
INSERT INTO cms_texts VALUES ('badge_name_ACH_BattleBallTilesLocked4', 'Lord of the tiles IV');
INSERT INTO cms_texts VALUES ('badge_name_ACH_BattleBallTilesLocked5', 'Lord of the tiles V');
INSERT INTO cms_texts VALUES ('badge_name_ACH_BattleBallTilesLocked6', 'Lord of the tiles VI');
INSERT INTO cms_texts VALUES ('badge_name_ACH_BattleBallTilesLocked7', 'Lord of the tiles VII');
INSERT INTO cms_texts VALUES ('badge_name_ACH_BattleBallTilesLocked8', 'Lord of the tiles VIII');
INSERT INTO cms_texts VALUES ('badge_name_ACH_BattleBallTilesLocked9', 'Lord of the tiles IX');
INSERT INTO cms_texts VALUES ('badge_name_ACH_EmailVerification1', 'True You');
INSERT INTO cms_texts VALUES ('badge_name_ACH_Forum1', 'Community Member');
INSERT INTO cms_texts VALUES ('badge_name_ACH_GameAuthorExperience1', 'Game Arcade owner I');
INSERT INTO cms_texts VALUES ('badge_name_ACH_GameAuthorExperience10', 'Game Arcade owner X');
INSERT INTO cms_texts VALUES ('badge_name_ACH_GameAuthorExperience11', 'Game Arcade owner XI');
INSERT INTO cms_texts VALUES ('badge_name_ACH_GameAuthorExperience12', 'Game Arcade owner XII');
INSERT INTO cms_texts VALUES ('badge_name_ACH_GameAuthorExperience13', 'Game Arcade owner XIII');
INSERT INTO cms_texts VALUES ('badge_name_ACH_GameAuthorExperience14', 'Game Arcade owner XIV');
INSERT INTO cms_texts VALUES ('badge_name_ACH_GameAuthorExperience15', 'Game Arcade owner XV');
INSERT INTO cms_texts VALUES ('badge_name_ACH_GameAuthorExperience16', 'Game Arcade owner XVI');
INSERT INTO cms_texts VALUES ('badge_name_ACH_GameAuthorExperience17', 'Game Arcade owner XVII');
INSERT INTO cms_texts VALUES ('badge_name_ACH_GameAuthorExperience18', 'Game Arcade owner XVIII');
INSERT INTO cms_texts VALUES ('badge_name_ACH_GameAuthorExperience19', 'Game Arcade owner XIX');
INSERT INTO cms_texts VALUES ('badge_name_ACH_GameAuthorExperience2', 'Game Arcade owner II');
INSERT INTO cms_texts VALUES ('badge_name_ACH_GameAuthorExperience20', 'Game Arcade owner XX');
INSERT INTO cms_texts VALUES ('badge_name_ACH_GameAuthorExperience3', 'Game Arcade owner III');
INSERT INTO cms_texts VALUES ('badge_name_ACH_GameAuthorExperience4', 'Game Arcade owner IV');
INSERT INTO cms_texts VALUES ('badge_name_ACH_GameAuthorExperience5', 'Game Arcade owner V');
INSERT INTO cms_texts VALUES ('badge_name_ACH_GameAuthorExperience6', 'Game Arcade owner VI');
INSERT INTO cms_texts VALUES ('badge_name_ACH_GameAuthorExperience7', 'Game Arcade owner VII');
INSERT INTO cms_texts VALUES ('badge_name_ACH_GameAuthorExperience8', 'Game Arcade owner VIII');
INSERT INTO cms_texts VALUES ('badge_name_ACH_GameAuthorExperience9', 'Game Arcade owner IX');
INSERT INTO cms_texts VALUES ('badge_name_ACH_GamePlayerExperience1', 'Player I');
INSERT INTO cms_texts VALUES ('badge_name_ACH_GamePlayerExperience10', 'Player X');
INSERT INTO cms_texts VALUES ('badge_name_ACH_GamePlayerExperience11', 'Player XI');
INSERT INTO cms_texts VALUES ('badge_name_ACH_GamePlayerExperience12', 'Player  XII');
INSERT INTO cms_texts VALUES ('badge_name_ACH_GamePlayerExperience13', 'Player  XIII');
INSERT INTO cms_texts VALUES ('badge_name_ACH_GamePlayerExperience14', 'Player  XIV');
INSERT INTO cms_texts VALUES ('badge_name_ACH_GamePlayerExperience15', 'Player  XV');
INSERT INTO cms_texts VALUES ('badge_name_ACH_GamePlayerExperience16', 'Player  XVI');
INSERT INTO cms_texts VALUES ('badge_name_ACH_GamePlayerExperience17', 'Player  XVII');
INSERT INTO cms_texts VALUES ('badge_name_ACH_GamePlayerExperience18', 'Player  XVIII');
INSERT INTO cms_texts VALUES ('badge_name_ACH_GamePlayerExperience19', 'Player  XIX');
INSERT INTO cms_texts VALUES ('badge_name_ACH_GamePlayerExperience2', 'Player II');
INSERT INTO cms_texts VALUES ('badge_name_ACH_GamePlayerExperience20', 'Player  XX');
INSERT INTO cms_texts VALUES ('badge_name_ACH_GamePlayerExperience3', 'Player III');
INSERT INTO cms_texts VALUES ('badge_name_ACH_GamePlayerExperience4', 'Player  IV');
INSERT INTO cms_texts VALUES ('badge_name_ACH_GamePlayerExperience5', 'Player  V');
INSERT INTO cms_texts VALUES ('badge_name_ACH_GamePlayerExperience6', 'Player VI');
INSERT INTO cms_texts VALUES ('badge_name_ACH_GamePlayerExperience7', 'Player  VII');
INSERT INTO cms_texts VALUES ('badge_name_ACH_GamePlayerExperience8', 'Player VIII');
INSERT INTO cms_texts VALUES ('badge_name_ACH_GamePlayerExperience9', 'Player  IX');
INSERT INTO cms_texts VALUES ('badge_name_ACH_GiftGiver1', 'Nice one I');
INSERT INTO cms_texts VALUES ('badge_name_ACH_GiftGiver10', 'Wealthy X');
INSERT INTO cms_texts VALUES ('badge_name_ACH_GiftGiver2', 'Well heeled II');
INSERT INTO cms_texts VALUES ('badge_name_ACH_GiftGiver3', 'Prosperous III');
INSERT INTO cms_texts VALUES ('badge_name_ACH_GiftGiver4', 'Well off IV');
INSERT INTO cms_texts VALUES ('badge_name_ACH_GiftGiver5', 'Made of money V');
INSERT INTO cms_texts VALUES ('badge_name_ACH_GiftGiver6', 'Stinking rich VI');
INSERT INTO cms_texts VALUES ('badge_name_ACH_GiftGiver7', 'Loaded VII');
INSERT INTO cms_texts VALUES ('badge_name_ACH_GiftGiver8', 'Generous one VIII');
INSERT INTO cms_texts VALUES ('badge_name_ACH_GiftGiver9', 'Rolling in it IX');
INSERT INTO cms_texts VALUES ('badge_name_ACH_GiftReceiver1', 'Greet me I');
INSERT INTO cms_texts VALUES ('badge_name_ACH_GiftReceiver10', 'Want to go out with me? X');
INSERT INTO cms_texts VALUES ('badge_name_ACH_GiftReceiver2', 'Like me a bit more II');
INSERT INTO cms_texts VALUES ('badge_name_ACH_GiftReceiver3', 'Cherish me III');
INSERT INTO cms_texts VALUES ('badge_name_ACH_GiftReceiver4', 'Adore me IV');
INSERT INTO cms_texts VALUES ('badge_name_ACH_GiftReceiver5', 'Respect me V');
INSERT INTO cms_texts VALUES ('badge_name_ACH_GiftReceiver6', 'Donate me VI');
INSERT INTO cms_texts VALUES ('badge_name_ACH_GiftReceiver7', 'Value me VII');
INSERT INTO cms_texts VALUES ('badge_name_ACH_GiftReceiver8', 'Be wild about me VIII');
INSERT INTO cms_texts VALUES ('badge_name_ACH_GiftReceiver9', 'Be hooked on me IX');
INSERT INTO cms_texts VALUES ('badge_name_ACH_Graduate1', 'The Graduate');
INSERT INTO cms_texts VALUES ('badge_name_ACH_Login1', 'Traveller I');
INSERT INTO cms_texts VALUES ('badge_name_ACH_Login10', 'Phoenix X');
INSERT INTO cms_texts VALUES ('badge_name_ACH_Login2', 'Preferred Guest II');
INSERT INTO cms_texts VALUES ('badge_name_ACH_Login3', 'Frequent Resident III');
INSERT INTO cms_texts VALUES ('badge_name_ACH_Login4', 'High Roller IV');
INSERT INTO cms_texts VALUES ('badge_name_ACH_Login5', 'A Piece Of The Furniture V');
INSERT INTO cms_texts VALUES ('badge_name_ACH_Login6', 'Covered With Moss VI');
INSERT INTO cms_texts VALUES ('badge_name_ACH_Login7', 'Space dust on your shoes VII');
INSERT INTO cms_texts VALUES ('badge_name_ACH_Login8', 'Rotten Tomato VIII');
INSERT INTO cms_texts VALUES ('badge_name_ACH_Login9', 'Habbo Stayer IX');
INSERT INTO cms_texts VALUES ('badge_name_ACH_MGM1', 'Baby Shower I');
INSERT INTO cms_texts VALUES ('badge_name_ACH_MGM10', 'Prom X');
INSERT INTO cms_texts VALUES ('badge_name_ACH_MGM2', 'Luau II');
INSERT INTO cms_texts VALUES ('badge_name_ACH_MGM3', 'Block party III');
INSERT INTO cms_texts VALUES ('badge_name_ACH_MGM4', 'Dance Party IV');
INSERT INTO cms_texts VALUES ('badge_name_ACH_MGM5', 'Slumber Party V');
INSERT INTO cms_texts VALUES ('badge_name_ACH_MGM6', 'Reunion VI');
INSERT INTO cms_texts VALUES ('badge_name_ACH_MGM7', 'Housewarming VII');
INSERT INTO cms_texts VALUES ('badge_name_ACH_MGM8', 'Ball VIII');
INSERT INTO cms_texts VALUES ('badge_name_ACH_MGM9', 'Fiesta IX');
INSERT INTO cms_texts VALUES ('badge_name_ACH_Motto1', 'Master of Words');
INSERT INTO cms_texts VALUES ('badge_name_ACH_Name1', 'For changing your name');
INSERT INTO cms_texts VALUES ('badge_name_ACH_PetFeeding1', 'They\'re eating all my credits! I');
INSERT INTO cms_texts VALUES ('badge_name_ACH_PetFeeding10', 'They\'re eating all my credits! X');
INSERT INTO cms_texts VALUES ('badge_name_ACH_PetFeeding2', 'They\'re eating all my credits! II');
INSERT INTO cms_texts VALUES ('badge_name_ACH_PetFeeding3', 'They\'re eating all my credits! III');
INSERT INTO cms_texts VALUES ('badge_name_ACH_PetFeeding4', 'They\'re eating all my credits! IV');
INSERT INTO cms_texts VALUES ('badge_name_ACH_PetFeeding5', 'They\'re eating all my credits! V');
INSERT INTO cms_texts VALUES ('badge_name_ACH_PetFeeding6', 'They\'re eating all my credits! VI');
INSERT INTO cms_texts VALUES ('badge_name_ACH_PetFeeding7', 'They\'re eating all my credits! VII');
INSERT INTO cms_texts VALUES ('badge_name_ACH_PetFeeding8', 'They\'re eating all my credits! VIII');
INSERT INTO cms_texts VALUES ('badge_name_ACH_PetFeeding9', 'They\'re eating all my credits! IX');
INSERT INTO cms_texts VALUES ('badge_name_ACH_PetLevelUp1', 'My pet knows a trick! I');
INSERT INTO cms_texts VALUES ('badge_name_ACH_PetLevelUp10', 'Pet Whisperer X');
INSERT INTO cms_texts VALUES ('badge_name_ACH_PetLevelUp2', 'My pet knows a trick or two! II');
INSERT INTO cms_texts VALUES ('badge_name_ACH_PetLevelUp3', 'I play with pets III');
INSERT INTO cms_texts VALUES ('badge_name_ACH_PetLevelUp4', 'My pet is tougher than yours IV');
INSERT INTO cms_texts VALUES ('badge_name_ACH_PetLevelUp5', 'My pets know some tricks V');
INSERT INTO cms_texts VALUES ('badge_name_ACH_PetLevelUp6', 'My pets know a trick or two VI');
INSERT INTO cms_texts VALUES ('badge_name_ACH_PetLevelUp7', 'Animal trainer VII');
INSERT INTO cms_texts VALUES ('badge_name_ACH_PetLevelUp8', 'Animal trainer VIII');
INSERT INTO cms_texts VALUES ('badge_name_ACH_PetLevelUp9', 'Animal trainer IX');
INSERT INTO cms_texts VALUES ('badge_name_ACH_PetLover1', 'Can I Keep Him? I');
INSERT INTO cms_texts VALUES ('badge_name_ACH_PetLover10', 'Zoo Keeper X');
INSERT INTO cms_texts VALUES ('badge_name_ACH_PetLover2', 'I\'ll soon have a kennel II');
INSERT INTO cms_texts VALUES ('badge_name_ACH_PetLover3', 'I\'ll soon have a kennel III');
INSERT INTO cms_texts VALUES ('badge_name_ACH_PetLover4', 'I\'ll soon have a kennel IV');
INSERT INTO cms_texts VALUES ('badge_name_ACH_PetLover5', 'Pet shop keeper V');
INSERT INTO cms_texts VALUES ('badge_name_ACH_PetLover6', 'Pet shop keeper VI');
INSERT INTO cms_texts VALUES ('badge_name_ACH_PetLover7', 'Pet shop keeper VII');
INSERT INTO cms_texts VALUES ('badge_name_ACH_PetLover8', 'Pet shop keeper VIII');
INSERT INTO cms_texts VALUES ('badge_name_ACH_PetLover9', 'My herd is bigger than yours IX');
INSERT INTO cms_texts VALUES ('badge_name_ACH_PetRespectGiver1', 'I like your pet! I');
INSERT INTO cms_texts VALUES ('badge_name_ACH_PetRespectGiver10', 'I\'ve shared my love X');
INSERT INTO cms_texts VALUES ('badge_name_ACH_PetRespectGiver2', 'Scratch my back and I\'ll scratch yours II');
INSERT INTO cms_texts VALUES ('badge_name_ACH_PetRespectGiver3', 'Pat pat! III');
INSERT INTO cms_texts VALUES ('badge_name_ACH_PetRespectGiver4', 'Scratch scratch! IV');
INSERT INTO cms_texts VALUES ('badge_name_ACH_PetRespectGiver5', 'Pet lover V');
INSERT INTO cms_texts VALUES ('badge_name_ACH_PetRespectGiver6', 'Pet lover VI');
INSERT INTO cms_texts VALUES ('badge_name_ACH_PetRespectGiver7', 'Pet lover VII');
INSERT INTO cms_texts VALUES ('badge_name_ACH_PetRespectGiver8', 'Pet lover VIII');
INSERT INTO cms_texts VALUES ('badge_name_ACH_PetRespectGiver9', 'Pet lover IX');
INSERT INTO cms_texts VALUES ('badge_name_ACH_PetRespectReceiver1', 'Someone likes my pet I');
INSERT INTO cms_texts VALUES ('badge_name_ACH_PetRespectReceiver10', 'People adore my pets! X');
INSERT INTO cms_texts VALUES ('badge_name_ACH_PetRespectReceiver2', 'My pets get all the love II');
INSERT INTO cms_texts VALUES ('badge_name_ACH_PetRespectReceiver3', 'My pets get all the love III');
INSERT INTO cms_texts VALUES ('badge_name_ACH_PetRespectReceiver4', 'My pets get all the love IV');
INSERT INTO cms_texts VALUES ('badge_name_ACH_PetRespectReceiver5', 'My pets get all the love V');
INSERT INTO cms_texts VALUES ('badge_name_ACH_PetRespectReceiver6', 'My pets get all the love VI');
INSERT INTO cms_texts VALUES ('badge_name_ACH_PetRespectReceiver7', 'My pets get all the love VII');
INSERT INTO cms_texts VALUES ('badge_name_ACH_PetRespectReceiver8', 'My pets get all the love VIII');
INSERT INTO cms_texts VALUES ('badge_name_ACH_PetRespectReceiver9', 'My pets get all the love IX');
INSERT INTO cms_texts VALUES ('badge_name_ACH_RegistrationDuration1', '10 % True Habbo I');
INSERT INTO cms_texts VALUES ('badge_name_ACH_RegistrationDuration10', '100% True Habbo X');
INSERT INTO cms_texts VALUES ('badge_name_ACH_RegistrationDuration2', '20 % True Habbo II');
INSERT INTO cms_texts VALUES ('badge_name_ACH_RegistrationDuration3', '30 % True Habbo III');
INSERT INTO cms_texts VALUES ('badge_name_ACH_RegistrationDuration4', '40 % True Habbo IV');
INSERT INTO cms_texts VALUES ('badge_name_ACH_RegistrationDuration5', '50 % True Habbo V');
INSERT INTO cms_texts VALUES ('badge_name_ACH_RegistrationDuration6', '60 % True Habbo VI');
INSERT INTO cms_texts VALUES ('badge_name_ACH_RegistrationDuration7', '70 % True Habbo VII');
INSERT INTO cms_texts VALUES ('badge_name_ACH_RegistrationDuration8', '80 % True Habbo VIII');
INSERT INTO cms_texts VALUES ('badge_name_ACH_RegistrationDuration9', '90 % True Habbo IX');
INSERT INTO cms_texts VALUES ('badge_name_ACH_RespectEarned1', '10% Respected Habbo I');
INSERT INTO cms_texts VALUES ('badge_name_ACH_RespectEarned10', '100 % Respected Habbo X');
INSERT INTO cms_texts VALUES ('badge_name_ACH_RespectEarned2', '20% Respected Habbo II');
INSERT INTO cms_texts VALUES ('badge_name_ACH_RespectEarned3', '30% Respected Habbo III');
INSERT INTO cms_texts VALUES ('badge_name_ACH_RespectEarned4', '40% Respected Habbo IV');
INSERT INTO cms_texts VALUES ('badge_name_ACH_RespectEarned5', '50% Respected Habbo V');
INSERT INTO cms_texts VALUES ('badge_name_ACH_RespectEarned6', '60% Respected Habbo VI');
INSERT INTO cms_texts VALUES ('badge_name_ACH_RespectEarned7', '70% Respected Habbo VII');
INSERT INTO cms_texts VALUES ('badge_name_ACH_RespectEarned8', '80% Respected Habbo VIII');
INSERT INTO cms_texts VALUES ('badge_name_ACH_RespectEarned9', '90% Respected Habbo IX');
INSERT INTO cms_texts VALUES ('badge_name_ACH_RespectGiven1', 'Nice as pie! I');
INSERT INTO cms_texts VALUES ('badge_name_ACH_RoomEntry1', 'Room Raider I');
INSERT INTO cms_texts VALUES ('badge_name_ACH_RoomEntry10', 'Pilgrim X');
INSERT INTO cms_texts VALUES ('badge_name_ACH_RoomEntry2', 'Running Room Raider II');
INSERT INTO cms_texts VALUES ('badge_name_ACH_RoomEntry3', 'Ultimate Room Raider III');
INSERT INTO cms_texts VALUES ('badge_name_ACH_RoomEntry4', 'Day tripper IV');
INSERT INTO cms_texts VALUES ('badge_name_ACH_RoomEntry5', 'Vacationer V');
INSERT INTO cms_texts VALUES ('badge_name_ACH_RoomEntry6', 'House Guest VI');
INSERT INTO cms_texts VALUES ('badge_name_ACH_RoomEntry7', 'Traveler VII');
INSERT INTO cms_texts VALUES ('badge_name_ACH_RoomEntry8', 'Sightseer VIII');
INSERT INTO cms_texts VALUES ('badge_name_ACH_RoomEntry9', 'Habitué IX');
INSERT INTO cms_texts VALUES ('badge_name_ACH_Student1', 'Habbo Student');
INSERT INTO cms_texts VALUES ('badge_name_ACH_TraderPass1', 'Trading pass');
INSERT INTO cms_texts VALUES ('badge_name_ACH_VipClub1', 'VIP member I');
INSERT INTO cms_texts VALUES ('badge_name_ACH_VipClub2', 'VIP member II');
INSERT INTO cms_texts VALUES ('badge_name_ACH_VipClub3', 'VIP member III');
INSERT INTO cms_texts VALUES ('badge_name_ACH_VipClub4', 'VIP member IV');
INSERT INTO cms_texts VALUES ('badge_name_ACH_VipClub5', 'VIP member V');
INSERT INTO cms_texts VALUES ('badge_name_ADM', 'Hotel Staff');
INSERT INTO cms_texts VALUES ('badge_name_BOT', 'NPC');
INSERT INTO cms_texts VALUES ('badge_name_HappyHour1', 'HappyHour1');
INSERT INTO cms_texts VALUES ('badge_name_HBA', 'Habboon Moderator');
INSERT INTO cms_texts VALUES ('badge_name_HC1', 'Habboon Club');
INSERT INTO cms_texts VALUES ('badge_name_IT5', 'Radio Otaku Winner');
INSERT INTO cms_texts VALUES ('badge_name_NWB', 'Habboon Moderator');
INSERT INTO cms_texts VALUES ('badge_name_RLX01', 'Quest Master');
INSERT INTO cms_texts VALUES ('badge_name_VIP', 'Very Important Person');
INSERT INTO cms_texts VALUES ('badge_name_XXX', 'Habboon eXpert');
INSERT INTO cms_texts VALUES ('badge_name_Z63', 'Valued Beta Tester');
INSERT INTO cms_texts VALUES ('badge_name_Z64', 'Beta Tester');
INSERT INTO cms_texts VALUES ('fx_1', 'Spotlight');
INSERT INTO cms_texts VALUES ('fx_10', 'Flies');
INSERT INTO cms_texts VALUES ('fx_10_desc', 'Get a shower!');
INSERT INTO cms_texts VALUES ('fx_11', 'X-Ray');
INSERT INTO cms_texts VALUES ('fx_11_desc', 'X-Rayed');
INSERT INTO cms_texts VALUES ('fx_12', 'Frozen');
INSERT INTO cms_texts VALUES ('fx_12_desc', 'Ice cold!');
INSERT INTO cms_texts VALUES ('fx_13', 'Ghost');
INSERT INTO cms_texts VALUES ('fx_13_desc', 'Spooky');
INSERT INTO cms_texts VALUES ('fx_14', 'Pink Hover board');
INSERT INTO cms_texts VALUES ('fx_14_desc', 'See the world on pink hover board.');
INSERT INTO cms_texts VALUES ('fx_15', 'Yellow hover board');
INSERT INTO cms_texts VALUES ('fx_15_desc', 'As yellow as a submarine.');
INSERT INTO cms_texts VALUES ('fx_16', 'Microphone');
INSERT INTO cms_texts VALUES ('fx_16_desc', 'Habbo Dragonfly microphone');
INSERT INTO cms_texts VALUES ('fx_17', 'UFO in pink');
INSERT INTO cms_texts VALUES ('fx_17_desc', 'Fly away with this UFO of love.');
INSERT INTO cms_texts VALUES ('fx_18', 'UFO in yellow');
INSERT INTO cms_texts VALUES ('fx_18_desc', 'Unidentified yellow flying object.');
INSERT INTO cms_texts VALUES ('fx_19', 'BluesMobile');
INSERT INTO cms_texts VALUES ('fx_19_desc', 'We\'re on a mission from...');
INSERT INTO cms_texts VALUES ('fx_1_desc', 'Shine the light on me!');
INSERT INTO cms_texts VALUES ('fx_2', 'Hover board');
INSERT INTO cms_texts VALUES ('fx_20', 'HelpMobile');
INSERT INTO cms_texts VALUES ('fx_20_desc', 'How can I help?');
INSERT INTO cms_texts VALUES ('fx_21', 'RebelMobile');
INSERT INTO cms_texts VALUES ('fx_21_desc', 'Drive like lightning, crash like thunder!');
INSERT INTO cms_texts VALUES ('fx_22', 'BadMobile');
INSERT INTO cms_texts VALUES ('fx_22_desc', 'This is black sunshine!');
INSERT INTO cms_texts VALUES ('fx_23', 'totem_man_name');
INSERT INTO cms_texts VALUES ('fx_24', 'totem_merdragon_name');
INSERT INTO cms_texts VALUES ('fx_25', 'totem_eagle_name');
INSERT INTO cms_texts VALUES ('fx_26', 'totem_mix_name');
INSERT INTO cms_texts VALUES ('fx_27', 'Mighty Viking');
INSERT INTO cms_texts VALUES ('fx_27_desc', 'Do you know how to train your Dragon?');
INSERT INTO cms_texts VALUES ('fx_2_desc', 'The future of transportation.');
INSERT INTO cms_texts VALUES ('fx_3', 'UFO');
INSERT INTO cms_texts VALUES ('fx_31', 'Cheetos Effect');
INSERT INTO cms_texts VALUES ('fx_31_desc', 'Be a Cheetos!');
INSERT INTO cms_texts VALUES ('fx_32', 'Minion Effect');
INSERT INTO cms_texts VALUES ('fx_32_desc', 'Despicable Me');
INSERT INTO cms_texts VALUES ('fx_3_desc', 'Help, I\'m being abducted.');
INSERT INTO cms_texts VALUES ('fx_4', 'Twinkle');
INSERT INTO cms_texts VALUES ('fx_4_desc', 'Twinkle like the star you are.');
INSERT INTO cms_texts VALUES ('fx_5', 'Torch');
INSERT INTO cms_texts VALUES ('fx_5_desc', 'Light the dark corners of your existence.');
INSERT INTO cms_texts VALUES ('fx_6', 'HRJP-3000');
INSERT INTO cms_texts VALUES ('fx_6_desc', 'Habbo Rocket Jet Pack.');
INSERT INTO cms_texts VALUES ('fx_7', 'Butterfly effect');
INSERT INTO cms_texts VALUES ('fx_7_desc', 'Let the butterflies flap their wings.');
INSERT INTO cms_texts VALUES ('fx_8', 'Fireflies');
INSERT INTO cms_texts VALUES ('fx_8_desc', 'Light my fire');
INSERT INTO cms_texts VALUES ('fx_9', 'Love Birds');
INSERT INTO cms_texts VALUES ('fx_9_desc', 'Love is in the air.');
INSERT INTO cms_texts VALUES ('handitem1', 'tea');
INSERT INTO cms_texts VALUES ('handitem10', 'latte');
INSERT INTO cms_texts VALUES ('handitem11', 'mocha');
INSERT INTO cms_texts VALUES ('handitem12', 'macchiato');
INSERT INTO cms_texts VALUES ('handitem13', 'espresso');
INSERT INTO cms_texts VALUES ('handitem14', 'filter');
INSERT INTO cms_texts VALUES ('handitem15', 'iced');
INSERT INTO cms_texts VALUES ('handitem16', 'cappuccino');
INSERT INTO cms_texts VALUES ('handitem17', 'java');
INSERT INTO cms_texts VALUES ('handitem18', 'tap');
INSERT INTO cms_texts VALUES ('handitem19', 'cola');
INSERT INTO cms_texts VALUES ('handitem2', 'juice');
INSERT INTO cms_texts VALUES ('handitem20', 'camera');
INSERT INTO cms_texts VALUES ('handitem21', 'hamburger');
INSERT INTO cms_texts VALUES ('handitem22', 'lime soda');
INSERT INTO cms_texts VALUES ('handitem23', 'beetroot soda');
INSERT INTO cms_texts VALUES ('handitem24', 'bubble juice from 1978');
INSERT INTO cms_texts VALUES ('handitem25', 'love potion');
INSERT INTO cms_texts VALUES ('handitem26', 'calippo');
INSERT INTO cms_texts VALUES ('handitem27', 'tea');
INSERT INTO cms_texts VALUES ('handitem28', 'sake');
INSERT INTO cms_texts VALUES ('handitem29', 'tomato juice');
INSERT INTO cms_texts VALUES ('handitem3', 'carrot');
INSERT INTO cms_texts VALUES ('handitem30', 'radioactive liquid');
INSERT INTO cms_texts VALUES ('handitem31', 'pink champagne');
INSERT INTO cms_texts VALUES ('handitem34', 'fish');
INSERT INTO cms_texts VALUES ('handitem35', 'pink champagne');
INSERT INTO cms_texts VALUES ('handitem4', 'ice-cream');
INSERT INTO cms_texts VALUES ('handitem41', 'sumppi-kuppi');
INSERT INTO cms_texts VALUES ('handitem43', 'chilled soda');
INSERT INTO cms_texts VALUES ('handitem5', 'milk');
INSERT INTO cms_texts VALUES ('handitem50', 'cider');
INSERT INTO cms_texts VALUES ('handitem53', 'espresso');
INSERT INTO cms_texts VALUES ('handitem57', 'cherry soda');
INSERT INTO cms_texts VALUES ('handitem6', 'blackcurrant');
INSERT INTO cms_texts VALUES ('handitem7', 'water');
INSERT INTO cms_texts VALUES ('handitem8', 'regular');
INSERT INTO cms_texts VALUES ('handitem9', 'decaff');
INSERT INTO cms_texts VALUES ('pet.command.0', 'free');
INSERT INTO cms_texts VALUES ('pet.command.1', 'sit');
INSERT INTO cms_texts VALUES ('pet.command.10', 'speak');
INSERT INTO cms_texts VALUES ('pet.command.11', 'play');
INSERT INTO cms_texts VALUES ('pet.command.12', 'silent');
INSERT INTO cms_texts VALUES ('pet.command.13', 'nest');
INSERT INTO cms_texts VALUES ('pet.command.14', 'drink');
INSERT INTO cms_texts VALUES ('pet.command.15', 'follow left');
INSERT INTO cms_texts VALUES ('pet.command.16', 'follow right');
INSERT INTO cms_texts VALUES ('pet.command.2', 'down');
INSERT INTO cms_texts VALUES ('pet.command.3', 'here');
INSERT INTO cms_texts VALUES ('pet.command.4', 'beg');
INSERT INTO cms_texts VALUES ('pet.command.5', 'play dead');
INSERT INTO cms_texts VALUES ('pet.command.6', 'stay');
INSERT INTO cms_texts VALUES ('pet.command.7', 'follow');
INSERT INTO cms_texts VALUES ('pet.command.8', 'stand');
INSERT INTO cms_texts VALUES ('pet.command.9', 'jump');

-- ----------------------------
-- Table structure for `credit_vouchers`
-- ----------------------------
DROP TABLE IF EXISTS `credit_vouchers`;
CREATE TABLE `credit_vouchers` (
  `code` varchar(50) NOT NULL,
  `value` int(11) NOT NULL DEFAULT '0',
  KEY `code` (`code`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of credit_vouchers
-- ----------------------------

-- ----------------------------
-- Table structure for `ecotron_rewards`
-- ----------------------------
DROP TABLE IF EXISTS `ecotron_rewards`;
CREATE TABLE `ecotron_rewards` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `display_id` int(10) unsigned NOT NULL,
  `item_id` int(10) unsigned NOT NULL,
  `reward_level` int(11) unsigned NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=27 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of ecotron_rewards
-- ----------------------------
INSERT INTO ecotron_rewards VALUES ('1', '2857', '1542', '5');
INSERT INTO ecotron_rewards VALUES ('2', '2862', '1547', '4');
INSERT INTO ecotron_rewards VALUES ('3', '2799', '1485', '3');
INSERT INTO ecotron_rewards VALUES ('4', '2802', '1487', '3');
INSERT INTO ecotron_rewards VALUES ('5', '2818', '1503', '3');
INSERT INTO ecotron_rewards VALUES ('6', '2797', '1483', '2');
INSERT INTO ecotron_rewards VALUES ('7', '2800', '1486', '2');
INSERT INTO ecotron_rewards VALUES ('8', '2816', '1501', '2');
INSERT INTO ecotron_rewards VALUES ('9', '2805', '1490', '1');
INSERT INTO ecotron_rewards VALUES ('10', '2808', '1493', '1');
INSERT INTO ecotron_rewards VALUES ('11', '2810', '1495', '1');
INSERT INTO ecotron_rewards VALUES ('12', '2796', '1482', '1');
INSERT INTO ecotron_rewards VALUES ('13', '2813', '1498', '1');
INSERT INTO ecotron_rewards VALUES ('14', '2819', '1504', '1');
INSERT INTO ecotron_rewards VALUES ('15', '2794', '1480', '2');
INSERT INTO ecotron_rewards VALUES ('16', '2809', '1494', '2');
INSERT INTO ecotron_rewards VALUES ('17', '2815', '1500', '2');
INSERT INTO ecotron_rewards VALUES ('18', '2793', '1479', '2');
INSERT INTO ecotron_rewards VALUES ('19', '2803', '1488', '2');
INSERT INTO ecotron_rewards VALUES ('20', '2820', '1505', '2');
INSERT INTO ecotron_rewards VALUES ('21', '4102', '1764', '2');
INSERT INTO ecotron_rewards VALUES ('22', '4104', '1766', '2');
INSERT INTO ecotron_rewards VALUES ('23', '4105', '1767', '2');
INSERT INTO ecotron_rewards VALUES ('24', '2795', '1481', '2');
INSERT INTO ecotron_rewards VALUES ('25', '2798', '1484', '2');
INSERT INTO ecotron_rewards VALUES ('26', '2814', '1499', '2');

-- ----------------------------
-- Table structure for `furniture`
-- ----------------------------
DROP TABLE IF EXISTS `furniture`;
CREATE TABLE `furniture` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `public_name` text NOT NULL COMMENT 'temp only',
  `item_name` varchar(100) NOT NULL,
  `type` enum('s','i','e','h','v') NOT NULL DEFAULT 's',
  `width` int(11) NOT NULL DEFAULT '1',
  `length` int(11) NOT NULL DEFAULT '1',
  `stack_height` double NOT NULL DEFAULT '1',
  `can_stack` enum('0','1') NOT NULL DEFAULT '1',
  `can_sit` enum('0','1') NOT NULL DEFAULT '0',
  `is_walkable` enum('0','1') NOT NULL DEFAULT '0',
  `sprite_id` int(11) NOT NULL,
  `allow_recycle` enum('0','1') NOT NULL DEFAULT '1',
  `allow_trade` enum('0','1') NOT NULL DEFAULT '1',
  `allow_marketplace_sell` enum('0','1') NOT NULL DEFAULT '1',
  `allow_gift` enum('0','1') NOT NULL DEFAULT '1',
  `allow_inventory_stack` enum('0','1') NOT NULL DEFAULT '1',
  `interaction_type` enum('default','gate','postit','roomeffect','dimmer','trophy','bed','scoreboard','vendingmachine','alert','onewaygate','loveshuffler','habbowheel','dice','bottle','teleport','rentals','pet','football_doorblue','football_doorred','football_ball','football_portery1','football_portery2','roller','water','ball','bb_red_gate','bb_green_gate','bb_yellow_gate','bb_puck','bb_blue_gate','bb_patch','bb_teleport','blue_score','green_score','red_score','yellow_score','fbgate','tagpole','counter','red_goal','blue_goal','yellow_goal','green_goal') NOT NULL DEFAULT 'default',
  `interaction_modes_count` int(11) NOT NULL DEFAULT '1',
  `vending_ids` varchar(100) NOT NULL DEFAULT '0',
  `is_arrow` enum('0','1') NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=3568406 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of furniture
-- ----------------------------
INSERT INTO furniture VALUES ('1', 'Bookcase', 'shelves_norja', 's', '1', '1', '1', '0', '0', '0', '13', '1', '1', '1', '1', '1', 'default', '1', '0', '0');
INSERT INTO furniture VALUES ('2', 'Bookcase', 'shelves_polyfon', 's', '2', '1', '1', '0', '0', '0', '14', '1', '1', '1', '1', '1', 'default', '1', '0', '0');
INSERT INTO furniture VALUES ('3', 'Bookcase', 'shelves_silo', 's', '2', '1', '1', '0', '0', '0', '15', '1', '1', '1', '1', '1', 'default', '1', '0', '0');
INSERT INTO furniture VALUES ('4', 'Small Coffee Table', 'table_polyfon_small', 's', '2', '2', '1', '0', '0', '0', '17', '1', '1', '1', '1', '1', 'default', '1', '0', '0');
INSERT INTO furniture VALUES ('5', 'Dining Chair', 'chair_polyfon', 's', '1', '1', '1', '0', '1', '0', '18', '1', '1', '1', '1', '1', 'default', '1', '0', '0');
INSERT INTO furniture VALUES ('6', 'Coffee Table', 'table_norja_med', 's', '2', '2', '1', '1', '0', '0', '20', '1', '1', '1', '1', '1', 'default', '1', '0', '0');
INSERT INTO furniture VALUES ('7', 'Coffee Table', 'table_silo_med', 's', '2', '2', '1', '1', '0', '0', '21', '1', '1', '1', '1', '1', 'default', '1', '0', '0');
INSERT INTO furniture VALUES ('8', 'Occasional Table', 'table_plasto_4leg', 's', '2', '2', '1', '1', '0', '0', '22', '1', '1', '1', '1', '1', 'default', '1', '0', '0');
INSERT INTO furniture VALUES ('9', 'Round Dining Table', 'table_plasto_round', 's', '2', '2', '1', '1', '0', '0', '23', '1', '1', '1', '1', '1', 'default', '1', '0', '0');
INSERT INTO furniture VALUES ('10', 'Square Dining Table', 'table_plasto_bigsquare', 's', '2', '2', '1', '1', '0', '0', '24', '1', '1', '1', '1', '1', 'default', '1', '0', '0');
INSERT INTO furniture VALUES ('11', 'Shelf', 'stand_polyfon_z', 's', '1', '1', '0.5', '1', '0', '0', '25', '1', '1', '1', '1', '1', 'default', '1', '0', '0');
INSERT INTO furniture VALUES ('12', 'Dining Chair', 'chair_silo', 's', '1', '1', '1.1', '0', '1', '0', '26', '1', '1', '1', '1', '1', 'default', '1', '0', '0');
INSERT INTO furniture VALUES ('13', 'Cushioned', 'sofa_silo', 's', '2', '1', '1.1', '0', '1', '0', '28', '1', '1', '1', '1', '1', 'default', '1', '0', '0');
INSERT INTO furniture VALUES ('14', 'Bench', 'couch_norja', 's', '2', '1', '1', '0', '1', '0', '29', '1', '1', '1', '1', '1', 'default', '1', '0', '0');
INSERT INTO furniture VALUES ('15', 'Chair', 'chair_norja', 's', '1', '1', '1', '0', '1', '0', '30', '1', '1', '1', '1', '1', 'default', '1', '0', '0');
INSERT INTO furniture VALUES ('16', 'Large Coffee Table', 'table_polyfon_med', 's', '2', '2', '1', '1', '0', '0', '31', '1', '1', '1', '1', '1', 'default', '1', '0', '0');
INSERT INTO furniture VALUES ('17', 'Doormat', 'doormat_love', 's', '1', '1', '0.1', '0', '0', '1', '32', '1', '1', '1', '1', '1', 'default', '1', '0', '0');
INSERT INTO furniture VALUES ('18', 'Doormat', 'doormat_plain', 's', '1', '1', '0.1', '0', '0', '1', '33', '1', '1', '1', '1', '1', 'default', '1', '0', '0');
INSERT INTO furniture VALUES ('19', 'Armchair', 'sofachair_polyfon', 's', '1', '1', '1.1', '0', '1', '0', '34', '1', '1', '1', '1', '1', 'default', '1', '0', '0');
INSERT INTO furniture VALUES ('20', 'Two-seater Sofa', 'sofa_polyfon', 's', '2', '1', '1.1', '0', '1', '0', '35', '1', '1', '1', '1', '1', 'default', '1', '0', '0');
INSERT INTO furniture VALUES ('21', 'Large', 'sofachair_silo', 's', '1', '1', '1.1', '0', '1', '0', '36', '1', '1', '1', '1', '1', 'default', '1', '0', '0');
INSERT INTO furniture VALUES ('22', 'Plastic Pod Chair', 'chair_plasty', 's', '1', '1', '1', '0', '1', '0', '38', '1', '1', '1', '1', '1', 'default', '1', '0', '0');
INSERT INTO furniture VALUES ('23', 'Chair', 'chair_plasto', 's', '1', '1', '1', '0', '1', '0', '39', '1', '1', '1', '1', '1', 'default', '1', '0', '0');
INSERT INTO furniture VALUES ('24', 'Occasional Table', 'table_plasto_square', 's', '1', '1', '1', '1', '0', '0', '40', '1', '1', '1', '1', '1', 'default', '1', '0', '0');
INSERT INTO furniture VALUES ('25', 'Double Bed', 'bed_polyfon', 's', '2', '3', '1.8', '0', '0', '0', '41', '1', '1', '1', '1', '1', 'bed', '1', '0', '0');
INSERT INTO furniture VALUES ('26', 'Single Bed', 'bed_polyfon_one', 's', '1', '3', '1.8', '0', '0', '0', '42', '1', '1', '1', '1', '1', 'bed', '1', '0', '0');
INSERT INTO furniture VALUES ('27', 'Plain Single Bed', 'bed_trad_one', 's', '2', '3', '1', '0', '0', '0', '43', '1', '1', '1', '1', '1', 'bed', '1', '0', '0');
INSERT INTO furniture VALUES ('28', 'Plain Double Bed', 'bed_trad', 's', '2', '3', '1', '0', '0', '0', '44', '1', '1', '1', '1', '1', 'bed', '1', '0', '0');
INSERT INTO furniture VALUES ('29', 'Single Bed', 'bed_silo_one', 's', '1', '3', '1.8', '0', '0', '0', '45', '1', '1', '1', '1', '1', 'bed', '1', '0', '0');
INSERT INTO furniture VALUES ('30', 'Double Bed', 'bed_silo_two', 's', '2', '3', '1.8', '0', '0', '0', '46', '1', '1', '1', '1', '1', 'bed', '1', '0', '0');
INSERT INTO furniture VALUES ('31', 'Occasional Table', 'table_silo_small', 's', '1', '1', '1', '1', '0', '0', '47', '1', '1', '1', '1', '1', 'default', '1', '0', '0');
INSERT INTO furniture VALUES ('32', 'Double Bed', 'bed_armas_two', 's', '2', '3', '1.8', '0', '0', '0', '48', '1', '1', '1', '1', '1', 'bed', '1', '0', '0');
INSERT INTO furniture VALUES ('33', 'bed_budget_one', 'bed_budget_one', 's', '1', '3', '1.9', '0', '0', '0', '49', '1', '1', '1', '1', '1', 'bed', '1', '0', '0');
INSERT INTO furniture VALUES ('34', 'Comfortable', 'bed_budget', 's', '2', '3', '1.9', '0', '0', '0', '50', '1', '1', '1', '1', '1', 'bed', '1', '0', '0');
INSERT INTO furniture VALUES ('35', 'Bookcase', 'shelves_armas', 's', '2', '1', '1', '0', '0', '0', '51', '1', '1', '1', '1', '1', 'default', '1', '0', '0');
INSERT INTO furniture VALUES ('36', 'Bench', 'bench_armas', 's', '2', '1', '1.1', '0', '1', '0', '52', '1', '1', '1', '1', '1', 'default', '1', '0', '0');
INSERT INTO furniture VALUES ('37', 'Dining Table', 'table_armas', 's', '2', '2', '1', '1', '0', '0', '53', '1', '1', '1', '1', '1', 'default', '1', '0', '0');
INSERT INTO furniture VALUES ('38', 'Occasional Table', 'small_table_armas', 's', '1', '1', '1', '1', '0', '0', '54', '1', '1', '1', '1', '1', 'default', '1', '0', '0');
INSERT INTO furniture VALUES ('39', 'Stool', 'small_chair_armas', 's', '1', '1', '1', '0', '1', '0', '55', '1', '1', '1', '1', '1', 'default', '1', '0', '0');
INSERT INTO furniture VALUES ('40', 'Authentic', 'fireplace_armas', 's', '2', '1', '1', '0', '0', '0', '56', '1', '1', '1', '1', '1', 'default', '2', '0', '0');
INSERT INTO furniture VALUES ('41', 'Table Lamp', 'lamp_armas', 's', '1', '1', '1', '0', '0', '0', '57', '1', '1', '1', '1', '1', 'default', '2', '0', '0');
INSERT INTO furniture VALUES ('42', 'Single Bed', 'bed_armas_one', 's', '1', '3', '1.8', '0', '0', '0', '58', '1', '1', '1', '1', '1', 'bed', '1', '0', '0');
INSERT INTO furniture VALUES ('43', 'Floor rug', 'carpet_standard', 's', '3', '5', '0', '1', '0', '1', '59', '1', '1', '1', '1', '1', 'default', '1', '0', '0');
INSERT INTO furniture VALUES ('44', 'Hand-Woven Rug', 'carpet_armas', 's', '2', '4', '0', '1', '0', '1', '60', '1', '1', '1', '1', '1', 'default', '1', '0', '0');
INSERT INTO furniture VALUES ('45', 'Faux-Fur Bear Rug', 'carpet_polar', 's', '2', '3', '0', '1', '0', '1', '61', '1', '1', '1', '1', '1', 'default', '1', '0', '0');
INSERT INTO furniture VALUES ('46', 'Fireplace', 'fireplace_polyfon', 's', '2', '1', '1', '0', '0', '0', '62', '1', '1', '1', '1', '1', 'default', '2', '0', '0');
INSERT INTO furniture VALUES ('47', 'Square Dining Table', 'table_plasto_4leg*1', 's', '2', '2', '1', '1', '0', '0', '63', '1', '1', '1', '1', '1', 'default', '1', '0', '0');
INSERT INTO furniture VALUES ('48', 'Square Dining Table', 'table_plasto_bigsquare*1', 's', '2', '2', '1', '1', '0', '0', '64', '1', '1', '1', '1', '1', 'default', '1', '0', '0');
INSERT INTO furniture VALUES ('49', 'Round Dining Table', 'table_plasto_round*1', 's', '2', '2', '1', '1', '0', '0', '65', '1', '1', '1', '1', '1', 'default', '1', '0', '0');
INSERT INTO furniture VALUES ('50', 'Occasional Table', 'table_plasto_square*1', 's', '1', '1', '1', '1', '0', '0', '66', '1', '1', '1', '1', '1', 'default', '1', '0', '0');
INSERT INTO furniture VALUES ('51', 'Chair', 'chair_plasto*1', 's', '1', '1', '1', '0', '1', '0', '67', '1', '1', '1', '1', '1', 'default', '1', '0', '0');
INSERT INTO furniture VALUES ('52', 'Floor Rug', 'carpet_standard*1', 's', '3', '5', '0', '1', '0', '1', '68', '1', '1', '1', '1', '1', 'default', '1', '0', '0');
INSERT INTO furniture VALUES ('53', 'Doormat', 'doormat_plain*1', 's', '1', '1', '0.1', '0', '0', '1', '69', '1', '1', '1', '1', '1', 'default', '1', '0', '0');
INSERT INTO furniture VALUES ('54', 'Occasional Table', 'table_plasto_4leg*2', 's', '2', '2', '1', '1', '0', '0', '70', '1', '1', '1', '1', '1', 'default', '1', '0', '0');
INSERT INTO furniture VALUES ('55', 'Square Dining Table', 'table_plasto_bigsquare*2', 's', '2', '2', '1', '1', '0', '0', '71', '1', '1', '1', '1', '1', 'default', '1', '0', '0');
INSERT INTO furniture VALUES ('56', 'Round Dining Table', 'table_plasto_round*2', 's', '2', '2', '1', '1', '0', '0', '72', '1', '1', '1', '1', '1', 'default', '1', '0', '0');
INSERT INTO furniture VALUES ('57', 'Round Dining Table', 'table_plasto_square*2', 's', '1', '1', '1', '1', '0', '0', '73', '1', '1', '1', '1', '1', 'default', '1', '0', '0');
INSERT INTO furniture VALUES ('58', 'Chair', 'chair_plasto*2', 's', '1', '1', '1', '0', '1', '0', '74', '1', '1', '1', '1', '1', 'default', '1', '0', '0');
INSERT INTO furniture VALUES ('59', 'Doormat', 'doormat_plain*2', 's', '1', '1', '0.1', '0', '0', '1', '75', '1', '1', '1', '1', '1', 'default', '1', '0', '0');
INSERT INTO furniture VALUES ('60', 'Floor Rug', 'carpet_standard*2', 's', '3', '5', '0', '1', '0', '1', '76', '1', '1', '1', '1', '1', 'default', '1', '0', '0');
INSERT INTO furniture VALUES ('61', 'Round Dining Table', 'table_plasto_4leg*3', 's', '2', '2', '1', '1', '0', '0', '77', '1', '1', '1', '1', '1', 'default', '1', '0', '0');
INSERT INTO furniture VALUES ('62', 'Square Dining Table', 'table_plasto_bigsquare*3', 's', '2', '2', '1', '1', '0', '0', '78', '1', '1', '1', '1', '1', 'default', '1', '0', '0');
INSERT INTO furniture VALUES ('63', 'Round Dining Table', 'table_plasto_round*3', 's', '2', '2', '1', '1', '0', '0', '79', '1', '1', '1', '1', '1', 'default', '1', '0', '0');
INSERT INTO furniture VALUES ('64', 'Square Dining Table', 'table_plasto_square*3', 's', '1', '1', '1', '1', '0', '0', '80', '1', '1', '1', '1', '1', 'default', '1', '0', '0');
INSERT INTO furniture VALUES ('65', 'Chair', 'chair_plasto*3', 's', '1', '1', '1', '0', '1', '0', '81', '1', '1', '1', '1', '1', 'default', '1', '0', '0');
INSERT INTO furniture VALUES ('66', 'Floor Rug', 'carpet_standard*3', 's', '3', '5', '0', '1', '0', '1', '82', '1', '1', '1', '1', '1', 'default', '1', '0', '0');
INSERT INTO furniture VALUES ('67', 'Doormat', 'doormat_plain*3', 's', '1', '1', '0.1', '0', '0', '1', '83', '1', '1', '1', '1', '1', 'default', '1', '0', '0');
INSERT INTO furniture VALUES ('68', 'Square Dining Table', 'table_plasto_4leg*4', 's', '2', '2', '1', '1', '0', '0', '84', '1', '1', '1', '1', '1', 'default', '1', '0', '0');
INSERT INTO furniture VALUES ('71', 'Square Dining Table', 'table_plasto_square*4', 's', '1', '1', '1', '1', '0', '0', '87', '1', '1', '1', '1', '1', 'default', '1', '0', '0');
INSERT INTO furniture VALUES ('72', 'Chair', 'chair_plasto*4', 's', '1', '1', '1', '0', '1', '0', '88', '1', '1', '1', '1', '1', 'default', '1', '0', '0');
INSERT INTO furniture VALUES ('73', 'Floor Rug', 'carpet_standard*4', 's', '3', '5', '0', '1', '0', '1', '89', '1', '1', '1', '1', '1', 'default', '1', '0', '0');
INSERT INTO furniture VALUES ('74', 'Doormat', 'doormat_plain*4', 's', '1', '1', '0.1', '0', '0', '1', '90', '1', '1', '1', '1', '1', 'default', '1', '0', '0');
INSERT INTO furniture VALUES ('75', 'Doormat', 'doormat_plain*6', 's', '1', '1', '0.1', '0', '0', '1', '91', '1', '1', '1', '1', '1', 'default', '1', '0', '0');
INSERT INTO furniture VALUES ('76', 'Doormat', 'doormat_plain*5', 's', '1', '1', '0.1', '0', '0', '1', '93', '1', '1', '1', '1', '1', 'default', '1', '0', '0');
INSERT INTO furniture VALUES ('77', 'Floor Rug', 'carpet_standard*5', 's', '3', '5', '0', '1', '0', '1', '94', '1', '1', '1', '1', '1', 'default', '1', '0', '0');
INSERT INTO furniture VALUES ('78', 'Occasional Table', 'table_plasto_4leg*5', 's', '2', '2', '1', '1', '0', '0', '95', '1', '1', '1', '1', '1', 'default', '1', '0', '0');
INSERT INTO furniture VALUES ('79', 'Square Dining Table', 'table_plasto_bigsquare*5', 's', '2', '2', '1', '1', '0', '0', '96', '1', '1', '1', '1', '1', 'default', '1', '0', '0');
INSERT INTO furniture VALUES ('80', 'Round Dining Table', 'table_plasto_round*5', 's', '2', '2', '1', '1', '0', '0', '97', '1', '1', '1', '1', '1', 'default', '1', '0', '0');
INSERT INTO furniture VALUES ('81', 'Square Dining Table', 'table_plasto_square*5', 's', '1', '1', '1', '1', '0', '0', '98', '1', '1', '1', '1', '1', 'default', '1', '0', '0');
INSERT INTO furniture VALUES ('82', 'Chair', 'chair_plasto*5', 's', '1', '1', '1', '0', '1', '0', '99', '1', '1', '1', '1', '1', 'default', '1', '0', '0');
INSERT INTO furniture VALUES ('83', 'Occasional table Table', 'table_plasto_4leg*6', 's', '2', '2', '1', '1', '0', '0', '100', '1', '1', '1', '1', '1', 'default', '1', '0', '0');
INSERT INTO furniture VALUES ('84', 'Square Dining Table', 'table_plasto_bigsquare*6', 's', '2', '2', '1', '1', '0', '0', '101', '1', '1', '1', '1', '1', 'default', '1', '0', '0');
INSERT INTO furniture VALUES ('85', 'Round Dining Table', 'table_plasto_round*6', 's', '2', '2', '1', '1', '0', '0', '102', '1', '1', '1', '1', '1', 'default', '1', '0', '0');
INSERT INTO furniture VALUES ('86', 'Square Dining Table', 'table_plasto_square*6', 's', '1', '1', '1', '1', '0', '0', '103', '1', '1', '1', '1', '1', 'default', '1', '0', '0');
INSERT INTO furniture VALUES ('87', 'Chair', 'chair_plasto*6', 's', '1', '1', '1', '0', '1', '0', '104', '1', '1', '1', '1', '1', 'default', '1', '0', '0');
INSERT INTO furniture VALUES ('88', 'Occasional table', 'table_plasto_4leg*7', 's', '2', '2', '1', '1', '0', '0', '105', '1', '1', '1', '1', '1', 'default', '1', '0', '0');
INSERT INTO furniture VALUES ('89', 'Square Dining Table', 'table_plasto_bigsquare*7', 's', '2', '2', '1', '1', '0', '0', '106', '1', '1', '1', '1', '1', 'default', '1', '0', '0');
INSERT INTO furniture VALUES ('90', 'Round Dining Table', 'table_plasto_round*7', 's', '2', '2', '1', '1', '0', '0', '107', '1', '1', '1', '1', '1', 'default', '1', '0', '0');
INSERT INTO furniture VALUES ('91', 'Square Dining Table', 'table_plasto_square*7', 's', '1', '1', '1', '1', '0', '0', '108', '1', '1', '1', '1', '1', 'default', '1', '0', '0');
INSERT INTO furniture VALUES ('92', 'Chair', 'chair_plasto*7', 's', '1', '1', '1', '0', '1', '0', '109', '1', '1', '1', '1', '1', 'default', '1', '0', '0');
INSERT INTO furniture VALUES ('93', 'Occasional Table', 'table_plasto_4leg*8', 's', '2', '2', '1', '1', '0', '0', '110', '1', '1', '1', '1', '1', 'default', '1', '0', '0');
INSERT INTO furniture VALUES ('94', 'Square Dining Table', 'table_plasto_bigsquare*8', 's', '2', '2', '1', '1', '0', '0', '111', '1', '1', '1', '1', '1', 'default', '1', '0', '0');
INSERT INTO furniture VALUES ('95', 'Round Dining Table', 'table_plasto_round*8', 's', '2', '2', '1', '1', '0', '0', '112', '1', '1', '1', '1', '1', 'default', '1', '0', '0');
INSERT INTO furniture VALUES ('96', 'Square Dining Table', 'table_plasto_square*8', 's', '1', '1', '1', '1', '0', '0', '113', '1', '1', '1', '1', '1', 'default', '1', '0', '0');
INSERT INTO furniture VALUES ('97', 'Chair', 'chair_plasto*8', 's', '1', '1', '1', '0', '1', '0', '114', '1', '1', '1', '1', '1', 'default', '1', '0', '0');
INSERT INTO furniture VALUES ('98', 'Occasional Table', 'table_plasto_4leg*9', 's', '2', '2', '1', '1', '0', '0', '115', '1', '1', '1', '1', '1', 'default', '1', '0', '0');
INSERT INTO furniture VALUES ('99', 'Square Dining Table', 'table_plasto_bigsquare*9', 's', '2', '2', '1', '1', '0', '0', '116', '1', '1', '1', '1', '1', 'default', '1', '0', '0');
INSERT INTO furniture VALUES ('100', 'Square Dining Table', 'table_plasto_round*9', 's', '2', '2', '1', '1', '0', '0', '117', '1', '1', '1', '1', '1', 'default', '1', '0', '0');
INSERT INTO furniture VALUES ('101', 'Chair', 'chair_plasto*9', 's', '1', '1', '1', '0', '1', '0', '119', '1', '1', '1', '1', '1', 'default', '1', '0', '0');
INSERT INTO furniture VALUES ('102', 'Floor Rug', 'carpet_standard*6', 's', '3', '5', '0', '1', '0', '1', '120', '1', '1', '1', '1', '1', 'default', '1', '0', '0');
INSERT INTO furniture VALUES ('103', 'Plastic Pod Chair', 'chair_plasty*1', 's', '1', '1', '1', '0', '1', '0', '121', '1', '1', '1', '1', '1', 'default', '1', '0', '0');
INSERT INTO furniture VALUES ('104', 'Pizza Box', 'pizza', 's', '1', '1', '1', '0', '0', '0', '122', '1', '1', '1', '1', '1', 'default', '1', '0', '0');
INSERT INTO furniture VALUES ('105', 'Empty Cans', 'drinks', 's', '1', '1', '1', '0', '0', '0', '123', '1', '1', '1', '1', '1', 'default', '1', '0', '0');
INSERT INTO furniture VALUES ('106', 'Plastic Pod Chair', 'chair_plasty*2', 's', '1', '1', '1', '0', '1', '0', '124', '1', '1', '1', '1', '1', 'default', '1', '0', '0');
INSERT INTO furniture VALUES ('107', 'Plastic Pod Chair', 'chair_plasty*3', 's', '1', '1', '1', '0', '1', '0', '125', '1', '1', '1', '1', '1', 'default', '1', '0', '0');
INSERT INTO furniture VALUES ('108', 'Plastic Pod Chair', 'chair_plasty*4', 's', '1', '1', '1', '0', '1', '0', '126', '1', '1', '1', '1', '1', 'default', '1', '0', '0');
INSERT INTO furniture VALUES ('109', 'Mini-Bar', 'bar_polyfon', 's', '1', '1', '1', '0', '0', '0', '127', '1', '1', '1', '1', '1', 'vendingmachine', '0', '6,5,2,1', '0');
INSERT INTO furniture VALUES ('110', 'Aloe Vera', 'plant_cruddy', 's', '1', '1', '1', '0', '0', '0', '128', '1', '1', '1', '1', '1', 'default', '1', '0', '0');
INSERT INTO furniture VALUES ('111', 'Empty Spinning Bottle', 'bottle', 's', '1', '1', '1', '0', '0', '0', '129', '1', '1', '1', '1', '1', 'bottle', '0', '0', '0');
INSERT INTO furniture VALUES ('112', 'Bar/desk', 'bardesk_polyfon', 's', '2', '1', '1', '1', '0', '0', '130', '1', '1', '1', '1', '1', 'default', '1', '0', '0');
INSERT INTO furniture VALUES ('113', 'Corner Cabinet/Desk', 'bardeskcorner_polyfon', 's', '1', '1', '1', '1', '0', '0', '131', '1', '1', '1', '1', '1', 'default', '1', '0', '0');
INSERT INTO furniture VALUES ('115', 'Barrel Minibar', 'bar_armas', 's', '1', '1', '1', '0', '0', '0', '133', '1', '1', '1', '1', '1', 'vendingmachine', '0', '6,2,1', '0');
INSERT INTO furniture VALUES ('116', 'Bardesk', 'bartable_armas', 's', '1', '3', '1.2', '1', '0', '0', '134', '1', '1', '1', '1', '1', 'default', '1', '0', '0');
INSERT INTO furniture VALUES ('117', 'Barrel Stool', 'bar_chair_armas', 's', '1', '1', '1.2', '0', '1', '0', '135', '1', '1', '1', '1', '1', 'default', '1', '0', '0');
INSERT INTO furniture VALUES ('118', 'Soft Wool Rug', 'carpet_soft', 's', '2', '4', '0', '1', '0', '1', '136', '1', '1', '1', '1', '1', 'default', '1', '0', '0');
INSERT INTO furniture VALUES ('119', 'Soft Wool Rug', 'carpet_soft*1', 's', '2', '4', '0', '1', '0', '1', '137', '1', '1', '1', '1', '1', 'default', '1', '0', '0');
INSERT INTO furniture VALUES ('120', 'Soft Wool Rug', 'carpet_soft*2', 's', '2', '4', '0', '1', '0', '1', '138', '1', '1', '1', '1', '1', 'default', '1', '0', '0');
INSERT INTO furniture VALUES ('121', 'Soft Wool Rug', 'carpet_soft*3', 's', '2', '4', '0', '1', '0', '1', '139', '1', '1', '1', '1', '1', 'default', '1', '0', '0');
INSERT INTO furniture VALUES ('122', 'Soft Wool Rug', 'carpet_soft*4', 's', '2', '4', '0', '1', '0', '1', '140', '1', '1', '1', '1', '1', 'default', '1', '0', '0');
INSERT INTO furniture VALUES ('123', 'Soft Wool Rug', 'carpet_soft*5', 's', '2', '4', '0', '1', '0', '1', '141', '1', '1', '1', '1', '1', 'default', '1', '0', '0');
INSERT INTO furniture VALUES ('124', 'Soft Wool Rug', 'carpet_soft*6', 's', '2', '4', '0', '1', '0', '1', '143', '1', '1', '1', '1', '1', 'default', '1', '0', '0');
INSERT INTO furniture VALUES ('125', 'Portable TV', 'red_tv', 's', '1', '1', '1', '0', '0', '0', '144', '1', '1', '1', '1', '1', 'default', '2', '0', '0');
INSERT INTO furniture VALUES ('126', 'Large TV', 'wood_tv', 's', '1', '2', '1', '0', '0', '0', '145', '1', '1', '1', '1', '1', 'default', '4', '0', '0');
INSERT INTO furniture VALUES ('127', 'Pink Faux-Fur Bear Rug', 'carpet_polar*1', 's', '2', '3', '0', '1', '0', '1', '146', '1', '1', '1', '1', '1', 'default', '1', '0', '0');
INSERT INTO furniture VALUES ('128', 'Plastic Pod Chair', 'chair_plasty*5', 's', '1', '1', '1', '0', '1', '0', '147', '1', '1', '1', '1', '1', 'default', '1', '0', '0');
INSERT INTO furniture VALUES ('129', 'Blue Bear Rug', 'carpet_polar*2', 's', '2', '3', '0', '1', '0', '1', '148', '1', '1', '1', '1', '1', 'default', '1', '0', '0');
INSERT INTO furniture VALUES ('130', 'Yellow Bear Rug', 'carpet_polar*3', 's', '2', '3', '0', '1', '0', '1', '149', '1', '1', '1', '1', '1', 'default', '1', '0', '0');
INSERT INTO furniture VALUES ('131', 'Green Bear Rug', 'carpet_polar*4', 's', '2', '3', '0', '1', '0', '1', '150', '1', '1', '1', '1', '1', 'default', '1', '0', '0');
INSERT INTO furniture VALUES ('132', 'Plastic Pod Chair', 'chair_plasty*6', 's', '1', '1', '1', '0', '1', '0', '151', '1', '1', '1', '1', '1', 'default', '1', '0', '0');
INSERT INTO furniture VALUES ('133', 'Large Coffee Table', 'table_polyfon', 's', '2', '2', '1', '1', '0', '0', '152', '1', '1', '1', '1', '1', 'default', '1', '0', '0');
INSERT INTO furniture VALUES ('134', 'Large Dining Table', 'smooth_table_polyfon', 's', '2', '2', '1', '1', '0', '0', '153', '1', '1', '1', '1', '1', 'default', '1', '0', '0');
INSERT INTO furniture VALUES ('135', 'Armchair', 'sofachair_polyfon_girl', 's', '1', '1', '1.1', '0', '1', '0', '154', '1', '1', '1', '1', '1', 'default', '1', '0', '0');
INSERT INTO furniture VALUES ('136', 'Single Bed', 'bed_polyfon_girl_one', 's', '1', '3', '1.8', '0', '0', '0', '155', '1', '1', '1', '1', '1', 'bed', '1', '0', '0');
INSERT INTO furniture VALUES ('137', 'Double Bed', 'bed_polyfon_girl', 's', '2', '3', '1.8', '0', '0', '0', '156', '1', '1', '1', '1', '1', 'bed', '1', '0', '0');
INSERT INTO furniture VALUES ('138', 'Two-seater Sofa', 'sofa_polyfon_girl', 's', '2', '1', '1.1', '0', '1', '0', '157', '1', '1', '1', '1', '1', 'default', '1', '0', '0');
INSERT INTO furniture VALUES ('139', 'Plain Single Bed', 'bed_budgetb_one', 's', '1', '3', '1.9', '0', '0', '0', '158', '1', '1', '1', '1', '1', 'bed', '1', '0', '0');
INSERT INTO furniture VALUES ('140', 'Plain Double Bed', 'bed_budgetb', 's', '2', '3', '1.9', '0', '0', '0', '159', '1', '1', '1', '1', '1', 'bed', '1', '0', '0');
INSERT INTO furniture VALUES ('141', 'Pineapple Plant', 'plant_pineapple', 's', '1', '1', '1', '0', '0', '0', '160', '1', '1', '1', '1', '1', 'default', '1', '0', '0');
INSERT INTO furniture VALUES ('142', 'Fruit Tree', 'plant_fruittree', 's', '1', '1', '1', '0', '0', '0', '161', '1', '1', '1', '1', '1', 'default', '1', '0', '0');
INSERT INTO furniture VALUES ('143', 'Small Cactus', 'plant_small_cactus', 's', '1', '1', '1', '0', '0', '0', '162', '1', '1', '1', '1', '1', 'default', '1', '0', '0');
INSERT INTO furniture VALUES ('144', 'Bonsai Tree', 'plant_bonsai', 's', '1', '1', '1', '0', '0', '0', '163', '1', '1', '1', '1', '1', 'default', '1', '0', '0');
INSERT INTO furniture VALUES ('145', 'Mature Cactus', 'plant_big_cactus', 's', '1', '1', '1', '0', '0', '0', '164', '1', '1', '1', '1', '1', 'default', '1', '0', '0');
INSERT INTO furniture VALUES ('146', 'Yukka Plant', 'plant_yukka', 's', '1', '1', '1', '0', '0', '0', '165', '1', '1', '1', '1', '1', 'default', '1', '0', '0');
INSERT INTO furniture VALUES ('147', 'Floor Rug', 'carpet_standard*7', 's', '3', '5', '0', '1', '0', '1', '166', '1', '1', '1', '1', '1', 'default', '1', '0', '0');
INSERT INTO furniture VALUES ('148', 'Floor Rug', 'carpet_standard*8', 's', '3', '5', '0', '1', '0', '1', '167', '1', '1', '1', '1', '1', 'default', '1', '0', '0');
INSERT INTO furniture VALUES ('149', 'Floor Rug', 'carpet_standard*9', 's', '3', '5', '0', '1', '0', '1', '168', '1', '1', '1', '1', '1', 'default', '1', '0', '0');
INSERT INTO furniture VALUES ('150', 'Floor Rug', 'carpet_standard*10', 's', '3', '5', '0', '1', '0', '1', '169', '1', '1', '1', '1', '1', 'default', '1', '0', '0');
INSERT INTO furniture VALUES ('151', 'Floor Rug', 'carpet_standard*11', 's', '3', '5', '0', '1', '0', '1', '170', '1', '1', '1', '1', '1', 'default', '1', '0', '0');
INSERT INTO furniture VALUES ('152', 'Cut Sunflower', 'plant_sunflower', 's', '1', '1', '1', '0', '0', '0', '171', '1', '1', '1', '1', '1', 'default', '1', '0', '0');
INSERT INTO furniture VALUES ('153', 'Cut Roses', 'plant_rose', 's', '1', '1', '1', '0', '0', '0', '172', '1', '1', '1', '1', '1', 'default', '1', '0', '0');
INSERT INTO furniture VALUES ('154', 'Digital TV', 'tv_luxus', 's', '1', '3', '1', '0', '0', '0', '173', '1', '1', '1', '1', '1', 'default', '2', '0', '0');
INSERT INTO furniture VALUES ('155', 'Bubble Bath', 'bath', 's', '1', '2', '1', '0', '1', '0', '174', '1', '1', '1', '1', '1', 'default', '2', '0', '0');
INSERT INTO furniture VALUES ('156', 'Sink', 'sink', 's', '1', '1', '1', '0', '0', '0', '177', '1', '1', '1', '1', '1', 'vendingmachine', '0', '100', '0');
INSERT INTO furniture VALUES ('157', 'Loo Seat', 'toilet', 's', '1', '1', '1.2', '0', '1', '0', '178', '1', '1', '1', '1', '1', 'default', '2', '0', '0');
INSERT INTO furniture VALUES ('158', 'Rubber Duck', 'duck', 's', '1', '1', '1', '0', '0', '0', '179', '1', '1', '1', '1', '1', 'default', '1', '0', '0');
INSERT INTO furniture VALUES ('159', 'Floor Tiles', 'tile', 's', '4', '4', '0', '1', '0', '1', '180', '1', '1', '1', '1', '1', 'default', '1', '0', '0');
INSERT INTO furniture VALUES ('160', 'Loo Seat', 'toilet_red', 's', '1', '1', '1.2', '0', '1', '0', '181', '1', '1', '1', '1', '1', 'default', '2', '0', '0');
INSERT INTO furniture VALUES ('161', 'Loo Seat', 'toilet_yell', 's', '1', '1', '1.2', '0', '1', '0', '182', '1', '1', '1', '1', '1', 'default', '2', '0', '0');
INSERT INTO furniture VALUES ('162', 'Floor Tiles', 'tile_red', 's', '4', '4', '0', '1', '0', '1', '183', '1', '1', '1', '1', '1', 'default', '1', '0', '0');
INSERT INTO furniture VALUES ('163', 'Floor Tiles', 'tile_yell', 's', '4', '4', '0', '1', '0', '1', '184', '1', '1', '1', '1', '1', 'default', '1', '0', '0');
INSERT INTO furniture VALUES ('164', 'Gift', 'present_gen', 's', '1', '1', '1', '1', '0', '0', '187', '1', '0', '1', '1', '1', 'default', '1', '0', '0');
INSERT INTO furniture VALUES ('165', 'Gift', 'present_gen1', 's', '1', '1', '1', '1', '0', '0', '188', '1', '0', '1', '1', '1', 'default', '1', '0', '0');
INSERT INTO furniture VALUES ('166', 'Gift', 'present_gen2', 's', '1', '1', '1', '1', '0', '0', '189', '1', '0', '1', '1', '1', 'default', '1', '0', '0');
INSERT INTO furniture VALUES ('167', 'Gift', 'present_gen3', 's', '1', '1', '1', '1', '0', '0', '190', '1', '0', '1', '1', '1', 'default', '1', '0', '0');
INSERT INTO furniture VALUES ('168', 'Gift', 'present_gen4', 's', '1', '1', '1', '1', '0', '0', '191', '1', '0', '1', '1', '1', 'default', '1', '0', '0');
INSERT INTO furniture VALUES ('169', 'Gift', 'present_gen5', 's', '1', '1', '1', '1', '0', '0', '192', '1', '0', '1', '1', '1', 'default', '1', '0', '0');
INSERT INTO furniture VALUES ('170', 'Gift', 'present_gen6', 's', '1', '1', '1', '1', '0', '0', '193', '1', '0', '1', '1', '1', 'default', '1', '0', '0');
INSERT INTO furniture VALUES ('171', 'A Pura Minibar', 'bar_basic', 's', '1', '1', '1', '0', '0', '0', '195', '1', '1', '1', '1', '1', 'vendingmachine', '0', '6,2,5,1', '0');
INSERT INTO furniture VALUES ('172', 'Pura Shelves', 'shelves_basic', 's', '2', '1', '1', '0', '0', '0', '196', '1', '1', '1', '1', '1', 'default', '1', '0', '0');
INSERT INTO furniture VALUES ('173', 'iced sofachair', 'soft_sofachair_norja', 's', '1', '1', '1', '0', '1', '0', '197', '1', '1', '1', '1', '1', 'default', '1', '0', '0');
INSERT INTO furniture VALUES ('174', 'iced sofa', 'soft_sofa_norja', 's', '2', '1', '1', '0', '1', '0', '198', '1', '1', '1', '1', '1', 'default', '1', '0', '0');
INSERT INTO furniture VALUES ('175', 'Pura Lamp', 'lamp_basic', 's', '1', '1', '1', '0', '0', '0', '199', '1', '1', '1', '1', '1', 'default', '2', '0', '0');
INSERT INTO furniture VALUES ('176', 'Lodge Candle', 'lamp2_armas', 's', '1', '1', '1', '0', '0', '0', '200', '1', '1', '1', '1', '1', 'default', '2', '0', '0');
INSERT INTO furniture VALUES ('177', 'Pura Refridgerator', 'fridge', 's', '1', '1', '1', '0', '0', '0', '201', '1', '1', '1', '1', '1', 'vendingmachine', '0', '3,5,6,2', '0');
INSERT INTO furniture VALUES ('178', 'Telephone Box', 'door', 's', '1', '1', '0.001', '0', '0', '0', '202', '1', '1', '0', '1', '1', 'teleport', '1', '0', '0');
INSERT INTO furniture VALUES ('179', 'Wardrobe', 'doorB', 's', '1', '1', '0.001', '0', '0', '0', '204', '1', '1', '0', '1', '1', 'teleport', '1', '0', '0');
INSERT INTO furniture VALUES ('180', 'Portaloo', 'doorC', 's', '1', '1', '0.001', '0', '0', '0', '205', '1', '1', '0', '1', '1', 'teleport', '1', '0', '0');
INSERT INTO furniture VALUES ('181', 'Pumpkin Lamp', 'pumpkin', 's', '1', '1', '1', '1', '0', '0', '206', '1', '1', '1', '1', '1', 'default', '2', '0', '0');
INSERT INTO furniture VALUES ('182', 'Skull Candle Holder', 'skullcandle', 's', '1', '1', '1', '0', '0', '0', '207', '1', '1', '1', '1', '1', 'default', '2', '0', '0');
INSERT INTO furniture VALUES ('183', 'Blood', 'deadduck', 's', '1', '1', '1', '0', '0', '0', '208', '1', '1', '1', '1', '1', 'default', '1', '0', '0');
INSERT INTO furniture VALUES ('184', 'Dead Duck 2', 'deadduck2', 's', '1', '1', '1', '0', '0', '0', '209', '1', '1', '1', '1', '1', 'default', '1', '0', '0');
INSERT INTO furniture VALUES ('185', 'Dead Duck 3', 'deadduck3', 's', '1', '1', '1', '0', '0', '0', '210', '1', '1', '1', '1', '1', 'default', '1', '0', '0');
INSERT INTO furniture VALUES ('186', 'Menorah', 'menorah', 's', '1', '1', '1', '0', '0', '0', '211', '1', '1', '1', '1', '1', 'default', '2', '0', '0');
INSERT INTO furniture VALUES ('187', 'Christmas Pudding', 'pudding', 's', '1', '1', '1', '1', '0', '0', '212', '1', '1', '1', '1', '1', 'default', '1', '0', '0');
INSERT INTO furniture VALUES ('188', 'Joint of Ham', 'ham', 's', '1', '1', '1', '0', '0', '0', '213', '1', '1', '1', '1', '1', 'default', '1', '0', '0');
INSERT INTO furniture VALUES ('189', 'Roast Turkey', 'turkey', 's', '1', '1', '1', '0', '0', '0', '214', '1', '1', '1', '1', '1', 'default', '1', '0', '0');
INSERT INTO furniture VALUES ('190', 'Christmas Rubber Duck', 'xmasduck', 's', '1', '1', '1', '1', '0', '0', '215', '1', '1', '1', '1', '1', 'default', '1', '0', '0');
INSERT INTO furniture VALUES ('191', 'Gingerbread House', 'house', 's', '1', '1', '1', '0', '0', '0', '216', '1', '1', '1', '1', '1', 'default', '1', '0', '0');
INSERT INTO furniture VALUES ('192', 'Electric Candles', 'triplecandle', 's', '1', '1', '1', '0', '0', '0', '217', '1', '1', '1', '1', '1', 'default', '2', '0', '0');
INSERT INTO furniture VALUES ('193', 'Christmas Tree 1', 'tree3', 's', '1', '1', '1', '0', '0', '0', '218', '1', '1', '1', '1', '1', 'default', '1', '0', '0');
INSERT INTO furniture VALUES ('194', 'Christmas Tree 2', 'tree4', 's', '1', '1', '1', '0', '0', '0', '219', '1', '1', '1', '1', '1', 'default', '2', '0', '0');
INSERT INTO furniture VALUES ('195', 'Christmas Tree 3', 'tree5', 's', '1', '1', '1', '0', '0', '0', '220', '1', '1', '1', '1', '1', 'default', '2', '0', '0');
INSERT INTO furniture VALUES ('196', 'Eaten Ham', 'ham2', 's', '1', '1', '1', '0', '0', '0', '223', '1', '1', '1', '1', '1', 'default', '1', '0', '0');
INSERT INTO furniture VALUES ('197', 'White Candle Plate', 'wcandleset', 's', '1', '1', '1', '0', '0', '0', '224', '1', '1', '1', '1', '1', 'default', '2', '0', '0');
INSERT INTO furniture VALUES ('198', 'Red Candle Plate', 'rcandleset', 's', '1', '1', '1', '0', '0', '0', '225', '1', '1', '1', '1', '1', 'default', '2', '0', '0');
INSERT INTO furniture VALUES ('199', 'Giant Heart', 'statue', 's', '1', '1', '1', '0', '0', '0', '226', '1', '1', '1', '1', '1', 'default', '1', '0', '0');
INSERT INTO furniture VALUES ('200', 'Valentine\'s Duck', 'valeduck', 's', '1', '1', '1', '0', '0', '0', '228', '1', '1', '1', '1', '1', 'default', '1', '0', '0');
INSERT INTO furniture VALUES ('201', 'Heart Sofa', 'heartsofa', 's', '2', '1', '1', '0', '1', '0', '229', '1', '1', '1', '1', '1', 'default', '1', '0', '0');
INSERT INTO furniture VALUES ('202', 'Throne', 'throne', 's', '1', '1', '1', '0', '1', '0', '230', '0', '1', '1', '1', '1', 'default', '1', '0', '0');
INSERT INTO furniture VALUES ('203', 'Russian Samovar', 'samovar', 's', '1', '1', '1', '0', '0', '0', '231', '0', '1', '1', '1', '1', 'vendingmachine', '0', '1', '0');
INSERT INTO furniture VALUES ('204', 'Vase of Flowers', 'giftflowers', 's', '1', '1', '1', '0', '0', '0', '232', '1', '1', '1', '1', '1', 'default', '1', '0', '0');
INSERT INTO furniture VALUES ('205', 'Cake', 'habbocake', 's', '1', '1', '1', '0', '0', '0', '233', '1', '1', '1', '1', '1', 'default', '1', '0', '0');
INSERT INTO furniture VALUES ('206', 'Holopod', 'hologram', 's', '1', '1', '1', '0', '0', '0', '234', '1', '1', '1', '1', '1', 'default', '2', '0', '0');
INSERT INTO furniture VALUES ('207', 'Wannabe bunny', 'easterduck', 's', '1', '1', '1', '0', '0', '0', '235', '1', '1', '1', '1', '1', 'default', '1', '0', '0');
INSERT INTO furniture VALUES ('208', 'Squidgy Bunny', 'bunny', 's', '1', '1', '1', '0', '0', '0', '236', '1', '1', '1', '1', '1', 'default', '1', '0', '0');
INSERT INTO furniture VALUES ('209', 'Basket Of Eggs', 'basket', 's', '1', '1', '1', '0', '0', '0', '237', '1', '1', '1', '1', '1', 'default', '1', '0', '0');
INSERT INTO furniture VALUES ('210', 'Pop-up Egg', 'birdie', 's', '1', '1', '1', '0', '0', '0', '238', '1', '1', '1', '1', '1', 'default', '2', '0', '0');
INSERT INTO furniture VALUES ('211', 'Holo-dice', 'edice', 's', '1', '1', '1', '0', '0', '0', '239', '1', '1', '1', '1', '1', 'dice', '1', '0', '0');
INSERT INTO furniture VALUES ('212', 'Club sofa', 'club_sofa', 's', '2', '1', '1', '0', '1', '0', '267', '1', '1', '1', '1', '1', 'default', '1', '0', '0');
INSERT INTO furniture VALUES ('213', 'Gold Trophy', 'prize1', 's', '1', '1', '1', '0', '0', '0', '185', '1', '1', '1', '1', '0', 'trophy', '1', '0', '0');
INSERT INTO furniture VALUES ('214', 'Silver Trophy', 'prize2', 's', '1', '1', '1', '0', '0', '0', '186', '1', '1', '1', '1', '0', 'trophy', '1', '0', '0');
INSERT INTO furniture VALUES ('215', 'Bronze Trophy', 'prize3', 's', '1', '1', '1', '0', '0', '0', '243', '1', '1', '1', '1', '0', 'trophy', '1', '0', '0');
INSERT INTO furniture VALUES ('216', 'Hatch (Lockable)', 'divider_poly3', 's', '1', '1', '0.001', '0', '0', '0', '244', '1', '1', '1', '1', '1', 'gate', '2', '0', '0');
INSERT INTO furniture VALUES ('217', 'Corner plinth', 'divider_arm1', 's', '1', '1', '1.4', '1', '0', '0', '245', '1', '1', '1', '1', '1', 'default', '1', '0', '0');
INSERT INTO furniture VALUES ('218', 'Room divider', 'divider_arm2', 's', '2', '1', '1', '0', '0', '0', '246', '1', '1', '1', '1', '1', 'default', '1', '0', '0');
INSERT INTO furniture VALUES ('219', 'Knock', 'divider_arm3', 's', '1', '1', '0.001', '0', '0', '0', '247', '1', '1', '1', '1', '1', 'gate', '2', '0', '0');
INSERT INTO furniture VALUES ('220', 'Looks squishy', 'divider_nor1', 's', '1', '1', '1', '0', '0', '0', '248', '1', '1', '1', '1', '1', 'default', '1', '0', '0');
INSERT INTO furniture VALUES ('221', 'Corner Shelf', 'divider_silo1', 's', '1', '1', '1', '0', '0', '0', '249', '1', '1', '1', '1', '1', 'default', '1', '0', '0');
INSERT INTO furniture VALUES ('222', 'Strong', 'divider_nor2', 's', '2', '1', '1', '0', '0', '0', '250', '1', '1', '1', '1', '1', 'default', '1', '0', '0');
INSERT INTO furniture VALUES ('223', 'Screen', 'divider_silo2', 's', '2', '1', '1', '0', '0', '0', '251', '1', '1', '1', '1', '1', 'default', '1', '0', '0');
INSERT INTO furniture VALUES ('224', 'Door (Lockable)', 'divider_nor3', 's', '1', '1', '0.001', '0', '0', '0', '252', '1', '1', '1', '1', '1', 'gate', '2', '0', '0');
INSERT INTO furniture VALUES ('225', 'Gate (lockable)', 'divider_silo3', 's', '1', '1', '0.001', '0', '0', '0', '253', '1', '1', '1', '1', '1', 'gate', '2', '0', '0');
INSERT INTO furniture VALUES ('226', 'Typewriter', 'typingmachine', 's', '1', '1', '1', '0', '0', '0', '254', '0', '1', '1', '1', '1', 'default', '1', '0', '0');
INSERT INTO furniture VALUES ('227', 'Dragon Egg', 'spyro', 's', '1', '1', '1', '0', '0', '0', '260', '0', '1', '1', '1', '1', 'default', '1', '0', '0');
INSERT INTO furniture VALUES ('228', 'Holo-girl', 'redhologram', 's', '1', '1', '1', '0', '0', '0', '261', '0', '1', '1', '1', '1', 'default', '2', '0', '0');
INSERT INTO furniture VALUES ('230', 'Poinsetta', 'joulutahti', 's', '1', '1', '1', '0', '0', '0', '264', '1', '1', '1', '1', '1', 'default', '1', '0', '0');
INSERT INTO furniture VALUES ('231', 'Pink Hyacinth', 'hyacinth1', 's', '1', '1', '1', '0', '0', '0', '265', '1', '1', '1', '1', '1', 'default', '1', '0', '0');
INSERT INTO furniture VALUES ('232', 'Blue Hyacinth', 'hyacinth2', 's', '1', '1', '1', '0', '0', '0', '266', '1', '1', '1', '1', '1', 'default', '1', '0', '0');
INSERT INTO furniture VALUES ('233', 'Chair', 'chair_plasto*10', 's', '1', '1', '1', '0', '1', '0', '268', '1', '1', '1', '1', '1', 'default', '1', '0', '0');
INSERT INTO furniture VALUES ('234', 'Chair', 'chair_plasto*11', 's', '1', '1', '1', '0', '1', '0', '269', '1', '1', '1', '1', '1', 'default', '1', '0', '0');
INSERT INTO furniture VALUES ('235', 'Corner Cabinet/Desk', 'bardeskcorner_polyfon*12', 's', '1', '1', '1', '1', '0', '0', '270', '1', '1', '1', '1', '1', 'default', '1', '0', '0');
INSERT INTO furniture VALUES ('236', 'Corner Cabinet/Desk', 'bardeskcorner_polyfon*13', 's', '1', '1', '1', '1', '0', '0', '271', '1', '1', '1', '1', '1', 'default', '1', '0', '0');
INSERT INTO furniture VALUES ('237', 'Chair', 'chair_plasto*12', 's', '1', '1', '1', '0', '1', '0', '273', '1', '1', '1', '1', '1', 'default', '1', '0', '0');
INSERT INTO furniture VALUES ('238', 'Chair', 'chair_plasto*13', 's', '1', '1', '1', '0', '1', '0', '274', '1', '1', '1', '1', '1', 'default', '1', '0', '0');
INSERT INTO furniture VALUES ('239', 'HC chair', 'chair_plasto*14', 's', '1', '1', '1', '0', '1', '0', '275', '1', '1', '1', '1', '1', 'default', '1', '0', '0');
INSERT INTO furniture VALUES ('240', 'HC table', 'table_plasto_4leg*14', 's', '2', '2', '1', '1', '0', '0', '276', '1', '1', '1', '1', '1', 'default', '1', '0', '0');
INSERT INTO furniture VALUES ('241', 'Mochamaster', 'mocchamaster', 's', '1', '1', '1', '1', '0', '0', '277', '1', '1', '1', '1', '1', 'vendingmachine', '0', '9,8,14,15,6,10,11,12,17,13', '0');
INSERT INTO furniture VALUES ('242', 'Basketball Court', 'carpet_legocourt', 's', '3', '3', '0', '1', '0', '1', '278', '1', '1', '1', '1', '1', 'default', '1', '0', '0');
INSERT INTO furniture VALUES ('243', 'Team Bench', 'bench_lego', 's', '4', '1', '1', '0', '1', '0', '279', '1', '1', '1', '1', '1', 'default', '1', '0', '0');
INSERT INTO furniture VALUES ('244', 'Basketball Trophy', 'legotrophy', 's', '1', '1', '1', '0', '0', '0', '280', '1', '1', '1', '1', '0', 'trophy', '2', '0', '0');
INSERT INTO furniture VALUES ('245', 'Holiday Romance', 'valentinescreen', 's', '2', '1', '0.1', '0', '0', '1', '283', '1', '1', '1', '1', '1', 'default', '1', '0', '0');
INSERT INTO furniture VALUES ('246', 'Dicemaster', 'edicehc', 's', '1', '1', '1', '0', '0', '0', '284', '1', '1', '1', '1', '1', 'dice', '1', '0', '0');
INSERT INTO furniture VALUES ('247', 'Petal Patch', 'rare_daffodil_rug', 's', '2', '2', '0', '1', '0', '1', '285', '1', '1', '1', '1', '1', 'default', '1', '0', '0');
INSERT INTO furniture VALUES ('248', 'Blue Amber Lamp', 'rare_beehive_bulb', 's', '1', '1', '1', '0', '0', '0', '286', '1', '1', '1', '1', '1', 'default', '2', '0', '0');
INSERT INTO furniture VALUES ('249', 'Throne Sofa', 'hcsohva', 's', '2', '1', '1', '0', '1', '0', '287', '1', '1', '1', '1', '1', 'default', '1', '0', '0');
INSERT INTO furniture VALUES ('250', 'Tubmaster', 'hcamme', 's', '1', '2', '0.6', '0', '1', '0', '288', '1', '1', '1', '1', '1', 'default', '2', '0', '0');
INSERT INTO furniture VALUES ('251', 'Golden Elephant', 'rare_elephant_statue', 's', '1', '1', '1', '0', '0', '0', '290', '1', '1', '1', '1', '1', 'default', '1', '0', '0');
INSERT INTO furniture VALUES ('252', 'Bird Bath (red)', 'rare_fountain', 's', '1', '1', '1', '0', '0', '0', '291', '1', '1', '1', '1', '1', 'default', '2', '0', '0');
INSERT INTO furniture VALUES ('253', 'Speaker\'s Corner', 'rare_stand', 's', '1', '1', '1.7', '0', '1', '0', '292', '1', '1', '1', '1', '1', 'default', '1', '0', '0');
INSERT INTO furniture VALUES ('254', 'Snow Globe', 'rare_globe', 's', '1', '1', '1', '0', '0', '0', '293', '1', '1', '1', '1', '1', 'default', '2', '0', '0');
INSERT INTO furniture VALUES ('255', 'Hammock', 'rare_hammock', 's', '1', '3', '1.57', '0', '0', '0', '294', '1', '1', '1', '1', '1', 'bed', '1', '0', '0');
INSERT INTO furniture VALUES ('256', 'Silver Elephant', 'rare_elephant_statue*1', 's', '1', '1', '1', '0', '0', '0', '295', '1', '1', '1', '1', '1', 'default', '1', '0', '0');
INSERT INTO furniture VALUES ('257', 'Bronze Elephant', 'rare_elephant_statue*2', 's', '1', '1', '1', '0', '0', '0', '296', '1', '1', '1', '1', '1', 'default', '1', '0', '0');
INSERT INTO furniture VALUES ('258', 'Bird Bath (grey)', 'rare_fountain*1', 's', '1', '1', '1', '0', '0', '0', '297', '1', '1', '1', '1', '1', 'default', '2', '0', '0');
INSERT INTO furniture VALUES ('259', 'Bird Bath (green)', 'rare_fountain*2', 's', '1', '1', '1', '0', '0', '0', '298', '1', '1', '1', '1', '1', 'default', '2', '0', '0');
INSERT INTO furniture VALUES ('260', 'Bird Bath (blue)', 'rare_fountain*3', 's', '1', '1', '1', '0', '0', '0', '299', '1', '1', '1', '1', '1', 'default', '2', '0', '0');
INSERT INTO furniture VALUES ('261', 'Red Amber Lamp', 'rare_beehive_bulb*1', 's', '1', '1', '1', '0', '0', '0', '300', '1', '1', '1', '1', '1', 'default', '2', '0', '0');
INSERT INTO furniture VALUES ('262', 'Yellow Amber Lamp', 'rare_beehive_bulb*2', 's', '1', '1', '1', '0', '0', '0', '301', '1', '1', '1', '1', '1', 'default', '2', '0', '0');
INSERT INTO furniture VALUES ('263', 'Lappland Greetings', 'rare_xmas_screen', 's', '2', '1', '0', '0', '0', '1', '302', '1', '1', '1', '1', '1', 'default', '1', '0', '0');
INSERT INTO furniture VALUES ('264', 'Yellow Parasol', 'rare_parasol*1', 's', '1', '1', '1', '0', '0', '0', '303', '1', '1', '1', '1', '1', 'default', '2', '0', '0');
INSERT INTO furniture VALUES ('265', 'Orange Parasol', 'rare_parasol*2', 's', '1', '1', '1', '0', '0', '0', '304', '1', '1', '1', '1', '1', 'default', '2', '0', '0');
INSERT INTO furniture VALUES ('266', 'Violet Parasol', 'rare_parasol*3', 's', '1', '1', '1', '0', '0', '0', '305', '1', '1', '1', '1', '1', 'default', '2', '0', '0');
INSERT INTO furniture VALUES ('267', 'Dead tree', 'tree1', 's', '1', '1', '1', '0', '0', '0', '1758', '1', '1', '1', '1', '1', 'default', '1', '0', '0');
INSERT INTO furniture VALUES ('20045', 'arabian_tile', 'arabian_tile', 's', '2', '2', '0', '1', '0', '1', '3312', '1', '1', '1', '1', '1', 'default', '1', '0', '0');
INSERT INTO furniture VALUES ('269', 'White Candle', 'wcandle', 's', '1', '1', '1', '0', '0', '0', '2102', '1', '1', '1', '1', '1', 'default', '2', '0', '0');
INSERT INTO furniture VALUES ('270', 'Red Candle', 'rcandle', 's', '1', '1', '1', '0', '0', '0', '2121', '1', '1', '1', '1', '1', 'default', '2', '0', '0');
INSERT INTO furniture VALUES ('272', 'Gingerbread House', 'house2', 's', '1', '1', '1', '0', '0', '0', '428', '1', '1', '1', '1', '1', 'default', '1', '0', '0');
INSERT INTO furniture VALUES ('273', 'Habbo Turntable', 'djesko_turntable', 's', '1', '1', '1', '0', '0', '0', '449', '1', '1', '1', '1', '1', 'default', '1', '0', '0');
INSERT INTO furniture VALUES ('275', 'Habbo Cola Machine', 'md_limukaappi', 's', '1', '1', '1', '0', '0', '0', '457', '1', '1', '1', '1', '1', 'vendingmachine', '0', '19', '0');
INSERT INTO furniture VALUES ('276', 'Occasional Table', 'table_plasto_4leg*10', 's', '2', '2', '1', '1', '0', '0', '1484', '1', '1', '1', '1', '1', 'default', '1', '0', '0');
INSERT INTO furniture VALUES ('277', 'Occasional Table', 'table_plasto_4leg*15', 's', '2', '2', '1', '1', '0', '0', '1486', '1', '1', '1', '1', '1', 'default', '1', '0', '0');
INSERT INTO furniture VALUES ('278', 'Occasional Table', 'table_plasto_bigsquare*14', 's', '2', '2', '1', '1', '0', '0', '1487', '1', '1', '1', '1', '1', 'default', '1', '0', '0');
INSERT INTO furniture VALUES ('279', 'Occasional Table', 'table_plasto_bigsquare*15', 's', '2', '2', '1', '1', '0', '0', '1488', '1', '1', '1', '1', '1', 'default', '1', '0', '0');
INSERT INTO furniture VALUES ('280', 'Occasional Table', 'table_plasto_round*14', 's', '2', '2', '1', '1', '0', '0', '1489', '1', '1', '1', '1', '1', 'default', '1', '0', '0');
INSERT INTO furniture VALUES ('281', 'Occasional Table', 'table_plasto_round*15', 's', '2', '2', '1', '1', '0', '0', '1490', '1', '1', '1', '1', '1', 'default', '1', '0', '0');
INSERT INTO furniture VALUES ('282', 'Occasional Table', 'table_plasto_square*14', 's', '1', '1', '1', '1', '0', '0', '1491', '1', '1', '1', '1', '1', 'default', '1', '0', '0');
INSERT INTO furniture VALUES ('283', 'Occasional Table', 'table_plasto_square*15', 's', '1', '1', '1', '1', '0', '0', '1492', '1', '1', '1', '1', '1', 'default', '1', '0', '0');
INSERT INTO furniture VALUES ('284', 'Chair', 'chair_plasto*15', 's', '1', '1', '1', '0', '1', '0', '1495', '1', '1', '1', '1', '1', 'default', '1', '0', '0');
INSERT INTO furniture VALUES ('285', 'Plastic Pod Chair', 'chair_plasty*7', 's', '1', '1', '1', '0', '1', '0', '1496', '1', '1', '1', '1', '1', 'default', '1', '0', '0');
INSERT INTO furniture VALUES ('286', 'Plastic Pod Chair', 'chair_plasty*8', 's', '1', '1', '1', '0', '1', '0', '1497', '1', '1', '1', '1', '1', 'default', '1', '0', '0');
INSERT INTO furniture VALUES ('287', 'Plastic Pod Chair', 'chair_plasty*9', 's', '1', '1', '1', '0', '1', '0', '1498', '1', '1', '1', '1', '1', 'default', '1', '0', '0');
INSERT INTO furniture VALUES ('288', 'Plastic Pod Chair', 'chair_plasty*10', 's', '1', '1', '1', '0', '1', '0', '1499', '1', '1', '1', '1', '1', 'default', '1', '0', '0');
INSERT INTO furniture VALUES ('289', 'Plastic Pod Chair', 'chair_plasty*11', 's', '1', '1', '1', '0', '1', '0', '1500', '1', '1', '1', '1', '1', 'default', '1', '0', '0');
INSERT INTO furniture VALUES ('290', 'Chair', 'chair_plasto*16', 's', '1', '1', '1', '0', '1', '0', '1501', '1', '1', '1', '1', '1', 'default', '1', '0', '0');
INSERT INTO furniture VALUES ('291', 'Occasional Table', 'table_plasto_4leg*16', 's', '2', '2', '1', '1', '0', '0', '1502', '1', '1', '1', '1', '1', 'default', '1', '0', '0');
INSERT INTO furniture VALUES ('292', 'Scoreboard', 'hockey_score', 's', '1', '1', '1', '0', '0', '0', '1503', '1', '1', '1', '1', '1', 'scoreboard', '100', '0', '0');
INSERT INTO furniture VALUES ('293', 'Lert', 'hockey_light', 's', '1', '1', '1', '0', '0', '0', '1504', '1', '1', '1', '1', '1', 'alert', '2', '0', '0');
INSERT INTO furniture VALUES ('294', 'Imperial Teleport', 'doorD', 's', '1', '1', '0.001', '0', '0', '0', '1505', '1', '1', '0', '1', '1', 'teleport', '1', '0', '0');
INSERT INTO furniture VALUES ('295', 'Duck trophy', 'a0 prizetrophy2_b', 's', '1', '1', '1', '0', '0', '0', '1506', '1', '1', '1', '1', '0', 'trophy', '1', '0', '0');
INSERT INTO furniture VALUES ('296', 'Globe trophy', 'a0 prizetrophy3_b', 's', '1', '1', '1', '0', '0', '0', '1507', '1', '1', '1', '1', '0', 'trophy', '1', '0', '0');
INSERT INTO furniture VALUES ('297', 'Fish trophy', 'a0 prizetrophy4_b', 's', '1', '1', '1', '0', '0', '0', '1508', '1', '1', '1', '1', '0', 'trophy', '1', '0', '0');
INSERT INTO furniture VALUES ('298', 'Champion trophy', 'a0 prizetrophy5_b', 's', '1', '1', '1', '0', '0', '0', '1509', '1', '1', '1', '1', '0', 'trophy', '1', '0', '0');
INSERT INTO furniture VALUES ('299', 'Classic trophy', 'prizetrophy*1', 's', '1', '1', '1', '0', '0', '0', '1512', '1', '1', '1', '1', '0', 'trophy', '1', '0', '0');
INSERT INTO furniture VALUES ('300', 'Duck trophy', 'a0 prizetrophy2_g', 's', '1', '1', '1', '0', '0', '0', '1512', '1', '1', '1', '1', '0', 'trophy', '1', '0', '0');
INSERT INTO furniture VALUES ('301', 'Globe trophy', 'a0 prizetrophy3_g', 's', '1', '1', '1', '0', '0', '0', '1513', '1', '1', '1', '1', '0', 'trophy', '1', '0', '0');
INSERT INTO furniture VALUES ('302', 'Fish trophy', 'a0 prizetrophy4_g', 's', '1', '1', '1', '0', '0', '0', '1514', '1', '1', '1', '1', '0', 'trophy', '1', '0', '0');
INSERT INTO furniture VALUES ('303', 'Duo trophy', 'a0 prizetrophy5_g', 's', '1', '1', '1', '0', '0', '0', '1515', '1', '1', '1', '1', '0', 'trophy', '1', '0', '0');
INSERT INTO furniture VALUES ('304', 'Champion trophy', 'a0 prizetrophy6_g', 's', '1', '1', '1', '0', '0', '0', '1516', '1', '1', '1', '1', '0', 'trophy', '1', '0', '0');
INSERT INTO furniture VALUES ('305', 'Classic trophy', 'prizetrophy*2', 's', '1', '1', '1', '0', '0', '0', '1519', '1', '1', '1', '1', '0', 'trophy', '1', '0', '0');
INSERT INTO furniture VALUES ('306', 'Duck trophy', 'a0 prizetrophy2_s', 's', '1', '1', '1', '0', '0', '0', '1518', '1', '1', '1', '1', '0', 'trophy', '1', '0', '0');
INSERT INTO furniture VALUES ('307', 'Globe trophy', 'a0 prizetrophy3_s', 's', '1', '1', '1', '0', '0', '0', '1519', '1', '1', '1', '1', '0', 'trophy', '1', '0', '0');
INSERT INTO furniture VALUES ('308', 'Fish trophy', 'a0 prizetrophy4_s', 's', '1', '1', '1', '0', '0', '0', '1520', '1', '1', '1', '1', '0', 'trophy', '1', '0', '0');
INSERT INTO furniture VALUES ('309', 'Duo trophy', 'a0 prizetrophy5_s', 's', '1', '1', '1', '0', '0', '0', '1521', '1', '1', '1', '1', '0', 'trophy', '1', '0', '0');
INSERT INTO furniture VALUES ('310', 'Champion trophy', 'a0 prizetrophy6_s', 's', '1', '1', '1', '0', '0', '0', '1522', '1', '1', '1', '1', '0', 'trophy', '1', '0', '0');
INSERT INTO furniture VALUES ('311', 'Classic trophy', 'prizetrophy*3', 's', '1', '1', '1', '0', '0', '0', '1526', '1', '1', '1', '1', '0', 'trophy', '1', '0', '0');
INSERT INTO furniture VALUES ('312', 'Green Parasol', 'rare_parasol*0', 's', '1', '1', '1', '0', '0', '0', '289', '1', '1', '1', '1', '1', 'default', '2', '0', '0');
INSERT INTO furniture VALUES ('313', 'Oil Lamp', 'hc_lmp', 's', '1', '1', '1', '0', '0', '0', '1529', '1', '1', '1', '1', '1', 'default', '2', '0', '0');
INSERT INTO furniture VALUES ('314', 'Nordic Table', 'hc_tbl', 's', '1', '3', '1', '1', '0', '0', '1528', '1', '1', '1', '1', '1', 'default', '1', '0', '0');
INSERT INTO furniture VALUES ('315', 'Majestic Chair', 'hc_chr', 's', '1', '1', '1', '0', '1', '0', '1527', '1', '1', '1', '1', '1', 'default', '1', '0', '0');
INSERT INTO furniture VALUES ('316', 'Study Desk', 'hc_dsk', 's', '1', '2', '1', '0', '0', '0', '1530', '1', '1', '1', '1', '1', 'default', '2', '0', '0');
INSERT INTO furniture VALUES ('317', 'Night', 'nest', 's', '1', '1', '1', '1', '0', '0', '1531', '1', '1', '1', '1', '1', 'default', '1', '0', '0');
INSERT INTO furniture VALUES ('318', 'Bones Mega Multipack', 'petfood1', 's', '1', '1', '1', '1', '0', '0', '1532', '1', '1', '1', '1', '1', 'default', '1', '0', '0');
INSERT INTO furniture VALUES ('319', 'Sardines Mega Multipack', 'petfood2', 's', '1', '1', '1', '1', '0', '0', '1533', '1', '1', '1', '1', '1', 'default', '1', '0', '0');
INSERT INTO furniture VALUES ('320', 'Cabbage Mega Multipack', 'petfood3', 's', '1', '1', '1', '1', '0', '0', '1534', '1', '1', '1', '1', '1', 'default', '1', '0', '0');
INSERT INTO furniture VALUES ('321', 'Blue Water Bowl', 'waterbowl*4', 's', '1', '1', '1', '1', '0', '0', '1535', '1', '1', '1', '1', '1', 'default', '1', '0', '0');
INSERT INTO furniture VALUES ('322', 'Brown Water Bowl', 'waterbowl*5', 's', '1', '1', '1', '1', '0', '0', '1536', '1', '1', '1', '1', '1', 'default', '1', '0', '0');
INSERT INTO furniture VALUES ('323', 'Green Water Bowl', 'waterbowl*2', 's', '1', '1', '1', '1', '0', '0', '1537', '1', '1', '1', '1', '1', 'default', '1', '0', '0');
INSERT INTO furniture VALUES ('324', 'Red Water Bowl', 'waterbowl*1', 's', '1', '1', '1', '1', '0', '0', '1538', '1', '1', '1', '1', '1', 'default', '1', '0', '0');
INSERT INTO furniture VALUES ('325', 'Yellow Water Bowl', 'waterbowl*3', 's', '1', '1', '1', '1', '0', '0', '1539', '1', '1', '1', '1', '1', 'default', '1', '0', '0');
INSERT INTO furniture VALUES ('326', 'Rubber Ball', 'toy1', 's', '1', '1', '1', '1', '0', '0', '1540', '1', '1', '1', '1', '1', 'default', '1', '0', '0');
INSERT INTO furniture VALUES ('327', 'Rubber Ball', 'toy1*1', 's', '1', '1', '1', '1', '0', '0', '1541', '1', '1', '1', '1', '1', 'default', '1', '0', '0');
INSERT INTO furniture VALUES ('328', 'Rubber Ball', 'toy1*2', 's', '1', '1', '1', '1', '0', '0', '1542', '1', '1', '1', '1', '1', 'default', '1', '0', '0');
INSERT INTO furniture VALUES ('329', 'Rubber Ball', 'toy1*3', 's', '1', '1', '1', '1', '0', '0', '1543', '1', '1', '1', '1', '1', 'default', '1', '0', '0');
INSERT INTO furniture VALUES ('330', 'Rubber Ball', 'toy1*4', 's', '1', '1', '1', '1', '0', '0', '1544', '1', '1', '1', '1', '1', 'default', '1', '0', '0');
INSERT INTO furniture VALUES ('331', 'Marzipan Man', 'goodie1', 's', '1', '1', '1', '1', '0', '0', '1545', '1', '1', '1', '1', '1', 'default', '1', '0', '0');
INSERT INTO furniture VALUES ('332', 'Marzipan Man', 'goodie1*1', 's', '1', '1', '1', '1', '0', '0', '1546', '1', '1', '1', '1', '1', 'default', '1', '0', '0');
INSERT INTO furniture VALUES ('333', 'Marzipan Man', 'goodie1*2', 's', '1', '1', '1', '1', '0', '0', '1547', '1', '1', '1', '1', '1', 'default', '1', '0', '0');
INSERT INTO furniture VALUES ('334', 'Chocolate Mouse', 'goodie2', 's', '1', '1', '1', '1', '0', '0', '1548', '1', '1', '1', '1', '1', 'default', '1', '0', '0');
INSERT INTO furniture VALUES ('335', 'Bronze Habbo trophy', 'a0 prizetrophy7_b', 's', '1', '1', '1', '0', '0', '0', '1547', '1', '1', '1', '1', '0', 'trophy', '1', '0', '0');
INSERT INTO furniture VALUES ('336', 'Gold Habbo trophy', 'a0 prizetrophy7_g', 's', '1', '1', '1', '0', '0', '0', '1548', '1', '1', '1', '1', '0', 'trophy', '1', '0', '0');
INSERT INTO furniture VALUES ('337', 'Silver Habbo trophy', 'a0 prizetrophy7_s', 's', '1', '1', '1', '0', '0', '0', '1549', '1', '1', '1', '1', '0', 'trophy', '1', '0', '0');
INSERT INTO furniture VALUES ('338', 'Red Laser Door', 'scifiport*0', 's', '1', '1', '0.001', '0', '0', '0', '1549', '1', '1', '1', '1', '1', 'gate', '2', '0', '0');
INSERT INTO furniture VALUES ('339', 'Violet Sci-Fi Port', 'scifiport*9', 's', '1', '1', '0.001', '0', '0', '0', '1550', '1', '1', '1', '1', '1', 'gate', '2', '0', '0');
INSERT INTO furniture VALUES ('340', 'Purple Sci-Fi Port', 'scifiport*8', 's', '1', '1', '0.001', '0', '0', '0', '1551', '1', '1', '1', '1', '1', 'gate', '2', '0', '0');
INSERT INTO furniture VALUES ('341', 'Aqua Laser Gate', 'scifiport*7', 's', '1', '1', '0.001', '0', '0', '0', '1552', '1', '1', '1', '1', '1', 'gate', '2', '0', '0');
INSERT INTO furniture VALUES ('342', 'White Sci-Fi Port', 'scifiport*6', 's', '1', '1', '0.001', '0', '0', '0', '1553', '1', '1', '1', '1', '1', 'gate', '2', '0', '0');
INSERT INTO furniture VALUES ('343', 'Security Fence', 'scifiport*5', 's', '1', '1', '0.001', '0', '0', '0', '1554', '1', '1', '1', '1', '1', 'gate', '2', '0', '0');
INSERT INTO furniture VALUES ('344', 'Pink Sci-Fi Port', 'scifiport*4', 's', '1', '1', '0.001', '0', '0', '0', '1555', '1', '1', '1', '1', '1', 'gate', '2', '0', '0');
INSERT INTO furniture VALUES ('345', 'Jade Sci-Fi Port', 'scifiport*3', 's', '1', '1', '0.001', '0', '0', '0', '1556', '1', '1', '1', '1', '1', 'gate', '2', '0', '0');
INSERT INTO furniture VALUES ('346', 'Blue Laser Gate', 'scifiport*2', 's', '1', '1', '0.001', '0', '0', '0', '1557', '1', '1', '1', '1', '1', 'gate', '2', '0', '0');
INSERT INTO furniture VALUES ('347', 'Gold Laser Gate', 'scifiport*1', 's', '1', '1', '0.001', '0', '0', '0', '1558', '1', '1', '1', '1', '1', 'gate', '2', '0', '0');
INSERT INTO furniture VALUES ('348', 'Neptune Smoke Machine', 'scifirocket*9', 's', '1', '1', '1', '0', '0', '0', '1559', '1', '1', '1', '1', '1', 'default', '2', '0', '0');
INSERT INTO furniture VALUES ('349', 'From a space far', 'scifirocket*8', 's', '1', '1', '1', '0', '0', '0', '1560', '1', '1', '1', '1', '1', 'default', '2', '0', '0');
INSERT INTO furniture VALUES ('350', 'Jupiter Smoke Machine', 'scifirocket*7', 's', '1', '1', '1', '0', '0', '0', '1561', '1', '1', '1', '1', '1', 'default', '2', '0', '0');
INSERT INTO furniture VALUES ('351', 'Mercury Smoke Machine', 'scifirocket*6', 's', '1', '1', '1', '0', '0', '0', '1562', '1', '1', '1', '1', '1', 'default', '2', '0', '0');
INSERT INTO furniture VALUES ('352', 'Uranus Smoke Machine', 'scifirocket*5', 's', '1', '1', '1', '0', '0', '0', '1563', '1', '1', '1', '1', '1', 'default', '2', '0', '0');
INSERT INTO furniture VALUES ('353', 'Venus Smoke Machine', 'scifirocket*4', 's', '1', '1', '1', '0', '0', '0', '1564', '1', '1', '1', '1', '1', 'default', '2', '0', '0');
INSERT INTO furniture VALUES ('354', 'Endor Smoke Machine', 'scifirocket*3', 's', '1', '1', '1', '0', '0', '0', '1565', '1', '1', '1', '1', '1', 'default', '2', '0', '0');
INSERT INTO furniture VALUES ('355', 'Earth Smoke Machine', 'scifirocket*2', 's', '1', '1', '1', '0', '0', '0', '1566', '1', '1', '1', '1', '1', 'default', '2', '0', '0');
INSERT INTO furniture VALUES ('356', 'Saturn Smoke Machine', 'scifirocket*1', 's', '1', '1', '1', '0', '0', '0', '1567', '1', '1', '1', '1', '1', 'default', '2', '0', '0');
INSERT INTO furniture VALUES ('357', 'Mars Smoke Machine', 'scifirocket*0', 's', '1', '1', '1', '0', '0', '0', '1568', '1', '1', '1', '1', '1', 'default', '2', '0', '0');
INSERT INTO furniture VALUES ('358', 'Violet Starship Door', 'scifidoor*10', 's', '1', '1', '0.001', '0', '0', '0', '1569', '1', '1', '1', '1', '1', 'gate', '2', '0', '0');
INSERT INTO furniture VALUES ('359', 'It\'s blue', 'scifidoor*9', 's', '1', '1', '0.001', '0', '0', '0', '1570', '1', '1', '1', '1', '1', 'gate', '2', '0', '0');
INSERT INTO furniture VALUES ('360', 'Purple Spaceship Door', 'scifidoor*8', 's', '1', '1', '0.001', '0', '0', '0', '1571', '1', '1', '1', '1', '1', 'gate', '2', '0', '0');
INSERT INTO furniture VALUES ('361', 'Aqua Spaceship Door', 'scifidoor*7', 's', '1', '1', '0.001', '0', '0', '0', '1572', '1', '1', '1', '1', '1', 'gate', '2', '0', '0');
INSERT INTO furniture VALUES ('362', 'Black Monolith', 'scifidoor*6', 's', '1', '1', '0.001', '0', '0', '0', '1573', '1', '1', '1', '1', '1', 'gate', '2', '0', '0');
INSERT INTO furniture VALUES ('363', 'White Spaceship Door', 'scifidoor*5', 's', '1', '1', '0.001', '0', '0', '0', '1574', '1', '1', '1', '1', '1', 'gate', '2', '0', '0');
INSERT INTO furniture VALUES ('364', 'Emerald Spaceship Door', 'scifidoor*4', 's', '1', '1', '0.001', '0', '0', '0', '1575', '1', '1', '1', '1', '1', 'gate', '2', '0', '0');
INSERT INTO furniture VALUES ('365', 'Lightblue Spaceship Door', 'scifidoor*3', 's', '1', '1', '0.001', '0', '0', '0', '1576', '1', '1', '1', '1', '1', 'gate', '2', '0', '0');
INSERT INTO furniture VALUES ('366', 'Yellow Spaceship Door', 'scifidoor*2', 's', '1', '1', '0.001', '0', '0', '0', '1577', '1', '1', '1', '1', '1', 'gate', '2', '0', '0');
INSERT INTO furniture VALUES ('367', 'Pink Spaceship Door', 'scifidoor*1', 's', '1', '1', '0.001', '0', '0', '0', '1578', '1', '1', '1', '1', '1', 'gate', '2', '0', '0');
INSERT INTO furniture VALUES ('368', 'Puffy', 'pillow*5', 's', '1', '1', '1', '0', '1', '0', '1579', '1', '1', '1', '1', '1', 'default', '1', '0', '0');
INSERT INTO furniture VALUES ('369', 'Puffy', 'pillow*8', 's', '1', '1', '1', '0', '1', '0', '1580', '1', '1', '1', '1', '1', 'default', '1', '0', '0');
INSERT INTO furniture VALUES ('370', 'White Lace Pillow', 'pillow*0', 's', '1', '1', '1', '0', '1', '0', '1581', '1', '1', '1', '1', '1', 'default', '1', '0', '0');
INSERT INTO furniture VALUES ('371', 'Puffy', 'pillow*1', 's', '1', '1', '1', '0', '1', '0', '1582', '1', '1', '1', '1', '1', 'default', '1', '0', '0');
INSERT INTO furniture VALUES ('372', 'Puffy', 'pillow*2', 's', '1', '1', '1', '0', '1', '0', '1583', '1', '1', '1', '1', '1', 'default', '1', '0', '0');
INSERT INTO furniture VALUES ('373', 'Purple Velvet Pillow', 'pillow*7', 's', '1', '1', '1', '0', '1', '0', '1584', '1', '1', '1', '1', '1', 'default', '1', '0', '0');
INSERT INTO furniture VALUES ('374', 'Puffy', 'pillow*9', 's', '1', '1', '1', '0', '1', '0', '1585', '1', '1', '1', '1', '1', 'default', '1', '0', '0');
INSERT INTO furniture VALUES ('375', 'Puffy', 'pillow*4', 's', '1', '1', '1', '0', '1', '0', '1586', '1', '1', '1', '1', '1', 'default', '1', '0', '0');
INSERT INTO furniture VALUES ('376', 'Puffy', 'pillow*6', 's', '1', '1', '1', '0', '1', '0', '1587', '1', '1', '1', '1', '1', 'default', '1', '0', '0');
INSERT INTO furniture VALUES ('377', 'Puffy', 'pillow*3', 's', '1', '1', '1', '0', '1', '0', '1588', '1', '1', '1', '1', '1', 'default', '1', '0', '0');
INSERT INTO furniture VALUES ('378', 'Pink marquee', 'marquee*1', 's', '1', '1', '0.001', '0', '0', '0', '1589', '1', '1', '1', '1', '1', 'gate', '2', '0', '0');
INSERT INTO furniture VALUES ('379', 'Red Dragon Marquee', 'marquee*2', 's', '1', '1', '0.001', '0', '0', '0', '1590', '1', '1', '1', '1', '1', 'gate', '2', '0', '0');
INSERT INTO furniture VALUES ('380', 'Purple Marquee', 'marquee*7', 's', '1', '1', '0.001', '0', '0', '0', '1591', '1', '1', '1', '1', '1', 'gate', '2', '0', '0');
INSERT INTO furniture VALUES ('381', 'White Marquee', 'marquee*10', 's', '1', '1', '0.001', '0', '0', '0', '1592', '1', '1', '1', '1', '1', 'gate', '2', '0', '0');
INSERT INTO furniture VALUES ('382', 'Ultramarine Marquee', 'marquee*8', 's', '1', '1', '0.001', '0', '0', '0', '1593', '1', '1', '1', '1', '1', 'gate', '2', '0', '0');
INSERT INTO furniture VALUES ('383', 'Green Marquee', 'marquee*9', 's', '1', '1', '0.001', '0', '0', '0', '1594', '1', '1', '1', '1', '1', 'gate', '2', '0', '0');
INSERT INTO furniture VALUES ('384', 'Graphite Marquee', 'marquee*5', 's', '1', '1', '0.001', '0', '0', '0', '1595', '1', '1', '1', '1', '1', 'gate', '2', '0', '0');
INSERT INTO furniture VALUES ('385', 'Yellow Marquee', 'marquee*4', 's', '1', '1', '0.001', '0', '0', '0', '1596', '1', '1', '1', '1', '1', 'gate', '2', '0', '0');
INSERT INTO furniture VALUES ('386', 'Blue Marquee', 'marquee*6', 's', '1', '1', '0.001', '0', '0', '0', '1597', '1', '1', '1', '1', '1', 'gate', '2', '0', '0');
INSERT INTO furniture VALUES ('387', 'Aqua Marquee', 'marquee*3', 's', '1', '1', '0.001', '0', '0', '0', '1598', '1', '1', '1', '1', '1', 'gate', '2', '0', '0');
INSERT INTO furniture VALUES ('388', 'Pink Oriental screen', 'wooden_screen*1', 's', '1', '2', '1', '0', '0', '0', '1599', '1', '1', '1', '1', '1', 'default', '1', '0', '0');
INSERT INTO furniture VALUES ('389', 'RosewoodScreen', 'wooden_screen*2', 's', '1', '2', '1', '0', '0', '0', '1600', '1', '1', '1', '1', '1', 'default', '1', '0', '0');
INSERT INTO furniture VALUES ('390', 'Purple Oriental Screen', 'wooden_screen*7', 's', '1', '2', '1', '0', '0', '0', '1601', '1', '1', '1', '1', '1', 'default', '1', '0', '0');
INSERT INTO furniture VALUES ('391', 'White Oriental Screen', 'wooden_screen*0', 's', '1', '2', '1', '0', '0', '0', '1602', '1', '1', '1', '1', '1', 'default', '1', '0', '0');
INSERT INTO furniture VALUES ('392', 'Night Blue Oriental Screen', 'wooden_screen*8', 's', '1', '2', '1', '0', '0', '0', '1603', '1', '1', '1', '1', '1', 'default', '1', '0', '0');
INSERT INTO furniture VALUES ('393', 'Gray Oriental Screen', 'wooden_screen*5', 's', '1', '2', '1', '0', '0', '0', '1604', '1', '1', '1', '1', '1', 'default', '1', '0', '0');
INSERT INTO furniture VALUES ('394', 'Green Oriental Screen', 'wooden_screen*9', 's', '1', '2', '1', '0', '0', '0', '1605', '1', '1', '1', '1', '1', 'default', '1', '0', '0');
INSERT INTO furniture VALUES ('395', 'Golden Oriental Screen', 'wooden_screen*4', 's', '1', '2', '1', '0', '0', '0', '1606', '1', '1', '1', '1', '1', 'default', '1', '0', '0');
INSERT INTO furniture VALUES ('396', 'Blue Oriental Screen', 'wooden_screen*6', 's', '1', '2', '1', '0', '0', '0', '1607', '1', '1', '1', '1', '1', 'default', '1', '0', '0');
INSERT INTO furniture VALUES ('397', 'Terracotta Pillar', 'wooden_screen*3', 's', '1', '2', '1', '0', '0', '0', '1608', '1', '1', '1', '1', '1', 'default', '1', '0', '0');
INSERT INTO furniture VALUES ('398', 'Pink Marble Pillar', 'pillar*1', 's', '1', '1', '1', '0', '0', '0', '1610', '1', '1', '1', '1', '1', 'default', '1', '0', '0');
INSERT INTO furniture VALUES ('399', 'Rock Pillar', 'pillar*9', 's', '1', '1', '1', '0', '0', '0', '1611', '1', '1', '1', '1', '1', 'default', '1', '0', '0');
INSERT INTO furniture VALUES ('400', 'Classy architect', 'pillar*0', 's', '1', '1', '1', '0', '0', '0', '1612', '1', '1', '1', '1', '1', 'default', '1', '0', '0');
INSERT INTO furniture VALUES ('401', 'Roman Pillar', 'pillar*8', 's', '1', '1', '1', '0', '0', '0', '1613', '1', '1', '1', '1', '1', 'default', '1', '0', '0');
INSERT INTO furniture VALUES ('402', 'Nordic Pillar', 'pillar*2', 's', '1', '1', '1', '0', '0', '0', '1614', '1', '1', '1', '1', '1', 'default', '1', '0', '0');
INSERT INTO furniture VALUES ('403', 'Pagan Pillar', 'pillar*5', 's', '1', '1', '1', '0', '0', '0', '1615', '1', '1', '1', '1', '1', 'default', '1', '0', '0');
INSERT INTO furniture VALUES ('404', 'Dark Ages Pillar', 'pillar*4', 's', '1', '1', '1', '0', '0', '0', '1616', '1', '1', '1', '1', '1', 'default', '1', '0', '0');
INSERT INTO furniture VALUES ('405', 'Atlantean Pillar', 'pillar*7', 's', '1', '1', '1', '0', '0', '0', '1617', '1', '1', '1', '1', '1', 'default', '1', '0', '0');
INSERT INTO furniture VALUES ('406', 'blue pillar', 'pillar*3', 's', '1', '1', '1', '0', '0', '0', '1618', '1', '1', '1', '1', '1', 'default', '1', '0', '0');
INSERT INTO furniture VALUES ('407', 'Serpent of Doom', 'rare_dragonlamp*4', 's', '1', '1', '1', '0', '0', '0', '1619', '1', '1', '1', '1', '1', 'default', '2', '0', '0');
INSERT INTO furniture VALUES ('408', 'Fire Dragon Lamp', 'rare_dragonlamp*0', 's', '1', '1', '1', '0', '0', '0', '1620', '1', '1', '1', '1', '1', 'default', '2', '0', '0');
INSERT INTO furniture VALUES ('409', 'Elf Green Dragon Lamp', 'rare_dragonlamp*5', 's', '1', '1', '1', '0', '0', '0', '1621', '1', '1', '1', '1', '1', 'default', '2', '0', '0');
INSERT INTO furniture VALUES ('410', 'Jade Dragon Lamp', 'rare_dragonlamp*2', 's', '1', '1', '1', '0', '0', '0', '1622', '1', '1', '1', '1', '1', 'default', '2', '0', '0');
INSERT INTO furniture VALUES ('411', 'Bronze Dragon Lamp', 'rare_dragonlamp*8', 's', '1', '1', '1', '0', '0', '0', '1623', '1', '1', '1', '1', '1', 'default', '2', '0', '0');
INSERT INTO furniture VALUES ('412', 'Purple Dragon Lamp', 'rare_dragonlamp*9', 's', '1', '1', '1', '0', '0', '0', '1624', '1', '1', '1', '1', '1', 'default', '2', '0', '0');
INSERT INTO furniture VALUES ('413', 'Sky Dragon Lamp', 'rare_dragonlamp*7', 's', '1', '1', '1', '0', '0', '0', '1625', '1', '1', '1', '1', '1', 'default', '2', '0', '0');
INSERT INTO furniture VALUES ('414', 'Gold Dragon Lamp', 'rare_dragonlamp*6', 's', '1', '1', '1', '0', '0', '0', '1626', '1', '1', '1', '1', '1', 'default', '2', '0', '0');
INSERT INTO furniture VALUES ('415', 'Sea Dragon Lamp', 'rare_dragonlamp*1', 's', '1', '1', '1', '0', '0', '0', '1627', '1', '1', '1', '1', '1', 'default', '2', '0', '0');
INSERT INTO furniture VALUES ('416', 'Silver Dragon Lamp', 'rare_dragonlamp*3', 's', '1', '1', '1', '0', '0', '0', '1628', '1', '1', '1', '1', '1', 'default', '2', '0', '0');
INSERT INTO furniture VALUES ('417', 'Blueberry Ice Cream Machine', 'rare_icecream*1', 's', '1', '1', '1', '0', '0', '0', '1629', '1', '1', '1', '1', '1', 'vendingmachine', '0', '4', '0');
INSERT INTO furniture VALUES ('418', 'Chocolate Ice Cream Machine', 'rare_icecream*7', 's', '1', '1', '1', '0', '0', '0', '1630', '1', '1', '1', '1', '1', 'vendingmachine', '0', '4', '0');
INSERT INTO furniture VALUES ('419', 'Peppermint Ice Cream Machine', 'rare_icecream*8', 's', '1', '1', '1', '0', '0', '0', '1631', '1', '1', '1', '1', '1', 'vendingmachine', '0', '4', '0');
INSERT INTO furniture VALUES ('420', 'Pistachio Ice Cream Machine', 'rare_icecream*2', 's', '1', '1', '1', '0', '0', '0', '1632', '1', '1', '1', '1', '1', 'vendingmachine', '0', '4', '0');
INSERT INTO furniture VALUES ('421', 'Toffee Ice Cream Machine', 'rare_icecream*6', 's', '1', '1', '1', '0', '0', '0', '1633', '1', '1', '1', '1', '1', 'vendingmachine', '0', '4', '0');
INSERT INTO furniture VALUES ('422', 'Bubblegum Ice Cream Machine', 'rare_icecream*9', 's', '1', '1', '1', '0', '0', '0', '1634', '1', '1', '1', '1', '1', 'vendingmachine', '0', '4', '0');
INSERT INTO furniture VALUES ('423', 'Blackcurrant Ice Cream Machine', 'rare_icecream*3', 's', '1', '1', '1', '0', '0', '0', '1635', '1', '1', '1', '1', '1', 'vendingmachine', '0', '4', '0');
INSERT INTO furniture VALUES ('424', 'Cherry Ice Cream Machine', 'rare_icecream*0', 's', '1', '1', '1', '0', '0', '0', '1636', '1', '1', '1', '1', '1', 'vendingmachine', '0', '4', '0');
INSERT INTO furniture VALUES ('425', 'Strawberry Ice Cream Machine', 'rare_icecream*4', 's', '1', '1', '1', '0', '0', '0', '1637', '1', '1', '1', '1', '1', 'vendingmachine', '0', '4', '0');
INSERT INTO furniture VALUES ('426', 'Vanilla Ice Cream Machine', 'rare_icecream*5', 's', '1', '1', '1', '0', '0', '0', '1638', '1', '1', '1', '1', '1', 'vendingmachine', '0', '4', '0');
INSERT INTO furniture VALUES ('427', 'Brown Powered Fan', 'rare_fan*7', 's', '1', '1', '1', '0', '0', '0', '1639', '1', '1', '1', '1', '1', 'default', '2', '0', '0');
INSERT INTO furniture VALUES ('428', 'Ochre Powered Fan', 'rare_fan*6', 's', '1', '1', '1', '0', '0', '0', '1640', '1', '1', '1', '1', '1', 'default', '2', '0', '0');
INSERT INTO furniture VALUES ('429', 'Fucsia Powered Fan', 'rare_fan*9', 's', '1', '1', '1', '0', '0', '0', '1641', '1', '1', '1', '1', '1', 'default', '2', '0', '0');
INSERT INTO furniture VALUES ('430', 'Purple Dragon Skin Fan', 'rare_fan*3', 's', '1', '1', '1', '0', '0', '0', '1642', '1', '1', '1', '1', '1', 'default', '2', '0', '0');
INSERT INTO furniture VALUES ('431', 'Festive Fan', 'rare_fan*0', 's', '1', '1', '1', '0', '0', '0', '1643', '1', '1', '1', '1', '1', 'default', '2', '0', '0');
INSERT INTO furniture VALUES ('432', 'SUPERLOVE Fan', 'rare_fan*4', 's', '1', '1', '1', '0', '0', '0', '1644', '1', '1', '1', '1', '1', 'default', '2', '0', '0');
INSERT INTO furniture VALUES ('433', 'Yellow Powered Fan', 'rare_fan*5', 's', '1', '1', '1', '0', '0', '0', '1645', '1', '1', '1', '1', '1', 'default', '2', '0', '0');
INSERT INTO furniture VALUES ('434', 'Birthday Fan', 'rare_fan*1', 's', '1', '1', '1', '0', '0', '0', '1646', '1', '1', '1', '1', '1', 'default', '2', '0', '0');
INSERT INTO furniture VALUES ('435', 'Stylish', 'rare_fan*8', 's', '1', '1', '1', '0', '0', '0', '1647', '1', '1', '1', '1', '1', 'default', '2', '0', '0');
INSERT INTO furniture VALUES ('436', 'Green Powered Fan', 'rare_fan*2', 's', '1', '1', '1', '0', '0', '0', '1648', '1', '1', '1', '1', '1', 'default', '2', '0', '0');
INSERT INTO furniture VALUES ('437', 'Ice Habbo Roller', 'queue_tile1*3', 's', '1', '1', '0.5', '1', '0', '1', '1649', '1', '1', '1', '1', '1', 'roller', '1', '0', '0');
INSERT INTO furniture VALUES ('438', 'Blue Habbo Roller', 'queue_tile1*6', 's', '1', '1', '0.5', '1', '0', '1', '1650', '1', '1', '1', '1', '1', 'roller', '1', '0', '0');
INSERT INTO furniture VALUES ('439', 'Gold Habbo Roller', 'queue_tile1*4', 's', '1', '1', '0.5', '1', '0', '1', '1651', '1', '1', '1', '1', '1', 'roller', '1', '0', '0');
INSERT INTO furniture VALUES ('440', 'Green Habbo Roller', 'queue_tile1*9', 's', '1', '1', '0.5', '1', '0', '1', '1652', '1', '1', '1', '1', '1', 'roller', '1', '0', '0');
INSERT INTO furniture VALUES ('441', 'Navy Habbo Roller', 'queue_tile1*8', 's', '1', '1', '0.5', '1', '0', '1', '1653', '1', '1', '1', '1', '1', 'roller', '1', '0', '0');
INSERT INTO furniture VALUES ('442', 'Knight Roller', 'queue_tile1*5', 's', '1', '1', '0.5', '1', '0', '1', '1654', '1', '1', '1', '1', '1', 'roller', '1', '0', '0');
INSERT INTO furniture VALUES ('443', 'Purple Habbo Roller', 'queue_tile1*7', 's', '1', '1', '0.5', '1', '0', '1', '1655', '1', '1', '1', '1', '1', 'roller', '1', '0', '0');
INSERT INTO furniture VALUES ('444', 'Red Habbo Roller', 'queue_tile1*2', 's', '1', '1', '0.5', '1', '0', '1', '1656', '1', '1', '1', '1', '1', 'roller', '1', '0', '0');
INSERT INTO furniture VALUES ('445', 'Pink Habbo Roller', 'queue_tile1*1', 's', '1', '1', '0.5', '1', '0', '1', '1657', '1', '1', '1', '1', '1', 'roller', '1', '0', '0');
INSERT INTO furniture VALUES ('446', 'White Quest Roller', 'queue_tile1*0', 's', '1', '1', '0.5', '1', '0', '1', '1658', '1', '1', '1', '1', '1', 'roller', '1', '0', '0');
INSERT INTO furniture VALUES ('20071', 'ads_gsArcade_2 name', 'ads_gsArcade_2', 's', '1', '1', '1', '1', '0', '0', '3278', '1', '1', '1', '1', '1', 'default', '2', '0', '0');
INSERT INTO furniture VALUES ('448', 'Snow Rug', 'rare_snowrug', 's', '2', '2', '0', '1', '0', '1', '1738', '1', '1', '1', '1', '1', 'default', '1', '0', '0');
INSERT INTO furniture VALUES ('449', 'Lantern', 'cn_lamp', 's', '1', '1', '1', '0', '0', '0', '1741', '1', '1', '1', '1', '1', 'default', '2', '0', '0');
INSERT INTO furniture VALUES ('450', 'Chinese Sofa', 'cn_sofa', 's', '3', '1', '1', '0', '1', '0', '1742', '1', '1', '1', '1', '1', 'default', '1', '0', '0');
INSERT INTO furniture VALUES ('451', 'Sport track straight', 'sporttrack1*1', 's', '2', '2', '0', '1', '0', '1', '1745', '1', '1', '1', '1', '1', 'default', '1', '0', '0');
INSERT INTO furniture VALUES ('452', 'Sport track straight grass', 'sporttrack1*3', 's', '2', '2', '0', '1', '0', '1', '1747', '1', '1', '1', '1', '1', 'default', '1', '0', '0');
INSERT INTO furniture VALUES ('453', 'Sport track straight asphalt', 'sporttrack1*2', 's', '2', '2', '0', '1', '0', '1', '1748', '1', '1', '1', '1', '1', 'default', '1', '0', '0');
INSERT INTO furniture VALUES ('454', 'Sport corner tartan', 'sporttrack2*1', 's', '2', '2', '0', '1', '0', '1', '1750', '1', '1', '1', '1', '1', 'default', '1', '0', '0');
INSERT INTO furniture VALUES ('455', 'Sport corner asphalt', 'sporttrack2*2', 's', '2', '2', '0', '1', '0', '1', '1751', '1', '1', '1', '1', '1', 'default', '1', '0', '0');
INSERT INTO furniture VALUES ('456', 'Sport corner grass', 'sporttrack2*3', 's', '2', '2', '0', '1', '0', '1', '1752', '1', '1', '1', '1', '1', 'default', '1', '0', '0');
INSERT INTO furniture VALUES ('457', 'Sport goal tartan', 'sporttrack3*1', 's', '2', '2', '0', '1', '0', '1', '1754', '1', '1', '1', '1', '1', 'default', '1', '0', '0');
INSERT INTO furniture VALUES ('458', 'Sport goal asphalt', 'sporttrack3*2', 's', '2', '2', '0', '1', '0', '1', '1755', '1', '1', '1', '1', '1', 'default', '1', '0', '0');
INSERT INTO furniture VALUES ('459', 'Sport goal grass', 'sporttrack3*3', 's', '2', '2', '0', '1', '0', '1', '1756', '1', '1', '1', '1', '1', 'default', '1', '0', '0');
INSERT INTO furniture VALUES ('460', 'Football Lamp', 'footylamp', 's', '1', '1', '1', '0', '0', '0', '1757', '1', '1', '1', '1', '1', 'default', '2', '0', '0');
INSERT INTO furniture VALUES ('461', 'Bar Stool', 'barchair_silo', 's', '1', '1', '1.2', '0', '1', '0', '1759', '1', '1', '1', '1', '1', 'default', '1', '0', '0');
INSERT INTO furniture VALUES ('462', 'Habbos', 'divider_nor4*4', 's', '2', '1', '1', '0', '0', '0', '1760', '1', '1', '1', '1', '1', 'gate', '2', '0', '0');
INSERT INTO furniture VALUES ('463', 'Classic Traffic Light', 'traffic_light*1', 's', '1', '1', '1', '0', '0', '0', '1761', '1', '1', '1', '1', '1', 'default', '3', '0', '0');
INSERT INTO furniture VALUES ('464', 'Blue Traffic Light', 'traffic_light*2', 's', '1', '1', '1', '0', '0', '0', '1762', '1', '1', '1', '1', '1', 'default', '3', '0', '0');
INSERT INTO furniture VALUES ('465', 'Purple Traffic Light', 'traffic_light*3', 's', '1', '1', '1', '0', '0', '0', '1763', '1', '1', '1', '1', '1', 'default', '3', '0', '0');
INSERT INTO furniture VALUES ('466', 'Yellow Traffic Light', 'traffic_light*4', 's', '1', '1', '1', '0', '0', '0', '1764', '1', '1', '1', '1', '1', 'default', '3', '0', '0');
INSERT INTO furniture VALUES ('467', 'Red Traffic Light', 'traffic_light*6', 's', '1', '1', '1', '0', '0', '0', '1765', '1', '1', '1', '1', '1', 'default', '3', '0', '0');
INSERT INTO furniture VALUES ('468', 'Blue Inflatable Chair', 'rubberchair*1', 's', '1', '1', '1', '0', '1', '0', '1766', '1', '1', '1', '1', '1', 'default', '1', '0', '0');
INSERT INTO furniture VALUES ('469', 'Pink Inflatable Chair', 'rubberchair*2', 's', '1', '1', '1', '0', '1', '0', '1767', '1', '1', '1', '1', '1', 'default', '1', '0', '0');
INSERT INTO furniture VALUES ('470', 'Orange Inflatable Chair', 'rubberchair*3', 's', '1', '1', '1', '0', '1', '0', '1768', '1', '1', '1', '1', '1', 'default', '1', '0', '0');
INSERT INTO furniture VALUES ('471', 'Ocean Inflatable Chair', 'rubberchair*4', 's', '1', '1', '1', '0', '1', '0', '1769', '1', '1', '1', '1', '1', 'default', '1', '0', '0');
INSERT INTO furniture VALUES ('472', 'Lime Inflatable Chair', 'rubberchair*5', 's', '1', '1', '1', '0', '1', '0', '1770', '1', '1', '1', '1', '1', 'default', '1', '0', '0');
INSERT INTO furniture VALUES ('473', 'Violet Inflatable Chair', 'rubberchair*6', 's', '1', '1', '1', '0', '1', '0', '1771', '1', '1', '1', '1', '1', 'default', '1', '0', '0');
INSERT INTO furniture VALUES ('474', 'Yellow Maze Barrier', 'barrier*1', 's', '1', '2', '1', '0', '0', '0', '1772', '1', '1', '1', '1', '1', 'default', '2', '0', '0');
INSERT INTO furniture VALUES ('475', 'No trespassing', 'barrier*2', 's', '1', '2', '1', '0', '0', '0', '1773', '1', '1', '1', '1', '1', 'default', '2', '0', '0');
INSERT INTO furniture VALUES ('476', 'No trespassing', 'barrier*3', 's', '1', '2', '1', '0', '0', '0', '1774', '1', '1', '1', '1', '1', 'default', '2', '0', '0');
INSERT INTO furniture VALUES ('477', 'White Inflatable Chair', 'rubberchair*7', 's', '1', '1', '1', '0', '1', '0', '1775', '1', '1', '1', '1', '1', 'default', '1', '0', '0');
INSERT INTO furniture VALUES ('478', 'Black Inflatable Chair', 'rubberchair*8', 's', '1', '1', '1', '0', '1', '0', '1776', '1', '1', '1', '1', '1', 'default', '1', '0', '0');
INSERT INTO furniture VALUES ('479', 'Black Iced Table', 'table_norja_med*2', 's', '2', '2', '1', '1', '0', '0', '1777', '1', '1', '1', '1', '1', 'default', '1', '0', '0');
INSERT INTO furniture VALUES ('480', 'White Iced Table', 'table_norja_med*3', 's', '2', '2', '1', '1', '0', '0', '1778', '1', '1', '1', '1', '1', 'default', '1', '0', '0');
INSERT INTO furniture VALUES ('481', 'Urban Iced Coffee Table', 'table_norja_med*4', 's', '2', '2', '1', '1', '0', '0', '1779', '1', '1', '1', '1', '1', 'default', '1', '0', '0');
INSERT INTO furniture VALUES ('482', 'Large Coffee Table Pink', 'table_norja_med*5', 's', '2', '2', '1', '1', '0', '0', '1780', '1', '1', '1', '1', '1', 'default', '1', '0', '0');
INSERT INTO furniture VALUES ('483', 'Large Coffee Table Blue', 'table_norja_med*6', 's', '2', '2', '1', '1', '0', '0', '1781', '1', '1', '1', '1', '1', 'default', '1', '0', '0');
INSERT INTO furniture VALUES ('484', 'Rural Iced Coffee Table', 'table_norja_med*7', 's', '2', '2', '1', '1', '0', '0', '1782', '1', '1', '1', '1', '1', 'default', '1', '0', '0');
INSERT INTO furniture VALUES ('485', 'Large Coffee Table Yellow', 'table_norja_med*8', 's', '2', '2', '1', '1', '0', '0', '1783', '1', '1', '1', '1', '1', 'default', '1', '0', '0');
INSERT INTO furniture VALUES ('486', 'Large Coffee Table Red', 'table_norja_med*9', 's', '2', '2', '1', '1', '0', '0', '1784', '1', '1', '1', '1', '1', 'default', '1', '0', '0');
INSERT INTO furniture VALUES ('487', 'Black Iced Bench', 'couch_norja*2', 's', '2', '1', '1', '0', '1', '0', '1785', '1', '1', '1', '1', '1', 'default', '1', '0', '0');
INSERT INTO furniture VALUES ('488', 'White Iced Bench', 'couch_norja*3', 's', '2', '1', '1', '0', '1', '0', '1786', '1', '1', '1', '1', '1', 'default', '1', '0', '0');
INSERT INTO furniture VALUES ('489', 'Urban Iced Bench', 'couch_norja*4', 's', '2', '1', '1', '0', '1', '0', '1787', '1', '1', '1', '1', '1', 'default', '1', '0', '0');
INSERT INTO furniture VALUES ('490', 'Pink Bench', 'couch_norja*5', 's', '2', '1', '1', '0', '1', '0', '1788', '1', '1', '1', '1', '1', 'default', '1', '0', '0');
INSERT INTO furniture VALUES ('491', 'Blue Bench', 'couch_norja*6', 's', '2', '1', '1', '0', '1', '0', '1789', '1', '1', '1', '1', '1', 'default', '1', '0', '0');
INSERT INTO furniture VALUES ('492', 'Rural Iced Bench', 'couch_norja*7', 's', '2', '1', '1', '0', '1', '0', '1790', '1', '1', '1', '1', '1', 'default', '1', '0', '0');
INSERT INTO furniture VALUES ('493', 'Yellow Bench', 'couch_norja*8', 's', '2', '1', '1', '0', '1', '0', '1791', '1', '1', '1', '1', '1', 'default', '1', '0', '0');
INSERT INTO furniture VALUES ('494', 'Red Bench', 'couch_norja*9', 's', '2', '1', '1', '0', '1', '0', '1792', '1', '1', '1', '1', '1', 'default', '1', '0', '0');
INSERT INTO furniture VALUES ('495', 'Black Iced Bookcase', 'shelves_norja*2', 's', '1', '1', '1', '0', '0', '0', '1793', '1', '1', '1', '1', '1', 'default', '1', '0', '0');
INSERT INTO furniture VALUES ('496', 'Urban Iced Bookcase', 'shelves_norja*3', 's', '1', '1', '1', '0', '0', '0', '1794', '1', '1', '1', '1', '1', 'default', '1', '0', '0');
INSERT INTO furniture VALUES ('497', 'Pink Bookcase', 'shelves_norja*5', 's', '1', '1', '1', '0', '0', '0', '1796', '1', '1', '1', '1', '1', 'default', '1', '0', '0');
INSERT INTO furniture VALUES ('498', 'Blue Bookcase', 'shelves_norja*6', 's', '1', '1', '1', '0', '0', '0', '1797', '1', '1', '1', '1', '1', 'default', '1', '0', '0');
INSERT INTO furniture VALUES ('499', 'Rural Iced Bookcase', 'shelves_norja*7', 's', '1', '1', '1', '0', '0', '0', '1798', '1', '1', '1', '1', '1', 'default', '1', '0', '0');
INSERT INTO furniture VALUES ('500', 'Yellow Bookcase', 'shelves_norja*8', 's', '1', '1', '1', '0', '0', '0', '1799', '1', '1', '1', '1', '1', 'default', '1', '0', '0');
INSERT INTO furniture VALUES ('501', 'Red Bookcase', 'shelves_norja*9', 's', '1', '1', '1', '0', '0', '0', '1800', '1', '1', '1', '1', '1', 'default', '1', '0', '0');
INSERT INTO furniture VALUES ('502', 'Black Iced Chair', 'chair_norja*2', 's', '1', '1', '1', '0', '1', '0', '1801', '1', '1', '1', '1', '1', 'default', '1', '0', '0');
INSERT INTO furniture VALUES ('503', 'White Iced Chair', 'chair_norja*3', 's', '1', '1', '1', '0', '1', '0', '1802', '1', '1', '1', '1', '1', 'default', '1', '0', '0');
INSERT INTO furniture VALUES ('504', 'Urban Iced Chair', 'chair_norja*4', 's', '1', '1', '1', '0', '1', '0', '1803', '1', '1', '1', '1', '1', 'default', '1', '0', '0');
INSERT INTO furniture VALUES ('505', 'Pink Chair', 'chair_norja*5', 's', '1', '1', '1', '0', '1', '0', '1804', '1', '1', '1', '1', '1', 'default', '1', '0', '0');
INSERT INTO furniture VALUES ('506', 'Blue Chair', 'chair_norja*6', 's', '1', '1', '1', '0', '1', '0', '1805', '1', '1', '1', '1', '1', 'default', '1', '0', '0');
INSERT INTO furniture VALUES ('507', 'Rural Chair', 'chair_norja*7', 's', '1', '1', '1', '0', '1', '0', '1806', '1', '1', '1', '1', '1', 'default', '1', '0', '0');
INSERT INTO furniture VALUES ('508', 'Yellow Chair', 'chair_norja*8', 's', '1', '1', '1', '0', '1', '0', '1807', '1', '1', '1', '1', '1', 'default', '1', '0', '0');
INSERT INTO furniture VALUES ('509', 'Red Chair', 'chair_norja*9', 's', '1', '1', '1', '0', '1', '0', '1808', '1', '1', '1', '1', '1', 'default', '1', '0', '0');
INSERT INTO furniture VALUES ('510', 'Black Iced Corner', 'divider_nor1*2', 's', '1', '1', '1', '0', '0', '0', '1809', '1', '1', '1', '1', '1', 'default', '1', '0', '0');
INSERT INTO furniture VALUES ('511', 'Looks squishy', 'divider_nor1*3', 's', '1', '1', '1', '0', '0', '0', '1810', '1', '1', '1', '1', '1', 'default', '1', '0', '0');
INSERT INTO furniture VALUES ('512', 'Urban Iced Corner', 'divider_nor1*4', 's', '1', '1', '1', '0', '0', '0', '1811', '1', '1', '1', '1', '1', 'default', '1', '0', '0');
INSERT INTO furniture VALUES ('513', 'Pink Ice corner', 'divider_nor1*5', 's', '1', '1', '1', '0', '0', '0', '1812', '1', '1', '1', '1', '1', 'default', '1', '0', '0');
INSERT INTO furniture VALUES ('514', 'Blue Ice corner', 'divider_nor1*6', 's', '1', '1', '1', '0', '0', '0', '1813', '1', '1', '1', '1', '1', 'default', '1', '0', '0');
INSERT INTO furniture VALUES ('515', 'Rural Iced Corner', 'divider_nor1*7', 's', '1', '1', '1', '0', '0', '0', '1814', '1', '1', '1', '1', '1', 'default', '1', '0', '0');
INSERT INTO furniture VALUES ('516', 'Yellow Ice corner', 'divider_nor1*8', 's', '1', '1', '1', '0', '0', '0', '1815', '1', '1', '1', '1', '1', 'default', '1', '0', '0');
INSERT INTO furniture VALUES ('517', 'Red Ice corner', 'divider_nor1*9', 's', '1', '1', '1', '0', '0', '0', '1816', '1', '1', '1', '1', '1', 'default', '1', '0', '0');
INSERT INTO furniture VALUES ('518', 'Black Iced Sofa', 'soft_sofa_norja*2', 's', '2', '1', '1', '0', '1', '0', '1817', '1', '1', '1', '1', '1', 'default', '1', '0', '0');
INSERT INTO furniture VALUES ('519', 'Pristine white', 'soft_sofa_norja*3', 's', '2', '1', '1', '0', '1', '0', '1818', '1', '1', '1', '1', '1', 'default', '1', '0', '0');
INSERT INTO furniture VALUES ('520', 'Urban Iced Sofa', 'soft_sofa_norja*4', 's', '2', '1', '1', '0', '1', '0', '1819', '1', '1', '1', '1', '1', 'default', '1', '0', '0');
INSERT INTO furniture VALUES ('521', 'Pink Iced Sofa', 'soft_sofa_norja*5', 's', '2', '1', '1', '0', '1', '0', '1820', '1', '1', '1', '1', '1', 'default', '1', '0', '0');
INSERT INTO furniture VALUES ('522', 'Blue Iced Sofa', 'soft_sofa_norja*6', 's', '2', '1', '1', '0', '1', '0', '1821', '1', '1', '1', '1', '1', 'default', '1', '0', '0');
INSERT INTO furniture VALUES ('523', 'Rural Iced Sofa', 'soft_sofa_norja*7', 's', '2', '1', '1', '0', '1', '0', '1822', '1', '1', '1', '1', '1', 'default', '1', '0', '0');
INSERT INTO furniture VALUES ('524', 'Yellow Iced Sofa', 'soft_sofa_norja*8', 's', '2', '1', '1', '0', '1', '0', '1823', '1', '1', '1', '1', '1', 'default', '1', '0', '0');
INSERT INTO furniture VALUES ('525', 'Red Iced Sofa', 'soft_sofa_norja*9', 's', '2', '1', '1', '0', '1', '0', '1824', '1', '1', '1', '1', '1', 'default', '1', '0', '0');
INSERT INTO furniture VALUES ('526', 'Black Iced Sofachair', 'soft_sofachair_norja*2', 's', '1', '1', '1', '0', '1', '0', '1825', '1', '1', '1', '1', '1', 'default', '1', '0', '0');
INSERT INTO furniture VALUES ('527', 'White Iced Sofachair', 'soft_sofachair_norja*3', 's', '1', '1', '1', '0', '1', '0', '1826', '1', '1', '1', '1', '1', 'default', '1', '0', '0');
INSERT INTO furniture VALUES ('528', 'Urban Iced Sofachair', 'soft_sofachair_norja*4', 's', '1', '1', '1', '0', '1', '0', '1827', '1', '1', '1', '1', '1', 'default', '1', '0', '0');
INSERT INTO furniture VALUES ('529', 'Pink Iced Sofachair', 'soft_sofachair_norja*5', 's', '1', '1', '1', '0', '1', '0', '1828', '1', '1', '1', '1', '1', 'default', '1', '0', '0');
INSERT INTO furniture VALUES ('530', 'Blue Iced Sofachair', 'soft_sofachair_norja*6', 's', '1', '1', '1', '0', '1', '0', '1829', '1', '1', '1', '1', '1', 'default', '1', '0', '0');
INSERT INTO furniture VALUES ('531', 'Rural Iced Sofachair', 'soft_sofachair_norja*7', 's', '1', '1', '1', '0', '1', '0', '1830', '1', '1', '1', '1', '1', 'default', '1', '0', '0');
INSERT INTO furniture VALUES ('532', 'Yellow Iced Sofachair', 'soft_sofachair_norja*8', 's', '1', '1', '1', '0', '1', '0', '1831', '1', '1', '1', '1', '1', 'default', '1', '0', '0');
INSERT INTO furniture VALUES ('533', 'Red Iced Sofachair', 'soft_sofachair_norja*9', 's', '1', '1', '1', '0', '1', '0', '1832', '1', '1', '1', '1', '1', 'default', '1', '0', '0');
INSERT INTO furniture VALUES ('534', 'Large', 'sofachair_silo*2', 's', '1', '1', '1.1', '0', '1', '0', '1833', '1', '1', '1', '1', '1', 'default', '1', '0', '0');
INSERT INTO furniture VALUES ('535', 'Large', 'sofachair_silo*3', 's', '1', '1', '1.1', '0', '1', '0', '1834', '1', '1', '1', '1', '1', 'default', '1', '0', '0');
INSERT INTO furniture VALUES ('536', 'Beige Area Armchair', 'sofachair_silo*4', 's', '1', '1', '1.1', '0', '1', '0', '1835', '1', '1', '1', '1', '1', 'default', '1', '0', '0');
INSERT INTO furniture VALUES ('537', 'Pink Area Armchair', 'sofachair_silo*5', 's', '1', '1', '1.1', '0', '1', '0', '1836', '1', '1', '1', '1', '1', 'default', '1', '0', '0');
INSERT INTO furniture VALUES ('538', 'Blue Area Armchair', 'sofachair_silo*6', 's', '1', '1', '1.1', '0', '1', '0', '1837', '1', '1', '1', '1', '1', 'default', '1', '0', '0');
INSERT INTO furniture VALUES ('539', 'Green Area Armchair', 'sofachair_silo*7', 's', '1', '1', '1.1', '0', '1', '0', '1838', '1', '1', '1', '1', '1', 'default', '1', '0', '0');
INSERT INTO furniture VALUES ('540', 'Large', 'sofachair_silo*8', 's', '1', '1', '1.1', '0', '1', '0', '1839', '1', '1', '1', '1', '1', 'default', '1', '0', '0');
INSERT INTO furniture VALUES ('541', 'Red Area Armchair', 'sofachair_silo*9', 's', '1', '1', '1.1', '0', '1', '0', '1840', '1', '1', '1', '1', '1', 'default', '1', '0', '0');
INSERT INTO furniture VALUES ('542', 'Black Occasional Table', 'table_silo_small*2', 's', '1', '1', '1', '1', '0', '0', '1841', '1', '1', '1', '1', '1', 'default', '1', '0', '0');
INSERT INTO furniture VALUES ('543', 'White Occasional Table', 'table_silo_small*3', 's', '1', '1', '1', '1', '0', '0', '1842', '1', '1', '1', '1', '1', 'default', '1', '0', '0');
INSERT INTO furniture VALUES ('544', 'Beige Area Occasional Table', 'table_silo_small*4', 's', '1', '1', '1', '1', '0', '0', '1843', '1', '1', '1', '1', '1', 'default', '1', '0', '0');
INSERT INTO furniture VALUES ('545', 'Pink Area Occasional Table', 'table_silo_small*5', 's', '1', '1', '1', '1', '0', '0', '1844', '1', '1', '1', '1', '1', 'default', '1', '0', '0');
INSERT INTO furniture VALUES ('546', 'Blue Area Occasional Table', 'table_silo_small*6', 's', '1', '1', '1', '1', '0', '0', '1845', '1', '1', '1', '1', '1', 'default', '1', '0', '0');
INSERT INTO furniture VALUES ('547', 'Green Area Occasional Table', 'table_silo_small*7', 's', '1', '1', '1', '1', '0', '0', '1846', '1', '1', '1', '1', '1', 'default', '1', '0', '0');
INSERT INTO furniture VALUES ('548', 'Yellow Occasional Table', 'table_silo_small*8', 's', '1', '1', '1', '1', '0', '0', '1847', '1', '1', '1', '1', '1', 'default', '1', '0', '0');
INSERT INTO furniture VALUES ('549', 'Red Area Occasional Table', 'table_silo_small*9', 's', '1', '1', '1', '1', '0', '0', '1848', '1', '1', '1', '1', '1', 'default', '1', '0', '0');
INSERT INTO furniture VALUES ('550', 'Black Corner Shelf', 'divider_silo1*2', 's', '1', '1', '1', '0', '0', '0', '1849', '1', '1', '1', '1', '1', 'default', '1', '0', '0');
INSERT INTO furniture VALUES ('551', 'White Corner Shelf', 'divider_silo1*3', 's', '1', '1', '1', '0', '0', '0', '1850', '1', '1', '1', '1', '1', 'default', '1', '0', '0');
INSERT INTO furniture VALUES ('552', 'Beige Area Corner Shelf', 'divider_silo1*4', 's', '1', '1', '1', '0', '0', '0', '1851', '1', '1', '1', '1', '1', 'default', '1', '0', '0');
INSERT INTO furniture VALUES ('553', 'Pink Area Corner Shelf', 'divider_silo1*5', 's', '1', '1', '1', '0', '0', '0', '1852', '1', '1', '1', '1', '1', 'default', '1', '0', '0');
INSERT INTO furniture VALUES ('554', 'Blue Area Corner Shelf', 'divider_silo1*6', 's', '1', '1', '1', '0', '0', '0', '1853', '1', '1', '1', '1', '1', 'default', '1', '0', '0');
INSERT INTO furniture VALUES ('555', 'Green Area Corner Shelf', 'divider_silo1*7', 's', '1', '1', '1', '0', '0', '0', '1854', '1', '1', '1', '1', '1', 'default', '1', '0', '0');
INSERT INTO furniture VALUES ('556', 'Yellow Corner Shelf', 'divider_silo1*8', 's', '1', '1', '1', '0', '0', '0', '1855', '1', '1', '1', '1', '1', 'default', '1', '0', '0');
INSERT INTO furniture VALUES ('557', 'Red Area Corner Shelf', 'divider_silo1*9', 's', '1', '1', '1', '0', '0', '0', '1856', '1', '1', '1', '1', '1', 'default', '1', '0', '0');
INSERT INTO furniture VALUES ('558', 'Black Area Gate', 'divider_silo3*2', 's', '1', '1', '0.001', '0', '0', '0', '1857', '1', '1', '1', '1', '1', 'gate', '2', '0', '0');
INSERT INTO furniture VALUES ('559', 'White Area Gate', 'divider_silo3*3', 's', '1', '1', '0.001', '0', '0', '0', '1858', '1', '1', '1', '1', '1', 'gate', '2', '0', '0');
INSERT INTO furniture VALUES ('560', 'Beige Area Gate', 'divider_silo3*4', 's', '1', '1', '0.001', '0', '0', '0', '1859', '1', '1', '1', '1', '1', 'gate', '2', '0', '0');
INSERT INTO furniture VALUES ('561', 'Pink Area Gate', 'divider_silo3*5', 's', '1', '1', '0.001', '0', '0', '0', '1860', '1', '1', '1', '1', '1', 'gate', '2', '0', '0');
INSERT INTO furniture VALUES ('562', 'Blue Area Gate', 'divider_silo3*6', 's', '1', '1', '0.001', '0', '0', '0', '1861', '1', '1', '1', '1', '1', 'gate', '2', '0', '0');
INSERT INTO furniture VALUES ('563', 'Green Area Gate', 'divider_silo3*7', 's', '1', '1', '0.001', '0', '0', '0', '1862', '1', '1', '1', '1', '1', 'gate', '2', '0', '0');
INSERT INTO furniture VALUES ('564', 'Yellow Area Gate', 'divider_silo3*8', 's', '1', '1', '0.001', '0', '0', '0', '1863', '1', '1', '1', '1', '1', 'gate', '2', '0', '0');
INSERT INTO furniture VALUES ('565', 'Red Area Gate', 'divider_silo3*9', 's', '1', '1', '0.001', '0', '0', '0', '1864', '1', '1', '1', '1', '1', 'gate', '2', '0', '0');
INSERT INTO furniture VALUES ('566', 'Black Coffee Table', 'table_silo_med*2', 's', '2', '2', '1', '1', '0', '0', '1865', '1', '1', '1', '1', '1', 'default', '1', '0', '0');
INSERT INTO furniture VALUES ('567', 'White Coffee Table', 'table_silo_med*3', 's', '2', '2', '1', '1', '0', '0', '1866', '1', '1', '1', '1', '1', 'default', '1', '0', '0');
INSERT INTO furniture VALUES ('568', 'Beige Area Coffee Table', 'table_silo_med*4', 's', '2', '2', '1', '1', '0', '0', '1867', '1', '1', '1', '1', '1', 'default', '1', '0', '0');
INSERT INTO furniture VALUES ('569', 'Pink Area Coffee Table', 'table_silo_med*5', 's', '2', '2', '1', '1', '0', '0', '1868', '1', '1', '1', '1', '1', 'default', '1', '0', '0');
INSERT INTO furniture VALUES ('570', 'Blue Area Coffee Table', 'table_silo_med*6', 's', '2', '2', '1', '1', '0', '0', '1869', '1', '1', '1', '1', '1', 'default', '1', '0', '0');
INSERT INTO furniture VALUES ('571', 'Green Area Coffee Table', 'table_silo_med*7', 's', '2', '2', '1', '1', '0', '0', '1870', '1', '1', '1', '1', '1', 'default', '1', '0', '0');
INSERT INTO furniture VALUES ('572', 'Yellow Coffee Table', 'table_silo_med*8', 's', '2', '2', '1', '1', '0', '0', '1871', '1', '1', '1', '1', '1', 'default', '1', '0', '0');
INSERT INTO furniture VALUES ('573', 'Red Area Coffee Table', 'table_silo_med*9', 's', '2', '2', '1', '1', '0', '0', '1872', '1', '1', '1', '1', '1', 'default', '1', '0', '0');
INSERT INTO furniture VALUES ('574', 'Cushioned', 'sofa_silo*2', 's', '2', '1', '1.1', '0', '1', '0', '1873', '1', '1', '1', '1', '1', 'default', '1', '0', '0');
INSERT INTO furniture VALUES ('575', 'Cushioned', 'sofa_silo*3', 's', '2', '1', '1.1', '0', '1', '0', '1874', '1', '1', '1', '1', '1', 'default', '1', '0', '0');
INSERT INTO furniture VALUES ('576', 'Beige Area Sofa', 'sofa_silo*4', 's', '2', '1', '1.1', '0', '1', '0', '1875', '1', '1', '1', '1', '1', 'default', '1', '0', '0');
INSERT INTO furniture VALUES ('577', 'Pink Area Sofa', 'sofa_silo*5', 's', '2', '1', '1.1', '0', '1', '0', '1876', '1', '1', '1', '1', '1', 'default', '1', '0', '0');
INSERT INTO furniture VALUES ('578', 'Blue Area Sofa', 'sofa_silo*6', 's', '2', '1', '1.1', '0', '1', '0', '1877', '1', '1', '1', '1', '1', 'default', '1', '0', '0');
INSERT INTO furniture VALUES ('579', 'Green Area Sofa', 'sofa_silo*7', 's', '2', '1', '1.1', '0', '1', '0', '1878', '1', '1', '1', '1', '1', 'default', '1', '0', '0');
INSERT INTO furniture VALUES ('580', 'Cushioned', 'sofa_silo*8', 's', '2', '1', '1.1', '0', '1', '0', '1879', '1', '1', '1', '1', '1', 'default', '1', '0', '0');
INSERT INTO furniture VALUES ('581', 'Red Area Sofa', 'sofa_silo*9', 's', '2', '1', '1.1', '0', '1', '0', '1880', '1', '1', '1', '1', '1', 'default', '1', '0', '0');
INSERT INTO furniture VALUES ('582', 'Black Mode Armchair', 'sofachair_polyfon*2', 's', '1', '1', '1.1', '0', '1', '0', '1881', '1', '1', '1', '1', '1', 'default', '1', '0', '0');
INSERT INTO furniture VALUES ('583', 'White Armchair', 'sofachair_polyfon*3', 's', '1', '1', '1.1', '0', '1', '0', '1882', '1', '1', '1', '1', '1', 'default', '1', '0', '0');
INSERT INTO furniture VALUES ('584', 'Beige Mode Armchair', 'sofachair_polyfon*4', 's', '1', '1', '1.1', '0', '1', '0', '1883', '1', '1', '1', '1', '1', 'default', '1', '0', '0');
INSERT INTO furniture VALUES ('585', 'Blue Mode Armchair', 'sofachair_polyfon*6', 's', '1', '1', '1.1', '0', '1', '0', '1884', '1', '1', '1', '1', '1', 'default', '1', '0', '0');
INSERT INTO furniture VALUES ('586', 'Green Armchair', 'sofachair_polyfon*7', 's', '1', '1', '1.1', '0', '1', '0', '1885', '1', '1', '1', '1', '1', 'default', '1', '0', '0');
INSERT INTO furniture VALUES ('587', 'Yellow Mode Armchair', 'sofachair_polyfon*8', 's', '1', '1', '1.1', '0', '1', '0', '1886', '1', '1', '1', '1', '1', 'default', '1', '0', '0');
INSERT INTO furniture VALUES ('588', 'Red Armchair', 'sofachair_polyfon*9', 's', '1', '1', '1.1', '0', '1', '0', '1887', '1', '1', '1', '1', '1', 'default', '1', '0', '0');
INSERT INTO furniture VALUES ('589', 'Black Mode Sofa', 'sofa_polyfon*2', 's', '2', '1', '1.1', '0', '1', '0', '1888', '1', '1', '1', '1', '1', 'default', '1', '0', '0');
INSERT INTO furniture VALUES ('590', 'White Two-seater Sofa', 'sofa_polyfon*3', 's', '2', '1', '1.1', '0', '1', '0', '1889', '1', '1', '1', '1', '1', 'default', '1', '0', '0');
INSERT INTO furniture VALUES ('591', 'Beige Mode Sofa', 'sofa_polyfon*4', 's', '2', '1', '1.1', '0', '1', '0', '1890', '1', '1', '1', '1', '1', 'default', '1', '0', '0');
INSERT INTO furniture VALUES ('592', 'Blue Mode Sofa', 'sofa_polyfon*6', 's', '2', '1', '1.1', '0', '1', '0', '1891', '1', '1', '1', '1', '1', 'default', '1', '0', '0');
INSERT INTO furniture VALUES ('593', 'Green Two-seater Sofa', 'sofa_polyfon*7', 's', '2', '1', '1.1', '0', '1', '0', '1892', '1', '1', '1', '1', '1', 'default', '1', '0', '0');
INSERT INTO furniture VALUES ('594', 'Yellow Mode Sofa', 'sofa_polyfon*8', 's', '2', '1', '1.1', '0', '1', '0', '1893', '1', '1', '1', '1', '1', 'default', '1', '0', '0');
INSERT INTO furniture VALUES ('595', 'Black Mode Double Bed', 'sofa_polyfon*9', 's', '2', '1', '1.1', '0', '1', '0', '1894', '1', '1', '1', '1', '1', 'default', '1', '0', '0');
INSERT INTO furniture VALUES ('596', 'White Double Bed', 'bed_polyfon*3', 's', '2', '3', '1.8', '0', '0', '0', '1896', '1', '1', '1', '1', '1', 'bed', '1', '0', '0');
INSERT INTO furniture VALUES ('597', 'Beige Mode Double Bed', 'bed_polyfon*4', 's', '2', '3', '1.8', '0', '0', '0', '1897', '1', '1', '1', '1', '1', 'bed', '1', '0', '0');
INSERT INTO furniture VALUES ('598', 'Blue Mode Double Bed', 'bed_polyfon*6', 's', '2', '3', '1.8', '0', '0', '0', '1898', '1', '1', '1', '1', '1', 'bed', '1', '0', '0');
INSERT INTO furniture VALUES ('599', 'Green Double Bed', 'bed_polyfon*7', 's', '2', '3', '1.8', '0', '0', '0', '1899', '1', '1', '1', '1', '1', 'bed', '1', '0', '0');
INSERT INTO furniture VALUES ('600', 'Yellow Mode Double Bed', 'bed_polyfon*8', 's', '2', '3', '1.8', '0', '0', '0', '1900', '1', '1', '1', '1', '1', 'bed', '1', '0', '0');
INSERT INTO furniture VALUES ('601', 'Red Double Bed', 'bed_polyfon*9', 's', '2', '3', '1.8', '0', '0', '0', '1901', '1', '1', '1', '1', '1', 'bed', '1', '0', '0');
INSERT INTO furniture VALUES ('602', 'Black Mode Single Bed', 'bed_polyfon_one*2', 's', '1', '3', '1.8', '0', '0', '0', '1902', '1', '1', '1', '1', '1', 'bed', '1', '0', '0');
INSERT INTO furniture VALUES ('603', 'White Single Bed', 'bed_polyfon_one*3', 's', '1', '3', '1.8', '0', '0', '0', '1903', '1', '1', '1', '1', '1', 'bed', '1', '0', '0');
INSERT INTO furniture VALUES ('604', 'Beige Mode Single Bed', 'bed_polyfon_one*4', 's', '1', '3', '1.8', '0', '0', '0', '1904', '1', '1', '1', '1', '1', 'bed', '1', '0', '0');
INSERT INTO furniture VALUES ('605', 'Blue Mode Single Bed', 'bed_polyfon_one*6', 's', '1', '3', '1.8', '0', '0', '0', '1905', '1', '1', '1', '1', '1', 'bed', '1', '0', '0');
INSERT INTO furniture VALUES ('606', 'Green Single Bed', 'bed_polyfon_one*7', 's', '1', '3', '1.8', '0', '0', '0', '1906', '1', '1', '1', '1', '1', 'bed', '1', '0', '0');
INSERT INTO furniture VALUES ('607', 'Yellow Mode Single Bed', 'bed_polyfon_one*8', 's', '1', '3', '1.8', '0', '0', '0', '1907', '1', '1', '1', '1', '1', 'bed', '1', '0', '0');
INSERT INTO furniture VALUES ('608', 'Red Single Bed', 'bed_polyfon_one*9', 's', '1', '3', '1.8', '0', '0', '0', '1908', '1', '1', '1', '1', '1', 'bed', '1', '0', '0');
INSERT INTO furniture VALUES ('609', 'Black Mode Bardesk', 'bardesk_polyfon*2', 's', '2', '1', '1', '1', '0', '0', '1909', '1', '1', '1', '1', '1', 'default', '1', '0', '0');
INSERT INTO furniture VALUES ('610', 'White Bardesk', 'bardesk_polyfon*3', 's', '2', '1', '1', '1', '0', '0', '1910', '1', '1', '1', '1', '1', 'default', '1', '0', '0');
INSERT INTO furniture VALUES ('611', 'Beige Mode Bardesk', 'bardesk_polyfon*4', 's', '2', '1', '1', '1', '0', '0', '1911', '1', '1', '1', '1', '1', 'default', '1', '0', '0');
INSERT INTO furniture VALUES ('612', 'Candy Bar', 'bardesk_polyfon*5', 's', '2', '1', '1', '1', '0', '0', '1912', '1', '1', '1', '1', '1', 'default', '1', '0', '0');
INSERT INTO furniture VALUES ('613', 'Blue Mode Bardesk', 'bardesk_polyfon*6', 's', '2', '1', '1', '1', '0', '0', '1913', '1', '1', '1', '1', '1', 'default', '1', '0', '0');
INSERT INTO furniture VALUES ('614', 'Green Bardesk', 'bardesk_polyfon*7', 's', '2', '1', '1', '1', '0', '0', '1914', '1', '1', '1', '1', '1', 'default', '1', '0', '0');
INSERT INTO furniture VALUES ('615', 'Yellow Mode Bardesk', 'bardesk_polyfon*8', 's', '2', '1', '1', '1', '0', '0', '1915', '1', '1', '1', '1', '1', 'default', '1', '0', '0');
INSERT INTO furniture VALUES ('616', 'Red Bardesk', 'bardesk_polyfon*9', 's', '2', '1', '1', '1', '0', '0', '1916', '1', '1', '1', '1', '1', 'default', '1', '0', '0');
INSERT INTO furniture VALUES ('617', 'Black Mode Bardesk Corner', 'bardeskcorner_polyfon*2', 's', '1', '1', '1', '1', '0', '0', '1917', '1', '1', '1', '1', '1', 'default', '1', '0', '0');
INSERT INTO furniture VALUES ('618', 'White Corner Desk', 'bardeskcorner_polyfon*3', 's', '1', '1', '1', '1', '0', '0', '1918', '1', '1', '1', '1', '1', 'default', '1', '0', '0');
INSERT INTO furniture VALUES ('619', 'Beige Mode Bardesk Corner', 'bardeskcorner_polyfon*4', 's', '1', '1', '1', '1', '0', '0', '1919', '1', '1', '1', '1', '1', 'default', '1', '0', '0');
INSERT INTO furniture VALUES ('620', 'Candy Corner', 'bardeskcorner_polyfon*5', 's', '1', '1', '1', '1', '0', '0', '1920', '1', '1', '1', '1', '1', 'default', '1', '0', '0');
INSERT INTO furniture VALUES ('621', 'Blue Mode Bardesk Corner', 'bardeskcorner_polyfon*6', 's', '1', '1', '1', '1', '0', '0', '1921', '1', '1', '1', '1', '1', 'default', '1', '0', '0');
INSERT INTO furniture VALUES ('622', 'Green Corner Desk', 'bardeskcorner_polyfon*7', 's', '1', '1', '1', '1', '0', '0', '1922', '1', '1', '1', '1', '1', 'default', '1', '0', '0');
INSERT INTO furniture VALUES ('623', 'Yellow Mode Bardesk Corner', 'bardeskcorner_polyfon*8', 's', '1', '1', '1', '1', '0', '0', '1923', '1', '1', '1', '1', '1', 'default', '1', '0', '0');
INSERT INTO furniture VALUES ('624', 'Red Corner Desk', 'bardeskcorner_polyfon*9', 's', '1', '1', '1', '1', '0', '0', '1924', '1', '1', '1', '1', '1', 'default', '1', '0', '0');
INSERT INTO furniture VALUES ('625', 'Black Mode Bardesk Gate', 'divider_poly3*2', 's', '1', '1', '0.001', '0', '0', '0', '1925', '1', '1', '1', '1', '1', 'gate', '2', '0', '0');
INSERT INTO furniture VALUES ('626', 'White Hatch', 'divider_poly3*3', 's', '1', '1', '0.001', '0', '0', '0', '1926', '1', '1', '1', '1', '1', 'gate', '2', '0', '0');
INSERT INTO furniture VALUES ('627', 'Beige Mode Bardesk Gate', 'divider_poly3*4', 's', '1', '1', '0.001', '0', '0', '0', '1927', '1', '1', '1', '1', '1', 'gate', '2', '0', '0');
INSERT INTO furniture VALUES ('628', 'Candy Hatch (Lockable)', 'divider_poly3*5', 's', '1', '1', '0.001', '0', '0', '0', '1928', '1', '1', '1', '1', '1', 'gate', '2', '0', '0');
INSERT INTO furniture VALUES ('629', 'Blue Mode Bardesk Gate', 'divider_poly3*6', 's', '1', '1', '0.001', '0', '0', '0', '1929', '1', '1', '1', '1', '1', 'gate', '2', '0', '0');
INSERT INTO furniture VALUES ('20073', 'ads_idol_l_carpet name', 'ads_idol_l_carpet', 's', '2', '7', '0', '1', '0', '0', '3276', '1', '1', '1', '1', '1', 'default', '1', '0', '0');
INSERT INTO furniture VALUES ('631', 'Yellow Mode Bardesk Gate', 'divider_poly3*8', 's', '1', '1', '0.001', '0', '0', '0', '1931', '1', '1', '1', '1', '1', 'gate', '2', '0', '0');
INSERT INTO furniture VALUES ('632', 'Red Hatch', 'divider_poly3*9', 's', '1', '1', '0.001', '0', '0', '0', '1932', '1', '1', '1', '1', '1', 'gate', '2', '0', '0');
INSERT INTO furniture VALUES ('633', 'Black Dining Chair', 'chair_silo*2', 's', '1', '1', '1.1', '0', '1', '0', '1933', '1', '1', '1', '1', '1', 'default', '1', '0', '0');
INSERT INTO furniture VALUES ('634', 'White Dining Chair', 'chair_silo*3', 's', '1', '1', '1.1', '0', '1', '0', '1934', '1', '1', '1', '1', '1', 'default', '1', '0', '0');
INSERT INTO furniture VALUES ('635', 'Beige Silo Dining Chair', 'chair_silo*4', 's', '1', '1', '1.1', '0', '1', '0', '1935', '1', '1', '1', '1', '1', 'default', '1', '0', '0');
INSERT INTO furniture VALUES ('636', 'Pink Silo Dining Chair', 'chair_silo*5', 's', '1', '1', '1.1', '0', '1', '0', '1936', '1', '1', '1', '1', '1', 'default', '1', '0', '0');
INSERT INTO furniture VALUES ('637', 'Blue Area Dining Chair', 'chair_silo*6', 's', '1', '1', '1.1', '0', '1', '0', '1937', '1', '1', '1', '1', '1', 'default', '1', '0', '0');
INSERT INTO furniture VALUES ('638', 'Green Area Dining Chair', 'chair_silo*7', 's', '1', '1', '1.1', '0', '1', '0', '1938', '1', '1', '1', '1', '1', 'default', '1', '0', '0');
INSERT INTO furniture VALUES ('639', 'Yellow Dining Chair', 'chair_silo*8', 's', '1', '1', '1.1', '0', '1', '0', '1939', '1', '1', '1', '1', '1', 'default', '1', '0', '0');
INSERT INTO furniture VALUES ('640', 'Red Area Dining Chair', 'chair_silo*9', 's', '1', '1', '1.1', '0', '1', '0', '1940', '1', '1', '1', '1', '1', 'default', '1', '0', '0');
INSERT INTO furniture VALUES ('641', 'No way through', 'divider_nor3*2', 's', '1', '1', '1', '0', '0', '0', '1941', '1', '1', '1', '1', '1', 'default', '2', '0', '0');
INSERT INTO furniture VALUES ('642', 'White Iced Gate', 'divider_nor3*3', 's', '1', '1', '0.001', '0', '0', '0', '1942', '1', '1', '1', '1', '1', 'gate', '2', '0', '0');
INSERT INTO furniture VALUES ('643', 'Urban Iced Gate', 'divider_nor3*4', 's', '1', '1', '0.001', '0', '0', '0', '1943', '1', '1', '1', '1', '1', 'gate', '2', '0', '0');
INSERT INTO furniture VALUES ('644', 'Pink Iced gate', 'divider_nor3*5', 's', '1', '1', '0.001', '0', '0', '0', '1944', '1', '1', '1', '1', '1', 'gate', '2', '0', '0');
INSERT INTO furniture VALUES ('645', 'Blue Iced gate', 'divider_nor3*6', 's', '1', '1', '0.001', '0', '0', '0', '1945', '1', '1', '1', '1', '1', 'gate', '2', '0', '0');
INSERT INTO furniture VALUES ('646', 'Rural Iced gate', 'divider_nor3*7', 's', '1', '1', '0.001', '0', '0', '0', '1946', '1', '1', '1', '1', '1', 'gate', '2', '0', '0');
INSERT INTO furniture VALUES ('647', 'Yellow Iced gate', 'divider_nor3*8', 's', '1', '1', '0.001', '0', '0', '0', '1947', '1', '1', '1', '1', '1', 'gate', '2', '0', '0');
INSERT INTO furniture VALUES ('648', 'Red Iced gate', 'divider_nor3*9', 's', '1', '1', '0.001', '0', '0', '0', '1948', '1', '1', '1', '1', '1', 'gate', '2', '0', '0');
INSERT INTO furniture VALUES ('649', 'Black Iced Bar-Desk', 'divider_nor2*2', 's', '2', '1', '1', '0', '0', '0', '1949', '1', '1', '1', '1', '1', 'default', '1', '0', '0');
INSERT INTO furniture VALUES ('650', 'Strong', 'divider_nor2*3', 's', '2', '1', '1', '0', '0', '0', '1950', '1', '1', '1', '1', '1', 'default', '1', '0', '0');
INSERT INTO furniture VALUES ('651', 'Urban Iced Bar', 'divider_nor2*4', 's', '2', '1', '1', '0', '0', '0', '1951', '1', '1', '1', '1', '1', 'default', '1', '0', '0');
INSERT INTO furniture VALUES ('652', 'Pink Iced bar desk', 'divider_nor2*5', 's', '2', '1', '1', '0', '0', '0', '1952', '1', '1', '1', '1', '1', 'default', '1', '0', '0');
INSERT INTO furniture VALUES ('653', 'Blue Iced  bar desk', 'divider_nor2*6', 's', '2', '1', '1', '0', '0', '0', '1953', '1', '1', '1', '1', '1', 'default', '1', '0', '0');
INSERT INTO furniture VALUES ('654', 'Rural Iced Bar', 'divider_nor2*7', 's', '2', '1', '1', '0', '0', '0', '1954', '1', '1', '1', '1', '1', 'default', '1', '0', '0');
INSERT INTO furniture VALUES ('655', 'Yellow Iced  bar desk', 'divider_nor2*8', 's', '2', '1', '1', '0', '0', '0', '1955', '1', '1', '1', '1', '1', 'default', '1', '0', '0');
INSERT INTO furniture VALUES ('656', 'Red Iced  bar desk', 'divider_nor2*9', 's', '2', '1', '1', '0', '0', '0', '1956', '1', '1', '1', '1', '1', 'default', '1', '0', '0');
INSERT INTO furniture VALUES ('657', 'Area Quest Desk', 'silo_studydesk', 's', '2', '1', '1', '1', '0', '0', '1957', '1', '1', '1', '1', '1', 'default', '1', '0', '0');
INSERT INTO furniture VALUES ('658', 'White Solarium', 'solarium_norja', 's', '1', '1', '1', '0', '0', '0', '1958', '1', '1', '1', '1', '1', 'default', '2', '0', '0');
INSERT INTO furniture VALUES ('659', 'Black Solarium', 'solarium_norja*1', 's', '1', '1', '1', '0', '0', '0', '1959', '1', '1', '1', '1', '1', 'default', '2', '0', '0');
INSERT INTO furniture VALUES ('660', 'Beige Solarium', 'solarium_norja*2', 's', '1', '1', '1', '0', '0', '0', '1960', '1', '1', '1', '1', '1', 'default', '2', '0', '0');
INSERT INTO furniture VALUES ('661', 'Urban Solarium', 'solarium_norja*3', 's', '1', '1', '1', '0', '0', '0', '1961', '1', '1', '1', '1', '1', 'default', '2', '0', '0');
INSERT INTO furniture VALUES ('662', 'Pink Solarium', 'solarium_norja*5', 's', '1', '1', '1', '0', '0', '0', '1962', '1', '1', '1', '1', '1', 'default', '2', '0', '0');
INSERT INTO furniture VALUES ('663', 'Blue Solarium', 'solarium_norja*6', 's', '1', '1', '1', '0', '0', '0', '1963', '1', '1', '1', '1', '1', 'default', '2', '0', '0');
INSERT INTO furniture VALUES ('664', 'Rural Solarium', 'solarium_norja*7', 's', '1', '1', '1', '0', '0', '0', '1964', '1', '1', '1', '1', '1', 'default', '2', '0', '0');
INSERT INTO furniture VALUES ('665', 'Yellow Solarium', 'solarium_norja*8', 's', '1', '1', '1', '0', '0', '0', '1965', '1', '1', '1', '1', '1', 'default', '2', '0', '0');
INSERT INTO furniture VALUES ('666', 'Red Solarium', 'solarium_norja*9', 's', '1', '1', '1', '0', '0', '0', '1966', '1', '1', '1', '1', '1', 'default', '2', '0', '0');
INSERT INTO furniture VALUES ('667', 'Tropical Beach Rug', 'sandrug', 's', '2', '2', '0', '1', '0', '1', '1967', '1', '1', '1', '1', '1', 'default', '1', '0', '0');
INSERT INTO furniture VALUES ('668', 'Moon Patch', 'rare_moonrug', 's', '2', '2', '0', '1', '0', '1', '1968', '1', '1', '1', '1', '1', 'default', '1', '0', '0');
INSERT INTO furniture VALUES ('669', 'Chinese Lacquer Chair', 'chair_china', 's', '1', '1', '1', '0', '1', '0', '1969', '1', '1', '1', '1', '1', 'default', '1', '0', '0');
INSERT INTO furniture VALUES ('670', 'Chinese Lacquer Table', 'china_table', 's', '1', '1', '1', '1', '0', '0', '1970', '1', '1', '1', '1', '1', 'default', '1', '0', '0');
INSERT INTO furniture VALUES ('671', 'Red Sleeping Bag', 'sleepingbag*1', 's', '1', '3', '0.8', '0', '0', '0', '1971', '1', '1', '1', '1', '1', 'bed', '1', '0', '0');
INSERT INTO furniture VALUES ('672', 'Lime Sleeping Bag', 'sleepingbag*2', 's', '1', '3', '0.8', '0', '0', '0', '1972', '1', '1', '1', '1', '1', 'bed', '1', '0', '0');
INSERT INTO furniture VALUES ('673', 'Ocean Sleeping Bag', 'sleepingbag*3', 's', '1', '3', '0.8', '0', '0', '0', '1973', '1', '1', '1', '1', '1', 'bed', '1', '0', '0');
INSERT INTO furniture VALUES ('674', 'Safety Sleeping Bag', 'sleepingbag*4', 's', '1', '3', '0.8', '0', '0', '0', '1974', '1', '1', '1', '1', '1', 'bed', '1', '0', '0');
INSERT INTO furniture VALUES ('675', 'Safe Minibar', 'safe_silo', 's', '1', '1', '1.3', '1', '0', '0', '1975', '1', '1', '1', '1', '1', 'vendingmachine', '0', '17', '0');
INSERT INTO furniture VALUES ('676', 'Orange Sleeping Bag', 'sleepingbag*7', 's', '1', '3', '0.8', '0', '0', '0', '1976', '1', '1', '1', '1', '1', 'bed', '1', '0', '0');
INSERT INTO furniture VALUES ('677', 'eXceptional Sleeping Bag', 'sleepingbag*9', 's', '1', '3', '0.8', '0', '0', '0', '1977', '1', '1', '1', '1', '1', 'bed', '1', '0', '0');
INSERT INTO furniture VALUES ('678', 'Graphite Sleeping Bag', 'sleepingbag*5', 's', '1', '3', '0.8', '0', '0', '0', '1978', '1', '1', '1', '1', '1', 'bed', '1', '0', '0');
INSERT INTO furniture VALUES ('679', 'Khaki Sleeping Bag', 'sleepingbag*10', 's', '1', '3', '0.8', '0', '0', '0', '1979', '1', '1', '1', '1', '1', 'bed', '1', '0', '0');
INSERT INTO furniture VALUES ('680', 'Purple Sleeping Bag', 'sleepingbag*6', 's', '1', '3', '0.8', '0', '0', '0', '1980', '1', '1', '1', '1', '1', 'bed', '1', '0', '0');
INSERT INTO furniture VALUES ('681', 'Golden Sleeping Bag', 'sleepingbag*8', 's', '1', '3', '0.8', '0', '0', '0', '1981', '1', '1', '1', '1', '1', 'bed', '1', '0', '0');
INSERT INTO furniture VALUES ('682', 'Chinese Bookshelf', 'china_shelve', 's', '2', '1', '1', '0', '0', '0', '1982', '1', '1', '1', '1', '1', 'default', '1', '0', '0');
INSERT INTO furniture VALUES ('683', 'White Traffic Light', 'traffic_light*5', 's', '1', '1', '1', '0', '0', '0', '1983', '1', '1', '1', '1', '1', 'default', '3', '0', '0');
INSERT INTO furniture VALUES ('684', 'Habbos', 'divider_nor4*2', 's', '2', '1', '1', '0', '0', '0', '1984', '1', '1', '1', '1', '1', 'gate', '2', '0', '0');
INSERT INTO furniture VALUES ('685', 'Habbos', 'divider_nor4*3', 's', '2', '1', '1', '0', '0', '0', '1985', '1', '1', '1', '1', '1', 'gate', '2', '0', '0');
INSERT INTO furniture VALUES ('686', 'Habbos', 'divider_nor4*5', 's', '2', '1', '1', '0', '0', '0', '1986', '1', '1', '1', '1', '1', 'gate', '2', '0', '0');
INSERT INTO furniture VALUES ('687', 'Habbos', 'divider_nor4*6', 's', '2', '1', '1', '0', '0', '0', '1987', '1', '1', '1', '1', '1', 'gate', '2', '0', '0');
INSERT INTO furniture VALUES ('688', 'Habbos', 'divider_nor4*7', 's', '2', '1', '1', '0', '0', '0', '1988', '1', '1', '1', '1', '1', 'gate', '2', '0', '0');
INSERT INTO furniture VALUES ('689', 'Habbos', 'divider_nor4*8', 's', '2', '1', '1', '0', '0', '0', '1989', '1', '1', '1', '1', '1', 'gate', '2', '0', '0');
INSERT INTO furniture VALUES ('690', 'Habbos', 'divider_nor4*9', 's', '2', '1', '1', '0', '0', '0', '1990', '1', '1', '1', '1', '1', 'gate', '2', '0', '0');
INSERT INTO furniture VALUES ('691', 'Black Iced Angle', 'divider_nor5*2', 's', '1', '1', '1', '0', '0', '0', '1991', '1', '1', '1', '1', '1', 'default', '2', '0', '0');
INSERT INTO furniture VALUES ('692', 'White Iced Angle', 'divider_nor5*3', 's', '1', '1', '1', '0', '0', '0', '1992', '1', '1', '1', '1', '1', 'default', '2', '0', '0');
INSERT INTO furniture VALUES ('693', 'Urban Iced Angle', 'divider_nor5*4', 's', '1', '1', '1', '0', '0', '0', '1993', '1', '1', '1', '1', '1', 'default', '2', '0', '0');
INSERT INTO furniture VALUES ('694', 'Blue Iced Angle', 'divider_nor5*5', 's', '1', '1', '1', '0', '0', '0', '1994', '1', '1', '1', '1', '1', 'default', '2', '0', '0');
INSERT INTO furniture VALUES ('695', 'Rural Iced Angle', 'divider_nor5*7', 's', '1', '1', '1', '0', '0', '0', '1996', '1', '1', '1', '1', '1', 'default', '2', '0', '0');
INSERT INTO furniture VALUES ('696', 'Yellow Iced Angle', 'divider_nor5*8', 's', '1', '1', '1', '0', '0', '0', '1997', '1', '1', '1', '1', '1', 'default', '2', '0', '0');
INSERT INTO furniture VALUES ('697', 'Red Iced Angle', 'divider_nor5*9', 's', '1', '1', '1', '0', '0', '0', '1998', '1', '1', '1', '1', '1', 'default', '2', '0', '0');
INSERT INTO furniture VALUES ('698', 'Plain Iced Angle', 'divider_nor5', 's', '1', '1', '1', '0', '0', '0', '1999', '1', '1', '1', '1', '1', 'default', '2', '0', '0');
INSERT INTO furniture VALUES ('699', 'Habbos', 'divider_nor4', 's', '2', '1', '1', '0', '0', '0', '2000', '1', '1', '1', '1', '1', 'gate', '2', '0', '0');
INSERT INTO furniture VALUES ('700', 'Dragon Screen', 'wall_china', 's', '1', '1', '1', '0', '0', '0', '2001', '1', '1', '1', '1', '1', 'default', '1', '0', '0');
INSERT INTO furniture VALUES ('701', 'Firm', 'corner_china', 's', '1', '1', '1', '0', '0', '0', '2002', '1', '1', '1', '1', '1', 'default', '1', '0', '0');
INSERT INTO furniture VALUES ('702', 'Black Bar Stool', 'barchair_silo*2', 's', '1', '1', '1.2', '0', '1', '0', '2003', '1', '1', '1', '1', '1', 'default', '1', '0', '0');
INSERT INTO furniture VALUES ('703', 'White Bar Stool', 'barchair_silo*3', 's', '1', '1', '1.2', '0', '1', '0', '2004', '1', '1', '1', '1', '1', 'default', '1', '0', '0');
INSERT INTO furniture VALUES ('704', 'Beige Bar Stool', 'barchair_silo*4', 's', '1', '1', '1.2', '0', '1', '0', '2005', '1', '1', '1', '1', '1', 'default', '1', '0', '0');
INSERT INTO furniture VALUES ('705', 'Pink Bar Stool', 'barchair_silo*5', 's', '1', '1', '1.2', '0', '1', '0', '2006', '1', '1', '1', '1', '1', 'default', '1', '0', '0');
INSERT INTO furniture VALUES ('706', 'Blue Bar Stool', 'barchair_silo*6', 's', '1', '1', '1.2', '0', '1', '0', '2007', '1', '1', '1', '1', '1', 'default', '1', '0', '0');
INSERT INTO furniture VALUES ('707', 'Green Bar Stool', 'barchair_silo*7', 's', '1', '1', '1.2', '0', '1', '0', '2008', '1', '1', '1', '1', '1', 'default', '1', '0', '0');
INSERT INTO furniture VALUES ('708', 'Yellow Bar Stool', 'barchair_silo*8', 's', '1', '1', '1.2', '0', '1', '0', '2009', '1', '1', '1', '1', '1', 'default', '1', '0', '0');
INSERT INTO furniture VALUES ('709', 'Red Bar Stool', 'barchair_silo*9', 's', '1', '1', '1.2', '0', '1', '0', '2010', '1', '1', '1', '1', '1', 'default', '1', '0', '0');
INSERT INTO furniture VALUES ('710', 'Black Safe Minibar', 'safe_silo*2', 's', '1', '1', '1.3', '1', '0', '0', '2011', '1', '1', '1', '1', '1', 'vendingmachine', '0', '17', '0');
INSERT INTO furniture VALUES ('711', 'White Safe Minibar', 'safe_silo*3', 's', '1', '1', '1.3', '1', '0', '0', '2012', '1', '1', '1', '1', '1', 'vendingmachine', '0', '17', '0');
INSERT INTO furniture VALUES ('712', 'Beige Safe Minibar', 'safe_silo*4', 's', '1', '1', '1.3', '1', '0', '0', '2013', '1', '1', '1', '1', '1', 'vendingmachine', '0', '17', '0');
INSERT INTO furniture VALUES ('713', 'Pink Safe Minibar', 'safe_silo*5', 's', '1', '1', '1.3', '1', '0', '0', '2014', '1', '1', '1', '1', '1', 'vendingmachine', '0', '17', '0');
INSERT INTO furniture VALUES ('714', 'Blue Safe Minibar', 'safe_silo*6', 's', '1', '1', '1.3', '1', '0', '0', '2015', '1', '1', '1', '1', '1', 'vendingmachine', '0', '17', '0');
INSERT INTO furniture VALUES ('715', 'Green Safe Minibar', 'safe_silo*7', 's', '1', '1', '1.3', '1', '0', '0', '2016', '1', '1', '1', '1', '1', 'vendingmachine', '0', '17', '0');
INSERT INTO furniture VALUES ('716', 'Yellow Safe Minibar', 'safe_silo*8', 's', '1', '1', '1.3', '1', '0', '0', '2017', '1', '1', '1', '1', '1', 'vendingmachine', '0', '17', '0');
INSERT INTO furniture VALUES ('717', 'Red Safe Minibar', 'safe_silo*9', 's', '1', '1', '1.3', '1', '0', '0', '2018', '1', '1', '1', '1', '1', 'vendingmachine', '0', '17', '0');
INSERT INTO furniture VALUES ('718', 'Glass shelf', 'glass_shelf', 's', '2', '1', '1', '0', '0', '0', '2019', '1', '1', '1', '1', '1', 'default', '1', '0', '0');
INSERT INTO furniture VALUES ('719', 'Glass chair', 'glass_chair', 's', '1', '1', '1', '0', '1', '0', '2020', '1', '1', '1', '1', '1', 'default', '1', '0', '0');
INSERT INTO furniture VALUES ('720', 'Glass stool', 'glass_stool', 's', '1', '1', '1', '0', '1', '0', '2021', '1', '1', '1', '1', '1', 'default', '1', '0', '0');
INSERT INTO furniture VALUES ('721', 'Glass sofa', 'glass_sofa', 's', '2', '1', '1', '0', '1', '0', '2022', '1', '1', '1', '1', '1', 'default', '1', '0', '0');
INSERT INTO furniture VALUES ('722', 'Glass table', 'glass_table', 's', '2', '2', '1', '1', '0', '0', '2023', '1', '1', '1', '1', '1', 'default', '1', '0', '0');
INSERT INTO furniture VALUES ('723', 'Glass table', 'glass_table*2', 's', '2', '2', '1', '1', '0', '0', '2024', '1', '1', '1', '1', '1', 'default', '1', '0', '0');
INSERT INTO furniture VALUES ('724', 'White Glass Table', 'glass_table*3', 's', '2', '2', '1', '1', '0', '0', '2025', '1', '1', '1', '1', '1', 'default', '1', '0', '0');
INSERT INTO furniture VALUES ('725', 'Glass table', 'glass_table*4', 's', '2', '2', '1', '1', '0', '0', '2026', '1', '1', '1', '1', '1', 'default', '1', '0', '0');
INSERT INTO furniture VALUES ('726', 'Candy Glass Table', 'glass_table*5', 's', '2', '2', '1', '1', '0', '0', '2027', '1', '1', '1', '1', '1', 'default', '1', '0', '0');
INSERT INTO furniture VALUES ('727', 'Blue Glass Table', 'glass_table*6', 's', '2', '2', '1', '1', '0', '0', '2028', '1', '1', '1', '1', '1', 'default', '1', '0', '0');
INSERT INTO furniture VALUES ('728', 'Green Glass Table', 'glass_table*7', 's', '2', '2', '1', '1', '0', '0', '2029', '1', '1', '1', '1', '1', 'default', '1', '0', '0');
INSERT INTO furniture VALUES ('729', 'Yellow Glass Table', 'glass_table*8', 's', '2', '2', '1', '1', '0', '0', '2030', '1', '1', '1', '1', '1', 'default', '1', '0', '0');
INSERT INTO furniture VALUES ('730', 'Glass table', 'glass_table*9', 's', '2', '2', '1', '1', '0', '0', '2031', '1', '1', '1', '1', '1', 'default', '1', '0', '0');
INSERT INTO furniture VALUES ('731', 'Glass chair', 'glass_chair*2', 's', '1', '1', '1', '0', '1', '0', '2032', '1', '1', '1', '1', '1', 'default', '1', '0', '0');
INSERT INTO furniture VALUES ('732', 'Glass chair', 'glass_chair*3', 's', '1', '1', '1', '0', '1', '0', '2033', '1', '1', '1', '1', '1', 'default', '1', '0', '0');
INSERT INTO furniture VALUES ('733', 'Glass chair', 'glass_chair*4', 's', '1', '1', '1', '0', '1', '0', '2034', '1', '1', '1', '1', '1', 'default', '1', '0', '0');
INSERT INTO furniture VALUES ('734', 'Candy Glass Chair', 'glass_chair*5', 's', '1', '1', '1', '0', '1', '0', '2035', '1', '1', '1', '1', '1', 'default', '1', '0', '0');
INSERT INTO furniture VALUES ('735', 'Blue Glass Chair', 'glass_chair*6', 's', '1', '1', '1', '0', '1', '0', '2036', '1', '1', '1', '1', '1', 'default', '1', '0', '0');
INSERT INTO furniture VALUES ('736', 'Green Glass Chair', 'glass_chair*7', 's', '1', '1', '1', '0', '1', '0', '2037', '1', '1', '1', '1', '1', 'default', '1', '0', '0');
INSERT INTO furniture VALUES ('737', 'Yellow Glass Chair', 'glass_chair*8', 's', '1', '1', '1', '0', '1', '0', '2038', '1', '1', '1', '1', '1', 'default', '1', '0', '0');
INSERT INTO furniture VALUES ('738', 'Glass chair', 'glass_chair*9', 's', '1', '1', '1', '0', '1', '0', '2039', '1', '1', '1', '1', '1', 'default', '1', '0', '0');
INSERT INTO furniture VALUES ('739', 'Glass sofa', 'glass_sofa*2', 's', '2', '1', '1', '0', '1', '0', '2040', '1', '1', '1', '1', '1', 'default', '1', '0', '0');
INSERT INTO furniture VALUES ('740', 'White Glass Sofa', 'glass_sofa*3', 's', '2', '1', '1', '0', '1', '0', '2041', '1', '1', '1', '1', '1', 'default', '1', '0', '0');
INSERT INTO furniture VALUES ('741', 'Glass sofa', 'glass_sofa*4', 's', '2', '1', '1', '0', '1', '0', '2042', '1', '1', '1', '1', '1', 'default', '1', '0', '0');
INSERT INTO furniture VALUES ('742', 'Candy Glass Sofa', 'glass_sofa*5', 's', '2', '1', '1', '0', '1', '0', '2043', '1', '1', '1', '1', '1', 'default', '1', '0', '0');
INSERT INTO furniture VALUES ('743', 'Blue Glass Sofa', 'glass_sofa*6', 's', '2', '1', '1', '0', '1', '0', '2044', '1', '1', '1', '1', '1', 'default', '1', '0', '0');
INSERT INTO furniture VALUES ('744', 'Green Glass Sofa', 'glass_sofa*7', 's', '2', '1', '1', '0', '1', '0', '2045', '1', '1', '1', '1', '1', 'default', '1', '0', '0');
INSERT INTO furniture VALUES ('745', 'Yellow Glass Sofa', 'glass_sofa*8', 's', '2', '1', '1', '0', '1', '0', '2046', '1', '1', '1', '1', '1', 'default', '1', '0', '0');
INSERT INTO furniture VALUES ('746', 'Glass sofa', 'glass_sofa*9', 's', '2', '1', '1', '0', '1', '0', '2047', '1', '1', '1', '1', '1', 'default', '1', '0', '0');
INSERT INTO furniture VALUES ('747', 'Glass stool', 'glass_stool*2', 's', '1', '1', '1', '0', '1', '0', '2048', '1', '1', '1', '1', '1', 'default', '1', '0', '0');
INSERT INTO furniture VALUES ('748', 'Glass stool', 'glass_stool*4', 's', '1', '1', '1', '0', '1', '0', '2050', '1', '1', '1', '1', '1', 'default', '1', '0', '0');
INSERT INTO furniture VALUES ('749', 'Candy Glass Stool', 'glass_stool*5', 's', '1', '1', '1', '0', '1', '0', '2051', '1', '1', '1', '1', '1', 'default', '1', '0', '0');
INSERT INTO furniture VALUES ('750', 'Blue Glass Stool', 'glass_stool*6', 's', '1', '1', '1', '0', '1', '0', '2052', '1', '1', '1', '1', '1', 'default', '1', '0', '0');
INSERT INTO furniture VALUES ('751', 'Green Glass Stool', 'glass_stool*7', 's', '1', '1', '1', '0', '1', '0', '2053', '1', '1', '1', '1', '1', 'default', '1', '0', '0');
INSERT INTO furniture VALUES ('752', 'Yellow Glass Stool', 'glass_stool*8', 's', '1', '1', '1', '0', '1', '0', '2054', '1', '1', '1', '1', '1', 'default', '1', '0', '0');
INSERT INTO furniture VALUES ('753', 'White Glass Stool', 'glass_stool*3', 's', '1', '1', '1', '0', '1', '0', '2056', '1', '1', '1', '1', '1', 'default', '1', '0', '0');
INSERT INTO furniture VALUES ('754', 'Glass stool', 'glass_stool*9', 's', '1', '1', '1', '0', '1', '0', '2057', '1', '1', '1', '1', '1', 'default', '1', '0', '0');
INSERT INTO furniture VALUES ('755', 'Gold Coin', 'CF_10_coin_gold', 's', '1', '1', '0.2', '1', '0', '0', '2063', '1', '1', '1', '1', '1', 'default', '1', '0', '0');
INSERT INTO furniture VALUES ('756', 'Bronze Coin', 'CF_1_coin_bronze', 's', '1', '1', '0.2', '1', '0', '0', '2064', '1', '1', '1', '1', '1', 'default', '1', '0', '0');
INSERT INTO furniture VALUES ('757', 'Sack of Credits', 'CF_20_moneybag', 's', '1', '1', '1', '1', '0', '0', '2065', '1', '1', '1', '1', '1', 'default', '1', '0', '0');
INSERT INTO furniture VALUES ('758', 'Gold Bar', 'CF_50_goldbar', 's', '1', '1', '0.2', '1', '0', '0', '2066', '1', '1', '1', '1', '1', 'default', '1', '0', '0');
INSERT INTO furniture VALUES ('759', 'Silver Coin', 'CF_5_coin_silver', 's', '1', '1', '0.2', '1', '0', '0', '2067', '1', '1', '1', '1', '1', 'default', '1', '0', '0');
INSERT INTO furniture VALUES ('760', 'Persian Carpet', 'hc_crpt', 's', '3', '5', '0', '1', '0', '0', '2068', '1', '1', '1', '1', '1', 'default', '1', '0', '0');
INSERT INTO furniture VALUES ('761', 'Forget plasma', 'hc_tv', 's', '2', '1', '1.4', '0', '1', '0', '2069', '1', '1', '1', '1', '1', 'default', '2', '0', '0');
INSERT INTO furniture VALUES ('762', 'Gothic Portcullis', 'gothgate', 's', '2', '1', '0.001', '0', '0', '0', '2070', '1', '1', '1', '1', '1', 'gate', '2', '0', '0');
INSERT INTO furniture VALUES ('763', 'Gothic Candelabra', 'gothiccandelabra', 's', '1', '1', '1', '0', '0', '0', '2071', '1', '1', '1', '1', '1', 'default', '2', '0', '0');
INSERT INTO furniture VALUES ('764', 'Gothic Railing', 'gothrailing', 's', '2', '1', '1', '0', '0', '0', '2072', '1', '1', '1', '1', '1', 'default', '1', '0', '0');
INSERT INTO furniture VALUES ('765', 'Gothic table', 'goth_table', 's', '1', '5', '1.7', '0', '0', '0', '2073', '1', '1', '1', '1', '1', 'default', '1', '0', '0');
INSERT INTO furniture VALUES ('766', 'Medieval Bookcase', 'hc_bkshlf', 's', '1', '4', '1', '0', '0', '0', '2074', '1', '1', '1', '1', '1', 'default', '1', '0', '0');
INSERT INTO furniture VALUES ('767', 'Electric Butler', 'hc_btlr', 's', '1', '1', '1', '0', '0', '0', '2075', '1', '1', '1', '1', '1', 'vendingmachine', '0', '24', '0');
INSERT INTO furniture VALUES ('768', 'Antique Drapery', 'hc_crtn', 's', '2', '1', '0.001', '0', '0', '0', '2076', '1', '1', '1', '1', '1', 'gate', '2', '0', '0');
INSERT INTO furniture VALUES ('769', 'The Grammophon', 'hc_djset', 's', '3', '1', '1', '0', '0', '0', '2077', '1', '1', '1', '1', '1', 'default', '1', '0', '0');
INSERT INTO furniture VALUES ('770', 'Heavy Duty Fireplace', 'hc_frplc', 's', '1', '3', '1', '0', '0', '0', '2078', '1', '1', '1', '1', '1', 'default', '1', '0', '0');
INSERT INTO furniture VALUES ('771', 'Victorian Street Light', 'hc_lmpst', 's', '1', '1', '1', '0', '0', '0', '2079', '1', '1', '1', '1', '1', 'default', '2', '0', '0');
INSERT INTO furniture VALUES ('772', 'Weird Science Machine', 'hc_machine', 's', '1', '3', '1', '0', '0', '0', '2080', '1', '1', '1', '1', '1', 'default', '2', '0', '0');
INSERT INTO furniture VALUES ('773', 'HC Rollers Set', 'hc_rllr', 's', '1', '1', '1', '0', '0', '1', '2081', '1', '1', '1', '1', '1', 'default', '1', '0', '0');
INSERT INTO furniture VALUES ('774', 'X-Ray Divider', 'hc_rntgn', 's', '2', '1', '1', '0', '0', '0', '2082', '1', '1', '1', '1', '1', 'default', '1', '0', '0');
INSERT INTO furniture VALUES ('775', 'Drinks Trolley', 'hc_trll', 's', '1', '2', '1', '0', '0', '0', '2083', '1', '1', '1', '1', '1', 'default', '1', '0', '0');
INSERT INTO furniture VALUES ('776', 'Gothic Chair Pink', 'gothic_chair*1', 's', '1', '1', '1', '0', '1', '0', '2084', '1', '1', '1', '1', '1', 'default', '1', '0', '0');
INSERT INTO furniture VALUES ('777', 'Gothic Sofa Pink', 'gothic_sofa*1', 's', '2', '1', '1', '0', '1', '0', '2085', '1', '1', '1', '1', '1', 'default', '1', '0', '0');
INSERT INTO furniture VALUES ('778', 'Gothic Stool Pink', 'gothic_stool*1', 's', '1', '1', '1', '0', '1', '0', '2086', '1', '1', '1', '1', '1', 'default', '1', '0', '0');
INSERT INTO furniture VALUES ('779', 'Golden Gothic Chair', 'gothic_chair*2', 's', '1', '1', '1', '0', '1', '0', '2087', '1', '1', '1', '1', '1', 'default', '1', '0', '0');
INSERT INTO furniture VALUES ('780', 'Golden Gothic Sofa', 'gothic_sofa*2', 's', '2', '1', '1', '0', '1', '0', '2088', '1', '1', '1', '1', '1', 'default', '1', '0', '0');
INSERT INTO furniture VALUES ('781', 'Golden Gothic Stool', 'gothic_stool*2', 's', '1', '1', '1', '0', '1', '0', '2089', '1', '1', '1', '1', '1', 'default', '1', '0', '0');
INSERT INTO furniture VALUES ('782', 'Red Gothic Chair', 'gothic_chair*3', 's', '1', '1', '1', '0', '1', '0', '2090', '1', '1', '1', '1', '1', 'default', '1', '0', '0');
INSERT INTO furniture VALUES ('783', 'Red Gothic Sofa', 'gothic_sofa*3', 's', '2', '1', '1', '0', '1', '0', '2091', '1', '1', '1', '1', '1', 'default', '1', '0', '0');
INSERT INTO furniture VALUES ('784', 'Red Gothic Stool', 'gothic_stool*3', 's', '1', '1', '1', '0', '1', '0', '2092', '1', '1', '1', '1', '1', 'default', '1', '0', '0');
INSERT INTO furniture VALUES ('785', 'Black Gothic Chair', 'gothic_chair*4', 's', '1', '1', '1', '0', '1', '0', '2093', '1', '1', '1', '1', '1', 'default', '1', '0', '0');
INSERT INTO furniture VALUES ('786', 'Black Gothic Sofa', 'gothic_sofa*4', 's', '2', '1', '1', '0', '1', '0', '2094', '1', '1', '1', '1', '1', 'default', '1', '0', '0');
INSERT INTO furniture VALUES ('787', 'Black Gothic Stool', 'gothic_stool*4', 's', '1', '1', '1', '0', '1', '0', '2095', '1', '1', '1', '1', '1', 'default', '1', '0', '0');
INSERT INTO furniture VALUES ('788', 'Green Gothic Chair', 'gothic_chair*5', 's', '1', '1', '1', '0', '1', '0', '2096', '1', '1', '1', '1', '1', 'default', '1', '0', '0');
INSERT INTO furniture VALUES ('789', 'Green Gothic Sofa', 'gothic_sofa*5', 's', '2', '1', '1', '0', '1', '0', '2097', '1', '1', '1', '1', '1', 'default', '1', '0', '0');
INSERT INTO furniture VALUES ('790', 'Green Gothic Stool', 'gothic_stool*5', 's', '1', '1', '1', '0', '1', '0', '2098', '1', '1', '1', '1', '1', 'default', '1', '0', '0');
INSERT INTO furniture VALUES ('791', 'Gothic Chair Blue', 'gothic_chair*6', 's', '1', '1', '1', '0', '1', '0', '2099', '1', '1', '1', '1', '1', 'default', '1', '0', '0');
INSERT INTO furniture VALUES ('792', 'Gothic Sofa Blue', 'gothic_sofa*6', 's', '2', '1', '1', '0', '1', '0', '2100', '1', '1', '1', '1', '1', 'default', '1', '0', '0');
INSERT INTO furniture VALUES ('793', 'Valentine\'s Cauldron', 'gothic_stool*6', 's', '1', '1', '1', '0', '1', '0', '2101', '1', '1', '1', '1', '1', 'default', '1', '0', '0');
INSERT INTO furniture VALUES ('794', 'Sound Machine', 'sound_machine', 's', '1', '1', '1', '0', '0', '0', '2105', '1', '1', '1', '1', '1', 'default', '1', '0', '0');
INSERT INTO furniture VALUES ('795', 'Turquoise Romantique Piano Chair', 'romantique_pianochair*3', 's', '1', '1', '1', '0', '1', '0', '2106', '1', '1', '1', '1', '1', 'default', '1', '0', '0');
INSERT INTO furniture VALUES ('796', 'Onyx Piano Stool', 'romantique_pianochair*5', 's', '1', '1', '1', '0', '1', '0', '2107', '1', '1', '1', '1', '1', 'default', '1', '0', '0');
INSERT INTO furniture VALUES ('797', 'Lime Romantique Piano Chair', 'romantique_pianochair*2', 's', '1', '1', '1', '0', '1', '0', '2108', '1', '1', '1', '1', '1', 'default', '1', '0', '0');
INSERT INTO furniture VALUES ('798', 'Amber Piano Stool', 'romantique_pianochair*4', 's', '1', '1', '1', '0', '1', '0', '2109', '1', '1', '1', '1', '1', 'default', '1', '0', '0');
INSERT INTO furniture VALUES ('799', 'Rose Quartz Piano Stool', 'romantique_pianochair*1', 's', '1', '1', '1', '0', '1', '0', '2110', '1', '1', '1', '1', '1', 'default', '1', '0', '0');
INSERT INTO furniture VALUES ('800', 'Turquoise Romantique Divan', 'romantique_divan*3', 's', '2', '1', '1', '0', '1', '0', '2111', '1', '1', '1', '1', '1', 'default', '1', '0', '0');
INSERT INTO furniture VALUES ('801', 'Onyx Chaise-Longue', 'romantique_divan*5', 's', '2', '1', '1', '0', '1', '0', '2112', '1', '1', '1', '1', '1', 'default', '1', '0', '0');
INSERT INTO furniture VALUES ('802', 'Emerald Chaise-Longue', 'romantique_divan*2', 's', '2', '1', '1', '0', '1', '0', '2113', '1', '1', '1', '1', '1', 'default', '1', '0', '0');
INSERT INTO furniture VALUES ('803', 'Amber Chaise-Longue', 'romantique_divan*4', 's', '2', '1', '1', '0', '1', '0', '2114', '1', '1', '1', '1', '1', 'default', '1', '0', '0');
INSERT INTO furniture VALUES ('804', 'Rose Quartz Chaise-Longue', 'romantique_divan*1', 's', '2', '1', '1', '0', '1', '0', '2115', '1', '1', '1', '1', '1', 'default', '1', '0', '0');
INSERT INTO furniture VALUES ('805', 'Turquoise Romantique Chair', 'romantique_chair*3', 's', '1', '1', '1', '0', '1', '0', '2116', '1', '1', '1', '1', '1', 'default', '1', '0', '0');
INSERT INTO furniture VALUES ('806', 'Onyx Chair', 'romantique_chair*5', 's', '1', '1', '1', '0', '1', '0', '2117', '1', '1', '1', '1', '1', 'default', '1', '0', '0');
INSERT INTO furniture VALUES ('807', 'Lime Romantique Chair', 'romantique_chair*2', 's', '1', '1', '1', '0', '1', '0', '2118', '1', '1', '1', '1', '1', 'default', '1', '0', '0');
INSERT INTO furniture VALUES ('808', 'Amber Chair', 'romantique_chair*4', 's', '1', '1', '1', '0', '1', '0', '2119', '1', '1', '1', '1', '1', 'default', '1', '0', '0');
INSERT INTO furniture VALUES ('809', 'Rose Quartz Chair', 'romantique_chair*1', 's', '1', '1', '1', '0', '1', '0', '2120', '1', '1', '1', '1', '1', 'default', '1', '0', '0');
INSERT INTO furniture VALUES ('811', 'Yellow Valentine Rose', 'plant_valentinerose*3', 's', '1', '1', '1', '0', '0', '0', '2123', '1', '1', '1', '1', '1', 'default', '2', '0', '0');
INSERT INTO furniture VALUES ('812', 'Purple Valentine\'s Rose', 'plant_valentinerose*5', 's', '1', '1', '1', '0', '0', '0', '2124', '1', '1', '1', '1', '1', 'default', '2', '0', '0');
INSERT INTO furniture VALUES ('813', 'White Valentine\'s Rose', 'plant_valentinerose*2', 's', '1', '1', '1', '0', '0', '0', '2125', '1', '1', '1', '1', '1', 'default', '2', '0', '0');
INSERT INTO furniture VALUES ('814', 'Pink Valentine\'s Rose', 'plant_valentinerose*4', 's', '1', '1', '1', '0', '0', '0', '2126', '1', '1', '1', '1', '1', 'default', '2', '0', '0');
INSERT INTO furniture VALUES ('815', 'Red Valentine\'s Rose', 'plant_valentinerose*1', 's', '1', '1', '1', '0', '0', '0', '2127', '1', '1', '1', '1', '1', 'default', '2', '0', '0');
INSERT INTO furniture VALUES ('816', 'Maze Shrubbery Gate', 'plant_mazegate', 's', '2', '1', '0.001', '0', '0', '0', '2128', '1', '1', '1', '1', '1', 'gate', '2', '0', '0');
INSERT INTO furniture VALUES ('817', 'Maze Shrubbery', 'plant_maze', 's', '2', '1', '1', '0', '0', '0', '2129', '1', '1', '1', '1', '1', 'default', '1', '0', '0');
INSERT INTO furniture VALUES ('818', 'Bulrush', 'plant_bulrush', 's', '1', '1', '1', '0', '0', '0', '2130', '1', '1', '1', '1', '1', 'default', '1', '0', '0');
INSERT INTO furniture VALUES ('819', 'T-Bones Mega Multipack', 'petfood4', 's', '1', '1', '1', '1', '0', '0', '2131', '1', '1', '1', '1', '1', 'default', '1', '0', '0');
INSERT INTO furniture VALUES ('820', 'Red carpet', 'carpet_valentine', 's', '2', '7', '0', '1', '0', '1', '2132', '1', '1', '1', '1', '1', 'default', '1', '0', '0');
INSERT INTO furniture VALUES ('821', 'Cobbled Path', 'gothic_carpet', 's', '2', '4', '0', '1', '0', '1', '2133', '1', '1', '1', '1', '1', 'default', '1', '0', '0');
INSERT INTO furniture VALUES ('822', 'Dungeon Floor', 'gothic_carpet2', 's', '2', '4', '0', '1', '0', '1', '2134', '1', '1', '1', '1', '1', 'default', '1', '0', '0');
INSERT INTO furniture VALUES ('823', '', 'gothic_chair', 's', '1', '1', '1', '0', '1', '0', '2135', '1', '1', '1', '1', '1', 'default', '1', '0', '0');
INSERT INTO furniture VALUES ('824', '', 'gothic_sofa', 's', '2', '1', '1', '0', '1', '0', '2136', '1', '1', '1', '1', '1', 'default', '1', '0', '0');
INSERT INTO furniture VALUES ('825', '', 'gothic_stool', 's', '1', '1', '1', '0', '1', '0', '2137', '1', '1', '1', '1', '1', 'default', '1', '0', '0');
INSERT INTO furniture VALUES ('826', 'Pink Grand Piano', 'grand_piano*3', 's', '2', '2', '1', '0', '0', '0', '2138', '1', '1', '1', '1', '1', 'default', '2', '0', '0');
INSERT INTO furniture VALUES ('827', 'Onyx Grand Piano', 'grand_piano*5', 's', '2', '2', '1', '0', '0', '0', '2139', '1', '1', '1', '1', '1', 'default', '2', '0', '0');
INSERT INTO furniture VALUES ('828', 'Black Grand Piano', 'grand_piano*2', 's', '2', '2', '1', '0', '0', '0', '2140', '1', '1', '1', '1', '1', 'default', '2', '0', '0');
INSERT INTO furniture VALUES ('829', 'Amber Grand Piano', 'grand_piano*4', 's', '2', '2', '1', '0', '0', '0', '2141', '1', '1', '1', '1', '1', 'default', '2', '0', '0');
INSERT INTO furniture VALUES ('830', 'Turquoise Grand Piano', 'grand_piano*1', 's', '2', '2', '1', '0', '0', '0', '2142', '1', '1', '1', '1', '1', 'default', '2', '0', '0');
INSERT INTO furniture VALUES ('831', 'Deluxe Theatre Chair', 'theatre_seat', 's', '1', '1', '1.2', '0', '1', '0', '2143', '1', '1', '1', '1', '1', 'default', '6', '0', '0');
INSERT INTO furniture VALUES ('832', 'Treats Tray', 'romantique_tray2', 's', '1', '1', '1', '0', '0', '0', '2144', '1', '1', '1', '1', '1', 'default', '1', '0', '0');
INSERT INTO furniture VALUES ('833', 'Breakfast Tray', 'romantique_tray1', 's', '1', '1', '1', '0', '0', '0', '2145', '1', '1', '1', '1', '1', 'default', '1', '0', '0');
INSERT INTO furniture VALUES ('834', 'Turquoise Tray Table', 'romantique_smalltabl*3', 's', '1', '1', '1', '1', '0', '0', '2146', '1', '1', '1', '1', '1', 'default', '1', '0', '0');
INSERT INTO furniture VALUES ('835', 'Onyx Tray Table', 'romantique_smalltabl*5', 's', '1', '1', '1', '1', '0', '0', '2147', '1', '1', '1', '1', '1', 'default', '1', '0', '0');
INSERT INTO furniture VALUES ('836', 'Lime Tray Table', 'romantique_smalltabl*2', 's', '1', '1', '1', '1', '0', '0', '2148', '1', '1', '1', '1', '1', 'default', '1', '0', '0');
INSERT INTO furniture VALUES ('837', 'Amber Tray Table', 'romantique_smalltabl*4', 's', '1', '1', '1', '1', '0', '0', '2149', '1', '1', '1', '1', '1', 'default', '1', '0', '0');
INSERT INTO furniture VALUES ('838', 'Rose Quartz Tray Table', 'romantique_smalltabl*1', 's', '1', '1', '1', '1', '0', '0', '2150', '1', '1', '1', '1', '1', 'default', '1', '0', '0');
INSERT INTO furniture VALUES ('839', 'Dressing Table', 'romantique_mirrortabl', 's', '1', '1', '1', '1', '0', '0', '2151', '1', '1', '1', '1', '1', 'default', '1', '0', '0');
INSERT INTO furniture VALUES ('840', 'Turquoise Screen', 'romantique_divider*3', 's', '2', '1', '1', '0', '0', '0', '2152', '1', '1', '1', '1', '1', 'default', '1', '0', '0');
INSERT INTO furniture VALUES ('841', 'Green Screen', 'romantique_divider*2', 's', '2', '1', '1', '1', '0', '0', '2153', '1', '1', '1', '1', '1', 'default', '1', '0', '0');
INSERT INTO furniture VALUES ('842', 'Amber Screen', 'romantique_divider*4', 's', '2', '1', '1', '1', '0', '0', '2154', '1', '1', '1', '1', '1', 'default', '1', '0', '0');
INSERT INTO furniture VALUES ('843', 'Rose Quartz Screen', 'romantique_divider*1', 's', '2', '1', '1', '1', '0', '0', '2155', '1', '1', '1', '1', '1', 'default', '1', '0', '0');
INSERT INTO furniture VALUES ('844', 'Large Tatami Mat', 'jp_tatami2', 's', '2', '4', '0', '1', '0', '1', '2156', '1', '1', '1', '1', '1', 'default', '1', '0', '0');
INSERT INTO furniture VALUES ('845', 'Small Tatami Mat', 'jp_tatami', 's', '2', '2', '0', '1', '0', '1', '2157', '1', '1', '1', '1', '1', 'default', '1', '0', '0');
INSERT INTO furniture VALUES ('846', 'Director\'s Chair', 'habbowood_chair', 's', '1', '1', '1.2', '0', '1', '0', '2158', '1', '1', '1', '1', '1', 'default', '1', '0', '0');
INSERT INTO furniture VALUES ('847', 'Bamboo Forest', 'jp_bamboo', 's', '2', '2', '0', '1', '0', '1', '2159', '1', '1', '1', '1', '1', 'default', '1', '0', '0');
INSERT INTO furniture VALUES ('848', 'Irori', 'jp_irori', 's', '2', '2', '1', '0', '0', '0', '2160', '1', '1', '1', '1', '1', 'default', '2', '0', '0');
INSERT INTO furniture VALUES ('849', 'Pillow Chair', 'jp_pillow', 's', '1', '1', '0.8', '0', '1', '0', '2161', '1', '1', '1', '1', '1', 'default', '1', '0', '0');
INSERT INTO furniture VALUES ('850', 'Habbo Sounds 1', 'sound_set_1', 's', '1', '1', '0.2', '1', '0', '0', '2162', '1', '1', '1', '1', '1', 'default', '1', '0', '0');
INSERT INTO furniture VALUES ('851', 'Habbo Sounds 3', 'sound_set_2', 's', '1', '1', '0.2', '1', '0', '0', '2163', '1', '1', '1', '1', '1', 'default', '1', '0', '0');
INSERT INTO furniture VALUES ('852', 'Electronic 1', 'sound_set_3', 's', '1', '1', '0.2', '1', '0', '0', '2164', '1', '1', '1', '1', '1', 'default', '1', '0', '0');
INSERT INTO furniture VALUES ('853', 'Ambient 1', 'sound_set_4', 's', '1', '1', '0.2', '1', '0', '0', '2165', '1', '1', '1', '1', '1', 'default', '1', '0', '0');
INSERT INTO furniture VALUES ('854', 'Ambient 4', 'sound_set_5', 's', '1', '1', '0.2', '1', '0', '0', '2166', '1', '1', '1', '1', '1', 'default', '1', '0', '0');
INSERT INTO furniture VALUES ('855', 'Ambient 3', 'sound_set_6', 's', '1', '1', '0.2', '1', '0', '0', '2167', '1', '1', '1', '1', '1', 'default', '1', '0', '0');
INSERT INTO furniture VALUES ('856', 'SFX 5', 'sound_set_7', 's', '1', '1', '0.2', '1', '0', '0', '2168', '1', '1', '1', '1', '1', 'default', '1', '0', '0');
INSERT INTO furniture VALUES ('857', 'Ambient 2', 'sound_set_8', 's', '1', '1', '0.2', '1', '0', '0', '2169', '1', '1', '1', '1', '1', 'default', '1', '0', '0');
INSERT INTO furniture VALUES ('858', 'Electronic 2', 'sound_set_9', 's', '1', '1', '0.2', '1', '0', '0', '2170', '1', '1', '1', '1', '1', 'default', '1', '0', '0');
INSERT INTO furniture VALUES ('859', 'Traxmachine', 'sound_machine*1', 's', '1', '1', '1', '0', '0', '0', '2171', '1', '1', '1', '1', '1', 'default', '1', '0', '0');
INSERT INTO furniture VALUES ('860', 'Habbowood Spotlight', 'spotlight', 's', '1', '1', '1', '0', '0', '0', '2519', '1', '1', '1', '1', '1', 'default', '6', '0', '0');
INSERT INTO furniture VALUES ('861', 'Ocean Traxmachine', 'sound_machine*2', 's', '1', '1', '1', '0', '0', '0', '2543', '1', '1', '1', '1', '1', 'default', '1', '0', '0');
INSERT INTO furniture VALUES ('862', 'Green Traxmachine', 'sound_machine*3', 's', '1', '1', '1', '0', '0', '0', '2544', '1', '1', '1', '1', '1', 'default', '1', '0', '0');
INSERT INTO furniture VALUES ('863', 'For Funky', 'sound_machine*4', 's', '1', '1', '1', '0', '0', '0', '2545', '1', '1', '1', '1', '1', 'default', '1', '0', '0');
INSERT INTO furniture VALUES ('864', 'Brown Traxmachine', 'sound_machine*5', 's', '1', '1', '1', '0', '0', '0', '2546', '1', '1', '1', '1', '1', 'default', '1', '0', '0');
INSERT INTO furniture VALUES ('865', 'Purple Traxmachine', 'sound_machine*6', 's', '1', '1', '1', '0', '0', '0', '2547', '1', '1', '1', '1', '1', 'default', '1', '0', '0');
INSERT INTO furniture VALUES ('866', 'Red Traxmachine', 'sound_machine*7', 's', '1', '1', '1', '0', '0', '0', '2548', '1', '1', '1', '1', '1', 'default', '1', '0', '0');
INSERT INTO furniture VALUES ('867', 'Crystal Lamp', 'rom_lamp', 's', '1', '1', '1', '0', '0', '0', '2551', '1', '1', '1', '1', '1', 'default', '2', '0', '0');
INSERT INTO furniture VALUES ('868', 'Polar Sofa', 'rclr_sofa', 's', '2', '1', '1', '0', '1', '0', '2459', '1', '1', '1', '1', '1', 'default', '1', '0', '0');
INSERT INTO furniture VALUES ('869', 'Water Garden', 'rclr_garden', 's', '1', '3', '1', '0', '0', '0', '2458', '1', '1', '1', '1', '1', 'default', '2', '0', '0');
INSERT INTO furniture VALUES ('870', 'Palm Chair', 'rclr_chair', 's', '1', '1', '1', '0', '1', '0', '2562', '1', '1', '1', '1', '1', 'default', '1', '0', '0');
INSERT INTO furniture VALUES ('871', 'Rock 2', 'sound_set_28', 's', '1', '1', '0.2', '1', '0', '0', '2496', '1', '1', '1', '1', '1', 'default', '1', '0', '0');
INSERT INTO furniture VALUES ('872', 'Groove 2', 'sound_set_27', 's', '1', '1', '0.2', '1', '0', '0', '2549', '1', '1', '1', '1', '1', 'default', '1', '0', '0');
INSERT INTO furniture VALUES ('873', 'Groove 1', 'sound_set_26', 's', '1', '1', '0.2', '1', '0', '0', '2508', '1', '1', '1', '1', '1', 'default', '1', '0', '0');
INSERT INTO furniture VALUES ('874', 'Actually', 'sound_set_25', 's', '1', '1', '0.2', '1', '0', '0', '2470', '1', '1', '1', '1', '1', 'default', '1', '0', '0');
INSERT INTO furniture VALUES ('875', 'It\'s all about the Pentiums', 'sound_set_24', 's', '1', '1', '0.2', '1', '0', '0', '2492', '1', '1', '1', '1', '1', 'default', '1', '0', '0');
INSERT INTO furniture VALUES ('876', 'SFX 4', 'sound_set_23', 's', '1', '1', '0.2', '1', '0', '0', '2457', '1', '1', '1', '1', '1', 'default', '1', '0', '0');
INSERT INTO furniture VALUES ('877', 'With a hamper full of sounds', 'sound_set_22', 's', '1', '1', '0.2', '1', '0', '0', '2521', '1', '1', '1', '1', '1', 'default', '1', '0', '0');
INSERT INTO furniture VALUES ('878', 'Rock 1', 'sound_set_21', 's', '1', '1', '0.2', '1', '0', '0', '2494', '1', '1', '1', '1', '1', 'default', '1', '0', '0');
INSERT INTO furniture VALUES ('879', 'SFX 2', 'sound_set_20', 's', '1', '1', '0.2', '1', '0', '0', '2524', '1', '1', '1', '1', '1', 'default', '1', '0', '0');
INSERT INTO furniture VALUES ('880', 'Hip Hop Beats 4', 'sound_set_19', 's', '1', '1', '0.2', '1', '0', '0', '2469', '1', '1', '1', '1', '1', 'default', '1', '0', '0');
INSERT INTO furniture VALUES ('881', 'Groove 4', 'sound_set_18', 's', '1', '1', '0.2', '1', '0', '0', '2497', '1', '1', '1', '1', '1', 'default', '1', '0', '0');
INSERT INTO furniture VALUES ('882', 'Groove 3', 'sound_set_17', 's', '1', '1', '0.2', '1', '0', '0', '2550', '1', '1', '1', '1', '1', 'default', '1', '0', '0');
INSERT INTO furniture VALUES ('883', 'Ferry', 'sound_set_16', 's', '1', '1', '0.2', '1', '0', '0', '2561', '1', '1', '1', '1', '1', 'default', '1', '0', '0');
INSERT INTO furniture VALUES ('884', 'RnB Grooves 6', 'sound_set_15', 's', '1', '1', '0.2', '1', '0', '0', '2495', '1', '1', '1', '1', '1', 'default', '1', '0', '0');
INSERT INTO furniture VALUES ('885', 'Hip Hop Beats 2', 'sound_set_14', 's', '1', '1', '0.2', '1', '0', '0', '2482', '1', '1', '1', '1', '1', 'default', '1', '0', '0');
INSERT INTO furniture VALUES ('886', 'Dance 5', 'sound_set_13', 's', '1', '1', '0.2', '1', '0', '0', '2523', '1', '1', '1', '1', '1', 'default', '1', '0', '0');
INSERT INTO furniture VALUES ('887', 'Habbo Sounds 2', 'sound_set_12', 's', '1', '1', '0.2', '1', '0', '0', '2493', '1', '1', '1', '1', '1', 'default', '1', '0', '0');
INSERT INTO furniture VALUES ('888', 'Dance 4', 'sound_set_11', 's', '1', '1', '0.2', '1', '0', '0', '2563', '1', '1', '1', '1', '1', 'default', '1', '0', '0');
INSERT INTO furniture VALUES ('889', 'Hip Hop Beats 1', 'sound_set_10', 's', '1', '1', '0.2', '1', '0', '0', '2481', '1', '1', '1', '1', '1', 'default', '1', '0', '0');
INSERT INTO furniture VALUES ('890', 'Rope Divider', 'rope_divider', 's', '2', '1', '0.001', '0', '0', '0', '2518', '1', '1', '1', '1', '1', 'gate', '2', '0', '0');
INSERT INTO furniture VALUES ('891', 'romantique_clock', 'romantique_clock', 's', '1', '1', '1', '0', '0', '0', '2520', '1', '1', '1', '1', '1', 'default', '1', '0', '0');
INSERT INTO furniture VALUES ('892', 'Aqua Pura Module 5', 'rare_icecream_campaign', 's', '1', '1', '1', '0', '0', '0', '2507', '1', '1', '1', '1', '1', 'vendingmachine', '0', '4', '0');
INSERT INTO furniture VALUES ('893', 'Pink Pura Module 5', 'pura_mdl5*2', 's', '1', '1', '1', '0', '1', '0', '2510', '1', '1', '1', '1', '1', 'default', '1', '0', '0');
INSERT INTO furniture VALUES ('894', 'Black Pura Module 5', 'pura_mdl5*3', 's', '1', '1', '1', '0', '1', '0', '2511', '1', '1', '1', '1', '1', 'default', '1', '0', '0');
INSERT INTO furniture VALUES ('895', 'White Pura Module 5', 'pura_mdl5*4', 's', '1', '1', '1', '0', '1', '0', '2512', '1', '1', '1', '1', '1', 'default', '1', '0', '0');
INSERT INTO furniture VALUES ('896', 'beige pura module 5', 'pura_mdl5*5', 's', '1', '1', '1', '0', '1', '0', '2513', '1', '1', '1', '1', '1', 'default', '1', '0', '0');
INSERT INTO furniture VALUES ('897', 'Blue Pura Module 5', 'pura_mdl5*6', 's', '1', '1', '1', '0', '1', '0', '2514', '1', '1', '1', '1', '1', 'default', '1', '0', '0');
INSERT INTO furniture VALUES ('898', 'Green Pura Module 5', 'pura_mdl5*7', 's', '1', '1', '1', '0', '1', '0', '2515', '1', '1', '1', '1', '1', 'default', '1', '0', '0');
INSERT INTO furniture VALUES ('899', 'Yellow Pura Module 5', 'pura_mdl5*8', 's', '1', '1', '1', '0', '1', '0', '2516', '1', '1', '1', '1', '1', 'default', '1', '0', '0');
INSERT INTO furniture VALUES ('900', 'Red Pura Module 5', 'pura_mdl5*9', 's', '1', '1', '1', '0', '1', '0', '2517', '1', '1', '1', '1', '1', 'default', '1', '0', '0');
INSERT INTO furniture VALUES ('901', 'Aqua Pura Module 4', 'pura_mdl4*1', 's', '1', '1', '1', '0', '1', '0', '2472', '1', '1', '1', '1', '1', 'default', '1', '0', '0');
INSERT INTO furniture VALUES ('902', 'Pink Pura Module 4', 'pura_mdl4*2', 's', '1', '1', '1', '0', '1', '0', '2473', '1', '1', '1', '1', '1', 'default', '1', '0', '0');
INSERT INTO furniture VALUES ('903', 'Black Pura Module 4', 'pura_mdl4*3', 's', '1', '1', '1', '0', '1', '0', '2474', '1', '1', '1', '1', '1', 'default', '1', '0', '0');
INSERT INTO furniture VALUES ('904', 'White Pura Module 4', 'pura_mdl4*4', 's', '1', '1', '1', '0', '1', '0', '2475', '1', '1', '1', '1', '1', 'default', '1', '0', '0');
INSERT INTO furniture VALUES ('905', 'beige pura module 4', 'pura_mdl4*5', 's', '1', '1', '1', '0', '1', '0', '2476', '1', '1', '1', '1', '1', 'default', '1', '0', '0');
INSERT INTO furniture VALUES ('906', 'Blue Pura Module 4', 'pura_mdl4*6', 's', '1', '1', '1', '0', '1', '0', '2477', '1', '1', '1', '1', '1', 'default', '1', '0', '0');
INSERT INTO furniture VALUES ('907', 'Green Pura Module 4', 'pura_mdl4*7', 's', '1', '1', '1', '0', '1', '0', '2478', '1', '1', '1', '1', '1', 'default', '1', '0', '0');
INSERT INTO furniture VALUES ('908', 'yellow pura module 4', 'pura_mdl4*8', 's', '1', '1', '1', '0', '1', '0', '2479', '1', '1', '1', '1', '1', 'default', '1', '0', '0');
INSERT INTO furniture VALUES ('909', 'Red Pura Module 4', 'pura_mdl4*9', 's', '1', '1', '1', '0', '1', '0', '2480', '1', '1', '1', '1', '1', 'default', '1', '0', '0');
INSERT INTO furniture VALUES ('910', 'Aqua Pura Module 3', 'pura_mdl3*1', 's', '1', '1', '1', '0', '1', '0', '2534', '1', '1', '1', '1', '1', 'default', '1', '0', '0');
INSERT INTO furniture VALUES ('911', 'Pink Pura Module 3', 'pura_mdl3*2', 's', '1', '1', '1', '0', '1', '0', '2535', '1', '1', '1', '1', '1', 'default', '1', '0', '0');
INSERT INTO furniture VALUES ('912', 'Black Pura Module 3', 'pura_mdl3*3', 's', '1', '1', '1', '0', '1', '0', '2536', '1', '1', '1', '1', '1', 'default', '1', '0', '0');
INSERT INTO furniture VALUES ('913', 'White Pura Module 3', 'pura_mdl3*4', 's', '1', '1', '1', '0', '1', '0', '2537', '1', '1', '1', '1', '1', 'default', '1', '0', '0');
INSERT INTO furniture VALUES ('914', 'beige pura module 3', 'pura_mdl3*5', 's', '1', '1', '1', '0', '1', '0', '2538', '1', '1', '1', '1', '1', 'default', '1', '0', '0');
INSERT INTO furniture VALUES ('915', 'Blue Pura Module 3', 'pura_mdl3*6', 's', '1', '1', '1', '0', '1', '0', '2539', '1', '1', '1', '1', '1', 'default', '1', '0', '0');
INSERT INTO furniture VALUES ('916', 'Green Pura Module 3', 'pura_mdl3*7', 's', '1', '1', '1', '0', '1', '0', '2540', '1', '1', '1', '1', '1', 'default', '1', '0', '0');
INSERT INTO furniture VALUES ('917', 'yellow pura module 3', 'pura_mdl3*8', 's', '1', '1', '1', '0', '1', '0', '2541', '1', '1', '1', '1', '1', 'default', '1', '0', '0');
INSERT INTO furniture VALUES ('918', 'Red Pura Module 3', 'pura_mdl3*9', 's', '1', '1', '1', '0', '1', '0', '2542', '1', '1', '1', '1', '1', 'default', '1', '0', '0');
INSERT INTO furniture VALUES ('919', 'Aqua Pura Module 2', 'pura_mdl2*1', 's', '1', '1', '1', '0', '1', '0', '2483', '1', '1', '1', '1', '1', 'default', '1', '0', '0');
INSERT INTO furniture VALUES ('920', 'Pink Pura Module 2', 'pura_mdl2*2', 's', '1', '1', '1', '0', '1', '0', '2484', '1', '1', '1', '1', '1', 'default', '1', '0', '0');
INSERT INTO furniture VALUES ('921', 'Black Pura Module 2', 'pura_mdl2*3', 's', '1', '1', '1', '0', '1', '0', '2485', '1', '1', '1', '1', '1', 'default', '1', '0', '0');
INSERT INTO furniture VALUES ('922', 'White Pura Module 2', 'pura_mdl2*4', 's', '1', '1', '1', '0', '1', '0', '2486', '1', '1', '1', '1', '1', 'default', '1', '0', '0');
INSERT INTO furniture VALUES ('923', 'beige pura module 2', 'pura_mdl2*5', 's', '1', '1', '1', '0', '1', '0', '2487', '1', '1', '1', '1', '1', 'default', '1', '0', '0');
INSERT INTO furniture VALUES ('924', 'Blue Pura Module 2', 'pura_mdl2*6', 's', '1', '1', '1', '0', '1', '0', '2488', '1', '1', '1', '1', '1', 'default', '1', '0', '0');
INSERT INTO furniture VALUES ('925', 'Green Pura Module 2', 'pura_mdl2*7', 's', '1', '1', '1', '0', '1', '0', '2489', '1', '1', '1', '1', '1', 'default', '1', '0', '0');
INSERT INTO furniture VALUES ('926', 'yellow pura module 2', 'pura_mdl2*8', 's', '1', '1', '1', '0', '1', '0', '2490', '1', '1', '1', '1', '1', 'default', '1', '0', '0');
INSERT INTO furniture VALUES ('927', 'Red Pura Module 2', 'pura_mdl2*9', 's', '1', '1', '1', '0', '1', '0', '2491', '1', '1', '1', '1', '1', 'default', '1', '0', '0');
INSERT INTO furniture VALUES ('928', 'Aqua Pura Module 1', 'pura_mdl1*1', 's', '1', '1', '1', '0', '1', '0', '2460', '1', '1', '1', '1', '1', 'default', '1', '0', '0');
INSERT INTO furniture VALUES ('929', 'Pink Pura Module 1', 'pura_mdl1*2', 's', '1', '1', '1', '0', '1', '0', '2461', '1', '1', '1', '1', '1', 'default', '1', '0', '0');
INSERT INTO furniture VALUES ('930', 'Black Pura Module 1', 'pura_mdl1*3', 's', '1', '1', '1', '0', '1', '0', '2462', '1', '1', '1', '1', '1', 'default', '1', '0', '0');
INSERT INTO furniture VALUES ('931', 'White Pura Module 1', 'pura_mdl1*4', 's', '1', '1', '1', '0', '1', '0', '2463', '1', '1', '1', '1', '1', 'default', '1', '0', '0');
INSERT INTO furniture VALUES ('932', 'beige pura module 1', 'pura_mdl1*5', 's', '1', '1', '1', '0', '1', '0', '2464', '1', '1', '1', '1', '1', 'default', '1', '0', '0');
INSERT INTO furniture VALUES ('933', 'Blue Pura Module 1', 'pura_mdl1*6', 's', '1', '1', '1', '0', '1', '0', '2465', '1', '1', '1', '1', '1', 'default', '1', '0', '0');
INSERT INTO furniture VALUES ('934', 'Green Pura Module 1', 'pura_mdl1*7', 's', '1', '1', '1', '0', '1', '0', '2466', '1', '1', '1', '1', '1', 'default', '1', '0', '0');
INSERT INTO furniture VALUES ('935', 'yellow pura module 1', 'pura_mdl1*8', 's', '1', '1', '1', '0', '1', '0', '2467', '1', '1', '1', '1', '1', 'default', '1', '0', '0');
INSERT INTO furniture VALUES ('936', 'Red Pura Module 1', 'pura_mdl1*9', 's', '1', '1', '1', '0', '1', '0', '2468', '1', '1', '1', '1', '1', 'default', '1', '0', '0');
INSERT INTO furniture VALUES ('937', 'Japanese Lantern', 'jp_lantern', 's', '1', '1', '1', '0', '0', '0', '2471', '1', '1', '1', '1', '1', 'default', '2', '0', '0');
INSERT INTO furniture VALUES ('938', 'chair_basic', 'chair_basic*1', 's', '1', '1', '1.1', '0', '1', '0', '2525', '1', '1', '1', '1', '1', 'default', '1', '0', '0');
INSERT INTO furniture VALUES ('939', 'Pink Pura Egg Chair', 'chair_basic*2', 's', '1', '1', '1.1', '0', '1', '0', '2526', '1', '1', '1', '1', '1', 'default', '1', '0', '0');
INSERT INTO furniture VALUES ('940', 'Black Pura Egg Chair', 'chair_basic*3', 's', '1', '1', '1.1', '0', '1', '0', '2527', '1', '1', '1', '1', '1', 'default', '1', '0', '0');
INSERT INTO furniture VALUES ('941', 'White Pura Egg Chair', 'chair_basic*4', 's', '1', '1', '1.1', '0', '1', '0', '2528', '1', '1', '1', '1', '1', 'default', '1', '0', '0');
INSERT INTO furniture VALUES ('942', 'Beige Pura Egg Chair', 'chair_basic*5', 's', '1', '1', '1.1', '0', '1', '0', '2529', '1', '1', '1', '1', '1', 'default', '1', '0', '0');
INSERT INTO furniture VALUES ('943', 'Blue Pura Egg Chair', 'chair_basic*6', 's', '1', '1', '1.1', '0', '1', '0', '2530', '1', '1', '1', '1', '1', 'default', '1', '0', '0');
INSERT INTO furniture VALUES ('944', 'Green Pura Egg Chair', 'chair_basic*7', 's', '1', '1', '1.1', '0', '1', '0', '2531', '1', '1', '1', '1', '1', 'default', '1', '0', '0');
INSERT INTO furniture VALUES ('945', 'chair_basic', 'chair_basic*8', 's', '1', '1', '1.1', '0', '1', '0', '2532', '1', '1', '1', '1', '1', 'default', '1', '0', '0');
INSERT INTO furniture VALUES ('946', 'Red Pura Egg Chair', 'chair_basic*9', 's', '1', '1', '1.1', '0', '1', '0', '2533', '1', '1', '1', '1', '1', 'default', '1', '0', '0');
INSERT INTO furniture VALUES ('947', '', 'bed_budget*1', 's', '2', '3', '1.9', '0', '0', '0', '2552', '1', '1', '1', '1', '1', 'bed', '1', '0', '0');
INSERT INTO furniture VALUES ('948', 'Pink Pura Double Bed', 'bed_budget*2', 's', '2', '3', '1.9', '0', '0', '0', '2553', '1', '1', '1', '1', '1', 'bed', '1', '0', '0');
INSERT INTO furniture VALUES ('949', 'Black Pura Double Bed', 'bed_budget*3', 's', '2', '3', '1.9', '0', '0', '0', '2554', '1', '1', '1', '1', '1', 'bed', '1', '0', '0');
INSERT INTO furniture VALUES ('950', 'White Pura Double Bed', 'bed_budget*4', 's', '2', '3', '1.9', '0', '0', '0', '2555', '1', '1', '1', '1', '1', 'bed', '1', '0', '0');
INSERT INTO furniture VALUES ('951', 'Beige Pura Double Bed', 'bed_budget*5', 's', '2', '3', '1.9', '0', '0', '0', '2556', '1', '1', '1', '1', '1', 'bed', '1', '0', '0');
INSERT INTO furniture VALUES ('952', 'Blue Pura Double Bed', 'bed_budget*6', 's', '2', '3', '1.9', '0', '0', '0', '2557', '1', '1', '1', '1', '1', 'bed', '1', '0', '0');
INSERT INTO furniture VALUES ('953', 'Green Pura Double Bed', 'bed_budget*7', 's', '2', '3', '1.9', '0', '0', '0', '2558', '1', '1', '1', '1', '1', 'bed', '1', '0', '0');
INSERT INTO furniture VALUES ('954', 'Yellow Pura Double Bed', 'bed_budget*8', 's', '2', '3', '1.9', '0', '0', '0', '2559', '1', '1', '1', '1', '1', 'bed', '1', '0', '0');
INSERT INTO furniture VALUES ('955', 'Red Pura Double Bed', 'bed_budget*9', 's', '2', '3', '1.9', '0', '0', '0', '2560', '1', '1', '1', '1', '1', 'bed', '1', '0', '0');
INSERT INTO furniture VALUES ('956', '', 'bed_budget_one*1', 's', '1', '3', '1.9', '0', '0', '0', '2498', '1', '1', '1', '1', '1', 'bed', '1', '0', '0');
INSERT INTO furniture VALUES ('957', 'Pink Pura Bed', 'bed_budget_one*2', 's', '1', '3', '1.9', '0', '0', '0', '2499', '1', '1', '1', '1', '1', 'bed', '1', '0', '0');
INSERT INTO furniture VALUES ('958', 'Black Pura Bed', 'bed_budget_one*3', 's', '1', '3', '1.9', '0', '0', '0', '2500', '1', '1', '1', '1', '1', 'bed', '1', '0', '0');
INSERT INTO furniture VALUES ('959', 'White Pura Bed', 'bed_budget_one*4', 's', '1', '3', '1.9', '0', '0', '0', '2501', '1', '1', '1', '1', '1', 'bed', '1', '0', '0');
INSERT INTO furniture VALUES ('960', 'Beige Pura Bed', 'bed_budget_one*5', 's', '1', '3', '1.9', '0', '0', '0', '2502', '1', '1', '1', '1', '1', 'bed', '1', '0', '0');
INSERT INTO furniture VALUES ('961', 'Blue Pura Bed', 'bed_budget_one*6', 's', '1', '3', '1.9', '0', '0', '0', '2503', '1', '1', '1', '1', '1', 'bed', '1', '0', '0');
INSERT INTO furniture VALUES ('962', 'Green Pura Bed', 'bed_budget_one*7', 's', '1', '3', '1.9', '0', '0', '0', '2504', '1', '1', '1', '1', '1', 'bed', '1', '0', '0');
INSERT INTO furniture VALUES ('963', 'Yellow Pura Bed', 'bed_budget_one*8', 's', '1', '3', '1.9', '0', '0', '0', '2505', '1', '1', '1', '1', '1', 'bed', '1', '0', '0');
INSERT INTO furniture VALUES ('964', 'Red Pura Bed', 'bed_budget_one*9', 's', '1', '3', '1.9', '0', '0', '0', '2506', '1', '1', '1', '1', '1', 'bed', '1', '0', '0');
INSERT INTO furniture VALUES ('965', 'Japanese Drawer', 'jp_drawer', 's', '1', '1', '1', '1', '0', '0', '2522', '1', '1', '1', '1', '1', 'default', '2', '0', '0');
INSERT INTO furniture VALUES ('966', 'Star Tile', 'tile_stella', 's', '1', '1', '0.05', '1', '0', '1', '2568', '1', '1', '1', '1', '1', 'default', '1', '0', '0');
INSERT INTO furniture VALUES ('967', 'Marble Tile', 'tile_marble', 's', '1', '1', '0.1', '1', '0', '1', '2566', '1', '1', '1', '1', '1', 'default', '1', '0', '0');
INSERT INTO furniture VALUES ('968', 'Red Tile', 'tile_brown', 's', '1', '1', '0.05', '1', '0', '1', '2582', '1', '1', '1', '1', '1', 'default', '1', '0', '0');
INSERT INTO furniture VALUES ('969', 'Blue Barbeque Grill', 'summer_grill*1', 's', '2', '1', '1', '0', '0', '0', '2587', '1', '1', '1', '1', '1', 'default', '2', '0', '0');
INSERT INTO furniture VALUES ('970', 'Red Barbeque Grill', 'summer_grill*2', 's', '2', '1', '1', '0', '0', '0', '2588', '1', '1', '1', '1', '1', 'default', '2', '0', '0');
INSERT INTO furniture VALUES ('971', 'Green Barbeque Grill', 'summer_grill*3', 's', '2', '1', '1', '0', '0', '0', '2589', '1', '1', '1', '1', '1', 'default', '2', '0', '0');
INSERT INTO furniture VALUES ('972', 'Green Barbeque Grill', 'summer_grill*4', 's', '2', '1', '1', '0', '0', '0', '2590', '1', '1', '1', '1', '1', 'default', '2', '0', '0');
INSERT INTO furniture VALUES ('973', 'Aqua Deck Chair', 'summer_chair*1', 's', '1', '1', '1', '0', '1', '0', '2571', '1', '1', '1', '1', '1', 'default', '1', '0', '0');
INSERT INTO furniture VALUES ('974', 'Pink Deck Chair', 'summer_chair*2', 's', '1', '1', '1', '0', '1', '0', '2572', '1', '1', '1', '1', '1', 'default', '1', '0', '0');
INSERT INTO furniture VALUES ('975', 'Black Deck Chair', 'summer_chair*3', 's', '1', '1', '1', '0', '1', '0', '2573', '1', '1', '1', '1', '1', 'default', '1', '0', '0');
INSERT INTO furniture VALUES ('976', 'White Deck Chair', 'summer_chair*4', 's', '1', '1', '1', '0', '1', '0', '2574', '1', '1', '1', '1', '1', 'default', '1', '0', '0');
INSERT INTO furniture VALUES ('977', 'Deck Chair', 'summer_chair*5', 's', '1', '1', '1', '0', '1', '0', '2575', '1', '1', '1', '1', '1', 'default', '1', '0', '0');
INSERT INTO furniture VALUES ('978', 'Deck Chair', 'summer_chair*6', 's', '1', '1', '1', '0', '1', '0', '2576', '1', '1', '1', '1', '1', 'default', '1', '0', '0');
INSERT INTO furniture VALUES ('979', 'Green Deck Chair', 'summer_chair*7', 's', '1', '1', '1', '0', '1', '0', '2577', '1', '1', '1', '1', '1', 'default', '1', '0', '0');
INSERT INTO furniture VALUES ('980', 'Yellow Deck Chair', 'summer_chair*8', 's', '1', '1', '1', '0', '1', '0', '2578', '1', '1', '1', '1', '1', 'default', '1', '0', '0');
INSERT INTO furniture VALUES ('981', 'Red Deck Chair', 'summer_chair*9', 's', '1', '1', '1', '0', '1', '0', '2579', '1', '1', '1', '1', '1', 'default', '1', '0', '0');
INSERT INTO furniture VALUES ('982', 'Latin Love 1', 'sound_set_36', 's', '1', '1', '0.2', '1', '0', '0', '2583', '1', '1', '1', '1', '1', 'default', '1', '0', '0');
INSERT INTO furniture VALUES ('983', 'Dance 6', 'sound_set_35', 's', '1', '1', '0.2', '1', '0', '0', '2595', '1', '1', '1', '1', '1', 'default', '1', '0', '0');
INSERT INTO furniture VALUES ('984', 'Rock 5', 'sound_set_34', 's', '1', '1', '0.2', '1', '0', '0', '2570', '1', '1', '1', '1', '1', 'default', '1', '0', '0');
INSERT INTO furniture VALUES ('985', 'Rock 3', 'sound_set_33', 's', '1', '1', '0.2', '1', '0', '0', '2564', '1', '1', '1', '1', '1', 'default', '1', '0', '0');
INSERT INTO furniture VALUES ('986', 'Instrumental 2', 'sound_set_32', 's', '1', '1', '0.2', '1', '0', '0', '2569', '1', '1', '1', '1', '1', 'default', '1', '0', '0');
INSERT INTO furniture VALUES ('987', 'Dance 3', 'sound_set_31', 's', '1', '1', '0.2', '1', '0', '0', '2596', '1', '1', '1', '1', '1', 'default', '1', '0', '0');
INSERT INTO furniture VALUES ('988', 'Instrumental 1', 'sound_set_30', 's', '1', '1', '0.2', '1', '0', '0', '2585', '1', '1', '1', '1', '1', 'default', '1', '0', '0');
INSERT INTO furniture VALUES ('989', 'Dance 2', 'sound_set_29', 's', '1', '1', '0.2', '1', '0', '0', '2580', '1', '1', '1', '1', '1', 'default', '1', '0', '0');
INSERT INTO furniture VALUES ('990', 'Sound Machine Pro', 'sound_machine_pro', 's', '1', '1', '1', '0', '0', '0', '2606', '1', '1', '1', '1', '1', 'default', '1', '0', '0');
INSERT INTO furniture VALUES ('991', 'Aqua One Way Gate', 'rare_mnstr', 's', '1', '1', '0.001', '0', '0', '0', '2584', '1', '1', '1', '1', '1', 'gate', '2', '0', '0');
INSERT INTO furniture VALUES ('992', 'Black HC Gate', 'one_way_door*2', 's', '1', '1', '0.001', '0', '0', '0', '2598', '1', '1', '1', '1', '1', 'onewaygate', '2', '0', '0');
INSERT INTO furniture VALUES ('993', 'White HC Gate', 'one_way_door*3', 's', '1', '1', '0.001', '0', '0', '0', '2599', '1', '1', '1', '1', '1', 'onewaygate', '2', '0', '0');
INSERT INTO furniture VALUES ('994', 'Beige One Way Gate', 'one_way_door*4', 's', '1', '1', '0.001', '0', '0', '0', '2600', '1', '1', '1', '1', '1', 'onewaygate', '2', '0', '0');
INSERT INTO furniture VALUES ('995', 'Pink One Way Gate', 'one_way_door*5', 's', '1', '1', '0.001', '0', '0', '0', '2601', '1', '1', '1', '1', '1', 'onewaygate', '2', '0', '0');
INSERT INTO furniture VALUES ('996', 'Blue HC Gate', 'one_way_door*6', 's', '1', '1', '0.001', '0', '0', '0', '2602', '1', '1', '1', '1', '1', 'onewaygate', '2', '0', '0');
INSERT INTO furniture VALUES ('997', 'Green One Way Gate', 'one_way_door*7', 's', '1', '1', '0.001', '0', '0', '0', '2603', '1', '1', '1', '1', '1', 'onewaygate', '2', '0', '0');
INSERT INTO furniture VALUES ('998', 'Yellow One Way Gate', 'one_way_door*8', 's', '1', '1', '0.001', '0', '0', '0', '2604', '1', '1', '1', '1', '1', 'onewaygate', '2', '0', '0');
INSERT INTO furniture VALUES ('999', 'Red One Way Gate', 'one_way_door*9', 's', '1', '1', '0.001', '0', '0', '0', '2605', '1', '1', '1', '1', '1', 'onewaygate', '2', '0', '0');
INSERT INTO furniture VALUES ('1000', 'Executive Rug', 'exe_rug', 's', '3', '3', '0', '1', '0', '1', '2567', '1', '1', '1', '1', '1', 'default', '1', '0', '0');
INSERT INTO furniture VALUES ('1001', 'Executive Glass Table', 'exe_s_table', 's', '2', '2', '1', '1', '0', '0', '2581', '1', '1', '1', '1', '1', 'default', '2', '0', '0');
INSERT INTO furniture VALUES ('1002', 'Sound set 37', 'sound_set_37', 's', '1', '1', '0.2', '1', '0', '0', '2565', '1', '1', '1', '1', '1', 'default', '1', '0', '0');
INSERT INTO furniture VALUES ('1003', 'Blue Summer Pool', 'summer_pool*1', 's', '2', '2', '0', '0', '0', '1', '2591', '1', '1', '1', '1', '1', 'default', '1', '0', '0');
INSERT INTO furniture VALUES ('1004', 'Red Summer Pool', 'summer_pool*2', 's', '2', '2', '0', '0', '0', '1', '2592', '1', '1', '1', '1', '1', 'default', '1', '0', '0');
INSERT INTO furniture VALUES ('1005', 'Green Summer Pool', 'summer_pool*3', 's', '2', '2', '0', '0', '0', '1', '2593', '1', '1', '1', '1', '1', 'default', '1', '0', '0');
INSERT INTO furniture VALUES ('1006', 'Yellow Summer Pool', 'summer_pool*4', 's', '2', '2', '0', '0', '0', '1', '2594', '1', '1', '1', '1', '1', 'default', '1', '0', '0');
INSERT INTO furniture VALUES ('1007', 'Burn', 'song_disk', 's', '1', '1', '0.1', '1', '0', '0', '2607', '1', '1', '1', '1', '1', 'default', '1', '0', '0');
INSERT INTO furniture VALUES ('1008', 'Jukebox', 'jukebox*1', 's', '1', '1', '1', '1', '0', '0', '2608', '1', '1', '1', '1', '1', 'default', '1', '0', '0');
INSERT INTO furniture VALUES ('1009', 'Welcome', 'carpet_soft_tut', 's', '1', '1', '0', '1', '0', '1', '2609', '1', '1', '1', '1', '1', 'default', '1', '0', '0');
INSERT INTO furniture VALUES ('1010', 'Graveyard Portal', 'sound_set_44', 's', '1', '1', '0.2', '1', '0', '0', '2610', '1', '1', '1', '1', '1', 'default', '1', '0', '0');
INSERT INTO furniture VALUES ('1011', 'SFX 1', 'sound_set_43', 's', '1', '1', '0.2', '1', '0', '0', '2614', '1', '1', '1', '1', '1', 'default', '1', '0', '0');
INSERT INTO furniture VALUES ('1012', 'Haunted Mansion', 'sound_set_42', 's', '1', '1', '0.2', '1', '0', '0', '2624', '1', '1', '1', '1', '1', 'default', '1', '0', '0');
INSERT INTO furniture VALUES ('1013', 'Rock 8', 'sound_set_41', 's', '1', '1', '0.2', '1', '0', '0', '2612', '1', '1', '1', '1', '1', 'default', '1', '0', '0');
INSERT INTO furniture VALUES ('1014', 'Rock 4', 'sound_set_40', 's', '1', '1', '0.2', '1', '0', '0', '2615', '1', '1', '1', '1', '1', 'default', '1', '0', '0');
INSERT INTO furniture VALUES ('1015', 'Rock 7', 'sound_set_39', 's', '1', '1', '0.2', '1', '0', '0', '2622', '1', '1', '1', '1', '1', 'default', '1', '0', '0');
INSERT INTO furniture VALUES ('1016', 'Rock 6', 'sound_set_38', 's', '1', '1', '0.2', '1', '0', '0', '2616', '1', '1', '1', '1', '1', 'default', '1', '0', '0');
INSERT INTO furniture VALUES ('1017', 'Grunge Chair', 'grunge_chair', 's', '1', '1', '1', '0', '1', '0', '2617', '1', '1', '1', '1', '1', 'default', '1', '0', '0');
INSERT INTO furniture VALUES ('1018', 'Grunge Mattress', 'grunge_mattress', 's', '3', '1', '1', '0', '1', '0', '2618', '1', '1', '1', '1', '1', 'default', '1', '0', '0');
INSERT INTO furniture VALUES ('1019', 'Radiator', 'grunge_radiator', 's', '1', '1', '1', '0', '0', '0', '2621', '1', '1', '1', '1', '1', 'default', '1', '0', '0');
INSERT INTO furniture VALUES ('1020', 'Grunge Bookshelf', 'grunge_shelf', 's', '3', '1', '1', '0', '0', '0', '2619', '1', '1', '1', '1', '1', 'default', '1', '0', '0');
INSERT INTO furniture VALUES ('1021', 'Road Sign', 'grunge_sign', 's', '1', '1', '1', '0', '0', '0', '2613', '1', '1', '1', '1', '1', 'default', '1', '0', '0');
INSERT INTO furniture VALUES ('1022', 'Grunge Table', 'grunge_table', 's', '2', '2', '1', '1', '0', '0', '2623', '1', '1', '1', '1', '1', 'default', '1', '0', '0');
INSERT INTO furniture VALUES ('1023', 'Creepy Crypt', 'habboween_crypt', 's', '1', '3', '1.1', '0', '0', '0', '2611', '1', '1', '1', '1', '1', 'bed', '2', '0', '0');
INSERT INTO furniture VALUES ('1024', 'Unholy Ground', 'habboween_grass', 's', '2', '2', '0', '0', '0', '1', '2626', '1', '1', '1', '1', '1', 'default', '1', '0', '0');
INSERT INTO furniture VALUES ('1025', 'Habboween Cauldron', 'hal_cauldron', 's', '1', '1', '1', '0', '0', '0', '2625', '1', '1', '1', '1', '1', 'vendingmachine', '0', '30', '0');
INSERT INTO furniture VALUES ('1026', 'Haunted Grave', 'hal_grave', 's', '1', '1', '1', '0', '0', '0', '2620', '1', '1', '1', '1', '1', 'default', '2', '0', '0');
INSERT INTO furniture VALUES ('1027', 'Christmas Party', 'sound_set_52', 's', '1', '1', '0.2', '1', '0', '0', '2633', '1', '1', '1', '1', '1', 'default', '1', '0', '0');
INSERT INTO furniture VALUES ('1028', 'Club 6', 'sound_set_51', 's', '1', '1', '0.2', '1', '0', '0', '2631', '1', '1', '1', '1', '1', 'default', '1', '0', '0');
INSERT INTO furniture VALUES ('1029', 'Club 5', 'sound_set_50', 's', '1', '1', '0.2', '1', '0', '0', '2632', '1', '1', '1', '1', '1', 'default', '1', '0', '0');
INSERT INTO furniture VALUES ('1030', 'Club 4', 'sound_set_49', 's', '1', '1', '0.2', '1', '0', '0', '2634', '1', '1', '1', '1', '1', 'default', '1', '0', '0');
INSERT INTO furniture VALUES ('1031', 'Club 3', 'sound_set_48', 's', '1', '1', '0.2', '1', '0', '0', '2629', '1', '1', '1', '1', '1', 'default', '1', '0', '0');
INSERT INTO furniture VALUES ('1032', 'Club 2', 'sound_set_47', 's', '1', '1', '0.2', '1', '0', '0', '2627', '1', '1', '1', '1', '1', 'default', '1', '0', '0');
INSERT INTO furniture VALUES ('1033', 'Club 1', 'sound_set_46', 's', '1', '1', '0.2', '1', '0', '0', '2630', '1', '1', '1', '1', '1', 'default', '1', '0', '0');
INSERT INTO furniture VALUES ('1034', 'Lost_Beatness', 'sound_set_45', 's', '1', '1', '0.2', '1', '0', '0', '2628', '1', '1', '1', '1', '1', 'default', '1', '0', '0');
INSERT INTO furniture VALUES ('1035', 'Lantern Bundle 2', 'xmas_icelamp', 's', '1', '1', '1', '1', '0', '0', '2641', '1', '1', '1', '1', '1', 'default', '2', '0', '0');
INSERT INTO furniture VALUES ('1036', 'Ice Castle Wall', 'xmas_cstl_wall', 's', '2', '1', '1', '0', '0', '0', '2646', '1', '1', '1', '1', '1', 'default', '1', '0', '0');
INSERT INTO furniture VALUES ('1037', 'Ice Castle Tower', 'xmas_cstl_twr', 's', '1', '1', '1', '0', '0', '0', '2651', '1', '1', '1', '1', '1', 'default', '1', '0', '0');
INSERT INTO furniture VALUES ('1038', 'Ice Castle Gate', 'xmas_cstl_gate', 's', '2', '1', '0.001', '0', '0', '0', '2636', '1', '1', '1', '1', '1', 'gate', '2', '0', '0');
INSERT INTO furniture VALUES ('1039', 'Snowy Christmas Tree', 'tree7', 's', '1', '1', '1', '0', '0', '0', '2653', '1', '1', '1', '1', '1', 'default', '1', '0', '0');
INSERT INTO furniture VALUES ('1040', 'Flashy Christmas Tree', 'tree6', 's', '1', '1', '1', '0', '0', '0', '2638', '1', '1', '1', '1', '1', 'default', '2', '0', '0');
INSERT INTO furniture VALUES ('1041', 'Oh Blinging Tree', 'sound_set_54', 's', '1', '1', '0.2', '1', '0', '0', '2649', '1', '1', '1', '1', '1', 'default', '1', '0', '0');
INSERT INTO furniture VALUES ('1042', 'Snowy Surprise', 'sound_set_53', 's', '1', '1', '0.2', '1', '0', '0', '2652', '1', '1', '1', '1', '1', 'default', '1', '0', '0');
INSERT INTO furniture VALUES ('1043', 'postbank Safe', 'safe_silo_pb', 's', '1', '1', '1.3', '1', '0', '0', '2642', '1', '1', '1', '1', '1', 'vendingmachine', '0', '17', '0');
INSERT INTO furniture VALUES ('1044', 'Snowy Maze Gate', 'plant_mazegate_snow', 's', '2', '1', '0.001', '0', '0', '1', '2640', '1', '1', '1', '1', '1', 'gate', '2', '0', '0');
INSERT INTO furniture VALUES ('1045', 'Snowy Maze Bundle 2', 'plant_maze_snow', 's', '2', '1', '1', '0', '0', '1', '2635', '1', '1', '1', '1', '1', 'default', '1', '0', '0');
INSERT INTO furniture VALUES ('1046', 'Winter Sleigh', 'christmas_sleigh', 's', '2', '2', '1', '0', '1', '0', '2648', '1', '1', '1', '1', '1', 'default', '1', '0', '0');
INSERT INTO furniture VALUES ('1047', 'Reindeer', 'christmas_reindeer', 's', '1', '2', '1', '0', '0', '0', '2637', '1', '1', '1', '1', '1', 'default', '1', '0', '0');
INSERT INTO furniture VALUES ('1048', 'Reindeer Droppings', 'christmas_poop', 's', '1', '1', '1', '0', '0', '0', '2654', '1', '1', '1', '1', '1', 'default', '1', '0', '0');
INSERT INTO furniture VALUES ('1049', 'Executive Bar Desk', 'exe_bardesk', 's', '1', '1', '1', '1', '0', '0', '2643', '1', '1', '1', '1', '1', 'default', '1', '0', '0');
INSERT INTO furniture VALUES ('1050', 'Executive Sofa Chair', 'exe_chair', 's', '1', '1', '1', '0', '1', '0', '2647', '1', '1', '1', '1', '1', 'default', '1', '0', '0');
INSERT INTO furniture VALUES ('1051', 'Executive Boss Chair', 'exe_chair2', 's', '1', '1', '1', '0', '1', '0', '2650', '1', '1', '1', '1', '1', 'default', '1', '0', '0');
INSERT INTO furniture VALUES ('1052', 'Executive Corner Desk', 'exe_corner', 's', '1', '1', '1', '1', '0', '0', '2655', '1', '1', '1', '1', '1', 'default', '1', '0', '0');
INSERT INTO furniture VALUES ('1053', 'Executive Drinks Tray', 'exe_drinks', 's', '1', '1', '1', '0', '0', '0', '2645', '1', '1', '1', '1', '1', 'default', '1', '0', '0');
INSERT INTO furniture VALUES ('1054', '3-Seater Sofa', 'exe_sofa', 's', '3', '1', '1', '0', '1', '0', '2639', '1', '1', '1', '1', '1', 'default', '1', '0', '0');
INSERT INTO furniture VALUES ('1055', 'Take a memo', 'exe_table', 's', '3', '2', '1.1', '0', '0', '0', '2644', '1', '1', '1', '1', '1', 'default', '2', '0', '0');
INSERT INTO furniture VALUES ('1056', 'RnB Grooves 5', 'sound_set_59', 's', '1', '1', '0.2', '1', '0', '0', '2670', '1', '1', '1', '1', '1', 'default', '1', '0', '0');
INSERT INTO furniture VALUES ('1057', 'RnB Grooves 4', 'sound_set_58', 's', '1', '1', '0.2', '1', '0', '0', '2656', '1', '1', '1', '1', '1', 'default', '1', '0', '0');
INSERT INTO furniture VALUES ('1058', 'RnB Grooves 3', 'sound_set_57', 's', '1', '1', '0.2', '1', '0', '0', '2673', '1', '1', '1', '1', '1', 'default', '1', '0', '0');
INSERT INTO furniture VALUES ('1059', 'RnB Grooves 2', 'sound_set_56', 's', '1', '1', '0.2', '1', '0', '0', '2669', '1', '1', '1', '1', '1', 'default', '1', '0', '0');
INSERT INTO furniture VALUES ('1060', 'RnB Grooves 1', 'sound_set_55', 's', '1', '1', '0.2', '1', '0', '0', '2671', '1', '1', '1', '1', '1', 'default', '1', '0', '0');
INSERT INTO furniture VALUES ('1061', 'Lightweight', 'noob_table*1', 's', '2', '2', '1', '1', '0', '0', '2687', '0', '0', '1', '0', '1', 'default', '1', '0', '0');
INSERT INTO furniture VALUES ('1062', 'Lightweight', 'noob_table*2', 's', '2', '2', '1', '1', '0', '0', '2688', '0', '0', '1', '0', '1', 'default', '1', '0', '0');
INSERT INTO furniture VALUES ('1063', 'Lightweight', 'noob_table*3', 's', '2', '2', '1', '1', '0', '0', '2689', '0', '0', '1', '0', '1', 'default', '1', '0', '0');
INSERT INTO furniture VALUES ('1064', 'Lightweight', 'noob_table*4', 's', '2', '2', '1', '1', '0', '0', '2690', '0', '0', '1', '0', '1', 'default', '1', '0', '0');
INSERT INTO furniture VALUES ('1065', 'Lightweight', 'noob_table*5', 's', '2', '2', '1', '1', '0', '0', '2691', '0', '0', '1', '0', '1', 'default', '1', '0', '0');
INSERT INTO furniture VALUES ('1066', 'Lightweight', 'noob_table*6', 's', '2', '2', '1', '1', '0', '0', '2692', '0', '0', '1', '0', '1', 'default', '1', '0', '0');
INSERT INTO furniture VALUES ('1067', 'My first Habbo stool', 'noob_stool*1', 's', '1', '1', '1', '0', '1', '0', '2657', '0', '0', '1', '0', '1', 'default', '1', '0', '0');
INSERT INTO furniture VALUES ('1068', 'My first Habbo stool', 'noob_stool*2', 's', '1', '1', '1', '0', '1', '0', '2658', '0', '0', '1', '0', '1', 'default', '1', '0', '0');
INSERT INTO furniture VALUES ('1069', 'My first Habbo stool', 'noob_stool*3', 's', '1', '1', '1', '0', '1', '0', '2659', '0', '0', '1', '0', '1', 'default', '1', '0', '0');
INSERT INTO furniture VALUES ('1070', 'My first Habbo stool', 'noob_stool*4', 's', '1', '1', '1', '0', '1', '0', '2660', '0', '0', '1', '0', '1', 'default', '1', '0', '0');
INSERT INTO furniture VALUES ('1071', 'My first Habbo stool', 'noob_stool*5', 's', '1', '1', '1', '0', '1', '0', '2661', '0', '0', '1', '0', '1', 'default', '1', '0', '0');
INSERT INTO furniture VALUES ('1072', 'My first Habbo stool', 'noob_stool*6', 's', '1', '1', '1', '0', '1', '0', '2662', '0', '0', '1', '0', '1', 'default', '1', '0', '0');
INSERT INTO furniture VALUES ('1073', 'My first Habbo rug', 'noob_rug*1', 's', '2', '3', '0', '1', '0', '1', '2681', '0', '1', '1', '0', '1', 'default', '1', '0', '0');
INSERT INTO furniture VALUES ('1074', 'My first Habbo rug', 'noob_rug*2', 's', '2', '3', '0', '1', '0', '1', '2682', '0', '1', '1', '0', '1', 'default', '1', '0', '0');
INSERT INTO furniture VALUES ('1075', 'My first Habbo rug', 'noob_rug*3', 's', '2', '3', '0', '1', '0', '1', '2683', '0', '1', '1', '0', '1', 'default', '1', '0', '0');
INSERT INTO furniture VALUES ('1076', 'My first Habbo rug', 'noob_rug*4', 's', '2', '3', '0', '1', '0', '1', '2684', '0', '1', '1', '0', '1', 'default', '1', '0', '0');
INSERT INTO furniture VALUES ('1077', 'My first Habbo rug', 'noob_rug*5', 's', '2', '3', '0', '1', '0', '1', '2685', '0', '1', '1', '0', '1', 'default', '1', '0', '0');
INSERT INTO furniture VALUES ('1078', 'My first Habbo rug', 'noob_rug*6', 's', '2', '3', '0', '1', '0', '1', '2686', '0', '1', '1', '0', '1', 'default', '1', '0', '0');
INSERT INTO furniture VALUES ('1079', 'My first Habbo lamp', 'noob_lamp*1', 's', '1', '1', '1', '0', '0', '0', '2663', '0', '0', '1', '0', '1', 'default', '2', '0', '0');
INSERT INTO furniture VALUES ('1080', 'My first Habbo lamp', 'noob_lamp*2', 's', '1', '1', '1', '0', '0', '0', '2664', '0', '0', '1', '0', '1', 'default', '2', '0', '0');
INSERT INTO furniture VALUES ('1081', 'My first Habbo lamp', 'noob_lamp*3', 's', '1', '1', '1', '0', '0', '0', '2665', '0', '0', '1', '0', '1', 'default', '2', '0', '0');
INSERT INTO furniture VALUES ('1082', 'My first Habbo lamp', 'noob_lamp*4', 's', '1', '1', '1', '0', '0', '0', '2666', '0', '0', '1', '0', '1', 'default', '2', '0', '0');
INSERT INTO furniture VALUES ('1083', 'My first Habbo lamp', 'noob_lamp*5', 's', '1', '1', '1', '0', '0', '0', '2667', '0', '0', '1', '0', '1', 'default', '2', '0', '0');
INSERT INTO furniture VALUES ('1084', 'My first Habbo lamp', 'noob_lamp*6', 's', '1', '1', '1', '0', '0', '0', '2668', '0', '0', '1', '0', '1', 'default', '2', '0', '0');
INSERT INTO furniture VALUES ('1085', 'Lightweight', 'noob_chair*1', 's', '1', '1', '1', '0', '1', '0', '2675', '0', '0', '1', '0', '1', 'default', '1', '0', '0');
INSERT INTO furniture VALUES ('1086', ' practical', 'noob_chair*2', 's', '1', '1', '1', '0', '1', '0', '2676', '0', '0', '1', '0', '1', 'default', '1', '0', '0');
INSERT INTO furniture VALUES ('1087', ' practical', 'noob_chair*3', 's', '1', '1', '1', '0', '1', '0', '2677', '0', '0', '1', '0', '1', 'default', '1', '0', '0');
INSERT INTO furniture VALUES ('1088', ' practical', 'noob_chair*4', 's', '1', '1', '1', '0', '1', '0', '2678', '0', '0', '1', '0', '1', 'default', '1', '0', '0');
INSERT INTO furniture VALUES ('1089', ' practical', 'noob_chair*5', 's', '1', '1', '1', '0', '1', '0', '2679', '0', '0', '1', '0', '1', 'default', '1', '0', '0');
INSERT INTO furniture VALUES ('1090', 'Power Globe', 'noob_chair*6', 's', '1', '1', '1', '0', '1', '0', '2680', '0', '0', '1', '0', '1', 'default', '1', '0', '0');
INSERT INTO furniture VALUES ('1091', 'Executive Plant', 'exe_plant', 's', '1', '1', '1', '0', '0', '0', '2674', '1', '1', '1', '1', '1', 'default', '1', '0', '0');
INSERT INTO furniture VALUES ('1092', 'Grey Share Bear', 'val_teddy*1', 's', '1', '1', '1', '0', '1', '0', '2699', '1', '1', '1', '1', '1', 'default', '1', '0', '0');
INSERT INTO furniture VALUES ('1093', 'Pink Share Bear', 'val_teddy*2', 's', '1', '1', '1', '0', '1', '0', '2700', '1', '1', '1', '1', '1', 'default', '1', '0', '0');
INSERT INTO furniture VALUES ('1094', 'Green Share Bear', 'val_teddy*3', 's', '1', '1', '1', '0', '1', '0', '2701', '1', '1', '1', '1', '1', 'default', '1', '0', '0');
INSERT INTO furniture VALUES ('1095', 'Brown Share Bear', 'val_teddy*4', 's', '1', '1', '1', '0', '1', '0', '2702', '1', '1', '1', '1', '1', 'default', '1', '0', '0');
INSERT INTO furniture VALUES ('1096', 'Yellow Share Bear', 'val_teddy*5', 's', '1', '1', '1', '0', '1', '0', '2703', '1', '1', '1', '1', '1', 'default', '1', '0', '0');
INSERT INTO furniture VALUES ('1097', 'Blue Share Bear', 'val_teddy*6', 's', '1', '1', '1', '0', '1', '0', '2704', '1', '1', '1', '1', '1', 'default', '1', '0', '0');
INSERT INTO furniture VALUES ('1098', 'Love Randomiser', 'val_randomizer', 's', '4', '1', '1.4', '0', '1', '0', '2696', '1', '1', '1', '1', '1', 'loveshuffler', '1', '0', '0');
INSERT INTO furniture VALUES ('1099', 'Heart Shaped Chocs', 'val_choco', 's', '1', '1', '1', '0', '0', '0', '2697', '1', '1', '1', '1', '1', 'default', '2', '0', '0');
INSERT INTO furniture VALUES ('1100', 'Teleport Door', 'teleport_door', 's', '1', '1', '0.1', '1', '0', '1', '2693', '1', '1', '0', '1', '1', 'teleport', '2', '0', '0');
INSERT INTO furniture VALUES ('1101', 'Latin Love 3', 'sound_set_61', 's', '1', '1', '0.2', '1', '0', '0', '2698', '1', '1', '1', '1', '1', 'default', '1', '0', '0');
INSERT INTO furniture VALUES ('1102', 'Latin Love 2', 'sound_set_60', 's', '1', '1', '0.2', '1', '0', '0', '2695', '1', '1', '1', '1', '1', 'default', '1', '0', '0');
INSERT INTO furniture VALUES ('1103', 'Crystal Ball', 'fortune', 's', '1', '1', '1', '0', '0', '0', '2694', '1', '1', '1', '1', '1', 'dice', '1', '0', '0');
INSERT INTO furniture VALUES ('1104', 'Adventure Desk', 'sw_table', 's', '1', '2', '1', '0', '0', '0', '2713', '1', '1', '1', '1', '1', 'default', '1', '0', '0');
INSERT INTO furniture VALUES ('1105', 'Raven', 'sw_raven', 's', '1', '1', '1', '0', '0', '0', '2711', '1', '1', '1', '1', '1', 'default', '1', '0', '0');
INSERT INTO furniture VALUES ('1106', 'Ye Olde Chest', 'sw_chest', 's', '1', '2', '1', '0', '0', '0', '2709', '1', '1', '1', '1', '1', 'default', '2', '0', '0');
INSERT INTO furniture VALUES ('1107', 'Sand Castle Wall', 'sand_cstl_wall', 's', '2', '1', '1', '0', '0', '0', '2710', '1', '1', '1', '1', '1', 'default', '1', '0', '0');
INSERT INTO furniture VALUES ('1108', 'Sand Castle Tower', 'sand_cstl_twr', 's', '1', '1', '1', '0', '0', '0', '2705', '1', '1', '1', '1', '1', 'default', '1', '0', '0');
INSERT INTO furniture VALUES ('1109', 'Sand Castle Gate', 'sand_cstl_gate', 's', '2', '1', '0.001', '0', '0', '0', '2712', '1', '1', '1', '1', '1', 'gate', '2', '0', '0');
INSERT INTO furniture VALUES ('1110', 'Candle Box', 'grunge_candle', 's', '1', '1', '1', '0', '0', '0', '2708', '1', '1', '1', '1', '1', 'default', '2', '0', '0');
INSERT INTO furniture VALUES ('1111', 'Bench', 'grunge_bench', 's', '3', '1', '1', '0', '0', '0', '2707', '1', '1', '1', '1', '1', 'default', '1', '0', '0');
INSERT INTO furniture VALUES ('1112', 'Flaming Barrel', 'grunge_barrel', 's', '1', '1', '1', '0', '0', '0', '2706', '1', '1', '1', '1', '1', 'default', '2', '0', '0');
INSERT INTO furniture VALUES ('1113', 'Moon Lamp', 'rclr_lamp', 's', '1', '1', '1', '0', '0', '0', '2733', '1', '1', '1', '1', '1', 'default', '2', '0', '0');
INSERT INTO furniture VALUES ('1115', 'Bubble trophy', 'a0 prizetrophy8_g', 's', '1', '1', '1', '0', '0', '0', '2426', '1', '1', '1', '1', '0', 'trophy', '1', '0', '0');
INSERT INTO furniture VALUES ('1116', 'nouvelle_trax', 'nouvelle_trax', 's', '1', '1', '1', '0', '0', '0', '2736', '1', '1', '1', '1', '1', 'default', '1', '0', '0');
INSERT INTO furniture VALUES ('1117', 'Bubble Juice Floor', 'md_rug', 's', '4', '4', '0', '1', '0', '1', '2727', '1', '1', '1', '1', '1', 'default', '1', '0', '0');
INSERT INTO furniture VALUES ('1118', 'Sushi Kohada', 'jp_tray6', 's', '1', '1', '1', '0', '0', '0', '2720', '1', '1', '1', '1', '1', 'default', '1', '0', '0');
INSERT INTO furniture VALUES ('1119', 'Sushi Tamago', 'jp_tray5', 's', '1', '1', '1', '0', '0', '0', '2717', '1', '1', '1', '1', '1', 'default', '1', '0', '0');
INSERT INTO furniture VALUES ('1120', 'Sushi Uni', 'jp_tray4', 's', '1', '1', '1', '0', '0', '0', '2725', '1', '1', '1', '1', '1', 'default', '1', '0', '0');
INSERT INTO furniture VALUES ('1121', 'Sushi Ikura', 'jp_tray3', 's', '1', '1', '1', '0', '0', '0', '2726', '1', '1', '1', '1', '1', 'default', '1', '0', '0');
INSERT INTO furniture VALUES ('1122', 'Sushi Ika', 'jp_tray2', 's', '1', '1', '1', '0', '0', '0', '2724', '1', '1', '1', '1', '1', 'default', '1', '0', '0');
INSERT INTO furniture VALUES ('1123', 'Sushi Maguro', 'jp_tray1', 's', '1', '1', '1', '0', '0', '0', '2715', '1', '1', '1', '1', '1', 'default', '1', '0', '0');
INSERT INTO furniture VALUES ('1124', 'Tea Maker', 'arabian_teamk', 's', '1', '1', '1', '0', '0', '0', '2716', '1', '1', '1', '1', '1', 'vendingmachine', '0', '1', '0');
INSERT INTO furniture VALUES ('1125', 'Ornamental Urn', 'arabian_snake', 's', '1', '1', '1', '0', '0', '0', '2732', '1', '1', '1', '1', '1', 'default', '2', '0', '0');
INSERT INTO furniture VALUES ('1126', 'Berber Kilim Rug', 'arabian_rug', 's', '3', '5', '0', '0', '0', '1', '2719', '1', '1', '1', '1', '1', 'default', '1', '0', '0');
INSERT INTO furniture VALUES ('1127', 'Green Blossom Pillow', 'arabian_pllw', 's', '1', '1', '0.8', '0', '1', '0', '2722', '1', '1', '1', '1', '1', 'default', '1', '0', '0');
INSERT INTO furniture VALUES ('1128', 'Soft wooden screen', 'arabian_divdr', 's', '1', '2', '1', '0', '0', '0', '2730', '1', '1', '1', '1', '1', 'default', '1', '0', '0');
INSERT INTO furniture VALUES ('1129', 'Exotic', 'arabian_chair', 's', '1', '1', '1.2', '0', '1', '0', '2721', '1', '1', '1', '1', '1', 'default', '1', '0', '0');
INSERT INTO furniture VALUES ('1130', 'Amanjena Table', 'arabian_bigtb', 's', '3', '2', '0.8', '1', '0', '0', '2731', '1', '1', '1', '1', '1', 'default', '1', '0', '0');
INSERT INTO furniture VALUES ('1131', 'Hexagonal Tea Table', 'arabian_tetbl', 's', '1', '1', '1', '1', '0', '0', '2714', '1', '1', '1', '1', '1', 'default', '1', '0', '0');
INSERT INTO furniture VALUES ('1132', 'Mint Tea Tray', 'arabian_tray1', 's', '1', '1', '1', '0', '0', '0', '2734', '1', '1', '1', '1', '1', 'default', '1', '0', '0');
INSERT INTO furniture VALUES ('1133', 'Candle Tray', 'arabian_tray2', 's', '1', '1', '1', '0', '0', '0', '2735', '1', '1', '1', '1', '1', 'default', '1', '0', '0');
INSERT INTO furniture VALUES ('1134', 'Sweets Tray', 'arabian_tray3', 's', '1', '1', '1', '0', '0', '0', '2723', '1', '1', '1', '1', '1', 'default', '1', '0', '0');
INSERT INTO furniture VALUES ('1135', 'Sweet', 'arabian_tray4', 's', '1', '1', '1', '0', '0', '0', '2728', '1', '1', '1', '1', '1', 'default', '1', '0', '0');
INSERT INTO furniture VALUES ('1136', 'Alhambra Trax 3', 'sound_set_64', 's', '1', '1', '0.2', '1', '0', '0', '2738', '1', '1', '1', '1', '1', 'default', '1', '0', '0');
INSERT INTO furniture VALUES ('1137', 'Alhambra Trax 2', 'sound_set_63', 's', '1', '1', '0.2', '1', '0', '0', '2740', '1', '1', '1', '1', '1', 'default', '1', '0', '0');
INSERT INTO furniture VALUES ('1138', 'Alhambra Trax 1', 'sound_set_62', 's', '1', '1', '0.2', '1', '0', '0', '2741', '1', '1', '1', '1', '1', 'default', '1', '0', '0');
INSERT INTO furniture VALUES ('1139', 'Jukebox Pacha TV', 'jukebox_ptv*1', 's', '1', '1', '1', '0', '0', '0', '2739', '1', '1', '1', '1', '1', 'default', '1', '0', '0');
INSERT INTO furniture VALUES ('1140', 'Calippo icecream machine', 'calippo', 's', '1', '1', '1', '0', '0', '0', '2737', '1', '1', '1', '1', '1', 'vendingmachine', '0', '4', '0');
INSERT INTO furniture VALUES ('1141', 'traxsilver', 'traxsilver', 's', '1', '1', '1', '1', '0', '0', '2744', '1', '1', '1', '1', '1', 'default', '1', '0', '0');
INSERT INTO furniture VALUES ('1142', 'traxgold', 'traxgold', 's', '1', '1', '1', '1', '0', '0', '2742', '1', '1', '1', '1', '1', 'default', '1', '0', '0');
INSERT INTO furniture VALUES ('1143', 'traxbronze', 'traxbronze', 's', '1', '1', '1', '1', '0', '0', '2743', '1', '1', '1', '1', '1', 'default', '1', '0', '0');
INSERT INTO furniture VALUES ('1144', 'bench_puffet', 'bench_puffet', 's', '2', '1', '1', '0', '1', '0', '2745', '1', '1', '1', '1', '1', 'default', '1', '0', '0');
INSERT INTO furniture VALUES ('1145', 'Gold Bar (China)', 'CFC_500_goldbar', 's', '1', '1', '0.4', '1', '0', '0', '2764', '1', '1', '1', '1', '1', 'default', '1', '0', '0');
INSERT INTO furniture VALUES ('1146', 'Sack of Credits (China)', 'CFC_200_moneybag', 's', '1', '1', '1', '1', '0', '0', '2770', '1', '1', '1', '1', '1', 'default', '1', '0', '0');
INSERT INTO furniture VALUES ('20006', 'Mesh Corner', 'urban_fence_corner', 's', '1', '1', '1', '1', '0', '0', '3275', '1', '1', '1', '1', '1', 'default', '1', '0', '0');
INSERT INTO furniture VALUES ('1148', 'Gold Coin (China)', 'CFC_100_coin_gold', 's', '1', '1', '0.2', '1', '0', '0', '2796', '1', '1', '1', '1', '1', 'default', '1', '0', '0');
INSERT INTO furniture VALUES ('1149', 'Silver Coin (China)', 'CFC_50_coin_silver', 's', '1', '1', '0.2', '1', '0', '0', '2772', '1', '1', '1', '1', '1', 'default', '1', '0', '0');
INSERT INTO furniture VALUES ('1150', 'Chabu Dai', 'jp_table', 's', '2', '2', '1', '0', '0', '0', '2749', '1', '1', '1', '1', '1', 'default', '4', '0', '0');
INSERT INTO furniture VALUES ('1151', 'Shishi Odishi', 'jp_rare', 's', '2', '2', '1', '0', '0', '0', '2750', '1', '1', '1', '1', '1', 'default', '2', '0', '0');
INSERT INTO furniture VALUES ('1152', 'Katana Green', 'jp_katana3', 's', '1', '1', '1', '0', '0', '0', '2748', '1', '1', '1', '1', '1', 'default', '1', '0', '0');
INSERT INTO furniture VALUES ('1153', 'Katana Blue', 'jp_katana2', 's', '1', '1', '1', '0', '0', '0', '2747', '1', '1', '1', '1', '1', 'default', '1', '0', '0');
INSERT INTO furniture VALUES ('1154', 'HC Katana Red', 'jp_katana1', 's', '1', '1', '1', '0', '0', '0', '2751', '1', '1', '1', '1', '1', 'default', '1', '0', '0');
INSERT INTO furniture VALUES ('1156', 'Tiki Waterfall', 'tiki_waterfall', 's', '3', '2', '1', '0', '0', '0', '2757', '1', '1', '1', '1', '1', 'default', '1', '0', '0');
INSERT INTO furniture VALUES ('1157', 'Tiki Pig Tray', 'tiki_tray4', 's', '1', '1', '1', '0', '0', '0', '2765', '1', '1', '1', '1', '1', 'default', '1', '0', '0');
INSERT INTO furniture VALUES ('1158', 'Tiki Fish Tray', 'tiki_tray3', 's', '1', '1', '1', '0', '0', '0', '2753', '1', '1', '1', '1', '1', 'default', '1', '0', '0');
INSERT INTO furniture VALUES ('1159', 'Tiki Pineapple Plate', 'tiki_tray2', 's', '1', '1', '1', '0', '0', '0', '2768', '1', '1', '1', '1', '1', 'default', '1', '0', '0');
INSERT INTO furniture VALUES ('1160', 'Tiki Fruit Tray', 'tiki_tray1', 's', '1', '1', '1', '0', '0', '0', '2755', '1', '1', '1', '1', '1', 'default', '1', '0', '0');
INSERT INTO furniture VALUES ('1161', 'Empty Tray', 'tiki_tray0', 's', '1', '1', '1', '0', '0', '0', '2792', '1', '1', '1', '1', '1', 'default', '1', '0', '0');
INSERT INTO furniture VALUES ('1162', 'Toucan', 'tiki_toucan', 's', '1', '1', '1', '0', '0', '0', '2756', '1', '1', '1', '1', '1', 'default', '1', '0', '0');
INSERT INTO furniture VALUES ('1163', 'Beach Torch', 'tiki_torch', 's', '1', '1', '1', '0', '0', '0', '2773', '1', '1', '1', '1', '1', 'default', '2', '0', '0');
INSERT INTO furniture VALUES ('1164', 'Tribal Statue', 'tiki_statue', 's', '1', '1', '1', '0', '0', '0', '2782', '1', '1', '1', '1', '1', 'default', '2', '0', '0');
INSERT INTO furniture VALUES ('1165', 'Island Sand Patch', 'tiki_sand', 's', '2', '2', '0', '1', '0', '1', '2798', '1', '1', '1', '1', '1', 'default', '1', '0', '0');
INSERT INTO furniture VALUES ('1166', 'Tiki Parasol', 'tiki_parasol', 's', '1', '1', '1', '0', '0', '0', '2769', '1', '1', '1', '1', '1', 'default', '2', '0', '0');
INSERT INTO furniture VALUES ('1167', 'Jungle Patch', 'tiki_junglerug', 's', '2', '2', '0', '1', '0', '1', '2781', '1', '1', '1', '1', '1', 'default', '1', '0', '0');
INSERT INTO furniture VALUES ('1168', 'Tiki Bar Corner', 'tiki_corner', 's', '1', '1', '1', '1', '0', '0', '2794', '1', '1', '1', '1', '1', 'default', '1', '0', '0');
INSERT INTO furniture VALUES ('1169', 'Butterflies', 'tiki_bflies', 's', '1', '1', '1', '0', '0', '0', '2785', '1', '1', '1', '1', '1', 'default', '3', '0', '0');
INSERT INTO furniture VALUES ('1170', 'Tiki Bar Stool', 'tiki_bench', 's', '1', '1', '1.3', '0', '1', '0', '2784', '1', '1', '1', '1', '1', 'default', '1', '0', '0');
INSERT INTO furniture VALUES ('1171', 'Tiki Bar Desk', 'tiki_bardesk', 's', '1', '1', '1', '1', '0', '0', '2795', '1', '1', '1', '1', '1', 'default', '1', '0', '0');
INSERT INTO furniture VALUES ('1172', 'tampax_rug', 'tampax_rug', 's', '3', '4', '0', '1', '0', '1', '2754', '1', '1', '1', '1', '1', 'default', '1', '0', '0');
INSERT INTO furniture VALUES ('1173', 'Sound set 70', 'sound_set_70', 's', '1', '1', '0.2', '1', '0', '0', '2767', '1', '1', '1', '1', '1', 'default', '1', '0', '0');
INSERT INTO furniture VALUES ('1174', 'Sound set 69', 'sound_set_69', 's', '1', '1', '0.2', '1', '0', '0', '2799', '1', '1', '1', '1', '1', 'default', '1', '0', '0');
INSERT INTO furniture VALUES ('1175', 'Sound set 68', 'sound_set_68', 's', '1', '1', '0.2', '1', '0', '0', '2793', '1', '1', '1', '1', '1', 'default', '1', '0', '0');
INSERT INTO furniture VALUES ('1176', 'Sound set 67', 'sound_set_67', 's', '1', '1', '0.2', '1', '0', '0', '2771', '1', '1', '1', '1', '1', 'default', '1', '0', '0');
INSERT INTO furniture VALUES ('1177', 'Sound set 66', 'sound_set_66', 's', '1', '1', '0.2', '1', '0', '0', '2752', '1', '1', '1', '1', '1', 'default', '1', '0', '0');
INSERT INTO furniture VALUES ('1178', 'Sound set 65', 'sound_set_65', 's', '1', '1', '0.2', '1', '0', '0', '2766', '1', '1', '1', '1', '1', 'default', '1', '0', '0');
INSERT INTO furniture VALUES ('20024', 'Square Dining Table', 'table_plasto_square*9', 's', '1', '1', '1', '1', '0', '0', '118', '1', '1', '1', '1', '1', 'default', '1', '0', '0');
INSERT INTO furniture VALUES ('20021', 'Giant Heart', 'heart', 's', '1', '1', '1', '0', '0', '0', '227', '1', '1', '1', '1', '1', 'default', '1', '0', '0');
INSERT INTO furniture VALUES ('20016', 'Street Lamp', 'urban_lamp', 's', '1', '1', '1', '1', '0', '0', '3265', '1', '1', '1', '1', '1', 'default', '2', '0', '0');
INSERT INTO furniture VALUES ('1185', 'Lucky Bamboo', 'noob_plant', 's', '1', '1', '1', '0', '0', '0', '2783', '0', '1', '1', '0', '1', 'default', '1', '0', '0');
INSERT INTO furniture VALUES ('20018', 'Street Wall', 'urban_wall', 'i', '0', '0', '1', '1', '0', '0', '4244', '1', '1', '1', '1', '1', 'default', '5', '0', '0');
INSERT INTO furniture VALUES ('20022', 'Champion trophy', 'a0 prizetrophy6_b', 's', '1', '1', '1', '0', '0', '0', '1510', '1', '1', '1', '1', '0', 'trophy', '1', '0', '0');
INSERT INTO furniture VALUES ('1197', 'Japanese Teamaker', 'jp_teamaker', 's', '1', '1', '1', '0', '0', '0', '2774', '1', '1', '1', '1', '1', 'vendingmachine', '0', '28', '0');
INSERT INTO furniture VALUES ('1198', 'September 2008', 'svnr_uk', 's', '1', '1', '1', '0', '0', '0', '2838', '1', '1', '1', '1', '1', 'default', '1', '0', '0');
INSERT INTO furniture VALUES ('1199', 'August 2008', 'svnr_nl', 's', '1', '2', '1', '0', '1', '0', '2825', '1', '1', '1', '1', '1', 'default', '1', '0', '0');
INSERT INTO furniture VALUES ('1200', 'July 2008', 'svnr_it', 's', '2', '1', '1', '0', '1', '0', '2813', '1', '1', '1', '1', '1', 'default', '1', '0', '0');
INSERT INTO furniture VALUES ('1201', 'October 2008', 'svnr_de', 's', '1', '1', '1', '0', '0', '0', '2801', '1', '1', '1', '1', '1', 'default', '1', '0', '0');
INSERT INTO furniture VALUES ('1202', 'November 2008', 'svnr_aus', 's', '1', '1', '1', '0', '0', '0', '2836', '1', '1', '1', '1', '1', 'default', '1', '0', '0');
INSERT INTO furniture VALUES ('1203', 'Accompaniments', 'diner_tray_7', 's', '1', '1', '1', '0', '0', '0', '2840', '1', '1', '1', '1', '1', 'default', '2', '0', '0');
INSERT INTO furniture VALUES ('1204', 'Vanilla', 'diner_tray_6', 's', '1', '1', '1', '0', '0', '0', '2826', '1', '1', '1', '1', '1', 'default', '1', '0', '0');
INSERT INTO furniture VALUES ('1205', 'Bacon and Eggs', 'diner_tray_5', 's', '1', '1', '1', '0', '0', '0', '2815', '1', '1', '1', '1', '1', 'default', '1', '0', '0');
INSERT INTO furniture VALUES ('1206', 'Pancakes', 'diner_tray_4', 's', '1', '1', '1', '0', '0', '0', '2800', '1', '1', '1', '1', '1', 'default', '1', '0', '0');
INSERT INTO furniture VALUES ('1207', 'Spaghetti Meatballs', 'diner_tray_3', 's', '1', '1', '1', '0', '0', '0', '2841', '1', '1', '1', '1', '1', 'default', '1', '0', '0');
INSERT INTO furniture VALUES ('1208', 'Steak and Mash', 'diner_tray_2', 's', '1', '1', '1', '0', '0', '0', '2802', '1', '1', '1', '1', '1', 'default', '1', '0', '0');
INSERT INTO furniture VALUES ('1209', 'Burger and Chips', 'diner_tray_1', 's', '1', '1', '1', '0', '0', '0', '2839', '1', '1', '1', '1', '1', 'default', '1', '0', '0');
INSERT INTO furniture VALUES ('1210', 'Had your fill', 'diner_tray_0', 's', '1', '1', '0.1', '1', '0', '0', '2837', '1', '1', '1', '1', '1', 'default', '1', '0', '0');
INSERT INTO furniture VALUES ('1211', 'Aqua Diner Sofa 2', 'diner_sofa_2*1', 's', '1', '1', '1', '0', '1', '0', '2804', '1', '1', '1', '1', '1', 'default', '1', '0', '0');
INSERT INTO furniture VALUES ('1212', 'Pink Diner Sofa 2', 'diner_sofa_2*2', 's', '1', '1', '1', '0', '1', '0', '2805', '1', '1', '1', '1', '1', 'default', '1', '0', '0');
INSERT INTO furniture VALUES ('1213', 'Black Diner Sofa 2', 'diner_sofa_2*3', 's', '1', '1', '1', '0', '1', '0', '2806', '1', '1', '1', '1', '1', 'default', '1', '0', '0');
INSERT INTO furniture VALUES ('1214', 'White Diner Sofa 2', 'diner_sofa_2*4', 's', '1', '1', '1', '0', '1', '0', '2807', '1', '1', '1', '1', '1', 'default', '1', '0', '0');
INSERT INTO furniture VALUES ('1215', 'Latte Diner Sofa 2', 'diner_sofa_2*5', 's', '1', '1', '1', '0', '1', '0', '2808', '1', '1', '1', '1', '1', 'default', '1', '0', '0');
INSERT INTO furniture VALUES ('1216', 'Blue Diner Sofa 2', 'diner_sofa_2*6', 's', '1', '1', '1', '0', '1', '0', '2809', '1', '1', '1', '1', '1', 'default', '1', '0', '0');
INSERT INTO furniture VALUES ('1217', 'Green Diner Sofa 2', 'diner_sofa_2*7', 's', '1', '1', '1', '0', '1', '0', '2810', '1', '1', '1', '1', '1', 'default', '1', '0', '0');
INSERT INTO furniture VALUES ('1218', 'Yellow Diner Sofa 2', 'diner_sofa_2*8', 's', '1', '1', '1', '0', '1', '0', '2811', '1', '1', '1', '1', '1', 'default', '1', '0', '0');
INSERT INTO furniture VALUES ('1219', 'Red Diner Sofa 2', 'diner_sofa_2*9', 's', '1', '1', '1', '0', '1', '0', '2812', '1', '1', '1', '1', '1', 'default', '1', '0', '0');
INSERT INTO furniture VALUES ('1220', 'Diner Shaker', 'diner_shaker', 's', '1', '1', '1', '0', '0', '0', '2814', '1', '1', '1', '1', '1', 'default', '2', '0', '0');
INSERT INTO furniture VALUES ('1221', 'Diner Floor', 'diner_rug', 's', '2', '2', '0', '1', '0', '1', '2803', '1', '1', '1', '1', '1', 'default', '1', '0', '0');
INSERT INTO furniture VALUES ('1222', 'Aqua Gumball Machine', 'diner_gumvendor*1', 's', '1', '1', '1', '0', '0', '0', '2827', '1', '1', '1', '1', '1', 'default', '1', '0', '0');
INSERT INTO furniture VALUES ('1223', 'Pink Gumball Machine', 'diner_gumvendor*2', 's', '1', '1', '1', '0', '0', '0', '2828', '1', '1', '1', '1', '1', 'default', '1', '0', '0');
INSERT INTO furniture VALUES ('1224', 'Black Gumball Machine', 'diner_gumvendor*3', 's', '1', '1', '1', '0', '0', '0', '2829', '1', '1', '1', '1', '1', 'default', '1', '0', '0');
INSERT INTO furniture VALUES ('1225', 'White Gumball Machine', 'diner_gumvendor*4', 's', '1', '1', '1', '0', '0', '0', '2830', '1', '1', '1', '1', '1', 'default', '1', '0', '0');
INSERT INTO furniture VALUES ('1226', 'Latte Gumball Machine', 'diner_gumvendor*5', 's', '1', '1', '1', '0', '0', '0', '2831', '1', '1', '1', '1', '1', 'default', '1', '0', '0');
INSERT INTO furniture VALUES ('1227', 'Blue Gumball Machine', 'diner_gumvendor*6', 's', '1', '1', '1', '0', '0', '0', '2832', '1', '1', '1', '1', '1', 'default', '1', '0', '0');
INSERT INTO furniture VALUES ('1228', 'Green Gumball Machine', 'diner_gumvendor*7', 's', '1', '1', '1', '0', '0', '0', '2833', '1', '1', '1', '1', '1', 'default', '1', '0', '0');
INSERT INTO furniture VALUES ('1229', 'Yellow Gumball Machine', 'diner_gumvendor*8', 's', '1', '1', '1', '0', '0', '0', '2834', '1', '1', '1', '1', '1', 'default', '1', '0', '0');
INSERT INTO furniture VALUES ('1230', 'Red Gumball Machine', 'diner_gumvendor*9', 's', '1', '1', '1', '0', '0', '0', '2835', '1', '1', '1', '1', '1', 'default', '1', '0', '0');
INSERT INTO furniture VALUES ('1231', 'Aqua Diner Till', 'diner_cashreg*1', 's', '1', '1', '1', '0', '0', '0', '2816', '1', '1', '1', '1', '1', 'default', '2', '0', '0');
INSERT INTO furniture VALUES ('1232', 'Pink Diner Till', 'diner_cashreg*2', 's', '1', '1', '1', '0', '0', '0', '2817', '1', '1', '1', '1', '1', 'default', '2', '0', '0');
INSERT INTO furniture VALUES ('1233', 'Black Diner Till', 'diner_cashreg*3', 's', '1', '1', '1', '0', '0', '0', '2818', '1', '1', '1', '1', '1', 'default', '2', '0', '0');
INSERT INTO furniture VALUES ('1234', 'White Diner Till', 'diner_cashreg*4', 's', '1', '1', '1', '0', '0', '0', '2819', '1', '1', '1', '1', '1', 'default', '2', '0', '0');
INSERT INTO furniture VALUES ('1235', 'Latte Diner Till', 'diner_cashreg*5', 's', '1', '1', '1', '0', '0', '0', '2820', '1', '1', '1', '1', '1', 'default', '2', '0', '0');
INSERT INTO furniture VALUES ('1236', 'Blue Diner Till', 'diner_cashreg*6', 's', '1', '1', '1', '0', '0', '0', '2821', '1', '1', '1', '1', '1', 'default', '2', '0', '0');
INSERT INTO furniture VALUES ('1237', 'Green Diner Till', 'diner_cashreg*7', 's', '1', '1', '1', '0', '0', '0', '2822', '1', '1', '1', '1', '1', 'default', '2', '0', '0');
INSERT INTO furniture VALUES ('1238', 'Yellow Diner Till', 'diner_cashreg*8', 's', '1', '1', '1', '0', '0', '0', '2823', '1', '1', '1', '1', '1', 'default', '2', '0', '0');
INSERT INTO furniture VALUES ('1239', 'Red Diner Till', 'diner_cashreg*9', 's', '1', '1', '1', '0', '0', '0', '2824', '1', '1', '1', '1', '1', 'default', '2', '0', '0');
INSERT INTO furniture VALUES ('1240', 'Aqua Diner Table', 'diner_table_2*1', 's', '3', '2', '1', '1', '0', '0', '2879', '1', '1', '1', '1', '1', 'default', '1', '0', '0');
INSERT INTO furniture VALUES ('1241', 'Pink Diner Table', 'diner_table_2*2', 's', '3', '2', '1', '1', '0', '0', '2880', '1', '1', '1', '1', '1', 'default', '1', '0', '0');
INSERT INTO furniture VALUES ('1242', 'Black Diner Table', 'diner_table_2*3', 's', '3', '2', '1', '1', '0', '0', '2881', '1', '1', '1', '1', '1', 'default', '1', '0', '0');
INSERT INTO furniture VALUES ('1243', 'White Diner Table', 'diner_table_2*4', 's', '3', '2', '1', '1', '0', '0', '2882', '1', '1', '1', '1', '1', 'default', '1', '0', '0');
INSERT INTO furniture VALUES ('1244', 'Latte Diner Table', 'diner_table_2*5', 's', '3', '2', '1', '1', '0', '0', '2883', '1', '1', '1', '1', '1', 'default', '1', '0', '0');
INSERT INTO furniture VALUES ('1245', 'Blue Diner Table', 'diner_table_2*6', 's', '3', '2', '1', '1', '0', '0', '2884', '1', '1', '1', '1', '1', 'default', '1', '0', '0');
INSERT INTO furniture VALUES ('1246', 'Green Diner Table', 'diner_table_2*7', 's', '3', '2', '1', '1', '0', '0', '2885', '1', '1', '1', '1', '1', 'default', '1', '0', '0');
INSERT INTO furniture VALUES ('1247', 'Yellow Diner Table', 'diner_table_2*8', 's', '3', '2', '1', '1', '0', '0', '2886', '1', '1', '1', '1', '1', 'default', '1', '0', '0');
INSERT INTO furniture VALUES ('1248', 'Red Diner Table', 'diner_table_2*9', 's', '3', '2', '1', '1', '0', '0', '2887', '1', '1', '1', '1', '1', 'default', '1', '0', '0');
INSERT INTO furniture VALUES ('1249', 'Aqua Diner Booth Table', 'diner_table_1*1', 's', '2', '2', '1', '1', '0', '0', '2897', '1', '1', '1', '1', '1', 'default', '1', '0', '0');
INSERT INTO furniture VALUES ('1250', 'Pink Diner Booth Table', 'diner_table_1*2', 's', '2', '2', '1', '1', '0', '0', '2898', '1', '1', '1', '1', '1', 'default', '1', '0', '0');
INSERT INTO furniture VALUES ('1251', 'Black Diner Booth Table', 'diner_table_1*3', 's', '2', '2', '1', '1', '0', '0', '2899', '1', '1', '1', '1', '1', 'default', '1', '0', '0');
INSERT INTO furniture VALUES ('1252', 'White Diner Booth Table', 'diner_table_1*4', 's', '2', '2', '1', '1', '0', '0', '2900', '1', '1', '1', '1', '1', 'default', '1', '0', '0');
INSERT INTO furniture VALUES ('1253', 'Latte Diner Booth Table', 'diner_table_1*5', 's', '2', '2', '1', '1', '0', '0', '2901', '1', '1', '1', '1', '1', 'default', '1', '0', '0');
INSERT INTO furniture VALUES ('1254', 'Blue Diner Booth Table', 'diner_table_1*6', 's', '2', '2', '1', '1', '0', '0', '2902', '1', '1', '1', '1', '1', 'default', '1', '0', '0');
INSERT INTO furniture VALUES ('1255', 'Green Diner Booth Table', 'diner_table_1*7', 's', '2', '2', '1', '1', '0', '0', '2903', '1', '1', '1', '1', '1', 'default', '1', '0', '0');
INSERT INTO furniture VALUES ('1256', 'Yellow Diner Booth Table', 'diner_table_1*8', 's', '2', '2', '1', '1', '0', '0', '2904', '1', '1', '1', '1', '1', 'default', '1', '0', '0');
INSERT INTO furniture VALUES ('1257', 'Red Diner Booth Table', 'diner_table_1*9', 's', '2', '2', '1', '1', '0', '0', '2905', '1', '1', '1', '1', '1', 'default', '1', '0', '0');
INSERT INTO furniture VALUES ('1258', 'Aqua Diner Sofa 1', 'diner_sofa_1*1', 's', '1', '1', '1', '0', '1', '0', '2888', '1', '1', '1', '1', '1', 'default', '1', '0', '0');
INSERT INTO furniture VALUES ('1259', 'Pink Diner Sofa 1', 'diner_sofa_1*2', 's', '1', '1', '1', '0', '1', '0', '2889', '1', '1', '1', '1', '1', 'default', '1', '0', '0');
INSERT INTO furniture VALUES ('1260', 'Black Diner Sofa 1', 'diner_sofa_1*3', 's', '1', '1', '1', '0', '1', '0', '2890', '1', '1', '1', '1', '1', 'default', '1', '0', '0');
INSERT INTO furniture VALUES ('1261', 'White Diner Sofa 1', 'diner_sofa_1*4', 's', '1', '1', '1', '0', '1', '0', '2891', '1', '1', '1', '1', '1', 'default', '1', '0', '0');
INSERT INTO furniture VALUES ('1262', 'Latte Diner Sofa 1', 'diner_sofa_1*5', 's', '1', '1', '1', '0', '1', '0', '2892', '1', '1', '1', '1', '1', 'default', '1', '0', '0');
INSERT INTO furniture VALUES ('1263', 'Blue Diner Sofa 1', 'diner_sofa_1*6', 's', '1', '1', '1', '0', '1', '0', '2893', '1', '1', '1', '1', '1', 'default', '1', '0', '0');
INSERT INTO furniture VALUES ('1264', 'Green Diner Sofa 1', 'diner_sofa_1*7', 's', '1', '1', '1', '0', '1', '0', '2894', '1', '1', '1', '1', '1', 'default', '1', '0', '0');
INSERT INTO furniture VALUES ('1265', 'Yellow Diner Sofa 1', 'diner_sofa_1*8', 's', '1', '1', '1', '0', '1', '0', '2895', '1', '1', '1', '1', '1', 'default', '1', '0', '0');
INSERT INTO furniture VALUES ('1266', 'Red Diner Sofa 1', 'diner_sofa_1*9', 's', '1', '1', '1', '0', '1', '0', '2896', '1', '1', '1', '1', '1', 'default', '1', '0', '0');
INSERT INTO furniture VALUES ('1267', 'Aqua Diner Stool', 'diner_chair*1', 's', '1', '1', '1.4', '0', '1', '0', '2861', '1', '1', '1', '1', '1', 'default', '1', '0', '0');
INSERT INTO furniture VALUES ('1268', 'Pink Diner Stool', 'diner_chair*2', 's', '1', '1', '1.4', '0', '1', '0', '2862', '1', '1', '1', '1', '1', 'default', '1', '0', '0');
INSERT INTO furniture VALUES ('1269', 'Black Diner Stool', 'diner_chair*3', 's', '1', '1', '1.4', '0', '1', '0', '2863', '1', '1', '1', '1', '1', 'default', '1', '0', '0');
INSERT INTO furniture VALUES ('1270', 'White Diner Stool', 'diner_chair*4', 's', '1', '1', '1.4', '0', '1', '0', '2864', '1', '1', '1', '1', '1', 'default', '1', '0', '0');
INSERT INTO furniture VALUES ('1271', 'Latte Diner Stool', 'diner_chair*5', 's', '1', '1', '1.4', '0', '1', '0', '2865', '1', '1', '1', '1', '1', 'default', '1', '0', '0');
INSERT INTO furniture VALUES ('1272', 'Blue Diner Stool', 'diner_chair*6', 's', '1', '1', '1.4', '0', '1', '0', '2866', '1', '1', '1', '1', '1', 'default', '1', '0', '0');
INSERT INTO furniture VALUES ('1273', 'Green Diner Stool', 'diner_chair*7', 's', '1', '1', '1.4', '0', '1', '0', '2867', '1', '1', '1', '1', '1', 'default', '1', '0', '0');
INSERT INTO furniture VALUES ('1274', 'Yellow Diner Stool', 'diner_chair*8', 's', '1', '1', '1.4', '0', '1', '0', '2868', '1', '1', '1', '1', '1', 'default', '1', '0', '0');
INSERT INTO furniture VALUES ('1275', 'Red Diner Stool', 'diner_chair*9', 's', '1', '1', '1.4', '0', '1', '0', '2869', '1', '1', '1', '1', '1', 'default', '1', '0', '0');
INSERT INTO furniture VALUES ('1276', 'Aqua Diner Gate', 'diner_bardesk_gate*1', 's', '1', '1', '0.001', '0', '0', '0', '2842', '1', '1', '1', '1', '1', 'gate', '2', '0', '0');
INSERT INTO furniture VALUES ('1277', 'Pink Diner Gate', 'diner_bardesk_gate*2', 's', '1', '1', '0.001', '0', '0', '0', '2843', '1', '1', '1', '1', '1', 'gate', '2', '0', '0');
INSERT INTO furniture VALUES ('1278', 'Black Diner Gate', 'diner_bardesk_gate*3', 's', '1', '1', '0.001', '0', '0', '0', '2844', '1', '1', '1', '1', '1', 'gate', '2', '0', '0');
INSERT INTO furniture VALUES ('1279', 'White Diner Gate', 'diner_bardesk_gate*4', 's', '1', '1', '0.001', '0', '0', '0', '2845', '1', '1', '1', '1', '1', 'gate', '2', '0', '0');
INSERT INTO furniture VALUES ('1280', 'Latte Diner Gate', 'diner_bardesk_gate*5', 's', '1', '1', '0.001', '0', '0', '0', '2846', '1', '1', '1', '1', '1', 'gate', '2', '0', '0');
INSERT INTO furniture VALUES ('1281', 'Blue Diner Gate', 'diner_bardesk_gate*6', 's', '1', '1', '0.001', '0', '0', '0', '2847', '1', '1', '1', '1', '1', 'gate', '2', '0', '0');
INSERT INTO furniture VALUES ('1282', 'Green Diner Gate', 'diner_bardesk_gate*7', 's', '1', '1', '0.001', '0', '0', '0', '2848', '1', '1', '1', '1', '1', 'gate', '2', '0', '0');
INSERT INTO furniture VALUES ('1283', 'Yellow Diner Gate', 'diner_bardesk_gate*8', 's', '1', '1', '0.001', '0', '0', '0', '2849', '1', '1', '1', '1', '1', 'gate', '2', '0', '0');
INSERT INTO furniture VALUES ('1284', 'Red Diner Gate', 'diner_bardesk_gate*9', 's', '1', '1', '0.001', '0', '0', '0', '2850', '1', '1', '1', '1', '1', 'gate', '2', '0', '0');
INSERT INTO furniture VALUES ('1285', 'Aqua Diner Corner', 'diner_bardesk_corner*1', 's', '1', '1', '1', '1', '0', '0', '2870', '1', '1', '1', '1', '1', 'default', '1', '0', '0');
INSERT INTO furniture VALUES ('1286', 'Pink Diner Corner', 'diner_bardesk_corner*2', 's', '1', '1', '1', '1', '0', '0', '2871', '1', '1', '1', '1', '1', 'default', '1', '0', '0');
INSERT INTO furniture VALUES ('1287', 'Black Diner Corner', 'diner_bardesk_corner*3', 's', '1', '1', '1', '1', '0', '0', '2872', '1', '1', '1', '1', '1', 'default', '1', '0', '0');
INSERT INTO furniture VALUES ('1288', 'Latte Diner Corner', 'diner_bardesk_corner*4', 's', '1', '1', '1', '1', '0', '0', '2873', '1', '1', '1', '1', '1', 'default', '1', '0', '0');
INSERT INTO furniture VALUES ('1289', 'Blue Diner Corner', 'diner_bardesk_corner*6', 's', '1', '1', '1', '1', '0', '0', '2875', '1', '1', '1', '1', '1', 'default', '1', '0', '0');
INSERT INTO furniture VALUES ('1290', 'Green Diner Corner', 'diner_bardesk_corner*7', 's', '1', '1', '1', '1', '0', '0', '2876', '1', '1', '1', '1', '1', 'default', '1', '0', '0');
INSERT INTO furniture VALUES ('1291', 'Yellow Diner Corner', 'diner_bardesk_corner*8', 's', '1', '1', '1', '1', '0', '0', '2877', '1', '1', '1', '1', '1', 'default', '1', '0', '0');
INSERT INTO furniture VALUES ('1292', 'Red Diner Corner', 'diner_bardesk_corner*9', 's', '1', '1', '1', '1', '0', '0', '2878', '1', '1', '1', '1', '1', 'default', '1', '0', '0');
INSERT INTO furniture VALUES ('1293', 'Aqua Diner Bar', 'diner_bardesk*1', 's', '1', '1', '1', '1', '0', '0', '2851', '1', '1', '1', '1', '1', 'default', '1', '0', '0');
INSERT INTO furniture VALUES ('1294', 'Pink Diner Bar', 'diner_bardesk*2', 's', '1', '1', '1', '1', '0', '0', '2852', '1', '1', '1', '1', '1', 'default', '1', '0', '0');
INSERT INTO furniture VALUES ('1295', 'Black Diner Bar', 'diner_bardesk*3', 's', '1', '1', '1', '1', '0', '0', '2853', '1', '1', '1', '1', '1', 'default', '1', '0', '0');
INSERT INTO furniture VALUES ('1296', 'White Diner Bar', 'diner_bardesk*4', 's', '1', '1', '1', '1', '0', '0', '2854', '1', '1', '1', '1', '1', 'default', '1', '0', '0');
INSERT INTO furniture VALUES ('1297', 'Latte Diner Bar', 'diner_bardesk*5', 's', '1', '1', '1', '1', '0', '0', '2855', '1', '1', '1', '1', '1', 'default', '1', '0', '0');
INSERT INTO furniture VALUES ('1298', 'Blue Diner Bar', 'diner_bardesk*6', 's', '1', '1', '1', '1', '0', '0', '2856', '1', '1', '1', '1', '1', 'default', '1', '0', '0');
INSERT INTO furniture VALUES ('1299', 'Green Diner Bar', 'diner_bardesk*7', 's', '1', '1', '1', '1', '0', '0', '2857', '1', '1', '1', '1', '1', 'default', '1', '0', '0');
INSERT INTO furniture VALUES ('1300', 'Yellow Diner Bar', 'diner_bardesk*8', 's', '1', '1', '1', '1', '0', '0', '2858', '1', '1', '1', '1', '1', 'default', '1', '0', '0');
INSERT INTO furniture VALUES ('1301', 'Red Diner Bar', 'diner_bardesk*9', 's', '1', '1', '1', '1', '0', '0', '2859', '1', '1', '1', '1', '1', 'default', '1', '0', '0');
INSERT INTO furniture VALUES ('1302', 'ads_dave_cns', 'ads_dave_cns', 's', '1', '1', '1', '0', '0', '0', '2860', '1', '1', '1', '1', '1', 'default', '1', '0', '0');
INSERT INTO furniture VALUES ('1303', 'easy_carpet name', 'easy_carpet', 's', '4', '4', '0', '1', '0', '1', '2911', '1', '1', '1', '1', '1', 'default', '1', '0', '0');
INSERT INTO furniture VALUES ('1304', 'easy_bowl2', 'easy_bowl2', 's', '1', '1', '1', '1', '0', '0', '2907', '1', '1', '1', '1', '1', 'default', '1', '0', '0');
INSERT INTO furniture VALUES ('1305', 'Greek Corner', 'greek_corner', 's', '1', '1', '1', '0', '0', '0', '2910', '1', '1', '1', '1', '1', 'default', '1', '0', '0');
INSERT INTO furniture VALUES ('1306', 'Enter mortal', 'greek_gate', 's', '2', '1', '0.001', '0', '0', '0', '2908', '1', '1', '1', '1', '1', 'gate', '2', '0', '0');
INSERT INTO furniture VALUES ('1307', 'Greek Pillars', 'greek_pillars', 's', '2', '1', '1', '0', '0', '0', '2909', '1', '1', '1', '1', '1', 'default', '1', '0', '0');
INSERT INTO furniture VALUES ('1308', 'Greek Seat', 'greek_seat', 's', '1', '1', '0.5', '0', '1', '0', '2906', '1', '1', '1', '1', '1', 'default', '1', '0', '0');
INSERT INTO furniture VALUES ('1309', 'Greek trophy', 'a0 greektrophy_g', 's', '1', '1', '1', '0', '0', '0', '2622', '1', '1', '1', '1', '0', 'trophy', '1', '0', '0');
INSERT INTO furniture VALUES ('1310', 'Greek trophy', 'a0 greektrophy_s', 's', '1', '1', '1', '0', '0', '0', '2623', '1', '1', '1', '1', '0', 'trophy', '1', '0', '0');
INSERT INTO furniture VALUES ('1311', 'Greek trophy', 'a0 greektrophy_b', 's', '1', '1', '1', '0', '0', '0', '2624', '1', '1', '1', '1', '0', 'trophy', '1', '0', '0');
INSERT INTO furniture VALUES ('1312', 'greek_block', 'greek_block', 's', '2', '1', '0.8', '0', '1', '0', '2915', '1', '1', '1', '1', '1', 'default', '1', '0', '0');
INSERT INTO furniture VALUES ('1313', 'Glass Table', 'hcc_table', 's', '1', '2', '1', '0', '0', '0', '2923', '1', '1', '1', '1', '1', 'default', '1', '0', '0');
INSERT INTO furniture VALUES ('1314', 'Bookshelf', 'hcc_shelf', 's', '1', '2', '1', '0', '0', '0', '2917', '1', '1', '1', '1', '1', 'default', '1', '0', '0');
INSERT INTO furniture VALUES ('1315', 'Low Back Sofa', 'hcc_sofa', 's', '2', '1', '1.2', '0', '1', '0', '2921', '1', '1', '1', '1', '1', 'default', '1', '0', '0');
INSERT INTO furniture VALUES ('1316', 'Cool look', 'hcc_minibar', 's', '1', '1', '1', '0', '0', '0', '2924', '1', '1', '1', '1', '1', 'vendingmachine', '0', '24', '0');
INSERT INTO furniture VALUES ('1317', 'Trendy Stool', 'hcc_chair', 's', '1', '1', '1', '0', '1', '0', '2919', '1', '1', '1', '1', '1', 'default', '1', '0', '0');
INSERT INTO furniture VALUES ('1318', 'Crime scene', 'det_divider', 's', '2', '1', '1', '0', '0', '0', '2918', '1', '1', '1', '1', '1', 'default', '1', '0', '0');
INSERT INTO furniture VALUES ('1319', 'netari_carpet', 'netari_carpet', 's', '3', '5', '0', '1', '0', '1', '2916', '1', '1', '1', '1', '1', 'default', '1', '0', '0');
INSERT INTO furniture VALUES ('1320', 'Chalk Outline', 'det_body', 's', '2', '3', '0', '0', '0', '1', '2922', '1', '1', '1', '1', '1', 'default', '1', '0', '0');
INSERT INTO furniture VALUES ('1321', 'Antique Stool', 'hcc_stool', 's', '1', '1', '1.2', '0', '1', '0', '2920', '1', '1', '1', '1', '1', 'default', '1', '0', '0');
INSERT INTO furniture VALUES ('1322', 'Reclining Chair', 'hcc_sofachair', 's', '1', '1', '1.2', '0', '1', '0', '2925', '1', '1', '1', '1', '1', 'default', '1', '0', '0');
INSERT INTO furniture VALUES ('1323', 'Glass Corner', 'hcc_crnr', 's', '1', '1', '1', '0', '0', '0', '2926', '1', '1', '1', '1', '1', 'default', '1', '0', '0');
INSERT INTO furniture VALUES ('1324', 'Glass Divider', 'hcc_dvdr', 's', '2', '1', '1', '0', '0', '0', '2927', '1', '1', '1', '1', '1', 'default', '1', '0', '0');
INSERT INTO furniture VALUES ('1325', 'sob_carpet', 'sob_carpet', 's', '3', '5', '0', '1', '0', '1', '2928', '1', '1', '1', '1', '1', 'default', '1', '0', '0');
INSERT INTO furniture VALUES ('1326', 'My Hump', 'igor_seat', 's', '1', '1', '1', '0', '1', '0', '2929', '1', '1', '1', '1', '1', 'default', '2', '0', '0');
INSERT INTO furniture VALUES ('1327', 'The Brain', 'ads_igorbrain', 's', '1', '1', '1', '0', '0', '0', '2936', '1', '1', '1', '1', '1', 'default', '2', '0', '0');
INSERT INTO furniture VALUES ('1328', 'Igor Switch', 'ads_igorswitch', 's', '1', '1', '1', '0', '0', '0', '2934', '1', '1', '1', '1', '1', 'default', '2', '0', '0');
INSERT INTO furniture VALUES ('1329', 'ads_711', 'ads_711*1', 's', '1', '1', '1', '0', '0', '0', '2930', '1', '1', '1', '1', '1', 'vendingmachine', '0', '19', '0');
INSERT INTO furniture VALUES ('1330', 'ads_711', 'ads_711*2', 's', '1', '1', '1', '0', '0', '0', '2931', '1', '1', '1', '1', '1', 'vendingmachine', '0', '19', '0');
INSERT INTO furniture VALUES ('1331', 'ads_711', 'ads_711*3', 's', '1', '1', '1', '0', '0', '0', '2932', '1', '1', '1', '1', '1', 'vendingmachine', '0', '19', '0');
INSERT INTO furniture VALUES ('1332', 'ads_711', 'ads_711*4', 's', '1', '1', '1', '0', '0', '0', '2933', '1', '1', '1', '1', '1', 'vendingmachine', '0', '19', '0');
INSERT INTO furniture VALUES ('1333', 'Igor Ray Gun', 'ads_igorraygun', 's', '1', '2', '1', '0', '0', '0', '2935', '1', '1', '1', '1', '1', 'default', '2', '0', '0');
INSERT INTO furniture VALUES ('1334', 'Blood Sink', 'hween08_sink', 's', '1', '1', '1', '0', '0', '0', '2944', '1', '1', '1', '1', '1', 'vendingmachine', '0', '29', '0');
INSERT INTO furniture VALUES ('1335', 'Hospital Curtain (blood)', 'hween08_curtain', 's', '3', '1', '1', '0', '0', '0', '2942', '1', '1', '1', '1', '1', 'default', '1', '0', '0');
INSERT INTO furniture VALUES ('1336', 'Blood Bath', 'hween08_bath', 's', '1', '2', '1', '0', '1', '0', '2948', '1', '1', '1', '1', '1', 'default', '2', '0', '0');
INSERT INTO furniture VALUES ('1337', 'Life Support (blood)', 'hween08_defibs', 's', '1', '1', '1', '0', '0', '0', '2938', '1', '1', '1', '1', '1', 'default', '1', '0', '0');
INSERT INTO furniture VALUES ('1338', 'Body Bag', 'hween08_bbag', 's', '1', '3', '1.3', '0', '0', '0', '2943', '1', '1', '1', '1', '1', 'bed', '1', '0', '0');
INSERT INTO furniture VALUES ('1339', 'Hospital Curtain (ooze)', 'hween08_curtain2', 's', '3', '1', '1', '0', '0', '0', '2949', '1', '1', '1', '1', '1', 'default', '1', '0', '0');
INSERT INTO furniture VALUES ('1340', 'Life Support (ooze)', 'hween08_defibs2', 's', '1', '1', '1', '0', '0', '0', '2939', '1', '1', '1', '1', '1', 'default', '1', '0', '0');
INSERT INTO furniture VALUES ('1341', 'Hospital Bed (blood)', 'hween08_bed', 's', '1', '3', '2', '0', '0', '0', '2945', '1', '1', '1', '1', '1', 'bed', '1', '0', '0');
INSERT INTO furniture VALUES ('1342', 'Ooze Sink', 'hween08_sink2', 's', '1', '1', '1', '0', '0', '0', '2940', '1', '1', '1', '1', '1', 'vendingmachine', '0', '30', '0');
INSERT INTO furniture VALUES ('1343', 'Hospital Bed (ooze)', 'hween08_bed2', 's', '1', '3', '1', '0', '0', '0', '2937', '1', '1', '1', '1', '1', 'bed', '1', '0', '0');
INSERT INTO furniture VALUES ('1344', 'Ooze Bath', 'hween08_bath2', 's', '1', '2', '1', '0', '1', '0', '2947', '1', '1', '1', '1', '1', 'default', '2', '0', '0');
INSERT INTO furniture VALUES ('1345', 'Manhole', 'hween08_manhole', 's', '1', '1', '1', '0', '0', '0', '2946', '1', '1', '1', '1', '1', 'default', '2', '0', '0');
INSERT INTO furniture VALUES ('1346', ' poke', 'hween08_trll', 's', '1', '1', '1', '0', '0', '0', '2941', '1', '1', '1', '1', '1', 'default', '1', '0', '0');
INSERT INTO furniture VALUES ('1347', 'Glass High Bar Table', 'party_table', 's', '1', '1', '1', '1', '0', '0', '2956', '1', '1', '1', '1', '1', 'default', '2', '0', '0');
INSERT INTO furniture VALUES ('1348', 'Spotlight', 'party_discol', 's', '1', '1', '1', '0', '0', '0', '2963', '1', '1', '1', '1', '1', 'default', '4', '0', '0');
INSERT INTO furniture VALUES ('1349', 'Stage Block Large', 'party_block2', 's', '2', '2', '0.7', '1', '0', '1', '2950', '1', '1', '1', '1', '1', 'default', '1', '0', '0');
INSERT INTO furniture VALUES ('1350', 'Bar Corner', 'party_barcorn', 's', '1', '1', '1', '1', '0', '0', '2957', '1', '1', '1', '1', '1', 'default', '2', '0', '0');
INSERT INTO furniture VALUES ('1351', 'High Class Bar Stool', 'party_chair', 's', '1', '1', '1.3', '0', '1', '0', '2960', '1', '1', '1', '1', '1', 'default', '1', '0', '0');
INSERT INTO furniture VALUES ('1352', 'Small Stage', 'party_block', 's', '1', '1', '0.9', '1', '0', '1', '2959', '1', '1', '1', '1', '1', 'default', '1', '0', '0');
INSERT INTO furniture VALUES ('1353', 'Dance Floor Laser', 'party_ravel', 's', '1', '1', '1', '0', '0', '0', '2965', '1', '1', '1', '1', '1', 'default', '4', '0', '0');
INSERT INTO furniture VALUES ('1354', 'Despite being made a lava', 'party_tube_lava', 's', '1', '1', '1', '0', '0', '0', '2966', '1', '1', '1', '1', '1', 'default', '3', '0', '0');
INSERT INTO furniture VALUES ('1355', 'Club Tray', 'party_tray', 's', '1', '1', '1', '0', '0', '0', '2955', '1', '1', '1', '1', '1', 'vendingmachine', '0', '31', '0');
INSERT INTO furniture VALUES ('1356', 'Scratch it', 'party_djtable', 's', '1', '2', '1', '0', '0', '0', '2954', '1', '1', '1', '1', '1', 'default', '2', '0', '0');
INSERT INTO furniture VALUES ('1357', 'Disco Floor', 'party_floor', 's', '2', '2', '0', '1', '0', '1', '2958', '1', '1', '1', '1', '1', 'default', '10', '0', '0');
INSERT INTO furniture VALUES ('1358', 'Glitter Ball', 'party_ball', 's', '1', '1', '0', '0', '0', '1', '2964', '1', '1', '1', '1', '1', 'default', '2', '0', '0');
INSERT INTO furniture VALUES ('1359', 'Bubbles Machine', 'party_tube_bubble', 's', '1', '1', '1', '0', '0', '0', '2951', '1', '1', '1', '1', '1', 'default', '3', '0', '0');
INSERT INTO furniture VALUES ('1360', ' MC', 'party_mic', 's', '1', '1', '1', '0', '0', '0', '2953', '1', '1', '1', '1', '1', 'default', '1', '0', '0');
INSERT INTO furniture VALUES ('1361', 'Dance Floor Beamer', 'party_beamer', 's', '1', '1', '1', '0', '0', '0', '2961', '1', '1', '1', '1', '1', 'default', '7', '0', '0');
INSERT INTO furniture VALUES ('1362', 'Bar Centre', 'party_bardesk', 's', '1', '1', '1', '1', '0', '0', '2962', '1', '1', '1', '1', '1', 'default', '2', '0', '0');
INSERT INTO furniture VALUES ('1363', 'Club seat', 'party_seat', 's', '1', '1', '1.1', '0', '1', '0', '2952', '1', '1', '1', '1', '1', 'default', '1', '0', '0');
INSERT INTO furniture VALUES ('1364', 'Snow Seat', 'xmas08_snowpl', 's', '1', '1', '1', '0', '1', '1', '3005', '1', '1', '1', '1', '1', 'default', '1', '0', '0');
INSERT INTO furniture VALUES ('1365', 'Emperor Penguin', 'penguin_basic', 's', '1', '1', '1', '0', '0', '0', '2977', '1', '1', '1', '1', '1', 'default', '1', '0', '0');
INSERT INTO furniture VALUES ('1366', 'Arctic Penguin Trophy', 'xmas08_trph1', 's', '1', '1', '1', '0', '0', '0', '2972', '1', '1', '1', '1', '1', 'default', '1', '0', '0');
INSERT INTO furniture VALUES ('1367', 'Musketeer Penguin', 'penguin_musketeer', 's', '1', '1', '1', '0', '0', '0', '2995', '1', '1', '1', '1', '1', 'default', '1', '0', '0');
INSERT INTO furniture VALUES ('1368', 'Icy table', 'xmas08_table', 's', '2', '2', '1', '1', '0', '0', '3009', '1', '1', '1', '1', '1', 'default', '1', '0', '0');
INSERT INTO furniture VALUES ('1369', 'Hot Tub', 'xmas08_hottub', 's', '2', '2', '1', '0', '1', '0', '2986', '1', '1', '1', '1', '1', 'default', '1', '0', '0');
INSERT INTO furniture VALUES ('1370', 'Luchador Penguin', 'penguin_wrestler', 's', '1', '1', '1', '0', '0', '0', '2990', '1', '1', '1', '1', '1', 'default', '1', '0', '0');
INSERT INTO furniture VALUES ('1371', 'Blow it up', 'fx_explosion', 's', '1', '1', '1', '0', '0', '0', '3011', '0', '0', '1', '0', '1', 'rentals', '2', '0', '0');
INSERT INTO furniture VALUES ('1372', 'Robot Penguin', 'penguin_robot', 's', '1', '1', '1', '0', '0', '0', '2969', '1', '1', '1', '1', '1', 'default', '1', '0', '0');
INSERT INTO furniture VALUES ('1373', 'Icy Christmas Tree', 'xmas08_icetree', 's', '1', '1', '1', '0', '0', '0', '2967', '1', '1', '1', '1', '1', 'default', '2', '0', '0');
INSERT INTO furniture VALUES ('1374', 'Camp fire', 'campfire', 's', '1', '1', '1', '1', '0', '0', '2974', '1', '1', '1', '1', '1', 'default', '3', '0', '0');
INSERT INTO furniture VALUES ('1375', 'Ice', 'xmas08_icerug', 's', '2', '2', '0', '1', '0', '1', '3002', '1', '1', '1', '1', '1', 'default', '4', '0', '0');
INSERT INTO furniture VALUES ('1376', 'Executive Penguin', 'penguin_suit', 's', '1', '1', '1', '0', '0', '0', '3008', '1', '1', '1', '1', '1', 'default', '1', '0', '0');
INSERT INTO furniture VALUES ('1377', 'December 2008', 'svnr_fi', 's', '1', '1', '1', '0', '0', '0', '2991', '1', '1', '1', '1', '1', 'default', '1', '0', '0');
INSERT INTO furniture VALUES ('1378', 'Snow Storm', 'xmas_snow', 's', '1', '1', '0', '1', '0', '1', '2982', '1', '1', '1', '1', '1', 'default', '2', '0', '0');
INSERT INTO furniture VALUES ('1379', 'Hockey Penguin', 'penguin_icehockey', 's', '1', '1', '1', '0', '0', '0', '2988', '1', '1', '1', '1', '1', 'default', '1', '0', '0');
INSERT INTO furniture VALUES ('1380', 'Pilot Penguin', 'penguin_pilot', 's', '1', '1', '1', '0', '0', '0', '3007', '1', '1', '1', '1', '1', 'default', '1', '0', '0');
INSERT INTO furniture VALUES ('1381', 'Ballerina Penguin', 'penguin_ballet', 's', '1', '1', '1', '0', '0', '0', '2996', '1', '1', '1', '1', '1', 'default', '1', '0', '0');
INSERT INTO furniture VALUES ('1382', 'Arctic SFX', 'sound_set_71', 's', '1', '1', '0.2', '1', '0', '0', '3000', '1', '1', '1', '1', '1', 'default', '1', '0', '0');
INSERT INTO furniture VALUES ('1383', 'Boxer Penguin', 'penguin_boxer', 's', '1', '1', '1', '0', '0', '0', '2979', '1', '1', '1', '1', '1', 'default', '1', '0', '0');
INSERT INTO furniture VALUES ('1384', 'Fluorescent Penguin', 'penguin_glow', 's', '1', '1', '1', '0', '0', '0', '2993', '1', '1', '1', '1', '1', 'default', '1', '0', '0');
INSERT INTO furniture VALUES ('1385', 'Summer Penguin', 'penguin_swim', 's', '1', '1', '1', '0', '0', '0', '2984', '1', '1', '1', '1', '1', 'default', '1', '0', '0');
INSERT INTO furniture VALUES ('1386', 'Sumo Penguin', 'penguin_sumo', 's', '1', '1', '1', '0', '0', '0', '2994', '1', '1', '1', '1', '1', 'default', '1', '0', '0');
INSERT INTO furniture VALUES ('1387', 'Bubbles', 'xmas08_geysir', 's', '2', '2', '1', '0', '0', '0', '2985', '1', '1', '1', '1', '1', 'default', '1', '0', '0');
INSERT INTO furniture VALUES ('1388', 'Clown Penguin', 'penguin_clown', 's', '1', '1', '1', '0', '0', '0', '2989', '1', '1', '1', '1', '1', 'default', '1', '0', '0');
INSERT INTO furniture VALUES ('1389', 'Infected Penguin', 'penguin_infected', 's', '1', '1', '1', '0', '0', '0', '2983', '1', '1', '1', '1', '1', 'default', '1', '0', '0');
INSERT INTO furniture VALUES ('1390', 'Firestarter', 'fx_flare', 's', '1', '1', '1', '1', '0', '0', '3013', '0', '0', '1', '0', '1', 'rentals', '2', '0', '0');
INSERT INTO furniture VALUES ('1391', 'Snowball Lantern Pile', 'xmas08_lantern', 's', '1', '1', '1', '0', '0', '0', '2968', '1', '1', '1', '1', '1', 'default', '2', '0', '0');
INSERT INTO furniture VALUES ('1392', 'Ice chair', 'xmas08_chair', 's', '1', '1', '1', '0', '1', '0', '3001', '1', '1', '1', '1', '1', 'default', '1', '0', '0');
INSERT INTO furniture VALUES ('1393', 'Superhero Penguin', 'penguin_super', 's', '1', '1', '1', '0', '0', '0', '2998', '1', '1', '1', '1', '1', 'default', '1', '0', '0');
INSERT INTO furniture VALUES ('1394', 'Icy Teleport', 'xmas08_telep', 's', '1', '1', '0.001', '0', '0', '0', '2978', '1', '1', '0', '1', '1', 'teleport', '1', '0', '0');
INSERT INTO furniture VALUES ('1395', 'Cube Tree', 'xmas08_cubetree', 's', '1', '1', '1', '0', '0', '0', '3006', '1', '1', '1', '1', '1', 'default', '1', '0', '0');
INSERT INTO furniture VALUES ('1396', 'Disco Penguin', 'penguin_rock', 's', '1', '1', '1', '0', '0', '0', '3010', '1', '1', '1', '1', '1', 'default', '1', '0', '0');
INSERT INTO furniture VALUES ('1397', 'Ice divider', 'xmas08_dvdr1', 's', '2', '1', '1', '0', '0', '0', '2992', '1', '1', '1', '1', '1', 'default', '1', '0', '0');
INSERT INTO furniture VALUES ('1398', 'Ice Fish Hole', 'xmas08_hole', 's', '1', '1', '1', '0', '0', '0', '2980', '1', '1', '1', '1', '1', 'vendingmachine', '0', '34', '0');
INSERT INTO furniture VALUES ('1399', 'XC Penguin', 'penguin_ski', 's', '1', '1', '1', '0', '0', '0', '2981', '1', '1', '1', '1', '1', 'default', '1', '0', '0');
INSERT INTO furniture VALUES ('1400', 'Skater Penguin', 'penguin_skater', 's', '1', '1', '1', '0', '0', '0', '2973', '1', '1', '1', '1', '1', 'default', '1', '0', '0');
INSERT INTO furniture VALUES ('1401', 'Icy Divider Corner', 'xmas08_dvdr2', 's', '1', '1', '1', '0', '0', '0', '2970', '1', '1', '1', '1', '1', 'default', '1', '0', '0');
INSERT INTO furniture VALUES ('1402', 'Christmas Penguin', 'penguin_elf', 's', '1', '1', '1', '0', '0', '0', '2971', '1', '1', '1', '1', '1', 'default', '1', '0', '0');
INSERT INTO furniture VALUES ('1403', 'Bunny Penguin', 'penguin_bunny', 's', '1', '1', '1', '0', '0', '0', '2975', '1', '1', '1', '1', '1', 'default', '1', '0', '0');
INSERT INTO furniture VALUES ('1404', 'Ninja Penguin', 'penguin_ninja', 's', '1', '1', '1', '0', '0', '0', '2976', '1', '1', '1', '1', '1', 'default', '1', '0', '0');
INSERT INTO furniture VALUES ('1405', 'Magic Penguin', 'penguin_magician', 's', '1', '1', '1', '0', '0', '0', '2997', '1', '1', '1', '1', '1', 'default', '1', '0', '0');
INSERT INTO furniture VALUES ('1406', 'Beautiful Penguin', 'penguin_hunchback', 's', '1', '1', '1', '0', '0', '0', '3003', '1', '1', '1', '1', '1', 'default', '1', '0', '0');
INSERT INTO furniture VALUES ('1407', 'Cowboy Penguin', 'penguin_cowboy', 's', '1', '1', '1', '0', '0', '0', '2987', '1', '1', '1', '1', '1', 'default', '1', '0', '0');
INSERT INTO furniture VALUES ('1408', 'Punk Penguin', 'penguin_punk', 's', '1', '1', '1', '0', '0', '0', '3004', '1', '1', '1', '1', '1', 'default', '1', '0', '0');
INSERT INTO furniture VALUES ('1409', 'Pirate Penguin', 'penguin_pirate', 's', '1', '1', '1', '0', '0', '0', '2999', '1', '1', '1', '1', '1', 'default', '1', '0', '0');
INSERT INTO furniture VALUES ('1410', 'ads_ob_pillow name', 'ads_ob_pillow', 's', '1', '1', '1', '0', '1', '0', '3018', '1', '1', '1', '1', '1', 'default', '1', '0', '0');
INSERT INTO furniture VALUES ('1411', 'Leviathon', 'lostc_merdragon', 's', '1', '3', '1', '0', '0', '0', '3016', '1', '1', '1', '1', '1', 'default', '2', '0', '0');
INSERT INTO furniture VALUES ('1412', 'Idea Agency Desk', 'ads_cldesk', 's', '2', '2', '1', '0', '0', '0', '3017', '1', '1', '1', '1', '1', 'default', '1', '0', '0');
INSERT INTO furniture VALUES ('1413', 'Eco Friendly Penguin', 'xmas08_trph2', 's', '1', '1', '1', '0', '0', '0', '3015', '1', '1', '1', '1', '1', 'default', '1', '0', '0');
INSERT INTO furniture VALUES ('1414', 'Whatever your Idea', 'ads_cltele', 's', '1', '1', '0.001', '0', '0', '0', '3014', '1', '1', '0', '1', '1', 'teleport', '1', '0', '0');
INSERT INTO furniture VALUES ('1415', 'Childline Rug', 'ads_clfloor', 's', '3', '5', '0', '0', '0', '1', '3019', '1', '1', '1', '1', '1', 'default', '1', '0', '0');
INSERT INTO furniture VALUES ('1417', 'Mall tele-door', 'ads_mall_tele', 's', '1', '1', '0.001', '1', '0', '1', '3020', '1', '1', '0', '1', '1', 'teleport', '1', '0', '0');
INSERT INTO furniture VALUES ('1418', 'Moongate', 'china_moongt', 's', '1', '3', '0.001', '0', '0', '1', '3024', '1', '1', '1', '1', '1', 'gate', '2', '0', '0');
INSERT INTO furniture VALUES ('1419', 'Lotus Pool', 'bolly_lotus_pool', 's', '2', '2', '0', '0', '0', '0', '3022', '1', '1', '1', '1', '1', 'default', '3', '0', '0');
INSERT INTO furniture VALUES ('1420', 'Ox Statue', 'china_ox', 's', '1', '1', '1', '0', '0', '0', '3025', '1', '1', '1', '1', '1', 'default', '1', '0', '0');
INSERT INTO furniture VALUES ('1422', 'Petal Flurry', 'bolly_petals', 's', '2', '2', '0', '1', '0', '1', '3026', '1', '1', '1', '1', '1', 'default', '3', '0', '0');
INSERT INTO furniture VALUES ('1423', 'Palm Tree', 'bolly_tree', 's', '1', '1', '1', '0', '0', '0', '3042', '1', '1', '1', '1', '1', 'default', '2', '0', '0');
INSERT INTO furniture VALUES ('1424', 'Swing low', 'bolly_swing', 's', '2', '1', '1.5', '0', '1', '0', '3037', '1', '1', '1', '1', '1', 'default', '1', '0', '0');
INSERT INTO furniture VALUES ('1425', 'Star Pillow', 'bolly_pillow', 's', '1', '1', '0.8', '0', '1', '0', '3030', '1', '1', '1', '1', '1', 'default', '1', '0', '0');
INSERT INTO furniture VALUES ('1426', 'Bollywood Corner', 'bolly_corner', 's', '1', '1', '1', '1', '0', '0', '3031', '1', '1', '1', '1', '1', 'default', '1', '0', '0');
INSERT INTO furniture VALUES ('1427', 'Elephant MiniBar', 'bolly_phant', 's', '1', '1', '1', '0', '0', '0', '3033', '1', '1', '1', '1', '1', 'vendingmachine', '0', '35', '0');
INSERT INTO furniture VALUES ('1428', 'Monkey Lamp', 'bolly_monkey_lamp', 's', '1', '1', '1', '0', '0', '0', '3036', '1', '1', '1', '1', '1', 'default', '2', '0', '0');
INSERT INTO furniture VALUES ('1429', 'Green Curtain', 'bolly_drapeb', 's', '3', '1', '0.001', '0', '0', '0', '3040', '1', '1', '1', '1', '1', 'gate', '2', '0', '0');
INSERT INTO furniture VALUES ('1430', 'Planet of Love', 'planet_of_love', 's', '1', '1', '1', '1', '0', '0', '3044', '1', '1', '1', '1', '1', 'default', '1', '0', '0');
INSERT INTO furniture VALUES ('1431', 'Chandelier', 'bolly_lamp', 's', '1', '1', '1', '0', '0', '0', '3041', '1', '1', '1', '1', '1', 'default', '1', '0', '0');
INSERT INTO furniture VALUES ('1432', 'Bollywood Desk', 'bolly_desk', 's', '2', '1', '1', '1', '0', '0', '3034', '1', '1', '1', '1', '1', 'default', '1', '0', '0');
INSERT INTO furniture VALUES ('1433', 'Vase of Flowers', 'bolly_vase', 's', '1', '1', '1', '0', '0', '0', '3043', '1', '1', '1', '1', '1', 'default', '1', '0', '0');
INSERT INTO furniture VALUES ('1434', 'Standard Tile', 'bolly_tile2', 's', '2', '2', '0', '1', '0', '1', '3027', '1', '1', '1', '1', '1', 'default', '1', '0', '0');
INSERT INTO furniture VALUES ('1435', 'Large Ornamental Table', 'bolly_table', 's', '2', '2', '1', '1', '0', '0', '3035', '1', '1', '1', '1', '1', 'default', '1', '0', '0');
INSERT INTO furniture VALUES ('1436', 'Yellow Curtain', 'bolly_drapec', 's', '3', '1', '0.001', '0', '0', '0', '3032', '1', '1', '1', '1', '1', 'gate', '2', '0', '0');
INSERT INTO furniture VALUES ('1437', 'Extravagant Fountain', 'bolly_fountain', 's', '2', '2', '1', '0', '0', '0', '3029', '1', '1', '1', '1', '1', 'default', '2', '0', '0');
INSERT INTO furniture VALUES ('20046', 'Executive Teleport', 'exe_elevator', 's', '1', '1', '0.001', '0', '0', '0', '3305', '1', '1', '0', '1', '1', 'teleport', '1', '0', '0');
INSERT INTO furniture VALUES ('1439', 'Ornamental Tile', 'bolly_tile1', 's', '2', '2', '0', '1', '0', '1', '3028', '1', '1', '1', '1', '1', 'default', '1', '0', '0');
INSERT INTO furniture VALUES ('1440', 'Pink Curtain', 'bolly_drapea', 's', '3', '1', '0.001', '0', '0', '0', '3038', '1', '1', '1', '1', '1', 'gate', '2', '0', '0');
INSERT INTO furniture VALUES ('1441', 'ads_idol_floor1 name', 'ads_idol_floor1', 's', '2', '2', '0', '0', '0', '1', '3045', '1', '1', '1', '1', '1', 'default', '1', '0', '0');
INSERT INTO furniture VALUES ('1442', 'Inventor\'s Desk', 'ads_igor_dsk', 's', '2', '1', '1', '0', '0', '0', '3049', '1', '1', '1', '1', '1', 'default', '2', '0', '0');
INSERT INTO furniture VALUES ('1443', 'ads_idol_desk', 'ads_idol_desk', 's', '1', '4', '1', '0', '0', '0', '3050', '1', '1', '1', '1', '1', 'default', '1', '0', '0');
INSERT INTO furniture VALUES ('1444', 'ads_idol_ch', 'ads_idol_ch', 's', '1', '1', '1.2', '0', '1', '0', '3051', '1', '1', '1', '1', '1', 'default', '1', '0', '0');
INSERT INTO furniture VALUES ('1445', 'Glass Flask', 'ads_igor_flask', 's', '1', '1', '1', '0', '0', '0', '3046', '1', '1', '1', '1', '1', 'default', '2', '0', '0');
INSERT INTO furniture VALUES ('1446', 'ads_idol_drape name', 'ads_idol_drape', 's', '3', '1', '0.001', '0', '0', '0', '3048', '1', '1', '1', '1', '1', 'gate', '2', '0', '0');
INSERT INTO furniture VALUES ('1447', 'ads_idol_floor2 name', 'ads_idol_floor2', 's', '2', '2', '0', '0', '0', '1', '3047', '1', '1', '1', '1', '1', 'default', '1', '0', '0');
INSERT INTO furniture VALUES ('1448', 'Kraken', 'lostc_octopus', 's', '1', '2', '1', '0', '0', '0', '3052', '1', '1', '1', '1', '1', 'default', '2', '0', '0');
INSERT INTO furniture VALUES ('1449', 'Marble Floor Tile', 'lc_tile1', 's', '2', '2', '0', '1', '0', '1', '3076', '1', '1', '1', '1', '1', 'default', '1', '0', '0');
INSERT INTO furniture VALUES ('1450', 'Small Jellyfish Lamp', 'lc_medusa2', 's', '1', '1', '1', '0', '0', '0', '3073', '1', '1', '1', '1', '1', 'default', '1', '0', '0');
INSERT INTO furniture VALUES ('1451', 'Sally Lightfoot', 'lc_crab2', 's', '1', '1', '1', '0', '0', '0', '3068', '1', '1', '1', '1', '1', 'default', '1', '0', '0');
INSERT INTO furniture VALUES ('1452', 'March Collectable 2009', 'lostc_teleport', 's', '1', '1', '0.001', '0', '0', '1', '3071', '1', '1', '0', '1', '1', 'teleport', '1', '0', '0');
INSERT INTO furniture VALUES ('1453', 'ads_idol_piano name', 'ads_idol_piano', 's', '2', '2', '1', '0', '0', '0', '3058', '1', '1', '1', '1', '1', 'default', '1', '0', '0');
INSERT INTO furniture VALUES ('1454', 'Large Coral Divider', 'lc_coral_divider_hi', 's', '2', '1', '1', '0', '0', '0', '3078', '1', '1', '1', '1', '1', 'default', '1', '0', '0');
INSERT INTO furniture VALUES ('1455', 'ads_711shelf name', 'ads_711shelf', 's', '1', '2', '1', '0', '0', '0', '3066', '1', '1', '1', '1', '1', 'vendingmachine', '0', '19', '0');
INSERT INTO furniture VALUES ('1456', 'Water Tube Corner', 'lc_tubes_corners', 's', '1', '1', '1', '0', '0', '0', '3072', '1', '1', '1', '1', '1', 'default', '1', '0', '0');
INSERT INTO furniture VALUES ('1457', 'Captain\'s Table', 'lc_table', 's', '2', '2', '1', '1', '0', '0', '3067', '1', '1', '1', '1', '1', 'default', '1', '0', '0');
INSERT INTO furniture VALUES ('1458', 'Cobbled Stones', 'lc_tile2', 's', '2', '2', '0', '1', '0', '1', '3069', '1', '1', '1', '1', '1', 'default', '1', '0', '0');
INSERT INTO furniture VALUES ('1459', 'Anemone', 'lc_anemone', 's', '1', '1', '1', '0', '0', '0', '3074', '1', '1', '1', '1', '1', 'default', '4', '0', '0');
INSERT INTO furniture VALUES ('1460', 'Small Coral Divider', 'lc_coral_divider_low', 's', '2', '1', '1', '0', '0', '0', '3077', '1', '1', '1', '1', '1', 'default', '1', '0', '0');
INSERT INTO furniture VALUES ('1461', 'Ocean Window Rug', 'lc_glass_floor', 's', '2', '3', '0', '0', '0', '1', '3060', '1', '1', '1', '1', '1', 'default', '1', '0', '0');
INSERT INTO furniture VALUES ('1462', 'Large Jellyfish Lamp', 'lc_medusa1', 's', '1', '1', '1', '0', '0', '0', '3064', '1', '1', '1', '1', '1', 'default', '1', '0', '0');
INSERT INTO furniture VALUES ('1463', 'Crab Patch', 'lc_crab1', 's', '2', '2', '1', '0', '0', '0', '3062', '1', '1', '1', '1', '1', 'default', '1', '0', '0');
INSERT INTO furniture VALUES ('1464', 'ads_idol_jukebox name', 'ads_idol_jukebox*1', 's', '1', '1', '1', '0', '0', '0', '3059', '1', '1', '1', '1', '1', 'default', '1', '0', '0');
INSERT INTO furniture VALUES ('1465', 'ads_idol_pchair name', 'ads_idol_pchair', 's', '1', '1', '1', '0', '1', '0', '3056', '1', '1', '1', '1', '1', 'default', '1', '0', '0');
INSERT INTO furniture VALUES ('1466', 'Water Tube Straight', 'lc_tubes_straight', 's', '1', '1', '1', '0', '0', '0', '3065', '1', '1', '1', '1', '1', 'default', '1', '0', '0');
INSERT INTO furniture VALUES ('1467', 'ads_idol_audChr name', 'ads_idol_audChr', 's', '1', '1', '1', '0', '1', '0', '3057', '1', '1', '1', '1', '1', 'default', '1', '0', '0');
INSERT INTO furniture VALUES ('1468', 'ads_idol_trax name', 'ads_idol_trax', 's', '1', '1', '1', '0', '0', '0', '3055', '1', '1', '1', '1', '1', 'default', '1', '0', '0');
INSERT INTO furniture VALUES ('1469', 'ads_idol_tele', 'ads_idol_tele', 's', '1', '1', '0.001', '0', '0', '1', '3053', '1', '1', '0', '1', '1', 'teleport', '1', '0', '0');
INSERT INTO furniture VALUES ('1470', 'Wooden Corner', 'lc_corner', 's', '1', '1', '1', '1', '0', '0', '3075', '1', '1', '1', '1', '1', 'default', '1', '0', '0');
INSERT INTO furniture VALUES ('1471', 'Wooden Stool', 'lc_stool', 's', '1', '1', '1', '0', '1', '0', '3063', '1', '1', '1', '1', '1', 'default', '1', '0', '0');
INSERT INTO furniture VALUES ('1472', 'No rusty nails', 'lc_chair', 's', '1', '1', '1', '0', '1', '0', '3061', '1', '1', '1', '1', '1', 'default', '1', '0', '0');
INSERT INTO furniture VALUES ('1473', 'Wooden Bar Desk', 'lc_desk', 's', '2', '1', '1', '1', '0', '0', '3070', '1', '1', '1', '1', '1', 'default', '1', '0', '0');
INSERT INTO furniture VALUES ('1474', 'ads_idol_mic name', 'ads_idol_mic', 's', '1', '1', '1', '0', '0', '0', '3054', '1', '1', '1', '1', '1', 'default', '1', '0', '0');
INSERT INTO furniture VALUES ('1475', 'ads_idol_hotspot name', 'ads_idol_hotspot', 's', '1', '1', '0.2', '0', '0', '1', '3080', '1', '1', '1', '1', '1', 'default', '103', '0', '0');
INSERT INTO furniture VALUES ('1476', 'ads_idol_clRack name', 'ads_idol_clRack', 's', '3', '1', '1', '0', '0', '0', '3079', '1', '1', '1', '1', '1', 'default', '1', '0', '0');
INSERT INTO furniture VALUES ('1477', 'ads_idol_voting_ch name', 'ads_idol_voting_ch', 's', '1', '1', '1.2', '0', '1', '0', '3081', '1', '1', '1', '1', '1', 'default', '1', '0', '0');
INSERT INTO furniture VALUES ('1478', 'Ecotron prize', 'ecotron_box', 's', '1', '1', '1', '1', '0', '0', '3095', '0', '1', '1', '1', '1', 'default', '1', '0', '0');
INSERT INTO furniture VALUES ('1479', 'Eco Light 2', 'eco_light2', 's', '1', '1', '1', '1', '0', '0', '3082', '0', '1', '1', '1', '1', 'default', '2', '0', '0');
INSERT INTO furniture VALUES ('1480', 'Eco Stool 3', 'eco_chair3', 's', '1', '1', '1', '0', '1', '0', '3094', '0', '1', '1', '1', '1', 'default', '1', '0', '0');
INSERT INTO furniture VALUES ('1481', 'Eco Coffee Table 3', 'eco_table3', 's', '2', '2', '1', '1', '0', '0', '3086', '0', '1', '1', '1', '1', 'default', '1', '0', '0');
INSERT INTO furniture VALUES ('1482', 'Eco Lamp 2', 'eco_lamp2', 's', '1', '1', '1', '1', '0', '0', '3092', '0', '1', '1', '1', '1', 'default', '2', '0', '0');
INSERT INTO furniture VALUES ('1483', 'Eco Armchair 3', 'eco_sofa3', 's', '1', '1', '1', '0', '1', '0', '3088', '0', '1', '1', '1', '1', 'default', '1', '0', '0');
INSERT INTO furniture VALUES ('1484', 'Eco Coffee Table 2', 'eco_table2', 's', '2', '2', '1', '1', '0', '0', '3089', '0', '1', '1', '1', '1', 'default', '1', '0', '0');
INSERT INTO furniture VALUES ('1485', 'Fruit Bowl 2', 'eco_fruits2', 's', '1', '1', '1', '1', '0', '0', '3102', '0', '1', '1', '1', '1', 'default', '1', '0', '0');
INSERT INTO furniture VALUES ('1486', 'Eco Armchair 1', 'eco_sofa1', 's', '1', '1', '1', '0', '1', '0', '3096', '0', '1', '1', '1', '1', 'default', '1', '0', '0');
INSERT INTO furniture VALUES ('1487', 'Fruit Bowl 3', 'eco_fruits3', 's', '1', '1', '1', '1', '0', '0', '3104', '0', '1', '1', '1', '1', 'default', '1', '0', '0');
INSERT INTO furniture VALUES ('1488', 'Eco Light 1', 'eco_light1', 's', '1', '1', '1', '1', '0', '0', '3098', '0', '1', '1', '1', '1', 'default', '2', '0', '0');
INSERT INTO furniture VALUES ('1489', 'Actually', 'eco_tree1', 's', '1', '1', '1', '0', '0', '0', '3093', '0', '1', '1', '1', '1', 'default', '1', '0', '0');
INSERT INTO furniture VALUES ('1490', 'Potted Cactus 2', 'eco_cactus2', 's', '1', '1', '1', '1', '0', '0', '3105', '0', '1', '1', '1', '1', 'default', '1', '0', '0');
INSERT INTO furniture VALUES ('1491', 'Talk To FRANK Brain Lamp', 'ads_frankb', 's', '1', '1', '1', '0', '0', '0', '3111', '1', '1', '1', '1', '1', 'default', '1', '0', '0');
INSERT INTO furniture VALUES ('1492', 'Road Signs', 'bump_signs', 's', '1', '1', '1', '0', '0', '0', '3090', '1', '1', '1', '0', '1', 'default', '7', '0', '0');
INSERT INTO furniture VALUES ('1493', 'Potted Cactus 1', 'eco_cactus1', 's', '1', '1', '1', '1', '0', '0', '3083', '0', '1', '1', '1', '1', 'default', '1', '0', '0');
INSERT INTO furniture VALUES ('1494', 'Eco Stool 2', 'eco_chair2', 's', '1', '1', '1', '0', '1', '0', '3106', '0', '1', '1', '1', '1', 'default', '1', '0', '0');
INSERT INTO furniture VALUES ('1495', 'Potted Cactus 3', 'eco_cactus3', 's', '1', '1', '1', '1', '0', '0', '3085', '0', '1', '1', '1', '1', 'default', '1', '0', '0');
INSERT INTO furniture VALUES ('1496', 'Bumper Tyres', 'bump_tires', 's', '1', '1', '0.8', '1', '0', '0', '3101', '1', '1', '1', '0', '1', 'default', '3', '0', '0');
INSERT INTO furniture VALUES ('1497', 'Traffic Lights', 'bump_lights', 's', '1', '1', '1', '0', '0', '0', '3103', '1', '1', '1', '0', '1', 'default', '3', '0', '0');
INSERT INTO furniture VALUES ('1498', 'Eco Lamp 3', 'eco_lamp3', 's', '1', '1', '1', '1', '0', '0', '3091', '0', '1', '1', '1', '1', 'default', '2', '0', '0');
INSERT INTO furniture VALUES ('1499', 'Eco Coffee Table 1', 'eco_table1', 's', '2', '2', '1', '1', '0', '0', '3099', '0', '1', '1', '1', '1', 'default', '1', '0', '0');
INSERT INTO furniture VALUES ('1500', 'Eco Stool 1', 'eco_chair1', 's', '1', '1', '1', '0', '1', '0', '3084', '0', '1', '1', '1', '1', 'default', '1', '0', '0');
INSERT INTO furniture VALUES ('1501', 'Eco Armchair 2', 'eco_sofa2', 's', '1', '1', '1', '0', '1', '0', '3100', '0', '1', '1', '1', '1', 'default', '1', '0', '0');
INSERT INTO furniture VALUES ('1502', 'Road', 'bump_road', 's', '2', '2', '0', '1', '0', '1', '3110', '1', '1', '1', '0', '1', 'default', '4', '0', '0');
INSERT INTO furniture VALUES ('1503', 'Fruit Bowl 1', 'eco_fruits1', 's', '1', '1', '1', '1', '0', '0', '3107', '0', '1', '1', '1', '1', 'default', '1', '0', '0');
INSERT INTO furniture VALUES ('1504', 'Eco Lamp 1', 'eco_lamp1', 's', '1', '1', '1', '1', '0', '0', '3097', '0', '1', '1', '1', '1', 'default', '2', '0', '0');
INSERT INTO furniture VALUES ('1505', 'Eco Light 3', 'eco_light3', 's', '1', '1', '1', '1', '0', '0', '3108', '0', '1', '1', '1', '1', 'default', '2', '0', '0');
INSERT INTO furniture VALUES ('1506', 'Pear Tree', 'eco_tree2', 's', '1', '1', '1', '0', '0', '0', '3109', '0', '1', '1', '1', '1', 'default', '1', '0', '0');
INSERT INTO furniture VALUES ('1507', 'Totem Leg', 'totem_leg', 's', '1', '1', '1.2', '1', '0', '0', '3113', '1', '1', '1', '1', '1', 'default', '9', '0', '0');
INSERT INTO furniture VALUES ('1508', 'ads_grefusa_cactus name', 'ads_grefusa_cactus', 's', '1', '1', '1', '0', '0', '0', '3112', '1', '1', '1', '1', '1', 'default', '1', '0', '0');
INSERT INTO furniture VALUES ('1509', 'ads_idol_tube name', 'ads_idol_tube', 's', '1', '1', '1', '0', '0', '0', '3126', '1', '1', '1', '1', '1', 'default', '2', '0', '0');
INSERT INTO furniture VALUES ('1510', 'Executive Light', 'exe_light', 's', '1', '1', '0', '1', '0', '1', '3122', '1', '1', '1', '1', '1', 'default', '4', '0', '0');
INSERT INTO furniture VALUES ('1511', 'ads_idol_cork name', 'ads_idol_cork', 's', '3', '1', '1', '0', '0', '0', '3120', '1', '1', '1', '1', '1', 'default', '1', '0', '0');
INSERT INTO furniture VALUES ('1512', 'Idea Agency Jukebox', 'ads_cl_jukeb', 's', '1', '1', '1', '0', '0', '0', '3127', '1', '1', '1', '1', '1', 'default', '1', '0', '0');
INSERT INTO furniture VALUES ('1513', 'Grass patch', 'env_grass', 's', '2', '2', '0', '1', '0', '1', '3129', '1', '1', '1', '1', '1', 'default', '1', '0', '0');
INSERT INTO furniture VALUES ('1514', 'Forest Trunk Seat', 'env_tree3', 's', '1', '1', '1', '0', '0', '0', '3125', '1', '1', '1', '1', '1', 'default', '1', '0', '0');
INSERT INTO furniture VALUES ('1515', 'Eco Hedgerow', 'env_bushes', 's', '1', '2', '1', '0', '0', '0', '3115', '1', '1', '1', '1', '1', 'default', '1', '0', '0');
INSERT INTO furniture VALUES ('1516', 'Eco Hedgerows Gate', 'env_bushes_gate', 's', '1', '2', '0.001', '0', '0', '0', '3128', '1', '1', '1', '1', '1', 'gate', '2', '0', '0');
INSERT INTO furniture VALUES ('1517', 'Executive Gate', 'exe_gate', 's', '1', '1', '0.001', '0', '0', '0', '3119', '1', '1', '1', '1', '1', 'gate', '2', '0', '0');
INSERT INTO furniture VALUES ('1518', 'ads_idol_newsDsk name', 'ads_idol_newsDsk', 's', '2', '2', '1', '0', '0', '0', '3116', '1', '1', '1', '1', '1', 'default', '1', '0', '0');
INSERT INTO furniture VALUES ('1519', 'Forest Tree Chair', 'env_tree1', 's', '1', '1', '1', '0', '1', '0', '3117', '1', '1', '1', '1', '1', 'default', '1', '0', '0');
INSERT INTO furniture VALUES ('1520', 'Forest Tree Americana', 'env_tree2', 's', '1', '1', '1', '0', '1', '0', '3123', '1', '1', '1', '1', '1', 'default', '1', '0', '0');
INSERT INTO furniture VALUES ('1521', 'Cubist Light', 'exe_cubelight', 's', '1', '1', '1', '0', '0', '0', '3121', '1', '1', '1', '1', '1', 'default', '3', '0', '0');
INSERT INTO furniture VALUES ('1522', 'The Four Seasons Tree', 'env_tree4', 's', '2', '2', '1', '0', '0', '0', '3118', '1', '1', '1', '1', '1', 'default', '4', '0', '0');
INSERT INTO furniture VALUES ('1523', 'Sphere Lamp', 'exe_artlamp', 's', '1', '1', '1', '0', '0', '0', '3114', '1', '1', '1', '1', '1', 'default', '2', '0', '0');
INSERT INTO furniture VALUES ('1524', 'ads_idol_ichair name', 'ads_idol_ichair', 's', '1', '1', '1.4', '0', '1', '0', '3124', '1', '1', '1', '1', '1', 'default', '2', '0', '0');
INSERT INTO furniture VALUES ('1525', 'Wedding Cake', 'tray_cake', 's', '1', '1', '1', '0', '0', '0', '3133', '1', '1', '1', '1', '1', 'default', '1', '0', '0');
INSERT INTO furniture VALUES ('1526', 'ads_reebok_block2', 'ads_reebok_block2', 's', '2', '2', '0.8', '1', '0', '1', '3132', '1', '1', '1', '1', '1', 'default', '1', '0', '0');
INSERT INTO furniture VALUES ('1527', 'ads_malaco_rug_name', 'ads_malaco_rug', 's', '3', '3', '0', '0', '0', '1', '3135', '1', '1', '1', '1', '1', 'default', '1', '0', '0');
INSERT INTO furniture VALUES ('1528', 'Champagne Bucket', 'tray_champagne', 's', '1', '1', '1', '0', '0', '0', '3134', '1', '1', '1', '1', '1', 'default', '1', '0', '0');
INSERT INTO furniture VALUES ('1529', 'Champagne Tower', 'tray_glasstower', 's', '1', '1', '1', '0', '0', '0', '3130', '1', '1', '1', '1', '1', 'vendingmachine', '0', '40', '0');
INSERT INTO furniture VALUES ('1530', 'ads_malaco_gu', 'ads_malaco_gu', 's', '1', '1', '1', '0', '0', '0', '3131', '1', '1', '1', '1', '1', 'default', '1', '0', '0');
INSERT INTO furniture VALUES ('1531', 'Idea Agency Super Cake', 'ads_clcake', 's', '1', '1', '1', '0', '0', '0', '3139', '1', '1', '1', '1', '1', 'default', '1', '0', '0');
INSERT INTO furniture VALUES ('1532', 'Idea Agency Sofa', 'ads_cl_sofa', 's', '2', '1', '1', '0', '1', '0', '3137', '1', '1', '1', '1', '1', 'default', '1', '0', '0');
INSERT INTO furniture VALUES ('1533', 'Function Table', 'ads_idol_tblCloth', 's', '2', '2', '1', '1', '0', '0', '3136', '1', '1', '1', '1', '1', 'default', '1', '0', '0');
INSERT INTO furniture VALUES ('1534', 'ads_idol_carpet name', 'ads_idol_carpet', 's', '2', '7', '0', '0', '0', '1', '3140', '1', '1', '1', '1', '1', 'default', '1', '0', '0');
INSERT INTO furniture VALUES ('1535', 'Function Lamp', 'ads_idol_lamp', 's', '1', '1', '0', '1', '0', '1', '3138', '1', '1', '1', '1', '1', 'default', '2', '0', '0');
INSERT INTO furniture VALUES ('1536', 'Rain Shower', 'country_rain', 's', '1', '1', '0', '1', '0', '1', '3153', '1', '1', '1', '1', '1', 'default', '2', '0', '0');
INSERT INTO furniture VALUES ('1537', 'Scarecrow', 'country_scarecrow', 's', '1', '1', '1', '0', '0', '0', '3160', '1', '1', '1', '1', '1', 'default', '3', '0', '0');
INSERT INTO furniture VALUES ('1538', 'Porta-House', 'env_telep', 's', '1', '1', '0.001', '0', '0', '0', '3161', '1', '1', '0', '1', '1', 'teleport', '1', '0', '0');
INSERT INTO furniture VALUES ('1539', 'Crop Field', 'country_soil', 's', '2', '2', '0', '1', '0', '1', '3145', '1', '1', '1', '1', '1', 'default', '4', '0', '0');
INSERT INTO furniture VALUES ('1540', 'Field Grass', 'country_grass', 's', '2', '2', '0', '1', '0', '1', '3162', '1', '1', '1', '1', '1', 'default', '3', '0', '0');
INSERT INTO furniture VALUES ('1541', 'The Golden Tablet', 'ads_goldtabl', 's', '1', '1', '1', '0', '0', '0', '3151', '1', '1', '1', '1', '1', 'default', '1', '0', '0');
INSERT INTO furniture VALUES ('1542', 'Witch Mushroom', 'eco_mush1', 's', '1', '1', '1', '1', '0', '0', '3142', '0', '1', '1', '1', '1', 'default', '1', '0', '0');
INSERT INTO furniture VALUES ('1543', 'Tractor', 'country_trctr', 's', '2', '2', '1', '0', '0', '0', '3147', '1', '1', '1', '1', '1', 'default', '2', '0', '0');
INSERT INTO furniture VALUES ('1544', 'Stone Wall', 'country_fnc2', 's', '2', '1', '1', '0', '0', '0', '3141', '1', '1', '1', '1', '1', 'default', '1', '0', '0');
INSERT INTO furniture VALUES ('1545', 'Stick Fence', 'country_fnc1', 's', '2', '1', '1', '0', '0', '0', '3154', '1', '1', '1', '1', '1', 'default', '1', '0', '0');
INSERT INTO furniture VALUES ('1546', 'Wishing Well', 'country_well', 's', '1', '1', '1', '0', '0', '0', '3149', '1', '1', '1', '1', '1', 'default', '2', '0', '0');
INSERT INTO furniture VALUES ('1547', 'Fairy Mushroom', 'eco_mush2', 's', '1', '1', '1', '1', '0', '0', '3155', '0', '1', '1', '1', '1', 'default', '1', '0', '0');
INSERT INTO furniture VALUES ('1548', 'Rainbow', 'country_rbw', 's', '1', '1', '1', '0', '0', '0', '3143', '1', '1', '1', '1', '1', 'default', '1', '0', '0');
INSERT INTO furniture VALUES ('1549', 'Golden Wheat', 'country_wheat', 's', '2', '2', '1', '0', '0', '0', '3163', '1', '1', '1', '1', '1', 'default', '1', '0', '0');
INSERT INTO furniture VALUES ('1550', 'Farm Gate', 'country_gate', 's', '2', '1', '0.001', '0', '0', '0', '3150', '1', '1', '1', '1', '1', 'gate', '2', '0', '0');
INSERT INTO furniture VALUES ('1551', 'Country Trax', 'sound_set_72', 's', '1', '1', '0.2', '1', '0', '0', '3144', '1', '1', '1', '1', '1', 'default', '1', '0', '0');
INSERT INTO furniture VALUES ('1552', 'Wooden Stage', 'country_stage', 's', '2', '2', '1', '1', '0', '1', '3148', '1', '1', '1', '1', '1', 'default', '1', '0', '0');
INSERT INTO furniture VALUES ('1553', 'ads_calip_cola_1 name', 'ads_calip_cola*1', 's', '1', '1', '1', '0', '0', '0', '3156', '1', '1', '1', '1', '1', 'vendingmachine', '0', '19', '0');
INSERT INTO furniture VALUES ('1554', 'ads_calip_cola_2 name', 'ads_calip_cola*2', 's', '1', '1', '1', '0', '0', '0', '3157', '1', '1', '1', '1', '1', 'vendingmachine', '0', '19', '0');
INSERT INTO furniture VALUES ('1555', 'ads_calip_cola_3 name', 'ads_calip_cola*3', 's', '1', '1', '1', '0', '0', '0', '3158', '1', '1', '1', '1', '1', 'vendingmachine', '0', '19', '0');
INSERT INTO furniture VALUES ('1556', 'ads_calip_cola_4 name', 'ads_calip_cola*4', 's', '1', '1', '1', '0', '0', '0', '3159', '1', '1', '1', '1', '1', 'vendingmachine', '0', '19', '0');
INSERT INTO furniture VALUES ('1557', 'Log Bench', 'country_log', 's', '2', '1', '1', '0', '1', '0', '3146', '1', '1', '1', '1', '1', 'default', '1', '0', '0');
INSERT INTO furniture VALUES ('1558', 'Stone Pile', 'country_fnc3', 's', '1', '1', '1', '0', '0', '0', '3152', '1', '1', '1', '1', '1', 'default', '1', '0', '0');
INSERT INTO furniture VALUES ('1559', 'Wooden Patio Tile', 'country_patio', 's', '1', '1', '1', '0', '0', '0', '3166', '1', '1', '1', '1', '1', 'default', '1', '0', '0');
INSERT INTO furniture VALUES ('1560', 'Country Ditch Corner', 'country_corner', 's', '1', '1', '1', '0', '0', '0', '3164', '1', '1', '1', '1', '1', 'default', '1', '0', '0');
INSERT INTO furniture VALUES ('1561', 'Country Ditch', 'country_ditch', 's', '1', '2', '0.001', '0', '0', '0', '3165', '1', '1', '1', '1', '1', 'gate', '2', '0', '0');
INSERT INTO furniture VALUES ('1562', 'ads_calip_chair name', 'ads_calip_chair', 's', '1', '1', '1', '0', '1', '0', '3168', '1', '1', '1', '1', '1', 'default', '1', '0', '0');
INSERT INTO furniture VALUES ('1563', 'ads_idol_trophy name', 'ads_idol_trophy', 's', '1', '1', '1', '0', '0', '0', '3169', '1', '1', '1', '1', '0', 'trophy', '1', '0', '0');
INSERT INTO furniture VALUES ('1564', 'Totem Spirit Head', 'totem_head', 's', '1', '1', '1.7', '1', '0', '0', '3167', '1', '1', '1', '1', '1', 'default', '10', '0', '0');
INSERT INTO furniture VALUES ('1565', 'ads_calip_pool name', 'ads_calip_pool', 's', '2', '2', '0', '0', '0', '1', '3182', '1', '1', '1', '1', '1', 'default', '1', '0', '0');
INSERT INTO furniture VALUES ('1566', 'laptopdesk name', 'laptopdesk', 's', '2', '2', '1', '0', '0', '0', '3173', '1', '1', '1', '1', '1', 'default', '1', '0', '0');
INSERT INTO furniture VALUES ('1567', 'Skull', 'LT_skull', 's', '1', '1', '1', '0', '0', '0', '3189', '1', '1', '1', '1', '1', 'default', '1', '0', '0');
INSERT INTO furniture VALUES ('1568', 'Large Tribal Block', 'lt_stage2', 's', '2', '2', '0.9', '1', '0', '1', '3175', '1', '1', '1', '1', '1', 'default', '1', '0', '0');
INSERT INTO furniture VALUES ('1569', 'Lava Corner', 'lt_lavac', 's', '1', '1', '1', '0', '0', '0', '3180', '1', '1', '1', '1', '1', 'default', '1', '0', '0');
INSERT INTO furniture VALUES ('1570', 'Tribal Gate', 'lt_gate', 's', '2', '1', '0.001', '0', '0', '0', '3172', '1', '1', '1', '1', '1', 'gate', '2', '0', '0');
INSERT INTO furniture VALUES ('1571', 'Planet of Eternity', 'saturn', 's', '1', '1', '1', '1', '0', '0', '3181', '1', '1', '1', '1', '1', 'default', '1', '0', '0');
INSERT INTO furniture VALUES ('1572', 'ads_calip_tele name', 'ads_calip_tele', 's', '1', '1', '0.001', '0', '0', '0', '3190', '1', '1', '0', '1', '1', 'teleport', '1', '0', '0');
INSERT INTO furniture VALUES ('1573', 'Stone Statue', 'lt_statue', 's', '1', '1', '1', '0', '0', '0', '3185', '1', '1', '1', '1', '1', 'default', '2', '0', '0');
INSERT INTO furniture VALUES ('1574', 'Tarantula', 'lt_spider', 's', '1', '1', '1', '0', '0', '0', '3178', '1', '1', '1', '1', '1', 'default', '1', '0', '0');
INSERT INTO furniture VALUES ('1575', 'Tribal Stone Wall', 'lt_stone2', 's', '2', '1', '1.2', '1', '0', '0', '3177', '1', '1', '1', '1', '1', 'default', '1', '0', '0');
INSERT INTO furniture VALUES ('1576', 'Tribal Seat', 'LT_throne', 's', '1', '1', '1.5', '0', '1', '0', '3171', '1', '1', '1', '1', '1', 'default', '2', '0', '0');
INSERT INTO furniture VALUES ('1577', 'audChr name', 'audChr', 's', '1', '1', '1', '0', '1', '0', '3179', '1', '1', '1', '1', '1', 'default', '1', '0', '0');
INSERT INTO furniture VALUES ('1578', 'Moss Patch', 'lt_patch', 's', '2', '2', '0', '1', '0', '1', '3188', '1', '1', '1', '1', '1', 'default', '1', '0', '0');
INSERT INTO furniture VALUES ('1579', 'Lava Ditch', 'lt_lava', 's', '1', '2', '1', '0', '0', '0', '3176', '1', '1', '1', '1', '1', 'default', '1', '0', '0');
INSERT INTO furniture VALUES ('1580', 'Small Tribal Torch', 'LT_pillar2', 's', '1', '1', '1', '0', '0', '0', '3170', '1', '1', '1', '1', '1', 'default', '2', '0', '0');
INSERT INTO furniture VALUES ('1581', 'Ant Hill', 'lt_bughill', 's', '1', '1', '1', '0', '0', '0', '3174', '1', '1', '1', '1', '1', 'default', '2', '0', '0');
INSERT INTO furniture VALUES ('1582', 'noticeboard name', 'noticeboard', 's', '3', '1', '1', '0', '0', '0', '3186', '1', '1', '1', '1', '1', 'default', '1', '0', '0');
INSERT INTO furniture VALUES ('1583', 'clrack name', 'clrack', 's', '3', '1', '0', '1', '0', '0', '3184', '1', '1', '1', '1', '1', 'default', '1', '0', '0');
INSERT INTO furniture VALUES ('1584', 'Large Tribal Torch', 'LT_pillar', 's', '1', '1', '1', '0', '0', '0', '3187', '1', '1', '1', '1', '1', 'default', '2', '0', '0');
INSERT INTO furniture VALUES ('1585', 'Small Tribal Block', 'lt_stage1', 's', '1', '1', '0.9', '1', '0', '1', '3183', '1', '1', '1', '1', '1', 'default', '1', '0', '0');
INSERT INTO furniture VALUES ('1586', 'transparent_floor name', 'transparent_floor', 's', '2', '2', '0', '1', '0', '1', '3199', '1', '1', '1', '1', '1', 'default', '1', '0', '0');
INSERT INTO furniture VALUES ('1587', 'ads_calip_lava name', 'ads_calip_lava', 's', '1', '1', '1', '0', '0', '0', '3197', '1', '1', '1', '1', '1', 'default', '1', '0', '0');
INSERT INTO furniture VALUES ('1588', 'Tribal Stone Corner', 'lt_stone1', 's', '1', '1', '1.2', '1', '0', '0', '3196', '1', '1', '1', '1', '1', 'default', '1', '0', '0');
INSERT INTO furniture VALUES ('1589', 'ads_calip_fan', 'ads_calip_fan', 's', '1', '1', '1', '0', '0', '0', '3198', '1', '1', '1', '1', '1', 'default', '2', '0', '0');
INSERT INTO furniture VALUES ('1590', 'voting_ch name', 'voting_ch', 's', '1', '1', '1.3', '0', '1', '0', '3201', '1', '1', '1', '1', '1', 'default', '1', '0', '0');
INSERT INTO furniture VALUES ('1591', 'Quick Coffee Stop', 'ads_mall_coffeem', 's', '1', '1', '1', '0', '0', '0', '3202', '1', '1', '1', '1', '1', 'vendingmachine', '0', '41', '0');
INSERT INTO furniture VALUES ('1592', 'Totem Planet', 'totem_planet', 's', '1', '1', '1', '0', '0', '0', '3200', '1', '1', '1', '1', '1', 'default', '3', '0', '0');
INSERT INTO furniture VALUES ('1593', 'Don\'t worry', 'SF_reactor', 's', '1', '1', '1', '1', '0', '0', '3212', '1', '1', '1', '1', '1', 'default', '2', '0', '0');
INSERT INTO furniture VALUES ('1594', 'Pack all you want', 'SF_crate_2', 's', '2', '1', '1', '1', '0', '0', '3204', '1', '1', '1', '1', '1', 'default', '2', '0', '0');
INSERT INTO furniture VALUES ('1595', 'Space Crew Chair', 'SF_chair_blue', 's', '1', '1', '1.2', '0', '1', '0', '3207', '1', '1', '1', '1', '1', 'default', '1', '0', '0');
INSERT INTO furniture VALUES ('1596', 'Cryogenic Bed', 'sf_pod', 's', '1', '3', '1.36', '0', '0', '0', '3219', '1', '1', '1', '1', '1', 'bed', '2', '0', '0');
INSERT INTO furniture VALUES ('1597', 'Command Console', 'SF_panel1', 's', '1', '1', '1', '0', '0', '0', '3217', '1', '1', '1', '1', '1', 'default', '3', '0', '0');
INSERT INTO furniture VALUES ('1598', 'Starship Table', 'SF_table', 's', '2', '2', '1', '1', '0', '0', '3220', '1', '1', '1', '1', '1', 'default', '2', '0', '0');
INSERT INTO furniture VALUES ('1599', 'Welcome aboard', 'SF_chair_green', 's', '1', '1', '1.2', '0', '1', '0', '3215', '1', '1', '1', '1', '1', 'default', '1', '0', '0');
INSERT INTO furniture VALUES ('1600', 'Small Crate', 'SF_crate_1', 's', '1', '1', '1', '1', '0', '0', '3205', '1', '1', '1', '1', '1', 'default', '2', '0', '0');
INSERT INTO furniture VALUES ('1601', 'Alien Lifeform', 'SF_alien', 's', '1', '1', '1', '0', '0', '0', '3210', '1', '1', '1', '1', '1', 'default', '2', '0', '0');
INSERT INTO furniture VALUES ('1602', 'Engineering Console', 'SF_panel2', 's', '2', '1', '1', '0', '0', '0', '3218', '1', '1', '1', '1', '1', 'default', '2', '0', '0');
INSERT INTO furniture VALUES ('1603', 'Display Gate', 'sf_gate', 's', '2', '1', '0.001', '0', '0', '0', '3221', '1', '1', '1', '1', '1', 'gate', '2', '0', '0');
INSERT INTO furniture VALUES ('1604', 'Navigation Panel', 'SF_panel3', 's', '1', '1', '1', '0', '0', '0', '3208', '1', '1', '1', '1', '1', 'default', '3', '0', '0');
INSERT INTO furniture VALUES ('1605', 'Starship Floor 2', 'SF_floor_2', 's', '2', '2', '0', '1', '0', '1', '3211', '1', '1', '1', '1', '1', 'default', '1', '0', '0');
INSERT INTO furniture VALUES ('1606', 'Sci Fi Lamp', 'SF_lamp', 's', '1', '1', '1', '0', '0', '0', '3224', '1', '1', '1', '1', '1', 'default', '2', '0', '0');
INSERT INTO furniture VALUES ('1607', 'Captain\'s Chair', 'SF_chair_red', 's', '1', '1', '1.2', '0', '1', '0', '3223', '1', '1', '1', '1', '1', 'default', '1', '0', '0');
INSERT INTO furniture VALUES ('1608', 'Transparent Floor', 'sf_floor', 's', '2', '4', '0', '1', '0', '1', '3213', '1', '1', '1', '1', '1', 'default', '2', '0', '0');
INSERT INTO furniture VALUES ('1609', 'Starship Roof', 'sf_roof', 's', '2', '4', '0', '1', '0', '1', '3203', '1', '1', '1', '1', '1', 'default', '2', '0', '0');
INSERT INTO furniture VALUES ('1610', 'Light Pole', 'sf_stick', 's', '1', '1', '1', '0', '0', '0', '3206', '1', '1', '1', '1', '1', 'default', '5', '0', '0');
INSERT INTO furniture VALUES ('1611', 'Starship Floor 1', 'SF_floor_1', 's', '2', '2', '0', '1', '0', '1', '3222', '1', '1', '1', '1', '1', 'default', '1', '0', '0');
INSERT INTO furniture VALUES ('1612', ' sweets', 'ads_mall_kiosk', 's', '1', '2', '1', '0', '0', '0', '3216', '1', '1', '1', '1', '1', 'default', '1', '0', '0');
INSERT INTO furniture VALUES ('1613', 'Futuristic Teleport', 'sf_tele', 's', '1', '1', '0.001', '0', '0', '0', '3214', '1', '1', '0', '1', '1', 'teleport', '1', '0', '0');
INSERT INTO furniture VALUES ('1614', 'Sci Fi Roller', 'sf_roller', 's', '1', '1', '0.5', '1', '0', '1', '3209', '1', '1', '1', '1', '1', 'roller', '1', '0', '0');
INSERT INTO furniture VALUES ('1615', 'Hot Trophy', 'prizetrophy_hot', 's', '1', '1', '1', '0', '0', '0', '3229', '1', '1', '1', '1', '0', 'trophy', '1', '0', '0');
INSERT INTO furniture VALUES ('1616', 'Pink Inflatable Raft', 'summer_raft1', 's', '1', '1', '1', '0', '1', '0', '3228', '1', '1', '1', '1', '1', 'default', '1', '0', '0');
INSERT INTO furniture VALUES ('1617', 'Cool Trophy', 'prizetrophy_cool', 's', '1', '1', '1', '0', '0', '0', '3225', '1', '1', '1', '1', '0', 'trophy', '1', '0', '0');
INSERT INTO furniture VALUES ('1618', 'Blue Inflatable Raft', 'summer_raft2', 's', '1', '1', '1', '0', '1', '0', '3227', '1', '1', '1', '1', '1', 'default', '1', '0', '0');
INSERT INTO furniture VALUES ('1619', 'ads_elisa_gnome name', 'ads_elisa_gnome', 's', '1', '1', '1', '0', '0', '0', '3226', '1', '1', '1', '1', '1', 'default', '2', '0', '0');
INSERT INTO furniture VALUES ('1620', 'Summer Cool Box', 'summer_icebox', 's', '1', '1', '1', '0', '0', '0', '3231', '1', '1', '1', '1', '1', 'default', '2', '0', '0');
INSERT INTO furniture VALUES ('1621', 'ads_oc_soda', 'ads_oc_soda', 's', '1', '1', '1', '0', '0', '0', '3230', '1', '1', '1', '1', '1', 'vendingmachine', '0', '19', '0');
INSERT INTO furniture VALUES ('1622', 'Mars Patch', 'marsrug', 's', '2', '2', '0', '1', '0', '1', '3232', '1', '1', '1', '1', '1', 'default', '5', '0', '0');
INSERT INTO furniture VALUES ('1623', 'White Candle', 'rela_candle1', 's', '1', '1', '1', '0', '0', '0', '3238', '1', '1', '1', '1', '1', 'default', '2', '0', '0');
INSERT INTO furniture VALUES ('20066', 'Dead Tree', 'tree2', 's', '1', '1', '1', '0', '0', '0', '2104', '1', '1', '1', '1', '1', 'default', '1', '0', '0');
INSERT INTO furniture VALUES ('1625', 'Red Candles', 'rela_candles2', 's', '1', '1', '1', '0', '0', '0', '3245', '1', '1', '1', '1', '1', 'default', '2', '0', '0');
INSERT INTO furniture VALUES ('1626', 'Stones', 'rela_stone', 's', '1', '1', '0.5', '0', '0', '1', '3233', '1', '1', '1', '1', '1', 'default', '1', '0', '0');
INSERT INTO furniture VALUES ('1627', 'Wicker Chair', 'rela_hchair', 's', '1', '1', '1.3', '0', '1', '0', '3247', '1', '1', '1', '1', '1', 'default', '1', '0', '0');
INSERT INTO furniture VALUES ('1628', 'Red Candle', 'rela_candle2', 's', '1', '1', '1', '0', '0', '0', '3244', '1', '1', '1', '1', '1', 'default', '2', '0', '0');
INSERT INTO furniture VALUES ('1629', 'ads_711', 'ads_711*5', 's', '1', '1', '1', '0', '0', '0', '3241', '1', '1', '1', '1', '1', 'vendingmachine', '0', '19', '0');
INSERT INTO furniture VALUES ('1630', 'ads_711', 'ads_711*6', 's', '1', '1', '1', '0', '0', '0', '3242', '1', '1', '1', '1', '1', 'vendingmachine', '0', '19', '0');
INSERT INTO furniture VALUES ('1631', 'ads_711', 'ads_711*7', 's', '1', '1', '1', '0', '0', '0', '3243', '1', '1', '1', '1', '1', 'vendingmachine', '0', '19', '0');
INSERT INTO furniture VALUES ('1632', 'Purple Candle', 'rela_candle3', 's', '1', '1', '1', '0', '0', '0', '3235', '1', '1', '1', '1', '1', 'default', '2', '0', '0');
INSERT INTO furniture VALUES ('1633', 'Asteroid', 'pix_asteroid', 's', '1', '1', '1', '1', '0', '0', '3237', '1', '1', '1', '1', '1', 'default', '1', '0', '0');
INSERT INTO furniture VALUES ('1634', 'Bushy Houseplant', 'rela_plant', 's', '1', '1', '1', '0', '0', '0', '3246', '1', '1', '1', '1', '1', 'default', '1', '0', '0');
INSERT INTO furniture VALUES ('1635', 'White Candles', 'rela_candles1', 's', '1', '1', '1', '0', '0', '0', '3234', '1', '1', '1', '1', '1', 'default', '2', '0', '0');
INSERT INTO furniture VALUES ('1636', 'Purple Candles', 'rela_candles3', 's', '1', '1', '1', '0', '0', '0', '3236', '1', '1', '1', '1', '1', 'default', '2', '0', '0');
INSERT INTO furniture VALUES ('1637', 'Orchid', 'rela_orchid', 's', '1', '1', '1', '0', '0', '0', '3239', '1', '1', '1', '1', '1', 'default', '1', '0', '0');
INSERT INTO furniture VALUES ('1638', 'Rocks', 'rela_rock', 's', '1', '1', '0.8', '0', '1', '0', '3248', '1', '1', '1', '1', '1', 'default', '1', '0', '0');
INSERT INTO furniture VALUES ('1639', 'ktchn_stove name', 'ktchn_stove', 's', '2', '1', '1', '0', '0', '0', '3256', '1', '1', '1', '1', '1', 'default', '4', '0', '0');
INSERT INTO furniture VALUES ('1640', 'ktchn_light name', 'ktchn_light', 's', '2', '1', '0', '1', '0', '1', '3258', '1', '1', '1', '1', '1', 'default', '2', '0', '0');
INSERT INTO furniture VALUES ('1641', 'ktchn_plates name', 'ktchn_plates', 's', '1', '1', '1', '0', '0', '0', '3263', '1', '1', '1', '1', '1', 'default', '3', '0', '0');
INSERT INTO furniture VALUES ('1642', 'ktchn_countr_1 name', 'ktchn_countr_1', 's', '1', '1', '1', '1', '0', '0', '3261', '1', '1', '1', '1', '1', 'default', '1', '0', '0');
INSERT INTO furniture VALUES ('1643', 'ktchn_pots name', 'ktchn_pots', 's', '2', '1', '0', '1', '0', '1', '3252', '1', '1', '1', '1', '1', 'default', '10', '0', '0');
INSERT INTO furniture VALUES ('1644', 'ktchn_cornr name', 'ktchn_cornr', 's', '1', '1', '1', '0', '0', '0', '3257', '1', '1', '1', '1', '1', 'default', '1', '0', '0');
INSERT INTO furniture VALUES ('1645', 'ktchn_desk name', 'ktchn_desk', 's', '2', '1', '1', '1', '0', '0', '3260', '1', '1', '1', '1', '1', 'default', '1', '0', '0');
INSERT INTO furniture VALUES ('1646', 'ktchn_trash name', 'ktchn_trash', 's', '1', '1', '1', '0', '0', '0', '3264', '1', '1', '1', '1', '1', 'default', '2', '0', '0');
INSERT INTO furniture VALUES ('1647', 'ktchn_countr_2 name', 'ktchn_countr_2', 's', '2', '1', '1', '1', '0', '0', '3253', '1', '1', '1', '1', '1', 'default', '1', '0', '0');
INSERT INTO furniture VALUES ('1648', 'ktchn_bBlock name', 'ktchn_bBlock', 's', '1', '1', '1', '0', '0', '0', '3255', '1', '1', '1', '1', '1', 'default', '3', '0', '0');
INSERT INTO furniture VALUES ('1649', 'ktchn_dvdr name', 'ktchn_dvdr', 's', '2', '1', '1', '0', '0', '0', '3259', '1', '1', '1', '1', '1', 'default', '1', '0', '0');
INSERT INTO furniture VALUES ('1650', 'ktchn_inspctr name', 'ktchn_inspctr', 's', '1', '1', '1', '1', '0', '0', '3250', '1', '1', '1', '1', '1', 'default', '2', '0', '0');
INSERT INTO furniture VALUES ('1651', 'ktchn_fridge name', 'ktchn_fridge', 's', '1', '1', '1', '1', '0', '0', '3249', '1', '1', '1', '1', '1', 'vendingmachine', '0', '3,36,37,38', '0');
INSERT INTO furniture VALUES ('1652', 'ads_1800tele', 'ads_1800tele', 's', '1', '1', '0.001', '0', '0', '0', '3251', '1', '1', '0', '1', '1', 'teleport', '1', '0', '0');
INSERT INTO furniture VALUES ('1653', 'ktchn_sink name', 'ktchn_sink', 's', '2', '1', '1', '0', '0', '0', '3262', '1', '1', '1', '1', '1', 'default', '4', '0', '0');
INSERT INTO furniture VALUES ('1654', 'ktchn_gate name', 'ktchn_gate', 's', '2', '1', '0.001', '0', '0', '0', '3254', '1', '1', '1', '1', '1', 'gate', '2', '0', '0');
INSERT INTO furniture VALUES ('1655', 'Pad of stickies', 'post.it', 'i', '0', '0', '1', '0', '0', '0', '1', '0', '0', '1', '0', '1', 'postit', '1', '0', '0');
INSERT INTO furniture VALUES ('1656', 'Heart Stickies', 'post.it.vd', 'i', '0', '0', '1', '0', '0', '0', '2', '0', '0', '1', '0', '1', 'postit', '1', '0', '0');
INSERT INTO furniture VALUES ('20067', 'Green Hatch', 'divider_poly3*7', 's', '1', '1', '0.001', '0', '0', '0', '1930', '1', '1', '1', '1', '1', 'gate', '1', '0', '0');
INSERT INTO furniture VALUES ('20068', 'Idea Agency Lava Lamp', 'ads_cllava2', 's', '1', '1', '1', '0', '0', '0', '3021', '1', '1', '1', '1', '1', 'default', '1', '0', '0');
INSERT INTO furniture VALUES ('1665', 'Gothic Ectoplasm Fountain', 'gothicfountain', 'i', '0', '0', '1', '0', '0', '0', '4002', '1', '1', '1', '1', '1', 'default', '2', '0', '0');
INSERT INTO furniture VALUES ('1666', 'Retro Wall Lamp', 'hc_wall_lamp', 'i', '0', '0', '1', '0', '0', '0', '4003', '1', '1', '1', '1', '1', 'default', '2', '0', '0');
INSERT INTO furniture VALUES ('1667', 'Industrial Turbine', 'industrialfan', 'i', '0', '0', '1', '0', '0', '0', '4004', '1', '1', '1', '1', '1', 'default', '2', '0', '0');
INSERT INTO furniture VALUES ('1668', 'Gothic Torch', 'torch', 'i', '0', '0', '1', '0', '0', '0', '4005', '1', '1', '1', '1', '1', 'default', '2', '0', '0');
INSERT INTO furniture VALUES ('1669', 'Heart Light', 'val_heart', 'i', '0', '0', '1', '0', '0', '0', '4006', '1', '1', '1', '1', '1', 'default', '2', '0', '0');
INSERT INTO furniture VALUES ('1670', 'Mirror', 'wallmirror', 'i', '0', '0', '1', '0', '0', '0', '4007', '1', '1', '1', '1', '1', 'default', '1', '0', '0');
INSERT INTO furniture VALUES ('1671', 'Ninja Stars', 'jp_ninjastars', 'i', '0', '0', '1', '0', '0', '0', '4008', '1', '1', '1', '1', '1', 'default', '1', '0', '0');
INSERT INTO furniture VALUES ('1672', 'Habbowood Mirror', 'habw_mirror', 'i', '0', '0', '1', '0', '0', '0', '4009', '1', '1', '1', '1', '1', 'default', '2', '0', '0');
INSERT INTO furniture VALUES ('1673', 'So you gotta ask yourself', 'habbowheel', 'i', '0', '0', '1', '0', '0', '0', '4010', '1', '1', '1', '1', '1', 'habbowheel', '1', '0', '0');
INSERT INTO furniture VALUES ('1674', 'Skull Guitar', 'guitar_skull', 'i', '0', '0', '1', '0', '0', '0', '4011', '1', '1', '1', '1', '1', 'default', '1', '0', '0');
INSERT INTO furniture VALUES ('1675', 'V Guitar', 'guitar_v', 'i', '0', '0', '1', '0', '0', '0', '4012', '1', '1', '1', '1', '1', 'default', '1', '0', '0');
INSERT INTO furniture VALUES ('1676', 'Christmas Lights', 'xmas_light', 'i', '0', '0', '1', '0', '0', '0', '4015', '1', '1', '1', '1', '1', 'default', '2', '0', '0');
INSERT INTO furniture VALUES ('1677', 'Anchor', 'hrella_poster_3', 'i', '0', '0', '1', '0', '0', '0', '4016', '1', '1', '1', '1', '1', 'default', '1', '0', '0');
INSERT INTO furniture VALUES ('1678', 'Life Buoy', 'hrella_poster_2', 'i', '0', '0', '1', '0', '0', '0', '4013', '1', '1', '1', '1', '1', 'default', '1', '0', '0');
INSERT INTO furniture VALUES ('1679', 'Porthole', 'hrella_poster_1', 'i', '0', '0', '1', '0', '0', '0', '4014', '1', '1', '1', '1', '1', 'default', '1', '0', '0');
INSERT INTO furniture VALUES ('1680', 'Swords', 'sw_swords', 'i', '0', '0', '1', '0', '0', '0', '4017', '1', '1', '1', '1', '1', 'default', '1', '0', '0');
INSERT INTO furniture VALUES ('1681', 'Mysterious Necklace', 'sw_stone', 'i', '0', '0', '1', '0', '0', '0', '4018', '1', '1', '1', '1', '1', 'default', '2', '0', '0');
INSERT INTO furniture VALUES ('1682', 'Ventilation Duct', 'sw_hole', 'i', '0', '0', '1', '0', '0', '0', '4019', '1', '1', '1', '1', '1', 'default', '1', '0', '0');
INSERT INTO furniture VALUES ('1683', 'Mood Light', 'roomdimmer', 'i', '0', '0', '1', '0', '0', '0', '4027', '1', '1', '1', '1', '1', 'dimmer', '1', '0', '0');
INSERT INTO furniture VALUES ('1684', 'Bubble Juice Can', 'md_logo_wall', 'i', '0', '0', '1', '0', '0', '0', '4023', '1', '1', '1', '1', '1', 'default', '2', '0', '0');
INSERT INTO furniture VALUES ('1685', 'Kakejiku Hokusai', 'jp_sheet3', 'i', '0', '0', '1', '0', '0', '0', '4021', '1', '1', '1', '1', '1', 'default', '1', '0', '0');
INSERT INTO furniture VALUES ('1686', 'Kakejiku Ninjya', 'jp_sheet2', 'i', '0', '0', '1', '0', '0', '0', '4026', '1', '1', '1', '1', '1', 'default', '1', '0', '0');
INSERT INTO furniture VALUES ('1687', 'Kakejiku Ziritsu', 'jp_sheet1', 'i', '0', '0', '1', '0', '0', '0', '4024', '1', '1', '1', '1', '1', 'default', '1', '0', '0');
INSERT INTO furniture VALUES ('1688', 'Ancestral Scimitars', 'arabian_swords', 'i', '0', '0', '1', '0', '0', '0', '4020', '1', '1', '1', '1', '1', 'default', '1', '0', '0');
INSERT INTO furniture VALUES ('1689', 'Arabian Window Frame', 'arabian_wndw', 'i', '0', '0', '1', '0', '0', '0', '4022', '1', '1', '1', '1', '1', 'default', '1', '0', '0');
INSERT INTO furniture VALUES ('1690', 'Jungle Wallplant', 'tiki_wallplnt', 'i', '0', '0', '1', '0', '0', '0', '4030', '0', '0', '1', '1', '1', 'default', '1', '0', '0');
INSERT INTO furniture VALUES ('1691', 'Surfboard', 'tiki_surfboard', 'i', '0', '0', '1', '0', '0', '0', '4028', '1', '1', '1', '1', '1', 'default', '9', '0', '0');
INSERT INTO furniture VALUES ('1692', 'tampax_wall', 'tampax_wall', 'i', '0', '0', '1', '0', '0', '0', '4029', '1', '1', '1', '1', '1', 'default', '1', '0', '0');
INSERT INTO furniture VALUES ('1693', 'Single Window', 'window_single_default', 'i', '0', '0', '1', '0', '0', '0', '4031', '1', '1', '1', '1', '1', 'default', '1', '0', '0');
INSERT INTO furniture VALUES ('1694', 'Double Window', 'window_double_default', 'i', '0', '0', '1', '0', '0', '0', '4032', '1', '1', '1', '1', '1', 'default', '1', '0', '0');
INSERT INTO furniture VALUES ('1695', 'Window', 'noob_window_double', 'i', '0', '0', '1', '0', '0', '0', '4033', '0', '0', '1', '0', '1', 'default', '1', '0', '0');
INSERT INTO furniture VALUES ('1696', 'Bay Window', 'window_triple', 'i', '0', '0', '1', '0', '0', '0', '4045', '1', '1', '1', '1', '1', 'default', '1', '0', '0');
INSERT INTO furniture VALUES ('1697', 'Glass Square Window', 'window_square', 'i', '0', '0', '1', '0', '0', '0', '4036', '1', '1', '1', '1', '1', 'default', '1', '0', '0');
INSERT INTO furniture VALUES ('1698', 'Large Romantic Window', 'window_romantic_wide', 'i', '0', '0', '1', '0', '0', '0', '4041', '1', '1', '1', '1', '1', 'default', '2', '0', '0');
INSERT INTO furniture VALUES ('1699', 'Small Romantic Window', 'window_romantic_narrow', 'i', '0', '0', '1', '0', '0', '0', '4037', '1', '1', '1', '1', '1', 'default', '2', '0', '0');
INSERT INTO furniture VALUES ('1700', 'Grunge Window', 'window_grunge', 'i', '0', '0', '1', '0', '0', '0', '4044', '1', '1', '1', '1', '1', 'default', '2', '0', '0');
INSERT INTO furniture VALUES ('1701', 'Golden Window', 'window_golden', 'i', '0', '0', '1', '0', '0', '0', '4035', '1', '1', '1', '1', '1', 'default', '1', '0', '0');
INSERT INTO furniture VALUES ('1702', 'Large Oriental Window', 'window_chinese_wide', 'i', '0', '0', '1', '0', '0', '0', '4034', '1', '1', '1', '1', '1', 'default', '1', '0', '0');
INSERT INTO furniture VALUES ('1703', 'Small Oriental Window', 'window_chinese_narrow', 'i', '0', '0', '1', '0', '0', '0', '4038', '1', '1', '1', '1', '1', 'default', '1', '0', '0');
INSERT INTO furniture VALUES ('1704', 'Basic Window', 'window_basic', 'i', '0', '0', '1', '0', '0', '0', '4042', '1', '1', '1', '1', '1', 'default', '2', '0', '0');
INSERT INTO furniture VALUES ('1705', 'Large 70s Window', 'window_70s_wide', 'i', '0', '0', '1', '0', '0', '0', '4039', '1', '1', '1', '1', '1', 'default', '2', '0', '0');
INSERT INTO furniture VALUES ('1706', 'Small 70s Window', 'window_70s_narrow', 'i', '0', '0', '1', '0', '0', '0', '4040', '1', '1', '1', '1', '1', 'default', '2', '0', '0');
INSERT INTO furniture VALUES ('1707', 'Sunny Delight', 'ads_sunnyd', 'i', '0', '0', '1', '0', '0', '0', '4043', '1', '1', '1', '1', '1', 'default', '1', '0', '0');
INSERT INTO furniture VALUES ('1708', 'Good grub', 'window_diner2', 'i', '0', '0', '1', '0', '0', '0', '4046', '1', '1', '1', '1', '1', 'default', '1', '0', '0');
INSERT INTO furniture VALUES ('1709', 'Large Diner Window', 'window_diner', 'i', '0', '0', '1', '0', '0', '0', '4049', '1', '1', '1', '1', '1', 'default', '2', '0', '0');
INSERT INTO furniture VALUES ('1710', 'Diner Side Table', 'diner_walltable', 'i', '0', '0', '1', '0', '0', '0', '4048', '1', '1', '1', '1', '1', 'default', '1', '0', '0');
INSERT INTO furniture VALUES ('1711', 'ads_dave_wall', 'ads_dave_wall', 'i', '0', '0', '1', '0', '0', '0', '4047', '1', '1', '1', '1', '1', 'default', '1', '0', '0');
INSERT INTO furniture VALUES ('1712', 'Window', 'window_hole', 'i', '0', '0', '1', '0', '0', '0', '4052', '1', '1', '1', '1', '1', 'default', '1', '0', '0');
INSERT INTO furniture VALUES ('1713', 'easy_poster', 'easy_poster', 'i', '0', '0', '1', '0', '0', '0', '4051', '1', '1', '1', '1', '1', 'default', '1', '0', '0');
INSERT INTO furniture VALUES ('1714', 'ads_nokia_logo name', 'ads_nokia_logo', 'i', '0', '0', '1', '0', '0', '0', '4050', '1', '1', '1', '1', '1', 'default', '1', '0', '0');
INSERT INTO furniture VALUES ('1715', 'ads_nokia_phone name', 'ads_nokia_phone', 'i', '0', '0', '1', '0', '0', '0', '4053', '1', '1', '1', '1', '1', 'default', '2', '0', '0');
INSERT INTO furniture VALUES ('1717', 'Skyscraper Window', 'window_skyscraper', 'i', '0', '0', '1', '0', '0', '0', '4054', '1', '1', '1', '1', '1', 'default', '1', '0', '0');
INSERT INTO furniture VALUES ('1718', 'netari_poster', 'netari_poster', 'i', '0', '0', '1', '0', '0', '0', '4057', '1', '1', '1', '1', '1', 'default', '1', '0', '0');
INSERT INTO furniture VALUES ('1719', 'Bullet Hole', 'det_bhole', 'i', '0', '0', '1', '0', '0', '0', '4056', '1', '1', '1', '1', '1', 'default', '1', '0', '0');
INSERT INTO furniture VALUES ('1720', 'Red V Guitar', 'ads_campguitar', 'i', '0', '0', '1', '0', '0', '0', '4058', '1', '1', '1', '1', '1', 'default', '1', '0', '0');
INSERT INTO furniture VALUES ('1721', 'Nuclear Radiation Sign', 'hween08_rad', 'i', '0', '0', '1', '0', '0', '0', '4059', '1', '1', '1', '1', '1', 'default', '1', '0', '0');
INSERT INTO furniture VALUES ('1722', 'Broken Window (small)', 'hween08_wndwb', 'i', '0', '0', '1', '0', '0', '0', '4061', '1', '1', '1', '1', '1', 'default', '2', '0', '0');
INSERT INTO furniture VALUES ('1723', 'Broken Window (large)', 'hween08_wndw', 'i', '0', '0', '1', '0', '0', '0', '4062', '1', '1', '1', '1', '1', 'default', '2', '0', '0');
INSERT INTO furniture VALUES ('1724', 'Biohazard Sign', 'hween08_bio', 'i', '0', '0', '1', '0', '0', '0', '4063', '1', '1', '1', '1', '1', 'default', '1', '0', '0');
INSERT INTO furniture VALUES ('1725', 'X-Ray Light Box', 'hw_08_xray', 'i', '0', '0', '1', '0', '0', '0', '4060', '1', '1', '1', '1', '1', 'default', '3', '0', '0');
INSERT INTO furniture VALUES ('1726', 'Red Gothic Fountain', 'gothicfountain2', 'i', '0', '0', '1', '0', '0', '0', '4065', '1', '1', '1', '1', '1', 'default', '2', '0', '0');
INSERT INTO furniture VALUES ('20052', 'Volturi Crest', 'ads_twi_crest', 'i', '0', '0', '1', '1', '0', '0', '4275', '1', '1', '1', '1', '1', 'default', '1', '0', '0');
INSERT INTO furniture VALUES ('1728', 'TBD Central Musical TV', 'ads_cmusic', 'i', '0', '0', '1', '0', '0', '0', '4067', '1', '1', '1', '1', '1', 'default', '1', '0', '0');
INSERT INTO furniture VALUES ('1729', 'Stand up or sitting down', 'party_wc_boy', 'i', '0', '0', '1', '0', '0', '0', '4070', '1', '1', '1', '1', '1', 'default', '2', '0', '0');
INSERT INTO furniture VALUES ('1730', 'Big Wall Lights', 'party_led', 'i', '0', '0', '1', '0', '0', '0', '4066', '1', '1', '1', '1', '1', 'default', '4', '0', '0');
INSERT INTO furniture VALUES ('1731', 'Neon Heart Light', 'party_neon5', 'i', '0', '0', '1', '0', '0', '0', '4074', '1', '1', '1', '1', '1', 'default', '5', '0', '0');
INSERT INTO furniture VALUES ('1732', 'Neon Right Arrows', 'party_neon1', 'i', '0', '0', '1', '0', '0', '0', '4069', '1', '1', '1', '1', '1', 'default', '3', '0', '0');
INSERT INTO furniture VALUES ('1733', 'Neon Left Arrows', 'party_neon2', 'i', '0', '0', '1', '0', '0', '0', '4073', '1', '1', '1', '1', '1', 'default', '3', '0', '0');
INSERT INTO furniture VALUES ('1734', 'Girls Toilets', 'party_wc_girl', 'i', '0', '0', '1', '0', '0', '0', '4068', '1', '1', '1', '1', '1', 'default', '2', '0', '0');
INSERT INTO furniture VALUES ('1735', 'Neon Pink Flamingo', 'party_neon3', 'i', '0', '0', '1', '0', '0', '0', '4075', '1', '1', '1', '1', '1', 'default', '2', '0', '0');
INSERT INTO furniture VALUES ('1736', 'Bar Shelf', 'party_shelf', 'i', '0', '0', '1', '0', '0', '0', '4071', '1', '1', '1', '1', '1', 'default', '3', '0', '0');
INSERT INTO furniture VALUES ('1737', 'Neon Skull Light', 'party_neon4', 'i', '0', '0', '1', '0', '0', '0', '4072', '1', '1', '1', '1', '1', 'default', '3', '0', '0');
INSERT INTO furniture VALUES ('1738', 'Snowy Posters', 'xmas08_wallpaper', 'i', '0', '0', '1', '0', '0', '0', '4077', '0', '0', '1', '1', '1', 'roomeffect', '1', '0', '0');
INSERT INTO furniture VALUES ('1739', 'Icy Wall', 'xmas08_icewall', 'i', '0', '0', '1', '0', '0', '0', '4076', '1', '1', '1', '1', '1', 'default', '4', '0', '0');
INSERT INTO furniture VALUES ('1741', 'Idea Agency Plasma 1', 'ads_clwall1', 'i', '0', '0', '1', '0', '0', '0', '4082', '1', '1', '1', '1', '1', 'default', '1', '0', '0');
INSERT INTO furniture VALUES ('1742', 'Idea Agency Plasma 2', 'ads_clwall2', 'i', '0', '0', '1', '0', '0', '0', '4078', '1', '1', '1', '1', '1', 'default', '1', '0', '0');
INSERT INTO furniture VALUES ('1743', 'Idea Agency Plasma 3', 'ads_clwall3', 'i', '0', '0', '1', '0', '0', '0', '4079', '1', '1', '1', '1', '1', 'default', '1', '0', '0');
INSERT INTO furniture VALUES ('1744', 'ads_ob_wall', 'ads_ob_wall', 'i', '0', '0', '1', '0', '0', '0', '4081', '1', '1', '1', '1', '1', 'default', '2', '0', '0');
INSERT INTO furniture VALUES ('1745', 'Mall Window', 'ads_mall_window', 'i', '0', '0', '1', '0', '0', '0', '4083', '1', '1', '1', '1', '1', 'default', '1', '0', '0');
INSERT INTO furniture VALUES ('1746', 'Dragon Poster', 'china_pstr2', 'i', '0', '0', '1', '0', '0', '0', '4085', '1', '1', '1', '1', '1', 'default', '1', '0', '0');
INSERT INTO furniture VALUES ('1747', 'Chinese Wall Lamp', 'china_light', 'i', '0', '0', '1', '0', '0', '0', '4086', '1', '1', '1', '1', '1', 'default', '2', '0', '0');
INSERT INTO furniture VALUES ('1748', 'Ox Poster', 'china_pstr1', 'i', '0', '0', '1', '0', '0', '0', '4084', '1', '1', '1', '1', '1', 'default', '1', '0', '0');
INSERT INTO furniture VALUES ('1749', 'Bolly Window', 'bolly_wdw_wd', 'i', '0', '0', '1', '0', '0', '0', '4087', '1', '1', '1', '1', '1', 'default', '3', '0', '0');
INSERT INTO furniture VALUES ('1750', 'Monster Plan Poster', 'ads_igor_wall', 'i', '0', '0', '1', '0', '0', '0', '4090', '1', '1', '1', '1', '1', 'default', '1', '0', '0');
INSERT INTO furniture VALUES ('1751', 'Evil Bone', 'ads_igorevilb', 'i', '0', '0', '1', '0', '0', '0', '4089', '1', '1', '1', '1', '1', 'default', '2', '0', '0');
INSERT INTO furniture VALUES ('1752', 'ads_idol_wall name', 'ads_idol_wall', 'i', '0', '0', '1', '0', '0', '0', '4088', '1', '1', '1', '1', '1', 'default', '1', '0', '0');
INSERT INTO furniture VALUES ('1753', 'Mall Furni Showroom', 'ads_mall_winfur', 'i', '0', '0', '1', '0', '0', '0', '4092', '1', '1', '1', '1', '1', 'default', '1', '0', '0');
INSERT INTO furniture VALUES ('1754', 'Mall Pet Shop Window', 'ads_mall_winpet', 'i', '0', '0', '1', '0', '0', '0', '4091', '1', '1', '1', '1', '1', 'default', '1', '0', '0');
INSERT INTO furniture VALUES ('1755', 'Rock Wall', 'lc_wall1', 'i', '0', '0', '1', '0', '0', '0', '4095', '1', '1', '1', '1', '1', 'default', '1', '0', '0');
INSERT INTO furniture VALUES ('1756', 'Aquarium Window', 'lc_window2', 'i', '0', '0', '1', '0', '0', '0', '4096', '1', '1', '1', '1', '1', 'default', '2', '0', '0');
INSERT INTO furniture VALUES ('1757', 'Wooden Window', 'lc_window1', 'i', '0', '0', '1', '0', '0', '0', '4094', '1', '1', '1', '1', '1', 'default', '2', '0', '0');
INSERT INTO furniture VALUES ('1758', 'American Idol TV', 'ads_idol_tv', 'i', '0', '0', '1', '0', '0', '0', '4093', '1', '1', '1', '1', '1', 'default', '1', '0', '0');
INSERT INTO furniture VALUES ('1759', 'Coral Wall', 'lc_wall2', 'i', '0', '0', '1', '0', '0', '0', '4097', '1', '1', '1', '1', '1', 'default', '1', '0', '0');
INSERT INTO furniture VALUES ('1760', 'ads_idol_mirror name', 'ads_idol_mirror', 'i', '0', '0', '1', '0', '0', '0', '4099', '1', '1', '1', '1', '1', 'default', '2', '0', '0');
INSERT INTO furniture VALUES ('1761', 'Mall Cinema Window', 'ads_mall_wincin', 'i', '0', '0', '1', '0', '0', '0', '4098', '1', '1', '1', '1', '1', 'default', '1', '0', '0');
INSERT INTO furniture VALUES ('1762', 'Strum', 'ads_mall_winmus', 'i', '0', '0', '1', '0', '0', '0', '4101', '1', '1', '1', '1', '1', 'default', '1', '0', '0');
INSERT INTO furniture VALUES ('1763', 'Mall Beauty Salon', 'ads_mall_winbea', 'i', '0', '0', '1', '0', '0', '0', '4100', '1', '1', '1', '1', '1', 'default', '1', '0', '0');
INSERT INTO furniture VALUES ('1764', 'Eco Curtain 1', 'eco_curtains1', 'i', '0', '0', '1', '0', '0', '0', '4105', '0', '1', '1', '1', '1', 'default', '2', '0', '0');
INSERT INTO furniture VALUES ('1765', 'Mall Idea Agency Window', 'ads_mall_winchi', 'i', '0', '0', '1', '0', '0', '0', '4103', '1', '1', '1', '1', '1', 'default', '1', '0', '0');
INSERT INTO furniture VALUES ('1766', 'Eco Curtain 3', 'eco_curtains3', 'i', '0', '0', '1', '0', '0', '0', '4104', '0', '1', '1', '1', '1', 'default', '2', '0', '0');
INSERT INTO furniture VALUES ('1767', 'Eco Curtain 2', 'eco_curtains2', 'i', '0', '0', '1', '0', '0', '0', '4102', '0', '1', '1', '1', '1', 'default', '2', '0', '0');
INSERT INTO furniture VALUES ('1768', 'Mall Ice Cream Parlour Window', 'ads_mall_winice', 'i', '0', '0', '1', '0', '0', '0', '4109', '1', '1', '1', '1', '1', 'default', '1', '0', '0');
INSERT INTO furniture VALUES ('1769', 'Whatever your sporting dibble', 'ads_mall_winspo', 'i', '0', '0', '1', '0', '0', '0', '4106', '1', '1', '1', '1', '1', 'default', '1', '0', '0');
INSERT INTO furniture VALUES ('1770', 'ads_idol_logo name', 'ads_idol_logo', 'i', '0', '0', '1', '0', '0', '0', '4108', '1', '1', '1', '1', '1', 'default', '3', '0', '0');
INSERT INTO furniture VALUES ('1771', 'World Map', 'exe_map', 'i', '0', '0', '1', '0', '0', '0', '4110', '1', '1', '1', '1', '1', 'default', '2', '0', '0');
INSERT INTO furniture VALUES ('1772', 'Wall Fall', 'exe_wfall', 'i', '0', '0', '1', '0', '0', '0', '4107', '1', '1', '1', '1', '1', 'default', '3', '0', '0');
INSERT INTO furniture VALUES ('1773', 'ads_lin_wh_c name', 'ads_lin_wh_c', 'i', '0', '0', '1', '0', '0', '0', '4115', '1', '1', '1', '1', '1', 'default', '1', '0', '0');
INSERT INTO furniture VALUES ('1774', 'ads_malaco_tv name', 'ads_malaco_tv', 'i', '0', '0', '1', '0', '0', '0', '4113', '1', '1', '1', '1', '1', 'default', '1', '0', '0');
INSERT INTO furniture VALUES ('1775', 'ads_puffet_tv name', 'ads_puffet_tv', 'i', '0', '0', '1', '0', '0', '0', '4111', '1', '1', '1', '1', '1', 'default', '1', '0', '0');
INSERT INTO furniture VALUES ('1776', 'ads_reebok_tv name', 'ads_reebok_tv', 'i', '0', '0', '1', '0', '0', '0', '4112', '1', '1', '1', '1', '1', 'default', '1', '0', '0');
INSERT INTO furniture VALUES ('1777', 'Forest Wall Poster', 'country_forestwall', 'i', '0', '0', '1', '0', '0', '0', '4114', '1', '1', '1', '1', '1', 'default', '1', '0', '0');
INSERT INTO furniture VALUES ('1778', 'Marble Fireplace', 'country_fp', 'i', '0', '0', '1', '0', '0', '0', '4117', '1', '1', '1', '1', '1', 'default', '2', '0', '0');
INSERT INTO furniture VALUES ('1779', 'Farmhouse Wall', 'country_wall', 'i', '0', '0', '1', '0', '0', '0', '4118', '1', '1', '1', '1', '1', 'default', '1', '0', '0');
INSERT INTO furniture VALUES ('1780', 'Ye Olde Lantern', 'country_lantern', 'i', '0', '0', '1', '0', '0', '0', '4116', '1', '1', '1', '1', '1', 'default', '2', '0', '0');
INSERT INTO furniture VALUES ('1781', 'Norwegian Flag', 'flag_norway', 'i', '0', '0', '1', '0', '0', '0', '4119', '1', '1', '1', '1', '1', 'default', '1', '0', '0');
INSERT INTO furniture VALUES ('1782', 'Diner Poster', 'diner_poster', 'i', '0', '0', '1', '0', '0', '0', '4120', '1', '1', '1', '1', '1', 'default', '1', '0', '0');
INSERT INTO furniture VALUES ('1783', '', 'lt_jngl_wall', 'i', '0', '0', '1', '0', '0', '0', '4121', '1', '1', '1', '1', '1', 'default', '1', '0', '0');
INSERT INTO furniture VALUES ('1784', 'ads_mirror name', 'ads_mirror', 'i', '0', '0', '1', '0', '0', '0', '4122', '1', '1', '1', '1', '1', 'default', '2', '0', '0');
INSERT INTO furniture VALUES ('1785', 'lt_wall', 'lt_wall', 'i', '0', '0', '1', '0', '0', '0', '4123', '1', '1', '1', '1', '1', 'default', '2', '0', '0');
INSERT INTO furniture VALUES ('1787', 'Starship Window', 'sf_window', 'i', '0', '0', '1', '0', '0', '0', '4224', '1', '1', '1', '1', '1', 'default', '1', '0', '0');
INSERT INTO furniture VALUES ('1788', 'Starship Wall', 'sf_wall2', 'i', '0', '0', '1', '0', '0', '0', '4228', '1', '1', '1', '1', '1', 'default', '3', '0', '0');
INSERT INTO furniture VALUES ('1789', 'ads_wwe_poster name', 'ads_wwe_poster', 'i', '0', '0', '1', '0', '0', '0', '4226', '1', '1', '1', '1', '1', 'default', '1', '0', '0');
INSERT INTO furniture VALUES ('1790', 'Fly me to the moon', 'ads_mall_wintra', 'i', '0', '0', '1', '0', '0', '0', '4225', '1', '1', '1', '1', '1', 'default', '1', '0', '0');
INSERT INTO furniture VALUES ('1791', 'Starship Corner', 'sf_wall3', 'i', '0', '0', '1', '0', '0', '0', '4223', '1', '1', '1', '1', '1', 'default', '1', '0', '0');
INSERT INTO furniture VALUES ('1793', 'ads_veet name', 'ads_veet', 'i', '0', '0', '1', '0', '0', '0', '4222', '1', '1', '1', '1', '1', 'default', '1', '0', '0');
INSERT INTO furniture VALUES ('1794', 'Wall Tiles', 'rela_wall', 'i', '0', '0', '1', '0', '0', '0', '4232', '1', '1', '1', '1', '1', 'default', '6', '0', '0');
INSERT INTO furniture VALUES ('1795', 'flag_belgium', 'flag_belgium', 'i', '0', '0', '1', '0', '0', '0', '4229', '1', '1', '1', '1', '1', 'default', '1', '0', '0');
INSERT INTO furniture VALUES ('1796', 'flag_portugal', 'flag_portugal', 'i', '0', '0', '1', '0', '0', '0', '4231', '1', '1', '1', '1', '1', 'default', '1', '0', '0');
INSERT INTO furniture VALUES ('1797', 'ads_mall_wingar', 'ads_mall_wingar', 'i', '0', '0', '1', '0', '0', '0', '4230', '1', '1', '1', '1', '1', 'default', '1', '0', '0');
INSERT INTO furniture VALUES ('1798', 'ktchn_wall name', 'ktchn_wall', 'i', '0', '0', '1', '0', '0', '0', '4235', '1', '1', '1', '1', '1', 'default', '1', '0', '0');
INSERT INTO furniture VALUES ('1799', 'ads_mall_winclo', 'ads_mall_winclo', 'i', '0', '0', '1', '0', '0', '0', '4236', '1', '1', '1', '1', '1', 'default', '1', '0', '0');
INSERT INTO furniture VALUES ('1800', 'ktchn_oven name', 'ktchn_oven', 'i', '0', '0', '1', '0', '0', '0', '4234', '1', '1', '1', '1', '1', 'default', '2', '0', '0');
INSERT INTO furniture VALUES ('1801', 'ktchn_knives name', 'ktchn_knives', 'i', '0', '0', '1', '0', '0', '0', '4233', '1', '1', '1', '1', '1', 'default', '4', '0', '0');
INSERT INTO furniture VALUES ('1802', 'Mood Controller (Large)', 'dimmer_fuse6', 'i', '0', '0', '1', '0', '0', '0', '4240', '1', '1', '1', '1', '1', 'dimmer', '1', '0', '0');
INSERT INTO furniture VALUES ('1803', 'Mood Switch (Large)', 'dimmer_swtch', 'i', '0', '0', '1', '0', '0', '0', '4237', '1', '1', '1', '1', '1', 'dimmer', '1', '0', '0');
INSERT INTO furniture VALUES ('1804', 'Mood Controller (Small)', 'dimmer_fuse2', 'i', '0', '0', '1', '0', '0', '0', '4239', '1', '1', '1', '1', '1', 'dimmer', '1', '0', '0');
INSERT INTO furniture VALUES ('1805', 'Mood Switch (Small)', 'dimmer_buttn', 'i', '0', '0', '1', '0', '0', '0', '4238', '1', '1', '1', '1', '1', 'dimmer', '1', '0', '0');
INSERT INTO furniture VALUES ('19877', '', 'avatar_effect9', 'e', '1', '1', '1', '0', '0', '0', '9', '0', '0', '1', '0', '0', 'default', '1', '0', '0');
INSERT INTO furniture VALUES ('19878', '', 'avatar_effect6', 'e', '1', '1', '1', '0', '0', '0', '6', '0', '0', '1', '0', '0', 'default', '1', '0', '0');
INSERT INTO furniture VALUES ('19879', '', 'avatar_effect16', 'e', '1', '1', '1', '0', '0', '0', '16', '0', '0', '1', '0', '0', 'default', '1', '0', '0');
INSERT INTO furniture VALUES ('19880', '', 'avatar_effect2', 'e', '1', '1', '1', '0', '0', '0', '2', '0', '0', '1', '0', '0', 'default', '1', '0', '0');
INSERT INTO furniture VALUES ('19881', '', 'avatar_effect14', 'e', '1', '1', '1', '0', '0', '0', '14', '0', '0', '1', '0', '0', 'default', '1', '0', '0');
INSERT INTO furniture VALUES ('19882', '', 'avatar_effect15', 'e', '1', '1', '1', '0', '0', '0', '15', '0', '0', '1', '0', '0', 'default', '1', '0', '0');
INSERT INTO furniture VALUES ('19883', '', 'avatar_effect3', 'e', '1', '1', '1', '0', '0', '0', '3', '0', '0', '1', '0', '0', 'default', '1', '0', '0');
INSERT INTO furniture VALUES ('19884', '', 'avatar_effect17', 'e', '1', '1', '1', '0', '0', '0', '17', '0', '0', '1', '0', '0', 'default', '1', '0', '0');
INSERT INTO furniture VALUES ('19885', '', 'avatar_effect18', 'e', '1', '1', '1', '0', '0', '0', '18', '0', '0', '1', '0', '0', 'default', '1', '0', '0');
INSERT INTO furniture VALUES ('19886', '', 'avatar_effect1', 'e', '1', '1', '1', '0', '0', '0', '1', '0', '0', '1', '0', '0', 'default', '1', '0', '0');
INSERT INTO furniture VALUES ('19887', '', 'avatar_effect4', 'e', '1', '1', '1', '0', '0', '0', '4', '0', '0', '1', '0', '0', 'default', '1', '0', '0');
INSERT INTO furniture VALUES ('19888', '', 'avatar_effect5', 'e', '1', '1', '1', '0', '0', '0', '5', '0', '0', '1', '0', '0', 'default', '1', '0', '0');
INSERT INTO furniture VALUES ('19889', '', 'avatar_effect7', 'e', '1', '1', '1', '0', '0', '0', '7', '0', '0', '1', '0', '0', 'default', '1', '0', '0');
INSERT INTO furniture VALUES ('19890', '', 'avatar_effect8', 'e', '1', '1', '1', '0', '0', '0', '8', '0', '0', '1', '0', '0', 'default', '1', '0', '0');
INSERT INTO furniture VALUES ('19891', '', 'avatar_effect10', 'e', '1', '1', '1', '0', '0', '0', '10', '0', '0', '1', '0', '0', 'default', '1', '0', '0');
INSERT INTO furniture VALUES ('19892', '', 'avatar_effect12', 'e', '1', '1', '1', '0', '0', '0', '12', '0', '0', '1', '0', '0', 'default', '1', '0', '0');
INSERT INTO furniture VALUES ('19893', '', 'avatar_effect13', 'e', '1', '1', '1', '0', '0', '0', '13', '0', '0', '1', '0', '0', 'default', '1', '0', '0');
INSERT INTO furniture VALUES ('19894', '', 'a2 l', 'i', '1', '1', '1', '0', '0', '0', '3002', '0', '0', '1', '1', '0', 'roomeffect', '1', '0', '0');
INSERT INTO furniture VALUES ('19895', '', 'a2 t', 'i', '1', '1', '1', '0', '0', '0', '3001', '0', '0', '1', '1', '0', 'roomeffect', '1', '0', '0');
INSERT INTO furniture VALUES ('19896', '', 'wallpaper 1', 'i', '1', '1', '1', '0', '0', '0', '3001', '0', '0', '1', '1', '0', 'roomeffect', '1', '0', '0');
INSERT INTO furniture VALUES ('19926', '', 'landscape 10', 'i', '1', '1', '1', '0', '0', '0', '4055', '0', '0', '1', '1', '0', 'roomeffect', '1', '0', '0');
INSERT INTO furniture VALUES ('19938', '', 'hween09_floor', 's', '2', '2', '0', '1', '0', '1', '3288', '0', '0', '1', '1', '1', 'default', '1', '0', '0');
INSERT INTO furniture VALUES ('19939', '', 'hween09_jar', 's', '1', '1', '1', '0', '0', '0', '3287', '0', '0', '1', '1', '1', 'default', '2', '0', '0');
INSERT INTO furniture VALUES ('19940', 'City Bench (Clean)', 'urban_bench_plain', 's', '2', '1', '1', '0', '1', '0', '3284', '1', '1', '1', '1', '1', 'default', '1', '0', '0');
INSERT INTO furniture VALUES ('19941', '', 'hween09_organ', 's', '2', '1', '1', '0', '0', '0', '3282', '0', '0', '1', '1', '1', 'default', '2', '0', '0');
INSERT INTO furniture VALUES ('19942', '', 'byesw_hand', 's', '1', '1', '1.35', '0', '1', '0', '3291', '0', '1', '1', '1', '1', 'default', '1', '0', '0');
INSERT INTO furniture VALUES ('19943', '', 'byesw_hotel', 's', '1', '1', '1', '0', '0', '0', '3289', '0', '1', '1', '1', '1', 'default', '6', '0', '0');
INSERT INTO furniture VALUES ('19944', '', 'hween09_table', 's', '1', '3', '1', '0', '0', '0', '3286', '0', '0', '1', '1', '1', 'default', '2', '0', '0');
INSERT INTO furniture VALUES ('19945', '', 'hween09_chair', 's', '1', '1', '1', '0', '1', '0', '3295', '0', '0', '1', '1', '1', 'default', '1', '0', '0');
INSERT INTO furniture VALUES ('19946', '', 'hween09_mirror', 's', '1', '1', '1', '0', '1', '0', '3293', '0', '0', '1', '1', '1', 'default', '2', '0', '0');
INSERT INTO furniture VALUES ('19947', 'Trap Door', 'hween09_hatch', 's', '2', '2', '0.001', '0', '0', '1', '3285', '0', '0', '1', '1', '1', 'gate', '2', '0', '0');
INSERT INTO furniture VALUES ('19948', '', 'hween09_ghost', 's', '1', '1', '1', '0', '0', '0', '3290', '0', '0', '1', '1', '1', 'default', '2', '0', '0');
INSERT INTO furniture VALUES ('19949', '', 'hween09_tv', 's', '2', '1', '1', '0', '0', '0', '3292', '0', '0', '1', '1', '1', 'default', '3', '0', '0');
INSERT INTO furniture VALUES ('19950', '', 'hween09_chandelier', 's', '1', '1', '1', '0', '0', '1', '3294', '0', '0', '1', '1', '1', 'default', '3', '0', '0');
INSERT INTO furniture VALUES ('19951', '', 'hween09_crnr1', 'i', '0', '0', '1', '0', '0', '0', '4247', '0', '0', '1', '1', '1', 'default', '4', '0', '0');
INSERT INTO furniture VALUES ('19952', '', 'hween09_paint', 'i', '0', '0', '1', '0', '0', '0', '4263', '0', '0', '1', '1', '1', 'default', '2', '0', '0');
INSERT INTO furniture VALUES ('19953', '', 'hween09_treewall', 'i', '0', '0', '1', '0', '0', '0', '4269', '0', '0', '1', '1', '1', 'default', '2', '0', '0');
INSERT INTO furniture VALUES ('19954', '', 'hween09_wall1', 'i', '0', '0', '1', '0', '0', '0', '4257', '0', '0', '1', '1', '1', 'default', '4', '0', '0');
INSERT INTO furniture VALUES ('19955', '', 'hween09_stonewall', 'i', '0', '0', '1', '0', '0', '0', '4259', '0', '0', '1', '1', '1', 'default', '5', '0', '0');
INSERT INTO furniture VALUES ('19956', '', 'hween09_win', 'i', '0', '0', '1', '0', '0', '0', '4271', '0', '0', '1', '1', '1', 'default', '10', '0', '0');
INSERT INTO furniture VALUES ('19957', '', 'avatar_effect22', 'e', '1', '1', '1', '0', '0', '0', '22', '0', '0', '1', '0', '1', 'default', '1', '0', '0');
INSERT INTO furniture VALUES ('19958', '', 'avatar_effect19', 'e', '1', '1', '1', '0', '0', '0', '19', '0', '0', '1', '0', '1', 'default', '1', '0', '0');
INSERT INTO furniture VALUES ('19959', '', 'avatar_effect20', 'e', '1', '1', '1', '0', '0', '0', '20', '0', '0', '1', '0', '1', 'default', '1', '0', '0');
INSERT INTO furniture VALUES ('19960', '', 'avatar_effect21', 'e', '1', '1', '1', '0', '0', '0', '21', '0', '0', '1', '0', '1', 'default', '1', '0', '0');
INSERT INTO furniture VALUES ('19989', 'Snowman Base', 'xm09_man_a', 's', '1', '1', '1', '1', '0', '0', '3330', '1', '1', '1', '1', '1', 'default', '5', '0', '0');
INSERT INTO furniture VALUES ('19971', 'Snowman Middle', 'xm09_man_b', 's', '1', '1', '0.8', '1', '0', '0', '3328', '1', '1', '1', '1', '1', 'default', '9', '0', '0');
INSERT INTO furniture VALUES ('19972', 'Snowman Head', 'xm09_man_c', 's', '1', '1', '1', '0', '0', '0', '3329', '1', '1', '1', '1', '1', 'default', '8', '0', '0');
INSERT INTO furniture VALUES ('19973', 'Christmas Table', 'xm09_table', 's', '2', '6', '1', '1', '0', '0', '3335', '1', '1', '1', '1', '1', 'default', '2', '0', '0');
INSERT INTO furniture VALUES ('19974', '6-Seater Bench', 'xm09_bench', 's', '6', '1', '1', '0', '1', '0', '3340', '1', '1', '1', '1', '1', 'default', '1', '0', '0');
INSERT INTO furniture VALUES ('19976', 'Snowy Fir Trees', 'xm09_firwall', 'i', '0', '0', '1', '0', '0', '0', '4307', '1', '1', '1', '1', '1', 'default', '1', '0', '0');
INSERT INTO furniture VALUES ('19977', 'Snowy Forest', 'xm09_forestwall', 'i', '0', '0', '1', '0', '0', '0', '4308', '1', '1', '1', '1', '1', 'default', '1', '0', '0');
INSERT INTO furniture VALUES ('19978', 'Lodge Wall', 'xm09_lodgewall', 'i', '0', '0', '1', '1', '0', '0', '4311', '0', '1', '1', '1', '1', 'default', '8', '0', '0');
INSERT INTO furniture VALUES ('19979', 'Gold Heart Bauble', 'xm09_bauble_25', 'i', '0', '0', '1', '1', '0', '0', '4286', '1', '1', '1', '1', '1', 'default', '1', '0', '0');
INSERT INTO furniture VALUES ('19980', 'Silver Heart Bauble', 'xm09_bauble_26', 'i', '0', '0', '1', '1', '0', '0', '4306', '1', '1', '1', '1', '1', 'default', '1', '0', '0');
INSERT INTO furniture VALUES ('19981', 'Pink Heart Bauble', 'xm09_bauble_27', 'i', '0', '0', '1', '1', '0', '0', '4279', '1', '1', '1', '1', '1', 'default', '1', '0', '0');
INSERT INTO furniture VALUES ('19982', 'Pink Heart Bauble', 'xm09_bauble_27', 'i', '0', '0', '1', '1', '0', '0', '4313', '1', '1', '1', '1', '1', 'default', '1', '0', '0');
INSERT INTO furniture VALUES ('19983', 'Blue Heart Bauble', 'xm09_bauble_23', 'i', '0', '0', '1', '1', '0', '0', '4292', '1', '1', '1', '1', '1', 'default', '1', '0', '0');
INSERT INTO furniture VALUES ('19984', 'Green Heart Bauble', 'xm09_bauble_24', 'i', '0', '0', '1', '1', '0', '0', '4278', '1', '1', '1', '1', '1', 'default', '1', '0', '0');
INSERT INTO furniture VALUES ('19985', 'Candy Cane', 'xm09_candyCane', 's', '1', '1', '1', '0', '0', '0', '3314', '1', '1', '1', '1', '1', 'default', '4', '0', '0');
INSERT INTO furniture VALUES ('19986', 'Big Stocking', 'xm09_stocking', 'i', '0', '0', '1', '1', '0', '0', '4280', '1', '1', '1', '1', '1', 'default', '1', '0', '0');
INSERT INTO furniture VALUES ('19994', 'Fountain', 'ads_twi_fountn', 's', '2', '2', '1', '0', '0', '0', '3301', '1', '1', '1', '1', '1', 'default', '2', '0', '0');
INSERT INTO furniture VALUES ('19995', 'Clock Tower wall', 'ads_twi_dvdr2', 's', '2', '1', '1', '0', '0', '0', '3302', '1', '1', '1', '1', '1', 'default', '2', '0', '0');
INSERT INTO furniture VALUES ('19996', 'Standing Rose Bouquet', 'ads_twi_roses', 's', '1', '1', '1', '0', '0', '0', '3304', '1', '1', '1', '1', '1', 'default', '1', '0', '0');
INSERT INTO furniture VALUES ('19997', 'Cake on Table with Presents', 'ads_twi_table', 's', '2', '2', '1', '0', '0', '0', '3297', '1', '1', '1', '1', '1', 'default', '2', '0', '0');
INSERT INTO furniture VALUES ('19998', 'Volturi Royal Chair', 'ads_twi_chair', 's', '1', '1', '1', '0', '1', '0', '3300', '1', '1', '1', '1', '1', 'default', '1', '0', '0');
INSERT INTO furniture VALUES ('19999', 'Half wall', 'ads_twi_dvdr1', 's', '2', '1', '1', '0', '0', '0', '3303', '1', '1', '1', '1', '1', 'default', '1', '0', '0');
INSERT INTO furniture VALUES ('20000', 'Broken Piano', 'ads_twi_piano', 's', '2', '2', '1', '0', '0', '0', '3299', '1', '1', '1', '1', '1', 'default', '1', '0', '0');
INSERT INTO furniture VALUES ('20001', 'ads_twi_tower name', 'ads_twi_tower', 's', '1', '1', '1', '0', '0', '0', '3298', '1', '1', '1', '1', '1', 'default', '1', '0', '0');
INSERT INTO furniture VALUES ('20002', 'Toolbox', 'ads_twi_toolbx', 's', '1', '1', '1', '0', '0', '0', '3296', '1', '1', '1', '1', '1', 'default', '2', '0', '0');
INSERT INTO furniture VALUES ('20003', 'Mist', 'ads_twi_mist', 's', '1', '1', '0', '1', '0', '1', '3308', '1', '1', '1', '1', '1', 'default', '2', '0', '0');
INSERT INTO furniture VALUES ('20011', 'Water Hydrant', 'urban_wpost', 's', '1', '1', '1', '0', '0', '0', '3272', '1', '1', '1', '1', '1', 'default', '2', '0', '0');
INSERT INTO furniture VALUES ('20010', 'Pavement Slab', 'urban_sidewalk', 's', '2', '2', '0.2', '1', '0', '1', '3274', '1', '1', '1', '1', '1', 'default', '4', '0', '0');
INSERT INTO furniture VALUES ('20008', 'City Bench (Dirty)', 'urban_bench', 's', '2', '1', '1', '0', '1', '0', '3269', '1', '1', '1', '1', '1', 'default', '1', '0', '0');
INSERT INTO furniture VALUES ('20007', 'Taxi Sofa', 'urban_carsofa', 's', '2', '1', '1', '0', '1', '0', '3268', '1', '1', '1', '1', '1', 'default', '1', '0', '0');
INSERT INTO furniture VALUES ('20014', 'Concrete Block', 'urban_blocker', 's', '1', '1', '1', '0', '0', '0', '3270', '1', '1', '1', '1', '1', 'default', '1', '0', '0');
INSERT INTO furniture VALUES ('20013', 'Garbage Bin', 'urban_bin', 's', '1', '1', '1', '0', '0', '0', '3266', '1', '1', '1', '1', '1', 'default', '2', '0', '0');
INSERT INTO furniture VALUES ('20012', 'Mesh Fencing', 'urban_fence', 's', '1', '2', '1', '0', '0', '0', '3267', '1', '1', '1', '1', '1', 'default', '1', '0', '0');
INSERT INTO furniture VALUES ('20015', 'Basketball Pole', 'urban_bsktbll', 's', '1', '1', '1', '0', '0', '0', '3271', '1', '1', '1', '1', '1', 'default', '1', '0', '0');
INSERT INTO furniture VALUES ('20025', 'Terracotta Pillar', 'pillar*6', 's', '1', '1', '1', '0', '0', '0', '1609', '1', '1', '1', '1', '1', 'default', '1', '0', '0');
INSERT INTO furniture VALUES ('20026', 'Urban Iced Bookcase', 'shelves_norja*4', 's', '1', '1', '1', '0', '0', '0', '1795', '1', '1', '1', '1', '1', 'default', '1', '0', '0');
INSERT INTO furniture VALUES ('20027', 'Black Mode Double Bed', 'bed_polyfon*2', 's', '2', '3', '1.8', '0', '0', '0', '1895', '1', '1', '1', '1', '1', 'bed', '1', '0', '0');
INSERT INTO furniture VALUES ('20028', 'Blue Iced Angle', 'divider_nor5*6', 's', '1', '1', '1', '0', '0', '0', '1995', '1', '1', '1', '1', '1', 'default', '2', '0', '0');
INSERT INTO furniture VALUES ('20029', 'Valentine\'s Cauldron', 'val_cauldron', 's', '1', '1', '1', '0', '0', '0', '2103', '1', '1', '1', '1', '1', 'vendingmachine', '0', '25', '0');
INSERT INTO furniture VALUES ('20030', 'Aqua Pura Module 5', 'pura_mdl5*1', 's', '1', '1', '1', '0', '1', '0', '2509', '1', '1', '1', '1', '1', 'default', '1', '0', '0');
INSERT INTO furniture VALUES ('20031', 'Aqua One Way Gate', 'one_way_door*1', 's', '1', '1', '0.001', '0', '0', '0', '2597', '1', '1', '1', '1', '1', 'onewaygate', '2', '0', '0');
INSERT INTO furniture VALUES ('20032', 'Power Globe', 'exe_globe', 's', '1', '1', '1', '0', '0', '0', '2672', '1', '1', '1', '1', '1', 'default', '10', '0', '0');
INSERT INTO furniture VALUES ('20034', 'Latte Diner Corner', 'diner_bardesk_corner*5', 's', '1', '1', '1', '1', '0', '0', '2874', '1', '1', '1', '1', '1', 'default', '1', '0', '0');
INSERT INTO furniture VALUES ('20035', 'Bubbles', 'fx_bubble', 's', '1', '1', '1', '1', '0', '0', '3012', '0', '0', '1', '0', '1', 'rentals', '2', '0', '0');
INSERT INTO furniture VALUES ('20036', 'Safety Cone', 'bump_tottero', 's', '1', '1', '1', '0', '0', '0', '3087', '1', '1', '1', '0', '1', 'default', '1', '0', '0');
INSERT INTO furniture VALUES ('20037', 'ads_calip_parasol name', 'ads_calip_parasol', 's', '1', '1', '1', '0', '0', '0', '3195', '1', '1', '1', '1', '1', 'default', '2', '0', '0');
INSERT INTO furniture VALUES ('20041', '2010 Poster', 'year2010', 'i', '0', '0', '1', '1', '0', '0', '4313', '1', '1', '1', '1', '1', 'default', '3', '0', '0');
INSERT INTO furniture VALUES ('20042', 'Party Lantern', 'party_lantern', 's', '1', '1', '0', '1', '0', '1', '3327', '1', '1', '1', '1', '1', 'default', '2', '0', '0');
INSERT INTO furniture VALUES ('20043', 'Party Lights', 'party_lights', 'i', '0', '0', '1', '0', '0', '0', '4310', '1', '1', '1', '1', '1', 'default', '2', '0', '0');
INSERT INTO furniture VALUES ('20047', 'Soothing Stick', 'rela_stick', 's', '1', '1', '1', '0', '0', '0', '3240', '1', '1', '1', '1', '1', 'default', '3', '0', '0');
INSERT INTO furniture VALUES ('20048', 'Mall Lift', 'ads_mall_elevator', 's', '1', '1', '0.001', '0', '0', '0', '3306', '1', '1', '0', '1', '1', 'teleport', '1', '0', '0');
INSERT INTO furniture VALUES ('20050', 'Flatscreen TV', 'xm09_infotv', 'i', '0', '0', '1', '1', '0', '0', '4309', '1', '1', '1', '1', '1', 'default', '2', '0', '0');
INSERT INTO furniture VALUES ('20051', 'Twilight Trophy', 'ads_twi_trophy', 's', '1', '1', '1', '1', '0', '0', '3311', '1', '1', '1', '1', '1', 'trophy', '1', '0', '0');
INSERT INTO furniture VALUES ('20053', 'Painting', 'ads_twi_paint', 'i', '0', '0', '1', '1', '0', '0', '4272', '1', '1', '1', '1', '1', 'default', '1', '0', '0');
INSERT INTO furniture VALUES ('20054', 'Window with Candles', 'ads_twi_windw', 'i', '0', '0', '1', '1', '0', '0', '4277', '1', '1', '1', '1', '1', 'default', '2', '0', '0');
INSERT INTO furniture VALUES ('20055', 'Truck and Motorcycles', 'ads_twi_bwall2', 'i', '0', '0', '1', '1', '0', '0', '4276', '1', '1', '1', '1', '1', 'default', '2', '0', '0');
INSERT INTO furniture VALUES ('20056', 'Dream Catcher', 'ads_twi_dreamc', 'i', '0', '0', '1', '1', '0', '0', '4273', '1', '1', '1', '1', '1', 'default', '1', '0', '0');
INSERT INTO furniture VALUES ('20057', 'Barn Wall', 'ads_twi_bwall1', 'i', '0', '0', '1', '1', '0', '0', '4274', '1', '1', '1', '1', '1', 'default', '3', '0', '0');
INSERT INTO furniture VALUES ('20059', 'Arabian Wall', 'arabian_wall', 'i', '0', '0', '1', '1', '0', '0', '4287', '1', '1', '1', '1', '1', 'default', '2', '0', '0');
INSERT INTO furniture VALUES ('20060', 'DEAL_HC_1', 'DEAL_HC_1', 'h', '0', '0', '0', '0', '0', '0', '0', '0', '0', '1', '0', '0', 'default', '0', '0', '0');
INSERT INTO furniture VALUES ('20072', 'ads_gsArcade_1 name', 'ads_gsArcade_1', 's', '1', '1', '1', '1', '0', '0', '3277', '1', '1', '1', '1', '1', 'default', '2', '0', '0');
INSERT INTO furniture VALUES ('20063', 'Hot Choc Machine', 'xm09_cocoa', 's', '1', '1', '1', '1', '0', '0', '3337', '1', '1', '1', '1', '1', 'vendingmachine', '0', '10', '0');
INSERT INTO furniture VALUES ('20064', 'Astro-Bar', 'sf_mbar', 's', '1', '1', '1', '1', '0', '0', '3273', '1', '1', '1', '1', '1', 'vendingmachine', '0', '44', '0');
INSERT INTO furniture VALUES ('20074', 'Silver MTV EMA Trophy', 'ads_mtvtrophy_silver', 's', '1', '1', '1', '0', '0', '0', '3281', '1', '1', '1', '1', '1', 'default', '1', '0', '0');
INSERT INTO furniture VALUES ('20075', 'ads_spang_sleep', 'ads_spang_sleep', 's', '1', '3', '0.8', '1', '0', '0', '3280', '1', '1', '1', '1', '1', 'bed', '1', '0', '0');
INSERT INTO furniture VALUES ('20076', 'Gold MTV EMA Trophy', 'ads_mtvtrophy_gold', 's', '1', '1', '1', '0', '0', '0', '3279', '1', '1', '1', '1', '1', 'default', '1', '0', '0');
INSERT INTO furniture VALUES ('20077', 'ktchn_hlthNut name', 'ktchn_hlthNut', 's', '1', '1', '1', '1', '0', '0', '3307', '1', '1', '1', '1', '1', 'default', '3', '0', '0');
INSERT INTO furniture VALUES ('20078', 'Chicken', 'petfood8', 's', '1', '1', '1', '1', '0', '0', '3325', '1', '1', '1', '1', '1', 'default', '1', '0', '0');
INSERT INTO furniture VALUES ('20079', 'nest_plow_reg', 'nest_plow_reg', 's', '1', '1', '1', '1', '0', '0', '3318', '1', '1', '1', '1', '1', 'default', '1', '0', '0');
INSERT INTO furniture VALUES ('20080', 'Yellow Pet Snuggle', 'nest_snug_yel', 's', '1', '1', '1', '1', '0', '0', '3319', '1', '1', '1', '1', '1', 'default', '1', '0', '0');
INSERT INTO furniture VALUES ('20081', 'Salmon', 'petfood9', 's', '1', '1', '1', '1', '0', '0', '3322', '1', '1', '1', '1', '1', 'default', '1', '0', '0');
INSERT INTO furniture VALUES ('20082', 'Leveling Cake', 'petfood10', 's', '1', '1', '1', '1', '0', '0', '3326', '1', '1', '1', '1', '1', 'default', '1', '0', '0');
INSERT INTO furniture VALUES ('20083', 'Ice Apples', 'petfood7', 's', '1', '1', '1', '1', '0', '0', '3321', '1', '1', '1', '1', '1', 'default', '1', '0', '0');
INSERT INTO furniture VALUES ('20084', 'Red Apples', 'petfood6', 's', '1', '1', '1', '1', '0', '0', '3323', '1', '1', '1', '1', '1', 'default', '1', '0', '0');
INSERT INTO furniture VALUES ('20085', 'Green Pet Snuggle', 'nest_snug_grn', 's', '1', '1', '1', '1', '0', '0', '3310', '1', '1', '1', '1', '1', 'default', '1', '0', '0');
INSERT INTO furniture VALUES ('20086', 'nest_snug_red', 'nest_snug_red', 's', '1', '1', '1', '1', '0', '0', '3317', '1', '1', '1', '1', '1', 'default', '1', '0', '0');
INSERT INTO furniture VALUES ('20087', 'Green Pet Snuggle', 'nest_snug_grn', 's', '1', '1', '1', '1', '0', '0', '3023', '1', '1', '1', '1', '1', 'default', '1', '0', '0');
INSERT INTO furniture VALUES ('20088', 'nest_plow_bro', 'nest_plow_bro', 's', '1', '1', '1', '1', '0', '0', '3309', '1', '1', '1', '1', '1', 'default', '1', '0', '0');
INSERT INTO furniture VALUES ('20089', 'Red Pet Pillow', 'nest_plow_red', 's', '1', '1', '1', '1', '0', '0', '3320', '1', '1', '1', '1', '1', 'default', '1', '0', '0');
INSERT INTO furniture VALUES ('20090', 'nest_snug_blu', 'nest_snug_blu', 's', '1', '1', '1', '1', '0', '0', '3315', '1', '1', '1', '1', '1', 'default', '1', '0', '0');
INSERT INTO furniture VALUES ('20091', 'Green Apples', 'petfood5', 's', '1', '1', '1', '1', '0', '0', '3324', '1', '1', '1', '1', '1', 'default', '1', '0', '0');
INSERT INTO furniture VALUES ('20092', 'Blue Pet Pillow', 'nest_plow_blu', 's', '1', '1', '1', '1', '0', '0', '3316', '1', '1', '1', '1', '1', 'default', '1', '0', '0');
INSERT INTO furniture VALUES ('20093', 'Giant Bauble', 'xm09_lrgBauble', 's', '1', '1', '1', '1', '0', '0', '3313', '1', '1', '1', '1', '1', 'default', '10', '0', '0');
INSERT INTO furniture VALUES ('20094', 'nest_dirt', 'nest_dirt', 's', '1', '1', '1', '1', '0', '0', '3331', '1', '1', '1', '1', '1', 'default', '1', '0', '0');
INSERT INTO furniture VALUES ('20095', 'nest_snug_prp', 'nest_snug_prp', 's', '1', '1', '1', '1', '0', '0', '3332', '1', '1', '1', '1', '1', 'default', '1', '0', '0');
INSERT INTO furniture VALUES ('20096', 'nest_nest', 'nest_nest', 's', '1', '1', '1', '1', '0', '0', '3334', '1', '1', '1', '1', '1', 'default', '1', '0', '0');
INSERT INTO furniture VALUES ('20097', 'nest_nails', 'nest_nails', 's', '1', '1', '1', '1', '0', '0', '3336', '1', '1', '1', '1', '1', 'default', '1', '0', '0');
INSERT INTO furniture VALUES ('20098', 'nest_basket', 'nest_basket', 's', '1', '1', '1', '1', '0', '0', '3333', '1', '1', '1', '1', '1', 'default', '1', '0', '0');
INSERT INTO furniture VALUES ('20099', 'Polar Bear Nest', 'nest_ice', 's', '1', '1', '1', '1', '0', '0', '3339', '1', '1', '1', '1', '1', 'default', '1', '0', '0');
INSERT INTO furniture VALUES ('20100', 'nest_plow_skl', 'nest_plow_skl', 's', '1', '1', '1', '1', '0', '0', '3341', '1', '1', '1', '1', '1', 'default', '1', '0', '0');
INSERT INTO furniture VALUES ('20101', 'nest_snug_bla', 'nest_snug_bla', 's', '1', '1', '1', '1', '0', '0', '3338', '1', '1', '1', '1', '1', 'default', '1', '0', '0');
INSERT INTO furniture VALUES ('20102', 'The Moodi Machine', 'ads_cl_moodi', 's', '1', '1', '1', '1', '0', '0', '3342', '1', '1', '1', '1', '1', 'vendingmachine', '1', '46,47,45', '0');
INSERT INTO furniture VALUES ('20103', 'org_chairpnk', 'org_chairpnk', 's', '1', '1', '1.2', '0', '1', '0', '3354', '1', '1', '1', '1', '1', 'default', '0', '0', '0');
INSERT INTO furniture VALUES ('20104', 'org_tblpnk', 'org_tblpnk', 's', '1', '1', '1', '1', '0', '0', '3352', '1', '1', '1', '1', '1', 'default', '1', '0', '0');
INSERT INTO furniture VALUES ('20105', 'org_lampblk', 'org_lampblk', 's', '1', '1', '1.2', '0', '0', '0', '3353', '1', '1', '1', '1', '1', 'default', '2', '0', '0');
INSERT INTO furniture VALUES ('20106', 'org_lamppnk', 'org_lamppnk', 's', '1', '1', '1.2', '0', '0', '0', '3348', '1', '1', '1', '1', '1', 'default', '2', '0', '0');
INSERT INTO furniture VALUES ('20107', 'org_table', 'org_table', 's', '2', '2', '1', '1', '0', '0', '3356', '1', '1', '1', '1', '1', 'default', '2', '0', '0');
INSERT INTO furniture VALUES ('20108', 'china_tiger', 'china_tiger', 's', '1', '1', '1', '1', '0', '0', '3344', '1', '1', '1', '1', '1', 'default', '1', '0', '0');
INSERT INTO furniture VALUES ('20109', 'xm09_trophy name', 'xm09_trophy', 's', '1', '1', '1', '1', '0', '0', '3351', '1', '1', '1', '1', '1', 'default', '1', '0', '0');
INSERT INTO furniture VALUES ('20110', 'china_plmTree name', 'china_plmTree', 's', '1', '1', '1', '1', '0', '0', '3355', '1', '1', '1', '1', '1', 'default', '2', '0', '0');
INSERT INTO furniture VALUES ('20111', 'org_chairblk', 'org_chairblk', 's', '1', '1', '1.2', '0', '1', '0', '3349', '1', '1', '1', '1', '1', 'default', '0', '0', '0');
INSERT INTO furniture VALUES ('20112', 'org_tblblk', 'org_tblblk', 's', '1', '1', '1', '1', '0', '0', '3347', '1', '1', '1', '1', '1', 'default', '1', '0', '0');
INSERT INTO furniture VALUES ('20113', 'org_chrblk', 'org_chrblk', 's', '1', '1', '1.2', '0', '1', '0', '3345', '1', '1', '1', '1', '1', 'default', '0', '0', '0');
INSERT INTO furniture VALUES ('20114', 'china_tigrSeat name', 'china_tigrSeat', 's', '1', '2', '1', '1', '0', '0', '3346', '1', '1', '1', '1', '1', 'default', '1', '0', '0');
INSERT INTO furniture VALUES ('20115', 'org_chrpnk', 'org_chrpnk', 's', '1', '1', '1.2', '0', '1', '0', '3350', '1', '1', '1', '1', '1', 'default', '0', '0', '0');
INSERT INTO furniture VALUES ('20116', 'ads_chups name', 'ads_chups', 's', '1', '1', '1', '1', '0', '0', '3367', '1', '1', '1', '1', '1', 'vendingmachine', '1', '48', '0');
INSERT INTO furniture VALUES ('20117', 'bling_fridge', 'bling_fridge', 's', '1', '1', '1', '0', '0', '0', '3366', '1', '1', '1', '1', '1', 'vendingmachine', '0', '50', '0');
INSERT INTO furniture VALUES ('20118', 'petfood12 name', 'petfood12', 's', '1', '1', '1', '1', '0', '0', '3370', '1', '1', '1', '1', '1', 'default', '1', '0', '0');
INSERT INTO furniture VALUES ('20119', 'ads_droetker_paula name', 'ads_droetker_paula', 's', '1', '1', '1', '1', '0', '0', '3365', '1', '1', '1', '1', '1', 'vendingmachine', '1', '49', '0');
INSERT INTO furniture VALUES ('20120', 'petfood11 name', 'petfood11', 's', '1', '1', '1', '1', '0', '0', '3358', '1', '1', '1', '1', '1', 'default', '1', '0', '0');
INSERT INTO furniture VALUES ('20121', 'bling_chair_a', 'bling_chair_a', 's', '1', '1', '1', '0', '1', '0', '3368', '1', '1', '1', '1', '1', 'default', '2', '0', '0');
INSERT INTO furniture VALUES ('20122', 'petfood13 name', 'petfood13', 's', '1', '1', '1', '1', '0', '0', '3359', '1', '1', '1', '1', '1', 'default', '1', '0', '0');
INSERT INTO furniture VALUES ('20123', 'bling_pool', 'bling_pool', 's', '3', '1', '0.01', '0', '1', '0', '3369', '1', '1', '1', '1', '1', 'default', '2', '0', '0');
INSERT INTO furniture VALUES ('20124', 'bling_toilet', 'bling_toilet', 's', '1', '1', '1.2', '0', '1', '0', '3362', '1', '1', '1', '1', '1', 'default', '0', '0', '0');
INSERT INTO furniture VALUES ('20125', 'val09_floor', 'val09_floor', 's', '2', '2', '0', '1', '0', '1', '3363', '1', '1', '1', '1', '1', 'default', '6', '0', '0');
INSERT INTO furniture VALUES ('20126', 'bling_chair_c', 'bling_chair_c', 's', '1', '1', '1', '0', '1', '0', '3361', '1', '1', '1', '1', '1', 'default', '2', '0', '0');
INSERT INTO furniture VALUES ('20127', 'bling_chair_b', 'bling_chair_b', 's', '1', '1', '1', '0', '1', '0', '3360', '1', '1', '1', '1', '1', 'default', '2', '0', '0');
INSERT INTO furniture VALUES ('20128', 'bling_shwr name', 'bling_shwr', 's', '1', '1', '0', '1', '0', '1', '3396', '1', '1', '1', '1', '1', 'default', '2', '0', '0');
INSERT INTO furniture VALUES ('20129', 'bling_bed name', 'bling_bed', 's', '2', '3', '1.6', '0', '1', '0', '3364', '1', '1', '1', '1', '1', 'default', '2', '0', '0');
INSERT INTO furniture VALUES ('20130', 'bling_sofa', 'bling_sofa', 's', '2', '1', '1.5', '0', '1', '0', '3371', '1', '1', '1', '1', '1', 'default', '2', '0', '0');
INSERT INTO furniture VALUES ('20131', 'val09_floor2', 'val09_floor2', 's', '2', '2', '0', '1', '0', '1', '3357', '1', '1', '1', '1', '1', 'default', '6', '0', '0');
INSERT INTO furniture VALUES ('20132', 'teddy_basic', 'teddy_basic', 's', '1', '1', '1', '1', '0', '0', '3393', '1', '1', '1', '1', '1', 'default', '1', '0', '0');
INSERT INTO furniture VALUES ('20133', 'teddy_pendergrass', 'teddy_pendergrass', 's', '1', '1', '1', '1', '0', '0', '3384', '1', '1', '1', '1', '1', 'default', '1', '0', '0');
INSERT INTO furniture VALUES ('20134', 'val_hSeat_1 name', 'val_hSeat*1', 's', '1', '1', '1', '0', '1', '0', '3386', '1', '1', '1', '1', '1', 'default', '1', '0', '0');
INSERT INTO furniture VALUES ('20135', 'val_hSeat_2 name', 'val_hSeat*2', 's', '1', '1', '1', '0', '1', '0', '3387', '1', '1', '1', '1', '1', 'default', '1', '0', '0');
INSERT INTO furniture VALUES ('20136', 'val_hSeat_3 name', 'val_hSeat*3', 's', '1', '1', '1', '0', '1', '0', '3388', '1', '1', '1', '1', '1', 'default', '1', '0', '0');
INSERT INTO furniture VALUES ('20137', 'val_hSeat_4 name', 'val_hSeat*4', 's', '1', '1', '1', '0', '1', '0', '3389', '1', '1', '1', '1', '1', 'default', '1', '0', '0');
INSERT INTO furniture VALUES ('20138', 'val_hSeat_5 name', 'val_hSeat*5', 's', '1', '1', '1', '0', '1', '0', '3390', '1', '1', '1', '1', '1', 'default', '1', '0', '0');
INSERT INTO furniture VALUES ('20139', 'val_hSeat_6 name', 'val_hSeat*6', 's', '1', '1', '1', '0', '1', '0', '3391', '1', '1', '1', '1', '1', 'default', '1', '0', '0');
INSERT INTO furniture VALUES ('20140', 'val_hSeat_7 name', 'val_hSeat*7', 's', '1', '1', '1', '0', '1', '0', '3392', '1', '1', '1', '1', '1', 'default', '1', '0', '0');
INSERT INTO furniture VALUES ('20141', 'Valentines gift basket', 'val_basket', 's', '1', '1', '1', '1', '0', '0', '3382', '1', '1', '1', '1', '1', 'default', '2', '0', '0');
INSERT INTO furniture VALUES ('20142', 'teddy_bear', 'teddy_bear', 's', '1', '1', '1', '1', '0', '0', '3385', '1', '1', '1', '1', '1', 'default', '1', '0', '0');
INSERT INTO furniture VALUES ('20143', 'teddy_pink', 'teddy_pink', 's', '1', '1', '1', '1', '0', '0', '3383', '1', '1', '1', '1', '1', 'default', '1', '0', '0');
INSERT INTO furniture VALUES ('20144', 'bling_fridge_restricted name', 'bling_fridge_restricted', 's', '1', '1', '1', '0', '0', '0', '3394', '1', '1', '1', '1', '1', 'vendingmachine', '0', '50', '0');
INSERT INTO furniture VALUES ('20145', 'ads_percyrock name', 'ads_percyrock', 's', '2', '2', '1', '1', '0', '0', '3395', '1', '1', '1', '1', '1', 'default', '2', '0', '0');
INSERT INTO furniture VALUES ('20146', 'Bubble Juice Can', 'md_can', 'i', '0', '0', '1', '1', '0', '0', '4025', '1', '1', '1', '1', '1', 'default', '2', '0', '0');
INSERT INTO furniture VALUES ('20147', 'ads_idol_l_logo name', 'ads_idol_l_logo', 'i', '0', '0', '1', '1', '0', '0', '4243', '1', '1', '1', '1', '1', 'default', '3', '0', '0');
INSERT INTO furniture VALUES ('20148', 'Latin American Idol TV', 'ads_idol_l_tv', 'i', '0', '0', '1', '1', '0', '0', '4245', '1', '1', '1', '1', '1', 'default', '1', '0', '0');
INSERT INTO furniture VALUES ('20149', 'Big MTV', 'ads_mtv_bigtv', 'i', '0', '0', '1', '1', '0', '0', '4241', '1', '1', '1', '1', '1', 'default', '1', '0', '0');
INSERT INTO furniture VALUES ('20150', 'Small MTV', 'ads_mtv_tv', 'i', '0', '0', '1', '1', '0', '0', '4242', '1', '1', '1', '1', '1', 'default', '1', '0', '0');
INSERT INTO furniture VALUES ('20151', 'flag_singapore', 'flag_singapore', 'i', '0', '0', '1', '1', '0', '0', '4249', '1', '1', '1', '1', '1', 'default', '1', '0', '0');
INSERT INTO furniture VALUES ('20152', 'Old Curtain', 'hween09_curt', 'i', '0', '0', '1', '1', '0', '0', '4266', '1', '1', '1', '1', '1', 'default', '2', '0', '0');
INSERT INTO furniture VALUES ('20153', 'flag_columbia', 'flag_columbia', 'i', '0', '0', '1', '1', '0', '0', '4258', '1', '1', '1', '1', '1', 'default', '1', '0', '0');
INSERT INTO furniture VALUES ('20154', 'flag_chile', 'flag_chile', 'i', '0', '0', '1', '1', '0', '0', '4256', '1', '1', '1', '1', '1', 'default', '1', '0', '0');
INSERT INTO furniture VALUES ('20155', 'flag_ecuador', 'flag_ecuador', 'i', '0', '0', '1', '1', '0', '0', '4268', '1', '1', '1', '1', '1', 'default', '1', '0', '0');
INSERT INTO furniture VALUES ('20156', 'flag_dominicanrepublic', 'flag_dominicanrepublic', 'i', '0', '0', '1', '1', '0', '0', '4265', '1', '1', '1', '1', '1', 'default', '1', '0', '0');
INSERT INTO furniture VALUES ('20157', 'flag_newzealand', 'flag_newzealand', 'i', '0', '0', '1', '1', '0', '0', '4260', '1', '1', '1', '1', '1', 'default', '1', '0', '0');
INSERT INTO furniture VALUES ('20158', 'flag_malaysia', 'flag_malaysia', 'i', '0', '0', '1', '1', '0', '0', '4252', '1', '1', '1', '1', '1', 'default', '1', '0', '0');
INSERT INTO furniture VALUES ('20159', 'Loading Poster', 'byesw_loadscreen', 'i', '0', '0', '1', '1', '0', '0', '4267', '1', '1', '1', '1', '1', 'default', '3', '0', '0');
INSERT INTO furniture VALUES ('20160', 'flag_venezl', 'flag_venezl', 'i', '0', '0', '1', '1', '0', '0', '4254', '1', '1', '1', '1', '1', 'default', '1', '0', '0');
INSERT INTO furniture VALUES ('20161', 'flag_algeria', 'flag_algeria', 'i', '0', '0', '1', '1', '0', '0', '4270', '1', '1', '1', '1', '1', 'default', '1', '0', '0');
INSERT INTO furniture VALUES ('20162', 'flag_tunisia', 'flag_tunisia', 'i', '0', '0', '1', '1', '0', '0', '4248', '1', '1', '1', '1', '1', 'default', '1', '0', '0');
INSERT INTO furniture VALUES ('20163', 'flag_panama', 'flag_panama', 'i', '0', '0', '1', '1', '0', '0', '4262', '1', '1', '1', '1', '1', 'default', '1', '0', '0');
INSERT INTO furniture VALUES ('20164', 'flag_mexico', 'flag_mexico', 'i', '0', '0', '1', '1', '0', '0', '4250', '1', '1', '1', '1', '1', 'default', '1', '0', '0');
INSERT INTO furniture VALUES ('20165', 'flag_argentina', 'flag_argentina', 'i', '0', '0', '1', '1', '0', '0', '4261', '1', '1', '1', '1', '1', 'default', '1', '0', '0');
INSERT INTO furniture VALUES ('20166', 'flag_philippines', 'flag_philippines', 'i', '0', '0', '1', '1', '0', '0', '4251', '1', '1', '1', '1', '1', 'default', '1', '0', '0');
INSERT INTO furniture VALUES ('20167', 'flag_greece', 'flag_greece', 'i', '0', '0', '1', '1', '0', '0', '4253', '1', '1', '1', '1', '1', 'default', '1', '0', '0');
INSERT INTO furniture VALUES ('20168', 'flag_peru', 'flag_peru', 'i', '0', '0', '1', '1', '0', '0', '4246', '1', '1', '1', '1', '1', 'default', '1', '0', '0');
INSERT INTO furniture VALUES ('20169', 'flag_morocco', 'flag_morocco', 'i', '0', '0', '1', '1', '0', '0', '4264', '1', '1', '1', '1', '1', 'default', '1', '0', '0');
INSERT INTO furniture VALUES ('20170', 'flag_turkey', 'flag_turkey', 'i', '0', '0', '1', '1', '0', '0', '4255', '1', '1', '1', '1', '1', 'default', '1', '0', '0');
INSERT INTO furniture VALUES ('20171', 'Blue Long Bauble', 'xm09_bauble_12', 'i', '0', '0', '1', '1', '0', '0', '4304', '1', '1', '1', '1', '1', 'default', '1', '0', '0');
INSERT INTO furniture VALUES ('20172', 'Purple Long Bauble', 'xm09_bauble_16', 'i', '0', '0', '1', '1', '0', '0', '4303', '1', '1', '1', '1', '1', 'default', '1', '0', '0');
INSERT INTO furniture VALUES ('20173', 'Red Long Bauble', 'xm09_bauble_17', 'i', '0', '0', '1', '1', '0', '0', '4281', '1', '1', '1', '1', '1', 'default', '1', '0', '0');
INSERT INTO furniture VALUES ('20174', 'Silver Long Bauble', 'xm09_bauble_15', 'i', '0', '0', '1', '1', '0', '0', '4301', '1', '1', '1', '1', '1', 'default', '1', '0', '0');
INSERT INTO furniture VALUES ('20175', 'Silver Round Bauble', 'xm09_bauble_10', 'i', '0', '0', '1', '1', '0', '0', '4293', '1', '1', '1', '1', '1', 'default', '1', '0', '0');
INSERT INTO furniture VALUES ('20176', 'Gold Round Bauble', 'xm09_bauble_9', 'i', '0', '0', '1', '1', '0', '0', '4294', '1', '1', '1', '1', '1', 'default', '1', '0', '0');
INSERT INTO furniture VALUES ('20177', 'Green Long Bauble', 'xm09_bauble_18', 'i', '0', '0', '1', '1', '0', '0', '4298', '1', '1', '1', '1', '1', 'default', '1', '0', '0');
INSERT INTO furniture VALUES ('20178', 'Green Long Bauble', 'xm09_bauble_13', 'i', '0', '0', '1', '1', '0', '0', '4299', '1', '1', '1', '1', '1', 'default', '1', '0', '0');
INSERT INTO furniture VALUES ('20179', 'Blue Round Bauble', 'xm09_bauble_2', 'i', '0', '0', '1', '1', '0', '0', '4297', '1', '1', '1', '1', '1', 'default', '1', '0', '0');
INSERT INTO furniture VALUES ('20180', 'Red Round Bauble', 'xm09_bauble_1', 'i', '0', '0', '1', '1', '0', '0', '4300', '1', '1', '1', '1', '1', 'default', '1', '0', '0');
INSERT INTO furniture VALUES ('20181', 'Red Heart Bauble', 'xm09_bauble_22', 'i', '0', '0', '1', '1', '0', '0', '4302', '1', '1', '1', '1', '1', 'default', '1', '0', '0');
INSERT INTO furniture VALUES ('20182', 'Green Round Bauble', 'xm09_bauble_3', 'i', '0', '0', '1', '1', '0', '0', '4285', '1', '1', '1', '1', '1', 'default', '1', '0', '0');
INSERT INTO furniture VALUES ('20183', 'Silver Long Bauble', 'xm09_bauble_21', 'i', '0', '0', '1', '1', '0', '0', '4305', '1', '1', '1', '1', '1', 'default', '1', '0', '0');
INSERT INTO furniture VALUES ('20184', 'Green Round Bauble', 'xm09_bauble_8', 'i', '0', '0', '1', '1', '0', '0', '4295', '1', '1', '1', '1', '1', 'default', '1', '0', '0');
INSERT INTO furniture VALUES ('20185', 'Gold Round Bauble', 'xm09_bauble_4', 'i', '0', '0', '1', '1', '0', '0', '4282', '1', '1', '1', '1', '1', 'default', '1', '0', '0');
INSERT INTO furniture VALUES ('20186', 'Silver Round Bauble', 'xm09_bauble_5', 'i', '0', '0', '1', '1', '0', '0', '4288', '1', '1', '1', '1', '1', 'default', '1', '0', '0');
INSERT INTO furniture VALUES ('20187', 'Red Long Bauble', 'xm09_bauble_11', 'i', '0', '0', '1', '1', '0', '0', '4289', '1', '1', '1', '1', '1', 'default', '1', '0', '0');
INSERT INTO furniture VALUES ('20188', 'Gold Long Bauble', 'xm09_bauble_20', 'i', '0', '0', '1', '1', '0', '0', '4296', '1', '1', '1', '1', '1', 'default', '1', '0', '0');
INSERT INTO furniture VALUES ('20190', 'val_table1 name', 'val_table1', 's', '1', '1', '1', '0', '0', '0', '3397', '1', '1', '1', '1', '1', 'default', '0', '0', '0');
INSERT INTO furniture VALUES ('20191', 'Gold Long Bauble', 'xm09_bauble_14', 'i', '0', '0', '1', '1', '0', '0', '4290', '1', '1', '1', '1', '1', 'default', '1', '0', '0');
INSERT INTO furniture VALUES ('20192', 'Blue Round Bauble', 'xm09_bauble_7', 'i', '0', '0', '1', '1', '0', '0', '4291', '1', '1', '1', '1', '1', 'default', '1', '0', '0');
INSERT INTO furniture VALUES ('20193', 'Red Round Bauble', 'xm09_bauble_6', 'i', '0', '0', '1', '1', '0', '0', '4284', '1', '1', '1', '1', '1', 'default', '1', '0', '0');
INSERT INTO furniture VALUES ('20194', 'Blue Long Bauble', 'xm09_bauble_19', 'i', '0', '0', '1', '1', '0', '0', '4283', '1', '1', '1', '1', '1', 'default', '1', '0', '0');
INSERT INTO furniture VALUES ('20195', 'china_pstr3 name', 'china_pstr3', 'i', '0', '0', '1', '1', '0', '0', '4314', '1', '1', '1', '1', '1', 'default', '1', '0', '0');
INSERT INTO furniture VALUES ('20196', 'ads_tv_jaapuisto name', 'ads_tv_jaapuisto', 'i', '0', '0', '1', '1', '0', '0', '4315', '1', '1', '1', '1', '1', 'default', '2', '0', '0');
INSERT INTO furniture VALUES ('20197', 'Empire State Building Clock', 'ads_percyw', 'i', '0', '0', '1', '1', '0', '0', '4322', '1', '1', '1', '1', '1', 'default', '1', '0', '0');
INSERT INTO furniture VALUES ('20198', 'val09_wdrobe_b', 'val09_wdrobe_b', 'i', '0', '0', '1', '1', '0', '0', '4320', '1', '1', '1', '1', '1', 'default', '2', '0', '0');
INSERT INTO furniture VALUES ('20199', 'val09_wall2', 'val09_wall2', 'i', '0', '0', '1', '1', '0', '0', '4316', '1', '1', '1', '1', '1', 'default', '5', '0', '0');
INSERT INTO furniture VALUES ('20200', 'bling_sink', 'bling_sink', 'i', '0', '0', '1', '1', '0', '0', '4319', '1', '1', '1', '1', '1', 'default', '2', '0', '0');
INSERT INTO furniture VALUES ('20201', 'val09_wall1', 'val09_wall1', 'i', '0', '0', '1', '1', '0', '0', '4318', '1', '1', '1', '1', '1', 'default', '10', '0', '0');
INSERT INTO furniture VALUES ('20202', 'bling_cabinet', 'bling_cabinet', 'i', '0', '0', '1', '1', '0', '0', '4321', '1', '1', '1', '1', '1', 'default', '3', '0', '0');
INSERT INTO furniture VALUES ('20204', 'val09_wdrobe_g', 'val09_wdrobe_g', 'i', '0', '0', '1', '1', '0', '0', '4317', '1', '1', '1', '1', '1', 'default', '2', '0', '0');
INSERT INTO furniture VALUES ('20207', 'rare_ironmaiden name', 'rare_ironmaiden', 's', '1', '1', '0.001', '0', '0', '0', '3399', '1', '1', '0', '1', '1', 'teleport', '2', '0', '0');
INSERT INTO furniture VALUES ('20208', 'rare_trex name', 'rare_trex', 's', '3', '7', '1', '0', '0', '0', '3398', '1', '1', '1', '1', '1', 'default', '1', '0', '0');
INSERT INTO furniture VALUES ('20209', 'beanstalk', 'beanstalk', 's', '1', '1', '1', '1', '0', '0', '3401', '1', '1', '1', '1', '1', 'default', '6', '0', '0');
INSERT INTO furniture VALUES ('20210', 'rare_vdoll name', 'rare_vdoll', 's', '1', '1', '1', '0', '0', '0', '3403', '1', '1', '1', '1', '1', 'default', '10', '0', '0');
INSERT INTO furniture VALUES ('20211', 'Sofa Mamut', 'Sofa Mamut', 's', '2', '1', '1', '0', '1', '0', '3402', '1', '1', '1', '1', '1', 'default', '0', '0', '0');
INSERT INTO furniture VALUES ('20212', 'crystal_patch', 'crystal_patch', 's', '3', '3', '0', '0', '0', '1', '3400', '1', '1', '1', '1', '1', 'default', '3', '0', '0');
INSERT INTO furniture VALUES ('20213', 'ads_boost_surfb name', 'ads_boost_surfb', 'i', '0', '0', '1', '1', '0', '0', '4323', '1', '1', '1', '1', '1', 'default', '0', '0', '0');
INSERT INTO furniture VALUES ('20214', 'ads_tlc_wheel name', 'ads_tlc_wheel', 'i', '0', '0', '1', '1', '0', '0', '4324', '1', '1', '1', '1', '1', 'habbowheel', '1', '0', '0');
INSERT INTO furniture VALUES ('20220', 'Pigs', 'a0 pet5', 's', '1', '1', '1', '1', '0', '0', '1532', '0', '0', '0', '0', '0', 'pet', '0', '0', '0');
INSERT INTO furniture VALUES ('20221', 'White moon lupine', 'garden_lupin4', 's', '1', '1', '1e-009', '0', '0', '0', '3419', '1', '1', '1', '1', '1', 'default', '3', '0', '0');
INSERT INTO furniture VALUES ('20222', 'Gold rush', 'garden_mursu3', 's', '1', '1', '1', '0', '0', '0', '3408', '1', '1', '1', '1', '1', 'default', '0', '0', '0');
INSERT INTO furniture VALUES ('20223', 'Purple Lupine', 'garden_lupin5', 's', '1', '1', '1', '0', '0', '0', '3411', '1', '1', '1', '1', '1', 'default', '3', '0', '0');
INSERT INTO furniture VALUES ('20224', 'Violet Blossom', 'garden_seed', 's', '1', '1', '1', '0', '0', '0', '3406', '1', '1', '1', '1', '1', 'default', '1', '0', '0');
INSERT INTO furniture VALUES ('20225', 'Snapping teleporter', 'garden_flytrap', 's', '1', '1', '0.001', '0', '0', '0', '3420', '1', '1', '1', '1', '1', 'teleport', '1', '0', '0');
INSERT INTO furniture VALUES ('20226', 'Pink pandemic', 'garden_flo3', 's', '1', '1', '1e-015', '1', '0', '1', '3426', '1', '1', '1', '1', '1', 'default', '1', '0', '0');
INSERT INTO furniture VALUES ('20227', 'Belching pod', 'garden_volcano', 's', '2', '2', '1', '0', '0', '0', '3424', '1', '1', '1', '1', '1', 'alert', '2', '0', '0');
INSERT INTO furniture VALUES ('20228', 'Wonder lamp', 'garden_flolamp', 's', '1', '1', '1', '0', '0', '0', '3415', '1', '1', '1', '1', '1', 'default', '2', '0', '0');
INSERT INTO furniture VALUES ('20229', 'Red rush', 'garden_mursu2', 's', '1', '1', '1', '0', '0', '0', '3412', '1', '1', '1', '1', '1', 'default', '1', '0', '0');
INSERT INTO furniture VALUES ('20230', 'Star flower', 'garden_jyrki', 's', '1', '1', '1', '0', '0', '0', '3405', '1', '1', '1', '1', '1', 'default', '8', '0', '0');
INSERT INTO furniture VALUES ('20231', 'White rush', 'garden_mursu4', 's', '1', '1', '1', '0', '0', '0', '3414', '1', '1', '1', '1', '1', 'default', '1', '0', '0');
INSERT INTO furniture VALUES ('20232', 'Garden leaves', 'garden_leaves', 's', '1', '1', '1', '0', '0', '0', '3425', '1', '1', '1', '1', '1', 'default', '3', '0', '0');
INSERT INTO furniture VALUES ('20233', 'Sky blue lupine', 'garden_lupin2', 's', '1', '1', '1', '0', '0', '0', '3416', '1', '1', '1', '1', '1', 'default', '3', '0', '0');
INSERT INTO furniture VALUES ('20234', 'Red lupine', 'garden_lupin3', 's', '1', '1', '1', '0', '0', '0', '3407', '1', '1', '1', '1', '1', 'default', '3', '0', '0');
INSERT INTO furniture VALUES ('20235', 'Pink rush', 'garden_mursu', 's', '1', '1', '1', '0', '0', '0', '3404', '1', '1', '1', '1', '1', 'default', '1', '0', '0');
INSERT INTO furniture VALUES ('20238', 'Bauhinia orchid tree', 'garden_orchtree', 's', '1', '1', '1', '0', '0', '0', '3413', '1', '1', '1', '1', '1', 'default', '2', '0', '0');
INSERT INTO furniture VALUES ('20237', 'Yellow happiness', 'garden_flo2', 's', '1', '1', '0', '1', '0', '1', '3409', '1', '1', '1', '1', '1', 'default', '1', '0', '0');
INSERT INTO furniture VALUES ('20239', 'Orange lupine', 'garden_lupin1', 's', '1', '1', '1', '0', '0', '0', '3421', '1', '1', '1', '1', '1', 'default', '3', '0', '0');
INSERT INTO furniture VALUES ('20240', 'Weird staring bush', 'garden_staringbush', 's', '1', '3', '1', '0', '0', '0', '3417', '1', '1', '1', '1', '1', 'default', '3', '0', '0');
INSERT INTO furniture VALUES ('20241', 'ads_grefusa_yum name', 'ads_grefusa_yum', 's', '1', '1', '1', '1', '0', '0', '3423', '1', '1', '1', '1', '1', 'vendingmachine', '1', '51, 52', '0');
INSERT INTO furniture VALUES ('20242', 'Blue passion', 'garden_flo1', 's', '1', '1', '1e-008', '1', '0', '1', '3418', '1', '1', '1', '1', '1', 'default', '1', '0', '0');
INSERT INTO furniture VALUES ('20243', 'Duck grass', 'garden_jungle', 's', '1', '1', '1', '1', '0', '0', '3422', '1', '1', '1', '1', '1', 'default', '1', '0', '0');
INSERT INTO furniture VALUES ('20244', 'merger_chest name', 'merger_chest', 's', '2', '1', '1', '0', '0', '0', '3455', '1', '1', '1', '1', '1', 'default', '2', '0', '0');
INSERT INTO furniture VALUES ('20245', 'Suave Fireplace', 'hc2_frplc', 's', '1', '2', '1', '0', '0', '0', '3458', '1', '1', '1', '1', '1', 'default', '2', '0', '0');
INSERT INTO furniture VALUES ('20246', 'Leather Bar Stool', 'hc2_barchair', 's', '1', '1', '1.7', '0', '1', '0', '3439', '1', '1', '1', '1', '1', 'default', '1', '0', '0');
INSERT INTO furniture VALUES ('20247', 'runway_display name', 'runway_display', 's', '1', '1', '1', '0', '0', '0', '3457', '1', '1', '1', '1', '1', 'default', '1', '0', '0');
INSERT INTO furniture VALUES ('20248', 'runway_bigchr_5 name', 'runway_bigchr_5', 's', '1', '1', '0.8', '1', '1', '0', '3463', '1', '1', '1', '1', '1', 'default', '1', '0', '0');
INSERT INTO furniture VALUES ('20249', 'runway_bigchr_4 name', 'runway_bigchr_4', 's', '1', '1', '0.8', '1', '1', '0', '3435', '1', '1', '1', '1', '1', 'default', '1', '0', '0');
INSERT INTO furniture VALUES ('20250', 'VIP Duvan', 'hc3_dc', 's', '1', '3', '1', '0', '0', '0', '3461', '1', '1', '1', '1', '1', 'bed', '1', '0', '0');
INSERT INTO furniture VALUES ('20252', 'Glass Table', 'hc2_sofatbl', 's', '2', '2', '0.5', '1', '0', '0', '3434', '1', '1', '1', '1', '1', 'default', '1', '0', '0');
INSERT INTO furniture VALUES ('20253', 'runway_stool name', 'runway_stool', 's', '1', '1', '1.2', '0', '1', '0', '3442', '1', '1', '1', '1', '1', 'default', '1', '0', '0');
INSERT INTO furniture VALUES ('20254', 'runway_dvdr name', 'runway_dvdr', 's', '2', '1', '1', '0', '0', '0', '3456', '1', '1', '1', '1', '1', 'default', '1', '0', '0');
INSERT INTO furniture VALUES ('20255', 'runway_block_2 name', 'runway_block_2', 's', '2', '2', '0.8', '1', '0', '1', '3443', '1', '1', '1', '1', '1', 'default', '10', '0', '0');
INSERT INTO furniture VALUES ('20256', 'runway_bigchr_1 name', 'runway_bigchr_1', 's', '1', '1', '0.8', '0', '1', '0', '3462', '1', '1', '1', '1', '1', 'default', '1', '0', '0');
INSERT INTO furniture VALUES ('20257', 'Black Lamp', 'hc2_biglamp', 's', '1', '1', '1', '0', '0', '0', '3446', '1', '1', '1', '1', '1', 'default', '2', '0', '0');
INSERT INTO furniture VALUES ('20258', 'Leather Sofa', 'hc2_sofa', 's', '2', '1', '1', '0', '1', '0', '3452', '1', '1', '1', '1', '1', 'default', '1', '0', '0');
INSERT INTO furniture VALUES ('20259', 'Trendy Rug', 'hc2_carpet', 's', '3', '5', '0', '1', '0', '1', '3440', '1', '1', '1', '1', '1', 'default', '1', '0', '0');
INSERT INTO furniture VALUES ('20260', 'runway_block_1 name', 'runway_block_1', 's', '2', '2', '0.8', '1', '0', '1', '3433', '1', '1', '1', '1', '1', 'default', '10', '0', '0');
INSERT INTO furniture VALUES ('20261', 'runway_bench name', 'runway_bench', 's', '2', '1', '1.4', '0', '1', '0', '3464', '1', '1', '1', '1', '1', 'default', '1', '0', '0');
INSERT INTO furniture VALUES ('20262', 'runway_chair_2 name', 'runway_chair_2', 's', '1', '1', '1.4', '0', '1', '0', '3429', '1', '1', '1', '1', '1', 'default', '1', '0', '0');
INSERT INTO furniture VALUES ('20263', 'ads_cheetos name', 'ads_cheetos', 's', '1', '1', '1', '0', '0', '0', '3453', '1', '1', '1', '1', '1', 'vendingmachine', '1', '51, 52', '0');
INSERT INTO furniture VALUES ('20264', 'VIP Coffee Table', 'hc3_table', 's', '2', '2', '0.5', '1', '0', '0', '3466', '1', '1', '1', '1', '1', 'default', '1', '0', '0');
INSERT INTO furniture VALUES ('20265', 'runway_bigchr_3 name', 'runway_bigchr_3', 's', '1', '1', '0.8', '1', '1', '0', '3454', '1', '1', '1', '1', '1', 'default', '1', '0', '0');
INSERT INTO furniture VALUES ('20266', 'VIP Stool', 'hc3_stool', 's', '1', '1', '1.7', '0', '1', '0', '3448', '1', '1', '1', '1', '1', 'default', '1', '0', '0');
INSERT INTO furniture VALUES ('20267', 'VIP Sofa', 'hc3_sofa', 's', '2', '1', '1', '0', '1', '0', '3441', '1', '1', '1', '1', '1', 'default', '1', '0', '0');
INSERT INTO furniture VALUES ('20268', 'runway_bigchr_2 name', 'runway_bigchr_2', 's', '1', '1', '0.8', '1', '1', '0', '3427', '1', '1', '1', '1', '1', 'default', '1', '0', '0');
INSERT INTO furniture VALUES ('20269', 'Leather Armchair', 'hc2_armchair', 's', '1', '1', '1', '1', '1', '0', '3436', '1', '1', '1', '1', '1', 'default', '1', '0', '0');
INSERT INTO furniture VALUES ('20270', 'runway_table_2 name', 'runway_table_2', 's', '2', '1', '1', '0', '0', '0', '3444', '1', '1', '1', '1', '1', 'default', '1', '0', '0');
INSERT INTO furniture VALUES ('20271', 'runway_table_1 name', 'runway_table_1', 's', '3', '2', '1', '1', '0', '0', '3460', '1', '1', '1', '1', '1', 'default', '3', '0', '0');
INSERT INTO furniture VALUES ('20272', 'runway_manqn_1 name', 'runway_manqn_1', 's', '1', '1', '1', '0', '0', '0', '3437', '1', '1', '1', '1', '1', 'default', '5', '0', '0');
INSERT INTO furniture VALUES ('20273', 'Leather Duvan', 'hc2_dvn', 's', '1', '3', '1', '0', '0', '0', '3459', '1', '1', '1', '1', '1', 'bed', '1', '0', '0');
INSERT INTO furniture VALUES ('20274', 'VIP Light', 'hc3_light', 's', '2', '1', '0', '1', '0', '1', '3465', '1', '1', '1', '1', '1', 'default', '2', '0', '0');
INSERT INTO furniture VALUES ('20275', 'VIP Shelves', 'hc3_shelf', 's', '3', '1', '1.75', '1', '0', '0', '3438', '1', '1', '1', '1', '1', 'default', '2', '0', '0');
INSERT INTO furniture VALUES ('20276', 'runway_head name', 'runway_head', 's', '1', '1', '1', '1', '0', '0', '3432', '1', '1', '1', '1', '1', 'default', '7', '0', '0');
INSERT INTO furniture VALUES ('20277', 'runway_manqn_2 name', 'runway_manqn_2', 's', '1', '1', '1', '0', '0', '0', '3467', '1', '1', '1', '1', '1', 'default', '5', '0', '0');
INSERT INTO furniture VALUES ('20278', 'Black Divider', 'hc2_divider', 's', '1', '3', '1', '0', '0', '0', '3449', '1', '1', '1', '1', '1', 'default', '1', '0', '0');
INSERT INTO furniture VALUES ('20279', 'Espresso Machine', 'hc2_coffee', 's', '1', '1', '1', '0', '0', '0', '3450', '1', '1', '1', '1', '1', 'vendingmachine', '0', '9,8,14,15,6,10,11,12,17,13', '0');
INSERT INTO furniture VALUES ('20280', 'Service Trolley', 'hc2_cart', 's', '1', '1', '1', '0', '0', '0', '3430', '1', '1', '1', '1', '1', 'default', '1', '0', '0');
INSERT INTO furniture VALUES ('20281', 'VIP Bar Desk', 'hc3_bard', 's', '2', '1', '1.05', '1', '0', '0', '3445', '1', '1', '1', '1', '1', 'default', '1', '0', '0');
INSERT INTO furniture VALUES ('20282', 'VIP Lamp', 'hc3_hugelamp', 's', '1', '1', '0', '1', '0', '1', '3447', '1', '1', '1', '1', '1', 'default', '2', '0', '0');
INSERT INTO furniture VALUES ('20283', 'VIP Divider', 'hc3_divider', 's', '1', '3', '1', '0', '0', '0', '3431', '1', '1', '1', '1', '1', 'default', '1', '0', '0');
INSERT INTO furniture VALUES ('20284', 'Black Vase', 'hc2_vase', 's', '1', '1', '1', '0', '0', '0', '3428', '1', '1', '1', '1', '1', 'default', '1', '0', '0');
INSERT INTO furniture VALUES ('20285', 'runway_chair_1 name', 'runway_chair_1', 's', '1', '1', '1.4', '0', '1', '0', '3451', '1', '1', '1', '1', '1', 'default', '1', '0', '0');
INSERT INTO furniture VALUES ('20286', 'Green been vines', 'garden_wall', 'i', '0', '0', '1', '1', '0', '0', '4325', '1', '1', '1', '1', '1', 'default', '3', '0', '0');
INSERT INTO furniture VALUES ('20287', 'ads_tv_yle name', 'ads_tv_yle', 'i', '0', '0', '1', '1', '0', '0', '4326', '1', '1', '1', '1', '1', 'default', '2', '0', '0');
INSERT INTO furniture VALUES ('20288', 'VIP Wall Art', 'hc3_walldeco', 'i', '0', '0', '1', '1', '0', '0', '4329', '1', '1', '1', '1', '1', 'default', '10', '0', '0');
INSERT INTO furniture VALUES ('20289', 'runway_shelf name', 'runway_shelf', 'i', '0', '0', '1', '1', '0', '0', '4327', '1', '1', '1', '1', '1', 'default', '4', '0', '0');
INSERT INTO furniture VALUES ('20290', 'ads_nokia_x6 name', 'ads_nokia_x6', 'i', '0', '0', '1', '1', '0', '0', '4330', '1', '1', '1', '1', '1', 'default', '2', '0', '0');
INSERT INTO furniture VALUES ('20291', 'ads_target_wall name', 'ads_target_wall', 'i', '0', '0', '1', '1', '0', '0', '4332', '1', '1', '1', '1', '1', 'default', '1', '0', '0');
INSERT INTO furniture VALUES ('20292', 'runway_fabric name', 'runway_fabric', 'i', '0', '0', '1', '1', '0', '0', '4331', '1', '1', '1', '1', '1', 'default', '8', '0', '0');
INSERT INTO furniture VALUES ('20293', 'ads_latrobe_flag name', 'ads_latrobe_flag', 'i', '0', '0', '1', '1', '0', '0', '4328', '1', '1', '1', '1', '1', 'default', '1', '0', '0');
INSERT INTO furniture VALUES ('20295', 'Camera', 'camera', 's', '1', '1', '1', '0', '0', '0', '263', '1', '1', '1', '1', '1', 'default', '1', '0', '0');
INSERT INTO furniture VALUES ('20296', 'Holly', 'holly', 'i', '0', '0', '0', '1', '0', '0', '4001', '1', '1', '1', '1', '1', 'default', '1', '0', '0');
INSERT INTO furniture VALUES ('20299', 'Wetting Ice Sculpture', 'wed_icesculp', 's', '1', '1', '3', '0', '0', '0', '3488', '1', '1', '1', '1', '1', 'default', '2', '0', '0');
INSERT INTO furniture VALUES ('20300', 'Wedding Car', 'wed_carsofa', 's', '2', '1', '1.25', '0', '1', '0', '3493', '1', '1', '1', '1', '1', 'default', '1', '0', '0');
INSERT INTO furniture VALUES ('20297', 'Wedding Arch', 'wed_arch', 's', '3', '1', '0.001', '1', '0', '1', '3483', '1', '1', '1', '1', '1', 'default', '2', '0', '0');
INSERT INTO furniture VALUES ('20298', 'Wedding Plant', 'wed_plant', 's', '1', '1', '1', '0', '0', '0', '3482', '1', '1', '1', '1', '1', 'default', '2', '0', '0');
INSERT INTO furniture VALUES ('20301', 'Terrier', 'a0 pet3', 's', '1', '1', '1', '1', '0', '0', '4026', '0', '0', '0', '0', '0', 'pet', '0', '0', '0');
INSERT INTO furniture VALUES ('20303', 'Bear', 'a0 pet4', 's', '1', '1', '1', '1', '0', '0', '4027', '0', '0', '0', '0', '0', 'pet', '0', '0', '0');
INSERT INTO furniture VALUES ('20304', 'Cat', 'a0 pet1', 's', '1', '1', '1', '1', '0', '0', '453', '0', '0', '0', '0', '0', 'pet', '0', '0', '0');
INSERT INTO furniture VALUES ('20305', 'Dog', 'a0 pet0', 's', '1', '1', '1', '1', '0', '0', '452', '0', '0', '0', '0', '0', 'pet', '0', '0', '0');
INSERT INTO furniture VALUES ('20306', 'Crocodile', 'a0 pet2', 's', '1', '1', '1', '1', '0', '0', '1290', '0', '0', '0', '0', '0', 'pet', '0', '0', '0');
INSERT INTO furniture VALUES ('20392', 'Cereal', 'ads_chocapic', 's', '2', '1', '1', '0', '0', '0', '3486', '1', '1', '1', '1', '1', 'default', '1', '0', '0');
INSERT INTO furniture VALUES ('20393', 'TV Chocapic', 'ads_tv_chocapic_01', 'i', '0', '0', '0', '0', '0', '0', '4335', '1', '1', '1', '1', '1', 'default', '1', '0', '0');
INSERT INTO furniture VALUES ('20394', 'Poster Super Pop', 'ads_super_pop', 'i', '0', '0', '0', '0', '0', '0', '4333', '1', '1', '1', '1', '1', 'default', '1', '0', '0');
INSERT INTO furniture VALUES ('20395', 'Caja Fiesta', 'party_crate1_1', 's', '0', '1', '1', '0', '0', '0', '3487', '1', '1', '1', '1', '1', 'default', '1', '0', '0');
INSERT INTO furniture VALUES ('20396', 'Caja Fiesta', 'party_crate1_2', 's', '0', '1', '1', '0', '0', '0', '3489', '1', '1', '1', '1', '1', 'default', '1', '0', '0');
INSERT INTO furniture VALUES ('20397', 'Caja Fiesta', 'party_crate1_3', 's', '0', '1', '1', '0', '0', '0', '3481', '1', '1', '1', '1', '1', 'default', '1', '0', '0');
INSERT INTO furniture VALUES ('20398', 'Caja Fiesta', 'party_crate1_4', 's', '0', '1', '1', '0', '0', '0', '3485', '1', '1', '1', '1', '1', 'default', '1', '0', '0');
INSERT INTO furniture VALUES ('20399', 'Caja Fiesta', 'party_crate2_1', 's', '0', '1', '1', '0', '0', '0', '3480', '1', '1', '1', '1', '1', 'default', '1', '0', '0');
INSERT INTO furniture VALUES ('20400', 'Caja Fiesta', 'party_crate2_2', 's', '0', '1', '1', '0', '0', '0', '3490', '1', '1', '1', '1', '1', 'default', '1', '0', '0');
INSERT INTO furniture VALUES ('20401', 'Caja Fiesta', 'party_crate2_3', 's', '0', '1', '1', '0', '0', '0', '3491', '1', '1', '1', '1', '1', 'default', '1', '0', '0');
INSERT INTO furniture VALUES ('20402', 'Caja Fiesta', 'party_crate2_4', 's', '0', '1', '1', '0', '0', '0', '3492', '1', '1', '1', '1', '1', 'default', '1', '0', '0');
INSERT INTO furniture VALUES ('20403', 'Stereo Fiesta', 'party_djset', 's', '1', '3', '3', '0', '0', '0', '3484', '1', '1', '1', '1', '1', 'default', '1', '0', '0');
INSERT INTO furniture VALUES ('20354', 'fball_score_y', 'fball_score_y', 's', '1', '1', '1', '0', '0', '0', '3506', '1', '1', '1', '1', '1', 'yellow_score', '1', '0', '0');
INSERT INTO furniture VALUES ('20353', 'fball_score_r', 'fball_score_r', 's', '1', '1', '1', '0', '0', '0', '3522', '1', '1', '1', '1', '1', 'red_score', '1', '0', '0');
INSERT INTO furniture VALUES ('20352', 'fball_score_g', 'fball_score_g', 's', '1', '1', '1', '0', '0', '0', '3512', '1', '1', '1', '1', '1', 'green_score', '1', '0', '0');
INSERT INTO furniture VALUES ('20351', 'fball_score_b', 'fball_score_b', 's', '1', '1', '1', '0', '0', '0', '3496', '1', '1', '1', '1', '1', 'blue_score', '1', '0', '0');
INSERT INTO furniture VALUES ('20350', 'fball_ptch8 name', 'fball_ptch8', 's', '3', '3', '0', '1', '0', '0', '3502', '1', '1', '1', '1', '1', 'default', '1', '0', '0');
INSERT INTO furniture VALUES ('20349', 'fball_ptch7 name', 'fball_ptch7', 's', '3', '3', '0', '1', '0', '0', '3509', '1', '1', '1', '1', '1', 'default', '1', '0', '0');
INSERT INTO furniture VALUES ('20348', 'fball_ptch6 name', 'fball_ptch6', 's', '3', '3', '0', '1', '0', '0', '3517', '1', '1', '1', '1', '1', 'default', '1', '0', '0');
INSERT INTO furniture VALUES ('20347', 'fball_ptch5 name', 'fball_ptch5', 's', '3', '3', '0', '1', '0', '0', '3498', '1', '1', '1', '1', '1', 'default', '1', '0', '0');
INSERT INTO furniture VALUES ('20346', 'fball_ptch4 name', 'fball_ptch4', 's', '3', '3', '0', '1', '0', '0', '3504', '1', '1', '1', '1', '1', 'default', '1', '0', '0');
INSERT INTO furniture VALUES ('20345', 'fball_ptch3 name', 'fball_ptch3', 's', '3', '3', '0', '1', '0', '0', '3513', '1', '1', '1', '1', '1', 'default', '1', '0', '0');
INSERT INTO furniture VALUES ('20344', 'fball_ptch2 name', 'fball_ptch2', 's', '3', '3', '0', '1', '0', '0', '3511', '1', '1', '1', '1', '1', 'default', '1', '0', '0');
INSERT INTO furniture VALUES ('20343', 'fball_ptch1', 'fball_ptch1', 's', '3', '3', '0', '1', '0', '0', '3524', '1', '1', '1', '1', '1', 'default', '1', '0', '0');
INSERT INTO furniture VALUES ('20342', 'fball_ptch0', 'fball_ptch0', 's', '3', '3', '0', '1', '0', '0', '3520', '1', '1', '1', '1', '1', 'default', '1', '0', '0');
INSERT INTO furniture VALUES ('20341', 'fball_counter name', 'fball_counter', 's', '2', '1', '1', '0', '0', '0', '3525', '1', '1', '1', '1', '1', 'counter', '2', '0', '0');
INSERT INTO furniture VALUES ('20340', 'fball_gate name', 'fball_gate', 's', '1', '1', '0', '0', '0', '1', '3516', '1', '1', '1', '1', '1', 'fbgate', '1', '0', '0');
INSERT INTO furniture VALUES ('20339', 'fball_light name', 'fball_light', 's', '1', '1', '1', '0', '0', '0', '3499', '1', '1', '1', '1', '1', 'default', '2', '0', '0');
INSERT INTO furniture VALUES ('20338', 'fball_goal_y name', 'fball_goal_y', 's', '3', '1', '0', '1', '0', '1', '3523', '1', '1', '1', '1', '1', 'yellow_goal', '1', '0', '0');
INSERT INTO furniture VALUES ('20337', 'fball_goal_r name', 'fball_goal_r', 's', '3', '1', '0', '1', '0', '1', '3514', '1', '1', '1', '1', '1', 'red_goal', '1', '0', '0');
INSERT INTO furniture VALUES ('20336', 'fball_goal_g', 'fball_goal_g', 's', '3', '1', '0', '1', '0', '1', '3519', '1', '1', '1', '1', '1', 'green_goal', '1', '0', '0');
INSERT INTO furniture VALUES ('20335', 'fball_goal_b name', 'fball_goal_b', 's', '3', '1', '0', '1', '0', '1', '3515', '1', '1', '1', '1', '1', 'blue_goal', '1', '0', '0');
INSERT INTO furniture VALUES ('20334', 'fball_fnc3 name', 'fball_fnc3', 's', '1', '3', '0', '0', '0', '0', '3495', '1', '1', '1', '1', '1', 'default', '1', '0', '0');
INSERT INTO furniture VALUES ('20333', 'fball_fnc1 name', 'fball_fnc1', 's', '1', '1', '0', '0', '0', '0', '3501', '1', '1', '1', '1', '1', 'default', '1', '0', '0');
INSERT INTO furniture VALUES ('20332', 'fball_crnr name', 'fball_crnr', 's', '1', '1', '0', '0', '0', '0', '3503', '1', '1', '1', '1', '1', 'default', '1', '0', '0');
INSERT INTO furniture VALUES ('20331', 'fball_cote name', 'fball_cote', 's', '3', '1', '0', '0', '0', '0', '3507', '1', '1', '1', '1', '1', 'default', '1', '0', '0');
INSERT INTO furniture VALUES ('20330', 'fball_bench name', 'fball_bench', 's', '3', '1', '1', '0', '1', '0', '3494', '1', '1', '1', '1', '1', 'default', '1', '0', '0');
INSERT INTO furniture VALUES ('20329', 'fball_ball5 name', 'fball_ball5', 's', '1', '1', '0', '0', '0', '1', '3518', '1', '1', '1', '1', '1', 'ball', '2', '0', '0');
INSERT INTO furniture VALUES ('20328', 'fball_ball4 name', 'fball_ball4', 's', '1', '1', '0', '0', '0', '1', '3521', '1', '1', '1', '1', '1', 'ball', '2', '0', '0');
INSERT INTO furniture VALUES ('20327', 'fball_ball3 name', 'fball_ball3', 's', '1', '1', '0', '0', '0', '1', '3497', '1', '1', '1', '1', '1', 'ball', '2', '0', '0');
INSERT INTO furniture VALUES ('20326', 'fball_ball2 name', 'fball_ball2', 's', '1', '1', '0', '0', '0', '1', '3510', '1', '1', '1', '1', '1', 'ball', '2', '0', '0');
INSERT INTO furniture VALUES ('20325', 'fball_ball name', 'fball_ball', 's', '1', '1', '0', '0', '0', '1', '3508', '1', '1', '1', '1', '1', 'ball', '2', '0', '0');
INSERT INTO furniture VALUES ('20324', 'fball_audbench name', 'fball_audbench', 's', '4', '1', '1', '0', '1', '0', '3500', '1', '1', '1', '1', '1', 'default', '3', '0', '0');
INSERT INTO furniture VALUES ('20323', 'fball_trophy name', 'fball_trophy', 's', '1', '1', '1', '0', '0', '0', '3505', '1', '1', '1', '1', '1', 'trophy', '1', '0', '0');
INSERT INTO furniture VALUES ('20428', 'Pac-Sun', 'ads_capri_arcade', 's', '2', '1', '1', '0', '0', '0', '3553', '1', '1', '1', '1', '1', 'default', '1', '0', '0');
INSERT INTO furniture VALUES ('20427', 'Arbolito Sun', 'ads_capri_tree', 's', '2', '1', '1', '0', '0', '0', '3546', '1', '1', '1', '1', '1', 'default', '1', '0', '0');
INSERT INTO furniture VALUES ('20426', 'Tubo De Lava Capri', 'ads_capri_lava', 's', '0', '1', '1', '0', '0', '0', '3536', '1', '1', '1', '1', '1', 'default', '1', '0', '0');
INSERT INTO furniture VALUES ('20425', 'Silla CapriSun', 'ads_capri_chair', 's', '0', '1', '1', '0', '1', '0', '3535', '1', '1', '1', '1', '1', 'default', '1', '0', '0');
INSERT INTO furniture VALUES ('20404', 'Efecto Lido', 'avatar_effect29', 'e', '1', '1', '1', '0', '0', '0', '29', '1', '1', '1', '1', '1', 'default', '1', '0', '0');
INSERT INTO furniture VALUES ('20415', 'Vikingo', 'avatar_effect27', 'e', '1', '1', '1', '0', '0', '0', '27', '1', '1', '1', '1', '1', 'default', '1', '0', '0');
INSERT INTO furniture VALUES ('20317', 'cmp_fish_s name', 'cmp_fish_s', 's', '1', '2', '1', '0', '0', '0', '3468', '1', '1', '1', '1', '1', 'default', '2', '0', '0');
INSERT INTO furniture VALUES ('20316', 'cmp_fish_r name', 'cmp_fish_r', 's', '1', '2', '1', '0', '0', '0', '3477', '1', '1', '1', '1', '1', 'default', '2', '0', '0');
INSERT INTO furniture VALUES ('20315', 'cmp_fish_gr name', 'cmp_fish_gr', 's', '1', '2', '1', '0', '0', '0', '3474', '1', '1', '1', '1', '1', 'default', '2', '0', '0');
INSERT INTO furniture VALUES ('20314', 'cmp_fish_g name', 'cmp_fish_g', 's', '1', '2', '1', '0', '0', '0', '3475', '1', '1', '1', '1', '1', 'default', '2', '0', '0');
INSERT INTO furniture VALUES ('20313', 'cmp_fish_bk name', 'cmp_fish_bk', 's', '1', '2', '1', '0', '0', '0', '3469', '1', '1', '1', '1', '1', 'default', '2', '0', '0');
INSERT INTO furniture VALUES ('20917', 'cmp_fish_s name', 'cmp_fish_s', 's', '1', '2', '1', '0', '0', '0', '3468', '1', '1', '1', '1', '1', 'default', '2', '0', '0');
INSERT INTO furniture VALUES ('21217', 'cmp_fish_s name', 'cmp_fish_s', 's', '1', '2', '1', '0', '0', '0', '3468', '1', '1', '1', '1', '1', 'default', '2', '0', '0');
INSERT INTO furniture VALUES ('21216', 'cmp_fish_r name', 'cmp_fish_r', 's', '1', '2', '1', '0', '0', '0', '3477', '1', '1', '1', '1', '1', 'default', '2', '0', '0');
INSERT INTO furniture VALUES ('21215', 'cmp_fish_gr name', 'cmp_fish_gr', 's', '1', '2', '1', '0', '0', '0', '3474', '1', '1', '1', '1', '1', 'default', '2', '0', '0');
INSERT INTO furniture VALUES ('21214', 'cmp_fish_g name', 'cmp_fish_g', 's', '1', '2', '1', '0', '0', '0', '3475', '1', '1', '1', '1', '1', 'default', '2', '0', '0');
INSERT INTO furniture VALUES ('21213', 'cmp_fish_bk name', 'cmp_fish_bk', 's', '1', '2', '1', '0', '0', '0', '3469', '1', '1', '1', '1', '1', 'default', '2', '0', '0');
INSERT INTO furniture VALUES ('21298', 'cmp_fish_b name', 'cmp_fish_b', 's', '1', '2', '1', '0', '0', '0', '3472', '1', '1', '1', '1', '1', 'default', '2', '0', '0');
INSERT INTO furniture VALUES ('25367', 'bw_ball', 'bw_ball', 's', '1', '1', '1', '0', '0', '1', '3547', '1', '1', '1', '1', '1', 'ball', '2', '0', '0');
INSERT INTO furniture VALUES ('25366', 'bw_table', 'bw_table', 's', '2', '2', '1', '1', '0', '0', '3545', '1', '1', '1', '1', '1', 'default', '2', '0', '0');
INSERT INTO furniture VALUES ('25365', 'bw_chair', 'bw_chair', 's', '1', '1', '0.8', '1', '1', '0', '3544', '1', '1', '1', '1', '1', 'default', '4', '0', '0');
INSERT INTO furniture VALUES ('25364', 'bw_sboard', 'bw_sboard', 's', '2', '1', '0', '0', '0', '0', '3543', '1', '1', '1', '1', '1', 'default', '1', '0', '0');
INSERT INTO furniture VALUES ('25363', 'bw_croc', 'bw_croc', 's', '1', '3', '1', '1', '1', '0', '3542', '1', '1', '1', '1', '1', 'default', '2', '0', '0');
INSERT INTO furniture VALUES ('25362', 'bw_water_2', 'bw_water_2', 's', '2', '2', '0.1', '1', '0', '1', '3541', '1', '1', '1', '1', '1', 'water', '1', '0', '0');
INSERT INTO furniture VALUES ('25361', 'bw_shower', 'bw_shower', 's', '1', '1', '2', '1', '0', '0', '3540', '1', '1', '1', '1', '1', 'default', '2', '0', '0');
INSERT INTO furniture VALUES ('25360', 'bw_ccnuts', 'bw_ccnuts', 's', '1', '1', '1', '0', '0', '0', '3539', '1', '1', '1', '1', '1', 'default', '1', '0', '0');
INSERT INTO furniture VALUES ('25359', 'bw_fin', 'bw_fin', 's', '1', '1', '1', '1', '0', '0', '3538', '1', '1', '1', '1', '1', 'default', '2', '0', '0');
INSERT INTO furniture VALUES ('25357', 'bw_sofa', 'bw_sofa', 's', '2', '1', '1', '1', '1', '0', '3533', '1', '1', '1', '1', '1', 'default', '4', '0', '0');
INSERT INTO furniture VALUES ('25355', 'bw_lgchair', 'bw_lgchair', 's', '1', '1', '3', '0', '1', '0', '3529', '1', '1', '1', '1', '1', 'default', '1', '0', '0');
INSERT INTO furniture VALUES ('25354', 'bw_boat', 'bw_boat', 's', '2', '2', '1', '1', '1', '0', '3527', '1', '1', '1', '1', '1', 'default', '2', '0', '0');
INSERT INTO furniture VALUES ('39911', 'prison_dvdr2', 'prison_dvdr2', 's', '2', '1', '3', '1', '0', '0', '3532', '1', '1', '1', '1', '1', 'default', '4', '0', '0');
INSERT INTO furniture VALUES ('39912', 'prison_gate', 'prison_gate', 's', '1', '1', '0.1', '0', '0', '0', '3526', '1', '1', '1', '1', '1', 'gate', '1', '0', '0');
INSERT INTO furniture VALUES ('39913', 'prison_dvdr1', 'prison_dvdr1', 's', '1', '1', '3', '1', '0', '0', '3534', '1', '1', '1', '1', '1', 'default', '1', '0', '0');
INSERT INTO furniture VALUES ('39914', 'prison_stone', 'prison_stone', 's', '1', '1', '1', '0', '0', '0', '3537', '1', '1', '1', '1', '1', 'default', '1', '0', '0');
INSERT INTO furniture VALUES ('39915', 'prison_tower', 'prison_tower', 's', '1', '1', '3', '1', '0', '1', '3531', '1', '1', '1', '1', '1', 'default', '2', '0', '0');
INSERT INTO furniture VALUES ('39916', 'prison_crnr', 'prison_crnr', 's', '1', '1', '1', '1', '0', '0', '3528', '1', '1', '1', '1', '1', 'default', '1', '0', '0');
INSERT INTO furniture VALUES ('39917', 'hc3_stereo', 'hc3_stereo', 's', '3', '1', '1', '1', '0', '0', '3470', '1', '1', '1', '1', '1', 'default', '1', '0', '0');
INSERT INTO furniture VALUES ('20450', 'Trofeo Pulgar', 'prizetrophy_thumb', 's', '1', '1', '1', '0', '0', '0', '3410', '1', '1', '1', '1', '0', 'trophy', '1', '0', '0');
INSERT INTO furniture VALUES ('39918', 'Jarr?n VIP', 'hc3_vase', 's', '0', '1', '1', '0', '0', '0', '3185', '1', '1', '1', '1', '1', 'default', '1', '0', '0');
INSERT INTO furniture VALUES ('96401', 'Submarino', 'cmp_sub', 's', '7', '1', '3', '0', '0', '0', '3478', '1', '1', '1', '1', '1', 'default', '2', '0', '0');
INSERT INTO furniture VALUES ('96400', 'Nobox Amarillo', 'cmp_nobox_3', 's', '1', '1', '1', '0', '0', '0', '3473', '1', '1', '1', '1', '1', 'default', '2', '0', '0');
INSERT INTO furniture VALUES ('96398', 'Nobox Rojo', 'cmp_nobox', 's', '1', '1', '1', '0', '0', '0', '3476', '1', '1', '1', '1', '1', 'default', '2', '0', '0');
INSERT INTO furniture VALUES ('96399', 'Nobox Azul', 'cmp_nobox_2', 's', '1', '1', '1', '0', '0', '0', '3471', '1', '1', '1', '1', '1', 'default', '2', '0', '0');
INSERT INTO furniture VALUES ('95394', 'bw_sofa_p', 'bw_sofa_p', 's', '2', '1', '1', '1', '1', '0', '3561', '1', '1', '1', '1', '1', 'default', '2', '0', '0');
INSERT INTO furniture VALUES ('95393', 'bw_sofa_g', 'bw_sofa_g', 's', '2', '1', '1', '1', '1', '0', '3575', '1', '1', '1', '1', '1', 'default', '2', '0', '0');
INSERT INTO furniture VALUES ('95392', 'bw_van_g', 'bw_van_g', 's', '2', '2', '1', '0', '1', '0', '3574', '1', '1', '1', '1', '1', 'default', '1', '0', '0');
INSERT INTO furniture VALUES ('95391', 'bw_van_p', 'bw_van_p', 's', '2', '2', '1', '0', '1', '0', '3570', '1', '1', '1', '1', '1', 'default', '1', '0', '0');
INSERT INTO furniture VALUES ('95390', 'bw_table_p', 'bw_table_p', 's', '2', '1', '0', '1', '0', '0', '3578', '1', '1', '1', '1', '1', 'default', '2', '0', '0');
INSERT INTO furniture VALUES ('95389', 'bw_table_g', 'bw_table_g', 's', '2', '2', '1', '1', '0', '0', '3566', '1', '1', '1', '1', '1', 'default', '2', '0', '0');
INSERT INTO furniture VALUES ('95388', 'bw_sboard_p', 'bw_sboard_p', 's', '2', '1', '0', '0', '0', '0', '3571', '1', '1', '1', '1', '1', 'default', '1', '0', '0');
INSERT INTO furniture VALUES ('59918', 'Vase vip', 'hc3_vase', 's', '1', '1', '1', '1', '0', '0', '3479', '1', '1', '1', '1', '1', 'default', '1', '0', '0');
INSERT INTO furniture VALUES ('95387', 'bw_sboard_g', 'bw_sboard_g', 's', '2', '1', '0', '0', '0', '0', '3562', '1', '1', '1', '1', '1', 'default', '1', '0', '0');
INSERT INTO furniture VALUES ('95371', 'Lava', 'Lava', 's', '0', '0', '0', '0', '0', '0', '3021', '1', '1', '1', '1', '1', 'default', '1', '0', '0');
INSERT INTO furniture VALUES ('95386', 'bw_fnc_crnr_p', 'bw_fnc_crnr_p', 's', '1', '2', '1', '0', '0', '0', '3576', '1', '1', '1', '1', '1', 'default', '1', '0', '0');
INSERT INTO furniture VALUES ('95385', 'bw_pool_b1', 'bw_pool_b1', 's', '1', '1', '1', '1', '0', '0', '3560', '1', '1', '1', '1', '1', 'default', '2', '0', '0');
INSERT INTO furniture VALUES ('95374', 'ads_grefusa_surfb', 'ads_grefusa_surfb', 'i', '0', '0', '0', '0', '0', '0', '3600', '1', '1', '1', '1', '1', 'default', '1', '0', '0');
INSERT INTO furniture VALUES ('95375', 'ads_pepsi0', 'ads_pepsi0', 's', '1', '1', '3', '0', '0', '0', '3554', '1', '1', '1', '1', '1', 'vendingmachine', '1', '55', '0');
INSERT INTO furniture VALUES ('95384', 'bw_pool_a1', 'bw_pool_a1', 's', '1', '1', '1', '1', '1', '0', '3577', '1', '1', '1', '1', '1', 'default', '2', '0', '0');
INSERT INTO furniture VALUES ('95383', 'bw_pool_a3', 'bw_pool_a3', 's', '1', '1', '0', '1', '0', '0', '3556', '1', '1', '1', '1', '1', 'default', '2', '0', '0');
INSERT INTO furniture VALUES ('95382', 'bw_pool_a2', 'bw_pool_a2', 's', '2', '1', '1', '1', '0', '0', '3564', '1', '1', '1', '1', '1', 'default', '2', '0', '0');
INSERT INTO furniture VALUES ('95381', 'bw_pool_b2', 'bw_pool_b2', 's', '2', '1', '1', '1', '0', '0', '3565', '1', '1', '1', '1', '1', 'default', '2', '0', '0');
INSERT INTO furniture VALUES ('95380', 'bw_mttrss_g', 'bw_mttrss_g', 's', '1', '3', '0.8', '1', '0', '0', '3558', '1', '1', '1', '1', '1', 'default', '2', '0', '0');
INSERT INTO furniture VALUES ('25368', 'bw_mttrss', 'bw_mttrss', 's', '1', '3', '0.8', '1', '1', '0', '3548', '1', '1', '1', '1', '1', 'default', '2', '0', '0');
INSERT INTO furniture VALUES ('25369', 'bw_van', 'bw_van', 's', '2', '2', '1', '0', '1', '0', '3549', '1', '1', '1', '1', '1', 'default', '1', '0', '0');
INSERT INTO furniture VALUES ('25371', 'bw_fnc_crnr', 'bw_fnc crnr', 's', '1', '2', '1', '1', '0', '0', '3551', '1', '1', '1', '1', '1', 'default', '2', '0', '0');
INSERT INTO furniture VALUES ('25372', 'bw_fnc', 'bw_fnc', 's', '2', '1', '1', '1', '0', '0', '3552', '1', '1', '1', '1', '1', 'default', '2', '0', '0');
INSERT INTO furniture VALUES ('59919', 'Mandibula', 'bw_jaws', 'i', '0', '0', '0', '0', '0', '0', '3602', '1', '1', '1', '1', '1', 'default', '1', '0', '0');
INSERT INTO furniture VALUES ('59939', 'Mandibula', 'bw_jaws', 'i', '0', '0', '0', '0', '0', '0', '3602', '1', '1', '1', '1', '1', 'default', '1', '0', '0');
INSERT INTO furniture VALUES ('95376', 'bw_fnc_p', 'bw_fnc_p', 's', '2', '1', '1', '1', '0', '0', '3569', '1', '1', '1', '1', '1', 'default', '2', '0', '0');
INSERT INTO furniture VALUES ('95377', 'bw_fnc_crnr_g', 'bw_fnc_crnr_g', 's', '1', '2', '1', '1', '0', '0', '3563', '1', '1', '1', '1', '1', 'default', '2', '0', '0');
INSERT INTO furniture VALUES ('95378', 'bw_sofa_p', 'bw_sofa_p', 's', '2', '1', '1', '1', '1', '1', '3567', '1', '1', '1', '1', '1', 'default', '2', '0', '0');
INSERT INTO furniture VALUES ('95379', 'bw_boat_g', 'bw_boat_g', 's', '2', '2', '0.8', '1', '1', '0', '3568', '1', '1', '1', '1', '1', 'default', '2', '0', '0');
INSERT INTO furniture VALUES ('95395', 'bw_fnc_g name', 'bw_fnc_g', 's', '2', '1', '1', '1', '0', '0', '3557', '1', '1', '1', '1', '1', 'default', '2', '0', '0');
INSERT INTO furniture VALUES ('95397', 'bw_tele', 'bw_tele', 's', '1', '1', '3', '0', '0', '0', '3550', '1', '1', '1', '1', '1', 'teleport', '1', '0', '0');
INSERT INTO furniture VALUES ('21001', 'Bast??n de mando', 'avatar_effect26', 'e', '1', '1', '1', '0', '0', '0', '26', '0', '0', '1', '0', '0', 'default', '1', '0', '0');
INSERT INTO furniture VALUES ('21002', 'Llamaradas', 'avatar_effect25', 'e', '1', '1', '1', '0', '0', '0', '25', '0', '0', '1', '0', '0', 'default', '1', '0', '0');
INSERT INTO furniture VALUES ('21003', 'Bajo Lluvia', 'avatar_effect24', 'e', '1', '1', '1', '0', '0', '0', '24', '0', '0', '1', '0', '0', 'default', '1', '0', '0');
INSERT INTO furniture VALUES ('21004', 'Levitaci??n', 'avatar_effect23', 'e', '1', '1', '1', '0', '0', '0', '23', '0', '0', '1', '0', '0', 'default', '1', '0', '0');
INSERT INTO furniture VALUES ('96402', '', 'newitem', 's', '1', '1', '1', '1', '0', '0', '1', '1', '1', '1', '1', '1', 'default', '1', '0', '0');
INSERT INTO furniture VALUES ('10289', 'easel_0', 'easel_0', 's', '1', '1', '1', '0', '0', '0', '3582', '1', '1', '1', '1', '1', 'default', '2', '0', '0');
INSERT INTO furniture VALUES ('10290', 'easel_1', 'easel_1', 's', '1', '1', '1', '0', '0', '0', '3594', '1', '1', '1', '1', '1', 'default', '3', '0', '0');
INSERT INTO furniture VALUES ('10291', 'easel_2', 'easel_2', 's', '1', '1', '1', '0', '0', '0', '3603', '1', '1', '1', '1', '1', 'default', '3', '0', '0');
INSERT INTO furniture VALUES ('10292', 'easel_3', 'easel_3', 's', '1', '1', '1', '1', '0', '0', '3596', '1', '1', '1', '1', '1', 'default', '6', '0', '0');
INSERT INTO furniture VALUES ('10293', 'easel_4', 'easel_4', 's', '1', '1', '1', '0', '0', '0', '3600', '1', '1', '1', '1', '1', 'default', '5', '0', '0');
INSERT INTO furniture VALUES ('10294', 'easel_2', 'easel_2', 's', '1', '1', '1', '0', '0', '0', '3603', '1', '1', '1', '1', '1', 'default', '6', '0', '0');
INSERT INTO furniture VALUES ('10278', 'hosptl_bbag name', 'hosptl_bbag', 's', '1', '3', '1', '0', '0', '0', '3591', '1', '1', '1', '1', '1', 'bed', '2', '0', '0');
INSERT INTO furniture VALUES ('10279', 'hosptl_bed', 'hosptl_bed', 's', '1', '3', '2', '0', '0', '0', '3590', '1', '1', '1', '1', '1', 'bed', '2', '0', '0');
INSERT INTO furniture VALUES ('10280', 'hosptl_cab1', 'hosptl_cab1', 's', '1', '1', '1', '0', '0', '0', '3586', '1', '1', '1', '1', '1', 'vendingmachine', '2', '35', '0');
INSERT INTO furniture VALUES ('10281', 'hosptl_cab2', 'hosptl_cab2', 's', '2', '1', '1', '0', '0', '0', '3608', '1', '1', '1', '1', '1', 'default', '2', '0', '0');
INSERT INTO furniture VALUES ('10282', 'hosptl_curtain', 'hosptl_curtain', 's', '3', '1', '1', '0', '0', '0', '3588', '1', '1', '1', '1', '1', 'default', '1', '0', '0');
INSERT INTO furniture VALUES ('10283', 'hosptl_defibs', 'hosptl_defibs', 's', '1', '1', '1', '0', '0', '0', '3606', '1', '1', '1', '1', '1', 'default', '2', '0', '0');
INSERT INTO furniture VALUES ('10284', 'hosptl_light', 'hosptl_light', 's', '1', '1', '1', '0', '0', '0', '3610', '1', '1', '1', '1', '1', 'default', '2', '0', '0');
INSERT INTO furniture VALUES ('10285', 'hosptl_seat', 'hosptl_seat', 's', '2', '1', '2', '0', '1', '0', '3611', '1', '1', '1', '1', '1', 'default', '2', '0', '0');
INSERT INTO furniture VALUES ('10286', 'hosptl_skele', 'hosptl_skele', 's', '1', '1', '1', '0', '0', '0', '3604', '1', '1', '1', '1', '1', 'default', '2', '0', '0');
INSERT INTO furniture VALUES ('10287', 'hosptl_xray', 'hosptl_xray', 'i', '0', '0', '0', '0', '0', '0', '4339', '1', '1', '1', '1', '1', 'default', '2', '0', '0');
INSERT INTO furniture VALUES ('10355', 'african_tree2', 'african_tree2', 's', '1', '1', '1', '0', '0', '0', '3605', '1', '1', '1', '1', '1', 'default', '3', '0', '0');
INSERT INTO furniture VALUES ('10354', 'african_tree1', 'african_tree1', 's', '1', '1', '1', '0', '0', '0', '3584', '1', '1', '1', '1', '1', 'default', '2', '0', '0');
INSERT INTO furniture VALUES ('10353', 'african_stage', 'african_stage', 's', '2', '2', '1', '1', '0', '1', '3607', '1', '1', '1', '1', '1', 'default', '3', '0', '0');
INSERT INTO furniture VALUES ('10352', 'african_patch', 'african_patch', 's', '2', '2', '1', '0', '0', '1', '3602', '1', '1', '1', '1', '1', 'default', '2', '0', '0');
INSERT INTO furniture VALUES ('10351', 'african_fence', 'african_fence', 's', '1', '2', '1', '0', '0', '0', '3579', '1', '1', '1', '1', '1', 'default', '2', '0', '0');
INSERT INTO furniture VALUES ('10350', 'african_bones', 'african_bones', 's', '1', '1', '1', '0', '0', '0', '3609', '1', '1', '1', '1', '1', 'default', '2', '0', '0');
INSERT INTO furniture VALUES ('97419', 'ktchn10_block', 'ktchn10_block', 's', '1', '1', '1', '1', '0', '0', '3589', '1', '1', '1', '1', '1', 'default', '3', '0', '0');
INSERT INTO furniture VALUES ('97420', 'ktchn10_cabnt', 'ktchn10_cabnt', 'i', '1', '1', '1', '1', '0', '0', '4338', '1', '1', '1', '1', '1', 'default', '1', '0', '0');
INSERT INTO furniture VALUES ('97421', 'ktchn10_pot', 'ktchn10_pot', 's', '1', '1', '1', '1', '0', '0', '3580', '1', '1', '1', '1', '1', 'default', '2', '0', '0');
INSERT INTO furniture VALUES ('97422', 'ktchn10_sink', 'ktchn10_sink', 's', '2', '1', '1', '1', '0', '0', '3612', '1', '1', '1', '1', '1', 'default', '3', '0', '0');
INSERT INTO furniture VALUES ('97423', 'ktchn10_stove', 'ktchn10_stove', 's', '2', '1', '1.2', '1', '0', '0', '3581', '1', '1', '1', '1', '1', 'default', '2', '0', '0');
INSERT INTO furniture VALUES ('97424', 'ktchn10_tea', 'ktchn10_tea', 's', '1', '1', '1', '1', '0', '0', '3592', '1', '1', '1', '1', '1', 'default', '2', '0', '0');
INSERT INTO furniture VALUES ('3530', 'bw_water_1', 'bw_water_1', 's', '2', '2', '0.1', '1', '0', '1', '3530', '1', '1', '1', '1', '1', 'water', '1', '0', '0');
INSERT INTO furniture VALUES ('97111', 'Cheetos', 'Cheester Rules!', 'e', '1', '1', '1', '0', '0', '0', '31', '0', '0', '1', '0', '0', 'default', '1', '0', '0');
INSERT INTO furniture VALUES ('3568275', 'despicableme_desc', 'despicableme_desc', 'e', '1', '1', '1', '0', '0', '0', '32', '0', '0', '0', '0', '0', 'default', '1', '0', '0');
INSERT INTO furniture VALUES ('2785108', 'bb_painimies2', 'bb_painimies2', 'i', '1', '1', '1', '0', '0', '1', '4342', '1', '1', '1', '1', '1', 'default', '3', '0', '0');
INSERT INTO furniture VALUES ('2785078', 'bb_score_b', 'bb_score_b', 's', '1', '1', '1', '0', '0', '0', '3615', '1', '1', '1', '1', '1', 'blue_score', '2', '0', '0');
INSERT INTO furniture VALUES ('2785079', 'bb_robo', 'bb_robo', 's', '2', '2', '2', '0', '0', '0', '3616', '1', '1', '1', '1', '1', 'default', '3', '0', '0');
INSERT INTO furniture VALUES ('2785080', 'bb_dragon', 'bb_dragon', 's', '3', '1', '2.5', '0', '0', '0', '3617', '1', '1', '1', '1', '1', 'default', '3', '0', '0');
INSERT INTO furniture VALUES ('2785081', 'bb_ducklight', 'bb_ducklight', 's', '1', '1', '3', '0', '0', '0', '3618', '1', '1', '1', '1', '1', 'default', '8', '0', '0');
INSERT INTO furniture VALUES ('2785082', 'bb_caterhead', 'bb_caterhead', 's', '1', '1', '1', '0', '0', '0', '3619', '1', '1', '1', '1', '1', 'default', '3', '0', '0');
INSERT INTO furniture VALUES ('2785083', 'bb_cargobox', 'bb_cargobox', 's', '2', '1', '1', '0', '0', '0', '3620', '1', '1', '1', '1', '1', 'default', '3', '0', '0');
INSERT INTO furniture VALUES ('2785084', 'bb_gate_g', 'bb_gate_g', 's', '1', '1', '0', '0', '0', '1', '3621', '1', '1', '1', '1', '1', 'bb_green_gate', '2', '0', '0');
INSERT INTO furniture VALUES ('2785085', 'bb_crchair3', 'bb_crchair3', 's', '1', '1', '1', '0', '1', '0', '3622', '1', '1', '1', '1', '1', 'default', '3', '0', '0');
INSERT INTO furniture VALUES ('2785086', 'bb_score_g', 'bb_score_g', 's', '1', '1', '1', '0', '0', '0', '3623', '1', '1', '1', '1', '1', 'green_score', '1', '0', '0');
INSERT INTO furniture VALUES ('2785087', 'bb_crchair', 'bb_crchair', 's', '1', '1', '1', '0', '1', '0', '3624', '1', '1', '1', '1', '1', 'default', '3', '0', '0');
INSERT INTO furniture VALUES ('2785088', 'bb_crchair2', 'bb_crchair2', 's', '1', '1', '1', '0', '1', '0', '3625', '1', '1', '1', '1', '1', 'default', '3', '0', '0');
INSERT INTO furniture VALUES ('2785089', 'bb_score_y', 'bb_score_y', 's', '1', '1', '1', '0', '0', '0', '3626', '1', '1', '1', '1', '1', 'yellow_score', '2', '0', '0');
INSERT INTO furniture VALUES ('2785090', 'bb_knj1', 'bb_knj1', 's', '2', '1', '1', '0', '0', '0', '3627', '1', '1', '1', '1', '1', 'default', '3', '0', '0');
INSERT INTO furniture VALUES ('2785091', 'bb_gate_r', 'bb_gate_r', 's', '1', '1', '0', '0', '0', '1', '3628', '1', '1', '1', '1', '1', 'bb_red_gate', '2', '0', '0');
INSERT INTO furniture VALUES ('2785092', 'bb_tddhnd', 'bb_tddhnd', 's', '1', '1', '1', '1', '0', '0', '3629', '1', '1', '1', '1', '1', 'default', '1', '0', '0');
INSERT INTO furniture VALUES ('2785093', 'bb_lightdiv', 'bb_lightdiv', 's', '1', '1', '1', '1', '0', '0', '3630', '1', '1', '1', '1', '1', 'default', '8', '0', '0');
INSERT INTO furniture VALUES ('2785094', 'bb_tddhead', 'bb_tddhead', 's', '2', '2', '2', '0', '0', '0', '3631', '1', '1', '1', '1', '1', 'default', '3', '0', '0');
INSERT INTO furniture VALUES ('2785095', 'bb_pyramid', 'bb_pyramid', 's', '1', '1', '1', '1', '0', '0', '3632', '1', '1', '1', '1', '1', 'default', '3', '0', '0');
INSERT INTO furniture VALUES ('2785096', 'bb_patch1', 'bb_patch1', 's', '1', '1', '0.1', '1', '0', '1', '3633', '1', '1', '1', '1', '1', 'bb_patch', '4', '0', '0');
INSERT INTO furniture VALUES ('2785097', 'bb_fnc3', 'bb_fnc3', 's', '1', '3', '1', '0', '0', '0', '3634', '1', '1', '1', '1', '1', 'default', '2', '0', '0');
INSERT INTO furniture VALUES ('2785098', 'bb_gate_y', 'bb_gate_y', 's', '1', '1', '0', '0', '0', '1', '3635', '1', '1', '1', '1', '1', 'bb_yellow_gate', '1', '0', '0');
INSERT INTO furniture VALUES ('2785099', 'bb_apparatus', 'bb_apparatus', 's', '2', '2', '0', '1', '0', '1', '3637', '1', '1', '1', '1', '1', 'default', '8', '0', '0');
INSERT INTO furniture VALUES ('2785100', 'bb_caterbody', 'bb_caterbody', 's', '1', '1', '1.7', '1', '1', '0', '3638', '1', '1', '1', '1', '1', 'default', '3', '0', '0');
INSERT INTO furniture VALUES ('2785101', 'bb_knj2', 'bb_knj2', 's', '1', '1', '2', '1', '0', '0', '3639', '1', '1', '1', '1', '1', 'default', '4', '0', '0');
INSERT INTO furniture VALUES ('2785102', 'bb_fnc1', 'bb_fnc1', 's', '1', '1', '1', '0', '0', '0', '3640', '1', '1', '1', '1', '1', 'default', '2', '0', '0');
INSERT INTO furniture VALUES ('2785103', 'bb_puck', 'bb_puck', 's', '1', '1', '0.6', '1', '0', '1', '3641', '1', '1', '1', '1', '1', 'ball', '3', '0', '0');
INSERT INTO furniture VALUES ('2785104', 'bb_rnd_tele', 'bb_rnd_tele', 's', '1', '1', '0.3', '0', '0', '1', '3642', '1', '1', '1', '1', '1', 'bb_teleport', '8000', '0', '0');
INSERT INTO furniture VALUES ('2785105', 'bb_gate_b', 'bb_gate_b', 's', '1', '1', '0', '0', '0', '1', '3643', '1', '1', '1', '1', '1', 'bb_blue_gate', '1', '0', '0');
INSERT INTO furniture VALUES ('2785106', 'bb_score_r', 'bb_score_r', 's', '1', '1', '1', '0', '0', '0', '3644', '1', '1', '1', '1', '1', 'red_score', '2', '0', '0');
INSERT INTO furniture VALUES ('2785107', 'bb_painimies1', 'bb_painimies1', 'i', '1', '1', '1', '0', '0', '1', '4341', '1', '1', '1', '1', '1', 'default', '3', '0', '0');
INSERT INTO furniture VALUES ('2785077', 'bb_crnr', 'bb_crnr', 's', '1', '1', '1', '0', '0', '0', '3614', '1', '1', '1', '1', '1', 'default', '1', '0', '0');
INSERT INTO furniture VALUES ('2785116', 'hween10_fogwall', 'hween10_fogwall', 'i', '1', '1', '1', '0', '0', '1', '4340', '1', '1', '1', '1', '1', 'default', '3', '0', '0');
INSERT INTO furniture VALUES ('2785115', 'hween10_zombie', 'hween10_zombie', 's', '1', '1', '3', '0', '0', '0', '3636', '1', '1', '1', '1', '1', 'vendingmachine', '2', '58', '0');
INSERT INTO furniture VALUES ('97222', 'Battle Ball P??rpura', '??A saltar se ha dicho!', 'e', '1', '1', '1', '0', '0', '0', '33', '0', '0', '1', '0', '0', 'default', '1', '0', '0');
INSERT INTO furniture VALUES ('97333', 'Battle Ball Az??l', '??A saltar se ha dicho!', 'e', '1', '1', '1', '0', '0', '0', '34', '0', '0', '1', '0', '0', 'default', '1', '0', '0');
INSERT INTO furniture VALUES ('97444', 'Battle Ball Verde', '??A saltar se ha dicho!', 'e', '1', '1', '1', '0', '0', '0', '35', '0', '0', '1', '0', '0', 'default', '1', '0', '0');
INSERT INTO furniture VALUES ('97555', 'Battle Ball Amarilla', '??A saltar se ha dicho!', 'e', '1', '1', '1', '0', '0', '0', '36', '0', '0', '1', '0', '0', 'default', '1', '0', '0');
INSERT INTO furniture VALUES ('3568276', 'nest_lion', 'nest_lion', 's', '1', '1', '1', '1', '0', '1', '3601', '1', '1', '1', '1', '1', 'default', '2', '0', '0');
INSERT INTO furniture VALUES ('3568277', 'nest_lion2', 'nest_lion2', 's', '1', '1', '0.5', '1', '0', '1', '3587', '1', '1', '1', '1', '1', 'default', '2', '0', '0');
INSERT INTO furniture VALUES ('3568278', 'nest_rhino', 'nest_rhino', 's', '1', '1', '0.2', '1', '0', '1', '3597', '1', '1', '1', '1', '1', 'default', '2', '0', '0');
INSERT INTO furniture VALUES ('3568279', 'petfood14', 'petfood14', 's', '1', '1', '0', '0', '0', '1', '3599', '1', '1', '1', '1', '1', 'default', '4', '0', '0');
INSERT INTO furniture VALUES ('3568280', 'petfood15', 'petfood15', 's', '1', '1', '0.1', '1', '0', '1', '3583', '1', '1', '1', '1', '1', 'default', '4', '0', '0');
INSERT INTO furniture VALUES ('84586', 'Lion', 'a0 pet6', 's', '1', '1', '1', '1', '0', '0', '7457', '1', '1', '1', '1', '1', 'pet', '0', '0', '0');
INSERT INTO furniture VALUES ('83545', 'Rhino', 'a0 pet7', 's', '1', '1', '1', '1', '0', '0', '5354', '0', '0', '0', '0', '0', 'pet', '0', '0', '0');
INSERT INTO furniture VALUES ('2785117', 'hween10_bat', 'hween10_bat', 's', '1', '1', '1', '0', '0', '0', '3662', '1', '1', '1', '1', '1', 'default', '2', '0', '0');
INSERT INTO furniture VALUES ('2785118', 'hween10_card_1', 'hween10_card_1', 'i', '1', '1', '1', '1', '0', '0', '4346', '1', '1', '1', '1', '1', 'default', '1', '0', '0');
INSERT INTO furniture VALUES ('2785119', 'hween10_card_2', 'hween10_card_2', 'i', '1', '1', '1', '1', '0', '0', '4350', '1', '1', '1', '1', '1', 'default', '1', '0', '0');
INSERT INTO furniture VALUES ('2785120', 'hween10_card_3', 'hween10_card_3', 'i', '1', '1', '1', '1', '0', '0', '4345', '1', '1', '1', '1', '1', 'default', '1', '0', '0');
INSERT INTO furniture VALUES ('2785121', 'hween10_card_4', 'hween10_card_4', 'i', '1', '1', '1', '1', '0', '0', '4347', '1', '1', '1', '1', '1', 'default', '1', '0', '0');
INSERT INTO furniture VALUES ('2785122', 'hween10_card_5', 'hween10_card_5', 'i', '1', '1', '1', '1', '0', '0', '4351', '1', '1', '1', '1', '1', 'default', '1', '0', '0');
INSERT INTO furniture VALUES ('2785123', 'hween10_card_6', 'hween10_card_6', 'i', '1', '1', '1', '1', '0', '0', '4348', '1', '1', '1', '1', '1', 'default', '1', '0', '0');
INSERT INTO furniture VALUES ('2785124', 'hween10_chicken', 'hween10_chicken', 's', '2', '1', '3', '0', '0', '0', '3658', '1', '1', '1', '1', '1', 'default', '2', '0', '0');
INSERT INTO furniture VALUES ('2785125', 'hween10_ffly', 'hween10_ffly', 's', '1', '1', '0', '0', '0', '1', '3657', '1', '1', '1', '1', '1', 'default', '2', '0', '0');
INSERT INTO furniture VALUES ('2785126', 'hween10_fog', 'hween10_fog', 's', '2', '2', '0.0001', '1', '0', '1', '3652', '1', '1', '1', '1', '1', 'default', '2', '0', '0');
INSERT INTO furniture VALUES ('2785127', 'hween10_jar', 'hween10_jar', 's', '1', '1', '3', '0', '0', '0', '3651', '1', '1', '1', '1', '1', 'default', '2', '0', '0');
INSERT INTO furniture VALUES ('2785128', 'hween10_logs', 'hween10_logs', 's', '1', '1', '0.05', '1', '0', '1', '3656', '1', '1', '1', '1', '1', 'default', '1', '0', '0');
INSERT INTO furniture VALUES ('2785129', 'hween10_pond', 'hween10_pond', 's', '2', '2', '0.1', '1', '0', '1', '3650', '1', '1', '1', '1', '1', 'water', '1', '0', '0');
INSERT INTO furniture VALUES ('2785130', 'hween10_portch', 'hween10_potch', 's', '1', '1', '1', '0', '0', '1', '3661', '1', '1', '1', '1', '1', 'default', '7', '0', '0');
INSERT INTO furniture VALUES ('2785131', 'hween10_skullpost', 'hween10_skullpost', 's', '1', '1', '3', '0', '0', '0', '3654', '1', '1', '1', '1', '1', 'default', '2', '0', '0');
INSERT INTO furniture VALUES ('2785132', 'hween10_swamp', 'hween10_swamp', 's', '2', '2', '0.01', '0', '0', '1', '3649', '1', '1', '1', '1', '1', 'default', '1', '0', '0');
INSERT INTO furniture VALUES ('2785133', 'hween10_tarot', 'hween10_tarot', 's', '1', '1', '1', '1', '0', '0', '3646', '1', '1', '1', '1', '1', 'default', '2', '0', '0');
INSERT INTO furniture VALUES ('2785134', 'hween10_tele', 'hween10_tele', 's', '1', '1', '0.001', '0', '0', '0', '3659', '1', '1', '1', '1', '1', 'teleport', '2', '0', '0');
INSERT INTO furniture VALUES ('2785135', 'hween10_throne', 'hween10_throne', 's', '1', '1', '1.1', '0', '1', '0', '3660', '1', '1', '1', '1', '1', 'default', '2', '0', '0');
INSERT INTO furniture VALUES ('2785136', 'hween10_tree', 'hween10_tree', 's', '1', '1', '5', '1', '0', '0', '3648', '1', '1', '1', '1', '1', 'default', '2', '0', '0');
INSERT INTO furniture VALUES ('2785137', 'hween10_voodoo1', 'hween10_voodoo1', 's', '1', '1', '3', '1', '0', '0', '3647', '1', '1', '1', '1', '1', 'default', '2', '0', '0');
INSERT INTO furniture VALUES ('2785138', 'hween10_voodoo2', 'hween10_voodoo2', 's', '1', '1', '3', '1', '0', '0', '3653', '1', '1', '1', '1', '1', 'default', '2', '0', '0');
INSERT INTO furniture VALUES ('2785139', 'hween10_voodoo3', 'hween10_voodoo3', 's', '1', '1', '3', '1', '0', '0', '3655', '1', '1', '1', '1', '1', 'default', '2', '0', '0');
INSERT INTO furniture VALUES ('2785140', 'hween10_wallskull', 'hween10_wallskull', 'i', '1', '1', '4', '1', '0', '0', '4349', '1', '1', '1', '1', '1', 'default', '2', '0', '0');
INSERT INTO furniture VALUES ('3568281', 'ads_mtv_tv2', 'ads_mtv_tv2', 'i', '0', '0', '0', '1', '0', '0', '4344', '1', '1', '1', '1', '1', 'default', '4', '0', '0');
INSERT INTO furniture VALUES ('3568282', 'ads_mtv_bigtv2', 'ads_mtv_bigtv2', 'i', '0', '0', '0', '1', '0', '0', '4343', '1', '1', '1', '1', '1', 'default', '4', '0', '0');
INSERT INTO furniture VALUES ('972592', 'Efecto Escalofriante', '??Que miedo!', 'e', '1', '1', '1', '0', '0', '0', '37', '0', '0', '1', '0', '0', 'default', '1', '0', '0');
INSERT INTO furniture VALUES ('2785109', 'bb_counter', 'bb_counter', 's', '1', '4', '0.1', '0', '0', '0', '3645', '1', '1', '1', '1', '1', 'counter', '1', '0', '0');
INSERT INTO furniture VALUES ('3568401', 'exe_copier', 'exe_copier', 's', '1', '1', '1', '0', '0', '0', '9215', '1', '1', '1', '1', '1', 'default', '2', '0', '0');
INSERT INTO furniture VALUES ('3568402', 'exe_glassdvdr', 'exe_glassdvdr', 's', '2', '1', '1', '0', '0', '0', '9216', '1', '1', '1', '1', '1', 'default', '2', '0', '0');
INSERT INTO furniture VALUES ('3568403', 'exe_wrkdesk', 'exe_wrkdesk', 's', '2', '1', '1', '0', '0', '0', '9217', '1', '1', '1', '1', '1', 'default', '2', '0', '0');
INSERT INTO furniture VALUES ('3568404', 'exe_seccam', 'exe_seccam', 's', '1', '1', '0', '0', '0', '1', '9218', '1', '1', '1', '1', '1', 'default', '2', '0', '0');
INSERT INTO furniture VALUES ('3568405', 'exe_sensor', 'exe_sensor', 'i', '1', '1', '1', '0', '0', '0', '4355', '1', '1', '1', '1', '1', 'default', '2', '0', '0');
INSERT INTO furniture VALUES ('99000', 'qt_xm10_nest', 'qt_xm10_nest', 's', '1', '1', '1', '0', '0', '0', '3742', '1', '1', '1', '1', '1', 'default', '2', '0', '0');
INSERT INTO furniture VALUES ('99001', 'qt_xm10_icedragon', 'qt_xm10_icedragon', 's', '1', '1', '1', '0', '0', '0', '3746', '1', '1', '1', '1', '1', 'default', '2', '0', '0');
INSERT INTO furniture VALUES ('99002', 'qt_xm10_stone', 'qt_xm10_stone', 's', '2', '1', '1', '0', '0', '0', '3747', '1', '1', '1', '1', '1', 'default', '2', '0', '0');
INSERT INTO furniture VALUES ('99003', 'qt_xm10_icetiger', 'qt_xm10_icetiger', 's', '1', '1', '1', '0', '0', '0', '3728', '1', '1', '1', '1', '1', 'default', '2', '0', '0');
INSERT INTO furniture VALUES ('99004', 'qt_xm10_trex', 'qt_xm10_trex', 's', '3', '7', '1', '0', '0', '0', '3722', '1', '1', '1', '1', '1', 'default', '2', '0', '0');
INSERT INTO furniture VALUES ('99005', 'qt_xm10_palm_tree', 'qt_xm10_palm_tree', 's', '1', '1', '3', '0', '0', '0', '3720', '1', '1', '1', '1', '1', 'default', '2', '0', '0');
INSERT INTO furniture VALUES ('99006', 'qt_xm10_bench', 'qt_xm10_bench', 's', '2', '1', '1', '0', '0', '0', '3750', '1', '1', '1', '1', '1', 'default', '2', '0', '0');
INSERT INTO furniture VALUES ('99007', 'qt_xm10_icelupin', 'qt_xm10_icelupin', 's', '1', '1', '1', '0', '0', '0', '3732', '1', '1', '1', '1', '1', 'default', '2', '0', '0');
INSERT INTO furniture VALUES ('99008', 'qt_xm10_xmduck', 'qt_xm10_xmduck', 's', '1', '1', '1', '0', '0', '0', '3719', '1', '1', '1', '1', '1', 'default', '2', '0', '0');
INSERT INTO furniture VALUES ('99009', 'qt_xm10_iceduck', 'qt_xm10_iceduck', 's', '1', '1', '1', '0', '0', '0', '3727', '1', '1', '1', '1', '1', 'default', '2', '0', '0');
INSERT INTO furniture VALUES ('99010', 'qt_xm10_bauble1', 'qt_xm10_bauble1', 'i', '1', '1', '1', '0', '0', '0', '4365', '1', '1', '1', '1', '1', 'default', '2', '0', '0');
INSERT INTO furniture VALUES ('99011', 'qt_xm10_bauble2', 'qt_xm10_bauble2', 'i', '1', '1', '1', '0', '0', '0', '4361', '1', '1', '1', '1', '1', 'default', '2', '0', '0');
INSERT INTO furniture VALUES ('99012', 'qt_xm10_bauble3', 'qt_xm10_bauble3', 'i', '1', '1', '1', '0', '0', '0', '4368', '1', '1', '1', '1', '1', 'default', '2', '0', '0');
INSERT INTO furniture VALUES ('99013', 'qt_xm10_iceplasto', 'qt_xm10_iceplasto', 's', '1', '1', '1', '0', '1', '0', '3730', '1', '1', '1', '1', '1', 'default', '2', '0', '0');
INSERT INTO furniture VALUES ('99014', 'qt_xm10_ice_fish', 'qt_xm10_ice_fish', 's', '1', '2', '3', '0', '0', '0', '3748', '1', '1', '1', '1', '1', 'default', '2', '0', '0');
INSERT INTO furniture VALUES ('99015', 'qt_xm10_gnome', 'qt_xm10_gnome', 's', '1', '2', '1', '0', '0', '0', '3726', '1', '1', '1', '1', '1', 'default', '2', '0', '0');
INSERT INTO furniture VALUES ('99016', 'qt_xm10_icesilotable', 'qt_xm10_icesilotable', 's', '1', '1', '1', '0', '0', '0', '3743', '1', '1', '1', '1', '1', 'default', '2', '0', '0');
INSERT INTO furniture VALUES ('99017', 'qt_xm10_iceteddy', 'qt_xm10_iceteddy', 's', '1', '1', '1', '0', '0', '0', '3734', '1', '1', '1', '1', '1', 'default', '2', '0', '0');
INSERT INTO furniture VALUES ('99018', 'qt_xm10_elephant', 'qt_xm10_elephant', 's', '1', '1', '1', '0', '0', '0', '3724', '1', '1', '1', '1', '1', 'vendingmachine', '2', '0', '0');
INSERT INTO furniture VALUES ('99019', 'qt_xm10_iceclubsofa', 'qt_xm10_iceclubsofa', 's', '2', '1', '1', '0', '1', '0', '3718', '1', '1', '1', '1', '1', 'default', '2', '0', '0');
INSERT INTO furniture VALUES ('99020', 'es_skating_ice', 'es_skating_ice', 's', '2', '2', '0.01', '1', '0', '1', '3736', '1', '1', '1', '1', '1', 'default', '2', '0', '0');
INSERT INTO furniture VALUES ('99021', 'es_sidewalk', 'es_sidewalk', 's', '2', '2', '0.2', '0', '0', '1', '3716', '1', '1', '1', '1', '1', 'default', '2', '0', '0');
INSERT INTO furniture VALUES ('99022', 'es_wpost', 'es_wpost', 's', '1', '1', '1', '0', '0', '0', '3725', '1', '1', '1', '1', '1', 'default', '2', '0', '0');
INSERT INTO furniture VALUES ('99023', 'es_tagging', 'es_tagging', 's', '1', '1', '3', '0', '0', '0', '3741', '1', '1', '1', '1', '1', 'tagpole', '2', '0', '0');
INSERT INTO furniture VALUES ('99024', 'es_santa', 'es_santa', 's', '1', '1', '1', '0', '0', '0', '3740', '1', '1', '1', '1', '1', 'default', '2', '0', '0');
INSERT INTO furniture VALUES ('99025', 'es_window', 'es_window', 'i', '1', '1', '1', '0', '0', '0', '4367', '1', '1', '1', '1', '1', 'default', '2', '0', '0');
INSERT INTO furniture VALUES ('99026', 'es_bench', 'es_bench', 's', '2', '1', '1', '0', '1', '0', '3712', '1', '1', '1', '1', '1', 'default', '2', '0', '0');
INSERT INTO furniture VALUES ('99027', 'es_fnc_1', 'es_fnc_1', 's', '1', '1', '1', '0', '0', '0', '3729', '1', '1', '1', '1', '1', 'default', '2', '0', '0');
INSERT INTO furniture VALUES ('99028', 'es_fnc_2', 'es_fnc_2', 's', '1', '1', '1', '0', '0', '0', '3714', '1', '1', '1', '1', '1', 'default', '2', '0', '0');
INSERT INTO furniture VALUES ('99029', 'es_fnc_crnr', 'es_fnc_crnr', 's', '1', '1', '1', '0', '0', '0', '3721', '1', '1', '1', '1', '1', 'default', '2', '0', '0');
INSERT INTO furniture VALUES ('99030', 'es_epictree', 'es_epictree', 's', '2', '2', '4', '0', '0', '0', '3723', '1', '1', '1', '1', '1', 'default', '2', '0', '0');
INSERT INTO furniture VALUES ('99031', 'es_icestar_g', 'es_icestar_g', 's', '1', '1', '6', '0', '0', '0', '3731', '1', '1', '1', '1', '1', 'default', '2', '0', '0');
INSERT INTO furniture VALUES ('99032', 'es_icestar_r', 'es_icestar_r', 's', '1', '1', '6', '0', '0', '0', '3745', '1', '1', '1', '1', '1', 'default', '2', '0', '0');
INSERT INTO furniture VALUES ('99033', 'es_icestar_y', 'es_icestar_y', 's', '1', '1', '6', '0', '0', '0', '3749', '1', '1', '1', '1', '1', 'default', '2', '0', '0');
INSERT INTO furniture VALUES ('99034', 'es_icestar', 'es_icestar', 's', '1', '1', '6', '0', '0', '0', '3713', '1', '1', '1', '1', '1', 'default', '2', '0', '0');
INSERT INTO furniture VALUES ('99035', 'es_puck', 'es_puck', 's', '1', '1', '0', '0', '0', '1', '3739', '1', '1', '1', '1', '1', 'ball', '2', '0', '0');
INSERT INTO furniture VALUES ('99036', 'es_roaster', 'es_roaster', 's', '1', '1', '2', '0', '0', '0', '3738', '1', '1', '1', '1', '1', 'default', '2', '0', '0');
INSERT INTO furniture VALUES ('99037', 'es_lmppst', 'es_lmppst', 's', '1', '1', '4', '0', '0', '0', '3735', '1', '1', '1', '1', '1', 'default', '2', '0', '0');
INSERT INTO furniture VALUES ('99038', 'es_statue', 'es_statue', 's', '1', '1', '1', '0', '0', '0', '3717', '1', '1', '1', '1', '1', 'default', '2', '0', '0');
INSERT INTO furniture VALUES ('99904', 'year2011_waver_b', 'year2011_waver_b', 's', '1', '1', '1', '1', '0', '0', '3781', '1', '1', '1', '1', '1', 'default', '2', '0', '0');
INSERT INTO furniture VALUES ('99905', 'year2011_waver_g', 'year2011_waver_g', 's', '1', '1', '1', '1', '0', '0', '3780', '1', '1', '1', '1', '1', 'default', '2', '0', '0');
INSERT INTO furniture VALUES ('99906', 'year2011_waver_r', 'year2011_waver_r', 's', '1', '1', '1', '1', '0', '0', '3777', '1', '1', '1', '1', '1', 'default', '2', '0', '0');
INSERT INTO furniture VALUES ('99907', 'year2011_waver_y', 'year2011_waver_y', 's', '1', '1', '1', '1', '0', '0', '3768', '1', '1', '1', '1', '1', 'default', '2', '0', '0');
INSERT INTO furniture VALUES ('99908', 'prizetrophy_2011_y', 'prizetrophy_2011_y', 's', '1', '1', '1', '1', '0', '0', '3771', '1', '1', '1', '1', '1', 'trophy', '1', '0', '0');
INSERT INTO furniture VALUES ('99909', 'prizetrophy_2011_b', 'prizetrophy_2011_b', 's', '1', '1', '1', '1', '0', '0', '3773', '1', '1', '1', '1', '1', 'trophy', '1', '0', '0');
INSERT INTO furniture VALUES ('99910', 'prizetrophy_2011_r', 'prizetrophy_2011_r', 's', '1', '1', '1', '1', '0', '0', '3770', '1', '1', '1', '1', '1', 'trophy', '1', '0', '0');
INSERT INTO furniture VALUES ('99911', 'prizetrophy_2011_p', 'prizetrophy_2011_p', 's', '1', '1', '1', '1', '0', '0', '3775', '1', '1', '1', '1', '1', 'trophy', '1', '0', '0');
INSERT INTO furniture VALUES ('99912', 'prizetrophy_2011_g', 'prizetrophy_2011_g', 's', '1', '1', '1', '1', '0', '0', '3781', '1', '1', '1', '1', '1', 'trophy', '1', '0', '0');
INSERT INTO furniture VALUES ('99913', 'prizetrophy_2011_w', 'prizetrophy_2011_w', 's', '1', '1', '1', '1', '0', '0', '3778', '1', '1', '1', '1', '1', 'trophy', '1', '0', '0');
INSERT INTO furniture VALUES ('99914', 'year2011', 'year2011', 'i', '1', '1', '1', '1', '0', '0', '4373', '1', '1', '1', '1', '1', 'default', '2', '0', '0');

-- ----------------------------
-- Table structure for `fuserights`
-- ----------------------------
DROP TABLE IF EXISTS `fuserights`;
CREATE TABLE `fuserights` (
  `rank` int(11) unsigned NOT NULL,
  `fuse` varchar(50) NOT NULL,
  KEY `rank` (`rank`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of fuserights
-- ----------------------------
INSERT INTO fuserights VALUES ('1', 'fuse_room_queue_default');
INSERT INTO fuserights VALUES ('1', 'fuse_buy_credits');
INSERT INTO fuserights VALUES ('1', 'fuse_login');
INSERT INTO fuserights VALUES ('1', 'default');
INSERT INTO fuserights VALUES ('1', 'fuse_trade');
INSERT INTO fuserights VALUES ('3', 'fuse_mod');
INSERT INTO fuserights VALUES ('6', 'fuse_admin');
INSERT INTO fuserights VALUES ('7', 'fuse_sysadmin');
INSERT INTO fuserights VALUES ('3', 'fuse_enter_any_room');
INSERT INTO fuserights VALUES ('1', 'fuse_club_dances');
INSERT INTO fuserights VALUES ('3', 'fuse_housekeeping_login');
INSERT INTO fuserights VALUES ('4', 'fuse_chatlogs');
INSERT INTO fuserights VALUES ('3', 'fuse_alert');
INSERT INTO fuserights VALUES ('3', 'fuse_kick');
INSERT INTO fuserights VALUES ('4', 'fuse_ban');
INSERT INTO fuserights VALUES ('6', 'fuse_housekeeping_catalog');
INSERT INTO fuserights VALUES ('4', 'fuse_housekeeping_moderation');
INSERT INTO fuserights VALUES ('6', 'fuse_housekeeping_sitemanagement');
INSERT INTO fuserights VALUES ('4', 'fuse_any_room_rights');
INSERT INTO fuserights VALUES ('6', 'fuse_ignore_maintenance');
INSERT INTO fuserights VALUES ('4', 'fuse_mute');
INSERT INTO fuserights VALUES ('3', 'fuse_roomkick');
INSERT INTO fuserights VALUES ('3', 'fuse_roomalert');
INSERT INTO fuserights VALUES ('4', 'fuse_enter_full_rooms');

-- ----------------------------
-- Table structure for `fuserights_subs`
-- ----------------------------
DROP TABLE IF EXISTS `fuserights_subs`;
CREATE TABLE `fuserights_subs` (
  `sub` varchar(120) NOT NULL,
  `fuse` text NOT NULL,
  KEY `sub` (`sub`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of fuserights_subs
-- ----------------------------
INSERT INTO fuserights_subs VALUES ('habbo_club', 'fuse_use_club_dance');
INSERT INTO fuserights_subs VALUES ('habbo_club', 'fuse_extended_buddylist');
INSERT INTO fuserights_subs VALUES ('habbo_club', 'fuse_furni_chooser');
INSERT INTO fuserights_subs VALUES ('habbo_club', 'fuse_priority_access');
INSERT INTO fuserights_subs VALUES ('habbo_club', 'fuse_use_club_catalog');
INSERT INTO fuserights_subs VALUES ('habbo_club', 'fuse_habbo_chooser');
INSERT INTO fuserights_subs VALUES ('habbo_club', 'fuse_use_club_outfits');
INSERT INTO fuserights_subs VALUES ('habbo_club', 'fuse_room_queue_club');
INSERT INTO fuserights_subs VALUES ('habbo_club', 'fuse_use_special_room_layouts');
INSERT INTO fuserights_subs VALUES ('habbo_club', 'fuse_use_club_badge');
INSERT INTO fuserights_subs VALUES ('habbo_club', 'fuse_use_wardrobe');
INSERT INTO fuserights_subs VALUES ('habbo_club', 'fuse_use_vip_outfits');
INSERT INTO fuserights_subs VALUES ('habbo_club', 'fuse_use_vip_room_layouts');
INSERT INTO fuserights_subs VALUES ('habbo_vip', 'fuse_larger_wardrobe');
INSERT INTO fuserights_subs VALUES ('habbo_vip', 'fuse_hide_room_walls');

-- ----------------------------
-- Table structure for `help_subjects`
-- ----------------------------
DROP TABLE IF EXISTS `help_subjects`;
CREATE TABLE `help_subjects` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `caption` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of help_subjects
-- ----------------------------
INSERT INTO help_subjects VALUES ('1', 'Phoenix - General');
INSERT INTO help_subjects VALUES ('2', 'Credits, Pixels and Achievements');
INSERT INTO help_subjects VALUES ('3', 'Catalogue and Furniture');
INSERT INTO help_subjects VALUES ('4', 'Rooms');
INSERT INTO help_subjects VALUES ('5', 'Infobus');

-- ----------------------------
-- Table structure for `help_topics`
-- ----------------------------
DROP TABLE IF EXISTS `help_topics`;
CREATE TABLE `help_topics` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `subject` int(11) unsigned NOT NULL DEFAULT '1',
  `title` varchar(50) NOT NULL,
  `body` text NOT NULL,
  `known_issue` enum('0','1','2') NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=14 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of help_topics
-- ----------------------------
INSERT INTO help_topics VALUES ('1', '1', 'What is Phoenix Hotel?', 'uberHotel is a test platform for the new Habbo Hotel Emulator, UberEmulator. We are using this hotel to test and verify the stability, performance, and functionality of the server. This means the hotel will only be available temporarily, and certain features may be missing or broken.', '2');
INSERT INTO help_topics VALUES ('2', '1', 'Missing/broken features', 'This article will be updated to reflect an overview of features that are missing or broken.', '2');
INSERT INTO help_topics VALUES ('3', '2', 'How do I get Credits?', 'You can receive credits in a multitude of ways:\r\n\r\n* By signing up to Uber you receive some credits to get you started.\r\n* You will recieve credit updates at preset intervals.\r\n* You can play games and take part in events and competitions for prizes and credits.\r\n* You can trade other users for credits.', '1');
INSERT INTO help_topics VALUES ('4', '2', 'How do I get Pixels?', 'You automatically receive pixels every now and then. You can exchange these for effects, special pixel offers, and credits. You also receive pixels by completing achievements.', '1');
INSERT INTO help_topics VALUES ('5', '2', 'What are achievements and how do I get them?', 'Achievements are special tasks you can complete in the hotel which will give you a certain amount of pixels and a cool badge as reward.', '1');
INSERT INTO help_topics VALUES ('6', '2', 'Are all achievements available on Uber?', 'We have not yet added all achievements. The ones that are available can be seen under the \'Achievements\' tab in your inventory.', '0');
INSERT INTO help_topics VALUES ('7', '1', 'Staff on Uber', 'Uber is being maintained and moderated by a relatively small staff team. They are here to make sure everything works correctly and to help our players and keep them safe.\r\n\r\nIn general we do not have any staff openings; if we are looking for staff it will be announced on the homepage, or we will approach players we deem capable.', '2');
INSERT INTO help_topics VALUES ('8', '3', 'I have a suggestion for new furniture!', 'We do NOT accept any requests for custom furniture or anything along those lines, we only use furniture that is available on the official hotels. If you have suggestions for new furniture, try contacting Habbo. They might like your idea!', '0');
INSERT INTO help_topics VALUES ('9', '3', 'Why is this piece of furniture missing?', 'We may have not added all furniture yet or we may have purposely decided not to put it up for sale. Please do not contact us about this - we are constantly adding new furniture.', '1');
INSERT INTO help_topics VALUES ('10', '5', 'Where is the Infobus?', 'The infobus is currently available in the navigator, although bugged.', '1');
INSERT INTO help_topics VALUES ('11', '3', 'Stacking-related issues', 'The stacking system is a sensitive and complicated mechanism that still requires some work. There is generally no need to report any problems regarding stacking to us, as we are aware of problems relating to it.\r\n\r\nIf there are problems with stacking relating to a specific piece of furniture, then please submit a suggestion or bug report on our UserVoice forum.', '1');
INSERT INTO help_topics VALUES ('12', '1', 'Support Tickets & User Reports', 'We would just like to urge that the ticket system you will find in this help tool and when reporting users is only intended for SERIOUS requests. Yes, it works, and there is no need to test it. Any requests that are offensive, spam, or in anyway inappropriate may result in a ban.\r\n\r\nAlso, when submitting a help request, please keep in mind that it must be in English.', '2');

-- ----------------------------
-- Table structure for `item_id_generator`
-- ----------------------------
DROP TABLE IF EXISTS `item_id_generator`;
CREATE TABLE `item_id_generator` (
  `id_generator` int(10) unsigned NOT NULL,
  KEY `id_generator` (`id_generator`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of item_id_generator
-- ----------------------------
INSERT INTO item_id_generator VALUES ('0');

-- ----------------------------
-- Table structure for `messenger_friendships`
-- ----------------------------
DROP TABLE IF EXISTS `messenger_friendships`;
CREATE TABLE `messenger_friendships` (
  `user_one_id` int(10) unsigned NOT NULL,
  `user_two_id` int(10) unsigned NOT NULL,
  KEY `user_one_id` (`user_one_id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of messenger_friendships
-- ----------------------------

-- ----------------------------
-- Table structure for `messenger_requests`
-- ----------------------------
DROP TABLE IF EXISTS `messenger_requests`;
CREATE TABLE `messenger_requests` (
  `from_id` int(10) unsigned NOT NULL,
  `to_id` int(10) unsigned NOT NULL,
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of messenger_requests
-- ----------------------------

-- ----------------------------
-- Table structure for `moderation_presets`
-- ----------------------------
DROP TABLE IF EXISTS `moderation_presets`;
CREATE TABLE `moderation_presets` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `enabled` enum('0','1') NOT NULL DEFAULT '1',
  `type` enum('message','roommessage') NOT NULL DEFAULT 'message',
  `message` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=17 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of moderation_presets
-- ----------------------------
INSERT INTO moderation_presets VALUES ('2', '1', 'message', 'Your language and/or behavior is unacceptable. Please behave appropriately or expect further action.');
INSERT INTO moderation_presets VALUES ('3', '1', 'roommessage', 'This room is unacceptable to the hotel management.');
INSERT INTO moderation_presets VALUES ('14', '1', 'message', 'Speaking a foreign language is against hotel policy, if you cotinue you will be banned.');
INSERT INTO moderation_presets VALUES ('15', '1', 'message', 'Please report this on our UserVoice - http://uber.uservoice.com/forums/45577-general');
INSERT INTO moderation_presets VALUES ('16', '1', 'roommessage', 'Speaking a foreign language is against hotel policy, if you cotinue you will be banned.');

-- ----------------------------
-- Table structure for `moderation_tickets`
-- ----------------------------
DROP TABLE IF EXISTS `moderation_tickets`;
CREATE TABLE `moderation_tickets` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `score` int(11) NOT NULL,
  `type` int(11) NOT NULL,
  `status` enum('open','picked','resolved','abusive','invalid','deleted') NOT NULL DEFAULT 'open',
  `sender_id` int(10) unsigned NOT NULL,
  `reported_id` int(10) unsigned NOT NULL,
  `moderator_id` int(10) unsigned NOT NULL,
  `message` text NOT NULL,
  `room_id` int(10) unsigned NOT NULL,
  `room_name` varchar(100) NOT NULL,
  `timestamp` double NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of moderation_tickets
-- ----------------------------
INSERT INTO moderation_tickets VALUES ('1', '1', '106', 'invalid', '38', '0', '1', 'Because he wants to reach the top.', '9588', 'Apothecary', '1293798523');
INSERT INTO moderation_tickets VALUES ('2', '1', '105', 'resolved', '1', '43', '1', 'nigz 4 lf lol osrngosebosbodujrbgosdjbgds', '5919', 'Journey', '1293914038');
INSERT INTO moderation_tickets VALUES ('3', '1', '106', 'open', '23', '0', '0', 'every time i leave a room i dc n shit', '9590', 'Tailor Training Camp', '1293967304');

-- ----------------------------
-- Table structure for `navigator_flatcats`
-- ----------------------------
DROP TABLE IF EXISTS `navigator_flatcats`;
CREATE TABLE `navigator_flatcats` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `caption` varchar(100) NOT NULL,
  `enabled` enum('0','1') NOT NULL DEFAULT '1',
  `min_rank` int(11) NOT NULL DEFAULT '1',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=16 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of navigator_flatcats
-- ----------------------------
INSERT INTO navigator_flatcats VALUES ('15', 'No Category', '1', '1');
INSERT INTO navigator_flatcats VALUES ('1', 'Phoenix Staff Rooms', '1', '4');
INSERT INTO navigator_flatcats VALUES ('2', 'Competition Category', '0', '1');
INSERT INTO navigator_flatcats VALUES ('3', 'unused competition category', '0', '1');
INSERT INTO navigator_flatcats VALUES ('4', 'Themed & RPG Rooms', '1', '1');
INSERT INTO navigator_flatcats VALUES ('5', 'Restaurant, Bar & Night Club Rooms', '1', '1');
INSERT INTO navigator_flatcats VALUES ('6', 'Club & Group Rooms', '1', '1');
INSERT INTO navigator_flatcats VALUES ('7', 'Chat, Chill & Discussion Rooms', '1', '1');
INSERT INTO navigator_flatcats VALUES ('8', 'Maze & Theme Park Rooms', '1', '1');
INSERT INTO navigator_flatcats VALUES ('9', 'Trading & Shopping Rooms', '1', '1');
INSERT INTO navigator_flatcats VALUES ('10', 'Gaming & Race Rooms', '1', '1');
INSERT INTO navigator_flatcats VALUES ('11', 'Hair Salons & Modelling Rooms', '1', '1');
INSERT INTO navigator_flatcats VALUES ('12', 'Help Centre, Guide & Service Rooms', '1', '1');
INSERT INTO navigator_flatcats VALUES ('13', 'School, Daycare & Adoption Rooms', '1', '1');
INSERT INTO navigator_flatcats VALUES ('14', 'All Other Rooms', '1', '1');

-- ----------------------------
-- Table structure for `navigator_pubcats`
-- ----------------------------
DROP TABLE IF EXISTS `navigator_pubcats`;
CREATE TABLE `navigator_pubcats` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `caption` varchar(100) NOT NULL,
  `enabled` enum('0','1') NOT NULL DEFAULT '1',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of navigator_pubcats
-- ----------------------------
INSERT INTO navigator_pubcats VALUES ('1', 'Cafes and Restaurants', '1');
INSERT INTO navigator_pubcats VALUES ('2', 'Lounges and Entertainment', '1');
INSERT INTO navigator_pubcats VALUES ('3', 'Pubs and Clubs', '1');
INSERT INTO navigator_pubcats VALUES ('4', 'Outside Spaces & Swimming Pools', '1');

-- ----------------------------
-- Table structure for `navigator_publics`
-- ----------------------------
DROP TABLE IF EXISTS `navigator_publics`;
CREATE TABLE `navigator_publics` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `ordernum` int(11) NOT NULL DEFAULT '1',
  `bannertype` enum('0','1') NOT NULL COMMENT '0 = big, 1 = normal',
  `caption` varchar(100) NOT NULL,
  `image` text NOT NULL,
  `image_type` enum('internal','external') NOT NULL DEFAULT 'internal',
  `room_id` int(10) unsigned NOT NULL,
  `category_id` int(11) NOT NULL DEFAULT '0',
  `category_parent_id` int(11) NOT NULL DEFAULT '-1',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of navigator_publics
-- ----------------------------
INSERT INTO navigator_publics VALUES ('1', '1', '1', 'Hotel Reception', 'newbie_lobby', 'internal', '1', '0', '2');
INSERT INTO navigator_publics VALUES ('2', '3', '1', 'Theatredrome', 'theatredrome_xmas', 'internal', '2', '0', '2');
INSERT INTO navigator_publics VALUES ('3', '8', '1', 'The Orient', '', 'internal', '3', '0', '3');
INSERT INTO navigator_publics VALUES ('4', '6', '1', 'Picnic Area', 'picnic', 'internal', '4', '0', '4');
INSERT INTO navigator_publics VALUES ('5', '5', '1', 'Tea Room', 'tearoom', 'internal', '5', '0', '1');
INSERT INTO navigator_publics VALUES ('6', '7', '1', 'Dusty Lounge', 'dusty_lounge', 'internal', '6', '0', '2');
INSERT INTO navigator_publics VALUES ('7', '4', '1', 'Uber Cinema', 'habbo_cinema', 'internal', '7', '0', '-1');

-- ----------------------------
-- Table structure for `ranks`
-- ----------------------------
DROP TABLE IF EXISTS `ranks`;
CREATE TABLE `ranks` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of ranks
-- ----------------------------
INSERT INTO ranks VALUES ('1', 'User');
INSERT INTO ranks VALUES ('2', 'VIP');
INSERT INTO ranks VALUES ('3', 'Trial Moderator');
INSERT INTO ranks VALUES ('4', 'Moderator');
INSERT INTO ranks VALUES ('5', 'Senior Moderator');
INSERT INTO ranks VALUES ('6', 'Administrator');
INSERT INTO ranks VALUES ('7', 'Senior Administrator');

-- ----------------------------
-- Table structure for `rooms`
-- ----------------------------
DROP TABLE IF EXISTS `rooms`;
CREATE TABLE `rooms` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `roomtype` enum('public','private') NOT NULL DEFAULT 'private',
  `caption` varchar(100) NOT NULL DEFAULT 'Room',
  `owner` varchar(75) NOT NULL DEFAULT '',
  `description` varchar(255) NOT NULL DEFAULT '',
  `category` int(11) NOT NULL DEFAULT '0',
  `state` enum('open','locked','password') NOT NULL DEFAULT 'open',
  `users_now` int(11) NOT NULL DEFAULT '0',
  `users_max` int(11) NOT NULL DEFAULT '25',
  `model_name` varchar(50) NOT NULL,
  `public_ccts` varchar(50) NOT NULL DEFAULT '',
  `score` int(11) NOT NULL DEFAULT '0',
  `tags` varchar(100) NOT NULL DEFAULT '',
  `icon_bg` int(11) NOT NULL DEFAULT '1',
  `icon_fg` int(11) NOT NULL DEFAULT '0',
  `icon_items` varchar(50) NOT NULL DEFAULT '',
  `password` varchar(30) NOT NULL DEFAULT '',
  `wallpaper` varchar(10) NOT NULL DEFAULT '0.0',
  `floor` varchar(10) NOT NULL DEFAULT '0.0',
  `landscape` varchar(10) NOT NULL DEFAULT '0.0',
  `allow_pets` enum('0','1') NOT NULL DEFAULT '1',
  `allow_pets_eat` enum('0','1') NOT NULL DEFAULT '0',
  `allow_walkthrough` enum('0','1') NOT NULL DEFAULT '0',
  `allow_hidewall` enum('0','1') NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of rooms
-- ----------------------------
INSERT INTO rooms VALUES ('1', 'public', 'Welcome Lobby', '', 'Where we give you a warm welcome to the hotel!', '0', 'open', '0', '50', 'newbie_lobby', 'hh_room_nlobby', '0', '', '1', '0', '', '', '0.0', '0.0', '0.0', '1', '0', '0', '0');
INSERT INTO rooms VALUES ('2', 'public', 'Theatredrome', '', 'For mass assemblies and gatherings.', '0', 'open', '0', '50', 'theater', 'hh_room_theater', '0', '', '1', '0', '', '', '0.0', '0.0', '0.0', '1', '0', '0', '0');
INSERT INTO rooms VALUES ('3', 'public', 'Club Orient', '', 'Come and relax, dance under the lights or chill out with a cup of tea in this oriental styled club.', '0', 'open', '0', '30', 'orient', 'hh_room_orient', '0', '', '1', '0', '', '', '0.0', '0.0', '0.0', '1', '0', '0', '0');
INSERT INTO rooms VALUES ('4', 'public', 'Picnic Area', '', 'Enjoy the ever-lasting summer sun with a fresh picnic, even in winter!', '0', 'open', '0', '50', 'picnic', 'hh_room_picnic', '0', '', '1', '0', '', '', '0.0', '0.0', '0.0', '1', '0', '0', '0');
INSERT INTO rooms VALUES ('5', 'public', 'Tea Room', '', 'Have a relaxing cup of fruit, herbal or even everyday tea in this Chinese themed tea house.', '0', 'open', '0', '30', 'tearoom', 'hh_room_tearoom', '0', '', '1', '0', '', '', '0.0', '0.0', '0.0', '1', '0', '0', '0');
INSERT INTO rooms VALUES ('6', 'public', 'Dusty Lounge', '', 'Origninally where the hotel air conditioning emptied its filters, this dusty, old void is now a beautifully decorated lounge!', '0', 'open', '0', '30', 'dusty_lounge', 'hh_room_dustylounge', '0', '', '1', '0', '', '', '0.0', '0.0', '0.0', '1', '0', '0', '0');
INSERT INTO rooms VALUES ('7', 'public', 'Cinema', '', 'Watch or perform, the choice is yours!', '0', 'open', '0', '50', 'cinema_a', 'hh_room_cinema', '0', '', '1', '0', '', '', '0.0', '0.0', '0.0', '1', '0', '0', '0');

-- ----------------------------
-- Table structure for `room_ads`
-- ----------------------------
DROP TABLE IF EXISTS `room_ads`;
CREATE TABLE `room_ads` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `ad_image` text NOT NULL,
  `ad_image_orig` text NOT NULL,
  `ad_link` text NOT NULL,
  `views` int(11) NOT NULL DEFAULT '0',
  `views_limit` int(11) NOT NULL DEFAULT '0' COMMENT '0 = unlimited',
  `enabled` enum('0','1') NOT NULL DEFAULT '1',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of room_ads
-- ----------------------------

-- ----------------------------
-- Table structure for `room_items`
-- ----------------------------
DROP TABLE IF EXISTS `room_items`;
CREATE TABLE `room_items` (
  `id` int(10) unsigned NOT NULL,
  `room_id` int(10) unsigned NOT NULL,
  `base_item` int(10) unsigned NOT NULL,
  `extra_data` text NOT NULL,
  `x` int(11) NOT NULL,
  `y` int(11) NOT NULL,
  `z` double NOT NULL,
  `rot` int(11) NOT NULL,
  `wall_pos` varchar(100) NOT NULL,
  KEY `id` (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of room_items
-- ----------------------------

-- ----------------------------
-- Table structure for `room_items_moodlight`
-- ----------------------------
DROP TABLE IF EXISTS `room_items_moodlight`;
CREATE TABLE `room_items_moodlight` (
  `item_id` int(10) unsigned NOT NULL,
  `enabled` enum('0','1') NOT NULL DEFAULT '0',
  `current_preset` int(11) NOT NULL,
  `preset_one` text NOT NULL,
  `preset_two` text NOT NULL,
  `preset_three` text NOT NULL,
  KEY `item_id` (`item_id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of room_items_moodlight
-- ----------------------------

-- ----------------------------
-- Table structure for `room_models`
-- ----------------------------
DROP TABLE IF EXISTS `room_models`;
CREATE TABLE `room_models` (
  `id` varchar(100) NOT NULL,
  `door_x` int(11) NOT NULL,
  `door_y` int(11) NOT NULL,
  `door_z` double NOT NULL,
  `door_dir` int(4) NOT NULL DEFAULT '2',
  `heightmap` text NOT NULL,
  `public_items` text NOT NULL,
  `club_only` enum('0','1') NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of room_models
-- ----------------------------
INSERT INTO room_models VALUES ('model_a', '3', '5', '0', '2', 'xxxxxxxxxxxx\r\nxxxx00000000\r\nxxxx00000000\r\nxxxx00000000\r\nxxxx00000000\r\nxxxx00000000\r\nxxxx00000000\r\nxxxx00000000\r\nxxxx00000000\r\nxxxx00000000\r\nxxxx00000000\r\nxxxx00000000\r\nxxxx00000000\r\nxxxx00000000\r\nxxxxxxxxxxxx\r\nxxxxxxxxxxxx', '', '0');
INSERT INTO room_models VALUES ('model_b', '0', '5', '0', '2', 'xxxxxxxxxxxx\r\nxxxxx0000000\r\nxxxxx0000000\r\nxxxxx0000000\r\nxxxxx0000000\r\nx00000000000\r\nx00000000000\r\nx00000000000\r\nx00000000000\r\nx00000000000\r\nx00000000000\r\nxxxxxxxxxxxx\r\nxxxxxxxxxxxx\r\nxxxxxxxxxxxx\r\nxxxxxxxxxxxx\r\nxxxxxxxxxxxx', '', '0');
INSERT INTO room_models VALUES ('model_c', '4', '7', '0', '2', 'xxxxxxxxxxxx\r\nxxxxxxxxxxxx\r\nxxxxxxxxxxxx\r\nxxxxxxxxxxxx\r\nxxxxxxxxxxxx\r\nxxxxx000000x\r\nxxxxx000000x\r\nxxxxx000000x\r\nxxxxx000000x\r\nxxxxx000000x\r\nxxxxx000000x\r\nxxxxxxxxxxxx\r\nxxxxxxxxxxxx\r\nxxxxxxxxxxxx\r\nxxxxxxxxxxxx\r\nxxxxxxxxxxxx', '', '0');
INSERT INTO room_models VALUES ('model_d', '4', '7', '0', '2', 'xxxxxxxxxxxx\r\nxxxxx000000x\r\nxxxxx000000x\r\nxxxxx000000x\r\nxxxxx000000x\r\nxxxxx000000x\r\nxxxxx000000x\r\nxxxxx000000x\r\nxxxxx000000x\r\nxxxxx000000x\r\nxxxxx000000x\r\nxxxxx000000x\r\nxxxxx000000x\r\nxxxxx000000x\r\nxxxxx000000x\r\nxxxxxxxxxxxx', '', '0');
INSERT INTO room_models VALUES ('model_e', '1', '5', '0', '2', 'xxxxxxxxxxxx\r\nxxxxxxxxxxxx\r\nxxxxxxxxxxxx\r\nxx0000000000\r\nxx0000000000\r\nxx0000000000\r\nxx0000000000\r\nxx0000000000\r\nxx0000000000\r\nxx0000000000\r\nxx0000000000\r\nxxxxxxxxxxxx\r\nxxxxxxxxxxxx\r\nxxxxxxxxxxxx\r\nxxxxxxxxxxxx\r\nxxxxxxxxxxxx', '', '0');
INSERT INTO room_models VALUES ('model_f', '2', '5', '0', '2', 'xxxxxxxxxxxx\r\nxxxxxxx0000x\r\nxxxxxxx0000x\r\nxxx00000000x\r\nxxx00000000x\r\nxxx00000000x\r\nxxx00000000x\r\nx0000000000x\r\nx0000000000x\r\nx0000000000x\r\nx0000000000x\r\nxxxxxxxxxxxx\r\nxxxxxxxxxxxx\r\nxxxxxxxxxxxx\r\nxxxxxxxxxxxx\r\nxxxxxxxxxxxx', '', '0');
INSERT INTO room_models VALUES ('model_i', '0', '10', '0', '2', 'xxxxxxxxxxxxxxxxx\r\nx0000000000000000\r\nx0000000000000000\r\nx0000000000000000\r\nx0000000000000000\r\nx0000000000000000\r\nx0000000000000000\r\nx0000000000000000\r\nx0000000000000000\r\nx0000000000000000\r\nx0000000000000000\r\nx0000000000000000\r\nx0000000000000000\r\nx0000000000000000\r\nx0000000000000000\r\nx0000000000000000\r\nx0000000000000000\r\nx0000000000000000\r\nx0000000000000000\r\nx0000000000000000\r\nx0000000000000000\r\nx0000000000000000\r\nx0000000000000000\r\nx0000000000000000\r\nx0000000000000000\r\nx0000000000000000\r\nx0000000000000000\r\nxxxxxxxxxxxxxxxxx', '', '0');
INSERT INTO room_models VALUES ('model_j', '0', '10', '0', '2', 'xxxxxxxxxxxxxxxxxxxxx\r\nxxxxxxxxxxx0000000000\r\nxxxxxxxxxxx0000000000\r\nxxxxxxxxxxx0000000000\r\nxxxxxxxxxxx0000000000\r\nxxxxxxxxxxx0000000000\r\nxxxxxxxxxxx0000000000\r\nx00000000000000000000\r\nx00000000000000000000\r\nx00000000000000000000\r\nx00000000000000000000\r\nx00000000000000000000\r\nx00000000000000000000\r\nx00000000000000000000\r\nx00000000000000000000\r\nx00000000000000000000\r\nx00000000000000000000\r\nx0000000000xxxxxxxxxx\r\nx0000000000xxxxxxxxxx\r\nx0000000000xxxxxxxxxx\r\nx0000000000xxxxxxxxxx\r\nx0000000000xxxxxxxxxx\r\nx0000000000xxxxxxxxxx\r\nxxxxxxxxxxxxxxxxxxxxx', '', '0');
INSERT INTO room_models VALUES ('model_k', '0', '13', '0', '2', 'xxxxxxxxxxxxxxxxxxxxxxxxx\r\nxxxxxxxxxxxxxxxxx00000000\r\nxxxxxxxxxxxxxxxxx00000000\r\nxxxxxxxxxxxxxxxxx00000000\r\nxxxxxxxxxxxxxxxxx00000000\r\nxxxxxxxxx0000000000000000\r\nxxxxxxxxx0000000000000000\r\nxxxxxxxxx0000000000000000\r\nxxxxxxxxx0000000000000000\r\nx000000000000000000000000\r\nx000000000000000000000000\r\nx000000000000000000000000\r\nx000000000000000000000000\r\nx000000000000000000000000\r\nx000000000000000000000000\r\nx000000000000000000000000\r\nx000000000000000000000000\r\nxxxxxxxxx0000000000000000\r\nxxxxxxxxx0000000000000000\r\nxxxxxxxxx0000000000000000\r\nxxxxxxxxx0000000000000000\r\nxxxxxxxxx0000000000000000\r\nxxxxxxxxx0000000000000000\r\nxxxxxxxxx0000000000000000\r\nxxxxxxxxx0000000000000000\r\nxxxxxxxxx0000000000000000\r\nxxxxxxxxx0000000000000000\r\nxxxxxxxxxxxxxxxxxxxxxxxxx', '', '0');
INSERT INTO room_models VALUES ('model_l', '0', '16', '0', '2', 'xxxxxxxxxxxxxxxxxxxxx\r\nx00000000000000000000\r\nx00000000000000000000\r\nx00000000000000000000\r\nx00000000000000000000\r\nx00000000000000000000\r\nx00000000000000000000\r\nx00000000000000000000\r\nx00000000000000000000\r\nx00000000xxxx00000000\r\nx00000000xxxx00000000\r\nx00000000xxxx00000000\r\nx00000000xxxx00000000\r\nx00000000xxxx00000000\r\nx00000000xxxx00000000\r\nx00000000xxxx00000000\r\nx00000000xxxx00000000\r\nx00000000xxxx00000000\r\nx00000000xxxx00000000\r\nx00000000xxxx00000000\r\nx00000000xxxx00000000\r\nxxxxxxxxxxxxxxxxxxxxx', '', '0');
INSERT INTO room_models VALUES ('model_m', '0', '15', '0', '2', 'xxxxxxxxxxxxxxxxxxxxxxxxxxxxx\r\nxxxxxxxxxxx00000000xxxxxxxxxx\r\nxxxxxxxxxxx00000000xxxxxxxxxx\r\nxxxxxxxxxxx00000000xxxxxxxxxx\r\nxxxxxxxxxxx00000000xxxxxxxxxx\r\nxxxxxxxxxxx00000000xxxxxxxxxx\r\nxxxxxxxxxxx00000000xxxxxxxxxx\r\nxxxxxxxxxxx00000000xxxxxxxxxx\r\nxxxxxxxxxxx00000000xxxxxxxxxx\r\nxxxxxxxxxxx00000000xxxxxxxxxx\r\nxxxxxxxxxxx00000000xxxxxxxxxx\r\nx0000000000000000000000000000\r\nx0000000000000000000000000000\r\nx0000000000000000000000000000\r\nx0000000000000000000000000000\r\nx0000000000000000000000000000\r\nx0000000000000000000000000000\r\nx0000000000000000000000000000\r\nx0000000000000000000000000000\r\nxxxxxxxxxxx00000000xxxxxxxxxx\r\nxxxxxxxxxxx00000000xxxxxxxxxx\r\nxxxxxxxxxxx00000000xxxxxxxxxx\r\nxxxxxxxxxxx00000000xxxxxxxxxx\r\nxxxxxxxxxxx00000000xxxxxxxxxx\r\nxxxxxxxxxxx00000000xxxxxxxxxx\r\nxxxxxxxxxxx00000000xxxxxxxxxx\r\nxxxxxxxxxxx00000000xxxxxxxxxx\r\nxxxxxxxxxxx00000000xxxxxxxxxx\r\nxxxxxxxxxxx00000000xxxxxxxxxx\r\nxxxxxxxxxxxxxxxxxxxxxxxxxxxxx', '', '0');
INSERT INTO room_models VALUES ('model_n', '0', '16', '0', '2', 'xxxxxxxxxxxxxxxxxxxxx\r\nx00000000000000000000\r\nx00000000000000000000\r\nx00000000000000000000\r\nx00000000000000000000\r\nx00000000000000000000\r\nx00000000000000000000\r\nx000000xxxxxxxx000000\r\nx000000x000000x000000\r\nx000000x000000x000000\r\nx000000x000000x000000\r\nx000000x000000x000000\r\nx000000x000000x000000\r\nx000000x000000x000000\r\nx000000xxxxxxxx000000\r\nx00000000000000000000\r\nx00000000000000000000\r\nx00000000000000000000\r\nx00000000000000000000\r\nx00000000000000000000\r\nx00000000000000000000\r\nxxxxxxxxxxxxxxxxxxxxx', '', '0');
INSERT INTO room_models VALUES ('model_g', '1', '7', '1', '2', 'xxxxxxxxxxxx\r\nxxxxxxxxxxxx\r\nxxxxxxx00000\r\nxxxxxxx00000\r\nxxxxxxx00000\r\nxx1111000000\r\nxx1111000000\r\nxx1111000000\r\nxx1111000000\r\nxx1111000000\r\nxxxxxxx00000\r\nxxxxxxx00000\r\nxxxxxxx00000\r\nxxxxxxxxxxxx\r\nxxxxxxxxxxxx\r\nxxxxxxxxxxxx\r\nxxxxxxxxxxxx', '', '1');
INSERT INTO room_models VALUES ('model_q', '10', '4', '2', '2', 'xxxxxxxxxxxxxxxxxxx\r\nxxxxxxxxxxx22222222\r\nxxxxxxxxxxx22222222\r\nxxxxxxxxxxx22222222\r\nxxxxxxxxxxx22222222\r\nxxxxxxxxxxx22222222\r\nxxxxxxxxxxx22222222\r\nx222222222222222222\r\nx222222222222222222\r\nx222222222222222222\r\nx222222222222222222\r\nx222222222222222222\r\nx222222222222222222\r\nx2222xxxxxxxxxxxxxx\r\nx2222xxxxxxxxxxxxxx\r\nx2222211111xx000000\r\nx222221111110000000\r\nx222221111110000000\r\nx2222211111xx000000\r\nxx22xxx1111xxxxxxxx\r\nxx11xxx1111xxxxxxxx\r\nx1111xx1111xx000000\r\nx1111xx111110000000\r\nx1111xx111110000000\r\nx1111xx1111xx000000\r\nxxxxxxxxxxxxxxxxxxx', '', '1');
INSERT INTO room_models VALUES ('model_o', '0', '18', '1', '2', 'xxxxxxxxxxxxxxxxxxxxxxxxx\r\nxxxxxxxxxxxxx11111111xxxx\r\nxxxxxxxxxxxxx11111111xxxx\r\nxxxxxxxxxxxxx11111111xxxx\r\nxxxxxxxxxxxxx11111111xxxx\r\nxxxxxxxxxxxxx11111111xxxx\r\nxxxxxxxxxxxxx11111111xxxx\r\nxxxxxxxxxxxxx11111111xxxx\r\nxxxxxxxxxxxxx00000000xxxx\r\nxxxxxxxxx0000000000000000\r\nxxxxxxxxx0000000000000000\r\nxxxxxxxxx0000000000000000\r\nxxxxxxxxx0000000000000000\r\nxxxxxxxxx0000000000000000\r\nxxxxxxxxx0000000000000000\r\nx111111100000000000000000\r\nx111111100000000000000000\r\nx111111100000000000000000\r\nx111111100000000000000000\r\nx111111100000000000000000\r\nx111111100000000000000000\r\nx111111100000000000000000\r\nx111111100000000000000000\r\nxxxxxxxxx0000000000000000\r\nxxxxxxxxx0000000000000000\r\nxxxxxxxxx0000000000000000\r\nxxxxxxxxx0000000000000000\r\nxxxxxxxxxxxxxxxxxxxxxxxxx', '', '1');
INSERT INTO room_models VALUES ('model_r', '10', '4', '3', '2', 'xxxxxxxxxxxxxxxxxxxxxxxxx\r\nxxxxxxxxxxx33333333333333\r\nxxxxxxxxxxx33333333333333\r\nxxxxxxxxxxx33333333333333\r\nxxxxxxxxxx333333333333333\r\nxxxxxxxxxxx33333333333333\r\nxxxxxxxxxxx33333333333333\r\nxxxxxxx333333333333333333\r\nxxxxxxx333333333333333333\r\nxxxxxxx333333333333333333\r\nxxxxxxx333333333333333333\r\nxxxxxxx333333333333333333\r\nxxxxxxx333333333333333333\r\nx4444433333xxxxxxxxxxxxxx\r\nx4444433333xxxxxxxxxxxxxx\r\nx44444333333222xx000000xx\r\nx44444333333222xx000000xx\r\nxxx44xxxxxxxx22xx000000xx\r\nxxx33xxxxxxxx11xx000000xx\r\nxxx33322222211110000000xx\r\nxxx33322222211110000000xx\r\nxxxxxxxxxxxxxxxxx000000xx\r\nxxxxxxxxxxxxxxxxx000000xx\r\nxxxxxxxxxxxxxxxxx000000xx\r\nxxxxxxxxxxxxxxxxx000000xx\r\nxxxxxxxxxxxxxxxxxxxxxxxxx', '', '1');
INSERT INTO room_models VALUES ('model_p', '0', '23', '2', '2', 'xxxxxxxxxxxxxxxxxxx\r\nxxxxxxx222222222222\r\nxxxxxxx222222222222\r\nxxxxxxx222222222222\r\nxxxxxxx222222222222\r\nxxxxxxx222222222222\r\nxxxxxxx222222222222\r\nxxxxxxx22222222xxxx\r\nxxxxxxx11111111xxxx\r\nx222221111111111111\r\nx222221111111111111\r\nx222221111111111111\r\nx222221111111111111\r\nx222221111111111111\r\nx222221111111111111\r\nx222221111111111111\r\nx222221111111111111\r\nx2222xx11111111xxxx\r\nx2222xx00000000xxxx\r\nx2222xx000000000000\r\nx2222xx000000000000\r\nx2222xx000000000000\r\nx2222xx000000000000\r\n22222xx000000000000\r\nx2222xx000000000000\r\nxxxxxxxxxxxxxxxxxxx', '', '1');
INSERT INTO room_models VALUES ('model_h', '4', '4', '1', '2', 'xxxxxxxxxxxx\r\nxxxxxxxxxxxx\r\nxxxxx111111x\r\nxxxxx111111x\r\nxxxxx111111x\r\nxxxxx111111x\r\nxxxxx111111x\r\nxxxxx000000x\r\nxxxxx000000x\r\nxxx00000000x\r\nxxx00000000x\r\nxxx00000000x\r\nxxx00000000x\r\nxxxxxxxxxxxx\r\nxxxxxxxxxxxx\r\nxxxxxxxxxxxx', '', '1');
INSERT INTO room_models VALUES ('old_skool', '2', '1', '0', '2', 'xx0xxxxxxxxxxxxxx\r\n0000000xxx00000xx\r\n0000000x0000000xx\r\n0000000xxxxxxxxxx\r\n0000000000000000x\r\n0000000000000000x\r\n0000000000000000x\r\n0000000000000000x\r\n0000000000000000x\r\n0000000000000000x\r\n0000000000000000x\r\n0000000000000000x\r\n0000000000000000x\r\n0000000000000000x\r\n0000000000000000x\r\n0000000000000000x\r\n0000000000000000x\r\n0000000000000000x\r\n00000000000000000\r\n0000000000000000x\r\n0000000000000000x\r\n0000000000000000x\r\n0000000000000000x\r\n0000000000000000x\r\n0000000000000000x', 'SLHk49mobiles_chair3QBPAHHHk410mobiles_chair3RBPAHHHk411mobiles_chair3SBPAHHHk412mobiles_chair3PCPAHHHe101mobiles_chair1IRBHPAHe1010mobiles_chair1RBRBHPAHe110mobiles_chair1HSBHJHb111mobiles_table2ISBHHHc112mobiles_table3JSBHHHe113mobiles_chair1KSBHRAHb1110mobiles_table2RBSBHHHc1111mobiles_table3SBSBHHHa121mobiles_table1IPCHHHd122mobiles_table4JPCHHHe129mobiles_chair1QBPCHJHa1210mobiles_table1RBPCHHHd1211mobiles_table4SBPCHHHe1212mobiles_chair1PCPCHRAHe131mobiles_chair1IQCHHHe1311mobiles_chair1SBQCHHHe150mobiles_chair1HSCHPAHe170mobiles_chair1HQDHJHb171mobiles_table2IQDHHHc172mobiles_table3JQDHHHe173mobiles_chair1KQDHRAHa181mobiles_table1IRDHHHd182mobiles_table4JRDHHHe192mobiles_chair1JSDHHHe211mobiles_chair1IQEHPAHb216mobiles_table2RAQEHHHc217mobiles_table3SAQEHHHe2112mobiles_chair1PCQEHPAHe220mobiles_chair1HREHJHb221mobiles_table2IREHHHc222mobiles_table3JREHHHe223mobiles_chair1KREHRAHe225mobiles_chair1QAREHJHa226mobiles_table1RAREHHHd227mobiles_table4SAREHHHe228mobiles_chair1PBREHRAHe2211mobiles_chair1SBREHJHb2212mobiles_table2PCREHHHc2213mobiles_table3QCREHHHe2214mobiles_chair1RCREHRAHa231mobiles_table1ISEHHHd232mobiles_table4JSEHHHa2312mobiles_table1PCSEHHHd2313mobiles_table4QCSEHHHe241mobiles_chair1IPFHHHe247mobiles_chair1SAPFHPAHe2413mobiles_chair1QCPFHH', '0');
INSERT INTO room_models VALUES ('pizza', '5', '27', '1', '2', 'xxxxxxxxx0000000\r\nx11111x1xx000000\r\n11xxxxx111x00000\r\n11x1111111xx0000\r\n11x1111111100000\r\nxxx1111111100000\r\n1111111111100000\r\n1111111111100000\r\n1111111111100000\r\n1111111111100000\r\n1111111111100000\r\n1111111111100000\r\n1111111111100000\r\n1111111111100000\r\n1111111111100000\r\n1111111111100000\r\n1111111111100000\r\n11111111111xxxxx\r\n1111111111xxxxxx\r\n1111111111111111\r\n1111111111111111\r\n1111111111111111\r\n1111111111111111\r\n1111111111111111\r\n1111111111111111\r\n11xx11xx11111111\r\nxxxx11xxxxxxxxxx\r\nxxxx11xxxxxxxxxx', 'QGHa015pizza_plant1SCHHJHe314pizza_sofa1RCKHPAHE315pizza_sofa2SCKHPAHc515pizza_tableSCQAHJHb60pizza_plant2HRAIJHf614pizza_sofa3RCRAHHHF615pizza_sofa4SCRAHHHd81pizza_chairIPBIPAHd82pizza_chairJPBIPAHc102pizza_tableJRBIJHe1014pizza_sofa1RCRBHPAHE1015pizza_sofa2SCRBHPAHd111pizza_chairISBIHHd112pizza_chairJSBIHHc1215pizza_tableSCPCHJHf1314pizza_sofa3RCQCHHHF1315pizza_sofa4SCQCHHHd161pizza_chairIPDIPAHd162pizza_chairJPDIPAHc182pizza_tableJRDIJHd191pizza_chairISDIHHd192pizza_chairJSDIHHd2111pizza_chairSBQEIJHd2114pizza_chairRCQEIRAHd2211pizza_chairSBREIJHc2213pizza_tableQCREIHHd2214pizza_chairRCREIRAHa250pizza_plant1HQFIJHa2515pizza_plant1SCQFIJ', '0');
INSERT INTO room_models VALUES ('pub_a', '15', '25', '0', '2', 'xxxxxxxxxxxxxxxxxxxxxxxxx\r\nxxxxxxxxx2222222211111xxx\r\nxxxxxxxxx2222222211111xxx\r\nxxxxxxxxx2222222211111xxx\r\nxxxxxxxxx2222222211111xxx\r\nxxxxxxxxx2222222222111xxx\r\nxxxxxxxxx2222222222111xxx\r\nxxxxxxxxx2222222222000xxx\r\nxxxxxxxxx2222222222000xxx\r\nxxxxxxxxx2222222222000xxx\r\nxxxxxxxxx2222222222000xxx\r\nx333333332222222222000xxx\r\nx333333332222222222000xxx\r\nx333333332222222222000xxx\r\nx333333332222222222000xxx\r\nx333333332222222222000xxx\r\nx333332222222222222000xxx\r\nx333332222222222222000xxx\r\nx333332222222222222000xxx\r\nx333332222222222222000xxx\r\nx333333332222222222000xxx\r\nxxxxx31111112222222000xxx\r\nxxxxx31111111000000000xxx\r\nxxxxx31111111000000000xxx\r\nxxxxx31111111000000000xxx\r\nxxxxx31111111000000000xxx\r\nxxxxxxxxxxxxxxx00xxxxxxxx\r\nxxxxxxxxxxxxxxx00xxxxxxxx\r\nxxxxxxxxxxxxxxx00xxxxxxxx\r\nxxxxxxxxxxxxxxx00xxxxxxxx\r\nxxxxxxxxxxxxxxxxxxxxxxxxx', 'SWHS119pub_sofa2SDIIPAHs120pub_sofaPEIIPAHs121pub_sofaQEIIPAHq211bardesk1SBJJHHc212pub_chairPCJJRAHQ311bardesk2SBKJHHq411bardesk1SBPAJHHc412pub_chairPCPAJRAHQ511bardesk2SBQAJHHf518pub_fenceRDQAJIHq611bardesk1SBRAJHHc612pub_chairPCRAJRAHf618pub_fenceRDRAJHHQ711bardesk2SBSAJHHf718pub_fenceRDSAJHHq811bardesk1SBPBJHHc812pub_chairPCPBJRAHf818pub_fenceRDPBJHHw910bardesk4RBQBJHHW911bardesk3SBQBJHHf918pub_fenceRDQBJHHf1018pub_fenceRDRBJHHC112pub_chair2JSBKPAHC113pub_chair2KSBKPAHC115pub_chair2QASBKPAHC116pub_chair2RASBKPAHf118pub_fencePBSBKIHf1118pub_fenceRDSBJHHf128pub_fencePBPCKHHf1218pub_fenceRDPCJHHf138pub_fencePBQCKHHC139pub_chair2QBQCJJHk1314pub_chair3RCQCJJHT1315pub_table2SCQCJIHk1316pub_chair3PDQCJRAHf1318pub_fenceRDQCJHHf148pub_fencePBRCKJHC149pub_chair2QBRCJJHk1414pub_chair3RCRCJJHT1415pub_table2SCRCJJHk1416pub_chair3PDRCJRAHf1418pub_fenceRDRCJHHt151pub_tableISCKHHf155pub_fenceQASCKIHf1518pub_fenceRDSCJHHS161pub_sofa2IPDKJHf165pub_fenceQAPDKHHf1618pub_fenceRDPDJHHs171pub_sofaIQDKJHf175pub_fenceQAQDKHHk1713pub_chair3QCQDJPAHk1714pub_chair3RCQDJPAHk1715pub_chair3SCQDJPAHk1716pub_chair3PDQDJPAHf1718pub_fenceRDQDJHHs181pub_sofaIRDKJHf185pub_fenceQARDKHHT1813pub_table2QCRDJQAHT1814pub_table2RCRDJRAHT1815pub_table2SCRDJRAHT1816pub_table2PDRDJPAHf1818pub_fenceRDRDJHHs192pub_sofaJSDKHHS193pub_sofa2KSDKHHf195pub_fenceQASDKHHk1913pub_chair3QCSDJHHk1914pub_chair3RCSDJHHk1915pub_chair3SCSDJHHk1916pub_chair3PDSDJHHf1918pub_fenceRDSDJHHf201pub_fenceIPEKQAHf202pub_fenceJPEKRAHf203pub_fenceKPEKRAHf204pub_fencePAPEKRAHf205pub_fenceQAPEKKHf2018pub_fenceRDPEJHHS217pub_sofa2SAQEIPAHs218pub_sofaPBQEIPAHf2112pub_fencePCQEJQAHf2113pub_fenceQCQEJRAHf2114pub_fenceRCQEJRAHf2115pub_fenceSCQEJRAHf2116pub_fencePDQEJRAHf2117pub_fenceQDQEJRAHf2118pub_fenceRDQEJKHS226pub_sofa2RAREIJHt2215pub_tableSCREHHHC2216pub_chair2PDREHPAHC2217pub_chair2QDREHPAHs236pub_sofaRASEIJHT238pub_table2PBSEIIHs246pub_sofaRAPFIJHT248pub_table2PBPFIHHs256pub_sofaRAQFIJHT258pub_table2PBQFIJ', '0');
INSERT INTO room_models VALUES ('newbie_lobby', '2', '11', '0', '2', 'xxxxxxxxxxxxxxxx000000\r\nxxxxx0xxxxxxxxxx000000\r\nxxxxx00000000xxx000000\r\nxxxxx000000000xx000000\r\n0000000000000000000000\r\n0000000000000000000000\r\n0000000000000000000000\r\n0000000000000000000000\r\n0000000000000000000000\r\nxxxxx000000000000000xx\r\nxxxxx000000000000000xx\r\nx0000000000000000000xx\r\nx0000000000000000xxxxx\r\nxxxxxx00000000000xxxxx\r\nxxxxxxx0000000000xxxxx\r\nxxxxxxxx000000000xxxxx\r\nxxxxxxxx000000000xxxxx\r\nxxxxxxxx000000000xxxxx\r\nxxxxxxxx000000000xxxxx\r\nxxxxxxxx000000000xxxxx\r\nxxxxxxxx000000000xxxxx\r\nxxxxxx00000000000xxxxx\r\nxxxxxx00000000000xxxxx\r\nxxxxxx00000000000xxxxx\r\nxxxxxx00000000000xxxxx\r\nxxxxxx00000000000xxxxx\r\nxxxxx000000000000xxxxx\r\nxxxxx000000000000xxxxx', 'SOHa016crl_lampPDHHHHy017crl_sofa2cQDHHPAHw018crl_sofa2bRDHHPAHv019crl_sofa2aSDHHPAHa020crl_lampPEHHHHb116crl_chairPDIHJHa27crl_lampSAJHHHa211crl_lampSBJHHHb216crl_chairPDJHJHc35crl_pillarQAKHHHb37crl_chairSAKHJHu39crl_table1bQBKHHHs311crl_sofa1cSBKHRAHb316crl_chairPDKHJHA319crl_table2bSDKHHHz320crl_table2aPEKHHHa40crl_lampHPAHHHy41crl_sofa2cIPAHPAHw42crl_sofa2bJPAHPAHv43crl_sofa2aKPAHPAHa44crl_lampPAPAHHHt49crl_table1aQBPAHHHr411crl_sofa1bSBPAHRAHh415crl_wall2aSCPAHHHa416crl_lampPDPAHHHb50crl_chairHQAHJHb57crl_chairSAQAHJHq511crl_sofa1aSBQAHRAHA62crl_table2bJRAHHHz63crl_table2aKRAHHHa611crl_lampSBRAHHHb70crl_chairHSAHJHa80crl_lampHPBHHHD81crl_sofa3cIPBHHHC82crl_sofa3bJPBHHHB83crl_sofa3aKPBHHHa84crl_lampPAPBHHHo819crl_barchair2SDPBHHHp820crl_tablebarPEPBHHHo821crl_barchair2QEPBHHHE95crl_pillar2QAQBHHHc99crl_pillarQBQBHHHP158crl_desk1aPBSCHHHO159crl_deskiQBSCHHHN1510crl_deskhRBSCHHHM1610crl_deskgRBPDHHHL1710crl_deskfRBQDHHHK1810crl_deskeRBRDHHHK1910crl_deskeRBSDHHHK2010crl_deskeRBPEHHHK2110crl_deskeRBQEHHHK2210crl_deskeRBREHHHK2310crl_deskeRBSEHHHG247crl_wallbSAPFHHHK2410crl_deskeRBPFHHHF257crl_wallaSAQFHHHH258crl_desk1bPBQFHHHI259crl_desk1cQBQFHHHJ2510crl_desk1dRBQFHHHd2712crl_lamp2PCSFHHHf2713crl_cabinet2QCSFHHHe2714crl_cabinet1RCSFHHHd2715crl_lamp2SCSFHH', '0');
INSERT INTO room_models VALUES ('tearoom', '21', '19', '1', '6', 'xxxxxxxxxxxxxxxxxxxxxx\r\nxxxxxxxx3333x33333333x\r\n333333xx3333x33333333x\r\n3333333x3333x33333333x\r\n3333333x3333x33333333x\r\n3333333xxxxxx33333333x\r\n333333333333333333333x\r\n333333333333333333333x\r\n333333333333333333333x\r\n333333333333333333333x\r\n33333333222x333333333x\r\n33333333222x333333333x\r\n33333333222x333333333x\r\n33333333222x333333333x\r\n33333333111x333333333x\r\n33333333111x333333333x\r\n33333333111x333333333x\r\nxxxxxxxx111xxxxxxxxxxx\r\n11111111111111111111xx\r\n1111111111111111111111\r\n1111111111111111111111\r\n11111111111111111111xx', 'QIHh113hardwoodsofa1QCIKPAHi114hardwoodsofa2RCIKPAHj115hardwoodsofa3SCIKPAHc116teabambooPDIKHHh118hardwoodsofa1RDIKPAHi119hardwoodsofa2SDIKPAHj120hardwoodsofa3PEIKPAHl313teasmalltable1QCKKHHk315teasmalltable2SCKKHHl318teasmalltable1RDKKHHk320teasmalltable2PEKKHHe62teastoolJRAKPAHe63teastoolKRAKPAHf68chinastoolredPBRAKPAHf69chinastoolredQBRAKPAHf610chinastoolredRBRAKPAHf611chinastoolredSBRAKPAHa82teatable1JPBKHHb83teatable2KPBKHHm92teastool2JQBKHHm93teastool2KQBKHHe916teastoolPDQBKPAHe917teastoolQDQBKPAHa1116teatable1PDSBKHHb1117teatable2QDSBKHHe122teastoolJPCKPAHe123teastoolKPCKPAHm1216teastool2PDPCKHHm1217teastool2QDPCKHHa142teatable1JRCKHHb143teatable2KRCKHHm152teastool2JSCKHHm153teastool2KSCKHHd180teavaseHRDIHHg190chinastoolgreenHSDIJHg200chinastoolgreenHPEIJHd210teavaseHQEIH', '0');
INSERT INTO room_models VALUES ('rooftop', '17', '12', '4', '2', '44xxxxxxxxxxxxxxxxxx\r\n444xxxxxxxxxxx444444\r\n4444xxxxxxxxxx444444\r\n44444xxxx4xxxx444444\r\n444444xxx44xxx444444\r\n44444444444444444444\r\n44444444444444444444\r\n44444444444444444444\r\n44444444xx44xx44xx44\r\n44444444xx44xx44xx44\r\n44444444444444444444\r\n44444444444444444444\r\n44444444444444444444\r\nx444444x444444xx4444\r\nx444444x444444xx333x\r\nx444444x444444xx222x\r\nx444444x444444xx11xx\r\nx444444x444444xxxxxx', 'PKHa10rooftop_minichairHIPAPAHd116rooftop_flatcurbPDIPAPAHe117rooftop_flatcurb2QDIPAPAHc20rooftop_rodtableHJPAHHa21rooftop_minichairIJPARAHa30rooftop_minichairHKPAHHd416rooftop_flatcurbPDPAPAHHe417rooftop_flatcurb2QDPAPAHHa62rooftop_minichairJRAPAPAHa71rooftop_minichairISAPAJHc72rooftop_rodtableJSAPAHHa73rooftop_minichairKSAPARAHa82rooftop_minichairJPBPAHHa90rooftop_minichairHQBPAPAHb100rooftop_emptytableHRBPAHHa110rooftop_minichairHSBPAHHd131rooftop_flatcurbIQCPAJHd136rooftop_flatcurbRAQCPARAHd138rooftop_flatcurbPBQCPAJHd1313rooftop_flatcurbQCQCPARAHf141rooftop_flatcurb3IRCPAJHf146rooftop_flatcurb3RARCPARAHf148rooftop_flatcurb3PBRCPAJHf1413rooftop_flatcurb3QCRCPARAHf151rooftop_flatcurb3ISCPAJHf156rooftop_flatcurb3RASCPARAHf158rooftop_flatcurb3PBSCPAJHf1513rooftop_flatcurb3QCSCPARAHf161rooftop_flatcurb3IPDPAJHf166rooftop_flatcurb3RAPDPARAHf168rooftop_flatcurb3PBPDPAJHf1613rooftop_flatcurb3QCPDPARAHg171rooftop_flatcurb4IQDPAHHf172rooftop_flatcurb3JQDPAHHf173rooftop_flatcurb3KQDPAHHf174rooftop_flatcurb3PAQDPAHHf175rooftop_flatcurb3QAQDPAHHh176rooftop_flatcurb5RAQDPAHHg178rooftop_flatcurb4PBQDPAHHf179rooftop_flatcurb3QBQDPAHHf1710rooftop_flatcurb3RBQDPAHHf1711rooftop_flatcurb3SBQDPAHHf1712rooftop_flatcurb3PCQDPAHHh1713rooftop_flatcurb5QCQDPAH', '0');
INSERT INTO room_models VALUES ('rooftop_2', '4', '9', '0', '2', 'x0000x000\r\nxxxxxx000\r\n000000000\r\n000000000\r\n000000000\r\n000000000\r\n000000000\r\n000000000\r\n000000000\r\n000000000\r\nxxx000xxx\r\nxxx000xxx', 'RDHk08rooftop_bigchairPBHHPAHl18rooftop_bigtablePBIHHHj20rooftop_sofabHJHPAHi21rooftop_sofaIJHPAHk28rooftop_bigchairPBJHHHk38rooftop_bigchairPBKHPAHl48rooftop_bigtablePBPAHHHj50rooftop_sofabHQAHHHi51rooftop_sofaIQAHHHk58rooftop_bigchairPBQAHHHj60rooftop_sofabHRAHPAHi61rooftop_sofaIRAHPAHj67rooftop_sofabSARAHPAHi68rooftop_sofaPBRAHPAHj90rooftop_sofabHQBHHHi91rooftop_sofaIQBHHHj97rooftop_sofabSAQBHHHi98rooftop_sofaPBQBHH', '0');
INSERT INTO room_models VALUES ('star_lounge', '37', '36', '0', '2', 'xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx\r\nxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx\r\nxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx\r\nxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx\r\nxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx\r\nxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx\r\nxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx\r\nxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx\r\nxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx\r\nxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx\r\nxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx\r\nxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx\r\nxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx\r\nxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx\r\nxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx\r\nxxxxxxxxxxxxxxxxxxxxx2222x4444442222xxxxxxxxxxxxxx\r\nxxxxxxxxxxxxxxxxxxxxx22222x444x32222xxxxxxxxxxxxxx\r\nxxxxxxxxxxxxxxxxxxxxx22222xx4xx22222xxxxxxxxxxxxxx\r\nxxxxxxxxxxxxxxxxxxxxx222222222222222xxxxxxxxxxxxxx\r\nxxxxxxxxxxxxxxxxxxxxx222222222222222xxxxxxxxxxxxxx\r\nxxxxxxxxxxxxxxxxxxxxx222222222222222xxxxxxxxxxxxxx\r\nxxxxxxxxxxxxxxxxxxxxx222222222222222xxxxxxxxxxxxxx\r\nxxxxxxxxxxxxxxxxxxxxx222222222222222xxxxxxxxxxxxxx\r\nxxxxxxxxxxxxxxxxxxxxx222222222222222xxxxxxxxxxxxxx\r\nxxxxxxxxxxxxxxxxxxxxx22222222222222211111xxxxxxxxx\r\nxxxxxxxxxxxxxxxxxxxxx22222222222222211111xxxxxxxxx\r\nxxxxxxxxxxxxxxxxxxxxx22222222222222211111xxxxxxxxx\r\nxxxxxxxxxxxxxxxxxxxxx22222222222222211111xxxxxxxxx\r\nxxxxxxxxxxxxxxxxxxxxx22222222222222222111xxxxxxxxx\r\nxxxxxxxxxxxxxxxxxxxxx22222222222222222111xxxxxxxxx\r\nxxxxxxxxxxxxxxxx3333x22222222222222xxxxxxxxxxxxxxx\r\nxxxxxxxxxxxxxxxx3333x22222222222222xxxxxxxxxxxxxxx\r\nxxxxxxxxxxxxxxxx3333x22222222221111xxxxxxxxxxxxxxx\r\nxxxxxxxxxxxxxxxx3333xx2x22222220000xxxxxxxxxxxxxxx\r\nxxxxxxxxxxxxxxxx333333332222222000000xxxxxxxxxxxxx\r\nxxxxxxxxxxxxxxxx333333332222222x0000000xxxxxxxxxxx\r\nxxxxxxxxxxxxxxxxx33333332222222x0000000xxxxxxxxxxx\r\nxxxxxxxxxxxxxxxxxxxxxxxxx222222000000xxxxxxxxxxxxx\r\nxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx\r\nxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx\r\nxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx\r\nxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx\r\nxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx\r\nxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx\r\nxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx\r\nxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx\r\nxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx\r\nxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx\r\nxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx\r\nxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx', 'PXHk1521star_tableQESCJHHa1522star_sofaRESCJPAHb1523star_sofa2SESCJPAHz1524palmPFSCJHHb1621star_sofa2QEPDJJHQ1632dj1PHPDJHHW1633dj2QHPDJHHE1634dj3RHPDJHHa1721star_sofaQEQDJJHm1728star_microphonePGQDPAHHb1821star_sofa2QERDJJHa1835star_sofaSHRDJRAHa1921star_sofaQESDJJHb1935star_sofa2SHSDJRAHb2021star_sofa2QEPEJJHb2024star_sofa2PFPEJJHa2032star_sofaPHPEJRAHa2035star_sofaSHPEJRAHa2121star_sofaQEQEJJHa2124star_sofaPFQEJJHb2132star_sofa2PHQEJRAHb2135star_sofa2SHQEJRAHc2221star_sofachairQEREJJHk2224star_tablePFREJHHb2225star_sofa2QFREJHHa2226star_sofaRFREJHHb2230star_sofa2RGREJHHa2231star_sofaSGREJHHk2232star_tablePHREJHHk2235star_tableSHREJHHz2321palmQESEJHHa2335star_sofaSHSEJRAHp2422bar10REPFJHHb2435star_sofa2SHPFJRAHa2437star_sofaQIPFIPAHb2438star_sofa2RIPFIPAHa2439star_sofaSIPFIPAHb2440star_sofa2PJPFIPAHo2522bar9REQFJHHb2525star_sofa2QFQFJHHa2526star_sofaRFQFJHHb2530star_sofa2RGQFJHHa2531star_sofaSGQFJHHa2535star_sofaSHQFJRAHb2536star_sofa2PIQFIJHi2622bar8RERFJHHX2625palm1QFRFJHHV2626palm3RFRFJHHC2630palm2RGRFJHHB2631palm4SGRFJHHb2635star_sofa2SHRFJRAHa2636star_sofaPIRFIJHk2639star_tableSIRFIHHk2640star_tablePJRFIHHu2722bar7RESFJHHa2725star_sofaQFSFJPAHb2726star_sofa2RFSFJPAHa2730star_sofaRGSFJPAHb2731star_sofa2SGSFJPAHk2735star_tableSHSFJHHz2736palmPISFIHHk2737star_tableQISFIHHy2822bar6REPGJHHt2922bar5REQGJHHk2925star_tableQFQGJHHk2926star_tableRFQGJHHk3016star_tablePDRGKHHr3022bar4RERGJHHb3116star_sofa2PDSGKJHe3122bar3RESGJHHb3125star_sofa2QFSGJHHa3126star_sofaRFSGJHHa3130star_sofaRGSGJRAHa3216star_sofaPDPHKJHw3222bar2REPHJHHB3225palm4QFPHJHHX3226palm1RFPHJHHb3230star_sofa2RGPHJRAHb3316star_sofa2PDQHKJHq3322bar1REQHJHHa3325star_sofaQFQHJPAHb3326star_sofa2RFQHJPAHa3330star_sofaRGQHJRAHa3416star_sofaPDRHKJHb3430star_sofa2RGRHJRAHV3435palm3SHRHHHHC3436palm2PIRHHHHk3516star_tablePDSHKHHa3530star_sofaRGSHJRAHb3630star_sofa2RGPIJRAHc3725star_sofachairQFQIJHHb3726star_sofa2RFQIJHHa3727star_sofaSFQIJHHb3728star_sofa2PGQIJHHa3729star_sofaQGQIJHHk3730star_tableRGQIJH', '0');
INSERT INTO room_models VALUES ('netcafe', '22', '12', '0', '2', 'xxxxx1111xxxxxxxxxxx1xxxx\r\nxxxxx1111111111111111xxxx\r\nxxxxx1111111111111111xxxx\r\nxxxxx1111111111111111xxxx\r\nxxxxxxxx0000000000000xxxx\r\n111111100000000000000xxxx\r\n111111100000000000000xxxx\r\n111111100000000000000xxxx\r\nxxxx11100000000000000xxxx\r\nx1xx11100000000000000xxxx\r\nx1xx11100000000000000xxxx\r\nx1xx111000000000000000000\r\nx1xx111000000000000000000\r\nxxxx111000000000000000000\r\nxxxx11100000000000000xxxx\r\nxxxx1110000000xx11111xxxx\r\nxxxxx111110000x111111xxxx\r\nxxxxxx111100001111111xxxx\r\nxxxxxx111100001111111xxxx\r\nxxxxxx111100001111111xxxx\r\nxxxxxx111100001111111xxxx\r\nxxxxxx111100001111111xxxx\r\nxxxxxx111100001111111xxxx\r\nxxxxx1111100001111111xxxx', 'RRHi06shift1RAHIPAHj07shift2SAHIPAHm110mRBIIHHl113lQCIIHHk116kPDIIHHk119kSDIIHHh35kukat6QAKIHHg36kukat5RAKIHHc312kukat2PCKIHHb313kukat1QCKIHHc319kukat2SDKIHHb320kukat1PEKIHHi412shift1PCPAHPAHj413shift2QCPAHPAHi419shift1SDPAHPAHj420shift2PEPAHPAHi50shift1HQAIPAHj51shift2IQAIPAHi52shift1JQAIPAHj53shift2KQAIPAHk715kSCSAHJHo716table2PDSAHRAHz717tablecornerQDSAHHHm718mRDSAHRAHl815lSCPBHJHo816table2PDPBHPAHl818lRDPBHRAHm94mPAQBIRAHk99kQBQBHJHp910table3RBQBHRAHz911tablecornerSBQBHHHm912mPCQBHRAHk915kSCQBHJHo916table2PDQBHJHk918kRDQBHRAHk104kPARBIRAHm109mQBRBHJHp1010table3RBRBHPAHm1012mPCRBHRAHm1015mSCRBHJHo1016table2PDRBHHHk1018kRDRBHRAHl114lPASBIRAHl119lQBSBHJHp1110table3RBSBHJHl1112lPCSBHRAHk124kPAPCIRAHl129lQBPCHJHp1210table3RBPCHHHk1212kPCPCHRAHm134mPAQCIRAHc165kukat2QAPDIHHb166kukat1RAPDIHHc167kukat2SAPDIHHb168kukat1PBPDIHHe169kukat3QBPDIHHd1615kukka2SCPDIHHf179kukat4QBQDIHHk186kRARDIRAHe189kukat3QBRDIHHs1820sofabig3PERDIRAHf199kukat4QBSDIHHn1917table1QDSDIPAHz1918tablecornerRDSDIHHr1920sofabig2PESDIRAHn2017table1QDPEIJHr2020sofabig2PEPEIRAHm216mRAQEIRAHn2117table1QDQEIHHq2120sofabig1PEQEIRAHv2316sofalittle3PDSEIHHu2317sofalittle2QDSEIHHt2318sofalittle1RDSEIHHa2320kukkaPESEIH', '0');
INSERT INTO room_models VALUES ('dusty_lounge', '14', '1', '2', '4', 'xxxxxxxxxxxxxx22xxxxxxxxxxxxx\r\nxxxxxxxxxx222x222x2xxxxxxxxxx\r\nxxxxxxx33322222222223xxxxxxx3\r\nxxxxxxx33322222222223xxxxxxx3\r\nxxxxxxx33322222222223x33333x3\r\nxxxxxxx33322222222223x33333x3\r\nxx111xx33322222222223xxxxxxx3\r\nxx111xxx332222222222333333333\r\nxx111xxxx32222222222333333333\r\nxx111xxxxxx222222222333333333\r\nxx111xxxxxxx1111111x333333333\r\nxx111xxxxxxx1111111x222222222\r\nxx111xxxxxx111111111111111111\r\nxx111xxxxxx111111111111111111\r\n11111xxxxxx111111111111111111\r\n11111xxxxxx111111111111111111\r\n11x11xxxxxx111111111111111111\r\n11xxxxxxxxx11111111111111111x\r\nx11xxxxxxxxx1111111x1111111xx\r\nxx11xxxxxxx111111111111111xxx\r\nxxx11xxxxxx11111111111111xxxx\r\nxxxx11111111111111111111xxxxx\r\nxxxxx11111111111111xxxxxxxxxx\r\nxxxxxxxxxxx11111111xxxxxxxxxx\r\nxxxxxxxxxxx11111111xxxxxxxxxx', 'QHHc48greenchair2PBPAKPAHd49greenchair1QBPAKPAHc68greenchair2PBRAKHHd69greenchair1QBRAKHHa620dustylampPERAKJHa628dustylampPGRAKJHc73greenchair2KSAIPAHd74greenchair1PASAIPAHc93greenchair2KQBIHHd94greenchair1PAQBIHHb1021yellowchairQERBKJHb1023yellowchairSERBKRAHb1026yellowchairRFRBKJHb1028yellowchairPGRBKRAHc1211greenchair2SBPCIJHc133greenchair2KQCIPAHd134greenchair1PAQCIPAHd1311greenchair1SBQCIJHa1411dustylampSBRCIJHc153greenchair2KSCIHHd154greenchair1PASCIHHc1511greenchair2SBSCIJHb1524yellowchairPFSCIPAHd1611greenchair1SBPDIJHb1722yellowchairREQDIJHa1724dustylampPFQDIJHb1726yellowchairRFQDIRAHa1911dustylampSBSDIJHb1924yellowchairPFSDIHHc2312greenchair2PCSEIJHc2314greenchair2RCSEIRAHd2412greenchair1PCPFIJHd2414greenchair1RCPFIRA', '0');
INSERT INTO room_models VALUES ('orient', '35', '22', '0', '6', 'xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx\r\nxxxxxxxxxxxxxxxx00000000xxxxxxxxxxxx\r\nxxxxxxxxxxxxxx1000000000xxxxxxxxxxxx\r\nxxxxxxxxxxxxxx1xxxxxxxxxxxxxxxxxxxxx\r\nxxxxxxxxxxxxxx1xxxxxxxxxxxxxxxxxxxxx\r\nxxxxxxxxxxxxxx1xxxxxxxxxxxxxxxxxxxxx\r\nxxxxxxxxxxxxxx1xxxxxxxxxxxxxxxxxxxxx\r\nxxxxxxxxxxxxxx1xxxxxxxxxxxxxxxxxxxxx\r\nxxxxxxxxxxxxxx1xxxxxxxxxxxxxxxxxxxxx\r\nxxxxxxxxxxxxxx1xxxxxxxxxxxxxxxxxxxxx\r\nxxxxxxxxxxxxxx1xx000x000xx111x111xxx\r\nxxxxxxxxxxxxxx1xx000x000xxxxxx1111xx\r\nxxxxxxxxxxxxxx1xx000x000x111111111xx\r\nxxxxxxxxxxxxxx1xx000x000x111111111xx\r\nxxx111111111111xx000x000x111111111xx\r\nxxx1xxxxxxxxxxxxx000x000x111111111xx\r\nxxx1x1111111111000000000x111111111xx\r\nxxx1x1111111111000000000xx1111111xxx\r\nxxx1x11xxxxxx11000000000xx1111111100\r\nxxx111xxxxxxx11000000000011111111100\r\nxxx111xxxxxxx11000000000011111111100\r\nxxxxx1xxxxxxx11000000000011111111100\r\nxxxxx11xxxxxx11000000000xx1111111100\r\nxxxxx1111111111000000000xx1111111xxx\r\nxxxxx1111111111xx000x000x111111111xx\r\nxxxxxxxxxxxxxxxxx000x000x111111111xx\r\nxxxxxxxxxxxxxxxxx000x000x111111111xx\r\nxxxxxxxxxxxxxxxxx000x000x111111111xx\r\nxxxxxxxxxxxxxxxxx000x000x111111111xx\r\nxxxxxxxxxxxxxxxxx000x00xx11xxxx111xx\r\nxxxxxxxxxxxxxxxxxxxxxxxxxx11111111xx', 'SOHd1017benchQDRBHJHd1019benchSDRBHRAHd1021benchQERBHJHd1023benchSERBHRAHd1117benchQDSBHJHd1119benchSDSBHRAHd1121benchQESBHJHd1123benchSESBHRAHb1132koc_chairPHSBIPAHd1217benchQDPCHJHd1219benchSDPCHRAHd1221benchQEPCHJHd1223benchSEPCHRAHb1231koc_chairSGPCIJHa1232koc_tablePHPCIHHb1233koc_chairQHPCIRAHd1317benchQDQCHJHd1319benchSDQCHRAHd1321benchQEQCHJHd1323benchSEQCHRAHb1325koc_chairQFQCIPAHb1332koc_chairPHQCIHHd1417benchQDRCHJHd1419benchSDRCHRAHd1421benchQERCHJHd1423benchSERCHRAHa1425koc_tableQFRCIHHb1426koc_chairRFRCIRAHd1517benchQDSCHJHd1519benchSDSCHRAHd1521benchQESCHJHd1523benchSESCHRAHb1525koc_chairQFSCIHHb1529koc_chairQGSCIJHa1530koc_tableRGSCIHHb1531koc_chairSGSCIRAHb1630koc_chairRGPDIHHc2425chairf1QFPFIJHc2433chairf1QHPFIRAHd2517benchQDQFHJHd2519benchSDQFHRAHd2521benchQEQFHJHd2523benchSEQFHRAHc2525chairf1QFQFIJHc2533chairf1QHQFIRAHd2617benchQDRFHJHd2619benchSDRFHRAHd2621benchQERFHJHd2623benchSERFHRAHc2625chairf1QFRFIJHc2633chairf1QHRFIRAHd2717benchQDSFHJHd2719benchSDSFHRAHd2721benchQESFHJHd2723benchSESFHRAHd2817benchQDPGHJHd2819benchSDPGHRAHd2821benchQEPGHJHd2823benchSEPGHRAHd2917benchQDQGHJHd2919benchSDQGHRAHd2921benchQEQGHJHd2923benchSEQG`hFFRA', '0');
INSERT INTO room_models VALUES ('custom_model', '0', '0', '0', '2', 'xxxxxxxxxxxxxxxxxxxxxxxxxxxxx\r\nxxxxxxxxxxxxxxxxxxxxxxxxxxxxx\r\nxxxxxxxxxxxx0000000000000xxxx\r\nxxxxxxxxxxx000000000000000xxx\r\nxxxxxxxxxx00000000000000000xx\r\nxxxxxxxxxx00000000000000000xx\r\nxxxxxxxxxx00000000000000000xx\r\nxxxxxxxxxx11111111111111111xx\r\nxxxxxxxxxx22222222222222222xx\r\nxxxxxxxxxx22222222222222222xx\r\nxxxxxxxxxx22222222222222222xx\r\nxxxxxxxxxxxxxxxxxxxxxxxxxxxxx\r\nxxxxxxxxxxxxxxxxxxxxxxxxxxxxx', '', '0');
INSERT INTO room_models VALUES ('theater', '20', '27', '0', '0', 'XXXXXXXXXXXXXXXXXXXXXXX\r\nXXXXXXXXXXXXXXXXXXXXXXX\r\nXXXXXXXXXXXXXXXXXXXXXXX\r\nXXXXXXXXXXXXXXXXXXXXXXX\r\nXXXXXXXXXXXXXXXXXXXXXXX\r\nXXXXXXXXXXXXXXXXXXXXXXX\r\nXXXXXXX111111111XXXXXXX\r\nXXXXXXX11111111100000XX\r\nXXXX00X11111111100000XX\r\nXXXX00x11111111100000XX\r\n4XXX00X11111111100000XX\r\n4440000XXXXXXXXX00000XX\r\n444000000000000000000XX\r\n4XX000000000000000000XX\r\n4XX0000000000000000000X\r\n44400000000000000000000\r\n44400000000000000000000\r\n44X0000000000000000O000\r\n44X11111111111111111000\r\n44X11111111111111111000\r\n33X11111111111111111000\r\n22X11111111111111111000\r\n22X11111111111111111000\r\n22X11111111111111111000\r\n22X11111111111111111000\r\n22X11111111111111111000\r\n22211111111111111111000\r\n22211111111111111111000\r\nXXXXXXXXXXXXXXXXXXXX00X\r\nXXXXXXXXXXXXXXXXXXXX00X', 'QKHm1011micSBRBIHHd112thchair2JSBPAJHd122thchair2JPCPAJHd152thchair2JSCPAJHc156thchair1RASCHHHc157thchair1SASCHHHc158thchair1PBSCHHHc159thchair1QBSCHHHc1510thchair1RBSCHHHc1512thchair1PCSCHHHc1513thchair1QCSCHHHc1514thchair1RCSCHHHc1515thchair1SCSCHHHc1516thchair1PDSCHHHd162thchair2JPDPAJHc206thchair1RAPEIHHc207thchair1SAPEIHHc208thchair1PBPEIHHc209thchair1QBPEIHHc2010thchair1RBPEIHHc2012thchair1PCPEIHHc2013thchair1QCPEIHHc2014thchair1RCPEIHHc2015thchair1SCPEIHHc2016thchair1PDPEIHHc236thchair1RASEIHHc237thchair1SASEIHHc238thchair1PBSEIHHc239thchair1QBSEIHHc2310thchair1RBSEIHHc2312thchair1PCSEIHHc2313thchair1QCSEIHHc2314thchair1RCSEIHHc2315thchair1SCSEIHHc2316thchair1PDSEIHHc266thchair1RARFIHHc267thchair1SARFIHHc268thchair1PBRFIHHc269thchair1QBRFIHHc2610thchair1RBRFIHHc2612thchair1PCRFIHHc2613thchair1QCRFIHHc2614thchair1RCRFIHHc2615thchair1SCRFIHHc2616thchair1PDRFIH', '0');
INSERT INTO room_models VALUES ('picnic', '16', '5', '2', '4', 'xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx\r\nxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx\r\nxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx\r\nxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx\r\nxx22222xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx\r\n22xxxxxxxxxxxxx22xxxxxxxxxxxxxxxxxxxxx\r\n2222222222222222222x222222222222222222\r\n22222222222222222222222222222222222222\r\n22222222222222222222222222222222222222\r\n22222222222222222222222222222222222222\r\n22222222222xxx222222222222222222222222\r\n2222222222xx33x22222222222222222222222\r\n222222222xx3333x2222222222222222222222\r\n222222222x333333x222222222222222222222\r\n222222222x333333x222222222222222222222\r\n2222222222x3332x2222222222222222222222\r\n22222222222x33x22222222222222222222222\r\n22222222222222222222222222222222222222\r\n22222222222222222222222222222222222222\r\n22222222222222222222222222222222222222\r\n22222222222222222222222222222222222222\r\n22222222222222222222222222222222222222\r\n22222222222222222222222222222222222222\r\n22222222x22222xxxx22222222222222222222\r\n22222222222222xxxx22222222222222222222\r\n22222222222222xxx222222222222222222222\r\n22222222222222222222222222222222222222\r\n22222222222222222222222222222222222222\r\n22222222222222222222222222222222222222\r\n22222222222222222222222222222222222222\r\n22222222222222222222222222222222222222\r\n22222222222222222222222222222222222222\r\n22222222222222222222222222222222222222\r\n22222222222222222222222222222222222222\r\n22222222222222222222222222222222222222\r\n22222222222222222222222222222222222222\r\n22222222222222222222222222222222222222\r\n22222222222222222222222222222222222222\r\n22222222222222222222222222222222222222\r\n22222222222222222222222222222222222222\r\n22222222222222222222222222222222222222\r\n22222222222222222222222222222222222222\r\n22222222222222222222222222222222222222\r\n22222222222222222222222222222222222222', 'PcHh710hedge7RBSAJPAHh711hedge7SBSAJPAHh712hedge7PCSAJPAHh713hedge7QCSAJPAHy714hedge8RCSAJPAHs718hedge2RDSAJPAHh719hedge7SDSAJPAHh720hedge7PESAJPAHh721hedge7QESAJPAHz814hedge9RCPBJPAHz818hedge9RDPBJPAHv93hedge5KQBJPAHz103hedge9KRBJPAHc1112picnic_dummychair1PCSBKPAHc1113picnic_dummychair1QCSBKPAHc1114picnic_dummychair1RCSB`hFFPAHc1310picnic_dummychair1RBQCKJHc1315picnic_dummychair1SCQCKRAHb1321picnic_groundQEQCJPAHb147picnic_groundSARCJPAHc1410picnic_dummychair1RBRCKJHc1415picnic_dummychair1SCRCKRAHb1519picnic_groundSDSCJJHb1523picnic_groundSESCJRAHb165picnic_groundQAPDJJHb169picnic_groundQBPDJRAHL1620picnic_cloth1PEPDJJHL176picnic_cloth1RAQDJJHb1721picnic_groundQEQDJHHb187picnic_groundSARDJHHa190picnic_redbench2HSDJJHA200picnic_redbench1HPEJJHw2011hedge6SBPEJPAHh2012hedge7PCPEJPAHh2013hedge7QCPEJPAHt2014hedge3RCPEJPAHu2017hedge4QDPEJPAHh2018hedge7RDPEJPAHh2019hedge7SDPEJPAHy2020hedge8PEPEJPAHv2111hedge5SBQEJPAHM2112picnic_bench1PCQEJPAHN2113picnic_bench2QCQEJPAHO2114picnic_bench3RCQEJPAHM2117picnic_bench1QDQEJPAHN2118picnic_bench2RDQEJPAHO2119picnic_bench3SDQEJPAHv2120hedge5PEQEJPAHa220picnic_redbench2HREJJHv2211hedge5SBREJPAHv2220hedge5PEREJPAHb2225picnic_groundQFREJPAHA230picnic_redbench1HSEJJHv2311hedge5SBSEJPAHM2312picnic_bench1PCSEJJHM2319picnic_bench1SDSEJRAHv2320hedge5PESEJPAHc246picnic_dummychair1RAPFJPAHd247picnic_dummychair4SAPFJPAHe248picnic_dummychair6PBPFJPAHv2411hedge5SBPFJPAHN2412picnic_bench2PCPFJJHN2419picnic_bench2SDPFJRAHv2420hedge5PEPFJPAHb2423picnic_groundSEPFJJHb2427picnic_groundSFPFJRAHK255picnic_stumpQAQFJJHv2511hedge5SBQFJPAHN2512picnic_bench2PCQFJJHN2519picnic_bench2SDQFJRAHv2520hedge5PEQFJPAHG2524picnic_cloth2PFQFJJHK267picnic_stumpSARFJHHv2611hedge5SBRFJPAHO2612picnic_bench3PCRFJJHH2614picnic_fireplace1RCRFJHHI2616picnic_fireplace2PDRFJJHO2619picnic_bench3SDRFJRAHv2620hedge5PERFJPAHb2625picnic_groundQFRFJHHz2711hedge9SBSFJPAHQ2712picnic_lemonadePCSFJPAHz2720hedge9PESFJPAHE298picnic_firewood2PBQGJHHa300picnic_redbench2HRGJJHD308picnic_firewood1PBRGJHHA310picnic_redbench1HSGJJHD318picnic_firewood1PBSGJHHM3112picnic_bench1PCSGJPAHN3113picnic_bench2QCSGJPAHO3114picnic_bench3RCSGJPAHM3118picnic_bench1RDSGJPAHN3119picnic_bench2SDSGJPAHO3120picnic_bench3PESGJPAHf3127picnic_carrotSFSGJHHf3128picnic_carrotPGSGJHHf3129picnic_carrotQGSGJHHf3130picnic_carrotRGSGJHHf3131picnic_carrotSGSGJHHD328picnic_firewood1PBPHJHHF3212picnic_table2PCPHJJHP3214picnic_tableRCPHJJHF3218picnic_table2RDPHJJHP3220picnic_tablePEPHJJHr333hedge1KQHJPAHD338picnic_firewood1PBQHJHHM3312picnic_bench1PCQHJHHN3313picnic_bench2QCQHJHHO3314picnic_bench3RCQHJHHM3318picnic_bench1RDQHJHHN3319picnic_bench2SDQHJHHO3320picnic_bench3PEQHJHHg3327picnic_cabbageSFQHJHHg3328picnic_cabbagePGQHJHHg3329picnic_cabbageQGQHJHHv343hedge5KRHJPAHD348picnic_firewood1PBRHJHHv353hedge5KSHJPAHD358picnic_firewood1PBSHJHHv363hedge5KPIJPAHD368picnic_firewood1PBPIJHHD378picnic_firewood1PBQIJHHM3712picnic_bench1PCQIJPAHN3713picnic_bench2QCQIJPAHO3714picnic_bench3RCQIJPAHM3718picnic_bench1RDQIJPAHN3719picnic_bench2SDQIJPAHO3720picnic_bench3PEQIJPAHD388picnic_firewood1PBRIJHHF3812picnic_table2PCRIJJHP3814picnic_tableRCRIJJHF3818picnic_table2RDRIJJHP3820picnic_tablePERIJJHJ398picnic_firewood3PBSIJHHM3912picnic_bench1PCSIJHHN3913picnic_bench2QCSIJHHO3914picnic_bench3RCSIJHHM3918picnic_bench1RDSIJHHN3919picnic_bench2SDSIJHHO3920picnic_bench3PESIJH', '0');
INSERT INTO room_models VALUES ('cinema_a', '20', '27', '1', '0', 'xxxxxxx1xx11111111xxxxxx\r\nxxx1111111111111111xxxxx\r\nxxx111xxxx1111111111xxxx\r\nxxxx2xxxxxxxxxxxxxxxxxxx\r\nxx3x3x333311xxxxxxxxxx11\r\nxx3333333311111111111111\r\nxx3333333311111111111111\r\nxx3333333311111111122111\r\nxx3333333311x22222222111\r\nxx3333333311x22222222111\r\nxx3333333311xxxxxxxxx111\r\nxx3333333311111111111111\r\nxx3333333311111111111111\r\nxx3333333311111111111111\r\nxx3333333311111xxxx11111\r\nxx3333333311111xxxx11111\r\nxx3333333311111xxxx11111\r\nxx3333333311111xxxx11111\r\nxx3333333311111xxxx11111\r\nxx3333333311111xxxx11111\r\nxx3333333311111xxxx11111\r\n333333332111111xxxx11111\r\n333333332111111111111111\r\n333333332111111111111111\r\n333333332111111111111111\r\nxx3333332111111111111111\r\nxxxxxxxxxxxxxxxxxxx11111\r\nxxxxxxxxxxxxxxxxxxx11111\r\nxxxxxxxxxxxxxxxxxxx11111', 'PUHC42orangeJPAKHHA47loungey_chairSAPAKJHV48loungey_tablebigbPBPAKHHA49loungey_chairQBPAKRAHA52loungey_chairJQAKPAHA57loungey_chairSAQAKJHU58loungey_tablebigaPBQAKHHA59loungey_chairQBQAKRAHB62loungey_tableJRAKHHA72loungey_chairJSAKHHh713theater_chairQCSAIHHh714theater_chairRCSAIHHh715theater_chairSCSAIHHh716theater_chairPDSAIHHh717theater_chairQDSAIHHh718theater_chairRDSAIHHz721stairQESAIHHL89lightpoleQBPBKHHq813pomomaskiQCPBJJHq814pomomaskiRCPBJHHq815pomomaskiSCPBJHHq816pomomaskiPDPBJHHq817pomomaskiQDPBJHHq818pomomaskiRDPBJHHq819pomomaskiSDPBJIHz821stairQEPBIHHC92orangeJQBKHHh913theater_chairQCQBJHHh914theater_chairRCQBJHHh915theater_chairSCQBJHHh916theater_chairPDQBJHHh917theater_chairQDQBJHHh918theater_chairRDQBJHHh919theater_chairSDQBJHHh920theater_chairPEQBJHHz921stairQEQBIHHA102loungey_chairJRBKPAHA109loungey_chairQBRBKPAHB112loungey_tableJSBKHHB119loungey_tableQBSBKHHA122loungey_chairJPCKHHA129loungey_chairQBPCKHHd1217cubicb_chairQDPCIRAHc1219cubico_chairSDPCIJHd1315cubicb_chairSCQCIJHL1319lightpoleSDQCIHHd1320cubicb_chairPEQCIRAHL149lightpoleQBRCKHHA152loungey_chairJSCKPAHd1514cubicb_chairRCSCIPAHc1519cubico_chairSDSCIPAHB162loungey_tableJPDKHHA167loungey_chairSAPDKJHB168loungey_tablePBPDKJHA169loungey_chairQBPDKRAHd1613cubicb_chairQCPDIJHd1614cubicb_chairRCPDIRAHC1619orangeSDPDIHHA172loungey_chairJQDKHHA177loungey_chairSAQDKJHB178loungey_tablePBQDKJHA179loungey_chairQBQDKRAHd1719cubicb_chairSDQDIJHC182orangeJRDKHHd1814cubicb_chairRCRDIPAHK192bardesqueJSDKHHK202bardesqueJPEKIHb203bar_chairKPEKRAHL209lightpoleQBPEKHHd2014cubicb_chairRCPEIHHd2019cubicb_chairSDPEIJHc2020cubico_chairPEPEIRAHK212bardesqueJQEKIHb213bar_chairKQEKRAHd2119cubicb_chairSDQEIHHK222bardesqueJREKIHb223bar_chairKREKRAHL2216lightpolePDREIHHc2218cubico_chairRDREIHHK232bardesqueJSEKIHb233bar_chairKSEKRAHK242bardesqueJPFKIHb243bar_chairKPFKRAHK252bardesqueJQFKJ', '0');
INSERT INTO room_models VALUES ('the_den', '3', '22', '0', '0', '00000000xxxxxxxx\r\n0000000000000000\r\n0000000000000000\r\n000000000000xx00\r\n0000000000000000\r\n0000000000000000\r\n0000000000000000\r\nx000000000000000\r\n0000000000000000\r\n0000000000000000\r\n0000000000000000\r\n0000000000000000\r\nx000000000000000\r\nx000000000000000\r\nx000000000000000\r\nx000000000000000\r\nx000000000000000\r\nx000000000000000\r\nx000000000000000\r\nx000000000000000\r\nxxx00xxxxxxxxxxx\r\nxxx00xxxxxxxxxxx\r\nxxx00xxxxxxxxxxx\r\nGV00000000xxxxxxxx\r\n0000000000000000\r\n0000000000000000\r\n000000000000xx00\r\n0000000000000000\r\n0000000000000000\r\n0000000000000000\r\nx000000000000000\r\n0000000000000000\r\n0000000000000000\r\n0000000000000000\r\n0000000000000000\r\nx000000000000000\r\nx000000000000000\r\nx000000000000000\r\nx000000000000000\r\nx000000000000000\r\nx000000000000000\r\nx000000000000000\r\nx000000000000000\r\nxxx00xxxxxxxxxxx\r\nxxx00xxxxxxxxxxx\r\nxxx00xxxxxxxxxxx', '', '0');
INSERT INTO room_models VALUES ('model_s', '0', '3', '0', '2', 'xxxxxx\r\nx00000\r\nx00000\r\n000000\r\nx00000\r\nx00000\r\nx00000\r\nx00000', '', '0');
INSERT INTO room_models VALUES ('park_a', '2', '15', '0', '2', 'xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx\r\nxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx\r\nxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx0xxxxxxxxxxxxx\r\nxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx00xxxxxxxxxxxx\r\nxxxxxxxxxxxxx0x00xxxxxxxxxxx0x000xxxxxxxxxxx\r\nxxxxxxxxxxxx0000000000000000000000xxxxxxxxxx\r\nxxxxxxxxxxx000000000000000000000000xxxxxxxxx\r\nxxxxxxxxxxx0000000000000000000000000xxxxxxxx\r\nxxxxxxxxxxx00000000000000000000000000xxxxxxx\r\nxxxxxxxx000000000000000000000000000000xxxxxx\r\nxxxxxxx00000000000000000000000000000000xxxxx\r\nxxxxxxx000000000000000000000000000000000xxxx\r\nxxxxxxx0000000000000000000000000000000000xxx\r\nxxxxxxxxx000000000000000000000000000000000xx\r\n00000000000000000000xx00000000000000000000xx\r\n0000000000000000000xxxx00000000000xxxxxxx0xx\r\n0000000000000000000xxxx00000000000x00000xxxx\r\nxxxxx00x0000000000xxxxx0xxxxxx0000x0000000xx\r\nxxxxx0000000000000xxxxx0xx000x0000x000000xxx\r\nxxxxx0000000000000xxxxx0x000000000x00000xxxx\r\nxxxxx000000x0000000xxxx0x000000000xxx00xxxxx\r\nxxxxxxxx000x0000000xxx00xxx000000x0000xxxxxx\r\nxxxxxxxx000x000000xxxx0x0000000000000xxxxxxx\r\nxxxxxxxx000x000000011100000000000000xxxxxxxx\r\nxxxxxxxx000x00000001110000000000000xxxxxxxxx\r\nxxxxxxxxx00x0000000111x00000000x00xxxxxxxxxx\r\nxxxxxxxxxx0x0000000xxx0000000xxxxxxxxxxxxxxx\r\nxxxxxxxxxxxx000000xxxx0000000xxxxxxxxxxxxxxx\r\nxxxxxxxxxxxx000000xxx00xxxxx00xxxxxxxxxxxxxx\r\nxxxxxxxxxxxxxxxxx0xxx0xx000x00xxxxxxxxxxxxxx\r\nxxxxxxxxxxxxxxxxx0xxx0x000000xxxxxxxxxxxxxxx\r\nxxxxxxxxxxxxxxxxx0xxxxx00000xxxxxxxxxxxxxxxx\r\nxxxxxxxxxxxxxxxxx0xxxxx00xxxxxxxxxxxxxxxxxxx\r\nxxxxxxxxxxxxxxxxxxxxxxx0xxxxxxxxxxxxxxxxxxxx', 'RPHN527parkfence2SFQAHHHN529parkfence2QGQAHHHM619parkfence1SDRAHHHO620parkfence3PERAHPAHO621parkfence3QERAHPAHO622parkfence3RERAHPAHN623parkfence2SERAHPAHO624parkfence3PFRAHPAHO625parkfence3QFRAHPAHO626parkfence3RFRAHPAHM627parkfence1SFRAHJHO629parkfence3QGRAHJHN717parkfence2QDSAHHHO719parkfence3SDSAHJHO723parkfence3SESAHJHO727parkfence3SFSAHJHO729parkfence3QGSAHJHO817parkfence3QDPBHJHO819parkfence3SDPBHJHN821parkfence2QEPBHHHO823parkfence3SEPBHJHN825parkfence2QFPBHHHO827parkfence3SFPBHJHO829parkfence3QGPBHJHL98bench2PBQBHPAHK99benchQBQBHPAHO917parkfence3QDQBHJHN919parkfence2SDQBHRAHO921parkfence3QEQBHJHN923parkfence2SEQBHRAHO925parkfence3QFQBHJHN927parkfence2SFQBHRAHO929parkfence3QGQBHJHO1017parkfence3QDRBHJHO1021parkfence3QERBHJHO1025parkfence3QFRBHJHO1029parkfence3QGRBHJHL117bench2SASBHJHM1117parkfence1QDSBHPAHO1118parkfence3RDSBHPAHO1119parkfence3SDSBHPAHO1120parkfence3PESBHPAHN1121parkfence2QESBHJHO1122parkfence3RESBHPAHO1123parkfence3SESBHPAHO1124parkfence3PFSBHPAHN1125parkfence2QFSBHJHO1126parkfence3RFSBHPAHO1127parkfence3SFSBHPAHO1128parkfence3PGSBHPAHM1129parkfence1QGSBHRAHK127benchSAPCHJHL1635bench2SHPDHJHL1637bench2QIPDHPAHK1638benchRIPDHPAHK1735benchSHQDHJHL1827bench2SFRDHPAHK1828benchPGRDHPAHL1835bench2SHRDHJHL1925bench2QFSDHJHK1935benchSHSDHJHK2025benchQFPEHJHL2925bench2QFQGHPAHK2926benchRFQGHPAHL3023bench2SERGHJHK3123benchSESGHJ@`SGSBMRDPBPA0.0I2Mqueue_tile2JMPGRAH0.0I2Mqueue_tile2SAMPFSAJ0.0I2Mqueue_tile2QBMRFSAPA0.0I2Mqueue_tile2SFMSERBJ0.0I2Mqueue_tile2SCMRFPBPA0.0I2Mqueue_tile2REMPGQBH0.0I2Mqueue_tile2PGMPFRBH0.0I2Mqueue_tile2PCMPEPBH0.0I2Mqueue_tile2QGMRFRBJ0.0I2Mqueue_tile2QDMRDQBPA0.0I2Mqueue_tile2RFMRERBJ0.0I2Mqueue_tile2PFMSDRBJ0.0I2Mqueue_tile2PDMPGPBH0.0I2Mqueue_tile2RGMSFRBJ0.0I2Mqueue_tile2RAMRESAPA0.0I2Mqueue_tile2RBMPGSAH0.0I2Mqueue_tile2SDMREQBPA0.0I2Mqueue_tile2QEMRFQBPA0.0I2Mqueue_tile2RCMPFPBH0.0I2Mqueue_tile2KMRDSAPA0.0I2Mqueue_tile2PAMPESAJ0.0I2Mqueue_tile2PBMQFSAJ0.0I2Mqueue_tile2IMPGQAH0.0I2Mqueue_tile2SEMRDRBJ0.0I2Mqueue_tile2QCMREPBPA0.0I2Mqueue_tile2SGMPGRBH0.0I2Mqueue_tile2QAMQESAJ0.0I2Mqueue_tile2QFMPERBH0.0I2Mqueue_tile2RDMPEQBH0.0I2Mqueue_tile2PEMPFQBH0.0I2Mqueue_tile2', '0');
INSERT INTO room_models VALUES ('park_b', '11', '2', '0', '6', '0000x0000000\r\n0000xx000000\r\n000000000000\r\n00000000000x\r\n000000000000\r\n00x0000x0000', '', '0');
INSERT INTO room_models VALUES ('model_0', '0', '4', '0', '2', 'xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx\r\nx00000000xx00000000xx00000000xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx\r\nx00000000xx00000000xx00000000xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx\r\nx00000000xx00000000xx00000000xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx0000\r\n000000000xx00000000xx00000000xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx0000\r\nx00000000xx00000000xx00000000xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx0000\r\nx00000000xx00000000xx00000000xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx0000\r\nx00000000xx00000000xx00000000xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx\r\nx00000000xx00000000xx00000000xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx\r\nxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx', '', '1');
INSERT INTO room_models VALUES ('model_v', '0', '3', '2', '2', 'xxxxxxxxxxxxxxxxxxxx\r\nx222221111111111111x\r\nx222221111111111111x\r\n2222221111111111111x\r\nx222221111111111111x\r\nx222221111111111111x\r\nx222221111111111111x\r\nxxxxxxxx1111xxxxxxxx\r\nxxxxxxxx0000xxxxxxxx\r\nx000000x0000x000000x\r\nx000000x0000x000000x\r\nx00000000000x000000x\r\nx00000000000x000000x\r\nx000000000000000000x\r\nx000000000000000000x\r\nxxxxxxxx00000000000x\r\nx000000x00000000000x\r\nx000000x0000xxxxxxxx\r\nx00000000000x000000x\r\nx00000000000x000000x\r\nx00000000000x000000x\r\nx00000000000x000000x\r\nxxxxxxxx0000x000000x\r\nx000000x0000x000000x\r\nx000000x0000x000000x\r\nx000000000000000000x\r\nx000000000000000000x\r\nx000000000000000000x\r\nx000000000000000000x\r\nxxxxxxxxxxxxxxxxxxxx', '', '1');
INSERT INTO room_models VALUES ('model_t', '0', '3', '2', '2', 'xxxxxxxxxxxxxxxxxxxxxxxxxxxxx\r\nx222222222222222222222222222x\r\nx222222222222222222222222222x\r\n2222222222222222222222222222x\r\nx222222222222222222222222222x\r\nx2222xxxxxx222222xxxxxxx2222x\r\nx2222xxxxxx111111xxxxxxx2222x\r\nx2222xx111111111111111xx2222x\r\nx2222xx111111111111111xx2222x\r\nx2222xx11xxx1111xxxx11xx2222x\r\nx2222xx11xxx0000xxxx11xx2222x\r\nx22222111x00000000xx11xx2222x\r\nx22222111x00000000xx11xx2222x\r\nx22222111x00000000xx11xx2222x\r\nx22222111x00000000xx11xx2222x\r\nx22222111x00000000xx11xx2222x\r\nx22222111x00000000xx11xx2222x\r\nx2222xx11xxxxxxxxxxx11xx2222x\r\nx2222xx11xxxxxxxxxxx11xx2222x\r\nx2222xx111111111111111xx2222x\r\nx2222xx111111111111111xx2222x\r\nx2222xxxxxxxxxxxxxxxxxxx2222x\r\nx2222xxxxxxxxxxxxxxxxxxx2222x\r\nx222222222222222222222222222x\r\nx222222222222222222222222222x\r\nx222222222222222222222222222x\r\nx222222222222222222222222222x\r\nxxxxxxxxxxxxxxxxxxxxxxxxxxxxx', '', '1');
INSERT INTO room_models VALUES ('model_x', '0', '12', '0', '2', 'xxxxxxxxxxxxxxxxxxxx\r\nx000000000000000000x\r\nx000000000000000000x\r\nx000000000000000000x\r\nx000000000000000000x\r\nx000000000000000000x\r\nx000000000000000000x\r\nxxx00xxx0000xxx00xxx\r\nx000000x0000x000000x\r\nx000000x0000x000000x\r\nx000000x0000x000000x\r\nx000000x0000x000000x\r\n0000000x0000x000000x\r\nx000000x0000x000000x\r\nx000000x0000x000000x\r\nx000000x0000x000000x\r\nx000000x0000x000000x\r\nx000000x0000x000000x\r\nx000000xxxxxx000000x\r\nx000000000000000000x\r\nx000000000000000000x\r\nx000000000000000000x\r\nx000000000000000000x\r\nx000000000000000000x\r\nx000000000000000000x\r\nxxxxxxxxxxxxxxxxxxxx', '', '1');
INSERT INTO room_models VALUES ('model_w', '0', '3', '2', '2', 'xxxxxxxxxxxxxxxxxxxxxxxxxxx\r\nx2222xx1111111111xx11111111\r\nx2222xx1111111111xx11111111\r\n222222111111111111111111111\r\nx22222111111111111111111111\r\nx22222111111111111111111111\r\nx22222111111111111111111111\r\nx2222xx1111111111xx11111111\r\nx2222xx1111111111xx11111111\r\nx2222xx1111111111xxxx1111xx\r\nx2222xx1111111111xxxx0000xx\r\nxxxxxxx1111111111xx00000000\r\nxxxxxxx1111111111xx00000000\r\nx22222111111111111000000000\r\nx22222111111111111000000000\r\nx22222111111111111000000000\r\nx22222111111111111000000000\r\nx2222xx1111111111xx00000000\r\nx2222xx1111111111xx00000000\r\nx2222xxxx1111xxxxxxxxxxxxxx\r\nx2222xxxx0000xxxxxxxxxxxxxx\r\nx2222x0000000000xxxxxxxxxxx\r\nx2222x0000000000xxxxxxxxxxx\r\nx2222x0000000000xxxxxxxxxxx\r\nx2222x0000000000xxxxxxxxxxx\r\nx2222x0000000000xxxxxxxxxxx\r\nx2222x0000000000xxxxxxxxxxx', '', '1');
INSERT INTO room_models VALUES ('model_z', '0', '9', '0', '2', 'xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx\r\nxxxxxxxxxxx00000000000000000000\r\nxxxxxxxxxxx00000000000000000000\r\nxxxxxxxxxxx00000000000000000000\r\nx00000000xx00000000000000000000\r\nx00000000xx00000000000000000000\r\nx00000000xx00000000000000000000\r\nx00000000xx00000000000000000000\r\nx00000000xx00000000000000000000\r\n000000000xx00000000000000000000\r\nx00000000xx00000000000000000000\r\nx00000000xx00000000000000000000\r\nx00000000xx00000000000000000000\r\nx00000000xx00000000000000000000\r\nx00000000xx00000000000000000000\r\nx00000000xx00000000000000000000\r\nxxxxxxxxxxx00000000000000000000\r\nxxxxxxxxxxx00000000000000000000\r\nxxxxxxxxxxx00000000000000000000\r\nxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx', '', '1');
INSERT INTO room_models VALUES ('model_u', '0', '17', '1', '2', 'xxxxxxxxxxxxxxxxxxxxxxxx\r\nx1111100000000000000000x\r\nx1111100000000000000000x\r\nx1111100000000000000000x\r\nx1111100000000000000000x\r\nx1111100000000000000000x\r\nx1111100000000000000000x\r\nx1111100000000000000000x\r\nx1111100000000000000000x\r\nx1111100000000000000000x\r\nx1111100000000000000000x\r\nx1111100000000000000000x\r\nx1111100000000000000000x\r\nx1111100000000000000000x\r\nx1111100000000000000000x\r\nx1111100000000000000000x\r\nx1111100000000000000000x\r\n11111100000000000000000x\r\nx1111100000000000000000x\r\nx1111100000000000000000x\r\nx1111100000000000000000x\r\nx1111100000000000000000x\r\nx1111100000000000000000x\r\nx1111100000000000000000x\r\nx1111100000000000000000x\r\nx1111100000000000000000x\r\nx1111100000000000000000x\r\nx1111100000000000000000x\r\nx1111100000000000000000x\r\nx1111100000000000000000x\r\nx1111100000000000000000x\r\nx1111100000000000000000x\r\nx1111100000000000000000x\r\nx1111100000000000000000x\r\nx1111100000000000000000x\r\nxxxxxxxxxxxxxxxxxxxxxxxx', '', '1');
INSERT INTO room_models VALUES ('model_y', '0', '3', '0', '2', 'xxxxxxxxxxxxxxxxxxxxxxxxxxxx\r\nx00000000xx0000000000xx0000x\r\nx00000000xx0000000000xx0000x\r\n000000000xx0000000000xx0000x\r\nx00000000xx0000000000xx0000x\r\nx00000000xx0000xx0000xx0000x\r\nx00000000xx0000xx0000xx0000x\r\nx00000000xx0000xx0000000000x\r\nx00000000xx0000xx0000000000x\r\nxxxxx0000xx0000xx0000000000x\r\nxxxxx0000xx0000xx0000000000x\r\nxxxxx0000xx0000xxxxxxxxxxxxx\r\nxxxxx0000xx0000xxxxxxxxxxxxx\r\nx00000000xx0000000000000000x\r\nx00000000xx0000000000000000x\r\nx00000000xx0000000000000000x\r\nx00000000xx0000000000000000x\r\nx0000xxxxxxxxxxxxxxxxxx0000x\r\nx0000xxxxxxxxxxxxxxxxxx0000x\r\nx00000000000000000000000000x\r\nx00000000000000000000000000x\r\nx00000000000000000000000000x\r\nx00000000000000000000000000x\r\nxxxxxxxxxxxxxxxxxxxxxxxxxxxx', '', '1');
INSERT INTO room_models VALUES ('model_oscar', '0', '15', '1', '2', 'xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx\r\nxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx\r\nxxxxxxxxx11111111xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx\r\nxxxxxxxxx11111111xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx\r\nxxxxxxxxx11111111xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx\r\nxxxxxxxxx11111111xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx\r\nxxxxxxxxx11111111xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx\r\nxxxxxxxxx11111111xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx\r\nxxxxxxxxx11111111xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx\r\nxxxxxxxxx11111111xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx\r\nxxxxxxxxxxxx11xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx\r\nx1111111x11111111x00000000xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx\r\nx1111111x11111111x00000000xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx\r\nx1111111x11111111x00000000xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx\r\nx1111111111111111100000000xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx\r\nx1111111111111111100000000xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx\r\nx1111111x11111111x00000000xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx\r\nx1111111x11111111x00000000xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx\r\nx1111111x11111111x00000000xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx\r\nxxxxxxxxxxxx11xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx\r\nxxxxxxxxx00000000xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx\r\nxxxxxxxxx00000000xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx\r\nxxxxxxxxx00000000xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx\r\nxxxxxxxxx00000000xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx\r\nxxxxxxxxx00000000xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx\r\nxxxxxxxxx00000000xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx\r\nxxxxxxxxx00000000xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx\r\nxxxxxxxxx00000000xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx\r\nxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx', '', '1');
INSERT INTO room_models VALUES ('model_b2g', '0', '0', '0', '2', 'xxxxxxxxxxxxxx\r\nx00000x000000x\r\nx000000000000x\r\nx00000x000000x\r\nx00000x000000x\r\nx00000x000000x\r\nx00000x000000x\r\nxxx0xxx000000x\r\nx000000000000x\r\nx000000000000x\r\nx000000000000x\r\nx000000000000x\r\nx000000000000x\r\nx000000000000x\r\nx000000000000x\r\nx000000000000x\r\nx000000000000x\r\nx00000xx00000x\r\nxxxxxxxxxxxxxx', '', '1');
INSERT INTO room_models VALUES ('model_opening', '0', '23', '2', '2', 'xxxxxxxxxxxxxxxxxxx\r\nxxxxxxx222222222222\r\nxxxxxxx222222222222\r\nxxxxxxx222222222222\r\nxxxxxxx222222222222\r\nxxxxxxx222222222222\r\nxxxxxxx222222222222\r\nxxxxxxx222222222222\r\nxxxxxxx111111111111\r\nx222221111111111111\r\nx222221111111111111\r\nx222221111111111111\r\nx222221111111111111\r\nx222221111111111111\r\nx222221111111111111\r\nx222221111111111111\r\nx222221111111111111\r\nx2222xx111111111111\r\nx2222xx000000000000\r\nx2222xx000000000000\r\nx2222xx000000000000\r\nx2222xx000000000000\r\nx2222xx000000000000\r\n22222xx000000000000\r\nx2222xx000000000000\r\nxxxxxxxxxxxxxxxxxxx', '', '1');

-- ----------------------------
-- Table structure for `room_model_static`
-- ----------------------------
DROP TABLE IF EXISTS `room_model_static`;
CREATE TABLE `room_model_static` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `model` varchar(30) NOT NULL,
  `x` int(3) NOT NULL,
  `y` int(3) NOT NULL,
  `name` varchar(255) NOT NULL,
  `seat` int(11) NOT NULL DEFAULT '0',
  `rotation` int(3) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=939 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of room_model_static
-- ----------------------------
INSERT INTO room_model_static VALUES ('1', 'old_skool', '9', '4', 'mobiles_chair3', '1', '0');
INSERT INTO room_model_static VALUES ('2', 'old_skool', '10', '4', 'mobiles_chair3', '1', '0');
INSERT INTO room_model_static VALUES ('3', 'old_skool', '11', '4', 'mobiles_chair3', '1', '0');
INSERT INTO room_model_static VALUES ('4', 'old_skool', '12', '4', 'mobiles_chair3', '1', '0');
INSERT INTO room_model_static VALUES ('5', 'old_skool', '1', '10', 'mobiles_chair1', '1', '4');
INSERT INTO room_model_static VALUES ('6', 'old_skool', '10', '10', 'mobiles_chair1', '1', '4');
INSERT INTO room_model_static VALUES ('7', 'old_skool', '0', '11', 'mobiles_chair1', '1', '2');
INSERT INTO room_model_static VALUES ('8', 'old_skool', '1', '11', 'mobiles_table2', '0', '0');
INSERT INTO room_model_static VALUES ('9', 'old_skool', '2', '11', 'mobiles_table3', '0', '0');
INSERT INTO room_model_static VALUES ('10', 'old_skool', '3', '11', 'mobiles_chair1', '1', '6');
INSERT INTO room_model_static VALUES ('11', 'old_skool', '10', '11', 'mobiles_table2', '0', '0');
INSERT INTO room_model_static VALUES ('12', 'old_skool', '11', '11', 'mobiles_table3', '0', '0');
INSERT INTO room_model_static VALUES ('13', 'old_skool', '1', '12', 'mobiles_table1', '0', '0');
INSERT INTO room_model_static VALUES ('14', 'old_skool', '2', '12', 'mobiles_table4', '0', '0');
INSERT INTO room_model_static VALUES ('15', 'old_skool', '9', '12', 'mobiles_chair1', '1', '2');
INSERT INTO room_model_static VALUES ('16', 'old_skool', '10', '12', 'mobiles_table1', '0', '0');
INSERT INTO room_model_static VALUES ('17', 'old_skool', '11', '12', 'mobiles_table4', '0', '0');
INSERT INTO room_model_static VALUES ('18', 'old_skool', '12', '12', 'mobiles_chair1', '1', '6');
INSERT INTO room_model_static VALUES ('19', 'old_skool', '1', '13', 'mobiles_chair1', '1', '0');
INSERT INTO room_model_static VALUES ('20', 'old_skool', '11', '13', 'mobiles_chair1', '1', '0');
INSERT INTO room_model_static VALUES ('21', 'old_skool', '0', '15', 'mobiles_chair1', '1', '4');
INSERT INTO room_model_static VALUES ('22', 'old_skool', '0', '17', 'mobiles_chair1', '1', '2');
INSERT INTO room_model_static VALUES ('23', 'old_skool', '1', '17', 'mobiles_table2', '0', '0');
INSERT INTO room_model_static VALUES ('24', 'old_skool', '2', '17', 'mobiles_table3', '0', '0');
INSERT INTO room_model_static VALUES ('25', 'old_skool', '3', '17', 'mobiles_chair1', '1', '6');
INSERT INTO room_model_static VALUES ('26', 'old_skool', '1', '18', 'mobiles_table1', '0', '0');
INSERT INTO room_model_static VALUES ('27', 'old_skool', '2', '18', 'mobiles_table4', '0', '0');
INSERT INTO room_model_static VALUES ('28', 'old_skool', '2', '19', 'mobiles_chair1', '1', '0');
INSERT INTO room_model_static VALUES ('29', 'old_skool', '1', '21', 'mobiles_chair1', '1', '4');
INSERT INTO room_model_static VALUES ('30', 'old_skool', '6', '21', 'mobiles_table2', '0', '0');
INSERT INTO room_model_static VALUES ('31', 'old_skool', '7', '21', 'mobiles_table3', '0', '0');
INSERT INTO room_model_static VALUES ('32', 'old_skool', '12', '21', 'mobiles_chair1', '1', '4');
INSERT INTO room_model_static VALUES ('33', 'old_skool', '0', '22', 'mobiles_chair1', '1', '2');
INSERT INTO room_model_static VALUES ('34', 'old_skool', '1', '22', 'mobiles_table2', '0', '0');
INSERT INTO room_model_static VALUES ('35', 'old_skool', '2', '22', 'mobiles_table3', '0', '0');
INSERT INTO room_model_static VALUES ('36', 'old_skool', '3', '22', 'mobiles_chair1', '1', '6');
INSERT INTO room_model_static VALUES ('37', 'old_skool', '5', '22', 'mobiles_chair1', '1', '2');
INSERT INTO room_model_static VALUES ('38', 'old_skool', '6', '22', 'mobiles_table1', '0', '0');
INSERT INTO room_model_static VALUES ('39', 'old_skool', '7', '22', 'mobiles_table4', '0', '0');
INSERT INTO room_model_static VALUES ('40', 'old_skool', '8', '22', 'mobiles_chair1', '1', '6');
INSERT INTO room_model_static VALUES ('41', 'old_skool', '11', '22', 'mobiles_chair1', '1', '2');
INSERT INTO room_model_static VALUES ('42', 'old_skool', '12', '22', 'mobiles_table2', '0', '0');
INSERT INTO room_model_static VALUES ('43', 'old_skool', '13', '22', 'mobiles_table3', '0', '0');
INSERT INTO room_model_static VALUES ('44', 'old_skool', '14', '22', 'mobiles_chair1', '1', '6');
INSERT INTO room_model_static VALUES ('45', 'old_skool', '1', '23', 'mobiles_table1', '0', '0');
INSERT INTO room_model_static VALUES ('46', 'old_skool', '2', '23', 'mobiles_table4', '0', '0');
INSERT INTO room_model_static VALUES ('47', 'old_skool', '12', '23', 'mobiles_table1', '0', '0');
INSERT INTO room_model_static VALUES ('48', 'old_skool', '13', '23', 'mobiles_table4', '0', '0');
INSERT INTO room_model_static VALUES ('49', 'old_skool', '1', '24', 'mobiles_chair1', '1', '0');
INSERT INTO room_model_static VALUES ('50', 'old_skool', '7', '24', 'mobiles_chair1', '1', '4');
INSERT INTO room_model_static VALUES ('51', 'old_skool', '13', '24', 'mobiles_chair1', '1', '0');
INSERT INTO room_model_static VALUES ('52', 'pizza', '15', '0', 'pizza_plant1', '0', '0');
INSERT INTO room_model_static VALUES ('53', 'pizza', '14', '3', 'pizza_sofa1', '1', '4');
INSERT INTO room_model_static VALUES ('54', 'pizza', '15', '3', 'pizza_sofa2', '1', '4');
INSERT INTO room_model_static VALUES ('55', 'pizza', '15', '5', 'pizza_table', '0', '0');
INSERT INTO room_model_static VALUES ('56', 'pizza', '0', '6', 'pizza_plant2', '0', '0');
INSERT INTO room_model_static VALUES ('57', 'pizza', '14', '6', 'pizza_sofa3', '1', '0');
INSERT INTO room_model_static VALUES ('58', 'pizza', '15', '6', 'pizza_sofa4', '1', '0');
INSERT INTO room_model_static VALUES ('59', 'pizza', '1', '8', 'pizza_chair', '1', '4');
INSERT INTO room_model_static VALUES ('60', 'pizza', '2', '8', 'pizza_chair', '1', '4');
INSERT INTO room_model_static VALUES ('61', 'pizza', '2', '10', 'pizza_table', '0', '0');
INSERT INTO room_model_static VALUES ('62', 'pizza', '14', '10', 'pizza_sofa1', '1', '4');
INSERT INTO room_model_static VALUES ('63', 'pizza', '15', '10', 'pizza_sofa2', '1', '4');
INSERT INTO room_model_static VALUES ('64', 'pizza', '1', '11', 'pizza_chair', '1', '0');
INSERT INTO room_model_static VALUES ('65', 'pizza', '2', '11', 'pizza_chair', '1', '0');
INSERT INTO room_model_static VALUES ('66', 'pizza', '15', '12', 'pizza_table', '0', '0');
INSERT INTO room_model_static VALUES ('67', 'pizza', '14', '13', 'pizza_sofa3', '1', '0');
INSERT INTO room_model_static VALUES ('68', 'pizza', '15', '13', 'pizza_sofa4', '1', '0');
INSERT INTO room_model_static VALUES ('69', 'pizza', '1', '16', 'pizza_chair', '1', '4');
INSERT INTO room_model_static VALUES ('70', 'pizza', '2', '16', 'pizza_chair', '1', '4');
INSERT INTO room_model_static VALUES ('71', 'pizza', '2', '18', 'pizza_table', '0', '0');
INSERT INTO room_model_static VALUES ('72', 'pizza', '1', '19', 'pizza_chair', '1', '0');
INSERT INTO room_model_static VALUES ('73', 'pizza', '2', '19', 'pizza_chair', '1', '0');
INSERT INTO room_model_static VALUES ('74', 'pizza', '11', '21', 'pizza_chair', '1', '2');
INSERT INTO room_model_static VALUES ('75', 'pizza', '14', '21', 'pizza_chair', '1', '6');
INSERT INTO room_model_static VALUES ('76', 'pizza', '11', '22', 'pizza_chair', '1', '2');
INSERT INTO room_model_static VALUES ('77', 'pizza', '13', '22', 'pizza_table', '0', '0');
INSERT INTO room_model_static VALUES ('78', 'pizza', '14', '22', 'pizza_chair', '1', '6');
INSERT INTO room_model_static VALUES ('79', 'pizza', '0', '25', 'pizza_plant1', '0', '0');
INSERT INTO room_model_static VALUES ('80', 'pizza', '15', '25', 'pizza_plant1', '0', '0');
INSERT INTO room_model_static VALUES ('81', 'pub_a', '19', '1', 'pub_sofa2', '1', '4');
INSERT INTO room_model_static VALUES ('82', 'pub_a', '20', '1', 'pub_sofa', '1', '4');
INSERT INTO room_model_static VALUES ('83', 'pub_a', '21', '1', 'pub_sofa', '1', '4');
INSERT INTO room_model_static VALUES ('84', 'pub_a', '11', '2', 'bardesk1', '0', '0');
INSERT INTO room_model_static VALUES ('85', 'pub_a', '12', '2', 'pub_chair', '1', '6');
INSERT INTO room_model_static VALUES ('86', 'pub_a', '11', '3', 'bardesk2', '0', '0');
INSERT INTO room_model_static VALUES ('87', 'pub_a', '11', '4', 'bardesk1', '0', '0');
INSERT INTO room_model_static VALUES ('88', 'pub_a', '12', '4', 'pub_chair', '1', '6');
INSERT INTO room_model_static VALUES ('89', 'pub_a', '11', '5', 'bardesk2', '0', '0');
INSERT INTO room_model_static VALUES ('90', 'pub_a', '18', '5', 'pub_fence', '0', '0');
INSERT INTO room_model_static VALUES ('91', 'pub_a', '11', '6', 'bardesk1', '0', '0');
INSERT INTO room_model_static VALUES ('92', 'pub_a', '12', '6', 'pub_chair', '1', '6');
INSERT INTO room_model_static VALUES ('93', 'pub_a', '18', '6', 'pub_fence', '0', '0');
INSERT INTO room_model_static VALUES ('94', 'pub_a', '11', '7', 'bardesk2', '0', '0');
INSERT INTO room_model_static VALUES ('95', 'pub_a', '18', '7', 'pub_fence', '0', '0');
INSERT INTO room_model_static VALUES ('96', 'pub_a', '11', '8', 'bardesk1', '0', '0');
INSERT INTO room_model_static VALUES ('97', 'pub_a', '12', '8', 'pub_chair', '1', '6');
INSERT INTO room_model_static VALUES ('98', 'pub_a', '18', '8', 'pub_fence', '0', '0');
INSERT INTO room_model_static VALUES ('99', 'pub_a', '10', '9', 'bardesk4', '0', '0');
INSERT INTO room_model_static VALUES ('100', 'pub_a', '11', '9', 'bardesk3', '0', '0');
INSERT INTO room_model_static VALUES ('101', 'pub_a', '18', '9', 'pub_fence', '0', '0');
INSERT INTO room_model_static VALUES ('102', 'pub_a', '18', '10', 'pub_fence', '0', '0');
INSERT INTO room_model_static VALUES ('103', 'pub_a', '2', '11', 'pub_chair2', '1', '4');
INSERT INTO room_model_static VALUES ('104', 'pub_a', '3', '11', 'pub_chair2', '1', '4');
INSERT INTO room_model_static VALUES ('105', 'pub_a', '5', '11', 'pub_chair2', '1', '4');
INSERT INTO room_model_static VALUES ('106', 'pub_a', '6', '11', 'pub_chair2', '1', '4');
INSERT INTO room_model_static VALUES ('107', 'pub_a', '8', '11', 'pub_fence', '0', '0');
INSERT INTO room_model_static VALUES ('108', 'pub_a', '18', '11', 'pub_fence', '0', '0');
INSERT INTO room_model_static VALUES ('109', 'pub_a', '8', '12', 'pub_fence', '0', '0');
INSERT INTO room_model_static VALUES ('110', 'pub_a', '18', '12', 'pub_fence', '0', '0');
INSERT INTO room_model_static VALUES ('111', 'pub_a', '8', '13', 'pub_fence', '0', '0');
INSERT INTO room_model_static VALUES ('112', 'pub_a', '9', '13', 'pub_chair2', '1', '2');
INSERT INTO room_model_static VALUES ('113', 'pub_a', '14', '13', 'pub_chair3', '1', '2');
INSERT INTO room_model_static VALUES ('114', 'pub_a', '15', '13', 'pub_table2', '0', '0');
INSERT INTO room_model_static VALUES ('115', 'pub_a', '16', '13', 'pub_chair3', '1', '6');
INSERT INTO room_model_static VALUES ('116', 'pub_a', '18', '13', 'pub_fence', '0', '0');
INSERT INTO room_model_static VALUES ('117', 'pub_a', '8', '14', 'pub_fence', '0', '0');
INSERT INTO room_model_static VALUES ('118', 'pub_a', '9', '14', 'pub_chair2', '1', '2');
INSERT INTO room_model_static VALUES ('119', 'pub_a', '14', '14', 'pub_chair3', '1', '2');
INSERT INTO room_model_static VALUES ('120', 'pub_a', '15', '14', 'pub_table2', '0', '0');
INSERT INTO room_model_static VALUES ('121', 'pub_a', '16', '14', 'pub_chair3', '1', '6');
INSERT INTO room_model_static VALUES ('122', 'pub_a', '18', '14', 'pub_fence', '0', '0');
INSERT INTO room_model_static VALUES ('123', 'pub_a', '1', '15', 'pub_table', '0', '0');
INSERT INTO room_model_static VALUES ('124', 'pub_a', '5', '15', 'pub_fence', '0', '0');
INSERT INTO room_model_static VALUES ('125', 'pub_a', '18', '15', 'pub_fence', '0', '0');
INSERT INTO room_model_static VALUES ('126', 'pub_a', '1', '16', 'pub_sofa2', '1', '2');
INSERT INTO room_model_static VALUES ('127', 'pub_a', '5', '16', 'pub_fence', '0', '0');
INSERT INTO room_model_static VALUES ('128', 'pub_a', '18', '16', 'pub_fence', '0', '0');
INSERT INTO room_model_static VALUES ('129', 'pub_a', '1', '17', 'pub_sofa', '1', '2');
INSERT INTO room_model_static VALUES ('130', 'pub_a', '5', '17', 'pub_fence', '0', '0');
INSERT INTO room_model_static VALUES ('131', 'pub_a', '13', '17', 'pub_chair3', '1', '4');
INSERT INTO room_model_static VALUES ('132', 'pub_a', '14', '17', 'pub_chair3', '1', '4');
INSERT INTO room_model_static VALUES ('133', 'pub_a', '15', '17', 'pub_chair3', '1', '4');
INSERT INTO room_model_static VALUES ('134', 'pub_a', '16', '17', 'pub_chair3', '1', '4');
INSERT INTO room_model_static VALUES ('135', 'pub_a', '18', '17', 'pub_fence', '0', '0');
INSERT INTO room_model_static VALUES ('136', 'pub_a', '1', '18', 'pub_sofa', '1', '2');
INSERT INTO room_model_static VALUES ('137', 'pub_a', '5', '18', 'pub_fence', '0', '0');
INSERT INTO room_model_static VALUES ('138', 'pub_a', '13', '18', 'pub_table2', '0', '0');
INSERT INTO room_model_static VALUES ('139', 'pub_a', '14', '18', 'pub_table2', '0', '0');
INSERT INTO room_model_static VALUES ('140', 'pub_a', '15', '18', 'pub_table2', '0', '0');
INSERT INTO room_model_static VALUES ('141', 'pub_a', '16', '18', 'pub_table2', '0', '0');
INSERT INTO room_model_static VALUES ('142', 'pub_a', '18', '18', 'pub_fence', '0', '0');
INSERT INTO room_model_static VALUES ('143', 'pub_a', '2', '19', 'pub_sofa', '1', '0');
INSERT INTO room_model_static VALUES ('144', 'pub_a', '3', '19', 'pub_sofa2', '1', '0');
INSERT INTO room_model_static VALUES ('145', 'pub_a', '5', '19', 'pub_fence', '0', '0');
INSERT INTO room_model_static VALUES ('146', 'pub_a', '13', '19', 'pub_chair3', '1', '0');
INSERT INTO room_model_static VALUES ('147', 'pub_a', '14', '19', 'pub_chair3', '1', '0');
INSERT INTO room_model_static VALUES ('148', 'pub_a', '15', '19', 'pub_chair3', '1', '0');
INSERT INTO room_model_static VALUES ('149', 'pub_a', '16', '19', 'pub_chair3', '1', '0');
INSERT INTO room_model_static VALUES ('150', 'pub_a', '18', '19', 'pub_fence', '0', '0');
INSERT INTO room_model_static VALUES ('151', 'pub_a', '1', '20', 'pub_fence', '0', '0');
INSERT INTO room_model_static VALUES ('152', 'pub_a', '2', '20', 'pub_fence', '0', '0');
INSERT INTO room_model_static VALUES ('153', 'pub_a', '3', '20', 'pub_fence', '0', '0');
INSERT INTO room_model_static VALUES ('154', 'pub_a', '4', '20', 'pub_fence', '0', '0');
INSERT INTO room_model_static VALUES ('155', 'pub_a', '5', '20', 'pub_fence', '0', '0');
INSERT INTO room_model_static VALUES ('156', 'pub_a', '18', '20', 'pub_fence', '0', '0');
INSERT INTO room_model_static VALUES ('157', 'pub_a', '7', '21', 'pub_sofa2', '1', '4');
INSERT INTO room_model_static VALUES ('158', 'pub_a', '8', '21', 'pub_sofa', '1', '4');
INSERT INTO room_model_static VALUES ('159', 'pub_a', '12', '21', 'pub_fence', '0', '0');
INSERT INTO room_model_static VALUES ('160', 'pub_a', '13', '21', 'pub_fence', '0', '0');
INSERT INTO room_model_static VALUES ('161', 'pub_a', '14', '21', 'pub_fence', '0', '0');
INSERT INTO room_model_static VALUES ('162', 'pub_a', '15', '21', 'pub_fence', '0', '0');
INSERT INTO room_model_static VALUES ('163', 'pub_a', '16', '21', 'pub_fence', '0', '0');
INSERT INTO room_model_static VALUES ('164', 'pub_a', '17', '21', 'pub_fence', '0', '0');
INSERT INTO room_model_static VALUES ('165', 'pub_a', '18', '21', 'pub_fence', '0', '0');
INSERT INTO room_model_static VALUES ('166', 'pub_a', '6', '22', 'pub_sofa2', '1', '2');
INSERT INTO room_model_static VALUES ('167', 'pub_a', '15', '22', 'pub_table', '0', '0');
INSERT INTO room_model_static VALUES ('168', 'pub_a', '16', '22', 'pub_chair2', '1', '4');
INSERT INTO room_model_static VALUES ('169', 'pub_a', '17', '22', 'pub_chair2', '1', '4');
INSERT INTO room_model_static VALUES ('170', 'pub_a', '6', '23', 'pub_sofa', '1', '2');
INSERT INTO room_model_static VALUES ('171', 'pub_a', '8', '23', 'pub_table2', '0', '0');
INSERT INTO room_model_static VALUES ('172', 'pub_a', '6', '24', 'pub_sofa', '1', '2');
INSERT INTO room_model_static VALUES ('173', 'pub_a', '8', '24', 'pub_table2', '0', '0');
INSERT INTO room_model_static VALUES ('174', 'pub_a', '6', '25', 'pub_sofa', '1', '2');
INSERT INTO room_model_static VALUES ('175', 'pub_a', '8', '25', 'pub_table2', '0', '0');
INSERT INTO room_model_static VALUES ('176', 'newbie_lobby', '16', '0', 'crl_lamp', '0', '0');
INSERT INTO room_model_static VALUES ('177', 'newbie_lobby', '17', '0', 'crl_sofa2c', '1', '4');
INSERT INTO room_model_static VALUES ('178', 'newbie_lobby', '18', '0', 'crl_sofa2b', '1', '4');
INSERT INTO room_model_static VALUES ('179', 'newbie_lobby', '19', '0', 'crl_sofa2a', '1', '4');
INSERT INTO room_model_static VALUES ('180', 'newbie_lobby', '20', '0', 'crl_lamp', '0', '0');
INSERT INTO room_model_static VALUES ('181', 'newbie_lobby', '16', '1', 'crl_chair', '1', '2');
INSERT INTO room_model_static VALUES ('182', 'newbie_lobby', '7', '2', 'crl_lamp', '0', '0');
INSERT INTO room_model_static VALUES ('183', 'newbie_lobby', '11', '2', 'crl_lamp', '0', '0');
INSERT INTO room_model_static VALUES ('184', 'newbie_lobby', '16', '2', 'crl_chair', '1', '2');
INSERT INTO room_model_static VALUES ('185', 'newbie_lobby', '5', '3', 'crl_pillar', '0', '0');
INSERT INTO room_model_static VALUES ('186', 'newbie_lobby', '7', '3', 'crl_chair', '1', '2');
INSERT INTO room_model_static VALUES ('187', 'newbie_lobby', '9', '3', 'crl_table1b', '0', '0');
INSERT INTO room_model_static VALUES ('188', 'newbie_lobby', '11', '3', 'crl_sofa1c', '1', '6');
INSERT INTO room_model_static VALUES ('189', 'newbie_lobby', '16', '3', 'crl_chair', '1', '2');
INSERT INTO room_model_static VALUES ('190', 'newbie_lobby', '19', '3', 'crl_table2b', '0', '0');
INSERT INTO room_model_static VALUES ('191', 'newbie_lobby', '20', '3', 'crl_table2a', '0', '0');
INSERT INTO room_model_static VALUES ('192', 'newbie_lobby', '0', '4', 'crl_lamp', '0', '0');
INSERT INTO room_model_static VALUES ('193', 'newbie_lobby', '1', '4', 'crl_sofa2c', '1', '4');
INSERT INTO room_model_static VALUES ('194', 'newbie_lobby', '2', '4', 'crl_sofa2b', '1', '4');
INSERT INTO room_model_static VALUES ('195', 'newbie_lobby', '3', '4', 'crl_sofa2a', '1', '4');
INSERT INTO room_model_static VALUES ('196', 'newbie_lobby', '4', '4', 'crl_lamp', '0', '0');
INSERT INTO room_model_static VALUES ('197', 'newbie_lobby', '9', '4', 'crl_table1a', '0', '0');
INSERT INTO room_model_static VALUES ('198', 'newbie_lobby', '11', '4', 'crl_sofa1b', '1', '6');
INSERT INTO room_model_static VALUES ('199', 'newbie_lobby', '15', '4', 'crl_wall2a', '0', '0');
INSERT INTO room_model_static VALUES ('200', 'newbie_lobby', '16', '4', 'crl_lamp', '0', '0');
INSERT INTO room_model_static VALUES ('201', 'newbie_lobby', '0', '5', 'crl_chair', '1', '2');
INSERT INTO room_model_static VALUES ('202', 'newbie_lobby', '7', '5', 'crl_chair', '1', '2');
INSERT INTO room_model_static VALUES ('203', 'newbie_lobby', '11', '5', 'crl_sofa1a', '1', '6');
INSERT INTO room_model_static VALUES ('204', 'newbie_lobby', '2', '6', 'crl_table2b', '0', '0');
INSERT INTO room_model_static VALUES ('205', 'newbie_lobby', '3', '6', 'crl_table2a', '0', '0');
INSERT INTO room_model_static VALUES ('206', 'newbie_lobby', '11', '6', 'crl_lamp', '0', '0');
INSERT INTO room_model_static VALUES ('207', 'newbie_lobby', '0', '7', 'crl_chair', '1', '2');
INSERT INTO room_model_static VALUES ('208', 'newbie_lobby', '0', '8', 'crl_lamp', '0', '0');
INSERT INTO room_model_static VALUES ('209', 'newbie_lobby', '1', '8', 'crl_sofa3c', '1', '0');
INSERT INTO room_model_static VALUES ('210', 'newbie_lobby', '2', '8', 'crl_sofa3b', '1', '0');
INSERT INTO room_model_static VALUES ('211', 'newbie_lobby', '3', '8', 'crl_sofa3a', '1', '0');
INSERT INTO room_model_static VALUES ('212', 'newbie_lobby', '4', '8', 'crl_lamp', '0', '0');
INSERT INTO room_model_static VALUES ('213', 'newbie_lobby', '19', '8', 'crl_barchair2', '1', '0');
INSERT INTO room_model_static VALUES ('214', 'newbie_lobby', '20', '8', 'crl_tablebar', '0', '0');
INSERT INTO room_model_static VALUES ('215', 'newbie_lobby', '21', '8', 'crl_barchair2', '1', '0');
INSERT INTO room_model_static VALUES ('216', 'newbie_lobby', '5', '9', 'crl_pillar2', '0', '0');
INSERT INTO room_model_static VALUES ('217', 'newbie_lobby', '9', '9', 'crl_pillar', '0', '0');
INSERT INTO room_model_static VALUES ('218', 'newbie_lobby', '8', '15', 'crl_desk1a', '0', '0');
INSERT INTO room_model_static VALUES ('219', 'newbie_lobby', '9', '15', 'crl_deski', '0', '0');
INSERT INTO room_model_static VALUES ('220', 'newbie_lobby', '10', '15', 'crl_deskh', '0', '0');
INSERT INTO room_model_static VALUES ('221', 'newbie_lobby', '10', '16', 'crl_deskg', '0', '0');
INSERT INTO room_model_static VALUES ('222', 'newbie_lobby', '10', '17', 'crl_deskf', '0', '0');
INSERT INTO room_model_static VALUES ('223', 'newbie_lobby', '10', '18', 'crl_deske', '0', '0');
INSERT INTO room_model_static VALUES ('224', 'newbie_lobby', '10', '19', 'crl_deske', '0', '0');
INSERT INTO room_model_static VALUES ('225', 'newbie_lobby', '10', '20', 'crl_deske', '0', '0');
INSERT INTO room_model_static VALUES ('226', 'newbie_lobby', '10', '21', 'crl_deske', '0', '0');
INSERT INTO room_model_static VALUES ('227', 'newbie_lobby', '10', '22', 'crl_deske', '0', '0');
INSERT INTO room_model_static VALUES ('228', 'newbie_lobby', '10', '23', 'crl_deske', '0', '0');
INSERT INTO room_model_static VALUES ('229', 'newbie_lobby', '7', '24', 'crl_wallb', '0', '0');
INSERT INTO room_model_static VALUES ('230', 'newbie_lobby', '10', '24', 'crl_deske', '0', '0');
INSERT INTO room_model_static VALUES ('231', 'newbie_lobby', '7', '25', 'crl_walla', '0', '0');
INSERT INTO room_model_static VALUES ('232', 'newbie_lobby', '8', '25', 'crl_desk1b', '0', '0');
INSERT INTO room_model_static VALUES ('233', 'newbie_lobby', '9', '25', 'crl_desk1c', '0', '0');
INSERT INTO room_model_static VALUES ('234', 'newbie_lobby', '10', '25', 'crl_desk1d', '0', '0');
INSERT INTO room_model_static VALUES ('235', 'newbie_lobby', '12', '27', 'crl_lamp2', '0', '0');
INSERT INTO room_model_static VALUES ('236', 'newbie_lobby', '13', '27', 'crl_cabinet2', '0', '0');
INSERT INTO room_model_static VALUES ('237', 'newbie_lobby', '14', '27', 'crl_cabinet1', '0', '0');
INSERT INTO room_model_static VALUES ('238', 'newbie_lobby', '15', '27', 'crl_lamp2', '0', '0');
INSERT INTO room_model_static VALUES ('239', 'tearoom', '13', '1', 'hardwoodsofa1', '1', '4');
INSERT INTO room_model_static VALUES ('240', 'tearoom', '14', '1', 'hardwoodsofa2', '1', '4');
INSERT INTO room_model_static VALUES ('241', 'tearoom', '15', '1', 'hardwoodsofa3', '1', '4');
INSERT INTO room_model_static VALUES ('242', 'tearoom', '16', '1', 'teabamboo', '0', '0');
INSERT INTO room_model_static VALUES ('243', 'tearoom', '18', '1', 'hardwoodsofa1', '1', '4');
INSERT INTO room_model_static VALUES ('244', 'tearoom', '19', '1', 'hardwoodsofa2', '1', '4');
INSERT INTO room_model_static VALUES ('245', 'tearoom', '20', '1', 'hardwoodsofa3', '1', '4');
INSERT INTO room_model_static VALUES ('246', 'tearoom', '13', '3', 'teasmalltable1', '0', '0');
INSERT INTO room_model_static VALUES ('247', 'tearoom', '15', '3', 'teasmalltable2', '0', '0');
INSERT INTO room_model_static VALUES ('248', 'tearoom', '18', '3', 'teasmalltable1', '0', '0');
INSERT INTO room_model_static VALUES ('249', 'tearoom', '20', '3', 'teasmalltable2', '0', '0');
INSERT INTO room_model_static VALUES ('250', 'tearoom', '2', '6', 'teastool', '1', '4');
INSERT INTO room_model_static VALUES ('251', 'tearoom', '3', '6', 'teastool', '1', '4');
INSERT INTO room_model_static VALUES ('252', 'tearoom', '8', '6', 'chinastoolred', '1', '4');
INSERT INTO room_model_static VALUES ('253', 'tearoom', '9', '6', 'chinastoolred', '1', '4');
INSERT INTO room_model_static VALUES ('254', 'tearoom', '10', '6', 'chinastoolred', '1', '4');
INSERT INTO room_model_static VALUES ('255', 'tearoom', '11', '6', 'chinastoolred', '1', '4');
INSERT INTO room_model_static VALUES ('256', 'tearoom', '2', '8', 'teatable1', '0', '0');
INSERT INTO room_model_static VALUES ('257', 'tearoom', '3', '8', 'teatable2', '0', '0');
INSERT INTO room_model_static VALUES ('258', 'tearoom', '2', '9', 'teastool2', '1', '0');
INSERT INTO room_model_static VALUES ('259', 'tearoom', '3', '9', 'teastool2', '1', '0');
INSERT INTO room_model_static VALUES ('260', 'tearoom', '16', '9', 'teastool', '1', '4');
INSERT INTO room_model_static VALUES ('261', 'tearoom', '17', '9', 'teastool', '1', '4');
INSERT INTO room_model_static VALUES ('262', 'tearoom', '16', '11', 'teatable1', '0', '0');
INSERT INTO room_model_static VALUES ('263', 'tearoom', '17', '11', 'teatable2', '0', '0');
INSERT INTO room_model_static VALUES ('264', 'tearoom', '2', '12', 'teastool', '1', '4');
INSERT INTO room_model_static VALUES ('265', 'tearoom', '3', '12', 'teastool', '1', '4');
INSERT INTO room_model_static VALUES ('266', 'tearoom', '16', '12', 'teastool2', '1', '0');
INSERT INTO room_model_static VALUES ('267', 'tearoom', '17', '12', 'teastool2', '1', '0');
INSERT INTO room_model_static VALUES ('268', 'tearoom', '2', '14', 'teatable1', '0', '0');
INSERT INTO room_model_static VALUES ('269', 'tearoom', '3', '14', 'teatable2', '0', '0');
INSERT INTO room_model_static VALUES ('270', 'tearoom', '2', '15', 'teastool2', '1', '0');
INSERT INTO room_model_static VALUES ('271', 'tearoom', '3', '15', 'teastool2', '1', '0');
INSERT INTO room_model_static VALUES ('272', 'tearoom', '0', '18', 'teavase', '0', '0');
INSERT INTO room_model_static VALUES ('273', 'tearoom', '0', '19', 'chinastoolgreen', '1', '2');
INSERT INTO room_model_static VALUES ('274', 'tearoom', '0', '20', 'chinastoolgreen', '1', '2');
INSERT INTO room_model_static VALUES ('275', 'tearoom', '0', '21', 'teavase', '0', '0');
INSERT INTO room_model_static VALUES ('276', 'rooftop', '0', '1', 'rooftop_minichair', '1', '4');
INSERT INTO room_model_static VALUES ('277', 'rooftop', '16', '1', 'rooftop_flatcurb', '0', '0');
INSERT INTO room_model_static VALUES ('278', 'rooftop', '17', '1', 'rooftop_flatcurb2', '0', '0');
INSERT INTO room_model_static VALUES ('279', 'rooftop', '0', '2', 'rooftop_rodtable', '0', '0');
INSERT INTO room_model_static VALUES ('280', 'rooftop', '1', '2', 'rooftop_minichair', '1', '6');
INSERT INTO room_model_static VALUES ('281', 'rooftop', '0', '3', 'rooftop_minichair', '1', '0');
INSERT INTO room_model_static VALUES ('282', 'rooftop', '16', '4', 'rooftop_flatcurb', '0', '0');
INSERT INTO room_model_static VALUES ('283', 'rooftop', '17', '4', 'rooftop_flatcurb2', '0', '0');
INSERT INTO room_model_static VALUES ('284', 'rooftop', '2', '6', 'rooftop_minichair', '1', '4');
INSERT INTO room_model_static VALUES ('285', 'rooftop', '1', '7', 'rooftop_minichair', '1', '2');
INSERT INTO room_model_static VALUES ('286', 'rooftop', '2', '7', 'rooftop_rodtable', '0', '0');
INSERT INTO room_model_static VALUES ('287', 'rooftop', '3', '7', 'rooftop_minichair', '1', '6');
INSERT INTO room_model_static VALUES ('288', 'rooftop', '2', '8', 'rooftop_minichair', '1', '0');
INSERT INTO room_model_static VALUES ('289', 'rooftop', '0', '9', 'rooftop_minichair', '1', '4');
INSERT INTO room_model_static VALUES ('290', 'rooftop', '0', '10', 'rooftop_emptytable', '0', '0');
INSERT INTO room_model_static VALUES ('291', 'rooftop', '0', '11', 'rooftop_minichair', '1', '0');
INSERT INTO room_model_static VALUES ('292', 'rooftop', '1', '13', 'rooftop_flatcurb', '0', '0');
INSERT INTO room_model_static VALUES ('293', 'rooftop', '6', '13', 'rooftop_flatcurb', '0', '0');
INSERT INTO room_model_static VALUES ('294', 'rooftop', '8', '13', 'rooftop_flatcurb', '0', '0');
INSERT INTO room_model_static VALUES ('295', 'rooftop', '13', '13', 'rooftop_flatcurb', '0', '0');
INSERT INTO room_model_static VALUES ('296', 'rooftop', '1', '14', 'rooftop_flatcurb3', '0', '0');
INSERT INTO room_model_static VALUES ('297', 'rooftop', '6', '14', 'rooftop_flatcurb3', '0', '0');
INSERT INTO room_model_static VALUES ('298', 'rooftop', '8', '14', 'rooftop_flatcurb3', '0', '0');
INSERT INTO room_model_static VALUES ('299', 'rooftop', '13', '14', 'rooftop_flatcurb3', '0', '0');
INSERT INTO room_model_static VALUES ('300', 'rooftop', '1', '15', 'rooftop_flatcurb3', '0', '0');
INSERT INTO room_model_static VALUES ('301', 'rooftop', '6', '15', 'rooftop_flatcurb3', '0', '0');
INSERT INTO room_model_static VALUES ('302', 'rooftop', '8', '15', 'rooftop_flatcurb3', '0', '0');
INSERT INTO room_model_static VALUES ('303', 'rooftop', '13', '15', 'rooftop_flatcurb3', '0', '0');
INSERT INTO room_model_static VALUES ('304', 'rooftop', '1', '16', 'rooftop_flatcurb3', '0', '0');
INSERT INTO room_model_static VALUES ('305', 'rooftop', '6', '16', 'rooftop_flatcurb3', '0', '0');
INSERT INTO room_model_static VALUES ('306', 'rooftop', '8', '16', 'rooftop_flatcurb3', '0', '0');
INSERT INTO room_model_static VALUES ('307', 'rooftop', '13', '16', 'rooftop_flatcurb3', '0', '0');
INSERT INTO room_model_static VALUES ('308', 'rooftop', '1', '17', 'rooftop_flatcurb4', '0', '0');
INSERT INTO room_model_static VALUES ('309', 'rooftop', '2', '17', 'rooftop_flatcurb3', '0', '0');
INSERT INTO room_model_static VALUES ('310', 'rooftop', '3', '17', 'rooftop_flatcurb3', '0', '0');
INSERT INTO room_model_static VALUES ('311', 'rooftop', '4', '17', 'rooftop_flatcurb3', '0', '0');
INSERT INTO room_model_static VALUES ('312', 'rooftop', '5', '17', 'rooftop_flatcurb3', '0', '0');
INSERT INTO room_model_static VALUES ('313', 'rooftop', '6', '17', 'rooftop_flatcurb5', '0', '0');
INSERT INTO room_model_static VALUES ('314', 'rooftop', '8', '17', 'rooftop_flatcurb4', '0', '0');
INSERT INTO room_model_static VALUES ('315', 'rooftop', '9', '17', 'rooftop_flatcurb3', '0', '0');
INSERT INTO room_model_static VALUES ('316', 'rooftop', '10', '17', 'rooftop_flatcurb3', '0', '0');
INSERT INTO room_model_static VALUES ('317', 'rooftop', '11', '17', 'rooftop_flatcurb3', '0', '0');
INSERT INTO room_model_static VALUES ('318', 'rooftop', '12', '17', 'rooftop_flatcurb3', '0', '0');
INSERT INTO room_model_static VALUES ('319', 'rooftop', '13', '17', 'rooftop_flatcurb5', '0', '0');
INSERT INTO room_model_static VALUES ('320', 'rooftop_2', '8', '0', 'rooftop_bigchair', '1', '4');
INSERT INTO room_model_static VALUES ('321', 'rooftop_2', '8', '1', 'rooftop_bigtable', '0', '0');
INSERT INTO room_model_static VALUES ('322', 'rooftop_2', '0', '2', 'rooftop_sofab', '1', '4');
INSERT INTO room_model_static VALUES ('323', 'rooftop_2', '1', '2', 'rooftop_sofa', '1', '4');
INSERT INTO room_model_static VALUES ('324', 'rooftop_2', '8', '2', 'rooftop_bigchair', '1', '0');
INSERT INTO room_model_static VALUES ('325', 'rooftop_2', '8', '3', 'rooftop_bigchair', '1', '4');
INSERT INTO room_model_static VALUES ('326', 'rooftop_2', '8', '4', 'rooftop_bigtable', '0', '0');
INSERT INTO room_model_static VALUES ('327', 'rooftop_2', '0', '5', 'rooftop_sofab', '1', '0');
INSERT INTO room_model_static VALUES ('328', 'rooftop_2', '1', '5', 'rooftop_sofa', '1', '0');
INSERT INTO room_model_static VALUES ('329', 'rooftop_2', '8', '5', 'rooftop_bigchair', '1', '0');
INSERT INTO room_model_static VALUES ('330', 'rooftop_2', '0', '6', 'rooftop_sofab', '1', '4');
INSERT INTO room_model_static VALUES ('331', 'rooftop_2', '1', '6', 'rooftop_sofa', '1', '4');
INSERT INTO room_model_static VALUES ('332', 'rooftop_2', '7', '6', 'rooftop_sofab', '1', '4');
INSERT INTO room_model_static VALUES ('333', 'rooftop_2', '8', '6', 'rooftop_sofa', '1', '4');
INSERT INTO room_model_static VALUES ('334', 'rooftop_2', '0', '9', 'rooftop_sofab', '1', '0');
INSERT INTO room_model_static VALUES ('335', 'rooftop_2', '1', '9', 'rooftop_sofa', '1', '0');
INSERT INTO room_model_static VALUES ('336', 'rooftop_2', '7', '9', 'rooftop_sofab', '1', '0');
INSERT INTO room_model_static VALUES ('337', 'rooftop_2', '8', '9', 'rooftop_sofa', '1', '0');
INSERT INTO room_model_static VALUES ('338', 'star_lounge', '21', '15', 'star_table', '0', '0');
INSERT INTO room_model_static VALUES ('339', 'star_lounge', '22', '15', 'star_sofa', '1', '4');
INSERT INTO room_model_static VALUES ('340', 'star_lounge', '23', '15', 'star_sofa2', '1', '4');
INSERT INTO room_model_static VALUES ('341', 'star_lounge', '24', '15', 'palm', '0', '0');
INSERT INTO room_model_static VALUES ('342', 'star_lounge', '21', '16', 'star_sofa2', '1', '2');
INSERT INTO room_model_static VALUES ('343', 'star_lounge', '32', '16', 'dj1', '0', '0');
INSERT INTO room_model_static VALUES ('344', 'star_lounge', '33', '16', 'dj2', '0', '0');
INSERT INTO room_model_static VALUES ('345', 'star_lounge', '34', '16', 'dj3', '0', '0');
INSERT INTO room_model_static VALUES ('346', 'star_lounge', '21', '17', 'star_sofa', '1', '2');
INSERT INTO room_model_static VALUES ('347', 'star_lounge', '28', '17', 'star_microphone', '0', '0');
INSERT INTO room_model_static VALUES ('348', 'star_lounge', '21', '18', 'star_sofa2', '1', '2');
INSERT INTO room_model_static VALUES ('349', 'star_lounge', '35', '18', 'star_sofa', '1', '6');
INSERT INTO room_model_static VALUES ('350', 'star_lounge', '21', '19', 'star_sofa', '1', '2');
INSERT INTO room_model_static VALUES ('351', 'star_lounge', '35', '19', 'star_sofa2', '1', '6');
INSERT INTO room_model_static VALUES ('352', 'star_lounge', '21', '20', 'star_sofa2', '1', '2');
INSERT INTO room_model_static VALUES ('353', 'star_lounge', '24', '20', 'star_sofa2', '1', '2');
INSERT INTO room_model_static VALUES ('354', 'star_lounge', '32', '20', 'star_sofa', '1', '6');
INSERT INTO room_model_static VALUES ('355', 'star_lounge', '35', '20', 'star_sofa', '1', '6');
INSERT INTO room_model_static VALUES ('356', 'star_lounge', '21', '21', 'star_sofa', '1', '2');
INSERT INTO room_model_static VALUES ('357', 'star_lounge', '24', '21', 'star_sofa', '1', '2');
INSERT INTO room_model_static VALUES ('358', 'star_lounge', '32', '21', 'star_sofa2', '1', '6');
INSERT INTO room_model_static VALUES ('359', 'star_lounge', '35', '21', 'star_sofa2', '1', '6');
INSERT INTO room_model_static VALUES ('360', 'star_lounge', '21', '22', 'star_sofachair', '1', '2');
INSERT INTO room_model_static VALUES ('361', 'star_lounge', '24', '22', 'star_table', '0', '0');
INSERT INTO room_model_static VALUES ('362', 'star_lounge', '25', '22', 'star_sofa2', '1', '0');
INSERT INTO room_model_static VALUES ('363', 'star_lounge', '26', '22', 'star_sofa', '1', '0');
INSERT INTO room_model_static VALUES ('364', 'star_lounge', '30', '22', 'star_sofa2', '1', '0');
INSERT INTO room_model_static VALUES ('365', 'star_lounge', '31', '22', 'star_sofa', '1', '0');
INSERT INTO room_model_static VALUES ('366', 'star_lounge', '32', '22', 'star_table', '0', '0');
INSERT INTO room_model_static VALUES ('367', 'star_lounge', '35', '22', 'star_table', '0', '0');
INSERT INTO room_model_static VALUES ('368', 'star_lounge', '21', '23', 'palm', '0', '0');
INSERT INTO room_model_static VALUES ('369', 'star_lounge', '35', '23', 'star_sofa', '1', '6');
INSERT INTO room_model_static VALUES ('370', 'star_lounge', '22', '24', 'bar10', '0', '0');
INSERT INTO room_model_static VALUES ('371', 'star_lounge', '35', '24', 'star_sofa2', '1', '6');
INSERT INTO room_model_static VALUES ('372', 'star_lounge', '37', '24', 'star_sofa', '1', '4');
INSERT INTO room_model_static VALUES ('373', 'star_lounge', '38', '24', 'star_sofa2', '1', '4');
INSERT INTO room_model_static VALUES ('374', 'star_lounge', '39', '24', 'star_sofa', '1', '4');
INSERT INTO room_model_static VALUES ('375', 'star_lounge', '40', '24', 'star_sofa2', '1', '4');
INSERT INTO room_model_static VALUES ('376', 'star_lounge', '22', '25', 'bar9', '0', '0');
INSERT INTO room_model_static VALUES ('377', 'star_lounge', '25', '25', 'star_sofa2', '1', '0');
INSERT INTO room_model_static VALUES ('378', 'star_lounge', '26', '25', 'star_sofa', '1', '0');
INSERT INTO room_model_static VALUES ('379', 'star_lounge', '30', '25', 'star_sofa2', '1', '0');
INSERT INTO room_model_static VALUES ('380', 'star_lounge', '31', '25', 'star_sofa', '1', '0');
INSERT INTO room_model_static VALUES ('381', 'star_lounge', '35', '25', 'star_sofa', '1', '6');
INSERT INTO room_model_static VALUES ('382', 'star_lounge', '36', '25', 'star_sofa2', '1', '2');
INSERT INTO room_model_static VALUES ('383', 'star_lounge', '22', '26', 'bar8', '0', '0');
INSERT INTO room_model_static VALUES ('384', 'star_lounge', '25', '26', 'palm1', '0', '0');
INSERT INTO room_model_static VALUES ('385', 'star_lounge', '26', '26', 'palm3', '0', '0');
INSERT INTO room_model_static VALUES ('386', 'star_lounge', '30', '26', 'palm2', '0', '0');
INSERT INTO room_model_static VALUES ('387', 'star_lounge', '31', '26', 'palm4', '0', '0');
INSERT INTO room_model_static VALUES ('388', 'star_lounge', '35', '26', 'star_sofa2', '1', '6');
INSERT INTO room_model_static VALUES ('389', 'star_lounge', '36', '26', 'star_sofa', '1', '2');
INSERT INTO room_model_static VALUES ('390', 'star_lounge', '39', '26', 'star_table', '0', '0');
INSERT INTO room_model_static VALUES ('391', 'star_lounge', '40', '26', 'star_table', '0', '0');
INSERT INTO room_model_static VALUES ('392', 'star_lounge', '22', '27', 'bar7', '0', '0');
INSERT INTO room_model_static VALUES ('393', 'star_lounge', '25', '27', 'star_sofa', '1', '4');
INSERT INTO room_model_static VALUES ('394', 'star_lounge', '26', '27', 'star_sofa2', '1', '4');
INSERT INTO room_model_static VALUES ('395', 'star_lounge', '30', '27', 'star_sofa', '1', '4');
INSERT INTO room_model_static VALUES ('396', 'star_lounge', '31', '27', 'star_sofa2', '1', '4');
INSERT INTO room_model_static VALUES ('397', 'star_lounge', '35', '27', 'star_table', '0', '0');
INSERT INTO room_model_static VALUES ('398', 'star_lounge', '36', '27', 'palm', '0', '0');
INSERT INTO room_model_static VALUES ('399', 'star_lounge', '37', '27', 'star_table', '0', '0');
INSERT INTO room_model_static VALUES ('400', 'star_lounge', '22', '28', 'bar6', '0', '0');
INSERT INTO room_model_static VALUES ('401', 'star_lounge', '22', '29', 'bar5', '0', '0');
INSERT INTO room_model_static VALUES ('402', 'star_lounge', '25', '29', 'star_table', '0', '0');
INSERT INTO room_model_static VALUES ('403', 'star_lounge', '26', '29', 'star_table', '0', '0');
INSERT INTO room_model_static VALUES ('404', 'star_lounge', '16', '30', 'star_table', '0', '0');
INSERT INTO room_model_static VALUES ('405', 'star_lounge', '22', '30', 'bar4', '0', '0');
INSERT INTO room_model_static VALUES ('406', 'star_lounge', '16', '31', 'star_sofa2', '1', '2');
INSERT INTO room_model_static VALUES ('407', 'star_lounge', '22', '31', 'bar3', '0', '0');
INSERT INTO room_model_static VALUES ('408', 'star_lounge', '25', '31', 'star_sofa2', '1', '0');
INSERT INTO room_model_static VALUES ('409', 'star_lounge', '26', '31', 'star_sofa', '1', '0');
INSERT INTO room_model_static VALUES ('410', 'star_lounge', '30', '31', 'star_sofa', '1', '6');
INSERT INTO room_model_static VALUES ('411', 'star_lounge', '16', '32', 'star_sofa', '1', '2');
INSERT INTO room_model_static VALUES ('412', 'star_lounge', '22', '32', 'bar2', '0', '0');
INSERT INTO room_model_static VALUES ('413', 'star_lounge', '25', '32', 'palm4', '0', '0');
INSERT INTO room_model_static VALUES ('414', 'star_lounge', '26', '32', 'palm1', '0', '0');
INSERT INTO room_model_static VALUES ('415', 'star_lounge', '30', '32', 'star_sofa2', '1', '6');
INSERT INTO room_model_static VALUES ('416', 'star_lounge', '16', '33', 'star_sofa2', '1', '2');
INSERT INTO room_model_static VALUES ('417', 'star_lounge', '22', '33', 'bar1', '0', '0');
INSERT INTO room_model_static VALUES ('418', 'star_lounge', '25', '33', 'star_sofa', '1', '4');
INSERT INTO room_model_static VALUES ('419', 'star_lounge', '26', '33', 'star_sofa2', '1', '4');
INSERT INTO room_model_static VALUES ('420', 'star_lounge', '30', '33', 'star_sofa', '1', '6');
INSERT INTO room_model_static VALUES ('421', 'star_lounge', '16', '34', 'star_sofa', '1', '2');
INSERT INTO room_model_static VALUES ('422', 'star_lounge', '30', '34', 'star_sofa2', '1', '6');
INSERT INTO room_model_static VALUES ('423', 'star_lounge', '35', '34', 'palm3', '0', '0');
INSERT INTO room_model_static VALUES ('424', 'star_lounge', '36', '34', 'palm2', '0', '0');
INSERT INTO room_model_static VALUES ('425', 'star_lounge', '16', '35', 'star_table', '0', '0');
INSERT INTO room_model_static VALUES ('426', 'star_lounge', '30', '35', 'star_sofa', '1', '6');
INSERT INTO room_model_static VALUES ('427', 'star_lounge', '30', '36', 'star_sofa2', '1', '6');
INSERT INTO room_model_static VALUES ('428', 'star_lounge', '25', '37', 'star_sofachair', '1', '0');
INSERT INTO room_model_static VALUES ('429', 'star_lounge', '26', '37', 'star_sofa2', '1', '0');
INSERT INTO room_model_static VALUES ('430', 'star_lounge', '27', '37', 'star_sofa', '1', '0');
INSERT INTO room_model_static VALUES ('431', 'star_lounge', '28', '37', 'star_sofa2', '1', '0');
INSERT INTO room_model_static VALUES ('432', 'star_lounge', '29', '37', 'star_sofa', '1', '0');
INSERT INTO room_model_static VALUES ('433', 'star_lounge', '30', '37', 'star_table', '0', '0');
INSERT INTO room_model_static VALUES ('434', 'netcafe', '6', '0', 'shift1', '0', '0');
INSERT INTO room_model_static VALUES ('435', 'netcafe', '7', '0', 'shift2', '0', '0');
INSERT INTO room_model_static VALUES ('436', 'netcafe', '10', '1', 'm', '0', '0');
INSERT INTO room_model_static VALUES ('437', 'netcafe', '13', '1', 'l', '0', '0');
INSERT INTO room_model_static VALUES ('438', 'netcafe', '16', '1', 'k', '0', '0');
INSERT INTO room_model_static VALUES ('439', 'netcafe', '19', '1', 'k', '0', '0');
INSERT INTO room_model_static VALUES ('440', 'netcafe', '5', '3', 'kukat6', '0', '0');
INSERT INTO room_model_static VALUES ('441', 'netcafe', '6', '3', 'kukat5', '0', '0');
INSERT INTO room_model_static VALUES ('442', 'netcafe', '12', '3', 'kukat2', '0', '0');
INSERT INTO room_model_static VALUES ('443', 'netcafe', '13', '3', 'kukat1', '0', '0');
INSERT INTO room_model_static VALUES ('444', 'netcafe', '19', '3', 'kukat2', '0', '0');
INSERT INTO room_model_static VALUES ('445', 'netcafe', '20', '3', 'kukat1', '0', '0');
INSERT INTO room_model_static VALUES ('446', 'netcafe', '12', '4', 'shift1', '0', '0');
INSERT INTO room_model_static VALUES ('447', 'netcafe', '13', '4', 'shift2', '0', '0');
INSERT INTO room_model_static VALUES ('448', 'netcafe', '19', '4', 'shift1', '0', '0');
INSERT INTO room_model_static VALUES ('449', 'netcafe', '20', '4', 'shift2', '0', '0');
INSERT INTO room_model_static VALUES ('450', 'netcafe', '0', '5', 'shift1', '0', '0');
INSERT INTO room_model_static VALUES ('451', 'netcafe', '1', '5', 'shift2', '0', '0');
INSERT INTO room_model_static VALUES ('452', 'netcafe', '2', '5', 'shift1', '0', '0');
INSERT INTO room_model_static VALUES ('453', 'netcafe', '3', '5', 'shift2', '0', '0');
INSERT INTO room_model_static VALUES ('454', 'netcafe', '15', '7', 'k', '0', '0');
INSERT INTO room_model_static VALUES ('455', 'netcafe', '16', '7', 'table2', '0', '0');
INSERT INTO room_model_static VALUES ('456', 'netcafe', '17', '7', 'tablecorner', '0', '0');
INSERT INTO room_model_static VALUES ('457', 'netcafe', '18', '7', 'm', '0', '0');
INSERT INTO room_model_static VALUES ('458', 'netcafe', '15', '8', 'l', '0', '0');
INSERT INTO room_model_static VALUES ('459', 'netcafe', '16', '8', 'table2', '0', '0');
INSERT INTO room_model_static VALUES ('460', 'netcafe', '18', '8', 'l', '0', '0');
INSERT INTO room_model_static VALUES ('461', 'netcafe', '4', '9', 'm', '0', '0');
INSERT INTO room_model_static VALUES ('462', 'netcafe', '9', '9', 'k', '0', '0');
INSERT INTO room_model_static VALUES ('463', 'netcafe', '10', '9', 'table3', '0', '0');
INSERT INTO room_model_static VALUES ('464', 'netcafe', '11', '9', 'tablecorner', '0', '0');
INSERT INTO room_model_static VALUES ('465', 'netcafe', '12', '9', 'm', '0', '0');
INSERT INTO room_model_static VALUES ('466', 'netcafe', '15', '9', 'k', '0', '0');
INSERT INTO room_model_static VALUES ('467', 'netcafe', '16', '9', 'table2', '0', '0');
INSERT INTO room_model_static VALUES ('468', 'netcafe', '18', '9', 'k', '0', '0');
INSERT INTO room_model_static VALUES ('469', 'netcafe', '4', '10', 'k', '0', '0');
INSERT INTO room_model_static VALUES ('470', 'netcafe', '9', '10', 'm', '0', '0');
INSERT INTO room_model_static VALUES ('471', 'netcafe', '10', '10', 'table3', '0', '0');
INSERT INTO room_model_static VALUES ('472', 'netcafe', '12', '10', 'm', '0', '0');
INSERT INTO room_model_static VALUES ('473', 'netcafe', '15', '10', 'm', '0', '0');
INSERT INTO room_model_static VALUES ('474', 'netcafe', '16', '10', 'table2', '0', '0');
INSERT INTO room_model_static VALUES ('475', 'netcafe', '18', '10', 'k', '0', '0');
INSERT INTO room_model_static VALUES ('476', 'netcafe', '4', '11', 'l', '0', '0');
INSERT INTO room_model_static VALUES ('477', 'netcafe', '9', '11', 'l', '0', '0');
INSERT INTO room_model_static VALUES ('478', 'netcafe', '10', '11', 'table3', '0', '0');
INSERT INTO room_model_static VALUES ('479', 'netcafe', '12', '11', 'l', '0', '0');
INSERT INTO room_model_static VALUES ('480', 'netcafe', '4', '12', 'k', '0', '0');
INSERT INTO room_model_static VALUES ('481', 'netcafe', '9', '12', 'l', '0', '0');
INSERT INTO room_model_static VALUES ('482', 'netcafe', '10', '12', 'table3', '0', '0');
INSERT INTO room_model_static VALUES ('483', 'netcafe', '12', '12', 'k', '0', '0');
INSERT INTO room_model_static VALUES ('484', 'netcafe', '4', '13', 'm', '0', '0');
INSERT INTO room_model_static VALUES ('485', 'netcafe', '5', '16', 'kukat2', '0', '0');
INSERT INTO room_model_static VALUES ('486', 'netcafe', '6', '16', 'kukat1', '0', '0');
INSERT INTO room_model_static VALUES ('487', 'netcafe', '7', '16', 'kukat2', '0', '0');
INSERT INTO room_model_static VALUES ('488', 'netcafe', '8', '16', 'kukat1', '0', '0');
INSERT INTO room_model_static VALUES ('489', 'netcafe', '9', '16', 'kukat3', '0', '0');
INSERT INTO room_model_static VALUES ('490', 'netcafe', '15', '16', 'kukka2', '0', '0');
INSERT INTO room_model_static VALUES ('491', 'netcafe', '9', '17', 'kukat4', '0', '0');
INSERT INTO room_model_static VALUES ('492', 'netcafe', '6', '18', 'k', '0', '0');
INSERT INTO room_model_static VALUES ('493', 'netcafe', '9', '18', 'kukat3', '0', '0');
INSERT INTO room_model_static VALUES ('494', 'netcafe', '20', '18', 'sofabig3', '1', '6');
INSERT INTO room_model_static VALUES ('495', 'netcafe', '9', '19', 'kukat4', '0', '0');
INSERT INTO room_model_static VALUES ('496', 'netcafe', '17', '19', 'table1', '0', '0');
INSERT INTO room_model_static VALUES ('497', 'netcafe', '18', '19', 'tablecorner', '0', '0');
INSERT INTO room_model_static VALUES ('498', 'netcafe', '20', '19', 'sofabig2', '1', '6');
INSERT INTO room_model_static VALUES ('499', 'netcafe', '17', '20', 'table1', '0', '0');
INSERT INTO room_model_static VALUES ('500', 'netcafe', '20', '20', 'sofabig2', '1', '6');
INSERT INTO room_model_static VALUES ('501', 'netcafe', '6', '21', 'm', '0', '0');
INSERT INTO room_model_static VALUES ('502', 'netcafe', '17', '21', 'table1', '0', '0');
INSERT INTO room_model_static VALUES ('503', 'netcafe', '20', '21', 'sofabig1', '1', '6');
INSERT INTO room_model_static VALUES ('504', 'netcafe', '16', '23', 'sofalittle3', '1', '0');
INSERT INTO room_model_static VALUES ('505', 'netcafe', '17', '23', 'sofalittle2', '1', '0');
INSERT INTO room_model_static VALUES ('506', 'netcafe', '18', '23', 'sofalittle1', '1', '0');
INSERT INTO room_model_static VALUES ('507', 'netcafe', '20', '23', 'kukka', '0', '0');
INSERT INTO room_model_static VALUES ('508', 'dusty_lounge', '8', '4', 'greenchair2', '1', '4');
INSERT INTO room_model_static VALUES ('509', 'dusty_lounge', '9', '4', 'greenchair1', '1', '4');
INSERT INTO room_model_static VALUES ('510', 'dusty_lounge', '8', '6', 'greenchair2', '1', '0');
INSERT INTO room_model_static VALUES ('511', 'dusty_lounge', '9', '6', 'greenchair1', '1', '0');
INSERT INTO room_model_static VALUES ('512', 'dusty_lounge', '20', '6', 'dustylamp', '0', '0');
INSERT INTO room_model_static VALUES ('513', 'dusty_lounge', '28', '6', 'dustylamp', '0', '0');
INSERT INTO room_model_static VALUES ('514', 'dusty_lounge', '3', '7', 'greenchair2', '1', '4');
INSERT INTO room_model_static VALUES ('515', 'dusty_lounge', '4', '7', 'greenchair1', '1', '4');
INSERT INTO room_model_static VALUES ('516', 'dusty_lounge', '3', '9', 'greenchair2', '1', '0');
INSERT INTO room_model_static VALUES ('517', 'dusty_lounge', '4', '9', 'greenchair1', '1', '0');
INSERT INTO room_model_static VALUES ('518', 'dusty_lounge', '21', '10', 'yellowchair', '1', '2');
INSERT INTO room_model_static VALUES ('519', 'dusty_lounge', '23', '10', 'yellowchair', '1', '6');
INSERT INTO room_model_static VALUES ('520', 'dusty_lounge', '26', '10', 'yellowchair', '1', '2');
INSERT INTO room_model_static VALUES ('521', 'dusty_lounge', '28', '10', 'yellowchair', '1', '6');
INSERT INTO room_model_static VALUES ('522', 'dusty_lounge', '11', '12', 'greenchair2', '1', '2');
INSERT INTO room_model_static VALUES ('523', 'dusty_lounge', '3', '13', 'greenchair2', '1', '4');
INSERT INTO room_model_static VALUES ('524', 'dusty_lounge', '4', '13', 'greenchair1', '1', '4');
INSERT INTO room_model_static VALUES ('525', 'dusty_lounge', '11', '13', 'greenchair1', '1', '2');
INSERT INTO room_model_static VALUES ('526', 'dusty_lounge', '11', '14', 'dustylamp', '0', '0');
INSERT INTO room_model_static VALUES ('527', 'dusty_lounge', '3', '15', 'greenchair2', '1', '0');
INSERT INTO room_model_static VALUES ('528', 'dusty_lounge', '4', '15', 'greenchair1', '1', '0');
INSERT INTO room_model_static VALUES ('529', 'dusty_lounge', '11', '15', 'greenchair2', '1', '2');
INSERT INTO room_model_static VALUES ('530', 'dusty_lounge', '24', '15', 'yellowchair', '1', '4');
INSERT INTO room_model_static VALUES ('531', 'dusty_lounge', '11', '16', 'greenchair1', '1', '2');
INSERT INTO room_model_static VALUES ('532', 'dusty_lounge', '22', '17', 'yellowchair', '1', '2');
INSERT INTO room_model_static VALUES ('533', 'dusty_lounge', '24', '17', 'dustylamp', '0', '0');
INSERT INTO room_model_static VALUES ('534', 'dusty_lounge', '26', '17', 'yellowchair', '1', '6');
INSERT INTO room_model_static VALUES ('535', 'dusty_lounge', '11', '19', 'dustylamp', '0', '0');
INSERT INTO room_model_static VALUES ('536', 'dusty_lounge', '24', '19', 'yellowchair', '1', '0');
INSERT INTO room_model_static VALUES ('537', 'dusty_lounge', '12', '23', 'greenchair2', '1', '2');
INSERT INTO room_model_static VALUES ('538', 'dusty_lounge', '14', '23', 'greenchair2', '1', '6');
INSERT INTO room_model_static VALUES ('539', 'dusty_lounge', '12', '24', 'greenchair1', '1', '2');
INSERT INTO room_model_static VALUES ('540', 'dusty_lounge', '14', '24', 'greenchair1', '1', '6');
INSERT INTO room_model_static VALUES ('541', 'orient', '17', '10', 'bench', '1', '2');
INSERT INTO room_model_static VALUES ('542', 'orient', '19', '10', 'bench', '1', '6');
INSERT INTO room_model_static VALUES ('543', 'orient', '21', '10', 'bench', '1', '2');
INSERT INTO room_model_static VALUES ('544', 'orient', '23', '10', 'bench', '1', '6');
INSERT INTO room_model_static VALUES ('545', 'orient', '17', '11', 'bench', '1', '2');
INSERT INTO room_model_static VALUES ('546', 'orient', '19', '11', 'bench', '1', '6');
INSERT INTO room_model_static VALUES ('547', 'orient', '21', '11', 'bench', '1', '2');
INSERT INTO room_model_static VALUES ('548', 'orient', '23', '11', 'bench', '1', '6');
INSERT INTO room_model_static VALUES ('549', 'orient', '32', '11', 'koc_chair', '1', '4');
INSERT INTO room_model_static VALUES ('550', 'orient', '17', '12', 'bench', '1', '2');
INSERT INTO room_model_static VALUES ('551', 'orient', '19', '12', 'bench', '1', '6');
INSERT INTO room_model_static VALUES ('552', 'orient', '21', '12', 'bench', '1', '2');
INSERT INTO room_model_static VALUES ('553', 'orient', '23', '12', 'bench', '1', '6');
INSERT INTO room_model_static VALUES ('554', 'orient', '31', '12', 'koc_chair', '1', '2');
INSERT INTO room_model_static VALUES ('555', 'orient', '32', '12', 'koc_table', '0', '0');
INSERT INTO room_model_static VALUES ('556', 'orient', '33', '12', 'koc_chair', '1', '6');
INSERT INTO room_model_static VALUES ('557', 'orient', '17', '13', 'bench', '1', '2');
INSERT INTO room_model_static VALUES ('558', 'orient', '19', '13', 'bench', '1', '6');
INSERT INTO room_model_static VALUES ('559', 'orient', '21', '13', 'bench', '1', '2');
INSERT INTO room_model_static VALUES ('560', 'orient', '23', '13', 'bench', '1', '6');
INSERT INTO room_model_static VALUES ('561', 'orient', '25', '13', 'koc_chair', '1', '4');
INSERT INTO room_model_static VALUES ('562', 'orient', '32', '13', 'koc_chair', '1', '0');
INSERT INTO room_model_static VALUES ('563', 'orient', '17', '14', 'bench', '1', '2');
INSERT INTO room_model_static VALUES ('564', 'orient', '19', '14', 'bench', '1', '6');
INSERT INTO room_model_static VALUES ('565', 'orient', '21', '14', 'bench', '1', '2');
INSERT INTO room_model_static VALUES ('566', 'orient', '23', '14', 'bench', '1', '6');
INSERT INTO room_model_static VALUES ('567', 'orient', '25', '14', 'koc_table', '0', '0');
INSERT INTO room_model_static VALUES ('568', 'orient', '26', '14', 'koc_chair', '1', '6');
INSERT INTO room_model_static VALUES ('569', 'orient', '17', '15', 'bench', '1', '2');
INSERT INTO room_model_static VALUES ('570', 'orient', '19', '15', 'bench', '1', '6');
INSERT INTO room_model_static VALUES ('571', 'orient', '21', '15', 'bench', '1', '2');
INSERT INTO room_model_static VALUES ('572', 'orient', '23', '15', 'bench', '1', '6');
INSERT INTO room_model_static VALUES ('573', 'orient', '25', '15', 'koc_chair', '1', '0');
INSERT INTO room_model_static VALUES ('574', 'orient', '29', '15', 'koc_chair', '1', '2');
INSERT INTO room_model_static VALUES ('575', 'orient', '30', '15', 'koc_table', '0', '0');
INSERT INTO room_model_static VALUES ('576', 'orient', '31', '15', 'koc_chair', '1', '6');
INSERT INTO room_model_static VALUES ('577', 'orient', '30', '16', 'koc_chair', '1', '0');
INSERT INTO room_model_static VALUES ('578', 'orient', '25', '24', 'chairf1', '1', '2');
INSERT INTO room_model_static VALUES ('579', 'orient', '33', '24', 'chairf1', '1', '6');
INSERT INTO room_model_static VALUES ('580', 'orient', '17', '25', 'bench', '1', '2');
INSERT INTO room_model_static VALUES ('581', 'orient', '19', '25', 'bench', '1', '6');
INSERT INTO room_model_static VALUES ('582', 'orient', '21', '25', 'bench', '1', '2');
INSERT INTO room_model_static VALUES ('583', 'orient', '23', '25', 'bench', '1', '6');
INSERT INTO room_model_static VALUES ('584', 'orient', '25', '25', 'chairf1', '1', '2');
INSERT INTO room_model_static VALUES ('585', 'orient', '33', '25', 'chairf1', '1', '6');
INSERT INTO room_model_static VALUES ('586', 'orient', '17', '26', 'bench', '1', '2');
INSERT INTO room_model_static VALUES ('587', 'orient', '19', '26', 'bench', '1', '6');
INSERT INTO room_model_static VALUES ('588', 'orient', '21', '26', 'bench', '1', '2');
INSERT INTO room_model_static VALUES ('589', 'orient', '23', '26', 'bench', '1', '6');
INSERT INTO room_model_static VALUES ('590', 'orient', '25', '26', 'chairf1', '1', '2');
INSERT INTO room_model_static VALUES ('591', 'orient', '33', '26', 'chairf1', '1', '6');
INSERT INTO room_model_static VALUES ('592', 'orient', '17', '27', 'bench', '1', '2');
INSERT INTO room_model_static VALUES ('593', 'orient', '19', '27', 'bench', '1', '6');
INSERT INTO room_model_static VALUES ('594', 'orient', '21', '27', 'bench', '1', '2');
INSERT INTO room_model_static VALUES ('595', 'orient', '23', '27', 'bench', '1', '6');
INSERT INTO room_model_static VALUES ('596', 'orient', '17', '28', 'bench', '1', '2');
INSERT INTO room_model_static VALUES ('597', 'orient', '19', '28', 'bench', '1', '6');
INSERT INTO room_model_static VALUES ('598', 'orient', '21', '28', 'bench', '1', '2');
INSERT INTO room_model_static VALUES ('599', 'orient', '23', '28', 'bench', '1', '6');
INSERT INTO room_model_static VALUES ('600', 'orient', '17', '29', 'bench', '1', '2');
INSERT INTO room_model_static VALUES ('601', 'orient', '19', '29', 'bench', '1', '6');
INSERT INTO room_model_static VALUES ('602', 'orient', '21', '29', 'bench', '1', '2');
INSERT INTO room_model_static VALUES ('603', 'orient', '23', '29', 'bench', '1', '6');
INSERT INTO room_model_static VALUES ('604', 'theater', '11', '10', 'mic', '0', '0');
INSERT INTO room_model_static VALUES ('605', 'theater', '2', '11', 'thchair2', '1', '2');
INSERT INTO room_model_static VALUES ('606', 'theater', '2', '12', 'thchair2', '1', '2');
INSERT INTO room_model_static VALUES ('607', 'theater', '2', '15', 'thchair2', '1', '2');
INSERT INTO room_model_static VALUES ('608', 'theater', '6', '15', 'thchair1', '1', '0');
INSERT INTO room_model_static VALUES ('609', 'theater', '7', '15', 'thchair1', '1', '0');
INSERT INTO room_model_static VALUES ('610', 'theater', '8', '15', 'thchair1', '1', '0');
INSERT INTO room_model_static VALUES ('611', 'theater', '9', '15', 'thchair1', '1', '0');
INSERT INTO room_model_static VALUES ('612', 'theater', '10', '15', 'thchair1', '1', '0');
INSERT INTO room_model_static VALUES ('613', 'theater', '12', '15', 'thchair1', '1', '0');
INSERT INTO room_model_static VALUES ('614', 'theater', '13', '15', 'thchair1', '1', '0');
INSERT INTO room_model_static VALUES ('615', 'theater', '14', '15', 'thchair1', '1', '0');
INSERT INTO room_model_static VALUES ('616', 'theater', '15', '15', 'thchair1', '1', '0');
INSERT INTO room_model_static VALUES ('617', 'theater', '16', '15', 'thchair1', '1', '0');
INSERT INTO room_model_static VALUES ('618', 'theater', '2', '16', 'thchair2', '1', '2');
INSERT INTO room_model_static VALUES ('619', 'theater', '6', '20', 'thchair1', '1', '0');
INSERT INTO room_model_static VALUES ('620', 'theater', '7', '20', 'thchair1', '1', '0');
INSERT INTO room_model_static VALUES ('621', 'theater', '8', '20', 'thchair1', '1', '0');
INSERT INTO room_model_static VALUES ('622', 'theater', '9', '20', 'thchair1', '1', '0');
INSERT INTO room_model_static VALUES ('623', 'theater', '10', '20', 'thchair1', '1', '0');
INSERT INTO room_model_static VALUES ('624', 'theater', '12', '20', 'thchair1', '1', '0');
INSERT INTO room_model_static VALUES ('625', 'theater', '13', '20', 'thchair1', '1', '0');
INSERT INTO room_model_static VALUES ('626', 'theater', '14', '20', 'thchair1', '1', '0');
INSERT INTO room_model_static VALUES ('627', 'theater', '15', '20', 'thchair1', '1', '0');
INSERT INTO room_model_static VALUES ('628', 'theater', '16', '20', 'thchair1', '1', '0');
INSERT INTO room_model_static VALUES ('629', 'theater', '6', '23', 'thchair1', '1', '0');
INSERT INTO room_model_static VALUES ('630', 'theater', '7', '23', 'thchair1', '1', '0');
INSERT INTO room_model_static VALUES ('631', 'theater', '8', '23', 'thchair1', '1', '0');
INSERT INTO room_model_static VALUES ('632', 'theater', '9', '23', 'thchair1', '1', '0');
INSERT INTO room_model_static VALUES ('633', 'theater', '10', '23', 'thchair1', '1', '0');
INSERT INTO room_model_static VALUES ('634', 'theater', '12', '23', 'thchair1', '1', '0');
INSERT INTO room_model_static VALUES ('635', 'theater', '13', '23', 'thchair1', '1', '0');
INSERT INTO room_model_static VALUES ('636', 'theater', '14', '23', 'thchair1', '1', '0');
INSERT INTO room_model_static VALUES ('637', 'theater', '15', '23', 'thchair1', '1', '0');
INSERT INTO room_model_static VALUES ('638', 'theater', '16', '23', 'thchair1', '1', '0');
INSERT INTO room_model_static VALUES ('639', 'theater', '6', '26', 'thchair1', '1', '0');
INSERT INTO room_model_static VALUES ('640', 'theater', '7', '26', 'thchair1', '1', '0');
INSERT INTO room_model_static VALUES ('641', 'theater', '8', '26', 'thchair1', '1', '0');
INSERT INTO room_model_static VALUES ('642', 'theater', '9', '26', 'thchair1', '1', '0');
INSERT INTO room_model_static VALUES ('643', 'theater', '10', '26', 'thchair1', '1', '0');
INSERT INTO room_model_static VALUES ('644', 'theater', '12', '26', 'thchair1', '1', '0');
INSERT INTO room_model_static VALUES ('645', 'theater', '13', '26', 'thchair1', '1', '0');
INSERT INTO room_model_static VALUES ('646', 'theater', '14', '26', 'thchair1', '1', '0');
INSERT INTO room_model_static VALUES ('647', 'theater', '15', '26', 'thchair1', '1', '0');
INSERT INTO room_model_static VALUES ('648', 'theater', '16', '26', 'thchair1', '1', '0');
INSERT INTO room_model_static VALUES ('649', 'picnic', '10', '7', 'hedge7', '0', '0');
INSERT INTO room_model_static VALUES ('650', 'picnic', '11', '7', 'hedge7', '0', '0');
INSERT INTO room_model_static VALUES ('651', 'picnic', '12', '7', 'hedge7', '0', '0');
INSERT INTO room_model_static VALUES ('652', 'picnic', '13', '7', 'hedge7', '0', '0');
INSERT INTO room_model_static VALUES ('653', 'picnic', '14', '7', 'hedge8', '0', '0');
INSERT INTO room_model_static VALUES ('654', 'picnic', '18', '7', 'hedge2', '0', '0');
INSERT INTO room_model_static VALUES ('655', 'picnic', '19', '7', 'hedge7', '0', '0');
INSERT INTO room_model_static VALUES ('656', 'picnic', '20', '7', 'hedge7', '0', '0');
INSERT INTO room_model_static VALUES ('657', 'picnic', '21', '7', 'hedge7', '0', '0');
INSERT INTO room_model_static VALUES ('658', 'picnic', '14', '8', 'hedge9', '0', '0');
INSERT INTO room_model_static VALUES ('659', 'picnic', '18', '8', 'hedge9', '0', '0');
INSERT INTO room_model_static VALUES ('660', 'picnic', '3', '9', 'hedge5', '0', '0');
INSERT INTO room_model_static VALUES ('661', 'picnic', '3', '10', 'hedge9', '0', '0');
INSERT INTO room_model_static VALUES ('662', 'picnic', '12', '11', 'picnic_dummychair1', '1', '4');
INSERT INTO room_model_static VALUES ('663', 'picnic', '13', '11', 'picnic_dummychair1', '1', '4');
INSERT INTO room_model_static VALUES ('664', 'picnic', '14', '11', 'picnic_dummychair1', '1', '4');
INSERT INTO room_model_static VALUES ('665', 'picnic', '10', '13', 'picnic_dummychair1', '1', '2');
INSERT INTO room_model_static VALUES ('666', 'picnic', '15', '13', 'picnic_dummychair1', '1', '6');
INSERT INTO room_model_static VALUES ('667', 'picnic', '21', '13', 'picnic_ground', '0', '0');
INSERT INTO room_model_static VALUES ('668', 'picnic', '7', '14', 'picnic_ground', '0', '0');
INSERT INTO room_model_static VALUES ('669', 'picnic', '10', '14', 'picnic_dummychair1', '1', '2');
INSERT INTO room_model_static VALUES ('670', 'picnic', '15', '14', 'picnic_dummychair1', '1', '6');
INSERT INTO room_model_static VALUES ('671', 'picnic', '19', '15', 'picnic_ground', '0', '0');
INSERT INTO room_model_static VALUES ('672', 'picnic', '23', '15', 'picnic_ground', '0', '0');
INSERT INTO room_model_static VALUES ('673', 'picnic', '5', '16', 'picnic_ground', '0', '0');
INSERT INTO room_model_static VALUES ('674', 'picnic', '9', '16', 'picnic_ground', '0', '0');
INSERT INTO room_model_static VALUES ('675', 'picnic', '20', '16', 'picnic_cloth1', '0', '0');
INSERT INTO room_model_static VALUES ('676', 'picnic', '6', '17', 'picnic_cloth1', '0', '0');
INSERT INTO room_model_static VALUES ('677', 'picnic', '21', '17', 'picnic_ground', '0', '0');
INSERT INTO room_model_static VALUES ('678', 'picnic', '7', '18', 'picnic_ground', '0', '0');
INSERT INTO room_model_static VALUES ('679', 'picnic', '0', '19', 'picnic_redbench2', '1', '2');
INSERT INTO room_model_static VALUES ('680', 'picnic', '0', '20', 'picnic_redbench1', '1', '2');
INSERT INTO room_model_static VALUES ('681', 'picnic', '11', '20', 'hedge6', '0', '0');
INSERT INTO room_model_static VALUES ('682', 'picnic', '12', '20', 'hedge7', '0', '0');
INSERT INTO room_model_static VALUES ('683', 'picnic', '13', '20', 'hedge7', '0', '0');
INSERT INTO room_model_static VALUES ('684', 'picnic', '14', '20', 'hedge3', '0', '0');
INSERT INTO room_model_static VALUES ('685', 'picnic', '17', '20', 'hedge4', '0', '0');
INSERT INTO room_model_static VALUES ('686', 'picnic', '18', '20', 'hedge7', '0', '0');
INSERT INTO room_model_static VALUES ('687', 'picnic', '19', '20', 'hedge7', '0', '0');
INSERT INTO room_model_static VALUES ('688', 'picnic', '20', '20', 'hedge8', '0', '0');
INSERT INTO room_model_static VALUES ('689', 'picnic', '11', '21', 'hedge5', '0', '0');
INSERT INTO room_model_static VALUES ('690', 'picnic', '12', '21', 'picnic_bench1', '1', '4');
INSERT INTO room_model_static VALUES ('691', 'picnic', '13', '21', 'picnic_bench2', '1', '4');
INSERT INTO room_model_static VALUES ('692', 'picnic', '14', '21', 'picnic_bench3', '1', '4');
INSERT INTO room_model_static VALUES ('693', 'picnic', '17', '21', 'picnic_bench1', '1', '4');
INSERT INTO room_model_static VALUES ('694', 'picnic', '18', '21', 'picnic_bench2', '1', '4');
INSERT INTO room_model_static VALUES ('695', 'picnic', '19', '21', 'picnic_bench3', '1', '4');
INSERT INTO room_model_static VALUES ('696', 'picnic', '20', '21', 'hedge5', '0', '0');
INSERT INTO room_model_static VALUES ('697', 'picnic', '0', '22', 'picnic_redbench2', '1', '2');
INSERT INTO room_model_static VALUES ('698', 'picnic', '11', '22', 'hedge5', '0', '0');
INSERT INTO room_model_static VALUES ('699', 'picnic', '20', '22', 'hedge5', '0', '0');
INSERT INTO room_model_static VALUES ('700', 'picnic', '25', '22', 'picnic_ground', '0', '0');
INSERT INTO room_model_static VALUES ('701', 'picnic', '0', '23', 'picnic_redbench1', '1', '2');
INSERT INTO room_model_static VALUES ('702', 'picnic', '11', '23', 'hedge5', '0', '0');
INSERT INTO room_model_static VALUES ('703', 'picnic', '12', '23', 'picnic_bench1', '1', '2');
INSERT INTO room_model_static VALUES ('704', 'picnic', '19', '23', 'picnic_bench1', '1', '6');
INSERT INTO room_model_static VALUES ('705', 'picnic', '20', '23', 'hedge5', '0', '0');
INSERT INTO room_model_static VALUES ('706', 'picnic', '6', '24', 'picnic_dummychair1', '1', '4');
INSERT INTO room_model_static VALUES ('707', 'picnic', '7', '24', 'picnic_dummychair4', '1', '4');
INSERT INTO room_model_static VALUES ('708', 'picnic', '8', '24', 'picnic_dummychair6', '1', '4');
INSERT INTO room_model_static VALUES ('709', 'picnic', '11', '24', 'hedge5', '0', '0');
INSERT INTO room_model_static VALUES ('710', 'picnic', '12', '24', 'picnic_bench2', '1', '2');
INSERT INTO room_model_static VALUES ('711', 'picnic', '19', '24', 'picnic_bench2', '1', '6');
INSERT INTO room_model_static VALUES ('712', 'picnic', '20', '24', 'hedge5', '0', '0');
INSERT INTO room_model_static VALUES ('713', 'picnic', '23', '24', 'picnic_ground', '0', '0');
INSERT INTO room_model_static VALUES ('714', 'picnic', '27', '24', 'picnic_ground', '0', '0');
INSERT INTO room_model_static VALUES ('715', 'picnic', '5', '25', 'picnic_stump', '0', '0');
INSERT INTO room_model_static VALUES ('716', 'picnic', '11', '25', 'hedge5', '0', '0');
INSERT INTO room_model_static VALUES ('717', 'picnic', '12', '25', 'picnic_bench2', '1', '2');
INSERT INTO room_model_static VALUES ('718', 'picnic', '19', '25', 'picnic_bench2', '1', '6');
INSERT INTO room_model_static VALUES ('719', 'picnic', '20', '25', 'hedge5', '0', '0');
INSERT INTO room_model_static VALUES ('720', 'picnic', '24', '25', 'picnic_cloth2', '0', '0');
INSERT INTO room_model_static VALUES ('721', 'picnic', '7', '26', 'picnic_stump', '0', '0');
INSERT INTO room_model_static VALUES ('722', 'picnic', '11', '26', 'hedge5', '0', '0');
INSERT INTO room_model_static VALUES ('723', 'picnic', '12', '26', 'picnic_bench3', '1', '2');
INSERT INTO room_model_static VALUES ('724', 'picnic', '14', '26', 'picnic_fireplace1', '0', '0');
INSERT INTO room_model_static VALUES ('725', 'picnic', '16', '26', 'picnic_fireplace2', '0', '0');
INSERT INTO room_model_static VALUES ('726', 'picnic', '19', '26', 'picnic_bench3', '1', '6');
INSERT INTO room_model_static VALUES ('727', 'picnic', '20', '26', 'hedge5', '0', '0');
INSERT INTO room_model_static VALUES ('728', 'picnic', '25', '26', 'picnic_ground', '0', '0');
INSERT INTO room_model_static VALUES ('729', 'picnic', '11', '27', 'hedge9', '0', '0');
INSERT INTO room_model_static VALUES ('730', 'picnic', '12', '27', 'picnic_lemonade', '0', '0');
INSERT INTO room_model_static VALUES ('731', 'picnic', '20', '27', 'hedge9', '0', '0');
INSERT INTO room_model_static VALUES ('732', 'picnic', '8', '29', 'picnic_firewood2', '0', '0');
INSERT INTO room_model_static VALUES ('733', 'picnic', '0', '30', 'picnic_redbench2', '1', '2');
INSERT INTO room_model_static VALUES ('734', 'picnic', '8', '30', 'picnic_firewood1', '0', '0');
INSERT INTO room_model_static VALUES ('735', 'picnic', '0', '31', 'picnic_redbench1', '1', '2');
INSERT INTO room_model_static VALUES ('736', 'picnic', '8', '31', 'picnic_firewood1', '0', '0');
INSERT INTO room_model_static VALUES ('737', 'picnic', '12', '31', 'picnic_bench1', '1', '4');
INSERT INTO room_model_static VALUES ('738', 'picnic', '13', '31', 'picnic_bench2', '1', '4');
INSERT INTO room_model_static VALUES ('739', 'picnic', '14', '31', 'picnic_bench3', '1', '4');
INSERT INTO room_model_static VALUES ('740', 'picnic', '18', '31', 'picnic_bench1', '1', '4');
INSERT INTO room_model_static VALUES ('741', 'picnic', '19', '31', 'picnic_bench2', '1', '4');
INSERT INTO room_model_static VALUES ('742', 'picnic', '20', '31', 'picnic_bench3', '1', '4');
INSERT INTO room_model_static VALUES ('743', 'picnic', '27', '31', 'picnic_carrot', '0', '0');
INSERT INTO room_model_static VALUES ('744', 'picnic', '28', '31', 'picnic_carrot', '0', '0');
INSERT INTO room_model_static VALUES ('745', 'picnic', '29', '31', 'picnic_carrot', '0', '0');
INSERT INTO room_model_static VALUES ('746', 'picnic', '30', '31', 'picnic_carrot', '0', '0');
INSERT INTO room_model_static VALUES ('747', 'picnic', '31', '31', 'picnic_carrot', '0', '0');
INSERT INTO room_model_static VALUES ('748', 'picnic', '8', '32', 'picnic_firewood1', '0', '0');
INSERT INTO room_model_static VALUES ('749', 'picnic', '12', '32', 'picnic_table2', '0', '0');
INSERT INTO room_model_static VALUES ('750', 'picnic', '14', '32', 'picnic_table', '0', '0');
INSERT INTO room_model_static VALUES ('751', 'picnic', '18', '32', 'picnic_table2', '0', '0');
INSERT INTO room_model_static VALUES ('752', 'picnic', '20', '32', 'picnic_table', '0', '0');
INSERT INTO room_model_static VALUES ('753', 'picnic', '3', '33', 'hedge1', '0', '0');
INSERT INTO room_model_static VALUES ('754', 'picnic', '8', '33', 'picnic_firewood1', '0', '0');
INSERT INTO room_model_static VALUES ('755', 'picnic', '12', '33', 'picnic_bench1', '1', '0');
INSERT INTO room_model_static VALUES ('756', 'picnic', '13', '33', 'picnic_bench2', '1', '0');
INSERT INTO room_model_static VALUES ('757', 'picnic', '14', '33', 'picnic_bench3', '1', '0');
INSERT INTO room_model_static VALUES ('758', 'picnic', '18', '33', 'picnic_bench1', '1', '0');
INSERT INTO room_model_static VALUES ('759', 'picnic', '19', '33', 'picnic_bench2', '1', '0');
INSERT INTO room_model_static VALUES ('760', 'picnic', '20', '33', 'picnic_bench3', '1', '0');
INSERT INTO room_model_static VALUES ('761', 'picnic', '27', '33', 'picnic_cabbage', '0', '0');
INSERT INTO room_model_static VALUES ('762', 'picnic', '28', '33', 'picnic_cabbage', '0', '0');
INSERT INTO room_model_static VALUES ('763', 'picnic', '29', '33', 'picnic_cabbage', '0', '0');
INSERT INTO room_model_static VALUES ('764', 'picnic', '3', '34', 'hedge5', '0', '0');
INSERT INTO room_model_static VALUES ('765', 'picnic', '8', '34', 'picnic_firewood1', '0', '0');
INSERT INTO room_model_static VALUES ('766', 'picnic', '3', '35', 'hedge5', '0', '0');
INSERT INTO room_model_static VALUES ('767', 'picnic', '8', '35', 'picnic_firewood1', '0', '0');
INSERT INTO room_model_static VALUES ('768', 'picnic', '3', '36', 'hedge5', '0', '0');
INSERT INTO room_model_static VALUES ('769', 'picnic', '8', '36', 'picnic_firewood1', '0', '0');
INSERT INTO room_model_static VALUES ('770', 'picnic', '8', '37', 'picnic_firewood1', '0', '0');
INSERT INTO room_model_static VALUES ('771', 'picnic', '12', '37', 'picnic_bench1', '1', '4');
INSERT INTO room_model_static VALUES ('772', 'picnic', '13', '37', 'picnic_bench2', '1', '4');
INSERT INTO room_model_static VALUES ('773', 'picnic', '14', '37', 'picnic_bench3', '1', '4');
INSERT INTO room_model_static VALUES ('774', 'picnic', '18', '37', 'picnic_bench1', '1', '4');
INSERT INTO room_model_static VALUES ('775', 'picnic', '19', '37', 'picnic_bench2', '1', '4');
INSERT INTO room_model_static VALUES ('776', 'picnic', '20', '37', 'picnic_bench3', '1', '4');
INSERT INTO room_model_static VALUES ('777', 'picnic', '8', '38', 'picnic_firewood1', '0', '0');
INSERT INTO room_model_static VALUES ('778', 'picnic', '12', '38', 'picnic_table2', '0', '0');
INSERT INTO room_model_static VALUES ('779', 'picnic', '14', '38', 'picnic_table', '0', '0');
INSERT INTO room_model_static VALUES ('780', 'picnic', '18', '38', 'picnic_table2', '0', '0');
INSERT INTO room_model_static VALUES ('781', 'picnic', '20', '38', 'picnic_table', '0', '0');
INSERT INTO room_model_static VALUES ('782', 'picnic', '8', '39', 'picnic_firewood3', '0', '0');
INSERT INTO room_model_static VALUES ('783', 'picnic', '12', '39', 'picnic_bench1', '1', '0');
INSERT INTO room_model_static VALUES ('784', 'picnic', '13', '39', 'picnic_bench2', '1', '0');
INSERT INTO room_model_static VALUES ('785', 'picnic', '14', '39', 'picnic_bench3', '1', '0');
INSERT INTO room_model_static VALUES ('786', 'picnic', '18', '39', 'picnic_bench1', '1', '0');
INSERT INTO room_model_static VALUES ('787', 'picnic', '19', '39', 'picnic_bench2', '1', '0');
INSERT INTO room_model_static VALUES ('788', 'picnic', '20', '39', 'picnic_bench3', '1', '0');
INSERT INTO room_model_static VALUES ('789', 'cinema_a', '2', '4', 'orange', '0', '0');
INSERT INTO room_model_static VALUES ('790', 'cinema_a', '7', '4', 'loungey_chair', '1', '2');
INSERT INTO room_model_static VALUES ('791', 'cinema_a', '8', '4', 'loungey_tablebigb', '0', '0');
INSERT INTO room_model_static VALUES ('792', 'cinema_a', '9', '4', 'loungey_chair', '1', '6');
INSERT INTO room_model_static VALUES ('793', 'cinema_a', '2', '5', 'loungey_chair', '1', '4');
INSERT INTO room_model_static VALUES ('794', 'cinema_a', '7', '5', 'loungey_chair', '1', '2');
INSERT INTO room_model_static VALUES ('795', 'cinema_a', '8', '5', 'loungey_tablebiga', '0', '0');
INSERT INTO room_model_static VALUES ('796', 'cinema_a', '9', '5', 'loungey_chair', '1', '6');
INSERT INTO room_model_static VALUES ('797', 'cinema_a', '2', '6', 'loungey_table', '0', '0');
INSERT INTO room_model_static VALUES ('798', 'cinema_a', '2', '7', 'loungey_chair', '1', '0');
INSERT INTO room_model_static VALUES ('799', 'cinema_a', '13', '7', 'theater_chair', '1', '0');
INSERT INTO room_model_static VALUES ('800', 'cinema_a', '14', '7', 'theater_chair', '1', '0');
INSERT INTO room_model_static VALUES ('801', 'cinema_a', '15', '7', 'theater_chair', '1', '0');
INSERT INTO room_model_static VALUES ('802', 'cinema_a', '16', '7', 'theater_chair', '1', '0');
INSERT INTO room_model_static VALUES ('803', 'cinema_a', '17', '7', 'theater_chair', '1', '0');
INSERT INTO room_model_static VALUES ('804', 'cinema_a', '18', '7', 'theater_chair', '1', '0');
INSERT INTO room_model_static VALUES ('805', 'cinema_a', '21', '7', 'stair', '0', '0');
INSERT INTO room_model_static VALUES ('806', 'cinema_a', '9', '8', 'lightpole', '0', '0');
INSERT INTO room_model_static VALUES ('807', 'cinema_a', '13', '8', 'pomomaski', '0', '0');
INSERT INTO room_model_static VALUES ('808', 'cinema_a', '14', '8', 'pomomaski', '0', '0');
INSERT INTO room_model_static VALUES ('809', 'cinema_a', '15', '8', 'pomomaski', '0', '0');
INSERT INTO room_model_static VALUES ('810', 'cinema_a', '16', '8', 'pomomaski', '0', '0');
INSERT INTO room_model_static VALUES ('811', 'cinema_a', '17', '8', 'pomomaski', '0', '0');
INSERT INTO room_model_static VALUES ('812', 'cinema_a', '18', '8', 'pomomaski', '0', '0');
INSERT INTO room_model_static VALUES ('813', 'cinema_a', '19', '8', 'pomomaski', '0', '0');
INSERT INTO room_model_static VALUES ('814', 'cinema_a', '21', '8', 'stair', '0', '0');
INSERT INTO room_model_static VALUES ('815', 'cinema_a', '2', '9', 'orange', '0', '0');
INSERT INTO room_model_static VALUES ('816', 'cinema_a', '13', '9', 'theater_chair', '1', '0');
INSERT INTO room_model_static VALUES ('817', 'cinema_a', '14', '9', 'theater_chair', '1', '0');
INSERT INTO room_model_static VALUES ('818', 'cinema_a', '15', '9', 'theater_chair', '1', '0');
INSERT INTO room_model_static VALUES ('819', 'cinema_a', '16', '9', 'theater_chair', '1', '0');
INSERT INTO room_model_static VALUES ('820', 'cinema_a', '17', '9', 'theater_chair', '1', '0');
INSERT INTO room_model_static VALUES ('821', 'cinema_a', '18', '9', 'theater_chair', '1', '0');
INSERT INTO room_model_static VALUES ('822', 'cinema_a', '19', '9', 'theater_chair', '1', '0');
INSERT INTO room_model_static VALUES ('823', 'cinema_a', '20', '9', 'theater_chair', '1', '0');
INSERT INTO room_model_static VALUES ('824', 'cinema_a', '21', '9', 'stair', '0', '0');
INSERT INTO room_model_static VALUES ('825', 'cinema_a', '2', '10', 'loungey_chair', '1', '4');
INSERT INTO room_model_static VALUES ('826', 'cinema_a', '9', '10', 'loungey_chair', '1', '4');
INSERT INTO room_model_static VALUES ('827', 'cinema_a', '2', '11', 'loungey_table', '0', '0');
INSERT INTO room_model_static VALUES ('828', 'cinema_a', '9', '11', 'loungey_table', '0', '0');
INSERT INTO room_model_static VALUES ('829', 'cinema_a', '2', '12', 'loungey_chair', '1', '0');
INSERT INTO room_model_static VALUES ('830', 'cinema_a', '9', '12', 'loungey_chair', '1', '0');
INSERT INTO room_model_static VALUES ('831', 'cinema_a', '17', '12', 'cubicb_chair', '1', '6');
INSERT INTO room_model_static VALUES ('832', 'cinema_a', '19', '12', 'cubico_chair', '1', '2');
INSERT INTO room_model_static VALUES ('833', 'cinema_a', '15', '13', 'cubicb_chair', '1', '2');
INSERT INTO room_model_static VALUES ('834', 'cinema_a', '19', '13', 'lightpole', '0', '0');
INSERT INTO room_model_static VALUES ('835', 'cinema_a', '20', '13', 'cubicb_chair', '1', '6');
INSERT INTO room_model_static VALUES ('836', 'cinema_a', '9', '14', 'lightpole', '0', '0');
INSERT INTO room_model_static VALUES ('837', 'cinema_a', '2', '15', 'loungey_chair', '1', '4');
INSERT INTO room_model_static VALUES ('838', 'cinema_a', '14', '15', 'cubicb_chair', '1', '4');
INSERT INTO room_model_static VALUES ('839', 'cinema_a', '19', '15', 'cubico_chair', '1', '4');
INSERT INTO room_model_static VALUES ('840', 'cinema_a', '2', '16', 'loungey_table', '0', '0');
INSERT INTO room_model_static VALUES ('841', 'cinema_a', '7', '16', 'loungey_chair', '1', '2');
INSERT INTO room_model_static VALUES ('842', 'cinema_a', '8', '16', 'loungey_table', '0', '0');
INSERT INTO room_model_static VALUES ('843', 'cinema_a', '9', '16', 'loungey_chair', '1', '6');
INSERT INTO room_model_static VALUES ('844', 'cinema_a', '13', '16', 'cubicb_chair', '1', '2');
INSERT INTO room_model_static VALUES ('845', 'cinema_a', '14', '16', 'cubicb_chair', '1', '6');
INSERT INTO room_model_static VALUES ('846', 'cinema_a', '19', '16', 'orange', '0', '0');
INSERT INTO room_model_static VALUES ('847', 'cinema_a', '2', '17', 'loungey_chair', '1', '0');
INSERT INTO room_model_static VALUES ('848', 'cinema_a', '7', '17', 'loungey_chair', '1', '2');
INSERT INTO room_model_static VALUES ('849', 'cinema_a', '8', '17', 'loungey_table', '0', '0');
INSERT INTO room_model_static VALUES ('850', 'cinema_a', '9', '17', 'loungey_chair', '1', '6');
INSERT INTO room_model_static VALUES ('851', 'cinema_a', '19', '17', 'cubicb_chair', '1', '2');
INSERT INTO room_model_static VALUES ('852', 'cinema_a', '2', '18', 'orange', '0', '0');
INSERT INTO room_model_static VALUES ('853', 'cinema_a', '14', '18', 'cubicb_chair', '1', '4');
INSERT INTO room_model_static VALUES ('854', 'cinema_a', '2', '19', 'bardesque', '0', '0');
INSERT INTO room_model_static VALUES ('855', 'cinema_a', '2', '20', 'bardesque', '0', '0');
INSERT INTO room_model_static VALUES ('856', 'cinema_a', '3', '20', 'bar_chair', '1', '6');
INSERT INTO room_model_static VALUES ('857', 'cinema_a', '9', '20', 'lightpole', '0', '0');
INSERT INTO room_model_static VALUES ('858', 'cinema_a', '14', '20', 'cubicb_chair', '1', '0');
INSERT INTO room_model_static VALUES ('859', 'cinema_a', '19', '20', 'cubicb_chair', '1', '2');
INSERT INTO room_model_static VALUES ('860', 'cinema_a', '20', '20', 'cubico_chair', '1', '6');
INSERT INTO room_model_static VALUES ('861', 'cinema_a', '2', '21', 'bardesque', '0', '0');
INSERT INTO room_model_static VALUES ('862', 'cinema_a', '3', '21', 'bar_chair', '1', '6');
INSERT INTO room_model_static VALUES ('863', 'cinema_a', '19', '21', 'cubicb_chair', '1', '0');
INSERT INTO room_model_static VALUES ('864', 'cinema_a', '2', '22', 'bardesque', '0', '0');
INSERT INTO room_model_static VALUES ('865', 'cinema_a', '3', '22', 'bar_chair', '1', '6');
INSERT INTO room_model_static VALUES ('866', 'cinema_a', '16', '22', 'lightpole', '0', '0');
INSERT INTO room_model_static VALUES ('867', 'cinema_a', '18', '22', 'cubico_chair', '1', '0');
INSERT INTO room_model_static VALUES ('868', 'cinema_a', '2', '23', 'bardesque', '0', '0');
INSERT INTO room_model_static VALUES ('869', 'cinema_a', '3', '23', 'bar_chair', '1', '6');
INSERT INTO room_model_static VALUES ('870', 'cinema_a', '2', '24', 'bardesque', '0', '0');
INSERT INTO room_model_static VALUES ('871', 'cinema_a', '3', '24', 'bar_chair', '1', '6');
INSERT INTO room_model_static VALUES ('872', 'cinema_a', '2', '25', 'bardesque', '0', '0');
INSERT INTO room_model_static VALUES ('873', 'park_a', '27', '5', 'parkfence2', '0', '0');
INSERT INTO room_model_static VALUES ('874', 'park_a', '29', '5', 'parkfence2', '0', '0');
INSERT INTO room_model_static VALUES ('875', 'park_a', '19', '6', 'parkfence1', '0', '0');
INSERT INTO room_model_static VALUES ('876', 'park_a', '20', '6', 'parkfence3', '0', '0');
INSERT INTO room_model_static VALUES ('877', 'park_a', '21', '6', 'parkfence3', '0', '0');
INSERT INTO room_model_static VALUES ('878', 'park_a', '22', '6', 'parkfence3', '0', '0');
INSERT INTO room_model_static VALUES ('879', 'park_a', '23', '6', 'parkfence2', '0', '0');
INSERT INTO room_model_static VALUES ('880', 'park_a', '24', '6', 'parkfence3', '0', '0');
INSERT INTO room_model_static VALUES ('881', 'park_a', '25', '6', 'parkfence3', '0', '0');
INSERT INTO room_model_static VALUES ('882', 'park_a', '26', '6', 'parkfence3', '0', '0');
INSERT INTO room_model_static VALUES ('883', 'park_a', '27', '6', 'parkfence1', '0', '0');
INSERT INTO room_model_static VALUES ('884', 'park_a', '29', '6', 'parkfence3', '0', '0');
INSERT INTO room_model_static VALUES ('885', 'park_a', '17', '7', 'parkfence2', '0', '0');
INSERT INTO room_model_static VALUES ('886', 'park_a', '19', '7', 'parkfence3', '0', '0');
INSERT INTO room_model_static VALUES ('887', 'park_a', '23', '7', 'parkfence3', '0', '0');
INSERT INTO room_model_static VALUES ('888', 'park_a', '27', '7', 'parkfence3', '0', '0');
INSERT INTO room_model_static VALUES ('889', 'park_a', '29', '7', 'parkfence3', '0', '0');
INSERT INTO room_model_static VALUES ('890', 'park_a', '17', '8', 'parkfence3', '0', '0');
INSERT INTO room_model_static VALUES ('891', 'park_a', '19', '8', 'parkfence3', '0', '0');
INSERT INTO room_model_static VALUES ('892', 'park_a', '21', '8', 'parkfence2', '0', '0');
INSERT INTO room_model_static VALUES ('893', 'park_a', '23', '8', 'parkfence3', '0', '0');
INSERT INTO room_model_static VALUES ('894', 'park_a', '25', '8', 'parkfence2', '0', '0');
INSERT INTO room_model_static VALUES ('895', 'park_a', '27', '8', 'parkfence3', '0', '0');
INSERT INTO room_model_static VALUES ('896', 'park_a', '29', '8', 'parkfence3', '0', '0');
INSERT INTO room_model_static VALUES ('897', 'park_a', '8', '9', 'bench2', '1', '4');
INSERT INTO room_model_static VALUES ('898', 'park_a', '9', '9', 'bench', '1', '4');
INSERT INTO room_model_static VALUES ('899', 'park_a', '17', '9', 'parkfence3', '0', '0');
INSERT INTO room_model_static VALUES ('900', 'park_a', '19', '9', 'parkfence2', '0', '0');
INSERT INTO room_model_static VALUES ('901', 'park_a', '21', '9', 'parkfence3', '0', '0');
INSERT INTO room_model_static VALUES ('902', 'park_a', '23', '9', 'parkfence2', '0', '0');
INSERT INTO room_model_static VALUES ('903', 'park_a', '25', '9', 'parkfence3', '0', '0');
INSERT INTO room_model_static VALUES ('904', 'park_a', '27', '9', 'parkfence2', '0', '0');
INSERT INTO room_model_static VALUES ('905', 'park_a', '29', '9', 'parkfence3', '0', '0');
INSERT INTO room_model_static VALUES ('906', 'park_a', '17', '10', 'parkfence3', '0', '0');
INSERT INTO room_model_static VALUES ('907', 'park_a', '21', '10', 'parkfence3', '0', '0');
INSERT INTO room_model_static VALUES ('908', 'park_a', '25', '10', 'parkfence3', '0', '0');
INSERT INTO room_model_static VALUES ('909', 'park_a', '29', '10', 'parkfence3', '0', '0');
INSERT INTO room_model_static VALUES ('910', 'park_a', '7', '11', 'bench2', '1', '2');
INSERT INTO room_model_static VALUES ('911', 'park_a', '17', '11', 'parkfence1', '0', '0');
INSERT INTO room_model_static VALUES ('912', 'park_a', '18', '11', 'parkfence3', '0', '0');
INSERT INTO room_model_static VALUES ('913', 'park_a', '19', '11', 'parkfence3', '0', '0');
INSERT INTO room_model_static VALUES ('914', 'park_a', '20', '11', 'parkfence3', '0', '0');
INSERT INTO room_model_static VALUES ('915', 'park_a', '21', '11', 'parkfence2', '0', '0');
INSERT INTO room_model_static VALUES ('916', 'park_a', '22', '11', 'parkfence3', '0', '0');
INSERT INTO room_model_static VALUES ('917', 'park_a', '23', '11', 'parkfence3', '0', '0');
INSERT INTO room_model_static VALUES ('918', 'park_a', '24', '11', 'parkfence3', '0', '0');
INSERT INTO room_model_static VALUES ('919', 'park_a', '25', '11', 'parkfence2', '0', '0');
INSERT INTO room_model_static VALUES ('920', 'park_a', '26', '11', 'parkfence3', '0', '0');
INSERT INTO room_model_static VALUES ('921', 'park_a', '27', '11', 'parkfence3', '0', '0');
INSERT INTO room_model_static VALUES ('922', 'park_a', '28', '11', 'parkfence3', '0', '0');
INSERT INTO room_model_static VALUES ('923', 'park_a', '29', '11', 'parkfence1', '0', '0');
INSERT INTO room_model_static VALUES ('924', 'park_a', '7', '12', 'bench', '1', '2');
INSERT INTO room_model_static VALUES ('925', 'park_a', '35', '16', 'bench2', '1', '2');
INSERT INTO room_model_static VALUES ('926', 'park_a', '37', '16', 'bench2', '1', '4');
INSERT INTO room_model_static VALUES ('927', 'park_a', '38', '16', 'bench', '1', '4');
INSERT INTO room_model_static VALUES ('928', 'park_a', '35', '17', 'bench', '1', '2');
INSERT INTO room_model_static VALUES ('929', 'park_a', '27', '18', 'bench2', '1', '4');
INSERT INTO room_model_static VALUES ('930', 'park_a', '28', '18', 'bench', '1', '4');
INSERT INTO room_model_static VALUES ('931', 'park_a', '35', '18', 'bench2', '1', '2');
INSERT INTO room_model_static VALUES ('932', 'park_a', '25', '19', 'bench2', '1', '2');
INSERT INTO room_model_static VALUES ('933', 'park_a', '35', '19', 'bench', '1', '2');
INSERT INTO room_model_static VALUES ('934', 'park_a', '25', '20', 'bench', '1', '2');
INSERT INTO room_model_static VALUES ('935', 'park_a', '25', '29', 'bench2', '1', '4');
INSERT INTO room_model_static VALUES ('936', 'park_a', '26', '29', 'bench', '1', '4');
INSERT INTO room_model_static VALUES ('937', 'park_a', '23', '30', 'bench2', '1', '2');
INSERT INTO room_model_static VALUES ('938', 'park_a', '23', '31', 'bench', '1', '2');

-- ----------------------------
-- Table structure for `room_rights`
-- ----------------------------
DROP TABLE IF EXISTS `room_rights`;
CREATE TABLE `room_rights` (
  `room_id` int(10) unsigned NOT NULL,
  `user_id` int(10) unsigned NOT NULL,
  KEY `room_id` (`room_id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of room_rights
-- ----------------------------

-- ----------------------------
-- Table structure for `server_status`
-- ----------------------------
DROP TABLE IF EXISTS `server_status`;
CREATE TABLE `server_status` (
  `status` enum('0','1','2') NOT NULL DEFAULT '0',
  `users_online` int(11) NOT NULL DEFAULT '0',
  `rooms_loaded` int(11) NOT NULL DEFAULT '0',
  `server_ver` text NOT NULL,
  `stamp` double NOT NULL,
  `userpeak` int(11) NOT NULL DEFAULT '0'
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of server_status
-- ----------------------------
INSERT INTO server_status VALUES ('1', '1', '0', 'Phoenix v3.0.0 (Build 13007)', '1295207171', '0');

-- ----------------------------
-- Table structure for `system_stats`
-- ----------------------------
DROP TABLE IF EXISTS `system_stats`;
CREATE TABLE `system_stats` (
  `id` int(5) NOT NULL AUTO_INCREMENT,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `users` int(5) NOT NULL DEFAULT '0',
  `rooms` int(5) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of system_stats
-- ----------------------------
INSERT INTO system_stats VALUES ('1', '2011-01-14 20:51:56', '1', '0');

-- ----------------------------
-- Table structure for `tele_links`
-- ----------------------------
DROP TABLE IF EXISTS `tele_links`;
CREATE TABLE `tele_links` (
  `tele_one_id` int(10) unsigned NOT NULL,
  `tele_two_id` int(10) unsigned NOT NULL,
  KEY `tele_one_id` (`tele_one_id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of tele_links
-- ----------------------------

-- ----------------------------
-- Table structure for `users`
-- ----------------------------
DROP TABLE IF EXISTS `users`;
CREATE TABLE `users` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `username` varchar(50) NOT NULL,
  `real_name` varchar(100) NOT NULL DEFAULT '',
  `password` varchar(50) NOT NULL,
  `mail` varchar(50) NOT NULL DEFAULT 'defaultuser@meth0d.org',
  `auth_ticket` text NOT NULL,
  `rank` int(11) unsigned NOT NULL DEFAULT '1',
  `credits` int(11) NOT NULL DEFAULT '50000',
  `vip_points` int(11) NOT NULL DEFAULT '0',
  `activity_points` int(11) NOT NULL DEFAULT '0',
  `activity_points_lastupdate` double NOT NULL DEFAULT '0',
  `look` varchar(100) NOT NULL DEFAULT 'hr-115-42.hd-190-1.ch-215-62.lg-285-91.sh-290-62',
  `gender` enum('M','F') NOT NULL DEFAULT 'M',
  `motto` varchar(50) NOT NULL,
  `account_created` varchar(50) NOT NULL,
  `last_online` varchar(50) NOT NULL,
  `online` enum('0','1') NOT NULL DEFAULT '0',
  `ip_last` varchar(120) NOT NULL,
  `ip_reg` varchar(120) NOT NULL,
  `home_room` int(10) unsigned NOT NULL DEFAULT '0',
  `respect` int(11) NOT NULL DEFAULT '0',
  `daily_respect_points` int(11) NOT NULL DEFAULT '3',
  `daily_pet_respect_points` int(11) NOT NULL DEFAULT '3',
  `newbie_status` int(11) NOT NULL DEFAULT '0',
  `is_muted` enum('0','1') NOT NULL DEFAULT '0',
  `mutant_penalty` enum('0','1','2') NOT NULL DEFAULT '0',
  `mutant_penalty_expire` int(11) NOT NULL DEFAULT '0',
  `block_newfriends` enum('0','1') NOT NULL DEFAULT '0',
  `hide_online` enum('0','1') NOT NULL DEFAULT '0',
  `hide_inroom` enum('0','1') NOT NULL DEFAULT '0',
  `mail_verified` varchar(6) NOT NULL DEFAULT '0',
  `vip` enum('0','1') NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of users
-- ----------------------------

-- ----------------------------
-- Table structure for `user_achievements`
-- ----------------------------
DROP TABLE IF EXISTS `user_achievements`;
CREATE TABLE `user_achievements` (
  `user_id` int(10) unsigned NOT NULL,
  `achievement_id` int(10) unsigned NOT NULL,
  `achievement_level` int(11) NOT NULL,
  KEY `user_id` (`user_id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of user_achievements
-- ----------------------------

-- ----------------------------
-- Table structure for `user_badges`
-- ----------------------------
DROP TABLE IF EXISTS `user_badges`;
CREATE TABLE `user_badges` (
  `user_id` int(10) unsigned NOT NULL,
  `badge_id` varchar(100) NOT NULL,
  `badge_slot` int(11) NOT NULL DEFAULT '0',
  KEY `user_id` (`user_id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of user_badges
-- ----------------------------

-- ----------------------------
-- Table structure for `user_effects`
-- ----------------------------
DROP TABLE IF EXISTS `user_effects`;
CREATE TABLE `user_effects` (
  `user_id` int(10) unsigned NOT NULL,
  `effect_id` int(11) NOT NULL DEFAULT '1',
  `total_duration` int(11) NOT NULL DEFAULT '3600',
  `is_activated` enum('0','1') NOT NULL DEFAULT '0',
  `activated_stamp` double NOT NULL DEFAULT '0',
  KEY `user_id` (`user_id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of user_effects
-- ----------------------------

-- ----------------------------
-- Table structure for `user_favorites`
-- ----------------------------
DROP TABLE IF EXISTS `user_favorites`;
CREATE TABLE `user_favorites` (
  `user_id` int(10) unsigned NOT NULL,
  `room_id` int(10) unsigned NOT NULL,
  KEY `user_id` (`user_id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of user_favorites
-- ----------------------------

-- ----------------------------
-- Table structure for `user_ignores`
-- ----------------------------
DROP TABLE IF EXISTS `user_ignores`;
CREATE TABLE `user_ignores` (
  `user_id` int(10) unsigned NOT NULL,
  `ignore_id` int(10) unsigned NOT NULL,
  KEY `user_id` (`user_id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of user_ignores
-- ----------------------------

-- ----------------------------
-- Table structure for `user_info`
-- ----------------------------
DROP TABLE IF EXISTS `user_info`;
CREATE TABLE `user_info` (
  `user_id` int(11) NOT NULL,
  `bans` int(11) NOT NULL DEFAULT '0',
  `cautions` int(11) NOT NULL DEFAULT '0',
  `reg_timestamp` double NOT NULL DEFAULT '0',
  `login_timestamp` double NOT NULL DEFAULT '0',
  `cfhs` int(11) NOT NULL DEFAULT '0',
  `cfhs_abusive` int(11) NOT NULL DEFAULT '0',
  PRIMARY KEY (`user_id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of user_info
-- ----------------------------

-- ----------------------------
-- Table structure for `user_items`
-- ----------------------------
DROP TABLE IF EXISTS `user_items`;
CREATE TABLE `user_items` (
  `id` int(10) unsigned NOT NULL,
  `user_id` int(10) unsigned NOT NULL,
  `base_item` int(10) unsigned NOT NULL,
  `extra_data` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of user_items
-- ----------------------------

-- ----------------------------
-- Table structure for `user_pets`
-- ----------------------------
DROP TABLE IF EXISTS `user_pets`;
CREATE TABLE `user_pets` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `user_id` int(10) unsigned NOT NULL,
  `room_id` int(10) unsigned NOT NULL,
  `name` varchar(32) NOT NULL DEFAULT 'Unnamed',
  `race` varchar(3) NOT NULL DEFAULT '000',
  `color` varchar(6) NOT NULL DEFAULT 'FFFFFF',
  `type` int(10) unsigned NOT NULL,
  `expirience` int(11) NOT NULL,
  `energy` int(11) NOT NULL,
  `nutrition` int(11) NOT NULL DEFAULT '100',
  `respect` int(11) NOT NULL DEFAULT '0',
  `createstamp` double NOT NULL DEFAULT '0',
  `x` int(11) NOT NULL DEFAULT '0',
  `y` int(11) NOT NULL DEFAULT '0',
  `z` double NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`),
  KEY `user_id` (`user_id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of user_pets
-- ----------------------------

-- ----------------------------
-- Table structure for `user_presents`
-- ----------------------------
DROP TABLE IF EXISTS `user_presents`;
CREATE TABLE `user_presents` (
  `item_id` int(10) unsigned NOT NULL,
  `base_id` int(10) unsigned NOT NULL,
  `amount` int(11) NOT NULL,
  `extra_data` text NOT NULL,
  KEY `item_id` (`item_id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of user_presents
-- ----------------------------

-- ----------------------------
-- Table structure for `user_roomvisits`
-- ----------------------------
DROP TABLE IF EXISTS `user_roomvisits`;
CREATE TABLE `user_roomvisits` (
  `user_id` int(10) unsigned NOT NULL,
  `room_id` int(10) unsigned NOT NULL,
  `entry_timestamp` double NOT NULL,
  `exit_timestamp` double NOT NULL,
  `hour` int(11) NOT NULL,
  `minute` int(11) NOT NULL,
  KEY `user_id` (`user_id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of user_roomvisits
-- ----------------------------

-- ----------------------------
-- Table structure for `user_stats`
-- ----------------------------
DROP TABLE IF EXISTS `user_stats`;
CREATE TABLE `user_stats` (
  `id` int(7) NOT NULL,
  `RoomVisits` int(7) NOT NULL DEFAULT '0',
  `OnlineTime` int(7) NOT NULL DEFAULT '0',
  `Respect` int(6) NOT NULL DEFAULT '0',
  `RespectGiven` int(6) NOT NULL DEFAULT '0',
  `GiftsGiven` int(6) NOT NULL DEFAULT '0',
  `GiftsReceived` int(6) NOT NULL DEFAULT '0',
  `DailyRespectPoints` int(1) NOT NULL DEFAULT '3',
  `DailyPetRespectPoints` int(1) NOT NULL DEFAULT '3',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of user_stats
-- ----------------------------

-- ----------------------------
-- Table structure for `user_subscriptions`
-- ----------------------------
DROP TABLE IF EXISTS `user_subscriptions`;
CREATE TABLE `user_subscriptions` (
  `user_id` int(10) unsigned NOT NULL,
  `subscription_id` varchar(50) NOT NULL,
  `timestamp_activated` int(11) NOT NULL,
  `timestamp_expire` int(11) NOT NULL,
  KEY `user_id` (`user_id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of user_subscriptions
-- ----------------------------

-- ----------------------------
-- Table structure for `user_tags`
-- ----------------------------
DROP TABLE IF EXISTS `user_tags`;
CREATE TABLE `user_tags` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(10) unsigned NOT NULL,
  `tag` varchar(100) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `user_id` (`user_id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of user_tags
-- ----------------------------

-- ----------------------------
-- Table structure for `user_wardrobe`
-- ----------------------------
DROP TABLE IF EXISTS `user_wardrobe`;
CREATE TABLE `user_wardrobe` (
  `user_id` int(10) unsigned NOT NULL,
  `slot_id` int(10) unsigned NOT NULL,
  `look` varchar(120) NOT NULL,
  `gender` enum('F','M') NOT NULL DEFAULT 'M',
  KEY `user_id` (`user_id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of user_wardrobe
-- ----------------------------

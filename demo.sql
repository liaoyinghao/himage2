/*
Navicat MySQL Data Transfer

Source Server         : My World
Source Server Version : 50553
Source Host           : localhost:3306
Source Database       : demo

Target Server Type    : MYSQL
Target Server Version : 50553
File Encoding         : 65001

Date: 2017-05-08 00:48:20
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for ewm
-- ----------------------------
DROP TABLE IF EXISTS `ewm`;
CREATE TABLE `ewm` (
  `ewm_id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `ewm_add` varchar(200) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `ewm_iid` int(11) NOT NULL,
  PRIMARY KEY (`ewm_id`)
) ENGINE=MyISAM AUTO_INCREMENT=10 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of ewm
-- ----------------------------
INSERT INTO `ewm` VALUES ('9', '2017-05-03/5909785e5dedb.png', '15');

-- ----------------------------
-- Table structure for img
-- ----------------------------
DROP TABLE IF EXISTS `img`;
CREATE TABLE `img` (
  `img_id` int(11) NOT NULL AUTO_INCREMENT,
  `img_add` varchar(100) NOT NULL,
  `img_type` int(11) DEFAULT '0',
  `img_time` int(11) NOT NULL,
  `img_tid` int(11) DEFAULT '1',
  `img_iid` int(11) DEFAULT '1',
  `img_z` int(255) NOT NULL DEFAULT '0',
  PRIMARY KEY (`img_id`)
) ENGINE=MyISAM AUTO_INCREMENT=3356 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of img
-- ----------------------------
INSERT INTO `img` VALUES ('3115', '/Upload/image/2017-05-03/5909787acc190.jpg', '1', '1493792902', '37', '15', '0');
INSERT INTO `img` VALUES ('3116', '/Upload/image/2017-05-03/5909787b16bfc.jpg', '1', '1493792902', '37', '15', '0');
INSERT INTO `img` VALUES ('3117', '/Upload/image/2017-05-03/5909787b297b2.jpg', '1', '1493792902', '37', '15', '0');
INSERT INTO `img` VALUES ('3118', '/Upload/image/2017-05-03/5909787b38d3c.jpg', '1', '1493792902', '37', '15', '0');
INSERT INTO `img` VALUES ('3119', '/Upload/image/2017-05-03/5909787b4b260.jpg', '1', '1493792902', '37', '15', '0');
INSERT INTO `img` VALUES ('3120', '/Upload/image/2017-05-03/5909787b5be5d.jpg', '1', '1493792902', '37', '15', '0');
INSERT INTO `img` VALUES ('3121', '/Upload/image/2017-05-03/5909787b7263c.jpg', '1', '1493792902', '37', '15', '0');
INSERT INTO `img` VALUES ('3122', '/Upload/image/2017-05-03/5909787b82ad2.jpg', '1', '1493792902', '37', '15', '0');
INSERT INTO `img` VALUES ('3123', '/Upload/image/2017-05-03/5909787b93ca4.jpg', '1', '1493792902', '37', '15', '0');
INSERT INTO `img` VALUES ('3124', '/Upload/image/2017-05-03/5909787ba4cf2.jpg', '1', '1493792902', '37', '15', '0');
INSERT INTO `img` VALUES ('3125', '/Upload/image/2017-05-03/5909787bb6789.jpg', '1', '1493792902', '37', '15', '0');
INSERT INTO `img` VALUES ('3126', '/Upload/image/2017-05-03/5909787bcbfdf.jpg', '1', '1493792902', '37', '15', '0');
INSERT INTO `img` VALUES ('3127', '/Upload/image/2017-05-03/5909787bdf9ca.jpg', '1', '1493792902', '37', '15', '0');
INSERT INTO `img` VALUES ('3128', '/Upload/image/2017-05-03/5909787bf066b.jpg', '1', '1493792902', '37', '15', '0');
INSERT INTO `img` VALUES ('3129', '/Upload/image/2017-05-03/5909787c0b3eb.jpg', '1', '1493792902', '37', '15', '0');
INSERT INTO `img` VALUES ('3130', '/Upload/image/2017-05-03/5909787c1d497.jpg', '1', '1493792902', '37', '15', '0');
INSERT INTO `img` VALUES ('3131', '/Upload/image/2017-05-03/5909787c3366b.jpg', '1', '1493792902', '37', '15', '0');
INSERT INTO `img` VALUES ('3132', '/Upload/image/2017-05-03/5909787c4326e.jpg', '1', '1493792902', '37', '15', '0');
INSERT INTO `img` VALUES ('3133', '/Upload/image/2017-05-03/5909787c55b51.jpg', '1', '1493792902', '37', '15', '0');
INSERT INTO `img` VALUES ('3134', '/Upload/image/2017-05-03/5909787c67c1c.jpg', '1', '1493792902', '37', '15', '0');
INSERT INTO `img` VALUES ('3135', '/Upload/image/2017-05-03/5909787c78789.jpg', '1', '1493792902', '37', '15', '0');
INSERT INTO `img` VALUES ('3136', '/Upload/image/2017-05-03/5909787c8af83.jpg', '1', '1493792902', '37', '15', '0');
INSERT INTO `img` VALUES ('3137', '/Upload/image/2017-05-03/5909787c9ca08.jpg', '1', '1493792902', '37', '15', '0');
INSERT INTO `img` VALUES ('3138', '/Upload/image/2017-05-03/5909787dad60a.jpg', '1', '1493792902', '37', '15', '0');
INSERT INTO `img` VALUES ('3139', '/Upload/image/2017-05-03/5909787cc95d9.jpg', '1', '1493792902', '37', '15', '0');
INSERT INTO `img` VALUES ('3140', '/Upload/image/2017-05-03/5909787e5d699.jpg', '1', '1493792902', '37', '15', '0');
INSERT INTO `img` VALUES ('3141', '/Upload/image/2017-05-03/5909787ce71c4.jpg', '1', '1493792902', '37', '15', '0');
INSERT INTO `img` VALUES ('3142', '/Upload/image/2017-05-03/5909787d10afe.jpg', '1', '1493792902', '37', '15', '0');
INSERT INTO `img` VALUES ('3143', '/Upload/image/2017-05-03/5909787d2b240.jpg', '1', '1493792902', '37', '15', '0');
INSERT INTO `img` VALUES ('3144', '/Upload/image/2017-05-03/5909787d492b4.jpg', '1', '1493792902', '37', '15', '0');
INSERT INTO `img` VALUES ('3145', '/Upload/image/2017-05-03/5909787d63222.jpg', '1', '1493792902', '37', '15', '0');
INSERT INTO `img` VALUES ('3146', '/Upload/image/2017-05-03/5909787d7a601.jpg', '1', '1493792902', '37', '15', '0');
INSERT INTO `img` VALUES ('3147', '/Upload/image/2017-05-03/5909787d90f06.jpg', '1', '1493792902', '37', '15', '0');
INSERT INTO `img` VALUES ('3148', '/Upload/image/2017-05-03/5909788051762.jpg', '1', '1493792902', '37', '15', '0');
INSERT INTO `img` VALUES ('3149', '/Upload/image/2017-05-03/5909787dd61e0.jpg', '1', '1493792902', '37', '15', '0');
INSERT INTO `img` VALUES ('3150', '/Upload/image/2017-05-03/5909787e0e272.jpg', '1', '1493792902', '37', '15', '0');
INSERT INTO `img` VALUES ('3151', '/Upload/image/2017-05-03/5909787e2773c.jpg', '1', '1493792902', '37', '15', '0');
INSERT INTO `img` VALUES ('3152', '/Upload/image/2017-05-03/5909787e637b6.jpg', '1', '1493792902', '37', '15', '0');
INSERT INTO `img` VALUES ('3153', '/Upload/image/2017-05-03/5909787e78e24.jpg', '1', '1493792902', '37', '15', '0');
INSERT INTO `img` VALUES ('3154', '/Upload/image/2017-05-03/5909787e8a76d.jpg', '1', '1493792902', '37', '15', '0');
INSERT INTO `img` VALUES ('3155', '/Upload/image/2017-05-03/5909787ea23b7.jpg', '1', '1493792902', '37', '15', '0');
INSERT INTO `img` VALUES ('3156', '/Upload/image/2017-05-03/590978801ee72.jpg', '1', '1493792902', '37', '15', '0');
INSERT INTO `img` VALUES ('3157', '/Upload/image/2017-05-03/5909788059622.jpg', '1', '1493792902', '37', '15', '0');
INSERT INTO `img` VALUES ('3158', '/Upload/image/2017-05-03/59097880c5fc2.jpg', '1', '1493792902', '37', '15', '0');
INSERT INTO `img` VALUES ('3159', '/Upload/image/2017-05-03/59097881121d4.jpg', '1', '1493792902', '37', '15', '0');
INSERT INTO `img` VALUES ('3160', '/Upload/image/2017-05-03/590978810c3af.jpg', '1', '1493792902', '37', '15', '0');
INSERT INTO `img` VALUES ('3161', '/Upload/image/2017-05-03/59097883818ee.jpg', '1', '1493792902', '37', '15', '0');
INSERT INTO `img` VALUES ('3162', '/Upload/image/2017-05-03/5909788315cad.jpg', '1', '1493792902', '37', '15', '0');
INSERT INTO `img` VALUES ('3163', '/Upload/image/2017-05-03/590978835c3d0.jpg', '1', '1493792902', '37', '15', '0');
INSERT INTO `img` VALUES ('3164', '/Upload/image/2017-05-03/590978839f281.jpg', '1', '1493792902', '37', '15', '0');
INSERT INTO `img` VALUES ('3165', '/Upload/image/2017-05-03/59097883b9e87.jpg', '1', '1493792902', '37', '15', '0');
INSERT INTO `img` VALUES ('3166', '/Upload/image/2017-05-03/59097883e1cb6.jpg', '1', '1493792902', '37', '15', '0');
INSERT INTO `img` VALUES ('3167', '/Upload/image/2017-05-03/59097884065f3.jpg', '1', '1493792902', '37', '15', '0');
INSERT INTO `img` VALUES ('3168', '/Upload/image/2017-05-03/59097884401bb.jpg', '1', '1493792902', '37', '15', '0');
INSERT INTO `img` VALUES ('3169', '/Upload/image/2017-05-03/5909788451b96.jpg', '1', '1493792902', '37', '15', '0');
INSERT INTO `img` VALUES ('3170', '/Upload/image/2017-05-03/590978846700c.jpg', '1', '1493792902', '37', '15', '0');
INSERT INTO `img` VALUES ('3171', '/Upload/image/2017-05-03/5909788479ae8.jpg', '1', '1493792902', '37', '15', '0');
INSERT INTO `img` VALUES ('3172', '/Upload/image/2017-05-03/590978848c8cd.jpg', '1', '1493792902', '37', '15', '0');
INSERT INTO `img` VALUES ('3173', '/Upload/image/2017-05-03/590978849c9cb.jpg', '1', '1493792902', '37', '15', '0');
INSERT INTO `img` VALUES ('3174', '/Upload/image/2017-05-03/59097884b168c.jpg', '1', '1493792902', '37', '15', '0');
INSERT INTO `img` VALUES ('3175', '/Upload/image/2017-05-03/59097884c342d.jpg', '1', '1493792902', '37', '15', '0');
INSERT INTO `img` VALUES ('3176', '/Upload/image/2017-05-03/590978a124621.jpg', '1', '1493792977', '38', '15', '8');
INSERT INTO `img` VALUES ('3177', '/Upload/image/2017-05-03/590978a33ff79.jpg', '1', '1493792977', '38', '15', '0');
INSERT INTO `img` VALUES ('3178', '/Upload/image/2017-05-03/590978a343d26.jpg', '1', '1493792977', '38', '15', '0');
INSERT INTO `img` VALUES ('3179', '/Upload/image/2017-05-03/590978a366194.jpg', '1', '1493792977', '38', '15', '0');
INSERT INTO `img` VALUES ('3180', '/Upload/image/2017-05-03/590978a37ad54.jpg', '1', '1493792977', '38', '15', '0');
INSERT INTO `img` VALUES ('3181', '/Upload/image/2017-05-03/590978a39aeaf.jpg', '1', '1493792977', '38', '15', '0');
INSERT INTO `img` VALUES ('3182', '/Upload/image/2017-05-03/590978a3b8ecb.jpg', '1', '1493792977', '38', '15', '0');
INSERT INTO `img` VALUES ('3183', '/Upload/image/2017-05-03/590978a3ca8ed.jpg', '1', '1493792977', '38', '15', '0');
INSERT INTO `img` VALUES ('3184', '/Upload/image/2017-05-03/590978a3e22ae.jpg', '1', '1493792977', '38', '15', '0');
INSERT INTO `img` VALUES ('3185', '/Upload/image/2017-05-03/590978a40b87a.jpg', '1', '1493792977', '38', '15', '0');
INSERT INTO `img` VALUES ('3186', '/Upload/image/2017-05-03/590978a42b765.jpg', '1', '1493792977', '38', '15', '0');
INSERT INTO `img` VALUES ('3187', '/Upload/image/2017-05-03/590978a44719e.jpg', '1', '1493792977', '38', '15', '0');
INSERT INTO `img` VALUES ('3188', '/Upload/image/2017-05-03/590978a4a941e.jpg', '1', '1493792977', '38', '15', '0');
INSERT INTO `img` VALUES ('3189', '/Upload/image/2017-05-03/590978a4abb77.jpg', '1', '1493792977', '38', '15', '0');
INSERT INTO `img` VALUES ('3190', '/Upload/image/2017-05-03/590978a4ae8bc.jpg', '1', '1493792977', '38', '15', '0');
INSERT INTO `img` VALUES ('3191', '/Upload/image/2017-05-03/590978a4d5a6b.jpg', '1', '1493792977', '38', '15', '0');
INSERT INTO `img` VALUES ('3192', '/Upload/image/2017-05-03/590978a6c4d52.jpg', '1', '1493792977', '38', '15', '0');
INSERT INTO `img` VALUES ('3193', '/Upload/image/2017-05-03/590978a6c7a16.jpg', '1', '1493792977', '38', '15', '0');
INSERT INTO `img` VALUES ('3194', '/Upload/image/2017-05-03/590978a6deb6e.jpg', '1', '1493792977', '38', '15', '0');
INSERT INTO `img` VALUES ('3195', '/Upload/image/2017-05-03/590978a6ed7ec.jpg', '1', '1493792977', '38', '15', '0');
INSERT INTO `img` VALUES ('3196', '/Upload/image/2017-05-03/590978a728aed.jpg', '1', '1493792977', '38', '15', '0');
INSERT INTO `img` VALUES ('3197', '/Upload/image/2017-05-03/590978a73ee5a.jpg', '1', '1493792977', '38', '15', '0');
INSERT INTO `img` VALUES ('3198', '/Upload/image/2017-05-03/590978a75c45a.jpg', '1', '1493792977', '38', '15', '0');
INSERT INTO `img` VALUES ('3199', '/Upload/image/2017-05-03/590978a7690fa.jpg', '1', '1493792977', '38', '15', '0');
INSERT INTO `img` VALUES ('3200', '/Upload/image/2017-05-03/590978a77df6f.jpg', '1', '1493792977', '38', '15', '0');
INSERT INTO `img` VALUES ('3201', '/Upload/image/2017-05-03/590978a78d309.jpg', '1', '1493792977', '38', '15', '0');
INSERT INTO `img` VALUES ('3202', '/Upload/image/2017-05-03/590978a7a1dc7.jpg', '1', '1493792977', '38', '15', '0');
INSERT INTO `img` VALUES ('3203', '/Upload/image/2017-05-03/590978a7b33dd.jpg', '1', '1493792977', '38', '15', '0');
INSERT INTO `img` VALUES ('3204', '/Upload/image/2017-05-03/590978a7c9108.jpg', '1', '1493792977', '38', '15', '0');
INSERT INTO `img` VALUES ('3205', '/Upload/image/2017-05-03/590978a7e1e5b.jpg', '1', '1493792977', '38', '15', '0');
INSERT INTO `img` VALUES ('3206', '/Upload/image/2017-05-03/590978a8062db.jpg', '1', '1493792977', '38', '15', '0');
INSERT INTO `img` VALUES ('3207', '/Upload/image/2017-05-03/590978a82065c.jpg', '1', '1493792977', '38', '15', '0');
INSERT INTO `img` VALUES ('3208', '/Upload/image/2017-05-03/590978a82d837.jpg', '1', '1493792977', '38', '15', '0');
INSERT INTO `img` VALUES ('3209', '/Upload/image/2017-05-03/590978a84887b.jpg', '1', '1493792977', '38', '15', '0');
INSERT INTO `img` VALUES ('3210', '/Upload/image/2017-05-03/590978a860929.jpg', '1', '1493792977', '38', '15', '0');
INSERT INTO `img` VALUES ('3211', '/Upload/image/2017-05-03/590978a8789dc.jpg', '1', '1493792977', '38', '15', '0');
INSERT INTO `img` VALUES ('3212', '/Upload/image/2017-05-03/590978a88a136.jpg', '1', '1493792977', '38', '15', '0');
INSERT INTO `img` VALUES ('3213', '/Upload/image/2017-05-03/590978a8c8232.jpg', '1', '1493792977', '38', '15', '0');
INSERT INTO `img` VALUES ('3214', '/Upload/image/2017-05-03/590978a8dab35.jpg', '1', '1493792977', '38', '15', '0');
INSERT INTO `img` VALUES ('3215', '/Upload/image/2017-05-03/590978a8f2f21.jpg', '1', '1493792977', '38', '15', '0');
INSERT INTO `img` VALUES ('3216', '/Upload/image/2017-05-03/590978a94c58b.jpg', '1', '1493792977', '38', '15', '0');
INSERT INTO `img` VALUES ('3217', '/Upload/image/2017-05-03/590978a9615c5.jpg', '1', '1493792977', '38', '15', '0');
INSERT INTO `img` VALUES ('3218', '/Upload/image/2017-05-03/590978a9766b1.jpg', '1', '1493792977', '38', '15', '0');
INSERT INTO `img` VALUES ('3219', '/Upload/image/2017-05-03/590978a9890ba.jpg', '1', '1493792977', '38', '15', '0');
INSERT INTO `img` VALUES ('3220', '/Upload/image/2017-05-03/590978a99db6e.jpg', '1', '1493792977', '38', '15', '0');
INSERT INTO `img` VALUES ('3221', '/Upload/image/2017-05-03/590978a9b0348.jpg', '1', '1493792977', '38', '15', '0');
INSERT INTO `img` VALUES ('3222', '/Upload/image/2017-05-03/590978a9bfc10.jpg', '1', '1493792977', '38', '15', '0');
INSERT INTO `img` VALUES ('3223', '/Upload/image/2017-05-03/590978aa3b672.jpg', '1', '1493792977', '38', '15', '0');
INSERT INTO `img` VALUES ('3224', '/Upload/image/2017-05-03/590978aa5d7e1.jpg', '1', '1493792977', '38', '15', '0');
INSERT INTO `img` VALUES ('3225', '/Upload/image/2017-05-03/590978aa7db34.jpg', '1', '1493792977', '38', '15', '0');
INSERT INTO `img` VALUES ('3226', '/Upload/image/2017-05-03/590978aa93496.jpg', '1', '1493792977', '38', '15', '0');
INSERT INTO `img` VALUES ('3227', '/Upload/image/2017-05-03/590978aab282b.jpg', '1', '1493792977', '38', '15', '0');
INSERT INTO `img` VALUES ('3228', '/Upload/image/2017-05-03/590978aad0878.jpg', '1', '1493792977', '38', '15', '0');
INSERT INTO `img` VALUES ('3229', '/Upload/image/2017-05-03/590978aaea63c.jpg', '1', '1493792977', '38', '15', '0');
INSERT INTO `img` VALUES ('3230', '/Upload/image/2017-05-03/590978ab187a4.jpg', '1', '1493792977', '38', '15', '0');
INSERT INTO `img` VALUES ('3231', '/Upload/image/2017-05-03/590978ab47ea5.jpg', '1', '1493792977', '38', '15', '0');
INSERT INTO `img` VALUES ('3232', '/Upload/image/2017-05-03/590978ab6054b.jpg', '1', '1493792977', '38', '15', '0');
INSERT INTO `img` VALUES ('3233', '/Upload/image/2017-05-03/590978ab78a9f.jpg', '1', '1493792977', '38', '15', '0');
INSERT INTO `img` VALUES ('3234', '/Upload/image/2017-05-03/590978ab8b3f8.jpg', '1', '1493792977', '38', '15', '0');
INSERT INTO `img` VALUES ('3235', '/Upload/image/2017-05-03/590978aba4c3d.jpg', '1', '1493792977', '38', '15', '0');
INSERT INTO `img` VALUES ('3236', '/Upload/image/2017-05-03/590978abbcc9c.jpg', '1', '1493792977', '38', '15', '0');
INSERT INTO `img` VALUES ('3237', '/Upload/image/2017-05-03/590978ac2f97b.jpg', '1', '1493792977', '38', '15', '0');
INSERT INTO `img` VALUES ('3238', '/Upload/image/2017-05-03/590978ac733f0.jpg', '1', '1493792977', '38', '15', '0');
INSERT INTO `img` VALUES ('3239', '/Upload/image/2017-05-03/590978ac93dd4.jpg', '1', '1493792977', '38', '15', '0');
INSERT INTO `img` VALUES ('3240', '/Upload/image/2017-05-03/590978acab4d2.jpg', '1', '1493792977', '38', '15', '0');
INSERT INTO `img` VALUES ('3241', '/Upload/image/2017-05-03/590978accd286.jpg', '1', '1493792977', '38', '15', '0');
INSERT INTO `img` VALUES ('3242', '/Upload/image/2017-05-03/590978ace83b4.jpg', '1', '1493792977', '38', '15', '0');
INSERT INTO `img` VALUES ('3243', '/Upload/image/2017-05-03/590978ad4d9cb.jpg', '1', '1493792977', '38', '15', '0');
INSERT INTO `img` VALUES ('3244', '/Upload/image/2017-05-03/590978ad6a6df.jpg', '1', '1493792977', '38', '15', '0');
INSERT INTO `img` VALUES ('3245', '/Upload/image/2017-05-03/590978ad84b80.jpg', '1', '1493792977', '38', '15', '0');
INSERT INTO `img` VALUES ('3246', '/Upload/image/2017-05-03/590978ada0f3c.jpg', '1', '1493792977', '38', '15', '0');
INSERT INTO `img` VALUES ('3247', '/Upload/image/2017-05-03/590978adb42db.jpg', '1', '1493792977', '38', '15', '0');
INSERT INTO `img` VALUES ('3248', '/Upload/image/2017-05-03/590978addb70f.jpg', '1', '1493792977', '38', '15', '0');
INSERT INTO `img` VALUES ('3249', '/Upload/image/2017-05-03/590978ae04c44.jpg', '1', '1493792977', '38', '15', '0');
INSERT INTO `img` VALUES ('3250', '/Upload/image/2017-05-03/590978ae69be7.jpg', '1', '1493792977', '38', '15', '0');
INSERT INTO `img` VALUES ('3251', '/Upload/image/2017-05-03/590978ae8df71.jpg', '1', '1493792977', '38', '15', '0');
INSERT INTO `img` VALUES ('3252', '/Upload/image/2017-05-03/590978aeba8a5.jpg', '1', '1493792977', '38', '15', '0');
INSERT INTO `img` VALUES ('3253', '/Upload/image/2017-05-03/590978aed51b5.jpg', '1', '1493792977', '38', '15', '0');
INSERT INTO `img` VALUES ('3254', '/Upload/image/2017-05-03/590978af2299c.jpg', '1', '1493792977', '38', '15', '0');
INSERT INTO `img` VALUES ('3255', '/Upload/image/2017-05-03/590978af422c4.jpg', '1', '1493792977', '38', '15', '0');
INSERT INTO `img` VALUES ('3256', '/Upload/image/2017-05-03/590978af64202.jpg', '1', '1493792977', '38', '15', '0');
INSERT INTO `img` VALUES ('3257', '/Upload/image/2017-05-03/590978af7d238.jpg', '1', '1493792977', '38', '15', '0');
INSERT INTO `img` VALUES ('3258', '/Upload/image/2017-05-03/590978af92aeb.jpg', '1', '1493792977', '38', '15', '0');
INSERT INTO `img` VALUES ('3259', '/Upload/image/2017-05-03/590978afe7ff7.jpg', '1', '1493792977', '38', '15', '0');
INSERT INTO `img` VALUES ('3260', '/Upload/image/2017-05-03/590978b00f70b.jpg', '1', '1493792977', '38', '15', '0');
INSERT INTO `img` VALUES ('3261', '/Upload/image/2017-05-03/590978b02b3ef.jpg', '1', '1493792977', '38', '15', '0');
INSERT INTO `img` VALUES ('3262', '/Upload/image/2017-05-03/590978b047177.jpg', '1', '1493792977', '38', '15', '0');
INSERT INTO `img` VALUES ('3263', '/Upload/image/2017-05-03/590978b060368.jpg', '1', '1493792977', '38', '15', '0');
INSERT INTO `img` VALUES ('3264', '/Upload/image/2017-05-03/590978b08202c.jpg', '1', '1493792977', '38', '15', '0');
INSERT INTO `img` VALUES ('3265', '/Upload/image/2017-05-03/590978b09d934.jpg', '1', '1493792977', '38', '15', '0');
INSERT INTO `img` VALUES ('3266', '/Upload/image/2017-05-03/590978b0b07c4.jpg', '1', '1493792977', '38', '15', '0');
INSERT INTO `img` VALUES ('3267', '/Upload/image/2017-05-03/590978b0ca6cd.jpg', '1', '1493792977', '38', '15', '0');
INSERT INTO `img` VALUES ('3268', '/Upload/image/2017-05-03/590978b0e8729.jpg', '1', '1493792977', '38', '15', '0');
INSERT INTO `img` VALUES ('3269', '/Upload/image/2017-05-03/590978b10e293.jpg', '1', '1493792977', '38', '15', '0');
INSERT INTO `img` VALUES ('3270', '/Upload/image/2017-05-03/590978b12b98e.jpg', '1', '1493792977', '38', '15', '0');
INSERT INTO `img` VALUES ('3271', '/Upload/image/2017-05-03/590978b147ee9.jpg', '1', '1493792977', '38', '15', '0');
INSERT INTO `img` VALUES ('3272', '/Upload/image/2017-05-03/590978b164329.jpg', '1', '1493792977', '38', '15', '0');
INSERT INTO `img` VALUES ('3273', '/Upload/image/2017-05-03/590978b181609.jpg', '1', '1493792977', '38', '15', '0');
INSERT INTO `img` VALUES ('3274', '/Upload/image/2017-05-03/590978b1dbda6.jpg', '1', '1493792977', '38', '15', '0');
INSERT INTO `img` VALUES ('3275', '/Upload/image/2017-05-03/590978b209102.jpg', '1', '1493792977', '38', '15', '0');
INSERT INTO `img` VALUES ('3276', '/Upload/image/2017-05-03/590978b24289e.jpg', '1', '1493792977', '38', '15', '0');
INSERT INTO `img` VALUES ('3277', '/Upload/image/2017-05-03/590978b2815cc.jpg', '1', '1493792977', '38', '15', '0');
INSERT INTO `img` VALUES ('3278', '/Upload/image/2017-05-03/590978b2cca4a.jpg', '1', '1493792977', '38', '15', '0');
INSERT INTO `img` VALUES ('3279', '/Upload/image/2017-05-03/590978b37a4a1.jpg', '1', '1493792977', '38', '15', '0');
INSERT INTO `img` VALUES ('3280', '/Upload/image/2017-05-03/590978b3cad79.jpg', '1', '1493792977', '38', '15', '0');
INSERT INTO `img` VALUES ('3281', '/Upload/image/2017-05-03/590978b46d5b7.jpg', '1', '1493792977', '38', '15', '0');
INSERT INTO `img` VALUES ('3282', '/Upload/image/2017-05-03/590978b4cc225.jpg', '1', '1493792977', '38', '15', '0');
INSERT INTO `img` VALUES ('3283', '/Upload/image/2017-05-03/590978b50e94f.jpg', '1', '1493792977', '38', '15', '0');
INSERT INTO `img` VALUES ('3284', '/Upload/image/2017-05-03/590978b57e91d.jpg', '1', '1493792977', '38', '15', '0');
INSERT INTO `img` VALUES ('3285', '/Upload/image/2017-05-03/590978b5de5ce.jpg', '1', '1493792977', '38', '15', '0');
INSERT INTO `img` VALUES ('3286', '/Upload/image/2017-05-03/590978b65a2c3.jpg', '1', '1493792977', '38', '15', '0');
INSERT INTO `img` VALUES ('3287', '/Upload/image/2017-05-03/590978b6a8f7a.jpg', '1', '1493792977', '38', '15', '0');
INSERT INTO `img` VALUES ('3288', '/Upload/image/2017-05-03/590978b730782.jpg', '1', '1493792977', '38', '15', '0');
INSERT INTO `img` VALUES ('3289', '/Upload/image/2017-05-03/590978b78e839.jpg', '1', '1493792977', '38', '15', '0');
INSERT INTO `img` VALUES ('3290', '/Upload/image/2017-05-03/590978b801ae1.jpg', '1', '1493792977', '38', '15', '0');
INSERT INTO `img` VALUES ('3291', '/Upload/image/2017-05-03/590978b842e8c.jpg', '1', '1493792977', '38', '15', '0');
INSERT INTO `img` VALUES ('3292', '/Upload/image/2017-05-03/590978b88c52b.jpg', '1', '1493792977', '38', '15', '0');
INSERT INTO `img` VALUES ('3293', '/Upload/image/2017-05-03/590978b8dbf73.jpg', '1', '1493792977', '38', '15', '0');
INSERT INTO `img` VALUES ('3294', '/Upload/image/2017-05-03/590978b96c86c.jpg', '1', '1493792977', '38', '15', '0');
INSERT INTO `img` VALUES ('3295', '/Upload/image/2017-05-03/590978b9b548f.jpg', '1', '1493792977', '38', '15', '0');
INSERT INTO `img` VALUES ('3296', '/Upload/image/2017-05-03/590978ba26918.jpg', '1', '1493792977', '38', '15', '0');
INSERT INTO `img` VALUES ('3297', '/Upload/image/2017-05-03/590978ba9c2c4.jpg', '1', '1493792977', '38', '15', '0');
INSERT INTO `img` VALUES ('3298', '/Upload/image/2017-05-03/590978baedfef.jpg', '1', '1493792977', '38', '15', '0');
INSERT INTO `img` VALUES ('3299', '/Upload/image/2017-05-03/590978bb6060a.jpg', '1', '1493792977', '38', '15', '0');
INSERT INTO `img` VALUES ('3300', '/Upload/image/2017-05-03/590978bbc7e88.jpg', '1', '1493792977', '38', '15', '0');
INSERT INTO `img` VALUES ('3301', '/Upload/image/2017-05-03/590978bc56398.jpg', '1', '1493792977', '38', '15', '0');
INSERT INTO `img` VALUES ('3302', '/Upload/image/2017-05-03/590978bcb7b2e.jpg', '1', '1493792977', '38', '15', '0');
INSERT INTO `img` VALUES ('3303', '/Upload/image/2017-05-03/590978bd26e12.jpg', '1', '1493792977', '38', '15', '0');
INSERT INTO `img` VALUES ('3304', '/Upload/image/2017-05-03/590978bd978c2.jpg', '1', '1493792977', '38', '15', '0');
INSERT INTO `img` VALUES ('3305', '/Upload/image/2017-05-03/590978be5fa16.jpg', '1', '1493792977', '38', '15', '0');
INSERT INTO `img` VALUES ('3306', '/Upload/image/2017-05-03/590978bf0a68e.jpg', '1', '1493792977', '38', '15', '0');
INSERT INTO `img` VALUES ('3307', '/Upload/image/2017-05-03/590978c0551dc.jpg', '1', '1493792977', '38', '15', '0');
INSERT INTO `img` VALUES ('3308', '/Upload/image/2017-05-03/590978c1963b2.jpg', '1', '1493792977', '38', '15', '0');
INSERT INTO `img` VALUES ('3309', '/Upload/image/2017-05-03/590978c251760.jpg', '1', '1493792977', '38', '15', '0');
INSERT INTO `img` VALUES ('3310', '/Upload/image/2017-05-03/590978c2ef0a9.jpg', '1', '1493792977', '38', '15', '0');
INSERT INTO `img` VALUES ('3311', '/Upload/image/2017-05-03/590978c455e2e.jpg', '1', '1493792977', '38', '15', '0');
INSERT INTO `img` VALUES ('3312', '/Upload/image/2017-05-03/590978c5416ff.jpg', '1', '1493792977', '38', '15', '0');
INSERT INTO `img` VALUES ('3313', '/Upload/image/2017-05-03/590978c64d024.jpg', '1', '1493792977', '38', '15', '0');
INSERT INTO `img` VALUES ('3314', '/Upload/image/2017-05-03/590978c75011f.jpg', '1', '1493792977', '38', '15', '0');
INSERT INTO `img` VALUES ('3315', '/Upload/image/2017-05-03/590978c875080.jpg', '1', '1493792977', '38', '15', '0');
INSERT INTO `img` VALUES ('3316', '/Upload/image/2017-05-03/590978c945eeb.jpg', '1', '1493792977', '38', '15', '0');
INSERT INTO `img` VALUES ('3317', '/Upload/image/2017-05-03/590978c9b521e.jpg', '1', '1493792977', '38', '15', '0');
INSERT INTO `img` VALUES ('3318', '/Upload/image/2017-05-03/590978ca9ec2d.jpg', '1', '1493792977', '38', '15', '0');
INSERT INTO `img` VALUES ('3319', '/Upload/image/2017-05-03/590978cb16c72.jpg', '1', '1493792977', '38', '15', '0');
INSERT INTO `img` VALUES ('3320', '/Upload/image/2017-05-03/590978cb67630.jpg', '1', '1493792977', '38', '15', '0');
INSERT INTO `img` VALUES ('3321', '/Upload/image/2017-05-03/590978cbc3956.jpg', '1', '1493792977', '38', '15', '0');
INSERT INTO `img` VALUES ('3322', '/Upload/image/2017-05-03/590978cbdb83e.jpg', '1', '1493792977', '38', '15', '0');
INSERT INTO `img` VALUES ('3323', '/Upload/image/2017-05-03/590978cc01c9f.jpg', '1', '1493792977', '38', '15', '0');
INSERT INTO `img` VALUES ('3324', '/Upload/image/2017-05-03/590978cc67f66.jpg', '1', '1493792977', '38', '15', '0');
INSERT INTO `img` VALUES ('3325', '/Upload/image/2017-05-03/590978cc7d60b.jpg', '1', '1493792977', '38', '15', '0');
INSERT INTO `img` VALUES ('3326', '/Upload/image/2017-05-03/590978cc9a642.jpg', '1', '1493792977', '38', '15', '0');
INSERT INTO `img` VALUES ('3327', '/Upload/image/2017-05-03/590978cd0004d.jpg', '1', '1493792977', '38', '15', '0');
INSERT INTO `img` VALUES ('3328', '/Upload/image/2017-05-03/590978cd155c1.jpg', '1', '1493792977', '38', '15', '0');
INSERT INTO `img` VALUES ('3329', '/Upload/image/2017-05-03/590978cd34447.jpg', '1', '1493792977', '38', '15', '0');
INSERT INTO `img` VALUES ('3330', '/Upload/image/2017-05-03/590978cd45c51.jpg', '1', '1493792977', '38', '15', '0');
INSERT INTO `img` VALUES ('3331', '/Upload/image/2017-05-03/590978cd5a27f.jpg', '1', '1493792977', '38', '15', '0');
INSERT INTO `img` VALUES ('3332', '/Upload/image/2017-05-03/590978cd795bd.jpg', '1', '1493792977', '38', '15', '0');
INSERT INTO `img` VALUES ('3333', '/Upload/image/2017-05-03/590978cd8b40b.jpg', '1', '1493792977', '38', '15', '0');
INSERT INTO `img` VALUES ('3334', '/Upload/image/2017-05-03/590978cdd6d78.jpg', '1', '1493792977', '38', '15', '0');
INSERT INTO `img` VALUES ('3335', '/Upload/image/2017-05-03/590978cded8e3.jpg', '1', '1493792977', '38', '15', '0');
INSERT INTO `img` VALUES ('3336', '/Upload/image/2017-05-03/590978ce2a50b.jpg', '1', '1493792977', '38', '15', '0');
INSERT INTO `img` VALUES ('3337', '/Upload/image/2017-05-03/590978ce6568c.jpg', '1', '1493792977', '38', '15', '0');
INSERT INTO `img` VALUES ('3338', '/Upload/image/2017-05-03/590978ce80262.jpg', '1', '1493792977', '38', '15', '0');
INSERT INTO `img` VALUES ('3339', '/Upload/image/2017-05-03/590978ce997af.jpg', '1', '1493792977', '38', '15', '0');
INSERT INTO `img` VALUES ('3340', '/Upload/image/2017-05-03/590978cebb23d.jpg', '1', '1493792977', '38', '15', '0');
INSERT INTO `img` VALUES ('3341', '/Upload/image/2017-05-03/590978ced55c6.jpg', '1', '1493792977', '38', '15', '0');
INSERT INTO `img` VALUES ('3342', '/Upload/image/2017-05-03/590978ceef7f4.jpg', '1', '1493792977', '38', '15', '0');
INSERT INTO `img` VALUES ('3343', '/Upload/image/2017-05-03/590978cf14b3e.jpg', '1', '1493792977', '38', '15', '0');
INSERT INTO `img` VALUES ('3344', '/Upload/image/2017-05-03/590978cf30f1d.jpg', '1', '1493792977', '38', '15', '0');
INSERT INTO `img` VALUES ('3345', '/Upload/image/2017-05-03/590978cf485f0.jpg', '1', '1493792977', '38', '15', '0');
INSERT INTO `img` VALUES ('3346', '/Upload/image/2017-05-03/590978cf6011c.jpg', '1', '1493792977', '38', '15', '0');
INSERT INTO `img` VALUES ('3347', '/Upload/image/2017-05-03/590978cf7a048.jpg', '1', '1493792977', '38', '15', '0');
INSERT INTO `img` VALUES ('3348', '/Upload/image/2017-05-03/590978cf93128.jpg', '1', '1493792977', '38', '15', '0');
INSERT INTO `img` VALUES ('3349', '/Upload/image/2017-05-03/590978cfac04d.jpg', '1', '1493792977', '38', '15', '0');
INSERT INTO `img` VALUES ('3350', '/Upload/image/2017-05-03/590978cfc59a7.jpg', '1', '1493792977', '38', '15', '0');
INSERT INTO `img` VALUES ('3351', '/Upload/image/2017-05-03/590978cfdfc4b.jpg', '1', '1493792977', '38', '15', '0');
INSERT INTO `img` VALUES ('3352', '/Upload/image/2017-05-03/590978d00d881.jpg', '1', '1493792977', '38', '15', '0');
INSERT INTO `img` VALUES ('3353', '/Upload/image/2017-05-03/590978d028350.jpg', '1', '1493792977', '38', '15', '0');
INSERT INTO `img` VALUES ('3354', '/Upload/image/2017-05-03/590978d04484f.jpg', '1', '1493792977', '38', '15', '0');
INSERT INTO `img` VALUES ('3355', '/Upload/image/2017-05-03/590978d0ab90a.jpg', '1', '1493792977', '38', '15', '0');

-- ----------------------------
-- Table structure for item
-- ----------------------------
DROP TABLE IF EXISTS `item`;
CREATE TABLE `item` (
  `item_id` int(11) NOT NULL AUTO_INCREMENT,
  `item_name` varchar(30) NOT NULL,
  `item_time` int(11) NOT NULL,
  `item_banner_img` varchar(100) NOT NULL,
  `item_link` varchar(100) NOT NULL,
  PRIMARY KEY (`item_id`),
  UNIQUE KEY `item_name` (`item_name`),
  UNIQUE KEY `item_time` (`item_time`),
  UNIQUE KEY `item_link` (`item_link`)
) ENGINE=MyISAM AUTO_INCREMENT=16 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of item
-- ----------------------------
INSERT INTO `item` VALUES ('15', 'SWISSE中国', '1493792743', '2017-05-03/590977e7e4f02.jpg', 'swisse');

-- ----------------------------
-- Table structure for title
-- ----------------------------
DROP TABLE IF EXISTS `title`;
CREATE TABLE `title` (
  `title_id` int(11) NOT NULL AUTO_INCREMENT,
  `title_count` varchar(10) NOT NULL,
  `title_link` varchar(100) NOT NULL,
  `title_iid` int(11) DEFAULT '1',
  PRIMARY KEY (`title_id`)
) ENGINE=MyISAM AUTO_INCREMENT=39 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of title
-- ----------------------------
INSERT INTO `title` VALUES ('36', 'aa', 'aa', '13');
INSERT INTO `title` VALUES ('37', '现场', 'xc', '15');
INSERT INTO `title` VALUES ('38', '活动', 'hd', '15');

-- ----------------------------
-- Table structure for user
-- ----------------------------
DROP TABLE IF EXISTS `user`;
CREATE TABLE `user` (
  `user_id` int(11) NOT NULL AUTO_INCREMENT,
  `user_account` varchar(20) NOT NULL,
  `user_pwd` varchar(20) NOT NULL,
  `user_name` varchar(20) NOT NULL,
  `user_type` int(11) DEFAULT '0',
  `user_typename` varchar(20) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  PRIMARY KEY (`user_id`)
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of user
-- ----------------------------
INSERT INTO `user` VALUES ('1', 'admin', '123456', '管理员大大', '0', '管理员');

-- ----------------------------
-- Table structure for we
-- ----------------------------
DROP TABLE IF EXISTS `we`;
CREATE TABLE `we` (
  `we_id` int(11) NOT NULL AUTO_INCREMENT,
  `we_logo` varchar(200) NOT NULL,
  `we_back` varchar(200) NOT NULL,
  `we_name` varchar(200) NOT NULL,
  `we_phone` varchar(11) NOT NULL,
  `we_time` int(11) NOT NULL,
  PRIMARY KEY (`we_id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of we
-- ----------------------------
INSERT INTO `we` VALUES ('1', '2017-04-17/58f47fb97ce24.jpg', '2017-04-20/58f880a140a48.jpg', 'HIMAGE', '188-8888-88', '1492680962');

-- ----------------------------
-- Table structure for weixin
-- ----------------------------
DROP TABLE IF EXISTS `weixin`;
CREATE TABLE `weixin` (
  `wx_id` int(11) NOT NULL AUTO_INCREMENT,
  `wx_title` varchar(50) NOT NULL,
  `wx_imgUrl` varchar(100) NOT NULL,
  `wx_desc` varchar(200) NOT NULL,
  `wx_iid` int(11) NOT NULL DEFAULT '0',
  `wx_tid` int(11) NOT NULL DEFAULT '0',
  `wx_link` varchar(200) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  PRIMARY KEY (`wx_id`)
) ENGINE=MyISAM AUTO_INCREMENT=12 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of weixin
-- ----------------------------
INSERT INTO `weixin` VALUES ('10', 'a\'a', 'http://zc.himage.com/Upload/wximg/', 'a\'a', '13', '36', 'http://zc.himage.com/index.php/Himage/index/i/13/t/36.html');
INSERT INTO `weixin` VALUES ('11', 'SWISSE中国', 'http://zc.himage.com/Upload/wximg/2017-05-03/590978320c235.jpg', 'SWISSE中国上市发布会', '15', '38', 'http://zc.himage.com/index.php/Himage/index/i/15/t/38.html');

-- ----------------------------
-- Table structure for zan
-- ----------------------------
DROP TABLE IF EXISTS `zan`;
CREATE TABLE `zan` (
  `zan_id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `zan_iid` int(11) NOT NULL,
  `zan_imgid` int(11) NOT NULL,
  `zan_ip` varchar(11) COLLATE utf8_bin NOT NULL,
  `zan_time` int(11) NOT NULL,
  PRIMARY KEY (`zan_id`)
) ENGINE=MyISAM AUTO_INCREMENT=17 DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

-- ----------------------------
-- Records of zan
-- ----------------------------
INSERT INTO `zan` VALUES ('1', '15', '3176', '127.0.0.1', '1493981036');
INSERT INTO `zan` VALUES ('2', '15', '3176', '127.0.0.1', '1493981042');
INSERT INTO `zan` VALUES ('3', '15', '3176', '127.0.0.1', '1493981108');
INSERT INTO `zan` VALUES ('4', '15', '3176', '127.0.0.1', '1493981313');
INSERT INTO `zan` VALUES ('5', '15', '3176', '127.0.0.1', '1493981336');
INSERT INTO `zan` VALUES ('6', '15', '3176', '127.0.0.1', '1493981980');
INSERT INTO `zan` VALUES ('7', '15', '3176', '127.0.0.1', '1493982297');
INSERT INTO `zan` VALUES ('8', '15', '3176', '127.0.0.1', '1493982442');
INSERT INTO `zan` VALUES ('9', '15', '3176', '127.0.0.1', '1493982872');
INSERT INTO `zan` VALUES ('10', '15', '3176', '127.0.0.1', '1493983181');
INSERT INTO `zan` VALUES ('11', '15', '3176', '127.0.0.1', '1493983188');
INSERT INTO `zan` VALUES ('12', '15', '3176', '127.0.0.1', '1493984078');
INSERT INTO `zan` VALUES ('13', '15', '3176', '127.0.0.1', '1493984110');
INSERT INTO `zan` VALUES ('14', '15', '3176', '127.0.0.1', '1493984125');
INSERT INTO `zan` VALUES ('15', '15', '3176', '127.0.0.1', '1493984164');
INSERT INTO `zan` VALUES ('16', '15', '3176', '127.0.0.1', '1493985681');

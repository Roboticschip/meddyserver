drop database `meddydatabase`;
CREATE SCHEMA `meddydatabase`;
create database `meddydatabase`;
use `meddydatabase`;

 DROP TABLE IF EXISTS `introduction`;
 DROP TABLE IF EXISTS `introductions`;
CREATE TABLE `introductions` (
  `id` int unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(200) DEFAULT NULL,
  `content` varchar(200) DEFAULT NULL,
  PRIMARY KEY (`id`)
);

INSERT INTO `introductions` VALUES (1,'Hi','Hello World'),(2,'Bye','Good Night Take Care');

DROP TABLE IF EXISTS `questionbank`;
DROP TABLE IF EXISTS `questionbanks`;
CREATE TABLE `questionbanks` (
  `quest_id` int unsigned NOT NULL ,
  `question` varchar(200) DEFAULT NULL,
  `option_a` varchar(50) DEFAULT NULL,
  `option_b` varchar(50) DEFAULT NULL,
  `option_c` varchar(50) DEFAULT NULL,
  `option_d` varchar(50) DEFAULT NULL,
  `answer` varchar(10) DEFAULT NULL,
  `solution` varchar(200) DEFAULT NULL,
  `resources` varchar(200) DEFAULT NULL,
  `package_id` int DEFAULT NULL,
  `level_id` int DEFAULT NULL,
  `soft_deleted` boolean DEFAULT FALSE,
    `version` int(11) DEFAULT '0',
  PRIMARY KEY (`quest_id`),
  KEY `package_id` (`package_id`)
  );
  
DROP TABLE IF EXISTS `city`;
DROP TABLE IF EXISTS `citys`;
CREATE TABLE `citys` (
  `city_id` int unsigned NOT NULL ,
  `name` varchar(200) DEFAULT NULL,
  `soft_deleted` boolean DEFAULT FALSE,
  `version` int(11) DEFAULT '0',
  PRIMARY KEY (`city_id`)
  );
  
DROP TABLE IF EXISTS `localitys`;
DROP TABLE IF EXISTS `localitys`;
CREATE TABLE `localitys` (
  `locality_id` int unsigned NOT NULL ,
  `name` varchar(200) DEFAULT NULL,
  `pincode` int(20) DEFAULT '0',
  `city_id` int unsigned DEFAULT NULL ,
  `soft_deleted` boolean DEFAULT FALSE,
  `version` int(11) DEFAULT '0',
  PRIMARY KEY (`locality_id`),
    KEY `city_id` (`city_id`)
  );
  
  
  DROP TABLE IF EXISTS `userdetails`;
  CREATE TABLE `userdetails` (
  `user_id` int unsigned NOT NULL AUTO_INCREMENT,
  `user_name` varchar(50) DEFAULT NULL,
  `password` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`user_id`)
  );
  

  DROP TABLE IF EXISTS `packages`;
  CREATE TABLE `packages` (
  `package_id` int unsigned NOT NULL,
  `package_name` varchar(50) DEFAULT NULL,
  `version` int(11) DEFAULT '0', 
  PRIMARY KEY (`package_id`)
  )ENGINE=Innodb DEFAULT CHARSET=latin1;
  


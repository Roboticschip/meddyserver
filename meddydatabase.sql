drop database `gyanikaundatabase`;
CREATE SCHEMA `gyanikaundatabase`;
create database `gyanikaundatabase`;
use `gyanikaundatabase`;

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
  
  DROP TABLE IF EXISTS `userdetails`;
  CREATE TABLE `userdetails` (
  `user_id` int unsigned NOT NULL AUTO_INCREMENT,
  `user_name` varchar(50) DEFAULT NULL,
  `password` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`user_id`)
  );
  
  DROP TABLE IF EXISTS `user_states`;
  CREATE TABLE `user_states` (
  `state_id` int unsigned NOT NULL AUTO_INCREMENT,
  `user_id` int DEFAULT NULL,
  `package_id` int DEFAULT NULL,
  `sublevel_id` int DEFAULT NULL,
  `level_id` int DEFAULT NULL,
   `version` int(11) DEFAULT '0',
  PRIMARY KEY (`state_id`),
  KEY `user_id` (`user_id`)
  );
  
  DROP TABLE IF EXISTS `user_package_collections`;
  CREATE TABLE `user_package_collections` (
  `collection_id` int unsigned NOT NULL AUTO_INCREMENT,
  `user_id` int unsigned NOT NULL,
  `package_id` int DEFAULT NULL,
   `version` int(11) DEFAULT '0',
  PRIMARY KEY (`collection_id`),
  KEY `user_id` (`user_id`),
  KEY `package_id` (`package_id`)
  );
  
  DROP TABLE IF EXISTS `packages`;
  CREATE TABLE `packages` (
  `package_id` int unsigned NOT NULL,
  `package_name` varchar(50) DEFAULT NULL,
  `version` int(11) DEFAULT '0', 
  PRIMARY KEY (`package_id`)
  )ENGINE=Innodb DEFAULT CHARSET=latin1;
  
  DROP TABLE IF EXISTS `user_pointeres`;
  CREATE TABLE `user_pointeres` (
  `pointer_id` int unsigned NOT NULL AUTO_INCREMENT,
    `user_id` int unsigned NOT NULL,
	`package_id` int DEFAULT NULL,
	`level_id` int DEFAULT NULL,
   `headpointer` int DEFAULT NULL,
     `version` int(11) DEFAULT '0',
  PRIMARY KEY (`pointer_id`),
    KEY `user_id` (`user_id`),
  KEY `package_id` (`package_id`)
  );  
  

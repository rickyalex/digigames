/*
SQLyog Ultimate v11.33 (32 bit)
MySQL - 5.5.25a : Database - digigames
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
CREATE DATABASE /*!32312 IF NOT EXISTS*/`digigames` /*!40100 DEFAULT CHARACTER SET latin1 */;

USE `digigames`;

/*Table structure for table `comments` */

DROP TABLE IF EXISTS `comments`;

CREATE TABLE `comments` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `game_id` int(11) NOT NULL,
  `comment` text NOT NULL,
  `date_created` datetime DEFAULT NULL,
  `created_by` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=latin1;

/*Data for the table `comments` */

insert  into `comments`(`id`,`game_id`,`comment`,`date_created`,`created_by`) values (1,1,'amazing','2017-10-28 01:57:45','1'),(2,3,'cool','2017-10-26 01:57:48','1'),(3,1,'this is great !!','2017-10-03 01:57:51','2'),(4,3,'hello there','2017-10-28 06:19:36','2'),(5,4,'i like it','2017-10-28 06:26:25','1'),(6,1,'nice','2017-10-28 06:34:58','3');

/*Table structure for table `cover` */

DROP TABLE IF EXISTS `cover`;

CREATE TABLE `cover` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(200) NOT NULL,
  `caption` varchar(200) DEFAULT NULL,
  `image_link` varchar(200) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=15 DEFAULT CHARSET=latin1;

/*Data for the table `cover` */

insert  into `cover`(`id`,`title`,`caption`,`image_link`) values (1,'DESTINY 2','The Best Selling Game, find out why','assets/images/cover1.jpg'),(2,'NO MAN\'S SKY','Want a unique gameplay ? This has to be it','assets/images/cover2.jpg'),(3,'ASSASIN\'S CREED','The Adventure continues','assets/images/cover3.jpg');

/*Table structure for table `game` */

DROP TABLE IF EXISTS `game`;

CREATE TABLE `game` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(200) DEFAULT NULL,
  `description` varchar(200) DEFAULT NULL,
  `caption` varchar(100) DEFAULT NULL,
  `genre` varchar(200) DEFAULT NULL,
  `image_link` varchar(200) DEFAULT NULL,
  `url` varchar(200) DEFAULT NULL,
  `date_created` datetime DEFAULT NULL,
  `created_by` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=19 DEFAULT CHARSET=latin1;

/*Data for the table `game` */

insert  into `game`(`id`,`title`,`description`,`caption`,`genre`,`image_link`,`url`,`date_created`,`created_by`) values (1,'StarCraft 2','StarCraft 2 is a military science fiction real-time strategy video game developed and published by Blizzard Entertainment. It was released worldwide in July 2010 for Microsoft Windows and Mac OS X','The Biggest RTS community','Real Time Strategy','assets/images/box1.jpg','index.php?r=site%2Fdetail&id=1',NULL,NULL),(3,'Titanfall 2','Titanfall 2 is a first-person shooter video game developed by Respawn Entertainment and published by Electronic Arts. It is the sequel to 2014\'s Titanfall and was released worldwide on October 28, 201','The sequel of the best selling FPS game','First Person Shooting','assets/images/box2.jpg','index.php?r=site%2Fdetail&id=3',NULL,NULL),(4,'Angry Birds Seasons','Angry Birds Seasons is the second puzzle video game in the Angry Birds series, developed by Rovio Entertainment','The birds are still angry !','Arcade','assets/images/box3.jpg','index.php?r=site%2Fdetail&id=4',NULL,NULL);

/*Table structure for table `users` */

DROP TABLE IF EXISTS `users`;

CREATE TABLE `users` (
  `id_user` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(50) DEFAULT NULL,
  `password` varchar(100) DEFAULT NULL,
  `authKey` varchar(100) DEFAULT NULL,
  `accessToken` varchar(100) DEFAULT NULL,
  `first_name` varchar(100) DEFAULT NULL,
  `last_name` varchar(100) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `date_created` datetime DEFAULT NULL,
  PRIMARY KEY (`id_user`)
) ENGINE=InnoDB AUTO_INCREMENT=19 DEFAULT CHARSET=latin1;

/*Data for the table `users` */

insert  into `users`(`id_user`,`username`,`password`,`authKey`,`accessToken`,`first_name`,`last_name`,`email`,`date_created`) values (1,'ricky','202cb962ac59075b964b07152d234b70','YExKoVRkOR4-sdNn0ce1q3Y43EVDaaRi',NULL,'ricky','alexander',NULL,'2017-10-28 03:18:19'),(2,'alexander','202cb962ac59075b964b07152d234b70','YExKoVRkOR4-sdNn0ce1q3Y43EVDaaRi',NULL,'bevi','agustiani','','2017-10-28 03:18:19'),(3,'hermanto','202cb962ac59075b964b07152d234b70','tNtH4320Qm6wA8W5oTwNrOR_4upNly09',NULL,'hermanto','','','2017-10-28 06:31:03');

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

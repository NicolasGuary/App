# ************************************************************
# Sequel Pro SQL dump
# Version 4541
#
# http://www.sequelpro.com/
# https://github.com/sequelpro/sequelpro
#
# Hôte: e7qyahb3d90mletd.chr7pe7iynqr.eu-west-1.rds.amazonaws.com (MySQL 5.7.19-log)
# Base de données: n0refmecw7sc6exe
# Temps de génération: 2018-06-02 22:04:34 +0000
# ************************************************************


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;


# Affichage de la table comment
# ------------------------------------------------------------

DROP TABLE IF EXISTS `comment`;

CREATE TABLE `comment` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `body` varchar(255) DEFAULT NULL,
  `idUser` int(11) unsigned NOT NULL,
  `idPost` int(11) unsigned NOT NULL,
  `commented_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  KEY `fk_post_id` (`idPost`),
  KEY `fk_user_comment` (`idUser`),
  CONSTRAINT `fk_post_id` FOREIGN KEY (`idPost`) REFERENCES `post` (`id`),
  CONSTRAINT `fk_user_comment` FOREIGN KEY (`idUser`) REFERENCES `user` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;



# Affichage de la table follow
# ------------------------------------------------------------

DROP TABLE IF EXISTS `follow`;

CREATE TABLE `follow` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `idUser` int(11) unsigned NOT NULL,
  `idFollower` int(11) unsigned NOT NULL,
  `state` int(11) DEFAULT '1',
  PRIMARY KEY (`id`),
  KEY `fk_follower_id` (`idFollower`),
  KEY `fk_user_id` (`idUser`),
  CONSTRAINT `fk_follower_id` FOREIGN KEY (`idFollower`) REFERENCES `user` (`id`),
  CONSTRAINT `fk_user_id` FOREIGN KEY (`idUser`) REFERENCES `user` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;



# Affichage de la table likers
# ------------------------------------------------------------

DROP TABLE IF EXISTS `likers`;

CREATE TABLE `likers` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `idPost` int(11) unsigned NOT NULL,
  `idLiker` int(11) unsigned NOT NULL,
  `state` int(11) DEFAULT '1',
  PRIMARY KEY (`id`),
  KEY `fk_user_liker_ir` (`idLiker`),
  KEY `fk_liked_post` (`idPost`),
  CONSTRAINT `fk_liked_post` FOREIGN KEY (`idPost`) REFERENCES `post` (`id`),
  CONSTRAINT `fk_user_liker_ir` FOREIGN KEY (`idLiker`) REFERENCES `user` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;



# Affichage de la table post
# ------------------------------------------------------------

DROP TABLE IF EXISTS `post`;

CREATE TABLE `post` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `contenu` text,
  `link` varchar(200) DEFAULT NULL,
  `idUser` int(11) unsigned NOT NULL,
  `date` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `titre` varchar(500) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_userPost` (`idUser`),
  CONSTRAINT `fk_userPost` FOREIGN KEY (`idUser`) REFERENCES `user` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

# Affichage de la table user
# ------------------------------------------------------------

DROP TABLE IF EXISTS `user`;

CREATE TABLE `user` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `prenom` varchar(256) DEFAULT NULL,
  `nom` varchar(256) DEFAULT NULL,
  `photo` varchar(256) DEFAULT 'http://res.cloudinary.com/hnbbqlgyo/image/upload/v1527791733/default.jpg',
  `email` varchar(256) DEFAULT NULL,
  `mdp` varchar(256) DEFAULT NULL,
  `date_inscription` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `admin` int(11) DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;



# Affichage de la table usertokens
# ------------------------------------------------------------

DROP TABLE IF EXISTS `usertokens`;

CREATE TABLE `usertokens` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `idUser` int(11) unsigned NOT NULL,
  `token` varchar(64) NOT NULL DEFAULT '',
  PRIMARY KEY (`id`),
  UNIQUE KEY `token` (`token`),
  KEY `fk_id_user` (`idUser`),
  CONSTRAINT `fk_id_user` FOREIGN KEY (`idUser`) REFERENCES `user` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;




/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

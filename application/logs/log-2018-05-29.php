<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

ERROR - 2018-05-29 13:01:49 --> Severity: Notice --> Undefined variable: postid /Applications/MAMP/htdocs/App/application/views/users/profile.php 13
ERROR - 2018-05-29 13:01:49 --> Severity: Notice --> Undefined variable: type /Applications/MAMP/htdocs/App/application/views/users/profile.php 13
ERROR - 2018-05-29 13:01:49 --> Severity: Notice --> Undefined variable: postid /Applications/MAMP/htdocs/App/application/views/users/profile.php 13
ERROR - 2018-05-29 13:01:49 --> Severity: Notice --> Undefined variable: total_likes /Applications/MAMP/htdocs/App/application/views/users/profile.php 13
ERROR - 2018-05-29 13:08:31 --> Query error: Cannot add or update a child row: a foreign key constraint fails (`mant`.`follow`, CONSTRAINT `fk_user_id` FOREIGN KEY (`idUser`) REFERENCES `user` (`id`)) - Invalid query: INSERT INTO `follow` (`idUser`, `idFollower`) VALUES ('8', '18')
ERROR - 2018-05-29 13:53:33 --> Query error: Table 'mant.followers' doesn't exist - Invalid query: SELECT state FROM followers WHERE '18' = '18'
ERROR - 2018-05-29 13:53:53 --> Severity: Notice --> Undefined index: followers /Applications/MAMP/htdocs/App/application/views/users/profile.php 18
ERROR - 2018-05-29 13:55:02 --> Severity: Notice --> Undefined index: followers /Applications/MAMP/htdocs/App/application/views/users/profile.php 18
ERROR - 2018-05-29 13:55:09 --> Severity: Notice --> Undefined index: followers /Applications/MAMP/htdocs/App/application/views/users/profile.php 18
ERROR - 2018-05-29 13:55:42 --> Severity: Notice --> Undefined index: followers /Applications/MAMP/htdocs/App/application/views/users/profile.php 20
ERROR - 2018-05-29 13:57:47 --> Severity: Notice --> Undefined index: state /Applications/MAMP/htdocs/App/application/views/users/profile.php 11
ERROR - 2018-05-29 14:51:21 --> 404 Page Not Found: Users/unfollow
ERROR - 2018-05-29 14:55:29 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'FROM follow WHERE idUser = '1' AND idFollower = '18'' at line 1 - Invalid query: UPDATE follow SET state = 0 FROM follow WHERE idUser = '1' AND idFollower = '18'
ERROR - 2018-05-29 15:25:31 --> Severity: error --> Exception: Call to undefined function base_url() /Applications/MAMP/htdocs/App/application/config/config.php 404
ERROR - 2018-05-29 15:53:01 --> Severity: Notice --> Array to string conversion /Applications/MAMP/htdocs/App/system/database/DB_driver.php 1029
ERROR - 2018-05-29 15:53:01 --> Query error: Unknown column 'Array' in 'where clause' - Invalid query: SELECT state FROM follow WHERE idUser = (Array) AND idFollower = '18'
ERROR - 2018-05-29 15:54:02 --> Severity: Notice --> Undefined variable: iterate /Applications/MAMP/htdocs/App/application/views/posts/view.php 10
ERROR - 2018-05-29 15:54:25 --> Severity: Notice --> Undefined variable: iterate /Applications/MAMP/htdocs/App/application/views/posts/view.php 15
ERROR - 2018-05-29 15:54:25 --> Severity: Notice --> Undefined index:  /Applications/MAMP/htdocs/App/application/views/posts/view.php 15
ERROR - 2018-05-29 16:13:24 --> Severity: Notice --> Undefined variable: followed /Applications/MAMP/htdocs/App/application/views/users/profile.php 35
ERROR - 2018-05-29 16:13:42 --> Severity: Notice --> Undefined index: amount /Applications/MAMP/htdocs/App/application/views/users/profile.php 35
ERROR - 2018-05-29 16:14:20 --> Severity: Notice --> Undefined index: amount /Applications/MAMP/htdocs/App/application/views/users/profile.php 35
ERROR - 2018-05-29 16:21:12 --> Severity: error --> Exception: syntax error, unexpected ')', expecting ';' /Applications/MAMP/htdocs/App/application/views/users/profile.php 36
ERROR - 2018-05-29 16:21:20 --> Severity: error --> Exception: syntax error, unexpected ')', expecting ';' /Applications/MAMP/htdocs/App/application/views/users/profile.php 36
ERROR - 2018-05-29 16:22:19 --> Severity: Warning --> Use of undefined constant i - assumed 'i' (this will throw an Error in a future version of PHP) /Applications/MAMP/htdocs/App/application/views/users/profile.php 37
ERROR - 2018-05-29 16:22:19 --> Severity: Notice --> Undefined index: i /Applications/MAMP/htdocs/App/application/views/users/profile.php 37
ERROR - 2018-05-29 16:22:19 --> Severity: Warning --> Use of undefined constant i - assumed 'i' (this will throw an Error in a future version of PHP) /Applications/MAMP/htdocs/App/application/views/users/profile.php 37
ERROR - 2018-05-29 16:22:19 --> Severity: Notice --> Undefined index: i /Applications/MAMP/htdocs/App/application/views/users/profile.php 37
ERROR - 2018-05-29 16:22:19 --> Severity: Warning --> Use of undefined constant i - assumed 'i' (this will throw an Error in a future version of PHP) /Applications/MAMP/htdocs/App/application/views/users/profile.php 37
ERROR - 2018-05-29 16:22:19 --> Severity: Notice --> Undefined index: i /Applications/MAMP/htdocs/App/application/views/users/profile.php 37
ERROR - 2018-05-29 16:22:19 --> Severity: Warning --> Use of undefined constant i - assumed 'i' (this will throw an Error in a future version of PHP) /Applications/MAMP/htdocs/App/application/views/users/profile.php 37
ERROR - 2018-05-29 16:22:19 --> Severity: Notice --> Undefined index: i /Applications/MAMP/htdocs/App/application/views/users/profile.php 37
ERROR - 2018-05-29 16:22:19 --> Severity: Warning --> Use of undefined constant i - assumed 'i' (this will throw an Error in a future version of PHP) /Applications/MAMP/htdocs/App/application/views/users/profile.php 37
ERROR - 2018-05-29 16:22:19 --> Severity: Notice --> Undefined index: i /Applications/MAMP/htdocs/App/application/views/users/profile.php 37
ERROR - 2018-05-29 16:22:19 --> Severity: Warning --> Use of undefined constant i - assumed 'i' (this will throw an Error in a future version of PHP) /Applications/MAMP/htdocs/App/application/views/users/profile.php 37
ERROR - 2018-05-29 16:22:19 --> Severity: Notice --> Undefined index: i /Applications/MAMP/htdocs/App/application/views/users/profile.php 37
ERROR - 2018-05-29 16:22:30 --> Severity: Notice --> Undefined offset: 1 /Applications/MAMP/htdocs/App/application/views/users/profile.php 37
ERROR - 2018-05-29 16:22:30 --> Severity: Notice --> Undefined offset: 2 /Applications/MAMP/htdocs/App/application/views/users/profile.php 37
ERROR - 2018-05-29 16:22:30 --> Severity: Notice --> Undefined offset: 3 /Applications/MAMP/htdocs/App/application/views/users/profile.php 37
ERROR - 2018-05-29 16:22:30 --> Severity: Notice --> Undefined offset: 4 /Applications/MAMP/htdocs/App/application/views/users/profile.php 37
ERROR - 2018-05-29 16:22:30 --> Severity: Notice --> Undefined offset: 5 /Applications/MAMP/htdocs/App/application/views/users/profile.php 37
ERROR - 2018-05-29 16:27:06 --> Severity: Notice --> Undefined offset: 1 /Applications/MAMP/htdocs/App/application/views/users/profile.php 37
ERROR - 2018-05-29 16:27:06 --> Severity: Warning --> Invalid argument supplied for foreach() /Applications/MAMP/htdocs/App/application/views/users/profile.php 37
ERROR - 2018-05-29 18:32:58 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'like WHERE idPost = '11' AND idLiker = '18'' at line 1 - Invalid query: SELECT state FROM like WHERE idPost = '11' AND idLiker = '18'
ERROR - 2018-05-29 18:42:41 --> Severity: error --> Exception: Call to undefined method UserModel::likes() /Applications/MAMP/htdocs/App/application/controllers/Posts.php 79
ERROR - 2018-05-29 18:43:33 --> Severity: Notice --> Array to string conversion /Applications/MAMP/htdocs/App/application/views/posts/view.php 42
ERROR - 2018-05-29 18:44:21 --> Severity: Notice --> Array to string conversion /Applications/MAMP/htdocs/App/application/views/posts/view.php 44
ERROR - 2018-05-29 18:45:47 --> Severity: Notice --> Array to string conversion /Applications/MAMP/htdocs/App/application/views/posts/view.php 44
ERROR - 2018-05-29 18:46:12 --> Severity: error --> Exception: syntax error, unexpected '$data' (T_VARIABLE) /Applications/MAMP/htdocs/App/application/controllers/Posts.php 81
ERROR - 2018-05-29 18:46:22 --> Severity: Notice --> Undefined offset: 0 /Applications/MAMP/htdocs/App/application/controllers/Posts.php 80
ERROR - 2018-05-29 18:46:47 --> Severity: Notice --> Undefined offset: 0 /Applications/MAMP/htdocs/App/application/controllers/Posts.php 80
ERROR - 2018-05-29 18:46:57 --> Severity: Notice --> Array to string conversion /Applications/MAMP/htdocs/App/application/views/posts/view.php 44
ERROR - 2018-05-29 18:47:18 --> Severity: Notice --> Array to string conversion /Applications/MAMP/htdocs/App/application/views/posts/view.php 44
ERROR - 2018-05-29 18:47:57 --> Severity: Notice --> Array to string conversion /Applications/MAMP/htdocs/App/application/views/posts/view.php 44
ERROR - 2018-05-29 18:48:05 --> Severity: Notice --> Array to string conversion /Applications/MAMP/htdocs/App/application/views/posts/view.php 44
ERROR - 2018-05-29 18:48:13 --> Severity: Notice --> Array to string conversion /Applications/MAMP/htdocs/App/application/views/posts/view.php 44
ERROR - 2018-05-29 18:49:55 --> 404 Page Not Found: Posts/like
ERROR - 2018-05-29 18:51:47 --> Query error: Table 'mant.like' doesn't exist - Invalid query: INSERT INTO `like` (`idPost`, `idLiker`, `state`) VALUES ('17', '18', 1)
ERROR - 2018-05-29 18:52:39 --> 404 Page Not Found: Posts/unlike
ERROR - 2018-05-29 18:53:13 --> 404 Page Not Found: Posts/unlike
ERROR - 2018-05-29 19:00:56 --> Severity: Notice --> Undefined index: likes /Applications/MAMP/htdocs/App/application/views/users/profile.php 88
ERROR - 2018-05-29 19:02:30 --> Severity: Notice --> Undefined index: iterate /Applications/MAMP/htdocs/App/application/views/users/profile.php 89
ERROR - 2018-05-29 19:02:59 --> Severity: Notice --> Undefined index: likes /Applications/MAMP/htdocs/App/application/views/users/profile.php 89
ERROR - 2018-05-29 19:03:31 --> Severity: Notice --> Undefined index: likes /Applications/MAMP/htdocs/App/application/views/users/profile.php 90
ERROR - 2018-05-29 19:04:19 --> Severity: Notice --> Undefined index: likes /Applications/MAMP/htdocs/App/application/views/users/profile.php 90
ERROR - 2018-05-29 19:05:04 --> Severity: Notice --> Undefined index: likes /Applications/MAMP/htdocs/App/application/views/users/profile.php 90
ERROR - 2018-05-29 19:05:04 --> Severity: Notice --> Undefined index: likes /Applications/MAMP/htdocs/App/application/views/users/profile.php 90
ERROR - 2018-05-29 19:06:05 --> Severity: Notice --> Undefined index: likes /Applications/MAMP/htdocs/App/application/views/users/profile.php 90
ERROR - 2018-05-29 19:06:05 --> Severity: Notice --> Undefined index: likes /Applications/MAMP/htdocs/App/application/views/users/profile.php 90
ERROR - 2018-05-29 19:06:14 --> Severity: Notice --> Undefined index: likes /Applications/MAMP/htdocs/App/application/views/users/profile.php 90
ERROR - 2018-05-29 19:06:14 --> Severity: Notice --> Undefined index: likes /Applications/MAMP/htdocs/App/application/views/users/profile.php 90
ERROR - 2018-05-29 19:06:36 --> Severity: Notice --> Undefined index: likes /Applications/MAMP/htdocs/App/application/views/users/profile.php 89
ERROR - 2018-05-29 19:06:36 --> Severity: Notice --> Undefined index: likes /Applications/MAMP/htdocs/App/application/views/users/profile.php 89
ERROR - 2018-05-29 19:06:55 --> Severity: Notice --> Undefined index: likes /Applications/MAMP/htdocs/App/application/views/users/profile.php 89
ERROR - 2018-05-29 19:06:55 --> Severity: Notice --> Undefined index: likes /Applications/MAMP/htdocs/App/application/views/users/profile.php 89
ERROR - 2018-05-29 19:07:58 --> Severity: Notice --> Undefined index: likes /Applications/MAMP/htdocs/App/application/views/users/profile.php 89
ERROR - 2018-05-29 19:07:58 --> Severity: Notice --> Undefined index: likes /Applications/MAMP/htdocs/App/application/views/users/profile.php 89
ERROR - 2018-05-29 19:08:28 --> Severity: Notice --> Undefined index: iterate /Applications/MAMP/htdocs/App/application/views/users/profile.php 75
ERROR - 2018-05-29 19:08:28 --> Severity: Notice --> Undefined index: likes /Applications/MAMP/htdocs/App/application/views/users/profile.php 89
ERROR - 2018-05-29 19:08:28 --> Severity: Notice --> Undefined index: iterate /Applications/MAMP/htdocs/App/application/views/users/profile.php 75
ERROR - 2018-05-29 19:08:28 --> Severity: Notice --> Undefined index: likes /Applications/MAMP/htdocs/App/application/views/users/profile.php 89
ERROR - 2018-05-29 19:08:45 --> Severity: Notice --> Undefined index: likes /Applications/MAMP/htdocs/App/application/views/users/profile.php 89
ERROR - 2018-05-29 19:08:45 --> Severity: Notice --> Undefined index: likes /Applications/MAMP/htdocs/App/application/views/users/profile.php 89
ERROR - 2018-05-29 19:09:24 --> Severity: Notice --> Undefined index: iterate /Applications/MAMP/htdocs/App/application/views/users/profile.php 75
ERROR - 2018-05-29 19:09:24 --> Severity: Notice --> Undefined index: likes /Applications/MAMP/htdocs/App/application/views/users/profile.php 89
ERROR - 2018-05-29 19:09:24 --> Severity: Notice --> Undefined index: iterate /Applications/MAMP/htdocs/App/application/views/users/profile.php 75
ERROR - 2018-05-29 19:09:24 --> Severity: Notice --> Undefined index: likes /Applications/MAMP/htdocs/App/application/views/users/profile.php 89
ERROR - 2018-05-29 19:09:42 --> Severity: Notice --> Undefined index: likes /Applications/MAMP/htdocs/App/application/views/users/profile.php 89
ERROR - 2018-05-29 19:09:42 --> Severity: Notice --> Undefined index: likes /Applications/MAMP/htdocs/App/application/views/users/profile.php 89
ERROR - 2018-05-29 19:20:48 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '?' at line 1 - Invalid query: select user.id, user.prenom, user.nom, user.photo, user.date_inscription from user where user.id = ?
ERROR - 2018-05-29 19:21:31 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '?' at line 1 - Invalid query: select user.id, user.prenom, user.nom, user.photo, user.date_inscription from user where user.id = ?
ERROR - 2018-05-29 19:21:33 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '?' at line 1 - Invalid query: select user.id, user.prenom, user.nom, user.photo, user.date_inscription from user where user.id = ?
ERROR - 2018-05-29 19:21:38 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '?' at line 1 - Invalid query: select user.id, user.prenom, user.nom, user.photo, user.date_inscription from user where user.id = ?
ERROR - 2018-05-29 19:21:55 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '?' at line 1 - Invalid query: select user.id, user.prenom, user.nom, user.photo, user.date_inscription from user where user.id = ?
ERROR - 2018-05-29 19:22:03 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '?' at line 1 - Invalid query: select user.id, user.prenom, user.nom, user.photo, user.date_inscription from user where user.id = ?
ERROR - 2018-05-29 19:22:27 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '?' at line 1 - Invalid query: select user.id, user.prenom, user.nom, user.photo, user.date_inscription from user where user.id = ?
ERROR - 2018-05-29 19:23:17 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '?' at line 1 - Invalid query: select user.id, user.prenom, user.nom, user.photo, user.date_inscription from user where user.id = ?
ERROR - 2018-05-29 19:24:19 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '?' at line 1 - Invalid query: select user.id, user.prenom, user.nom, user.photo, user.date_inscription from user where user.id = ?
ERROR - 2018-05-29 19:24:21 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '?' at line 1 - Invalid query: select user.id, user.prenom, user.nom, user.photo, user.date_inscription from user where user.id = ?
ERROR - 2018-05-29 19:59:44 --> Severity: Notice --> Undefined variable: likes /Applications/MAMP/htdocs/App/application/views/posts/index.php 81
ERROR - 2018-05-29 19:59:44 --> Severity: Notice --> Undefined variable: likes /Applications/MAMP/htdocs/App/application/views/posts/index.php 81
ERROR - 2018-05-29 19:59:44 --> Severity: Notice --> Undefined variable: likes /Applications/MAMP/htdocs/App/application/views/posts/index.php 81
ERROR - 2018-05-29 19:59:44 --> Severity: Notice --> Undefined variable: likes /Applications/MAMP/htdocs/App/application/views/posts/index.php 81
ERROR - 2018-05-29 19:59:44 --> Severity: Notice --> Undefined variable: likes /Applications/MAMP/htdocs/App/application/views/posts/index.php 81
ERROR - 2018-05-29 19:59:44 --> Severity: Notice --> Undefined variable: likes /Applications/MAMP/htdocs/App/application/views/posts/index.php 81
ERROR - 2018-05-29 19:59:44 --> Severity: Notice --> Undefined variable: likes /Applications/MAMP/htdocs/App/application/views/posts/index.php 81
ERROR - 2018-05-29 19:59:44 --> Severity: Notice --> Undefined variable: likes /Applications/MAMP/htdocs/App/application/views/posts/index.php 81
ERROR - 2018-05-29 19:59:44 --> Severity: Notice --> Undefined variable: likes /Applications/MAMP/htdocs/App/application/views/posts/index.php 81
ERROR - 2018-05-29 19:59:44 --> Severity: Notice --> Undefined variable: likes /Applications/MAMP/htdocs/App/application/views/posts/index.php 81
ERROR - 2018-05-29 20:00:32 --> Severity: Notice --> Undefined offset: 0 /Applications/MAMP/htdocs/App/application/controllers/Posts.php 63
ERROR - 2018-05-29 20:00:32 --> 404 Page Not Found: 
ERROR - 2018-05-29 20:01:48 --> Severity: Notice --> Undefined variable: likes /Applications/MAMP/htdocs/App/application/views/posts/index.php 81
ERROR - 2018-05-29 20:01:48 --> Severity: Notice --> Undefined variable: likes /Applications/MAMP/htdocs/App/application/views/posts/index.php 81
ERROR - 2018-05-29 20:01:48 --> Severity: Notice --> Undefined variable: likes /Applications/MAMP/htdocs/App/application/views/posts/index.php 81
ERROR - 2018-05-29 20:01:48 --> Severity: Notice --> Undefined variable: likes /Applications/MAMP/htdocs/App/application/views/posts/index.php 81
ERROR - 2018-05-29 20:01:48 --> Severity: Notice --> Undefined variable: likes /Applications/MAMP/htdocs/App/application/views/posts/index.php 81
ERROR - 2018-05-29 20:01:48 --> Severity: Notice --> Undefined variable: likes /Applications/MAMP/htdocs/App/application/views/posts/index.php 81
ERROR - 2018-05-29 20:01:48 --> Severity: Notice --> Undefined variable: likes /Applications/MAMP/htdocs/App/application/views/posts/index.php 81
ERROR - 2018-05-29 20:01:48 --> Severity: Notice --> Undefined variable: likes /Applications/MAMP/htdocs/App/application/views/posts/index.php 81
ERROR - 2018-05-29 20:01:48 --> Severity: Notice --> Undefined variable: likes /Applications/MAMP/htdocs/App/application/views/posts/index.php 81
ERROR - 2018-05-29 20:01:48 --> Severity: Notice --> Undefined variable: likes /Applications/MAMP/htdocs/App/application/views/posts/index.php 81
ERROR - 2018-05-29 20:02:00 --> Severity: Notice --> Undefined variable: likes /Applications/MAMP/htdocs/App/application/views/posts/index.php 81
ERROR - 2018-05-29 20:02:00 --> Severity: Notice --> Undefined variable: likes /Applications/MAMP/htdocs/App/application/views/posts/index.php 81
ERROR - 2018-05-29 20:02:00 --> Severity: Notice --> Undefined variable: likes /Applications/MAMP/htdocs/App/application/views/posts/index.php 81
ERROR - 2018-05-29 20:02:00 --> Severity: Notice --> Undefined variable: likes /Applications/MAMP/htdocs/App/application/views/posts/index.php 81
ERROR - 2018-05-29 20:02:00 --> Severity: Notice --> Undefined variable: likes /Applications/MAMP/htdocs/App/application/views/posts/index.php 81
ERROR - 2018-05-29 20:02:00 --> Severity: Notice --> Undefined variable: likes /Applications/MAMP/htdocs/App/application/views/posts/index.php 81
ERROR - 2018-05-29 20:02:00 --> Severity: Notice --> Undefined variable: likes /Applications/MAMP/htdocs/App/application/views/posts/index.php 81
ERROR - 2018-05-29 20:02:00 --> Severity: Notice --> Undefined variable: likes /Applications/MAMP/htdocs/App/application/views/posts/index.php 81
ERROR - 2018-05-29 20:02:00 --> Severity: Notice --> Undefined variable: likes /Applications/MAMP/htdocs/App/application/views/posts/index.php 81
ERROR - 2018-05-29 20:02:00 --> Severity: Notice --> Undefined variable: likes /Applications/MAMP/htdocs/App/application/views/posts/index.php 81
ERROR - 2018-05-29 20:02:03 --> Severity: Notice --> Undefined variable: likes /Applications/MAMP/htdocs/App/application/views/posts/index.php 81
ERROR - 2018-05-29 20:02:03 --> Severity: Notice --> Undefined variable: likes /Applications/MAMP/htdocs/App/application/views/posts/index.php 81
ERROR - 2018-05-29 20:02:03 --> Severity: Notice --> Undefined variable: likes /Applications/MAMP/htdocs/App/application/views/posts/index.php 81
ERROR - 2018-05-29 20:02:03 --> Severity: Notice --> Undefined variable: likes /Applications/MAMP/htdocs/App/application/views/posts/index.php 81
ERROR - 2018-05-29 20:02:03 --> Severity: Notice --> Undefined variable: likes /Applications/MAMP/htdocs/App/application/views/posts/index.php 81
ERROR - 2018-05-29 20:02:03 --> Severity: Notice --> Undefined variable: likes /Applications/MAMP/htdocs/App/application/views/posts/index.php 81
ERROR - 2018-05-29 20:02:03 --> Severity: Notice --> Undefined variable: likes /Applications/MAMP/htdocs/App/application/views/posts/index.php 81
ERROR - 2018-05-29 20:02:03 --> Severity: Notice --> Undefined variable: likes /Applications/MAMP/htdocs/App/application/views/posts/index.php 81
ERROR - 2018-05-29 20:02:03 --> Severity: Notice --> Undefined variable: likes /Applications/MAMP/htdocs/App/application/views/posts/index.php 81
ERROR - 2018-05-29 20:02:03 --> Severity: Notice --> Undefined variable: likes /Applications/MAMP/htdocs/App/application/views/posts/index.php 81
ERROR - 2018-05-29 20:02:59 --> Severity: Notice --> Undefined variable: likes /Applications/MAMP/htdocs/App/application/views/posts/index.php 81
ERROR - 2018-05-29 20:02:59 --> Severity: Notice --> Undefined variable: likes /Applications/MAMP/htdocs/App/application/views/posts/index.php 81
ERROR - 2018-05-29 20:02:59 --> Severity: Notice --> Undefined variable: likes /Applications/MAMP/htdocs/App/application/views/posts/index.php 81
ERROR - 2018-05-29 20:02:59 --> Severity: Notice --> Undefined variable: likes /Applications/MAMP/htdocs/App/application/views/posts/index.php 81
ERROR - 2018-05-29 20:02:59 --> Severity: Notice --> Undefined variable: likes /Applications/MAMP/htdocs/App/application/views/posts/index.php 81
ERROR - 2018-05-29 20:02:59 --> Severity: Notice --> Undefined variable: likes /Applications/MAMP/htdocs/App/application/views/posts/index.php 81
ERROR - 2018-05-29 20:02:59 --> Severity: Notice --> Undefined variable: likes /Applications/MAMP/htdocs/App/application/views/posts/index.php 81
ERROR - 2018-05-29 20:02:59 --> Severity: Notice --> Undefined variable: likes /Applications/MAMP/htdocs/App/application/views/posts/index.php 81
ERROR - 2018-05-29 20:02:59 --> Severity: Notice --> Undefined variable: likes /Applications/MAMP/htdocs/App/application/views/posts/index.php 81
ERROR - 2018-05-29 20:02:59 --> Severity: Notice --> Undefined variable: likes /Applications/MAMP/htdocs/App/application/views/posts/index.php 81
ERROR - 2018-05-29 22:40:24 --> Severity: Warning --> Use of undefined constant cpt - assumed 'cpt' (this will throw an Error in a future version of PHP) /Applications/MAMP/htdocs/App/application/views/users/profile.php 39
ERROR - 2018-05-29 22:40:24 --> Severity: Warning --> Use of undefined constant cpt - assumed 'cpt' (this will throw an Error in a future version of PHP) /Applications/MAMP/htdocs/App/application/views/users/profile.php 39
ERROR - 2018-05-29 22:40:24 --> Severity: Warning --> Use of undefined constant cpt - assumed 'cpt' (this will throw an Error in a future version of PHP) /Applications/MAMP/htdocs/App/application/views/users/profile.php 39
ERROR - 2018-05-29 22:40:24 --> Severity: Warning --> Use of undefined constant cpt - assumed 'cpt' (this will throw an Error in a future version of PHP) /Applications/MAMP/htdocs/App/application/views/users/profile.php 39
ERROR - 2018-05-29 22:40:56 --> Severity: Notice --> Undefined variable: state_tmp /Applications/MAMP/htdocs/App/application/controllers/Users.php 117
ERROR - 2018-05-29 22:40:56 --> Severity: Notice --> Undefined variable: likes_tmp /Applications/MAMP/htdocs/App/application/controllers/Users.php 118
ERROR - 2018-05-29 22:41:12 --> Severity: Notice --> Undefined variable: state_tmp /Applications/MAMP/htdocs/App/application/controllers/Users.php 117
ERROR - 2018-05-29 22:41:12 --> Severity: Notice --> Undefined variable: likes_tmp /Applications/MAMP/htdocs/App/application/controllers/Users.php 118
ERROR - 2018-05-29 22:42:32 --> Severity: Notice --> Undefined variable: state_tmp /Applications/MAMP/htdocs/App/application/controllers/Users.php 118
ERROR - 2018-05-29 22:42:32 --> Severity: Notice --> Undefined variable: likes_tmp /Applications/MAMP/htdocs/App/application/controllers/Users.php 119
ERROR - 2018-05-29 22:43:13 --> Severity: Notice --> Undefined variable: state_tmp /Applications/MAMP/htdocs/App/application/controllers/Users.php 118
ERROR - 2018-05-29 22:43:13 --> Severity: Notice --> Undefined variable: likes_tmp /Applications/MAMP/htdocs/App/application/controllers/Users.php 119
ERROR - 2018-05-29 22:44:35 --> Severity: Notice --> Undefined variable: state_tmp /Applications/MAMP/htdocs/App/application/controllers/Users.php 118
ERROR - 2018-05-29 22:44:35 --> Severity: Notice --> Undefined variable: likes_tmp /Applications/MAMP/htdocs/App/application/controllers/Users.php 119
ERROR - 2018-05-29 22:45:10 --> Severity: Notice --> Undefined variable: state_tmp /Applications/MAMP/htdocs/App/application/controllers/Users.php 123
ERROR - 2018-05-29 22:45:10 --> Severity: Notice --> Undefined variable: likes_tmp /Applications/MAMP/htdocs/App/application/controllers/Users.php 124
ERROR - 2018-05-29 22:48:20 --> Severity: Notice --> Undefined variable: state_tmp /Applications/MAMP/htdocs/App/application/controllers/Users.php 118
ERROR - 2018-05-29 22:48:20 --> Severity: Notice --> Undefined variable: likes_tmp /Applications/MAMP/htdocs/App/application/controllers/Users.php 119
ERROR - 2018-05-29 22:48:29 --> Severity: Notice --> Undefined variable: state_tmp /Applications/MAMP/htdocs/App/application/controllers/Users.php 118
ERROR - 2018-05-29 22:48:29 --> Severity: Notice --> Undefined variable: likes_tmp /Applications/MAMP/htdocs/App/application/controllers/Users.php 119
ERROR - 2018-05-29 22:49:18 --> Severity: Notice --> Undefined variable: state_tmp /Applications/MAMP/htdocs/App/application/controllers/Users.php 118
ERROR - 2018-05-29 22:49:18 --> Severity: Notice --> Undefined variable: likes_tmp /Applications/MAMP/htdocs/App/application/controllers/Users.php 119
ERROR - 2018-05-29 22:49:22 --> Severity: Notice --> Undefined variable: state_tmp /Applications/MAMP/htdocs/App/application/controllers/Users.php 118
ERROR - 2018-05-29 22:49:22 --> Severity: Notice --> Undefined variable: likes_tmp /Applications/MAMP/htdocs/App/application/controllers/Users.php 119
ERROR - 2018-05-29 22:49:30 --> Severity: Notice --> Undefined variable: state_tmp /Applications/MAMP/htdocs/App/application/controllers/Users.php 118
ERROR - 2018-05-29 22:49:30 --> Severity: Notice --> Undefined variable: likes_tmp /Applications/MAMP/htdocs/App/application/controllers/Users.php 119
ERROR - 2018-05-29 22:49:38 --> Severity: Notice --> Undefined variable: state_tmp /Applications/MAMP/htdocs/App/application/controllers/Users.php 118
ERROR - 2018-05-29 22:49:38 --> Severity: Notice --> Undefined variable: likes_tmp /Applications/MAMP/htdocs/App/application/controllers/Users.php 119
ERROR - 2018-05-29 22:49:42 --> Severity: Notice --> Undefined variable: state_tmp /Applications/MAMP/htdocs/App/application/controllers/Users.php 118
ERROR - 2018-05-29 22:49:42 --> Severity: Notice --> Undefined variable: likes_tmp /Applications/MAMP/htdocs/App/application/controllers/Users.php 119
ERROR - 2018-05-29 22:59:09 --> Severity: Notice --> Undefined variable: state_tmp /Applications/MAMP/htdocs/App/application/controllers/Users.php 118
ERROR - 2018-05-29 22:59:09 --> Severity: Notice --> Undefined variable: likes_tmp /Applications/MAMP/htdocs/App/application/controllers/Users.php 119
ERROR - 2018-05-29 23:05:24 --> Severity: Notice --> Undefined offset: 0 /Applications/MAMP/htdocs/App/application/views/users/profile.php 100
ERROR - 2018-05-29 23:05:24 --> Severity: Notice --> Undefined offset: 1 /Applications/MAMP/htdocs/App/application/views/users/profile.php 100
ERROR - 2018-05-29 23:05:24 --> Severity: Notice --> Undefined offset: 2 /Applications/MAMP/htdocs/App/application/views/users/profile.php 100
ERROR - 2018-05-29 23:05:32 --> Severity: Notice --> Undefined offset: 0 /Applications/MAMP/htdocs/App/application/views/users/profile.php 100
ERROR - 2018-05-29 23:05:32 --> Severity: Notice --> Undefined offset: 1 /Applications/MAMP/htdocs/App/application/views/users/profile.php 100
ERROR - 2018-05-29 23:05:32 --> Severity: Notice --> Undefined offset: 2 /Applications/MAMP/htdocs/App/application/views/users/profile.php 100
ERROR - 2018-05-29 23:19:41 --> Severity: Notice --> Undefined variable: cpt /Applications/MAMP/htdocs/App/application/views/users/following.php 16

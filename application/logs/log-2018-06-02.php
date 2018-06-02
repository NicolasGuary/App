<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

ERROR - 2018-06-02 20:14:18 --> Query error: No database selected - Invalid query: SELECT token FROM userTokens WHERE idUser = '19'
ERROR - 2018-06-02 20:14:21 --> Query error: No database selected - Invalid query: SELECT token FROM userTokens WHERE idUser = '19'
ERROR - 2018-06-02 20:14:41 --> Query error: No database selected - Invalid query: SELECT token FROM userTokens WHERE idUser = '19'
ERROR - 2018-06-02 20:16:47 --> Query error: No database selected - Invalid query: SELECT token FROM userTokens WHERE idUser = '19'
ERROR - 2018-06-02 20:16:49 --> Query error: No database selected - Invalid query: SELECT token FROM userTokens WHERE idUser = '19'
ERROR - 2018-06-02 20:19:02 --> Query error: No database selected - Invalid query: SELECT token FROM userTokens WHERE idUser = '19'
ERROR - 2018-06-02 20:19:13 --> Query error: No database selected - Invalid query: SELECT token FROM userTokens WHERE idUser = '19'
ERROR - 2018-06-02 20:26:02 --> Query error: No database selected - Invalid query: SELECT token FROM userTokens WHERE idUser = '19'
ERROR - 2018-06-02 20:26:44 --> Query error: No database selected - Invalid query: SELECT token FROM userTokens WHERE idUser = '19'
ERROR - 2018-06-02 20:26:48 --> Query error: No database selected - Invalid query: SELECT token FROM userTokens WHERE idUser = '19'
ERROR - 2018-06-02 20:26:54 --> Query error: No database selected - Invalid query: SELECT token FROM userTokens WHERE idUser = '19'
ERROR - 2018-06-02 22:33:25 --> Severity: error --> Exception: syntax error, unexpected end of file /Applications/MAMP/htdocs/App/application/views/users/profile.php 228
ERROR - 2018-06-02 22:34:12 --> Severity: error --> Exception: syntax error, unexpected end of file /Applications/MAMP/htdocs/App/application/views/users/profile.php 229
ERROR - 2018-06-02 22:34:20 --> Severity: error --> Exception: syntax error, unexpected end of file /Applications/MAMP/htdocs/App/application/views/users/profile.php 228
ERROR - 2018-06-02 22:34:32 --> Severity: error --> Exception: syntax error, unexpected end of file /Applications/MAMP/htdocs/App/application/views/users/profile.php 225
ERROR - 2018-06-02 22:35:23 --> Severity: error --> Exception: syntax error, unexpected end of file /Applications/MAMP/htdocs/App/application/views/users/profile.php 225
ERROR - 2018-06-02 22:49:44 --> Severity: error --> Exception: Call to undefined method CommentModel::getRecentLiked() /Applications/MAMP/htdocs/App/application/controllers/Users.php 146
ERROR - 2018-06-02 22:49:58 --> Severity: error --> Exception: Call to undefined method PostModel::getRecentLiked() /Applications/MAMP/htdocs/App/application/controllers/Users.php 146
ERROR - 2018-06-02 23:01:01 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'ORDER BY comment.id DESC' at line 5 - Invalid query: SELECT comment.idUser, comment.body, comment.idPost, comment.idUser, comment.commented_at, user.id, user.nom, user.prenom, post.id, post.titre
                FROM comment, user, post 
                WHERE comment.idPost = post.id and comment.idUser = user.id and comment.idUser = '19'
                LIMIT 5
                ORDER BY comment.id DESC
ERROR - 2018-06-02 23:01:39 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'ORDER BY comid DESC' at line 5 - Invalid query: SELECT comment.id as comid, comment.idUser, comment.body, comment.idPost, comment.idUser, comment.commented_at, user.id, user.nom, user.prenom, post.id, post.titre
                FROM comment, user, post 
                WHERE comment.idPost = post.id and comment.idUser = user.id and comment.idUser = '19'
                LIMIT 5
                ORDER BY comid DESC
ERROR - 2018-06-02 23:01:50 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'ORDER BY comment.id DESC' at line 5 - Invalid query: SELECT comment.id as comid, comment.idUser, comment.body, comment.idPost, comment.idUser, comment.commented_at, user.id, user.nom, user.prenom, post.id, post.titre
                FROM comment, user, post 
                WHERE comment.idPost = post.id and comment.idUser = user.id and comment.idUser = '19'
                LIMIT 5
                ORDER BY comment.id DESC
ERROR - 2018-06-02 23:02:09 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'ORDER BY likers.id DESC' at line 5 - Invalid query: SELECT likers.idLiker, user.nom, user.prenom, post.id, post.titre
                FROM likers, user, post 
                WHERE likers.idPost = post.id and likers.idLiker = user.id and likers.idLiker = '19'
                LIMIT 5
                ORDER BY likers.id DESC
ERROR - 2018-06-02 23:02:16 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'ORDER BY likers.id DESC' at line 5 - Invalid query: SELECT likers.idLiker, user.nom, user.prenom, post.id, post.titre
                FROM likers, user, post 
                WHERE likers.idPost = post.id and likers.idLiker = user.id and likers.idLiker = '19'
                LIMIT 5
                ORDER BY likers.id DESC

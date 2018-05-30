<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

ERROR - 2018-05-30 09:52:35 --> Query error: Unknown column 'timeline' in 'where clause' - Invalid query: SELECT post.id, post.contenu, post.link,post.idUser,post.date,post.titre, post.idUser, user.prenom,user.nom, user.photo FROM post,user WHERE post.idUser = user.id and timeline=post.id
ERROR - 2018-05-30 09:54:15 --> Query error: Unknown column 'timeline' in 'where clause' - Invalid query: SELECT post.id, post.contenu, post.link,post.idUser,post.date,post.titre, post.idUser, user.prenom,user.nom, user.photo FROM post,user WHERE post.idUser = user.id and timeline=post.id
ERROR - 2018-05-30 09:54:19 --> Query error: Unknown column 'timeline' in 'where clause' - Invalid query: SELECT post.id, post.contenu, post.link,post.idUser,post.date,post.titre, post.idUser, user.prenom,user.nom, user.photo FROM post,user WHERE post.idUser = user.id and timeline=post.id
ERROR - 2018-05-30 09:54:56 --> Query error: Unknown column 'timeline' in 'where clause' - Invalid query: SELECT post.id, post.contenu, post.link,post.idUser,post.date,post.titre, post.idUser, user.prenom,user.nom, user.photo FROM post,user WHERE post.idUser = user.id and timeline=post.id
ERROR - 2018-05-30 09:55:51 --> 404 Page Not Found: Users/timeline
ERROR - 2018-05-30 09:56:44 --> 404 Page Not Found: Users/timeline
ERROR - 2018-05-30 09:56:46 --> 404 Page Not Found: Users/timeline
ERROR - 2018-05-30 09:56:58 --> Query error: Unknown column 'follow.idFollow' in 'where clause' - Invalid query: SELECT comment.id, comment.body, comment.idPost, comment.idUser, comment.commented_at, user.id, user.nom, user.prenom, user.photo, post.id 
             FROM comment, user, post, follow 
             WHERE comment.idPost = post.id and comment.idUser = user.id and user.id = follow.idFollow
             AND idFollow = '18'
             ORDER BY comment.id DESC
ERROR - 2018-05-30 09:57:30 --> Query error: Unknown column 'idFollow' in 'where clause' - Invalid query: SELECT comment.id, comment.body, comment.idPost, comment.idUser, comment.commented_at, user.id, user.nom, user.prenom, user.photo, post.id 
             FROM comment, user, post, follow 
             WHERE comment.idPost = post.id and comment.idUser = user.id and user.id = follow.idFollower
             AND idFollow = '18'
             ORDER BY comment.id DESC
ERROR - 2018-05-30 09:57:34 --> Query error: Unknown column 'idFollow' in 'where clause' - Invalid query: SELECT comment.id, comment.body, comment.idPost, comment.idUser, comment.commented_at, user.id, user.nom, user.prenom, user.photo, post.id 
             FROM comment, user, post, follow 
             WHERE comment.idPost = post.id and comment.idUser = user.id and user.id = follow.idFollower
             AND idFollow = '18'
             ORDER BY comment.id DESC
ERROR - 2018-05-30 09:57:45 --> Severity: error --> Exception: Unsupported operand types /Applications/MAMP/htdocs/App/system/libraries/Pagination.php 412
ERROR - 2018-05-30 09:57:57 --> Severity: error --> Exception: Unsupported operand types /Applications/MAMP/htdocs/App/system/libraries/Pagination.php 412
ERROR - 2018-05-30 09:59:35 --> Query error: Column 'idUser' in where clause is ambiguous - Invalid query: SELECT count(*)
             FROM post,user, follow 
             WHERE post.idUser = user.id
             AND user.id = follow.idFollower
             AND idUser = '18'
             ORDER BY post.id DESC;
ERROR - 2018-05-30 10:07:08 --> Severity: Notice --> Undefined offset: 0 /Applications/MAMP/htdocs/App/application/controllers/Posts.php 72
ERROR - 2018-05-30 10:07:36 --> Severity: Notice --> Undefined offset: 0 /Applications/MAMP/htdocs/App/application/controllers/Posts.php 72
ERROR - 2018-05-30 10:40:35 --> Severity: Notice --> Undefined variable: loggedUser /Applications/MAMP/htdocs/App/application/views/templates/header.php 25
ERROR - 2018-05-30 10:40:35 --> Severity: Notice --> Undefined variable: loggedUser /Applications/MAMP/htdocs/App/application/views/templates/header.php 26
ERROR - 2018-05-30 10:40:35 --> Severity: Notice --> Undefined variable: followers /Applications/MAMP/htdocs/App/application/views/posts/view.php 16
ERROR - 2018-05-30 10:40:35 --> Severity: Notice --> Undefined variable: likes /Applications/MAMP/htdocs/App/application/views/posts/view.php 45
ERROR - 2018-05-30 10:41:52 --> Severity: Notice --> Undefined variable: loggedUser /Applications/MAMP/htdocs/App/application/views/templates/header.php 25
ERROR - 2018-05-30 10:41:52 --> Severity: Notice --> Undefined variable: loggedUser /Applications/MAMP/htdocs/App/application/views/templates/header.php 26
ERROR - 2018-05-30 10:41:52 --> Severity: Notice --> Undefined variable: followers /Applications/MAMP/htdocs/App/application/views/posts/view.php 16
ERROR - 2018-05-30 10:41:52 --> Severity: Notice --> Undefined variable: likes /Applications/MAMP/htdocs/App/application/views/posts/view.php 45
ERROR - 2018-05-30 10:44:31 --> Severity: Notice --> Undefined variable: loggedUser /Applications/MAMP/htdocs/App/application/views/templates/header.php 25
ERROR - 2018-05-30 10:44:31 --> Severity: Notice --> Undefined variable: loggedUser /Applications/MAMP/htdocs/App/application/views/templates/header.php 26
ERROR - 2018-05-30 10:45:01 --> Severity: Notice --> Undefined variable: loggedUser /Applications/MAMP/htdocs/App/application/views/templates/header.php 25
ERROR - 2018-05-30 10:45:01 --> Severity: Notice --> Undefined variable: loggedUser /Applications/MAMP/htdocs/App/application/views/templates/header.php 26
ERROR - 2018-05-30 10:49:48 --> 404 Page Not Found: Posts/delete
ERROR - 2018-05-30 10:53:31 --> Query error: Cannot delete or update a parent row: a foreign key constraint fails (`mant`.`likers`, CONSTRAINT `fk_liked_post` FOREIGN KEY (`idPost`) REFERENCES `post` (`id`)) - Invalid query: DELETE FROM `post`
WHERE `id` = '18'
ERROR - 2018-05-30 10:55:42 --> Query error: Cannot delete or update a parent row: a foreign key constraint fails (`mant`.`comment`, CONSTRAINT `fk_post_id` FOREIGN KEY (`idPost`) REFERENCES `post` (`id`)) - Invalid query: DELETE FROM `post`
WHERE `id` = '18'
ERROR - 2018-05-30 10:57:19 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'WHERE idPost = '18'' at line 1 - Invalid query: DELETE FROM likers, post WHERE idPost = '18'
ERROR - 2018-05-30 10:58:07 --> Query error: Table 'mant.posts' doesn't exist - Invalid query: DELETE FROM posts WHERE idPost = '18'
ERROR - 2018-05-30 10:58:18 --> Query error: Unknown column 'idPost' in 'where clause' - Invalid query: DELETE FROM post WHERE idPost = '18'
ERROR - 2018-05-30 10:58:34 --> Query error: Cannot delete or update a parent row: a foreign key constraint fails (`mant`.`comment`, CONSTRAINT `fk_post_id` FOREIGN KEY (`idPost`) REFERENCES `post` (`id`)) - Invalid query: DELETE FROM post WHERE id = '18'
ERROR - 2018-05-30 11:06:06 --> Severity: error --> Exception: syntax error, unexpected end of file, expecting elseif (T_ELSEIF) or else (T_ELSE) or endif (T_ENDIF) /Applications/MAMP/htdocs/App/application/views/posts/view.php 104
ERROR - 2018-05-30 11:06:21 --> Severity: Notice --> Undefined index: id /Applications/MAMP/htdocs/App/application/views/posts/view.php 8
ERROR - 2018-05-30 11:25:04 --> Severity: Notice --> Undefined index: id /Applications/MAMP/htdocs/App/application/controllers/Posts.php 184
ERROR - 2018-05-30 11:25:39 --> Severity: Notice --> Undefined index: idUser /Applications/MAMP/htdocs/App/application/controllers/Posts.php 184
ERROR - 2018-05-30 11:25:58 --> Severity: Notice --> Undefined index: idUser /Applications/MAMP/htdocs/App/application/controllers/Posts.php 184
ERROR - 2018-05-30 11:27:23 --> Severity: Notice --> Undefined index: idUser /Applications/MAMP/htdocs/App/application/controllers/Posts.php 184
ERROR - 2018-05-30 11:29:25 --> Severity: Notice --> Undefined index: idUser /Applications/MAMP/htdocs/App/application/controllers/Posts.php 184
ERROR - 2018-05-30 11:29:26 --> Severity: Notice --> Undefined variable: idAuthor /Applications/MAMP/htdocs/App/application/views/posts/index.php 1
ERROR - 2018-05-30 11:30:06 --> Severity: Notice --> Undefined variable: idAuthor /Applications/MAMP/htdocs/App/application/views/posts/index.php 1
ERROR - 2018-05-30 11:30:15 --> Severity: Notice --> Undefined variable: idAuthor /Applications/MAMP/htdocs/App/application/views/posts/index.php 1
ERROR - 2018-05-30 11:32:22 --> Severity: Notice --> Undefined offset: 0 /Applications/MAMP/htdocs/App/application/controllers/Posts.php 44
ERROR - 2018-05-30 11:32:22 --> Severity: Notice --> Undefined offset: 0 /Applications/MAMP/htdocs/App/application/controllers/Posts.php 44
ERROR - 2018-05-30 11:32:22 --> Severity: Notice --> Undefined offset: 0 /Applications/MAMP/htdocs/App/application/controllers/Posts.php 44
ERROR - 2018-05-30 11:32:22 --> Severity: Notice --> Undefined offset: 0 /Applications/MAMP/htdocs/App/application/controllers/Posts.php 44
ERROR - 2018-05-30 11:32:22 --> Severity: Notice --> Undefined offset: 0 /Applications/MAMP/htdocs/App/application/controllers/Posts.php 44
ERROR - 2018-05-30 11:32:22 --> Severity: Notice --> Undefined offset: 0 /Applications/MAMP/htdocs/App/application/controllers/Posts.php 44
ERROR - 2018-05-30 11:32:22 --> Severity: Notice --> Undefined offset: 0 /Applications/MAMP/htdocs/App/application/controllers/Posts.php 44
ERROR - 2018-05-30 11:32:22 --> Severity: Notice --> Undefined offset: 0 /Applications/MAMP/htdocs/App/application/controllers/Posts.php 44
ERROR - 2018-05-30 11:32:22 --> Severity: Notice --> Undefined offset: 0 /Applications/MAMP/htdocs/App/application/controllers/Posts.php 44
ERROR - 2018-05-30 11:32:22 --> Severity: Notice --> Undefined offset: 0 /Applications/MAMP/htdocs/App/application/controllers/Posts.php 44
ERROR - 2018-05-30 11:32:50 --> Severity: Notice --> Undefined offset: 0 /Applications/MAMP/htdocs/App/application/controllers/Posts.php 44
ERROR - 2018-05-30 11:32:50 --> Severity: Notice --> Undefined offset: 0 /Applications/MAMP/htdocs/App/application/controllers/Posts.php 44
ERROR - 2018-05-30 11:32:50 --> Severity: Notice --> Undefined offset: 0 /Applications/MAMP/htdocs/App/application/controllers/Posts.php 44
ERROR - 2018-05-30 11:32:50 --> Severity: Notice --> Undefined offset: 0 /Applications/MAMP/htdocs/App/application/controllers/Posts.php 44
ERROR - 2018-05-30 11:32:50 --> Severity: Notice --> Undefined offset: 0 /Applications/MAMP/htdocs/App/application/controllers/Posts.php 44
ERROR - 2018-05-30 11:32:50 --> Severity: Notice --> Undefined offset: 0 /Applications/MAMP/htdocs/App/application/controllers/Posts.php 44
ERROR - 2018-05-30 11:32:50 --> Severity: Notice --> Undefined offset: 0 /Applications/MAMP/htdocs/App/application/controllers/Posts.php 44
ERROR - 2018-05-30 11:32:50 --> Severity: Notice --> Undefined offset: 0 /Applications/MAMP/htdocs/App/application/controllers/Posts.php 44
ERROR - 2018-05-30 11:32:50 --> Severity: Notice --> Undefined offset: 0 /Applications/MAMP/htdocs/App/application/controllers/Posts.php 44
ERROR - 2018-05-30 11:32:50 --> Severity: Notice --> Undefined offset: 0 /Applications/MAMP/htdocs/App/application/controllers/Posts.php 44
ERROR - 2018-05-30 11:32:53 --> Severity: Notice --> Undefined offset: 0 /Applications/MAMP/htdocs/App/application/controllers/Posts.php 105
ERROR - 2018-05-30 11:32:53 --> Severity: Notice --> Undefined offset: 0 /Applications/MAMP/htdocs/App/application/controllers/Posts.php 105
ERROR - 2018-05-30 11:32:53 --> Severity: Notice --> Undefined offset: 0 /Applications/MAMP/htdocs/App/application/controllers/Posts.php 105
ERROR - 2018-05-30 11:32:53 --> Severity: Notice --> Undefined offset: 0 /Applications/MAMP/htdocs/App/application/controllers/Posts.php 105
ERROR - 2018-05-30 11:32:53 --> Severity: Notice --> Undefined offset: 0 /Applications/MAMP/htdocs/App/application/controllers/Posts.php 105
ERROR - 2018-05-30 11:32:53 --> Severity: Notice --> Undefined offset: 0 /Applications/MAMP/htdocs/App/application/controllers/Posts.php 105
ERROR - 2018-05-30 11:32:53 --> Severity: Notice --> Undefined offset: 0 /Applications/MAMP/htdocs/App/application/controllers/Posts.php 105
ERROR - 2018-05-30 11:32:53 --> Severity: Notice --> Undefined offset: 0 /Applications/MAMP/htdocs/App/application/controllers/Posts.php 105
ERROR - 2018-05-30 11:32:53 --> Severity: Notice --> Undefined offset: 0 /Applications/MAMP/htdocs/App/application/controllers/Posts.php 105
ERROR - 2018-05-30 11:33:56 --> Severity: Notice --> Undefined offset: 0 /Applications/MAMP/htdocs/App/application/controllers/Posts.php 144
ERROR - 2018-05-30 11:34:24 --> Severity: Notice --> Undefined offset: 0 /Applications/MAMP/htdocs/App/application/controllers/Posts.php 144
ERROR - 2018-05-30 11:35:17 --> Query error: Unknown column 'idPost' in 'where clause' - Invalid query: DELETE FROM `post`
WHERE `idPost` = '17'
ERROR - 2018-05-30 12:10:00 --> Severity: Notice --> Undefined offset: 0 /Applications/MAMP/htdocs/App/application/controllers/Comments.php 43
ERROR - 2018-05-30 12:13:18 --> Severity: Notice --> Undefined property: Comments::$Comment /Applications/MAMP/htdocs/App/application/controllers/Comments.php 45
ERROR - 2018-05-30 12:13:18 --> Severity: error --> Exception: Call to a member function deleteComment() on null /Applications/MAMP/htdocs/App/application/controllers/Comments.php 45
ERROR - 2018-05-30 12:16:09 --> Severity: Notice --> Undefined index: idComment /Applications/MAMP/htdocs/App/application/views/posts/index.php 142
ERROR - 2018-05-30 14:36:56 --> Severity: Notice --> Undefined variable: followers /Applications/MAMP/htdocs/App/application/views/posts/view.php 20
ERROR - 2018-05-30 14:36:56 --> Severity: Notice --> Undefined variable: likes /Applications/MAMP/htdocs/App/application/views/posts/view.php 49
ERROR - 2018-05-30 14:37:40 --> Severity: Notice --> Undefined variable: followers /Applications/MAMP/htdocs/App/application/views/posts/view.php 20
ERROR - 2018-05-30 14:37:40 --> Severity: Notice --> Undefined variable: likes /Applications/MAMP/htdocs/App/application/views/posts/view.php 49
ERROR - 2018-05-30 14:38:27 --> Severity: Notice --> Undefined index: body /Applications/MAMP/htdocs/App/application/views/posts/edit.php 16
ERROR - 2018-05-30 14:40:58 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'update=post.id' at line 1 - Invalid query: SELECT post.id, post.contenu, post.link,post.idUser,post.date,post.titre, post.idUser, user.prenom,user.nom, user.photo FROM post,user WHERE post.idUser = user.id and update=post.id
ERROR - 2018-05-30 14:50:34 --> Query error: Unknown column 'update20' in 'where clause' - Invalid query: SELECT post.id, post.contenu, post.link,post.idUser,post.date,post.titre, post.idUser, user.prenom,user.nom, user.photo FROM post,user WHERE post.idUser = user.id and update20=post.id
ERROR - 2018-05-30 14:58:23 --> Severity: Notice --> Undefined index: title /Applications/MAMP/htdocs/App/application/models/PostModel.php 85
ERROR - 2018-05-30 16:24:09 --> Severity: Notice --> Undefined offset: 0 /Applications/MAMP/htdocs/App/application/controllers/Comments.php 56

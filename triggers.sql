-- Trigger 1: Mise à jour automatique de la date 

DROP TRIGGER IF EXISTS date_post_auto;
DELIMITER $$
CREATE TRIGGER date_post_auto BEFORE INSERT ON post FOR EACH ROW SET  NEW.date=SYSDATE()
$$
DELIMITER ;
/

DROP TRIGGER IF EXISTS date_comment_auto;
DELIMITER $$
CREATE TRIGGER date_comment_auto BEFORE INSERT ON comment FOR EACH ROW SET  NEW.commented_at=SYSDATE()
$$
DELIMITER ;
/

--Triger 2: Empêcher la suppression d'un admin.
DROP TRIGGER IF EXISTS User_Admin_Security;
DELIMITER $$
CREATE TRIGGER User_Admin_Security
BEFORE DELETE ON user
FOR EACH ROW
BEGIN

  IF old.admin = 1 THEN
    SIGNAL SQLSTATE '45000' 
      SET MESSAGE_TEXT = 'Admins cannot be deleted. Please remove admin rights before deleting this user.';
  END IF;
END
$$
DELIMITER ;
/
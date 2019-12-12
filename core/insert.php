<?php
    include "C:\wamp64\www\webb5\db_connect.php";
    
    global $connect;
	
	if(isset($_POST["subject"])){
		$subject = (String) $_POST["subject"];
		$comment = (String) $_POST["comment"];
		$sql = "INSERT INTO notification(comment_subject, comment_text) VALUES (?, ?)";
        $query= $connect->query(array($subject, $comment));

        if($query === TRUE) {
            return true;
        } else {
            return false;
        }

        $connect->close();
	}
?>
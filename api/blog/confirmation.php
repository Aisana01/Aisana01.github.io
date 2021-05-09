<?php 
	include "../../config/config.php";
	include "../../config/db.php";

	if(isset($_GET["confID"])&&strlen($_GET["confID"]) > 0){
		
		$id = $_GET["confID"];		
		$db->query("UPDATE pocket_blog SET status_id = 2 WHERE id = $id");

		header("Location: $base_url/adminpg.php?st=1");

	}
?>
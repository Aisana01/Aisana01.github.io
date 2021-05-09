<?php 
	include "../../config/config.php";
	include "../../config/db.php";
	
	if(isset($_GET["id"])&&strlen($_GET["id"]) > 0){
		$id = $_GET["id"];
		$db->query("delete from stroy_categories where id = '$id'");

		header("Location: $base_url/adminpg.php");
	}

?>

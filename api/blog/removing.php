<?php 
	include "../../config/config.php";
	include "../../config/db.php";

	if (isset($_GET["remID"])&&strlen($_GET["remID"]) > 0) {
		$id = $_GET["remID"];
		$db->query("UPDATE pocket_blog SET status_id = 1 WHERE id = $id");

		header("Location: $base_url/adminpg.php?st=2");
	}

?>
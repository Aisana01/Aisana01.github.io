<?php 
	include "../../config/config.php";
	include "../../config/db.php";

	if(isset($_POST["title"]) && strlen($_POST["title"] ) > 0 && isset($_POST["description"]) && strlen($_POST["description"] )> 0) {
		$id = $_POST["id"];
		$title = $_POST["title"];
		$description = $_POST["description"];
		$image = $_POST["image"];

		$db->query("UPDATE  pocket_blog  SET title='$title', description='$description', img = '$image'  where id = '$id'");

		header("Location: $base_url");
	}
?>
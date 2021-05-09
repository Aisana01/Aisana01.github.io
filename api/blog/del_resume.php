<?php 
	include "../../config/config.php";
	include "../../config/db.php";

	$id = $_GET["id"];	
	$db->query("delete from resume where id = '$id'");
	header("Location: $base_url/workerIndex.php");

?>
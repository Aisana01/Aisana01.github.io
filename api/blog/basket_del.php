<?php 
	include "../../config/config.php";
	include "../../config/db.php";

	$db->query("DELETE * FROM basket");
	header("Location: $base_url/petshop.php");

?>
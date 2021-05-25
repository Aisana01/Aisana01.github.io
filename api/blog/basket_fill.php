<?php 
	include "../../config/config.php";
	include "../../config/db.php";

	if(isset($_GET["prodID"])&&strlen($_GET["prodID"]) > 0){
		$id = $_GET["prodID"];

		$db->query("INSERT INTO basket(product_id)VALUES($id)");

	header("Location: $base_url/petshop.php");

	}

?>
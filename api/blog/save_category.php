<?php
	include "../../config/config.php";
	include "../../config/db.php";
	session_start();

	if(isset($_POST["message"]) && strlen($_POST["message"] ) > 0 )
	{
		$message_text = $_POST["message"];
		$partner_email = $_GET["partner_email"];
		$owner_email = $_GET["owner_email"];

		$db->query("INSERT into stroy_categories (title) values ('$title')");

		header("Location: $base_url/adminpg.php");

	} else {

		header("Location: $base_url/profile.php?fill_error");

	}
?>
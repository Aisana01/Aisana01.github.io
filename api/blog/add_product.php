<?php

include "../../config/config.php";
$img_path = NULL;
session_start();
if(isset($_POST["title"]) && strlen($_POST["title"] ) > 0&& isset($_POST["description"]) && strlen($_POST["description"] )> 0&& isset($_POST["price"]) && strlen($_POST["price"] )> 0&& isset($_SESSION["user_id"]
))
{
	$title = $_POST["title"];
	$description = $_POST["description"];
		$categ_id = $_POST["categ_id"];
		$price = $_POST["price"];
	$user_id=$_SESSION["user_id"];

	include "../../config/db.php";
	if(isset($_FILES["image"])&& isset($_FILES["image"]["name"])){
		$temp = explode(".", $_FILES["image"]["name"]);

$file_name = time().".".end($temp);
move_uploaded_file($_FILES["image"]["tmp_name"], "../../images/blogs/$file_name");
$img_path = "images/blogs/$file_name";
	}



	$db->query("INSERT into shop (title, description,price,img,user_id,categ_id) values ('$title', '$description','$price','$img_path',$user_id,$categ_id)");

header("Location: $base_url/adminpg.php");

}
 ?>
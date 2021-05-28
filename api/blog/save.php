<?php

	include "../../config/config.php";
	include "../../config/db.php";

	$img_path = NULL;
	session_start();
	if(isset($_POST["title"]) && strlen($_POST["title"] ) > 0 && isset($_POST["description"]) && strlen($_POST["description"] )> 0 &&
	isset($_POST["type"]) && strlen($_POST["type"] ) > 0 && isset($_POST["age"]) && strlen($_POST["age"] ) > 0 &&
	isset($_POST["color"]) && strlen($_POST["color"] ) > 0 && isset($_POST["telnumber"]) && strlen($_POST["telnumber"] ) > 0 &&
	isset($_SESSION["user_id"]))
	{
		$title = $_POST["title"];
		$description = $_POST["description"];
		$type = $_POST["type"];
		$age = $_POST["age"];
		$color = $_POST["color"];
		$telnumber = $_POST["telnumber"];
		$categ_id = $_POST["categ_id"];
		$user_id=$_SESSION["user_id"];

		if(isset($_FILES["image"]) && isset($_FILES["image"]["name"])){
			$temp = explode(".", $_FILES["image"]["name"]);
			$file_name = time().".".end($temp);
			move_uploaded_file($_FILES["image"]["tmp_name"], "../../image/blogs/$file_name");
			$img_path = "image/blogs/$file_name";
		}else{
			$img_path = "image/No_image.png";
		}

		$db->query("INSERT into pocket_blog (title, description,type,age,color,telnumber,categ_id,img,user_id,status_id) values ('$title', '$description','$type',$age,'$color','$telnumber',$categ_id,'$img_path',$user_id, 1)");

		header("Location: $base_url/profile.php");

	}else{

		header("Location: $base_url/profile.php?fill_error");


	}
?>

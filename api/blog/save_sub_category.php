<?php

	include "../../config/config.php";
	include "../../config/db.php";
	$img_path = NULL;
	session_start();
	if(isset($_POST["title"]) && strlen($_POST["title"] ) > 0)
	{
		$title = $_POST["title"];
		$categ_id = $_POST["categ_id"];
		$categ_title = NULL;
		
		$query1 = $db->query("SELECT * FROM stroy_categories where id = $categ_id");
		if($query1->num_rows > 0){
			while ($row1 = $query1->fetch_object()){
				$categ_title = $row1->title;
			}
		}

		if(isset($_FILES["image"])&& isset($_FILES["image"]["name"])){
			$temp = explode(".", $_FILES["image"]["name"]);
			$file_name = time().".".end($temp);
			move_uploaded_file($_FILES["image"]["tmp_name"], "../../image/blogs/$file_name");
			$img_path = "image/blogs/$file_name";
		}

		$db->query("INSERT into stroy_sub_categories (categ_id,categ_title,title,img) values ($categ_id,'$categ_title','$title','$img_path')");

		header("Location: $base_url/shop.php");

	}
?>

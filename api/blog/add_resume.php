<?php

include "../../config/config.php";
include "../../config/db.php";
$img_path = NULL;
session_start();
if (
	isset($_POST["salary_begin"]) && strlen($_POST["salary_begin"]) > 0 &&
	isset($_POST["salary_end"]) && strlen($_POST["salary_end"]) > 0 &&
	isset($_POST["work_type"]) && strlen($_POST["work_type"]) > 0 &&
	isset($_POST["about_yourself"]) && strlen($_POST["about_yourself"]) > 0 &&
	isset($_FILES["image"]) && isset($_FILES["image"]["name"]) &&
	isset($_SESSION["user_id"])
) {
	$user_id = $_SESSION["user_id"];
	$salary_begin = $_POST["salary_begin"];
	$salary_end = $_POST["salary_end"];
	$work_type = $_POST["work_type"];
	$about_yourself = $_POST["about_yourself"];

	$temp = explode(".", $_FILES["image"]["name"]);
	$file_name = time() . "." . end($temp);
	move_uploaded_file($_FILES["image"]["tmp_name"], "../../image/blogs/$file_name");
	$img_path = "image/blogs/$file_name";


	$db->query("INSERT into resume (user_id,salary_begin,salary_end,work_type,about_yourself,img) values ($user_id,'$salary_begin','$salary_end','$work_type','$about_yourself','$img_path')");

	header("Location: $base_url/workerIndex.php");
} else {
	header("Location: $base_url/workerIndex.php?somethingIsNull");
}

?>
}
<?php

include "../../config/config.php";
include "../../config/db.php";
$img_path = NULL;
session_start();
if(isset($_POST["title_e"]) && strlen($_POST["title_e"] ) > 0&& isset($_POST["manufacturer"]) && strlen($_POST["manufacturer"] )> 0&& isset($_POST["vendor_code"]) && strlen($_POST["vendor_code"] )> 0&& isset($_POST["price_ibuild"]) && strlen($_POST["price_ibuild"] )> 0&& isset($_POST["price_retail"]) && strlen($_POST["price_retail"] )> 0&& isset($_POST["amount"]) && strlen($_POST["amount"] )> 0&& isset($_SESSION["user_id"]
))
{
	$key = $_GET["key"];
    $title = $_GET["title"];

	$sub_categ_id = $_GET["sub_id"];
	$title_e = $_POST["title_e"];
	$manufacturer = $_POST["manufacturer"];
	$vendor_code = $_POST["vendor_code"];
	$price_ibuild = $_POST["price_ibuild"];
	$price_retail = $_POST["price_retail"];
	$amount = $_POST["amount"];
	$user_id=$_SESSION["user_id"];

	
		if(isset($_FILES["image"])&& isset($_FILES["image"]["name"])){
		$temp = explode(".", $_FILES["image"]["name"]);

$file_name = time().".".end($temp);
move_uploaded_file($_FILES["image"]["tmp_name"], "../../image/blogs/$file_name");
$img_path = "image/blogs/$file_name";
	}



	$db->query("INSERT into shop_items (sub_categ_id,title,img,manufacturer,vendor_code,price_ibuild,price_retail,amount) values ('$sub_categ_id','$title_e','$img_path','$manufacturer',$vendor_code,$price_ibuild,$price_retail,$amount)");

header("Location: $base_url/shop_after.php?key=$key &title=$title &sub_id=$sub_categ_id");

} else {
	header("Location: $base_url/add_shop_item.php?fill_error");
}
 ?>
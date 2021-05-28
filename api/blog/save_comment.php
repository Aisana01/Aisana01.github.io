<?php 
		include "../../config/db.php";
		include "../../config/config.php";

		session_start();
		
		if (isset($_POST["comment"])&&strlen($_POST["comment"])>0 ){
			
			if(isset($_SESSION["user_id"]))	{
				
				$key = $_GET["key"];
				$sub_id = $_GET["sub_id"];

				$item_id=$_GET["item_id"];
                $comment= $_POST["comment"];
                $user_id=$_SESSION["user_id"];			

				$db->query("INSERT INTO item_comments (item_id,user_id,comment) VALUES ($item_id,$user_id,'$comment')");
				header("Location: $base_url/product_page.php?sub_id=$sub_id&key=$key&prod_id=$item_id");

			}
		}						
 ?>
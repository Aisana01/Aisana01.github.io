<?php
	include "../../config/config.php";
	include "../../config/db.php";
	session_start();

	if(isset($_POST["message"]) && strlen($_POST["message"] ) > 0 )
	{
		$partner_id = $_GET["partner_id"];
		$message_text = $_POST["message"];
		$partner_email = $_GET["partner_email"];
		$owner_email = $_GET["owner_email"];

		$needed_conversation = $db->query("SELECT * FROM conversation WHERE (first_user = '$partner_email' AND second_user = '$owner_email') OR (first_user = '$owner_email' AND second_user = '$partner_email') ");
		if($needed_conversation->num_rows > 0){
			while ($exact_conversation = $needed_conversation->fetch_object()){
				$conversation_id = $exact_conversation->id;
				$db->query("INSERT into messages (conversation_id,owner_email,partner_email,message_text) values ($conversation_id,'$owner_email','$partner_email','$message_text')");

				$db->query("UPDATE conversation SET last_message = '$message_text' WHERE id=$conversation_id");

				header("Location: $base_url/conversation_page.php?partner_id=$partner_id");
			}
		} else {
			$db->query("INSERT into conversation (first_user,second_user,last_message) values ('$owner_email','$partner_email','$message_text')");
			$needed_conversation2 = $db->query("SELECT * FROM conversation WHERE (first_user = '$partner_email' AND second_user = '$owner_email') OR (first_user = '$owner_email' AND second_user = '$partner_email') ");
			if($needed_conversation->num_rows > 0){
				while ($exact_conversation = $needed_conversation->fetch_object()){
					$conversation_id2 = $exact_conversation->id;
					$db->query("INSERT into messages (conversation_id,owner_email,partner_email,message_text) values ($conversation_id2,'$owner_email','$partner_email','$message_text')");

					header("Location: $base_url/conversation_page.php?partner_id=$partner_id");
				}
			}else{
				header("Location: $base_url/conversation_page.php?errooor=1");
			}
		}

	}else{

	header("Location: $base_url/profile.php?fill_error");

	}
?>


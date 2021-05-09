<?php 
include "../../config/db.php" ;
include "../../config/config.php" ;

if(isset($_POST["login"]) && strlen($_POST["login"] ) > 0&&
 isset($_POST["full_name"]) && strlen($_POST["full_name"] )> 0&&
  isset($_POST["password"]) && strlen($_POST["password"] )> 0&&
  isset($_POST["user_type"]) && strlen($_POST["user_type"] )> 0&&
   isset($_POST["password2"]) && strlen($_POST["password2"] )> 0)
{
	$login = $_POST["login"];
	$full_name = $_POST["full_name"];
	$user_type = $_POST["user_type"];
	$password = $_POST["password"];
	$password2 = $_POST["password2"];
$exist = $db->query("SELECT * FROM ibuild_users where login='$login");
if($exist->num_rows>0){
	header("Location: $base_url/Register.php?error=2");
}
elseif ($password!=$password2) {
	header("Location: $base_url/Register.php?error=3");
	
}
else{

	$password = sha1($password);

	$db-> query("INSERT INTO ibuild_users (login,full_name,user_type,password) VALUES ('$login','$full_name','$user_type','$password')");
	header("Location:$base_url/Log.php");
		
	}
}

else {
	header("Location:$base_url/Register.php?length_error");
}
 ?>
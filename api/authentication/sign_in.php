<?php 
include "../../config/db.php" ;
include "../../config/config.php" ;

if(isset($_POST["login"]) && strlen($_POST["login"] ) > 0&&
  isset($_POST["password"]) && strlen($_POST["password"] )> 0)
{
	$login = $_POST["login"];
	$password = $_POST["password"];

	$exist = $db->query("SELECT * FROM ibuild_users where login='$login'");

	$admin_nm = $db->query("SELECT login FROM ibuild_users where login='admin'");

	if($exist->num_rows==0){
		header("Location: $base_url/Log.php#registr?error=2");
	}
	/*proverit parol*/
	else {
		$row = $exist->fetch_object();
		if($row->password!=sha1($password))
		{
			header("Location:$base_url/Log.php#registr?error=3");
		}
		elseif ($row->login == 'admin') {
			session_start();
			$_SESSION["user_id"] = $row->id;
			header("Location:$base_url/AboutUs.php#registr");
		}
		else{
			session_start();
			$_SESSION["user_id"] = $row->id;
			header("Location:$base_url/AboutUs.php#registr");
		}
	}
}
else {
	header("Location:$base_url/Log.php#registr?error=1");
}
 ?>
<?php  

	$db = new mysqli("localhost", "root" , "", "ibuild");
	if($db->connect_error){
		echo $db->connect_error;
	}

?>
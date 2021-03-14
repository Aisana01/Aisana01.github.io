<?php 


include "../../db.php";

$query = $db->query("Select *from pocket_blog order by date Desc ");
$result=array();
if($query->num_rows>0){
	while($row=$query->fetch_object()){
		$result[]=array("id"=>$row->id, "title"=>$row->title,"description"=>$row->description,"date"=>$row->date);



	}
}


echo json_encode($result);

 ?>
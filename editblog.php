<?php 

	if(isset($_GET["id"])&&strlen($_GET["id"]) > 0){

		include "config/db.php";
		$query = $db->query("select * from pocket_blog where id =".$_GET["id"]);

		if($query->num_rows > 0){
			$row = $query->fetch_object();

?>

<!DOCTYPE html>
<html>

<head>
    <title>edit</title>
</head>

<body>
    <h1>Edit blog</h1>
    <form action="api/blog/edit.php" method="POST">
        <input type="text" name="title" value="<?php echo $row->title; ?>">
        <input type="text" name="description" value="<?php echo $row->description; ?>">
        <p> Enter user img url</p>
        <input type="text" name="image" value="<?php echo $row->img; ?>">
        <input type="hidden" name="id" value="<?php echo $row->id; ?>">
        <button>save</button>

    </form>

</body>

</html>

<?php 

	}
}

 ?>
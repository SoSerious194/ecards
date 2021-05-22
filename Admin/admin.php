<?php
session_start();
?>
<form action="admin.php" method="post" enctype="multipart/form-data">
	<input type="submit" name="sbm" value="Add Card">
	<input type="hidden" name="id">
</form>

<?php
	if(isset($_POST['sbm'])){
		
		$user="root";
		$pass="";
		$database="ECards";
		$host="localhost";
		
		$con=mysqli_connect($host, $user, $pass, $database);
		$query="insert into Card(image) values ('')";
		
		if(mysqli_query($con, $query)){
			$id = mysqli_insert_id($con);
			$_SESSION['id'] = $id;
			header("location: card.php?id=$id");
		}
		else{
			echo "Try again!!";
		}
	}
?>
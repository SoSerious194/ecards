<?php
	
	$user="root";
	$pass="";
	$database="ecards";
	$host="localhost";
	
	$con=mysqli_connect($host, $user, $pass, $database);
	
	$query = "select card_image from all_orders";
	$res = mysqli_query($con, $query);

	if(mysqli_num_rows($res)>0) {
		
		while($row = mysqli_fetch_array($res)) {
			
			echo "<img src='../../UploadedImages/$row[card_image]'>";
			
		}
		
	}

?>
<?php 
	session_start();

	$id = $_SESSION['id'];

	$user="root";
	$pass="";
	$database="ECards";
	$host="localhost";
	
	$con=mysqli_connect($host, $user, $pass, $database);

	$query = "select * from card where id = '$id'";

	$sql=mysqli_query($con,$query);
	
	$total = 0;

	while($res=mysqli_fetch_array($sql)) { 
		
		if(isset($_POST['qnty']) && $_POST['qnty'] != "") {
			$total = $_POST['qnty']*$res['price'];
			$_SESSION['total']=$total;
			$_SESSION['qnty'] = $_POST['qnty'];
			echo " Total price is: ".$total;
		}

	}

?>
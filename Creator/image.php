<?php

	session_start();
	
	$img = $_REQUEST['img'];
	$img = str_replace('data:image/png;base64,', '', $img);
	$img = str_replace(' ', '+', $img);
	$fileData = base64_decode($img);

	$fname = $_REQUEST['fname'];
	$email = $_REQUEST['email'];
	$no = $_REQUEST['no'];
	$code = $_REQUEST['code'];
	$adr = $_REQUEST['adr'];

	$price = $_SESSION['total'];
	$quantity = $_SESSION['qnty'];
	
	$user="root";
	$pass="";
	$database="ECards";
	$host="localhost";

	$user_id = $_SESSION['user_id'];
	
	$con=mysqli_connect($host, $user, $pass, $database);

	$insertQuery = "insert into all_orders(id) values('$user_id')";
	mysqli_query($con, $insertQuery);
	
	$getOrderId = "select order_id from all_orders where id = $user_id";
	
	$orderRes = mysqli_query($con, $getOrderId);

	$order_id = 0;

	while($row = mysqli_fetch_array($orderRes)){

		$order_id = $row['order_id'];
		
	}

	$filename = $order_id.'.png';
	$card_id = $_SESSION['id'];

	$updateQuery = "update all_orders set card_image = '$filename', product_id = '$card_id', email = '$email', address = '$adr', pin_code = '$code', user_name = '$fname', contact = '$no', quantity = '$quantity', price='$price' where order_id = '$order_id'";
	
	if(mysqli_query($con, $updateQuery)){
		
		file_put_contents("F:/xampp/htdocs/Project/UploadedImages/$filename", $fileData);
	}

	$_SESSION['order_id'] = $order_id;

?>
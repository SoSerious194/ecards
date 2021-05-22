<?php 
	
	session_start();
	
	include("nav.php");
	
	include("../config/config.php");

	$uname = $_SESSION['uname'];
	
	if($uname == null ){
		header("location:index.php");
	}

	$userCount = "select * from user_login";
	$orderCount = "select * from all_orders";
	$messageCount = "select * from message";
	$feedbackCount = "select * from feedback";

	$userRes = mysqli_query($con, $userCount);
	$orderRes = mysqli_query($con, $orderCount);
	$messageRes = mysqli_query($con, $messageCount);
	$feedbackRes = mysqli_query($con, $feedbackCount);

	$userRow = mysqli_num_rows($userRes);
	$orderRow = mysqli_num_rows($orderRes);
	$messageRow = mysqli_num_rows($messageRes);
	$feedbackRow = mysqli_num_rows($feedbackRes);

?>

	<div class="row" style="margin-top:100px;">
		
		<center><span style="color:red; font-size: 3em">Welcome Admin!!</span></center>
		
		<hr>
		
		<div class="col-md-3" style="padding: 40px;">
		
			<div class='row'>

				<div class="w3-panel w3-white w3-card w3-display-container custom-style" style="text-align: center">

					<span>User Count: </span>
					<span style="color: red"><?php echo $userRow ?></span>
		
				</div>
	
			</div>
		
		</div>
		
		<div class="col-md-3" style="padding: 40px;">
		
			<div class='row'>

				<div class="w3-panel w3-white w3-card w3-display-container custom-style" style="text-align: center">

					<span>Order Count: </span>	
					<span style="color: red"><?php echo $orderRow ?></span>
		
				</div>
	
			</div>
		
		</div>
		
		<div class="col-md-3" style="padding: 40px">
		
			<div class='row'>

				<div class="w3-panel w3-white w3-card w3-display-container custom-style" style="text-align: center">

					<span>Message Count: </span>	
					<span style="color: red"><?php echo $messageRow ?></span>
		
				</div>
	
			</div>
		
		</div>
		
		<div class="col-md-3" style="padding: 40px;">
		
			<div class='row'>

				<div class="w3-panel w3-white w3-card w3-display-container custom-style" style="text-align: center">

					<span>Feedback Count: </span>	
					<span style="color: red"><?php echo $feedbackRow ?></span>
		
				</div>
	
			</div>
		
		</div>
		
	</div>

	<div class="row">
		
		<hr><center><h1 style="color: red;">Latest Orders Here..</h1></center>
		
	</div>

	<hr><br>

    <div class="accordion">
      
      <?php 
		
		$record = mysqli_query($con,"select order_id, a.id, card_image, u.name, quantity, price from all_orders as a, user_login as u where u.id=a.id order by order_id desc limit 3");
		
		while($row2 = mysqli_fetch_array($record)){
		  
		?>
       
        <div class="box" style="background-image: url('../../UploadedImages/<?php echo $row2['card_image']; ?>');">
			
            <div class="image_">
				
                <div class="text">
					
                    <h2 style="color:#000000"><?php echo $row2['name'] ?></h2>
					
                    <p style="color:#656565>">Quantity : <?php echo $row2['quantity'] ?></p>
					
                </div>
				
            </div>
			
        </div>
		
        <?php }  ?>
		
    </div>

   <br><hr>

<div class="container">
	
	<div class="col-md-7">
		
		<center><h1 style="color: red">FeedBack</h1></center><br>
		
			<?php
		
				$res = mysqli_query($con, "select u.name,u.id,review,feedback_id from user_login as u, feedback as f where u.id=user_id order by feedback_id desc limit 3");
				while($row = mysqli_fetch_array($res)){
			?>
		
			<div class="feedback">
				
				<p class="feedback-head"><b><?php echo $row['name']; ?></b></p>
				<p class="feedback-text"><?php echo $row['review']; ?></p>
				
			</div>
		
			<?php } ?>
		
		</div>
	
		<div class="col-md-5">
			
			<a href="feedback.php" style="margin-top:54%; margin-left:108px" class="btn btn-danger">View More FeedBack</a>
		
		</div>
</div>

<br><hr>



<?php 
	include("footer.php");
?>
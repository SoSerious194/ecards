<?php 

	session_start();

	include("nav.php");
	
	include("../config/config.php");

	$uname = $_SESSION['uname'];
	
	if($uname == null ){
		echo "<script>window.location = 'index.php'</script>";
	}

?>
<br><br><br><br>
		
		<div style="margin-top: 5%; background-color: rgb(236,236,236); class="gtco-container">
																							  
		<span style="position: absolute; margin-top: -64px; font-size: 28px; margin-left: 100px">Customer Feedbacks</span>
			
			<?php
																							   
				$res = mysqli_query($con, "select u.name,u.id,review,feedback_id from user_login as u, feedback as f where u.id=user_id order by feedback_id desc");
																							   
				if(mysqli_num_rows($res) > 0){
					
					while($row = mysqli_fetch_array($res)) {
				
						echo "
						<div class='row'>

							<div class='w3-panel w3-white w3-card w3-display-container custom-style'>

								<label style='margin-left:70px;'>$row[name]</label>
								<label style='margin-left:70px;'>$row[review]</label>
							
								<a href='feedback.php?id=$row[feedback_id]' class='btn btn-danger' style='float:right'>Delete Feedback</a>				
		
							</div>
						</div>";
				
					}
					
				} else {
					
					echo "

					<div class='row'>

						<div class='w3-panel w3-white w3-card w3-display-container custom-style'>

							<label style='color:red'> You have no orders currently! </label>

						</div>				

					</div>";
					
				}
																							   
			?>
										   
		</div>

<?php 
		
		if(isset($_REQUEST['id'])){
		 echo $deleteQuery = "delete from feedback where feedback_id='$_REQUEST[id]'";
			if(mysqli_query($con,$deleteQuery)){
				echo "<script>
				window.location='feedback.php';
				</script>";
			}
			else{
				echo "<script>alert('Try Again.');</script>";
			}
		}
		
	include("footer.php");
?>
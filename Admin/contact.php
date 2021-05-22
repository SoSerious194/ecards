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

					$showOrder = "Select * from all_orders";

					$query = "select * from message order by message_id desc";
																									
					$res = mysqli_query($con,$query);

					if(mysqli_num_rows($res) > 0){

						while($row = mysqli_fetch_array($res)) {

							echo "
							<div class='row'>

								<div class='w3-panel w3-white w3-card w3-display-container custom-style'>

									<label style='margin-left:50px; color:darkviolet'>$row[2]</label>
								
									<label style='margin-left:50px;color:red'>$row[3]</label>
									
									<a href='contact.php?id=$row[0]' style='float:right;' class='btn btn-danger'>Delete</a>
									
									<br><hr>			
									
									<label style='margin-left:50px; color:brown'>$row[4]</label><br>	
									
									<label style='margin-left:50px; color:grey'>$row[5]</label>							
										
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
			
			$deleteQuery = "delete from message where message_id = '$_REQUEST[id]'";
			
			if(mysqli_query($con,$deleteQuery)){
				
				echo "<script>
				window.location='contact.php';
				</script>";
				
			}
			
			else{
				
				echo "<script>alert('Please Try Again.');</script>";
				
			}
		}
																									
		include("footer.php");
																									
?>
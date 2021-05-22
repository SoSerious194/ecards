<?php include("nav.php");
	include("../config/config.php");
	if($uname == "" ){
		echo "<script>windwo.location='index.php'</script>";
	}
?>	
<br><br><br><br>
<div class="table-responsive" style="padding:2.5%;">
		<table class="table table-hover">
			<thead>
				<tr>
					<th style="text-align: center">Order Id
					<th style="text-align: center">Image
					<th style="text-align: center">Customer Name
					<th style="text-align: center">Address
					<th style="text-align: center">Quantity
					<th style="text-align: center">Total
				</tr>
			</thead>
				<?php
					$query = "select order_id,a.id,card_image,u.name,Address,quantity,price,status from all_orders as a,user_login as u where u.id=a.id order by order_id desc";
					$result = mysqli_query($con,$query);
					if(mysqli_num_rows($result) > 0){
						while($row=mysqli_fetch_array($result)){			
				?>
				<tbody>
					<tr>
						<td style="text-align: center"><?php echo $row[0]; ?>
						<td style="text-align: center; "><img src="../../UploadedImages/<?php echo $row[2]; ?>" height="200" width="350">
						<td style="text-align: center"><?php echo $row[3]; ?>
						<td style="text-align: center"><?php echo $row[4]; ?>
						<td style="text-align: center"><?php echo $row[5]; ?>
						<td style="text-align: center"><?php echo $row[6]; ?>
						<td style="text-align: center"><a class="btn btn-danger" href="vieworder.php?ImgName=<?php echo $row[2]; ?>">Download</a>
						<td style="text-align: center"><a class="btn btn-danger" href="vieworder.php?DeleteId=<?php echo $row[0]; ?>">Delete</a>
						<?php 
							if($row['status'] == ""){
								echo "
								<td style='text-align: center'><a class='btn btn-danger' href='vieworder.php?DelieverId=$row[0]'>Deliver</a>";
							} else {
								
								echo "<td style='text-align: center'><label style='color: green'>Delivery in progress</label></td>";
								
							}
						?>
					</tr>
				</tbody>		
				<?php
						}
					}
				?>
		</table>
</div>
<?php 

	if(isset($_REQUEST['DeleteId'])){
		
		$deleteQuery = "delete from all_orders where order_id = '$_REQUEST[DeleteId]'";
		
		if(mysqli_query($con,$deleteQuery)){
			
			echo "<script>
			window.location='vieworder.php';
			</script>";
			
		}
		else{
			
			echo "<script>alert('Try Again.');</script>";
			
		}
		
	}

	if(isset($_REQUEST['ImgName'])) {
		
		$ImgName = $_REQUEST['ImgName'];	
   		$ImgPath = "../../UploadedImages/".$ImgName;
		$target = "OrderImages/".$ImgName;
		
		if(copy($ImgPath, $target)) {
			
			echo "<script>alert('Image Dowloaded to $target')</script>";
			
		} else {
			
			echo "<script>alert('Image couldn't be dowloaded. Please try again..')</script>";
			
		}
		
	}

	if(isset($_REQUEST['DelieverId'])){
		
		$delieverQuery = "update all_orders set status = 'Delivered' where order_id = '$_REQUEST[DelieverId]'";
		
		if(mysqli_query($con, $delieverQuery)){
			
			echo "<script> window.location='vieworder.php' </script>";
			
		}
		
	}

include("footer.php");
?>

























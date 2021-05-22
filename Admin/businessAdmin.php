<?php 

	session_start();

	include("nav.php");

	include("../config/config.php");

	$uname = $_SESSION['uname'];

	if($uname == null ){
		echo "<script>window.location='index.php'</script>";
	}

?>
<body>
<br><br><br><hr>
	<center>
		<div>
			<form action="businessAdmin.php" method="post">
				<input type="submit" name="AddCard" class="btn btn-danger" value="Add New Card" style="float: right"/>
			</form>
		</div>
		<br><br>
		<div class="table-responsive">
		<form action="businessAdmin.php" method="post">
		<table style="margin-left: 20px">
			
			<tr>
				<th><center>Image Id</center></th>
				<th><center>Front Image</center></th>
				<th><center>Back Image</center></th>
				<th><center>Empty Image</center></th>
			</tr>
			
			<?php 
				
				$query="select * from card";
				$res=mysqli_query($con,$query);
				if(mysqli_num_rows($res)>0) {
					$i = 1;
					while($row=mysqli_fetch_array($res)){
						$imgId = $row['id'];
						$imgFront = $row['imgFront'];
						$imgBack = $row['imgBack'];
						$imgEmpty = $row['imgEmpty'];
						
			?>
			
			<tr>
				<td><center><?php echo $i; ?></center></td>
				<td><center><img src="../images/Front Images/<?php echo $imgFront; ?>" height="220" width="350" style="padding: 7%"></center></td>
				<td><center><img src="../images/Back Images/<?php echo $imgBack; ?>" height="220" width="350" style="padding: 7%"></center></td>
				<td><center><img src="../images/Empty Images/<?php echo $imgEmpty; ?>" height="220" width="350" style="padding: 7% "></center></td>
				<td style="padding-left: 1%;"><a class="btn btn-danger" href="edit_business_cards.php?EditId=<?php echo $imgId; ?>">Edit</a></td>
				<td><a class="btn btn-danger" href="businessAdmin.php?DeleteId=<?php echo $imgId; ?>">Delete</a></td>
			</tr>
			
			<?php 
						$i++;
					}
				}?>
			</table>
			</form>
			<?php

					
	if(isset($_POST['AddCard'])) {
		
		$Insertquery = "insert into card(price) values ('')";
		
		if(mysqli_query($con, $Insertquery)) {
			
			$id = mysqli_insert_id($con);
			$_SESSION['id'] = $id;
			echo "<script>window.location='add_business_cards.php?id=$id'</script>";
			
		} else {
			
			echo "<script>
			alert('please try again.')
			window.location='businessAdmin.php';
			</script>";
			
		}
		
	}
			
	

	if(isset($_REQUEST['DeleteId'])){
		
		$imgF = $_REQUEST['deleteIDF'];
		$imgB = $_REQUEST['deleteIDB'];
		$imgE = $_REQUEST['deleteIDE'];
		
		$Deletequery = "delete from card where id ='".$_REQUEST['DeleteId']."'";
		if(mysqli_query($con,$Deletequery)) {
			unlink("images/".$imgF);
			unlink("images/".$imgB);
			unlink("images/".$imgE);
			echo "<script>
			alert('Record Deleted.')
			window.location='businessAdmin.php';
			</script>";
		}else{
			echo "<script>
			alert('There was some error.')
			window.location='businessAdmin.php';
			</script>";
		}
		
	}
			?>	
		</div>
	</center>
</body>	
<?php include("footer.php")?>
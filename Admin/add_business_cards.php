
<?php  
	include("nav.php");
	session_start();
	$uname = $_SESSION['uname'];
	if($uname == null ){
		header("location:index.php");
	}
?>
<br>
<br>
<br>
<center>
	<br><br>
	<div id="content" class="col-md-8" name="divi" style="margin-left: 30%">
		
		<div class="tab-content-inner active col-md-8" data-content="signup" style="border: 2px solid #DC5E60; padding: 30px; border-radius: 10px;">
					
			<form method="post" enctype="multipart/form-data">
							
				<div class="row form-group">
					
					<div class="col-md-12">
						
						<label for="username">Upload Front Image</label>
						
						<input type="file" class="form-control" name="imgFront" />
						
					</div>
					
				</div>
							
				<div class="row form-group">
					
					<div class="col-md-12">
						
						<label for="username">Upload Back Image</label>
						
						<input type="file" class="form-control" name="imgBack" />
					
					</div>
							
				</div>
							
				<div class="row form-group">
							
					<div class="col-md-12">
						
						<label for="username">Upload Empty Image</label>
								
						<input type="file" class="form-control" name="imgEmpty" />
							
					</div>
							
				</div>
							
				<div class="row form-group">
								
					<div class="col-md-12" style="top: 10px;">
									
						<input type="submit" name="sbn" class="btn btn-primary" value="Upload">
									
						<input type="submit" name="cancel" class="btn btn-primary" value="Cancel">
									
						<input type="hidden" name="id" value="<?php echo $_REQUEST['id']; ?>">
								
					</div>
							
				</div>
	
						
			</form>
			  		
		</div>
			  
	</div>
	
</center>

<?php
	$id = $_REQUEST['id'];
	if(isset($_POST['sbn'])){
		
		$target1 = "../images/Front Images/".basename($_FILES['imgFront']['name']);
		$target2 = "../images/Back Images/".basename($_FILES['imgBack']['name']);
		$target3 = "../images/Empty Images/".basename($_FILES['imgEmpty']['name']);
		
		$user="root";
		$pass="";
		$database="ECards";
		$host="localhost";
		
		$con=mysqli_connect($host, $user, $pass, $database);
		
		 $imagef = $_FILES['imgFront']['name'];
		 $imageb = $_FILES['imgBack']['name'];
		 $imagee = $_FILES['imgEmpty']['name'];
		
		 $query = "update card set imgBack='$imageb', imgFront='$imagef', imgEmpty='$imagee' where id='$id' ";
		
		mysqli_query($con, $query);
		
		move_uploaded_file($_FILES['imgFront']['tmp_name'],$target1);
		move_uploaded_file($_FILES['imgBack']['tmp_name'],$target2);
		move_uploaded_file($_FILES['imgEmpty']['tmp_name'],$target3);
	}

?>

		<link rel="stylesheet"  href="../css/bootstrap.css">
		<link rel="stylesheet"  href="../css/style.css">
		<?php
	
		$user="root";
		$pass="";
		$database="ECards";
		$host="localhost";
		
		$con = mysqli_connect($host, $user, $pass, $database);

		$id = $_REQUEST['id'];
	
		$query = "select imgEmpty from card where id='".$id."' ";
	
		$result = mysqli_query($con, $query);
			
		while($row = mysqli_fetch_array($result)) {
			
			echo "<div class='col-md-6'>";
			
			echo "<br><br><br><br><br><br>";
				 
				echo "<img src='../images/Empty Images/".$row['imgEmpty']."' style='z-index:1; position: absolute; max-width: 435px; margin-left:-850px; border-style:groove; border-width:thick; border-color:grey'";
				
			echo "</div>";
			
		}
	
		echo "<div id='cname' style='position:absolute; z-index: 20; font-weight:bold'></div>";
		echo "<div id='name' style='position:absolute; z-index: 20'></div>";
		echo "<div id='adr1' style='position:absolute; z-index: 20'></div>";
		echo "<div id='adr2' style='position:absolute; z-index: 20'></div>";
		echo "<div id='contact' style='position:absolute; z-index: 20'></div>";
		echo "<div id='email' style='position:absolute; z-index: 20'></div>";
			
			if(isset($_POST['sbn'])){
				
				echo "<div id='content' class='col-md-6' style='margin-left:500px;'>";
					
				$sql_card=mysqli_query($con,"select * from card where id = '".$_SESSION['id']."'");
				$rowc=mysqli_fetch_array($sql_card);
				echo "
				
				<form action='add_business_cards.php' method='post'>
					<table>
					
					<tr>
						<th style='min-width:145px;'>Text Fields 
						<th style='min-width:145px;'>Margin Left 
						<th style='min-width:145px;'>Margin Top 
						<th style='min-width:145px;'>Font Size
						<th style='min-width:145px;'>Font Color
					</tr>
				
						<tr>
							<td>Company Name:
							<td><input type='range' id='cml' oninput='cnameFunc(this.id)' min='0' max='440' style='margin-left:10px;' value='5'>
							<td><input type='range' id='cmt' oninput='cnameFunc(this.id)' min='0' max='300' style='margin-left:10px;' value='5'>
							<td><input type='range' id='cfs' oninput='cnameFunc(this.id)' min='1' max='100' style='margin-left:10px;' value='5'>
							<td><input type='color' id='cfc' oninput='cnameFunc(this.id)' style='margin-left:10px;'>
						</tr>
						
						<tr>
							<td>Name:
							<td><input type='range' id='nml' oninput='nameFunc(this.id)' min='0' max='440' style='margin-left:10px;' value='5'>
							<td><input type='range' id='nmt' oninput='nameFunc(this.id)' min='0' max='300' style='margin-left:10px;' value='5'>
							<td><input type='range' id='nfs' oninput='nameFunc(this.id)' min='1' max='100' style='margin-left:10px;' value='5'>
							<td><input type='color' id='nfc' oninput='nameFunc(this.id)' style='margin-left:10px;'>
						</tr>
						
						<tr>
							<td>Address Line 1:
							<td><input type='range' id='a1ml' oninput='adr1Func(this.id)' min='0' max='440' style='margin-left:10px;' value='5'>
							<td><input type='range' id='a1mt' oninput='adr1Func(this.id)' min='0' max='300' style='margin-left:10px;' value='5'>
							<td><input type='range' id='a1fs' oninput='adr1Func(this.id)' min='1' max='100' style='margin-left:10px;' value='5'>
							<td><input type='color' id='a1fc' oninput='adr1Func(this.id)' style='margin-left:10px;'>
						</tr>
						
						<tr>
							<td>Address Line 2:
							<td><input type='range' id='a2ml' oninput='adr2Func(this.id)' min='0' max='440' style='margin-left:10px;' value='5'>
							<td><input type='range' id='a2mt' oninput='adr2Func(this.id)' min='0' max='300' style='margin-left:10px;' value='5'>
							<td><input type='range' id='a2fs' oninput='adr2Func(this.id)' min='1' max='100' style='margin-left:10px;' value='5'>
							<td><input type='color' id='a2fc' oninput='adr2Func(this.id)' style='margin-left:10px;'>
						</tr>
						
						<tr>
							<td>Contact:
							<td><input type='range' id='cnml' oninput='contactFunc(this.id)' min='0' max='440' style='margin-left:10px;' value='5'>
							<td><input type='range' id='cnmt' oninput='contactFunc(this.id)' min='0' max='300' style='margin-left:10px;' value='5'>
							<td><input type='range' id='cnfs' oninput='contactFunc(this.id)' min='1' max='100' style='margin-left:10px;' value='5'>
							<td><input type='color' id='cnfc' oninput='contactFunc(this.id)' style='margin-left:10px;'>
						</tr>
						
						<tr>
							<td>Email:
							<td><input type='range' id='eml' oninput='emailFunc(this.id)' min='0' max='440' style='margin-left:10px; margin-top:10px;' value='5'>
							<td><input type='range' id='emt' oninput='emailFunc(this.id)' min='0' max='300' style='margin-left:10px; margin-top:10px;' value='5'>
							<td><input type='range' id='efs' oninput='emailFunc(this.id)' min='1' max='100' style='margin-left:10px; margin-top:10px;' value='5'>
							<td><input type='color' id='efc' oninput='emailFunc(this.id)' placeholder='Font Color' style='margin-left:10px; margin-top:10px;'>
						</tr>
						
						<tr>
							<td>Price: 
							<td><input type='text' name='prc' placeholder='Price per card' style='margin-top:5px'>
						</tr>
						
					</table>
						
						<br>					
						<input type='submit' class='btn btn-danger' name='price' value='Save'>
						<input type='submit' class='btn btn-danger' name='dec' value='Decline'>
						<input type='hidden' name='id' value='$_REQUEST[id]'>
				
					</form>";

				echo "</div>";
				
			}

		if(isset($_REQUEST['cancel'])){
			
			$cancelQuery = "delete from card where id = '$_REQUEST[id]'";
		
			if(mysqli_query($con, $cancelQuery)){

				echo "<script>
				window.location='businessAdmin.php';
				</script>";
			}
			
		}
	
?>


	
<script type="text/javascript" src="../jquery.js"></script>
	
	<script type="text/javascript">
		
		function cnameFunc(id) {
			
			var i = '#'+id;
			var idValue = $(i).val();
			$.ajax({
				method: "POST",
				url: "../data.php",
				data: {CnameInputId: id, CnameInputValue: idValue},
				success: function(status){
					$('#cname').html(status);				
				}	
			});
			
		}
		
		function nameFunc(id) {
			
			var i = '#'+id;
			var idValue = $(i).val();
			$.ajax({
				method: "POST",
				url: "../data.php",
				data: {NameInputId: id, NameInputValue: idValue},
				success: function(status){
					$('#name').html(status);				
				}	
			});
			
		}
		
		function adr1Func(id) {
			
			var i = '#'+id;
			var idValue = $(i).val();
			$.ajax({
				method: "POST",
				url: "../data.php",
				data: {Adr1InputId: id, Adr1InputValue: idValue},
				success: function(status){
					$('#adr1').html(status);				
				}	
			});
			
		}
		
		function adr2Func(id) {
			
			var i = '#'+id;
			var idValue = $(i).val();
			$.ajax({
				method: "POST",
				url: "../data.php",
				data: {Adr2InputId: id, Adr2InputValue: idValue},
				success: function(status){
					$('#adr2').html(status);				
				}	
			});
			
		}
		
		function contactFunc(id) {
			
			var i = '#'+id;
			var idValue = $(i).val();
			$.ajax({
				method: "POST",
				url: "../data.php",
				data: {ConInputId: id, ConInputValue: idValue},
				success: function(status){
					$('#contact').html(status);				
				}	
			});
			
		}
		
		function emailFunc(id) {
			
			var i = '#'+id;
			var idValue = $(i).val();
			$.ajax({
				method: "POST",
				url: "../data.php",
				data: {EmailInputId: id, EmailInputValue: idValue},
				success: function(status){
					$('#email').html(status);				
				}	
			});
			
		}
		
		
		
	</script>
	
<?php	
	
	$user = "root";
	$pass = "";
	$database = "ECards";
	$host = "localhost";
	
	$con = mysqli_connect($host, $user, $pass, $database);

	if(isset($_POST['price'])) {
		
		$query = "update card set price = '$_POST[prc]' where id = '$_REQUEST[id]'";
		
		if(mysqli_query($con, $query)){
			
			echo "<script>
			alert('card saved.');
			window.location='businessAdmin.php';
			</script>";
		}
		
	}

	if(isset($_POST['dec'])) {
		
		$query = "delete from card where id = '$_REQUEST[id]'";
		
		if(mysqli_query($con, $query)){
			
			echo "<script>
			alert('card discarded.');
			window.location='businessAdmin.php';
			</script>";
		}
		
	}
	
?>


<?php 
	include("footer.php");
?>
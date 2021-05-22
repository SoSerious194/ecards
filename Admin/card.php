<?php
	session_start();
	$id = $_REQUEST['id'];
	if($uname == null ){
		header("location:index.php");
	}
	if(isset($_POST['sbn'])){
		
		$target1 = "images/".basename($_FILES['imgf']['name']);
		$target2 = "images/".basename($_FILES['imgb']['name']);
		
		$user="root";
		$pass="";
		$database="ECards";
		$host="localhost";
		
		$con=mysqli_connect($host, $user, $pass, $database);
		
		 $imagef = $_FILES['imgf']['name'];
		 $imageb = $_FILES['imgb']['name'];
		
		 $query = "update card set image='$imageb', imgf='$imagef' where id='$id' ";
		
		mysqli_query($con, $query);
		
		move_uploaded_file($_FILES['imgf']['tmp_name'],$target1);
		move_uploaded_file($_FILES['imgb']['tmp_name'],$target2);
	}

?>

<html>
	<head>
		<link rel="stylesheet"  href="../css/bootstrap.css">
		<link rel="stylesheet"  href="../css/style.css">
		
		
	</head>
		<div class="col-md-6">
		
			<form action="card.php" method="post" enctype="multipart/form-data">
				<input type="file" name="imgf" value="Choose Image Front">
				<input type="file" name="imgb" value="Choose Image Back">
				<input type="hidden" name="id" value="<?php echo $_REQUEST['id']; ?>">
				<input type="submit" name="sbn" value="upload card">
			</form>
		
		</div><br><br><br><br>
		<?php
	
		$user="root";
		$pass="";
		$database="ECards";
		$host="localhost";
		
		$con = mysqli_connect($host, $user, $pass, $database);
	
		$query = "select image from card where id='".$_REQUEST['id']."' ";
	
		$result = mysqli_query($con, $query);
			
		while($row = mysqli_fetch_array($result)) {
			
			echo "<div class='col-md-6'>";
				 
				echo "<img src='images/".$row['image']."' style='z-index:1; position: absolute; max-width: 435px;'";
				
			echo "</div>";
			
		}
	
		echo "<div id='cname' style='position:absolute; z-index: 20'></div>";
		echo "<div id='name' style='position:absolute; z-index: 20'></div>";
		echo "<div id='adr1' style='position:absolute; z-index: 20'></div>";
		echo "<div id='adr2' style='position:absolute; z-index: 20'></div>";
		echo "<div id='contact' style='position:absolute; z-index: 20'></div>";
		echo "<div id='email' style='position:absolute; z-index: 20'></div>";
			
			if(isset($_POST['sbn'])){
				
				echo "<div id='content' class='col-md-6' style='margin-left:500px;'>";

				echo "
				
				<form action='card.php' method='post'>
				
					<table>
				
						<tr>
							<td>Company Name:
							<td><input type='text' id='cml' name='cml' placeholder='Margin Left' style='margin-left:5px;'>
							<td><input type='text' id='cmt' name='cmt' placeholder='Margin Top' style='margin-left:5px;'>
							<td><input type='text' id='cfs' name='cfs' placeholder='Font Size' style='margin-left:5px;'>
							<td><input type='text' id='cfc' name='cfc' placeholder='Font Color' style='margin-left:5px;'>
						</tr>
						
						<tr>
							<td>Name:
							<td><input type='text' id='nml' name='nml' placeholder='Margin Left' style='margin-left:5px;'>
							<td><input type='text' id='nmt' name='nmt' placeholder='Margin Top' style='margin-left:5px;'>
							<td><input type='text' id='nfs' name='nfs' placeholder='Font Size' style='margin-left:5px;'>
							<td><input type='text' id='nfc' name='nfc' placeholder='Font Color' style='margin-left:5px;'>
						</tr>
						
						<tr>
							<td>Address Line 1:
							<td><input type='text' id='a1ml' name='a1ml' placeholder='Margin Left' style='margin-left:5px;'>
							<td><input type='text' id='a1mt' name='a1mt' placeholder='Margin Top' style='margin-left:5px;'>
							<td><input type='text' id='a1fs' name='a1fs' placeholder='Font Size' style='margin-left:5px;'>
							<td><input type='text' id='a1fc' name='a1fc' placeholder='Font Color' style='margin-left:5px;'>
						</tr>
						
						<tr>
							<td>Address Line 2:
							<td><input type='text' id='a2ml' name='a2ml' placeholder='Margin Left' style='margin-left:5px;'>
							<td><input type='text' id='a2mt' name='a2mt' placeholder='Margin Top' style='margin-left:5px;'>
							<td><input type='text' id='a2fs' name='a2fs' placeholder='Font Size' style='margin-left:5px;'>
							<td><input type='text' id='a2fc' name='a2fc' placeholder='Font Color' style='margin-left:5px;'>
						</tr>
						
						<tr>
							<td>Contact:
							<td><input type='text' id='cnml' name='cnml' placeholder='Margin Left' style='margin-left:5px;'>
							<td><input type='text' id='cnmt' name='cnmt' placeholder='Margin Top' style='margin-left:5px;'>
							<td><input type='text' id='cnfs' name='cnfs' placeholder='Font Size' style='margin-left:5px;'>
							<td><input type='text' id='cnfc' name='cnfc' placeholder='Font Color' style='margin-left:5px;'>
						</tr>
						
						<tr>
							<td>Email:
							<td><input type='text' id='eml' name='eml' placeholder='Margin Left' style='margin-left:5px; margin-top:5px;'>
							<td><input type='text' id='emt' name='emt' placeholder='Margin Top' style='margin-left:5px; margin-top:5px;'>
							<td><input type='text' id='efs' name='efs' placeholder='Font Size' style='margin-left:5px; margin-top:5px;'>
							<td><input type='text' id='efc' name='efc' placeholder='Font Color' style='margin-left:5px; margin-top:5px;'>
						</tr>
						
						<tr>
							<td>Price: 
							<td><input type='text' id='prc' name='prc' placeholder='Price per card' style='margin-top:5px'>
						</tr>
						
						<input type='hidden' name='id' value='echo $_REQUEST[id]' >
						
						<tr><td><input type='submit' name='sub' value='Save'></td></tr>
						
					</table>
					
					</form>";

				echo "</div>";
				
			}
	
?>


	
	<script type="text/javascript" src="../jquery.js"></script>
	
	<script type="text/javascript">
		$(document).ready(function(){
			$('#cfc').blur(function(event){
				var key = (event.keyCode ? event.keyCode : event.which);
				//if(key == 13){
					var cml = $('#cml').val();
					var cmt = $('#cmt').val();
					var cfs = $('#cfs').val();
					var cfc = $('#cfc').val();
					$.ajax({
						method: "POST",
						url: "../data.php",
						data: {cml: cml, cmt: cmt, cfs: cfs, cfc: cfc},
						success: function(status){
							$('#cname').html(status);
							$('#cml').val('');
							$('#cmt').val('');
							$('#cfs').val('');
							$('#cfc').val('');
						}	
					});
				//};
			});
		});
		
		$(document).ready(function(){
			$('#nfc').blur(function(event){
				var key = (event.keyCode ? event.keyCode : event.which);
				//if(key == 13){
					var nml = $('#nml').val();
					var nmt = $('#nmt').val();
					var nfs = $('#nfs').val();
					var nfc = $('#nfc').val();
					$.ajax({
						method: "POST",
						url: "../data.php",
						data: {nml: nml, nmt: nmt, nfs: nfs, nfc: nfc},
						success: function(status){
							$('#name').html(status);
							$('#nml').val('');
							$('#nmt').val('');
							$('#nfs').val('');
							$('#nfc').val('');
						}	
					});
				//};
			});
		});
		
		$(document).ready(function(){
			$('#a1fc').blur(function(event){
				var key = (event.keyCode ? event.keyCode : event.which);
				//if(key == 13){
					var a1ml = $('#a1ml').val();
					var a1mt = $('#a1mt').val();
					var a1fs = $('#a1fs').val();
					var a1fc = $('#a1fc').val();
					$.ajax({
						method: "POST",
						url: "../data.php",
						data: {a1ml: a1ml, a1mt: a1mt, a1fs: a1fs, a1fc: a1fc},
						success: function(status){
							$('#adr1').html(status);
							$('#a1ml').val('');
							$('#a1mt').val('');
							$('#a1fs').val('');
							$('#a1fc').val('');
						}	
					});
				//};
			});
		});
		
		$(document).ready(function(){
			$('#a2fc').blur(function(event){
				var key = (event.keyCode ? event.keyCode : event.which);
				//if(key == 13){
					var a2ml = $('#a2ml').val();
					var a2mt = $('#a2mt').val();
					var a2fs = $('#a2fs').val();
					var a2fc = $('#a2fc').val();
					$.ajax({
						method: "POST",
						url: "../data.php",
						data: {a2ml: a2ml, a2mt: a2mt, a2fs: a2fs, a2fc: a2fc},
						success: function(status){
							$('#adr2').html(status);
							$('#a2ml').val('');
							$('#a2mt').val('');
							$('#a2fs').val('');
							$('#a2fc').val('');
						}	
					});
				//};
			});
		});
		
		$(document).ready(function(){
			$('#cnfc').blur(function(event){
				var key = (event.keyCode ? event.keyCode : event.which);
				//if(key == 13){
					var cnml = $('#cnml').val();
					var cnmt = $('#cnmt').val();
					var cnfs = $('#cnfs').val();
					var cnfc = $('#cnfc').val();
					$.ajax({
						method: "POST",
						url: "../data.php",
						data: {cnml: cnml, cnmt: cnmt, cnfs: cnfs, cnfc: cnfc},
						success: function(status){
							$('#contact').html(status);
							$('#cnml').val('');
							$('#cnmt').val('');
							$('#cnfs').val('');
							$('#cnfc').val('');
						}	
					});
				//};
			});
		});
		
		$(document).ready(function(){
			$('#efc').blur(function(event){
				var key = (event.keyCode ? event.keyCode : event.which);
				//if(key == 13){
					var eml = $('#eml').val();
					var emt = $('#emt').val();
					var efs = $('#efs').val();
					var efc = $('#efc').val();
					$.ajax({
						method: "POST",
						url: "../data.php",
						data: {eml: eml, emt: emt, efs: efs, efc: efc},
						success: function(status){
							$('#email').html(status);
							$('#eml').val('');
							$('#emt').val('');
							$('#efs').val('');
							$('#efc').val('');
						}	
					});
				//};
			});
		});
		
		
	</script>
<?php	
	if(isset($_POST['sub'])) {

	$user = "root";
	$pass = "";
	$database = "ECards";
	$host = "localhost";
	
	$con = mysqli_connect($host, $user, $pass, $database);
		
	$query = "update card set price = '$_POST[prc]' where id = '$_SESSION[id]'";
		
	mysqli_query($con, $query);
		
	echo "<script>
	alert('card saved.');
	window.location='admin.php';
	</script>";
		
	}
?>
	
</html>
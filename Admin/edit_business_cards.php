<?php  
	session_start();

	include("nav.php");

	$uname = $_SESSION['uname'];

	if($uname == null ){
		echo "<script>window.location='index.php'</script>";
	}

	$_SESSION['eID'] = $_REQUEST['EditId'];
	
?>
<br>
<br>
<br><hr><p style="text-align: center; font-size: 23px; font-weight: bold">Welcome to Edit Page<p><hr><br>
		<link rel="stylesheet"  href="../css/bootstrap.css">
		<link rel="stylesheet"  href="../css/style.css">0
		<?php
	
		$user="root";
		$pass="";
		$database="ECards";
		$host="localhost";
	
		$id = $_REQUEST['EditId'];
		
		$con = mysqli_connect($host, $user, $pass, $database);
	
		$query = "select imgEmpty from card where id='".$id."' ";
	
		$result = mysqli_query($con, $query);
			
		while($row = mysqli_fetch_array($result)) {
	
			echo "<div class='col-md-6'>";
				 
				echo "<img src='../images/Empty Images/".$row['imgEmpty']."' style='z-index:1; position: absolute; max-width: 435px; margin-left:-854px;'";
				
			echo "</div>";
			
		}
	
		echo "<div id='cname' style='position:absolute; z-index: 20; font-weight:bold'></div>";
		echo "<div id='name' style='position:absolute; z-index: 20'></div>";
		echo "<div id='adr1' style='position:absolute; z-index: 20'></div>";
		echo "<div id='adr2' style='position:absolute; z-index: 20'></div>";
		echo "<div id='contact' style='position:absolute; z-index: 20'></div>";
		echo "<div id='email' style='position:absolute; z-index: 20'></div>";
			
			
				
				echo "<div id='content' class='col-md-6' style='margin-left:500px;'>";
					
				$sql_card=mysqli_query($con,"select * from card where id = '".$_REQUEST['EditId']."'");
				while($row=mysqli_fetch_array($sql_card)) { ?>
				
				<form action='edit_business_cards.php' method='post'>
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
							<td><input type='range' id='cml' oninput='cnameFunc(this.id)' min='0' max='440' style='margin-left:5px;' value='<?php echo $row['cml']; ?>'>
							<td><input type='range' id='cmt' oninput='cnameFunc(this.id)' min='0' max='300' style='margin-left:5px;' value='<?php echo $row['cmt']; ?>'>
							<td><input type='range' id='cfs' oninput='cnameFunc(this.id)' min='1' max='100' style='margin-left:5px;' value='<?php echo $row['cfs']; ?>'>
							<td><input type='color' id='cfc' oninput='cnameFunc(this.id)' style='margin-left:5px;' value='<?php echo $row['cfc']; ?>'>
						</tr>
						
						<tr>
							<td>Name:
							<td><input type='range' id='nml' oninput='nameFunc(this.id)' min='0' max='440' style='margin-left:5px;' value='<?php echo $row['nml']; ?>'>
							<td><input type='range' id='nmt' oninput='nameFunc(this.id)' min='0' max='300' style='margin-left:5px;' value='<?php echo $row['nmt']; ?>'>
							<td><input type='range' id='nfs' oninput='nameFunc(this.id)' min='1' max='100' style='margin-left:5px;' value='<?php echo $row['nfs']; ?>'>
							<td><input type='color' id='nfc' oninput='nameFunc(this.id)' style='margin-left:5px;' value='<?php echo $row['nfc']; ?>'>
						</tr>
						
						<tr>
							<td>Address Line 1:
							<td><input type='range' id='a1ml' oninput='adr1Func(this.id)' min='0' max='440' style='margin-left:5px;' value='<?php echo $row['a1ml']; ?>'>
							<td><input type='range' id='a1mt' oninput='adr1Func(this.id)' min='0' max='300' style='margin-left:5px;' value='<?php echo $row['a1mt']; ?>'>
							<td><input type='range' id='a1fs' oninput='adr1Func(this.id)' min='1' max='100' style='margin-left:5px;' value='<?php echo $row['a1fs']; ?>'>
							<td><input type='color' id='a1fc' oninput='adr1Func(this.id)' style='margin-left:5px;' value='<?php echo $row['a1fc']; ?>'>
						</tr>
						
						<tr>
							<td>Address Line 2:
							<td><input type='range' id='a2ml' oninput='adr2Func(this.id)' min='0' max='440' style='margin-left:5px;' value='<?php echo $row['a2ml']; ?>'>
							<td><input type='range' id='a2mt' oninput='adr2Func(this.id)' min='0' max='300' style='margin-left:5px;' value='<?php echo $row['a2mt']; ?>'>
							<td><input type='range' id='a2fs' oninput='adr2Func(this.id)' min='1' max='100' style='margin-left:5px;' value='<?php echo $row['a2fs']; ?>'>
							<td><input type='color' id='a2fc' oninput='adr2Func(this.id)' style='margin-left:5px;' value='<?php echo $row['a2fc']; ?>'>
						</tr>
						
						<tr>
							<td>Contact:
							<td><input type='range' id='cnml' oninput='contactFunc(this.id)' min='0' max='440' style='margin-left:5px;' value='<?php echo $row['cnml']; ?>'>
							<td><input type='range' id='cnmt' oninput='contactFunc(this.id)' min='0' max='300' style='margin-left:5px;' value='<?php echo $row['cnmt']; ?>'>
							<td><input type='range' id='cnfs' oninput='contactFunc(this.id)' min='1' max='100' style='margin-left:5px;' value='<?php echo $row['cnfs']; ?>'>
							<td><input type='color' id='cnfc' oninput='contactFunc(this.id)' style='margin-left:5px;' value='<?php echo $row['cnfc']; ?>'>
						</tr>
						
						<tr>
							<td>Email:
							<td><input type='range' id='eml' oninput='emailFunc(this.id)' min='0' max='440' style='margin-left:5px; margin-top:5px;' value='<?php echo $row['eml']; ?>'>
							<td><input type='range' id='emt' oninput='emailFunc(this.id)' min='0' max='300' style='margin-left:5px; margin-top:5px;' value='<?php echo $row['emt']; ?>'>
							<td><input type='range' id='efs' oninput='emailFunc(this.id)' min='1' max='100' style='margin-left:5px; margin-top:5px;' value='<?php echo $row['efs']; ?>'>
							<td><input type='color' id='efc' oninput='emailFunc(this.id)' style='margin-left:5px; margin-top:5px;' value='<?php echo $row['efc']; ?>'>
						</tr>
						
						<tr>
							<td>Price: 
							<td><input type='text' name='price' placeholder='Price per card' style='margin-top:5px' value='<?php echo $row['price'] ?>'>
							<input type='hidden' name='EditId' value='<?php echo $_REQUEST['EditId'] ?>'>
						</tr>
						
						<tr><td><input class='btn btn-primary' type='submit' name='sub' value='Save'></td></tr>
						
					</table>
					</form>
					<hr>
				</div>
	<?php }	 ?>
	
	<script type="text/javascript" src="../jquery.js"></script>
	
	<script type="text/javascript">
	
	function load() {
		
		cnameFunc('cfc');
		cnameFunc('cml');
		cnameFunc('cmt');
		cnameFunc('cfs');
		
		nameFunc('nfc');
		nameFunc('nml');
		nameFunc('nmt');
		nameFunc('nfs');
		
		adr1Func('a1fc');
		adr1Func('a1ml');
		adr1Func('a1mt');
		adr1Func('a1fs');
		
		adr2Func('a2fc');
		adr2Func('a2ml');
		adr2Func('a2mt');
		adr2Func('a2fs');
		
		contactFunc('cnfc');
		contactFunc('cnml');
		contactFunc('cnmt');
		contactFunc('cnfs');
		
		emailFunc('efc');
		emailFunc('eml');
		emailFunc('emt');
		emailFunc('efs');
		
	}
		load();
		
		function cnameFunc(id) {
			
			var i = '#'+id;
			var idValue = $(i).val();
			$.ajax({
				method: "POST",
				url: "editData.php",
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
				url: "editData.php",
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
				url: "editData.php",
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
				url: "editData.php",
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
				url: "editData.php",
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
				url: "editData.php",
				data: {EmailInputId: id, EmailInputValue: idValue},
				success: function(status){
					$('#email').html(status);				
				}	
			});
			
		}
		
		
	</script>
<?php	
	if(isset($_POST['sub'])) {

	$user = "root";
	$pass = "";
	$database = "ECards";
	$host = "localhost";
	
	$con = mysqli_connect($host, $user, $pass, $database);
		
	$query = "update card set price = '$_POST[price]' where id = '$_REQUEST[EditId]'";
		
	mysqli_query($con, $query);
		
	echo "<script>
	alert('card updated.');
	window.location='businessAdmin.php';
	</script>";
		
	}
															
	include("footer.php");
?>
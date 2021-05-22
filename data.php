<?php 
	
	session_start();

	$user = "root";
	$pass = "";
	$database = "ECards";
	$host = "localhost";
	
	$con = mysqli_connect($host, $user, $pass, $database);

	/********************************************* Code for CName Field ***********************************************/

	if(isset($_POST['CnameInputId'])) {
		
		$id = $_REQUEST['CnameInputId'];
		$value = $_REQUEST['CnameInputValue'];
		
		if($id == 'cml') {
			
			$_SESSION['ml1'] = $value;
			?> 
			
			<div style="margin-left:<?php echo $_SESSION['ml1']; ?>px; <?php if(isset($_SESSION['mt1'])) { ?> margin-top:<?php echo $_SESSION['mt1'] ?>px;<?php } ?> <?php if(isset($_SESSION['fs1'])) { ?> font-size:<?php echo $_SESSION['fs1'] ?>px;<?php } ?> <?php if(isset($_SESSION['fc1'])) { ?> color:<?php echo $_SESSION['fc1'] ?>;<?php } ?>">
			Demo Company
			</div>
			
		<?php
			
			$query = "update card set ".$id."='$value' where id='$_SESSION[id]' ";
			mysqli_query($con, $query);
			
		}
		
		if($id == 'cmt') {
			
			$_SESSION['mt1'] = $value;	
			?> 
			
			<div style="margin-top:<?php echo $_SESSION['mt1']; ?>px; <?php if(isset($_SESSION['ml1'])) { ?> margin-left:<?php echo $_SESSION['ml1'] ?>px;<?php } ?> <?php if(isset($_SESSION['fs1'])) { ?> font-size:<?php echo $_SESSION['fs1'] ?>px;<?php } ?> <?php if(isset($_SESSION['fc1'])) { ?> color:<?php echo $_SESSION['fc1'] ?>;<?php } ?>">
			Demo Company
			</div>			
			
		<?php
			
			$query = "update card set ".$id."='$value' where id='$_SESSION[id]' ";
			mysqli_query($con, $query);
			
		}
		
		if($id == 'cfs') {
			
			$_SESSION['fs1'] = $value;	
			?> 
			  
			 <div style="font-size:<?php echo $_SESSION['fs1']; ?>px; <?php if(isset($_SESSION['mt1'])) { ?> margin-top:<?php echo $_SESSION['mt1'] ?>px;<?php } ?> <?php if(isset($_SESSION['ml1'])) { ?> margin-left:<?php echo $_SESSION['ml1'] ?>px;<?php } ?> <?php if(isset($_SESSION['fc1'])) { ?> color:<?php echo $_SESSION['fc1'] ?>;<?php } ?>">
			 Demo Company
			</div> 
			  
		<?php
			
			$query = "update card set ".$id."='$value' where id='$_SESSION[id]' ";
			mysqli_query($con, $query);
			
		}
		
		if($id == 'cfc') {
			
			$_SESSION['fc1'] = $value;	
			?> 
			
			<div style="color:<?php echo $_SESSION['fc1']; ?>; <?php if(isset($_SESSION['mt1'])) { ?> margin-top:<?php echo $_SESSION['mt1'] ?>px;<?php } ?> <?php if(isset($_SESSION['fs1'])) { ?> font-size:<?php echo $_SESSION['fs1'] ?>px;<?php } ?> <?php if(isset($_SESSION['ml1'])) { ?> margin-left:<?php echo $_SESSION['ml1'] ?>px;<?php } ?>">
			Demo Company
			</div>
			
		<?php
			
			$query = "update card set ".$id."='$value' where id='$_SESSION[id]' ";
			mysqli_query($con, $query);
			
		}
			
	}


	/********************************************* Code for Name Field ***********************************************/

	if(isset($_POST['NameInputId'])) {
		
		$id = $_REQUEST['NameInputId'];
		$value = $_REQUEST['NameInputValue'];
		
		if($id == 'nml') {
			
			$_SESSION['ml2'] = $value;
			?> 
			
			<div style="margin-left:<?php echo $_SESSION['ml2']; ?>px; <?php if(isset($_SESSION['mt2'])) { ?> margin-top:<?php echo $_SESSION['mt2'] ?>px;<?php } ?> <?php if(isset($_SESSION['fs2'])) { ?> font-size:<?php echo $_SESSION['fs2'] ?>px;<?php } ?> <?php if(isset($_SESSION['fc2'])) { ?> color:<?php echo $_SESSION['fc2'] ?>;<?php } ?>">
			Demo Name
			</div>
			
		<?php
			
			$query = "update card set ".$id."='$value' where id='$_SESSION[id]' ";
			mysqli_query($con, $query);
			
		}
		
		if($id == 'nmt') {
			
			$_SESSION['mt2'] = $value;	
			?> 
			
			<div style="margin-top:<?php echo $_SESSION['mt2']; ?>px; <?php if(isset($_SESSION['ml2'])) { ?> margin-left:<?php echo $_SESSION['ml2'] ?>px;<?php } ?> <?php if(isset($_SESSION['fs2'])) { ?> font-size:<?php echo $_SESSION['fs2'] ?>px;<?php } ?> <?php if(isset($_SESSION['fc2'])) { ?> color:<?php echo $_SESSION['fc2'] ?>;<?php } ?>">
			Demo Name
			</div>			
			
		<?php
			
			$query = "update card set ".$id."='$value' where id='$_SESSION[id]' ";
			mysqli_query($con, $query);
			
		}
		
		if($id == 'nfs') {
			
			$_SESSION['fs2'] = $value;	
			?> 
			  
			 <div style="font-size:<?php echo $_SESSION['fs2']; ?>px; <?php if(isset($_SESSION['mt2'])) { ?> margin-top:<?php echo $_SESSION['mt2'] ?>px;<?php } ?> <?php if(isset($_SESSION['ml2'])) { ?> margin-left:<?php echo $_SESSION['ml2'] ?>px;<?php } ?> <?php if(isset($_SESSION['fc2'])) { ?> color:<?php echo $_SESSION['fc2'] ?>;<?php } ?>">
			 Demo Name
			</div> 
			  
		<?php
			
			$query = "update card set ".$id."='$value' where id='$_SESSION[id]' ";
			mysqli_query($con, $query);
			
		}
		
		if($id == 'nfc') {
			
			$_SESSION['fc2'] = $value;	
			?> 
			
			<div style="color:<?php echo $_SESSION['fc2']; ?>; <?php if(isset($_SESSION['mt2'])) { ?> margin-top:<?php echo $_SESSION['mt2'] ?>px;<?php } ?> <?php if(isset($_SESSION['fs2'])) { ?> font-size:<?php echo $_SESSION['fs2'] ?>px;<?php } ?> <?php if(isset($_SESSION['ml2'])) { ?> margin-left:<?php echo $_SESSION['ml2'] ?>px;<?php } ?>">
			Demo Name
			</div>
			
		<?php
			
			$query = "update card set ".$id."='$value' where id='$_SESSION[id]' ";
			mysqli_query($con, $query);
			
		}
			
	}

	/********************************************* Code for Address Field 1 **********************************************/

	if(isset($_POST['Adr1InputId'])) {
		
		$id = $_REQUEST['Adr1InputId'];
		$value = $_REQUEST['Adr1InputValue'];
		
		if($id == 'a1ml') {
			
			$_SESSION['ml3'] = $value;
			?> 
			
			<div style="margin-left:<?php echo $_SESSION['ml3']; ?>px; <?php if(isset($_SESSION['mt3'])) { ?> margin-top:<?php echo $_SESSION['mt3'] ?>px;<?php } ?> <?php if(isset($_SESSION['fs3'])) { ?> font-size:<?php echo $_SESSION['fs3'] ?>px;<?php } ?> <?php if(isset($_SESSION['fc3'])) { ?> color:<?php echo $_SESSION['fc3'] ?>;<?php } ?>">
			Address Line 1
			</div>
			
		<?php
			
			$query = "update card set ".$id."='$value' where id='$_SESSION[id]' ";
			mysqli_query($con, $query);
			
		}
		
		if($id == 'a1mt') {
			
			$_SESSION['mt3'] = $value;	
			?> 
			
			<div style="margin-top:<?php echo $_SESSION['mt3']; ?>px; <?php if(isset($_SESSION['ml3'])) { ?> margin-left:<?php echo $_SESSION['ml3'] ?>px;<?php } ?> <?php if(isset($_SESSION['fs3'])) { ?> font-size:<?php echo $_SESSION['fs3'] ?>px;<?php } ?> <?php if(isset($_SESSION['fc3'])) { ?> color:<?php echo $_SESSION['fc3'] ?>;<?php } ?>">
			Address Line 1
			</div>			
			
		<?php
			
			$query = "update card set ".$id."='$value' where id='$_SESSION[id]' ";
			mysqli_query($con, $query);
			
		}
		
		if($id == 'a1fs') {
			
			$_SESSION['fs3'] = $value;	
			?> 
			  
			 <div style="font-size:<?php echo $_SESSION['fs3']; ?>px; <?php if(isset($_SESSION['mt3'])) { ?> margin-top:<?php echo $_SESSION['mt3'] ?>px;<?php } ?> <?php if(isset($_SESSION['ml3'])) { ?> margin-left:<?php echo $_SESSION['ml3'] ?>px;<?php } ?> <?php if(isset($_SESSION['fc3'])) { ?> color:<?php echo $_SESSION['fc3'] ?>;<?php } ?>">
			 Address Line 1
			</div> 
			  
		<?php
			
			$query = "update card set ".$id."='$value' where id='$_SESSION[id]' ";
			mysqli_query($con, $query);
			
		}
		
		if($id == 'a1fc') {
			
			$_SESSION['fc3'] = $value;	
			?> 
			
			<div style="color:<?php echo $_SESSION['fc3']; ?>; <?php if(isset($_SESSION['mt3'])) { ?> margin-top:<?php echo $_SESSION['mt3'] ?>px;<?php } ?> <?php if(isset($_SESSION['fs3'])) { ?> font-size:<?php echo $_SESSION['fs3'] ?>px;<?php } ?> <?php if(isset($_SESSION['ml3'])) { ?> margin-left:<?php echo $_SESSION['ml3'] ?>px;<?php } ?>">
			Address Line 1
			</div>
			
		<?php
			
			$query = "update card set ".$id."='$value' where id='$_SESSION[id]' ";
			mysqli_query($con, $query);
			
		}
			
	}

	/********************************************* Code for Address Field 2 **********************************************/

	if(isset($_POST['Adr2InputId'])) {
		
		$id = $_REQUEST['Adr2InputId'];
		$value = $_REQUEST['Adr2InputValue'];
		
		if($id == 'a2ml') {
			
			$_SESSION['ml4'] = $value;
			?> 
			
			<div style="margin-left:<?php echo $_SESSION['ml4']; ?>px; <?php if(isset($_SESSION['mt4'])) { ?> margin-top:<?php echo $_SESSION['mt4'] ?>px;<?php } ?> <?php if(isset($_SESSION['fs4'])) { ?> font-size:<?php echo $_SESSION['fs4'] ?>px;<?php } ?> <?php if(isset($_SESSION['fc4'])) { ?> color:<?php echo $_SESSION['fc4'] ?>;<?php } ?>">
			Address Line 2
			</div>
			
		<?php
			
			$query = "update card set ".$id."='$value' where id='$_SESSION[id]' ";
			mysqli_query($con, $query);
			
		}
		
		if($id == 'a2mt') {
			
			$_SESSION['mt4'] = $value;	
			?> 
			
			<div style="margin-top:<?php echo $_SESSION['mt4']; ?>px; <?php if(isset($_SESSION['ml4'])) { ?> margin-left:<?php echo $_SESSION['ml4'] ?>px;<?php } ?> <?php if(isset($_SESSION['fs4'])) { ?> font-size:<?php echo $_SESSION['fs4'] ?>px;<?php } ?> <?php if(isset($_SESSION['fc4'])) { ?> color:<?php echo $_SESSION['fc4'] ?>;<?php } ?>">
			Address Line 2
			</div>			
			
		<?php
			
			$query = "update card set ".$id."='$value' where id='$_SESSION[id]' ";
			mysqli_query($con, $query);
			
		}
		
		if($id == 'a2fs') {
			
			$_SESSION['fs4'] = $value;	
			?> 
			  
			 <div style="font-size:<?php echo $_SESSION['fs4']; ?>px; <?php if(isset($_SESSION['mt4'])) { ?> margin-top:<?php echo $_SESSION['mt4'] ?>px;<?php } ?> <?php if(isset($_SESSION['ml4'])) { ?> margin-left:<?php echo $_SESSION['ml4'] ?>px;<?php } ?> <?php if(isset($_SESSION['fc4'])) { ?> color:<?php echo $_SESSION['fc4'] ?>;<?php } ?>">
			 Address Line 2
			</div> 
			  
		<?php
			
			$query = "update card set ".$id."='$value' where id='$_SESSION[id]' ";
			mysqli_query($con, $query);
			
		}
		
		if($id == 'a2fc') {
			
			$_SESSION['fc4'] = $value;	
			?> 
			
			<div style="color:<?php echo $_SESSION['fc4']; ?>; <?php if(isset($_SESSION['mt4'])) { ?> margin-top:<?php echo $_SESSION['mt4'] ?>px;<?php } ?> <?php if(isset($_SESSION['fs4'])) { ?> font-size:<?php echo $_SESSION['fs4'] ?>px;<?php } ?> <?php if(isset($_SESSION['ml4'])) { ?> margin-left:<?php echo $_SESSION['ml4'] ?>px;<?php } ?>">
			Address Line 2
			</div>
			
		<?php
			
			$query = "update card set ".$id."='$value' where id='$_SESSION[id]' ";
			mysqli_query($con, $query);
			
		}
			
	}

	/********************************************* Code for Contact Field **********************************************/

	if(isset($_POST['ConInputId'])) {
		
		$id = $_REQUEST['ConInputId'];
		$value = $_REQUEST['ConInputValue'];
		
		if($id == 'cnml') {
			
			$_SESSION['ml5'] = $value;
			?> 
			
			<div style="margin-left:<?php echo $_SESSION['ml5']; ?>px; <?php if(isset($_SESSION['mt5'])) { ?> margin-top:<?php echo $_SESSION['mt5'] ?>px;<?php } ?> <?php if(isset($_SESSION['fs5'])) { ?> font-size:<?php echo $_SESSION['fs5'] ?>px;<?php } ?> <?php if(isset($_SESSION['fc5'])) { ?> color:<?php echo $_SESSION['fc5'] ?>;<?php } ?>">
			+1 1111111111
			</div>
			
		<?php
			
			$query = "update card set ".$id."='$value' where id='$_SESSION[id]' ";
			mysqli_query($con, $query);
			
		}
		
		if($id == 'cnmt') {
			
			$_SESSION['mt5'] = $value;	
			?> 
			
			<div style="margin-top:<?php echo $_SESSION['mt5']; ?>px; <?php if(isset($_SESSION['ml5'])) { ?> margin-left:<?php echo $_SESSION['ml5'] ?>px;<?php } ?> <?php if(isset($_SESSION['fs5'])) { ?> font-size:<?php echo $_SESSION['fs5'] ?>px;<?php } ?> <?php if(isset($_SESSION['fc5'])) { ?> color:<?php echo $_SESSION['fc5'] ?>;<?php } ?>">
			+1 1111111111
			</div>			
			
		<?php
			
			$query = "update card set ".$id."='$value' where id='$_SESSION[id]' ";
			mysqli_query($con, $query);
			
		}
		
		if($id == 'cnfs') {
			
			$_SESSION['fs5'] = $value;	
			?> 
			  
			 <div style="font-size:<?php echo $_SESSION['fs5']; ?>px; <?php if(isset($_SESSION['mt5'])) { ?> margin-top:<?php echo $_SESSION['mt5'] ?>px;<?php } ?> <?php if(isset($_SESSION['ml5'])) { ?> margin-left:<?php echo $_SESSION['ml5'] ?>px;<?php } ?> <?php if(isset($_SESSION['fc5'])) { ?> color:<?php echo $_SESSION['fc5'] ?>;<?php } ?>">
			 +1 1111111111
			</div> 
			  
		<?php
			
			$query = "update card set ".$id."='$value' where id='$_SESSION[id]' ";
			mysqli_query($con, $query);
			
		}
		
		if($id == 'cnfc') {
			
			$_SESSION['fc5'] = $value;	
			?> 
			
			<div style="color:<?php echo $_SESSION['fc5']; ?>; <?php if(isset($_SESSION['mt5'])) { ?> margin-top:<?php echo $_SESSION['mt5'] ?>px;<?php } ?> <?php if(isset($_SESSION['fs5'])) { ?> font-size:<?php echo $_SESSION['fs5'] ?>px;<?php } ?> <?php if(isset($_SESSION['ml5'])) { ?> margin-left:<?php echo $_SESSION['ml5'] ?>px;<?php } ?>">
			+1 1111111111
			</div>
			
		<?php
			
			$query = "update card set ".$id."='$value' where id='$_SESSION[id]' ";
			mysqli_query($con, $query);
			
		}
			
	}

	/********************************************* Code for Email Field **********************************************/

	if(isset($_POST['EmailInputId'])) {
		
		$id = $_REQUEST['EmailInputId'];
		$value = $_REQUEST['EmailInputValue'];
		
		if($id == 'eml') {
			
			$_SESSION['ml6'] = $value;
			?> 
			
			<div style="margin-left:<?php echo $_SESSION['ml6']; ?>px; <?php if(isset($_SESSION['mt6'])) { ?> margin-top:<?php echo $_SESSION['mt6'] ?>px;<?php } ?> <?php if(isset($_SESSION['fs6'])) { ?> font-size:<?php echo $_SESSION['fs6'] ?>px;<?php } ?> <?php if(isset($_SESSION['fc6'])) { ?> color:<?php echo $_SESSION['fc6'] ?>;<?php } ?>">
			email@ecards.com
			</div>
			
		<?php
			
			$query = "update card set ".$id."='$value' where id='$_SESSION[id]' ";
			mysqli_query($con, $query);
			
		}
		
		if($id == 'emt') {
			
			$_SESSION['mt6'] = $value;	
			?> 
			
			<div style="margin-top:<?php echo $_SESSION['mt6']; ?>px; <?php if(isset($_SESSION['ml6'])) { ?> margin-left:<?php echo $_SESSION['ml6'] ?>px;<?php } ?> <?php if(isset($_SESSION['fs6'])) { ?> font-size:<?php echo $_SESSION['fs6'] ?>px;<?php } ?> <?php if(isset($_SESSION['fc6'])) { ?> color:<?php echo $_SESSION['fc6'] ?>;<?php } ?>">
			email@ecards.com
			</div>			
			
		<?php
			
			$query = "update card set ".$id."='$value' where id='$_SESSION[id]' ";
			mysqli_query($con, $query);
			
		}
		
		if($id == 'efs') {
			
			$_SESSION['fs6'] = $value;	
			?> 
			  
			 <div style="font-size:<?php echo $_SESSION['fs6']; ?>px; <?php if(isset($_SESSION['mt6'])) { ?> margin-top:<?php echo $_SESSION['mt6'] ?>px;<?php } ?> <?php if(isset($_SESSION['ml6'])) { ?> margin-left:<?php echo $_SESSION['ml6'] ?>px;<?php } ?> <?php if(isset($_SESSION['fc6'])) { ?> color:<?php echo $_SESSION['fc6'] ?>;<?php } ?>">
			 email@ecards.com
			</div> 
			  
		<?php
			
			$query = "update card set ".$id."='$value' where id='$_SESSION[id]' ";
			mysqli_query($con, $query);
			
		}
		
		if($id == 'efc') {
			
			$_SESSION['fc6'] = $value;	
			?> 
			
			<div style="color:<?php echo $_SESSION['fc6']; ?>; <?php if(isset($_SESSION['mt6'])) { ?> margin-top:<?php echo $_SESSION['mt6'] ?>px;<?php } ?> <?php if(isset($_SESSION['fs6'])) { ?> font-size:<?php echo $_SESSION['fs6'] ?>px;<?php } ?> <?php if(isset($_SESSION['ml6'])) { ?> margin-left:<?php echo $_SESSION['ml6'] ?>px;<?php } ?>">
			email@ecards.com
			</div>
			
		<?php
			
			$query = "update card set ".$id."='$value' where id='$_SESSION[id]' ";
			mysqli_query($con, $query);
			
		}
		
		/****************************************** Code for Price field **********************************************/
		
		if(isset($_POST['PriceInputId'])) {
			
			$qu = "update card set price = '$_POST[PriceInputValue]' where id='$_SESSION[id]' ";
			mysqli_query($con, $qu);
			
		}	
		
	}

?>
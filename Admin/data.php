<?php

	session_start();

	$user = "root";
	$pass = "";
	$database = "ECards";
	$host = "localhost";
	
	$con = mysqli_connect($host, $user, $pass, $database);

if(isset($_POST['cmt'])){
	echo "
		<div style='margin-left:$_POST[cml]px; margin-top: $_POST[cmt]px; color: $_POST[cfc]; font-size: $_POST[cfs]px;'>
		Demo Company
		</div>";
	
	$query = " update card set cmt='$_POST[cmt]', cml='$_POST[cml]', cfs='$_POST[cfs]', cfc='$_POST[cfc]' where id='$_SESSION[id]' ";
	
	mysqli_query($con, $query);
	
	
}

if(isset($_POST['nmt'])){
	echo "
		<div style='color:white; margin-left:$_POST[nml]px; margin-top: $_POST[nmt]px; color: $_POST[nfc]; font-size: $_POST[nfs]px;'>
		Demo Name
	</div>";
	
	$query = " update card set nmt='$_POST[nmt]', nml='$_POST[nml]', nfs='$_POST[nfs]', nfc='$_POST[nfc]' where id='$_SESSION[id]' ";
	
	mysqli_query($con, $query);
}

if(isset($_POST['a1mt'])){
	echo "
		<div style='color:white; margin-left:$_POST[a1ml]px; margin-top: $_POST[a1mt]px; color: $_POST[a1fc]; font-size: $_POST[a1fs]px;'>
		Demo address 1
	</div>";
	
	$query = " update card set a1mt='$_POST[a1mt]', a1ml='$_POST[a1ml]', a1fs='$_POST[a1fs]', a1fc='$_POST[a1fc]' where id='$_SESSION[id]' ";
	
	mysqli_query($con, $query);
}

if(isset($_POST['a2mt'])){
	echo "
		<div style='color:white; margin-left:$_POST[a2ml]px; margin-top: $_POST[a2mt]px; color: $_POST[a2fc]; font-size: $_POST[a2fs]px;'>
		Demo address 2
	</div>";
	
	$query = " update card set a2mt='$_POST[a2mt]', a2ml='$_POST[a2ml]', a2fs='$_POST[a2fs]', a2fc='$_POST[a2fc]' where id='$_SESSION[id]' ";
	
	mysqli_query($con, $query);
}

if(isset($_POST['cnmt'])){
	echo "
		<div style='color:white; margin-left:$_POST[cnml]px; margin-top: $_POST[cnmt]px; color: $_POST[cnfc]; font-size: $_POST[cnfs]px;'>
		1234567890
	</div>";
	
	$query = " update card set cnmt='$_POST[cnmt]', cnml='$_POST[cnml]', cnfs='$_POST[cnfs]', cnfc='$_POST[cnfc]' where id='$_SESSION[id]' ";
	
	mysqli_query($con, $query);
}

if(isset($_POST['emt'])){
	echo "
		<div style='color:white; margin-left:$_POST[eml]px; margin-top: $_POST[emt]px; color: $_POST[efc]; font-size: $_POST[efs]px;'>
		Demo@demomail.com
	</div>";
	
	$query = " update card set emt='$_POST[emt]', eml='$_POST[eml]', efs='$_POST[efs]', efc='$_POST[efc]' where id='$_SESSION[id]' ";
	
	mysqli_query($con, $query);
}



?>
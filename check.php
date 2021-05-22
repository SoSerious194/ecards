<?php session_start();
if(isset($_POST['signupBtn'])) {
			
	$user="root";
	$pass='';
	$database="ecards";
	$host="localhost";
	
	$con=mysqli_connect($host, $user, $pass,$database);
	$username = $_POST['username'];
	$email = $_POST['email'];
	$password = $_POST['password'];
			
	if($username != null && $email != null && $password != null) {
				
		$SelectQuery = "select * from user_login where email ='".$email."' ";
		$quRes = mysqli_query($con,$SelectQuery);
			if(mysqli_num_rows($quRes) <= 0) {
				
					$Insertquery = "insert into user_login(name, email, password) values('".$username."', '".$email."', '".$password."')";
				
					if(mysqli_query($con,$Insertquery)) {
					
						echo "<script>
						alert('Account Created Successfully!');
						window.location='login.php';
						</script>";
					
					} else {
						
						echo "<script>
						alert('There was some problem. Please Try again..');
						window.location='login.php';
						</script>";
						
					}
			}
				 else {
					
					echo "<script>
					alert('User Already Exists. Please Login');
					window.location='login.php';
					</script>";
					
					 
				}
				
			}
			
		}
	
		if(isset($_POST['loginBtn'])) {
			
			$user="root";
			$pass="";
			$database="ECards";
			$host="localhost";
	
			$con=mysqli_connect($host, $user, $pass, $database);
			
			$loginEmail = $_POST['loginEmail'];
			$loginPassword = $_POST['loginPassword'];
			
			if($loginEmail != null && $loginPassword != null) {
				
				$loginQuery =  "select * from user_login where email = '".$loginEmail."' and password = '".$loginPassword."' ";
				$loginRes = mysqli_query($con,$loginQuery);
				
				if($res=mysqli_fetch_array($loginRes) ) {
					
					$user_id = $res[0];
					$_SESSION['user_id']=$user_id;
					header("location: index.php");
					
				} else {
					
					echo "<script>
					alert('No user found');
					window.location='login.php';
					</script>";
					
				}
				
			}
			
		}


	?>
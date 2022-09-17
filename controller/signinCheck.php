<?php

	session_start();
	require_once('../model/userModel.php');
	
	
	

	if(isset($_POST['submit'])){


		$_SESSION["loggedinuser"] = $_POST['username'];

		$username 	= $_POST['username'];
		$password 	= $_POST['password'];
		
		$row = getUserByName($username);
		$type = $row['type'];

		if($username == "" || $password == ""){
			echo "Please fill up all fields!";

		}else{
			
			// validating user			
			$status = validateUser($username, $password);

			if($status){
				setcookie('status', 'true', time()+(3600 * 24 * 365), '/');
				setcookie('username', $username, time()+(3600 * 24 * 365), '/');
				setcookie('password', $password, time()+(3600 * 24 * 365), '/');
				$_SESSION["current_username"] = $username;
				
				if($type == 'admin'){
					header('location: ../view/dashboard.php');
				}
				if($type == 'coordinator'){
					echo "<script type ='text/JavaScript'>";  
      				echo "alert('Login success');";  
      				echo "window.location = '../view/signin.php';";  
      				echo "</script>";   
      				//header('location: ../view/signin.php');
				}

			}else{
				//echo "Wrong Credentials...";
				$_SESSION["wrongCredentials"] = true;
				header('location: ../view/signin.php');
			}
		}
	}
?>


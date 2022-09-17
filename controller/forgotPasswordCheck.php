<?php

	require_once('../model/userModel.php');
	
	if(isset($_POST['submit'])){

		$username    	= $_POST['username'];
		$email    		= $_POST['email'];
		$newPass        = $_POST['newPass'];
        $rePass         = $_POST['rePass'];
        

		$flag = true;

		if(empty($username) || empty($email) || empty($newPass) || empty($rePass)){
			
			echo "Please fill up all the fields!\n";
			$flag = false;

		}else{

			$row = getUserByName($username);

			// password validation
            if($username != $row['username'] || $email != $row['email']){
                echo "User details do not match! Try again...";
                $flag = false;

            }else{
                if($newPass != $rePass){
                    echo "New Password and Retyped Passwords do not match! Try again...";
                    $flag = false;

                }else{
                    if (strlen($newPass) < 8) {
                        echo "Password must not be less than eight (8) characters!\n";
                        $flag = false;
                    }

                    $flagChar = false;
                    for ($itr = 0; $itr < strlen($newPass); $itr++) {
                        if (($newPass[$itr] === '@')
                            || ($newPass[$itr] === '#')
                            || ($newPass[$itr] === '$')
                            || ($newPass[$itr] === '%')
                        ) {
                            $flagChar = true;
                            break;
                        }
                    }
                    if ($flagChar == false) {
                        echo "Password must contain at least one of the special characters (@, #, $, %)\n";
                    }
                }
            }

			if($flag == true){
				
				// updating the new password into db

				$status = updateForgotPassword($newPass, $username);
				if($status){
					header('location: ../view/signin.php');

				}else{
					echo "Update Error! Try Again...";
				}
			}
			
		}
	}
?>
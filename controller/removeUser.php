<?php

	require_once('../model/userModel.php');
	$username=$_GET['username'];
	$status = deleteUser($username);				

	if($status){
		header('location: ../view/manageUsers.php');
	}else{
		echo "Error! Process couldn't be completed, try again...";
	}

?>
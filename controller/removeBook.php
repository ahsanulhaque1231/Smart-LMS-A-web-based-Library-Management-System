<?php

	require_once('../model/bookModel.php');
	$bookID = $_GET['bookID'];
	$status = deleteBook($bookID);				

	if($status){
		header('location: ../view/manageBookInventory.php');
	}else{
		echo "Error! Process couldn't be completed, try again...";
	}

?>
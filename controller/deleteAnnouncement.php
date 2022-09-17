<?php

	require_once('../model/announcementModel.php');
	$announcementId=$_GET['announcementId'];
	$status = deleteAnnouncement($announcementId);				

	if($status){
		header('location: ../view/announcements.php');
	}else{
		echo "Error! Process couldn't be completed, try again...";
	}

?>
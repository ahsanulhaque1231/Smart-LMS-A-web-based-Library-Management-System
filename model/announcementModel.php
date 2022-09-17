<?php
	
	require_once('db.php');

	function insertAnnouncement($announcement){
		$conn = getConnection();
		$sql = "insert into announcements (id, username, content)
        values('".$announcement['id']."', '".$announcement['username']."', '".$announcement['content']."')";

		if(mysqli_query($conn, $sql)){
			return true;
		}else{
			return false;
		}
	}

    function getAllAnnouncement(){
		$conn = getConnection();
		$sql = "select * from announcements";
		$result = mysqli_query($conn, $sql);
		$announcement = [];

		while ($row = mysqli_fetch_assoc($result)) {
			array_push($announcement, $row);
		}

		return $announcement;
	}


	function deleteAnnouncement($announcementId){
		$conn = getConnection();
		$sql = "delete from announcements where entry='".$announcementId."'";
		
		if(mysqli_query($conn, $sql)){
			return true;
		}else{
			return false;
		}
	}

?>
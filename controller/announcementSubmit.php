<?php

	require_once('../model/announcementModel.php');
    require_once('../model/userModel.php');
	
	if(isset($_POST['submit'])){

        $content = $_POST['content'];        

        $username = $_COOKIE['username'];
        $row = getUserByName($username);

		$flag = true;


		if(empty($content)){
			
			echo "Fill up the content!\n";
			$flag = false;

		}else{

            // Content Validation
            if(strlen($content) > 300){
                echo "Your content should be within 300 characters limit";
                $flag = false;
            }
        

			if($flag == true){
			    
				// inserting the valid data into db
                $announcement = [
                    'id'            => $row['id'],
                    'username' 		=> $username,
                    'content'       => $content
                ];

				$status = insertAnnouncement($announcement);

				if($status){
					if($row['type'] == 'admin'){
						header('location: ../view/announcements.php');
					}

				}else{
					echo "Insertion Error! Try Again...";

				}
			}else{
                echo "Something's wrong...Try again";

            }
			
		}
	}
?>
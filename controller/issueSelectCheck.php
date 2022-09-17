<?php

	require_once('../model/issuedModel.php');
    require_once('../model/bookModel.php');

	if(isset($_POST['submit'])){

		$issueID 	        = $_POST['issueID'];
        $username           = $_GET['username'];
		$bookname 		    = $_POST['bookname'];
        $day1               = $_POST['dd1'];
        $month1             = $_POST['mm1'];
        $year1              = $_POST['yyyy1'];
        $day2               = $_POST['dd2'];
        $month2             = $_POST['mm2'];
        $year2              = $_POST['yyyy2'];
		

		$flag = true;
		
		
			// Date Validation
			if(($day1 > 0 && $day1 <= 31) && ($month1 > 0 && $month1 <= 12) && ($year1 >= 1700 && $year1 <= 2022)){
				$issuedDate = $year1.'-'.$month1.'-'.$day1;

			}else{
				echo "Please put a valid date (i.e., dd: 01-31, mm: 01-12, yyyy: 1700-2022)\n";
                $flag = false;
			}

            if(($day2 > 0 && $day2 <= 31) && ($month2 > 0 && $month2 <= 12) && ($year2 >= 1700 && $year2 <= 2022)){
				$returnedDate = $year2.'-'.$month2.'-'.$day2;

			}else{
				echo "Please put a valid date (i.e., dd: 01-31, mm: 01-12, yyyy: 1700-2022)\n";
                $flag = false;
			}
			
			$flagIssueIDAvailable = validateIssueID($issueID);
            $flagBookFound = getBookByName($bookname);

            if($flagBookFound){

                if(($flag == true) && ($flagIssueIDAvailable != true)){
                    
                    // Storing the valid data into db

                    $issue = [
                        'issueID' 		    => $issueID,
                        'username' 		    => $username,
                        'bookname'		    => $bookname,
                        'issuedDate' 		=> $issuedDate,
                        'returnedDate'		=> $returnedDate,
                    ];
                    
                    $status = insertIssue($issue);

                    if($status){
                        header('location: ../view/manageIssuedBook.php');

                    }else{
                        echo "Database Error! Try again.";
                    }
                }else{
                    echo "Issue ID not available, try something else...";
                }

            }else{
                echo "Error! Book is not found!";
            }
    }
?>
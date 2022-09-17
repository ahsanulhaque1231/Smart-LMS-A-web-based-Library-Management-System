<?php

    require_once('../model/bookModel.php');
    require_once('../model/issuedModel.php');
    require_once('../model/userModel.php');
    $book = getAllBook();
    $sqlcomm = "SELECT DISTINCT author FROM book";
    $author = runSQLBook($sqlcomm);
    $sqlcomm = "SELECT DISTINCT category FROM book";
    $category = runSQLBook($sqlcomm);
    $issued = getAllIssue();
    $bookCount =sizeof($book);
    $authorCount =sizeof($author);
    $categoryCount =sizeof($category);


	$output='<table border="1" width=100%> <tr><th>Book Count</th> <th>Author Count</th><th>Category Count</th></tr>';

	$output.='<tr><td>'.$bookCount.'</td><td>'.$authorCount.'</td><td>'.$categoryCount.'</td></tr>';
		
	$output.='</table>';
	echo $output;
	
	

?>

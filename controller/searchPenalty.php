<?php

    $search = $_REQUEST['search'];

    if($search !== ""){

        $conn = mysqli_connect('localhost', 'root', '', 'lmsdb');
        $sql = "select * from penalty WHERE concat(issueID, username, bookname, issuedDate, returnedDate) like '%$search%'";
    	$result = mysqli_query($conn, $sql);
        $row_count = mysqli_num_rows($result);

        if($row_count > 0){
            $response = "<table border=10>
                            <tr>
                                <th>Issue ID</th>
                                <th>Username</th>
                                <th>Book Name</th>
                                <th>Issued Date</th>
                                <th>Return Date</th>
                                <th>amount</th>
                            </tr>";

            while ($row = mysqli_fetch_assoc($result)) {
                $response .= "	<tr>
                                    <td>".$row['issueID']."</td>
                                    <td>".$row['username']."</td>
                                    <td>".$row['bookname']."</td>
                                    <td>".$row['issuedDate']."</td>
                                    <td>".$row['returnedDate']."</td>
                                    <td>".$row['amount']."</td>
                                </tr>";
                }
            $response .= "</table>";

    	    echo $response;

        }else{
            echo "No user found";
        }

    }

?>
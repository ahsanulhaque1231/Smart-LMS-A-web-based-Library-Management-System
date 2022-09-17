<?php

    $search = $_REQUEST['search'];

    if($search !== ""){

        $conn = mysqli_connect('localhost', 'root', '', 'lmsdb');
        $sql = "select * from issuedstatus WHERE concat(issueID, username, bookname, issuedDate, returnedDate) like '%$search%'";
    	$result = mysqli_query($conn, $sql);
        $row_count = mysqli_num_rows($result);

        if($row_count > 0){
            $response = "

            <style>

            #main_content th {
            border:1px solid #b3adad;
            text-align:center;
            padding:20px;
            background: #fffff1;
            color: black;
    }

            #main_content td {
            border:1px solid #b3adad;
            text-align:center;
            padding:20px;
            background: #fffff1;
            color: black;
    }

            </style>

            <table border=10 style='text-align: center;'>
                            <tr>
                                <th>Issue ID</th>
                                <th>Username</th>
                                <th>Book Name</th>
                                <th>Issued Date</th>
                                <th>Return Date</th>
                            </tr>";

            while ($row = mysqli_fetch_assoc($result)) {
                $response .= "	<tr>
                                    <td>".$row['issueID']."</td>
                                    <td>".$row['username']."</td>
                                    <td>".$row['bookname']."</td>
                                    <td>".$row['issuedDate']."</td>
                                    <td>".$row['returnedDate']."</td>
                                </tr>";
                }
            $response .= "</table>";

    	    echo $response;

        }else{
            echo "No issue found";
        }
    }
?>
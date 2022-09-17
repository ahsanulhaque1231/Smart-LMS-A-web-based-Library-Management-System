<?php

    $search = $_REQUEST['search'];

    if($search !== ""){

        $conn = mysqli_connect('localhost', 'root', '', 'lmsdb');
        $sql = "select * from user WHERE concat(id, username, type, fullname, email) like '%$search%'";
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

            <table border=10>
                            <tr>
                                <th>#</th>
                                <th>Username</th>
                                <th>Full Name</th>
                                <th>Gender</th>
                                <th>Email</th>
                                <th>Date of Birth</th>
                                <th>User Type</th>
                            </tr>";

            while ($row = mysqli_fetch_assoc($result)) {
                $response .= "  <tr>
                                    <td>".$row['id']."</td>
                                    <td>".$row['username']."</td>
                                    <td>".$row['fullname']."</td>
                                    <td>".$row['gender']."</td>
                                    <td>".$row['email']."</td>
                                    <td>".$row['dob']."</td>
                                    <td>".$row['type']."</td>
                                </tr>";
                }
            $response .= "</table>";

            echo $response;

        }else{
            echo "Not found";
        }
    }

    

?>
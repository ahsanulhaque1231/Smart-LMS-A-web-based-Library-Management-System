<?php

    //require_once('../model/bookModel.php');

    $search = $_REQUEST['search'];

    if($search !== ""){
        $conn = mysqli_connect('localhost', 'root', '', 'lmsdb');
        $sql = "select * from book WHERE concat(bookID, bookname, author, category) like '%$search%'";
        $result = mysqli_query($conn, $sql);
        $row_cnt = mysqli_num_rows($result);

    if($row_cnt > 0){
        $response = "<style>


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
                            <th>bookID</th>
                            <th>Book Name</th>
                            <th>Category</th>
                            <th>Author</th>
                            <th>Published</th>
                            <th>Price</th>
                        </tr>";

        while ($row = mysqli_fetch_assoc($result)) {
            $response .= "  <tr>
                                <td>".$row['bookID']."</td>
                                <td>".$row['bookname']."</td>
                                <td>".$row['category']."</td>
                                <td>".$row['author']."</td>
                                <td>".$row['published']."</td>
                                <td>".$row['price']."</td>
                            </tr>";
            }
        $response .= "</table>";

        echo $response;

    }else{
        echo "No data found";
    }
    }

?>
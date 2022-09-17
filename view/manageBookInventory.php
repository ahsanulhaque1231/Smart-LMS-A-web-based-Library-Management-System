<?php
	if(isset($_COOKIE['status'])){
?>

<?php
	$title = "Manage Book Inventory";
	include('header.php');
    require_once('../model/bookModel.php');
    $bookList = getAllBook();
?>

<?php include('navBar.php')?>

<head>
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

    #main_content {
            background-color: #FDF6E3;
            border-radius: 10px;

    }

    </style>
</head>



    

    <!-- main panel -->
    <div id="main_content" style="font-family: arial; align-items: center; text-align: center;border-radius: 5px;">
        <!-- title -->
        <span style="font-size: 30px;">
            <b><br><br>Manage Book Inventory<br><br> </b>
        </span>
        <br>


        <script type="text/javascript" src="../controller/js/searchBook.js"></script>
        <!-- search box -->
        <p>"Search by book Id, book name, author, category"</p>
        <input type="text" id="search" onkeyup="searchBook()" placeholder="Search" style="font-size: 20px;">
        <button type="button" onclick="searchBook()"><i class="fa fa-search" style="font-size: 20px;"></i></button>
        <p id="result" align="center"></p>
        <br><br>
        
        <!-- table for book list -->
        <table border="10" align="center">
            <caption style="font-size: 30px;">Listed Books<br><br></caption>
            
            <tr>
                <th> Book ID </th>
                <th> Book Name </th>
                <th> Category </th>
                <th> Author </th>
                <th> Published Date </th>
                <th> Price (taka) </th>
                <th> </th>
            </tr>

            <?php for($i = 0; $i < count($bookList); $i++){ ?>
            <tr>
                <td> <?=$bookList[$i]['bookID']?> </td>
                <td> <?=$bookList[$i]['bookname']?> </td>
                <td> <?=$bookList[$i]['category']?> </td>
                <td> <?=$bookList[$i]['author']?> </td>
                <td> <?=$bookList[$i]['published']?> </td>
                <td> <?=$bookList[$i]['price']?> </td>
                <td>
                    <a href="editBook.php?bookID=<?=$bookList[$i]['bookID']?>"> Edit</a> | 
				    <a href="../controller/removeBook.php?bookID=<?=$bookList[$i]['bookID']?>"> Remove </a>
                </td>
            </tr>
            <?php } ?>

        </table>
        <br><br><br>

        <!-- add book -->
        <a href="addBooks.php" style="text-decoration: none;">
            <span style="font-size: 20px; background-color: #caefff; border: none; color: black; padding: 10px 10px; border-radius: 5px;"><b> Add Books </b></span>
        </a>
        <br><br><br><br><br><br><br><br><br>

    </div>


<?php include('footer.html')?>

<?php
	}else{
		header('location: signin.php');
	}
?>

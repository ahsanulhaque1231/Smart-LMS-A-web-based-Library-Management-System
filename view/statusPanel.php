<?php
	
    if(isset($_COOKIE['status'])){
?>
<?php
	$title = "Admin Dashboard";
	include('header.php');
    require_once('../model/bookModel.php');
    require_once('../model/issuedModel.php');
    require_once('../model/userModel.php');
?>

<?php include('navBar.php')?>


<html>
    <head>


        
    <style>


    #main_table td {
            border:1px solid #b3adad;
            text-align:center;
            padding:20px;
            background: #fffff1;
            color: #3130ff;
    }

    #main_content {
        background-color: #FDF6E3;
    }

    </style>


    

    </head>

    

    <!-- main panel -->
    <div id="main_content" style="height: 700px; font-family: arial; align-items: center; text-align: center;">
        <br>
        <!-- title -->
        <span style="color: black; font-size: 30px">
            <br>
            <b>Admin Dashboard</b>
            <br><br>
            
        </span>
        <br><br><br>



        <!-- registered users -->
        
        <?php
            $user = getAllUser();
        ?>
        
        <!-- listed books -->
        
        <?php
            $book = getAllBook();
        ?>
        
        <!-- listed authors -->
        
        <?php
            $sqlcomm = "SELECT DISTINCT author FROM book";
            $author = runSQLBook($sqlcomm);
        ?>
        
        <!-- listed categories -->
        
        <?php
            $sqlcomm = "SELECT DISTINCT category FROM book";
            $category = runSQLBook($sqlcomm);
        ?>
        
        <!-- book issued -->
        
        <?php
           $issued = getAllIssue();
        ?>
        


        

    <div id="main_table">
    <table align="center" border="10" style="">
            <tr>
                <td>
                    <b>Registered Users</b>
                </td>

                <td>
                    <?=sizeof($user)?>
                </td>
            </tr>

            <tr>
                <td>
                    <b>Listed Books</b>
                </td>

                <td>
                    <?=sizeof($book)?>
                </td>
            </tr>

            <tr>
                <td>
                    <b>Listed Authors</b>
                </td>

                <td>
                    <?=sizeof($author)?>
                </td>
            </tr>

            <tr>
                <td>
                    <b>Listed Categories</b>
                </td>

                <td>
                    <?=sizeof($category)?>
                </td>
            </tr>

            <tr>
                <td>
                    <b>Book Issued</b>
                </td>

                <td>
                    <?=sizeof($issued)?>
                </td>
            </tr>

            
        </table>
    </div>



    </div>


</html>
    
<?php include('footer.html')?>

<?php		
	}else{
		header('location: signin.php');
	}
?>

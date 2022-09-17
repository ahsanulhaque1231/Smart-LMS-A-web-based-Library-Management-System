<?php
	if(isset($_COOKIE['status'])){
?>

<?php
	$title = "Add Books";
	include('header.php');
?>

<?php include('navBar.php')?>


<head>
<style>

    #main_content {
            background-color: #FDF6E3;
            border-radius: 10px;

    }

    </style>
</head>


    <div id="main_content" style="font-family: arial; align-items: center; text-align: center;">
        
        <br><br><br>
        <span style="font-size: 30px;">
            <b> Add New Books </b>
        </span>
        <br><br><br><br><br>

        <script type="text/javascript" src="../controller/js/addBookCheck.js"></script>

        <form id="addBookForm" method="POST" onsubmit="return validationAddBook()" action="../controller/addBookCheck.php" enctype="multipart/form-data">
            <table align="center">
                <tr>
                    <td>
                        Book Id
                    </td>
                    <td>
                        <input type="number" name="bookID" value="">
                    </td>
                </tr>

                <tr>
                    <td colspan="3">
                        <hr><br>
                    </td>
                </tr>

                <tr>
                    <td>
                        Book Name
                    </td>
                    <td>
                        <input type="text" name="bookname" value="">
                    </td>
                </tr>
                
                <tr>
                    <td colspan="3">
                        <hr><br>
                    </td>
                </tr>
                
                <tr>
                    <td>
                        Select Category
                    </td>
                    <td>
                        <select name="category" id="category">
                            <option value="" selected>not selected</option>
                            <option value="story_book">Story book</option>
                            <option value="classics">Classics</option>
                            <option value="self_help">Self Help</option>
                            <option value="academic_book">Academic Book</option>
                            <option value="others">Self Help</option>
                        </select>
                    </td>
                </tr>

                <tr>
                    <td colspan="3">
                        <hr><br>
                    </td>
                </tr>
                
                <tr>
                    <td>
                        Author Name
                    </td>
                    <td><input type="text" name="author" value=""></td>
                </tr>
                
                <tr>
                    <td colspan="3">
                        <hr><br>
                    </td>
                </tr>

                <tr>
                    <td>
                        Published Date
                    </td>
                    <td><input type="number" name="dd" style="width:40px;" value=""> / <input type="number" name="mm" style="width:40px;" value="">	/ <input type="number" name="yyyy" style="width:60px;" value=""> <i>(dd/mm/yyyy)</i></td>
                </tr>

                <tr>
                    <td colspan="3">
                        <hr><br>
                    </td>
                </tr>

                <tr>
                    <td>
                        Choose a Cover Photo
                    </td>
                    <td><input type="file" name="picture"></td>
                </tr>

                <tr>
                    <td colspan="3">
                        <hr><br>
                    </td>
                </tr>

                <tr>
                    <td>
                        Price
                    </td>
                    <td><input type="number" name="price" value=""></td>
                </tr>

                <tr>
                    <td colspan="3">
                        <hr><br>
                    </td>
                </tr>
                
                <tr>
                    <td colspan="3" align="center">
                        <input type="submit" name="submit" value="Add" style="font-size: 20px;">
                    </td>
                </tr>
            </table>
	</form>
    <br><br><br><br><br><br><br><br><br>
    </div>


<?php include('footer.html')?>

<?php
	}else{
        header('location: signin.php');
    }
?>
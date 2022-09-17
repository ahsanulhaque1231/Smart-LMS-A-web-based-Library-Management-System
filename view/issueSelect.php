<?php
	if(isset($_COOKIE['status'])){
?>

<?php
	$title = "Issue Book";
	include('header.php');
    require_once('../model/userModel.php');
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
        <br><br><br><br>
        <span style="font-size: 30px;">
            <b> Fill up form to Issue Book </b>
        </span>
        <br><br><br><br>

            <?php 
                $username=$_GET['username'];
                $row = getUserByName($username);
            ?>

            <script type="text/javascript" src="../controller/js/issueFormCheck.js"></script>

            <form id="issueForm" method="post" onsubmit="return validationIssue()" action="../controller/issueSelectCheck.php?username=<?=$row['username']?>">
                <table align="center">
                    <tr>
                        <td>
                            Issue ID
                        </td>
                        <td>
                            <input type="int" name="issueID" value=""> &nbsp; &nbsp;
                        </td>
                    </tr>
                    
                    <tr>
                        <td colspan="2">
                            <hr>
                        </td>
                    </tr>

                    <tr>
                        <td>
                            username
                        </td>
                        <td>
                           <?=$row['username']?>
                        </td>
                    </tr>
                    
                    <tr>
                        <td colspan="2">
                            <hr>
                        </td>
                    </tr>
                    
                    <!-- Select Option Implementing -->
                    <?php
                        require_once('../model/bookModel.php');
                        $row = getAllBook();

                    ?>
                    <tr>
                        <td>
                            Book Name
                        </td>
                        <td>
                            <select name="bookname" id="">
                                <?php for($i = 0; $i < count($row); $i++){?>
                                    <option value="<?=$row[$i]['bookname']?>"><?=$row[$i]['bookname']?></option>
                                <?php }?>
                            </select>
                        </td>
                    </tr>
                    
                    <tr>
                        <td colspan="2">
                            <hr>
                        </td>
                    </tr>
                    
                    <tr>
                        <td colspan="2">
                            <fieldset>
                            <legend>Issue Date</legend>
                            <input type="number" name="dd1" style="width:40px;" value=""> / <input type="number" name="mm1" style="width:40px;" value="">	/ <input type="number" name="yyyy1" style="width:60px;" value=""> <i>(dd/mm/yyyy)</i>
                        </td>
                    </tr>
                    
                    <tr>
                        <td colspan="2">
                            <hr>
                        </td>
                    </tr>

					<tr>
                        <td colspan="2">
                            <fieldset>
                            <legend>Probable Return Date</legend>
                            <input type="number" name="dd2" style="width:40px;" value=""> / <input type="number" name="mm2" style="width:40px;" value="">	/ <input type="number" name="yyyy2" style="width:60px;" value=""> <i>(dd/mm/yyyy)</i>
                        </td>
                    </tr>
                    
                    <tr>
                        <td colspan="2">
                            <hr>
                        </td>
                    </tr>
                    
                    <tr>
                        <td colspan="2" align="center">
                            <input type="submit" name="submit" value="Submit" style="font-size: 20px;">
                        </td>
                    </tr>
                </table>
            </form>
            <br><br><br><br><br><br>
    </div>


<?php include('footer.html')?>

<?php
	}else{
        header('location: signin.php');
    }
?>
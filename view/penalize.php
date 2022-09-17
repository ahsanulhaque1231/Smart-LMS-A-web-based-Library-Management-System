<?php
	if(isset($_COOKIE['status'])){
?>

<?php
	$title = "User Penalization";
	include('header.php');
    require_once('../model/issuedModel.php');
    $issueList = getAllIssue();
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
        
        <br><br><br><br><br>
        <span style="font-size: 30px;">
            <b> Fill Up Penalize Form </b>
        </span>
        <br><br><br><br><br>



        <?php 
            $issueID=$_GET['issueID'];
            $row = getIssueByID($issueID);
        ?>
        <form method="post" action="../controller/penalizeCheck.php?issueID=<?=$row['issueID']?>">
            <table align="center">
                <tr>
                    <td>
                        Issue ID
                    </td>
                    <td>
                        <?=$row['issueID']?>
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
                
                <tr>
                    <td>
                        Book Name
                    </td>
                    <td>
                       <?=$row['bookname']?>
                    </td>
                </tr>
                
                <tr>
                    <td colspan="2">
                        <hr>
                    </td>
                </tr>
                
                <tr>
                    <td>
                        Issued Date
                    </td>
                    <td>
                        <?=$row['issuedDate']?>
                    </td>
                </tr>
                
                <tr>
                    <td colspan="2">
                        <hr>
                    </td>
                </tr>

                <tr>
                    <td>
                        Returned Date
                    </td>
                    <td>
                        <?=$row['returnedDate']?>
                    </td>
                </tr>
                
                <tr>
                    <td colspan="2">
                        <hr>
                    </td>
                </tr>

                <tr>
                    <td>
                        Penalty Amount
                    </td>
                    <td>
                        <input type="int" name="penalty" value="">
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
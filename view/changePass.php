<?php
	if(isset($_COOKIE['status'])){
?>

<?php
	$title = "Change Password";
	include('header.php');
    require_once('../model/userModel.php');
    $username = $_COOKIE['username'];
    $row = getUserByName($username);
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
            <b> Change Password </b>
        </span>
        <br><br><br><br>

        <form method="POST" action="../controller/changePassCheck.php">
            <table align="center">
                <tr>
                    <td style="font-size: 20px;">Current Password &nbsp; &nbsp; &nbsp; &nbsp; :</td>
                    <td><input type="password" name="currentPass" value=""></td>
                </tr>
                <tr>
                    <td style="color:green; font-size: 20px;">New Password &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; :</td>
                    <td><input type="password" name="newPass" value=""></td>	
                </tr>
                <tr>
                    <td style="color:green; font-size: 20px;">Confirm New Password :</td>
                    <td><input type="password" name="rePass" value=""></td>
                </tr>
                <tr>
                    <td colspan="2">
                    <hr>
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
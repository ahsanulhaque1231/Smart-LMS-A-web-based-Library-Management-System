<?php
	if(isset($_COOKIE['status'])){
?>

<?php
	$title = "Edit User Profile";
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
            <b> Edit User Profile </b>
        </span>
        <br><br><br><br>

            <?php 
                $username=$_GET['username'];
                $row = getUserByName($username);
            ?>
            
            <script type="text/javascript" src="../controller/js/editUserCheck.js"></script>

            <form id="editUserForm" method="post" action="../controller/editUserCheck.php?username=<?=$row['username']?>" onsubmit="return validationEditUser()" enctype="multipart/form-data">
                <table align="center">
                    <tr>
                        <td>
                            Name
                        </td>
                        <td>
                            <input type="text" name="name" value="<?=$row['fullname']?>"> &nbsp; &nbsp;
                        </td>
                    </tr>
                    
                    <tr>
                        <td colspan="2">
                            <hr>
                        </td>
                    </tr>
                    
                    <tr>
                        <td>
                            Email
                        </td>
                        <td>
                            <input type="email" name="email" value="<?=$row['email']?>"> 
                            <button title="hint: sample@example.com" style="color: blue; font-size: 14px;"><b>i</b></button>
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
                            <legend>Gender</legend>
                                <input type="radio" name="gender" value="male"> Male
                                <input type="radio" name="gender" value="female"> Female
                                <input type="radio" name="gender" value="other"> Other
                            </fieldset>
                        </td>
                    </tr>
                    
                    <tr>
                        <td colspan="2">
                            <hr>
                        </td>
                    </tr>
                    
                    <tr>
                        <?php 
                            $str=$row['dob'];
                            $dob=explode("-", $str);
                            $day=$dob[2];
                            $month=$dob[1];
                            $year=$dob[0]; 
                        ?>
                        <td colspan="2">
                            <fieldset>
                            <legend>Date of Birth</legend>
                            <input type="number" name="dd" style="width:40px;" value="<?=$day?>"> / <input type="number" name="mm" style="width:40px;" value="<?=$month?>">	/ <input type="number" name="yyyy" style="width:60px;" value="<?=$year?>"> <i>(dd/mm/yyyy)</i>
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
                                <legend>Change Profile Picture</legend>
                                <input type="file" name="picture" value="<?=$row['filename']?>">
                            </fieldset>
                        </td>
                    
                    <tr>
                        <td colspan="2">
                            <hr>
                        </td>
                    </tr>                        
                    
                    <tr>
                        <td colspan="2">
                            <input type="submit" name="submit" value="Submit" style="font-size: 20px;">
                            <input type="reset" value="Reset" style="font-size: 20px;">
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
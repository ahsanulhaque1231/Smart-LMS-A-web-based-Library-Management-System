<?php
	if(isset($_COOKIE['status'])){
?>

<?php
	$title = "User Profile";
	include('header.php');
    require_once('../model/userModel.php');
    $username = $_COOKIE['username'];
    $row = getUserByName($username);
?>

<?php include('navBar.php')?>


    <!-- main panel -->
    <div id="main_content" style="background-color: #FDF6E3; font-family: arial; align-items: center; text-align: center;height: 700px;">
        <!-- title -->
        <br><br>
        <span style="font-size: 30px;">
            <b> Account Settings </b>
        </span>
        <br><br><br><br>

        <script type="text/javascript" src="../controller/js/accSettingCheck.js"></script>
        
            <form id="accForm" method="post" onsubmit="return validationAccSetting()" action="../controller/accSettingCheck.php" enctype="multipart/form-data">
                <table align="center" border="2px">
                    <tr>
                        <td>
                            Name
                        </td>
                        <td>
                            <input type="text" name="name" value="<?=$row['fullname']?>"> 
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
                                

                                <?php
                                if ($row['gender'] == 'male') {

                                   echo '<input type="radio" name="gender" value="male" checked> Male';
                                   echo '<input type="radio" name="gender" value="female"> Female';
                                   echo '<input type="radio" name="gender" value="other"> Other';

                               } else if ($row['gender'] == 'female'){
                                   echo '<input type="radio" name="gender" value="male"> Male';
                                   echo '<input type="radio" name="gender" value="female" checked> Female';
                                   echo '<input type="radio" name="gender" value="other"> Other';
                               } else {
                                   echo '<input type="radio" name="gender" value="male"> Male';
                                   echo '<input type="radio" name="gender" value="female"> Female';
                                   echo '<input type="radio" name="gender" value="other checked"> Other';
                               }
                               ?>
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
                        <td colspan="2" align="center">
                            <input type="submit" name="submit" value="Submit" style="font-size: 20px;">
                        </td>
                    </tr>
                </table>
            </form>

    </div>

<?php include('footer.html')?>

<?php
	}else{
        header('location: signin.php');
    }
?>
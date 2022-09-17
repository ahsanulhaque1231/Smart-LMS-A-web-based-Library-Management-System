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

<head>
    <style>

        #main_content {
            background-color: #FDF6E3;
            border-radius: 10px;
        }

    </style>
</head>

    

    
    <div id="main_content" style="height: 1200px; font-family: arial; align-items: center; text-align: center;">

        <br><br>
        <span style="font-size: 30px;">
            <b> Create User </b>
        </span>
        <br><br><br><br>

        
        
            <form id="signupForm" name="signupForm" method="post" enctype="multipart/form-data" style=" margin: 20px; max-width: 300px; padding: 16px; background-color: white; display: inline-block; margin-left: -10%; margin-right: -10%; text-align: left;">


            <b>Username</b>
            <input type="text" placeholder="Enter Username" name="username" id="username" style="width: 270px; padding: 10px; margin: 5px 0 22px 0; border: none; background: #f1f1f1;">

            <b>Full Name</b>
            <input type="text" placeholder="Enter Your Full Name" name="name" id="name" style="width: 270px; padding: 10px; margin: 5px 0 22px 0; border: none; background: #f1f1f1;">

            <b>Email</b>
            <input type="email" placeholder="hint: abc@outlook.com" name="email" id="email" style="width: 270px; padding: 10px; margin: 5px 0 22px 0; border: none; background: #f1f1f1;">

            <b>Select Gender</b><br>
            <input type="radio" name="gender" value="male" style="width: 30px; padding: 10px; margin: 5px 0 22px 0; border: none; background: #f1f1f1;"> Male
            <input type="radio" name="gender" value="female" style="width: 30px; padding: 10px; margin: 5px 0 22px 0; border: none; background: #f1f1f1;"> Female
            <input type="radio" name="gender" value="other" style="width: 30px; padding: 10px; margin: 5px 0 22px 0; border: none; background: #f1f1f1;"> Other <br>

            <b>Date of Birth</b><br>
            <input type="number" name="dd" id="day" value="" style="width: 50px; padding: 10px; margin: 5px 0 22px 0; border: none; background: #f1f1f1;"> / <input type="number" name="mm" id="month" style="width: 50px; padding: 10px; margin: 5px 0 22px 0; border: none; background: #f1f1f1;" value=""> / <input type="number" name="yyyy" id="year" style="width: 70px; padding: 10px; margin: 5px 0 22px 0; border: none; background: #f1f1f1;" value=""> <br><i>(dd/mm/yyyy)</i><br><br>


            <b><br>Select User Type</b>
            <select name="user_type" style="width: 270px; padding: 10px; margin: 5px 0 22px 0; border: none; background: #f1f1f1;">
                <option value="admin" selected>Admin</option>
                <option value="coordinator" selected>Co-ordinator</option>
                
            </select>

            <b>Choose a Picture</b>
            <input type="file" name="picture" id="picture" style="width: 270px; padding: 10px; margin: 5px 0 22px 0; border: none; background: #f1f1f1;">

            <b>Password</b>
            <input type="password" placeholder="Enter Password" name="password" id="password" style="width: 270px; padding: 10px; margin: 5px 0 22px 0; border: none; background: #f1f1f1;">

            <b>Confirm Password</b>
            <input type="password" placeholder="Enter Password" name="confirmPassword" id="confirmPassword" style="width: 270px; padding: 10px; margin: 5px 0 22px 0; border: none; background: #f1f1f1;">

            <br>
            <input type="submit" name="submit" value="Submit" style="background-color: #4CAF50; color: white; padding: 16px 20px; border: none; cursor: pointer; width: 100%; opacity: 0.9;font-size: 20px;">
        </form>

        <script type="text/javascript" src="../controller/js/signupCheck.js"></script>

    </div>


<?php include('footer.html')?>

<?php
	}else{
        header('location: signin.php');
    }
?>
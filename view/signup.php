
<html>

<head>
    <title>Signup</title>
    <script src="https://kit.fontawesome.com/d4036902fd.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="signin.css">
</head>

<body>

    <!-- nav bar -->
    <div id="nav_bar" style="background-color:#caefff; height: 100px; width: 100%; font-family: arial; align-items: center; text-align: center;background-image: linear-gradient(135deg, #bdc2e8 10%, #e6dee9 100%);border-radius: 5px;">

        <br>

            &nbsp; &nbsp; &nbsp; &nbsp;
            <i title="Welcome to Library Management System" class="fa fa-book" style="font-size:50px; color:black;">  </i>&nbsp; &nbsp; &nbsp; &nbsp;

            <span style="font-size: 18px;">
                <b style="font-size: 30px;">Welcome to Library Management System</b>
                <br>
                
            </span>



    </div>

<table cellpadding="7px" cellspacing="0px" id="navBar">
  <tr>
      <td>
          <a href="../index.php">Homepage</a>
      </td>
      <td>
          <a href="signin.php">Sign in</a>
      </td>
      <td>
          <a class="selected" href="signup.php">Sign up</a>
      </td>
      <td>
          <a href="aboutus.php">About us</a>
      </td>
  </tr>
  
</table>

    <!-- sign up form -->
    <div style="background-image: url('../assets/images/library.jpg'); border-radius: 5px; background-position: center; height: 980px; width: 100%; display:block; text-align: center; align-items:center;margin-top: 10px;">
        

        <form id="signupForm" name="signupForm" method="post" enctype="multipart/form-data" style="position: absolute; margin: 20px; max-width: 300px; padding: 16px; background-color: white; display: inline-block; margin-left: -10%; margin-right: -10%; text-align: left;">
            <h1>Signup</h1>

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


            <b>Select User Type</b>
            <select name="user_type" style="width: 270px; padding: 10px; margin: 5px 0 22px 0; border: none; background: #f1f1f1;">
                <option value="regular_user" selected>Regular User</option>
                
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

    </div>
    <script type="text/javascript" src="../controller/js/signupCheck.js"></script>
</body>
<?php include('footer.html') ?>
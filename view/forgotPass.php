<?php
	$title = "Forgot Password";
	include('header.php');
?>


  <head>
    
    <link rel="stylesheet" href="signin.css">
    
  </head>

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
          <a href="signup.php">Sign up</a>
      </td>
      <td>
          <a href="aboutus.php">About us</a>
      </td>
  </tr>
  
</table>

<!-- sign in form -->
<div  style="background-image: url('../assets/images/library.jpg'); background-position: center; height: 580px; width: 100%; display:block; text-align: center; align-items:center;border-radius: 5px;margin-top: 10px;">
    
    
        <form method="post" action="../controller/forgotPasswordCheck.php" style="position: absolute; margin: 20px; max-width: 300px; padding: 16px; background-color: white; display: inline-block; margin-left: -10%; margin-right: -10%; text-align: left;">
            <h1>Forgot Password</h1>

            <b>Email</b>
            <input type="email" placeholder="Enter Your Email" name="email" required style="width: 270px; padding: 15px; margin: 5px 0 22px 0; border: none; background: #f1f1f1;">

            <b>Username</b>
            <input type="username" placeholder="Enter Your Username" name="username" required style="width: 270px; padding: 15px; margin: 5px 0 22px 0; border: none; background: #f1f1f1;">

            <b>New Password </b>
            <input type="Password" placeholder="Enter Your Email" name="newPass" required style="width: 270px; padding: 15px; margin: 5px 0 22px 0; border: none; background: #f1f1f1;">

            <b>Confirm Password </b>
            <input type="Password" placeholder="Enter Your Email" name="rePass" required style="width: 270px; padding: 15px; margin: 5px 0 22px 0; border: none; background: #f1f1f1;">

            <br>
            <input type="submit" name="submit" value="Submit" style="background-color: #4CAF50; color: white; padding: 16px 20px; border: none; cursor: pointer; width: 100%; opacity: 0.9;">
            
            <br>
        </form>
    
</div>

<?php include('footer.html')?>
<?php
	session_start();
  $title = "Sign in";
	include('header.php');
  if(isset($_SESSION['wrongCredentials'])){
      echo "<script type ='text/JavaScript'>";  
      echo "alert('Wrong Credentials')";  
      echo "</script>";   
      $_SESSION['wrongCredentials']=NULL;
  }
?>

<html>
  <head>
    
    <link rel="stylesheet" href="signin.css">
    
  </head>

<body>
<!-- nav bar -->
<div id="nav_bar" style="background-color:#caefff; height: 100px; width: 100%; font-family: arial;align-items: center; text-align: center;background-image: linear-gradient(135deg, #bdc2e8 10%, #e6dee9 100%);border-radius: 5px;">
            
            <br>

            &nbsp; &nbsp; &nbsp; &nbsp;
            <i title="Welcome to Library Management System" class="fa fa-book" style="font-size:50px; color:black;">  </i>&nbsp; &nbsp; &nbsp; &nbsp;

            <span style="font-size: 18px;">
                <b style="font-size: 30px;">Welcome to Library Management System</b>
                <br>
                
            </span>

            
            <span style="margin-left:auto; margin-right:0;">
                
                
               

                
            </span>            
</div>

<table cellpadding="7px" cellspacing="0px" id="navBar">
  <tr>
      <td>
          <a href="../index.php">Homepage</a>
      </td>
      <td>
          <a class="selected" href="signin.php">Sign in</a>
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
<div  style="background-image: url('../assets/images/library.jpg'); border-radius: 5px; background-position: center; height: 800px; width: 100%; display:block; text-align: center; align-items:center;margin-top: 10px;">
    
    
        <form id="signinForm" name="signinForm" method="post" onsubmit="return validationSignin()" action="../controller/signinCheck.php" style="position: absolute; margin: 20px; max-width: 300px; padding: 16px; background-color: white; display: inline-block; margin-left: -10%; margin-right: -10%; text-align: left;">
            <h1 style="background-color: #D3D3D3; text-align: center; border-radius: 5px;padding: 16px 20px;opacity: 0.8;box-shadow:2px 3px #f0f0f0;">Login</h1>

            <div class="input1" id="input1">
            <b>Username</b>
            <br><br>
            <input type="text" placeholder="Enter Username" name="username" style="width: 270px; padding: 15px; margin: 5px 0 12px 0; border: none; background: #f1f1f1; border-radius: 4px;border-color: white;border-style: solid;">
            <i id="error1" class="fas fa-exclamation-circle"></i>
            <small>Enter Username</small>
            </div>

            <br>


            <div class="input2" id="input2">
            <b>Password</b>
            <br><br>
            <input type="password" placeholder="Enter Password" name="password" style="width: 270px; padding: 15px; margin: 5px 0 22px 0; border: none; background: #f1f1f1; border-radius: 4px;border-color: white;border-style: solid;">

            <br>

            <i id="error2" class="fas fa-exclamation-circle"></i>
            <small>Enter Password</small>
            </div>


            <br>

            <div class="buttonSubmit">
            <input type="submit" name="submit" value="Sign in" style="background-color: #4CAF50; color: white; padding: 16px 20px; border: solid; cursor: pointer; width: 100%; opacity: 0.8;   border-radius: 5px;box-shadow:2px 3px #f0f0f0;font-size: 24px;">
            </div>
            
            <br><br><br>
            &nbsp; &nbsp;<a href="signup.php">Not a User? Signup</a>
            &nbsp; &nbsp; &nbsp;
            <a href="forgotPass.php">Forgot Password?</a>

            <br><br>

        </form>
    
</div>

    <script type="text/javascript" src="../controller/js/signinCheck.js"></script>
    <script> 
      function wrongCredentials(){
        alert("Wrong Credentials");
      }
    </script>

</body>

</html>

<?php include('footer.html')?>
<?php
	$title = "Index";
	include('view/header.php');
?>

  <head>
    
    <link rel="stylesheet" href="view/index.css">
    
  </head>

        <!-- nav bar -->
        <div id="nav_bar" class="color-background-footer" style="background-color:#caefff; height: 100px; width: 100%; font-family: arial;align-items: center; text-align: center;background-image: linear-gradient(135deg, #bdc2e8 10%, #e6dee9 100%);border-radius: 5px;">
            
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
          <a class="selected" href="index.php">Homepage</a>
      </td>
      <td>
          <a href="view/signin.php">Sign in</a>
      </td>
      <td>
          <a href="view/signup.php">Sign up</a>
      </td>
      <td>
          <a href="view/aboutus.php">About us</a>
      </td>
  </tr>
  
</table>
      


<div  style="background-image: url('Admin/assets/images/library.jpg'); background-position: center; height: 580px; width: 100%; display:block; text-align: center; align-items:center;border-radius: 5px;margin-top: 10px;">
    
    
</div>



<?php include('view/footer.html')?>
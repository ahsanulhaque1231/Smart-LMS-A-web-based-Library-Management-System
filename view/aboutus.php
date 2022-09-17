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
          <a class="selected" href="aboutus.php">About us</a>
      </td>
  </tr>
  
</table>



<!-- sign in form -->
<div  style="background-image: url('../assets/images/library.jpg'); background-position: center; display:block; text-align: center; align-items:center;border-radius: 5px;margin-top: 10px;">

<br><br><br><br>

  <table border="1" align="center" width="50%" height="10%" style="font-size: 20px;">
            
      


            <tr>
            <td align="center" style="background-color: #FDF6E3;padding: 50px;text-align: justify;">
                <br><br>
                This is an online library portal to manage the challenges of a library easily and remotely. It is integrated with lastest technologies that allows you to get things done quickly.
                <br><br>
                You can easily borrow your favorite books for a certain period for very little cost in exchange.
                <br><br>
            </td>
            </tr>

            <tr>
            <td align="center" style="background-color: #FDF6E3;padding: 50px;text-align: justify;">
                Our subscriptions count is growing everyday so as our inventory. So join today to have access to all of our online library facilities. 

                <br><br>If you press below it will show you the live state of our inventory which is growing consistently. 
                <br><br>Library details<br><br>
                <button id="load">Load data</button>
                <br><br>
                <div id="main">
                </div>
            </td>
            </tr>



        </table>
    
    <script src="jquery.js"></script>
    <script>
      $(document).ready(function(){
        $("#load").on("click",function(e){
          $.ajax({
            url:"next.php",
            type:"post",
            success:function(data){
              $("#main").html(data);
            }
          });
        });
      });
    </script>
    <br><br><br><br><br><br>
</div>

<?php include('footer.html')?>

<?php 
    session_start();
    require_once('../model/userModel.php');
    $username = $_SESSION['current_username'];
    $row = getUserByName($username);

?>

<!-- upper navigation bar -->

<head>
    <style>

        .color-background-topbar {
            border-radius: 5px;
            background-image: linear-gradient(135deg, #bdc2e8 10%, #e6dee9 100%);

        }

#navBar {
    z-index: 1;
    width: 100%;
    text-align: center;
    background: #E7E7E7;
    -moz-box-shadow: 10px 10px 10px #ccc;
    -webkit-box-shadow: 10px 10px 10px #ccc;
    -ms-box-shadow: 10px 10px 10px #ccc;
    -o-box-shadow: 10px 10px 10px #ccc;
    box-shadow: 10px 10px 10px #ccc;
}

#navBar a {
    display: block;
    color: #000;
    text-decoration: none;
}

#navBar a:hover {
    color: #000;
    background: #B9B9B9;
    text-decoration: none;
    border-radius: 15px;
}

    </style>
</head>


    <div id="nav_bar" class="color-background-topbar" style="height: 100px; width: 100%; font-family: arial; display: flex; align-items: center; text-align: center;margin-bottom: 8px;border-radius: 5px;">    
        
        &nbsp; &nbsp; &nbsp; &nbsp;
        &nbsp; &nbsp; &nbsp; &nbsp;
            <i title="Welcome to Library Management System" class="fa fa-book" style="font-size:50px; color:black;">  </i>&nbsp; &nbsp; &nbsp; &nbsp;
        <!-- app name -->
        <span style="margin-left:auto; margin-right:0; font-size: 18px;">
            <b style="font-size: 40px;">LMS Portal</b>
        </span>

        <!-- icons alignment -->
        




            <span style="margin-left:auto; margin-right:0;">
            <img src="../assets/images/<?php echo $row['filename'];?>" height="50px;" width="50px" alt="Profile Photo" style="border-radius:50%; margin-top: 5px;">
            </span>
            

            <span style="margin-right:0; font-size: 18px;margin-bottom: 1px;">
            <b style="font-size: 30px;">&nbsp;&nbsp;&nbsp;  <?php echo $row['fullname']?></b>
            </span>
            &nbsp; &nbsp; &nbsp; &nbsp;  &nbsp; &nbsp;

            </span>
    </div>

<div style="padding-bottom: 15px;">

<table cellpadding="7px" cellspacing="0px" id="navBar" style="font-size:30px;border-radius: 15px;">
  <tr>
      <td width="30%">
          <a href="statusPanel.php">Status Panel</a>
      </td>
      <td>
          <a href="dashboard.php">Admin Panel</a>
      </td>
      <td width="30%">
          <a href="../controller/signout.php">Log out</a>
      </td>
  </tr>
  
</table>

</div>
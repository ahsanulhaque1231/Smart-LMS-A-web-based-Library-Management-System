<?php
    
	if(isset($_COOKIE['status'])){
?>

<?php
	$title = "Admin Home";
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




    <!-- main panel -->
    <div id="main_content" style="font-family: arial; align-items: center; text-align: center;">
        <br><br><br>

        <span style="color: black; font-size: 30px">
        Welcome to LMS Portal Admin Panel
        </span>
        
        

        <table style="width:60%;text-align: left;margin-left: 400px;margin-top: 40px; font-size:40px; padding: 50px;">
        
        

        <tr>
        <td><br>      
        <!-- Issue book -->
        <a href="issueBook.php" style="text-decoration: none;">
        <i title="Issue Book" class="fa fa-paper-plane" style="font-size:25px; color:black;">&nbsp;&nbsp;&nbsp;Issue Book</i>
        </td>


        <td><br>      
        <!-- Manage Book Inventory -->
        <a href="manageBookInventory.php" style="text-decoration: none;">
        <i title="Manage Book Inventory" class="fa fa-stack-overflow" style="font-size:25px; color:black;">&nbsp;&nbsp;&nbsp;<b>Manage Book Inventory</b></i>
        </a></i>
        </td>
        </tr>
        
        <tr>
        <td><br>
        <!-- Manage Users -->
        <a href="manageUsers.php" style="text-decoration: none;">
        <i title="Manage Users" class="fa fa-users" style="font-size:25px; color:black;">&nbsp;&nbsp;&nbsp;Manage Users</i>
        </a></i>
        </td>

        <td><br>
        <!-- Create Users -->
        <a href="createUsers.php" style="text-decoration: none;">
        <i title="Create Users" class="fa fa-plus-circle" style="font-size:25px; color:black;">&nbsp;&nbsp;&nbsp;Create Users</i>
        </td>
        </tr>


        <tr>
        <td><br>
        <!-- Penalty Status -->
        <a href="penaltyStatus.php" style="text-decoration: none;">
        <i title="Penalty Status" class="fa fa-money" style="font-size:25px; color:black;"><b>&nbsp;&nbsp;&nbsp;Penalty Status</b></i>
        </a></i>
        </td>
 
        <td><br>
        <!-- Manage Issued Book -->
        <a href="manageIssuedBook.php" style="text-decoration: none;">
        <i title="Manage Issues" class="fa fa-calendar" style="font-size:25px; color:black;">&nbsp;&nbsp;&nbsp;Manage Issued Book</i>
        </a></i>
        </td>
        </tr>

        <tr>
        <td><br>
        <!-- My Profile -->
        <a href="profile.php" style="text-decoration: none;">
        <i title="My Profile" class="fas fa-user-cog" style="font-size:25px; color:black;">&nbsp;&nbsp;&nbsp;<b>My Profile</b></i>
        </a></i>
        </td>

        <td><br>

        
        <!-- Change Password -->
        <a href="changePass.php" style="text-decoration: none;">
        <i title="Change Password" class="fa fa-cogs" style="font-size:25px; color:black;">&nbsp;&nbsp;&nbsp;Change Password</i>
        </td>
        </tr>



        <tr>
        <td><br>
        <!-- Announcement Creation -->
        <a href="announcementCreation.php" style="text-decoration: none;">
        <i title="post announcements" class="fa fa-pencil-square-o" style="font-size:25px; color:black;">&nbsp;&nbsp;&nbsp;<b>Post Announcement</b></i>
        </a></i>
        <br><br>
        </td>

        <td><br>
        <!-- Announcements -->
        <a href="announcements.php" style="text-decoration: none;">
        <i title="announcements" class="fas fa-bullhorn" style="font-size:25px; color:black;">&nbsp;&nbsp;&nbsp;Announcements</i>
        </a></i>
        <br><br>
        </td>
        </tr>

        </table>

    <br><br><br><br>
    </div>

    
<?php include('footer.html')?>

<?php		
	}else{
		header('location: signin.php');
	}
?>


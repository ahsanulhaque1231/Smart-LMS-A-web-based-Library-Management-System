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


    #main_content th {
            border:1px solid #b3adad;
            text-align:center;
            padding:20px;
            background: #fffff1;
            color: black;
    }

    #main_content td {
            border:1px solid #b3adad;
            text-align:center;
            padding:20px;
            background: #fffff1;
            color: black;
    }

    #main_content {
            background-color: #FDF6E3;
            border-radius: 10px;

    }

    </style>
</head>





    <div id="main_content" style="font-family: arial; align-items: center; text-align: center;">
        
        <br>
        <span style="font-size: 30px;">
            <b> My Profile </b>
        </span>
        <br><br><br>

        <!-- picture -->
        <img src="../assets/images/<?php echo $row['filename'];?>" alt="<?=$row['username']?>" height="200px" width="200px" style="border-radius: 50%">

        <br><br><br><br>
        <span style="font-size: 25px;"><b>User details</b></span>
        <br><br>

        <table align="center" border="1" style="padding:5px;">
            <tr>
                <td>
                    <b>Username</b>
                </td>

                <td>
                    <?php echo $row['username'];?>
                </td>
            </tr>

            <tr>
                <td>
                    <b>Name</b>
                </td>

                <td>
                    <?php echo $row['fullname'];?>
                </td>
            </tr>

            <tr>
                <td>
                    <b>User Type</b>
                </td>

                <td>
                    <?php echo $row['type'];?>
                </td>
            </tr>

            <tr>
                <td>
                    <b>Email</b>
                </td>

                <td>
                    <?php echo $row['email'];?>
                </td>
            </tr>

            <tr>
                <td>
                    <b>Gender</b>
                </td>

                <td>
                    <?php echo $row['gender'];?>
                </td>
            </tr>

            <tr>
                <td>
                    <b>Date of Birth</b>
                </td>

                <td>
                    <?php echo $row['dob'];?>
                </td>
            </tr>
        </table>
        <br><br>
        <a href="accSetting.php"><b style="font-size: 20px;">Change Account Info</b></a> <b style="font-size: 20px;">||</b>
        <a href="changePass.php"><b style="font-size: 20px;">Change Password</b></a>
        <br><br><br><br>
    </div>
        


<?php include('footer.html')?>

<?php
	}else{
        header('location: signin.php');
    }
?>
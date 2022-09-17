<?php
	if(isset($_COOKIE['status'])){
?>

<?php
	$title = "Issue Book";
	include('header.php');
    require_once('../model/userModel.php');
    $usersList = getAllUser();
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
        <br><br><br><br>
        <span style="font-size: 30px;">
            <b> Select User to Issue </b>
        </span>
        <br><br><br>

        <script type="text/javascript" src="../controller/js/searchUser.js"></script>
        <!-- search box -->
        <input type="text" id="searchUser" onkeyup="searchUser()" placeholder="Search users..." style="font-size: 20px;">
        
        <button type="button" onclick="searchUser()"><i class="fa fa-search" style="font-size: 20px;"></i></button>
        <p id="result" align="center"></p>
        <br><br><br><br>
        
        <!-- table for user list -->
        <table border="10" align="center">
            <caption style="font-size: 30px;">Registered Users<br><br></caption>
            
            <tr>
                <th> # </th>
                <th> Username </th>
                <th> Full Name </th>
                <th> Gender </th>
                <th> Email </th>
                <th> Date of Birth </th>
                <th> User Type </th>
                <th> Actions </th>
            </tr>

            <?php for($i = 0; $i < count($usersList); $i++){ ?>
            <tr>
                <td> <?=$usersList[$i]['id']?> </td>
                <td> <?=$usersList[$i]['username']?> </td>
                <td> <?=$usersList[$i]['fullname']?> </td>
                <td> <?=$usersList[$i]['gender']?> </td>
                <td> <?=$usersList[$i]['email']?> </td>
                <td> <?=$usersList[$i]['dob']?> </td>
                <td> <?=$usersList[$i]['type']?> </td>
                <td>
                    <a href="issueSelect.php?username=<?=$usersList[$i]['username']?>"> Select</a>
                </td>
            </tr>
            <?php } ?>
        </table>
        <br><br><br><br><br><br><br><br><br><br><br>

    </div>
</div>

<?php include('footer.html')?>

<?php
	}else{
        header('location: signin.php');
    }
?>
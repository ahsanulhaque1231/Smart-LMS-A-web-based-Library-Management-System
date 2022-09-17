<?php
	if(isset($_COOKIE['status'])){
?>

<?php
	$title = "Announcements";
	include('header.php');
    require_once('../model/announcementModel.php');
    require_once('../model/userModel.php');
    $announcements = getAllAnnouncement();
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
            
            border-radius: 10px;

    }

    </style>
</head>




    
    <div id="main_content" style="background-color: white; font-family: arial; align-items: center; text-align: center;">
        
    
        <br><br><br>
        <span style="font-size: 30px;">
            <b> Announcements</b>
        </span>
        <br><br><br><br><br>

        <?php 
        $i = count($announcements)-1;
        for(; $i >= 0; $i--){ ?>
            <table align="center" border="7" style="">
            <tr>
            <td>
            <fieldset  style="background-color: grey; width: 400px; display: inline-block; font-family: Times New Roman; align-items: center; text-align: center; font-size: 25px; color: white;">
                <?php
                    $username   = $announcements[$i]['username'];
                    $row        = getUserByName($username);
                    echo "Posted by "."<b>".$row['fullname']."</b>"."<br>"."<br>";
                ?>
                <?=$announcements[$i]['content']?>

            </fieldset>
            
            </td>
            <td>
                
            <a href="../controller/deleteAnnouncement.php?announcementId=<?=$announcements[$i]['entry']?>" style="text-decoration: none;">
            <i title="announcements" class="fa fa-trash-o" style="font-size:20px; color:black;"> Delete Announcement</i>
            </a>

            </td>
            </tr>
            </table>
            <br><br>

        <?php } ?>

    <br><br><br><br>
    </div>


<?php include('footer.html')?>

<?php
	}else{
        header('location: signin.php');
    }
?>
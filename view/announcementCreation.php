<?php
	if(isset($_COOKIE['status'])){
?>

<?php
	$title = "Post Announcement";
	include('header.php');
?>

<?php include('navBar.php')?>


    <!-- main panel -->
    <div id="main_content" style="background-color: #FDF6E3; font-family: arial; align-items: center; text-align: center;border-radius: 10px;">
        <!-- title -->
        <span style="color: black; font-size: 30px">
            <br><br>
            <b>Write here...</b>
            
        </span>
        <br><br><br><br><br>
        
        <!-- announcement area -->
        <form  method="post" action="../controller/announcementSubmit.php">
            <textarea name="content" rows="8" cols="40"  maxlength="300" style="font-size: 30px;" placeholder="Write an announcement within 300 characters limit"></textarea>
            <br><br>
            <input type="submit" name="submit" value="Post" style="font-size: 25px;">
        </form>
        <br><br><br><br><br>
    </div>

    
<?php include('footer.html')?>

<?php		
	}else{
		header('location: signin.php');
	}
?>

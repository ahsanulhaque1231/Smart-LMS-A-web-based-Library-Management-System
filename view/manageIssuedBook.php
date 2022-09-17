<?php
	if(isset($_COOKIE['status'])){
?>

<?php
	$title = "Review Issues";
	include('header.php');
    require_once('../model/issuedModel.php');
    $issueList = getAllIssue();
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

    .color-background {
            background-color: #FDF6E3;
            border-radius: 10px;

    }

    </style>
</head>


    <!-- main panel -->
    <div id="main_content" style="background-color: #FDF6E3; font-family: arial; align-items: center; text-align: center;">
        <!-- title -->
        <span style="font-size: 30px;">
            <br><b> Manage Issued Book </b><br><br>
        </span>
        
        <p>"Search by Issue Id, username, book name"</p>
        <script type="text/javascript" src="../controller/js/searchIssue.js"></script>
        <!-- search box -->
        <input type="text" id="searchIssue" onkeyup="searchIssue()" placeholder="Search" style="font-size: 20px;">
        <button type="button" onclick="searchIssue()"><i class="fa fa-search" style="font-size: 20px;"></i></button>
        <p id="result" align="center"></p>
        <br><br>
        
        <!-- table for book list -->
        <table border="10" align="center">
            <caption style="font-size: 30px;">Issued Status<br><br><br></caption>
            
            <tr>
                <th> Issue ID </th>
                <th> User Name </th>
                <th> Book Name </th>
                <th> Issued Date </th>
                <th> Return Date </th>
                <th> </th>
            </tr>

            <?php for($i = 0; $i < count($issueList); $i++){ ?>
            <tr>
                <td> <?=$issueList[$i]['issueID']?> </td>
                <td> <?=$issueList[$i]['username']?> </td>
                <td> <?=$issueList[$i]['bookname']?> </td>
                <td> <?=$issueList[$i]['issuedDate']?> </td>
                <td> <?=$issueList[$i]['returnedDate']?> </td>
                <td>
                    <a href="penalize.php?issueID=<?=$issueList[$i]['issueID']?>"> Penalize</a> | 
				    <a href="../controller/removeIssue.php?issueID=<?=$issueList[$i]['issueID']?>"> Remove </a>
                </td>
            </tr>
            <?php } ?>
            
        </table>
        <br><br><br><br><br>
    </div>


<?php include('footer.html')?>

<?php
	}else{
        header('location: signin.php');
    }
?>
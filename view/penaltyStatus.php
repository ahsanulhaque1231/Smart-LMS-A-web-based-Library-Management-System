<?php
	if(isset($_COOKIE['status'])){
?>

<?php
	$title = "Penalty Status";
	include('header.php');
    require_once('../model/penaltyModel.php');
    $penaltyList = getAllPenalty();
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
            <b> Penalty Status <br><br></b>
        </span>
        

        <script type="text/javascript" src="../controller/js/searchPenalty.js"></script>
        <!-- search box -->
        <input type="text" id="penaltySearch" onkeyup="searchPenalty()" placeholder="Search by user, book, ..." style="font-size: 20px;">
        <button type="button" onclick="searchPenalty()"><i class="fa fa-search" style="font-size: 20px;"></i></button>
        <p id="result" align="center"></p>
        <br><br>
        
        <!-- table for book list -->
        <table border="10" align="center">
            <caption style="font-size: 30px;">Penalized Users<br><br></caption>
            
            <tr>
                <th> Issue ID </th>
                <th> User Name </th>
                <th> Book Name </th>
                <th> Issued Date </th>
                <th> Return Date </th>
                <th> Penalty Amount </th>
                <th>  </th>
            </tr>

            <?php for($i = 0; $i < count($penaltyList); $i++){ ?>
            <tr>
                <td> <?=$penaltyList[$i]['issueID']?> </td>
                <td> <?=$penaltyList[$i]['username']?> </td>
                <td> <?=$penaltyList[$i]['bookname']?> </td>
                <td> <?=$penaltyList[$i]['issuedDate']?> </td>
                <td> <?=$penaltyList[$i]['returnedDate']?> </td>
                <td> <?=$penaltyList[$i]['amount']?> </td>
                <td>
				    <a href="../controller/removePenalty.php?issueID=<?=$penaltyList[$i]['issueID']?>"> Remove </a>
                </td>
            </tr>
            <?php } ?>
            
        </table>
        <br><br><br><br><br><br><br>
    </div>


<?php include('footer.html')?>

<?php
	}else{
        header('location: signin.php');
    }
?>
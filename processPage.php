<?php
require_once('config.php');
$pjname = $_POST['pjName'];
$member = $_POST['asiName'];
$startDate = $_POST['sDate'];
$endDate = $_POST['eDate'];
$description = $_POST['description'];
$priority = $_POST['p_radio'];
$sql = "INSERT INTO projectmanagement(project_name,member_id,start_date,end_date,priority,description)
        VALUES ('$pjname', '$member', '$startDate', '$endDate','$priority', '$description')";
mysqli_query($conn, $sql);
header("location: showDetails.php");
?>
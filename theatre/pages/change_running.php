<?php
session_start();
include('../../connection.php');
extract($_GET);
mysqli_query($conn,"update tbl_shows set r_status='$status' where s_id='$id'");
echo "Running Status Updated";
header('location:view_shows.php');
?>
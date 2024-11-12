<?php
include('../../connection.php');
extract($_GET);
mysqli_query($conn,"update tbl_shows set status='0' where s_id='$id'");
header('location:view_shows.php');
?>
<?php
    include('../../connection.php');
    extract($_POST);
    mysqli_query($conn,"insert into tbl_show_time values(NULL,'$screen','$sname','$time')");
?>
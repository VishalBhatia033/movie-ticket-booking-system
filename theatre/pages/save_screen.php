<?php
    include('../../connection.php');
    extract($_POST);
    mysqli_query($conn,"insert into tbl_screens values(NULL,'$theatre','$name','$seats','$charge')");
?>
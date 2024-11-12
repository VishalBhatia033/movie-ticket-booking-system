<?php
$host="localhost";
$username="root";
$password="";
$dbname="movietheatredb";

$conn=new mysqli($host,$username,$password,$dbname);
if($conn->connect_error){
    die("connection failed: ".$conn->connect_error);
}else{
    // echo"connection done";
}
?>
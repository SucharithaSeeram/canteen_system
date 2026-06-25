<?php
$conn = mysqli_connect("localhost","root","","canteen");

if(!$conn){
    die("Connection Failed".mysqli_connect_error());
}
?>
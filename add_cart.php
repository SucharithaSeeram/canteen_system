<?php
session_start();
include "config/db.php";

$user=$_SESSION['user'];
$food=$_POST['food_id'];

mysqli_query($conn,"INSERT INTO cart(user_id,food_id)
VALUES('$user','$food')");

header("Location: cart.php");
?>
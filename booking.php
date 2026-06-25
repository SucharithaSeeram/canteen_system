<?php
include "config/db.php";

if(isset($_POST['book'])){

$name=$_POST['name'];
$date=$_POST['date'];
$time=$_POST['time'];
$seats=$_POST['seats'];

mysqli_query($conn,"
INSERT INTO bookings(name,date,time,seats)
VALUES('$name','$date','$time','$seats')
");

echo "Booking successful";
}
?>

<form method="POST">

<input name="name" placeholder="Student Name">

<input type="date" name="date">

<input type="time" name="time">

<input name="seats" placeholder="Seats">

<button name="book">Book Table</button>

</form>
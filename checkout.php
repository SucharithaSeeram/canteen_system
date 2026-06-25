<?php
session_start();
include "config/db.php";

$user=$_SESSION['user'];

$result=mysqli_query($conn,"
SELECT menu.name,menu.price
FROM cart
JOIN menu ON cart.food_id=menu.id
WHERE cart.user_id='$user'
");

while($row=mysqli_fetch_assoc($result)){

$name=$row['name'];
$price=$row['price'];

mysqli_query($conn,"
INSERT INTO orders(user_id,food_name,price)
VALUES('$user','$name','$price')
");

}

mysqli_query($conn,"DELETE FROM cart WHERE user_id='$user'");

echo "Order placed successfully";
?>
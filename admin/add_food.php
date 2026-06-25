<?php
include "../config/db.php";

if(isset($_POST['add'])){

$name=$_POST['name'];
$price=$_POST['price'];
$image=$_POST['image'];

mysqli_query($conn,"
INSERT INTO menu(name,price,image)
VALUES('$name','$price','$image')
");

echo "Food Added";
}
?>

<form method="POST">

<input name="name" placeholder="Food Name">

<input name="price" placeholder="Price">

<input name="image" placeholder="Image Path">

<button name="add">Add Food</button>

</form>
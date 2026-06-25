<?php
include "includes/db.php";

if(isset($_POST['register'])){

$name=$_POST['name'];
$email=$_POST['email'];
$password=password_hash($_POST['password'],PASSWORD_DEFAULT);

mysqli_query($conn,"INSERT INTO users(name,email,password)
VALUES('$name','$email','$password')");

echo "Registered Successfully";

}
?>

<form method="POST" class="form">

<h2>Register</h2>

<input type="text" name="name" placeholder="Name">

<input type="email" name="email" placeholder="Email">

<input type="password" name="password" placeholder="Password">

<button name="register">Register</button>

</form>
<?php
include "includes/db.php";

if(isset($_POST['login'])){

$email=$_POST['email'];
$password=$_POST['password'];

$query=mysqli_query($conn,"SELECT * FROM users WHERE email='$email'");

$user=mysqli_fetch_assoc($query);

if(password_verify($password,$user['password'])){
echo "Login Successful";
}else{
echo "Invalid Login";
}

}
?>

<form method="POST" class="form">

<h2>Login</h2>

<input type="email" name="email" placeholder="Email">

<input type="password" name="password" placeholder="Password">

<button name="login">Login</button>

</form>
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

$total=0;
?>

<h2>Your Cart</h2>

<?php while($row=mysqli_fetch_assoc($result)){ ?>

<p><?php echo $row['name']; ?> - ₹<?php echo $row['price']; ?></p>

<?php $total += $row['price']; ?>

<?php } ?>

<h3>Total: ₹<?php echo $total; ?></h3>

<form action="checkout.php" method="POST">

<button>Place Order</button>

</form>
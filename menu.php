<?php 
include "includes/db.php";
include "includes/header.php";
?>

<h2 class="title">Today's Menu</h2>

<div class="menu-container">

<?php
$result = mysqli_query($conn,"SELECT * FROM food_items");

while($row=mysqli_fetch_assoc($result)){
?>

<div class="food-card">

<img src="images/<?php echo $row['image']; ?>">

<h3><?php echo $row['name']; ?></h3>

<p>₹<?php echo $row['price']; ?></p>

<button class="order-btn">Add to Cart</button>

</div>

<?php } ?>

</div>

<?php include "includes/footer.php"; ?>
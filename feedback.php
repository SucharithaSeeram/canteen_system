<?php
include "config/db.php";

if(isset($_POST['submit'])){

$rating=$_POST['rating'];
$msg=$_POST['message'];

mysqli_query($conn,"
INSERT INTO feedback(rating,message)
VALUES('$rating','$msg')
");

echo "Feedback submitted";
}
?>

<form method="POST">

<select name="rating">

<option>1</option>
<option>2</option>
<option>3</option>
<option>4</option>
<option>5</option>

</select>

<textarea name="message"></textarea>

<button name="submit">Submit</button>

</form>
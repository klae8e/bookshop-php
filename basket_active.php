<?
session_start();

include 'serverconfig.php';


$result = mysqli_query($conn, "SELECT * FROM basket");

if ($result->num_rows > 0) {
	echo '<img src="images/basket_active.png" class="mx-auto">';
}
else{
	echo '<img src="images/basket.png" class="mx-auto">';
}


$conn->close(); 
?>

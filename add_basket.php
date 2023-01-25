<?
session_start();

include 'serverconfig.php';

$id = $_GET['id'];
$amount = '1';

$result = mysqli_query($conn, "SELECT * FROM books where id='".$id."' LIMIT 1");

if ($result->num_rows > 0) {
	while($row = $result->fetch_assoc()) {    
		$image = $row['image'];    
		$name = $row['name'];
		$price = $row['price'];
	};
}
else{
	echo 'NOT';
}

$result2 = mysqli_query($conn, "SELECT * FROM basket where id='".$id."' LIMIT 1");

if ($result2->num_rows < 1) {

	$sql = "INSERT INTO basket (id, image, name, price, amount)
	VALUES ( '".$id."', '".$image."', '".$name."', '".$price."', '".$amount."')";
 
	if ($conn->query($sql) === TRUE) {
	  echo "New record created successfully";
	  header("Location: basket.php");exit();
	} else {
		echo "New record created unsuccessfully";
	  	echo "Error: " . $sql . "<br>" . $conn->error;
	}
}
if ($result2->num_rows < 1) {
	header("Location: basket.php");exit();
}
else {
	header("Location: catalog.php");exit();
}

$conn->close(); 
?>

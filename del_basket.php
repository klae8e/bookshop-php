<?

include 'serverconfig.php';

$amount = '1';

$result = mysqli_query($conn, "SELECT * FROM basket where id='".$id."' LIMIT 1");

if ($result->num_rows > 0) {
	while($row = $result->fetch_assoc()) {  
		if ($row['amount'] > 1) {
			$edit = "update basket set amount = amount-1 where id='".$_GET['id']."' Limit 1";
 
		if ($conn->query($edit) === TRUE) {
		  echo "record deleted successfully";
		  header("Location: basket.php");exit();
		} else {
			echo "record deleted unsuccessfully";
		  	echo "Error: " . $edit . "<br>" . $conn->error;
		}
		}
	};
}
else{
	echo 'NOT';
}

$sql = "Delete from basket where id='".$_GET['id']."' Limit 1";
 
if ($conn->query($sql) === TRUE) {
  echo "record deleted successfully";
  header("Location: basket.php");exit();
} else {
	echo "record deleted unsuccessfully";
  	echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close(); 

?>
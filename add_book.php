<?php

	session_start();
	include 'serverconfig.php';

	$file = "db_books_img/".$_FILES['file']['name'];
	move_uploaded_file($_FILES['file']['tmp_name'], $file);
	$filename = $_FILES['file']['name'];
	$namebook = $_POST["namebook"];
	$author = $_POST["author"];
	$genres = $_POST["genres"];
	$publisher = $_POST["publisher"];
	$publisher_date = $_POST["publisher_date"];
	$description = $_POST["description"];
	$lang = $_POST["lang"];
	$age = $_POST["age"];
	$pages = $_POST["pages"];
	$price = $_POST["price"];
	$amount = $_POST["amount"];
	
	$sql = "INSERT INTO books (image, name, author, genres, publisher, publisher_date, description, lang, age, pages, price, amount)
	VALUES ('".$filename."', '".$namebook."', '".$author."', '".$genres."', '".$publisher."', '".$publisher_date."', '".$description."', '".$lang."', '".$age."', '".$pages."','".$price."','".$amount."')";

	if ($conn->query($sql) === TRUE) {
	  //echo "New record created successfully";
	  $_SESSION['message'] = 'Удачно! Записано в базу';
	  header("Location: adminpanel.php");exit();
	} else {
		$_SESSION['message'] = 'Ошибка! '.$file;
		//echo "New record created unsuccessfully";
	  	//echo "Error: " . $sql . "<br>" . $conn->error;
	  	header("Location: adminpanel.php");exit();
	}

	$conn->close();

?>
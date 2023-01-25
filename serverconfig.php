<?php 

	// сервер бд
	$dbservername = "localhost";
	// имя пользователя бд
	$dbusername = "root";
	// пароль пользователя бд
	$dbpassword = "";
	// название бд
	$dbname = "bookshop";

	// Подключение к базе данных
	$conn = new mysqli($dbservername, $dbusername, $dbpassword, $dbname);
	
?>
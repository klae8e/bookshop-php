<?php
	
session_start();
include "serverconfig.php";

if (isset($_SESSION['user'])) {
	echo '<div>';
	echo 'Вы зашли под именем: '.$_SESSION['user']['lastname'].' '.$_SESSION['user']['firstname'];
	echo '<form method="post" action="quit.php">';
	echo '	<button type="submit" class="btn_sb w-25">Выйти</button>';
	echo '</form>';
	echo '</div>';
	error_message();
}
else{

echo '<div>';

echo '<form method="post" action="login.php" id="signin">';
echo '	<input id="input_login" class="col-sm-6" type="text" name="email" placeholder="Email">';
echo '	<input id="input_pass" class="col-sm-6" type="password" name="userpassword" placeholder="Password">';
echo '	<button id="btn_login" class="col-sm-1" type="submit">ok</button>';
echo '</form>';

echo '<div class="text-center"><form action="signup.php">';
echo '<button id="btn_signup" type="submit">Sign up</button>';
echo '</form></div>';

echo '</div>';
error_message();

}



?>
<!--




		$login = $_POST['login'];
		$pass = md5($_POST['pass']);

		$queryselect = "SELECT * FROM `users` WHERE login = '".$login."' and password = '".$pass."'";
		$query = mysqli_query($sql, $queryselect) or die("1. Query hat nicht funktioniert!");
		#echo "3";
		while ($row = $query->fetch_assoc()) {
			

				if (mysqli_num_rows($query)>0) {
					if ($login === $row['login'] && $pass === $row['password']) {
						$_SESSION['user'] = [
							"id" => $row['id'],
							"login" => $row['login'],
							"email" => $row['email'],
							"active" => $row['active'],
							"friends" => $row['friends'],
							"user_image" => $row['user_image']
						];
						#echo "4";
						header("Location: mainpage.php?id=".$_SESSION['user']['id']);exit();
						
					}
					#echo "5";
				}
				#echo "6";
		}
		#echo "7";
		$_SESSION['message'] = 'Error 2: login or password is wrong!';
		header("Location: index.php");exit();
	



-->
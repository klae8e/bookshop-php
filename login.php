<?php 
	session_start();
	include 'serverconfig.php';	

	
	if (($_POST['email'] !== " " && $_POST['userpassword'] !== " ") or ($_POST['email'] !== " " or $_POST['userpassword'] !== " ")) {

		$email = $_POST['email'];
		$userpassword = $_POST['userpassword'];

		$queryselect = "SELECT * FROM users WHERE email = '".$email."' and password = '".$userpassword."'";
		$query = mysqli_query($conn, $queryselect) or die("Not working");

		while ($row = $query->fetch_assoc()) {
			

			if (mysqli_num_rows($query)>0) {
				if ($email === $row['email'] && $userpassword === $row['password']) {
					$_SESSION['user'] = [
						"user_id" => $row['user_id'],
						"firstname" => $row['firstname'],
						"lastname" => $row['lastname'],
						"password" => $row['password'],
						"email" => $row['email'],
						"phone" => $row['phone'],
						"role" => $row['role']
					];
					
					//header("Location: index.php");exit();
					
				}
				
			}
			else{
				$_SESSION['message'] = 'Error 2: email or password is wrong!';
				header("Location: index.php");exit();
			}
			
		}
		header("Location: index.php");exit();
	}
	else{
		
		$_SESSION['message'] = 'Error 3: email or password is wrong!';
		header("Location: index.php");exit();

	}

?>
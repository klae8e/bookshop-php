
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Каталог</title>
	<meta charset="utf-8">
	<title>Книги</title>
   	<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.8.2/jquery.min.js"></script>
	<script type="text/javascript" src="script.js"></script>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>

<div id="mainframe" class="container-fluid">
	
	<div id="navbar" class="container my-3">
	<div class="row">
		
	
		<div id="logo" class="col-sm-1 text-center">
			<a href="index.php"><img src="images/logo.png" class="mx-auto"></a>
		</div>

		<div id="name_site" class="col-sm-1 text-left my-auto">
			книги.
		</div>

		<div id="main" class="col-sm-2 text-center my-auto">
			<a href="index.php" class="navstyles">Главная</a>
		</div>

		<div id="catalog" class="col-sm-2 text-center my-auto">
			<a href="catalog.php" class="navstyles">Каталог</a>
		</div>

		<div id="about" class="col-sm-2 text-center my-auto">
			<a href="about.php" class="navstyles">Контакты</a>
		</div>

		<div class="col-sm-3 my-auto">
		    <input type="text" class="form-control rounded-pill" name="live_search" id="live_search" autocomplete="off" placeholder="Search ...">
		</div>
		</br>
		    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
		    <script type="text/javascript">
		        $(document).ready(function () {
		            $("#live_search").keyup(function () {
		                var query = $(this).val();
		                if (query != "") {
		                    $.ajax({
		                        url: 'ajax.php',
		                        method: 'POST',
		                        data: {
		                            query: query
		                        },
		                        success: function (data) {
		                            $('#search_result').html(data);
		                            $('#search_result').css('display', 'block');
		                            $("#live_search").focusout(function () {
		                                $('#search_result').css('display', 'block');
		                            });
		                            $("#live_search").focusin(function () {
		                                $('#search_result').css('display', 'block');
		                            });
		                        }
		                    });
		                } else {
		                    $('#search_result').css('display', 'block');
		                }
		            });
		        });
		    </script>
		<div id="basket" class="col-sm-1 text-center my-auto">
			<a href="basket.php"><?include 'basket_active.php';?></a>
		</div>
			</div>
		</div>

		<div class="container">
			<div class="row">
				<div class="col-sm-8"></div>
				<div id="search_result" class="col-sm-3"></div>
				<div class="col-sm-1"></div>
			</div>
		</div>


<div class="container">
	<div class="row">
		<div class="col-sm-4 mt-5">
			<div class="footer_navs">Контакты:</div>
			<hr>
			<div class="footer_under_navs">Телефоны:</div>
			<div class="footer_under_navs">+7 938-450-39-59</br>+7 931-001-39-59</div>
			<hr>
			<div class="footer_under_navs">Адрес:</div>
			<div class="footer_under_navs">Санкт-Петербург,</br>Бухаресткая 80</div>
			<hr>
			<div class="footer_under_navs">Время работы:</div>
			<div class="footer_under_navs">9:00 - 21:00</br>Без выходных</div>
		</div>
	</div>
</div>

<br>

<div class="container">
		<hr>
		<br>
		<div class="row">
			<div class="col-sm-2">
				<div class="footer_navs"><a href="index.php" class="navstyles">Главная</a></div>
				<div class="footer_under_navs"><a href="index.php" class="navstyles" style="font-size:20px">О нас в цифрах</a></div>
				<div class="footer_under_navs"><a href="#mainframe" class="navstyles" style="font-size:20px">Поиск</a></div>
			</div class="col-sm-2">
			<div class="col-sm-2">
				<div class="footer_navs"><a href="catalog.php" class="navstyles">Каталог</a></div>
				<div class="footer_under_navs">Романы</div>
				<div class="footer_under_navs">Фэнтези</div>
				<div class="footer_under_navs">Деловая литература</div>
			</div>
			<div class="col-sm-2">
				<div class="footer_navs"><a href="about.php" class="navstyles">О нас</a></div>
				<div class="footer_under_navs">+7 938-450-39-59</br>+7 931-001-39-59</div>
				<div class="footer_under_navs">Санкт-Петербург,</br>Бухаресткая 80</div>
				<div class="footer_under_navs">9:00 - 21:00</br>Без выходных</div>
			</div>
			<div class="col-sm-6">
				<?php
				    include 'error_message.php';
					include "serverconfig.php";

					if (isset($_SESSION['user'])) {
						echo '<div>';
						echo 'Вы зашли под именем: </br>'.$_SESSION['user']['lastname'].' '.$_SESSION['user']['firstname'];
						echo '<form method="post" action="quit.php">';
						echo '	</br><button type="submit" class="btn_sb w-25">Выйти</button>';
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
				<?
		
				if (isset($_SESSION['user']['role']) == '1') {
					if ($_SESSION['user']['role'] == '1') {
						
					
						echo "</br>Admin role:</br>";
						?>
						<a href="adminpanel.php ?>">ADMINPANEL</a>
					
					<?
					}
				}
				else if(isset($_SESSION['user']['role']) == '5'){
					//echo "</br>Profile:</br>";
					?>
				</br>
					<a href="profile.php ?>">Профиль</a>
					<?
				}
				else{
					
				}
				?>
			</div>
		</div>
	</div>

</body>
</html>
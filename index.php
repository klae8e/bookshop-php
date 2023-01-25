
<!DOCTYPE html>
<html>
<head>
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

<div id="section_1" class="container mt-5 mb-5">
	<div class="row .justify-content-xxl-center">
		<div class="col-sm-6 text-left">
			<h1 class="my-5">КНИГИ - ЭТО МОДНО</br>ЧИТАЙ И БУДЬ КРУТЫМ!</h1>
			<h3 class="my-4">Онлайн-магазин книг откроет для</br>тебя новый мир в несколько кликов!</h3>
			<div id="section_1_buttons" class="row col-sm-10">
				<a href="catalog.php" id="section_1_btn_catalog" class="col-sm-5 text-center" style="color:black;text-decoration: none;">Каталог</a>
				<form id="section_2_btn_catalog"  action="signup.php">
					<button style="border: none; text-decoration: none;" class="col-sm-5 mar-lft mx-5">Регистрация</button>
				</form>
			</div>
		</div>
		<div class="col-sm-6 text-center">
			<div id="img3" class="mx-auto">
				<img src="images/books.png" class="img-fluid banners_pics" alt="books">
			</div>
		</div>
	</div>
</div>











	<div id="pic">

	</div>


	<div class="container text-center bgcolor_aboutus">
		<div id="aboutus_num" class="mt-5 mb-5">О НАС В ЦИФРАХ...</div>
		<div class="row">
			<div class="col-sm-4 underaboutus_num">
				<div>600</div>
				<div>Дней работы</div>
			</div>
			<div class="col-sm-4 underaboutus_num">
				<div>82</div>
				<div>Довольных покупателей</div>
			</div>
			<div class="col-sm-4 underaboutus_num">
				<div>14795</div>
				<div>Проданных страниц</div>
			</div>
		</div>
		
	</div>

	<div class="container text-center">
		<div id="whyus" class="mt-5 mb-5">ПОЧЕМУ МЫ ?</div>
		<hr>
		<div class="row">

			<!-- 1 -->
			<div class="col-sm-3 banners others">
				<div id="img1" class="mx-auto">
					<img src="images/car.png" class="img-fluid banners_pics pt-3" alt="car">
				</div>
				<div id="banner1" class="mt-3">Доставка</div>
				<div id="banner1-1">Бесплатная доставка </br>по Санкт-Петербургу от </br>1000 рублей</div>
				<form action="catalog.php">
					<button class="banners_btns col-sm-8 pt-3 pb-3 mb-3">
						<div>Оформить заказ</div>
					</button>
				</form>
			</div>

			<div class="col-sm-1"></div>

			<!-- 2 -->
			<div class="col-sm-4 banners others">
				<div id="img2" class="mx-auto">
					<img src="images/etc.png" class="img-fluid banners_pics" alt="etc">
				</div>
				<div id="banner2" class="mt-3">Регистрация</div>
				<div id="banner2-1">Специальные возможности </br>для зарегистрированных </br>пользователей</div>
				<form action="signup.php">
					<button class="banners_btns col-sm-8 pt-3 pb-3 mb-3">
						<div>Зарегистрироваться</div>
					</button>
				</form>
			</div>

			<div class="col-sm-1"></div>

			<!-- 3 -->
			<div class="col-sm-3 banners others">
				<div id="img3" class="mx-auto">
					<img src="images/books.png" class="img-fluid banners_pics" alt="books">
				</div>
				<div id="banner3" class="mt-3">Подарок</div>
				<div id="banner3-1">Каждая 10-ая книга </br>в подарок</div>
				<form action="catalog.php">
					<button class="banners_btns col-sm-8 pt-3 pb-3 mb-3">
						<div>Перейти в каталог</div>
					</button>
				</form>
			</div>

			<div class="mt-4 mb-5">Есть аккаунт? <a href="#loggin">Войти</a></div>

			<div class="row" style="background-color: #F5F3F3; border-radius: 20px; box-shadow: 0 0 20px #9fc2ec;">
				<h2 style="font-family: 'Forum'; font-weight: bold; margin:45px 0 0 0">ПОПУЛЯРНЫЕ КНИГИ:</h2>
				<?

					include 'serverconfig.php';	
					$sql = "SELECT * FROM books LIMIT 3";
					$result = $conn->query($sql);
					$img_path = "db_books_img/";	

					if ($result->num_rows > 0) {
					// output data of each row
						while($row = $result->fetch_assoc()) {
							
						echo '<div class="col-sm-4 book_boxes"><div class="text-center mb-3 mt-3"><img src="'. $img_path . $row["image"].' " alt="poster'. $row["image"].'" class="poster-wh img-fluid rounded-3"></div><div class="namelink"><a href="bookpage.php?id='.$row["id"]. '" class="navstyles">'. $row["name"].'</a></div><div class="details"></br>Автор: ' . $row["author"]. '</br>Жанр : ' . 	$row["genres"] . '</br></br><b class="navstyles">Цена: '.$row["price"].' Рублей.</b></br></div> <div class="text-center mt-3 p-3"><a style="background-color:#9fc2ec;text-decoration:none; padding:2px; color:black; border-radius:8px;" href="add_basket.php?id='.$row["id"].'" class="banners_btns col-sm-8 p-3 mx-auto">Купить</a></div></div>';
							
						}
					} else {
						echo "<div>0 results</div>";
					}
					

				?>
			</div>


	</div>
			
	</div>
	<br>
	
	<br>
	<div class="container">
		<hr>
		<br>
		<div class="row">
			<div class="col-sm-2">
				<div class="footer_navs"><a href="#mainframe" class="navstyles">Главная</a></div>
				<div class="footer_under_navs"><a href="#aboutus_num" class="navstyles" style="font-size:20px">О нас в цифрах</a></div>
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
			<div id="loggin" class="col-sm-6">
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

</div>



</body>
</html>
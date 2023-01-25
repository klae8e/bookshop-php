<?
include 'serverconfig.php';

				// проверка подключения
				if ($conn->connect_error) {
					die("Connection failed: " . $conn->connect_error);
				}

				$sql = "SELECT * FROM books";

				$sql_price_desc = "SELECT * FROM books ORDER BY price ASC";
				$sql_price_desc = "SELECT * FROM books ORDER BY price DESC";
				
if($_POST['sort'] == "По возрастанию цены"){


				$result = $conn->query($sql_price_desc);
				$img_path = "db_books_img/";

				if ($result->num_rows > 0) {
				// output data of each row
					while($row = $result->fetch_assoc()) {
						
					echo '<div class="col-sm-4 book_boxes"><div class="text-center mb-3 mt-3"><img src="'. $img_path . $row["image"].' " alt="poster'. $row["image"].'" class="poster-wh img-fluid"></div><a href="bookpage.php?name='.$row["name"]. '" class="navstyles">'. $row["name"].'</a></br>Автор: ' . $row["author"]. '</br>Жанр : ' . 	$row["genres"] . '</br></br><b class="navstyles">Цена: '.$row["price"].' Тенге.</b></br> <a href="add_basket.php?id='.$row["id"].'">Купить</a></div>';
						
					}
				} else {
					echo "0 results";
				}
				$conn->close();
}

?>
<?php
   include "serverconfig.php";
   $img_path = "db_books_img/";
   if (isset($_POST['query'])) {
      $query = "SELECT image,name,id FROM books WHERE name LIKE '{$_POST['query']}%' LIMIT 20";
      $result = mysqli_query($conn, $query);
    if (mysqli_num_rows($result) > 0) {
        while ($res = mysqli_fetch_array($result)) {
            ?>
            <div class="text-center p-3" style="border-bottom: 1px solid black;border-left: 1px solid black;border-right: 1px solid black;">
                
            
            <?
            echo "<a href="."bookpage.php?id=".$res['id']."><div class="."list"."</br>". $res['name']. "<br/></div></a>";
            echo '<style>.list{border-bottom:1px solid black}a{outline:none; color:black; text-decoration: none;}</style>';
            ?>
            </div>
            <?
      }
    } else {
      echo "
      </br>
      <div class='alert alert-danger text-center' role='alert'>
          Книг не найдено!
      </div>
      ";
    }
  }
?>
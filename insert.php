<?php
  $connect = mysqli_connect("127.0.0.1","root","","insta");
      
  $text_query = "SELECT * FROM posts";
  $query = mysqli_query($connect, $text_query);
  $text_zaprosa_vstavit = "INSERT INTO posts (name, title, img)
            VALUES('{$_GET["name"]}', '{$_GET["title"]}', '{$_GET["img"]}')";
  $query_insert = mysqli_query($connect, $text_zaprosa_vstavit);

  header('Location: index.php');
?>
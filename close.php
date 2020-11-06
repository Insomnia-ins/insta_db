<?php
  $connect = mysqli_connect("127.0.0.1","root","","insta");
      
  $text_query = "DELETE FROM posts WHERE id = '{$_GET["id"]}' ";

  mysqli_query($connect, $text_query);
 

  header('Location: index.php');
?>
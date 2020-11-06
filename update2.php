<?php
	
	$connect = mysqli_connect("127.0.0.1","root","","insta");
  	$text_query = "SELECT * FROM posts";
 	$con = mysqli_query($connect, $text_query);

 	$sql = "UPDATE posts SET title = '{$_GET["tit"]}' WHERE id= '{$_GET["id"]}'";

	$query_insert = mysqli_query($connect, $sql);
	header('Location: index.php');

	


?>
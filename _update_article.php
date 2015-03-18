<?php

//make a connection to the database

$mysqli = new mysqli( 
  "mysql.nycindub.com", 
  "chagig", 
  "ChaGig1977", 
  "nycindubdatabase"
);


$articleId = $_POST['article_id'];
$title = $_POST['title'];
$bodycopy = $_POST['bodycopy'];
$mainimage = $_POST['mainimage'];
$author = $_POST['author'];

//run the query
$result = $mysqli->query("UPDATE articlesnycindub SET mainimage='{$mainimage}', title='{$title}', bodycopy='{$bodycopy}', author='{$author}' WHERE id={$articleId} ");

//redirect
header("Location: articles_admin_interface.php");


?>

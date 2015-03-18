<?php

//make a connection to the database

$mysqli = new mysqli( 
  "mysql.nycindub.com", 
  "chagig", 
  "ChaGig1977", 
  "nycindubdatabase"
);

$articleId = $_GET['article_id'];

//run the query
$result = $mysqli->query("DELETE FROM articlesnycindub WHERE id={$articleId}");


//redirect
header("Location: articles_admin_interface.php");


?>

<?php

//make a connection to the database

$mysqli = new mysqli( 
  "mysql.nycindub.com", 
  "chagig", 
  "ChaGig1977", 
  "nycindubdatabase"
);


$songId = $_POST['song_id'];
$title = $_POST['title'];
$bodycopy = $_POST['bodycopy'];
$iframe = $_POST['iframe'];
$author = $_POST['author'];

//run the query
$result = $mysqli->query("UPDATE songsnycindub SET iframe='{$iframe}', title='{$title}', bodycopy='{$bodycopy}', author='{$author}' WHERE id={$songId} ");

//redirect
header("Location: songs_admin_interface.php");


?>

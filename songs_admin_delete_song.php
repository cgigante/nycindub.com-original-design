<?php

//make a connection to the database

$mysqli = new mysqli( 
  "mysql.nycindub.com", 
  "chagig", 
  "ChaGig1977", 
  "nycindubdatabase"
);

$songId = $_GET['song_id'];

//run the query
$result = $mysqli->query("DELETE FROM songsnycindub WHERE id={$songId}");


//redirect
header("Location: songs_admin_interface.php");


?>

<?php

$filename = $_FILES["file"]["name"]; //the original filename
$tmp_location = $_FILES["file"]["tmp_name"]; //where the file is temporarily being stored on thh server
$permanent_location = "images/articles/" . rand() . time() . $filename; //generate a pseudo-random filename

//move the file from its temporary location to a permanent location
move_uploaded_file($tmp_location, $permanent_location);

?>

<?php


$title = mysql_escape_string($_POST['title']);
$bodycopy = mysql_escape_string($_POST['bodycopy']);
$iframe = mysql_escape_string($_POST['iframe']);
$author = mysql_escape_string($_POST['author']);

?>


<?php
// Make a MySQL Connection
mysql_connect("mysql.nycindub.com", "chagig", "ChaGig1977") or die(mysql_error());
mysql_select_db("nycindubdatabase") or die(mysql_error());

// Insert a row of information into the table
mysql_query("INSERT INTO songsnycindub 
(title, iframe, bodycopy, author) VALUES('{$title}', '{$iframe}', '{$bodycopy}', '{$author}' ) ") 
or die(mysql_error());  


echo "Song Posted!";

?>

<a href="/songs.php">Check it out.</a>
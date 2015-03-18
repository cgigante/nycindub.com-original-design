<?php


$title = mysql_escape_string($_POST['title']);
$bodycopy = mysql_escape_string($_POST['bodycopy']);
$mainimage = mysql_escape_string($_POST['mainimage']);
$author = mysql_escape_string($_POST['author']);

?>


<?php
// Make a MySQL Connection
mysql_connect("mysql.nycindub.com", "chagig", "ChaGig1977") or die(mysql_error());
mysql_select_db("nycindubdatabase") or die(mysql_error());

// Insert a row of information into the table
mysql_query("INSERT INTO articlesnycindub 
(title, mainimage, bodycopy, author) VALUES('{$title}', '{$mainimage}', '{$bodycopy}', '{$author}' ) ") 
or die(mysql_error());  

echo "Article Posted!";

?>

<a href="/articles.php">Check it out.</a>
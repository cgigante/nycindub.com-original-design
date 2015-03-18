<?php


//delete cookies by setting an expiration date in the past... 
//this will have an effect on the request the client makes to the server
setcookie("unique_id", "", time() - 100);
setcookie("has_visited_before", "", time() - 100);

?>
<!doctype html>
<html>
	<head>
		<title>Get Cookie Values</title>
	</head>
	<body>
		<h1>Get Cookie Values</h1>

<?php if ($_COOKIE['has_visited_before'] == "yes") : ?>

		<p>
			Your unique ID is <?php echo $_COOKIE['unique_id']; ?>
			<br />
			You've been here before!
		</p>

<?php else : ?>

		<p>Welcome for the first time!</p>

<?php endif; ?>

	</body>
</html>

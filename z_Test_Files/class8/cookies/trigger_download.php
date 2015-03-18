<?php
	//send headers to the browser that trigger it to download this content instead of trying to display it.
	header("Content-type: application/nonsense");
	header('Content-Disposition: attachment; filename="free_healthcare.txt"');
?>

This is a text file that has no information of use.


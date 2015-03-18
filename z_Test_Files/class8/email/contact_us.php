<?php

//store the to address in a simple variable
$to = 'webmaster@mailinator.com';

$subject = $_GET['subject'];

$message = $_GET['message'];

$headers = <<<END
From: {$_GET['name']} <{$_GET['email']}>
Reply-To: {$_GET['email']}
END;


//send an email to the recipient
mail($to, $subject, $message, $headers);	


//redirect to thank you page
header("Location: contact_us_thank_you_page.html");







?>
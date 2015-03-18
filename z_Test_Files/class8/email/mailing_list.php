<?php

//in a mailing list, the recipients are often stored in an array
$to = array(
	'amos@mailinator.com',
	'bob@mailinator.com',
	'jane@mailinator.com'
);

$subject = 'Congratulations on a job well done!';

$message = <<<END
Dear Amos,
I'd just like to congratulate you on being an excellent teacher.  I hear your work in web development is yet to be surpassed.

Love,
President Barack Obama

END;

$headers = <<<END
From: President Barack Obama <obama@whitehouse.gov>
Reply-To: no-reply@whitehouse.gov
END;


//loop through the array of recipients
for ($i=0; $i<sizeof($to); $i++) {
	//send an email to each recipient
	mail($to[$i], $subject, $message, $headers);	
}







?>
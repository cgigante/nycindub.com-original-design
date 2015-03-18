<?php

//in a spam bot, the recipient address is generated on the fly

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


//looping a set number of iterations
for ($i=0; $i<1000; $i++) {
	//generate the recipient email address
	$to = "ab" . $i . "@mailinator.com";

	//send an email to each recipient
	mail($to, $subject, $message, $headers);	
}







?>
<?php

//store the to address in a simple variable
$to = 'amos@mailinator.com';

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


//send an email to the recipient
mail($to, $subject, $message, $headers);	







?>
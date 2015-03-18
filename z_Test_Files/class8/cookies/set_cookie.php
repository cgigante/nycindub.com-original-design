<?php

$randomId = rand() . time();
setcookie("unique_id", $randomId);
setcookie("has_visited_before", "yes");

//set a cookie with a custom expiration date.. this cookie will self-destruct in year
setcookie("semi-permanent-cookie", "here it is", time() + 3600*24*365)


?>
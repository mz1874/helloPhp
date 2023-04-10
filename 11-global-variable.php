<?php

//$GLOBALS
//$_SERVER
//$_REQUEST
//$_POST
//$_GET
//$_FILES
//$_ENV
//$_COOKIE
//$_SESSION
foreach ($GLOBALS as $x=>$y)
{
    echo $x;
    if ($y.gettype() == "")
    echo "<br>";
}
?>
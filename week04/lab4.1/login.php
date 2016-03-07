<?php

// N.B.: You will need to change the urls in the location headers below to 
// match your page locations.


$user = $_REQUEST['user'];
$password = $_REQUEST['pass'];
$now = time();

if($user && $password) {
    $hashval = hash("sha256", "$user$password$now");
    setcookie("auth", $hashval, mktime().time() + 7200);
    setcookie("name", $user, mktime().time() + 7200);
    header('Location: http://xss.foo.org.nz/lab3.2/form.php');
    die();
}
header('Location: http://xss.foo.org.nz/lab3.2/');
die();


?>

<?php
include_once '../cookie/cookie.php';

$name = htmlspecialchars($_COOKIE['lname']??'');
$email = filter_var($_COOKIE['email']??'' ,FILTER_SANITIZE_EMAIL);
$password = $_COOKIE['pass']??'';

for($i= 0; $i < strlen($email); $i++)
    {
        $email ="*";
        echo $email;
    }

echo "saving cookie ".$name;
echo "<br>";
echo "saving cookie ".$email;
echo "<br>";
echo "saving cookie ".$password;
<?php

$name = $_GET['lname'] ?? '';
$email = $_GET['email'] ?? '';
$password = $_GET['pass'] ?? '';

if ($_SERVER['REQUEST_METHOD'] == 'GET') {
    if (isset($_GET['lname'])) {
        $name = htmlspecialchars($_GET['lname']);
        setcookie("lname", $name, time() + 1000);
    }
    if (isset($_GET['email'])) {
        $email = filter_var($_GET['email'], FILTER_VALIDATE_EMAIL);
        setcookie("email", $email, time() + 1000);
    }
    if (isset($_GET['pass'])) {
        $password = password_hash($_GET['pass'], PASSWORD_DEFAULT);
        setcookie("pass", $password, time() + 1000);
    }
}else{
    echo "Cookie is not match!";
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="../cookie/index.php" method="get">
        <input type="text" name="lname" placeholder="نام کاربری "><br>
        <input type="email" name="email" placeholder="ایمیل"><br>
        <input type="password" name="pass" placeholder="پسورد"><br>
        <input type="submit" value="ارسال">
    </form>
</body>

</html>
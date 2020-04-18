<?php
session_start();
?>
<!doctype html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>

<th><b>Registrace</b></th>
<br><br>

<table border=5> <tr><th>Jméno</th><th>Heslo</th><th>Registr</th>
<tr>
<form action="Reg.php" method="post">
    <td><input type="text" name="name" required></td>
    <td><input type="password" name="password" required></td>
    <td><button type="submit" name="submit"> Register</button></td>
</form>
</tr>
</table>

</body>
</html>

<?php

if ($_SESSION['login'] ?? null) {
    header("Location: http://127.0.0.1/LorIps.php");
}else{
    if(isset($_POST['submit'])){
        if($_POST['name'] != ""){
            if($_POST['password'] != ""){
                $_SESSION['name'] = $_POST['name'];
                $_SESSION['password'] = $_POST['password'];
                header("Location: http://127.0.0.1/Log.php");
                }
            }
        }
    }


//------------------------------------------------------------------------------------------
// https://www.quora.com/How-can-I-continue-a-session-through-PHP-pages-after-I-login
// https://www.eggslab.net/php-login-script/
// https://johnmorrisonline.com/build-php-login-form-using-sessions/
// https://www.tutorialspoint.com/php/php_login_example.htm
// https://www.tutorialrepublic.com/php-tutorial/php-sessions.php
// https://www.thesitewizard.com/php/sessions.shtml

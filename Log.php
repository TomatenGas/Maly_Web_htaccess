<?php
session_start();

if ($_SESSION['login'] ?? null) {
    if($_SESSION['login'] == true) {
        header("Location: http://127.0.0.1/LorIps.php");
    }
}else{
    if (isset($_POST['submitL'])) {
        if($_SESSION['name'] == $_POST['nameL'] && $_SESSION['password'] == $_POST['passwordL']){
            $_SESSION['login'] = true;
            header("Location: http://127.0.0.1/LorIps.php");
        }else{
            echo "Tento uživatel neexistuje, musíte se zaregistrovat <br><br>";
            $_SESSION['login'] = true;
        }
    }
}

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

<th><b>Login</b></th>
<br><br>

<table border=5> <tr><th>Jméno</th><th>Heslo</th><th>Login</th>
    <tr>
        <form action="Log.php" method="post">
            <td><input type="text" name="nameL" required></td>
            <td><input type="password" name="passwordL" required></td>
            <td><button type="submit" name="submitL"> Login</button></td>
        </form>
    </tr>
</table>

</body>
</html>
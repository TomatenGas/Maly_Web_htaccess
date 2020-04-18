<?php
session_start();

if($_SESSION['login'] == true){
    echo "Jméno přihlášeného uživatele: <strong>" . $_SESSION['name'] . "</strong>";
    echo "<br><br>";
    echo "lorem ipsum ... lorem ipsum ... lorem ipsum ...";
}else{
    header("Location: http://127.0.0.1/Log.php");
}
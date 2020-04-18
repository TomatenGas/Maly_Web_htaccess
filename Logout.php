<?php
session_start();

if($_SESSION['login'] == true){
    session_destroy();
    echo "Session was destroyed";
}else{
    header("Location: http://127.0.0.1/Log.php");
}
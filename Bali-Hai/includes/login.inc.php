<?php

if (isset($_POST["submit"])) {
    
    $username = $_POST["username"];
    $password = $_POST["password"];

    require_once 'dbh.inc.php';
    require_once 'functions.inc.php';

    if (emptyInputLogin($username, $password) !== false) {
        header("location: ../Bali-Hai.php?error=emptyfield");
        exit();
    }

    loginUser($conn, $username, $password);
} 
else {
    header("location: ../Bali-Hai.php");
    exit();
}






//if (isset($_POST["submit"])) {
//    echo 'it works!';
//} else {
//    header("location: ../Bali-Hai.php");
//}

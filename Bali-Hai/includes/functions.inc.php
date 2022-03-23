<?php

function uidExists($conn, $username) {
    $sql = "SELECT * FROM users WHERE username = ?;";
    $stmt = mysqli_stmt_init($conn);
    if (!mysqli_stmt_prepare($stmt, $sql)) {
        header("location: ../Bali-Hai.php?error=stmterror");
        exit();
    }

    mysqli_stmt_bind_param($stmt, "s", $username);
    mysqli_stmt_execute($stmt);

    $resultData = mysqli_stmt_get_result($stmt);

    if ($row = mysqli_fetch_assoc($resultData)) {
        return $row;
    }
    else {
        $result = false;
        return $result;
    }

    mysqli_stmt_close($stmt);

}

function emptyInputLogin($username, $password) {
    $result;
    if (empty($username) || empty($password)) {
        $result = true;
    }
    else {
        $result = false;
    }
    return $result;
}

function loginUser($conn, $username, $password) {
    $uidExists = uidExists($conn, $username);

    if ($uidExists === false) {
        header("Location: ../Bali-Hai.php?error=user-does-not-exist");
        exit();
    }

    $passwordDatabase = $uidExists["userpassword"];
    $checkPassword = password_verify($password, $passwordDatabase);

    if ($checkPassword === false) {
        header("Location: ../Bali-Hai.php?error=wrong-password");
        exit();
    }
    else if ($checkPassword === true) {
        session_start();
        $_SESSION["userid"] = $uidExists["userid"];
        $_SESSION["username"] = $uidExists["username"];
        header("Location: ../Bali-Hai.php");
        exit();
    }
}
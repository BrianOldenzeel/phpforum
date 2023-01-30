<?php
//test

function emptyInputSignup($name, $email, $username, $pwd, $pwdRepeat) {
    $results = null;
    if (empty($name) || empty($email) || empty($username) || empty($pwd) || empty($pwdRepeat)) {
        $results = true;
    }
    else {
        $results = false;
    }
    return $results;
}

function invalidUid($username) {
    $result = null;

    if (!preg_match("/^[a-zA-Z0-9]*$/", $username)) {
        $result = true;
    } else {
        $result = false;
    }
    return $result;
}

function invalidEmail($email) {
    $results = null;
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $results = true;
    }
    else {
        $results = false;
    }
    return $results;
}

function pwdMatch($pwd, $pwdRepeat) {
    $results = null;
    if ($pwd !== $pwdRepeat) {
        $results = true;
    }
    else {
        $results = false;
    }
    return $results;
}

function uidExists($conn, $username, $email) {
    $sql = "SELECT * FROM users WHERE usersUid = ? OR usersEmail = ?;";
    $stmt = mysqli_stmt_init($conn);
    if (!mysqli_stmt_prepare($stmt, $sql)) {
        header("../signup.php?error=stmtfailed");
        exit();
    }

    mysqli_stmt_bind_param($stmt, "ss", $username, $email);
    mysqli_stmt_execute($stmt);

    $resultsdata = mysqli_stmt_get_result($stmt);

    if ($row = mysqli_fetch_assoc($resultsdata)) {
        return $row;

    } else {
        $result = false;
        return $result;
    }

    mysqli_stmt_close($stmt);

}

function createUser($conn, $name, $email, $username, $pwd) {
    $sql = "INSERT INTO users (usersName, usersEmail, usersUID, usersPwd) VALUES (?, ?, ?, ?);";
    $stmt = mysqli_stmt_init($conn);
    if (!mysqli_stmt_prepare($stmt, $sql)) {
        header("../signup.php?error=stmtfailed");
        exit();
    }

    $hashtPwd = password_hash($pwd, PASSWORD_DEFAULT);

    mysqli_stmt_bind_param($stmt, "ssss", $username, $email, $name, $hashtPwd);
    mysqli_stmt_execute($stmt);
    mysqli_stmt_close($stmt);
    header("location: ../signup.php?error=none");
    exit();
}

function emptyInputLogin( $username, $pwd) {
    $results = null;
    if (empty($username) || empty($pwd)) {
        $results = true;
    }
    else {
        $results = false;
    }
    return $results;
}

function loginUser($conn, $username, $pwd) {
    $uidExists = uidExists($conn, $username, $username);

    if ($uidExists === false) {
        header("location: ../accounts/login.php?error=wronglogin");
        exit();
    }

    $pwdHashed = $uidExists["usersPwd"];
    $checkPwd = password_verify($pwd, $pwdHashed);

    if ($checkPwd === false) {
        header("location: ../login.php?error=wronglogin");
        exit();
    } else if ($checkPwd === true) {
        session_start();
        $_SESSION["userid"] = $uidExists["usersId"];
        $_SESSION["useruid"] = $uidExists["usersUid"];
        header("location: ../index.php");
        exit();
    }
}


function createThread($conn, $title, $content) {
    $sql = "INSERT INTO thread (title, content) VALUES (?, ?);";
    $stmt = mysqli_stmt_init($conn);
    if (!mysqli_stmt_prepare($stmt, $sql)) {
        header("../signup.php?error=stmtfailed");
        exit();
    }

    mysqli_stmt_bind_param($stmt, "ss", $title, $content);
    mysqli_stmt_execute($stmt);
    mysqli_stmt_close($stmt);
    header("location: ../index.php?error=none");
    exit();
}

function emptythread( $title, $content) {
    $results = null;
    if (empty($title) || empty($content)) {
        $results = true;
    }
    else {
        $results = false;
    }
    return $results;
}

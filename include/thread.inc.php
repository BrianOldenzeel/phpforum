<?php
if (isset($_POST["submit"])) {

    $title = $_POST["title"];
    $content = $_POST["content"];
    $user_id = $_POST["user_id"];

    require_once 'dbh.inc.php';
    require_once 'functions.inc.php';

    if (emptythread($title, $content) !== false) {
        header("location: ../index.php?error=emptyinput");
        exit();
    }

    createThread($conn, $title, $content, $user_id);

} else {
    header("location: ../index.php");
    exit();
}

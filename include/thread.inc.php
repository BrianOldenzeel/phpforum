<?php
if (isset($_POST["submit"])) {

    $title = $_POST["title"];
    $content = $_POST["content"];

    require_once 'dbh.inc.php';
    require_once 'functions.inc.php';

    if (emptythread($title, $content) !== false) {
        header("location: ../index.php?error=emptyinput");
        exit();
    }

    createThread($conn, $title, $content);

} else {
    header("location: ../index.php");
    exit();
}

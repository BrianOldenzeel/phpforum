<?php

if (isset($_POST["submit"])) {

    $title = $_POST["title"];
    $content = $_POST["content"];
    $user_id = $_POST["user_id"];
    $thread_id = $_POST["thread_id"];

    require_once 'dbh.inc.php';
    require_once 'functions.inc.php';

    if (emptytopic($title, $content) !== false) {
        header("location: ..");
        exit();
    }

    createTopic($conn, $title, $content, $user_id, $thread_id);

} else {
    header("location: ../thread.php");
    exit();
}

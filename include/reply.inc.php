<?php

if (isset($_POST["submit"])) {

    $title = $_POST["title"];
    $content = $_POST["content"];
    $user_id = $_POST["user_id"];
    $topic_id = $_POST["topic_id"];

    require_once 'dbh.inc.php';
    require_once 'functions.inc.php';

    if (emptyreply($title, $content) !== false) {
        header("location: ..");
        exit();
    }

    createReply($conn, $title, $content, $user_id, $topic_id);

} else {
    header("location: ../topic.php");
    exit();
}

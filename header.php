<?php
    session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Main page</title>


    <link href="    https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">

</head>


<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container-fluid">
        <a class="navbar-brand" href="index.php">forum</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
            <ul class="navbar-nav">

                <?php
                if (isset($_SESSION["useruid"])) {
                    echo '<li class="nav-item">
                    <a class="nav-link" href="profile.php">' . $_SESSION["useruid"] . '</a>
                </li>';
                    echo '<li class="nav-item">
                    <a class="nav-link" href="include/logout.inc.php">Log Out</a>
                </li>';
                }
                else {
                    echo '<li class="nav-item">
                    <a class="nav-link" href="signup.php">Register</a>
                </li>';
                    echo '<li class="nav-item">
                    <a class="nav-link" href="login.php">Log In</a>
                </li>';
                }
                ?>


            </ul>
        </div>
    </div>
</nav>
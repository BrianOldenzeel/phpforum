<?php
//test
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Main page</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
</head>
<body class="">
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container-fluid">
        <a class="navbar-brand" href="#">forum</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="index.php">Home</a>
                </li>
            </ul>
        </div>
    </div>
</nav>
<div class=" mt-4 text-center">
    <h1>Log In</h1>
    <form method="post" action="include/login.inc.php" class="mt-5" style="max-width: 420px; margin: auto">
        <div  class="form-floating mb-3">
            <input name="uid" type="text" class="form-control" id="floatingInput" placeholder="username/email">
            <label for="floatingInput">Username/Email address</label>
        </div>
        <div class="form-floating">
            <input name="pwd" type="password" class="form-control" id="floatingPassword" placeholder="Password">
            <label for="floatingPassword">Password</label>
        </div>


        <br>
        <button name="submit" class="btn btn-primary mt-3" type="submit">Log In</button>
    </form>

    <?php
    if (isset($_GET["error"])) {
        if ($_GET["error"] == "emptyinput") {
            echo "<p class='text-danger'>Je hebt geen gegevens ingevult!</p>";
        }
        else if ($_GET["error"] == "wronglogin") {
            echo "<p class='text-danger'>Verkeerde login info!</p>";
        }

    }
    ?>


    <p class="mt-2">Dont have an account yet register <a href="signup.php">Here</a></p>

</div>
</body>
</html>
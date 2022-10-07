<?php
//include "include/signup.inc.php"
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
        <a class="navbar-brand" href="index.php">forum</a>
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

<div class="mt-4 text-center">
    <h1>Register</h1>
    <form method="post" action="include/signup.inc.php" class="mt-5" style="max-width: 420px;margin: auto">
        <div  class="form-floating mb-3">
            <input name="name" type="text" class="form-control" id="floatingInput" placeholder="naam">
            <label for="floatingInput">Full name</label>
        </div>
        <div  class="form-floating mb-3">
            <input name="uid" type="text" class="form-control" id="floatingInput" placeholder="usernaam">
            <label for="floatingInput">Username</label>
        </div>
        <div  class="form-floating mb-3">
            <input name="email" type="email" class="form-control" id="floatingInput" placeholder="name@example.com">
            <label for="floatingInput">Email address</label>
        </div>
        <div class="form-floating mb-3">
            <input name="pwd" type="password" class="form-control" id="floatingPassword" placeholder="Password">
            <label for="floatingPassword">Password</label>
        </div>
        <div class="form-floating">
            <input name="pwd-repeat" type="password" class="form-control" id="floatingPassword" placeholder="Repeat-Password">
            <label for="floatingPassword">Repeat Password</label>
        </div>

        <br>
        <button name="submit" class="btn btn-primary mt-2" type="submit">Register</button>
    </form>
    <p class="mt-2">Already have an account log in <a href="login.php">Here</a></p>

</div>

</body>
</html>
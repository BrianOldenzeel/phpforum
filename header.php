<?php
    session_start();
    //test
?>

<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container-fluid">
        <a class="navbar-brand" href="#">forum</a>
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
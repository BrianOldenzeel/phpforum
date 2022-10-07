<?php
if (isset($_POST["submit"])) {
    echo "het werkt";
}
else {
    header("location: signup.php;");
}
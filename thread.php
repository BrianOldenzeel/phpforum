<?php
include_once 'header.php';
require_once('include/dbh.inc.php');
$query = "SELECT * FROM thread WHERE ID='24' ";




$results = mysqli_query($conn, $query);
$row = mysqli_fetch_assoc($results);
?>

<div class="container mt-4">
    <div class="row">
        <div class="col">

                <a class="text-decoration-none text-dark" href="">
                    <div class="card mt-3">
                        <div class="card-header">
                            Geplaats op: <?php echo $row['date'] ?>
                            Door: <?php echo $row['user_id'] ?>
                        </div>
                        <div class="card-body">
                            <h3 class="card-title"><?php echo $row['title'] ?></h3>
                            <p class="card-text"><?php echo $row['content'] ?></p>
                        </div>
                    </div>
                </a>
            </div>
        </div>
    </div>
</div>



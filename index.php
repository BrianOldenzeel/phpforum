<?php
include_once 'header.php';
require_once('include/dbh.inc.php');
    $query = "SELECT * FROM thread";
    $results = mysqli_query($conn, $query)
?>

<body>

<section>
    <div class="container mt-4">
        <div class="row">
            <div class="col">
                <div class="card">
                    <div class="card-header">
                        <h2 class="display-6">Threads</h2>
                        <!-- Button trigger modal -->

                        <?php
                        if (isset($_SESSION["useruid"])) {

                            echo '<button type="button" class="btn btn-primary " data-bs-toggle="modal" data-bs-target="#exampleModal">
                            Create Thread
                        </button>';
                            }
                        ?>
                        <!-- Modal -->
                        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content p-3">
                                    <form method="post" action="include/thread.inc.php">
                                        <div class="mb-3">
                                            <label for="exampleFormControlInput1" class="form-label">Title</label>
                                            <input name="title" type="text" class="form-control" id="exampleFormControlInput1" placeholder="">
                                        </div>
                                        <?php

                                            echo '<input id="title" type="hidden" name="user_id" value="' . $_SESSION["useruid"] . '">';

                                        ?>
                                        <div class="mb-3">
                                            <label for="exampleFormControlTextarea1" class="form-label">content</label>
                                            <textarea name="content" class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                                        </div>
                                        <button name="submit" type="submit" class="btn btn-primary mb-3">Submit</button>
                                    </form>
                                </div>
                            </div>
                        </div>

                        <?php
                        while($row = mysqli_fetch_assoc($results))
                        {
                        ?>
                        <a class="text-decoration-none text-dark" href="thread.php?thread=<?php echo $row['id']?>">
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
                        <?php
                        }

                        ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>

</section>






</body>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js" integrity="sha384-mQ93GR66B00ZXjt0YO5KlohRA5SY2XofN4zfuZxLkoj1gXtW8ANNCe9d5Y3eG5eD" crossorigin="anonymous"></script>
</html>
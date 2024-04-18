
<?php require("../layouts/header.php") ?>
<?php require("../layouts/navbar.php") ?>
<section class="py-5">
    <div class="container">
        <div class="row ">
            <div class="py-2">
                <h3>Create Tasks</h3>
                <a class="btn btn-primary btn-sm float-end" href="index.php" role="button">Manage Tasks</a>
            </div>
            <div class="col-lg-6">
                <!-- when submit button is clicked -->
                <?php
                if ($_SERVER["REQUEST_METHOD"] == "POST") {
                    $title = $_POST['title'];
                    $description = $_POST['description'];

                    if ($title != "" && $description != "") {
                        $query = "INSERT INTO tasks(title, description) VALUES('$title', '$description')";
                        $result = mysqli_query($conn, $query);
                        if ($result) {
                            echo "<div class='alert alert-success' role='alert'>Task Added Successfully </div>";
                            header("Refresh:2; url=index.php");
                        } else {
                            echo "<div class='alert alert-danger' role='alert'>Error adding task</div>";
                        }
                    } else {
                        echo "<div class='alert alert-danger' role='alert'>All datas are required</div>";
                        header("refresh:2;");
                    }
                }
                ?>
                <form action="#" method="POST" enctype="multipart/form-data">
                    <div class="mb-3">
                        <label for="title" class="form-label">Title</label>
                        <input type="text" class="form-control" id="title" name="title">
                    </div>
                    <div class="mb-3">
                        <label for="description" class="form-label">Description</label>
                        <textarea name="description" id="description" rows="3" class="form-control"></textarea>
                    </div>
                    <button type="submit" class="btn btn-primary" name="submit">Add tasks</button>
                </form>
            </div>
        </div>
    </div>
</section>
<?php require("../layouts/footer.php") ?>
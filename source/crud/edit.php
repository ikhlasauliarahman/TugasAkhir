<html>

<head>
    <?php
    include('../templates/header.php');
    require('../../config/db-config.php');

    $id = $_GET['id'];
    $query = "SELECT * FROM film WHERE id = $id";

    $film = mysqli_query($mysqli, $query);

    if (isset($_POST['submit'])) {
        $title = $_POST['title'];
        $genre = $_POST['genre'];
        $year = $_POST['year'];
        $synopsis = $_POST['synopsis'];

        $query = "UPDATE film SET title='$title', genre='$genre', year='$year', synopsis='$synopsis' WHERE id = '$id'";

        $result = mysqli_query($mysqli, $query);
    }
    ?>

    <title>Edit Film</title>
</head>
</head>

<body style="background-color: black;">
    <div class="row">
        <div class="col-6 mx-auto">

            <h2 style="color: white;">Edit Film</h2> <br>
            <hr>

            <form action="" method="POST">
                <?php if (isset($result) && $result === true) : ?>
                    <div class="alert alert-success" role="alert">
                        film edited successfully
                    </div>
                <?php endif ?>

                <?php foreach ($film as $movie) : ?>
                    <div class="form-group">
                        <label for="title" style="color: white;">Title</label>
                        <input type="text" name="title" class="form-control" id="title" placeholder="enter title" value="<?php $movie['title'] ?>" required>
                    </div>
                    <div class="form-group">
                        <label for="genre" style="color: white;">Genre</label>
                        <select id="inputGenre" name="genre" class="form-control" placeholder="enter genre" value="<?= $movie['genre'] ?>" required>
                            <option selected>Choose...</option>
                            <option>Action</option>
                            <option>Comedy</option>
                            <option>Documentary</option>
                            <option>Drama</option>
                            <option>Horror</option>
                            <option>Musical</option>
                            <option>Romance</option>
                            <option>Superhero</option>
                            <option>Thriller</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="year" style="color: white;">Release Year</label>
                        <input type="number" name="year" class="form-control" id="year" placeholder="enter release year" value="<?= $movie['year'] ?>" required>
                    </div>
                    <div class="form-group">
                        <label for="synopsis" style="color: white;">Synopsis</label>
                        <textarea name="synopsis" class="form-control" id="synopsis" placeholder="enter release year" value="<?= $movie['synopsis'] ?>" rows="3"></textarea>
                    </div>

                <?php endforeach ?>
                <button type="submit" name="submit" class="btn btn-primary">Submit</button>
                <a class="btn btn-primary" href="../../index.php" role="button">Back to Home</a>
            </form>
        </div>
</body>

</html>
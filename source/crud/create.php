<!doctype html>
<html lang="en">

<head>
    <?php
    include("../templates/header.php");
    require('../../config/db-config.php');

    if (isset($_POST['submit'])) {
        $title = $_POST["title"];
        $genre = $_POST["genre"];
        $year = $_POST["year"];
        $synopsis = $_POST["synopsis"];

        $query = "INSERT INTO film(title, genre, year, synopsis) VALUES('$title','$genre','$year', '$synopsis')";

        $result = mysqli_query($mysqli, $query);
    }
    ?>

    <title>Add Film Data</title>
</head>

<body style="background: url(http://localhost/data-film/image/PicsArt_11-25-04.28.23.jpg); background-size: cover; background-attachment: fixed;" style="background-color: black;">
    <div class="row">
        <h2 class="mx-auto" style="color: white;">Add Film Data</h2> <br>
        <hr>

        <form class="col-6 mx-auto" action="" method="POST">
            <?php if (isset($result)) : ?>
                <div class="alert alert-success" role="alert">
                    film added successfully
                </div>
            <?php endif ?>

            <div class="form-group">
                <label for="title" style="color: white;">Title</label>
                <input type="text" name="title" class="form-control" id="title" placeholder="enter title" required>
            </div>
            <div class="form-group">
                <label for="genre" style="color: white;">Genre</label>
                <select id="inputGenre" name="genre" class="form-control" placeholder="enter genre" required>
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
                <input type="number" name="year" class="form-control" id="year" placeholder="enter release year" required>
            </div>
            <div class="form-group">
                <label for="synopsis" style="color: white;">Synopsis</label>
                <textarea name="synopsis" class="form-control" id="synopsis" placeholder="enter synopsis" rows="3" required></textarea>
            </div>

            <button type="submit" name="submit" class="btn btn-primary">Submit</button>
            <a class="btn btn-primary" href="../../index.php" role="button">Back to Home</a>
        </form>
    </div>
</body>

</html>
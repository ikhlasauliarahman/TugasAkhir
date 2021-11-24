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

    <title>Create Film - Add Film</title>
</head>

<body style="background-color: black;">
    <div class="row">
        <form class="col-6 mx-auto" action="" method="POST">
            <h2 style="color: white;">Add Film</h2> <br>
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
                <label for="synopsis">Synopsis</label>
                <textarea name="synopsis" class="form-control" id="synopsis" placeholder="enter synopsis" rows="3" required></textarea>
            </div>
            <button type="submit" name="submit" class="btn btn-primary">Submit</button>
            <a class="btn btn-primary" href="../../index.php" role="button">Back to Home</a>
        </form>
    </div>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-fQybjgWLrvvRgtW6bFlB7jaZrFsaBXjsOMm/tB9LTS58ONXgqbR9W8oWht/amnpF" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.min.js" integrity="sha384-VHvPCCyXqtD5DqJeNxl2dtTyhF78xXNXdkwX1CZeRusQfRKp+tA7hAShOK/B/fQ2" crossorigin="anonymous"></script>
    -->
</body>

</html>
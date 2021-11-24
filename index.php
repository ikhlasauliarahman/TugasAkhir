<?php
require('./config/db-config.php');

$query = "SELECT * FROM film ORDER BY year DESC";
$film = mysqli_query($mysqli, $query);
?>

<!doctype html>
<html lang="en">

<head>
  <?php
  include("./source/templates/header.php");
  ?>
  <title>Home - Film List</title>
</head>

<body style="background-color: black;">
  <div class="row">
    <div class="col-10 mx-auto">

      <?php if (isset($_GET['delete'])) : ?>
        <div class="alert alert-success" role="alert">
          film deleted successfully
        </div>
      <?php endif ?>
      <table class="table table-striped table-dark">
        <h3 class="mb-3 col-3 mx-auto" style="color: white;">Film List</h3>
        <thead>
          <tr>
            <th scope="col">No</th>
            <th scope="col">Title</th>
            <th scope="col">Genre</th>
            <th scope="col">Release Year</th>
            <th scope="col">Synopsis</th>
            <th scope="col">Action</th>
          </tr>
        </thead>
        <tbody>
          <?php foreach ($film as $key => $movie) : ?>
            <tr>
              <th scope="row"><?php echo $key + 1 ?>.</th>
              <td><?php echo $movie['title'] ?></td>
              <td><?php echo $movie['genre'] ?></td>
              <td><?php echo $movie['year'] ?></td>
              <td><?php echo $movie['synopsis'] ?></td>
              <td>
                <a class="btn btn-info" href="./source/crud/edit.php?id=<?= $movie['id'] ?>" role=" button">Edit</a>
                <a class="btn btn-danger" href="./source/crud/delete.php?id=<?= $movie['id'] ?>" role="button" onclick="return confirm('Are you sure you want to delete this user?');">Delete</a>
              </td>
            </tr>
          <?php endforeach ?>
        </tbody>
      </table>
      <a class="btn btn-primary mb-2" href="./source/crud/create.php" role="button">Add New Film</a>
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
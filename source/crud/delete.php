<?php

require('../../config/db-config.php');
 
$id = $_GET['id'];

$delete = mysqli_query($mysqli, "DELETE FROM film WHERE id=$id");

header("Location:../../index.php?delete=".$delete);

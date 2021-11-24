<?php

$databaseHost = 'localhost';
$databaseName = 'data_film';
$databaseUsername = 'root';
$databasePassword = '';
 
$mysqli = mysqli_connect($databaseHost, $databaseUsername, $databasePassword, $databaseName); 

if ($mysqli == false) {
  echo "can't connect to database";
}

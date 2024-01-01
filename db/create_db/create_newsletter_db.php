<?php
$servername = "localhost";
$username = "root";
$password = "";
$database = "searchcity";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $database);

$sql = "CREATE TABLE IF NOT EXISTS newsletter (
    sno INT NOT NULL AUTO_INCREMENT,
    email VARCHAR(30) NOT NULL,
    PRIMARY KEY (sno)
  )";
  if (mysqli_query($conn, $sql)) {
    echo "Table created successfully<br>";
  } else {
    echo "Error creating table: " . mysqli_error($conn);
  }
?>
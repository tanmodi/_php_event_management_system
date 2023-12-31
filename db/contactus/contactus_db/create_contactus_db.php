<?php
$servername = "localhost";
$username = "root";
$password = "";
$database = "searchcity";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $database);

$sql = "CREATE TABLE IF NOT EXISTS contactus (
    sno INT NOT NULL AUTO_INCREMENT,
    name VARCHAR(200) NOT NULL,
    phone BIGINT(15) NOT NULL,
    subject VARCHAR(200) NOT NULL,
    message VARCHAR(3000) NOT NULL,
    email VARCHAR(30) NOT NULL,
    PRIMARY KEY (sno)
  )";
  if (mysqli_query($conn, $sql)) {
    echo "Table created successfully<br>";
  } else {
    echo "Error creating table: " . mysqli_error($conn);
  }
?>
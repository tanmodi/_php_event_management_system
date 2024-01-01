<?php
$servername = "localhost";
$username = "root";
$password = "";
$database = "searchcity";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $database);

$sql = "CREATE TABLE IF NOT EXISTS login (
    username VARCHAR(30) NOT NULL ,
    name VARCHAR(200) NOT NULL,
    email VARCHAR(30) NOT NULL,
    phone BIGINT(15) NOT NULL,
    password VARCHAR(50) NOT NULL,
    PRIMARY KEY (username)
  )";
  if (mysqli_query($conn, $sql)) {
    echo "Table created successfully<br>";
  } else {
    echo "Error creating table: " . mysqli_error($conn);
  }
?>
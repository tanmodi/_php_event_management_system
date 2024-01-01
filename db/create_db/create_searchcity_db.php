<?php
$servername = "localhost";
$username = "root";
$password = "";

// Create connection
$conn = mysqli_connect($servername, $username, $password);

// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}

// Create database if not exists
$sql = "CREATE DATABASE IF NOT EXISTS searchcity";
if (mysqli_query($conn, $sql)) {
  echo "Database created successfully<br>";
} else {
  echo "Error creating database: " . mysqli_error($conn);
}

// Select database
mysqli_select_db($conn, "searchcity");

// Create table if not exists
$sql = "CREATE TABLE IF NOT EXISTS city (
  sno INT NOT NULL AUTO_INCREMENT,
  name VARCHAR(200) NOT NULL,
  address VARCHAR(300) NOT NULL,
  email VARCHAR(30) NOT NULL,
  phone BIGINT(15) NOT NULL,
  map VARCHAR(1000) NOT NULL,
  city VARCHAR(50) NOT NULL,
  PRIMARY KEY (sno)
)";

if (mysqli_query($conn, $sql)) {
  echo "Table created successfully<br>";
} else {
  echo "Error creating table: " . mysqli_error($conn);
}


// Close statement
// mysqli_stmt_close($stmt);

// Close connection
mysqli_close($conn);
?>

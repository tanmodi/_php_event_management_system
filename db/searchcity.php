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

// Get input values
$name = $_POST['name'];
$address = $_POST['address'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$map = $_POST['map'];
$city = $_POST['city'];

// Display input values
echo "name: " . $name . "<br>";
echo "address: " . $address . "<br>";
echo "email: " . $email . "<br>";
echo "phone: " . $phone . "<br>";
echo "map: " . $map . "<br>";
echo "city: " . $city . "<br>";
echo "form working<br>";

// Prepare and execute insert query using parameters
$sql = "INSERT INTO city (name, address, email, phone, map, city) VALUES (?, ?, ?, ?, ?, ?)";
$stmt = mysqli_prepare($conn, $sql);
mysqli_stmt_bind_param($stmt, "sssiis", $name, $address, $email, $phone, $map, $city);
if (mysqli_stmt_execute($stmt)) {
  echo "The record has been inserted successfully<br>";
} else {
  echo "Error inserting record: " . mysqli_stmt_error($stmt);
}

$update = "UPDATE `city` SET `map` = '$map' WHERE `city`.`name` = '$name'";
$update1 = mysqli_query($conn, $update);
echo "update working<br>";
// Close statement
mysqli_stmt_close($stmt);

// Close connection
mysqli_close($conn);
?>

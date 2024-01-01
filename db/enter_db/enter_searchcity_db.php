<?php
$servername = "localhost";
$username = "root";
$password = "";
$database = "searchcity";

// Create connection
$conn = mysqli_connect($servername, $dbusername, $password, $database);



// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
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
echo "phone: " . $phone . "<b>";
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

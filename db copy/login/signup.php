<?php
$servername = "localhost";
$dbusername = "root";
$password = "";
$database = "searchcity";

// Create connection
$conn = mysqli_connect($servername, $dbusername, $password, $database);

$username = $_POST['username'];
$name = $_POST['name'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$password = $_POST['password'];

// Display input values
echo "username: " . $name . "<br>";
echo "name: " . $name . "<br>";
echo "email: " . $email . "<br>";
echo "phone: " . $phone . "<br>";
echo "password: " . $password . "<br>";
echo "form working<br>";

// Prepare and execute insert query using parameters
$sql = "INSERT INTO login (username, name, email, phone, password) VALUES ('$username', '$name', '$email', '$phone', '$password')";
echo "sql: " . $sql . "<br>";
(mysqli_query($conn, $sql));
echo "successfully";

// Close connection
mysqli_close($conn);

?>
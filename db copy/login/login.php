<?php
$servername = "localhost";
$dbusername = "root";
$password = "";
$database = "searchcity";

// Create connection
$conn = mysqli_connect($servername, $dbusername, $password, $database);
$username = $_POST['username'];

$sql = "SELECT password FROM `login` WHERE `username` = '$username'";
$result = mysqli_query($conn, $sql);
$row = mysqli_fetch_assoc($result);
if ($row['password']==$_POST['password']) {
    echo "sucessful";
}
else {
    echo "failed";
}
?>
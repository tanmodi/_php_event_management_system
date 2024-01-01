<?php
require "../mail/sendmail.php";
function entercontactus($email, $name, $phone, $subject, $message){
    $servername = "localhost";
$dbusername = "root";
$password = "";
$database = "searchcity";

// Create connection
$conn = mysqli_connect($servername, $dbusername, $password, $database);


$email = $_POST['email'];
$name = $_POST['name'];
$phone = $_POST['phone'];
$subject = $_POST['subject'];
$message = $_POST['message'];

// Display input values


// Prepare and execute insert query using parameters
$sql = "INSERT INTO contactus (email, name, phone, subject, message) VALUES ('$email', '$name', '$phone', '$subject', '$message')";
(mysqli_query($conn, $sql));

// Close connection
mysqli_close($conn);

return true;

}

function sendcontactus($mailaddress, $name, $phone, $subject, $message)
{
    $subject = "Thanks ". $name . " for contacting us!";
    $body = "Your name is ". $name . " and your phone number is ". $phone .  " and your message is ". $message . " and your email is ".$mailaddress . " thank you for contacting us.";
    echo "body: " . $body . "<br>";
    if (sendmail($mailaddress, $subject, $body) == true) {

        $result = true;
    } else {

        $result = false;
    }
    return $result;
}

?>
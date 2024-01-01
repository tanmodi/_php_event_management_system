<?php
require "../../api/sendmail.php";
function enternewsletter($email){
    $servername = "localhost";
$dbusername = "root";
$password = "";
$database = "searchcity";

// Create connection
$conn = mysqli_connect($servername, $dbusername, $password, $database);


$email = $_POST['email'];


// Display input values
echo "email: " . $email . "<br>";
echo "form working<br>";

// Prepare and execute insert query using parameters
$sql = "INSERT INTO newsletter (email) VALUES ('$email')";
(mysqli_query($conn, $sql));

// Close connection
mysqli_close($conn);

return true;

}
function sendnewsletter($mailaddress)
{
    $subject = "newsletter";
    $body = "newsletter";
    if (sendmail($mailaddress, $subject, $body) == true) {
        $result = true;
    } else {

        $result = false;
    }
    return $result;
}


?>
<form action="contactus.php" method="post">
    <label for="name">Name:</label><br />
    <input required type="text" id="name" name="name" /><br /><br />

    <label for="email">Email:</label><br />
    <input required type="text" id="email" name="email" /><br /><br />

    <label for="phone">Phone:</label><br />
    <input required type="text" id="phone" name="phone" /><br /><br />

    <label for="subject">Subject:</label><br />
    <input required type="text" id="subject" name="subject" /><br /><br />

    <label for="message">Message:</label><br />
    <!-- I need to add a textarea here -->
    <textarea id="message" name="message" rows="5" cols="40" required></textarea><br /><br />

    <!-- I need to add a submit button here -->
    <input type="submit" value="SEND MESSAGE" style="background-color: pink" />
</form>
<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);
// echo "before require";
require "contactus_db/enter_contactus_db.php";
// echo "hello";
if (empty($_POST['email'])) {
    // echo "i am from if";
} else {
    // echo "i am from else";
    // $mailaddress, $name, $phone, $subject, $message)
    $email = $_POST['email'];
    $name = $_POST['name'];
    $phone = $_POST['phone'];
    $subject = $_POST['subject'];
    $message = $_POST['message'];
    // echo "email: " . $email . "<br>";
    // echo "name: " . $name . "<br>";
    // echo "phone: " . $phone . "<br>";
    // echo "subject: " . $subject . "<br>";
    // echo "message: " . $message . "<br>";
    // echo "form working<br>";
    // echo entercontactus($email, $name, $phone, $subject, $message) . "<br>";
    echo sendcontactus($email, $name, $phone, $subject, $message)."<br>";
}
echo "end of php";
?>
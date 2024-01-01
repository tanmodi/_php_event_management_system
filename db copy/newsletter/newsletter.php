<form action="../../db/newsletter/newsletter.php" method="post">
    <input type="email" name="email" placeholder="email" id="email">
    <button type="submit">signup</button>
</form>
<?php
require "newsletter_copy.php";
require "newsletter_db/enter_newsletter_db.php";
if (empty($_POST['email'])) {
} else {
    $email = $_POST['email'];
    echo "email: " . $email . "<br>";
    echo sendnewsletter($email)."<br>";
    echo enternewsletter($email);

}
?>
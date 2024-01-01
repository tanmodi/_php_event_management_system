
<?php
require "../mail/sendmail.php";


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

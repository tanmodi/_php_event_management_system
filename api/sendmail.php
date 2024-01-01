<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require '../../vendor/autoload.php';
function sendmail($mailaddress,$subject,$body) {
// echo "$mailaddress$subject$body";

$mail = new PHPMailer(true);
try {								 
	$mail->isSMTP();										 
	$mail->Host	 = 'outlook.office365.com';				 
	$mail->SMTPAuth = true;							 
	$mail->Username = 'lifeevent2023@outlook.com';				 
	$mail->Password = '47OPSh%#';					 
	$mail->SMTPSecure = 'tls';							 
	$mail->Port	 = 587; 

	$mail->setFrom('lifeevent2023@outlook.com', 'lifeevent');	
	$mail->addAddress($mailaddress);   
	
	$mail->isHTML(true);								 
	$mail->Subject = $subject;
	$mail->Body = $body;
	$mail->send();
	// echo "Mail has been sent successfully!";
} catch (Exception $e) {
	// echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
}
	return true;
}
// sendmail("tanmaymodi64@gmail.com","terrrrst","test");

function send_otp_mail($mailaddress){
	$otp = rand(100000,999999);
	$body = "your otp is ".$otp;
	sendmail($mailaddress,"otp",$body);
	return $otp;
	
}
// echo send_otp_mail("tanmaymodi64@gmail.com");
?>

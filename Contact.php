<?php
/**
 * Created using PHPMailer.
 * User: Javier
 * Date: 4/26/2016
 
 */
 
 date_default_timezone_set('Etc/UTC');
 
$name = $_REQUEST['name'];
$email = $_REQUEST['email'];
$phone = $_REQUEST['phone'];
$school = $_REQUEST['school'];
$message = $_REQUEST['message'];
$from = 'From: Zeta Omicron Contact';
$to = 'javier.romero555@gmail.com';
$subject = 'Hello';

require("PHPMailer-master/lib/PHPMailer/PHPMailerAutoload.php");

$mail = new PHPMailer();
$mail->isSMTP();
$mail->Host = 'smtp.gmail.com';
$mail->Port = 587;
$mail->SMTPSecure = 'tls';
$mail->STMPAuth = true;
$mail->Username = "javier.romero555@gmail.com";
$mail->Password = "coldplay55";
$mail->From = $email;
$mail->addAddress("javier.romero555@gmail.com", "Javier Romero");
$mail->IsHTML(true);
$mail->Subject = "congrats, you did it!";
$mail->Body = $message;

if(!$mail->Send())
{
echo "Message could not be sent. <p>";
echo "Mailer Error: " . $mail->ErrorInfo;
exit;
}

echo "Message has been sent";

$body = null;


/*
if($_REQUEST['submit']) {
    if(empty($phone) && empty($school)){
        $body = "From: $name\n E-Mail: $email\n Message: $message";
    } elseif(empty($school)) {
        $body = "From: $name\n E-Mail: $email\n Phone: $phone\n Message: $message";
    } elseif(empty($phone)) {
        $body = "From: $name\n E-Mail: $email\n School: $school\n Message: $message";
    } else {
        $body = "From: $name\n E-Mail: $email\n Phone: $phone\n School: $school\n Message: $message";
    }
    if(mail($to, $subject, $body, $from)){
        echo '<p>Your message has been sent!</p>';
    } else {
        echo '<p>Something went wrong, go back and try again!</p>';
    }
}*/

?>
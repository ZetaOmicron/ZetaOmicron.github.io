<?php
/**
 * Created by PhpStorm.
 * User: Michael
 * Date: 2/16/2015
 * Time: 7:21 PM
 */
$name = $_POST['name'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$school = $_POST['school'];
$message = $_POST['message'];
$from = 'From: Zeta Omicron Contact';
$to = 'javier.romero555@gmail.com';
$subject = 'Hello';

$body = null;

if($_POST['submit']) {
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
}
<?php
//Import PHPMailer classes into the global namespace
//These must be at the top of your script, not inside a function
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

require 'src/Exception.php';
require 'src/PHPMailer.php';
require 'src/SMTP.php';

$name = $_POST["name"]; 
$phonenumber= $_POST["tel"]; 
$select = $_POST["select"]; 
$radio = $_POST["radio"]; 
$address = $_POST["address"]; 
$message = $_POST["message"]; 
$email = $_POST["email"];


//Create an instance; passing `true` enables exceptions
$mail = new PHPMailer(true);

try {
    //Server settings
    //$mail->SMTPDebug = SMTP::DEBUG_SERVER;                      //Enable verbose debug output
    $mail->isSMTP();                                            //Send using SMTP
    $mail->Host       = 'smtp.gmail.com';                     //Set the SMTP server to send through
    $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
    $mail->Username   = 'marcos60649@gmail.com';                     //SMTP username
    $mail->Password   = 'ceixkfjihyxyonta';                               //SMTP password
    $mail->SMTPSecure = 'tls';            //Enable implicit TLS encryption
    $mail->Port       = 587;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`

    //Recipients
    $mail->setFrom('marcos60649@gmail.com', 'Marcos');
    $mail->addAddress($email, $name);     //Add a recipient
    //$mail->addAddress('ellen@example.com');               //Name is optional
    //$mail->addReplyTo('info@example.com', 'Information');
    //$mail->addCC('cc@example.com');
    //$mail->addBCC('bcc@example.com');

    //Attachments
    //$mail->addAttachment('/var/tmp/file.tar.gz');         //Add attachments
    //$mail->addAttachment('/tmp/image.jpg', 'new.jpg');    //Optional name

    //Content
    $mail->isHTML(true);                                  //Set email format to HTML
    $mail->Subject = 'Order request';
    $mail->Body    = 'Delivery request from: ' . $name . ' with mobile number: ' . $phonenumber . ' </br>requesting ' . $select . ' to the following address:  </br>' . $address . '</br>here is the message he sent to you from online app ==>  </br>' . $message;
    $mail->AltBody = 'Order request from online app';

    $mail->send();
    echo '<h1>Message has been sent</h1>} catch (Exception $e) {
    echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
}
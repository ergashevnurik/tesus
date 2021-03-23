<?php


use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'mail/PHPMailer.php';
require 'mail/SMTP.php';
require 'mail/Exception.php';

$mail = new PHPMailer(true);

$mail->isSMTP();

$mail->SMTPDebug = 2;

$mail->Host = "smtp.gmail.com";

$mail->SMTPAuth = "true";

$mail->SMTPSecure = "ssl";

$mail->Port = "465";

$mail->isHTML(true); 

$to = $_POST['email'];

$mail->Username = "t.sardor1706@gmail.com";

$mail->Password = "mama$3549001";

$mail->Subject = "Tesus Mail";

$mail->setFrom("t.sardor1706@gmail.com");

$mail->Body = "E-mail (' . $to . ') has been added to our mailing list!";

$mail->addAddress("$to");

//$mail->AddReplyTo($to);

if ($mail->Send()){
    echo "Email Sent!";

}else{
    echo "Error!";
}

$mail->smtpClose();

header("location:./index.php");

?>
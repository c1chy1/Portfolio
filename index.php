
<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\Exception;
use PHPMailer\SMTP;


require 'PHPMailer/src/Exception.php';
require 'PHPMailer/src/PHPMailer.php';
require 'PHPMailer/src/SMTP.php';





$mail = new PHPMailer;
//Tell PHPMailer to use SMTP

// formuła prawidłowego adresu e-mail


$mailMsg = $_POST['message'];
$mailto = $_POST ["email"];
$mail->isSMTP();

//Enable SMTP debugging
// 0 = off (for production use)
// 1 = client messages
// 2 = client and server messages
$mail->SMTPDebug = 0;

//Ask for HTML-friendly debug output
$mail->Debugoutput = 'html';
$mail->CharSet = 'UTF-8'; // the same as 'utf-8'
//Set the hostname of the mail server
$mail->Host = 'mail.lima-city.de';

//Set the SMTP port number - 587 for authenticated TLS, a.k.a. RFC4409 SMTP submission
$mail->Port = 465;

//Set the encryption system to use - ssl (deprecated) or tls
$mail->SMTPSecure = "ssl";

//Whether to use SMTP authentication
$mail->SMTPAuth = true;

//Username to use for SMTP authentication - use full email address for gmail
$mail->Username = "pawelc@c1chy.de";

//Password to use for SMTP authentication
$mail->Password = "Coca0808!";

//Set who the message is to be sent from
$mail->setFrom('pawelc@c1chy.de');

//Set an alternative reply-to address
$mail->addReplyTo('pawelc@c1chy.de');

//Set who the message is to be sent to
$mail->AddAddress('pawelc@c1chy.de');



//Set the subject line
$mail->Body = $mailMsg;
$mail->Subject = $mailto;
$mail->IsHTML(true);

if(!$mail->Send()){



    echo("<script>location.href = 'thx.html';</script>");
}

else {
    echo("<script>location.href = 'thx.html';</script>");


}
//Read an HTML message body from an external file, convert referenced images to embedded,
//convert HTML into a basic plain-text alternative body


?>












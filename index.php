
<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\Exception;
use PHPMailer\SMTP;


require 'PHPMailer/src/Exception.php';
require 'PHPMailer/src/PHPMailer.php';
require 'PHPMailer/src/SMTP.php';


$email = $_POST['email'];
$imie = $_POST['name'];
$tresc = $_POST['message'];

$mail = new PHPMailer;
$mail->CharSet = "UTF-8";
//Tell PHPMailer to use SMTP

// formuła prawidłowego adresu e-mail
$mail->SMTPDebug = 2;
$mailMsg = $_POST['message'];
$mail->isSMTP();
$mail->Host = 'mail.lima-city.de';
$mail->Port = 465;
$mail->SMTPAuth = true;
$mail->Username = "pawelc@c1chy.de";
$mail->Password = "Coca0808!";
$mail->SMTPSecure = "ssl";
$mail->FromName = "c1chy";
$mail->addAddress('pawelc@c1chy.de','c1chy');
$mail->addReplyTo($email);
$mail->isHTML(true);
$mail->SetFrom('pawelc@c1chy.de','c1chy');
$mail->Subject = ($imie);
$mail->Body = ($tresc);



$mail->SMTPOptions = array(
    'ssl' => array(
        'verify_peer' => false,
        'verify_peer_name' => false,
        'allow_self_signed' => true
    )
);


if($imie == "" OR $email == "" OR $tresc == ""){
    echo("<script>location.href = 'graphic/validation.png';</script>");
    exit;
}




if(!$mail->validateAddress($email)){
    echo("<script>location.href = 'graphic/Wrong-email-address.jpg';</script>");
    exit;
}
 else
 {
     echo("<script>location.href = 'thx.html';</script>");
 }


//Set the subject line


if(!$mail->Send()) {
    echo 'Some error... / Jakiś błąd...';
    echo 'Mailer Error: ' . $mail->ErrorInfo;
    exit;
}

echo 'Message has been sent (OK) / Wiadomość wysłana (OK)';

?>















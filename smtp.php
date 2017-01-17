<?php

require 'phpmailer/PHPMailerAutoload.php';

if ($_POST) {
$name    = $_POST['name'];
$email   = $_POST['email'];
$telephone = $_POST['telephone'];
$message = $_POST['comments'] ;

/* Don't touch */
$mail = new PHPMailer();
$mail->isSMTP();
$mail->Host        = "relay-hosting.secureserver.net";
$mail->SMTPAuth    = false;
$mail->setFrom($email, $name);
/* end */

/* Configure the address the email will be sent to */
$mail->addAddress('aproasur2015@gmail.com ', 'APROASUR');
$mail->Subject = 'Consulta de: ' . $name    = $_POST['name'];
 /* This is forwarded through a GoDaddy forwarding account */

$mail->Body    = $message . " El número telefónico de ". $name . " es: " . $telephone  ;

if (!$mail->send()) {
    echo "Mailer Error: " . $mail->ErrorInfo;
} else {
    
    
    require "messageSend.php"  ;

  header("Refresh: 3; Presentation/inicio.php");
}
}

?> 

        

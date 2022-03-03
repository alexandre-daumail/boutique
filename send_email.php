<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'PHPMailer/src/Exception.php';
require 'PHPMailer/src/PHPMailer.php';
require 'PHPMailer/src/SMTP.php';

if(isset($_POST)) {      

    $mail = new PHPMailer;

    $mail->SMTPDebug = 0;                               

    $mail->isSMTP();            
                        
    $mail->Host = "smtp.gmail.com";

    $mail->SMTPAuth = true;                          
  
    $mail->Username = "novashopcontact0001@gmail.com";                 
    $mail->Password = "laplateforme.io";                           

    $mail->Port = 587;                                   

    $mail->From = $_POST['email'];
    $mail->FromName = $_POST['name'] .''. $_POST['lname'];

    $mail->smtpConnect(
        array(
            "ssl" => array(
                "verify_peer" => false,
                "verify_peer_name" => false,
                "allow_self_signed" => true
            )
        )
    );

    $mail->addAddress("novashopcontact0000@gmail.com", "NovaShop Contact");

    $mail->isHTML(true);

    $mail->Subject = "Message de :" . $_POST['name'] .''. $_POST['lname'] .'-'. $_POST['object'];
    $mail->Body = $_POST['message'] .$_POST['email'];
    $mail->AltBody = "Ceci est un message venant de la page contact de NovaShop.";

    $mail->send();

    echo '<p class="success">Message envoyé avec succès</strong></p>';

}

?>
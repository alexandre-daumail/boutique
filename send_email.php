<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'PHPMailer/src/Exception.php';
require 'PHPMailer/src/PHPMailer.php';
require 'PHPMailer/src/SMTP.php';

if(isset($_POST)) {     
    
    $masque ="/^[_a-zA-Z0-9-]+(\.[_a-zA-Z0-9-]+)*@([a-zA-Z0-9-]+\.)+[a-zA-Z]{2,4}$/";

    if(!preg_match($masque, $_POST['email'])) {
        
        echo '<p class="error">' . "L'adresse email est invalide." . '</p>';
    }

    else {

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

        $s = htmlspecialchars_decode('&nbsp;');

        $mail->Subject = "Nouveau message de " . $_POST['name'];
        $mail->Body = "Message de :&nbsp;" . $_POST['name'] . '&nbsp;' . $_POST['lname'] . '<br><br>Pour contacter cette personne :&nbsp;' . $_POST['email'] . '<br><br>' .$_POST['message'];
        $mail->AltBody = "Ceci est un message venant de la page contact de NovaShop.";

        $mail->send();

        echo '<p class="success">Message envoyé avec succès</strong></p>';
    }

}

?>
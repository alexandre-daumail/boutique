<?php
$title = "Contact";
$css = "contact";
require('process/header.php');



?>

<main>

    <h1>Contactez Nous</h1>

    <div class="container">

        <div class="text">

            <h2>Get in touch with us</h2>

            <p>

            Nous nous soucions sincèrement de nos clients, 
            c'est pourquoi nous nous efforçons toujours de 
            fournir le meilleur service de nommage d'étoiles.
            Avant de nous contacter, consultez notre foire aux questions. 
            Vous pouvez également essayer de nous contacter via le chat. 
            Habituellement, nous vous répondons dans un délai d'un jour ouvrable. 
            Toutes les questions concernant le processus de commande, 
            les étoiles et tout le reste recevront une réponse !

            </p>

            <h2>Coordonnés de NovaShop</h2>

            <p>
            
            NovaShop Inc.<br>
            N° SIRET: 40203116030<br>
            15 Boulevard de Venus 0013 VENUS<br>
            +33 6 56 76 87 90<br>
            contact@novashop.org<br>

            </p>

        </div>

        <form method="post">

            <h5>Formulaire de contact</h5>

            <hr>

            <div class="name">

                <div class="txt_field">
                    <label>prénom&nbsp;</label>
                    <input type="text" name="name" required autocomplete="off">
                </div>

                <div class="txt_field">
                    <label>nom&nbsp;</label>
                    <input type="text" name="lname" required autocomplete="off">
                </div>

            </div>

            <div class="txt_field">
                <label>email&nbsp;</label>
                <input type="email" name="email" required autocomplete="off">
            </div>

            <div class="txt_field">
            <label>sujet&nbsp;</label>
                <input type="text" name="object" required autocomplete="off">
            </div>

            <div class="txt_field">
                <label>message&nbsp;</label>
                <textarea name="message" required></textarea>
            </div>

            <input type="submit" name="formsend" value="Envoyer">

            <?php

if(isset($_POST['formsend'])) {

require('send_email.php');
}       

?>

        </form>

        
        

    </div>


</main>

<?php

require('process/footer.php');

?>
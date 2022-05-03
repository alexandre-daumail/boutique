<?php

$title = "Mes Commandes";
$css = "commandes";

require_once('process/header.php');

$insert = new Order();
$commandes = $insert->getOrder($_SESSION['current_session']['user']['id']);

?>

<main>


        <h1>Mes Commandes</h1>

        <?php

            foreach ($commandes as $commande) {

        ?>

        <div class="order">

            
                
            <div>
                <h2>Commande n°<?=$commande['code'] ?> : </h2>
                <p><?= $commande['status'] ?><p>


                <a href="facture.php">Télécharger le reçu</a>
            </div>

        </div>

        
        <?php } ?>


</main>

<?php require('process/footer.php'); ?>
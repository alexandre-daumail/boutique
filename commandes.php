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

                <form action="facture.php" method="post">
                    <input type="text" name="code" value=<?= $commande["code"] ?> hidden/>
                    <button type="submit" >Télécharger le reçu</button>
            </form>
            </div>

        </div>

        
        <?php } ?>


</main>

<?php require('process/footer.php'); ?>
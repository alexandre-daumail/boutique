<?php

$title = "Mon compte";
$css = "account";

require_once('process/header.php');
?>

<main>

        <ul>
            <li><a href="profil.php">Mon profil</a></li>
            <li><a href="commandes.php">Mes commandes</a></li>
            <li><a href="retours.php">Mes retours</a></li>
            <li><a href="paiements.php">Informations de paiement</a></li>
            <li><a href="annulations.php">Annulations et remboursements</a></li>
        </ul>
    
</main>

<?php

require('process/footer.php');

?>

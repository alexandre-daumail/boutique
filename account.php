<?php

$title = "Mon compte";
$css = "account";

require_once('process/header.php');

?>
<aside>
    <form action="<?= htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="POST">
        <fieldset>
            <button name="profil">Mon profil</button>
            <button name="commands">Mes commandes</button>
            <button name="retours">Mes retours</button>
            <button name="paiements">Informations de paiements</button>
            <button name="annulations">Annulations et remboursements</button>
        </fieldset>
    </form>
</aside>

<main>
    <?php
        switch ($_POST) {
            case 'profil':
                require('profil.php');
                break;
                
            case 'commands':
                require('commands.php');
                break;

            case 'retours':
                require('retours.php');
                break;

            case 'paiements':
                require('paiements.php');
                break;

            case 'annulations':
                require('annulations.php');
                break;

            
            default:
                require('profil.php');
                break;
        }
    ?>
</main>


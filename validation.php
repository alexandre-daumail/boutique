<?php

$title = "Validation";
$css = "validation";

require('process/header.php');

if (!isset($_SESSION['crypt'])) {
    header('Location:index.php');
}

unset($_SESSION["crypt"]);

?>

<main>

       

    <img src="public/img/done.svg">
    <h1>Votre paiement a été accepté, merci pour votre commande.</h1>
    <p>Vous pouvez retrouver votre reçu dans "Mes commandes" ci-dessous.</p>

    <div> 
    <a href="commandes.php">Mes commandes</a>
    </div>

</main>

<?php


require('process/footer.php');

?>


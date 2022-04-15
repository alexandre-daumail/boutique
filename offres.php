<?php
$title = "Nos Offres";
$css = "offres";
require('process/header.php');
require('classes/Offre.php');
$offre = new Offre();
?>
<main>

    <h1>Jetez un coup d'œil à nos offres</h1>

    <section class="container1">

    <?= $offre->getOffres(); ?>


    </section>

    <section class="container2">

        <div>
            <p>Rejoignez le panthéon des étoiles</p>
            <a href="stars.php">Découvrir notre registre</a>
        </div>

        <div>
            <p>Visualiser votre étoile</p>
            <a href="#">Voir la carte intéractive (en cours de développement)</a>
        </div>


    </section>

</main>
<?php

require('process/footer.php');

?>
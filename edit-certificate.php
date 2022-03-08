<?php

$title = "Création du Certifcat";
$css = "edit-certificate";
require('process/header.php');

?>

<main>
    <section class="left">

    </section>
    <section class="right">
        <form action="#" method="POST">

            <fieldset>

                <h4>Choisir le support</h4>

                <label>
                    <input type="radio" name="bois" value="Wood">
                    <img class="img-form" src="public/img/gravure-bois.png">
                </label>

                <label>
                    <input type="radio" name="verre" value="verre">
                    <img class="img-form" src="public/img/CERTIFICAT.png">
                </label>
                <label>
                    <input type="radio" name="verre" value="verre">
                    <img class="img-form" src="public/img/trophe.png">
                </label>
            </fieldset>
            <fieldset>
                <ul>
                    <li>
                        <h5>Normal</h5>
                        <p>Peut être vu d'un petit village avec un minimum de lumière</p>
                    </li>
                    <li>
                        <h5>Brillante</h5>
                        <p>Peut être vu d'une petite ville avec une lumière modérée autour</p>
                    </li>
                    <li>
                        <h5>Très Brillante</h5>
                        <p>Peut être vu d'une grande ville même avec beaucoup de lumière autour</p>
                    </li>
                </ul>
            </fieldset>
            <fieldset>
                <h4>Selecteur d'étoiles</h4>
            </fieldset>
            <fieldset>

            </fieldset>

        </form>
    </section>
</main>

<?php

require('process/footer.php');

?>
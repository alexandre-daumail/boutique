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

            <h4>Choisir le support</h4>
            <ul>
                <li>
                    <input type="checkbox" id="myCheckbox1" />
                    <label for="myCheckbox1"><img src="public/img/CERTIFICAT.png" /></label>
                </li>
                <li>

                    <input type="checkbox" id="myCheckbox2" />
                    <label for="myCheckbox2"><img src="public/img/certificat1.png" /></label>
                </li>
                <li>

                    <input type="checkbox" id="myCheckbox3" />
                    <label for="myCheckbox3"><img src="public/img/certificat2.png" /></label>
                </li>
            </ul>
            <fieldset>
                <ul>
                    <li>
                        <input type="checkbox" id="myCheckbox4" />
                        <label for="myCheckbox4">
                            <h5>Normal</h5>
                            <p>Peut être vu d'un petit village avec un minimum de lumière</p>
                        </label>
                    </li>
                    <li>
                        <input type="checkbox" id="myCheckbox5" />
                        <label for="myCheckbox5">
                            <h5>Brillante</h5>
                            <p>Peut être vu d'une petite ville avec une lumière modérée autour</p>
                            <p class="price">+15€</p>
                        </label>
                    </li>
                    <li>
                        <input type="checkbox" id="myCheckbox6" />
                        <label for="myCheckbox6">
                            <h5>Très Brillante</h5>
                            <p>Peut être vu d'une grande ville même avec beaucoup de lumière autour</p>
                            <p class="price">20€</p>
                        </label>
                    </li>
                </ul>
            </fieldset>

            <fieldset>
                <h4>Selecteur d'étoiles</h4>
            </fieldset>


        </form>
    </section>


</main>

<?php



// pour verifier le nombre de case cocher 
// $nb=count($_POST['adv']);
// if($nb>5)... blabla

require('process/footer.php');

?>
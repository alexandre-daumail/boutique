<?php

$title = "Création du Certifcat";
$css = "certificate";
require('process/header.php');

?>

<main>
    <section class="left">
        <img id="aperçu-certif" src="public/img/Certificat4.png" alt="">
    </section>
    <section class="right">
        <form action="#" method="POST">

            <fieldset class="field-1">

                <h4>Choisir le support</h4>

                <ul>
                    <li>
                        <input type="radio" id="myCheckbox1" name="support" value="certif1" hidden />
                        <label for="myCheckbox1"><img src="public/img/CERTIFICAT.png" /></label>
                    </li>
                    <li>
                        <input type="radio" id="myCheckbox2" name="support" value="certif2" hidden />
                        <label for="myCheckbox2"><img src="public/img/certificat1.png" /></label>
                    </li>
                    <li>
                        <input type="radio" id="myCheckbox3" name="support" value="certif3" hidden />
                        <label for="myCheckbox3"><img src="public/img/certificat2.png" /></label>
                    </li>
                    <li>
                        <input type="radio" id="myCheckbox4" name="support" value="certif3" hidden />
                        <label for="myCheckbox4"><img src="public/img/trophe.png" /></label>
                    </li>
                </ul>

            </fieldset>

            <fieldset class="field-2">

                <h4>Choisissez la Brillance de votre étoile</h4>
                
                <ul>
                    <li>
                        <input type="radio" id="myCheckbox5" name="brightness" value="normal" hidden />
                        <label for="myCheckbox5">
                            <h5>Normal</h5>
                            <p>Peut être vu d'un petit village avec un minimum de lumière</p>
                            <p class="price">+ 0€</p>
                        </label>
                    </li>
                    <li>
                        <input type="radio" id="myCheckbox7" name="brightness" value="bright" hidden />
                        <label for="myCheckbox7">
                            <h5>Brillante</h5>
                            <p>Peut être vu d'une petite ville avec une lumière modérée autour</p>
                            <p class="price">+ 15€</p>
                        </label>
                    </li>
                    <li>
                        <input type="radio" id="myCheckbox8" name="brightness" value="very-bright" hidden />
                        <label for="myCheckbox8" id="myCheckbox8">
                            <h5>Très Brillante</h5>
                            <p>Peut être vu d'une grande ville même avec beaucoup de lumière autour</p>
                            <p class="price">+ 20€</p>
                        </label>
                    </li>
                </ul>
                
            </fieldset class="field-3">

            <fieldset>

                <input id="submit-certificate" type="submit" value="Valider" id="submit">
                
            </fieldset>

        </form>
    </section>


</main>

<?php

require('process/footer.php');

?>
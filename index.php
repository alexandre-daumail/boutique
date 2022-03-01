<?php
$title = "Accueil";
$css = "index";
require('process/header.php');


?>
<main>

    <section class="container">

        <div class="card">

            <img id="product-card" src="public/img/img-card.png" alt="img-card">

            <p class="txt-card">texte article</p>
            <p class="price-card">PRIX €</p>

            <button class="card-button">Buy</button>

        </div>
        <div class="card">

            <img id="product-card" src="public/img/img-card.png" alt="img-card">

            <p class="txt-card">texte article</p>
            <p class="price-card">PRIX €</p>

            <button class="card-button">Buy</button>

        </div>
        <div class="card">

            <img id="product-card" src="public/img/img-card.png" alt="img-card">

            <p class="txt-card">texte article</p>
            <p class="price-card">PRIX €</p>

            <button class="card-button">Buy</button>

        </div>
        <div class="card">

            <img id="product-card" src="public/img/img-card.png" alt="img-card">

            <p class="txt-card">texte article</p>
            <p class="price-card">PRIX €</p>

            <button class="card-button">Buy</button>

        </div>

    </section>
    <section class="promo-card">
        <div class="card-promo">

            <div class="format">
                <div class="format1">
                    <img id="product-card" src="public/img/CERTIFICAT.png" alt="img-card">


                </div>
                <div class="format2">
                    <p class="txt-card">Certificat format Papier</p>
                    <p class="price-card">PRIX €</p>

                </div>
            </div>

            <button class="card-button">Buy</button>

        </div>
        <div class="card-promo">

            <div class="format">
                <div class="format1">
                    <img id="product-card" src="public/img/trophe.png" alt="img-card">


                </div>
                <div class="format2">
                    <p class="txt-card">Certificat format<br> trophé en verre (Gravure comprise)</p>
                    <p class="price-card">PRIX €</p>

                </div>
            </div>

            <button class="card-button">Buy</button>

        </div>
        

    </section>

</main>

<?php

require('process/footer.php');

?>
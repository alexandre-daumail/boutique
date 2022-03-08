<?php
$title = "Accueil";
$css = "index";
require('process/header.php');

?>
<main>
    <section class="hero">
        <div class="left">
            <h2>Achetez une Étoile dans le Ciel !<h2>
                    <p>Nomme une Étoile. <br>
                        C'est le plus beau cadeau de l'univers!
                    </p>

        </div>
        <div class="right">
            <img id="star-certificate" src="./public/img/CERTIFICAT.png" alt="certificat">
        </div>
    </section>
    <section class="container">

        <div class="card">

            <img id="product-card" src="public/img/img-card.png" alt="img-card">

            <p class="txt-card">texte article</p>
            <p class="price-card">PRIX €</p>

            <button class="card-button"><a href="edit-certificate.php">Buy</a></button>

        </div>
        <div class="card">

            <img id="product-card" src="public/img/img-card.png" alt="img-card">

            <p class="txt-card">texte article</p>
            <p class="price-card">PRIX €</p>

            <button class="card-button"><a href="edit-certificate.php">Buy</a></button>

        </div>

        <div class="card">

            <img id="product-card" src="public/img/img-card.png" alt="img-card">

            <p class="txt-card">texte article</p>
            <p class="price-card">PRIX €</p>

            <button class="card-button"><a href="edit-certificate.php">Buy</a></button>

        </div>

        <div class="card">

            <img id="product-card" src="public/img/img-card.png" alt="img-card">

            <p class="txt-card">texte article</p>
            <p class="price-card">PRIX €</p>

            <button class="card-button"><a href="edit-certificate.php">Buy</a></button>

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

            <button class="card-button"><a href="edit-certificate.php">Buy</a></button>

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

            <button class="card-button"><a href="edit-certificate.php">Buy</a></button>

        </div>


    </section>

    <section class="constellation">

        <div class="constellation-1">

            <h3>Raisons d'acheter une étoile</h3>

            <p>
                Raison d'acheter une étoile
                Dans notre galaxie, il y a plus de 100 milliards d'étoiles.
                Nous sommes sûrs que chacun d'entre nous a un proche qui mérite un cadeau unique et original.

                Peut-être avez-vous vécu des moments de la vie qui ne devraient jamais être oubliés - et c'est une excellente occasion de nommer une star et de les rendre inoubliables.

                Regardez le ciel nocturne, pensez aux personnes que vous aimez et nous sommes convaincus que tout le monde peut trouver une raison de créer un cadeau magnifique et attentionné pour ses proches.
            </p>

        </div>

        <div class="constellation-2">

            <div class="constellation-3">

                <h3>Achetez une étoila dans n'importe qu'elle constellation</h3>

                <p>
                    Nous offrons à nos clients uniquement le nom d'étoiles facilement visibles. Si vous n'êtes pas satisfait de l'étoile que vous avez nommée, vous pouvez nous demander de nommer n'importe quelle autre étoile pour vous. Vous avez également le droit de demander un remboursement complet de votre achat. Vous pouvez facilement trouver les étoiles que vous souhaitez adopter dans notre registre, et nous vous enverrons votre certificat d'enregistrement de nom d'étoile et votre carte des étoiles immédiatement après l'achat. Nous pouvons également vous les envoyer par e-mail sous forme de copies numériques si vous en avez besoin immédiatement.
                </p>

            </div>

            <div class="constellation-4">

                <img id="stars-map" src="./public/img/IMG_0096-removebg-preview.png" alt="">

            </div>

        </div>

    </section>

</main>

<?php require('process/footer.php'); ?>

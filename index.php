<?php

$title = "Accueil";
$css = "index";
require('process/header.php');

$offre = new Offre;

?>

<main>


    <section>

        <div class="left">

            <h2>Achetez une Étoile dans le Ciel !<h2>

                    <p>Nomme une Étoile. </p>
                    <p>C'est le plus beau cadeau de l'univers!</p>
                    <a href="certificate.php">Commander</a>

        </div>

        <div class="right">
            <a href="certificate.php"><img id="star-certificate" src="./public/img/certificat4.png" alt="certificat"></a>
        </div>

    </section>


    <!-- <section class="promo-card">

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

            <a href="certificate.php">Acheter maintenant</a>

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

            <a href="certificate.php">Acheter maintenant</a>

        </div>


    </section> -->

    <article>


        <h3>Pourquoi acheter une étoile ?</h3>

        <p>Dans notre galaxie, il y a plus de 100 milliards d'étoiles. Chacun d'entre nous a un proche qui mérite un cadeau unique et original. </p>
       

        <p>Peut-être avez-vous vécu des moments de la vie qui ne devraient jamais être oubliés - et c'est une excellente occasion de nommer une étoile et de les rendre inoubliables.</p>

        <p>Regardez le ciel nocturne, pensez aux personnes que vous aimez et nous sommes convaincus que tout le monde peut trouver une raison de créer un cadeau magnifique et attentionné pour ses proches.</p>
        
    </article>

    <article>

        <h3>Achetez une étoile dans n'importe quelle constellation !</h3>

        
        <p>Nous offrons à nos clients uniquement le nom d'étoiles facilement visibles. </p>

        <p>Si vous n'êtes pas satisfait de l'étoile que vous avez nommée, vous pouvez nous demander de nommer n'importe quelle autre étoile pour vous. Vous avez également le droit de demander un remboursement complet de votre achat. </p>

        <p>Vous pouvez facilement trouver les étoiles que vous souhaitez adopter dans notre registre, et nous vous enverrons votre certificat d'enregistrement de nom d'étoile et votre carte des étoiles immédiatement après l'achat. Nous pouvons également vous les envoyer par e-mail sous forme de copies numériques si vous en avez besoin immédiatement.</p>
        

        <img id="stars-map" src="./public/img/IMG_0096-removebg-preview.png" alt="Image d'une sélection de certificats">

    </article>

</main>

<?php require('process/footer.php'); ?>
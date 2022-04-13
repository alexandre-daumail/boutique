<?php

$title = "Mon Panier";
$css = "panier2";

require('process/header.php');

?>

<main>

    <h1>Votre Panier</h1>

    <div class="cart-container">

        <div class="cart-article">

            <div class="title">

                <h2>the stars of zodiac</h2>
                <a href="">Supprimer</a>

            </div>

            <hr>

            <div class="article-container">

                <div class="container2">

                    <div class="price-container">

                        <div>

                            <h5>Prix de base</h5>
                            <p>40€</p>

                        </div>

                        <div>

                            <h5>Prix</h5>
                            <p>60€</p>

                        </div>

                    </div>
                    
                    <div class="desc-container">

                        <div>

                            <h5>Brillance de l'étoile</h5>
                            <p>Normal</p>

                            <h5>Nom de l'étoile</h5>
                            <p>NovaShop</p>

                            <h5>Certificat choisi</h5>
                            <p>Design n°1</p>

                            <h5>Date d'enregistrement</h5>
                            <p>10/10/10</p>

                            <h5>Constellation</h5>
                            <p>Assigné par le registre des étoiles</p>

                        </div>

                        <div>

                            <img src="public\img\CERTIFICAT.png" alt="img">

                        </div>

                    </div>

                </div>
            </div>  
        </div>   
        
        <div class="big-container">
        
            <div class="total-container">

                <div class="total">

                    <p>Sous-total<p>
                    <p>Total<p>  
                        
                </div>

                <div class="total-price">

                    <p>40€<p>
                    <p>60€<p>    
                </div>

            </div>

            <a href="">Procéder au paiement</a>

        </div>



    </div>

</main>

<?php

require('process/footer.php');

?>
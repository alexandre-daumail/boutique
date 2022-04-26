<?php

$title = "Mon Panier";
$css = "panier2";

require('process/header.php');

if(!isset($_SESSION['starname'])) {
        header('Location:index.php');
}

?>

<main>

    <h1>Récapitulatif du certificat</h1>

    <div class="cart-container">

        <div class="cart-article">

            <div class="title">

                <h2>votre certificat</h2>
                <a href="certificate.php">Modifier</a>

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
                            <p>
                                
                            <?php

                            if($_SESSION['brightness'] == "Normal"){
                            
                                echo "40€";

                            }

                            if($_SESSION['brightness'] == "Brillant"){
                            
                                echo "55€";

                            }

                            if($_SESSION['brightness'] == "Très brillant"){
                            
                                echo "60€";

                            }
                            
                            ?>

                            </p>

                        </div>

                    </div>
                    
                    <div class="desc-container">

                        <div>

                            <h5>Brillance de l'étoile</h5>
                            <p><?= $_SESSION['brightness'];?></p>

                            <h5>Nom de l'étoile</h5>
                            <p><?= $_SESSION['starname'];?></p>

                            <h5>Design choisi</h5>
                            <p><?= $_SESSION['support'];?></p>

                            <h5>Date d'enregistrement</h5>
                            <p><?php echo date('d-m-Y'); ?></p>

                            <h5>Constellation</h5>
                            <p>Assigné par le registre des étoiles</p>

                        </div>

                        <div>

                        <?php 
                            
                            if($_SESSION['support'] == "Design n°1") {

                                echo '<img src="public\img\CERTIFICAT.png" alt="img">';

                            }

                            if($_SESSION['support'] == "Design n°2") {

                                echo '<img src="public\img\certificat1.png" alt="img">';

                            }

                            if($_SESSION['support'] == "Design n°3") {

                                echo '<img src="public\img\certificat2.png" alt="img">';

                            }

                            if($_SESSION['support'] == "Design n°4") {

                                echo '<img src="public\img\trophe.png" alt="img">';

                            }

                            ?>
                       
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
                    <p>
                        
                    <?php

                        if($_SESSION['brightness'] == "Normal"){
                        
                            echo "40€";

                        }

                        if($_SESSION['brightness'] == "Brillant"){
                        
                            echo "55€";

                        }

                        if($_SESSION['brightness'] == "Très brillant"){
                        
                            echo "60€";

                        }
                            
                    ?>
                    
                    <p>    
                </div>

            </div>

            <a href="">Ajouter au panier</a>

        </div>



    </div>

</main>

<?php

require('process/footer.php');

?>
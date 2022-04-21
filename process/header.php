<?php

session_start();

require('classes/Dbh.php');

function test($var){
    echo '<pre>';
        var_dump($var);
    echo '</pre>';
}

?>

<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <script src="https://kit.fontawesome.com/3434ebb08e.js" crossorigin="anonymous"></script>

    <link rel="stylesheet" href="public/css/header.css">
    <link rel="stylesheet" href="public/css/<?= $css ?>.css">
    <link rel="stylesheet" href="public/css/footer.css">


    <title><?= $title ?></title>
</head>

<body>

    <header>

        <img src="public/img/logo-header.png" alt="logo du site Novashop">
        
        <nav>
            
            <div class="button-area">

                <div class="logo2">
                    <a href="index.php">Accueil</a>
                    <img src="public/img/logo2.png" alt="logo">
                </div>

                <div class="logo2">
                    <a href="offres.php">Certificats</a>
                    <img src="public/img/logo2.png" alt="logo">
                </div>

                <div class="logo2">
                    <a href="articles.php">Boutique</a>
                    <img src="public/img/logo2.png" alt="logo">
                </div>

                <div class="logo2">
                    <a href="apropos.php">Information</a>
                    <img src="public/img/logo2.png" alt="logo">
                </div>

                <div class="logo2">
                    <a href="stars.php">Étoiles</a>
                    <img src="public/img/logo2.png" alt="logo">
                </div>  

                <div class="logo2">
                    <a href="contact.php">Contact</a>
                    <img src="public/img/logo2.png" alt="logo">
                </div>
                
                <div class="icon-header">
                                
                    <a href="panier.php"><img src="public/img/icon/Vectorcart.png" alt="logo du panier" title="Panier"></a>
                    
                    <!-- Lorque l'utilisateur est connecté, afficher les liens de compte utlisateur -->
                    <?php
                    
                    if (isset($_SESSION['current_session']) && $_SESSION['current_session']['status'] == 1 ){

                    ?>
                    
                    <a href="profil.php">
                        <img src="public/img/icon/Vectoraccount.png" alt="logo-myaccount">
                    </a>

                    <a href="logout.php">                        
                        <img src="public/img/icon/logout.png" alt="logout logo">
                    </a>

                    <a href="commandes.php">
                        <img src="public/img/icon/ordering.jpg" alt="icône représentant le lien d'historique d'achats'" title="Mes Commandes">
                    </a>
                            
                    <?php

                    } else {

                    ?>
                        <a href="inscription.php">
                            <img src="public/img/icon/Vectorsignup.png" alt="icône représentant le lien d'inscription" title="Inscription">
                        </a>

                        <a href="connexion.php">
                            <img src="public/img/icon/Vectoraccount.png" alt="icône représentant le lien de connexion" title="Connexion">
                        </a>
                    
                    <?php
                    }

                    ?>

                </div>

            </div>

            
            <!-- <div class="search-area">

                <form class="searchbox" action="http://thecodeblock.com">
                    <input type="search" placeholder="Search" />
                    <button type="submit" value="search">&nbsp;</button>
                </form>

            </div> -->

        </nav>

    </header>
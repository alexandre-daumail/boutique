<?php

$title = "Passer commande";
$css = "checkout";

require('process/header.php');

$insert = new Order();

if (!isset($_SESSION['current_session'])) {
    header('Location: inscription.php');
    
} else {
    
?>

<main>

<?php

if (isset($_SESSION["cart_item"])) {
    $total_quantity = 0;
    $total_price = 0;
}

else {

    header('Location:articles.php');

}

?>

    <div class="container">

        <div class="recap">

            <h2>Récapitulatif de votre commande</h2>

            <hr>

            <?php

            $array = [];
            foreach ($_SESSION["cart_item"] as $item) {

            $item_price = $item["quantity"] * $item["price"];
            ?>

            <?php $content=$item["name"];
            array_push($array, $content);?>
    
            <p><?php echo $content;?>&nbsp;x&nbsp;<?= $item["quantity"]; ?></p>
    

            <?php
    
            $total_quantity += $item["quantity"];
            $total_price += ($item["price"] * $item["quantity"]);
            }

            ?>

            <span><hr></span>

            <p>Prix total : <?= "$ " . number_format($total_price, 2); ?></p>

        </div>

        <div class="checkout">

        <?php 

if(isset($_POST) AND !empty($_POST) ) {

    if (!empty($_POST['code']) && !empty($_POST['crypt'])){

        if (is_numeric($_POST['code']) && is_numeric($_POST['crypt'])) {

            if (strlen($_POST['code']) <= 16 && strlen($_POST['code']) >= 16) {

                $date = date("n");

                if ($_POST['month'] >= $date) {

                    if (strlen($_POST['crypt']) <= 3 && strlen($_POST['crypt']) >= 3) {


                        $code=htmlspecialchars($_POST['code']);
                        $crypt=htmlspecialchars($_POST['crypt']);

                        $rand = rand();
                        $time = date("Y-m-d");
                        $content = implode("/n", $array);
                        $insert->insertOrder($content, $total_price, $total_quantity, $time, $rand, $_SESSION['current_session']['user']['id']);
                        unset($_SESSION["cart_item"]);

                        echo '<div class="success"><p>Carte accepté. Redirection...</p></div>';

                        $_SESSION['crypt'] = 123;

                        header('Location:validation.php');
                    }

                    else {  

                    echo '<div class="error"><p>Cryptogramme non valide.</p></div>';

                    }

                }
                
                else {

                    echo "<div class='error'><p>Date d'expiration non valide.</p></div>";

                }
            }

            else {

                echo '<div class="error"><p>Numéro de carte non valide.</p></div>';

            }

        
        }

    
        else {

            echo '<div class="error"><p>Champs incorrects.</p></div>';

        }
    }

    
    else {

        echo '<div class="error"><p>Champs vides.</p></div>';

    }

}

?>

            <h2>Informations de la carte<h2>

            <hr>

            <form action="" method="post">

                <div>
                    <label>Numéro de carte :</label><br>
                    <input type="text" name="code" required maxlength="16"/>
                <div>

                <label>Date d'expiration :<label><br>
                
                <div>
                    <select name="month">
                        <option value="1">Janvier</option>
                        <option value="2">Février</option>
                        <option value="3">Mars</option>
                        <option value="4">Avril</option>
                        <option value="5">Mai</option>
                        <option value="6">Juin</option>
                        <option value="7">Juillet</option>
                        <option value="8">Août</option>
                        <option value="9">Septembre</option>
                        <option value="10">Octobre</option>
                        <option value="11">Novembre</option>
                        <option value="12">Décembre</option>
                    </select>

                    <select name="year">
                        <option value="2022">2022</option>
                        <option value="2023">2023</option>
                        <option value="2024">2024</option>
                        <option value="2025">2025</option>
                        <option value="2026">2026</option>
                        <option value="2027">2027</option>
                        <option value="2028">2028</option>
                    </select>
                </div>

                <label>Cryptogramme visuel :</label><br>
                <input id="crypt" type="text" name="crypt" required maxlength="3"/>

                <a class="infobulle">
                <img src="./public/img/help_icon.png" alt=" ? " />
                <span>Il s'agit d'un numéro de sécurité à trois chiffres généralement situé au dos de votre carte de paiement. Parfois appelé code de sécurité ou numéro de vérification, il fournit une protection supplémentaire contre la fraude.</span></a>
                
                <br>

                <input type="submit" name="submit"/>

            </form>

        </div>

    <div>

</main>

<?php
}

require('process/footer.php');

?>
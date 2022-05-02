<?php

$title = "Passer commande";
$css = "checkout";

require('process/header.php');

if (!isset($_SESSION['current_session'])) {
    echo "Veuillez vous inscrire ou vous connecter afin de passer commande.";
    header('Location: inscription.php');
    ;
}


?>



<?php

require('process/footer.php');

?>
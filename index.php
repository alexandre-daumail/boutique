<?php
session_start();
$title = "Accueil Studio Son - La Plateforme";
ob_start();
?>

   

<?php
$content = ob_get_clean();
require('template.php');
?>
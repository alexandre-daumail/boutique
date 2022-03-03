<?php

$title = "Mon compte";
$css = "account";

require_once('process/header.php');
require('classes/User.php');

$user = new User();
$result = $user->getUser($_SESSION['current_session']['user']['login']);
echo '<pre>';
var_dump($result);
echo '</pre>';
die;

?>

<form action="">
    <fieldset>
        <legend>Mon Profil</legend>

        <label for="login">Pseudonyme</label>
        <input type="text" id="login" placeholder="Pseudo actuel: <?= $result[0]['login']?>">
        <label for="login">Pseudonyme</label>
        <input type="text" id="login" placeholder="Pseudo actuel: <?= $result[0]['login']?>">
        <label for="login">Pseudonyme</label>
        <input type="text" id="login" placeholder="Pseudo actuel: <?= $result[0]['login']?>">
    </fieldset>

</form>
<?php

require_once('classes/User.php');
require_once('classes/Droits.php');

$info = new User();

$res1 = $info->getUser($_SESSION['current_session']['user']['login']);

$droits = new Droits();

$res2 = $droits->getDroitsById($res1[0]["id_droits"]);

if (isset($_POST['submit']) && !empty($_POST)) {

    switch ($_POST) {

        case !empty($_POST['login']):

            $info->setInfo($_POST['login'], 'login', $_SESSION['current_session']['user']['login']);
            break;
        
        default:
            # code...
            break;
    }
}

if (isset($_POST['delete'])) {

    header("location:delete.php");
}


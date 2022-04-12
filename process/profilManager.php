<?php

require_once('classes/User.php');
require_once('classes/Droits.php');

$info = new User();
$droits = new Droits();

if (isset($_POST['submit']) && !empty($_POST)) {

    switch ($_POST) {

        case !empty($_POST['login']):
            
            $info->setInfo($_POST['login'], 'login');
            break;

        case !empty($_POST['prenom']):

            $info->setInfo($_POST['prenom'], 'prénom');
            break;

        case !empty($_POST['nom']):

            $info->setInfo($_POST['nom'], 'nom');
            break;

        case !empty($_POST['email']):

            $info->setInfo($_POST['email'], 'email');
            break;

        case !empty($_POST['old_password']) && !empty($_POST['password']) && !empty($_POST['confirm']):

            if ($_POST['password'] != $_POST['confirm']) {

                echo "Désolé, les mots de passe de correspondent pas";
                break;

            } elseif (password_verify($_POST['old_password'], $_SESSION['current_session']['user']['password'])) {

                $password = password_hash($_POST['password'], PASSWORD_DEFAULT);
                
                $info->setInfo($password, 'password');

                echo "mdp modifié avec succès";
                break;
            } else {

                echo "L'ancien mot de passe ne correspond pas";
                break;
            }
        
    }
    
}

if (isset($_POST['delete'])) {

    header("location:delete.php");
}


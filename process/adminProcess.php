<?php
if (isset($_POST) && !empty($_POST)) {

    switch ($_POST) {

    // Suppression d'utilisateur
    case isset($_POST['delete_user']):

        // Vérification que l'utilisateur en question n'est ni l'admin déjà connecté, ni le "super admin"
        if ($_POST['id'] != $_SESSION['current_session']['user']['id'] && $_POST['id'] != 0) {
            
            $res1 = $user->deleteUser($_POST['id']);
            header('location: admin.php');
            break;

        } else {

            $_SESSION['error'] = "<h6>Vous ne pouvez pas supprimer ce compte</h6>";
            break;

        }
    
    // Modification des droits d'un utilisateur
    case isset($_POST['modif_droit']);

        // Vérification que l'utilisateur en question n'est pas l'admin connecté ni le "super admin"
        if ($_POST['id'] != $_SESSION['current_session']['user']['id'] && $_POST['id'] != 0) {

            $user->setDroit($_POST['select-droits'], $_POST['id']);
            $_SESSION['success'] = "<h6>Droits modifiés</h6>";
            
        } else {

            $_SESSION['error'] = "<h6>Vous ne pouvez pas modifier ces droits</h6>";
            break;
        }

        break;

    // Modification de la sous-catégorie d'un article
    case isset($_POST['modif_categorie']);
        
        $item->setSubCategorie($_POST['id_sub_categorie'], $_POST['id_item']);
        header('location: admin.php');

        break;

    // Suppression d'un article
    case isset($_POST['delete_item']);

        $item->deleteItem($_POST['id_item']);
        header('location: admin.php');
        break;

    // Nouvelle Catégorie
    case isset($_POST['new_category']):
        
        $categorie-> newCategory($_POST['category_name']);
        header('location: admin.php');
        break;

    // Modification d'une catégorie
    case isset($_POST['update_categorie']);

        $categorie->setCategory($_POST['id'], $_POST['category_name']);
        header(('location: admin.php'));
        break;

    // Suppression d'une catégorie
    case isset($_POST['delete_categorie']);

        $categorie->deleteCategory($_POST['id']);
        header(('location: admin.php'));
        break;

    // Nouvelle Sous-Catégorie
    case isset($_POST['new_sub_category']):
        
        $subCategorie->newSubCategory($_POST['name'], $_POST['category_id'] );
        header('location: admin.php');
        break;

    // Modification d'une sous-catégorie
    case isset($_POST['update_sub_categorie']);

        $subCategorie->setSubCategory($_POST['id'], $_POST['sub_category_name']);
        header(('location: admin.php'));
        break;

    // Suppression d'une sous-catégorie
    case isset($_POST['delete_sub_categorie']);

        $subCategorie->deleteSubCategory($_POST['id']);
        header(('location: admin.php'));
        break;
}
}

<?php
if (isset($_POST) && !empty($_POST)) {

    switch ($_POST) {

    // Suppression d'utilisateur
    case isset($_POST['delete_user']):

        // Vérification que l'utilisateur en question n'est ni l'admin déjà connecté, ni le "super admin"
        if ($_POST['id'] != $_SESSION['current_session']['user']['id'] && $_POST['id'] != 0) {
            
            $res1 = $user->deleteUser($_POST['id']);
            $_SESSION['success'] = "<h6>Utilisateur supprimé</h6>";
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

    // Modification de la catégorie d'un article
    case isset($_POST['modif_categorie']);
        
        $article->setCategorie($_POST['id_categorie'], $_POST['id_article']);
        $_SESSION['success'] = "Modification réussie";
        header(('location: ../../admin.php'));
        break;


    // Nouvelle Catégorie
    case isset($_POST['new_categorie']):
        
        $categorie->createCategories($_POST['titre_new_categ']);
        header('location: ../../admin.php');
        break;

    // Suppression d'un article
    case isset($_POST['delete_article']);

    $article->deleteArticle($_POST['id_article']);
    $_SESSION['success'] = "Article supprimé";
    header(('location: ../../admin.php'));
    break;

    // Suppression d'une catégorie
    case isset($_POST['delete_categorie']);

    $categorie->deleteCategorie($_POST['id_categorie']);
    $_SESSION['success'] = "Catégorie supprimée";
    header(('location: ../../admin.php'));
    break;

    
}
}
?>
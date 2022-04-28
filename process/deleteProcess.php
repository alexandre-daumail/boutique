<?php

if (isset($_POST['delete_sub_categorie'])) {

    $subCategorie->deleteSubCategory($_POST['id']);
    header(('location: admin.php'));

}

else if (isset($_POST['delete_category'])) {
    $category->deleteCategory($_POST['id']);
    header(('location: admin.php'));
} 

else if (isset($_POST['cancel'])) {

    header(('location: admin.php'));
}

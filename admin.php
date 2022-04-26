<?php

$title = "Panneau Admin";
$css = "admin";

require('process/header.php');
require('classes/User.php');
require('classes/Droits.php');
require('classes/Item.php');
require('classes/Category.php');
require('classes/SubCategory.php');

if ($_SESSION['current_session']['user']['id_droit'] != 1337) {
    header('Location: index.php');
    exit;
}

$user = new User();
$item = new Item();
$categorie = new Category();
$SubCategorie = new SubCategory();

$res1 = $user->getList();
$items = $item->getItems();
$getCategories = $categorie->getCategories();
$getSubCategories = $SubCategorie->getSubCategories();

require('process/adminProcess.php');
?>

<main>

    <aside>
        <?php
        if (isset($_SESSION["error"])) {
            echo $_SESSION["error"];
            unset($_SESSION["error"]);
        }

        if (isset($_SESSION["success"])) {
            echo $_SESSION["success"];
            unset($_SESSION["success"]);
        }
        ?>
    </aside>


    <section>

        <h1>Gestion des Utilisateurs</h1>

        <table>

            <?php

            foreach ($res1 as $key => $value) {

                echo '<tr>';

                foreach ($value as $key1 => $value1) {

                    echo "<td>$value1</td>";
                }

                echo "<td>

            <form action='" . htmlspecialchars($_SERVER['PHP_SELF']) . "' method='POST'>

                <input type='text' name='id' value='" . $value['id'] . "' hidden>

                <select name='select-droits' id='select-droitd'>

                    <option>- Droits -</option>
                    <option value='1'>Utilisateurs</option>
                    <option value='1337'>Admin</option>

                </select>
            
                <button type='submit' name='modif_droit'>Modifier les Droits</button>

                <button type='submit' name='delete_user'>Supprimer</button>

            </form>
                
        </td>";

                echo '</tr>';
            }

            ?>

        </table>

    </section>

    <section>

        <h1>Gestion des articles</h1>

        <table>

            <?php

            foreach ($items as $key => $item) {

                echo '<tr>';

                foreach ($item as $key => $value) {

                    echo "<td>$value</td>";
                }

                echo "<td>
                                <form action='process/adminProcess.php' method='POST'>

                                <input type='text' name='id_item' value='" . $item['id'] . "' hidden>
                                
                                    <select name='id_categorie' id='catégorie'>

                                        <option>- Sous-Catégorie -</option>";
                foreach ($getSubCategories as $key => $value) {

                    echo "<option value = '" . $value['id'] . "'> - " . $value['id'] . " - " . $value['sub_category_name'] . "</option>";
                }

                echo "</select>
                                
                                    <button type='submit' name='modif_categorie'>Modifier la catégorie</button>

                                    <button type='submit' name='delete_item'>Supprimer item</button>

                                </form>
                                    
                            </td>";

                echo '</tr>';
            }

            ?>

        </table>

    </section>

    <section>

        <h1>Gestion des Catégories</h1>

        <table>

            <?php

            foreach ($getCategories as $key => $categorie) {

                echo '<tr>';

                foreach ($categorie as $key => $value2) {

                    echo "<td>$value2</td>";
                }

                echo "<td>

                                <form action='process/adminProcess.php' method='POST'>

                                    <input type='text' name='id_categorie' value='" . $categorie['id'] . "' hidden>

                                    <button type='submit' name='delete_categorie'>Modifier Catégorie</button>
                                    <button type='submit' name='delete_categorie'>Supprimer Catégorie</button>

                                </form>
                                    
                            </td>

                            <td>

                                <form action='process/adminProcess.php' method='POST'>

                                    <input type='text' name='id_categorie' value='" . $categorie['id'] . "' hidden>
                                
                                </form>    
                            </td>


                        </tr>";
            }

            ?>

        </table>

        <div class="categ">

            <h3>Nouvelle Catégorie</h3>

            <form action='process/adminProcess.php' method='POST' class='new-categ'>

                <label for="new_categ">Titre de la Nouvelle Catégorie</label>
                <input type="text" name="titre_new_categ" id="new_categ">

                <button type="submit" name="new_categorie">Nouvelle Catégorie</button>

            </form>

        </div>

    </section>
    <section>

        <h1>Gestion des Sous-Catégories</h1>

        <table>

            <?php

            foreach ($getSubCategories as $key => $array) {

                echo '<tr>';

                foreach ($array as $key => $value2) {

                    echo "<td>$value2</td>";
                }

                echo "<td>

                                <form action='process/adminProcess.php' method='POST'>

                                    <input type='text' name='id_categorie' value='" . $array['id'] . "' hidden>

                                    <button type='submit' name='delete_categorie'>Modifier sous-catégorie</button>
                                    <button type='submit' name='delete_categorie'>Supprimer sous-catégorie</button>

                                </form>
                                    
                            </td>

                            <td>

                                <form action='process/admin_process.php' method='POST'>

                                    <input type='text' name='id_sub_categorie' value='" . $array['id'] . "' hidden>
                                
                                </form>    
                            </td>


                        </tr>";
            }

            ?>

        </table>

        <div class="categ">

            <h3>Nouvelle Catégorie</h3>

            <form action='process/admin_process.php' method='POST' class='new-categ'>

                <label for="new_categ">Titre de la Nouvelle Catégorie</label>
                <input type="text" name="titre_new_categ" id="new_categ">

                <button type="submit" name="new_categorie">Nouvelle Catégorie</button>

            </form>

        </div>

    </section>

</main>

<?php require 'process/footer.php'; ?>
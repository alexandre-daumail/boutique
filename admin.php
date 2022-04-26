<?php

$title = "Panneau Admin";
$css = "admin";

require('process/header.php');
require('classes/User.php');
require('classes/Item.php');
require('classes/Category.php');

if ($_SESSION['current_session']['user']['id_droit'] != 1337) {
    header('Location: index.php');
    exit;
}

$user = new User();
$item = new Item();
$categorie = new Category();

$res1 = $user->getList();
$items = $item->getItems();
$getCategories = $categorie->getCategories();

?>

<main>

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

            <form action='php/include/admin_process.php' method='POST'>

                <input type='text' name='id' value='" . $value['id'] . "' hidden>

                <select name='select-droits' id='select-droitd'>

                    <option>- Droits -</option>
                    <option value='1'>Utilisateurs</option>
                    <option value='42'>Modérateur</option>
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
                                <form action='php/include/admin_process.php' method='POST'>

                                <input type='text' name='id_item' value='" . $item['id'] . "' hidden>
                                
                                    <select name='id_categorie' id='catégorie'>

                                        <option>- Catégorie -</option>";
                foreach ($getCategories as $index => $categorie) {

                    echo "<option value = '" . $categorie['id'] . "'> - " . $categorie['id'] . " - " . $categorie['nom'] . "</option>";
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

                                <form action='php/include/admin_process.php' method='POST'>

                                    <input type='text' name='id_categorie' value='" . $categorie['id'] . "' hidden>

                                    <button type='submit' name='delete_categorie'>Modifier Catégorie</button>
                                    <button type='submit' name='delete_categorie'>Supprimer Catégorie</button>

                                </form>
                                    
                            </td>

                            <td>

                                <form action='php/include/admin_process.php' method='POST'>

                                    <input type='text' name='id_categorie' value='" . $categorie['id'] . "' hidden>
                                
                                </form>    
                            </td>


                        </tr>";
            }

            ?>

        </table>

        <div class="categ">

            <h3>Nouvelle Catégorie</h3>

            <form action='php/include/admin_process.php' method='POST' class='new-categ'>

                <label for="new_categ">Titre de la Nouvelle Catégorie</label>
                <input type="text" name="titre_new_categ" id="new_categ">

                <button type="submit" name="new_categorie">Nouvelle Catégorie</button>

            </form>

        </div>

    </section>

</main>

<?php require 'process/footer.php'; ?>
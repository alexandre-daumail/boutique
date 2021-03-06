<?php

$title = "Panneau Admin";
$css = "admin";

require('process/header.php');

if ($_SESSION['current_session']['user']['id_droit'] != 1337) {
    header('Location: index.php');
    exit;
}
//create CSRF Token
$token = md5(uniqid(rand(), TRUE));
//assign token to session
$_SESSION['csrf_token'] = $token;

$user = new User();
$item = new Item();
$categorie = new Category();
$subCategorie = new SubCategory();

$res1 = $user->getList();
$items = $item->getItems();
$getCategories = $categorie->getCategories();
$getSubCategories = $subCategorie->getSubCategories();

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

                <input type='hidden' name='csrf_token' value='$token'>

            </form>
                
        </td>";

                echo '</tr>';
            }

            ?>

        </table>

    </section>

    <section>

        <h1>Gestion des articles</h1>

        <h3><a href="addItem.php">Ajouter </a>un article ?? la boutique</h3>

        <table>

            <?php

            foreach ($items as $key => $item) {

                echo '<tr>';

                foreach ($item as $key => $value) {

                    echo "<td>$value</td>";
                }

                echo "<td>
                                <form action='" . htmlspecialchars($_SERVER['PHP_SELF']) . "' method='POST'>

                                <input type='text' name='id_item' value='" . $item['id'] . "' hidden>
                                
                                    <select name='id_sub_categorie' id='sub_cat??gorie'>

                                        <option>- Sous-Cat??gorie -</option>";
                foreach ($getSubCategories as $key => $value) {

                    echo "<option value = '" . $value['id'] . "'> - " . $value['id'] . " - " . $value['sub_category_name'] . "</option>";
                }

                echo "</select>
                                
                                    <button type='submit' name='modif_categorie'>Modifier la cat??gorie</button>

                                    <button type='submit' name='delete_item'>Supprimer item</button>
                                    <input type='hidden' name='csrf_token' value='$token'>

                                </form>
                                    
                            </td>";

                echo '</tr>';
            }

            ?>

        </table>

    </section>

    <section>

        <h1>Gestion des Cat??gories</h1>

        <table>

            <?php

            foreach ($getCategories as $key => $categorie) {

                echo '<tr>';

                foreach ($categorie as $key => $value2) {

                    echo "<td>$value2</td>";
                }

                echo "<td>

                    <form action='" . htmlspecialchars($_SERVER['PHP_SELF']) . "' method='POST'>

                        <input type='text' name='id' value='" . $categorie['id'] . "' hidden>

                        <input type='text' name='category_name' placeholder='Modifier cat??gorie'>

                        <button type='submit' name='update_categorie'>Modifier</button>
                        <input type='hidden' name='csrf_token' value='$token'>

                    </form>

                    <form action='deleteCat.php' method='POST'>

                        <input type='text' name='id' value='" . $categorie['id'] . "' hidden>

                        <button type='submit' name='delete_categorie'>Supprimer</button>
                        <input type='hidden' name='csrf_token' value='$token'>


                    </form>
                        
                </td>

                </tr>";
            }

            ?>

        </table>

        <div class="categ">

            <h3>Nouvelle Cat??gorie</h3>

            <form action='<?= htmlspecialchars($_SERVER['PHP_SELF']) ?>' method='POST' class='new-categ'>

                <label for="new_categ">Titre de la Nouvelle Cat??gorie</label>
                <input id="new_categ" type="text" name="category_name" placeholder="Nom cat??gorie">

                <button type="submit" name="new_category">Nouvelle Cat??gorie</button>
                
                <input type="hidden" name="csrf_token" value="<?php echo $token; ?>">


            </form>

        </div>

    </section>
    <section>

        <h1>Gestion des Sous-Cat??gories</h1>

        <table>

            <?php

            foreach ($getSubCategories as $key => $subCategory) {

                echo '<tr>';

                foreach ($subCategory as $key => $value) {

                    echo "<td>$value</td>";
                }

                echo "<td>

                <form action='" . htmlspecialchars($_SERVER['PHP_SELF']) . "' method='POST'>

                    <input type='text' name='id' value='" . $subCategory['id'] . "' hidden>
                    
                    <input type='text' name='sub_category_name' placeholder='Modifier sous-cat??gorie'>
                
                    <button type='submit' name='update_sub_categorie'>Modifier</button>
                    <input type='hidden' name='csrf_token' value='$token'>


                </form>

                <form action='deleteSubCat.php' method='POST'>

                    <input type='text' name='id' value='" . $subCategory['id'] . "' hidden>

                    <button type='submit' name='delete'>Supprimer</button>

                    <input type='hidden' name='csrf_token' value='$token'>


                </form>
                        
                </td>

            </tr>";
            }

            ?>

        </table>

        <div class="categ">

            <form action='<?= htmlspecialchars($_SERVER['PHP_SELF']) ?>' method='POST' class='new-categ'>

                <label for="new_categ">Cr??ation de Sous-Cat??gorie</label>
                <input id="new_categ" type="text" name="name" placeholder="Entrez un nom" required>

                <select name='category_id' required>

                    <option>- S??lectionner la cat??gorie -</option>

                    <?php

                    foreach ($getCategories as $key => $category) {

                        echo "<option value='" . $category['id'] . "'> - " . $category['id'] . " - " . $category['category_name'] . "</option>";
                    }

                    ?>

                </select>

                <button type="submit" name="new_sub_category">Ajouter la sous-cat??gorie</button>

                <input type="hidden" name="csrf_token" value="<?php echo $token; ?>">

            </form>

        </div>

    </section>

</main>

<?php require 'process/footer.php'; ?>
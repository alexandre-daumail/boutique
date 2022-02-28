<?php

require_once('process/Signup.php');
if (isset($_POST) && count($_POST) > 0) {
    $process = Signup($_POST);
    var_dump($process);
}

?>

<!DOCTYPE html>

<html lang="fr">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Inscription</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
</head>

<body>

    <form action="<?= $_SERVER['PHP_SELF']; ?>" method="post" id="signup">

        <fieldset>

            <legend>Inscription</legend>

            <?= isset($process['error']) ? "<p><b>Oops</b>," . $process['error'] . "</p>" : "" ?>

            <label for="1">Prénom</label>

            <input type="text" name="first_name" id="1" placeholder="<?= isset($process['first_name']) && !empty($process['first_name']) ? $process['first_name'] : "" ?>" required>

            <label for="2">Nom</label>

            <input type="text" name="last_name" id="2" placeholder="<?= isset($process['last_name']) && !empty($process['last_name']) ? $process['last_name'] : "" ?>" required>

            <label for="3">Email</label>

            <input type="email" name="email" id="3" placeholder="<?= isset($process['email']) && !empty($process['email']) ? $process['email'] : "" ?>" required>

            <label for="4">Mot de Passe</label>

            <input type="password" name="password" id="4" placeholder="<?= isset($process['password']) && !empty($process['password']) ? $process['password'] : "" ?>" required>

            <label for="5">Confirmation</label>

            <input type="password" name="password_rpt" id="5" placeholder="<?= isset($process['password_rpt']) && !empty($process['password_rpt']) ? $process['password_rpt'] : "" ?>" required>

            <button type="submit">Valider</button>

        </fieldset>

    </form>

</body>
<?php $process [] = ""; ?>
</html>
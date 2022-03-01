<?php

require_once('./process/Signup.php');
if (isset($_POST) && count($_POST) > 0) {
    $process = Signup($_POST);
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

    <form action="<?= $_SERVER['PHP_SELF']; ?>" method="post">

        <fieldset>

            <legend>Inscription</legend>

            <?php if (isset($process['error'])) : ?>

                <p><b>Oops</b>, <?php echo $process['error']; ?></p>

            <?php endif; ?>

            <label for="1">Prénom</label>

            <input type="text" name="first_name" id="1" class="form-control" required>

            <?php if (isset($process['first_name']) && !empty($process['first_name'])) : ?>

                <small><?php echo $process['first_name']; ?></small>

            <?php endif; ?>

            <label for="2">Nom</label>

            <input type="text" name="last_name" id="2" class="form-control" required>


            <?php if (isset($process['last_name']) && !empty($process['last_name'])) : ?>

                <small><?php echo $process['last_name']; ?></small>

            <?php endif; ?>

            <label for="3">Email</label>

            <input type="email" name="email" id="3" required>


            <?php if (isset($process['email']) && !empty($process['email'])) : ?>

                <small><?php echo $process['email']; ?></small>

            <?php endif; ?>

            <label for="4">Mot de Passe</label>

            <input type="password" name="password" id="4" required>

            <label for="5">Confirmation</label>

            <input type="password" name="password_confirmation" id="5" required>

            <?php if (isset($process['password']) && !empty($process['password'])) : ?>

                <small><?= $process['password']; ?></small>

            <?php endif; ?>

            <button type="submit">Valider</button>

        </fieldset>
    </form>

</body>

</html>
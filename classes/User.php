<?php

class User extends Dbh
{
    function checkUser(string $login): array
    {

        $statement = $this->DbHandler()->prepare("SELECT * FROM `utilisateurs` WHERE `email` = :login OR `login` = :login");

        $statement->bindValue(':login', $login, PDO::PARAM_STR);
        $statement->execute();
        $result = $statement->fetch(PDO::FETCH_ASSOC);

        if (empty($result)) {

            $process['status'] = false;
            $process['data'] = [];
            return $process;
        }

        $process['status'] = true;
        $process['data'] = $result;
        return $process;
    }

    /**
     * @desc Creates a new user and returns a boolean indicating the status of the operation...
     */
    public function register(array $data): bool
    {
        $statement = $this->DbHandler()->prepare("INSERT INTO `utilisateurs` (prénom, nom, email, password, created_at, login, civilité) VALUES (:first_name, :last_name, :email, :password, :created_at, :login, :civilite)");

        //#Defaults....
        $timestamps = date('Y-m-d H:i:s');
        $password = password_hash($data['password'], PASSWORD_DEFAULT);

        //Values Bindings....
        $statement->bindValue(':login', $data['login'], PDO::PARAM_STR);
        $statement->bindValue(':first_name', $data['first_name'], PDO::PARAM_STR);
        $statement->bindValue(':last_name', $data['last_name'], PDO::PARAM_STR);
        $statement->bindValue(':email', $data['email'], PDO::PARAM_STR);
        $statement->bindValue(':password', $password, PDO::PARAM_STR);
        $statement->bindValue(':created_at', $timestamps, PDO::PARAM_STR);
        $statement->bindValue(':civilite', $data['civilite'], PDO::PARAM_STR);

        $result = $statement->execute();

        if ($result) {
            return true;
        } else {
            return false;
        }
    }

    // Fonction qui donne les informations de l'utilisateur
    public function getUser($login)
    {

        $get = $this->DbHandler()->prepare("SELECT * FROM utilisateurs WHERE login = :login");

        $get->bindValue(':login', $login, PDO::PARAM_STR);

        $get->execute();

        $result = $get->fetchAll(PDO::FETCH_ASSOC);

        return $result;
    }

    public function getList()
    {

        $sth = $this->DbHandler()->prepare("SELECT `id`,`login`,`email`, `id_droits` FROM `utilisateurs`");
        $sth->execute();
        $res = $sth->fetchAll(PDO::FETCH_ASSOC);
        return $res;
    }

    public function getAllInfo()
    {

        $sth = $this->DbHandler()->prepare("SELECT * FROM utilisateurs");
        $sth->execute();
        $res = $sth->fetchAll(PDO::FETCH_ASSOC);
        return $res;
    }

    public function updateAdmin($id, $droits)
    {

        $sth = $this->DbHandler()->prepare("UPDATE utilisateurs SET id_droits = ? WHERE id=$id");
        $sth->execute(array($droits));
        echo "<p>Modification prise en compte</p>";
    }

    public function update($login, $password, $email, $id_utilisateur)
    {
        $hashedPwd = password_hash($password, PASSWORD_DEFAULT);

        $sth2 = $this->DbHandler()->prepare("UPDATE utilisateurs SET login = :login, password = :password, email = :email WHERE utilisateurs.id = :id");

        $sth2->execute(array(
            ":login" => $login,
            ":password" => $hashedPwd,
            ":email" => $email,
            ":id" => $id_utilisateur
        ));

        $_SESSION['login'] = $login;
    }

    public function setInfo($post, $row, $login)
    {
       $setInfo = $this->DbHandler()->prepare("UPDATE utilisateurs SET :row = :post WHERE utilisateurs.login = :login");

       $setInfo->execute([":row" => $row, ":post" => $post, ":login" => $login]);

       $_SESSION["current_session"]["user"][$row] = $post;

    }


    public function deleteUser($id)
    {

        $sth = $this->DbHandler()->prepare("UPDATE `utilisateurs` SET `login` = 'Utilisateur supprimé', `password` = 'Meline,Sirine,Alex,Oliv MVP' WHERE id = :id");
        $sth->execute(array(':id' => $id));
        echo "<p>Nous vous confirmons la Suppression de Votre Compte </p>";
    }

    // Modifier les droits d'un utilisateur
    public function setDroit($id_droit, $id_utilisateur)
    {

        $set = $this->DbHandler()->prepare("UPDATE utilisateurs SET id_droits = :id_droit WHERE id = :id ;");

        $res = $set->execute(array(':id_droit' => $id_droit, ':id' => $id_utilisateur));

        header("location:../../admin.php");
    }
}

<?php

require ('Dbh.php');

class User extends Dbh
{
    function checkUser(string $login) : array
    {
        $dbHandler = $this->DbHandler();

        $statement = $dbHandler->prepare("SELECT * FROM `utilisateurs` WHERE `email` = :login OR `login` = :login");

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
     * @desc Creates a new user and returns a boolean indicating the status of the              operation...
     */
    public function register(array $data) : bool
    {
        var_dump($data);
        $dbHandler = $this->DbHandler();
        $statement = $dbHandler->prepare("INSERT INTO `utilisateurs` (prénom, nom, email, password, created_at, login) VALUES (:first_name, :last_name, :email, :password, :created_at, :login)");
        
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
        
        $result = $statement->execute();
        
        if ($result) {
            return true;
        } else {
            return false;
        }
        
    }


}

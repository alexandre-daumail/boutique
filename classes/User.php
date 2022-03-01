<?php

require ('Dbh.php');

class User extends Dbh
{
    function checkUser(string $email) : array
    {
        $dbHandler = $this->DbHandler();

        $statement = $dbHandler->prepare("SELECT * FROM `utilisateur` WHERE `EMAIL` = :email OR `LOGIN` = :email");

        $statement->bindValue(':email', $email, PDO::PARAM_STR);
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
        $dbHandler = $this->DbHandler();
        $statement = $dbHandler->prepare("INSERT INTO `utilisateur` (PRENOM, NOM, EMAIL, MOT_DE_PASSE, STATUS, created_at, updated_at) VALUES (:first_name, :last_name, :email, :password, :status, :created_at, :updated_at)");
        
        //#Defaults....
        $timestamps = date('Y-m-d H:i:s');
        $status = 1;
        $password = password_hash($data['password'], PASSWORD_DEFAULT);

        //Values Bindings....
        $statement->bindValue(':first_name', $data['first_name'], PDO::PARAM_STR);
        $statement->bindValue(':last_name', $data['last_name'], PDO::PARAM_STR);
        $statement->bindValue(':email', $data['email'], PDO::PARAM_STR);
        $statement->bindValue(':password', $password, PDO::PARAM_STR);
        $statement->bindValue(':status', $status, PDO::PARAM_INT);
        $statement->bindValue(':created_at', $timestamps, PDO::PARAM_STR);
        $statement->bindValue(':updated_at', $timestamps, PDO::PARAM_STR);
        
        $result = $statement->execute();
        if ($result) {
            return true;
        } else {
            return false;
        }
        
    }


}

<?php 

    require_once('classes/User.php');

    //Reçoit un array contenant les info utilisateur de l'inscription pour tenter de créer un nouvel utilisateur.

    function Signup(array $data) : array
    {
        $data = filter_input_array(INPUT_POST, FILTER_SANITIZE_FULL_SPECIAL_CHARS);
        
        // Filtration des données récupérées
        $login = stripcslashes(strip_tags($data['login']));
        $first_name = stripcslashes(strip_tags($data['first_name']));
        $last_name = stripcslashes(strip_tags($data['last_name']));
        $email = stripcslashes(strip_tags($data['email']));
        $password = htmlspecialchars($data['password']);
        $password_rpt = htmlspecialchars($data['password_rpt']);
        
        // Affichage des erreurs
        $errors = [];

        if (preg_match('/[^A-Za-z0-9_]/', $login)) {
            $errors['login'] = "Désolé, veuillez entrer un pseudo valide";
        }
        if (preg_match('/[^A-Za-z0-9_]/', $first_name)) {
            $errors['first_name'] = "Désolé, veuillez entrer un prénom valide";
        }

        if (preg_match('/[^A-Za-z0-9_]/', $last_name)) {
            $errors['last_name'] = "Désolé, veuillez entrer un nom valide";
        }

        if ($password != $password_rpt) {
            $errors['password_rpt'] = "Désolé, les mots de passe de correspondent pas";
        }

        $registration = new User;

        // Vérifier que le pseudo n'est pas déjà utilisé...
        $loginChecked = $registration->checkUser($login);
        if ($loginChecked['status']) {
            $errors['login'] = "Désolé mais ce pseudo existe déjà.";
        }
        
        //Vérifier que le mail n'est pas déjà utilisé...
        $emailChecked = $registration->checkUser($email);
        if ($emailChecked['status']) {
            $errors['email'] = "Désolé mais cet email existe déjà.";
        }

        if (strlen($password) < 7) {
            $errors['password'] = "Le mot de passe doit faire minimum 7 caractères";
        }

        if (count($errors) > 0) {           
            $errors['error']['signup'] = "Veuillez corriger les champs erronés";
            return $errors;
        } else {

            //Créer un nouvel utilisateur
            $data = [
                'civility' => $
                'first_name' => $first_name,
                'last_name' => $last_name,
                'email' => $email,
                'password' => $password,
                'login' => $login,
            ];
            
            $registration->register($data);
            
            if ($registration) {
           
                header("Location: index.php");
                
            } else {

                $errors['error']['signup'] = "Désolé, une erreur inattentue a été constatée et votre compte n'a pas été créé. Veuillez réessayer ultérieurement";
                return $errors;
            }
        }
    }

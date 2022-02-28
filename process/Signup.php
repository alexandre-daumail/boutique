<?php 

    require_once('classes/User.php');

    //Reçoit un array contenant les info utilisateur de l'inscription pour tenter de créer un nouvel utilisateur.

    function Signup(array $data) : array
    {
        $data = filter_input_array(INPUT_POST, FILTER_SANITIZE_FULL_SPECIAL_CHARS);
        
        // Filtration des données récupérées
        $first_name = stripcslashes(strip_tags($data['first_name']));
        $last_name = stripcslashes(strip_tags($data['last_name']));
        $email = stripcslashes(strip_tags($data['email']));
        $password = htmlspecialchars($data['password']);
        $password_rpt = htmlspecialchars($data['password_rpt']);
        
        // Affichage des erreurs
        $errors = [];

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

        //Vérifier que le mail n'est pas déjà utilisé...
        $emailChecked = $registration->checkEmail($email);
        if ($emailChecked['status']) {
            $errors['email'] = "Désolé mais cet email existe déjà.";
        }

        if (strlen($password) < 7) {
            $errors['password'] = "Le mot de passe doit faire minimum 7 caractères";
        }

        if (count($errors) > 0) {           
            $errors['error'] = "Veuillez corriger les champs erronés";
            return $errors;
        } else {

            //Créer un nouvel utilisateur
            $data = [
                'first_name' => $first_name,
                'last_name' => $last_name,
                'email' => $email,
                'password' => $password
            ];
            
            $registration->register($data);
            
            if ($registration) {
                //Before the redirect this would be a good time to send a mail or something in order to verify the user...
                array_pop($data);
                $_SESSION['current_session'] = [
                    'status' => 1,
                    'user' => $data,
                    'date_time' => date('Y-m-d H:i:s'),
                ];
                header("Location: index.php");
            } else {
                //#You could probably notify the dev team within this line but this is just a demo still....
                $errors['error'] = "Désolé, une erreur inattentue a été constatée et votre compte n'a pas été créé. Veuillez réessayer ultérieurement";
                return $errors;
            }
        }
    }

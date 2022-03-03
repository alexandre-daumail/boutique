<?php

  require_once('classes/User.php');
  
  // Receives an email address and password from the $_POST superglobal and matches it against the databse records to authenticate the user
  function Login(array $data)
  {

    $data = filter_input_array(INPUT_POST, FILTER_SANITIZE_FULL_SPECIAL_CHARS);
    $errors = [];
    $login = stripcslashes(strip_tags($data['login']));
    $password = htmlspecialchars($data['password']);

    $user = new User;

    //check if the email/login address exists in the database...
    $check = $user->checkUser($login);
    if (!$check['status']) {
      $errors['error']['login'] = "Identifiants incorrects.";
      return $errors;
    } else {
      //we check that the password matches the hash
      if (password_verify($password, $check['data']['MOT_DE_PASSE'])) {
        $_SESSION['current_session'] = [
          'status' => 1,
          'user' => $check['data'],
          'date_time' => date('Y-m-d H:i:s'),
        ];
        header("Location: index.php?connected");
      }
      
      if (!password_verify($password, $check['data']['MOT_DE_PASSE'])) {
        $errors['error'] = "Invalid credentials passed. Please, check the Email or Password and try again.";
        return $errors;
      }
    }
  }

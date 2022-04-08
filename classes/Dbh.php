<?php

class Dbh
{

  // @param void | null
  // @return array | mixed
  // @desc Crée une nouvelle connexion PDO et retourne le gestionnaire 

  protected function DbHandler()
  {
    $dbHost = '127.0.0.1';
    $dbName = 'boutique';
    $dbUser = 'root';
    $dbPass = '';

    //Crée un DSN (data Source Name) pour la connexion à la bdd
    $Dsn = "mysql:host=" . $dbHost . ";dbname=" . $dbName . ";charset=utf8mb4";

    //Crée des options pour la configuration de la connexion PDO
    $options = array(
      PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
    );

    try {

      $Connection = new PDO($Dsn, $dbUser, $dbPass, $options);
      return $Connection;
    } catch (Exception $e) {
      var_dump('Couldn\'t Establish A database Connection. Due to the following reason: ' . $e->getMessage());
    }
  }
}

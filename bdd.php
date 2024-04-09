<?php

try {
  $connexion = new PDO (
    sprintf('mysql:host=%s;dbname=%s;port=%s;charset=utf8', MYSQL_HOST, MYSQL_NAME, MYSQL_PORT),
    MYSQL_USER,
    MYSQL_PASSWORD
  );
  $connexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
}
catch(PDOException $exception){
  die('Erreur :' . $exception ->getMessage());
};


$oeuvres = $connexion->prepare('SELECT * FROM oeuvres');
$oeuvres->execute();
  





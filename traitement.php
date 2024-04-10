<?php
  include('mysql.php');
  include('bdd.php');

  $postOeuvre = $_POST;

  if (
    empty($postOeuvre['nom_oeuvre'])
    || empty($postOeuvre['author'])
    || empty($postOeuvre['image'])
    || empty($postOeuvre['description'])
    || strlen($postOeuvre['description']) < 3
    || !filter_var($postOeuvre['image'], FILTER_VALIDATE_URL)){
      header('Location: ajouter.php?erreur=true');
    }
  else {
    $nom_oeuvre = htmlspecialchars(trim($postOeuvre['nom_oeuvre']));
    $author = htmlspecialchars(trim($postOeuvre['author']));
    $image = htmlspecialchars(trim($postOeuvre['image']));
    $description = htmlspecialchars(trim($postOeuvre['description']));
  }

  try { 
    $insertOeuvre = $connexion->prepare('INSERT INTO oeuvres(nom_oeuvre, author, image, description) VALUE(:nom_oeuvre, :author, :image, :description)');
    $insertOeuvre->execute([
      'nom_oeuvre' => $nom_oeuvre,
      'author' => $author,
      'image' => $image,
      'description' => $description,
    ]);
    header('Location: ajouter.php?success=true&message=L\'oeuvre a été ajoutée avec succès.');
    exit;
   } 
   catch(Exception $e) {
    echo 'Une erreur est survenue lors de l\'ajout de l\'oeuvre: ' . $e->getMessage();
   };
?>
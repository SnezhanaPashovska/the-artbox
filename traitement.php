<?php


  include('bdd.php');

  $postOeuvre = $_POST;

  if (
    empty($postOeuvre['title'])
    || empty($postOeuvre['author'])
    || empty($postOeuvre['image'])
    || empty($postOeuvre['description'])
    || strlen($postOeuvre['description']) < 3
    || !filter_var($postOeuvre['image'], FILTER_VALIDATE_URL)){
      header('Location: index.php?erreur=true');
    }
  else {
    $title = htmlspecialchars(trim($postOeuvre['title']));
    $author = htmlspecialchars(trim($postOeuvre['author']));
    $image = htmlspecialchars(trim($postOeuvre['image']));
    $description = htmlspecialchars(trim($postOeuvre['description']));
  }

  try { 
    $insertOeuvre = $connexion->prepare('INSERT INTO oeuvres(title, author, image, description) VALUE(:title, :author, :image, :description)');
    $insertOeuvre->execute([
      'title' => $title,
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
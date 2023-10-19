<?php


 
try {
  $db = new PDO('mysql:host=localhost;dbname=convoiturage;charset=utf8', 'root', '');
} catch (Exception $e) {
  die('Erreur : ' . $e->getMessage());
}
//gestion d'erreur 
//$db contient une istance pdo qui nous permet de nous connecter avec la base de donne 

?>



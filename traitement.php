<?php
// include ("index.php");
$errors=[];
$regex="/^(77|76|78|75|70)+[0-9]{7}/";
// $regexmail="/^[a-zA-Z]{3,8}+[0-9]{4}+@+\.[a-zA-Z]{2,4}/";
include("connection.php");
if ($_SERVER["REQUEST_METHOD"]==='POST') {
  if(isset($_POST["inscription"])){
    $nom=$_POST["nom"];
    $prenom=$_POST["prenom"];
    $mail=$_POST["mail"];
   $tel=$_POST["tel"];
   $mot_de_passe=$_POST["password"];
   if (empty($nom)||empty($prenom)||empty($mail)||empty($tel)||empty($mot_de_passe)){
    $errors[] = "Veuillez remplir tous les champs du formulaire.";
   }
   elseif(!ctype_alpha($nom)||!ctype_alpha($prenom)){
    $errors[]="veiller remplire le champs correctement correcte";
  
   }
   elseif(strlen( $mot_de_passe)<5){
    $errors[]="invalide";
  
   }elseif(!(preg_match($regex,$tel))){
    $errors[]="error";
  
   }
  //  elseif(!(preg_match($regexmail,$mail))){
  //   $errors[]="error";
  //  }
   elseif(!filter_var($mail, FILTER_VALIDATE_EMAIL)){
    $errors[]="error";
  
   }
   else{
  
   $stmt = $db->prepare("INSERT INTO clients (nom, prenom, mail,tel,password) VALUES (:nom,:prenom,:mail,:tel,:password)");
   
   $stmt->bindParam(':nom', $nom);
   $stmt->bindParam(':prenom', $prenom);
   $stmt->bindParam(':mail', $mail);
   $stmt->bindParam(':tel', $tel);
   $stmt->bindParam(':password',$mot_de_passe);
   $stmt->execute();
   if($stmt->execute()){
    echo ' inscription reussi.<a href="index2.php" type="submit" >connecter vous</a>';
    // header("location:index2.php");
   }else{
    echo"erreur de la connection";
   }
   
   
  
  
  
  }
  // print_r( $errors);
  
  
  
  
  }elseif(isset($_POST["connection"])){
    
  
      $mail=$_POST["mail"];
      $mot_de_passe=$_POST["password"];
  $sql = "SELECT * FROM clients WHERE mail=:mail";
      $stmt = $db->prepare($sql);
      $stmt->bindParam(':mail',$mail);
      $stmt->execute();
      $test= $stmt->fetch();// le fetch permet de recuperer de facon partiel les elements de la requete
      if($test &&  $mot_de_passe ===$test['password'])
      {
    
        header("location:acceil.php");
        // exit();
      
      }else
      {
        echo "vos iddentifiant ne correspond pas";
      }
      
  }
}

// $kya=$db->query("SELECT *FROM clients ' $nom','$prenom'");
// foreach($kya as $baba){
//   echo$bab["non"];
//   echo$baba["prenom"];
// }










?>
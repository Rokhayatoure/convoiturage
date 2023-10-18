<?php
try
{
  $db=new
  PDO('msql:host=localhost;dbname=convoiturage;sharset=utf8','root','root');
 
}
catch(Exception $e)
{
  die('Erreur :'.$e->getMessage());
}






?>
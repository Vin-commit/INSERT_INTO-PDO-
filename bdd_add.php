<?php
try 
{
  //
  $host = 'localhost';
  $dbname = 'test';
  $userDB = 'vincent';
  $password = '';

  $bdd = new PDO('mysql:host=' . $host .';dbname=' . $dbname . ';charset=utf8', $userDB, '', array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
  echo "Connexion à la base de donnée réussie...";
 }
catch (Exception $e)
{
  die('Erreur : ' . $e->getMessage());
}
$bdd->exec('INSERT INTO jeux_video(nom, possesseur, console, prix, nbre_joueurs_max, commentaires) VALUES(\'Nom du jeux\', \'Nom du possesseur\', \'nom de la console\', 99, 9, \'commentaires\')');

 echo 'Le jeu a bien été ajouté !';
?>

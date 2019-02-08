<?php
session_start();
// Connexion à la base de données
try
{
	$username = 'root';
    $password = '';
    $bdd = new PDO('mysql:host=127.0.0.1; dbname=compteutilisateur;charset=utf8',$username,$password);
}
catch(Exception $e)
{
        die('Erreur : '.$e->getMessage());
}

// Insertion du message à l'aide d'une requête préparée
$req = $bdd->prepare('INSERT INTO chat (pseudo, message) VALUES(?, ?)');
$req->execute(array($_SESSION['UserPseudo'], $_POST['message']));

// Redirection du visiteur vers la page du minichat
header('Location: chat.php');
?>
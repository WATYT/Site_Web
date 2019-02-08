<?php
session_start();
$username = 'root';
$password = '';
$bdd = new PDO('mysql:host=127.0.0.1; dbname=compteutilisateur;charset=utf8',$username,$password);
$reponse = $bdd->query('SELECT * FROM `annonce`');

if (isset($_POST['titre']) AND isset($_POST['type']) AND isset($_POST['description']) AND isset($_POST['prix']))
{
    $titre = $_POST['titre'];
    $id_user = $_SESSION['UserId'];
    $type = $_POST['type'];
    $description = $_POST['description'];
    $prix = $_POST['prix'];
    

    $req = $bdd->prepare('INSERT INTO annonce(titre, id_user, type, description, prix) VALUES(:titre, :id_user, :type, :description, :prix)');
    $req->execute(array(
    'titre' => $titre,
	'id_user' => $id_user,
	'type' => $type,
    'description' => $description,
    'prix' => $prix,
        ));
    header('Location: ./ajouteannoncee.php');
}

$reponse->closeCursor();
?>
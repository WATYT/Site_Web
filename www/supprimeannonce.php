<?php
session_start();
$username = 'root';
$password = '';
$bdd = new PDO('mysql:host=127.0.0.1; dbname=compteutilisateur;charset=utf8',$username,$password);

$idannonce = $_GET['idannonce'];

$req = $bdd->query("SELECT id_user
FROM annonce
WHERE id = $idannonce");
$result = $req->fetchAll();
echo $_SESSION['UserId'];
if($result[0]['id_user'] == $_SESSION['UserId'])
{
    $reponse = $bdd->query("DELETE FROM annonce
    WHERE annonce.id = $idannonce");

    header('Location: ./supprimeannoncee.php');
}else
{
    echo 'problem';
}


?>
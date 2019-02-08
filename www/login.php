<?php
session_start();
$username = 'root';
$password = '';
$bdd = new PDO('mysql:host=127.0.0.1; dbname=compteutilisateur;charset=utf8',$username,$password);

if (isset($_POST['pseudo']) AND isset($_POST['mdp']))
{
    $pseudo = $_POST['pseudo'];
    $mdp = $_POST['mdp'];
    
    $sql = "SELECT pseudo, mdp, id
    FROM compteutilisateur
    WHERE pseudo = '". $pseudo ."' AND mdp = '". $mdp. "'";
    echo $sql;
    $reponse = $bdd->query($sql);

    foreach($reponse as $row)
    {
        $_SESSION['UserId'] = $row['id'];
        $_SESSION['UserPseudo'] = $pseudo;
        header('Location: ./voirannoncee.php');
    }
    $reponse->closeCursor();

}
?>
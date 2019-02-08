<?php
$username = 'root';
$password = '';
$bdd = new PDO('mysql:host=127.0.0.1; dbname=compteutilisateur;charset=utf8',$username,$password);
$reponse = $bdd->query('SELECT * FROM `compteutilisateur`');

if (isset($_POST['pseudo']) AND isset($_POST['mdp']) AND isset($_POST['mdpverif']) AND isset($_POST['email']))
{
    if($_POST['mdp'] == $_POST['mdpverif'])
    {
        $pseudo = $_POST['pseudo'];
        $mdp = $_POST['mdp'];
        $email = $_POST['email'];

        $req = $bdd->prepare('INSERT INTO compteutilisateur(pseudo, mdp, email) VALUES(:pseudo, :mdp, :email)');
        $req->execute(array(
        
	    'pseudo' => $pseudo,
	    'mdp' => $mdp,
	    'email' => $email,
        ));
        
        header('Location: ./index.php');
    }else
    {
        echo 'Mot de passe non conforme';
    }
    
}

$reponse->closeCursor();
?>
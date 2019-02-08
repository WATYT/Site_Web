<?php
session_start();
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
		<link rel="stylesheet" href="stylechat.css" />
        <title>Commerce Illégal (Darknet)</title>
		<link rel="icon" href="Iconesite.jpg" type="image/jpg">
    </head>

    <body>
        <div id="bloc_page">
            <header>
                <h1>Bienvenue <?php echo $_SESSION['UserPseudo']; ?> sur la platforme de vente illégal</h1>
                
            </header>

            <div id="sommaire">
                <table>
                        <tr>
                            <td> <a href="index.php">Déconnexion</a> </td>
                            <td> <a href="chat.php">Tchat</a> </td>
                            <td> <a href="ajouteannoncee.php">Enregistrer une annonce</a> </td>
                            <td> <a href="voirannoncee.php">Consulter les annonces</a> </td>
                            <td> <a href="supprimeannoncee.php">Supprimer les annonces</a> </td>
                        </tr>
                </table>
            </div>

    <div id="connexion">
    <form action="chatpost.php" method="post">
        <p>
        Pseudo :  <?php  echo $_SESSION['UserPseudo']; ?> <br/><br/>
        <label for="message">Message</label> :  <input type="text" name="message" id="message" />
        <input type="submit" value="Envoyer" />

        <img src="img/noir.png" alt="Noir" height="5" width="100%">
	    </p>
    </form>


<?php

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

// Récupération des 10 derniers messages
$reponse = $bdd->query('SELECT pseudo, message FROM chat ORDER BY id DESC LIMIT 0, 100');

// Affichage de chaque message (toutes les données sont protégées par htmlspecialchars)
while ($donnees = $reponse->fetch())
{
	echo '<p><strong>' . htmlspecialchars($donnees['pseudo']) . '</strong> : ' . htmlspecialchars($donnees['message']) . '</p>';
}

$reponse->closeCursor();

?>
</div>
    </body>
</html>
<?php
session_start();
$username = 'root';
$password = '';
$bdd = new PDO('mysql:host=127.0.0.1; dbname=compteutilisateur;charset=utf8',$username,$password);
$reponse = $bdd->query("SELECT annonce.id as id, annonce.titre as titre, compteutilisateur.pseudo as pseudo, annonce.type as type, annonce.description as description, annonce.prix as prix 
FROM annonce INNER JOIN compteutilisateur 
ON annonce.id_user = compteutilisateur.id
WHERE annonce.id_user = '".$_SESSION['UserId']."'
ORDER BY annonce.id DESC");
?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
		<link rel="stylesheet" href="stylesupprimeannoncee.css" />
        <title>Commerce Illégal (Darknet)</title>
		<link rel="icon" href="Iconesite.jpg" type="image/jpg">
    </head>

    <body>
        <div id="bloc_page">
            <header>
                <h1>Bienvenue <?php echo $_SESSION['UserPseudo']; ?> sur la platforme de vente illégale</h1>
                
            </header>

            <div id="sommaire">
                <table>
                        <tr>
                            <td> <a href="index.php">Accueil</a> </td>
                            <td> <a href="chat.php">Tchat</a> </td>
                            <td> <a href="ajouteannoncee.php">Enregistrer une annonce</a> </td>
                            <td> <a href="voirannoncee.php">Consulter les annonces</a> </td>
                            <td> <a href="supprimeannoncee.php">Supprimer les annonces</a> </td>
                        </tr>
                </table>


            </div>

            <div id="connexion">
                <?php
                foreach($reponse as $row)
                {
                ?>
                <p>
                <h5>Index :  <?php echo $row['id']; ?> </h5> 
                <h2>Titre :  <?php echo $row['titre']; ?> </h2>
                <h4>Pseudo :  <?php echo $row['pseudo']; ?> </h4>
                <h4>Type :  <?php echo $row['type']; ?> </h4>
                <h4>Description :  <?php echo $row['description']; ?> </h4>
                <h4>Prix (en $):  <?php echo $row['prix']; ?> </h4>
                <a href= <?php echo "supprimeannonce.php?idannonce=".$row['id']; ?> >Supprimer l'annonce</a>
                <img src="img/noir.png" alt="Noir" height="5" width="100%">
                </p>
                <?php
                }
                
                $reponse->closeCursor();
                ?>
            </div>
		</div>
    </body>
</html>


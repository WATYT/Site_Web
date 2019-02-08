<?php
session_start();
$username = 'root';
$password = '';
$bdd = new PDO('mysql:host=127.0.0.1; dbname=compteutilisateur;charset=utf8',$username,$password);
$reponse = $bdd->query(
    'SELECT annonce.id as id, annonce.titre as titre, compteutilisateur.pseudo as pseudo, annonce.type as type, annonce.description as description, annonce.prix as prix 
FROM annonce INNER JOIN compteutilisateur 
ON annonce.id_user = compteutilisateur.id
WHERE annonce.type = "achat"
ORDER BY annonce.id DESC'
);
?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
		<link rel="stylesheet" href="stylevoirannoncee.css" />
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
                            <td> <a href="index.php">Déconnexion</a> </td>
                            <td> <a href="chat.php">Tchat</a> </td>
                            <td> <a href="ajouteannoncee.php">Enregistrer une annonce</a> </td>
                            <td> <a href="voirannoncee.php">Consulter les annonces</a> </td>
                            <td> <a href="supprimeannoncee.php">Supprimer les annonces</a> </td>
                        </tr>
                </table>


            </div>

            <div id="sommaire">
                <table>
                        <tr>
                            <td><h2> Trier par :</h2> </td>
                            <td> <a href="voirannoncee.php">Tout</a> </td>
                            <td> <a href="voirannonceeachat.php">Achat</a> </td>
                            <td> <a href="voirannonceevente.php">Vente</a> </td>
                            <td> <a href="voirannonceeservice.php">Service</a> </td>
                        </tr>
                </table>


            </div>

            <div id="connexion">
                <?php
                foreach($reponse as $row)
                {
                ?>
                <p>
                
                <h2>Titre :  <?php echo $row['titre']; ?> </h2>
                <h4>Pseudo :  <?php echo $row['pseudo']; ?> </h4>
                <h4>Type :  <?php echo $row['type']; ?> </h4>
                <h4>Description :  <?php echo $row['description']; ?> </h4>
                <h4>Prix (en $):  <?php echo $row['prix']; ?> </h4>
                <img src="img/noir.png" alt="Noir" height="5" width="100%">
                </p>
                <?php
                }
                
                $reponse->closeCursor();
                ?>
            </div>
            
            <div id="sommaire">
                <table>
                        <tr>
                            <td> <a href="voirannonceeachat.php">Retour en haut de page</a> </td>
                        </tr>
                </table>
            </div>

		</div>
    </body>
</html>


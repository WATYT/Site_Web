<?php
session_start();
$_SESSION['UserId'] = null;
$_SESSION['UserPseudo'] = null;
?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
		<link rel="stylesheet" href="styleindex.css" />
        <title>Vente de P à P</title>
		<link rel="icon" href="Iconesite.jpg" type="image/jpg">
    </head>

    <body>
        <div id="bloc_page">
            <header>
                <h1>Bienvenue sur la platforme de vente illégale</h1>
                
            </header>

            </div>
            
            <div id="sommaire">
                <table>
                <audio controls autoplay loop>
                            <source src="son/allday.mp3" type="audio/mpeg" >
                            Your browser does not support the audio tag.
                        </audio>
                        <tr>
                            <td> <a href="enregistrement.php">S'enregistrer</a> </td>
                        </tr>
                </table>


            </div>

            <div id="connexion">
                    <form method="post" action="login.php" id="form">
                            <p>
                                <label for="pseudo">Pseudo</label> : <input type="text" name="pseudo" id="pseudo" required /><br>
                                <label for="mdp">Mot de passe</label> : <input type="password" name="mdp" id="mdp" required /><br>
                                <input type="submit" value="Envoyer"/>
                            </p>
                        </form>
                        <img src="img/noir.png" alt="Noir" height="5" width="100%">
                        <h1>Sur le site vous retrouverez :</h1>
                        <h3>Drogue</h3>
                        <img src="img/java1.jpg" alt="Image" width="90%">  
                        <h3>Arme</h3> 
                        <img src="img/java2.jpg" alt="Image" width="90%">
                        <h3>Argent</h3>
                        <img src="img/java3.jpg" alt="Image" width="90%"> 
                        <img src="img/noir.png" alt="Noir" height="5" width="100%">
                            <p>
                            <h2>Le site comportera les fonctionnalités suivantes :</h2>
                            <ul>
                            <li>Création de compte privée (accès à la mise en vente et à l’achat)</li>
                            <li>Ajouter des annonces en tout genre (interface, photos, noms, descriptions)</li>
                            <li>Consulter les annonces (interface, photos, noms, descriptions)</li>
                            <li>Supprimer ses annonces</li>
                            <li>Recherche d’objets (filtre, type)</li>
                            <li>Tchat général</li>
                            </ul>
                            <h2>Améliorations futurs :</h2>
                            <ul>
                            <li>Notation des utilisateurs</li>
                            <li>Mise en place de mot interdit (annonce et tchat)</li>
                            <li>tchat privé entre 2 utilisateurs</li>
                            </ul>
                            <img src="img/noir.png" alt="Noir" height="5" width="100%">
                            <h3>Site créé dans le cadre du module de WEB</h3>
                            <h3>Par : WATY Théophane</h3>
                            <h3>Etudiant en LP MEEDD</h3>
                            </p>
            </div>

        </div>
    
    </body>
    
</html>


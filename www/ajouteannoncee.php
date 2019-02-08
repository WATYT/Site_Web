<?php
session_start();
?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
		<link rel="stylesheet" href="styleajouteannoncee.css" />
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
                            <td> <a href="index.php">Accueil</a> </td>
                            <td> <a href="chat.php">Tchat</a> </td>
                            <td> <a href="ajouteannoncee.php">Enregistrer une annonce</a> </td>
                            <td> <a href="voirannoncee.php">Consulter les annonces</a> </td>
                            <td> <a href="supprimeannoncee.php">Supprimer les annonces</a> </td>
                        </tr>
                </table>


            </div>

            <div id="connexion">
                    <form method="post" action="ajouteannonce.php" id="form">
                            <p>
                                <label for="titre">Titre</label> : <input type="text" name="titre" id="titre" required /><br>
                                
                                Pseudo :  <?php echo $_SESSION['UserPseudo']; ?> <br/><br/>

                                <label for="type">Vente</label> : <input type="radio" name="type" value="vente" required/>
                                <label for="type">Achat</label> : <input type="radio" name="type" value="achat" required/>
                                <label for="type">Service</label> : <input type="radio" name="type" value="service" required/> <br/>
                                <label for="description">Description</label> : <input type="text" name="description" id="description" required /><br>
                                <label for="prix">Prix (en $)</label> : <input type="text" name="prix" id="prix" /><br>
                                <input type="submit" value="Envoyer"/>
                            </p>
                        </form>

            </div>
            
		</div>
    </body>
</html>


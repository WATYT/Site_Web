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
                        
            </div>
            
		</div>
    </body>
    
</html>


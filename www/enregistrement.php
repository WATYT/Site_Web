<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
		<link rel="stylesheet" href="styleenregistrement.css" />
        <title>Vente de P à P</title>
		<link rel="icon" href="Iconesite.jpg" type="image/jpg">
    </head>

    <body>
        <div id="bloc_page">
            <header>
                <h1>Bienvenue sur la platforme de vente illégale</h1>
                
            </header>

            </div>
            
            <section>

                    <article>                
                            <h2>Bonjour à tous,</h2>
                        </article>

                <h2>Inscription :</h2>

                <form method="post" action="enregistre.php" id="form">
                    <p>
                        <label for="pseudo">Pseudo</label> : <input type="text" name="pseudo" id="pseudo" required /><br>
                        <label for="mdp">Mot de passe</label> : <input type="password" name="mdp" id="mdp" required /><br>
                        <label for="mdpverif">Confirmation mot de passe</label> : <input type="password" name="mdpverif" id="mdpverif" required /><br>
                        <label for="email">Email</label> : <input type="email" name="email" id="email" required /><br>
                        <input type="submit" value="Envoyer"/>
                    </p>
                </form> 
      
            </section>

            
		</div>
    </body>
</html>


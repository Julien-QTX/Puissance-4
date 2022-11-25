<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./asset/Profil.css">
    <title>Mon Espace</title>
</head>
<body>

<?php
$titre='Profile';
    require "Header.inc.php";
    session_start();
    include ('./asset/includes/database.inc.php');

    if(isset($_GET['pseudo'])) {
        $getpseudo = intval($_GET['pseudo']);
        $requser = $bdd->prepare('SELECT pseudo FROM utilisateur WHERE pseudo = ?');
        $requser->execute(array($getpseudo));
        $userinfo = $requser->fetch();
        }


?>
<div class="container">

    <h1 class="Titre">Bienvenue <?php echo "." ?></h1>

    <div class="AvaScore">

        <div class="Avatar">
            <img class="AvaPro" src="./asset/images/Champignon Bleu.jpg"alt="">

            <div class="selecavatar">

                <label for="avatar">Choisir votre photo de profil :</label>

                <input type="file" id="avatar" name="avatar" accept="image/png, image/jpeg" class="avatarFile">

                <br> 
            </div>

            
        </div>

        
           

            
                
                   

        

        <div class="Score">
            <h1 class="Titre">Meilleur Scores</h1>

            <table>
                <thead>
                    <th>scores</th>
                    <th>Nbr de Coups</th>
                    <th>Difficulté</th>
                    <th>Date</th>
                </thead>
                <tr>
                    <td>1</td>
                    <td>2</td>
                    <td>3</td>
                    <td>4</td>
                </tr>
                <tr>
                    <td>1</td>
                    <td>2</td>
                    <td>3</td>
                    <td>4</td>
                </tr>
                <tr>
                    <td>1</td>
                    <td>2</td>
                    <td>3</td>
                    <td>4</td>
                </tr>
                <tr>
                    <td>1</td>
                    <td>2</td>
                    <td>3</td>
                    <td>4</td>
                </tr>
                <tr>
                    <td>1</td>
                    <td>2</td>
                    <td>3</td>
                    <td>4</td>
                </tr>
                <tr>
                    <td>1</td>
                    <td>2</td>
                    <td>3</td>
                    <td>4</td>
                </tr>
                <tr>
                    <td>1</td>
                    <td>2</td>
                    <td>3</td>
                    <td>4</td>
                </tr>
                <tr>
                    <td>1</td>
                    <td>2</td>
                    <td>3</td>
                    <td>4</td>
                </tr>
                <tr>
                    <td>1</td>
                    <td>2</td>
                    <td>3</td>
                    <td>4</td>
                </tr>
                
            </table>
            <ul>
                    <li>
                        <a href="logout.php">
                            Se deconnecter
                        </a>
                    </li>
                </ul> 
                
            
        </div>

    </div>
            <div class="mod">

                <!--Changer son adresse email-->
                <section >
                    <form method="POST">
                        <div>
                            <h3>Modifier mon adresse email :</h3>
                            <label for="old_email"></label>
                            <input class="formulaire" type="email" id="old_email" name="old_email" placeholder="Ancien email" size="40" >
                        </div>
                        <div >
                            <label for="new_email"></label>
                            <input class="formulaire" type="email" id="new_email" name="new_email" placeholder="Nouvel email" size="40" >
                        </div>
                        <div >
                            <label for="password"></label>
                            <input class="formulaire" type="password" id="password" name="password" placeholder="Mot de passe" size="40">
                        </div>
                        <div class="submitt">
                            <button type="submit" name="mai">Changer l'email</button>
                        </div>
                    </form>
                </section>

                  
        
                <!--Changer son mot de passe-->
                <section>
                    <form method="POST">
                        <div>
                            <h3>Modifier mon mot de passe :</h3>
                            <label for="email"></label>
                            <input class="formulaire" type="email" id="email" name="email" placeholder="Email" size="40" >
                        </div>
                        <div>
                            <label for="old_password"></label>
                            <input class="formulaire" type="password" id="old_password" name="old_password" placeholder="Ancien mot de passe" size="40">
                        </div>
                        <div>
                            <label for="new_password"></label>
                            <input class="formulaire" type="password" id="new_password" name="new_password" placeholder="Nouveau mot de passe" size="40">
                        </div>
                        <div>
                            <label for="confirm_password"></label>
                            <input class="formulaire" type="password" id="confirm_password" name="confirm_password" placeholder="Confirmez le mot de passe"size="40">
                        </div>
                        <div class="submitt">
                        <button type="submit" name="pass">Changer le mot de passe</button>
                        </div>
                    </form>
                </section>
            </div>


</div> 


<?php
    require "Footer.inc.php"
?>
</body>
</html>
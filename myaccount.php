<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./asset/Profil.css">
    <link rel="stylesheet" href="./asset/HeaderFooter.css">
    <title>Mon Espace</title>
</head>
<body>

<?php
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

    <h1 class="Titre">Bienvenue <?php echo "." ?> Julien</h1>

    <div class="AvaScore">

        <div class="Avatar">
            <img class="AvaPro" src="./asset/images/Champignon Bleu.jpg"alt="">

            <div class="selecavatar">

                <label for="avatar">Choisir votre photo de profil :</label>

                <input type="file" id="avatar" name="avatar" accept="image/png, image/jpeg" class="avatarFile">

                <br>

                <form action="" class="formprofil">
                    <label for="oldEmail">Ancien e-mail :</label>
                    <input type="mail" id="" name="oldmail" class=""><br>

                    <label for="newEmail">Nouvel e-mail :</label>
                    <input type="mail" id="" name="newmail" class=""><br>

                    <label for="oldMDP">Ancien Mot de passe :</label>
                    <input type="password" id="" name="oldMDP" class=""><br>

                    <label for="newMDP">Nouveaux Mot de passe :</label>
                    <input type="password" id="" name="newMDP" class=""><br>

                    <button>Enregistrer</button>
                </form>
                
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

</div>        

<?php
    require "Footer.inc.php"
?>
</body>
</html>
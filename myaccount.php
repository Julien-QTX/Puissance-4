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

<div class="deco">

    <ul>
                    <li>
                        <a href="logout.php">
                            Se deconnecter
                        </a>
                    </li>
            </ul> 
                
</div>
<div class="container">

    <h1 class="Titre">Bienvenue</h1>
            
      
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

                //la verifications des informations saisie par l'utilisateur
                if(isset($_POST["submit_email"])){

                    //mes variables qui contiennent mes informations $_POST
                    $old_email = filter_var($_POST["old_email"], FILTER_SANITIZE_EMAIL);
                    $new_email = filter_var($_POST["new_email"], FILTER_SANITIZE_EMAIL);
                    $mdp = $_POST["password"];

                    if(filter_var($old_email, FILTER_VALIDATE_EMAIL) && filter_var($new_email, FILTER_VALIDATE_EMAIL)) {

                        //prepare les commandes pour l'etape suivant
                        $demande = $dbh->prepare("SELECT * FROM utilisateur WHERE email = ?");
                        $demande->bindParam(1, $old_email);
                        $demande->execute();
                        $utilisateur = $demande->fetch();

                        if($utilisateur && password_verify($mdp, $utilisateur['password'])) {
                            $requeteSQL = "UPDATE utilisateur SET email = ? WHERE email = '{$old_email}'";
                            $requeteChange = $dbh -> prepare($requeteSQL);
                            $requeteChange -> execute([$new_email]);
                        } else {
                            echo "Le mot de passe est incorrect.";
                        }

                    }
                }

                if(isset($_POST["submit_password"])){

                    $email = filter_var($_POST["email"], FILTER_SANITIZE_EMAIL);
                    $old_password = $_POST["old_password"];
                    $new_password = $_POST["new_password"];
                    $confirm_mdp = $_POST["confirm_password"];

                    $request = $dbh->prepare("SELECT * FROM utilisateur WHERE email = ?");
                    $request->bindParam(1, $email);
                    $request->execute();
                    $player = $request->fetch();

                    if(filter_var($email, FILTER_VALIDATE_EMAIL)) {

                        if($player && password_verify($old_password, $player['password'])) {
                            if(!preg_match("#[0-9]#", $new_password)){
                                echo "Le mot de passe ne contient pas de nombre.";
                            } elseif(!preg_match("#[A-Z]#", $new_password)){
                                echo "Le mot de passe ne contient pas de majuscule.";
                            } elseif(!preg_match("/[\'^£$%&*()}{@#~?><>,|=_+!-]/", $new_password)){
                                echo "Le mot de passe ne contient pas de caractère spécial.";
                            } elseif($new_password != $confirm_mdp){
                                echo "Les mots de passe ne sont pas similaires.";
                            } else {
                                $pass_hash = password_hash($new_password, PASSWORD_DEFAULT);
                                $anotherSQLrequest = "UPDATE utilisateur SET password = ? WHERE email = '{$email}'";
                                $anotherSQLrequestChange = $dbh -> prepare($anotherSQLrequest);
                                $anotherSQLrequestChange -> execute([$pass_hash]);
                            }
                        } else {
                            echo "Mot de passe incorrect.";
                        }

                    }

                }

            ?>



<?php
    require "Footer.inc.php"
?>
</body>
</html>
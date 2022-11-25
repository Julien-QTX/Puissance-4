<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="./asset/register.css">
        
        <title>Inscription</title>
       
        

        



        
    </head>
    <body>

        <?php

            require 'Header.inc.php';
            session_start();
            include ('./asset/includes/database.inc.php');
            

            $error = false;
            $error2 = 0;

            // S'il y a une session alors on ne retourne plus sur cette page
            if (isset($_SESSION['id'])){
                header('Location: monespace.php');
                exit;
            }
                
            // Si la variable "$_Post" contient des informations alors on les traitres
            if(!empty($_POST)){
                extract($_POST);
                $valid = true;
                
                // On se place sur le bon formulaire grâce au "name" de la balise "input"

                if(empty($_POST['pseudo'])){
                    $valid = false;
                    $er_pseudo = "Le Pseudo ne peut pas être vide";

                // On vérifit que le pseudo est dans le bon format
                }else{
                    // On vérifit que le pseudo est disponible
                    $DB = new PDO('mysql:host=localhost;dbname=Puissance-4;charset=utf8', 'root', 'root');

                    $DB->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);


                    $pseudo = $_POST['pseudo'];
                    $stmt = $DB->prepare("SELECT pseudo FROM utilisateur WHERE pseudo = ? ");
                    $stmt->execute([$pseudo]); 
                    $user1 = $stmt->fetch();
                    if ($user1) {
                        $valid=false;
                        $er_pseudo = "Le pseudo est deja utilisé";
                    }
                }

                
                if (isset($_POST['Inscription'])){
                    $pseudo = htmlentities(trim($pseudo)); // on récupère le pseudo
                    $mdp = trim($mdp); // On récupère le mot de passe 
                    $confmdp = trim($confmdp); //  On récupère la confirmation du mot de passe

                    if(empty($_POST['mail'])){
                        $valid = false;
                        $er_mail = "Le mail ne peut pas être vide";
            
                    // On vérifit que le mail est dans le bon format
                    }elseif(!preg_match("/^([a-z0-9\+_\-]+)(\.[a-z0-9\+_\-]+)*@([a-z0-9\-]+\.)+[a-z]{2,6}$/ix", $_POST['mail'])){
            
                        $valid = false;
                        $er_mail = "Le mail n'est pas valide";
            
                    }else{
                                // On vérifit que le mail est disponible
                        $DB = new PDO('mysql:host=localhost;dbname=Puissance-4;charset=utf8', 'root', 'root');
            
                        $DB->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

            
                        $email = $_POST['mail'];
                        $stmt = $DB->prepare("SELECT email FROM utilisateur WHERE email=?");
                        $stmt->execute([$email]); 
                        $user = $stmt->fetch();
                        if ($user) {
                            $valid=false;
                            $er_mail = "Le mail est deja utilisé";
                        }
                    }
                
                    // Vérification du mot de passe
                    if(empty($mdp)) {
                        $valid = false;
                        $er_mdp = "Le mot de passe ne peut pas être vide";
                
                    }elseif($mdp != $confmdp){
                        $valid = false;
                        $er_mdp = "La confirmation du mot de passe n'est pas valide'";
                    }
                
                    // Si toutes les conditions sont remplies alors on fait le traitement
                    if($valid){
                
                        //$mdp = crypt($mdp, "$6$rounds=5000$macleapersonnaliseretagardersecret$");        achure du mot de passe
                        $date_creation_compte = date('d-m-Y H:i:s');

                        //Hachure du Mot de passe

                        $mdpH = password_hash($confmdp, PASSWORD_DEFAULT);
                
                        // On insert nos données dans la table utilisateur
                        $requeteSql = 'INSERT INTO utilisateur (id, email, password, pseudo, date_heure_inscription) VALUES (NULL, ?, ?, ?, NOW())';
                        $requeteInscription = $dbh -> prepare($requeteSql);
                        $requeteInscription -> execute([$email, $mdpH, $pseudo]);

                    

                        $retour = mail('julien.quatravaux@edu.esiee-it.fr', 'Envoi depuis la page Inscription', 'email de confirmation', 'From: The Power Of Memory');
                        if ($retour){
                            echo '<p>Votre message a bien été envoyé.</p>';
                        }
                

                        
                        
                        header('Location: login.php');
                        exit;
                    }
                }
            }

            ?>

            
            <div class="container">
                <form method="post" action="#">
                    <?php

                    if (isset($er_pseudo)){
                        ?>
                        <div><?= $er_pseudo ?></div>
                        <?php
                    }
                    ?>
                    <label for="pseudo">Pseudo : </label>
                    <input class="pseudo" pattern=".{4,}" type="text" placeholder="Votre pseudo" name="pseudo" value="<?php if(isset($pseudo)){ echo $pseudo; }?>" required>
                    <?php

                    if (isset($er_mail)){
                        ?>
                        <div><?= $er_mail ?></div>
                        <?php
                    }
                    ?>
                    <label for="email">Email</label>
                    <input class="email" type="email" placeholder="Adresse email" name="mail" value="<?php if(isset($email)){ echo $email; }?>" required>
                    <?php

                    if (isset($er_mdp)){
                        ?>
                        <div><?= $er_mdp ?></div>
                        <?php
                    }
                    ?>

                    <label for="mdp">Mot de passe : </label>
                    <div class="field">
                        <input onkeyup="trigger()" class="password" type="password"  placeholder="Mot de passe" name="mdp" value="<?php if(isset($mdp)){ echo $mdp; }?>" required>
                        
                    </div>
                    <div class="indicator">
                        <span class="weak"></span>
                        <span class="medium"></span>
                        <span class="strong"></span>
                    </div>
                    <div class="text"> ton password est trop faible</div>
                    <label for="confmdp">Confirmer votre mot de passe : </label>
                    <input class="password" type="password" placeholder="Confirmer le mot de passe" name="confmdp" required>
                    
                    <div class="submitt">
                        <button type="submit" name="Inscription">Envoyer</button>
                    </div>
                    
                </form>
            </div>

            <script>
                const indicator = document.querySelector(".indicator");
                const input = document.querySelector("input");
                const weak = document.querySelector(".weak");
                const medium = document.querySelector(".medium");
                const strong = document.querySelector(".strong");
                const text = document.querySelector(".text");
                let regExpWeak = /[a-z]/;
                let regExpMedium = /\d+/;
                let regExpStrong = /.[!,@,$,^,&,*,?,_,~,‑,(,)]./;

                function trigger(){
                    if(input.value != ""){
                       indicator.style.display = "block"; 
                       indicator.style.display = "flex";
                       if(input.value.lenght <= 3 && (input.value.match(regExpWeak) || input.value.match(regExpMedium) || input.value.match(regExpStrong)))no=1;
                       if(input.value.lenght >= 6 && ((input.value.match(regExpWeak) && input.value.match(regExpMedium)) || (input.value.match(regExpMedium) && input.value.match(reExpStrong)) || (input.value.match(reExpWeak) && input.value.match(reExpStrong))))no=2;
                       if(input.value.lenght >= 6 && input.value.match(regExpWeak) && input.value.match(regExpMedium) && input.value.match(regExpStrong))no=3;
                       if( no == 1){
                        weak.classlist.add("active");
                        text.style.display = "block";
                        text.textContent = " ton mot de passe est trop faible";
                        text.classlist.add("weak");
                       }
                    }else{
                        indicator.style.display = "none";
                        text.style.display = "none";

                    }
                }
            </script>
            

           

            
        <?php
            require 'Footer.inc.php'
        ?>
    </body>
</html>
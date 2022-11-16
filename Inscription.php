<link rel="stylesheet" href="styleInscription.css">
<?php
    require 'Header.inc.php';
    session_start();
    include ('includes/sqlconnect.php');

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
        if (isset($_POST['Inscription'])){
            $pseudo = htmlentities(trim($pseudo)); // on récupère le pseudo
            $mdp = trim($mdp); // On récupère le mot de passe 
            $confmdp = trim($confmdp); //  On récupère la confirmation du mot de passe
         
            //  Vérification du pseudo
            if(empty($pseudo)){
                $valid = false;
                $er_pseudo = ("Le pseudo d'utilisateur ne peut pas être vide");
            }
         
            

            if (isset($_POST['mail'])) {
                // ici on a bien recu des donnees d'un formulaire

                // on verifie donc l'adresse email
                if (filter_var($_POST['mail'], FILTER_VALIDATE_EMAIL) !== false) {
                    // l'email est valide donc je cree la variable $email
                    $email = $_POST['mail'];
                    $_SESSION['email'] = $_POST['mail'];
                }else {
                    $error = 'Email invalide';
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

                $mdpH = hash('sha256', $_POST['mdp']);
         
                // On insert nos données dans la table utilisateur
                $requeteSql = 'INSERT INTO utilisateur (id, email, password, pseudo, date_heure_inscription) VALUES (NULL, ?, ?, ?, NOW())';
                $requeteInscription = $dbh -> prepare($requeteSql);
                $requeteInscription -> execute([$email, $mdpH, $pseudo]);

                
                $to = $_POST['mail'];
                $subject = 'le sujet';
                $message = 'Bonjour !';
                $headers = "Content-Type: text/plain; charset=utf-8\r\n";
                $headers .= "From : julien.quatravaux@edu.esiee-it.fr \r\n";

                if (mail($to, $subject, $message, $headers)){
                    echo 'Envoye !';
                }else{
                    echo 'Erreur envoi !';
                }

                exit;
                
                header('Location: login.php');
            }
        }
    }

    ?>
    
    <form method="post">
        <?php

        if (isset($er_pseudo)){
            ?>
            <div><?= $er_pseudo ?></div>
            <?php
        }
        ?>
        <input class="pseudo" pattern=".{4,}" type="text" placeholder="Votre pseudo" name="pseudo" value="<?php if(isset($pseudo)){ echo $pseudo; }?>" required>
        <?php

        if (isset($er_email)){
            ?>
            <div><?= $er_email ?></div>
            <?php
        }
        ?>
        <input class="email" type="email" placeholder="Adresse email" name="mail" value="<?php if(isset($email)){ echo $email; }?>" required>
        <?php

        if (isset($er_mdp)){
            ?>
            <div><?= $er_mdp ?></div>
            <?php
        }
        ?>
        <input class="password" type="password"  placeholder="Mot de passe" name="mdp" value="<?php if(isset($mdp)){ echo $mdp; }?>" required>
        <input class="password" type="password" placeholder="Confirmer le mot de passe" name="confmdp" required>
        <div>
            <button type="submit" name="Inscription">Envoyer</button>
        </div>
        
    </form>
    
<?php
    require 'Footer.inc.php'
?>
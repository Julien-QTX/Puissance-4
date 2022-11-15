<link rel="stylesheet" href="styleInscription.css">
<?php
    require 'Header.inc.php';
    session_start();
    include ('includes/sqlconnect.php');

    // S'il y a une session alors on ne retourne plus sur cette page
    if (isset($_SESSION['id'])){
        header('Location: login.php');
        exit;
    }
         
    // Si la variable "$_Post" contient des informations alors on les traitres
    if(!empty($_POST)){
        extract($_POST);
        $valid = true;
         
        // On se place sur le bon formulaire grâce au "name" de la balise "input"
        if (isset($_POST['Inscription'])){
            $pseudo = htmlentities(trim($pseudo)); // on récupère le pseudo
            $email = htmlentities(strtolower(trim($email))); // On récupère le email
            $mdp = trim($mdp); // On récupère le mot de passe 
            $confmdp = trim($confmdp); //  On récupère la confirmation du mot de passe
         
            //  Vérification du pseudo
            if(empty($pseudo)){
                $valid = false;
                $er_pseudo = ("Le pseudo d'utilisateur ne peut pas être vide");
            }
         
            // Vérification du email
            if(empty($email)){
                $valid = false;
                $er_email = "Le email ne peut pas être vide";
         
            // On vérifit que le email est dans le bon format
            }elseif(!preg_match("/^[a-z0-9\-_.]+@[a-z]+\.[a-z]{2,3}$/i", $email)){
                $valid = false;
                $er_email = "Le email n'est pas valide";
         
            }else{
                // On vérifit que le email est disponible
                $req_email = $dbh->query("SELECT email FROM utilisateur WHERE mail = ?",
                array($email));
            
                $req_email = $req_email->fetch();
            
                if ($req_email['mail'] <> ""){
                $valid = false;
                $er_email = "Ce email existe déjà";
                }
            }
         
            // Vérification du mot de passe
            if(empty($mdp)) {
                $valid = false;
                $er_mdp = "Le mot de passe ne peut pas être vide";
         
            }elseif($mdp != $confmdp){
                $valid = false;
                $er_mdp = "La confirmation du mot de passe ne correspond pas";
            }
         
            // Si toutes les conditions sont remplies alors on fait le traitement
            if($valid){
         
                $mdp = crypt($mdp, "$6$rounds=5000$macleapersonnaliseretagardersecret$");
                $date_creation_compte = date('Y-m-d H:i:s');
         
                // On insert nos données dans la table utilisateur
                $dbh->execute("INSERT INTO utilisateur (id, email, password, pseudo, date_heure_inscription) VALUES
                    (NULL,?, ?, ?, ?)", array($id, $email, $pseudo, $password, $date_heure_inscription));
         
                header('Location: login.php');
                exit;
            }
        }
    }

    ?>
    
    <form action ="login.php" method="post">
        <?php

        if (isset($er_pseudo)){
            ?>
            <div><?= $er_pseudo ?></div>
            <?php
        }
        ?>
        <input class="pseudo" type="text" placeholder="Votre pseudo" name="pseudo" value="<?php if(isset($pseudo)){ echo $pseudo; }?>" required>
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
        <input class="password" type="password" placeholder="Mot de passe" name="mdp" value="<?php if(isset($mdp)){ echo $mdp; }?>" required>
        <input class="password" type="password" placeholder="Confirmer le mot de passe" name="confmdp" required>
        <div>
            <button type="submit" name="Inscription">Envoyer</button>
        </div>
        
    </form>
    
<?php
    require 'Footer.inc.php'
?>
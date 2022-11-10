<?php
    require 'Header.inc.php';
    session_start();
    include('includes/sqlconnect.php');


    // S'il y a une session alors on ne retourne plus sur cette page
    if (isset($_SESSION['id'])){
        header('Location: index.php');
        exit;
    }
         
    // Si la variable "$_Post" contient des informations alors on les traitres
    if(!empty($_POST)){

        extract($_POST);
        $valid = true;

        // On se place sur le bon formulaire grâce au "name" de la balise "input"
        if (isset($_POST['inscription'])){
        $pseudo = htmlentities(trim($pseudo)); // On récupère le pseudo
        $email = htmlentities(strtolower(trim($email))); // On récupère le Email
        $mdp = trim($mdp); // On récupère le mot de passe 
        $confmdp = trim($confmdp); //  On récupère la confirmation du mot de passe
         
            //  Vérification du pseudo
            if(empty($pseudo)){
                $valid = false;
                $er_pseudo = ("Le Pseudo de utilisateur ne peut pas être vide");
            }
         
            // Vérification du Email
            if(empty($email)){
                $valid = false;
                $er_email = "Le Email ne peut pas être vide";
         
                // On vérifit que le Email est dans le bon format
            }elseif(!preg_match("/^[a-z0-9\-_.]+@[a-z]+\.[a-z]{2,3}$/i", $email)){
                $valid = false;
                $er_email = "Le Email n'est pas valide";
         
            }else{
                // On vérifit que le Email est disponible
                $req_email = $DB->query("SELECT Email FROM utilisateur WHERE Email = ?",
                array($email));
         
                $req_email = $req_email->fetch();
         
                if ($req_email['email'] <> ""){
                    $valid = false;
                    $er_email = "Ce Email existe déjà";
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
                $DB->insert("INSERT INTO utilisateur (Pseudo, Email, PassWord, date_creation_compte) VALUES (?, ?, ?, ?, ?)", array($pseudo, $email, $mdp, $date_creation_compte));
            
                header('Location: index.php');
                exit;
            }
        }
    }
?>
<link rel="stylesheet" href="styleInscription.css">

<form method="post">
    <?php
        //S'il y a une erreur sur le pseudo alors on affiche
        if (isset($er_pseudo)){ 
        ?>
           <div><?= $er_pseudo ?></div>
        <?php
        }
        ?>
        <label for="pseudo"> Entrer votre Pseudo :</label>
        <input type="text" class="pseudo"placeholder="Votre Pseudo" name="pseudo" value="<?php if(isset($pseudo)){ echo $pseudo; }?>" required>
        <?php

        if (isset($er_email)){
        ?>
            <div><?= $er_email ?></div>
            <?php
        }
        ?>
        <label for="email"> Votre E-mail :</label>
        <input type="email" class="email" placeholder="Adresse Email" name="email" value="<?php if(isset($email)){ echo $email; }?>" required>
        <?php

        if (isset($er_mdp)){
        ?>
            <div><?= $er_mdp ?></div>
            <?php
        }
    ?>

    <label for="pseudo"> Votre Mot de passe :</label>
    <input type="password" class="password" placeholder="Mot de passe" name="mdp" value="<?php if(isset($mdp)){ echo $mdp; }?>" required>

    <label for="pseudo"> Confirmer votre Mot de passe :</label>
    <input type="password" class="password" placeholder="Confirmer le mot de passe" name="confmdp" required>
    
    <div>
        <button type="submit" name="inscription">Envoyer</button>
    </div>
    
</form>

<?php
    require 'Footer.inc.php'
?>
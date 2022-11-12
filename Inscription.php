<?php
    require 'Header.inc.php';
    session_start();
    include ('includes/sqlconnect.php');


    /*if(isset($_POST['forminscription'])) {
        $pseudo = htmlspecialchars($_POST['pseudo']);
        $email = htmlspecialchars($_POST['email']);
        $mdp = sha1($_POST['mdp']);
        $confmdp = sha1($_POST['confmdp']);

        if(!empty($_POST['pseudo']) AND !empty($_POST['email']) AND !empty($_POST['mdp']) AND !empty($_POST['confmdp'])) {
            $pseudolength = strlen($pseudo);

            if($pseudolength <= 255) {

                if(filter_var($email, FILTER_VALIDATE_EMAIL)) {

                    $reqemail = $bdd->prepare("SELECT email FROM utilisateur WHERE email = ?");
                    $reqemail->execute(array($email));
                    $emailexist = $reqemail->rowCount();

                    if($emailexist == 0) {

                        if($mdp == $mdp2) {
                            $longueurKey = 15;
                            $key = "";

                            for($i=1;$i<$longueurKey;$i++) {
                                $key .= mt_rand(0,9);
                            }

                            $insertmbr = $bdd->prepare("INSERT INTO utilisateur (pseudo, email, password, confirmkey, uniqid) VALUES(?, ?, ?, ?, ?)");
        
                            $insertmbr->execute(array($pseudo, $email, $mdp, $key, uniqid()));
        
                            $header="MIME-Version: 1.0\r\n";
                            $header.='From:"[VOUS]"<test.test@test.com>'."\n";
                            $header.='Content-Type:text/html; charset="uft-8"'."\n";
                            $header.='Content-Transfer-Encoding: 8bit';
                            $message='
                            <html>
                                <body>
                                <div align="center">
                                    <a href="http://127.0.0.1/Tutos%20PHP/%2314%20%28Espace%20membre%29/confirmation.php?pseudo='.urlencode($pseudo).'&key='.$key.'">Confirmez votre compte !</a>
                                </div>
                                </body>
                            </html>
                            ';
                            email($email, "Confirmation de compte", $message, $header);
                            $erreur = "Votre compte a bien été créé ! <a href=\"connexion.php\">Me connecter</a>";
                        } else {
                            $erreur = "Vos mots de passes ne correspondent pas !";
                        }
                    } else {
                        $erreur = "Adresse email déjà utilisée !";
                    }
                } else {
                $erreur = "Votre adresse email n'est pas valide !";
                }
            } else {
                $erreur = "Votre pseudo ne doit pas dépasser 255 caractères !";
            }
        } else {
            $erreur = "Tous les champs doivent être complétés !";
        }
    }*/

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
            $pseudo = htmlentities(trim($prenom)); // on récupère le prénom
            $email = htmlentities(strtolower(trim($email))); // On récupère le email
            $mdp = trim($mdp); // On récupère le mot de passe 
            $confmdp = trim($confmdp); //  On récupère la confirmation du mot de passe

            //  Vérification du nom
            if(empty($nom)){
                $valid = false;
                $er_nom = ("Le nom d' utilisateur ne peut pas être vide");
            }
         
            //  Vérification du prénom
            if(empty($prenom)){
                $valid = false;
                $er_prenom = ("Le prenom d' utilisateur ne peut pas être vide");
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
                $req_email = $DB->query("SELECT email FROM utilisateur WHERE email = ?",
                array($email));
            
                $req_email = $req_email->fetch();
            
                if ($req_email['email'] <> ""){
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
                $DB->insert("INSERT INTO utilisateur (nom, prenom, email, mdp, date_creation_compte) VALUES
                    (?, ?, ?, ?, ?)", array($nom, $prenom, $email, $mdp, $date_creation_compte));
         
                header('Location: index.php');
                exit;
            }
        }
    }
    ?>
    
    <div>
        <h2>Inscription</h2>
        <br /><br />
        <form method="POST" action="">

            <label for="pseudo">Pseudo :</label>
            <input type="text" placeholder="Votre pseudo" id="pseudo" name="pseudo" value="<?php if(isset($pseudo)) { echo $pseudo; } ?>" />
        
            <label for="email">Email :</label>
            <input type="email" placeholder="Votre email" id="email" name="email" value="<?php if(isset($email)) { echo $email; } ?>" />
    
            <label for="mdp">Mot de passe :</label>
            <input type="password" placeholder="Votre mot de passe" id="mdp" name="mdp" />

            <label for="mdp2">Confirmation du mot de passe :</label>
            <input type="password" placeholder="Confirmez votre mdp" id="mdp2" name="mdp2" />
            <br />
            <input type="submit" name="forminscription" value="Je m'inscris" />
        </form>
        <?php
        if(isset($erreur))
        {
            echo '<font color="red">'.$erreur."</font>";
        }
        ?>
    </div>
<?php
    require 'Footer.inc.php'
?>
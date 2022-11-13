

<link rel="stylesheet" href="login.css">

    <?php
    require "Header.inc.php";
    session_start();
    include ('includes/sqlconnect.php');

    if (isset($_SESSION['id'])){
        header('Location: index.php');
        exit;
    }
         
    // Si la variable "$_Post" contient des informations alors on les traitres
    if(!empty($_POST)){
        extract($_POST);
        $valid = true;
         
        // On se place sur le bon formulaire grâce au "name" de la balise "input"
        if (isset($_POST['Connexion'])){
            $email = htmlentities(strtolower(trim($email))); // On récupère le email
            $mdp = trim($mdp); // On récupère le mot de passe 
            
         
            
         
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
                $req_email = $DB->query("SELECT email FROM utilisateur WHERE mail = ?",
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
         
            }
            
            // Si toutes les conditions sont remplies alors on fait le traitement
            if($valid){
         
                $mdp = crypt($mdp, "$6$rounds=5000$macleapersonnaliseretagardersecret$");
                $date_creation_compte = date('Y-m-d H:i:s');
         
                // On insert nos données dans la table utilisateur
                $DB->insert("INSERT INTO utilisateur (pseudo, email, mdp, date_creation_compte) VALUES
                    (?, ?, ?, ?, ?)", array($pseudo, $email, $mdp, $date_creation_compte));
         
                header('Location: index.php');
                exit;
            }
        }
    }

   ?>
    
    <section class="log">
        <div>
        

            <form action="" method="post">
          
                <input type="text" name="Email" placeholder="Email" required="required"/>

                <input type="password" name="password" placeholder="Mot de passe" required="required"/>
                <button type="submit">Connexion</button>

            </form>
        </div>
    </section>

    <?php
    require "Footer.inc.php"
    ?>





<link rel="stylesheet" href="login.css">

    <?php
    require "Header.inc.php";
    session_start();
    include ('includes/sqlconnect.php');

    if (isset($_SESSION['id'])){
        header('Location: JeuFacile.php');
        exit;

    }

    if(!empty($_POST)){
        extract($_POST);
        $valid = true;
        
        if (isset($_POST['submit'])){
            
           
            if(empty($_POST['email'])){
                $valid = false;
                $er_mail = "Le mail ne peut pas être vide";
    
              // On vérifit que le mail est dans le bon format
            }elseif(!preg_match("/^([a-z0-9\+_\-]+)(\.[a-z0-9\+_\-]+)*@([a-z0-9\-]+\.)+[a-z]{2,6}$/ix", $_POST['email'])){
    
                $valid = false;
                $er_mail = "Le mail n'est pas valide";
    
            }else{
                        // On vérifit que le mail est disponible
                $DB = new PDO('mysql:host=localhost;dbname=Puissance-4;charset=utf8', 'root', 'root');
    
                $DB->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    
                $email = $_POST['email'];
                $stmt1 = $DB->prepare("SELECT email FROM utilisateur WHERE email=?");
                $stmt1->execute([$email]); 
                $user = $stmt1->fetch();
                if (!$user) {
                    $valid = false;

                    $er_mail = "le mail n'est pas bon";
                }
            
            }

            // Vérification du mot de passe
            $mdp = $_POST['password'];
            if(empty($mdp)){
                $valid = false;
                $er_mdp = "Le mot de passe ne peut pas être vide";
    
              // On vérifit que le pseudo est dans le bon format
            }else{
                // On vérifit que le pseudo est disponible
                $DB = new PDO('mysql:host=localhost;dbname=Puissance-4;charset=utf8', 'root', 'root');
    
                $DB->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    
                $mdp = $_POST['password'];
                $stmt = $DB->prepare("SELECT password FROM utilisateur WHERE password = ? ");
                $stmt->execute([$mdp]); 
                $user2 = $stmt->fetch();
                if (!$user2) {
                    $valid = false;

                    $er_mdp = "le mot de passe est mauvais";
                }
            }
         
            // Si toutes les conditions sont remplies alors on fait le traitement
            if($valid){

                // On insert nos données dans la table utilisateur
                $requeteSql = 'SELECT utilisateur (id, email, password, date_heure_derniere_co) VALUES (NULL, ?, ?, NOW())';
                $requeteConnexion= $dbh -> prepare($requeteSql);
                $requeteConnexion -> execute([$email, $mdp]);
                
                header('Location: JeuFacile.php');
                exit;
            }
        }
    }

?>

    <section class="log">
        <div>
            
            <form action="" method="post">

                <?php

                if (isset($er_mail)){
                ?>
                <div><?= $er_mail ?></div>
                <?php
                }
                ?>
            
                <input type="text" id="user_id" name="email" placeholder="Email" value="<?php if(isset($email)){ echo $email; }?>" required="required"/>
                    <?php

                    if (isset($er_mdp)){
                        ?>
                        <div><?= $er_mdp ?></div>
                        <?php
                    }
                    ?>

                <input type="password" id="user_password" name="password" placeholder="Mot de passe" value="<?php if(isset($mdp)){ echo $mdp; }?>" required="required"/>
                <button type="submit" name="submit">Connexion</button>

            </form>
            <a  class="juju" href="Inscription.php"> <u>Cliquez ici pour vous inscrire </u></a>

        </div>
    </section>
    
<?php
require "Footer.inc.php"
?>



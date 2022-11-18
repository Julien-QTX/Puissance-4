

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
            $email = htmlentities(trim($email)); // on récupère l'email
            $mdp = trim($mdp); // On récupère le mot de passe 
            $mdp = $_POST['password'];
            if(empty($_POST['email'])){
                $valid = false;
                $er_mail = "Le mail ne peut pas être vide";
    
              // On vérifit que le pseudo est dans le bon format
            }else{
                // On vérifit que le pseudo est disponible
                $DB = new PDO('mysql:host=localhost;dbname=Puissance-4;charset=utf8', 'root', 'root');
    
                $DB->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    
    
                $email = $_POST['email'];
                $stmt = $DB->prepare("SELECT email FROM utilisateur WHERE email = ? ");
                $stmt->execute([$email]); 
                $user1 = $stmt->fetch();
                if ($user1) {
                    $valid=true;
                }
            }
    
         
            // Vérification du mot de passe
            
            if(empty($_POST['password'])){
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
                if ($user2) {
                    $valid = true;
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
          
                <input type="text" id="user_id" name="email" placeholder="Email" required="required"/>

                <input type="password" id="user_password" name="password" placeholder="Mot de passe" required="required"/>
                <button type="submit" name="submit">Connexion</button>

            </form>
            <a  class="juju" href="Insciption.php"> <u>Cliquez ici pour vous inscrire </u></a>

            

    


            

            
        </div>
    </section>
    

    <?php
    require "Footer.inc.php"
    ?>





<link rel="stylesheet" href="login.css">

    <?php
    require "Header.inc.php";
    session_start();
    include ('includes/sqlconnect.php');
   ?>


   

    <section class="log">
        <div>
        

            <form action="" method="post">
          
                <input type="text" id="user_id" name="email" placeholder="Email" required="required"/>

                <input type="password" id="user_password" name="password" placeholder="Mot de passe" required="required"/>
                <button type="submit">Connexion</button>

            </form>
            <a  class="juju" href="Insciption.php"> <u>Cliquez ici pour vous inscrire </u></a>

            <?php
                if(isset($_POST["log"])){

                    //prepare les commandes pour l'etape suivant
                    $demande = $conn->prepare("SELECT * FROM utilisateur WHERE email = ? AND password = ?");
                    $demande->bindParam(1, $email);
                    $demande->bindParam(2, $motDePasse);
                    $demande->execute();


                }

               

        ?>

    


            

            
        </div>
    </section>
    

    <?php
    require "Footer.inc.php"
    ?>



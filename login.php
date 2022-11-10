

<link rel="stylesheet" href="login.css">

    <?php
    require "Header.inc.php";
    
    include ('includes/sqlconnect.php');



    if(isset($_POST['login'])) {
        $mail = htmlspecialchars($_POST['mail']);
        $mdp = sha1($_POST['mdp']);
       
        if(!empty($_POST['mail']) AND !empty($_POST['mdp']) ) {
           
           if($pseudolength <= 255) {
              if($mail == $mail2) {
                 if(filter_var($mail, FILTER_VALIDATE_EMAIL)) {
                    
                    $reqmail->execute(array($mail));
                    $mailexist = $reqmail->rowCount();
                    if($mailexist == 0) {
                       if($mdp == $mdp2) {
                          $longueurKey = 15;
                          $key = "";
                        
      
                          $insertmbr->execute(array($pseudo, $mail, $mdp, $key, uniqid()));
      
                          $header="MIME-Version: 1.0\r\n";
                          $header.='From:"[VOUS]"<votremail@mail.com>'."\n";
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
                          mail($mail, "Confirmation de compte", $message, $header);
                          $erreur = "Votre compte a bien été créé ! <a href=\"connexion.php\">Me connecter</a>";
                       } else {
                          $erreur = "Vos mots de passes ne correspondent pas !";
                       }
                    } else {
                       $erreur = "Adresse mail déjà utilisée !";
                    }
                 } else {
                    $erreur = "Votre adresse mail n'est pas valide !";
                 }
              } else {
                 $erreur = "Vos adresses mail ne correspondent pas !";
              }
           } else {
              $erreur = "Votre pseudo ne doit pas dépasser 255 caractères !";
           }
        } else {
           $erreur = "Tous les champs doivent être complétés !";
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



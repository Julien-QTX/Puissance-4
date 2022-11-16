

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
               if (isset($_SESSION['id'])){
                header ('Location: monespace.php');
                exit;
               }
               if(!empty($_POST)){
                    extract($_POST);
        
        
                    $valid = true;
                    $erreur = true;
                    $user_last_connection = date('Y-m-d H:i:s');
                    
                    
        
        
        
                    if (isset($_POST['login'])){
                        $r_email= trim($email);
                        $r_pass =trim($password);
                     
                        
                        //verif email
                        if (empty($r_email)){
                            $valid=false;
                            $er_email= "L'email ne peut pas etre vide";
                            echo $er_email;
                        }elseif(!filter_var($_POST['email'], FILTER_VALIDATE_EMAIL))
                        {   $valid= false;
                            $er_email="L'email est invalide";
                            echo $er_email;
                        }
        
                        if (empty($r_pass)){
                            $valid=false;
                            $r_pass="saisissez votre mots de passe";
                            echo $r_pass;
                        }
        
                        if ($valid){
                            echo "validate !";
                            $req_pass = $dbh->prepare("SELECT password, id FROM utilisateur WHERE email =?");
                            $req_pass->bindParam(1, $r_email);
                            $req_pass->execute();
                            $row = $req_pass->fetch();
                            if ($req_pass->rowCount()==0) {
                                echo "vide";
                            } else {
                                $db_password = $row['user_password'];
                            }
                            if(password_verify($r_pass, $db_password)) {
                                $req = $dbh->prepare("SELECT * FROM utilisateur WHERE id =?");
                            
                                $req->bindParam(1, $row['user_id']);
                                $req->execute();
        
                                $row = $req->fetch();
                                echo $row;
        
                                $_SESSION['user_id'] =$row['user_id'];
                                $_SESSION['user_pseudo'] =$row['user_pseudo'];
                                header ('Location: monespace.php');   
                            } else {
                                echo "l'email ou le mots de passe est incorrect";
                            }
                                       
                       
                    }
        
                    }
                }
               


        ?>

    


            

            
        </div>
    </section>
    

    <?php
    require "Footer.inc.php"
    ?>



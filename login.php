

<link rel="stylesheet" href="login.css">

    <?php
    require "Header.inc.php";
    session_start();
    include ('includes/sqlconnect.php');
    $username = mysqli_real_escape_string($db,htmlspecialchars($_POST['username'])); 
    $password = mysqli_real_escape_string($db,htmlspecialchars($_POST['password']));
 
 if($username !== "" && $password !== "")
 {
    $requete = "SELECT email, password FROM utilisateur where 
    peudo = '".$username."' and password = '".$password."' ";
    $exec_requete = mysqli_query($db,$requete);
    $reponse = mysqli_fetch_array($exec_requete);
    $count = $reponse['*'];
    
    
    if($count!=0) // nom d'utilisateur et mot de passe correctes
    {
    $_SESSION['username'] = $username;
    header('Location: monespace.php');
    }
    else
    {
    header('Location: login.php?erreur=1'); // utilisateur ou mot de passe incorrect
    }


    else
    {
    header('Location: login.php');
    }
}
mysqli_close($db); // fermer la connexion
    
   ?>


   

    <section class="log">
        <div>
        

            <form action="" method="post">
          
                <input type="text" name="Email" placeholder="Email" required="required"/>

                <input type="password" name="mdp" placeholder="Mot de passe" required="required"/>
                <button type="submit">Connexion</button>

            </form>
        </div>
    </section>
    

    <?php
    require "Footer.inc.php"
    ?>



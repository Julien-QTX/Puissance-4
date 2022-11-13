

<link rel="stylesheet" href="login.css">

    <?php
    require "Header.inc.php";
    session_start();
    include ('includes/sqlconnect.php');
    $error = false;
    $error2 = 0;

    
    
    if (isset($_POST['Email'])) {
        // ici on a bien recu des donnees d'un formulaire
    
        // on verifie donc l'adresse email
        if (filter_var($_POST['Email'], FILTER_VALIDATE_EMAIL) !== false) {
            // l'email est valide donc je cree la variable $email
            $email = $_POST['Email'];
            $_SESSION['email'] = $_POST['Email'];
        }
        else {
            $error = 'Email invalide';
        }
        
    }
    if (isset($_POST['mdp'])) {
        // ici on a bien recu des donnees d'un formulaire
    
        // on verifie donc l'adresse email
        if (filter_var($_POST['mdp'])) {
            // l'email est valide donc je cree la variable $email
            $password = $_POST['mdp'];
            $_SESSION['password'] = $_POST['mdp'];
        }
        else {
            $error = 'mdp invalide';
        }
       
    } 
    header('Location: monespace.php');

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



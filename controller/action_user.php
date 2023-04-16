<?php
if (isset($_GET["connecte"]) && $_GET["connecte"] == "false") {

    var_dump($_SESSION);

    unset($_SESSION['username']);
    unset($_SESSION['connecte']);
    unset($_SESSION['role']);
    session_destroy();

    header("Location: ./?page=connexion");
}


$page = 'home';
if (isset($_GET['page'])) {
    $page = $_GET['page'];
}


//formulaire de création de compte
if (isset($_POST["action"])) {
    if ($_POST["action"] == "add") {
        if (isset($_POST['user']) && isset($_POST['email']) && isset($_POST['mdp'])) {
            if ($_POST['mdp'] != "" && $_POST['user'] != "" && $_POST['email'] != "") {
                inscription($_POST["user"], $_POST["email"], $_POST["mdp"]);
                header("Location: ./?page=connexion");
            } else {
                echo 'information incorect';
            }

        }
    }
}

//formulaire de création de compte profesinnel
if (isset($_POST["action"])) {
    if ($_POST["action"] == "add") {
        if (isset($_POST['use']) && isset($_POST['ema']) && isset($_POST['mdpp'])&& isset($_POST['entr'])&& isset($_POST['adr'])&& isset($_POST['num'])) {
            if ($_POST['mdpp'] != "" && $_POST['use'] != "" && $_POST['ema'] != "" && $_POST['entr'] != "" && $_POST['adr'] != "" && $_POST['num'] != "") {
                inscription_pro($_POST["use"], $_POST["ema"], $_POST["mdpp"], $_POST["entr"], $_POST["adr"], $_POST["num"]);
                header("Location: ./?page=connexion");
            } else {
                echo 'incorect';
            }

        }
    }
}

//formulaire de connexion
if (isset($_POST["action"])) {
    if ($_POST["action"] == "connexion") {
        if (isset($_POST['pseudo']) && isset($_POST['mdp'])) {
            if ($_POST['mdp'] != "" && $_POST['pseudo'] != "") {
                $count = connexion($_POST['pseudo'], $_POST['mdp']);
                if ($count) {         // nom d'utilisateur et mot de passe correcte
                    $_SESSION['username'] = $_POST['pseudo'];
                    $_SESSION['connecte'] = true;
                    $_SESSION['role'] = recup_role($_POST['pseudo']);
                    if ($_SESSION['role']=='internaute') {
                        $_SESSION['point'] = recup_pts($_SESSION['id'][0]);
                    }
                } else {  
                    header("Location: .");
                }
            } else {
                echo "erreur";
                //echo " vous etes deja connecte?";
                header("Location: ./?page=connexion");

            }
        }
    }
}


//formulaire de modification de compte int

if (isset($_POST["action"])) {
    if ($_POST["action"] == "modifier") {
        if (isset($_SESSION['id'][0])) {
            $id = $_SESSION['id'][0]; // $id is now defined
            $password = $_POST['mdp'];
            $mail = $_POST['email'];
            $pseudo =  $_POST['user'];
            modification_compte ($id, $pseudo, $password, $mail); 
            echo "votre compte a été modifié.";
            // header("Location: ./?connecte=false");
        }
    }
}




//formulaire de modification de compte pro

if (isset($_POST["action"])) {
    if ($_POST["action"] == "modifier-pro") {
        if (isset($_SESSION['id'][0])) {
            $id = $_SESSION['id'][0]; // $id is now defined
            $password = $_POST['mdp'];
            $mail = $_POST['email'];
            $pseudo =  $_POST['user'];
            $entreprise = $_POST['entreprise'];
            $adresse = $_POST['adresse'];
            $num =  $_POST['numero'];
            modification_pro ($id, $pseudo, $mail, $entreprise , $adresse, $num, $password);
            echo "votre compte a été modifié.";
            // header("Location: ./?connecte=false");
        }
    }
}




//formulaire de suppression de compte
if (isset($_POST["action"]) && ($_POST["action"] == "sup_user")) {
    $id = $_SESSION['id'][0]; // $id is now defined
    suppression($id);
    echo "<p>votre compte a été supprimé.</p>";
    header("Location: ./?connecte=false");
}
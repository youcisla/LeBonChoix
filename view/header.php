<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="css\style.css" />
    <title>GoldenThing</title>
    <link rel="shortcut icon" href="icon-lieu.png" type="image/png">
</head>

<body>
    <div class="headiv">
        <table class="headt">
            <tr>
                <td>
                    <h1 class="logo">
                        <a class="button1" href="index.php?page=home">
                            <action></action>
                        </a>
                    </h1>
                </td>
                <td class='BigListe'>
                    <form action="." method="post" class="menu">
                        <li><a class="button" href="index.php?page=recherche">Recherche</a></li>
                        <li><a class="button" href="index.php?page=ranking">Ranking</a></li>
                        <?php
                                if (isset($_SESSION["connecte"]) && $_SESSION["connecte"]){
                                    echo '
                                    <ul id="menu-inscrp">
                                        <li><a href="#" >Parametre</a>
                                            <ul class ="MenuInscrp MenuInscrp1">
                                                <li ><a class="button" href ="index.php?page=profil">Profil</a></li>
                                                <li ><a class="button" href ="index.php?page=aide">Aide</a></li>
                                                <li ><a class="button" href ="index.php?connecte=false">Deconnexion</a></li>
                                            </ul>
                                        </li>
                                    </ul>
                                    ';
                                    if ($_SESSION["role"]=='internaute'){
                                        echo '
                                        <ul id="menu-inscrp">
                                            <li><a href="#" >Service</a>
                                                <ul class ="MenuInscrp tab2">
                                                    <li ><a class="button" href ="?page=reservation">Reservation</a></li>
                                                    <li ><a class="button" href ="">Devenir-Pro</a></li>
                                                    <li ><a class="button" href ="">Favoris</a></li>
                                                </ul>
                                            </li>
                                        </ul>
                                        ';
                                    }else{
                                        echo '
                                        <ul id="menu-inscrp">
                                            <li><a href="#" >Service</a>
                                                <ul class ="MenuInscrp tab2">
                                                    <li ><a class="button" href ="index.php?page=liste-bat">Ajouter</a></li>
                                                    <li ><a class="button" href ="">Mes-Ajout</a></li>
                                                    <li ><a class="button" href ="">Favoris</a></li>
                                                </ul>
                                            </li>
                                        </ul>';
                                    }
                                    echo '<li><a class="prof" href ="index.php?page=profil">'.$_SESSION['username'][0].'</a></li>';
                                }else{
                                    echo ' 
                                        <ul  id="menu-inscrp">
                                            <li><a href="#" >Inscription</a>
                                                <ul class ="MenuInscrp tab3">
                                                    <li><a href ="index.php?page=inscription">Internaute</a></li>
                                                    <li><a href="index.php?page=pro-insc">Proffesionnel</a></li>
                                                </ul>       
                                            </li>     
                                        </ul>
                                        <ul >
                                            <li ><a class="button" href ="index.php?page=connexion">Connexion</a></li>
                                        </ul>';
                                }
                                ?>
                    </form>
                </td>
            </tr>
        </table>
    </div>
</body>
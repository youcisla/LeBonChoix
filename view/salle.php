<?php
    $_SESSION['id_salle'] = $_GET['id_salle'];
?>
<div class="containerSalle">
    <form action="." method="post">
        <div class="cardSalle">
            <?php
            $tab = salle($_GET['id_salle']);
            $tab1 = ressources($_GET['id_salle']);
            if ($tab == NULL){
                echo ' Il ya aucun batiment';
            } else{
                while( $row = mysqli_fetch_assoc($tab)){
		
                    echo'
                        <h2> Salle: '. $row["numero"] .'</h2>
                        <div class="card-top">
                            <div class="card-headerSalle">
                                <img src="image/' . $row["photo"] . '" width = "50px" height = "50px" />
                            </div>
                            <div class="card-bodySalle">
                                <div class="hnaSalle"> 
                                    <div class="h4">Capacite: '. $row["Capacité"] . '</div>  
                                    <div class="h4">Niveau requis: '. $row["niveau"] .'</div>   
                                    <div class="h4">Ressources: ';
                                    while( $row1 = mysqli_fetch_assoc($tab1)){
                                        echo '<br>';
                                        echo $row1["quentite"]; echo " "; echo $row1["nom"];  echo " d'une qualité de ";echo $row1["qualite"]; echo "/100";echo " a été ajouté le ";echo $row1["time_ajout"];
                                        echo '<br>'; } echo '</div>  
                                    <div class="h4">Description: '. $row["Description"] . '</div>  
                                    <div class="h4">Nombre d\'organisateurs: '. $row["nb_org"] .'</div>   
                                    <div class="h4">Nom du Batiment: ' . $row["nom_bat"] . '</div>  
                                    <div class="h4">La Salle a été ajouté le: '. $row["time_ajout"] . '</div>  
                                </div>
                            </div>
                        </div>
                        ';
                }
            }
            if (isset($_SESSION["connecte"]) && $_SESSION["connecte"]){

                if ($_SESSION["role"]=='Pro'){

                        echo '
                            <div class="btnSalleDiv">
                                <a class="btnSalle" href="index.php?page=">Modifier</a>
                            </div>
                            <div class="btnSalleDiv">
                                <input type="hidden" name="action" value="sup-salle">
                                <input class="btnSalle" type = "submit"  value = "Supprimer">
                            </div>
                        ';
                }else{
                    echo '  
                    <div class="btnSalleDiv">
                        <a class="btnSalle" href="?page=calendrier&id_salle='.$_SESSION['id_salle'].'">resever</a>
                        <a class="btnSalle" href="index.php?page=ajout-ressource">ajouter des ressources</a>';
                    if(exist_org($_SESSION["id"][0],$_SESSION["id_salle"] )== 0){
                        echo '<input type="hidden" name="action" value="organisateur">
                        <input type="submit" class="btnSalle" value="Devevir Organisateur">';
                    }
                    else{
                        echo '<input type="hidden" name="action" value="Dimissioné">
                        <input type="submit" class="btnSalle" value="Dimissioné">';}
                        
                    echo '</div>
                    ';
                    }
            }else{
                        // alert("Connectez vous avant de reserver une salle.");
                    echo '  
                                <div class="btnSalleDiv">
                                    <a class="btnSalle" href="index.php?page=connexion">Se connecter pour reserver</a>
                                </div>
                            ';
                }
            ?>
        </div>
    </form>
    </fieldset>
</div>



<div class='containerBat'>
    <div class='cardHeaderBat'>
    <h2>batiment <?php echo '<nav>'. $_GET['Nom'] . '</nav> '; ?></h2>
    </div>
    <div class='cardBat'>
        <form action="." method="post">
            <div class=cardBodyBat>
                <div class="cardBodyLil">
                    <strong>Numero</strong>
                </div>
                <div class="cardBodyLil">
                    <strong>Capacite</strong>
                </div>
                <div class="cardBodyLil">
                    <strong>Niveau requis</strong>
                </div>
                <div class="cardBodyLil">
                    <strong>Date d'ajout</strong>
                </div>
                <?php 
            $tab = salles($_GET['Nom']);
            if ($tab == NULL){
                echo ' Il ya aucun batiment';
            } else{
                while( $row = mysqli_fetch_assoc($tab)){
                    echo' 
                    <a class="button" href ="index.php?page=salle&id_salle='.$row["id_salle"].'">
                        <div class="hajanotzayda">
                            <div class="cardBodyLil2">' . $row["numero"] . '</div> 
                            <div class="cardBodyLil2">'. $row["Capacité"] . '</div> 
                            <div class="cardBodyLil2">'. $row["niveau"] .'</div> 
                            <div class="cardBodyLil2">'. $row["time_ajout"] .'</div> 
                        </div>
                    </a>
                        ';
                }
            }
        ?>
                <div class="btnSalleDiv">
                <br>
        <div class="salasghira2 btnajoutsalle2">
            <?php
            $_SESSION['nb_salle'] = 1;
            ?>
            <br>
        <br>
            <a class="cnx-sub" href="index.php?page=ajout-salle">Ajouter</a>
        </div>
        <br><br>
        <br><br>
        <br>
        <br>
        <div class="salasghira2 btnajoutsalle2">
            <a class="cnx-sub" href="index.php?page=" >Modifier</a>
        </div>
        <br><br>
        <br>
        <li>
            
            <input class="btnSalle" type="hidden" name="action" value="sup_bat">
		    <input class="cnx-sub" style="width:120px;height:60px;" type = "submit"  value = "Supprimer">
	    </li> 
                    
                </div>
            </div>
        
    </div>
    </form>
</div>
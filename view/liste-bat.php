<div class='containerBat'>
    <div class='cardHeaderBat'>
        <h2>Mes Batiments</h2>
    </div>
    <div class='cardBat'>
        <form>
            <div class=cardBodyBat>
                <div class="cardBodyLil">
                    <strong>Nom</strong>
                </div>
                <div class="cardBodyLil">
                    <strong>Adresse</strong>
                </div>
                <div class="cardBodyLil">
                    <strong>Nembre de salle</strong>
                </div>
                <?php 
            $tab = batiments($_SESSION['id'][0]);
            if ($tab == NULL){
                echo ' Il ya aucun batiment';
            } else{
                while( $row = mysqli_fetch_assoc($tab)){
                    echo' 
                    <a class="button" href ="index.php?page=liste-salles&Nom='.$row["Nom"].'">
                        <div class="hajanotzayda">
                            <div class="cardBodyLil2">' . $row["Nom"] . '</div> 
                            <div class="cardBodyLil2">'. $row["adresse"] . '</div> 
                            <div class="cardBodyLil2">'. $row["nb_salle"] .'</div> 
                        </div>
                    </a>
                        ';
                }
            }
        ?>
                <div class="btnSalleDiv">
                    <a class="btnSalle" href="index.php?page=ajout-bat">+</a>
                </div>
            </div>
        </form>
    </div>
</div>
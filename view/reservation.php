<div class='containerBat'>
    <div class='cardHeaderBat'>
        <h2>Mes reservation</h2>
    </div>
    <div class='cardBat'>
        <form>
            <div class=cardBodyBat>

                <div class="cardBodyLil">
                    <strong>Numero</strong>
                </div>
                <div class="cardBodyLil">
                    <strong>Date</strong>
                </div>
                </div>
                <?php 
            $tab = affiche_reservation($_SESSION['id'][0]);
            if ($tab == NULL){
                echo ' Il ya aucun batiment';
            } else{
                while( $row = mysqli_fetch_assoc($tab)){
                    echo' 
                    <a class="button" href ="index.php?page=salle&id_salle='.$row["id_salle"].'">
                        <div class="hajanotzayda">
                            <div class="cardBodyLil2">'. $row["id_salle"] . '</div> 
                            <div class="cardBodyLil2">'. $row["date"] .'</div> 
                        </div>
                    </a>
                        ';
                }
            }
        ?>

            
        </form>
    </div>
</div>
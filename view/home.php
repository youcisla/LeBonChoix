


<form action="." method="post">
    <div class="container">
        <?php
                $tab = home();
                while( $row = mysqli_fetch_assoc($tab)){
                    echo '
                        <div class="card">
                            <a href ="?page=salle&id_salle='.$row["id_salle"].'">
                            <div class="card-header">
                                <span class="tag tag-teal">'. $row["nom_bat"] .'</span>
                                <img src="image/' . $row["photo"] . '" width = "50px" height = "50px" />
                            </div>
                            <div class="card-body">
                                <div class="hna">
                                    <h4>Salle N°: ' . $row["numero"] . '</h4> 
                                </div>
                                <div class="hna">
                                    <p class="pcard"> <a href="index.php?page=salle&id_salle=' . $row["id_salle"] . '">Plus</a> </p> 
                                </div>
                            </div>
                            </a>
                        </div>
                    ';
                }
            ?>
    </div>
</form>

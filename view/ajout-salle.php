<div class="containerCnx">
    <?php

for ($i = 1; $i <= $_SESSION['nb_salle']; $i++) {
    echo'
    <div class="cardCnx">
        <div  class="cardCnx-header">
        <h2> Formulaire Salle '.$i.' </h2>
        </div>
        <div class="cardCnx-body">
            <form action="index.php" method="post">
                <div class="cnxlabels">
                    <div class="labelss">
                        <label id="idcnx" for="idpseudocnx">Numero de la salle: :</label>
                    </div>
                    <div class="labelss">
                        <input type="text" id="idpseudocnx" class="cnx-control" name="num'.$i.'"
                            ">
                    </div>
                    <div class="labelss">
                        <label id="idcnx" for="idpseudocnx">Photos :</label>
                    </div>
                    <div class="labelss">
                        <input type="text" id="idpseudocnx" class="cnx-control" name="Photo'.$i.'
                            ">
                    </div>
                    <div class="labelss">
                        <label id="idcnx" for="idpseudocnx">Capacité :</label>
                    </div>
                    <div class="labelss">
                        <input type="text" id="idpseudocnx" class="cnx-control" name="Capacité'.$i.'"
                            ">
                    </div>
                    <div class="labelss">
                        <label id="idcnx" for="idpseudocnx">niveau:</label>
                    </div>
                    <div class="labelss">

                    <input class="inputtype cnx-control" type="RANGE" name="niveau'.$i.'" id="ins-mp" placeholder="Niveau..."
                        min="0" max="400" step="100" list="nv">
                    <datalist id="nv">
                        <option label="0%">0</option>
                        <option>100</option>
                        <option>200</option>
                        <option>300</option>
                        <option>400</option>
                    </datalist>
<br><br><br>
                    </div>
                    <div class="labelss">
                        <label id="idcnx" for="idpseudocnx">Description:</label>
                    </div>
                    <div class="labelss">
                        <input type="text" id="idpseudocnx" class="cnx-control" name="Description'.$i.'"
                            ">
                    </div>
                    <div class="labelss">
                        <label id="idcnx" for="idpseudocnx">nb_org:</label>
                    </div>
                    <div class="labelss">
                        <input type="text" id="idpseudocnx" class="cnx-control" name="nb_org'.$i.'""
                            ">
                    </div>

        

            ';
}


?>
<br><br><br>
<br>
    <form action="index.php" method="post">
        <div class="batsghir">
            <div  class="salasghira btnajoutsalle">
                <input type="hidden" name="action" value="Ajout_salle">
                <input  style="width:100px;background:#53e3a6;" type="submit" class="button" value="Ajouter">
            </div>
        </div>

            </form>
        </div>
    </div>
</div>
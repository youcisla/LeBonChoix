<fieldset class='batima'>
    <legend class='titleliste'>
        <h2>Ajouter un batiment</h2>
    </legend>
    <form action="." method="post">
        <div class="batdiv">
            
            <div class="batsghir">
                <div class="salasghira btnajoutsalle">
                    <label>Nom :</label>
                </div>
                <div class="salasghira btnajoutsalle">
                    <input type="text" name="Nom" class="cnx-control">
                </div><br><br>
            </div>
            <div class="batsghir">
                <div class="salasghira btnajoutsalle">
                    <label>Adresse :</label>
                </div>
                <div class="salasghira btnajoutsalle">
                    <input type="text" name="adresse" class="cnx-control">
                </div><br><br>
            </div>
            <div class="batsghir">
                <div class="salasghira btnajoutsalle">
                    <label>Nombre de salle :</label>
                </div>
                <div class="salasghira btnajoutsalle">
                    <input type="number" name="nb_salle" class="cnx-control">
                </div><br><br>
            </div>
            <div class="batsghir">
                <div class="salasghira btnajoutsalle">
                <input type="hidden" name="action" value="ajouter-bat">
                    <input type="submit" value="Ajouter" class="cnx-sub2">
                </div>
            </div>
        </div>
    </form>
</fieldset>
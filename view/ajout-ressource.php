<fieldset class='batima'>
    <legend class='titleliste'>
        <h2>Ajouter ressource</h2>
    </legend>
    <form action="." method="post">
        <div class="batdiv">

            <div class="batsghir">

                <div class="salasghira btnajoutsalle">
                    <label>Ressource :</label>
                </div>
                <br><br>
                <div class="salasghira btnajoutsalle">
                    <input class=" cnx-control" type="text" name="Ressource" placeholder="Ressource...">
                </div><br><br>
                </br>

            </div>
            <div class="batsghir">
                <div class="salasghira btnajoutsalle">
                    <label>Quentité:</label>
                </div>
                <br><br>
                <div class="salasghira btnajoutsalle">
                    <input type="number" name="quentite" class="cnx-control" placeholder="Quentité...">
                </div><br><br>
            </div>
            <div class="batsghir">
                <div class="salasghira btnajoutsalle">
                    <label>Qualité :</label>
                </div>
                <br><br>
                <div class="salasghira btnajoutsalle">
                    <input class="inputtype cnx-control" type="RANGE" name="qualite" 
                        placeholder="Niveau..." min="0" max="100" step="50" list="qal">
                    <datalist id="qal">
                        <option label="0%">0</option>
                        <option>50</option>
                        <option>100</option>
                    </datalist>
                </div><br><br>
            </div>
            <div class="batsghir">
                <div class="salasghira btnajoutsalle">

                    <input type="hidden" name="action" value="ajout_ressource">
                    <input type="submit" value="Ajouter" class="cnx-sub2"></br>
                </div>
            </div>
        </div>
    </form>
</fieldset>
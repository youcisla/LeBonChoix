<fieldset>
<h2>Modifier compte</h2>
<p>Veuillez saisir tous les champs</p>

<form action = "." method = "post">
<input type="hidden" name="action" value="modifier-pro">
    <label for="idinsuser">Pseudo :</label>
    <input type ="text" name="user" class="cnx-control" id="idinsuser" placeholder="Pseudo...">
    <label for="ins-email">Email :</label>
    <input type = "email" name="email" class="cnx-control" id="ins-email" placeholder="Email...">
    <label for="idinsuser">Nom de l'entreprise :</label>
    <input type ="text" name="entreprise" class="cnx-control" id="ins-entr" placeholder="Nom de l'entreprise...">
    <label for="idinsuser">Adresse de l'entreprise :</label>
    <input type ="text" name="adresse" class="cnx-control" id="inst-adr" placeholder="Adressee de l'entreprise...">
    <br>
    <label for="idinsuser">Numero de telephone :</label>
    <input type ="tel" name="numero" class="cnx-control" id="ins-num" placeholder="Numero de l'entreprise...">
    <label for="ins-mp">Mot de passe :</label>
    <input type = "password" name="mdp" class="cnx-control" id="ins-mp" placeholder="Mot de passe...">
    <br>
    <input type = "submit" class="button" value = "Modifier">
</form>
</fieldset>
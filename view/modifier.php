<fieldset>
    <legend class='titleliste'>
        <h2>Modifier compte</h2>
        <p>Veuillez saisir tous les champs</p>
    </legend>
    <form action="." method="post">
        <input type="hidden" name="action" value="modifier">
        <p>Pseudo :</p>
        <input type="text" name="user" placeholder="Changer votre pseudo">
        <p>Email :</p>
        <input type="email" name="email" placeholder="Changer votre mail">
        <p>Mot de passe :</p>
        <input type="password" name="mdp" placeholder="Changer votre mdp">
        <br>
        <input type="submit" class="cnx-sub" value="Modifier">
    </form>
</fieldset>
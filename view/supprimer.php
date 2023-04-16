<?php


if (isset($_SESSION['loggedin'])) {
    if ($_SESSION['loggedin'] == true) {
        echo "Supprimer mon compte";
    }
}
//var_dump($_SESSION);
echo "<h2>Supprimer mon compte</h2>";
if (isset($_SESSION['connecte'])) {
    if ($_SESSION['connecte'] == true) {
        echo "<p>Appuier sur supprimer pour supprimer votre compte : ";

        echo "<a class='button' href=\"index.php?id=" . $_SESSION["id"][0] . "\">Delete</a></p>";
    }
}

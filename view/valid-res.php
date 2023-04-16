<fieldset class='batima2'>
    <legend class='titleliste'>
        <h2>   Salle <?php echo '<nav>'. $_SESSION['id_salle'] . '</nav> '; ?></h2>
    </legend>
    <form action="." method="post">
    
        <table class=tab>
            <tr>
                <td class=tab>
                    <li>
                        <div class='card3'><strong>id</strong></div>
                    </li>
                </td>
                <td class=tab>
                    <li>
                        <div class='card3'><strong>photo</strong></div>
                    </li>
                </td>
                <td class=tab>
                    <li>
                        <div class='card3'><strong>Capacite</strong></div>
                    </li>
                </td>
                <td class=tab>
                    <li>
                        <div class='card3'><strong>Niveau requis</strong></div>
                    </li>
                </td>
            </tr>
			<?php


            $tab = salle($_SESSION['id_salle']);
            if ($tab == NULL){
                echo ' Il ya aucun batiment';
            } else{
                while( $row = mysqli_fetch_assoc($tab)){
		
                    echo'
                        <tr>
                            <td class=tab> 
                                <li>' . $_SESSION['date_reservation'] . ' </li> 
                            </td>
                            <td class=tab> 
                                <li><img src = "data:image/jpg;base64,' . ($row['photo']) . '" width = "50px" height = "50px"/></li>
                            </td>
                            <td class=tab>
                                <li> '. $row["Capacité"] . ' </li> 
                            </td>
                            <td class=tab>
                                <li>'. $row["niveau"] .'</li> 
                            </td>
            
                        <tr>
                        ';
                }
            }

            ?>
            </table>
            <br><br>

            <p> Voulez vous reserver cette salle entre</p> <script> valeur.value</script>

			<br><br>
            <input type="hidden" name="action" value="reserver">
        <input type="submit" class="cnx-sub button" value="OUI">
		<br>
		<br>
		<a href="index.php?page=calendrier" class="cnx-sub button" >NON</a>
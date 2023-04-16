<?php

?>


<table id="recap">
    <tr>
        <td style="background:#FF8888;width:15px;height:15px;"></td>
        <td>Reservé</td>
    </tr>
    <tr>
        <td style="background:#88FF88;width:15px;height:15px;"></td>
        <td>Disponible</td>
    </tr>
</table>



<table style="border:1px solid black;border-collapse:collapse;box-shadow: 10px 10px 5px #888888;">
    <caption style="font-size:18px;"><a style="color:black;margin:20px;"href="?page=calendrier&id_salle=198&annee=<?php echo $annee-1; ?>"
            style="font-size:50%;vertical-align:middle;text-decoration:none;"><?php echo $annee-1; ?></a>
        <?php echo $annee; ?> <a style="color:black;margin:20px;" href="?page=calendrier&id_salle=198&annee=<?php echo $annee+1; ?>"
            style="font-size:50%;vertical-align:middle;text-decoration:none;"><?php echo $annee+1; ?></a></caption>
    <tr style="border-right:1px solid black;">
        <th style="<?php echo $StyleTh; ?>background:#FF33A7">Janvier</th>
        <th style="<?php echo $StyleTh; ?>background:#FF33A7">Février</th>
        <th style="<?php echo $StyleTh; ?>background:#FF33A7">Mars</th>
        <th style="<?php echo $StyleTh; ?>background:#FF33A7">Avril</th>
        <th style="<?php echo $StyleTh; ?>background:#FF33A7">Mai</th>
        <th style="<?php echo $StyleTh; ?>background:#FF33A7">Juin</th>
        <th style="<?php echo $StyleTh; ?>background:#FF33A7">Juillet</th>
        <th style="<?php echo $StyleTh; ?>background:#FF33A7">Août</th>
        <th style="<?php echo $StyleTh; ?>background:#FF33A7">Septembre</th>
        <th style="<?php echo $StyleTh; ?>background:#FF33A7">Octobre</th>
        <th style="<?php echo $StyleTh; ?>background:#FF33A7">Novembre</th>
        <th style="<?php echo $StyleTh; ?>background:#FF33A7">Décembre</th>
    </tr>
    <tr>

        <?php
		for($mois=1;$mois<=12;$mois++) {
			for($jour=1;$jour<=$NbrDeJour[$mois];$jour++){
				if($jour==1){
					echo '<td style="vertical-align:top;border-right:1px solid black;">
							<center><table style="width:100%;border-collapse:collapse;">';
							$Jr=$PremierJourDuMois[$mois];
				}
			$JourReserve=0;
			$date = $annee."-".$mois."-".$jour ;
			if(exist_date($date,$_SESSION['id_salle'],$_SESSION['id'][0])>0)$JourReserve=1;
			?>
    <tr>

        <td
            style="<?php echo ($JourReserve==1) &&  $_SESSION['id_salle']==rech_res($annee."-".$mois."-".$jour,$_SESSION['id_salle'],$_SESSION['id'][0]) ? "background:#FF8888;":"background:#88FF88;"; ?>border-bottom:1px solid #eee;">
            <?php echo $jours[$Jr];?></td>
            
        <td
            style="<?php echo ($JourReserve==1) &&  $$_SESSION['id_salle']==rech_res($annee."-".$mois."-".$jour,$_SESSION['id_salle'],$_SESSION['id'][0]) ? "background:#FF8888;" : "background:#88FF88;"; ?>border-bottom:1px solid #eee;width:20%;">
            <?php echo $jour; ?></td>
        <?php 
				if($Jr>5){
					$Jr=0;
				} else {
					$Jr++;
				} ?>
        <td
            style="<?php echo ($JourReserve==1) &&  $_SESSION['id_salle']==rech_res($annee."-".$mois."-".$jour,$_SESSION['id_salle'],$_SESSION['id'][0])?"background:#FF8888;":"background:#88FF88;"; ?>border-bottom:1px solid #eee;">
            <a
                href="?jour=<?php echo $jour; ?>&amp;mois=<?php echo $mois; ?>&amp;annee=<?php echo $annee; ?>&amp;choix=<?php echo (($JourReserve==1) &&  $_SESSION['id_salle']==rech_res($annee."-".$mois."-".$jour,$_SESSION['id_salle'],$_SESSION['id'][0]))?0:1; ?>"><img
                    src="<?php echo ($JourReserve==1) &&  $_SESSION['id_salle']==rech_res($annee."-".$mois."-".$jour,$_SESSION['id_salle'],$_SESSION['id'][0]) ?"image/1.png":"image/0.png";?>" alt="Action" style="width:13px;"
                    title="<?php echo ($JourReserve==1) &&  $_SESSION['id_salle']==rech_res($annee."-".$mois."-".$jour,$_SESSION['id_salle'],$_SESSION['id'][0])?"Réservé":"Disponible"; ?>" /></a>
        </td>
    </tr>
    <?php
				if($jour==$NbrDeJour[$mois]){
					echo '</table></center>
						</td>';
				}
			}
		}
		?>
    </tr>

</table>
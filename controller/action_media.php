<?php 

//formulaire d'ajout de batiment

if (isset($_POST["action"]) && $_POST["action"] == "ajouter-bat") {
   if ((isset($_POST['Nom']) && $_POST['Nom'] != "") || (isset($_POST['adresse']) && $_POST['adresse'] != "") || (isset($_POST['nb_salle']) && $_POST['nb_salle'] != "")) {

      if (!existe_bat($_POST['Nom'])) {
         if($_POST['Nom']<=0){
            $_SESSION['Nom'] = 1;
         }else{
            $_SESSION['Nom'] = $_POST['Nom'];
            creer_bat($_POST['Nom'], $_POST['adresse'], $_SESSION['Nom'], $_SESSION['id'][0]);
            $_SESSION['nb_salle']=$_POST['nb_salle'];}
            if ($_SESSION['nb_salle']>0){

            header("Location: ./?page=ajout-salle");
            }else{
            header("Location: ./?page=liste-bat");
            echo 'vous avez creer un batiment';}

         }else{
            echo 'Batiment existe deja';
         } 
      }else {
            echo "info incorrect";
      }
   }
   



//formulaire de suppression de bat

if (isset($_POST["action"]) && $_POST["action"] == "sup_bat") {

   $nom = $_SESSION['Nom'];
   supp_bat($nom);
}

//formulaire de ajout de ressource

if (isset($_POST["action"]) && $_POST["action"] == "ajout_ressource") {
   ajout_ressources($_POST['Ressource'],$_POST['quentite'],$_POST['qualite'],$_SESSION['id'][0],$_SESSION['id_salle']);
   $_SESSION['Ressources'] = $_POST['Ressource'];
   $salle = $_SESSION["id_salle"];
   if($_POST['qualite']<50) {
      ajout_pts ($_SESSION['id'][0],$_SESSION['point'],20);
      $_SESSION['point'] = recup_pts($_SESSION['id'][0]);
      header("Location: ./?page=salle&id_salle=$salle");
}
   else if($_POST['qualite']==50) {
      ajout_pts ($_SESSION['id'][0],$_SESSION['point'],30);
      $_SESSION['point'] = recup_pts($_SESSION['id'][0]);
      header("Location: ./?page=salle&id_salle=$salle");
}
   else  if($_POST['qualite']==100){
      ajout_pts ($_SESSION['id'][0],$_SESSION['point'],50);
      $_SESSION['point'] = recup_pts($_SESSION['id'][0]);
      header("Location: ./?page=salle&id_salle=$salle");
}
}


// formulaire de recherche
if (isset($_POST["action"]) && ( $_POST["action"] == "rech")) {
      $recherche = isset($_POST['recherche']) ? $_POST['recherche'] : '';
      header("location:./?page=rechercher&id_salle=".$recherche);
   }



//formulaire d'ajout de salles

if (isset($_POST["action"]) && $_POST["action"] == "Ajout_salle") {
   // if ((isset($_POST['num']) && $_POST['num'] != "") &&  (isset($_POST['Photo']) && $_POST['Photo'] != "") && (isset($_POST['Capacité']) && $_POST['Capacité'] != "")  && (isset($_POST['niveau']) && $_POST['niveau'] != "") && (isset($_POST['Description']) && $_POST['Description'] != "")) {
      // if (isset($_SESSION['id'][0])) {
      //    $id = $_SESSION['id'][0];
      // }
      for ($i = 1; $i <= $_SESSION['nb_salle']; $i++) {
      // if (!existe_salle($_POST['num']), $_GET['nom_bat'])) {
         creer_salle($_POST["num$i"],$_POST["Photo$i"] ,$_POST["Capacité$i"] ,$_POST["niveau$i"] ,$_POST["Description$i"] ,$_POST["nb_org$i"] ,$_SESSION['Nom']);
         ajout_nb_salle($_SESSION['Nom']);
      }
         // var_dump($_SESSION['nb_salle']);
         // if ($_SESSION['nb_salle']>0){
         //    while ($_SESSION['nb_salle'] > 0) {
               // header("Location: ./?page=ajout-salle");
               // $_SESSION['nb_salle']--;
               // var_dump($_SESSION['nb_salle']);
            // }
         // }else{
            $_SESSION['id_salle'] = $_GET['id_salle'];
            // $_SESSION['id_salle'] = $_GET['id_salle'];
            header("Location: ./?page=liste-bat");
         // }
      // }else{
      //    echo 'Salle existe deja';
         // } 
   // }else {
         // echo "info incorrect";
         // header("Location: ./?page=ajout-bat");
      // }
   
   }

//formulaire de suppression de sal

if (isset($_POST["action"]) && $_POST["action"] == "sup-salle") {

   $id = $_SESSION['id_salle']; // $id is now defined
   supp_salle ($id);
   dim_nb_salle($_SESSION['Nom']);
   // echo "<p>votre bat a été supprimé.</p>";s
}


//formulaire devenir organisateur de sal

if (isset($_POST["action"]) && $_POST["action"] == "organisateur") {
   if (exist_org($_SESSION['id'][0],$_SESSION['id_salle'])==0){
      $nb_org=recup_nb_org ($_SESSION['id_salle']);
      if ($nb_org!=0){
         organisateur($_SESSION['id'][0],$_SESSION['id_salle']);
         down_nb_org($_SESSION['id_salle'],$nb_org);
         ajout_pts ($_SESSION['id'][0],$_SESSION['point'],60);
         $_SESSION['point'] = recup_pts($_SESSION['id'][0]);
         echo "<script>alert(\"Vous etes devenu organisateur de cette salle.\")</script>";
      }else{
         echo "<script>alert(\"Il y a aucunne place pour vous.\")</script>";}
   }else{
      
      echo "<script>alert(\"Vous etes deja organisateur de cette salle.\")</script>";
   }
}

//formulaire pour dimissioné

if (isset($_POST["action"]) && $_POST["action"] == "Dimissioné") {
      $nb_org=recup_nb_org ($_SESSION['id_salle']);
      dimissione($_SESSION['id'][0],$_SESSION['id_salle']);
      up_nb_org($_SESSION['id_salle'],$nb_org);
      ajout_pts ($_SESSION['id'][0],$_SESSION['point'],-100);
      $_SESSION['point'] = recup_pts($_SESSION['id'][0]);
      echo "<script>alert(\"Vous avez dimissioné.\")</script>";
}

//formulaire de reservation de salle
$jours = array(1=>"Lundi",2=>"Mardi",3=>"Mercredi",4=>"Jeudi",5=>"Vendredi",6=>"Samedi",0=>"Dimanche");
if(isset($_GET['annee']) AND preg_match("#^[0-9]{4}$#",$_GET['annee'])){//si on souhaite afficher une autre année, on l'affiche si elle est correcte
    $annee=$_GET['annee'];
} else {
    $annee=date("Y");//si non, on affiche l'année actuelle
}
$NbrDeJour=[];
for($mois=1;$mois<=12;$mois++) {
    $NbrDeJour[$mois]=date("t",mktime(1,1,1,$mois,2,$annee));
    $PremierJourDuMois[$mois]=date("w",mktime(5,1,1,$mois,1,$annee));
}


	if(
	isset($_GET['jour']) AND preg_match("#^[0-9]{1,2}$#",$_GET['jour']) AND
	isset($_GET['mois']) AND preg_match("#^[0-9]{1,2}$#",$_GET['mois']) AND
	isset($_GET['choix']) AND preg_match("#^(0|1)$#",$_GET['choix'])) {
		$date= $annee."-".$_GET['mois']."-".$_GET['jour'];
      if($_GET['choix']==1){
         if($date>=date("Y-m-d")){
            if(recup_pts($_SESSION['id'][0]) >= recup_niveau($_SESSION['id_salle'])){
			      reserver( $date, $_SESSION['id_salle'],$_SESSION['id'][0]);
               echo "<script>alert(\"Jour mise en reserve avec succès !.\")</script>";
               }
            else{
               echo "<script>alert(\"  Ameliorer votre niveau !.\")</script>";
            }}
         else{
               echo "<script>alert(\"Choisissez une bonne date.\")</script>";
         }}
		else if($_GET['choix']==0){
		   if(supp_res($date,$_SESSION['id_salle'])) {
				echo "Journée mise en \"disponible\" avec succès !";
			} 
		}
   }

$StyleTh="text-shadow: 1px 1px 1px #000;color:white;width:75px;border-right:1px solid black;border-bottom:1px solid black;";
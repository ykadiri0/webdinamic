<?php
$l=$_GET['Nom'];
$l1=$_GET['Prenom'];
$l2=$_GET['photo'];
$l3=$_GET['NCIN'];
$l4=$_GET['N_de_DRPP'];
$l5=$_GET['Date_de_recrutement'];
$l6=$_GET['Telephone'];
$l7=$_GET['Email'];
$l8=$_GET['Date_Naissance'];
$l9=$_GET['Specialite'];
$l10=$_GET['Professeur_app_ensa'];

$l11=$_GET['Structure_de_recherche'];
$l12=$_GET['Directeur_de_la_structure_de_recherche'];
$l13=$_GET['Dossier_scientifique[]'];
$l14=$_GET['Dossier_Pedagogique[]'];
$l15=$_GET['Dossier_administratif[]'];

$conn = mysqli_connect("localhost", "root", "", "laravel");
$result = mysqli_query($conn, "INSERT INTO `personnelles`(`id`, `Nom`, `Prenom`, `Photo`, `NCIN`, `N_de_DRPP`, `Date_de_recrutement`, `Telephone`, `Email`, `Date_Naissance`, `Professeur_app_ensa`, `Specialite`, `Structure_de_recherche`, `Directeur_de_la_structure_de_recherche`, `Dossier_scientifique`, `Dossier_Pedagogique`, `Dossier_administratif`, `created_at`, `updated_at`) VALUES (null,'.$l.','.$l1.','.$l2.','.$l3.','.$l4.','.$l5.',.$l6.,'.$l7.','.$l8.','.$l9.','.$l10.','.$l11.','.$l12.','.$l13.','$l14.','$l15.',null,null)");
?>
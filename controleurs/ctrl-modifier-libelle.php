<?php
require('../sources/config.php');
?>
<?php
$reponse = $connection->query("SELECT * FROM `demander` WHERE Conseiller = '".$_POST['idConseiller']."' ");
$message= $reponse->fetchall();

for($i=0 ; $i<strlen($_POST['libelle']); $i++){
	if($_POST['libelle'][$i] == "'"){
		$_POST['libelle'][$i] = " ";
	}
}
?>

<!-- confirmation de la modification du contact et direction dans la fiche du contact-->
<!DOCTYPE html>
<html>
  <head>
    <title>Airvibes</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    
  <!-- Head of your page -->
<link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@500&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/axentix@2.2.0/dist/axentix.min.css">
    <link href="../styles/styles.css" rel="stylesheet" media="all" type="text/css">
</head>


<body>
  <div class="content" > 
<h3>Modification bien prise en compte</h3>
</div>
<br>
<br>
<br>
<h3>
<form method="POST" action="../vues/vue-message.php">    
    <input type="hidden" name="conseiller" value="<?php echo $_POST['idConseiller'] ?>">
    <input type="submit" value="Revenir a la fiche du contact du prescripteur">
</form>
</h3>
</body>
</html>
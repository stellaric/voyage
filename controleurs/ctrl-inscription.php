<?php
include('../sources/config.php');

   //Récupération du résultat des checkbox dans des variable sous forme de 1 ou 0
   if(isset($_POST['genre']) == False){
    $genre = 0;
  }else{
    $genre = 1;
  }

$requete ="INSERT INTO Visiteur VALUES (
    '".$_POST['nom']."',
 '".$_POST['prenom']."',
    '".$_POST['age']."',
    '".$genre."',
    '".$_POST['adressePostale']."',
    '".$_POST['codePostale']."',
    '".$_POST['emailVisiteur']."',
    '".$_POST['mdpVisiteur']."
    )";

    if ($connexion->query($requete) === TRUE) {
        echo "New record created successfully";
    }

//On verifie si le nom, le prénom et la date de naissance sont bien entrés
if($_POST['nom'] != "" AND $_POST['prenom'] != "" ){

 
  for($i=0 ; $i<strlen($_POST['nom']); $i++){
    if($_POST['nom'][$i] == "'"){
      $_POST['nom'][$i] = " ";
    }
  }

  for($i=0 ; $i<strlen($_POST['prenom']); $i++){
    if($_POST['prenom'][$i] == "'"){
      $_POST['prenom'][$i] = " ";
    }
  }

  for($i=0 ; $i<strlen($_POST['adressePostale']); $i++){
    if($_POST['adressePostale'][$i] == "'"){
      $_POST['adressePostale'][$i] = " ";
    }
  }


}
?>


<!DOCTYPE html>
<html>
<head>
  <link href="../styles/styles.css" rel="stylesheet" type="text/css">
  
  <meta charset="utf-8">
    <title>AirVibes</title>
</head>
<body>
  <div class="content" > 
<h3>commencer</h3>
</div>
<br>
<br>
<br>

<form method="POST" action="../vues/vue-ca.php">    
    <input type="hidden" name="idVisiteur" value="<?php echo $visiteur ?>">
    <input type="submit" value="Revenir a la liste des profils"  >
</form>


</body>
</html>
<?php
require('../sources/config.php');
?>
<!--formulaire authentification php -->
<?php
session_start();
$reponse = $connexion->query('SELECT * FROM Visiteur');
$visiteurs = $reponse->fetchall();

if (isset($_POST['emailVisiteur']) && isset($_POST['mdpVisiteur'])) {
    $emailVisiteur = htmlspecialchars($_POST['emailVisiteur']);
    $mdpVisiteur = htmlspecialchars($_POST['mdpVisiteur']);

 #vérifier si l'email et mdp de l'utilisateur est correcte si elle est correcte , 
#elle renvoie à la vue conseille et astuce

for ($i=0;$i< count($visiteurs);$i++){
    if ($emailVisiteur == $visiteurs[$i]['emailVisiteur']){
        if ($mdpVisiteur == $visiteurs[$i]['mdpVisiteur']){
            session_start();
            $_SESSION['idVisiteur'] = $visiteurs[$i]['idVisiteur'];
            $_SESSION['nom'] = $visiteurs[$i]['nom'];
            $_SESSION['prenom'] = $visiteurs[$i]['prenom'];
            header('Location:../vues/vue-ca.php');
            exit;
        }
    }
}

//si l'email et mdp est incorrecte, elle renvoie à la page de connexion 
    for ($i=0; $i <count($visiteurs);$i++){
        if ($emailVisiteur != $visiteurs[$i]['emailVisiteur'] && $mdpVisiteur != $visiteurs[$i]['mdpVisiteur']){
        header('Location:../vues/vue-connexion.php?login_err=already');
        }
    }
}
else{
    //var_dump($utilisateurs);
    header('Location:../vues/vue-connexion.php?login_err=already');
  }
?>
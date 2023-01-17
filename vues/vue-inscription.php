<?php
session_start();
include('../sources/config.php');

$reponse = $connexion->query("SELECT idVisiteur from `Visiteur`");
$visiteur =$reponse->fetchAll();
?>

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


<body class="layout-under-navbar">
    
 
    <!-- Barre de Menu Horizontale-->
<header>
  <div class="navbar-fixed">
      <nav class="navbar shadow-2 white">
        <a href="#" target="_blank" class="navbar-brand text-amaranth dark-4 navbar-logo navbar-centered">Airvibes</a> 
          <div class="navbar-menu ml-auto">
          <a class="navbar-link text-red light-2" href="../index.php" > Accueil</a>
          <a class="navbar-link text-red light-2" href="vue-connexion.php" > Connexion</a>
        
      </nav>
  </div>
</header>
</div>
<!--  -->  

 
<main>

<div class="container mt-5" style="padding-right:203px;">
    <div class="card glassmorphism text-white mx-auto shadow-2">
        <div class="card-header text-center"><h4>Inscription</h4></div>
    </div>
    
  <div class="grix xs2 sm2">
    <div class="card white light-shadow-2 p-3 rounded-2 ">
              <form class="form-material" role="form" method="POST" action="../controleurs/ctrl-inscription.php">
       <div>
            <h3 class="text-amaranth text-center ">Identité</h3>

                  <div class="form-field">
                 <input type="text" id="nom" class="form-control " required default=null />
                <label for="nom">Nom</label>
                 </div>

                 <div class="form-field">
                 <input type="text" id="prenom" class="form-control " required  default=null />
                <label for="prenom">Prénom</label>
                 </div>

                 <div class="form-field">
                 <input type="integer" id="age" class="form-control " required default=null/>
                <label for="age">Age</label>
                 </div>

                  <h3 class="text-amaranth text-center ">Genre</h3>

                 <div class="form-field form-inline">
                  <label class="form-check">
                   <input type="radio" name="genre" />
                    <span>Homme</span>
                    </label>
                  <label class="form-check ml-2">
                  <input type="radio" name="genre"   />
                   <span>Femme</span>
                        </label>
                 </div>

                 <h3 class="text-amaranth text-center ">Lieu</h3>

                 <div class="form-field">
                 <input type="text" id="adressePostale" class="form-control " required default=null/>
                <label for="adressePostale">Adresse</label>
                 </div>

                 <div class="form-field">
                 <input type="integer" id="codePostale" class="form-control " required default=null />
                <label for="codePostale">Code Postale</label>
                 </div>
             


          </div>
     </div>

<div class="card white light-shadow-2 p-3 rounded-2 ">
            <div class="pos-sm2 form-material">
                 <h3 class="text-amaranth text-center " >Inscription</h3>
                 <div class="form-field">
                 <input type="text" id="emailVisiteur" class="form-control " pattern="/^[\w-\.]+@([\w-]+\.)+[\w-]{2,4}$/g" required default=null/>
                <label for="emailVisiteur">Email</label>
                 </div>

                 <div class="form-field">
                 <input type="password" id="mdpVisiteur" class="form-control " required default=null/>
                <label for="mdpVisiteur">Mot de passe </label>
                 </div>

                 <br>

                 <button class="btn rounded-1 blue btn-press btn-right" type="submit">S'inscrire</button>
                 <button class="btn rounded-1 red btn-press btn-right" type="reset">Annuler</button>
            </div>



              </form>

      </div>
         
</div>

</div>


      
</main>

   







  <div class="fab" id="fab-example" data-ax="fab">

<!-- Here is the fab-trigger -->
<button class="btn shadow-1 btn-circle btn-large text-white red light-2" data-target="fab-example">
 +
</button>

<!-- Here is the fab-menu -->
<div class="fab-menu">

<form action="vue-qsn.php" method="post">
    <button  type="submit" class="btn shadow-1 btn-circle red light-2 text-white fab-item mb-3" >
    ?
    </button>
</form>

<form action="../old/index-old.php" method="post">
  <button class="btn shadow-1 btn-circle text-white red light-2 fab-item mb-3">
   <\>
  </button>
</form>

</div>
</div>






<footer class="footer shadow-5 white">
 <p class="text-center text-red light-2">   Copyright © 2022 - Example </p>
  </footer>
  <script src="https://cdn.jsdelivr.net/npm/axentix@2.2.0/dist/axentix.min.js"></script>
  <script src="https://code.iconify.design/3/3.0.0/iconify.min.js"></script>

</body>
</html>
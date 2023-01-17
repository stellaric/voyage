<?php
include('../sources/config.php');
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
          <a class="navbar-link text-red light-2" href="vue-inscription.php" > Inscription</a>
        
      </nav>
  </div>
</header>
</div>
<!--  -->  

 
<main>

<div class="container mt-5" style="padding-right:203px;">
    <div class="card glassmorphism text-white mx-auto shadow-2">
    <div class="card-header text-center"><h4>Connexion</h4>
  </div>
            <div class="card-content">  </div> 


            </div>
            <div class="card white light-shadow-2 p-3 rounded-2 ">
 <?php     
   if (isset($_GET['login_err']))
   {
       $err= htmlspecialchars($_GET['login_err']);
       switch($err)
       {
           case'mdpVisiteur':
            ?>
             <div class="p-3 my-2 rounded-1 red light-4 text-red text-dark-4">
                                <strong>Erreur</strong> Mot de passe incorrect
                            </div>
                            <?php
                        break;

             case 'emailVisiteur':
                        ?>
            <div class="p-3 my-2 rounded-1 red light-4 text-red text-dark-4">
                  <strong>Erreur</strong> Login incorrect
                     </div>
                    <?php
                     break;

                 case 'already':
                    ?>
                    <div class="d-inline-flex red light-3 py-2  rounded-3" id="closable"  >
                    <strong>Erreur</strong> <br>Identifiant ou Mot de passe  incorrects                  
  <div data-close="closable">
    <span class='iconify-inline text-red text-dark-5 font-s3 ml-2' data-icon='mdi:close-circle'></span>
  </div>

                                </div>
                            <?php
                            break;
       }
   }
   ?>


            <form class="form-material" method="post" action="../controleurs/ctrl-connexion.php">
              <div class="grix xs1 sm2" style="padding-left: 30%;" >
                <div class="form-field ">
                  <label for="emailVisiteur" class="text-white">Email</label>
                  <input type="text" name="emailVisiteur" class="form-control" placeholder="Pseudo" required="required" autocomplete="off">
                </div>
                <br>
                <div class="form-field">
                  <label for="mdpVisiteur" class="text-white">Mot de passe </label>
                  <input type="password" name="mdpVisiteur" class="form-control" placeholder="Mot de passe" required="required" autocomplete="off">
                
              <button type="submit" class="btn rounded-1 btn-press secondary mx-auto mt-4 pos-xs2 ">Connexion</button>
              </div>
              </div>

            </form>
           

            
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
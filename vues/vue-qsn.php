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

          <div class="dropdown" id="menubar" data-ax="dropdown">
          <a class="navbar-link text-red light-2" href="vue-connexion.php" data-target="menubar" > Plus</a>
          <div class="dropdown-content dropdown-right white shadow-1 ">
    <a class="dropdown-item " href="#">Connexion</a>
    <a class="dropdown-item " href="#">Inscription</a>
  </div>
           
          </div>
      </nav>
  </div>
</header>
  <!--  -->  




  
</div>



 
<main>

<div class="container mt-5" style="padding-right:203px;">
    <div class="card glassmorphism text-white mx-auto shadow-2">
        <div class="card-header text-center">Qui sommes nous ?</div>
            <div class="card-content">
              <div class="grix xs1 sm2"></div>
            <h4>Airvibes , c'est quoi ? </h4>
            <p>Airvibes est un site spécialisé dans le domaine du tourisme et qui proposes des destinations idéales à bas prix .</p>
               Ce site n'est qu'un simple exemple et cette organisation n'existe pas  <br>

                <h4>Notre équipe</h4>
            <p>Notre équipe est composé de personne .Ceci est une simple démo  </p>
            <br>
                <h4>Où nous trouver ?</h4>
                <p>Vous pouvez nous trouver nulle part . Ceci est une simple démo</p>

                <h4>Nos réseaux</h4>
                <button class="btn btn-circle red light-2 shadow-1">
                <span class="iconify-inline font-s8" data-icon="mdi:github" style="color: white;"></span>
</button>
<button class="btn btn-circle red light-2 shadow-1">
                <span class="iconify-inline font-s8" data-icon="mdi:email" style="color: white;"></span>
</button>

<button class="btn btn-circle red light-2 shadow-1">
                <span class="iconify-inline font-s8" data-icon="mdi:instagram" style="color: white;"></span>
</button>

<button class="btn btn-circle red light-2 shadow-1">
                <span class="iconify-inline font-s8" data-icon="bxl:wix" style="color: white;"></span>
</button>

<br>
                <h4>Ressources utilisées </h4>
                <button class="btn shadow-1 white rounded-4 text-red light-3" >
                <a href="../note.txt" download="ressources_airvibes">Télécharger les ressources utilisés </a>
                </button>

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
<?php 
require('vues/en-tete.php')
?>

<body class="layout-under-navbar">




    <!-- Barre de Menu Horizontale-->
<header>
  <div class="navbar-fixed">
      <nav class="navbar shadow-2 white">
        <a href="#" target="_blank" class="navbar-brand text-amaranth dark-4 navbar-logo navbar-centered">Airvibes</a> 
          <div class="navbar-menu ml-auto">
         
          <a class="navbar-link text-red light-2" href="vues/vue-connexion.php" > Connexion</a>
          <a class="navbar-link text-red light-2" href="vues/vue-inscription.php" > Inscription</a>
           
          </div>
      </nav>
  </div>
</header>
  <!--  -->

  <!-- ______________________Main_____________________________ --> 

 <main>

<div class="container mt-5" style="padding-right:203px;">
    <div class="card glassmorphism text-white mx-auto shadow-2">
    <div class="card-header text-center">Bienvenue !</div>
            <div class="card-content">
              <div class="grix xs1 sm2"></div>
 </div>
            <video src="images/Airvibes.mp4" controls loop autoplay muted>test</video>
    </div>
</div>
      
</main>

 <!-- ___________________________________________________ --> 
<!-- MAIN -->

<script src="js/app.js"></script>
<?php 
require('vues/footer.php')
?>
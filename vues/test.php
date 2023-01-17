<?php
include('../sources/config.php');
?>
<?php 
//$atelier = $reponse ->fetch();
//var_dump($atelier);

$reponse = $connexion->query("SELECT * FROM Voyage");
$reponse1 = $connexion->query("SELECT * FROM Conseiller");
$reponse2 = $connexion->query("SELECT * from Article WHERE idArticle='1'");
{
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
        <a href="#" target="_blank" class="navbar-brand text-amaranth dark-4 navbar-logo navbar-centered"><h1>TEST</h1></a> 
        <div class="navbar-menu ml-auto">
          <a href="../vues/vue-profil.php" class="navbar-link text-red light-2" > Profil</a>
        <a href="../vues/vue-message.php" class="navbar-link text-red light-2" > Message</a>
        <a href="../controleurs/ctrl-deconnexion.php" class="navbar-link text-red light-2" > Déconnexion</a>
           
          </div>
        
      </nav>
  </div>
</header>

<!--  -->  

<!-- Sidenav-->
<div id="example-sidenav" data-ax="sidenav" class="sidenav shadow-1 sidenav-fixed glassmorphism text-white">
      <div class="sidenav-header">

   
      <img src=https://xsgames.co/randomusers/avatar.php?g=male alt="Grover Fermaint" width="50" height="50" class="rounded-2 mr-2">
              
 
        <p>Menu</p>
      </div>
      <a href="#offre" class="sidenav-link ">test</a>
      <a href="#conseil" class="sidenav-link">Conseil</a>
      <a href="#astuce" class="sidenav-link">Astuce</a>
      <a href="#info" class="sidenav-link">Information</a>
    </div>




 
<main>
  

<div class="container mt-5" style="padding-right:203px;">
    <div class="card glassmorphism text-white mx-auto shadow-2">
    <div class="card-header text-center" id="offre"> <h1 class="text-center text-white" >Offre de la semaine </h1></div>
     
    </div>


     <!-- Tableau -->
     
     <div class="card white light-shadow-2 p-3 rounded-2 ">
  <div class="table-responsive">
    <table class="table">
      <thead class="text-amaranth">
        <tr>
          
          <th>Voyage</th>
          <th>Durée</th>
          <th>Prix</th>
         
        </tr>
      </thead>
      <?php while ($voyage = $reponse ->fetch()){?>  
      <tbody>
        <tr>   
          <td>
        <?php echo $voyage["nomVoyage"] ?>  
        </td>
        <td>
          <?php echo $voyage["libelle"] ?> 
      </td>
      <td>
          <?php echo $voyage["prix"] ?> 
          
      </td>
        
    <?php } ?>
   
    </tr>
      </tbody>
    </table>
  </div>
</div>  

<br>
    <div class="card glassmorphism text-white mx-auto shadow-2">
    <div class="card-header text-center" id="conseil"> <h1 class="text-center text-white" >Conseil </h1></div>
     
    </div>

 <!-- Tableau conseiller -->
 <div class="card white light-shadow-2 p-3 rounded-2 ">
  <div class="table-responsive">
    <table class="table">
      <thead class="text-amaranth">
        <tr>
          
          <th>Nom</th>
          <th>Prénom</th>
         
        </tr>
      </thead>
      <?php while ($conseiller = $reponse1 ->fetch()){?>  
      <tbody>
        <tr>   
          <td>
        <?php echo $conseiller["nom"] ?>  
        </td>
        <td>
          <?php echo $conseiller["prenom"] ?> 
      </td>
  
        
    <?php } ?>
   
    </tr>
      </tbody>
    </table>
  </div>
</div>  


    <br>
    <div class="card glassmorphism text-white mx-auto shadow-2">
    <div class="card-header text-center" id="astuce"> <h1 class="text-center text-white" >Astuce </h1></div>
      </div>

 <!-- Astuce -->
 
 <?php while ($article = $reponse2 ->fetch()){?>  
 <div class="card white light-shadow-2 p-3 rounded-2">
  
  <div class="card-header text-center text-amaranth" > <?php echo $article["titre"] ?>  </div>

  <div class="card-content">
    <p>
    <?php echo $article["libelle"] ?>  
      </p>
  </div>

  <div class="card-footer text-right"> <?php echo $article["date"] ?> <br>
 
</div>
</div>

<?php } ?>


<div class="card white light-shadow-2 p-3 rounded-2">
<a href="../vues/vue-article.php" class="navbar-link text-amaranth text-center light-2" >Voir plus d'astuces >> </a>
</div>


    <br>
    <div class="card glassmorphism text-white mx-auto shadow-2">
    <div class="card-header text-center" id="info"> <h1 class="text-center text-white" >Information</h1></div>
     
    </div>

    <div class="card glassmorphism text-white light-shadow-2 p-3 rounded-2">
  
  <div class="card-header text-center text-amaranth"> <?php echo $article["titre"] ?>  </div>

  <div class="card-content">
    <p>testttststst</p>
  </div>

  <div class="card-footer "> test </div>
</div>





</div>

</main>

  


<footer class="footer shadow-5 white">
<p class="text-center text-red light-2">   Copyright © 2022 - AirVibes </p>
</footer>
<script src="https://cdn.jsdelivr.net/npm/axentix@2.2.0/dist/axentix.min.js"></script>
<script src="https://code.iconify.design/3/3.0.0/iconify.min.js"></script>

</body>
</html>
<?php
}
?>
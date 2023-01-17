<?php
include('../sources/config.php');
?>
<?php 
//$atelier = $reponse ->fetch();
//var_dump($atelier);

$reponse = $connexion->query("SELECT nom , prenom , demande , libelle  FROM demander inner join Conseiller on demander.idConseiller = Conseiller.idConseiller");

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
        <a href="vue-ca.php"  class="navbar-brand text-amaranth dark-4 navbar-logo navbar-centered">Airvibes</a> 
        <div class="navbar-menu ml-auto">
        <a href="../vues/vue-ca.php" class="navbar-link text-red light-2" > Accueil</a>
          <a href="../vues/vue-profil.php" class="navbar-link text-red light-2" > Profil</a>
        <a href="../vues/vue-message.php" class="navbar-link text-red light-2" > Message</a>
        <a href="../controleurs/ctrl-deconnexion.php" class="navbar-link text-red light-2" > Déconnexion</a>
           
          </div>
        
      </nav>
  </div>
</header>

<!--  -->  


  
  <main>
 
  <div class="container mt-5" style="padding-right:203px;">
        <div class="card glassmorphism text-white mx-auto shadow-2">
            <div class="card-header text-center" id="offre"> <h1 class="text-center text-white" >Message </h1>
            </div>
        </div> 

    <br>
    <!-- Tableau -->
    <div class="card white light-shadow-2 p-3 rounded-2 ">
  <div class="table-responsive">
    <table class="table">
      <thead class="text-amaranth">
        <tr>
          
          <th>Conseiller</th>
          <th>Demande</th>
          <th>Libelle</th>
         <th></th>
        </tr>
      </thead>
      <?php while ($message = $reponse ->fetch()){?>  
      <tbody>
        <tr>   
          <td>
        <?php echo $message["nom"] ?> <?php echo $message["prenom"]  ?>
        </td>
        <td>

        <div class="p-2 rounded-4 font-s1 font-w600 green light-4 text-green text-dark-4 d-inline-block">
        <?php if ($message["demande"] == 0){
             echo "Demande non Envoyé";}
             else if ($message["demande"] == 1){
    ?>
            </div>

            <div class="p-2 rounded-4 font-s1 font-w600 blue light-4 text-blue text-dark-3 d-inline-block">
            <?php
             
                echo "Demande Envoyé";
            } ?> 
            </div>
        

      </td>
      <td>
          <?php echo $message["libelle"] ?> 
          
      </td>
        
      <td>
        <form action="../controleurs/ctrl-modifier-libelle.php" >
      <button type="submit" class="btn shadow-1 btn-circle text-amaranth dark-4"><span class="iconify-inline" data-icon="mdi:edit"></span></button>
        </form>
      </td>
    <?php } ?>
   
    </tr>
      </tbody>
    </table>
  </div>
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
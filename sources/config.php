<?php
try {
  $dbName = 'airvibes';
  $host = 'localhost';
  $utilisateur = 'admin_airvibes';
  $motDePasse = 'azerty';
  $port='3306';
  $dns = 'mysql:host='.$host .';dbname='.$dbName.';port='.$port;
  $connexion = new PDO( $dns, $utilisateur, $motDePasse );
} catch ( Exception $e ) { ?>
<?php
  echo "Connexion à la BDD impossible : ", $e->getMessage();
 
}
?>
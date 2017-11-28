<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>parcoursback</title>
    <link rel="stylesheet" href="assets/css/carousel.css">
  </head>
  <body class="villesPhp">
      <?php include('nav.php'); ?>
<h1>Les villes</h1>

<div class="contenu">
<?php
// connection à la base de donnée
require_once 'connection.php';

$reponse = $bdd->query('SELECT DISTINCT `villes` FROM parcours ');

while($donnees = $reponse->fetch())
{
  echo "
  <div id='villes'><a href='".$donnees['villes'].".php'>" . $donnees["villes"]."</a></div>";
};
 ?>
</div>
<!-- <footer id="footer"></footer> -->
</body>
</html>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>parcoursback</title>
    <link rel="stylesheet" href="assets/css/carousel.css">
  </head>
  <body class="themesPhp">
      <?php include('nav.php'); ?>
<h1>Les thèmatiques</h1>
<div class="contenu">
<?php
// connection à la base de donnée
require_once 'connection.php';

$reponse = $bdd->query('SELECT DISTINCT `thematique` FROM parcours ');

while($donnees = $reponse->fetch())
{
  echo "
  <div id='villes'><a href='".$donnees['thematique'].".php'>" . $donnees["thematique"]."</a></div>";
};
 ?>
</div>
<!-- <footer id="footer"></footer> -->
</body>
</html>

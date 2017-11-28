<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>parcoursback</title>
    <link rel="stylesheet" href="assets/css/carousel.css">
  </head>
  <body class="parcoursPhp">
  <?php include('nav.php'); ?>
    <h1>Les Parcours</h1>

    <div class="contenu">
    <?php
    // connection à la base de donnée
    require_once 'connection.php';

    $reponse = $bdd->query('SELECT * FROM parcours');

    while($donnees = $reponse->fetch())
    {
      echo "<div id='parcours'>
      <div class='title'><h1>" . $donnees["titre"]."</h1></div>"." "."<div class='text'><p>" . $donnees["texte"]."</p></div>
      </div>";
    };
     ?>
    </div>
    <!-- <footer id="footer"></footer> -->
  </body>
</html>

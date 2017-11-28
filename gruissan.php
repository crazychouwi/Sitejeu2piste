<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>parcours gruissan</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" type="image/gif" href="assets/img/hiboufavicon.gif" />
    <link rel="stylesheet" href="assets/css/carousel.css">
  </head>
  <body class="gruissanPhp">
    <?php include('nav.php'); ?>
    <div class="enteteAccueil">
    <h1 class="accueil">Jeu m'instruit</h1>
    <div class="logo">
      <a href="#"><span>Si vous avez besoin d'aide, demandez moi!</span><img src="assets/img/hibou.gif" width="100px"alt="logo">
      </a>
      </div>
    </div>
    <div class="contenu">
    <?php
    // connection à la base de donnée
    require_once 'connection.php';

    $reponse = $bdd->query('SELECT * FROM parcours WHERE villes = "gruissan" ');

    while($donnees = $reponse->fetch())
    {
      echo "<div id='parcours'>
      <div class='title'><h1>" . $donnees["titre"]."</h1></div>"." "."<div class='text'><p>" . $donnees["texte"]."</p></div>
      </div>";
    };
     ?>
    </div>

  </body>
</html>

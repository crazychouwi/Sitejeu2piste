<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>parcoursback</title>
    <link rel="stylesheet" href="assets/css/carousel.css">
  </head>
  <body>
    
    <div class="menuDeroulant">
    <nav>
      <label for="menu-mobile" class="menu-mobile">Menu</label>
      <input type="checkbox" id="menu-mobile" role="button">
      <ul>
        <li class="menu-accueil"><a href="index.html">Accueil</a></li>
        <li class="menu-parcours"><a href="parcours.php">Parcours</a></li>
        <li class="menu-villes"><a href="villes.php">Villes</a>
          <ul class="submenu">
            <li><a href="#">Gruissan</a></li>
            <li><a href="#">Narbonne</a></li>
            <li><a href="#">Narbonne-Plage</a></li>
          </ul>
        </li>
        <li class="menu-theme"><a href="themes.php">Thématiques</a>
          <ul class="submenu">
            <li><a href="#">Gastronomie</a></li>
            <li><a href="#">Histoire</a></li>
            <li><a href="#">Nature</a></li>
            <li><a href="#">Vin</a></li>
          </ul>
        </li>
        <li class="menu-partenaire"><a href="partenaires.php">Partenaires</a>
          <ul class="submenu">
            <li><a href="#">Campéole</a></li>
            <li><a href="#">Chez Pierrot</a></li>
            <li><a href="#">Le Département</a></li>
            <li><a href="#">Narbonne mon patrimoine</a></li>
          </ul>
        </li>
        <li class="menu-contact"><a href="contact.html">Contact</a></li>
      </ul>
    </nav>
    </div>
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
  </body>
</html>

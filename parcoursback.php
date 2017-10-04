<?php
session_start();

if ($_SESSION['admin'] == "ok"){
  ?>

  <!DOCTYPE html>
  <html>
    <head>
      <meta charset="utf-8">
      <title>parcoursback</title>
      <link rel="stylesheet" href="assets/css/carousel.css">
    </head>
    <body>
      <div class="enteteAdmin">
        <form class="" action="index.html" method="post">
          <input  type="submit" name="bouton" value="Deconnexion">
        </form>
      </div>
      <h1>page admin!</h1>
      <p>penser a inserer la session_destroy</p>
      <div class="contenu">
      <?php
      // connection à la base de donnée
      require_once 'connection.php';

      $reponse = $bdd->query('SELECT * FROM parcours');

      while($donnees = $reponse->fetch())
      {
        echo "<div id='parcours'>
        <div class='title'><h1>" . $donnees["titre"]."</h1></div>"." "."<div class='text'><p>" . $donnees["texte"]."</p><div><button>Modifier</button><button>Supprimer</button></div></div>
        </div>";
      };
       ?>
      </div>
      <footer id="footer"></footer>
    </body>
  </html>

<?php
}
?>

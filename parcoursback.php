<?php
session_start();

if ($_SESSION['admin'] == "ok"){
  ?>

  <!DOCTYPE html>
  <html>
    <head>
      <meta charset="utf-8">
      <title>parcoursback</title>
    </head>
    <body>
      <h1>page admin!</h1>
      <p>
        faire un bouton de deconnexion qui renvoit sur la page d'accueil </br>
        penser a inserer la session_destroy
      </p>
    </body>
  </html>

<?php
}
?>

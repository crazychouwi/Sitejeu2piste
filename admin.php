<?php
session_start();
//session_destroy();
?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>login</title>
    <link rel="stylesheet" href="assets/css/carousel.css">

  </head>
  <body>
    <?php
    require_once 'connection.php';
    ?>
    <div class="form">
    <div class="login">
    <h1>Login</h1>
    <form class="formulaire" action="traitement.php" method="post">
    <p><label for="pseudo">Pseudo :</label><input type="text" name="pseudo" value="" id="pseudo" placeholder="pseudo" autofocus></p>
    <p><label for="pwd">Password :</label><input type="password" name="password" value="" id="pwd" placeholder="mot de passe"></p>
    <p class="valider"><input  type="submit" name="bouton" value="Valider"></p>
    </form>
    </div>
  </div>
  <?php
  $req = $bdd->query('SELECT*FROM users');
  $user = $req->fetch();
  // var_dump($user);
   ?>
  </body>
</html>

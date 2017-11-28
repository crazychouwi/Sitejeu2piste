<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>parcoursback</title>
    <link rel="stylesheet" href="assets/css/carousel.css">
    <link rel="stylesheet" href="assets/css/contact.css">
  </head>
  <body class="contactHtml">
      <?php include('nav.php'); ?>
      <div class="mail">
        <form class="champs" action="envoi.php" method="post">
          <fieldset>
            <legend>Contact</legend>
            <div class="champs">
              <label for="nom"></label>
              <input type="text" id="nom" name="user_name" placeholder="Nom" autofocus/>
            </div>
            <div class="champs">
              <label for="courriel"></label>
              <input type="email" id="courriel" name="user_email" placeholder="e-mail" required/>
            </div>
          </fieldset>
          <fieldset>
            <legend>Laisser un message</legend>
            <div class="champs">
              <label for="message"></label>
              <textarea id="message" name="user_message" placeholder="Votre message"></textarea>
            </div>
            <div class="button">
              <button type="submit" name="envoi">Envoyer votre message</button>
            </div>
          </fieldset>
        </form>
      </div>
  <div id="formContact">
  <h1>Des mots des livres et vous...</h1>
  <div class="infos">
  <div style="width:40%">
    <p>vous accueille du Lundi au Vendredi de 9h à 17h,
      3 Place Salengro, à coté de la MJC de Narbonne.
    </p>
  </div>
  <div class="icon">
      <a href=""><img src="assets/img/icon-tel.png" style="width:100px" alt=""></a>
      <a href="#"><img src="assets/img/icon-mail.png" style="width:100px" alt=""></a>
  </div>
  </div>
  </div>
</body>
</html>

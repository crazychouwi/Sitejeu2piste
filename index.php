<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Jeu m'instruit</title>
    <!-- le viewport sert a faire une mise a l'échelle de ma page web afin qu'elle s'adpate a la taille de l'ecran du visiteur -->

    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" type="image/gif" href="assets/img/hiboufavicon.gif" />
    <link rel="stylesheet" href="assets/css/carousel.css">
  </head>
  <body class="pageAccueil">
      <div class="enteteAccueil">
      <h1 class="accueil">Jeu m'instruit</h1>
      <div class="logo">
        <a href="#"><span>Si vous avez besoin d'aide, demandez moi!</span><img src="assets/img/hibou.gif" width="100px"alt="logo">
        </a>
        </div>
      </div>
    <div class="bande"></div>
    <?php include('nav.php'); ?>
  <div class="carousel">
    <div class="content-all">
      <div class="content-carrousel">
        <figure><img src="assets/img/img1.jpg" alt=""></figure>
        <figure><img src="assets/img/img2.jpg" alt=""></figure>
        <figure><img src="assets/img/img3.jpg" alt=""></figure>
        <figure><img src="assets/img/img4.jpg" alt=""></figure>
        <figure><img src="assets/img/img5.jpg" alt=""></figure>
        <figure><img src="assets/img/img6.jpg" alt=""></figure>
        <figure><img src="assets/img/img7.jpg" alt=""></figure>
        <figure><img src="assets/img/img8.jpg" alt=""></figure>
        <figure><img src="assets/img/img9.jpg" alt=""></figure>
        <figure><img src="assets/img/img10.jpg" alt=""></figure>
      </div>
    </div>
  </div>
  <div class="titre">
    <h1>Bonne visite sur notre site !</h1>
  </div>
  <div id="footer">
    <div class="admin"><a href="admin.php">admin</a></div>
  </div>
  </body>
</html>

<?php
session_start();

// connection à la base de donnée
require_once 'connection.php';

// on recupere les données du formulaire
$pseudo = $_POST['pseudo'];
$pwd = $_POST['password'];

// je crypte le password en input avant de l'envoyer en base
// $hash = password_hash($pwd, PASSWORD_DEFAULT);

//requete pour recuperer les elements en base
$req = $bdd->query('SELECT * FROM users WHERE username="'.$pseudo.'"');
// fetch permet de traduire l'objet en tableau associatif
$reponse = $req->fetch();
//stock les données recuperer dans le fetch dans une variable
$username_bdd = $reponse['username'];
$passwd_bdd = $reponse['password'];

// password_verify pour decrypter le mot de passe en bdd et permettre de comparer l'input
if (password_verify($_POST['password'], $passwd_bdd)) {
  $_SESSION['admin'] = "ok";
  header('location:http://localhost/Sitejeu2piste/parcoursback.php');
} else {
    header('location:http://localhost/Sitejeu2piste/admin.php');
}

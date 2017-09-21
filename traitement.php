<?php
session_start();

// connection à la base de donnée
require_once 'connection.php';

// on recupere les données du formulaire
$pseudo = $_POST['pseudo'];
$pwd = $_POST['password'];


$req = $bdd->query('SELECT*FROM users');
$user = $req->fetch();

// on recupere les données de la table
$db_username = $user['username'];
$db_password = $user['password'];

if (($pseudo==$db_username) && ($pwd==$db_password)) {
  $_SESSION['admin'] = "ok";
  header('location:http://localhost/Sitejeu2piste/parcoursback.php');
}
else {
  header('location:http://localhost/Sitejeu2piste/admin.php');
}

<?php
session_start();

$id = $_POST['id'];
$user = "root";
$password = "0000";
$bdd = new PDO("mysql:host=localhost;dbname=siteLuca;charset=utf8", $user, $password);
$request = $bdd->prepare("SELECT * FROM text WHERE projet like :id");
$request->bindParam(':id', $id);
$request->execute();
$txtProjet = $request->fetchall(PDO::FETCH_ASSOC);
$_SESSION['txtProjet'] = $txtProjet;

$bdd = new PDO("mysql:host=localhost;dbname=siteLuca;charset=utf8", $user, $password);
$request = $bdd->prepare("SELECT * FROM image WHERE projet like :id");
$request->bindParam(':id', $id);
$request->execute();
$imgProjet = $request->fetchall(PDO::FETCH_ASSOC);
$_SESSION['imgProjet'] = $imgProjet;

$bdd = new PDO("mysql:host=localhost;dbname=siteLuca;charset=utf8", $user, $password);
$request = $bdd->prepare("SELECT * FROM projets WHERE id like :id");
$request->bindParam(':id', $id);
$request->execute();
$nameProjet = $request->fetchall(PDO::FETCH_ASSOC);
$_SESSION['nameProjet'] = $nameProjet;

header("Location: ../project.php");
die;

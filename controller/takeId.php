<?php
session_start();
if (isset($_POST['id'])) {
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
    
    header("Location: ../project.php");
    die;
}else{
    header("Location: ../");
    die;
}

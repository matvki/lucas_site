<?php
$user = "root";
$password = "0000";
$bdd = new PDO("mysql:host=localhost;dbname=siteLuca;charset=utf8", $user, $password);
$request = $bdd->prepare('SELECT * FROM projets');
$request->execute();
$projects = $request->fetchall(PDO::FETCH_ASSOC);
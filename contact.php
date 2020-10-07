<?php session_start();
$_SESSION["nightMode"] = $_SESSION["nightMode"];
$_SESSION["language"] = $_SESSION["language"]; ?>
<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <title>Mon portfolio - Contact</title>
    <link rel="stylesheet" href="./css/header.css">
    <link rel="stylesheet" href="./css/style.css">
    <link rel="stylesheet" href="./css/contact.css">
    <link rel="icon" type="image/png" href="./img/logo.png" />
    <link href="https://fonts.googleapis.com/css2?family=Lora:ital,wght@1,400;1,600;1,700&display=swap" rel="stylesheet">
</head>

<body id="box" class="<?php if ($_SESSION["nightMode"] == "night") {
                            echo "moon";
                        } else {
                            echo "day";
                        } ?>">
    <?php include_once './templates/header.php'; ?>
    <main>
        <h1>Me contacter</h1>
        <p>Je suis en réflexion/réalisation de cet partie du site, mais je reste a votre disposition a l'adresse e-mail suivante : ltevissen@gmail.com</p>
        <p>I am in reflection / realization of this part of the site, but I remain at your disposal at the following e-mail address : ltevissen@gmail.com</p>
    </main>
    <script src="./js/language.js"></script>
    <script src="./js/nightMode.js"></script>
    <script src="./js/script.js"></script>
    <script src="./js/scroll.js"></script>
</body>

</html>
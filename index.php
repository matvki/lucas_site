<?php session_start();
$_SESSION["nightMode"] = $_SESSION["nightMode"];
$_SESSION["language"] = $_SESSION["language"]; ?>

<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <title>Mon portfolio - Design Graphique</title>
    <link rel="stylesheet" href="./css/header.css">
    <link rel="stylesheet" href="./css/style.css">
    <link href="https://fonts.googleapis.com/css2?family=Lora:ital,wght@1,400;1,600;1,700&display=swap" rel="stylesheet">
</head>

<body id="box" class="<?php if ($_SESSION["nightMode"] == "night") {
                            echo "moon";
                        } else {
                            echo "day";
                        } ?>">
    <?php include_once './templates/header.php'; ?>
    <main>
        <div id="boxF" class="box <?php if ($_SESSION["language"] == "english") {
                                        echo "language";
                                    } ?>">
            <?php foreach ($projects as $key => $value) { ?>
                <form action="./controller/takeId.php" method="POST">
                    <div class="pic" id="<?= $value['class'] ?>">
                        <input type="hidden" name="id" value="<?= $value['id'] ?>">
                        <button class="pic" type="submit"><img src="./img/<?= $value['picture'] ?>" alt="<?= $value['name'] ?>"></button>
                        <div class="square">
                            <h1><?= $value['name'] ?></h1>
                        </div>
                    </div>
                </form>
            <?php } ?>
        </div>
        <div id="boxE" class="box <?php if ($_SESSION["language"] != "english") {
                                        echo "language";
                                    } ?>">
            <?php foreach ($projects as $key => $value) { ?>
                <form action="./controller/takeId.php" method="POST">
                    <div class="pic" id="<?= $value['class'] ?>">
                        <input type="hidden" name="id" value="<?= $value['id'] ?>">
                        <button class="pic" type="submit"><img src="./img/<?= $value['picture'] ?>" alt="<?= $value['nameE'] ?>"></button>
                        <div class="square">
                            <h1><?= $value['nameE'] ?></h1>
                        </div>
                    </div>
                </form>
            <?php } ?>
        </div>

    </main>
    <script src="./js/language.js"></script>
    <script src="./js/nightMode.js"></script>
    <script src="./js/script.js"></script>
    <script src="./js/scroll.js"></script>
</body>

</html>
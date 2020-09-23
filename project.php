<?php
session_start();
// var_dump($_SESSION)
?>
<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="./css/header.css">
    <link rel="stylesheet" href="./css/style.css">
    <link rel="stylesheet" href="./css/projet.css">
    <link href="https://fonts.googleapis.com/css2?family=Lora:ital,wght@1,400;1,600;1,700&display=swap" rel="stylesheet">
    <title>Mon portfolio - Projet</title>
</head>

<body  id="box" class="sun">
    <?php include_once './templates/header.php'; ?>
    <?php
    if ($_SESSION['nameProjet'][0]['name'] == "Branding Mellifère") {  ?>
        <main id="boxF" >
            <section class="flex">
                <article class="flex">
                    <h1><?= $_SESSION['nameProjet'][0]['name'] ?></h1>
                    <p><?= $_SESSION['txtProjet'][0]['text'] ?></p>
                </article>
                <article class="img flex">
                    <?php $i = count($_SESSION['imgProjet']);
                    $j = 0; 
                    while ($i != 0) { ?>
                        <div><img src="./img/<?= $_SESSION['imgProjet'][$j]['name'] ?>" alt="<?= $_SESSION['imgProjet'][$j]['name'] ?>"></div>
                    <?php
                        $i = $i - 1;
                        $j = $j + 1;
                    } ?>
                </article>
            </section>
        </main>
        <main id="boxE" class="language">
            <section class="flex">
                <article class="flex">
                    <h1><?= $_SESSION['nameProjet'][0]['nameE'] ?></h1>
                    <p><?= $_SESSION['txtProjet'][0]['textE'] ?></p>
                </article>
                <article class="img flex">
                    <?php $i = count($_SESSION['imgProjet']);
                    $j = 0;
                    while ($i != 0) { ?>
                        <div><img src="./img/<?= $_SESSION['imgProjet'][$j]['name'] ?>" alt="<?= $_SESSION['imgProjet'][$j]['name'] ?>"></div>
                    <?php
                        $i = $i - 1;
                        $j = $j + 1;
                    } ?>
                </article>
            </section>
        </main>
    <?php    } else { ?>
        <main id="boxF">
            <section class="flex">
                <article class="flex">
                    <h1><?= $_SESSION['nameProjet'][0]['name'] ?></h1>
                    <p><?= $_SESSION['txtProjet'][0]['text'] ?></p>
                </article>
                <article class="img flex">
                    <?php $i = count($_SESSION['imgProjet']);
                    $j = 0;
                    while ($i != 0) { ?>
                        <div><img src="./img/<?= $_SESSION['imgProjet'][$j]['name'] ?>" alt="<?= $_SESSION['imgProjet'][$j]['name'] ?>"></div>
                    <?php
                        $i = $i - 1;
                        $j = $j + 1;
                    } ?>
                </article>
            </section>
        </main>
        <main id="boxE" class="language">
            <section class="flex">
                <article class="flex">
                    <h1><?= $_SESSION['nameProjet'][0]['nameE'] ?></h1>
                    <p><?= $_SESSION['txtProjet'][0]['textE'] ?></p>
                </article>
                <article class="img flex">
                    <?php $i = count($_SESSION['imgProjet']);
                    $j = 0;
                    while ($i != 0) { ?>
                        <div><img src="./img/<?= $_SESSION['imgProjet'][$j]['name'] ?>" alt="<?= $_SESSION['imgProjet'][$j]['name'] ?>"></div>
                    <?php
                        $i = $i - 1;
                        $j = $j + 1;
                    } ?>
                </article>
            </section>
        </main>
    <?php    }    ?>

<?php  ?>
    <script src="./js/language.js"></script>
    <script src="./js/nightMode.js"></script>
    <script src="./js/script.js"></script>
    <script src="./js/scroll.js"></script>
</body>

</html>
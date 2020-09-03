<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Mon portfolio - Design Graphique</title>
    <link rel="stylesheet" href="./css/style.css">
</head>

<body>
    <?php include_once './templates/header.php'; ?>
    <main>
        <div id="box" class="sun">
            <?php foreach ($projects as $key => $value) { ?>
                <div class="pic" id="<?= $value['class'] ?>">
                    <img src="./img/<?= $value['picture'] ?>" alt="<?= $value['name'] ?>">
                    <div class="square">
                        <h1><?= $value['name'] ?></h1>
                    </div>
                </div>
            <?php } ?>
        </div>

    </main>
    <script src="./js/language.js"></script>
    <script src="./js/nightMode.js"></script>
    <script src="./js/script.js"></script>
    <script src="./js/scroll.js"></script>
</body>

</html>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Mon portfolio - Design Graphique</title>
    <link rel="stylesheet" href="./css/style.css">
</head>

<body>
    <header>
        <div id="headband">
            <div id="txt">
                <img src="./img/logo-tevissen-7.png" alt="">
                <h1 id="day">Bonjour !</h1>
                <p id="lulu">Je suis étudiant en troisième année de Design Graphique. Passionné, je ne demande qu’à partager. <br>La création, l’art, les nouvelles technologies et l’innovation.</p>
                <p>Langue</p>
                <div id="language">
                    <p>FR</p>
                    <label class="switch">
                        <input type="checkbox">
                        <span class="slider round"></span>
                    </label>
                    <p>EN</p>
                </div>
            </div>

        </div>
    </header>
    <main>
        <?php include_once './controller/projetsCaller.php';
        foreach ($projects as $key => $value) { ?>
            <div class="pic">
                <img src="./img/<?= $value['picture'] ?>" alt="<?= $value['name'] ?>">
                <div class="square">
                    <h1><?= $value['name'] ?></h1>
                </div>
            </div>
        <?php } ?>
    </main>
    <script src="https://cdn.jsdelivr.net/npm/darkmode-js@1.5.6/lib/darkmode-js.min.js"></script>
    <script src="./js/nightMode.js"></script>
    <script src="./js/scroll.js"></script>
</body>

</html>
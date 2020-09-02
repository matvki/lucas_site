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
                <h1>Lucas <br> Tevissen</h1>
                <div id="boxA">
                    <?php include_once './controller/projetsCaller.php';
                    foreach ($projects as $key => $value) { ?>
                        <p><a class="<?= $value['class'] ?>" href="#<?= $value['class'] ?>"><?php echo ucfirst($value['name']) ?></a></p>
                    <?php } ?>
                </div>
                <div id="nm">
                    <div class="form" id="formDay">
                        <h2 id="day">Bonjour !</h2>
                    </div>
                    <div class="form" id="formNight">
                        <h2 id="night">Bonsoir !</h2>
                    </div>
                </div>
                <p id="lulu">Je suis étudiant en troisième année de Design Graphique. Passionné par l'art, le design et les nouvelles technologies je ne demande qu’à partager!</p>
                <p class="title">Langue</p>
                <div id="language">
                    <p>FR</p>
                    <label id="switchL" class="switch">
                        <input type="checkbox" >
                        <span class="slider round"></span>
                    </label>
                    <p>EN</p>
                </div>
                <p class="title">Mode nuit</p>
                <div id="nightMode">
                    <img class="logo" src="./img/soleil.png" alt="sun">
                    <label class="switch">
                        <input id="inputN" type="checkbox" name="night">
                        <span class="slider round"></span>
                    </label>
                    <img class="logo" src="./img/lune.png" alt="moon">
                </div>
            </div>

        </div>
    </header>
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
    <script src="./js/nightMode.js"></script>
    <script src="./js/script.js"></script>
    <script src="./js/scroll.js"></script>
</body>

</html>
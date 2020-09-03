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
                    <div class="form " id="formDay">
                        <h2 id="dayF" class="day">Bonjour !</h2>
                        <h2 id="dayE" class="day language">Hello !</h2>
                    </div>
                    <div class="form display" id="formNight">
                        <h2 id="nightF" class="night">Bonsoir !</h2>
                        <h2 id="nightE" class="night language">Good Evening !</h2>
                    </div>
                </div>
                <p id="luluF" class="lulu">Je suis étudiant en troisième année de Design Graphique. Passionné par l'art, le design et les nouvelles technologies je ne demande qu’à partager!</p>
                <p id="luluE" class="lulu language">I am a third year Graphic Design student. Passionate about art, design and new technologies, I only ask to share!</p>
                <p id="titleF" class="title">Langue</p>
                <p id="titleE" class="title language">Language</p>
                <div id="language">
                    <p>FR</p>
                    <label id="switchL" class="switch">
                        <input id="inputL" type="checkbox" name="language">
                        <span class="slider round"></span>
                    </label>
                    <p>EN</p>
                </div>
                <p id="titleNMF" class="title">Mode nuit</p>
                <p id="titleNME" class="title language">Night Mode</p>
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
    <script src="./js/language.js"></script>
    <script src="./js/nightMode.js"></script>
    <script src="./js/script.js"></script>
    <script src="./js/scroll.js"></script>
</body>

</html>
<header>
    <div id="headband">
        <div id="txt">
            <div id="boxLogo">
                <a href="./"><img id="logo" src="./img/logoLucas.png" alt=""></a>
            </div>
            <div id="proF" class="boxA <?php if ($_SESSION["language"] == "english") {
                    echo "language";
                } ?>">
                <?php include_once './controller/projetsCaller.php';
                foreach ($projects as $key => $value) { ?>
                    <form class="flex" action="./controller/takeId.php" method="POST">
                        <input type="hidden" name="id" value="<?= $value['id'] ?>">
                        <button type="submit">
                            <p><?php echo ucfirst($value['name']) ?></p>
                        </button>
                    </form>
                <?php } ?>
            </div>
            <div id="proE" class="boxA <?php if ($_SESSION["language"] != "english") {
                    echo "language";
                } ?>">
                <?php include_once './controller/projetsCaller.php';
                foreach ($projects as $key => $value) { ?>
                    <form action="./controller/takeId.php" method="POST">
                        <input type="hidden" name="id" value="<?= $value['id'] ?>">
                        <button type="submit">
                            <p><?php echo ucfirst($value['nameE']) ?></p>
                        </button>
                    </form>
                <?php } ?>
            </div>
            <div id="nm">
                <div class="form <?php if ($_SESSION["nightMode"] == "night") {
                    echo "display";
                } ?>" id="formDay">
                    <h2 id="dayF" class="day <?php if ($_SESSION["language"] == "english") {
                    echo "language";
                } ?>">Bonjour !</h2>
                    <h2 id="dayE" class="day <?php if ($_SESSION["language"] != "english") {
                    echo "language";
                } ?>">Hello !</h2>
                </div>
                <div class="form <?php if ($_SESSION["nightMode"] != "night") {
                    echo "display";
                } ?>" id="formNight">
                    <h2 id="nightF" class="night <?php if ($_SESSION["language"] == "english") {
                    echo "language";
                } ?>">Bonsoir !</h2>
                    <h2 id="nightE" class="night <?php if ($_SESSION["language"] != "english") {
                    echo "language";
                } ?>">Good Evening !</h2>
                </div>
            </div>
            <p id="luluF" class="lulu <?php if ($_SESSION["language"] == "english") {
                    echo "language";
                } ?>">Je suis étudiant en troisième année de Design Graphique. Passionné par l'art, le design et les nouvelles technologies je ne demande qu’à partager !</p>
            <p id="luluE" class="lulu <?php if ($_SESSION["language"] != "english") {
                    echo "language";
                } ?>">I am a third year Graphic Design student. Passionate about art, design and new technologies, I only ask to share !</p>
            <p id="exchangeF" class="exchange <?php if ($_SESSION["language"] == "english") {
                    echo "language";
                } ?>">Venez échanger ici !</p>
            <p id="exchangeE" class="exchange <?php if ($_SESSION["language"] != "english") {
                    echo "language";
                } ?>">Let's talk !</p>
            <div id="switchBox">
                <div id="language">
                    <p>FR</p>
                    <label id="switchL" class="switch">
                        <input class="<?php if ($_SESSION["language"] == "english") {
                    echo "checked";
                } ?>" id="inputL" type="checkbox" name="language">
                        <span class="slider round"></span>
                    </label>
                    <p>EN</p>
                </div>
                <div class="hole1vh"></div>
                <div id="nightMode">
                    <img class="logo" src="./img/soleil.png" alt="sun">
                    <label class="switch">
                        <input class="<?php if ($_SESSION["nightMode"] == "night") {
                    echo "checked";
                } ?>" id="inputN" type="checkbox" name="night">
                        <span class="slider round"></span>
                    </label>
                    <img class="logo" src="./img/lune.png" alt="moon">
                </div>
            </div>

        </div>

    </div>
</header>
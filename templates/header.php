<header>
    <div id="headband">
        <div id="txt">
            <div id="boxLogo">
                <a href="./"><img id="logo" src="./img/logoLucas.png" alt=""></a>
            </div>
            <div id="proF" class="boxA">
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
            <div id="proE" class="boxA language">
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
                <div class="form " id="formDay">
                    <h2 id="dayF" class="day">Bonjour !</h2>
                    <h2 id="dayE" class="day language">Hello !</h2>
                </div>
                <div class="form display" id="formNight">
                    <h2 id="nightF" class="night">Bonsoir !</h2>
                    <h2 id="nightE" class="night language">Good Evening !</h2>
                </div>
            </div>
            <p id="luluF" class="lulu">Je suis étudiant en troisième année de Design Graphique. Passionné par l'art, le design et les nouvelles technologies je ne demande qu’à partager !</p>
            <p id="luluE" class="lulu language">I am a third year Graphic Design student. Passionate about art, design and new technologies, I only ask to share !</p>
            <p id="exchangeF" class="exchange">Venez échanger ici !</p>
            <p id="exchangeE" class="exchange language">Let's talk !</p>
            <div id="switchBox">
                <div id="language">
                    <p>FR</p>
                    <label id="switchL" class="switch">
                        <input id="inputL" type="checkbox" name="language">
                        <span class="slider round"></span>
                    </label>
                    <p>EN</p>
                </div>
                <div class="hole1vh"></div>
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

    </div>
</header>
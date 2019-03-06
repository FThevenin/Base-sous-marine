<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Medio Acqua</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/burger.css">
    <link rel="stylesheet" href="css/button.css">
    <link rel="stylesheet" href="css/medio.css">
    <link rel="stylesheet" href="css/footer.css">
</head>
<body>
<header>
        <!--Navbar-->
        <div class="toggle_btn">
            <span></span>
        </div>
        
        <div class="menu nav row align-items-center">
            <a href="medio.php">Medio Acqua</a>
            <a href="base.php">Base sous-marine</a>
            <a href="agenda.php">Agenda</a>
            <a href="info.php">Info pratique</a>
        </div>
        <a href="acceuil.php">
            <div class="logo"></div>   
        </a>
    </header>
    <section id="one">
        <div class="text">
            <h1>MEDIO <br> ACQUA</h1>
        </div>
        <p>26 OCT. 2018 <br> 6 JAN. 2019 <br> EXPOSITION COLLECTIVE</p>
        <div class="enclume">
                <a href="#descriptionmedio"><div class="ancre"></div></a>
        </div>
    </section>
    <section id="descriptionmedio">
        <div class="imgmedio">
                <div id="medioi"></div>
        </div>
        <div class="boite">
            <h2>Medio Acqua <br> de quoi sa parle?</h2>
            <p>Inspiré par l’histoire, l’architecture et la <br> géographie du lieu, le commissaire d’exposition, <br> Renato Casciani, a souhaité réunir une vingtaine <br> d’artistes pour un parcours poétique puisant son <br> inspiration dans l’univers aquatique. </p>
            <div class="container">
                    <a href="base.html"><button id="button">En savoir plus</button></a>     
              </div>
        </div>
    </section>
    <section id="malphette">
        <div class="boite">
            <h2>Pierre Malphettes</h2>
            <p> <strong>Née en 1970, vit et travaille à Marseille.</strong> </p>
            <p>Diplômé de l’École des Beaux-Arts de Bourges, <br> Pierre Malphettes explore à la fois la sculpture, <br> l’installation, la photographie , la vidéo et le dessin <br> mural. À travers ses oeuvres, il cherche à créer un <br> dialogue entre nature et artifice. Il emprunte <br> notament au monde industriel et à l’univers de la <br> construction leurs matériaux transformés pour <br> réaliser une oeuvre  qui représente de <br> phénomènes et éléments naturels. </p>
            <div class="container">
                    <a href="base.html"><button id="button">En savoir plus</button></a>     
              </div>
        </div>
        <div class="photo-pierre">
            <div class="pierre"></div>
        </div>
    </section>
    <section id="tourte">
        <div class="photo-nicolas">
            <div class="nicolas"></div>
        </div>
        <div class="boite">
                <h2>Nicolas Tourte</h2>
                <p> <strong>Née en 1977, vit et travaille en tous lieux.</strong></p>
                <p>Le travail de Nicolas Tourte questionne avec <br> humour et dérision la place de l’homme dans <br> l’univers. L’art vidéo joue un rôle primordial dans <br> sa pratique, notamment par l’utilisation de sy-<br>stèmes de projection dans l’espace. Il convoque <br> également une multitude de médiums: la sculpt- <br> ure, le dessin, l’installation et les outils numé- <br> riques liésau traitement de la photographie et de <br> la vidéo pour créer des situations entre le réel <br> et le virtuel. </p>
                <div class="container">
                        <a href="base.html"><button id="button">En savoir plus</button></a>     
                  </div>
            </div>
    </section>
    <section id="lavenne">
    <div class="boite">
        <h2>Mathilde Lavenne</h2>
        <p> <strong>Née en 1982, vit et travaille à Madrid.</strong></p>
        <p>Récemment diplômée de l’école du Fresnoy,<br> Studio national des arts contemporains, <br> Mathilde Lavenne oriente son travail vers les <br> technologies émergentes et les outils <br> numériques par l’écriture de court-métrages et <br> la réalisation d’installations numériques. Elle se <br> consacre pendant deux années à la réalisation <br> du film Focus on Infinity abordant ce voyage <br> sous l’angle de la fouille, de la matière et de <br> l’errance.</p>
        <div class="container">
                <a href="base.html"><button id="button">En savoir plus</button></a>     
            </div>
    </div>
    <div class="photo-mathilde">
        <div class="mathilde"></div>
    </div>
    </section>
    <section id="barre">
    <div class="pictolienmedio">
        <a href="info.html"><div class="pictoinfo"></div></a>
        <a href="agenda.html"><div class="pictocarnet"></div></a>
        <a href="base.html"><div class="pictobsm"></div></a>
    </div>
    </section>
    <?php include './footer.php'?>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="javascript/script.js"></script>
</body>
</html>
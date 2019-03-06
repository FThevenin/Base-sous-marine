<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Agenda</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/burger.css">
    <link rel="stylesheet" href="css/button.css">
    <link rel="stylesheet" href="css/agenda.css">
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
    
    <section id="galery">
        <div class="cinema">
            <div class="opacity">
                <h2>CINÉMA</h2>
                <p>Vous pourrais participez à des projections cinématographique de nouveaux réalisateurs.</p>
            </div>
        </div>
        <div class="exposition">
            <div class="opacity">
                <h2>EXPOSITIONS</h2>
                <p>Des expositions d’art contemporain ainsi que moderne.</p>
            </div>
        </div>
        <div class="concert">
            <div class="opacity">
                <h2>CONCERTS</h2>
                <p>Vous pourrez assister à des concerts de jazz.</p>
            </div>
        </div>
        <div class="spectacle">
            <div class="opacity">
                <h2>SPECTACLES</h2>
                <p>Vous trouverez des Spectacles avec notament du chant lyrique et des pièces de théâtres.</p>
            </div>
        </div>
        <div class="enclume">
                <a href="#prog"><div class="ancre"></div></a>
        </div>
    </section>

    <section id="prog">
        <div class="bloc-prog">
            <div class="img-medio"></div>
            <div class="ecrit">
                <h3>MEDIO ACQUA</h3>
                <p>28 nov. 2018 - 6 janv. 2019</p>
                <p>Venez découvrir l'exposition Medio Acqua en profitant d'une <br> visite commentée avec nos médiateurs tous les mercredis à <br> 17h et tous les samedis à 16h ! <br> « Medio Acqua » présente des installations d’artistes <br> emblématiques de la scène artistique française et <br> internationale ainsi qu’une sélection d’œuvres vidéo d'artistes <br> récemment diplômés de la prestigieuse école du Fresnoy.</p>
            </div>
        </div>
        <div class="bloc-prog">
            <div class="img-proj"></div>
            <div class="ecrit">
                <h3>Projection: "C'est assez bien <br> d'être fou"</h3>
                <p>Dimanche 8 août 2018 de 20:30 à 23:30</p>
                <p>Dans le cadre de l'exposition Légendes Urbaines à la  Base <br> sous-marine de Bordeaux, le Cinéma UTOPIA Bordeaux <br> présente le film documentaire "C'est assez bien d'être fou" <br> réalisé par Antoine Page Réalisateur. La projection est suivie <br> d'une rencontre avec le réalisateur.</p>
            </div>
        </div>
        <div class="bloc-prog">
            <div class="img-orchestre"></div>
            <div class="ecrit">
                <h3>Orchestre national Bordeaux <br> Aquitaine</h3>
                <p>Jeudi 20 juillet 2019</p>
                <p>L'histoire de l'Orchestre National Bordeaux Aquitaine est <br> intimement liée à l'histoire de la Musique à Bordeaux. C'est <br> vers 1850 que des musiciens professionnels créent l'Orchestre <br> de la Société Sainte-Cécile à Bordeaux. En 1932, Gaston Poulet, <br> nommé Directeur du Conservatoire de la ville, fonde sa <br> propre société des concerts : l'Association des Professeurs du <br> Conservatoire. </p>
            </div>
        </div>
    </section>
    <section id="date">
    <div id="bicolor">
        <h2>HORAIRES</h2>
        <ul>
            <li>Expo en cour, Medio Acqua du 26 <br> octobre au 6 janvier.</li>
            <li>Du mardi au dimanche de 13h à 19h.</li>
            <li>Fermé le lundi et jours fériés.</li>
            <li>Fermé hors exposition.</li>
        </ul>
    </div>
    <div id="bicolor2">
        <h2>TARIFS</h2>
        <ul>
            <li>Plein tarif: 5euro.</li>
            <li>Tarif réduit: 3euro.</li>
            <li>Gratuit le 1er Dimanche du mois <br> (hors juillet/août).</li>
            <li>Pass Musées Bordeaux: accès illimité.</li>
            <li>Carte jeunes Bordeaux: accès illimité.</li>
            <li>Visite guidée: 3€ + prix du billet.</li>
        </ul>
    </div>
    </section>


    <?php include './footer.php'?>

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="javascript/script.js"></script>
</body>
</html>
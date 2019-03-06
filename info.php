<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/burger.css">
    <link rel="stylesheet" href="css/medio.css">
    <link rel="stylesheet" href="css/info.css">
    <link rel="stylesheet" href="css/button.css">
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

<section id="infopratique">
    <div class="box">
        <div class="align-picto">
        <div class="pictoinfo"></div>
        <h2>INFO PRATIQUE</h2>
        </div>
            <h3>OUVERTURE</h3>
            <p>Du 02/01/2019 au 31/12/2019 <br> De 13h30 à 19h00 <br> Fermé le Lundi <br> seulement lors des expositions (voir programme), <br> fermée le lundi et jours fériés.</p>
            <h3>ADRESSE</h3>
            <p>Boulevard Alfred Daney <br> 33000 BORDEAUX <br> Bordeaux Bassins à flot - Bacalan</p>
            <h3>CONTACT</h3>
            <p>+33 5 56 11 11 50</p>
    </div>
    <div class="boy"></div>
        <div class="enclume">
            <a href="#next"><div class="ancre"></div></a>
        </div>
</section>
<section id="carte">
    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d4057.035361406825!2d-0.5597494220858676!3d44.86985818283409!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xd5528f48803414b%3A0x4cef388c969254b7!2sBase+sous-marine!5e0!3m2!1sfr!2sfr!4v1551547785163" width="800" height="600" frameborder="0" style="border:0" allowfullscreen></iframe>
</section>
    <section id="next">
        <h2>La base sous-marine n'est ouverte qu'à l'occasion des expositions temporaires.</h2>
        <p>Depuis sa réouverture après des travaux d’agrandissement et d’amélioration de ses salles d’expositions, la base renforce la <br> place du numérique dans sa programmation artistique, avec une exposition majeure d'art numérique chaque année et une <br> expérience de visite repensée de manière plus participative en lien avec les réseaux sociaux.</p>
        <h3>Prochaine exposition :</h3>
        <p> <strong>du 26 octobre 2018 au 6 janvier 2019</strong> : Medio Acqua <br>(voir colonne de droite, rubrique "Sur le même thème"),</p>
        <p> <strong>Tarifs:</strong><br> Entrée : 5 € | 3 € tarif réduit | Gratuit avec le Bordeaux <br> Métropole City Pass, et le 1er dimanche du mois (excepté en <br> juillet et août).</p>
        <p> <strong>Visites commentées sans réservation</strong> <br> Tous les mercredis de 17h <br> à 18h et les samedis de 16h à 17h pendant les périodes d'exposition | limité à 30 personnes.</p>
    </section>
    <?php include './footer.php'?>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="javascript/script.js"></script>
</body>
</html>
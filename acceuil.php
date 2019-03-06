<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>La Base sous-marine</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="css/style.css">
  <link rel="stylesheet" href="css/burger.css">
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
    <div class="logo"></div>   
</header>

  <section id="back">
    <div class="title">
      <h1>LA BASE <br> SOUS-MARINE</h1>
    </div>
    <div class="para">
      <p>Un lieu historique unique,<br> mise en avant de la culture artistique internationale.</p>
    </div>
    <div class="enclume">
      <a href="#medio"><div class="ancre"></div></a>
    </div>
  </section>

  <section id="medio">
    <div class="txt">
      <div class="align-picto">
        <div class="pictoexpo"></div>
        <h2>MEDIO ACQUA</h2>
      </div>
      <p>Medio acqua présente des installations d’artistes majeurs et <br> emblématiques de la scène artistique française et internationale ainsi <br> qu’une sélection d’œuvres vidéo de jeunes artistes émergents et <br> récemment diplômés de la prestigieuse école du Fresnoy.</p>
      <div class="container">
        <a href="medio.html"><button id="button">En savoir plus</button></a>
      </div>
    </div>
    <div class="clas">
      <div id="medioacqua"></div>
    </div>
  </section>

  <section id="bsm">
    <div class="clas1">
      <div id="bsmdiag"></div>
    </div>
    <div class="txt2">
      <div class="align-picto">
        <div class="pictobsm"></div>
        <h2>LA BASE SOUS-MARINE</h2>
      </div>
      <p>Construite entre 1941 et 1943 par l’occupant allemand, elle était destinée <br> a accueillir des sous-marins. C’est un gigantesque bunker organisé en 11 <br> alvéoles liées entre elles par une rue intérieure. Une tour de 27 m de haut <br> est accolée au bâtiment long de 290 m. L’ensemble couvre une <br> superficie de 43 000 m2.</p>
      <div class="container">
          <a href="base.html"><button id="button">En savoir plus</button></a>     
    </div>
      </div>
  </section>

  <section id="agenda">
    <h2>AGENDA</h2>
    <div class="pictoagenda">
      <div class="pictomicro"></div>
      <div class="pictospectacle"></div>
      <div class="pictocine"></div>
      <div class="pictoexpo"></div>
    </div>
    <div class="para2">
      <p>Vous trouverez ici toutes les infos sur les évênements,expositions,concert,spectacle  qui on eu lieux ou bien qui vont avoir lieu, ainsi que des informations supplémentaires sur chaque expositions temporaire pour avoir un avant gôut de celle-ci avant de si rendre.</p>
    </div>
    <div class="container">
        <a href="agenda.html"><button id="button">En savoir plus</button></a>     
  </div>
  </section>

    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d4057.035361406825!2d-0.5597494220858676!3d44.86985818283409!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xd5528f48803414b%3A0x4cef388c969254b7!2sBase+sous-marine!5e0!3m2!1sfr!2sfr!4v1551547785163" width="800" height="600" frameborder="0" style="border:0" allowfullscreen></iframe>

    <?php include './footer.php'?>
    
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="javascript/script.js"></script>
</body>
</html>
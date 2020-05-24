<?php
session_start();

?>
<!DOCTYPE html>
<html lang="pl">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Galeria</title>

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css" integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp" crossorigin="anonymous">
    <!-- Custom styles for this template -->
    <link href="css/scrolling-nav.css" rel="stylesheet">
    
  
  </head>

  <body id="page-top">

    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top" id="mainNav">
      <div class="container">
        <a class="navbar-brand js-scroll-trigger" href="index.php#page-top"><i class="fab fa-500px"></i> KURS HTML5</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="index.php#about"><i class="fab fa-html5 "></i> HTML5</a>
            </li>
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="index.php#services">Cele</a>
            </li>
            <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          KURS
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="skladnia.php#kurs">Składnia</a>
          <a class="dropdown-item" href="przyklad.php#kurs">Przykład budowy strony</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="podsumowanie.php#kurs">Podsumowanie</a>
        </div>
      </li>
      <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="index.php#contact"><i class="far fa-address-book"></i> Kontakt</a>
            </li>
            
              <? if (!isset($_SESSION['zalogowany']))
  {
    echo "<li class='nav-item'><a class='nav-link js-scroll-trigger' href='logowanie.php'><i class='fas fa-sign-in-alt mr-1'></i>Logowanie</a></li>";
  }
  else 
  {
    echo "<p class='nav-link'>Witaj ".$_SESSION["login"]."</p>";
  
  echo "<a class='nav-link js-scroll-trigger' href='logout.php'><i class='fas fa-sign-out-alt'></i>Wyloguj się</a></p>";
            }?>
              </ul>
            
            
          
        </div>
      </div>
    </nav>


    <section id="about">
      <div class="container">
        <div class="row">
            <p class="lead"><div class="col-lg-8 mx-auto">
            <h5 class="section-heading h5 pt-4">Galeria</h5>
  <a class="gallery-text" href="uploads/images/blog/1.jpg">Pierwsza miniaturka</a>
  <a class="gallery-text" href="uploads/images/blog/2.jpg">Druga miniaturka</a>
  <a class="gallery-text" href="uploads/images/blog/3.jpg">Trzecia miniaturka</a>
  <a class="gallery-text" href="uploads/images/blog/4.jpg">Czwarta miniaturka</a>
  <a class="gallery-text" href="uploads/images/blog/5.jpg">Piąta miniaturka</a>
  <a class="gallery-text" href="uploads/images/blog/6.jpg">Szósta miniaturka</a>
  <a class="gallery-text" href="uploads/images/blog/7.jpg">Siódma miniaturka</a>
  <a class="gallery-text" href="uploads/images/blog/8.jpg">Ósma miniaturka</a>
          </div>
          </div>
        </div>
      
    </section>

    


<!--Section: Contact v.2-->

    <!-- Footer -->
    <footer class="py-5 bg-dark">
      <div class="container">
          <div class="float-left clear-both"><script charset="UTF-8" src="http://edodatki.pl/code/zegar-cyfrowy?data%5BWidget%5D%5Btitle%5D=Zegar+cyfrowy&data%5BWidget%5D%5Bcss%5D=2" ></script></div>
          <p class="m-0 float-right"> <i class="far fa-eye fa-2x" style="color: white;"></i> <a href='http://www.counterliczniki.com'>counterliczniki</a> <script  src='https://www.counterliczniki.com/auth.php?id=103bb924ffb6a80da3298b808e2ce54d4da2beb7'></script>
<script  src="https://www.counterliczniki.com/pl/home/counter/377040/t/3"></script>
<p class="m-0 text-center text-white ">Copyright <i class="far fa-copyright"></i> KURS HTML5 2018</p>
      </div>
      <!-- /.container -->
    </footer>

    
    <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Plugin JavaScript -->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom JavaScript for this theme -->
    <script src="js/scrolling-nav.js"></script>
   <script src='https://www.google.com/recaptcha/api.js'></script>
  </body>

</html>

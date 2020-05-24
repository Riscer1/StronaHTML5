<?php
session_start();

?>
<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Scrolling Nav - Start Bootstrap Template</title>

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/scrolling-nav.css" rel="stylesheet">
    

  </head>

  <body id="page-top">

    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top" id="mainNav">
      <div class="container">
        <a class="navbar-brand js-scroll-trigger" href="index.php#page-top">KURS HTML5</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="index.php#about">HTML5</a>
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
              <a class="nav-link js-scroll-trigger" href="index.php#contact">Contact</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
     <div id="carousel" class="carousel slide" data-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img class="d-block w-100" src="1.jpg" height="600px" alt="First slide">
      <div class="carousel-caption d-none d-md-block">
    <h5>HTML 5</h5>
  </div>
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="3.jpg" height="600px" alt="Third slide">
      <div class="carousel-caption d-none d-md-block">
    <h5>Nowe znaczniki i możliwości</h5>
    </div></div>
  <div class="carousel-item">
      <img class="d-block w-100" src="2.jpg" height="600px" alt="Third slide">
      <div class="carousel-caption d-none d-md-block">
    <h5>Nowa składnia dokumentu</h5>
  </div>
    </div>
  </div>
  <a class="carousel-control-prev" href="#carousel" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carousel" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>

    <section id="kurs" class="bg-light">
      <div class="container">
        <div class="row">
            <p class="lead"><div class="col-lg-8 mx-auto">
              <h2>STRUKTURA DOKUMENTU HTML</h2>
            <p class="lead">Zacznijmy od podstawowej struktury kodu, który w HTML5 wygląda następująco:
              <section class="bg-secondary">
                            <pre><code>&lt;!DOCTYPE html&gt;
&lt;html lang="pl"&gt;
  &lt;head&gt;
    &lt;meta charset="utf-8"&gt;
    &lt;title&gt; ... &lt;/title&gt;
  &lt;/head&gt;
  &lt;body&gt;
    ...
  &lt;/body&gt;
&lt;/html&gt;</code></pre>
                    </section> </div>
                    <p class="lead"><div class="col-lg-8 mx-auto">
                      <br
              <h2>Wybrane znaczniki</h2>
            <p class="lead">Zanim HTML5 stał się popularny, aby opisać strukturę dokumentu koderzy nagminnie wykorzystywali znacznik blokowy div, który dzielił stronę na poszczególne części. Bloki bardzo dobrze się do tego nadają, jednak mają jedną podstawową wadę – w żaden sposób nie opisują poszczególnych części. Twórcy nowego standardu postanowili to zmienić i wprowadzili szereg nowych znaczników, które w doskonały sposób opisują zawartość kodu.
              Znacznik głównej zawartości strony:
              <section class="bg-secondary">
                             <pre><code>&lt;main&gt; ... &lt;/main&gt;</code></pre>
                    </section> <br>
                    Znacznik sekcji, czyli określonej części strony:
                    <section class="bg-secondary">
                             <pre><code>&lt;section&gt; ... &lt;/section&gt;</code></pre>
                    </section> <br>
                    Znacznik artykułu, czyli materiału tekstowego na stronie. Zazwyczaj złożony z nagłówka, akapitów, zdjęć, filmików, itp.
                    <section class="bg-secondary">
                             <pre><code>&lt;article&gt; ... &lt;/article&gt;</code></pre>
                    </section> <br>
                    Nagłówek:
                    <section class="bg-secondary">
                             <pre><code>&lt;header&gt; ... &lt;/header&gt;</code></pre>
                    </section> <br>
                    Znaczniki wykorzystywane do umieszczania zdjęć, obrazków, wykresów:
                    <section class="bg-secondary">
                             <pre><code>&lt;figure&gt;
  ...
  &lt;figcaption&gt; ... &lt;/figcaption&gt;
&lt;/figure&gt;</code></pre>
                    </section> <br>
                    Znacznik nawigacji:
                    <section class="bg-secondary">
                             <pre><code>&lt;nav&gt; ... &lt;/nav&gt;</code></pre>
                    </section> <br>
                    Znacznik wykorzystywany do umieszczania treści, nie będącej główną częścią strony, np. pasek boczny, dodatkowa nawigacja, tagowanie, itp.
                    <section class="bg-secondary">
                             <pre><code>&lt;aside&gt; ... &lt;/aside&gt;</code></pre>
                    </section> <br>
                    Stopka:
                    <section class="bg-secondary">
                             <pre><code>&lt;footer&gt; ... &lt;/footer&gt;</code></pre>
                    </section> <br>
                    Media:
                    <section class="bg-secondary">
                             <pre><code>&lt;video ...&gt;
  &lt;source src="..." type="..."&gt;
  ...
&lt;/video&gt;
&lt;audio ...&gt;
  &lt;source src="..." type="..."&gt;
  ...
&lt;/audio&gt;</code></pre>
                    </section> <br>

      </div>           
        </div>
      </div>
    </section>


    <section id="contact" class="section col-lg-8 mx-auto">

    <!--Section heading-->
    <h2 class="section-heading h1 pt-4">Kontakt</h2>
    <!--Section description-->
    <p class="section-description">Masz jakieś pytania? Proszę skontaktuj się z nami bezpśrednio. Aby wysłać do nas pytanie najpierw się zaloguj!.</p>

    <div class="row">

        <!--Grid column-->
        <div class="col-lg-8 mx-auto">
            <form id="contact-form" name="contact-form" action="mail.php" method="POST">

                <!--Grid row-->
                <div class="row">

                    <!--Grid column-->
                    <div class="col-md-6">
                        <div class="md-form">
                            <input type="text" id="name" name="name" class="form-control">
                            <label for="name" class="">Imię</label>
                        </div>
                    </div>
                    <!--Grid column-->

                    <!--Grid column-->
                    <div class="col-md-6">
                        <div class="md-form">
                            <input type="text" id="email" name="email" class="form-control">
                            <label for="email" class="">Email</label>
                        </div>
                    </div>
                    <!--Grid column-->

                </div>
                <!--Grid row-->

                <!--Grid row-->
                <div class="row">
                    <div class="col-md-12">
                        <div class="md-form">
                            <input type="text" id="subject" name="subject" class="form-control">
                            <label for="subject" class="">Temat</label>
                        </div>
                    </div>
                </div>
                <!--Grid row-->

                <!--Grid row-->
                <div class="row">

                    <!--Grid column-->
                    <div class="col-md-12">

                        <div class="md-form">
                            <textarea type="text" id="message" name="message" rows="2" class="form-control md-textarea"></textarea>
                            <label for="message">Twoja wiadomość</label>
                        </div>

                    </div>
                </div>
                <!--Grid row-->

            </form>

            <div class="center-on-small-only">
                <a class="btn btn-primary" onclick="validateForm()">Wyślij</a>
            </div>
            <div class="status" id="status"></div>
            <?php
  if(isset($_SESSION['wyslano']))  echo $_SESSION['wyslano'];
  ?>
        </div>
        <!--Grid column-->

        <!--Grid column-->
        <div class="col-md-4 col-xl-3">
            <ul class="contact-icons">
                <li><i class="fa fa-map-marker fa-2x"></i>
                    <p>Kraków, ul.Tuchowska 6a, Poland</p>
                </li>

                <li><i class="fa fa-phone fa-2x"></i>
                    <p>794 245 211</p>
                </li>

                <li><i class="fa fa-envelope fa-2x"></i>
                    <p>kurshtml@gmail.com</p>
                </li>
            </ul>
            
        </div>
        <!--Grid column-->

    </div>

</section>

    <!-- Footer -->
    <footer class="py-5 bg-dark">
      <div class="container">
        <p class="m-0 text-center text-white">Copyright &copy; KURS HTML5 2018</p>
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
  </body>

</html>

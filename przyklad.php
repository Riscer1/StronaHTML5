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
              <h2>Przykładowa budowa kodu strony w HTML5</h2>
            <p class="lead">Wykorzystując powyżej przedstawione znaczniki, możemy zbudować stronę WWW, której kod w bardzo jednoznaczny sposób opisuje jej zawartość.
              <section class="bg-secondary">
                            <pre><code>&lt;!DOCTYPE html&gt;
&lt;html lang="pl"&gt;
  &lt;head&gt;
    
    &lt;meta charset="utf-8"&gt;
    
    &lt;title&gt;Tytuł strony&lt;/title&gt;

  &lt;/head&gt;
  &lt;body&gt;
  
    &lt;header&gt;Tytuł strony&lt;/header&gt;

    &lt;nav&gt;
      &lt;ul&gt;
        &lt;li&gt;&lt;a href="/podstrona1.html"&gt;Link do podstrony 1&lt;/a&gt;&lt;/li&gt;
        &lt;li&gt;&lt;a href="/podstrona2.html"&gt;Link do podstrony 2&lt;/a&gt;&lt;/li&gt;
        &lt;li&gt;&lt;a href="/podstrona3.html"&gt;Link do podstrony 3&lt;/a&gt;&lt;/li&gt;
      &lt;/ul&gt;
    &lt;/nav&gt;
    
    &lt;main&gt;

      &lt;section&gt;
        &lt;p&gt;Sekcja stron...&lt;/p&gt;
      &lt;/section&gt;

      &lt;article&gt;
        
        &lt;header&gt;
          &lt;h1&gt;Tytuł pierwszego artykułu&lt;/h1&gt;
          &lt;span&gt;dodano przez Jana Nowaka&lt;/span&gt;
        &lt;/header&gt;
        
        &lt;p&gt;Treść artykułu pierwszego...&lt;/p&gt;

        &lt;figure&gt;  
          &lt;img src="/obrazek.jpg" /&gt;
          &lt;figcaption&gt;Opis obrazka&lt;/figcaption&gt; 
        &lt;/figure&gt;

        &lt;p&gt;Dalsza treść artykułu pierwszego...&lt;/p&gt;

      &lt;/article&gt;

      &lt;article&gt;
        
        &lt;header&gt;
          &lt;h1&gt;Tytuł drugiego artykułu&lt;/h1&gt;
          &lt;span&gt;dodano przez Adama Kowalskiego&lt;/span&gt;
        &lt;/header&gt;
        
        &lt;p&gt;Treść artykułu drugiego...&lt;/p&gt;

        &lt;video width="320" height="240" controls&gt;
          &lt;source src="/filmik.mp4" type="video/mp4"&gt;
          &lt;source src="/filmik.ogg" type="video/ogg"&gt;
          Twoja przeglądarla nie obsługuje podanych formatów filmika.
        &lt;/video&gt; 

        &lt;p&gt;Dalsza treść artykułu drugiego...&lt;/p&gt;

      &lt;/article&gt;

    &lt;/main&gt;
    
    &lt;aside&gt;
      
      &lt;h2&gt;Kategorie&lt;/h2&gt;
      &lt;nav&gt;
        &lt;ul&gt;
          &lt;li&gt;&lt;a href="/kategoria1.html"&gt;Kategoria 1&lt;/a&gt;&lt;/li&gt;
          &lt;li&gt;&lt;a href="/kategoria2.html"&gt;Kategoria 2&lt;/a&gt;&lt;/li&gt;
          &lt;li&gt;&lt;a href="/kategoria3.html"&gt;Kategoria 3&lt;/a&gt;&lt;/li&gt;
        &lt;/ul&gt;
      &lt;/nav&gt;

      &lt;h2&gt;Tagi&lt;/h2&gt;
      &lt;section&gt;
        &lt;a&gt;tag 1&lt;/a&gt; &lt;a&gt;tag 2&lt;/a&gt; &lt;a&gt;tag 3&lt;/a&gt; &lt;a&gt;tag 4&lt;/a&gt;
      &lt;/section&gt;
    
    &lt;/aside&gt;

    &lt;footer&gt;
      &lt;p&gt;Informacje kontaktowe, copyright, itp.&lt;/p&gt;
    &lt;/footer&gt;

  &lt;/body&gt;
&lt;/html&gt;</code></pre>
                    </section> 
                    <p>Powyższy kod można zobrazować za pomocą obrazka:</p>
<p><a href="http://www.blog.molitorys.pl/wp-content/uploads/2014/12/przykladowa-struktura-dokumentu-HTML5.jpg"><img class="aligncenter size-full wp-image-118" src="http://www.blog.molitorys.pl/wp-content/uploads/2014/12/przykladowa-struktura-dokumentu-HTML5.jpg" alt="Przykładowa struktura dokumentu HTML5" width="600" height="600" srcset="http://www.blog.molitorys.pl/wp-content/uploads/2014/12/przykladowa-struktura-dokumentu-HTML5.jpg 600w, http://www.blog.molitorys.pl/wp-content/uploads/2014/12/przykladowa-struktura-dokumentu-HTML5-150x150.jpg 150w, http://www.blog.molitorys.pl/wp-content/uploads/2014/12/przykladowa-struktura-dokumentu-HTML5-300x300.jpg 300w, http://www.blog.molitorys.pl/wp-content/uploads/2014/12/przykladowa-struktura-dokumentu-HTML5-135x135.jpg 135w" sizes="(max-width: 600px) 100vw, 600px" /></a></p>
                    

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

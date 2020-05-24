<?php

  session_start();
  
  if ((!isset($_POST['login'])) || (!isset($_POST['haslo'])))
  {
    header('Location: zaloguj.php');
    exit();
  }
  include("connect.php");

  $polaczenie = mysqli_connect($host, $db_user, $db_password, $db_name);
  if(mysqli_connect_errno($polaczenie)){
    echo "Blad polaczenia z baza danych". mysqli_error($polaczenie);
    exit;
  }
    $login = $_POST['login'];
    $haslo = $_POST['haslo'];
    
    $query="SELECT * FROM uzytkownicy WHERE login='$login' AND haslo='$haslo';";
    $rezultat=mysqli_query($polaczenie,$query);
    if($wiersz= mysqli_fetch_assoc($rezultat))
      {

        $_SESSION['zalogowany'] = true;
        $_SESSION['id'] = $wiersz['id'];
        $_SESSION['login'] = $wiersz['login'];
        $_SESSION['email'] = $wiersz['email'];
        unset($_SESSION['blad']);
        mysqli_free_result($rezultat);
        header('Location: index.php');
        
      } 
      else 
      {
        $_SESSION['blad'] = '<span style="color:red">Nieprawidłowy login lub hasło!</span>';
        header('Location: zaloguj.php');
      }
    
    mysqli_close($polaczenie);
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


    <section id="about">
      <div class="container">
        <div class="row">
            <p class="lead"><div class="col-lg-8 mx-auto">
            <p class="lead"><form action="zaloguj.php" method="post">
  
    Login: <br /> <input type="text" name="login" /> <br />
    Hasło: <br /> <input type="password" name="haslo" /> <br /><br />
    <input type="submit" value="Zaloguj się" name="submit"/>
  
  </form>
  <a href="rejestracja.php">Rejestracja nowego użytkownika</a><br/>
<?php
  if(isset($_SESSION['blad']))  echo $_SESSION['blad'];
  if(isset($_SESSION['rej'])) echo $_SESSION['rej'];
?>
          </div>
          </div>
        </div>
      </div>
    </section>

    


<!--Section: Contact v.2-->

    <!-- Footer -->
    <footer class="py-5 bg-dark">
      <div class="container">
        
          <p class="m-0 float-right"> <a href='http://www.counterliczniki.com'>counterliczniki</a> <script type='text/javascript' src='https://www.counterliczniki.com/auth.php?id=05b6a1950441b3579d80d57da46a3566262f4a1e'></script>
<script type="text/javascript" src="https://www.counterliczniki.com/pl/home/counter/376984/t/2"></script>
<p class="m-0 text-center text-white ">Copyright &copy; KURS HTML5 2018</p>
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

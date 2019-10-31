<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
      <meta charset="utf-8">
      <meta name="description" content="Bazinis tamplate Bootstrap pagrindu.">
      <meta name="keywords" content="HTML,CSS,XML,JavaScript">
      <meta name="author" content="Kęstutis Morkevičius">
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
      <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
      <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
      <link href="../css/css" rel="stylesheet">
      <title>Puslapio pavadinimas</title>
  </head>
    <body>

      <header>
        <div class="container-fluid">
          <div class="row align-items-center">
            <div class="col col-md-7 col-xs-12">
              <nav class="navbar navbar-expand-lg navbar-light bg-light">
                  <!-- <img class="logo" src="images/st.png" alt="Trulli"> </a> <br /> -->
                  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                  </button>
                  <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav">
                      <li class="nav-item">
                        <a class="nav-link" href="http://127.0.0.1:8000/create">Sukurti</a>
                      </li>
                      <li class="nav-item">
                          <a class="nav-link" href="http://127.0.0.1:8000">Welcome</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link" href="http://127.0.0.1:8000/kontaktai">Kontaktai</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link" href="http://127.0.0.1:8000/usertraks">Mano straipsniai</a>
                      </li>
                    </ul>
                  </div>
              </nav>
            </div>
            <div class="col col-md-5 col-xs-12">
              @if (Route::has('login'))

                  <div class="top-right links">
                      @auth
                          <a href="{{ url('/home') }}">Atsijungti</a>
                      @else
                          <a href="{{ route('login') }}">Login</a>

                          @if (Route::has('register'))
                              <a href="{{ route('register') }}">Register</a>
                          @endif
                      @endauth

                  </div>
              @endif
            </div>
          </div>
        </div>
      </header>

      <main>
        <div class="container">
          <div class="row">
            <div class="col-sm">
              @yield('content')
            </div>
          </div>
        </div>
      </main>

      <footer>
        <div class="container">
          <div class="row align-items-center justify-content-center">
            <div class="col-md-3 col-sm-6 col-xs-12">
              <p> &copy; 2018 Kęstutis Morkevičius </p>
            </div>
            <div class="col-md-3 col-sm-6 col-xs-12">
              <p> Lietuva Kaunas Pakalnės 42 </p>
            </div>
            <div class="col-md-3 col-sm-6 col-xs-12">
              <p><i class="material-icons"> call </i> +370654212 </p>
            </div>
            <div class="col-md-3 col-sm-6 col-xs-12">
              <p> <i class="material-icons"> email </i> djkestutis@yahoo.com </p>
            </div>
          </div>
        </div>
      </footer>

  </body>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
          integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
          integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
          integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</html>
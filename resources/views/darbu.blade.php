<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Saito pavadinimas</title>
        <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        <link rel="stylesheet" href="../css/cookiealert.css">
        <link href="../css/css" rel="stylesheet">
    </head>
    <body>

      <header>
        <div class="container-fluid">
          <div class="row align-items-center">
            <div class="col col-md-8 col-xs-4">
              <nav class="navbar navbar-expand-lg navbar-light bg-light">
                  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                  </button>
                  <div class="collapse navbar-collapse" id="navbarNav">
                      <img class="diplay-logo logo" src="images/st.png" alt="Logotipas">
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
            <div class="col col-md-4 col-xs-8 links">
              @if (Route::has('login'))
                      @auth
                          <a href="{{ url('/home') }}">Atsijungti</a>
                      @else
                          <a href="{{ route('login') }}">Prisijungti</a>

                          @if (Route::has('register'))
                              <a href="{{ route('register') }}">Registruotis</a>
                          @endif
                      @endauth
              @endif
            </div>
          </div>
        </div>
      </header>

      <main>
        <div class="container">
            <div class="row justify-content-center">
              @foreach ($traks as $trak)
                <div class="col-md-3 col-sm-0"></div>
                  <div class="col-md-6 col-sm-12">
                    <br /><a class="nav-link text-center" href="{{ url('/traks/'.$trak->id) }}"
                      {{ $trak->pavadinimas }} sukurtas {{ $trak->created_at}} <br /> {{ $trak->tekstas }} sukurtas {{ $trak->created_at}}
                    <img class="rounded mx-auto d-block img-fluid" src="images/{{ $trak->nuotraukosPavadinimas }}" alt="Italian Trulli"></a><br />
                  </div>
                <div class="col-md-3 col-sm-0"></div>
                @endforeach
            </div>
        </div>
      </main>

      <footer>
        <div class="container-fluid">
          <div class="footer row align-items-center justify-content-center">
            <div class="col-md-3 col-sm-6 col-xs-12">
              <p>&copy; 2018 Kęstutis Morkevičius</p>
            </div>
            <div class="col-md-3 col-sm-6 col-xs-12">
              <P>Lietuva Kaunas Pakalnės 42</P>
            </div>
            <div class="col-md-3 col-sm-6 col-xs-12">
              <p><i class="material-icons">call</i>+370654212</p>
            </div>
            <div class="col-md-3 col-sm-6 col-xs-12">
              <p><i class="material-icons">email</i>djkestutis@yahoo.com</p>
            </div>
          </div>
        </div>
      </footer>

      <!-- START Bootstrap-Cookie-Alert -->
      <div class="alert text-center cookiealert" role="alert">
          <b>Informuojame !</b> &#x1F36A; Siekdami užtikrinti geriausią patirtį lankantis www.zalgirioarena.lt svetainėje naudojame šiuos slapukus
          (angl. cookies): Privalomi – skirti palaikyti sklandų internetinės svetainės veikimą, jų atsisakyti negalima;
           Funkciniai – naudojami statistinių duomenų rinkimui apie internetinės svetainės vartotojo naudojimąsi svetaine;
            Analitiniai – naudojami rinkti informaciją apie svetainės naudojimą ir padeda tobulinti svetainės veikimą;
            Komerciniai – naudojami rinkti informaciją, skirtą reklamos turinio skleidimui.
            Pasirinkę atitinkamus slapukus ir paspaudę Sutinku, patvirtinate savo sutikimą slapukų naudojimui.
            Daugiau apie slapukus –  <a href="http://127.0.0.1:8000/cookierules" target="_blank">Slapukų politikoje.</a>

          <button type="button" class="btn btn-primary btn-sm acceptcookies" aria-label="Close">
              Aš sutinku
          </button>
      </div>
      <!-- END Bootstrap-Cookie-Alert -->

      </body>
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
              integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
              integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
              integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
        <script src="../js/cookiealert.js"></script>
    </html>

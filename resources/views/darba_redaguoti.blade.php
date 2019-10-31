@extends('welcome')

    @section('content')

      <img src="../images/{{ $trak->nuotraukosPavadinimas }}" alt="">

        <h1>Pakeisti nuotrauką</h1>

            <form method="POST" action="/updateimage/{{ $trak->id }}" enctype="multipart/form-data">
                @csrf
                <input type="text" class="input {{ $errors->has('pavadinimas') ? 'is-danger' : '' }}" name="nuotraukosPavadinimas"
                       placeholder="Pavadinimas" value="{{ old('pavadinimas') }}"><br />
                <label for="files" class="btn form-nuotrauka">Pasirinkti nuotraką</label>
                <input id="files" style="visibility:hidden;" type="file" name="image"><br />
                <input style="visibility:hidden;" type="text" name="oldimage" value="{{ $trak->nuotraukosPavadinimas }}"><br />
                <button class="form-submit" type="submit" name="submit">Pakeisti nuitrauką</button>
            </form>


        <h1>Redaguoti įrašą</h1>

          <form method="POST" action="/update/{{ $trak->id }}">
              {{ method_field('PATCH') }}
              @csrf
              <input type="text" name="pavadinimas" placeholder="Pavadinimas" value="{{ $trak->pavadinimas }}" required><br />
              <textarea name="tekstas" placeholder="tekstas" required>{{ $trak->tekstas }}</textarea><br />
              <button type="submit" name="submit">Išsaugoti</button>
          </form>

          <div>
              <ul>

                  @if ($errors->any())

                      @foreach ($errors->all() as $error)
                          <li>{{ $error }}</li>
                      @endforeach

                  @endif

              </ul>
          </div>

    @endsection

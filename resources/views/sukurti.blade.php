@extends('welcome')

    @section('content')

          <h1>Sukurti įrašą</h1>

          <form method="POST" action="{{ url('/store') }}" enctype="multipart/form-data">
              @csrf
              <input type="text" class="input {{ $errors->has('pavadinimas') ? 'is-danger' : '' }}" name="pavadinimas"
                     placeholder="Pavadinimas" value="{{ old('pavadinimas') }}"><br />
              <textarea name="tekstas" placeholder="tekstas">{{ old('tekstas') }}</textarea><br />
              <label for="files" class="btn form-nuotrauka">Pasirinkti nuotraką</label>
              <input id="files" style="visibility:hidden;" type="file" name="image"><br />
              <button class="form-submit" type="submit" name="submit">Išsaugoti</button>
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

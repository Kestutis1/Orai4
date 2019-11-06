@extends('welcome')

  @section('content')

    <h1 class="text-center">Sukurti įrašą</h1>

    <form method="POST" action="{{ url('/store') }}" enctype="multipart/form-data">
      @csrf
        <div class="col align-self-center form-group">
          <input type="text" class="form-control input {{ $errors->has('pavadinimas') ? 'is-danger' : '' }}" name="pavadinimas" placeholder="Pavadinimas" value="{{ old('pavadinimas') }}"><br />
          <textarea class="form-control {{ $errors->has('tekstas') ? 'is-danger' : '' }}" name="tekstas" placeholder="tekstas">{{ old('tekstas') }}</textarea><br />
          <input type="file" class="form-control-file" id="exampleFormControlFile1" name="image"><br />
          <span class="botn">Pasirinkti nuotrauką</span>
          <span id="botnfile">Failas nepasirinktas</span>
          <button class="form-submit btn btn-primary sukurtimygtukas" type="submit" name="submit">Išsaugoti</button>
        </div>

      @if ($errors->any())
        <div class="klaidos">
          <ul>
            @foreach ($errors->all() as $error)
              <li>{{ $error }}</li>
            @endforeach
          </ul>
        </div>
      @endif
    </form>
  @endsection

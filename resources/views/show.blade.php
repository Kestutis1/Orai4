@extends('welcome')

    @section('content')
        @parent
                <div class="nuotrauka">
                  <h1> {{ $trak->pavadinimas }} </h1>
                  <p> {{ $trak->tekstas }} </p>
                  <p> {{ $trak->created_at}} </p>
                  <img src="../images/{{ $trak->nuotraukosPavadinimas }}" alt="Italian Trulli"> </a> <br />
                </div>

                @can('update', $trak)
                  <a href="/edit/{{ $trak->id }}">Redaguoti</a>
                @endcan
    @endsection

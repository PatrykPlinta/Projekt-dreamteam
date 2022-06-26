@extends('layouts.app')

@section('content')
    <div id="container">
        <div class="navbar-nav" id="lewy">
            <a class="navbar-brand" href="{{ url('/dreamteam') }}">
                Dreamteam
            </a>
            @if($role->power<3)
            <a class="navbar-brand" href="{{ url('/addplayer') }}">
                Dodaj Gracza
            </a>
            @endif
            @if($role->power<2)
            <a class="navbar-brand" href="{{ url('/userremove') }}">
                Usuń użytkownika
            </a>
            @endif
        </div>
        <div id="prawy">

            @yield("card")
        </div>
    </div>
@endsection

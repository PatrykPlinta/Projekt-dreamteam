@extends('home')

@section('card')
<form id="form" method="POST" action="{{route('playeradd.create')}}">
    @csrf
    <div class="form-floating">
        <input name="name" id="name" class="form-control" placeholder="Podaj Nazwisko Gracza">
        <label for="name">Imie</label>
    </div>
    <div class="form-floating">
        <input name="surname" id="surname" class="form-control" placeholder="Podaj Nazwisko Gracza">
        <label for="surname">Nazwisko</label>
    </div>
    <div class="form-floating">
        <input name="jersay" id="jersay" class="form-control" placeholder="Podaj Numer Gracza">
        <label for="jersay">Numer Gracza</label>
    </div>
    <select name="id_team" class="form-select">
        @foreach($teams as $team)
        <option value="{{$team->id}}">{{$team->name}}</option>
        @endforeach
    </select>
    <br>

    <button type="submit" class="btn btn-success" >Dodaj</button>

</form>
@endsection

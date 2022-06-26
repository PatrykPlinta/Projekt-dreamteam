@extends('home')

@section('card')
    <form method="POST" action="{{route('userremove.remove')}}">
        @csrf
        <select name="id" class="form-select">
        @foreach($users as $user)
        <option  value="{{$user->id}}">{{$user->name}}</option>
        @endforeach
        </select>
        <br>
    <button type="submit" class="btn btn-danger">Usuń</button>
</form>
@endsection

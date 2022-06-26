@extends('home')

@section('card')

    @if(empty($dreamteam_players))
        <form method="POST" action="{{route('dreamteam.create')}}">
            @csrf
            @foreach($positions as $position)
                <br>
                <h3>{{$position->position}}</h3>
                <select name="position[{{$position->id}}]" class="form-select">
                    @foreach($players as $player)
                        <option value="{{$player->id}}">{{$player->name." ".$player->surname}}</option>
                    @endforeach
                </select>
            @endforeach
            <br>
            <button type="submit" class="btn btn-success">Utwórz</button>
        </form>
    @else
        @foreach($dreamteam_players as $dreamteam_player)
            <center><div class="row">
                <div class="col"
                     style="width: 15vw; background-color:{{$dreamteam_player['team_first_color']}};color: {{$dreamteam_player['team_second_color']}} ">
                    <h2>
                        {{$dreamteam_player['jersay']}}
                    </h2>
                    {{$dreamteam_player['name']}}
                    {{$dreamteam_player['surname']}}
                </div>
            </div>
            {{$dreamteam_player['position_name']}}
            </center>
        @endforeach
        <form method="POST" action="{{route('dreamteam.delete')}}" >
            @csrf
            <button type="submit" class="btn btn-danger">Usuń</button>
        </form>
    @endif
@endsection

<?php

namespace App\Http\Controllers;

use App\Models\Player;
use App\Models\Role;
use App\Models\Team;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class PlayerAddController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }


    public function playerAdd()
    {
        $user = auth()->user();
        $role = Role::where('id', '=', $user->id_role)->first();

        return view('playeradd.index'
            , [ "players" => Player::query()->get(),
                "teams" => Team::query()->get(),
                'user' => $user, 'role' => $role]
        );
    }
    public function createPlayer(Request $request){
        Player::create($request->all());
        return redirect('/addplayer');

    }
}

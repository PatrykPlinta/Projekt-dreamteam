<?php

namespace App\Http\Controllers;


use App\Models\DreamteamPlayer;
use App\Models\Player;
use App\Models\Position;
use App\Models\Role;
use App\Models\Team;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use function GuzzleHttp\Promise\all;

class DreamteamController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }


    public function getDreamteam()
    {
        $user = auth()->user();
        $role = Role::where('id', '=', $user->id_role)->first();
        $dreamteam_players = DreamteamPlayer::where("id_user", '=', $user->id)->get()->toArray();

        // tu powinien zostać użyty query builder DB

        if (!is_null($dreamteam_players)) {
            $dreamteam_players = array_map(function ($item) {
                $player = Player::where('id', '=', $item['id_player'])->first();
                $position = Position::where('id', '=', $item['id_position'])->first();
                $team = Team::where('id', '=', $player['id_team'])->first();

                return array(
                    'position_name' => $position['position'],
                    'position_id' => $position['id'],
                    'name' => $player['name'],
                    'surname' => $player['surname'],
                    'jersay' => $player['jersay'],
                    'team_id' => $team['id'],
                    'team_name' => $team['name'],
                    'team_first_color' => $team['first_color'],
                    'team_second_color' => $team['second_color'],
                );
            }, $dreamteam_players);
        }

        return view('dreamteam.index',
            ["dreamteam_players" => $dreamteam_players,
                "positions" => Position::all(),
                'user' => $user,
                'role' => $role,
                'players'=>player::all(),
            ]
        );
    }

    public function createDreamteam(Request $request)
    {
        $user = auth()->user();
        $fields = $request->all();
        $positions = Position::all();

        foreach ($positions as $position) {
            DreamteamPlayer::create([
                "id_user" => $user->id,
                "id_player" => $request->get("position")[$position->id],
                "id_position" => $position->id
            ]);
        }
        return redirect('/dreamteam');


    }

    public function deleteDreamteam()
    {
        $user = auth()->user();
        DB::table('dreamteam_players')->where('id_user','=',$user->id)->delete();
        return redirect('/dreamteam');

    }

}

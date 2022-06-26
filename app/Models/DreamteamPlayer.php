<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class DreamteamPlayer extends Model
{
    protected $fillable=["id_user","id_player","id_position"];
    protected $table = "dreamteam_players";
}

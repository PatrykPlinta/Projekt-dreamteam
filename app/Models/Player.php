<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Player extends Model
{
    protected $fillable=["name","surname","jersay","id_team"];
    protected $table = "players";
}

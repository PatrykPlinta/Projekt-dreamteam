<?php

namespace App\Http\Controllers;

use App\Models\Role;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Symfony\Component\Console\Input\Input;

class UserRemoveController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }



    public function userRemoveIndex()
    {
        $user = auth()->user();
        $role = Role::where('id', '=', $user->id_role)->first();

        if($role->power!=1){
            return redirect('/home');
        }else{
        return view('userremove.index'
            , ["users" => User::query()->get()
                ,'user' => $user
                ,'role' => $role]
        );
    }
    }
    public function userRemove()
    {
            $userid = $_POST['id'];

            DB::delete('DELETE FROM dreamteam_players WHERE id_user='.$userid);
            DB::delete('DELETE FROM users WHERE id='.$userid);
            return redirect('/userremove');

        }


}

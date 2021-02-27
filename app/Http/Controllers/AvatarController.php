<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Avatar;
use App\Models\User;

class AvatarController extends Controller
{
    function all() {
        return Avatar::all();
    }

    function set(Request $request) {
        $u = User::find($request->user);
        $u->avatar_id = $request->avatar['id'];
        $u->save();

        return $u;
    }
}

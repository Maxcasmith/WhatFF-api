<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use App\Models\User;

class UserController extends Controller
{
    function login(Request $req) {
        $user = User::where('email', strtolower($req->email))->first();
        if (isset($user)) {
            if (password_verify($req->password, $user->password)) return $user;
            else return [ 'status' => 'error', 'message' => "Email and password do not match" ];
        }
        else return [ 'status' => 'error', 'message' => "Email does not appear to be in use" ];
    }
    
    function register(Request $req) {
        try {
            $user = new User();
            $user->name = $req->username;
            $user->email = strtolower($req->email);
            $user->password = Hash::make($req->password);
            $user->code = (string) Str::uuid();
            $user->avatar_id = 1;
            $user->save();
            return $user;
        } catch (Exception $e) {
            return response(['status' => 'error', 'message' => $e->message], 200);
        }
    }

    function setUI(Request $req) {
        $u = User::find($req->user);
        $u->window = $req->ui;
        $u->save();

        return $u;
    }

    function get(User $user) {
        return $user;
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Storage;
use App\Models\Track;
use App\Models\Game;

class TrackController extends Controller
{
    function get() {
        $track = Track::inRandomOrder()->first();
        $games = Game::inRandomOrder()->where('id', '!=', $track->answer_id)->limit(3)->get();
        $games->add(Game::find($track->answer_id));

        return [ 'id' => $track->id, 'file' => $track->path, 'options' => $games ];
    }

    function answer(Request $req) {
        $track = Track::find($req->track);
        
        if ($track->answer_id == $req->answer) {
            //GRANT EXP AND ADAPT ALGORITHM
            return [ 
                'status' => true,
                'exp' => $track->exp,
                'track' => $this->get()
            ];
        }
        else {
            //SEND BAD LUCK AND ADAPT ALGORITHM
            return [ 
                'status' => false,
                'track' => $this->get()
            ];
        }
    }

    function search($searchTerm) {
        return Track::with('answer')
            ->where('id', 'LIKE', '%'.$searchTerm.'%')
            ->orwhere('path', 'LIKE', '%'.$searchTerm.'%')
            ->orwhere('name', 'LIKE', '%'.$searchTerm.'%')
            ->orwhere(function ($q) use ($searchTerm) {
                $q->whereHas('answer', function ($q) use ($searchTerm) {
                    $q->where('label', 'LIKE', '%'.$searchTerm.'%');
                });
            })
            ->get();
    }

    function store(Request $request) {
        foreach($request->files as $track) {
            $uuid = (string) Str::uuid();

            Storage::disk('public')->put('tracks/'.$uuid.'.'.$track->getClientOriginalExtension(), $track);
            
            $t = new Track();
            $t->path = $uuid.'.'.$track->getClientOriginalExtension();
            $t->name = explode('.', $track->getClientOriginalName())[0];
            $t->answer_id = $request->answer;
            $t->save();
        }

        return ["status" => 201, "message" => "All tracks uploaded successfully"];
    }
}

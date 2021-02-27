<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Storage;
use App\Models\Track;

class TrackController extends Controller
{
    function search($searchTerm) {
        return Track::with('answer')
            ->where('id', 'LIKE', '%'.$searchTerm.'%')
            ->orwhere('path', 'LIKE', '%'.$searchTerm.'%')
            ->orwhere('name', 'LIKE', '%'.$searchTerm.'%')
            // ->orwhere('answer.label', 'LIKE', '%'.$searchTerm.'%')
            ->get();
    }

    function store(Request $request) {
        foreach($request->files as $track) {
            $uuid = (string) Str::uuid();

            dd($track);

            // Storage::disk('public')->put($uuid.'.mp3', $track);
            
            // $t = new Track();
            // $t->path = $uuid.'.mp3';
            // $t->name = $track['name'];
            // $t->answer_id = $track['answer'];
            // $t->save();
        }

        return ["status" => 201, "message" => "All tracks uploaded successfully"];
    }
}

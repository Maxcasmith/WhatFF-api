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

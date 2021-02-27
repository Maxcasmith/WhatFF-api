<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Track extends Model
{
    use HasFactory;

    function answer() {
        return $this->belongsTo('App\Models\Game', 'answer_id');
    }
}

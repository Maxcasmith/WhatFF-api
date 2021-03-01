<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

use App\Models\Avatar;
use App\Models\ExpChart;

class User extends Authenticatable
{
    use HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
        'email',
        'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    protected $appends = [
        'avatar', 'expToNextLevel', 'accumulatedExp'
    ];

    function addExp($exp) {
        $this->exp += $exp;
        if ($this->exp >= $this->expToNextLevel) {
            $this->exp -= ExpChart::getExpByLevel($this->attributes['level'] + 1);
            $this->level++;
        }
        $this->save();
        return $this;
    }

    function getAvatarAttribute() {
        return Avatar::find($this->attributes['avatar_id']);
    }
    
    function getExpToNextLevelAttribute() {
        return ExpChart::getExpByLevel($this->attributes['level'] + 1);
    }

    function getAccumulatedExpAttribute() {
        return ExpChart::getExpByLevel($this->attributes['level']) + $this->attributes['exp'];
    }
}

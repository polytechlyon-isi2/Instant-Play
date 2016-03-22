<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Game extends Model
{
    protected $table = 'game';

    public $timestamps = false;

    // 1:n
    public function studio()
    {
        return $this->belongsTo('App\Studio');
    }

    public function platform()
    {
        return $this->belongsTo('App\Platform');
    }

    public function video()
    {
        return $this->belongsTo('App\Video');
    }

    // 1:1
    public function spec()
    {
        return $this->belongsTo('App\Spec');
    }

    // n:1
    public function photos()
    {
        return $this->hasMany('App\Photo');
    }

    // n:n
    public function commands()
    {
        return $this->belongsToMany('App\Command');
    }

    public function categories()
    {
        return $this->belongsToMany('App\Category');
    }

    public function reductions()
    {
        return $this->belongsToMany('App\Reduction');
    }

    public function languages()
    {
        return $this->belongsToMany('App\Language');
    }
}

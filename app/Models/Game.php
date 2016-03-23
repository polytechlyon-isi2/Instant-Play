<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Game extends Model
{
    protected $table = 'game';

    public $timestamps = false;

    // 1:n
    public function studio()
    {
        return $this->belongsTo('App\Models\Studio');
    }

    public function platform()
    {
        return $this->belongsTo('App\Models\Platform');
    }

    // 1:1
    public function spec()
    {
        return $this->belongsTo('App\Models\Spec');
    }

    // n:1
    public function photos()
    {
        return $this->hasMany('App\Models\Photo');
    }

    // n:n
    public function commands()
    {
        return $this->belongsToMany('App\Models\Command');
    }

    public function categories()
    {
        return $this->belongsToMany('App\Models\Category');
    }

    public function reductions()
    {
        return $this->belongsToMany('App\Models\Reduction');
    }

    public function languages()
    {
        return $this->belongsToMany('App\Models\Language');
    }
}

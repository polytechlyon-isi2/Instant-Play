<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Reduction extends Model
{
    protected $table = 'reduction';

    public $timestamps = false;

    public function games()
    {
        return $this->belongsToMany('App\Game');
    }
}

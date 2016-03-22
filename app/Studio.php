<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Studio extends Model
{
    protected $table = 'studio';

    public $timestamps = false;

    // 1:n
    public function games()
    {
        return $this->hasMany('App\Game');
    }
}

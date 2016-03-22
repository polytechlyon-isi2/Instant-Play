<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Platform extends Model
{
    protected $table = 'platform';

    public $timestamps = false;

    // 1:n
    public function games()
    {
        return $this->hasMany('App\Game');
    }
}

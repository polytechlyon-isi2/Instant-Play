<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Video extends Model
{
    protected $table = 'video';

    public $timestamps = false;

    // 1:n
    public function games()
    {
        return $this->hasMany('App\Game');
    }
}

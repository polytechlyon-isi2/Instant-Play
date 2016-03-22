<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Platform extends Model
{
    protected $table = 'platform';

    public $timestamps = false;

    // 1:n
    public function games()
    {
        return $this->hasMany('App\Models\Game');
    }
}

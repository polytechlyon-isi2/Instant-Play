<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Command extends Model
{
    protected $table = 'command';

    public $timestamps = false;

    // 1:n
    public function user()
    {
        return $this->belongsTo('App\Models\User');
    }

    // n:n
    public function games()
    {
        return $this->belongsToMany('App\Models\Game');
    }
}

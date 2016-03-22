<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Spec extends Model
{
    protected $table = 'spec';

    public $timestamps = false;

    // 1:1
    public function game()
    {
        return $this->belongsTo('App\Game');
    }
}

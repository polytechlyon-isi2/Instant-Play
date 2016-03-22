<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Photo extends Model
{
    protected $table = 'photo';

    public $timestamps = false;

    public function game()
    {
        return $this->belongsTo('App\Game');
    }
}

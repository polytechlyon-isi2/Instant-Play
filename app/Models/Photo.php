<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Photo extends Model
{
    protected $table = 'photo';

    public $timestamps = false;

    public function game()
    {
        return $this->belongsTo('App\Models\Game');
    }
}

<?php

namespace App\NameAndShame;

use Illuminate\Database\Eloquent\Model;

class Reason extends Model
{
    public $timestamps = false;

    public function shames()
    {
        return $this->hasMany(Shame::class);
    }
}

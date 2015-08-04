<?php

namespace App\NameAndShame;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

class Shame extends Model
{
    public function numberPlate()
    {
        return $this->hasOne(NumberPlate::class);
    }

    public function reason()
    {
        return $this->belongsTo(Reason::class);
    }

    public function getTakenAtAttribute($value) {
        if(is_null($value)) {
            return $value;
        }
        $date = new Carbon($value);
        return $date->format('d/m/y');
    }
}

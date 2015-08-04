<?php

namespace App\NameAndShame;

use Illuminate\Database\Eloquent\Model;

class NumberPlate extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['reg'];
    public $timestamps = false;

    public function shames()
    {
        return $this->hasMany(Shame::class);
    }
}

<?php namespace App\YouTube;

use Illuminate\Support\Facades\Facade;

class YouTube extends Facade {
    public static function getFacadeAccessor() {
        return 'youtube';
    }
}
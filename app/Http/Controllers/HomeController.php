<?php

namespace App\Http\Controllers;

use App\NameAndShame\NumberPlate;
use App\NameAndShame\Shame;
use DB;

class HomeController extends Controller
{
    /**
     * Show homepage view
     *
     * @return \Illuminate\View\View
     */
    public function index() {
        $worst = Shame::orderBy(DB::raw('COUNT("id")'), 'DESC')->groupBy('number_plate_id')->take(3)->lists('number_plate_id')->toArray();
        $plates = NumberPlate::whereIn('id', $worst)->lists('reg')->toArray();

        return view('home')->withPlates($plates);
    }
}

<?php

namespace App\Http\Controllers;

use App\Http\Requests\ShameRequest;
use App\NameAndShame\NumberPlate;
use App\NameAndShame\Shame;
use Illuminate\Http\Request;

class PlateController extends Controller
{
    /**
     * Show view for adding video to number plate
     *
     * @return \Illuminate\View\View
     */
    public function addVideo($plate = '') {
        return view('addvideo')->withPlate($plate);
    }

    public function storeVideo(ShameRequest $request) {
        $reg = $this->parseReg($request->input('reg'));
        $numberPlate = NumberPlate::firstOrCreate(['reg' => $reg]);

        $shame = new Shame();
        $shame->number_plate_id = $numberPlate->id;
        $shame->link = 'https://www.youtube.com/embed/'.$request->input('video_id');
        $shame->reason_id = $request->input('reason');
        $shame->taken_at = empty($request->input('taken_at_date')) ? null: $request->input('taken_at_date');
        $shame->save();

        return redirect('/plate/'.$reg);
    }

    public function search(Request $request) {
        $term = $this->parseReg($request->input('search'));

        return redirect('/plate/'.$term);
    }

    public function plate($plate) {
        $plate = $this->parseReg($plate);
        $numberPlate = NumberPlate::whereReg($plate)->first();

        return view('plate')->withPlate($plate)->withNumberplate($numberPlate);
    }

    private function parseReg($reg) {
        return strtoupper(str_replace(' ', '', $reg));
    }
}

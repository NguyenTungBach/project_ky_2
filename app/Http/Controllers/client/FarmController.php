<?php

namespace App\Http\Controllers\client;

use App\Http\Controllers\Controller;

use App\Models\BlogFarm;
use App\Models\Farm;

class FarmController extends Controller
{
    public function getFarms()
    {
        return view('client.page.farm.template',[
            'items'=>BlogFarm::all(),
            'farms'=>Farm::all(),
        ]);
    }



}

<?php

namespace App\Http\Controllers\client;

use App\Http\Controllers\Controller;
use App\Models\District;
use App\Models\Ward;
use Illuminate\Http\Request;

class FarmController extends Controller
{
    public function getFarms()
    {
        return view('client.page.farm.template');
    }

    public function getRegister()
    {
        $districts = District::all();

        $wards = Ward::all();
        return $districts;
        return view('client.page.farm.register', [
            'districts' => $districts,
            'wards' => $wards,
        ]);
    }

    public function getWards()
    {
        $districtId = \request()->get('districtId');
        $districts = District::find($districtId);
        return json_encode($districts);
    }
}

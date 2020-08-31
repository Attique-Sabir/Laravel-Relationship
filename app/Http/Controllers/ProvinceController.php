<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Country;

class ProvinceController extends Controller
{
    //
    public function show( int $id)
    {

        $country = Country::find($id);
        // return $country->id;
        $province=$country->province;
    return view('view_province', compact('country','province'));


    }

}

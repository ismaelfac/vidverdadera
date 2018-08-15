<?php

namespace App\Http\Controllers\Location;

use App\Http\Controllers\Controller;
use App\Modelsgenerals\{ Location, Municipality };
use Illuminate\Http\Request;

class CreateLocationController extends Controller
{
    public function create()
    {
        $municipalities = Municipality::getAllMunicipalitiesAttribute()->toJson();
        $municipalities = json_decode($municipalities);
        return view('generals_date.location.create',compact('municipalities'));
    }
    public function store(Request $request)
    {
        $this->validate($request, [
            'description' => 'required',
            'short_name' => 'required',
            'municipality_id' => 'required'
        ]);
        $location = Location::create($request->all());
        return redirect(url('/home'));
    }
}

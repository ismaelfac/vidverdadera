<?php

namespace App\Http\Controllers\Location;
use App\Http\Controllers\Controller;
use App\Modelsgenerals\{ Location, Municipality };
use Illuminate\Http\Request;

class LocationController extends Controller
{
    public function index()
    {
        $locations = Location::orderBy('municipality_id','DESC')->paginate();
        return view('generals_date.location.index',compact('locations'));
    }
    public function show(Location $location)
    {   $municipalities = Municipality::getAllMunicipalitiesAttribute()->toArray();
        $locations = Location::getFindLocationByMunicipalityAttribute($municipalities)->toArray();  
        return view('generals_date.location.show',compact('locations', 'municipalities'));
    }
}

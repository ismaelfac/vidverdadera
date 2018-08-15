<?php

namespace App\Http\Controllers\Location;
use App\Http\Controllers\Controller;
use App\Modelsgenerals\{ Location, Municipality };
use Illuminate\Http\Request;

class LocationController extends Controller
{
    public function index()
    {
        $locations = Location::getAllLocationsAttribute()->toJson();
        $locations = json_decode($locations);
        return view('generals_date.location.index',compact('locations'));
    }
    public function show($municipality)
    {   $municipalities = Municipality::getAllMunicipalitiesAttribute()->toArray();
        $locations = Location::getFindLocationByMunicipalityAttribute($municipalities)->toArray();  
        return view('generals_date.location.show',compact('locations', 'municipalities'));
    }
}

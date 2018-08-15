<?php

namespace App\Http\Controllers\Municipality;
use App\Http\Controllers\Controller;
use App\Modelsgenerals\{ Location, Municipality, Departament };
use Illuminate\Http\Request;

class MunicipalityController extends Controller
{
    public function index()
    {
        $municipalities = Municipality::orderBy('departament_id','DESC')->paginate(5);
        return view('generals_date.municipality.index',compact('municipalities'));
    }
    public function show(Municipality $municipality, $slug)
    {   
        $locations = Location::where('municipality_id',$municipality->id)->orderBy('municipality_id','DESC')->paginate();
        return view('municipality.show', compact('municipality', 'locations'));
    }
}

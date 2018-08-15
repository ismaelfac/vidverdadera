<?php

namespace App\Http\Controllers\Municipality;
use App\Http\Controllers\Controller;
use App\Modelsgenerals\{ Location, Municipality, Departament };
use Illuminate\Http\Request;

class CreateMunicipalityController extends Controller
{
    public function create()
    {
        $departaments = Departament::all();
        return view('generals_date.municipality.create',compact('departaments'));
    }
    public function store(Request $request)
    {
        $this->validate($request, [
            'description' => 'required',
            'short_name' => 'required',
            'departament_id' => 'required'
        ]);
        $municipality = Municipality::create($request->all());
        return redirect(url('/home'));
    }
}

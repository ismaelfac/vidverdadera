<?php

namespace App\Modelsgenerals;
use App\Modelsgenerals\{ Location, Neighborhood, Municipality };
use Illuminate\Database\Eloquent\Model;

class Location extends Model
{
    protected $fillable = ['description', 'short_name', 'id_municipality'];
    public $timestamps = false;

    public function beighborhoods(){
        return $this->hasMany(Neighborhood::class);
    }
    public function municipality(){
        return $this->belongsTo(Municipality::class);
    }

    public static function getFindLocationByMunicipalityAttribute($municipality)
    {
        $municipality = Municipality::find("$municipality");
        $locations = Location::where('municipality_id',$municipality->id)->get();
        return $locations;
    }
    public static function getAllLocationsAttribute()
    {
        $locations = Location::all();
        return $locations;
    }
    
}

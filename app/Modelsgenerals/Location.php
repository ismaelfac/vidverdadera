<?php

namespace App\Modelsgenerals;
use App\Modelsgenerals\{ Location, Neighborhood, Municipality };
use Illuminate\Database\Eloquent\Model;

class Location extends Model
{
    protected $fillable = ['description', 'short_name', 'municipality_id'];
    public $timestamps = false;

    public function beighborhoods(){
        return $this->hasMany(Neighborhood::class);
    }
    public function municipality(){
        return $this->belongsTo(Municipality::class);
    }

    public static function getFindLocationByMunicipalityAttribute($municipality)
    {
        $result_id = Municipality::find($municipality);
        if($result_id->id){
            return static::where('municipality_id',$result_id->id)->get();
        }
    }

    public function getUrlAttribute()
    {
        return route('municipality.show', $this->id);
    }
    
}

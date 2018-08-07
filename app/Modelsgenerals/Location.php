<?php

namespace App\Modelsgeneral;
use App\Modelsgeneral\{ Neighborhood, Municipality };
use Illuminate\Database\Eloquent\Model;

class Location extends Model
{
    //
    protected $fillable = ['description', 'short_name', 'id_municipality'];
    public $timestamps = false;

    public function beighborhoods(){
        return $this->hasMany(Neighborhood::class);
    }
    public function municipality(){
        return $this->belongsTo(Municipality::class);
    }
    
}

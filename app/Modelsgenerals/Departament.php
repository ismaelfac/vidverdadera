<?php

namespace App\Modelsgenerals;
use App\Modelsgenerals\{ Country, Municipality };
use Illuminate\Database\Eloquent\Model;

class Departament extends Model
{
    //
    protected $fillable = ['code', 'description', 'short_name', 'country_id'];
    public $timestamps = false;
    
    public function country(){
        return $this->belongsTo(App\Country::class);
    }
    public function municipalities(){
        return $this->hasMany(Municipality::class);
    }
}
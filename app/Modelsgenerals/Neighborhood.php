<?php

namespace App\Modelsgenerals;
use App\Modelsgenerals\{ Location };
use Illuminate\Database\Eloquent\Model;

class Neighborhood extends Model
{
    //
    protected $fillable = ['description', 'id_location'];
    public $timestamps = false;

   
    public function location()
    {
        return $this->belongsTo(Location::class);
    }
    
}
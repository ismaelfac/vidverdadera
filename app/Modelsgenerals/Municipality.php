<?php
use App\Modelsgenerals\{ Departament, Municipality, Location };
namespace App\Modelsgenerals;

use Illuminate\Database\Eloquent\Model;

class Municipality extends Model
{
    //
    protected $fillable = ['description', 'departament_id'];
    public $timestamps = false;

    public function departament(){
        return $this->belongsTo(Departament::class);
    }
    public function locations(){
        return $this->hasMany(Location::class);
    }

    public static function getAllMunicipalitiesAttribute()
    {
        return static::all();
    }
}
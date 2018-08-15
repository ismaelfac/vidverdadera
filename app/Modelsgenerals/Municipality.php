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
    public function setDescriptionAttribute($value)
    {
        $this->attributes['description'] = $value;
        $this->attributes['slug'] = Str::slug($value);
    }
    public function getUrlAttribute()
    {
        return route('municipality.show', [$this->id, $this->slug]);
    }
  
}
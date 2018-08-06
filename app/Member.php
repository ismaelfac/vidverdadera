<?php

namespace App;
use App\ModelsGenerals\{ Identification, Neighborhood, Municipality, Departament, Country, CivilStatus };
use App\{ Leader, DistrictPastors };

use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Model;

class Member extends Model
{
    protected $fillable = [
        'first_name', 
        'last_name',
        'dni',
        'type_dni',
        'phone',
        'landline',
        'email',
        'address',
        'neighborhood_id',
        'municipality_id',
        'departament_id',
        'country_id',
        'birthdate',
        'civil_status',
        'wedding_anniversary',
        'is_leaders'
    ];
    public function identification()
    {
        return $this->belongsTo(Identification::class);
    }
    public function neighborhood()
    {
        return $this->belongsTo(Neighborhood::class);
    }
    public function municipality()
    {
        return $this->belongsTo(Municipality::class);
    }
    public function departament()
    {
        return $this->belongsTo(Departament::class);
    }
    public function country()
    {
        return $this->belongsTo(Country::class);
    }
    public function civilStatus()
    {
        return $this->belongsTo(CivilStatus::class);
    }
    public function districtPastor()
    {
        return $this->belongsTo(DistrictPastors::class);
    }
    public function setNameAttribute($value)
    {
        $this->attributes['first_name'] = $value;
        $this->attributes['slug'] = Str::slug($value);
    }
    public function getUrlAttribute()
    {
        return route('member.show', [$this->id, $this->slug]);
    }
    public function leader()
    {
        return $this->belongsTo(Leader::class);
    }
}

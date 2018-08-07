<?php
use App\Modelsgenerals\{ Identification, Neighborhood, Municipality, Departament, Country, Civilstatus, Church };
use App\{ User, Leader};
namespace App;

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
        'latitude',
        'longitude',
        'neighborhood_id',
        'municipality_id',
        'departament_id',
        'country_id',
        'birthdate',
        'civil_status',
        'wedding_anniversary',
        'active',
        'is_leader',
        'church_id'
    ];
    protected $casts = [
        'active' = 'boolean',
        'is_leader' = 'boolean'
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
        return $this->belongsTo(Civilstatus::class);
    }
    public function church(){
        return $this->belongsTo(Church::class);
    }
    public function leaders()
    {
        return $this->hasMany(Leader::class);
    }
    public function users()
    {
        return $this->belongsTo(User::class);
    }
    public function is_leader()
    {
        return $this->is_leader;
    }
    public function getUrlAttribute()
    {
        return route('member.show', $this->id);
    }
    public function getLocationAttribute()
    {
        return $this->address;
    }
}

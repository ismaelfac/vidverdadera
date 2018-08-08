<?php
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
        'active' => 'boolean',
        'is_leader' => 'boolean'
    ];
    public function identification()
    {
        return $this->belongsTo(Modelsgenerals\Identification::class, 'type_dni');
    }
    public function neighborhood()
    {
        return $this->belongsTo(Modelsgenerals\Neighborhood::class);
    }
    public function municipality()
    {
        return $this->belongsTo(Modelsgenerals\Municipality::class);
    }
    public function departament()
    {
        return $this->belongsTo(Modelsgenerals\Departament::class);
    }
    public function country()
    {
        return $this->belongsTo(Modelsgenerals\Country::class);
    }
    public function civilStatus()
    {
        return $this->belongsTo(Modelsgenerals\Civilstatus::class);
    }
    public function church(){
        return $this->belongsTo(Modelsgenerals\Church::class);
    }
    public function leaders()
    {
        return $this->hasMany(Leader::class);
    }
    public function user()
    {
        return $this->belongsTo(User::class);
    }
    public function isLeader()
    {
        return ($this->is_leader ? true : false);
    }
    public function getUrlAttribute()
    {
        return route('member.show', $this->id);
    }
    public function getLocationAttribute()
    {
        return $this->address;
    }
    public function isActive()
    {
        return ($this->active ? true : false);
    }
    public static function findByEmail($email)
    {
        return static::where(compact('email'))->first();
    }
    public static function findByDni($dni)
    {
        return static::where(compact('dni'))->first();
    }
}

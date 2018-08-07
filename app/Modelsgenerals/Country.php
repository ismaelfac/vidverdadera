<?php

namespace App\Modelsgenerals;
use App\Modelsgenerals\Departament;
use Illuminate\Database\Eloquent\Model;

class Country extends Model
{
    //
    protected $fillable = ['code', 'description', 'nationality'];
    public $timestamps = false;

    public function departament()
    {
        return $this->hasMany(Departament::class);
    }

}
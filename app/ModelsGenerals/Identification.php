<?php

namespace App\ModelsGenerals;

use Illuminate\Database\Eloquent\Model;

class Identification extends Model
{
    //
    protected $fillable = ['description','shortName'];

    public function members () 
    {
        return $this->belongsTo(App\Member::class);
    }
}

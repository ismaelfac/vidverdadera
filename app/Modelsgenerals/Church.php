<?php

namespace App\Modelsgenerals;
use App\Modelsgenerals\Member;
use Illuminate\Database\Eloquent\Model;

class Church extends Model
{
    //
    protected $fillable = ['description'];
    public $timestamps = false;

    public function Members(){
        return $this->hasMany(Member::class);
    }
}

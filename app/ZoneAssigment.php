<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ZoneAssigment extends Model
{
    protected $fillable = ['leader_member', 'location_id', 'activation_date','active'];
    protected $casts = [
        'active' => 'boolean',
    ];
    public function leader_members()
    {
        return $this->belongsToMany(leader_member::class);
    }
    public function locations()
    {
        return $this->belongsToMany(Modelsgenerals\Location::class);
    }
}

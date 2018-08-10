<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class MemberPastor extends Model
{
    protected $fillable = ['member_id', 'zone_assigment_id', 'activation_date_district','zonal_pastors_id', 'activation_date_zonal','expiration_date','active'];
    protected $casts = [
        'active' => 'boolean',
    ];
    public function members()
    {
        return $this->belongsToMany(Member::class);
    }
    public function zone_assigments()
    {
        return $this->belongsToMany(ZoneAssigment::class);
    }
}

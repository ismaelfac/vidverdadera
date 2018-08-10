<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class LeaderMember extends Model
{
    protected $fillable = ['leader_id','member_id', 'appointment_date', 'expiration','active'];
    protected $casts = [
        'active' => 'boolean',
    ];
    public function leaders()
    {
        return $this->belongsToMany(Leader::class);
    }
    public function members()
    {
        return $this->belongsToMany(Member::class);
    }
}

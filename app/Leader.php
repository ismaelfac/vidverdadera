<?php

namespace App;
use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Model;

class Leader extends Model
{
    //
    protected $fillable = ['is_deacon','is_oldMan','is_cult_Pastor','is_interimPastor','is_ordainedPastor','is_zonalPastor','is_districtPastor','is_teacherChildren','is_emiMaster','is_dissimulatedTeacher','is_evangelist','is_praise','is_coPastor','member_id'];

    public function members()
    {
        return $this->belongsTo(App\Member::class);
    }

    public function subscriptions()
    {
        
    }
}

<?php
use App\Member;
namespace App;
use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Model;

class Leader extends Model
{
    protected $fillable = ['description','short_name'];
    public $timestamps = false;
    
    public function members()
    {
        return $this->belongsToMany(Member::class);
    }
}

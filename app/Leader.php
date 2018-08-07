<?php
use App\Member;
namespace App;
use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Model;

class Leader extends Model
{
    //
    protected $fillable = ['description'];

    public function member()
    {
        return $this->belongsTo(Member::class);
    }

    public function subscriptions()
    {
        
    }
}

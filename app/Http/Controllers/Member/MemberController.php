<?php

namespace App\Http\Controllers\Member;
use App\Http\Controllers\Controller;
use App\{ Member };
use Illuminate\Http\Request;

class MemberController extends Controller
{
    public function index()
    {
        $members = Member::orderBy('created_at','DESC')->paginate();
        //dd($members);
        return view('member.index',compact('members'));
    }
    public function show(Member $member)
    {   
        
    }
}
